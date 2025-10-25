<?php

class grid_fac_recargos_aplicados_json
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
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'])
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['opcao'] = "";
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
                   nm_limpa_str_grid_fac_recargos_aplicados($cadapar[1]);
                   nm_protect_num_grid_fac_recargos_aplicados($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_fac_recargos_aplicados']['opcao'] = $cadapar[1];
                   }
               }
          }
      }
      if (isset($var_proceso)) 
      {
          $_SESSION['var_proceso'] = $var_proceso;
          nm_limpa_str_grid_fac_recargos_aplicados($_SESSION["var_proceso"]);
      }
      if (isset($var_mensaje)) 
      {
          $_SESSION['var_mensaje'] = $var_mensaje;
          nm_limpa_str_grid_fac_recargos_aplicados($_SESSION["var_mensaje"]);
      }
      if (isset($var_fecha_larga)) 
      {
          $_SESSION['var_fecha_larga'] = $var_fecha_larga;
          nm_limpa_str_grid_fac_recargos_aplicados($_SESSION["var_fecha_larga"]);
      }
      if (!isset($var_RutaLogo) && isset($var_rutalogo)) 
      {
         $var_RutaLogo = $var_rutalogo;
      }
      if (isset($var_RutaLogo)) 
      {
          $_SESSION['var_RutaLogo'] = $var_RutaLogo;
          nm_limpa_str_grid_fac_recargos_aplicados($_SESSION["var_RutaLogo"]);
      }
      if (!isset($Igtech_RucEmpresa) && isset($igtech_rucempresa)) 
      {
         $Igtech_RucEmpresa = $igtech_rucempresa;
      }
      if (isset($Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $Igtech_RucEmpresa;
          nm_limpa_str_grid_fac_recargos_aplicados($_SESSION["Igtech_RucEmpresa"]);
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['SC_Ind_Groupby'] == "sc_free_total")
      {
          $this->Tem_json_res  = false;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['SC_Gb_Free_cmp']))
      {
          $this->Tem_json_res  = false;
      }
      if (!is_file($this->Ini->root . $this->Ini->path_link . "grid_fac_recargos_aplicados/grid_fac_recargos_aplicados_res_json.class.php"))
      {
          $this->Tem_json_res  = false;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_label']))
      {
          $this->Json_use_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_label'];
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_format']))
      {
          $this->Json_format = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_format'];
      }
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_fac_recargos_aplicados_total.class.php"); 
      $this->Tot = new grid_fac_recargos_aplicados_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'] && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_fac_recargos_aplicados']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_return']);
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
      $this->Arq_zip      = $this->Arquivo . "_grid_fac_recargos_aplicados.zip";
      $this->Arquivo     .= "_grid_fac_recargos_aplicados";
      $this->Arquivo     .= ".json";
      $this->Tit_doc      = "grid_fac_recargos_aplicados.json";
      $this->Tit_zip      = "grid_fac_recargos_aplicados.zip";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_fac_recargos_aplicados']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_fac_recargos_aplicados']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_fac_recargos_aplicados']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->ra_valor_iva = (isset($Busca_temp['ra_valor_iva'])) ? $Busca_temp['ra_valor_iva'] : ""; 
          $tmp_pos = (is_string($this->ra_valor_iva)) ? strpos($this->ra_valor_iva, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->ra_valor_iva))
          {
              $this->ra_valor_iva = substr($this->ra_valor_iva, 0, $tmp_pos);
          }
          $this->ra_anio = (isset($Busca_temp['ra_anio'])) ? $Busca_temp['ra_anio'] : ""; 
          $tmp_pos = (is_string($this->ra_anio)) ? strpos($this->ra_anio, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->ra_anio))
          {
              $this->ra_anio = substr($this->ra_anio, 0, $tmp_pos);
          }
          $this->ra_base_iva = (isset($Busca_temp['ra_base_iva'])) ? $Busca_temp['ra_base_iva'] : ""; 
          $tmp_pos = (is_string($this->ra_base_iva)) ? strpos($this->ra_base_iva, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->ra_base_iva))
          {
              $this->ra_base_iva = substr($this->ra_base_iva, 0, $tmp_pos);
          }
          $this->ra_cantidad = (isset($Busca_temp['ra_cantidad'])) ? $Busca_temp['ra_cantidad'] : ""; 
          $tmp_pos = (is_string($this->ra_cantidad)) ? strpos($this->ra_cantidad, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->ra_cantidad))
          {
              $this->ra_cantidad = substr($this->ra_cantidad, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'] .= ".json";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'])
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
          $nmgp_select = "SELECT ra_cantidad, ra_descripcion, ra_valor, ra_anio, ra_mes, ra_precio_unitario, ra_producto_aplica, ra_subtotal, ra_valor_iva, ra_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT ra_cantidad, ra_descripcion, ra_valor, ra_anio, ra_mes, ra_precio_unitario, ra_producto_aplica, ra_subtotal, ra_valor_iva, ra_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT ra_cantidad, ra_descripcion, ra_valor, ra_anio, ra_mes, ra_precio_unitario, ra_producto_aplica, ra_subtotal, ra_valor_iva, ra_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT ra_cantidad, ra_descripcion, ra_valor, ra_anio, ra_mes, ra_precio_unitario, ra_producto_aplica, ra_subtotal, ra_valor_iva, ra_id from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT ra_cantidad, ra_descripcion, ra_valor, ra_anio, ra_mes, ra_precio_unitario, ra_producto_aplica, ra_subtotal, ra_valor_iva, ra_id from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT ra_cantidad, ra_descripcion, ra_valor, ra_anio, ra_mes, ra_precio_unitario, ra_producto_aplica, ra_subtotal, ra_valor_iva, ra_id from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['where_pesq'];
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['order_grid'];
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
         $this->ra_cantidad = $rs->fields[0] ;  
         $this->ra_cantidad = (string)$this->ra_cantidad;
         $this->ra_descripcion = $rs->fields[1] ;  
         $this->ra_valor = $rs->fields[2] ;  
         $this->ra_valor = (string)$this->ra_valor;
         $this->ra_anio = $rs->fields[3] ;  
         $this->ra_anio = (string)$this->ra_anio;
         $this->ra_mes = $rs->fields[4] ;  
         $this->ra_precio_unitario = $rs->fields[5] ;  
         $this->ra_precio_unitario = (string)$this->ra_precio_unitario;
         $this->ra_producto_aplica = $rs->fields[6] ;  
         $this->ra_subtotal = $rs->fields[7] ;  
         $this->ra_subtotal = (string)$this->ra_subtotal;
         $this->ra_valor_iva = $rs->fields[8] ;  
         $this->ra_valor_iva = (string)$this->ra_valor_iva;
         $this->ra_id = $rs->fields[9] ;  
         $this->ra_id = (string)$this->ra_id;
   $_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
if (!isset($_SESSION['var_fecha_larga'])) {$_SESSION['var_fecha_larga'] = "";}
if (!isset($this->sc_temp_var_fecha_larga)) {$this->sc_temp_var_fecha_larga = (isset($_SESSION['var_fecha_larga'])) ? $_SESSION['var_fecha_larga'] : "";}
if (!isset($_SESSION['var_mensaje'])) {$_SESSION['var_mensaje'] = "";}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($_SESSION['var_proceso'])) {$_SESSION['var_proceso'] = "";}
if (!isset($this->sc_temp_var_proceso)) {$this->sc_temp_var_proceso = (isset($_SESSION['var_proceso'])) ? $_SESSION['var_proceso'] : "";}
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


$select_sql="SELECT 'Recargos a las deudas del mes de:'  || dec_nombre || ' de ' || pr_periodo, day(pr_fecha),month(pr_fecha),year(pr_fecha)  
FROM fac_procesa_recargos 
inner join v_sis_meses on pr_mes = dec_id
WHERE pr_id=".$this->sc_temp_var_proceso;
 
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
	$this->sc_temp_var_mensaje= $this->rs[0][0];
	$this->sc_temp_var_fecha_larga=$this->fecha_larga($this->rs[0][1],$this->rs[0][2],$this->rs[0][3]);
   
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) {$_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_var_RutaLogo)) {$_SESSION['var_RutaLogo'] = $this->sc_temp_var_RutaLogo;}
if (isset($this->sc_temp_var_proceso)) {$_SESSION['var_proceso'] = $this->sc_temp_var_proceso;}
if (isset($this->sc_temp_var_mensaje)) {$_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
if (isset($this->sc_temp_var_fecha_larga)) {$_SESSION['var_fecha_larga'] = $this->sc_temp_var_fecha_larga;}
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
      }
      $this->SC_seq_register = 0;
      $this->json_registro = array();
      $this->SC_seq_json   = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'] && !$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->ra_cantidad = $rs->fields[0] ;  
         $this->ra_cantidad = (string)$this->ra_cantidad;
         $this->ra_descripcion = $rs->fields[1] ;  
         $this->ra_valor = $rs->fields[2] ;  
         $this->ra_valor = (string)$this->ra_valor;
         $this->ra_anio = $rs->fields[3] ;  
         $this->ra_anio = (string)$this->ra_anio;
         $this->ra_mes = $rs->fields[4] ;  
         $this->ra_precio_unitario = $rs->fields[5] ;  
         $this->ra_precio_unitario = (string)$this->ra_precio_unitario;
         $this->ra_producto_aplica = $rs->fields[6] ;  
         $this->ra_subtotal = $rs->fields[7] ;  
         $this->ra_subtotal = (string)$this->ra_subtotal;
         $this->ra_valor_iva = $rs->fields[8] ;  
         $this->ra_valor_iva = (string)$this->ra_valor_iva;
         $this->ra_id = $rs->fields[9] ;  
         $this->ra_id = (string)$this->ra_id;
         //----- lookup - ra_mes
         $this->look_ra_mes = $this->ra_mes; 
         $this->Lookup->lookup_ra_mes($this->look_ra_mes, $this->ra_mes) ; 
         $this->look_ra_mes = ($this->look_ra_mes == "&nbsp;") ? "" : $this->look_ra_mes; 
         //----- lookup - ra_producto_aplica
         $this->look_ra_producto_aplica = $this->ra_producto_aplica; 
         $this->Lookup->lookup_ra_producto_aplica($this->look_ra_producto_aplica, $this->ra_producto_aplica, $_SESSION['Igtech_RucEmpresa']) ; 
         $this->look_ra_producto_aplica = ($this->look_ra_producto_aplica == "&nbsp;") ? "" : $this->look_ra_producto_aplica; 
         $this->sc_proc_grid = true; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['field_order'] as $Cada_col)
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['embutida'])
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
              require_once($this->Ini->path_aplicacao . "grid_fac_recargos_aplicados_res_json.class.php");
              $this->Res = new grid_fac_recargos_aplicados_res_json();
              $this->prep_modulos("Res");
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_res_grid'] = true;
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
                  $Arq_res   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_res_file']['json'];
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
                  unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_res_file']['json']);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_res_grid']);
          } 
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- ra_cantidad
   function NM_export_ra_cantidad()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->ra_cantidad, "", "", "0", "S", "2", "", "N:1", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_cantidad'])) ? $this->New_label['ra_cantidad'] : "" . $this->Ini->Nm_lang['lang_lot_cantidad'] . ""; 
         }
         else
         {
             $SC_Label = "ra_cantidad"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->ra_cantidad;
   }
   //----- ra_descripcion
   function NM_export_ra_descripcion()
   {
         $this->ra_descripcion = NM_charset_to_utf8($this->ra_descripcion);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_descripcion'])) ? $this->New_label['ra_descripcion'] : "" . $this->Ini->Nm_lang['lang_descripcion'] . ""; 
         }
         else
         {
             $SC_Label = "ra_descripcion"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->ra_descripcion;
   }
   //----- ra_valor
   function NM_export_ra_valor()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->ra_valor, "", ".", "2", "S", "2", "", "N:2", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_valor'])) ? $this->New_label['ra_valor'] : "" . $this->Ini->Nm_lang['lang_total'] . ""; 
         }
         else
         {
             $SC_Label = "ra_valor"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->ra_valor;
   }
   //----- ra_anio
   function NM_export_ra_anio()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->ra_anio, "", "", "0", "S", "2", "", "N:2", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_anio'])) ? $this->New_label['ra_anio'] : "" . $this->Ini->Nm_lang['lang_periodo'] . ""; 
         }
         else
         {
             $SC_Label = "ra_anio"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->ra_anio;
   }
   //----- ra_mes
   function NM_export_ra_mes()
   {
         $this->look_ra_mes = NM_charset_to_utf8($this->look_ra_mes);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_mes'])) ? $this->New_label['ra_mes'] : "" . $this->Ini->Nm_lang['lang_srch_mnth'] . ""; 
         }
         else
         {
             $SC_Label = "ra_mes"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_ra_mes;
   }
   //----- ra_precio_unitario
   function NM_export_ra_precio_unitario()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->ra_precio_unitario, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "2", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'], $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_precio_unitario'])) ? $this->New_label['ra_precio_unitario'] : "" . $this->Ini->Nm_lang['lang_precio_unitario'] . ""; 
         }
         else
         {
             $SC_Label = "ra_precio_unitario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->ra_precio_unitario;
   }
   //----- ra_producto_aplica
   function NM_export_ra_producto_aplica()
   {
         $this->look_ra_producto_aplica = NM_charset_to_utf8($this->look_ra_producto_aplica);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['ra_producto_aplica'])) ? $this->New_label['ra_producto_aplica'] : "" . $this->Ini->Nm_lang['lang_producto_aplica'] . ""; 
         }
         else
         {
             $SC_Label = "ra_producto_aplica"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_ra_producto_aplica;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][1] = $this->Tit_doc;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>RECARGOS APLICADOS :: JSON</TITLE>
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
<form name="Fdown" method="get" action="grid_fac_recargos_aplicados_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_fac_recargos_aplicados"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./" style="display: none"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['json_return']); ?>"> 
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
function mes($numero) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	switch ($numero) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
		default: 
		  $month = "Parametro incorrecto";
			break;
	}
	return $month;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function FormatoFecha($fecha) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	
	list ( $month, $day, $year ) = split ( '[/.-]', $fecha );
	return $month . '/' . $day . '/' . $year;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function Hoy() {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mes = sprintf ( "%02s", $today ['mon'] );
	$dia = sprintf ( "%02s", $today ['mday'] );
	$anio = $today ['year'];
	return $anio . '/' . $mes . '/' . $dia;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function fecha_actual() {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mon = $today ['mon'];
	$mday = $today ['mday'];
	$hora = $today ['hours'];
	$minutos = $today ['minutes'];
	$segundos = $today ['seconds'];
	$fecha_actual = $mday . " de ";
	switch ($mon) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
	}
	$fecha_actual .= $month . " de ";
	$mday = $today ['mday'];
	$year = $today ['year'];
	$fecha_actual .= $year;
	return $fecha_actual;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function fecha_larga($dia,$mes,$anio) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	switch ($mes) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
	}
	return $dia . ' de ' . $month . ' del ' . $anio;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function fecha_larga_dia($fecha) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$fechats = strtotime($fecha);
	
	switch (date('w', $fechats)){ 
		case 0: $nom_dia= "Domingo"; break; 
		case 1: $nom_dia= "Lunes"; break; 
		case 2: $nom_dia= "Martes"; break; 
		case 3: $nom_dia= "Miércoles"; break; 
		case 4: $nom_dia= "Jueves"; break; 
		case 5: $nom_dia= "Viernes"; break; 
		case 6: $nom_dia= "Sábado"; break; 
	}
	
	$day = substr ( $fecha, 8, 2 ) . " de ";
	switch (intval ( substr ( $fecha, 5, 2 ) )) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
	}
	return $nom_dia . ' ' .$day . ' ' . $month . ' de ' . substr ( $fecha, 0, 4 );

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function grado($numero) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	switch ($numero) {
		case 1 :
			return "PRIMER";
			break;
		case 2 :
			return "SEGUNDO";
			break;
		case 3 :
			return "TERCER";
			break;
		case 4 :
			return "CUARTO";
			break;
		case 5 :
			return "QUINTO";
			break;
		case 6 :
			return "SEXTO";
			break;
		case 7 :
			return "SEPTIMO";
			break;
		case 8 :
			return "OCTAVO";
			break;
		case 9 :
			return "NOVENO";
			break;
		case 10 :
			return "DECIMO";
			break;
	}

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function llenaizq($a, $Tamanio, $car) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $b . $a;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function llenader($a, $Tamanio, $car) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen ( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $a . $b;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function cifrado($cadena) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$strcifrado = '';
	$cadena = trim($cadena);
	for($i = 1; $i <= strlen($cadena); $i ++) {
		$strcifrado = $strcifrado.$this->llenaizq( strval( 1 + ord( substr($cadena, $i - 1, 1 ) ) ), 3, '0' );
	}
	return $strcifrado;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function descifrado($cadena) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$cifrado = '';
	for($i = 1; $i <= strlen( $cadena ); $i += 3) {
		$cifrado = $cifrado . chr( substr( $cadena, $i - 1, 3 ) - 1 );
	}
	
	return $cifrado;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function IgtechEliminaInyeccion($cadena) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$cadena=str_replace("=","",$cadena);
    $cadena=str_replace("'","",$cadena);
	$cadena=str_replace('"',"",$cadena);
	$cadena=str_replace('or',"",$cadena);
	$cadena=str_replace('OR',"",$cadena);
	return $cadena;
	
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function diasHabiles($dia,$mes,$anio,$numDias,$fer){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
 
$fechaInicial	= mktime(0,0,0,$mes ,$dia ,$anio);
$lapso			= $numDias; 
$diasTrans		= 0; 
$diasHabiles	= 1;
$feriados		= $fer;
while($diasHabiles<=($lapso))
{	$fecha		= $fechaInicial+($diasTrans*86400);	
	$diaSemana	= getdate($fecha);
	if($diaSemana["wday"]!=0 && $diaSemana["wday"]!=6)
	{	$feriado	= $diaSemana['mday']."-".$diaSemana['mon']."-".$diaSemana['year'];
		if(!in_array($feriado,$feriados))
		{	$diasHabiles++;}
	}
	$diasTrans++;
}
$diasTrans=$diasTrans-1;
$fechaFinal	= $fechaInicial+($diasTrans*86400);	

return date("d-m-Y",$fechaFinal);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function diaMesAnio(){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
   
	$fecha=date("j-n-Y");
	$meses=array("Mes 	Nulo","Enero","Febrero","Marzo","Abril","Mayo",
				 "Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$fecha_array=explode("-",$fecha);
	$dia=$fecha_array[0];
	$mes=$meses[$fecha_array[1]];
	$anio=$fecha_array[2];
	return array($dia,$mes,$anio);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function separar($dato){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
   
     $fecha_array=explode("-",$dato);
     return $fecha_array;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function mesNum($numero) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
      switch ($numero) {
          case "Enero" :
              $month = 1;
              break;
          case "Febrero" :
              $month = 2;
              break;
          case "Marzo" :
              $month = 3;
              break;
          case "Abril" :
              $month = 4;
              break;
          case "Mayo" :
              $month = 5;
              break;
          case "Junio" :
              $month = 6;
              break;
          case "Julio" :
              $month = 7;
              break;
          case "Agosto" :
              $month = 8;
              break;
          case "Septiembre" :
              $month = 9;
              break;
          case "Octubre" :
              $month = 10;
              break;
          case "Noviembre" :
              $month = 11;
              break;
          case "Diciembre" :
          $month = 12;
          break;
          default: 
          $month = "Parametro incorrecto";
          break;
    }
    return $month;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function leerxml($array, $dir){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
		$xml=simplexml_load_file($dir);
		$contador=count($xml->detalle->campo);
		$nro=$array;
		$cont=0;
		$campo;
		for($i=0; $i<$contador;$i++){
			$atrib=$xml->detalle->campo[$i]->attributes();
			$valor=$atrib['numero'];
			$contador_array=count($nro);
			for($j=0; $j<$contador_array; $j++){
				if($valor==$nro[$j][0]){
					$campo[$cont][0]=$nro[$j][1];		
					$campo[$cont][1]=$xml->detalle->campo[$i];
					$cont=$cont+1;
				}
			}
		}
		return $campo;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function getMonto($money){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousendSeparator);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function secuencialCartera($numero, $fecha){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  	
	$timestamp = strtotime($fecha); 
    $anio_actual = date('Y', $timestamp);
	$num = '';
	$longitud = strlen($numero);
	for($i=0;$i<(4-$longitud); $i++){
		$num .='0';
	}	
	$num = $num.$numero.'-'.$anio_actual; 
	return $num;	

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function inicialesUsuario($usuario){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$array2 = explode(".", $usuario);
	$apellido = substr($array2[0], 0, 1);
	$nombre = substr($array2[1], 0, 1);
	$resultado = strtolower ($nombre.$apellido);
	return $resultado;		

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function obtenerArray($cadena){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  		
	$array = split(',' , $cadena);
	$newarray=array_values(array_diff($array, array('')));	
	return $newarray;	

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function dias_transcurridos($fecha_i,$fecha_f){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); 
	$dias = floor($dias);		
	return $dias;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function trasformar_money($numero){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	setlocale(LC_MONETARY, 'en_US');
	$money=money_format('%i', $numero) . "\n";			
	return str_replace('USD', '', $money);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function calculaedad($fechanacimiento){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($mes_diferencia < 0 || ($mes_diferencia == 0 && $dia_diferencia < 0 ))
    $ano_diferencia--;
  return $ano_diferencia;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function num2letras($num, $moneda, $denominacion, $fem = false, $dec = true) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
   
   $matuni[2]  = "dos"; 
   $matuni[3]  = "tres"; 
   $matuni[4]  = "cuatro"; 
   $matuni[5]  = "cinco"; 
   $matuni[6]  = "seis"; 
   $matuni[7]  = "siete"; 
   $matuni[8]  = "ocho"; 
   $matuni[9]  = "nueve"; 
   $matuni[10] = "diez"; 
   $matuni[11] = "once"; 
   $matuni[12] = "doce"; 
   $matuni[13] = "trece"; 
   $matuni[14] = "catorce"; 
   $matuni[15] = "quince"; 
   $matuni[16] = "dieciseis"; 
   $matuni[17] = "diecisiete"; 
   $matuni[18] = "dieciocho"; 
   $matuni[19] = "diecinueve"; 
   $matuni[20] = "veinte"; 
   $matunisub[2] = "dos"; 
   $matunisub[3] = "tres"; 
   $matunisub[4] = "cuatro"; 
   $matunisub[5] = "quin"; 
   $matunisub[6] = "seis"; 
   $matunisub[7] = "sete"; 
   $matunisub[8] = "ocho"; 
   $matunisub[9] = "nove"; 

   $matdec[2] = "veint"; 
   $matdec[3] = "treinta"; 
   $matdec[4] = "cuarenta"; 
   $matdec[5] = "cincuenta"; 
   $matdec[6] = "sesenta"; 
   $matdec[7] = "setenta"; 
   $matdec[8] = "ochenta"; 
   $matdec[9] = "noventa"; 
   $matsub[3]  = 'mill'; 
   $matsub[5]  = 'bill'; 
   $matsub[7]  = 'mill'; 
   $matsub[9]  = 'trill'; 
   $matsub[11] = 'mill'; 
   $matsub[13] = 'bill'; 
   $matsub[15] = 'mill'; 
   $matmil[4]  = 'millones'; 
   $matmil[6]  = 'billones'; 
   $matmil[7]  = 'de billones'; 
   $matmil[8]  = 'millones de billones'; 
   $matmil[10] = 'trillones'; 
   $matmil[11] = 'de trillones'; 
   $matmil[12] = 'millones de trillones'; 
   $matmil[13] = 'de trillones'; 
   $matmil[14] = 'billones de trillones'; 
   $matmil[15] = 'de billones de trillones'; 
   $matmil[16] = 'millones de billones de trillones'; 
   $neg='';
	$zeros = true;
   $float=explode('.',$num);
   $num=$float[0];
	if($float[1]==''){
	$float[1]='00';	
	}

   $num = trim((string)@$num); 
   if ($num[0] == '-') { 
      $neg = 'menos '; 
      $num = substr($num, 1); 
   }else 
      $neg = ''; 
   while ($num[0] == '0') $num = substr($num, 1); 
   if ($num[0] < '1' or $num[0] > 9) $num = '0' . $num; 
   $zeros = true; 
   $punt = false; 
   $ent = ''; 
   $fra = ''; 
   for ($c = 0; $c < strlen($num); $c++) { 
      $n = $num[$c]; 
      if (! (strpos(".,'''", $n) === false)) { 
         if ($punt) break; 
         else{ 
            $punt = true; 
            continue; 
         } 

      }elseif (! (strpos('0123456789', $n) === false)) { 
         if ($punt) { 
            if ($n != '0') $zeros = false; 
            $fra .= $n; 
         }else 

            $ent .= $n; 
      }else 

         break; 

   } 
   $ent = '     ' . $ent; 
   if ($dec and $fra and ! $zeros) { 
      $fin = ' coma'; 
      for ($n = 0; $n < strlen($fra); $n++) { 
         if (($s = $fra[$n]) == '0') 
            $fin .= ' cero'; 
         elseif ($s == '1') 
            $fin .= $fem ? ' una' : ' un'; 
         else 
            $fin .= ' ' . $matuni[$s]; 
      } 
   }else 
      $fin = ''; 
   if ((int)$ent === 0) return 'Cero ' . $fin; 
   $tex = ''; 
   $sub = 0; 
   $mils = 0; 
   $neutro = false; 
   while ( ($num = substr($ent, -3)) != '   ') { 
      $ent = substr($ent, 0, -3); 
      if (++$sub < 3 and $fem) { 
         $matuni[1] = 'una'; 
         $subcent = 'as'; 
      }else{ 
         $matuni[1] = $neutro ? 'un' : 'uno'; 
         $subcent = 'os'; 
      } 
      $t = ''; 
      $n2 = substr($num, 1); 
      if ($n2 == '00') { 
      }elseif ($n2 < 21) 
         $t = ' ' . $matuni[(int)$n2]; 
      elseif ($n2 < 30) { 
         $n3 = $num[2]; 
         if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
         $n2 = $num[1]; 
         $t = ' ' . $matdec[$n2] . $t; 
      }else{ 
         $n3 = $num[2]; 
         if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
         $n2 = $num[1]; 
         $t = ' ' . $matdec[$n2] . $t; 
      } 
      $n = $num[0]; 
      if ($n == 1) { 
         $t = ' ciento' . $t; 
      }elseif ($n == 5){ 
         $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
      }elseif ($n != 0){ 
         $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
      } 
      if ($sub == 1) { 
      }elseif (! isset($matsub[$sub])) { 
         if ($num == 1) { 
            $t = ' mil'; 
         }elseif ($num > 1){ 
            $t .= ' mil'; 
         } 
      }elseif ($num == 1) { 
         $t .= ' ' . $matsub[$sub] . '?n'; 
      }elseif ($num > 1){ 
         $t .= ' ' . $matsub[$sub] . 'ones'; 
      }   
      if ($num == '000') $mils ++; 
      elseif ($mils != 0) { 
         if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
         $mils = 0; 
      } 
      $neutro = true; 
      $tex = $t . $tex; 
   } 
   $tex = $neg . substr($tex, 1) . $fin; 

	
   $end_num=ucfirst($tex).' '.$denominacion.' '.$float[1].'/100 '.$moneda;
   return $end_num; 

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
}

?>
