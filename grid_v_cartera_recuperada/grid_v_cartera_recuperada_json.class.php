<?php

class grid_v_cartera_recuperada_json
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Arquivo;
   var $Arquivo_view;
   var $Tit_doc;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();

   function __construct()
   {
      $this->nm_data = new nm_data("es");
   }


function actionBar_isValidState($buttonName, $buttonState)
{
    switch ($buttonName) {
    }

    return false;
}


function actionBar_displayState($buttonName)
{
    switch ($buttonName) {
    }
}

function actionBar_getStateHint($buttonName)
{
    switch ($buttonName) {
    }
}

function actionBar_getStateConfirm($buttonName)
{
    switch ($buttonName) {
    }
}

function actionBar_getStateDisable($buttonName)
{
    if (isset($this->sc_actionbar_disabled[$buttonName]) && $this->sc_actionbar_disabled[$buttonName]) {
        return ' disabled';
    }

    return '';
}

function actionBar_getStateHide($buttonName)
{
    if (isset($this->sc_actionbar_hidden[$buttonName]) && $this->sc_actionbar_hidden[$buttonName]) {
        return ' sc-actionbar-button-hidden';
    }

    return '';
}

   function monta_json()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'])
      {
          if ($this->Ini->sc_export_ajax)
          {
              $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Json_f);
              $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
              $Temp = ob_get_clean();
              if ($Temp !== false && trim($Temp) != "")
              {
                  $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
              }
              $result_json = json_encode($this->Arr_result, JSON_UNESCAPED_UNICODE);
              if ($result_json == false)
              {
                  $oJson = new Services_JSON();
                  $result_json = $oJson->encode($this->Arr_result);
              }
              echo $result_json;
              exit;
          }
          else
          {
              $this->progress_bar_end();
          }
      }
      else
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['opcao'] = "";
      }
   }

   function inicializa_vars()
   {
      global $nm_lang;
      if (isset($GLOBALS['nmgp_parms']) && !empty($GLOBALS['nmgp_parms'])) 
      { 
          $GLOBALS['nmgp_parms'] = str_replace("@aspass@", "'", $GLOBALS['nmgp_parms']);
          $todox = str_replace("?#?@?@?", "?#?@ ?@?", $GLOBALS["nmgp_parms"]);
          $todo  = explode("?@?", $todox);
          foreach ($todo as $param)
          {
               $cadapar = explode("?#?", $param);
               if (1 < sizeof($cadapar))
               {
                   if (substr($cadapar[0], 0, 11) == "SC_glo_par_")
                   {
                       $cadapar[0] = substr($cadapar[0], 11);
                       $cadapar[1] = $_SESSION[$cadapar[1]];
                   }
                   if (isset($GLOBALS['sc_conv_var'][$cadapar[0]]))
                   {
                       $cadapar[0] = $GLOBALS['sc_conv_var'][$cadapar[0]];
                   }
                   elseif (isset($GLOBALS['sc_conv_var'][strtolower($cadapar[0])]))
                   {
                       $cadapar[0] = $GLOBALS['sc_conv_var'][strtolower($cadapar[0])];
                   }
                   nm_limpa_str_grid_v_cartera_recuperada($cadapar[1]);
                   nm_protect_num_grid_v_cartera_recuperada($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_v_cartera_recuperada']['opcao'] = $cadapar[1];
                   }
               }
          }
      }
      if (!isset($Igtech_RucEmpresa) && isset($igtech_rucempresa)) 
      {
         $Igtech_RucEmpresa = $igtech_rucempresa;
      }
      if (isset($Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $Igtech_RucEmpresa;
          nm_limpa_str_grid_v_cartera_recuperada($_SESSION["Igtech_RucEmpresa"]);
      }
      if (!isset($var_RutaLogo) && isset($var_rutalogo)) 
      {
         $var_RutaLogo = $var_rutalogo;
      }
      if (isset($var_RutaLogo)) 
      {
          $_SESSION['var_RutaLogo'] = $var_RutaLogo;
          nm_limpa_str_grid_v_cartera_recuperada($_SESSION["var_RutaLogo"]);
      }
      if (!isset($Igtech_NombreEmpresa) && isset($igtech_nombreempresa)) 
      {
         $Igtech_NombreEmpresa = $igtech_nombreempresa;
      }
      if (isset($Igtech_NombreEmpresa)) 
      {
          $_SESSION['Igtech_NombreEmpresa'] = $Igtech_NombreEmpresa;
          nm_limpa_str_grid_v_cartera_recuperada($_SESSION["Igtech_NombreEmpresa"]);
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Json_use_label = true;
      $this->Json_format = false;
      $this->Tem_json_res = false;
      $this->Json_password = "";
      if (isset($_REQUEST['nm_json_label']) && !empty($_REQUEST['nm_json_label']))
      {
          $this->Json_use_label = ($_REQUEST['nm_json_label'] == "S") ? true : false;
      }
      if (isset($_REQUEST['nm_json_format']) && !empty($_REQUEST['nm_json_format']))
      {
          $this->Json_format = ($_REQUEST['nm_json_format'] == "S") ? true : false;
      }
      $this->Tem_json_res  = true;
      if (isset($_REQUEST['SC_module_export']) && $_REQUEST['SC_module_export'] != "")
      { 
          $this->Tem_json_res = (strpos(" " . $_REQUEST['SC_module_export'], "resume") !== false) ? true : false;
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['SC_Gb_Free_cmp']))
      {
          $this->Tem_json_res  = false;
      }
      if (!is_file($this->Ini->root . $this->Ini->path_link . "grid_v_cartera_recuperada/grid_v_cartera_recuperada_res_json.class.php"))
      {
          $this->Tem_json_res  = false;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_label']))
      {
          $this->Json_use_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_label'];
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_format']))
      {
          $this->Json_format = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_format'];
      }
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_v_cartera_recuperada_total.class.php"); 
      $this->Tot = new grid_v_cartera_recuperada_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'] && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_v_cartera_recuperada']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_return']);
          if ($this->Tem_json_res) {
              $PB_plus = intval ($this->count_ger * 0.04);
              $PB_plus = ($PB_plus < 2) ? 2 : $PB_plus;
          }
          else {
              $PB_plus = intval ($this->count_ger * 0.02);
              $PB_plus = ($PB_plus < 1) ? 1 : $PB_plus;
          }
          $PB_tot = $this->count_ger + $PB_plus;
          $this->PB_dif = $PB_tot - $this->count_ger;
          $this->pb->setTotalSteps($PB_tot);
      }
      $this->nm_data = new nm_data("es");
      $this->Arquivo      = "sc_json";
      $this->Arquivo     .= "_" . date("YmdHis") . "_" . rand(0, 1000);
      $this->Arq_zip      = $this->Arquivo . "_grid_v_cartera_recuperada.zip";
      $this->Arquivo     .= "_grid_v_cartera_recuperada";
      $this->Arquivo     .= ".json";
      $this->Tit_doc      = "grid_v_cartera_recuperada.json";
      $this->Tit_zip      = "grid_v_cartera_recuperada.zip";
   }

   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }

   function grava_arquivo()
   {
      global $nm_lang;
      global $nm_nada, $nm_lang;

      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_v_cartera_recuperada']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_v_cartera_recuperada']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_v_cartera_recuperada']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->op_fecha_baja = (isset($Busca_temp['op_fecha_baja'])) ? $Busca_temp['op_fecha_baja'] : ""; 
          $tmp_pos = (is_string($this->op_fecha_baja)) ? strpos($this->op_fecha_baja, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->op_fecha_baja))
          {
              $this->op_fecha_baja = substr($this->op_fecha_baja, 0, $tmp_pos);
          }
          $this->op_fecha_baja_2 = (isset($Busca_temp['op_fecha_baja_input_2'])) ? $Busca_temp['op_fecha_baja_input_2'] : ""; 
          $this->periodo_baja = (isset($Busca_temp['periodo_baja'])) ? $Busca_temp['periodo_baja'] : ""; 
          $tmp_pos = (is_string($this->periodo_baja)) ? strpos($this->periodo_baja, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->periodo_baja))
          {
              $this->periodo_baja = substr($this->periodo_baja, 0, $tmp_pos);
          }
          $this->mes_baja = (isset($Busca_temp['mes_baja'])) ? $Busca_temp['mes_baja'] : ""; 
          $tmp_pos = (is_string($this->mes_baja)) ? strpos($this->mes_baja, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->mes_baja))
          {
              $this->mes_baja = substr($this->mes_baja, 0, $tmp_pos);
          }
          $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
          $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_identificacion))
          {
              $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
          }
          $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
          $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->cl_nombre))
          {
              $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
          }
          $this->pro_descripcion = (isset($Busca_temp['pro_descripcion'])) ? $Busca_temp['pro_descripcion'] : ""; 
          $tmp_pos = (is_string($this->pro_descripcion)) ? strpos($this->pro_descripcion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pro_descripcion))
          {
              $this->pro_descripcion = substr($this->pro_descripcion, 0, $tmp_pos);
          }
          $this->op_asiento_anula = (isset($Busca_temp['op_asiento_anula'])) ? $Busca_temp['op_asiento_anula'] : ""; 
          $tmp_pos = (is_string($this->op_asiento_anula)) ? strpos($this->op_asiento_anula, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->op_asiento_anula))
          {
              $this->op_asiento_anula = substr($this->op_asiento_anula, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'] .= ".json";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'])
      { 
          $this->Json_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
          $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
          $json_f = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      }
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $nmgp_select_count = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela; 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT periodo_baja, mes_baja, cl_identificacion, cl_nombre, op_motivo_baja, op_comentario, pro_descripcion, do_subtotal, do_valor_iva, do_total, str_replace (convert(char(10),op_fecha_emision,102), '.', '-') + ' ' + convert(char(8),op_fecha_emision,20), periodo_emision, mes_emision, str_replace (convert(char(10),op_fecha_baja,102), '.', '-') + ' ' + convert(char(8),op_fecha_baja,20), pro_codigo, do_descuento, op_estado, op_asiento, op_asiento_anula from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT periodo_baja, mes_baja, cl_identificacion, cl_nombre, op_motivo_baja, op_comentario, pro_descripcion, do_subtotal, do_valor_iva, do_total, op_fecha_emision, periodo_emision, mes_emision, op_fecha_baja, pro_codigo, do_descuento, op_estado, op_asiento, op_asiento_anula from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT periodo_baja, mes_baja, cl_identificacion, cl_nombre, op_motivo_baja, op_comentario, pro_descripcion, do_subtotal, do_valor_iva, do_total, convert(char(23),op_fecha_emision,121), periodo_emision, mes_emision, convert(char(23),op_fecha_baja,121), pro_codigo, do_descuento, op_estado, op_asiento, op_asiento_anula from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT periodo_baja, mes_baja, cl_identificacion, cl_nombre, op_motivo_baja, op_comentario, pro_descripcion, do_subtotal, do_valor_iva, do_total, op_fecha_emision, periodo_emision, mes_emision, op_fecha_baja, pro_codigo, do_descuento, op_estado, op_asiento, op_asiento_anula from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT periodo_baja, mes_baja, cl_identificacion, cl_nombre, op_motivo_baja, op_comentario, pro_descripcion, do_subtotal, do_valor_iva, do_total, EXTEND(op_fecha_emision, YEAR TO DAY), periodo_emision, mes_emision, EXTEND(op_fecha_baja, YEAR TO DAY), pro_codigo, do_descuento, op_estado, op_asiento, op_asiento_anula from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT periodo_baja, mes_baja, cl_identificacion, cl_nombre, op_motivo_baja, op_comentario, pro_descripcion, do_subtotal, do_valor_iva, do_total, op_fecha_emision, periodo_emision, mes_emision, op_fecha_baja, pro_codigo, do_descuento, op_estado, op_asiento, op_asiento_anula from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_pesq'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_resumo']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_resumo'])) 
      { 
          if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_pesq'])) 
          { 
              $nmgp_select .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_resumo']; 
              $nmgp_select_count .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_resumo']; 
          } 
          else
          { 
              $nmgp_select .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_resumo'] . ")"; 
              $nmgp_select_count .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['where_resumo'] . ")"; 
          } 
      } 
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select_count;
      $rt = $this->Db->Execute($nmgp_select_count);
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      $this->count_ger = $rt->fields[0];
      $rt->Close();
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      if (!$rs->EOF)
      {
         $this->periodo_baja = $rs->fields[0] ;  
         $this->periodo_baja = (string)$this->periodo_baja;
         $this->mes_baja = $rs->fields[1] ;  
         $this->cl_identificacion = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->op_motivo_baja = $rs->fields[4] ;  
         $this->op_comentario = $rs->fields[5] ;  
         $this->pro_descripcion = $rs->fields[6] ;  
         $this->do_subtotal = $rs->fields[7] ;  
         $this->do_subtotal = (string)$this->do_subtotal;
         $this->do_valor_iva = $rs->fields[8] ;  
         $this->do_valor_iva = (string)$this->do_valor_iva;
         $this->do_total = $rs->fields[9] ;  
         $this->do_total = (string)$this->do_total;
         $this->op_fecha_emision = $rs->fields[10] ;  
         $this->periodo_emision = $rs->fields[11] ;  
         $this->periodo_emision = (string)$this->periodo_emision;
         $this->mes_emision = $rs->fields[12] ;  
         $this->op_fecha_baja = $rs->fields[13] ;  
         $this->pro_codigo = $rs->fields[14] ;  
         $this->do_descuento = $rs->fields[15] ;  
         $this->do_descuento =  str_replace(",", ".", $this->do_descuento);
         $this->do_descuento = (string)$this->do_descuento;
         $this->op_estado = $rs->fields[16] ;  
         $this->op_asiento = $rs->fields[17] ;  
         $this->op_asiento_anula = $rs->fields[18] ;  
   $_SESSION['scriptcase']['grid_v_cartera_recuperada']['contr_erro'] = 'on';
if (!isset($_SESSION['var_RutaLogo'])) {$_SESSION['var_RutaLogo'] = "";}
if (!isset($this->sc_temp_var_RutaLogo)) {$this->sc_temp_var_RutaLogo = (isset($_SESSION['var_RutaLogo'])) ? $_SESSION['var_RutaLogo'] : "";}
if (!isset($_SESSION['Igtech_RucEmpresa'])) {$_SESSION['Igtech_RucEmpresa'] = "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
 $check_sql="SELECT sp_busca_parametro('RUTAWEB_IMG','/_lib')||emp_ruc||'/'||emp_logo
			FROM del_empresa 
			where emp_ruc='".$this->sc_temp_Igtech_RucEmpresa."'";
 
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


if (isset($this->rs[0][0]))     
{
   $emp_logo= $this->rs[0][0];
   
}else{
	$emp_logo= "";
}

$this->sc_temp_var_RutaLogo="<img src='".$emp_logo."' width='230' height='80' border='0'>";
if (isset($this->sc_temp_Igtech_RucEmpresa)) {$_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_var_RutaLogo)) {$_SESSION['var_RutaLogo'] = $this->sc_temp_var_RutaLogo;}
$_SESSION['scriptcase']['grid_v_cartera_recuperada']['contr_erro'] = 'off';
      }
      $this->SC_seq_register = 0;
      $this->json_registro = array();
      $this->SC_seq_json   = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'] && !$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->periodo_baja = $rs->fields[0] ;  
         $this->periodo_baja = (string)$this->periodo_baja;
         $this->mes_baja = $rs->fields[1] ;  
         $this->cl_identificacion = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->op_motivo_baja = $rs->fields[4] ;  
         $this->op_comentario = $rs->fields[5] ;  
         $this->pro_descripcion = $rs->fields[6] ;  
         $this->do_subtotal = $rs->fields[7] ;  
         $this->do_subtotal = (string)$this->do_subtotal;
         $this->do_valor_iva = $rs->fields[8] ;  
         $this->do_valor_iva = (string)$this->do_valor_iva;
         $this->do_total = $rs->fields[9] ;  
         $this->do_total = (string)$this->do_total;
         $this->op_fecha_emision = $rs->fields[10] ;  
         $this->periodo_emision = $rs->fields[11] ;  
         $this->periodo_emision = (string)$this->periodo_emision;
         $this->mes_emision = $rs->fields[12] ;  
         $this->op_fecha_baja = $rs->fields[13] ;  
         $this->pro_codigo = $rs->fields[14] ;  
         $this->do_descuento = $rs->fields[15] ;  
         $this->do_descuento =  str_replace(",", ".", $this->do_descuento);
         $this->do_descuento = (string)$this->do_descuento;
         $this->op_estado = $rs->fields[16] ;  
         $this->op_asiento = $rs->fields[17] ;  
         $this->op_asiento_anula = $rs->fields[18] ;  
         //----- lookup - mes_baja
         $this->look_mes_baja = $this->mes_baja; 
         $this->Lookup->lookup_mes_baja($this->look_mes_baja, $this->mes_baja) ; 
         $this->look_mes_baja = ($this->look_mes_baja == "&nbsp;") ? "" : $this->look_mes_baja; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                $NM_func_exp = "NM_export_" . $Cada_col;
                $this->$NM_func_exp();
            } 
         } 
         $this->SC_seq_json++;
         $rs->MoveNext();
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['embutida'])
      { 
          $_SESSION['scriptcase']['export_return'] = $this->json_registro;
      }
      else
      { 
          $result_json = json_encode($this->json_registro, JSON_UNESCAPED_UNICODE);
          if ($result_json == false)
          {
              $oJson = new Services_JSON();
              $result_json = $oJson->encode($this->json_registro);
          }
          fwrite($json_f, $result_json);
          fclose($json_f);
          if ($this->Tem_json_res)
          { 
              if (!$this->Ini->sc_export_ajax) {
                  $this->PB_dif = intval ($this->PB_dif / 2);
                  $Mens_bar  = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
                  $Mens_smry = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_smry_titl']);
                  $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
                  $this->pb->addSteps($this->PB_dif);
              }
              require_once($this->Ini->path_aplicacao . "grid_v_cartera_recuperada_res_json.class.php");
              $this->Res = new grid_v_cartera_recuperada_res_json();
              $this->prep_modulos("Res");
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_res_grid'] = true;
              $this->Res->monta_json();
          } 
          if (!$this->Ini->sc_export_ajax) {
              $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_btns_export_finished']);
              $this->pb->setProgressbarMessage($Mens_bar);
              $this->pb->addSteps($this->PB_dif);
          }
          if ($this->Json_password != "" || $this->Tem_json_res)
          { 
              $str_zip    = "";
              $Parm_pass  = ($this->Json_password != "") ? " -p" : "";
              $Zip_f      = (FALSE !== strpos($this->Zip_f, ' ')) ? " \"" . $this->Zip_f . "\"" :  $this->Zip_f;
              $Arq_input  = (FALSE !== strpos($this->Json_f, ' ')) ? " \"" . $this->Json_f . "\"" :  $this->Json_f;
              if (is_file($Zip_f)) {
                  unlink($Zip_f);
              }
              if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
              {
                  chdir($this->Ini->path_third . "/zip/windows");
                  $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j " . $this->Json_password . " " . $Zip_f . " " . $Arq_input;
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
                  $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
              {
                  chdir($this->Ini->path_third . "/zip/mac/bin");
                  $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
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
              unlink($Arq_input);
              $this->Arquivo = $this->Arq_zip;
              $this->Json_f   = $this->Zip_f;
              $this->Tit_doc = $this->Tit_zip;
              if ($this->Tem_json_res)
              { 
                  $str_zip   = "";
                  $Arq_res   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_res_file']['json'];
                  $Arq_input = (FALSE !== strpos($Arq_res, ' ')) ? " \"" . $Arq_res . "\"" :  $Arq_res;
                  if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
                  {
                      $str_zip = "zip.exe " . strtoupper($Parm_pass) . " -j -u " . $this->Json_password . " " . $Zip_f . " " . $Arq_input;
                  }
                  elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
                  {
                      $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
                  }
                  elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
                  {
                      $str_zip = "./7za " . $Parm_pass . $this->Json_password . " a " . $Zip_f . " " . $Arq_input;
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
                  unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_res_file']['json']);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_res_grid']);
          } 
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- periodo_baja
   function NM_export_periodo_baja()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->periodo_baja, "", "", "0", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['periodo_baja'])) ? $this->New_label['periodo_baja'] : "" . $this->Ini->Nm_lang['lang_periodo'] . " Recuperación"; 
         }
         else
         {
             $SC_Label = "periodo_baja"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->periodo_baja;
   }
   //----- mes_baja
   function NM_export_mes_baja()
   {
         $this->look_mes_baja = NM_charset_to_utf8($this->look_mes_baja);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['mes_baja'])) ? $this->New_label['mes_baja'] : "Mes Recuperación"; 
         }
         else
         {
             $SC_Label = "mes_baja"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_mes_baja;
   }
   //----- cl_identificacion
   function NM_export_cl_identificacion()
   {
         $this->cl_identificacion = NM_charset_to_utf8($this->cl_identificacion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_identificacion'])) ? $this->New_label['cl_identificacion'] : "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . ""; 
         }
         else
         {
             $SC_Label = "cl_identificacion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_identificacion;
   }
   //----- cl_nombre
   function NM_export_cl_nombre()
   {
         $this->cl_nombre = NM_charset_to_utf8($this->cl_nombre);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : "" . $this->Ini->Nm_lang['lang_cliente'] . ""; 
         }
         else
         {
             $SC_Label = "cl_nombre"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_nombre;
   }
   //----- op_motivo_baja
   function NM_export_op_motivo_baja()
   {
         $this->op_motivo_baja = NM_charset_to_utf8($this->op_motivo_baja);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_motivo_baja'])) ? $this->New_label['op_motivo_baja'] : "" . $this->Ini->Nm_lang['lang_motivo'] . ""; 
         }
         else
         {
             $SC_Label = "op_motivo_baja"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_motivo_baja;
   }
   //----- op_comentario
   function NM_export_op_comentario()
   {
         $this->op_comentario = NM_charset_to_utf8($this->op_comentario);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_comentario'])) ? $this->New_label['op_comentario'] : "" . $this->Ini->Nm_lang['lang_comentario'] . ""; 
         }
         else
         {
             $SC_Label = "op_comentario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_comentario;
   }
   //----- pro_descripcion
   function NM_export_pro_descripcion()
   {
         $this->pro_descripcion = NM_charset_to_utf8($this->pro_descripcion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['pro_descripcion'])) ? $this->New_label['pro_descripcion'] : "" . $this->Ini->Nm_lang['lang_producto'] . ""; 
         }
         else
         {
             $SC_Label = "pro_descripcion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->pro_descripcion;
   }
   //----- do_subtotal
   function NM_export_do_subtotal()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->do_subtotal, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['do_subtotal'])) ? $this->New_label['do_subtotal'] : "" . $this->Ini->Nm_lang['lang_subtotal'] . ""; 
         }
         else
         {
             $SC_Label = "do_subtotal"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->do_subtotal;
   }
   //----- do_valor_iva
   function NM_export_do_valor_iva()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->do_valor_iva, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['do_valor_iva'])) ? $this->New_label['do_valor_iva'] : "" . $this->Ini->Nm_lang['lang_iva'] . ""; 
         }
         else
         {
             $SC_Label = "do_valor_iva"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->do_valor_iva;
   }
   //----- do_total
   function NM_export_do_total()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->do_total, "", ".", "2", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['do_total'])) ? $this->New_label['do_total'] : "" . $this->Ini->Nm_lang['lang_total'] . ""; 
         }
         else
         {
             $SC_Label = "do_total"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->do_total;
   }
   //----- op_fecha_emision
   function NM_export_op_fecha_emision()
   {
         if ($this->Json_format)
         {
             $conteudo_x =  $this->op_fecha_emision;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->op_fecha_emision, "YYYY-MM-DD  ");
                 $this->op_fecha_emision = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_fecha_emision'])) ? $this->New_label['op_fecha_emision'] : "" . $this->Ini->Nm_lang['lang_fecha_emision'] . ""; 
         }
         else
         {
             $SC_Label = "op_fecha_emision"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_fecha_emision;
   }
   //----- periodo_emision
   function NM_export_periodo_emision()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->periodo_emision, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['periodo_emision'])) ? $this->New_label['periodo_emision'] : "" . $this->Ini->Nm_lang['lang_periodo_emision'] . ""; 
         }
         else
         {
             $SC_Label = "periodo_emision"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->periodo_emision;
   }
   //----- mes_emision
   function NM_export_mes_emision()
   {
         $this->mes_emision = NM_charset_to_utf8($this->mes_emision);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['mes_emision'])) ? $this->New_label['mes_emision'] : "" . $this->Ini->Nm_lang['lang_mes_emision'] . ""; 
         }
         else
         {
             $SC_Label = "mes_emision"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->mes_emision;
   }
   //----- op_fecha_baja
   function NM_export_op_fecha_baja()
   {
         if ($this->Json_format)
         {
             $conteudo_x =  $this->op_fecha_baja;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->op_fecha_baja, "YYYY-MM-DD  ");
                 $this->op_fecha_baja = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_fecha_baja'])) ? $this->New_label['op_fecha_baja'] : "" . $this->Ini->Nm_lang['lang_fecha'] . " Recuperación"; 
         }
         else
         {
             $SC_Label = "op_fecha_baja"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_fecha_baja;
   }
   //----- pro_codigo
   function NM_export_pro_codigo()
   {
         $this->pro_codigo = NM_charset_to_utf8($this->pro_codigo);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['pro_codigo'])) ? $this->New_label['pro_codigo'] : "" . $this->Ini->Nm_lang['lang_codigo'] . ""; 
         }
         else
         {
             $SC_Label = "pro_codigo"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->pro_codigo;
   }
   //----- do_descuento
   function NM_export_do_descuento()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->do_descuento, $_SESSION['scriptcase']['reg_conf']['grup_val'], $_SESSION['scriptcase']['reg_conf']['dec_val'], "6", "S", "2", "", "V:" . $_SESSION['scriptcase']['reg_conf']['monet_f_pos'] . ":" . $_SESSION['scriptcase']['reg_conf']['monet_f_neg'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['unid_mont_group_digit']) ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['do_descuento'])) ? $this->New_label['do_descuento'] : "" . $this->Ini->Nm_lang['lang_descuento'] . ""; 
         }
         else
         {
             $SC_Label = "do_descuento"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->do_descuento;
   }
   //----- op_estado
   function NM_export_op_estado()
   {
         $this->op_estado = NM_charset_to_utf8($this->op_estado);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_estado'])) ? $this->New_label['op_estado'] : "" . $this->Ini->Nm_lang['lang_estado'] . ""; 
         }
         else
         {
             $SC_Label = "op_estado"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_estado;
   }
   //----- op_asiento
   function NM_export_op_asiento()
   {
         $this->op_asiento = NM_charset_to_utf8($this->op_asiento);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_asiento'])) ? $this->New_label['op_asiento'] : "" . $this->Ini->Nm_lang['lang_asiento'] . ""; 
         }
         else
         {
             $SC_Label = "op_asiento"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_asiento;
   }
   //----- op_asiento_anula
   function NM_export_op_asiento_anula()
   {
         $this->op_asiento_anula = NM_charset_to_utf8($this->op_asiento_anula);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_asiento_anula'])) ? $this->New_label['op_asiento_anula'] : "" . $this->Ini->Nm_lang['lang_asiento_reverso'] . ""; 
         }
         else
         {
             $SC_Label = "op_asiento_anula"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_asiento_anula;
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
   function progress_bar_end()
   {
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>Cartera Recuperada :: JSON</TITLE>
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
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <?php
 if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts))
 {
 ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->str_google_fonts ?>" />
 <?php
 }
 ?>
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">JSON</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo_view ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_v_cartera_recuperada_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_v_cartera_recuperada"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./" style="display: none"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_cartera_recuperada']['json_return']); ?>"> 
</FORM> 
</BODY>
</HTML>
<?php
   }
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
}

?>
