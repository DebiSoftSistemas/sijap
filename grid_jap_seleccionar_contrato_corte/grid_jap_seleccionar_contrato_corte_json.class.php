<?php

class grid_jap_seleccionar_contrato_corte_json
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
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'])
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['opcao'] = "";
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
                   nm_limpa_str_grid_jap_seleccionar_contrato_corte($cadapar[1]);
                   nm_protect_num_grid_jap_seleccionar_contrato_corte($cadapar[0], $cadapar[1]);
                   if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                   $Tmp_par   = $cadapar[0];
                   $$Tmp_par = $cadapar[1];
                   if ($Tmp_par == "nmgp_opcao")
                   {
                       $_SESSION['sc_session'][$script_case_init]['grid_jap_seleccionar_contrato_corte']['opcao'] = $cadapar[1];
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
          nm_limpa_str_grid_jap_seleccionar_contrato_corte($_SESSION["Igtech_RucEmpresa"]);
      }
      if (isset($var_escenario)) 
      {
          $_SESSION['var_escenario'] = $var_escenario;
          nm_limpa_str_grid_jap_seleccionar_contrato_corte($_SESSION["var_escenario"]);
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['SC_Ind_Groupby'] == "sc_free_group_by" && empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['SC_Gb_Free_cmp']))
      {
          $this->Tem_json_res  = false;
      }
      if (!is_file($this->Ini->root . $this->Ini->path_link . "grid_jap_seleccionar_contrato_corte/grid_jap_seleccionar_contrato_corte_res_json.class.php"))
      {
          $this->Tem_json_res  = false;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_label']))
      {
          $this->Json_use_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_label'];
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'] && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_format']))
      {
          $this->Json_format = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_format'];
      }
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . "grid_jap_seleccionar_contrato_corte_total.class.php"); 
      $this->Tot = new grid_jap_seleccionar_contrato_corte_total($this->Ini->sc_page);
      $this->prep_modulos("Tot");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'] && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_jap_seleccionar_contrato_corte']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_return']);
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
      $this->Arq_zip      = $this->Arquivo . "_grid_jap_seleccionar_contrato_corte.zip";
      $this->Arquivo     .= "_grid_jap_seleccionar_contrato_corte";
      $this->Arquivo     .= ".json";
      $this->Tit_doc      = "grid_jap_seleccionar_contrato_corte.json";
      $this->Tit_zip      = "grid_jap_seleccionar_contrato_corte.zip";
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
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_jap_seleccionar_contrato_corte']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_jap_seleccionar_contrato_corte']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_jap_seleccionar_contrato_corte']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['usr_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['usr_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['usr_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['php_cmp_sel']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['php_cmp_sel']))
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['php_cmp_sel'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->NM_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
          }
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_pesq_filtro'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->con_ruta = (isset($Busca_temp['con_ruta'])) ? $Busca_temp['con_ruta'] : ""; 
          $tmp_pos = (is_string($this->con_ruta)) ? strpos($this->con_ruta, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->con_ruta))
          {
              $this->con_ruta = substr($this->con_ruta, 0, $tmp_pos);
          }
          $this->con_numero_contrato = (isset($Busca_temp['con_numero_contrato'])) ? $Busca_temp['con_numero_contrato'] : ""; 
          $tmp_pos = (is_string($this->con_numero_contrato)) ? strpos($this->con_numero_contrato, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->con_numero_contrato))
          {
              $this->con_numero_contrato = substr($this->con_numero_contrato, 0, $tmp_pos);
          }
          $this->meses_deuda = (isset($Busca_temp['meses_deuda'])) ? $Busca_temp['meses_deuda'] : ""; 
          $tmp_pos = (is_string($this->meses_deuda)) ? strpos($this->meses_deuda, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->meses_deuda))
          {
              $this->meses_deuda = substr($this->meses_deuda, 0, $tmp_pos);
          }
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'] .= ".json";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_name']);
      }
      $this->arr_export = array('label' => array(), 'lines' => array());
      $this->arr_span   = array();

      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'])
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
          $nmgp_select = "SELECT con_ruta, str_replace (convert(char(10),op_fecha_ini,102), '.', '-') + ' ' + convert(char(8),op_fecha_ini,20), rc_orden, cl_nombre, con_numero_contrato, con_numero_medidor, meses_deuda, total_deuda, op_empresa, op_propietario, cl_telefono, cl_celular, cl_email, con_id, con_sino from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
      { 
          $nmgp_select = "SELECT con_ruta, op_fecha_ini, rc_orden, cl_nombre, con_numero_contrato, con_numero_medidor, meses_deuda, total_deuda, op_empresa, op_propietario, cl_telefono, cl_celular, cl_email, con_id, con_sino from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
       $nmgp_select = "SELECT con_ruta, convert(char(23),op_fecha_ini,121), rc_orden, cl_nombre, con_numero_contrato, con_numero_medidor, meses_deuda, total_deuda, op_empresa, op_propietario, cl_telefono, cl_celular, cl_email, con_id, con_sino from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
          $nmgp_select = "SELECT con_ruta, op_fecha_ini, rc_orden, cl_nombre, con_numero_contrato, con_numero_medidor, meses_deuda, total_deuda, op_empresa, op_propietario, cl_telefono, cl_celular, cl_email, con_id, con_sino from " . $this->Ini->nm_tabela; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
      { 
          $nmgp_select = "SELECT con_ruta, EXTEND(op_fecha_ini, YEAR TO DAY), rc_orden, cl_nombre, con_numero_contrato, con_numero_medidor, meses_deuda, total_deuda, op_empresa, op_propietario, cl_telefono, cl_celular, cl_email, con_id, con_sino from " . $this->Ini->nm_tabela; 
      } 
      else 
      { 
          $nmgp_select = "SELECT con_ruta, op_fecha_ini, rc_orden, cl_nombre, con_numero_contrato, con_numero_medidor, meses_deuda, total_deuda, op_empresa, op_propietario, cl_telefono, cl_celular, cl_email, con_id, con_sino from " . $this->Ini->nm_tabela; 
      } 
      $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_pesq'];
      $nmgp_select_count .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_pesq'];
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_resumo']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_resumo'])) 
      { 
          if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_pesq'])) 
          { 
              $nmgp_select .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_resumo']; 
              $nmgp_select_count .= " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_resumo']; 
          } 
          else
          { 
              $nmgp_select .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_resumo'] . ")"; 
              $nmgp_select_count .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['where_resumo'] . ")"; 
          } 
      } 
      $nmgp_order_by = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['order_grid'];
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
         $this->con_ruta = $rs->fields[0] ;  
         $this->con_ruta = (string)$this->con_ruta;
         $this->op_fecha_ini = $rs->fields[1] ;  
         $this->rc_orden = $rs->fields[2] ;  
         $this->rc_orden = (string)$this->rc_orden;
         $this->cl_nombre = $rs->fields[3] ;  
         $this->con_numero_contrato = $rs->fields[4] ;  
         $this->con_numero_medidor = $rs->fields[5] ;  
         $this->meses_deuda = $rs->fields[6] ;  
         $this->meses_deuda = (strpos(strtolower($this->meses_deuda), "e")) ? (float)$this->meses_deuda : $this->meses_deuda; 
         $this->meses_deuda = (string)$this->meses_deuda;
         $this->total_deuda = $rs->fields[7] ;  
         $this->total_deuda = (string)$this->total_deuda;
         $this->op_empresa = $rs->fields[8] ;  
         $this->op_propietario = $rs->fields[9] ;  
         $this->op_propietario = (string)$this->op_propietario;
         $this->cl_telefono = $rs->fields[10] ;  
         $this->cl_celular = $rs->fields[11] ;  
         $this->cl_email = $rs->fields[12] ;  
         $this->con_id = $rs->fields[13] ;  
         $this->con_id = (string)$this->con_id;
         $this->con_sino = $rs->fields[14] ;  
   $_SESSION['scriptcase']['grid_jap_seleccionar_contrato_corte']['contr_erro'] = 'on';
if (!isset($_SESSION['Igtech_RucEmpresa'])) {$_SESSION['Igtech_RucEmpresa'] = "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
 $update_sql = "UPDATE jap_contrato SET con_sino='N'  WHERE con_empresa='".$this->sc_temp_Igtech_RucEmpresa."'";

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
      
if (isset($this->sc_temp_Igtech_RucEmpresa)) {$_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['grid_jap_seleccionar_contrato_corte']['contr_erro'] = 'off';
      }
      $this->SC_seq_register = 0;
      $this->json_registro = array();
      $this->SC_seq_json   = 0;
      $PB_tot = (isset($this->count_ger) && $this->count_ger > 0) ? "/" . $this->count_ger : "";
      while (!$rs->EOF)
      {
         $this->SC_seq_register++;
         if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'] && !$this->Ini->sc_export_ajax) {
             $Mens_bar = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_prcs']);
             $this->pb->setProgressbarMessage($Mens_bar . ": " . $this->SC_seq_register . $PB_tot);
             $this->pb->addSteps(1);
         }
         $this->con_ruta = $rs->fields[0] ;  
         $this->con_ruta = (string)$this->con_ruta;
         $this->op_fecha_ini = $rs->fields[1] ;  
         $this->rc_orden = $rs->fields[2] ;  
         $this->rc_orden = (string)$this->rc_orden;
         $this->cl_nombre = $rs->fields[3] ;  
         $this->con_numero_contrato = $rs->fields[4] ;  
         $this->con_numero_medidor = $rs->fields[5] ;  
         $this->meses_deuda = $rs->fields[6] ;  
         $this->meses_deuda = (strpos(strtolower($this->meses_deuda), "e")) ? (float)$this->meses_deuda : $this->meses_deuda; 
         $this->meses_deuda = (string)$this->meses_deuda;
         $this->total_deuda = $rs->fields[7] ;  
         $this->total_deuda = (string)$this->total_deuda;
         $this->op_empresa = $rs->fields[8] ;  
         $this->op_propietario = $rs->fields[9] ;  
         $this->op_propietario = (string)$this->op_propietario;
         $this->cl_telefono = $rs->fields[10] ;  
         $this->cl_celular = $rs->fields[11] ;  
         $this->cl_email = $rs->fields[12] ;  
         $this->con_id = $rs->fields[13] ;  
         $this->con_id = (string)$this->con_id;
         $this->con_sino = $rs->fields[14] ;  
         //----- lookup - con_ruta
         $this->look_con_ruta = $this->con_ruta; 
         $this->Lookup->lookup_con_ruta($this->look_con_ruta, $this->con_ruta) ; 
         $this->look_con_ruta = ($this->look_con_ruta == "&nbsp;") ? "" : $this->look_con_ruta; 
         //----- lookup - op_propietario
         $this->look_op_propietario = $this->op_propietario; 
         $this->Lookup->lookup_op_propietario($this->look_op_propietario, $this->op_propietario) ; 
         $this->look_op_propietario = ($this->look_op_propietario == "&nbsp;") ? "" : $this->look_op_propietario; 
         $this->sc_proc_grid = true; 
         $_SESSION['scriptcase']['grid_jap_seleccionar_contrato_corte']['contr_erro'] = 'on';
 if ($this->con_sino =='S'){
		$this->seleccionar ="<div class='custom-control custom-checkbox'>
			  <input type='checkbox' class='custom-control-input' id='defaultChecked' checked=''>
			  </div>";
}else{
		$this->seleccionar ="<div class='custom-control custom-checkbox'>
			  <input type='checkbox' class='custom-control-input' id='defaultUnchecked'>
			  </div>";	
}
$_SESSION['scriptcase']['grid_jap_seleccionar_contrato_corte']['contr_erro'] = 'off'; 
         foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['field_order'] as $Cada_col)
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['embutida'])
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
              require_once($this->Ini->path_aplicacao . "grid_jap_seleccionar_contrato_corte_res_json.class.php");
              $this->Res = new grid_jap_seleccionar_contrato_corte_res_json();
              $this->prep_modulos("Res");
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_res_grid'] = true;
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
                  $Arq_res   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_res_file']['json'];
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
                  unlink($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_res_file']['json']);
              }
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_res_grid']);
          } 
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['export_sel_columns']['field_order']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['field_order'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['export_sel_columns']['field_order'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['export_sel_columns']['field_order']);
      }
      if(isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['export_sel_columns']['usr_cmp_sel']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['usr_cmp_sel'] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['export_sel_columns']['usr_cmp_sel'];
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['export_sel_columns']['usr_cmp_sel']);
      }
      $rs->Close();
   }
   //----- con_ruta
   function NM_export_con_ruta()
   {
         nmgp_Form_Num_Val($this->look_con_ruta, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_con_ruta = NM_charset_to_utf8($this->look_con_ruta);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['con_ruta'])) ? $this->New_label['con_ruta'] : "" . $this->Ini->Nm_lang['lang_ruta'] . ""; 
         }
         else
         {
             $SC_Label = "con_ruta"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_con_ruta;
   }
   //----- op_fecha_ini
   function NM_export_op_fecha_ini()
   {
         if ($this->Json_format)
         {
             $conteudo_x =  $this->op_fecha_ini;
             nm_conv_limpa_dado($conteudo_x, "YYYY-MM-DD");
             if (is_numeric($conteudo_x) && strlen($conteudo_x) > 0) 
             { 
                 $this->nm_data->SetaData($this->op_fecha_ini, "YYYY-MM-DD  ");
                 $this->op_fecha_ini = $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", "ddmmaaaa"));
             } 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_fecha_ini'])) ? $this->New_label['op_fecha_ini'] : "Fecha"; 
         }
         else
         {
             $SC_Label = "op_fecha_ini"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_fecha_ini;
   }
   //----- rc_orden
   function NM_export_rc_orden()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->rc_orden, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['rc_orden'])) ? $this->New_label['rc_orden'] : "Orden"; 
         }
         else
         {
             $SC_Label = "rc_orden"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->rc_orden;
   }
   //----- cl_nombre
   function NM_export_cl_nombre()
   {
         $this->cl_nombre = NM_charset_to_utf8($this->cl_nombre);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_nombre'])) ? $this->New_label['cl_nombre'] : "" . $this->Ini->Nm_lang['lang_propietario'] . ""; 
         }
         else
         {
             $SC_Label = "cl_nombre"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_nombre;
   }
   //----- con_numero_contrato
   function NM_export_con_numero_contrato()
   {
         $this->con_numero_contrato = NM_charset_to_utf8($this->con_numero_contrato);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['con_numero_contrato'])) ? $this->New_label['con_numero_contrato'] : "" . $this->Ini->Nm_lang['lang_numero_contrato'] . ""; 
         }
         else
         {
             $SC_Label = "con_numero_contrato"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->con_numero_contrato;
   }
   //----- con_numero_medidor
   function NM_export_con_numero_medidor()
   {
         $this->con_numero_medidor = NM_charset_to_utf8($this->con_numero_medidor);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['con_numero_medidor'])) ? $this->New_label['con_numero_medidor'] : "" . $this->Ini->Nm_lang['lang_numero_medidor'] . ""; 
         }
         else
         {
             $SC_Label = "con_numero_medidor"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->con_numero_medidor;
   }
   //----- meses_deuda
   function NM_export_meses_deuda()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->meses_deuda, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['meses_deuda'])) ? $this->New_label['meses_deuda'] : "Meses Deuda"; 
         }
         else
         {
             $SC_Label = "meses_deuda"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->meses_deuda;
   }
   //----- total_deuda
   function NM_export_total_deuda()
   {
         if ($this->Json_format)
         {
             nmgp_Form_Num_Val($this->total_deuda, "", ".", "2", "S", "2", "", "N:2", "-") ; 
         }
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['total_deuda'])) ? $this->New_label['total_deuda'] : "Total Deuda"; 
         }
         else
         {
             $SC_Label = "total_deuda"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->total_deuda;
   }
   //----- seleccionar
   function NM_export_seleccionar()
   {
         $this->seleccionar = NM_charset_to_utf8($this->seleccionar);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['seleccionar'])) ? $this->New_label['seleccionar'] : "seleccionar"; 
         }
         else
         {
             $SC_Label = "seleccionar"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->seleccionar;
   }
   //----- op_empresa
   function NM_export_op_empresa()
   {
         $this->op_empresa = NM_charset_to_utf8($this->op_empresa);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_empresa'])) ? $this->New_label['op_empresa'] : "" . $this->Ini->Nm_lang['lang_empresa'] . ""; 
         }
         else
         {
             $SC_Label = "op_empresa"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->op_empresa;
   }
   //----- op_propietario
   function NM_export_op_propietario()
   {
         nmgp_Form_Num_Val($this->look_op_propietario, $_SESSION['scriptcase']['reg_conf']['grup_num'], $_SESSION['scriptcase']['reg_conf']['dec_num'], "0", "S", "2", "", "N:" . $_SESSION['scriptcase']['reg_conf']['neg_num'] , $_SESSION['scriptcase']['reg_conf']['simb_neg'], $_SESSION['scriptcase']['reg_conf']['num_group_digit']) ; 
         $this->look_op_propietario = NM_charset_to_utf8($this->look_op_propietario);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['op_propietario'])) ? $this->New_label['op_propietario'] : "" . $this->Ini->Nm_lang['lang_propietario'] . ""; 
         }
         else
         {
             $SC_Label = "op_propietario"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->look_op_propietario;
   }
   //----- cl_telefono
   function NM_export_cl_telefono()
   {
         $this->cl_telefono = NM_charset_to_utf8($this->cl_telefono);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_telefono'])) ? $this->New_label['cl_telefono'] : "" . $this->Ini->Nm_lang['lang_lot_telefono'] . ""; 
         }
         else
         {
             $SC_Label = "cl_telefono"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_telefono;
   }
   //----- cl_celular
   function NM_export_cl_celular()
   {
         $this->cl_celular = NM_charset_to_utf8($this->cl_celular);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_celular'])) ? $this->New_label['cl_celular'] : "" . $this->Ini->Nm_lang['lang_celular'] . ""; 
         }
         else
         {
             $SC_Label = "cl_celular"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_celular;
   }
   //----- cl_email
   function NM_export_cl_email()
   {
         $this->cl_email = NM_charset_to_utf8($this->cl_email);
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['cl_email'])) ? $this->New_label['cl_email'] : "" . $this->Ini->Nm_lang['lang_email'] . ""; 
         }
         else
         {
             $SC_Label = "cl_email"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->cl_email;
   }
   //----- con_id
   function NM_export_con_id()
   {
         if ($this->Json_use_label)
         {
             $SC_Label = (isset($this->New_label['con_id'])) ? $this->New_label['con_id'] : "Con Id"; 
         }
         else
         {
             $SC_Label = "con_id"; 
         }
         $SC_Label = NM_charset_to_utf8($SC_Label); 
         $this->json_registro[$this->SC_seq_json][$SC_Label] = $this->con_id;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte'][$path_doc_md5][1] = $this->Tit_doc;
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
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo $this->Ini->Nm_lang['lang_reporte_para_notificaciones'] ?> :: JSON</TITLE>
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
<form name="Fdown" method="get" action="grid_jap_seleccionar_contrato_corte_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_jap_seleccionar_contrato_corte"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./" style="display: none"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_jap_seleccionar_contrato_corte']['json_return']); ?>"> 
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
