<?php
//
class form_jap_anular_contrato_mob_apl
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
   var $con_id;
   var $con_empresa;
   var $con_propietario;
   var $con_pais;
   var $con_pais_1;
   var $con_provincia;
   var $con_provincia_1;
   var $con_canton;
   var $con_canton_1;
   var $con_parroquia;
   var $con_parroquia_1;
   var $con_direccion_predio;
   var $con_toma_administrativa;
   var $con_toma_administrativa_1;
   var $con_toma_operativa;
   var $con_toma_operativa_1;
   var $con_tipo_servicio;
   var $con_tipo_servicio_1;
   var $con_condicion_contrato;
   var $con_condicion_contrato_1;
   var $con_numero_medidor;
   var $con_usuario;
   var $con_fecha;
   var $con_terminal;
   var $con_estado;
   var $con_motivo_anulacion;
   var $con_tipo_contrato;
   var $con_tipo_contrato_1;
   var $con_total_a_pagar;
   var $con_abono;
   var $con_plazo;
   var $con_fecha_instalacion;
   var $con_observaciones;
   var $con_usuario_instala;
   var $con_numero_contrato;
   var $con_maxima_lectura;
   var $con_lectura_actual;
   var $con_fecha_lectura;
   var $con_ruta;
   var $con_ruta_1;
   var $con_sino;
   var $con_orden_lecturas;
   var $con_numero_corte;
   var $con_comunidad;
   var $con_comunidad_1;
   var $con_sector;
   var $con_sector_1;
   var $con_numero_censo;
   var $con_direccion_propietario;
   var $con_cedula;
   var $con_celular;
   var $con_correo;
   var $con_nombre;
   var $con_telefono;
   var $con_saldo_pagar;
   var $con_valor_cuota;
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
          if (isset($this->NM_ajax_info['param']['con_canton']))
          {
              $this->con_canton = $this->NM_ajax_info['param']['con_canton'];
          }
          if (isset($this->NM_ajax_info['param']['con_cedula']))
          {
              $this->con_cedula = $this->NM_ajax_info['param']['con_cedula'];
          }
          if (isset($this->NM_ajax_info['param']['con_celular']))
          {
              $this->con_celular = $this->NM_ajax_info['param']['con_celular'];
          }
          if (isset($this->NM_ajax_info['param']['con_comunidad']))
          {
              $this->con_comunidad = $this->NM_ajax_info['param']['con_comunidad'];
          }
          if (isset($this->NM_ajax_info['param']['con_condicion_contrato']))
          {
              $this->con_condicion_contrato = $this->NM_ajax_info['param']['con_condicion_contrato'];
          }
          if (isset($this->NM_ajax_info['param']['con_correo']))
          {
              $this->con_correo = $this->NM_ajax_info['param']['con_correo'];
          }
          if (isset($this->NM_ajax_info['param']['con_direccion_predio']))
          {
              $this->con_direccion_predio = $this->NM_ajax_info['param']['con_direccion_predio'];
          }
          if (isset($this->NM_ajax_info['param']['con_direccion_propietario']))
          {
              $this->con_direccion_propietario = $this->NM_ajax_info['param']['con_direccion_propietario'];
          }
          if (isset($this->NM_ajax_info['param']['con_estado']))
          {
              $this->con_estado = $this->NM_ajax_info['param']['con_estado'];
          }
          if (isset($this->NM_ajax_info['param']['con_fecha']))
          {
              $this->con_fecha = $this->NM_ajax_info['param']['con_fecha'];
          }
          if (isset($this->NM_ajax_info['param']['con_fecha_instalacion']))
          {
              $this->con_fecha_instalacion = $this->NM_ajax_info['param']['con_fecha_instalacion'];
          }
          if (isset($this->NM_ajax_info['param']['con_fecha_lectura']))
          {
              $this->con_fecha_lectura = $this->NM_ajax_info['param']['con_fecha_lectura'];
          }
          if (isset($this->NM_ajax_info['param']['con_id']))
          {
              $this->con_id = $this->NM_ajax_info['param']['con_id'];
          }
          if (isset($this->NM_ajax_info['param']['con_lectura_actual']))
          {
              $this->con_lectura_actual = $this->NM_ajax_info['param']['con_lectura_actual'];
          }
          if (isset($this->NM_ajax_info['param']['con_maxima_lectura']))
          {
              $this->con_maxima_lectura = $this->NM_ajax_info['param']['con_maxima_lectura'];
          }
          if (isset($this->NM_ajax_info['param']['con_motivo_anulacion']))
          {
              $this->con_motivo_anulacion = $this->NM_ajax_info['param']['con_motivo_anulacion'];
          }
          if (isset($this->NM_ajax_info['param']['con_nombre']))
          {
              $this->con_nombre = $this->NM_ajax_info['param']['con_nombre'];
          }
          if (isset($this->NM_ajax_info['param']['con_numero_censo']))
          {
              $this->con_numero_censo = $this->NM_ajax_info['param']['con_numero_censo'];
          }
          if (isset($this->NM_ajax_info['param']['con_numero_contrato']))
          {
              $this->con_numero_contrato = $this->NM_ajax_info['param']['con_numero_contrato'];
          }
          if (isset($this->NM_ajax_info['param']['con_numero_corte']))
          {
              $this->con_numero_corte = $this->NM_ajax_info['param']['con_numero_corte'];
          }
          if (isset($this->NM_ajax_info['param']['con_numero_medidor']))
          {
              $this->con_numero_medidor = $this->NM_ajax_info['param']['con_numero_medidor'];
          }
          if (isset($this->NM_ajax_info['param']['con_observaciones']))
          {
              $this->con_observaciones = $this->NM_ajax_info['param']['con_observaciones'];
          }
          if (isset($this->NM_ajax_info['param']['con_orden_lecturas']))
          {
              $this->con_orden_lecturas = $this->NM_ajax_info['param']['con_orden_lecturas'];
          }
          if (isset($this->NM_ajax_info['param']['con_pais']))
          {
              $this->con_pais = $this->NM_ajax_info['param']['con_pais'];
          }
          if (isset($this->NM_ajax_info['param']['con_parroquia']))
          {
              $this->con_parroquia = $this->NM_ajax_info['param']['con_parroquia'];
          }
          if (isset($this->NM_ajax_info['param']['con_propietario']))
          {
              $this->con_propietario = $this->NM_ajax_info['param']['con_propietario'];
          }
          if (isset($this->NM_ajax_info['param']['con_provincia']))
          {
              $this->con_provincia = $this->NM_ajax_info['param']['con_provincia'];
          }
          if (isset($this->NM_ajax_info['param']['con_ruta']))
          {
              $this->con_ruta = $this->NM_ajax_info['param']['con_ruta'];
          }
          if (isset($this->NM_ajax_info['param']['con_sector']))
          {
              $this->con_sector = $this->NM_ajax_info['param']['con_sector'];
          }
          if (isset($this->NM_ajax_info['param']['con_sino']))
          {
              $this->con_sino = $this->NM_ajax_info['param']['con_sino'];
          }
          if (isset($this->NM_ajax_info['param']['con_telefono']))
          {
              $this->con_telefono = $this->NM_ajax_info['param']['con_telefono'];
          }
          if (isset($this->NM_ajax_info['param']['con_tipo_contrato']))
          {
              $this->con_tipo_contrato = $this->NM_ajax_info['param']['con_tipo_contrato'];
          }
          if (isset($this->NM_ajax_info['param']['con_tipo_servicio']))
          {
              $this->con_tipo_servicio = $this->NM_ajax_info['param']['con_tipo_servicio'];
          }
          if (isset($this->NM_ajax_info['param']['con_toma_administrativa']))
          {
              $this->con_toma_administrativa = $this->NM_ajax_info['param']['con_toma_administrativa'];
          }
          if (isset($this->NM_ajax_info['param']['con_toma_operativa']))
          {
              $this->con_toma_operativa = $this->NM_ajax_info['param']['con_toma_operativa'];
          }
          if (isset($this->NM_ajax_info['param']['con_usuario_instala']))
          {
              $this->con_usuario_instala = $this->NM_ajax_info['param']['con_usuario_instala'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
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
          $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['embutida_parms']);
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
                 nm_limpa_str_form_jap_anular_contrato_mob($cadapar[1]);
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
              $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['sc_redir_insert'] = $this->sc_redir_insert;
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
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_jap_anular_contrato_mob_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['initialize'];
          if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato']))
          {
              foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato'] as $I_conf => $Conf_opt)
              {
                  $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob'][$I_conf]  = $Conf_opt;
              }
          }
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_jap_anular_contrato_mob']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_jap_anular_contrato_mob']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_jap_anular_contrato_mob'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_jap_anular_contrato_mob']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_jap_anular_contrato_mob']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_jap_anular_contrato_mob') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_jap_anular_contrato_mob']['label'] = "" . $this->Ini->Nm_lang['lang_jap_contrato'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_jap_anular_contrato_mob")
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
      $this->nm_new_label['con_id'] = '' . $this->Ini->Nm_lang['lang_solicitud'] . '';
      $this->nm_new_label['con_propietario'] = '' . $this->Ini->Nm_lang['lang_propietario'] . '';
      $this->nm_new_label['con_pais'] = '' . $this->Ini->Nm_lang['lang_pais'] . '';
      $this->nm_new_label['con_provincia'] = '' . $this->Ini->Nm_lang['lang_provincia'] . '';
      $this->nm_new_label['con_canton'] = '' . $this->Ini->Nm_lang['lang_canton'] . '';
      $this->nm_new_label['con_parroquia'] = '' . $this->Ini->Nm_lang['lang_parroquia'] . '';
      $this->nm_new_label['con_direccion_predio'] = '' . $this->Ini->Nm_lang['lang_direccion'] . '';
      $this->nm_new_label['con_toma_administrativa'] = '' . $this->Ini->Nm_lang['lang_toma_administrativa'] . '';
      $this->nm_new_label['con_toma_operativa'] = '' . $this->Ini->Nm_lang['lang_toma_operativa'] . '';
      $this->nm_new_label['con_tipo_servicio'] = '' . $this->Ini->Nm_lang['lang_tipo_servicio'] . '';
      $this->nm_new_label['con_condicion_contrato'] = '' . $this->Ini->Nm_lang['lang_condicion_contrato'] . '';
      $this->nm_new_label['con_numero_medidor'] = '' . $this->Ini->Nm_lang['lang_numero_medidor'] . '';
      $this->nm_new_label['con_fecha'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['con_estado'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['con_motivo_anulacion'] = '' . $this->Ini->Nm_lang['lang_motivo_anulacion'] . '';
      $this->nm_new_label['con_tipo_contrato'] = '' . $this->Ini->Nm_lang['lang_tipo_contrato'] . '';
      $this->nm_new_label['con_fecha_instalacion'] = '' . $this->Ini->Nm_lang['lang_fecha_instalacion'] . '';
      $this->nm_new_label['con_observaciones'] = '' . $this->Ini->Nm_lang['lang_observacion'] . '';
      $this->nm_new_label['con_usuario_instala'] = '' . $this->Ini->Nm_lang['lang_usuario_instala'] . '';
      $this->nm_new_label['con_numero_contrato'] = '' . $this->Ini->Nm_lang['lang_contrato'] . '';
      $this->nm_new_label['con_maxima_lectura'] = '' . $this->Ini->Nm_lang['lang_lectura_maxima'] . '';
      $this->nm_new_label['con_lectura_actual'] = '' . $this->Ini->Nm_lang['lang_lectura_actual'] . '';
      $this->nm_new_label['con_fecha_lectura'] = '' . $this->Ini->Nm_lang['lang_fecha_ultima_lectura'] . '';
      $this->nm_new_label['con_ruta'] = '' . $this->Ini->Nm_lang['lang_ruta'] . '';
      $this->nm_new_label['con_orden_lecturas'] = '' . $this->Ini->Nm_lang['lang_orden_ingreso'] . '';
      $this->nm_new_label['con_numero_corte'] = '' . $this->Ini->Nm_lang['lang_nro_corte'] . '';
      $this->nm_new_label['con_comunidad'] = '' . $this->Ini->Nm_lang['lang_comunidad'] . '';
      $this->nm_new_label['con_sector'] = '' . $this->Ini->Nm_lang['lang_sector'] . '';
      $this->nm_new_label['con_numero_censo'] = '' . $this->Ini->Nm_lang['lang_numero_censo'] . '';
      $this->nm_new_label['con_direccion_propietario'] = '' . $this->Ini->Nm_lang['lang_direccion_propietario'] . '';
      $this->nm_new_label['con_cedula'] = '' . $this->Ini->Nm_lang['lang_cedula'] . '';
      $this->nm_new_label['con_celular'] = '' . $this->Ini->Nm_lang['lang_celular'] . '';
      $this->nm_new_label['con_correo'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['con_nombre'] = '' . $this->Ini->Nm_lang['lang_lot_nombre_completo'] . '';
      $this->nm_new_label['con_telefono'] = '' . $this->Ini->Nm_lang['lang_lot_telefono'] . '';

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


      $this->arr_buttons['anular']['hint']             = "";
      $this->arr_buttons['anular']['type']             = "button";
      $this->arr_buttons['anular']['value']            = "" . $this->Ini->Nm_lang['lang_anular_contrato'] . "";
      $this->arr_buttons['anular']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['anular']['display_position'] = "text_right";
      $this->arr_buttons['anular']['style']            = "cancel";
      $this->arr_buttons['anular']['image']            = "";
      $this->arr_buttons['anular']['has_fa']            = "true";
      $this->arr_buttons['anular']['fontawesomeicon']            = "fas fa-file-excel";


      $_SESSION['scriptcase']['error_icon']['form_jap_anular_contrato_mob']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_jap_anular_contrato_mob'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
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
      $this->nmgp_botoes['anular'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_jap_anular_contrato_mob']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_jap_anular_contrato_mob'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_jap_anular_contrato_mob'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form'];
          if (!isset($this->con_empresa)){$this->con_empresa = $this->nmgp_dados_form['con_empresa'];} 
          if (!isset($this->con_usuario)){$this->con_usuario = $this->nmgp_dados_form['con_usuario'];} 
          if (!isset($this->con_terminal)){$this->con_terminal = $this->nmgp_dados_form['con_terminal'];} 
          if (!isset($this->con_total_a_pagar)){$this->con_total_a_pagar = $this->nmgp_dados_form['con_total_a_pagar'];} 
          if (!isset($this->con_abono)){$this->con_abono = $this->nmgp_dados_form['con_abono'];} 
          if (!isset($this->con_plazo)){$this->con_plazo = $this->nmgp_dados_form['con_plazo'];} 
          if (!isset($this->con_saldo_pagar)){$this->con_saldo_pagar = $this->nmgp_dados_form['con_saldo_pagar'];} 
          if (!isset($this->con_valor_cuota)){$this->con_valor_cuota = $this->nmgp_dados_form['con_valor_cuota'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_jap_anular_contrato_mob", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_jap_anular_contrato/form_jap_anular_contrato_mob_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_jap_anular_contrato_mob_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_jap_anular_contrato_mob_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_jap_anular_contrato_mob_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_jap_anular_contrato/form_jap_anular_contrato_mob_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_jap_anular_contrato_mob_erro.class.php"); 
      }
      $this->Erro      = new form_jap_anular_contrato_mob_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao']))
         { 
             if ($this->con_id != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_jap_anular_contrato_mob']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['anular'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['anular'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['botoes']['anular'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form'];
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

            $out1_img_cache = $_SESSION['scriptcase']['form_jap_anular_contrato_mob']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_jap_anular_contrato_mob']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->con_id)) { $this->nm_limpa_alfa($this->con_id); }
      if (isset($this->con_propietario)) { $this->nm_limpa_alfa($this->con_propietario); }
      if (isset($this->con_pais)) { $this->nm_limpa_alfa($this->con_pais); }
      if (isset($this->con_provincia)) { $this->nm_limpa_alfa($this->con_provincia); }
      if (isset($this->con_canton)) { $this->nm_limpa_alfa($this->con_canton); }
      if (isset($this->con_parroquia)) { $this->nm_limpa_alfa($this->con_parroquia); }
      if (isset($this->con_direccion_predio)) { $this->nm_limpa_alfa($this->con_direccion_predio); }
      if (isset($this->con_toma_administrativa)) { $this->nm_limpa_alfa($this->con_toma_administrativa); }
      if (isset($this->con_toma_operativa)) { $this->nm_limpa_alfa($this->con_toma_operativa); }
      if (isset($this->con_tipo_servicio)) { $this->nm_limpa_alfa($this->con_tipo_servicio); }
      if (isset($this->con_condicion_contrato)) { $this->nm_limpa_alfa($this->con_condicion_contrato); }
      if (isset($this->con_numero_medidor)) { $this->nm_limpa_alfa($this->con_numero_medidor); }
      if (isset($this->con_fecha)) { $this->nm_limpa_alfa($this->con_fecha); }
      if (isset($this->con_estado)) { $this->nm_limpa_alfa($this->con_estado); }
      if (isset($this->con_motivo_anulacion)) { $this->nm_limpa_alfa($this->con_motivo_anulacion); }
      if (isset($this->con_tipo_contrato)) { $this->nm_limpa_alfa($this->con_tipo_contrato); }
      if (isset($this->con_observaciones)) { $this->nm_limpa_alfa($this->con_observaciones); }
      if (isset($this->con_usuario_instala)) { $this->nm_limpa_alfa($this->con_usuario_instala); }
      if (isset($this->con_numero_contrato)) { $this->nm_limpa_alfa($this->con_numero_contrato); }
      if (isset($this->con_maxima_lectura)) { $this->nm_limpa_alfa($this->con_maxima_lectura); }
      if (isset($this->con_lectura_actual)) { $this->nm_limpa_alfa($this->con_lectura_actual); }
      if (isset($this->con_ruta)) { $this->nm_limpa_alfa($this->con_ruta); }
      if (isset($this->con_sino)) { $this->nm_limpa_alfa($this->con_sino); }
      if (isset($this->con_orden_lecturas)) { $this->nm_limpa_alfa($this->con_orden_lecturas); }
      if (isset($this->con_numero_corte)) { $this->nm_limpa_alfa($this->con_numero_corte); }
      if (isset($this->con_comunidad)) { $this->nm_limpa_alfa($this->con_comunidad); }
      if (isset($this->con_sector)) { $this->nm_limpa_alfa($this->con_sector); }
      if (isset($this->con_numero_censo)) { $this->nm_limpa_alfa($this->con_numero_censo); }
      if (isset($nm_opc_lookup) && $nm_opc_lookup == "lookup")
      { 
          if ($GLOBALS['F'] == "con_estado")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->con_estado = $array_vars[0];
              $con_estado       = $this->con_estado;
              $this->con_estado       = $con_estado;
              $this->lookup_con_estado($conteudo);
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
          if ($GLOBALS['F'] == "con_usuario_instala")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->con_usuario_instala = $array_vars[0];
              $con_usuario_instala       = $this->con_usuario_instala;
              $this->con_usuario_instala       = $con_usuario_instala;
              $this->lookup_con_usuario_instala($conteudo);
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
          if ($nm_call_php == "anular")
          { 
              $this->sc_btn_anular();
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
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- con_fecha
      $this->field_config['con_fecha']                 = array();
      $this->field_config['con_fecha']['date_format']  = "aaaa/mm/dd";
      $this->field_config['con_fecha']['date_sep']     = "/";
      $this->field_config['con_fecha']['date_display'] = "aaaa/mm/dd";
      $this->new_date_format('DT', 'con_fecha');
      //-- con_id
      $this->field_config['con_id']               = array();
      $this->field_config['con_id']['symbol_grp'] = '';
      $this->field_config['con_id']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_id']['symbol_dec'] = '';
      $this->field_config['con_id']['symbol_neg'] = '-';
      $this->field_config['con_id']['format_neg'] = '2';
      //-- con_propietario
      $this->field_config['con_propietario']               = array();
      $this->field_config['con_propietario']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['con_propietario']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_propietario']['symbol_dec'] = '';
      $this->field_config['con_propietario']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['con_propietario']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- con_orden_lecturas
      $this->field_config['con_orden_lecturas']               = array();
      $this->field_config['con_orden_lecturas']['symbol_grp'] = '';
      $this->field_config['con_orden_lecturas']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_orden_lecturas']['symbol_dec'] = '';
      $this->field_config['con_orden_lecturas']['symbol_neg'] = '-';
      $this->field_config['con_orden_lecturas']['format_neg'] = '2';
      //-- con_numero_corte
      $this->field_config['con_numero_corte']               = array();
      $this->field_config['con_numero_corte']['symbol_grp'] = '';
      $this->field_config['con_numero_corte']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_numero_corte']['symbol_dec'] = '';
      $this->field_config['con_numero_corte']['symbol_neg'] = '-';
      $this->field_config['con_numero_corte']['format_neg'] = '2';
      //-- con_fecha_instalacion
      $this->field_config['con_fecha_instalacion']                 = array();
      $this->field_config['con_fecha_instalacion']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['con_fecha_instalacion']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['con_fecha_instalacion']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'con_fecha_instalacion');
      //-- con_maxima_lectura
      $this->field_config['con_maxima_lectura']               = array();
      $this->field_config['con_maxima_lectura']['symbol_grp'] = '';
      $this->field_config['con_maxima_lectura']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_maxima_lectura']['symbol_dec'] = '';
      $this->field_config['con_maxima_lectura']['symbol_neg'] = '-';
      $this->field_config['con_maxima_lectura']['format_neg'] = '2';
      //-- con_lectura_actual
      $this->field_config['con_lectura_actual']               = array();
      $this->field_config['con_lectura_actual']['symbol_grp'] = '';
      $this->field_config['con_lectura_actual']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_lectura_actual']['symbol_dec'] = '';
      $this->field_config['con_lectura_actual']['symbol_neg'] = '-';
      $this->field_config['con_lectura_actual']['format_neg'] = '2';
      //-- con_fecha_lectura
      $this->field_config['con_fecha_lectura']                 = array();
      $this->field_config['con_fecha_lectura']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['con_fecha_lectura']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['con_fecha_lectura']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'con_fecha_lectura');
      //-- con_total_a_pagar
      $this->field_config['con_total_a_pagar']               = array();
      $this->field_config['con_total_a_pagar']['symbol_grp'] = '';
      $this->field_config['con_total_a_pagar']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_total_a_pagar']['symbol_dec'] = '.';
      $this->field_config['con_total_a_pagar']['symbol_neg'] = '-';
      $this->field_config['con_total_a_pagar']['format_neg'] = '2';
      //-- con_abono
      $this->field_config['con_abono']               = array();
      $this->field_config['con_abono']['symbol_grp'] = '';
      $this->field_config['con_abono']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_abono']['symbol_dec'] = '.';
      $this->field_config['con_abono']['symbol_neg'] = '-';
      $this->field_config['con_abono']['format_neg'] = '2';
      //-- con_plazo
      $this->field_config['con_plazo']               = array();
      $this->field_config['con_plazo']['symbol_grp'] = '';
      $this->field_config['con_plazo']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_plazo']['symbol_dec'] = '';
      $this->field_config['con_plazo']['symbol_neg'] = '-';
      $this->field_config['con_plazo']['format_neg'] = '2';
      //-- con_saldo_pagar
      $this->field_config['con_saldo_pagar']               = array();
      $this->field_config['con_saldo_pagar']['symbol_grp'] = '';
      $this->field_config['con_saldo_pagar']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_saldo_pagar']['symbol_dec'] = '.';
      $this->field_config['con_saldo_pagar']['symbol_neg'] = '-';
      $this->field_config['con_saldo_pagar']['format_neg'] = '2';
      //-- con_valor_cuota
      $this->field_config['con_valor_cuota']               = array();
      $this->field_config['con_valor_cuota']['symbol_grp'] = '';
      $this->field_config['con_valor_cuota']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['con_valor_cuota']['symbol_dec'] = '.';
      $this->field_config['con_valor_cuota']['symbol_neg'] = '-';
      $this->field_config['con_valor_cuota']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Gera_log_access'] = false;
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
          if ('validate_con_motivo_anulacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_motivo_anulacion');
          }
          if ('validate_con_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_fecha');
          }
          if ('validate_con_sino' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_sino');
          }
          if ('validate_con_id' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_id');
          }
          if ('validate_con_numero_contrato' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_numero_contrato');
          }
          if ('validate_con_tipo_contrato' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_tipo_contrato');
          }
          if ('validate_con_propietario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_propietario');
          }
          if ('validate_con_nombre' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_nombre');
          }
          if ('validate_con_cedula' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_cedula');
          }
          if ('validate_con_telefono' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_telefono');
          }
          if ('validate_con_celular' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_celular');
          }
          if ('validate_con_direccion_propietario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_direccion_propietario');
          }
          if ('validate_con_correo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_correo');
          }
          if ('validate_con_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_estado');
          }
          if ('validate_con_pais' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_pais');
          }
          if ('validate_con_provincia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_provincia');
          }
          if ('validate_con_canton' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_canton');
          }
          if ('validate_con_parroquia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_parroquia');
          }
          if ('validate_con_comunidad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_comunidad');
          }
          if ('validate_con_sector' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_sector');
          }
          if ('validate_con_numero_censo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_numero_censo');
          }
          if ('validate_con_direccion_predio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_direccion_predio');
          }
          if ('validate_con_toma_administrativa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_toma_administrativa');
          }
          if ('validate_con_toma_operativa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_toma_operativa');
          }
          if ('validate_con_condicion_contrato' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_condicion_contrato');
          }
          if ('validate_con_tipo_servicio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_tipo_servicio');
          }
          if ('validate_con_ruta' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_ruta');
          }
          if ('validate_con_orden_lecturas' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_orden_lecturas');
          }
          if ('validate_con_numero_corte' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_numero_corte');
          }
          if ('validate_con_fecha_instalacion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_fecha_instalacion');
          }
          if ('validate_con_numero_medidor' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_numero_medidor');
          }
          if ('validate_con_maxima_lectura' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_maxima_lectura');
          }
          if ('validate_con_lectura_actual' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_lectura_actual');
          }
          if ('validate_con_fecha_lectura' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_fecha_lectura');
          }
          if ('validate_con_observaciones' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_observaciones');
          }
          if ('validate_con_usuario_instala' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'con_usuario_instala');
          }
          form_jap_anular_contrato_mob_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_con_propietario_onchange' == $this->NM_ajax_opcao)
          {
              $this->con_propietario_onChange();
          }
          form_jap_anular_contrato_mob_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inline_form_seq'] = $this->sc_seq_row;
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
              form_jap_anular_contrato_mob_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_jap_anular_contrato_mob_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['recarga'] = $this->nmgp_opcao;
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_jap_anular_contrato_mob_pack_ajax_response();
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
          form_jap_anular_contrato_mob_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_jap_anular_contrato_mob.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_jap_contrato'] . "") ?></TITLE>
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
<form name="Fdown" method="get" action="form_jap_anular_contrato_mob_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_jap_anular_contrato_mob"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<form name="F0" method=post action="form_jap_anular_contrato_mob.php" target="_self" style="display: none"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_jap_anular_contrato_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_jap_anular_contrato_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_jap_anular_contrato_mob', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_jap_anular_contrato_mob_pack_ajax_response();
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
   function lookup_con_estado(&$conteudo)
   {
      global  $con_estado;
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
FROM v_jar_estado_contrato
WHERE dec_id = '$this->con_estado' 
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
//
//--------------------------------------------------------------------------------------
   function lookup_con_usuario_instala(&$conteudo)
   {
      global  $con_usuario_instala;
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
      $nm_comando = "SELECT usu_nombre 
FROM del_usuario 
WHERE usu_usuario = '$this->con_usuario_instala' 
ORDER BY usu_nombre"; 
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
   function sc_btn_anular() 
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
include_once("form_jap_anular_contrato_mob_sajax_js.php");
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->con_motivo_anulacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_motivo_anulacion']))
          {
              $varloc_btn_php['con_motivo_anulacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_motivo_anulacion'];
          }
          if (!isset($this->con_motivo_anulacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_motivo_anulacion']))
          {
              $varloc_btn_php['con_motivo_anulacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_motivo_anulacion'];
          }
          if (!isset($this->con_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id']))
          {
              $varloc_btn_php['con_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id'];
          }
          if (!isset($this->con_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id']))
          {
              $varloc_btn_php['con_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id'];
          }
          if (!isset($this->con_nombre) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_nombre']))
          {
              $varloc_btn_php['con_nombre'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_nombre'];
          }
          if (!isset($this->con_numero_contrato) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_numero_contrato']))
          {
              $varloc_btn_php['con_numero_contrato'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_numero_contrato'];
          }
          if (!isset($this->con_direccion_predio) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_direccion_predio']))
          {
              $varloc_btn_php['con_direccion_predio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_direccion_predio'];
          }
          if (!isset($this->con_numero_medidor) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_numero_medidor']))
          {
              $varloc_btn_php['con_numero_medidor'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_numero_medidor'];
          }
          if (!isset($this->con_lectura_actual) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_lectura_actual']))
          {
              $varloc_btn_php['con_lectura_actual'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_lectura_actual'];
          }
          if (!isset($this->con_motivo_anulacion) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_motivo_anulacion']))
          {
              $varloc_btn_php['con_motivo_anulacion'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_motivo_anulacion'];
          }
          if (!isset($this->con_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id']))
          {
              $varloc_btn_php['con_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id'];
          }
          if (!isset($this->con_id) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id']))
          {
              $varloc_btn_php['con_id'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form']['con_id'];
          }
      }
      $nm_f_saida = "form_jap_anular_contrato_mob.php";
      nm_limpa_data($this->con_fecha, $this->field_config['con_fecha']['date_sep']) ; 
      nm_limpa_numero($this->con_id, $this->field_config['con_id']['symbol_grp']) ; 
      nm_limpa_numero($this->con_propietario, $this->field_config['con_propietario']['symbol_grp']) ; 
      nm_limpa_numero($this->con_orden_lecturas, $this->field_config['con_orden_lecturas']['symbol_grp']) ; 
      nm_limpa_numero($this->con_numero_corte, $this->field_config['con_numero_corte']['symbol_grp']) ; 
      nm_limpa_data($this->con_fecha_instalacion, $this->field_config['con_fecha_instalacion']['date_sep']) ; 
      nm_limpa_numero($this->con_maxima_lectura, $this->field_config['con_maxima_lectura']['symbol_grp']) ; 
      nm_limpa_numero($this->con_lectura_actual, $this->field_config['con_lectura_actual']['symbol_grp']) ; 
      nm_limpa_data($this->con_fecha_lectura, $this->field_config['con_fecha_lectura']['date_sep']) ; 
      $this->nm_converte_datas();
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
if (!isset($this->sc_temp_Igtech_SesionLogin)) {$this->sc_temp_Igtech_SesionLogin = (isset($_SESSION['Igtech_SesionLogin'])) ? $_SESSION['Igtech_SesionLogin'] : "";}
  if($this->con_motivo_anulacion <>''){
	
	$update_sql = "UPDATE jap_contrato SET
	con_motivo_anulacion='".$this->con_motivo_anulacion ."',
	 con_estado='N'
	WHERE
	con_id=".$this->con_id ;

	
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
                form_jap_anular_contrato_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
	
	$select_sql="SELECT 
					coalesce(ts_descripcion,''),
					coalesce(dec_nombre,''),
					coalesce(rut_nombre,'')
				FROM jap_contrato
				INNER JOIN jap_tipo_servicio ON con_tipo_servicio=ts_id
				INNER JOIN v_jar_estado_contrato ON con_estado=dec_id
				INNER JOIN jap_rutas_medicion ON con_ruta=rut_id
				where con_id=".$this->con_id  ;
	 
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


	if(isset($this->dataset[0][0])){
		$w_data="PROPIETARIO:".$this->con_nombre ."<br>"
			." - NRO. CONTRATO:".$this->con_numero_contrato ."<br>"
			." - DIRECCION:".$this->con_direccion_predio ."<br>"
			." - NRO. MEDIDOR:".$this->con_numero_medidor ."<br>"
			." - L. ACTUAL:".$this->con_lectura_actual ."<br>"
			." - TIPO SERVICIO:".$this->dataset[0][0]."<br>"
			." - RUTA:".$this->dataset[0][2]."<br>"
			." - ESTADO:".$this->dataset[0][1]."<br>"
			." - MOTIVO:".$this->con_motivo_anulacion ."<br>";
	}else{

	}



	$insert_sql="INSERT INTO jap_log_contrato( 
						lc_fecha, 
						lc_contrato, 
						lc_accion, 
						lc_usuario, 
						lc_datos) 
				 VALUES( getdate(), 
						".$this->con_id .", 
						'UPDATE', 
						'".$this->sc_temp_Igtech_SesionLogin."', 
						'".$w_data."');";
	
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
                form_jap_anular_contrato_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
	
	$delete_sql="DELETE FROM jap_ruta_contrato where rc_contrato=".$this->con_id ;
	
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
                form_jap_anular_contrato_mob_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
	
	 if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($this->Ini->path_link . "" . SC_dir_app_name('grid_anular_contrato_ap') . "/", $this->nm_location, "_self?#?" . NM_encode_input("") . "?@?","_self", '', 440, 630);
 };
}else{
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= 'Falta motivo de la anulación';
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_jap_anular_contrato_mob';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_jap_anular_contrato_mob';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = 'Falta motivo de la anulación';
 }
;
	if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
    if ($this->NM_ajax_flag)
    {
        $this->NM_ajax_info['redirExit']['action'] = "form_jap_anular_contrato_mob_fim.php?script_case_init=" . $this->form_encode_input($this->Ini->sc_page);
        $this->NM_ajax_info['redirExit']['metodo'] = 'location';
        $this->NM_ajax_info['redirExit']['target'] = "_self";
        $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_jap_anular_contrato') . "/";
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan'])
        {
            $_SESSION['scriptcase']['sc_outra_jan'] = "form_jap_anular_contrato_mob";
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan'] = false;
        }
        $_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
        form_jap_anular_contrato_mob_pack_ajax_response();
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<head>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
<?php
 if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
 {
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
 }
?>
</head>
<body>
<?php
 $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page] = $this->Ini->path_link . "" . SC_dir_app_name('form_jap_anular_contrato') . "/";
 if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan'])
 {
     $_SESSION['scriptcase']['sc_outra_jan'] = "form_jap_anular_contrato_mob";
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_outra_jan'] = false;
 }
?>
<TABLE border="0" cellspacing="1" cellpadding="2" bgcolor="#406080" bordercolor="#406080" align="center">
 <TR bgcolor="#FF0000">
  <TD  align="left"><FONT face="Verdana, Arial, sans-serif" size="2" color="#FFFFFF"><B><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></B></FONT></TD>
 </TR>
 <TR bgcolor="#E4E8F0">
   <TD  align="center"><FONT face="Tahoma, Arial, sans-serif" size="2" color="#404040"><?php echo $this->Campos_Mens_erro ?></FONT></TD>
 </TR>
</TABLE>
<table align="center"><tr><td>
  <form name="Fexit" method=post
        action="form_jap_anular_contrato_mob_fim.php"
        target="_self">
    <input type=hidden name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page) ?>">
    <input type=submit value="OK">
  </form>
</td></tr></table>
</body>
</html>
<?php
   exit;
}
}
if (isset($this->sc_temp_Igtech_SesionLogin)) { $_SESSION['Igtech_SesionLogin'] = $this->sc_temp_Igtech_SesionLogin;}
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off'; 
       $this->SC_exit_anular(); 
   }
   function SC_exit_anular() 
   {
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="con_id" value="<?php echo $this->form_encode_input($this->con_id) ?>"/>
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
           case 'con_motivo_anulacion':
               return "" . $this->Ini->Nm_lang['lang_motivo_anulacion'] . "";
               break;
           case 'con_fecha':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'con_sino':
               return "Con Sino";
               break;
           case 'con_id':
               return "" . $this->Ini->Nm_lang['lang_solicitud'] . "";
               break;
           case 'con_numero_contrato':
               return "" . $this->Ini->Nm_lang['lang_contrato'] . "";
               break;
           case 'con_tipo_contrato':
               return "" . $this->Ini->Nm_lang['lang_tipo_contrato'] . "";
               break;
           case 'con_propietario':
               return "" . $this->Ini->Nm_lang['lang_propietario'] . "";
               break;
           case 'con_nombre':
               return "" . $this->Ini->Nm_lang['lang_lot_nombre_completo'] . "";
               break;
           case 'con_cedula':
               return "" . $this->Ini->Nm_lang['lang_cedula'] . "";
               break;
           case 'con_telefono':
               return "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
               break;
           case 'con_celular':
               return "" . $this->Ini->Nm_lang['lang_celular'] . "";
               break;
           case 'con_direccion_propietario':
               return "" . $this->Ini->Nm_lang['lang_direccion_propietario'] . "";
               break;
           case 'con_correo':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'con_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'con_pais':
               return "" . $this->Ini->Nm_lang['lang_pais'] . "";
               break;
           case 'con_provincia':
               return "" . $this->Ini->Nm_lang['lang_provincia'] . "";
               break;
           case 'con_canton':
               return "" . $this->Ini->Nm_lang['lang_canton'] . "";
               break;
           case 'con_parroquia':
               return "" . $this->Ini->Nm_lang['lang_parroquia'] . "";
               break;
           case 'con_comunidad':
               return "" . $this->Ini->Nm_lang['lang_comunidad'] . "";
               break;
           case 'con_sector':
               return "" . $this->Ini->Nm_lang['lang_sector'] . "";
               break;
           case 'con_numero_censo':
               return "" . $this->Ini->Nm_lang['lang_numero_censo'] . "";
               break;
           case 'con_direccion_predio':
               return "" . $this->Ini->Nm_lang['lang_direccion'] . "";
               break;
           case 'con_toma_administrativa':
               return "" . $this->Ini->Nm_lang['lang_toma_administrativa'] . "";
               break;
           case 'con_toma_operativa':
               return "" . $this->Ini->Nm_lang['lang_toma_operativa'] . "";
               break;
           case 'con_condicion_contrato':
               return "" . $this->Ini->Nm_lang['lang_condicion_contrato'] . "";
               break;
           case 'con_tipo_servicio':
               return "" . $this->Ini->Nm_lang['lang_tipo_servicio'] . "";
               break;
           case 'con_ruta':
               return "" . $this->Ini->Nm_lang['lang_ruta'] . "";
               break;
           case 'con_orden_lecturas':
               return "" . $this->Ini->Nm_lang['lang_orden_ingreso'] . "";
               break;
           case 'con_numero_corte':
               return "" . $this->Ini->Nm_lang['lang_nro_corte'] . "";
               break;
           case 'con_fecha_instalacion':
               return "" . $this->Ini->Nm_lang['lang_fecha_instalacion'] . "";
               break;
           case 'con_numero_medidor':
               return "" . $this->Ini->Nm_lang['lang_numero_medidor'] . "";
               break;
           case 'con_maxima_lectura':
               return "" . $this->Ini->Nm_lang['lang_lectura_maxima'] . "";
               break;
           case 'con_lectura_actual':
               return "" . $this->Ini->Nm_lang['lang_lectura_actual'] . "";
               break;
           case 'con_fecha_lectura':
               return "" . $this->Ini->Nm_lang['lang_fecha_ultima_lectura'] . "";
               break;
           case 'con_observaciones':
               return "" . $this->Ini->Nm_lang['lang_observacion'] . "";
               break;
           case 'con_usuario_instala':
               return "" . $this->Ini->Nm_lang['lang_usuario_instala'] . "";
               break;
           case 'con_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'con_usuario':
               return "" . $this->Ini->Nm_lang['lang_usuario'] . "";
               break;
           case 'con_terminal':
               return "" . $this->Ini->Nm_lang['lang_terminal'] . "";
               break;
           case 'con_total_a_pagar':
               return "" . $this->Ini->Nm_lang['lang_total_pagar'] . "";
               break;
           case 'con_abono':
               return "" . $this->Ini->Nm_lang['lang_abono'] . "";
               break;
           case 'con_plazo':
               return "" . $this->Ini->Nm_lang['lang_plazo'] . "";
               break;
           case 'con_saldo_pagar':
               return "" . $this->Ini->Nm_lang['lang_saldo_pagar'] . "";
               break;
           case 'con_valor_cuota':
               return "" . $this->Ini->Nm_lang['lang_cuotas_de'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_jap_anular_contrato_mob']) || !is_array($this->NM_ajax_info['errList']['geral_form_jap_anular_contrato_mob']))
              {
                  $this->NM_ajax_info['errList']['geral_form_jap_anular_contrato_mob'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_jap_anular_contrato_mob'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'con_motivo_anulacion' == $filtro)) || (is_array($filtro) && in_array('con_motivo_anulacion', $filtro)))
        $this->ValidateField_con_motivo_anulacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_motivo_anulacion";

      if ((!is_array($filtro) && ('' == $filtro || 'con_fecha' == $filtro)) || (is_array($filtro) && in_array('con_fecha', $filtro)))
        $this->ValidateField_con_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_fecha";

      if ((!is_array($filtro) && ('' == $filtro || 'con_sino' == $filtro)) || (is_array($filtro) && in_array('con_sino', $filtro)))
        $this->ValidateField_con_sino($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_sino";

      if ((!is_array($filtro) && ('' == $filtro || 'con_id' == $filtro)) || (is_array($filtro) && in_array('con_id', $filtro)))
        $this->ValidateField_con_id($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_id";

      if ((!is_array($filtro) && ('' == $filtro || 'con_numero_contrato' == $filtro)) || (is_array($filtro) && in_array('con_numero_contrato', $filtro)))
        $this->ValidateField_con_numero_contrato($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_numero_contrato";

      if ((!is_array($filtro) && ('' == $filtro || 'con_tipo_contrato' == $filtro)) || (is_array($filtro) && in_array('con_tipo_contrato', $filtro)))
        $this->ValidateField_con_tipo_contrato($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_tipo_contrato";

      if ((!is_array($filtro) && ('' == $filtro || 'con_propietario' == $filtro)) || (is_array($filtro) && in_array('con_propietario', $filtro)))
        $this->ValidateField_con_propietario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_propietario";

      if ((!is_array($filtro) && ('' == $filtro || 'con_nombre' == $filtro)) || (is_array($filtro) && in_array('con_nombre', $filtro)))
        $this->ValidateField_con_nombre($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_nombre";

      if ((!is_array($filtro) && ('' == $filtro || 'con_cedula' == $filtro)) || (is_array($filtro) && in_array('con_cedula', $filtro)))
        $this->ValidateField_con_cedula($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_cedula";

      if ((!is_array($filtro) && ('' == $filtro || 'con_telefono' == $filtro)) || (is_array($filtro) && in_array('con_telefono', $filtro)))
        $this->ValidateField_con_telefono($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_telefono";

      if ((!is_array($filtro) && ('' == $filtro || 'con_celular' == $filtro)) || (is_array($filtro) && in_array('con_celular', $filtro)))
        $this->ValidateField_con_celular($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_celular";

      if ((!is_array($filtro) && ('' == $filtro || 'con_direccion_propietario' == $filtro)) || (is_array($filtro) && in_array('con_direccion_propietario', $filtro)))
        $this->ValidateField_con_direccion_propietario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_direccion_propietario";

      if ((!is_array($filtro) && ('' == $filtro || 'con_correo' == $filtro)) || (is_array($filtro) && in_array('con_correo', $filtro)))
        $this->ValidateField_con_correo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_correo";

      if ((!is_array($filtro) && ('' == $filtro || 'con_estado' == $filtro)) || (is_array($filtro) && in_array('con_estado', $filtro)))
        $this->ValidateField_con_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_estado";

      if ((!is_array($filtro) && ('' == $filtro || 'con_pais' == $filtro)) || (is_array($filtro) && in_array('con_pais', $filtro)))
        $this->ValidateField_con_pais($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_pais";

      if ((!is_array($filtro) && ('' == $filtro || 'con_provincia' == $filtro)) || (is_array($filtro) && in_array('con_provincia', $filtro)))
        $this->ValidateField_con_provincia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_provincia";

      if ((!is_array($filtro) && ('' == $filtro || 'con_canton' == $filtro)) || (is_array($filtro) && in_array('con_canton', $filtro)))
        $this->ValidateField_con_canton($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_canton";

      if ((!is_array($filtro) && ('' == $filtro || 'con_parroquia' == $filtro)) || (is_array($filtro) && in_array('con_parroquia', $filtro)))
        $this->ValidateField_con_parroquia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_parroquia";

      if ((!is_array($filtro) && ('' == $filtro || 'con_comunidad' == $filtro)) || (is_array($filtro) && in_array('con_comunidad', $filtro)))
        $this->ValidateField_con_comunidad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_comunidad";

      if ((!is_array($filtro) && ('' == $filtro || 'con_sector' == $filtro)) || (is_array($filtro) && in_array('con_sector', $filtro)))
        $this->ValidateField_con_sector($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_sector";

      if ((!is_array($filtro) && ('' == $filtro || 'con_numero_censo' == $filtro)) || (is_array($filtro) && in_array('con_numero_censo', $filtro)))
        $this->ValidateField_con_numero_censo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_numero_censo";

      if ((!is_array($filtro) && ('' == $filtro || 'con_direccion_predio' == $filtro)) || (is_array($filtro) && in_array('con_direccion_predio', $filtro)))
        $this->ValidateField_con_direccion_predio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_direccion_predio";

      if ((!is_array($filtro) && ('' == $filtro || 'con_toma_administrativa' == $filtro)) || (is_array($filtro) && in_array('con_toma_administrativa', $filtro)))
        $this->ValidateField_con_toma_administrativa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_toma_administrativa";

      if ((!is_array($filtro) && ('' == $filtro || 'con_toma_operativa' == $filtro)) || (is_array($filtro) && in_array('con_toma_operativa', $filtro)))
        $this->ValidateField_con_toma_operativa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_toma_operativa";

      if ((!is_array($filtro) && ('' == $filtro || 'con_condicion_contrato' == $filtro)) || (is_array($filtro) && in_array('con_condicion_contrato', $filtro)))
        $this->ValidateField_con_condicion_contrato($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_condicion_contrato";

      if ((!is_array($filtro) && ('' == $filtro || 'con_tipo_servicio' == $filtro)) || (is_array($filtro) && in_array('con_tipo_servicio', $filtro)))
        $this->ValidateField_con_tipo_servicio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_tipo_servicio";

      if ((!is_array($filtro) && ('' == $filtro || 'con_ruta' == $filtro)) || (is_array($filtro) && in_array('con_ruta', $filtro)))
        $this->ValidateField_con_ruta($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_ruta";

      if ((!is_array($filtro) && ('' == $filtro || 'con_orden_lecturas' == $filtro)) || (is_array($filtro) && in_array('con_orden_lecturas', $filtro)))
        $this->ValidateField_con_orden_lecturas($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_orden_lecturas";

      if ((!is_array($filtro) && ('' == $filtro || 'con_numero_corte' == $filtro)) || (is_array($filtro) && in_array('con_numero_corte', $filtro)))
        $this->ValidateField_con_numero_corte($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_numero_corte";

      if ((!is_array($filtro) && ('' == $filtro || 'con_fecha_instalacion' == $filtro)) || (is_array($filtro) && in_array('con_fecha_instalacion', $filtro)))
        $this->ValidateField_con_fecha_instalacion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_fecha_instalacion";

      if ((!is_array($filtro) && ('' == $filtro || 'con_numero_medidor' == $filtro)) || (is_array($filtro) && in_array('con_numero_medidor', $filtro)))
        $this->ValidateField_con_numero_medidor($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_numero_medidor";

      if ((!is_array($filtro) && ('' == $filtro || 'con_maxima_lectura' == $filtro)) || (is_array($filtro) && in_array('con_maxima_lectura', $filtro)))
        $this->ValidateField_con_maxima_lectura($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_maxima_lectura";

      if ((!is_array($filtro) && ('' == $filtro || 'con_lectura_actual' == $filtro)) || (is_array($filtro) && in_array('con_lectura_actual', $filtro)))
        $this->ValidateField_con_lectura_actual($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_lectura_actual";

      if ((!is_array($filtro) && ('' == $filtro || 'con_fecha_lectura' == $filtro)) || (is_array($filtro) && in_array('con_fecha_lectura', $filtro)))
        $this->ValidateField_con_fecha_lectura($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_fecha_lectura";

      if ((!is_array($filtro) && ('' == $filtro || 'con_observaciones' == $filtro)) || (is_array($filtro) && in_array('con_observaciones', $filtro)))
        $this->ValidateField_con_observaciones($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_observaciones";

      if ((!is_array($filtro) && ('' == $filtro || 'con_usuario_instala' == $filtro)) || (is_array($filtro) && in_array('con_usuario_instala', $filtro)))
        $this->ValidateField_con_usuario_instala($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "con_usuario_instala";

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

    function ValidateField_con_motivo_anulacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_motivo_anulacion'])) {
          return;
      }
      $this->con_motivo_anulacion = sc_strtoupper($this->con_motivo_anulacion); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_motivo_anulacion) > 32767) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_motivo_anulacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_motivo_anulacion']))
              {
                  $Campos_Erros['con_motivo_anulacion'] = array();
              }
              $Campos_Erros['con_motivo_anulacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_motivo_anulacion']) || !is_array($this->NM_ajax_info['errList']['con_motivo_anulacion']))
              {
                  $this->NM_ajax_info['errList']['con_motivo_anulacion'] = array();
              }
              $this->NM_ajax_info['errList']['con_motivo_anulacion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_motivo_anulacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_motivo_anulacion

    function ValidateField_con_fecha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->con_fecha, $this->field_config['con_fecha']['date_sep']) ; 
      if (isset($this->Field_no_validate['con_fecha'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['con_fecha']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['con_fecha']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['con_fecha']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['con_fecha']['date_sep']) ; 
          if (trim($this->con_fecha) != "")  
          { 
              if ($teste_validade->Data($this->con_fecha, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['con_fecha']))
                  {
                      $Campos_Erros['con_fecha'] = array();
                  }
                  $Campos_Erros['con_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_fecha']) || !is_array($this->NM_ajax_info['errList']['con_fecha']))
                  {
                      $this->NM_ajax_info['errList']['con_fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['con_fecha']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_fecha';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_fecha

    function ValidateField_con_sino(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_sino'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_sino) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "Con Sino " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_sino']))
              {
                  $Campos_Erros['con_sino'] = array();
              }
              $Campos_Erros['con_sino'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_sino']) || !is_array($this->NM_ajax_info['errList']['con_sino']))
              {
                  $this->NM_ajax_info['errList']['con_sino'] = array();
              }
              $this->NM_ajax_info['errList']['con_sino'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_sino';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_sino

    function ValidateField_con_id(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_id'])) {
          nm_limpa_numero($this->con_id, $this->field_config['con_id']['symbol_grp']) ; 
          return;
      }
      if ($this->con_id === "" || is_null($this->con_id))  
      { 
          $this->con_id = 0;
      } 
      nm_limpa_numero($this->con_id, $this->field_config['con_id']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->con_id != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->con_id) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_solicitud'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['con_id']))
                  {
                      $Campos_Erros['con_id'] = array();
                  }
                  $Campos_Erros['con_id'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['con_id']) || !is_array($this->NM_ajax_info['errList']['con_id']))
                  {
                      $this->NM_ajax_info['errList']['con_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_id'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->con_id, 4, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_solicitud'] . "; " ; 
                  if (!isset($Campos_Erros['con_id']))
                  {
                      $Campos_Erros['con_id'] = array();
                  }
                  $Campos_Erros['con_id'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_id']) || !is_array($this->NM_ajax_info['errList']['con_id']))
                  {
                      $this->NM_ajax_info['errList']['con_id'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_id'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_id';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_id

    function ValidateField_con_numero_contrato(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_numero_contrato'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_numero_contrato) > 255) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contrato'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_numero_contrato']))
              {
                  $Campos_Erros['con_numero_contrato'] = array();
              }
              $Campos_Erros['con_numero_contrato'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_numero_contrato']) || !is_array($this->NM_ajax_info['errList']['con_numero_contrato']))
              {
                  $this->NM_ajax_info['errList']['con_numero_contrato'] = array();
              }
              $this->NM_ajax_info['errList']['con_numero_contrato'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 255 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->con_numero_contrato ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->con_numero_contrato, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contrato'] . " " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['con_numero_contrato']))
              {
                  $Campos_Erros['con_numero_contrato'] = array();
              }
              $Campos_Erros['con_numero_contrato'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['con_numero_contrato']) || !is_array($this->NM_ajax_info['errList']['con_numero_contrato']))
              {
                  $this->NM_ajax_info['errList']['con_numero_contrato'] = array();
              }
              $this->NM_ajax_info['errList']['con_numero_contrato'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_numero_contrato';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_numero_contrato

    function ValidateField_con_tipo_contrato(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_tipo_contrato'])) {
       return;
   }
               if (!empty($this->con_tipo_contrato) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']) && !in_array($this->con_tipo_contrato, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_tipo_contrato']))
                   {
                       $Campos_Erros['con_tipo_contrato'] = array();
                   }
                   $Campos_Erros['con_tipo_contrato'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_tipo_contrato']) || !is_array($this->NM_ajax_info['errList']['con_tipo_contrato']))
                   {
                       $this->NM_ajax_info['errList']['con_tipo_contrato'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_tipo_contrato'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_tipo_contrato';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_tipo_contrato

    function ValidateField_con_propietario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_propietario'])) {
          nm_limpa_numero($this->con_propietario, $this->field_config['con_propietario']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->con_propietario, $this->field_config['con_propietario']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->con_propietario != '')  
          { 
              $iTestSize = 4;
              if (strlen($this->con_propietario) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_propietario'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['con_propietario']))
                  {
                      $Campos_Erros['con_propietario'] = array();
                  }
                  $Campos_Erros['con_propietario'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['con_propietario']) || !is_array($this->NM_ajax_info['errList']['con_propietario']))
                  {
                      $this->NM_ajax_info['errList']['con_propietario'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_propietario'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->con_propietario, 4, 0, -0, 9999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_propietario'] . "; " ; 
                  if (!isset($Campos_Erros['con_propietario']))
                  {
                      $Campos_Erros['con_propietario'] = array();
                  }
                  $Campos_Erros['con_propietario'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_propietario']) || !is_array($this->NM_ajax_info['errList']['con_propietario']))
                  {
                      $this->NM_ajax_info['errList']['con_propietario'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_propietario'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['php_cmp_required']['con_propietario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['php_cmp_required']['con_propietario'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_propietario'] . "" ; 
              if (!isset($Campos_Erros['con_propietario']))
              {
                  $Campos_Erros['con_propietario'] = array();
              }
              $Campos_Erros['con_propietario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['con_propietario']) || !is_array($this->NM_ajax_info['errList']['con_propietario']))
                  {
                      $this->NM_ajax_info['errList']['con_propietario'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_propietario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_propietario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_propietario

    function ValidateField_con_nombre(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_nombre'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->con_nombre) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_nombre';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_nombre

    function ValidateField_con_cedula(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_cedula'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->con_cedula) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_cedula';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_cedula

    function ValidateField_con_telefono(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_telefono'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->con_telefono) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_telefono';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_telefono

    function ValidateField_con_celular(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_celular'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->con_celular) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_celular';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_celular

    function ValidateField_con_direccion_propietario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_direccion_propietario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->con_direccion_propietario) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_direccion_propietario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_direccion_propietario

    function ValidateField_con_correo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_correo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->con_correo) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_correo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_correo

    function ValidateField_con_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_estado'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_estado) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_estado'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_estado']))
              {
                  $Campos_Erros['con_estado'] = array();
              }
              $Campos_Erros['con_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_estado']) || !is_array($this->NM_ajax_info['errList']['con_estado']))
              {
                  $this->NM_ajax_info['errList']['con_estado'] = array();
              }
              $this->NM_ajax_info['errList']['con_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_estado

    function ValidateField_con_pais(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_pais'])) {
       return;
   }
               if (!empty($this->con_pais) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']) && !in_array($this->con_pais, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_pais']))
                   {
                       $Campos_Erros['con_pais'] = array();
                   }
                   $Campos_Erros['con_pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_pais']) || !is_array($this->NM_ajax_info['errList']['con_pais']))
                   {
                       $this->NM_ajax_info['errList']['con_pais'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_pais'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_pais';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_pais

    function ValidateField_con_provincia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_provincia'])) {
       return;
   }
               if (!empty($this->con_provincia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']) && !in_array($this->con_provincia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_provincia']))
                   {
                       $Campos_Erros['con_provincia'] = array();
                   }
                   $Campos_Erros['con_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_provincia']) || !is_array($this->NM_ajax_info['errList']['con_provincia']))
                   {
                       $this->NM_ajax_info['errList']['con_provincia'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_provincia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_provincia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_provincia

    function ValidateField_con_canton(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_canton'])) {
       return;
   }
               if (!empty($this->con_canton) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']) && !in_array($this->con_canton, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_canton']))
                   {
                       $Campos_Erros['con_canton'] = array();
                   }
                   $Campos_Erros['con_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_canton']) || !is_array($this->NM_ajax_info['errList']['con_canton']))
                   {
                       $this->NM_ajax_info['errList']['con_canton'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_canton'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_canton';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_canton

    function ValidateField_con_parroquia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_parroquia'])) {
       return;
   }
               if (!empty($this->con_parroquia) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']) && !in_array($this->con_parroquia, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_parroquia']))
                   {
                       $Campos_Erros['con_parroquia'] = array();
                   }
                   $Campos_Erros['con_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_parroquia']) || !is_array($this->NM_ajax_info['errList']['con_parroquia']))
                   {
                       $this->NM_ajax_info['errList']['con_parroquia'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_parroquia'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_parroquia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_parroquia

    function ValidateField_con_comunidad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_comunidad'])) {
       return;
   }
               if (!empty($this->con_comunidad) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']) && !in_array($this->con_comunidad, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_comunidad']))
                   {
                       $Campos_Erros['con_comunidad'] = array();
                   }
                   $Campos_Erros['con_comunidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_comunidad']) || !is_array($this->NM_ajax_info['errList']['con_comunidad']))
                   {
                       $this->NM_ajax_info['errList']['con_comunidad'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_comunidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_comunidad';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_comunidad

    function ValidateField_con_sector(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_sector'])) {
       return;
   }
               if (!empty($this->con_sector) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']) && !in_array($this->con_sector, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_sector']))
                   {
                       $Campos_Erros['con_sector'] = array();
                   }
                   $Campos_Erros['con_sector'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_sector']) || !is_array($this->NM_ajax_info['errList']['con_sector']))
                   {
                       $this->NM_ajax_info['errList']['con_sector'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_sector'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_sector';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_sector

    function ValidateField_con_numero_censo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_numero_censo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_numero_censo) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_numero_censo'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_numero_censo']))
              {
                  $Campos_Erros['con_numero_censo'] = array();
              }
              $Campos_Erros['con_numero_censo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_numero_censo']) || !is_array($this->NM_ajax_info['errList']['con_numero_censo']))
              {
                  $this->NM_ajax_info['errList']['con_numero_censo'] = array();
              }
              $this->NM_ajax_info['errList']['con_numero_censo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_numero_censo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_numero_censo

    function ValidateField_con_direccion_predio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_direccion_predio'])) {
          return;
      }
      $this->con_direccion_predio = sc_strtoupper($this->con_direccion_predio); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_direccion_predio) > 200) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_direccion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_direccion_predio']))
              {
                  $Campos_Erros['con_direccion_predio'] = array();
              }
              $Campos_Erros['con_direccion_predio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_direccion_predio']) || !is_array($this->NM_ajax_info['errList']['con_direccion_predio']))
              {
                  $this->NM_ajax_info['errList']['con_direccion_predio'] = array();
              }
              $this->NM_ajax_info['errList']['con_direccion_predio'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 200 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_direccion_predio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_direccion_predio

    function ValidateField_con_toma_administrativa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_toma_administrativa'])) {
       return;
   }
               if (!empty($this->con_toma_administrativa) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']) && !in_array($this->con_toma_administrativa, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_toma_administrativa']))
                   {
                       $Campos_Erros['con_toma_administrativa'] = array();
                   }
                   $Campos_Erros['con_toma_administrativa'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_toma_administrativa']) || !is_array($this->NM_ajax_info['errList']['con_toma_administrativa']))
                   {
                       $this->NM_ajax_info['errList']['con_toma_administrativa'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_toma_administrativa'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_toma_administrativa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_toma_administrativa

    function ValidateField_con_toma_operativa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_toma_operativa'])) {
       return;
   }
      if ($this->con_toma_operativa == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['php_cmp_required']['con_toma_operativa']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['php_cmp_required']['con_toma_operativa'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_toma_operativa'] . "" ; 
          if (!isset($Campos_Erros['con_toma_operativa']))
          {
              $Campos_Erros['con_toma_operativa'] = array();
          }
          $Campos_Erros['con_toma_operativa'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['con_toma_operativa']) || !is_array($this->NM_ajax_info['errList']['con_toma_operativa']))
          {
              $this->NM_ajax_info['errList']['con_toma_operativa'] = array();
          }
          $this->NM_ajax_info['errList']['con_toma_operativa'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->con_toma_operativa) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']) && !in_array($this->con_toma_operativa, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['con_toma_operativa']))
              {
                  $Campos_Erros['con_toma_operativa'] = array();
              }
              $Campos_Erros['con_toma_operativa'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['con_toma_operativa']) || !is_array($this->NM_ajax_info['errList']['con_toma_operativa']))
              {
                  $this->NM_ajax_info['errList']['con_toma_operativa'] = array();
              }
              $this->NM_ajax_info['errList']['con_toma_operativa'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_toma_operativa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_toma_operativa

    function ValidateField_con_condicion_contrato(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_condicion_contrato'])) {
       return;
   }
               if (!empty($this->con_condicion_contrato) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']) && !in_array($this->con_condicion_contrato, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_condicion_contrato']))
                   {
                       $Campos_Erros['con_condicion_contrato'] = array();
                   }
                   $Campos_Erros['con_condicion_contrato'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_condicion_contrato']) || !is_array($this->NM_ajax_info['errList']['con_condicion_contrato']))
                   {
                       $this->NM_ajax_info['errList']['con_condicion_contrato'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_condicion_contrato'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_condicion_contrato';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_condicion_contrato

    function ValidateField_con_tipo_servicio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_tipo_servicio'])) {
       return;
   }
               if (!empty($this->con_tipo_servicio) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']) && !in_array($this->con_tipo_servicio, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_tipo_servicio']))
                   {
                       $Campos_Erros['con_tipo_servicio'] = array();
                   }
                   $Campos_Erros['con_tipo_servicio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_tipo_servicio']) || !is_array($this->NM_ajax_info['errList']['con_tipo_servicio']))
                   {
                       $this->NM_ajax_info['errList']['con_tipo_servicio'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_tipo_servicio'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_tipo_servicio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_tipo_servicio

    function ValidateField_con_ruta(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['con_ruta'])) {
       return;
   }
               if (!empty($this->con_ruta) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']) && !in_array($this->con_ruta, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['con_ruta']))
                   {
                       $Campos_Erros['con_ruta'] = array();
                   }
                   $Campos_Erros['con_ruta'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['con_ruta']) || !is_array($this->NM_ajax_info['errList']['con_ruta']))
                   {
                       $this->NM_ajax_info['errList']['con_ruta'] = array();
                   }
                   $this->NM_ajax_info['errList']['con_ruta'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_ruta';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_ruta

    function ValidateField_con_orden_lecturas(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_orden_lecturas'])) {
          nm_limpa_numero($this->con_orden_lecturas, $this->field_config['con_orden_lecturas']['symbol_grp']) ; 
          return;
      }
      if ($this->con_orden_lecturas === "" || is_null($this->con_orden_lecturas))  
      { 
          $this->con_orden_lecturas = 0;
          $this->sc_force_zero[] = 'con_orden_lecturas';
      } 
      nm_limpa_numero($this->con_orden_lecturas, $this->field_config['con_orden_lecturas']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->con_orden_lecturas != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->con_orden_lecturas) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_orden_ingreso'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['con_orden_lecturas']))
                  {
                      $Campos_Erros['con_orden_lecturas'] = array();
                  }
                  $Campos_Erros['con_orden_lecturas'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['con_orden_lecturas']) || !is_array($this->NM_ajax_info['errList']['con_orden_lecturas']))
                  {
                      $this->NM_ajax_info['errList']['con_orden_lecturas'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_orden_lecturas'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->con_orden_lecturas, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_orden_ingreso'] . "; " ; 
                  if (!isset($Campos_Erros['con_orden_lecturas']))
                  {
                      $Campos_Erros['con_orden_lecturas'] = array();
                  }
                  $Campos_Erros['con_orden_lecturas'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_orden_lecturas']) || !is_array($this->NM_ajax_info['errList']['con_orden_lecturas']))
                  {
                      $this->NM_ajax_info['errList']['con_orden_lecturas'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_orden_lecturas'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_orden_lecturas';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_orden_lecturas

    function ValidateField_con_numero_corte(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_numero_corte'])) {
          nm_limpa_numero($this->con_numero_corte, $this->field_config['con_numero_corte']['symbol_grp']) ; 
          return;
      }
      if ($this->con_numero_corte === "" || is_null($this->con_numero_corte))  
      { 
          $this->con_numero_corte = 0;
          $this->sc_force_zero[] = 'con_numero_corte';
      } 
      nm_limpa_numero($this->con_numero_corte, $this->field_config['con_numero_corte']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->con_numero_corte != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->con_numero_corte) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nro_corte'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['con_numero_corte']))
                  {
                      $Campos_Erros['con_numero_corte'] = array();
                  }
                  $Campos_Erros['con_numero_corte'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['con_numero_corte']) || !is_array($this->NM_ajax_info['errList']['con_numero_corte']))
                  {
                      $this->NM_ajax_info['errList']['con_numero_corte'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_numero_corte'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->con_numero_corte, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nro_corte'] . "; " ; 
                  if (!isset($Campos_Erros['con_numero_corte']))
                  {
                      $Campos_Erros['con_numero_corte'] = array();
                  }
                  $Campos_Erros['con_numero_corte'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_numero_corte']) || !is_array($this->NM_ajax_info['errList']['con_numero_corte']))
                  {
                      $this->NM_ajax_info['errList']['con_numero_corte'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_numero_corte'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_numero_corte';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_numero_corte

    function ValidateField_con_fecha_instalacion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->con_fecha_instalacion, $this->field_config['con_fecha_instalacion']['date_sep']) ; 
      if (isset($this->Field_no_validate['con_fecha_instalacion'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['con_fecha_instalacion']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['con_fecha_instalacion']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['con_fecha_instalacion']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['con_fecha_instalacion']['date_sep']) ; 
          if (trim($this->con_fecha_instalacion) != "")  
          { 
              if ($teste_validade->Data($this->con_fecha_instalacion, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha_instalacion'] . "; " ; 
                  if (!isset($Campos_Erros['con_fecha_instalacion']))
                  {
                      $Campos_Erros['con_fecha_instalacion'] = array();
                  }
                  $Campos_Erros['con_fecha_instalacion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_fecha_instalacion']) || !is_array($this->NM_ajax_info['errList']['con_fecha_instalacion']))
                  {
                      $this->NM_ajax_info['errList']['con_fecha_instalacion'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_fecha_instalacion'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['con_fecha_instalacion']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_fecha_instalacion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_fecha_instalacion

    function ValidateField_con_numero_medidor(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_numero_medidor'])) {
          return;
      }
      $this->con_numero_medidor = sc_strtoupper($this->con_numero_medidor); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_numero_medidor) > 15) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_numero_medidor'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_numero_medidor']))
              {
                  $Campos_Erros['con_numero_medidor'] = array();
              }
              $Campos_Erros['con_numero_medidor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_numero_medidor']) || !is_array($this->NM_ajax_info['errList']['con_numero_medidor']))
              {
                  $this->NM_ajax_info['errList']['con_numero_medidor'] = array();
              }
              $this->NM_ajax_info['errList']['con_numero_medidor'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 15 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
      $Teste_trab = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->con_numero_medidor ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->con_numero_medidor, $_SESSION['scriptcase']['charset']); $x++) 
          { 
               for ($y = 0; $y < mb_strlen($Teste_trab, $_SESSION['scriptcase']['charset']); $y++) 
               { 
                    if (sc_substr($Teste_compara, $x, 1) == sc_substr($Teste_trab, $y, 1) ) 
                    { 
                        break ; 
                    } 
               } 
               if (sc_substr($Teste_compara, $x, 1) != sc_substr($Teste_trab, $y, 1) )  
               { 
                  $Teste_critica = 1 ; 
               } 
          } 
          if ($Teste_critica == 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_numero_medidor'] . " " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['con_numero_medidor']))
              {
                  $Campos_Erros['con_numero_medidor'] = array();
              }
              $Campos_Erros['con_numero_medidor'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['con_numero_medidor']) || !is_array($this->NM_ajax_info['errList']['con_numero_medidor']))
              {
                  $this->NM_ajax_info['errList']['con_numero_medidor'] = array();
              }
              $this->NM_ajax_info['errList']['con_numero_medidor'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_numero_medidor';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_numero_medidor

    function ValidateField_con_maxima_lectura(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_maxima_lectura'])) {
          nm_limpa_numero($this->con_maxima_lectura, $this->field_config['con_maxima_lectura']['symbol_grp']) ; 
          return;
      }
      if ($this->con_maxima_lectura === "" || is_null($this->con_maxima_lectura))  
      { 
          $this->con_maxima_lectura = 0;
          $this->sc_force_zero[] = 'con_maxima_lectura';
      } 
      nm_limpa_numero($this->con_maxima_lectura, $this->field_config['con_maxima_lectura']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->con_maxima_lectura != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->con_maxima_lectura) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_maxima'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['con_maxima_lectura']))
                  {
                      $Campos_Erros['con_maxima_lectura'] = array();
                  }
                  $Campos_Erros['con_maxima_lectura'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['con_maxima_lectura']) || !is_array($this->NM_ajax_info['errList']['con_maxima_lectura']))
                  {
                      $this->NM_ajax_info['errList']['con_maxima_lectura'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_maxima_lectura'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->con_maxima_lectura, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_maxima'] . "; " ; 
                  if (!isset($Campos_Erros['con_maxima_lectura']))
                  {
                      $Campos_Erros['con_maxima_lectura'] = array();
                  }
                  $Campos_Erros['con_maxima_lectura'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_maxima_lectura']) || !is_array($this->NM_ajax_info['errList']['con_maxima_lectura']))
                  {
                      $this->NM_ajax_info['errList']['con_maxima_lectura'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_maxima_lectura'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_maxima_lectura';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_maxima_lectura

    function ValidateField_con_lectura_actual(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_lectura_actual'])) {
          nm_limpa_numero($this->con_lectura_actual, $this->field_config['con_lectura_actual']['symbol_grp']) ; 
          return;
      }
      if ($this->con_lectura_actual === "" || is_null($this->con_lectura_actual))  
      { 
          $this->con_lectura_actual = 0;
          $this->sc_force_zero[] = 'con_lectura_actual';
      } 
      nm_limpa_numero($this->con_lectura_actual, $this->field_config['con_lectura_actual']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->con_lectura_actual != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->con_lectura_actual) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_actual'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['con_lectura_actual']))
                  {
                      $Campos_Erros['con_lectura_actual'] = array();
                  }
                  $Campos_Erros['con_lectura_actual'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['con_lectura_actual']) || !is_array($this->NM_ajax_info['errList']['con_lectura_actual']))
                  {
                      $this->NM_ajax_info['errList']['con_lectura_actual'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_lectura_actual'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->con_lectura_actual, 9, 0, -0, 999999999, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_lectura_actual'] . "; " ; 
                  if (!isset($Campos_Erros['con_lectura_actual']))
                  {
                      $Campos_Erros['con_lectura_actual'] = array();
                  }
                  $Campos_Erros['con_lectura_actual'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_lectura_actual']) || !is_array($this->NM_ajax_info['errList']['con_lectura_actual']))
                  {
                      $this->NM_ajax_info['errList']['con_lectura_actual'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_lectura_actual'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_lectura_actual';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_lectura_actual

    function ValidateField_con_fecha_lectura(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->con_fecha_lectura, $this->field_config['con_fecha_lectura']['date_sep']) ; 
      if (isset($this->Field_no_validate['con_fecha_lectura'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          $guarda_datahora = $this->field_config['con_fecha_lectura']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['con_fecha_lectura']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['con_fecha_lectura']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['con_fecha_lectura']['date_sep']) ; 
          if (trim($this->con_fecha_lectura) != "")  
          { 
              if ($teste_validade->Data($this->con_fecha_lectura, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha_ultima_lectura'] . "; " ; 
                  if (!isset($Campos_Erros['con_fecha_lectura']))
                  {
                      $Campos_Erros['con_fecha_lectura'] = array();
                  }
                  $Campos_Erros['con_fecha_lectura'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['con_fecha_lectura']) || !is_array($this->NM_ajax_info['errList']['con_fecha_lectura']))
                  {
                      $this->NM_ajax_info['errList']['con_fecha_lectura'] = array();
                  }
                  $this->NM_ajax_info['errList']['con_fecha_lectura'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
          $this->field_config['con_fecha_lectura']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_fecha_lectura';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_fecha_lectura

    function ValidateField_con_observaciones(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_observaciones'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_observaciones) > 32767) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_observacion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_observaciones']))
              {
                  $Campos_Erros['con_observaciones'] = array();
              }
              $Campos_Erros['con_observaciones'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_observaciones']) || !is_array($this->NM_ajax_info['errList']['con_observaciones']))
              {
                  $this->NM_ajax_info['errList']['con_observaciones'] = array();
              }
              $this->NM_ajax_info['errList']['con_observaciones'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 32767 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_observaciones';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_observaciones

    function ValidateField_con_usuario_instala(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['con_usuario_instala'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->con_usuario_instala) > 35) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_usuario_instala'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 35 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['con_usuario_instala']))
              {
                  $Campos_Erros['con_usuario_instala'] = array();
              }
              $Campos_Erros['con_usuario_instala'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 35 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['con_usuario_instala']) || !is_array($this->NM_ajax_info['errList']['con_usuario_instala']))
              {
                  $this->NM_ajax_info['errList']['con_usuario_instala'] = array();
              }
              $this->NM_ajax_info['errList']['con_usuario_instala'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 35 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'con_usuario_instala';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_con_usuario_instala

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
    $this->nmgp_dados_form['con_motivo_anulacion'] = $this->con_motivo_anulacion;
    $this->nmgp_dados_form['con_fecha'] = $this->con_fecha;
    $this->nmgp_dados_form['con_sino'] = $this->con_sino;
    $this->nmgp_dados_form['con_id'] = $this->con_id;
    $this->nmgp_dados_form['con_numero_contrato'] = $this->con_numero_contrato;
    $this->nmgp_dados_form['con_tipo_contrato'] = $this->con_tipo_contrato;
    $this->nmgp_dados_form['con_propietario'] = $this->con_propietario;
    $this->nmgp_dados_form['con_nombre'] = $this->con_nombre;
    $this->nmgp_dados_form['con_cedula'] = $this->con_cedula;
    $this->nmgp_dados_form['con_telefono'] = $this->con_telefono;
    $this->nmgp_dados_form['con_celular'] = $this->con_celular;
    $this->nmgp_dados_form['con_direccion_propietario'] = $this->con_direccion_propietario;
    $this->nmgp_dados_form['con_correo'] = $this->con_correo;
    $this->nmgp_dados_form['con_estado'] = $this->con_estado;
    $this->nmgp_dados_form['con_pais'] = $this->con_pais;
    $this->nmgp_dados_form['con_provincia'] = $this->con_provincia;
    $this->nmgp_dados_form['con_canton'] = $this->con_canton;
    $this->nmgp_dados_form['con_parroquia'] = $this->con_parroquia;
    $this->nmgp_dados_form['con_comunidad'] = $this->con_comunidad;
    $this->nmgp_dados_form['con_sector'] = $this->con_sector;
    $this->nmgp_dados_form['con_numero_censo'] = $this->con_numero_censo;
    $this->nmgp_dados_form['con_direccion_predio'] = $this->con_direccion_predio;
    $this->nmgp_dados_form['con_toma_administrativa'] = $this->con_toma_administrativa;
    $this->nmgp_dados_form['con_toma_operativa'] = $this->con_toma_operativa;
    $this->nmgp_dados_form['con_condicion_contrato'] = $this->con_condicion_contrato;
    $this->nmgp_dados_form['con_tipo_servicio'] = $this->con_tipo_servicio;
    $this->nmgp_dados_form['con_ruta'] = $this->con_ruta;
    $this->nmgp_dados_form['con_orden_lecturas'] = $this->con_orden_lecturas;
    $this->nmgp_dados_form['con_numero_corte'] = $this->con_numero_corte;
    $this->nmgp_dados_form['con_fecha_instalacion'] = (strlen(trim($this->con_fecha_instalacion)) > 19) ? str_replace(".", ":", $this->con_fecha_instalacion) : trim($this->con_fecha_instalacion);
    $this->nmgp_dados_form['con_numero_medidor'] = $this->con_numero_medidor;
    $this->nmgp_dados_form['con_maxima_lectura'] = $this->con_maxima_lectura;
    $this->nmgp_dados_form['con_lectura_actual'] = $this->con_lectura_actual;
    $this->nmgp_dados_form['con_fecha_lectura'] = (strlen(trim($this->con_fecha_lectura)) > 19) ? str_replace(".", ":", $this->con_fecha_lectura) : trim($this->con_fecha_lectura);
    $this->nmgp_dados_form['con_observaciones'] = $this->con_observaciones;
    $this->nmgp_dados_form['con_usuario_instala'] = $this->con_usuario_instala;
    $this->nmgp_dados_form['con_empresa'] = $this->con_empresa;
    $this->nmgp_dados_form['con_usuario'] = $this->con_usuario;
    $this->nmgp_dados_form['con_terminal'] = $this->con_terminal;
    $this->nmgp_dados_form['con_total_a_pagar'] = $this->con_total_a_pagar;
    $this->nmgp_dados_form['con_abono'] = $this->con_abono;
    $this->nmgp_dados_form['con_plazo'] = $this->con_plazo;
    $this->nmgp_dados_form['con_saldo_pagar'] = $this->con_saldo_pagar;
    $this->nmgp_dados_form['con_valor_cuota'] = $this->con_valor_cuota;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['con_fecha'] = $this->con_fecha;
      nm_limpa_data($this->con_fecha, $this->field_config['con_fecha']['date_sep']) ; 
      $this->Before_unformat['con_id'] = $this->con_id;
      nm_limpa_numero($this->con_id, $this->field_config['con_id']['symbol_grp']) ; 
      $this->Before_unformat['con_propietario'] = $this->con_propietario;
      nm_limpa_numero($this->con_propietario, $this->field_config['con_propietario']['symbol_grp']) ; 
      $this->Before_unformat['con_orden_lecturas'] = $this->con_orden_lecturas;
      nm_limpa_numero($this->con_orden_lecturas, $this->field_config['con_orden_lecturas']['symbol_grp']) ; 
      $this->Before_unformat['con_numero_corte'] = $this->con_numero_corte;
      nm_limpa_numero($this->con_numero_corte, $this->field_config['con_numero_corte']['symbol_grp']) ; 
      $this->Before_unformat['con_fecha_instalacion'] = $this->con_fecha_instalacion;
      nm_limpa_data($this->con_fecha_instalacion, $this->field_config['con_fecha_instalacion']['date_sep']) ; 
      $this->Before_unformat['con_maxima_lectura'] = $this->con_maxima_lectura;
      nm_limpa_numero($this->con_maxima_lectura, $this->field_config['con_maxima_lectura']['symbol_grp']) ; 
      $this->Before_unformat['con_lectura_actual'] = $this->con_lectura_actual;
      nm_limpa_numero($this->con_lectura_actual, $this->field_config['con_lectura_actual']['symbol_grp']) ; 
      $this->Before_unformat['con_fecha_lectura'] = $this->con_fecha_lectura;
      nm_limpa_data($this->con_fecha_lectura, $this->field_config['con_fecha_lectura']['date_sep']) ; 
      $this->Before_unformat['con_total_a_pagar'] = $this->con_total_a_pagar;
      if (!empty($this->field_config['con_total_a_pagar']['symbol_dec']))
      {
         nm_limpa_valor($this->con_total_a_pagar, $this->field_config['con_total_a_pagar']['symbol_dec'], $this->field_config['con_total_a_pagar']['symbol_grp']);
      }
      $this->Before_unformat['con_abono'] = $this->con_abono;
      if (!empty($this->field_config['con_abono']['symbol_dec']))
      {
         nm_limpa_valor($this->con_abono, $this->field_config['con_abono']['symbol_dec'], $this->field_config['con_abono']['symbol_grp']);
      }
      $this->Before_unformat['con_plazo'] = $this->con_plazo;
      nm_limpa_numero($this->con_plazo, $this->field_config['con_plazo']['symbol_grp']) ; 
      $this->Before_unformat['con_saldo_pagar'] = $this->con_saldo_pagar;
      if (!empty($this->field_config['con_saldo_pagar']['symbol_dec']))
      {
         nm_limpa_valor($this->con_saldo_pagar, $this->field_config['con_saldo_pagar']['symbol_dec'], $this->field_config['con_saldo_pagar']['symbol_grp']);
      }
      $this->Before_unformat['con_valor_cuota'] = $this->con_valor_cuota;
      if (!empty($this->field_config['con_valor_cuota']['symbol_dec']))
      {
         nm_limpa_valor($this->con_valor_cuota, $this->field_config['con_valor_cuota']['symbol_dec'], $this->field_config['con_valor_cuota']['symbol_grp']);
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
      if ($Nome_Campo == "con_id")
      {
          nm_limpa_numero($this->con_id, $this->field_config['con_id']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_propietario")
      {
          nm_limpa_numero($this->con_propietario, $this->field_config['con_propietario']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_orden_lecturas")
      {
          nm_limpa_numero($this->con_orden_lecturas, $this->field_config['con_orden_lecturas']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_numero_corte")
      {
          nm_limpa_numero($this->con_numero_corte, $this->field_config['con_numero_corte']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_maxima_lectura")
      {
          nm_limpa_numero($this->con_maxima_lectura, $this->field_config['con_maxima_lectura']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_lectura_actual")
      {
          nm_limpa_numero($this->con_lectura_actual, $this->field_config['con_lectura_actual']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_total_a_pagar")
      {
          if (!empty($this->field_config['con_total_a_pagar']['symbol_dec']))
          {
             nm_limpa_valor($this->con_total_a_pagar, $this->field_config['con_total_a_pagar']['symbol_dec'], $this->field_config['con_total_a_pagar']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "con_abono")
      {
          if (!empty($this->field_config['con_abono']['symbol_dec']))
          {
             nm_limpa_valor($this->con_abono, $this->field_config['con_abono']['symbol_dec'], $this->field_config['con_abono']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "con_plazo")
      {
          nm_limpa_numero($this->con_plazo, $this->field_config['con_plazo']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "con_saldo_pagar")
      {
          if (!empty($this->field_config['con_saldo_pagar']['symbol_dec']))
          {
             nm_limpa_valor($this->con_saldo_pagar, $this->field_config['con_saldo_pagar']['symbol_dec'], $this->field_config['con_saldo_pagar']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "con_valor_cuota")
      {
          if (!empty($this->field_config['con_valor_cuota']['symbol_dec']))
          {
             nm_limpa_valor($this->con_valor_cuota, $this->field_config['con_valor_cuota']['symbol_dec'], $this->field_config['con_valor_cuota']['symbol_grp']);
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
      $this->con_fecha = trim($this->con_fecha);
      if ($this->con_fecha == "0000000000")
      {
          $this->con_fecha = "";
      }
      if (!empty($this->con_fecha) || (!empty($format_fields) && isset($format_fields['con_fecha'])))
      {
          nm_conv_form_data($this->con_fecha, "AAAA/MM/DD", $this->field_config['con_fecha']['date_format'], array($this->field_config['con_fecha']['date_sep'])) ;  
      }
      if ('' !== $this->con_id || (!empty($format_fields) && isset($format_fields['con_id'])))
      {
          nmgp_Form_Num_Val($this->con_id, $this->field_config['con_id']['symbol_grp'], $this->field_config['con_id']['symbol_dec'], "0", "S", $this->field_config['con_id']['format_neg'], "", "", "-", $this->field_config['con_id']['symbol_fmt']) ; 
      }
      if ('' !== $this->con_propietario || (!empty($format_fields) && isset($format_fields['con_propietario'])))
      {
          nmgp_Form_Num_Val($this->con_propietario, $this->field_config['con_propietario']['symbol_grp'], $this->field_config['con_propietario']['symbol_dec'], "0", "S", $this->field_config['con_propietario']['format_neg'], "", "", "-", $this->field_config['con_propietario']['symbol_fmt']) ; 
      }
      if ('' !== $this->con_orden_lecturas || (!empty($format_fields) && isset($format_fields['con_orden_lecturas'])))
      {
          nmgp_Form_Num_Val($this->con_orden_lecturas, $this->field_config['con_orden_lecturas']['symbol_grp'], $this->field_config['con_orden_lecturas']['symbol_dec'], "0", "S", $this->field_config['con_orden_lecturas']['format_neg'], "", "", "-", $this->field_config['con_orden_lecturas']['symbol_fmt']) ; 
      }
      if ('' !== $this->con_numero_corte || (!empty($format_fields) && isset($format_fields['con_numero_corte'])))
      {
          nmgp_Form_Num_Val($this->con_numero_corte, $this->field_config['con_numero_corte']['symbol_grp'], $this->field_config['con_numero_corte']['symbol_dec'], "0", "S", $this->field_config['con_numero_corte']['format_neg'], "", "", "-", $this->field_config['con_numero_corte']['symbol_fmt']) ; 
      }
      if ((!empty($this->con_fecha_instalacion) && 'null' != $this->con_fecha_instalacion) || (!empty($format_fields) && isset($format_fields['con_fecha_instalacion'])))
      {
          nm_volta_data($this->con_fecha_instalacion, $this->field_config['con_fecha_instalacion']['date_format']) ; 
          nmgp_Form_Datas($this->con_fecha_instalacion, $this->field_config['con_fecha_instalacion']['date_format'], $this->field_config['con_fecha_instalacion']['date_sep']) ;  
      }
      elseif ('null' == $this->con_fecha_instalacion || '' == $this->con_fecha_instalacion)
      {
          $this->con_fecha_instalacion = '';
      }
      if ('' !== $this->con_maxima_lectura || (!empty($format_fields) && isset($format_fields['con_maxima_lectura'])))
      {
          nmgp_Form_Num_Val($this->con_maxima_lectura, $this->field_config['con_maxima_lectura']['symbol_grp'], $this->field_config['con_maxima_lectura']['symbol_dec'], "0", "S", $this->field_config['con_maxima_lectura']['format_neg'], "", "", "-", $this->field_config['con_maxima_lectura']['symbol_fmt']) ; 
      }
      if ('' !== $this->con_lectura_actual || (!empty($format_fields) && isset($format_fields['con_lectura_actual'])))
      {
          nmgp_Form_Num_Val($this->con_lectura_actual, $this->field_config['con_lectura_actual']['symbol_grp'], $this->field_config['con_lectura_actual']['symbol_dec'], "0", "S", $this->field_config['con_lectura_actual']['format_neg'], "", "", "-", $this->field_config['con_lectura_actual']['symbol_fmt']) ; 
      }
      if ((!empty($this->con_fecha_lectura) && 'null' != $this->con_fecha_lectura) || (!empty($format_fields) && isset($format_fields['con_fecha_lectura'])))
      {
          nm_volta_data($this->con_fecha_lectura, $this->field_config['con_fecha_lectura']['date_format']) ; 
          nmgp_Form_Datas($this->con_fecha_lectura, $this->field_config['con_fecha_lectura']['date_format'], $this->field_config['con_fecha_lectura']['date_sep']) ;  
      }
      elseif ('null' == $this->con_fecha_lectura || '' == $this->con_fecha_lectura)
      {
          $this->con_fecha_lectura = '';
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
      if ($this->con_fecha != "")  
      {
     nm_conv_form_data($this->con_fecha, $this->field_config['con_fecha']['date_format'], "AAAA/MM/DD", array($this->field_config['con_fecha']['date_sep'])) ;  
      }
      $guarda_format_hora = $this->field_config['con_fecha_instalacion']['date_format'];
      if ($this->con_fecha_instalacion != "")  
      { 
          nm_conv_data($this->con_fecha_instalacion, $this->field_config['con_fecha_instalacion']['date_format']) ; 
          $this->con_fecha_instalacion_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->con_fecha_instalacion_hora = substr($this->con_fecha_instalacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_fecha_instalacion_hora = substr($this->con_fecha_instalacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->con_fecha_instalacion_hora = substr($this->con_fecha_instalacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->con_fecha_instalacion_hora = substr($this->con_fecha_instalacion_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->con_fecha_instalacion_hora = substr($this->con_fecha_instalacion_hora, 0, -4);
          }
      } 
      if ($this->con_fecha_instalacion == "" && $use_null)  
      { 
          $this->con_fecha_instalacion = "null" ; 
      } 
      $this->field_config['con_fecha_instalacion']['date_format'] = $guarda_format_hora;
      $guarda_format_hora = $this->field_config['con_fecha_lectura']['date_format'];
      if ($this->con_fecha_lectura != "")  
      { 
          nm_conv_data($this->con_fecha_lectura, $this->field_config['con_fecha_lectura']['date_format']) ; 
          $this->con_fecha_lectura_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->con_fecha_lectura_hora = substr($this->con_fecha_lectura_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_fecha_lectura_hora = substr($this->con_fecha_lectura_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->con_fecha_lectura_hora = substr($this->con_fecha_lectura_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->con_fecha_lectura_hora = substr($this->con_fecha_lectura_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->con_fecha_lectura_hora = substr($this->con_fecha_lectura_hora, 0, -4);
          }
      } 
      if ($this->con_fecha_lectura == "" && $use_null)  
      { 
          $this->con_fecha_lectura = "null" ; 
      } 
      $this->field_config['con_fecha_lectura']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_con_motivo_anulacion();
          $this->ajax_return_values_con_fecha();
          $this->ajax_return_values_con_sino();
          $this->ajax_return_values_con_id();
          $this->ajax_return_values_con_numero_contrato();
          $this->ajax_return_values_con_tipo_contrato();
          $this->ajax_return_values_con_propietario();
          $this->ajax_return_values_con_nombre();
          $this->ajax_return_values_con_cedula();
          $this->ajax_return_values_con_telefono();
          $this->ajax_return_values_con_celular();
          $this->ajax_return_values_con_direccion_propietario();
          $this->ajax_return_values_con_correo();
          $this->ajax_return_values_con_estado();
          $this->ajax_return_values_con_pais();
          $this->ajax_return_values_con_provincia();
          $this->ajax_return_values_con_canton();
          $this->ajax_return_values_con_parroquia();
          $this->ajax_return_values_con_comunidad();
          $this->ajax_return_values_con_sector();
          $this->ajax_return_values_con_numero_censo();
          $this->ajax_return_values_con_direccion_predio();
          $this->ajax_return_values_con_toma_administrativa();
          $this->ajax_return_values_con_toma_operativa();
          $this->ajax_return_values_con_condicion_contrato();
          $this->ajax_return_values_con_tipo_servicio();
          $this->ajax_return_values_con_ruta();
          $this->ajax_return_values_con_orden_lecturas();
          $this->ajax_return_values_con_numero_corte();
          $this->ajax_return_values_con_fecha_instalacion();
          $this->ajax_return_values_con_numero_medidor();
          $this->ajax_return_values_con_maxima_lectura();
          $this->ajax_return_values_con_lectura_actual();
          $this->ajax_return_values_con_fecha_lectura();
          $this->ajax_return_values_con_observaciones();
          $this->ajax_return_values_con_usuario_instala();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['con_id']['keyVal'] = form_jap_anular_contrato_mob_pack_protect_string($this->nmgp_dados_form['con_id']);
          }
   } // ajax_return_values

          //----- con_motivo_anulacion
   function ajax_return_values_con_motivo_anulacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_motivo_anulacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_motivo_anulacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_motivo_anulacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- con_fecha
   function ajax_return_values_con_fecha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_fecha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_fecha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_fecha'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_sino
   function ajax_return_values_con_sino($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_sino", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_sino);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_sino'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- con_id
   function ajax_return_values_con_id($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_id", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_id);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_id'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("con_id", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- con_numero_contrato
   function ajax_return_values_con_numero_contrato($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_numero_contrato", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_numero_contrato);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_numero_contrato'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_tipo_contrato
   function ajax_return_values_con_tipo_contrato($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_tipo_contrato", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_tipo_contrato);
              $aLookup = array();
              $this->_tmp_lookup_con_tipo_contrato = $this->con_tipo_contrato;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT ap_id, ap_descripcion  FROM jap_aportaciones  where ap_contrato='S' and ap_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY ap_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_tipo_contrato\"";
          if (isset($this->NM_ajax_info['select_html']['con_tipo_contrato']) && !empty($this->NM_ajax_info['select_html']['con_tipo_contrato']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_tipo_contrato']);
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

                  if ($this->con_tipo_contrato == $sValue)
                  {
                      $this->_tmp_lookup_con_tipo_contrato = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_tipo_contrato'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_tipo_contrato']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_tipo_contrato']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_tipo_contrato']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_tipo_contrato']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_tipo_contrato']['labList'] = $aLabel;
          }
   }

          //----- con_propietario
   function ajax_return_values_con_propietario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_propietario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_propietario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_propietario'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_nombre
   function ajax_return_values_con_nombre($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_nombre", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_nombre);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_nombre'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_cedula
   function ajax_return_values_con_cedula($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_cedula", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_cedula);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_cedula'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_telefono
   function ajax_return_values_con_telefono($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_telefono", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_telefono);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_telefono'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_celular
   function ajax_return_values_con_celular($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_celular", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_celular);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_celular'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_direccion_propietario
   function ajax_return_values_con_direccion_propietario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_direccion_propietario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_direccion_propietario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_direccion_propietario'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_correo
   function ajax_return_values_con_correo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_correo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_correo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_correo'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_estado
   function ajax_return_values_con_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_estado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_estado'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
              $orig_con_estado = $this->con_estado;
              $con_estado      = $this->con_estado;
              $this->con_estado = $con_estado;
              $this->lookup_con_estado($conteudo);
              $this->con_estado = $orig_con_estado;
              $this->NM_ajax_info['fldList']['con_estado']['lookupCons'] = form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($conteudo));
          }
   }

          //----- con_pais
   function ajax_return_values_con_pais($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_pais", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_pais);
              $aLookup = array();
              $this->_tmp_lookup_con_pais = $this->con_pais;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_pais\"";
          if (isset($this->NM_ajax_info['select_html']['con_pais']) && !empty($this->NM_ajax_info['select_html']['con_pais']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_pais']);
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

                  if ($this->con_pais == $sValue)
                  {
                      $this->_tmp_lookup_con_pais = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_pais'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_pais']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_pais']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_pais']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_pais']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_pais']['labList'] = $aLabel;
          }
   }

          //----- con_provincia
   function ajax_return_values_con_provincia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_provincia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_provincia);
              $aLookup = array();
              $this->_tmp_lookup_con_provincia = $this->con_provincia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'] = array(); 
}
if ($this->con_pais != "")
{ 
   $this->nm_clear_val("con_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  where pro_pais=$this->con_pais ORDER BY pro_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_provincia\"";
          if (isset($this->NM_ajax_info['select_html']['con_provincia']) && !empty($this->NM_ajax_info['select_html']['con_provincia']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_provincia']);
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

                  if ($this->con_provincia == $sValue)
                  {
                      $this->_tmp_lookup_con_provincia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_provincia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_provincia']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_provincia']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_provincia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_provincia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_provincia']['labList'] = $aLabel;
          }
   }

          //----- con_canton
   function ajax_return_values_con_canton($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_canton", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_canton);
              $aLookup = array();
              $this->_tmp_lookup_con_canton = $this->con_canton;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'] = array(); 
}
if ($this->con_provincia != "")
{ 
   $this->nm_clear_val("con_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  WHERE can_provincia=$this->con_provincia ORDER BY can_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_canton\"";
          if (isset($this->NM_ajax_info['select_html']['con_canton']) && !empty($this->NM_ajax_info['select_html']['con_canton']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_canton']);
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

                  if ($this->con_canton == $sValue)
                  {
                      $this->_tmp_lookup_con_canton = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_canton'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_canton']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_canton']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_canton']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_canton']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_canton']['labList'] = $aLabel;
          }
   }

          //----- con_parroquia
   function ajax_return_values_con_parroquia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_parroquia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_parroquia);
              $aLookup = array();
              $this->_tmp_lookup_con_parroquia = $this->con_parroquia;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'] = array(); 
}
$aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string('') => str_replace('<', '&lt;',form_jap_anular_contrato_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'][] = '';
if ($this->con_canton != "")
{ 
   $this->nm_clear_val("con_canton");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT parr_id, parr_nombre  FROM sis_parroquia  WHERE parr_canton=$this->con_canton ORDER BY parr_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_parroquia\"";
          if (isset($this->NM_ajax_info['select_html']['con_parroquia']) && !empty($this->NM_ajax_info['select_html']['con_parroquia']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_parroquia']);
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

                  if ($this->con_parroquia == $sValue)
                  {
                      $this->_tmp_lookup_con_parroquia = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_parroquia'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_parroquia']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_parroquia']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_parroquia']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_parroquia']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_parroquia']['labList'] = $aLabel;
          }
   }

          //----- con_comunidad
   function ajax_return_values_con_comunidad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_comunidad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_comunidad);
              $aLookup = array();
              $this->_tmp_lookup_con_comunidad = $this->con_comunidad;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'] = array(); 
}
$aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string('0') => str_replace('<', '&lt;',form_jap_anular_contrato_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'][] = '0';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT com_id, com_descripcion  FROM jap_comunidad  WHERE com_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY com_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_comunidad\"";
          if (isset($this->NM_ajax_info['select_html']['con_comunidad']) && !empty($this->NM_ajax_info['select_html']['con_comunidad']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_comunidad']);
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

                  if ($this->con_comunidad == $sValue)
                  {
                      $this->_tmp_lookup_con_comunidad = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_comunidad'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_comunidad']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_comunidad']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_comunidad']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_comunidad']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_comunidad']['labList'] = $aLabel;
          }
   }

          //----- con_sector
   function ajax_return_values_con_sector($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_sector", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_sector);
              $aLookup = array();
              $this->_tmp_lookup_con_sector = $this->con_sector;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'] = array(); 
}
$aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string('0') => str_replace('<', '&lt;',form_jap_anular_contrato_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'][] = '0';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT sec_id, sec_descripcion  FROM jap_sector  WHERE sec_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY sec_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_sector\"";
          if (isset($this->NM_ajax_info['select_html']['con_sector']) && !empty($this->NM_ajax_info['select_html']['con_sector']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_sector']);
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

                  if ($this->con_sector == $sValue)
                  {
                      $this->_tmp_lookup_con_sector = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_sector'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_sector']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_sector']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_sector']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_sector']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_sector']['labList'] = $aLabel;
          }
   }

          //----- con_numero_censo
   function ajax_return_values_con_numero_censo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_numero_censo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_numero_censo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_numero_censo'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- con_direccion_predio
   function ajax_return_values_con_direccion_predio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_direccion_predio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_direccion_predio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_direccion_predio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- con_toma_administrativa
   function ajax_return_values_con_toma_administrativa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_toma_administrativa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_toma_administrativa);
              $aLookup = array();
              $this->_tmp_lookup_con_toma_administrativa = $this->con_toma_administrativa;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT ta_id, ta_descripcion  FROM jap_toma_administrativa  WHERE ta_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY ta_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_toma_administrativa\"";
          if (isset($this->NM_ajax_info['select_html']['con_toma_administrativa']) && !empty($this->NM_ajax_info['select_html']['con_toma_administrativa']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_toma_administrativa']);
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

                  if ($this->con_toma_administrativa == $sValue)
                  {
                      $this->_tmp_lookup_con_toma_administrativa = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_toma_administrativa'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_toma_administrativa']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_toma_administrativa']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_toma_administrativa']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_toma_administrativa']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_toma_administrativa']['labList'] = $aLabel;
          }
   }

          //----- con_toma_operativa
   function ajax_return_values_con_toma_operativa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_toma_operativa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_toma_operativa);
              $aLookup = array();
              $this->_tmp_lookup_con_toma_operativa = $this->con_toma_operativa;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'] = array(); 
}
$aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string('') => str_replace('<', '&lt;',form_jap_anular_contrato_mob_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'][] = '';
if ($this->con_toma_administrativa != "")
{ 
   $this->nm_clear_val("con_toma_administrativa");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT to_id, to_descripcion  FROM jap_toma_operativa  WHERE to_toma_administrativa='$this->con_toma_administrativa' ORDER BY to_id";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_toma_operativa\"";
          if (isset($this->NM_ajax_info['select_html']['con_toma_operativa']) && !empty($this->NM_ajax_info['select_html']['con_toma_operativa']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_toma_operativa']);
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

                  if ($this->con_toma_operativa == $sValue)
                  {
                      $this->_tmp_lookup_con_toma_operativa = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_toma_operativa'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_toma_operativa']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_toma_operativa']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_toma_operativa']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_toma_operativa']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_toma_operativa']['labList'] = $aLabel;
          }
   }

          //----- con_condicion_contrato
   function ajax_return_values_con_condicion_contrato($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_condicion_contrato", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_condicion_contrato);
              $aLookup = array();
              $this->_tmp_lookup_con_condicion_contrato = $this->con_condicion_contrato;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT cc_id, cc_descripcion  FROM jap_condicion_contrato  WHERE cc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cc_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_condicion_contrato\"";
          if (isset($this->NM_ajax_info['select_html']['con_condicion_contrato']) && !empty($this->NM_ajax_info['select_html']['con_condicion_contrato']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_condicion_contrato']);
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

                  if ($this->con_condicion_contrato == $sValue)
                  {
                      $this->_tmp_lookup_con_condicion_contrato = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_condicion_contrato'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_condicion_contrato']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_condicion_contrato']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_condicion_contrato']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_condicion_contrato']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_condicion_contrato']['labList'] = $aLabel;
          }
   }

          //----- con_tipo_servicio
   function ajax_return_values_con_tipo_servicio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_tipo_servicio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_tipo_servicio);
              $aLookup = array();
              $this->_tmp_lookup_con_tipo_servicio = $this->con_tipo_servicio;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT ts_id, ts_descripcion  FROM jap_tipo_servicio  WHERE ts_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY ts_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_tipo_servicio\"";
          if (isset($this->NM_ajax_info['select_html']['con_tipo_servicio']) && !empty($this->NM_ajax_info['select_html']['con_tipo_servicio']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_tipo_servicio']);
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

                  if ($this->con_tipo_servicio == $sValue)
                  {
                      $this->_tmp_lookup_con_tipo_servicio = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_tipo_servicio'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_tipo_servicio']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_tipo_servicio']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_tipo_servicio']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_tipo_servicio']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_tipo_servicio']['labList'] = $aLabel;
          }
   }

          //----- con_ruta
   function ajax_return_values_con_ruta($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_ruta", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_ruta);
              $aLookup = array();
              $this->_tmp_lookup_con_ruta = $this->con_ruta;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT rut_id, rut_nombre  FROM jap_rutas_medicion  where rut_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY rut_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'][] = $rs->fields[0];
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
          $sSelComp = "name=\"con_ruta\"";
          if (isset($this->NM_ajax_info['select_html']['con_ruta']) && !empty($this->NM_ajax_info['select_html']['con_ruta']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['con_ruta']);
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

                  if ($this->con_ruta == $sValue)
                  {
                      $this->_tmp_lookup_con_ruta = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['con_ruta'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['con_ruta']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['con_ruta']['valList'][$i] = form_jap_anular_contrato_mob_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['con_ruta']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['con_ruta']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['con_ruta']['labList'] = $aLabel;
          }
   }

          //----- con_orden_lecturas
   function ajax_return_values_con_orden_lecturas($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_orden_lecturas", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_orden_lecturas);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_orden_lecturas'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_numero_corte
   function ajax_return_values_con_numero_corte($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_numero_corte", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_numero_corte);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_numero_corte'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_fecha_instalacion
   function ajax_return_values_con_fecha_instalacion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_fecha_instalacion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_fecha_instalacion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_fecha_instalacion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_numero_medidor
   function ajax_return_values_con_numero_medidor($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_numero_medidor", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_numero_medidor);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_numero_medidor'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- con_maxima_lectura
   function ajax_return_values_con_maxima_lectura($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_maxima_lectura", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_maxima_lectura);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_maxima_lectura'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_lectura_actual
   function ajax_return_values_con_lectura_actual($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_lectura_actual", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_lectura_actual);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_lectura_actual'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_fecha_lectura
   function ajax_return_values_con_fecha_lectura($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_fecha_lectura", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_fecha_lectura);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_fecha_lectura'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- con_observaciones
   function ajax_return_values_con_observaciones($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_observaciones", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_observaciones);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_observaciones'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- con_usuario_instala
   function ajax_return_values_con_usuario_instala($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("con_usuario_instala", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->con_usuario_instala);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['con_usuario_instala'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
              );
              $orig_con_usuario_instala = $this->con_usuario_instala;
              $con_usuario_instala      = $this->con_usuario_instala;
              $this->con_usuario_instala = $con_usuario_instala;
              $this->lookup_con_usuario_instala($conteudo);
              $this->con_usuario_instala = $orig_con_usuario_instala;
              $this->NM_ajax_info['fldList']['con_usuario_instala']['lookupCons'] = form_jap_anular_contrato_mob_pack_protect_string(NM_charset_to_utf8($conteudo));
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['upload_dir'][$fieldName][] = $newName;
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
  function nm_proc_onload($bFormat = true)
  {
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_con_canton = $this->con_canton;
    $original_con_cedula = $this->con_cedula;
    $original_con_celular = $this->con_celular;
    $original_con_comunidad = $this->con_comunidad;
    $original_con_condicion_contrato = $this->con_condicion_contrato;
    $original_con_correo = $this->con_correo;
    $original_con_direccion_predio = $this->con_direccion_predio;
    $original_con_direccion_propietario = $this->con_direccion_propietario;
    $original_con_estado = $this->con_estado;
    $original_con_fecha_instalacion = $this->con_fecha_instalacion;
    $original_con_fecha_lectura = $this->con_fecha_lectura;
    $original_con_lectura_actual = $this->con_lectura_actual;
    $original_con_maxima_lectura = $this->con_maxima_lectura;
    $original_con_nombre = $this->con_nombre;
    $original_con_numero_censo = $this->con_numero_censo;
    $original_con_numero_corte = $this->con_numero_corte;
    $original_con_numero_medidor = $this->con_numero_medidor;
    $original_con_observaciones = $this->con_observaciones;
    $original_con_pais = $this->con_pais;
    $original_con_parroquia = $this->con_parroquia;
    $original_con_propietario = $this->con_propietario;
    $original_con_provincia = $this->con_provincia;
    $original_con_ruta = $this->con_ruta;
    $original_con_sector = $this->con_sector;
    $original_con_telefono = $this->con_telefono;
    $original_con_tipo_contrato = $this->con_tipo_contrato;
    $original_con_tipo_servicio = $this->con_tipo_servicio;
    $original_con_toma_administrativa = $this->con_toma_administrativa;
    $original_con_toma_operativa = $this->con_toma_operativa;
}
  $this->Ini->nm_hidden_blocos[4] = 'off'; $this->NM_ajax_info['blockDisplay']['4'] = 'off';
$this->Ini->nm_hidden_blocos[0] = 'off'; $this->NM_ajax_info['blockDisplay']['0'] = 'off';
;
;
;

$this->NM_ajax_info['buttonDisplay']['new'] = $this->nmgp_botoes["new"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['delete'] = $this->nmgp_botoes["delete"] = 'off';;
$this->NM_ajax_info['buttonDisplay']['update'] = $this->nmgp_botoes["update"] = 'off';;

$this->NM_ajax_info['buttonDisplay']['anular'] = $this->nmgp_botoes["anular"] = 'off';;

if($this->con_propietario <>''){
	$check_sql = "SELECT
						cl_id,
						cl_nombre,
						cl_identificacion,
						cl_direccion,
						cl_telefono,
						cl_celular,
						cl_email
					FROM
						del_cliente
					WHERE cl_id=".$this->con_propietario ;
	 
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
		$this->con_nombre = $this->rs[0][1];
		$this->con_cedula = $this->rs[0][2];
		$this->con_direccion_propietario =$this->rs[0][3];
		$this->con_telefono = $this->rs[0][4];
		$this->con_celular =$this->rs[0][5];
		$this->con_correo =$this->rs[0][6];
	}
}

if($this->con_total_a_pagar <>''){
	if($this->con_abono <>''){
		$this->con_saldo_pagar =$this->con_total_a_pagar -$this->con_abono ;
	}else{
		$this->con_abono =0;
		$this->con_saldo_pagar =$this->con_total_a_pagar -$this->con_abono ;
	}
	if($this->con_plazo >0){
		$this->con_valor_cuota =round($this->con_saldo_pagar /$this->con_plazo ,2);
	}else{
		$this->con_plazo =1;
		$this->con_valor_cuota =round($this->con_saldo_pagar /$this->con_plazo ,2);
	}
}

if($this->con_estado  == 'V'){
	$this->Ini->nm_hidden_blocos[4] = 'on'; $this->NM_ajax_info['blockDisplay']['4'] = 'on';
	$this->Ini->nm_hidden_blocos[0] = 'on'; $this->NM_ajax_info['blockDisplay']['0'] = 'on';
	;
	;
	;
	
	$this->NM_ajax_info['buttonDisplay']['anular'] = $this->nmgp_botoes["anular"] = 'on';;
	
	$this->sc_field_readonly("con_tipo_contrato", 'on');
	$this->sc_field_readonly("con_pais", 'on');
	$this->sc_field_readonly("con_provincia", 'on');
	$this->sc_field_readonly("con_canton", 'on');
	$this->sc_field_readonly("con_parroquia", 'on');
	$this->sc_field_readonly("con_comunidad", 'on');
	$this->sc_field_readonly("con_sector", 'on');
	$this->sc_field_readonly("con_numero_censo", 'on');
	
	$this->sc_field_readonly("con_direccion_predio", 'on');
	$this->sc_field_readonly("con_toma_administrativa", 'on');
	$this->sc_field_readonly("con_toma_operativa", 'on');
	$this->sc_field_readonly("con_condicion_contrato", 'on');
	$this->sc_field_readonly("con_ruta", 'on');
	$this->sc_field_readonly("con_numero_corte", 'on');
	$this->sc_field_readonly("con_tipo_servicio", 'on');
	$this->sc_field_readonly("con_numero_medidor", 'on');
	$this->sc_field_readonly("con_maxima_lectura", 'on');
	$this->sc_field_readonly("con_lectura_actual", 'on');
	$this->sc_field_readonly("con_fecha_lectura", 'on');
	$this->sc_field_readonly("con_fecha_instalacion", 'on');
	
	$this->sc_field_readonly("con_observaciones", 'on');
	$this->sc_field_readonly("con_abono", 'on');
	$this->sc_field_readonly("con_plazo", 'on');
	
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_con_canton != $this->con_canton || (isset($bFlagRead_con_canton) && $bFlagRead_con_canton)))
    {
        $this->ajax_return_values_con_canton(true);
    }
    if (($original_con_cedula != $this->con_cedula || (isset($bFlagRead_con_cedula) && $bFlagRead_con_cedula)))
    {
        $this->ajax_return_values_con_cedula(true);
    }
    if (($original_con_celular != $this->con_celular || (isset($bFlagRead_con_celular) && $bFlagRead_con_celular)))
    {
        $this->ajax_return_values_con_celular(true);
    }
    if (($original_con_comunidad != $this->con_comunidad || (isset($bFlagRead_con_comunidad) && $bFlagRead_con_comunidad)))
    {
        $this->ajax_return_values_con_comunidad(true);
    }
    if (($original_con_condicion_contrato != $this->con_condicion_contrato || (isset($bFlagRead_con_condicion_contrato) && $bFlagRead_con_condicion_contrato)))
    {
        $this->ajax_return_values_con_condicion_contrato(true);
    }
    if (($original_con_correo != $this->con_correo || (isset($bFlagRead_con_correo) && $bFlagRead_con_correo)))
    {
        $this->ajax_return_values_con_correo(true);
    }
    if (($original_con_direccion_predio != $this->con_direccion_predio || (isset($bFlagRead_con_direccion_predio) && $bFlagRead_con_direccion_predio)))
    {
        $this->ajax_return_values_con_direccion_predio(true);
    }
    if (($original_con_direccion_propietario != $this->con_direccion_propietario || (isset($bFlagRead_con_direccion_propietario) && $bFlagRead_con_direccion_propietario)))
    {
        $this->ajax_return_values_con_direccion_propietario(true);
    }
    if (($original_con_estado != $this->con_estado || (isset($bFlagRead_con_estado) && $bFlagRead_con_estado)))
    {
        $this->ajax_return_values_con_estado(true);
    }
    if (($original_con_fecha_instalacion != $this->con_fecha_instalacion || (isset($bFlagRead_con_fecha_instalacion) && $bFlagRead_con_fecha_instalacion)))
    {
        $this->ajax_return_values_con_fecha_instalacion(true);
    }
    if (($original_con_fecha_lectura != $this->con_fecha_lectura || (isset($bFlagRead_con_fecha_lectura) && $bFlagRead_con_fecha_lectura)))
    {
        $this->ajax_return_values_con_fecha_lectura(true);
    }
    if (($original_con_lectura_actual != $this->con_lectura_actual || (isset($bFlagRead_con_lectura_actual) && $bFlagRead_con_lectura_actual)))
    {
        $this->ajax_return_values_con_lectura_actual(true);
    }
    if (($original_con_maxima_lectura != $this->con_maxima_lectura || (isset($bFlagRead_con_maxima_lectura) && $bFlagRead_con_maxima_lectura)))
    {
        $this->ajax_return_values_con_maxima_lectura(true);
    }
    if (($original_con_nombre != $this->con_nombre || (isset($bFlagRead_con_nombre) && $bFlagRead_con_nombre)))
    {
        $this->ajax_return_values_con_nombre(true);
    }
    if (($original_con_numero_censo != $this->con_numero_censo || (isset($bFlagRead_con_numero_censo) && $bFlagRead_con_numero_censo)))
    {
        $this->ajax_return_values_con_numero_censo(true);
    }
    if (($original_con_numero_corte != $this->con_numero_corte || (isset($bFlagRead_con_numero_corte) && $bFlagRead_con_numero_corte)))
    {
        $this->ajax_return_values_con_numero_corte(true);
    }
    if (($original_con_numero_medidor != $this->con_numero_medidor || (isset($bFlagRead_con_numero_medidor) && $bFlagRead_con_numero_medidor)))
    {
        $this->ajax_return_values_con_numero_medidor(true);
    }
    if (($original_con_observaciones != $this->con_observaciones || (isset($bFlagRead_con_observaciones) && $bFlagRead_con_observaciones)))
    {
        $this->ajax_return_values_con_observaciones(true);
    }
    if (($original_con_pais != $this->con_pais || (isset($bFlagRead_con_pais) && $bFlagRead_con_pais)))
    {
        $this->ajax_return_values_con_pais(true);
    }
    if (($original_con_parroquia != $this->con_parroquia || (isset($bFlagRead_con_parroquia) && $bFlagRead_con_parroquia)))
    {
        $this->ajax_return_values_con_parroquia(true);
    }
    if (($original_con_propietario != $this->con_propietario || (isset($bFlagRead_con_propietario) && $bFlagRead_con_propietario)))
    {
        $this->ajax_return_values_con_propietario(true);
    }
    if (($original_con_provincia != $this->con_provincia || (isset($bFlagRead_con_provincia) && $bFlagRead_con_provincia)))
    {
        $this->ajax_return_values_con_provincia(true);
    }
    if (($original_con_ruta != $this->con_ruta || (isset($bFlagRead_con_ruta) && $bFlagRead_con_ruta)))
    {
        $this->ajax_return_values_con_ruta(true);
    }
    if (($original_con_sector != $this->con_sector || (isset($bFlagRead_con_sector) && $bFlagRead_con_sector)))
    {
        $this->ajax_return_values_con_sector(true);
    }
    if (($original_con_telefono != $this->con_telefono || (isset($bFlagRead_con_telefono) && $bFlagRead_con_telefono)))
    {
        $this->ajax_return_values_con_telefono(true);
    }
    if (($original_con_tipo_contrato != $this->con_tipo_contrato || (isset($bFlagRead_con_tipo_contrato) && $bFlagRead_con_tipo_contrato)))
    {
        $this->ajax_return_values_con_tipo_contrato(true);
    }
    if (($original_con_tipo_servicio != $this->con_tipo_servicio || (isset($bFlagRead_con_tipo_servicio) && $bFlagRead_con_tipo_servicio)))
    {
        $this->ajax_return_values_con_tipo_servicio(true);
    }
    if (($original_con_toma_administrativa != $this->con_toma_administrativa || (isset($bFlagRead_con_toma_administrativa) && $bFlagRead_con_toma_administrativa)))
    {
        $this->ajax_return_values_con_toma_administrativa(true);
    }
    if (($original_con_toma_operativa != $this->con_toma_operativa || (isset($bFlagRead_con_toma_operativa) && $bFlagRead_con_toma_operativa)))
    {
        $this->ajax_return_values_con_toma_operativa(true);
    }
}
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off'; 
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
      $this->con_total_a_pagar = str_replace($sc_parm1, $sc_parm2, $this->con_total_a_pagar); 
      $this->con_abono = str_replace($sc_parm1, $sc_parm2, $this->con_abono); 
      $this->con_saldo_pagar = str_replace($sc_parm1, $sc_parm2, $this->con_saldo_pagar); 
      $this->con_valor_cuota = str_replace($sc_parm1, $sc_parm2, $this->con_valor_cuota); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->con_total_a_pagar = "'" . $this->con_total_a_pagar . "'";
      $this->con_abono = "'" . $this->con_abono . "'";
      $this->con_saldo_pagar = "'" . $this->con_saldo_pagar . "'";
      $this->con_valor_cuota = "'" . $this->con_valor_cuota . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->con_total_a_pagar = str_replace("'", "", $this->con_total_a_pagar); 
      $this->con_abono = str_replace("'", "", $this->con_abono); 
      $this->con_saldo_pagar = str_replace("'", "", $this->con_saldo_pagar); 
      $this->con_valor_cuota = str_replace("'", "", $this->con_valor_cuota); 
   } 
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']))
          {
               $sc_where_pos = " WHERE ((con_id < $this->con_id))";
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
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->con_id)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = '';

   }
   function return_after_insert()
   {
      global $sc_where;
      $sc_where_pos = " WHERE ((con_id < $this->con_id))";
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
      if ('' != $this->con_id)
      {
          $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count;
          $rsc = $this->Db->Execute($nmgp_sel_count);
          if ($rsc === false && !$rsc->EOF)
          {
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
              exit;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['reg_start'] = $rsc->fields[0];
          $rsc->Close();
      }
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
      if (!isset($this->con_usuario_instala)){$this->con_usuario_instala =  $_SESSION['Igtech_SesionLogin'];}  
      if ('incluir' == $this->nmgp_opcao && empty($this->con_usuario)) {$this->con_usuario = "" . $_SESSION['Igtech_SesionLogin'] . ""; $NM_val_null[] = "con_usuario";}  
      if ('incluir' == $this->nmgp_opcao) { $this->con_terminal = $_SERVER['REMOTE_ADDR']; } 
      if (('alterar' == $this->nmgp_opcao || 'igual' == $this->nmgp_opcao) && empty($this->con_usuario_instala)){$this->con_usuario_instala = "" . $_SESSION['Igtech_SesionLogin'] . ""; $NM_val_null[] = "con_usuario_instala";}  
      $NM_val_form['con_motivo_anulacion'] = $this->con_motivo_anulacion;
      $NM_val_form['con_fecha'] = $this->con_fecha;
      $NM_val_form['con_sino'] = $this->con_sino;
      $NM_val_form['con_id'] = $this->con_id;
      $NM_val_form['con_numero_contrato'] = $this->con_numero_contrato;
      $NM_val_form['con_tipo_contrato'] = $this->con_tipo_contrato;
      $NM_val_form['con_propietario'] = $this->con_propietario;
      $NM_val_form['con_nombre'] = $this->con_nombre;
      $NM_val_form['con_cedula'] = $this->con_cedula;
      $NM_val_form['con_telefono'] = $this->con_telefono;
      $NM_val_form['con_celular'] = $this->con_celular;
      $NM_val_form['con_direccion_propietario'] = $this->con_direccion_propietario;
      $NM_val_form['con_correo'] = $this->con_correo;
      $NM_val_form['con_estado'] = $this->con_estado;
      $NM_val_form['con_pais'] = $this->con_pais;
      $NM_val_form['con_provincia'] = $this->con_provincia;
      $NM_val_form['con_canton'] = $this->con_canton;
      $NM_val_form['con_parroquia'] = $this->con_parroquia;
      $NM_val_form['con_comunidad'] = $this->con_comunidad;
      $NM_val_form['con_sector'] = $this->con_sector;
      $NM_val_form['con_numero_censo'] = $this->con_numero_censo;
      $NM_val_form['con_direccion_predio'] = $this->con_direccion_predio;
      $NM_val_form['con_toma_administrativa'] = $this->con_toma_administrativa;
      $NM_val_form['con_toma_operativa'] = $this->con_toma_operativa;
      $NM_val_form['con_condicion_contrato'] = $this->con_condicion_contrato;
      $NM_val_form['con_tipo_servicio'] = $this->con_tipo_servicio;
      $NM_val_form['con_ruta'] = $this->con_ruta;
      $NM_val_form['con_orden_lecturas'] = $this->con_orden_lecturas;
      $NM_val_form['con_numero_corte'] = $this->con_numero_corte;
      $NM_val_form['con_fecha_instalacion'] = $this->con_fecha_instalacion;
      $NM_val_form['con_numero_medidor'] = $this->con_numero_medidor;
      $NM_val_form['con_maxima_lectura'] = $this->con_maxima_lectura;
      $NM_val_form['con_lectura_actual'] = $this->con_lectura_actual;
      $NM_val_form['con_fecha_lectura'] = $this->con_fecha_lectura;
      $NM_val_form['con_observaciones'] = $this->con_observaciones;
      $NM_val_form['con_usuario_instala'] = $this->con_usuario_instala;
      $NM_val_form['con_empresa'] = $this->con_empresa;
      $NM_val_form['con_usuario'] = $this->con_usuario;
      $NM_val_form['con_terminal'] = $this->con_terminal;
      $NM_val_form['con_total_a_pagar'] = $this->con_total_a_pagar;
      $NM_val_form['con_abono'] = $this->con_abono;
      $NM_val_form['con_plazo'] = $this->con_plazo;
      $NM_val_form['con_saldo_pagar'] = $this->con_saldo_pagar;
      $NM_val_form['con_valor_cuota'] = $this->con_valor_cuota;
      if ($this->con_id === "" || is_null($this->con_id))  
      { 
          $this->con_id = 0;
      } 
      if ($this->con_propietario === "" || is_null($this->con_propietario))  
      { 
          $this->con_propietario = 0;
          $this->sc_force_zero[] = 'con_propietario';
      } 
      if ($this->con_pais === "" || is_null($this->con_pais))  
      { 
          $this->con_pais = 0;
          $this->sc_force_zero[] = 'con_pais';
      } 
      if ($this->con_provincia === "" || is_null($this->con_provincia))  
      { 
          $this->con_provincia = 0;
          $this->sc_force_zero[] = 'con_provincia';
      } 
      if ($this->con_canton === "" || is_null($this->con_canton))  
      { 
          $this->con_canton = 0;
          $this->sc_force_zero[] = 'con_canton';
      } 
      if ($this->con_parroquia === "" || is_null($this->con_parroquia))  
      { 
          $this->con_parroquia = 0;
          $this->sc_force_zero[] = 'con_parroquia';
      } 
      if ($this->con_toma_administrativa === "" || is_null($this->con_toma_administrativa))  
      { 
          $this->con_toma_administrativa = 0;
          $this->sc_force_zero[] = 'con_toma_administrativa';
      } 
      if ($this->con_toma_operativa === "" || is_null($this->con_toma_operativa))  
      { 
          $this->con_toma_operativa = 0;
          $this->sc_force_zero[] = 'con_toma_operativa';
      } 
      if ($this->con_tipo_servicio === "" || is_null($this->con_tipo_servicio))  
      { 
          $this->con_tipo_servicio = 0;
          $this->sc_force_zero[] = 'con_tipo_servicio';
      } 
      if ($this->con_condicion_contrato === "" || is_null($this->con_condicion_contrato))  
      { 
          $this->con_condicion_contrato = 0;
          $this->sc_force_zero[] = 'con_condicion_contrato';
      } 
      if ($this->con_tipo_contrato === "" || is_null($this->con_tipo_contrato))  
      { 
          $this->con_tipo_contrato = 0;
          $this->sc_force_zero[] = 'con_tipo_contrato';
      } 
      if ($this->con_total_a_pagar === "" || is_null($this->con_total_a_pagar))  
      { 
          $this->con_total_a_pagar = 0;
          $this->sc_force_zero[] = 'con_total_a_pagar';
      } 
      if ($this->con_abono === "" || is_null($this->con_abono))  
      { 
          $this->con_abono = 0;
          $this->sc_force_zero[] = 'con_abono';
      } 
      if ($this->con_plazo === "" || is_null($this->con_plazo))  
      { 
          $this->con_plazo = 0;
          $this->sc_force_zero[] = 'con_plazo';
      } 
      if ($this->con_maxima_lectura === "" || is_null($this->con_maxima_lectura))  
      { 
          $this->con_maxima_lectura = 0;
          $this->sc_force_zero[] = 'con_maxima_lectura';
      } 
      if ($this->con_lectura_actual === "" || is_null($this->con_lectura_actual))  
      { 
          $this->con_lectura_actual = 0;
          $this->sc_force_zero[] = 'con_lectura_actual';
      } 
      if ($this->con_ruta === "" || is_null($this->con_ruta))  
      { 
          $this->con_ruta = 0;
          $this->sc_force_zero[] = 'con_ruta';
      } 
      if ($this->con_orden_lecturas === "" || is_null($this->con_orden_lecturas))  
      { 
          $this->con_orden_lecturas = 0;
          $this->sc_force_zero[] = 'con_orden_lecturas';
      } 
      if ($this->con_numero_corte === "" || is_null($this->con_numero_corte))  
      { 
          $this->con_numero_corte = 0;
          $this->sc_force_zero[] = 'con_numero_corte';
      } 
      if ($this->con_comunidad === "" || is_null($this->con_comunidad))  
      { 
          $this->con_comunidad = 0;
          $this->sc_force_zero[] = 'con_comunidad';
      } 
      if ($this->con_sector === "" || is_null($this->con_sector))  
      { 
          $this->con_sector = 0;
          $this->sc_force_zero[] = 'con_sector';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->con_empresa_before_qstr = $this->con_empresa;
          $this->con_empresa = substr($this->Db->qstr($this->con_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_empresa);
          }
          if ($this->con_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_empresa = "null"; 
              $NM_val_null[] = "con_empresa";
          } 
          $this->con_direccion_predio_before_qstr = $this->con_direccion_predio;
          $this->con_direccion_predio = substr($this->Db->qstr($this->con_direccion_predio), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_direccion_predio = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_direccion_predio);
          }
          if ($this->con_direccion_predio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_direccion_predio = "null"; 
              $NM_val_null[] = "con_direccion_predio";
          } 
          $this->con_numero_medidor_before_qstr = $this->con_numero_medidor;
          $this->con_numero_medidor = substr($this->Db->qstr($this->con_numero_medidor), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_numero_medidor = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_numero_medidor);
          }
          if ($this->con_numero_medidor == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_numero_medidor = "null"; 
              $NM_val_null[] = "con_numero_medidor";
          } 
          $this->con_usuario_before_qstr = $this->con_usuario;
          $this->con_usuario = substr($this->Db->qstr($this->con_usuario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_usuario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_usuario);
          }
          if ($this->con_usuario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_usuario = "null"; 
              $NM_val_null[] = "con_usuario";
          } 
          $this->con_fecha_before_qstr = $this->con_fecha;
          $this->con_fecha = substr($this->Db->qstr($this->con_fecha), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_fecha = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_fecha);
          }
          if ($this->con_fecha == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_fecha = "null"; 
              $NM_val_null[] = "con_fecha";
          } 
          $this->con_terminal_before_qstr = $this->con_terminal;
          $this->con_terminal = substr($this->Db->qstr($this->con_terminal), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_terminal = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_terminal);
          }
          if ($this->con_terminal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_terminal = "null"; 
              $NM_val_null[] = "con_terminal";
          } 
          $this->con_estado_before_qstr = $this->con_estado;
          $this->con_estado = substr($this->Db->qstr($this->con_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_estado);
          }
          if ($this->con_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_estado = "null"; 
              $NM_val_null[] = "con_estado";
          } 
          $this->con_motivo_anulacion_before_qstr = $this->con_motivo_anulacion;
          $this->con_motivo_anulacion = substr($this->Db->qstr($this->con_motivo_anulacion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_motivo_anulacion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_motivo_anulacion);
          }
          if ($this->con_motivo_anulacion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_motivo_anulacion = "null"; 
              $NM_val_null[] = "con_motivo_anulacion";
          } 
          if ($this->con_fecha_instalacion == "")  
          { 
              $this->con_fecha_instalacion = "null"; 
              $NM_val_null[] = "con_fecha_instalacion";
          } 
          $this->con_observaciones_before_qstr = $this->con_observaciones;
          $this->con_observaciones = substr($this->Db->qstr($this->con_observaciones), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_observaciones = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_observaciones);
          }
          if ($this->con_observaciones == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_observaciones = "null"; 
              $NM_val_null[] = "con_observaciones";
          } 
          $this->con_usuario_instala_before_qstr = $this->con_usuario_instala;
          $this->con_usuario_instala = substr($this->Db->qstr($this->con_usuario_instala), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_usuario_instala = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_usuario_instala);
          }
          if ($this->con_usuario_instala == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_usuario_instala = "null"; 
              $NM_val_null[] = "con_usuario_instala";
          } 
          $this->con_numero_contrato_before_qstr = $this->con_numero_contrato;
          $this->con_numero_contrato = substr($this->Db->qstr($this->con_numero_contrato), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_numero_contrato = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_numero_contrato);
          }
          if ($this->con_numero_contrato == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_numero_contrato = "null"; 
              $NM_val_null[] = "con_numero_contrato";
          } 
          if ($this->con_fecha_lectura == "")  
          { 
              $this->con_fecha_lectura = "null"; 
              $NM_val_null[] = "con_fecha_lectura";
          } 
          $this->con_sino_before_qstr = $this->con_sino;
          $this->con_sino = substr($this->Db->qstr($this->con_sino), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_sino = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_sino);
          }
          if ($this->con_sino == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_sino = "null"; 
              $NM_val_null[] = "con_sino";
          } 
          $this->con_numero_censo_before_qstr = $this->con_numero_censo;
          $this->con_numero_censo = substr($this->Db->qstr($this->con_numero_censo), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->con_numero_censo = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->con_numero_censo);
          }
          if ($this->con_numero_censo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->con_numero_censo = "null"; 
              $NM_val_null[] = "con_numero_censo";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_jap_anular_contrato_mob_pack_ajax_response();
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
              $this->con_fecha =  date('Y') . "-" . date('m')  . "-" . date('d') . " " . date('H') . ":" . date('i') . ":" . date('s');
              nm_conv_form_data_hora($this->con_fecha, "aaaa-mm-dd hh:ii:ss", "AAAA/MM/DD", array($this->field_config['con_fecha']['date_sep'], $this->field_config['con_fecha']['time_sep'])) ;  
              $NM_val_form['con_fecha'] = $this->con_fecha;
              $this->NM_ajax_changed['con_fecha'] = true;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = #$this->con_fecha#, con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = #$this->con_fecha_instalacion#, con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = #$this->con_fecha_lectura#, con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = '$this->con_fecha', con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = '$this->con_fecha', con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = '$this->con_fecha', con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = EXTEND('$this->con_fecha_instalacion', YEAR TO DAY), con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = EXTEND('$this->con_fecha_lectura', YEAR TO DAY), con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = '$this->con_fecha', con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = '$this->con_fecha', con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "con_propietario = $this->con_propietario, con_pais = $this->con_pais, con_provincia = $this->con_provincia, con_canton = $this->con_canton, con_parroquia = $this->con_parroquia, con_direccion_predio = '$this->con_direccion_predio', con_toma_administrativa = $this->con_toma_administrativa, con_toma_operativa = $this->con_toma_operativa, con_tipo_servicio = $this->con_tipo_servicio, con_condicion_contrato = $this->con_condicion_contrato, con_numero_medidor = '$this->con_numero_medidor', con_fecha = '$this->con_fecha', con_estado = '$this->con_estado', con_motivo_anulacion = '$this->con_motivo_anulacion', con_tipo_contrato = $this->con_tipo_contrato, con_fecha_instalacion = " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", con_observaciones = '$this->con_observaciones', con_usuario_instala = '$this->con_usuario_instala', con_numero_contrato = '$this->con_numero_contrato', con_maxima_lectura = $this->con_maxima_lectura, con_lectura_actual = $this->con_lectura_actual, con_fecha_lectura = " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", con_ruta = $this->con_ruta, con_sino = '$this->con_sino', con_orden_lecturas = $this->con_orden_lecturas, con_numero_corte = $this->con_numero_corte, con_comunidad = $this->con_comunidad, con_sector = $this->con_sector, con_numero_censo = '$this->con_numero_censo'"; 
              } 
              if (isset($NM_val_form['con_empresa']) && $NM_val_form['con_empresa'] != $this->nmgp_dados_select['con_empresa']) 
              { 
                  $SC_fields_update[] = "con_empresa = '$this->con_empresa'"; 
              } 
              if (isset($NM_val_form['con_usuario']) && $NM_val_form['con_usuario'] != $this->nmgp_dados_select['con_usuario']) 
              { 
                  $SC_fields_update[] = "con_usuario = '$this->con_usuario'"; 
              } 
              if (isset($NM_val_form['con_terminal']) && $NM_val_form['con_terminal'] != $this->nmgp_dados_select['con_terminal']) 
              { 
                  $SC_fields_update[] = "con_terminal = '$this->con_terminal'"; 
              } 
              if (isset($NM_val_form['con_total_a_pagar']) && $NM_val_form['con_total_a_pagar'] != $this->nmgp_dados_select['con_total_a_pagar']) 
              { 
                  $SC_fields_update[] = "con_total_a_pagar = $this->con_total_a_pagar"; 
              } 
              if (isset($NM_val_form['con_abono']) && $NM_val_form['con_abono'] != $this->nmgp_dados_select['con_abono']) 
              { 
                  $SC_fields_update[] = "con_abono = $this->con_abono"; 
              } 
              if (isset($NM_val_form['con_plazo']) && $NM_val_form['con_plazo'] != $this->nmgp_dados_select['con_plazo']) 
              { 
                  $SC_fields_update[] = "con_plazo = $this->con_plazo"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE con_id = $this->con_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE con_id = $this->con_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE con_id = $this->con_id ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE con_id = $this->con_id ";  
              }  
              else  
              {
                  $comando .= " WHERE con_id = $this->con_id ";  
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
                                  form_jap_anular_contrato_mob_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->con_empresa = $this->con_empresa_before_qstr;
              $this->con_direccion_predio = $this->con_direccion_predio_before_qstr;
              $this->con_numero_medidor = $this->con_numero_medidor_before_qstr;
              $this->con_usuario = $this->con_usuario_before_qstr;
              $this->con_fecha = $this->con_fecha_before_qstr;
              $this->con_terminal = $this->con_terminal_before_qstr;
              $this->con_estado = $this->con_estado_before_qstr;
              $this->con_motivo_anulacion = $this->con_motivo_anulacion_before_qstr;
              $this->con_observaciones = $this->con_observaciones_before_qstr;
              $this->con_usuario_instala = $this->con_usuario_instala_before_qstr;
              $this->con_numero_contrato = $this->con_numero_contrato_before_qstr;
              $this->con_sino = $this->con_sino_before_qstr;
              $this->con_numero_censo = $this->con_numero_censo_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['con_id'])) { $this->con_id = $NM_val_form['con_id']; }
              elseif (isset($this->con_id)) { $this->nm_limpa_alfa($this->con_id); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_propietario'])) { $this->con_propietario = $NM_val_form['con_propietario']; }
              elseif (isset($this->con_propietario)) { $this->nm_limpa_alfa($this->con_propietario); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_pais'])) { $this->con_pais = $NM_val_form['con_pais']; }
              elseif (isset($this->con_pais)) { $this->nm_limpa_alfa($this->con_pais); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_provincia'])) { $this->con_provincia = $NM_val_form['con_provincia']; }
              elseif (isset($this->con_provincia)) { $this->nm_limpa_alfa($this->con_provincia); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_canton'])) { $this->con_canton = $NM_val_form['con_canton']; }
              elseif (isset($this->con_canton)) { $this->nm_limpa_alfa($this->con_canton); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_parroquia'])) { $this->con_parroquia = $NM_val_form['con_parroquia']; }
              elseif (isset($this->con_parroquia)) { $this->nm_limpa_alfa($this->con_parroquia); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_direccion_predio'])) { $this->con_direccion_predio = $NM_val_form['con_direccion_predio']; }
              elseif (isset($this->con_direccion_predio)) { $this->nm_limpa_alfa($this->con_direccion_predio); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_toma_administrativa'])) { $this->con_toma_administrativa = $NM_val_form['con_toma_administrativa']; }
              elseif (isset($this->con_toma_administrativa)) { $this->nm_limpa_alfa($this->con_toma_administrativa); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_toma_operativa'])) { $this->con_toma_operativa = $NM_val_form['con_toma_operativa']; }
              elseif (isset($this->con_toma_operativa)) { $this->nm_limpa_alfa($this->con_toma_operativa); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_tipo_servicio'])) { $this->con_tipo_servicio = $NM_val_form['con_tipo_servicio']; }
              elseif (isset($this->con_tipo_servicio)) { $this->nm_limpa_alfa($this->con_tipo_servicio); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_condicion_contrato'])) { $this->con_condicion_contrato = $NM_val_form['con_condicion_contrato']; }
              elseif (isset($this->con_condicion_contrato)) { $this->nm_limpa_alfa($this->con_condicion_contrato); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_numero_medidor'])) { $this->con_numero_medidor = $NM_val_form['con_numero_medidor']; }
              elseif (isset($this->con_numero_medidor)) { $this->nm_limpa_alfa($this->con_numero_medidor); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_fecha'])) { $this->con_fecha = $NM_val_form['con_fecha']; }
              elseif (isset($this->con_fecha)) { $this->nm_limpa_alfa($this->con_fecha); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_estado'])) { $this->con_estado = $NM_val_form['con_estado']; }
              elseif (isset($this->con_estado)) { $this->nm_limpa_alfa($this->con_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_motivo_anulacion'])) { $this->con_motivo_anulacion = $NM_val_form['con_motivo_anulacion']; }
              elseif (isset($this->con_motivo_anulacion)) { $this->nm_limpa_alfa($this->con_motivo_anulacion); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_tipo_contrato'])) { $this->con_tipo_contrato = $NM_val_form['con_tipo_contrato']; }
              elseif (isset($this->con_tipo_contrato)) { $this->nm_limpa_alfa($this->con_tipo_contrato); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_observaciones'])) { $this->con_observaciones = $NM_val_form['con_observaciones']; }
              elseif (isset($this->con_observaciones)) { $this->nm_limpa_alfa($this->con_observaciones); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_usuario_instala'])) { $this->con_usuario_instala = $NM_val_form['con_usuario_instala']; }
              elseif (isset($this->con_usuario_instala)) { $this->nm_limpa_alfa($this->con_usuario_instala); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_numero_contrato'])) { $this->con_numero_contrato = $NM_val_form['con_numero_contrato']; }
              elseif (isset($this->con_numero_contrato)) { $this->nm_limpa_alfa($this->con_numero_contrato); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_maxima_lectura'])) { $this->con_maxima_lectura = $NM_val_form['con_maxima_lectura']; }
              elseif (isset($this->con_maxima_lectura)) { $this->nm_limpa_alfa($this->con_maxima_lectura); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_lectura_actual'])) { $this->con_lectura_actual = $NM_val_form['con_lectura_actual']; }
              elseif (isset($this->con_lectura_actual)) { $this->nm_limpa_alfa($this->con_lectura_actual); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_ruta'])) { $this->con_ruta = $NM_val_form['con_ruta']; }
              elseif (isset($this->con_ruta)) { $this->nm_limpa_alfa($this->con_ruta); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_sino'])) { $this->con_sino = $NM_val_form['con_sino']; }
              elseif (isset($this->con_sino)) { $this->nm_limpa_alfa($this->con_sino); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_orden_lecturas'])) { $this->con_orden_lecturas = $NM_val_form['con_orden_lecturas']; }
              elseif (isset($this->con_orden_lecturas)) { $this->nm_limpa_alfa($this->con_orden_lecturas); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_numero_corte'])) { $this->con_numero_corte = $NM_val_form['con_numero_corte']; }
              elseif (isset($this->con_numero_corte)) { $this->nm_limpa_alfa($this->con_numero_corte); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_comunidad'])) { $this->con_comunidad = $NM_val_form['con_comunidad']; }
              elseif (isset($this->con_comunidad)) { $this->nm_limpa_alfa($this->con_comunidad); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_sector'])) { $this->con_sector = $NM_val_form['con_sector']; }
              elseif (isset($this->con_sector)) { $this->nm_limpa_alfa($this->con_sector); }
              if     (isset($NM_val_form) && isset($NM_val_form['con_numero_censo'])) { $this->con_numero_censo = $NM_val_form['con_numero_censo']; }
              elseif (isset($this->con_numero_censo)) { $this->nm_limpa_alfa($this->con_numero_censo); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('con_motivo_anulacion', 'con_fecha', 'con_sino', 'con_id', 'con_numero_contrato', 'con_tipo_contrato', 'con_propietario', 'con_nombre', 'con_cedula', 'con_telefono', 'con_celular', 'con_direccion_propietario', 'con_correo', 'con_estado', 'con_pais', 'con_provincia', 'con_canton', 'con_parroquia', 'con_comunidad', 'con_sector', 'con_numero_censo', 'con_direccion_predio', 'con_toma_administrativa', 'con_toma_operativa', 'con_condicion_contrato', 'con_tipo_servicio', 'con_ruta', 'con_orden_lecturas', 'con_numero_corte', 'con_fecha_instalacion', 'con_numero_medidor', 'con_maxima_lectura', 'con_lectura_actual', 'con_fecha_lectura', 'con_observaciones', 'con_usuario_instala'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(con_id) from " . $this->Ini->nm_tabela; 
          $comando = "select max(con_id) from " . $this->Ini->nm_tabela; 
          $rs = $this->Db->Execute($comando); 
          if ($rs === false && !$rs->EOF)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
              $this->NM_rollback_db(); 
              if ($this->NM_ajax_flag)
              {
                  form_jap_anular_contrato_mob_pack_ajax_response();
              }
              exit; 
          }  
          $this->con_id_before_qstr = $this->con_id = $rs->fields[0] + 1;
          $rs->Close(); 
              $this->con_fecha =  date('Y') . "-" . date('m')  . "-" . date('d') . " " . date('H') . ":" . date('i') . ":" . date('s');
              nm_conv_form_data_hora($this->con_fecha, "aaaa-mm-dd hh:ii:ss", "AAAA/MM/DD", array($this->field_config['con_fecha']['date_sep'], $this->field_config['con_fecha']['time_sep'])) ;  
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_jap_anular_contrato_mob_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES ($this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', #$this->con_fecha#, '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, #$this->con_fecha_instalacion#, '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, #$this->con_fecha_lectura#, $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, EXTEND('$this->con_fecha_instalacion', YEAR TO DAY), '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, EXTEND('$this->con_fecha_lectura', YEAR TO DAY), $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo) VALUES (" . $NM_seq_auto . "$this->con_id, '$this->con_empresa', $this->con_propietario, $this->con_pais, $this->con_provincia, $this->con_canton, $this->con_parroquia, '$this->con_direccion_predio', $this->con_toma_administrativa, $this->con_toma_operativa, $this->con_tipo_servicio, $this->con_condicion_contrato, '$this->con_numero_medidor', '$this->con_usuario', '$this->con_fecha', '$this->con_terminal', '$this->con_estado', '$this->con_motivo_anulacion', $this->con_tipo_contrato, $this->con_total_a_pagar, $this->con_abono, $this->con_plazo, " . $this->Ini->date_delim . $this->con_fecha_instalacion . $this->Ini->date_delim1 . ", '$this->con_observaciones', '$this->con_usuario_instala', '$this->con_numero_contrato', $this->con_maxima_lectura, $this->con_lectura_actual, " . $this->Ini->date_delim . $this->con_fecha_lectura . $this->Ini->date_delim1 . ", $this->con_ruta, '$this->con_sino', $this->con_orden_lecturas, $this->con_numero_corte, $this->con_comunidad, $this->con_sector, '$this->con_numero_censo')"; 
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
                              form_jap_anular_contrato_mob_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->con_empresa = $this->con_empresa_before_qstr;
              $this->con_direccion_predio = $this->con_direccion_predio_before_qstr;
              $this->con_numero_medidor = $this->con_numero_medidor_before_qstr;
              $this->con_usuario = $this->con_usuario_before_qstr;
              $this->con_fecha = $this->con_fecha_before_qstr;
              $this->con_terminal = $this->con_terminal_before_qstr;
              $this->con_estado = $this->con_estado_before_qstr;
              $this->con_motivo_anulacion = $this->con_motivo_anulacion_before_qstr;
              $this->con_observaciones = $this->con_observaciones_before_qstr;
              $this->con_usuario_instala = $this->con_usuario_instala_before_qstr;
              $this->con_numero_contrato = $this->con_numero_contrato_before_qstr;
              $this->con_sino = $this->con_sino_before_qstr;
              $this->con_numero_censo = $this->con_numero_censo_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->con_empresa = $this->con_empresa_before_qstr;
              $this->con_direccion_predio = $this->con_direccion_predio_before_qstr;
              $this->con_numero_medidor = $this->con_numero_medidor_before_qstr;
              $this->con_usuario = $this->con_usuario_before_qstr;
              $this->con_fecha = $this->con_fecha_before_qstr;
              $this->con_terminal = $this->con_terminal_before_qstr;
              $this->con_estado = $this->con_estado_before_qstr;
              $this->con_motivo_anulacion = $this->con_motivo_anulacion_before_qstr;
              $this->con_observaciones = $this->con_observaciones_before_qstr;
              $this->con_usuario_instala = $this->con_usuario_instala_before_qstr;
              $this->con_numero_contrato = $this->con_numero_contrato_before_qstr;
              $this->con_sino = $this->con_sino_before_qstr;
              $this->con_numero_censo = $this->con_numero_censo_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['anular'] = "on";
              $this->return_after_insert();
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->con_id = substr($this->Db->qstr($this->con_id), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where con_id = $this->con_id "); 
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
                          form_jap_anular_contrato_mob_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['parms'] = "con_id?#?$this->con_id?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->con_id = null === $this->con_id ? null : substr($this->Db->qstr($this->con_id), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, str_replace (convert(char(10),con_fecha_instalacion,102), '.', '-') + ' ' + convert(char(8),con_fecha_instalacion,20), con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, str_replace (convert(char(10),con_fecha_lectura,102), '.', '-') + ' ' + convert(char(8),con_fecha_lectura,20), con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, convert(char(23),con_fecha_instalacion,121), con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, convert(char(23),con_fecha_lectura,121), con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, EXTEND(con_fecha_instalacion, YEAR TO DAY), con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, EXTEND(con_fecha_lectura, YEAR TO DAY), con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT con_id, con_empresa, con_propietario, con_pais, con_provincia, con_canton, con_parroquia, con_direccion_predio, con_toma_administrativa, con_toma_operativa, con_tipo_servicio, con_condicion_contrato, con_numero_medidor, con_usuario, con_fecha, con_terminal, con_estado, con_motivo_anulacion, con_tipo_contrato, con_total_a_pagar, con_abono, con_plazo, con_fecha_instalacion, con_observaciones, con_usuario_instala, con_numero_contrato, con_maxima_lectura, con_lectura_actual, con_fecha_lectura, con_ruta, con_sino, con_orden_lecturas, con_numero_corte, con_comunidad, con_sector, con_numero_censo from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "con_id = $this->con_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "con_id = $this->con_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "con_id = $this->con_id"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "con_id = $this->con_id"; 
              }  
              else  
              {
                  $aWhere[] = "con_id = $this->con_id"; 
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
          $sc_order_by = "con_id";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "insert" || $this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['select'] = ""; 
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['anular'] = $this->nmgp_botoes['anular'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter'] = true;
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
              $this->NM_ajax_info['buttonDisplay']['anular'] = $this->nmgp_botoes['anular'] = "off";
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
              $this->con_id = $rs->fields[0] ; 
              $this->nmgp_dados_select['con_id'] = $this->con_id;
              $this->con_empresa = $rs->fields[1] ; 
              $this->nmgp_dados_select['con_empresa'] = $this->con_empresa;
              $this->con_propietario = $rs->fields[2] ; 
              $this->nmgp_dados_select['con_propietario'] = $this->con_propietario;
              $this->con_pais = $rs->fields[3] ; 
              $this->nmgp_dados_select['con_pais'] = $this->con_pais;
              $this->con_provincia = $rs->fields[4] ; 
              $this->nmgp_dados_select['con_provincia'] = $this->con_provincia;
              $this->con_canton = $rs->fields[5] ; 
              $this->nmgp_dados_select['con_canton'] = $this->con_canton;
              $this->con_parroquia = $rs->fields[6] ; 
              $this->nmgp_dados_select['con_parroquia'] = $this->con_parroquia;
              $this->con_direccion_predio = $rs->fields[7] ; 
              $this->nmgp_dados_select['con_direccion_predio'] = $this->con_direccion_predio;
              $this->con_toma_administrativa = $rs->fields[8] ; 
              $this->nmgp_dados_select['con_toma_administrativa'] = $this->con_toma_administrativa;
              $this->con_toma_operativa = $rs->fields[9] ; 
              $this->nmgp_dados_select['con_toma_operativa'] = $this->con_toma_operativa;
              $this->con_tipo_servicio = $rs->fields[10] ; 
              $this->nmgp_dados_select['con_tipo_servicio'] = $this->con_tipo_servicio;
              $this->con_condicion_contrato = $rs->fields[11] ; 
              $this->nmgp_dados_select['con_condicion_contrato'] = $this->con_condicion_contrato;
              $this->con_numero_medidor = $rs->fields[12] ; 
              $this->nmgp_dados_select['con_numero_medidor'] = $this->con_numero_medidor;
              $this->con_usuario = $rs->fields[13] ; 
              $this->nmgp_dados_select['con_usuario'] = $this->con_usuario;
              $this->con_fecha = $rs->fields[14] ; 
              $this->nmgp_dados_select['con_fecha'] = $this->con_fecha;
              $this->con_terminal = $rs->fields[15] ; 
              $this->nmgp_dados_select['con_terminal'] = $this->con_terminal;
              $this->con_estado = $rs->fields[16] ; 
              $this->nmgp_dados_select['con_estado'] = $this->con_estado;
              $this->con_motivo_anulacion = $rs->fields[17] ; 
              $this->nmgp_dados_select['con_motivo_anulacion'] = $this->con_motivo_anulacion;
              $this->con_tipo_contrato = $rs->fields[18] ; 
              $this->nmgp_dados_select['con_tipo_contrato'] = $this->con_tipo_contrato;
              $this->con_total_a_pagar = $rs->fields[19] ; 
              $this->nmgp_dados_select['con_total_a_pagar'] = $this->con_total_a_pagar;
              $this->con_abono = $rs->fields[20] ; 
              $this->nmgp_dados_select['con_abono'] = $this->con_abono;
              $this->con_plazo = $rs->fields[21] ; 
              $this->nmgp_dados_select['con_plazo'] = $this->con_plazo;
              $this->con_fecha_instalacion = $rs->fields[22] ; 
              $this->nmgp_dados_select['con_fecha_instalacion'] = $this->con_fecha_instalacion;
              $this->con_observaciones = $rs->fields[23] ; 
              $this->nmgp_dados_select['con_observaciones'] = $this->con_observaciones;
              $this->con_usuario_instala = $rs->fields[24] ; 
              $this->nmgp_dados_select['con_usuario_instala'] = $this->con_usuario_instala;
              $this->con_numero_contrato = $rs->fields[25] ; 
              $this->nmgp_dados_select['con_numero_contrato'] = $this->con_numero_contrato;
              $this->con_maxima_lectura = $rs->fields[26] ; 
              $this->nmgp_dados_select['con_maxima_lectura'] = $this->con_maxima_lectura;
              $this->con_lectura_actual = $rs->fields[27] ; 
              $this->nmgp_dados_select['con_lectura_actual'] = $this->con_lectura_actual;
              $this->con_fecha_lectura = $rs->fields[28] ; 
              $this->nmgp_dados_select['con_fecha_lectura'] = $this->con_fecha_lectura;
              $this->con_ruta = $rs->fields[29] ; 
              $this->nmgp_dados_select['con_ruta'] = $this->con_ruta;
              $this->con_sino = $rs->fields[30] ; 
              $this->nmgp_dados_select['con_sino'] = $this->con_sino;
              $this->con_orden_lecturas = $rs->fields[31] ; 
              $this->nmgp_dados_select['con_orden_lecturas'] = $this->con_orden_lecturas;
              $this->con_numero_corte = $rs->fields[32] ; 
              $this->nmgp_dados_select['con_numero_corte'] = $this->con_numero_corte;
              $this->con_comunidad = $rs->fields[33] ; 
              $this->nmgp_dados_select['con_comunidad'] = $this->con_comunidad;
              $this->con_sector = $rs->fields[34] ; 
              $this->nmgp_dados_select['con_sector'] = $this->con_sector;
              $this->con_numero_censo = $rs->fields[35] ; 
              $this->nmgp_dados_select['con_numero_censo'] = $this->con_numero_censo;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->con_id = (string)$this->con_id; 
              $this->con_propietario = (string)$this->con_propietario; 
              $this->con_pais = (string)$this->con_pais; 
              $this->con_provincia = (string)$this->con_provincia; 
              $this->con_canton = (string)$this->con_canton; 
              $this->con_parroquia = (string)$this->con_parroquia; 
              $this->con_toma_administrativa = (string)$this->con_toma_administrativa; 
              $this->con_toma_operativa = (string)$this->con_toma_operativa; 
              $this->con_tipo_servicio = (string)$this->con_tipo_servicio; 
              $this->con_condicion_contrato = (string)$this->con_condicion_contrato; 
              $this->con_tipo_contrato = (string)$this->con_tipo_contrato; 
              $this->con_total_a_pagar = (string)$this->con_total_a_pagar; 
              $this->con_abono = (string)$this->con_abono; 
              $this->con_plazo = (string)$this->con_plazo; 
              $this->con_maxima_lectura = (string)$this->con_maxima_lectura; 
              $this->con_lectura_actual = (string)$this->con_lectura_actual; 
              $this->con_ruta = (string)$this->con_ruta; 
              $this->con_orden_lecturas = (string)$this->con_orden_lecturas; 
              $this->con_numero_corte = (string)$this->con_numero_corte; 
              $this->con_comunidad = (string)$this->con_comunidad; 
              $this->con_sector = (string)$this->con_sector; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['parms'] = "con_id?#?$this->con_id?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_select'] = $this->nmgp_dados_select;
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
              $this->con_id = "";  
              $this->nmgp_dados_form["con_id"] = $this->con_id;
              $this->con_empresa = "";  
              $this->nmgp_dados_form["con_empresa"] = $this->con_empresa;
              $this->con_propietario = "";  
              $this->nmgp_dados_form["con_propietario"] = $this->con_propietario;
              $this->con_pais = "";  
              $this->nmgp_dados_form["con_pais"] = $this->con_pais;
              $this->con_provincia = "";  
              $this->nmgp_dados_form["con_provincia"] = $this->con_provincia;
              $this->con_canton = "";  
              $this->nmgp_dados_form["con_canton"] = $this->con_canton;
              $this->con_parroquia = "";  
              $this->nmgp_dados_form["con_parroquia"] = $this->con_parroquia;
              $this->con_direccion_predio = "";  
              $this->nmgp_dados_form["con_direccion_predio"] = $this->con_direccion_predio;
              $this->con_toma_administrativa = "";  
              $this->nmgp_dados_form["con_toma_administrativa"] = $this->con_toma_administrativa;
              $this->con_toma_operativa = "";  
              $this->nmgp_dados_form["con_toma_operativa"] = $this->con_toma_operativa;
              $this->con_tipo_servicio = "";  
              $this->nmgp_dados_form["con_tipo_servicio"] = $this->con_tipo_servicio;
              $this->con_condicion_contrato = "";  
              $this->nmgp_dados_form["con_condicion_contrato"] = $this->con_condicion_contrato;
              $this->con_numero_medidor = "";  
              $this->nmgp_dados_form["con_numero_medidor"] = $this->con_numero_medidor;
              $this->con_usuario = "";  
              $this->nmgp_dados_form["con_usuario"] = $this->con_usuario;
              $this->con_fecha =  date('Y') . "-" . date('m')  . "-" . date('d');
              nm_conv_form_data($this->con_fecha, "aaaa-mm-dd", "AAAA/MM/DD", array($this->field_config['con_fecha']['date_sep'])) ;  
              $this->nmgp_dados_form["con_fecha"] = $this->con_fecha;
              $this->con_terminal = "";  
              $this->nmgp_dados_form["con_terminal"] = $this->con_terminal;
              $this->con_estado = "I";  
              $this->nmgp_dados_form["con_estado"] = $this->con_estado;
              $this->con_motivo_anulacion = "";  
              $this->nmgp_dados_form["con_motivo_anulacion"] = $this->con_motivo_anulacion;
              $this->con_tipo_contrato = "";  
              $this->nmgp_dados_form["con_tipo_contrato"] = $this->con_tipo_contrato;
              $this->con_total_a_pagar = "";  
              $this->nmgp_dados_form["con_total_a_pagar"] = $this->con_total_a_pagar;
              $this->con_abono = "0";  
              $this->nmgp_dados_form["con_abono"] = $this->con_abono;
              $this->con_plazo = "1";  
              $this->nmgp_dados_form["con_plazo"] = $this->con_plazo;
              $this->con_fecha_instalacion =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->nmgp_dados_form["con_fecha_instalacion"] = $this->con_fecha_instalacion;
              $this->con_observaciones = "";  
              $this->nmgp_dados_form["con_observaciones"] = $this->con_observaciones;
              $this->con_usuario_instala = "" . $_SESSION['Igtech_SesionLogin'] . "";  
              $this->nmgp_dados_form["con_usuario_instala"] = $this->con_usuario_instala;
              $this->con_numero_contrato = "";  
              $this->nmgp_dados_form["con_numero_contrato"] = $this->con_numero_contrato;
              $this->con_maxima_lectura = "";  
              $this->nmgp_dados_form["con_maxima_lectura"] = $this->con_maxima_lectura;
              $this->con_lectura_actual = "";  
              $this->nmgp_dados_form["con_lectura_actual"] = $this->con_lectura_actual;
              $this->con_fecha_lectura = "";  
              $this->con_fecha_lectura_hora = "" ;  
              $this->nmgp_dados_form["con_fecha_lectura"] = $this->con_fecha_lectura;
              $this->con_ruta = "";  
              $this->nmgp_dados_form["con_ruta"] = $this->con_ruta;
              $this->con_sino = "";  
              $this->nmgp_dados_form["con_sino"] = $this->con_sino;
              $this->con_orden_lecturas = "";  
              $this->nmgp_dados_form["con_orden_lecturas"] = $this->con_orden_lecturas;
              $this->con_numero_corte = "";  
              $this->nmgp_dados_form["con_numero_corte"] = $this->con_numero_corte;
              $this->con_comunidad = "";  
              $this->nmgp_dados_form["con_comunidad"] = $this->con_comunidad;
              $this->con_sector = "";  
              $this->nmgp_dados_form["con_sector"] = $this->con_sector;
              $this->con_numero_censo = "";  
              $this->nmgp_dados_form["con_numero_censo"] = $this->con_numero_censo;
              $this->con_direccion_propietario = "";  
              $this->nmgp_dados_form["con_direccion_propietario"] = $this->con_direccion_propietario;
              $this->con_cedula = "";  
              $this->nmgp_dados_form["con_cedula"] = $this->con_cedula;
              $this->con_celular = "";  
              $this->nmgp_dados_form["con_celular"] = $this->con_celular;
              $this->con_correo = "";  
              $this->nmgp_dados_form["con_correo"] = $this->con_correo;
              $this->con_nombre = "";  
              $this->nmgp_dados_form["con_nombre"] = $this->con_nombre;
              $this->con_telefono = "";  
              $this->nmgp_dados_form["con_telefono"] = $this->con_telefono;
              $this->con_saldo_pagar = "0";  
              $this->nmgp_dados_form["con_saldo_pagar"] = $this->con_saldo_pagar;
              $this->con_valor_cuota = "0";  
              $this->nmgp_dados_form["con_valor_cuota"] = $this->con_valor_cuota;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['foreign_key'] as $sFKName => $sFKValue)
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
       $this->SC_log_arr['keys']['con_id'] =  $this->con_id;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dados_select'];
           $this->SC_log_arr['fields']['con_empresa']['0'] =  $nmgp_dados_select['con_empresa'];
           $this->SC_log_arr['fields']['con_propietario']['0'] =  $nmgp_dados_select['con_propietario'];
           $this->SC_log_arr['fields']['con_pais']['0'] =  $nmgp_dados_select['con_pais'];
           $this->SC_log_arr['fields']['con_provincia']['0'] =  $nmgp_dados_select['con_provincia'];
           $this->SC_log_arr['fields']['con_canton']['0'] =  $nmgp_dados_select['con_canton'];
           $this->SC_log_arr['fields']['con_parroquia']['0'] =  $nmgp_dados_select['con_parroquia'];
           $this->SC_log_arr['fields']['con_direccion_predio']['0'] =  $nmgp_dados_select['con_direccion_predio'];
           $this->SC_log_arr['fields']['con_toma_administrativa']['0'] =  $nmgp_dados_select['con_toma_administrativa'];
           $this->SC_log_arr['fields']['con_toma_operativa']['0'] =  $nmgp_dados_select['con_toma_operativa'];
           $this->SC_log_arr['fields']['con_tipo_servicio']['0'] =  $nmgp_dados_select['con_tipo_servicio'];
           $this->SC_log_arr['fields']['con_condicion_contrato']['0'] =  $nmgp_dados_select['con_condicion_contrato'];
           $this->SC_log_arr['fields']['con_numero_medidor']['0'] =  $nmgp_dados_select['con_numero_medidor'];
           $this->SC_log_arr['fields']['con_usuario']['0'] =  $nmgp_dados_select['con_usuario'];
           $this->SC_log_arr['fields']['con_fecha']['0'] =  $nmgp_dados_select['con_fecha'];
           $this->SC_log_arr['fields']['con_terminal']['0'] =  $nmgp_dados_select['con_terminal'];
           $this->SC_log_arr['fields']['con_estado']['0'] =  $nmgp_dados_select['con_estado'];
           $this->SC_log_arr['fields']['con_motivo_anulacion']['0'] =  $nmgp_dados_select['con_motivo_anulacion'];
           $this->SC_log_arr['fields']['con_tipo_contrato']['0'] =  $nmgp_dados_select['con_tipo_contrato'];
           $this->SC_log_arr['fields']['con_total_a_pagar']['0'] =  $nmgp_dados_select['con_total_a_pagar'];
           $this->SC_log_arr['fields']['con_abono']['0'] =  $nmgp_dados_select['con_abono'];
           $this->SC_log_arr['fields']['con_plazo']['0'] =  $nmgp_dados_select['con_plazo'];
           $this->SC_log_arr['fields']['con_fecha_instalacion']['0'] =  $nmgp_dados_select['con_fecha_instalacion'];
           $this->SC_log_arr['fields']['con_observaciones']['0'] =  $nmgp_dados_select['con_observaciones'];
           $this->SC_log_arr['fields']['con_usuario_instala']['0'] =  $nmgp_dados_select['con_usuario_instala'];
           $this->SC_log_arr['fields']['con_numero_contrato']['0'] =  $nmgp_dados_select['con_numero_contrato'];
           $this->SC_log_arr['fields']['con_maxima_lectura']['0'] =  $nmgp_dados_select['con_maxima_lectura'];
           $this->SC_log_arr['fields']['con_lectura_actual']['0'] =  $nmgp_dados_select['con_lectura_actual'];
           $this->SC_log_arr['fields']['con_fecha_lectura']['0'] =  $nmgp_dados_select['con_fecha_lectura'];
           $this->SC_log_arr['fields']['con_ruta']['0'] =  $nmgp_dados_select['con_ruta'];
           $this->SC_log_arr['fields']['con_sino']['0'] =  $nmgp_dados_select['con_sino'];
           $this->SC_log_arr['fields']['con_orden_lecturas']['0'] =  $nmgp_dados_select['con_orden_lecturas'];
           $this->SC_log_arr['fields']['con_numero_corte']['0'] =  $nmgp_dados_select['con_numero_corte'];
           $this->SC_log_arr['fields']['con_comunidad']['0'] =  $nmgp_dados_select['con_comunidad'];
           $this->SC_log_arr['fields']['con_sector']['0'] =  $nmgp_dados_select['con_sector'];
           $this->SC_log_arr['fields']['con_numero_censo']['0'] =  $nmgp_dados_select['con_numero_censo'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['con_empresa']['1'] =  $this->con_empresa;
       $this->SC_log_arr['fields']['con_propietario']['1'] =  $this->con_propietario;
       $this->SC_log_arr['fields']['con_pais']['1'] =  $this->con_pais;
       $this->SC_log_arr['fields']['con_provincia']['1'] =  $this->con_provincia;
       $this->SC_log_arr['fields']['con_canton']['1'] =  $this->con_canton;
       $this->SC_log_arr['fields']['con_parroquia']['1'] =  $this->con_parroquia;
       $this->SC_log_arr['fields']['con_direccion_predio']['1'] =  $this->con_direccion_predio;
       $this->SC_log_arr['fields']['con_toma_administrativa']['1'] =  $this->con_toma_administrativa;
       $this->SC_log_arr['fields']['con_toma_operativa']['1'] =  $this->con_toma_operativa;
       $this->SC_log_arr['fields']['con_tipo_servicio']['1'] =  $this->con_tipo_servicio;
       $this->SC_log_arr['fields']['con_condicion_contrato']['1'] =  $this->con_condicion_contrato;
       $this->SC_log_arr['fields']['con_numero_medidor']['1'] =  $this->con_numero_medidor;
       $this->SC_log_arr['fields']['con_usuario']['1'] =  $this->con_usuario;
       $this->SC_log_arr['fields']['con_fecha']['1'] =  $this->con_fecha;
       $this->SC_log_arr['fields']['con_terminal']['1'] =  $this->con_terminal;
       $this->SC_log_arr['fields']['con_estado']['1'] =  $this->con_estado;
       $this->SC_log_arr['fields']['con_motivo_anulacion']['1'] =  $this->con_motivo_anulacion;
       $this->SC_log_arr['fields']['con_tipo_contrato']['1'] =  $this->con_tipo_contrato;
       $this->SC_log_arr['fields']['con_total_a_pagar']['1'] =  $this->con_total_a_pagar;
       $this->SC_log_arr['fields']['con_abono']['1'] =  $this->con_abono;
       $this->SC_log_arr['fields']['con_plazo']['1'] =  $this->con_plazo;
       $this->SC_log_arr['fields']['con_fecha_instalacion']['1'] =  $this->con_fecha_instalacion;
       $this->SC_log_arr['fields']['con_observaciones']['1'] =  $this->con_observaciones;
       $this->SC_log_arr['fields']['con_usuario_instala']['1'] =  $this->con_usuario_instala;
       $this->SC_log_arr['fields']['con_numero_contrato']['1'] =  $this->con_numero_contrato;
       $this->SC_log_arr['fields']['con_maxima_lectura']['1'] =  $this->con_maxima_lectura;
       $this->SC_log_arr['fields']['con_lectura_actual']['1'] =  $this->con_lectura_actual;
       $this->SC_log_arr['fields']['con_fecha_lectura']['1'] =  $this->con_fecha_lectura;
       $this->SC_log_arr['fields']['con_ruta']['1'] =  $this->con_ruta;
       $this->SC_log_arr['fields']['con_sino']['1'] =  $this->con_sino;
       $this->SC_log_arr['fields']['con_orden_lecturas']['1'] =  $this->con_orden_lecturas;
       $this->SC_log_arr['fields']['con_numero_corte']['1'] =  $this->con_numero_corte;
       $this->SC_log_arr['fields']['con_comunidad']['1'] =  $this->con_comunidad;
       $this->SC_log_arr['fields']['con_sector']['1'] =  $this->con_sector;
       $this->SC_log_arr['fields']['con_numero_censo']['1'] =  $this->con_numero_censo;
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
       $Log_labels['con_empresa'] =  "{lang_empresa}";
       $Log_labels['con_propietario'] =  "{lang_propietario}";
       $Log_labels['con_pais'] =  "{lang_pais}";
       $Log_labels['con_provincia'] =  "{lang_provincia}";
       $Log_labels['con_canton'] =  "{lang_canton}";
       $Log_labels['con_parroquia'] =  "{lang_parroquia}";
       $Log_labels['con_direccion_predio'] =  "{lang_direccion}";
       $Log_labels['con_toma_administrativa'] =  "{lang_toma_administrativa}";
       $Log_labels['con_toma_operativa'] =  "{lang_toma_operativa}";
       $Log_labels['con_tipo_servicio'] =  "{lang_tipo_servicio}";
       $Log_labels['con_condicion_contrato'] =  "{lang_condicion_contrato}";
       $Log_labels['con_numero_medidor'] =  "{lang_numero_medidor}";
       $Log_labels['con_usuario'] =  "{lang_usuario}";
       $Log_labels['con_fecha'] =  "{lang_fecha}";
       $Log_labels['con_terminal'] =  "{lang_terminal}";
       $Log_labels['con_estado'] =  "{lang_estado}";
       $Log_labels['con_motivo_anulacion'] =  "{lang_motivo_anulacion}";
       $Log_labels['con_tipo_contrato'] =  "{lang_tipo_contrato}";
       $Log_labels['con_total_a_pagar'] =  "{lang_total_pagar}";
       $Log_labels['con_abono'] =  "{lang_abono}";
       $Log_labels['con_plazo'] =  "{lang_plazo}";
       $Log_labels['con_fecha_instalacion'] =  "{lang_fecha_instalacion}";
       $Log_labels['con_observaciones'] =  "{lang_observacion}";
       $Log_labels['con_usuario_instala'] =  "{lang_usuario_instala}";
       $Log_labels['con_numero_contrato'] =  "{lang_contrato}";
       $Log_labels['con_maxima_lectura'] =  "{lang_lectura_maxima}";
       $Log_labels['con_lectura_actual'] =  "{lang_lectura_actual}";
       $Log_labels['con_fecha_lectura'] =  "{lang_fecha_ultima_lectura}";
       $Log_labels['con_ruta'] =  "{lang_ruta}";
       $Log_labels['con_sino'] =  "Con Sino";
       $Log_labels['con_orden_lecturas'] =  "{lang_orden_ingreso}";
       $Log_labels['con_numero_corte'] =  "{lang_nro_corte}";
       $Log_labels['con_comunidad'] =  "{lang_comunidad}";
       $Log_labels['con_sector'] =  "{lang_sector}";
       $Log_labels['con_numero_censo'] =  "{lang_numero_censo}";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function con_propietario_onChange()
{
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
$original_con_propietario = $this->con_propietario;
$original_con_nombre = $this->con_nombre;
$original_con_cedula = $this->con_cedula;
$original_con_telefono = $this->con_telefono;
$original_con_celular = $this->con_celular;
$original_con_direccion_propietario = $this->con_direccion_propietario;
$original_con_correo = $this->con_correo;



$modificado_con_propietario = $this->con_propietario;
$modificado_con_nombre = $this->con_nombre;
$modificado_con_cedula = $this->con_cedula;
$modificado_con_telefono = $this->con_telefono;
$modificado_con_celular = $this->con_celular;
$modificado_con_direccion_propietario = $this->con_direccion_propietario;
$modificado_con_correo = $this->con_correo;
$this->nm_formatar_campos('con_propietario', 'con_nombre', 'con_cedula', 'con_telefono', 'con_celular', 'con_direccion_propietario', 'con_correo');
if ($original_con_propietario !== $modificado_con_propietario || isset($this->nmgp_cmp_readonly['con_propietario']) || (isset($bFlagRead_con_propietario) && $bFlagRead_con_propietario))
{
    $this->ajax_return_values_con_propietario(true);
}
if ($original_con_nombre !== $modificado_con_nombre || isset($this->nmgp_cmp_readonly['con_nombre']) || (isset($bFlagRead_con_nombre) && $bFlagRead_con_nombre))
{
    $this->ajax_return_values_con_nombre(true);
}
if ($original_con_cedula !== $modificado_con_cedula || isset($this->nmgp_cmp_readonly['con_cedula']) || (isset($bFlagRead_con_cedula) && $bFlagRead_con_cedula))
{
    $this->ajax_return_values_con_cedula(true);
}
if ($original_con_telefono !== $modificado_con_telefono || isset($this->nmgp_cmp_readonly['con_telefono']) || (isset($bFlagRead_con_telefono) && $bFlagRead_con_telefono))
{
    $this->ajax_return_values_con_telefono(true);
}
if ($original_con_celular !== $modificado_con_celular || isset($this->nmgp_cmp_readonly['con_celular']) || (isset($bFlagRead_con_celular) && $bFlagRead_con_celular))
{
    $this->ajax_return_values_con_celular(true);
}
if ($original_con_direccion_propietario !== $modificado_con_direccion_propietario || isset($this->nmgp_cmp_readonly['con_direccion_propietario']) || (isset($bFlagRead_con_direccion_propietario) && $bFlagRead_con_direccion_propietario))
{
    $this->ajax_return_values_con_direccion_propietario(true);
}
if ($original_con_correo !== $modificado_con_correo || isset($this->nmgp_cmp_readonly['con_correo']) || (isset($bFlagRead_con_correo) && $bFlagRead_con_correo))
{
    $this->ajax_return_values_con_correo(true);
}
$this->NM_ajax_info['event_field'] = 'con';
form_jap_anular_contrato_mob_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_confirma_clave($fecha,$usuario,$clave){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_mail_confirma_contrasenia.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)){ 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('$usuario',$usuario,$datos);
			  $datos=str_replace('$clave',$clave,$datos);
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_registro_empresa($fecha,$usuario,$clave){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_mail_registro_empresa.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)) { 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('$usuario',$usuario,$datos);
			  $datos=str_replace('$clave',$clave,$datos);
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_nueva_compra($fecha,$empresa,$ruc_Empresa,$valor,$tipo,$cuenta,$documento){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_mail_nueva_compra.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)) { 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('$empresa',$empresa,$datos);
			  $datos=str_replace('$ruc_Empresa',$ruc_Empresa,$datos);	
			  $datos=str_replace('$valor',$valor,$datos);
			  $datos=str_replace('$tipo',$tipo,$datos);	
			  $datos=str_replace('$cuenta',$cuenta,$datos);
			  $datos=str_replace('$documento',$documento,$datos);
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_acreditacion_compra($fecha,$empresa,$ruc_Empresa,$valor,$tipo,$cuenta,$documento){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_mail_acreditacion_libretin.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)){ 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('$empresa',$empresa,$datos);
			  $datos=str_replace('$ruc_Empresa',$ruc_Empresa,$datos);	
			  $datos=str_replace('$valor',$valor,$datos);
			  $datos=str_replace('$tipo',$tipo,$datos);	
			  $datos=str_replace('$cuenta',$cuenta,$datos);
			  $datos=str_replace('$documento',$documento,$datos);
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_solicitud_inspeccion($fecha){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_envio_inspeccion.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)){ 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin'.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_solicitud_inspeccion_otros($fecha,$motivo){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_envio_solicitud_inspeccion.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)){ 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('$motivo',$motivo,$datos);	
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function correo_masivo(){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."ofertas.html";
		$ruta_imagenes="";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)) { 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('images/',$ruta_imagenes,$datos);
			  fclose($fp);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function formulario_registro_deportista($fecha){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
		$datos="";
		$nombre=$_SERVER["DOCUMENT_ROOT"].$_SESSION['RUTA_SKINS']."skin_mail_registro_deportista.html";
		$ruta_imagenes=$_SESSION['RUTA_IMAGENES'];
		if (file_exists($nombre)) { 
			  $fp = fopen ($nombre,"r"); 
			  $datos = fread($fp, filesize($nombre));
			  fclose($fp);
			  $datos=str_replace('$fecha',$fecha,$datos);
			  $datos=str_replace('imagenes/',$ruta_imagenes,$datos);
			  $datos=str_replace('images/',$ruta_imagenes,$datos);
			  $datos=str_replace('$DOMINIO',$_SESSION['DOMINIO'],$datos);
			  $datos=str_replace('$EMPRESA_CLIENTE',$_SESSION['EMPRESA_CLIENTE'],$datos);
			  return $datos;
		}else
			return 'No se pudo cargar skin '.$nombre;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function mes($numero) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function FormatoFecha($fecha) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	
	list ( $month, $day, $year ) = split ( '[/.-]', $fecha );
	return $month . '/' . $day . '/' . $year;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function Hoy() {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mes = sprintf ( "%02s", $today ['mon'] );
	$dia = sprintf ( "%02s", $today ['mday'] );
	$anio = $today ['year'];
	return $anio . '/' . $mes . '/' . $dia;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function fecha_actual() {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function fecha_larga($dia,$mes,$anio) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function fecha_larga_dia($fecha) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function grado($numero) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function llenaizq($a, $Tamanio, $car) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $b . $a;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function llenader($a, $Tamanio, $car) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen ( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $a . $b;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function cifrado($cadena) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$strcifrado = '';
	$cadena = trim($cadena);
	for($i = 1; $i <= strlen($cadena); $i ++) {
		$strcifrado = $strcifrado.$this->llenaizq( strval( 1 + ord( substr($cadena, $i - 1, 1 ) ) ), 3, '0' );
	}
	return $strcifrado;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function descifrado($cadena) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$cifrado = '';
	for($i = 1; $i <= strlen( $cadena ); $i += 3) {
		$cifrado = $cifrado . chr( substr( $cadena, $i - 1, 3 ) - 1 );
	}
	
	return $cifrado;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function IgtechEliminaInyeccion($cadena) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$cadena=str_replace("=","",$cadena);
    $cadena=str_replace("'","",$cadena);
	$cadena=str_replace('"',"",$cadena);
	$cadena=str_replace('or',"",$cadena);
	$cadena=str_replace('OR',"",$cadena);
	return $cadena;
	
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function diasHabiles($dia,$mes,$anio,$numDias,$fer){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
 
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function diaMesAnio(){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
   
	$fecha=date("j-n-Y");
	$meses=array("Mes 	Nulo","Enero","Febrero","Marzo","Abril","Mayo",
				 "Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$fecha_array=explode("-",$fecha);
	$dia=$fecha_array[0];
	$mes=$meses[$fecha_array[1]];
	$anio=$fecha_array[2];
	return array($dia,$mes,$anio);

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function separar($dato){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
   
     $fecha_array=explode("-",$dato);
     return $fecha_array;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function mesNum($numero) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function leerxml($array, $dir){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function getMonto($money){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousendSeparator);

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function secuencialCartera($numero, $fecha){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  	
	$timestamp = strtotime($fecha); 
    $anio_actual = date('Y', $timestamp);
	$num = '';
	$longitud = strlen($numero);
	for($i=0;$i<(4-$longitud); $i++){
		$num .='0';
	}	
	$num = $num.$numero.'-'.$anio_actual; 
	return $num;	

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function inicialesUsuario($usuario){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$array2 = explode(".", $usuario);
	$apellido = substr($array2[0], 0, 1);
	$nombre = substr($array2[1], 0, 1);
	$resultado = strtolower ($nombre.$apellido);
	return $resultado;		

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function obtenerArray($cadena){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  		
	$array = split(',' , $cadena);
	$newarray=array_values(array_diff($array, array('')));	
	return $newarray;	

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function dias_transcurridos($fecha_i,$fecha_f){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); 
	$dias = floor($dias);		
	return $dias;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function trasformar_money($numero){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
	setlocale(LC_MONETARY, 'en_US');
	$money=money_format('%i', $numero) . "\n";			
	return str_replace('USD', '', $money);

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function calculaedad($fechanacimiento){
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
  
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($mes_diferencia < 0 || ($mes_diferencia == 0 && $dia_diferencia < 0 ))
    $ano_diferencia--;
  return $ano_diferencia;

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
}
function num2letras($num, $moneda, $denominacion, $fem = false, $dec = true) {
$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'on';
   
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

$_SESSION['scriptcase']['form_jap_anular_contrato_mob']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_jap_anular_contrato_mob_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
    include_once("form_jap_anular_contrato_mob_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("con_id", "con_propietario", "con_nombre", "con_cedula", "con_telefono", "con_celular", "con_direccion_propietario", "con_correo", "con_clave_catastral", "con_pais", "con_provincia", "con_canton", "con_parroquia", "con_barrio", "con_direccion_predio", "con_junta_modular", "con_toma_operativa", "con_derivacion", "con_superficie", "con_tipo_cultivo", "con_tipo_posesion", "con_valor", "con_existe_canal", "con_usuario_informe", "con_usuario", "con_fecha", "con_terminal", "con_estado"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarTimeStart($sFormat)
   {
       $aDateParts = explode(';', $sFormat);

       if (2 == sizeof($aDateParts))
       {
           $sTime = $aDateParts[1];
       }
       else
       {
           $sTime = 'hh:mm:ss';
       }

       return str_replace(array('h', 'm', 'i', 's'), array('0', '0', '0', '0'), $sTime);
   } // jqueryCalendarTimeStart

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

   function jqueryIconFile($sModule)
   {
       $sImage = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && 'image' == $this->arr_buttons['bcalendario']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalendario']['display'])
           {
               $sImage = $this->arr_buttons['bcalendario']['image'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && 'image' == $this->arr_buttons['bcalculadora']['type'] && 'only_fontawesomeicon' != $this->arr_buttons['bcalculadora']['display'])
           {
               $sImage = $this->arr_buttons['bcalculadora']['image'];
           }
       }

       return '' == $sImage ? '' : $this->Ini->path_icones . '/' . $sImage;
   } // jqueryIconFile

   function jqueryFAFile($sModule)
   {
       $sFA = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
           {
               $sFA = $this->arr_buttons['bcalendario']['fontawesomeicon'];
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']) && 'only_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
           {
               $sFA = $this->arr_buttons['bcalculadora']['fontawesomeicon'];
           }
       }

       return '' == $sFA ? '' : "<span class='scButton_fontawesome " . $sFA . "'></span>";
   } // jqueryFAFile

   function jqueryButtonText($sModule)
   {
       $sClass = '';
       $sText  = '';
       if ('calendar' == $sModule)
       {
           if (isset($this->arr_buttons['bcalendario']) && isset($this->arr_buttons['bcalendario']['type']) && ('image' == $this->arr_buttons['bcalendario']['type'] || 'button' == $this->arr_buttons['bcalendario']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalendario']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalendario']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalendario']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalendario']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalendario']['fontawesomeicon'] . "'></i>";
                   }
               }
           }
       }
       elseif ('calculator' == $sModule)
       {
           if (isset($this->arr_buttons['bcalculadora']) && isset($this->arr_buttons['bcalculadora']['type']) && ('image' == $this->arr_buttons['bcalculadora']['type'] || 'button' == $this->arr_buttons['bcalculadora']['type']))
           {
               if ('only_text' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   $sText  = $this->arr_buttons['bcalculadora']['value'];
               }
               elseif ('text_fontawesomeicon' == $this->arr_buttons['bcalculadora']['display'])
               {
                   $sClass = 'scButton_' . $this->arr_buttons['bcalendario']['style'];
                   if ('text_right' == $this->arr_buttons['bcalendario']['display_position'])
                   {
                       $sText = "<i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> " . $this->arr_buttons['bcalculadora']['value'];
                   }
                   else
                   {
                       $sText = $this->arr_buttons['bcalculadora']['value'] . " <i class='icon_fa " . $this->arr_buttons['bcalculadora']['fontawesomeicon'] . "'></i> ";
                   }
               }
           }
       }

       return '' == $sText ? array('', '') : array($sText, $sClass);
   } // jqueryButtonText


    function scCsrfGetToken()
    {
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['csrf_token'];
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

   function Form_lookup_con_tipo_contrato()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT ap_id, ap_descripcion  FROM jap_aportaciones  where ap_contrato='S' and ap_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY ap_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_contrato'][] = $rs->fields[0];
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
   function Form_lookup_con_pais()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_pais'][] = $rs->fields[0];
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
   function Form_lookup_con_provincia()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'] = array(); 
}
if ($this->con_pais != "")
{ 
   $this->nm_clear_val("con_pais");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  where pro_pais=$this->con_pais ORDER BY pro_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_provincia'][] = $rs->fields[0];
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
   function Form_lookup_con_canton()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'] = array(); 
}
if ($this->con_provincia != "")
{ 
   $this->nm_clear_val("con_provincia");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  WHERE can_provincia=$this->con_provincia ORDER BY can_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_canton'][] = $rs->fields[0];
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
   function Form_lookup_con_parroquia()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'] = array(); 
}
if ($this->con_canton != "")
{ 
   $this->nm_clear_val("con_canton");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT parr_id, parr_nombre  FROM sis_parroquia  WHERE parr_canton=$this->con_canton ORDER BY parr_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_parroquia'][] = $rs->fields[0];
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
   function Form_lookup_con_comunidad()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT com_id, com_descripcion  FROM jap_comunidad  WHERE com_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY com_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_comunidad'][] = $rs->fields[0];
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
   function Form_lookup_con_sector()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT sec_id, sec_descripcion  FROM jap_sector  WHERE sec_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY sec_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_sector'][] = $rs->fields[0];
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
   function Form_lookup_con_toma_administrativa()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT ta_id, ta_descripcion  FROM jap_toma_administrativa  WHERE ta_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY ta_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_administrativa'][] = $rs->fields[0];
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
   function Form_lookup_con_toma_operativa()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'] = array(); 
}
if ($this->con_toma_administrativa != "")
{ 
   $this->nm_clear_val("con_toma_administrativa");
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT to_id, to_descripcion  FROM jap_toma_operativa  WHERE to_toma_administrativa='$this->con_toma_administrativa' ORDER BY to_id";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_toma_operativa'][] = $rs->fields[0];
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
   function Form_lookup_con_condicion_contrato()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT cc_id, cc_descripcion  FROM jap_condicion_contrato  WHERE cc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cc_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_condicion_contrato'][] = $rs->fields[0];
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
   function Form_lookup_con_tipo_servicio()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT ts_id, ts_descripcion  FROM jap_tipo_servicio  WHERE ts_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY ts_descripcion";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_tipo_servicio'][] = $rs->fields[0];
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
   function Form_lookup_con_ruta()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'] = array(); 
    }

   $old_value_con_fecha = $this->con_fecha;
   $old_value_con_id = $this->con_id;
   $old_value_con_propietario = $this->con_propietario;
   $old_value_con_orden_lecturas = $this->con_orden_lecturas;
   $old_value_con_numero_corte = $this->con_numero_corte;
   $old_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $old_value_con_maxima_lectura = $this->con_maxima_lectura;
   $old_value_con_lectura_actual = $this->con_lectura_actual;
   $old_value_con_fecha_lectura = $this->con_fecha_lectura;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_con_fecha = $this->con_fecha;
   $unformatted_value_con_id = $this->con_id;
   $unformatted_value_con_propietario = $this->con_propietario;
   $unformatted_value_con_orden_lecturas = $this->con_orden_lecturas;
   $unformatted_value_con_numero_corte = $this->con_numero_corte;
   $unformatted_value_con_fecha_instalacion = $this->con_fecha_instalacion;
   $unformatted_value_con_maxima_lectura = $this->con_maxima_lectura;
   $unformatted_value_con_lectura_actual = $this->con_lectura_actual;
   $unformatted_value_con_fecha_lectura = $this->con_fecha_lectura;

   $nm_comando = "SELECT rut_id, rut_nombre  FROM jap_rutas_medicion  where rut_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY rut_nombre";

   $this->con_fecha = $old_value_con_fecha;
   $this->con_id = $old_value_con_id;
   $this->con_propietario = $old_value_con_propietario;
   $this->con_orden_lecturas = $old_value_con_orden_lecturas;
   $this->con_numero_corte = $old_value_con_numero_corte;
   $this->con_fecha_instalacion = $old_value_con_fecha_instalacion;
   $this->con_maxima_lectura = $old_value_con_maxima_lectura;
   $this->con_lectura_actual = $old_value_con_lectura_actual;
   $this->con_fecha_lectura = $old_value_con_fecha_lectura;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['Lookup_con_ruta'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_jap_anular_contrato_mob_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "con_id", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "con_propietario", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_con_pais($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "con_pais", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_con_provincia($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "con_provincia", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_con_canton($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "con_canton", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_con_parroquia($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "con_parroquia", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "con_direccion_predio", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_con_toma_operativa($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "con_toma_operativa", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "con_usuario", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "con_fecha", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "con_terminal", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "con_estado", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_jap_anular_contrato_mob = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['total'] = $qt_geral_reg_form_jap_anular_contrato_mob;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_jap_anular_contrato_mob_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_jap_anular_contrato_mob_pack_ajax_response();
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
      $nm_numeric[] = "con_id";$nm_numeric[] = "con_propietario";$nm_numeric[] = "con_pais";$nm_numeric[] = "con_provincia";$nm_numeric[] = "con_canton";$nm_numeric[] = "con_parroquia";$nm_numeric[] = "con_toma_administrativa";$nm_numeric[] = "con_toma_operativa";$nm_numeric[] = "con_tipo_servicio";$nm_numeric[] = "con_condicion_contrato";$nm_numeric[] = "con_tipo_contrato";$nm_numeric[] = "con_total_a_pagar";$nm_numeric[] = "con_abono";$nm_numeric[] = "con_plazo";$nm_numeric[] = "con_maxima_lectura";$nm_numeric[] = "con_lectura_actual";$nm_numeric[] = "con_ruta";$nm_numeric[] = "con_orden_lecturas";$nm_numeric[] = "con_numero_corte";$nm_numeric[] = "con_comunidad";$nm_numeric[] = "con_sector";$nm_numeric[] = "";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['decimal_db'] == ".")
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
      $Nm_datas["con_fecha"] = "date";$Nm_datas["con_fecha_instalacion"] = "date";$Nm_datas["con_fecha_lectura"] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['SC_sep_date1'];
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
   function SC_lookup_con_pais($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT pai_nombre, pai_id FROM sis_pais WHERE (#lowerI##cmp_ipai_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
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
   function SC_lookup_con_provincia($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_con_canton($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_con_parroquia($condicao, $campo)
   {
       return $campo;
   }
   function SC_lookup_con_toma_operativa($condicao, $campo)
   {
       return $campo;
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
       $nmgp_saida_form = "form_jap_anular_contrato_mob_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_jap_anular_contrato_mob_fim.php";
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
       form_jap_anular_contrato_mob_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['masterValue']);
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_jap_anular_contrato_mob_pack_ajax_response();
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
       form_jap_anular_contrato_mob_pack_ajax_response();
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
            case "new":
                return array("sc_b_new_t.sc-unique-btn-1", "sc_b_new_b.sc-unique-btn-9", "sc_b_new_t.sc-unique-btn-13", "sc_b_new_b.sc-unique-btn-21");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-2", "sc_b_ins_b.sc-unique-btn-10", "sc_b_ins_t.sc-unique-btn-14", "sc_b_ins_b.sc-unique-btn-22");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-3", "sc_b_upd_b.sc-unique-btn-11", "sc_b_upd_t.sc-unique-btn-15", "sc_b_upd_b.sc-unique-btn-23");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-5", "sys_separator.sc-unique-btn-12", "sys_separator.sc-unique-btn-16", "sys_separator.sc-unique-btn-17", "sys_separator.sc-unique-btn-24");
                break;
            case "anular":
                return array("sc_anular_top.", "sc_anular_bot.", "sc_anular_top.", "sc_anular_bot.");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-6", "sc_b_sai_t.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-18", "sc_b_sai_t.sc-unique-btn-20", "sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-19");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['link_info']['compact_mode']) {
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
          <?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_jap_contrato'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_jap_contrato'] . ""; } ?>
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato_mob']['ordem_ord'] == " desc") {
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
            case "con_propietario":
                return true;
            case "con_total_a_pagar":
                return true;
            case "con_abono":
                return true;
            case "con_plazo":
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
            case "con_id":
                return 'desc';
            case "con_numero_contrato":
                return 'desc';
            case "con_propietario":
                return 'desc';
            case "con_pais":
                return 'desc';
            case "con_provincia":
                return 'desc';
            case "con_canton":
                return 'desc';
            case "con_parroquia":
                return 'desc';
            case "con_comunidad":
                return 'desc';
            case "con_sector":
                return 'desc';
            case "con_toma_administrativa":
                return 'desc';
            case "con_toma_operativa":
                return 'desc';
            case "con_condicion_contrato":
                return 'desc';
            case "con_tipo_servicio":
                return 'desc';
            case "con_ruta":
                return 'desc';
            case "con_orden_lecturas":
                return 'desc';
            case "con_numero_corte":
                return 'desc';
            case "con_fecha_instalacion":
                return 'desc';
            case "con_maxima_lectura":
                return 'desc';
            case "con_lectura_actual":
                return 'desc';
            case "con_fecha_lectura":
                return 'desc';
            case "con_total_a_pagar":
                return 'desc';
            case "con_abono":
                return 'desc';
            case "con_plazo":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
