<?php
//
class form_recaudacion_anticipos_mob_apl
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
   var $cl_id;
   var $cl_empresa;
   var $cl_nombre;
   var $cl_tipo_identificacion;
   var $cl_identificacion;
   var $cl_pais;
   var $cl_provincia;
   var $cl_ciudad;
   var $cl_direccion;
   var $cl_telefono;
   var $cl_celular;
   var $cl_email;
   var $cl_reteoncion_iva;
   var $libretin;
   var $libretin_1;
   var $forma_pago;
   var $forma_pago_1;
   var $documento;
   var $subtotal;
   var $iva;
   var $valor_pago;
   var $titulo;
   var $mensaje;
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
   var $form_paginacao = 'parcial';
   var $lig_edit_lookup      = false;
   var $lig_edit_lookup_call = false;
   var $lig_edit_lookup_cb   = '';
   var $lig_edit_lookup_row  = '';
   var $is_calendar_app = false;
   var $Embutida_call  = false;
   var $Embutida_ronly = false;
   var $Embutida_proc  = false;
   var $Embutida_form  = false;
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
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      if ($this->NM_ajax_flag)
      {
          if (isset($this->NM_ajax_info['param']['cl_direccion']))
          {
              $this->cl_direccion = $this->NM_ajax_info['param']['cl_direccion'];
          }
          if (isset($this->NM_ajax_info['param']['cl_email']))
          {
              $this->cl_email = $this->NM_ajax_info['param']['cl_email'];
          }
          if (isset($this->NM_ajax_info['param']['cl_id']))
          {
              $this->cl_id = $this->NM_ajax_info['param']['cl_id'];
          }
          if (isset($this->NM_ajax_info['param']['cl_identificacion']))
          {
              $this->cl_identificacion = $this->NM_ajax_info['param']['cl_identificacion'];
          }
          if (isset($this->NM_ajax_info['param']['cl_nombre']))
          {
              $this->cl_nombre = $this->NM_ajax_info['param']['cl_nombre'];
          }
          if (isset($this->NM_ajax_info['param']['cl_telefono']))
          {
              $this->cl_telefono = $this->NM_ajax_info['param']['cl_telefono'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['documento']))
          {
              $this->documento = $this->NM_ajax_info['param']['documento'];
          }
          if (isset($this->NM_ajax_info['param']['forma_pago']))
          {
              $this->forma_pago = $this->NM_ajax_info['param']['forma_pago'];
          }
          if (isset($this->NM_ajax_info['param']['libretin']))
          {
              $this->libretin = $this->NM_ajax_info['param']['libretin'];
          }
          if (isset($this->NM_ajax_info['param']['mensaje']))
          {
              $this->mensaje = $this->NM_ajax_info['param']['mensaje'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['titulo']))
          {
              $this->titulo = $this->NM_ajax_info['param']['titulo'];
          }
          if (isset($this->NM_ajax_info['param']['valor_pago']))
          {
              $this->valor_pago = $this->NM_ajax_info['param']['valor_pago'];
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
      if (isset($this->Igtech_RucEmpresa) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (isset($this->Igtech_SesionLogin) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_POST["Igtech_SesionLogin"]) && isset($this->Igtech_SesionLogin)) 
      {
          $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
      }
      if (!isset($_POST["Igtech_SesionLogin"]) && isset($_POST["igtech_sesionlogin"])) 
      {
          $_SESSION['Igtech_SesionLogin'] = $_POST["igtech_sesionlogin"];
      }
      if (isset($_GET["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_GET["Igtech_RucEmpresa"]) && isset($_GET["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_GET["igtech_rucempresa"];
      }
      if (isset($_GET["Igtech_SesionLogin"]) && isset($this->Igtech_SesionLogin)) 
      {
          $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
      }
      if (!isset($_GET["Igtech_SesionLogin"]) && isset($_GET["igtech_sesionlogin"])) 
      {
          $_SESSION['Igtech_SesionLogin'] = $_GET["igtech_sesionlogin"];
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['embutida_parms']);
      } 
      if (isset($this->nmgp_parms) && !empty($this->nmgp_parms)) 
      { 
          if (isset($_SESSION['nm_aba_bg_color'])) 
          { 
              unset($_SESSION['nm_aba_bg_color']);
          }   
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
                 nm_limpa_str_form_recaudacion_anticipos_mob($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (!isset($this->Igtech_SesionLogin) && isset($this->igtech_sesionlogin)) 
          {
              $this->Igtech_SesionLogin = $this->igtech_sesionlogin;
          }
          if (isset($this->Igtech_SesionLogin)) 
          {
              $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (!isset($this->Igtech_SesionLogin) && isset($this->igtech_sesionlogin)) 
          {
              $this->Igtech_SesionLogin = $this->igtech_sesionlogin;
          }
          if (isset($this->Igtech_SesionLogin)) 
          {
              $_SESSION['Igtech_SesionLogin'] = $this->Igtech_SesionLogin;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_recaudacion_anticipos_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_recaudacion_anticipos_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_recaudacion_anticipos_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_recaudacion_anticipos_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_recaudacion_anticipos_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_recaudacion_anticipos_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_recaudacion_anticipos_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_recaudacion_anticipos_mob']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_cliente";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_recaudacion_anticipos_mob")
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
      $this->nm_new_label['cl_nombre'] = '' . $this->Ini->Nm_lang['lang_nombre'] . '';
      $this->nm_new_label['cl_identificacion'] = '' . $this->Ini->Nm_lang['lang_lot_identificacion'] . '';
      $this->nm_new_label['cl_direccion'] = '' . $this->Ini->Nm_lang['lang_direccion'] . '';
      $this->nm_new_label['cl_telefono'] = '' . $this->Ini->Nm_lang['lang_lot_telefono'] . '';
      $this->nm_new_label['cl_email'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['libretin'] = '' . $this->Ini->Nm_lang['lang_libretin'] . '';
      $this->nm_new_label['forma_pago'] = '' . $this->Ini->Nm_lang['lang_forma_pago'] . '';
      $this->nm_new_label['documento'] = '' . $this->Ini->Nm_lang['lang_documento'] . '';
      $this->nm_new_label['valor_pago'] = '' . $this->Ini->Nm_lang['lang_valor_pago'] . '';

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
      $this->Ini->Img_status_ok       = !isset($str_img_status_ok)  || "" == trim($str_img_status_ok)   ? ""     : $str_img_status_ok;
      $this->Ini->Img_status_err      = !isset($str_img_status_err) || "" == trim($str_img_status_err)  ? ""     : $str_img_status_err;
      $this->Ini->Css_status          = "scFormInputError";
      $this->Ini->Css_status_pwd_box  = "scFormInputErrorPwdBox";
      $this->Ini->Css_status_pwd_text = "scFormInputErrorPwdText";
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


      $this->arr_buttons['actualizar_cliente']['hint']             = "";
      $this->arr_buttons['actualizar_cliente']['type']             = "button";
      $this->arr_buttons['actualizar_cliente']['value']            = "" . $this->Ini->Nm_lang['lang_actualizar_datos'] . "";
      $this->arr_buttons['actualizar_cliente']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['actualizar_cliente']['display_position'] = "text_right";
      $this->arr_buttons['actualizar_cliente']['style']            = "default";
      $this->arr_buttons['actualizar_cliente']['image']            = "";
      $this->arr_buttons['actualizar_cliente']['has_fa']            = "true";
      $this->arr_buttons['actualizar_cliente']['fontawesomeicon']            = "fas fa-user";

      $this->arr_buttons['facturar']['hint']             = "";
      $this->arr_buttons['facturar']['type']             = "button";
      $this->arr_buttons['facturar']['value']            = "" . $this->Ini->Nm_lang['lang_recuadar'] . "";
      $this->arr_buttons['facturar']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['facturar']['display_position'] = "text_right";
      $this->arr_buttons['facturar']['style']            = "paypal";
      $this->arr_buttons['facturar']['image']            = "";
      $this->arr_buttons['facturar']['has_fa']            = "true";
      $this->arr_buttons['facturar']['fontawesomeicon']            = "fas fa-file-invoice-dollar";


      $_SESSION['scriptcase']['error_icon']['form_recaudacion_anticipos_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_recaudacion_anticipos_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new']  = "off";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['insert'] = "off";
      $this->nmgp_botoes['update'] = "off";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "off";
      $this->nmgp_botoes['back'] = "off";
      $this->nmgp_botoes['forward'] = "off";
      $this->nmgp_botoes['last'] = "off";
      $this->nmgp_botoes['summary'] = "off";
      $this->nmgp_botoes['navpage'] = "off";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      $this->nmgp_botoes['actualizar_cliente'] = "on";
      $this->nmgp_botoes['facturar'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_recaudacion_anticipos_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_recaudacion_anticipos_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_recaudacion_anticipos_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form'];
          if (!isset($this->cl_id)){$this->cl_id = $this->nmgp_dados_form['cl_id'];} 
          if (!isset($this->cl_empresa)){$this->cl_empresa = $this->nmgp_dados_form['cl_empresa'];} 
          if (!isset($this->cl_tipo_identificacion)){$this->cl_tipo_identificacion = $this->nmgp_dados_form['cl_tipo_identificacion'];} 
          if (!isset($this->cl_pais)){$this->cl_pais = $this->nmgp_dados_form['cl_pais'];} 
          if (!isset($this->cl_provincia)){$this->cl_provincia = $this->nmgp_dados_form['cl_provincia'];} 
          if (!isset($this->cl_ciudad)){$this->cl_ciudad = $this->nmgp_dados_form['cl_ciudad'];} 
          if (!isset($this->cl_celular)){$this->cl_celular = $this->nmgp_dados_form['cl_celular'];} 
          if (!isset($this->cl_reteoncion_iva)){$this->cl_reteoncion_iva = $this->nmgp_dados_form['cl_reteoncion_iva'];} 
          if (!isset($this->subtotal)){$this->subtotal = $this->nmgp_dados_form['subtotal'];} 
          if (!isset($this->iva)){$this->iva = $this->nmgp_dados_form['iva'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_recaudacion_anticipos_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_recaudacion_anticipos/Igtech.DebiConta.Clases.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.DebiConta.Clases.php');
      }
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_recaudacion_anticipos/Igtech.Log.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.Log.php');
      }
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

      if (is_file($this->Ini->path_aplicacao . 'form_recaudacion_anticipos_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_recaudacion_anticipos_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_recaudacion_anticipos/form_recaudacion_anticipos_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_recaudacion_anticipos_mob_erro.class.php"); 
      }
      $this->Erro      = new form_recaudacion_anticipos_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao']))
         { 
             if ($this->cl_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_recaudacion_anticipos_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['actualizar_cliente'] = "off";
          $this->nmgp_botoes['facturar'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['actualizar_cliente'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['botoes']['actualizar_cliente'];
          $this->nmgp_botoes['facturar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['botoes']['facturar'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form'];
      }
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

            $out1_img_cache = $_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$orig_img);
            echo $orig_img . '_@@NM@@_';            copy($__file_download, $_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            $sc_obj_img = new nm_trata_img($_SERVER['DOCUMENT_ROOT'].$out1_img_cache, true);

            if(!empty($img_width) && !empty($img_height)){
                $sc_obj_img->setWidth($img_width);
                $sc_obj_img->setHeight($img_height);
            }            $sc_obj_img->createImg($_SERVER['DOCUMENT_ROOT'].$out1_img_cache);
            echo $out1_img_cache;
               exit;
            }
      if (isset($this->cl_nombre)) { $this->nm_limpa_alfa($this->cl_nombre); }
      if (isset($this->cl_identificacion)) { $this->nm_limpa_alfa($this->cl_identificacion); }
      if (isset($this->cl_direccion)) { $this->nm_limpa_alfa($this->cl_direccion); }
      if (isset($this->cl_telefono)) { $this->nm_limpa_alfa($this->cl_telefono); }
      if (isset($this->cl_email)) { $this->nm_limpa_alfa($this->cl_email); }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "facturar")
          { 
              $this->sc_btn_facturar();
          } 
          $this->NM_close_db(); 
          exit;
      } 
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- valor_pago
      $this->field_config['valor_pago']               = array();
      $this->field_config['valor_pago']['symbol_grp'] = '';
      $this->field_config['valor_pago']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['valor_pago']['symbol_dec'] = '.';
      $this->field_config['valor_pago']['symbol_neg'] = '-';
      $this->field_config['valor_pago']['format_neg'] = '2';
      //-- cl_id
      $this->field_config['cl_id']               = array();
      $this->field_config['cl_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cl_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cl_id']['symbol_dec'] = '';
      $this->field_config['cl_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cl_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- cl_pais
      $this->field_config['cl_pais']               = array();
      $this->field_config['cl_pais']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cl_pais']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cl_pais']['symbol_dec'] = '';
      $this->field_config['cl_pais']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cl_pais']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- cl_provincia
      $this->field_config['cl_provincia']               = array();
      $this->field_config['cl_provincia']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cl_provincia']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cl_provincia']['symbol_dec'] = '';
      $this->field_config['cl_provincia']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cl_provincia']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- cl_ciudad
      $this->field_config['cl_ciudad']               = array();
      $this->field_config['cl_ciudad']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cl_ciudad']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cl_ciudad']['symbol_dec'] = '';
      $this->field_config['cl_ciudad']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cl_ciudad']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- cl_reteoncion_iva
      $this->field_config['cl_reteoncion_iva']               = array();
      $this->field_config['cl_reteoncion_iva']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['cl_reteoncion_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['cl_reteoncion_iva']['symbol_dec'] = '';
      $this->field_config['cl_reteoncion_iva']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['cl_reteoncion_iva']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- subtotal
      $this->field_config['subtotal']               = array();
      $this->field_config['subtotal']['symbol_grp'] = '';
      $this->field_config['subtotal']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['subtotal']['symbol_dec'] = '.';
      $this->field_config['subtotal']['symbol_neg'] = '-';
      $this->field_config['subtotal']['format_neg'] = '2';
      //-- iva
      $this->field_config['iva']               = array();
      $this->field_config['iva']['symbol_grp'] = '';
      $this->field_config['iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['iva']['symbol_dec'] = '.';
      $this->field_config['iva']['symbol_neg'] = '-';
      $this->field_config['iva']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Gera_log_access'] = false;
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

      if ($nm_form_submit == 1 && ($this->nmgp_opcao == 'inicio' || $this->nmgp_opcao == 'igual'))
      {
          $this->nm_tira_formatacao();
      }
      if (!$this->NM_ajax_flag || 'alterar' != $this->nmgp_opcao || 'submit_form' != $this->NM_ajax_opcao)
      {
      }
//
//-----> 
//
      if ($this->NM_ajax_flag && 'validate_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          if ('validate_titulo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'titulo');
          }
          if ('validate_mensaje' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mensaje');
          }
          if ('validate_cl_identificacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cl_identificacion');
          }
          if ('validate_cl_nombre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cl_nombre');
          }
          if ('validate_cl_direccion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cl_direccion');
          }
          if ('validate_cl_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cl_telefono');
          }
          if ('validate_cl_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'cl_email');
          }
          if ('validate_libretin' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'libretin');
          }
          if ('validate_forma_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'forma_pago');
          }
          if ('validate_documento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'documento');
          }
          if ('validate_valor_pago' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'valor_pago');
          }
          form_recaudacion_anticipos_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_identificacion']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cl_identificacion = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_identificacion'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_nombre']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cl_nombre = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_nombre'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_direccion']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cl_direccion = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_direccion'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_telefono']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cl_telefono = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_telefono'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_email']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->cl_email = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']['cl_email'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_recaudacion_anticipos_mob_pack_ajax_response();
              exit;
          }
          $this->nm_formatar_campos();
          $this->nmgp_opcao = $nm_sc_sv_opcao; 
          $this->nm_gera_html();
          $this->NM_close_db(); 
          $this->nmgp_opcao = ""; 
          exit; 
      }
      if ($this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "excluir") 
      {
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_recaudacion_anticipos_mob_pack_ajax_response();
                  exit;
              }
              $campos_erro = $this->Formata_Erros($Campos_Crit, $Campos_Falta, $Campos_Erros, 4);
              $this->Campos_Mens_erro = ""; 
              $this->Erro->mensagem(__FILE__, __LINE__, "critica", $campos_erro, '', true, true); 
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
      if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form" && !$this->Apl_com_erro)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_recaudacion_anticipos_mob_pack_ajax_response();
          exit;
      }
      $this->nm_formatar_campos();
      if ($this->NM_ajax_flag)
      {
          $this->NM_ajax_info['result'] = 'OK';
          if ('alterar' == $this->NM_ajax_info['param']['nmgp_opcao'])
          {
              $this->NM_ajax_info['msgDisplay'] = NM_charset_to_utf8($this->Ini->Nm_lang['lang_othr_ajax_frmu']);
          }
          form_recaudacion_anticipos_mob_pack_ajax_response();
          exit;
      }
      $this->nm_gera_html();
      $this->NM_close_db(); 
      $this->nmgp_opcao = ""; 
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
  function html_export_print($nm_arquivo_html, $nmgp_password)
  {
      $Html_password = "";
          $Arq_base  = $this->Ini->root . $this->Ini->path_imag_temp . $nm_arquivo_html;
          $Parm_pass = ($Html_password != "") ? " -p" : "";
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_recaudacion_anticipos_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_cliente") ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
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
<form name="Fdown" method="get" action="form_recaudacion_anticipos_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_recaudacion_anticipos_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_recaudacion_anticipos_mob.php" target="_self" style="display: none"> 
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
       if ($this->SC_log_atv)
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_recaudacion_anticipos_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_recaudacion_anticipos_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_recaudacion_anticipos_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_recaudacion_anticipos_mob_pack_ajax_response();
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
   function sc_btn_facturar() 
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;
 
     ob_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
 <head>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

      if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
      {
?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
      }

?>
        <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
    <SCRIPT type="text/javascript">
      var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
      var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
      var sc_userSweetAlertDisplayed = false;
    </SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<?php
include_once("form_recaudacion_anticipos_mob_sajax_js.php");
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
    <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
    <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 </head>
  <body class="scFormPage">
      <table class="scFormTabela" align="center"><tr><td>
<?php
      $varloc_btn_php = array();
      $nmgp_opcao_saida_php = "igual";
      $nmgp_opc_ant_saida_php = "";
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->forma_pago) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['forma_pago']))
          {
              $varloc_btn_php['forma_pago'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['forma_pago'];
          }
          if (!isset($this->libretin) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['libretin']))
          {
              $varloc_btn_php['libretin'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['libretin'];
          }
          if (!isset($this->cl_email) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_email']))
          {
              $varloc_btn_php['cl_email'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_email'];
          }
          if (!isset($this->cl_telefono) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_telefono']))
          {
              $varloc_btn_php['cl_telefono'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_telefono'];
          }
          if (!isset($this->cl_direccion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_direccion']))
          {
              $varloc_btn_php['cl_direccion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_direccion'];
          }
          if (!isset($this->cl_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_id']))
          {
              $varloc_btn_php['cl_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['cl_id'];
          }
          if (!isset($this->libretin) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['libretin']))
          {
              $varloc_btn_php['libretin'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['libretin'];
          }
          if (!isset($this->forma_pago) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['forma_pago']))
          {
              $varloc_btn_php['forma_pago'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['forma_pago'];
          }
          if (!isset($this->valor_pago) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['valor_pago']))
          {
              $varloc_btn_php['valor_pago'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form']['valor_pago'];
          }
      }
      $nm_f_saida = "form_recaudacion_anticipos_mob.php";
      if (!empty($this->field_config['valor_pago']['symbol_dec']))
      {
          nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']) ; 
      }
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_SesionLogin)) {$this->sc_temp_Igtech_SesionLogin = (isset($_SESSION['Igtech_SesionLogin'])) ? $_SESSION['Igtech_SesionLogin'] : "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  if ($this->forma_pago ==''){
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "No ha seleeccionado una tesoreria";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_recaudacion_anticipos_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_recaudacion_anticipos_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "No ha seleeccionado una tesoreria";
 }
;
	if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $this->SC_exit_facturar();
    return;
}
}
if($this->libretin ==''){
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "No ha seleeccionado una libretin de documentos";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_recaudacion_anticipos_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_recaudacion_anticipos_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "No ha seleeccionado una libretin de documentos";
 }
;
	if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $this->SC_exit_facturar();
    return;
}
}

if ($this->cl_email <>'' and $this->cl_telefono <>'' and $this->cl_direccion <>'' ){
	$check_parametro="select sp_busca_parametro_cartera('".$this->sc_temp_Igtech_RucEmpresa."','PROANT','ANT001');";
	 
      $nm_select = $check_parametro; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_parametro = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_parametro[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_parametro = false;
          $this->rs_parametro_erro = $this->Db->ErrorMsg();
      } 

	if(isset($this->rs_parametro[0][0])){
		$w_prod_anticipo=$this->rs_parametro[0][0];
	}

	$check_sql = "SELECT * from sp_factura_anticipo(
													".$this->cl_id .", 
													".$this->libretin ." , 
													".$this->forma_pago .",
													".$this->valor_pago .",
													'".$w_prod_anticipo."',
													'".$this->sc_temp_Igtech_SesionLogin."') as (respuesta int,mensaje varchar,factura integer);";
	 
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
		$factura=$this->rs[0][2];	
	}
	
	$check_sql = "select sp_del_busca_parametro ('".$this->sc_temp_Igtech_RucEmpresa."','PARENDEBI','NO')";
	 
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

	if ($this->rs[0][0]=="SI"){
			$this->enviaFactura($factura,$this->sc_temp_Igtech_RucEmpresa);
	}
	
	$redir_app    = 'pdf_factura_baucher';  
	$redir_param  = array(     
						'var_documento'=>$factura,
					);
	$redir_target = '_blank';  
	 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($redir_app, $this->nm_location, $redir_param,"$redir_target", '', 440, 630);
 };
		
	
}else{
		
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "Necesita llenar datos del Consumidor";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_recaudacion_anticipos_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_recaudacion_anticipos_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "Necesita llenar datos del Consumidor";
 }
;
		if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
 if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $this->SC_exit_facturar();
    return;
}
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off'; 
       $this->SC_exit_facturar(); 
   }
   function SC_exit_facturar() 
   {
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="cl_id" value="<?php echo $this->form_encode_input($this->cl_id) ?>"/>
      <input type=hidden name="nmgp_opcao" value="<?php echo $this->form_encode_input($nmgp_opcao_saida_php); ?>"/>
      <input type=hidden name="nmgp_opc_ant" value="<?php echo $this->form_encode_input($nmgp_opc_ant_saida_php); ?>"/>
      <input type=submit name="nmgp_bok" value="<?php echo $this->Ini->Nm_lang['lang_btns_cfrm'] ?>"/>
      </form>
      </td></tr></table>
      </body>
      </html>
<?php
       if (isset($this->redir_modal) && !empty($this->redir_modal))
       {
           echo "<script type=\"text/javascript\">" . $this->redir_modal . "</script>";
           $this->redir_modal = "";
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
           case 'titulo':
               return "";
               break;
           case 'mensaje':
               return "";
               break;
           case 'cl_identificacion':
               return "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
               break;
           case 'cl_nombre':
               return "" . $this->Ini->Nm_lang['lang_nombre'] . "";
               break;
           case 'cl_direccion':
               return "" . $this->Ini->Nm_lang['lang_direccion'] . "";
               break;
           case 'cl_telefono':
               return "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
               break;
           case 'cl_email':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'libretin':
               return "" . $this->Ini->Nm_lang['lang_libretin'] . "";
               break;
           case 'forma_pago':
               return "" . $this->Ini->Nm_lang['lang_forma_pago'] . "";
               break;
           case 'documento':
               return "" . $this->Ini->Nm_lang['lang_documento'] . "";
               break;
           case 'valor_pago':
               return "" . $this->Ini->Nm_lang['lang_valor_pago'] . "";
               break;
           case 'cl_id':
               return "Cl Id";
               break;
           case 'cl_empresa':
               return "Cl Empresa";
               break;
           case 'cl_tipo_identificacion':
               return "Cl Tipo Identificacion";
               break;
           case 'cl_pais':
               return "Cl Pais";
               break;
           case 'cl_provincia':
               return "Cl Provincia";
               break;
           case 'cl_ciudad':
               return "Cl Ciudad";
               break;
           case 'cl_celular':
               return "Cl Celular";
               break;
           case 'cl_reteoncion_iva':
               return "Cl Reteoncion Iva";
               break;
           case 'subtotal':
               return "" . $this->Ini->Nm_lang['lang_subtotal'] . "";
               break;
           case 'iva':
               return "" . $this->Ini->Nm_lang['lang_iva'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_recaudacion_anticipos_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_recaudacion_anticipos_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_recaudacion_anticipos_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_recaudacion_anticipos_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'titulo' == $filtro)) || (is_array($filtro) && in_array('titulo', $filtro)))
        $this->ValidateField_titulo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'mensaje' == $filtro)) || (is_array($filtro) && in_array('mensaje', $filtro)))
        $this->ValidateField_mensaje($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cl_identificacion' == $filtro)) || (is_array($filtro) && in_array('cl_identificacion', $filtro)))
        $this->ValidateField_cl_identificacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cl_nombre' == $filtro)) || (is_array($filtro) && in_array('cl_nombre', $filtro)))
        $this->ValidateField_cl_nombre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cl_direccion' == $filtro)) || (is_array($filtro) && in_array('cl_direccion', $filtro)))
        $this->ValidateField_cl_direccion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cl_telefono' == $filtro)) || (is_array($filtro) && in_array('cl_telefono', $filtro)))
        $this->ValidateField_cl_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'cl_email' == $filtro)) || (is_array($filtro) && in_array('cl_email', $filtro)))
        $this->ValidateField_cl_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'libretin' == $filtro)) || (is_array($filtro) && in_array('libretin', $filtro)))
        $this->ValidateField_libretin($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'forma_pago' == $filtro)) || (is_array($filtro) && in_array('forma_pago', $filtro)))
        $this->ValidateField_forma_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'documento' == $filtro)) || (is_array($filtro) && in_array('documento', $filtro)))
        $this->ValidateField_documento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'valor_pago' == $filtro)) || (is_array($filtro) && in_array('valor_pago', $filtro)))
        $this->ValidateField_valor_pago($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_titulo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['titulo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->titulo) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'titulo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_titulo

    function ValidateField_mensaje(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['mensaje'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->mensaje) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'mensaje';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_mensaje

    function ValidateField_cl_identificacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['cl_identificacion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cl_identificacion) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cl_identificacion']))
              {
                  $Campos_Erros['cl_identificacion'] = array();
              }
              $Campos_Erros['cl_identificacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cl_identificacion']) || !is_array($this->NM_ajax_info['errList']['cl_identificacion']))
              {
                  $this->NM_ajax_info['errList']['cl_identificacion'] = array();
              }
              $this->NM_ajax_info['errList']['cl_identificacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cl_identificacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cl_identificacion

    function ValidateField_cl_nombre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['cl_nombre'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cl_nombre) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nombre'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cl_nombre']))
              {
                  $Campos_Erros['cl_nombre'] = array();
              }
              $Campos_Erros['cl_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cl_nombre']) || !is_array($this->NM_ajax_info['errList']['cl_nombre']))
              {
                  $this->NM_ajax_info['errList']['cl_nombre'] = array();
              }
              $this->NM_ajax_info['errList']['cl_nombre'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cl_nombre';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cl_nombre

    function ValidateField_cl_direccion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['cl_direccion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cl_direccion) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cl_direccion']))
              {
                  $Campos_Erros['cl_direccion'] = array();
              }
              $Campos_Erros['cl_direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cl_direccion']) || !is_array($this->NM_ajax_info['errList']['cl_direccion']))
              {
                  $this->NM_ajax_info['errList']['cl_direccion'] = array();
              }
              $this->NM_ajax_info['errList']['cl_direccion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cl_direccion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cl_direccion

    function ValidateField_cl_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['cl_telefono'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cl_telefono) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lot_telefono'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cl_telefono']))
              {
                  $Campos_Erros['cl_telefono'] = array();
              }
              $Campos_Erros['cl_telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cl_telefono']) || !is_array($this->NM_ajax_info['errList']['cl_telefono']))
              {
                  $this->NM_ajax_info['errList']['cl_telefono'] = array();
              }
              $this->NM_ajax_info['errList']['cl_telefono'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cl_telefono';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cl_telefono

    function ValidateField_cl_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['cl_email'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->cl_email) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['cl_email']))
              {
                  $Campos_Erros['cl_email'] = array();
              }
              $Campos_Erros['cl_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['cl_email']) || !is_array($this->NM_ajax_info['errList']['cl_email']))
              {
                  $this->NM_ajax_info['errList']['cl_email'] = array();
              }
              $this->NM_ajax_info['errList']['cl_email'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'cl_email';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_cl_email

    function ValidateField_libretin(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['libretin'])) {
       return;
   }
               if (!empty($this->libretin) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']) && !in_array($this->libretin, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['libretin']))
                   {
                       $Campos_Erros['libretin'] = array();
                   }
                   $Campos_Erros['libretin'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['libretin']) || !is_array($this->NM_ajax_info['errList']['libretin']))
                   {
                       $this->NM_ajax_info['errList']['libretin'] = array();
                   }
                   $this->NM_ajax_info['errList']['libretin'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'libretin';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_libretin

    function ValidateField_forma_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['forma_pago'])) {
       return;
   }
               if (!empty($this->forma_pago) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']) && !in_array($this->forma_pago, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['forma_pago']))
                   {
                       $Campos_Erros['forma_pago'] = array();
                   }
                   $Campos_Erros['forma_pago'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['forma_pago']) || !is_array($this->NM_ajax_info['errList']['forma_pago']))
                   {
                       $this->NM_ajax_info['errList']['forma_pago'] = array();
                   }
                   $this->NM_ajax_info['errList']['forma_pago'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'forma_pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_forma_pago

    function ValidateField_documento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['documento'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->documento) > 20) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_documento'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['documento']))
              {
                  $Campos_Erros['documento'] = array();
              }
              $Campos_Erros['documento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['documento']) || !is_array($this->NM_ajax_info['errList']['documento']))
              {
                  $this->NM_ajax_info['errList']['documento'] = array();
              }
              $this->NM_ajax_info['errList']['documento'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 20 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'documento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_documento

    function ValidateField_valor_pago(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['valor_pago'])) {
          if (!empty($this->field_config['valor_pago']['symbol_dec'])) {
              nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->valor_pago === "" || is_null($this->valor_pago))  
      { 
          $this->valor_pago = 0;
          $this->sc_force_zero[] = 'valor_pago';
      } 
      if (!empty($this->field_config['valor_pago']['symbol_dec']))
      {
          nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']) ; 
          if ('.' == substr($this->valor_pago, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->valor_pago, 1)))
              {
                  $this->valor_pago = '';
              }
              else
              {
                  $this->valor_pago = '0' . $this->valor_pago;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->valor_pago != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->valor_pago) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor_pago'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['valor_pago']))
                  {
                      $Campos_Erros['valor_pago'] = array();
                  }
                  $Campos_Erros['valor_pago'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['valor_pago']) || !is_array($this->NM_ajax_info['errList']['valor_pago']))
                  {
                      $this->NM_ajax_info['errList']['valor_pago'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_pago'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->valor_pago, 18, 2, -0, 1.0E+20, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_valor_pago'] . "; " ; 
                  if (!isset($Campos_Erros['valor_pago']))
                  {
                      $Campos_Erros['valor_pago'] = array();
                  }
                  $Campos_Erros['valor_pago'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['valor_pago']) || !is_array($this->NM_ajax_info['errList']['valor_pago']))
                  {
                      $this->NM_ajax_info['errList']['valor_pago'] = array();
                  }
                  $this->NM_ajax_info['errList']['valor_pago'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'valor_pago';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_valor_pago

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
    $this->nmgp_dados_form['titulo'] = $this->titulo;
    $this->nmgp_dados_form['mensaje'] = $this->mensaje;
    $this->nmgp_dados_form['cl_identificacion'] = $this->cl_identificacion;
    $this->nmgp_dados_form['cl_nombre'] = $this->cl_nombre;
    $this->nmgp_dados_form['cl_direccion'] = $this->cl_direccion;
    $this->nmgp_dados_form['cl_telefono'] = $this->cl_telefono;
    $this->nmgp_dados_form['cl_email'] = $this->cl_email;
    $this->nmgp_dados_form['libretin'] = $this->libretin;
    $this->nmgp_dados_form['forma_pago'] = $this->forma_pago;
    $this->nmgp_dados_form['documento'] = $this->documento;
    $this->nmgp_dados_form['valor_pago'] = $this->valor_pago;
    $this->nmgp_dados_form['cl_id'] = $this->cl_id;
    $this->nmgp_dados_form['cl_empresa'] = $this->cl_empresa;
    $this->nmgp_dados_form['cl_tipo_identificacion'] = $this->cl_tipo_identificacion;
    $this->nmgp_dados_form['cl_pais'] = $this->cl_pais;
    $this->nmgp_dados_form['cl_provincia'] = $this->cl_provincia;
    $this->nmgp_dados_form['cl_ciudad'] = $this->cl_ciudad;
    $this->nmgp_dados_form['cl_celular'] = $this->cl_celular;
    $this->nmgp_dados_form['cl_reteoncion_iva'] = $this->cl_reteoncion_iva;
    $this->nmgp_dados_form['subtotal'] = $this->subtotal;
    $this->nmgp_dados_form['iva'] = $this->iva;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['valor_pago'] = $this->valor_pago;
      if (!empty($this->field_config['valor_pago']['symbol_dec']))
      {
         nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']);
      }
      $this->Before_unformat['cl_id'] = $this->cl_id;
      nm_limpa_numero($this->cl_id, $this->field_config['cl_id']['symbol_grp']) ; 
      $this->Before_unformat['cl_pais'] = $this->cl_pais;
      nm_limpa_numero($this->cl_pais, $this->field_config['cl_pais']['symbol_grp']) ; 
      $this->Before_unformat['cl_provincia'] = $this->cl_provincia;
      nm_limpa_numero($this->cl_provincia, $this->field_config['cl_provincia']['symbol_grp']) ; 
      $this->Before_unformat['cl_ciudad'] = $this->cl_ciudad;
      nm_limpa_numero($this->cl_ciudad, $this->field_config['cl_ciudad']['symbol_grp']) ; 
      $this->Before_unformat['cl_reteoncion_iva'] = $this->cl_reteoncion_iva;
      nm_limpa_numero($this->cl_reteoncion_iva, $this->field_config['cl_reteoncion_iva']['symbol_grp']) ; 
      $this->Before_unformat['subtotal'] = $this->subtotal;
      if (!empty($this->field_config['subtotal']['symbol_dec']))
      {
         nm_limpa_valor($this->subtotal, $this->field_config['subtotal']['symbol_dec'], $this->field_config['subtotal']['symbol_grp']);
      }
      $this->Before_unformat['iva'] = $this->iva;
      if (!empty($this->field_config['iva']['symbol_dec']))
      {
         nm_limpa_valor($this->iva, $this->field_config['iva']['symbol_dec'], $this->field_config['iva']['symbol_grp']);
      }
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
      if ($Nome_Campo == "valor_pago")
      {
          if (!empty($this->field_config['valor_pago']['symbol_dec']))
          {
             nm_limpa_valor($this->valor_pago, $this->field_config['valor_pago']['symbol_dec'], $this->field_config['valor_pago']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "cl_id")
      {
          nm_limpa_numero($this->cl_id, $this->field_config['cl_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cl_pais")
      {
          nm_limpa_numero($this->cl_pais, $this->field_config['cl_pais']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cl_provincia")
      {
          nm_limpa_numero($this->cl_provincia, $this->field_config['cl_provincia']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cl_ciudad")
      {
          nm_limpa_numero($this->cl_ciudad, $this->field_config['cl_ciudad']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "cl_reteoncion_iva")
      {
          nm_limpa_numero($this->cl_reteoncion_iva, $this->field_config['cl_reteoncion_iva']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "subtotal")
      {
          if (!empty($this->field_config['subtotal']['symbol_dec']))
          {
             nm_limpa_valor($this->subtotal, $this->field_config['subtotal']['symbol_dec'], $this->field_config['subtotal']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "iva")
      {
          if (!empty($this->field_config['iva']['symbol_dec']))
          {
             nm_limpa_valor($this->iva, $this->field_config['iva']['symbol_dec'], $this->field_config['iva']['symbol_grp']);
          }
      }
   }
   function nm_formatar_campos($format_fields = array())
   {
      global $nm_form_submit;
     if (isset($this->formatado) && $this->formatado)
     {
         return;
     }
     $this->formatado = true;
      if ('' !== $this->valor_pago || (!empty($format_fields) && isset($format_fields['valor_pago'])))
      {
          nmgp_Form_Num_Val($this->valor_pago, $this->field_config['valor_pago']['symbol_grp'], $this->field_config['valor_pago']['symbol_dec'], "2", "S", $this->field_config['valor_pago']['format_neg'], "", "", "-", $this->field_config['valor_pago']['symbol_fmt']) ; 
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
          $this->ajax_return_values_titulo();
          $this->ajax_return_values_mensaje();
          $this->ajax_return_values_cl_identificacion();
          $this->ajax_return_values_cl_nombre();
          $this->ajax_return_values_cl_direccion();
          $this->ajax_return_values_cl_telefono();
          $this->ajax_return_values_cl_email();
          $this->ajax_return_values_libretin();
          $this->ajax_return_values_forma_pago();
          $this->ajax_return_values_documento();
          $this->ajax_return_values_valor_pago();
          $this->ajax_return_values_cl_id();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['cl_id']['keyVal'] = form_recaudacion_anticipos_mob_pack_protect_string($this->nmgp_dados_form['cl_id']);
          }
   } // ajax_return_values

          //----- titulo
   function ajax_return_values_titulo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("titulo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->titulo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['titulo'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- mensaje
   function ajax_return_values_mensaje($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("mensaje", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->mensaje);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['mensaje'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cl_identificacion
   function ajax_return_values_cl_identificacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cl_identificacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cl_identificacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cl_identificacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cl_nombre
   function ajax_return_values_cl_nombre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cl_nombre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cl_nombre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cl_nombre'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cl_direccion
   function ajax_return_values_cl_direccion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cl_direccion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cl_direccion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cl_direccion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cl_telefono
   function ajax_return_values_cl_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cl_telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cl_telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cl_telefono'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- cl_email
   function ajax_return_values_cl_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cl_email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cl_email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cl_email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- libretin
   function ajax_return_values_libretin($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("libretin", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->libretin);
              $aLookup = array();
              $this->_tmp_lookup_libretin = $this->libretin;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_valor_pago = $this->valor_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_valor_pago = $this->valor_pago;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='99'";

   $this->valor_pago = $old_value_valor_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_recaudacion_anticipos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_recaudacion_anticipos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"libretin\"";
          if (isset($this->NM_ajax_info['select_html']['libretin']) && !empty($this->NM_ajax_info['select_html']['libretin']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['libretin']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->libretin == $sValue)
                  {
                      $this->_tmp_lookup_libretin = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['libretin'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['libretin']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['libretin']['valList'][$i] = form_recaudacion_anticipos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['libretin']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['libretin']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['libretin']['labList'] = $aLabel;
          }
   }

          //----- forma_pago
   function ajax_return_values_forma_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("forma_pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->forma_pago);
              $aLookup = array();
              $this->_tmp_lookup_forma_pago = $this->forma_pago;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_valor_pago = $this->valor_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_valor_pago = $this->valor_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  WHERE fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' AND fp_compra_venta in ('VENTAS','TODOS') and fp_tipo <>'CRÉDITO' ORDER BY fp_descripcion";

   $this->valor_pago = $old_value_valor_pago;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_recaudacion_anticipos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_recaudacion_anticipos_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'][] = $rs->fields[0];
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
          $aLookupOrig = $aLookup;
          $sSelComp = "name=\"forma_pago\"";
          if (isset($this->NM_ajax_info['select_html']['forma_pago']) && !empty($this->NM_ajax_info['select_html']['forma_pago']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['forma_pago']);
          }
          $sLookup = '';
          if (empty($aLookup))
          {
              $aLookup[] = array('' => '');
          }
          foreach ($aLookup as $aOption)
          {
              foreach ($aOption as $sValue => $sLabel)
              {

                  if ($this->forma_pago == $sValue)
                  {
                      $this->_tmp_lookup_forma_pago = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['forma_pago'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['forma_pago']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['forma_pago']['valList'][$i] = form_recaudacion_anticipos_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['forma_pago']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['forma_pago']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['forma_pago']['labList'] = $aLabel;
          }
   }

          //----- documento
   function ajax_return_values_documento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("documento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->documento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['documento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- valor_pago
   function ajax_return_values_valor_pago($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("valor_pago", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->valor_pago);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['valor_pago'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- cl_id
   function ajax_return_values_cl_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("cl_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->cl_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['cl_id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("cl_id", $this->form_encode_input($sTmpValue))),
              );
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['upload_dir'][$fieldName][] = $newName;
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
       $this->NM_ajax_info['btnVars']['var_btn_actualizar_cliente_cl_id'] = $this->form_encode_input($this->nmgp_dados_form['cl_id']);
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_mensaje = $this->mensaje;
    $original_titulo = $this->titulo;
}
  $this->titulo = $this->Ini->Nm_lang['lang_recepcion_anticipos'] ;

$select_sql="SELECT count(*) 
			 FROM jap_contrato 
			 WHERE con_propietario=".$this->cl_id ."
			 AND con_estado<>'N'";
 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->Dataset = array();
      $this->dataset = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->Dataset[$SCy] [$SCx] = $SCrx->fields[$SCx];
                      $this->dataset[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Dataset = false;
          $this->Dataset_erro = $this->Db->ErrorMsg();
          $this->dataset = false;
          $this->dataset_erro = $this->Db->ErrorMsg();
      } 

if($this->dataset[0][0]==0){
	$this->nmgp_cmp_hidden["mensaje"] = 'on'; $this->NM_ajax_info['fieldDisplay']['mensaje'] = 'on';
	$this->mensaje ='Este cliente no tiene contratos activos';
}else{
	$this->nmgp_cmp_hidden["mensaje"] = 'off'; $this->NM_ajax_info['fieldDisplay']['mensaje'] = 'off';
	$this->mensaje ='';
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_mensaje != $this->mensaje || (isset($bFlagRead_mensaje) && $bFlagRead_mensaje)))
    {
        $this->ajax_return_values_mensaje(true);
    }
    if (($original_titulo != $this->titulo || (isset($bFlagRead_titulo) && $bFlagRead_titulo)))
    {
        $this->ajax_return_values_titulo(true);
    }
}
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off'; 
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
      $this->valor_pago = str_replace($sc_parm1, $sc_parm2, $this->valor_pago); 
      $this->subtotal = str_replace($sc_parm1, $sc_parm2, $this->subtotal); 
      $this->iva = str_replace($sc_parm1, $sc_parm2, $this->iva); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->valor_pago = "'" . $this->valor_pago . "'";
      $this->subtotal = "'" . $this->subtotal . "'";
      $this->iva = "'" . $this->iva . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->valor_pago = str_replace("'", "", $this->valor_pago); 
      $this->subtotal = str_replace("'", "", $this->subtotal); 
      $this->iva = str_replace("'", "", $this->iva); 
   } 
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']))
          {
               $sc_where_pos = " WHERE ((cl_id < $this->cl_id))";
               if ('' != $sc_where)
               {
                   if ('where ' == strtolower(substr(trim($sc_where), 0, 6)))
                   {
                       $sc_where = substr(trim($sc_where), 6);
                   }
                   if ('and ' == strtolower(substr(trim($sc_where), 0, 4)))
                   {
                       $sc_where = substr(trim($sc_where), 4);
                   }
                   $sc_where_pos .= ' AND (' . $sc_where . ')';
                   $sc_where = ' WHERE ' . $sc_where;
               }
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->cl_id)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = '';

   }

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
      global  $nm_form_submit, $teste_validade, $sc_where;
 
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
          $this->NM_gera_log_old();
      }
      if (!empty($this->sc_force_zero))
      {
          foreach ($this->sc_force_zero as $i_force_zero => $sc_force_zero_field)
          {
              eval('if ($this->' . $sc_force_zero_field . ' == 0) {$this->' . $sc_force_zero_field . ' = "";}');
          }
      }
      $this->sc_force_zero = array();
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
      $NM_val_form['titulo'] = $this->titulo;
      $NM_val_form['mensaje'] = $this->mensaje;
      $NM_val_form['cl_identificacion'] = $this->cl_identificacion;
      $NM_val_form['cl_nombre'] = $this->cl_nombre;
      $NM_val_form['cl_direccion'] = $this->cl_direccion;
      $NM_val_form['cl_telefono'] = $this->cl_telefono;
      $NM_val_form['cl_email'] = $this->cl_email;
      $NM_val_form['libretin'] = $this->libretin;
      $NM_val_form['forma_pago'] = $this->forma_pago;
      $NM_val_form['documento'] = $this->documento;
      $NM_val_form['valor_pago'] = $this->valor_pago;
      $NM_val_form['cl_id'] = $this->cl_id;
      $NM_val_form['cl_empresa'] = $this->cl_empresa;
      $NM_val_form['cl_tipo_identificacion'] = $this->cl_tipo_identificacion;
      $NM_val_form['cl_pais'] = $this->cl_pais;
      $NM_val_form['cl_provincia'] = $this->cl_provincia;
      $NM_val_form['cl_ciudad'] = $this->cl_ciudad;
      $NM_val_form['cl_celular'] = $this->cl_celular;
      $NM_val_form['cl_reteoncion_iva'] = $this->cl_reteoncion_iva;
      $NM_val_form['subtotal'] = $this->subtotal;
      $NM_val_form['iva'] = $this->iva;
      if ($this->cl_id === "" || is_null($this->cl_id))  
      { 
          $this->cl_id = 0;
      } 
      if ($this->cl_pais === "" || is_null($this->cl_pais))  
      { 
          $this->cl_pais = 0;
          $this->sc_force_zero[] = 'cl_pais';
      } 
      if ($this->cl_provincia === "" || is_null($this->cl_provincia))  
      { 
          $this->cl_provincia = 0;
          $this->sc_force_zero[] = 'cl_provincia';
      } 
      if ($this->cl_ciudad === "" || is_null($this->cl_ciudad))  
      { 
          $this->cl_ciudad = 0;
          $this->sc_force_zero[] = 'cl_ciudad';
      } 
      if ($this->cl_reteoncion_iva === "" || is_null($this->cl_reteoncion_iva))  
      { 
          $this->cl_reteoncion_iva = 0;
          $this->sc_force_zero[] = 'cl_reteoncion_iva';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->cl_empresa_before_qstr = $this->cl_empresa;
          $this->cl_empresa = substr($this->Db->qstr($this->cl_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_empresa);
          }
          if ($this->cl_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_empresa = "null"; 
              $NM_val_null[] = "cl_empresa";
          } 
          $this->cl_nombre_before_qstr = $this->cl_nombre;
          $this->cl_nombre = substr($this->Db->qstr($this->cl_nombre), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_nombre = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_nombre);
          }
          if ($this->cl_nombre == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_nombre = "null"; 
              $NM_val_null[] = "cl_nombre";
          } 
          $this->cl_tipo_identificacion_before_qstr = $this->cl_tipo_identificacion;
          $this->cl_tipo_identificacion = substr($this->Db->qstr($this->cl_tipo_identificacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_tipo_identificacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_tipo_identificacion);
          }
          if ($this->cl_tipo_identificacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_tipo_identificacion = "null"; 
              $NM_val_null[] = "cl_tipo_identificacion";
          } 
          $this->cl_identificacion_before_qstr = $this->cl_identificacion;
          $this->cl_identificacion = substr($this->Db->qstr($this->cl_identificacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_identificacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_identificacion);
          }
          if ($this->cl_identificacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_identificacion = "null"; 
              $NM_val_null[] = "cl_identificacion";
          } 
          $this->cl_direccion_before_qstr = $this->cl_direccion;
          $this->cl_direccion = substr($this->Db->qstr($this->cl_direccion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_direccion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_direccion);
          }
          if ($this->cl_direccion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_direccion = "null"; 
              $NM_val_null[] = "cl_direccion";
          } 
          $this->cl_telefono_before_qstr = $this->cl_telefono;
          $this->cl_telefono = substr($this->Db->qstr($this->cl_telefono), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_telefono = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_telefono);
          }
          if ($this->cl_telefono == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_telefono = "null"; 
              $NM_val_null[] = "cl_telefono";
          } 
          $this->cl_celular_before_qstr = $this->cl_celular;
          $this->cl_celular = substr($this->Db->qstr($this->cl_celular), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_celular = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_celular);
          }
          if ($this->cl_celular == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_celular = "null"; 
              $NM_val_null[] = "cl_celular";
          } 
          $this->cl_email_before_qstr = $this->cl_email;
          $this->cl_email = substr($this->Db->qstr($this->cl_email), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->cl_email = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->cl_email);
          }
          if ($this->cl_email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->cl_email = "null"; 
              $NM_val_null[] = "cl_email";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_recaudacion_anticipos_mob_pack_ajax_response();
              }
              exit; 
          }  
          $bUpdateOk = true;
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd']); 
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
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "cl_nombre = '$this->cl_nombre', cl_identificacion = '$this->cl_identificacion', cl_direccion = '$this->cl_direccion', cl_telefono = '$this->cl_telefono', cl_email = '$this->cl_email'"; 
              } 
              if (isset($NM_val_form['cl_empresa']) && $NM_val_form['cl_empresa'] != $this->nmgp_dados_select['cl_empresa']) 
              { 
                  $SC_fields_update[] = "cl_empresa = '$this->cl_empresa'"; 
              } 
              if (isset($NM_val_form['cl_tipo_identificacion']) && $NM_val_form['cl_tipo_identificacion'] != $this->nmgp_dados_select['cl_tipo_identificacion']) 
              { 
                  $SC_fields_update[] = "cl_tipo_identificacion = '$this->cl_tipo_identificacion'"; 
              } 
              if (isset($NM_val_form['cl_pais']) && $NM_val_form['cl_pais'] != $this->nmgp_dados_select['cl_pais']) 
              { 
                  $SC_fields_update[] = "cl_pais = $this->cl_pais"; 
              } 
              if (isset($NM_val_form['cl_provincia']) && $NM_val_form['cl_provincia'] != $this->nmgp_dados_select['cl_provincia']) 
              { 
                  $SC_fields_update[] = "cl_provincia = $this->cl_provincia"; 
              } 
              if (isset($NM_val_form['cl_ciudad']) && $NM_val_form['cl_ciudad'] != $this->nmgp_dados_select['cl_ciudad']) 
              { 
                  $SC_fields_update[] = "cl_ciudad = $this->cl_ciudad"; 
              } 
              if (isset($NM_val_form['cl_celular']) && $NM_val_form['cl_celular'] != $this->nmgp_dados_select['cl_celular']) 
              { 
                  $SC_fields_update[] = "cl_celular = '$this->cl_celular'"; 
              } 
              if (isset($NM_val_form['cl_reteoncion_iva']) && $NM_val_form['cl_reteoncion_iva'] != $this->nmgp_dados_select['cl_reteoncion_iva']) 
              { 
                  $SC_fields_update[] = "cl_reteoncion_iva = $this->cl_reteoncion_iva"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE cl_id = $this->cl_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE cl_id = $this->cl_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE cl_id = $this->cl_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE cl_id = $this->cl_id ";  
              }  
              else  
              {
                  $comando .= " WHERE cl_id = $this->cl_id ";  
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
                                  form_recaudacion_anticipos_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->cl_empresa = $this->cl_empresa_before_qstr;
              $this->cl_nombre = $this->cl_nombre_before_qstr;
              $this->cl_tipo_identificacion = $this->cl_tipo_identificacion_before_qstr;
              $this->cl_identificacion = $this->cl_identificacion_before_qstr;
              $this->cl_direccion = $this->cl_direccion_before_qstr;
              $this->cl_telefono = $this->cl_telefono_before_qstr;
              $this->cl_celular = $this->cl_celular_before_qstr;
              $this->cl_email = $this->cl_email_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['cl_id'])) { $this->cl_id = $NM_val_form['cl_id']; }
              elseif (isset($this->cl_id)) { $this->nm_limpa_alfa($this->cl_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['cl_nombre'])) { $this->cl_nombre = $NM_val_form['cl_nombre']; }
              elseif (isset($this->cl_nombre)) { $this->nm_limpa_alfa($this->cl_nombre); }
              if     (isset($NM_val_form) && isset($NM_val_form['cl_identificacion'])) { $this->cl_identificacion = $NM_val_form['cl_identificacion']; }
              elseif (isset($this->cl_identificacion)) { $this->nm_limpa_alfa($this->cl_identificacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['cl_direccion'])) { $this->cl_direccion = $NM_val_form['cl_direccion']; }
              elseif (isset($this->cl_direccion)) { $this->nm_limpa_alfa($this->cl_direccion); }
              if     (isset($NM_val_form) && isset($NM_val_form['cl_telefono'])) { $this->cl_telefono = $NM_val_form['cl_telefono']; }
              elseif (isset($this->cl_telefono)) { $this->nm_limpa_alfa($this->cl_telefono); }
              if     (isset($NM_val_form) && isset($NM_val_form['cl_email'])) { $this->cl_email = $NM_val_form['cl_email']; }
              elseif (isset($this->cl_email)) { $this->nm_limpa_alfa($this->cl_email); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('titulo', 'mensaje', 'cl_identificacion', 'cl_nombre', 'cl_direccion', 'cl_telefono', 'cl_email', 'libretin', 'forma_pago', 'documento', 'valor_pago'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              exit; 
          }  
          $tmp_result = (int) $rs1->fields[0]; 
          if ($tmp_result != 0) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_pkey']); 
              $this->nmgp_opcao = "nada"; 
              $GLOBALS["erro_incl"] = 1; 
              $bInsertOk = false;
              $this->sc_evento = 'insert';
          } 
          $rs1->Close(); 
          $aInsertOk = array(); 
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_recaudacion_anticipos_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES ($this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva) VALUES (" . $NM_seq_auto . "$this->cl_id, '$this->cl_empresa', '$this->cl_nombre', '$this->cl_tipo_identificacion', '$this->cl_identificacion', $this->cl_pais, $this->cl_provincia, $this->cl_ciudad, '$this->cl_direccion', '$this->cl_telefono', '$this->cl_celular', '$this->cl_email', $this->cl_reteoncion_iva)"; 
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
                              form_recaudacion_anticipos_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->cl_empresa = $this->cl_empresa_before_qstr;
              $this->cl_nombre = $this->cl_nombre_before_qstr;
              $this->cl_tipo_identificacion = $this->cl_tipo_identificacion_before_qstr;
              $this->cl_identificacion = $this->cl_identificacion_before_qstr;
              $this->cl_direccion = $this->cl_direccion_before_qstr;
              $this->cl_telefono = $this->cl_telefono_before_qstr;
              $this->cl_celular = $this->cl_celular_before_qstr;
              $this->cl_email = $this->cl_email_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->cl_empresa = $this->cl_empresa_before_qstr;
              $this->cl_nombre = $this->cl_nombre_before_qstr;
              $this->cl_tipo_identificacion = $this->cl_tipo_identificacion_before_qstr;
              $this->cl_identificacion = $this->cl_identificacion_before_qstr;
              $this->cl_direccion = $this->cl_direccion_before_qstr;
              $this->cl_telefono = $this->cl_telefono_before_qstr;
              $this->cl_celular = $this->cl_celular_before_qstr;
              $this->cl_email = $this->cl_email_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->cl_id = substr($this->Db->qstr($this->cl_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
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
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_dele_nfnd']); 
              $this->nmgp_opcao = "nada"; 
              $this->sc_evento = 'delete';
          } 
          else 
          { 
              $rs1->Close(); 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where cl_id = $this->cl_id "); 
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
                          form_recaudacion_anticipos_mob_pack_ajax_response();
                          exit; 
                      }
                  } 
              } 
              $this->sc_evento = "delete"; 
              if (empty($this->sc_erro_delete)) {
                  $this->record_delete_ok = true;
              }
              $this->nmgp_opcao = "avanca"; 
              $this->nm_flag_iframe = true;

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']);
              }

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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['parms'] = "cl_id?#?$this->cl_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->cl_id = null === $this->cl_id ? null : substr($this->Db->qstr($this->cl_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'] . ")";
          }
      }
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "inicio")
      { 
          $this->nmgp_opcao = "igual"; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT cl_id, cl_empresa, cl_nombre, cl_tipo_identificacion, cl_identificacion, cl_pais, cl_provincia, cl_ciudad, cl_direccion, cl_telefono, cl_celular, cl_email, cl_reteoncion_iva from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "cl_id = $this->cl_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "cl_id = $this->cl_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "cl_id = $this->cl_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "cl_id = $this->cl_id"; 
              }  
              else  
              {
                  $aWhere[] = "cl_id = $this->cl_id"; 
              }  
              if (!empty($sc_where_filter))  
              {
                  $teste_select = $nmgp_select . $this->returnWhere($aWhere);
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = $teste_select; 
                  $rs = $this->Db->Execute($teste_select); 
                  if ($rs->EOF)
                  {
                     $aWhere = array($sc_where_filter);
                  }  
                  $rs->Close(); 
              }  
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "cl_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['select'] = ""; 
              } 
          } 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rs = $this->Db->Execute($nmgp_select) ; 
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
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['actualizar_cliente'] = $this->nmgp_botoes['actualizar_cliente'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['facturar'] = $this->nmgp_botoes['facturar'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter'] = true;
                  return; 
              }
              if ($this->nmgp_botoes['insert'] != "on")
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
              }
              $this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes['update'] = "off";
              $this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes['delete'] = "off";
              return; 
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_nfnd_extr'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->cl_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['cl_id'] = $this->cl_id;
              $this->cl_empresa = $rs->fields[1] ; 
              $this->nmgp_dados_select['cl_empresa'] = $this->cl_empresa;
              $this->cl_nombre = $rs->fields[2] ; 
              $this->nmgp_dados_select['cl_nombre'] = $this->cl_nombre;
              $this->cl_tipo_identificacion = $rs->fields[3] ; 
              $this->nmgp_dados_select['cl_tipo_identificacion'] = $this->cl_tipo_identificacion;
              $this->cl_identificacion = $rs->fields[4] ; 
              $this->nmgp_dados_select['cl_identificacion'] = $this->cl_identificacion;
              $this->cl_pais = $rs->fields[5] ; 
              $this->nmgp_dados_select['cl_pais'] = $this->cl_pais;
              $this->cl_provincia = $rs->fields[6] ; 
              $this->nmgp_dados_select['cl_provincia'] = $this->cl_provincia;
              $this->cl_ciudad = $rs->fields[7] ; 
              $this->nmgp_dados_select['cl_ciudad'] = $this->cl_ciudad;
              $this->cl_direccion = $rs->fields[8] ; 
              $this->nmgp_dados_select['cl_direccion'] = $this->cl_direccion;
              $this->cl_telefono = $rs->fields[9] ; 
              $this->nmgp_dados_select['cl_telefono'] = $this->cl_telefono;
              $this->cl_celular = $rs->fields[10] ; 
              $this->nmgp_dados_select['cl_celular'] = $this->cl_celular;
              $this->cl_email = $rs->fields[11] ; 
              $this->nmgp_dados_select['cl_email'] = $this->cl_email;
              $this->cl_reteoncion_iva = $rs->fields[12] ; 
              $this->nmgp_dados_select['cl_reteoncion_iva'] = $this->cl_reteoncion_iva;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->cl_id = (string)$this->cl_id; 
              $this->cl_pais = (string)$this->cl_pais; 
              $this->cl_provincia = (string)$this->cl_provincia; 
              $this->cl_ciudad = (string)$this->cl_ciudad; 
              $this->cl_reteoncion_iva = (string)$this->cl_reteoncion_iva; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['parms'] = "cl_id?#?$this->cl_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->controle_navegacao();
          }
      } 
      if ($this->nmgp_opcao == "novo" || $this->nmgp_opcao == "refresh_insert") 
      { 
          $this->sc_evento_old = $this->sc_evento;
          $this->sc_evento = "novo";
          if ('refresh_insert' == $this->nmgp_opcao)
          {
              $this->nmgp_opcao = 'novo';
          }
          else
          {
              $this->nm_formatar_campos();
              $this->cl_id = "";  
              $this->nmgp_dados_form["cl_id"] = $this->cl_id;
              $this->cl_empresa = "";  
              $this->nmgp_dados_form["cl_empresa"] = $this->cl_empresa;
              $this->cl_nombre = "";  
              $this->nmgp_dados_form["cl_nombre"] = $this->cl_nombre;
              $this->cl_tipo_identificacion = "";  
              $this->nmgp_dados_form["cl_tipo_identificacion"] = $this->cl_tipo_identificacion;
              $this->cl_identificacion = "";  
              $this->nmgp_dados_form["cl_identificacion"] = $this->cl_identificacion;
              $this->cl_pais = "";  
              $this->nmgp_dados_form["cl_pais"] = $this->cl_pais;
              $this->cl_provincia = "";  
              $this->nmgp_dados_form["cl_provincia"] = $this->cl_provincia;
              $this->cl_ciudad = "";  
              $this->nmgp_dados_form["cl_ciudad"] = $this->cl_ciudad;
              $this->cl_direccion = "";  
              $this->nmgp_dados_form["cl_direccion"] = $this->cl_direccion;
              $this->cl_telefono = "";  
              $this->nmgp_dados_form["cl_telefono"] = $this->cl_telefono;
              $this->cl_celular = "";  
              $this->nmgp_dados_form["cl_celular"] = $this->cl_celular;
              $this->cl_email = "";  
              $this->nmgp_dados_form["cl_email"] = $this->cl_email;
              $this->cl_reteoncion_iva = "";  
              $this->nmgp_dados_form["cl_reteoncion_iva"] = $this->cl_reteoncion_iva;
              $this->libretin = "";  
              $this->nmgp_dados_form["libretin"] = $this->libretin;
              $this->forma_pago = "";  
              $this->nmgp_dados_form["forma_pago"] = $this->forma_pago;
              $this->documento = "";  
              $this->nmgp_dados_form["documento"] = $this->documento;
              $this->subtotal = "";  
              $this->nmgp_dados_form["subtotal"] = $this->subtotal;
              $this->iva = "";  
              $this->nmgp_dados_form["iva"] = $this->iva;
              $this->valor_pago = "";  
              $this->nmgp_dados_form["valor_pago"] = $this->valor_pago;
              $this->titulo = "";  
              $this->nmgp_dados_form["titulo"] = $this->titulo;
              $this->mensaje = "";  
              $this->nmgp_dados_form["mensaje"] = $this->mensaje;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
      }  
//
//
//-- 
      if ($this->nmgp_opcao != "novo") 
      {
      }
      if (!isset($this->nmgp_refresh_fields)) 
      { 
          $this->nm_proc_onload();
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
       $this->SC_log_arr['keys']['cl_id'] =  $this->cl_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dados_select'];
           $this->SC_log_arr['fields']['cl_empresa']['0'] =  $nmgp_dados_select['cl_empresa'];
           $this->SC_log_arr['fields']['cl_nombre']['0'] =  $nmgp_dados_select['cl_nombre'];
           $this->SC_log_arr['fields']['cl_tipo_identificacion']['0'] =  $nmgp_dados_select['cl_tipo_identificacion'];
           $this->SC_log_arr['fields']['cl_identificacion']['0'] =  $nmgp_dados_select['cl_identificacion'];
           $this->SC_log_arr['fields']['cl_pais']['0'] =  $nmgp_dados_select['cl_pais'];
           $this->SC_log_arr['fields']['cl_provincia']['0'] =  $nmgp_dados_select['cl_provincia'];
           $this->SC_log_arr['fields']['cl_ciudad']['0'] =  $nmgp_dados_select['cl_ciudad'];
           $this->SC_log_arr['fields']['cl_direccion']['0'] =  $nmgp_dados_select['cl_direccion'];
           $this->SC_log_arr['fields']['cl_telefono']['0'] =  $nmgp_dados_select['cl_telefono'];
           $this->SC_log_arr['fields']['cl_celular']['0'] =  $nmgp_dados_select['cl_celular'];
           $this->SC_log_arr['fields']['cl_email']['0'] =  $nmgp_dados_select['cl_email'];
           $this->SC_log_arr['fields']['cl_reteoncion_iva']['0'] =  $nmgp_dados_select['cl_reteoncion_iva'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['cl_empresa']['1'] =  $this->cl_empresa;
       $this->SC_log_arr['fields']['cl_nombre']['1'] =  $this->cl_nombre;
       $this->SC_log_arr['fields']['cl_tipo_identificacion']['1'] =  $this->cl_tipo_identificacion;
       $this->SC_log_arr['fields']['cl_identificacion']['1'] =  $this->cl_identificacion;
       $this->SC_log_arr['fields']['cl_pais']['1'] =  $this->cl_pais;
       $this->SC_log_arr['fields']['cl_provincia']['1'] =  $this->cl_provincia;
       $this->SC_log_arr['fields']['cl_ciudad']['1'] =  $this->cl_ciudad;
       $this->SC_log_arr['fields']['cl_direccion']['1'] =  $this->cl_direccion;
       $this->SC_log_arr['fields']['cl_telefono']['1'] =  $this->cl_telefono;
       $this->SC_log_arr['fields']['cl_celular']['1'] =  $this->cl_celular;
       $this->SC_log_arr['fields']['cl_email']['1'] =  $this->cl_email;
       $this->SC_log_arr['fields']['cl_reteoncion_iva']['1'] =  $this->cl_reteoncion_iva;
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
       $Log_labels['cl_empresa'] =  "Cl Empresa";
       $Log_labels['cl_nombre'] =  "{lang_nombre}";
       $Log_labels['cl_tipo_identificacion'] =  "Cl Tipo Identificacion";
       $Log_labels['cl_identificacion'] =  "{lang_lot_identificacion}";
       $Log_labels['cl_pais'] =  "Cl Pais";
       $Log_labels['cl_provincia'] =  "Cl Provincia";
       $Log_labels['cl_ciudad'] =  "Cl Ciudad";
       $Log_labels['cl_direccion'] =  "{lang_direccion}";
       $Log_labels['cl_telefono'] =  "{lang_lot_telefono}";
       $Log_labels['cl_celular'] =  "Cl Celular";
       $Log_labels['cl_email'] =  "{lang_email}";
       $Log_labels['cl_reteoncion_iva'] =  "Cl Reteoncion Iva";
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
        function initializeRecordState() {
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function obtenerIdAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
                         
	
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarDetalleAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarNuevoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
                         
	
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function validarDatosAsiento($i_data){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function cambiaEstadoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function cambiaEstadoFactura($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function generaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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


		if(isset($this->rs[0][0])){
			$w_datos_conexion->server = $this->rs[0][0];
			$w_datos_conexion->port = $this->rs[0][1];
			$w_datos_conexion->user = $this->rs[0][2];
			$w_datos_conexion->pass = $this->rs[0][3];
			$w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_operacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_operacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_operacion = false;
          $this->rs_operacion_erro = $this->Db->ErrorMsg();
      } 

		if(isset($this->rs[0][0])){

			$w_datos_idAsiento->idEmpresa	= $this->rs_operacion[0][0] ;
			$w_datos_idAsiento->mes			=$this->rs_operacion[0][1];
			$w_datos_idAsiento->anio		=$this->rs_operacion[0][2];
			$w_datos_idAsiento->tipo		='D';
			$w_result=$this->obtenerIdAsiento($w_datos_idAsiento,$w_datos_conexion);

			if($w_result['error']=='0'){
				$w_datos_Asiento->idAsiento=$w_result['datos']['idAsiento'];
				$w_datos_Asiento->codEmpresa=$this->rs_operacion[0][0];
				$w_datos_Asiento->fecha=$this->rs_operacion[0][3];
				$w_datos_Asiento->concepto=$this->rs_operacion[0][4];
				$w_datos_Asiento->estado=$this->rs_operacion[0][5];
				$w_datos_Asiento->aprobado=$this->rs_operacion[0][6];
				$w_datos_Asiento->esGeneradoPor=$this->rs_operacion[0][7];
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
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 


		if ($this->rs_detalles   === false){
						echo "Error al acceder al detalle de la factura";
		}else{
			$detalles_asiento = array();
			$i=0;
			while (!$this->rs_detalles->EOF){
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$this->rs_detalles->fields[0];
				$detalleAsiento->debeHaber    =1;
				$detalleAsiento->valor        =$this->rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$this->rs_detalles->fields[1];
				$detalleAsiento->debeHaber    =2;
				$detalleAsiento->valor        =$this->rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$this->rs_detalles->MoveNext();

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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function anulaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
			$w_datos_conexion->server = $this->rs[0][0];
			$w_datos_conexion->port = $this->rs[0][1];
			$w_datos_conexion->user = $this->rs[0][2];
			$w_datos_conexion->pass = $this->rs[0][3];
			$w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_operacion = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_operacion[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_operacion = false;
          $this->rs_operacion_erro = $this->Db->ErrorMsg();
      } 

		if(isset($this->rs[0][0])){

			$w_datos_idAsiento->idEmpresa	= $this->rs_operacion[0][0] ;
			$w_datos_idAsiento->mes			=$this->rs_operacion[0][1];
			$w_datos_idAsiento->anio		=$this->rs_operacion[0][2];
			$w_datos_idAsiento->tipo		='D';
			$w_result=$this->obtenerIdAsiento($w_datos_idAsiento,$w_datos_conexion);

			if($w_result['error']=='0'){
				$w_datos_Asiento->idAsiento=$w_result['datos']['idAsiento'];
				$w_datos_Asiento->codEmpresa=$this->rs_operacion[0][0];
				$w_datos_Asiento->fecha=$this->rs_operacion[0][3];
				$w_datos_Asiento->concepto=$this->rs_operacion[0][4];
				$w_datos_Asiento->estado=$this->rs_operacion[0][5];
				$w_datos_Asiento->aprobado=$this->rs_operacion[0][6];
				$w_datos_Asiento->esGeneradoPor=$this->rs_operacion[0][7];
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
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 


		if ($this->rs_detalles   === false){
						echo "Error al acceder al detalle de la factura";
		}else{
			$detalles_asiento = array();
			$i=0;
			while (!$this->rs_detalles->EOF){
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$this->rs_detalles->fields[0];
				$detalleAsiento->debeHaber    =1;
				$detalleAsiento->valor        =$this->rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$detalleAsiento = new detalleAsiento();
				$detalleAsiento->idAsiento    =$w_result['datos']['idAsiento'];
				$detalleAsiento->idPlanCuentas=$this->rs_detalles->fields[1];
				$detalleAsiento->debeHaber    =2;
				$detalleAsiento->valor        =$this->rs_detalles->fields[2];
				$detalles_asiento[$i]=$detalleAsiento;
				$i+=1;
				$this->rs_detalles->MoveNext();

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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function anularFactura($i_factura,$i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
			$w_datos_conexion->server = $this->rs[0][0];
			$w_datos_conexion->port = $this->rs[0][1];
			$w_datos_conexion->user = $this->rs[0][2];
			$w_datos_conexion->pass = $this->rs[0][3];
			$w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_factura = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_factura[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_factura = false;
          $this->rs_factura_erro = $this->Db->ErrorMsg();
      } 

		if(isset($this->rs_factura[0][0])){
			if ($this->rs_factura[0][2]<>''){
				$w_result=$this->cambiaEstadoAsiento($this->rs_factura[0][2],$w_datos_conexion);	
			}
			if($this->rs_factura[0][3]<>''){
				$w_result=$this->cambiaEstadoAsiento($this->rs_factura[0][3],$w_datos_conexion);
				$w_result=$this->cambiaEstadoFactura($this->rs_factura[0][3],$w_datos_conexion);
			}
			
			return 0;
		}
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function anularNotaCredito($i_notacredito,$i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
			$w_datos_conexion->server = $this->rs[0][0];
			$w_datos_conexion->port = $this->rs[0][1];
			$w_datos_conexion->user = $this->rs[0][2];
			$w_datos_conexion->pass = $this->rs[0][3];
			$w_datos_conexion->bdd = $this->rs[0][4];
		}

		$select_sql="SELECT 
						nc_numero,
						coalesce(nc_asiento,'')
					FROM del_nota_credito 
					WHERE nc_numero=".$i_notacredito;
		 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_documento = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_documento[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_documento = false;
          $this->rs_documento_erro = $this->Db->ErrorMsg();
      } 

		if(isset($this->rs_documento[0][0])){
			if ($this->rs_documento[0][1]<>''){
				$w_result=$this->cambiaEstadoAsiento($this->rs_documento[0][1],$w_datos_conexion);	
				$w_result=$this->cambiaEstadoFactura($this->rs_documento[0][1],$w_datos_conexion);
			}
			
			return 0;
		}
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function inserUpdateCliente($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarCliente($i_data, $infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function actualizarCliente($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function BuscaClienteCedula($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function validarDatosCliente($i_data){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function ws_coneccion_bdd($infoConection) {
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function enviaFactura($i_factura,$i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    $w_datos_conexion = new conexionBDD();
    $w_factura = new FacturaDebi();
    $w_cliente = new ClienteDebi();
    
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
        $w_datos_conexion->server = $this->rs[0][0];
        $w_datos_conexion->port = $this->rs[0][1];
        $w_datos_conexion->user = $this->rs[0][2];
        $w_datos_conexion->pass = $this->rs[0][3];
        $w_datos_conexion->bdd = $this->rs[0][4];
    }
    $select_datos_factura="SELECT 
                                emp_codigo_empresa_debi,
                                fac_tipo_comprobante,
                                fac_tipo_libretin,
                                fecha,
                                fecha,
                                est_codigo||pen_serie,
                                fac_secuencial,
                                fac_autorizacion,
                                fac_estado_sri,
                                fac_comentario,
                                fac_propina,
                                fac_total,
                                cl_identificacion
                            FROM v_del_datos_factura_sri 
                            WHERE fac_numero=".$i_factura.";";
     
      $nm_select = $select_datos_factura; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_factura = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_factura[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_factura = false;
          $this->rs_factura_erro = $this->Db->ErrorMsg();
      } 

    if( isset($this->rs_factura[0][0])){
        $w_factura->empresa=        $this->rs_factura[0][0];
        $w_factura->tipo_documento= $this->rs_factura[0][1];
        $w_factura->tipo_emision=   $this->rs_factura[0][2];
        $w_factura->fecha=          $this->rs_factura[0][3];
        $w_factura->fecha_caducidad=$this->rs_factura[0][4];
        $w_factura->serie=          $this->rs_factura[0][5];
        $w_factura->secuencial=     $this->rs_factura[0][6];
        $w_factura->autorizacion=   $this->rs_factura[0][7];
        $w_factura->estado_sri=     $this->rs_factura[0][8];
        $w_factura->observaciones=  $this->rs_factura[0][9];
        $w_factura->servicio=       $this->rs_factura[0][10];
        $w_factura->total=          $this->rs_factura[0][11];
        $w_factura->propina=        "0";
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
                            where (cl_empresa='".$i_empresa."' or cl_empresa='0000000000000') 
                            and cl_identificacion='".$this->rs_factura[0][12]."';";
     
      $nm_select = $select_datos_cliente; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_cliente = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_cliente[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_cliente = false;
          $this->rs_cliente_erro = $this->Db->ErrorMsg();
      } 

    if( isset($this->rs_cliente[0][0])){    
        $w_cliente->codEmpresa=         $this->rs_factura[0][0];
        $w_cliente->tipoIdentificacion= $this->rs_cliente[0][0];
        $w_cliente->identificacion=     $this->rs_cliente[0][1];
        $w_cliente->nombre=             $this->rs_cliente[0][2];
        $w_cliente->provincia=          $this->rs_cliente[0][3];
        $w_cliente->ciudad=             $this->rs_cliente[0][4];
        $w_cliente->direccion=          $this->rs_cliente[0][5];
        $w_cliente->telefono=           $this->rs_cliente[0][6];
        $w_cliente->email=              $this->rs_cliente[0][7];

        $w_factura->cliente = $w_cliente;
    }
    $select_detalles="SELECT 
                            coalesce(pro_producto_debi,0),
                            df_cantidad,
                            df_precio_unitario,
                            round(df_descuento*df_cantidad,2),
                            iva_porcentaje,
    						df_valor_iva
                        FROM del_detalle_factura 
                        join del_producto on df_producto=pro_codigo and df_empresa=pro_empresa 
                        join sri_tarifa_iva on df_porcentaje_iva=iva_codigo
                        WHERE df_factura=".$i_factura;
     
      $nm_select = $select_detalles; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_detalles = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_detalles = false;
          $this->rs_detalles_erro = $this->Db->ErrorMsg();
      } 
  
    if ($this->rs_detalles   === false){
        echo "Error al acceder al detalle de la factura";
    }else{
        $w_detalles_factura = array();
        $i=0;
        while (!$this->rs_detalles->EOF){
            $w_detalleFactura = new Producto();
            $w_detalleFactura->cod_producto_debi= $this->rs_detalles->fields[0];            
            $w_detalleFactura->cantidad=          $this->rs_detalles->fields[1];    
            $w_detalleFactura->pvp=               $this->rs_detalles->fields[2];
            $w_detalleFactura->descuento_total=   $this->rs_detalles->fields[3];            
            $w_detalleFactura->porcentaje_iva=    $this->rs_detalles->fields[4];
			$w_detalleFactura->valor_iva=		  $this->rs_detalles->fields[5]; 	

            $w_detalles_factura[$i]=$w_detalleFactura;
            $i+=1;
			$this->rs_detalles->MoveNext();

        }
        $w_factura->productos=$w_detalles_factura;
    }
    $select_formas_pago="SELECT  idtesoreria,
                                tipo,
                                coalesce(fp_lote,'') as lote,
                                coalesce(fp_transaccion,'') as documento,
                                fp_valor,
                                fp_plazo,
                                fp_unidad_tiempo
                            FROM del_forma_pago_factura fpf
                            inner join del_forma_pago fp on fpf.fp_forma_pago=fp.fp_id
                            inner join tesoreria t on fp.fp_tesoreria_debi= t.idtesoreria
                            WHERE fp_factura=".$i_factura;
     
      $nm_select = $select_formas_pago; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_formas_pago = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_formas_pago = false;
          $this->rs_formas_pago_erro = $this->Db->ErrorMsg();
      } 

    if($this->rs_formas_pago ===false){

    }else{
        $w_formas_pago = array();
        $i=0;
        while(!$this->rs_formas_pago->EOF){
            $w_forma_pago=new FormaPago();
            $w_forma_pago->id_tesoreria=$this->rs_formas_pago->fields[0];
            $w_forma_pago->tipo_pago=$this->rs_formas_pago->fields[1];
            $w_forma_pago->lote=$this->rs_formas_pago->fields[2];
            $w_forma_pago->documento=$this->rs_formas_pago->fields[3];
            $w_forma_pago->valor=$this->rs_formas_pago->fields[4];
            $w_forma_pago->plazo=$this->rs_formas_pago->fields[5];
            $w_forma_pago->tiempo=$this->rs_formas_pago->fields[6];

            $w_formas_pago[$i]=$w_forma_pago;
            $i+=1;
            $this->rs_formas_pago->MoveNext();
        }
        $w_factura->formas_pago=$w_formas_pago;
    }

    $w_respuesta= $this->registrarNuevaVenta($w_factura,$w_datos_conexion);
    if($w_respuesta['error']=='0'){
        $update_sql="UPDATE del_factura 
                     SET fac_asiento='".$w_respuesta['datos']['id_asiento']."' 
                     WHERE fac_numero=".$i_factura;
        
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
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
    }
	return $w_respuesta;
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarNuevaVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' REGISTRAR NUEVA VENTA ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' DATOS :'.var_export($i_data,true));
        $w_validar=$this->comprobarFactura($i_data,$infoConection);
        if($w_validar['error']<>'0'){
            return $w_validar;
        }
        $w_validar=$this->validarDatosNuevaFactura($i_data);
        if($w_validar['error']<>'0'){
			$Log->EscribirLog(var_export($w_validar['error'],true));
            return $w_validar;
        }

        $w_cliente=$i_data->cliente;
        $w_datos_cliente=$this->inserUpdateCliente($w_cliente,$infoConection);
        if($w_datos_cliente['error']<>'0'){
            return $w_datos_cliente;
        }

        if ($i_data->estado_sri=='AUTORIZADO'){
            $w_envio_correo='true';
            $w_firmado='true';
        }else{
            $w_envio_correo='false';
            $w_firmado='false';
        }
        $w_formas_pago=$i_data->formas_pago;
        foreach ($w_formas_pago as $this->forma_pago) {
            $w_tesoria=$this->forma_pago;
        }    
        $w_factura_venta=array(
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
            'servicio'=>        $i_data->servicio,
            'propina'=>         $i_data->propina,
            'tesoreria'=>       $w_tesoria->id_tesoreria,
        );
        $w_res_factura_venta=$this->registrarVenta($w_factura_venta,$infoConection);
        if ($w_res_factura_venta['error']<>'0'){
            return $w_res_factura_venta;
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
				$w_valor_iva=$producto->valor_iva;
                $w_total=$w_base_doce+$w_valor_iva;
            }
            $w_producto=array(
                'id_factura'=>$w_res_factura_venta['datos']['id_factura'],
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
            $w_detalle=$this->registrarDetalleVenta($w_producto,$infoConection);
            if($w_detalle['error']<>'0'){
                return $w_detalle;
            }
        }
        $w_actualiza_saldos=$this->actualizaTotalesFactura($w_res_factura_venta['datos']['id_factura'],$infoConection);
        if ($w_actualiza_saldos['error']<>'0'){
            return $w_actualiza_saldos;
        }

        $w_formas_pago=$i_data->formas_pago;
        foreach ($w_formas_pago as $this->forma_pago) {
                $w_forma_pago=array(
                    'id_tesoreria'=>$this->forma_pago->id_tesoreria,
                    'fecha'=>       $i_data->fecha,
                    'compra_Venta'=>'Ventas',
                    'id_factura'=>  $w_res_factura_venta['datos']['id_factura'],
                    'tipo_pago'=>   $this->forma_pago->tipo_pago,
                    'documento'=>   $this->forma_pago->documento,
                    'lote'=>        $this->forma_pago->lote,
                    'valor'=>       $this->forma_pago->valor,
                    'conciliado'=>  'False',  
                );
                $w_detalle=$this->registrarDetallePago($w_forma_pago,$infoConection);
                if($w_detalle['error']<>'0'){
                    return $w_detalle;
                } 
        }    

        $w_genera_asiento=$this->generarAsientoFactura($w_res_factura_venta['datos']['id_factura'],$infoConection);
        if($w_genera_asiento['error']<>'0'){
            return $w_genera_asiento;
        }else{
            $w_respuesta=array(
                'id_factura'=>$w_res_factura_venta['datos']['id_factura'],
                'id_asiento'=>$w_genera_asiento['datos']['id_asiento'],
            );    
        }
        
        $o_respuesta=array('error'=>'0','mensaje'=>'Factura Registrado','datos'=>$w_respuesta); 

    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function validarDatosNuevaFactura($i_data){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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
    if (!isset($i_data->propina)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo propina');
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function comprobarFactura($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' LISTA ');
        $Log->EscribirLog(' Comprobar factura');
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        if($i_data->tipo_documento=='01'){
            $i_data->tipo_documento='18';
        }
        $select_sql="SELECT count(*) as contador
                        FROM FACTURA_VENTA 
                        WHERE COD_EMPRESA   = ".$i_data->empresa."
                        AND TIPO_DOCUMENTO  ='".$i_data->tipo_documento."'
                        AND SERIE           ='".$i_data->serie."'
                        AND NUMERO_FACTURA  ='".$i_data->secuencial."'";
        $Log->EscribirLog(' Consulta: '.$select_sql);
        $result = sqlsrv_query($ws_conexion, $select_sql); 
        if($result===false){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{    
            $w_respuesta = array(); 
            $row = sqlsrv_fetch_object( $result);
                if($row->contador>0){
                    $w_respuesta[] = array(
                        'cantidad'=>$row->contador,
                    );
                    $o_respuesta=array('error'=>'996','mensaje'=>'Ya esta registrada ','datos'=>$w_respuesta);
                }else{ 
                    $w_respuesta[] = array(
                        'cantidad'=>$row->contador,
                    );
                    $o_respuesta=array('error'=>'0','mensaje'=>'ok','datos'=>$w_respuesta);
                }    
        }
        sqlsrv_close($ws_conexion);
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar Venta ');
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
            PROPINA
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
            ".$i_data['propina']."
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
                        'id_factura' =>  utf8_encode($row->SCOPE_IDENTITY)
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarDetalleVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar Detalle Venta ');
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
                            ".$i_data['id_factura'].",
                            ID_GRUPOS_PRODUCTOS_VENTAS,
                            ID_IMPUESTO,
                            ".$i_data['cantidad'].",
                            ".$i_data['pvp'].",
                            ".$i_data['descuento'].",
                            ".$i_data['subtotal'].",
                            POR_ICE,
                            ".$i_data['ice'].",
                            ".$i_data['base_cero'].", 
                            ".$i_data['base_doce'].",
                            ".$i_data['porcentaje_iva'].",
                            ".$i_data['iva'].",
                            ".$i_data['total'].",
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function registrarDetallePago($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar Detalle Pago ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_data,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $insert_sql="INSERT INTO DETALLE_MOVIENTOSX(
                            IDTESORERIA,
                            FECHA,
                            COMPRA_VENTA,
                            CODIGO_FACTURAS,
                            TIPO_PAGO_TARJETA,
                            NUM_DOCUMENTO,
                            LOTE,
                            TOTALFACT,
                            CONCILIADO) 
                    VALUES(
                         ".$i_data['id_tesoreria'].",
                        '".$i_data['fecha']."',
                        '".$i_data['compra_Venta']."',
                         ".$i_data['id_factura'].",
                        '".$i_data['tipo_pago']."',
                        '".$i_data['documento']."',
                        '".$i_data['lote']."',
                         ".$i_data['valor'].",
                        '".$i_data['conciliado']."' 
                    )";  
        $Log->EscribirLog(' Consulta: '.$insert_sql);    
        $result = sqlsrv_query($ws_conexion, $insert_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $o_respuesta=array('error'=>'0','mensaje'=>'Pago Registrado','datos'=>$i_data);   
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function actualizaTotalesFactura($i_factura,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' Registrar Detalle Venta ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_factura,true));
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
                        AND FACTURA_VENTA.ID_FACTURA_VENTA=".$i_factura.";";  
        $Log->EscribirLog(' Consulta: '.$update_sql);    
        $result = sqlsrv_query($ws_conexion, $update_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $o_respuesta=array('error'=>'0','mensaje'=>'Saldos Actualizados','datos'=>$i_factura);   
        }
        sqlsrv_close($ws_conexion);        
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function generarAsientoFactura($i_factura,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' generarAsientoFactura ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' Datos: '.var_export($i_factura,true));
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        $update_sql="execute sp_genera_asiento_factura ".$i_factura;  
        $Log->EscribirLog(' Consulta: '.$update_sql);    
        $result = sqlsrv_query($ws_conexion, $update_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $select_sql="SELECT ID_ASIENTO FROM FACTURA_VENTA WHERE ID_FACTURA_VENTA=".$i_factura;  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function anularVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    try{
        $Log=new IgtechLog ();
        $Log->Abrir();
        $Log->EscribirLog(' ANULA VENTA ');
        $Log->EscribirLog(' DATOS DE ENTRADA');
        $Log->EscribirLog(' DATOS :'.var_export($i_data,true));
        $w_validar=$this->validarDatosanularVenta($i_data);
        if($w_validar['error']<>'0'){
            return $w_validar;
        }
        $ws_conexion=$this->ws_coneccion_bdd($infoConection);
        if($i_data->tipo_documento=='01'){
            $i_data->tipo_documento='18';
         }
        $update_sql="execute sp_anula_venta ". $i_data->empresa .", '". $i_data->tipo_documento."', '". $i_data->serie."', '". $i_data->secuencial."'";  
        $Log->EscribirLog(' Consulta: '.$update_sql);    
        $result = sqlsrv_query($ws_conexion, $update_sql);
        if ($result === false ){
            $o_respuesta=array('error'=>'9997','mensaje'=>sqlsrv_errors());
        }else{
            $o_respuesta=array('error'=>'0','mensaje'=>'Factura Anulada','datos'=>$i_data); 
        }
        sqlsrv_close($ws_conexion); 
    }catch(Throwable $e){
        $o_respuesta=array('error'=>'9999','mensaje'=>$e->getMessage());
    }
    $Log->EscribirLog(' Respuesta: '.var_export($o_respuesta,true));
    return $o_respuesta;

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function validarDatosanularVenta($i_data){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
    if (!isset($i_data->empresa)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo empresa');
        return $o_respuesta;
    }
    if (!isset($i_data->tipo_documento)){
        $o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_documento');
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
    $o_respuesta=array('error'=>'0','mensaje'=>'ok');
    return $o_respuesta;

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function listaEmpresas($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function listaCuentasContables($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function listaProductosDebi($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function listaTesorerias($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function sincronizarEmpresas($i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
   
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


    if(isset($this->rs[0][0])){
        $w_datos_conexion->server = $this->rs[0][0];
        $w_datos_conexion->port = $this->rs[0][1];
        $w_datos_conexion->user = $this->rs[0][2];
        $w_datos_conexion->pass = $this->rs[0][3];
        $w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 

            if($this->rs_empresa[0][0]==0){

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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function sincronizaPlanCuentas($i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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


    if(isset($this->rs[0][0])){
        $w_datos_conexion->server = $this->rs[0][0];
        $w_datos_conexion->port = $this->rs[0][1];
        $w_datos_conexion->user = $this->rs[0][2];
        $w_datos_conexion->pass = $this->rs[0][3];
        $w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_cuenta = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_cuenta[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_cuenta = false;
          $this->rs_cuenta_erro = $this->Db->ErrorMsg();
      } 

            if($this->rs_cuenta[0][0]==0){

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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function sincronizaProductos($i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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


    if(isset($this->rs[0][0])){
        $w_datos_conexion->server = $this->rs[0][0];
        $w_datos_conexion->port = $this->rs[0][1];
        $w_datos_conexion->user = $this->rs[0][2];
        $w_datos_conexion->pass = $this->rs[0][3];
        $w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 

            
            if($this->rs_empresa[0][0]==0){

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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
}
function sincronizaTesorerias($i_empresa){
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'on';
  
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


    if(isset($this->rs[0][0])){
        $w_datos_conexion->server = $this->rs[0][0];
        $w_datos_conexion->port = $this->rs[0][1];
        $w_datos_conexion->user = $this->rs[0][2];
        $w_datos_conexion->pass = $this->rs[0][3];
        $w_datos_conexion->bdd = $this->rs[0][4];
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
      $this->rs_empresa = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_empresa[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_empresa = false;
          $this->rs_empresa_erro = $this->Db->ErrorMsg();
      } 

            if($this->rs_empresa[0][0]==0){

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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
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
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_recaudacion_anticipos_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_recaudacion_anticipos_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_recaudacion_anticipos_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_recaudacion_anticipos_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("cl_id", "cl_empresa", "cl_nombre", "cl_tipo_identificacion", "cl_identificacion", "cl_pais", "cl_provincia", "cl_ciudad", "cl_direccion", "cl_telefono", "cl_celular", "cl_email", "cl_reteoncion_iva"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['csrf_token'];
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

   function Form_lookup_libretin()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'] = array(); 
    }

   $old_value_valor_pago = $this->valor_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_valor_pago = $this->valor_pago;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='99'";

   $this->valor_pago = $old_value_valor_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_libretin'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function Form_lookup_forma_pago()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'] = array(); 
    }

   $old_value_valor_pago = $this->valor_pago;
   $this->nm_tira_formatacao();


   $unformatted_value_valor_pago = $this->valor_pago;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  WHERE fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' AND fp_compra_venta in ('VENTAS','TODOS') and fp_tipo <>'CRÉDITO' ORDER BY fp_descripcion";

   $this->valor_pago = $old_value_valor_pago;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['Lookup_forma_pago'][] = $rs->fields[0];
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
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = true;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_recaudacion_anticipos_mob_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "cl_id", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_empresa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_nombre", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_tipo_identificacion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_identificacion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_pais", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_provincia", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_ciudad", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_direccion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_telefono", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_celular", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_email", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "cl_reteoncion_iva", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter_form'] . " and (" . $comando . ")";
      }
      else
      {
         $sc_where = " where " . $comando;
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_recaudacion_anticipos_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['total'] = $qt_geral_reg_form_recaudacion_anticipos_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_recaudacion_anticipos_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_recaudacion_anticipos_mob_pack_ajax_response();
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
      $nm_numeric[] = "cl_id";$nm_numeric[] = "cl_pais";$nm_numeric[] = "cl_provincia";$nm_numeric[] = "cl_ciudad";$nm_numeric[] = "cl_reteoncion_iva";$nm_numeric[] = "";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['decimal_db'] == ".")
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
       $nmgp_saida_form = "form_recaudacion_anticipos_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_recaudacion_anticipos_mob_fim.php";
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
       form_recaudacion_anticipos_mob_pack_ajax_response();
       exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['masterValue']);
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
function nmgp_redireciona_form($nm_apl_dest, $nm_apl_retorno, $nm_apl_parms, $nm_target="", $opc="", $alt_modal=430, $larg_modal=630)
{
   if (isset($this->NM_is_redirected) && $this->NM_is_redirected)
   {
       return;
   }
   if (is_array($nm_apl_parms))
   {
       $tmp_parms = "";
       foreach ($nm_apl_parms as $par => $val)
       {
           $par = trim($par);
           $val = trim($val);
           $tmp_parms .= str_replace(".", "_", $par) . "?#?";
           if (substr($val, 0, 1) == "$")
           {
               $tmp_parms .= $$val;
           }
           elseif (substr($val, 0, 1) == "{")
           {
               $val        = substr($val, 1, -1);
               $tmp_parms .= $this->$val;
           }
           elseif (substr($val, 0, 1) == "[")
           {
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob'][substr($val, 1, -1)];
           }
           else
           {
               $tmp_parms .= $val;
           }
           $tmp_parms .= "?@?";
       }
       $nm_apl_parms = $tmp_parms;
   }
   if (empty($opc))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_recaudacion_anticipos_mob_pack_ajax_response();
           exit;
       }
       echo "<SCRIPT language=\"javascript\">";
       if (strtolower($nm_target) == "_blank")
       {
           echo "window.open ('" . $nm_apl_dest . "');";
           echo "</SCRIPT>";
           return;
       }
       else
       {
           echo "window.location='" . $nm_apl_dest . "';";
           echo "</SCRIPT>";
           $this->NM_close_db();
           exit;
       }
   }
   $dir = explode("/", $nm_apl_dest);
   if (count($dir) == 1)
   {
       $nm_apl_dest = str_replace(".php", "", $nm_apl_dest);
       $nm_apl_dest = $this->Ini->path_link . SC_dir_app_name($nm_apl_dest) . "/" . $nm_apl_dest . ".php";
   }
   if ($this->NM_ajax_flag)
   {
       $nm_apl_parms = str_replace("?#?", "*scin", NM_charset_to_utf8($nm_apl_parms));
       $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
       $this->NM_ajax_info['redir']['metodo']     = 'post';
       $this->NM_ajax_info['redir']['action']     = $nm_apl_dest;
       $this->NM_ajax_info['redir']['nmgp_parms'] = $nm_apl_parms;
       $this->NM_ajax_info['redir']['target']     = $nm_target_form;
       $this->NM_ajax_info['redir']['h_modal']    = $alt_modal;
       $this->NM_ajax_info['redir']['w_modal']    = $larg_modal;
       if ($nm_target_form == "_blank")
       {
           $this->NM_ajax_info['redir']['nmgp_outra_jan'] = 'true';
       }
       else
       {
           $this->NM_ajax_info['redir']['nmgp_url_saida']      = $nm_apl_retorno;
           $this->NM_ajax_info['redir']['script_case_init']    = $this->Ini->sc_page;
       }
       form_recaudacion_anticipos_mob_pack_ajax_response();
       exit;
   }
   if ($nm_target == "modal")
   {
       if (!empty($nm_apl_parms))
       {
           $nm_apl_parms = str_replace("?#?", "*scin", $nm_apl_parms);
           $nm_apl_parms = str_replace("?@?", "*scout", $nm_apl_parms);
           $nm_apl_parms = "nmgp_parms=" . $nm_apl_parms . "&";
       }
       $par_modal = "?script_case_init=" . $this->Ini->sc_page . "&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&";
       $this->redir_modal = "$(function() { tb_show('', '" . $nm_apl_dest . $par_modal . $nm_apl_parms . "TB_iframe=true&modal=true&height=" . $alt_modal . "&width=" . $larg_modal . "', '') })";
       $this->NM_is_redirected = true;
       return;
   }
   if ($nm_target == "_blank")
   {
?>
<form name="Fredir" method="post" target="_blank" action="<?php echo $nm_apl_dest; ?>">
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
</form>
<script type="text/javascript">
setTimeout(function() { document.Fredir.submit(); }, 250);
</script>
<?php
    return;
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

   <HTML>
   <HEAD>
    <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php

   if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
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
    <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
   </HEAD>
   <BODY>
<?php
   }
?>
<form name="Fredir" method="post" 
                  target="_self"> 
  <input type="hidden" name="nmgp_parms" value="<?php echo $this->form_encode_input($nm_apl_parms); ?>"/>
<?php
   if ($nm_target_form == "_blank")
   {
?>
  <input type="hidden" name="nmgp_outra_jan" value="true"/> 
<?php
   }
   else
   {
?>
  <input type="hidden" name="nmgp_url_saida" value="<?php echo $this->form_encode_input($nm_apl_retorno) ?>">
  <input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"/> 
<?php
   }
?>
</form> 
   <SCRIPT type="text/javascript">
<?php
   if ($nm_target_form == "modal")
   {
?>
       $(document).ready(function(){
           tb_show('', '<?php echo $nm_apl_dest ?>?script_case_init=<?php echo $this->Ini->sc_page; ?>&nmgp_url_saida=modal&nmgp_parms=<?php echo $this->form_encode_input($nm_apl_parms); ?>&nmgp_outra_jan=true&TB_iframe=true&height=<?php echo $alt_modal; ?>&width=<?php echo $larg_modal; ?>&modal=true', '');
       });
<?php
   }
   else
   {
?>
    $(function() {
       document.Fredir.target = "<?php echo $nm_target_form ?>"; 
       document.Fredir.action = "<?php echo $nm_apl_dest ?>";
       document.Fredir.submit();
    });
<?php
   }
?>
   </SCRIPT>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
?>
   </BODY>
   </HTML>
<?php
   }
?>
<?php
   if ($nm_target_form != "_blank" && $nm_target_form != "modal")
   {
       $this->NM_close_db();
       exit;
   }
}
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_t.sc-unique-btn-4", "sc_b_sai_t.sc-unique-btn-6", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_t.sc-unique-btn-5");
                break;
            case "actualizar_cliente":
                return array("sc_actualizar_cliente_top.", "sc_actualizar_cliente_top.");
                break;
            case "facturar":
                return array("sc_facturar_top.", "sc_facturar_top.");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
    }

    function displayAppFooter()
    {
    }

    function displayAppToolbars()
    {
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_anticipos_mob']['ordem_ord'] == " desc") {
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
            case "":
                return true;
            case "cl_id":
                return true;
            case "cl_pais":
                return true;
            case "cl_provincia":
                return true;
            case "cl_ciudad":
                return true;
            case "cl_reteoncion_iva":
                return true;
            case "":
                return true;
            case "":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "cl_id":
                return 'desc';
            case "cl_pais":
                return 'desc';
            case "cl_provincia":
                return 'desc';
            case "cl_ciudad":
                return 'desc';
            case "cl_reteoncion_iva":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
