<?php
//
class form_jap_registro_deuda_lectura_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = false;
   var $classes_100perc_fields = array();
   var $close_modal_after_insert = false;
   var $NM_ajax_flag    = false;
   var $NM_ajax_opcao   = '';
   var $NM_ajax_retorno = '';
   var $NM_ajax_info    = array('result'            => '',
                                'param'             => array(),
                                'autoComp'          => '',
                                'rsSize'            => '',
                                'msgDisplay'        => '',
                                'errList'           => array(),
                                'fldList'           => array(),
                                'varList'           => array(),
                                'focus'             => '',
                                'navStatus'         => array(),
                                'navSummary'        => array(),
                                'navPage'           => array(),
                                'redir'             => array(),
                                'blockDisplay'      => array(),
                                'fieldDisplay'      => array(),
                                'fieldLabel'        => array(),
                                'readOnly'          => array(),
                                'btnVars'           => array(),
                                'ajaxAlert'         => array(),
                                'ajaxMessage'       => array(),
                                'ajaxJavascript'    => array(),
                                'buttonDisplay'     => array(),
                                'buttonDisplayVert' => array(),
                                'calendarReload'    => false,
                                'quickSearchRes'    => false,
                                'displayMsg'        => false,
                                'displayMsgTxt'     => '',
                                'dyn_search'        => array(),
                                'empty_filter'      => '',
                                'event_field'       => '',
                                'fieldsWithErrors'  => array(),
                               );
   var $NM_ajax_force_values = false;
   var $Nav_permite_ava     = true;
   var $Nav_permite_ret     = true;
   var $Apl_com_erro        = false;
   var $app_is_initializing = false;
   var $Ini;
   var $Erro;
   var $Db;
   var $des_id_;
   var $des_escenario_;
   var $des_propietario_;
   var $des_propietario__1;
   var $des_contrato_;
   var $des_contrato__1;
   var $des_lectura_anterior_;
   var $des_lectura_actual_;
   var $des_consumo_base_;
   var $des_consumo_excedente_;
   var $des_valor_base_;
   var $des_valor_excedente_;
   var $des_total_;
   var $des_operacion_;
   var $des_numero_medidor_;
   var $des_consumo_;
   var $des_orden_;
   var $des_estado_;
   var $des_ruta_;
   var $des_revisar_;
   var $des_revisar__1;
   var $des_registra_danio_;
   var $des_registra_danio__1;
   var $des_contabilizado_;
   var $des_imagen_lectura_;
   var $des_imagen_lectura__scfile_name;
   var $des_imagen_lectura__ul_name;
   var $des_imagen_lectura__scfile_type;
   var $des_imagen_lectura__ul_type;
   var $des_imagen_lectura__limpa;
   var $des_imagen_lectura__salva;
   var $out_des_imagen_lectura_;
   var $out1_des_imagen_lectura_;
   var $des_numero_censo_;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $nmgp_clone;
   var $nmgp_return_img = array();
   var $nmgp_dados_form = array();
   var $nmgp_dados_select = array();
   var $nm_location;
   var $nm_flag_iframe;
   var $nm_flag_saida_novo;
   var $nmgp_botoes = array();
   var $nmgp_url_saida;
   var $nmgp_form_show;
   var $nmgp_form_empty;
   var $nmgp_cmp_readonly = array();
   var $nmgp_cmp_hidden   = array();
   var $Field_no_validate  = array();
   var $sc_teve_incl = false;
   var $sc_teve_excl = false;
   var $sc_teve_alt  = false;
   var $sc_after_all_insert = false;
   var $sc_after_all_update = false;
   var $sc_after_all_delete = false;
   var $sc_max_reg = 50; 
   var $sc_max_reg_incl = 50; 
   var $form_vert_form_jap_registro_deuda_lectura = array();
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = true;
   var $Grid_editavel  = false;
   var $url_webhelp = '';
   var $nm_todas_criticas;
   var $Campos_Mens_erro;
   var $nm_new_label = array();
   var $record_insert_ok = false;
   var $record_delete_ok = false;
   var $NM_case_insensitive;
//
//----- 
   function ini_controle()
   {
        global $nm_url_saida, $teste_validade, $script_case_init, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['des_consumo_']))
          {
              $this->des_consumo_ = $this->NM_ajax_info['param']['des_consumo_'];
          }
          if (isset($this->NM_ajax_info['param']['des_consumo_base_']))
          {
              $this->des_consumo_base_ = $this->NM_ajax_info['param']['des_consumo_base_'];
          }
          if (isset($this->NM_ajax_info['param']['des_consumo_excedente_']))
          {
              $this->des_consumo_excedente_ = $this->NM_ajax_info['param']['des_consumo_excedente_'];
          }
          if (isset($this->NM_ajax_info['param']['des_contabilizado_']))
          {
              $this->des_contabilizado_ = $this->NM_ajax_info['param']['des_contabilizado_'];
          }
          if (isset($this->NM_ajax_info['param']['des_contrato_']))
          {
              $this->des_contrato_ = $this->NM_ajax_info['param']['des_contrato_'];
          }
          if (isset($this->NM_ajax_info['param']['des_id_']))
          {
              $this->des_id_ = $this->NM_ajax_info['param']['des_id_'];
          }
          if (isset($this->NM_ajax_info['param']['des_imagen_lectura_']))
          {
              $this->des_imagen_lectura_ = $this->NM_ajax_info['param']['des_imagen_lectura_'];
          }
          if (isset($this->NM_ajax_info['param']['des_imagen_lectura__limpa']))
          {
              $this->des_imagen_lectura__limpa = $this->NM_ajax_info['param']['des_imagen_lectura__limpa'];
          }
          if (isset($this->NM_ajax_info['param']['des_imagen_lectura__salva']))
          {
              $this->des_imagen_lectura__salva = $this->NM_ajax_info['param']['des_imagen_lectura__salva'];
          }
          if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name']))
          {
              $this->des_imagen_lectura__ul_name = $this->NM_ajax_info['param']['des_imagen_lectura__ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_type']))
          {
              $this->des_imagen_lectura__ul_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['des_lectura_actual_']))
          {
              $this->des_lectura_actual_ = $this->NM_ajax_info['param']['des_lectura_actual_'];
          }
          if (isset($this->NM_ajax_info['param']['des_lectura_anterior_']))
          {
              $this->des_lectura_anterior_ = $this->NM_ajax_info['param']['des_lectura_anterior_'];
          }
          if (isset($this->NM_ajax_info['param']['des_numero_censo_']))
          {
              $this->des_numero_censo_ = $this->NM_ajax_info['param']['des_numero_censo_'];
          }
          if (isset($this->NM_ajax_info['param']['des_numero_medidor_']))
          {
              $this->des_numero_medidor_ = $this->NM_ajax_info['param']['des_numero_medidor_'];
          }
          if (isset($this->NM_ajax_info['param']['des_orden_']))
          {
              $this->des_orden_ = $this->NM_ajax_info['param']['des_orden_'];
          }
          if (isset($this->NM_ajax_info['param']['des_propietario_']))
          {
              $this->des_propietario_ = $this->NM_ajax_info['param']['des_propietario_'];
          }
          if (isset($this->NM_ajax_info['param']['des_registra_danio_']))
          {
              $this->des_registra_danio_ = $this->NM_ajax_info['param']['des_registra_danio_'];
          }
          if (isset($this->NM_ajax_info['param']['des_revisar_']))
          {
              $this->des_revisar_ = $this->NM_ajax_info['param']['des_revisar_'];
          }
          if (isset($this->NM_ajax_info['param']['des_total_']))
          {
              $this->des_total_ = $this->NM_ajax_info['param']['des_total_'];
          }
          if (isset($this->NM_ajax_info['param']['nm_form_submit']))
          {
              $this->nm_form_submit = $this->NM_ajax_info['param']['nm_form_submit'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ancora']))
          {
              $this->nmgp_ancora = $this->NM_ajax_info['param']['nmgp_ancora'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_arg_dyn_search']))
          {
              $this->nmgp_arg_dyn_search = $this->NM_ajax_info['param']['nmgp_arg_dyn_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_num_form']))
          {
              $this->nmgp_num_form = $this->NM_ajax_info['param']['nmgp_num_form'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_opcao']))
          {
              $this->nmgp_opcao = $this->NM_ajax_info['param']['nmgp_opcao'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_ordem']))
          {
              $this->nmgp_ordem = $this->NM_ajax_info['param']['nmgp_ordem'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_parms']))
          {
              $this->nmgp_parms = $this->NM_ajax_info['param']['nmgp_parms'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_row']))
          {
              $this->nmgp_refresh_row = $this->NM_ajax_info['param']['nmgp_refresh_row'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['sc_clone']))
          {
              $this->sc_clone = $this->NM_ajax_info['param']['sc_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_clone']))
          {
              $this->sc_seq_clone = $this->NM_ajax_info['param']['sc_seq_clone'];
          }
          if (isset($this->NM_ajax_info['param']['sc_seq_vert']))
          {
              $this->sc_seq_vert = $this->NM_ajax_info['param']['sc_seq_vert'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->nmgp_refresh_fields))
          {
              $this->nmgp_refresh_fields = explode('_#fld#_', $this->nmgp_refresh_fields);
              $this->nmgp_opcao          = 'recarga';
          }
          if (!isset($this->nmgp_refresh_row))
          {
              $this->nmgp_refresh_row = '';
          }
      }

      $this->scSajaxReservedWords = array('rs', 'rst', 'rsrnd', 'rsargs');
      $this->sc_conv_var = array();
      $this->sc_conv_var['des_id'] = "des_id_";
      $this->sc_conv_var['des_escenario'] = "des_escenario_";
      $this->sc_conv_var['des_propietario'] = "des_propietario_";
      $this->sc_conv_var['des_contrato'] = "des_contrato_";
      $this->sc_conv_var['des_lectura_anterior'] = "des_lectura_anterior_";
      $this->sc_conv_var['des_lectura_actual'] = "des_lectura_actual_";
      $this->sc_conv_var['des_consumo_base'] = "des_consumo_base_";
      $this->sc_conv_var['des_consumo_excedente'] = "des_consumo_excedente_";
      $this->sc_conv_var['des_valor_base'] = "des_valor_base_";
      $this->sc_conv_var['des_valor_excedente'] = "des_valor_excedente_";
      $this->sc_conv_var['des_total'] = "des_total_";
      $this->sc_conv_var['des_operacion'] = "des_operacion_";
      $this->sc_conv_var['des_numero_medidor'] = "des_numero_medidor_";
      $this->sc_conv_var['des_consumo'] = "des_consumo_";
      $this->sc_conv_var['des_orden'] = "des_orden_";
      $this->sc_conv_var['des_estado'] = "des_estado_";
      $this->sc_conv_var['des_ruta'] = "des_ruta_";
      $this->sc_conv_var['des_revisar'] = "des_revisar_";
      $this->sc_conv_var['des_registra_danio'] = "des_registra_danio_";
      $this->sc_conv_var['des_contabilizado'] = "des_contabilizado_";
      $this->sc_conv_var['des_imagen_lectura'] = "des_imagen_lectura_";
      $this->sc_conv_var['des_numero_censo'] = "des_numero_censo_";
      if (isset($_POST['nmgp_opcao']) && ($_POST['nmgp_opcao'] == "ajax_add_dyn_search" || $_POST['nmgp_opcao'] == "ajax_ch_bi_dyn_search"))
      {
          ob_start();
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          ob_start();
      }
      if (!empty($_FILES))
      {
          foreach ($_FILES as $nmgp_campo => $nmgp_valores)
          {
               if (!in_array(strtolower($nmgp_campo), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_campo]))
                   {
                       $nmgp_campo = $this->sc_conv_var[$nmgp_campo];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_campo)]))
                   {
                       $nmgp_campo = $this->sc_conv_var[strtolower($nmgp_campo)];
                   }
               }
               $tmp_scfile_name     = $nmgp_campo . "_scfile_name";
               $tmp_scfile_type     = $nmgp_campo . "_scfile_type";
               $this->$nmgp_campo = is_array($nmgp_valores['tmp_name']) ? $nmgp_valores['tmp_name'][0] : $nmgp_valores['tmp_name'];
               $this->$tmp_scfile_type   = is_array($nmgp_valores['type'])     ? $nmgp_valores['type'][0]     : $nmgp_valores['type'];
               $this->$tmp_scfile_name   = is_array($nmgp_valores['name'])     ? $nmgp_valores['name'][0]     : $nmgp_valores['name'];
          }
      }
      $Sc_lig_md5 = false;
      if (!empty($_POST))
      {
          foreach ($_POST as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                      $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (!empty($_GET))
      {
          foreach ($_GET as $nmgp_var => $nmgp_val)
          {
               if (substr($nmgp_var, 0, 11) == "SC_glo_par_")
               {
                   $nmgp_var = substr($nmgp_var, 11);
                   $nmgp_val = $_SESSION[$nmgp_val];
               }
              if ($nmgp_var == "nmgp_parms" && substr($nmgp_val, 0, 8) == "@SC_par@")
              {
                  $SC_Ind_Val = explode("@SC_par@", $nmgp_val);
                  if (count($SC_Ind_Val) == 4 && isset($_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]]))
                  {
                      $nmgp_val = $_SESSION['sc_session'][$SC_Ind_Val[1]][$SC_Ind_Val[2]]['Lig_Md5'][$SC_Ind_Val[3]];
                      $Sc_lig_md5 = true;
                  }
                  else
                  {
                       $_SESSION['sc_session']['SC_parm_violation'] = true;
                  }
              }
               if (!in_array(strtolower($nmgp_var), $this->scSajaxReservedWords)) {
                   if (isset($this->sc_conv_var[$nmgp_var]))
                   {
                       $nmgp_var = $this->sc_conv_var[$nmgp_var];
                   }
                   elseif (isset($this->sc_conv_var[strtolower($nmgp_var)]))
                   {
                       $nmgp_var = $this->sc_conv_var[strtolower($nmgp_var)];
                   }
               }
               $nmgp_val = NM_decode_input($nmgp_val);
               $this->$nmgp_var = $nmgp_val;
          }
      }
      if (isset($SC_lig_apl_orig) && !$Sc_lig_md5 && (!isset($nmgp_parms) || ($nmgp_parms != "SC_null" && substr($nmgp_parms, 0, 8) != "OrScLink")))
      {
          $_SESSION['sc_session']['SC_parm_violation'] = true;
      }
      if (isset($nmgp_parms) && $nmgp_parms == "SC_null")
      {
          $nmgp_parms = "";
      }
      if (isset($this->var_escenario) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_escenario'] = $this->var_escenario;
      }
      if (isset($this->Igtech_RucEmpresa) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (isset($_POST["var_escenario"]) && isset($this->var_escenario)) 
      {
          $_SESSION['var_escenario'] = $this->var_escenario;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_GET["var_escenario"]) && isset($this->var_escenario)) 
      {
          $_SESSION['var_escenario'] = $this->var_escenario;
      }
      if (isset($_GET["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_GET["Igtech_RucEmpresa"]) && isset($_GET["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_GET["igtech_rucempresa"];
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
          $this->NM_where_filter = "";
          $tem_where_parms       = false;
          $nmgp_parms = str_replace("@aspass@", "'", $this->nmgp_parms);
          $nmgp_parms = str_replace("*scout", "?@?", $nmgp_parms);
          $nmgp_parms = str_replace("*scin", "?#?", $nmgp_parms);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $nmgp_parms);
          $todo  = explode("?@?", $todox);
          $ix = 0;
          while (!empty($todo[$ix]))
          {
             $cadapar = explode("?#?", $todo[$ix]);
             if (1 < sizeof($cadapar))
             {
                if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                {
                    $cadapar[0] = substr($cadapar[0], 11);
                    $cadapar[1] = $_SESSION[$cadapar[1]];
                }
                 if (isset($this->sc_conv_var[$cadapar[0]]))
                 {
                     $cadapar[0] = $this->sc_conv_var[$cadapar[0]];
                 }
                 elseif (isset($this->sc_conv_var[strtolower($cadapar[0])]))
                 {
                     $cadapar[0] = $this->sc_conv_var[strtolower($cadapar[0])];
                 }
                 nm_limpa_str_form_jap_registro_deuda_lectura($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 if ($cadapar[0] == "des_id_")
                 {
                     $this->NM_where_filter .= (empty($this->NM_where_filter)) ? "(" : " and ";
                     $this->NM_where_filter .= "des_id = " . $this->des_id_;
                     $this->has_where_params = true;
                     $tem_where_parms        = true;
                 }
                 elseif ($cadapar[0] == "NM_where_filter")
                 {
                     $this->has_where_params = false;
                     $tem_where_parms        = false;
                 }
             }
             $ix++;
          }
          if (isset($this->var_escenario)) 
          {
              $_SESSION['var_escenario'] = $this->var_escenario;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if ($tem_where_parms)
          {
              $this->NM_where_filter .= ")";
          }
          elseif (empty($this->NM_where_filter))
          {
              unset($this->NM_where_filter);
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_escenario)) 
          {
              $_SESSION['var_escenario'] = $this->var_escenario;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['parms']);
              $todo  = explode("?@?", $todox);
              $ix = 0;
              while (!empty($todo[$ix]))
              {
                 $cadapar = explode("?#?", $todo[$ix]);
                 if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                 {
                     $cadapar[0] = substr($cadapar[0], 11);
                     $cadapar[1] = $_SESSION[$cadapar[1]];
                 }
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
                 $ix++;
              }
          }
      } 

      if (isset($this->nm_run_menu) && $this->nm_run_menu == 1)
      { 
          $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_jap_registro_deuda_lectura_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_jap_registro_deuda_lectura']['upload_field_info']['des_imagen_lectura_'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_jap_registro_deuda_lectura',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/.+$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '50',
          'upload_file_width'  => '50',
          'upload_file_aspect' => 'N',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_jap_registro_deuda_lectura']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_jap_registro_deuda_lectura'];
          }
          elseif (isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']]))
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']] as $init => $resto)
              {
                  if ($this->Ini->sc_page == $init)
                  {
                      $this->sc_init_menu = $init;
                      break;
                  }
              }
          }
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_jap_registro_deuda_lectura']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_jap_registro_deuda_lectura']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_jap_registro_deuda_lectura') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_jap_registro_deuda_lectura']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " jap_deudas_escenario";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_jap_registro_deuda_lectura")
                  {
                      $achou = true;
                  }
                  elseif ($achou)
                  {
                      unset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu][$apl]);
                      $this->Change_Menu = true;
                  }
              }
          }
      }
      if (!function_exists("nmButtonOutput"))
      {
          include_once($this->Ini->path_lib_php . "nm_gp_config_btn.php");
      }
      include("../_lib/css/" . $this->Ini->str_schema_all . "_form.php");
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "botones_debisoft";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      $this->nm_new_label['des_id_'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['des_propietario_'] = '' . $this->Ini->Nm_lang['lang_propietario'] . '';
      $this->nm_new_label['des_contrato_'] = '' . $this->Ini->Nm_lang['lang_contrato'] . '';
      $this->nm_new_label['des_lectura_anterior_'] = '' . $this->Ini->Nm_lang['lang_lectura_anterior'] . '';
      $this->nm_new_label['des_lectura_actual_'] = '' . $this->Ini->Nm_lang['lang_lectura_actual'] . '';
      $this->nm_new_label['des_consumo_base_'] = '' . $this->Ini->Nm_lang['lang_consumo_base'] . '';
      $this->nm_new_label['des_consumo_excedente_'] = '' . $this->Ini->Nm_lang['lang_consumo_excedente'] . '';
      $this->nm_new_label['des_total_'] = '' . $this->Ini->Nm_lang['lang_total'] . '';
      $this->nm_new_label['des_numero_medidor_'] = '' . $this->Ini->Nm_lang['lang_numero_medidor'] . '';
      $this->nm_new_label['des_consumo_'] = '' . $this->Ini->Nm_lang['lang_consumo'] . '';
      $this->nm_new_label['des_revisar_'] = '' . $this->Ini->Nm_lang['lang_revisar'] . '';
      $this->nm_new_label['des_registra_danio_'] = '' . $this->Ini->Nm_lang['lang_registra_danio'] . '';
      $this->nm_new_label['des_imagen_lectura_'] = '' . $this->Ini->Nm_lang['lang_btns_img'] . '';
      $this->nm_new_label['des_numero_censo_'] = '' . $this->Ini->Nm_lang['lang_numero_censo'] . '';

      $this->Ini->str_google_fonts = isset($str_google_fonts)?$str_google_fonts:'';
      $this->Ini->Img_sep_form    = "/" . trim($str_toolbar_separator);
      $this->Ini->Color_bg_ajax   = !isset($str_ajax_bg)         || "" == trim($str_ajax_bg)         ? "#000" : $str_ajax_bg;
      $this->Ini->Border_c_ajax   = !isset($str_ajax_border_c)   || "" == trim($str_ajax_border_c)   ? ""     : $str_ajax_border_c;
      $this->Ini->Border_s_ajax   = !isset($str_ajax_border_s)   || "" == trim($str_ajax_border_s)   ? ""     : $str_ajax_border_s;
      $this->Ini->Border_w_ajax   = !isset($str_ajax_border_w)   || "" == trim($str_ajax_border_w)   ? ""     : $str_ajax_border_w;
      $this->Ini->Block_img_exp   = !isset($str_block_exp)       || "" == trim($str_block_exp)       ? ""     : $str_block_exp;
      $this->Ini->Block_img_col   = !isset($str_block_col)       || "" == trim($str_block_col)       ? ""     : $str_block_col;
      $this->Ini->Msg_ico_title   = !isset($str_msg_ico_title)   || "" == trim($str_msg_ico_title)   ? ""     : $str_msg_ico_title;
      $this->Ini->Msg_ico_body    = !isset($str_msg_ico_body)    || "" == trim($str_msg_ico_body)    ? ""     : $str_msg_ico_body;
      $this->Ini->Err_ico_title   = !isset($str_err_ico_title)   || "" == trim($str_err_ico_title)   ? ""     : $str_err_ico_title;
      $this->Ini->Err_ico_body    = !isset($str_err_ico_body)    || "" == trim($str_err_ico_body)    ? ""     : $str_err_ico_body;
      $this->Ini->Cal_ico_back    = !isset($str_cal_ico_back)    || "" == trim($str_cal_ico_back)    ? ""     : $str_cal_ico_back;
      $this->Ini->Cal_ico_for     = !isset($str_cal_ico_for)     || "" == trim($str_cal_ico_for)     ? ""     : $str_cal_ico_for;
      $this->Ini->Cal_ico_close   = !isset($str_cal_ico_close)   || "" == trim($str_cal_ico_close)   ? ""     : $str_cal_ico_close;
      $this->Ini->Tab_space       = !isset($str_tab_space)       || "" == trim($str_tab_space)       ? ""     : $str_tab_space;
      $this->Ini->Bubble_tail     = !isset($str_bubble_tail)     || "" == trim($str_bubble_tail)     ? ""     : $str_bubble_tail;
      $this->Ini->Label_sort_pos  = !isset($str_label_sort_pos)  || "" == trim($str_label_sort_pos)  ? ""     : $str_label_sort_pos;
      $this->Ini->Label_sort      = !isset($str_label_sort)      || "" == trim($str_label_sort)      ? ""     : $str_label_sort;
      $this->Ini->Label_sort_asc  = !isset($str_label_sort_asc)  || "" == trim($str_label_sort_asc)  ? ""     : $str_label_sort_asc;
      $this->Ini->Label_sort_desc = !isset($str_label_sort_desc) || "" == trim($str_label_sort_desc) ? ""     : $str_label_sort_desc;
      $this->Ini->Img_status_ok       = !isset($str_img_status_ok_mult)  || "" == trim($str_img_status_ok_mult)   ? ""     : $str_img_status_ok_mult;
      $this->Ini->Img_status_err      = !isset($str_img_status_err_mult) || "" == trim($str_img_status_err_mult)  ? ""     : $str_img_status_err_mult;
      $this->Ini->Css_status          = "scFormInputErrorMult";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorMultPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorMultPwdText";
      $this->Ini->Error_icon_span      = !isset($str_error_icon_span)  || "" == trim($str_error_icon_span)  ? false  : "message" == $str_error_icon_span;
      $this->Ini->Img_qs_search        = !isset($img_qs_search)        || "" == trim($img_qs_search)        ? "scriptcase__NM__qs_lupa.png"  : $img_qs_search;
      $this->Ini->Img_qs_clean         = !isset($img_qs_clean)         || "" == trim($img_qs_clean)         ? "scriptcase__NM__qs_close.png" : $img_qs_clean;
      $this->Ini->Str_qs_image_padding = !isset($str_qs_image_padding) || "" == trim($str_qs_image_padding) ? "0"                            : $str_qs_image_padding;
      $this->Ini->App_div_tree_img_col = trim($app_div_str_tree_col);
      $this->Ini->App_div_tree_img_exp = trim($app_div_str_tree_exp);
      $this->Ini->form_table_width     = isset($str_form_table_width) && '' != trim($str_form_table_width) ? $str_form_table_width : '';

        $this->classes_100perc_fields['table'] = '';
        $this->classes_100perc_fields['input'] = '';
        $this->classes_100perc_fields['span_input'] = '';
        $this->classes_100perc_fields['span_select'] = '';
        $this->classes_100perc_fields['style_category'] = '';
        $this->classes_100perc_fields['keep_field_size'] = true;

      if (isset($_POST['nmgp_opcao']) && $_POST['nmgp_opcao'] == "ajax_add_dyn_search")
      {
          $Temp = ob_get_clean();
          ob_start();
          $NM_func_dyn_add = "dynamic_search_" . $_POST['parm'];
          $Lin_dyn_add = $this->$NM_func_dyn_add($_POST['seq'], 'S');
          $this->Arr_result = array();
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $this->Arr_result['dyn_add'][] = NM_charset_to_utf8($Lin_dyn_add);
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      if (isset($_GET['nmgp_opcao']) && $_GET['nmgp_opcao'] == "ajax_aut_comp_dyn_search")
      {
          $Temp = ob_get_clean();
          $Cmp_select2 = array("des_numero_medidor_","des_numero_censo_");
          ob_start();
          $NM_func_aut_comp = "lookup_ajax_" . $_GET['field'];
          $parm = ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($_GET['q'])) ? sc_convert_encoding($_GET['q'], $_SESSION['scriptcase']['charset'], "UTF-8") : $_GET['q'];
          $nmgp_def_dados = $this->$NM_func_aut_comp($parm);
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
                     if (in_array($_GET['field'], $Cmp_select2))
                     {
                         $resp_aut_comp[] = array('text' => $Valor , 'id' => $Cod);
                     }
                     else
                     {
                         $resp_aut_comp[] = array('label' => $Valor , 'value' => $Cod);
                     }
                     $count_aut_comp++;
                 }
             }
             if ($count_aut_comp == $_GET['max_itens'])
             {
                 break;
             }
          }
          $oJson = new Services_JSON();
          if (in_array($_GET['field'], $Cmp_select2))
          {
              echo $oJson->encode(array('results' => $resp_aut_comp));
          }
          else
          {
              echo $oJson->encode($resp_aut_comp);
          }
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_aut_comp']);
          exit;
      }


      $_SESSION['scriptcase']['error_icon']['form_jap_registro_deuda_lectura']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_jap_registro_deuda_lectura'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name];
          }
          $this->des_imagen_lectura_ = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name'];
          $this->des_imagen_lectura__scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name'], 12);
          $this->des_imagen_lectura__scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type'];
          $this->des_imagen_lectura__ul_name = $this->NM_ajax_info['param']['des_imagen_lectura__ul_name'];
          $this->des_imagen_lectura__ul_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name) && '' != $this->des_imagen_lectura__ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name]))
          {
              $this->des_imagen_lectura__ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name];
          }
          $this->des_imagen_lectura_ = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name;
          $this->des_imagen_lectura__scfile_name = substr($this->des_imagen_lectura__ul_name, 12);
          $this->des_imagen_lectura__scfile_type = $this->des_imagen_lectura__ul_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name1']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name1'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name1]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name1'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name1];
          }
          $this->des_imagen_lectura_1      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name1'];
          $this->des_imagen_lectura_1_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name1'], 12);
          $this->des_imagen_lectura_1_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type1'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name1) && '' != $this->des_imagen_lectura__ul_name1)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name1]))
          {
              $this->des_imagen_lectura__ul_name1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name1];
          }
          $this->des_imagen_lectura_1      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name1;
          $this->des_imagen_lectura_1_scfile_name = substr($this->des_imagen_lectura__ul_name1, 12);
          $this->des_imagen_lectura_1_scfile_type = $this->des_imagen_lectura__ul_type1;
      }
      if (isset($this->des_imagen_lectura_1))
      {
          $GLOBALS['des_imagen_lectura_1']      = $this->des_imagen_lectura_1;
          $GLOBALS['des_imagen_lectura_1_scfile_name'] = $this->des_imagen_lectura_1_scfile_name;
          $GLOBALS['des_imagen_lectura_1_scfile_type'] = $this->des_imagen_lectura_1_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name2']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name2'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name2]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name2'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name2];
          }
          $this->des_imagen_lectura_2      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name2'];
          $this->des_imagen_lectura_2_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name2'], 12);
          $this->des_imagen_lectura_2_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type2'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name2) && '' != $this->des_imagen_lectura__ul_name2)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name2]))
          {
              $this->des_imagen_lectura__ul_name2 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name2];
          }
          $this->des_imagen_lectura_2      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name2;
          $this->des_imagen_lectura_2_scfile_name = substr($this->des_imagen_lectura__ul_name2, 12);
          $this->des_imagen_lectura_2_scfile_type = $this->des_imagen_lectura__ul_type2;
      }
      if (isset($this->des_imagen_lectura_2))
      {
          $GLOBALS['des_imagen_lectura_2']      = $this->des_imagen_lectura_2;
          $GLOBALS['des_imagen_lectura_2_scfile_name'] = $this->des_imagen_lectura_2_scfile_name;
          $GLOBALS['des_imagen_lectura_2_scfile_type'] = $this->des_imagen_lectura_2_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name3']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name3'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name3]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name3'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name3];
          }
          $this->des_imagen_lectura_3      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name3'];
          $this->des_imagen_lectura_3_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name3'], 12);
          $this->des_imagen_lectura_3_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type3'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name3) && '' != $this->des_imagen_lectura__ul_name3)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name3]))
          {
              $this->des_imagen_lectura__ul_name3 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name3];
          }
          $this->des_imagen_lectura_3      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name3;
          $this->des_imagen_lectura_3_scfile_name = substr($this->des_imagen_lectura__ul_name3, 12);
          $this->des_imagen_lectura_3_scfile_type = $this->des_imagen_lectura__ul_type3;
      }
      if (isset($this->des_imagen_lectura_3))
      {
          $GLOBALS['des_imagen_lectura_3']      = $this->des_imagen_lectura_3;
          $GLOBALS['des_imagen_lectura_3_scfile_name'] = $this->des_imagen_lectura_3_scfile_name;
          $GLOBALS['des_imagen_lectura_3_scfile_type'] = $this->des_imagen_lectura_3_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name4']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name4'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name4]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name4'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name4];
          }
          $this->des_imagen_lectura_4      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name4'];
          $this->des_imagen_lectura_4_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name4'], 12);
          $this->des_imagen_lectura_4_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type4'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name4) && '' != $this->des_imagen_lectura__ul_name4)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name4]))
          {
              $this->des_imagen_lectura__ul_name4 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name4];
          }
          $this->des_imagen_lectura_4      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name4;
          $this->des_imagen_lectura_4_scfile_name = substr($this->des_imagen_lectura__ul_name4, 12);
          $this->des_imagen_lectura_4_scfile_type = $this->des_imagen_lectura__ul_type4;
      }
      if (isset($this->des_imagen_lectura_4))
      {
          $GLOBALS['des_imagen_lectura_4']      = $this->des_imagen_lectura_4;
          $GLOBALS['des_imagen_lectura_4_scfile_name'] = $this->des_imagen_lectura_4_scfile_name;
          $GLOBALS['des_imagen_lectura_4_scfile_type'] = $this->des_imagen_lectura_4_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name5']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name5'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name5]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name5'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name5];
          }
          $this->des_imagen_lectura_5      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name5'];
          $this->des_imagen_lectura_5_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name5'], 12);
          $this->des_imagen_lectura_5_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type5'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name5) && '' != $this->des_imagen_lectura__ul_name5)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name5]))
          {
              $this->des_imagen_lectura__ul_name5 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name5];
          }
          $this->des_imagen_lectura_5      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name5;
          $this->des_imagen_lectura_5_scfile_name = substr($this->des_imagen_lectura__ul_name5, 12);
          $this->des_imagen_lectura_5_scfile_type = $this->des_imagen_lectura__ul_type5;
      }
      if (isset($this->des_imagen_lectura_5))
      {
          $GLOBALS['des_imagen_lectura_5']      = $this->des_imagen_lectura_5;
          $GLOBALS['des_imagen_lectura_5_scfile_name'] = $this->des_imagen_lectura_5_scfile_name;
          $GLOBALS['des_imagen_lectura_5_scfile_type'] = $this->des_imagen_lectura_5_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name6']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name6'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name6]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name6'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name6];
          }
          $this->des_imagen_lectura_6      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name6'];
          $this->des_imagen_lectura_6_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name6'], 12);
          $this->des_imagen_lectura_6_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type6'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name6) && '' != $this->des_imagen_lectura__ul_name6)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name6]))
          {
              $this->des_imagen_lectura__ul_name6 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name6];
          }
          $this->des_imagen_lectura_6      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name6;
          $this->des_imagen_lectura_6_scfile_name = substr($this->des_imagen_lectura__ul_name6, 12);
          $this->des_imagen_lectura_6_scfile_type = $this->des_imagen_lectura__ul_type6;
      }
      if (isset($this->des_imagen_lectura_6))
      {
          $GLOBALS['des_imagen_lectura_6']      = $this->des_imagen_lectura_6;
          $GLOBALS['des_imagen_lectura_6_scfile_name'] = $this->des_imagen_lectura_6_scfile_name;
          $GLOBALS['des_imagen_lectura_6_scfile_type'] = $this->des_imagen_lectura_6_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name7']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name7'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name7]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name7'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name7];
          }
          $this->des_imagen_lectura_7      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name7'];
          $this->des_imagen_lectura_7_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name7'], 12);
          $this->des_imagen_lectura_7_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type7'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name7) && '' != $this->des_imagen_lectura__ul_name7)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name7]))
          {
              $this->des_imagen_lectura__ul_name7 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name7];
          }
          $this->des_imagen_lectura_7      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name7;
          $this->des_imagen_lectura_7_scfile_name = substr($this->des_imagen_lectura__ul_name7, 12);
          $this->des_imagen_lectura_7_scfile_type = $this->des_imagen_lectura__ul_type7;
      }
      if (isset($this->des_imagen_lectura_7))
      {
          $GLOBALS['des_imagen_lectura_7']      = $this->des_imagen_lectura_7;
          $GLOBALS['des_imagen_lectura_7_scfile_name'] = $this->des_imagen_lectura_7_scfile_name;
          $GLOBALS['des_imagen_lectura_7_scfile_type'] = $this->des_imagen_lectura_7_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name8']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name8'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name8]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name8'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name8];
          }
          $this->des_imagen_lectura_8      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name8'];
          $this->des_imagen_lectura_8_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name8'], 12);
          $this->des_imagen_lectura_8_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type8'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name8) && '' != $this->des_imagen_lectura__ul_name8)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name8]))
          {
              $this->des_imagen_lectura__ul_name8 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name8];
          }
          $this->des_imagen_lectura_8      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name8;
          $this->des_imagen_lectura_8_scfile_name = substr($this->des_imagen_lectura__ul_name8, 12);
          $this->des_imagen_lectura_8_scfile_type = $this->des_imagen_lectura__ul_type8;
      }
      if (isset($this->des_imagen_lectura_8))
      {
          $GLOBALS['des_imagen_lectura_8']      = $this->des_imagen_lectura_8;
          $GLOBALS['des_imagen_lectura_8_scfile_name'] = $this->des_imagen_lectura_8_scfile_name;
          $GLOBALS['des_imagen_lectura_8_scfile_type'] = $this->des_imagen_lectura_8_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name9']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name9'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name9]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name9'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name9];
          }
          $this->des_imagen_lectura_9      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name9'];
          $this->des_imagen_lectura_9_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name9'], 12);
          $this->des_imagen_lectura_9_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type9'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name9) && '' != $this->des_imagen_lectura__ul_name9)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name9]))
          {
              $this->des_imagen_lectura__ul_name9 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name9];
          }
          $this->des_imagen_lectura_9      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name9;
          $this->des_imagen_lectura_9_scfile_name = substr($this->des_imagen_lectura__ul_name9, 12);
          $this->des_imagen_lectura_9_scfile_type = $this->des_imagen_lectura__ul_type9;
      }
      if (isset($this->des_imagen_lectura_9))
      {
          $GLOBALS['des_imagen_lectura_9']      = $this->des_imagen_lectura_9;
          $GLOBALS['des_imagen_lectura_9_scfile_name'] = $this->des_imagen_lectura_9_scfile_name;
          $GLOBALS['des_imagen_lectura_9_scfile_type'] = $this->des_imagen_lectura_9_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name10']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name10'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name10]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name10'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name10];
          }
          $this->des_imagen_lectura_10      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name10'];
          $this->des_imagen_lectura_10_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name10'], 12);
          $this->des_imagen_lectura_10_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type10'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name10) && '' != $this->des_imagen_lectura__ul_name10)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name10]))
          {
              $this->des_imagen_lectura__ul_name10 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name10];
          }
          $this->des_imagen_lectura_10      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name10;
          $this->des_imagen_lectura_10_scfile_name = substr($this->des_imagen_lectura__ul_name10, 12);
          $this->des_imagen_lectura_10_scfile_type = $this->des_imagen_lectura__ul_type10;
      }
      if (isset($this->des_imagen_lectura_10))
      {
          $GLOBALS['des_imagen_lectura_10']      = $this->des_imagen_lectura_10;
          $GLOBALS['des_imagen_lectura_10_scfile_name'] = $this->des_imagen_lectura_10_scfile_name;
          $GLOBALS['des_imagen_lectura_10_scfile_type'] = $this->des_imagen_lectura_10_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name11']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name11'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name11]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name11'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name11];
          }
          $this->des_imagen_lectura_11      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name11'];
          $this->des_imagen_lectura_11_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name11'], 12);
          $this->des_imagen_lectura_11_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type11'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name11) && '' != $this->des_imagen_lectura__ul_name11)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name11]))
          {
              $this->des_imagen_lectura__ul_name11 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name11];
          }
          $this->des_imagen_lectura_11      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name11;
          $this->des_imagen_lectura_11_scfile_name = substr($this->des_imagen_lectura__ul_name11, 12);
          $this->des_imagen_lectura_11_scfile_type = $this->des_imagen_lectura__ul_type11;
      }
      if (isset($this->des_imagen_lectura_11))
      {
          $GLOBALS['des_imagen_lectura_11']      = $this->des_imagen_lectura_11;
          $GLOBALS['des_imagen_lectura_11_scfile_name'] = $this->des_imagen_lectura_11_scfile_name;
          $GLOBALS['des_imagen_lectura_11_scfile_type'] = $this->des_imagen_lectura_11_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name12']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name12'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name12]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name12'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name12];
          }
          $this->des_imagen_lectura_12      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name12'];
          $this->des_imagen_lectura_12_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name12'], 12);
          $this->des_imagen_lectura_12_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type12'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name12) && '' != $this->des_imagen_lectura__ul_name12)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name12]))
          {
              $this->des_imagen_lectura__ul_name12 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name12];
          }
          $this->des_imagen_lectura_12      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name12;
          $this->des_imagen_lectura_12_scfile_name = substr($this->des_imagen_lectura__ul_name12, 12);
          $this->des_imagen_lectura_12_scfile_type = $this->des_imagen_lectura__ul_type12;
      }
      if (isset($this->des_imagen_lectura_12))
      {
          $GLOBALS['des_imagen_lectura_12']      = $this->des_imagen_lectura_12;
          $GLOBALS['des_imagen_lectura_12_scfile_name'] = $this->des_imagen_lectura_12_scfile_name;
          $GLOBALS['des_imagen_lectura_12_scfile_type'] = $this->des_imagen_lectura_12_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name13']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name13'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name13]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name13'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name13];
          }
          $this->des_imagen_lectura_13      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name13'];
          $this->des_imagen_lectura_13_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name13'], 12);
          $this->des_imagen_lectura_13_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type13'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name13) && '' != $this->des_imagen_lectura__ul_name13)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name13]))
          {
              $this->des_imagen_lectura__ul_name13 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name13];
          }
          $this->des_imagen_lectura_13      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name13;
          $this->des_imagen_lectura_13_scfile_name = substr($this->des_imagen_lectura__ul_name13, 12);
          $this->des_imagen_lectura_13_scfile_type = $this->des_imagen_lectura__ul_type13;
      }
      if (isset($this->des_imagen_lectura_13))
      {
          $GLOBALS['des_imagen_lectura_13']      = $this->des_imagen_lectura_13;
          $GLOBALS['des_imagen_lectura_13_scfile_name'] = $this->des_imagen_lectura_13_scfile_name;
          $GLOBALS['des_imagen_lectura_13_scfile_type'] = $this->des_imagen_lectura_13_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name14']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name14'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name14]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name14'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name14];
          }
          $this->des_imagen_lectura_14      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name14'];
          $this->des_imagen_lectura_14_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name14'], 12);
          $this->des_imagen_lectura_14_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type14'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name14) && '' != $this->des_imagen_lectura__ul_name14)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name14]))
          {
              $this->des_imagen_lectura__ul_name14 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name14];
          }
          $this->des_imagen_lectura_14      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name14;
          $this->des_imagen_lectura_14_scfile_name = substr($this->des_imagen_lectura__ul_name14, 12);
          $this->des_imagen_lectura_14_scfile_type = $this->des_imagen_lectura__ul_type14;
      }
      if (isset($this->des_imagen_lectura_14))
      {
          $GLOBALS['des_imagen_lectura_14']      = $this->des_imagen_lectura_14;
          $GLOBALS['des_imagen_lectura_14_scfile_name'] = $this->des_imagen_lectura_14_scfile_name;
          $GLOBALS['des_imagen_lectura_14_scfile_type'] = $this->des_imagen_lectura_14_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name15']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name15'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name15]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name15'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name15];
          }
          $this->des_imagen_lectura_15      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name15'];
          $this->des_imagen_lectura_15_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name15'], 12);
          $this->des_imagen_lectura_15_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type15'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name15) && '' != $this->des_imagen_lectura__ul_name15)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name15]))
          {
              $this->des_imagen_lectura__ul_name15 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name15];
          }
          $this->des_imagen_lectura_15      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name15;
          $this->des_imagen_lectura_15_scfile_name = substr($this->des_imagen_lectura__ul_name15, 12);
          $this->des_imagen_lectura_15_scfile_type = $this->des_imagen_lectura__ul_type15;
      }
      if (isset($this->des_imagen_lectura_15))
      {
          $GLOBALS['des_imagen_lectura_15']      = $this->des_imagen_lectura_15;
          $GLOBALS['des_imagen_lectura_15_scfile_name'] = $this->des_imagen_lectura_15_scfile_name;
          $GLOBALS['des_imagen_lectura_15_scfile_type'] = $this->des_imagen_lectura_15_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name16']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name16'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name16]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name16'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name16];
          }
          $this->des_imagen_lectura_16      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name16'];
          $this->des_imagen_lectura_16_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name16'], 12);
          $this->des_imagen_lectura_16_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type16'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name16) && '' != $this->des_imagen_lectura__ul_name16)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name16]))
          {
              $this->des_imagen_lectura__ul_name16 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name16];
          }
          $this->des_imagen_lectura_16      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name16;
          $this->des_imagen_lectura_16_scfile_name = substr($this->des_imagen_lectura__ul_name16, 12);
          $this->des_imagen_lectura_16_scfile_type = $this->des_imagen_lectura__ul_type16;
      }
      if (isset($this->des_imagen_lectura_16))
      {
          $GLOBALS['des_imagen_lectura_16']      = $this->des_imagen_lectura_16;
          $GLOBALS['des_imagen_lectura_16_scfile_name'] = $this->des_imagen_lectura_16_scfile_name;
          $GLOBALS['des_imagen_lectura_16_scfile_type'] = $this->des_imagen_lectura_16_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name17']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name17'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name17]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name17'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name17];
          }
          $this->des_imagen_lectura_17      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name17'];
          $this->des_imagen_lectura_17_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name17'], 12);
          $this->des_imagen_lectura_17_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type17'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name17) && '' != $this->des_imagen_lectura__ul_name17)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name17]))
          {
              $this->des_imagen_lectura__ul_name17 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name17];
          }
          $this->des_imagen_lectura_17      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name17;
          $this->des_imagen_lectura_17_scfile_name = substr($this->des_imagen_lectura__ul_name17, 12);
          $this->des_imagen_lectura_17_scfile_type = $this->des_imagen_lectura__ul_type17;
      }
      if (isset($this->des_imagen_lectura_17))
      {
          $GLOBALS['des_imagen_lectura_17']      = $this->des_imagen_lectura_17;
          $GLOBALS['des_imagen_lectura_17_scfile_name'] = $this->des_imagen_lectura_17_scfile_name;
          $GLOBALS['des_imagen_lectura_17_scfile_type'] = $this->des_imagen_lectura_17_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name18']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name18'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name18]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name18'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name18];
          }
          $this->des_imagen_lectura_18      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name18'];
          $this->des_imagen_lectura_18_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name18'], 12);
          $this->des_imagen_lectura_18_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type18'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name18) && '' != $this->des_imagen_lectura__ul_name18)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name18]))
          {
              $this->des_imagen_lectura__ul_name18 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name18];
          }
          $this->des_imagen_lectura_18      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name18;
          $this->des_imagen_lectura_18_scfile_name = substr($this->des_imagen_lectura__ul_name18, 12);
          $this->des_imagen_lectura_18_scfile_type = $this->des_imagen_lectura__ul_type18;
      }
      if (isset($this->des_imagen_lectura_18))
      {
          $GLOBALS['des_imagen_lectura_18']      = $this->des_imagen_lectura_18;
          $GLOBALS['des_imagen_lectura_18_scfile_name'] = $this->des_imagen_lectura_18_scfile_name;
          $GLOBALS['des_imagen_lectura_18_scfile_type'] = $this->des_imagen_lectura_18_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name19']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name19'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name19]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name19'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name19];
          }
          $this->des_imagen_lectura_19      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name19'];
          $this->des_imagen_lectura_19_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name19'], 12);
          $this->des_imagen_lectura_19_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type19'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name19) && '' != $this->des_imagen_lectura__ul_name19)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name19]))
          {
              $this->des_imagen_lectura__ul_name19 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name19];
          }
          $this->des_imagen_lectura_19      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name19;
          $this->des_imagen_lectura_19_scfile_name = substr($this->des_imagen_lectura__ul_name19, 12);
          $this->des_imagen_lectura_19_scfile_type = $this->des_imagen_lectura__ul_type19;
      }
      if (isset($this->des_imagen_lectura_19))
      {
          $GLOBALS['des_imagen_lectura_19']      = $this->des_imagen_lectura_19;
          $GLOBALS['des_imagen_lectura_19_scfile_name'] = $this->des_imagen_lectura_19_scfile_name;
          $GLOBALS['des_imagen_lectura_19_scfile_type'] = $this->des_imagen_lectura_19_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name20']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name20'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name20]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name20'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name20];
          }
          $this->des_imagen_lectura_20      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name20'];
          $this->des_imagen_lectura_20_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name20'], 12);
          $this->des_imagen_lectura_20_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type20'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name20) && '' != $this->des_imagen_lectura__ul_name20)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name20]))
          {
              $this->des_imagen_lectura__ul_name20 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name20];
          }
          $this->des_imagen_lectura_20      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name20;
          $this->des_imagen_lectura_20_scfile_name = substr($this->des_imagen_lectura__ul_name20, 12);
          $this->des_imagen_lectura_20_scfile_type = $this->des_imagen_lectura__ul_type20;
      }
      if (isset($this->des_imagen_lectura_20))
      {
          $GLOBALS['des_imagen_lectura_20']      = $this->des_imagen_lectura_20;
          $GLOBALS['des_imagen_lectura_20_scfile_name'] = $this->des_imagen_lectura_20_scfile_name;
          $GLOBALS['des_imagen_lectura_20_scfile_type'] = $this->des_imagen_lectura_20_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name21']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name21'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name21]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name21'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name21];
          }
          $this->des_imagen_lectura_21      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name21'];
          $this->des_imagen_lectura_21_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name21'], 12);
          $this->des_imagen_lectura_21_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type21'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name21) && '' != $this->des_imagen_lectura__ul_name21)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name21]))
          {
              $this->des_imagen_lectura__ul_name21 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name21];
          }
          $this->des_imagen_lectura_21      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name21;
          $this->des_imagen_lectura_21_scfile_name = substr($this->des_imagen_lectura__ul_name21, 12);
          $this->des_imagen_lectura_21_scfile_type = $this->des_imagen_lectura__ul_type21;
      }
      if (isset($this->des_imagen_lectura_21))
      {
          $GLOBALS['des_imagen_lectura_21']      = $this->des_imagen_lectura_21;
          $GLOBALS['des_imagen_lectura_21_scfile_name'] = $this->des_imagen_lectura_21_scfile_name;
          $GLOBALS['des_imagen_lectura_21_scfile_type'] = $this->des_imagen_lectura_21_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name22']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name22'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name22]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name22'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name22];
          }
          $this->des_imagen_lectura_22      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name22'];
          $this->des_imagen_lectura_22_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name22'], 12);
          $this->des_imagen_lectura_22_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type22'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name22) && '' != $this->des_imagen_lectura__ul_name22)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name22]))
          {
              $this->des_imagen_lectura__ul_name22 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name22];
          }
          $this->des_imagen_lectura_22      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name22;
          $this->des_imagen_lectura_22_scfile_name = substr($this->des_imagen_lectura__ul_name22, 12);
          $this->des_imagen_lectura_22_scfile_type = $this->des_imagen_lectura__ul_type22;
      }
      if (isset($this->des_imagen_lectura_22))
      {
          $GLOBALS['des_imagen_lectura_22']      = $this->des_imagen_lectura_22;
          $GLOBALS['des_imagen_lectura_22_scfile_name'] = $this->des_imagen_lectura_22_scfile_name;
          $GLOBALS['des_imagen_lectura_22_scfile_type'] = $this->des_imagen_lectura_22_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name23']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name23'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name23]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name23'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name23];
          }
          $this->des_imagen_lectura_23      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name23'];
          $this->des_imagen_lectura_23_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name23'], 12);
          $this->des_imagen_lectura_23_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type23'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name23) && '' != $this->des_imagen_lectura__ul_name23)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name23]))
          {
              $this->des_imagen_lectura__ul_name23 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name23];
          }
          $this->des_imagen_lectura_23      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name23;
          $this->des_imagen_lectura_23_scfile_name = substr($this->des_imagen_lectura__ul_name23, 12);
          $this->des_imagen_lectura_23_scfile_type = $this->des_imagen_lectura__ul_type23;
      }
      if (isset($this->des_imagen_lectura_23))
      {
          $GLOBALS['des_imagen_lectura_23']      = $this->des_imagen_lectura_23;
          $GLOBALS['des_imagen_lectura_23_scfile_name'] = $this->des_imagen_lectura_23_scfile_name;
          $GLOBALS['des_imagen_lectura_23_scfile_type'] = $this->des_imagen_lectura_23_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name24']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name24'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name24]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name24'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name24];
          }
          $this->des_imagen_lectura_24      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name24'];
          $this->des_imagen_lectura_24_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name24'], 12);
          $this->des_imagen_lectura_24_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type24'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name24) && '' != $this->des_imagen_lectura__ul_name24)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name24]))
          {
              $this->des_imagen_lectura__ul_name24 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name24];
          }
          $this->des_imagen_lectura_24      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name24;
          $this->des_imagen_lectura_24_scfile_name = substr($this->des_imagen_lectura__ul_name24, 12);
          $this->des_imagen_lectura_24_scfile_type = $this->des_imagen_lectura__ul_type24;
      }
      if (isset($this->des_imagen_lectura_24))
      {
          $GLOBALS['des_imagen_lectura_24']      = $this->des_imagen_lectura_24;
          $GLOBALS['des_imagen_lectura_24_scfile_name'] = $this->des_imagen_lectura_24_scfile_name;
          $GLOBALS['des_imagen_lectura_24_scfile_type'] = $this->des_imagen_lectura_24_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name25']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name25'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name25]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name25'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name25];
          }
          $this->des_imagen_lectura_25      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name25'];
          $this->des_imagen_lectura_25_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name25'], 12);
          $this->des_imagen_lectura_25_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type25'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name25) && '' != $this->des_imagen_lectura__ul_name25)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name25]))
          {
              $this->des_imagen_lectura__ul_name25 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name25];
          }
          $this->des_imagen_lectura_25      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name25;
          $this->des_imagen_lectura_25_scfile_name = substr($this->des_imagen_lectura__ul_name25, 12);
          $this->des_imagen_lectura_25_scfile_type = $this->des_imagen_lectura__ul_type25;
      }
      if (isset($this->des_imagen_lectura_25))
      {
          $GLOBALS['des_imagen_lectura_25']      = $this->des_imagen_lectura_25;
          $GLOBALS['des_imagen_lectura_25_scfile_name'] = $this->des_imagen_lectura_25_scfile_name;
          $GLOBALS['des_imagen_lectura_25_scfile_type'] = $this->des_imagen_lectura_25_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name26']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name26'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name26]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name26'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name26];
          }
          $this->des_imagen_lectura_26      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name26'];
          $this->des_imagen_lectura_26_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name26'], 12);
          $this->des_imagen_lectura_26_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type26'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name26) && '' != $this->des_imagen_lectura__ul_name26)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name26]))
          {
              $this->des_imagen_lectura__ul_name26 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name26];
          }
          $this->des_imagen_lectura_26      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name26;
          $this->des_imagen_lectura_26_scfile_name = substr($this->des_imagen_lectura__ul_name26, 12);
          $this->des_imagen_lectura_26_scfile_type = $this->des_imagen_lectura__ul_type26;
      }
      if (isset($this->des_imagen_lectura_26))
      {
          $GLOBALS['des_imagen_lectura_26']      = $this->des_imagen_lectura_26;
          $GLOBALS['des_imagen_lectura_26_scfile_name'] = $this->des_imagen_lectura_26_scfile_name;
          $GLOBALS['des_imagen_lectura_26_scfile_type'] = $this->des_imagen_lectura_26_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name27']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name27'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name27]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name27'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name27];
          }
          $this->des_imagen_lectura_27      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name27'];
          $this->des_imagen_lectura_27_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name27'], 12);
          $this->des_imagen_lectura_27_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type27'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name27) && '' != $this->des_imagen_lectura__ul_name27)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name27]))
          {
              $this->des_imagen_lectura__ul_name27 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name27];
          }
          $this->des_imagen_lectura_27      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name27;
          $this->des_imagen_lectura_27_scfile_name = substr($this->des_imagen_lectura__ul_name27, 12);
          $this->des_imagen_lectura_27_scfile_type = $this->des_imagen_lectura__ul_type27;
      }
      if (isset($this->des_imagen_lectura_27))
      {
          $GLOBALS['des_imagen_lectura_27']      = $this->des_imagen_lectura_27;
          $GLOBALS['des_imagen_lectura_27_scfile_name'] = $this->des_imagen_lectura_27_scfile_name;
          $GLOBALS['des_imagen_lectura_27_scfile_type'] = $this->des_imagen_lectura_27_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name28']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name28'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name28]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name28'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name28];
          }
          $this->des_imagen_lectura_28      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name28'];
          $this->des_imagen_lectura_28_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name28'], 12);
          $this->des_imagen_lectura_28_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type28'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name28) && '' != $this->des_imagen_lectura__ul_name28)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name28]))
          {
              $this->des_imagen_lectura__ul_name28 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name28];
          }
          $this->des_imagen_lectura_28      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name28;
          $this->des_imagen_lectura_28_scfile_name = substr($this->des_imagen_lectura__ul_name28, 12);
          $this->des_imagen_lectura_28_scfile_type = $this->des_imagen_lectura__ul_type28;
      }
      if (isset($this->des_imagen_lectura_28))
      {
          $GLOBALS['des_imagen_lectura_28']      = $this->des_imagen_lectura_28;
          $GLOBALS['des_imagen_lectura_28_scfile_name'] = $this->des_imagen_lectura_28_scfile_name;
          $GLOBALS['des_imagen_lectura_28_scfile_type'] = $this->des_imagen_lectura_28_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name29']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name29'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name29]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name29'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name29];
          }
          $this->des_imagen_lectura_29      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name29'];
          $this->des_imagen_lectura_29_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name29'], 12);
          $this->des_imagen_lectura_29_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type29'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name29) && '' != $this->des_imagen_lectura__ul_name29)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name29]))
          {
              $this->des_imagen_lectura__ul_name29 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name29];
          }
          $this->des_imagen_lectura_29      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name29;
          $this->des_imagen_lectura_29_scfile_name = substr($this->des_imagen_lectura__ul_name29, 12);
          $this->des_imagen_lectura_29_scfile_type = $this->des_imagen_lectura__ul_type29;
      }
      if (isset($this->des_imagen_lectura_29))
      {
          $GLOBALS['des_imagen_lectura_29']      = $this->des_imagen_lectura_29;
          $GLOBALS['des_imagen_lectura_29_scfile_name'] = $this->des_imagen_lectura_29_scfile_name;
          $GLOBALS['des_imagen_lectura_29_scfile_type'] = $this->des_imagen_lectura_29_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name30']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name30'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name30]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name30'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name30];
          }
          $this->des_imagen_lectura_30      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name30'];
          $this->des_imagen_lectura_30_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name30'], 12);
          $this->des_imagen_lectura_30_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type30'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name30) && '' != $this->des_imagen_lectura__ul_name30)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name30]))
          {
              $this->des_imagen_lectura__ul_name30 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name30];
          }
          $this->des_imagen_lectura_30      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name30;
          $this->des_imagen_lectura_30_scfile_name = substr($this->des_imagen_lectura__ul_name30, 12);
          $this->des_imagen_lectura_30_scfile_type = $this->des_imagen_lectura__ul_type30;
      }
      if (isset($this->des_imagen_lectura_30))
      {
          $GLOBALS['des_imagen_lectura_30']      = $this->des_imagen_lectura_30;
          $GLOBALS['des_imagen_lectura_30_scfile_name'] = $this->des_imagen_lectura_30_scfile_name;
          $GLOBALS['des_imagen_lectura_30_scfile_type'] = $this->des_imagen_lectura_30_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name31']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name31'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name31]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name31'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name31];
          }
          $this->des_imagen_lectura_31      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name31'];
          $this->des_imagen_lectura_31_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name31'], 12);
          $this->des_imagen_lectura_31_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type31'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name31) && '' != $this->des_imagen_lectura__ul_name31)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name31]))
          {
              $this->des_imagen_lectura__ul_name31 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name31];
          }
          $this->des_imagen_lectura_31      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name31;
          $this->des_imagen_lectura_31_scfile_name = substr($this->des_imagen_lectura__ul_name31, 12);
          $this->des_imagen_lectura_31_scfile_type = $this->des_imagen_lectura__ul_type31;
      }
      if (isset($this->des_imagen_lectura_31))
      {
          $GLOBALS['des_imagen_lectura_31']      = $this->des_imagen_lectura_31;
          $GLOBALS['des_imagen_lectura_31_scfile_name'] = $this->des_imagen_lectura_31_scfile_name;
          $GLOBALS['des_imagen_lectura_31_scfile_type'] = $this->des_imagen_lectura_31_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name32']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name32'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name32]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name32'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name32];
          }
          $this->des_imagen_lectura_32      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name32'];
          $this->des_imagen_lectura_32_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name32'], 12);
          $this->des_imagen_lectura_32_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type32'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name32) && '' != $this->des_imagen_lectura__ul_name32)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name32]))
          {
              $this->des_imagen_lectura__ul_name32 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name32];
          }
          $this->des_imagen_lectura_32      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name32;
          $this->des_imagen_lectura_32_scfile_name = substr($this->des_imagen_lectura__ul_name32, 12);
          $this->des_imagen_lectura_32_scfile_type = $this->des_imagen_lectura__ul_type32;
      }
      if (isset($this->des_imagen_lectura_32))
      {
          $GLOBALS['des_imagen_lectura_32']      = $this->des_imagen_lectura_32;
          $GLOBALS['des_imagen_lectura_32_scfile_name'] = $this->des_imagen_lectura_32_scfile_name;
          $GLOBALS['des_imagen_lectura_32_scfile_type'] = $this->des_imagen_lectura_32_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name33']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name33'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name33]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name33'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name33];
          }
          $this->des_imagen_lectura_33      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name33'];
          $this->des_imagen_lectura_33_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name33'], 12);
          $this->des_imagen_lectura_33_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type33'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name33) && '' != $this->des_imagen_lectura__ul_name33)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name33]))
          {
              $this->des_imagen_lectura__ul_name33 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name33];
          }
          $this->des_imagen_lectura_33      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name33;
          $this->des_imagen_lectura_33_scfile_name = substr($this->des_imagen_lectura__ul_name33, 12);
          $this->des_imagen_lectura_33_scfile_type = $this->des_imagen_lectura__ul_type33;
      }
      if (isset($this->des_imagen_lectura_33))
      {
          $GLOBALS['des_imagen_lectura_33']      = $this->des_imagen_lectura_33;
          $GLOBALS['des_imagen_lectura_33_scfile_name'] = $this->des_imagen_lectura_33_scfile_name;
          $GLOBALS['des_imagen_lectura_33_scfile_type'] = $this->des_imagen_lectura_33_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name34']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name34'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name34]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name34'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name34];
          }
          $this->des_imagen_lectura_34      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name34'];
          $this->des_imagen_lectura_34_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name34'], 12);
          $this->des_imagen_lectura_34_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type34'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name34) && '' != $this->des_imagen_lectura__ul_name34)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name34]))
          {
              $this->des_imagen_lectura__ul_name34 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name34];
          }
          $this->des_imagen_lectura_34      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name34;
          $this->des_imagen_lectura_34_scfile_name = substr($this->des_imagen_lectura__ul_name34, 12);
          $this->des_imagen_lectura_34_scfile_type = $this->des_imagen_lectura__ul_type34;
      }
      if (isset($this->des_imagen_lectura_34))
      {
          $GLOBALS['des_imagen_lectura_34']      = $this->des_imagen_lectura_34;
          $GLOBALS['des_imagen_lectura_34_scfile_name'] = $this->des_imagen_lectura_34_scfile_name;
          $GLOBALS['des_imagen_lectura_34_scfile_type'] = $this->des_imagen_lectura_34_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name35']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name35'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name35]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name35'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name35];
          }
          $this->des_imagen_lectura_35      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name35'];
          $this->des_imagen_lectura_35_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name35'], 12);
          $this->des_imagen_lectura_35_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type35'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name35) && '' != $this->des_imagen_lectura__ul_name35)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name35]))
          {
              $this->des_imagen_lectura__ul_name35 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name35];
          }
          $this->des_imagen_lectura_35      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name35;
          $this->des_imagen_lectura_35_scfile_name = substr($this->des_imagen_lectura__ul_name35, 12);
          $this->des_imagen_lectura_35_scfile_type = $this->des_imagen_lectura__ul_type35;
      }
      if (isset($this->des_imagen_lectura_35))
      {
          $GLOBALS['des_imagen_lectura_35']      = $this->des_imagen_lectura_35;
          $GLOBALS['des_imagen_lectura_35_scfile_name'] = $this->des_imagen_lectura_35_scfile_name;
          $GLOBALS['des_imagen_lectura_35_scfile_type'] = $this->des_imagen_lectura_35_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name36']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name36'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name36]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name36'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name36];
          }
          $this->des_imagen_lectura_36      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name36'];
          $this->des_imagen_lectura_36_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name36'], 12);
          $this->des_imagen_lectura_36_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type36'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name36) && '' != $this->des_imagen_lectura__ul_name36)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name36]))
          {
              $this->des_imagen_lectura__ul_name36 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name36];
          }
          $this->des_imagen_lectura_36      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name36;
          $this->des_imagen_lectura_36_scfile_name = substr($this->des_imagen_lectura__ul_name36, 12);
          $this->des_imagen_lectura_36_scfile_type = $this->des_imagen_lectura__ul_type36;
      }
      if (isset($this->des_imagen_lectura_36))
      {
          $GLOBALS['des_imagen_lectura_36']      = $this->des_imagen_lectura_36;
          $GLOBALS['des_imagen_lectura_36_scfile_name'] = $this->des_imagen_lectura_36_scfile_name;
          $GLOBALS['des_imagen_lectura_36_scfile_type'] = $this->des_imagen_lectura_36_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name37']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name37'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name37]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name37'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name37];
          }
          $this->des_imagen_lectura_37      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name37'];
          $this->des_imagen_lectura_37_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name37'], 12);
          $this->des_imagen_lectura_37_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type37'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name37) && '' != $this->des_imagen_lectura__ul_name37)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name37]))
          {
              $this->des_imagen_lectura__ul_name37 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name37];
          }
          $this->des_imagen_lectura_37      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name37;
          $this->des_imagen_lectura_37_scfile_name = substr($this->des_imagen_lectura__ul_name37, 12);
          $this->des_imagen_lectura_37_scfile_type = $this->des_imagen_lectura__ul_type37;
      }
      if (isset($this->des_imagen_lectura_37))
      {
          $GLOBALS['des_imagen_lectura_37']      = $this->des_imagen_lectura_37;
          $GLOBALS['des_imagen_lectura_37_scfile_name'] = $this->des_imagen_lectura_37_scfile_name;
          $GLOBALS['des_imagen_lectura_37_scfile_type'] = $this->des_imagen_lectura_37_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name38']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name38'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name38]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name38'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name38];
          }
          $this->des_imagen_lectura_38      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name38'];
          $this->des_imagen_lectura_38_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name38'], 12);
          $this->des_imagen_lectura_38_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type38'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name38) && '' != $this->des_imagen_lectura__ul_name38)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name38]))
          {
              $this->des_imagen_lectura__ul_name38 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name38];
          }
          $this->des_imagen_lectura_38      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name38;
          $this->des_imagen_lectura_38_scfile_name = substr($this->des_imagen_lectura__ul_name38, 12);
          $this->des_imagen_lectura_38_scfile_type = $this->des_imagen_lectura__ul_type38;
      }
      if (isset($this->des_imagen_lectura_38))
      {
          $GLOBALS['des_imagen_lectura_38']      = $this->des_imagen_lectura_38;
          $GLOBALS['des_imagen_lectura_38_scfile_name'] = $this->des_imagen_lectura_38_scfile_name;
          $GLOBALS['des_imagen_lectura_38_scfile_type'] = $this->des_imagen_lectura_38_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name39']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name39'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name39]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name39'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name39];
          }
          $this->des_imagen_lectura_39      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name39'];
          $this->des_imagen_lectura_39_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name39'], 12);
          $this->des_imagen_lectura_39_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type39'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name39) && '' != $this->des_imagen_lectura__ul_name39)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name39]))
          {
              $this->des_imagen_lectura__ul_name39 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name39];
          }
          $this->des_imagen_lectura_39      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name39;
          $this->des_imagen_lectura_39_scfile_name = substr($this->des_imagen_lectura__ul_name39, 12);
          $this->des_imagen_lectura_39_scfile_type = $this->des_imagen_lectura__ul_type39;
      }
      if (isset($this->des_imagen_lectura_39))
      {
          $GLOBALS['des_imagen_lectura_39']      = $this->des_imagen_lectura_39;
          $GLOBALS['des_imagen_lectura_39_scfile_name'] = $this->des_imagen_lectura_39_scfile_name;
          $GLOBALS['des_imagen_lectura_39_scfile_type'] = $this->des_imagen_lectura_39_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name40']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name40'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name40]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name40'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name40];
          }
          $this->des_imagen_lectura_40      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name40'];
          $this->des_imagen_lectura_40_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name40'], 12);
          $this->des_imagen_lectura_40_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type40'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name40) && '' != $this->des_imagen_lectura__ul_name40)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name40]))
          {
              $this->des_imagen_lectura__ul_name40 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name40];
          }
          $this->des_imagen_lectura_40      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name40;
          $this->des_imagen_lectura_40_scfile_name = substr($this->des_imagen_lectura__ul_name40, 12);
          $this->des_imagen_lectura_40_scfile_type = $this->des_imagen_lectura__ul_type40;
      }
      if (isset($this->des_imagen_lectura_40))
      {
          $GLOBALS['des_imagen_lectura_40']      = $this->des_imagen_lectura_40;
          $GLOBALS['des_imagen_lectura_40_scfile_name'] = $this->des_imagen_lectura_40_scfile_name;
          $GLOBALS['des_imagen_lectura_40_scfile_type'] = $this->des_imagen_lectura_40_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name41']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name41'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name41]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name41'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name41];
          }
          $this->des_imagen_lectura_41      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name41'];
          $this->des_imagen_lectura_41_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name41'], 12);
          $this->des_imagen_lectura_41_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type41'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name41) && '' != $this->des_imagen_lectura__ul_name41)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name41]))
          {
              $this->des_imagen_lectura__ul_name41 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name41];
          }
          $this->des_imagen_lectura_41      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name41;
          $this->des_imagen_lectura_41_scfile_name = substr($this->des_imagen_lectura__ul_name41, 12);
          $this->des_imagen_lectura_41_scfile_type = $this->des_imagen_lectura__ul_type41;
      }
      if (isset($this->des_imagen_lectura_41))
      {
          $GLOBALS['des_imagen_lectura_41']      = $this->des_imagen_lectura_41;
          $GLOBALS['des_imagen_lectura_41_scfile_name'] = $this->des_imagen_lectura_41_scfile_name;
          $GLOBALS['des_imagen_lectura_41_scfile_type'] = $this->des_imagen_lectura_41_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name42']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name42'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name42]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name42'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name42];
          }
          $this->des_imagen_lectura_42      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name42'];
          $this->des_imagen_lectura_42_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name42'], 12);
          $this->des_imagen_lectura_42_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type42'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name42) && '' != $this->des_imagen_lectura__ul_name42)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name42]))
          {
              $this->des_imagen_lectura__ul_name42 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name42];
          }
          $this->des_imagen_lectura_42      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name42;
          $this->des_imagen_lectura_42_scfile_name = substr($this->des_imagen_lectura__ul_name42, 12);
          $this->des_imagen_lectura_42_scfile_type = $this->des_imagen_lectura__ul_type42;
      }
      if (isset($this->des_imagen_lectura_42))
      {
          $GLOBALS['des_imagen_lectura_42']      = $this->des_imagen_lectura_42;
          $GLOBALS['des_imagen_lectura_42_scfile_name'] = $this->des_imagen_lectura_42_scfile_name;
          $GLOBALS['des_imagen_lectura_42_scfile_type'] = $this->des_imagen_lectura_42_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name43']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name43'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name43]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name43'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name43];
          }
          $this->des_imagen_lectura_43      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name43'];
          $this->des_imagen_lectura_43_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name43'], 12);
          $this->des_imagen_lectura_43_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type43'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name43) && '' != $this->des_imagen_lectura__ul_name43)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name43]))
          {
              $this->des_imagen_lectura__ul_name43 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name43];
          }
          $this->des_imagen_lectura_43      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name43;
          $this->des_imagen_lectura_43_scfile_name = substr($this->des_imagen_lectura__ul_name43, 12);
          $this->des_imagen_lectura_43_scfile_type = $this->des_imagen_lectura__ul_type43;
      }
      if (isset($this->des_imagen_lectura_43))
      {
          $GLOBALS['des_imagen_lectura_43']      = $this->des_imagen_lectura_43;
          $GLOBALS['des_imagen_lectura_43_scfile_name'] = $this->des_imagen_lectura_43_scfile_name;
          $GLOBALS['des_imagen_lectura_43_scfile_type'] = $this->des_imagen_lectura_43_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name44']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name44'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name44]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name44'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name44];
          }
          $this->des_imagen_lectura_44      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name44'];
          $this->des_imagen_lectura_44_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name44'], 12);
          $this->des_imagen_lectura_44_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type44'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name44) && '' != $this->des_imagen_lectura__ul_name44)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name44]))
          {
              $this->des_imagen_lectura__ul_name44 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name44];
          }
          $this->des_imagen_lectura_44      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name44;
          $this->des_imagen_lectura_44_scfile_name = substr($this->des_imagen_lectura__ul_name44, 12);
          $this->des_imagen_lectura_44_scfile_type = $this->des_imagen_lectura__ul_type44;
      }
      if (isset($this->des_imagen_lectura_44))
      {
          $GLOBALS['des_imagen_lectura_44']      = $this->des_imagen_lectura_44;
          $GLOBALS['des_imagen_lectura_44_scfile_name'] = $this->des_imagen_lectura_44_scfile_name;
          $GLOBALS['des_imagen_lectura_44_scfile_type'] = $this->des_imagen_lectura_44_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name45']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name45'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name45]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name45'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name45];
          }
          $this->des_imagen_lectura_45      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name45'];
          $this->des_imagen_lectura_45_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name45'], 12);
          $this->des_imagen_lectura_45_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type45'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name45) && '' != $this->des_imagen_lectura__ul_name45)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name45]))
          {
              $this->des_imagen_lectura__ul_name45 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name45];
          }
          $this->des_imagen_lectura_45      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name45;
          $this->des_imagen_lectura_45_scfile_name = substr($this->des_imagen_lectura__ul_name45, 12);
          $this->des_imagen_lectura_45_scfile_type = $this->des_imagen_lectura__ul_type45;
      }
      if (isset($this->des_imagen_lectura_45))
      {
          $GLOBALS['des_imagen_lectura_45']      = $this->des_imagen_lectura_45;
          $GLOBALS['des_imagen_lectura_45_scfile_name'] = $this->des_imagen_lectura_45_scfile_name;
          $GLOBALS['des_imagen_lectura_45_scfile_type'] = $this->des_imagen_lectura_45_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name46']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name46'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name46]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name46'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name46];
          }
          $this->des_imagen_lectura_46      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name46'];
          $this->des_imagen_lectura_46_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name46'], 12);
          $this->des_imagen_lectura_46_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type46'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name46) && '' != $this->des_imagen_lectura__ul_name46)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name46]))
          {
              $this->des_imagen_lectura__ul_name46 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name46];
          }
          $this->des_imagen_lectura_46      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name46;
          $this->des_imagen_lectura_46_scfile_name = substr($this->des_imagen_lectura__ul_name46, 12);
          $this->des_imagen_lectura_46_scfile_type = $this->des_imagen_lectura__ul_type46;
      }
      if (isset($this->des_imagen_lectura_46))
      {
          $GLOBALS['des_imagen_lectura_46']      = $this->des_imagen_lectura_46;
          $GLOBALS['des_imagen_lectura_46_scfile_name'] = $this->des_imagen_lectura_46_scfile_name;
          $GLOBALS['des_imagen_lectura_46_scfile_type'] = $this->des_imagen_lectura_46_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name47']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name47'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name47]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name47'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name47];
          }
          $this->des_imagen_lectura_47      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name47'];
          $this->des_imagen_lectura_47_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name47'], 12);
          $this->des_imagen_lectura_47_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type47'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name47) && '' != $this->des_imagen_lectura__ul_name47)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name47]))
          {
              $this->des_imagen_lectura__ul_name47 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name47];
          }
          $this->des_imagen_lectura_47      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name47;
          $this->des_imagen_lectura_47_scfile_name = substr($this->des_imagen_lectura__ul_name47, 12);
          $this->des_imagen_lectura_47_scfile_type = $this->des_imagen_lectura__ul_type47;
      }
      if (isset($this->des_imagen_lectura_47))
      {
          $GLOBALS['des_imagen_lectura_47']      = $this->des_imagen_lectura_47;
          $GLOBALS['des_imagen_lectura_47_scfile_name'] = $this->des_imagen_lectura_47_scfile_name;
          $GLOBALS['des_imagen_lectura_47_scfile_type'] = $this->des_imagen_lectura_47_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name48']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name48'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name48]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name48'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name48];
          }
          $this->des_imagen_lectura_48      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name48'];
          $this->des_imagen_lectura_48_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name48'], 12);
          $this->des_imagen_lectura_48_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type48'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name48) && '' != $this->des_imagen_lectura__ul_name48)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name48]))
          {
              $this->des_imagen_lectura__ul_name48 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name48];
          }
          $this->des_imagen_lectura_48      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name48;
          $this->des_imagen_lectura_48_scfile_name = substr($this->des_imagen_lectura__ul_name48, 12);
          $this->des_imagen_lectura_48_scfile_type = $this->des_imagen_lectura__ul_type48;
      }
      if (isset($this->des_imagen_lectura_48))
      {
          $GLOBALS['des_imagen_lectura_48']      = $this->des_imagen_lectura_48;
          $GLOBALS['des_imagen_lectura_48_scfile_name'] = $this->des_imagen_lectura_48_scfile_name;
          $GLOBALS['des_imagen_lectura_48_scfile_type'] = $this->des_imagen_lectura_48_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name49']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name49'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name49]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name49'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name49];
          }
          $this->des_imagen_lectura_49      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name49'];
          $this->des_imagen_lectura_49_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name49'], 12);
          $this->des_imagen_lectura_49_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type49'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name49) && '' != $this->des_imagen_lectura__ul_name49)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name49]))
          {
              $this->des_imagen_lectura__ul_name49 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name49];
          }
          $this->des_imagen_lectura_49      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name49;
          $this->des_imagen_lectura_49_scfile_name = substr($this->des_imagen_lectura__ul_name49, 12);
          $this->des_imagen_lectura_49_scfile_type = $this->des_imagen_lectura__ul_type49;
      }
      if (isset($this->des_imagen_lectura_49))
      {
          $GLOBALS['des_imagen_lectura_49']      = $this->des_imagen_lectura_49;
          $GLOBALS['des_imagen_lectura_49_scfile_name'] = $this->des_imagen_lectura_49_scfile_name;
          $GLOBALS['des_imagen_lectura_49_scfile_type'] = $this->des_imagen_lectura_49_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name50']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name50'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name50]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name50'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name50];
          }
          $this->des_imagen_lectura_50      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name50'];
          $this->des_imagen_lectura_50_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name50'], 12);
          $this->des_imagen_lectura_50_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type50'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name50) && '' != $this->des_imagen_lectura__ul_name50)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name50]))
          {
              $this->des_imagen_lectura__ul_name50 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name50];
          }
          $this->des_imagen_lectura_50      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name50;
          $this->des_imagen_lectura_50_scfile_name = substr($this->des_imagen_lectura__ul_name50, 12);
          $this->des_imagen_lectura_50_scfile_type = $this->des_imagen_lectura__ul_type50;
      }
      if (isset($this->des_imagen_lectura_50))
      {
          $GLOBALS['des_imagen_lectura_50']      = $this->des_imagen_lectura_50;
          $GLOBALS['des_imagen_lectura_50_scfile_name'] = $this->des_imagen_lectura_50_scfile_name;
          $GLOBALS['des_imagen_lectura_50_scfile_type'] = $this->des_imagen_lectura_50_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name51']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name51'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name51]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name51'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name51];
          }
          $this->des_imagen_lectura_51      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name51'];
          $this->des_imagen_lectura_51_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name51'], 12);
          $this->des_imagen_lectura_51_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type51'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name51) && '' != $this->des_imagen_lectura__ul_name51)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name51]))
          {
              $this->des_imagen_lectura__ul_name51 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name51];
          }
          $this->des_imagen_lectura_51      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name51;
          $this->des_imagen_lectura_51_scfile_name = substr($this->des_imagen_lectura__ul_name51, 12);
          $this->des_imagen_lectura_51_scfile_type = $this->des_imagen_lectura__ul_type51;
      }
      if (isset($this->des_imagen_lectura_51))
      {
          $GLOBALS['des_imagen_lectura_51']      = $this->des_imagen_lectura_51;
          $GLOBALS['des_imagen_lectura_51_scfile_name'] = $this->des_imagen_lectura_51_scfile_name;
          $GLOBALS['des_imagen_lectura_51_scfile_type'] = $this->des_imagen_lectura_51_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name52']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name52'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name52]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name52'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name52];
          }
          $this->des_imagen_lectura_52      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name52'];
          $this->des_imagen_lectura_52_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name52'], 12);
          $this->des_imagen_lectura_52_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type52'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name52) && '' != $this->des_imagen_lectura__ul_name52)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name52]))
          {
              $this->des_imagen_lectura__ul_name52 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name52];
          }
          $this->des_imagen_lectura_52      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name52;
          $this->des_imagen_lectura_52_scfile_name = substr($this->des_imagen_lectura__ul_name52, 12);
          $this->des_imagen_lectura_52_scfile_type = $this->des_imagen_lectura__ul_type52;
      }
      if (isset($this->des_imagen_lectura_52))
      {
          $GLOBALS['des_imagen_lectura_52']      = $this->des_imagen_lectura_52;
          $GLOBALS['des_imagen_lectura_52_scfile_name'] = $this->des_imagen_lectura_52_scfile_name;
          $GLOBALS['des_imagen_lectura_52_scfile_type'] = $this->des_imagen_lectura_52_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name53']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name53'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name53]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name53'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name53];
          }
          $this->des_imagen_lectura_53      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name53'];
          $this->des_imagen_lectura_53_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name53'], 12);
          $this->des_imagen_lectura_53_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type53'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name53) && '' != $this->des_imagen_lectura__ul_name53)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name53]))
          {
              $this->des_imagen_lectura__ul_name53 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name53];
          }
          $this->des_imagen_lectura_53      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name53;
          $this->des_imagen_lectura_53_scfile_name = substr($this->des_imagen_lectura__ul_name53, 12);
          $this->des_imagen_lectura_53_scfile_type = $this->des_imagen_lectura__ul_type53;
      }
      if (isset($this->des_imagen_lectura_53))
      {
          $GLOBALS['des_imagen_lectura_53']      = $this->des_imagen_lectura_53;
          $GLOBALS['des_imagen_lectura_53_scfile_name'] = $this->des_imagen_lectura_53_scfile_name;
          $GLOBALS['des_imagen_lectura_53_scfile_type'] = $this->des_imagen_lectura_53_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name54']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name54'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name54]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name54'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name54];
          }
          $this->des_imagen_lectura_54      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name54'];
          $this->des_imagen_lectura_54_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name54'], 12);
          $this->des_imagen_lectura_54_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type54'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name54) && '' != $this->des_imagen_lectura__ul_name54)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name54]))
          {
              $this->des_imagen_lectura__ul_name54 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name54];
          }
          $this->des_imagen_lectura_54      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name54;
          $this->des_imagen_lectura_54_scfile_name = substr($this->des_imagen_lectura__ul_name54, 12);
          $this->des_imagen_lectura_54_scfile_type = $this->des_imagen_lectura__ul_type54;
      }
      if (isset($this->des_imagen_lectura_54))
      {
          $GLOBALS['des_imagen_lectura_54']      = $this->des_imagen_lectura_54;
          $GLOBALS['des_imagen_lectura_54_scfile_name'] = $this->des_imagen_lectura_54_scfile_name;
          $GLOBALS['des_imagen_lectura_54_scfile_type'] = $this->des_imagen_lectura_54_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name55']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name55'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name55]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name55'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name55];
          }
          $this->des_imagen_lectura_55      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name55'];
          $this->des_imagen_lectura_55_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name55'], 12);
          $this->des_imagen_lectura_55_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type55'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name55) && '' != $this->des_imagen_lectura__ul_name55)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name55]))
          {
              $this->des_imagen_lectura__ul_name55 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name55];
          }
          $this->des_imagen_lectura_55      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name55;
          $this->des_imagen_lectura_55_scfile_name = substr($this->des_imagen_lectura__ul_name55, 12);
          $this->des_imagen_lectura_55_scfile_type = $this->des_imagen_lectura__ul_type55;
      }
      if (isset($this->des_imagen_lectura_55))
      {
          $GLOBALS['des_imagen_lectura_55']      = $this->des_imagen_lectura_55;
          $GLOBALS['des_imagen_lectura_55_scfile_name'] = $this->des_imagen_lectura_55_scfile_name;
          $GLOBALS['des_imagen_lectura_55_scfile_type'] = $this->des_imagen_lectura_55_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name56']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name56'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name56]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name56'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name56];
          }
          $this->des_imagen_lectura_56      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name56'];
          $this->des_imagen_lectura_56_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name56'], 12);
          $this->des_imagen_lectura_56_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type56'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name56) && '' != $this->des_imagen_lectura__ul_name56)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name56]))
          {
              $this->des_imagen_lectura__ul_name56 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name56];
          }
          $this->des_imagen_lectura_56      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name56;
          $this->des_imagen_lectura_56_scfile_name = substr($this->des_imagen_lectura__ul_name56, 12);
          $this->des_imagen_lectura_56_scfile_type = $this->des_imagen_lectura__ul_type56;
      }
      if (isset($this->des_imagen_lectura_56))
      {
          $GLOBALS['des_imagen_lectura_56']      = $this->des_imagen_lectura_56;
          $GLOBALS['des_imagen_lectura_56_scfile_name'] = $this->des_imagen_lectura_56_scfile_name;
          $GLOBALS['des_imagen_lectura_56_scfile_type'] = $this->des_imagen_lectura_56_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name57']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name57'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name57]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name57'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name57];
          }
          $this->des_imagen_lectura_57      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name57'];
          $this->des_imagen_lectura_57_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name57'], 12);
          $this->des_imagen_lectura_57_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type57'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name57) && '' != $this->des_imagen_lectura__ul_name57)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name57]))
          {
              $this->des_imagen_lectura__ul_name57 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name57];
          }
          $this->des_imagen_lectura_57      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name57;
          $this->des_imagen_lectura_57_scfile_name = substr($this->des_imagen_lectura__ul_name57, 12);
          $this->des_imagen_lectura_57_scfile_type = $this->des_imagen_lectura__ul_type57;
      }
      if (isset($this->des_imagen_lectura_57))
      {
          $GLOBALS['des_imagen_lectura_57']      = $this->des_imagen_lectura_57;
          $GLOBALS['des_imagen_lectura_57_scfile_name'] = $this->des_imagen_lectura_57_scfile_name;
          $GLOBALS['des_imagen_lectura_57_scfile_type'] = $this->des_imagen_lectura_57_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name58']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name58'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name58]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name58'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name58];
          }
          $this->des_imagen_lectura_58      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name58'];
          $this->des_imagen_lectura_58_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name58'], 12);
          $this->des_imagen_lectura_58_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type58'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name58) && '' != $this->des_imagen_lectura__ul_name58)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name58]))
          {
              $this->des_imagen_lectura__ul_name58 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name58];
          }
          $this->des_imagen_lectura_58      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name58;
          $this->des_imagen_lectura_58_scfile_name = substr($this->des_imagen_lectura__ul_name58, 12);
          $this->des_imagen_lectura_58_scfile_type = $this->des_imagen_lectura__ul_type58;
      }
      if (isset($this->des_imagen_lectura_58))
      {
          $GLOBALS['des_imagen_lectura_58']      = $this->des_imagen_lectura_58;
          $GLOBALS['des_imagen_lectura_58_scfile_name'] = $this->des_imagen_lectura_58_scfile_name;
          $GLOBALS['des_imagen_lectura_58_scfile_type'] = $this->des_imagen_lectura_58_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name59']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name59'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name59]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name59'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name59];
          }
          $this->des_imagen_lectura_59      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name59'];
          $this->des_imagen_lectura_59_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name59'], 12);
          $this->des_imagen_lectura_59_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type59'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name59) && '' != $this->des_imagen_lectura__ul_name59)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name59]))
          {
              $this->des_imagen_lectura__ul_name59 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name59];
          }
          $this->des_imagen_lectura_59      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name59;
          $this->des_imagen_lectura_59_scfile_name = substr($this->des_imagen_lectura__ul_name59, 12);
          $this->des_imagen_lectura_59_scfile_type = $this->des_imagen_lectura__ul_type59;
      }
      if (isset($this->des_imagen_lectura_59))
      {
          $GLOBALS['des_imagen_lectura_59']      = $this->des_imagen_lectura_59;
          $GLOBALS['des_imagen_lectura_59_scfile_name'] = $this->des_imagen_lectura_59_scfile_name;
          $GLOBALS['des_imagen_lectura_59_scfile_type'] = $this->des_imagen_lectura_59_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name60']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name60'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name60]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name60'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name60];
          }
          $this->des_imagen_lectura_60      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name60'];
          $this->des_imagen_lectura_60_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name60'], 12);
          $this->des_imagen_lectura_60_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type60'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name60) && '' != $this->des_imagen_lectura__ul_name60)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name60]))
          {
              $this->des_imagen_lectura__ul_name60 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name60];
          }
          $this->des_imagen_lectura_60      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name60;
          $this->des_imagen_lectura_60_scfile_name = substr($this->des_imagen_lectura__ul_name60, 12);
          $this->des_imagen_lectura_60_scfile_type = $this->des_imagen_lectura__ul_type60;
      }
      if (isset($this->des_imagen_lectura_60))
      {
          $GLOBALS['des_imagen_lectura_60']      = $this->des_imagen_lectura_60;
          $GLOBALS['des_imagen_lectura_60_scfile_name'] = $this->des_imagen_lectura_60_scfile_name;
          $GLOBALS['des_imagen_lectura_60_scfile_type'] = $this->des_imagen_lectura_60_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name61']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name61'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name61]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name61'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name61];
          }
          $this->des_imagen_lectura_61      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name61'];
          $this->des_imagen_lectura_61_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name61'], 12);
          $this->des_imagen_lectura_61_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type61'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name61) && '' != $this->des_imagen_lectura__ul_name61)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name61]))
          {
              $this->des_imagen_lectura__ul_name61 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name61];
          }
          $this->des_imagen_lectura_61      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name61;
          $this->des_imagen_lectura_61_scfile_name = substr($this->des_imagen_lectura__ul_name61, 12);
          $this->des_imagen_lectura_61_scfile_type = $this->des_imagen_lectura__ul_type61;
      }
      if (isset($this->des_imagen_lectura_61))
      {
          $GLOBALS['des_imagen_lectura_61']      = $this->des_imagen_lectura_61;
          $GLOBALS['des_imagen_lectura_61_scfile_name'] = $this->des_imagen_lectura_61_scfile_name;
          $GLOBALS['des_imagen_lectura_61_scfile_type'] = $this->des_imagen_lectura_61_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name62']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name62'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name62]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name62'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name62];
          }
          $this->des_imagen_lectura_62      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name62'];
          $this->des_imagen_lectura_62_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name62'], 12);
          $this->des_imagen_lectura_62_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type62'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name62) && '' != $this->des_imagen_lectura__ul_name62)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name62]))
          {
              $this->des_imagen_lectura__ul_name62 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name62];
          }
          $this->des_imagen_lectura_62      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name62;
          $this->des_imagen_lectura_62_scfile_name = substr($this->des_imagen_lectura__ul_name62, 12);
          $this->des_imagen_lectura_62_scfile_type = $this->des_imagen_lectura__ul_type62;
      }
      if (isset($this->des_imagen_lectura_62))
      {
          $GLOBALS['des_imagen_lectura_62']      = $this->des_imagen_lectura_62;
          $GLOBALS['des_imagen_lectura_62_scfile_name'] = $this->des_imagen_lectura_62_scfile_name;
          $GLOBALS['des_imagen_lectura_62_scfile_type'] = $this->des_imagen_lectura_62_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name63']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name63'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name63]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name63'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name63];
          }
          $this->des_imagen_lectura_63      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name63'];
          $this->des_imagen_lectura_63_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name63'], 12);
          $this->des_imagen_lectura_63_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type63'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name63) && '' != $this->des_imagen_lectura__ul_name63)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name63]))
          {
              $this->des_imagen_lectura__ul_name63 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name63];
          }
          $this->des_imagen_lectura_63      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name63;
          $this->des_imagen_lectura_63_scfile_name = substr($this->des_imagen_lectura__ul_name63, 12);
          $this->des_imagen_lectura_63_scfile_type = $this->des_imagen_lectura__ul_type63;
      }
      if (isset($this->des_imagen_lectura_63))
      {
          $GLOBALS['des_imagen_lectura_63']      = $this->des_imagen_lectura_63;
          $GLOBALS['des_imagen_lectura_63_scfile_name'] = $this->des_imagen_lectura_63_scfile_name;
          $GLOBALS['des_imagen_lectura_63_scfile_type'] = $this->des_imagen_lectura_63_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name64']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name64'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name64]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name64'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name64];
          }
          $this->des_imagen_lectura_64      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name64'];
          $this->des_imagen_lectura_64_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name64'], 12);
          $this->des_imagen_lectura_64_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type64'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name64) && '' != $this->des_imagen_lectura__ul_name64)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name64]))
          {
              $this->des_imagen_lectura__ul_name64 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name64];
          }
          $this->des_imagen_lectura_64      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name64;
          $this->des_imagen_lectura_64_scfile_name = substr($this->des_imagen_lectura__ul_name64, 12);
          $this->des_imagen_lectura_64_scfile_type = $this->des_imagen_lectura__ul_type64;
      }
      if (isset($this->des_imagen_lectura_64))
      {
          $GLOBALS['des_imagen_lectura_64']      = $this->des_imagen_lectura_64;
          $GLOBALS['des_imagen_lectura_64_scfile_name'] = $this->des_imagen_lectura_64_scfile_name;
          $GLOBALS['des_imagen_lectura_64_scfile_type'] = $this->des_imagen_lectura_64_scfile_type;
      }
      if (isset($this->NM_ajax_info['param']['des_imagen_lectura__ul_name65']) && '' != $this->NM_ajax_info['param']['des_imagen_lectura__ul_name65'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name65]))
          {
              $this->NM_ajax_info['param']['des_imagen_lectura__ul_name65'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name65];
          }
          $this->des_imagen_lectura_65      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['des_imagen_lectura__ul_name65'];
          $this->des_imagen_lectura_65_scfile_name = substr($this->NM_ajax_info['param']['des_imagen_lectura__ul_name65'], 12);
          $this->des_imagen_lectura_65_scfile_type = $this->NM_ajax_info['param']['des_imagen_lectura__ul_type65'];
      }
      elseif (isset($this->des_imagen_lectura__ul_name65) && '' != $this->des_imagen_lectura__ul_name65)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name65]))
          {
              $this->des_imagen_lectura__ul_name65 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_field_ul_name'][$this->des_imagen_lectura__ul_name65];
          }
          $this->des_imagen_lectura_65      = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->des_imagen_lectura__ul_name65;
          $this->des_imagen_lectura_65_scfile_name = substr($this->des_imagen_lectura__ul_name65, 12);
          $this->des_imagen_lectura_65_scfile_type = $this->des_imagen_lectura__ul_type65;
      }
      if (isset($this->des_imagen_lectura_65))
      {
          $GLOBALS['des_imagen_lectura_65']      = $this->des_imagen_lectura_65;
          $GLOBALS['des_imagen_lectura_65_scfile_name'] = $this->des_imagen_lectura_65_scfile_name;
          $GLOBALS['des_imagen_lectura_65_scfile_type'] = $this->des_imagen_lectura_65_scfile_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['dynsearch'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "off";
      $this->nmgp_botoes['delete'] = "off";
      if ('total' == $this->form_paginacao)
      {
          $this->nmgp_botoes['first']   = "off";
          $this->nmgp_botoes['back']    = "off";
          $this->nmgp_botoes['forward'] = "off";
          $this->nmgp_botoes['last']    = "off";
          $this->nmgp_botoes['navpage'] = "off";
          $this->nmgp_botoes['goto']    = "off";
          $this->nmgp_botoes['qtline']  = "off";
          $this->nmgp_botoes['summary'] = "on";
      }
      else
      {
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "on";
      $this->nmgp_botoes['reload'] = "off";
      }
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_orig'] = " where (des_escenario=" . $_SESSION['var_escenario'] . ")";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq'] = " where (des_escenario=" . $_SESSION['var_escenario'] . ")";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_registro_deuda_lectura']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_jap_registro_deuda_lectura'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_jap_registro_deuda_lectura'];

              $this->nmgp_botoes['update']     = $tmpDashboardButtons['form_update']    ? 'on' : 'off';
              $this->nmgp_botoes['new']        = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['insert']     = $tmpDashboardButtons['form_insert']    ? 'on' : 'off';
              $this->nmgp_botoes['delete']     = $tmpDashboardButtons['form_delete']    ? 'on' : 'off';
              $this->nmgp_botoes['copy']       = $tmpDashboardButtons['form_copy']      ? 'on' : 'off';
              $this->nmgp_botoes['first']      = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']       = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']    = $tmpDashboardButtons['form_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['navpage']    = $tmpDashboardButtons['form_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['goto']       = $tmpDashboardButtons['form_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']     = $tmpDashboardButtons['form_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['summary']    = $tmpDashboardButtons['form_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']    = $tmpDashboardButtons['form_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']  = $tmpDashboardButtons['form_dynsearch'] ? 'on' : 'off';
              $this->nmgp_botoes['reload']     = $tmpDashboardButtons['form_reload']    ? 'on' : 'off';
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field . "_"] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field . "_"] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field . "_"] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_jap_registro_deuda_lectura", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
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
      nm_gc($this->Ini->path_libs);
      $this->Ini->Gd_missing  = true;
      if(function_exists("getProdVersion"))
      {
         $_SESSION['scriptcase']['sc_prod_Version'] = str_replace(".", "", getProdVersion($this->Ini->path_libs));
         if(function_exists("gd_info"))
         {
            $this->Ini->Gd_missing = false;
         }
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_trata_img.php", "C", "nm_trata_img") ; 

      if (is_file($this->Ini->path_aplicacao . 'form_jap_registro_deuda_lectura_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_jap_registro_deuda_lectura_help.txt');
          if ($arr_link_webhelp)
          {
              foreach ($arr_link_webhelp as $str_link_webhelp)
              {
                  $str_link_webhelp = trim($str_link_webhelp);
                  if ('form:' == substr($str_link_webhelp, 0, 5))
                  {
                      $arr_link_parts = explode(':', $str_link_webhelp);
                      if ('' != $arr_link_parts[1] && is_file($this->Ini->root . $this->Ini->path_help . $arr_link_parts[1]))
                      {
                          $this->url_webhelp = $this->Ini->path_help . $arr_link_parts[1];
                      }
                  }
              }
          }
      }

      if (is_dir($this->Ini->path_aplicacao . 'img'))
      {
          $Res_dir_img = @opendir($this->Ini->path_aplicacao . 'img');
          if ($Res_dir_img)
          {
              while (FALSE !== ($Str_arquivo = @readdir($Res_dir_img))) 
              {
                 if (@is_file($this->Ini->path_aplicacao . 'img/' . $Str_arquivo) && '.' != $Str_arquivo && '..' != $this->Ini->path_aplicacao . 'img/' . $Str_arquivo)
                 {
                     @unlink($this->Ini->path_aplicacao . 'img/' . $Str_arquivo);
                 }
              }
          }
          @closedir($Res_dir_img);
          rmdir($this->Ini->path_aplicacao . 'img');
      }

      if ($this->Embutida_proc)
      { 
          require_once($this->Ini->path_embutida . 'form_jap_registro_deuda_lectura/form_jap_registro_deuda_lectura_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_jap_registro_deuda_lectura_erro.class.php"); 
      }
      $this->Erro      = new form_jap_registro_deuda_lectura_erro();
      $this->Erro->Ini = $this->Ini;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg']) && strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg']) == "all")
      {
          $this->form_paginacao = "total";
      }
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "dyn_search" || $this->nmgp_opcao == "dyn_search_clear")  
      {
          $this->proc_fast_search = true;
          if ($this->nmgp_opcao == "dyn_search_clear")  
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq']);
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search']);
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal'])) 
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal'];
              }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter'])
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']);
                  $this->NM_ajax_info['empty_filter'] = 'ok';
                  form_jap_registro_deuda_lectura_pack_ajax_response();
                  exit;
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_clear'] = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_refresh'] = array();
              $this->html_dynamic_search();
          } 
          else
          {
              $this->SC_proc_dyn_search($this->nmgp_arg_dyn_search);
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
      } 
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao']))
         { 
             if ($this->des_id_ != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = true;
      $this->sc_evento = $this->nmgp_opcao;
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$orig_img);
            echo $orig_img . '_@@NM@@_';            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }
                $sc_obj_img->setManterAspecto(true);
            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- des_id_
      $this->field_config['des_id_']               = array();
      $this->field_config['des_id_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['des_id_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_id_']['symbol_dec'] = '';
      $this->field_config['des_id_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['des_id_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- des_orden_
      $this->field_config['des_orden_']               = array();
      $this->field_config['des_orden_']['symbol_grp'] = '';
      $this->field_config['des_orden_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_orden_']['symbol_dec'] = '';
      $this->field_config['des_orden_']['symbol_neg'] = '-';
      $this->field_config['des_orden_']['format_neg'] = '2';
      //-- des_lectura_anterior_
      $this->field_config['des_lectura_anterior_']               = array();
      $this->field_config['des_lectura_anterior_']['symbol_grp'] = '';
      $this->field_config['des_lectura_anterior_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_lectura_anterior_']['symbol_dec'] = '';
      $this->field_config['des_lectura_anterior_']['symbol_neg'] = '-';
      $this->field_config['des_lectura_anterior_']['format_neg'] = '2';
      //-- des_lectura_actual_
      $this->field_config['des_lectura_actual_']               = array();
      $this->field_config['des_lectura_actual_']['symbol_grp'] = '';
      $this->field_config['des_lectura_actual_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_lectura_actual_']['symbol_dec'] = '';
      $this->field_config['des_lectura_actual_']['symbol_neg'] = '-';
      $this->field_config['des_lectura_actual_']['format_neg'] = '2';
      //-- des_consumo_
      $this->field_config['des_consumo_']               = array();
      $this->field_config['des_consumo_']['symbol_grp'] = '';
      $this->field_config['des_consumo_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_consumo_']['symbol_dec'] = '';
      $this->field_config['des_consumo_']['symbol_neg'] = '-';
      $this->field_config['des_consumo_']['format_neg'] = '2';
      //-- des_consumo_base_
      $this->field_config['des_consumo_base_']               = array();
      $this->field_config['des_consumo_base_']['symbol_grp'] = '';
      $this->field_config['des_consumo_base_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_consumo_base_']['symbol_dec'] = '';
      $this->field_config['des_consumo_base_']['symbol_neg'] = '-';
      $this->field_config['des_consumo_base_']['format_neg'] = '2';
      //-- des_consumo_excedente_
      $this->field_config['des_consumo_excedente_']               = array();
      $this->field_config['des_consumo_excedente_']['symbol_grp'] = '';
      $this->field_config['des_consumo_excedente_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_consumo_excedente_']['symbol_dec'] = '';
      $this->field_config['des_consumo_excedente_']['symbol_neg'] = '-';
      $this->field_config['des_consumo_excedente_']['format_neg'] = '2';
      //-- des_total_
      $this->field_config['des_total_']               = array();
      $this->field_config['des_total_']['symbol_grp'] = '';
      $this->field_config['des_total_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_total_']['symbol_dec'] = '.';
      $this->field_config['des_total_']['symbol_neg'] = '-';
      $this->field_config['des_total_']['format_neg'] = '2';
      //-- des_escenario_
      $this->field_config['des_escenario_']               = array();
      $this->field_config['des_escenario_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['des_escenario_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_escenario_']['symbol_dec'] = '';
      $this->field_config['des_escenario_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['des_escenario_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- des_valor_base_
      $this->field_config['des_valor_base_']               = array();
      $this->field_config['des_valor_base_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['des_valor_base_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['des_valor_base_']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['des_valor_base_']['symbol_mon'] = '';
      $this->field_config['des_valor_base_']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['des_valor_base_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- des_valor_excedente_
      $this->field_config['des_valor_excedente_']               = array();
      $this->field_config['des_valor_excedente_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_val'];
      $this->field_config['des_valor_excedente_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit'];
      $this->field_config['des_valor_excedente_']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_val'];
      $this->field_config['des_valor_excedente_']['symbol_mon'] = '';
      $this->field_config['des_valor_excedente_']['format_pos'] = $_SESSION['scriptcase']['reg_conf']['monet_f_pos'];
      $this->field_config['des_valor_excedente_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['monet_f_neg'];
      //-- des_operacion_
      $this->field_config['des_operacion_']               = array();
      $this->field_config['des_operacion_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['des_operacion_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_operacion_']['symbol_dec'] = '';
      $this->field_config['des_operacion_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['des_operacion_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- des_ruta_
      $this->field_config['des_ruta_']               = array();
      $this->field_config['des_ruta_']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['des_ruta_']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['des_ruta_']['symbol_dec'] = '';
      $this->field_config['des_ruta_']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['des_ruta_']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $GLOBALS, $Campos_Crit, $Campos_Falta, $Campos_Erros, $sc_seq_vert, $sc_check_incl, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Gera_log_access'] = false;
      }
      if ($this->nmgp_opcao == "change_qtd_line")
      {
          $this->NM_btn_navega = "N";
          if (strtolower($this->nmgp_max_line) == "all")
          {
              $this->nmgp_opcao = "inicio";
              $this->form_paginacao = "total";
          }
          else
          {
              $this->nmgp_opcao = "igual";
              $this->form_paginacao = "parcial";
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg'] = $this->nmgp_max_line;
      }
      if ('' != $_SESSION['scriptcase']['change_regional_old'])
      {
          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_old'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $this->nm_tira_formatacao();

          $_SESSION['scriptcase']['str_conf_reg'] = $_SESSION['scriptcase']['change_regional_new'];
          $this->Ini->regionalDefault($_SESSION['scriptcase']['str_conf_reg']);
          $this->loadFieldConfig();
          $guarda_formatado = $this->formatado;
          $this->nm_formatar_campos();
          $this->formatado = $guarda_formatado;

          $_SESSION['scriptcase']['change_regional_old'] = '';
          $_SESSION['scriptcase']['change_regional_new'] = '';
      }

      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opc_edit'] = true;  
      $this->SC_log_arr_vert = array();
      $sc_contr_vert = (isset($GLOBALS["sc_contr_vert"])) ? $GLOBALS["sc_contr_vert"] : "";
      $sc_seq_vert   = 1; 
      $sc_opc_salva  = $this->nmgp_opcao; 
      $sc_todas_Crit = "";
      $sc_check_excl = array(); 
      $sc_check_incl = array(); 
      if (isset($GLOBALS["sc_check_vert"]) && is_array($GLOBALS["sc_check_vert"])) 
      { 
          if ($this->nmgp_opcao == "incluir" || ($this->nmgp_opcao == "recarga" && $this->nmgp_opc_ant == "novo"))
          {
              $sc_check_incl = $GLOBALS["sc_check_vert"]; 
          }
          elseif ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir" || $this->nmgp_opcao == "recarga")
          {
              $sc_check_excl = $GLOBALS["sc_check_vert"]; 
          }
      } 
      elseif ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $sc_check_incl = array($_POST['upload_file_row']);
      }
      if (empty($this->nmgp_opcao)) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "novo";
         $this->nm_select_banco();
         $this->nm_gera_html();
         $this->NM_ajax_info['newline'] = NM_utf8_urldecode($this->New_Line);
         $this->NM_close_db();
         form_jap_registro_deuda_lectura_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'backup_line' == $this->NM_ajax_opcao)
      {
         $this->nmgp_opcao = "igual";
         $this->nm_tira_formatacao();
         $this->nm_select_banco();
         $this->ajax_return_values();
         $this->NM_close_db();
         form_jap_registro_deuda_lectura_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'submit_form' == $this->NM_ajax_opcao)
      {
         if (isset($this->des_id_)) { $this->nm_limpa_alfa($this->des_id_); }
         if (isset($this->des_propietario_)) { $this->nm_limpa_alfa($this->des_propietario_); }
         if (isset($this->des_contrato_)) { $this->nm_limpa_alfa($this->des_contrato_); }
         if (isset($this->des_lectura_anterior_)) { $this->nm_limpa_alfa($this->des_lectura_anterior_); }
         if (isset($this->des_lectura_actual_)) { $this->nm_limpa_alfa($this->des_lectura_actual_); }
         if (isset($this->des_consumo_base_)) { $this->nm_limpa_alfa($this->des_consumo_base_); }
         if (isset($this->des_consumo_excedente_)) { $this->nm_limpa_alfa($this->des_consumo_excedente_); }
         if (isset($this->des_total_)) { $this->nm_limpa_alfa($this->des_total_); }
         if (isset($this->des_numero_medidor_)) { $this->nm_limpa_alfa($this->des_numero_medidor_); }
         if (isset($this->des_consumo_)) { $this->nm_limpa_alfa($this->des_consumo_); }
         if (isset($this->des_orden_)) { $this->nm_limpa_alfa($this->des_orden_); }
         if (isset($this->des_revisar_)) { $this->nm_limpa_alfa($this->des_revisar_); }
         if (isset($this->des_registra_danio_)) { $this->nm_limpa_alfa($this->des_registra_danio_); }
         if (isset($this->des_contabilizado_)) { $this->nm_limpa_alfa($this->des_contabilizado_); }
         if (isset($this->des_numero_censo_)) { $this->nm_limpa_alfa($this->des_numero_censo_); }
         if (isset($this->Sc_num_lin_alt) && $this->Sc_num_lin_alt > 0) 
         {
             $sc_seq_vert = $this->Sc_num_lin_alt;
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'][$sc_seq_vert];
             $this->des_escenario_ = $this->nmgp_dados_form['des_escenario_']; 
             $this->des_valor_base_ = $this->nmgp_dados_form['des_valor_base_']; 
             $this->des_valor_excedente_ = $this->nmgp_dados_form['des_valor_excedente_']; 
             $this->des_operacion_ = $this->nmgp_dados_form['des_operacion_']; 
             $this->des_estado_ = $this->nmgp_dados_form['des_estado_']; 
             $this->des_ruta_ = $this->nmgp_dados_form['des_ruta_']; 
         }
         $this->controle_form_vert();
         if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
         {
             $this->NM_rollback_db();
              if ($this->NM_ajax_flag)
              {
                  if (!isset($this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura']) || !is_array($this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura']))
                  {
                      $this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura'] = array();
                  }
                  if ($Campos_Crit != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura'][] = $Campos_Crit;
                  }
                  if (!empty($Campos_Falta))
                  {
                      $this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura'][] = $this->Formata_Campos_Falta($Campos_Falta);
                  }
                  if ($this->Campos_Mens_erro != "")
                  {
                      $this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura'][] = $this->Campos_Mens_erro;
                  }
                  $this->NM_gera_nav_page(); 
                  $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              }
         }
         else
         {
             if ($this->SC_log_atv)
             {
                 $this->SC_log_arr_vert[] = $this->SC_log_arr;
                 $this->SC_log_atv = false;
             }
             $this->NM_commit_db();
         }
         if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
         }
         $this->NM_close_db();
		if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
		}
		if ('incluir' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmi']);
		}
		if ('excluir' == $this->NM_ajax_info['param']['nmgp_opcao'] && 'ERROR' != $this->NM_ajax_info['result']) {
			$this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmd']);
		}
         form_jap_registro_deuda_lectura_pack_ajax_response();
         exit;
      }
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
          if ('validate_des_id_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_id_');
          }
          if ('validate_des_orden_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_orden_');
          }
          if ('validate_des_propietario_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_propietario_');
          }
          if ('validate_des_contrato_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_contrato_');
          }
          if ('validate_des_numero_medidor_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_numero_medidor_');
          }
          if ('validate_des_numero_censo_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_numero_censo_');
          }
          if ('validate_des_lectura_anterior_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_lectura_anterior_');
          }
          if ('validate_des_lectura_actual_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_lectura_actual_');
          }
          if ('validate_des_consumo_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_consumo_');
          }
          if ('validate_des_consumo_base_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_consumo_base_');
          }
          if ('validate_des_consumo_excedente_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_consumo_excedente_');
          }
          if ('validate_des_total_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_total_');
          }
          if ('validate_des_revisar_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_revisar_');
          }
          if ('validate_des_registra_danio_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_registra_danio_');
          }
          if ('validate_des_contabilizado_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_contabilizado_');
          }
          if ('validate_des_imagen_lectura_' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'des_imagen_lectura_');
          }
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
      while ($sc_contr_vert > $sc_seq_vert) 
      { 
         $Campos_Crit  = "";
         $Campos_Falta = array();
         $Campos_Erros = array();
         $this->des_id_ = $GLOBALS["des_id_" . $sc_seq_vert]; 
         $this->des_orden_ = $GLOBALS["des_orden_" . $sc_seq_vert]; 
         $this->des_propietario_ = $GLOBALS["des_propietario_" . $sc_seq_vert]; 
         $this->des_contrato_ = $GLOBALS["des_contrato_" . $sc_seq_vert]; 
         $this->des_numero_medidor_ = $GLOBALS["des_numero_medidor_" . $sc_seq_vert]; 
         $this->des_numero_censo_ = $GLOBALS["des_numero_censo_" . $sc_seq_vert]; 
         $this->des_lectura_anterior_ = $GLOBALS["des_lectura_anterior_" . $sc_seq_vert]; 
         $this->des_lectura_actual_ = $GLOBALS["des_lectura_actual_" . $sc_seq_vert]; 
         $this->des_consumo_ = $GLOBALS["des_consumo_" . $sc_seq_vert]; 
         $this->des_consumo_base_ = $GLOBALS["des_consumo_base_" . $sc_seq_vert]; 
         $this->des_consumo_excedente_ = $GLOBALS["des_consumo_excedente_" . $sc_seq_vert]; 
         $this->des_total_ = $GLOBALS["des_total_" . $sc_seq_vert]; 
         $this->des_revisar_ = $GLOBALS["des_revisar_" . $sc_seq_vert]; 
         $this->des_registra_danio_ = $GLOBALS["des_registra_danio_" . $sc_seq_vert]; 
         $this->des_contabilizado_ = $GLOBALS["des_contabilizado_" . $sc_seq_vert]; 
         $this->des_imagen_lectura_ = $GLOBALS["des_imagen_lectura_" . $sc_seq_vert]; 
         $this->des_imagen_lectura__scfile_type = $GLOBALS["des_imagen_lectura_"  . $sc_seq_vert . "_scfile_type"]; 
         $this->des_imagen_lectura__scfile_name = $GLOBALS["des_imagen_lectura_"  . $sc_seq_vert . "_scfile_name"]; 
         $this->des_imagen_lectura__limpa = $GLOBALS["des_imagen_lectura__limpa" . $sc_seq_vert]; 
         $this->des_imagen_lectura__salva = $GLOBALS["des_imagen_lectura_"  . $sc_seq_vert . "_salva"]; 
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'][$sc_seq_vert]))
         {
             $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'][$sc_seq_vert];
             $this->des_escenario_ = $this->nmgp_dados_form['des_escenario_']; 
             $this->des_valor_base_ = $this->nmgp_dados_form['des_valor_base_']; 
             $this->des_valor_excedente_ = $this->nmgp_dados_form['des_valor_excedente_']; 
             $this->des_operacion_ = $this->nmgp_dados_form['des_operacion_']; 
             $this->des_estado_ = $this->nmgp_dados_form['des_estado_']; 
             $this->des_ruta_ = $this->nmgp_dados_form['des_ruta_']; 
         }
         if (isset($this->des_id_)) { $this->nm_limpa_alfa($this->des_id_); }
         if (isset($this->des_propietario_)) { $this->nm_limpa_alfa($this->des_propietario_); }
         if (isset($this->des_contrato_)) { $this->nm_limpa_alfa($this->des_contrato_); }
         if (isset($this->des_lectura_anterior_)) { $this->nm_limpa_alfa($this->des_lectura_anterior_); }
         if (isset($this->des_lectura_actual_)) { $this->nm_limpa_alfa($this->des_lectura_actual_); }
         if (isset($this->des_consumo_base_)) { $this->nm_limpa_alfa($this->des_consumo_base_); }
         if (isset($this->des_consumo_excedente_)) { $this->nm_limpa_alfa($this->des_consumo_excedente_); }
         if (isset($this->des_total_)) { $this->nm_limpa_alfa($this->des_total_); }
         if (isset($this->des_numero_medidor_)) { $this->nm_limpa_alfa($this->des_numero_medidor_); }
         if (isset($this->des_consumo_)) { $this->nm_limpa_alfa($this->des_consumo_); }
         if (isset($this->des_orden_)) { $this->nm_limpa_alfa($this->des_orden_); }
         if (isset($this->des_revisar_)) { $this->nm_limpa_alfa($this->des_revisar_); }
         if (isset($this->des_registra_danio_)) { $this->nm_limpa_alfa($this->des_registra_danio_); }
         if (isset($this->des_contabilizado_)) { $this->nm_limpa_alfa($this->des_contabilizado_); }
         if (isset($this->des_numero_censo_)) { $this->nm_limpa_alfa($this->des_numero_censo_); }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'])) 
         {
            $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'][$sc_seq_vert];
         }
         if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'])) 
         {
            $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert];
         }
         if ($this->nmgp_opcao != "recarga" && in_array($sc_seq_vert, $sc_check_excl))
         {
             $this->nmgp_opcao = "excluir";
         }
         if ($this->nmgp_opcao == "incluir" && !in_array($sc_seq_vert, $sc_check_incl))
         { }
         else
         {
             $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_disabled'] = array();
             $this->controle_form_vert(); 
             $this->nmgp_opcao = $sc_opc_salva; 
             if ($this->nmgp_opcao != "recarga"  && $this->nmgp_opcao != "muda_form" && ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != ""))
             {
                 $sc_todas_Crit .= (!empty($sc_todas_Crit)) ? "<br>" : ""; 
                 $sc_todas_Crit .= "<B>" . $this->Ini->Nm_lang['lang_errm_line'] . $sc_seq_vert . "</B>: "; 
                 $sc_todas_Crit .= $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, '', true, true);
                 $this->Campos_Mens_erro = ""; 
             }
             elseif ($this->SC_log_atv)
             {
                 $this->SC_log_arr_vert[] = $this->SC_log_arr;
                 $this->SC_log_atv = false;
             }
             if ($this->nmgp_opcao != "recarga") 
             {
                $this->nm_guardar_campos();
                $this->nm_formatar_campos();
             }
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_id_'] =  $this->des_id_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_orden_'] =  $this->des_orden_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_propietario_'] =  $this->des_propietario_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contrato_'] =  $this->des_contrato_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_numero_medidor_'] =  $this->des_numero_medidor_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_numero_censo_'] =  $this->des_numero_censo_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_lectura_anterior_'] =  $this->des_lectura_anterior_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_lectura_actual_'] =  $this->des_lectura_actual_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_'] =  $this->des_consumo_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_base_'] =  $this->des_consumo_base_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_excedente_'] =  $this->des_consumo_excedente_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_total_'] =  $this->des_total_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_revisar_'] =  $this->des_revisar_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_registra_danio_'] =  $this->des_registra_danio_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contabilizado_'] =  $this->des_contabilizado_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_imagen_lectura_'] =  $this->des_imagen_lectura_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_imagen_lectura__limpa'] =  $this->des_imagen_lectura__limpa; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_escenario_'] =  $this->des_escenario_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_valor_base_'] =  $this->des_valor_base_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_valor_excedente_'] =  $this->des_valor_excedente_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_operacion_'] =  $this->des_operacion_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_estado_'] =  $this->des_estado_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_ruta_'] =  $this->des_ruta_; 
         }
         $sc_seq_vert++; 
      } 
      if (!empty($sc_todas_Crit)) 
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sc_todas_Crit); 
          if ($this->nmgp_opcao == "incluir")
          { 
              $this->nmgp_opcao = "novo"; 
          }
      } 
      elseif ($this->nmgp_opcao == "incluir")
      { 
          $this->nmgp_opcao = "novo"; 
      }
      if ($this->nmgp_opcao == 'incluir' && isset($_POST['upload_file_row']) && '' != $_POST['upload_file_row'])
      {
          $this->nmgp_opcao = 'igual';
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && (!$this->NM_ajax_flag || 'event_' != substr($this->NM_ajax_opcao, 0, 6))) 
      { 
          if ($this->sc_teve_incl) 
          { 
              $this->sc_after_all_insert = true;
          }
          if ($this->sc_teve_alt) 
          { 
              $this->sc_after_all_update = true;
          }
          if ($this->sc_teve_excl) 
          { 
              $this->sc_after_all_delete = true;
          }
          if (empty($sc_todas_Crit)) 
          { 
              $this->NM_commit_db(); 
              $this->nm_select_banco();
              $sc_check_excl = array(); 
          } 
          else
          { 
              $this->NM_rollback_db(); 
          } 
      } 
      if ($this->nmgp_opcao == "recarga") 
      { 
          $this->NM_gera_nav_page(); 
      } 
      if ($this->NM_ajax_flag && ('navigate_form' == $this->NM_ajax_opcao || !empty($this->nmgp_refresh_fields)))
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          $this->NM_close_db();
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
      {
          $this->nm_gera_html();
          $this->NM_ajax_info['tableRefresh'] = NM_charset_to_utf8($this->Table_refresh . $this->New_Line) . '</table>';
          $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
          $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
          $this->NM_ajax_info['rsSize'] = sizeof($this->form_vert_form_jap_registro_deuda_lectura);
          $this->NM_ajax_info['fldList']['des_id_']['keyVal'] = sc_htmlentities($this->nmgp_dados_form['des_id_']);
          $this->NM_close_db();
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_des_lectura_actual__onblur' == $this->NM_ajax_opcao)
          {
              $this->des_lectura_actual__onBlur();
          }
          if ('event_des_lectura_actual__onchange' == $this->NM_ajax_opcao)
          {
              $this->des_lectura_actual__onChange();
          }
          if ('event_des_lectura_anterior__onchange' == $this->NM_ajax_opcao)
          {
              $this->des_lectura_anterior__onChange();
          }
          if ('event_des_registra_danio__onclick' == $this->NM_ajax_opcao)
          {
              $this->des_registra_danio__onClick();
          }
          if ('event_des_revisar__onclick' == $this->NM_ajax_opcao)
          {
              $this->des_revisar__onClick();
          }
          $this->NM_close_db();
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_teve_incl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_teve_alt && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
              if ($this->sc_teve_excl && empty($sc_todas_Crit))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
      }
      $this->nm_todas_criticas = $sc_todas_Crit;
      $this->nm_gera_html();
      $this->NM_close_db(); 
      if ($this->Change_Menu)
      {
          $apl_menu  = $_SESSION['scriptcase']['menu_atual'];
          $Arr_rastro = array();
          if (isset($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) && count($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu]) > 1)
          {
              foreach ($_SESSION['scriptcase']['menu_apls'][$apl_menu][$this->sc_init_menu] as $menu => $apls)
              {
                 $Arr_rastro[] = "'<a href=\"" . $apls['link'] . "?script_case_init=" . $this->sc_init_menu . "\" target=\"#NMIframe#\">" . $apls['label'] . "</a>'";
              }
              $ult_apl = count($Arr_rastro) - 1;
              unset($Arr_rastro[$ult_apl]);
              $rastro = implode(",", $Arr_rastro);
?>
  <script type="text/javascript">
     link_atual = new Array (<?php echo $rastro ?>);
     parent.writeFastMenu(link_atual);
  </script>
<?php
          }
          else
          {
?>
  <script type="text/javascript">
     parent.clearFastMenu();
  </script>
<?php
          }
      }
   }
   function controle_form_vert()
   {
     global $nm_opc_lookup,$Campos_Crit, $Campos_Falta, $Campos_Erros, 
            $glo_senha_protect, $nm_apl_dependente, $nm_form_submit;

//
//-----> 
//
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->des_revisar_))
          {
              $x = 0; 
              $this->des_revisar__1 = $this->des_revisar_;
              $this->des_revisar_ = ""; 
              if ($this->des_revisar__1 != "") 
              { 
                  foreach ($this->des_revisar__1 as $dados_des_revisar__1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->des_revisar_ .= ";";
                      } 
                      $this->des_revisar_ .= $dados_des_revisar__1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->des_registra_danio_))
          {
              $x = 0; 
              $this->des_registra_danio__1 = $this->des_registra_danio_;
              $this->des_registra_danio_ = ""; 
              if ($this->des_registra_danio__1 != "") 
              { 
                  foreach ($this->des_registra_danio__1 as $dados_des_registra_danio__1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->des_registra_danio_ .= ";";
                      } 
                      $this->des_registra_danio_ .= $dados_des_registra_danio__1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_jap_registro_deuda_lectura_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          return; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              $this->nmgp_opc_ant = $this->nmgp_opcao ; 
              if ($this->nmgp_opcao == "incluir" && $nm_apl_dependente == 1) 
              { 
                  $this->nm_flag_saida_novo = "S";; 
              }
              if ($this->nmgp_opcao == "incluir") 
              { 
                  $GLOBALS["erro_incl"] = 1; 
              }
              $this->nmgp_opcao = "nada" ; 
          }
      }
      elseif (isset($nm_form_submit) && 1 == $nm_form_submit && $this->nmgp_opcao != "menu_link" && $this->nmgp_opcao != "recarga_mobile")
      {
      }
//
      if ($this->nmgp_opcao != "nada")
      {
          $this->nm_acessa_banco();
      }
      else
      {
           if ($this->nmgp_opc_ant == "incluir") 
           { 
               $this->nm_proc_onload(false);
           }
           else
           { 
              $this->nm_guardar_campos();
           }
      }
   }
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_jap_registro_deuda_lectura.zip";
          $Arq_htm = $this->Ini->path_imag_temp . "/" . $Zip_name;
          $Arq_zip = $this->Ini->root . $Arq_htm;
          $Zip_f     = (FALSE !== strpos($Arq_zip, ' ')) ? " \"" . $Arq_zip . "\"" :  $Arq_zip;
          $Arq_input = (FALSE !== strpos($Arq_base, ' ')) ? " \"" . $Arq_base . "\"" :  $Arq_base;
           if (is_file($Arq_zip)) {
               unlink($Arq_zip);
           }
           $str_zip = "";
           if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
           {
               chdir($this->Ini->path_third . "/zip/windows");
               $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $Html_password . " " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
           {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
           {
               chdir($this->Ini->path_third . "/zip/mac/bin");
               $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $Arq_input;
           }
           if (!empty($str_zip)) {
               exec($str_zip);
           }
           // ----- ZIP log
           $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
           if ($fp)
           {
               @fwrite($fp, $str_zip . "\r\n\r\n");
               @fclose($fp);
           }
           foreach ($this->Ini->Img_export_zip as $cada_img_zip)
           {
               $str_zip      = "";
              $cada_img_zip = '"' . $cada_img_zip . '"';
               if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
               {
                   $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $Html_password . " " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
               {
                   $str_zip = "./7za " . $Parm_pass . $Html_password . " a " . $Zip_f . " " . $cada_img_zip;
               }
               if (!empty($str_zip)) {
                   exec($str_zip);
               }
               // ----- ZIP log
               $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'a');
               if ($fp)
               {
                   @fwrite($fp, $str_zip . "\r\n\r\n");
                   @fclose($fp);
               }
           }
           if (is_file($Arq_zip)) {
               unlink($Arq_base);
           } 
          $path_doc_md5 = md5($Arq_htm);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " jap_deudas_escenario") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" /> 
  <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" /> 
  <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
</HEAD>
<BODY class="scExportPage">
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: top">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">PRINT</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
   <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

   <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>

    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo  $this->form_encode_input($Arq_htm) ?>" target="_self" style="display: none"> 
</form>
<form name="Fdown" method="get" action="form_jap_registro_deuda_lectura_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_jap_registro_deuda_lectura"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="./" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nmgp_opcao" value="<?php echo $this->nmgp_opcao ?>"> 
</form> 
         </BODY>
         </HTML>
<?php
          exit;
  }
//
//--------------------------------------------------------------------------------------
   function NM_has_trans()
   {
       return !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access);
   }
//
//--------------------------------------------------------------------------------------
   function NM_commit_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->CommitTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
       foreach ($this->SC_log_arr_vert as $this->SC_log_arr)
       {
           $this->NM_gera_log_output();
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_rollback_db()
   {
       if ($this->Ini->sc_tem_trans_banco && !$this->Embutida_proc)
       { 
           $this->Db->RollbackTrans(); 
           $this->Ini->sc_tem_trans_banco = false;
       } 
   }
//
//--------------------------------------------------------------------------------------
   function NM_gera_log_insert($orig="Scriptcase", $evento="", $texto="")
   {
       $delim  = "'";
       $delim1 = "'";
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $delim  = "#";
           $delim1 = "#";
       } 
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date1'];
       }
       $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       $usr = isset($_SESSION['Igtech_SesionLogin']) ? $_SESSION['Igtech_SesionLogin'] : "";
       if (strtolower($_SESSION['scriptcase']['glo_tpbanco']) == 'pdo_sqlsrv' || strtolower($_SESSION['scriptcase']['glo_tpbanco']) == 'pdo_dblib')
       { 
           $dt  = $delim . date('Ymd H:i:s') . $delim1;
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $dt  = $delim . date('Y-m-d H:i:s') . $delim1;
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_informix))
       { 
           $dt  = "EXTEND(" . $dt . ", YEAR TO FRACTION)";
       } 
       if (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_access))
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_jap_registro_deuda_lectura', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_jap_registro_deuda_lectura', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_jap_registro_deuda_lectura', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_jap_registro_deuda_lectura_pack_ajax_response();
               exit; 
           }
       }
   }
//
//--------------------------------------------------------------------------------------
   function NM_close_db()
   {
       if ($this->Db && !$this->Embutida_proc)
       { 
           $this->Db->Close(); 
       } 
   }
//
//--------------------------------------------------------------------------------------
   function Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, $mode = 3) 
   {
       switch ($mode)
       {
           case 1:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 2:
               $campos_erro = array();
               if (!empty($Campos_Crit))
               {
                   $campos_erro[] = $Campos_Crit;
               }
               if (!empty($Campos_Falta))
               {
                   $campos_erro[] = $this->Formata_Campos_Falta($Campos_Falta, true);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_erro[] = $this->Campos_Mens_erro;
               }
               return implode('<br />', $campos_erro);
               break;

           case 3:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;

           case 4:
               $campos_erro = array();
               if (!empty($Campos_Erros))
               {
                   $campos_erro[] = $this->Formata_Campos_Erros_SweetAlert($Campos_Erros);
               }
               if (!empty($this->Campos_Mens_erro))
               {
                   $campos_mens_erro = str_replace(array('<br />', '<br>', '<BR />'), array('<BR>', '<BR>', '<BR>'), $this->Campos_Mens_erro);
                   $campos_mens_erro = explode('<BR>', $campos_mens_erro);
                   foreach ($campos_mens_erro as $msg_erro)
                   {
                       if ('' != $msg_erro && !in_array($msg_erro, $campos_erro))
                       {
                           $campos_erro[] = $msg_erro;
                       }
                   }
               }
               return implode('<br />', $campos_erro);
               break;
       }
   }

   function Formata_Campos_Falta($Campos_Falta, $table = false) 
   {
       $Campos_Falta = array_unique($Campos_Falta);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_reqd'] . ' ' . implode('; ', $Campos_Falta);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Falta);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Falta as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_reqd'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Crit($Campos_Crit, $table = false) 
   {
       $Campos_Crit = array_unique($Campos_Crit);

       if (!$table)
       {
           return $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . implode('; ', $Campos_Crit);
       }

       $aCols  = array();
       $iTotal = sizeof($Campos_Crit);
       $iCols  = 6 > $iTotal ? 1 : (11 > $iTotal ? 2 : (16 > $iTotal ? 3 : 4));
       $iItems = ceil($iTotal / $iCols);
       $iNowC  = 0;
       $iNowI  = 0;

       foreach ($Campos_Crit as $campo)
       {
           $aCols[$iNowC][] = $campo;
           if ($iItems == ++$iNowI)
           {
               $iNowC++;
               $iNowI = 0;
           }
       }

       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';
       $sError .= '<tr>';
       $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Ini->Nm_lang['lang_errm_flds'] . '</td>';
       foreach ($aCols as $aCol)
       {
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', $aCol) . '</td>';
       }
       $sError .= '</tr>';
       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros($Campos_Erros) 
   {
       $sError  = '<table style="border-collapse: collapse; border-width: 0px">';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= '<tr>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0; vertical-align: top; white-space: nowrap">' . $this->Recupera_Nome_Campo($campo) . ':</td>';
           $sError .= '<td class="scFormErrorMessageFont" style="padding: 0 6px; vertical-align: top; white-space: nowrap">' . implode('<br />', array_unique($erros)) . '</td>';
           $sError .= '</tr>';
       }

       $sError .= '</table>';

       return $sError;
   }

   function Formata_Campos_Erros_SweetAlert($Campos_Erros) 
   {
       $sError  = '';

       foreach ($Campos_Erros as $campo => $erros)
       {
           $sError .= $this->Recupera_Nome_Campo($campo) . ': ' . implode('<br />', array_unique($erros)) . '<br />';
       }

       return $sError;
   }

   function Recupera_Nome_Campo($campo) 
   {
       switch($campo)
       {
           case 'des_id_':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'des_orden_':
               return "Orden";
               break;
           case 'des_propietario_':
               return "" . $this->Ini->Nm_lang['lang_propietario'] . "";
               break;
           case 'des_contrato_':
               return "" . $this->Ini->Nm_lang['lang_contrato'] . "";
               break;
           case 'des_numero_medidor_':
               return "" . $this->Ini->Nm_lang['lang_numero_medidor'] . "";
               break;
           case 'des_numero_censo_':
               return "" . $this->Ini->Nm_lang['lang_numero_censo'] . "";
               break;
           case 'des_lectura_anterior_':
               return "" . $this->Ini->Nm_lang['lang_lectura_anterior'] . "";
               break;
           case 'des_lectura_actual_':
               return "" . $this->Ini->Nm_lang['lang_lectura_actual'] . "";
               break;
           case 'des_consumo_':
               return "" . $this->Ini->Nm_lang['lang_consumo'] . "";
               break;
           case 'des_consumo_base_':
               return "" . $this->Ini->Nm_lang['lang_consumo_base'] . "";
               break;
           case 'des_consumo_excedente_':
               return "" . $this->Ini->Nm_lang['lang_consumo_excedente'] . "";
               break;
           case 'des_total_':
               return "" . $this->Ini->Nm_lang['lang_total'] . "";
               break;
           case 'des_revisar_':
               return "" . $this->Ini->Nm_lang['lang_revisar'] . "";
               break;
           case 'des_registra_danio_':
               return "" . $this->Ini->Nm_lang['lang_registra_danio'] . "";
               break;
           case 'des_contabilizado_':
               return "Des Contabilizado";
               break;
           case 'des_imagen_lectura_':
               return "" . $this->Ini->Nm_lang['lang_btns_img'] . "";
               break;
           case 'des_escenario_':
               return "Des Escenario";
               break;
           case 'des_valor_base_':
               return "Des Valor Base";
               break;
           case 'des_valor_excedente_':
               return "Des Valor Excedente";
               break;
           case 'des_operacion_':
               return "Des Operacion";
               break;
           case 'des_estado_':
               return "Des Estado";
               break;
           case 'des_ruta_':
               return "Des Ruta";
               break;
       }

       return $campo;
   }

   function dateDefaultFormat()
   {
       if (isset($this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']))
       {
           $sDate = str_replace('yyyy', 'Y', $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_format']);
           $sDate = str_replace('mm',   'm', $sDate);
           $sDate = str_replace('dd',   'd', $sDate);
           return substr(chunk_split($sDate, 1, $this->Ini->Nm_conf_reg[$this->Ini->str_conf_reg]['data_sep']), 0, -1);
       }
       elseif ('en_us' == $this->Ini->str_lang)
       {
           return 'm/d/Y';
       }
       else
       {
           return 'd/m/Y';
       }
   } // dateDefaultFormat

//
//--------------------------------------------------------------------------------------
   function Valida_campos(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser, $teste_validade;
     if (is_array($filtro) && empty($filtro)) {
         $filtro = '';
     }
//---------------------------------------------------------
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura']) || !is_array($this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura']))
              {
                  $this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_jap_registro_deuda_lectura'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'des_id_' == $filtro)) || (is_array($filtro) && in_array('des_id_', $filtro)))
        $this->ValidateField_des_id_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_orden_' == $filtro)) || (is_array($filtro) && in_array('des_orden_', $filtro)))
        $this->ValidateField_des_orden_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_propietario_' == $filtro)) || (is_array($filtro) && in_array('des_propietario_', $filtro)))
        $this->ValidateField_des_propietario_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_contrato_' == $filtro)) || (is_array($filtro) && in_array('des_contrato_', $filtro)))
        $this->ValidateField_des_contrato_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_numero_medidor_' == $filtro)) || (is_array($filtro) && in_array('des_numero_medidor_', $filtro)))
        $this->ValidateField_des_numero_medidor_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_numero_censo_' == $filtro)) || (is_array($filtro) && in_array('des_numero_censo_', $filtro)))
        $this->ValidateField_des_numero_censo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_lectura_anterior_' == $filtro)) || (is_array($filtro) && in_array('des_lectura_anterior_', $filtro)))
        $this->ValidateField_des_lectura_anterior_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_lectura_actual_' == $filtro)) || (is_array($filtro) && in_array('des_lectura_actual_', $filtro)))
        $this->ValidateField_des_lectura_actual_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_consumo_' == $filtro)) || (is_array($filtro) && in_array('des_consumo_', $filtro)))
        $this->ValidateField_des_consumo_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_consumo_base_' == $filtro)) || (is_array($filtro) && in_array('des_consumo_base_', $filtro)))
        $this->ValidateField_des_consumo_base_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_consumo_excedente_' == $filtro)) || (is_array($filtro) && in_array('des_consumo_excedente_', $filtro)))
        $this->ValidateField_des_consumo_excedente_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_total_' == $filtro)) || (is_array($filtro) && in_array('des_total_', $filtro)))
        $this->ValidateField_des_total_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_revisar_' == $filtro)) || (is_array($filtro) && in_array('des_revisar_', $filtro)))
        $this->ValidateField_des_revisar_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_registra_danio_' == $filtro)) || (is_array($filtro) && in_array('des_registra_danio_', $filtro)))
        $this->ValidateField_des_registra_danio_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_contabilizado_' == $filtro)) || (is_array($filtro) && in_array('des_contabilizado_', $filtro)))
        $this->ValidateField_des_contabilizado_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'des_imagen_lectura_' == $filtro)) || (is_array($filtro) && in_array('des_imagen_lectura_', $filtro)))
        $this->ValidateField_des_imagen_lectura_($Campos_Crit, $Campos_Falta, $Campos_Erros);
      $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if (!empty($Campos_Crit) || !empty($Campos_Falta) || !empty($this->Campos_Mens_erro))
      {
          if (!empty($this->sc_force_zero))
          {
              foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
              {
                  eval('$this->' . $sc_force_zero_field . ' = "";');
                  unset($this->sc_force_zero[$i_force_zero]);
              }
          }
      }
   }

    function ValidateField_des_id_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_id_'])) {
          nm_limpa_numero($this->des_id_, $this->field_config['des_id_']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->des_id_, $this->field_config['des_id_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->des_id_ != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->des_id_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_id_']))
                  {
                      $Campos_Erros['des_id_'] = array();
                  }
                  $Campos_Erros['des_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_id_']) || !is_array($this->NM_ajax_info['errList']['des_id_']))
                  {
                      $this->NM_ajax_info['errList']['des_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_id_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_id_, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['des_id_']))
                  {
                      $Campos_Erros['des_id_'] = array();
                  }
                  $Campos_Erros['des_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_id_']) || !is_array($this->NM_ajax_info['errList']['des_id_']))
                  {
                      $this->NM_ajax_info['errList']['des_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_id_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['php_cmp_required']['des_id_']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['php_cmp_required']['des_id_'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_id'] . "" ; 
              if (!isset($Campos_Erros['des_id_']))
              {
                  $Campos_Erros['des_id_'] = array();
              }
              $Campos_Erros['des_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['des_id_']) || !is_array($this->NM_ajax_info['errList']['des_id_']))
                  {
                      $this->NM_ajax_info['errList']['des_id_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_id_'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_id_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_id_

    function ValidateField_des_orden_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_orden_'])) {
          nm_limpa_numero($this->des_orden_, $this->field_config['des_orden_']['symbol_grp']) ; 
          return;
      }
      if ($this->des_orden_ === "" || is_null($this->des_orden_))  
      { 
          $this->des_orden_ = 0;
          $this->sc_force_zero[] = 'des_orden_';
      } 
      nm_limpa_numero($this->des_orden_, $this->field_config['des_orden_']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->des_orden_ != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->des_orden_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Orden: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_orden_']))
                  {
                      $Campos_Erros['des_orden_'] = array();
                  }
                  $Campos_Erros['des_orden_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_orden_']) || !is_array($this->NM_ajax_info['errList']['des_orden_']))
                  {
                      $this->NM_ajax_info['errList']['des_orden_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_orden_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_orden_, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Orden; " ; 
                  if (!isset($Campos_Erros['des_orden_']))
                  {
                      $Campos_Erros['des_orden_'] = array();
                  }
                  $Campos_Erros['des_orden_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_orden_']) || !is_array($this->NM_ajax_info['errList']['des_orden_']))
                  {
                      $this->NM_ajax_info['errList']['des_orden_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_orden_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_orden_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_orden_

    function ValidateField_des_propietario_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['des_propietario_'])) {
       return;
   }
   if ($this->nmgp_opcao == "incluir")
   {
               if (!empty($this->des_propietario_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']) && !in_array($this->des_propietario_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['des_propietario_']))
                   {
                       $Campos_Erros['des_propietario_'] = array();
                   }
                   $Campos_Erros['des_propietario_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['des_propietario_']) || !is_array($this->NM_ajax_info['errList']['des_propietario_']))
                   {
                       $this->NM_ajax_info['errList']['des_propietario_'] = array();
                   }
                   $this->NM_ajax_info['errList']['des_propietario_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
   }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_propietario_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_propietario_

    function ValidateField_des_contrato_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['des_contrato_'])) {
       return;
   }
   if ($this->nmgp_opcao == "incluir")
   {
               if (!empty($this->des_contrato_) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']) && !in_array($this->des_contrato_, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['des_contrato_']))
                   {
                       $Campos_Erros['des_contrato_'] = array();
                   }
                   $Campos_Erros['des_contrato_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['des_contrato_']) || !is_array($this->NM_ajax_info['errList']['des_contrato_']))
                   {
                       $this->NM_ajax_info['errList']['des_contrato_'] = array();
                   }
                   $this->NM_ajax_info['errList']['des_contrato_'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
   }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_contrato_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_contrato_

    function ValidateField_des_numero_medidor_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_numero_medidor_'])) {
          return;
      }
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->des_numero_medidor_) > 10) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_numero_medidor'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['des_numero_medidor_']))
              {
                  $Campos_Erros['des_numero_medidor_'] = array();
              }
              $Campos_Erros['des_numero_medidor_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['des_numero_medidor_']) || !is_array($this->NM_ajax_info['errList']['des_numero_medidor_']))
              {
                  $this->NM_ajax_info['errList']['des_numero_medidor_'] = array();
              }
              $this->NM_ajax_info['errList']['des_numero_medidor_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 10 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_numero_medidor_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_numero_medidor_

    function ValidateField_des_numero_censo_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_numero_censo_'])) {
          return;
      }
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->des_numero_censo_) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_numero_censo'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['des_numero_censo_']))
              {
                  $Campos_Erros['des_numero_censo_'] = array();
              }
              $Campos_Erros['des_numero_censo_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['des_numero_censo_']) || !is_array($this->NM_ajax_info['errList']['des_numero_censo_']))
              {
                  $this->NM_ajax_info['errList']['des_numero_censo_'] = array();
              }
              $this->NM_ajax_info['errList']['des_numero_censo_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_numero_censo_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_numero_censo_

    function ValidateField_des_lectura_anterior_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_lectura_anterior_'])) {
          nm_limpa_numero($this->des_lectura_anterior_, $this->field_config['des_lectura_anterior_']['symbol_grp']) ; 
          return;
      }
      if ($this->des_lectura_anterior_ === "" || is_null($this->des_lectura_anterior_))  
      { 
          $this->des_lectura_anterior_ = 0;
          $this->sc_force_zero[] = 'des_lectura_anterior_';
      } 
      nm_limpa_numero($this->des_lectura_anterior_, $this->field_config['des_lectura_anterior_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_lectura_anterior_ != '')  
          { 
              $iTestSize = 6;
              if (strlen($this->des_lectura_anterior_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_anterior'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_lectura_anterior_']))
                  {
                      $Campos_Erros['des_lectura_anterior_'] = array();
                  }
                  $Campos_Erros['des_lectura_anterior_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_lectura_anterior_']) || !is_array($this->NM_ajax_info['errList']['des_lectura_anterior_']))
                  {
                      $this->NM_ajax_info['errList']['des_lectura_anterior_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_lectura_anterior_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_lectura_anterior_, 6, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_anterior'] . "; " ; 
                  if (!isset($Campos_Erros['des_lectura_anterior_']))
                  {
                      $Campos_Erros['des_lectura_anterior_'] = array();
                  }
                  $Campos_Erros['des_lectura_anterior_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_lectura_anterior_']) || !is_array($this->NM_ajax_info['errList']['des_lectura_anterior_']))
                  {
                      $this->NM_ajax_info['errList']['des_lectura_anterior_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_lectura_anterior_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_lectura_anterior_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_lectura_anterior_

    function ValidateField_des_lectura_actual_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_lectura_actual_'])) {
          nm_limpa_numero($this->des_lectura_actual_, $this->field_config['des_lectura_actual_']['symbol_grp']) ; 
          return;
      }
      if ($this->des_lectura_actual_ === "" || is_null($this->des_lectura_actual_))  
      { 
          $this->des_lectura_actual_ = 0;
          $this->sc_force_zero[] = 'des_lectura_actual_';
      } 
      nm_limpa_numero($this->des_lectura_actual_, $this->field_config['des_lectura_actual_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_lectura_actual_ != '')  
          { 
              $iTestSize = 6;
              if (strlen($this->des_lectura_actual_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_actual'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_lectura_actual_']))
                  {
                      $Campos_Erros['des_lectura_actual_'] = array();
                  }
                  $Campos_Erros['des_lectura_actual_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_lectura_actual_']) || !is_array($this->NM_ajax_info['errList']['des_lectura_actual_']))
                  {
                      $this->NM_ajax_info['errList']['des_lectura_actual_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_lectura_actual_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_lectura_actual_, 6, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_actual'] . "; " ; 
                  if (!isset($Campos_Erros['des_lectura_actual_']))
                  {
                      $Campos_Erros['des_lectura_actual_'] = array();
                  }
                  $Campos_Erros['des_lectura_actual_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_lectura_actual_']) || !is_array($this->NM_ajax_info['errList']['des_lectura_actual_']))
                  {
                      $this->NM_ajax_info['errList']['des_lectura_actual_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_lectura_actual_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_lectura_actual_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_lectura_actual_

    function ValidateField_des_consumo_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_consumo_'])) {
          nm_limpa_numero($this->des_consumo_, $this->field_config['des_consumo_']['symbol_grp']) ; 
          return;
      }
      if ($this->des_consumo_ === "" || is_null($this->des_consumo_))  
      { 
          $this->des_consumo_ = 0;
          $this->sc_force_zero[] = 'des_consumo_';
      } 
      nm_limpa_numero($this->des_consumo_, $this->field_config['des_consumo_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_consumo_ != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->des_consumo_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_consumo'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_consumo_']))
                  {
                      $Campos_Erros['des_consumo_'] = array();
                  }
                  $Campos_Erros['des_consumo_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_consumo_']) || !is_array($this->NM_ajax_info['errList']['des_consumo_']))
                  {
                      $this->NM_ajax_info['errList']['des_consumo_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_consumo_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_consumo_, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_consumo'] . "; " ; 
                  if (!isset($Campos_Erros['des_consumo_']))
                  {
                      $Campos_Erros['des_consumo_'] = array();
                  }
                  $Campos_Erros['des_consumo_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_consumo_']) || !is_array($this->NM_ajax_info['errList']['des_consumo_']))
                  {
                      $this->NM_ajax_info['errList']['des_consumo_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_consumo_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_consumo_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_consumo_

    function ValidateField_des_consumo_base_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_consumo_base_'])) {
          nm_limpa_numero($this->des_consumo_base_, $this->field_config['des_consumo_base_']['symbol_grp']) ; 
          return;
      }
      if ($this->des_consumo_base_ === "" || is_null($this->des_consumo_base_))  
      { 
          $this->des_consumo_base_ = 0;
          $this->sc_force_zero[] = 'des_consumo_base_';
      } 
      nm_limpa_numero($this->des_consumo_base_, $this->field_config['des_consumo_base_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_consumo_base_ != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->des_consumo_base_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_consumo_base'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_consumo_base_']))
                  {
                      $Campos_Erros['des_consumo_base_'] = array();
                  }
                  $Campos_Erros['des_consumo_base_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_consumo_base_']) || !is_array($this->NM_ajax_info['errList']['des_consumo_base_']))
                  {
                      $this->NM_ajax_info['errList']['des_consumo_base_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_consumo_base_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_consumo_base_, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_consumo_base'] . "; " ; 
                  if (!isset($Campos_Erros['des_consumo_base_']))
                  {
                      $Campos_Erros['des_consumo_base_'] = array();
                  }
                  $Campos_Erros['des_consumo_base_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_consumo_base_']) || !is_array($this->NM_ajax_info['errList']['des_consumo_base_']))
                  {
                      $this->NM_ajax_info['errList']['des_consumo_base_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_consumo_base_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_consumo_base_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_consumo_base_

    function ValidateField_des_consumo_excedente_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_consumo_excedente_'])) {
          nm_limpa_numero($this->des_consumo_excedente_, $this->field_config['des_consumo_excedente_']['symbol_grp']) ; 
          return;
      }
      if ($this->des_consumo_excedente_ === "" || is_null($this->des_consumo_excedente_))  
      { 
          $this->des_consumo_excedente_ = 0;
          $this->sc_force_zero[] = 'des_consumo_excedente_';
      } 
      nm_limpa_numero($this->des_consumo_excedente_, $this->field_config['des_consumo_excedente_']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_consumo_excedente_ != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->des_consumo_excedente_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_consumo_excedente'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_consumo_excedente_']))
                  {
                      $Campos_Erros['des_consumo_excedente_'] = array();
                  }
                  $Campos_Erros['des_consumo_excedente_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_consumo_excedente_']) || !is_array($this->NM_ajax_info['errList']['des_consumo_excedente_']))
                  {
                      $this->NM_ajax_info['errList']['des_consumo_excedente_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_consumo_excedente_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_consumo_excedente_, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_consumo_excedente'] . "; " ; 
                  if (!isset($Campos_Erros['des_consumo_excedente_']))
                  {
                      $Campos_Erros['des_consumo_excedente_'] = array();
                  }
                  $Campos_Erros['des_consumo_excedente_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_consumo_excedente_']) || !is_array($this->NM_ajax_info['errList']['des_consumo_excedente_']))
                  {
                      $this->NM_ajax_info['errList']['des_consumo_excedente_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_consumo_excedente_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_consumo_excedente_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_consumo_excedente_

    function ValidateField_des_total_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_total_'])) {
          if (!empty($this->field_config['des_total_']['symbol_dec'])) {
              nm_limpa_valor($this->des_total_, $this->field_config['des_total_']['symbol_dec'], $this->field_config['des_total_']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->des_total_ === "" || is_null($this->des_total_))  
      { 
          $this->des_total_ = 0;
          $this->sc_force_zero[] = 'des_total_';
      } 
      if (!empty($this->field_config['des_total_']['symbol_dec']))
      {
          nm_limpa_valor($this->des_total_, $this->field_config['des_total_']['symbol_dec'], $this->field_config['des_total_']['symbol_grp']) ; 
          if ('.' == substr($this->des_total_, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->des_total_, 1)))
              {
                  $this->des_total_ = '';
              }
              else
              {
                  $this->des_total_ = '0' . $this->des_total_;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_total_ != '')  
          { 
              $iTestSize = 18;
              if (strlen($this->des_total_) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['des_total_']))
                  {
                      $Campos_Erros['des_total_'] = array();
                  }
                  $Campos_Erros['des_total_'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['des_total_']) || !is_array($this->NM_ajax_info['errList']['des_total_']))
                  {
                      $this->NM_ajax_info['errList']['des_total_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_total_'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->des_total_, 15, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . "; " ; 
                  if (!isset($Campos_Erros['des_total_']))
                  {
                      $Campos_Erros['des_total_'] = array();
                  }
                  $Campos_Erros['des_total_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['des_total_']) || !is_array($this->NM_ajax_info['errList']['des_total_']))
                  {
                      $this->NM_ajax_info['errList']['des_total_'] = array();
                  }
                  $this->NM_ajax_info['errList']['des_total_'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_total_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_total_

    function ValidateField_des_revisar_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['des_revisar_'])) {
       return;
   }
      if ($this->des_revisar_ == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->des_revisar_ = "NO";
      } 
      else 
      { 
          if (is_array($this->des_revisar_))
          {
              $x = 0; 
              $this->des_revisar__1 = array(); 
              foreach ($this->des_revisar_ as $ind => $dados_des_revisar__1 ) 
              {
                  if ($dados_des_revisar__1 != "") 
                  {
                      $this->des_revisar__1[] = $dados_des_revisar__1;
                  } 
              } 
              $this->des_revisar_ = ""; 
              foreach ($this->des_revisar__1 as $dados_des_revisar__1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->des_revisar_ .= ";";
                   } 
                   $this->des_revisar_ .= $dados_des_revisar__1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_revisar_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_revisar_

    function ValidateField_des_registra_danio_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['des_registra_danio_'])) {
       return;
   }
      if ($this->des_registra_danio_ == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->des_registra_danio_ = "NO";
      } 
      else 
      { 
          if (is_array($this->des_registra_danio_))
          {
              $x = 0; 
              $this->des_registra_danio__1 = array(); 
              foreach ($this->des_registra_danio_ as $ind => $dados_des_registra_danio__1 ) 
              {
                  if ($dados_des_registra_danio__1 != "") 
                  {
                      $this->des_registra_danio__1[] = $dados_des_registra_danio__1;
                  } 
              } 
              $this->des_registra_danio_ = ""; 
              foreach ($this->des_registra_danio__1 as $dados_des_registra_danio__1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->des_registra_danio_ .= ";";
                   } 
                   $this->des_registra_danio_ .= $dados_des_registra_danio__1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_registra_danio_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_registra_danio_

    function ValidateField_des_contabilizado_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_contabilizado_'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->des_contabilizado_) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "Des Contabilizado " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['des_contabilizado_']))
              {
                  $Campos_Erros['des_contabilizado_'] = array();
              }
              $Campos_Erros['des_contabilizado_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['des_contabilizado_']) || !is_array($this->NM_ajax_info['errList']['des_contabilizado_']))
              {
                  $this->NM_ajax_info['errList']['des_contabilizado_'] = array();
              }
              $this->NM_ajax_info['errList']['des_contabilizado_'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_contabilizado_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_contabilizado_

    function ValidateField_des_imagen_lectura_(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['des_imagen_lectura_'])) {
          return;
      }
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->des_imagen_lectura_;
            if ("" != $this->des_imagen_lectura_ && "S" != $this->des_imagen_lectura__limpa && !$teste_validade->ArqExtensao($this->des_imagen_lectura_, array()))
            {
                $hasError = true;
                $Campos_Crit .= "{lang_btns_img}: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['des_imagen_lectura_']))
                {
                    $Campos_Erros['des_imagen_lectura_'] = array();
                }
                $Campos_Erros['des_imagen_lectura_'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['des_imagen_lectura_']) || !is_array($this->NM_ajax_info['errList']['des_imagen_lectura_']))
                {
                    $this->NM_ajax_info['errList']['des_imagen_lectura_'] = array();
                }
                $this->NM_ajax_info['errList']['des_imagen_lectura_'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'des_imagen_lectura_';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_des_imagen_lectura_
//
//--------------------------------------------------------------------------------------
   function upload_img_doc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros, $filtro = '') 
   {
     global $nm_browser;
     if (!empty($Campos_Crit) || !empty($Campos_Falta))
     {
          return;
     }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->des_imagen_lectura_ == "none") 
          { 
              $this->des_imagen_lectura_ = ""; 
          } 
          if ($this->des_imagen_lectura_ != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_jap_registro_deuda_lectura_doc_name.php';
              }
              $this->des_imagen_lectura_ = sc_upload_unprotect_chars($this->des_imagen_lectura_, true);
              $this->des_imagen_lectura__scfile_name = sc_upload_unprotect_chars($this->des_imagen_lectura__scfile_name, true);
              if ($nm_browser == "Opera")  
              { 
                  $this->des_imagen_lectura__scfile_type = substr($this->des_imagen_lectura__scfile_type, 0, strpos($this->des_imagen_lectura__scfile_type, ";")) ; 
              } 
              if ($this->des_imagen_lectura__scfile_type == "image/pjpeg" || $this->des_imagen_lectura__scfile_type == "image/jpeg" || $this->des_imagen_lectura__scfile_type == "image/gif" ||  
                  $this->des_imagen_lectura__scfile_type == "image/png" || $this->des_imagen_lectura__scfile_type == "image/x-png" || $this->des_imagen_lectura__scfile_type == "image/bmp")  
              { 
                  if (!is_file($this->des_imagen_lectura_) && isset($_SESSION['scriptcase']['charset']) && $_SESSION['scriptcase']['charset'] != 'UTF-8') {
                      $mbConvertFileName = mb_convert_encoding($this->des_imagen_lectura_, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      $mbConvertScFileName = mb_convert_encoding($this->des_imagen_lectura__scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      if (is_file($mbConvertFileName)) {
                          $this->des_imagen_lectura_ = $mbConvertFileName;
                          $this->des_imagen_lectura__scfile_name = $mbConvertScFileName;
                      }
                  }
                  if (is_file($this->des_imagen_lectura_))  
                  { 
                      $this->NM_size_docs[$this->des_imagen_lectura__scfile_name] = $this->sc_file_size($this->des_imagen_lectura_);
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_des_imagen_lectura_ = $this->des_imagen_lectura_;
                      } 
                      else 
                      { 
                          $arq_des_imagen_lectura_ = fopen($this->des_imagen_lectura_, "r") ; 
                          $reg_des_imagen_lectura_ = fread($arq_des_imagen_lectura_, filesize($this->des_imagen_lectura_)) ; 
                          fclose($arq_des_imagen_lectura_) ;  
                      } 
                      $this->des_imagen_lectura_ =  trim($this->des_imagen_lectura__scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_) . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (nm_mkdir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->des_imagen_lectura__scfile_name, $dir_img, "des_imagen_lectura_");
                          if (trim($this->des_imagen_lectura__scfile_name) != $_test_file)
                          {
                              $this->des_imagen_lectura__scfile_name = $_test_file;
                              $this->des_imagen_lectura_ = $_test_file;
                          }
                          $arq_des_imagen_lectura_ = fopen($dir_img . trim($this->des_imagen_lectura__scfile_name), "w") ; 
                          fwrite($arq_des_imagen_lectura_, $reg_des_imagen_lectura_) ;  
                          fclose($arq_des_imagen_lectura_) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_btns_img'] . ": " . $this->Ini->Nm_lang['lang_errm_ivdr']; 
                          $this->des_imagen_lectura_ = "";
                          if (!isset($Campos_Erros['des_imagen_lectura_']))
                          {
                              $Campos_Erros['des_imagen_lectura_'] = array();
                          }
                          $Campos_Erros['des_imagen_lectura_'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                          if (!isset($this->NM_ajax_info['errList']['des_imagen_lectura_']) || !is_array($this->NM_ajax_info['errList']['des_imagen_lectura_']))
                          {
                              $this->NM_ajax_info['errList']['des_imagen_lectura_'] = array();
                          }
                          $this->NM_ajax_info['errList']['des_imagen_lectura_'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_btns_img'] . " " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->des_imagen_lectura_ = "";
                      if (!isset($Campos_Erros['des_imagen_lectura_']))
                      {
                          $Campos_Erros['des_imagen_lectura_'] = array();
                      }
                      $Campos_Erros['des_imagen_lectura_'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['des_imagen_lectura_']) || !is_array($this->NM_ajax_info['errList']['des_imagen_lectura_']))
                      {
                          $this->NM_ajax_info['errList']['des_imagen_lectura_'] = array();
                      }
                      $this->NM_ajax_info['errList']['des_imagen_lectura_'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->des_imagen_lectura_ = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_btns_img'] . " " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['des_imagen_lectura_']))
                      {
                          $Campos_Erros['des_imagen_lectura_'] = array();
                      }
                      $Campos_Erros['des_imagen_lectura_'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['des_imagen_lectura_']) || !is_array($this->NM_ajax_info['errList']['des_imagen_lectura_']))
                      {
                          $this->NM_ajax_info['errList']['des_imagen_lectura_'] = array();
                      }
                      $this->NM_ajax_info['errList']['des_imagen_lectura_'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->des_imagen_lectura__salva) && $this->des_imagen_lectura__limpa != "S")
          {
              $this->des_imagen_lectura_ = $this->des_imagen_lectura__salva;
          }
      } 
      elseif (!empty($this->des_imagen_lectura__salva) && $this->des_imagen_lectura__limpa != "S")
      {
          $this->des_imagen_lectura_ = $this->des_imagen_lectura__salva;
      }
   }

    function removeDuplicateDttmError($aErrDate, &$aErrTime)
    {
        if (empty($aErrDate) || empty($aErrTime))
        {
            return;
        }

        foreach ($aErrDate as $sErrDate)
        {
            foreach ($aErrTime as $iErrTime => $sErrTime)
            {
                if ($sErrDate == $sErrTime)
                {
                    unset($aErrTime[$iErrTime]);
                }
            }
        }
    } // removeDuplicateDttmError

   function nm_guardar_campos()
   {
    global
           $sc_seq_vert;
    $this->nmgp_dados_form['des_id_'] = $this->des_id_;
    $this->nmgp_dados_form['des_orden_'] = $this->des_orden_;
    $this->nmgp_dados_form['des_propietario_'] = $this->des_propietario_;
    $this->nmgp_dados_form['des_contrato_'] = $this->des_contrato_;
    $this->nmgp_dados_form['des_numero_medidor_'] = $this->des_numero_medidor_;
    $this->nmgp_dados_form['des_numero_censo_'] = $this->des_numero_censo_;
    $this->nmgp_dados_form['des_lectura_anterior_'] = $this->des_lectura_anterior_;
    $this->nmgp_dados_form['des_lectura_actual_'] = $this->des_lectura_actual_;
    $this->nmgp_dados_form['des_consumo_'] = $this->des_consumo_;
    $this->nmgp_dados_form['des_consumo_base_'] = $this->des_consumo_base_;
    $this->nmgp_dados_form['des_consumo_excedente_'] = $this->des_consumo_excedente_;
    $this->nmgp_dados_form['des_total_'] = $this->des_total_;
    $this->nmgp_dados_form['des_revisar_'] = $this->des_revisar_;
    $this->nmgp_dados_form['des_registra_danio_'] = $this->des_registra_danio_;
    $this->nmgp_dados_form['des_contabilizado_'] = $this->des_contabilizado_;
    $this->nmgp_dados_form['des_imagen_lectura_'] = $this->des_imagen_lectura_;
    $this->nmgp_dados_form['des_imagen_lectura__limpa'] = $this->des_imagen_lectura__limpa;
    $this->nmgp_dados_form['des_escenario_'] = $this->des_escenario_;
    $this->nmgp_dados_form['des_valor_base_'] = $this->des_valor_base_;
    $this->nmgp_dados_form['des_valor_excedente_'] = $this->des_valor_excedente_;
    $this->nmgp_dados_form['des_operacion_'] = $this->des_operacion_;
    $this->nmgp_dados_form['des_estado_'] = $this->des_estado_;
    $this->nmgp_dados_form['des_ruta_'] = $this->des_ruta_;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_form'][$sc_seq_vert] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['des_id_'] = $this->des_id_;
      nm_limpa_numero($this->des_id_, $this->field_config['des_id_']['symbol_grp']) ; 
      $this->Before_unformat['des_orden_'] = $this->des_orden_;
      nm_limpa_numero($this->des_orden_, $this->field_config['des_orden_']['symbol_grp']) ; 
      $this->Before_unformat['des_lectura_anterior_'] = $this->des_lectura_anterior_;
      nm_limpa_numero($this->des_lectura_anterior_, $this->field_config['des_lectura_anterior_']['symbol_grp']) ; 
      $this->Before_unformat['des_lectura_actual_'] = $this->des_lectura_actual_;
      nm_limpa_numero($this->des_lectura_actual_, $this->field_config['des_lectura_actual_']['symbol_grp']) ; 
      $this->Before_unformat['des_consumo_'] = $this->des_consumo_;
      nm_limpa_numero($this->des_consumo_, $this->field_config['des_consumo_']['symbol_grp']) ; 
      $this->Before_unformat['des_consumo_base_'] = $this->des_consumo_base_;
      nm_limpa_numero($this->des_consumo_base_, $this->field_config['des_consumo_base_']['symbol_grp']) ; 
      $this->Before_unformat['des_consumo_excedente_'] = $this->des_consumo_excedente_;
      nm_limpa_numero($this->des_consumo_excedente_, $this->field_config['des_consumo_excedente_']['symbol_grp']) ; 
      $this->Before_unformat['des_total_'] = $this->des_total_;
      if (!empty($this->field_config['des_total_']['symbol_dec']))
      {
         nm_limpa_valor($this->des_total_, $this->field_config['des_total_']['symbol_dec'], $this->field_config['des_total_']['symbol_grp']);
      }
      $this->Before_unformat['des_escenario_'] = $this->des_escenario_;
      nm_limpa_numero($this->des_escenario_, $this->field_config['des_escenario_']['symbol_grp']) ; 
      $this->Before_unformat['des_valor_base_'] = $this->des_valor_base_;
      if (!empty($this->field_config['des_valor_base_']['symbol_dec']))
      {
         $this->sc_remove_currency($this->des_valor_base_, $this->field_config['des_valor_base_']['symbol_dec'], $this->field_config['des_valor_base_']['symbol_grp'], $this->field_config['des_valor_base_']['symbol_mon']);
         nm_limpa_valor($this->des_valor_base_, $this->field_config['des_valor_base_']['symbol_dec'], $this->field_config['des_valor_base_']['symbol_grp']);
      }
      $this->Before_unformat['des_valor_excedente_'] = $this->des_valor_excedente_;
      if (!empty($this->field_config['des_valor_excedente_']['symbol_dec']))
      {
         $this->sc_remove_currency($this->des_valor_excedente_, $this->field_config['des_valor_excedente_']['symbol_dec'], $this->field_config['des_valor_excedente_']['symbol_grp'], $this->field_config['des_valor_excedente_']['symbol_mon']);
         nm_limpa_valor($this->des_valor_excedente_, $this->field_config['des_valor_excedente_']['symbol_dec'], $this->field_config['des_valor_excedente_']['symbol_grp']);
      }
      $this->Before_unformat['des_operacion_'] = $this->des_operacion_;
      nm_limpa_numero($this->des_operacion_, $this->field_config['des_operacion_']['symbol_grp']) ; 
      $this->Before_unformat['des_ruta_'] = $this->des_ruta_;
      nm_limpa_numero($this->des_ruta_, $this->field_config['des_ruta_']['symbol_grp']) ; 
   }
   function nm_tira_formatacao_des_contrato_($Val_in)
   {
      return $Val_in;
   }
   function sc_add_currency(&$value, $symbol, $pos)
   {
       if ('' == $value)
       {
           return;
       }
       $value = (1 == $pos || 3 == $pos) ? $symbol . ' ' . $value : $value . ' ' . $symbol;
   }
   function sc_remove_currency(&$value, $symbol_dec, $symbol_tho, $symbol_mon)
   {
       $value = preg_replace('~&#x0*([0-9a-f]+);~i', '', $value);
       $sNew  = str_replace($symbol_mon, '', $value);
       if ($sNew != $value)
       {
           $value = str_replace(' ', '', $sNew);
           return;
       }
       $aTest = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '-', $symbol_dec, $symbol_tho);
       $sNew  = '';
       for ($i = 0; $i < strlen($value); $i++)
       {
           if ($this->sc_test_currency_char($value[$i], $aTest))
           {
               $sNew .= $value[$i];
           }
       }
       $value = $sNew;
   }
   function sc_test_currency_char($char, $test)
   {
       $found = false;
       foreach ($test as $test_char)
       {
           if ($char === $test_char)
           {
               $found = true;
           }
       }
       return $found;
   }
   function nm_clear_val($Nome_Campo)
   {
      if ($Nome_Campo == "des_id_")
      {
          nm_limpa_numero($this->des_id_, $this->field_config['des_id_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_orden_")
      {
          nm_limpa_numero($this->des_orden_, $this->field_config['des_orden_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_lectura_anterior_")
      {
          nm_limpa_numero($this->des_lectura_anterior_, $this->field_config['des_lectura_anterior_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_lectura_actual_")
      {
          nm_limpa_numero($this->des_lectura_actual_, $this->field_config['des_lectura_actual_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_consumo_")
      {
          nm_limpa_numero($this->des_consumo_, $this->field_config['des_consumo_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_consumo_base_")
      {
          nm_limpa_numero($this->des_consumo_base_, $this->field_config['des_consumo_base_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_consumo_excedente_")
      {
          nm_limpa_numero($this->des_consumo_excedente_, $this->field_config['des_consumo_excedente_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_total_")
      {
          if (!empty($this->field_config['des_total_']['symbol_dec']))
          {
             nm_limpa_valor($this->des_total_, $this->field_config['des_total_']['symbol_dec'], $this->field_config['des_total_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "des_escenario_")
      {
          nm_limpa_numero($this->des_escenario_, $this->field_config['des_escenario_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_valor_base_")
      {
          if (!empty($this->field_config['des_valor_base_']['symbol_dec']))
          {
             $this->sc_remove_currency($this->des_valor_base_, $this->field_config['des_valor_base_']['symbol_dec'], $this->field_config['des_valor_base_']['symbol_grp'], $this->field_config['des_valor_base_']['symbol_mon']);
             nm_limpa_valor($this->des_valor_base_, $this->field_config['des_valor_base_']['symbol_dec'], $this->field_config['des_valor_base_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "des_valor_excedente_")
      {
          if (!empty($this->field_config['des_valor_excedente_']['symbol_dec']))
          {
             $this->sc_remove_currency($this->des_valor_excedente_, $this->field_config['des_valor_excedente_']['symbol_dec'], $this->field_config['des_valor_excedente_']['symbol_grp'], $this->field_config['des_valor_excedente_']['symbol_mon']);
             nm_limpa_valor($this->des_valor_excedente_, $this->field_config['des_valor_excedente_']['symbol_dec'], $this->field_config['des_valor_excedente_']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "des_operacion_")
      {
          nm_limpa_numero($this->des_operacion_, $this->field_config['des_operacion_']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "des_ruta_")
      {
          nm_limpa_numero($this->des_ruta_, $this->field_config['des_ruta_']['symbol_grp']) ; 
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
      if ('' !== $this->des_id_ || (!empty($format_fields) && isset($format_fields['des_id_'])))
      {
          nmgp_Form_Num_Val($this->des_id_, $this->field_config['des_id_']['symbol_grp'], $this->field_config['des_id_']['symbol_dec'], "0", "S", $this->field_config['des_id_']['format_neg'], "", "", "-", $this->field_config['des_id_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_orden_ || (!empty($format_fields) && isset($format_fields['des_orden_'])))
      {
          nmgp_Form_Num_Val($this->des_orden_, $this->field_config['des_orden_']['symbol_grp'], $this->field_config['des_orden_']['symbol_dec'], "0", "S", $this->field_config['des_orden_']['format_neg'], "", "", "-", $this->field_config['des_orden_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_lectura_anterior_ || (!empty($format_fields) && isset($format_fields['des_lectura_anterior_'])))
      {
          nmgp_Form_Num_Val($this->des_lectura_anterior_, $this->field_config['des_lectura_anterior_']['symbol_grp'], $this->field_config['des_lectura_anterior_']['symbol_dec'], "0", "S", $this->field_config['des_lectura_anterior_']['format_neg'], "", "", "-", $this->field_config['des_lectura_anterior_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_lectura_actual_ || (!empty($format_fields) && isset($format_fields['des_lectura_actual_'])))
      {
          nmgp_Form_Num_Val($this->des_lectura_actual_, $this->field_config['des_lectura_actual_']['symbol_grp'], $this->field_config['des_lectura_actual_']['symbol_dec'], "0", "S", $this->field_config['des_lectura_actual_']['format_neg'], "", "", "-", $this->field_config['des_lectura_actual_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_consumo_ || (!empty($format_fields) && isset($format_fields['des_consumo_'])))
      {
          nmgp_Form_Num_Val($this->des_consumo_, $this->field_config['des_consumo_']['symbol_grp'], $this->field_config['des_consumo_']['symbol_dec'], "0", "S", $this->field_config['des_consumo_']['format_neg'], "", "", "-", $this->field_config['des_consumo_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_consumo_base_ || (!empty($format_fields) && isset($format_fields['des_consumo_base_'])))
      {
          nmgp_Form_Num_Val($this->des_consumo_base_, $this->field_config['des_consumo_base_']['symbol_grp'], $this->field_config['des_consumo_base_']['symbol_dec'], "0", "S", $this->field_config['des_consumo_base_']['format_neg'], "", "", "-", $this->field_config['des_consumo_base_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_consumo_excedente_ || (!empty($format_fields) && isset($format_fields['des_consumo_excedente_'])))
      {
          nmgp_Form_Num_Val($this->des_consumo_excedente_, $this->field_config['des_consumo_excedente_']['symbol_grp'], $this->field_config['des_consumo_excedente_']['symbol_dec'], "0", "S", $this->field_config['des_consumo_excedente_']['format_neg'], "", "", "-", $this->field_config['des_consumo_excedente_']['symbol_fmt']) ; 
      }
      if ('' !== $this->des_total_ || (!empty($format_fields) && isset($format_fields['des_total_'])))
      {
          nmgp_Form_Num_Val($this->des_total_, $this->field_config['des_total_']['symbol_grp'], $this->field_config['des_total_']['symbol_dec'], "2", "S", $this->field_config['des_total_']['format_neg'], "", "", "-", $this->field_config['des_total_']['symbol_fmt']) ; 
      }
   }
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $new_campo = '';
          $a_mask_ord  = array();
          $i_mask_size = -1;

          foreach (explode(';', $nm_mask) as $str_mask)
          {
              $a_mask_ord[ $this->nm_conta_mask_chars($str_mask) ] = $str_mask;
          }
          ksort($a_mask_ord);

          foreach ($a_mask_ord as $i_size => $s_mask)
          {
              if (-1 == $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
              elseif (strlen($nm_campo) >= $i_size && strlen($nm_campo) > $i_mask_size)
              {
                  $i_mask_size = $i_size;
              }
          }
          $nm_mask = $a_mask_ord[$i_mask_size];

          for ($i = 0; $i < strlen($nm_mask); $i++)
          {
              $test_mask = substr($nm_mask, $i, 1);
              
              if ('9' == $test_mask || 'a' == $test_mask || '*' == $test_mask)
              {
                  $new_campo .= substr($nm_campo, 0, 1);
                  $nm_campo   = substr($nm_campo, 1);
              }
              else
              {
                  $new_campo .= $test_mask;
              }
          }

                  $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
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
              if ($cont1 < $cont2 && $tam_campo <= $cont2 && $tam_campo > $cont1)
              {
                  $trab_mask = $ver_duas[1];
              }
              elseif ($cont1 > $cont2 && $tam_campo <= $cont2)
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
          $nm_campo = $trab_saida;
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
      $nm_campo = $trab_saida;
   } 
   function nm_conta_mask_chars($sMask)
   {
       $iLength = 0;

       for ($i = 0; $i < strlen($sMask); $i++)
       {
           if (in_array($sMask[$i], array('9', 'a', '*')))
           {
               $iLength++;
           }
       }

       return $iLength;
   }
   function nm_tira_mask(&$nm_campo, $nm_mask, $nm_chars = '')
   { 
      $mask_dados = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $tam_mask   = strlen($nm_mask);
      $trab_saida = "";

      if (false !== strpos($nm_mask, '9') || false !== strpos($nm_mask, 'a') || false !== strpos($nm_mask, '*'))
      {
          $raw_campo = $this->sc_clear_mask($nm_campo, $nm_chars);
          $raw_mask  = $this->sc_clear_mask($nm_mask, $nm_chars);
          $new_campo = '';

          $test_mask = substr($raw_mask, 0, 1);
          $raw_mask  = substr($raw_mask, 1);

          while ('' != $raw_campo)
          {
              $test_val  = substr($raw_campo, 0, 1);
              $raw_campo = substr($raw_campo, 1);
              $ord       = ord($test_val);
              $found     = false;

              switch ($test_mask)
              {
                  case '9':
                      if (48 <= $ord && 57 >= $ord)
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case 'a':
                      if ((65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;

                  case '*':
                      if ((48 <= $ord && 57 >= $ord) || (65 <= $ord && 90 >= $ord) || (97 <= $ord && 122 >= $ord))
                      {
                          $new_campo .= $test_val;
                          $found      = true;
                      }
                      break;
              }

              if ($found)
              {
                  $test_mask = substr($raw_mask, 0, 1);
                  $raw_mask  = substr($raw_mask, 1);
              }
          }

          $nm_campo = $new_campo;

          return;
      }

      $mask_num = false;
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
          for ($x=0; $x < strlen($mask_dados); $x++)
          {
              if (is_numeric(substr($mask_dados, $x, 1)))
              {
                  $trab_saida .= substr($mask_dados, $x, 1);
              }
          }
          $nm_campo = $trab_saida;
          return;
      }
      if ($tam_mask > $tam_campo)
      {
         $mask_desfaz = "";
         for ($mask_ind = 0; $tam_mask > $tam_campo; $mask_ind++)
         {
              $mask_char = substr($trab_mask, $mask_ind, 1);
              if ($mask_char == "z")
              {
                  $tam_mask--;
              }
              else
              {
                  $mask_desfaz .= $mask_char;
              }
              if ($mask_ind == $tam_campo)
              {
                  $tam_mask = $tam_campo;
              }
         }
         $trab_mask = $mask_desfaz . substr($trab_mask, $mask_ind);
      }
      $mask_saida = "";
      for ($mask_ind = strlen($trab_mask); $mask_ind > 0; $mask_ind--)
      {
          $mask_char = substr($trab_mask, $mask_ind - 1, 1);
          if ($mask_char == "x" || $mask_char == "z")
          {
              if ($tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
              }
          }
          else
          {
              if ($mask_char != substr($mask_dados, $tam_campo - 1, 1) && $tam_campo > 0)
              {
                  $mask_saida = substr($mask_dados, $tam_campo - 1, 1) . $mask_saida;
                  $mask_ind--;
              }
          }
          $tam_campo--;
      }
      if ($tam_campo > 0)
      {
         $mask_saida = substr($mask_dados, 0, $tam_campo) . $mask_saida;
      }
      $nm_campo = $mask_saida;
   }

   function sc_clear_mask($value, $chars)
   {
       $new = '';

       for ($i = 0; $i < strlen($value); $i++)
       {
           if (false === strpos($chars, $value[$i]))
           {
               $new .= $value[$i];
           }
       }

       return $new;
   }
//
   function nm_limpa_alfa(&$str)
   {
   }
   function nm_conv_data_db($dt_in, $form_in, $form_out, $replaces = array())
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
           nm_conv_form_data($dt_out, $form_in, $form_out, $replaces);
           return $dt_out;
       }
   }

   function returnWhere($aCond, $sOp = 'AND')
   {
       $aWhere = array();
       foreach ($aCond as $sCond)
       {
           $this->handleWhereCond($sCond);
           if ('' != $sCond)
           {
               $aWhere[] = $sCond;
           }
       }
       if (empty($aWhere))
       {
           return '';
       }
       else
       {
           return ' WHERE (' . implode(') ' . $sOp . ' (', $aWhere) . ')';
       }
   } // returnWhere

   function handleWhereCond(&$sCond)
   {
       $sCond = trim($sCond);
       if ('where' == strtolower(substr($sCond, 0, 5)))
       {
           $sCond = trim(substr($sCond, 5));
       }
   } // handleWhereCond

   function ajax_return_values()
   {
          $this->ajax_return_values_all_vert();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['des_id_']['keyVal'] = form_jap_registro_deuda_lectura_pack_protect_string($this->nmgp_dados_form['des_id_']);
          }
   } // ajax_return_values
   function ajax_return_values_all_vert()
   {
          if (isset($this->nmgp_refresh_fields) && isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row] = $this->NM_ajax_info['param'];
              if ((isset($this->Embutida_ronly) && $this->Embutida_ronly) || $this->NM_ajax_force_values)
              {
                  if (isset($this->NM_ajax_changed['des_id_']) && $this->NM_ajax_changed['des_id_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_id_'] = $this->des_id_;
                  }
                  if (isset($this->NM_ajax_changed['des_orden_']) && $this->NM_ajax_changed['des_orden_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_orden_'] = $this->des_orden_;
                  }
                  if (isset($this->NM_ajax_changed['des_propietario_']) && $this->NM_ajax_changed['des_propietario_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_propietario_'] = $this->des_propietario_;
                  }
                  if (isset($this->NM_ajax_changed['des_contrato_']) && $this->NM_ajax_changed['des_contrato_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_contrato_'] = $this->des_contrato_;
                  }
                  if (isset($this->NM_ajax_changed['des_numero_medidor_']) && $this->NM_ajax_changed['des_numero_medidor_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_numero_medidor_'] = $this->des_numero_medidor_;
                  }
                  if (isset($this->NM_ajax_changed['des_numero_censo_']) && $this->NM_ajax_changed['des_numero_censo_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_numero_censo_'] = $this->des_numero_censo_;
                  }
                  if (isset($this->NM_ajax_changed['des_lectura_anterior_']) && $this->NM_ajax_changed['des_lectura_anterior_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_lectura_anterior_'] = $this->des_lectura_anterior_;
                  }
                  if (isset($this->NM_ajax_changed['des_lectura_actual_']) && $this->NM_ajax_changed['des_lectura_actual_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_lectura_actual_'] = $this->des_lectura_actual_;
                  }
                  if (isset($this->NM_ajax_changed['des_consumo_']) && $this->NM_ajax_changed['des_consumo_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_consumo_'] = $this->des_consumo_;
                  }
                  if (isset($this->NM_ajax_changed['des_consumo_base_']) && $this->NM_ajax_changed['des_consumo_base_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_consumo_base_'] = $this->des_consumo_base_;
                  }
                  if (isset($this->NM_ajax_changed['des_consumo_excedente_']) && $this->NM_ajax_changed['des_consumo_excedente_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_consumo_excedente_'] = $this->des_consumo_excedente_;
                  }
                  if (isset($this->NM_ajax_changed['des_total_']) && $this->NM_ajax_changed['des_total_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_total_'] = $this->des_total_;
                  }
                  if (isset($this->NM_ajax_changed['des_revisar_']) && $this->NM_ajax_changed['des_revisar_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_revisar_'] = $this->des_revisar_;
                  }
                  if (isset($this->NM_ajax_changed['des_registra_danio_']) && $this->NM_ajax_changed['des_registra_danio_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_registra_danio_'] = $this->des_registra_danio_;
                  }
                  if (isset($this->NM_ajax_changed['des_contabilizado_']) && $this->NM_ajax_changed['des_contabilizado_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_contabilizado_'] = $this->des_contabilizado_;
                  }
                  if (isset($this->NM_ajax_changed['des_imagen_lectura_']) && $this->NM_ajax_changed['des_imagen_lectura_'])
                  {
                      $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_imagen_lectura_'] = $this->des_imagen_lectura_;
                  }
              }
          }
          if (isset($this->nmgp_refresh_row) && '' != $this->nmgp_refresh_row)
          {
              $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_numero_medidor_'] = $this->des_numero_medidor_;
              $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_numero_censo_'] = $this->des_numero_censo_;
              $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_revisar_'] = $this->des_revisar_;
              $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_registra_danio_'] = $this->des_registra_danio_;
              $this->form_vert_form_jap_registro_deuda_lectura[$this->nmgp_refresh_row]['des_contabilizado_'] = $this->des_contabilizado_;
          }
          $this->NM_ajax_info['rsSize']            = sizeof($this->form_vert_form_jap_registro_deuda_lectura);
          $this->NM_ajax_info['buttonDisplayVert'] = array();
          foreach($this->form_vert_form_jap_registro_deuda_lectura as $sc_seq_vert => $aRecData)
          {
              $this->loadRecordState($sc_seq_vert);
              if ('navigate_form' == $this->NM_ajax_opcao) {
                  $this->NM_ajax_info['buttonDisplayVert'][] = array(
                      'seq'      => $sc_seq_vert,
                      'gridView' => false,
                      'delete'   => $this->nmgp_botoes['delete'],
                      'update'   => $this->nmgp_botoes['update'],
                  );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_id_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_id_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_id_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_orden_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_orden_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_orden_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_propietario_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_propietario_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array(); 
}
   $this->des_propietario_ = $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_propietario_'];
if ($this->des_propietario_ != "")
{ 
   $this->nm_clear_val("des_propietario_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_des_id_ = $this->des_id_;
   $old_value_des_orden_ = $this->des_orden_;
   $old_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $old_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $old_value_des_consumo_ = $this->des_consumo_;
   $old_value_des_consumo_base_ = $this->des_consumo_base_;
   $old_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $old_value_des_total_ = $this->des_total_;
   $this->nm_tira_formatacao();


   $unformatted_value_des_id_ = $this->des_id_;
   $unformatted_value_des_orden_ = $this->des_orden_;
   $unformatted_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $unformatted_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $unformatted_value_des_consumo_ = $this->des_consumo_;
   $unformatted_value_des_consumo_base_ = $this->des_consumo_base_;
   $unformatted_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $unformatted_value_des_total_ = $this->des_total_;

   $nm_comando = "SELECT cl_id, cl_nombre  FROM del_cliente  WHERE cl_id = $this->des_propietario_  ORDER BY cl_nombre";

   $this->des_id_ = $old_value_des_id_;
   $this->des_orden_ = $old_value_des_orden_;
   $this->des_lectura_anterior_ = $old_value_des_lectura_anterior_;
   $this->des_lectura_actual_ = $old_value_des_lectura_actual_;
   $this->des_consumo_ = $old_value_des_consumo_;
   $this->des_consumo_base_ = $old_value_des_consumo_base_;
   $this->des_consumo_excedente_ = $old_value_des_consumo_excedente_;
   $this->des_total_ = $old_value_des_total_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"des_propietario_\"";
          if (isset($this->NM_ajax_info['select_html']['des_propietario_']) && !empty($this->NM_ajax_info['select_html']['des_propietario_']))
          {
              eval("\$sSelComp = \"" . str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['des_propietario_']) . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $Nm_tp_obj = (isset($this->nmgp_refresh_fields) && in_array("des_propietario_", $this->nmgp_refresh_fields)) ? 'select' : 'text';
                  $this->NM_ajax_info['fldList']['des_propietario_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => $Nm_tp_obj,
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['des_propietario_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['des_propietario_' . $sc_seq_vert]['valList'][$i] = form_jap_registro_deuda_lectura_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['des_propietario_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['des_propietario_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['des_propietario_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_contrato_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_contrato_']);
                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array(); 
}
   $this->des_contrato_ = $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contrato_'];
if ($this->des_contrato_ != "")
{ 
   $this->nm_clear_val("des_contrato_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_des_id_ = $this->des_id_;
   $old_value_des_orden_ = $this->des_orden_;
   $old_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $old_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $old_value_des_consumo_ = $this->des_consumo_;
   $old_value_des_consumo_base_ = $this->des_consumo_base_;
   $old_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $old_value_des_total_ = $this->des_total_;
   $this->nm_tira_formatacao();


   $unformatted_value_des_id_ = $this->des_id_;
   $unformatted_value_des_orden_ = $this->des_orden_;
   $unformatted_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $unformatted_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $unformatted_value_des_consumo_ = $this->des_consumo_;
   $unformatted_value_des_consumo_base_ = $this->des_consumo_base_;
   $unformatted_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $unformatted_value_des_total_ = $this->des_total_;

   $nm_comando = "SELECT con_id, con_numero_contrato  FROM jap_contrato  WHERE con_id = $this->des_contrato_ ORDER BY con_numero_contrato";

   $this->des_id_ = $old_value_des_id_;
   $this->des_orden_ = $old_value_des_orden_;
   $this->des_lectura_anterior_ = $old_value_des_lectura_anterior_;
   $this->des_lectura_actual_ = $old_value_des_lectura_actual_;
   $this->des_consumo_ = $old_value_des_consumo_;
   $this->des_consumo_base_ = $old_value_des_consumo_base_;
   $this->des_consumo_excedente_ = $old_value_des_consumo_excedente_;
   $this->des_total_ = $old_value_des_total_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"des_contrato_\"";
          if (isset($this->NM_ajax_info['select_html']['des_contrato_']) && !empty($this->NM_ajax_info['select_html']['des_contrato_']))
          {
              eval("\$sSelComp = \"" . str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['des_contrato_']) . "\";");
          }
          $sLookup = '';
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {
                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
                  $Nm_tp_obj = (isset($this->nmgp_refresh_fields) && in_array("des_contrato_", $this->nmgp_refresh_fields)) ? 'select' : 'text';
                  $this->NM_ajax_info['fldList']['des_contrato_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => $Nm_tp_obj,
                       'valList' => array($sTmpValue),
               'optList' => $aLookup,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['des_contrato_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['des_contrato_' . $sc_seq_vert]['valList'][$i] = form_jap_registro_deuda_lectura_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['des_contrato_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['des_contrato_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['des_contrato_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_numero_medidor_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_numero_medidor_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_numero_medidor_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($this->form_encode_input($sTmpValue)),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_numero_censo_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_numero_censo_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_numero_censo_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_lectura_anterior_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_lectura_anterior_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_lectura_actual_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_lectura_actual_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_lectura_actual_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_consumo_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_consumo_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_consumo_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_consumo_base_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_consumo_base_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_consumo_base_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_consumo_excedente_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_consumo_excedente_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_consumo_excedente_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_total_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_total_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_total_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'label',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_revisar_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_revisar_']);
                  $aLookup = array();
$aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string('SI') => str_replace('<', '&lt;',form_jap_registro_deuda_lectura_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_revisar_'][] = 'SI';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['des_revisar_']) && !empty($this->NM_ajax_info['select_html']['des_revisar_']))
          {
              eval("\$sOptComp = \"" . str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['des_revisar_']) . "\";");
          }
                  $this->NM_ajax_info['fldList']['des_revisar_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'checkbox',
                       'switch'  => true,
                       'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-des_revisar_',
               'optMulti' => $sc_seq_vert,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['des_revisar_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['des_revisar_' . $sc_seq_vert]['valList'][$i] = form_jap_registro_deuda_lectura_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['des_revisar_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['des_revisar_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['des_revisar_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_registra_danio_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_registra_danio_']);
                  $aLookup = array();
$aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string('SI') => str_replace('<', '&lt;',form_jap_registro_deuda_lectura_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_registra_danio_'][] = 'SI';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['des_registra_danio_']) && !empty($this->NM_ajax_info['select_html']['des_registra_danio_']))
          {
              eval("\$sOptComp = \"" . str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['des_registra_danio_']) . "\";");
          }
                  $this->NM_ajax_info['fldList']['des_registra_danio_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'checkbox',
                       'switch'  => true,
                       'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-des_registra_danio_',
               'optMulti' => $sc_seq_vert,
                       );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['des_registra_danio_' . $sc_seq_vert]['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['des_registra_danio_' . $sc_seq_vert]['valList'][$i] = form_jap_registro_deuda_lectura_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['des_registra_danio_' . $sc_seq_vert]['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['des_registra_danio_' . $sc_seq_vert]['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['des_registra_danio_' . $sc_seq_vert]['labList'] = $aLabel;
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_contabilizado_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_contabilizado_']);
                  $aLookup = array();
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_contabilizado_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'text',
                       'valList' => array($sTmpValue),
                       );
              }
              if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("des_imagen_lectura_", $this->nmgp_refresh_fields)))
              {
                  $sTmpValue = NM_charset_to_utf8($aRecData['des_imagen_lectura_']);
                  $aLookup = array();
   $sKeepImage = 'N';
   if ('' == $aRecData['des_imagen_lectura_'] && isset($aRecData['des_imagen_lectura__limpa']) && 'N' == $aRecData['des_imagen_lectura__limpa'] && isset($aRecData['des_imagen_lectura__salva']) && '' != $aRecData['des_imagen_lectura__salva'])
   {
       $sKeepImage = 'S';
   }
   $out_des_imagen_lectura_ = '';
   $out1_des_imagen_lectura_ = '';
   $guarda_des_imagen_lectura_ = $this->des_imagen_lectura_;
   $this->des_imagen_lectura_  = $aRecData['des_imagen_lectura_'];
   if ($this->des_imagen_lectura_ != "" && $this->des_imagen_lectura_ != "none")   
   { 
       $path_des_imagen_lectura_ = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($aRecData['des_contrato_']) . "/" . $this->des_imagen_lectura_;
       nm_fix_SubDirUpload($this->des_imagen_lectura_,$this->Ini->root . $this->Ini->path_imagens,"/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_));
        $md5_des_imagen_lectura_  = md5("/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($aRecData['des_contrato_']) . $this->des_imagen_lectura_);
       if (is_file($path_des_imagen_lectura_))  
       { 
           $NM_ler_img = true;
           $out_des_imagen_lectura_ = $this->Ini->path_imag_temp . "/sc_des_imagen_lectura__" . $md5_des_imagen_lectura_ . ".gif" ;  
           $out1_des_imagen_lectura_ = $out_des_imagen_lectura_; 
           if (is_file($this->Ini->root . $out_des_imagen_lectura_))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_des_imagen_lectura_) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_des_imagen_lectura_ = fopen($path_des_imagen_lectura_, "r") ; 
               $reg_des_imagen_lectura_ = fread($tmp_des_imagen_lectura_, filesize($path_des_imagen_lectura_)) ; 
               fclose($tmp_des_imagen_lectura_) ;  
               $arq_des_imagen_lectura_ = fopen($this->Ini->root . $out_des_imagen_lectura_, "w") ;  
               fwrite($arq_des_imagen_lectura_, $reg_des_imagen_lectura_) ;  
               fclose($arq_des_imagen_lectura_) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_des_imagen_lectura_, true);
           $this->nmgp_return_img['des_imagen_lectura_'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['des_imagen_lectura_'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_des_imagen_lectura_  = md5($this->des_imagen_lectura_);
           $out_des_imagen_lectura_ = $this->Ini->path_imag_temp . "/sc_des_imagen_lectura__5050" . $md5_des_imagen_lectura_ . ".gif" ;  
           if (is_file($this->Ini->root . $out_des_imagen_lectura_))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_des_imagen_lectura_) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_des_imagen_lectura_, true);
                   $sc_obj_img->setWidth(50);
                   $sc_obj_img->setHeight(50);
                   $sc_obj_img->createImg($this->Ini->root . $out_des_imagen_lectura_);
               } 
               else 
               { 
                   $out_des_imagen_lectura_ = $out1_des_imagen_lectura_;
               } 
           } 
       } 
   } 
   $this->des_imagen_lectura_  = $guarda_des_imagen_lectura_;
          $aLookupOrig = $aLookup;
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $sc_seq_vert] = array(
                       'row'    => $sc_seq_vert,
                       'type'    => 'imagem',
                       'valList' => array($sTmpValue),
                       'imgFile' => $out_des_imagen_lectura_,
                       'imgOrig' => $out1_des_imagen_lectura_,
                       'imgLink' => "javascript:nm_mostra_img(var_ajax_img_des_imagen_lectura_" . $sc_seq_vert . ", '" . $this->nmgp_return_img['des_imagen_lectura_'][0] . "', '" . $this->nmgp_return_img['des_imagen_lectura_'][1] . "')",
               'keepImg' => $sKeepImage,
                       );
              }
          }
   }

    function fetchUniqueUploadName($originalName, $uploadDir, $fieldName)
    {
        $originalName = trim($originalName);
        if ('' == $originalName)
        {
            return $originalName;
        }
        if (!@is_dir($uploadDir))
        {
            return $originalName;
        }
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['upload_dir'][$fieldName][] = $newName;
            return $newName;
        }
    } // fetchUniqueUploadName

    function fetchFileNextName($uniqueName, $uniqueList)
    {
        $aPathinfo     = pathinfo($uniqueName);
        $fileExtension = $aPathinfo['extension'];
        $fileName      = $aPathinfo['filename'];
        $foundName     = false;
        $nameIt        = 1;
        if ('' != $fileExtension)
        {
            $fileExtension = '.' . $fileExtension;
        }
        while (!$foundName)
        {
            $testName = $fileName . '(' . $nameIt . ')' . $fileExtension;
            if (in_array($testName, $uniqueList))
            {
                $nameIt++;
            }
            else
            {
                $foundName = true;
                return $testName;
            }
        }
    } // fetchFileNextName

   function ajax_add_parameters()
   {
   } // ajax_add_parameters
  function nm_proc_onload_record($sc_seq_vert=0)
  {
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
          $_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_des_consumo_ = $this->des_consumo_;
    $original_des_consumo_base_ = $this->des_consumo_base_;
    $original_des_consumo_excedente_ = $this->des_consumo_excedente_;
    $original_des_contrato_ = $this->des_contrato_;
    $original_des_id_ = $this->des_id_;
    $original_des_lectura_actual_ = $this->des_lectura_actual_;
    $original_des_lectura_anterior_ = $this->des_lectura_anterior_;
    $original_des_revisar_ = $this->des_revisar_;
}
  if($this->des_lectura_actual_ <>'' and $this->des_lectura_anterior_ <>'' and $this->des_consumo_ <>''){
	if( $this->des_lectura_actual_ -$this->des_lectura_anterior_ <>$this->des_consumo_ ){
		$this->calcula_lectura();
		$this->des_revisar_ ='SI';
	}
}else{
	if($this->des_consumo_ =='' and $this->des_lectura_actual_ <>'' and $this->des_lectura_anterior_ <>''){
		$this->calcula_lectura();
	}
}


if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_des_consumo_ != $this->des_consumo_ || (isset($bFlagRead_des_consumo_) && $bFlagRead_des_consumo_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_consumo_' . $this->nmgp_refresh_row]['type']    = 'label';
        $this->NM_ajax_info['fldList']['des_consumo_' . $this->nmgp_refresh_row]['valList'] = array($this->des_consumo_);
        $this->NM_ajax_changed['des_consumo_'] = true;
    }
    if (($original_des_consumo_base_ != $this->des_consumo_base_ || (isset($bFlagRead_des_consumo_base_) && $bFlagRead_des_consumo_base_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_consumo_base_' . $this->nmgp_refresh_row]['type']    = 'label';
        $this->NM_ajax_info['fldList']['des_consumo_base_' . $this->nmgp_refresh_row]['valList'] = array($this->des_consumo_base_);
        $this->NM_ajax_changed['des_consumo_base_'] = true;
    }
    if (($original_des_consumo_excedente_ != $this->des_consumo_excedente_ || (isset($bFlagRead_des_consumo_excedente_) && $bFlagRead_des_consumo_excedente_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_consumo_excedente_' . $this->nmgp_refresh_row]['type']    = 'label';
        $this->NM_ajax_info['fldList']['des_consumo_excedente_' . $this->nmgp_refresh_row]['valList'] = array($this->des_consumo_excedente_);
        $this->NM_ajax_changed['des_consumo_excedente_'] = true;
    }
    if (($original_des_contrato_ != $this->des_contrato_ || (isset($bFlagRead_des_contrato_) && $bFlagRead_des_contrato_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_contrato_' . $this->nmgp_refresh_row]['type']    = 'select';
        $this->NM_ajax_info['fldList']['des_contrato_' . $this->nmgp_refresh_row]['valList'] = array($this->des_contrato_);
        $this->NM_ajax_changed['des_contrato_'] = true;
    }
    if (($original_des_id_ != $this->des_id_ || (isset($bFlagRead_des_id_) && $bFlagRead_des_id_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_id_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['des_id_' . $this->nmgp_refresh_row]['valList'] = array($this->des_id_);
        $this->NM_ajax_changed['des_id_'] = true;
    }
    if (($original_des_lectura_actual_ != $this->des_lectura_actual_ || (isset($bFlagRead_des_lectura_actual_) && $bFlagRead_des_lectura_actual_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_lectura_actual_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['des_lectura_actual_' . $this->nmgp_refresh_row]['valList'] = array($this->des_lectura_actual_);
        $this->NM_ajax_changed['des_lectura_actual_'] = true;
    }
    if (($original_des_lectura_anterior_ != $this->des_lectura_anterior_ || (isset($bFlagRead_des_lectura_anterior_) && $bFlagRead_des_lectura_anterior_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['valList'] = array($this->des_lectura_anterior_);
        $this->NM_ajax_changed['des_lectura_anterior_'] = true;
    }
    if (($original_des_revisar_ != $this->des_revisar_ || (isset($bFlagRead_des_revisar_) && $bFlagRead_des_revisar_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_revisar_' . $this->nmgp_refresh_row]['type']    = 'checkbox';
        $this->NM_ajax_info['fldList']['des_revisar_' . $this->nmgp_refresh_row]['valList'] = array($this->des_revisar_);
        $this->NM_ajax_changed['des_revisar_'] = true;
    }
}
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off'; 
          }
  }
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_des_lectura_anterior_ = $this->des_lectura_anterior_;
}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  $check_sql = "SELECT sp_busca_parametro_ap ('".$this->sc_temp_Igtech_RucEmpresa."','MODLANT', 'NO'); ";
	 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 

	if (isset($this->rs[0][0])){
		$w_parametro = $this->rs[0][0];
	}

if( $w_parametro=='SI'){	
	$this->sc_field_readonly("des_lectura_anterior_", 'off', (isset($sc_seq_vert) ? $sc_seq_vert : ''));
}else{
	$this->sc_field_readonly("des_lectura_anterior_", 'on', (isset($sc_seq_vert) ? $sc_seq_vert : ''));
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_des_lectura_anterior_ != $this->des_lectura_anterior_ || (isset($bFlagRead_des_lectura_anterior_) && $bFlagRead_des_lectura_anterior_))&& isset($this->nmgp_refresh_row))
    {
        $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['type']    = 'text';
        $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['valList'] = array($this->des_lectura_anterior_);
        $this->NM_ajax_changed['des_lectura_anterior_'] = true;
    }
}
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//
   function nm_troca_decimal($sc_parm1, $sc_parm2) 
   { 
      $this->des_total_ = str_replace($sc_parm1, $sc_parm2, $this->des_total_); 
      $this->des_valor_base_ = str_replace($sc_parm1, $sc_parm2, $this->des_valor_base_); 
      $this->des_valor_excedente_ = str_replace($sc_parm1, $sc_parm2, $this->des_valor_excedente_); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->des_total_ = "'" . $this->des_total_ . "'";
      $this->des_valor_base_ = "'" . $this->des_valor_base_ . "'";
      $this->des_valor_excedente_ = "'" . $this->des_valor_excedente_ . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->des_total_ = str_replace("'", "", $this->des_total_); 
      $this->des_valor_base_ = str_replace("'", "", $this->des_valor_base_); 
      $this->des_valor_excedente_ = str_replace("'", "", $this->des_valor_excedente_); 
   } 
//----------- 


   function temRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       if ($rsc === false && !$rsc->EOF)
       {
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
           exit; 
       }
       $iTotal = $rsc->fields[0];
       $rsc->Close();
       return 0 < $iTotal;
   } // temRegistros

   function deletaRegistros($sWhere)
   {
       if ('' == $sWhere)
       {
           return false;
       }
       $nmgp_sel_count = 'DELETE FROM ' . $this->Ini->nm_tabela . ' WHERE ' . $sWhere;
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
       $rsc = $this->Db->Execute($nmgp_sel_count); 
       $bResult = $rsc;
       $rsc->Close();
       return $bResult == true;
   } // deletaRegistros
    function handleDbErrorMessage(&$dbErrorMessage, $dbErrorCode)
    {
        if (1267 == $dbErrorCode) {
            $dbErrorMessage = $this->Ini->Nm_lang['lang_errm_db_invalid_collation'];
        }
    }


   function nm_acessa_banco() 
   { 
      global $sc_seq_vert,  $nm_form_submit, $teste_validade, $sc_where;
 
      $NM_val_null = array();
      $NM_val_form = array();
      $this->sc_erro_insert = "";
      $this->sc_erro_update = "";
      $this->sc_erro_delete = "";
      $this->SC_log_atv = false;
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_key($this->nmgp_opcao);
      }
      if ("alterar" == $this->nmgp_opcao || "excluir" == $this->nmgp_opcao)
      {
          $this->NM_gera_log_old($sc_seq_vert);
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if ($this->nmgp_opcao == "alterar")
      {
          $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert];
          if ($this->nmgp_dados_select['des_id_'] == $this->des_id_ &&
              $this->nmgp_dados_select['des_orden_'] == $this->des_orden_ &&
              $this->nmgp_dados_select['des_propietario_'] == $this->des_propietario_ &&
              $this->nmgp_dados_select['des_contrato_'] == $this->des_contrato_ &&
              $this->nmgp_dados_select['des_numero_medidor_'] == $this->des_numero_medidor_ &&
              $this->nmgp_dados_select['des_numero_censo_'] == $this->des_numero_censo_ &&
              $this->nmgp_dados_select['des_lectura_anterior_'] == $this->des_lectura_anterior_ &&
              $this->nmgp_dados_select['des_lectura_actual_'] == $this->des_lectura_actual_ &&
              $this->nmgp_dados_select['des_consumo_'] == $this->des_consumo_ &&
              $this->nmgp_dados_select['des_consumo_base_'] == $this->des_consumo_base_ &&
              $this->nmgp_dados_select['des_consumo_excedente_'] == $this->des_consumo_excedente_ &&
              $this->nmgp_dados_select['des_total_'] == $this->des_total_ &&
              $this->nmgp_dados_select['des_revisar_'] == $this->des_revisar_ &&
              $this->nmgp_dados_select['des_registra_danio_'] == $this->des_registra_danio_ &&
              $this->nmgp_dados_select['des_contabilizado_'] == $this->des_contabilizado_ &&
              $this->nmgp_dados_select['des_imagen_lectura_'] == $this->des_imagen_lectura_)
          { }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_id_'] = $this->des_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_orden_'] = $this->des_orden_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_propietario_'] = $this->des_propietario_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_contrato_'] = $this->des_contrato_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_numero_medidor_'] = $this->des_numero_medidor_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_numero_censo_'] = $this->des_numero_censo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_lectura_anterior_'] = $this->des_lectura_anterior_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_lectura_actual_'] = $this->des_lectura_actual_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_consumo_'] = $this->des_consumo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_consumo_base_'] = $this->des_consumo_base_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_consumo_excedente_'] = $this->des_consumo_excedente_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_total_'] = $this->des_total_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_revisar_'] = $this->des_revisar_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_registra_danio_'] = $this->des_registra_danio_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_contabilizado_'] = $this->des_contabilizado_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_imagen_lectura_'] = $this->des_imagen_lectura_;
          }
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $salva_opcao = $this->nmgp_opcao; 
      if ($this->sc_evento != "novo" && $this->sc_evento != "incluir") 
      { 
          $this->sc_evento = ""; 
      } 
      if ((!isset($this->Ini->nm_bases_access) || !in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access)) && !$this->Ini->sc_tem_trans_banco && in_array($this->nmgp_opcao, array('excluir', 'incluir', 'alterar')))
      { 
          $this->Ini->sc_tem_trans_banco = $this->Db->BeginTrans(); 
      } 
      $NM_val_form['des_id_'] = $this->des_id_;
      $NM_val_form['des_orden_'] = $this->des_orden_;
      $NM_val_form['des_propietario_'] = $this->des_propietario_;
      $NM_val_form['des_contrato_'] = $this->des_contrato_;
      $NM_val_form['des_numero_medidor_'] = $this->des_numero_medidor_;
      $NM_val_form['des_numero_censo_'] = $this->des_numero_censo_;
      $NM_val_form['des_lectura_anterior_'] = $this->des_lectura_anterior_;
      $NM_val_form['des_lectura_actual_'] = $this->des_lectura_actual_;
      $NM_val_form['des_consumo_'] = $this->des_consumo_;
      $NM_val_form['des_consumo_base_'] = $this->des_consumo_base_;
      $NM_val_form['des_consumo_excedente_'] = $this->des_consumo_excedente_;
      $NM_val_form['des_total_'] = $this->des_total_;
      $NM_val_form['des_revisar_'] = $this->des_revisar_;
      $NM_val_form['des_registra_danio_'] = $this->des_registra_danio_;
      $NM_val_form['des_contabilizado_'] = $this->des_contabilizado_;
      $NM_val_form['des_imagen_lectura_'] = $this->des_imagen_lectura_;
      $NM_val_form['des_escenario_'] = $this->des_escenario_;
      $NM_val_form['des_valor_base_'] = $this->des_valor_base_;
      $NM_val_form['des_valor_excedente_'] = $this->des_valor_excedente_;
      $NM_val_form['des_operacion_'] = $this->des_operacion_;
      $NM_val_form['des_estado_'] = $this->des_estado_;
      $NM_val_form['des_ruta_'] = $this->des_ruta_;
      if ($this->des_id_ === "" || is_null($this->des_id_))  
      { 
          $this->des_id_ = 0;
      } 
      if ($this->des_escenario_ === "" || is_null($this->des_escenario_))  
      { 
          $this->des_escenario_ = 0;
          $this->sc_force_zero[] = 'des_escenario_';
      } 
      if ($this->des_propietario_ === "" || is_null($this->des_propietario_))  
      { 
          $this->des_propietario_ = 0;
          $this->sc_force_zero[] = 'des_propietario_';
      } 
      if ($this->des_contrato_ === "" || is_null($this->des_contrato_))  
      { 
          $this->des_contrato_ = 0;
          $this->sc_force_zero[] = 'des_contrato_';
      } 
      if ($this->des_lectura_anterior_ === "" || is_null($this->des_lectura_anterior_))  
      { 
          $this->des_lectura_anterior_ = 0;
          $this->sc_force_zero[] = 'des_lectura_anterior_';
      } 
      if ($this->des_lectura_actual_ === "" || is_null($this->des_lectura_actual_))  
      { 
          $this->des_lectura_actual_ = 0;
          $this->sc_force_zero[] = 'des_lectura_actual_';
      } 
      if ($this->des_consumo_base_ === "" || is_null($this->des_consumo_base_))  
      { 
          $this->des_consumo_base_ = 0;
          $this->sc_force_zero[] = 'des_consumo_base_';
      } 
      if ($this->des_consumo_excedente_ === "" || is_null($this->des_consumo_excedente_))  
      { 
          $this->des_consumo_excedente_ = 0;
          $this->sc_force_zero[] = 'des_consumo_excedente_';
      } 
      if ($this->des_valor_base_ === "" || is_null($this->des_valor_base_))  
      { 
          $this->des_valor_base_ = 0;
          $this->sc_force_zero[] = 'des_valor_base_';
      } 
      if ($this->des_valor_excedente_ === "" || is_null($this->des_valor_excedente_))  
      { 
          $this->des_valor_excedente_ = 0;
          $this->sc_force_zero[] = 'des_valor_excedente_';
      } 
      if ($this->des_total_ === "" || is_null($this->des_total_))  
      { 
          $this->des_total_ = 0;
          $this->sc_force_zero[] = 'des_total_';
      } 
      if ($this->des_operacion_ === "" || is_null($this->des_operacion_))  
      { 
          $this->des_operacion_ = 0;
          $this->sc_force_zero[] = 'des_operacion_';
      } 
      if ($this->des_consumo_ === "" || is_null($this->des_consumo_))  
      { 
          $this->des_consumo_ = 0;
          $this->sc_force_zero[] = 'des_consumo_';
      } 
      if ($this->des_orden_ === "" || is_null($this->des_orden_))  
      { 
          $this->des_orden_ = 0;
          $this->sc_force_zero[] = 'des_orden_';
      } 
      if ($this->des_ruta_ === "" || is_null($this->des_ruta_))  
      { 
          $this->des_ruta_ = 0;
          $this->sc_force_zero[] = 'des_ruta_';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->des_numero_medidor__before_qstr = $this->des_numero_medidor_;
          $this->des_numero_medidor_ = substr($this->Db->qstr($this->des_numero_medidor_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_numero_medidor_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_numero_medidor_);
          }
          if ($this->des_numero_medidor_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_numero_medidor_ = "null"; 
              $NM_val_null[] = "des_numero_medidor_";
          } 
          $this->des_estado__before_qstr = $this->des_estado_;
          $this->des_estado_ = substr($this->Db->qstr($this->des_estado_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_estado_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_estado_);
          }
          if ($this->des_estado_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_estado_ = "null"; 
              $NM_val_null[] = "des_estado_";
          } 
          $this->des_revisar__before_qstr = $this->des_revisar_;
          $this->des_revisar_ = substr($this->Db->qstr($this->des_revisar_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_revisar_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_revisar_);
          }
          if ($this->des_revisar_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_revisar_ = "null"; 
              $NM_val_null[] = "des_revisar_";
          } 
          $this->des_registra_danio__before_qstr = $this->des_registra_danio_;
          $this->des_registra_danio_ = substr($this->Db->qstr($this->des_registra_danio_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_registra_danio_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_registra_danio_);
          }
          if ($this->des_registra_danio_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_registra_danio_ = "null"; 
              $NM_val_null[] = "des_registra_danio_";
          } 
          $this->des_contabilizado__before_qstr = $this->des_contabilizado_;
          $this->des_contabilizado_ = substr($this->Db->qstr($this->des_contabilizado_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_contabilizado_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_contabilizado_);
          }
          if ($this->des_contabilizado_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_contabilizado_ = "null"; 
              $NM_val_null[] = "des_contabilizado_";
          } 
          $this->des_imagen_lectura__before_qstr = $this->des_imagen_lectura_;
          $this->des_imagen_lectura_ = substr($this->Db->qstr($this->des_imagen_lectura_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_imagen_lectura_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_imagen_lectura_);
          }
          if ($this->des_imagen_lectura_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_imagen_lectura_ = "null"; 
              $NM_val_null[] = "des_imagen_lectura_";
          } 
          $this->des_numero_censo__before_qstr = $this->des_numero_censo_;
          $this->des_numero_censo_ = substr($this->Db->qstr($this->des_numero_censo_), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->des_numero_censo_ = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->des_numero_censo_);
          }
          if ($this->des_numero_censo_ == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->des_numero_censo_ = "null"; 
              $NM_val_null[] = "des_numero_censo_";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_jap_registro_deuda_lectura_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $bUpdateOk = false;
              $this->sc_evento = 'update';
          } 
          $aUpdateOk = array();
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "des_lectura_anterior = $this->des_lectura_anterior_, des_lectura_actual = $this->des_lectura_actual_, des_consumo_base = $this->des_consumo_base_, des_consumo_excedente = $this->des_consumo_excedente_, des_total = $this->des_total_, des_consumo = $this->des_consumo_, des_revisar = '$this->des_revisar_', des_registra_danio = '$this->des_registra_danio_', des_contabilizado = '$this->des_contabilizado_'"; 
              } 
              if (isset($NM_val_form['des_escenario_']) && $NM_val_form['des_escenario_'] != $this->nmgp_dados_select['des_escenario_']) 
              { 
                  $SC_fields_update[] = "des_escenario = $this->des_escenario_"; 
              } 
              if (isset($NM_val_form['des_propietario_']) && $NM_val_form['des_propietario_'] != $this->nmgp_dados_select['des_propietario_']) 
              { 
                  $SC_fields_update[] = "des_propietario = $this->des_propietario_"; 
              } 
              if (isset($NM_val_form['des_contrato_']) && $NM_val_form['des_contrato_'] != $this->nmgp_dados_select['des_contrato_']) 
              { 
                  $SC_fields_update[] = "des_contrato = $this->des_contrato_"; 
              } 
              if (isset($NM_val_form['des_valor_base_']) && $NM_val_form['des_valor_base_'] != $this->nmgp_dados_select['des_valor_base_']) 
              { 
                  $SC_fields_update[] = "des_valor_base = $this->des_valor_base_"; 
              } 
              if (isset($NM_val_form['des_valor_excedente_']) && $NM_val_form['des_valor_excedente_'] != $this->nmgp_dados_select['des_valor_excedente_']) 
              { 
                  $SC_fields_update[] = "des_valor_excedente = $this->des_valor_excedente_"; 
              } 
              if (isset($NM_val_form['des_operacion_']) && $NM_val_form['des_operacion_'] != $this->nmgp_dados_select['des_operacion_']) 
              { 
                  $SC_fields_update[] = "des_operacion = $this->des_operacion_"; 
              } 
              if (isset($NM_val_form['des_numero_medidor_']) && $NM_val_form['des_numero_medidor_'] != $this->nmgp_dados_select['des_numero_medidor_']) 
              { 
                  $SC_fields_update[] = "des_numero_medidor = '$this->des_numero_medidor_'"; 
              } 
              if (isset($NM_val_form['des_orden_']) && $NM_val_form['des_orden_'] != $this->nmgp_dados_select['des_orden_']) 
              { 
                  $SC_fields_update[] = "des_orden = $this->des_orden_"; 
              } 
              if (isset($NM_val_form['des_estado_']) && $NM_val_form['des_estado_'] != $this->nmgp_dados_select['des_estado_']) 
              { 
                  $SC_fields_update[] = "des_estado = '$this->des_estado_'"; 
              } 
              if (isset($NM_val_form['des_ruta_']) && $NM_val_form['des_ruta_'] != $this->nmgp_dados_select['des_ruta_']) 
              { 
                  $SC_fields_update[] = "des_ruta = $this->des_ruta_"; 
              } 
              if (isset($NM_val_form['des_numero_censo_']) && $NM_val_form['des_numero_censo_'] != $this->nmgp_dados_select['des_numero_censo_']) 
              { 
                  $SC_fields_update[] = "des_numero_censo = '$this->des_numero_censo_'"; 
              } 
              $temp_cmd_sql = "";
              if ($this->des_imagen_lectura__limpa == "S")
              {
                  if ($this->des_imagen_lectura_ != "null")
                  {
                      $this->des_imagen_lectura_ = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                      $temp_cmd_sql = "des_imagen_lectura = '" . $this->des_imagen_lectura_ . "'";
                  }
                  else
                  {
                      $temp_cmd_sql = "des_imagen_lectura = '" . $this->des_imagen_lectura_ . "'";
                  }
                  $this->des_imagen_lectura_ = "";
              }
              else
              {
                  if ($this->des_imagen_lectura_ != "none" && $this->des_imagen_lectura_ != "")
                  {
                      $NM_conteudo =  $this->des_imagen_lectura_;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      $temp_cmd_sql .= " des_imagen_lectura = '$NM_conteudo'";
                      }
                      else
                      {
                          $temp_cmd_sql .= " des_imagen_lectura = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "des_imagen_lectura_";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE des_id = $this->des_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE des_id = $this->des_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE des_id = $this->des_id_ ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE des_id = $this->des_id_ ";  
              }  
              else  
              {
                  $comando .= " WHERE des_id = $this->des_id_ ";  
              }  
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $useUpdateProcedure = false;
              if (!empty($SC_fields_update) || $useUpdateProcedure)
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
                  $rs = $this->Db->Execute($comando);  
                  if ($rs === false) 
                  { 
                      if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                      {
                          $dbErrorMessage = $this->Db->ErrorMsg();
                          $dbErrorCode = $this->Db->ErrorNo();
                          $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                          if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                          { 
                              $this->sc_erro_update = $dbErrorMessage;
                              $this->NM_rollback_db(); 
                              if ($this->NM_ajax_flag)
                              {
                                  form_jap_registro_deuda_lectura_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              $this->des_numero_medidor_ = $this->des_numero_medidor__before_qstr;
              $this->des_estado_ = $this->des_estado__before_qstr;
              $this->des_revisar_ = $this->des_revisar__before_qstr;
              $this->des_registra_danio_ = $this->des_registra_danio__before_qstr;
              $this->des_contabilizado_ = $this->des_contabilizado__before_qstr;
              $this->des_imagen_lectura_ = $this->des_imagen_lectura__before_qstr;
              $this->des_numero_censo_ = $this->des_numero_censo__before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              if ($this->des_imagen_lectura__limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['des_imagen_lectura__salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }
              $this->sc_evento = "update"; 
              $this->nmgp_opcao = "igual"; 
              $this->nm_flag_iframe = true;
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
              $this->NM_gera_log_new();
              $this->NM_gera_log_compress();
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
                  $this->NM_ajax_info['fldList']['des_imagen_lectura__salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }

              $this->sc_teve_alt = true; 
              if     (isset($NM_val_form) && isset($NM_val_form['des_id_'])) { $this->des_id_ = $NM_val_form['des_id_']; }
              elseif (isset($this->des_id_)) { $this->nm_limpa_alfa($this->des_id_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_propietario_'])) { $this->des_propietario_ = $NM_val_form['des_propietario_']; }
              elseif (isset($this->des_propietario_)) { $this->nm_limpa_alfa($this->des_propietario_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_contrato_'])) { $this->des_contrato_ = $NM_val_form['des_contrato_']; }
              elseif (isset($this->des_contrato_)) { $this->nm_limpa_alfa($this->des_contrato_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_lectura_anterior_'])) { $this->des_lectura_anterior_ = $NM_val_form['des_lectura_anterior_']; }
              elseif (isset($this->des_lectura_anterior_)) { $this->nm_limpa_alfa($this->des_lectura_anterior_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_lectura_actual_'])) { $this->des_lectura_actual_ = $NM_val_form['des_lectura_actual_']; }
              elseif (isset($this->des_lectura_actual_)) { $this->nm_limpa_alfa($this->des_lectura_actual_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_consumo_base_'])) { $this->des_consumo_base_ = $NM_val_form['des_consumo_base_']; }
              elseif (isset($this->des_consumo_base_)) { $this->nm_limpa_alfa($this->des_consumo_base_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_consumo_excedente_'])) { $this->des_consumo_excedente_ = $NM_val_form['des_consumo_excedente_']; }
              elseif (isset($this->des_consumo_excedente_)) { $this->nm_limpa_alfa($this->des_consumo_excedente_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_total_'])) { $this->des_total_ = $NM_val_form['des_total_']; }
              elseif (isset($this->des_total_)) { $this->nm_limpa_alfa($this->des_total_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_numero_medidor_'])) { $this->des_numero_medidor_ = $NM_val_form['des_numero_medidor_']; }
              elseif (isset($this->des_numero_medidor_)) { $this->nm_limpa_alfa($this->des_numero_medidor_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_consumo_'])) { $this->des_consumo_ = $NM_val_form['des_consumo_']; }
              elseif (isset($this->des_consumo_)) { $this->nm_limpa_alfa($this->des_consumo_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_orden_'])) { $this->des_orden_ = $NM_val_form['des_orden_']; }
              elseif (isset($this->des_orden_)) { $this->nm_limpa_alfa($this->des_orden_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_revisar_'])) { $this->des_revisar_ = $NM_val_form['des_revisar_']; }
              elseif (isset($this->des_revisar_)) { $this->nm_limpa_alfa($this->des_revisar_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_registra_danio_'])) { $this->des_registra_danio_ = $NM_val_form['des_registra_danio_']; }
              elseif (isset($this->des_registra_danio_)) { $this->nm_limpa_alfa($this->des_registra_danio_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_contabilizado_'])) { $this->des_contabilizado_ = $NM_val_form['des_contabilizado_']; }
              elseif (isset($this->des_contabilizado_)) { $this->nm_limpa_alfa($this->des_contabilizado_); }
              if     (isset($NM_val_form) && isset($NM_val_form['des_numero_censo_'])) { $this->des_numero_censo_ = $NM_val_form['des_numero_censo_']; }
              elseif (isset($this->des_numero_censo_)) { $this->nm_limpa_alfa($this->des_numero_censo_); }
              $this->nm_proc_onload_record($this->nmgp_refresh_row);

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('des_id_', 'des_orden_', 'des_propietario_', 'des_contrato_', 'des_numero_medidor_', 'des_numero_censo_', 'des_lectura_anterior_', 'des_lectura_actual_', 'des_consumo_', 'des_consumo_base_', 'des_consumo_excedente_', 'des_total_', 'des_revisar_', 'des_registra_danio_', 'des_contabilizado_'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if (isset($this->Embutida_ronly) && $this->Embutida_ronly)
              {

                  $this->NM_ajax_info['readOnly']['des_id_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_orden_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_propietario_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_contrato_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_numero_medidor_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_numero_censo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_lectura_anterior_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_lectura_actual_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_consumo_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_consumo_base_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_consumo_excedente_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_total_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_revisar_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_registra_danio_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_contabilizado_' . $this->nmgp_refresh_row] = 'on';

                  $this->NM_ajax_info['readOnly']['des_imagen_lectura_' . $this->nmgp_refresh_row] = 'on';


                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_pkey']; 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_) . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->des_imagen_lectura__scfile_name, $dir_file, "des_imagen_lectura_");
              if (trim($this->des_imagen_lectura__scfile_name) != $_test_file)
              {
                  $this->des_imagen_lectura__scfile_name = $_test_file;
                  $this->des_imagen_lectura_ = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES ($this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo) VALUES (" . $NM_seq_auto . "$this->des_id_, $this->des_escenario_, $this->des_propietario_, $this->des_contrato_, $this->des_lectura_anterior_, $this->des_lectura_actual_, $this->des_consumo_base_, $this->des_consumo_excedente_, $this->des_valor_base_, $this->des_valor_excedente_, $this->des_total_, $this->des_operacion_, '$this->des_numero_medidor_', $this->des_consumo_, $this->des_orden_, '$this->des_estado_', $this->des_ruta_, '$this->des_revisar_', '$this->des_registra_danio_', '$this->des_contabilizado_', '$this->des_imagen_lectura_', '$this->des_numero_censo_')"; 
              }
              $comando = str_replace("N'null'", "null", $comando) ; 
              $comando = str_replace("'null'", "null", $comando) ; 
              $comando = str_replace("#null#", "null", $comando) ; 
              $comando = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $comando) ; 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                $comando = str_replace("EXTEND('', YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO FRACTION)", "null", $comando) ; 
                $comando = str_replace("EXTEND('', YEAR TO DAY)", "null", $comando) ; 
                $comando = str_replace("EXTEND(null, YEAR TO DAY)", "null", $comando) ; 
              }  
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
              $rs = $this->Db->Execute($comando); 
              if ($rs === false)  
              { 
                  if (FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "MAIL SENT") && FALSE === strpos(strtoupper($this->Db->ErrorMsg()), "WARNING"))
                  {
                      $dbErrorMessage = $this->Db->ErrorMsg();
                      $dbErrorCode = $this->Db->ErrorNo();
                      $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                      $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $dbErrorMessage, true);
                      if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
                      { 
                          $this->sc_erro_insert = $dbErrorMessage;
                          $this->nmgp_opcao     = 'refresh_insert';
                          $this->NM_rollback_db(); 
                          if ($this->NM_ajax_flag)
                          {
                              form_jap_registro_deuda_lectura_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->des_numero_medidor_ = $this->des_numero_medidor__before_qstr;
              $this->des_estado_ = $this->des_estado__before_qstr;
              $this->des_revisar_ = $this->des_revisar__before_qstr;
              $this->des_registra_danio_ = $this->des_registra_danio__before_qstr;
              $this->des_contabilizado_ = $this->des_contabilizado__before_qstr;
              $this->des_imagen_lectura_ = $this->des_imagen_lectura__before_qstr;
              $this->des_numero_censo_ = $this->des_numero_censo__before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['db_changed'] = true;

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_) . "/"; 
              if (nm_mkdir($dir_img))  
              { 
                  $reg_des_imagen_lectura_ = ""; 
                  if (is_file($this->SC_IMG_des_imagen_lectura_)) { 
                      $arq_des_imagen_lectura_ = fopen($this->SC_IMG_des_imagen_lectura_, "r") ; 
                      $reg_des_imagen_lectura_ = fread($arq_des_imagen_lectura_, filesize($this->SC_IMG_des_imagen_lectura_)) ; 
                      fclose($arq_des_imagen_lectura_) ;  
                      $arq_des_imagen_lectura_ = fopen($dir_img . trim($this->des_imagen_lectura__scfile_name), "w") ; 
                      fwrite($arq_des_imagen_lectura_, $reg_des_imagen_lectura_) ;  
                      fclose($arq_des_imagen_lectura_) ;  
                  }
              } 
              $this->sc_evento = "insert"; 
              $this->des_numero_medidor_ = $this->des_numero_medidor__before_qstr;
              $this->des_estado_ = $this->des_estado__before_qstr;
              $this->des_revisar_ = $this->des_revisar__before_qstr;
              $this->des_registra_danio_ = $this->des_registra_danio__before_qstr;
              $this->des_contabilizado_ = $this->des_contabilizado__before_qstr;
              $this->des_imagen_lectura_ = $this->des_imagen_lectura__before_qstr;
              $this->des_numero_censo_ = $this->des_numero_censo__before_qstr;
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_qtd']++; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_I_E']++; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_incl = true; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_id_'] = $this->des_id_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_orden_'] = $this->des_orden_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_propietario_'] = $this->des_propietario_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_contrato_'] = $this->des_contrato_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_numero_medidor_'] = $this->des_numero_medidor_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_numero_censo_'] = $this->des_numero_censo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_lectura_anterior_'] = $this->des_lectura_anterior_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_lectura_actual_'] = $this->des_lectura_actual_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_consumo_'] = $this->des_consumo_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_consumo_base_'] = $this->des_consumo_base_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_consumo_excedente_'] = $this->des_consumo_excedente_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_total_'] = $this->des_total_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_revisar_'] = $this->des_revisar_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_registra_danio_'] = $this->des_registra_danio_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_contabilizado_'] = $this->des_contabilizado_;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert]['des_imagen_lectura_'] = $this->des_imagen_lectura_;
              if (!empty($this->sc_force_zero))
              {
                  foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
                  {
                      eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
                  }
              }
              $this->sc_force_zero = array();
              if (!empty($NM_val_null))
              {
                  foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
                  {
                      eval('$this->' . $sc_val_null_field . ' = "";');
                  }
              }
              if (isset($this->des_id_)) { $this->nm_limpa_alfa($this->des_id_); }
              if (isset($this->des_propietario_)) { $this->nm_limpa_alfa($this->des_propietario_); }
              if (isset($this->des_contrato_)) { $this->nm_limpa_alfa($this->des_contrato_); }
              if (isset($this->des_lectura_anterior_)) { $this->nm_limpa_alfa($this->des_lectura_anterior_); }
              if (isset($this->des_lectura_actual_)) { $this->nm_limpa_alfa($this->des_lectura_actual_); }
              if (isset($this->des_consumo_base_)) { $this->nm_limpa_alfa($this->des_consumo_base_); }
              if (isset($this->des_consumo_excedente_)) { $this->nm_limpa_alfa($this->des_consumo_excedente_); }
              if (isset($this->des_total_)) { $this->nm_limpa_alfa($this->des_total_); }
              if (isset($this->des_numero_medidor_)) { $this->nm_limpa_alfa($this->des_numero_medidor_); }
              if (isset($this->des_consumo_)) { $this->nm_limpa_alfa($this->des_consumo_); }
              if (isset($this->des_orden_)) { $this->nm_limpa_alfa($this->des_orden_); }
              if (isset($this->des_revisar_)) { $this->nm_limpa_alfa($this->des_revisar_); }
              if (isset($this->des_registra_danio_)) { $this->nm_limpa_alfa($this->des_registra_danio_); }
              if (isset($this->des_contabilizado_)) { $this->nm_limpa_alfa($this->des_contabilizado_); }
              if (isset($this->des_numero_censo_)) { $this->nm_limpa_alfa($this->des_numero_censo_); }
              if (isset($this->Embutida_form) && $this->Embutida_form)
              {
                  $this->nm_guardar_campos();
                  $this->nm_proc_onload_record($this->nmgp_refresh_row);
                  $this->nm_formatar_campos();

                  $tmpLabel_des_id_ = $this->des_id_;
                  $this->NM_ajax_info['fldList']['des_id_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_id_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_id_)));
                  $this->NM_ajax_info['fldList']['des_id_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_id_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_id_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_id_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['des_orden_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_orden_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_orden_)));
                  $this->NM_ajax_info['fldList']['des_orden_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_orden_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_orden_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_orden_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_orden_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_orden_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array(); 
}
if ($this->des_propietario_ != "")
{ 
   $this->nm_clear_val("des_propietario_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_des_id_ = $this->des_id_;
   $old_value_des_orden_ = $this->des_orden_;
   $old_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $old_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $old_value_des_consumo_ = $this->des_consumo_;
   $old_value_des_consumo_base_ = $this->des_consumo_base_;
   $old_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $old_value_des_total_ = $this->des_total_;
   $this->nm_tira_formatacao();


   $unformatted_value_des_id_ = $this->des_id_;
   $unformatted_value_des_orden_ = $this->des_orden_;
   $unformatted_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $unformatted_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $unformatted_value_des_consumo_ = $this->des_consumo_;
   $unformatted_value_des_consumo_base_ = $this->des_consumo_base_;
   $unformatted_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $unformatted_value_des_total_ = $this->des_total_;

   $nm_comando = "SELECT cl_id, cl_nombre  FROM del_cliente  WHERE cl_id = $this->des_propietario_  ORDER BY cl_nombre";

   $this->des_id_ = $old_value_des_id_;
   $this->des_orden_ = $old_value_des_orden_;
   $this->des_lectura_anterior_ = $old_value_des_lectura_anterior_;
   $this->des_lectura_actual_ = $old_value_des_lectura_actual_;
   $this->des_consumo_ = $old_value_des_consumo_;
   $this->des_consumo_base_ = $old_value_des_consumo_base_;
   $this->des_consumo_excedente_ = $old_value_des_consumo_excedente_;
   $this->des_total_ = $old_value_des_total_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($this->des_propietario_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_des_propietario_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['des_propietario_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['des_propietario_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_propietario_)));
                  $this->NM_ajax_info['fldList']['des_propietario_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_des_propietario_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_propietario_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_propietario_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_propietario_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_propietario_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array(); 
}
if ($this->des_contrato_ != "")
{ 
   $this->nm_clear_val("des_contrato_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_des_id_ = $this->des_id_;
   $old_value_des_orden_ = $this->des_orden_;
   $old_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $old_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $old_value_des_consumo_ = $this->des_consumo_;
   $old_value_des_consumo_base_ = $this->des_consumo_base_;
   $old_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $old_value_des_total_ = $this->des_total_;
   $this->nm_tira_formatacao();


   $unformatted_value_des_id_ = $this->des_id_;
   $unformatted_value_des_orden_ = $this->des_orden_;
   $unformatted_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $unformatted_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $unformatted_value_des_consumo_ = $this->des_consumo_;
   $unformatted_value_des_consumo_base_ = $this->des_consumo_base_;
   $unformatted_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $unformatted_value_des_total_ = $this->des_total_;

   $nm_comando = "SELECT con_id, con_numero_contrato  FROM jap_contrato  WHERE con_id = $this->des_contrato_ ORDER BY con_numero_contrato";

   $this->des_id_ = $old_value_des_id_;
   $this->des_orden_ = $old_value_des_orden_;
   $this->des_lectura_anterior_ = $old_value_des_lectura_anterior_;
   $this->des_lectura_actual_ = $old_value_des_lectura_actual_;
   $this->des_consumo_ = $old_value_des_consumo_;
   $this->des_consumo_base_ = $old_value_des_consumo_base_;
   $this->des_consumo_excedente_ = $old_value_des_consumo_excedente_;
   $this->des_total_ = $old_value_des_total_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
          $sLabelTemp = '';
          foreach ($aLookup as $aValData)
          {
              if (key($aValData) == form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($this->des_contrato_)))
              {
                  $sLabelTemp = current($aValData);
              }
          }
          $tmpLabel_des_contrato_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['des_contrato_' . $this->nmgp_refresh_row]['type']    = 'select';
                  $this->NM_ajax_info['fldList']['des_contrato_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_contrato_)));
                  $this->NM_ajax_info['fldList']['des_contrato_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_des_contrato_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_contrato_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_contrato_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_contrato_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_contrato_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['des_numero_medidor_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_numero_medidor_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_numero_medidor_)));
                  $this->NM_ajax_info['fldList']['des_numero_medidor_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_numero_medidor_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_numero_medidor_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_numero_medidor_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_numero_medidor_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_numero_medidor_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['des_numero_censo_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_numero_censo_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_numero_censo_)));
                  $this->NM_ajax_info['fldList']['des_numero_censo_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_numero_censo_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_numero_censo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_numero_censo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_numero_censo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_numero_censo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_lectura_anterior_)));
                  $this->NM_ajax_info['fldList']['des_lectura_anterior_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_lectura_anterior_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_lectura_anterior_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_lectura_anterior_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_lectura_anterior_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_lectura_anterior_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['des_lectura_actual_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_lectura_actual_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_lectura_actual_)));
                  $this->NM_ajax_info['fldList']['des_lectura_actual_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_lectura_actual_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_lectura_actual_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_lectura_actual_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_lectura_actual_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_lectura_actual_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_des_consumo_ = $this->des_consumo_;
                  $this->NM_ajax_info['fldList']['des_consumo_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['des_consumo_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_consumo_)));
                  $this->NM_ajax_info['fldList']['des_consumo_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_consumo_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_consumo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_consumo_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_consumo_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_consumo_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_des_consumo_base_ = $this->des_consumo_base_;
                  $this->NM_ajax_info['fldList']['des_consumo_base_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['des_consumo_base_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_consumo_base_)));
                  $this->NM_ajax_info['fldList']['des_consumo_base_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_consumo_base_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_consumo_base_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_consumo_base_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_consumo_base_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_consumo_base_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_des_consumo_excedente_ = $this->des_consumo_excedente_;
                  $this->NM_ajax_info['fldList']['des_consumo_excedente_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['des_consumo_excedente_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_consumo_excedente_)));
                  $this->NM_ajax_info['fldList']['des_consumo_excedente_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_consumo_excedente_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_consumo_excedente_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_consumo_excedente_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_consumo_excedente_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_consumo_excedente_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $tmpLabel_des_total_ = $this->des_total_;
                  $this->NM_ajax_info['fldList']['des_total_' . $this->nmgp_refresh_row]['type']    = 'label';
                  $this->NM_ajax_info['fldList']['des_total_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_total_)));
                  $this->NM_ajax_info['fldList']['des_total_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_total_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_total_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_total_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_total_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_total_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
$aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string('SI') => str_replace('<', '&lt;',form_jap_registro_deuda_lectura_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_revisar_'][] = 'SI';
          $sLabelTemp = '';
          $aTemp_des_revisar_ = explode(';', $this->des_revisar_);
          foreach ($aTemp_des_revisar_ as $i => $v)
          {
              $aTemp_des_revisar_[$i] = form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($v));
          }
          foreach ($aLookup as $aValData)
          {
              if (in_array(key($aValData), $aTemp_des_revisar_))
              {
                  if ('' != $sLabelTemp)
                  {
                      $sLabelTemp .= '<br />';
                  }
                  $sLabelTemp .= current($aValData);
              }
          }
          $tmpLabel_des_revisar_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['des_revisar_' . $this->nmgp_refresh_row]['type']    = 'checkbox';
                  $this->NM_ajax_info['fldList']['des_revisar_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_revisar_)));
                  $this->NM_ajax_info['fldList']['des_revisar_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_des_revisar_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_revisar_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_revisar_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_revisar_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_revisar_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $aLookup = array();
$aLookup[] = array(form_jap_registro_deuda_lectura_pack_protect_string('SI') => str_replace('<', '&lt;',form_jap_registro_deuda_lectura_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_registra_danio_'][] = 'SI';
          $sLabelTemp = '';
          $aTemp_des_registra_danio_ = explode(';', $this->des_registra_danio_);
          foreach ($aTemp_des_registra_danio_ as $i => $v)
          {
              $aTemp_des_registra_danio_[$i] = form_jap_registro_deuda_lectura_pack_protect_string(NM_charset_to_utf8($v));
          }
          foreach ($aLookup as $aValData)
          {
              if (in_array(key($aValData), $aTemp_des_registra_danio_))
              {
                  if ('' != $sLabelTemp)
                  {
                      $sLabelTemp .= '<br />';
                  }
                  $sLabelTemp .= current($aValData);
              }
          }
          $tmpLabel_des_registra_danio_ = $sLabelTemp;
                  $this->NM_ajax_info['fldList']['des_registra_danio_' . $this->nmgp_refresh_row]['type']    = 'checkbox';
                  $this->NM_ajax_info['fldList']['des_registra_danio_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_registra_danio_)));
                  $this->NM_ajax_info['fldList']['des_registra_danio_' . $this->nmgp_refresh_row]['labList'] = array($tmpLabel_des_registra_danio_);

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_registra_danio_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_registra_danio_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_registra_danio_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_registra_danio_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

                  $this->NM_ajax_info['fldList']['des_contabilizado_' . $this->nmgp_refresh_row]['type']    = 'text';
                  $this->NM_ajax_info['fldList']['des_contabilizado_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_contabilizado_)));
                  $this->NM_ajax_info['fldList']['des_contabilizado_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_contabilizado_)));

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_contabilizado_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_contabilizado_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_contabilizado_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_contabilizado_' . $this->nmgp_refresh_row] = "on";
                      }
                  }

   if ($this->des_imagen_lectura_ != "" && $this->des_imagen_lectura_ != "none")   
   { 
       $path_des_imagen_lectura_ = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_) . "/" . $this->des_imagen_lectura_;
       $md5_des_imagen_lectura_  = md5("/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_) . $this->des_imagen_lectura_);
       nm_fix_SubDirUpload($this->des_imagen_lectura_,$this->Ini->root . $this->Ini->path_imagens,"/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_));
        if (is_file($path_des_imagen_lectura_))  
       { 
           $NM_ler_img = true;
           $out_des_imagen_lectura_ = $this->Ini->path_imag_temp . "/sc_des_imagen_lectura__" . $md5_des_imagen_lectura_ . ".gif" ;  
           $out1_des_imagen_lectura_ = $out_des_imagen_lectura_; 
           if (is_file($this->Ini->root . $out_des_imagen_lectura_))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_des_imagen_lectura_) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_des_imagen_lectura_ = fopen($path_des_imagen_lectura_, "r") ; 
               $reg_des_imagen_lectura_ = fread($tmp_des_imagen_lectura_, filesize($path_des_imagen_lectura_)) ; 
               fclose($tmp_des_imagen_lectura_) ;  
               $arq_des_imagen_lectura_ = fopen($this->Ini->root . $out_des_imagen_lectura_, "w") ;  
               fwrite($arq_des_imagen_lectura_, $reg_des_imagen_lectura_) ;  
               fclose($arq_des_imagen_lectura_) ;  
           } 
           $sc_obj_img = new nm_trata_img($this->Ini->root . $out_des_imagen_lectura_, true);
           $this->nmgp_return_img['des_imagen_lectura_'][0] = $sc_obj_img->getHeight();
           $this->nmgp_return_img['des_imagen_lectura_'][1] = $sc_obj_img->getWidth();
           $NM_redim_img = true;
           $md5_des_imagen_lectura_  = md5($this->des_imagen_lectura_);
           $out_des_imagen_lectura_ = $this->Ini->path_imag_temp . "/sc_des_imagen_lectura__5050" . $md5_des_imagen_lectura_ . ".gif" ;  
           if (is_file($this->Ini->root . $out_des_imagen_lectura_))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_des_imagen_lectura_) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_des_imagen_lectura_, true);
                   $sc_obj_img->setWidth(50);
                   $sc_obj_img->setHeight(50);
                   $sc_obj_img->createImg($this->Ini->root . $out_des_imagen_lectura_);
               } 
               else 
               { 
                   $out_des_imagen_lectura_ = $out1_des_imagen_lectura_;
               } 
           } 
       } 
   } 
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $this->nmgp_refresh_row]['imgFile'] = $out_des_imagen_lectura_;
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $this->nmgp_refresh_row]['imgOrig'] = $out1_des_imagen_lectura_;
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $this->nmgp_refresh_row]['type']    = 'imagem';
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $this->nmgp_refresh_row]['valList'] = array($this->form_encode_input(NM_charset_to_utf8($this->des_imagen_lectura_)));
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $this->nmgp_refresh_row]['labList'] = array($this->form_encode_input(NM_charset_to_utf8($tmpLabel_des_imagen_lectura_)));
                  $this->NM_ajax_info['fldList']['des_imagen_lectura_' . $this->nmgp_refresh_row]['imgLink'] = "javascript:nm_mostra_img(var_ajax_img_des_imagen_lectura_" . $this->nmgp_refresh_row . ", '" . $this->nmgp_return_img['des_imagen_lectura_'][0] . "', '" . $this->nmgp_return_img['des_imagen_lectura_'][0] . "')";

                  if ((isset($this->Embutida_form) && $this->Embutida_form) && (!isset($this->Embutida_ronly) || !$this->Embutida_ronly))
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_imagen_lectura_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_imagen_lectura_' . $this->nmgp_refresh_row] = "off";
                      }
                  }
                  elseif (isset($this->Embutida_ronly) && $this->Embutida_ronly)
                  {
                      if (!isset($this->NM_ajax_info['readOnly']['des_imagen_lectura_' . $this->nmgp_refresh_row]))
                      {
                          $this->NM_ajax_info['readOnly']['des_imagen_lectura_' . $this->nmgp_refresh_row] = "on";
                      }
                  }


                  $this->nm_tira_formatacao();

                  $this->NM_ajax_info['closeLine'] = $this->nmgp_refresh_row;
              }
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->des_id_ = substr($this->Db->qstr($this->des_id_), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Campos_Mens_erro = $this->Ini->Nm_lang['lang_errm_dele_nfnd']; 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where des_id = $this->des_id_ "); 
              }  
              if ($rs === false) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dele'], $this->Db->ErrorMsg(), true); 
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) 
                  { 
                      $this->sc_erro_delete = $this->Db->ErrorMsg();  
                      $this->NM_rollback_db(); 
                      if ($this->NM_ajax_flag)
                      {
                          form_jap_registro_deuda_lectura_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['db_changed'] = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_qtd']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']--; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_I_E']--; 
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] + 1; 
              $this->NM_gera_nav_page(); 
              $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
              $this->sc_teve_excl = true; 
              if ($this->lig_edit_lookup)
              {
                  $this->lig_edit_lookup_call = true;
              }
          }

          }
          else
          {
              $this->sc_evento = "delete"; 
              $this->nmgp_opcao = "igual"; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $sMsgErro); 
          }

      }  
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
      if (!empty($NM_val_null))
      {
          foreach ($NM_val_null as $i_val_null => $sc_val_null_field)
          {
              eval('$this->' . $sc_val_null_field . ' = "";');
          }
      }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['parms'] = "des_id_?#?$this->des_id_?@?"; 
      }
      $this->nmgp_dados_form['des_imagen_lectura_'] = ""; 
      $this->des_imagen_lectura__limpa = ""; 
      $this->des_imagen_lectura__salva = ""; 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->des_id_ = null === $this->des_id_ ? null : substr($this->Db->qstr($this->des_id_), 1, -1); 
      } 
   }
//---------- 
   function nm_select_banco() 
   { 
      global $nm_form_submit, $sc_seq_vert, $sc_check_incl, $teste_validade, $sc_where;
 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['rows']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['rows']))
      {
          $this->sc_max_reg = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['rows'];
      } 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['rows_ins']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['rows_ins']))
      {
          $this->sc_max_reg_incl = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_registro_deuda_lectura']['rows_ins'];
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_qtd_reg']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_qtd_reg'])
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_qtd_reg'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg'] > 0 || strtolower($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg']) == "all"))
      {
          $this->sc_max_reg = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_max_reg'];
      } 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
      $this->form_vert_form_jap_registro_deuda_lectura = array();
      if ($this->nmgp_opcao != "novo") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['parms'] = ""; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($this->sc_teve_excl)
      {
          $this->nmgp_opcao = "avanca";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] -= $this->sc_max_reg;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0;
      }
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] . ")";
          }
      }
      $sc_where = trim("(des_escenario=" . $_SESSION['var_escenario'] . ")");
      if (substr(strtolower($sc_where), 0, 5) == "where")
      {
          $sc_where  = substr($sc_where , 5);
      }
      if (!empty($sc_where))
      {
          $sc_where = " where " . $sc_where . " ";
      }
      if ('' != $sc_where_filter)
      {
          $sc_where = (isset($sc_where) && '' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (((isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao) || (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)) && !$this->has_where_params && 'novo' != $this->nmgp_opcao)
      {
          $aNewWhereCond = array();
          if (null != $this->des_id_)
          {
              $aNewWhereCond[] = "des_id = " . $this->des_id_;
          }
          if (!$this->NM_ajax_flag)
          {
              $this->NM_btn_navega = "S";
          }
          elseif (!empty($aNewWhereCond))
          {
              if ('' == $sc_where)
              {
                  $sc_where = " where (";
              }
              else
              {
                  $sc_where .= " and (";
              }
              $sc_where .= implode(" and ", $aNewWhereCond) . ")";
          }
      }
      if ('total' != $this->form_paginacao)
      {
          if ($this->app_is_initializing || $this->sc_teve_excl || $this->sc_teve_incl || (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']))
          {
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where;
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
              $rt = $this->Db->Execute($nmgp_select);
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit;
              }
              $qt_geral_reg_form_jap_registro_deuda_lectura = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] = $qt_geral_reg_form_jap_registro_deuda_lectura;
              $rt->Close();
          }
      if ((isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_I_E'] = 0; 
          if (!$this->sc_teve_excl && !$this->sc_teve_incl) 
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0; 
          } 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->des_id_))
          {
              $Reg_OK      = false;
              $Count_start = -1;
              $sc_order_by = "";
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Sel_Chave = "des_id"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Sel_Chave = "des_id"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Sel_Chave = "des_id"; 
              }
              else  
              {
                  $Sel_Chave = "des_id"; 
              }
              $nmgp_select = "SELECT " . $Sel_Chave . " from " . $this->Ini->nm_tabela . $sc_where; 
              $sc_order_by = "des_orden";
              $sc_order_by = str_replace("order by ", "", $sc_order_by);
              $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
              if (!empty($sc_order_by))
              {
                  $nmgp_select .= " order by $sc_order_by "; 
              }
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              while (!$rt->EOF && !$Reg_OK)
              { 
                  if ($rt->fields[0] == $this->des_id_)
                  { 
                      $Reg_OK = true;
                  }  
                  $Count_start++;
                  $rt->MoveNext();
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = $Count_start;
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_jap_registro_deuda_lectura = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'];
      } 
      if ($this->nmgp_opcao == "inicio" || $this->nmgp_opcao == "ordem") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_jap_registro_deuda_lectura) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] += ($this->sc_max_reg + $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_I_E']); 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] > $qt_geral_reg_form_jap_registro_deuda_lectura)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = $qt_geral_reg_form_jap_registro_deuda_lectura - $this->sc_max_reg; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0; 
              }
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] -= $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = ($qt_geral_reg_form_jap_registro_deuda_lectura + 1) - $this->sc_max_reg; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] = 0; 
          }
      } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_I_E'] = 0; 
      }
      $Cmps_ord_def = array();
      $Cmps_ord_def[] = "des_orden";
      $Cmps_ord_def[] = "des_numero_censo";
      $Cmps_ord_def[] = "des_revisar";
      $Cmps_ord_def[] = "des_registra_danio";
      $Cmps_ord_def[] = "des_contabilizado";
      $Cmps_ord_def[] = "des_imagen_lectura";
      $sc_order_by  = "";
      $sc_order_by = "des_orden";
      $sc_order_by = str_replace("order by ", "", $sc_order_by);
      $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
      if (!empty($sc_order_by))
      {
          $sc_order_by = " order by $sc_order_by "; 
      }
      if ($this->nmgp_opcao == "ordem" && in_array($this->nmgp_ordem, $Cmps_ord_def)) 
      { 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_cmp'] != $this->nmgp_ordem)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_cmp'] = $this->nmgp_ordem; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' asc'; 
              switch ($this->nmgp_ordem) {
                  case "des_id":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_orden":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_propietario":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_contrato":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_lectura_anterior":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_lectura_actual":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_consumo":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_consumo_base":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_consumo_excedente":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_total":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_escenario":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_valor_base":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_valor_excedente":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_operacion":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  case "des_ruta":
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc';
                      break;
                  default:
                      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' asc';
                      break;
              }
          }
          elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] == ' asc')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' desc'; 
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] = ' asc'; 
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_cmp'])) 
      { 
          $sc_order_by = " order by " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_cmp'] . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord']; 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nmgp_select = "SELECT des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      else 
      { 
          $nmgp_select = "SELECT des_id, des_escenario, des_propietario, des_contrato, des_lectura_anterior, des_lectura_actual, des_consumo_base, des_consumo_excedente, des_valor_base, des_valor_excedente, des_total, des_operacion, des_numero_medidor, des_consumo, des_orden, des_estado, des_ruta, des_revisar, des_registra_danio, des_contabilizado, des_imagen_lectura, des_numero_censo from " . $this->Ini->nm_tabela . $sc_where . $sc_order_by; 
      } 
      if ($this->nmgp_opcao != "novo") 
      { 
      if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
          $rs = $this->Db->Execute($nmgp_select) ;
      }
      elseif ('total' == $this->form_paginacao)
      {
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
      }
      else
      {
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "R")
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          else 
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']) ; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, $this->sc_max_reg, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] . ")" ; 
                  $rs = $this->Db->SelectLimit($nmgp_select, $this->sc_max_reg, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']) ; 
              } 
              else  
              { 
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
                  $rs = $this->Db->Execute($nmgp_select) ; 
                  if (!$rs === false && !$rs->EOF) 
                  { 
                      $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start']) ;  
                  } 
              } 
          } 
      }
          if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($rs->EOF && $this->nmgp_botoes['new'] != "on")
          {
              $this->nmgp_form_empty = true;
          }
          if ($rs->EOF)
          {
              $sc_seq_vert = 0; 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter'] = true;
              }
          }
          else
          {
              $sc_seq_vert = 1; 
          }
          if ('total' == $this->form_paginacao)
          {
              $bPagTest = true;
              $this->sc_max_reg = 0;
          }
          else
          {
              $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
          }
          if (!$rs->EOF && (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields))) {
              $this->nm_proc_onload(false);
          }
          while (!$rs->EOF && $bPagTest)
          { 
              if ('total' == $this->form_paginacao)
              {
                  $this->sc_max_reg++;
              }
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $guard_seq_vert = $sc_seq_vert;
                  $sc_seq_vert    = $this->nmgp_refresh_row;
              }
              if ('total' != $this->form_paginacao)
              {
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "R")
              { 
                  $this->sc_max_reg++;
              } 
              }
              $this->des_id_ = $rs->fields[0] ; 
              $this->nmgp_dados_select['des_id_'] = $this->des_id_;
              $this->des_escenario_ = $rs->fields[1] ; 
              $this->nmgp_dados_select['des_escenario_'] = $this->des_escenario_;
              $this->des_propietario_ = $rs->fields[2] ; 
              $this->nmgp_dados_select['des_propietario_'] = $this->des_propietario_;
              $this->des_contrato_ = $rs->fields[3] ; 
              $this->nmgp_dados_select['des_contrato_'] = $this->des_contrato_;
              $this->des_lectura_anterior_ = $rs->fields[4] ; 
              $this->nmgp_dados_select['des_lectura_anterior_'] = $this->des_lectura_anterior_;
              $this->des_lectura_actual_ = $rs->fields[5] ; 
              $this->nmgp_dados_select['des_lectura_actual_'] = $this->des_lectura_actual_;
              $this->des_consumo_base_ = $rs->fields[6] ; 
              $this->nmgp_dados_select['des_consumo_base_'] = $this->des_consumo_base_;
              $this->des_consumo_excedente_ = $rs->fields[7] ; 
              $this->nmgp_dados_select['des_consumo_excedente_'] = $this->des_consumo_excedente_;
              $this->des_valor_base_ = $rs->fields[8] ; 
              $this->nmgp_dados_select['des_valor_base_'] = $this->des_valor_base_;
              $this->des_valor_excedente_ = $rs->fields[9] ; 
              $this->nmgp_dados_select['des_valor_excedente_'] = $this->des_valor_excedente_;
              $this->des_total_ = $rs->fields[10] ; 
              $this->nmgp_dados_select['des_total_'] = $this->des_total_;
              $this->des_operacion_ = $rs->fields[11] ; 
              $this->nmgp_dados_select['des_operacion_'] = $this->des_operacion_;
              $this->des_numero_medidor_ = $rs->fields[12] ; 
              $this->nmgp_dados_select['des_numero_medidor_'] = $this->des_numero_medidor_;
              $this->des_consumo_ = $rs->fields[13] ; 
              $this->nmgp_dados_select['des_consumo_'] = $this->des_consumo_;
              $this->des_orden_ = $rs->fields[14] ; 
              $this->nmgp_dados_select['des_orden_'] = $this->des_orden_;
              $this->des_estado_ = $rs->fields[15] ; 
              $this->nmgp_dados_select['des_estado_'] = $this->des_estado_;
              $this->des_ruta_ = $rs->fields[16] ; 
              $this->nmgp_dados_select['des_ruta_'] = $this->des_ruta_;
              $this->des_revisar_ = $rs->fields[17] ; 
              $this->nmgp_dados_select['des_revisar_'] = $this->des_revisar_;
              $this->des_registra_danio_ = $rs->fields[18] ; 
              $this->nmgp_dados_select['des_registra_danio_'] = $this->des_registra_danio_;
              $this->des_contabilizado_ = $rs->fields[19] ; 
              $this->nmgp_dados_select['des_contabilizado_'] = $this->des_contabilizado_;
              $this->des_imagen_lectura_ = $rs->fields[20] ; 
              $this->nmgp_dados_select['des_imagen_lectura_'] = $this->des_imagen_lectura_;
              $this->des_numero_censo_ = $rs->fields[21] ; 
              $this->nmgp_dados_select['des_numero_censo_'] = $this->des_numero_censo_;
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->des_id_ = (string)$this->des_id_; 
              $this->des_escenario_ = (string)$this->des_escenario_; 
              $this->des_propietario_ = (string)$this->des_propietario_; 
              $this->des_contrato_ = (string)$this->des_contrato_; 
              $this->des_lectura_anterior_ = (string)$this->des_lectura_anterior_; 
              $this->des_lectura_actual_ = (string)$this->des_lectura_actual_; 
              $this->des_consumo_base_ = (string)$this->des_consumo_base_; 
              $this->des_consumo_excedente_ = (string)$this->des_consumo_excedente_; 
              $this->des_valor_base_ = (string)$this->des_valor_base_; 
              $this->des_valor_excedente_ = (string)$this->des_valor_excedente_; 
              $this->des_total_ = (string)$this->des_total_; 
              $this->des_operacion_ = (string)$this->des_operacion_; 
              $this->des_consumo_ = (string)$this->des_consumo_; 
              $this->des_orden_ = (string)$this->des_orden_; 
              $this->des_ruta_ = (string)$this->des_ruta_; 
              if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['parms'])) 
              { 
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['parms'] = "des_id_?#?$this->des_id_?@?";
              } 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sub_dir'][0]  = "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->nm_tira_formatacao_des_contrato_($this->des_contrato_);
              $this->nm_proc_onload_record($sc_seq_vert);
              $this->storeRecordState($sc_seq_vert);
//
//-- 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert] = $this->nmgp_dados_select;
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_id_'] =  $this->des_id_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_orden_'] =  $this->des_orden_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_propietario_'] =  $this->des_propietario_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contrato_'] =  $this->des_contrato_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_numero_medidor_'] =  $this->des_numero_medidor_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_numero_censo_'] =  $this->des_numero_censo_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_lectura_anterior_'] =  $this->des_lectura_anterior_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_lectura_actual_'] =  $this->des_lectura_actual_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_'] =  $this->des_consumo_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_base_'] =  $this->des_consumo_base_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_excedente_'] =  $this->des_consumo_excedente_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_total_'] =  $this->des_total_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_revisar_'] =  $this->des_revisar_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_registra_danio_'] =  $this->des_registra_danio_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contabilizado_'] =  $this->des_contabilizado_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_imagen_lectura_'] =  $this->des_imagen_lectura_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_imagen_lectura__limpa'] =  $this->des_imagen_lectura__limpa; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_escenario_'] =  $this->des_escenario_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_valor_base_'] =  $this->des_valor_base_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_valor_excedente_'] =  $this->des_valor_excedente_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_operacion_'] =  $this->des_operacion_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_estado_'] =  $this->des_estado_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_ruta_'] =  $this->des_ruta_; 
              $sc_seq_vert++; 
              $rs->MoveNext() ; 
              if (isset($this->NM_ajax_opcao) && 'backup_line' == $this->NM_ajax_opcao)
              {
                  $sc_seq_vert = $guard_seq_vert;
              }
              if ('total' != $this->form_paginacao)
              {
                  $bPagTest = $sc_seq_vert <= $this->sc_max_reg;
              }
          } 
          ksort ($this->form_vert_form_jap_registro_deuda_lectura); 
          $rs->Close(); 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_qtd'] = $sc_seq_vert + $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] - 1;
          if ('total' == $this->form_paginacao)
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $this->sc_max_reg; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $this->sc_max_reg; 
          }
          else
          {
              $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] + 1; 
              $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_qtd']; 
              $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] + 1; 
          }
          if ($this->form_paginacao == "total")
          {
              $this->SC_nav_page = "";
          }
          else
          {
              $this->NM_gera_nav_page(); 
          }
          $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] < (($qt_geral_reg_form_jap_registro_deuda_lectura + 1) - $this->sc_max_reg);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opcao'] = '';
          }
      } 
      if ($this->nmgp_opcao == "novo") 
      { 
          $sc_seq_vert = 1; 
          $sc_check_incl = array(); 
          if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao) 
          { 
              $sc_seq_vert = $this->sc_seq_vert; 
              $this->sc_evento = "novo"; 
              $this->sc_max_reg_incl = $this->sc_seq_vert; 
          } 
          elseif (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_multi']) 
          { 
          } 
          else 
          { 
              $this->sc_max_reg_incl = 0; 
          } 
          while ($sc_seq_vert <= $this->sc_max_reg_incl) 
          { 
              $this->des_id_ = "";  
              $this->des_propietario_ = "";  
              $this->des_contrato_ = "";  
              $this->des_lectura_anterior_ = "";  
              $this->des_lectura_actual_ = "";  
              $this->des_consumo_base_ = "";  
              $this->des_consumo_excedente_ = "";  
              $this->des_total_ = "";  
              $this->des_numero_medidor_ = "";  
              $this->des_consumo_ = "";  
              $this->des_orden_ = "";  
              $this->des_revisar_ = "";  
              $this->des_registra_danio_ = "";  
              $this->des_contabilizado_ = "";  
              $this->des_imagen_lectura_ = "";  
              $this->des_numero_censo_ = "";  
              $this->nm_proc_onload_record($sc_seq_vert);
              if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key']))
              {
                  foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['foreign_key'] as $sFKName => $sFKValue)
                  {
                      if (isset($this->sc_conv_var[$sFKName]))
                      {
                          $sFKName = $this->sc_conv_var[$sFKName];
                      }
                      eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
                  }
              }
              $this->nm_guardar_campos();
              $this->nm_formatar_campos();
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_id_'] =  $this->des_id_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_orden_'] =  $this->des_orden_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_propietario_'] =  $this->des_propietario_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contrato_'] =  $this->des_contrato_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_numero_medidor_'] =  $this->des_numero_medidor_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_numero_censo_'] =  $this->des_numero_censo_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_lectura_anterior_'] =  $this->des_lectura_anterior_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_lectura_actual_'] =  $this->des_lectura_actual_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_'] =  $this->des_consumo_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_base_'] =  $this->des_consumo_base_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_consumo_excedente_'] =  $this->des_consumo_excedente_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_total_'] =  $this->des_total_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_revisar_'] =  $this->des_revisar_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_registra_danio_'] =  $this->des_registra_danio_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_contabilizado_'] =  $this->des_contabilizado_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_imagen_lectura_'] =  $this->des_imagen_lectura_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_imagen_lectura__limpa'] =  $this->des_imagen_lectura__limpa; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_escenario_'] =  $this->des_escenario_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_valor_base_'] =  $this->des_valor_base_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_valor_excedente_'] =  $this->des_valor_excedente_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_operacion_'] =  $this->des_operacion_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_estado_'] =  $this->des_estado_; 
             $this->form_vert_form_jap_registro_deuda_lectura[$sc_seq_vert]['des_ruta_'] =  $this->des_ruta_; 
              $sc_seq_vert++; 
          } 
          if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
              $this->nm_proc_onload(false);
          }
      }  
  }
// 
   function NM_gera_log_key($evt) 
   {
       $this->SC_log_arr = array();
       $this->SC_log_atv = true;
       if ($evt == "incluir")
       {
           $this->SC_log_evt = "insert";
       }
       if ($evt == "alterar")
       {
           $this->SC_log_evt = "update";
       }
       if ($evt == "excluir")
       {
           $this->SC_log_evt = "delete";
       }
       $this->SC_log_arr['keys']['des_id'] =  $this->des_id_;
   }
// 
   function NM_gera_log_old($sc_seq_vert) 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert] ))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dados_select'][$sc_seq_vert] ;
           $this->SC_log_arr['fields']['des_escenario']['0'] =  $nmgp_dados_select['des_escenario_'];
           $this->SC_log_arr['fields']['des_propietario']['0'] =  $nmgp_dados_select['des_propietario_'];
           $this->SC_log_arr['fields']['des_contrato']['0'] =  $nmgp_dados_select['des_contrato_'];
           $this->SC_log_arr['fields']['des_lectura_anterior']['0'] =  $nmgp_dados_select['des_lectura_anterior_'];
           $this->SC_log_arr['fields']['des_lectura_actual']['0'] =  $nmgp_dados_select['des_lectura_actual_'];
           $this->SC_log_arr['fields']['des_consumo_base']['0'] =  $nmgp_dados_select['des_consumo_base_'];
           $this->SC_log_arr['fields']['des_consumo_excedente']['0'] =  $nmgp_dados_select['des_consumo_excedente_'];
           $this->SC_log_arr['fields']['des_valor_base']['0'] =  $nmgp_dados_select['des_valor_base_'];
           $this->SC_log_arr['fields']['des_valor_excedente']['0'] =  $nmgp_dados_select['des_valor_excedente_'];
           $this->SC_log_arr['fields']['des_total']['0'] =  $nmgp_dados_select['des_total_'];
           $this->SC_log_arr['fields']['des_operacion']['0'] =  $nmgp_dados_select['des_operacion_'];
           $this->SC_log_arr['fields']['des_numero_medidor']['0'] =  $nmgp_dados_select['des_numero_medidor_'];
           $this->SC_log_arr['fields']['des_consumo']['0'] =  $nmgp_dados_select['des_consumo_'];
           $this->SC_log_arr['fields']['des_orden']['0'] =  $nmgp_dados_select['des_orden_'];
           $this->SC_log_arr['fields']['des_estado']['0'] =  $nmgp_dados_select['des_estado_'];
           $this->SC_log_arr['fields']['des_ruta']['0'] =  $nmgp_dados_select['des_ruta_'];
           $this->SC_log_arr['fields']['des_revisar']['0'] =  $nmgp_dados_select['des_revisar_'];
           $this->SC_log_arr['fields']['des_registra_danio']['0'] =  $nmgp_dados_select['des_registra_danio_'];
           $this->SC_log_arr['fields']['des_contabilizado']['0'] =  $nmgp_dados_select['des_contabilizado_'];
           $this->SC_log_arr['fields']['des_imagen_lectura']['0'] =  $nmgp_dados_select['des_imagen_lectura_'];
           $this->SC_log_arr['fields']['des_numero_censo']['0'] =  $nmgp_dados_select['des_numero_censo_'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['des_escenario']['1'] =  $this->des_escenario_;
       $this->SC_log_arr['fields']['des_propietario']['1'] =  $this->des_propietario_;
       $this->SC_log_arr['fields']['des_contrato']['1'] =  $this->des_contrato_;
       $this->SC_log_arr['fields']['des_lectura_anterior']['1'] =  $this->des_lectura_anterior_;
       $this->SC_log_arr['fields']['des_lectura_actual']['1'] =  $this->des_lectura_actual_;
       $this->SC_log_arr['fields']['des_consumo_base']['1'] =  $this->des_consumo_base_;
       $this->SC_log_arr['fields']['des_consumo_excedente']['1'] =  $this->des_consumo_excedente_;
       $this->SC_log_arr['fields']['des_valor_base']['1'] =  $this->des_valor_base_;
       $this->SC_log_arr['fields']['des_valor_excedente']['1'] =  $this->des_valor_excedente_;
       $this->SC_log_arr['fields']['des_total']['1'] =  $this->des_total_;
       $this->SC_log_arr['fields']['des_operacion']['1'] =  $this->des_operacion_;
       $this->SC_log_arr['fields']['des_numero_medidor']['1'] =  $this->des_numero_medidor_;
       $this->SC_log_arr['fields']['des_consumo']['1'] =  $this->des_consumo_;
       $this->SC_log_arr['fields']['des_orden']['1'] =  $this->des_orden_;
       $this->SC_log_arr['fields']['des_estado']['1'] =  $this->des_estado_;
       $this->SC_log_arr['fields']['des_ruta']['1'] =  $this->des_ruta_;
       $this->SC_log_arr['fields']['des_revisar']['1'] =  $this->des_revisar_;
       $this->SC_log_arr['fields']['des_registra_danio']['1'] =  $this->des_registra_danio_;
       $this->SC_log_arr['fields']['des_contabilizado']['1'] =  $this->des_contabilizado_;
       $this->SC_log_arr['fields']['des_imagen_lectura']['1'] =  $this->des_imagen_lectura_;
       $this->SC_log_arr['fields']['des_numero_censo']['1'] =  $this->des_numero_censo_;
   }
// 
   function NM_gera_log_compress() 
   {
       foreach ($this->SC_log_arr['fields'] as $fild => $data_f)
       {
           if ($data_f[0] == $data_f[1] || ($data_f[0] == "" && $data_f[1] == "null"))
           {
               unset($this->SC_log_arr['fields'][$fild]);
           }
       }
   }
// 
   function NM_gera_log_output() 
   {
       $Log_output = "";
       $prim_delim = "";
       $Log_labels = array();
       $Log_labels['des_escenario'] =  "Des Escenario";
       $Log_labels['des_propietario'] =  "{lang_propietario}";
       $Log_labels['des_contrato'] =  "{lang_contrato}";
       $Log_labels['des_lectura_anterior'] =  "{lang_lectura_anterior}";
       $Log_labels['des_lectura_actual'] =  "{lang_lectura_actual}";
       $Log_labels['des_consumo_base'] =  "{lang_consumo_base}";
       $Log_labels['des_consumo_excedente'] =  "{lang_consumo_excedente}";
       $Log_labels['des_valor_base'] =  "Des Valor Base";
       $Log_labels['des_valor_excedente'] =  "Des Valor Excedente";
       $Log_labels['des_total'] =  "{lang_total}";
       $Log_labels['des_operacion'] =  "Des Operacion";
       $Log_labels['des_numero_medidor'] =  "{lang_numero_medidor}";
       $Log_labels['des_consumo'] =  "{lang_consumo}";
       $Log_labels['des_orden'] =  "Orden";
       $Log_labels['des_estado'] =  "Des Estado";
       $Log_labels['des_ruta'] =  "Des Ruta";
       $Log_labels['des_revisar'] =  "{lang_revisar}";
       $Log_labels['des_registra_danio'] =  "{lang_registra_danio}";
       $Log_labels['des_contabilizado'] =  "Des Contabilizado";
       $Log_labels['des_imagen_lectura'] =  "{lang_btns_img}";
       $Log_labels['des_numero_censo'] =  "{lang_numero_censo}";
       foreach ($this->SC_log_arr as $type => $dats)
       {
           if ($type == "keys")
           {
               $Log_output .= "--> keys <-- ";
               foreach ($dats as $key => $data)
               {
                   $Log_output .=  $prim_delim . $key . " : " . $data;
                   $prim_delim  = "||";
               }
           }
           if ($type == "fields")
           {
               $Log_output .= $prim_delim . "--> fields <-- ";
               $prim_delim = "";
               if (empty($dats) && $this->SC_log_evt == "update")
               {
                   return;
               }
               foreach ($dats as $key => $data)
               {
                   foreach ($data as $tp => $val)
                   {
                      $tpok = ($tp == 0) ? " (old) " : " (new) ";
                      $Log_output .= $prim_delim . $key . $tpok . " : " . $val;
                      $prim_delim  = "||";
                   }
                   $Log_output .= $prim_delim . $key . " (label) " . " : " . $Log_labels[$key];
               }
           }
       }
       $this->NM_gera_log_insert("Scriptcase", $this->SC_log_evt, $Log_output);
   }
   function NM_gera_nav_page() 
   {
       $this->SC_nav_page = "";
       $Arr_result        = array();
       $Ind_result        = 0;
       $Reg_Page   = $this->sc_max_reg;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['reg_start'] + $this->sc_max_reg;
       $rec_fim    = ($rec_fim > $rec_tot) ? $rec_tot : $rec_fim;
       if ($rec_tot == 0)
       {
           return;
       }
       $Qtd_Pages  = ceil($rec_tot / $Reg_Page);
       $Page_Atu   = ceil($rec_fim / $Reg_Page);
       $Link_ini   = 1;
       if ($Page_Atu > $Max_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       elseif ($Page_Atu > $Mid_link)
       {
           $Link_ini = $Page_Atu - $Mid_link + $Corr_link;
       }
       if (($Qtd_Pages - $Link_ini) < $Max_link)
       {
           $Link_ini = ($Qtd_Pages - $Max_link) + 1;
       }
       if ($Link_ini < 1)
       {
           $Link_ini = 1;
       }
       for ($x = 0; $x < $Max_link && $Link_ini <= $Qtd_Pages; $x++)
       {
           $rec = (($Link_ini - 1) * $Reg_Page) + 1;
           if ($Link_ini == $Page_Atu)
           {
               $Arr_result[$Ind_result] = '<span class="scFormToolbarNavOpen" style="vertical-align: middle;">' . $Link_ini . '</span>';
           }
           else
           {
               $Arr_result[$Ind_result] = '<a class="scFormToolbarNav" style="vertical-align: middle;" href="javascript: nm_navpage(' . $rec . ')">' . $Link_ini . '</a>';
           }
           $Link_ini++;
           $Ind_result++;
           if (!isset($this->Ini->Str_toolbarnav_separator))
           {
               $this->Ini->Str_toolbarnav_separator = "";
           }
           if (($x + 1) < $Max_link && $Link_ini <= $Qtd_Pages && '' != $this->Ini->Str_toolbarnav_separator && @is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator))
           {
               $Arr_result[$Ind_result] = '<img src="' . $this->Ini->path_img_global . $this->Ini->Str_toolbarnav_separator . '" align="absmiddle" style="vertical-align: middle;">';
               $Ind_result++;
           }
       }
       if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
       {
           krsort($Arr_result);
       }
       foreach ($Arr_result as $Ind_result => $Lin_result)
       {
           $this->SC_nav_page .= $Lin_result;
       }
   }
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function calcula_lectura()
{
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$check_sql = "SELECT sp_busca_parametro_ap('".$this->sc_temp_Igtech_RucEmpresa."','ALERTCM', '100')";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 

if (isset($this->rs[0][0])){
    $w_base_alerta = $this->rs[0][0];
}

$check_sql = "SELECT sp_busca_parametro_ap('".$this->sc_temp_Igtech_RucEmpresa."','MBASEAP', '10')";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 

if (isset($this->rs[0][0])){
    $w_base_consumo = $this->rs[0][0];
}
$select_sql="SELECT con_maxima_lectura FROM jap_contrato WHERE  con_id=".$this->des_contrato_ ;
 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 

if (isset($this->rs[0][0])){
    $w_lectura_maxima = $this->rs[0][0];
}

if($this->des_lectura_actual_ <$this->des_lectura_anterior_ ){
	$this->des_consumo_ =($w_lectura_maxima - $this->des_lectura_anterior_  + 1) + $this->des_lectura_actual_ ;
	$this->des_revisar_ ='SI';
}else{
	$this->des_consumo_ =$this->des_lectura_actual_ -$this->des_lectura_anterior_ ;
	$this->des_revisar_ ='NO';
}

if($this->des_consumo_ <=$w_base_consumo){
	$this->des_consumo_base_ =$this->des_consumo_ ;
	$this->des_consumo_excedente_ =0;
}else{
	$this->des_consumo_base_ =$w_base_consumo;
	$this->des_consumo_excedente_ =$this->des_consumo_ -$w_base_consumo;
}

if($this->des_consumo_ >=$w_base_alerta){
	$this->des_revisar_ ='SI';
}else{
	$this->des_revisar_ ='NO';
}

$update_sql = "UPDATE jap_deudas_escenario 
				SET
				  des_lectura_actual=".$this->des_lectura_actual_ .",	
				  des_consumo=".$this->des_consumo_ .",
				  des_consumo_base=".$this->des_consumo_base_ .",
				  des_consumo_excedente=".$this->des_consumo_excedente_ .",
				  des_revisar='".$this->des_revisar_ ."'
				WHERE
				  des_id=".$this->des_id_ ;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_jap_registro_deuda_lectura_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
}
function des_lectura_actual__onBlur()
{
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
  
$original_des_lectura_actual_ = $this->des_lectura_actual_;
$original_des_revisar_ = $this->des_revisar_;
$original_des_contrato_ = $this->des_contrato_;
$original_des_lectura_anterior_ = $this->des_lectura_anterior_;
$original_des_consumo_ = $this->des_consumo_;
$original_des_consumo_base_ = $this->des_consumo_base_;
$original_des_consumo_excedente_ = $this->des_consumo_excedente_;
$original_des_id_ = $this->des_id_;

if ($this->des_lectura_actual_ <>''){
	$this->calcula_lectura();
}else{
	$this->des_lectura_actual_ =0;
	$this->calcula_lectura();
}


if($this->des_revisar_ =='SI'){
	$this->nm_mens_alert[] = "Consumo Actual mayor al consumo normal"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Consumo Actual mayor al consumo normal"); }}

$modificado_des_lectura_actual_ = $this->des_lectura_actual_;
$modificado_des_revisar_ = $this->des_revisar_;
$modificado_des_contrato_ = $this->des_contrato_;
$modificado_des_lectura_anterior_ = $this->des_lectura_anterior_;
$modificado_des_consumo_ = $this->des_consumo_;
$modificado_des_consumo_base_ = $this->des_consumo_base_;
$modificado_des_consumo_excedente_ = $this->des_consumo_excedente_;
$modificado_des_id_ = $this->des_id_;
$this->nm_formatar_campos('des_lectura_actual_', 'des_revisar_', 'des_contrato_', 'des_lectura_anterior_', 'des_consumo_', 'des_consumo_base_', 'des_consumo_excedente_', 'des_id_');
$this->nmgp_refresh_fields = array();
if ($original_des_lectura_actual_ !== $modificado_des_lectura_actual_ || isset($this->nmgp_cmp_readonly['des_lectura_actual_']) || (isset($bFlagRead_des_lectura_actual_) && $bFlagRead_des_lectura_actual_))
{
    $this->nmgp_refresh_fields[] = 'des_lectura_actual_';
    $this->NM_ajax_changed['des_lectura_actual_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_revisar_ !== $modificado_des_revisar_ || isset($this->nmgp_cmp_readonly['des_revisar_']) || (isset($bFlagRead_des_revisar_) && $bFlagRead_des_revisar_))
{
    $this->nmgp_refresh_fields[] = 'des_revisar_';
    $this->NM_ajax_changed['des_revisar_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_contrato_ !== $modificado_des_contrato_ || isset($this->nmgp_cmp_readonly['des_contrato_']) || (isset($bFlagRead_des_contrato_) && $bFlagRead_des_contrato_))
{
    $this->nmgp_refresh_fields[] = 'des_contrato_';
    $this->NM_ajax_changed['des_contrato_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_lectura_anterior_ !== $modificado_des_lectura_anterior_ || isset($this->nmgp_cmp_readonly['des_lectura_anterior_']) || (isset($bFlagRead_des_lectura_anterior_) && $bFlagRead_des_lectura_anterior_))
{
    $this->nmgp_refresh_fields[] = 'des_lectura_anterior_';
    $this->NM_ajax_changed['des_lectura_anterior_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_ !== $modificado_des_consumo_ || isset($this->nmgp_cmp_readonly['des_consumo_']) || (isset($bFlagRead_des_consumo_) && $bFlagRead_des_consumo_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_';
    $this->NM_ajax_changed['des_consumo_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_base_ !== $modificado_des_consumo_base_ || isset($this->nmgp_cmp_readonly['des_consumo_base_']) || (isset($bFlagRead_des_consumo_base_) && $bFlagRead_des_consumo_base_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_base_';
    $this->NM_ajax_changed['des_consumo_base_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_excedente_ !== $modificado_des_consumo_excedente_ || isset($this->nmgp_cmp_readonly['des_consumo_excedente_']) || (isset($bFlagRead_des_consumo_excedente_) && $bFlagRead_des_consumo_excedente_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_excedente_';
    $this->NM_ajax_changed['des_consumo_excedente_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_id_ !== $modificado_des_id_ || isset($this->nmgp_cmp_readonly['des_id_']) || (isset($bFlagRead_des_id_) && $bFlagRead_des_id_))
{
    $this->nmgp_refresh_fields[] = 'des_id_';
    $this->NM_ajax_changed['des_id_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'des';
form_jap_registro_deuda_lectura_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
}
function des_lectura_actual__onChange()
{
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
  
$original_des_lectura_actual_ = $this->des_lectura_actual_;
$original_des_revisar_ = $this->des_revisar_;
$original_des_contrato_ = $this->des_contrato_;
$original_des_lectura_anterior_ = $this->des_lectura_anterior_;
$original_des_consumo_ = $this->des_consumo_;
$original_des_consumo_base_ = $this->des_consumo_base_;
$original_des_consumo_excedente_ = $this->des_consumo_excedente_;
$original_des_id_ = $this->des_id_;

if ($this->des_lectura_actual_ <>''){
	$this->calcula_lectura();
}else{
	$this->des_lectura_actual_ =0;
	$this->calcula_lectura();
}


if($this->des_revisar_ =='SI'){
	$this->nm_mens_alert[] = "Consumo Actual mayor al consumo normal"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Consumo Actual mayor al consumo normal"); }}

$modificado_des_lectura_actual_ = $this->des_lectura_actual_;
$modificado_des_revisar_ = $this->des_revisar_;
$modificado_des_contrato_ = $this->des_contrato_;
$modificado_des_lectura_anterior_ = $this->des_lectura_anterior_;
$modificado_des_consumo_ = $this->des_consumo_;
$modificado_des_consumo_base_ = $this->des_consumo_base_;
$modificado_des_consumo_excedente_ = $this->des_consumo_excedente_;
$modificado_des_id_ = $this->des_id_;
$this->nm_formatar_campos('des_lectura_actual_', 'des_revisar_', 'des_contrato_', 'des_lectura_anterior_', 'des_consumo_', 'des_consumo_base_', 'des_consumo_excedente_', 'des_id_');
$this->nmgp_refresh_fields = array();
if ($original_des_lectura_actual_ !== $modificado_des_lectura_actual_ || isset($this->nmgp_cmp_readonly['des_lectura_actual_']) || (isset($bFlagRead_des_lectura_actual_) && $bFlagRead_des_lectura_actual_))
{
    $this->nmgp_refresh_fields[] = 'des_lectura_actual_';
    $this->NM_ajax_changed['des_lectura_actual_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_revisar_ !== $modificado_des_revisar_ || isset($this->nmgp_cmp_readonly['des_revisar_']) || (isset($bFlagRead_des_revisar_) && $bFlagRead_des_revisar_))
{
    $this->nmgp_refresh_fields[] = 'des_revisar_';
    $this->NM_ajax_changed['des_revisar_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_contrato_ !== $modificado_des_contrato_ || isset($this->nmgp_cmp_readonly['des_contrato_']) || (isset($bFlagRead_des_contrato_) && $bFlagRead_des_contrato_))
{
    $this->nmgp_refresh_fields[] = 'des_contrato_';
    $this->NM_ajax_changed['des_contrato_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_lectura_anterior_ !== $modificado_des_lectura_anterior_ || isset($this->nmgp_cmp_readonly['des_lectura_anterior_']) || (isset($bFlagRead_des_lectura_anterior_) && $bFlagRead_des_lectura_anterior_))
{
    $this->nmgp_refresh_fields[] = 'des_lectura_anterior_';
    $this->NM_ajax_changed['des_lectura_anterior_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_ !== $modificado_des_consumo_ || isset($this->nmgp_cmp_readonly['des_consumo_']) || (isset($bFlagRead_des_consumo_) && $bFlagRead_des_consumo_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_';
    $this->NM_ajax_changed['des_consumo_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_base_ !== $modificado_des_consumo_base_ || isset($this->nmgp_cmp_readonly['des_consumo_base_']) || (isset($bFlagRead_des_consumo_base_) && $bFlagRead_des_consumo_base_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_base_';
    $this->NM_ajax_changed['des_consumo_base_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_excedente_ !== $modificado_des_consumo_excedente_ || isset($this->nmgp_cmp_readonly['des_consumo_excedente_']) || (isset($bFlagRead_des_consumo_excedente_) && $bFlagRead_des_consumo_excedente_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_excedente_';
    $this->NM_ajax_changed['des_consumo_excedente_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_id_ !== $modificado_des_id_ || isset($this->nmgp_cmp_readonly['des_id_']) || (isset($bFlagRead_des_id_) && $bFlagRead_des_id_))
{
    $this->nmgp_refresh_fields[] = 'des_id_';
    $this->NM_ajax_changed['des_id_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'des';
form_jap_registro_deuda_lectura_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
}
function des_lectura_anterior__onChange()
{
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  
$original_des_lectura_anterior_ = $this->des_lectura_anterior_;
$original_des_id_ = $this->des_id_;
$original_des_lectura_actual_ = $this->des_lectura_actual_;
$original_des_revisar_ = $this->des_revisar_;
$original_des_consumo_ = $this->des_consumo_;
$original_des_contrato_ = $this->des_contrato_;
$original_des_consumo_base_ = $this->des_consumo_base_;
$original_des_consumo_excedente_ = $this->des_consumo_excedente_;

$update_sql = "UPDATE jap_deudas_escenario 
				SET
				  des_lectura_anterior=".$this->des_lectura_anterior_ ."
				WHERE
				  des_id=".$this->des_id_ ;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_jap_registro_deuda_lectura_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$this->calcula_lectura();

$check_sql = "SELECT sp_busca_parametro_ap('".$this->sc_temp_Igtech_RucEmpresa."','ALERTCM', '100')";
 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs = false;
          $this->rs_erro = $this->Db->ErrorMsg();
      } 

if (isset($this->rs[0][0])){
    $w_base_alerta = $this->rs[0][0];
}

if($this->des_lectura_actual_ <$this->des_lectura_anterior_ ){
	$this->nm_mens_alert[] = "Consumo Actual menor al anterior"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Consumo Actual menor al anterior"); }$this->des_revisar_ ='SI';
}else{
	$this->des_revisar_ ='NO';
}

if($this->des_consumo_ >=$w_base_alerta){
	$this->nm_mens_alert[] = "Consumo Actual mayor al consumo normal"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("Consumo Actual mayor al consumo normal"); }$this->des_revisar_ ='SI';
}else{
	$this->des_revisar_ ='NO';
}
$update_sql = "UPDATE jap_deudas_escenario 
				SET
				  des_revisar='".$this->des_revisar_ ."'
				WHERE
				  des_id=".$this->des_id_ ;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_jap_registro_deuda_lectura_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      


if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
$modificado_des_lectura_anterior_ = $this->des_lectura_anterior_;
$modificado_des_id_ = $this->des_id_;
$modificado_des_lectura_actual_ = $this->des_lectura_actual_;
$modificado_des_revisar_ = $this->des_revisar_;
$modificado_des_consumo_ = $this->des_consumo_;
$modificado_des_contrato_ = $this->des_contrato_;
$modificado_des_consumo_base_ = $this->des_consumo_base_;
$modificado_des_consumo_excedente_ = $this->des_consumo_excedente_;
$this->nm_formatar_campos('des_lectura_anterior_', 'des_id_', 'des_lectura_actual_', 'des_revisar_', 'des_consumo_', 'des_contrato_', 'des_consumo_base_', 'des_consumo_excedente_');
$this->nmgp_refresh_fields = array();
if ($original_des_lectura_anterior_ !== $modificado_des_lectura_anterior_ || isset($this->nmgp_cmp_readonly['des_lectura_anterior_']) || (isset($bFlagRead_des_lectura_anterior_) && $bFlagRead_des_lectura_anterior_))
{
    $this->nmgp_refresh_fields[] = 'des_lectura_anterior_';
    $this->NM_ajax_changed['des_lectura_anterior_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_id_ !== $modificado_des_id_ || isset($this->nmgp_cmp_readonly['des_id_']) || (isset($bFlagRead_des_id_) && $bFlagRead_des_id_))
{
    $this->nmgp_refresh_fields[] = 'des_id_';
    $this->NM_ajax_changed['des_id_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_lectura_actual_ !== $modificado_des_lectura_actual_ || isset($this->nmgp_cmp_readonly['des_lectura_actual_']) || (isset($bFlagRead_des_lectura_actual_) && $bFlagRead_des_lectura_actual_))
{
    $this->nmgp_refresh_fields[] = 'des_lectura_actual_';
    $this->NM_ajax_changed['des_lectura_actual_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_revisar_ !== $modificado_des_revisar_ || isset($this->nmgp_cmp_readonly['des_revisar_']) || (isset($bFlagRead_des_revisar_) && $bFlagRead_des_revisar_))
{
    $this->nmgp_refresh_fields[] = 'des_revisar_';
    $this->NM_ajax_changed['des_revisar_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_ !== $modificado_des_consumo_ || isset($this->nmgp_cmp_readonly['des_consumo_']) || (isset($bFlagRead_des_consumo_) && $bFlagRead_des_consumo_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_';
    $this->NM_ajax_changed['des_consumo_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_contrato_ !== $modificado_des_contrato_ || isset($this->nmgp_cmp_readonly['des_contrato_']) || (isset($bFlagRead_des_contrato_) && $bFlagRead_des_contrato_))
{
    $this->nmgp_refresh_fields[] = 'des_contrato_';
    $this->NM_ajax_changed['des_contrato_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_base_ !== $modificado_des_consumo_base_ || isset($this->nmgp_cmp_readonly['des_consumo_base_']) || (isset($bFlagRead_des_consumo_base_) && $bFlagRead_des_consumo_base_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_base_';
    $this->NM_ajax_changed['des_consumo_base_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_consumo_excedente_ !== $modificado_des_consumo_excedente_ || isset($this->nmgp_cmp_readonly['des_consumo_excedente_']) || (isset($bFlagRead_des_consumo_excedente_) && $bFlagRead_des_consumo_excedente_))
{
    $this->nmgp_refresh_fields[] = 'des_consumo_excedente_';
    $this->NM_ajax_changed['des_consumo_excedente_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'des';
form_jap_registro_deuda_lectura_pack_ajax_response();
exit;
}
function des_registra_danio__onClick()
{
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
  
$original_des_registra_danio_ = $this->des_registra_danio_;
$original_des_id_ = $this->des_id_;
$original_des_contrato_ = $this->des_contrato_;

if($this->des_registra_danio_ =="SI"){
	$var_registra_danio="SI";
}else{
	$var_registra_danio="NO";
}

$update_sql = "UPDATE jap_deudas_escenario 
			   SET des_registra_danio='".$var_registra_danio."'
			   WHERE des_id=".$this->des_id_ ;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_jap_registro_deuda_lectura_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$update_sql = "UPDATE jap_ruta_contrato 
			   SET rc_registra_danio='".$var_registra_danio."'  
			   WHERE rc_contrato=".$this->des_contrato_ ;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_jap_registro_deuda_lectura_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      


$modificado_des_registra_danio_ = $this->des_registra_danio_;
$modificado_des_id_ = $this->des_id_;
$modificado_des_contrato_ = $this->des_contrato_;
$this->nm_formatar_campos('des_registra_danio_', 'des_id_', 'des_contrato_');
$this->nmgp_refresh_fields = array();
if ($original_des_registra_danio_ !== $modificado_des_registra_danio_ || isset($this->nmgp_cmp_readonly['des_registra_danio_']) || (isset($bFlagRead_des_registra_danio_) && $bFlagRead_des_registra_danio_))
{
    $this->nmgp_refresh_fields[] = 'des_registra_danio_';
    $this->NM_ajax_changed['des_registra_danio_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_id_ !== $modificado_des_id_ || isset($this->nmgp_cmp_readonly['des_id_']) || (isset($bFlagRead_des_id_) && $bFlagRead_des_id_))
{
    $this->nmgp_refresh_fields[] = 'des_id_';
    $this->NM_ajax_changed['des_id_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_contrato_ !== $modificado_des_contrato_ || isset($this->nmgp_cmp_readonly['des_contrato_']) || (isset($bFlagRead_des_contrato_) && $bFlagRead_des_contrato_))
{
    $this->nmgp_refresh_fields[] = 'des_contrato_';
    $this->NM_ajax_changed['des_contrato_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'des';
form_jap_registro_deuda_lectura_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
}
function des_revisar__onClick()
{
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'on';
  
$original_des_revisar_ = $this->des_revisar_;
$original_des_id_ = $this->des_id_;

if($this->des_revisar_ =="SI"){
	$var_revisar="SI";
}else{
	$var_revisar="NO";
}

$update_sql = "UPDATE jap_deudas_escenario 
				SET
				  des_revisar='".$var_revisar."'
				WHERE
				  des_id=".$this->des_id_ ;

     $nm_select = $update_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_jap_registro_deuda_lectura_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      


$modificado_des_revisar_ = $this->des_revisar_;
$modificado_des_id_ = $this->des_id_;
$this->nm_formatar_campos('des_revisar_', 'des_id_');
$this->nmgp_refresh_fields = array();
if ($original_des_revisar_ !== $modificado_des_revisar_ || isset($this->nmgp_cmp_readonly['des_revisar_']) || (isset($bFlagRead_des_revisar_) && $bFlagRead_des_revisar_))
{
    $this->nmgp_refresh_fields[] = 'des_revisar_';
    $this->NM_ajax_changed['des_revisar_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($original_des_id_ !== $modificado_des_id_ || isset($this->nmgp_cmp_readonly['des_id_']) || (isset($bFlagRead_des_id_) && $bFlagRead_des_id_))
{
    $this->nmgp_refresh_fields[] = 'des_id_';
    $this->NM_ajax_changed['des_id_'] = true;
    $this->NM_ajax_force_values = true;
}
if ($this->NM_ajax_force_values)
{
    $this->ajax_return_values();
}
$this->NM_ajax_info['event_field'] = 'des';
form_jap_registro_deuda_lectura_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_jap_registro_deuda_lectura']['contr_erro'] = 'off';
}
//
 function nm_gera_html()
 {
    global
           $nm_url_saida, $nmgp_url_saida, $nm_saida_global, $nm_apl_dependente, $glo_subst, $sc_check_excl, $sc_check_incl, $nmgp_num_form, $NM_run_iframe;
     if ($this->Embutida_proc)
     {
         return;
     }
     if ($this->nmgp_form_show == 'off')
     {
         exit;
     }
      if (isset($NM_run_iframe) && $NM_run_iframe == 1)
      {
          $this->nmgp_botoes['exit'] = "off";
      }
     $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opc_ant'] = $this->nmgp_opcao;
     }
     else
     {
         $this->nmgp_opcao = $this->nmgp_opc_ant;
     }
     if (!empty($this->Campos_Mens_erro)) 
     {
         $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
         $this->Campos_Mens_erro = "";
     }
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_jap_registro_deuda_lectura_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
   if ($this->NM_ajax_flag && 'add_new_line' == $this->NM_ajax_opcao)
   {
        $this->Form_Corpo(true);
   }
   elseif ($this->NM_ajax_flag && 'table_refresh' == $this->NM_ajax_opcao)
   {
        $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['table_refresh'] = true;
        $this->Form_Table(true);
        $this->Form_Corpo(false, true);
   }
   else
   {
        $this->Form_Init();
        $this->Form_Table();
        $this->Form_Corpo();
        $this->Form_Fim();
   }
        $this->hideFormPages();
 }

        function initFormPages() {
        } // initFormPages

        function hideFormPages() {
        } // hideFormPages

    function form_format_readonly($field, $value)
    {
        $result = $value;

        $this->form_highlight_search($result, $field, $value);

        return $result;
    }

    function form_highlight_search(&$result, $field, $value)
    {
        if ($this->proc_fast_search) {
            $this->form_highlight_search_quicksearch($result, $field, $value);
        }
    }

    function form_highlight_search_quicksearch(&$result, $field, $value)
    {
        $searchOk = false;
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("des_propietario_", "des_contrato_", "des_numero_medidor_"))) {
            $searchOk = true;
        }
        elseif ($field == $this->nmgp_fast_search && in_array($field, array(""))) {
            $searchOk = true;
        }

        if (!$searchOk || '' == $this->nmgp_arg_fast_search) {
            return;
        }

        $htmlIni = '<div class="highlight" style="background-color: #fafaca; display: inline-block">';
        $htmlFim = '</div>';

        if ('qp' == $this->nmgp_cond_fast_search) {
            $keywords = preg_quote($this->nmgp_arg_fast_search, '/');
            $result = preg_replace('/'. $keywords .'/i', $htmlIni . '$0' . $htmlFim, $result);
        } elseif ('eq' == $this->nmgp_cond_fast_search) {
            if (strcasecmp($this->nmgp_arg_fast_search, $value) == 0) {
                $result = $htmlIni. $result .$htmlFim;
            }
        }
    }


    function form_encode_input($string)
    {
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['csrf_token'];
    }

    function scCsrfGenerateToken()
    {
        $aSources = array(
            'abcdefghijklmnopqrstuvwxyz',
            'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            '1234567890',
            '!@$*()-_[]{},.;:'
        );

        $sRandom = '';

        $aSourcesSizes = array();
        $iSourceSize   = sizeof($aSources) - 1;
        for ($i = 0; $i <= $iSourceSize; $i++)
        {
            $aSourcesSizes[$i] = strlen($aSources[$i]) - 1;
        }

        for ($i = 0; $i < 64; $i++)
        {
            $iSource = $this->scCsrfRandom(0, $iSourceSize);
            $sRandom .= substr($aSources[$iSource], $this->scCsrfRandom(0, $aSourcesSizes[$iSource]), 1);
        }

        return $sRandom;
    }

    function scCsrfRandom($iMin, $iMax)
    {
        return mt_rand($iMin, $iMax);
    }

        function addUrlParam($url, $param, $value) {
                $urlParts  = explode('?', $url);
                $urlParams = isset($urlParts[1]) ? explode('&', $urlParts[1]) : array();
                $objParams = array();
                foreach ($urlParams as $paramInfo) {
                        $paramParts = explode('=', $paramInfo);
                        $objParams[ $paramParts[0] ] = isset($paramParts[1]) ? $paramParts[1] : '';
                }
                $objParams[$param] = $value;
                $urlParams = array();
                foreach ($objParams as $paramName => $paramValue) {
                        $urlParams[] = $paramName . '=' . $paramValue;
                }
                return $urlParts[0] . '?' . implode('&', $urlParams);
        }
 function allowedCharsCharset($charlist)
 {
     if ($_SESSION['scriptcase']['charset'] != 'UTF-8')
     {
         $charlist = NM_conv_charset($charlist, $_SESSION['scriptcase']['charset'], 'UTF-8');
     }
     return str_replace("'", "\'", $charlist);
 }

function sc_file_size($file, $format = false)
{
    if ('' == $file) {
        return '';
    }
    if (!@is_file($file)) {
        return '';
    }
    $fileSize = @filesize($file);
    if ($format) {
        $suffix = '';
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' KB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' MB';
        }
        if (1024 >= $fileSize) {
            $fileSize /= 1024;
            $suffix    = ' GB';
        }
        $fileSize = $fileSize . $suffix;
    }
    return $fileSize;
}


 function new_date_format($type, $field)
 {
     $new_date_format_out = '';

     if ('DT' == $type)
     {
         $date_format  = $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = $this->field_config[$field]['date_display'];
         $time_format  = '';
         $time_sep     = '';
         $time_display = '';
     }
     elseif ('DH' == $type)
     {
         $date_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , 0, strpos($this->field_config[$field]['date_format'] , ';')) : $this->field_config[$field]['date_format'];
         $date_sep     = $this->field_config[$field]['date_sep'];
         $date_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], 0, strpos($this->field_config[$field]['date_display'], ';')) : $this->field_config[$field]['date_display'];
         $time_format  = false !== strpos($this->field_config[$field]['date_format'] , ';') ? substr($this->field_config[$field]['date_format'] , strpos($this->field_config[$field]['date_format'] , ';') + 1) : '';
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = false !== strpos($this->field_config[$field]['date_display'], ';') ? substr($this->field_config[$field]['date_display'], strpos($this->field_config[$field]['date_display'], ';') + 1) : '';
     }
     elseif ('HH' == $type)
     {
         $date_format  = '';
         $date_sep     = '';
         $date_display = '';
         $time_format  = $this->field_config[$field]['date_format'];
         $time_sep     = $this->field_config[$field]['time_sep'];
         $time_display = $this->field_config[$field]['date_display'];
     }

     if ('DT' == $type || 'DH' == $type)
     {
         $date_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_format); $i++)
         {
             $char = strtolower(substr($date_format, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $date_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $date_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $disp_array = array();
         $date_index = 0;
         $date_ult   = '';
         for ($i = 0; $i < strlen($date_display); $i++)
         {
             $char = strtolower(substr($date_display, $i, 1));
             if (in_array($char, array('d', 'm', 'y', 'a')))
             {
                 if ('a' == $char)
                 {
                     $char = 'y';
                 }
                 if ($char == $date_ult)
                 {
                     $disp_array[$date_index] .= $char;
                 }
                 else
                 {
                     if ('' != $date_ult)
                     {
                         $date_index++;
                     }
                     $disp_array[$date_index] = $char;
                 }
             }
             $date_ult = $char;
         }

         $date_final = array();
         foreach ($date_array as $date_part)
         {
             if (in_array($date_part, $disp_array))
             {
                 $date_final[] = $date_part;
             }
         }

         $date_format = implode($date_sep, $date_final);
     }
     if ('HH' == $type || 'DH' == $type)
     {
         $time_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_format); $i++)
         {
             $char = strtolower(substr($time_format, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $time_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $time_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $disp_array = array();
         $time_index = 0;
         $time_ult   = '';
         for ($i = 0; $i < strlen($time_display); $i++)
         {
             $char = strtolower(substr($time_display, $i, 1));
             if (in_array($char, array('h', 'i', 's')))
             {
                 if ($char == $time_ult)
                 {
                     $disp_array[$time_index] .= $char;
                 }
                 else
                 {
                     if ('' != $time_ult)
                     {
                         $time_index++;
                     }
                     $disp_array[$time_index] = $char;
                 }
             }
             $time_ult = $char;
         }

         $time_final = array();
         foreach ($time_array as $time_part)
         {
             if (in_array($time_part, $disp_array))
             {
                 $time_final[] = $time_part;
             }
         }

         $time_format = implode($time_sep, $time_final);
     }

     if ('DT' == $type)
     {
         $old_date_format = $date_format;
     }
     elseif ('DH' == $type)
     {
         $old_date_format = $date_format . ';' . $time_format;
     }
     elseif ('HH' == $type)
     {
         $old_date_format = $time_format;
     }

     for ($i = 0; $i < strlen($old_date_format); $i++)
     {
         $char = substr($old_date_format, $i, 1);
         if ('/' == $char)
         {
             $new_date_format_out .= $date_sep;
         }
         elseif (':' == $char)
         {
             $new_date_format_out .= $time_sep;
         }
         else
         {
             $new_date_format_out .= $char;
         }
     }

     $this->field_config[$field]['date_format'] = $new_date_format_out;
     if ('DH' == $type)
     {
         $new_date_format_out                                  = explode(';', $new_date_format_out);
         $this->field_config[$field]['date_format_js']        = $new_date_format_out[0];
         $this->field_config[$field . '_hora']['date_format'] = $new_date_format_out[1];
         $this->field_config[$field . '_hora']['time_sep']    = $this->field_config[$field]['time_sep'];
     }
 } // new_date_format

   function Form_lookup_des_propietario_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array(); 
}
if ($this->des_propietario_ != "")
{ 
   $this->nm_clear_val("des_propietario_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'] = array(); 
    }

   $old_value_des_id_ = $this->des_id_;
   $old_value_des_orden_ = $this->des_orden_;
   $old_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $old_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $old_value_des_consumo_ = $this->des_consumo_;
   $old_value_des_consumo_base_ = $this->des_consumo_base_;
   $old_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $old_value_des_total_ = $this->des_total_;
   $this->nm_tira_formatacao();


   $unformatted_value_des_id_ = $this->des_id_;
   $unformatted_value_des_orden_ = $this->des_orden_;
   $unformatted_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $unformatted_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $unformatted_value_des_consumo_ = $this->des_consumo_;
   $unformatted_value_des_consumo_base_ = $this->des_consumo_base_;
   $unformatted_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $unformatted_value_des_total_ = $this->des_total_;

   $nm_comando = "SELECT cl_id, cl_nombre  FROM del_cliente  WHERE cl_id = $this->des_propietario_  ORDER BY cl_nombre";

   $this->des_id_ = $old_value_des_id_;
   $this->des_orden_ = $old_value_des_orden_;
   $this->des_lectura_anterior_ = $old_value_des_lectura_anterior_;
   $this->des_lectura_actual_ = $old_value_des_lectura_actual_;
   $this->des_consumo_ = $old_value_des_consumo_;
   $this->des_consumo_base_ = $old_value_des_consumo_base_;
   $this->des_consumo_excedente_ = $old_value_des_consumo_excedente_;
   $this->des_total_ = $old_value_des_total_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_propietario_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_des_contrato_()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array(); 
}
if ($this->des_contrato_ != "")
{ 
   $this->nm_clear_val("des_contrato_");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'] = array(); 
    }

   $old_value_des_id_ = $this->des_id_;
   $old_value_des_orden_ = $this->des_orden_;
   $old_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $old_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $old_value_des_consumo_ = $this->des_consumo_;
   $old_value_des_consumo_base_ = $this->des_consumo_base_;
   $old_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $old_value_des_total_ = $this->des_total_;
   $this->nm_tira_formatacao();


   $unformatted_value_des_id_ = $this->des_id_;
   $unformatted_value_des_orden_ = $this->des_orden_;
   $unformatted_value_des_lectura_anterior_ = $this->des_lectura_anterior_;
   $unformatted_value_des_lectura_actual_ = $this->des_lectura_actual_;
   $unformatted_value_des_consumo_ = $this->des_consumo_;
   $unformatted_value_des_consumo_base_ = $this->des_consumo_base_;
   $unformatted_value_des_consumo_excedente_ = $this->des_consumo_excedente_;
   $unformatted_value_des_total_ = $this->des_total_;

   $nm_comando = "SELECT con_id, con_numero_contrato  FROM jap_contrato  WHERE con_id = $this->des_contrato_ ORDER BY con_numero_contrato";

   $this->des_id_ = $old_value_des_id_;
   $this->des_orden_ = $old_value_des_orden_;
   $this->des_lectura_anterior_ = $old_value_des_lectura_anterior_;
   $this->des_lectura_actual_ = $old_value_des_lectura_actual_;
   $this->des_consumo_ = $old_value_des_consumo_;
   $this->des_consumo_base_ = $old_value_des_consumo_base_;
   $this->des_consumo_excedente_ = $old_value_des_consumo_excedente_;
   $this->des_total_ = $old_value_des_total_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['Lookup_des_contrato_'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
} 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_des_revisar_()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?SI?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_des_registra_danio_()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?SI?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = true;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_jap_registro_deuda_lectura_pack_ajax_response();
              exit;
          }
          return;
      }
      $comando = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($data_search))
      {
          $data_search = NM_conv_charset($data_search, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
      $sv_data = $data_search;
      foreach ($fields as $field) {
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_des_propietario_($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "des_propietario", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_des_contrato_($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "des_contrato", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "des_numero_medidor", $arg_search, $data_search, "VARCHAR", false);
          }
      }
      if ($this->NM_case_insensitive)
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $comando = str_replace("#lowerI#", "UCase(", $comando);
          }
          else
          {
              $comando = str_replace("#lowerI#", "Upper(", $comando);
           }
          $comando = str_replace("#lowerF#", ")", $comando);
      }
      else
      {
          $comando = str_replace("#lowerI#", "", $comando);
          $comando = str_replace("#lowerF#", "", $comando);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter_form'] . " and ((des_escenario=" . $_SESSION['var_escenario'] . ")) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where (des_escenario=" . $_SESSION['var_escenario'] . ") and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_jap_registro_deuda_lectura = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] = $qt_geral_reg_form_jap_registro_deuda_lectura;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
   }
   function SC_monta_condicao(&$comando, $nome, $condicao, $campo, $tp_campo="", $tp_unaccent=false)
   {
      $nm_aspas   = "'";
      $nm_aspas1  = "'";
      $nm_numeric = array();
      $Nm_datas   = array();
      $nm_esp_postgres = array();
      $campo_join = strtolower(str_replace(".", "_", $nome));
      $nm_ini_lower = " #lowerI#";
      $nm_fim_lower = "#lowerF#";
      $Nm_accent = $this->Ini->Nm_accent_no;
      if ($tp_unaccent) {
          $Nm_accent = $this->Ini->Nm_accent_yes;
      }
      $nm_numeric[] = "des_id";$nm_numeric[] = "des_escenario";$nm_numeric[] = "des_propietario";$nm_numeric[] = "des_contrato";$nm_numeric[] = "des_lectura_anterior";$nm_numeric[] = "des_lectura_actual";$nm_numeric[] = "des_consumo_base";$nm_numeric[] = "des_consumo_excedente";$nm_numeric[] = "des_valor_base";$nm_numeric[] = "des_valor_excedente";$nm_numeric[] = "des_total";$nm_numeric[] = "des_operacion";$nm_numeric[] = "des_consumo";$nm_numeric[] = "des_orden";$nm_numeric[] = "des_ruta";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['decimal_db'] == ".")
         {
             $nm_aspas  = "";
             $nm_aspas1 = "";
         }
         if (is_array($campo))
         {
             foreach ($campo as $Ind => $Cmp)
             {
                if (!is_numeric($Cmp))
                {
                    return;
                }
                if ($Cmp == "")
                {
                    $campo[$Ind] = 0;
                }
             }
         }
         else
         {
             if (!is_numeric($campo))
             {
                 return;
             }
             if ($campo == "")
             {
                $campo = 0;
             }
         }
         $nm_ini_lower = "";
         $nm_fim_lower = "";
      }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_esp_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
         {
             $nome      = "CAST ($nome AS TEXT)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR)";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         if (in_array($campo_join, $nm_numeric) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP"))
         {
             $nome      = "CAST ($nome AS VARCHAR(255))";
             $nm_aspas  = "'";
             $nm_aspas1 = "'";
         }
         $comando .= (!empty($comando) ? " or " : "");
         if (is_array($campo))
         {
             $prep = "";
             foreach ($campo as $Ind => $Cmp)
             {
                 $prep .= (!empty($prep)) ? "," : "";
                 $Cmp   = substr($this->Db->qstr($Cmp), 1, -1);
                 $prep .= $nm_ini_lower . $nm_aspas . $Cmp . $nm_aspas1 . $nm_fim_lower;
             }
             $prep .= (empty($prep)) ? $nm_aspas . $nm_aspas1 : "";
             $comando .= $nm_ini_lower . $nome . $nm_fim_lower . " in (" . $prep . ")";
             return;
         }
         $campo  = substr($this->Db->qstr($campo), 1, -1);
         $cond_tst = strtoupper($condicao);
         if ($cond_tst == "II" || $cond_tst == "QP" || $cond_tst == "NP")
         {
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && $this->NM_case_insensitive)
             {
                 $op_like      = " ilike ";
                 $nm_ini_lower = "";
                 $nm_fim_lower = "";
             }
             else
             {
                 $op_like = " like ";
             }
         }
         switch ($cond_tst)
         {
            case "EQ":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "II":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "QP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "NP":     // 
               $comando        .= $nm_ini_lower . $Nm_accent['cmp_i'] . $nome . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . " not" . $op_like . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $campo . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
            break;
            case "DF":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "GE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LT":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
            case "LE":     // 
               $comando        .= $nm_ini_lower . $nome . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $campo . $nm_aspas1 . $nm_fim_lower;
            break;
         }
   }
   function SC_lookup_des_propietario_($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (isset($this->Ini->nm_bases_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT cl_nombre, cl_id, cl_id FROM del_cliente WHERE (CAST (cl_id AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT cl_nombre, cl_id, cl_id FROM del_cliente WHERE (#cmp_icl_nombre#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "LIKE '#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "NOT LIKE '%#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", ">= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "< '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
       {
           $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
       }
       $nm_comando = str_replace(array('#cmp_i','#cmp_f','#cmp_apos','#arg_i','#arg_f','#arg_apos'), array('','','','','',''), $nm_comando); 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           if ($this->NM_case_insensitive)
           {
               $campo  = sc_strtoupper($campo);
           }
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($this->NM_case_insensitive)
               {
                   $label  = sc_strtoupper($label);
               }
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function SC_lookup_des_contrato_($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (isset($this->Ini->nm_bases_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT con_numero_contrato, con_id, con_id FROM jap_contrato WHERE (CAST (con_id AS TEXT) LIKE '%$campo%')" ; 
       }
       else
       {
           $nm_comando = "SELECT con_numero_contrato, con_id, con_id FROM jap_contrato WHERE (#cmp_icon_numero_contrato#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos)" ; 
       }
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "LIKE '#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "NOT LIKE '%#arg_i" . $campo . "#arg_f%'", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "> '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", ">= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "< '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE '%#arg_i" . $campo . "#arg_f%'", "<= '#arg_i" . $campo . "#arg_f'", $nm_comando);
       }
       if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
       {
           $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
       }
       $nm_comando = str_replace(array('#cmp_i','#cmp_f','#cmp_apos','#arg_i','#arg_f','#arg_apos'), array('','','','','',''), $nm_comando); 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rx = $this->Db->Execute($nm_comando)) 
       { 
           $campo = $campo_orig;
           if ($this->NM_case_insensitive)
           {
               $campo  = sc_strtoupper($campo);
           }
           while (!$rx->EOF) 
           { 
               $chave = $rx->fields[1];
               $label = $rx->fields[0];
               if ($this->NM_case_insensitive)
               {
                   $label  = sc_strtoupper($label);
               }
               if ($condicao == "eq" && $campo == $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "ii" && $campo == substr($label, 0, strlen($campo)))
               {
                   $result[] = $chave;
               }
               if ($condicao == "qp" && strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "np" && !strstr($label, $campo))
               {
                   $result[] = $chave;
               }
               if ($condicao == "df" && $campo != $label)
               {
                   $result[] = $chave;
               }
               if ($condicao == "gt" && $label > $campo )
               {
                   $result[] = $chave;
               }
               if ($condicao == "ge" && $label >= $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "lt" && $label < $campo)
               {
                   $result[] = $chave;
               }
               if ($condicao == "le" && $label <= $campo)
               {
                   $result[] = $chave;
               }
               $rx->MoveNext() ;
           }  
           return $result;
       }  
       elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
       { 
           $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit; 
       } 
   }
   function html_dynamic_search()
   {
       $this->Dyn_search_seq = 0;
       $this->Dyn_search_str = "";
       $this->Dyn_search_dat = array();
       $this->NM_case_insensitive = true;
      $this->Dyn_search_str = "";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq']))
       {
           $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq'];
           $pos = strrpos($tmp, "##*@@");
           if ($pos !== false)
           {
               $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
               $tmp    = substr($tmp, 0, $pos);
               $this->Dyn_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
           }
       }
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
           if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_clear']))
           {
               return;
           }
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_propietario_'] = (isset($this->New_label['des_propietario_'])) ? $this->New_label['des_propietario_'] : "" . $this->Ini->Nm_lang['lang_propietario'] . "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_contrato_'] = (isset($this->New_label['des_contrato_'])) ? $this->New_label['des_contrato_'] : "" . $this->Ini->Nm_lang['lang_contrato'] . "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_medidor_'] = (isset($this->New_label['des_numero_medidor_'])) ? $this->New_label['des_numero_medidor_'] : "" . $this->Ini->Nm_lang['lang_numero_medidor'] . "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_censo_'] = (isset($this->New_label['des_numero_censo_'])) ? $this->New_label['des_numero_censo_'] : "" . $this->Ini->Nm_lang['lang_numero_censo'] . "";
       if ($this->NM_ajax_flag)
       { 
          ob_start();
       } 
       else 
       { 
?>
   <script type="text/javascript">
     var mens_select2_notfound  = '<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>';
     var mens_select2_searching = '<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>';
   </script>
   <tr id="NM_Dynamic_Search">
<?php
       } 
?>
   <td  valign="top"> 
   <div id='id_dyn_search_cmd_string' class="scAppDivMoldura" style="display:<?php echo (empty($this->Dyn_search_str)?'none':'') ?>"> 
     <span class="css_scAppDivHeaderText">
<?php
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_exp))
             {
?>
                             <a href="#" onclick="$('#id_dyn_search_cmd_string').hide();$('#div_dyn_search').show();SC_carga_evt_jquery('all');SC_select2_dyn();" style="text-decoration:none">
                                     <img id='id_app_div_tree_img_exp' src="<?php echo $this->Ini->path_img_global ?>/<?php echo $this->Ini->App_div_tree_img_exp ?>" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'>
                             </a>
<?php
             }
             echo $this->Ini->Nm_lang['lang_othr_dynamicsearch_title_outside'];
?>
     </span>
     <span id='id_dyn_search_cmd_str' class="scAppDivContentText"><?php echo trim($this->Dyn_search_str) ?></span>
   </div> 
   <div id="div_dyn_search" style="display: none" class="scAppDivMoldura"> 
     <input type="hidden" name="parm_dyn_search" value=""/> 
    <table style="padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top; width: 100%;" valign="top" cellspacing=0 cellpadding=0>
      <tr>
        <td class="css_scAppDivHeader scAppDivHeaderText">
<?php
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_col))
             {
?>
                             <a id="nm_close_dyn" href="#" onclick="$('#div_dyn_search').hide(); if($('#id_dyn_search_cmd_str').html() != ''){ $('#id_dyn_search_cmd_string').show(); }" style="text-decoration:none">
                                     <img id='id_app_div_tree_img_col' src="<?php echo $this->Ini->path_img_global ?>/<?php echo $this->Ini->App_div_tree_img_col ?>" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'>
                             </a>
<?php
             }
?>
            <?php echo $this->Ini->Nm_lang['lang_othr_dynamicsearch_title'] ?>
        </td>
      </tr>
      <tr>
        <td class="scAppDivContent scAppDivContentText">
            <table id="table_dyn_search" cellspacing=2 cellpadding=4>
<?php
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search']))
       {
           foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search'] as $IX => $def)
           {
               $cmp = $def['cmp'];
               if ($cmp == "des_propietario_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "des_propietario_";
                   $lin_obj = $this->dynamic_search_des_propietario_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "des_contrato_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "des_contrato_";
                   $lin_obj = $this->dynamic_search_des_contrato_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "des_numero_medidor_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "des_numero_medidor_";
                   $lin_obj = $this->dynamic_search_des_numero_medidor_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
               if ($cmp == "des_numero_censo_")
               {
                   $this->Dyn_search_seq++;;
                   $this->Dyn_search_dat[$this->Dyn_search_seq] = "des_numero_censo_";
                   $lin_obj = $this->dynamic_search_des_numero_censo_($this->Dyn_search_seq, 'N', $def['opc'], $def['val']);
                   echo $lin_obj;
               }
           }
       }
?>
                </table>
<?php
?>
            </td>
        </tr>
    <tr>
        <td nowrap  class="scAppDivToolbar">
       <?php echo nmButtonOutput($this->arr_buttons, "bapply_appdiv", "nm_show_dynamicsearch_fields(); return false;", "nm_show_dynamicsearch_fields(); return false;", "id_dyn_search_fields", "", "" . $this->Ini->Nm_lang['lang_othr_dynamicsearch_fields'] . "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
      <table id='id_dynamic_search_fields' class='SC_SubMenuApp' style='display:none; position: absolute; border-collapse: collapse; z-index: 1000;'> 
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('des_propietario_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_propietario_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('des_contrato_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_contrato_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('des_numero_medidor_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_medidor_'] ?>
                </div>
            </td>
        </tr>
        <tr>
            <td class='scBtnGrpBackground'>
                <div class='scBtnGrpText' style='cursor: pointer;' onclick="ajax_add_dyn_search('des_numero_censo_', 'form')"><?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_censo_'] ?>
                </div>
            </td>
        </tr>
      </table> 
      &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "blimpar_appdiv", "proc_btn_dyn('dyn_search_clear', 'nm_clear_dyn_search()')", "proc_btn_dyn('dyn_search_clear', 'nm_clear_dyn_search()')", "dyn_search_clear", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
       &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "bapply_appdiv", "setTimeout(function() {proc_btn_dyn('dyn_search', 'nm_proc_dyn_search(\\'id_Fdyn_search\\', \\'dyn_search\\')');}, 300);", "setTimeout(function() {proc_btn_dyn('dyn_search', 'nm_proc_dyn_search(\\'id_Fdyn_search\\', \\'dyn_search\\')');}, 300);", "dyn_search", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
      &nbsp;&nbsp;&nbsp;
       <?php echo nmButtonOutput($this->arr_buttons, "bcancelar_appdiv", "nm_cancel_dyn_search();", "nm_cancel_dyn_search();", "dyn_cancel", "", "", "", "absmiddle", "", "0", $this->Ini->path_botoes, "", "", "", "", "");?>
        </td>
    </tr>
    </table>
   </form>
   </div>
   </td>
<?php
       if ($this->NM_ajax_flag)
       { 
           $Temp = ob_get_clean();
           $this->NM_ajax_info['dyn_search']['NM_Dynamic_Search'] = NM_charset_to_utf8(trim($Temp));
           $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
           if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_clear']))
           { 
               unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_clear']);
           } 
           return;
       } 
?>
   </tr>
<?php
       $this->JS_dynamic_search();
   }
   function dynamic_search_des_propietario_($ind, $ajax, $opc="", $val=array())
   {
       $this->Cmps_select2['des_propietario_'][] = $ind;
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_des_propietario__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_propietario_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_des_propietario__cond_" . $ind . "' name='cond_dyn_search_des_propietario__" . $ind . "' class='scAppDivToolbarInput' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_des_propietario__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT cl_id, cl_nombre  FROM del_cliente  ORDER BY cl_nombre"; 
       if ($this->NM_case_insensitive)
       {
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "    <SELECT class='scAppDivToolbarInput' id=\"dyn_search_des_propietario__val_" . $ind . "\" name=\"val_dyn_search_des_propietario__" . $ind . "\"  size=1 onChange=\"buttonEnable_dyn('dyn_search');\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $des_propietario__sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $des_propietario__sel = " selected";
                        break;
                    }
                }
             }
             else
             {
                $des_propietario__sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . $this->form_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $des_propietario__sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none; cursor:pointer'>";
       $lin_obj .= "       <img id='dyn_search_des_propietario__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_des_propietario__" . $ind . "', " . $ind . ");buttonEnable_dyn('dyn_search');\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_des_contrato_($ind, $ajax, $opc="", $val=array())
   {
       $this->Cmps_select2['des_contrato_'][] = $ind;
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_des_contrato__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_contrato_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_des_contrato__cond_" . $ind . "' name='cond_dyn_search_des_contrato__" . $ind . "' class='scAppDivToolbarInput' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_des_contrato__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT con_id, con_numero_contrato  FROM jap_contrato  ORDER BY con_numero_contrato"; 
       if ($this->NM_case_insensitive)
       {
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "    <SELECT class='scAppDivToolbarInput' id=\"dyn_search_des_contrato__val_" . $ind . "\" name=\"val_dyn_search_des_contrato__" . $ind . "\"  size=1 onChange=\"buttonEnable_dyn('dyn_search');\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $des_contrato__sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $des_contrato__sel = " selected";
                        break;
                    }
                }
             }
             else
             {
                $des_contrato__sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . $this->form_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $des_contrato__sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none; cursor:pointer'>";
       $lin_obj .= "       <img id='dyn_search_des_contrato__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_des_contrato__" . $ind . "', " . $ind . ");buttonEnable_dyn('dyn_search');\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_des_numero_medidor_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_des_numero_medidor__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_medidor_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_des_numero_medidor__cond_" . $ind . "' name='cond_dyn_search_des_numero_medidor__" . $ind . "' class='scAppDivToolbarInput' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_des_numero_medidor__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $des_numero_medidor_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct des_numero_medidor from " . $this->Ini->nm_tabela . " where des_escenario=" . $_SESSION['var_escenario'] . " and #lowerI#des_numero_medidor#lowerF# = #lowerI#'$des_numero_medidor_'#lowerF#"; 
       if ($this->NM_case_insensitive)
       {
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$des_numero_medidor_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$des_numero_medidor_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input-dyn scAppDivToolbarInput' id='dyn_search_des_numero_medidor__val_" . $ind . "' name='val_dyn_search_des_numero_medidor__" . $ind . "' onChange=\"buttonEnable_dyn('dyn_search');\" value=\"" . $this->form_encode_input($val_cmp) . "\" size=10 alt=\"{datatype: 'text', maxLength: 10, allowedChars: '', lettersCase: '', autoTab: false, enterTab: false}\" style='display: none' >";
       $lin_obj .= "     <select class='sc-ui-autocomp-des_numero_medidor_ scAppDivToolbarInput' id='id_ac_des_numero_medidor_" . $ind . "' name='des_numero_medidor__autocomp" . $ind . "' onChange=\"buttonEnable_dyn('dyn_search');\">";
       if ('' !=  $des_numero_medidor_) {
           $lin_obj .= "     <option value='" . $des_numero_medidor_ . "'  selected>" . $sAutocompValue . "</option>";
       }
       $lin_obj .= "     </select>";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none; cursor:pointer'>";
       $lin_obj .= "       <img id='dyn_search_des_numero_medidor__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_des_numero_medidor__" . $ind . "', " . $ind . ");buttonEnable_dyn('dyn_search');\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function dynamic_search_des_numero_censo_($ind, $ajax, $opc="", $val=array())
   {
       $lin_obj  = "";
       $lin_obj .= "     <tr id='dyn_search_des_numero_censo__" . $ind . "'>";
       $lin_obj .= "      <td style='border-style: none' nowrap>" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_censo_'] . "</td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='dyn_search_des_numero_censo__cond_" . $ind . "' name='cond_dyn_search_des_numero_censo__" . $ind . "' class='scAppDivToolbarInput' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none' >";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"dyn_des_numero_censo__" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $des_numero_censo_ = $val_cmp;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct des_numero_censo from " . $this->Ini->nm_tabela . " where des_escenario=" . $_SESSION['var_escenario'] . " and #lowerI#des_numero_censo#lowerF# = #lowerI#'$des_numero_censo_'#lowerF#"; 
       if ($this->NM_case_insensitive)
       {
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       if (isset($nmgp_def_dados[0][$des_numero_censo_]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$des_numero_censo_];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input-dyn scAppDivToolbarInput' id='dyn_search_des_numero_censo__val_" . $ind . "' name='val_dyn_search_des_numero_censo__" . $ind . "' onChange=\"buttonEnable_dyn('dyn_search');\" value=\"" . $this->form_encode_input($val_cmp) . "\" size=25 alt=\"{datatype: 'text', maxLength: 25, allowedChars: '', lettersCase: '', autoTab: false, enterTab: false}\" style='display: none' >";
       $lin_obj .= "     <select class='sc-ui-autocomp-des_numero_censo_ scAppDivToolbarInput' id='id_ac_des_numero_censo_" . $ind . "' name='des_numero_censo__autocomp" . $ind . "' onChange=\"buttonEnable_dyn('dyn_search');\">";
       if ('' !=  $des_numero_censo_) {
           $lin_obj .= "     <option value='" . $des_numero_censo_ . "'  selected>" . $sAutocompValue . "</option>";
       }
       $lin_obj .= "     </select>";
       $lin_obj .= "       </span>";
       $lin_obj .= "      </td>";
       $lin_obj .= "      <td style='border-style: none; cursor:pointer'>";
       $lin_obj .= "       <img id='dyn_search_des_numero_censo__close_" . $ind . "' src='" . $this->Ini->path_botoes . "/" . $this->Ini->Img_qs_clean . "' onclick=\"del_dyn_search('dyn_search_des_numero_censo__" . $ind . "', " . $ind . ");buttonEnable_dyn('dyn_search');\">";
       $lin_obj .= "      </td>";
       $lin_obj .= "     </tr>";
       return $lin_obj;
   }
   function lookup_ajax_des_numero_medidor_($des_numero_medidor_)
   {
       $des_numero_medidor_ = substr($this->Db->qstr($des_numero_medidor_), 1, -1);
       $this->NM_case_insensitive = true;
       $Nm_accent = $this->Ini->Nm_accent_yes;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct des_numero_medidor from " . $this->Ini->nm_tabela . " where des_escenario=" . $_SESSION['var_escenario'] . " and  #lowerI#" . $Nm_accent['cmp_i'] . "des_numero_medidor" . $Nm_accent['cmp_f'] . "#lowerF#" . $Nm_accent['cmp_apos'] . " like #lowerI#'%" . $Nm_accent['arg_i'] . $des_numero_medidor_ . $Nm_accent['arg_f'] . "%'#lowerF#" . $Nm_accent['arg_apos'] . ""; 
       if ($this->NM_case_insensitive)
       {
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_jap_registro_deuda_lectura_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_des_numero_censo_($des_numero_censo_)
   {
       $des_numero_censo_ = substr($this->Db->qstr($des_numero_censo_), 1, -1);
       $this->NM_case_insensitive = true;
       $Nm_accent = $this->Ini->Nm_accent_yes;
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct des_numero_censo from " . $this->Ini->nm_tabela . " where des_escenario=" . $_SESSION['var_escenario'] . " and  #lowerI#" . $Nm_accent['cmp_i'] . "des_numero_censo" . $Nm_accent['cmp_f'] . "#lowerF#" . $Nm_accent['cmp_apos'] . " like #lowerI#'%" . $Nm_accent['arg_i'] . $des_numero_censo_ . $Nm_accent['arg_f'] . "%'#lowerF#" . $Nm_accent['arg_apos'] . ""; 
       if ($this->NM_case_insensitive)
       {
           if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
       if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = $this->form_jap_registro_deuda_lectura_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
            $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function form_jap_registro_deuda_lectura_pack_protect_string($sString)
   {
      $sString = (string) $sString;
      if (!empty($sString))
      {
         if (function_exists('NM_is_utf8') && NM_is_utf8($sString))
         {
             return $sString;
         }
         else
         {
             return sc_htmlentities($sString);
         }
      }
      elseif ('0' === $sString || 0 === $sString)
      {
         return '0';
      }
      else
      {
         return '';
      }
   }
   function JS_dynamic_search()
   {
       global $nm_saida;
?>
   <script type="text/javascript">
     var Tot_obj_dyn_search = <?php echo $this->Dyn_search_seq ?>;
     Tab_obj_dyn_search = new Array();
     Tab_evt_dyn_search = new Array();
<?php
       foreach ($this->Dyn_search_dat as $seq => $cmp)
       {
?>
     Tab_obj_dyn_search[<?php echo $seq ?>] = '<?php echo $cmp ?>';
<?php
       }
?>
<?php
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ajax_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ajax_nav'])
   { 
       $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_obj_dyn_search', 'value' => '');
       $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_evt_dyn_search', 'value' => '');
       $this->Ini->Arr_result['setVar'][] = array('var' => 'Tot_obj_dyn_search', 'value' => $this->Dyn_search_seq);
       foreach ($this->Dyn_search_dat as $seq => $cmp)
       {
           $this->Ini->Arr_result['setVar'][] = array('var' => 'Tab_obj_dyn_search[' . $seq . ']', 'value' => $cmp);
       }
   } 
?>
     var Cmp_select2_ok = false;
     function SC_select2_dyn()
     {
         if (Cmp_select2_ok) {
             return;
         }
         Cmp_select2_ok = true;
<?php
       foreach ($this->Cmps_select2 as $Cmp => $Seqs)
       {
           if ($Cmp == 'des_propietario_')
           {
               foreach ($Seqs as $CadaSeqs)
               {
?>
         $("#dyn_search_des_propietario__val_" + "<?php echo $CadaSeqs ?>").select2(
        {
          language: {
            noResults: function() {
              return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
            },
            searching: function() {
              return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
            }
          }
        }
      );
<?php
               }
           }
           if ($Cmp == 'des_contrato_')
           {
               foreach ($Seqs as $CadaSeqs)
               {
?>
         $("#dyn_search_des_contrato__val_" + "<?php echo $CadaSeqs ?>").select2(
        {
          language: {
            noResults: function() {
              return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
            },
            searching: function() {
              return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
            }
          }
        }
      );
<?php
               }
           }
       }
?>
     }
     function SC_carga_evt_jquery(tp_carga)
     {
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null' && (tp_carga == 'all' || tp_carga == i))
             {
                 x   = 0;
                 tmp = Tab_obj_dyn_search[i];
                 cps = new Array();
                 cps[x] = tmp;
                 for (x = 0; x < cps.length ; x++)
                 {
                     cmp = cps[x];
                     if (Tab_evt_dyn_search[cmp])
                     {
                         eval ("$('#dyn_search_" + cmp + "_val_" + i + "').bind('change', function() {" + Tab_evt_dyn_search[cmp] + "})");
                     }
                 }
             }
         }
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null' && (tp_carga == 'all' || tp_carga == i))
             {
                 tmp = Tab_obj_dyn_search[i];
                 if (tmp == 'des_numero_medidor_')
                 {
                      var x = i;
                        $(".sc-ui-autocomp-des_numero_medidor_").on("focus", function() {
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
                                nm_move('novo');
                            }
                            return data;
                          },
                          data: function (params) {
                           var query = {
                            q: params.term,
                            nmgp_opcao: "ajax_aut_comp_dyn_search",
                            origem: "form",
                            field: "des_numero_medidor_",
                            max_itens: "10",
                            cod_desc: "N",
                            script_case_init: <?php echo $this->Ini->sc_page ?>
                           }
                           return query;
                          }
                         }
                        }).on("select2:select", function(e) {;
                         $("#dyn_search_des_numero_medidor__val_" + x).val(e.params.data.id);
                        });
                 }
                 if (tmp == 'des_numero_censo_')
                 {
                      var x = i;
                        $(".sc-ui-autocomp-des_numero_censo_").on("focus", function() {
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
                                nm_move('novo');
                            }
                            return data;
                          },
                          data: function (params) {
                           var query = {
                            q: params.term,
                            nmgp_opcao: "ajax_aut_comp_dyn_search",
                            origem: "form",
                            field: "des_numero_censo_",
                            max_itens: "10",
                            cod_desc: "N",
                            script_case_init: <?php echo $this->Ini->sc_page ?>
                           }
                           return query;
                          }
                         }
                        }).on("select2:select", function(e) {;
                         $("#dyn_search_des_numero_censo__val_" + x).val(e.params.data.id);
                        });
                 }
             }
         }
     }
     function del_dyn_search(field, ind)
     {
         qtd_atv = 0;
         Tab_obj_dyn_search[ind] = 'NMSC_Dyn_Null';
         $('#' + field).hide();
         for (idel = 1; idel <= Tot_obj_dyn_search; idel++) {
             if (Tab_obj_dyn_search[idel] != 'NMSC_Dyn_Null') {
                 qtd_atv++;
                  break;
             }
         }
         if (qtd_atv == 0) {
             buttonDisable_dyn("dyn_search_clear");
         }
     }
     function dyn_search_hide_input(field, ind)
     {
        var index = document.getElementById('dyn_search_' + field + '_cond_' + ind).selectedIndex;
        var parm  = document.getElementById('dyn_search_' + field + '_cond_' + ind).options[index].value;
        if (parm == "nu" || parm == "nn" || parm == "ep" || parm == "ne")
        {
            $('#dyn_' + field + '_' + ind).css('display','none');
        }
        else
        {
            $('#dyn_' + field + '_' + ind).css('display','');
        }
     }
     var dynamicsearch_status = 'out';
     function nm_show_dynamicsearch_fields()
     {
       if (typeof(nm_show_dynamicsearch_fields_mobile) === typeof(function(){})) { return nm_show_dynamicsearch_fields_mobile(); };
       var btn_id = 'id_dyn_search_fields';
       var obj_id = 'id_dynamic_search_fields';
       dynamicsearch_status = 'open';
       $('#' + btn_id).mouseout(function() {
         setTimeout(function() {
           nm_hide_dynamicsearch_fields(obj_id);
         }, 1000);
       });
       $('#' + obj_id + ' li').click(function() {
         dynamicsearch_status = 'out';
         nm_hide_dynamicsearch_fields(obj_id);
       });
       $('#' + obj_id).css({
         'left': $('#' + btn_id).left
       })
       .mouseover(function() {
         dynamicsearch_status = 'over';
       })
       .mouseleave(function() {
         dynamicsearch_status = 'out';
         setTimeout(function() {
           nm_hide_dynamicsearch_fields(obj_id);
         }, 1000);
       })
       .show('fast');
     }
   function nm_hide_dynamicsearch_fields(obj_id) {
     if ('over' != dynamicsearch_status) {
       $('#' + obj_id).hide('fast');
     }
   }
   function proc_btn_dyn(btn, proc) {
       if ($("#" + btn).prop("disabled") == true) {
           return;
       }
       eval (proc);
   }
   function buttonDisable_dyn(buttonId) {
      $("#" + buttonId).prop("disabled", true).addClass("disabled");
   }
   function buttonEnable_dyn(buttonId) {
      $("#" + buttonId).prop("disabled", false).removeClass("disabled");
   }
   $(document).ready(function() {
      Tot_obj_dyn_search_or = Tot_obj_dyn_search;
      Tab_obj_dyn_search_or = new Array();
      for (i = 1; i <= Tot_obj_dyn_search; i++) {
          Tab_obj_dyn_search_or[i] = Tab_obj_dyn_search[i];
      }
      if (Tot_obj_dyn_search < 1) {
          buttonDisable_dyn("dyn_search_clear");
      }
      buttonDisable_dyn("dyn_search");
   });
     Dyn_Have_Clear = false;
     function nm_clear_dyn_search()
     {
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null')
             {
                 del_dyn_search('dyn_search_' + Tab_obj_dyn_search[i] + '_' + i, i);
             }
         }
         Dyn_Have_Clear = true;
         buttonDisable_dyn("dyn_search_clear");
         buttonEnable_dyn('dyn_search');
     }
     function buttonSelectedDS() {
        $("#dynamic_search_t").addClass("selected");
        $("#dynamic_search_b").addClass("selected");
     }
     function buttonunselectedDS() {
        $("#dynamic_search_t").removeClass("selected");
        $("#dynamic_search_b").removeClass("selected");
     }
     function nm_cancel_dyn_search()
     {
         for (i = 1; i <= Tot_obj_dyn_search; i++) {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null') {
                 del_dyn_search('dyn_search_' + Tab_obj_dyn_search[i] + '_' + i, i);
             }
         }
         Tot_obj_dyn_search = Tot_obj_dyn_search_or;
         Tab_obj_dyn_search = new Array(); 
         for (i = 1; i <= Tot_obj_dyn_search_or; i++) {
              Tab_obj_dyn_search[i] = Tab_obj_dyn_search_or[i];
         }
         for (i = 1; i <= Tot_obj_dyn_search; i++) {
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null') {
                 $('#dyn_search_' + Tab_obj_dyn_search[i] + '_' + i).show();
             }
         }
         if (Tot_obj_dyn_search > 0) {
             buttonEnable_dyn("dyn_search_clear");
         }
         $('#nm_close_dyn').click();
         buttonunselectedDS();
     }
     function nm_proc_dyn_search(formId, Tp_Proc)
     {
         var out_dyn      = "";
         var empty_dyn    = true;
         var tem_dyn_null = false;
         for (i = 1; i <= Tot_obj_dyn_search; i++)
         {
             if (Tab_obj_dyn_search[i] == 'NMSC_Dyn_Null')
             {
                 tem_dyn_null = true;
             }
             if (Tab_obj_dyn_search[i] != 'NMSC_Dyn_Null')
             {
                 out_dyn += (out_dyn != "") ? "_FDYN_" : "";
                 out_dyn += Tab_obj_dyn_search[i];
                 obj_dyn = 'dyn_search_' + Tab_obj_dyn_search[i] + '_cond_' + i;
                 out_cond = dyn_search_get_sel_cond(obj_dyn);
                 out_dyn += "_DYN_" + out_cond;
                 obj_dyn = 'dyn_search_' + Tab_obj_dyn_search[i] + '_val_';

                 if (Tab_obj_dyn_search[i] == 'des_propietario_')
                 {
                     result  = dyn_search_get_select(obj_dyn + i, '');
                 }
                 if (Tab_obj_dyn_search[i] == 'des_contrato_')
                 {
                     result  = dyn_search_get_select(obj_dyn + i, '');
                 }
                 if (Tab_obj_dyn_search[i] == 'des_numero_medidor_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 if (Tab_obj_dyn_search[i] == 'des_numero_censo_')
                 {
                     obj_ac  = 'id_ac_' + Tab_obj_dyn_search[i] + i;
                     result  = dyn_search_get_text(obj_dyn + i, obj_ac);
                 }
                 out_dyn += "_DYN_" + result;
                 if (result != '' || out_cond == 'ep' || out_cond == 'ne' || out_cond == 'nu' || out_cond == 'nn')
                 {
                     empty_dyn = false;
                 }
             }
         }
         if (empty_dyn && (Dyn_Have_Clear || tem_dyn_null))
         {
             Tp_Proc = "dyn_search_clear";
             Dyn_Have_Clear = false;
             buttonDisable_dyn("dyn_search_clear");
             Tot_obj_dyn_search = 0;
             Tab_obj_dyn_searchr = new Array();
         }
         if (empty_dyn && Tp_Proc != "dyn_search_clear")
         {
             alert("<?php echo $this->Ini->Nm_lang['lang_srch_req_field'] ?>");
             return false;
         }
        out_dyn = out_dyn.replace(/[+]/g, "__NM_PLUS__");
        while (out_dyn.lastIndexOf("&amp;") != -1)
        {
           out_dyn = out_dyn.replace("&amp;" , "__NM_AMP__");
        }
        out_dyn = out_dyn.replace(/[&]/g, "__NM_AMP__");
        out_dyn = out_dyn.replace(/[%]/g, "__NM_PRC__");
        Tot_obj_dyn_search_or = Tot_obj_dyn_search;
        Tab_obj_dyn_search_or = new Array();
        for (i = 1; i <= Tot_obj_dyn_search; i++) {
            Tab_obj_dyn_search_or[i] = Tab_obj_dyn_search[i];
        }
        buttonDisable_dyn('dyn_search');
         nm_move(Tp_Proc, out_dyn);
     }
     function dyn_search_get_sel_cond(obj_id)
     {
        var index = document.getElementById(obj_id).selectedIndex;
        return document.getElementById(obj_id).options[index].value;
     }
     function dyn_search_get_select(obj_id, str_type)
     {
        if(str_type == '')
        {
            var obj = document.getElementById(obj_id);
        }
        else
        {
            var obj = $('#' + obj_id).multipleSelect('getSelects');
        }
        var val = "";
        for (iSelect = 0; iSelect < obj.length; iSelect++)
        {
            if ((str_type == '' && obj[iSelect].selected) || (str_type=='RADIO' || str_type=='CHECKBOX'))
            {
                if(str_type == '' && obj[iSelect].selected)
                {
                    new_val = obj[iSelect].value;
                }
                else
                {
                    new_val = obj[iSelect];
                }
                val += (val != "") ? "_VLS_" : "";
                val += new_val;
            }
        }
        return val;
     }
     function dyn_search_get_Dselelect(obj_id)
     {
        var obj = document.getElementById(obj_id);
        var val = "";
        for (iSelect = 0; iSelect < obj.length; iSelect++)
        {
            val += (val != "") ? "_VLS_" : "";
            val += obj[iSelect].value;
        }
        return val;
     }
     function dyn_search_get_radio(obj_id)
     {
        var Nobj = document.getElementById(obj_id).name;
        var obj  = document.getElementsByName(Nobj);
        var val  = "";
        for (iRadio = 0; iRadio < obj.length; iRadio++)
        {
            if (obj[iRadio].checked)
            {
                val += (val != "") ? "_VLS_" : "";
                val += obj[iRadio].value;
            }
        }
        return val;
     }
     function dyn_search_get_checkbox(obj_id)
     {
        var Nobj = document.getElementById(obj_id).name;
        var obj  = document.getElementsByName(Nobj);
        var val  = "";
        if (!obj.length)
        {
            if (obj.checked)
            {
                val = obj.value;
            }
            return val;
        }
        else
        {
            for (iCheck = 0; iCheck < obj.length; iCheck++)
            {
                if (obj[iCheck].checked)
                {
                    val += (val != "") ? "_VLS_" : "";
                    val += obj[iCheck].value;
                }
            }
        }
        return val;
     }
     function dyn_search_get_text(obj_id, obj_ac)
     {
        var obj = document.getElementById(obj_id);
        var val = "";
        if (obj)
        {
            val = obj.value;
        }
        if (obj_ac != '' && val == '')
        {
            obj = document.getElementById(obj_ac);
            if (obj)
            {
                val = obj.value;
            }
        }
        return val;
     }
     function dyn_search_get_dt_h(obj_id, ind, TP)
     {
        var val = new Array();
        if (TP == 'DT' || TP == 'DH')
        {
            obj_part  = document.getElementById(obj_id + '_ano_val_' + ind);
            val      += "Y:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_ano_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
            obj_part  = document.getElementById(obj_id + '_mes_val_' + ind);
            val      += "_VLS_M:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_mes_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
            obj_part  = document.getElementById(obj_id + '_dia_val_' + ind);
            val      += "_VLS_D:";
            if (obj_part && obj_part.type.substr(0, 6) == 'select')
            {
                Tval = dyn_search_get_sel_cond(obj_id + '_dia_val_' + ind);
                val += (Tval != -1) ? Tval : '';
            }
            else
            {
                val += (obj_part) ? obj_part.value : '';
            }
        }
        if (TP == 'HH' || TP == 'DH')
        {
            val            += (val != "") ? "_VLS_" : "";
            obj_part        = document.getElementById(obj_id + '_hor_val_' + ind);
            val            += "H:";
            val            += (obj_part) ? obj_part.value : '';
            obj_part        = document.getElementById(obj_id + '_min_val_' + ind);
            val            += "_VLS_I:";
            val            += (obj_part) ? obj_part.value : '';
            obj_part        = document.getElementById(obj_id + '_seg_val_' + ind);
            val            += "_VLS_S:";
            val            += (obj_part) ? obj_part.value : '';
        }
        return val;
     }
function ajax_add_dyn_search(str_field, str_origem)
{
    var parm = str_field;
    if (parm == "")
    {
        return;
    }
    $('#table_dyn_search_criteria').show();
    scAjaxProcOn();
    Tot_obj_dyn_search++;
    Tab_obj_dyn_search[Tot_obj_dyn_search] = parm;
    $.ajax({
      type: "POST",
      url: "form_jap_registro_deuda_lectura.php",
      data: "nmgp_opcao=ajax_add_dyn_search&script_case_init=" + document.F1.script_case_init.value + "&parm=" + parm + "&seq=" + Tot_obj_dyn_search + "&origem=" + str_origem,
      success: function(jsonDyn_add) {
        var i, oResp;
        Tst_integrid = jsonDyn_add.trim();
        if ("{" != Tst_integrid.substr(0, 1)) {
            scAjaxProcOff();
            alert (jsonDyn_add);
            return;
        }
        eval("oResp = " + jsonDyn_add);
        if (oResp["ss_time_out"]) {
            scAjaxProcOff();
            nm_move('novo');
        }
        if (oResp["dyn_add"]) {
          for (i = 0; i < oResp["dyn_add"].length; i++) {
               $('#table_dyn_search').append(oResp["dyn_add"][i]);
          }
        }
        if (oResp["setVar"]) {
            for (i = 0; i < oResp["setVar"].length; i++) {
                 eval (oResp["setVar"][i]["var"] + ' = \"' + oResp["setVar"][i]["value"] + '\"');
            }
        }
        if (oResp["htmOutput"]) {
           scAjaxShowDebug(oResp);
        }
        SC_carga_evt_jquery(Tot_obj_dyn_search);
        scLoadScInput('#dyn_search_' + parm + '_' + Tot_obj_dyn_search + ' input:text.sc-js-input-dyn');
        if (str_field == 'des_propietario_')
        {
            $("#dyn_search_des_propietario__val_" + Tot_obj_dyn_search).select2(
            {
              language: {
                noResults: function() {
                  return mens_select2_notfound;
                },
                searching: function() {
                  return mens_select2_searching;
                }
              }
            }
          );
        }
        if (str_field == 'des_contrato_')
        {
            $("#dyn_search_des_contrato__val_" + Tot_obj_dyn_search).select2(
            {
              language: {
                noResults: function() {
                  return mens_select2_notfound;
                },
                searching: function() {
                  return mens_select2_searching;
                }
              }
            }
          );
        }
         Dyn_Have_Clear = false;
         buttonEnable_dyn('dyn_search');
         buttonEnable_dyn('dyn_search_clear');
        scAjaxProcOff();
      }
    });
}
   </script>
<?php
   }
   function SC_proc_dyn_search($Parms)
   {
       $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
       $ix     = 0;
       $fields = array();
       $Parms = str_replace(array("__NM_PLUS__","__NM_AMP__","__NM_PRC__"), array("+","&","%"), $Parms);
       if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($Parms))
       {
           $Parms = NM_conv_charset($Parms, $_SESSION['scriptcase']['charset'], "UTF-8");
       }
       $tmp    = explode("_FDYN_", $Parms);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search'] = array();
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_refresh'] = array();
       foreach ($tmp as $cada_f)
       {
           $dats = explode("_DYN_", $cada_f);
           $fields[$ix]['field']  = $dats[0];
           $fields[$ix]['cond']   = $dats[1];
           $sep_in                 = explode("_VLS3_", $dats[2]);
           if (isset($sep_in[1]))
           {
               $fields[$ix]['vls'][2][0] = $sep_in[1];
               $dats[2] = $sep_in[0];
           }
           $sep_bw                 = explode("_VLS2_", $dats[2]);
           $fields[$ix]['vls'][0] = explode("_VLS_",  $sep_bw[0]);
           $fields[$ix]['vls'][1] = isset($sep_bw[1]) ? explode("_VLS_",  $sep_bw[1]) : "";
           $val_sv = array();
           foreach ($fields[$ix]['vls'] as $i => $dados)
           {
               if (is_array($dados))
               {
                   foreach ($dados as $ind => $str)
                   {
                       $str = NM_charset_decode($str);
                       $tmp_pos = (is_string($str)) ? strpos($str, "##@@") : false;
                       if ($tmp_pos === false)
                       {
                          $val_sv[$i][] = $str;
                       }
                       else
                       {
                         $val_sv[$i][] = substr($str, 0, $tmp_pos);
                       }
                   }
               }
               else
               {
                   $dados = NM_charset_decode($dados);
                   $tmp_pos = (is_string($dados)) ? strpos($dados, "##@@") : false;
                   if ($tmp_pos === false)
                   {
                      $val_sv[$i] = $dados;
                   }
                   else
                   {
                      $val_sv[$i] = substr($dados, 0, $tmp_pos);
                   }
               }
           }
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search'][] = array('cmp' => $dats[0], 'opc' => $dats[1], 'val' => $val_sv);
           $ix++;
       }
       $this->NM_case_insensitive = true;
       $this->Dyn_Serarch_and_or = "and";
       $this->Cmd_Dyn_Search    = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_dyn_search'] = "";
       foreach ($fields as $ind => $dados)
       {
           $this->Date_part          = false;
           $this->Operador_date_part = "";
           $this->Lang_date_part     = "";
           $dados['cond'] = strtoupper($dados['cond']);
           if (empty($dados['vls']) && ($dados['cond'] == "NU" || $dados['cond'] == "NN" || $dados['cond'] == "EP" || $dados['cond'] == "NE"))
           {
               $dados['vls'][0][0] = "";
           }
           if ($dados['field'] == "des_propietario_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_propietario_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $tmp_pos = (is_string($dados['vls'][0])) ? strpos($dados['vls'][0], "##@@") : false;
               if ($tmp_pos === false)
               {
                  $this->Val_format_1 = $dados['vls'][0];
               }
               else
               {
                   $this->Val_format_1 = substr($dados['vls'][0], $tmp_pos + 4);
                   $dados['vls'][0]    = substr($dados['vls'][0], 0, $tmp_pos);
               }
               if ($dados['cond'] == "BW")
               {
                   $tmp_pos = (is_string($dados['vls'][0])) ? strpos($dados['vls'][0], "##@@") : false;
                   if ($tmp_pos === false)
                   {
                      $this->Val_format_2 = $dados['vls'][1];
                      $this->Val_BW_2     = $dados['vls'][1];
                   }
                   else
                   {
                       $this->Val_format_2 = substr($dados['vls'][1], $tmp_pos + 4);
                       $this->Val_BW_2     = substr($dados['vls'][1], 0, $tmp_pos);
                   }
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "des_propietario", 'N', 'INT4', $Label_cmp, false);
           }
           if ($dados['field'] == "des_contrato_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_contrato_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               $tmp_pos = (is_string($dados['vls'][0])) ? strpos($dados['vls'][0], "##@@") : false;
               if ($tmp_pos === false)
               {
                  $this->Val_format_1 = $dados['vls'][0];
               }
               else
               {
                   $this->Val_format_1 = substr($dados['vls'][0], $tmp_pos + 4);
                   $dados['vls'][0]    = substr($dados['vls'][0], 0, $tmp_pos);
               }
               if ($dados['cond'] == "BW")
               {
                   $tmp_pos = (is_string($dados['vls'][0])) ? strpos($dados['vls'][0], "##@@") : false;
                   if ($tmp_pos === false)
                   {
                      $this->Val_format_2 = $dados['vls'][1];
                      $this->Val_BW_2     = $dados['vls'][1];
                   }
                   else
                   {
                       $this->Val_format_2 = substr($dados['vls'][1], $tmp_pos + 4);
                       $this->Val_BW_2     = substr($dados['vls'][1], 0, $tmp_pos);
                   }
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "des_contrato", 'N', 'INT4', $Label_cmp, false);
           }
           if ($dados['field'] == "des_numero_medidor_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_medidor_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "des_numero_medidor", 'A', 'VARCHAR', $Label_cmp, false);
           }
           if ($dados['field'] == "des_numero_censo_" && !empty($dados['vls']))
           {
               $Label_cmp     = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dyn_search_label']['des_numero_censo_'];
               $dados['vls'][0] = $dados['vls'][0][0];
               if ($dados['cond'] == "BW")
               {
                   $dados['vls'][1] = $dados['vls'][1][0];
                   if (empty($dados['vls'][1]))
                   {
                       $dados['vls'][1] = $dados['vls'][0];
                   }
               }
               $this->Val_format_1 = $dados['vls'][0];
               if ($dados['cond'] == "BW")
               {
                   $this->Val_format_2 = $dados['vls'][1];
                   $this->Val_BW_2     = $dados['vls'][1];
               }
               $this->SC_proc_dyn_search_all($dados['cond'], $dados['vls'], "des_numero_censo", 'A', 'VARCHAR', $Label_cmp, false);
           }
       }
       if ($this->NM_case_insensitive)
       {
           $this->Cmd_Dyn_Search = str_replace("#lowerI#", "Upper(", $this->Cmd_Dyn_Search);
           $this->Cmd_Dyn_Search = str_replace("#lowerF#", ")", $this->Cmd_Dyn_Search);
       }
       else
       {
           $this->Cmd_Dyn_Search = str_replace("#lowerI#", "", $this->Cmd_Dyn_Search);
           $this->Cmd_Dyn_Search = str_replace("#lowerF#", "", $this->Cmd_Dyn_Search);
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq_filtro'] = "( " . $this->Cmd_Dyn_Search . " )";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal']) && !empty($this->Cmd_Dyn_Search)) 
       {
           $this->Cmd_Dyn_Search = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_detal'] . " and (" .  $this->Cmd_Dyn_Search . ")";
       }
       $sc_where = "";
       if (empty($this->Cmd_Dyn_Search)) 
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq_filtro'] = "";
           $sc_where = " where (des_escenario=" . $_SESSION['var_escenario'] . ")";
       }
       else
       {
           $sc_where = " where (des_escenario=" . $_SESSION['var_escenario'] . ") and (" . $this->Cmd_Dyn_Search . ")";
       }
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_pesq'] = $sc_where;
       $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
       $rt = $this->Db->Execute($nmgp_select) ; 
       if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
           exit ; 
       }  
       $qt_geral_reg_form_jap_registro_deuda_lectura = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['total'] = $qt_geral_reg_form_jap_registro_deuda_lectura;
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['where_filter'] = $this->Cmd_Dyn_Search;
       $rt->Close(); 
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_dyn_search'] . $this->Dyn_Serarch_and_or;
       if (NM_is_utf8($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq']) && $_SESSION['scriptcase']['charset'] != "UTF-8")
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq'] = sc_convert_encoding($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq'], $_SESSION['scriptcase']['charset'], "UTF-8");
       }
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_jap_registro_deuda_lectura_pack_ajax_response();
          exit;
      }
       $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_pesq'];
       $pos = strrpos($tmp, "##*@@");
       if ($pos !== false)
       {
           $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
           $tmp    = substr($tmp, 0, $pos);
           $this->Dyn_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
       }
       $this->NM_ajax_info['dyn_search']['id_dyn_search_cmd_str'] = NM_charset_to_utf8(trim($this->Dyn_search_str));
   }
   function SC_proc_dyn_search_lookup($cond, $vls, $sql, $tp, $tsql, $lab)
   {
       $nm_aspas = ($tp == 'A') ? "'" : "";
       $nm_cond = "";
       $nm_cmd  = "";
       foreach ($vls as $i => $dados)
       {
           $dados = NM_charset_decode($dados);
           if (!empty($nm_cond))
           {
               $nm_cmd .= ",";
               $nm_cond .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
           }
           $tmp_pos = (is_string($dados)) ? strpos($dados, "##@@") : false;
           if ($tmp_pos === false)
           {
              $res_lookup = $dados;
           }
           else
           {
               $res_lookup = substr($dados, $tmp_pos + 4);
               $dados = substr($dados, 0, $tmp_pos);
           }
           $ini_lower = "";
           $end_lower = "";
           if ($tp == 'A')
           {
               $ini_lower = "#lowerI#";
               $end_lower = "#lowerF#";
           }
           if (trim($dados) != "")
           {
               $dados    = substr($this->Db->qstr($dados), 1, -1);
               $nm_cmd  .= $ini_lower . $nm_aspas . $dados . $nm_aspas . $end_lower;
               $nm_cond .= $res_lookup;
           }
       }
       if (!empty($nm_cmd))
       {
           if (!empty($this->Cmd_Dyn_Search))
           {
               $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
           }
           if ($cond == "DF" || $cond == "NP")
           {
               $this->Cmd_Dyn_Search .= "(" . $ini_lower . $sql . $end_lower . " not in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_not_like'] . " " . $nm_cond . "##*@@";
           }
           else
           {
               $this->Cmd_Dyn_Search .= "(" . $ini_lower . $sql . $end_lower . " in (" . $nm_cmd . "))";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_dyn_search'] .= $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $nm_cond . "##*@@";
           }
       }
   }
   function SC_proc_dyn_search_all($cond, $vls, $sql, $tp, $tsql, $lab, $tp_unaccent=false)
   {
       $nm_aspas  = "'";
       $nm_aspas1 = "'";
       if ($tp == "N" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['decimal_db'] == ".")
       {
           $nm_aspas  = "";
           $nm_aspas1 = "";
       }
       if ($tp == "DT" || $tp == "DH" || $tp == "HH")
       {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date']))
          {
              $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date'];
              $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['SC_sep_date1'];
          }
       }
       $nm_ini_lower = "";
       $nm_fim_lower = "";
       if ($tp == 'A' && $tsql != "BOOL")
       {
           $nm_ini_lower = "#lowerI#";
           $nm_fim_lower = "#lowerF#";
       }
       $Nm_accent = $this->Ini->Nm_accent_no;
       if ($tp_unaccent) {
           $Nm_accent = $this->Ini->Nm_accent_yes;
       }
       if ($tsql == "BOOL")
       {
          $cond = str_replace(array("QP","NP"), array("EQ","DF"), $cond);
       }
       $nm_cond = "";
       $nm_cmd  = "";
       $dados   = $vls[0];
           if ($dados == "" && $cond != "NU" && $cond != "NN" && $cond != "EP" && $cond != "NE")
           {
               return;
           }
           if ($tp == 'N' && ($cond == "EP" || $cond == "NE"))
           {
               return;
           }
           $dados  = substr($this->Db->qstr($dados), 1, -1);
           if (($tsql == 'CIDR' || $tsql == 'INET' || $tsql == 'MACADDR') && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
           {
              $sql = "CAST (" . $sql . " AS TEXT)";
           }
           if ($cond != "NU" && $cond != "NN")
           {
               if ($tsql == "TIMESTAMP")
               {
                   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                   {
                       $tsql = "DATETIME_oracle";
                   }
                   elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                   {
                       $tsql = "DATETIME";
                   }
                   else
                   {
                       $tsql = "DATETIME";
                   }
               }
               if ($tp == 'N' && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($cond == "II" || $cond == "QP" || $cond == "NP"))
               {
                  $sql = "CAST (" . $sql . " AS TEXT)";
               }
               if (substr($tsql, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD hh24:mi:ss')";
               }
               elseif (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD')";
               }
               elseif (substr($tsql, 0, 4) == "TIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'hh24:mi:ss')";
               }
               if ($tsql == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) && !$this->Date_part)
               {
                   $sql = "convert(char(10)," . $sql . ",121)";
               }
               if ($tsql == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql) && !$this->Date_part)
               {
                   $sql = "convert(char(19)," . $sql . ",121)";
               }
               if ((substr($tsql, 0, 5) == "TIMES" || $tsql == "DATETIME_oracle") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) && !$this->Date_part)
               {
                   $sql  = "TO_DATE(TO_CHAR(" . $sql . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
                   $tsql = "DATETIME";
               }
               if (substr($tsql, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix) && !$this->Date_part)
               {
                   $sql = "EXTEND(" . $sql . ", YEAR TO FRACTION)";
               }
               elseif (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix) && !$this->Date_part)
               {
                   $sql = "EXTEND(" . $sql . ", YEAR TO DAY)";
               }
               if ($tp == 'N' && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && ($cond == "II" || $cond == "QP" || $cond == "NP"))
               {
                  $sql = "CAST (" . $sql . " AS VARCHAR(255))";
               }
               if (substr($tsql, 0, 8) == "DATETIME" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD hh24:mi:ss')";
               }
               elseif (substr($tsql, 0, 4) == "DATE" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress) && !$this->Date_part)
               {
                   $sql = "to_char (" . $sql . ", 'YYYY-MM-DD')";
               }
           }
           switch ($cond)
           {
              case "EQ":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " = " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "II":
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
                 $nm_cmd  = $nm_ini_lower . $Nm_accent['cmp_i'] . $sql . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'" . $Nm_accent['arg_i'] . $dados . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_strt'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "QP";
              case "NP";
                 $concat = " " . $this->Dyn_Serarch_and_or . " ";
                 if ($cond == "QP")
                 {
                     $op_all    = " #sc_like_# ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_like'];
                 }
                 else
                 {
                     $op_all    = " not #sc_like_# ";
                     $lang_like = $this->Ini->Nm_lang['lang_srch_not_like'];
                 }
                 $tmp_cond = "";
                 if (substr($tsql, 0, 4) == "DATE" && $this->Date_part)
                 {
                     if ($this->NM_data_qp['ano'] != "____")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_year'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['ano'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%Y', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'YYYY') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= $this->Ini_date_char . "extract('year' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(year from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'YYYY')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(year, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'YYYY') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= "year(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                         }
                         else
                         {
                             $nm_cmd .= "year(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['mes'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mnth'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['mes'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['mes'] = (substr($this->NM_data_qp['mes'], 0, 1) == '0') ? substr($this->NM_data_qp['mes'], 1) : $this->NM_data_qp['mes'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%m', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'MM') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= $this->Ini_date_char . "extract('month' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                             }
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(month from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'MM')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(month, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'MM') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= "month(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                             }
                         }
                         else
                         {
                             $nm_cmd .= "month(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['mes'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['dia'] != "__")
                     {
                         $tmp_cond .= (empty($nm_cmd)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_days'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['dia'];
                         $nm_cmd  .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['dia'] = (substr($this->NM_data_qp['dia'], 0, 1) == '0') ? substr($this->NM_data_qp['dia'], 1) : $this->NM_data_qp['dia'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%d', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'DD') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= $this->Ini_date_char . "extract('day' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                             }
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(day from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'DD')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(day, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'DD') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= "DAYOFMONTH(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                             }
                         }
                         else
                         {
                             $nm_cmd .= "day(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['dia'] . $this->End_date_part;
                         }
                     }
                 }
                 if (strpos($tsql, "TIME") !== false && $this->Date_part)
                 {
                     if ($this->NM_data_qp['hor'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_time'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['hor'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['hor'] = (substr($this->NM_data_qp['hor'], 0, 1) == '0') ? substr($this->NM_data_qp['hor'], 1) : $this->NM_data_qp['hor'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%H', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'hh24') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= $this->Ini_date_char . "extract('hour' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                             }
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(hour from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'HH24')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(hour, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'hh24') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= "hour(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                             }
                         }
                         else
                         {
                             $nm_cmd .= "hour(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['hor'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['min'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_mint'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['min'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['min'] = (substr($this->NM_data_qp['min'], 0, 1) == '0') ? substr($this->NM_data_qp['min'], 1) : $this->NM_data_qp['min'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%M', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'mi') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= $this->Ini_date_char . "extract('minute' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                             }
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(minute from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'MI')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(minute, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'mi') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= "minute(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                             }
                         }
                         else
                         {
                             $nm_cmd .= "minute(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['min'] . $this->End_date_part;
                         }
                     }
                     if ($this->NM_data_qp['seg'] != "__")
                     {
                         $tmp_cond .= (empty($tmp_cond)) ? "" : " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " ";
                         $tmp_cond .= $this->Ini->Nm_lang['lang_srch_scnd'] . " " . $this->Lang_date_part . " " . $this->NM_data_qp['seg'];
                         $nm_cmd   .= (empty($nm_cmd)) ? "" : $concat;
                         $this->NM_data_qp['seg'] = (substr($this->NM_data_qp['seg'], 0, 1) == '0') ? substr($this->NM_data_qp['seg'], 1) : $this->NM_data_qp['seg'];
                         if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
                         {
                             $nm_cmd .= "strftime('%S', " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'ss') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['ano'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= $this->Ini_date_char . "extract('second' from " . $sql . ")" . $this->End_date_char . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                             }
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                         {
                             $nm_cmd .= "extract(second from " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                         {
                             $nm_cmd .= "TO_CHAR(" . $sql . ", 'SS')" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                         {
                             $nm_cmd .= "DATEPART(second, " . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                         elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
                         {
                             if (trim($this->Operador_date_part) == "like" || trim($this->Operador_date_part) == "not like")
                             {
                                 $nm_cmd .= "to_char (" . $sql . ", 'ss') " . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                             }
                             else
                             {
                                 $nm_cmd .= "second(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                             }
                         }
                         else
                         {
                             $nm_cmd .= "second(" . $sql . ")" . $this->Operador_date_part . $this->Ini_date_part . $this->NM_data_qp['seg'] . $this->End_date_part;
                         }
                     }
                 }
                 if (!$this->Date_part)
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
                     $nm_cmd  .= $nm_ini_lower . $Nm_accent['cmp_i'] . $sql . $Nm_accent['cmp_f'] . $nm_fim_lower . $Nm_accent['cmp_apos'] . $op_all . $nm_ini_lower . "'%" . $Nm_accent['arg_i'] . $dados . $Nm_accent['arg_f'] . "%'" . $nm_fim_lower . $Nm_accent['arg_apos'];
                     $nm_cond  = $lab . " " . $lang_like . " " . $this->Val_format_1 . "##*@@";
                 }
                 else
                 {
                     if (!empty($tmp_cond))
                     {
                         $nm_cond = $lab . ": " . $tmp_cond . "##*@@";
                     }
                 }
              break;
              case "DF":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " <> " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_diff'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GT":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " > " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "GE":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " >= " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_grtr_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LT":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " < " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "LE":
                 $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " <= " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_less_equl'] . " " . $this->Val_format_1 . "##*@@";
              break;
              case "BW":
                 $this->Val_BW_2  = substr($this->Db->qstr($this->Val_BW_2), 1, -1);
                 $nm_cmd = $nm_ini_lower . $sql . $nm_fim_lower . " between " . $nm_ini_lower . $nm_aspas . $dados . $nm_aspas1 . $nm_fim_lower . " and " . $nm_ini_lower . $nm_aspas . $this->Val_BW_2 . $nm_aspas1 . $nm_fim_lower;
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_betw'] . " " . $this->Val_format_1 . " " . $this->Ini->Nm_lang['lang_srch_and_cond'] . " " . $this->Val_format_2 . "##*@@";
              break;
              case "IN":
                 $nm_sc_valores = explode(",", $dados);
                 $cond_str = "";
                 $nm_condX  = "";
                 $ini_mult  = "";
                 $end_mult  = "";
                 if (!empty($nm_sc_valores))
                 {
                     foreach ($nm_sc_valores as $nm_sc_valor)
                     {
                        if ($tp == "N" && substr_count($nm_sc_valor, ".") > 1)
                        {
                           $nm_sc_valor = str_replace(".", "", $nm_sc_valor);
                        }
                        if ("" != $cond_str)
                        {
                           $ini_mult  = "(";
                           $end_mult  = ")";
                           $cond_str .= ",";
                           $nm_condX  .= " " . $this->Ini->Nm_lang['lang_srch_orr_cond'] . " ";
                        }
                        $cond_str .= $nm_ini_lower . $nm_aspas . $nm_sc_valor . $nm_aspas1 . $nm_fim_lower;
                        $nm_condX .= $nm_aspas . $nm_sc_valor . $nm_aspas1;
                     }
                     $nm_cmd  = $nm_ini_lower . $sql . $nm_fim_lower . " IN (" . $cond_str . ")";
                     $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_like'] . " " . $ini_mult . $nm_condX . $end_mult . "##*@@";
                 }
            break;
              case "NU":
                 $nm_cmd  = $sql . " IS NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_null'] ."##*@@";
              break;
              case "NN":
                 $nm_cmd = $sql . " IS NOT NULL ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nnul'] . "##*@@";
              break;
              case "EP":
                 $nm_cmd  = $sql . " = '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_empty'] ."##*@@";
              break;
              case "NE":
                 $nm_cmd = $sql . " <> '' ";
                 $nm_cond = $lab . " " . $this->Ini->Nm_lang['lang_srch_nempty'] . "##*@@";
              break;
           }
           if (!empty($nm_cmd))
           {
               if (!empty($this->Cmd_Dyn_Search))
               {
                   $this->Cmd_Dyn_Search .= " " . $this->Dyn_Serarch_and_or . " ";
               }
               $this->Cmd_Dyn_Search .= "(" . $nm_cmd . ")";
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['cond_dyn_search'] .= $nm_cond;
           }
   }

   function nm_prep_date(&$val, $tp, $tsql, &$cond, $format_nd)
   {
       if ($tsql == "TIMESTAMP")
       {
           $tsql = "DATETIME";
       }
       $cond = strtoupper($cond);
       if ($cond == "NU" || $cond == "NN" || $cond == "EP" || $cond == "NE")
       {
           $val    = array();
           $val[0] = "";
           return;
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
       $this->NM_data_qp['ano'] = (isset($val[0]['ano']) && !empty($val[0]['ano'])) ? $val[0]['ano'] : "____";
       $this->NM_data_qp['mes'] = (isset($val[0]['mes']) && !empty($val[0]['mes'])) ? $val[0]['mes'] : "__";
       $this->NM_data_qp['dia'] = (isset($val[0]['dia']) && !empty($val[0]['dia'])) ? $val[0]['dia'] : "__";
       $this->NM_data_qp['hor'] = (isset($val[0]['hor']) && !empty($val[0]['hor'])) ? $val[0]['hor'] : "__";
       $this->NM_data_qp['min'] = (isset($val[0]['min']) && !empty($val[0]['min'])) ? $val[0]['min'] : "__";
       $this->NM_data_qp['seg'] = (isset($val[0]['seg']) && !empty($val[0]['seg'])) ? $val[0]['seg'] : "__";
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
           if (strpos($tsql, "TIME") !== false && ($tp == "DH" || ($tp == "DT" && $cond != "LE" && $cond != "LT" && $cond != "GE" && $cond != "GT")))
           {
               if (strpos($tsql, "TIME") !== false)
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
   function dyn_convert_date($val)
   {
       $val_ok = array();
       foreach ($val as $Part_date)
       {
           if (substr($Part_date, 0, 1) == "Y")
           {
               $val_ok['ano'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "M")
           {
               $val_ok['mes'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "D")
           {
               $val_ok['dia'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "H")
           {
               $val_ok['hor'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "I")
           {
               $val_ok['min'] = substr($Part_date, 2);
           }
           if (substr($Part_date, 0, 1) == "S")
           {
               $val_ok['seg'] = substr($Part_date, 2);
           }
       }
       return $val_ok;
   }
function nmgp_redireciona($tipo=0)
{
   global $nm_apl_dependente;
   if (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $_SESSION['scriptcase']['sc_tp_saida'] != "D" && $nm_apl_dependente != 1) 
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['nm_sc_retorno'];
   }
   else
   {
       $nmgp_saida_form = $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page];
   }
   if ($tipo == 2)
   {
       $nmgp_saida_form = "form_jap_registro_deuda_lectura_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_jap_registro_deuda_lectura_fim.php";
   }
   $diretorio = explode("/", $nmgp_saida_form);
   $cont = count($diretorio);
   $apl = $diretorio[$cont - 1];
   $apl = str_replace(".php", "", $apl);
   $pos = strpos($apl, "?");
   if ($pos !== false)
   {
       $apl = substr($apl, 0, $pos);
   }
   if ($tipo != 1 && $tipo != 2)
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page][$apl]['where_orig']);
   }
   if ($this->NM_ajax_flag)
   {
       $sTarget = '_self';
       $this->NM_ajax_info['redir']['metodo']              = 'post';
       $this->NM_ajax_info['redir']['action']              = $nmgp_saida_form;
       $this->NM_ajax_info['redir']['target']              = $sTarget;
       $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       if (0 == $tipo)
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida'] = $this->nm_location;
       }
       form_jap_registro_deuda_lectura_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
    <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
    <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
    <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
    <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
    <META http-equiv="Pragma" content="no-cache"/>
    <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
   </HEAD>
   <BODY>
   <FORM name="form_ok" method="POST" action="<?php echo $this->form_encode_input($nmgp_saida_form); ?>" target="_self">
<?php
   if ($tipo == 0)
   {
?>
     <INPUT type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($this->nm_location); ?>"> 
<?php
   }
?>
     <INPUT type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
   </FORM>
   <SCRIPT type="text/javascript">
      bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
      function scLigEditLookupCall()
      {
<?php
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['sc_modal'])
   {
?>
        parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
   elseif ($this->lig_edit_lookup)
   {
?>
        opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
   }
?>
      }
      if (bLigEditLookupCall)
      {
        scLigEditLookupCall();
      }
<?php
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['masterValue']);
?>
}
<?php
    }
}
?>
      document.form_ok.submit();
   </SCRIPT>
   </BODY>
   </HTML>
<?php
  exit;
}
    function sc_ajax_alert($sMessage, $params = array())
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxAlert']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxAlert']['params']  = $this->sc_ajax_alert_params($params);
        }
    } // sc_ajax_alert

    function sc_ajax_alert_params($params)
    {
        $paramList = array();
        foreach ($params as $paramName => $paramValue)
        {
            if (in_array($paramName, array('title', 'timer', 'confirmButtonText', 'confirmButtonFA', 'confirmButtonFAPos', 'cancelButtonText', 'cancelButtonFA', 'cancelButtonFAPos', 'footer', 'width', 'padding', 'position')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif (in_array($paramName, array('showConfirmButton', 'showCancelButton', 'toast')) && in_array($paramValue, array(true, false)))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('position' == $paramName && in_array($paramValue, array('top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('type' == $paramName && in_array($paramValue, array('warning', 'error', 'success', 'info', 'question')))
            {
                $paramList[$paramName] = NM_charset_to_utf8($paramValue);
            }
            elseif ('background' == $paramName)
            {
                $paramList[$paramName] = $this->sc_ajax_alert_image(NM_charset_to_utf8($paramValue));
            }
        }
        return $paramList;
    } // sc_ajax_alert_params

    function sc_ajax_alert_image($background)
    {
        $image_param = $background;
        preg_match_all('/url\(([\s])?(["|\'])?(.*?)(["|\'])?([\s])?\)/i', $background, $matches, PREG_PATTERN_ORDER);
        if (isset($matches[3])) {
            foreach ($matches[3] as $match) {
                if ('http:' != substr($match, 0, 5) && 'https:' != substr($match, 0, 6) && '/' != substr($match, 0, 1)) {
                    $image_param = str_replace($match, "{$this->Ini->path_img_global}/{$match}", $image_param);
                }
            }
        }
        return $image_param;
    } // sc_ajax_alert_image
    function sc_field_readonly($sField, $sStatus, $iSeq = '')
    {
        if ('on' != $sStatus && 'off' != $sStatus)
        {
            return;
        }

        $sFieldDateTime = '';

        $sFlagVar        = 'bFlagRead_' . $sField;
        $this->$sFlagVar = 'on' == $sStatus;

        if (isset($this->nmgp_refresh_row))
        {
            $iSeq = $this->nmgp_refresh_row;
        }

        $this->nmgp_cmp_readonly[$sField]                = $sStatus;
        $this->NM_ajax_info['readOnly'][$sField . $iSeq] = $sStatus;
        if ('' != $sFieldDateTime)
        {
            $this->NM_ajax_info['readOnly'][$sFieldDateTime . $iSeq] = $sStatus;
        }
    } // sc_field_readonly
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "dynsearch":
                return array("dynamic_search_t.sc-unique-btn-1");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-2");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_t.sc-unique-btn-5", "sc_b_sai_t.sc-unique-btn-4");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-6");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-7");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-8");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-9");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['link_info']['compact_mode']) {
            return;
        }
?>
    <tr><td class="sc-app-header">
   <TABLE width="100%" class="scFormHeader">
    <TR align="center">
     <TD style="padding: 0px">
      <TABLE style="padding: 0px; border-spacing: 0px; border-width: 0px;" width="100%">
       <TR valign="middle">
        <TD align="left" rowspan="3" class="scFormHeaderFont">
          
        </TD>
        <TD align="left" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFormHeaderFont">
          
        </TD>
       </TR>
       <TR valign="middle">
        <TD align="left" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFormHeaderFont">
          
        </TD>
       </TR>
       <TR valign="middle">
        <TD align="left" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="center" class="scFormHeaderFont">
          
        </TD>
        <TD style="font-size: 5px">
          &nbsp; &nbsp;
        </TD>
        <TD align="right" class="scFormHeaderFont">
          
        </TD>
       </TR>
      </TABLE>
     </TD>
    </TR>
   </TABLE>
    </td></tr>
<?php
    }

    function displayAppFooter()
    {
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['run_iframe'] != "R") {
        } else {
            return false;
        }
        return true;
    } // displayAppToolbars

    function displayTopToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayTopToolbar

    function displayBottomToolbar()
    {
        if (!$this->displayAppToolbars()) {
            return;
        }
    } // displayBottomToolbar

    function scGetColumnOrderRule($fieldName, &$orderColName, &$orderColOrient, &$orderColRule)
    {
        $sortRule = 'nosort';
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_registro_deuda_lectura']['ordem_ord'] == " desc") {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_desc;
                $orderColRule = $sortRule = 'desc';
            } else {
                $orderColOrient = $nome_img = $this->Ini->Label_sort_asc;
                $orderColRule = $sortRule = 'asc';
            }
        }
        return $sortRule;
    }

    function scGetColumnOrderIcon($fieldName, $sortRule)
    {        if ('desc' == $sortRule) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_desc . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } elseif ('asc' == $sortRule) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort_asc . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } elseif ('' != $this->Ini->Label_sort) {
            return "<img src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_sort . "\" class=\"sc-ui-img-order-column\" id=\"sc-id-img-order-" . $fieldName . "\" />";
        } else {
            return '';
        }
    }

    function scIsFieldNumeric($fieldName)
    {
        switch ($fieldName) {
            case "des_id":
                return true;
            case "des_total":
                return true;
            case "des_escenario":
                return true;
            case "des_valor_base":
                return true;
            case "des_valor_excedente":
                return true;
            case "des_operacion":
                return true;
            case "des_ruta":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "des_id":
                return 'desc';
            case "des_orden":
                return 'desc';
            case "des_propietario":
                return 'desc';
            case "des_contrato":
                return 'desc';
            case "des_lectura_anterior":
                return 'desc';
            case "des_lectura_actual":
                return 'desc';
            case "des_consumo":
                return 'desc';
            case "des_consumo_base":
                return 'desc';
            case "des_consumo_excedente":
                return 'desc';
            case "des_total":
                return 'desc';
            case "des_escenario":
                return 'desc';
            case "des_valor_base":
                return 'desc';
            case "des_valor_excedente":
                return 'desc';
            case "des_operacion":
                return 'desc';
            case "des_ruta":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
