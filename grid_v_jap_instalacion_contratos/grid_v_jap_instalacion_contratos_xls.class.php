<?php

class grid_v_jap_instalacion_contratos_xls
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $Xls_dados;
   var $Xls_workbook;
   var $Xls_col;
   var $Xls_row;
   var $sc_proc_grid; 
   var $NM_cmp_hidden = array();
   var $NM_ctrl_style = array();
   var $Arquivo;
   var $Tit_doc;
   var $count_ger;
   var $sum_valor;
   //---- 
   function __construct()
   {
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

   //---- 
   function monta_xls()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida']) {
          if ($this->Ini->sc_export_ajax)
          {
              $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Xls_f);
              $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
              $Temp = ob_get_clean();
              if ($Temp !== false && trim($Temp) != "")
              {
                  $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
              }
              $oJson = new Services_JSON();
              echo $oJson->encode($this->Arr_result);
              exit;
          }
          else
          {
              $this->progress_bar_end();
          }
      }
      else { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['opcao'] = "";
      }
   }

   //----- 
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
                   nm_limpa_str_grid_v_jap_instalacion_contratos($cadapar[1]);
                   nm_protect_num_grid_v_jap_instalacion_contratos($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_v_jap_instalacion_contratos']['opcao'] = $cadapar[1];
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
          nm_limpa_str_grid_v_jap_instalacion_contratos($_SESSION["Igtech_RucEmpresa"]);
      }
      if (!isset($var_RutaLogo) && isset($var_rutalogo)) 
      {
         $var_RutaLogo = $var_rutalogo;
      }
      if (isset($var_RutaLogo)) 
      {
          $_SESSION['var_RutaLogo'] = $var_RutaLogo;
          nm_limpa_str_grid_v_jap_instalacion_contratos($_SESSION["var_RutaLogo"]);
      }
      if (!isset($Igtech_NombreEmpresa) && isset($igtech_nombreempresa)) 
      {
         $Igtech_NombreEmpresa = $igtech_nombreempresa;
      }
      if (isset($Igtech_NombreEmpresa)) 
      {
          $_SESSION['Igtech_NombreEmpresa'] = $Igtech_NombreEmpresa;
          nm_limpa_str_grid_v_jap_instalacion_contratos($_SESSION["Igtech_NombreEmpresa"]);
      }
      $this->Use_phpspreadsheet = (phpversion() >=  "7.3.9" && is_dir($this->Ini->path_third . '/phpspreadsheet')) ? true : false;
      $this->Xls_tot_col = 0;
      $this->Xls_row     = 0;
      $this->New_Xls_row = 1;
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
      { 
          if ($this->Use_phpspreadsheet) {
              require_once $this->Ini->path_third . '/phpspreadsheet/vendor/autoload.php';
          } 
          else { 
              set_include_path(get_include_path() . PATH_SEPARATOR . $this->Ini->path_third . '/phpexcel/');
              require_once $this->Ini->path_third . '/phpexcel/PHPExcel.php';
              require_once $this->Ini->path_third . '/phpexcel/PHPExcel/IOFactory.php';
              require_once $this->Ini->path_third . '/phpexcel/PHPExcel/Cell/AdvancedValueBinder.php';
          } 
      } 
      $orig_form_dt = strtoupper($_SESSION['scriptcase']['reg_conf']['date_format']);
      $this->SC_date_conf_region = "";
      for ($i = 0; $i < 8; $i++)
      {
          if ($i > 0 && substr($orig_form_dt, $i, 1) != substr($this->SC_date_conf_region, -1, 1)) {
              $this->SC_date_conf_region .= $_SESSION['scriptcase']['reg_conf']['date_sep'];
          }
          $this->SC_date_conf_region .= substr($orig_form_dt, $i, 1);
      }
      $this->Xls_tp = ".xlsx";
      if (isset($_REQUEST['nmgp_tp_xls']) && !empty($_REQUEST['nmgp_tp_xls']))
      {
          $this->Xls_tp = "." . $_REQUEST['nmgp_tp_xls'];
      }
      $this->groupby_show = "S";
      if (isset($_REQUEST['nmgp_tot_xls']) && !empty($_REQUEST['nmgp_tot_xls']))
      {
          $this->groupby_show = $_REQUEST['nmgp_tot_xls'];
      }
      $this->Xls_col      = 0;
      $this->Tem_xls_res  = false;
      $this->Xls_password = "";
      $this->nm_data      = new nm_data("es");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
      { 
          $this->Tem_xls_res  = true;
          if (isset($_REQUEST['SC_module_export']) && $_REQUEST['SC_module_export'] != "")
          { 
              $this->Tem_xls_res = (strpos(" " . $_REQUEST['SC_module_export'], "resume") !== false || strpos(" " . $_REQUEST['SC_module_export'], "chart") !== false) ? true : false;
          } 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['SC_Ind_Groupby'] == "sc_free_total")
          {
              $this->Tem_xls_res  = false;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['SC_Gb_Free_cmp']))
          {
              $this->Tem_xls_res  = false;
          }
          if (!is_file($this->Ini->root . $this->Ini->path_link . "grid_v_jap_instalacion_contratos/grid_v_jap_instalacion_contratos_res_xls.class.php"))
          {
              $this->Tem_xls_res  = false;
          }
          if ($this->Tem_xls_res)
          { 
              require_once($this->Ini->path_aplicacao . "grid_v_jap_instalacion_contratos_res_xls.class.php");
              $this->Res_xls = new grid_v_jap_instalacion_contratos_res_xls();
              $this->prep_modulos("Res_xls");
          } 
          $this->Arquivo    = "sc_xls";
          $this->Arquivo   .= "_" . date("YmdHis") . "_" . rand(0, 1000);
          $this->Arq_zip    = $this->Arquivo . "_grid_v_jap_instalacion_contratos.zip";
          $this->Arquivo   .= "_grid_v_jap_instalacion_contratos" . $this->Xls_tp;
          $this->Tit_doc    = "grid_v_jap_instalacion_contratos" . $this->Xls_tp;
          $this->Tit_zip    = "grid_v_jap_instalacion_contratos.zip";
          $this->Xls_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
          $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
          if ($this->Use_phpspreadsheet) {
              $this->Xls_dados = new PhpOffice\PhpSpreadsheet\Spreadsheet();
              \PhpOffice\PhpSpreadsheet\Cell\Cell::setValueBinder( new \PhpOffice\PhpSpreadsheet\Cell\AdvancedValueBinder() );
          }
          else {
              PHPExcel_Cell::setValueBinder( new PHPExcel_Cell_AdvancedValueBinder() );
              $this->Xls_dados = new PHPExcel();
          }
          $this->Xls_dados->setActiveSheetIndex(0);
          $this->Nm_ActiveSheet = $this->Xls_dados->getActiveSheet();
          $this->Nm_ActiveSheet->setTitle($this->Ini->Nm_lang['lang_othr_grid_titl']);
          if ($_SESSION['scriptcase']['reg_conf']['css_dir'] == "RTL")
          {
              $this->Nm_ActiveSheet->setRightToLeft(true);
          }
      }
      require_once($this->Ini->path_aplicacao . "grid_v_jap_instalacion_contratos_total.class.php"); 
      $this->Tot = new grid_v_jap_instalacion_contratos_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['SC_Ind_Groupby'];
      $this->Tot->$Gb_geral();
      $this->count_ger = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['tot_geral'][1];
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['SC_Ind_Groupby'] == "sc_free_total")
      {
          $this->sum_valor = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['tot_geral'][2];
      }
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'] && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_v_jap_instalacion_contratos']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_return']);
          if ($this->Tem_xls_res) {
              $PB_plus = intval ($this->count_ger * 0.04);
              $PB_plus = ($PB_plus < 2) ? 2 : $PB_plus;
          }
          else {
              $PB_plus = intval ($this->count_ger * 0.02);
              $PB_plus = ($PB_plus < 1) ? 1 : $PB_plus;
          }
          $PB_tot = $this->count_ger + $PB_plus;
          $this->PB_dif = $PB_tot - $this->count_ger;
          $this->pb->setTotalSteps($PB_tot );
      }
   }
   //---- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }


   //----- 
   function grava_arquivo()
   {
      global $nm_nada, $nm_lang;

      $GLOBALS["script_case_init"] = $this->Ini->sc_page;
      $pos      = strrpos($this->Ini->link_grid_v_jap_emisiones_contratos_cons_emb, '/');
      $link_xls = substr($this->Ini->link_grid_v_jap_emisiones_contratos_cons_emb, 0, $pos) . "/grid_v_jap_emisiones_contratos_xls.class.php";
      if (!is_file($this->Ini->link_grid_v_jap_emisiones_contratos_cons_emb) || !is_file($link_xls))
      {
          $this->NM_cmp_hidden['grid_v_jap_emisiones_contratos'] = "off";
      }
      else
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = true;
          $_SESSION['scriptcase']['grid_v_jap_emisiones_contratos']['protect_modal'] = $this->Ini->sc_page;
          include_once ($this->Ini->link_grid_v_jap_emisiones_contratos_cons_emb);
          $this->grid_v_jap_emisiones_contratos = new grid_v_jap_emisiones_contratos_apl ;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = false;
          unset($_SESSION['scriptcase']['grid_v_jap_emisiones_contratos']['protect_modal']);
      }
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->sc_proc_grid = false; 
      $nm_raiz_img  = ""; 
      $this->New_label['fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
      $this->New_label['con_numero_contrato'] = "" . $this->Ini->Nm_lang['lang_numero_contrato'] . "";
      $this->New_label['cl_identificacion'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
      $this->New_label['cl_nombre'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
      $this->New_label['con_ruta'] = "" . $this->Ini->Nm_lang['lang_ruta'] . "";
      $this->New_label['con_tipo_servicio'] = "" . $this->Ini->Nm_lang['lang_tipo_servicio'] . "";
      $this->New_label['con_condicion_contrato'] = "" . $this->Ini->Nm_lang['lang_condicion_contrato'] . "";
      $this->New_label['con_numero_medidor'] = "" . $this->Ini->Nm_lang['lang_numero_medidor'] . "";
      $this->New_label['valor'] = "" . $this->Ini->Nm_lang['lang_valor'] . "";
      $this->New_label['detalles'] = "" . $this->Ini->Nm_lang['lang_materiales'] . "";
      $this->New_label['con_id'] = "" . $this->Ini->Nm_lang['lang_contrato'] . "";
      $this->New_label['con_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . "";
      $this->New_label['cl_id'] = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_v_jap_instalacion_contratos']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_v_jap_instalacion_contratos']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_v_jap_instalacion_contratos']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['field_order'] as $Cada_cmp)
      {
          if (!isset($this->NM_cmp_hidden[$Cada_cmp]) || $this->NM_cmp_hidden[$Cada_cmp] != "off")
          {
              $this->Xls_tot_col++;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
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
          $this->con_numero_contrato = (isset($Busca_temp['con_numero_contrato'])) ? $Busca_temp['con_numero_contrato'] : ""; 
          $tmp_pos = (is_string($this->con_numero_contrato)) ? strpos($this->con_numero_contrato, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->con_numero_contrato))
          {
              $this->con_numero_contrato = substr($this->con_numero_contrato, 0, $tmp_pos);
          }
          $this->con_numero_medidor = (isset($Busca_temp['con_numero_medidor'])) ? $Busca_temp['con_numero_medidor'] : ""; 
          $tmp_pos = (is_string($this->con_numero_medidor)) ? strpos($this->con_numero_medidor, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->con_numero_medidor))
          {
              $this->con_numero_medidor = substr($this->con_numero_medidor, 0, $tmp_pos);
          }
          $this->fecha = (isset($Busca_temp['fecha'])) ? $Busca_temp['fecha'] : ""; 
          $tmp_pos = (is_string($this->fecha)) ? strpos($this->fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fecha))
          {
              $this->fecha = substr($this->fecha, 0, $tmp_pos);
          }
          $this->fecha_2 = (isset($Busca_temp['fecha_input_2'])) ? $Busca_temp['fecha_input_2'] : ""; 
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'] .= $this->Xls_tp;
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_name']);
          $this->Xls_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
          $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida_label']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida_label'])
      { 
          $this->count_span = 0;
          $this->Xls_row++;
          $this->proc_label();
          $_SESSION['scriptcase']['export_return'] = $this->arr_export;
          return;
      } 
      $this->nm_field_dinamico = array();
      $this->nm_order_dinamico = array();
      $nmgp_select_count = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela; 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
          $nmgp_select = "SELECT str_replace (convert(char(10),fecha,102), '.', '-') + ' ' + convert(char(8),fecha,20), con_numero_contrato, cl_identificacion, cl_nombre, con_ruta, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, valor, con_id, con_empresa, cl_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT fecha, con_numero_contrato, cl_identificacion, cl_nombre, con_ruta, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, valor, con_id, con_empresa, cl_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT convert(char(23),fecha,121), con_numero_contrato, cl_identificacion, cl_nombre, con_ruta, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, valor, con_id, con_empresa, cl_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT fecha, con_numero_contrato, cl_identificacion, cl_nombre, con_ruta, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, valor, con_id, con_empresa, cl_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT EXTEND(fecha, YEAR TO DAY), con_numero_contrato, cl_identificacion, cl_nombre, con_ruta, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, valor, con_id, con_empresa, cl_id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT fecha, con_numero_contrato, cl_identificacion, cl_nombre, con_ruta, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, valor, con_id, con_empresa, cl_id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['order_grid'];
      $nmgp_select .= $nmgp_order_by; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select;
      $rs = $this->Db->Execute($nmgp_select);
      if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1)
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
         exit;
      }
      if (!$rs->EOF)
      {
         $this->fecha = $rs->fields[0] ;  
         $this->con_numero_contrato = $rs->fields[1] ;  
         $this->cl_identificacion = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->con_ruta = $rs->fields[4] ;  
         $this->con_ruta = (string)$this->con_ruta;
         $this->con_tipo_servicio = $rs->fields[5] ;  
         $this->con_tipo_servicio = (string)$this->con_tipo_servicio;
         $this->con_condicion_contrato = $rs->fields[6] ;  
         $this->con_condicion_contrato = (string)$this->con_condicion_contrato;
         $this->con_numero_medidor = $rs->fields[7] ;  
         $this->valor = $rs->fields[8] ;  
         $this->valor = (string)$this->valor;
         $this->con_id = $rs->fields[9] ;  
         $this->con_id = (string)$this->con_id;
         $this->con_empresa = $rs->fields[10] ;  
         $this->cl_id = $rs->fields[11] ;  
         $this->cl_id = (string)$this->cl_id;
         $this->Orig_fecha = $this->fecha;
         $this->Orig_con_numero_contrato = $this->con_numero_contrato;
         $this->Orig_cl_identificacion = $this->cl_identificacion;
         $this->Orig_cl_nombre = $this->cl_nombre;
         $this->Orig_con_ruta = $this->con_ruta;
         $this->Orig_con_tipo_servicio = $this->con_tipo_servicio;
         $this->Orig_con_condicion_contrato = $this->con_condicion_contrato;
         $this->Orig_con_numero_medidor = $this->con_numero_medidor;
         $this->Orig_valor = $this->valor;
         $this->Orig_con_id = $this->con_id;
         $this->Orig_con_empresa = $this->con_empresa;
         $this->Orig_cl_id = $this->cl_id;
   $_SESSION['scriptcase']['grid_v_jap_instalacion_contratos']['contr_erro'] = 'on';
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
$_SESSION['scriptcase']['grid_v_jap_instalacion_contratos']['contr_erro'] = 'off';
      }
      $this->SC_seq_register = 0;
      $prim_reg = true;
      $prim_gb  = true;
      $nm_houve_quebra = "N";
      $this->New_Xls_row = $this->Xls_row;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         $prim_reg = false;
         if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'] && !$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->Xls_col = 0;
         if ($this->New_Xls_row > $this->Xls_row) {
             $this->Xls_row = $this->New_Xls_row;
         }
         $this->Xls_row++;
         $this->fecha = $rs->fields[0] ;  
         $this->con_numero_contrato = $rs->fields[1] ;  
         $this->cl_identificacion = $rs->fields[2] ;  
         $this->cl_nombre = $rs->fields[3] ;  
         $this->con_ruta = $rs->fields[4] ;  
         $this->con_ruta = (string)$this->con_ruta;
         $this->con_tipo_servicio = $rs->fields[5] ;  
         $this->con_tipo_servicio = (string)$this->con_tipo_servicio;
         $this->con_condicion_contrato = $rs->fields[6] ;  
         $this->con_condicion_contrato = (string)$this->con_condicion_contrato;
         $this->con_numero_medidor = $rs->fields[7] ;  
         $this->valor = $rs->fields[8] ;  
         $this->valor = (string)$this->valor;
         $this->con_id = $rs->fields[9] ;  
         $this->con_id = (string)$this->con_id;
         $this->con_empresa = $rs->fields[10] ;  
         $this->cl_id = $rs->fields[11] ;  
         $this->cl_id = (string)$this->cl_id;
         $this->Orig_fecha = $this->fecha;
         $this->Orig_con_numero_contrato = $this->con_numero_contrato;
         $this->Orig_cl_identificacion = $this->cl_identificacion;
         $this->Orig_cl_nombre = $this->cl_nombre;
         $this->Orig_con_ruta = $this->con_ruta;
         $this->Orig_con_tipo_servicio = $this->con_tipo_servicio;
         $this->Orig_con_condicion_contrato = $this->con_condicion_contrato;
         $this->Orig_con_numero_medidor = $this->con_numero_medidor;
         $this->Orig_valor = $this->valor;
         $this->Orig_con_id = $this->con_id;
         $this->Orig_con_empresa = $this->con_empresa;
         $this->Orig_cl_id = $this->cl_id;
     if ($this->groupby_show == "S") {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
         { 
             if ($prim_gb) {
                 $this->count_span = 0;
                 $this->proc_label();
             }
             if ($prim_gb || $nm_houve_quebra == "S") {
                 $this->xls_sub_cons_copy_label($this->Xls_row);
                 $this->Xls_row++;
             }
         }
         elseif ($prim_gb || $nm_houve_quebra == "S")
         {
             $this->count_span = 0;
             $this->proc_label();
         }
     }
     else {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
         { 
             if ($prim_gb)
             {
                 $this->count_span = 0;
                 $this->proc_label();
                 $this->xls_sub_cons_copy_label($this->Xls_row);
                 $this->Xls_row++;
             }
         }
         elseif ($prim_gb)
         {
             $this->count_span = 0;
             $this->proc_label();
         }
     }
     $prim_gb = false;
     $nm_houve_quebra = "N";
         //----- lookup - con_ruta
         $this->look_con_ruta = $this->con_ruta; 
         $this->Lookup->lookup_con_ruta($this->look_con_ruta, $this->con_ruta) ; 
         $this->look_con_ruta = ($this->look_con_ruta == "&nbsp;") ? "" : $this->look_con_ruta; 
         //----- lookup - con_tipo_servicio
         $this->look_con_tipo_servicio = $this->con_tipo_servicio; 
         $this->Lookup->lookup_con_tipo_servicio($this->look_con_tipo_servicio, $this->con_tipo_servicio) ; 
         $this->look_con_tipo_servicio = ($this->look_con_tipo_servicio == "&nbsp;") ? "" : $this->look_con_tipo_servicio; 
         //----- lookup - con_condicion_contrato
         $this->look_con_condicion_contrato = $this->con_condicion_contrato; 
         $this->Lookup->lookup_con_condicion_contrato($this->look_con_condicion_contrato, $this->con_condicion_contrato) ; 
         $this->look_con_condicion_contrato = ($this->look_con_condicion_contrato == "&nbsp;") ? "" : $this->look_con_condicion_contrato; 
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_v_jap_instalacion_contratos']['contr_erro'] = 'on';
 $this->detalles ="<button type='button' class='scButton_default'><i class='fas fa-list-ol'></i></button>";


$_SESSION['scriptcase']['grid_v_jap_instalacion_contratos']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['field_order'] as $Cada_col)
         { 
            if (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off")
            { 
                if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
                { 
                    $NM_func_exp = "NM_sub_cons_" . $Cada_col;
                    $this->$NM_func_exp();
                } 
                else 
                { 
                    $NM_func_exp = "NM_export_" . $Cada_col;
                    $this->$NM_func_exp();
                } 
            } 
         } 
         if (!isset($this->NM_cmp_hidden["grid_v_jap_emisiones_contratos"]) || $this->NM_cmp_hidden["grid_v_jap_emisiones_contratos"] != "off")
         { 
             $this->xls_set_style();
             $this->NM_export_grid_v_jap_emisiones_contratos();
             if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
             { 
                 $this->Xls_row++;
                 $this->arr_export['lines'][$this->Xls_row] = $this->Rows_sub_grid_v_jap_emisiones_contratos['label'];
                 foreach ($this->Rows_sub_grid_v_jap_emisiones_contratos['lines'] as $line => $cols)
                 {
                     $this->Xls_row++;
                     $this->arr_export['lines'][$this->Xls_row] = $cols;
                 }
             }
             else 
             { 
                 if ($this->New_Xls_row > $this->Xls_row) {
                     $this->Xls_row = $this->New_Xls_row;
                 }
                 $_SESSION['scriptcase']['export_return']['label'] = $this->Rows_sub_grid_v_jap_emisiones_contratos['label'];
                 foreach ($this->Rows_sub_grid_v_jap_emisiones_contratos['lines'] as $line)
                 {
                     $this->Xls_col = 0;
                     $this->Xls_row++;
                     $this->xls_sub_cons_lines($line);
                 }
             }
         } 
         if (isset($this->NM_Row_din) && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
         { 
             foreach ($this->NM_Row_din as $row => $height) 
             { 
                 $this->Nm_ActiveSheet->getRowDimension($row)->setRowHeight($height);
             } 
         } 
         $rs->MoveNext();
      }
      $this->xls_set_style();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'] && $prim_reg)
      { 
          $this->proc_label();
          $this->xls_sub_cons_copy_label($this->Xls_row);
          $nm_grid_sem_reg = $this->Ini->Nm_lang['lang_errm_empt']; 
          $nm_grid_sem_reg  = NM_charset_to_utf8($nm_grid_sem_reg);
          $this->Xls_row++;
          $this->arr_export['lines'][$this->Xls_row][1]['data']   = $nm_grid_sem_reg;
          $this->arr_export['lines'][$this->Xls_row][1]['align']  = "right";
          $this->arr_export['lines'][$this->Xls_row][1]['type']   = "char";
          $this->arr_export['lines'][$this->Xls_row][1]['format'] = "";
      }
      if (isset($this->NM_Col_din) && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
      { 
          foreach ($this->NM_Col_din as $col => $width)
          { 
              $this->Nm_ActiveSheet->getColumnDimension($col)->setWidth($width / 5);
          } 
      } 
      if ($this->groupby_show == "S") {
          if ($this->New_Xls_row > $this->Xls_row) {
              $this->Xls_row = $this->New_Xls_row;
          }
          $this->Xls_col = 0;
          $this->Xls_row++;
          $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['SC_Ind_Groupby'] . "_bot";
          $this->$Gb_geral();
      }
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
      { 
          if ($this->Tem_xls_res)
          { 
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_res_grid'] = true;
              if (!$this->Ini->sc_export_ajax) {
                  $this->PB_dif = intval ($this->PB_dif / 2);
                  $Mens_bar  = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
                  $Mens_smry = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_smry_titl']);
                  $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
                  $this->pb->addSteps($this->PB_dif);
              }
              $this->Res_xls->monta_xls();
              if ($this->Use_phpspreadsheet) {
                  $Xls_res = \PhpOffice\PhpSpreadsheet\IOFactory::load($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_res_sheet']);
              }
              else {
                  $Xls_res = PHPExcel_IOFactory::load($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_res_sheet']);
              }
              foreach($Xls_res->getAllSheets() as $sheet)
              {
                  $this->Xls_dados->addExternalSheet($sheet);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_res_grid']);
              unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_res_sheet']);
          } 
          if (!$this->Ini->sc_export_ajax) {
              $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_btns_export_finished']);
              $this->pb->setProgressbarMessage($Mens_bar);
              $this->pb->addSteps($this->PB_dif);
          }
          if ($this->Use_phpspreadsheet) {
              if ($this->Xls_tp == ".xlsx") {
                  $objWriter = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($this->Xls_dados);
              } 
              else {
                  $objWriter = new PhpOffice\PhpSpreadsheet\Writer\Xls($this->Xls_dados);
              } 
          } 
          else {
              if ($this->Xls_tp == ".xlsx") {
                  $objWriter = new PHPExcel_Writer_Excel2007($this->Xls_dados);
              } 
              else {
                  $objWriter = new PHPExcel_Writer_Excel5($this->Xls_dados);
              } 
          } 
          $objWriter->save($this->Xls_f);
          if ($this->Xls_password != "")
          { 
              $str_zip   = "";
              $Zip_f     = (FALSE !== strpos($this->Zip_f, ' ')) ? " \"" . $this->Zip_f . "\"" :  $this->Zip_f;
              $Arq_input = (FALSE !== strpos($this->Xls_f, ' ')) ? " \"" . $this->Xls_f . "\"" :  $this->Xls_f;
              if (is_file($Zip_f)) {
                  unlink($Zip_f);
              }
              if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
              {
                  chdir($this->Ini->path_third . "/zip/windows");
                  $str_zip = "zip.exe -P -j " . $this->Xls_password . " " . $Zip_f . " " . $Arq_input;
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
                  $str_zip = "./7za -p" . $this->Xls_password . " a " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
              {
                  chdir($this->Ini->path_third . "/zip/mac/bin");
                  $str_zip = "./7za -p" . $this->Xls_password . " a " . $Zip_f . " " . $Arq_input;
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
              $this->Xls_f   = $this->Zip_f;
              $this->Tit_doc = $this->Tit_zip;
          } 
      } 
      else 
      { 
          $_SESSION['scriptcase']['export_return'] = $this->arr_export;
      } 
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
      if (isset($this->grid_v_jap_emisiones_contratos) && method_exists($this->grid_v_jap_emisiones_contratos, "close_emb")) 
      {
          $this->grid_v_jap_emisiones_contratos->close_emb();
      }
   }
   function proc_label()
   { 
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['field_order'] as $Cada_col)
      { 
          $SC_Label = (isset($this->New_label['fecha'])) ? $this->New_label['fecha'] : ""; 
          if ($Cada_col == "fecha" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['con_numero_contrato'])) ? $this->New_label['con_numero_contrato'] : ""; 
          if ($Cada_col == "con_numero_contrato" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['cl_identificacion'])) ? $this->New_label['cl_identificacion'] : ""; 
          if ($Cada_col == "cl_identificacion" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : ""; 
          if ($Cada_col == "cl_nombre" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['con_ruta'])) ? $this->New_label['con_ruta'] : ""; 
          if ($Cada_col == "con_ruta" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['con_tipo_servicio'])) ? $this->New_label['con_tipo_servicio'] : ""; 
          if ($Cada_col == "con_tipo_servicio" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['con_condicion_contrato'])) ? $this->New_label['con_condicion_contrato'] : ""; 
          if ($Cada_col == "con_condicion_contrato" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['con_numero_medidor'])) ? $this->New_label['con_numero_medidor'] : ""; 
          if ($Cada_col == "con_numero_medidor" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['valor'])) ? $this->New_label['valor'] : ""; 
          if ($Cada_col == "valor" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['detalles'])) ? $this->New_label['detalles'] : ""; 
          if ($Cada_col == "detalles" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['grid_v_jap_emisiones_contratos'])) ? $this->New_label['grid_v_jap_emisiones_contratos'] : "grid_v_jap_emisiones_contratos"; 
          if ((!isset($this->NM_cmp_hidden['grid_v_jap_emisiones_contratos']) || $this->NM_cmp_hidden['grid_v_jap_emisiones_contratos'] != "off") && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->arr_span['grid_v_jap_emisiones_contratos'] = $this->count_span;
              $this->Emb_label_cols_grid_v_jap_emisiones_contratos = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = true;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida_label'] = true;
              $GLOBALS["script_case_init"] = $this->Ini->sc_page;
              $GLOBALS["nmgp_parms"] = "nmgp_opcao?#?xls?@?";
              if (method_exists($this->grid_v_jap_emisiones_contratos, "controle"))
              {
                  $this->grid_v_jap_emisiones_contratos->controle();
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
                  {
                      $this->Ini->conectDB();
                      $this->Db = $this->Ini->Db;
                      if ($this->Tot) {
                          $this->Tot->Db = $this->Db;
                      }
                  }
                  if (isset($_SESSION['scriptcase']['export_return']))
                  {
                     foreach ($_SESSION['scriptcase']['export_return']['label'] as $col => $dados)
                     {
                         if (isset($dados['col_span_i'])) {
                             $this->Emb_label_cols_grid_v_jap_emisiones_contratos += $dados['col_span_i'];
                         }
                         elseif (isset($dados['col_span_f'])) {
                             $this->Emb_label_cols_grid_v_jap_emisiones_contratos += $dados['col_span_f'];
                         }
                         else {
                             $this->Emb_label_cols_grid_v_jap_emisiones_contratos++;
                         }
                     }
                  }
              }
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = false;
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida_label'] = false;
          }
          $SC_Label = (isset($this->New_label['con_id'])) ? $this->New_label['con_id'] : ""; 
          if ($Cada_col == "con_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['con_empresa'])) ? $this->New_label['con_empresa'] : ""; 
          if ($Cada_col == "con_empresa" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
          $SC_Label = (isset($this->New_label['cl_id'])) ? $this->New_label['cl_id'] : ""; 
          if ($Cada_col == "cl_id" && (!isset($this->NM_cmp_hidden[$Cada_col]) || $this->NM_cmp_hidden[$Cada_col] != "off"))
          {
              $this->count_span++;
              $current_cell_ref = $this->calc_cell($this->Xls_col);
              $SC_Label = NM_charset_to_utf8($SC_Label);
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
              { 
                  $this->arr_export['label'][$this->Xls_col]['data']     = $SC_Label;
                  $this->arr_export['label'][$this->Xls_col]['align']    = "right";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->arr_export['label'][$this->Xls_col]['bold']     = "s";
              }
              else
              { 
                  if ($this->Use_phpspreadsheet) {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                  }
                  else {
                      $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                      $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $SC_Label, PHPExcel_Cell_DataType::TYPE_STRING);
                  }
                  $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                  $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
              }
              $this->Xls_col++;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida'])
      { 
          if (!isset($this->NM_cmp_hidden[$grid_v_jap_emisiones_contratos]) || $this->NM_cmp_hidden[$grid_v_jap_emisiones_contratos] != "off")
          {
              while ($this->count_span < $this->Emb_label_cols_grid_v_jap_emisiones_contratos)
              {
                  $this->arr_export['label'][$this->Xls_col]['data']     = " ";
                  $this->arr_export['label'][$this->Xls_col]['align']    = "left";
                  $this->arr_export['label'][$this->Xls_col]['autosize'] = "s";
                  $this->count_span++;
                  $this->Xls_col++;
              }
          }
      }
      $this->Xls_col = 0;
      $this->Xls_row++;
   } 
   //----- fecha
   function NM_export_fecha()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->fecha = substr($this->fecha, 0, 10);
         if (empty($this->fecha) || $this->fecha == "0000-00-00")
         {
             if ($this->Use_phpspreadsheet) {
                 $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->fecha, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
             }
             else {
                 $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->fecha, PHPExcel_Cell_DataType::TYPE_STRING);
             }
         }
         else
         {
             $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->fecha);
             $this->NM_ctrl_style[$current_cell_ref]['format'] = $this->SC_date_conf_region;
         }
         $this->Xls_col++;
   }
   //----- con_numero_contrato
   function NM_export_con_numero_contrato()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->con_numero_contrato = html_entity_decode($this->con_numero_contrato, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->con_numero_contrato = strip_tags($this->con_numero_contrato);
         $this->con_numero_contrato = NM_charset_to_utf8($this->con_numero_contrato);
         if ($this->Use_phpspreadsheet) {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->con_numero_contrato, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
         }
         else {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->con_numero_contrato, PHPExcel_Cell_DataType::TYPE_STRING);
         }
         $this->Xls_col++;
   }
   //----- cl_identificacion
   function NM_export_cl_identificacion()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->cl_identificacion = html_entity_decode($this->cl_identificacion, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cl_identificacion = strip_tags($this->cl_identificacion);
         $this->cl_identificacion = NM_charset_to_utf8($this->cl_identificacion);
         if ($this->Use_phpspreadsheet) {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->cl_identificacion, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
         }
         else {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->cl_identificacion, PHPExcel_Cell_DataType::TYPE_STRING);
         }
         $this->Xls_col++;
   }
   //----- cl_nombre
   function NM_export_cl_nombre()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->cl_nombre = html_entity_decode($this->cl_nombre, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cl_nombre = strip_tags($this->cl_nombre);
         $this->cl_nombre = NM_charset_to_utf8($this->cl_nombre);
         if ($this->Use_phpspreadsheet) {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->cl_nombre, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
         }
         else {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->cl_nombre, PHPExcel_Cell_DataType::TYPE_STRING);
         }
         $this->Xls_col++;
   }
   //----- con_ruta
   function NM_export_con_ruta()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "RIGHT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->look_con_ruta = NM_charset_to_utf8($this->look_con_ruta);
         if (is_numeric($this->look_con_ruta))
         {
             $this->NM_ctrl_style[$current_cell_ref]['format'] = '#,##0';
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->look_con_ruta);
         $this->Xls_col++;
   }
   //----- con_tipo_servicio
   function NM_export_con_tipo_servicio()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "RIGHT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->look_con_tipo_servicio = NM_charset_to_utf8($this->look_con_tipo_servicio);
         if (is_numeric($this->look_con_tipo_servicio))
         {
             $this->NM_ctrl_style[$current_cell_ref]['format'] = '#,##0';
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->look_con_tipo_servicio);
         $this->Xls_col++;
   }
   //----- con_condicion_contrato
   function NM_export_con_condicion_contrato()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "RIGHT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->look_con_condicion_contrato = NM_charset_to_utf8($this->look_con_condicion_contrato);
         if (is_numeric($this->look_con_condicion_contrato))
         {
             $this->NM_ctrl_style[$current_cell_ref]['format'] = '#,##0';
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->look_con_condicion_contrato);
         $this->Xls_col++;
   }
   //----- con_numero_medidor
   function NM_export_con_numero_medidor()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->con_numero_medidor = html_entity_decode($this->con_numero_medidor, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->con_numero_medidor = strip_tags($this->con_numero_medidor);
         $this->con_numero_medidor = NM_charset_to_utf8($this->con_numero_medidor);
         if ($this->Use_phpspreadsheet) {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->con_numero_medidor, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
         }
         else {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->con_numero_medidor, PHPExcel_Cell_DataType::TYPE_STRING);
         }
         $this->Xls_col++;
   }
   //----- valor
   function NM_export_valor()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "RIGHT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->valor = NM_charset_to_utf8($this->valor);
         if (is_numeric($this->valor))
         {
             $this->NM_ctrl_style[$current_cell_ref]['format'] = '#,##0.00';
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->valor);
         $this->Xls_col++;
   }
   //----- detalles
   function NM_export_detalles()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->detalles = html_entity_decode($this->detalles, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->detalles = strip_tags($this->detalles);
         $this->detalles = NM_charset_to_utf8($this->detalles);
         if ($this->Use_phpspreadsheet) {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->detalles, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
         }
         else {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->detalles, PHPExcel_Cell_DataType::TYPE_STRING);
         }
         $this->Xls_col++;
   }
   //----- grid_v_jap_emisiones_contratos
   function NM_export_grid_v_jap_emisiones_contratos()
   {
         $GLOBALS["script_case_init"] = $this->Ini->sc_page;
         $GLOBALS["nmgp_parms"] = "nmgp_opcao?#?xls?@?var_contrato?#?" . str_replace("'", "@aspass@", $this->Orig_con_id) . "?@?";
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = true;
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['nolabel'] = true;
         if (method_exists($this->grid_v_jap_emisiones_contratos, "controle"))
         {
             $this->grid_v_jap_emisiones_contratos->controle();
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
             {
                 $this->Ini->conectDB();
                 $this->Db = $this->Ini->Db;
                 if ($this->Tot) {
                     $this->Tot->Db = $this->Db;
                 }
             }
             if (isset($_SESSION['scriptcase']['export_return']))
             {
                 $this->Rows_sub_grid_v_jap_emisiones_contratos = $_SESSION['scriptcase']['export_return'];
                 return;
             }
         }
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = false;
   }
   //----- con_id
   function NM_export_con_id()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "RIGHT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->con_id = NM_charset_to_utf8($this->con_id);
         if (is_numeric($this->con_id))
         {
             $this->NM_ctrl_style[$current_cell_ref]['format'] = '#,##0';
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->con_id);
         $this->Xls_col++;
   }
   //----- con_empresa
   function NM_export_con_empresa()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "LEFT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->con_empresa = html_entity_decode($this->con_empresa, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->con_empresa = strip_tags($this->con_empresa);
         $this->con_empresa = NM_charset_to_utf8($this->con_empresa);
         if ($this->Use_phpspreadsheet) {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->con_empresa, \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
         }
         else {
             $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $this->con_empresa, PHPExcel_Cell_DataType::TYPE_STRING);
         }
         $this->Xls_col++;
   }
   //----- cl_id
   function NM_export_cl_id()
   {
         $current_cell_ref = $this->calc_cell($this->Xls_col);
         if (!isset($this->NM_ctrl_style[$current_cell_ref])) {
             $this->NM_ctrl_style[$current_cell_ref]['ini'] = $this->Xls_row;
             $this->NM_ctrl_style[$current_cell_ref]['align'] = "RIGHT"; 
         }
         $this->NM_ctrl_style[$current_cell_ref]['end'] = $this->Xls_row;
         $this->cl_id = NM_charset_to_utf8($this->cl_id);
         if (is_numeric($this->cl_id))
         {
             $this->NM_ctrl_style[$current_cell_ref]['format'] = '#,##0';
         }
         $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $this->cl_id);
         $this->Xls_col++;
   }
   //----- fecha
   function NM_sub_cons_fecha()
   {
         $this->fecha = substr($this->fecha, 0, 10);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->fecha;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "data";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = $this->SC_date_conf_region;
         $this->Xls_col++;
   }
   //----- con_numero_contrato
   function NM_sub_cons_con_numero_contrato()
   {
         $this->con_numero_contrato = html_entity_decode($this->con_numero_contrato, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->con_numero_contrato = strip_tags($this->con_numero_contrato);
         $this->con_numero_contrato = NM_charset_to_utf8($this->con_numero_contrato);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->con_numero_contrato;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- cl_identificacion
   function NM_sub_cons_cl_identificacion()
   {
         $this->cl_identificacion = html_entity_decode($this->cl_identificacion, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cl_identificacion = strip_tags($this->cl_identificacion);
         $this->cl_identificacion = NM_charset_to_utf8($this->cl_identificacion);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->cl_identificacion;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- cl_nombre
   function NM_sub_cons_cl_nombre()
   {
         $this->cl_nombre = html_entity_decode($this->cl_nombre, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->cl_nombre = strip_tags($this->cl_nombre);
         $this->cl_nombre = NM_charset_to_utf8($this->cl_nombre);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->cl_nombre;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- con_ruta
   function NM_sub_cons_con_ruta()
   {
         $this->look_con_ruta = NM_charset_to_utf8($this->look_con_ruta);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->look_con_ruta;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "#,##0";
         $this->Xls_col++;
   }
   //----- con_tipo_servicio
   function NM_sub_cons_con_tipo_servicio()
   {
         $this->look_con_tipo_servicio = NM_charset_to_utf8($this->look_con_tipo_servicio);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->look_con_tipo_servicio;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "#,##0";
         $this->Xls_col++;
   }
   //----- con_condicion_contrato
   function NM_sub_cons_con_condicion_contrato()
   {
         $this->look_con_condicion_contrato = NM_charset_to_utf8($this->look_con_condicion_contrato);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->look_con_condicion_contrato;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "#,##0";
         $this->Xls_col++;
   }
   //----- con_numero_medidor
   function NM_sub_cons_con_numero_medidor()
   {
         $this->con_numero_medidor = html_entity_decode($this->con_numero_medidor, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->con_numero_medidor = strip_tags($this->con_numero_medidor);
         $this->con_numero_medidor = NM_charset_to_utf8($this->con_numero_medidor);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->con_numero_medidor;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- valor
   function NM_sub_cons_valor()
   {
         $this->valor = NM_charset_to_utf8($this->valor);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->valor;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "#,##0.00";
         $this->Xls_col++;
   }
   //----- detalles
   function NM_sub_cons_detalles()
   {
         $this->detalles = html_entity_decode($this->detalles, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->detalles = strip_tags($this->detalles);
         $this->detalles = NM_charset_to_utf8($this->detalles);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->detalles;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- grid_v_jap_emisiones_contratos
   function NM_sub_cons_grid_v_jap_emisiones_contratos()
   {
         $this->Rows_sub_grid_v_jap_emisiones_contratos = array();
         $GLOBALS["script_case_init"] = $this->Ini->sc_page;
         $GLOBALS["nmgp_parms"] = "nmgp_opcao?#?xls?@?var_contrato?#?" . str_replace("'", "@aspass@", $this->Orig_con_id) . "?@?";
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = true;
         if (method_exists($this->grid_v_jap_emisiones_contratos, "controle"))
         {
             $this->grid_v_jap_emisiones_contratos->controle();
             if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
             {
                 $this->Ini->conectDB();
                 $this->Db = $this->Ini->Db;
                 if ($this->Tot) {
                     $this->Tot->Db = $this->Db;
                 }
             }
             if (isset($_SESSION['scriptcase']['export_return']))
             {
                 $this->row_sub = 1;
             $this->Rows_sub_grid_v_jap_emisiones_contratos = $_SESSION['scriptcase']['export_return'];
             return;
             }
         }
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_emisiones_contratos']['embutida'] = false;
         $this->Xls_col++;
   }
   //----- con_id
   function NM_sub_cons_con_id()
   {
         $this->con_id = NM_charset_to_utf8($this->con_id);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->con_id;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "#,##0";
         $this->Xls_col++;
   }
   //----- con_empresa
   function NM_sub_cons_con_empresa()
   {
         $this->con_empresa = html_entity_decode($this->con_empresa, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
         $this->con_empresa = strip_tags($this->con_empresa);
         $this->con_empresa = NM_charset_to_utf8($this->con_empresa);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->con_empresa;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
         $this->Xls_col++;
   }
   //----- cl_id
   function NM_sub_cons_cl_id()
   {
         $this->cl_id = NM_charset_to_utf8($this->cl_id);
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $this->cl_id;
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
         $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "#,##0";
         $this->Xls_col++;
   }
   function xls_sub_cons_copy_label($row)
   {
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['nolabel']) || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['nolabel'])
       {
           foreach ($this->arr_export['label'] as $col => $dados)
           {
               $this->arr_export['lines'][$row][$col] = $dados;
           }
       }
   }
   function xls_set_style()
   {
       if (!empty($this->NM_ctrl_style))
       {
           foreach ($this->NM_ctrl_style as $col => $dados)
           {
               $cell_ref = $col . $dados['ini'] . ":" . $col . $dados['end'];
               if ($this->Use_phpspreadsheet) {
                   if ($dados['align'] == "LEFT") {
                       $this->Nm_ActiveSheet->getStyle($cell_ref)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                   }
                   elseif ($dados['align'] == "RIGHT") {
                       $this->Nm_ActiveSheet->getStyle($cell_ref)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                   }
                   else {
                       $this->Nm_ActiveSheet->getStyle($cell_ref)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                   }
               }
               else {
                   if ($dados['align'] == "LEFT") {
                       $this->Nm_ActiveSheet->getStyle($cell_ref)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                   }
                   elseif ($dados['align'] == "RIGHT") {
                       $this->Nm_ActiveSheet->getStyle($cell_ref)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                   }
                   else {
                       $this->Nm_ActiveSheet->getStyle($cell_ref)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                   }
               }
               if (isset($dados['format'])) {
                   $this->Nm_ActiveSheet->getStyle($cell_ref)->getNumberFormat()->setFormatCode($dados['format']);
               }
           }
           $this->NM_ctrl_style = array();
       }
   }
   function xls_sub_cons_label($lines)
   {
         foreach ($lines as $col => $dados)
         {
             if (isset($dados['col_span_i'])) {
                 $this->Xls_col += $dados['col_span_i'];
             }
             $current_cell_ref = $this->calc_cell($this->Xls_col);
             if ($this->Use_phpspreadsheet) {
                 if ($dados['align'] == 'center') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                 }
                 elseif ($dados['align'] == 'left') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                 }
                 else {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                 }
             }
             else {
                 if ($dados['align'] == 'center') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 }
                 elseif ($dados['align'] == 'left') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                 }
                 else {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                 }
             }
             $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $dados['data']);
             $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
             if ($dados['autosize'] == 's') {
                 $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
             }
             if (isset($dados['col_span_f'])) {
                 $this->Xls_col += $dados['col_span_f'];
             }
             else {
                 $this->Xls_col++;
             }
         }
   }
   function xls_sub_cons_lines($lines)
   {
         foreach ($lines as $icol => $dados)
         {
             if (isset($dados['col_span_i'])) {
                 $this->Xls_col += $dados['col_span_i'];
             }
             if (isset($dados['Fgroup'])) {
                 $this->Xls_col += $dados['Fgroup'];
             }
             $current_cell_ref = $this->calc_cell($this->Xls_col);
             if ($this->Use_phpspreadsheet) {
                 if ($dados['align'] == 'center') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                 }
                 elseif ($dados['align'] == 'left') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                 }
                 else {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                 }
             }
             else {
                 if ($dados['align'] == 'center') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                 }
                 elseif ($dados['align'] == 'left') {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                 }
                 else {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                 }
             }
             if ($dados['type'] == 'img') {
                 if (is_file($dados['data']))
                 { 
                     $sc_obj_img = new nm_trata_img($dados['data']);
                     $nm_image_altura  = $sc_obj_img->getHeight();
                     $nm_image_largura = $sc_obj_img->getWidth();
                     if ($this->Use_phpspreadsheet) {
                         $objDrawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
                     }
                     else {
                         $objDrawing = new PHPExcel_Worksheet_Drawing();
                     }
                     if (!empty($dados['name'])) {
                         $objDrawing->setName($dados['name']);
                     } 
                     $objDrawing->setPath($dados['data']);
                     $objDrawing->setHeight($nm_image_altura);
                     $col = $current_cell_ref;
                     $objDrawing->setCoordinates($col . $this->Xls_row);
                     $objDrawing->setWorksheet($this->Nm_ActiveSheet);
                     if (!isset($this->NM_Col_din[$col]) || $this->NM_Col_din[$col] < $nm_image_largura)
                     { 
                         $this->NM_Col_din[$col] = $nm_image_largura;
                     } 
                     if (!isset($this->NM_Row_din[$this->Xls_row]) || $this->NM_Row_din[$this->Xls_row] < $nm_image_altura)
                     { 
                         $this->NM_Row_din[$this->Xls_row] = $nm_image_altura;
                     } 
                 } 
                 else 
                 { 
                     if ($this->Use_phpspreadsheet) {
                         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                     }
                     else {
                         $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                     }
                     $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, ' ');
                 } 
             } 
             elseif ($dados['type'] == 'data') {
                 if (empty($dados['data']) || $dados['data'] == "0000-00-00") {
                     if ($this->Use_phpspreadsheet) {
                         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $dados['data'], \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                     }
                     else {
                         $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $dados['data'], PHPExcel_Cell_DataType::TYPE_STRING);
                     }
                 }
                 else {
                     $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $dados['data']);
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getNumberFormat()->setFormatCode($dados['format']);
                 }
             } 
             elseif ($dados['type'] == 'num') {
                 if (is_numeric($dados['data'])) {
                     $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getNumberFormat()->setFormatCode($dados['format']);
                 }
                 $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $dados['data']);
             } 
             else { 
                 if ($this->Use_phpspreadsheet) {
                     $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $dados['data'], \PhpOffice\PhpSpreadsheet\Cell\DataType::TYPE_STRING);
                 }
                 else {
                    $this->Nm_ActiveSheet->setCellValueExplicit($current_cell_ref . $this->Xls_row, $dados['data'], PHPExcel_Cell_DataType::TYPE_STRING);
                 }
             } 
             if (isset($dados['bold'])){ 
                 $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
             } 
             if ($dados['autosize'] == 's') {
                 $this->Nm_ActiveSheet->getColumnDimension($current_cell_ref)->setAutoSize(true);
             }
             if (isset($dados['col_span_f'])) {
                 $this->Xls_col += $dados['col_span_f'];
             }
             else {
                 $this->Xls_col++;
             }
         }
         if ($this->Xls_row > $this->New_Xls_row) {
             $this->New_Xls_row = $this->Xls_row;
         }
         if (isset($dados['row_span_f'])) {
             $this->Xls_row += $dados['row_span_f'];
         }
   }
   function quebra_geral_sc_free_total_bot()
   {
       if ($this->groupby_show != "S") {
           return;
       }
       $this->Tot->quebra_geral_sc_free_total();
       $prim_cmp = true;
       $NM_cmp_tot['valor']['S'] = 2;
       $NM_tipos_tot = array('S' => '' . $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . '');
       $mens_tot_base = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['tot_geral'][0] . "(" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['tot_geral'][1] . ")";
       $prim_lin_tot  = true;
     foreach ($NM_tipos_tot as $Tipo_Sum => $Tit_sum)
     {
       $mens_tot      = $mens_tot_base . " - " . $Tit_sum;
       $prim_cmp      = true;
       $this->Xls_col = 0;
       if (!$prim_lin_tot) {
           $this->Xls_row++;
       }
       $prim_lin_tot  = false;
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['field_order'] as $Cada_cmp)
       {
           if (isset($NM_cmp_tot['valor'][$Tipo_Sum]) && $Cada_cmp == "valor" && (!isset($this->NM_cmp_hidden['valor']) || $this->NM_cmp_hidden['valor'] != "off"))
           {
               if ($Tipo_Sum == "C" || $Tipo_Sum == "D") {
                   $Format_Num = "#,##0";
               }
               else {
                   $Format_Num = "#,##0.00";
               }
               $Vl_Tot = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['tot_geral'][$NM_cmp_tot['valor'][$Tipo_Sum]];
               $prim_cmp = false;
               $Vl_Tot = NM_charset_to_utf8($Vl_Tot);
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida']) {
                   $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $Vl_Tot;
                   $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "right";
                   if (is_numeric($Vl_Tot)) {
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "num";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = $Format_Num;
                   }
                   else {
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
                   }
                   $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['bold']   = "";
               }
               else {
                   $current_cell_ref = $this->calc_cell($this->Xls_col);
                   if ($this->Use_phpspreadsheet) {
                       $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT);
                   }
                   else {
                       $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
                   }
                   if (is_numeric($Vl_Tot)) {
                       $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getNumberFormat()->setFormatCode($Format_Num);
                   }
                   $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $Vl_Tot);
                   $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
               }
               $this->Xls_col++;
           }
           elseif (!isset($this->NM_cmp_hidden[$Cada_cmp]) || $this->NM_cmp_hidden[$Cada_cmp] != "off")
           {
               if ($prim_cmp)
               {
                   $mens_tot = html_entity_decode($mens_tot, ENT_COMPAT, $_SESSION['scriptcase']['charset']);
                   $mens_tot = strip_tags($mens_tot);
                   $mens_tot = NM_charset_to_utf8($mens_tot);
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida']) {
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = $mens_tot;
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['bold']   = "";
                   }
                   else {
                       $current_cell_ref = $this->calc_cell($this->Xls_col);
                       if ($this->Use_phpspreadsheet) {
                           $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT);
                       }
                       else {
                           $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                       }
                       $this->Nm_ActiveSheet->setCellValue($current_cell_ref . $this->Xls_row, $mens_tot);
                       $this->Nm_ActiveSheet->getStyle($current_cell_ref . $this->Xls_row)->getFont()->setBold(true);
                   }
               }
               elseif ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida']) {
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = "";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
                       $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
               }
               if (isset($this->arr_span[$Cada_cmp])) {
                   $this->Xls_col += $this->arr_span[$Cada_cmp];
               }
               $this->Xls_col++;
               $prim_cmp = false;
           }
       }
     }
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['embutida']) {
           $this->Xls_row++;
           $this->Xls_col = 1;
           $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['data']   = "";
           $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['align']  = "left";
           $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['type']   = "char";
           $this->arr_export['lines'][$this->Xls_row][$this->Xls_col]['format'] = "";
       }
   }

   function calc_cell($col)
   {
       $arr_alfa = array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
       $val_ret = "";
       $result = $col + 1;
       while ($result > 26)
       {
           $cel      = $result % 26;
           $result   = $result / 26;
           if ($cel == 0)
           {
               $cel    = 26;
               $result--;
           }
           $val_ret = $arr_alfa[$cel] . $val_ret;
       }
       $val_ret = $arr_alfa[$result] . $val_ret;
       return $val_ret;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_file']);
      if (is_file($this->Xls_f))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_file'] = $this->Xls_f;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida, $nm_lang;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_file']);
      if (is_file($this->Xls_f))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_file'] = $this->Xls_f;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_reporte_emisiones'] ?> <?php echo $this->Ini->Nm_lang['lang_emisiones_x_instalacion'] ?> :: Excel</TITLE>
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
   <td class="scExportTitle" style="height: 25px">XLS</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_v_jap_instalacion_contratos_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_v_jap_instalacion_contratos"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_jap_instalacion_contratos']['xls_return']); ?>"> 
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
