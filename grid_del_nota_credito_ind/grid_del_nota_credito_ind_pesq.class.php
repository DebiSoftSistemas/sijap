<?php

class grid_del_nota_credito_ind_pesq
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $cmp_formatado;
   var $nm_data;
   var $Campos_Mens_erro;

   var $comando;
   var $comando_sum;
   var $comando_filtro;
   var $comando_ini;
   var $comando_fim;
   var $NM_operador;
   var $NM_data_qp;
   var $NM_path_filter;
   var $NM_curr_fil;
   var $nm_location;
   var $NM_ajax_opcao;
   var $NM_case_insensitive;
   var $nmgp_botoes = array();
   var $NM_fil_ant = array();

   /**
    * @access  public
    */
   function __construct()
   {
   }

   /**
    * @access  public
    * @global  string  $bprocessa  
    */
   function monta_busca()
   {
      global $bprocessa;
      include("../_lib/css/" . $this->Ini->str_schema_filter . "_filter.php");
      $this->Ini->Str_btn_filter = "botones_debi/botones_debi" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".php";
      $this->Str_btn_filter_css  = "botones_debi/botones_debi.css";
      $this->Ini->str_google_fonts = (isset($str_google_fonts) && !empty($str_google_fonts))?$str_google_fonts:'';
      include($this->Ini->path_btn . $this->Ini->Str_btn_filter);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['path_libs_php'] = $this->Ini->path_lib_php;
      $this->Img_sep_filter = "/" . trim($str_toolbar_separator);
      $this->Block_img_col  = trim($str_block_col);
      $this->Block_img_exp  = trim($str_block_exp);
      $this->Bubble_tail    = trim($str_bubble_tail);
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_config_btn.php", "F", "nmButtonOutput"); 
      $this->NM_case_insensitive = true;
      $this->init();
      if ($this->NM_ajax_flag && $this->NM_ajax_opcao == "ajax_grid_search_change_fil")
      {
          $arr_new_fil = $this->recupera_filtro($this->NM_ajax_grid_fil);
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] = array(); 
          foreach ($arr_new_fil as $tp)
          {
              foreach ($tp as $ind => $cada_dado)
              {
                  $field = $cada_dado['field'];
                  if (substr($cada_dado['field'], 0, 3) == "SC_")
                  {
                      $field = substr($cada_dado['field'], 3);
                  }
                  if (substr($cada_dado['field'], 0, 6) == "id_ac_")
                  {
                      $field = substr($cada_dado['field'], 6);
                  }
                  if (is_array($cada_dado['value']))
                  {
                      $arr_tmp = array();
                      foreach($cada_dado['value'] as $ix => $dados)
                      {
                          if (isset($dados['opt']))
                          {
                              $arr_tmp[] = $dados['opt'];
                          }
                          else
                          {
                              $arr_tmp[] = $dados;
                          }
                      }
                      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'][$field] = $arr_tmp; 
                  }
                  else
                  {
                      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'][$field] = $cada_dado['value']; 
                  }
              }
          }
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] = NM_conv_charset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'], $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->processa_busca();
          if (!empty($this->Campos_Mens_erro)) 
          {
              scriptcase_error_display($this->Campos_Mens_erro, ""); 
              return false;
          }
          return true;
      }
      if ($this->NM_ajax_flag && $this->NM_ajax_opcao == "ajax_grid_search")
      {
         $this->processa_busca();
         return;
      }
      if ($this->NM_ajax_flag)
      {
          ob_start();
          $this->Arr_result = array();
          $this->processa_ajax();
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          if ($this->Db)
          {
              $this->Db->Close(); 
          }
          exit;
      }
      if (isset($bprocessa) && "pesq" == $bprocessa)
      {
         $this->processa_busca();
      }
      else
      {
         $this->monta_formulario();
      }
   }

   /**
    * @access  public
    */
   function monta_formulario()
   {
      $this->monta_html_ini();
      $this->monta_cabecalho();
      $this->monta_form();
      $this->monta_html_fim();
   }

   /**
    * @access  public
    */
   function init()
   {
      global $bprocessa;
      $_SESSION['scriptcase']['sc_tab_meses']['int'] = array(
                                  $this->Ini->Nm_lang['lang_mnth_janu'],
                                  $this->Ini->Nm_lang['lang_mnth_febr'],
                                  $this->Ini->Nm_lang['lang_mnth_marc'],
                                  $this->Ini->Nm_lang['lang_mnth_apri'],
                                  $this->Ini->Nm_lang['lang_mnth_mayy'],
                                  $this->Ini->Nm_lang['lang_mnth_june'],
                                  $this->Ini->Nm_lang['lang_mnth_july'],
                                  $this->Ini->Nm_lang['lang_mnth_augu'],
                                  $this->Ini->Nm_lang['lang_mnth_sept'],
                                  $this->Ini->Nm_lang['lang_mnth_octo'],
                                  $this->Ini->Nm_lang['lang_mnth_nove'],
                                  $this->Ini->Nm_lang['lang_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_meses']['abr'] = array(
                                  $this->Ini->Nm_lang['lang_shrt_mnth_janu'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_febr'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_marc'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_apri'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_mayy'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_june'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_july'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_augu'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_sept'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_octo'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_nove'],
                                  $this->Ini->Nm_lang['lang_shrt_mnth_dece']);
      $_SESSION['scriptcase']['sc_tab_dias']['int'] = array(
                                  $this->Ini->Nm_lang['lang_days_sund'],
                                  $this->Ini->Nm_lang['lang_days_mond'],
                                  $this->Ini->Nm_lang['lang_days_tued'],
                                  $this->Ini->Nm_lang['lang_days_wend'],
                                  $this->Ini->Nm_lang['lang_days_thud'],
                                  $this->Ini->Nm_lang['lang_days_frid'],
                                  $this->Ini->Nm_lang['lang_days_satd']);
      $_SESSION['scriptcase']['sc_tab_dias']['abr'] = array(
                                  $this->Ini->Nm_lang['lang_shrt_days_sund'],
                                  $this->Ini->Nm_lang['lang_shrt_days_mond'],
                                  $this->Ini->Nm_lang['lang_shrt_days_tued'],
                                  $this->Ini->Nm_lang['lang_shrt_days_wend'],
                                  $this->Ini->Nm_lang['lang_shrt_days_thud'],
                                  $this->Ini->Nm_lang['lang_shrt_days_frid'],
                                  $this->Ini->Nm_lang['lang_shrt_days_satd']);
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_functions.php", "", "") ; 
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_api.php", "", "") ; 
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_data.class.php", "C", "nm_data") ; 
      $this->nm_data = new nm_data("es");
      $pos_path = strrpos($this->Ini->path_prod, "/");
      $this->NM_path_filter = $this->Ini->root . substr($this->Ini->path_prod, 0, $pos_path) . "/conf/filters/";
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['opcao'] = "igual";
   }

   function processa_ajax()
   {
      global $NM_filters, $NM_filters_del, $nmgp_save_name, $nmgp_save_option, $NM_fields_refresh, $NM_parms_refresh, $Campo_bi, $Opc_bi, $NM_operador, $nmgp_save_origem;
//-- ajax metodos ---
      if ($this->NM_ajax_opcao == "ajax_filter_save")
      {
          ob_end_clean();
          ob_end_clean();
          $this->salva_filtro($nmgp_save_origem);
          $this->NM_fil_ant = $this->gera_array_filtros();
          $Nome_filter = "";
          $Opt_filter  = "<option value=\"\"></option>\r\n";
          foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
          {
              $Cada_filter = $Tipo_filter[2];
              if ($_SESSION['scriptcase']['charset'] != "UTF-8")
              {
                  $Tipo_filter[1] = sc_convert_encoding($Tipo_filter[1], "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($Tipo_filter[1] != $Nome_filter)
              {
                  $Nome_filter = $Tipo_filter[1];
                  $Opt_filter .= "<option value=\"\">" . grid_del_nota_credito_ind_pack_protect_string($Nome_filter) . "</option>\r\n";
              }
              $Opt_filter .= "<option value=\"" . grid_del_nota_credito_ind_pack_protect_string($Tipo_filter[0]) . "\">.." . grid_del_nota_credito_ind_pack_protect_string($Cada_filter) .  "</option>\r\n";
          }
          if (isset($nmgp_save_origem) && $nmgp_save_origem == "grid")
          {
              $Ajax_select  = "<SELECT id=\"id_sel_recup_filters\" class=\"scFilterToolbar_obj\" name=\"sel_recup_filters\" onChange=\"nm_change_grid_search(this)\" size=\"1\">\r\n";
              $Ajax_select .= $Opt_filter;
              $Ajax_select .= "</SELECT>\r\n";
              $this->Arr_result['setValue'][] = array('field' => "id_NM_filters_save", 'value' => $Ajax_select);
              $Ajax_select = "<SELECT id=\"sel_filters_del\" class=\"scFilterToolbar_obj\" name=\"NM_filters_del\" size=\"1\">\r\n";
              $Ajax_select .= $Opt_filter;
              $Ajax_select .= "</SELECT>\r\n";
              $this->Arr_result['setValue'][] = array('field' => "id_sel_filters_del", 'value' => $Ajax_select);
              return;
          }
          $Ajax_select  = "<SELECT id=\"sel_recup_filters_bot\" name=\"NM_filters_bot\" onChange=\"nm_submit_filter(this, 'bot');\" size=\"1\">\r\n";
          $Ajax_select .= $Opt_filter;
          $Ajax_select .= "</SELECT>\r\n";
          $this->Arr_result['setValue'][] = array('field' => "idAjaxSelect_NM_filters_bot", 'value' => $Ajax_select);
          $Ajax_select = "<SELECT id=\"sel_filters_del_bot\" class=\"scFilterToolbar_obj\" name=\"NM_filters_del_bot\" size=\"1\">\r\n";
          $Ajax_select .= $Opt_filter;
          $Ajax_select .= "</SELECT>\r\n";
          $this->Arr_result['setValue'][] = array('field' => "idAjaxSelect_NM_filters_del_bot", 'value' => $Ajax_select);
      }

      if ($this->NM_ajax_opcao == "ajax_filter_delete")
      {
          ob_end_clean();
          ob_end_clean();
          $this->apaga_filtro();
          $this->NM_fil_ant = $this->gera_array_filtros();
          $Nome_filter = "";
          $Opt_filter  = "<option value=\"\"></option>\r\n";
          foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
          {
              $Cada_filter = $Tipo_filter[2];
              if ($_SESSION['scriptcase']['charset'] != "UTF-8")
              {
                  $Tipo_filter[1] = sc_convert_encoding($Tipo_filter[1], "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($Tipo_filter[1] != $Nome_filter)
              {
                  $Nome_filter  = $Tipo_filter[1];
                  $Opt_filter .= "<option value=\"\">" .  grid_del_nota_credito_ind_pack_protect_string($Nome_filter) . "</option>\r\n";
              }
              $Opt_filter .= "<option value=\"" . grid_del_nota_credito_ind_pack_protect_string($Tipo_filter[0]) . "\">.." . grid_del_nota_credito_ind_pack_protect_string($Cada_filter) .  "</option>\r\n";
          }
          if (isset($nmgp_save_origem) && $nmgp_save_origem == "grid")
          {
              $Ajax_select  = "<SELECT id=\"id_sel_recup_filters\" class=\"scFilterToolbar_obj\" name=\"sel_recup_filters\" onChange=\"nm_change_grid_search(this)\" size=\"1\">\r\n";
              $Ajax_select .= $Opt_filter;
              $Ajax_select .= "</SELECT>\r\n";
              $this->Arr_result['setValue'][] = array('field' => "id_NM_filters_save", 'value' => $Ajax_select);
              $Ajax_select = "<SELECT id=\"sel_filters_del\" class=\"scFilterToolbar_obj\" name=\"NM_filters_del\" size=\"1\">\r\n";
              $Ajax_select .= $Opt_filter;
              $Ajax_select .= "</SELECT>\r\n";
              $this->Arr_result['setValue'][] = array('field' => "id_sel_filters_del", 'value' => $Ajax_select);
              return;
          }
          $Ajax_select  = "<SELECT id=\"sel_recup_filters_bot\" class=\"scFilterToolbar_obj\" style=\"display:". (count($this->NM_fil_ant)>0?'':'none') .";\" name=\"NM_filters_bot\" onChange=\"nm_submit_filter(this, 'bot');\" size=\"1\">\r\n";
          $Ajax_select .= $Opt_filter;
          $Ajax_select .= "</SELECT>\r\n";
          $this->Arr_result['setValue'][] = array('field' => "idAjaxSelect_NM_filters_bot", 'value' => $Ajax_select);
          $Ajax_select = "<SELECT id=\"sel_filters_del_bot\" class=\"scFilterToolbar_obj\" name=\"NM_filters_del_bot\" size=\"1\">\r\n";
          $Ajax_select .= $Opt_filter;
          $Ajax_select .= "</SELECT>\r\n";
          $this->Arr_result['setValue'][] = array('field' => "idAjaxSelect_NM_filters_del_bot", 'value' => $Ajax_select);
      }
      if ($this->NM_ajax_opcao == "ajax_filter_select")
      {
          ob_end_clean();
          ob_end_clean();
          $this->Arr_result = $this->recupera_filtro($NM_filters);
      }

      if ($this->NM_ajax_opcao == 'autocomp_cl_nombre')
      {
          $cl_nombre = ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($_GET['q'])) ? sc_convert_encoding($_GET['q'], $_SESSION['scriptcase']['charset'], "UTF-8") : $_GET['q'];
          $nmgp_def_dados = $this->lookup_ajax_cl_nombre($cl_nombre);
          ob_end_clean();
          ob_end_clean();
          $count_aut_comp = 0;
          $resp_aut_comp  = array();
          foreach ($nmgp_def_dados as $Ind => $Lista)
          {
             if (is_array($Lista))
             {
                 foreach ($Lista as $Cod => $Valor)
                 {
                     if ($_GET['cod_desc'] == "S")
                     {
                         $Valor = $Cod . " - " . $Valor;
                     }
                     $resp_aut_comp[] = array('text' => $Valor , 'id' => $Cod);
                     $count_aut_comp++;
                 }
             }
             if ($count_aut_comp == $_GET['max_itens'])
             {
                 break;
             }
          }
          $oJson = new Services_JSON();
          echo $oJson->encode(array('results' => $resp_aut_comp));
          $this->Db->Close(); 
          exit;
      }
      if ($this->NM_ajax_opcao == 'autocomp_cl_identificacion')
      {
          $cl_identificacion = ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($_GET['q'])) ? sc_convert_encoding($_GET['q'], $_SESSION['scriptcase']['charset'], "UTF-8") : $_GET['q'];
          $nmgp_def_dados = $this->lookup_ajax_cl_identificacion($cl_identificacion);
          ob_end_clean();
          ob_end_clean();
          $count_aut_comp = 0;
          $resp_aut_comp  = array();
          foreach ($nmgp_def_dados as $Ind => $Lista)
          {
             if (is_array($Lista))
             {
                 foreach ($Lista as $Cod => $Valor)
                 {
                     if ($_GET['cod_desc'] == "S")
                     {
                         $Valor = $Cod . " - " . $Valor;
                     }
                     $resp_aut_comp[] = array('text' => $Valor , 'id' => $Cod);
                     $count_aut_comp++;
                 }
             }
             if ($count_aut_comp == $_GET['max_itens'])
             {
                 break;
             }
          }
          $oJson = new Services_JSON();
          echo $oJson->encode(array('results' => $resp_aut_comp));
          $this->Db->Close(); 
          exit;
      }
   }
   function lookup_ajax_cl_nombre($cl_nombre)
   {
      $cl_nombre = substr($this->Db->qstr($cl_nombre), 1, -1);
            $cl_nombre_look = (is_string($cl_nombre) ? substr($this->Db->qstr($cl_nombre), 1, -1) : $cl_nombre); 
      $nmgp_def_dados = array(); 
      $nm_comando = "select distinct cl_nombre from " . $this->Ini->nm_tabela . " where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and nc_cliente=" . $_SESSION['var_propietario'] . ") and  #lowerI#cl_nombre#lowerF# like #lowerI#'%" . $cl_nombre . "%'#lowerF# order by cl_nombre"; 
      $this->Sel_case_sensitive($nm_comando);
      unset($cmp1,$cmp2);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
      { 
         while (!$rs->EOF) 
         { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext() ; 
         } 
         $rs->Close() ; 
      } 
      else  
      {  
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit; 
      } 

      return $nmgp_def_dados;
   }
   
   function lookup_ajax_cl_identificacion($cl_identificacion)
   {
      $cl_identificacion = substr($this->Db->qstr($cl_identificacion), 1, -1);
            $cl_identificacion_look = (is_string($cl_identificacion) ? substr($this->Db->qstr($cl_identificacion), 1, -1) : $cl_identificacion); 
      $nmgp_def_dados = array(); 
      $nm_comando = "select distinct cl_identificacion from " . $this->Ini->nm_tabela . " where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and nc_cliente=" . $_SESSION['var_propietario'] . ") and  #lowerI#cl_identificacion#lowerF# like #lowerI#'%" . $cl_identificacion . "%'#lowerF# order by cl_identificacion"; 
      $this->Sel_case_sensitive($nm_comando);
      unset($cmp1,$cmp2);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
      { 
         while (!$rs->EOF) 
         { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext() ; 
         } 
         $rs->Close() ; 
      } 
      else  
      {  
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit; 
      } 

      return $nmgp_def_dados;
   }
   

   /**
    * @access  public
    */
   function processa_busca()
   {
      $this->inicializa_vars();
      $this->trata_campos();
      if ($this->NM_ajax_flag && ($this->NM_ajax_opcao == "ajax_grid_search" || $this->NM_ajax_opcao == "ajax_grid_search_change_fil"))
      {
          $this->finaliza_resultado_ajax();
          return;
      }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->monta_formulario();
      }
      else
      {
          $this->finaliza_resultado();
      }
   }

   /**
    * @access  public
    */
   function and_or()
   {
      $posWhere = strpos(strtolower($this->comando), "where");
      if (FALSE === $posWhere)
      {
         $this->comando     .= " where (";
         $this->comando_sum .= " and (";
         $this->comando_fim  = " ) ";
      }
      if ($this->comando_ini == "ini")
      {
          if (FALSE !== $posWhere)
          {
              $this->comando     .= " and ( ";
              $this->comando_sum .= " and ( ";
              $this->comando_fim  = " ) ";
          }
         $this->comando_ini  = "";
      }
      elseif ("or" == $this->NM_operador)
      {
         $this->comando        .= " or ";
         $this->comando_sum    .= " or ";
         $this->comando_filtro .= " or ";
      }
      else
      {
         $this->comando        .= " and ";
         $this->comando_sum    .= " and ";
         $this->comando_filtro .= " and ";
      }
   }

   /**
    * @access  public
    * @param  string  $nome  
    * @param  string  $condicao  
    * @param  mixed  $campo  
    * @param  mixed  $campo2  
    * @param  string  $nome_campo  
    * @param  string  $tp_campo  
    * @global  array  $nmgp_tab_label  
    */
   function monta_condicao($nome, $condicao, $campo, $campo2 = "", $nome_campo="", $tp_campo="", $tp_unaccent=false)
   {
      global $nmgp_tab_label;
      $condicao   = strtoupper($condicao);
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $Nm_numeric = array();
      $nm_esp_postgres = array();
      $nm_ini_lower = " #lowerI#";
      $nm_fim_lower = "#lowerF#";
      $Nm_accent = $this->Ini->Nm_accent_no;
      if ($tp_unaccent) {
          $Nm_accent = $this->Ini->Nm_accent_yes;
      }
      $Nm_numeric[] = "nc_numero";$Nm_numeric[] = "nc_total";
      $campo_join = strtolower(str_replace(".", "_", $nome));
      if (in_array($campo_join, $Nm_numeric))
      {
          if ($condicao == "EP" || $condicao == "NE")
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$campo_join]);
              return;
          }
         $nm_ini_lower = "";
         $nm_fim_lower = "";
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['decimal_db'] == ".")
         {
            $nm_aspas  = "";
            $nm_aspas1 = "";
         }
         if ($condicao != "IN")
         {
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['decimal_db'] == ".")
            {
               $campo  = str_replace(",", ".", $campo);
               $campo2 = str_replace(",", ".", $campo2);
            }
         }
      }
      $Nm_datas[] = "nc_fecha";
      if (in_array($nome, $Nm_datas))
      {
         $nm_ini_lower = "";
         $nm_fim_lower = "";
      }
      if (in_array($campo_join, $Nm_datas))
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['SC_sep_date']))
          {
              $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['SC_sep_date'];
              $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['SC_sep_date1'];
          }
      }
      if ($campo == "" && $condicao != "NU" && $condicao != "NN" && $condicao != "EP" && $condicao != "NE")
      {
         return;
      }
      else
      {
         $tmp_pos = (is_string($campo)) ? strpos($campo, "##@@") : false;
         if ($tmp_pos === false)
         {
             $res_lookup = $campo;
         }
         else
         {
             $res_lookup = substr($campo, $tmp_pos + 4);
             $campo = substr($campo, 0, $tmp_pos);
             if ($campo == "" && $condicao != "NU" && $condicao != "NN" && $condicao != "EP" && $condicao != "NE")
             {
                 return;
             }
         }
         $tmp_pos = (is_string($this->cmp_formatado[$nome_campo])) ? strpos($this->cmp_formatado[$nome_campo], "##@@") : false;
         if ($tmp_pos !== false)
         {
             $this->cmp_formatado[$nome_campo] = substr($this->cmp_formatado[$nome_campo], $tmp_pos + 4);
         }
         $this->and_or();
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $campo2 = substr($this->Db->qstr($campo2), 1, -1);
         $nome_sum = "del_nota_credito.$nome";
         if ($tp_campo == "TIMESTAMP")
         {
             $tp_campo = "DATETIME";
         }
         if (in_array($campo_join, $Nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "II" || $condicao == "QP" || $condicao == "NP"))
         {
             $nome     = "CAST ($nome AS TEXT)";
             $nome_sum = "CAST ($nome_sum AS TEXT)";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome     = "CAST ($nome AS TEXT)";
             $nome_sum = "CAST ($nome_sum AS TEXT)";
         }
         if (substr($tp_campo, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "to_char ($nome, 'YYYY-MM-DD hh24:mi:ss')";
                 $nome_sum = "to_char ($nome_sum, 'YYYY-MM-DD hh24:mi:ss')";
             }
         }
         elseif (substr($tp_campo, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "to_char ($nome, 'YYYY-MM-DD')";
                 $nome_sum = "to_char ($nome_sum, 'YYYY-MM-DD')";
             }
         }
         elseif (substr($tp_campo, 0, 4) == "TIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "to_char ($nome, 'hh24:mi:ss')";
                 $nome_sum = "to_char ($nome_sum, 'hh24:mi:ss')";
             }
         }
         if (in_array($campo_join, $Nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && ($condicao == "II" || $condicao == "QP" || $condicao == "NP"))
         {
             $nome     = "CAST ($nome AS VARCHAR)";
             $nome_sum = "CAST ($nome_sum AS VARCHAR)";
         }
         if ($tp_campo == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "convert(char(10),$nome,121)";
                 $nome_sum = "convert(char(10),$nome_sum,121)";
             }
         }
         if ($tp_campo == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "convert(char(19),$nome,121)";
                 $nome_sum = "convert(char(19),$nome_sum,121)";
             }
         }
         if (substr($tp_campo, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !$this->Date_part)
         {
             $nome     = "TO_DATE(TO_CHAR($nome, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
             $nome_sum = "TO_DATE(TO_CHAR($nome_sum, 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
             $tp_campo = "DATETIME";
         }
         if (substr($tp_campo, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix) && !$this->Date_part)
         {
             $nome     = "EXTEND($nome, YEAR TO FRACTION)";
             $nome_sum = "EXTEND($nome_sum, YEAR TO FRACTION)";
         }
         elseif (substr($tp_campo, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix) && !$this->Date_part)
         {
             $nome     = "EXTEND($nome, YEAR TO DAY)";
             $nome_sum = "EXTEND($nome_sum, YEAR TO DAY)";
         }
         if (in_array($campo_join, $Nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && ($condicao == "II" || $condicao == "QP" || $condicao == "NP"))
         {
             $nome     = "CAST ($nome AS VARCHAR(255))";
             $nome_sum = "CAST ($nome_sum AS VARCHAR(255))";
         }
         if (substr($tp_campo, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "to_char ($nome, 'YYYY-MM-DD hh24:mi:ss')";
                 $nome_sum = "to_char ($nome_sum, 'YYYY-MM-DD hh24:mi:ss')";
             }
         }
         if (substr($tp_campo, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && !$this->Date_part)
         {
             if (in_array($condicao, array('II','QP','NP','IN','EP','NE'))) {
                 $nome     = "to_char ($nome, 'YYYY-MM-DD')";
                 $nome_sum = "to_char ($nome_sum, 'YYYY-MM-DD')";
             }
         }
         switch ($condicao)
         {
            case "EQ":     // 
               $this->comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
               $this->comando_sum    .= $nm_ini_lower . $nome_sum . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
               $this->comando_filtro .= $nm_ini_lower . $nome . $nm_fim_lower. " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->cmp_formatado[$nome_campo];
            break;
            case "II":     // 
               if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
               {
                   $op_all       = " ilike ";
                   $nm_ini_lower = "";
                   $nm_fim_lower = "";
               }
               else
               {
                   $op_all = " like ";
               }
               $this->comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
               $this->comando_sum    .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome_sum . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
               $this->comando_filtro .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->cmp_formatado[$nome_campo];
            break;
             case "QP";     // 
             case "NP";     // 
                $concat = " " . $this->NM_operador . " ";
                if ($condicao == "QP")
                {
                    $op_all    = " #sc_like_# ";
                    $lang_like = $this->Ini->Nm_lang['lang_srch_like'];
                }
                else
                {
                    $op_all    = " not #sc_like_# ";
                    $lang_like = $this->Ini->Nm_lang['lang_srch_not_like'];
                }
               $NM_cond    = "";
               $NM_cmd     = "";
               $NM_cmd_sum = "";
               if (substr($tp_campo, 0, 4) == "DATE" && $this->Date_part)
               {
                   if ($this->NM_data_qp['ano'] != "____")
                   {
                       $NM_cond    .= (empty($NM_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                       $NM_cond    .= $this->Ini->Nm_lang['lang_srch_year'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['ano'];
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : $concat;
                       $NM_cmd_sum .= (empty($NM_cmd_sum)) ? "" : $concat;
                       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                       {
                           $NM_cmd     .= "strftime('%Y', " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           $NM_cmd_sum .= "strftime('%Y', " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                       {
                           $NM_cmd     .= "extract(year from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(year from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'YYYY') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'YYYY') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= $this->Ini_date_char . "extract('year' from " . $nome . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                               $NM_cmd_sum .= $this->Ini_date_char . "extract('year' from " . $nome_sum . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           }
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                       {
                           $NM_cmd     .= "extract(year from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(year from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                       {
                           $NM_cmd     .= "TO_CHAR(" . $nome . ", 'YYYY')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           $NM_cmd_sum .= "TO_CHAR(" . $nome_sum . ", 'YYYY')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                       {
                           $NM_cmd     .= "DATEPART(year, " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           $NM_cmd_sum .= "DATEPART(year, " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'YYYY') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'YYYY') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= "year (" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                               $NM_cmd_sum .= "year (" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           }
                       }
                       else
                       {
                           $NM_cmd     .= "year(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                           $NM_cmd_sum .= "year(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                       }
                   }
                   if ($this->NM_data_qp['mes'] != "__")
                   {
                       $NM_cond    .= (empty($NM_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                       $NM_cond    .= $this->Ini->Nm_lang['lang_srch_mnth'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['mes'];
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : $concat;
                       $NM_cmd_sum .= (empty($NM_cmd_sum)) ? "" : $concat;
                       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                       {
                           $NM_cmd     .= "strftime('%m', " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           $NM_cmd_sum .= "strftime('%m', " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                       {
                           $NM_cmd     .= "extract(month from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(month from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'MM') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'MM') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= $this->Ini_date_char . "extract('month' from " . $nome . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                               $NM_cmd_sum .= $this->Ini_date_char . "extract('month' from " . $nome_sum . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           }
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                       {
                           $NM_cmd     .= "extract(month from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(month from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                       {
                           $NM_cmd     .= "TO_CHAR(" . $nome . ", 'MM')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           $NM_cmd_sum .= "TO_CHAR(" . $nome_sum . ", 'MM')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                       {
                           $NM_cmd     .= "DATEPART(month, " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           $NM_cmd_sum .= "DATEPART(month, " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'MM') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'MM') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= "month (" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                               $NM_cmd_sum .= "month (" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           }
                       }
                       else
                       {
                           $NM_cmd     .= "month(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                           $NM_cmd_sum .= "month(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                       }
                   }
                   if ($this->NM_data_qp['dia'] != "__")
                   {
                       $NM_cond    .= (empty($NM_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                       $NM_cond    .= $this->Ini->Nm_lang['lang_srch_days'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['dia'];
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : $concat;
                       $NM_cmd_sum .= (empty($NM_cmd_sum)) ? "" : $concat;
                       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                       {
                           $NM_cmd     .= "strftime('%d', " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           $NM_cmd_sum .= "strftime('%d', " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                       {
                           $NM_cmd     .= "extract(day from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(day from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'DD') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'DD') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= $this->Ini_date_char . "extract('day' from " . $nome . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                               $NM_cmd_sum .= $this->Ini_date_char . "extract('day' from " . $nome_sum . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           }
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                       {
                           $NM_cmd     .= "extract(day from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(day from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                       {
                           $NM_cmd     .= "TO_CHAR(" . $nome . ", 'DD')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           $NM_cmd_sum .= "TO_CHAR(" . $nome_sum . ", 'DD')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                       {
                           $NM_cmd     .= "DATEPART(day, " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           $NM_cmd_sum .= "DATEPART(day, " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'DD') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'DD') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= "DAYOFMONTH(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                               $NM_cmd_sum .= "DAYOFMONTH(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           }
                       }
                       else
                       {
                           $NM_cmd     .= "day(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                           $NM_cmd_sum .= "day(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                       }
                   }
               }
               if (strpos($tp_campo, "TIME") !== false && $this->Date_part)
               {
                   if ($this->NM_data_qp['hor'] != "__")
                   {
                       $NM_cond    .= (empty($NM_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                       $NM_cond    .= $this->Ini->Nm_lang['lang_srch_time'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['hor'];
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : $concat;
                       $NM_cmd_sum .= (empty($NM_cmd_sum)) ? "" : $concat;
                       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                       {
                           $NM_cmd     .= "strftime('%H', " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           $NM_cmd_sum .= "strftime('%H', " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                       {
                           $NM_cmd     .= "extract(hour from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(hour from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'hh24') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'hh24') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= $this->Ini_date_char . "extract('hour' from " . $nome . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                               $NM_cmd_sum .= $this->Ini_date_char . "extract('hour' from " . $nome_sum . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           }
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                       {
                           $NM_cmd     .= "extract(hour from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(hour from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                       {
                           $NM_cmd     .= "TO_CHAR(" . $nome . ", 'HH24')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           $NM_cmd_sum .= "TO_CHAR(" . $nome_sum . ", 'HH24')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                       {
                           $NM_cmd     .= "DATEPART(hour, " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           $NM_cmd_sum .= "DATEPART(hour, " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'hh24') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'hh24') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= "hour(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                               $NM_cmd_sum .= "hour(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           }
                       }
                       else
                       {
                           $NM_cmd     .= "hour(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                           $NM_cmd_sum .= "hour(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                       }
                   }
                   if ($this->NM_data_qp['min'] != "__")
                   {
                       $NM_cond    .= (empty($NM_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                       $NM_cond    .= $this->Ini->Nm_lang['lang_srch_mint'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['min'];
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : $concat;
                       $NM_cmd_sum .= (empty($NM_cmd_sum)) ? "" : $concat;
                       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                       {
                           $NM_cmd     .= "strftime('%M', " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           $NM_cmd_sum .= "strftime('%M', " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                       {
                           $NM_cmd     .= "extract(minute from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(minute from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'mi') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'mi') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= $this->Ini_date_char . "extract('minute' from " . $nome . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                               $NM_cmd_sum .= $this->Ini_date_char . "extract('minute' from " . $nome_sum . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           }
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                       {
                           $NM_cmd     .= "extract(minute from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(minute from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                       {
                           $NM_cmd     .= "TO_CHAR(" . $nome . ", 'MI')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           $NM_cmd_sum .= "TO_CHAR(" . $nome_sum . ", 'MI')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                       {
                           $NM_cmd     .= "DATEPART(minute, " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           $NM_cmd_sum .= "DATEPART(minute, " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'mi') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'mi') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= "minute(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                               $NM_cmd_sum .= "minute(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           }
                       }
                       else
                       {
                           $NM_cmd     .= "minute(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                           $NM_cmd_sum .= "minute(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                       }
                   }
                   if ($this->NM_data_qp['seg'] != "__")
                   {
                       $NM_cond    .= (empty($NM_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                       $NM_cond    .= $this->Ini->Nm_lang['lang_srch_scnd'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['seg'];
                       $NM_cmd     .= (empty($NM_cmd)) ? "" : $concat;
                       $NM_cmd_sum .= (empty($NM_cmd_sum)) ? "" : $concat;
                       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                       {
                           $NM_cmd     .= "strftime('%S', " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           $NM_cmd_sum .= "strftime('%S', " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                       {
                           $NM_cmd     .= "extract(second from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(second from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'ss') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'ss') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= $this->Ini_date_char . "extract('second' from " . $nome . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                               $NM_cmd_sum .= $this->Ini_date_char . "extract('second' from " . $nome_sum . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           }
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                       {
                           $NM_cmd     .= "extract(second from " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           $NM_cmd_sum .= "extract(second from " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                       {
                           $NM_cmd     .= "TO_CHAR(" . $nome . ", 'SS')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           $NM_cmd_sum .= "TO_CHAR(" . $nome_sum . ", 'SS')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                       {
                           $NM_cmd     .= "DATEPART(second, " . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           $NM_cmd_sum .= "DATEPART(second, " . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                       }
                       elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                       {
                           if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                           {
                               $NM_cmd     .= "to_char (" . $nome . ", 'ss') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                               $NM_cmd_sum .= "to_char (" . $nome_sum . ", 'ss') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           }
                           else
                           {
                               $NM_cmd     .= "second(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                               $NM_cmd_sum .= "second(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           }
                       }
                       else
                       {
                           $NM_cmd     .= "second(" . $nome . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                           $NM_cmd_sum .= "second(" . $nome_sum . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                       }
                   }
               }
               if ($this->Date_part)
               {
                   if (!empty($NM_cmd))
                   {
                       $NM_cmd     = " (" . $NM_cmd . ")";
                       $NM_cmd_sum = " (" . $NM_cmd_sum . ")";
                       $this->comando        .= $NM_cmd;
                       $this->comando_sum    .= $NM_cmd_sum;
                       $this->comando_filtro .= $NM_cmd;
                       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . ": " . $NM_cond . "##*@@";
                       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
                       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $NM_cond;
                       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $NM_cond;
                   }
               }
               else
               {
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
                   {
                       $op_all       = str_replace("#sc_like_#", "ilike", $op_all);
                       $nm_ini_lower = "";
                       $nm_fim_lower = "";
                   }
                   else
                   {
                       $op_all = str_replace("#sc_like_#", "like", $op_all);
                   }
                   $this->comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
                   $this->comando_sum    .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome_sum . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
                   $this->comando_filtro .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $lang_like . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $lang_like . " " . $this->cmp_formatado[$nome_campo];
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $lang_like . " " . $this->cmp_formatado[$nome_campo];
               }
            break;
            case "DF":     // 
               $this->comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
               $this->comando_sum    .= $nm_ini_lower . $nome_sum . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
               $this->comando_filtro .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->cmp_formatado[$nome_campo];
            break;
            case "GT":     // 
               $this->comando        .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_sum    .= " $nome_sum > " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_filtro .= " $nome > " . $nm_aspas . $campo . $nm_aspas1;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->cmp_formatado[$nome_campo];
            break;
            case "GE":     // 
               $this->comando        .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_sum    .= " $nome_sum >= " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_filtro .= " $nome >= " . $nm_aspas . $campo . $nm_aspas1;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->cmp_formatado[$nome_campo];
            break;
            case "LT":     // 
               $this->comando        .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_sum    .= " $nome_sum < " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_filtro .= " $nome < " . $nm_aspas . $campo . $nm_aspas1;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->cmp_formatado[$nome_campo];
            break;
            case "LE":     // 
               $this->comando        .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_sum    .= " $nome_sum <= " . $nm_aspas . $campo . $nm_aspas1;
               $this->comando_filtro .= " $nome <= " . $nm_aspas . $campo . $nm_aspas1;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->cmp_formatado[$nome_campo] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->cmp_formatado[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->cmp_formatado[$nome_campo];
            break;
            case "BW":     // 
               $this->comando        .= " $nome between " . $nm_aspas . $campo . $nm_aspas1 . " and " . $nm_aspas . $campo2 . $nm_aspas1;
               $this->comando_sum    .= " $nome_sum between " . $nm_aspas . $campo . $nm_aspas1 . " and " . $nm_aspas . $campo2 . $nm_aspas1;
               $this->comando_filtro .= " $nome between " . $nm_aspas . $campo . $nm_aspas1 . " and " . $nm_aspas . $campo2 . $nm_aspas1;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->cmp_formatado[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->cmp_formatado[$nome_campo . "_input_2"] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->cmp_formatado[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->cmp_formatado[$nome_campo . "_input_2"];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->cmp_formatado[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->cmp_formatado[$nome_campo . "_input_2"];
            break;
            case "IN":     // 
               $nm_sc_valores = explode(",", $campo);
               $cond_str  = "";
               $nm_cond   = "";
               $cond_descr  = "";
               $count_descr = 0;
               $end_descr   = false;
               $lim_descr   = 15;
               $lang_descr  = strlen($this->Ini->Nm_lang['lang_srch_orr_cond']);
               if (!empty($nm_sc_valores))
               {
                   foreach ($nm_sc_valores as $nm_sc_valor)
                   {
                      if (in_array($campo_join, $Nm_numeric) && substr_count($nm_sc_valor, ".") > 1)
                      {
                         $nm_sc_valor = str_replace(".", "", $nm_sc_valor);
                      }
                      if ("" != $cond_str)
                      {
                         $cond_str .= ",";
                         $nm_cond  .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
                      }
                      $cond_str .= $nm_ini_lower . $nm_aspas . $nm_sc_valor . $nm_aspas1 . $nm_fim_lower;
                      $nm_cond  .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                      if (((strlen($cond_descr) + strlen($nm_sc_valor) + $lang_descr) < $lim_descr) || empty($cond_descr))
                      {
                          $cond_descr .= (empty($cond_descr)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
                          $cond_descr .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                          $count_descr++;
                      }
                      elseif (!$end_descr)
                      {
                          $cond_descr .= " +" . (count($nm_sc_valores) - $count_descr);
                          $end_descr = true;
                      };
                   }
               }
               $this->comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $cond_str . ")";
               $this->comando_sum    .= $nm_ini_lower . $nome_sum . $nm_fim_lower . " in (" . $cond_str . ")";
               $this->comando_filtro .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $cond_str . ")";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $nm_cond . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $cond_descr;
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $nm_cond;
            break;
            case "NU":     // 
               $this->comando        .= " $nome IS NULL ";
               $this->comando_sum    .= " $nome_sum IS NULL ";
               $this->comando_filtro .= " $nome IS NULL ";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_null'] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_null'];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_null'];
            break;
            case "NN":     // 
               $this->comando        .= " $nome IS NOT NULL ";
               $this->comando_sum    .= " $nome_sum IS NOT NULL ";
               $this->comando_filtro .= " $nome IS NOT NULL ";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_nnul'] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_nnul'];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_nnul'];
            break;
            case "EP":     // 
               $this->comando        .= " $nome = '' ";
               $this->comando_sum    .= " $nome_sum = '' ";
               $this->comando_filtro .= " $nome = '' ";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_empty'] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_empty'];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_empty'];
            break;
            case "NE":     // 
               $this->comando        .= " $nome <> '' ";
               $this->comando_sum    .= " $nome_sum <> '' ";
               $this->comando_filtro .= " $nome <> '' ";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $nmgp_tab_label[$nome_campo] . " " . $this->Ini->Nm_lang['lang_srch_nempty'] . "##*@@";
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['label'] = $nmgp_tab_label[$nome_campo];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['descr'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_nempty'];
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'][$nome_campo]['hint'] = $nmgp_tab_label[$nome_campo] . ": " . $this->Ini->Nm_lang['lang_srch_nempty'];
            break;
         }
      }
   }

   function nm_prep_date(&$val, $tp, $tsql, &$cond, $format_nd, $tp_nd)
   {
       $fill_dt = false;
       if ($tsql == "TIMESTAMP")
       {
           $tsql = "DATETIME";
       }
       $cond = strtoupper($cond);
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access) && $tp != "ND")
       {
           if ($cond == "EP")
           {
               $cond = "NU";
           }
           if ($cond == "NE")
           {
               $cond = "NN";
           }
       }
       if ($cond == "NU" || $cond == "NN" || $cond == "EP" || $cond == "NE")
       {
           $val    = array();
           $val[0] = "";
           return;
       }
       if ($cond != "II" && $cond != "QP" && $cond != "NP")
       {
           $fill_dt = true;
       }
       if ($fill_dt)
       {
           $val[0]['dia'] = (!empty($val[0]['dia']) && strlen($val[0]['dia']) == 1) ? "0" . $val[0]['dia'] : $val[0]['dia'];
           $val[0]['mes'] = (!empty($val[0]['mes']) && strlen($val[0]['mes']) == 1) ? "0" . $val[0]['mes'] : $val[0]['mes'];
           if ($tp == "DH")
           {
               $val[0]['hor'] = (!empty($val[0]['hor']) && strlen($val[0]['hor']) == 1) ? "0" . $val[0]['hor'] : $val[0]['hor'];
               $val[0]['min'] = (!empty($val[0]['min']) && strlen($val[0]['min']) == 1) ? "0" . $val[0]['min'] : $val[0]['min'];
               $val[0]['seg'] = (!empty($val[0]['seg']) && strlen($val[0]['seg']) == 1) ? "0" . $val[0]['seg'] : $val[0]['seg'];
           }
           if ($cond == "BW")
           {
               $val[1]['dia'] = (!empty($val[1]['dia']) && strlen($val[1]['dia']) == 1) ? "0" . $val[1]['dia'] : $val[1]['dia'];
               $val[1]['mes'] = (!empty($val[1]['mes']) && strlen($val[1]['mes']) == 1) ? "0" . $val[1]['mes'] : $val[1]['mes'];
               if ($tp == "DH")
               {
                   $val[1]['hor'] = (!empty($val[1]['hor']) && strlen($val[1]['hor']) == 1) ? "0" . $val[1]['hor'] : $val[1]['hor'];
                   $val[1]['min'] = (!empty($val[1]['min']) && strlen($val[1]['min']) == 1) ? "0" . $val[1]['min'] : $val[1]['min'];
                   $val[1]['seg'] = (!empty($val[1]['seg']) && strlen($val[1]['seg']) == 1) ? "0" . $val[1]['seg'] : $val[1]['seg'];
               }
           }
       }
       if ($cond == "BW")
       {
           $this->NM_data_1 = array();
           $this->NM_data_1['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
           $this->NM_data_1['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
           $this->NM_data_1['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
           $this->NM_data_1['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
           $this->NM_data_1['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
           $this->NM_data_1['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
           $this->data_menor($this->NM_data_1);
           $this->NM_data_2 = array();
           $this->NM_data_2['ano'] = (isset($val[1]['ano']) && !empty($val[1]['ano'])) ? $val[1]['ano'] : "____";
           $this->NM_data_2['mes'] = (isset($val[1]['mes']) && !empty($val[1]['mes'])) ? $val[1]['mes'] : "__";
           $this->NM_data_2['dia'] = (isset($val[1]['dia']) && !empty($val[1]['dia'])) ? $val[1]['dia'] : "__";
           $this->NM_data_2['hor'] = (isset($val[1]['hor']) && !empty($val[1]['hor'])) ? $val[1]['hor'] : "__";
           $this->NM_data_2['min'] = (isset($val[1]['min']) && !empty($val[1]['min'])) ? $val[1]['min'] : "__";
           $this->NM_data_2['seg'] = (isset($val[1]['seg']) && !empty($val[1]['seg'])) ? $val[1]['seg'] : "__";
           $this->data_maior($this->NM_data_2);
           $val = array();
           if ($tp == "ND")
           {
               $out_dt1 = $format_nd;
               $out_dt1 = str_replace("yyyy", $this->NM_data_1['ano'], $out_dt1);
               $out_dt1 = str_replace("mm",   $this->NM_data_1['mes'], $out_dt1);
               $out_dt1 = str_replace("dd",   $this->NM_data_1['dia'], $out_dt1);
               $out_dt1 = str_replace("hh",   "", $out_dt1);
               $out_dt1 = str_replace("ii",   "", $out_dt1);
               $out_dt1 = str_replace("ss",   "", $out_dt1);
               $out_dt2 = $format_nd;
               $out_dt2 = str_replace("yyyy", $this->NM_data_2['ano'], $out_dt2);
               $out_dt2 = str_replace("mm",   $this->NM_data_2['mes'], $out_dt2);
               $out_dt2 = str_replace("dd",   $this->NM_data_2['dia'], $out_dt2);
               $out_dt2 = str_replace("hh",   "", $out_dt2);
               $out_dt2 = str_replace("ii",   "", $out_dt2);
               $out_dt2 = str_replace("ss",   "", $out_dt2);
               $val[0] = $out_dt1;
               $val[1] = $out_dt2;
               return;
           }
           if ($tsql == "TIME")
           {
               $val[0] = $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
               $val[1] = $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
           }
           elseif (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] = $this->NM_data_1['ano'] . "-" . $this->NM_data_1['mes'] . "-" . $this->NM_data_1['dia'];
               $val[1] = $this->NM_data_2['ano'] . "-" . $this->NM_data_2['mes'] . "-" . $this->NM_data_2['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " " . $this->NM_data_1['hor'] . ":" . $this->NM_data_1['min'] . ":" . $this->NM_data_1['seg'];
                   $val[1] .= " " . $this->NM_data_2['hor'] . ":" . $this->NM_data_2['min'] . ":" . $this->NM_data_2['seg'];
               }
           }
           return;
       }
       $this->NM_data_qp = array();
       $this->NM_data_qp['ano'] = (isset($val[0]['ano']) && $val[0]['ano'] != "") ? $val[0]['ano'] : "____";
       $this->NM_data_qp['mes'] = (isset($val[0]['mes']) && $val[0]['mes'] != "") ? $val[0]['mes'] : "__";
       $this->NM_data_qp['dia'] = (isset($val[0]['dia']) && $val[0]['dia'] != "") ? $val[0]['dia'] : "__";
       $this->NM_data_qp['hor'] = (isset($val[0]['hor']) && $val[0]['hor'] != "") ? $val[0]['hor'] : "__";
       $this->NM_data_qp['min'] = (isset($val[0]['min']) && $val[0]['min'] != "") ? $val[0]['min'] : "__";
       $this->NM_data_qp['seg'] = (isset($val[0]['seg']) && $val[0]['seg'] != "") ? $val[0]['seg'] : "__";
       if ($tp != "ND" && ($cond == "LE" || $cond == "LT" || $cond == "GE" || $cond == "GT"))
       {
           $count_fill = 0;
           foreach ($this->NM_data_qp as $x => $tx)
           {
               if (substr($tx, 0, 2) != "__")
               {
                   $count_fill++;
               }
           }
           if ($count_fill > 1)
           {
               if ($cond == "LE" || $cond == "GT")
               {
                   $this->data_maior($this->NM_data_qp);
               }
               else
               {
                   $this->data_menor($this->NM_data_qp);
               }
               if ($tsql == "TIME")
               {
                   $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
               }
               elseif (substr($tsql, 0, 4) == "DATE")
               {
                   $val[0] = $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
                   if (strpos($tsql, "TIME") !== false)
                   {
                       $val[0] .= " " . $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
                   }
               }
               return;
           }
       }
       foreach ($this->NM_data_qp as $x => $tx)
       {
           if (substr($tx, 0, 2) == "__" && ($x == "dia" || $x == "mes" || $x == "ano"))
           {
               if (substr($tsql, 0, 4) == "DATE")
               {
                   $this->Date_part = true;
                   break;
               }
           }
           if (substr($tx, 0, 2) == "__" && ($x == "hor" || $x == "min" || $x == "seg"))
           {
               if (strpos($tsql, "TIME") !== false && ($tp == "DH" || ($tp == "DT" && $cond != "LE" && $cond != "LT" && $cond != "GE" && $cond != "GT")))
               {
                   $this->Date_part = true;
                   break;
               }
           }
       }
       if ($this->Date_part)
       {
           $this->Ini_date_part = "";
           $this->End_date_part = "";
           $this->Ini_date_char = "";
           $this->End_date_char = "";
           if (isset($this->Ini->nm_bases_sqlite) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
           {
               $this->Ini_date_part = "'";
               $this->End_date_part = "'";
           }
           if ($tp != "ND")
           {
               if ($cond == "EQ")
               {
                   $this->Operador_date_part = " = ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
               }
               elseif ($cond == "II")
               {
                   $this->Operador_date_part = " like ";
                   $this->Ini_date_part = "'";
                   $this->End_date_part = "%'";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_strt'];
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
               elseif ($cond == "DF")
               {
                   $this->Operador_date_part = " <> ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
               }
               elseif ($cond == "GT")
               {
                   $this->Operador_date_part = " > ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['pesq_cond_maior'];
               }
               elseif ($cond == "GE")
               {
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_grtr_equl'];
                   $this->Operador_date_part = " >= ";
               }
               elseif ($cond == "LT")
               {
                   $this->Operador_date_part = " < ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less'];
               }
               elseif ($cond == "LE")
               {
                   $this->Operador_date_part = " <= ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_less_equl'];
               }
               elseif ($cond == "NP")
               {
                   $this->Operador_date_part = " not like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_diff'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
               else
               {
                   $this->Operador_date_part = " like ";
                   $this->Lang_date_part = $this->Ini->Nm_lang['lang_srch_equl'];
                   $this->Ini_date_part = "'%";
                   $this->End_date_part = "%'";
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $this->Ini_date_char = "CAST (";
                       $this->End_date_char = " AS TEXT)";
                   }
               }
           }
           if ($cond == "DF")
           {
               $cond = "NP";
           }
           if ($cond != "NP")
           {
               $cond = "QP";
           }
       }
       $val = array();
       if ($tp != "ND" && ($cond == "QP" || $cond == "NP"))
       {
           $val[0] = "";
           if (substr($tsql, 0, 4) == "DATE")
           {
               $val[0] .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
               if (strpos($tsql, "TIME") !== false)
               {
                   $val[0] .= " ";
               }
           }
           if (strpos($tsql, "TIME") !== false)
           {
               $val[0] .= $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           }
           return;
       }
       if ($cond == "II" || $cond == "DF" || $cond == "EQ" || $cond == "LT" || $cond == "GE")
       {
           $this->data_menor($this->NM_data_qp);
       }
       else
       {
           $this->data_maior($this->NM_data_qp);
       }
       if ($tsql == "TIME")
       {
           $val[0] = $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
           return;
       }
       $format_sql = "";
       if (substr($tsql, 0, 4) == "DATE")
       {
           $format_sql .= $this->NM_data_qp['ano'] . "-" . $this->NM_data_qp['mes'] . "-" . $this->NM_data_qp['dia'];
           if (strpos($tsql, "TIME") !== false)
           {
               $format_sql .= " ";
           }
       }
       if (strpos($tsql, "TIME") !== false)
       {
           $format_sql .=  $this->NM_data_qp['hor'] . ":" . $this->NM_data_qp['min'] . ":" . $this->NM_data_qp['seg'];
       }
       if ($tp != "ND")
       {
           $val[0] = $format_sql;
           return;
       }
       if ($tp == "ND")
       {
           $format_nd = str_replace("yyyy", $this->NM_data_qp['ano'], $format_nd);
           $format_nd = str_replace("mm",   $this->NM_data_qp['mes'], $format_nd);
           $format_nd = str_replace("dd",   $this->NM_data_qp['dia'], $format_nd);
           $format_nd = str_replace("hh",   $this->NM_data_qp['hor'], $format_nd);
           $format_nd = str_replace("ii",   $this->NM_data_qp['min'], $format_nd);
           $format_nd = str_replace("ss",   $this->NM_data_qp['seg'], $format_nd);
           $val[0] = $format_nd;
           return;
       }
   }
   function data_menor(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "0001" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "01" : $data_arr["mes"];
       $data_arr["dia"] = ("__" == $data_arr["dia"])   ? "01" : $data_arr["dia"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "00" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "00" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "00" : $data_arr["seg"];
   }

   function data_maior(&$data_arr)
   {
       $data_arr["ano"] = ("____" == $data_arr["ano"]) ? "9999" : $data_arr["ano"];
       $data_arr["mes"] = ("__" == $data_arr["mes"])   ? "12" : $data_arr["mes"];
       $data_arr["hor"] = ("__" == $data_arr["hor"])   ? "23" : $data_arr["hor"];
       $data_arr["min"] = ("__" == $data_arr["min"])   ? "59" : $data_arr["min"];
       $data_arr["seg"] = ("__" == $data_arr["seg"])   ? "59" : $data_arr["seg"];
       if ("__" == $data_arr["dia"])
       {
           $data_arr["dia"] = "31";
           if ($data_arr["mes"] == "04" || $data_arr["mes"] == "06" || $data_arr["mes"] == "09" || $data_arr["mes"] == "11")
           {
               $data_arr["dia"] = 30;
           }
           elseif ($data_arr["mes"] == "02")
           { 
                if  ($data_arr["ano"] % 4 == 0)
                {
                     $data_arr["dia"] = 29;
                }
                else 
                {
                     $data_arr["dia"] = 28;
                }
           }
       }
   }

   /**
    * @access  public
    * @param  string  $nm_data_hora  
    */
   function limpa_dt_hor_pesq(&$nm_data_hora)
   {
      $nm_data_hora = str_replace("Y", "", $nm_data_hora); 
      $nm_data_hora = str_replace("M", "", $nm_data_hora); 
      $nm_data_hora = str_replace("D", "", $nm_data_hora); 
      $nm_data_hora = str_replace("H", "", $nm_data_hora); 
      $nm_data_hora = str_replace("I", "", $nm_data_hora); 
      $nm_data_hora = str_replace("S", "", $nm_data_hora); 
      $tmp_pos = strpos($nm_data_hora, "--");
      if ($tmp_pos !== FALSE)
      {
          $nm_data_hora = str_replace("--", "-", $nm_data_hora); 
      }
      $tmp_pos = strpos($nm_data_hora, "::");
      if ($tmp_pos !== FALSE)
      {
          $nm_data_hora = str_replace("::", ":", $nm_data_hora); 
      }
   }

   /**
    * @access  public
    */
   function retorna_pesq()
   {
      global $nm_apl_dependente;
   $NM_retorno = "./";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> del_nota_credito</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
</HEAD>
<BODY id="grid_search" class="scGridPage">
<FORM style="display:none;" name="form_ok" method="POST" action="<?php echo $NM_retorno; ?>" target="_self">
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="pesq"> 
</FORM>
<SCRIPT type="text/javascript">
 document.form_ok.submit();
</SCRIPT>
</BODY>
</HTML>
<?php
}

   /**
    * @access  public
    */
   function monta_html_ini()
   {
       header("X-XSS-Protection: 1; mode=block");
       header("X-Frame-Options: SAMEORIGIN");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_othr_grid_title'] ?> del_nota_credito</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
 <script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery/js/jquery.js"></script>
          <?php 
           if ($_SESSION['scriptcase']['proc_mobile']) {  
               $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
               $sc_app_data = json_encode([ 
                   'forceMobile' => $forced_mobile, 
                   'appType' => 'search', 
                   'improvements' => true, 
                   'displayOptionsButton' => false, 
                   'displayScrollUp' => true, 
                   'bottomToolbarFixed' => true, 
                   'mobileSimpleToolbar' => false, 
                   'scrollUpPosition' => 'R', 
                   'toolbarOrientation' => 'H', 
                   'mobilePanes' => 'true', 
                   'navigationBarButtons' => unserialize('a:0:{}'), 
                   'langs' => [ 
                       'lang_refined_search' => html_entity_decode($this->Ini->Nm_lang['lang_refined_search'], ENT_COMPAT, $_SESSION['scriptcase']['charset']), 
                       'lang_summary_search_button' => html_entity_decode($this->Ini->Nm_lang['lang_summary_search_button'], ENT_COMPAT, $_SESSION['scriptcase']['charset']), 
                       'lang_details_button' => html_entity_decode($this->Ini->Nm_lang['lang_details_button'], ENT_COMPAT, $_SESSION['scriptcase']['charset']), 
                   ], 
               ]); ?> 
        <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
        <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
        <script type="text/javascript" src="../_lib/lib/js/nm_mobile.js"></script>
        <link rel='stylesheet' href='../_lib/lib/css/nm_mobile.css' type='text/css'/>
    <script>
        $(document).ready(function(){
            bootstrapMobile();
        });
    </script>          <?php } ?>
 <script type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></script>
 <script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></script>
 <script type="text/javascript" src="../_lib/lib/js/scInput.js"></script>
 <script type="text/javascript" src="../_lib/lib/js/jquery.scInput.js"></script>
 <script type="text/javascript" src="../_lib/lib/js/jquery.scInput2.js"></script>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/select2/js/select2.full.min.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_error.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_error<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Str_btn_filter_css ?>" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_form.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/font-awesome/css/all.min.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_filter.css" /> 
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_filter<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>grid_del_nota_credito_ind/grid_del_nota_credito_ind_fil_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />
</HEAD>
<?php
$vertical_center = '';
?>
<BODY id="grid_search" class="scFilterPage" style="<?php echo $vertical_center ?>">
<?php echo $this->Ini->Ajax_result_set ?>
   <script type="text/javascript">
     var applicationKeys = '';
     applicationKeys += 'ctrl+k';
     applicationKeys += ',';
     applicationKeys += 'ctrl+enter';
     applicationKeys += ',';
     applicationKeys += 'ctrl+e';
     applicationKeys += ',';
     applicationKeys += 'f1';
     applicationKeys += ',';
     applicationKeys += 'alt+q';
     var hotkeyList = '';
     function execHotKey(e, h) {
         var hotkey_fired = false
         switch (true) {
             case (['ctrl+k'].indexOf(h.key) > -1):
                 hotkey_fired = process_hotkeys('sys_format_lim');
                 break;
             case (['ctrl+enter'].indexOf(h.key) > -1):
                 hotkey_fired = process_hotkeys('sys_format_fi2');
                 break;
             case (['ctrl+e'].indexOf(h.key) > -1):
                 hotkey_fired = process_hotkeys('sys_format_edi');
                 break;
             case (['f1'].indexOf(h.key) > -1):
                 hotkey_fired = process_hotkeys('sys_format_webh');
                 break;
             case (['alt+q'].indexOf(h.key) > -1):
                 hotkey_fired = process_hotkeys('sys_format_sai');
                 break;
         }
         if (hotkey_fired) {
             e.preventDefault();
             return false;
         } else {
             return true;
         }
     }
   </script>
   <script type="text/javascript" src="../_lib/lib/js/hotkeys.inc.js"></script>
   <script type="text/javascript" src="../_lib/lib/js/hotkeys_setup.js"></script>
        <script type="text/javascript">
          var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
          var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_tb_close'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) ?>";
          var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_tb_esc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) ?>";
        </script>
 <script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></script>
 <script type="text/javascript" src="grid_del_nota_credito_ind_ajax_search.js"></script>
 <script type="text/javascript" src="grid_del_nota_credito_ind_ajax.js"></script>
 <script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
   var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax ?>';
   var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax ?>';
   var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax ?>';
   var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax ?>';
 </script>
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
$Cod_Btn = nmButtonOutput($this->arr_buttons, "berrm_clse", "nmAjaxHideDebug()", "nmAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo $Cod_Btn ?>&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>
<script type="text/javascript" src="grid_del_nota_credito_ind_message.js"></script>
<link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_filter ?>_sweetalert.css" />
<script type="text/javascript" src="<?php echo $_SESSION['scriptcase']['grid_del_nota_credito_ind']['glo_nm_path_prod']; ?>/third/sweetalert/sweetalert2.all.min.js"></script>
<script type="text/javascript" src="<?php echo $_SESSION['scriptcase']['grid_del_nota_credito_ind']['glo_nm_path_prod']; ?>/third/sweetalert/polyfill.min.js"></script>
<script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
<?php
$confirmButtonClass = '';
$cancelButtonClass  = '';
$confirmButtonText  = $this->Ini->Nm_lang['lang_btns_cfrm'];
$cancelButtonText   = $this->Ini->Nm_lang['lang_btns_cncl'];
$confirmButtonFA    = '';
$cancelButtonFA     = '';
$confirmButtonFAPos = '';
$cancelButtonFAPos  = '';
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['style']) && '' != $this->arr_buttons['bsweetalert_ok']['style']) {
    $confirmButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_ok']['style'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['style']) && '' != $this->arr_buttons['bsweetalert_cancel']['style']) {
    $cancelButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_cancel']['style'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['value']) && '' != $this->arr_buttons['bsweetalert_ok']['value']) {
    $confirmButtonText = $this->arr_buttons['bsweetalert_ok']['value'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['value']) && '' != $this->arr_buttons['bsweetalert_cancel']['value']) {
    $cancelButtonText = $this->arr_buttons['bsweetalert_cancel']['value'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) {
    $confirmButtonFA = $this->arr_buttons['bsweetalert_ok']['fontawesomeicon'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) {
    $cancelButtonFA = $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_ok']['display_position']) {
    $confirmButtonFAPos = 'text_right';
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_cancel']['display_position']) {
    $cancelButtonFAPos = 'text_right';
}
?>
<script type="text/javascript">
  var scSweetAlertConfirmButton = "<?php echo $confirmButtonClass ?>";
  var scSweetAlertCancelButton = "<?php echo $cancelButtonClass ?>";
  var scSweetAlertConfirmButtonText = "<?php echo $confirmButtonText ?>";
  var scSweetAlertCancelButtonText = "<?php echo $cancelButtonText ?>";
  var scSweetAlertConfirmButtonFA = "<?php echo $confirmButtonFA ?>";
  var scSweetAlertCancelButtonFA = "<?php echo $cancelButtonFA ?>";
  var scSweetAlertConfirmButtonFAPos = "<?php echo $confirmButtonFAPos ?>";
  var scSweetAlertCancelButtonFAPos = "<?php echo $cancelButtonFAPos ?>";
</script>
<script type="text/javascript">
$(function() {
<?php
if ((isset($this->nm_mens_alert) && count($this->nm_mens_alert)) || (isset($this->Ini->nm_mens_alert) && count($this->Ini->nm_mens_alert))) {
   if (isset($this->Ini->nm_mens_alert) && !empty($this->Ini->nm_mens_alert))
   {
       if (isset($this->nm_mens_alert) && !empty($this->nm_mens_alert))
       {
           $this->nm_mens_alert   = array_merge($this->Ini->nm_mens_alert, $this->nm_mens_alert);
           $this->nm_params_alert = array_merge($this->Ini->nm_params_alert, $this->nm_params_alert);
       }
       else
       {
           $this->nm_mens_alert   = $this->Ini->nm_mens_alert;
           $this->nm_params_alert = $this->Ini->nm_params_alert;
       }
   }
   if (isset($this->nm_mens_alert) && !empty($this->nm_mens_alert))
   {
       foreach ($this->nm_mens_alert as $i_alert => $mensagem)
       {
           $alertParams = array();
           if (isset($this->nm_params_alert[$i_alert]))
           {
               foreach ($this->nm_params_alert[$i_alert] as $paramName => $paramValue)
               {
                   if (in_array($paramName, array('title', 'timer', 'confirmButtonText', 'confirmButtonFA', 'confirmButtonFAPos', 'cancelButtonText', 'cancelButtonFA', 'cancelButtonFAPos', 'footer', 'width', 'padding')))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif (in_array($paramName, array('showConfirmButton', 'showCancelButton', 'toast')) && in_array($paramValue, array(true, false)))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif ('position' == $paramName && in_array($paramValue, array('top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end')))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif ('type' == $paramName && in_array($paramValue, array('warning', 'error', 'success', 'info', 'question')))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif ('background' == $paramName)
                   {
                       $image_param = $paramValue;
                       preg_match_all('/url\(([\s])?(["|\'])?(.*?)(["|\'])?([\s])?\)/i', $paramValue, $matches, PREG_PATTERN_ORDER);
                       if (isset($matches[3])) {
                           foreach ($matches[3] as $match) {
                               if ('http:' != substr($match, 0, 5) && 'https:' != substr($match, 0, 6) && '/' != substr($match, 0, 1)) {
                                   $image_param = str_replace($match, "{$this->Ini->path_img_global}/{$match}", $image_param);
                               }
                           }
                       }
                       $paramValue = $image_param;
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
               }
           }
           $jsonParams = json_encode($alertParams);
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['ajax_nav'])
           { 
               $this->Ini->Arr_result['AlertJS'][] = NM_charset_to_utf8($mensagem);
               $this->Ini->Arr_result['AlertJSParam'][] = $alertParams;
           } 
           else 
           { 
?>
       scJs_alert('<?php echo $mensagem ?>', <?php echo $jsonParams ?>);
<?php
           } 
       }
   }
}
?>
});
</script>
<?php
if ('' != $this->Campos_Mens_erro) {
?>
<script type="text/javascript">
$(function() {
	_nmAjaxShowMessage({title: "<?php echo $this->Ini->Nm_lang['lang_errm_errt']; ?>", message: "<?php echo $this->Campos_Mens_erro ?>", isModal: false, timeout: "", showButton: true, buttonLabel: "", topPos: "", leftPos: "", width: "", height: "", redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: false, isToast: false, toastPos: "", type: "error"});
});
</script>
<?php
}
?>
<script type="text/javascript" src="grid_del_nota_credito_ind_message.js"></script>
 <SCRIPT type="text/javascript">

<?php
if (is_file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js"))
{
    $Tb_err_js = file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js");
    foreach ($Tb_err_js as $Lines)
    {
        if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
        {
            $Lines = sc_convert_encoding($Lines, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
        echo $Lines;
    }
}
 $Msg_Inval = "Inv�lido";
 if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
 {
    $Msg_Inval = sc_convert_encoding($Msg_Inval, $_SESSION['scriptcase']['charset'], "UTF-8");
 }
?>
var SC_crit_inv = "<?php echo $Msg_Inval ?>";
var nmdg_Form = "F1";

function scJQCalendarAdd() {
  $("#sc_nc_fecha_jq").datepicker({
    beforeShow: function(input, inst) {
          var_dt_ini  = document.getElementById('SC_nc_fecha_dia').value + '/';
          var_dt_ini += document.getElementById('SC_nc_fecha_mes').value + '/';
          var_dt_ini += document.getElementById('SC_nc_fecha_ano').value;
          document.getElementById('sc_nc_fecha_jq').value = var_dt_ini;
    },
    onClose: function(dateText, inst) {
          aParts  = dateText.split("/");
          document.getElementById('SC_nc_fecha_dia').value = aParts[0];
          document.getElementById('SC_nc_fecha_mes').value = aParts[1];
          document.getElementById('SC_nc_fecha_ano').value = aParts[2];
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_sund"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_mond"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_tued"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_wend"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_thud"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_frid"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_satd"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    dayNamesMin: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_sund"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_mond"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_tued"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_wend"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_thud"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_frid"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_satd"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    monthNames: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_days_sem"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("ddmmyyyy", "/"); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->Ini->path_botoes . "/" . $this->arr_buttons['bcalendario']['image']; ?>",
    buttonImageOnly: true,
    currentText: "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>"
  });

  $("#sc_nc_fecha_jq2").datepicker({
    beforeShow: function(input, inst) {
          var_dt_ini  = document.getElementById('SC_nc_fecha_input_2_dia').value + '/';
          var_dt_ini += document.getElementById('SC_nc_fecha_input_2_mes').value + '/';
          var_dt_ini += document.getElementById('SC_nc_fecha_input_2_ano').value;
          document.getElementById('sc_nc_fecha_jq2').value = var_dt_ini;
    },
    onClose: function(dateText, inst) {
          aParts  = dateText.split("/");
          document.getElementById('SC_nc_fecha_input_2_dia').value = aParts[0];
          document.getElementById('SC_nc_fecha_input_2_mes').value = aParts[1];
          document.getElementById('SC_nc_fecha_input_2_ano').value = aParts[2];
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_sund"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_mond"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_tued"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_wend"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_thud"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_frid"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_days_satd"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    dayNamesMin: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_sund"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_mond"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_tued"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_wend"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_thud"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_frid"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_substr_days_satd"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    monthNames: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_shrt_days_sem"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("ddmmyyyy", "/"); ?>",
    showOtherMonths: true,
    showOn: "button",
    buttonImage: "<?php echo $this->Ini->path_botoes . "/" . $this->arr_buttons['bcalendario']['image']; ?>",
    buttonImageOnly: true,
    currentText: "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>"
  });

} // scJQCalendarAdd


 $(function() {

   SC_carga_evt_jquery();
   scLoadScInput('input:text.sc-js-input');
   scJQCalendarAdd('');
   Sc_carga_select2('all');
 });
 function nm_campos_between(nm_campo, nm_cond, nm_nome_obj)
 {
  if (nm_cond.value == "bw")
  {
   nm_campo.style.display = "";
  }
  else
  {
    if (nm_campo)
    {
      nm_campo.style.display = "none";
    }
  }
  if (document.getElementById('id_hide_' + nm_nome_obj))
  {
      if (nm_cond.value == "nu" || nm_cond.value == "nn" || nm_cond.value == "ep" || nm_cond.value == "ne")
      {
          document.getElementById('id_hide_' + nm_nome_obj).style.display = 'none';
      }
      else
      {
          document.getElementById('id_hide_' + nm_nome_obj).style.display = '';
      }
  }
 }
 function nm_save_form(pos)
 {
  if (pos == 'top' && document.F1.nmgp_save_name_top.value == '')
  {
      return;
  }
  if (pos == 'bot' && document.F1.nmgp_save_name_bot.value == '')
  {
      return;
  }
  if (pos == 'fields' && document.F1.nmgp_save_name_fields.value == '')
  {
      return;
  }
  var str_out = "";
  str_out += 'SC_nc_fecha_cond#NMF#' + search_get_sel_txt('SC_nc_fecha_cond') + '@NMF@';
  str_out += 'SC_nc_fecha_dia#NMF#' + search_get_sel_txt('SC_nc_fecha_dia') + '@NMF@';
  str_out += 'SC_nc_fecha_mes#NMF#' + search_get_sel_txt('SC_nc_fecha_mes') + '@NMF@';
  str_out += 'SC_nc_fecha_ano#NMF#' + search_get_sel_txt('SC_nc_fecha_ano') + '@NMF@';
  str_out += 'SC_nc_fecha_input_2_dia#NMF#' + search_get_sel_txt('SC_nc_fecha_input_2_dia') + '@NMF@';
  str_out += 'SC_nc_fecha_input_2_mes#NMF#' + search_get_sel_txt('SC_nc_fecha_input_2_mes') + '@NMF@';
  str_out += 'SC_nc_fecha_input_2_ano#NMF#' + search_get_sel_txt('SC_nc_fecha_input_2_ano') + '@NMF@';
  str_out += 'SC_nc_secuencial_docmod_cond#NMF#' + search_get_sel_txt('SC_nc_secuencial_docmod_cond') + '@NMF@';
  str_out += 'SC_nc_secuencial_docmod#NMF#' + search_get_text('SC_nc_secuencial_docmod') + '@NMF@';
  str_out += 'SC_cl_nombre_cond#NMF#' + search_get_sel_txt('SC_cl_nombre_cond') + '@NMF@';
  str_out += 'SC_cl_nombre#NMF#' + search_get_text('SC_cl_nombre') + '@NMF@';
  str_out += 'id_ac_cl_nombre#NMF#' + search_get_title('select2-id_ac_cl_nombre-container') + '@NMF@';
  str_out += 'SC_cl_identificacion_cond#NMF#' + search_get_sel_txt('SC_cl_identificacion_cond') + '@NMF@';
  str_out += 'SC_cl_identificacion#NMF#' + search_get_text('SC_cl_identificacion') + '@NMF@';
  str_out += 'id_ac_cl_identificacion#NMF#' + search_get_title('select2-id_ac_cl_identificacion-container') + '@NMF@';
  str_out += 'SC_NM_operador#NMF#' + search_get_text('SC_NM_operador');
  str_out  = str_out.replace(/[+]/g, "__NM_PLUS__");
  str_out  = str_out.replace(/[&]/g, "__NM_AMP__");
  str_out  = str_out.replace(/[%]/g, "__NM_PRC__");
  var save_name = search_get_text('SC_nmgp_save_name_' + pos);
  var save_opt  = search_get_sel_txt('SC_nmgp_save_option_' + pos);
  ajax_save_filter(save_name, save_opt, str_out, pos);
 }
 function nm_submit_filter(obj_sel, pos)
 {
  index = obj_sel.selectedIndex;
  if (index == -1 || obj_sel.options[index].value == "") 
  {
      return false;
  }
  ajax_select_filter(obj_sel.options[index].value);
 }
 function nm_submit_filter_del(pos)
 {
  obj_sel = document.F1.elements['NM_filters_del_' + pos];
  index   = obj_sel.selectedIndex;
  if (index == -1 || obj_sel.options[index].value == "") 
  {
      return false;
  }
  parm = obj_sel.options[index].value;
  ajax_delete_filter(parm);
 }
 function search_get_select(obj_id)
 {
    var index = document.getElementById(obj_id).selectedIndex;
    if (index != -1) {
        return document.getElementById(obj_id).options[index].value;
    }
    else {
        return '';
    }
 }
 function search_get_selmult(obj_id)
 {
    var obj = document.getElementById(obj_id);
    var val = "_NM_array_";
    for (iSelect = 0; iSelect < obj.length; iSelect++)
    {
        if (obj[iSelect].selected)
        {
            val += "#NMARR#" + obj[iSelect].value;
        }
    }
    return val;
 }
 function search_get_Dselelect(obj_id)
 {
    var obj = document.getElementById(obj_id);
    var val = "_NM_array_";
    for (iSelect = 0; iSelect < obj.length; iSelect++)
    {
         val += "#NMARR#" + obj[iSelect].value;
    }
    return val;
 }
 function search_get_radio(obj_id)
 {
    var val  = "";
    if (document.getElementById(obj_id)) {
       var Nobj = document.getElementById(obj_id).name;
       var obj  = document.getElementsByName(Nobj);
       for (iRadio = 0; iRadio < obj.length; iRadio++) {
           if (obj[iRadio].checked) {
               val = obj[iRadio].value;
           }
       }
    }
    return val;
 }
 function search_get_checkbox(obj_id)
 {
    var val  = "_NM_array_";
    if (document.getElementById(obj_id)) {
       var Nobj = document.getElementById(obj_id).name;
       var obj  = document.getElementsByName(Nobj);
       if (!obj.length) {
           if (obj.checked) {
               val += "#NMARR#" + obj.value;
           }
       }
       else {
           for (iCheck = 0; iCheck < obj.length; iCheck++) {
               if (obj[iCheck].checked) {
                   val += "#NMARR#" + obj[iCheck].value;
               }
           }
       }
    }
    return val;
 }
 function search_get_text(obj_id)
 {
    var obj = document.getElementById(obj_id);
    return (obj) ? obj.value : '';
 }
 function search_get_title(obj_id)
 {
    var obj = document.getElementById(obj_id);
    return (obj) ? obj.title : '';
 }
 function search_get_sel_txt(obj_id)
 {
    var val = "";
    obj_part  = document.getElementById(obj_id);
    if (obj_part && obj_part.type.substr(0, 6) == 'select')
    {
        val = search_get_select(obj_id);
    }
    else
    {
        val = (obj_part) ? obj_part.value : '';
    }
    return val;
 }
 function search_get_html(obj_id)
 {
    var obj = document.getElementById(obj_id);
    return obj.innerHTML;
 }
function nm_open_popup(parms)
{
    NovaJanela = window.open (parms, '', 'resizable, scrollbars');
}
 </SCRIPT>
<script type="text/javascript">
 $(function() {
  $(".sc-ui-autocomp-cl_nombre").on("focus", function() {
  }).on("blur", function() {
  }).on("keydown", function(e) {
   if(e.keyCode == $.ui.keyCode.TAB && $(".ui-autocomplete").filter(":visible").length) {
    e.keyCode = $.ui.keyCode.DOWN;
    $(this).trigger(e);
    e.keyCode = $.ui.keyCode.ENTER;
    $(this).trigger(e);
   }
  }).select2({
   minimumInputLength: 1,
   language: {
    inputTooShort: function() {
     return "<?php echo sprintf($this->Ini->Nm_lang['lang_autocomp_tooshort'], 1) ?>";
    },
    containerCssClass: 'scGridFilterDivResult',
    dropdownCssClass: 'scGridFilterDivDropdown',
    noResults: function() {
     return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
    },
    searching: function() {
     return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
    }
   },
   width: "300px",
   ajax: {
    url: "index.php",
    dataType: "json",
    processResults: function (data) {
      if (data == "ss_time_out") {
          nm_move();
      }
      return data;
    },
    data: function (params) {
     var query = {
      q: params.term,
      nmgp_opcao: "ajax_autocomp",
      nmgp_parms: "NM_ajax_opcao?#?autocomp_cl_nombre",
      max_itens: "10",
      script_case_init: <?php echo $this->Ini->sc_page ?>
     }
     return query;
    }
   }
  }).on("select2:select", function(e) {;
   $("#SC_cl_nombre").val(e.params.data.id);
  });
  $(".sc-ui-autocomp-cl_identificacion").on("focus", function() {
  }).on("blur", function() {
  }).on("keydown", function(e) {
   if(e.keyCode == $.ui.keyCode.TAB && $(".ui-autocomplete").filter(":visible").length) {
    e.keyCode = $.ui.keyCode.DOWN;
    $(this).trigger(e);
    e.keyCode = $.ui.keyCode.ENTER;
    $(this).trigger(e);
   }
  }).select2({
   minimumInputLength: 1,
   language: {
    inputTooShort: function() {
     return "<?php echo sprintf($this->Ini->Nm_lang['lang_autocomp_tooshort'], 1) ?>";
    },
    containerCssClass: 'scGridFilterDivResult',
    dropdownCssClass: 'scGridFilterDivDropdown',
    noResults: function() {
     return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
    },
    searching: function() {
     return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
    }
   },
   width: "300px",
   ajax: {
    url: "index.php",
    dataType: "json",
    processResults: function (data) {
      if (data == "ss_time_out") {
          nm_move();
      }
      return data;
    },
    data: function (params) {
     var query = {
      q: params.term,
      nmgp_opcao: "ajax_autocomp",
      nmgp_parms: "NM_ajax_opcao?#?autocomp_cl_identificacion",
      max_itens: "10",
      script_case_init: <?php echo $this->Ini->sc_page ?>
     }
     return query;
    }
   }
  }).on("select2:select", function(e) {;
   $("#SC_cl_identificacion").val(e.params.data.id);
  });
 });
</script>
 <FORM name="F1" action="./" method="post" target="_self"> 
 <INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
 <INPUT type="hidden" name="nmgp_opcao" value="busca"> 
 <div id="idJSSpecChar" style="display:none;"></div>
 <div id="id_div_process" style="display: none; position: absolute"><table class="scFilterTable"><tr><td class="scFilterLabelOdd"><?php echo $this->Ini->Nm_lang['lang_othr_prcs']; ?>...</td></tr></table></div>
 <div id="id_fatal_error" class="scFilterFieldOdd" style="display:none; position: absolute"></div>
<TABLE id="main_table" align="center" valign="top" >
<tr>
<td>
<div class="scFilterBorder">
  <div id="id_div_process_block" style="display: none; margin: 10px; whitespace: nowrap"><span class="scFormProcess"><img border="0" src="<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif" align="absmiddle" />&nbsp;<?php echo $this->Ini->Nm_lang['lang_othr_prcs'] ?>...</span></div>
<table cellspacing=0 cellpadding=0 width='100%'>
<?php
   }

   /**
    * @access  public
    * @global  string  $bprocessa  
    */
   /**
    * @access  public
    */
   function monta_cabecalho()
   {
      if ($this->Ini->Embutida_iframe || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['dashboard_info']['compact_mode'])
      {
          return;
      }
      $Str_date = strtolower($_SESSION['scriptcase']['reg_conf']['date_format']);
      $Lim   = strlen($Str_date);
      $Ult   = "";
      $Arr_D = array();
      for ($I = 0; $I < $Lim; $I++)
      {
          $Char = substr($Str_date, $I, 1);
          if ($Char != $Ult)
          {
              $Arr_D[] = $Char;
          }
          $Ult = $Char;
      }
      $Prim = true;
      $Str  = "";
      foreach ($Arr_D as $Cada_d)
      {
          $Str .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
          $Str .= $Cada_d;
          $Prim = false;
      }
      $Str = str_replace("a", "Y", $Str);
      $Str = str_replace("y", "Y", $Str);
      $nm_data_fixa = date($Str); 
?>
 <TR align="center">
  <TD class="scFilterTableTd scGridPage">
   <TABLE width="100%" class="scFilterHeader">
    <TR align="center">
     <TD style="padding: 0px">
      <TABLE style="padding: 0px; border-spacing: 0px; border-width: 0px;" width="100%">
       <TR valign="middle">
        <TD align="left" rowspan="3" class="scFilterHeaderFont">
          
        </TD>
        <TD align="left" class="scFilterHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFilterHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFilterHeaderFont">
          
        </TD>
       </TR>
       <TR valign="middle">
        <TD align="left" class="scFilterHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFilterHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFilterHeaderFont">
          
        </TD>
       </TR>
       <TR valign="middle">
        <TD align="left" class="scFilterHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFilterHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFilterHeaderFont">
          
        </TD>
       </TR>
      </TABLE>
     </TD>
    </TR>
   </TABLE>  </TD>
 </TR>
<?php
   }

   /**
    * @access  public
    * @global  string  $nm_url_saida  $this->Ini->Nm_lang['pesq_global_nm_url_saida']
    * @global  integer  $nm_apl_dependente  $this->Ini->Nm_lang['pesq_global_nm_apl_dependente']
    * @global  string  $nmgp_parms  
    * @global  string  $bprocessa  $this->Ini->Nm_lang['pesq_global_bprocessa']
    */
   function monta_form()
   {
      global 
             $nc_fecha_cond, $nc_fecha, $nc_fecha_dia, $nc_fecha_mes, $nc_fecha_ano, $nc_fecha_input_2_dia, $nc_fecha_input_2_mes, $nc_fecha_input_2_ano,
             $nc_secuencial_docmod_cond, $nc_secuencial_docmod,
             $cl_nombre_cond, $cl_nombre, $cl_nombre_autocomp,
             $cl_identificacion_cond, $cl_identificacion, $cl_identificacion_autocomp,
             $nm_url_saida, $nm_apl_dependente, $nmgp_parms, $bprocessa, $nmgp_save_name, $NM_operador, $NM_filters, $nmgp_save_option, $NM_filters_del, $Script_BI;
      $Script_BI = "";
      $this->nmgp_botoes['clear'] = "on";
      $this->nmgp_botoes['save'] = "on";
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }
      $this->New_label['nc_total'] = "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
      $this->New_label['nc_estado_sri'] = "" . $this->Ini->Nm_lang['lang_estado_sri'] . "";
      $this->New_label['cl_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
      $this->New_label['nc_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
      $this->New_label['nc_error_sri'] = "" . $this->Ini->Nm_lang['lang_mensaje'] . "";
      $this->New_label['nc_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("grid_del_nota_credito_ind", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $nmgp_tab_label = "";
      $delimitador = "##@@";
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']) && $bprocessa != "recarga" && $bprocessa != "save_form" && $bprocessa != "filter_save" && $bprocessa != "filter_delete")
      {
      }
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']) && $bprocessa != "recarga" && $bprocessa != "save_form" && $bprocessa != "filter_save" && $bprocessa != "filter_delete")
      { 
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] = NM_conv_charset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'], $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $nc_fecha_dia = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_dia']; 
          $nc_fecha_mes = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_mes']; 
          $nc_fecha_ano = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_ano']; 
          $nc_fecha_input_2_dia = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2_dia']; 
          $nc_fecha_input_2_mes = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2_mes']; 
          $nc_fecha_input_2_ano = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2_ano']; 
          $nc_fecha_cond = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_cond']; 
          $nc_secuencial_docmod = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_secuencial_docmod']; 
          $nc_secuencial_docmod_cond = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_secuencial_docmod_cond']; 
          $cl_nombre = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_nombre']; 
          $cl_nombre_cond = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_nombre_cond']; 
          $cl_identificacion = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_identificacion']; 
          $cl_identificacion_cond = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_identificacion_cond']; 
          $this->NM_operador = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['NM_operador']; 
          if (strtoupper($nc_secuencial_docmod_cond) != "II" && strtoupper($nc_secuencial_docmod_cond) != "QP" && strtoupper($nc_secuencial_docmod_cond) != "NP" && strtoupper($nc_secuencial_docmod_cond) != "IN") 
          { 
              nmgp_Form_Num_Val($nc_secuencial_docmod, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "1", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
          } 
      } 
      if (!isset($nc_fecha_cond) || empty($nc_fecha_cond))
      {
         $nc_fecha_cond = "eq";
      }
      if (!isset($nc_secuencial_docmod_cond) || empty($nc_secuencial_docmod_cond))
      {
         $nc_secuencial_docmod_cond = "eq";
      }
      if (!isset($cl_nombre_cond) || empty($cl_nombre_cond))
      {
         $cl_nombre_cond = "eq";
      }
      if (!isset($cl_identificacion_cond) || empty($cl_identificacion_cond))
      {
         $cl_identificacion_cond = "eq";
      }
      $display_aberto  = "style=display:";
      $display_fechado = "style=display:none";
      $opc_hide_input = array("nu","nn","ep","ne");
      $str_hide_nc_fecha = (in_array($nc_fecha_cond, $opc_hide_input)) ? $display_fechado : $display_aberto;
      $str_hide_nc_secuencial_docmod = (in_array($nc_secuencial_docmod_cond, $opc_hide_input)) ? $display_fechado : $display_aberto;
      $str_hide_cl_nombre = (in_array($cl_nombre_cond, $opc_hide_input)) ? $display_fechado : $display_aberto;
      $str_hide_cl_identificacion = (in_array($cl_identificacion_cond, $opc_hide_input)) ? $display_fechado : $display_aberto;

      $str_display_nc_fecha = ('bw' == $nc_fecha_cond) ? $display_aberto : $display_fechado;
      $str_display_nc_secuencial_docmod = ('bw' == $nc_secuencial_docmod_cond) ? $display_aberto : $display_fechado;
      $str_display_cl_nombre = ('bw' == $cl_nombre_cond) ? $display_aberto : $display_fechado;
      $str_display_cl_identificacion = ('bw' == $cl_identificacion_cond) ? $display_aberto : $display_fechado;

      if (!isset($nc_fecha) || $nc_fecha == "")
      {
          $nc_fecha = "";
      }
      if (isset($nc_fecha) && !empty($nc_fecha))
      {
         $tmp_pos = (is_string($nc_fecha)) ? strpos($nc_fecha, "##@@") : false;
         if ($tmp_pos === false)
         { }
         else
         {
         $nc_fecha = substr($nc_fecha, 0, $tmp_pos);
         }
      }
      if (!isset($nc_secuencial_docmod) || $nc_secuencial_docmod == "")
      {
          $nc_secuencial_docmod = "";
      }
      if (isset($nc_secuencial_docmod) && !empty($nc_secuencial_docmod))
      {
         $tmp_pos = (is_string($nc_secuencial_docmod)) ? strpos($nc_secuencial_docmod, "##@@") : false;
         if ($tmp_pos === false)
         { }
         else
         {
         $nc_secuencial_docmod = substr($nc_secuencial_docmod, 0, $tmp_pos);
         }
      }
      if (!isset($cl_nombre) || $cl_nombre == "")
      {
          $cl_nombre = "";
      }
      if (isset($cl_nombre) && !empty($cl_nombre))
      {
         $tmp_pos = (is_string($cl_nombre)) ? strpos($cl_nombre, "##@@") : false;
         if ($tmp_pos === false)
         { }
         else
         {
         $cl_nombre = substr($cl_nombre, 0, $tmp_pos);
         }
      }
      if (!isset($cl_identificacion) || $cl_identificacion == "")
      {
          $cl_identificacion = "";
      }
      if (isset($cl_identificacion) && !empty($cl_identificacion))
      {
         $tmp_pos = (is_string($cl_identificacion)) ? strpos($cl_identificacion, "##@@") : false;
         if ($tmp_pos === false)
         { }
         else
         {
         $cl_identificacion = substr($cl_identificacion, 0, $tmp_pos);
         }
      }
?>
 <TR align="center">
  <TD class="scFilterTableTd">
   <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
   <TR valign="top" >
  <TD width="100%" height="">
   <TABLE class="scFilterTable" id="hidden_bloco_0" valign="top" width="100%" style="height: 100%;">
   <tr>





      <TD id='SC_nc_fecha_label' class="scFilterLabelOdd"><?php echo (isset($this->New_label['nc_fecha'])) ? $this->New_label['nc_fecha'] : "" . $this->Ini->Nm_lang['lang_fecha'] . ""; ?></TD>
     <TD class="scFilterFieldOdd"> 
      <SELECT class="scFilterObjectOdd" id="SC_nc_fecha_cond" name="nc_fecha_cond" onChange="nm_campos_between(document.getElementById('id_vis_nc_fecha'), this, 'nc_fecha')">
       <OPTION value="eq" <?php if ("eq" == $nc_fecha_cond) { echo "selected"; } ?>><?php echo $this->Ini->Nm_lang['lang_srch_exac'] ?></OPTION>
       <OPTION value="bw" <?php if ("bw" == $nc_fecha_cond) { echo "selected"; } ?>><?php echo $this->Ini->Nm_lang['lang_srch_betw'] ?></OPTION>
      </SELECT>
       </TD>
     <TD  class="scFilterFieldOdd">
      <TABLE  border="0" cellpadding="0" cellspacing="0">
       <TR id="id_hide_nc_fecha" <?php echo $str_hide_nc_fecha?> valign="top">
        <TD class="scFilterFieldFontOdd">
           <?php
 $SC_Label = (isset($this->New_label['nc_fecha'])) ? $this->New_label['nc_fecha'] : "" . $this->Ini->Nm_lang['lang_fecha'] . "";
 $nmgp_tab_label .= "nc_fecha?#?" . $SC_Label . "?@?";
 $date_sep_bw = " " . $this->Ini->Nm_lang['lang_srch_between_values'] . " ";
 if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($date_sep_bw))
 {
     $date_sep_bw = sc_convert_encoding($date_sep_bw, $_SESSION['scriptcase']['charset'], "UTF-8");
 }
?>

<?php
  $Form_base = "ddmmyyyy";
  $date_format_show = "";
  $Str_date = str_replace("a", "y", strtolower($_SESSION['scriptcase']['reg_conf']['date_format']));
  $Lim   = strlen($Str_date);
  $Str   = "";
  $Ult   = "";
  $Arr_D = array();
  for ($I = 0; $I < $Lim; $I++)
  {
      $Char = substr($Str_date, $I, 1);
      if ($Char != $Ult && "" != $Str)
      {
          $Arr_D[] = $Str;
          $Str     = $Char;
      }
      else
      {
          $Str    .= $Char;
      }
      $Ult = $Char;
  }
  $Arr_D[] = $Str;
  $Prim = true;
  foreach ($Arr_D as $Cada_d)
  {
      if (strpos($Form_base, $Cada_d) !== false)
      {
          $date_format_show .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
          $date_format_show .= $Cada_d;
          $Prim = false;
      }
  }
  $Arr_format = $Arr_D;
  $date_format_show = str_replace("dd",   $this->Ini->Nm_lang['lang_othr_date_days'], $date_format_show);
  $date_format_show = str_replace("mm",   $this->Ini->Nm_lang['lang_othr_date_mnth'], $date_format_show);
  $date_format_show = str_replace("yyyy", $this->Ini->Nm_lang['lang_othr_date_year'], $date_format_show);
  $date_format_show = str_replace("aaaa", $this->Ini->Nm_lang['lang_othr_date_year'], $date_format_show);
  $date_format_show = str_replace("hh",   $this->Ini->Nm_lang['lang_othr_date_hour'], $date_format_show);
  $date_format_show = str_replace("ii",   $this->Ini->Nm_lang['lang_othr_date_mint'], $date_format_show);
  $date_format_show = str_replace("ss",   $this->Ini->Nm_lang['lang_othr_date_scnd'], $date_format_show);
  $date_format_show = "" . $date_format_show .  "";

?>

         <?php

$bol_generate_calendar = true;
$bol_last = false;
foreach ($Arr_format as $_key => $Part_date)
{
if(!isset($Arr_format[ $_key + 1 ]))
{
  $bol_last = true;
}
?>
<?php
  if (substr($Part_date, 0,1) == "d")
  {
?>
<span id='id_date_part_nc_fecha_DD' style='display: inline-block'>
<INPUT class="sc-js-input scFilterObjectOdd" type="text" id="SC_nc_fecha_dia" name="nc_fecha_dia" value="<?php echo NM_encode_input($nc_fecha_dia); ?>" size="2" alt="{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, autoTab: true, enterTab: false}">
<?php
if($bol_generate_calendar && $bol_last)
{
?>
<INPUT type="hidden" id="sc_nc_fecha_jq">
<?php
}
?>
</span>

<?php
  }
?>
<?php
  if (substr($Part_date, 0,1) == "m")
  {
?>
<span id='id_date_part_nc_fecha_MM' style='display: inline-block'>
<INPUT class="sc-js-input scFilterObjectOdd" type="text" id="SC_nc_fecha_mes" name="nc_fecha_mes" value="<?php echo NM_encode_input($nc_fecha_mes); ?>" size="2" alt="{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, autoTab: true, enterTab: false}">
<?php
if($bol_generate_calendar && $bol_last)
{
?>
<INPUT type="hidden" id="sc_nc_fecha_jq">
<?php
}
?>
</span>

<?php
  }
?>
<?php
  if (substr($Part_date, 0,1) == "y")
  {
?>
<span id='id_date_part_nc_fecha_AAAA' style='display: inline-block'>
<INPUT class="sc-js-input scFilterObjectOdd" type="text" id="SC_nc_fecha_ano" name="nc_fecha_ano" value="<?php echo NM_encode_input($nc_fecha_ano); ?>" size="4" alt="{datatype: 'mask', maskList: '9999', alignRight: true, maxLength: 4, autoTab: true, enterTab: false}">
 <?php
if($bol_generate_calendar && $bol_last)
{
?>
<INPUT type="hidden" id="sc_nc_fecha_jq">
<?php
}
?>
</span>

<?php
  }
?>

<?php

}

?>
        <SPAN id="id_css_nc_fecha"  class="scFilterFieldFontOdd">
 <?php echo $date_format_show ?>         </SPAN>
                 </TD>
       </TR>
       <TR valign="top">
        <TD id="id_vis_nc_fecha"  <?php echo $str_display_nc_fecha; ?> class="scFilterFieldFontOdd">
         <?php echo $date_sep_bw ?>
         <BR>
         
         <?php

$bol_generate_calendar = true;
$bol_last = false;
foreach ($Arr_format as $_key => $Part_date)
{
if(!isset($Arr_format[ $_key + 1 ]))
{
  $bol_last = true;
}
?>
<?php
  if (substr($Part_date, 0,1) == "d")
  {
?>
<span id='id_date_part_nc_fecha_input_2_DD' style='display: inline-block'>
<INPUT class="sc-js-input scFilterObjectOdd" type="text" id="SC_nc_fecha_input_2_dia" name="nc_fecha_input_2_dia" value="<?php echo NM_encode_input($nc_fecha_input_2_dia); ?>" size="2" alt="{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, autoTab: true, enterTab: false}">
<?php
if($bol_generate_calendar && $bol_last)
{
?>
<INPUT type="hidden" id="sc_nc_fecha_jq2">
<?php
}
?>
</span>

<?php
  }
?>
<?php
  if (substr($Part_date, 0,1) == "m")
  {
?>
<span id='id_date_part_nc_fecha_input_2_MM' style='display: inline-block'>
<INPUT class="sc-js-input scFilterObjectOdd" type="text" id="SC_nc_fecha_input_2_mes" name="nc_fecha_input_2_mes" value="<?php echo NM_encode_input($nc_fecha_input_2_mes); ?>" size="2" alt="{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, autoTab: true, enterTab: false}">
<?php
if($bol_generate_calendar && $bol_last)
{
?>
<INPUT type="hidden" id="sc_nc_fecha_jq2">
<?php
}
?>
</span>

<?php
  }
?>
<?php
  if (substr($Part_date, 0,1) == "y")
  {
?>
<span id='id_date_part_nc_fecha_input_2_AAAA' style='display: inline-block'>
<INPUT class="sc-js-input scFilterObjectOdd" type="text" id="SC_nc_fecha_input_2_ano" name="nc_fecha_input_2_ano" value="<?php echo NM_encode_input($nc_fecha_input_2_ano); ?>" size="4" alt="{datatype: 'mask', maskList: '9999', alignRight: true, maxLength: 4, autoTab: true, enterTab: false}">
 <?php
if($bol_generate_calendar && $bol_last)
{
?>
<INPUT type="hidden" id="sc_nc_fecha_jq2">
<?php
}
?>
</span>

<?php
  }
?>

<?php

}

?>

        </TD>
       </TR>
      </TABLE>
     </TD>

   </tr><tr>





      <TD id='SC_nc_secuencial_docmod_label' class="scFilterLabelEven"><?php echo (isset($this->New_label['nc_secuencial_docmod'])) ? $this->New_label['nc_secuencial_docmod'] : "" . $this->Ini->Nm_lang['lang_documento_sustento'] . ""; ?></TD>
      
      <INPUT type="hidden" id="SC_nc_secuencial_docmod_cond" name="nc_secuencial_docmod_cond" value="eq">
 
     <TD colspan=2 class="scFilterFieldEven">
      <TABLE  border="0" cellpadding="0" cellspacing="0">
       <TR id="id_hide_nc_secuencial_docmod" <?php echo $str_hide_nc_secuencial_docmod?> valign="top">
        <TD class="scFilterFieldFontEven">
           <?php
 $SC_Label = (isset($this->New_label['nc_secuencial_docmod'])) ? $this->New_label['nc_secuencial_docmod'] : "" . $this->Ini->Nm_lang['lang_documento_sustento'] . "";
 $nmgp_tab_label .= "nc_secuencial_docmod?#?" . $SC_Label . "?@?";
 $date_sep_bw = " " . $this->Ini->Nm_lang['lang_srch_between_values'] . " ";
 if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($date_sep_bw))
 {
     $date_sep_bw = sc_convert_encoding($date_sep_bw, $_SESSION['scriptcase']['charset'], "UTF-8");
 }
?>
<INPUT  type="text" id="SC_nc_secuencial_docmod" name="nc_secuencial_docmod" value="<?php echo NM_encode_input($nc_secuencial_docmod) ?>" size=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo $_SESSION['scriptcase']['reg_conf']['grup_num'] ?>', allowNegative: false, onlyNegative: false, enterTab: false}" class="sc-js-input scFilterObjectEven">

        </TD>
       </TR>
      </TABLE>
     </TD>

   </tr><tr>





      <TD id='SC_cl_nombre_label' class="scFilterLabelOdd"><?php echo (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : "" . $this->Ini->Nm_lang['lang_cliente'] . ""; ?></TD>
      
      <INPUT type="hidden" id="SC_cl_nombre_cond" name="cl_nombre_cond" value="eq">
 
     <TD colspan=2 class="scFilterFieldOdd">
      <TABLE  border="0" cellpadding="0" cellspacing="0">
       <TR id="id_hide_cl_nombre" <?php echo $str_hide_cl_nombre?> valign="top">
        <TD class="scFilterFieldFontOdd">
           <?php
 $SC_Label = (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : "" . $this->Ini->Nm_lang['lang_cliente'] . "";
 $nmgp_tab_label .= "cl_nombre?#?" . $SC_Label . "?@?";
 $date_sep_bw = " " . $this->Ini->Nm_lang['lang_srch_between_values'] . " ";
 if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($date_sep_bw))
 {
     $date_sep_bw = sc_convert_encoding($date_sep_bw, $_SESSION['scriptcase']['charset'], "UTF-8");
 }
?>
<?php
      if ($cl_nombre != "")
      {
      $cl_nombre_look = (is_string($cl_nombre) ? substr($this->Db->qstr($cl_nombre), 1, -1) : $cl_nombre); 
      $nmgp_def_dados = array(); 
      $nm_comando = "select distinct cl_nombre from " . $this->Ini->nm_tabela . " where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and nc_cliente=" . $_SESSION['var_propietario'] . ") and #lowerI#cl_nombre#lowerF# = #lowerI#'$cl_nombre_look'#lowerF# order by cl_nombre"; 
      $this->Sel_case_sensitive($nm_comando);
      unset($cmp1,$cmp2);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
      { 
         while (!$rs->EOF) 
         { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext() ; 
         } 
         $rs->Close() ; 
      } 
      else  
      {  
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit; 
      } 
      }
      if (isset($nmgp_def_dados[0][$cl_nombre]))
      {
          $sAutocompValue = $nmgp_def_dados[0][$cl_nombre];
      }
      else
      {
          $sAutocompValue = $cl_nombre;
      }
?>
<INPUT  type="text" id="SC_cl_nombre" name="cl_nombre" value="<?php echo NM_encode_input($cl_nombre) ?>"  size=50 alt="{datatype: 'text', maxLength: 300, allowedChars: '', lettersCase: '', autoTab: false, enterTab: false}" style="display: none">
<select class="sc-js-input scFilterObjectOdd sc-ui-autocomp-cl_nombre" id="id_ac_cl_nombre" name="cl_nombre_autocomp"><?php if ('' !=  $cl_nombre) { ?><option value="<?php echo $cl_nombre ?>" selected><?php echo $sAutocompValue ?></option><?php } ?></select>

        </TD>
       </TR>
      </TABLE>
     </TD>

   </tr><tr>





      <TD id='SC_cl_identificacion_label' class="scFilterLabelEven"><?php echo (isset($this->New_label['cl_identificacion'])) ? $this->New_label['cl_identificacion'] : "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . ""; ?></TD>
      
      <INPUT type="hidden" id="SC_cl_identificacion_cond" name="cl_identificacion_cond" value="eq">
 
     <TD colspan=2 class="scFilterFieldEven">
      <TABLE  border="0" cellpadding="0" cellspacing="0">
       <TR id="id_hide_cl_identificacion" <?php echo $str_hide_cl_identificacion?> valign="top">
        <TD class="scFilterFieldFontEven">
           <?php
 $SC_Label = (isset($this->New_label['cl_identificacion'])) ? $this->New_label['cl_identificacion'] : "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
 $nmgp_tab_label .= "cl_identificacion?#?" . $SC_Label . "?@?";
 $date_sep_bw = " " . $this->Ini->Nm_lang['lang_srch_between_values'] . " ";
 if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($date_sep_bw))
 {
     $date_sep_bw = sc_convert_encoding($date_sep_bw, $_SESSION['scriptcase']['charset'], "UTF-8");
 }
?>
<?php
      if ($cl_identificacion != "")
      {
      $cl_identificacion_look = (is_string($cl_identificacion) ? substr($this->Db->qstr($cl_identificacion), 1, -1) : $cl_identificacion); 
      $nmgp_def_dados = array(); 
      $nm_comando = "select distinct cl_identificacion from " . $this->Ini->nm_tabela . " where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and nc_cliente=" . $_SESSION['var_propietario'] . ") and #lowerI#cl_identificacion#lowerF# = #lowerI#'$cl_identificacion_look'#lowerF# order by cl_identificacion"; 
      $this->Sel_case_sensitive($nm_comando);
      unset($cmp1,$cmp2);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
      { 
         while (!$rs->EOF) 
         { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext() ; 
         } 
         $rs->Close() ; 
      } 
      else  
      {  
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit; 
      } 
      }
      if (isset($nmgp_def_dados[0][$cl_identificacion]))
      {
          $sAutocompValue = $nmgp_def_dados[0][$cl_identificacion];
      }
      else
      {
          $sAutocompValue = $cl_identificacion;
      }
?>
<INPUT  type="text" id="SC_cl_identificacion" name="cl_identificacion" value="<?php echo NM_encode_input($cl_identificacion) ?>"  size=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', autoTab: false, enterTab: false}" style="display: none">
<select class="sc-js-input scFilterObjectEven sc-ui-autocomp-cl_identificacion" id="id_ac_cl_identificacion" name="cl_identificacion_autocomp"><?php if ('' !=  $cl_identificacion) { ?><option value="<?php echo $cl_identificacion ?>" selected><?php echo $sAutocompValue ?></option><?php } ?></select>

        </TD>
       </TR>
      </TABLE>
     </TD>

   </tr>
   </TABLE>
  </TD>
 </TR>
 </TABLE>
 </TD>
 </TR>
 <TR>
  <TD class="scFilterTableTd" align="center">
<INPUT type="hidden" id="SC_NM_operador" name="NM_operador" value="and">  </TD>
 </TR>
   <INPUT type="hidden" name="nmgp_tab_label" value="<?php echo NM_encode_input($nmgp_tab_label); ?>"> 
   <INPUT type="hidden" name="bprocessa" value="pesq"> 
<?php
    $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['pesq_tab_label'] = $nmgp_tab_label;
?>
 <?php
     if ($_SESSION['scriptcase']['proc_mobile'])
     {
     ?>
 <TR align="center">
  <TD class="scFilterTableTd" id='sc_filter_toolbar_bot'>
   <table width="100%" class="scFilterToolbar"><tr>
    <td class="scFilterToolbarPadding" align="left" width="33%" nowrap>
   <?php echo nmButtonOutput($this->arr_buttons, "bpesquisa", "document.F1.bprocessa.value='pesq'; setTimeout(function() {nm_submit_form()}, 200);", "document.F1.bprocessa.value='pesq'; setTimeout(function() {nm_submit_form()}, 200);", "sc_b_pesq_bot", "", "" . $this->Ini->Nm_lang['lang_btns_srch_lone'] . "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_srch_lone_hint'] . "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   if ($this->nmgp_botoes['clear'] == "on")
   {
?>
          <?php echo nmButtonOutput($this->arr_buttons, "blimpar", "limpa_form();", "limpa_form();", "limpa_frm_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
?>
<?php
   if (!isset($this->nmgp_botoes['save']) || $this->nmgp_botoes['save'] == "on")
   {
       $this->NM_fil_ant = $this->gera_array_filtros();
?>
     <span id="idAjaxSelect_NM_filters_bot">
       <SELECT class="scFilterToolbar_obj" id="sel_recup_filters_bot" name="NM_filters_bot" onChange="nm_submit_filter(this, 'bot');" size="1">
           <option value=""></option>
<?php
          $Nome_filter = "";
          foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
          {
              $Select      = "";
              $Cada_filter = $Tipo_filter[2];
              if ($Cada_filter == $this->NM_curr_fil)
              {
                  $Select = "selected";
              }
              if (NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] != "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, $_SESSION['scriptcase']['charset'], "UTF-8");
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], $_SESSION['scriptcase']['charset'], "UTF-8");
              }
              elseif (!NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] == "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($Tipo_filter[1] != $Nome_filter)
              {
                  $Nome_filter = $Tipo_filter[1];
                  echo "           <option value=\"\">" . NM_encode_input($Nome_filter) . "</option>\r\n";
              }
?>
           <option value="<?php echo NM_encode_input($Tipo_filter[0]) . "\" " . $Select . ">.." . $Cada_filter ?></option>
<?php
          }
?>
       </SELECT>
     </span>
<?php
   }
?>
<?php
   if ($this->nmgp_botoes['save'] == "on")
   {
?>
          <?php echo nmButtonOutput($this->arr_buttons, "bedit_filter", "document.getElementById('Salvar_filters_bot').style.display = ''; document.F1.nmgp_save_name_bot.focus();", "document.getElementById('Salvar_filters_bot').style.display = ''; document.F1.nmgp_save_name_bot.focus();", "Ativa_save_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
?>
<?php
   if (is_file("grid_del_nota_credito_ind_help.txt"))
   {
      $Arq_WebHelp = file("grid_del_nota_credito_ind_help.txt"); 
      if (isset($Arq_WebHelp[0]) && !empty($Arq_WebHelp[0]))
      {
          $Arq_WebHelp[0] = str_replace("\r\n" , "", trim($Arq_WebHelp[0]));
          $Tmp = explode(";", $Arq_WebHelp[0]); 
          foreach ($Tmp as $Cada_help)
          {
              $Tmp1 = explode(":", $Cada_help); 
              if (!empty($Tmp1[0]) && isset($Tmp1[1]) && !empty($Tmp1[1]) && $Tmp1[0] == "fil" && is_file($this->Ini->root . $this->Ini->path_help . $Tmp1[1]))
              {
?>
          <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "sc_b_help_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
              }
          }
      }
   }
?>
<?php
   if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['start'] == 'filter' && $nm_apl_dependente != 1)
   {
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.form_cancel.submit();", "document.form_cancel.submit();", "sc_b_cancel_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
   else
   {
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.form_cancel.submit();", "document.form_cancel.submit();", "sc_b_cancel_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
?>
    </td>
   </tr></table>
<?php
   if ($this->nmgp_botoes['save'] == "on")
   {
?>
    </TD></TR><TR><TD>
    <DIV id="Salvar_filters_bot" style="display:none;z-index:9999;">
     <TABLE align="center" class="scFilterTable">
      <TR>
       <TD class="scFilterBlock">
        <table style="border-width: 0px; border-collapse: collapse" width="100%">
         <tr>
          <td style="padding: 0px" valign="top" class="scFilterBlockFont"><?php echo $this->Ini->Nm_lang['lang_othr_srch_head'] ?></td>
          <td style="padding: 0px" align="right" valign="top">
           <?php echo nmButtonOutput($this->arr_buttons, "bcancelar_appdiv", "document.getElementById('Salvar_filters_bot').style.display = 'none';", "document.getElementById('Salvar_filters_bot').style.display = 'none';", "Cancel_frm_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
          </td>
         </tr>
        </table>
       </TD>
      </TR>
      <TR>
       <TD class="scFilterFieldOdd">
        <table style="border-width: 0px; border-collapse: collapse" width="100%">
         <tr>
          <td style="padding: 0px" valign="top">
           <input class="scFilterObjectOdd" type="text" id="SC_nmgp_save_name_bot" name="nmgp_save_name_bot" value="">
          </td>
          <td style="padding: 0px" align="right" valign="top">
           <?php echo nmButtonOutput($this->arr_buttons, "bsalvar_appdiv", "nm_save_form('bot');", "nm_save_form('bot');", "Save_frm_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
          </td>
         </tr>
        </table>
       </TD>
      </TR>
      <TR>
       <TD class="scFilterFieldEven">
       <DIV id="Apaga_filters_bot" style="display:''">
        <table style="border-width: 0px; border-collapse: collapse" width="100%">
         <tr>
          <td style="padding: 0px" valign="top">
          <div id="idAjaxSelect_NM_filters_del_bot">
           <SELECT class="scFilterObjectOdd" id="sel_filters_del_bot" name="NM_filters_del_bot" size="1">
            <option value=""></option>
<?php
          $Nome_filter = "";
          foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
          {
              $Select = "";
              if ($Cada_filter == $this->NM_curr_fil)
              {
                  $Select = "selected";
              }
              if (NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] != "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, $_SESSION['scriptcase']['charset'], "UTF-8");
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], $_SESSION['scriptcase']['charset'], "UTF-8");
              }
              elseif (!NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] == "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($Tipo_filter[1] != $Nome_filter)
              {
                  $Nome_filter = $Tipo_filter[1];
                  echo "            <option value=\"\">" . NM_encode_input($Nome_filter) . "</option>\r\n";
              }
?>
            <option value="<?php echo NM_encode_input($Tipo_filter[0]) . "\" " . $Select . ">.." . $Cada_filter ?></option>
<?php
          }
?>
           </SELECT>
          </div>
          </td>
          <td style="padding: 0px" align="right" valign="top">
           <?php echo nmButtonOutput($this->arr_buttons, "bexcluir_appdiv", "nm_submit_filter_del('bot');", "nm_submit_filter_del('bot');", "Exc_filtro_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
          </td>
         </tr>
        </table>
       </DIV>
       </TD>
      </TR>
     </TABLE>
    </DIV> 
<?php
   }
?>
  </TD>
 </TR>
     <?php
     }
     if (!$_SESSION['scriptcase']['proc_mobile'])
     {
     ?>
 <TR align="center">
  <TD class="scFilterTableTd" id='sc_filter_toolbar_bot'>
   <table width="100%" class="scFilterToolbar"><tr>
    <td class="scFilterToolbarPadding" align="left" width="33%" nowrap>
   <?php echo nmButtonOutput($this->arr_buttons, "bpesquisa", "document.F1.bprocessa.value='pesq'; setTimeout(function() {nm_submit_form()}, 200);", "document.F1.bprocessa.value='pesq'; setTimeout(function() {nm_submit_form()}, 200);", "sc_b_pesq_bot", "", "" . $this->Ini->Nm_lang['lang_btns_srch_lone'] . "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_srch_lone_hint'] . "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   if ($this->nmgp_botoes['clear'] == "on")
   {
?>
          <?php echo nmButtonOutput($this->arr_buttons, "blimpar", "limpa_form();", "limpa_form();", "limpa_frm_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
?>
<?php
   if (!isset($this->nmgp_botoes['save']) || $this->nmgp_botoes['save'] == "on")
   {
       $this->NM_fil_ant = $this->gera_array_filtros();
?>
     <span id="idAjaxSelect_NM_filters_bot">
       <SELECT class="scFilterToolbar_obj" id="sel_recup_filters_bot" name="NM_filters_bot" onChange="nm_submit_filter(this, 'bot');" size="1">
           <option value=""></option>
<?php
          $Nome_filter = "";
          foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
          {
              $Select      = "";
              $Cada_filter = $Tipo_filter[2];
              if ($Cada_filter == $this->NM_curr_fil)
              {
                  $Select = "selected";
              }
              if (NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] != "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, $_SESSION['scriptcase']['charset'], "UTF-8");
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], $_SESSION['scriptcase']['charset'], "UTF-8");
              }
              elseif (!NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] == "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($Tipo_filter[1] != $Nome_filter)
              {
                  $Nome_filter = $Tipo_filter[1];
                  echo "           <option value=\"\">" . NM_encode_input($Nome_filter) . "</option>\r\n";
              }
?>
           <option value="<?php echo NM_encode_input($Tipo_filter[0]) . "\" " . $Select . ">.." . $Cada_filter ?></option>
<?php
          }
?>
       </SELECT>
     </span>
<?php
   }
?>
<?php
   if ($this->nmgp_botoes['save'] == "on")
   {
?>
          <?php echo nmButtonOutput($this->arr_buttons, "bedit_filter", "document.getElementById('Salvar_filters_bot').style.display = ''; document.F1.nmgp_save_name_bot.focus();", "document.getElementById('Salvar_filters_bot').style.display = ''; document.F1.nmgp_save_name_bot.focus();", "Ativa_save_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
?>
<?php
   if (is_file("grid_del_nota_credito_ind_help.txt"))
   {
      $Arq_WebHelp = file("grid_del_nota_credito_ind_help.txt"); 
      if (isset($Arq_WebHelp[0]) && !empty($Arq_WebHelp[0]))
      {
          $Arq_WebHelp[0] = str_replace("\r\n" , "", trim($Arq_WebHelp[0]));
          $Tmp = explode(";", $Arq_WebHelp[0]); 
          foreach ($Tmp as $Cada_help)
          {
              $Tmp1 = explode(":", $Cada_help); 
              if (!empty($Tmp1[0]) && isset($Tmp1[1]) && !empty($Tmp1[1]) && $Tmp1[0] == "fil" && is_file($this->Ini->root . $this->Ini->path_help . $Tmp1[1]))
              {
?>
          <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "sc_b_help_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
              }
          }
      }
   }
?>
<?php
   if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['start'] == 'filter' && $nm_apl_dependente != 1)
   {
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "document.form_cancel.submit();", "document.form_cancel.submit();", "sc_b_cancel_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
   else
   {
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.form_cancel.submit();", "document.form_cancel.submit();", "sc_b_cancel_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
<?php
   }
?>
    </td>
    <td class="scFilterToolbarPadding" align="center" width="33%" nowrap>
    </td>
    <td class="scFilterToolbarPadding" align="right" width="33%" nowrap>
    </td>
   </tr></table>
<?php
   if ($this->nmgp_botoes['save'] == "on")
   {
?>
    </TD></TR><TR><TD>
    <DIV id="Salvar_filters_bot" style="display:none;z-index:9999;">
     <TABLE align="center" class="scFilterTable">
      <TR>
       <TD class="scFilterBlock">
        <table style="border-width: 0px; border-collapse: collapse" width="100%">
         <tr>
          <td style="padding: 0px" valign="top" class="scFilterBlockFont"><?php echo $this->Ini->Nm_lang['lang_othr_srch_head'] ?></td>
          <td style="padding: 0px" align="right" valign="top">
           <?php echo nmButtonOutput($this->arr_buttons, "bcancelar_appdiv", "document.getElementById('Salvar_filters_bot').style.display = 'none';", "document.getElementById('Salvar_filters_bot').style.display = 'none';", "Cancel_frm_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
          </td>
         </tr>
        </table>
       </TD>
      </TR>
      <TR>
       <TD class="scFilterFieldOdd">
        <table style="border-width: 0px; border-collapse: collapse" width="100%">
         <tr>
          <td style="padding: 0px" valign="top">
           <input class="scFilterObjectOdd" type="text" id="SC_nmgp_save_name_bot" name="nmgp_save_name_bot" value="">
          </td>
          <td style="padding: 0px" align="right" valign="top">
           <?php echo nmButtonOutput($this->arr_buttons, "bsalvar_appdiv", "nm_save_form('bot');", "nm_save_form('bot');", "Save_frm_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
          </td>
         </tr>
        </table>
       </TD>
      </TR>
      <TR>
       <TD class="scFilterFieldEven">
       <DIV id="Apaga_filters_bot" style="display:''">
        <table style="border-width: 0px; border-collapse: collapse" width="100%">
         <tr>
          <td style="padding: 0px" valign="top">
          <div id="idAjaxSelect_NM_filters_del_bot">
           <SELECT class="scFilterObjectOdd" id="sel_filters_del_bot" name="NM_filters_del_bot" size="1">
            <option value=""></option>
<?php
          $Nome_filter = "";
          foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
          {
              $Select = "";
              if ($Cada_filter == $this->NM_curr_fil)
              {
                  $Select = "selected";
              }
              if (NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] != "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, $_SESSION['scriptcase']['charset'], "UTF-8");
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], $_SESSION['scriptcase']['charset'], "UTF-8");
              }
              elseif (!NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] == "UTF-8")
              {
                  $Cada_filter    = sc_convert_encoding($Cada_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
                  $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], "UTF-8", $_SESSION['scriptcase']['charset']);
              }
              if ($Tipo_filter[1] != $Nome_filter)
              {
                  $Nome_filter = $Tipo_filter[1];
                  echo "            <option value=\"\">" . NM_encode_input($Nome_filter) . "</option>\r\n";
              }
?>
            <option value="<?php echo NM_encode_input($Tipo_filter[0]) . "\" " . $Select . ">.." . $Cada_filter ?></option>
<?php
          }
?>
           </SELECT>
          </div>
          </td>
          <td style="padding: 0px" align="right" valign="top">
           <?php echo nmButtonOutput($this->arr_buttons, "bexcluir_appdiv", "nm_submit_filter_del('bot');", "nm_submit_filter_del('bot');", "Exc_filtro_bot", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
?>
          </td>
         </tr>
        </table>
       </DIV>
       </TD>
      </TR>
     </TABLE>
    </DIV> 
<?php
   }
?>
  </TD>
 </TR>
     <?php
     }
 ?>
<?php
   }

   function monta_html_fim()
   {
       global $bprocessa, $nm_url_saida, $Script_BI;
?>

</TABLE>
   <INPUT type="hidden" name="form_condicao" value="3">
</FORM> 
<?php
   if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['grid_del_nota_credito_ind']['start'] == 'filter')
   {
?>
   <FORM style="display:none;" name="form_cancel"  method="POST" action="<?php echo $nm_url_saida; ?>" target="_self"> 
<?php
   }
   else
   {
?>
   <FORM style="display:none;" name="form_cancel"  method="POST" action="./" target="_self"> 
<?php
   }
?>
   <INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<?php
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['orig_pesq']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['orig_pesq'] == "grid")
   {
       $Ret_cancel_pesq = "volta_grid";
   }
   else
   {
       $Ret_cancel_pesq = "resumo";
   }
?>
   <INPUT type="hidden" name="nmgp_opcao" value="<?php echo $Ret_cancel_pesq; ?>"> 
   </FORM> 
<SCRIPT type="text/javascript">
<?php
   if (empty($this->NM_fil_ant))
   {
       if ($_SESSION['scriptcase']['proc_mobile'])
       {
?>
      document.getElementById('Apaga_filters_bot').style.display = 'none';
      document.getElementById('sel_recup_filters_bot').style.display = 'none';
<?php
       }
       else
       {
?>
      document.getElementById('Apaga_filters_bot').style.display = 'none';
      document.getElementById('sel_recup_filters_bot').style.display = 'none';
<?php
       }
   }
?>
 function nm_move()
 {
     document.form_cancel.target = "_self"; 
     document.form_cancel.action = "./"; 
     document.form_cancel.submit(); 
 }
 function nm_submit_form()
 {
    document.F1.submit();
 }
 function limpa_form()
 {
   document.F1.reset();
   if (document.F1.NM_filters)
   {
       document.F1.NM_filters.selectedIndex = -1;
   }
   document.getElementById('Salvar_filters_bot').style.display = 'none';
   document.F1.nc_fecha_cond.value = 'eq';
   nm_campos_between(document.getElementById('id_vis_nc_fecha'), document.F1.nc_fecha_cond, 'nc_fecha');
   document.F1.nc_fecha_dia.value = "";
   document.F1.nc_fecha_mes.value = "";
   document.F1.nc_fecha_ano.value = "";
   document.F1.nc_fecha_input_2_dia.value = "";
   document.F1.nc_fecha_input_2_mes.value = "";
   document.F1.nc_fecha_input_2_ano.value = "";
   document.F1.nc_secuencial_docmod_cond.value = 'eq';
   nm_campos_between(document.getElementById('id_vis_nc_secuencial_docmod'), document.F1.nc_secuencial_docmod_cond, 'nc_secuencial_docmod');
   document.F1.nc_secuencial_docmod.value = "";
   document.F1.cl_nombre_cond.value = 'eq';
   nm_campos_between(document.getElementById('id_vis_cl_nombre'), document.F1.cl_nombre_cond, 'cl_nombre');
   document.F1.cl_nombre.value = "";
   document.F1.cl_nombre_autocomp.value = "";
   $('#select2-id_ac_cl_nombre-container').html('<?php echo $this->Val_init_cl_nombre['desc'] ?>');;
   document.F1.cl_identificacion_cond.value = 'eq';
   nm_campos_between(document.getElementById('id_vis_cl_identificacion'), document.F1.cl_identificacion_cond, 'cl_identificacion');
   document.F1.cl_identificacion.value = "";
   document.F1.cl_identificacion_autocomp.value = "";
   $('#select2-id_ac_cl_identificacion-container').html('<?php echo $this->Val_init_cl_identificacion['desc'] ?>');;
   Sc_carga_select2('all');
 }
 function Sc_carga_select2(Field)
 {
 }
 function SC_carga_evt_jquery()
 {
    $('#SC_nc_fecha_dia').bind('change', function() {sc_grid_del_nota_credito_ind_valida_dia(this)});
    $('#SC_nc_fecha_input_2_dia').bind('change', function() {sc_grid_del_nota_credito_ind_valida_dia(this)});
    $('#SC_nc_fecha_input_2_mes').bind('change', function() {sc_grid_del_nota_credito_ind_valida_mes(this)});
    $('#SC_nc_fecha_mes').bind('change', function() {sc_grid_del_nota_credito_ind_valida_mes(this)});
 }
 function sc_grid_del_nota_credito_ind_valida_dia(obj)
 {
     if (obj.value != "" && (obj.value < 1 || obj.value > 31))
     {
         if (confirm (Nm_erro['lang_jscr_ivdt'] +  " " + Nm_erro['lang_jscr_iday'] +  " " + Nm_erro['lang_jscr_wfix']))
         {
            Xfocus = setTimeout(function() { obj.focus(); }, 10);
         }
     }
 }
 function sc_grid_del_nota_credito_ind_valida_mes(obj)
 {
     if (obj.value != "" && (obj.value < 1 || obj.value > 12))
     {
         if (confirm (Nm_erro['lang_jscr_ivdt'] +  " " + Nm_erro['lang_jscr_mnth'] +  " " + Nm_erro['lang_jscr_wfix']))
         {
            Xfocus = setTimeout(function() { obj.focus(); }, 10);
         }
     }
 }
   function process_hotkeys(hotkey)
   {
      if (hotkey == 'sys_format_fi2') { 
         var output =  $('#sc_b_pesq_bot').click();
         return (0 < output.length);
      }
      if (hotkey == 'sys_format_lim') { 
         var output =  $('#limpa_frm_bot').click();
         return (0 < output.length);
      }
      if (hotkey == 'sys_format_edi') { 
         var output =  $('#Ativa_save_bot').click();
         return (0 < output.length);
      }
      if (hotkey == 'sys_format_webh') { 
         var output =  $('#sc_b_help_bot').click();
         return (0 < output.length);
      }
      if (hotkey == 'sys_format_sai') { 
         var output =  $('#sc_b_cancel_bot').click();
         return (0 < output.length);
      }
   return false;
   }
</SCRIPT>
</BODY>
</HTML>
<?php
   }

   function gera_array_filtros()
   {
       $this->NM_fil_ant = array();
       $NM_patch   = "SIJAP/grid_del_nota_credito_ind";
       if (is_dir($this->NM_path_filter . $NM_patch))
       {
           $NM_dir = @opendir($this->NM_path_filter . $NM_patch);
           while (FALSE !== ($NM_arq = @readdir($NM_dir)))
           {
             if (@is_file($this->NM_path_filter . $NM_patch . "/" . $NM_arq))
             {
                 $Sc_v6 = false;
                 $NMcmp_filter = file($this->NM_path_filter . $NM_patch . "/" . $NM_arq);
                 $NMcmp_filter = explode("@NMF@", $NMcmp_filter[0]);
                 if (substr($NMcmp_filter[0], 0, 6) == "SC_V6_" || substr($NMcmp_filter[0], 0, 6) == "SC_V8_")
                 {
                     $Name_filter = substr($NMcmp_filter[0], 6);
                     if (!empty($Name_filter))
                     {
                         $this->NM_fil_ant[$NM_arq][0] = $NM_patch . "/" . $NM_arq;
                         $this->NM_fil_ant[$NM_arq][1] = "" . $this->Ini->Nm_lang['lang_srch_public'] . "";
                         $Sc_v6 = true;
                     }
                 }
                 if (!$Sc_v6)
                 {
                     $this->NM_fil_ant[$NM_arq][0] = $NM_arq;
                     $this->NM_fil_ant[$NM_arq][1] = "" . $this->Ini->Nm_lang['lang_srch_public'] . "";
                 }
                 $this->NM_fil_ant[$NM_arq][2] = $Name_filter;
             }
           }
       }
       return $this->NM_fil_ant;
   }
   /**
    * @access  public
    * @param  string  $NM_operador  $this->Ini->Nm_lang['pesq_global_NM_operador']
    * @param  array  $nmgp_tab_label  
    */
   function inicializa_vars()
   {
      global $NM_operador, $nmgp_tab_label;

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/");  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1);  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz;
      $this->Campos_Mens_erro = ""; 
      $this->nm_data = new nm_data("es");
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] = "";
      if ($this->NM_ajax_flag && ($this->NM_ajax_opcao == "ajax_grid_search" || $this->NM_ajax_opcao == "ajax_grid_search_change_fil"))
      {
          $nmgp_tab_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['pesq_tab_label'];
      }
      if (!empty($nmgp_tab_label))
      {
         $nm_tab_campos = explode("?@?", $nmgp_tab_label);
         $nmgp_tab_label = array();
         foreach ($nm_tab_campos as $cada_campo)
         {
             $parte_campo = explode("?#?", $cada_campo);
             $nmgp_tab_label[$parte_campo[0]] = $parte_campo[1];
         }
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig'] = "";
      }
      if ($this->NM_ajax_flag && ($this->NM_ajax_opcao == "ajax_grid_search" || $this->NM_ajax_opcao == "ajax_grid_search_change_fil"))
      {
          $this->comando = "";
      }
      else
      {
          $this->comando = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig'];
      }
      $this->comando_sum    = "";
      $this->comando_filtro = "";
      $this->comando_ini    = "ini";
      $this->comando_fim    = "";
      $this->NM_operador    = (isset($NM_operador) && ("and" == strtolower($NM_operador) || "or" == strtolower($NM_operador))) ? $NM_operador : "and";
   }

   function salva_filtro($nmgp_save_origem)
   {
      global $NM_filters_save, $nmgp_save_name, $nmgp_save_option, $script_case_init;
          $NM_filters_save = str_replace("__NM_PLUS__", "+", $NM_filters_save);
          $nmgp_save_name = trim($nmgp_save_name);
          $NM_str_filter  = "SC_V8_" . $nmgp_save_name . "@NMF@";
          if (!NM_is_utf8($nmgp_save_name))
          {
              $nmgp_save_name = sc_convert_encoding($nmgp_save_name, "UTF-8", $_SESSION['scriptcase']['charset']);
          }
          $NM_str_filter  .= $NM_filters_save;
          $NM_patch = $this->NM_path_filter;
          if (!is_dir($NM_patch))
          {
              $NMdir = mkdir($NM_patch, 0755);
          }
          $NM_patch .= "SIJAP/";
          if (!is_dir($NM_patch))
          {
              $NMdir = mkdir($NM_patch, 0755);
          }
          $NM_patch .= "grid_del_nota_credito_ind/";
          if (!is_dir($NM_patch))
          {
              $NMdir = mkdir($NM_patch, 0755);
          }
          $Parms_usr  = "";
          $NM_filter = fopen ($NM_patch . md5($nmgp_save_name), 'w');
          if (!NM_is_utf8($NM_str_filter))
          {
              $NM_str_filter = sc_convert_encoding($NM_str_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
          }
          fwrite($NM_filter, $NM_str_filter);
          fclose($NM_filter);
   }
   function recupera_filtro($NM_filters)
   {
      global $NM_operador, $script_case_init;
      $NM_patch = $this->NM_path_filter . "/" . $NM_filters;
      if (!is_file($NM_patch))
      {
          $NM_filters = sc_convert_encoding($NM_filters, "UTF-8", $_SESSION['scriptcase']['charset']);
          $NM_patch = $this->NM_path_filter . "/" . $NM_filters;
      }
      $return_fields = array();
      $tp_fields     = array();
      $tb_fields_esp = array();
      $old_bi_opcs   = array("TP","HJ","OT","U7","SP","US","MM","UM","AM","PS","SS","P3","PM","P7","CY","LY","YY","M6","M3","M18","M24");
      $tp_fields['SC_nc_fecha_cond'] = 'cond';
      $tp_fields['SC_nc_fecha_dia'] = 'text';
      $tp_fields['SC_nc_fecha_mes'] = 'text';
      $tp_fields['SC_nc_fecha_ano'] = 'text';
      $tp_fields['SC_nc_fecha_input_2_dia'] = 'text';
      $tp_fields['SC_nc_fecha_input_2_mes'] = 'text';
      $tp_fields['SC_nc_fecha_input_2_ano'] = 'text';
      $tp_fields['SC_nc_secuencial_docmod_cond'] = 'cond';
      $tp_fields['SC_nc_secuencial_docmod'] = 'text';
      $tp_fields['SC_cl_nombre_cond'] = 'cond';
      $tp_fields['SC_cl_nombre'] = 'text_aut';
      $tp_fields['id_ac_cl_nombre'] = 'select2_aut';
      $tp_fields['SC_cl_identificacion_cond'] = 'cond';
      $tp_fields['SC_cl_identificacion'] = 'text_aut';
      $tp_fields['id_ac_cl_identificacion'] = 'select2_aut';
      $tp_fields['SC_NM_operador'] = 'text';
      if (is_file($NM_patch))
      {
          $SC_V8    = false;
          $NMfilter = file($NM_patch);
          $NMcmp_filter = explode("@NMF@", $NMfilter[0]);
          if (substr($NMcmp_filter[0], 0, 5) == "SC_V8")
          {
              $SC_V8 = true;
          }
          if (substr($NMcmp_filter[0], 0, 5) == "SC_V6" || substr($NMcmp_filter[0], 0, 5) == "SC_V8")
          {
              unset($NMcmp_filter[0]);
          }
          foreach ($NMcmp_filter as $Cada_cmp)
          {
              $Cada_cmp = explode("#NMF#", $Cada_cmp);
              if (isset($tb_fields_esp[$Cada_cmp[0]]))
              {
                  $Cada_cmp[0] = $tb_fields_esp[$Cada_cmp[0]];
              }
              if (!$SC_V8 && substr($Cada_cmp[0], 0, 11) != "div_ac_lab_" && substr($Cada_cmp[0], 0, 6) != "id_ac_")
              {
                  $Cada_cmp[0] = "SC_" . $Cada_cmp[0];
              }
              if (!isset($tp_fields[$Cada_cmp[0]]))
              {
                  continue;
              }
              $list   = array();
              $list_a = array();
              if (substr($Cada_cmp[1], 0, 10) == "_NM_array_")
              {
                  if (substr($Cada_cmp[1], 0, 17) == "_NM_array_#NMARR#")
                  {
                      $Sc_temp = explode("#NMARR#", substr($Cada_cmp[1], 17));
                      foreach ($Sc_temp as $Cada_val)
                      {
                          $list[]   = $Cada_val;
                          $tmp_pos  = (is_string($Cada_val)) ? strpos($Cada_val, "##@@") : false;
                          $val_a    = ($tmp_pos !== false) ?  substr($Cada_val, $tmp_pos + 4) : $Cada_val;
                          $list_a[] = array('opt' => $Cada_val, 'value' => $val_a);
                      }
                  }
              }
              elseif ($tp_fields[$Cada_cmp[0]] == 'dselect')
              {
                  $list[]   = $Cada_cmp[1];
                  $tmp_pos  = (is_string($Cada_cmp[1])) ? strpos($Cada_cmp[1], "##@@") : false;
                  $val_a    = ($tmp_pos !== false) ?  substr($Cada_cmp[1], $tmp_pos + 4) : $Cada_cmp[1];
                  $list_a[] = array('opt' => $Cada_cmp[1], 'value' => $val_a);
              }
              else
              {
                  $list[0] = $Cada_cmp[1];
              }
              if ($tp_fields[$Cada_cmp[0]] == 'select2_aut')
              {
                  if (!isset($list[0]))
                  {
                      $list[0] = "";
                  }
                  $return_fields['set_select2_aut'][] = array('field' => $Cada_cmp[0], 'value' => $list[0]);
              }
              elseif ($tp_fields[$Cada_cmp[0]] == 'dselect')
              {
                  $return_fields['set_dselect'][] = array('field' => $Cada_cmp[0], 'value' => $list_a);
              }
              elseif ($tp_fields[$Cada_cmp[0]] == 'fil_order')
              {
                  $return_fields['set_fil_order'][] = array('field' => $Cada_cmp[0], 'value' => $list);
              }
              elseif ($tp_fields[$Cada_cmp[0]] == 'selmult')
              {
                  if (count($list) == 1 && $list[0] == "")
                  {
                      continue;
                  }
                  $return_fields['set_selmult'][] = array('field' => $Cada_cmp[0], 'value' => $list);
              }
              elseif ($tp_fields[$Cada_cmp[0]] == 'ddcheckbox')
              {
                  $return_fields['set_ddcheckbox'][] = array('field' => $Cada_cmp[0], 'value' => $list);
              }
              elseif ($tp_fields[$Cada_cmp[0]] == 'checkbox')
              {
                  $return_fields['set_checkbox'][] = array('field' => $Cada_cmp[0], 'value' => $list);
              }
              else
              {
                  if (!isset($list[0]))
                  {
                      $list[0] = "";
                  }
                  if ($tp_fields[$Cada_cmp[0]] == 'html')
                  {
                      $return_fields['set_html'][] = array('field' => $Cada_cmp[0], 'value' => $list[0]);
                  }
                  elseif ($tp_fields[$Cada_cmp[0]] == 'radio')
                  {
                      $return_fields['set_radio'][] = array('field' => $Cada_cmp[0], 'value' => $list[0]);
                  }
                  elseif ($tp_fields[$Cada_cmp[0]] == 'cond' && in_array($list[0], $old_bi_opcs))
                  {
                      $Cada_cmp[1] = "bi_" . $list[0];
                      $return_fields['set_val'][] = array('field' => $Cada_cmp[0], 'value' => $Cada_cmp[1]);
                  }
                  else
                  {
                      $return_fields['set_val'][] = array('field' => $Cada_cmp[0], 'value' => $list[0]);
                  }
              }
          }
          $this->NM_curr_fil = $NM_filters;
      }
      return $return_fields;
   }
   function apaga_filtro()
   {
      global $NM_filters_del;
      if (isset($NM_filters_del) && !empty($NM_filters_del))
      { 
          $NM_patch = $this->NM_path_filter . "/" . $NM_filters_del;
          if (!is_file($NM_patch))
          {
              $NM_filters_del = sc_convert_encoding($NM_filters_del, "UTF-8", $_SESSION['scriptcase']['charset']);
              $NM_patch = $this->NM_path_filter . "/" . $NM_filters_del;
          }
          if (is_file($NM_patch))
          {
              @unlink($NM_patch);
          }
          if ($NM_filters_del == $this->NM_curr_fil)
          {
              $this->NM_curr_fil = "";
          }
      }
   }
   /**
    * @access  public
    */
   function trata_campos()
   {
      global $nc_fecha_cond, $nc_fecha, $nc_fecha_dia, $nc_fecha_mes, $nc_fecha_ano, $nc_fecha_input_2_dia, $nc_fecha_input_2_mes, $nc_fecha_input_2_ano,
             $nc_secuencial_docmod_cond, $nc_secuencial_docmod,
             $cl_nombre_cond, $cl_nombre, $cl_nombre_autocomp,
             $cl_identificacion_cond, $cl_identificacion, $cl_identificacion_autocomp, $nmgp_tab_label;

      $C_formatado = true;
      if ($this->NM_ajax_flag && ($this->NM_ajax_opcao == "ajax_grid_search" || $this->NM_ajax_opcao == "ajax_grid_search_change_fil"))
      {
          if ($this->NM_ajax_opcao == "ajax_grid_search")
          {
              $C_formatado = false;
          }
          $Temp_Busca  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8" && $this->NM_ajax_opcao != "ajax_grid_search_change_fil")
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] = NM_conv_charset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'], $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] as $Cmps => $Vals)
          {
              $$Cmps = $Vals;
          }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_conv_dados.php", "F", "nm_conv_limpa_dado") ; 
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_edit.php", "F", "nmgp_Form_Num_Val") ; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq'] = array();
      if (!empty($cl_nombre_autocomp) && empty($cl_nombre))
      {
          $cl_nombre = $cl_nombre_autocomp;
      }
      if (!empty($cl_identificacion_autocomp) && empty($cl_identificacion))
      {
          $cl_identificacion = $cl_identificacion_autocomp;
      }
      $nc_fecha_cond_salva = $nc_fecha_cond; 
      if (!isset($nc_fecha_input_2_dia) || $nc_fecha_input_2_dia == "")
      {
          $nc_fecha_input_2_dia = $nc_fecha_dia;
      }
      if (!isset($nc_fecha_input_2_mes) || $nc_fecha_input_2_mes == "")
      {
          $nc_fecha_input_2_mes = $nc_fecha_mes;
      }
      if (!isset($nc_fecha_input_2_ano) || $nc_fecha_input_2_ano == "")
      {
          $nc_fecha_input_2_ano = $nc_fecha_ano;
      }
      $nc_secuencial_docmod_cond_salva = $nc_secuencial_docmod_cond; 
      if (!isset($nc_secuencial_docmod_input_2) || $nc_secuencial_docmod_input_2 == "")
      {
          $nc_secuencial_docmod_input_2 = $nc_secuencial_docmod;
      }
      $cl_nombre_cond_salva = $cl_nombre_cond; 
      if (!isset($cl_nombre_input_2) || $cl_nombre_input_2 == "")
      {
          $cl_nombre_input_2 = $cl_nombre;
      }
      $cl_identificacion_cond_salva = $cl_identificacion_cond; 
      if (!isset($cl_identificacion_input_2) || $cl_identificacion_input_2 == "")
      {
          $cl_identificacion_input_2 = $cl_identificacion;
      }
      if ($nc_secuencial_docmod_cond != "in")
      {
          nm_limpa_numero($nc_secuencial_docmod, $_SESSION['scriptcase']['reg_conf']['grup_num']) ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']  = array(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search']  = array(); 
      $I_Grid = 0;
      $Dyn_ok = false;
      $Grid_ok = false;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_dia'] = $nc_fecha_dia; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_mes'] = $nc_fecha_mes; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_ano'] = $nc_fecha_ano; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2_dia'] = $nc_fecha_input_2_dia; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2_mes'] = $nc_fecha_input_2_mes; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2_ano'] = $nc_fecha_input_2_ano; 
      if (!empty($nc_fecha_dia) || !empty($nc_fecha_mes) || !empty($nc_fecha_ano) || $nc_fecha_cond_salva == "nu" || $nc_fecha_cond_salva == "nn" || $nc_fecha_cond_salva == "ep" || $nc_fecha_cond_salva == "ne")
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0][] = "D:" . $nc_fecha_dia;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0][] = "M:" . $nc_fecha_mes;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0][] = "Y:" . $nc_fecha_ano;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][1][] = "D:" . $nc_fecha_input_2_dia;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][1][] = "M:" . $nc_fecha_input_2_mes;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][1][] = "Y:" . $nc_fecha_input_2_ano;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_cond'] = $nc_fecha_cond_salva; 
      if ($Grid_ok)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['cmp'] = "nc_fecha"; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['opc'] = $nc_fecha_cond_salva; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['nc_fecha'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid];
          $I_Grid++;
      }
      $Dyn_ok = false;
      $Grid_ok = false;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_secuencial_docmod'] = $nc_secuencial_docmod; 
      if (is_array($nc_secuencial_docmod) && !empty($nc_secuencial_docmod))
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0] = $nc_secuencial_docmod;
      }
      elseif ($nc_secuencial_docmod_cond_salva == "nu" || $nc_secuencial_docmod_cond_salva == "nn" || $nc_secuencial_docmod_cond_salva == "ep" || $nc_secuencial_docmod_cond_salva == "ne" || !empty($nc_secuencial_docmod))
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0][0] = $nc_secuencial_docmod;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_secuencial_docmod_cond'] = $nc_secuencial_docmod_cond_salva; 
      if ($Grid_ok)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['cmp'] = "nc_secuencial_docmod"; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['opc'] = $nc_secuencial_docmod_cond_salva; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['nc_secuencial_docmod'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid];
          $I_Grid++;
      }
      $Dyn_ok = false;
      $Grid_ok = false;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_nombre'] = $cl_nombre; 
      if (is_array($cl_nombre) && !empty($cl_nombre))
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0] = $cl_nombre;
      }
      elseif ($cl_nombre_cond_salva == "nu" || $cl_nombre_cond_salva == "nn" || $cl_nombre_cond_salva == "ep" || $cl_nombre_cond_salva == "ne" || !empty($cl_nombre))
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0][0] = $cl_nombre;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_nombre_cond'] = $cl_nombre_cond_salva; 
      if ($Grid_ok)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['cmp'] = "cl_nombre"; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['opc'] = $cl_nombre_cond_salva; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['cl_nombre'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid];
          $I_Grid++;
      }
      $Dyn_ok = false;
      $Grid_ok = false;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_identificacion'] = $cl_identificacion; 
      if (is_array($cl_identificacion) && !empty($cl_identificacion))
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0] = $cl_identificacion;
      }
      elseif ($cl_identificacion_cond_salva == "nu" || $cl_identificacion_cond_salva == "nn" || $cl_identificacion_cond_salva == "ep" || $cl_identificacion_cond_salva == "ne" || !empty($cl_identificacion))
      {
          $Grid_ok = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['val'][0][0] = $cl_identificacion;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['cl_identificacion_cond'] = $cl_identificacion_cond_salva; 
      if ($Grid_ok)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['cmp'] = "cl_identificacion"; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid]['opc'] = $cl_identificacion_cond_salva; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['cl_identificacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['Grid_search'][$I_Grid];
          $I_Grid++;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['NM_operador'] = $this->NM_operador; 
      if ($this->NM_ajax_flag && $this->NM_ajax_opcao == "ajax_grid_search")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] = $Temp_Busca;
      }
      if (!empty($this->Campos_Mens_erro)) 
      {
          return;
      }
      $Conteudo = $nc_secuencial_docmod;
      if (strtoupper($nc_secuencial_docmod_cond) != "II" && strtoupper($nc_secuencial_docmod_cond) != "QP" && strtoupper($nc_secuencial_docmod_cond) != "NP" && strtoupper($nc_secuencial_docmod_cond) != "IN") 
      { 
          nmgp_Form_Num_Val($Conteudo, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "1", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
      } 
      $this->cmp_formatado['nc_secuencial_docmod'] = $Conteudo;
      $nmgp_def_dados = array();
    if ($cl_nombre != '') {
      $cl_nombre_look = (is_string($cl_nombre) ? substr($this->Db->qstr($cl_nombre), 1, -1) : $cl_nombre); 
      $nmgp_def_dados = array(); 
      $nm_comando = "select distinct cl_nombre from " . $this->Ini->nm_tabela . " where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and nc_cliente=" . $_SESSION['var_propietario'] . ") and #lowerI#cl_nombre#lowerF# = #lowerI#'$cl_nombre_look'#lowerF# order by cl_nombre"; 
      $this->Sel_case_sensitive($nm_comando);
      unset($cmp1,$cmp2);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
      { 
         while (!$rs->EOF) 
         { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext() ; 
         } 
         $rs->Close() ; 
      } 
      else  
      {  
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit; 
      } 

    }
      if (!empty($nmgp_def_dados) && isset($cmp2) && !empty($cmp2))
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
             $cmp2 = NM_conv_charset($cmp2, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->cmp_formatado['cl_nombre'] = $cmp2;
      }
      elseif (!empty($nmgp_def_dados) && isset($cmp1) && !empty($cmp1))
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
             $cmp1 = NM_conv_charset($cmp1, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->cmp_formatado['cl_nombre'] = $cmp1;
      }
      else
      {
          $this->cmp_formatado['cl_nombre'] = $cl_nombre;
      }
      $nmgp_def_dados = array();
    if ($cl_identificacion != '') {
      $cl_identificacion_look = (is_string($cl_identificacion) ? substr($this->Db->qstr($cl_identificacion), 1, -1) : $cl_identificacion); 
      $nmgp_def_dados = array(); 
      $nm_comando = "select distinct cl_identificacion from " . $this->Ini->nm_tabela . " where (nc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and nc_cliente=" . $_SESSION['var_propietario'] . ") and #lowerI#cl_identificacion#lowerF# = #lowerI#'$cl_identificacion_look'#lowerF# order by cl_identificacion"; 
      $this->Sel_case_sensitive($nm_comando);
      unset($cmp1,$cmp2);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
      { 
         while (!$rs->EOF) 
         { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext() ; 
         } 
         $rs->Close() ; 
      } 
      else  
      {  
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit; 
      } 

    }
      if (!empty($nmgp_def_dados) && isset($cmp2) && !empty($cmp2))
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
             $cmp2 = NM_conv_charset($cmp2, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->cmp_formatado['cl_identificacion'] = $cmp2;
      }
      elseif (!empty($nmgp_def_dados) && isset($cmp1) && !empty($cmp1))
      {
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
             $cmp1 = NM_conv_charset($cmp1, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->cmp_formatado['cl_identificacion'] = $cmp1;
      }
      else
      {
          $this->cmp_formatado['cl_identificacion'] = $cl_identificacion;
      }

      //----- $nc_fecha
      $this->Date_part = false;
      if ($nc_fecha_cond != "bi_TP")
      {
          $nc_fecha_cond = strtoupper($nc_fecha_cond);
          $Dtxt = "";
          $val  = array();
          $Dtxt .= $nc_fecha_ano;
          $Dtxt .= $nc_fecha_mes;
          $Dtxt .= $nc_fecha_dia;
          $val[0]['ano'] = $nc_fecha_ano;
          $val[0]['mes'] = $nc_fecha_mes;
          $val[0]['dia'] = $nc_fecha_dia;
          if ($nc_fecha_cond == "BW")
          {
              $val[1]['ano'] = $nc_fecha_input_2_ano;
              $val[1]['mes'] = $nc_fecha_input_2_mes;
              $val[1]['dia'] = $nc_fecha_input_2_dia;
          }
          $this->Operador_date_part = "";
          $this->Lang_date_part     = "";
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->nm_prep_date($val, "DT", "DATETIME", $nc_fecha_cond, "", "data");
          }
          else
          {
              $this->nm_prep_date($val, "DT", "DATE", $nc_fecha_cond, "", "data");
          }
          if (!$this->Date_part) {
              $val[0] = $this->Ini->sc_Date_Protect($val[0]);
          }
          $nc_fecha = $val[0];
          $this->cmp_formatado['nc_fecha'] = $val[0];
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha'] = $val[0];
          $this->nm_data->SetaData($this->cmp_formatado['nc_fecha'], "YYYY-MM-DD");
          $this->cmp_formatado['nc_fecha'] = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "dmY"));
          if ($nc_fecha_cond == "BW")
          {
              if (!$this->Date_part) {
                  $val[1] = $this->Ini->sc_Date_Protect($val[1]);
              }
              $nc_fecha_input_2     = $val[1];
              $this->cmp_formatado['nc_fecha_input_2'] = $val[1];
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']['nc_fecha_input_2'] = $val[1];
              $this->nm_data->SetaData($this->cmp_formatado['nc_fecha_input_2'], "YYYY-MM-DD");
              $this->cmp_formatado['nc_fecha_input_2'] = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "dmY"));
          }
          if (!empty($Dtxt) || $nc_fecha_cond == "NU" || $nc_fecha_cond == "NN"|| $nc_fecha_cond == "EP"|| $nc_fecha_cond == "NE")
          {
              $this->monta_condicao("nc_fecha", $nc_fecha_cond, $nc_fecha, $nc_fecha_input_2, 'nc_fecha', 'DATE');
          }
      }
      else
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['nc_fecha']['label'] = $nmgp_tab_label['nc_fecha'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['nc_fecha']['descr'] = $nmgp_tab_label['nc_fecha'] . " " . $this->Ini->Nm_lang['lang_srch_ever'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['grid_pesq']['nc_fecha']['hint']  = $nmgp_tab_label['nc_fecha'] . " " . $this->Ini->Nm_lang['lang_srch_ever'];
      }

      //----- $nc_secuencial_docmod
      $this->Date_part = false;
      if (isset($nc_secuencial_docmod) || $nc_secuencial_docmod_cond == "nu" || $nc_secuencial_docmod_cond == "nn" || $nc_secuencial_docmod_cond == "ep" || $nc_secuencial_docmod_cond == "ne")
      {
         $this->monta_condicao("nc_secuencial_docmod", $nc_secuencial_docmod_cond, $nc_secuencial_docmod, "", "nc_secuencial_docmod", "TEXT", false);
      }

      //----- $cl_nombre
      $this->Date_part = false;
      if (isset($cl_nombre) || $cl_nombre_cond == "nu" || $cl_nombre_cond == "nn" || $cl_nombre_cond == "ep" || $cl_nombre_cond == "ne")
      {
         $this->monta_condicao("cl_nombre", $cl_nombre_cond, $cl_nombre, "", "cl_nombre", "VARCHAR", false);
      }

      //----- $cl_identificacion
      $this->Date_part = false;
      if (isset($cl_identificacion) || $cl_identificacion_cond == "nu" || $cl_identificacion_cond == "nn" || $cl_identificacion_cond == "ep" || $cl_identificacion_cond == "ne")
      {
         $this->monta_condicao("cl_identificacion", $cl_identificacion_cond, $cl_identificacion, "", "cl_identificacion", "VARCHAR", false);
      }
   }

   /**
    * @access  public
    */
   function Sel_case_sensitive(&$comando_sel)
   {
      if ($this->NM_case_insensitive)
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $comando_sel = str_replace("#lowerI#", "UCase(", $comando_sel);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              if (strpos($comando_sel, " like ") !== false)
              {
                  $comando_sel = str_replace("#lowerI#", "", $comando_sel);
                  $comando_sel = str_replace("#lowerF#", "", $comando_sel);
                  $comando_sel = str_replace(" like ", " ilike ", $comando_sel);
              }
              else
              {
                  $comando_sel = str_replace("#lowerI#", "Upper(", $comando_sel);
              }
          }
          else
          {
              $comando_sel = str_replace("#lowerI#", "Upper(", $comando_sel);
          }
          $comando_sel = str_replace("#lowerF#", ")", $comando_sel);
      }
      else
      {
          $comando_sel = str_replace("#lowerI#", "", $comando_sel);
          $comando_sel = str_replace("#lowerF#", "", $comando_sel);
      }
   }
   function finaliza_resultado_ajax()
   {
    $this->Sel_case_sensitive($this->comando);
       $this->comando = substr($this->comando, 8);
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_grid'] = $this->comando;
       if (empty($this->comando)) 
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_filtro'] = "";
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq']        = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig'];
       }
       else
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_filtro'] = "( " . $this->comando . " )";
           if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig'])) 
           {
               $this->comando = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig'] . " and (" . $this->comando . ")"; 
           }
           else
           {
               $this->comando = " where " . $this->comando; 
           }
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq'] = $this->comando;
       }
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_fast'])) 
       {
           if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq'])) 
           {
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq'] .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_fast'] . ")";
           }
           else 
           {
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq'] = " where (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_fast'] . ")";
           }
       }
   }
   function finaliza_resultado()
   {
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['dyn_search']      = array();
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_dyn_search'] = "";
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_fast'] = "";
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['fast_search']);
      if ("" == $this->comando_filtro)
      {
          $this->comando = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_orig'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca']) && $_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'] = NM_conv_charset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['campos_busca'], "UTF-8", $_SESSION['scriptcase']['charset']);
      }

      $this->Sel_case_sensitive($this->comando);
      $this->Sel_case_sensitive($this->comando_sum);
      $this->Sel_case_sensitive($this->comando_filtro);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_grid']    = $this->comando_filtro;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_lookup']  = $this->comando_sum . $this->comando_fim;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq']         = $this->comando . $this->comando_fim;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['opcao']              = "pesq";
      if ("" == $this->comando_filtro)
      {
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_filtro'] = "";
      }
      else
      {
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_filtro'] = " (" . $this->comando_filtro . ")";
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq'] != $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_ant'])
      {
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['cond_pesq'] .= $this->NM_operador;
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['contr_array_resumo'] = "NAO";
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['contr_total_geral']  = "NAO";
         unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['tot_geral']);
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq_ant'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_del_nota_credito_ind']['where_pesq'];

      if ($this->NM_ajax_flag && ($this->NM_ajax_opcao == "ajax_grid_search" || $this->NM_ajax_opcao == "ajax_grid_search_change_fil"))
      {
         return;
      }
      $this->retorna_pesq();
   }
   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $str_highlight_ini = "";
      $str_highlight_fim = "";
      if(substr($nm_campo, 0, 23) == '<div class="highlight">' && substr($nm_campo, -6) == '</div>')
      {
           $str_highlight_ini = substr($nm_campo, 0, 23);
           $str_highlight_fim = substr($nm_campo, -6);

           $trab_campo = substr($nm_campo, 23, -6);
           $tam_campo  = strlen($trab_campo);
      }      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($tam_campo >= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
   } 
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out);
           return $dt_out;
       }
   }
function crearNombreCarpeta($xmlComprobante) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        $nombre = ""; 
	    $codDoc = $xmlComprobante->codDoc;
        if ($codDoc=='01') {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="03") {
            $nombre = $xmlComprobante->identificacionProveedor;
        } else if ($codDoc=="04") {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="05") {
            $nombre = $xmlComprobante->identificacionComprador;
        } else if ($codDoc=="06") {
            $nombre = $xmlComprobante->rucTransportista;
        } else if ($codDoc=="07") {
            $nombre = $xmlComprobante->identificacionSujetoRetenido;
        } 
        return $nombre;
    
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function crearNombreFichero($xmlComprobante,$extension) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        $nombre = "";
        $codDoc = $xmlComprobante->codDoc;
        $establecimiento = $xmlComprobante->establecimiento;
        $ptoEmision = $xmlComprobante->ptoEmision;
        $secuencial_doc = $xmlComprobante->secuencial;
        if ($codDoc=="01") {
            $nombre = "FAC";
        } else if ($codDoc=="03") {
            $nombre = "LIQ";
        } else if ($codDoc=="04") {
            $nombre = "NC";
        } else if ($codDoc=="05") {
            $nombre = "ND";
        } else if ($codDoc=="06") { 
            $nombre = "GR";
        } else if ($codDoc=="07") {
            $nombre = "CR";
        } 
        return $nombre . $establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc .".". $extension;
    
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function crearNombreFicheroSinExtension($xmlComprobante){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		
		$nombre = "";
		$codDoc = $xmlComprobante->codDoc;
		$establecimiento = $xmlComprobante->establecimiento;
		$ptoEmision = $xmlComprobante->ptoEmision;
		$secuencial_doc = $xmlComprobante->secuencial;
		if ($codDoc=="01") {
			$nombre = "FAC";
		} else if ($codDoc=="03") {
			$nombre = "LIQ";
		} else if ($codDoc=="04") {
			$nombre = "NC";
		} else if ($codDoc=="05") {
			$nombre = "ND";
		} else if ($codDoc=="06") {
			$nombre = "GR";
		} else if ($codDoc=="07") {
			$nombre = "CR";
		} 
		return $nombre . $establecimiento . "-" . $ptoEmision . "-" . $secuencial_doc ;
	
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function crearMensajeCorreo($xmlComprobante, $w_ruta_logo) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_email_documentos.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
        $codDoc = $xmlComprobante->codDoc;
		$w_establecimiento= $xmlComprobante->establecimiento;
        $ptoEmision = $xmlComprobante->ptoEmision;
        $secuencial_doc = $xmlComprobante->secuencial;
		
        $tipoComprobante = "";
        $dirigido = "";
        $w_datos_adicionales = "";
		if ($codDoc=="01") {
			$tipoComprobante = "FACTURA";
			$dirigido = $xmlComprobante->razonSocialComprador;
			$importeTotal = $xmlComprobante->importeTotal;
			$w_datos_adicionales = "<strong>Valor Total: </strong>".$importeTotal."<br /><br />";
		} else if ($codDoc=="03") {
			$tipoComprobante = "LIQUIDACIÓN DE COMPRA DE BIENES Y PRESTACIÓN DE SERVICIOS";
			$dirigido = $xmlComprobante->razonSocialProveedor;
			$importeTotal = $xmlComprobante->importeTotal;
			$w_datos_adicionales = "<strong>Valor Total: </strong>".$importeTotal."<br /><br />";
		} else if ($codDoc=="04") {
			$tipoComprobante = "NOTA DE CRÉDITO";
			$dirigido = $xmlComprobante->razonSocialComprador;
		} else if ($codDoc=="05") {
			$tipoComprobante = "NOTA DE DÉBITO";
			$dirigido = $xmlComprobante->razonSocialComprador;
		} else if ($codDoc=="06") {
			$tipoComprobante = "GUÍA DE REMISIÓN";
			$dirigido = $xmlComprobante->razonSocialTransportista;
		} else if ($codDoc=="07") {
			$tipoComprobante = "COMPROBANTE DE RETENCIÓN";
			$dirigido = $xmlComprobante->razonSocialSujetoRetenido;
		}
        $razonSocial = $dirigido;
        $razonSocialEmisor = $xmlComprobante->razonSocial;
        if (file_exists($nombre)){ 
			$fp = fopen ($nombre,"r"); 
			$datos = fread($fp, filesize($nombre));
			fclose($fp);
			$datos=str_replace('$rutaLogo',$w_ruta_logo,$datos);
			$datos=str_replace('$razonSocial',$razonSocial,$datos);
			$datos=str_replace('$EMPRESA_CLIENTE',$razonSocialEmisor,$datos);
			$datos=str_replace('$tipoComprobante',$tipoComprobante,$datos);
			$datos=str_replace('$w_establecimiento',$w_establecimiento,$datos);
			$datos=str_replace('$ptoEmision',$ptoEmision,$datos);
			$datos=str_replace('$secuencial_doc',$secuencial_doc,$datos);
			$datos=str_replace('$w_datos_adicionales',$w_datos_adicionales,$datos);
			$datos=str_replace('imagenes/',$ruta_imagenes,$datos);

			return $datos;
		}else{
			return 'No se pudo cargar skin '.$nombre;
		}     
    
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function enviarCorreo($xmlComprobante,$correo_destino){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		
		$check_sql = "SELECT sp_busca_parametro ('RUTA_DOCUMENTOS','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if(isset($rs[0][0])){
			$dir=$rs[0][0];
		}
		$empresa=$xmlComprobante->ruc;
		$cliente=$this->crearNombreCarpeta($xmlComprobante);
		
		$pathpdf= $dir.$empresa.'/documentos/'.$cliente.'/'.$this->crearNombreFichero($xmlComprobante,'pdf');
		$pathxml= $dir.$empresa.'/documentos/'.$cliente.'/'.$this->crearNombreFichero($xmlComprobante,'xml');
		
		
		$configCorreo=$xmlComprobante->configCorreo;
		$mail_smtp_server    = $configCorreo->correoHost;       
		$mail_smtp_user      = $configCorreo->correoRemitente;
		$mail_smtp_pass      = $configCorreo->correoPass;
		$mail_from           = $configCorreo->correoRemitente;
		$mail_subject        = $configCorreo->correoAsunto;
		$mail_message        = $this->crearMensajeCorreo($xmlComprobante,$configCorreo->rutaLogo); 
		$mail_format         = 'H';
		$mail_copies		 = '';	
		$mail_tp_copies		 = '';
		$mail_port           = $configCorreo->correoPort;
		$mail_tp_connection  = $configCorreo->sslHabilitado;
		$mail_atachment		 = array();
		$mail_atachment[0]= $pathpdf;
		$mail_atachment[1]= $pathxml;
		
		try {
    		$destinatarios = explode(",", $correo_destino);
			foreach( $destinatarios as $destinatario){

				$mail_to= trim($destinatario);

				    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "$mail_port";
    $sc_mail_tp_port  = "$mail_tp_connection";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "$mail_tp_copies";
    $sc_mail_count = 0;
    $sc_mail_erro  = "";
    $sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S" || $sc_mail_tp_port == "Y")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    elseif ($sc_mail_tp_port == "T")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 587;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'tls');
    }
    else
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message)->setContentType("text/html");
    }
    else
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    {
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
    }
    $Temp_mail = $mail_atachment;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_atachment);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Mens_Mail->attach(Swift_Attachment::fromPath($NM_dest));
        }
    }
    $Temp_mail = $mail_to;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_to);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            $Mens_Mail->addTo($Arr_addr[0], $Arr_addr[1]);
        }
    }
    $Temp_mail = $mail_copies;
    if (!is_array($Temp_mail))
    {
        $Temp_mail = explode(";", $mail_copies);
    }
    foreach ($Temp_mail as $NM_dest)
    {
        if (!empty($NM_dest))
        {
            $Arr_addr = SC_Mail_Address($NM_dest);
            if (strtoupper(substr($sc_mail_tp_copy, 0, 2)) == "CC")
            {
                $Mens_Mail->addCc($Arr_addr[0], $Arr_addr[1]);
            }
            else
            {
                $Mens_Mail->addBcc($Arr_addr[0], $Arr_addr[1]);
            }
        }
    }
    $Arr_addr = SC_Mail_Address($mail_from);
    $Err_mail = array();
    $sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    {
        $sc_mail_erro = $Err_mail;
        $sc_mail_ok   = false;
    }
;	

			}
			if ($sc_mail_ok ){
				return true;
			}else{
				return false;
			}
		} catch (Exception $e) {
			return false;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_factura ($fac_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  	
		if($i_log){
					var_dump($fac_numero);
					echo '<br>';
		}	
		$correo_enviado='';
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$factura = new factura();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="select fac_empresa,fac_establecimiento from del_factura where fac_numero =".$fac_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];
		}

		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			
			$configApp->dirIreport=$dir_ireport;
			$factura->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Factura";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$factura->configCorreo = $configCorreo;

			$factura->ruc = $rs_empresa[0][0];
			$factura->razonSocial = $rs_empresa[0][4];
			$factura->nombreComercial = $rs_empresa[0][5]; 
			$factura->dirMatriz = $rs_empresa[0][6]; 
			$factura->obligadoContabilidad =$rs_empresa[0][7]; 
			$factura->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$factura->contribuyenteEspecial = $rs_empresa[0][10];
			}	
			$factura->padronMicroempresa=$rs_empresa[0][17];
			$factura->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $factura->numeroResolucion=$rs[0][0];   
				}
			}
			$factura->artesanoCalificado=$rs_empresa[0][19];
		}

		$check_sql="SELECT
							fac_numero,
							fac_ambiente,
							fac_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							fac_secuencial,
							cl_tipo_identificacion,
							cl_nombre,
							cl_identificacion,
							cl_direccion,
							cl_telefono,
							cl_email,
							fac_subtotal,
							fac_total_descuento,
							fac_subtotal_iva,
							fac_valor_iva,
							fac_subtotal_cero,
							fac_subtotal_no_objeto,
							fac_subtotal_excento,
							fac_valor_ice,
							fac_valor_irbpnr,
							fac_propina,
							fac_total,
							fac_guia_remision,
							fac_comentario,
							fac_moneda,
							usuario,
							usu_cedula,
							usu_telefono,
							usu_email,
							usu_placa,
							usu_tipo_documento,
							dia_descripcion,
							est_padronrimpe,
							fac_total_subsidio,
							est_leyenda_rimpe,
							usu_direccion,
							fac_correo_enviado
						FROM
							v_del_datos_factura_sri
						WHERE fac_numero=".$fac_numero ;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_factura = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_factura[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_factura = false;
          $rs_factura_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_factura[0][0])){
			$correo_enviado=$rs_factura[0][39];
			$factura->padronRimpe=$rs_factura[0][35];
			$factura->leyendaRimpe=$rs_factura[0][37];
			$factura->ambiente = $rs_factura[0][1];
			$factura->codDoc = $rs_factura[0][2];
			$factura->fechaEmision = $rs_factura[0][3];
			$factura->dirEstablecimiento = $rs_factura[0][4];
			$factura->establecimiento = $rs_factura[0][5]; 
			$factura->ptoEmision = $rs_factura[0][6]; 
			$factura->secuencial = $rs_factura[0][7];
			$factura->tipoIdentificacionComprador = $rs_factura[0][8];
			if($rs_factura[0][25]<>''){
				$factura->guiaRemision=$rs_factura[0][25];
			}
			$factura->razonSocialComprador = $rs_factura[0][9]; 
			$factura->identificacionComprador = $rs_factura[0][10];
			$factura->direccionComprador=$rs_factura[0][11];
			$factura->totalSinImpuestos = $rs_factura[0][14]; 
			if($rs_factura[0][36]>0){
				$factura->totalSubsidio=$rs_factura[0][36];
			}
			$factura->totalDescuento = $rs_factura[0][15]; 
			$total_Impuestos=array();
			$i=0;
				$sql_ivas_cobrados="SELECT df_porcentaje_iva,
											ROUND(sum(df_cantidad*(df_precio_unitario-df_descuento)+df_valor_ice),2),
											round(sum(df_base_iva) *iva_porcentaje/100,2)
									FROM  del_detalle_factura 
									inner join sri_tarifa_iva on iva_codigo=df_porcentaje_iva
									WHERE df_factura=".$fac_numero."
									group by df_porcentaje_iva,iva_porcentaje";
				 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
				if ($rs_ivas   === false){
					echo "Error al acceder a del_detalle_factura";
				}else{
					while (!$rs_ivas->EOF){
						$totalImpuesto = new totalImpuesto();
						$totalImpuesto->codigo ='2'; 
						$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
						$totalImpuesto->baseImponible = $rs_ivas->fields[1];
						$totalImpuesto->valor = $rs_ivas->fields[2];
						$total_Impuestos[$i]=$totalImpuesto;
						$i+=1;
						$rs_ivas->MoveNext();
					}
					$rs_ivas->Close();
				}	
				
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
				if($rs_factura[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 ice_codigo,
										sum(df_subtotal),
										sum(df_valor_ice) 
								FROM del_detalle_factura 
								join sri_tarifa_ice on df_porcentaje_ice::integer=ice_id
								WHERE df_porcentaje_ice<>'0' 
								and df_factura=".$fac_numero."
								group by df_porcentaje_ice,ice_codigo";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
				if($rs_factura[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										df_porcentaje_irbpnr,
										sum(df_base_irbpnr*df_cantidad),
										sum(df_valor_irbpnr) 
								FROM del_detalle_factura 
								WHERE df_porcentaje_irbpnr<>'0' 
								and df_factura=".$fac_numero ."
								group by df_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
			$factura->totalConImpuesto = $total_Impuestos;
			$factura->propina = $rs_factura[0][23]; 
			$factura->importeTotal = $rs_factura[0][24]; 
			$factura->moneda = $rs_factura[0][27];
			$check_sql="SELECT
								df_factura,
								df_producto,
								pro_codigo_aux,
								pro_descripcion,
								df_cantidad,
								df_precio_unitario,
								df_descuento,
								valor_sin_impuesto,
								pro_iva,
								df_porcentaje_iva,
								iva_porcentaje,
								df_base_iva,
								df_valor_iva,
								pro_ice,
								ice_codigo,
								round(df_subtotal,2),
								ice_tarifa,
								df_valor_ice,
								pro_irbpnr,
								df_porcentaje_irbpnr,
								irbpnr_tarifa,
								round(df_base_irbpnr*df_cantidad,2),
								df_valor_irbpnr,
								df_descripcion,
								df_precio_sin_subsidio
							FROM
								v_del_detalle_factura_sri
							where df_factura=".$fac_numero."
							order by df_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_detalles   === false){
				echo "Error al acceder al detalle de la factura";
			}else{
				$detalles_factura = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$detalleFactura = new detalleFactura();
					$detalleFactura->codigoPrincipal = $rs_detalles->fields[1];
					$detalleFactura->codigoAuxiliar = $rs_detalles->fields[2]; 
					$detalleFactura->descripcion = $rs_detalles->fields[3]; 
					$detalleFactura->cantidad = $rs_detalles->fields[4]; 
					$detalleFactura->precioUnitario = $rs_detalles->fields[5]; 
					$detalleFactura->descuento = $rs_detalles->fields[6]; 
					$detalleFactura->precioTotalSinImpuesto = $rs_detalles->fields[7]; 
					$detalleFactura->precioSinSubsidio=$rs_detalles->fields[24];

					if ($rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detalleFactura->detalleAdicional = $informacion_adicional;	
					}

						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $rs_detalles->fields[9]; 
						$impuesto->tarifa = $rs_detalles->fields[10]; 
						$impuesto->baseImponible = $rs_detalles->fields[11]; 
						$impuesto->valor = $rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[14]; 
							$impuesto->tarifa = "0.00";  
							$impuesto->baseImponible = $rs_detalles->fields[15]; 
							$impuesto->valor = $rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[19]; 
							$impuesto->tarifa = $rs_detalles->fields[20]; 
							$impuesto->baseImponible = $rs_detalles->fields[21]; 
							$impuesto->valor = $rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detalleFactura->impuestos = $impuestos_det;
					$detalles_factura[$i]=$detalleFactura;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$factura->detalles = $detalles_factura;
			}
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_factura a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_factura=".$fac_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos = false;
          $rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$rs_pagos->fields[1];
					$pago->total = $rs_pagos->fields[2];
					$pago->plazo = $rs_pagos->fields[3];
					$pago->unidadTiempo=$rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$rs_pagos->MoveNext();
				}
				$rs_pagos->Close();
			}	
			$factura->pagos = $pagos;
			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][16]=='S'){
				if($rs_factura[0][29]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Ruc";
					$campoAdicional->valor = $rs_factura[0][29];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][28]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Razon Social";
					$campoAdicional->valor = $rs_factura[0][28];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][32]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Placa";
					$campoAdicional->valor = $rs_factura[0][32];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][6]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Punto Emision";
					$campoAdicional->valor = $rs_factura[0][6];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if($rs_factura[0][33]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Contribuyente";
					$campoAdicional->valor = $rs_factura[0][33];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if($rs_factura[0][30]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono Socio";
					$campoAdicional->valor = $rs_factura[0][30];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_factura[0][38]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Direccion Emisor";
					$campoAdicional->valor = $rs_factura[0][38];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
			}

			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_factura[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_factura[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_factura[0][13]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Email";
					$campoAdicional->valor = $rs_factura[0][13];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
			if($rs_factura[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $rs_factura[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_factura[0][34]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Diagnostico";
				$campoAdicional->valor = $rs_factura[0][34];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$factura->infoAdicional = $camposAdicionales;
			if($i_log){
					var_dump($factura);
					echo '<br>';
			}
			try{
				$procesarComprobante = new procesarComprobante();
				$procesarComprobante->comprobante = $factura;
				$procesarComprobante->envioSRI = false; 
				$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
				if($i_log){
					
					var_dump($res);
					echo '<br>';
				}	
			}catch(Throwable $e){
				echo $e->getMessage();	
			}
				
			
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $factura;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_factura[0][1];
						$comprobantePendiente->codDoc = $rs_factura[0][2];
						$comprobantePendiente->establecimiento = $rs_factura[0][5];
						$comprobantePendiente->fechaEmision = $rs_factura[0][3];
						$comprobantePendiente->ptoEmision = $rs_factura[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_factura[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($factura,$rs_factura[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
					if($i_log){
						var_dump($correo_enviado);
						echo '<br>';
					}	
				}
				$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_autorizacion='".$res->return->numeroAutorizacion."',
									 fac_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 fac_error_sri='',
									 fac_correo_enviado='".$correo_enviado."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($factura,$rs_factura[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
						if($i_log){
						var_dump($correo_enviado);
						echo '<br>';
					}
					}
					$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='AUTORIZADO',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_autorizacion='".$res->return->claveAcceso."',
									 fac_correo_enviado='".$correo_enviado."'
								WHERE fac_numero=".$fac_numero ;
				}else{
					$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_error_sri='".$res->return->mensajes->mensaje."'
								WHERE fac_numero=".$fac_numero ;
				}

				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_factura 
								SET  fac_estado_sri='".$res->return->estadoComprobante."',
									 fac_archivo='" . $this->crearNombreFicheroSinExtension($factura) . "',
									 fac_clave='".$res->return->claveAcceso."',   
									 fac_error_sri='".$res->return->mensajes->mensaje."',
									 fac_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE fac_numero=".$fac_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_liquidacion ($liq_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($liq_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$liquidacion = new \liquidacionCompra();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollo/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT fc_empresa,liq_establecimiento FROM del_factura_compra where fc_id=".$liq_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$liquidacion->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Liquidacion de Compras";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$liquidacion->configCorreo = $configCorreo;

			$liquidacion->ruc = $rs_empresa[0][0];
			$liquidacion->razonSocial = $rs_empresa[0][4];
			$liquidacion->nombreComercial = $rs_empresa[0][5]; 
			$liquidacion->dirMatriz = $rs_empresa[0][6]; 
			$liquidacion->obligadoContabilidad =$rs_empresa[0][7]; 
			$liquidacion->tipoEmision = $rs_empresa[0][9];

			if ($rs_empresa[0][10]!=''){
				$liquidacion->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$liquidacion->padronMicroempresa=$rs_empresa[0][17];
			$liquidacion->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $liquidacion->numeroResolucion=$rs[0][0];
				}
			}
			$liquidacion->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT
							fc_id,
							liq_ambiente,
							fc_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							fc_secuencial,
							pr_tipo_identificacion,
							pr_nombre,
							pr_identificacion,
							pr_direccion,
							pr_telefono,
							pr_email,
							fc_subtotal,
							fc_total_descuento,
							fc_subtotal_iva,
							fc_valor_iva,
							fc_subtotal_cero,
							fc_subtotal_no_objeto,
							fc_subtotal_excento,
							fc_valor_ice,
							fc_valor_irbpnr,
							fc_propina,
							fc_total,
							fc_guia_remision,
							fc_comentario,
							sp_busca_parametro('MONEDASRI'::character varying, 'DOLAR'::character varying) AS fc_moneda,
							fc_total-fc_propina,
							est_padronrimpe,
							est_leyenda_rimpe,
							fc_correo_enviado
					FROM    v_del_datos_liquidacion_sri
					WHERE fc_id=".$liq_numero ;

		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_liquidacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_liquidacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_liquidacion = false;
          $rs_liquidacion_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_liquidacion[0][0])){
			$correo_enviado=$rs_liquidacion[0][31];
			$liquidacion->padronRimpe=$rs_liquidacion[0][29];
			$liquidacion->leyendaRimpe=$rs_liquidacion[0][30];
			$liquidacion->ambiente = $rs_liquidacion[0][1];
			$liquidacion->codDoc = $rs_liquidacion[0][2];
			$liquidacion->fechaEmision = $rs_liquidacion[0][3];
			$liquidacion->dirEstablecimiento = $rs_liquidacion[0][4];
			$liquidacion->establecimiento = $rs_liquidacion[0][5]; 
			$liquidacion->ptoEmision = $rs_liquidacion[0][6]; 
			$liquidacion->secuencial = $rs_liquidacion[0][7];
			$liquidacion->tipoIdentificacionProveedor = $rs_liquidacion[0][8];
			if($rs_liquidacion[0][25]<>''){
				$liquidacion->guiaRemision=$rs_liquidacion[0][25];
			}
			$liquidacion->razonSocialProveedor = $rs_liquidacion[0][9]; 
			$liquidacion->identificacionProveedor = $rs_liquidacion[0][10];
			$liquidacion->direccionProveedor= $rs_liquidacion[0][11];
			$liquidacion->totalSinImpuestos = $rs_liquidacion[0][14]; 
			$liquidacion->totalDescuento = $rs_liquidacion[0][15]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dfc_porcentaje_iva,
												ROUND(sum(dfc_cantidad*(dfc_precio_unitario-dfc_descuento)+dfc_valor_ice),2),
												round(sum(dfc_base_iva) *iva_porcentaje/100,2)
										FROM  del_detalle_factura_compra 
										inner join sri_tarifa_iva on iva_codigo=dfc_porcentaje_iva
										WHERE dfc_factura=".$liq_numero."
										group by dfc_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_ivas   === false){
						echo "Error al acceder a del_detalle_liquidacion";
					}else{
						while (!$rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $rs_ivas->fields[1];
							$totalImpuesto->valor = $rs_ivas->fields[2];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_ivas->MoveNext();
						}
						$rs_ivas->Close();
					}
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
			
				if($rs_liquidacion[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dfc_porcentaje_ice,
										sum(dfc_base_ice),
										sum(dfc_valor_ice) 
								FROM del_detalle_factura_compra 
								WHERE dfc_porcentaje_ice<>'0'
								and dfc_factura=".$liq_numero."
								group by dfc_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
				if($rs_liquidacion[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										 dfc_porcentaje_irbpnr,
										sum(dfc_base_irbpnr),
										sum(dfc_valor_irbpnr) 
								FROM del_detalle_factura_compra 
								WHERE dfc_porcentaje_irbpnr<>'0'
								and dfc_factura=".$liq_numero."
								group by dfc_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
			$liquidacion->totalConImpuesto = $total_Impuestos;
			$liquidacion->propina = $rs_liquidacion[0][23]; 
			$liquidacion->importeTotal = $rs_liquidacion[0][28]; 
			$liquidacion->moneda = $rs_liquidacion[0][27];
			$check_sql="SELECT
								dfc_factura,
								codigo,
								codigo_aux,
								fp_descripcion,
								dfc_cantidad,
								dfc_precio_unitario,
								dfc_descuento,
								valor_sin_impuesto,
								fp_iva,
								dfc_porcentaje_iva,
								iva_porcentaje,
								dfc_base_iva,
								dfc_valor_iva,
								fp_ice,
								dfc_porcentaje_ice,
								dfc_base_ice,
								ice_tarifa,
								dfc_valor_ice,
								fp_irbpnr,
								dfc_porcentaje_irbpnr,
								irbpnr_tarifa,
								dfc_base_irbpnr,
								dfc_valor_irbpnr,
								dfc_descripcion 
							FROM
								v_del_detalle_liquidacion_sri
							where dfc_factura=".$liq_numero."
							order by dfc_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_detalles   === false){
				echo "Error al acceder al detalle de la factura";
			}else{
				$detalles_factura = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$detalleFactura = new detalleFactura();
					$detalleFactura->codigoPrincipal = $rs_detalles->fields[1];
					$detalleFactura->codigoAuxiliar = $rs_detalles->fields[2]; 
					$detalleFactura->descripcion = $rs_detalles->fields[3]; 
					$detalleFactura->cantidad = $rs_detalles->fields[4]; 
					$detalleFactura->precioUnitario = $rs_detalles->fields[5]; 
					$detalleFactura->descuento = $rs_detalles->fields[6]; 
					$detalleFactura->precioTotalSinImpuesto = $rs_detalles->fields[7]; 
					if ($rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detalleFactura->detalleAdicional = $informacion_adicional;	
					}
						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $rs_detalles->fields[9]; 
						$impuesto->tarifa = $rs_detalles->fields[10]; 
						$impuesto->baseImponible = $rs_detalles->fields[11]; 
						$impuesto->valor = $rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[14]; 
							$impuesto->tarifa = $rs_detalles->fields[16];  
							$impuesto->baseImponible = $rs_detalles->fields[15]; 
							$impuesto->valor = $rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[19]; 
							$impuesto->tarifa = $rs_detalles->fields[20]; 
							$impuesto->baseImponible = $rs_detalles->fields[21]; 
							$impuesto->valor = $rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detalleFactura->impuestos = $impuestos_det;
					$detalles_factura[$i]=$detalleFactura;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$liquidacion->detalles = $detalles_factura;
			}
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_factura_compra a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_factura=".$liq_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos = false;
          $rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$rs_pagos->fields[1];
					$pago->total = $rs_pagos->fields[2];
					$pago->plazo = $rs_pagos->fields[3];
					$pago->unidadTiempo=$rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$rs_pagos->MoveNext();
				}
				$rs_pagos->Close();
			}	
			$liquidacion->pagos = $pagos;
			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_liquidacion[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_liquidacion[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_liquidacion[0][13]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_liquidacion[0][13];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_liquidacion[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $rs_liquidacion[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$liquidacion->infoAdicional = $camposAdicionales;


			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $liquidacion;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($liquidacion);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $liquidacion;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_liquidacion[0][1];
						$comprobantePendiente->codDoc = $rs_liquidacion[0][2];
						$comprobantePendiente->establecimiento = $rs_liquidacion[0][5];
						$comprobantePendiente->fechaEmision = $rs_liquidacion[0][3];
						$comprobantePendiente->ptoEmision = $rs_liquidacion[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_liquidacion[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}	
			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				 $update_sql =  "UPDATE del_factura_compra 
                                    SET liq_error_sri='" . $res->return->mensajes->mensaje . "',
                                        fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."'
                                    WHERE fc_id=" . $liq_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_factura_compra 
                                    SET liq_estado_sri='" . $res->return->estadoComprobante . "',
                                        fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."'
                                    WHERE fc_id=" . $liq_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($liquidacion,$rs_liquidacion[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 fc_autorizacion='".$res->return->numeroAutorizacion."',
									 liq_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 fc_correo_enviado='".$correo_enviado."'
								WHERE fc_id=".$liq_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($liquidacion,$rs_liquidacion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					
					$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='AUTORIZADO',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 fc_autorizacion='".$res->return->claveAcceso."',
									  fc_correo_enviado='".$correo_enviado."'
								WHERE fc_id=".$liq_numero ;
				}else{
					$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',	
									 liq_clave='".$res->return->claveAcceso."',   
									 liq_error_sri='".$res->return->mensajes->mensaje."'
								WHERE fc_id=".$liq_numero ;
				}
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_factura_compra 
								SET  liq_estado_sri='".$res->return->estadoComprobante."',
									 fc_archivo='".$this->crearNombreFicheroSinExtension($liquidacion) ."',
									 liq_clave='".$res->return->claveAcceso."',   
									 liq_error_sri='".$res->return->mensajes->mensaje."',
									 liq_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE fc_id=".$liq_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_nc ($nc_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($nc_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$notaCredito = new notaCredito();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT nc_empresa,nc_establecimiento FROM del_nota_credito WHERE nc_numero=".$nc_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$notaCredito->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Nota de Credito";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$notaCredito->configCorreo = $configCorreo;

			$notaCredito->ruc = $rs_empresa[0][0];
			$notaCredito->razonSocial = $rs_empresa[0][4];
			$notaCredito->nombreComercial = $rs_empresa[0][5]; 
			$notaCredito->dirMatriz = $rs_empresa[0][6]; 
			$notaCredito->obligadoContabilidad =$rs_empresa[0][7]; 
			$notaCredito->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$notaCredito->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$notaCredito->padronMicroempresa=$rs_empresa[0][17];
			$notaCredito->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $notaCredito->numeroResolucion=$rs[0][0];
				}
			}
			$notaCredito->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT
						nc_numero,
						nc_ambiente,
						nc_tipo_comprobante,
						fecha,
						est_direccion,
						est_codigo,
						pen_serie,
						nc_secuencial,
						cl_tipo_identificacion,
						cl_nombre,
						cl_identificacion,
						nc_cod_docmod,
						nc_secuencial_docmod,
						fecha_docmod,
						nc_subtotal,
						nc_total_descuento,
						nc_subtotal_iva,
						nc_valor_iva,
						nc_subtotal_cero,
						nc_subtotal_no_objeto,
						nc_subtotal_excento,
						nc_valor_ice,
						nc_valor_irbpnr,
						nc_total,
						nc_motivo,
						sp_busca_parametro('MONEDASRI'::character varying, 'DOLAR'::character varying) AS nc_moneda,
						cl_direccion,
						cl_email,
						cl_telefono,
						usuario,
						usu_cedula,
						usu_telefono,
						usu_email,
						usu_placa,
						usu_tipo_documento,
						est_padronrimpe,
						est_leyenda_rimpe,
						nc_correo_enviado
					FROM
						v_del_datos_nota_credito_sri
					WHERE nc_numero=".$nc_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_notaCredito = array();
      $rs_notacredito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_notaCredito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                        $rs_notacredito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_notaCredito = false;
          $rs_notaCredito_erro = $this->Db->ErrorMsg();
          $rs_notacredito = false;
          $rs_notacredito_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_notacredito[0][0])){
			$correo_enviado=$rs_notacredito[0][37];
			$notaCredito->padronRimpe=$rs_notacredito[0][35];
			$notaCredito->leyendaRimpe=$rs_notacredito[0][36];
			$notaCredito->ambiente = $rs_notacredito[0][1];
			$notaCredito->codDoc = $rs_notacredito[0][2];
			$notaCredito->fechaEmision = $rs_notacredito[0][3];
			$notaCredito->dirEstablecimiento = $rs_notacredito[0][4];
			$notaCredito->establecimiento = $rs_notacredito[0][5]; 
			$notaCredito->ptoEmision = $rs_notacredito[0][6]; 
			$notaCredito->secuencial = $rs_notacredito[0][7];
			$notaCredito->tipoIdentificacionComprador = $rs_notacredito[0][8];
			$notaCredito->razonSocialComprador = $rs_notacredito[0][9]; 
			$notaCredito->identificacionComprador = $rs_notacredito[0][10];
			$notaCredito->codDocModificado = $rs_notacredito[0][11];
			$notaCredito->numDocModificado = $rs_notacredito[0][12];
			$notaCredito->fechaEmisionDocSustento = $rs_notacredito[0][13];
			$notaCredito->totalSinImpuestos = $rs_notacredito[0][14]; 
			$notaCredito->totalDescuento = $rs_notacredito[0][15]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dnc_porcentaje_iva,
												ROUND(sum(dnc_cantidad*(dnc_precio_unitario-dnc_descuento)+dnc_valor_ice),2),
												round(sum(dnc_base_iva) *iva_porcentaje/100,2)
										FROM  del_detalle_nota_credito 
										inner join sri_tarifa_iva on iva_codigo=dnc_porcentaje_iva
										WHERE dnc_nota_credito=".$nc_numero."
										group by dnc_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_ivas   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $rs_ivas->fields[1];
							$totalImpuesto->valor = $rs_ivas->fields[2];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_ivas->MoveNext();
						}
						$rs_ivas->Close();
					}	
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}
				if($rs_notacredito[0][21]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dnc_porcentaje_ice,
										sum(dnc_base_ice),
										sum(dnc_valor_ice) 
								FROM del_detalle_nota_credito 
								WHERE dnc_porcentaje_ice<>'0' 
								and dnc_nota_credito=".$nc_numero."
								group by dnc_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaCredito";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
				if($rs_notacredito[0][22]>0){	
					$check_sql="SELECT  '5' as impuesto,
										dnc_porcentaje_irbpnr,
										sum(dnc_base_irbpnr),
										sum(dnc_valor_irbpnr) 
								FROM del_detalle_nota_credito 
								WHERE dnc_porcentaje_irbpnr<>'0' 
								and dnc_nota_credito=".$nc_numero ."
								group by dnc_porcentaje_irbpnr";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaCredito";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1];
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2]; 
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}
			$notaCredito->totalConImpuesto = $total_Impuestos;
			$notaCredito->valorModificacion = $rs_notacredito[0][23];
			$notaCredito->motivo = $rs_notacredito[0][24];
			$notaCredito->moneda = $rs_notacredito[0][25];

			$check_sql="SELECT
								dnc_nota_credito,
								dnc_producto,
								pro_codigo_aux,
								pro_descripcion,
								dnc_cantidad,
								dnc_precio_unitario,
								dnc_descuento,
								valor_sin_impuesto,
								pro_iva,
								dnc_porcentaje_iva,
								iva_porcentaje,
								dnc_base_iva,
								dnc_valor_iva,
								pro_ice,
								dnc_porcentaje_ice,
								dnc_base_ice,
								ice_tarifa,
								dnc_valor_ice,
								pro_irbpnr,
								dnc_porcentaje_irbpnr,
								irbpnr_tarifa,
								dnc_base_irbpnr,
								dnc_valor_irbpnr,
								dnc_descripcion 
							FROM
								v_del_detalle_nota_credito_sri
							where dnc_nota_credito=".$nc_numero."
							order by dnc_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_detalles   === false){
				echo "Error al acceder al detalle de la notaCredito";
			}else{
				$detalles_notaCredito = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$detallenotaCredito = new detalleNotaCredito();
					$detallenotaCredito->codigoInterno = $rs_detalles->fields[1];
					$detallenotaCredito->codigoAdicional = $rs_detalles->fields[2]; 
					$detallenotaCredito->descripcion = $rs_detalles->fields[3]; 
					$detallenotaCredito->cantidad = $rs_detalles->fields[4]; 
					$detallenotaCredito->precioUnitario = $rs_detalles->fields[5]; 
					$detallenotaCredito->descuento = $rs_detalles->fields[6]; 
					$detallenotaCredito->precioTotalSinImpuesto = $rs_detalles->fields[7]; 
					if ($rs_detalles->fields[23] <>""){
						$informacion_adicional=array();
						$detalle_adicional= new detalleAdicional();
						$detalle_adicional->nombre = 'Adicional';
						$detalle_adicional->valor = $rs_detalles->fields[23] ;
						$informacion_adicional[0]=$detalle_adicional;							 
						$detallenotaCredito->detallesAdicionales = $informacion_adicional;	
					}
						$impuestos_det=array();
						$j=0;
						$impuesto = new impuesto();
						$impuesto->codigo = $rs_detalles->fields[8];
						$impuesto->codigoPorcentaje = $rs_detalles->fields[9]; 
						$impuesto->tarifa = $rs_detalles->fields[10]; 
						$impuesto->baseImponible = $rs_detalles->fields[11]; 
						$impuesto->valor = $rs_detalles->fields[12];
						$impuestos_det[$j]=$impuesto;
						$j+=1;
						if($rs_detalles->fields[14]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[13];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[14]; 
							$impuesto->tarifa = $rs_detalles->fields[16];  
							$impuesto->baseImponible = $rs_detalles->fields[15]; 
							$impuesto->valor = $rs_detalles->fields[17];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
						if($rs_detalles->fields[19]<>'0'){
							$impuesto = new impuesto();
							$impuesto->codigo = $rs_detalles->fields[18];
							$impuesto->codigoPorcentaje = $rs_detalles->fields[19]; 
							$impuesto->tarifa = $rs_detalles->fields[20]; 
							$impuesto->baseImponible = $rs_detalles->fields[21]; 
							$impuesto->valor = $rs_detalles->fields[22];
							$impuestos_det[$j]=$impuesto;
							$j+=1;
						}
					$detallenotaCredito->impuestos = $impuestos_det;
					$detalles_notaCredito[$i]=$detallenotaCredito;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$notaCredito->detalles = $detalles_notaCredito;
			}

			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][16]=='S'){
				if($rs_notacredito[0][6]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Punto Emision";
					$campoAdicional->valor = $rs_notacredito[0][6];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][29]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Razon Social";
					$campoAdicional->valor = $rs_notacredito[0][29];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][30]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Ruc";
					$campoAdicional->valor = $rs_notacredito[0][30];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][31]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono Socio";
					$campoAdicional->valor = $rs_notacredito[0][31];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][33]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Placa";
					$campoAdicional->valor = $rs_notacredito[0][33];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if($rs_notacredito[0][34]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Contribuyente";
					$campoAdicional->valor = $rs_notacredito[0][34];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

			}


			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($rs_notacredito[0][28]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_notacredito[0][28];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_notacredito[0][27]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_notacredito[0][27];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($rs_notacredito[0][26]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $rs_notacredito[0][26];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			$notaCredito->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $notaCredito;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($notaCredito);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $notaCredito;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_notacredito[0][1];
						$comprobantePendiente->codDoc = $rs_notacredito[0][2];
						$comprobantePendiente->establecimiento = $rs_notacredito[0][5];
						$comprobantePendiente->fechaEmision = $rs_notacredito[0][3];
						$comprobantePendiente->ptoEmision = $rs_notacredito[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_notacredito[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_nota_credito 
								SET nc_error_sri='" . $res->return->mensajes->mensaje . "',
									nc_archivo='".$this->crearNombreFicheroSinExtension($notaCredito)."'
								WHERE nc_numero=" . $nc_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_credito 
								 SET nc_estado_sri='" . $res->return->estadoComprobante . "',
									 nc_archivo='".$this->crearNombreFicheroSinExtension($notaCredito)."'
								 WHERE nc_numero=" . $nc_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaCredito,$rs_notacredito[0][27])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
				
				$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_autorizacion='".$res->return->numeroAutorizacion."',
									 nc_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 nc_error_sri='',
									 nc_correo_enviado='".$correo_enviado."'
								WHERE nc_numero=".$nc_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaCredito,$rs_notacredito[0][27])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='AUTORIZADO',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_autorizacion='".$res->return->claveAcceso."',
									 nc_correo_enviado='".$correo_enviado."'
								WHERE nc_numero=".$nc_numero ;
				}else{
					$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nc_numero=".$nc_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_nota_credito 
								SET  nc_estado_sri='".$res->return->estadoComprobante."',
									 nc_archivo='" . $this->crearNombreFicheroSinExtension($notaCredito) . "',
									 nc_clave='".$res->return->claveAcceso."',   
									 nc_error_sri='".$res->return->mensajes->mensaje."',
									 nc_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE nc_numero=".$nc_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_guia	($gr_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($gr_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$guiaRemision = new guiaRemision();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','D:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT gr_empresa,gr_establecimiento FROM del_guia_remision WHERE gr_numero=".$gr_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$guiaRemision->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Guia de Remision";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$guiaRemision->configCorreo = $configCorreo;

			$guiaRemision->ruc = $rs_empresa[0][0];
			$guiaRemision->razonSocial = $rs_empresa[0][4];
			$guiaRemision->nombreComercial = $rs_empresa[0][5]; 
			$guiaRemision->dirMatriz = $rs_empresa[0][6]; 
			$guiaRemision->obligadoContabilidad =$rs_empresa[0][7]; 
			$guiaRemision->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$guiaRemision->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$guiaRemision->padronMicroempresa=$rs_empresa[0][17];
			$guiaRemision->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $guiaRemision->numeroResolucion=$rs[0][0];
				}
			}
			$guiaRemision->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT  gr_numero,
							gr_ambiente,
							gr_tipo_comprobante,
							est_codigo,
							pen_serie,
							gr_secuencial,
							est_direccion,
							gr_direccion_partida,
							tr_nombre,
							tr_tipo_identificacion,
							tr_identificacion,
							fecha_inicio,
							fecha_fin,
							tr_placa,
							tr_email,
							est_padronrimpe,
							est_leyenda_rimpe,
							gr_correo_enviado
					FROM v_del_datos_guia_remision
					WHERE gr_numero=".$gr_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_guiaRemision = array();
      $rs_guiaremision = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_guiaRemision[$SCy] [$SCx] = $SCrx->fields[$SCx];
                        $rs_guiaremision[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_guiaRemision = false;
          $rs_guiaRemision_erro = $this->Db->ErrorMsg();
          $rs_guiaremision = false;
          $rs_guiaremision_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_guiaremision[0][0])){
			$correo_enviado=$rs_guiaremision[0][17];
			$guiaRemision->padronRimpe=$rs_guiaremision[0][15];
			$guiaRemision->leyendaRimpe=$rs_guiaremision[0][16];
			$guiaRemision->ambiente = $rs_guiaremision[0][1];
			$guiaRemision->codDoc = $rs_guiaremision[0][2];
			$guiaRemision->establecimiento = $rs_guiaremision[0][3];
			$guiaRemision->ptoEmision = $rs_guiaremision[0][4]; 
			$guiaRemision->secuencial = $rs_guiaremision[0][5];
			$guiaRemision->dirEstablecimiento = $rs_guiaremision[0][6];
			$guiaRemision->dirPartida = $rs_guiaremision[0][7];
			$guiaRemision->razonSocialTransportista = $rs_guiaremision[0][8];
			$guiaRemision->tipoIdentificacionTransportista = $rs_guiaremision[0][9];
			$guiaRemision->rucTransportista =$rs_guiaremision[0][10];
			$guiaRemision->rise = "RISE";
			$guiaRemision->fechaIniTransporte = $rs_guiaremision[0][11];
			$guiaRemision->fechaFinTransporte = $rs_guiaremision[0][12];
			$guiaRemision->placa = $rs_guiaremision[0][13];

			$check_sql="SELECT dg_guia,
								dg_identificacion_destinatario,
								dg_nombre_destinatario,
								dg_direccion_destino,
								dg_motivo_traslado,
								dg_documento_aduanero,
								coalesce(est_codigo,''),
								dg_ruta,
								dg_coddoc_sustento,
								dg_documento_sustento,
								dg_autorizacion_sustento,
								coalesce(dg_fecha_sustento,''),
								dg_id
							FROM v_del_destinatario_guia_sri
						where dg_guia=".$gr_numero."
						order by dg_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_destinatarios = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_destinatarios = false;
          $rs_destinatarios_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_destinatarios   === false){
				echo "Error al acceder al detalle de la guiaRemision";
			}else{
				$destinatarios_guiaRemision = array();
				$i=0;
				while (!$rs_destinatarios->EOF){
					$destinatario = new Destinatario();
					$destinatario->identificacionDestinatario = $rs_destinatarios->fields[1];
					$destinatario->razonSocialDestinatario = $rs_destinatarios->fields[2];
					$destinatario->dirDestinatario =$rs_destinatarios->fields[3];
					$destinatario->motivoTraslado = $rs_destinatarios->fields[4];
					$destinatario->docAduaneroUnico = $rs_destinatarios->fields[5];
					$destinatario->codEstabDestino = $rs_destinatarios->fields[6];
					$destinatario->ruta =$rs_destinatarios->fields[7];
					$destinatario->codDocSustento = $rs_destinatarios->fields[8];
					$destinatario->numDocSustento = $rs_destinatarios->fields[9];
					$destinatario->numAutDocSustento = $rs_destinatarios->fields[10];
					$destinatario->fechaEmisionDocSustento = $rs_destinatarios->fields[11];

					$check_sql="SELECT 
										dgd_destinatario,
										pro_codigo,
										pro_codigo_aux,
										pro_descripcion,
										dgd_cantidad 
								FROM v_del_productos_destinatario_guia_sri
								WHERE dgd_destinatario=".$rs_destinatarios->fields[12]."
								order by dgd_id";

					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
  

					if ($rs_detalles   === false){
						echo "Error al acceder al detalle de la guiaRemision";
					}else{
						$detalles = array();
						$j=0;
						while (!$rs_detalles->EOF){
							$detalle = new DetalleGuiaRemision();
							$detalle->codigoInterno = $rs_detalles->fields[1];
							$detalle->codigoAdicional = $rs_detalles->fields[2];
							$detalle->descripcion = $rs_detalles->fields[3];
							$detalle->cantidad = $rs_detalles->fields[4];
							$detalles[$j] = $detalle;
							$j+=1;
							$rs_detalles->MoveNext();
						}	
						$destinatario->detalles = $detalles;
					}
					$destinatarios_guiaRemision[$i]=$destinatario;
					$rs_destinatarios->MoveNext();
					$i+=1;
				}
				$rs_destinatarios->Close();
				$guiaRemision->destinatarios = $destinatarios_guiaRemision;
			}

			$camposAdicionales = array();
			$campoAdicional = new campoAdicional();
			$campoAdicional->nombre = "Email";
			$campoAdicional->valor = $rs_guiaremision[0][14];
			$camposAdicionales[0] = $campoAdicional;
			$campoAdicional = new campoAdicional();
			$campoAdicional->nombre = "Direccion";
			$campoAdicional->valor = $rs_empresa[0][6];
			$camposAdicionales[1] = $campoAdicional;
			$guiaRemision->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $guiaRemision;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($guiaRemision);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $guiaRemision;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_guiaremision[0][1];
						$comprobantePendiente->codDoc = $rs_guiaremision[0][2];
						$comprobantePendiente->establecimiento = $rs_guiaremision[0][5];
						$comprobantePendiente->fechaEmision = $rs_guiaremision[0][3];
						$comprobantePendiente->ptoEmision = $rs_guiaremision[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_guiaremision[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_guia_remision 
                                    SET gr_error_sri='" . $res->return->mensajes->mensaje . "',
                                        gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' 
                                    WHERE gr_numero=" . $gr_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_guia_remision 
                                    SET gr_estado_sri='" . $res->return->estadoComprobante . "',
                                        gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' 
                                    WHERE gr_numero=" . $gr_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($guiaRemision,$rs_guiaremision[0][14])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."' ,
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_autorizacion='".$res->return->numeroAutorizacion."',
									 gr_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 gr_error_sri='',
									 gr_correo_enviado='".$correo_enviado."'
								WHERE gr_numero=".$gr_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($guiaRemision,$rs_guiaremision[0][14])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='AUTORIZADO',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."', 
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_autorizacion='".$res->return->claveAcceso."',
									 gr_correo_enviado='".$correo_enviado."'
								WHERE gr_numero=".$gr_numero ;
				}else{
					$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."',
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_error_sri='".$res->return->mensajes->mensaje."'
								WHERE gr_numero=".$gr_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_guia_remision 
								SET  gr_estado_sri='".$res->return->estadoComprobante."',
									 gr_archivo='".$this->crearNombreFicheroSinExtension($guiaRemision)."',
									 gr_clave='".$res->return->claveAcceso."',   
									 gr_error_sri='".$res->return->mensajes->mensaje."',
									 gr_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE gr_numero=".$gr_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_retencion ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($ret_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado="";
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$retencion = new comprobanteRetencion();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT ret_empresa,ret_establecimiento FROM del_retencion WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$retencion->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Retencion";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado =$rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$retencion->configCorreo = $configCorreo;

			$retencion->ruc = $rs_empresa[0][0];
			$retencion->razonSocial = $rs_empresa[0][4];
			$retencion->nombreComercial = $rs_empresa[0][5]; 
			$retencion->dirMatriz = $rs_empresa[0][6]; 
			$retencion->obligadoContabilidad =$rs_empresa[0][7]; 
			$retencion->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$retencion->contribuyenteEspecial = $rs_empresa[0][10];
			}	
			$retencion->padronMicroempresa=$rs_empresa[0][17];
			$retencion->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $retencion->numeroResolucion=$rs[0][0];
				}
			}
			$retencion->artesanoCalificado=$rs_empresa[0][19];

		}
		$check_sql="SELECT	ret_numero,
							ret_ambiente,
							ret_tipo_comprobante,
							fecha,
							est_codigo,
							pen_serie,
							ret_secuencial,
							est_direccion,
							pr_tipo_identificacion,
							pr_nombre,
							pr_identificacion,
							ret_periodo_fiscal, 
							pr_direccion,
							pr_email,
							pr_telefono,
							ret_comentario,
							est_padronrimpe,
							est_leyenda_rimpe,
							ret_correo_enviado
						FROM
							v_del_datos_retencion_sri
						WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_retencion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_retencion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_retencion = false;
          $rs_retencion_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_retencion[0][0])){
			$correo_enviado=$rs_retencion[0][18];
			$retencion->padronRimpe=$rs_retencion[0][16];
			$retencion->leyendaRimpe=$rs_retencion[0][17];
			$retencion->ambiente = $rs_retencion[0][1];
			$retencion->codDoc = $rs_retencion[0][2];
			$retencion->fechaEmision = $rs_retencion[0][3];
			$retencion->establecimiento = $rs_retencion[0][4];
			$retencion->ptoEmision = $rs_retencion[0][5];
			$retencion->secuencial = $rs_retencion[0][6];
			$retencion->dirEstablecimiento = $rs_retencion[0][7];
			$retencion->tipoIdentificacionSujetoRetenido = $rs_retencion[0][8];
			$retencion->razonSocialSujetoRetenido = $rs_retencion[0][9];
			$retencion->identificacionSujetoRetenido = $rs_retencion[0][10];
			$retencion->periodoFiscal = $rs_retencion[0][11];
			$camposAdicionales = array();
			$i=0;

			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if ($rs_retencion[0][14]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_retencion[0][14];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if ($rs_retencion[0][13]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_retencion[0][13];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	

			if ($rs_retencion[0][12]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $rs_retencion[0][12];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	

			if ($rs_retencion[0][15]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Comentario";
				$campoAdicional->valor = $rs_retencion[0][15];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}	
			$retencion->infoAdicional = $camposAdicionales;

			$check_sql="SELECT	dr_retencion,
								dr_impuesto,
								pri_codigo,
								dr_base_imponible,
								dr_porcentaje_retencion,
								dr_valor_retenido,
								dr_cod_doc_sustento,
								doc_sustento,
								fecha 
							FROM
								v_del_detalle_retencion_sri
							where dr_retencion=".$ret_numero."
							order by dr_id";
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 

			if ($rs_detalles  === false){
				echo "error al acceder a los detalles";
			}else{
				$impuestos = array();
				$i=0;
				while (!$rs_detalles->EOF){
					$impuesto = new impuestoComprobanteRetencion();
					$impuesto->codigo = $rs_detalles->fields[1];
					$impuesto->codigoRetencion = $rs_detalles->fields[2];
					$impuesto->baseImponible = $rs_detalles->fields[3];
					$impuesto->porcentajeRetener = $rs_detalles->fields[4];
					$impuesto->valorRetenido = $rs_detalles->fields[5];
					$impuesto->codDocSustento = $rs_detalles->fields[6];
					$impuesto->numDocSustento = $rs_detalles->fields[7];
					$impuesto->fechaEmisionDocSustento = $rs_detalles->fields[8];
					$impuestos[$i] = $impuesto;
					$rs_detalles->MoveNext();
					$i+=1;
				}
				$rs_detalles->Close();
				$retencion->impuestos = $impuestos;
			}	
			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $retencion;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($retencion);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}

			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $retencion;
					$procesarComprobante->envioSRI = true; 
					$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo "<br>";
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$retencionPendiente = new \comprobantePendiente();
						$retencionPendiente->configAplicacion = $configApp;
						$retencionPendiente->configCorreo = $configCorreo;
						$retencionPendiente->ambiente = $rs_retencion[0][1];
						$retencionPendiente->codDoc = $rs_retencion[0][2];
						$retencionPendiente->establecimiento = $rs_retencion[0][4];
						$retencionPendiente->fechaEmision = $rs_retencion[0][3];
						$retencionPendiente->ptoEmision = $rs_retencion[0][5];
						$retencionPendiente->ruc = $rs_empresa[0][0];
						$retencionPendiente->secuencial = $rs_retencion[0][6];
						$retencionPendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $retencionPendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}	
			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE  del_retencion
								SET  ret_error_sri='" .$res->return->mensajes->mensaje . "',
									ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
								WHERE ret_numero=" . $ret_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
					$update_sql =  "UPDATE  del_retencion
									SET ret_estado_sri='" . $res->return->estadoComprobante . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}
			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				
				$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_autorizacion='".$res->return->numeroAutorizacion."',
									 ret_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 ret_correo_enviado='".$correo_enviado."'
								WHERE ret_numero=".$ret_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='AUTORIZADO',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_autorizacion='".$res->return->claveAcceso."',
									 ret_correo_enviado='".$correo_enviado."'
								WHERE ret_numero=".$ret_numero ;
				}else{
					$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_error_sri='".$res->return->mensajes->mensaje."'
								WHERE ret_numero=".$ret_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_retencion 
								SET  ret_estado_sri='".$res->return->estadoComprobante."',
									 ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
									 ret_clave='".$res->return->claveAcceso."',   
									 ret_error_sri='".$res->return->mensajes->mensaje."',
									 ret_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE ret_numero=".$ret_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_retencion_dos ($ret_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($ret_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado="";
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$retencion = new comprobanteRetencionDos();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT ret_empresa,ret_establecimiento FROM del_retencion WHERE ret_numero=".$ret_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$check_sql="SELECT	ret_numero,
						ret_ambiente,
						ret_tipo_comprobante,
						fecha,
						est_codigo,
						pen_serie,
						ret_secuencial,
						est_direccion,
						pr_tipo_identificacion,
						pr_nombre,
						pr_identificacion,
						ret_periodo_fiscal, 
						pr_direccion,
						pr_email,
						pr_telefono,
						ret_comentario,
						est_padronrimpe,
						est_leyenda_rimpe,
						ret_correo_enviado,
						pr_tipo_persona,
						parte_relacionada
					FROM
						v_del_datos_retencion_sri
					WHERE ret_numero=".$ret_numero;
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_retencion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_retencion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_retencion = false;
          $rs_retencion_erro = $this->Db->ErrorMsg();
      } 


			if (isset($rs_retencion[0][0])){
				$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
				$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
				$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
				$configApp->passFirma = $rs_empresa[0][3];
				$configApp->dirIreport=$dir_ireport;
				$retencion->configAplicacion = $configApp;

				$configCorreo->correoAsunto = "Nueva Retencion V2";
				$configCorreo->correoHost = $rs_empresa[0][12];
				$configCorreo->correoPass = $rs_empresa[0][13];
				$configCorreo->correoPort = $rs_empresa[0][14];
				$configCorreo->correoRemitente = $rs_empresa[0][15];
				$configCorreo->sslHabilitado = $rs_empresa[0][21];
				$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
				$retencion->configCorreo = $configCorreo;

				$retencion->ambiente = $rs_retencion[0][1];
				$retencion->tipoEmision = $rs_empresa[0][9];
				$retencion->razonSocial = $rs_empresa[0][4];
				$retencion->nombreComercial = $rs_empresa[0][5]; 
				$retencion->ruc = $rs_empresa[0][0];
				$retencion->codDoc = $rs_retencion[0][2];
				$retencion->establecimiento = $rs_retencion[0][4];
				$retencion->ptoEmision = $rs_retencion[0][5];
				$retencion->secuencial = $rs_retencion[0][6];
				$retencion->dirMatriz = $rs_empresa[0][6]; 
				
				$retencion->padronMicroempresa=$rs_empresa[0][17];
				$retencion->padronAgenteRetencion=$rs_empresa[0][18];
				if($rs_empresa[0][18]=='S'){
					$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

					if (isset($rs[0][0])){
					$retencion->numeroResolucion=$rs[0][0];
					}
				}
				$retencion->artesanoCalificado=$rs_empresa[0][19];
				$retencion->padronRimpe=$rs_retencion[0][16];
				$retencion->leyendaRimpe=$rs_retencion[0][17];
		
				$retencion->fechaEmision = $rs_retencion[0][3];
				$retencion->dirEstablecimiento = $rs_retencion[0][7];
				if ($rs_empresa[0][10]!=''){
					$retencion->contribuyenteEspecial = $rs_empresa[0][10];
				}
				$retencion->obligadoContabilidad =$rs_empresa[0][7]; 
				$retencion->tipoIdentificacionSujetoRetenido = $rs_retencion[0][8];
				if($rs_retencion[0][8]=='06' or $rs_retencion[0][8]=='08' ){
					$retencion->tipoSujetoRetenido=$rs_retencion[0][19];
				}
				$retencion->parteRel=$rs_retencion[0][20];
				$retencion->razonSocialSujetoRetenido = $rs_retencion[0][9];
				$retencion->identificacionSujetoRetenido = $rs_retencion[0][10];
				$retencion->periodoFiscal = $rs_retencion[0][11];
				$correo_enviado=$rs_retencion[0][18];
				$select_sql="SELECT
									sr_id,
									sr_cod_sustento,
									sr_cod_docsustento,
									sr_num_doc_sustento,
									sr_fechaemision,
									sr_fecha_registro_contable,
									sr_autorizacion,
									sr_pago_loc_ext,
									sr_tipo_regimen,
									sr_pais_pago,
									sr_aplica_doble_trib,
									sr_pago_sujeto_retencion_nc,
									sr_pago_reg_fis,
									sr_total_reembolsos,
									sr_total_baseimponible_reembolsos,
									sr_total_impuesto_reeemboso,
									sr_total_sin_impuestos,
									sr_importe_total 
								FROM
									v_del_datos_sustento_retencion_sri
								WHERE
									sr_retencion=".$ret_numero;
				 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_sustentos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_sustentos = false;
          $rs_sustentos_erro = $this->Db->ErrorMsg();
      } 

				$w_sustentos = array();
				$i=0;
				if ($rs_sustentos  === false){
					echo "error al acceder a los sustentos";
				}else{
					while (!$rs_sustentos->EOF){
						$w_sustento = new sustentoRetencion();
						$w_sustento->codSustento=$rs_sustentos->fields[1];
						$w_sustento->codDocSustento=$rs_sustentos->fields[2];
						$w_sustento->numDocSustento=$rs_sustentos->fields[3];
						$w_sustento->fechaEmisionDocSustento=$rs_sustentos->fields[4];
						$w_sustento->fechaRegistroContable=$rs_sustentos->fields[5];
						$w_sustento->numAutDocSustento=$rs_sustentos->fields[6];
						$w_sustento->pagoLocExt=$rs_sustentos->fields[7];
						if($rs_sustentos->fields[7]=='02'){
							$w_sustento->tipoRegi=$rs_sustentos->fields[8];
							$w_sustento->paisEfecPago=$rs_sustentos->fields[9];
							$w_sustento->aplicConvDobTrib=$rs_sustentos->fields[10];
							$w_sustento->pagExtSujRetNorLeg=$rs_sustentos->fields[11];
							$w_sustento->pagoRegFis=$rs_sustentos->fields[12];
						}
						if($rs_sustentos->fields[2]=='41'){
							$w_sustento->totalComprobantesReembolso=$rs_sustentos->fields[13];
							$w_sustento->totalBaseImponibleReembolso=$rs_sustentos->fields[14];
							$w_sustento->totalImpuestoReembolso=$rs_sustentos->fields[15];
						}
							
						$w_sustento->totalSinImpuestos=$rs_sustentos->fields[16];
						$w_sustento->importeTotal=$rs_sustentos->fields[17];
						
						$w_impuestos_sustento = array();
						$j=0;
						$select_sql="SELECT 
										isr_cod_impuesto,
										isr_cod_porcentaje,
										isr_base_imponible,
										ti_tarifa,
										isr_valor_impuesto 
									FROM v_del_impuestos_sustento_retencion_sri 
									WHERE isr_doc_sustento=".$rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuestos_sustentos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuestos_sustentos = false;
          $rs_impuestos_sustentos_erro = $this->Db->ErrorMsg();
      } 

						if ($rs_impuestos_sustentos  === false){
							echo "error al acceder a los impuestos del sustento";
						}else{
							while (!$rs_impuestos_sustentos->EOF) {
							
								$w_impuesto_sustento = new impuestoDocSustento();
								$w_impuesto_sustento->codImpuestoDocSustento = $rs_impuestos_sustentos->fields[0];
								$w_impuesto_sustento->codigoPorcentaje = $rs_impuestos_sustentos->fields[1];
								$w_impuesto_sustento->baseImponible = $rs_impuestos_sustentos->fields[2];
								$w_impuesto_sustento->tarifa = $rs_impuestos_sustentos->fields[3];
								$w_impuesto_sustento->valorImpuesto = $rs_impuestos_sustentos->fields[4];

								$w_impuestos_sustento[$j]=$w_impuesto_sustento;
								$rs_impuestos_sustentos->MoveNext();
								$j+=1;
							}	
						}
						$w_sustento->impuestosDocSustento=$w_impuestos_sustento;

						$w_retenciones = array();
						$j=0;
						$select_sql="SELECT 
										codigo
										,codigo_retencion
										,irs_base_imponible
										,irs_porcentaje_retencion
										,irs_valor_retenido 
									FROM v_del_datos_retencion_sustento_sri 
									WHERE irs_sustento=".$rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_retenciones = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_retenciones = false;
          $rs_retenciones_erro = $this->Db->ErrorMsg();
      } 

						if($rs_retenciones ===false){
							echo "error al acceder a las retenciones del sustento";
						}else{
							while (!$rs_retenciones->EOF) {
								$w_retencion_sustento = new impuestoComprobanteRetencionDos();
								$w_retencion_sustento->codigo = $rs_retenciones->fields[0];
								$w_retencion_sustento->codigoRetencion = $rs_retenciones->fields[1];
								$w_retencion_sustento->baseImponible = $rs_retenciones->fields[2];
								$w_retencion_sustento->porcentajeRetener = $rs_retenciones->fields[3];
								$w_retencion_sustento->valorRetenido = $rs_retenciones->fields[4];
								$w_retenciones[$j] = $w_retencion_sustento; 
								$rs_retenciones->MoveNext();
								$j+=1;
							}
						}
						$w_sustento->retenciones=$w_retenciones;

						$w_pagos_sustento = array();
						$j=0;
						$select_sql="SELECT 
										psr_forma_pago,
										psr_valor_pago 
									FROM del_forma_pago_sustento_retencion 
									WHERE psr_sustento_retencion=".$rs_sustentos->fields[0];
						 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos_sustento = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos_sustento = false;
          $rs_pagos_sustento_erro = $this->Db->ErrorMsg();
      } 

						if($rs_pagos_sustento ===false){
							echo "error al acceder a los pagos del sustento";
						}else{
							while (!$rs_pagos_sustento->EOF) {
							
								$w_pago= new pagoSustento();
								$w_pago->formapago=$rs_pagos_sustento->fields[0];
								$w_pago->total=$rs_pagos_sustento->fields[1];
								$rs_pagos_sustento->MoveNext();
								$w_pagos_sustento[$j]=$w_pago;
								$j+=1;
							}
						}	
						$w_sustento->pagos=$w_pagos_sustento;
						
						$w_sustentos[$i]=$w_sustento;
						$rs_sustentos->MoveNext();
						$i+=1;
					}	
				}
				$retencion->docsSustento=$w_sustentos;
				
				$camposAdicionales = array();
				$i=0;
				if($rs_empresa[0][19]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "artesanoCalificado";
					$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}
				if ($rs_retencion[0][14]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Telefono";
					$campoAdicional->valor = $rs_retencion[0][14];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}

				if ($rs_retencion[0][13]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Email";
					$campoAdicional->valor = $rs_retencion[0][13];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}	

				if ($rs_retencion[0][12]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Direccion";
					$campoAdicional->valor = $rs_retencion[0][12];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
				}	

				if ($rs_retencion[0][15]<>''){
					$campoAdicional = new campoAdicional();
					$campoAdicional->nombre = "Comentario";
					$campoAdicional->valor = $rs_retencion[0][15];
					$camposAdicionales[$i] = $campoAdicional;
					$i+=1;
					}	
				$retencion->infoAdicional = $camposAdicionales;
				if($i_log){
					var_dump($retencion);
					echo '<br>';
				}
					
				$procesarComprobante = new procesarComprobante();
				$procesarComprobante->comprobante = $retencion;
				$procesarComprobante->envioSRI = false; 
				$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
				if($i_log){
					var_dump($res);
					echo '<br>';
				}
				if($i_autorizar=='S'){
					if ($res->return->estadoComprobante == "FIRMADO") {
						$procesarComprobante = new procesarComprobante();
						$procesarComprobante->comprobante = $retencion;
						$procesarComprobante->envioSRI = true; 
						$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
						if($i_log){
							var_dump($res);
							echo "<br>";
						}	
					}else{
						if($res->return->estadoComprobante == "PROCESANDOSE"){
							$retencionPendiente = new \comprobantePendiente();
							$retencionPendiente->configAplicacion = $configApp;
							$retencionPendiente->configCorreo = $configCorreo;
							$retencionPendiente->ambiente = $rs_retencion[0][1];
							$retencionPendiente->codDoc = $rs_retencion[0][2];
							$retencionPendiente->establecimiento = $rs_retencion[0][4];
							$retencionPendiente->fechaEmision = $rs_retencion[0][3];
							$retencionPendiente->ptoEmision = $rs_retencion[0][5];
							$retencionPendiente->ruc = $rs_empresa[0][0];
							$retencionPendiente->secuencial = $rs_retencion[0][6];
							$retencionPendiente->tipoEmision = $rs_empresa[0][9];
							$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
							$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
							$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
							$procesarComprobantePendiente = new \procesarComprobantePendiente();
							$procesarComprobantePendiente->comprobantePendiente = $retencionPendiente;
							$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
							if ($res->return->estadoComprobante == "PROCESANDOSE") {
								$res->return->estadoComprobante = "ERROR";
							}
						}	
					}
				}	
				$mensaje_final=	$res->return->estadoComprobante."<br>";
				if ($res->return->estadoComprobante == 'ERROR'){
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
					$update_sql =  "UPDATE  del_retencion
									SET ret_error_sri='" .$res->return->mensajes->mensaje . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}

				if ($res->return->estadoComprobante == "FIRMADO") {
					$update_sql =  "UPDATE  del_retencion
									SET ret_estado_sri='" . $res->return->estadoComprobante . "',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."'
									WHERE ret_numero=" . $ret_numero;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}
				if($res->return->estadoComprobante=='AUTORIZADO'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					
					$update_sql = "UPDATE del_retencion 
									SET ret_estado_sri='".$res->return->estadoComprobante."',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
										ret_clave='".$res->return->claveAcceso."',   
										ret_autorizacion='".$res->return->numeroAutorizacion."',
										ret_fecha_autorizacion='".$res->return->fechaAutorizacion."',
										ret_correo_enviado='".$correo_enviado."'
									WHERE ret_numero=".$ret_numero ;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				}
				if($res->return->estadoComprobante=='DEVUELTA'){
					if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
						if($correo_enviado=="NO"){
							if($this->enviarCorreo($retencion,$rs_retencion[0][13])){
								$correo_enviado="SI";
							}else{
								$correo_enviado="NO";
							}
						}
						$update_sql = "UPDATE del_retencion 
										SET ret_estado_sri='AUTORIZADO',
											ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
											ret_clave='".$res->return->claveAcceso."',   
											ret_autorizacion='".$res->return->claveAcceso."',
											ret_correo_enviado='".$correo_enviado."'
										WHERE ret_numero=".$ret_numero ;
					}else{
						$update_sql = "UPDATE del_retencion 
										SET ret_estado_sri='".$res->return->estadoComprobante."',
											ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
											ret_clave='".$res->return->claveAcceso."',   
											ret_error_sri='".$res->return->mensajes->mensaje."'
										WHERE ret_numero=".$ret_numero ;
					}


					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				if($res->return->estadoComprobante=='NO AUTORIZADO'){
					$update_sql = "UPDATE del_retencion 
									SET ret_estado_sri='".$res->return->estadoComprobante."',
										ret_archivo='".$this->crearNombreFicheroSinExtension($retencion)."',
										ret_clave='".$res->return->claveAcceso."',   
										ret_error_sri='".$res->return->mensajes->mensaje."',
										ret_fecha_autorizacion='".$res->return->fechaAutorizacion."'
									WHERE ret_numero=".$ret_numero ;
					
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
					$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				}
				return $mensaje_final;
				
			}
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function autorizar_nd ($nd_numero,$i_autorizar,$i_log=false){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		if($i_log){
					var_dump($nd_numero);
					echo '<br>';
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$correo_enviado='';
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$configApp = new \configAplicacion();
		$configCorreo = new \configCorreo();
		$notaDebito = new notaDebito();
		$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir=$rs[0][0];
		}
		$check_sql = "SELECT sp_busca_parametro ('RUTA_IREPORT','D:/Desarrollo/IReport')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $dir_ireport=$rs[0][0];
		}
		$check_sql="SELECT nd_empresa,nd_establecimiento FROM del_nota_debito WHERE nd_numero=".$nd_numero;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
			$var_empresa=$rs[0][0];
			$var_establecimiento=$rs[0][1];	
		}
		$check_sql = "SELECT 
							emp_ruc,
							emp_logo,
							emp_firma,
							emp_clave_firma,
							emp_razon_social,
							emp_nombre_comercial,
							emp_direccion_matriz,
							emp_obligado_contabilidad,
							emp_ambiente_sri,
							emp_tipo_emision,
							emp_contribuyente_especial,
							fil_id,
							csmtp_servidor,
							csmtp_contrasenia,
							csmtp_puerto,
							csmtp_usuario,
							emp_es_op_transporte,
							emp_regimen_especial,
							emp_agente_retencion,
							emp_calificacion_artesanal,
							csmtp_ruta_imagenes,
							csmtp_tipo_conexion
						FROM
							v_del_datos_empresa_sri
						WHERE emp_ruc='".$var_empresa."'
						AND est_id=".$var_establecimiento.";";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_empresa[0][0])){
			$configApp->dirAutorizados = $dir.$rs_empresa[0][0]."/documentos/";
			$configApp->dirLogo =  $dir.$rs_empresa[0][0]."/logo/".$rs_empresa[0][1];
			$configApp->dirFirma =  $dir.$rs_empresa[0][0]."/firma/".$rs_empresa[0][2];
			$configApp->passFirma = $rs_empresa[0][3];
			$configApp->dirIreport=$dir_ireport;
			$notaDebito->configAplicacion = $configApp;

			$configCorreo->correoAsunto = "Nueva Nota de Debito";
			$configCorreo->correoHost = $rs_empresa[0][12];
			$configCorreo->correoPass = $rs_empresa[0][13];
			$configCorreo->correoPort = $rs_empresa[0][14];
			$configCorreo->correoRemitente = $rs_empresa[0][15];
			$configCorreo->sslHabilitado = $rs_empresa[0][21];
			$configCorreo->rutaLogo=$rs_empresa[0][20].$rs_empresa[0][0].'/'.$rs_empresa[0][1];
			$notaDebito->configCorreo = $configCorreo;

			$notaDebito->ruc = $rs_empresa[0][0];
			$notaDebito->razonSocial = $rs_empresa[0][4];
			$notaDebito->nombreComercial = $rs_empresa[0][5]; 
			$notaDebito->dirMatriz = $rs_empresa[0][6]; 
			$notaDebito->obligadoContabilidad =$rs_empresa[0][7]; 
			$notaDebito->tipoEmision = $rs_empresa[0][9];
			if ($rs_empresa[0][10]!=''){
				$notaDebito->contribuyenteEspecial = $rs_empresa[0][10];
			}
			$notaDebito->padronMicroempresa=$rs_empresa[0][17];
			$notaDebito->padronAgenteRetencion=$rs_empresa[0][18];
			if($rs_empresa[0][18]=='S'){
				$check_sql = "SELECT sp_busca_parametro ('NUMERORESOAR','1')";
				 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

				if (isset($rs[0][0])){
				   $notaDebito->numeroResolucion=$rs[0][0];
				}
			}
			$notaDebito->artesanoCalificado=$rs_empresa[0][19];

		}

		$check_sql="SELECT
							nd_numero,
							nd_ambiente,
							nd_tipo_comprobante,
							fecha,
							est_direccion,
							est_codigo,
							pen_serie,
							nd_secuencial,
							cl_tipo_identificacion,
							cl_nombre,
							cl_identificacion,
							nd_cod_docmod,
							nd_serie_docmod||'-'||nd_secuencial_docmod,
							fecha_docmod,
							nd_subtotal,
							nd_subtotal_iva,
							nd_valor_iva,
							nd_subtotal_cero,
							nd_subtotal_no_objeto,
							nd_subtotal_excento,
							nd_valor_ice,
							nd_total,
							cl_direccion,
							cl_email,
							cl_telefono,
							est_padronrimpe,
							est_leyenda_rimpe,
							nd_correo_enviado
					FROM
							v_del_datos_nota_debito_sri
					WHERE nd_numero=".$nd_numero ;
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_notaDebito = array();
      $rs_notadebito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_notaDebito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                        $rs_notadebito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_notaDebito = false;
          $rs_notaDebito_erro = $this->Db->ErrorMsg();
          $rs_notadebito = false;
          $rs_notadebito_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs_notadebito[0][0])){
			$correo_enviado=$rs_notadebito[0][27];
			$notaDebito->padronRimpe=$rs_notadebito[0][25];
			$notaDebito->leyendaRimpe=$rs_notadebito[0][26];
			$notaDebito->ambiente = $rs_notadebito[0][1];
			$notaDebito->codDoc = $rs_notadebito[0][2];
			$notaDebito->fechaEmision = $rs_notadebito[0][3];
			$notaDebito->dirEstablecimiento = $rs_notadebito[0][4];
			$notaDebito->establecimiento = $rs_notadebito[0][5]; 
			$notaDebito->ptoEmision = $rs_notadebito[0][6]; 
			$notaDebito->secuencial = $rs_notadebito[0][7];
			$notaDebito->tipoIdentificacionComprador = $rs_notadebito[0][8];
			$notaDebito->razonSocialComprador = $rs_notadebito[0][9]; 
			$notaDebito->identificacionComprador = $rs_notadebito[0][10];
			$notaDebito->codDocModificado = $rs_notadebito[0][11];
			$notaDebito->numDocModificado = $rs_notadebito[0][12];
			$notaDebito->fechaEmisionDocSustento = $rs_notadebito[0][13];
			$notaDebito->totalSinImpuestos = $rs_notadebito[0][14]; 
			$total_Impuestos=array();
			$i=0;
					$sql_ivas_cobrados="SELECT dnd_porcentaje_iva,
												ROUND(sum(1*(dnd_precio_unitario)+dnd_valor_ice),2),
												round(sum(dnd_base_iva) *iva_porcentaje/100,2),
												iva_porcentaje
										FROM  del_detalle_nota_debito 
										inner join sri_tarifa_iva on iva_codigo=dnd_porcentaje_iva
										WHERE dnd_nota_debito=".$nd_numero."
										group by dnd_porcentaje_iva,iva_porcentaje";
					 
      $nm_select = $sql_ivas_cobrados; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_ivas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_ivas = false;
          $rs_ivas_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_ivas   === false){
						echo "Error al acceder a del_detalle_factura";
					}else{
						while (!$rs_ivas->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo ='2'; 
							$totalImpuesto->codigoPorcentaje = $rs_ivas->fields[0]; 
							$totalImpuesto->baseImponible = $rs_ivas->fields[1];
							$totalImpuesto->valor = $rs_ivas->fields[2];
							$totalImpuesto->tarifa = $rs_ivas->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_ivas->MoveNext();
						}
						$rs_ivas->Close();
					}	
				if ($i==0){
					$totalImpuesto = new totalImpuesto();
					$totalImpuesto->codigo ='2'; 
					$totalImpuesto->codigoPorcentaje = '0'; 
					$totalImpuesto->baseImponible = '0.00'; 
					$totalImpuesto->valor = '0.00';
					$totalImpuesto->tarifa = '0.00';
					$total_Impuestos[$i]=$totalImpuesto;
					$i+=1;
				}	
				if($rs_notadebito[0][20]>0){	
					$check_sql="SELECT  '3' as impuesto,
										 dnd_porcentaje_ice,
										sum(dnd_base_ice),
										sum(dnd_valor_ice) 
								FROM del_detalle_nota_debito 
								WHERE dnd_porcentaje_ice<>'0' 
								and dnd_nota_debito=".$nd_numero."
								group by dnd_porcentaje_ice";
					 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_impuesto = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_impuesto = false;
          $rs_impuesto_erro = $this->Db->ErrorMsg();
      } 
 
					if ($rs_impuesto   === false){
						echo "Error al acceder a del_detalle_notaDebito";
					}else{
						while (!$rs_impuesto->EOF){
							$totalImpuesto = new totalImpuesto();
							$totalImpuesto->codigo =$rs_impuesto->fields[0]; 
							$totalImpuesto->codigoPorcentaje = $rs_impuesto->fields[1]; 
							$totalImpuesto->baseImponible = $rs_impuesto->fields[2];
							$totalImpuesto->valor = $rs_impuesto->fields[3];
							$total_Impuestos[$i]=$totalImpuesto;
							$i+=1;
							$rs_impuesto->MoveNext();
						}
						$rs_impuesto->Close();
					}	
				}

			$notaDebito->impuestos = $total_Impuestos;
			$notaDebito->valorTotal = $rs_notadebito[0][21]; 
			$pagos = array();
			$check_sql="SELECT 	a.fp_id,
								sri_forma_pago.fp_codigo,
								a.fp_valor,
								coalesce(a.fp_plazo,0),
								coalesce(a.fp_unidad_tiempo,'DIAS') 
						FROM del_forma_pago_nd a 
						inner join del_forma_pago b on a.fp_forma_pago=b.fp_id	
						inner join sri_forma_pago on b.fp_sri=sri_forma_pago.fp_codigo
						where a.fp_nota_debito=".$nd_numero ;
			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_pagos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_pagos = false;
          $rs_pagos_erro = $this->Db->ErrorMsg();
      } 
 
			if ($rs_pagos   === false){
				echo "Error al acceder a las formas de pago";
			}else{
				$i=0;
				while (!$rs_pagos->EOF){
					$pago = new pagos();
					$pago->formaPago =$rs_pagos->fields[1];
					$pago->total = $rs_pagos->fields[2];
					$pago->plazo = $rs_pagos->fields[3];
					$pago->unidadTiempo=$rs_pagos->fields[4];
					$pagos[$i]=$pago;
					$i+=1;
					$rs_pagos->MoveNext();
				}
				$rs_pagos->Close();
			}	
			$notaDebito->pagos = $pagos;
			$check_sql="SELECT pro_descripcion,
							   dnd_precio_unitario 
						FROM v_del_detalle_nota_debito_sri
						WHERE dnd_nota_debito=".$nd_numero."
						order by dnd_id" ;

			 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_motivos = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_motivos = false;
          $rs_motivos_erro = $this->Db->ErrorMsg();
      } 
   
			if ($rs_motivos   === false){
				echo "Error al acceder al detalle de la notaDebito";
			}else{
				$motivos = array();
				$i=0;
				while (!$rs_motivos->EOF){
					$motivo = new motivo();
					$motivo->razon = $rs_motivos->fields[0];
					$motivo->valor = $rs_motivos->fields[1];
					$motivos[$i] = $motivo;
					$rs_motivos->MoveNext();
					$i+=1;
				}
				$rs_motivos->Close();
				$notaDebito->motivos = $motivos;
			}

			$camposAdicionales = array();
			$i=0;
			if($rs_empresa[0][19]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "artesanoCalificado";
				$campoAdicional->valor = 'Nro. '.$rs_empresa[0][19];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_notadebito[0][24]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Telefono";
				$campoAdicional->valor = $rs_notadebito[0][24];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			if($rs_notadebito[0][23]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Email";
				$campoAdicional->valor = $rs_notadebito[0][23];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}

			if($rs_notadebito[0][22]<>''){
				$campoAdicional = new campoAdicional();
				$campoAdicional->nombre = "Direccion";
				$campoAdicional->valor = $rs_notadebito[0][22];
				$camposAdicionales[$i] = $campoAdicional;
				$i+=1;
			}
			$notaDebito->infoAdicional = $camposAdicionales;

			$procesarComprobante = new procesarComprobante();
			$procesarComprobante->comprobante = $notaDebito;
			$procesarComprobante->envioSRI = false; 
			$res = $procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
			if($i_log){
				var_dump($notaDebito);
				echo '<br>';
				var_dump($res);
				echo '<br>';
			}	
			if($i_autorizar=='S'){
				if ($res->return->estadoComprobante == "FIRMADO") {
					$procesarComprobante = new procesarComprobante();
					$procesarComprobante->comprobante = $notaDebito;
					$procesarComprobante->envioSRI = true; 
					$res=$procesarComprobanteElectronico->procesarComprobante($procesarComprobante);
					if($i_log){
						var_dump($res);
						echo '<br>';
					}	
				}else{
					if($res->return->estadoComprobante == "PROCESANDOSE"){
						$comprobantePendiente = new \comprobantePendiente();
						$comprobantePendiente->configAplicacion = $configApp;
						$comprobantePendiente->configCorreo = $configCorreo;
						$comprobantePendiente->ambiente = $rs_notadebito[0][1];
						$comprobantePendiente->codDoc = $rs_notadebito[0][2];
						$comprobantePendiente->establecimiento = $rs_notadebito[0][5];
						$comprobantePendiente->fechaEmision = $rs_notadebito[0][3];
						$comprobantePendiente->ptoEmision = $rs_notadebito[0][6];
						$comprobantePendiente->ruc = $rs_empresa[0][0];
						$comprobantePendiente->secuencial = $rs_notadebito[0][7];
						$comprobantePendiente->tipoEmision = $rs_empresa[0][9];
						$comprobantePendiente->padronMicroempresa = $rs_empresa[0][17];
						$comprobantePendiente->padronAgenteRetencion = $rs_empresa[0][18];
						$comprobantePendiente->padronRimpe = $rs_empresa[0][21];
						$procesarComprobantePendiente = new \procesarComprobantePendiente();
						$procesarComprobantePendiente->comprobantePendiente = $comprobantePendiente;
						$res = $procesarComprobanteElectronico->procesarComprobantePendiente($procesarComprobantePendiente);
						if ($res->return->estadoComprobante == "PROCESANDOSE") {
							$res->return->estadoComprobante = "ERROR";
						}
					}	
				}
			}

			$mensaje_final=	$res->return->estadoComprobante."<br>";
			if ($res->return->estadoComprobante == 'ERROR'){
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
				$update_sql =  "UPDATE del_nota_debito 
								SET nd_error_sri='" . $res->return->mensajes->mensaje . "',
									nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
								WHERE nd_numero=" . $nd_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if ($res->return->estadoComprobante == "FIRMADO") {
				$update_sql =  "UPDATE del_nota_debito 
                        SET nd_estado_sri='" . $res->return->estadoComprobante . "',
                            nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' 
                        WHERE nd_numero=" . $nd_numero;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}

			if($res->return->estadoComprobante=='AUTORIZADO'){
				if($correo_enviado=="NO"){
					if($this->enviarCorreo($notaDebito,$rs_notadebito[0][23])){
						$correo_enviado="SI";
					}else{
						$correo_enviado="NO";
					}
				}
				$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,	
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_autorizacion='".$res->return->numeroAutorizacion."',
									 nd_fecha_autorizacion='".$res->return->fechaAutorizacion."',
									 nd_error_sri='',
									 nd_correo_enviado='".$correo_enviado."'
								WHERE nd_numero=".$nd_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
			if($res->return->estadoComprobante=='DEVUELTA'){
				if($res->return->mensajes->mensaje=='CLAVE ACCESO REGISTRADA'){
					if($correo_enviado=="NO"){
						if($this->enviarCorreo($notaDebito,$rs_notadebito[0][23])){
							$correo_enviado="SI";
						}else{
							$correo_enviado="NO";
						}
					}
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='AUTORIZADO',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_autorizacion='".$res->return->claveAcceso."',
									 nd_correo_enviado='".$correo_enviado."'
								WHERE nd_numero=".$nd_numero ;
				}else{
					$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."'
								WHERE nd_numero=".$nd_numero ;
				}


				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}
			if($res->return->estadoComprobante=='NO AUTORIZADO'){
				$update_sql = "UPDATE del_nota_debito 
								SET  nd_estado_sri='".$res->return->estadoComprobante."',
									 nd_archivo='".$this->crearNombreFicheroSinExtension($notaDebito)."' ,
									 nd_clave='".$res->return->claveAcceso."',   
									 nd_error_sri='".$res->return->mensajes->mensaje."',
									 nd_fecha_autorizacion='".$res->return->fechaAutorizacion."'
								WHERE nd_numero=".$nd_numero ;
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
				$mensaje_final.=$res->return->mensajes->mensaje."<br>";
			}

			return $mensaje_final;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function obtenerIdAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        try{
            $Log=new IgtechLog ();
            $Log->Abrir();
            $Log->EscribirLog(' Obtener IdAsiento');
            $Log->EscribirLog(' DATOS DE ENTRADA');    
            $ws_conexion=$this->ws_coneccion_bdd($infoConection);            
            $query_sql="SELECT  dbo.fun_id_asiento(
                                                    ".$i_data->idEmpresa.",
                                                    ".$i_data->mes.",
                                                    ".$i_data->anio.",
                                                   '".$i_data->tipo."') as idAsiento;";
            $Log->EscribirLog(' Consulta: '.$query_sql);                                        
            $result = sqlsrv_query($ws_conexion, $query_sql);
            if($result===false){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{ 
                $row = sqlsrv_fetch_object( $result); 
                    $w_respuesta = array(
                            'idAsiento' => $row->idAsiento,
                    );                
                  
                $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
            }
            sqlsrv_close($ws_conexion);
        }catch(Throwable $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
        return $o_respuesta;
    
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		try{

            $Log=new IgtechLog ();
            $Log->Abrir();
            $Log->EscribirLog(' Registrar Asiento');
            $Log->EscribirLog(' DATOS DE ENTRADA');    
            $ws_conexion=$this->ws_coneccion_bdd($infoConection);
            $query_sql="INSERT INTO ASIENTOS(
                        ID_ASIENTO,
                        COD_EMPRESA,
                        FECHA,
                        CONCEPTO,
                        ESTADO,
                        APROBADO,
                        ESGENERADOPOR
					)values(
                        '".$i_data->idAsiento."',
                         ".$i_data->codEmpresa.",
                         cast('".$i_data->fecha."' as date),
                         '".$i_data->concepto."',
                         '".$i_data->estado."',
                         '".$i_data->aprobado."',
                         '".$i_data->esGeneradoPor."'
                         )";
            $Log->EscribirLog(' Consulta: '.$query_sql);                                        
            $result = sqlsrv_query($ws_conexion, $query_sql);
            if ($result === false ){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{
                $o_respuesta=array('error'=>'0','mensaje'=>'Asiento Registrado','datos'=>$i_data);   
            }
            sqlsrv_close($ws_conexion);             
        }catch(Throwable $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
        return $o_respuesta;
                         
	
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarDetalleAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        try{

            $Log=new IgtechLog ();
            $Log->Abrir();
            $Log->EscribirLog(' Registrar Detalle Asiento');
            $Log->EscribirLog(' DATOS DE ENTRADA');    
            $ws_conexion=$this->ws_coneccion_bdd($infoConection);
            $query_sql="INSERT INTO DETALLE_ASIENTO(
									ID_ASIENTO,
									ID_PLAN_DE_CUENTA,
									DEBE_HABER,
									VALOR)
								VALUES(
									'".$i_data->idAsiento."',
									".$i_data->idPlanCuentas.",
									".$i_data->debeHaber.",
									".$i_data->valor."
								)";
            $Log->EscribirLog(' Consulta: '.$query_sql);                                        
            $result = sqlsrv_query($ws_conexion, $query_sql);
            if ($result === false ){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{
                $o_respuesta=array('error'=>'0','mensaje'=>'Asiento Registrado','datos'=>$i_data);   
            }
            sqlsrv_close($ws_conexion);             
        }catch(Throwable $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
        return $o_respuesta;
    
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarNuevoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		try{

            $Log=new IgtechLog ();
            $Log->Abrir();
            $Log->EscribirLog(' Registrar Nuevo Asiento');
            $Log->EscribirLog(' DATOS DE ENTRADA');    
            $w_validacion=$this->validarDatosAsiento($i_data);
            if($w_validacion['error']<>'0'){
            	return $w_validacion;
        	}
            $w_Asiento = $this->registrarAsiento($i_data,$infoConection);
            if($w_Asiento['error']<>'0'){
            	return $w_Asiento;
        	}
            $w_detalles=$i_data->detallesAsiento;
            foreach($w_detalles as $detalle){
                $w_res_detalle= $this->registrarDetalleAsiento($detalle,$infoConection);
                if($w_res_detalle['error']<>'0'){
                   return $w_res_detalle;     
                }
            }
            $o_respuesta=array('error'=>'0','mensaje'=>'Asiento registrado Exitosamente','datos'=>$i_data);
                      
        }catch(Throwable $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
        return $o_respuesta;
                         
	
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function validarDatosAsiento($i_data){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        if (!isset($i_data->idAsiento)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo idAsiento');
            return $o_respuesta;
        }
        if (!isset($i_data->codEmpresa)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo codEmpresa');
            return $o_respuesta;
        }
        if (!isset($i_data->fecha)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo fecha');
            return $o_respuesta;
        }
        if (!isset($i_data->concepto)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo concepto');
            return $o_respuesta;
        }
        if (!isset($i_data->estado)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo estado');
            return $o_respuesta;
        }
        if (!isset($i_data->aprobado)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo aprobado');
            return $o_respuesta;
        }

        if (!isset($i_data->esGeneradoPor)){
            $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo esGeneradoPor');
            return $o_respuesta;
        }
        if (!isset($i_data->detallesAsiento)){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo esGeneradoPor');
            return $o_respuesta;
		}
        $o_respuesta=array('error'=>'0','mensaje'=>'ok');
            return $o_respuesta;
    
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function cambiaEstadoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		try{

            $Log=new IgtechLog ();
            $Log->Abrir();
            $Log->EscribirLog(' Cambia Estado Asiento');
            $Log->EscribirLog(' DATOS DE ENTRADA');    
            $ws_conexion=$this->ws_coneccion_bdd($infoConection);
            $query_sql="UPDATE ASIENTOS SET ESTADO='P'  WHERE ID_ASIENTO='".$i_data."'";
            $Log->EscribirLog(' Consulta: '.$query_sql);                                        
            $result = sqlsrv_query($ws_conexion, $query_sql);
            if ($result === false ){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{
                $o_respuesta=array('error'=>'0','mensaje'=>'Asiento Anulado','datos'=>$i_data);   
            }
            sqlsrv_close($ws_conexion);             
        }catch(Throwable $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
        return $o_respuesta;
	
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function cambiaEstadoFactura($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		try{

            $Log=new IgtechLog ();
            $Log->Abrir();
            $Log->EscribirLog(' Cambia estado Factura');
            $Log->EscribirLog(' DATOS DE ENTRADA');    
            $ws_conexion=$this->ws_coneccion_bdd($infoConection);
            $query_sql="UPDATE FACTURA_VENTA SET  ESTADO='P'  
						WHERE ID_ASIENTO='".$i_data."'";
            $Log->EscribirLog(' Consulta: '.$query_sql);                                        
            $result = sqlsrv_query($ws_conexion, $query_sql);
            if ($result === false ){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{
                $o_respuesta=array('error'=>'0','mensaje'=>'Asiento Anulado','datos'=>$i_data);   
            }
            sqlsrv_close($ws_conexion);             
        }catch(Throwable $e){
            $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
        }
        $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
        return $o_respuesta;
	
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function generaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        $w_datos_conexion = new conexionBDD();
		$w_datos_idAsiento= new IdAsiento();
		$w_datos_Asiento = new Asiento();

		$check_sql = "SELECT cd_host,
							 cd_puerto,
							 cd_usuario,
							 cd_password,
							 cd_base  
					  FROM del_conexion_debi 
					  WHERE cd_empresa='".$i_empresa."';";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


		if(isset($rs[0][0])){
			$w_datos_conexion->server = $rs[0][0];
			$w_datos_conexion->port = $rs[0][1];
			$w_datos_conexion->user = $rs[0][2];
			$w_datos_conexion->pass = $rs[0][3];
			$w_datos_conexion->bdd = $rs[0][4];
		}

		$select_sql="SELECT 
							emp_codigo_empresa_debi,
							month(cast(op_fecha_emision  as date)),
							year(cast(op_fecha_emision  as date)),
							op_fecha_emision,
							'Diario CxC Cliente:' ||  cl_nombre || ' ' || op_comentario,
							'A',
							'N',
							'PREVENTA'					
					FROM fac_operacion
					inner join del_cliente on op_propietario=cl_id
					inner join del_empresa on op_empresa=emp_ruc
					WHERE op_operacion=".$i_operacion;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_operacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_operacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_operacion = false;
          $rs_operacion_erro = $this->Db->ErrorMsg();
      } 

		if(isset($rs[0][0])){

			$w_datos_idAsiento->idEmpresa	= $rs_operacion[0][0] ;
			$w_datos_idAsiento->mes			=$rs_operacion[0][1];
			$w_datos_idAsiento->anio		=$rs_operacion[0][2];
			$w_datos_idAsiento->tipo		='D';
			$w_result=$this->obtenerIdAsiento($w_datos_idAsiento,$w_datos_conexion);

			if($w_result['error']=='0'){
				$w_datos_Asiento->idAsiento=$w_result['datos']['idAsiento'];
				$w_datos_Asiento->codEmpresa=$rs_operacion[0][0];
				$w_datos_Asiento->fecha=$rs_operacion[0][3];
				$w_datos_Asiento->concepto=$rs_operacion[0][4];
				$w_datos_Asiento->estado=$rs_operacion[0][5];
				$w_datos_Asiento->aprobado=$rs_operacion[0][6];
				$w_datos_Asiento->esGeneradoPor=$rs_operacion[0][7];
			}

		}

		$select_sql="SELECT  pro_cta_cobrar,
							 pro_cta_puente,
							 round(do_cantidad*do_precio_unitario,2)
					FROM fac_detalle_operacion 
					inner join del_producto on do_producto=pro_codigo and pro_empresa='".$i_empresa."'
					WHERE 
					do_producto not in (SELECT distinct (cr_producto_aplica) 
					FROM fac_config_recargos where cr_empresa='".$i_empresa."' )
					and do_operacion=".$i_operacion;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 


		if ($rs_detalles   === false){
						echo "Error al acceder al detalle de la factura";
		}else{
			$detalles_asiento = array();
			$i=0;
			while (!$rs_detalles->EOF){
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$rs_detalles->fields[0];
				$detalleAsiento->debeHaber    =1;
				$detalleAsiento->valor        =$rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$rs_detalles->fields[1];
				$detalleAsiento->debeHaber    =2;
				$detalleAsiento->valor        =$rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$rs_detalles->MoveNext();

			}
			$w_datos_Asiento->detallesAsiento=$detalles_asiento;
		}

		$w_respuesta=$this->registrarNuevoAsiento($w_datos_Asiento,$w_datos_conexion);

		if ($w_respuesta['error']<>'0'){

		}else{
			$update_sql="UPDATE fac_operacion 
						 SET  
							op_asiento='".$w_result['datos']['idAsiento']."'
						 WHERE
							op_operacion=".$i_operacion;
			
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function anulaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
        $w_datos_conexion = new conexionBDD();
		$w_datos_idAsiento= new IdAsiento();
		$w_datos_Asiento = new Asiento();

		$check_sql = "SELECT cd_host,
							 cd_puerto,
							 cd_usuario,
							 cd_password,
							 cd_base  
					  FROM del_conexion_debi 
					  WHERE cd_empresa='".$i_empresa."'";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs[0][0])){
			$w_datos_conexion->server = $rs[0][0];
			$w_datos_conexion->port = $rs[0][1];
			$w_datos_conexion->user = $rs[0][2];
			$w_datos_conexion->pass = $rs[0][3];
			$w_datos_conexion->bdd = $rs[0][4];
		}

		$select_sql="SELECT 
							emp_codigo_empresa_debi,
							coalesce(month(cast(op_fecha_baja as date)),month(getdate())),
							coalesce(year(cast(op_fecha_baja as date)),year(getdate())),
							op_fecha_baja,
							'Reduce CxC Cliente:' ||  cl_nombre || ' ' || op_comentario,
							'A',
							'N',
							'PREVENTA'					
					FROM fac_operacion
					inner join del_cliente on op_propietario=cl_id
					inner join del_empresa on op_empresa=emp_ruc
					WHERE op_operacion=".$i_operacion;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_operacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_operacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_operacion = false;
          $rs_operacion_erro = $this->Db->ErrorMsg();
      } 

		if(isset($rs[0][0])){

			$w_datos_idAsiento->idEmpresa	= $rs_operacion[0][0] ;
			$w_datos_idAsiento->mes			=$rs_operacion[0][1];
			$w_datos_idAsiento->anio		=$rs_operacion[0][2];
			$w_datos_idAsiento->tipo		='D';
			$w_result=$this->obtenerIdAsiento($w_datos_idAsiento,$w_datos_conexion);

			if($w_result['error']=='0'){
				$w_datos_Asiento->idAsiento=$w_result['datos']['idAsiento'];
				$w_datos_Asiento->codEmpresa=$rs_operacion[0][0];
				$w_datos_Asiento->fecha=$rs_operacion[0][3];
				$w_datos_Asiento->concepto=$rs_operacion[0][4];
				$w_datos_Asiento->estado=$rs_operacion[0][5];
				$w_datos_Asiento->aprobado=$rs_operacion[0][6];
				$w_datos_Asiento->esGeneradoPor=$rs_operacion[0][7];
			}

		}

		$select_sql="SELECT  pro_cta_puente,
							 pro_cta_cobrar,
							 round(do_cantidad*do_precio_unitario,2)
					FROM fac_detalle_operacion 
					inner join del_producto on do_producto=pro_codigo and pro_empresa='".$i_empresa."'
					WHERE 
					do_producto not in (SELECT distinct (cr_producto_aplica) FROM fac_config_recargos where cr_empresa='".$i_empresa."' )
					and do_operacion=".$i_operacion;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 


		if ($rs_detalles   === false){
						echo "Error al acceder al detalle de la factura";
		}else{
			$detalles_asiento = array();
			$i=0;
			while (!$rs_detalles->EOF){
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$rs_detalles->fields[0];
				$detalleAsiento->debeHaber    =1;
				$detalleAsiento->valor        =$rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$rs_detalles->fields[1];
				$detalleAsiento->debeHaber    =2;
				$detalleAsiento->valor        =$rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$rs_detalles->MoveNext();

			}
			$w_datos_Asiento->detallesAsiento=$detalles_asiento;
		}

		$w_respuesta=$this->registrarNuevoAsiento($w_datos_Asiento,$w_datos_conexion);

		if ($w_respuesta['error']<>'0'){

		}else{
			$update_sql="UPDATE fac_operacion 
						 SET  
							op_asiento_anula='".$w_result['datos']['idAsiento']."'
						 WHERE
							op_operacion=".$i_operacion;
			
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function anularFactura($i_factura,$i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$w_datos_conexion = new conexionBDD();
		$check_sql = "SELECT cd_host,
							 cd_puerto,
							 cd_usuario,
							 cd_password,
							 cd_base  
					  FROM del_conexion_debi 
					  WHERE cd_empresa='".$i_empresa."'";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs[0][0])){
			$w_datos_conexion->server = $rs[0][0];
			$w_datos_conexion->port = $rs[0][1];
			$w_datos_conexion->user = $rs[0][2];
			$w_datos_conexion->pass = $rs[0][3];
			$w_datos_conexion->bdd = $rs[0][4];
		}

		$select_sql="SELECT 
						fac_numero,
						coalesce(op_operacion,0),
						coalesce(op_asiento_anula,''),
						coalesce(fac_asiento,'')
					FROM del_factura 
					LEFT  JOIN fac_operacion ON  op_factura=fac_numero
					WHERE fac_numero=".$i_factura;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_factura = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_factura[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_factura = false;
          $rs_factura_erro = $this->Db->ErrorMsg();
      } 

		if(isset($rs_factura[0][0])){
			if ($rs_factura[0][2]<>''){
				$w_result=$this->cambiaEstadoAsiento($rs_factura[0][2],$w_datos_conexion);	
			}
			if($rs_factura[0][3]<>''){
				$w_result=$this->cambiaEstadoAsiento($rs_factura[0][3],$w_datos_conexion);
				$w_result=$this->cambiaEstadoFactura($rs_factura[0][3],$w_datos_conexion);
			}
			
			return 0;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function anularNotaCredito($i_notacredito,$i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$w_datos_conexion = new conexionBDD();
		$check_sql = "SELECT cd_host,
							 cd_puerto,
							 cd_usuario,
							 cd_password,
							 cd_base  
					  FROM del_conexion_debi 
					  WHERE cd_empresa='".$i_empresa."'";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


		if (isset($rs[0][0])){
			$w_datos_conexion->server = $rs[0][0];
			$w_datos_conexion->port = $rs[0][1];
			$w_datos_conexion->user = $rs[0][2];
			$w_datos_conexion->pass = $rs[0][3];
			$w_datos_conexion->bdd = $rs[0][4];
		}

		$select_sql="SELECT 
						nc_numero,
						coalesce(nc_asiento,'')
					FROM del_nota_credito 
					WHERE nc_numero=".$i_notacredito;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_documento = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_documento[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_documento = false;
          $rs_documento_erro = $this->Db->ErrorMsg();
      } 

		if(isset($rs_documento[0][0])){
			if ($rs_documento[0][1]<>''){
				$w_result=$this->cambiaEstadoAsiento($rs_documento[0][1],$w_datos_conexion);	
				$w_result=$this->cambiaEstadoFactura($rs_documento[0][1],$w_datos_conexion);
			}
			
			return 0;
		}
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function inserUpdateCliente($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Insert Update Cliente ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $w_validacion=$this->validarDatosCliente($i_data);
        if($w_validacion['error']<>'0'){
            return $w_validacion;
        }
		
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $select_sql="SELECT count(*) as count
                     FROM  CLIENTES
                     WHERE RUC='".$i_data->identificacion."'
                     AND COD_EMPRESA=".$i_data->codEmpresa.";";

        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql);
        if ($result=== false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $row = sqlsrv_fetch_object( $result); 
            if($row->count==0){
                $o_respuesta=$this->registrarCliente($i_data,$infoConection);    
            }else{
                $o_respuesta=$this->actualizarCliente($i_data,$infoConection);    
            }
        } 
        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }

    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;  

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarCliente($i_data, $infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar Cliente');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $insert_sql="INSERT INTO CLIENTES(
                            COD_EMPRESA,
                            TIPO_IDENTIFICACION,
                            RUC,
                            NOMBRE,
                            PROVINCIA,
                            CIUDAD,
                            DIRECCION,
                            TELEFONO,
                            EMAIL
                            )
                     VALUES(
                         ".$i_data->codEmpresa.", 
                        '".$i_data->tipoIdentificacion."',
                        '".$i_data->identificacion."',
                        '".$i_data->nombre."',
                        '".$i_data->provincia."',
                        '".$i_data->ciudad."',
                        '".$i_data->direccion."',
                        '".$i_data->telefono."',
                        '".$i_data->email."');";  
        $Log->EscribirLog(' Consulta: '.$insert_sql);    
        $result = sqlsrv_query($ws_conexion, $insert_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $select_sql="SELECT SCOPE_IDENTITY() AS SCOPE_IDENTITY";
            $Log->EscribirLog(' Consulta: '.$select_sql);   
            $result = sqlsrv_query($ws_conexion, $select_sql);
            if($result===false){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{    
                $w_respuesta = array(); 
                while($row = sqlsrv_fetch_object( $result)) { 
                    $w_respuesta = array(
                        'cod_cliente'   =>  utf8_encode($row->SCOPE_IDENTITY),
                        'ruc'           =>  $i_data->identificacion,
                        'nombre'        =>  $i_data->nombre,
                    );
                }
                $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
            }
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function actualizarCliente($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Actualizar Cliente');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $insert_sql="UPDATE CLIENTES SET 
                        TIPO_IDENTIFICACION ='".$i_data->tipoIdentificacion."',
                        NOMBRE              ='".$i_data->nombre."',
                        PROVINCIA           ='".$i_data->provincia."',
                        CIUDAD              ='".$i_data->ciudad."',
                        DIRECCION           ='".$i_data->direccion."',
                        TELEFONO            ='".$i_data->telefono."',
                        EMAIL               ='".$i_data->email."'
                    WHERE COD_EMPRESA       =".$i_data->codEmpresa."
                    AND RUC='".$i_data->identificacion."';";  
        $Log->EscribirLog(' Consulta: '.$insert_sql);    
        $result = sqlsrv_query($ws_conexion, $insert_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $o_respuesta=$this->BuscaClienteCedula($i_data,$infoConection);
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function BuscaClienteCedula($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' BUSCA CLIENTE CEDULA ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
       
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);

        $select_sql="SELECT        COD_CLIENTE, 
                                   RUC, 
                                   NOMBRE
                        FROM       CLIENTES
                        WHERE      COD_EMPRESA = $i_data->codEmpresa 
                        AND        RUC = '".$i_data->identificacion."';";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql);
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{    
            $w_respuesta = array(); 
            $row = sqlsrv_fetch_object( $result); 
                $w_respuesta = array(
                    'cod_cliente'=>  utf8_encode($row->COD_CLIENTE),
                    'ruc'        =>  utf8_encode($row->RUC),
                    'nombre'     =>  utf8_encode($row->NOMBRE)
                );
            
            $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
        }
        sqlsrv_close($ws_conexion);
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function validarDatosCliente($i_data){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    if (!isset($i_data->codEmpresa)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_identificacion');
        return $o_respuesta;
    }
    if (!isset($i_data->tipoIdentificacion)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_identificacion');
        return $o_respuesta;
    }
    if (!isset($i_data->identificacion)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo identificacion');
        return $o_respuesta;
    }
    if (!isset($i_data->nombre)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo nombre');
        return $o_respuesta;
    }
    if (!isset($i_data->provincia)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo provincia');
        return $o_respuesta;
    }
    if (!isset($i_data->ciudad)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo ciudad');
        return $o_respuesta;
    }
    if (!isset($i_data->direccion)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo direccion');
        return $o_respuesta;
    }
    if (!isset($i_data->telefono)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo telefono');
        return $o_respuesta;
    }
    if (!isset($i_data->email)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo email');
        return $o_respuesta;
    }
    $o_respuesta=array('error'=>'0','mensaje'=>'ok');
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function ws_coneccion_bdd($infoConection) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$serverName = $infoConection->server . "," . $infoConection->port;
		$connectionInfo = array(
			"Database" => $infoConection->bdd,
			"UID" => $infoConection->user,
			"PWD" => $infoConection->pass,
			"TrustServerCertificate" => true
		);

		$conn = sqlsrv_connect($serverName, $connectionInfo);

		if ($conn === false) {
			die("Error en la conexión: " . print_r(sqlsrv_errors(), true)); 
		}

		return $conn; 
	
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function enviaNotaCredito($i_nota_credito,$i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    $w_datos_conexion = new conexionBDD();
    $w_nota_credito = new FacturaDebi();
    $w_cliente = new ClienteDebi();
    $w_factura_afecta= new FacturaAfecta();

    $check_sql = "SELECT cd_host,
                         cd_puerto,
                         cd_usuario,
                         cd_password,
                         cd_base  
					  FROM del_conexion_debi 
					  WHERE cd_empresa='".$i_empresa."';";
	 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

    if (isset($rs[0][0])){
        $w_datos_conexion->server = $rs[0][0];
        $w_datos_conexion->port = $rs[0][1];
        $w_datos_conexion->user = $rs[0][2];
        $w_datos_conexion->pass = $rs[0][3];
        $w_datos_conexion->bdd = $rs[0][4];
    }
    $select_datos_nc="SELECT 
                        emp_codigo_empresa_debi,
                        nc_tipo_comprobante,
                        nc_tipo_libretin,
                        fecha,
                        fecha,
                        est_codigo||pen_serie,
                        nc_secuencial,
                        nc_autorizacion,
                        nc_estado_sri,
                        nc_motivo,
                        0,
                        nc_total,
                        cl_identificacion,
                        nc_iddocmod
                    FROM v_del_datos_nota_credito_sri
                    WHERE nc_numero=".$i_nota_credito.";";
     
      $nm_select = $select_datos_nc; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_nota_credito = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_nota_credito[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_nota_credito = false;
          $rs_nota_credito_erro = $this->Db->ErrorMsg();
      } 

    if( isset($rs_nota_credito[0][0])){
        $w_nota_credito->empresa=        $rs_nota_credito[0][0];
        $w_nota_credito->tipo_documento= $rs_nota_credito[0][1];
        $w_nota_credito->tipo_emision=   $rs_nota_credito[0][2];
        $w_nota_credito->fecha=          $rs_nota_credito[0][3];
        $w_nota_credito->fecha_caducidad=$rs_nota_credito[0][4];
        $w_nota_credito->serie=          $rs_nota_credito[0][5];
        $w_nota_credito->secuencial=     $rs_nota_credito[0][6];
        $w_nota_credito->autorizacion=   $rs_nota_credito[0][7];
        $w_nota_credito->estado_sri=     $rs_nota_credito[0][8];
        $w_nota_credito->observaciones=  $rs_nota_credito[0][9];
        $w_nota_credito->servicio=       $rs_nota_credito[0][10];
        $w_nota_credito->total=          $rs_nota_credito[0][11];
        $w_nota_credito->propina=        "0";
       
    }
    $select_datos_doc_modificado="SELECT 
                                        fac_tipo_comprobante,
                                        est_codigo||pen_serie,
                                        fac_secuencial 
                                    FROM v_del_datos_factura_sri 
                                    where fac_numero=".$rs_nota_credito[0][13];
     
      $nm_select = $select_datos_doc_modificado; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_doc_modificado = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_doc_modificado[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_doc_modificado = false;
          $rs_doc_modificado_erro = $this->Db->ErrorMsg();
      } 
    
    if(isset($rs_doc_modificado[0][0])){
        $w_factura_afecta->serie=$rs_doc_modificado[0][1];
        $w_factura_afecta->secuencial=$rs_doc_modificado[0][2];
        $w_nota_credito->factura_afecta=$w_factura_afecta;
    }

    $select_datos_cliente="SELECT
                                cl_tipo_identificacion,
                                cl_identificacion,
                                cl_nombre,
                                pro_nombre,
                                can_nombre,
                                cl_direccion,
                                cl_telefono,
                                cl_email 
                            FROM
                                v_del_datos_cliente
                            where cl_empresa='".$i_empresa."'
                            and cl_identificacion='".$rs_nota_credito[0][12]."';";
     
      $nm_select = $select_datos_cliente; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_cliente = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_cliente[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_cliente = false;
          $rs_cliente_erro = $this->Db->ErrorMsg();
      } 

    if( isset($rs_cliente[0][0])){    
        $w_cliente->codEmpresa=         $rs_nota_credito[0][0];
        $w_cliente->tipoIdentificacion= $rs_cliente[0][0];
        $w_cliente->identificacion=     $rs_cliente[0][1];
        $w_cliente->nombre=             $rs_cliente[0][2];
        $w_cliente->provincia=          $rs_cliente[0][3];
        $w_cliente->ciudad=             $rs_cliente[0][4];
        $w_cliente->direccion=          $rs_cliente[0][5];
        $w_cliente->telefono=           $rs_cliente[0][6];
        $w_cliente->email=              $rs_cliente[0][7];

        $w_nota_credito->cliente = $w_cliente;
    }
    $select_detalles="SELECT 
                            coalesce(pro_producto_debi,0),
                            dnc_cantidad,
                            dnc_precio_unitario,
                            dnc_descuento,
                            iva_porcentaje
                        FROM del_detalle_nota_credito 
                        join del_producto on dnc_producto=pro_codigo and dnc_empresa=pro_empresa 
                        join sri_tarifa_iva on dnc_porcentaje_iva=iva_codigo
                        WHERE dnc_nota_credito=".$i_nota_credito;
     
      $nm_select = $select_detalles; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_detalles = false;
          $rs_detalles_erro = $this->Db->ErrorMsg();
      } 
  
    if ($rs_detalles   === false){
        echo "Error al acceder al detalle de la factura";
    }else{
        $w_detalles_nota_credito = array();
        $i=0;
        while (!$rs_detalles->EOF){
            $w_detalleNotaCredito = new Producto();
            $w_detalleNotaCredito->cod_producto_debi= $rs_detalles->fields[0];            
            $w_detalleNotaCredito->cantidad=          $rs_detalles->fields[1];    
            $w_detalleNotaCredito->pvp=               $rs_detalles->fields[2];
            $w_detalleNotaCredito->descuento_total=   $rs_detalles->fields[3];            
            $w_detalleNotaCredito->porcentaje_iva=    $rs_detalles->fields[4];            

            $w_detalles_nota_credito[$i]=$w_detalleNotaCredito;
            $i+=1;
			$rs_detalles->MoveNext();

        }
        $w_nota_credito->productos=$w_detalles_nota_credito;
    }
    $select_formas_pago="SELECT  idtesoreria,
                                tipo,
                                '' as lote,
                                '' as documento,
                                fp_valor,
                                fp_plazo,
                                fp_unidad_tiempo
                            FROM del_forma_pago_nota_credito fpnc
                            inner join del_forma_pago fp on fpnc.fp_forma_pago=fp.fp_id
                            inner join tesoreria t on fp.fp_tesoreria_debi= t.idtesoreria
                            WHERE fp_nota_credito=".$i_nota_credito;
     
      $nm_select = $select_formas_pago; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs_formas_pago = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_formas_pago = false;
          $rs_formas_pago_erro = $this->Db->ErrorMsg();
      } 

    if($rs_formas_pago ===false){

    }else{
        $w_formas_pago = array();
        $i=0;
        while(!$rs_formas_pago->EOF){
            $w_forma_pago=new FormaPago();
            $w_forma_pago->id_tesoreria=$rs_formas_pago->fields[0];
            $w_forma_pago->tipo_pago=$rs_formas_pago->fields[1];
            $w_forma_pago->lote=$rs_formas_pago->fields[2];
            $w_forma_pago->documento=$rs_formas_pago->fields[3];
            $w_forma_pago->valor=$rs_formas_pago->fields[4];
            $w_forma_pago->plazo=$rs_formas_pago->fields[5];
            $w_forma_pago->tiempo=$rs_formas_pago->fields[6];

            $w_formas_pago[$i]=$w_forma_pago;
            $i+=1;
            $rs_formas_pago->MoveNext();
        }
        $w_nota_credito->formas_pago=$w_formas_pago;
    }

    $w_respuesta= $this->registrarNuevaNC($w_nota_credito,$w_datos_conexion);
    if($w_respuesta['error']=='0'){
        $update_sql="UPDATE del_nota_credito 
                     SET nc_asiento='".$w_respuesta['datos']['id_asiento']."' 
                     WHERE nc_numero=".$i_nota_credito;
        
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      

    }
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarNuevaNC($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' REGISTRAR NUEVA NOTA DE CREDITO ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' DATOS :'.var_export($i_data,true));
        $w_validar=$this->validarDatosNuevaNC($i_data);
        if($w_validar['error']<>'0'){
            return $w_validar;
        }

        $w_cliente=$i_data->cliente;
        $w_datos_cliente=$this->inserUpdateCliente($w_cliente,$infoConection);
        if($w_datos_cliente['error']<>'0'){
            return $w_datos_cliente;
        }
        $w_factura_afecta=$this->seleccionaFactura($i_data->empresa,$i_data->factura_afecta,$infoConection);
        if($w_factura_afecta['error']<>'0'){
            return $w_factura_afecta;
        }

        if ($i_data->estado_sri=='AUTORIZADO'){
            $w_envio_correo='true';
            $w_firmado='true';
        }else{
            $w_envio_correo='false';
            $w_firmado='false';
        }
        $w_formas_pago=$i_data->formas_pago;
        foreach ($w_formas_pago as $forma_pago) {
            $w_tesoria=$forma_pago;
        }    
        $w_nota_credito=array(
            'empresa'=>         $i_data->empresa,
            'cod_cliente'=>     $w_datos_cliente['datos']['cod_cliente'],
            'tipo_documento'=>  $i_data->tipo_documento,
            'tipo_emision'=>    $i_data->tipo_emision,
            'fecha'=>           $i_data->fecha,
            'fecha_caducidad'=> $i_data->fecha_caducidad,
            'serie'=>           $i_data->serie,
            'secuencial'=>      $i_data->secuencial,
            'autorizacion'=>    $i_data->autorizacion,
            'estado_sri'=>      $i_data->estado_sri,
            'observaciones'=>   $i_data->observaciones,
            'firmado'=>         $w_firmado,
            'envio_correo'=>    $w_envio_correo,
            'plazo'=>           $w_tesoria->plazo,
            'tiempo'=>          $w_tesoria->tiempo,
            'servicio'=>        $i_data->servicio*(-1),
            'factura_afecta'=>  $w_factura_afecta['datos']['id_factura'],
            'tesoreria'=>       $w_tesoria->id_tesoreria,
        );
        $w_res_nota_credito=$this->registrarNCVenta($w_nota_credito,$infoConection);
        if ($w_res_nota_credito['error']<>'0'){
            return $w_res_nota_credito;
        }
        $w_productos=$i_data->productos;
        foreach ($w_productos as $producto) {
            $w_base_cero=0;
            $w_base_doce=0;
            $w_subtotal_sin=$producto->cantidad*$producto->pvp;
            if ($producto->porcentaje_iva==0){
                $w_subtotal=round($w_subtotal_sin,2);
                $w_base_cero=round($w_subtotal_sin-$producto->descuento_total,2);
                $w_valor_iva=0;
                $w_total=$w_base_cero;
            }else{
                $w_subtotal=round($w_subtotal_sin,2);
                $w_base_doce=round($w_subtotal_sin-$producto->descuento_total,2);
                $w_valor_iva=round(($w_subtotal_sin-$producto->descuento_total)*$producto->porcentaje_iva/100,2);
                $w_total=$w_base_doce+$w_valor_iva;
            }
            $w_producto=array(
                'id_nc'=>$w_res_nota_credito['datos']['id_nc'],
                'cod_producto_debi'=>$producto->cod_producto_debi,
                'cantidad'=>$producto->cantidad,
                'pvp'=>$producto->pvp,
                'descuento'=>$producto->descuento_total,
                'subtotal'=>$w_subtotal,
                'ice'=>0,
                'base_cero'=>$w_base_cero,
                'base_doce'=>$w_base_doce,
                'porcentaje_iva'=>$producto->porcentaje_iva,
                'iva'=>$w_valor_iva,
                'total'=>$w_total
            );
            $w_detalle=$this->registrarDetalleNCVenta($w_producto,$infoConection);
            if($w_detalle['error']<>'0'){
                return $w_detalle;
            }
        }
        $w_actualiza_saldos=$this->actualizaTotalesNC($w_res_nota_credito['datos']['id_nc'],$infoConection);
        if ($w_actualiza_saldos['error']<>'0'){
            return $w_actualiza_saldos;
        }

        $w_genera_asiento=$this->generarAsientoNC($w_res_nota_credito['datos']['id_nc'],$infoConection);
        if($w_genera_asiento['error']<>'0'){
            return $w_genera_asiento;
        }else{
            $w_respuesta=array(
                'id_nc'=>$w_res_nota_credito['datos']['id_nc'],
                'id_asiento'=>$w_genera_asiento['datos']['id_asiento'],
            );    
        }
        
        $o_respuesta=array('error'=>'0','mensaje'=>'Factura Registrado','datos'=>$w_respuesta); 

    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function validarDatosNuevaNC($i_data){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    if (!isset($i_data->empresa)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo empresa');
        return $o_respuesta;
    }
    if (!isset($i_data->tipo_documento)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_documento');
        return $o_respuesta;
    }
    if (!isset($i_data->tipo_emision)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_emision');
        return $o_respuesta;
    }
    if (!isset($i_data->fecha)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo fecha');
        return $o_respuesta;
    }
    if (!isset($i_data->fecha_caducidad)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo fecha_caducidad');
        return $o_respuesta;
    }
    if (!isset($i_data->serie)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo serie');
        return $o_respuesta;
    }
    if (!isset($i_data->secuencial)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo secuencial');
        return $o_respuesta;
    }
    if (!isset($i_data->autorizacion)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo autorizacion');
        return $o_respuesta;
    }
    if (!isset($i_data->estado_sri)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo estado_sri');
        return $o_respuesta;
    }
    if (!isset($i_data->observaciones)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo observaciones');
        return $o_respuesta;
    }
    if (!isset($i_data->servicio)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo servicio');
        return $o_respuesta;
    }
    if (!isset($i_data->factura_afecta)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo observaciones');
        return $o_respuesta;
    }
    if (!isset($i_data->cliente)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo cliente');
        return $o_respuesta;
    }
    if (!isset($i_data->productos)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo productos');
        return $o_respuesta;
    }
    if (!isset($i_data->formas_pago)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo formas_pago');
        return $o_respuesta;
    }
    $o_respuesta=array('error'=>'0','mensaje'=>'ok');
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarNCVenta($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar NC Venta ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);

        if($i_data['tipo_documento']=='01'){
            $i_data['tipo_documento']='18';
         }
        $insert_sql="INSERT INTO FACTURA_VENTA (
            COD_EMPRESA,
            COD_CLIENTE,
            TIPO_DOCUMENTO,
            TIPOEMISION,
            FECHA_VENTA,
            FECHA_CADUCIDAD,
            SERIE,
            NUMERO_FACTURA,
            AUTORIZACION,
            AUTORIZACION_SRI,
            OBSERVACIONES,
            FIRMADO,
            envio_correo,
            SUBTOTAL,
            DESCUENTO,
            ICE,
            BASEIVACERO,
            BASEIVADOCE,
            IVA,
            TOTAL,
            PLAZO,
            TIEMPO, 
            ESTADO,
            RETUVIERON,
            ACTIVOFIJO,
            TOTALRETENIDO,
            DIEZPORSERVICIOS,
            NOGRABA,
            IDTESORERIA,
            PROPINA,
            FACTURA_AFECTA,
            ESTADO_NC
         ) VALUES (
             ".$i_data['empresa'].",
             ".$i_data['cod_cliente'].",
            '".$i_data['tipo_documento']."',
            '".$i_data['tipo_emision']."',
            '".$i_data['fecha']."',
            '".$i_data['fecha_caducidad']."',
            '".$i_data['serie']."',
            '".$i_data['secuencial']."',
            '".$i_data['autorizacion']."',
            '".$i_data['estado_sri']."',
            '".$i_data['observaciones']."',
            '".$i_data['firmado']."',
            '".$i_data['envio_correo']."',
            0,
            0,
            0,
            0,
            0,
            0,
            0,
             ".$i_data['plazo'].",
            '".$i_data['tiempo']."', 
            'A',
            'NO',
            'NO',
            0,
            ".$i_data['servicio'].",
            'False',
            ".$i_data['tesoreria'].",
            0,
            ".$i_data['factura_afecta'].",
            'A'
         )";  
    $Log->EscribirLog(' Consulta: '.$insert_sql); 
        $result = sqlsrv_query($ws_conexion, $insert_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $select_sql="SELECT SCOPE_IDENTITY() AS SCOPE_IDENTITY";
            $result = sqlsrv_query($ws_conexion, $select_sql);
            if($result===false){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{    
                $w_respuesta = array(); 
                while($row = sqlsrv_fetch_object( $result)) { 
                    $w_respuesta = array(
                        'id_nc' =>  utf8_encode($row->SCOPE_IDENTITY)
                    );
                }
                $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
            }
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function registrarDetalleNCVenta($i_data,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar Detalle NC ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $insert_sql="INSERT INTO detalle_factura_venta (
                            ID_FACTURA_VENTA,
                            ID_GRUPOS_PRODUCTOS_VENTAS,
                            ID_IMPUESTO,
                            CANTIDAD,
                            PVP,
                            DESCUENTO,
                            SUBTOTAL,
                            POR_ICE,
                            ICE,
                            BASE_IMPONIBLE_CERO,
                            BASE_IMPONIBLE_DOCE,
                            PORCENTAJE_IVA,
                            IVA,
                            TOTAL,
                            CUENTA,
                            COD_PRINCIPAL,
                            COD_AUXILIAR,
                            detalle,
                            CODIGO_PROD,
                            IVA_POR 
                            ) 
                    SELECT 
                            ".$i_data['id_nc'].",
                            ID_GRUPOS_PRODUCTOS_VENTAS,
                            ID_IMPUESTO,
                            ".$i_data['cantidad'].",
                            ".$i_data['pvp'].",
                            ".(-1)*$i_data['descuento'].",
                            ".(-1)*$i_data['subtotal'].",
                            POR_ICE,
                            ".(-1)*$i_data['ice'].",
                            ".(-1)*$i_data['base_cero'].", 
                            ".(-1)*$i_data['base_doce'].",
                            ".$i_data['porcentaje_iva'].",
                            ".(-1)*$i_data['iva'].",
                            ".(-1)*$i_data['total'].",
                            CUENTA ,
                            COD_PRINCIPAL,
                            COD_AUXILIAR,
                            '',
                            NULL ,
                            '' 
                        FROM GRUPO_PRODUCTO_VENTA
                        WHERE ID_GRUPOS_PRODUCTOS_VENTAS=".$i_data['cod_producto_debi'].";";  
        $Log->EscribirLog(' Consulta: '.$insert_sql);    
        $result = sqlsrv_query($ws_conexion, $insert_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $o_respuesta=array('error'=>'0','mensaje'=>'Detalle Registrado','datos'=>$i_data);   
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function actualizaTotalesNC($i_nota_credito,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Actualizar Totales NC ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_nota_credito,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $update_sql="UPDATE FACTURA_VENTA  
                        SET	 
                            SUBTOTAL = T.SUBTOTAL ,
                            DESCUENTO= T.DESCUENTO,
                            ICE= T.ICE,
                            BASEIVACERO= T.BASE_IMPONIBLE_CERO,
                            BASEIVADOCE= T.BASE_IMPONIBLE_DOCE,
                            IVA= T.IVA,
                            TOTAL= T.TOTAL + DIEZPORSERVICIOS
                        FROM V_TOTALES_FACTURA_VENTA T
                        WHERE FACTURA_VENTA.ID_FACTURA_VENTA = T.ID_FACTURA_VENTA
                        AND FACTURA_VENTA.ID_FACTURA_VENTA=".$i_nota_credito.";";  
        $Log->EscribirLog(' Consulta: '.$update_sql);    
        $result = sqlsrv_query($ws_conexion, $update_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $o_respuesta=array('error'=>'0','mensaje'=>'Saldos Actualizados','datos'=>$i_nota_credito);   
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function generarAsientoNC($i_nota_credito,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' GENERAR ASIENTO NC ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_nota_credito,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $update_sql="execute sp_genera_asiento_nc ".$i_nota_credito;  
        $Log->EscribirLog(' Consulta: '.$update_sql);    
        $result = sqlsrv_query($ws_conexion, $update_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $select_sql="SELECT ID_ASIENTO FROM FACTURA_VENTA WHERE ID_FACTURA_VENTA=".$i_nota_credito;  
            $Log->EscribirLog(' Consulta: '.$select_sql);    
            $result = sqlsrv_query($ws_conexion, $select_sql);
            if ($result === false ){
                $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
            }else{
                $row= sqlsrv_fetch_object($result);
                $w_respuesta = array(
                    'id_asiento' =>$row->ID_ASIENTO,
                );
                $o_respuesta=array('error'=>'0','mensaje'=>'Saldos Actualizados','datos'=>$w_respuesta); 
            }  
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function seleccionaFactura ($i_empresa, $i_data, $infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' SELECCIONAR DATOS FACTURA AFECTA');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $select_sql="SELECT ID_FACTURA_VENTA,
                            IDTESORERIA  
                     FROM  FACTURA_VENTA 
                     WHERE COD_EMPRESA = ".$i_empresa."
                     AND SERIE ='".$i_data->serie."'
                     AND NUMERO_FACTURA ='".$i_data->secuencial."'
                     AND TIPO_DOCUMENTO in ('18','01')";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result=sqlsrv_query($ws_conexion, $select_sql);
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{ 
            $w_respuesta = array(); 
            while($row = sqlsrv_fetch_object( $result)) { 
                $w_respuesta = array(
                    'id_factura'=>$row->ID_FACTURA_VENTA,
                    'id_tesoreria'=>$row->IDTESORERIA 
                );
            }
            $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
        }
        sqlsrv_close($ws_conexion); 
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function listaEmpresas($i_empresa,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' LISTA EMPRESAS');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
		
        $select_sql="SELECT COD_EMPRESA,
                            NOMBRE_COMERCIAL,
                            IDENTIFICACION,
                            TIPO_DE_IDENTIFICACION
                     FROM EMPRESA
                     WHERE IDENTIFICACION='".$i_empresa."';";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql);
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{    
            $w_respuesta = array(); 
            while($row = sqlsrv_fetch_object( $result)) { 
                $w_respuesta[] = array(
                    'COD_EMPRESA'           =>  utf8_encode($row->COD_EMPRESA),
                    'NOMBRE_COMERCIAL'      =>  utf8_encode($row->NOMBRE_COMERCIAL),
                    'IDENTIFICACION'        =>  utf8_encode($row->IDENTIFICACION),
                    'TIPO_DE_IDENTIFICACION'=>  utf8_encode($row->TIPO_DE_IDENTIFICACION)
                );
            }
            $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
        }
        sqlsrv_close($ws_conexion);
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function listaCuentasContables($i_empresa,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' LISTA CUENTAS CONTABLES');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $select_sql="SELECT
                            PLAN_CUENTAS.ID_PLAN_DE_CUENTA,
                            PLAN_CUENTAS.COD_EMPRESA,
                            PLAN_CUENTAS.CODIGO,
                            PLAN_CUENTAS.NOMBRE,
                            PLAN_CUENTAS.TIPO,
                            PLAN_CUENTAS.NIVEL,
                            PLAN_CUENTAS.MODIFICABLE,
                            PLAN_CUENTAS.CASILLEROSRI,
                            PLAN_CUENTAS.PROYECCION,
                            PLAN_CUENTAS.FLUJO_CAJA 
                        FROM
                            dbo.PLAN_CUENTAS
                        INNER JOIN EMPRESA 	ON EMPRESA.COD_EMPRESA=PLAN_CUENTAS.COD_EMPRESA
                        WHERE EMPRESA.IDENTIFICACION='".$i_empresa."';";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql);
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{    
            $w_respuesta = array(); 
            while($row = sqlsrv_fetch_object( $result)) { 
                $w_respuesta[] = array(
                    'ID_PLAN_DE_CUENTA'=> utf8_encode($row->ID_PLAN_DE_CUENTA),
                    'COD_EMPRESA'=> utf8_encode($row->COD_EMPRESA),
                    'CODIGO'=> utf8_encode($row->CODIGO),
                    'NOMBRE'=> utf8_encode($row->NOMBRE),
                    'TIPO'=> utf8_encode($row->TIPO),
                    'NIVEL'=> utf8_encode($row->NIVEL),
                    'MODIFICABLE'=> utf8_encode($row->MODIFICABLE),
                    'CASILLEROSRI'=> utf8_encode($row->CASILLEROSRI),
                    'PROYECCION'=> utf8_encode($row->PROYECCION),
                    'FLUJO_CAJA'=> utf8_encode($row->FLUJO_CAJA)
                );
            }
            $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
        }
        sqlsrv_close($ws_conexion);
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function listaProductosDebi($i_empresa,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' LISTA PRODUCTOS DEBI');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $select_sql="SELECT
                        GRUPO_PRODUCTO_VENTA.ID_GRUPOS_PRODUCTOS_VENTAS,
                        GRUPO_PRODUCTO_VENTA.COD_EMPRESA,
                        GRUPO_PRODUCTO_VENTA.NOMBRE,
                        GRUPO_PRODUCTO_VENTA.ID_IMPUESTO,
                        COALESCE(GRUPO_PRODUCTO_VENTA.CUENTA,0) AS CUENTA,
                        GRUPO_PRODUCTO_VENTA.BIENESSERVICIOSACTIVOS,
                        COALESCE(GRUPO_PRODUCTO_VENTA.IVA,0) AS IVA,
                        COALESCE(GRUPO_PRODUCTO_VENTA.COD_PRINCIPAL,'') AS COD_PRINCIPAL,
                        COALESCE(GRUPO_PRODUCTO_VENTA.CODIGO_ICE,'') AS CODIGO_ICE,
                        COALESCE(GRUPO_PRODUCTO_VENTA.COD_AUXILIAR,'') AS COD_AUXILIAR,
                        COALESCE(GRUPO_PRODUCTO_VENTA.POR_ICE,0) AS POR_ICE,
                        COALESCE(GRUPO_PRODUCTO_VENTA.ATRIBUTO,'') AS ATRIBUTO,
                        COALESCE(GRUPO_PRODUCTO_VENTA.DESCRIPCION,'') AS DESCRIPCION,
                        COALESCE(GRUPO_PRODUCTO_VENTA.VALOR,0) AS VALOR,
                        GRUPO_PRODUCTO_VENTA.REEMBOLSA,
                        COALESCE(GRUPO_PRODUCTO_VENTA.IDCENTRALCOSTOS,0) AS IDCENTRALCOSTOS,
                        COALESCE(GRUPO_PRODUCTO_VENTA.IDDETALLECENTRAL,0) AS IDDETALLECENTRAL,
                        COALESCE(GRUPO_PRODUCTO_VENTA.IDSUBDETALLE,0) AS IDSUBDETALLE,
                        COALESCE(GRUPO_PRODUCTO_VENTA.VALOR_BOTELLA,0) AS VALOR_BOTELLA
                    FROM
                        GRUPO_PRODUCTO_VENTA
                    INNER JOIN EMPRESA ON EMPRESA.COD_EMPRESA=GRUPO_PRODUCTO_VENTA.COD_EMPRESA
                    WHERE EMPRESA.IDENTIFICACION='".$i_empresa."';";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql);
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{    
            $w_respuesta = array(); 
            while($row = sqlsrv_fetch_object( $result)) { 
                $w_respuesta[] = array(
                    'ID_GRUPOS_PRODUCTOS_VENTAS'=>utf8_encode($row->ID_GRUPOS_PRODUCTOS_VENTAS),
                    'COD_EMPRESA'               =>utf8_encode($row->COD_EMPRESA),
                    'NOMBRE'                    =>utf8_encode($row->NOMBRE),
                    'ID_IMPUESTO'               =>utf8_encode($row->ID_IMPUESTO),
                    'CUENTA'                    =>utf8_encode($row->CUENTA),
                    'BIENESSERVICIOSACTIVOS'    =>utf8_encode($row->BIENESSERVICIOSACTIVOS),
                    'IVA'                       =>utf8_encode($row->IVA),
                    'COD_PRINCIPAL'             =>utf8_encode($row->COD_PRINCIPAL),
                    'CODIGO_ICE'                =>utf8_encode($row->CODIGO_ICE),
                    'COD_AUXILIAR'              =>utf8_encode($row->COD_AUXILIAR),
                    'POR_ICE'                   =>utf8_encode($row->POR_ICE),
                    'ATRIBUTO'                  =>utf8_encode($row->ATRIBUTO),
                    'DESCRIPCION'               =>utf8_encode($row->DESCRIPCION),
                    'VALOR'                     =>utf8_encode($row->VALOR),
                    'REEMBOLSA'                 =>utf8_encode($row->REEMBOLSA),
                    'IDCENTRALCOSTOS'           =>utf8_encode($row->IDCENTRALCOSTOS),
                    'IDDETALLECENTRAL'          =>utf8_encode($row->IDDETALLECENTRAL),
                    'IDSUBDETALLE'              =>utf8_encode($row->IDSUBDETALLE),
                    'VALOR_BOTELLA'             =>utf8_encode($row->VALOR_BOTELLA)
                );
            }
            $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
        }
        sqlsrv_close($ws_conexion);
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function listaTesorerias($i_empresa,$infoConection){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' LISTA TESORERIAS');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $select_sql="SELECT
                            TESORERIA.IDTESORERIA,
                            TESORERIA.COD_EMPRESA,
                            TESORERIA.NOMBRE,
                            TESORERIA.TIPO,
                            TESORERIA.ID_PLAN_DE_CUENTA,
                            TESORERIA.COMPRASVENTAS,
                            TESORERIA.ABRE_CAJA,
                            TESORERIA.TRANSFERIR_CAJA 
                        FROM
                            TESORERIA
                        INNER JOIN EMPRESA ON EMPRESA.COD_EMPRESA=TESORERIA.COD_EMPRESA 
                        WHERE EMPRESA.IDENTIFICACION='".$i_empresa."';";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql);
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{    
            $w_respuesta = array(); 
            while($row = sqlsrv_fetch_object( $result)) { 
                $w_respuesta[] = array(
                    'IDTESORERIA'       =>utf8_encode($row->IDTESORERIA),
                    'COD_EMPRESA'       =>utf8_encode($row->COD_EMPRESA),
                    'NOMBRE'            =>utf8_encode($row->NOMBRE),
                    'TIPO'              =>utf8_encode($row->TIPO),
                    'ID_PLAN_DE_CUENTA' =>utf8_encode($row->ID_PLAN_DE_CUENTA),
                    'COMPRASVENTAS'     =>utf8_encode($row->COMPRASVENTAS),
                    'ABRE_CAJA'         =>utf8_encode($row->ABRE_CAJA),
                    'TRANSFERIR_CAJA'   =>utf8_encode($row->TRANSFERIR_CAJA)
                );
            }
            $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
        }
        sqlsrv_close($ws_conexion);
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function sincronizarEmpresas($i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
   
    $w_datos_conexion = new conexionBDD();
    $check_sql = "SELECT cd_host,
                         cd_puerto,
                         cd_usuario,
                         cd_password,
                         cd_base  
                   FROM  del_conexion_debi 
                   WHERE cd_empresa='".$i_empresa."';";
     
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


    if(isset($rs[0][0])){
        $w_datos_conexion->server = $rs[0][0];
        $w_datos_conexion->port = $rs[0][1];
        $w_datos_conexion->user = $rs[0][2];
        $w_datos_conexion->pass = $rs[0][3];
        $w_datos_conexion->bdd = $rs[0][4];
    }

    $w_respuesta= $this->listaEmpresas($i_empresa,$w_datos_conexion);
    if($w_respuesta['error']=='0'){
        $w_lista_empresas=$w_respuesta['datos'];
        foreach($w_lista_empresas as $empresa_debi){
            $check_sql="SELECT count(*) 
                        FROM empresa
                        WHERE cod_empresa=".$empresa_debi['COD_EMPRESA']."
                        AND identificacion='".$i_empresa."';";
             
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 

            if($rs_empresa[0][0]==0){

                $insert_sql="INSERT INTO empresa(
                                cod_empresa,
                                nombre_comercial,
                                identificacion,
                                tipo_de_identificacion) 
                            VALUES
                                (
                                    ".$empresa_debi['COD_EMPRESA'].",
                                    '".$empresa_debi['NOMBRE_COMERCIAL']."',
                                    '".$empresa_debi['IDENTIFICACION']."',
                                    '".$empresa_debi['TIPO_DE_IDENTIFICACION']."'
                                );";
                
     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
                      

            }else{
				$updata_sql="UPDATE	empresa 
								SET
									identificacion='".$empresa_debi['IDENTIFICACION']."',
									nombre_comercial='".$empresa_debi['NOMBRE_COMERCIAL']."',
									tipo_de_identificacion='".$empresa_debi['TIPO_DE_IDENTIFICACION']."' 
								WHERE cod_empresa=".$empresa_debi['COD_EMPRESA'];
				
     $nm_select = $updata_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function sincronizaPlanCuentas($i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    $w_datos_conexion = new conexionBDD();
    $check_sql = "SELECT cd_host,
                         cd_puerto,
                         cd_usuario,
                         cd_password,
                         cd_base  
                   FROM  del_conexion_debi 
                   WHERE cd_empresa='".$i_empresa."';";
     
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


    if(isset($rs[0][0])){
        $w_datos_conexion->server = $rs[0][0];
        $w_datos_conexion->port = $rs[0][1];
        $w_datos_conexion->user = $rs[0][2];
        $w_datos_conexion->pass = $rs[0][3];
        $w_datos_conexion->bdd = $rs[0][4];
    }

    $w_respuesta= $this->listaCuentasContables($i_empresa,$w_datos_conexion);
    if($w_respuesta['error']=='0'){
        $w_plan_cuentas=$w_respuesta['datos'];
        foreach($w_plan_cuentas as $cuenta_debi){
            
            $check_sql="SELECT count(*) 
                        FROM plan_cuentas
                        where cod_empresa=".$cuenta_debi['COD_EMPRESA']."
                        and empresa='".$i_empresa."'
                        and id_plan_cuentas=".$cuenta_debi['ID_PLAN_DE_CUENTA'].";";
             
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_cuenta = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_cuenta[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_cuenta = false;
          $rs_cuenta_erro = $this->Db->ErrorMsg();
      } 

            if($rs_cuenta[0][0]==0){

                $insert_sql="INSERT INTO	plan_cuentas(
                                id_plan_cuentas,
                                cod_empresa,
                                codigo,
                                nombre,
                                tipo,
                                nivel,
                                modificable,
                                casillerosri,
                                proyeccion,
                                flujo_caja,
                                empresa) 
                            VALUES
                                (
                                     ".$cuenta_debi['ID_PLAN_DE_CUENTA'].",
                                     ".$cuenta_debi['COD_EMPRESA'].",
                                    '".$cuenta_debi['CODIGO']."',
                                    '".$cuenta_debi['NOMBRE']."',
                                    '".$cuenta_debi['TIPO']."',
                                     ".$cuenta_debi['NIVEL'].",
                                    '".$cuenta_debi['MODIFICABLE']."',
                                    '".$cuenta_debi['CASILLEROSRI']."',
                                    '".$cuenta_debi['PROYECCION']."',
                                    '".$cuenta_debi['FLUJO_CAJA']."',
                                    '".$i_empresa."'
                                );";
                
     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
                      

            }else{
				$update_sql="UPDATE	plan_cuentas 
								SET
									codigo='".$cuenta_debi['CODIGO']."',
									nombre='".$cuenta_debi['NOMBRE']."',
									tipo='".$cuenta_debi['TIPO']."',
									nivel=".$cuenta_debi['NIVEL'].",
									modificable='".$cuenta_debi['MODIFICABLE']."',
									casillerosri='".$cuenta_debi['CASILLEROSRI']."',
									proyeccion='".$cuenta_debi['PROYECCION']."',
									flujo_caja='".$cuenta_debi['FLUJO_CAJA']."'
								WHERE
									cod_empresa=".$cuenta_debi['COD_EMPRESA']."
									and empresa='".$i_empresa."' 
									and id_plan_cuentas=".$cuenta_debi['ID_PLAN_DE_CUENTA'].";";
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function sincronizaProductos($i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    $w_datos_conexion = new conexionBDD();
    $check_sql = "SELECT cd_host,
                         cd_puerto,
                         cd_usuario,
                         cd_password,
                         cd_base  
                   FROM  del_conexion_debi 
                   WHERE cd_empresa='".$i_empresa."';";
     
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


    if(isset($rs[0][0])){
        $w_datos_conexion->server = $rs[0][0];
        $w_datos_conexion->port = $rs[0][1];
        $w_datos_conexion->user = $rs[0][2];
        $w_datos_conexion->pass = $rs[0][3];
        $w_datos_conexion->bdd = $rs[0][4];
    }

    $w_respuesta= $this->listaProductosDebi($i_empresa,$w_datos_conexion);
    if($w_respuesta['error']=='0'){
        $w_lista_productos=$w_respuesta['datos'];
        foreach($w_lista_productos as $producto_debi){
            
            $check_sql="SELECT count(*) 
                        FROM grupo_producto_venta 
                        WHERE cod_empresa=".$producto_debi['COD_EMPRESA']."
                        and empresa='".$i_empresa."'
                        and id_grupos_productos_ventas=".$producto_debi['ID_GRUPOS_PRODUCTOS_VENTAS'].";";
             
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 

            
            if($rs_empresa[0][0]==0){

                $insert_sql="INSERT INTO	grupo_producto_venta(
                                id_grupos_productos_ventas,
                                cod_empresa,
                                nombre,
                                id_impuesto,
                                cuenta,
                                bienesserviciosactivos,
                                iva,
                                reembolsa,
                                idcentralcostos,
                                iddetallecentral,
                                idsubdetalle,
                                cod_principal,
                                codigo_ice,
                                cod_auxiliar,
                                por_ice,
                                atributo,
                                descripcion,
                                valor,
                                valor_botella,
                                empresa) 
                            VALUES
                                (
                                     ".$producto_debi['ID_GRUPOS_PRODUCTOS_VENTAS'].",
                                     ".$producto_debi['COD_EMPRESA'].",
                                    '".$producto_debi['NOMBRE']."',
                                     ".$producto_debi['ID_IMPUESTO'].",
                                     ".$producto_debi['CUENTA'].",
                                    '".$producto_debi['BIENESSERVICIOSACTIVOS']."',
                                     ".$producto_debi['IVA'].",
                                    '".$producto_debi['REEMBOLSA']."',
                                     ".$producto_debi['IDCENTRALCOSTOS'].",
                                     ".$producto_debi['IDDETALLECENTRAL'].",
                                     ".$producto_debi['IDSUBDETALLE'].",
                                    '".$producto_debi['COD_PRINCIPAL']."',
                                    '".$producto_debi['CODIGO_ICE']."',
                                    '".$producto_debi['COD_AUXILIAR']."',
                                     ".$producto_debi['POR_ICE'].",
                                    '".$producto_debi['ATRIBUTO']."',
                                    '".$producto_debi['DESCRIPCION']."',
                                     ".$producto_debi['VALOR'].",
                                     ".$producto_debi['VALOR_BOTELLA'].",
                                    '".$i_empresa."'
                                )";
                
     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
                      

            }else{
				$update_sql="UPDATE grupo_producto_venta 
								SET

									nombre='".$producto_debi['NOMBRE']."',
									id_impuesto=".$producto_debi['ID_IMPUESTO'].",
									cuenta=".$producto_debi['CUENTA'].",
									bienesserviciosactivos='".$producto_debi['BIENESSERVICIOSACTIVOS']."',
									iva=".$producto_debi['IVA'].",
									reembolsa='".$producto_debi['REEMBOLSA']."',
									idcentralcostos=".$producto_debi['IDCENTRALCOSTOS'].",
									iddetallecentral=".$producto_debi['IDDETALLECENTRAL'].",
									idsubdetalle=".$producto_debi['IDSUBDETALLE'].",
									cod_principal='".$producto_debi['COD_PRINCIPAL']."',
									codigo_ice='".$producto_debi['CODIGO_ICE']."',
									cod_auxiliar='".$producto_debi['COD_AUXILIAR']."',
									por_ice=".$producto_debi['POR_ICE'].",
									atributo='".$producto_debi['ATRIBUTO']."',
									descripcion='".$producto_debi['DESCRIPCION']."',
									valor=".$producto_debi['VALOR'].",
									valor_botella=".$producto_debi['VALOR_BOTELLA']."
							WHERE cod_empresa=".$producto_debi['COD_EMPRESA']."
                        	and empresa='".$i_empresa."'
                        	and id_grupos_productos_ventas=".$producto_debi['ID_GRUPOS_PRODUCTOS_VENTAS'].";";
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function sincronizaTesorerias($i_empresa){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
    $w_datos_conexion = new conexionBDD();
    $check_sql = "SELECT cd_host,
                         cd_puerto,
                         cd_usuario,
                         cd_password,
                         cd_base  
                   FROM  del_conexion_debi 
                   WHERE cd_empresa='".$i_empresa."';";
     
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 


    if(isset($rs[0][0])){
        $w_datos_conexion->server = $rs[0][0];
        $w_datos_conexion->port = $rs[0][1];
        $w_datos_conexion->user = $rs[0][2];
        $w_datos_conexion->pass = $rs[0][3];
        $w_datos_conexion->bdd = $rs[0][4];
    }

    $w_respuesta= $this->listaTesorerias($i_empresa,$w_datos_conexion);
    if($w_respuesta['error']=='0'){
        $w_lista_tesorerias=$w_respuesta['datos'];
        foreach($w_lista_tesorerias as $tesoreria_debi){
            $check_sql="SELECT count(*) 
                        FROM tesoreria 
                        WHERE cod_empresa=".$tesoreria_debi['COD_EMPRESA']."
                        and empresa='".$i_empresa."'
                        and idtesoreria=".$tesoreria_debi['IDTESORERIA'].";";
             
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs_empresa = false;
          $rs_empresa_erro = $this->Db->ErrorMsg();
      } 

            if($rs_empresa[0][0]==0){

                $insert_sql="INSERT INTO tesoreria(
                                    idtesoreria,
                                    cod_empresa,
                                    nombre,
                                    tipo,
                                    id_plan_de_cuentas,
                                    comprasventas,
                                    abre_caja,
                                    transferir_caja,
                                    empresa) 
                             VALUES (
                                         ".$tesoreria_debi['IDTESORERIA'].",
                                         ".$tesoreria_debi['COD_EMPRESA'].",
                                        '".$tesoreria_debi['NOMBRE']."',
                                        '".$tesoreria_debi['TIPO']."',
                                         ".$tesoreria_debi['ID_PLAN_DE_CUENTA'].",
                                        '".$tesoreria_debi['COMPRASVENTAS']."',
                                        '".$tesoreria_debi['ABRE_CAJA']."',
                                        '".$tesoreria_debi['TRANSFERIR_CAJA']."',
                                        '".$i_empresa."'
                                    );";
                
     $nm_select = $insert_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
                      

            }else{
				$update_sql="UPDATE	tesoreria 
								SET
									nombre='".$tesoreria_debi['NOMBRE']."',
									tipo='".$tesoreria_debi['TIPO']."',
									id_plan_de_cuentas= ".$tesoreria_debi['ID_PLAN_DE_CUENTA'].",
									comprasventas='".$tesoreria_debi['COMPRASVENTAS']."',
									abre_caja='".$tesoreria_debi['ABRE_CAJA']."',
									transferir_caja='".$tesoreria_debi['TRANSFERIR_CAJA']."'
								WHERE cod_empresa=".$tesoreria_debi['COD_EMPRESA']."
								and empresa='".$i_empresa."'
								and idtesoreria=".$tesoreria_debi['IDTESORERIA'].";";
				
     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             if ($this->Ini->sc_tem_trans_banco)
             {
                 $this->Db->RollbackTrans(); 
                 $this->Ini->sc_tem_trans_banco = false;
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function obtener_factura ($var_autorizacion){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='01'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoFactura=$xml->infoFactura;
				$infoFactura=array();
				$infoFactura['fechaEmision']=				(String)$contenido_infoFactura->fechaEmision;
				$infoFactura['dirEstablecimiento']=			(String)$contenido_infoFactura->dirEstablecimiento;
				$infoFactura['obligadoContabilidad']=		(String)$contenido_infoFactura->obligadoContabilidad;
				$infoFactura['tipoIdentificacionComprador']=(String)$contenido_infoFactura->tipoIdentificacionComprador;
				$infoFactura['razonSocialComprador']=		(String)$contenido_infoFactura->razonSocialComprador;
				$infoFactura['identificacionComprador']=	(String)$contenido_infoFactura->identificacionComprador;
				$infoFactura['direccionComprador']=			(String)$contenido_infoFactura->direccionComprador;
				$infoFactura['totalSinImpuestos']=			(String)$contenido_infoFactura->totalSinImpuestos;
				$infoFactura['totalDescuento']=				(String)$contenido_infoFactura->totalDescuento;
				$impuestos = array();
				foreach ($contenido_infoFactura->totalConImpuestos->totalImpuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoFactura['totalConImpuestos']=$impuestos;
				$infoFactura['propina']=		(String)$contenido_infoFactura->propina;
				$infoFactura['importeTotal']=	(String)$contenido_infoFactura->importeTotal;
				$infoFactura['moneda']=			(String)$contenido_infoFactura->moneda;
				$pagos = array();
				foreach ($contenido_infoFactura->pagos->pago as $item) {
					$pago=array();
					$pago['formaPago']=     (String)$item->formaPago;
					$pago['total']=  		(String)$item->total;
					$pago['plazo']=     	(String)$item->plazo;
					$pago['unidadTiempo']=  (String)$item->unidadTiempo;
					$pagos[]=$pago;
					unset($pago);
				}
				$infoFactura['pagos']=$pagos;
				$comprobante['infoFactura']=$infoFactura;
				$detalles=array();
				$contenido_detalles=$xml->detalles;
				foreach($contenido_detalles->detalle as $item){
					$detalle=array();
					$detalle['codigoPrincipal']=		(String)$item->codigoPrincipal;
					$detalle['codigoAuxiliar']=			(String)$item->codigoAuxiliar;
					$detalle['descripcion']=			(String)$item->descripcion;
					$detalle['cantidad']=				(String)$item->cantidad;
					$detalle['precioUnitario']=			(String)$item->precioUnitario;
					$detalle['precioSinSubsidio']=		(String)$item->precioSinSubsidio;
					$detalle['descuento']=				(String)$item->descuento;
					$detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
					$impuestos = array();
					foreach ($item->impuestos->impuesto as $item_impuesto) {
						$impuesto=array();
						$impuesto['codigo']=            (String)$item_impuesto->codigo;
						$impuesto['codigoPorcentaje']=  (String)$item_impuesto->codigoPorcentaje;
						$impuesto['tarifa']=            (String)$item_impuesto->tarifa;
						$impuesto['baseImponible']=     (String)$item_impuesto->baseImponible;
						$impuesto['valor']=             (String)$item_impuesto->valor;
						$impuestos[]=$impuesto;
						unset($impuesto);
					}

					$detalle['impuestos']=$impuestos;
					$detalles[]=$detalle;
					unset($detalle);
				}
				$comprobante['detalles']=$detalles;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function obtener_notaCredito($var_autorizacion){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='04'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoNotaCredito=$xml->infoNotaCredito;
				$infoNotaCredito=array();
				$infoNotaCredito['fechaEmision']=				(String)$contenido_infoNotaCredito->fechaEmision;
				$infoNotaCredito['dirEstablecimiento']=			(String)$contenido_infoNotaCredito->dirEstablecimiento;
				$infoNotaCredito['tipoIdentificacionComprador']=(String)$contenido_infoNotaCredito->tipoIdentificacionComprador;
				$infoNotaCredito['razonSocialComprador']=		(String)$contenido_infoNotaCredito->razonSocialComprador;
				$infoNotaCredito['identificacionComprador']=	(String)$contenido_infoNotaCredito->identificacionComprador;
				$infoNotaCredito['direccionComprador']=			(String)$contenido_infoNotaCredito->direccionComprador;
				$infoNotaCredito['obligadoContabilidad']=		(String)$contenido_infoNotaCredito->obligadoContabilidad;
				$infoNotaCredito['contribuyenteEspecial']=		(String)$contenido_infoNotaCredito->contribuyenteEspecial;
				$infoNotaCredito['rise']=               		(String)$contenido_infoNotaCredito->rise;
				$infoNotaCredito['codDocModificado']=           (String)$contenido_infoNotaCredito->codDocModificado;
				$infoNotaCredito['numDocModificado']=           (String)$contenido_infoNotaCredito->numDocModificado;
				$infoNotaCredito['fechaEmisionDocSustento']=    (String)$contenido_infoNotaCredito->fechaEmisionDocSustento;
				$infoNotaCredito['totalSinImpuestos']=			(String)$contenido_infoNotaCredito->totalSinImpuestos;
				$infoNotaCredito['valorModificacion']=			(String)$contenido_infoNotaCredito->valorModificacion;
				$infoNotaCredito['moneda']=			            (String)$contenido_infoNotaCredito->moneda;
				$impuestos = array();
				foreach ($contenido_infoNotaCredito->totalConImpuestos->totalImpuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoNotaCredito['totalConImpuestos']=$impuestos;
				$infoNotaCredito['motivo']=		(String)$contenido_infoNotaCredito->motivo;
				$comprobante['infoNotaCredito']=$infoNotaCredito;

				$detalles=array();
				$contenido_detalles=$xml->detalles;
				foreach($contenido_detalles->detalle as $item){
					$detalle=array();
					$detalle['codigoInterno']=	    	(String)$item->codigoInterno;
					$detalle['codigoAdicional']=		(String)$item->codigoAdicional;
					$detalle['descripcion']=			(String)$item->descripcion;
					$detalle['cantidad']=				(String)$item->cantidad;
					$detalle['precioUnitario']=			(String)$item->precioUnitario;
					$detalle['descuento']=				(String)$item->descuento;
					$detalle['precioTotalSinImpuesto']=	(String)$item->precioTotalSinImpuesto;
					$impuestos = array();
					foreach ($item->impuestos->impuesto as $item_impuesto) {
						$impuesto=array();
						$impuesto['codigo']=            (String)$item_impuesto->codigo;
						$impuesto['codigoPorcentaje']=  (String)$item_impuesto->codigoPorcentaje;
						$impuesto['tarifa']=            (String)$item_impuesto->tarifa;
						$impuesto['baseImponible']=     (String)$item_impuesto->baseImponible;
						$impuesto['valor']=             (String)$item_impuesto->valor;
						$impuestos[]=$impuesto;
						unset($impuesto);
					}
					$detalle['impuestos']=$impuestos;
					$detalles[]=$detalle;
					unset($detalle);
				}
				$comprobante['detalles']=$detalles;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}
			}       
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function obtener_notaDebito($var_autorizacion){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='05'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoNotaDebito=$xml->infoNotaDebito;
				$infoNotaDebito=array();
				$infoNotaDebito['fechaEmision']=			    (String)$contenido_infoNotaDebito->fechaEmision;
				$infoNotaDebito['dirEstablecimiento']=			(String)$contenido_infoNotaDebito->dirEstablecimiento;
				$infoNotaDebito['tipoIdentificacionComprador']= (String)$contenido_infoNotaDebito->tipoIdentificacionComprador;
				$infoNotaDebito['razonSocialComprador']=		(String)$contenido_infoNotaDebito->razonSocialComprador;
				$infoNotaDebito['identificacionComprador']=	    (String)$contenido_infoNotaDebito->identificacionComprador;
				$infoNotaDebito['direccionComprador']=			(String)$contenido_infoNotaDebito->direccionComprador;
				$infoNotaDebito['contribuyenteEspecial']=		(String)$contenido_infoNotaDebito->contribuyenteEspecial;
				$infoNotaDebito['obligadoContabilidad']=		(String)$contenido_infoNotaDebito->obligadoContabilidad;
				$infoNotaDebito['codDocModificado']=            (String)$contenido_infoNotaDebito->codDocModificado;
				$infoNotaDebito['numDocModificado']=            (String)$contenido_infoNotaDebito->numDocModificado;
				$infoNotaDebito['fechaEmisionDocSustento']=     (String)$contenido_infoNotaDebito->fechaEmisionDocSustento;
				$infoNotaDebito['totalSinImpuestos']=			(String)$contenido_infoNotaDebito->totalSinImpuestos;

				$impuestos = array();
				foreach ($contenido_infoNotaDebito->impuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=            (String)$item->codigo;
					$impuesto['codigoPorcentaje']=  (String)$item->codigoPorcentaje;
					$impuesto['tarifa']=  (String)$item->tarifa;
					$impuesto['baseImponible']=     (String)$item->baseImponible;
					$impuesto['valor']=             (String)$item->valor;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$infoNotaDebito['impuestos']=$impuestos;
				$infoNotaDebito['valorTotal']=	(String)$contenido_infoNotaDebito->valorTotal;

				$pagos = array();
				foreach ($contenido_infoNotaDebito->pagos->pago as $item) {
					$pago=array();
					$pago['formaPago']=     (String)$item->formaPago;
					$pago['total']=  		(String)$item->total;
					$pago['plazo']=     	(String)$item->plazo;
					$pago['unidadTiempo']=  (String)$item->unidadTiempo;
					$pagos[]=$pago;
					unset($pago);
				}
				$infoNotaDebito['pagos']=$pagos;
				$comprobante['infoNotaDebito']=$infoNotaDebito;

				$motivos=array();
				$contenido_motivos=$xml->motivos;
				foreach($contenido_motivos->motivo as $item){
					$motivo=array();
					$motivo['razon']= (String)$item->razon;
					$motivo['valor']=	(String)$item->valor;
					$motivos[]=$motivo;
					unset($motivo);
				}
				$comprobante['motivos']=$motivos;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function obtener_retencion($var_autorizacion){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
		$check_sql = "SELECT sp_busca_parametro ('RUTA_FIRMADOR','http://localhost:8085/MasterOffline/ProcesarComprobanteElectronico?wsdl')";
		 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                        $rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $rs = false;
          $rs_erro = $this->Db->ErrorMsg();
      } 

		if (isset($rs[0][0])){
		   $ruta_firmador=$rs[0][0];
		}
		$procesarComprobanteElectronico = new ProcesarComprobanteElectronico($wsdl = $ruta_firmador);
		$obtenerComprobante = new obtenerComprobante();
		$obtenerComprobante->claveAcceso = $var_autorizacion;
		$obtenerComprobante->ambiente = substr($var_autorizacion,23,1) ;  
		$tipo_comprobante=substr($var_autorizacion,8,2);
		$comprobante =array();
		if($tipo_comprobante=='07'){
			$res = $procesarComprobanteElectronico->obtenerComprobante($obtenerComprobante);
			if($res->return->estadoComprobante=='AUTORIZADO'){
				$xml = new SimpleXMLElement($res->return->comprobante);

				$contenido_infoTributaria=$xml->infoTributaria;
				$infotributaria=array();
				$infotributaria['ambiente']=		(String)$contenido_infoTributaria->ambiente;
				$infotributaria['tipoEmision']=		(String)$contenido_infoTributaria->tipoEmision;
				$infotributaria['razonSocial']=		(String)$contenido_infoTributaria->razonSocial;
				$infotributaria['nombreComercial']=	(String)$contenido_infoTributaria->nombreComercial;
				$infotributaria['ruc']=				(String)$contenido_infoTributaria->ruc;
				$infotributaria['claveAcceso']=		(String)$contenido_infoTributaria->claveAcceso;
				$infotributaria['codDoc']=			(String)$contenido_infoTributaria->codDoc;
				$infotributaria['estab']=			(String)$contenido_infoTributaria->estab;
				$infotributaria['ptoEmi']=			(String)$contenido_infoTributaria->ptoEmi;
				$infotributaria['secuencial']=		(String)$contenido_infoTributaria->secuencial;
				$infotributaria['dirMatriz']=		(String)$contenido_infoTributaria->dirMatriz;
				$comprobante['infoTributaria']=$infotributaria;

				$contenido_infoCompRetencion=$xml->infoCompRetencion;
				$infoCompRetencion=array();
				$infoCompRetencion['fechaEmision']=				(String)$contenido_infoCompRetencion->fechaEmision;
				$infoCompRetencion['dirEstablecimiento']=			(String)$contenido_infoCompRetencion->dirEstablecimiento;
				$infoCompRetencion['obligadoContabilidad']=		(String)$contenido_infoCompRetencion->obligadoContabilidad;
				$infoCompRetencion['tipoIdentificacionSujetoRetenido']=(String)$contenido_infoCompRetencion->tipoIdentificacionSujetoRetenido;
				$infoCompRetencion['razonSocialSujetoRetenido']=		(String)$contenido_infoCompRetencion->razonSocialSujetoRetenido;
				$infoCompRetencion['identificacionSujetoRetenido']=	(String)$contenido_infoCompRetencion->identificacionSujetoRetenido;
				$infoCompRetencion['periodoFiscal']=			(String)$contenido_infoCompRetencion->periodoFiscal;
				$comprobante['infoCompRetencion']=$infoCompRetencion;

				$impuestos = array();
				foreach ($xml->impuestos->impuesto as $item) {
					$impuesto=array();
					$impuesto['codigo']=                    (String)$item->codigo;
					$impuesto['codigoRetencion']=           (String)$item->codigoRetencion;
					$impuesto['baseImponible']=             (String)$item->baseImponible;
					$impuesto['porcentajeRetener']=         (String)$item->porcentajeRetener;
					$impuesto['valorRetenido']=             (String)$item->valorRetenido;
					$impuesto['codDocSustento']=            (String)$item->codDocSustento;
					$impuesto['numDocSustento']=            (String)$item->numDocSustento;
					$impuesto['fechaEmisionDocSustento']=   (String)$item->fechaEmisionDocSustento;
					$impuestos[]=$impuesto;
					unset($impuesto);
				}
				$comprobante['impuestos']=$impuestos;

				$contenido_infoAdicional=$xml->infoAdicional;
				if(isset($contenido_infoAdicional[0])){
					$infoAdicional=array();
					foreach($contenido_infoAdicional->campoAdicional as $item){
						$campoAdicional=array();
						$atributos_campoAdicional=$item->attributes();
						$campoAdicional['campo']=	(String)$atributos_campoAdicional->nombre;
						$campoAdicional['valor']=	(String)$item;
						$infoAdicional[]=$campoAdicional;
						unset($campoAdicional);
					}
					$comprobante['infoAdicional']=$infoAdicional;
				}    
			}
		}	
		return $comprobante;
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function esCedula($ced) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
	$dig = array ();
	if (strlen ( trim ( $ced ) ) == 10) {
		for($i = 0; $i <= 9; $i ++) {
			$dig [$i] = intval ( substr ( $ced, $i, 1 ) );
		}
		$sum = 0;
		for($i = 0; $i <= 8; $i ++) {
			$par = 0;
			if ($i % 2 != 0)
				$sum = $sum + $dig [$i];
			else {
				if (2 * $dig [$i] > 9)
					$par = 2 * $dig [$i] - 9;
				else
					$par = 2 * $dig [$i];
				$sum = $sum + $par;
			}
		}
		$i = 10;
		while ( $i < $sum ) {
			$i = $i + 10;
		}
		if (substr ( $ced, 0, 2 ) != "00") {
			if ($i - $sum == $dig [9])
				return 1;
			else
				return 0;
		} else
			return 0;
	}else{
		return 0;
	}	

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function EsRUC_natural($identificacion) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
	$dig = array ();
	
	if (strlen ( trim ( $identificacion ) ) == 13) {
		for($i = 0; $i <= 9; $i ++) {
			$dig [$i] = intval ( substr ( $identificacion, $i, 1 ) );
		}
		$sum = 0;
		for($i = 0; $i <= 8; $i ++) {
			$par = 0;
			if ($i % 2 != 0)
				$sum = $sum + $dig [$i];
			else {
				if (2 * $dig [$i] > 9)
					$par = 2 * $dig [$i] - 9;
				else
					$par = 2 * $dig [$i];
				$sum = $sum + $par;
			}
		}
		$i = 10;
		while ( $i < $sum ) {
			$i = $i + 10;
		}
		if (substr ( $identificacion, 0, 2 ) != "00" and substr ( $identificacion, 10, 3 ) == "001") {
			if ($i - $sum == $dig [9])
				return 1;
			else
				return 0;
		} else
			return 0;
	} else
		return 0;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function EsRUC_juridico($identificacion) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
	
	return 1;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function EsRUC_Publica($identificacion) {
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
	$Dig = array ();
	$Prod = array ();
	$Residuo = 0;
	$digito = 0;
	if (strlen ( trim ( $identificacion ) ) == 13) {
		for($i = 1; $i <= 10; $i ++)
			$Dig [$i] = intval ( substr ( $identificacion, $i - 1, 1 ) );
		
		$Prod [1] = $Dig [1] * 3;
		$Prod [2] = $Dig [2] * 2;
		$Prod [3] = $Dig [3] * 7;
		$Prod [4] = $Dig [4] * 6;
		$Prod [5] = $Dig [5] * 5;
		$Prod [6] = $Dig [6] * 4;
		$Prod [7] = $Dig [7] * 3;
		$Prod [8] = $Dig [8] * 2;
		$Prod [9] = $Dig [9] * 1;
		$Sum = 0;
		for($i = 1; $i <= 9; $i ++)
			$Sum = $Sum + $Prod [$i];
		$Residuo = $Sum % 11;
		$digito = 11 - $Residuo;
		if ($Residuo == 0)
			$digito = 0;
		
		if (substr ( $identificacion, 0, 2 ) != "00" and substr ( $identificacion, 10, 3 ) == "001") {
			if ($digito == $Dig [10])
				return 1;
			else
				return 0;
		} else
			return 0;
	} else
		return 0;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function validar_esRuc($ced){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
	if(strlen ( trim ( $ced ) ) == 13){
		if(intval ( substr ( $ced, 2, 1 ) )< 6){
			$validador=$this->EsRUC_natural($ced);	
		}else{
			if(intval ( substr ( $ced, 2, 1 ) )== 6){
				$validador=$this->EsRUC_Publica($ced);
				if($validador==0){
					$validador=$this->EsRUC_natural($ced);	
				}
			}else{
				if(intval ( substr ( $ced, 2, 1 ) )== 9){
					$validador=$this->EsRUC_juridico($ced);
					if($validador==0){
						$validador=1;	
					}
				}else{
					$validador=0;
				}	
			}
		}
	}else{
		$validador=0;
	}
	
	return $validador;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
function validar_CedulaRuc($ced){
$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'on';
  
	if(strlen ( trim ( $ced ) ) == 10){
		$validador=$this->esCedula($ced);
	}elseif(strlen ( trim ( $ced ) ) == 13){
		if(intval ( substr ( $ced, 2, 1 ) )< 6){
			$validador=$this->EsRUC_natural($ced);	
		}else{
			if(intval ( substr ( $ced, 2, 1 ) )== 6){
				$validador=$this->EsRUC_Publica($ced);
				if($validador==0){
					$validador=$this->EsRUC_natural($ced);	
				}
			}else{
				if(intval ( substr ( $ced, 2, 1 ) )== 9){
					$validador=$this->EsRUC_juridico($ced);
				}else{
					$validador=0;
				}	
			}
		}
	}else{
		$validador=0;
	}
	
	return $validador;

$_SESSION['scriptcase']['grid_del_nota_credito_ind']['contr_erro'] = 'off';
}
}

?>
