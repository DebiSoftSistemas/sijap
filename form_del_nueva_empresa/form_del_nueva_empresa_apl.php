<?php
//
class form_del_nueva_empresa_apl
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
   var $emp_ruc;
   var $emp_razon_social;
   var $emp_nombre_comercial;
   var $emp_logo;
   var $emp_logo_scfile_name;
   var $emp_logo_ul_name;
   var $emp_logo_scfile_type;
   var $emp_logo_ul_type;
   var $emp_logo_limpa;
   var $emp_logo_salva;
   var $out_emp_logo;
   var $emp_firma;
   var $emp_firma_scfile_name;
   var $emp_firma_ul_name;
   var $emp_firma_ul_type;
   var $emp_firma_limpa;
   var $emp_firma_salva;
   var $emp_clave_firma;
   var $emp_obligado;
   var $emp_obligado_1;
   var $emp_contribuyente_especial;
   var $emp_estado;
   var $emp_email;
   var $emp_ambiente_sri;
   var $emp_direccion_matriz;
   var $emp_autorizacion_inmediata;
   var $emp_es_op_transporte;
   var $emp_representante_legal;
   var $emp_regimen_especial;
   var $emp_telefono;
   var $emp_agente_retencion;
   var $emp_calificacion_artesanal;
   var $escontribuyenteespecial;
   var $esartesanocalificado;
   var $es_profesionalsalud;
   var $emp_primeracompra;
   var $emp_tipo_empresa;
   var $emp_comisionista;
   var $emp_comisionista_1;
   var $emp_tipo_suscripcion;
   var $usu_cedula;
   var $emp_clave_reingreso;
   var $emp_nombre_usuario;
   var $mensaje;
   var $usu_email;
   var $emp_clave;
   var $emp_usuario;
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
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['emp_ambiente_sri']))
          {
              $this->emp_ambiente_sri = $this->NM_ajax_info['param']['emp_ambiente_sri'];
          }
          if (isset($this->NM_ajax_info['param']['emp_clave']))
          {
              $this->emp_clave = $this->NM_ajax_info['param']['emp_clave'];
          }
          if (isset($this->NM_ajax_info['param']['emp_clave_reingreso']))
          {
              $this->emp_clave_reingreso = $this->NM_ajax_info['param']['emp_clave_reingreso'];
          }
          if (isset($this->NM_ajax_info['param']['emp_comisionista']))
          {
              $this->emp_comisionista = $this->NM_ajax_info['param']['emp_comisionista'];
          }
          if (isset($this->NM_ajax_info['param']['emp_contribuyente_especial']))
          {
              $this->emp_contribuyente_especial = $this->NM_ajax_info['param']['emp_contribuyente_especial'];
          }
          if (isset($this->NM_ajax_info['param']['emp_email']))
          {
              $this->emp_email = $this->NM_ajax_info['param']['emp_email'];
          }
          if (isset($this->NM_ajax_info['param']['emp_nombre_comercial']))
          {
              $this->emp_nombre_comercial = $this->NM_ajax_info['param']['emp_nombre_comercial'];
          }
          if (isset($this->NM_ajax_info['param']['emp_obligado']))
          {
              $this->emp_obligado = $this->NM_ajax_info['param']['emp_obligado'];
          }
          if (isset($this->NM_ajax_info['param']['emp_razon_social']))
          {
              $this->emp_razon_social = $this->NM_ajax_info['param']['emp_razon_social'];
          }
          if (isset($this->NM_ajax_info['param']['emp_ruc']))
          {
              $this->emp_ruc = $this->NM_ajax_info['param']['emp_ruc'];
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
      if (isset($this->permite_procesar) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['permite_procesar'] = $this->permite_procesar;
      }
      if (isset($this->mensaje_error) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['mensaje_error'] = $this->mensaje_error;
      }
      if (isset($_POST["permite_procesar"]) && isset($this->permite_procesar)) 
      {
          $_SESSION['permite_procesar'] = $this->permite_procesar;
      }
      if (isset($_POST["mensaje_error"]) && isset($this->mensaje_error)) 
      {
          $_SESSION['mensaje_error'] = $this->mensaje_error;
      }
      if (isset($_GET["permite_procesar"]) && isset($this->permite_procesar)) 
      {
          $_SESSION['permite_procesar'] = $this->permite_procesar;
      }
      if (isset($_GET["mensaje_error"]) && isset($this->mensaje_error)) 
      {
          $_SESSION['mensaje_error'] = $this->mensaje_error;
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['embutida_parms']);
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
                 nm_limpa_str_form_del_nueva_empresa($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->permite_procesar)) 
          {
              $_SESSION['permite_procesar'] = $this->permite_procesar;
          }
          if (isset($this->mensaje_error)) 
          {
              $_SESSION['mensaje_error'] = $this->mensaje_error;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->permite_procesar)) 
          {
              $_SESSION['permite_procesar'] = $this->permite_procesar;
          }
          if (isset($this->mensaje_error)) 
          {
              $_SESSION['mensaje_error'] = $this->mensaje_error;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_nueva_empresa_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['upload_field_info']['emp_logo'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_del_nueva_empresa',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/\.(jpg|png|)$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '0',
          'upload_file_width'  => '0',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      $_SESSION['sc_session'][$script_case_init]['form_del_nueva_empresa']['upload_field_info']['emp_firma'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_del_nueva_empresa',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/\.(p12|)$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '',
          'upload_file_width'  => '',
          'upload_file_aspect' => '',
          'upload_file_type'   => 'N1',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_nueva_empresa']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_nueva_empresa'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nueva_empresa']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nueva_empresa']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_nueva_empresa') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_nueva_empresa']['label'] = "" . $this->Ini->Nm_lang['lang_datos_empresa'] . "";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_nueva_empresa")
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
      $this->Ini->Str_btn_form = (isset($_SESSION['scriptcase']['str_button_all'])) ? $_SESSION['scriptcase']['str_button_all'] : "botones_debi";
      $_SESSION['scriptcase']['str_button_all'] = $this->Ini->Str_btn_form;
      include($this->Ini->path_btn . $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form . $_SESSION['scriptcase']['reg_conf']['css_dir'] . '.php');
      $_SESSION['scriptcase']['css_form_help'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form.css";
      $_SESSION['scriptcase']['css_form_help_dir'] = '../_lib/css/' . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      $this->Db = $this->Ini->Db; 
      $this->nm_new_label['emp_ruc'] = '' . $this->Ini->Nm_lang['lang_ruc'] . '';
      $this->nm_new_label['emp_razon_social'] = '' . $this->Ini->Nm_lang['lang_razon_social'] . '';
      $this->nm_new_label['emp_nombre_comercial'] = '' . $this->Ini->Nm_lang['lang_nombre_comercial'] . '';
      $this->nm_new_label['emp_obligado'] = '' . $this->Ini->Nm_lang['lang_obligado_contabilidad'] . '';
      $this->nm_new_label['emp_contribuyente_especial'] = '' . $this->Ini->Nm_lang['lang_contribuyente_especial'] . '';
      $this->nm_new_label['emp_email'] = '' . $this->Ini->Nm_lang['lang_email'] . '';
      $this->nm_new_label['emp_comisionista'] = '' . $this->Ini->Nm_lang['lang_referido_por'] . '';
      $this->nm_new_label['emp_clave_reingreso'] = '' . $this->Ini->Nm_lang['lang_contrasenia_confirma'] . '';
      $this->nm_new_label['emp_clave'] = '' . $this->Ini->Nm_lang['lang_contrasenia'] . '';

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



      $_SESSION['scriptcase']['error_icon']['form_del_nueva_empresa']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_nueva_empresa'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['goto']      = 'on';
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
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_nueva_empresa']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_nueva_empresa'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_nueva_empresa'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_form'];
          if (!isset($this->emp_logo)){$this->emp_logo = $this->nmgp_dados_form['emp_logo'];} 
          if (!isset($this->emp_firma)){$this->emp_firma = $this->nmgp_dados_form['emp_firma'];} 
          if (!isset($this->emp_clave_firma)){$this->emp_clave_firma = $this->nmgp_dados_form['emp_clave_firma'];} 
          if (!isset($this->emp_estado)){$this->emp_estado = $this->nmgp_dados_form['emp_estado'];} 
          if (!isset($this->emp_direccion_matriz)){$this->emp_direccion_matriz = $this->nmgp_dados_form['emp_direccion_matriz'];} 
          if (!isset($this->emp_autorizacion_inmediata)){$this->emp_autorizacion_inmediata = $this->nmgp_dados_form['emp_autorizacion_inmediata'];} 
          if (!isset($this->emp_es_op_transporte)){$this->emp_es_op_transporte = $this->nmgp_dados_form['emp_es_op_transporte'];} 
          if (!isset($this->emp_representante_legal)){$this->emp_representante_legal = $this->nmgp_dados_form['emp_representante_legal'];} 
          if (!isset($this->emp_regimen_especial)){$this->emp_regimen_especial = $this->nmgp_dados_form['emp_regimen_especial'];} 
          if (!isset($this->emp_telefono)){$this->emp_telefono = $this->nmgp_dados_form['emp_telefono'];} 
          if (!isset($this->emp_agente_retencion)){$this->emp_agente_retencion = $this->nmgp_dados_form['emp_agente_retencion'];} 
          if (!isset($this->emp_calificacion_artesanal)){$this->emp_calificacion_artesanal = $this->nmgp_dados_form['emp_calificacion_artesanal'];} 
          if (!isset($this->escontribuyenteespecial)){$this->escontribuyenteespecial = $this->nmgp_dados_form['escontribuyenteespecial'];} 
          if (!isset($this->esartesanocalificado)){$this->esartesanocalificado = $this->nmgp_dados_form['esartesanocalificado'];} 
          if (!isset($this->es_profesionalsalud)){$this->es_profesionalsalud = $this->nmgp_dados_form['es_profesionalsalud'];} 
          if (!isset($this->emp_primeracompra)){$this->emp_primeracompra = $this->nmgp_dados_form['emp_primeracompra'];} 
          if (!isset($this->emp_tipo_empresa)){$this->emp_tipo_empresa = $this->nmgp_dados_form['emp_tipo_empresa'];} 
          if (!isset($this->emp_tipo_suscripcion)){$this->emp_tipo_suscripcion = $this->nmgp_dados_form['emp_tipo_suscripcion'];} 
          if (!isset($this->usu_cedula)){$this->usu_cedula = $this->nmgp_dados_form['usu_cedula'];} 
          if (!isset($this->emp_nombre_usuario)){$this->emp_nombre_usuario = $this->nmgp_dados_form['emp_nombre_usuario'];} 
          if (!isset($this->usu_email)){$this->usu_email = $this->nmgp_dados_form['usu_email'];} 
          if (!isset($this->emp_usuario)){$this->emp_usuario = $this->nmgp_dados_form['emp_usuario'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_nueva_empresa", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_del_nueva_empresa/Igtech.ApiCiudadanos.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.ApiCiudadanos.php');
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

      if (is_file($this->Ini->path_aplicacao . 'form_del_nueva_empresa_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_nueva_empresa_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_nueva_empresa/form_del_nueva_empresa_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_nueva_empresa_erro.class.php"); 
      }
      $this->Erro      = new form_del_nueva_empresa_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao']))
         { 
             if ($this->emp_ruc != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_nueva_empresa']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
      $this->NM_case_insensitive = true;
      $this->sc_evento = $this->nmgp_opcao;
      if (!isset($this->NM_ajax_flag) || ('validate_' != substr($this->NM_ajax_opcao, 0, 9) && 'add_new_line' != $this->NM_ajax_opcao && 'autocomp_' != substr($this->NM_ajax_opcao, 0, 9)))
      {
      $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  $this->Cargar_SMTPConfig(1);
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off'; 
      }
            if ('ajax_check_file' == $this->nmgp_opcao ){
                 ob_start(); 
                 include_once("../_lib/lib/php/nm_api.php"); 
            switch( $_POST['rsargs'] ){
               default:
                   echo 0;exit;
               break;
               }

            $out1_img_cache = $_SESSION['scriptcase']['form_del_nueva_empresa']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_nueva_empresa']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->emp_ruc)) { $this->nm_limpa_alfa($this->emp_ruc); }
      if (isset($this->emp_razon_social)) { $this->nm_limpa_alfa($this->emp_razon_social); }
      if (isset($this->emp_nombre_comercial)) { $this->nm_limpa_alfa($this->emp_nombre_comercial); }
      if (isset($this->emp_obligado)) { $this->nm_limpa_alfa($this->emp_obligado); }
      if (isset($this->emp_contribuyente_especial)) { $this->nm_limpa_alfa($this->emp_contribuyente_especial); }
      if (isset($this->emp_email)) { $this->nm_limpa_alfa($this->emp_email); }
      if (isset($this->emp_ambiente_sri)) { $this->nm_limpa_alfa($this->emp_ambiente_sri); }
      if (isset($this->emp_comisionista)) { $this->nm_limpa_alfa($this->emp_comisionista); }
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- emp_ambiente_sri
      $this->field_config['emp_ambiente_sri']               = array();
      $this->field_config['emp_ambiente_sri']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['emp_ambiente_sri']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['emp_ambiente_sri']['symbol_dec'] = '';
      $this->field_config['emp_ambiente_sri']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['emp_ambiente_sri']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Gera_log_access'] = false;
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
          if ('validate_emp_comisionista' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_comisionista');
          }
          if ('validate_emp_ruc' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_ruc');
          }
          if ('validate_emp_razon_social' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_razon_social');
          }
          if ('validate_emp_nombre_comercial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_nombre_comercial');
          }
          if ('validate_emp_email' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_email');
          }
          if ('validate_emp_obligado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_obligado');
          }
          if ('validate_emp_contribuyente_especial' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_contribuyente_especial');
          }
          if ('validate_emp_ambiente_sri' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_ambiente_sri');
          }
          if ('validate_emp_clave' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_clave');
          }
          if ('validate_emp_clave_reingreso' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'emp_clave_reingreso');
          }
          if ('validate_mensaje' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'mensaje');
          }
          form_del_nueva_empresa_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_emp_obligado_onchange' == $this->NM_ajax_opcao)
          {
              $this->emp_obligado_onChange();
          }
          if ('event_emp_usuario_onblur' == $this->NM_ajax_opcao)
          {
              $this->emp_usuario_onBlur();
          }
          if ('event_emp_ruc_onblur' == $this->NM_ajax_opcao)
          {
              $this->emp_ruc_onBlur();
          }
          if ('event_emp_clave_onblur' == $this->NM_ajax_opcao)
          {
              $this->emp_clave_onBlur();
          }
          if ('event_emp_clave_reingreso_onblur' == $this->NM_ajax_opcao)
          {
              $this->emp_clave_reingreso_onBlur();
          }
          form_del_nueva_empresa_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->emp_obligado))
          {
              $x = 0; 
              $this->emp_obligado_1 = $this->emp_obligado;
              $this->emp_obligado = ""; 
              if ($this->emp_obligado_1 != "") 
              { 
                  foreach ($this->emp_obligado_1 as $dados_emp_obligado_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->emp_obligado .= ";";
                      } 
                      $this->emp_obligado .= $dados_emp_obligado_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->nm_tira_formatacao();
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_nueva_empresa_pack_ajax_response();
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
          $this->emp_nombre_comercial = sc_strip_script($this->emp_nombre_comercial, $_SESSION['scriptcase']['charset']);
          $this->emp_nombre_comercial = sc_strip_tags($this->emp_nombre_comercial, $_SESSION['scriptcase']['charset']);
          $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          if ($this->nmgp_opcao != "incluir")
          {
              $this->scFormFocusErrorName = '';
          }
          $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_nueva_empresa_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['recarga'] = $this->nmgp_opcao;
          if ($this->sc_evento == "update")
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
          if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
          if ($this->sc_evento == "delete")
          {
              $this->NM_close_db(); 
              $this->nmgp_redireciona(2); 
          }
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_del_nueva_empresa_pack_ajax_response();
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
          form_del_nueva_empresa_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_nueva_empresa.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_datos_empresa'] . "") ?></TITLE>
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
<form name="Fdown" method="get" action="form_del_nueva_empresa_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_nueva_empresa"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_nueva_empresa', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_nueva_empresa', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_nueva_empresa', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_nueva_empresa_pack_ajax_response();
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
           case 'emp_comisionista':
               return "" . $this->Ini->Nm_lang['lang_referido_por'] . "";
               break;
           case 'emp_ruc':
               return "" . $this->Ini->Nm_lang['lang_ruc'] . "";
               break;
           case 'emp_razon_social':
               return "" . $this->Ini->Nm_lang['lang_razon_social'] . "";
               break;
           case 'emp_nombre_comercial':
               return "" . $this->Ini->Nm_lang['lang_nombre_comercial'] . "";
               break;
           case 'emp_email':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'emp_obligado':
               return "" . $this->Ini->Nm_lang['lang_obligado_contabilidad'] . "";
               break;
           case 'emp_contribuyente_especial':
               return "" . $this->Ini->Nm_lang['lang_contribuyente_especial'] . "";
               break;
           case 'emp_ambiente_sri':
               return "Emp Ambiente Sri";
               break;
           case 'emp_clave':
               return "" . $this->Ini->Nm_lang['lang_contrasenia'] . "";
               break;
           case 'emp_clave_reingreso':
               return "" . $this->Ini->Nm_lang['lang_contrasenia_confirma'] . "";
               break;
           case 'mensaje':
               return "";
               break;
           case 'emp_logo':
               return "" . $this->Ini->Nm_lang['lang_logotipo'] . "";
               break;
           case 'emp_firma':
               return "" . $this->Ini->Nm_lang['lang_firma'] . "";
               break;
           case 'emp_clave_firma':
               return "" . $this->Ini->Nm_lang['lang_clave_firma'] . "";
               break;
           case 'emp_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'emp_direccion_matriz':
               return "Emp Direccion Matriz";
               break;
           case 'emp_autorizacion_inmediata':
               return "Emp Autorizacion Inmediata";
               break;
           case 'emp_es_op_transporte':
               return "Emp Es Op Transporte";
               break;
           case 'emp_representante_legal':
               return "Emp Representante Legal";
               break;
           case 'emp_regimen_especial':
               return "Emp Regimen Especial";
               break;
           case 'emp_telefono':
               return "Emp Telefono";
               break;
           case 'emp_agente_retencion':
               return "Emp Agente Retencion";
               break;
           case 'emp_calificacion_artesanal':
               return "Emp Calificacion Artesanal";
               break;
           case 'escontribuyenteespecial':
               return "Escontribuyenteespecial";
               break;
           case 'esartesanocalificado':
               return "Esartesanocalificado";
               break;
           case 'es_profesionalsalud':
               return "Es Profesionalsalud";
               break;
           case 'emp_primeracompra':
               return "Emp Primeracompra";
               break;
           case 'emp_tipo_empresa':
               return "Emp Tipo Empresa";
               break;
           case 'emp_tipo_suscripcion':
               return "Emp Tipo Suscripcion";
               break;
           case 'usu_cedula':
               return "" . $this->Ini->Nm_lang['lang_cedula'] . "";
               break;
           case 'emp_nombre_usuario':
               return "" . $this->Ini->Nm_lang['lang_nombre'] . "";
               break;
           case 'usu_email':
               return "" . $this->Ini->Nm_lang['lang_email'] . "";
               break;
           case 'emp_usuario':
               return "" . $this->Ini->Nm_lang['lang_usuario'] . "";
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
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_nueva_empresa']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_nueva_empresa']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_nueva_empresa'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_nueva_empresa'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'emp_comisionista' == $filtro)) || (is_array($filtro) && in_array('emp_comisionista', $filtro)))
        $this->ValidateField_emp_comisionista($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_comisionista";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_ruc' == $filtro)) || (is_array($filtro) && in_array('emp_ruc', $filtro)))
        $this->ValidateField_emp_ruc($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_ruc";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_razon_social' == $filtro)) || (is_array($filtro) && in_array('emp_razon_social', $filtro)))
        $this->ValidateField_emp_razon_social($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_razon_social";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_nombre_comercial' == $filtro)) || (is_array($filtro) && in_array('emp_nombre_comercial', $filtro)))
        $this->ValidateField_emp_nombre_comercial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_nombre_comercial";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_email' == $filtro)) || (is_array($filtro) && in_array('emp_email', $filtro)))
        $this->ValidateField_emp_email($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_email";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_obligado' == $filtro)) || (is_array($filtro) && in_array('emp_obligado', $filtro)))
        $this->ValidateField_emp_obligado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_obligado";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_contribuyente_especial' == $filtro)) || (is_array($filtro) && in_array('emp_contribuyente_especial', $filtro)))
        $this->ValidateField_emp_contribuyente_especial($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_contribuyente_especial";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_ambiente_sri' == $filtro)) || (is_array($filtro) && in_array('emp_ambiente_sri', $filtro)))
        $this->ValidateField_emp_ambiente_sri($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_ambiente_sri";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_clave' == $filtro)) || (is_array($filtro) && in_array('emp_clave', $filtro)))
        $this->ValidateField_emp_clave($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_clave";

      if ((!is_array($filtro) && ('' == $filtro || 'emp_clave_reingreso' == $filtro)) || (is_array($filtro) && in_array('emp_clave_reingreso', $filtro)))
        $this->ValidateField_emp_clave_reingreso($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "emp_clave_reingreso";

      if ((!is_array($filtro) && ('' == $filtro || 'mensaje' == $filtro)) || (is_array($filtro) && in_array('mensaje', $filtro)))
        $this->ValidateField_mensaje($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "mensaje";

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

    function ValidateField_emp_comisionista(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['emp_comisionista'])) {
       return;
   }
               if (!empty($this->emp_comisionista) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']) && !in_array($this->emp_comisionista, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['emp_comisionista']))
                   {
                       $Campos_Erros['emp_comisionista'] = array();
                   }
                   $Campos_Erros['emp_comisionista'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['emp_comisionista']) || !is_array($this->NM_ajax_info['errList']['emp_comisionista']))
                   {
                       $this->NM_ajax_info['errList']['emp_comisionista'] = array();
                   }
                   $this->NM_ajax_info['errList']['emp_comisionista'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_comisionista';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_comisionista

    function ValidateField_emp_ruc(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_ruc'])) {
          return;
      }
      $this->emp_ruc = sc_strtoupper($this->emp_ruc); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['php_cmp_required']['emp_ruc']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['php_cmp_required']['emp_ruc'] == "on")) 
      { 
          if ($this->emp_ruc == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_ruc'] . "" ; 
              if (!isset($Campos_Erros['emp_ruc']))
              {
                  $Campos_Erros['emp_ruc'] = array();
              }
              $Campos_Erros['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['emp_ruc']) || !is_array($this->NM_ajax_info['errList']['emp_ruc']))
                  {
                      $this->NM_ajax_info['errList']['emp_ruc'] = array();
                  }
                  $this->NM_ajax_info['errList']['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->emp_ruc) > 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ruc'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_ruc']))
              {
                  $Campos_Erros['emp_ruc'] = array();
              }
              $Campos_Erros['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_ruc']) || !is_array($this->NM_ajax_info['errList']['emp_ruc']))
              {
                  $this->NM_ajax_info['errList']['emp_ruc'] = array();
              }
              $this->NM_ajax_info['errList']['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
          if (NM_utf8_strlen($this->emp_ruc) < 13) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ruc'] . " " . $this->Ini->Nm_lang['lang_errm_mnch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_ruc']))
              {
                  $Campos_Erros['emp_ruc'] = array();
              }
              $Campos_Erros['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_mnch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_ruc']) || !is_array($this->NM_ajax_info['errList']['emp_ruc']))
              {
                  $this->NM_ajax_info['errList']['emp_ruc'] = array();
              }
              $this->NM_ajax_info['errList']['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_mnch'] . " 13 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
   if ($this->nmgp_opcao == "incluir")
   { 
      $Teste_trab = "0123456789";
      if ($_SESSION['scriptcase']['charset'] != "UTF-8")
      {
          $Teste_trab = NM_conv_charset($Teste_trab, $_SESSION['scriptcase']['charset'], "UTF-8");
      }
;
   } 
      $Teste_trab = $Teste_trab . chr(10) . chr(13) ; 
      $Teste_compara = $this->emp_ruc ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          $Teste_critica = 0 ; 
          for ($x = 0; $x < mb_strlen($this->emp_ruc, $_SESSION['scriptcase']['charset']); $x++) 
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
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ruc'] . " " . $this->Ini->Nm_lang['lang_errm_ivch']; 
              if (!isset($Campos_Erros['emp_ruc']))
              {
                  $Campos_Erros['emp_ruc'] = array();
              }
              $Campos_Erros['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
              if (!isset($this->NM_ajax_info['errList']['emp_ruc']) || !is_array($this->NM_ajax_info['errList']['emp_ruc']))
              {
                  $this->NM_ajax_info['errList']['emp_ruc'] = array();
              }
              $this->NM_ajax_info['errList']['emp_ruc'][] = $this->Ini->Nm_lang['lang_errm_ivch'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_ruc';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_ruc

    function ValidateField_emp_razon_social(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_razon_social'])) {
          return;
      }
      $this->emp_razon_social = sc_strtoupper($this->emp_razon_social); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['php_cmp_required']['emp_razon_social']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['php_cmp_required']['emp_razon_social'] == "on")) 
      { 
          if ($this->emp_razon_social == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_razon_social'] . "" ; 
              if (!isset($Campos_Erros['emp_razon_social']))
              {
                  $Campos_Erros['emp_razon_social'] = array();
              }
              $Campos_Erros['emp_razon_social'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['emp_razon_social']) || !is_array($this->NM_ajax_info['errList']['emp_razon_social']))
                  {
                      $this->NM_ajax_info['errList']['emp_razon_social'] = array();
                  }
                  $this->NM_ajax_info['errList']['emp_razon_social'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emp_razon_social) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_razon_social'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_razon_social']))
              {
                  $Campos_Erros['emp_razon_social'] = array();
              }
              $Campos_Erros['emp_razon_social'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_razon_social']) || !is_array($this->NM_ajax_info['errList']['emp_razon_social']))
              {
                  $this->NM_ajax_info['errList']['emp_razon_social'] = array();
              }
              $this->NM_ajax_info['errList']['emp_razon_social'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_razon_social';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_razon_social

    function ValidateField_emp_nombre_comercial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_nombre_comercial'])) {
          return;
      }
      $this->emp_nombre_comercial = sc_strtoupper($this->emp_nombre_comercial); 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emp_nombre_comercial) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_nombre_comercial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_nombre_comercial']))
              {
                  $Campos_Erros['emp_nombre_comercial'] = array();
              }
              $Campos_Erros['emp_nombre_comercial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_nombre_comercial']) || !is_array($this->NM_ajax_info['errList']['emp_nombre_comercial']))
              {
                  $this->NM_ajax_info['errList']['emp_nombre_comercial'] = array();
              }
              $this->NM_ajax_info['errList']['emp_nombre_comercial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_nombre_comercial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_nombre_comercial

    function ValidateField_emp_email(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_email'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->emp_email) != "")  
          { 
              if ($teste_validade->Email($this->emp_email) == false)  
              { 
                  $hasError = true;
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_email'] . "; " ; 
                  if (!isset($Campos_Erros['emp_email']))
                  {
                      $Campos_Erros['emp_email'] = array();
                  }
                  $Campos_Erros['emp_email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                      if (!isset($this->NM_ajax_info['errList']['emp_email']) || !is_array($this->NM_ajax_info['errList']['emp_email']))
                      {
                          $this->NM_ajax_info['errList']['emp_email'] = array();
                      }
                      $this->NM_ajax_info['errList']['emp_email'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['php_cmp_required']['emp_email']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['php_cmp_required']['emp_email'] == "on") 
          { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_email'] . "" ; 
              if (!isset($Campos_Erros['emp_email']))
              {
                  $Campos_Erros['emp_email'] = array();
              }
              $Campos_Erros['emp_email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['emp_email']) || !is_array($this->NM_ajax_info['errList']['emp_email']))
                  {
                      $this->NM_ajax_info['errList']['emp_email'] = array();
                  }
                  $this->NM_ajax_info['errList']['emp_email'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_email';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_email

    function ValidateField_emp_obligado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['emp_obligado'])) {
       return;
   }
      if ($this->emp_obligado == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->emp_obligado = "N";
      } 
      else 
      { 
          if (is_array($this->emp_obligado))
          {
              $x = 0; 
              $this->emp_obligado_1 = array(); 
              foreach ($this->emp_obligado as $ind => $dados_emp_obligado_1 ) 
              {
                  if ($dados_emp_obligado_1 != "") 
                  {
                      $this->emp_obligado_1[] = $dados_emp_obligado_1;
                  } 
              } 
              $this->emp_obligado = ""; 
              foreach ($this->emp_obligado_1 as $dados_emp_obligado_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->emp_obligado .= ";";
                   } 
                   $this->emp_obligado .= $dados_emp_obligado_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_obligado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_obligado

    function ValidateField_emp_contribuyente_especial(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_contribuyente_especial'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emp_contribuyente_especial) > 5) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contribuyente_especial'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_contribuyente_especial']))
              {
                  $Campos_Erros['emp_contribuyente_especial'] = array();
              }
              $Campos_Erros['emp_contribuyente_especial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_contribuyente_especial']) || !is_array($this->NM_ajax_info['errList']['emp_contribuyente_especial']))
              {
                  $this->NM_ajax_info['errList']['emp_contribuyente_especial'] = array();
              }
              $this->NM_ajax_info['errList']['emp_contribuyente_especial'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 5 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_contribuyente_especial';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_contribuyente_especial

    function ValidateField_emp_ambiente_sri(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_ambiente_sri'])) {
          nm_limpa_numero($this->emp_ambiente_sri, $this->field_config['emp_ambiente_sri']['symbol_grp']) ; 
          return;
      }
      if ($this->emp_ambiente_sri === "" || is_null($this->emp_ambiente_sri))  
      { 
          $this->emp_ambiente_sri = 0;
          $this->sc_force_zero[] = 'emp_ambiente_sri';
      } 
      nm_limpa_numero($this->emp_ambiente_sri, $this->field_config['emp_ambiente_sri']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->emp_ambiente_sri != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->emp_ambiente_sri) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Emp Ambiente Sri: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['emp_ambiente_sri']))
                  {
                      $Campos_Erros['emp_ambiente_sri'] = array();
                  }
                  $Campos_Erros['emp_ambiente_sri'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['emp_ambiente_sri']) || !is_array($this->NM_ajax_info['errList']['emp_ambiente_sri']))
                  {
                      $this->NM_ajax_info['errList']['emp_ambiente_sri'] = array();
                  }
                  $this->NM_ajax_info['errList']['emp_ambiente_sri'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->emp_ambiente_sri, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Emp Ambiente Sri; " ; 
                  if (!isset($Campos_Erros['emp_ambiente_sri']))
                  {
                      $Campos_Erros['emp_ambiente_sri'] = array();
                  }
                  $Campos_Erros['emp_ambiente_sri'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['emp_ambiente_sri']) || !is_array($this->NM_ajax_info['errList']['emp_ambiente_sri']))
                  {
                      $this->NM_ajax_info['errList']['emp_ambiente_sri'] = array();
                  }
                  $this->NM_ajax_info['errList']['emp_ambiente_sri'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_ambiente_sri';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_ambiente_sri

    function ValidateField_emp_clave(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_clave'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emp_clave) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contrasenia'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_clave']))
              {
                  $Campos_Erros['emp_clave'] = array();
              }
              $Campos_Erros['emp_clave'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_clave']) || !is_array($this->NM_ajax_info['errList']['emp_clave']))
              {
                  $this->NM_ajax_info['errList']['emp_clave'] = array();
              }
              $this->NM_ajax_info['errList']['emp_clave'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_clave';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_clave

    function ValidateField_emp_clave_reingreso(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['emp_clave_reingreso'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->emp_clave_reingreso) > 100) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_contrasenia_confirma'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['emp_clave_reingreso']))
              {
                  $Campos_Erros['emp_clave_reingreso'] = array();
              }
              $Campos_Erros['emp_clave_reingreso'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['emp_clave_reingreso']) || !is_array($this->NM_ajax_info['errList']['emp_clave_reingreso']))
              {
                  $this->NM_ajax_info['errList']['emp_clave_reingreso'] = array();
              }
              $this->NM_ajax_info['errList']['emp_clave_reingreso'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 100 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'emp_clave_reingreso';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_emp_clave_reingreso

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
    $this->nmgp_dados_form['emp_comisionista'] = $this->emp_comisionista;
    $this->nmgp_dados_form['emp_ruc'] = $this->emp_ruc;
    $this->nmgp_dados_form['emp_razon_social'] = $this->emp_razon_social;
    $this->nmgp_dados_form['emp_nombre_comercial'] = $this->emp_nombre_comercial;
    $this->nmgp_dados_form['emp_email'] = $this->emp_email;
    $this->nmgp_dados_form['emp_obligado'] = $this->emp_obligado;
    $this->nmgp_dados_form['emp_contribuyente_especial'] = $this->emp_contribuyente_especial;
    $this->nmgp_dados_form['emp_ambiente_sri'] = $this->emp_ambiente_sri;
    $this->nmgp_dados_form['emp_clave'] = $this->emp_clave;
    $this->nmgp_dados_form['emp_clave_reingreso'] = $this->emp_clave_reingreso;
    $this->nmgp_dados_form['mensaje'] = $this->mensaje;
    if (empty($this->emp_logo))
    {
        $this->emp_logo = $this->nmgp_dados_form['emp_logo'];
    }
    $this->nmgp_dados_form['emp_logo'] = $this->emp_logo;
    $this->nmgp_dados_form['emp_logo_limpa'] = $this->emp_logo_limpa;
    if (empty($this->emp_firma))
    {
        $this->emp_firma = $this->nmgp_dados_form['emp_firma'];
    }
    $this->nmgp_dados_form['emp_firma'] = $this->emp_firma;
    $this->nmgp_dados_form['emp_firma_limpa'] = $this->emp_firma_limpa;
    $this->nmgp_dados_form['emp_clave_firma'] = $this->emp_clave_firma;
    $this->nmgp_dados_form['emp_estado'] = $this->emp_estado;
    $this->nmgp_dados_form['emp_direccion_matriz'] = $this->emp_direccion_matriz;
    $this->nmgp_dados_form['emp_autorizacion_inmediata'] = $this->emp_autorizacion_inmediata;
    $this->nmgp_dados_form['emp_es_op_transporte'] = $this->emp_es_op_transporte;
    $this->nmgp_dados_form['emp_representante_legal'] = $this->emp_representante_legal;
    $this->nmgp_dados_form['emp_regimen_especial'] = $this->emp_regimen_especial;
    $this->nmgp_dados_form['emp_telefono'] = $this->emp_telefono;
    $this->nmgp_dados_form['emp_agente_retencion'] = $this->emp_agente_retencion;
    $this->nmgp_dados_form['emp_calificacion_artesanal'] = $this->emp_calificacion_artesanal;
    $this->nmgp_dados_form['escontribuyenteespecial'] = $this->escontribuyenteespecial;
    $this->nmgp_dados_form['esartesanocalificado'] = $this->esartesanocalificado;
    $this->nmgp_dados_form['es_profesionalsalud'] = $this->es_profesionalsalud;
    $this->nmgp_dados_form['emp_primeracompra'] = $this->emp_primeracompra;
    $this->nmgp_dados_form['emp_tipo_empresa'] = $this->emp_tipo_empresa;
    $this->nmgp_dados_form['emp_tipo_suscripcion'] = $this->emp_tipo_suscripcion;
    $this->nmgp_dados_form['usu_cedula'] = $this->usu_cedula;
    $this->nmgp_dados_form['emp_nombre_usuario'] = $this->emp_nombre_usuario;
    $this->nmgp_dados_form['usu_email'] = $this->usu_email;
    $this->nmgp_dados_form['emp_usuario'] = $this->emp_usuario;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['emp_ambiente_sri'] = $this->emp_ambiente_sri;
      nm_limpa_numero($this->emp_ambiente_sri, $this->field_config['emp_ambiente_sri']['symbol_grp']) ; 
   }
   function nm_tira_formatacao_emp_ruc($Val_in)
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
      if ($Nome_Campo == "emp_ambiente_sri")
      {
          nm_limpa_numero($this->emp_ambiente_sri, $this->field_config['emp_ambiente_sri']['symbol_grp']) ; 
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
      if ('' !== $this->emp_ambiente_sri || (!empty($format_fields) && isset($format_fields['emp_ambiente_sri'])))
      {
          nmgp_Form_Num_Val($this->emp_ambiente_sri, $this->field_config['emp_ambiente_sri']['symbol_grp'], $this->field_config['emp_ambiente_sri']['symbol_dec'], "0", "S", $this->field_config['emp_ambiente_sri']['format_neg'], "", "", "-", $this->field_config['emp_ambiente_sri']['symbol_fmt']) ; 
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
          $this->ajax_return_values_emp_comisionista();
          $this->ajax_return_values_emp_ruc();
          $this->ajax_return_values_emp_razon_social();
          $this->ajax_return_values_emp_nombre_comercial();
          $this->ajax_return_values_emp_email();
          $this->ajax_return_values_emp_obligado();
          $this->ajax_return_values_emp_contribuyente_especial();
          $this->ajax_return_values_emp_ambiente_sri();
          $this->ajax_return_values_emp_clave();
          $this->ajax_return_values_emp_clave_reingreso();
          $this->ajax_return_values_mensaje();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['emp_ruc']['keyVal'] = form_del_nueva_empresa_pack_protect_string($this->nmgp_dados_form['emp_ruc']);
          }
   } // ajax_return_values

          //----- emp_comisionista
   function ajax_return_values_emp_comisionista($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_comisionista", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_comisionista);
              $aLookup = array();
              $this->_tmp_lookup_emp_comisionista = $this->emp_comisionista;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'] = array(); 
}
$aLookup[] = array(form_del_nueva_empresa_pack_protect_string('1091786547001') => str_replace('<', '&lt;',form_del_nueva_empresa_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'][] = '1091786547001';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_emp_ambiente_sri = $this->emp_ambiente_sri;
   $this->nm_tira_formatacao();


   $unformatted_value_emp_ambiente_sri = $this->emp_ambiente_sri;

   $nm_comando = "SELECT com_ruc, com_razon_social  FROM del_comisionista  where com_estado='V' ORDER BY com_razon_social";

   $this->emp_ambiente_sri = $old_value_emp_ambiente_sri;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_nueva_empresa_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_nueva_empresa_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'][] = $rs->fields[0];
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
          $sSelComp = "name=\"emp_comisionista\"";
          if (isset($this->NM_ajax_info['select_html']['emp_comisionista']) && !empty($this->NM_ajax_info['select_html']['emp_comisionista']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['emp_comisionista']);
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

                  if ($this->emp_comisionista == $sValue)
                  {
                      $this->_tmp_lookup_emp_comisionista = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['emp_comisionista'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['emp_comisionista']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['emp_comisionista']['valList'][$i] = form_del_nueva_empresa_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['emp_comisionista']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['emp_comisionista']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['emp_comisionista']['labList'] = $aLabel;
          }
   }

          //----- emp_ruc
   function ajax_return_values_emp_ruc($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_ruc", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_ruc);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_ruc'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($this->form_encode_input($sTmpValue)),
               'labList' => array($this->form_format_readonly("emp_ruc", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- emp_razon_social
   function ajax_return_values_emp_razon_social($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_razon_social", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_razon_social);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_razon_social'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emp_nombre_comercial
   function ajax_return_values_emp_nombre_comercial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_nombre_comercial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_nombre_comercial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_nombre_comercial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emp_email
   function ajax_return_values_emp_email($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_email", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_email);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_email'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- emp_obligado
   function ajax_return_values_emp_obligado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_obligado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_obligado);
              $aLookup = array();
              $this->_tmp_lookup_emp_obligado = $this->emp_obligado;

$aLookup[] = array(form_del_nueva_empresa_pack_protect_string('S') => str_replace('<', '&lt;',form_del_nueva_empresa_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_obligado'][] = 'S';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['emp_obligado']) && !empty($this->NM_ajax_info['select_html']['emp_obligado']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['emp_obligado']);
          }
          $this->NM_ajax_info['fldList']['emp_obligado'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => true,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-emp_obligado',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['emp_obligado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['emp_obligado']['valList'][$i] = form_del_nueva_empresa_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['emp_obligado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['emp_obligado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['emp_obligado']['labList'] = $aLabel;
          }
   }

          //----- emp_contribuyente_especial
   function ajax_return_values_emp_contribuyente_especial($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_contribuyente_especial", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_contribuyente_especial);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_contribuyente_especial'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- emp_ambiente_sri
   function ajax_return_values_emp_ambiente_sri($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_ambiente_sri", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_ambiente_sri);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_ambiente_sri'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- emp_clave
   function ajax_return_values_emp_clave($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_clave", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_clave);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_clave'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array(''),
              );
          }
   }

          //----- emp_clave_reingreso
   function ajax_return_values_emp_clave_reingreso($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("emp_clave_reingreso", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->emp_clave_reingreso);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['emp_clave_reingreso'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array(''),
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_emp_ambiente_sri = $this->emp_ambiente_sri;
    $original_emp_contribuyente_especial = $this->emp_contribuyente_especial;
    $original_mensaje = $this->mensaje;
}
if (!isset($this->sc_temp_mensaje_error)) {$this->sc_temp_mensaje_error = (isset($_SESSION['mensaje_error'])) ? $_SESSION['mensaje_error'] : "";}
if (!isset($this->sc_temp_permite_procesar)) {$this->sc_temp_permite_procesar = (isset($_SESSION['permite_procesar'])) ? $_SESSION['permite_procesar'] : "";}
  $this->nmgp_cmp_hidden["emp_contribuyente_especial"] = 'off'; $this->NM_ajax_info['fieldDisplay']['emp_contribuyente_especial'] = 'off';
$this->sc_temp_permite_procesar=true;
$this->sc_temp_mensaje_error='';
$check_sql = "SELECT sp_busca_parametro ('AMBSRI','2')";
 
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
    $this->emp_ambiente_sri = $this->rs[0][0];
}else{
	 $this->emp_ambiente_sri =2;
}

$check_sql = "select 
					coc_minimo_carater,
					case when coc_especiales='S' then 'SI' else 'NO' end coc_especiales ,
					case when coc_digitos='S' then 'SI' else 'NO' end coc_digitos ,
					case when coc_mayusculas='S' then 'SI' else 'NO' end coc_mayusculas  
			  from sis_config_contrasenia";
 
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
	$this->mensaje  =  $this->Ini->Nm_lang['lang_mensaje_reglas'] ."<br>".
	 $this->Ini->Nm_lang['lang_mensaje_regla1'] .":".$this->rs[0][0]."<br>".
	 $this->Ini->Nm_lang['lang_mensaje_regla2'] .":".$this->rs[0][1]."<br>".
	 $this->Ini->Nm_lang['lang_mensaje_regla3'] .":".$this->rs[0][2]."<br>".
	 $this->Ini->Nm_lang['lang_mensaje_regla4'] .":".$this->rs[0][3];
}

?>
<style>
	html{
		background-image:url("../_lib/img/usr__NM__bg__NM__fondo.jpg");
		background-repeat:no-repeat;
		background-size:100% 100%;
		background-attachment:fixed;
	}
	form{
		background-color:transparent;
	}
	body.scFormPage{
		background-color:transparent;
	}
	
</style>

<?php
if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
if (isset($this->sc_temp_mensaje_error)) { $_SESSION['mensaje_error'] = $this->sc_temp_mensaje_error;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_emp_ambiente_sri != $this->emp_ambiente_sri || (isset($bFlagRead_emp_ambiente_sri) && $bFlagRead_emp_ambiente_sri)))
    {
        $this->ajax_return_values_emp_ambiente_sri(true);
    }
    if (($original_emp_contribuyente_especial != $this->emp_contribuyente_especial || (isset($bFlagRead_emp_contribuyente_especial) && $bFlagRead_emp_contribuyente_especial)))
    {
        $this->ajax_return_values_emp_contribuyente_especial(true);
    }
    if (($original_mensaje != $this->mensaje || (isset($bFlagRead_mensaje) && $bFlagRead_mensaje)))
    {
        $this->ajax_return_values_mensaje(true);
    }
}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off'; 
      }
      $this->nm_guardar_campos();
      if ($bFormat) $this->nm_formatar_campos();
  }
//
//----------------------------------------------------
//-----> 
//----------------------------------------------------
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']))
          {
               $sc_where_pos = " WHERE ((emp_ruc < '" . substr($this->Db->qstr($this->emp_ruc), 1, -1) . "'))";
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
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = 0;
               }
               $rsc->Close(); 
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = '';

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
    if ("incluir" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_emp_clave = $this->emp_clave;
    $original_emp_clave_reingreso = $this->emp_clave_reingreso;
    $original_emp_ruc = $this->emp_ruc;
}
if (!isset($this->sc_temp_mensaje_error)) {$this->sc_temp_mensaje_error = (isset($_SESSION['mensaje_error'])) ? $_SESSION['mensaje_error'] : "";}
if (!isset($this->sc_temp_permite_procesar)) {$this->sc_temp_permite_procesar = (isset($_SESSION['permite_procesar'])) ? $_SESSION['permite_procesar'] : "";}
  $this->sc_temp_permite_procesar == true;
$this->sc_temp_mensaje_error='';

if ($this->validar_CedulaRuc($this->emp_ruc )==0){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_ruc_invalido'] .'<br>';
	$this->sc_temp_permite_procesar=false;
}
$sql="SELECT count(*) 
	  FROM del_usuario 
	  WHERE usu_usuario = '".$this->emp_ruc ."';";
 
      $nm_select = $sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ds = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ds[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ds = false;
          $this->ds_erro = $this->Db->ErrorMsg();
      } 



if ($this->ds[0][0]>0){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_usuario_existe'] .'<br>';
	$this->sc_temp_permite_procesar=false;
}

$check_sql = "SELECT 
					coc_tiempo_validez, 
					coc_minimo_carater, 
					coc_mayusculas, 
					coc_especiales, 
					coc_digitos 
			  FROM sis_config_contrasenia";
 
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
	$sis_tiempo_contrasenia= $this->rs[0][0];
	$sis_num_car_clave= $this->rs[0][1];
	$sis_mayusculas= $this->rs[0][2];
	$sis_car_especiales= $this->rs[0][3];
	$sis_digitos= $this->rs[0][4];
}else{
	$sis_tiempo_contrasenia= 90;
	$sis_num_car_clave= 8;
	$sis_mayusculas= 'N';
	$sis_car_especiales= 'N';
	$sis_digitos= 'N';
}


$sql="SELECT count(*) 
	  FROM sis_contrasenias_malas 
	  WHERE com_contrasenia='".$this->emp_clave ."';";
 
      $nm_select = $sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ds = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ds[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ds = false;
          $this->ds_erro = $this->Db->ErrorMsg();
      } 

if ($this->ds[0][0]>0){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_clave_mala'] .'<br>';
	$this->sc_temp_permite_procesar=false;
}	

if(strlen($this->emp_clave )<$sis_num_car_clave){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_sin_longitud'] .'<br>';
	$this->sc_temp_permite_procesar=false;
}	

if (!preg_match("/[A-Z]/", $this->emp_clave ) && $sis_mayusculas=="S"){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_sin_mayuscula'] .'<br>';
	$this->sc_temp_permite_procesar=false;
} 

if (!preg_match("/[0-9]/", $this->emp_clave ) && $sis_digitos=="S"){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_sin_digitos'] .'<br>';
	$this->sc_temp_permite_procesar=false;
} 

if (!$this->tieneEspeciales($this->emp_clave ) && $sis_car_especiales=="S"){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_sin_caracter_especial'] .'<br>';
	$this->sc_temp_permite_procesar=false;
} 

if ($this->repiteContraseniaHis($this->emp_usuario ,$this->emp_clave )){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_utilizada_antes'] .'<br>';
	$this->sc_temp_permite_procesar=false;
}
if ($this->emp_clave <>$this->emp_clave_reingreso ){
	$this->sc_temp_mensaje_error=$this->sc_temp_mensaje_error. $this->Ini->Nm_lang['lang_clave_no_coincide'] .'<br>';
	$this->sc_temp_permite_procesar=false;
}	
if ($this->sc_temp_permite_procesar == false)
{
	
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= $this->sc_temp_mensaje_error;
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_nueva_empresa';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_nueva_empresa';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = $this->sc_temp_mensaje_error;
 }
;
	if (isset($this->Campos_Mens_erro) && !empty($this->Campos_Mens_erro))
{
 if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
 if (isset($this->sc_temp_mensaje_error)) { $_SESSION['mensaje_error'] = $this->sc_temp_mensaje_error;}
    if ($this->NM_ajax_flag)
    {
        $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
        form_del_nueva_empresa_pack_ajax_response();
        exit;
    }
    $Sc_Lixo = ob_get_clean();
    $this->Erro->mensagem(__FILE__, __LINE__, "critica", $this->Campos_Mens_erro);
    $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
    $this->Campos_Mens_erro = "";
    if ($this->nmgp_opcao == "incluir") {$this->nmgp_opcao = "novo";};
    $this->nm_proc_onload();
    $this->nm_formatar_campos();
    $this->nm_gera_html();
    $this->NM_close_db();
    exit;
}
}
if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
if (isset($this->sc_temp_mensaje_error)) { $_SESSION['mensaje_error'] = $this->sc_temp_mensaje_error;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_emp_clave != $this->emp_clave || (isset($bFlagRead_emp_clave) && $bFlagRead_emp_clave)))
    {
        $this->ajax_return_values_emp_clave(true);
    }
    if (($original_emp_clave_reingreso != $this->emp_clave_reingreso || (isset($bFlagRead_emp_clave_reingreso) && $bFlagRead_emp_clave_reingreso)))
    {
        $this->ajax_return_values_emp_clave_reingreso(true);
    }
    if (($original_emp_ruc != $this->emp_ruc || (isset($bFlagRead_emp_ruc) && $bFlagRead_emp_ruc)))
    {
        $this->ajax_return_values_emp_ruc(true);
    }
}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off'; 
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
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_estado)) {$this->emp_estado = "V"; $NM_val_null[] = "emp_estado";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_autorizacion_inmediata)) {$this->emp_autorizacion_inmediata = "N"; $NM_val_null[] = "emp_autorizacion_inmediata";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_es_op_transporte)) {$this->emp_es_op_transporte = "N"; $NM_val_null[] = "emp_es_op_transporte";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_regimen_especial)) {$this->emp_regimen_especial = "N"; $NM_val_null[] = "emp_regimen_especial";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_agente_retencion)) {$this->emp_agente_retencion = "N"; $NM_val_null[] = "emp_agente_retencion";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->escontribuyenteespecial)) {$this->escontribuyenteespecial = "N"; $NM_val_null[] = "escontribuyenteespecial";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->esartesanocalificado)) {$this->esartesanocalificado = "N"; $NM_val_null[] = "esartesanocalificado";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->es_profesionalsalud)) {$this->es_profesionalsalud = "N"; $NM_val_null[] = "es_profesionalsalud";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_primeracompra)) {$this->emp_primeracompra = "S"; $NM_val_null[] = "emp_primeracompra";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_tipo_empresa)) {$this->emp_tipo_empresa = "TE001"; $NM_val_null[] = "emp_tipo_empresa";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->emp_tipo_suscripcion)) {$this->emp_tipo_suscripcion = "01"; $NM_val_null[] = "emp_tipo_suscripcion";}  
      $NM_val_form['emp_comisionista'] = $this->emp_comisionista;
      $NM_val_form['emp_ruc'] = $this->emp_ruc;
      $NM_val_form['emp_razon_social'] = $this->emp_razon_social;
      $NM_val_form['emp_nombre_comercial'] = $this->emp_nombre_comercial;
      $NM_val_form['emp_email'] = $this->emp_email;
      $NM_val_form['emp_obligado'] = $this->emp_obligado;
      $NM_val_form['emp_contribuyente_especial'] = $this->emp_contribuyente_especial;
      $NM_val_form['emp_ambiente_sri'] = $this->emp_ambiente_sri;
      $NM_val_form['emp_clave'] = $this->emp_clave;
      $NM_val_form['emp_clave_reingreso'] = $this->emp_clave_reingreso;
      $NM_val_form['mensaje'] = $this->mensaje;
      $NM_val_form['emp_logo'] = $this->emp_logo;
      $NM_val_form['emp_firma'] = $this->emp_firma;
      $NM_val_form['emp_clave_firma'] = $this->emp_clave_firma;
      $NM_val_form['emp_estado'] = $this->emp_estado;
      $NM_val_form['emp_direccion_matriz'] = $this->emp_direccion_matriz;
      $NM_val_form['emp_autorizacion_inmediata'] = $this->emp_autorizacion_inmediata;
      $NM_val_form['emp_es_op_transporte'] = $this->emp_es_op_transporte;
      $NM_val_form['emp_representante_legal'] = $this->emp_representante_legal;
      $NM_val_form['emp_regimen_especial'] = $this->emp_regimen_especial;
      $NM_val_form['emp_telefono'] = $this->emp_telefono;
      $NM_val_form['emp_agente_retencion'] = $this->emp_agente_retencion;
      $NM_val_form['emp_calificacion_artesanal'] = $this->emp_calificacion_artesanal;
      $NM_val_form['escontribuyenteespecial'] = $this->escontribuyenteespecial;
      $NM_val_form['esartesanocalificado'] = $this->esartesanocalificado;
      $NM_val_form['es_profesionalsalud'] = $this->es_profesionalsalud;
      $NM_val_form['emp_primeracompra'] = $this->emp_primeracompra;
      $NM_val_form['emp_tipo_empresa'] = $this->emp_tipo_empresa;
      $NM_val_form['emp_tipo_suscripcion'] = $this->emp_tipo_suscripcion;
      $NM_val_form['usu_cedula'] = $this->usu_cedula;
      $NM_val_form['emp_nombre_usuario'] = $this->emp_nombre_usuario;
      $NM_val_form['usu_email'] = $this->usu_email;
      $NM_val_form['emp_usuario'] = $this->emp_usuario;
      if ($this->emp_ambiente_sri === "" || is_null($this->emp_ambiente_sri))  
      { 
          $this->emp_ambiente_sri = 0;
          $this->sc_force_zero[] = 'emp_ambiente_sri';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->emp_ruc_before_qstr = $this->emp_ruc;
          $this->emp_ruc = substr($this->Db->qstr($this->emp_ruc), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_ruc = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_ruc);
          }
          if ($this->emp_ruc == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_ruc = "null"; 
              $NM_val_null[] = "emp_ruc";
          } 
          $this->emp_razon_social_before_qstr = $this->emp_razon_social;
          $this->emp_razon_social = substr($this->Db->qstr($this->emp_razon_social), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_razon_social = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_razon_social);
          }
          if ($this->emp_razon_social == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_razon_social = "null"; 
              $NM_val_null[] = "emp_razon_social";
          } 
          $this->emp_nombre_comercial_before_qstr = $this->emp_nombre_comercial;
          $this->emp_nombre_comercial = substr($this->Db->qstr($this->emp_nombre_comercial), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_nombre_comercial = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_nombre_comercial);
          }
          if ($this->emp_nombre_comercial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_nombre_comercial = "null"; 
              $NM_val_null[] = "emp_nombre_comercial";
          } 
          $this->emp_logo_before_qstr = $this->emp_logo;
          $this->emp_logo = substr($this->Db->qstr($this->emp_logo), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_logo = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_logo);
          }
          if ($this->emp_logo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_logo = "null"; 
              $NM_val_null[] = "emp_logo";
          } 
          $this->emp_firma_original_filename = $this->emp_firma; 
          $this->emp_firma_before_qstr = $this->emp_firma;
          $this->emp_firma = substr($this->Db->qstr($this->emp_firma), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_firma = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_firma);
          }
          if ($this->emp_firma == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_firma = "null"; 
              $NM_val_null[] = "emp_firma";
          } 
          $this->emp_clave_firma_before_qstr = $this->emp_clave_firma;
          $this->emp_clave_firma = substr($this->Db->qstr($this->emp_clave_firma), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_clave_firma = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_clave_firma);
          }
          if ($this->emp_clave_firma == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_clave_firma = "null"; 
              $NM_val_null[] = "emp_clave_firma";
          } 
          $this->emp_obligado_before_qstr = $this->emp_obligado;
          $this->emp_obligado = substr($this->Db->qstr($this->emp_obligado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_obligado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_obligado);
          }
          if ($this->emp_obligado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_obligado = "null"; 
              $NM_val_null[] = "emp_obligado";
          } 
          $this->emp_contribuyente_especial_before_qstr = $this->emp_contribuyente_especial;
          $this->emp_contribuyente_especial = substr($this->Db->qstr($this->emp_contribuyente_especial), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_contribuyente_especial = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_contribuyente_especial);
          }
          if ($this->emp_contribuyente_especial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_contribuyente_especial = "null"; 
              $NM_val_null[] = "emp_contribuyente_especial";
          } 
          $this->emp_estado_before_qstr = $this->emp_estado;
          $this->emp_estado = substr($this->Db->qstr($this->emp_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_estado);
          }
          if ($this->emp_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_estado = "null"; 
              $NM_val_null[] = "emp_estado";
          } 
          $this->emp_email_before_qstr = $this->emp_email;
          $this->emp_email = substr($this->Db->qstr($this->emp_email), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_email = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_email);
          }
          if ($this->emp_email == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_email = "null"; 
              $NM_val_null[] = "emp_email";
          } 
          $this->emp_direccion_matriz_before_qstr = $this->emp_direccion_matriz;
          $this->emp_direccion_matriz = substr($this->Db->qstr($this->emp_direccion_matriz), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_direccion_matriz = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_direccion_matriz);
          }
          if ($this->emp_direccion_matriz == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_direccion_matriz = "null"; 
              $NM_val_null[] = "emp_direccion_matriz";
          } 
          $this->emp_autorizacion_inmediata_before_qstr = $this->emp_autorizacion_inmediata;
          $this->emp_autorizacion_inmediata = substr($this->Db->qstr($this->emp_autorizacion_inmediata), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_autorizacion_inmediata = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_autorizacion_inmediata);
          }
          if ($this->emp_autorizacion_inmediata == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_autorizacion_inmediata = "null"; 
              $NM_val_null[] = "emp_autorizacion_inmediata";
          } 
          $this->emp_es_op_transporte_before_qstr = $this->emp_es_op_transporte;
          $this->emp_es_op_transporte = substr($this->Db->qstr($this->emp_es_op_transporte), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_es_op_transporte = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_es_op_transporte);
          }
          if ($this->emp_es_op_transporte == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_es_op_transporte = "null"; 
              $NM_val_null[] = "emp_es_op_transporte";
          } 
          $this->emp_representante_legal_before_qstr = $this->emp_representante_legal;
          $this->emp_representante_legal = substr($this->Db->qstr($this->emp_representante_legal), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_representante_legal = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_representante_legal);
          }
          if ($this->emp_representante_legal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_representante_legal = "null"; 
              $NM_val_null[] = "emp_representante_legal";
          } 
          $this->emp_regimen_especial_before_qstr = $this->emp_regimen_especial;
          $this->emp_regimen_especial = substr($this->Db->qstr($this->emp_regimen_especial), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_regimen_especial = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_regimen_especial);
          }
          if ($this->emp_regimen_especial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_regimen_especial = "null"; 
              $NM_val_null[] = "emp_regimen_especial";
          } 
          $this->emp_telefono_before_qstr = $this->emp_telefono;
          $this->emp_telefono = substr($this->Db->qstr($this->emp_telefono), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_telefono = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_telefono);
          }
          if ($this->emp_telefono == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_telefono = "null"; 
              $NM_val_null[] = "emp_telefono";
          } 
          $this->emp_agente_retencion_before_qstr = $this->emp_agente_retencion;
          $this->emp_agente_retencion = substr($this->Db->qstr($this->emp_agente_retencion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_agente_retencion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_agente_retencion);
          }
          if ($this->emp_agente_retencion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_agente_retencion = "null"; 
              $NM_val_null[] = "emp_agente_retencion";
          } 
          $this->emp_calificacion_artesanal_before_qstr = $this->emp_calificacion_artesanal;
          $this->emp_calificacion_artesanal = substr($this->Db->qstr($this->emp_calificacion_artesanal), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_calificacion_artesanal = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_calificacion_artesanal);
          }
          if ($this->emp_calificacion_artesanal == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_calificacion_artesanal = "null"; 
              $NM_val_null[] = "emp_calificacion_artesanal";
          } 
          $this->escontribuyenteespecial_before_qstr = $this->escontribuyenteespecial;
          $this->escontribuyenteespecial = substr($this->Db->qstr($this->escontribuyenteespecial), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->escontribuyenteespecial = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->escontribuyenteespecial);
          }
          if ($this->escontribuyenteespecial == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->escontribuyenteespecial = "null"; 
              $NM_val_null[] = "escontribuyenteespecial";
          } 
          $this->esartesanocalificado_before_qstr = $this->esartesanocalificado;
          $this->esartesanocalificado = substr($this->Db->qstr($this->esartesanocalificado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->esartesanocalificado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->esartesanocalificado);
          }
          if ($this->esartesanocalificado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->esartesanocalificado = "null"; 
              $NM_val_null[] = "esartesanocalificado";
          } 
          $this->es_profesionalsalud_before_qstr = $this->es_profesionalsalud;
          $this->es_profesionalsalud = substr($this->Db->qstr($this->es_profesionalsalud), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->es_profesionalsalud = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->es_profesionalsalud);
          }
          if ($this->es_profesionalsalud == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->es_profesionalsalud = "null"; 
              $NM_val_null[] = "es_profesionalsalud";
          } 
          $this->emp_primeracompra_before_qstr = $this->emp_primeracompra;
          $this->emp_primeracompra = substr($this->Db->qstr($this->emp_primeracompra), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_primeracompra = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_primeracompra);
          }
          if ($this->emp_primeracompra == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_primeracompra = "null"; 
              $NM_val_null[] = "emp_primeracompra";
          } 
          $this->emp_tipo_empresa_before_qstr = $this->emp_tipo_empresa;
          $this->emp_tipo_empresa = substr($this->Db->qstr($this->emp_tipo_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_tipo_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_tipo_empresa);
          }
          if ($this->emp_tipo_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_tipo_empresa = "null"; 
              $NM_val_null[] = "emp_tipo_empresa";
          } 
          $this->emp_comisionista_before_qstr = $this->emp_comisionista;
          $this->emp_comisionista = substr($this->Db->qstr($this->emp_comisionista), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_comisionista = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_comisionista);
          }
          if ($this->emp_comisionista == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_comisionista = "null"; 
              $NM_val_null[] = "emp_comisionista";
          } 
          $this->emp_tipo_suscripcion_before_qstr = $this->emp_tipo_suscripcion;
          $this->emp_tipo_suscripcion = substr($this->Db->qstr($this->emp_tipo_suscripcion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->emp_tipo_suscripcion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->emp_tipo_suscripcion);
          }
          if ($this->emp_tipo_suscripcion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->emp_tipo_suscripcion = "null"; 
              $NM_val_null[] = "emp_tipo_suscripcion";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_nueva_empresa_pack_ajax_response();
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
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "emp_razon_social = '$this->emp_razon_social', emp_nombre_comercial = '$this->emp_nombre_comercial', emp_obligado = '$this->emp_obligado', emp_contribuyente_especial = '$this->emp_contribuyente_especial', emp_email = '$this->emp_email', emp_ambiente_sri = $this->emp_ambiente_sri, emp_comisionista = '$this->emp_comisionista'"; 
              } 
              if (isset($NM_val_form['emp_estado']) && $NM_val_form['emp_estado'] != $this->nmgp_dados_select['emp_estado']) 
              { 
                  $SC_fields_update[] = "emp_estado = '$this->emp_estado'"; 
              } 
              if (isset($NM_val_form['emp_direccion_matriz']) && $NM_val_form['emp_direccion_matriz'] != $this->nmgp_dados_select['emp_direccion_matriz']) 
              { 
                  $SC_fields_update[] = "emp_direccion_matriz = '$this->emp_direccion_matriz'"; 
              } 
              if (isset($NM_val_form['emp_autorizacion_inmediata']) && $NM_val_form['emp_autorizacion_inmediata'] != $this->nmgp_dados_select['emp_autorizacion_inmediata']) 
              { 
                  $SC_fields_update[] = "emp_autorizacion_inmediata = '$this->emp_autorizacion_inmediata'"; 
              } 
              if (isset($NM_val_form['emp_es_op_transporte']) && $NM_val_form['emp_es_op_transporte'] != $this->nmgp_dados_select['emp_es_op_transporte']) 
              { 
                  $SC_fields_update[] = "emp_es_op_transporte = '$this->emp_es_op_transporte'"; 
              } 
              if (isset($NM_val_form['emp_representante_legal']) && $NM_val_form['emp_representante_legal'] != $this->nmgp_dados_select['emp_representante_legal']) 
              { 
                  $SC_fields_update[] = "emp_representante_legal = '$this->emp_representante_legal'"; 
              } 
              if (isset($NM_val_form['emp_regimen_especial']) && $NM_val_form['emp_regimen_especial'] != $this->nmgp_dados_select['emp_regimen_especial']) 
              { 
                  $SC_fields_update[] = "emp_regimen_especial = '$this->emp_regimen_especial'"; 
              } 
              if (isset($NM_val_form['emp_telefono']) && $NM_val_form['emp_telefono'] != $this->nmgp_dados_select['emp_telefono']) 
              { 
                  $SC_fields_update[] = "emp_telefono = '$this->emp_telefono'"; 
              } 
              if (isset($NM_val_form['emp_agente_retencion']) && $NM_val_form['emp_agente_retencion'] != $this->nmgp_dados_select['emp_agente_retencion']) 
              { 
                  $SC_fields_update[] = "emp_agente_retencion = '$this->emp_agente_retencion'"; 
              } 
              if (isset($NM_val_form['emp_calificacion_artesanal']) && $NM_val_form['emp_calificacion_artesanal'] != $this->nmgp_dados_select['emp_calificacion_artesanal']) 
              { 
                  $SC_fields_update[] = "emp_calificacion_artesanal = '$this->emp_calificacion_artesanal'"; 
              } 
              if (isset($NM_val_form['escontribuyenteespecial']) && $NM_val_form['escontribuyenteespecial'] != $this->nmgp_dados_select['escontribuyenteespecial']) 
              { 
                  $SC_fields_update[] = "escontribuyenteespecial = '$this->escontribuyenteespecial'"; 
              } 
              if (isset($NM_val_form['esartesanocalificado']) && $NM_val_form['esartesanocalificado'] != $this->nmgp_dados_select['esartesanocalificado']) 
              { 
                  $SC_fields_update[] = "esartesanocalificado = '$this->esartesanocalificado'"; 
              } 
              if (isset($NM_val_form['es_profesionalsalud']) && $NM_val_form['es_profesionalsalud'] != $this->nmgp_dados_select['es_profesionalsalud']) 
              { 
                  $SC_fields_update[] = "es_profesionalsalud = '$this->es_profesionalsalud'"; 
              } 
              if (isset($NM_val_form['emp_primeracompra']) && $NM_val_form['emp_primeracompra'] != $this->nmgp_dados_select['emp_primeracompra']) 
              { 
                  $SC_fields_update[] = "emp_primeracompra = '$this->emp_primeracompra'"; 
              } 
              if (isset($NM_val_form['emp_tipo_empresa']) && $NM_val_form['emp_tipo_empresa'] != $this->nmgp_dados_select['emp_tipo_empresa']) 
              { 
                  $SC_fields_update[] = "emp_tipo_empresa = '$this->emp_tipo_empresa'"; 
              } 
              if (isset($NM_val_form['emp_tipo_suscripcion']) && $NM_val_form['emp_tipo_suscripcion'] != $this->nmgp_dados_select['emp_tipo_suscripcion']) 
              { 
                  $SC_fields_update[] = "emp_tipo_suscripcion = '$this->emp_tipo_suscripcion'"; 
              } 
             if (isset($this->Ini->nm_bases_oracle) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
             {
             if ($this->emp_clave_firma != "" && $this->emp_clave_firma != "null" && $this->emp_clave_firma != $this->nmgp_dados_select['emp_clave_firma']) 
             { 
                  $SC_fields_update[] = "emp_clave_firma = '$this->emp_clave_firma'" ; 
             } 
             } 
             else 
             {
             if ($this->emp_clave_firma != "" && $this->emp_clave_firma != "null" && $this->emp_clave_firma != $this->nmgp_dados_select['emp_clave_firma']) 
             { 
                  $SC_fields_update[] = "emp_clave_firma = '$this->emp_clave_firma'" ; 
             } 
             } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE emp_ruc = '$this->emp_ruc' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE emp_ruc = '$this->emp_ruc' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE emp_ruc = '$this->emp_ruc' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE emp_ruc = '$this->emp_ruc' ";  
              }  
              else  
              {
                  $comando .= " WHERE emp_ruc = '$this->emp_ruc' ";  
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
                                  form_del_nueva_empresa_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->emp_ruc = $this->emp_ruc_before_qstr;
              $this->emp_razon_social = $this->emp_razon_social_before_qstr;
              $this->emp_nombre_comercial = $this->emp_nombre_comercial_before_qstr;
              $this->emp_logo = $this->emp_logo_before_qstr;
              $this->emp_firma = $this->emp_firma_before_qstr;
              $this->emp_clave_firma = $this->emp_clave_firma_before_qstr;
              $this->emp_obligado = $this->emp_obligado_before_qstr;
              $this->emp_contribuyente_especial = $this->emp_contribuyente_especial_before_qstr;
              $this->emp_estado = $this->emp_estado_before_qstr;
              $this->emp_email = $this->emp_email_before_qstr;
              $this->emp_direccion_matriz = $this->emp_direccion_matriz_before_qstr;
              $this->emp_autorizacion_inmediata = $this->emp_autorizacion_inmediata_before_qstr;
              $this->emp_es_op_transporte = $this->emp_es_op_transporte_before_qstr;
              $this->emp_representante_legal = $this->emp_representante_legal_before_qstr;
              $this->emp_regimen_especial = $this->emp_regimen_especial_before_qstr;
              $this->emp_telefono = $this->emp_telefono_before_qstr;
              $this->emp_agente_retencion = $this->emp_agente_retencion_before_qstr;
              $this->emp_calificacion_artesanal = $this->emp_calificacion_artesanal_before_qstr;
              $this->escontribuyenteespecial = $this->escontribuyenteespecial_before_qstr;
              $this->esartesanocalificado = $this->esartesanocalificado_before_qstr;
              $this->es_profesionalsalud = $this->es_profesionalsalud_before_qstr;
              $this->emp_primeracompra = $this->emp_primeracompra_before_qstr;
              $this->emp_tipo_empresa = $this->emp_tipo_empresa_before_qstr;
              $this->emp_comisionista = $this->emp_comisionista_before_qstr;
              $this->emp_tipo_suscripcion = $this->emp_tipo_suscripcion_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['emp_ruc'])) { $this->emp_ruc = $NM_val_form['emp_ruc']; }
              elseif (isset($this->emp_ruc)) { $this->nm_limpa_alfa($this->emp_ruc); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_razon_social'])) { $this->emp_razon_social = $NM_val_form['emp_razon_social']; }
              elseif (isset($this->emp_razon_social)) { $this->nm_limpa_alfa($this->emp_razon_social); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_nombre_comercial'])) { $this->emp_nombre_comercial = $NM_val_form['emp_nombre_comercial']; }
              elseif (isset($this->emp_nombre_comercial)) { $this->nm_limpa_alfa($this->emp_nombre_comercial); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_obligado'])) { $this->emp_obligado = $NM_val_form['emp_obligado']; }
              elseif (isset($this->emp_obligado)) { $this->nm_limpa_alfa($this->emp_obligado); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_contribuyente_especial'])) { $this->emp_contribuyente_especial = $NM_val_form['emp_contribuyente_especial']; }
              elseif (isset($this->emp_contribuyente_especial)) { $this->nm_limpa_alfa($this->emp_contribuyente_especial); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_email'])) { $this->emp_email = $NM_val_form['emp_email']; }
              elseif (isset($this->emp_email)) { $this->nm_limpa_alfa($this->emp_email); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_ambiente_sri'])) { $this->emp_ambiente_sri = $NM_val_form['emp_ambiente_sri']; }
              elseif (isset($this->emp_ambiente_sri)) { $this->nm_limpa_alfa($this->emp_ambiente_sri); }
              if     (isset($NM_val_form) && isset($NM_val_form['emp_comisionista'])) { $this->emp_comisionista = $NM_val_form['emp_comisionista']; }
              elseif (isset($this->emp_comisionista)) { $this->nm_limpa_alfa($this->emp_comisionista); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $bChange_emp_firma = false;
              if (isset($this->emp_firma_original_filename) && '' != $this->emp_firma_original_filename && $this->emp_firma_original_filename != $this->emp_firma)
              {
                  $sTmpOrig_emp_firma = $this->emp_firma;
                  $this->emp_firma    = $this->emp_firma_original_filename;
                  $bChange_emp_firma  = true;
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('emp_comisionista', 'emp_ruc', 'emp_razon_social', 'emp_nombre_comercial', 'emp_email', 'emp_obligado', 'emp_contribuyente_especial', 'emp_ambiente_sri', 'emp_clave', 'emp_clave_reingreso', 'mensaje'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              if ($bChange_emp_firma)
              {
                  $this->emp_firma                   = $sTmpOrig_emp_firma;
                  $this->emp_firma_original_filename = '';
              }

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_nueva_empresa_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $_test_file = $this->fetchUniqueUploadName($this->emp_logo_scfile_name, $dir_file, "emp_logo");
              if (trim($this->emp_logo_scfile_name) != $_test_file)
              {
                  $this->emp_logo_scfile_name = $_test_file;
                  $this->emp_logo = $_test_file;
              }
              $_test_file = $this->fetchUniqueUploadName($this->emp_firma_scfile_name, $dir_file, "emp_firma");
              if (trim($this->emp_firma_scfile_name) != $_test_file)
              {
                  $this->emp_firma_scfile_name = $_test_file;
                  $this->emp_firma = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES ('$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion) VALUES (" . $NM_seq_auto . "'$this->emp_ruc', '$this->emp_razon_social', '$this->emp_nombre_comercial', '$this->emp_logo', '$this->emp_firma', '$this->emp_clave_firma', '$this->emp_obligado', '$this->emp_contribuyente_especial', '$this->emp_estado', '$this->emp_email', $this->emp_ambiente_sri, '$this->emp_direccion_matriz', '$this->emp_autorizacion_inmediata', '$this->emp_es_op_transporte', '$this->emp_representante_legal', '$this->emp_regimen_especial', '$this->emp_telefono', '$this->emp_agente_retencion', '$this->emp_calificacion_artesanal', '$this->escontribuyenteespecial', '$this->esartesanocalificado', '$this->es_profesionalsalud', '$this->emp_primeracompra', '$this->emp_tipo_empresa', '$this->emp_comisionista', '$this->emp_tipo_suscripcion')"; 
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
                              form_del_nueva_empresa_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->emp_ruc = $this->emp_ruc_before_qstr;
              $this->emp_razon_social = $this->emp_razon_social_before_qstr;
              $this->emp_nombre_comercial = $this->emp_nombre_comercial_before_qstr;
              $this->emp_logo = $this->emp_logo_before_qstr;
              $this->emp_firma = $this->emp_firma_before_qstr;
              $this->emp_clave_firma = $this->emp_clave_firma_before_qstr;
              $this->emp_obligado = $this->emp_obligado_before_qstr;
              $this->emp_contribuyente_especial = $this->emp_contribuyente_especial_before_qstr;
              $this->emp_estado = $this->emp_estado_before_qstr;
              $this->emp_email = $this->emp_email_before_qstr;
              $this->emp_direccion_matriz = $this->emp_direccion_matriz_before_qstr;
              $this->emp_autorizacion_inmediata = $this->emp_autorizacion_inmediata_before_qstr;
              $this->emp_es_op_transporte = $this->emp_es_op_transporte_before_qstr;
              $this->emp_representante_legal = $this->emp_representante_legal_before_qstr;
              $this->emp_regimen_especial = $this->emp_regimen_especial_before_qstr;
              $this->emp_telefono = $this->emp_telefono_before_qstr;
              $this->emp_agente_retencion = $this->emp_agente_retencion_before_qstr;
              $this->emp_calificacion_artesanal = $this->emp_calificacion_artesanal_before_qstr;
              $this->escontribuyenteespecial = $this->escontribuyenteespecial_before_qstr;
              $this->esartesanocalificado = $this->esartesanocalificado_before_qstr;
              $this->es_profesionalsalud = $this->es_profesionalsalud_before_qstr;
              $this->emp_primeracompra = $this->emp_primeracompra_before_qstr;
              $this->emp_tipo_empresa = $this->emp_tipo_empresa_before_qstr;
              $this->emp_comisionista = $this->emp_comisionista_before_qstr;
              $this->emp_tipo_suscripcion = $this->emp_tipo_suscripcion_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->emp_ruc = $this->emp_ruc_before_qstr;
              $this->emp_razon_social = $this->emp_razon_social_before_qstr;
              $this->emp_nombre_comercial = $this->emp_nombre_comercial_before_qstr;
              $this->emp_logo = $this->emp_logo_before_qstr;
              $this->emp_firma = $this->emp_firma_before_qstr;
              $this->emp_clave_firma = $this->emp_clave_firma_before_qstr;
              $this->emp_obligado = $this->emp_obligado_before_qstr;
              $this->emp_contribuyente_especial = $this->emp_contribuyente_especial_before_qstr;
              $this->emp_estado = $this->emp_estado_before_qstr;
              $this->emp_email = $this->emp_email_before_qstr;
              $this->emp_direccion_matriz = $this->emp_direccion_matriz_before_qstr;
              $this->emp_autorizacion_inmediata = $this->emp_autorizacion_inmediata_before_qstr;
              $this->emp_es_op_transporte = $this->emp_es_op_transporte_before_qstr;
              $this->emp_representante_legal = $this->emp_representante_legal_before_qstr;
              $this->emp_regimen_especial = $this->emp_regimen_especial_before_qstr;
              $this->emp_telefono = $this->emp_telefono_before_qstr;
              $this->emp_agente_retencion = $this->emp_agente_retencion_before_qstr;
              $this->emp_calificacion_artesanal = $this->emp_calificacion_artesanal_before_qstr;
              $this->escontribuyenteespecial = $this->escontribuyenteespecial_before_qstr;
              $this->esartesanocalificado = $this->esartesanocalificado_before_qstr;
              $this->es_profesionalsalud = $this->es_profesionalsalud_before_qstr;
              $this->emp_primeracompra = $this->emp_primeracompra_before_qstr;
              $this->emp_tipo_empresa = $this->emp_tipo_empresa_before_qstr;
              $this->emp_comisionista = $this->emp_comisionista_before_qstr;
              $this->emp_tipo_suscripcion = $this->emp_tipo_suscripcion_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao = "novo"; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "R")
              { 
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['return_edit'] = "new";
              } 
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->emp_ruc = substr($this->Db->qstr($this->emp_ruc), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where emp_ruc = '$this->emp_ruc' "); 
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
                          form_del_nueva_empresa_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']);
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
        $_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_emp_clave = $this->emp_clave;
    $original_emp_email = $this->emp_email;
    $original_emp_razon_social = $this->emp_razon_social;
    $original_emp_ruc = $this->emp_ruc;
}
  $insert_sql = "INSERT INTO	del_usuario(
	usu_empresa,
	usu_usuario,
	usu_contrasenia,
	usu_nombre,
	usu_cedula,
	usu_email,
	usu_cambio_contrasenia,
	usu_fecha_crea,
	usu_fecha_estado,
	usu_estado,
	usu_super_administrador
	)VALUES(
		'".$this->emp_ruc ."',
		'".$this->emp_ruc ."',
		md5('".$this->emp_clave ."'),
		'".$this->emp_razon_social ."',
		'".$this->emp_ruc ."',
		'".$this->emp_email ."',
		'S',
		getdate(),
		getdate(),
		'V',
		'S'
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
                form_del_nueva_empresa_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

$insert_sql = "INSERT INTO	del_contrasenias_his(
					coh_usuario,
					coh_contrasenia,
					coh_fecha) 
			   VALUES(
					'".$this->emp_ruc ."',
					'".$this->emp_clave ."',
					getdate()
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
                form_del_nueva_empresa_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$exec_sql="SELECT  * from sp_inicializa_empresa ('".$this->emp_ruc ."')
		   as (o_num_error int, o_Mensaje_Error varchar);";
 
      $nm_select = $exec_sql; 
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


$check_sql = "SELECT sp_busca_parametro ('RUTA_EMPRESA','E:/Desarrollos/')";
 
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

$rights=0777;
$dir=$this->rs[0][0].$this->emp_ruc ;
$dir_logo=$dir.'/logo';
$dir_firma=$dir.'/firma';
$dir_documentos=$dir.'/documentos';
if (!file_exists($dir)){
		mkdir($dir, $rights);
		chmod($dir, $rights);
}	
if (!file_exists($dir_logo)){
	mkdir($dir_logo, $rights);
	chmod($dir_logo, $rights);
}	
if (!file_exists($dir_firma)){
	mkdir($dir_firma, $rights);
	chmod($dir_firma, $rights);
}	
if (!file_exists($dir_documentos)){
	mkdir($dir_documentos, $rights);
	chmod($dir_documentos, $rights);
}
	$mail = $this->emp_email ;
	$clave=$this->emp_clave ;
	$mail_smtp_server    = $_SESSION['Igtech_SMTP'];       
	$mail_smtp_user      = $_SESSION['Igtech_UsuarioSMTP'];
	$mail_smtp_pass      = $_SESSION['Igtech_ClaveSMTP'];
	$mail_from           = $_SESSION['Igtech_Email_seguridad'];
	$mail_to             = $mail;
	$mail_subject        =  $this->Ini->Nm_lang['lang_registro_correcto'] ;
	$mail_message        = $this->formulario_registro_empresa($this->Hoy(),$this->emp_ruc ,$clave); 
	$mail_format         = 'H';
	$mail_copies		 = '';	
	$mail_tp_copies		 = '';
	$mail_port           = $_SESSION['Igtech_PuertoSMTP'];
	$mail_tp_connection  = $_SESSION['Igtech_TipoConexionSMTP'];

	    include_once($this->Ini->path_third . "/swift/swift_required.php");
    $sc_mail_port     = "$mail_port";
    $sc_mail_tp_port  = "$mail_tp_connection";
    $sc_mail_tp_mens  = "$mail_format";
    $sc_mail_tp_copy  = "$mail_tp_copies";
    $this->sc_mail_count = 0;
    $this->sc_mail_erro  = "";
    $this->sc_mail_ok    = true;
    if ($sc_mail_tp_port == "S" || $sc_mail_tp_port == "Y")
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 465;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'ssl');
    }
    elseif ($sc_mail_tp_port == "T")
    {
        $sc_mail_port = !empty($sc_mail_port) ? $sc_mail_port : 587;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port, 'tls');
    }
    else
    {
        $sc_mail_port = (!empty($sc_mail_port)) ? $sc_mail_port : 25;
        $Con_Mail = Swift_SmtpTransport::newInstance($mail_smtp_server, $sc_mail_port);
    }
    $Con_Mail->setUsername($mail_smtp_user);
    $Con_Mail->setpassword($mail_smtp_pass);
    $Send_Mail = Swift_Mailer::newInstance($Con_Mail);
    if ($sc_mail_tp_mens == "H")
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject);
        $Mens_Mail->setBody(SC_Mail_Image($mail_message, $Mens_Mail))->setContentType("text/html");
    }
    else
    {
        $Mens_Mail = Swift_Message::newInstance($mail_subject)->setBody($mail_message);
    }
    if (!empty($_SESSION['scriptcase']['charset']))
    {
        $Mens_Mail->setCharset($_SESSION['scriptcase']['charset']);
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
    $this->sc_mail_count = $Send_Mail->send($Mens_Mail->setFrom($Arr_addr[0], $Arr_addr[1]), $Err_mail);
    if (!empty($Err_mail))
    {
        $this->sc_mail_erro = $Err_mail;
        $this->sc_mail_ok   = false;
    }
;



$redir_app    = 'control_mostrar_mensaje';  
$redir_target = '_self';  
$redir_parametros = array();
$redir_param  = array(     
					'var_mensaje' => 'Empresa Registrada con Exito'.'<br>'
									 .'Revise su correo electrónico',
					'var_aplicacion' => 'form_login',
					'var_target'=>'_self',	
);

 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($redir_app, $this->nm_location, $redir_param, "$redir_target", "ret_self", 440, 630);
 };
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_emp_clave != $this->emp_clave || (isset($bFlagRead_emp_clave) && $bFlagRead_emp_clave)))
    {
        $this->ajax_return_values_emp_clave(true);
    }
    if (($original_emp_email != $this->emp_email || (isset($bFlagRead_emp_email) && $bFlagRead_emp_email)))
    {
        $this->ajax_return_values_emp_email(true);
    }
    if (($original_emp_razon_social != $this->emp_razon_social || (isset($bFlagRead_emp_razon_social) && $bFlagRead_emp_razon_social)))
    {
        $this->ajax_return_values_emp_razon_social(true);
    }
    if (($original_emp_ruc != $this->emp_ruc || (isset($bFlagRead_emp_ruc) && $bFlagRead_emp_ruc)))
    {
        $this->ajax_return_values_emp_ruc(true);
    }
}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off'; 
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
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['parms'] = "emp_ruc?#?$this->emp_ruc?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->emp_ruc = null === $this->emp_ruc ? null : substr($this->Db->qstr($this->emp_ruc), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT emp_ruc, emp_razon_social, emp_nombre_comercial, emp_logo, emp_firma, emp_clave_firma, emp_obligado, emp_contribuyente_especial, emp_estado, emp_email, emp_ambiente_sri, emp_direccion_matriz, emp_autorizacion_inmediata, emp_es_op_transporte, emp_representante_legal, emp_regimen_especial, emp_telefono, emp_agente_retencion, emp_calificacion_artesanal, escontribuyenteespecial, esartesanocalificado, es_profesionalsalud, emp_primeracompra, emp_tipo_empresa, emp_comisionista, emp_tipo_suscripcion from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "emp_ruc = '$this->emp_ruc'"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "emp_ruc = '$this->emp_ruc'"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "emp_ruc = '$this->emp_ruc'"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "emp_ruc = '$this->emp_ruc'"; 
              }  
              else  
              {
                  $aWhere[] = "emp_ruc = '$this->emp_ruc'"; 
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
          $sc_order_by = "emp_ruc";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['select'] = ""; 
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter'] = true;
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
              $this->emp_ruc = $rs->fields[0] ; 
              $this->nmgp_dados_select['emp_ruc'] = $this->emp_ruc;
              $this->emp_razon_social = $rs->fields[1] ; 
              $this->nmgp_dados_select['emp_razon_social'] = $this->emp_razon_social;
              $this->emp_nombre_comercial = $rs->fields[2] ; 
              $this->nmgp_dados_select['emp_nombre_comercial'] = $this->emp_nombre_comercial;
              $this->emp_logo = $rs->fields[3] ; 
              $this->nmgp_dados_select['emp_logo'] = $this->emp_logo;
              $this->emp_firma = $rs->fields[4] ; 
              $this->nmgp_dados_select['emp_firma'] = $this->emp_firma;
              $this->emp_clave_firma = $rs->fields[5] ; 
              $this->nmgp_dados_select['emp_clave_firma'] = $this->emp_clave_firma;
              $this->emp_obligado = $rs->fields[6] ; 
              $this->nmgp_dados_select['emp_obligado'] = $this->emp_obligado;
              $this->emp_contribuyente_especial = $rs->fields[7] ; 
              $this->nmgp_dados_select['emp_contribuyente_especial'] = $this->emp_contribuyente_especial;
              $this->emp_estado = $rs->fields[8] ; 
              $this->nmgp_dados_select['emp_estado'] = $this->emp_estado;
              $this->emp_email = $rs->fields[9] ; 
              $this->nmgp_dados_select['emp_email'] = $this->emp_email;
              $this->emp_ambiente_sri = $rs->fields[10] ; 
              $this->nmgp_dados_select['emp_ambiente_sri'] = $this->emp_ambiente_sri;
              $this->emp_direccion_matriz = $rs->fields[11] ; 
              $this->nmgp_dados_select['emp_direccion_matriz'] = $this->emp_direccion_matriz;
              $this->emp_autorizacion_inmediata = $rs->fields[12] ; 
              $this->nmgp_dados_select['emp_autorizacion_inmediata'] = $this->emp_autorizacion_inmediata;
              $this->emp_es_op_transporte = $rs->fields[13] ; 
              $this->nmgp_dados_select['emp_es_op_transporte'] = $this->emp_es_op_transporte;
              $this->emp_representante_legal = $rs->fields[14] ; 
              $this->nmgp_dados_select['emp_representante_legal'] = $this->emp_representante_legal;
              $this->emp_regimen_especial = $rs->fields[15] ; 
              $this->nmgp_dados_select['emp_regimen_especial'] = $this->emp_regimen_especial;
              $this->emp_telefono = $rs->fields[16] ; 
              $this->nmgp_dados_select['emp_telefono'] = $this->emp_telefono;
              $this->emp_agente_retencion = $rs->fields[17] ; 
              $this->nmgp_dados_select['emp_agente_retencion'] = $this->emp_agente_retencion;
              $this->emp_calificacion_artesanal = $rs->fields[18] ; 
              $this->nmgp_dados_select['emp_calificacion_artesanal'] = $this->emp_calificacion_artesanal;
              $this->escontribuyenteespecial = $rs->fields[19] ; 
              $this->nmgp_dados_select['escontribuyenteespecial'] = $this->escontribuyenteespecial;
              $this->esartesanocalificado = $rs->fields[20] ; 
              $this->nmgp_dados_select['esartesanocalificado'] = $this->esartesanocalificado;
              $this->es_profesionalsalud = $rs->fields[21] ; 
              $this->nmgp_dados_select['es_profesionalsalud'] = $this->es_profesionalsalud;
              $this->emp_primeracompra = $rs->fields[22] ; 
              $this->nmgp_dados_select['emp_primeracompra'] = $this->emp_primeracompra;
              $this->emp_tipo_empresa = $rs->fields[23] ; 
              $this->nmgp_dados_select['emp_tipo_empresa'] = $this->emp_tipo_empresa;
              $this->emp_comisionista = $rs->fields[24] ; 
              $this->nmgp_dados_select['emp_comisionista'] = $this->emp_comisionista;
              $this->emp_tipo_suscripcion = $rs->fields[25] ; 
              $this->nmgp_dados_select['emp_tipo_suscripcion'] = $this->emp_tipo_suscripcion;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->emp_ambiente_sri = (string)$this->emp_ambiente_sri; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['parms'] = "emp_ruc?#?$this->emp_ruc?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sub_dir'][0]  = "/" . $this->nm_tira_formatacao_emp_ruc($this->emp_ruc);
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sub_dir'][1]  = "";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_select'] = $this->nmgp_dados_select;
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
              $this->emp_ruc = "";  
              $this->nmgp_dados_form["emp_ruc"] = $this->emp_ruc;
              $this->emp_razon_social = "";  
              $this->nmgp_dados_form["emp_razon_social"] = $this->emp_razon_social;
              $this->emp_nombre_comercial = "";  
              $this->nmgp_dados_form["emp_nombre_comercial"] = $this->emp_nombre_comercial;
              $this->emp_logo = "";  
              $this->emp_logo_ul_name = "" ;  
              $this->emp_logo_ul_type = "" ;  
              $this->nmgp_dados_form["emp_logo"] = $this->emp_logo;
              $this->emp_firma = "";  
              $this->emp_firma_ul_name = "" ;  
              $this->emp_firma_ul_type = "" ;  
              $this->nmgp_dados_form["emp_firma"] = $this->emp_firma;
              $this->emp_clave_firma = "";  
              $this->nmgp_dados_form["emp_clave_firma"] = $this->emp_clave_firma;
              $this->emp_obligado = "";  
              $this->nmgp_dados_form["emp_obligado"] = $this->emp_obligado;
              $this->emp_contribuyente_especial = "";  
              $this->nmgp_dados_form["emp_contribuyente_especial"] = $this->emp_contribuyente_especial;
              $this->emp_estado = "V";  
              $this->nmgp_dados_form["emp_estado"] = $this->emp_estado;
              $this->emp_email = "";  
              $this->nmgp_dados_form["emp_email"] = $this->emp_email;
              $this->emp_ambiente_sri = "";  
              $this->nmgp_dados_form["emp_ambiente_sri"] = $this->emp_ambiente_sri;
              $this->emp_direccion_matriz = "";  
              $this->nmgp_dados_form["emp_direccion_matriz"] = $this->emp_direccion_matriz;
              $this->emp_autorizacion_inmediata = "";  
              $this->nmgp_dados_form["emp_autorizacion_inmediata"] = $this->emp_autorizacion_inmediata;
              $this->emp_es_op_transporte = "";  
              $this->nmgp_dados_form["emp_es_op_transporte"] = $this->emp_es_op_transporte;
              $this->emp_representante_legal = "";  
              $this->nmgp_dados_form["emp_representante_legal"] = $this->emp_representante_legal;
              $this->emp_regimen_especial = "";  
              $this->nmgp_dados_form["emp_regimen_especial"] = $this->emp_regimen_especial;
              $this->emp_telefono = "";  
              $this->nmgp_dados_form["emp_telefono"] = $this->emp_telefono;
              $this->emp_agente_retencion = "";  
              $this->nmgp_dados_form["emp_agente_retencion"] = $this->emp_agente_retencion;
              $this->emp_calificacion_artesanal = "";  
              $this->nmgp_dados_form["emp_calificacion_artesanal"] = $this->emp_calificacion_artesanal;
              $this->escontribuyenteespecial = "";  
              $this->nmgp_dados_form["escontribuyenteespecial"] = $this->escontribuyenteespecial;
              $this->esartesanocalificado = "";  
              $this->nmgp_dados_form["esartesanocalificado"] = $this->esartesanocalificado;
              $this->es_profesionalsalud = "";  
              $this->nmgp_dados_form["es_profesionalsalud"] = $this->es_profesionalsalud;
              $this->emp_primeracompra = "";  
              $this->nmgp_dados_form["emp_primeracompra"] = $this->emp_primeracompra;
              $this->emp_tipo_empresa = "";  
              $this->nmgp_dados_form["emp_tipo_empresa"] = $this->emp_tipo_empresa;
              $this->emp_comisionista = "1091786547001";  
              $this->nmgp_dados_form["emp_comisionista"] = $this->emp_comisionista;
              $this->emp_tipo_suscripcion = "01";  
              $this->nmgp_dados_form["emp_tipo_suscripcion"] = $this->emp_tipo_suscripcion;
              $this->usu_cedula = "";  
              $this->nmgp_dados_form["usu_cedula"] = $this->usu_cedula;
              $this->emp_clave_reingreso = "";  
              $this->nmgp_dados_form["emp_clave_reingreso"] = $this->emp_clave_reingreso;
              $this->emp_nombre_usuario = "";  
              $this->nmgp_dados_form["emp_nombre_usuario"] = $this->emp_nombre_usuario;
              $this->mensaje = "";  
              $this->nmgp_dados_form["mensaje"] = $this->mensaje;
              $this->usu_email = "";  
              $this->nmgp_dados_form["usu_email"] = $this->usu_email;
              $this->emp_clave = "";  
              $this->nmgp_dados_form["emp_clave"] = $this->emp_clave;
              $this->emp_usuario = "";  
              $this->nmgp_dados_form["emp_usuario"] = $this->emp_usuario;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['foreign_key'] as $sFKName => $sFKValue)
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
       $this->SC_log_arr['keys']['emp_ruc'] =  $this->emp_ruc;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dados_select'];
           $this->SC_log_arr['fields']['emp_razon_social']['0'] =  $nmgp_dados_select['emp_razon_social'];
           $this->SC_log_arr['fields']['emp_nombre_comercial']['0'] =  $nmgp_dados_select['emp_nombre_comercial'];
           $this->SC_log_arr['fields']['emp_logo']['0'] =  $nmgp_dados_select['emp_logo'];
           $this->SC_log_arr['fields']['emp_firma']['0'] =  $nmgp_dados_select['emp_firma'];
           $this->SC_log_arr['fields']['emp_clave_firma']['0'] =  $nmgp_dados_select['emp_clave_firma'];
           $this->SC_log_arr['fields']['emp_obligado']['0'] =  $nmgp_dados_select['emp_obligado'];
           $this->SC_log_arr['fields']['emp_contribuyente_especial']['0'] =  $nmgp_dados_select['emp_contribuyente_especial'];
           $this->SC_log_arr['fields']['emp_estado']['0'] =  $nmgp_dados_select['emp_estado'];
           $this->SC_log_arr['fields']['emp_email']['0'] =  $nmgp_dados_select['emp_email'];
           $this->SC_log_arr['fields']['emp_ambiente_sri']['0'] =  $nmgp_dados_select['emp_ambiente_sri'];
           $this->SC_log_arr['fields']['emp_direccion_matriz']['0'] =  $nmgp_dados_select['emp_direccion_matriz'];
           $this->SC_log_arr['fields']['emp_autorizacion_inmediata']['0'] =  $nmgp_dados_select['emp_autorizacion_inmediata'];
           $this->SC_log_arr['fields']['emp_es_op_transporte']['0'] =  $nmgp_dados_select['emp_es_op_transporte'];
           $this->SC_log_arr['fields']['emp_representante_legal']['0'] =  $nmgp_dados_select['emp_representante_legal'];
           $this->SC_log_arr['fields']['emp_regimen_especial']['0'] =  $nmgp_dados_select['emp_regimen_especial'];
           $this->SC_log_arr['fields']['emp_telefono']['0'] =  $nmgp_dados_select['emp_telefono'];
           $this->SC_log_arr['fields']['emp_agente_retencion']['0'] =  $nmgp_dados_select['emp_agente_retencion'];
           $this->SC_log_arr['fields']['emp_calificacion_artesanal']['0'] =  $nmgp_dados_select['emp_calificacion_artesanal'];
           $this->SC_log_arr['fields']['escontribuyenteespecial']['0'] =  $nmgp_dados_select['escontribuyenteespecial'];
           $this->SC_log_arr['fields']['esartesanocalificado']['0'] =  $nmgp_dados_select['esartesanocalificado'];
           $this->SC_log_arr['fields']['es_profesionalsalud']['0'] =  $nmgp_dados_select['es_profesionalsalud'];
           $this->SC_log_arr['fields']['emp_primeracompra']['0'] =  $nmgp_dados_select['emp_primeracompra'];
           $this->SC_log_arr['fields']['emp_tipo_empresa']['0'] =  $nmgp_dados_select['emp_tipo_empresa'];
           $this->SC_log_arr['fields']['emp_comisionista']['0'] =  $nmgp_dados_select['emp_comisionista'];
           $this->SC_log_arr['fields']['emp_tipo_suscripcion']['0'] =  $nmgp_dados_select['emp_tipo_suscripcion'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['emp_razon_social']['1'] =  $this->emp_razon_social;
       $this->SC_log_arr['fields']['emp_nombre_comercial']['1'] =  $this->emp_nombre_comercial;
       $this->SC_log_arr['fields']['emp_logo']['1'] =  $this->emp_logo;
       $this->SC_log_arr['fields']['emp_firma']['1'] =  $this->emp_firma;
       $this->SC_log_arr['fields']['emp_clave_firma']['1'] =  $this->emp_clave_firma;
       $this->SC_log_arr['fields']['emp_obligado']['1'] =  $this->emp_obligado;
       $this->SC_log_arr['fields']['emp_contribuyente_especial']['1'] =  $this->emp_contribuyente_especial;
       $this->SC_log_arr['fields']['emp_estado']['1'] =  $this->emp_estado;
       $this->SC_log_arr['fields']['emp_email']['1'] =  $this->emp_email;
       $this->SC_log_arr['fields']['emp_ambiente_sri']['1'] =  $this->emp_ambiente_sri;
       $this->SC_log_arr['fields']['emp_direccion_matriz']['1'] =  $this->emp_direccion_matriz;
       $this->SC_log_arr['fields']['emp_autorizacion_inmediata']['1'] =  $this->emp_autorizacion_inmediata;
       $this->SC_log_arr['fields']['emp_es_op_transporte']['1'] =  $this->emp_es_op_transporte;
       $this->SC_log_arr['fields']['emp_representante_legal']['1'] =  $this->emp_representante_legal;
       $this->SC_log_arr['fields']['emp_regimen_especial']['1'] =  $this->emp_regimen_especial;
       $this->SC_log_arr['fields']['emp_telefono']['1'] =  $this->emp_telefono;
       $this->SC_log_arr['fields']['emp_agente_retencion']['1'] =  $this->emp_agente_retencion;
       $this->SC_log_arr['fields']['emp_calificacion_artesanal']['1'] =  $this->emp_calificacion_artesanal;
       $this->SC_log_arr['fields']['escontribuyenteespecial']['1'] =  $this->escontribuyenteespecial;
       $this->SC_log_arr['fields']['esartesanocalificado']['1'] =  $this->esartesanocalificado;
       $this->SC_log_arr['fields']['es_profesionalsalud']['1'] =  $this->es_profesionalsalud;
       $this->SC_log_arr['fields']['emp_primeracompra']['1'] =  $this->emp_primeracompra;
       $this->SC_log_arr['fields']['emp_tipo_empresa']['1'] =  $this->emp_tipo_empresa;
       $this->SC_log_arr['fields']['emp_comisionista']['1'] =  $this->emp_comisionista;
       $this->SC_log_arr['fields']['emp_tipo_suscripcion']['1'] =  $this->emp_tipo_suscripcion;
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
       $Log_labels['emp_razon_social'] =  "{lang_razon_social}";
       $Log_labels['emp_nombre_comercial'] =  "{lang_nombre_comercial}";
       $Log_labels['emp_logo'] =  "{lang_logotipo}";
       $Log_labels['emp_firma'] =  "{lang_firma}";
       $Log_labels['emp_clave_firma'] =  "{lang_clave_firma}";
       $Log_labels['emp_obligado'] =  "{lang_obligado_contabilidad}";
       $Log_labels['emp_contribuyente_especial'] =  "{lang_contribuyente_especial}";
       $Log_labels['emp_estado'] =  "{lang_estado}";
       $Log_labels['emp_email'] =  "{lang_email}";
       $Log_labels['emp_ambiente_sri'] =  "Emp Ambiente Sri";
       $Log_labels['emp_direccion_matriz'] =  "Emp Direccion Matriz";
       $Log_labels['emp_autorizacion_inmediata'] =  "Emp Autorizacion Inmediata";
       $Log_labels['emp_es_op_transporte'] =  "Emp Es Op Transporte";
       $Log_labels['emp_representante_legal'] =  "Emp Representante Legal";
       $Log_labels['emp_regimen_especial'] =  "Emp Regimen Especial";
       $Log_labels['emp_telefono'] =  "Emp Telefono";
       $Log_labels['emp_agente_retencion'] =  "Emp Agente Retencion";
       $Log_labels['emp_calificacion_artesanal'] =  "Emp Calificacion Artesanal";
       $Log_labels['escontribuyenteespecial'] =  "Escontribuyenteespecial";
       $Log_labels['esartesanocalificado'] =  "Esartesanocalificado";
       $Log_labels['es_profesionalsalud'] =  "Es Profesionalsalud";
       $Log_labels['emp_primeracompra'] =  "Emp Primeracompra";
       $Log_labels['emp_tipo_empresa'] =  "Emp Tipo Empresa";
       $Log_labels['emp_comisionista'] =  "{lang_referido_por}";
       $Log_labels['emp_tipo_suscripcion'] =  "Emp Tipo Suscripcion";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function emp_obligado_onChange()
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
$original_emp_obligado = $this->emp_obligado;
$original_emp_contribuyente_especial = $this->emp_contribuyente_especial;
$original_emp_contribuyente_especial = $this->emp_contribuyente_especial;

if ($this->emp_obligado  == 'S'){
    $this->nmgp_cmp_hidden["emp_contribuyente_especial"] = 'on'; $this->NM_ajax_info['fieldDisplay']['emp_contribuyente_especial'] = 'on';
}else{
    $this->nmgp_cmp_hidden["emp_contribuyente_especial"] = 'off'; $this->NM_ajax_info['fieldDisplay']['emp_contribuyente_especial'] = 'off';
}

$modificado_emp_obligado = $this->emp_obligado;
$modificado_emp_contribuyente_especial = $this->emp_contribuyente_especial;
$modificado_emp_contribuyente_especial = $this->emp_contribuyente_especial;
$this->nm_formatar_campos('emp_obligado', 'emp_contribuyente_especial');
if ($original_emp_obligado !== $modificado_emp_obligado || isset($this->nmgp_cmp_readonly['emp_obligado']) || (isset($bFlagRead_emp_obligado) && $bFlagRead_emp_obligado))
{
    $this->ajax_return_values_emp_obligado(true);
}
if ($original_emp_contribuyente_especial !== $modificado_emp_contribuyente_especial || isset($this->nmgp_cmp_readonly['emp_contribuyente_especial']) || (isset($bFlagRead_emp_contribuyente_especial) && $bFlagRead_emp_contribuyente_especial))
{
    $this->ajax_return_values_emp_contribuyente_especial(true);
}
if ($original_emp_contribuyente_especial !== $modificado_emp_contribuyente_especial || isset($this->nmgp_cmp_readonly['emp_contribuyente_especial']) || (isset($bFlagRead_emp_contribuyente_especial) && $bFlagRead_emp_contribuyente_especial))
{
    $this->ajax_return_values_emp_contribuyente_especial(true);
}
$this->NM_ajax_info['event_field'] = 'emp';
form_del_nueva_empresa_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function tieneEspeciales($i_cadena)
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
$Vector=array("\\", "¨", "º", "-", "~",
             "#", "@", "|", "!", "\"",
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             ".", "_","*");
for($i=0;$i<38;$i++){
	if(strpos($i_cadena,$Vector[$i])!=false){
		   return 1;
	}
}
return 0;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function emp_usuario_onBlur()
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (!isset($this->sc_temp_permite_procesar)) {$this->sc_temp_permite_procesar = (isset($_SESSION['permite_procesar'])) ? $_SESSION['permite_procesar'] : "";}
  

$sql="SELECT count(*) 
	  FROM del_usuario 
	  WHERE usu_usuario = '".$this->emp_usuario ."';";
 
      $nm_select = $sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ds = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ds[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ds = false;
          $this->ds_erro = $this->Db->ErrorMsg();
      } 



if ($this->ds[0][0]>0){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_usuario_existe'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
}


if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'emp';
form_del_nueva_empresa_pack_ajax_response();
exit;
}
function emp_ruc_onBlur()
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (!isset($this->sc_temp_permite_procesar)) {$this->sc_temp_permite_procesar = (isset($_SESSION['permite_procesar'])) ? $_SESSION['permite_procesar'] : "";}
  
$original_emp_ruc = $this->emp_ruc;
$original_emp_razon_social = $this->emp_razon_social;
$original_emp_nombre_comercial = $this->emp_nombre_comercial;
$original_emp_obligado = $this->emp_obligado;
$original_emp_email = $this->emp_email;

if ($this->validar_CedulaRuc($this->emp_ruc )==0){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_ruc_invalido'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
}else{
	$respuesta=consultaNombres($this->emp_ruc );
	if($respuesta['error']=='0'){
		$datos=$respuesta['datos'];
		$this->emp_razon_social =		$datos['nombre'];
		$this->emp_nombre_comercial = $datos['nombre_comercial'];
		$this->emp_obligado =			$datos['obligado_contabilidad'];	
		$this->emp_direccion_matriz =	$datos['direccion'];
		$this->emp_email =			$datos['correo'];
	}	
}



if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
$modificado_emp_ruc = $this->emp_ruc;
$modificado_emp_razon_social = $this->emp_razon_social;
$modificado_emp_nombre_comercial = $this->emp_nombre_comercial;
$modificado_emp_obligado = $this->emp_obligado;
$modificado_emp_email = $this->emp_email;
$this->nm_formatar_campos('emp_ruc', 'emp_razon_social', 'emp_nombre_comercial', 'emp_obligado', 'emp_email');
if ($original_emp_ruc !== $modificado_emp_ruc || isset($this->nmgp_cmp_readonly['emp_ruc']) || (isset($bFlagRead_emp_ruc) && $bFlagRead_emp_ruc))
{
    $this->ajax_return_values_emp_ruc(true);
}
if ($original_emp_razon_social !== $modificado_emp_razon_social || isset($this->nmgp_cmp_readonly['emp_razon_social']) || (isset($bFlagRead_emp_razon_social) && $bFlagRead_emp_razon_social))
{
    $this->ajax_return_values_emp_razon_social(true);
}
if ($original_emp_nombre_comercial !== $modificado_emp_nombre_comercial || isset($this->nmgp_cmp_readonly['emp_nombre_comercial']) || (isset($bFlagRead_emp_nombre_comercial) && $bFlagRead_emp_nombre_comercial))
{
    $this->ajax_return_values_emp_nombre_comercial(true);
}
if ($original_emp_obligado !== $modificado_emp_obligado || isset($this->nmgp_cmp_readonly['emp_obligado']) || (isset($bFlagRead_emp_obligado) && $bFlagRead_emp_obligado))
{
    $this->ajax_return_values_emp_obligado(true);
}
if ($original_emp_email !== $modificado_emp_email || isset($this->nmgp_cmp_readonly['emp_email']) || (isset($bFlagRead_emp_email) && $bFlagRead_emp_email))
{
    $this->ajax_return_values_emp_email(true);
}
$this->NM_ajax_info['event_field'] = 'emp';
form_del_nueva_empresa_pack_ajax_response();
exit;
}
function repiteContraseniaHis($i_usuario, $i_clave_nueva)
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
$check_sql =   "SELECT count(*) 
				FROM del_contrasenias_his
				WHERE coh_usuario='$i_usuario'
				AND   coh_contrasenia='$i_clave_nueva'";
 
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

if ($this->rs[0][0]>0) {
	return 1;
}else{
	return 0;
}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function emp_clave_onBlur()
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (!isset($this->sc_temp_permite_procesar)) {$this->sc_temp_permite_procesar = (isset($_SESSION['permite_procesar'])) ? $_SESSION['permite_procesar'] : "";}
  
$original_emp_clave = $this->emp_clave;

$check_sql = "SELECT 
					coc_tiempo_validez, 
					coc_minimo_carater, 
					coc_mayusculas, 
					coc_especiales, 
					coc_digitos 
			  FROM sis_config_contrasenia";
 
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
	$sis_tiempo_contrasenia= $this->rs[0][0];
	$sis_num_car_clave= $this->rs[0][1];
	$sis_mayusculas= $this->rs[0][2];
	$sis_car_especiales= $this->rs[0][3];
	$sis_digitos= $this->rs[0][4];
}else{
	$sis_tiempo_contrasenia= 90;
	$sis_num_car_clave= 8;
	$sis_mayusculas= 'N';
	$sis_car_especiales= 'N';
	$sis_digitos= 'N';
}


$sql="SELECT count(*) 
	  FROM sis_contrasenias_malas 
	  WHERE com_contrasenia='".$this->emp_clave ."';";
 
      $nm_select = $sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      $this->ds = array();
      if ($SCrx = $this->Db->Execute($nm_select)) 
      { 
          $SCy = 0; 
          $nm_count = $SCrx->FieldCount();
          while (!$SCrx->EOF)
          { 
                 for ($SCx = 0; $SCx < $nm_count; $SCx++)
                 { 
                      $this->ds[$SCy] [$SCx] = $SCrx->fields[$SCx];
                 }
                 $SCy++; 
                 $SCrx->MoveNext();
          } 
          $SCrx->Close();
      } 
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->ds = false;
          $this->ds_erro = $this->Db->ErrorMsg();
      } 

if ($this->ds[0][0]>0){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_clave_mala'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
}	

if(strlen($this->emp_clave )<$sis_num_car_clave){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_sin_longitud'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
}	

if (!preg_match("/[A-Z]/", $this->emp_clave ) && $sis_mayusculas=="S"){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_sin_mayuscula'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
} 

if (!preg_match("/[0-9]/", $this->emp_clave ) && $sis_digitos=="S"){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_sin_digitos'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
} 

if (!$this->tieneEspeciales($this->emp_clave ) && $sis_car_especiales=="S"){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_sin_caracter_especial'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
} 

if ($this->repiteContraseniaHis($this->emp_usuario ,$this->emp_clave )){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_utilizada_antes'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
}


if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
$modificado_emp_clave = $this->emp_clave;
$this->nm_formatar_campos('emp_clave');
if ($original_emp_clave !== $modificado_emp_clave || isset($this->nmgp_cmp_readonly['emp_clave']) || (isset($bFlagRead_emp_clave) && $bFlagRead_emp_clave))
{
    $this->ajax_return_values_emp_clave(true);
}
$this->NM_ajax_info['event_field'] = 'emp';
form_del_nueva_empresa_pack_ajax_response();
exit;
}
function emp_clave_reingreso_onBlur()
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
if (!isset($this->sc_temp_permite_procesar)) {$this->sc_temp_permite_procesar = (isset($_SESSION['permite_procesar'])) ? $_SESSION['permite_procesar'] : "";}
  
$original_emp_clave = $this->emp_clave;
$original_emp_clave_reingreso = $this->emp_clave_reingreso;

if ($this->emp_clave <>$this->emp_clave_reingreso ){
	$this->sc_ajax_message( $this->Ini->Nm_lang['lang_clave_no_coincide'] , "Error","toast=Y&toasto_pos=center-start&type=error");
	$this->sc_temp_permite_procesar=false;
}	


if (isset($this->sc_temp_permite_procesar)) { $_SESSION['permite_procesar'] = $this->sc_temp_permite_procesar;}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
$modificado_emp_clave = $this->emp_clave;
$modificado_emp_clave_reingreso = $this->emp_clave_reingreso;
$this->nm_formatar_campos('emp_clave', 'emp_clave_reingreso');
if ($original_emp_clave !== $modificado_emp_clave || isset($this->nmgp_cmp_readonly['emp_clave']) || (isset($bFlagRead_emp_clave) && $bFlagRead_emp_clave))
{
    $this->ajax_return_values_emp_clave(true);
}
if ($original_emp_clave_reingreso !== $modificado_emp_clave_reingreso || isset($this->nmgp_cmp_readonly['emp_clave_reingreso']) || (isset($bFlagRead_emp_clave_reingreso) && $bFlagRead_emp_clave_reingreso))
{
    $this->ajax_return_values_emp_clave_reingreso(true);
}
$this->NM_ajax_info['event_field'] = 'emp';
form_del_nueva_empresa_pack_ajax_response();
exit;
}
function Cargar_SMTPConfig($i_filial)
{
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
$check_sql = "SELECT  
					csmtp_servidor, 
					csmtp_puerto_php, 
					csmtp_usuario, 
					csmtp_contrasenia, 
					csmtp_email_seguridad,
					csmtp_nombre_empresa, 
					csmtp_ruta_imagenes, 
					csmtp_ruta_plantillas,
					csmtp_dominio,
					csmtp_puerto_java,
					csmtp_tipo_conexion
			FROM sis_config_smtp
			WHERE csmtp_filial=$i_filial";
 
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


if ( isset($this->rs[0][0]) ){
	$_SESSION['Igtech_SMTP'] = $this->rs[0][0];
	$_SESSION['Igtech_PuertoSMTP'] = $this->rs[0][1];
	$_SESSION['Igtech_UsuarioSMTP'] = $this->rs[0][2];
	$_SESSION['Igtech_ClaveSMTP'] = $this->rs[0][3];
	$_SESSION['Igtech_Email_seguridad'] = $this->rs[0][4];
	$_SESSION['EMPRESA_CLIENTE'] = $this->rs[0][5];
	$_SESSION['RUTA_IMAGENES'] = $this->rs[0][6];
	$_SESSION['RUTA_SKINS'] = $this->rs[0][7];
	$_SESSION['DOMINIO'] = $this->rs[0][8];
	$_SESSION['Igtech_SesionNumFilial'] = $i_filial;
	$_SESSION['Igtech_PuertoSMTPJAVA'] = $this->rs[0][9];
	$_SESSION['Igtech_TipoConexionSMTP'] = $this->rs[0][10];
}
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_confirma_clave($fecha,$usuario,$clave){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_registro_empresa($fecha,$usuario,$clave){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_nueva_compra($fecha,$empresa,$ruc_Empresa,$valor,$tipo,$cuenta,$documento){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_acreditacion_compra($fecha,$empresa,$ruc_Empresa,$valor,$tipo,$cuenta,$documento){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_solicitud_inspeccion($fecha){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_solicitud_inspeccion_otros($fecha,$motivo){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function correo_masivo(){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function formulario_registro_deportista($fecha){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function mes($numero) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function FormatoFecha($fecha) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	
	list ( $month, $day, $year ) = split ( '[/.-]', $fecha );
	return $month . '/' . $day . '/' . $year;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function Hoy() {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mes = sprintf ( "%02s", $today ['mon'] );
	$dia = sprintf ( "%02s", $today ['mday'] );
	$anio = $today ['year'];
	return $anio . '/' . $mes . '/' . $dia;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function fecha_actual() {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function fecha_larga($dia,$mes,$anio) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function fecha_larga_dia($fecha) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function grado($numero) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function llenaizq($a, $Tamanio, $car) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $b . $a;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function llenader($a, $Tamanio, $car) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen ( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $a . $b;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function cifrado($cadena) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$strcifrado = '';
	$cadena = trim($cadena);
	for($i = 1; $i <= strlen($cadena); $i ++) {
		$strcifrado = $strcifrado.$this->llenaizq( strval( 1 + ord( substr($cadena, $i - 1, 1 ) ) ), 3, '0' );
	}
	return $strcifrado;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function descifrado($cadena) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$cifrado = '';
	for($i = 1; $i <= strlen( $cadena ); $i += 3) {
		$cifrado = $cifrado . chr( substr( $cadena, $i - 1, 3 ) - 1 );
	}
	
	return $cifrado;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function IgtechEliminaInyeccion($cadena) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$cadena=str_replace("=","",$cadena);
    $cadena=str_replace("'","",$cadena);
	$cadena=str_replace('"',"",$cadena);
	$cadena=str_replace('or',"",$cadena);
	$cadena=str_replace('OR',"",$cadena);
	return $cadena;
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function diasHabiles($dia,$mes,$anio,$numDias,$fer){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
 
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function diaMesAnio(){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
   
	$fecha=date("j-n-Y");
	$meses=array("Mes 	Nulo","Enero","Febrero","Marzo","Abril","Mayo",
				 "Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$fecha_array=explode("-",$fecha);
	$dia=$fecha_array[0];
	$mes=$meses[$fecha_array[1]];
	$anio=$fecha_array[2];
	return array($dia,$mes,$anio);

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function separar($dato){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
   
     $fecha_array=explode("-",$dato);
     return $fecha_array;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function mesNum($numero) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function leerxml($array, $dir){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function getMonto($money){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousendSeparator);

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function secuencialCartera($numero, $fecha){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  	
	$timestamp = strtotime($fecha); 
    $anio_actual = date('Y', $timestamp);
	$num = '';
	$longitud = strlen($numero);
	for($i=0;$i<(4-$longitud); $i++){
		$num .='0';
	}	
	$num = $num.$numero.'-'.$anio_actual; 
	return $num;	

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function inicialesUsuario($usuario){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$array2 = explode(".", $usuario);
	$apellido = substr($array2[0], 0, 1);
	$nombre = substr($array2[1], 0, 1);
	$resultado = strtolower ($nombre.$apellido);
	return $resultado;		

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function obtenerArray($cadena){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  		
	$array = split(',' , $cadena);
	$newarray=array_values(array_diff($array, array('')));	
	return $newarray;	

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function dias_transcurridos($fecha_i,$fecha_f){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); 
	$dias = floor($dias);		
	return $dias;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function trasformar_money($numero){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	setlocale(LC_MONETARY, 'en_US');
	$money=money_format('%i', $numero) . "\n";			
	return str_replace('USD', '', $money);

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function calculaedad($fechanacimiento){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($mes_diferencia < 0 || ($mes_diferencia == 0 && $dia_diferencia < 0 ))
    $ano_diferencia--;
  return $ano_diferencia;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function num2letras($num, $moneda, $denominacion, $fem = false, $dec = true) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
   
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function seleccionaCliente($i_empresa, $i_cliente){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		$select_sql="SELECT id,
                            empresa,
                            nombre,
                            tipo_identificacion,
                            identificacion,
                            pais,
                            provincia,
                            ciudad,
                            direccion,
                            telefono,
                            celular,
                            email 
                        FROM v_ws_clientes
                        WHERE empresa='".$i_empresa."'
                        AND   identificacion='".$i_cliente."';";
		 
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

		if(isset($this->rs[0][0])){
			$w_respuesta = array(
                    'id'                        =>$this->rs[0][0],
                    'empresa'                   =>$this->rs[0][1],
                    'nombre'                    =>$this->rs[0][2],
                    'tipo_identificacion'       =>$this->rs[0][3],
                    'identificacion'            =>$this->rs[0][4],
                    'pais'                      =>$this->rs[0][5],
                    'provincia'                 =>$this->rs[0][6],
                    'ciudad'                    =>$this->rs[0][7],
                    'direccion'                 =>$this->rs[0][8],
                    'telefono'                  =>$this->rs[0][9],
                    'celular'                   =>$this->rs[0][10],
                    'email'                     =>$this->rs[0][11]
                );
                
		}else{
			$w_respuesta = array();
		}
		return $w_respuesta;
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function registraCliente($i_data){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		$insert_sql="INSERT INTO del_cliente(
                            cl_id,
                            cl_empresa,
                            cl_nombre,
                            cl_tipo_identificacion,
                            cl_identificacion,
                            cl_pais,
                            cl_provincia,
                            cl_ciudad,
                            cl_direccion,
                            cl_telefono,
                            cl_email) 
                        VALUES(
                            (SELECT max(cl_id)+1 FROM del_cliente),
                            '".$i_data['empresa']."',
                            '".$i_data['nombre']."',
                            (SELECT ti_codigo FROM sri_tipo_identificacion WHERE ti_nombre='".strtoupper($i_data['tipo_identificacion'])."'),
                            '".$i_data['identificacion']."',
                            (SELECT pai_id FROM sis_pais WHERE pai_nombre IN ('".strtoupper($i_data['pais'])."','ECUADOR')),
                            (SELECT pro_id FROM sis_provincia WHERE pro_nombre='".strtoupper($i_data['provincia'])."'),
                            (SELECT can_id FROM sis_canton WHERE can_nombre='".strtoupper($i_data['ciudad'])."'),
                            '".$i_data['direccion']."',
                            '".$i_data['telefono']."',
                            '".$i_data['email']."');"; 
		
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
                form_del_nueva_empresa_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function actualizaCliente($i_data){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		$update_sql="UPDATE del_cliente 
                    SET	cl_nombre='".$i_data['nombre']."',
                        cl_tipo_identificacion=(SELECT ti_codigo 
												FROM sri_tipo_identificacion 
												WHERE ti_nombre='".strtoupper($i_data['tipo_identificacion'])."'),
                        cl_pais=(SELECT pai_id 
								 FROM sis_pais 
								 WHERE pai_nombre IN ('".strtoupper($i_data['pais'])."','ECUADOR')),
                        cl_provincia=(SELECT pro_id 
									  FROM sis_provincia 
									  WHERE pro_nombre='".strtoupper($i_data['provincia'])."'),
                        cl_ciudad=(SELECT can_id 
									FROM sis_canton 
									WHERE can_nombre='".strtoupper($i_data['ciudad'])."'),
                        cl_direccion='".$i_data['direccion']."',
                        cl_telefono='".$i_data['telefono']."',
                        cl_email='".$i_data['email']."' 
                    WHERE cl_empresa='".$i_data['empresa']."'
                    and cl_identificacion='".$i_data['identificacion']."';"; 
		
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
                form_del_nueva_empresa_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function insertUpdateCliente($i_data){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		$w_validacion=$this->validarDatosCliente($i_data);
		if($w_validacion['error']<>'0'){
            return $w_validacion;
        }
		$select_sql="SELECT count(*) 
                    FROM del_cliente 
                    WHERE cl_empresa='".$i_data['empresa']."'
                    AND cl_identificacion='".$i_data['identificacion']."'";
		 
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

		if ($this->rs[0][0]==0){
			$this->registraCliente($i_data);
		}else{
			$this->actualizaCliente($i_data);
		}
		
		$o_respuesta=$this->seleccionaCliente($i_data['empresa'], $i_data['identificacion']);
		return $o_respuesta;
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function validarDatosCliente($i_data){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		if (!isset($i_data['empresa'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo empresa');
			return $o_respuesta;
		}
		if (!isset($i_data['nombre'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo nombre');
			return $o_respuesta;
		}
		if (!isset($i_data['tipo_identificacion'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo tipo_identificacion');
			return $o_respuesta;
		}
		if (!isset($i_data['identificacion'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo identificacion');
			return $o_respuesta;

		}
		if (!isset($i_data['pais'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo pais');
			return $o_respuesta;
		}
		if (!isset($i_data['provincia'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo provincial');
			return $o_respuesta;
		}
		if (!isset($i_data['ciudad'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo ciudad');
			return $o_respuesta;
		}
		if (!isset($i_data['direccion'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo direccion');
			return $o_respuesta;
		}
		if (!isset($i_data['telefono'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo telefono');
			return $o_respuesta;
		}
		
		if (!isset($i_data['email'])){
			$o_respuesta=array('error'=>'9999','mensaje'=>'falta el campo email');
			return $o_respuesta;
		}
		$o_respuesta=array('error'=>'0','mensaje'=>'ok');
		return $o_respuesta;
	
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function consultaProvincia($campo, $valor){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		$check_sql="SELECT  pro_id,
							pro_pais,
							pro_nombre,
							pro_codigo 
					FROM sis_provincia 
					WHERE ".$campo."::text=upper('".$valor."') 
					AND pro_pais=66";
		 
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
			$w_respuesta = array(
				'id'	=>$this->rs[0][0],
				'pais'	=>$this->rs[0][1],
				'nombre'=>$this->rs[0][2],
				'codigo'=>$this->rs[0][3]
			);
		}else{
			$w_respuesta = array(
				'id'	=>'',
				'pais'	=>'',
				'nombre'=>'',
				'codigo'=>''
			);
		}
		return $w_respuesta;
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function consultaCanton($campo, $valor, $provincia){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
		$check_sql="SELECT  can_id,
							can_provincia,
							can_nombre,
							can_codigo,
							can_pais 
					FROM sis_canton
					where ".$campo."::text=upper('".$valor."')
					AND can_pais=66
					AND can_provincia=".$provincia ;
		
		 
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
			$w_respuesta = array(
				'id'=>$this->rs[0][0],
				'provincia'=>$this->rs[0][1],
				'nombre'=>$this->rs[0][2],
				'codigo'=>$this->rs[0][3],
				'pais'=>$this->rs[0][4]
			);
		}else{
			$w_respuesta = array(
				'id'=>			'',
				'provincia'=>	'',
				'nombre'=>		'',
				'codigo'=>		'',
				'pais'=>		''
			);
		}
		return $w_respuesta;
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function esCedula($ced) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function EsRUC_natural($identificacion) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function EsRUC_juridico($identificacion) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
	
	return 1;

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function EsRUC_Publica($identificacion) {
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function validar_esRuc($ced){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
}
function validar_CedulaRuc($ced){
$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'on';
  
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

$_SESSION['scriptcase']['form_del_nueva_empresa']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_nueva_empresa_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
        $this->initFormPages();
    include_once("form_del_nueva_empresa_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("emp_ruc", "emp_razon_social", "emp_nombre_comercial", "emp_logo", "emp_firma", "emp_clave_firma", "emp_obligado", "emp_contribuyente_especial", "emp_estado"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['csrf_token'];
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

   function Form_lookup_emp_comisionista()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'] = array(); 
    }

   $old_value_emp_ambiente_sri = $this->emp_ambiente_sri;
   $this->nm_tira_formatacao();


   $unformatted_value_emp_ambiente_sri = $this->emp_ambiente_sri;

   $nm_comando = "SELECT com_ruc, com_razon_social  FROM del_comisionista  where com_estado='V' ORDER BY com_razon_social";

   $this->emp_ambiente_sri = $old_value_emp_ambiente_sri;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['Lookup_emp_comisionista'][] = $rs->fields[0];
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
   function Form_lookup_emp_obligado()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?S?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function SC_fast_search($in_fields, $arg_search, $data_search)
   {
      $fields = (strpos($in_fields, "SC_all_Cmp") !== false) ? array("SC_all_Cmp") : explode(";", $in_fields);
      $this->NM_case_insensitive = true;
      if (empty($data_search)) 
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_nueva_empresa_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "emp_ruc", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_razon_social", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_nombre_comercial", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_logo", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_firma", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_clave_firma", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_emp_obligado($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "emp_obligado", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_contribuyente_especial", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "emp_estado", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_del_nueva_empresa = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['total'] = $qt_geral_reg_form_del_nueva_empresa;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_nueva_empresa_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_nueva_empresa_pack_ajax_response();
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
      $nm_numeric[] = "emp_ambiente_sri";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['decimal_db'] == ".")
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
   function SC_lookup_emp_obligado($condicao, $campo)
   {
       $data_look = array();
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $data_look['S'] = "";
       $result = array();
       if ($this->NM_case_insensitive)
       {
           $campo  = sc_strtoupper($campo);
       }
       foreach ($data_look as $chave => $label) 
       {
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
          
       }
       return $result;
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
       $nmgp_saida_form = "form_del_nueva_empresa_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_nueva_empresa_fim.php";
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
       form_del_nueva_empresa_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['masterValue']);
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_del_nueva_empresa_pack_ajax_response();
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
       form_del_nueva_empresa_pack_ajax_response();
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
    function sc_ajax_message($sMessage, $sTitle = '', $sParam = '', $sRedirPar = '')
    {
        if ($this->NM_ajax_flag)
        {
            $this->NM_ajax_info['ajaxMessage'] = array();
            if ('' != $sParam)
            {
                $aParamList = explode('&', $sParam);
                foreach ($aParamList as $sParamItem)
                {
                    $aParamData = explode('=', $sParamItem);
                    if (2 == sizeof($aParamData) &&
                        in_array($aParamData[0], array('modal', 'timeout', 'button', 'button_label', 'top', 'left', 'width', 'height', 'redir', 'redir_target', 'show_close', 'body_icon', 'toast', 'toast_pos', 'type')))
                    {
                        $this->NM_ajax_info['ajaxMessage'][$aParamData[0]] = NM_charset_to_utf8($aParamData[1]);
                    }
                }
            }
            if (isset($this->NM_ajax_info['ajaxMessage']['redir']) && '' != $this->NM_ajax_info['ajaxMessage']['redir'] && '.php' == substr($this->NM_ajax_info['ajaxMessage']['redir'], -4) && 'http' != substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, 4))
            {
                $this->NM_ajax_info['ajaxMessage']['redir'] = $this->Ini->path_link . SC_dir_app_name(substr($this->NM_ajax_info['ajaxMessage']['redir'], 0, -4)) . '/' . $this->NM_ajax_info['ajaxMessage']['redir'];
            }
            if ('' != $sRedirPar)
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = str_replace('=', '?#?', str_replace(';', '?@?', $sRedirPar));
            }
            else
            {
                $this->NM_ajax_info['ajaxMessage']['redir_par'] = '';
            }
            $this->NM_ajax_info['ajaxMessage']['message'] = NM_charset_to_utf8($sMessage);
            $this->NM_ajax_info['ajaxMessage']['title']   = NM_charset_to_utf8($sTitle);
            if (!isset($this->NM_ajax_info['ajaxMessage']['button']))
            {
                $this->NM_ajax_info['ajaxMessage']['button'] = 'Y';
            }
        }
    } // sc_ajax_message
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "new":
                return array("sc_b_new_b.sc-unique-btn-1");
                break;
            case "insert":
                return array("sc_b_ins_b.sc-unique-btn-2");
                break;
            case "update":
                return array("sc_b_upd_b.sc-unique-btn-3");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4");
                break;
            case "help":
                return array("sc_b_hlp_b");
                break;
            case "exit":
                return array("sc_b_sai_b.sc-unique-btn-5", "sc_b_sai_b.sc-unique-btn-7", "sc_b_sai_b.sc-unique-btn-6");
                break;
        }

        return array($buttonName);
    } // getButtonIds

    function displayAppHeader()
    {
        if ($this->Embutida_call) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['mostra_cab']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['mostra_cab'] == "N") {
            return;
        }
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['under_dashboard'] && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['compact_mode'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['dashboard_info']['maximized']) {
            return;
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['link_info']['compact_mode']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['link_info']['compact_mode']) {
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
          <?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_datos_empresa'] . ""; } else { echo "" . $this->Ini->Nm_lang['lang_datos_empresa'] . ""; } ?>
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_nueva_empresa']['ordem_ord'] == " desc") {
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
            case "emp_ambiente_sri":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "emp_ambiente_sri":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
