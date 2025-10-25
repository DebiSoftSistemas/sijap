<?php
//
class form_fac_solicitud_convenio_pago_mob_apl
{
   var $has_where_params = false;
   var $NM_is_redirected = false;
   var $NM_non_ajax_info = false;
   var $formatado = false;
   var $use_100perc_fields = true;
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
   var $scp_id;
   var $scp_fecha;
   var $scp_empresa;
   var $scp_propietario;
   var $scp_propietario_1;
   var $scp_monto;
   var $scp_plazo;
   var $scp_taza;
   var $scp_tipo_amortizacion;
   var $scp_tipo_amortizacion_1;
   var $scp_secuencial_documento;
   var $scp_usuario;
   var $scp_ip;
   var $scp_estado;
   var $amortizacion;
   var $detalles;
   var $nm_data;
   var $nmgp_opcao;
   var $nmgp_opc_ant;
   var $sc_evento;
   var $sc_insert_on;
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
          if (isset($this->NM_ajax_info['param']['amortizacion']))
          {
              $this->amortizacion = $this->NM_ajax_info['param']['amortizacion'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['detalles']))
          {
              $this->detalles = $this->NM_ajax_info['param']['detalles'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_arg_fast_search']))
          {
              $this->nmgp_arg_fast_search = $this->NM_ajax_info['param']['nmgp_arg_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_cond_fast_search']))
          {
              $this->nmgp_cond_fast_search = $this->NM_ajax_info['param']['nmgp_cond_fast_search'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_fast_search']))
          {
              $this->nmgp_fast_search = $this->NM_ajax_info['param']['nmgp_fast_search'];
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
          if (isset($this->NM_ajax_info['param']['scp_estado']))
          {
              $this->scp_estado = $this->NM_ajax_info['param']['scp_estado'];
          }
          if (isset($this->NM_ajax_info['param']['scp_fecha']))
          {
              $this->scp_fecha = $this->NM_ajax_info['param']['scp_fecha'];
          }
          if (isset($this->NM_ajax_info['param']['scp_id']))
          {
              $this->scp_id = $this->NM_ajax_info['param']['scp_id'];
          }
          if (isset($this->NM_ajax_info['param']['scp_monto']))
          {
              $this->scp_monto = $this->NM_ajax_info['param']['scp_monto'];
          }
          if (isset($this->NM_ajax_info['param']['scp_plazo']))
          {
              $this->scp_plazo = $this->NM_ajax_info['param']['scp_plazo'];
          }
          if (isset($this->NM_ajax_info['param']['scp_propietario']))
          {
              $this->scp_propietario = $this->NM_ajax_info['param']['scp_propietario'];
          }
          if (isset($this->NM_ajax_info['param']['scp_secuencial_documento']))
          {
              $this->scp_secuencial_documento = $this->NM_ajax_info['param']['scp_secuencial_documento'];
          }
          if (isset($this->NM_ajax_info['param']['scp_taza']))
          {
              $this->scp_taza = $this->NM_ajax_info['param']['scp_taza'];
          }
          if (isset($this->NM_ajax_info['param']['scp_tipo_amortizacion']))
          {
              $this->scp_tipo_amortizacion = $this->NM_ajax_info['param']['scp_tipo_amortizacion'];
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
      if (isset($this->Igtech_IPUsuario) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
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
      if (isset($_POST["Igtech_IPUsuario"]) && isset($this->Igtech_IPUsuario)) 
      {
          $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
      }
      if (!isset($_POST["Igtech_IPUsuario"]) && isset($_POST["igtech_ipusuario"])) 
      {
          $_SESSION['Igtech_IPUsuario'] = $_POST["igtech_ipusuario"];
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
      if (isset($_GET["Igtech_IPUsuario"]) && isset($this->Igtech_IPUsuario)) 
      {
          $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
      }
      if (!isset($_GET["Igtech_IPUsuario"]) && isset($_GET["igtech_ipusuario"])) 
      {
          $_SESSION['Igtech_IPUsuario'] = $_GET["igtech_ipusuario"];
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['embutida_parms']);
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
                 nm_limpa_str_form_fac_solicitud_convenio_pago_mob($cadapar[1]);
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
          if (!isset($this->Igtech_IPUsuario) && isset($this->igtech_ipusuario)) 
          {
              $this->Igtech_IPUsuario = $this->igtech_ipusuario;
          }
          if (isset($this->Igtech_IPUsuario)) 
          {
              $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['sc_redir_insert'] = $this->sc_redir_insert;
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
          if (!isset($this->Igtech_IPUsuario) && isset($this->igtech_ipusuario)) 
          {
              $this->Igtech_IPUsuario = $this->igtech_ipusuario;
          }
          if (isset($this->Igtech_IPUsuario)) 
          {
              $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_fac_solicitud_convenio_pago_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_fac_solicitud_convenio_pago_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_fac_solicitud_convenio_pago_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_fac_solicitud_convenio_pago_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_fac_solicitud_convenio_pago_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_fac_solicitud_convenio_pago_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_fac_solicitud_convenio_pago_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_fac_solicitud_convenio_pago_mob']['label'] = "" . $this->Ini->Nm_lang['lang_solicitud_convenio'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_fac_solicitud_convenio_pago_mob")
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
      $this->nm_new_label['scp_id'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['scp_fecha'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['scp_propietario'] = '' . $this->Ini->Nm_lang['lang_propietario'] . '';
      $this->nm_new_label['scp_monto'] = '' . $this->Ini->Nm_lang['lang_saldo'] . '';
      $this->nm_new_label['scp_plazo'] = '' . $this->Ini->Nm_lang['lang_plazo'] . '';
      $this->nm_new_label['scp_taza'] = '' . $this->Ini->Nm_lang['lang_tasas_interes'] . '';
      $this->nm_new_label['scp_tipo_amortizacion'] = '' . $this->Ini->Nm_lang['lang_tipo_amortizacion'] . '';
      $this->nm_new_label['scp_estado'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';

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
        if ($this->use_100perc_fields) {
            $this->classes_100perc_fields['table'] = ' sc-ui-100perc-table';
            $this->classes_100perc_fields['input'] = ' sc-ui-100perc-input';
            $this->classes_100perc_fields['span_input'] = ' sc-ui-100perc-span-input';
            $this->classes_100perc_fields['span_select'] = ' sc-ui-100perc-span-select';
            $this->classes_100perc_fields['style_category'] = ' style="width: 100%"';
            $this->classes_100perc_fields['keep_field_size'] = false;
        }


      $this->arr_buttons['agregar']['hint']             = "";
      $this->arr_buttons['agregar']['type']             = "button";
      $this->arr_buttons['agregar']['value']            = "" . $this->Ini->Nm_lang['lang_agregar_deudas'] . "";
      $this->arr_buttons['agregar']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['agregar']['display_position'] = "text_right";
      $this->arr_buttons['agregar']['style']            = "default";
      $this->arr_buttons['agregar']['image']            = "";
      $this->arr_buttons['agregar']['has_fa']            = "true";
      $this->arr_buttons['agregar']['fontawesomeicon']            = "fas fa-download";

      $this->arr_buttons['procesar']['hint']             = "";
      $this->arr_buttons['procesar']['type']             = "button";
      $this->arr_buttons['procesar']['value']            = "" . $this->Ini->Nm_lang['lang_procesar'] . "";
      $this->arr_buttons['procesar']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['procesar']['display_position'] = "text_right";
      $this->arr_buttons['procesar']['style']            = "default";
      $this->arr_buttons['procesar']['image']            = "";
      $this->arr_buttons['procesar']['has_fa']            = "true";
      $this->arr_buttons['procesar']['fontawesomeicon']            = "fas fa-share-square";

      $this->arr_buttons['simular']['hint']             = "";
      $this->arr_buttons['simular']['type']             = "button";
      $this->arr_buttons['simular']['value']            = "" . $this->Ini->Nm_lang['lang_simular'] . "";
      $this->arr_buttons['simular']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['simular']['display_position'] = "text_right";
      $this->arr_buttons['simular']['style']            = "default";
      $this->arr_buttons['simular']['image']            = "";
      $this->arr_buttons['simular']['has_fa']            = "true";
      $this->arr_buttons['simular']['fontawesomeicon']            = "fas fa-calculator";

      $this->arr_buttons['imprimir']['hint']             = "";
      $this->arr_buttons['imprimir']['type']             = "button";
      $this->arr_buttons['imprimir']['value']            = "" . $this->Ini->Nm_lang['lang_imprimir'] . "";
      $this->arr_buttons['imprimir']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['imprimir']['display_position'] = "text_right";
      $this->arr_buttons['imprimir']['style']            = "default";
      $this->arr_buttons['imprimir']['image']            = "";
      $this->arr_buttons['imprimir']['has_fa']            = "true";
      $this->arr_buttons['imprimir']['fontawesomeicon']            = "fas fa-print";


      $_SESSION['scriptcase']['error_icon']['form_fac_solicitud_convenio_pago_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_fac_solicitud_convenio_pago_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "on";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "off";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      $this->nmgp_botoes['agregar'] = "on";
      $this->nmgp_botoes['procesar'] = "on";
      $this->nmgp_botoes['simular'] = "on";
      $this->nmgp_botoes['Imprimir'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_orig'] = " where (scp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_pesq'] = " where (scp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_fac_solicitud_convenio_pago_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_fac_solicitud_convenio_pago_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_fac_solicitud_convenio_pago_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form'];
          if (!isset($this->scp_empresa)){$this->scp_empresa = $this->nmgp_dados_form['scp_empresa'];} 
          if (!isset($this->scp_usuario)){$this->scp_usuario = $this->nmgp_dados_form['scp_usuario'];} 
          if (!isset($this->scp_ip)){$this->scp_ip = $this->nmgp_dados_form['scp_ip'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_fac_solicitud_convenio_pago_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_fac_solicitud_convenio_pago/Igtech.AmortizaAlemana.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.AmortizaAlemana.php');
      }
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_fac_solicitud_convenio_pago/Igtech.AmortizaFrancesa.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.AmortizaFrancesa.php');
      }
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_fac_solicitud_convenio_pago/Igtech.DebiConta.Clases.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.DebiConta.Clases.php');
      }
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_fac_solicitud_convenio_pago/Igtech.Log.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.Log.php');
      }
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_fac_solicitud_convenio_pago/Igtech.Plantillas.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.Plantillas.php');
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

      if (is_file($this->Ini->path_aplicacao . 'form_fac_solicitud_convenio_pago_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_fac_solicitud_convenio_pago_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_fac_solicitud_convenio_pago/form_fac_solicitud_convenio_pago_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_fac_solicitud_convenio_pago_mob_erro.class.php"); 
      }
      $this->Erro      = new form_fac_solicitud_convenio_pago_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao']))
         { 
             if ($this->scp_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_fac_solicitud_convenio_pago_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['agregar'] = "off";
          $this->nmgp_botoes['procesar'] = "off";
          $this->nmgp_botoes['simular'] = "off";
          $this->nmgp_botoes['Imprimir'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['agregar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['botoes']['agregar'];
          $this->nmgp_botoes['procesar'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['botoes']['procesar'];
          $this->nmgp_botoes['simular'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['botoes']['simular'];
          $this->nmgp_botoes['Imprimir'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['botoes']['Imprimir'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      if ($this->nmgp_opcao == "excluir")
      {
          $GLOBALS['script_case_init'] = $this->Ini->sc_page;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['reg_start'] = "";
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['total']);
          $detailAppName = 'form_fac_operaciones_convenio_mob';
          $detailAppObject = "form_fac_operaciones_convenio_mob";
          $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          if (!@is_dir($detailAppFolder)) {
              $detailAppName = substr($detailAppName, 0, -4);
              $detailAppObject = substr($detailAppObject, 0, -4);
              $detailAppFolder = $this->Ini->root . $this->Ini->path_link  . SC_dir_app_name($detailAppName);
          }
          $detailAppObject .= '_apl';
          require_once($detailAppFolder . "/index.php");
          require_once($detailAppFolder . "/{$detailAppName}_apl.php");
          $this->form_fac_operaciones_convenio_mob = new $detailAppObject;
      }
      $this->NM_case_insensitive = true;
      $this->sc_evento = $this->nmgp_opcao;
      $this->sc_insert_on = false;
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->scp_id)) { $this->nm_limpa_alfa($this->scp_id); }
      if (isset($this->scp_propietario)) { $this->nm_limpa_alfa($this->scp_propietario); }
      if (isset($this->scp_monto)) { $this->nm_limpa_alfa($this->scp_monto); }
      if (isset($this->scp_plazo)) { $this->nm_limpa_alfa($this->scp_plazo); }
      if (isset($this->scp_taza)) { $this->nm_limpa_alfa($this->scp_taza); }
      if (isset($this->scp_tipo_amortizacion)) { $this->nm_limpa_alfa($this->scp_tipo_amortizacion); }
      if (isset($this->scp_secuencial_documento)) { $this->nm_limpa_alfa($this->scp_secuencial_documento); }
      if (isset($this->scp_estado)) { $this->nm_limpa_alfa($this->scp_estado); }
      if (isset($this->amortizacion)) { $this->nm_limpa_alfa($this->amortizacion); }
      if (isset($this->detalles)) { $this->nm_limpa_alfa($this->detalles); }
      if (isset($nm_opc_lookup) && $nm_opc_lookup == "lookup")
      { 
          if ($GLOBALS['F'] == "scp_estado")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->scp_estado = $array_vars[0];
              $scp_estado       = $this->scp_estado;
              $this->scp_estado       = $scp_estado;
              $this->lookup_scp_estado($conteudo);
              $conteudo = str_replace("&", "&amp;", $conteudo); 
              $conteudo = str_replace("\/" , "\/", $conteudo); 
              echo "<html><head></head>";
              echo " <body onload=\"p=document.layers?parentLayer:window.parent;p.jsrsLoaded('" . $GLOBALS['C'] . "');\">";
              echo "  jsrsPayload:";
              echo "  <br>";
              echo "  <form name=\"jsrs_Form\"><textarea name=\"jsrs_Payload\">";
              echo "$conteudo";
              echo " </textarea></form></body></html>";
          } 
          $this->NM_close_db(); 
          exit;
      } 
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "procesar")
          { 
              $this->sc_btn_procesar();
          } 
          if ($nm_call_php == "simular")
          { 
              $this->sc_btn_simular();
          } 
          if ($nm_call_php == "Imprimir")
          { 
              $this->sc_btn_Imprimir();
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
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- scp_fecha
      $this->field_config['scp_fecha']                 = array();
      $this->field_config['scp_fecha']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['scp_fecha']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['scp_fecha']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'scp_fecha');
      //-- scp_secuencial_documento
      $this->field_config['scp_secuencial_documento']               = array();
      $this->field_config['scp_secuencial_documento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['scp_secuencial_documento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['scp_secuencial_documento']['symbol_dec'] = '';
      $this->field_config['scp_secuencial_documento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['scp_secuencial_documento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- scp_id
      $this->field_config['scp_id']               = array();
      $this->field_config['scp_id']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['scp_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['scp_id']['symbol_dec'] = '';
      $this->field_config['scp_id']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['scp_id']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- scp_plazo
      $this->field_config['scp_plazo']               = array();
      $this->field_config['scp_plazo']['symbol_grp'] = '';
      $this->field_config['scp_plazo']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['scp_plazo']['symbol_dec'] = '';
      $this->field_config['scp_plazo']['symbol_neg'] = '-';
      $this->field_config['scp_plazo']['format_neg'] = '2';
      //-- scp_monto
      $this->field_config['scp_monto']               = array();
      $this->field_config['scp_monto']['symbol_grp'] = '';
      $this->field_config['scp_monto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['scp_monto']['symbol_dec'] = '.';
      $this->field_config['scp_monto']['symbol_neg'] = '-';
      $this->field_config['scp_monto']['format_neg'] = '2';
      //-- scp_taza
      $this->field_config['scp_taza']               = array();
      $this->field_config['scp_taza']['symbol_grp'] = '';
      $this->field_config['scp_taza']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['scp_taza']['symbol_dec'] = '.';
      $this->field_config['scp_taza']['symbol_neg'] = '-';
      $this->field_config['scp_taza']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Gera_log_access'] = false;
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
          if ('validate_scp_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_fecha');
          }
          if ('validate_scp_secuencial_documento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_secuencial_documento');
          }
          if ('validate_scp_propietario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_propietario');
          }
          if ('validate_scp_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_id');
          }
          if ('validate_scp_plazo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_plazo');
          }
          if ('validate_scp_monto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_monto');
          }
          if ('validate_scp_taza' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_taza');
          }
          if ('validate_scp_tipo_amortizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_tipo_amortizacion');
          }
          if ('validate_scp_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'scp_estado');
          }
          if ('validate_detalles' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'detalles');
          }
          if ('validate_amortizacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'amortizacion');
          }
          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_scp_contrato_onchange' == $this->NM_ajax_opcao)
          {
              $this->scp_contrato_onChange();
          }
          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
          if ($this->nmgp_opcao != "incluir")
          {
              $this->scFormFocusErrorName = '';
          }
          $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_fac_solicitud_convenio_pago_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_solicitud_convenio'] . "") ?></TITLE>
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
<form name="Fdown" method="get" action="form_fac_solicitud_convenio_pago_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_fac_solicitud_convenio_pago_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_fac_solicitud_convenio_pago_mob.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_fac_solicitud_convenio_pago_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_fac_solicitud_convenio_pago_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_fac_solicitud_convenio_pago_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
   function lookup_scp_estado(&$conteudo)
   {
      global  $scp_estado;
      $guarda_formatado = $this->formatado;
      $this->nm_tira_formatacao();
      $Salva_opc = $this->nmgp_opcao;
      $this->nmgp_opcao = "lookup_rpc";
      $this->nm_converte_datas();
      $this->nmgp_opcao = $Salva_opc;
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      $nm_comando = "SELECT dec_nombre 
FROM v_fac_estado_solicitud_convenio
WHERE dec_id = '$this->scp_estado' 
ORDER BY dec_nombre"; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->Execute($nm_comando)) 
      {
          $conteudo = (isset($rs->fields[0])) ? $rs->fields[0] : ""; 
          $rs->Close() ; 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      {  
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      $GLOBALS["NM_ERRO_IBASE"] = 0; 
      foreach ($this->Before_unformat as $Cmp => $Val)
      {
          $this->$Cmp = $Val;
          $this->formatado = $guarda_formatado;
      }
   }
   function sc_btn_procesar() 
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
include_once("form_fac_solicitud_convenio_pago_mob_sajax_js.php");
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
          if (!isset($this->rs_operacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion']))
          {
              $varloc_btn_php['rs_operacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['rs_operacion'];
          }
      }
      $nm_f_saida = "form_fac_solicitud_convenio_pago_mob.php";
      nm_limpa_data($this->scp_fecha, $this->field_config['scp_fecha']['date_sep']) ; 
      nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
      nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
      nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
      if (!empty($this->field_config['scp_monto']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['scp_taza']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']) ; 
      }
      $this->nm_converte_datas();
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_IPUsuario)) {$this->sc_temp_Igtech_IPUsuario = (isset($_SESSION['Igtech_IPUsuario'])) ? $_SESSION['Igtech_IPUsuario'] : "";}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
if (!isset($this->sc_temp_Igtech_SesionLogin)) {$this->sc_temp_Igtech_SesionLogin = (isset($_SESSION['Igtech_SesionLogin'])) ? $_SESSION['Igtech_SesionLogin'] : "";}
  $update_sql="UPDATE fac_operacion 
				SET  
				op_estado='N',
				op_fecha_baja=getdate(),
				op_usuario_baja='".$this->sc_temp_Igtech_SesionLogin."',
				op_motivo_baja='CONVENIO DE PAGO'
				WHERE op_operacion in(SELECT oc_operacion FROM fac_operaciones_convenio  WHERE oc_solicitud=".$this->scp_id .");";

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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

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
	$select_sql="SELECT oc_solicitud,oc_operacion, COALESCE(op_asiento,'')
				 FROM fac_operaciones_convenio
				 INNER JOIN fac_operacion ON oc_operacion=op_operacion 
				 WHERE oc_solicitud=".$this->scp_id .";";
	 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_operacion = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_operacion = false;
          $this->rs_operacion_erro = $this->Db->ErrorMsg();
      } 

	if (false == $this->rs_operacion ) {
		$var_mensaje='Error al acceder a la base de datos.';
	}else{
		$operaciones=array();
		while(!$this->rs_operacion->EOF){
			if($this->rs_operacion->fields[2]<>''){
				$operaciones[]=$this->rs_operacion->fields[1];
			}	
				$this->rs_operacion->MoveNext();   
		}
		$this->rs_operacion->Close();

		foreach($operaciones as $operacion){
			$this->anulaAsientoOperacion($operacion,$this->sc_temp_Igtech_RucEmpresa) ;
		}

	}	
}
$check_sql = "Select * from  sp_emite_deudas_convenio (" . $this->scp_id .",
													   '". $this->sc_temp_Igtech_SesionLogin."',
													  '" . $this->sc_temp_Igtech_IPUsuario."') 
							as (error integer , mensaje varchar)";

     $nm_select = $check_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

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
	$select_sql="SELECT distinct cc_convenio,cc_operacion,cc_contrato,cc_cuota 
					FROM fac_cuotas_convenio 
					WHERE cc_convenio=".$this->scp_id ."
					group by cc_convenio,cc_operacion,cc_cuota,cc_contrato";
	 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_operacion = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_operacion = false;
          $this->rs_operacion_erro = $this->Db->ErrorMsg();
      } 

	if (false == $this->rs_operacion ) {
		$var_mensaje='Error al acceder a la base de catos.';
	}else{
		$operaciones=array();
		while(!$this->rs_operacion->EOF){

			$operaciones[]=$this->rs_operacion->fields[1];
			$this->rs_operacion->MoveNext();   
		}
		$this->rs_operacion->Close();
		foreach($operaciones as $operacion){
			$this->generaAsientoOperacion($operacion,$this->sc_temp_Igtech_RucEmpresa) ;
		}

	}

}
if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->sc_temp_Igtech_IPUsuario)) { $_SESSION['Igtech_IPUsuario'] = $this->sc_temp_Igtech_IPUsuario;}
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="scp_id" value="<?php echo $this->form_encode_input($this->scp_id) ?>"/>
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
   function sc_btn_simular() 
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
include_once("form_fac_solicitud_convenio_pago_mob_sajax_js.php");
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->deudas) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['deudas']))
          {
              $varloc_btn_php['deudas'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['deudas'];
          }
          if (!isset($this->scp_tipo_amortizacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_tipo_amortizacion']))
          {
              $varloc_btn_php['scp_tipo_amortizacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_tipo_amortizacion'];
          }
          if (!isset($this->scp_taza) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_taza']))
          {
              $varloc_btn_php['scp_taza'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_taza'];
          }
          if (!isset($this->scp_plazo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_plazo']))
          {
              $varloc_btn_php['scp_plazo'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_plazo'];
          }
          if (!isset($this->scp_fecha) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_fecha']))
          {
              $varloc_btn_php['scp_fecha'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_fecha'];
          }
          if (!isset($this->scp_tipo_amortizacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_tipo_amortizacion']))
          {
              $varloc_btn_php['scp_tipo_amortizacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_tipo_amortizacion'];
          }
          if (!isset($this->scp_taza) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_taza']))
          {
              $varloc_btn_php['scp_taza'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_taza'];
          }
          if (!isset($this->scp_plazo) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_plazo']))
          {
              $varloc_btn_php['scp_plazo'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_plazo'];
          }
          if (!isset($this->scp_fecha) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_fecha']))
          {
              $varloc_btn_php['scp_fecha'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_fecha'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
      }
      $nm_f_saida = "form_fac_solicitud_convenio_pago_mob.php";
      nm_limpa_data($this->scp_fecha, $this->field_config['scp_fecha']['date_sep']) ; 
      nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
      nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
      nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
      if (!empty($this->field_config['scp_monto']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['scp_taza']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']) ; 
      }
      $this->nm_converte_datas();
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  $delete_sql="DELETE FROM fac_cuotas_convenio where cc_convenio=".$this->scp_id ;

     $nm_select = $delete_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$select_sql="SELECT op_contrato,
				   sum(do_base_iva),
				   do_porcentaje_iva,
				   sum(do_valor_iva),
				   iva_porcentaje,
				   sum(do_total) 
			FROM fac_operaciones_convenio 
			inner join fac_operacion on oc_operacion=op_operacion
			inner join fac_detalle_operacion on oc_operacion=do_operacion
			inner join sri_tarifa_iva on do_porcentaje_iva=iva_codigo
			where oc_solicitud=".$this->scp_id ."
			group by op_contrato,do_porcentaje_iva,iva_porcentaje";
 
      $nm_select = $select_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->deudas = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->deudas = false;
          $this->deudas_erro = $this->Db->ErrorMsg();
      } 

if (false == $this->deudas ) {
    
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'Error al acceder a la base de datos';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_fac_solicitud_convenio_pago_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_fac_solicitud_convenio_pago_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'Error al acceder a la base de datos';
 }
;
}else{	
	while(!$this->deudas->EOF) {
	
		if($this->scp_tipo_amortizacion =='A'){
			$genera_amortizacion = new Igtech_AmortizaAlemana($this->deudas->fields[1],$this->scp_taza ,$this->scp_plazo ,0,$this->scp_fecha ,30,0);
			$sum_mes=0;
			$cuota=1;
		}
		if($this->scp_tipo_amortizacion =='F'){
			$genera_amortizacion = new Igtech_AmortizaFrancesa($this->deudas->fields[1],$this->scp_taza ,$this->scp_plazo ,0,$this->scp_fecha ,30,0);
			$sum_mes=0;
			$cuota=1;
		}
		
		foreach ($genera_amortizacion->TablaResultados() as $campo) {
			
			$w_capital=$campo[0];
			$w_interes=$campo[1];
			$w_iva=round($w_capital*$this->deudas->fields[4]/100,2);
			$w_total=round($w_capital+$w_iva,2);
			if($this->deudas->fields[4]>0){
				$check_parametro="select sp_busca_parametro_cartera('".$this->sc_temp_Igtech_RucEmpresa."','PCONPAGO12','CP-002');";
				 
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

				
			}else{
				$check_parametro="select sp_busca_parametro_cartera('".$this->sc_temp_Igtech_RucEmpresa."','PCONPAGO0','CP-001');";
				 
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

			}
			if(isset($this->rs_parametro[0][0])){
				$w_producto=$this->rs_parametro[0][0];
			}
			
			$insert_sql = "INSERT INTO	fac_cuotas_convenio(
									cc_convenio,
									cc_cuota,
									cc_fecha,
									cc_producto,
									cc_capital,
									cc_interes,
									cc_porcentaje_iva,
									cc_valor_iva,
									cc_valor_cuota,
									cc_contrato) 
						SELECT 
								".$this->scp_id .",
								".$cuota.",
								getdate() + $sum_mes*INTERVAL'1 month',
								'".$w_producto."',
								".$w_capital.",
								".$w_interes.",
								".$this->deudas->fields[2].",
								".$w_iva.",
								".$w_total.",
								".$this->deudas->fields[0].";";
			
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      	
			$cuota=$cuota+1;
			$sum_mes=$sum_mes+1;
		}
		$this->deudas->MoveNext();
	}
	
}	
		
$update_sql="UPDATE fac_solicitud_convenio_pago 
			 Set scp_estado='S'
			 WHERE scp_id=".$this->scp_id ;

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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$update_sql="UPDATE fac_operaciones_convenio 
			 SET	oc_estado='S' 
			 WHERE oc_solicitud=".$this->scp_id ;


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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="scp_id" value="<?php echo $this->form_encode_input($this->scp_id) ?>"/>
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
   function sc_btn_Imprimir() 
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
include_once("form_fac_solicitud_convenio_pago_mob_sajax_js.php");
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->scp_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id']))
          {
              $varloc_btn_php['scp_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_id'];
          }
          if (!isset($this->scp_monto) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_monto']))
          {
              $varloc_btn_php['scp_monto'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form']['scp_monto'];
          }
      }
      $nm_f_saida = "form_fac_solicitud_convenio_pago_mob.php";
      nm_limpa_data($this->scp_fecha, $this->field_config['scp_fecha']['date_sep']) ; 
      nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
      nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
      nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
      if (!empty($this->field_config['scp_monto']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['scp_taza']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']) ; 
      }
      $this->nm_converte_datas();
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  $redir_app    = 'form_contrato_convenio_pago';  
$redir_target = '_blank';  
$redir_param  = array(     
					'var_solicitud' => $this->scp_id ,
					'var_monto' => $this->scp_monto ,
				);

     if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($redir_app, $this->nm_location, $redir_param,"$redir_target", '', 440, 630);
 };
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="scp_id" value="<?php echo $this->form_encode_input($this->scp_id) ?>"/>
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
           case 'scp_fecha':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'scp_secuencial_documento':
               return "" . $this->Ini->Nm_lang['lang_solicitud'] . " Nro.";
               break;
           case 'scp_propietario':
               return "" . $this->Ini->Nm_lang['lang_propietario'] . "";
               break;
           case 'scp_id':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'scp_plazo':
               return "" . $this->Ini->Nm_lang['lang_plazo'] . "";
               break;
           case 'scp_monto':
               return "" . $this->Ini->Nm_lang['lang_saldo'] . "";
               break;
           case 'scp_taza':
               return "" . $this->Ini->Nm_lang['lang_tasas_interes'] . "";
               break;
           case 'scp_tipo_amortizacion':
               return "" . $this->Ini->Nm_lang['lang_tipo_amortizacion'] . "";
               break;
           case 'scp_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'detalles':
               return "";
               break;
           case 'amortizacion':
               return "";
               break;
           case 'scp_empresa':
               return "Scp Empresa";
               break;
           case 'scp_usuario':
               return "Scp Usuario";
               break;
           case 'scp_ip':
               return "Scp Ip";
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
     $this->scFormFocusErrorName = '';
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_fac_solicitud_convenio_pago_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_fac_solicitud_convenio_pago_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_fac_solicitud_convenio_pago_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_fac_solicitud_convenio_pago_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'scp_fecha' == $filtro)) || (is_array($filtro) && in_array('scp_fecha', $filtro)))
        $this->ValidateField_scp_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_fecha";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_secuencial_documento' == $filtro)) || (is_array($filtro) && in_array('scp_secuencial_documento', $filtro)))
        $this->ValidateField_scp_secuencial_documento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_secuencial_documento";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_propietario' == $filtro)) || (is_array($filtro) && in_array('scp_propietario', $filtro)))
        $this->ValidateField_scp_propietario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_propietario";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_id' == $filtro)) || (is_array($filtro) && in_array('scp_id', $filtro)))
        $this->ValidateField_scp_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_id";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_plazo' == $filtro)) || (is_array($filtro) && in_array('scp_plazo', $filtro)))
        $this->ValidateField_scp_plazo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_plazo";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_monto' == $filtro)) || (is_array($filtro) && in_array('scp_monto', $filtro)))
        $this->ValidateField_scp_monto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_monto";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_taza' == $filtro)) || (is_array($filtro) && in_array('scp_taza', $filtro)))
        $this->ValidateField_scp_taza($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_taza";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_tipo_amortizacion' == $filtro)) || (is_array($filtro) && in_array('scp_tipo_amortizacion', $filtro)))
        $this->ValidateField_scp_tipo_amortizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_tipo_amortizacion";

      if ((!is_array($filtro) && ('' == $filtro || 'scp_estado' == $filtro)) || (is_array($filtro) && in_array('scp_estado', $filtro)))
        $this->ValidateField_scp_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "scp_estado";

      if ((!is_array($filtro) && ('' == $filtro || 'detalles' == $filtro)) || (is_array($filtro) && in_array('detalles', $filtro)))
        $this->ValidateField_detalles($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "detalles";

      if ((!is_array($filtro) && ('' == $filtro || 'amortizacion' == $filtro)) || (is_array($filtro) && in_array('amortizacion', $filtro)))
        $this->ValidateField_amortizacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "amortizacion";

//-- converter datas   
          $this->nm_converte_datas();
//---
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

    function ValidateField_scp_fecha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->scp_fecha, $this->field_config['scp_fecha']['date_sep']) ; 
      if (isset($this->Field_no_validate['scp_fecha'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['scp_fecha']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['scp_fecha']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['scp_fecha']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['scp_fecha']['date_sep']) ; 
          if (trim($this->scp_fecha) != "")  
          { 
              if ($teste_validade->Data($this->scp_fecha, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['scp_fecha']))
                  {
                      $Campos_Erros['scp_fecha'] = array();
                  }
                  $Campos_Erros['scp_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['scp_fecha']) || !is_array($this->NM_ajax_info['errList']['scp_fecha']))
                  {
                      $this->NM_ajax_info['errList']['scp_fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['scp_fecha']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_fecha';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_fecha

    function ValidateField_scp_secuencial_documento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['scp_secuencial_documento'])) {
          nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
          return;
      }
      if ($this->scp_secuencial_documento === "" || is_null($this->scp_secuencial_documento))  
      { 
          $this->scp_secuencial_documento = 0;
          $this->sc_force_zero[] = 'scp_secuencial_documento';
      } 
      nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->scp_secuencial_documento != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->scp_secuencial_documento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_solicitud'] . " Nro.: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['scp_secuencial_documento']))
                  {
                      $Campos_Erros['scp_secuencial_documento'] = array();
                  }
                  $Campos_Erros['scp_secuencial_documento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['scp_secuencial_documento']) || !is_array($this->NM_ajax_info['errList']['scp_secuencial_documento']))
                  {
                      $this->NM_ajax_info['errList']['scp_secuencial_documento'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_secuencial_documento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->scp_secuencial_documento, 4, 0, -0, 9999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_solicitud'] . " Nro.; " ; 
                  if (!isset($Campos_Erros['scp_secuencial_documento']))
                  {
                      $Campos_Erros['scp_secuencial_documento'] = array();
                  }
                  $Campos_Erros['scp_secuencial_documento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['scp_secuencial_documento']) || !is_array($this->NM_ajax_info['errList']['scp_secuencial_documento']))
                  {
                      $this->NM_ajax_info['errList']['scp_secuencial_documento'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_secuencial_documento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_secuencial_documento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_secuencial_documento

    function ValidateField_scp_propietario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['scp_propietario'])) {
       return;
   }
      if ($this->scp_propietario == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_propietario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_propietario'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_propietario'] . "" ; 
          if (!isset($Campos_Erros['scp_propietario']))
          {
              $Campos_Erros['scp_propietario'] = array();
          }
          $Campos_Erros['scp_propietario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['scp_propietario']) || !is_array($this->NM_ajax_info['errList']['scp_propietario']))
          {
              $this->NM_ajax_info['errList']['scp_propietario'] = array();
          }
          $this->NM_ajax_info['errList']['scp_propietario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->scp_propietario) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']) && !in_array($this->scp_propietario, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['scp_propietario']))
              {
                  $Campos_Erros['scp_propietario'] = array();
              }
              $Campos_Erros['scp_propietario'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['scp_propietario']) || !is_array($this->NM_ajax_info['errList']['scp_propietario']))
              {
                  $this->NM_ajax_info['errList']['scp_propietario'] = array();
              }
              $this->NM_ajax_info['errList']['scp_propietario'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_propietario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_propietario

    function ValidateField_scp_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['scp_id'])) {
          nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
          return;
      }
      if ($this->scp_id === "" || is_null($this->scp_id))  
      { 
          $this->scp_id = 0;
      } 
      nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->scp_id != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->scp_id) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['scp_id']))
                  {
                      $Campos_Erros['scp_id'] = array();
                  }
                  $Campos_Erros['scp_id'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['scp_id']) || !is_array($this->NM_ajax_info['errList']['scp_id']))
                  {
                      $this->NM_ajax_info['errList']['scp_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_id'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->scp_id, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['scp_id']))
                  {
                      $Campos_Erros['scp_id'] = array();
                  }
                  $Campos_Erros['scp_id'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['scp_id']) || !is_array($this->NM_ajax_info['errList']['scp_id']))
                  {
                      $this->NM_ajax_info['errList']['scp_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_id'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_id';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_id

    function ValidateField_scp_plazo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['scp_plazo'])) {
          nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->scp_plazo != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->scp_plazo) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_plazo'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['scp_plazo']))
                  {
                      $Campos_Erros['scp_plazo'] = array();
                  }
                  $Campos_Erros['scp_plazo'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['scp_plazo']) || !is_array($this->NM_ajax_info['errList']['scp_plazo']))
                  {
                      $this->NM_ajax_info['errList']['scp_plazo'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_plazo'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->scp_plazo, 4, 0, -0, 9999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_plazo'] . "; " ; 
                  if (!isset($Campos_Erros['scp_plazo']))
                  {
                      $Campos_Erros['scp_plazo'] = array();
                  }
                  $Campos_Erros['scp_plazo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['scp_plazo']) || !is_array($this->NM_ajax_info['errList']['scp_plazo']))
                  {
                      $this->NM_ajax_info['errList']['scp_plazo'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_plazo'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_plazo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_plazo'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_plazo'] . "" ; 
              if (!isset($Campos_Erros['scp_plazo']))
              {
                  $Campos_Erros['scp_plazo'] = array();
              }
              $Campos_Erros['scp_plazo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['scp_plazo']) || !is_array($this->NM_ajax_info['errList']['scp_plazo']))
                  {
                      $this->NM_ajax_info['errList']['scp_plazo'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_plazo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_plazo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_plazo

    function ValidateField_scp_monto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['scp_monto'])) {
          if (!empty($this->field_config['scp_monto']['symbol_dec'])) {
              nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->scp_monto === "" || is_null($this->scp_monto))  
      { 
          $this->scp_monto = 0;
          $this->sc_force_zero[] = 'scp_monto';
      } 
      if (!empty($this->field_config['scp_monto']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']) ; 
          if ('.' == substr($this->scp_monto, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->scp_monto, 1)))
              {
                  $this->scp_monto = '';
              }
              else
              {
                  $this->scp_monto = '0' . $this->scp_monto;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->scp_monto != '')  
          { 
              $iTestSize = 18;
              if (strlen($this->scp_monto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_saldo'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['scp_monto']))
                  {
                      $Campos_Erros['scp_monto'] = array();
                  }
                  $Campos_Erros['scp_monto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['scp_monto']) || !is_array($this->NM_ajax_info['errList']['scp_monto']))
                  {
                      $this->NM_ajax_info['errList']['scp_monto'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_monto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->scp_monto, 15, 2, -0, 1.0E+17, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_saldo'] . "; " ; 
                  if (!isset($Campos_Erros['scp_monto']))
                  {
                      $Campos_Erros['scp_monto'] = array();
                  }
                  $Campos_Erros['scp_monto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['scp_monto']) || !is_array($this->NM_ajax_info['errList']['scp_monto']))
                  {
                      $this->NM_ajax_info['errList']['scp_monto'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_monto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_monto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_monto

    function ValidateField_scp_taza(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['scp_taza'])) {
          if (!empty($this->field_config['scp_taza']['symbol_dec'])) {
              nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']) ; 
          }
          return;
      }
      if (!empty($this->field_config['scp_taza']['symbol_dec']))
      {
          nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']) ; 
          if ('.' == substr($this->scp_taza, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->scp_taza, 1)))
              {
                  $this->scp_taza = '';
              }
              else
              {
                  $this->scp_taza = '0' . $this->scp_taza;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->scp_taza != '')  
          { 
              $iTestSize = 8;
              if (strlen($this->scp_taza) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tasas_interes'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['scp_taza']))
                  {
                      $Campos_Erros['scp_taza'] = array();
                  }
                  $Campos_Erros['scp_taza'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['scp_taza']) || !is_array($this->NM_ajax_info['errList']['scp_taza']))
                  {
                      $this->NM_ajax_info['errList']['scp_taza'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_taza'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->scp_taza, 5, 2, -0, 9999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tasas_interes'] . "; " ; 
                  if (!isset($Campos_Erros['scp_taza']))
                  {
                      $Campos_Erros['scp_taza'] = array();
                  }
                  $Campos_Erros['scp_taza'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['scp_taza']) || !is_array($this->NM_ajax_info['errList']['scp_taza']))
                  {
                      $this->NM_ajax_info['errList']['scp_taza'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_taza'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_taza']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_taza'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_tasas_interes'] . "" ; 
              if (!isset($Campos_Erros['scp_taza']))
              {
                  $Campos_Erros['scp_taza'] = array();
              }
              $Campos_Erros['scp_taza'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['scp_taza']) || !is_array($this->NM_ajax_info['errList']['scp_taza']))
                  {
                      $this->NM_ajax_info['errList']['scp_taza'] = array();
                  }
                  $this->NM_ajax_info['errList']['scp_taza'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_taza';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_taza

    function ValidateField_scp_tipo_amortizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['scp_tipo_amortizacion'])) {
       return;
   }
      if ($this->scp_tipo_amortizacion == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_tipo_amortizacion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['php_cmp_required']['scp_tipo_amortizacion'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_tipo_amortizacion'] . "" ; 
          if (!isset($Campos_Erros['scp_tipo_amortizacion']))
          {
              $Campos_Erros['scp_tipo_amortizacion'] = array();
          }
          $Campos_Erros['scp_tipo_amortizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['scp_tipo_amortizacion']) || !is_array($this->NM_ajax_info['errList']['scp_tipo_amortizacion']))
          {
              $this->NM_ajax_info['errList']['scp_tipo_amortizacion'] = array();
          }
          $this->NM_ajax_info['errList']['scp_tipo_amortizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->scp_tipo_amortizacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']) && !in_array($this->scp_tipo_amortizacion, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['scp_tipo_amortizacion']))
              {
                  $Campos_Erros['scp_tipo_amortizacion'] = array();
              }
              $Campos_Erros['scp_tipo_amortizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['scp_tipo_amortizacion']) || !is_array($this->NM_ajax_info['errList']['scp_tipo_amortizacion']))
              {
                  $this->NM_ajax_info['errList']['scp_tipo_amortizacion'] = array();
              }
              $this->NM_ajax_info['errList']['scp_tipo_amortizacion'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_tipo_amortizacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_tipo_amortizacion

    function ValidateField_scp_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['scp_estado'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->scp_estado) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_estado'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['scp_estado']))
              {
                  $Campos_Erros['scp_estado'] = array();
              }
              $Campos_Erros['scp_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['scp_estado']) || !is_array($this->NM_ajax_info['errList']['scp_estado']))
              {
                  $this->NM_ajax_info['errList']['scp_estado'] = array();
              }
              $this->NM_ajax_info['errList']['scp_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'scp_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_scp_estado

    function ValidateField_detalles(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['detalles'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->detalles) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'detalles';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_detalles

    function ValidateField_amortizacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['amortizacion'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->amortizacion) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'amortizacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_amortizacion

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
    $this->nmgp_dados_form['scp_fecha'] = (strlen(trim($this->scp_fecha)) > 19) ? str_replace(".", ":", $this->scp_fecha) : trim($this->scp_fecha);
    $this->nmgp_dados_form['scp_secuencial_documento'] = $this->scp_secuencial_documento;
    $this->nmgp_dados_form['scp_propietario'] = $this->scp_propietario;
    $this->nmgp_dados_form['scp_id'] = $this->scp_id;
    $this->nmgp_dados_form['scp_plazo'] = $this->scp_plazo;
    $this->nmgp_dados_form['scp_monto'] = $this->scp_monto;
    $this->nmgp_dados_form['scp_taza'] = $this->scp_taza;
    $this->nmgp_dados_form['scp_tipo_amortizacion'] = $this->scp_tipo_amortizacion;
    $this->nmgp_dados_form['scp_estado'] = $this->scp_estado;
    $this->nmgp_dados_form['detalles'] = $this->detalles;
    $this->nmgp_dados_form['amortizacion'] = $this->amortizacion;
    $this->nmgp_dados_form['scp_empresa'] = $this->scp_empresa;
    $this->nmgp_dados_form['scp_usuario'] = $this->scp_usuario;
    $this->nmgp_dados_form['scp_ip'] = $this->scp_ip;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['scp_fecha'] = $this->scp_fecha;
      nm_limpa_data($this->scp_fecha, $this->field_config['scp_fecha']['date_sep']) ; 
      $this->Before_unformat['scp_secuencial_documento'] = $this->scp_secuencial_documento;
      nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
      $this->Before_unformat['scp_id'] = $this->scp_id;
      nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
      $this->Before_unformat['scp_plazo'] = $this->scp_plazo;
      nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
      $this->Before_unformat['scp_monto'] = $this->scp_monto;
      if (!empty($this->field_config['scp_monto']['symbol_dec']))
      {
         nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']);
      }
      $this->Before_unformat['scp_taza'] = $this->scp_taza;
      if (!empty($this->field_config['scp_taza']['symbol_dec']))
      {
         nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']);
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
      if ($Nome_Campo == "scp_secuencial_documento")
      {
          nm_limpa_numero($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "scp_id")
      {
          nm_limpa_numero($this->scp_id, $this->field_config['scp_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "scp_plazo")
      {
          nm_limpa_numero($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "scp_monto")
      {
          if (!empty($this->field_config['scp_monto']['symbol_dec']))
          {
             nm_limpa_valor($this->scp_monto, $this->field_config['scp_monto']['symbol_dec'], $this->field_config['scp_monto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "scp_taza")
      {
          if (!empty($this->field_config['scp_taza']['symbol_dec']))
          {
             nm_limpa_valor($this->scp_taza, $this->field_config['scp_taza']['symbol_dec'], $this->field_config['scp_taza']['symbol_grp']);
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
      if ((!empty($this->scp_fecha) && 'null' != $this->scp_fecha) || (!empty($format_fields) && isset($format_fields['scp_fecha'])))
      {
          nm_volta_data($this->scp_fecha, $this->field_config['scp_fecha']['date_format']) ; 
          nmgp_Form_Datas($this->scp_fecha, $this->field_config['scp_fecha']['date_format'], $this->field_config['scp_fecha']['date_sep']) ;  
      }
      elseif ('null' == $this->scp_fecha || '' == $this->scp_fecha)
      {
          $this->scp_fecha = '';
      }
      if ('' !== $this->scp_secuencial_documento || (!empty($format_fields) && isset($format_fields['scp_secuencial_documento'])))
      {
          nmgp_Form_Num_Val($this->scp_secuencial_documento, $this->field_config['scp_secuencial_documento']['symbol_grp'], $this->field_config['scp_secuencial_documento']['symbol_dec'], "0", "S", $this->field_config['scp_secuencial_documento']['format_neg'], "", "", "-", $this->field_config['scp_secuencial_documento']['symbol_fmt']) ; 
      }
      if ('' !== $this->scp_id || (!empty($format_fields) && isset($format_fields['scp_id'])))
      {
          nmgp_Form_Num_Val($this->scp_id, $this->field_config['scp_id']['symbol_grp'], $this->field_config['scp_id']['symbol_dec'], "0", "S", $this->field_config['scp_id']['format_neg'], "", "", "-", $this->field_config['scp_id']['symbol_fmt']) ; 
      }
      if ('' !== $this->scp_plazo || (!empty($format_fields) && isset($format_fields['scp_plazo'])))
      {
          nmgp_Form_Num_Val($this->scp_plazo, $this->field_config['scp_plazo']['symbol_grp'], $this->field_config['scp_plazo']['symbol_dec'], "0", "S", $this->field_config['scp_plazo']['format_neg'], "", "", "-", $this->field_config['scp_plazo']['symbol_fmt']) ; 
      }
      if ('' !== $this->scp_monto || (!empty($format_fields) && isset($format_fields['scp_monto'])))
      {
          nmgp_Form_Num_Val($this->scp_monto, $this->field_config['scp_monto']['symbol_grp'], $this->field_config['scp_monto']['symbol_dec'], "2", "S", $this->field_config['scp_monto']['format_neg'], "", "", "-", $this->field_config['scp_monto']['symbol_fmt']) ; 
      }
      if ('' !== $this->scp_taza || (!empty($format_fields) && isset($format_fields['scp_taza'])))
      {
          nmgp_Form_Num_Val($this->scp_taza, $this->field_config['scp_taza']['symbol_grp'], $this->field_config['scp_taza']['symbol_dec'], "2", "S", $this->field_config['scp_taza']['format_neg'], "", "", "-", $this->field_config['scp_taza']['symbol_fmt']) ; 
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
//
//-- 
   function nm_converte_datas($use_null = true, $bForce = false)
   {
      $guarda_format_hora = $this->field_config['scp_fecha']['date_format'];
      if ($this->scp_fecha != "")  
      { 
          nm_conv_data($this->scp_fecha, $this->field_config['scp_fecha']['date_format']) ; 
          $this->scp_fecha_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->scp_fecha_hora = substr($this->scp_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->scp_fecha_hora = substr($this->scp_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->scp_fecha_hora = substr($this->scp_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->scp_fecha_hora = substr($this->scp_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->scp_fecha_hora = substr($this->scp_fecha_hora, 0, -4);
          }
      } 
      if ($this->scp_fecha == "" && $use_null)  
      { 
          $this->scp_fecha = "null" ; 
      } 
      $this->field_config['scp_fecha']['date_format'] = $guarda_format_hora;
   }
//
   function nm_prep_date_change($cmp_date, $format_dt)
   {
       $vl_return  = "";
       if ($cmp_date != 'null') {
           $vl_return .= (strpos($format_dt, "yy") !== false) ? substr($cmp_date,  0, 4) : "";
           $vl_return .= (strpos($format_dt, "mm") !== false) ? substr($cmp_date,  5, 2) : "";
           $vl_return .= (strpos($format_dt, "dd") !== false) ? substr($cmp_date,  8, 2) : "";
           $vl_return .= (strpos($format_dt, "hh") !== false) ? substr($cmp_date, 11, 2) : "";
           $vl_return .= (strpos($format_dt, "ii") !== false) ? substr($cmp_date, 14, 2) : "";
           $vl_return .= (strpos($format_dt, "ss") !== false) ? substr($cmp_date, 17, 2) : "";
       }
       return $vl_return;
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
          $this->ajax_return_values_scp_fecha();
          $this->ajax_return_values_scp_secuencial_documento();
          $this->ajax_return_values_scp_propietario();
          $this->ajax_return_values_scp_id();
          $this->ajax_return_values_scp_plazo();
          $this->ajax_return_values_scp_monto();
          $this->ajax_return_values_scp_taza();
          $this->ajax_return_values_scp_tipo_amortizacion();
          $this->ajax_return_values_scp_estado();
          $this->ajax_return_values_detalles();
          $this->ajax_return_values_amortizacion();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['scp_id']['keyVal'] = form_fac_solicitud_convenio_pago_mob_pack_protect_string($this->nmgp_dados_form['scp_id']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['embutida_form_full'] = false;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['embutida_form']       = true;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['embutida_pai']        = "form_fac_solicitud_convenio_pago_mob";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['embutida_form_parms'] = "var_convenio*scin" . $this->nmgp_dados_form['scp_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['grid_fac_cuotas_convenio_script_case_init'] ]['grid_fac_cuotas_convenio']['total']);
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['foreign_key']['oc_solicitud'] = $this->nmgp_dados_form['scp_id'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['where_filter'] = "oc_solicitud = " . $this->nmgp_dados_form['scp_id'] . "";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['where_detal']  = "oc_solicitud = " . $this->nmgp_dados_form['scp_id'] . "";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['total']);
              foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob'] as $i => $v)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio'][$i] = $v;
              }
              if (isset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['total']))
              {
                  unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['form_fac_operaciones_convenio_mob_script_case_init'] ]['form_fac_operaciones_convenio_mob']['total']);
              }
          }
   } // ajax_return_values

          //----- scp_fecha
   function ajax_return_values_scp_fecha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_fecha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_fecha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_fecha'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- scp_secuencial_documento
   function ajax_return_values_scp_secuencial_documento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_secuencial_documento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_secuencial_documento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_secuencial_documento'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- scp_propietario
   function ajax_return_values_scp_propietario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_propietario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_propietario);
              $aLookup = array();
              $this->_tmp_lookup_scp_propietario = $this->scp_propietario;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'] = array(); 
}
$aLookup[] = array(form_fac_solicitud_convenio_pago_mob_pack_protect_string('') => str_replace('<', '&lt;',form_fac_solicitud_convenio_pago_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_scp_fecha = $this->scp_fecha;
   $old_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $old_value_scp_id = $this->scp_id;
   $old_value_scp_plazo = $this->scp_plazo;
   $old_value_scp_monto = $this->scp_monto;
   $old_value_scp_taza = $this->scp_taza;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_scp_fecha = $this->scp_fecha;
   $unformatted_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $unformatted_value_scp_id = $this->scp_id;
   $unformatted_value_scp_plazo = $this->scp_plazo;
   $unformatted_value_scp_monto = $this->scp_monto;
   $unformatted_value_scp_taza = $this->scp_taza;

   $nm_comando = "SELECT cl_id, 'Propietario:' || cl_nombre || ' - CI:' || cl_identificacion || ' - Nro. Contrato:' ||  coalesce(con_numero_contrato,'') ||' - Nro. Medidior:'|| coalesce(con_numero_medidor,'')  FROM del_cliente left join jap_contrato on cl_id=con_propietario   WHERE con_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cl_nombre , con_numero_contrato, con_numero_medidor";

   $this->scp_fecha = $old_value_scp_fecha;
   $this->scp_secuencial_documento = $old_value_scp_secuencial_documento;
   $this->scp_id = $old_value_scp_id;
   $this->scp_plazo = $old_value_scp_plazo;
   $this->scp_monto = $old_value_scp_monto;
   $this->scp_taza = $old_value_scp_taza;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_fac_solicitud_convenio_pago_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_fac_solicitud_convenio_pago_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'][] = $rs->fields[0];
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
          $sSelComp = "name=\"scp_propietario\"";
          if (isset($this->NM_ajax_info['select_html']['scp_propietario']) && !empty($this->NM_ajax_info['select_html']['scp_propietario']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['scp_propietario']);
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

                  if ($this->scp_propietario == $sValue)
                  {
                      $this->_tmp_lookup_scp_propietario = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['scp_propietario'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['scp_propietario']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['scp_propietario']['valList'][$i] = form_fac_solicitud_convenio_pago_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['scp_propietario']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['scp_propietario']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['scp_propietario']['labList'] = $aLabel;
          }
   }

          //----- scp_id
   function ajax_return_values_scp_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("scp_id", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- scp_plazo
   function ajax_return_values_scp_plazo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_plazo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_plazo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_plazo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- scp_monto
   function ajax_return_values_scp_monto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_monto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_monto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_monto'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- scp_taza
   function ajax_return_values_scp_taza($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_taza", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_taza);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_taza'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- scp_tipo_amortizacion
   function ajax_return_values_scp_tipo_amortizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_tipo_amortizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_tipo_amortizacion);
              $aLookup = array();
              $this->_tmp_lookup_scp_tipo_amortizacion = $this->scp_tipo_amortizacion;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_scp_fecha = $this->scp_fecha;
   $old_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $old_value_scp_id = $this->scp_id;
   $old_value_scp_plazo = $this->scp_plazo;
   $old_value_scp_monto = $this->scp_monto;
   $old_value_scp_taza = $this->scp_taza;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_scp_fecha = $this->scp_fecha;
   $unformatted_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $unformatted_value_scp_id = $this->scp_id;
   $unformatted_value_scp_plazo = $this->scp_plazo;
   $unformatted_value_scp_monto = $this->scp_monto;
   $unformatted_value_scp_taza = $this->scp_taza;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_fac_tipo_amortizacion ORDER BY dec_nombre";

   $this->scp_fecha = $old_value_scp_fecha;
   $this->scp_secuencial_documento = $old_value_scp_secuencial_documento;
   $this->scp_id = $old_value_scp_id;
   $this->scp_plazo = $old_value_scp_plazo;
   $this->scp_monto = $old_value_scp_monto;
   $this->scp_taza = $old_value_scp_taza;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_fac_solicitud_convenio_pago_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_fac_solicitud_convenio_pago_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'][] = $rs->fields[0];
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
          $sSelComp = "name=\"scp_tipo_amortizacion\"";
          if (isset($this->NM_ajax_info['select_html']['scp_tipo_amortizacion']) && !empty($this->NM_ajax_info['select_html']['scp_tipo_amortizacion']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['scp_tipo_amortizacion']);
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

                  if ($this->scp_tipo_amortizacion == $sValue)
                  {
                      $this->_tmp_lookup_scp_tipo_amortizacion = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['scp_tipo_amortizacion'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['scp_tipo_amortizacion']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['scp_tipo_amortizacion']['valList'][$i] = form_fac_solicitud_convenio_pago_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['scp_tipo_amortizacion']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['scp_tipo_amortizacion']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['scp_tipo_amortizacion']['labList'] = $aLabel;
          }
   }

          //----- scp_estado
   function ajax_return_values_scp_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("scp_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->scp_estado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['scp_estado'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
              $orig_scp_estado = $this->scp_estado;
              $scp_estado      = $this->scp_estado;
              $this->scp_estado = $scp_estado;
              $this->lookup_scp_estado($conteudo);
              $this->scp_estado = $orig_scp_estado;
              $this->NM_ajax_info['fldList']['scp_estado']['lookupCons'] = form_fac_solicitud_convenio_pago_mob_pack_protect_string(NM_charset_to_utf8($conteudo));
          }
   }

          //----- detalles
   function ajax_return_values_detalles($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("detalles", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->detalles);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['detalles'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- amortizacion
   function ajax_return_values_amortizacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("amortizacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->amortizacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['amortizacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['upload_dir'][$fieldName][] = $newName;
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
       $this->NM_ajax_info['btnVars']['var_btn_agregar_var_solicitud'] = $this->form_encode_input($this->nmgp_dados_form['scp_id']);
       $this->NM_ajax_info['btnVars']['var_btn_agregar_var_propietario'] = $this->form_encode_input($this->nmgp_dados_form['scp_propietario']);
   } // ajax_add_parameters
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_scp_estado = $this->scp_estado;
    $original_scp_id = $this->scp_id;
    $original_scp_plazo = $this->scp_plazo;
    $original_scp_propietario = $this->scp_propietario;
    $original_scp_taza = $this->scp_taza;
    $original_scp_tipo_amortizacion = $this->scp_tipo_amortizacion;
}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  if($this->scp_id =='' ){
	$this->sc_field_readonly("scp_propietario", 'off');
	$this->sc_field_readonly("scp_plazo", 'off');	
	$this->sc_field_readonly("scp_tipo_amortizacion", 'off');
}else{
	$this->sc_field_readonly("scp_propietario", 'on');
	$this->sc_field_readonly("scp_plazo", 'on');	
	$this->sc_field_readonly("scp_tipo_amortizacion", 'on');
}

if($this->scp_taza ==''){
	$check_parametro="select sp_busca_parametro_cartera('".$this->sc_temp_Igtech_RucEmpresa."','TINTCAR','0.00');";
	 
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
		$this->scp_taza =$this->rs_parametro[0][0];
	}
}


if ($this->scp_estado  == 'I'){
	$this->NM_ajax_info['buttonDisplay']['agregar'] = $this->nmgp_botoes["agregar"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['simular'] = $this->nmgp_botoes["simular"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['procesar'] = $this->nmgp_botoes["procesar"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['Imprimir'] = $this->nmgp_botoes["Imprimir"] = 'off';;
	
}

if ($this->scp_estado  == 'S'){
	$this->NM_ajax_info['buttonDisplay']['agregar'] = $this->nmgp_botoes["agregar"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['simular'] = $this->nmgp_botoes["simular"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['procesar'] = $this->nmgp_botoes["procesar"] = 'on';;
	$this->NM_ajax_info['buttonDisplay']['new'] = $this->nmgp_botoes["new"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['Imprimir'] = $this->nmgp_botoes["Imprimir"] = 'off';;
	$this->sc_field_readonly("scp_plazo", 'on');
	$this->sc_field_readonly("scp_contrato", 'on');
	$this->sc_field_readonly("scp_solicitante", 'on');
	$this->sc_field_readonly("scp_propietario", 'on');
	$this->sc_field_readonly("scp_taza", 'on');
	$this->sc_field_readonly("scp_tipo_amortizacion", 'on');
	
}	

if ($this->scp_estado  == 'P'){
	$this->NM_ajax_info['buttonDisplay']['agregar'] = $this->nmgp_botoes["agregar"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['simular'] = $this->nmgp_botoes["simular"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['procesar'] = $this->nmgp_botoes["procesar"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['new'] = $this->nmgp_botoes["new"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;
	$this->NM_ajax_info['buttonDisplay']['Imprimir'] = $this->nmgp_botoes["Imprimir"] = 'on';;
	$this->sc_field_readonly("scp_contrato", 'on');
	$this->sc_field_readonly("scp_solicitante", 'on');
	$this->sc_field_readonly("scp_propietario", 'on');
	$this->sc_field_readonly("scp_taza", 'on');
	$this->sc_field_readonly("scp_tipo_amortizacion", 'on');
	$this->sc_field_readonly("scp_plazo", 'on');
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_scp_estado != $this->scp_estado || (isset($bFlagRead_scp_estado) && $bFlagRead_scp_estado)))
    {
        $this->ajax_return_values_scp_estado(true);
    }
    if (($original_scp_id != $this->scp_id || (isset($bFlagRead_scp_id) && $bFlagRead_scp_id)))
    {
        $this->ajax_return_values_scp_id(true);
    }
    if (($original_scp_plazo != $this->scp_plazo || (isset($bFlagRead_scp_plazo) && $bFlagRead_scp_plazo)))
    {
        $this->ajax_return_values_scp_plazo(true);
    }
    if (($original_scp_propietario != $this->scp_propietario || (isset($bFlagRead_scp_propietario) && $bFlagRead_scp_propietario)))
    {
        $this->ajax_return_values_scp_propietario(true);
    }
    if (($original_scp_taza != $this->scp_taza || (isset($bFlagRead_scp_taza) && $bFlagRead_scp_taza)))
    {
        $this->ajax_return_values_scp_taza(true);
    }
    if (($original_scp_tipo_amortizacion != $this->scp_tipo_amortizacion || (isset($bFlagRead_scp_tipo_amortizacion) && $bFlagRead_scp_tipo_amortizacion)))
    {
        $this->ajax_return_values_scp_tipo_amortizacion(true);
    }
}
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off'; 
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
      $this->scp_monto = str_replace($sc_parm1, $sc_parm2, $this->scp_monto); 
      $this->scp_taza = str_replace($sc_parm1, $sc_parm2, $this->scp_taza); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->scp_monto = "'" . $this->scp_monto . "'";
      $this->scp_taza = "'" . $this->scp_taza . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->scp_monto = str_replace("'", "", $this->scp_monto); 
      $this->scp_taza = str_replace("'", "", $this->scp_taza); 
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
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_scp_secuencial_documento = $this->scp_secuencial_documento;
}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
  if($this->scp_secuencial_documento ==''){
	$check_sql = "select sp_fac_secuencial ('".$this->sc_temp_Igtech_RucEmpresa."','SECCONPAGO');" ;
	 
      $nm_select = $check_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->rs_secuencial = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->rs_secuencial[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_secuencial = false;
          $this->rs_secuencial_erro = $this->Db->ErrorMsg();
      } 

	echo $this->rs_secuencial[0][0];
	if(isset($this->rs_secuencial[0][0])){
		$this->scp_secuencial_documento =$this->rs_secuencial[0][0];
	}else{
		$this->scp_secuencial_documento =0;	
	}
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_scp_secuencial_documento != $this->scp_secuencial_documento || (isset($bFlagRead_scp_secuencial_documento) && $bFlagRead_scp_secuencial_documento)))
    {
        $this->ajax_return_values_scp_secuencial_documento(true);
    }
}
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $this->nmgp_opcao ; 
          if ($this->nmgp_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          else
          { 
              $this->sc_evento = ""; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->NM_rollback_db(); 
          $this->Campos_Mens_erro = ""; 
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
      if ('incluir' == $this->nmgp_opcao && empty($this->scp_empresa)) {$this->scp_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . ""; $NM_val_null[] = "scp_empresa";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->scp_usuario)) {$this->scp_usuario = "" . $_SESSION['Igtech_SesionLogin'] . ""; $NM_val_null[] = "scp_usuario";}  
      if ('incluir' == $this->nmgp_opcao) { $this->scp_ip = $_SERVER['REMOTE_ADDR']; } 
      $NM_val_form['scp_fecha'] = $this->scp_fecha;
      $NM_val_form['scp_secuencial_documento'] = $this->scp_secuencial_documento;
      $NM_val_form['scp_propietario'] = $this->scp_propietario;
      $NM_val_form['scp_id'] = $this->scp_id;
      $NM_val_form['scp_plazo'] = $this->scp_plazo;
      $NM_val_form['scp_monto'] = $this->scp_monto;
      $NM_val_form['scp_taza'] = $this->scp_taza;
      $NM_val_form['scp_tipo_amortizacion'] = $this->scp_tipo_amortizacion;
      $NM_val_form['scp_estado'] = $this->scp_estado;
      $NM_val_form['detalles'] = $this->detalles;
      $NM_val_form['amortizacion'] = $this->amortizacion;
      $NM_val_form['scp_empresa'] = $this->scp_empresa;
      $NM_val_form['scp_usuario'] = $this->scp_usuario;
      $NM_val_form['scp_ip'] = $this->scp_ip;
      if ($this->scp_id === "" || is_null($this->scp_id))  
      { 
          $this->scp_id = 0;
      } 
      if ($this->scp_propietario === "" || is_null($this->scp_propietario))  
      { 
          $this->scp_propietario = 0;
          $this->sc_force_zero[] = 'scp_propietario';
      } 
      if ($this->scp_monto === "" || is_null($this->scp_monto))  
      { 
          $this->scp_monto = 0;
          $this->sc_force_zero[] = 'scp_monto';
      } 
      if ($this->scp_plazo === "" || is_null($this->scp_plazo))  
      { 
          $this->scp_plazo = 0;
          $this->sc_force_zero[] = 'scp_plazo';
      } 
      if ($this->scp_taza === "" || is_null($this->scp_taza))  
      { 
          $this->scp_taza = 0;
          $this->sc_force_zero[] = 'scp_taza';
      } 
      if ($this->scp_secuencial_documento === "" || is_null($this->scp_secuencial_documento))  
      { 
          $this->scp_secuencial_documento = 0;
          $this->sc_force_zero[] = 'scp_secuencial_documento';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          if ($this->scp_fecha == "")  
          { 
              $this->scp_fecha = "null"; 
              $NM_val_null[] = "scp_fecha";
          } 
          $this->scp_empresa_before_qstr = $this->scp_empresa;
          $this->scp_empresa = substr($this->Db->qstr($this->scp_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->scp_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->scp_empresa);
          }
          if ($this->scp_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->scp_empresa = "null"; 
              $NM_val_null[] = "scp_empresa";
          } 
          $this->scp_tipo_amortizacion_before_qstr = $this->scp_tipo_amortizacion;
          $this->scp_tipo_amortizacion = substr($this->Db->qstr($this->scp_tipo_amortizacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->scp_tipo_amortizacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->scp_tipo_amortizacion);
          }
          if ($this->scp_tipo_amortizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->scp_tipo_amortizacion = "null"; 
              $NM_val_null[] = "scp_tipo_amortizacion";
          } 
          $this->scp_usuario_before_qstr = $this->scp_usuario;
          $this->scp_usuario = substr($this->Db->qstr($this->scp_usuario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->scp_usuario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->scp_usuario);
          }
          if ($this->scp_usuario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->scp_usuario = "null"; 
              $NM_val_null[] = "scp_usuario";
          } 
          $this->scp_ip_before_qstr = $this->scp_ip;
          $this->scp_ip = substr($this->Db->qstr($this->scp_ip), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->scp_ip = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->scp_ip);
          }
          if ($this->scp_ip == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->scp_ip = "null"; 
              $NM_val_null[] = "scp_ip";
          } 
          $this->scp_estado_before_qstr = $this->scp_estado;
          $this->scp_estado = substr($this->Db->qstr($this->scp_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->scp_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->scp_estado);
          }
          if ($this->scp_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->scp_estado = "null"; 
              $NM_val_null[] = "scp_estado";
          } 
          $this->amortizacion_before_qstr = $this->amortizacion;
          $this->amortizacion = substr($this->Db->qstr($this->amortizacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->amortizacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->amortizacion);
          }
          if ($this->amortizacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->amortizacion = "null"; 
              $NM_val_null[] = "amortizacion";
          } 
          $this->detalles_before_qstr = $this->detalles;
          $this->detalles = substr($this->Db->qstr($this->detalles), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->detalles = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->detalles);
          }
          if ($this->detalles == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->detalles = "null"; 
              $NM_val_null[] = "detalles";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
                  $SC_fields_update[] = "scp_fecha = #$this->scp_fecha#, scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "scp_fecha = " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "scp_fecha = " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "scp_fecha = EXTEND('$this->scp_fecha', YEAR TO DAY), scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "scp_fecha = " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "scp_fecha = " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "scp_fecha = " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", scp_propietario = $this->scp_propietario, scp_monto = $this->scp_monto, scp_plazo = $this->scp_plazo, scp_taza = $this->scp_taza, scp_tipo_amortizacion = '$this->scp_tipo_amortizacion', scp_secuencial_documento = $this->scp_secuencial_documento, scp_estado = '$this->scp_estado'"; 
              } 
              if (isset($NM_val_form['scp_empresa']) && $NM_val_form['scp_empresa'] != $this->nmgp_dados_select['scp_empresa']) 
              { 
                  $SC_fields_update[] = "scp_empresa = '$this->scp_empresa'"; 
              } 
              if (isset($NM_val_form['scp_usuario']) && $NM_val_form['scp_usuario'] != $this->nmgp_dados_select['scp_usuario']) 
              { 
                  $SC_fields_update[] = "scp_usuario = '$this->scp_usuario'"; 
              } 
              if (isset($NM_val_form['scp_ip']) && $NM_val_form['scp_ip'] != $this->nmgp_dados_select['scp_ip']) 
              { 
                  $SC_fields_update[] = "scp_ip = '$this->scp_ip'"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE scp_id = $this->scp_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE scp_id = $this->scp_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE scp_id = $this->scp_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE scp_id = $this->scp_id ";  
              }  
              else  
              {
                  $comando .= " WHERE scp_id = $this->scp_id ";  
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
                                  form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->scp_empresa = $this->scp_empresa_before_qstr;
              $this->scp_tipo_amortizacion = $this->scp_tipo_amortizacion_before_qstr;
              $this->scp_usuario = $this->scp_usuario_before_qstr;
              $this->scp_ip = $this->scp_ip_before_qstr;
              $this->scp_estado = $this->scp_estado_before_qstr;
              $this->amortizacion = $this->amortizacion_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['scp_id'])) { $this->scp_id = $NM_val_form['scp_id']; }
              elseif (isset($this->scp_id)) { $this->nm_limpa_alfa($this->scp_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_propietario'])) { $this->scp_propietario = $NM_val_form['scp_propietario']; }
              elseif (isset($this->scp_propietario)) { $this->nm_limpa_alfa($this->scp_propietario); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_monto'])) { $this->scp_monto = $NM_val_form['scp_monto']; }
              elseif (isset($this->scp_monto)) { $this->nm_limpa_alfa($this->scp_monto); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_plazo'])) { $this->scp_plazo = $NM_val_form['scp_plazo']; }
              elseif (isset($this->scp_plazo)) { $this->nm_limpa_alfa($this->scp_plazo); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_taza'])) { $this->scp_taza = $NM_val_form['scp_taza']; }
              elseif (isset($this->scp_taza)) { $this->nm_limpa_alfa($this->scp_taza); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_tipo_amortizacion'])) { $this->scp_tipo_amortizacion = $NM_val_form['scp_tipo_amortizacion']; }
              elseif (isset($this->scp_tipo_amortizacion)) { $this->nm_limpa_alfa($this->scp_tipo_amortizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_secuencial_documento'])) { $this->scp_secuencial_documento = $NM_val_form['scp_secuencial_documento']; }
              elseif (isset($this->scp_secuencial_documento)) { $this->nm_limpa_alfa($this->scp_secuencial_documento); }
              if     (isset($NM_val_form) && isset($NM_val_form['scp_estado'])) { $this->scp_estado = $NM_val_form['scp_estado']; }
              elseif (isset($this->scp_estado)) { $this->nm_limpa_alfa($this->scp_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['amortizacion'])) { $this->amortizacion = $NM_val_form['amortizacion']; }
              elseif (isset($this->amortizacion)) { $this->nm_limpa_alfa($this->amortizacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['detalles'])) { $this->detalles = $NM_val_form['detalles']; }
              elseif (isset($this->detalles)) { $this->nm_limpa_alfa($this->detalles); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('scp_fecha', 'scp_secuencial_documento', 'scp_propietario', 'scp_id', 'scp_plazo', 'scp_monto', 'scp_taza', 'scp_tipo_amortizacion', 'scp_estado', 'detalles', 'amortizacion'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
              $this->nm_converte_datas();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(scp_id) from " . $this->Ini->nm_tabela; 
          $comando = "select max(scp_id) from " . $this->Ini->nm_tabela; 
          $rs = $this->Db->Execute($comando); 
          if ($rs === false && !$rs->EOF)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
              $this->NM_rollback_db(); 
              if ($this->NM_ajax_flag)
              {
                  form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
              }
              exit; 
          }  
          $this->scp_id_before_qstr = $this->scp_id = $rs->fields[0] + 1;
          $rs->Close(); 
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES ($this->scp_id, #$this->scp_fecha#, '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, EXTEND('$this->scp_fecha', YEAR TO DAY), '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado) VALUES (" . $NM_seq_auto . "$this->scp_id, " . $this->Ini->date_delim . $this->scp_fecha . $this->Ini->date_delim1 . ", '$this->scp_empresa', $this->scp_propietario, $this->scp_monto, $this->scp_plazo, $this->scp_taza, '$this->scp_tipo_amortizacion', $this->scp_secuencial_documento, '$this->scp_usuario', '$this->scp_ip', '$this->scp_estado')"; 
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
                              form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->scp_empresa = $this->scp_empresa_before_qstr;
              $this->scp_tipo_amortizacion = $this->scp_tipo_amortizacion_before_qstr;
              $this->scp_usuario = $this->scp_usuario_before_qstr;
              $this->scp_ip = $this->scp_ip_before_qstr;
              $this->scp_estado = $this->scp_estado_before_qstr;
              $this->amortizacion = $this->amortizacion_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->scp_empresa = $this->scp_empresa_before_qstr;
              $this->scp_tipo_amortizacion = $this->scp_tipo_amortizacion_before_qstr;
              $this->scp_usuario = $this->scp_usuario_before_qstr;
              $this->scp_ip = $this->scp_ip_before_qstr;
              $this->scp_estado = $this->scp_estado_before_qstr;
              $this->amortizacion = $this->amortizacion_before_qstr;
              $this->detalles = $this->detalles_before_qstr;
              $this->sc_insert_on = true; 
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['agregar'] = "on";
              $this->nmgp_botoes['procesar'] = "on";
              $this->nmgp_botoes['simular'] = "on";
              $this->nmgp_botoes['Imprimir'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->scp_id = substr($this->Db->qstr($this->scp_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "oc_solicitud = " . $this->scp_id . "";
              $this->form_fac_operaciones_convenio_mob->ini_controle();
              if ($this->form_fac_operaciones_convenio_mob->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where scp_id = $this->scp_id "); 
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
                          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']);
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
    if ("insert" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ",")
        {
            $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off'; 
    }
      if (!empty($this->Campos_Mens_erro)) 
      {
          $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro); 
          $this->Campos_Mens_erro = ""; 
          $this->nmgp_opc_ant = $salva_opcao ; 
          if ($salva_opcao == "incluir") 
          { 
              $GLOBALS["erro_incl"] = 1; 
          }
          if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir" || $this->nmgp_opcao == "excluir") 
          {
              $this->nmgp_opcao = "nada"; 
          } 
          $this->sc_evento = ""; 
          $this->NM_rollback_db(); 
          return; 
      }
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['parms'] = "scp_id?#?$this->scp_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->scp_id = null === $this->scp_id ? null : substr($this->Db->qstr($this->scp_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "R")
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['iframe_evento']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['iframe_evento'] == "insert") 
          { 
               $this->nmgp_opcao = "novo"; 
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['select'] = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->scp_id)) 
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
          else 
          { 
              $this->nmgp_opcao = "igual"; 
          } 
      } 
      if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav']) 
      { 
          $this->nmgp_opcao = "inicio";
      } 
      if ($this->nmgp_opcao != "nada" && (trim($this->scp_id) == "")) 
      { 
          if ($this->nmgp_opcao == "avanca")  
          { 
              $this->nmgp_opcao = "final"; 
          } 
          elseif ($this->nmgp_opcao != "novo")
          { 
              $this->nmgp_opcao = "inicio"; 
          } 
      } 
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("(scp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')");
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
          $sc_where = ('' != $sc_where) ? $sc_where . ' and (' . $sc_where_filter . ')' : ' where ' . $sc_where_filter;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']))
      { 
          $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_fac_solicitud_convenio_pago_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'] = $qt_geral_reg_form_fac_solicitud_convenio_pago_mob;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->scp_id))
          {
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $Key_Where = "scp_id < $this->scp_id "; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Key_Where = "scp_id < $this->scp_id "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Key_Where = "scp_id < $this->scp_id "; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Key_Where = "scp_id < $this->scp_id "; 
              }
              else  
              {
                  $Key_Where = "scp_id < $this->scp_id "; 
              }
              $Where_Start = (empty($sc_where)) ? " where " . $Key_Where :  $sc_where . " and (" . $Key_Where . ")";
              $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $Where_Start; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rt = $this->Db->Execute($nmgp_select) ; 
              if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
              { 
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
                  exit ; 
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = $rt->fields[0];
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_fac_solicitud_convenio_pago_mob = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] > $qt_geral_reg_form_fac_solicitud_convenio_pago_mob)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = $qt_geral_reg_form_fac_solicitud_convenio_pago_mob; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = $qt_geral_reg_form_fac_solicitud_convenio_pago_mob; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_fac_solicitud_convenio_pago_mob) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'] + 1; 
      $this->NM_gera_nav_page(); 
      $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT scp_id, str_replace (convert(char(10),scp_fecha,102), '.', '-') + ' ' + convert(char(8),scp_fecha,20), scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT scp_id, convert(char(23),scp_fecha,121), scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT scp_id, EXTEND(scp_fecha, YEAR TO DAY), scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT scp_id, scp_fecha, scp_empresa, scp_propietario, scp_monto, scp_plazo, scp_taza, scp_tipo_amortizacion, scp_secuencial_documento, scp_usuario, scp_ip, scp_estado from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = "(scp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')";
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (!empty($sc_where))
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                     $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                     $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                     $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                     $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  else  
                  {
                     $aWhere[] = "scp_id = $this->scp_id"; 
                  }
              } 
              else
              {
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  {
                      $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
                  {
                      $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
                  {
                      $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  {
                      $aWhere[] = "scp_id = $this->scp_id"; 
                  }  
                  else  
                  {
                      $aWhere[] = "scp_id = $this->scp_id"; 
                  }
              } 
          } 
          $nmgp_select .= $this->returnWhere($aWhere) . ' ';
          $sc_order_by = "";
          $sc_order_by = "scp_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start']) ;  
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
          if ($rs->EOF) 
          { 
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['agregar'] = $this->nmgp_botoes['agregar'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['procesar'] = $this->nmgp_botoes['procesar'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['simular'] = $this->nmgp_botoes['simular'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['Imprimir'] = $this->nmgp_botoes['Imprimir'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter'] = true;
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
              $this->nmgp_opcao = "novo"; 
              $this->nm_flag_saida_novo = "S"; 
              $rs->Close(); 
              $this->NM_ajax_info['buttonDisplay']['agregar'] = $this->nmgp_botoes['agregar'] = "off";
              $this->NM_ajax_info['buttonDisplay']['procesar'] = $this->nmgp_botoes['procesar'] = "off";
              $this->NM_ajax_info['buttonDisplay']['simular'] = $this->nmgp_botoes['simular'] = "off";
              $this->NM_ajax_info['buttonDisplay']['Imprimir'] = $this->nmgp_botoes['Imprimir'] = "off";
              if ($this->aba_iframe)
              {
                  $this->NM_ajax_info['buttonDisplay']['exit'] = $this->nmgp_botoes['exit'] = 'off';
              }
          } 
          if ($rs === false && $GLOBALS["NM_ERRO_IBASE"] == 1) 
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_nfnd_extr']); 
              $this->nmgp_opcao = "novo"; 
          }  
          if ($this->nmgp_opcao != "novo") 
          { 
              $this->scp_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['scp_id'] = $this->scp_id;
              $this->scp_fecha = $rs->fields[1] ; 
              $this->nmgp_dados_select['scp_fecha'] = $this->scp_fecha;
              $this->scp_empresa = $rs->fields[2] ; 
              $this->nmgp_dados_select['scp_empresa'] = $this->scp_empresa;
              $this->scp_propietario = $rs->fields[3] ; 
              $this->nmgp_dados_select['scp_propietario'] = $this->scp_propietario;
              $this->scp_monto = $rs->fields[4] ; 
              $this->nmgp_dados_select['scp_monto'] = $this->scp_monto;
              $this->scp_plazo = $rs->fields[5] ; 
              $this->nmgp_dados_select['scp_plazo'] = $this->scp_plazo;
              $this->scp_taza = $rs->fields[6] ; 
              $this->nmgp_dados_select['scp_taza'] = $this->scp_taza;
              $this->scp_tipo_amortizacion = $rs->fields[7] ; 
              $this->nmgp_dados_select['scp_tipo_amortizacion'] = $this->scp_tipo_amortizacion;
              $this->scp_secuencial_documento = $rs->fields[8] ; 
              $this->nmgp_dados_select['scp_secuencial_documento'] = $this->scp_secuencial_documento;
              $this->scp_usuario = $rs->fields[9] ; 
              $this->nmgp_dados_select['scp_usuario'] = $this->scp_usuario;
              $this->scp_ip = $rs->fields[10] ; 
              $this->nmgp_dados_select['scp_ip'] = $this->scp_ip;
              $this->scp_estado = $rs->fields[11] ; 
              $this->nmgp_dados_select['scp_estado'] = $this->scp_estado;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->scp_id = (string)$this->scp_id; 
              $this->scp_propietario = (string)$this->scp_propietario; 
              $this->scp_monto = (string)$this->scp_monto; 
              $this->scp_plazo = (string)$this->scp_plazo; 
              $this->scp_taza = (string)$this->scp_taza; 
              $this->scp_secuencial_documento = (string)$this->scp_secuencial_documento; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['parms'] = "scp_id?#?$this->scp_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] < $qt_geral_reg_form_fac_solicitud_convenio_pago_mob;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao']   = '';
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
              $this->scp_id = "";  
              $this->nmgp_dados_form["scp_id"] = $this->scp_id;
              $this->scp_fecha =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->nmgp_dados_form["scp_fecha"] = $this->scp_fecha;
              $this->scp_empresa = "";  
              $this->nmgp_dados_form["scp_empresa"] = $this->scp_empresa;
              $this->scp_propietario = "";  
              $this->nmgp_dados_form["scp_propietario"] = $this->scp_propietario;
              $this->scp_monto = "";  
              $this->nmgp_dados_form["scp_monto"] = $this->scp_monto;
              $this->scp_plazo = "";  
              $this->nmgp_dados_form["scp_plazo"] = $this->scp_plazo;
              $this->scp_taza = "";  
              $this->nmgp_dados_form["scp_taza"] = $this->scp_taza;
              $this->scp_tipo_amortizacion = "";  
              $this->nmgp_dados_form["scp_tipo_amortizacion"] = $this->scp_tipo_amortizacion;
              $this->scp_secuencial_documento = "";  
              $this->nmgp_dados_form["scp_secuencial_documento"] = $this->scp_secuencial_documento;
              $this->scp_usuario = "";  
              $this->nmgp_dados_form["scp_usuario"] = $this->scp_usuario;
              $this->scp_ip = "";  
              $this->nmgp_dados_form["scp_ip"] = $this->scp_ip;
              $this->scp_estado = "I";  
              $this->nmgp_dados_form["scp_estado"] = $this->scp_estado;
              $this->amortizacion = "";  
              $this->nmgp_dados_form["amortizacion"] = $this->amortizacion;
              $this->detalles = "";  
              $this->nmgp_dados_form["detalles"] = $this->detalles;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_operaciones_convenio_mob']['embutida_parms'] = "NM_btn_insert*scinN*scoutNM_btn_update*scinN*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_cuotas_convenio']['embutida_parms'] = "var_convenio*scin" . $this->nmgp_dados_form['scp_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
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
       $this->SC_log_arr['keys']['scp_id'] =  $this->scp_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dados_select'];
           $this->SC_log_arr['fields']['scp_fecha']['0'] =  $nmgp_dados_select['scp_fecha'];
           $this->SC_log_arr['fields']['scp_empresa']['0'] =  $nmgp_dados_select['scp_empresa'];
           $this->SC_log_arr['fields']['scp_propietario']['0'] =  $nmgp_dados_select['scp_propietario'];
           $this->SC_log_arr['fields']['scp_monto']['0'] =  $nmgp_dados_select['scp_monto'];
           $this->SC_log_arr['fields']['scp_plazo']['0'] =  $nmgp_dados_select['scp_plazo'];
           $this->SC_log_arr['fields']['scp_taza']['0'] =  $nmgp_dados_select['scp_taza'];
           $this->SC_log_arr['fields']['scp_tipo_amortizacion']['0'] =  $nmgp_dados_select['scp_tipo_amortizacion'];
           $this->SC_log_arr['fields']['scp_secuencial_documento']['0'] =  $nmgp_dados_select['scp_secuencial_documento'];
           $this->SC_log_arr['fields']['scp_usuario']['0'] =  $nmgp_dados_select['scp_usuario'];
           $this->SC_log_arr['fields']['scp_ip']['0'] =  $nmgp_dados_select['scp_ip'];
           $this->SC_log_arr['fields']['scp_estado']['0'] =  $nmgp_dados_select['scp_estado'];
           $this->SC_log_arr['fields']['amortizacion']['0'] =  $nmgp_dados_select['amortizacion'];
           $this->SC_log_arr['fields']['detalles']['0'] =  $nmgp_dados_select['detalles'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['scp_fecha']['1'] =  $this->scp_fecha;
       $this->SC_log_arr['fields']['scp_empresa']['1'] =  $this->scp_empresa;
       $this->SC_log_arr['fields']['scp_propietario']['1'] =  $this->scp_propietario;
       $this->SC_log_arr['fields']['scp_monto']['1'] =  $this->scp_monto;
       $this->SC_log_arr['fields']['scp_plazo']['1'] =  $this->scp_plazo;
       $this->SC_log_arr['fields']['scp_taza']['1'] =  $this->scp_taza;
       $this->SC_log_arr['fields']['scp_tipo_amortizacion']['1'] =  $this->scp_tipo_amortizacion;
       $this->SC_log_arr['fields']['scp_secuencial_documento']['1'] =  $this->scp_secuencial_documento;
       $this->SC_log_arr['fields']['scp_usuario']['1'] =  $this->scp_usuario;
       $this->SC_log_arr['fields']['scp_ip']['1'] =  $this->scp_ip;
       $this->SC_log_arr['fields']['scp_estado']['1'] =  $this->scp_estado;
       $this->SC_log_arr['fields']['amortizacion']['1'] =  $this->amortizacion;
       $this->SC_log_arr['fields']['detalles']['1'] =  $this->detalles;
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
       $Log_labels['scp_fecha'] =  "{lang_fecha}";
       $Log_labels['scp_empresa'] =  "Scp Empresa";
       $Log_labels['scp_propietario'] =  "{lang_propietario}";
       $Log_labels['scp_monto'] =  "{lang_saldo}";
       $Log_labels['scp_plazo'] =  "{lang_plazo}";
       $Log_labels['scp_taza'] =  "{lang_tasas_interes}";
       $Log_labels['scp_tipo_amortizacion'] =  "{lang_tipo_amortizacion}";
       $Log_labels['scp_secuencial_documento'] =  "{lang_solicitud} Nro.";
       $Log_labels['scp_usuario'] =  "Scp Usuario";
       $Log_labels['scp_ip'] =  "Scp Ip";
       $Log_labels['scp_estado'] =  "{lang_estado}";
       $Log_labels['amortizacion'] =  "";
       $Log_labels['detalles'] =  "";
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
       $Reg_Page   = 1;
       $Max_link   = 5;
       $Mid_link   = ceil($Max_link / 2);
       $Corr_link  = (($Max_link % 2) == 0) ? 0 : 1;
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['reg_start'] + 1;
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function scp_contrato_onChange()
{
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
$original_scp_id = $this->scp_id;
$original_scp_monto = $this->scp_monto;

$delete_sql = "DELETE FROM fac_operaciones_convenio WHERE oc_solicitud=".$this->scp_id ;

     $nm_select = $delete_sql; 
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
         $rf = $this->Db->Execute($nm_select);
         if ($rf === false)
         {
             $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg());
             $this->NM_rollback_db(); 
             if ($this->NM_ajax_flag)
             {
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$this->scp_monto =0;
$this->NM_ajax_info['buttonDisplay']['agregar'] = $this->nmgp_botoes["agregar"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['simular'] = $this->nmgp_botoes["simular"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['procesar'] = $this->nmgp_botoes["procesar"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['Imprimir'] = $this->nmgp_botoes["Imprimir"] = 'off';;
if ($this->Ini->sc_tem_trans_banco)
{
    $this->Db->CommitTrans();
    $this->Ini->sc_tem_trans_banco = false;
}

$this->sc_ajax_javascript('recargar_marco');

$modificado_scp_id = $this->scp_id;
$modificado_scp_monto = $this->scp_monto;
$this->nm_formatar_campos('scp_id', 'scp_monto');
if ($original_scp_id !== $modificado_scp_id || isset($this->nmgp_cmp_readonly['scp_id']) || (isset($bFlagRead_scp_id) && $bFlagRead_scp_id))
{
    $this->ajax_return_values_scp_id(true);
}
if ($original_scp_monto !== $modificado_scp_monto || isset($this->nmgp_cmp_readonly['scp_monto']) || (isset($bFlagRead_scp_monto) && $bFlagRead_scp_monto))
{
    $this->ajax_return_values_scp_monto(true);
}
$this->NM_ajax_info['event_field'] = 'scp';
form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function obtenerIdAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                         
	
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarDetalleAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarNuevoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                         
	
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function validarDatosAsiento($i_data){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function cambiaEstadoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function cambiaEstadoFactura($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function generaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function anulaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function anularFactura($i_factura,$i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function anularNotaCredito($i_notacredito,$i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function inserUpdateCliente($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarCliente($i_data, $infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function actualizarCliente($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function BuscaClienteCedula($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function validarDatosCliente($i_data){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function ws_coneccion_bdd($infoConection) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function enviaFactura($i_factura,$i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
    }
	return $w_respuesta;
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarNuevaVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
        foreach ($w_formas_pago as $forma_pago) {
            $w_tesoria=$forma_pago;
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
        foreach ($w_formas_pago as $forma_pago) {
                $w_forma_pago=array(
                    'id_tesoreria'=>$forma_pago->id_tesoreria,
                    'fecha'=>       $i_data->fecha,
                    'compra_Venta'=>'Ventas',
                    'id_factura'=>  $w_res_factura_venta['datos']['id_factura'],
                    'tipo_pago'=>   $forma_pago->tipo_pago,
                    'documento'=>   $forma_pago->documento,
                    'lote'=>        $forma_pago->lote,
                    'valor'=>       $forma_pago->valor,
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function validarDatosNuevaFactura($i_data){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function comprobarFactura($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarDetalleVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function registrarDetallePago($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function actualizaTotalesFactura($i_factura,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function generarAsientoFactura($i_factura,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function anularVenta($i_data,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function validarDatosanularVenta($i_data){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function listaEmpresas($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function listaCuentasContables($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function listaProductosDebi($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function listaTesorerias($i_empresa,$infoConection){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function sincronizarEmpresas($i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
   
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function sincronizaPlanCuentas($i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function sincronizaProductos($i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function sincronizaTesorerias($i_empresa){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
                form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
        }
    }
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function mes($numero) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function FormatoFecha($fecha) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	
	list ( $month, $day, $year ) = split ( '[/.-]', $fecha );
	return $month . '/' . $day . '/' . $year;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function Hoy() {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mes = sprintf ( "%02s", $today ['mon'] );
	$dia = sprintf ( "%02s", $today ['mday'] );
	$anio = $today ['year'];
	return $anio . '/' . $mes . '/' . $dia;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function fecha_actual() {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function fecha_larga($dia,$mes,$anio) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function fecha_larga_dia($fecha) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function grado($numero) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function llenaizq($a, $Tamanio, $car) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $b . $a;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function llenader($a, $Tamanio, $car) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen ( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $a . $b;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function cifrado($cadena) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$strcifrado = '';
	$cadena = trim($cadena);
	for($i = 1; $i <= strlen($cadena); $i ++) {
		$strcifrado = $strcifrado.$this->llenaizq( strval( 1 + ord( substr($cadena, $i - 1, 1 ) ) ), 3, '0' );
	}
	return $strcifrado;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function descifrado($cadena) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$cifrado = '';
	for($i = 1; $i <= strlen( $cadena ); $i += 3) {
		$cifrado = $cifrado . chr( substr( $cadena, $i - 1, 3 ) - 1 );
	}
	
	return $cifrado;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function IgtechEliminaInyeccion($cadena) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$cadena=str_replace("=","",$cadena);
    $cadena=str_replace("'","",$cadena);
	$cadena=str_replace('"',"",$cadena);
	$cadena=str_replace('or',"",$cadena);
	$cadena=str_replace('OR',"",$cadena);
	return $cadena;
	
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function diasHabiles($dia,$mes,$anio,$numDias,$fer){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
 
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function diaMesAnio(){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
   
	$fecha=date("j-n-Y");
	$meses=array("Mes 	Nulo","Enero","Febrero","Marzo","Abril","Mayo",
				 "Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$fecha_array=explode("-",$fecha);
	$dia=$fecha_array[0];
	$mes=$meses[$fecha_array[1]];
	$anio=$fecha_array[2];
	return array($dia,$mes,$anio);

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function separar($dato){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
   
     $fecha_array=explode("-",$dato);
     return $fecha_array;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function mesNum($numero) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function leerxml($array, $dir){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function getMonto($money){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousendSeparator);

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function secuencialCartera($numero, $fecha){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  	
	$timestamp = strtotime($fecha); 
    $anio_actual = date('Y', $timestamp);
	$num = '';
	$longitud = strlen($numero);
	for($i=0;$i<(4-$longitud); $i++){
		$num .='0';
	}	
	$num = $num.$numero.'-'.$anio_actual; 
	return $num;	

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function inicialesUsuario($usuario){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$array2 = explode(".", $usuario);
	$apellido = substr($array2[0], 0, 1);
	$nombre = substr($array2[1], 0, 1);
	$resultado = strtolower ($nombre.$apellido);
	return $resultado;		

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function obtenerArray($cadena){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  		
	$array = split(',' , $cadena);
	$newarray=array_values(array_diff($array, array('')));	
	return $newarray;	

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function dias_transcurridos($fecha_i,$fecha_f){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); 
	$dias = floor($dias);		
	return $dias;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function trasformar_money($numero){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
	setlocale(LC_MONETARY, 'en_US');
	$money=money_format('%i', $numero) . "\n";			
	return str_replace('USD', '', $money);

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function calculaedad($fechanacimiento){
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
  
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($mes_diferencia < 0 || ($mes_diferencia == 0 && $dia_diferencia < 0 ))
    $ano_diferencia--;
  return $ano_diferencia;

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
}
function num2letras($num, $moneda, $denominacion, $fem = false, $dec = true) {
$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'on';
   
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

$_SESSION['scriptcase']['form_fac_solicitud_convenio_pago_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_fac_solicitud_convenio_pago_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("scp_id", "scp_fecha", "scp_propietario", "scp_monto", "scp_plazo", "scp_taza", "scp_tipo_amortizacion", "scp_secuencial_documento", "scp_usuario", "scp_ip", "scp_estado", "scp_solicitante"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['csrf_token'];
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

   function Form_lookup_scp_propietario()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'] = array(); 
    }

   $old_value_scp_fecha = $this->scp_fecha;
   $old_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $old_value_scp_id = $this->scp_id;
   $old_value_scp_plazo = $this->scp_plazo;
   $old_value_scp_monto = $this->scp_monto;
   $old_value_scp_taza = $this->scp_taza;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_scp_fecha = $this->scp_fecha;
   $unformatted_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $unformatted_value_scp_id = $this->scp_id;
   $unformatted_value_scp_plazo = $this->scp_plazo;
   $unformatted_value_scp_monto = $this->scp_monto;
   $unformatted_value_scp_taza = $this->scp_taza;

   $nm_comando = "SELECT cl_id, 'Propietario:' || cl_nombre || ' - CI:' || cl_identificacion || ' - Nro. Contrato:' ||  coalesce(con_numero_contrato,'') ||' - Nro. Medidior:'|| coalesce(con_numero_medidor,'')  FROM del_cliente left join jap_contrato on cl_id=con_propietario   WHERE con_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cl_nombre , con_numero_contrato, con_numero_medidor";

   $this->scp_fecha = $old_value_scp_fecha;
   $this->scp_secuencial_documento = $old_value_scp_secuencial_documento;
   $this->scp_id = $old_value_scp_id;
   $this->scp_plazo = $old_value_scp_plazo;
   $this->scp_monto = $old_value_scp_monto;
   $this->scp_taza = $old_value_scp_taza;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_propietario'][] = $rs->fields[0];
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
   function Form_lookup_scp_tipo_amortizacion()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'] = array(); 
    }

   $old_value_scp_fecha = $this->scp_fecha;
   $old_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $old_value_scp_id = $this->scp_id;
   $old_value_scp_plazo = $this->scp_plazo;
   $old_value_scp_monto = $this->scp_monto;
   $old_value_scp_taza = $this->scp_taza;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_scp_fecha = $this->scp_fecha;
   $unformatted_value_scp_secuencial_documento = $this->scp_secuencial_documento;
   $unformatted_value_scp_id = $this->scp_id;
   $unformatted_value_scp_plazo = $this->scp_plazo;
   $unformatted_value_scp_monto = $this->scp_monto;
   $unformatted_value_scp_taza = $this->scp_taza;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_fac_tipo_amortizacion ORDER BY dec_nombre";

   $this->scp_fecha = $old_value_scp_fecha;
   $this->scp_secuencial_documento = $old_value_scp_secuencial_documento;
   $this->scp_id = $old_value_scp_id;
   $this->scp_plazo = $old_value_scp_plazo;
   $this->scp_monto = $old_value_scp_monto;
   $this->scp_taza = $old_value_scp_taza;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['Lookup_scp_tipo_amortizacion'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "scp_id", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_fecha", $arg_search, $data_search, "DATE", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_scp_propietario($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "scp_propietario", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_monto", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_plazo", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_taza", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_scp_tipo_amortizacion($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "scp_tipo_amortizacion", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_secuencial_documento", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_usuario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_ip", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "scp_estado", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter_form'] . " and ((scp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')) and (" . $comando . ")";
      }
      else
      {
          $sc_where = " where (scp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "') and (" . $comando . ")";
      }
      $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
      $rt = $this->Db->Execute($nmgp_select) ; 
      if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
      { 
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit ; 
      }  
      $qt_geral_reg_form_fac_solicitud_convenio_pago_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['total'] = $qt_geral_reg_form_fac_solicitud_convenio_pago_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
      $nm_numeric[] = "scp_id";$nm_numeric[] = "scp_propietario";$nm_numeric[] = "scp_monto";$nm_numeric[] = "scp_plazo";$nm_numeric[] = "scp_taza";$nm_numeric[] = "scp_secuencial_documento";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['decimal_db'] == ".")
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
      $Nm_datas["scp_fecha"] = "date";
         if (isset($Nm_datas[$campo_join]))
         {
             for ($x = 0; $x < strlen($campo); $x++)
             {
                 $tst = substr($campo, $x, 1);
                 if (!is_numeric($tst) && ($tst != "-" && $tst != ":" && $tst != " "))
                 {
                     return;
                 }
             }
         }
         if (isset($Nm_datas[$campo_join]))
          {
            $nm_ini_lower = "";
             $nm_fim_lower = "";
          }
          if (isset($Nm_datas[$campo_join]))
          {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
             $nm_aspas  = "#";
             $nm_aspas1 = "#";
          }
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['SC_sep_date1'];
              }
          }
      if (isset($Nm_datas[$campo_join]) && (strtoupper($condicao) == "II" || strtoupper($condicao) == "QP" || strtoupper($condicao) == "NP" || strtoupper($condicao) == "DF"))
      {
          if (strtoupper($condicao) == "DF")
          {
              $condicao = "NP";
          }
          if (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
          elseif ($Nm_datas[$campo_join] == "time" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $nome = "to_char (" . $nome . ", 'hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(10)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $nome = "convert(char(19)," . $nome . ",121)";
          }
          elseif (($Nm_datas[$campo_join] == "times" || $Nm_datas[$campo_join] == "datetime" || $Nm_datas[$campo_join] == "timestamp") && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $nome  = "TO_DATE(TO_CHAR(" . $nome . ", 'yyyy-mm-dd hh24:mi:ss'), 'yyyy-mm-dd hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO FRACTION)";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $nome = "EXTEND(" . $nome . ", YEAR TO DAY)";
          }
          elseif ($Nm_datas[$campo_join] == "datetime" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD hh24:mi:ss')";
          }
          elseif ($Nm_datas[$campo_join] == "date" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_progress))
          {
              $nome = "to_char (" . $nome . ", 'YYYY-MM-DD')";
          }
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
   function SC_lookup_scp_propietario($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT 'Propietario:' || cl_nombre || ' - CI:' || cl_identificacion || ' - Nro. Contrato:' ||  coalesce(con_numero_contrato,'') ||' - Nro. Medidior:'|| coalesce(con_numero_medidor,''), del_cliente.cl_id FROM del_cliente left join jap_contrato on cl_id=con_propietario WHERE (#cmp_i'Propietario:' || cl_nombre || ' - CI:' || cl_identificacion || ' - Nro. Contrato:' ||  coalesce(con_numero_contrato,'') ||' - Nro. Medidior:'|| coalesce(con_numero_medidor,'')#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos) AND (con_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "')" ; 
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
   function SC_lookup_scp_tipo_amortizacion($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT dec_nombre, dec_id FROM v_fac_tipo_amortizacion WHERE (#lowerI##cmp_idec_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
       if ($condicao == "ii")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "LIKE #lowerI#'#arg_i" . $campo . "#arg_f%')", $nm_comando);
       }
       if ($condicao == "np")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "NOT LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", $nm_comando);
       }
       if ($condicao == "df")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "<> #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "gt")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "> #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "ge")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", ">= #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "lt")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "< #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
       }
       if ($condicao == "le")
       {
           $nm_comando = str_replace("LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')", "<= #lowerI#'#arg_i" . $campo . "#arg_f')", $nm_comando);
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
       $nmgp_saida_form = "form_fac_solicitud_convenio_pago_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_fac_solicitud_convenio_pago_mob_fim.php";
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
       form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['masterValue']);
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
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_operaciones_convenio_mob']['reg_start'] = "";
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_operaciones_convenio_mob']['total']);
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
       form_fac_solicitud_convenio_pago_mob_pack_ajax_response();
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
    function sc_ajax_javascript($sJsFunc, $aParam = array())
    {
        if ($this->NM_ajax_flag)
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = NM_charset_to_utf8($v);
            }
            $this->NM_ajax_info['ajaxJavascript'][] = array(NM_charset_to_utf8($sJsFunc), $aParam);
        }
        else
        {
            foreach ($aParam as $i => $v)
            {
                $aParam[$i] = '"' . str_replace('"', '\"', $v) . '"';
            }
            $this->NM_non_ajax_info['ajaxJavascript'][] = array($sJsFunc, $aParam);
        }
    } // sc_ajax_javascript
    function sc_field_readonly($sField, $sStatus, $iSeq = '')
    {
        if ('on' != $sStatus && 'off' != $sStatus)
        {
            return;
        }

        $sFieldDateTime = '';

        $sFlagVar        = 'bFlagRead_' . $sField;
        $this->$sFlagVar = 'on' == $sStatus;

        $this->nmgp_cmp_readonly[$sField]                = $sStatus;
        $this->NM_ajax_info['readOnly'][$sField . $iSeq] = $sStatus;
        if ('' != $sFieldDateTime)
        {
            $this->NM_ajax_info['readOnly'][$sFieldDateTime . $iSeq] = $sStatus;
        }
    } // sc_field_readonly
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "0":
                return array("sys_separator.sc-unique-btn-1", "sys_separator.sc-unique-btn-7", "sys_separator.sc-unique-btn-13", "sys_separator.sc-unique-btn-18", "sys_separator.sc-unique-btn-19", "sys_separator.sc-unique-btn-25", "sys_separator.sc-unique-btn-31", "sys_separator.sc-unique-btn-36");
                break;
            case "new":
                return array("sc_b_new_t.sc-unique-btn-2", "sc_b_new_t.sc-unique-btn-20");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-3", "sc_b_ins_t.sc-unique-btn-21");
                break;
            case "bcancelar":
                return array("sc_b_sai_t.sc-unique-btn-4", "sc_b_sai_t.sc-unique-btn-22");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5", "sc_b_upd_t.sc-unique-btn-23");
                break;
            case "delete":
                return array("sc_b_del_t.sc-unique-btn-6", "sc_b_del_t.sc-unique-btn-24");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-11", "sc_b_sai_t.sc-unique-btn-26", "sc_b_sai_t.sc-unique-btn-27", "sc_b_sai_t.sc-unique-btn-29", "sc_b_sai_t.sc-unique-btn-10", "sc_b_sai_t.sc-unique-btn-12", "sc_b_sai_t.sc-unique-btn-28", "sc_b_sai_t.sc-unique-btn-30");
                break;
            case "agregar":
                return array("sc_agregar_top.", "sc_agregar_top.", "sc_agregar_top.", "sc_agregar_top.");
                break;
            case "simular":
                return array("sc_simular_top.", "sc_simular_top.", "sc_simular_top.", "sc_simular_top.");
                break;
            case "procesar":
                return array("sc_procesar_top.", "sc_procesar_top.", "sc_procesar_top.", "sc_procesar_top.");
                break;
            case "imprimir":
                return array("sc_Imprimir_top.", "sc_Imprimir_top.", "sc_Imprimir_top.", "sc_Imprimir_top.");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-14", "sc_b_ini_b.sc-unique-btn-32");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-15", "sc_b_ret_b.sc-unique-btn-33");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-16", "sc_b_avc_b.sc-unique-btn-34");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-17", "sc_b_fim_b.sc-unique-btn-35");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['link_info']['compact_mode']) {
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
          <?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_solicitud_convenio'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_solicitud_convenio'] . ""; } ?>
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_convenio_pago_mob']['ordem_ord'] == " desc") {
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
            case "scp_secuencial_documento":
                return true;
            case "scp_id":
                return true;
            case "scp_monto":
                return true;
            case "scp_taza":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "scp_secuencial_documento":
                return 'desc';
            case "scp_propietario":
                return 'desc';
            case "scp_id":
                return 'desc';
            case "scp_plazo":
                return 'desc';
            case "scp_monto":
                return 'desc';
            case "scp_taza":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
