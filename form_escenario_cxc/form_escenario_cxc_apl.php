<?php
//
class form_escenario_cxc_apl
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
   var $fac_numero;
   var $fac_tipo_cartera;
   var $fac_tipo_cartera_1;
   var $fac_tipo_comprobante;
   var $fac_tipo_comprobante_1;
   var $fac_empresa;
   var $fac_fecha;
   var $fac_comentario;
   var $fac_subtotal_iva;
   var $fac_subtotal_cero;
   var $fac_subtotal_no_objeto;
   var $fac_subtotal_excento;
   var $fac_subtotal;
   var $fac_total_descuento;
   var $fac_valor_ice;
   var $fac_valor_iva;
   var $fac_valor_irbpnr;
   var $fac_total;
   var $fac_estado;
   var $fac_usuario;
   var $fac_dias_vigencia;
   var $clientes;
   var $detalle;
   var $titulo;
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
          if (isset($this->NM_ajax_info['param']['clientes']))
          {
              $this->clientes = $this->NM_ajax_info['param']['clientes'];
          }
          if (isset($this->NM_ajax_info['param']['csrf_token']))
          {
              $this->csrf_token = $this->NM_ajax_info['param']['csrf_token'];
          }
          if (isset($this->NM_ajax_info['param']['detalle']))
          {
              $this->detalle = $this->NM_ajax_info['param']['detalle'];
          }
          if (isset($this->NM_ajax_info['param']['fac_comentario']))
          {
              $this->fac_comentario = $this->NM_ajax_info['param']['fac_comentario'];
          }
          if (isset($this->NM_ajax_info['param']['fac_dias_vigencia']))
          {
              $this->fac_dias_vigencia = $this->NM_ajax_info['param']['fac_dias_vigencia'];
          }
          if (isset($this->NM_ajax_info['param']['fac_estado']))
          {
              $this->fac_estado = $this->NM_ajax_info['param']['fac_estado'];
          }
          if (isset($this->NM_ajax_info['param']['fac_fecha']))
          {
              $this->fac_fecha = $this->NM_ajax_info['param']['fac_fecha'];
          }
          if (isset($this->NM_ajax_info['param']['fac_numero']))
          {
              $this->fac_numero = $this->NM_ajax_info['param']['fac_numero'];
          }
          if (isset($this->NM_ajax_info['param']['fac_subtotal']))
          {
              $this->fac_subtotal = $this->NM_ajax_info['param']['fac_subtotal'];
          }
          if (isset($this->NM_ajax_info['param']['fac_subtotal_cero']))
          {
              $this->fac_subtotal_cero = $this->NM_ajax_info['param']['fac_subtotal_cero'];
          }
          if (isset($this->NM_ajax_info['param']['fac_subtotal_excento']))
          {
              $this->fac_subtotal_excento = $this->NM_ajax_info['param']['fac_subtotal_excento'];
          }
          if (isset($this->NM_ajax_info['param']['fac_subtotal_iva']))
          {
              $this->fac_subtotal_iva = $this->NM_ajax_info['param']['fac_subtotal_iva'];
          }
          if (isset($this->NM_ajax_info['param']['fac_subtotal_no_objeto']))
          {
              $this->fac_subtotal_no_objeto = $this->NM_ajax_info['param']['fac_subtotal_no_objeto'];
          }
          if (isset($this->NM_ajax_info['param']['fac_tipo_cartera']))
          {
              $this->fac_tipo_cartera = $this->NM_ajax_info['param']['fac_tipo_cartera'];
          }
          if (isset($this->NM_ajax_info['param']['fac_tipo_comprobante']))
          {
              $this->fac_tipo_comprobante = $this->NM_ajax_info['param']['fac_tipo_comprobante'];
          }
          if (isset($this->NM_ajax_info['param']['fac_total']))
          {
              $this->fac_total = $this->NM_ajax_info['param']['fac_total'];
          }
          if (isset($this->NM_ajax_info['param']['fac_total_descuento']))
          {
              $this->fac_total_descuento = $this->NM_ajax_info['param']['fac_total_descuento'];
          }
          if (isset($this->NM_ajax_info['param']['fac_valor_ice']))
          {
              $this->fac_valor_ice = $this->NM_ajax_info['param']['fac_valor_ice'];
          }
          if (isset($this->NM_ajax_info['param']['fac_valor_irbpnr']))
          {
              $this->fac_valor_irbpnr = $this->NM_ajax_info['param']['fac_valor_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['fac_valor_iva']))
          {
              $this->fac_valor_iva = $this->NM_ajax_info['param']['fac_valor_iva'];
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
      if (isset($this->var_procesar) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_procesar'] = $this->var_procesar;
      }
      if (isset($this->var_mensaje) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['var_mensaje'] = $this->var_mensaje;
      }
      if (isset($this->Igtech_IPUsuario) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
      }
      if (isset($_POST["var_procesar"]) && isset($this->var_procesar)) 
      {
          $_SESSION['var_procesar'] = $this->var_procesar;
      }
      if (isset($_POST["var_mensaje"]) && isset($this->var_mensaje)) 
      {
          $_SESSION['var_mensaje'] = $this->var_mensaje;
      }
      if (isset($_POST["Igtech_IPUsuario"]) && isset($this->Igtech_IPUsuario)) 
      {
          $_SESSION['Igtech_IPUsuario'] = $this->Igtech_IPUsuario;
      }
      if (!isset($_POST["Igtech_IPUsuario"]) && isset($_POST["igtech_ipusuario"])) 
      {
          $_SESSION['Igtech_IPUsuario'] = $_POST["igtech_ipusuario"];
      }
      if (isset($_GET["var_procesar"]) && isset($this->var_procesar)) 
      {
          $_SESSION['var_procesar'] = $this->var_procesar;
      }
      if (isset($_GET["var_mensaje"]) && isset($this->var_mensaje)) 
      {
          $_SESSION['var_mensaje'] = $this->var_mensaje;
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
          $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['embutida_parms']);
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
                 nm_limpa_str_form_escenario_cxc($cadapar[1]);
                 if ($cadapar[1] == "@ ") {$cadapar[1] = trim($cadapar[1]); }
                 $Tmp_par = $cadapar[0];
                 $this->$Tmp_par = $cadapar[1];
             }
             $ix++;
          }
          if (isset($this->var_procesar)) 
          {
              $_SESSION['var_procesar'] = $this->var_procesar;
          }
          if (isset($this->var_mensaje)) 
          {
              $_SESSION['var_mensaje'] = $this->var_mensaje;
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
              $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['total']);
          }
          if (!isset($_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['total']))
          {
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (isset($this->var_procesar)) 
          {
              $_SESSION['var_procesar'] = $this->var_procesar;
          }
          if (isset($this->var_mensaje)) 
          {
              $_SESSION['var_mensaje'] = $this->var_mensaje;
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
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_escenario_cxc_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_escenario_cxc']['upload_field_info'] = array();

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_escenario_cxc']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_escenario_cxc'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_escenario_cxc']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_escenario_cxc']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_escenario_cxc') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_escenario_cxc']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_factura";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_escenario_cxc")
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
      $this->nm_new_label['fac_numero'] = '' . $this->Ini->Nm_lang['lang_id'] . '';
      $this->nm_new_label['fac_tipo_cartera'] = '' . $this->Ini->Nm_lang['lang_tipo_cartera'] . '';
      $this->nm_new_label['fac_tipo_comprobante'] = '' . $this->Ini->Nm_lang['lang_tipo_comprobante'] . '';
      $this->nm_new_label['fac_fecha'] = '' . $this->Ini->Nm_lang['lang_fecha'] . '';
      $this->nm_new_label['fac_comentario'] = '' . $this->Ini->Nm_lang['lang_comentario'] . '';
      $this->nm_new_label['fac_subtotal_iva'] = '' . $this->Ini->Nm_lang['lang_subtotal_iva'] . '';
      $this->nm_new_label['fac_subtotal_cero'] = '' . $this->Ini->Nm_lang['lang_subtotal_cero'] . '';
      $this->nm_new_label['fac_subtotal_no_objeto'] = '' . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . '';
      $this->nm_new_label['fac_subtotal_excento'] = '' . $this->Ini->Nm_lang['lang_subtotal_exento'] . '';
      $this->nm_new_label['fac_subtotal'] = '' . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . '';
      $this->nm_new_label['fac_total_descuento'] = '' . $this->Ini->Nm_lang['lang_descuento'] . '';
      $this->nm_new_label['fac_valor_ice'] = '' . $this->Ini->Nm_lang['lang_ice'] . '';
      $this->nm_new_label['fac_valor_iva'] = '' . $this->Ini->Nm_lang['lang_iva'] . '';
      $this->nm_new_label['fac_valor_irbpnr'] = '' . $this->Ini->Nm_lang['lang_irbpnr'] . '';
      $this->nm_new_label['fac_total'] = '' . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . '';
      $this->nm_new_label['fac_estado'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['detalle'] = '' . $this->Ini->Nm_lang['lang_detalle'] . '';

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


      $this->arr_buttons['anular']['hint']             = "";
      $this->arr_buttons['anular']['type']             = "button";
      $this->arr_buttons['anular']['value']            = "" . $this->Ini->Nm_lang['lang_anular'] . "";
      $this->arr_buttons['anular']['display']          = "text_fontawesomeicon";
      $this->arr_buttons['anular']['display_position'] = "text_right";
      $this->arr_buttons['anular']['style']            = "cancel";
      $this->arr_buttons['anular']['image']            = "";
      $this->arr_buttons['anular']['has_fa']            = "true";
      $this->arr_buttons['anular']['fontawesomeicon']            = "fas fa-trash-alt";


      $_SESSION['scriptcase']['error_icon']['form_escenario_cxc']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_escenario_cxc'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['goto']      = 'on';
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
      $this->nmgp_botoes['Anular'] = "on";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_escenario_cxc']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_escenario_cxc'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_escenario_cxc'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form'];
          if (!isset($this->fac_empresa)){$this->fac_empresa = $this->nmgp_dados_form['fac_empresa'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_subtotal_iva'] != "null"){$this->fac_subtotal_iva = $this->nmgp_dados_form['fac_subtotal_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_subtotal_cero'] != "null"){$this->fac_subtotal_cero = $this->nmgp_dados_form['fac_subtotal_cero'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_subtotal_no_objeto'] != "null"){$this->fac_subtotal_no_objeto = $this->nmgp_dados_form['fac_subtotal_no_objeto'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_subtotal_excento'] != "null"){$this->fac_subtotal_excento = $this->nmgp_dados_form['fac_subtotal_excento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_subtotal'] != "null"){$this->fac_subtotal = $this->nmgp_dados_form['fac_subtotal'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_total_descuento'] != "null"){$this->fac_total_descuento = $this->nmgp_dados_form['fac_total_descuento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_valor_ice'] != "null"){$this->fac_valor_ice = $this->nmgp_dados_form['fac_valor_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_valor_iva'] != "null"){$this->fac_valor_iva = $this->nmgp_dados_form['fac_valor_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_valor_irbpnr'] != "null"){$this->fac_valor_irbpnr = $this->nmgp_dados_form['fac_valor_irbpnr'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_total'] != "null"){$this->fac_total = $this->nmgp_dados_form['fac_total'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['fac_estado'] != "null"){$this->fac_estado = $this->nmgp_dados_form['fac_estado'];} 
          if (!isset($this->fac_usuario)){$this->fac_usuario = $this->nmgp_dados_form['fac_usuario'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_escenario_cxc", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_gp_limpa.php", "F", "nm_limpa_valor") ; 
      $this->Ini->sc_Include($this->Ini->path_libs . "/nm_gc.php", "F", "nm_gc") ; 
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_escenario_cxc/Igtech.DebiConta.Clases.php');
      }
      else
      { 
          include_once($this->Ini->path_aplicacao . 'Igtech.DebiConta.Clases.php');
      }
      if ($this->Embutida_proc)
      { 
          include_once($this->Ini->path_embutida . 'form_escenario_cxc/Igtech.Log.php');
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
      if (isset($_GET['nm_cal_display']))
      {
          if ($this->Embutida_proc)
          { 
              include_once($this->Ini->path_embutida . 'form_escenario_cxc/form_escenario_cxc_calendar.php');
          }
          else
          { 
              include_once($this->Ini->path_aplicacao . 'form_escenario_cxc_calendar.php');
          }
          exit;
      }

      if (is_file($this->Ini->path_aplicacao . 'form_escenario_cxc_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_escenario_cxc_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_escenario_cxc/form_escenario_cxc_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_escenario_cxc_erro.class.php"); 
      }
      $this->Erro      = new form_escenario_cxc_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao']))
         { 
             if ($this->fac_numero != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_escenario_cxc']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "novo")  
      {
          $this->nmgp_botoes['Anular'] = "off";
      }
      elseif ($this->nmgp_opcao == "incluir")  
      {
          $this->nmgp_botoes['Anular'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['botoes']['Anular'];
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form'];
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
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['embutida_form'] = false;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['embutida_proc'] = true;
          $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['reg_start'] = "";
          unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['total']);
          $detailAppObject = "form_detalle_escenario_cxc_apl";
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_detalle_escenario_cxc') . "/index.php");
          require_once($this->Ini->root . $this->Ini->path_link  . SC_dir_app_name('form_detalle_escenario_cxc') . "/form_detalle_escenario_cxc_apl.php");
          $this->form_detalle_escenario_cxc = new $detailAppObject;
      }
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

            $out1_img_cache = $_SESSION['scriptcase']['form_escenario_cxc']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_escenario_cxc']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->fac_numero)) { $this->nm_limpa_alfa($this->fac_numero); }
      if (isset($this->fac_tipo_cartera)) { $this->nm_limpa_alfa($this->fac_tipo_cartera); }
      if (isset($this->fac_tipo_comprobante)) { $this->nm_limpa_alfa($this->fac_tipo_comprobante); }
      if (isset($this->fac_comentario)) { $this->nm_limpa_alfa($this->fac_comentario); }
      if (isset($this->fac_subtotal_iva)) { $this->nm_limpa_alfa($this->fac_subtotal_iva); }
      if (isset($this->fac_subtotal_cero)) { $this->nm_limpa_alfa($this->fac_subtotal_cero); }
      if (isset($this->fac_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->fac_subtotal_no_objeto); }
      if (isset($this->fac_subtotal_excento)) { $this->nm_limpa_alfa($this->fac_subtotal_excento); }
      if (isset($this->fac_subtotal)) { $this->nm_limpa_alfa($this->fac_subtotal); }
      if (isset($this->fac_total_descuento)) { $this->nm_limpa_alfa($this->fac_total_descuento); }
      if (isset($this->fac_valor_ice)) { $this->nm_limpa_alfa($this->fac_valor_ice); }
      if (isset($this->fac_valor_iva)) { $this->nm_limpa_alfa($this->fac_valor_iva); }
      if (isset($this->fac_valor_irbpnr)) { $this->nm_limpa_alfa($this->fac_valor_irbpnr); }
      if (isset($this->fac_total)) { $this->nm_limpa_alfa($this->fac_total); }
      if (isset($this->fac_estado)) { $this->nm_limpa_alfa($this->fac_estado); }
      if (isset($this->fac_dias_vigencia)) { $this->nm_limpa_alfa($this->fac_dias_vigencia); }
      if (isset($this->clientes)) { $this->nm_limpa_alfa($this->clientes); }
      if (isset($this->detalle)) { $this->nm_limpa_alfa($this->detalle); }
      if ($nm_opc_form_php == "formphp")
      { 
          if ($nm_call_php == "Anular")
          { 
              $this->sc_btn_Anular();
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
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- fac_fecha
      $this->field_config['fac_fecha']                 = array();
      $this->field_config['fac_fecha']['date_format']  = $_SESSION['scriptcase']['reg_conf']['date_format'];
      $this->field_config['fac_fecha']['date_sep']     = $_SESSION['scriptcase']['reg_conf']['date_sep'];
      $this->field_config['fac_fecha']['date_display'] = "ddmmaaaa";
      $this->new_date_format('DT', 'fac_fecha');
      //-- fac_dias_vigencia
      $this->field_config['fac_dias_vigencia']               = array();
      $this->field_config['fac_dias_vigencia']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['fac_dias_vigencia']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_dias_vigencia']['symbol_dec'] = '';
      $this->field_config['fac_dias_vigencia']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['fac_dias_vigencia']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fac_numero
      $this->field_config['fac_numero']               = array();
      $this->field_config['fac_numero']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['fac_numero']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_numero']['symbol_dec'] = '';
      $this->field_config['fac_numero']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['fac_numero']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- fac_subtotal
      $this->field_config['fac_subtotal']               = array();
      $this->field_config['fac_subtotal']['symbol_grp'] = '';
      $this->field_config['fac_subtotal']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_subtotal']['symbol_dec'] = '.';
      $this->field_config['fac_subtotal']['symbol_neg'] = '-';
      $this->field_config['fac_subtotal']['format_neg'] = '2';
      //-- fac_subtotal_iva
      $this->field_config['fac_subtotal_iva']               = array();
      $this->field_config['fac_subtotal_iva']['symbol_grp'] = '';
      $this->field_config['fac_subtotal_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_subtotal_iva']['symbol_dec'] = '.';
      $this->field_config['fac_subtotal_iva']['symbol_neg'] = '-';
      $this->field_config['fac_subtotal_iva']['format_neg'] = '2';
      //-- fac_subtotal_cero
      $this->field_config['fac_subtotal_cero']               = array();
      $this->field_config['fac_subtotal_cero']['symbol_grp'] = '';
      $this->field_config['fac_subtotal_cero']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_subtotal_cero']['symbol_dec'] = '.';
      $this->field_config['fac_subtotal_cero']['symbol_neg'] = '-';
      $this->field_config['fac_subtotal_cero']['format_neg'] = '2';
      //-- fac_subtotal_no_objeto
      $this->field_config['fac_subtotal_no_objeto']               = array();
      $this->field_config['fac_subtotal_no_objeto']['symbol_grp'] = '';
      $this->field_config['fac_subtotal_no_objeto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_subtotal_no_objeto']['symbol_dec'] = '.';
      $this->field_config['fac_subtotal_no_objeto']['symbol_neg'] = '-';
      $this->field_config['fac_subtotal_no_objeto']['format_neg'] = '2';
      //-- fac_subtotal_excento
      $this->field_config['fac_subtotal_excento']               = array();
      $this->field_config['fac_subtotal_excento']['symbol_grp'] = '';
      $this->field_config['fac_subtotal_excento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_subtotal_excento']['symbol_dec'] = '.';
      $this->field_config['fac_subtotal_excento']['symbol_neg'] = '-';
      $this->field_config['fac_subtotal_excento']['format_neg'] = '2';
      //-- fac_total_descuento
      $this->field_config['fac_total_descuento']               = array();
      $this->field_config['fac_total_descuento']['symbol_grp'] = '';
      $this->field_config['fac_total_descuento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_total_descuento']['symbol_dec'] = '.';
      $this->field_config['fac_total_descuento']['symbol_neg'] = '-';
      $this->field_config['fac_total_descuento']['format_neg'] = '2';
      //-- fac_valor_ice
      $this->field_config['fac_valor_ice']               = array();
      $this->field_config['fac_valor_ice']['symbol_grp'] = '';
      $this->field_config['fac_valor_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_valor_ice']['symbol_dec'] = '.';
      $this->field_config['fac_valor_ice']['symbol_neg'] = '-';
      $this->field_config['fac_valor_ice']['format_neg'] = '2';
      //-- fac_valor_iva
      $this->field_config['fac_valor_iva']               = array();
      $this->field_config['fac_valor_iva']['symbol_grp'] = '';
      $this->field_config['fac_valor_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_valor_iva']['symbol_dec'] = '.';
      $this->field_config['fac_valor_iva']['symbol_neg'] = '-';
      $this->field_config['fac_valor_iva']['format_neg'] = '2';
      //-- fac_valor_irbpnr
      $this->field_config['fac_valor_irbpnr']               = array();
      $this->field_config['fac_valor_irbpnr']['symbol_grp'] = '';
      $this->field_config['fac_valor_irbpnr']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_valor_irbpnr']['symbol_dec'] = '.';
      $this->field_config['fac_valor_irbpnr']['symbol_neg'] = '-';
      $this->field_config['fac_valor_irbpnr']['format_neg'] = '2';
      //-- fac_total
      $this->field_config['fac_total']               = array();
      $this->field_config['fac_total']['symbol_grp'] = '';
      $this->field_config['fac_total']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['fac_total']['symbol_dec'] = '.';
      $this->field_config['fac_total']['symbol_neg'] = '-';
      $this->field_config['fac_total']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Gera_log_access'] = false;
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
          if ('validate_fac_fecha' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_fecha');
          }
          if ('validate_fac_tipo_cartera' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_tipo_cartera');
          }
          if ('validate_fac_tipo_comprobante' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_tipo_comprobante');
          }
          if ('validate_fac_dias_vigencia' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_dias_vigencia');
          }
          if ('validate_fac_numero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_numero');
          }
          if ('validate_fac_comentario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_comentario');
          }
          if ('validate_detalle' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'detalle');
          }
          if ('validate_fac_subtotal' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_subtotal');
          }
          if ('validate_fac_subtotal_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_subtotal_iva');
          }
          if ('validate_fac_subtotal_cero' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_subtotal_cero');
          }
          if ('validate_fac_subtotal_no_objeto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_subtotal_no_objeto');
          }
          if ('validate_fac_subtotal_excento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_subtotal_excento');
          }
          if ('validate_fac_total_descuento' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_total_descuento');
          }
          if ('validate_fac_valor_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_valor_ice');
          }
          if ('validate_fac_valor_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_valor_iva');
          }
          if ('validate_fac_valor_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_valor_irbpnr');
          }
          if ('validate_fac_total' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_total');
          }
          if ('validate_fac_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'fac_estado');
          }
          if ('validate_clientes' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'clientes');
          }
          form_escenario_cxc_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if ('event_fac_valor_entrega_onblur' == $this->NM_ajax_opcao)
          {
              $this->fac_valor_entrega_onBlur();
          }
          if ('event_fac_aplica_propina_onchange' == $this->NM_ajax_opcao)
          {
              $this->fac_aplica_propina_onChange();
          }
          if ('event_fac_libretin_onblur' == $this->NM_ajax_opcao)
          {
              $this->fac_libretin_onBlur();
          }
          if ('event_fac_libretin_onchange' == $this->NM_ajax_opcao)
          {
              $this->fac_libretin_onChange();
          }
          form_escenario_cxc_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          $this->nm_tira_formatacao();
          $this->nm_converte_datas();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_subtotal = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_subtotal_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_cero']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_subtotal_cero = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_cero'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_no_objeto']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_subtotal_no_objeto = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_no_objeto'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_excento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_subtotal_excento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_subtotal_excento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_total_descuento']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_total_descuento = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_total_descuento'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_valor_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_valor_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_valor_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_valor_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_valor_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_valor_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_valor_irbpnr']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_valor_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_valor_irbpnr'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_total']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_total = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_total'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_estado']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->fac_estado = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']['fac_estado'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_escenario_cxc_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_escenario_cxc_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_redir_atualiz'] == "ok")
          {
              if ($this->sc_evento == "update")
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
      }
      if ($this->NM_ajax_flag && 'navigate_form' == $this->NM_ajax_opcao)
      {
          $this->ajax_return_values();
          $this->ajax_add_parameters();
          form_escenario_cxc_pack_ajax_response();
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
          form_escenario_cxc_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_escenario_cxc.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_factura") ?></TITLE>
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
<form name="Fdown" method="get" action="form_escenario_cxc_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_escenario_cxc"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_escenario_cxc', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_escenario_cxc', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_escenario_cxc', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_escenario_cxc_pack_ajax_response();
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
   function sc_btn_Anular() 
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
include_once("form_escenario_cxc_sajax_js.php");
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
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant'] == "novo" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant'] == "incluir")
      {
          $nmgp_opc_ant_saida_php = "novo";
          $nmgp_opcao_saida_php   = "recarga";
      }
      else
      {
          if (!isset($this->fac_numero) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form']['fac_numero']))
          {
              $varloc_btn_php['fac_numero'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form']['fac_numero'];
          }
      }
      $nm_f_saida = "./";
      nm_limpa_data($this->fac_fecha, $this->field_config['fac_fecha']['date_sep']) ; 
      nm_limpa_numero($this->fac_dias_vigencia, $this->field_config['fac_dias_vigencia']['symbol_grp']) ; 
      nm_limpa_numero($this->fac_numero, $this->field_config['fac_numero']['symbol_grp']) ; 
      if (!empty($this->field_config['fac_subtotal']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal, $this->field_config['fac_subtotal']['symbol_dec'], $this->field_config['fac_subtotal']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_subtotal_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_iva, $this->field_config['fac_subtotal_iva']['symbol_dec'], $this->field_config['fac_subtotal_iva']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_subtotal_cero']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_cero, $this->field_config['fac_subtotal_cero']['symbol_dec'], $this->field_config['fac_subtotal_cero']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_subtotal_no_objeto']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_no_objeto, $this->field_config['fac_subtotal_no_objeto']['symbol_dec'], $this->field_config['fac_subtotal_no_objeto']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_subtotal_excento']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_excento, $this->field_config['fac_subtotal_excento']['symbol_dec'], $this->field_config['fac_subtotal_excento']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_total_descuento']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_total_descuento, $this->field_config['fac_total_descuento']['symbol_dec'], $this->field_config['fac_total_descuento']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_valor_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_valor_ice, $this->field_config['fac_valor_ice']['symbol_dec'], $this->field_config['fac_valor_ice']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_valor_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_valor_iva, $this->field_config['fac_valor_iva']['symbol_dec'], $this->field_config['fac_valor_iva']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_valor_irbpnr']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_valor_irbpnr, $this->field_config['fac_valor_irbpnr']['symbol_dec'], $this->field_config['fac_valor_irbpnr']['symbol_grp']) ; 
      }
      if (!empty($this->field_config['fac_total']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_total, $this->field_config['fac_total']['symbol_dec'], $this->field_config['fac_total']['symbol_grp']) ; 
      }
      $this->nm_converte_datas();
      foreach ($varloc_btn_php as $cmp => $val_cmp)
      {
          $this->$cmp = $val_cmp;
      }
      $_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  $update_sql="UPDATE fac_escenariocxc SET fac_estado='N'  WHERE fac_numero=".$this->fac_numero ;


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
                form_escenario_cxc_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off'; 
    echo ob_get_clean();
?>
      </td></tr><tr><td align="center">
      <form name="FPHP" method="post" 
                        action="<?php echo $nm_f_saida ?>" 
                        target="_self">
      <input type=hidden name="nmgp_opcao" value=""/>
      <input type=hidden name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>"/>
      <input type=hidden name="fac_numero" value="<?php echo $this->form_encode_input($this->fac_numero) ?>"/>
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
           case 'fac_fecha':
               return "" . $this->Ini->Nm_lang['lang_fecha'] . "";
               break;
           case 'fac_tipo_cartera':
               return "" . $this->Ini->Nm_lang['lang_tipo_cartera'] . "";
               break;
           case 'fac_tipo_comprobante':
               return "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
               break;
           case 'fac_dias_vigencia':
               return "Dias de Vigencia";
               break;
           case 'fac_numero':
               return "" . $this->Ini->Nm_lang['lang_id'] . "";
               break;
           case 'fac_comentario':
               return "" . $this->Ini->Nm_lang['lang_comentario'] . "";
               break;
           case 'detalle':
               return "" . $this->Ini->Nm_lang['lang_detalle'] . "";
               break;
           case 'fac_subtotal':
               return "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "";
               break;
           case 'fac_subtotal_iva':
               return "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
               break;
           case 'fac_subtotal_cero':
               return "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
               break;
           case 'fac_subtotal_no_objeto':
               return "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
               break;
           case 'fac_subtotal_excento':
               return "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
               break;
           case 'fac_total_descuento':
               return "" . $this->Ini->Nm_lang['lang_descuento'] . "";
               break;
           case 'fac_valor_ice':
               return "" . $this->Ini->Nm_lang['lang_ice'] . "";
               break;
           case 'fac_valor_iva':
               return "" . $this->Ini->Nm_lang['lang_iva'] . "";
               break;
           case 'fac_valor_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
               break;
           case 'fac_total':
               return "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "";
               break;
           case 'fac_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'clientes':
               return "Clientes";
               break;
           case 'fac_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'fac_usuario':
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
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_escenario_cxc']) || !is_array($this->NM_ajax_info['errList']['geral_form_escenario_cxc']))
              {
                  $this->NM_ajax_info['errList']['geral_form_escenario_cxc'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_escenario_cxc'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'titulo' == $filtro)) || (is_array($filtro) && in_array('titulo', $filtro)))
        $this->ValidateField_titulo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_fecha' == $filtro)) || (is_array($filtro) && in_array('fac_fecha', $filtro)))
        $this->ValidateField_fac_fecha($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_tipo_cartera' == $filtro)) || (is_array($filtro) && in_array('fac_tipo_cartera', $filtro)))
        $this->ValidateField_fac_tipo_cartera($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_tipo_comprobante' == $filtro)) || (is_array($filtro) && in_array('fac_tipo_comprobante', $filtro)))
        $this->ValidateField_fac_tipo_comprobante($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_dias_vigencia' == $filtro)) || (is_array($filtro) && in_array('fac_dias_vigencia', $filtro)))
        $this->ValidateField_fac_dias_vigencia($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_numero' == $filtro)) || (is_array($filtro) && in_array('fac_numero', $filtro)))
        $this->ValidateField_fac_numero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_comentario' == $filtro)) || (is_array($filtro) && in_array('fac_comentario', $filtro)))
        $this->ValidateField_fac_comentario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'detalle' == $filtro)) || (is_array($filtro) && in_array('detalle', $filtro)))
        $this->ValidateField_detalle($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_subtotal' == $filtro)) || (is_array($filtro) && in_array('fac_subtotal', $filtro)))
        $this->ValidateField_fac_subtotal($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_subtotal_iva' == $filtro)) || (is_array($filtro) && in_array('fac_subtotal_iva', $filtro)))
        $this->ValidateField_fac_subtotal_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_subtotal_cero' == $filtro)) || (is_array($filtro) && in_array('fac_subtotal_cero', $filtro)))
        $this->ValidateField_fac_subtotal_cero($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_subtotal_no_objeto' == $filtro)) || (is_array($filtro) && in_array('fac_subtotal_no_objeto', $filtro)))
        $this->ValidateField_fac_subtotal_no_objeto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_subtotal_excento' == $filtro)) || (is_array($filtro) && in_array('fac_subtotal_excento', $filtro)))
        $this->ValidateField_fac_subtotal_excento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_total_descuento' == $filtro)) || (is_array($filtro) && in_array('fac_total_descuento', $filtro)))
        $this->ValidateField_fac_total_descuento($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_valor_ice' == $filtro)) || (is_array($filtro) && in_array('fac_valor_ice', $filtro)))
        $this->ValidateField_fac_valor_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_valor_iva' == $filtro)) || (is_array($filtro) && in_array('fac_valor_iva', $filtro)))
        $this->ValidateField_fac_valor_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_valor_irbpnr' == $filtro)) || (is_array($filtro) && in_array('fac_valor_irbpnr', $filtro)))
        $this->ValidateField_fac_valor_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_total' == $filtro)) || (is_array($filtro) && in_array('fac_total', $filtro)))
        $this->ValidateField_fac_total($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'fac_estado' == $filtro)) || (is_array($filtro) && in_array('fac_estado', $filtro)))
        $this->ValidateField_fac_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!is_array($filtro) && ('' == $filtro || 'clientes' == $filtro)) || (is_array($filtro) && in_array('clientes', $filtro)))
        $this->ValidateField_clientes($Campos_Crit, $Campos_Falta, $Campos_Erros);
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

    function ValidateField_fac_fecha(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      nm_limpa_data($this->fac_fecha, $this->field_config['fac_fecha']['date_sep']) ; 
      if (isset($this->Field_no_validate['fac_fecha'])) {
          return;
      }
      $trab_dt_min = ""; 
      $trab_dt_max = ""; 
      if ($this->nmgp_opcao == "incluir")
      { 
          $guarda_datahora = $this->field_config['fac_fecha']['date_format']; 
          if (false !== strpos($guarda_datahora, ';')) $this->field_config['fac_fecha']['date_format'] = substr($guarda_datahora, 0, strpos($guarda_datahora, ';'));
          $Format_Data = $this->field_config['fac_fecha']['date_format']; 
          nm_limpa_data($Format_Data, $this->field_config['fac_fecha']['date_sep']) ; 
          if (trim($this->fac_fecha) != "")  
          { 
              if ($teste_validade->Data($this->fac_fecha, $Format_Data, $trab_dt_min, $trab_dt_max) == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_fecha'] . "; " ; 
                  if (!isset($Campos_Erros['fac_fecha']))
                  {
                      $Campos_Erros['fac_fecha'] = array();
                  }
                  $Campos_Erros['fac_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_fecha']) || !is_array($this->NM_ajax_info['errList']['fac_fecha']))
                  {
                      $this->NM_ajax_info['errList']['fac_fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_fecha'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_fecha']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_fecha'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_fecha'] . "" ; 
              if (!isset($Campos_Erros['fac_fecha']))
              {
                  $Campos_Erros['fac_fecha'] = array();
              }
              $Campos_Erros['fac_fecha'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fac_fecha']) || !is_array($this->NM_ajax_info['errList']['fac_fecha']))
                  {
                      $this->NM_ajax_info['errList']['fac_fecha'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_fecha'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
          $this->field_config['fac_fecha']['date_format'] = $guarda_datahora; 
       } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_fecha';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_fecha

    function ValidateField_fac_tipo_cartera(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fac_tipo_cartera'])) {
       return;
   }
   if ($this->nmgp_opcao == "incluir")
   {
      if ($this->fac_tipo_cartera == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_tipo_cartera']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_tipo_cartera'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_tipo_cartera'] . "" ; 
          if (!isset($Campos_Erros['fac_tipo_cartera']))
          {
              $Campos_Erros['fac_tipo_cartera'] = array();
          }
          $Campos_Erros['fac_tipo_cartera'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['fac_tipo_cartera']) || !is_array($this->NM_ajax_info['errList']['fac_tipo_cartera']))
          {
              $this->NM_ajax_info['errList']['fac_tipo_cartera'] = array();
          }
          $this->NM_ajax_info['errList']['fac_tipo_cartera'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->fac_tipo_cartera) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']) && !in_array($this->fac_tipo_cartera, $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['fac_tipo_cartera']))
              {
                  $Campos_Erros['fac_tipo_cartera'] = array();
              }
              $Campos_Erros['fac_tipo_cartera'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['fac_tipo_cartera']) || !is_array($this->NM_ajax_info['errList']['fac_tipo_cartera']))
              {
                  $this->NM_ajax_info['errList']['fac_tipo_cartera'] = array();
              }
              $this->NM_ajax_info['errList']['fac_tipo_cartera'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
   }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_tipo_cartera';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_tipo_cartera

    function ValidateField_fac_tipo_comprobante(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['fac_tipo_comprobante'])) {
       return;
   }
   if ($this->nmgp_opcao == "incluir")
   {
      if ($this->fac_tipo_comprobante == "" && $this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_tipo_comprobante']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_tipo_comprobante'] == "on"))
      {
          $hasError = true;
          $Campos_Falta[] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "" ; 
          if (!isset($Campos_Erros['fac_tipo_comprobante']))
          {
              $Campos_Erros['fac_tipo_comprobante'] = array();
          }
          $Campos_Erros['fac_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          if (!isset($this->NM_ajax_info['errList']['fac_tipo_comprobante']) || !is_array($this->NM_ajax_info['errList']['fac_tipo_comprobante']))
          {
              $this->NM_ajax_info['errList']['fac_tipo_comprobante'] = array();
          }
          $this->NM_ajax_info['errList']['fac_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
      }
          if (!empty($this->fac_tipo_comprobante) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']) && !in_array($this->fac_tipo_comprobante, $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']))
          {
              $hasError = true;
              $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($Campos_Erros['fac_tipo_comprobante']))
              {
                  $Campos_Erros['fac_tipo_comprobante'] = array();
              }
              $Campos_Erros['fac_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
              if (!isset($this->NM_ajax_info['errList']['fac_tipo_comprobante']) || !is_array($this->NM_ajax_info['errList']['fac_tipo_comprobante']))
              {
                  $this->NM_ajax_info['errList']['fac_tipo_comprobante'] = array();
              }
              $this->NM_ajax_info['errList']['fac_tipo_comprobante'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
          }
   }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_tipo_comprobante';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_tipo_comprobante

    function ValidateField_fac_dias_vigencia(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_dias_vigencia'])) {
          nm_limpa_numero($this->fac_dias_vigencia, $this->field_config['fac_dias_vigencia']['symbol_grp']) ; 
          return;
      }
      nm_limpa_numero($this->fac_dias_vigencia, $this->field_config['fac_dias_vigencia']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->fac_dias_vigencia != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->fac_dias_vigencia) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Dias de Vigencia: " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_dias_vigencia']))
                  {
                      $Campos_Erros['fac_dias_vigencia'] = array();
                  }
                  $Campos_Erros['fac_dias_vigencia'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_dias_vigencia']) || !is_array($this->NM_ajax_info['errList']['fac_dias_vigencia']))
                  {
                      $this->NM_ajax_info['errList']['fac_dias_vigencia'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_dias_vigencia'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_dias_vigencia, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "Dias de Vigencia; " ; 
                  if (!isset($Campos_Erros['fac_dias_vigencia']))
                  {
                      $Campos_Erros['fac_dias_vigencia'] = array();
                  }
                  $Campos_Erros['fac_dias_vigencia'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_dias_vigencia']) || !is_array($this->NM_ajax_info['errList']['fac_dias_vigencia']))
                  {
                      $this->NM_ajax_info['errList']['fac_dias_vigencia'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_dias_vigencia'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
           elseif (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_dias_vigencia']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_dias_vigencia'] == "on") 
           { 
              $hasError = true;
              $Campos_Falta[] = "Dias de Vigencia" ; 
              if (!isset($Campos_Erros['fac_dias_vigencia']))
              {
                  $Campos_Erros['fac_dias_vigencia'] = array();
              }
              $Campos_Erros['fac_dias_vigencia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fac_dias_vigencia']) || !is_array($this->NM_ajax_info['errList']['fac_dias_vigencia']))
                  {
                      $this->NM_ajax_info['errList']['fac_dias_vigencia'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_dias_vigencia'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
           } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_dias_vigencia';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_dias_vigencia

    function ValidateField_fac_numero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_numero'])) {
          nm_limpa_numero($this->fac_numero, $this->field_config['fac_numero']['symbol_grp']) ; 
          return;
      }
      if ($this->fac_numero === "" || is_null($this->fac_numero))  
      { 
          $this->fac_numero = 0;
      } 
      nm_limpa_numero($this->fac_numero, $this->field_config['fac_numero']['symbol_grp']) ; 
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->fac_numero != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->fac_numero) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_numero']))
                  {
                      $Campos_Erros['fac_numero'] = array();
                  }
                  $Campos_Erros['fac_numero'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_numero']) || !is_array($this->NM_ajax_info['errList']['fac_numero']))
                  {
                      $this->NM_ajax_info['errList']['fac_numero'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_numero'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_numero, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_id'] . "; " ; 
                  if (!isset($Campos_Erros['fac_numero']))
                  {
                      $Campos_Erros['fac_numero'] = array();
                  }
                  $Campos_Erros['fac_numero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_numero']) || !is_array($this->NM_ajax_info['errList']['fac_numero']))
                  {
                      $this->NM_ajax_info['errList']['fac_numero'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_numero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_numero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_numero

    function ValidateField_fac_comentario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_comentario'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_comentario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['php_cmp_required']['fac_comentario'] == "on")) 
      { 
          if ($this->fac_comentario == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_comentario'] . "" ; 
              if (!isset($Campos_Erros['fac_comentario']))
              {
                  $Campos_Erros['fac_comentario'] = array();
              }
              $Campos_Erros['fac_comentario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['fac_comentario']) || !is_array($this->NM_ajax_info['errList']['fac_comentario']))
                  {
                      $this->NM_ajax_info['errList']['fac_comentario'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_comentario'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->fac_comentario) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_comentario'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_comentario']))
              {
                  $Campos_Erros['fac_comentario'] = array();
              }
              $Campos_Erros['fac_comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_comentario']) || !is_array($this->NM_ajax_info['errList']['fac_comentario']))
              {
                  $this->NM_ajax_info['errList']['fac_comentario'] = array();
              }
              $this->NM_ajax_info['errList']['fac_comentario'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_comentario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_comentario

    function ValidateField_detalle(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['detalle'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->detalle) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'detalle';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_detalle

    function ValidateField_fac_subtotal(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_subtotal'])) {
          if (!empty($this->field_config['fac_subtotal']['symbol_dec'])) {
              nm_limpa_valor($this->fac_subtotal, $this->field_config['fac_subtotal']['symbol_dec'], $this->field_config['fac_subtotal']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_subtotal === "" || is_null($this->fac_subtotal))  
      { 
          $this->fac_subtotal = 0;
          $this->sc_force_zero[] = 'fac_subtotal';
      } 
      if (!empty($this->field_config['fac_subtotal']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal, $this->field_config['fac_subtotal']['symbol_dec'], $this->field_config['fac_subtotal']['symbol_grp']) ; 
          if ('.' == substr($this->fac_subtotal, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_subtotal, 1)))
              {
                  $this->fac_subtotal = '';
              }
              else
              {
                  $this->fac_subtotal = '0' . $this->fac_subtotal;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_subtotal != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_subtotal) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_subtotal']))
                  {
                      $Campos_Erros['fac_subtotal'] = array();
                  }
                  $Campos_Erros['fac_subtotal'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_subtotal, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "; " ; 
                  if (!isset($Campos_Erros['fac_subtotal']))
                  {
                      $Campos_Erros['fac_subtotal'] = array();
                  }
                  $Campos_Erros['fac_subtotal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_subtotal';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_subtotal

    function ValidateField_fac_subtotal_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_subtotal_iva'])) {
          if (!empty($this->field_config['fac_subtotal_iva']['symbol_dec'])) {
              nm_limpa_valor($this->fac_subtotal_iva, $this->field_config['fac_subtotal_iva']['symbol_dec'], $this->field_config['fac_subtotal_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_subtotal_iva === "" || is_null($this->fac_subtotal_iva))  
      { 
          $this->fac_subtotal_iva = 0;
          $this->sc_force_zero[] = 'fac_subtotal_iva';
      } 
      if (!empty($this->field_config['fac_subtotal_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_iva, $this->field_config['fac_subtotal_iva']['symbol_dec'], $this->field_config['fac_subtotal_iva']['symbol_grp']) ; 
          if ('.' == substr($this->fac_subtotal_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_subtotal_iva, 1)))
              {
                  $this->fac_subtotal_iva = '';
              }
              else
              {
                  $this->fac_subtotal_iva = '0' . $this->fac_subtotal_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_subtotal_iva != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_subtotal_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_subtotal_iva']))
                  {
                      $Campos_Erros['fac_subtotal_iva'] = array();
                  }
                  $Campos_Erros['fac_subtotal_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_iva']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_iva']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_subtotal_iva, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "; " ; 
                  if (!isset($Campos_Erros['fac_subtotal_iva']))
                  {
                      $Campos_Erros['fac_subtotal_iva'] = array();
                  }
                  $Campos_Erros['fac_subtotal_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_iva']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_iva']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_subtotal_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_subtotal_iva

    function ValidateField_fac_subtotal_cero(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_subtotal_cero'])) {
          if (!empty($this->field_config['fac_subtotal_cero']['symbol_dec'])) {
              nm_limpa_valor($this->fac_subtotal_cero, $this->field_config['fac_subtotal_cero']['symbol_dec'], $this->field_config['fac_subtotal_cero']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_subtotal_cero === "" || is_null($this->fac_subtotal_cero))  
      { 
          $this->fac_subtotal_cero = 0;
          $this->sc_force_zero[] = 'fac_subtotal_cero';
      } 
      if (!empty($this->field_config['fac_subtotal_cero']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_cero, $this->field_config['fac_subtotal_cero']['symbol_dec'], $this->field_config['fac_subtotal_cero']['symbol_grp']) ; 
          if ('.' == substr($this->fac_subtotal_cero, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_subtotal_cero, 1)))
              {
                  $this->fac_subtotal_cero = '';
              }
              else
              {
                  $this->fac_subtotal_cero = '0' . $this->fac_subtotal_cero;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_subtotal_cero != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_subtotal_cero) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_subtotal_cero']))
                  {
                      $Campos_Erros['fac_subtotal_cero'] = array();
                  }
                  $Campos_Erros['fac_subtotal_cero'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_cero']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_cero']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_cero'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_cero'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_subtotal_cero, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "; " ; 
                  if (!isset($Campos_Erros['fac_subtotal_cero']))
                  {
                      $Campos_Erros['fac_subtotal_cero'] = array();
                  }
                  $Campos_Erros['fac_subtotal_cero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_cero']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_cero']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_cero'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_cero'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_subtotal_cero';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_subtotal_cero

    function ValidateField_fac_subtotal_no_objeto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_subtotal_no_objeto'])) {
          if (!empty($this->field_config['fac_subtotal_no_objeto']['symbol_dec'])) {
              nm_limpa_valor($this->fac_subtotal_no_objeto, $this->field_config['fac_subtotal_no_objeto']['symbol_dec'], $this->field_config['fac_subtotal_no_objeto']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_subtotal_no_objeto === "" || is_null($this->fac_subtotal_no_objeto))  
      { 
          $this->fac_subtotal_no_objeto = 0;
          $this->sc_force_zero[] = 'fac_subtotal_no_objeto';
      } 
      if (!empty($this->field_config['fac_subtotal_no_objeto']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_no_objeto, $this->field_config['fac_subtotal_no_objeto']['symbol_dec'], $this->field_config['fac_subtotal_no_objeto']['symbol_grp']) ; 
          if ('.' == substr($this->fac_subtotal_no_objeto, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_subtotal_no_objeto, 1)))
              {
                  $this->fac_subtotal_no_objeto = '';
              }
              else
              {
                  $this->fac_subtotal_no_objeto = '0' . $this->fac_subtotal_no_objeto;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_subtotal_no_objeto != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_subtotal_no_objeto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_subtotal_no_objeto']))
                  {
                      $Campos_Erros['fac_subtotal_no_objeto'] = array();
                  }
                  $Campos_Erros['fac_subtotal_no_objeto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_no_objeto']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_no_objeto']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_no_objeto'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_no_objeto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_subtotal_no_objeto, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "; " ; 
                  if (!isset($Campos_Erros['fac_subtotal_no_objeto']))
                  {
                      $Campos_Erros['fac_subtotal_no_objeto'] = array();
                  }
                  $Campos_Erros['fac_subtotal_no_objeto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_no_objeto']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_no_objeto']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_no_objeto'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_no_objeto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_subtotal_no_objeto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_subtotal_no_objeto

    function ValidateField_fac_subtotal_excento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_subtotal_excento'])) {
          if (!empty($this->field_config['fac_subtotal_excento']['symbol_dec'])) {
              nm_limpa_valor($this->fac_subtotal_excento, $this->field_config['fac_subtotal_excento']['symbol_dec'], $this->field_config['fac_subtotal_excento']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_subtotal_excento === "" || is_null($this->fac_subtotal_excento))  
      { 
          $this->fac_subtotal_excento = 0;
          $this->sc_force_zero[] = 'fac_subtotal_excento';
      } 
      if (!empty($this->field_config['fac_subtotal_excento']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_subtotal_excento, $this->field_config['fac_subtotal_excento']['symbol_dec'], $this->field_config['fac_subtotal_excento']['symbol_grp']) ; 
          if ('.' == substr($this->fac_subtotal_excento, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_subtotal_excento, 1)))
              {
                  $this->fac_subtotal_excento = '';
              }
              else
              {
                  $this->fac_subtotal_excento = '0' . $this->fac_subtotal_excento;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_subtotal_excento != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_subtotal_excento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_subtotal_excento']))
                  {
                      $Campos_Erros['fac_subtotal_excento'] = array();
                  }
                  $Campos_Erros['fac_subtotal_excento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_excento']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_excento']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_excento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_excento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_subtotal_excento, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "; " ; 
                  if (!isset($Campos_Erros['fac_subtotal_excento']))
                  {
                      $Campos_Erros['fac_subtotal_excento'] = array();
                  }
                  $Campos_Erros['fac_subtotal_excento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_subtotal_excento']) || !is_array($this->NM_ajax_info['errList']['fac_subtotal_excento']))
                  {
                      $this->NM_ajax_info['errList']['fac_subtotal_excento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_subtotal_excento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_subtotal_excento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_subtotal_excento

    function ValidateField_fac_total_descuento(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_total_descuento'])) {
          if (!empty($this->field_config['fac_total_descuento']['symbol_dec'])) {
              nm_limpa_valor($this->fac_total_descuento, $this->field_config['fac_total_descuento']['symbol_dec'], $this->field_config['fac_total_descuento']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_total_descuento === "" || is_null($this->fac_total_descuento))  
      { 
          $this->fac_total_descuento = 0;
          $this->sc_force_zero[] = 'fac_total_descuento';
      } 
      if (!empty($this->field_config['fac_total_descuento']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_total_descuento, $this->field_config['fac_total_descuento']['symbol_dec'], $this->field_config['fac_total_descuento']['symbol_grp']) ; 
          if ('.' == substr($this->fac_total_descuento, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_total_descuento, 1)))
              {
                  $this->fac_total_descuento = '';
              }
              else
              {
                  $this->fac_total_descuento = '0' . $this->fac_total_descuento;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_total_descuento != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_total_descuento) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descuento'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_total_descuento']))
                  {
                      $Campos_Erros['fac_total_descuento'] = array();
                  }
                  $Campos_Erros['fac_total_descuento'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_total_descuento']) || !is_array($this->NM_ajax_info['errList']['fac_total_descuento']))
                  {
                      $this->NM_ajax_info['errList']['fac_total_descuento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_total_descuento'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_total_descuento, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descuento'] . "; " ; 
                  if (!isset($Campos_Erros['fac_total_descuento']))
                  {
                      $Campos_Erros['fac_total_descuento'] = array();
                  }
                  $Campos_Erros['fac_total_descuento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_total_descuento']) || !is_array($this->NM_ajax_info['errList']['fac_total_descuento']))
                  {
                      $this->NM_ajax_info['errList']['fac_total_descuento'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_total_descuento'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_total_descuento';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_total_descuento

    function ValidateField_fac_valor_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_valor_ice'])) {
          if (!empty($this->field_config['fac_valor_ice']['symbol_dec'])) {
              nm_limpa_valor($this->fac_valor_ice, $this->field_config['fac_valor_ice']['symbol_dec'], $this->field_config['fac_valor_ice']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_valor_ice === "" || is_null($this->fac_valor_ice))  
      { 
          $this->fac_valor_ice = 0;
          $this->sc_force_zero[] = 'fac_valor_ice';
      } 
      if (!empty($this->field_config['fac_valor_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_valor_ice, $this->field_config['fac_valor_ice']['symbol_dec'], $this->field_config['fac_valor_ice']['symbol_grp']) ; 
          if ('.' == substr($this->fac_valor_ice, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_valor_ice, 1)))
              {
                  $this->fac_valor_ice = '';
              }
              else
              {
                  $this->fac_valor_ice = '0' . $this->fac_valor_ice;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_valor_ice != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_valor_ice) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_valor_ice']))
                  {
                      $Campos_Erros['fac_valor_ice'] = array();
                  }
                  $Campos_Erros['fac_valor_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_valor_ice']) || !is_array($this->NM_ajax_info['errList']['fac_valor_ice']))
                  {
                      $this->NM_ajax_info['errList']['fac_valor_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_valor_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_valor_ice, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_ice'] . "; " ; 
                  if (!isset($Campos_Erros['fac_valor_ice']))
                  {
                      $Campos_Erros['fac_valor_ice'] = array();
                  }
                  $Campos_Erros['fac_valor_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_valor_ice']) || !is_array($this->NM_ajax_info['errList']['fac_valor_ice']))
                  {
                      $this->NM_ajax_info['errList']['fac_valor_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_valor_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_valor_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_valor_ice

    function ValidateField_fac_valor_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_valor_iva'])) {
          if (!empty($this->field_config['fac_valor_iva']['symbol_dec'])) {
              nm_limpa_valor($this->fac_valor_iva, $this->field_config['fac_valor_iva']['symbol_dec'], $this->field_config['fac_valor_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_valor_iva === "" || is_null($this->fac_valor_iva))  
      { 
          $this->fac_valor_iva = 0;
          $this->sc_force_zero[] = 'fac_valor_iva';
      } 
      if (!empty($this->field_config['fac_valor_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_valor_iva, $this->field_config['fac_valor_iva']['symbol_dec'], $this->field_config['fac_valor_iva']['symbol_grp']) ; 
          if ('.' == substr($this->fac_valor_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_valor_iva, 1)))
              {
                  $this->fac_valor_iva = '';
              }
              else
              {
                  $this->fac_valor_iva = '0' . $this->fac_valor_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_valor_iva != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_valor_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_valor_iva']))
                  {
                      $Campos_Erros['fac_valor_iva'] = array();
                  }
                  $Campos_Erros['fac_valor_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_valor_iva']) || !is_array($this->NM_ajax_info['errList']['fac_valor_iva']))
                  {
                      $this->NM_ajax_info['errList']['fac_valor_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_valor_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_valor_iva, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_iva'] . "; " ; 
                  if (!isset($Campos_Erros['fac_valor_iva']))
                  {
                      $Campos_Erros['fac_valor_iva'] = array();
                  }
                  $Campos_Erros['fac_valor_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_valor_iva']) || !is_array($this->NM_ajax_info['errList']['fac_valor_iva']))
                  {
                      $this->NM_ajax_info['errList']['fac_valor_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_valor_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_valor_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_valor_iva

    function ValidateField_fac_valor_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_valor_irbpnr'])) {
          if (!empty($this->field_config['fac_valor_irbpnr']['symbol_dec'])) {
              nm_limpa_valor($this->fac_valor_irbpnr, $this->field_config['fac_valor_irbpnr']['symbol_dec'], $this->field_config['fac_valor_irbpnr']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_valor_irbpnr === "" || is_null($this->fac_valor_irbpnr))  
      { 
          $this->fac_valor_irbpnr = 0;
          $this->sc_force_zero[] = 'fac_valor_irbpnr';
      } 
      if (!empty($this->field_config['fac_valor_irbpnr']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_valor_irbpnr, $this->field_config['fac_valor_irbpnr']['symbol_dec'], $this->field_config['fac_valor_irbpnr']['symbol_grp']) ; 
          if ('.' == substr($this->fac_valor_irbpnr, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_valor_irbpnr, 1)))
              {
                  $this->fac_valor_irbpnr = '';
              }
              else
              {
                  $this->fac_valor_irbpnr = '0' . $this->fac_valor_irbpnr;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_valor_irbpnr != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_valor_irbpnr) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_valor_irbpnr']))
                  {
                      $Campos_Erros['fac_valor_irbpnr'] = array();
                  }
                  $Campos_Erros['fac_valor_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_valor_irbpnr']) || !is_array($this->NM_ajax_info['errList']['fac_valor_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['fac_valor_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_valor_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_valor_irbpnr, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['fac_valor_irbpnr']))
                  {
                      $Campos_Erros['fac_valor_irbpnr'] = array();
                  }
                  $Campos_Erros['fac_valor_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_valor_irbpnr']) || !is_array($this->NM_ajax_info['errList']['fac_valor_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['fac_valor_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_valor_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_valor_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_valor_irbpnr

    function ValidateField_fac_total(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_total'])) {
          if (!empty($this->field_config['fac_total']['symbol_dec'])) {
              nm_limpa_valor($this->fac_total, $this->field_config['fac_total']['symbol_dec'], $this->field_config['fac_total']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->fac_total === "" || is_null($this->fac_total))  
      { 
          $this->fac_total = 0;
          $this->sc_force_zero[] = 'fac_total';
      } 
      if (!empty($this->field_config['fac_total']['symbol_dec']))
      {
          nm_limpa_valor($this->fac_total, $this->field_config['fac_total']['symbol_dec'], $this->field_config['fac_total']['symbol_grp']) ; 
          if ('.' == substr($this->fac_total, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->fac_total, 1)))
              {
                  $this->fac_total = '';
              }
              else
              {
                  $this->fac_total = '0' . $this->fac_total;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->fac_total != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->fac_total) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['fac_total']))
                  {
                      $Campos_Erros['fac_total'] = array();
                  }
                  $Campos_Erros['fac_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['fac_total']) || !is_array($this->NM_ajax_info['errList']['fac_total']))
                  {
                      $this->NM_ajax_info['errList']['fac_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_total'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->fac_total, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . "; " ; 
                  if (!isset($Campos_Erros['fac_total']))
                  {
                      $Campos_Erros['fac_total'] = array();
                  }
                  $Campos_Erros['fac_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['fac_total']) || !is_array($this->NM_ajax_info['errList']['fac_total']))
                  {
                      $this->NM_ajax_info['errList']['fac_total'] = array();
                  }
                  $this->NM_ajax_info['errList']['fac_total'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_total';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_total

    function ValidateField_fac_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['fac_estado'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->fac_estado) > 2) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_estado'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['fac_estado']))
              {
                  $Campos_Erros['fac_estado'] = array();
              }
              $Campos_Erros['fac_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['fac_estado']) || !is_array($this->NM_ajax_info['errList']['fac_estado']))
              {
                  $this->NM_ajax_info['errList']['fac_estado'] = array();
              }
              $this->NM_ajax_info['errList']['fac_estado'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 2 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'fac_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_fac_estado

    function ValidateField_clientes(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['clientes'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (trim($this->clientes) != "")  
          { 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'clientes';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_clientes

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
    $this->nmgp_dados_form['fac_fecha'] = (strlen(trim($this->fac_fecha)) > 19) ? str_replace(".", ":", $this->fac_fecha) : trim($this->fac_fecha);
    $this->nmgp_dados_form['fac_tipo_cartera'] = $this->fac_tipo_cartera;
    $this->nmgp_dados_form['fac_tipo_comprobante'] = $this->fac_tipo_comprobante;
    $this->nmgp_dados_form['fac_dias_vigencia'] = $this->fac_dias_vigencia;
    $this->nmgp_dados_form['fac_numero'] = $this->fac_numero;
    $this->nmgp_dados_form['fac_comentario'] = $this->fac_comentario;
    $this->nmgp_dados_form['detalle'] = $this->detalle;
    $this->nmgp_dados_form['fac_subtotal'] = $this->fac_subtotal;
    $this->nmgp_dados_form['fac_subtotal_iva'] = $this->fac_subtotal_iva;
    $this->nmgp_dados_form['fac_subtotal_cero'] = $this->fac_subtotal_cero;
    $this->nmgp_dados_form['fac_subtotal_no_objeto'] = $this->fac_subtotal_no_objeto;
    $this->nmgp_dados_form['fac_subtotal_excento'] = $this->fac_subtotal_excento;
    $this->nmgp_dados_form['fac_total_descuento'] = $this->fac_total_descuento;
    $this->nmgp_dados_form['fac_valor_ice'] = $this->fac_valor_ice;
    $this->nmgp_dados_form['fac_valor_iva'] = $this->fac_valor_iva;
    $this->nmgp_dados_form['fac_valor_irbpnr'] = $this->fac_valor_irbpnr;
    $this->nmgp_dados_form['fac_total'] = $this->fac_total;
    $this->nmgp_dados_form['fac_estado'] = $this->fac_estado;
    $this->nmgp_dados_form['clientes'] = $this->clientes;
    $this->nmgp_dados_form['fac_empresa'] = $this->fac_empresa;
    $this->nmgp_dados_form['fac_usuario'] = $this->fac_usuario;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['fac_fecha'] = $this->fac_fecha;
      nm_limpa_data($this->fac_fecha, $this->field_config['fac_fecha']['date_sep']) ; 
      $this->Before_unformat['fac_dias_vigencia'] = $this->fac_dias_vigencia;
      nm_limpa_numero($this->fac_dias_vigencia, $this->field_config['fac_dias_vigencia']['symbol_grp']) ; 
      $this->Before_unformat['fac_numero'] = $this->fac_numero;
      nm_limpa_numero($this->fac_numero, $this->field_config['fac_numero']['symbol_grp']) ; 
      $this->Before_unformat['fac_subtotal'] = $this->fac_subtotal;
      if (!empty($this->field_config['fac_subtotal']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_subtotal, $this->field_config['fac_subtotal']['symbol_dec'], $this->field_config['fac_subtotal']['symbol_grp']);
      }
      $this->Before_unformat['fac_subtotal_iva'] = $this->fac_subtotal_iva;
      if (!empty($this->field_config['fac_subtotal_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_subtotal_iva, $this->field_config['fac_subtotal_iva']['symbol_dec'], $this->field_config['fac_subtotal_iva']['symbol_grp']);
      }
      $this->Before_unformat['fac_subtotal_cero'] = $this->fac_subtotal_cero;
      if (!empty($this->field_config['fac_subtotal_cero']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_subtotal_cero, $this->field_config['fac_subtotal_cero']['symbol_dec'], $this->field_config['fac_subtotal_cero']['symbol_grp']);
      }
      $this->Before_unformat['fac_subtotal_no_objeto'] = $this->fac_subtotal_no_objeto;
      if (!empty($this->field_config['fac_subtotal_no_objeto']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_subtotal_no_objeto, $this->field_config['fac_subtotal_no_objeto']['symbol_dec'], $this->field_config['fac_subtotal_no_objeto']['symbol_grp']);
      }
      $this->Before_unformat['fac_subtotal_excento'] = $this->fac_subtotal_excento;
      if (!empty($this->field_config['fac_subtotal_excento']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_subtotal_excento, $this->field_config['fac_subtotal_excento']['symbol_dec'], $this->field_config['fac_subtotal_excento']['symbol_grp']);
      }
      $this->Before_unformat['fac_total_descuento'] = $this->fac_total_descuento;
      if (!empty($this->field_config['fac_total_descuento']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_total_descuento, $this->field_config['fac_total_descuento']['symbol_dec'], $this->field_config['fac_total_descuento']['symbol_grp']);
      }
      $this->Before_unformat['fac_valor_ice'] = $this->fac_valor_ice;
      if (!empty($this->field_config['fac_valor_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_valor_ice, $this->field_config['fac_valor_ice']['symbol_dec'], $this->field_config['fac_valor_ice']['symbol_grp']);
      }
      $this->Before_unformat['fac_valor_iva'] = $this->fac_valor_iva;
      if (!empty($this->field_config['fac_valor_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_valor_iva, $this->field_config['fac_valor_iva']['symbol_dec'], $this->field_config['fac_valor_iva']['symbol_grp']);
      }
      $this->Before_unformat['fac_valor_irbpnr'] = $this->fac_valor_irbpnr;
      if (!empty($this->field_config['fac_valor_irbpnr']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_valor_irbpnr, $this->field_config['fac_valor_irbpnr']['symbol_dec'], $this->field_config['fac_valor_irbpnr']['symbol_grp']);
      }
      $this->Before_unformat['fac_total'] = $this->fac_total;
      if (!empty($this->field_config['fac_total']['symbol_dec']))
      {
         nm_limpa_valor($this->fac_total, $this->field_config['fac_total']['symbol_dec'], $this->field_config['fac_total']['symbol_grp']);
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
      if ($Nome_Campo == "fac_dias_vigencia")
      {
          nm_limpa_numero($this->fac_dias_vigencia, $this->field_config['fac_dias_vigencia']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fac_numero")
      {
          nm_limpa_numero($this->fac_numero, $this->field_config['fac_numero']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "fac_subtotal")
      {
          if (!empty($this->field_config['fac_subtotal']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_subtotal, $this->field_config['fac_subtotal']['symbol_dec'], $this->field_config['fac_subtotal']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_subtotal_iva")
      {
          if (!empty($this->field_config['fac_subtotal_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_subtotal_iva, $this->field_config['fac_subtotal_iva']['symbol_dec'], $this->field_config['fac_subtotal_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_subtotal_cero")
      {
          if (!empty($this->field_config['fac_subtotal_cero']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_subtotal_cero, $this->field_config['fac_subtotal_cero']['symbol_dec'], $this->field_config['fac_subtotal_cero']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_subtotal_no_objeto")
      {
          if (!empty($this->field_config['fac_subtotal_no_objeto']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_subtotal_no_objeto, $this->field_config['fac_subtotal_no_objeto']['symbol_dec'], $this->field_config['fac_subtotal_no_objeto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_subtotal_excento")
      {
          if (!empty($this->field_config['fac_subtotal_excento']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_subtotal_excento, $this->field_config['fac_subtotal_excento']['symbol_dec'], $this->field_config['fac_subtotal_excento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_total_descuento")
      {
          if (!empty($this->field_config['fac_total_descuento']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_total_descuento, $this->field_config['fac_total_descuento']['symbol_dec'], $this->field_config['fac_total_descuento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_valor_ice")
      {
          if (!empty($this->field_config['fac_valor_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_valor_ice, $this->field_config['fac_valor_ice']['symbol_dec'], $this->field_config['fac_valor_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_valor_iva")
      {
          if (!empty($this->field_config['fac_valor_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_valor_iva, $this->field_config['fac_valor_iva']['symbol_dec'], $this->field_config['fac_valor_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_valor_irbpnr")
      {
          if (!empty($this->field_config['fac_valor_irbpnr']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_valor_irbpnr, $this->field_config['fac_valor_irbpnr']['symbol_dec'], $this->field_config['fac_valor_irbpnr']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "fac_total")
      {
          if (!empty($this->field_config['fac_total']['symbol_dec']))
          {
             nm_limpa_valor($this->fac_total, $this->field_config['fac_total']['symbol_dec'], $this->field_config['fac_total']['symbol_grp']);
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
      if ((!empty($this->fac_fecha) && 'null' != $this->fac_fecha) || (!empty($format_fields) && isset($format_fields['fac_fecha'])))
      {
          nm_volta_data($this->fac_fecha, $this->field_config['fac_fecha']['date_format']) ; 
          nmgp_Form_Datas($this->fac_fecha, $this->field_config['fac_fecha']['date_format'], $this->field_config['fac_fecha']['date_sep']) ;  
      }
      elseif ('null' == $this->fac_fecha || '' == $this->fac_fecha)
      {
          $this->fac_fecha = '';
      }
      if ('' !== $this->fac_dias_vigencia || (!empty($format_fields) && isset($format_fields['fac_dias_vigencia'])))
      {
          nmgp_Form_Num_Val($this->fac_dias_vigencia, $this->field_config['fac_dias_vigencia']['symbol_grp'], $this->field_config['fac_dias_vigencia']['symbol_dec'], "0", "S", $this->field_config['fac_dias_vigencia']['format_neg'], "", "", "-", $this->field_config['fac_dias_vigencia']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_numero || (!empty($format_fields) && isset($format_fields['fac_numero'])))
      {
          nmgp_Form_Num_Val($this->fac_numero, $this->field_config['fac_numero']['symbol_grp'], $this->field_config['fac_numero']['symbol_dec'], "0", "S", $this->field_config['fac_numero']['format_neg'], "", "", "-", $this->field_config['fac_numero']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_subtotal || (!empty($format_fields) && isset($format_fields['fac_subtotal'])))
      {
          nmgp_Form_Num_Val($this->fac_subtotal, $this->field_config['fac_subtotal']['symbol_grp'], $this->field_config['fac_subtotal']['symbol_dec'], "2", "S", $this->field_config['fac_subtotal']['format_neg'], "", "", "-", $this->field_config['fac_subtotal']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_subtotal_iva || (!empty($format_fields) && isset($format_fields['fac_subtotal_iva'])))
      {
          nmgp_Form_Num_Val($this->fac_subtotal_iva, $this->field_config['fac_subtotal_iva']['symbol_grp'], $this->field_config['fac_subtotal_iva']['symbol_dec'], "2", "S", $this->field_config['fac_subtotal_iva']['format_neg'], "", "", "-", $this->field_config['fac_subtotal_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_subtotal_cero || (!empty($format_fields) && isset($format_fields['fac_subtotal_cero'])))
      {
          nmgp_Form_Num_Val($this->fac_subtotal_cero, $this->field_config['fac_subtotal_cero']['symbol_grp'], $this->field_config['fac_subtotal_cero']['symbol_dec'], "2", "S", $this->field_config['fac_subtotal_cero']['format_neg'], "", "", "-", $this->field_config['fac_subtotal_cero']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_subtotal_no_objeto || (!empty($format_fields) && isset($format_fields['fac_subtotal_no_objeto'])))
      {
          nmgp_Form_Num_Val($this->fac_subtotal_no_objeto, $this->field_config['fac_subtotal_no_objeto']['symbol_grp'], $this->field_config['fac_subtotal_no_objeto']['symbol_dec'], "2", "S", $this->field_config['fac_subtotal_no_objeto']['format_neg'], "", "", "-", $this->field_config['fac_subtotal_no_objeto']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_subtotal_excento || (!empty($format_fields) && isset($format_fields['fac_subtotal_excento'])))
      {
          nmgp_Form_Num_Val($this->fac_subtotal_excento, $this->field_config['fac_subtotal_excento']['symbol_grp'], $this->field_config['fac_subtotal_excento']['symbol_dec'], "2", "S", $this->field_config['fac_subtotal_excento']['format_neg'], "", "", "-", $this->field_config['fac_subtotal_excento']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_total_descuento || (!empty($format_fields) && isset($format_fields['fac_total_descuento'])))
      {
          nmgp_Form_Num_Val($this->fac_total_descuento, $this->field_config['fac_total_descuento']['symbol_grp'], $this->field_config['fac_total_descuento']['symbol_dec'], "2", "S", $this->field_config['fac_total_descuento']['format_neg'], "", "", "-", $this->field_config['fac_total_descuento']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_valor_ice || (!empty($format_fields) && isset($format_fields['fac_valor_ice'])))
      {
          nmgp_Form_Num_Val($this->fac_valor_ice, $this->field_config['fac_valor_ice']['symbol_grp'], $this->field_config['fac_valor_ice']['symbol_dec'], "2", "S", $this->field_config['fac_valor_ice']['format_neg'], "", "", "-", $this->field_config['fac_valor_ice']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_valor_iva || (!empty($format_fields) && isset($format_fields['fac_valor_iva'])))
      {
          nmgp_Form_Num_Val($this->fac_valor_iva, $this->field_config['fac_valor_iva']['symbol_grp'], $this->field_config['fac_valor_iva']['symbol_dec'], "2", "S", $this->field_config['fac_valor_iva']['format_neg'], "", "", "-", $this->field_config['fac_valor_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_valor_irbpnr || (!empty($format_fields) && isset($format_fields['fac_valor_irbpnr'])))
      {
          nmgp_Form_Num_Val($this->fac_valor_irbpnr, $this->field_config['fac_valor_irbpnr']['symbol_grp'], $this->field_config['fac_valor_irbpnr']['symbol_dec'], "2", "S", $this->field_config['fac_valor_irbpnr']['format_neg'], "", "", "-", $this->field_config['fac_valor_irbpnr']['symbol_fmt']) ; 
      }
      if ('' !== $this->fac_total || (!empty($format_fields) && isset($format_fields['fac_total'])))
      {
          nmgp_Form_Num_Val($this->fac_total, $this->field_config['fac_total']['symbol_grp'], $this->field_config['fac_total']['symbol_dec'], "2", "S", $this->field_config['fac_total']['format_neg'], "", "", "-", $this->field_config['fac_total']['symbol_fmt']) ; 
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
      $guarda_format_hora = $this->field_config['fac_fecha']['date_format'];
      if ($this->fac_fecha != "")  
      { 
          nm_conv_data($this->fac_fecha, $this->field_config['fac_fecha']['date_format']) ; 
          $this->fac_fecha_hora = "00:00:00:000" ; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $this->fac_fecha_hora = substr($this->fac_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fac_fecha_hora = substr($this->fac_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $this->fac_fecha_hora = substr($this->fac_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $this->fac_fecha_hora = substr($this->fac_fecha_hora, 0, -4);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $this->fac_fecha_hora = substr($this->fac_fecha_hora, 0, -4);
          }
      } 
      if ($this->fac_fecha == "" && $use_null)  
      { 
          $this->fac_fecha = "null" ; 
      } 
      $this->field_config['fac_fecha']['date_format'] = $guarda_format_hora;
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
          $this->ajax_return_values_titulo();
          $this->ajax_return_values_fac_fecha();
          $this->ajax_return_values_fac_tipo_cartera();
          $this->ajax_return_values_fac_tipo_comprobante();
          $this->ajax_return_values_fac_dias_vigencia();
          $this->ajax_return_values_fac_numero();
          $this->ajax_return_values_fac_comentario();
          $this->ajax_return_values_detalle();
          $this->ajax_return_values_fac_subtotal();
          $this->ajax_return_values_fac_subtotal_iva();
          $this->ajax_return_values_fac_subtotal_cero();
          $this->ajax_return_values_fac_subtotal_no_objeto();
          $this->ajax_return_values_fac_subtotal_excento();
          $this->ajax_return_values_fac_total_descuento();
          $this->ajax_return_values_fac_valor_ice();
          $this->ajax_return_values_fac_valor_iva();
          $this->ajax_return_values_fac_valor_irbpnr();
          $this->ajax_return_values_fac_total();
          $this->ajax_return_values_fac_estado();
          $this->ajax_return_values_clientes();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['fac_numero']['keyVal'] = form_escenario_cxc_pack_protect_string($this->nmgp_dados_form['fac_numero']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['grid_cliente_escenario_cxc_script_case_init'] ]['grid_cliente_escenario_cxc']['embutida_form_full'] = true;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['grid_cliente_escenario_cxc_script_case_init'] ]['grid_cliente_escenario_cxc']['embutida_form']       = true;
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['grid_cliente_escenario_cxc_script_case_init'] ]['grid_cliente_escenario_cxc']['embutida_pai']        = "form_escenario_cxc";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['grid_cliente_escenario_cxc_script_case_init'] ]['grid_cliente_escenario_cxc']['embutida_form_parms'] = "var_factura_multiple*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['grid_cliente_escenario_cxc_script_case_init'] ]['grid_cliente_escenario_cxc']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['grid_cliente_escenario_cxc_script_case_init'] ]['grid_cliente_escenario_cxc']['total']);
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['foreign_key']['df_escenariocxc'] = $this->nmgp_dados_form['fac_numero'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['foreign_key']['df_empresa'] = $this->nmgp_dados_form['fac_empresa'];
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['where_filter'] = "df_escenariocxc = " . $this->nmgp_dados_form['fac_numero'] . " AND df_empresa = '" . $this->nmgp_dados_form['fac_empresa'] . "'";
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['where_detal']  = "df_escenariocxc = " . $this->nmgp_dados_form['fac_numero'] . " AND df_empresa = '" . $this->nmgp_dados_form['fac_empresa'] . "'";
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] < 0)
              {
                  $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['where_filter'] = "1 <> 1";
              }
              $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['reg_start'] = "";
              unset($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['form_detalle_escenario_cxc_script_case_init'] ]['form_detalle_escenario_cxc']['total']);
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

          //----- fac_fecha
   function ajax_return_values_fac_fecha($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_fecha", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_fecha);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_fecha'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("fac_fecha", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- fac_tipo_cartera
   function ajax_return_values_fac_tipo_cartera($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_tipo_cartera", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_tipo_cartera);
              $aLookup = array();
              $this->_tmp_lookup_fac_tipo_cartera = $this->fac_tipo_cartera;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_total = $this->fac_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_total = $this->fac_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_tipo_cartera  ORDER BY dec_nombre";

   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_dias_vigencia = $old_value_fac_dias_vigencia;
   $this->fac_numero = $old_value_fac_numero;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_total = $old_value_fac_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_escenario_cxc_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_escenario_cxc_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fac_tipo_cartera\"";
          if (isset($this->NM_ajax_info['select_html']['fac_tipo_cartera']) && !empty($this->NM_ajax_info['select_html']['fac_tipo_cartera']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fac_tipo_cartera']);
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

                  if ($this->fac_tipo_cartera == $sValue)
                  {
                      $this->_tmp_lookup_fac_tipo_cartera = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $Nm_tp_obj = (isset($this->nmgp_refresh_fields) && in_array("fac_tipo_cartera", $this->nmgp_refresh_fields)) ? 'select' : 'text';
          $this->NM_ajax_info['fldList']['fac_tipo_cartera'] = array(
                       'row'    => '',
               'type'    => $Nm_tp_obj,
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fac_tipo_cartera']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fac_tipo_cartera']['valList'][$i] = form_escenario_cxc_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fac_tipo_cartera']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fac_tipo_cartera']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fac_tipo_cartera']['labList'] = $aLabel;
          }
   }

          //----- fac_tipo_comprobante
   function ajax_return_values_fac_tipo_comprobante($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_tipo_comprobante", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_tipo_comprobante);
              $aLookup = array();
              $this->_tmp_lookup_fac_tipo_comprobante = $this->fac_tipo_comprobante;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_total = $this->fac_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_total = $this->fac_total;

   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  WHERE tc_codigo in ('01','99') ORDER BY tc_codigo";

   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_dias_vigencia = $old_value_fac_dias_vigencia;
   $this->fac_numero = $old_value_fac_numero;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_total = $old_value_fac_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_escenario_cxc_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_escenario_cxc_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'][] = $rs->fields[0];
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
          $sSelComp = "name=\"fac_tipo_comprobante\"";
          if (isset($this->NM_ajax_info['select_html']['fac_tipo_comprobante']) && !empty($this->NM_ajax_info['select_html']['fac_tipo_comprobante']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['fac_tipo_comprobante']);
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

                  if ($this->fac_tipo_comprobante == $sValue)
                  {
                      $this->_tmp_lookup_fac_tipo_comprobante = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $Nm_tp_obj = (isset($this->nmgp_refresh_fields) && in_array("fac_tipo_comprobante", $this->nmgp_refresh_fields)) ? 'select' : 'text';
          $this->NM_ajax_info['fldList']['fac_tipo_comprobante'] = array(
                       'row'    => '',
               'type'    => $Nm_tp_obj,
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['fac_tipo_comprobante']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['fac_tipo_comprobante']['valList'][$i] = form_escenario_cxc_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['fac_tipo_comprobante']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['fac_tipo_comprobante']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['fac_tipo_comprobante']['labList'] = $aLabel;
          }
   }

          //----- fac_dias_vigencia
   function ajax_return_values_fac_dias_vigencia($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_dias_vigencia", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_dias_vigencia);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_dias_vigencia'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("fac_dias_vigencia", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- fac_numero
   function ajax_return_values_fac_numero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_numero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_numero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_numero'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("fac_numero", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- fac_comentario
   function ajax_return_values_fac_comentario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_comentario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_comentario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_comentario'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($this->form_encode_input($sTmpValue)),
               'labList' => array($this->form_format_readonly("fac_comentario", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- detalle
   function ajax_return_values_detalle($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("detalle", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->detalle);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['detalle'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_subtotal
   function ajax_return_values_fac_subtotal($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_subtotal", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_subtotal);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_subtotal'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_subtotal_iva
   function ajax_return_values_fac_subtotal_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_subtotal_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_subtotal_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_subtotal_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_subtotal_cero
   function ajax_return_values_fac_subtotal_cero($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_subtotal_cero", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_subtotal_cero);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_subtotal_cero'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_subtotal_no_objeto
   function ajax_return_values_fac_subtotal_no_objeto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_subtotal_no_objeto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_subtotal_no_objeto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_subtotal_no_objeto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_subtotal_excento
   function ajax_return_values_fac_subtotal_excento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_subtotal_excento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_subtotal_excento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_subtotal_excento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_total_descuento
   function ajax_return_values_fac_total_descuento($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_total_descuento", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_total_descuento);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_total_descuento'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_valor_ice
   function ajax_return_values_fac_valor_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_valor_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_valor_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_valor_ice'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_valor_iva
   function ajax_return_values_fac_valor_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_valor_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_valor_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_valor_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_valor_irbpnr
   function ajax_return_values_fac_valor_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_valor_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_valor_irbpnr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_valor_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_total
   function ajax_return_values_fac_total($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_total", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_total);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_total'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- fac_estado
   function ajax_return_values_fac_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("fac_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->fac_estado);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['fac_estado'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- clientes
   function ajax_return_values_clientes($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("clientes", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->clientes);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['clientes'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fac_estado = $this->fac_estado;
    $original_titulo = $this->titulo;
}
  $this->titulo = $this->Ini->Nm_lang['lang_emitir_cxc'] ;

if($this->fac_estado <>'E'){
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'on';;

}else{
	$this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes["Anular"] = 'off';;
}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fac_estado != $this->fac_estado || (isset($bFlagRead_fac_estado) && $bFlagRead_fac_estado)))
    {
        $this->ajax_return_values_fac_estado(true);
    }
    if (($original_titulo != $this->titulo || (isset($bFlagRead_titulo) && $bFlagRead_titulo)))
    {
        $this->ajax_return_values_titulo(true);
    }
}
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off'; 
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
      $this->fac_subtotal = str_replace($sc_parm1, $sc_parm2, $this->fac_subtotal); 
      $this->fac_subtotal_iva = str_replace($sc_parm1, $sc_parm2, $this->fac_subtotal_iva); 
      $this->fac_subtotal_cero = str_replace($sc_parm1, $sc_parm2, $this->fac_subtotal_cero); 
      $this->fac_subtotal_no_objeto = str_replace($sc_parm1, $sc_parm2, $this->fac_subtotal_no_objeto); 
      $this->fac_subtotal_excento = str_replace($sc_parm1, $sc_parm2, $this->fac_subtotal_excento); 
      $this->fac_total_descuento = str_replace($sc_parm1, $sc_parm2, $this->fac_total_descuento); 
      $this->fac_valor_ice = str_replace($sc_parm1, $sc_parm2, $this->fac_valor_ice); 
      $this->fac_valor_iva = str_replace($sc_parm1, $sc_parm2, $this->fac_valor_iva); 
      $this->fac_valor_irbpnr = str_replace($sc_parm1, $sc_parm2, $this->fac_valor_irbpnr); 
      $this->fac_total = str_replace($sc_parm1, $sc_parm2, $this->fac_total); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->fac_subtotal = "'" . $this->fac_subtotal . "'";
      $this->fac_subtotal_iva = "'" . $this->fac_subtotal_iva . "'";
      $this->fac_subtotal_cero = "'" . $this->fac_subtotal_cero . "'";
      $this->fac_subtotal_no_objeto = "'" . $this->fac_subtotal_no_objeto . "'";
      $this->fac_subtotal_excento = "'" . $this->fac_subtotal_excento . "'";
      $this->fac_total_descuento = "'" . $this->fac_total_descuento . "'";
      $this->fac_valor_ice = "'" . $this->fac_valor_ice . "'";
      $this->fac_valor_iva = "'" . $this->fac_valor_iva . "'";
      $this->fac_valor_irbpnr = "'" . $this->fac_valor_irbpnr . "'";
      $this->fac_total = "'" . $this->fac_total . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->fac_subtotal = str_replace("'", "", $this->fac_subtotal); 
      $this->fac_subtotal_iva = str_replace("'", "", $this->fac_subtotal_iva); 
      $this->fac_subtotal_cero = str_replace("'", "", $this->fac_subtotal_cero); 
      $this->fac_subtotal_no_objeto = str_replace("'", "", $this->fac_subtotal_no_objeto); 
      $this->fac_subtotal_excento = str_replace("'", "", $this->fac_subtotal_excento); 
      $this->fac_total_descuento = str_replace("'", "", $this->fac_total_descuento); 
      $this->fac_valor_ice = str_replace("'", "", $this->fac_valor_ice); 
      $this->fac_valor_iva = str_replace("'", "", $this->fac_valor_iva); 
      $this->fac_valor_irbpnr = str_replace("'", "", $this->fac_valor_irbpnr); 
      $this->fac_total = str_replace("'", "", $this->fac_total); 
   } 
//----------- 

   function controle_navegacao()
   {
      global $sc_where;

          if (false && !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']))
          {
               $sc_where_pos = " WHERE ((fac_numero < $this->fac_numero))";
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
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] = $rsc->fields[0];
               $rsc->Close(); 
               if ('' != $this->fac_numero)
               {
               $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
               $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count; 
               $rsc = $this->Db->Execute($nmgp_sel_count); 
               if ($rsc === false && !$rsc->EOF)  
               { 
                   $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
                   exit; 
               }  
               $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = $rsc->fields[0];
               if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] < 0)
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = 0;
               }
               $rsc->Close(); 
               }
               else
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = 0;
               }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['qt_reg_grid'] = 1;
          if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = 0;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['final']  = 0;
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = $this->NM_ajax_info['param']['nmgp_opcao'];
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'], array('incluir', 'alterar', 'excluir')))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = '';
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] == 'inicio')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = 0;
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] == 'retorna')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = 0 ;
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] == 'avanca' && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] > $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['final']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['final'];
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] == 'final')
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] - $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['qt_reg_grid'];
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] = 0;
              }
          }
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['final'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'] + $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['qt_reg_grid'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['final'];
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = '';

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
    if ("alterar" == $this->nmgp_opcao) {
      $this->sc_evento = $this->nmgp_opcao;
      $_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fac_numero = $this->fac_numero;
    $original_fac_total = $this->fac_total;
}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  $this->sc_temp_var_procesar=true;
$this->sc_temp_var_mensaje='Emisión Exitosa';

if ($this->fac_total ==0){
		$this->sc_temp_var_procesar=false;
		$this->sc_temp_var_mensaje='El valor a facturar no debe ser 0<br>';
}

$check_sql = "SELECT count(*) 
			  FROM fac_cliente_escenariocxc
              WHERE cfm_escenariocxc=".$this->fac_numero ;
 
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


if ($this->rs[0][0]==0){
	$this->sc_temp_var_procesar=false;
	$this->sc_temp_var_mensaje='No ha seleccionado Clientes para emitir las deudas<br>';
}
if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fac_numero != $this->fac_numero || (isset($bFlagRead_fac_numero) && $bFlagRead_fac_numero)))
    {
        $this->ajax_return_values_fac_numero(true);
    }
    if (($original_fac_total != $this->fac_total || (isset($bFlagRead_fac_total) && $bFlagRead_fac_total)))
    {
        $this->ajax_return_values_fac_total(true);
    }
}
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off'; 
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
      if ('incluir' == $this->nmgp_opcao && empty($this->fac_usuario)) {$this->fac_usuario = "" . $_SESSION['Igtech_SesionLogin'] . ""; $NM_val_null[] = "fac_usuario";}  
      $NM_val_form['titulo'] = $this->titulo;
      $NM_val_form['fac_fecha'] = $this->fac_fecha;
      $NM_val_form['fac_tipo_cartera'] = $this->fac_tipo_cartera;
      $NM_val_form['fac_tipo_comprobante'] = $this->fac_tipo_comprobante;
      $NM_val_form['fac_dias_vigencia'] = $this->fac_dias_vigencia;
      $NM_val_form['fac_numero'] = $this->fac_numero;
      $NM_val_form['fac_comentario'] = $this->fac_comentario;
      $NM_val_form['detalle'] = $this->detalle;
      $NM_val_form['fac_subtotal'] = $this->fac_subtotal;
      $NM_val_form['fac_subtotal_iva'] = $this->fac_subtotal_iva;
      $NM_val_form['fac_subtotal_cero'] = $this->fac_subtotal_cero;
      $NM_val_form['fac_subtotal_no_objeto'] = $this->fac_subtotal_no_objeto;
      $NM_val_form['fac_subtotal_excento'] = $this->fac_subtotal_excento;
      $NM_val_form['fac_total_descuento'] = $this->fac_total_descuento;
      $NM_val_form['fac_valor_ice'] = $this->fac_valor_ice;
      $NM_val_form['fac_valor_iva'] = $this->fac_valor_iva;
      $NM_val_form['fac_valor_irbpnr'] = $this->fac_valor_irbpnr;
      $NM_val_form['fac_total'] = $this->fac_total;
      $NM_val_form['fac_estado'] = $this->fac_estado;
      $NM_val_form['clientes'] = $this->clientes;
      $NM_val_form['fac_empresa'] = $this->fac_empresa;
      $NM_val_form['fac_usuario'] = $this->fac_usuario;
      if ($this->fac_numero === "" || is_null($this->fac_numero))  
      { 
          $this->fac_numero = 0;
      } 
      if ($this->fac_tipo_cartera === "" || is_null($this->fac_tipo_cartera))  
      { 
          $this->fac_tipo_cartera = 0;
      } 
      if ($this->fac_subtotal_iva === "" || is_null($this->fac_subtotal_iva))  
      { 
          $this->fac_subtotal_iva = 0;
          $this->sc_force_zero[] = 'fac_subtotal_iva';
      } 
      if ($this->fac_subtotal_cero === "" || is_null($this->fac_subtotal_cero))  
      { 
          $this->fac_subtotal_cero = 0;
          $this->sc_force_zero[] = 'fac_subtotal_cero';
      } 
      if ($this->fac_subtotal_no_objeto === "" || is_null($this->fac_subtotal_no_objeto))  
      { 
          $this->fac_subtotal_no_objeto = 0;
          $this->sc_force_zero[] = 'fac_subtotal_no_objeto';
      } 
      if ($this->fac_subtotal_excento === "" || is_null($this->fac_subtotal_excento))  
      { 
          $this->fac_subtotal_excento = 0;
          $this->sc_force_zero[] = 'fac_subtotal_excento';
      } 
      if ($this->fac_subtotal === "" || is_null($this->fac_subtotal))  
      { 
          $this->fac_subtotal = 0;
          $this->sc_force_zero[] = 'fac_subtotal';
      } 
      if ($this->fac_total_descuento === "" || is_null($this->fac_total_descuento))  
      { 
          $this->fac_total_descuento = 0;
          $this->sc_force_zero[] = 'fac_total_descuento';
      } 
      if ($this->fac_valor_ice === "" || is_null($this->fac_valor_ice))  
      { 
          $this->fac_valor_ice = 0;
          $this->sc_force_zero[] = 'fac_valor_ice';
      } 
      if ($this->fac_valor_iva === "" || is_null($this->fac_valor_iva))  
      { 
          $this->fac_valor_iva = 0;
          $this->sc_force_zero[] = 'fac_valor_iva';
      } 
      if ($this->fac_valor_irbpnr === "" || is_null($this->fac_valor_irbpnr))  
      { 
          $this->fac_valor_irbpnr = 0;
          $this->sc_force_zero[] = 'fac_valor_irbpnr';
      } 
      if ($this->fac_total === "" || is_null($this->fac_total))  
      { 
          $this->fac_total = 0;
          $this->sc_force_zero[] = 'fac_total';
      } 
      if ($this->fac_dias_vigencia === "" || is_null($this->fac_dias_vigencia))  
      { 
          $this->fac_dias_vigencia = 0;
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->fac_tipo_comprobante_before_qstr = $this->fac_tipo_comprobante;
          $this->fac_tipo_comprobante = substr($this->Db->qstr($this->fac_tipo_comprobante), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fac_tipo_comprobante = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fac_tipo_comprobante);
          }
          if ($this->fac_tipo_comprobante == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fac_tipo_comprobante = "null"; 
              $NM_val_null[] = "fac_tipo_comprobante";
          } 
          $this->fac_empresa_before_qstr = $this->fac_empresa;
          $this->fac_empresa = substr($this->Db->qstr($this->fac_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fac_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fac_empresa);
          }
          if ($this->fac_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fac_empresa = "null"; 
              $NM_val_null[] = "fac_empresa";
          } 
          if ($this->fac_fecha == "")  
          { 
              $this->fac_fecha = "null"; 
              $NM_val_null[] = "fac_fecha";
          } 
          $this->fac_comentario_before_qstr = $this->fac_comentario;
          $this->fac_comentario = substr($this->Db->qstr($this->fac_comentario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fac_comentario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fac_comentario);
          }
          if ($this->fac_comentario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fac_comentario = "null"; 
              $NM_val_null[] = "fac_comentario";
          } 
          $this->fac_estado_before_qstr = $this->fac_estado;
          $this->fac_estado = substr($this->Db->qstr($this->fac_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fac_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fac_estado);
          }
          if ($this->fac_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fac_estado = "null"; 
              $NM_val_null[] = "fac_estado";
          } 
          $this->fac_usuario_before_qstr = $this->fac_usuario;
          $this->fac_usuario = substr($this->Db->qstr($this->fac_usuario), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->fac_usuario = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->fac_usuario);
          }
          if ($this->fac_usuario == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->fac_usuario = "null"; 
              $NM_val_null[] = "fac_usuario";
          } 
          $this->clientes_before_qstr = $this->clientes;
          $this->clientes = substr($this->Db->qstr($this->clientes), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->clientes = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->clientes);
          }
          if ($this->clientes == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->clientes = "null"; 
              $NM_val_null[] = "clientes";
          } 
          $this->detalle_before_qstr = $this->detalle;
          $this->detalle = substr($this->Db->qstr($this->detalle), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->detalle = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->detalle);
          }
          if ($this->detalle == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->detalle = "null"; 
              $NM_val_null[] = "detalle";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_escenario_cxc_pack_ajax_response();
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
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "fac_subtotal_iva = $this->fac_subtotal_iva, fac_subtotal_cero = $this->fac_subtotal_cero, fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto, fac_subtotal_excento = $this->fac_subtotal_excento, fac_subtotal = $this->fac_subtotal, fac_total_descuento = $this->fac_total_descuento, fac_valor_ice = $this->fac_valor_ice, fac_valor_iva = $this->fac_valor_iva, fac_valor_irbpnr = $this->fac_valor_irbpnr, fac_total = $this->fac_total, fac_estado = '$this->fac_estado'"; 
              } 
              if (isset($NM_val_form['fac_tipo_cartera']) && $NM_val_form['fac_tipo_cartera'] != $this->nmgp_dados_select['fac_tipo_cartera']) 
              { 
                  $SC_fields_update[] = "fac_tipo_cartera = $this->fac_tipo_cartera"; 
              } 
              if (isset($NM_val_form['fac_tipo_comprobante']) && $NM_val_form['fac_tipo_comprobante'] != $this->nmgp_dados_select['fac_tipo_comprobante']) 
              { 
                  $SC_fields_update[] = "fac_tipo_comprobante = '$this->fac_tipo_comprobante'"; 
              } 
              if (isset($NM_val_form['fac_empresa']) && $NM_val_form['fac_empresa'] != $this->nmgp_dados_select['fac_empresa']) 
              { 
                  $SC_fields_update[] = "fac_empresa = '$this->fac_empresa'"; 
              } 
              if (isset($NM_val_form['fac_fecha']) && $NM_val_form['fac_fecha'] != $this->nmgp_dados_select['fac_fecha']) 
              { 
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
                  { 
                      $SC_fields_update[] = "fac_fecha = #$this->fac_fecha#"; 
                  } 
                  elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
                  { 
                      $SC_fields_update[] = "fac_fecha = EXTEND('" . $this->fac_fecha . "', YEAR TO DAY)"; 
                  } 
                  else
                  { 
                      $SC_fields_update[] = "fac_fecha = " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ""; 
                  } 
              } 
              if (isset($NM_val_form['fac_comentario']) && $NM_val_form['fac_comentario'] != $this->nmgp_dados_select['fac_comentario']) 
              { 
                  $SC_fields_update[] = "fac_comentario = '$this->fac_comentario'"; 
              } 
              if (isset($NM_val_form['fac_usuario']) && $NM_val_form['fac_usuario'] != $this->nmgp_dados_select['fac_usuario']) 
              { 
                  $SC_fields_update[] = "fac_usuario = '$this->fac_usuario'"; 
              } 
              if (isset($NM_val_form['fac_dias_vigencia']) && $NM_val_form['fac_dias_vigencia'] != $this->nmgp_dados_select['fac_dias_vigencia']) 
              { 
                  $SC_fields_update[] = "fac_dias_vigencia = $this->fac_dias_vigencia"; 
              } 
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE fac_numero = $this->fac_numero ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE fac_numero = $this->fac_numero ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE fac_numero = $this->fac_numero ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE fac_numero = $this->fac_numero ";  
              }  
              else  
              {
                  $comando .= " WHERE fac_numero = $this->fac_numero ";  
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
                                  form_escenario_cxc_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              $this->fac_tipo_comprobante = $this->fac_tipo_comprobante_before_qstr;
              $this->fac_empresa = $this->fac_empresa_before_qstr;
              $this->fac_comentario = $this->fac_comentario_before_qstr;
              $this->fac_estado = $this->fac_estado_before_qstr;
              $this->fac_usuario = $this->fac_usuario_before_qstr;
              $this->clientes = $this->clientes_before_qstr;
              $this->detalle = $this->detalle_before_qstr;
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
              }


              if     (isset($NM_val_form) && isset($NM_val_form['fac_numero'])) { $this->fac_numero = $NM_val_form['fac_numero']; }
              elseif (isset($this->fac_numero)) { $this->nm_limpa_alfa($this->fac_numero); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_tipo_cartera'])) { $this->fac_tipo_cartera = $NM_val_form['fac_tipo_cartera']; }
              elseif (isset($this->fac_tipo_cartera)) { $this->nm_limpa_alfa($this->fac_tipo_cartera); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_tipo_comprobante'])) { $this->fac_tipo_comprobante = $NM_val_form['fac_tipo_comprobante']; }
              elseif (isset($this->fac_tipo_comprobante)) { $this->nm_limpa_alfa($this->fac_tipo_comprobante); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_comentario'])) { $this->fac_comentario = $NM_val_form['fac_comentario']; }
              elseif (isset($this->fac_comentario)) { $this->nm_limpa_alfa($this->fac_comentario); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_subtotal_iva'])) { $this->fac_subtotal_iva = $NM_val_form['fac_subtotal_iva']; }
              elseif (isset($this->fac_subtotal_iva)) { $this->nm_limpa_alfa($this->fac_subtotal_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_subtotal_cero'])) { $this->fac_subtotal_cero = $NM_val_form['fac_subtotal_cero']; }
              elseif (isset($this->fac_subtotal_cero)) { $this->nm_limpa_alfa($this->fac_subtotal_cero); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_subtotal_no_objeto'])) { $this->fac_subtotal_no_objeto = $NM_val_form['fac_subtotal_no_objeto']; }
              elseif (isset($this->fac_subtotal_no_objeto)) { $this->nm_limpa_alfa($this->fac_subtotal_no_objeto); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_subtotal_excento'])) { $this->fac_subtotal_excento = $NM_val_form['fac_subtotal_excento']; }
              elseif (isset($this->fac_subtotal_excento)) { $this->nm_limpa_alfa($this->fac_subtotal_excento); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_subtotal'])) { $this->fac_subtotal = $NM_val_form['fac_subtotal']; }
              elseif (isset($this->fac_subtotal)) { $this->nm_limpa_alfa($this->fac_subtotal); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_total_descuento'])) { $this->fac_total_descuento = $NM_val_form['fac_total_descuento']; }
              elseif (isset($this->fac_total_descuento)) { $this->nm_limpa_alfa($this->fac_total_descuento); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_valor_ice'])) { $this->fac_valor_ice = $NM_val_form['fac_valor_ice']; }
              elseif (isset($this->fac_valor_ice)) { $this->nm_limpa_alfa($this->fac_valor_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_valor_iva'])) { $this->fac_valor_iva = $NM_val_form['fac_valor_iva']; }
              elseif (isset($this->fac_valor_iva)) { $this->nm_limpa_alfa($this->fac_valor_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_valor_irbpnr'])) { $this->fac_valor_irbpnr = $NM_val_form['fac_valor_irbpnr']; }
              elseif (isset($this->fac_valor_irbpnr)) { $this->nm_limpa_alfa($this->fac_valor_irbpnr); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_total'])) { $this->fac_total = $NM_val_form['fac_total']; }
              elseif (isset($this->fac_total)) { $this->nm_limpa_alfa($this->fac_total); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_estado'])) { $this->fac_estado = $NM_val_form['fac_estado']; }
              elseif (isset($this->fac_estado)) { $this->nm_limpa_alfa($this->fac_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['fac_dias_vigencia'])) { $this->fac_dias_vigencia = $NM_val_form['fac_dias_vigencia']; }
              elseif (isset($this->fac_dias_vigencia)) { $this->nm_limpa_alfa($this->fac_dias_vigencia); }
              if     (isset($NM_val_form) && isset($NM_val_form['clientes'])) { $this->clientes = $NM_val_form['clientes']; }
              elseif (isset($this->clientes)) { $this->nm_limpa_alfa($this->clientes); }
              if     (isset($NM_val_form) && isset($NM_val_form['detalle'])) { $this->detalle = $NM_val_form['detalle']; }
              elseif (isset($this->detalle)) { $this->nm_limpa_alfa($this->detalle); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('titulo', 'fac_fecha', 'fac_tipo_cartera', 'fac_tipo_comprobante', 'fac_dias_vigencia', 'fac_numero', 'fac_comentario', 'detalle', 'fac_subtotal', 'fac_subtotal_iva', 'fac_subtotal_cero', 'fac_subtotal_no_objeto', 'fac_subtotal_excento', 'fac_total_descuento', 'fac_valor_ice', 'fac_valor_iva', 'fac_valor_irbpnr', 'fac_total', 'fac_estado', 'clientes'), $aDoNotUpdate);
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
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(fac_numero) from " . $this->Ini->nm_tabela; 
          $comando = "select max(fac_numero) from " . $this->Ini->nm_tabela; 
          $rs = $this->Db->Execute($comando); 
          if ($rs === false && !$rs->EOF)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
              $this->NM_rollback_db(); 
              if ($this->NM_ajax_flag)
              {
                  form_escenario_cxc_pack_ajax_response();
              }
              exit; 
          }  
          $this->fac_numero_before_qstr = $this->fac_numero = $rs->fields[0] + 1;
          $rs->Close(); 
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
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
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_escenario_cxc_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES ($this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', #$this->fac_fecha#, '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', EXTEND('$this->fac_fecha', YEAR TO DAY), '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia) VALUES (" . $NM_seq_auto . "$this->fac_numero, $this->fac_tipo_cartera, '$this->fac_tipo_comprobante', '$this->fac_empresa', " . $this->Ini->date_delim . $this->fac_fecha . $this->Ini->date_delim1 . ", '$this->fac_comentario', $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_ice, $this->fac_valor_iva, $this->fac_valor_irbpnr, $this->fac_total, '$this->fac_estado', '$this->fac_usuario', $this->fac_dias_vigencia)"; 
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
                              form_escenario_cxc_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->fac_tipo_comprobante = $this->fac_tipo_comprobante_before_qstr;
              $this->fac_empresa = $this->fac_empresa_before_qstr;
              $this->fac_comentario = $this->fac_comentario_before_qstr;
              $this->fac_estado = $this->fac_estado_before_qstr;
              $this->fac_usuario = $this->fac_usuario_before_qstr;
              $this->clientes = $this->clientes_before_qstr;
              $this->detalle = $this->detalle_before_qstr;
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']);
              }

              $this->sc_evento = "insert"; 
              $this->fac_tipo_comprobante = $this->fac_tipo_comprobante_before_qstr;
              $this->fac_empresa = $this->fac_empresa_before_qstr;
              $this->fac_comentario = $this->fac_comentario_before_qstr;
              $this->fac_estado = $this->fac_estado_before_qstr;
              $this->fac_usuario = $this->fac_usuario_before_qstr;
              $this->clientes = $this->clientes_before_qstr;
              $this->detalle = $this->detalle_before_qstr;
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->nmgp_botoes['Anular'] = "on";
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->fac_numero = substr($this->Db->qstr($this->fac_numero), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';
          if ($bDelecaoOk)
          {
              $sDetailWhere = "df_escenariocxc = " . $this->fac_numero . " AND df_empresa = '" . $this->fac_empresa . "'";
              $this->form_detalle_escenario_cxc->ini_controle();
              if ($this->form_detalle_escenario_cxc->temRegistros($sDetailWhere))
              {
                  $bDelecaoOk = false;
                  $sMsgErro   = $this->Ini->Nm_lang['lang_errm_fkvi'];
              }
          }

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where fac_numero = $this->fac_numero "); 
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
                          form_escenario_cxc_pack_ajax_response();
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']);
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
    if ("update" == $this->sc_evento && $this->nmgp_opcao != "nada") {
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ",")
        {
           $this->nm_troca_decimal(",", ".");
        }
        $_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_fac_numero = $this->fac_numero;
}
if (!isset($this->sc_temp_Igtech_IPUsuario)) {$this->sc_temp_Igtech_IPUsuario = (isset($_SESSION['Igtech_IPUsuario'])) ? $_SESSION['Igtech_IPUsuario'] : "";}
if (!isset($this->sc_temp_var_mensaje)) {$this->sc_temp_var_mensaje = (isset($_SESSION['var_mensaje'])) ? $_SESSION['var_mensaje'] : "";}
if (!isset($this->sc_temp_var_procesar)) {$this->sc_temp_var_procesar = (isset($_SESSION['var_procesar'])) ? $_SESSION['var_procesar'] : "";}
  $var_aplicacion_retorno='grid_del_escenario_cxc';

$sql_clientes="SELECT count(cfm_cliente)
					 FROM fac_cliente_escenariocxc
					 WHERE cfm_escenariocxc=".$this->fac_numero ."
					 and cfm_estado='R'";
 
      $nm_select = $sql_clientes; 
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

if($this->rs[0][0]>0){
	if($this->sc_temp_var_procesar==true){
		$clientes_sql = "SELECT cfm_cliente
						 FROM fac_cliente_escenariocxc
						 WHERE cfm_escenariocxc=".$this->fac_numero ."
						 and cfm_estado='R'";

		 
      $nm_select = $clientes_sql; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_select; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($this->rs_cliente = $this->Db->Execute($nm_select)) 
      { }
      elseif (isset($GLOBALS["NM_ERRO_IBASE"]) && $GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->rs_cliente = false;
          $this->rs_cliente_erro = $this->Db->ErrorMsg();
      } 


		if (false == $this->rs_cliente ) {
			$this->sc_temp_var_mensaje='Error al acceder a la base de catos.';
			$var_aplicacion_retorno='form_escenario_cxc';
		}else{
		   while(!$this->rs_cliente->EOF)	{
				$check_sql = "SELECT * from sp_deuda_escenariocxc("
							.$this->fac_numero .", "
							.$this->rs_cliente->fields[0].",
							'".$this->sc_temp_Igtech_IPUsuario."')
							as (respuesta int, 
								mensaje varchar);";
				 
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
					if($this->rs[0][0]<>0){
						$this->sc_temp_var_mensaje=$this->rs[0][1];
						$var_aplicacion_retorno='form_escenario_cxc';
					}	
				}
				$this->rs_cliente->MoveNext();
			}
			$this->rs_cliente->Close();
			
			$check_sql = "SELECT count(*) 
				  FROM fac_cliente_escenariocxc
				  WHERE 
				  cfm_estado='R'
				  and cfm_escenariocxc=".$this->fac_numero ;
			 
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

			if($this->rs[0][0]==0){
				
				
				$update_sql="UPDATE fac_escenariocxc 
							SET
							fac_estado='E'
							WHERE
							fac_numero=".$this->fac_numero ;
				
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
                form_escenario_cxc_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
			}
		}
	}else{
		$var_aplicacion_retorno='form_escenariocxc';
	}
		
}else{
	$this->sc_temp_var_mensaje="No ha seleecionado clientes para facturar";
	$var_aplicacion_retorno='form_escenario_cxc';
}	

$redir_app    = 'control_mostrar_mensaje';  
$redir_target = '_self';  
 
$redir_param  = array(     
					'var_mensaje' => $this->sc_temp_var_mensaje,
					'var_aplicacion' => $var_aplicacion_retorno,
					'var_parametros' => $this->fac_numero ,
					'var_target'=>'_self',	
);

 if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
 if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
 if (isset($this->sc_temp_Igtech_IPUsuario)) { $_SESSION['Igtech_IPUsuario'] = $this->sc_temp_Igtech_IPUsuario;}
 if (!isset($this->Campos_Mens_erro) || empty($this->Campos_Mens_erro))
 {
$this->nmgp_redireciona_form($redir_app, $this->nm_location, $redir_param, "$redir_target", "ret_self", 440, 630);
 };
if (isset($this->sc_temp_var_procesar)) { $_SESSION['var_procesar'] = $this->sc_temp_var_procesar;}
if (isset($this->sc_temp_var_mensaje)) { $_SESSION['var_mensaje'] = $this->sc_temp_var_mensaje;}
if (isset($this->sc_temp_Igtech_IPUsuario)) { $_SESSION['Igtech_IPUsuario'] = $this->sc_temp_Igtech_IPUsuario;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_fac_numero != $this->fac_numero || (isset($bFlagRead_fac_numero) && $bFlagRead_fac_numero)))
    {
        $this->ajax_return_values_fac_numero(true);
    }
}
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off'; 
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
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ",")
   {
       $this->nm_troca_decimal(".", ",");
   }
      if ($salva_opcao == "incluir" && $GLOBALS["erro_incl"] != 1) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['parms'] = "fac_numero?#?$this->fac_numero?@?"; 
      }
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->fac_numero = null === $this->fac_numero ? null : substr($this->Db->qstr($this->fac_numero), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'] . ")";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, str_replace (convert(char(10),fac_fecha,102), '.', '-') + ' ' + convert(char(8),fac_fecha,20), fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, convert(char(23),fac_fecha,121), fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, EXTEND(fac_fecha, YEAR TO DAY), fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT fac_numero, fac_tipo_cartera, fac_tipo_comprobante, fac_empresa, fac_fecha, fac_comentario, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_subtotal, fac_total_descuento, fac_valor_ice, fac_valor_iva, fac_valor_irbpnr, fac_total, fac_estado, fac_usuario, fac_dias_vigencia from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "fac_numero = $this->fac_numero"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "fac_numero = $this->fac_numero"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "fac_numero = $this->fac_numero"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "fac_numero = $this->fac_numero"; 
              }  
              else  
              {
                  $aWhere[] = "fac_numero = $this->fac_numero"; 
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
          $sc_order_by = "fac_numero";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['select'] = ""; 
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes['Anular'] = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter'] = true;
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
              $this->NM_ajax_info['buttonDisplay']['Anular'] = $this->nmgp_botoes['Anular'] = "off";
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
              $this->fac_numero = $rs->fields[0] ; 
              $this->nmgp_dados_select['fac_numero'] = $this->fac_numero;
              $this->fac_tipo_cartera = $rs->fields[1] ; 
              $this->nmgp_dados_select['fac_tipo_cartera'] = $this->fac_tipo_cartera;
              $this->fac_tipo_comprobante = $rs->fields[2] ; 
              $this->nmgp_dados_select['fac_tipo_comprobante'] = $this->fac_tipo_comprobante;
              $this->fac_empresa = $rs->fields[3] ; 
              $this->nmgp_dados_select['fac_empresa'] = $this->fac_empresa;
              $this->fac_fecha = $rs->fields[4] ; 
              $this->nmgp_dados_select['fac_fecha'] = $this->fac_fecha;
              $this->fac_comentario = $rs->fields[5] ; 
              $this->nmgp_dados_select['fac_comentario'] = $this->fac_comentario;
              $this->fac_subtotal_iva = $rs->fields[6] ; 
              $this->nmgp_dados_select['fac_subtotal_iva'] = $this->fac_subtotal_iva;
              $this->fac_subtotal_cero = $rs->fields[7] ; 
              $this->nmgp_dados_select['fac_subtotal_cero'] = $this->fac_subtotal_cero;
              $this->fac_subtotal_no_objeto = $rs->fields[8] ; 
              $this->nmgp_dados_select['fac_subtotal_no_objeto'] = $this->fac_subtotal_no_objeto;
              $this->fac_subtotal_excento = $rs->fields[9] ; 
              $this->nmgp_dados_select['fac_subtotal_excento'] = $this->fac_subtotal_excento;
              $this->fac_subtotal = $rs->fields[10] ; 
              $this->nmgp_dados_select['fac_subtotal'] = $this->fac_subtotal;
              $this->fac_total_descuento = $rs->fields[11] ; 
              $this->nmgp_dados_select['fac_total_descuento'] = $this->fac_total_descuento;
              $this->fac_valor_ice = $rs->fields[12] ; 
              $this->nmgp_dados_select['fac_valor_ice'] = $this->fac_valor_ice;
              $this->fac_valor_iva = $rs->fields[13] ; 
              $this->nmgp_dados_select['fac_valor_iva'] = $this->fac_valor_iva;
              $this->fac_valor_irbpnr = $rs->fields[14] ; 
              $this->nmgp_dados_select['fac_valor_irbpnr'] = $this->fac_valor_irbpnr;
              $this->fac_total = $rs->fields[15] ; 
              $this->nmgp_dados_select['fac_total'] = $this->fac_total;
              $this->fac_estado = $rs->fields[16] ; 
              $this->nmgp_dados_select['fac_estado'] = $this->fac_estado;
              $this->fac_usuario = $rs->fields[17] ; 
              $this->nmgp_dados_select['fac_usuario'] = $this->fac_usuario;
              $this->fac_dias_vigencia = $rs->fields[18] ; 
              $this->nmgp_dados_select['fac_dias_vigencia'] = $this->fac_dias_vigencia;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->fac_numero = (string)$this->fac_numero; 
              $this->fac_tipo_cartera = (string)$this->fac_tipo_cartera; 
              $this->fac_subtotal_iva = (string)$this->fac_subtotal_iva; 
              $this->fac_subtotal_cero = (string)$this->fac_subtotal_cero; 
              $this->fac_subtotal_no_objeto = (string)$this->fac_subtotal_no_objeto; 
              $this->fac_subtotal_excento = (string)$this->fac_subtotal_excento; 
              $this->fac_subtotal = (string)$this->fac_subtotal; 
              $this->fac_total_descuento = (string)$this->fac_total_descuento; 
              $this->fac_valor_ice = (string)$this->fac_valor_ice; 
              $this->fac_valor_iva = (string)$this->fac_valor_iva; 
              $this->fac_valor_irbpnr = (string)$this->fac_valor_irbpnr; 
              $this->fac_total = (string)$this->fac_total; 
              $this->fac_dias_vigencia = (string)$this->fac_dias_vigencia; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['parms'] = "fac_numero?#?$this->fac_numero?@?";
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select'] = $this->nmgp_dados_select;
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
              $this->fac_numero = "";  
              $this->nmgp_dados_form["fac_numero"] = $this->fac_numero;
              $this->fac_tipo_cartera = "2";  
              $this->nmgp_dados_form["fac_tipo_cartera"] = $this->fac_tipo_cartera;
              $this->fac_tipo_comprobante = "99";  
              $this->nmgp_dados_form["fac_tipo_comprobante"] = $this->fac_tipo_comprobante;
              $this->fac_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . "";  
              $this->nmgp_dados_form["fac_empresa"] = $this->fac_empresa;
              $this->fac_fecha =  date('Y') . "-" . date('m')  . "-" . date('d');
              $this->nmgp_dados_form["fac_fecha"] = $this->fac_fecha;
              $this->fac_comentario = "";  
              $this->nmgp_dados_form["fac_comentario"] = $this->fac_comentario;
              $this->fac_subtotal_iva = "0";  
              $this->nmgp_dados_form["fac_subtotal_iva"] = $this->fac_subtotal_iva;
              $this->fac_subtotal_cero = "0";  
              $this->nmgp_dados_form["fac_subtotal_cero"] = $this->fac_subtotal_cero;
              $this->fac_subtotal_no_objeto = "0";  
              $this->nmgp_dados_form["fac_subtotal_no_objeto"] = $this->fac_subtotal_no_objeto;
              $this->fac_subtotal_excento = "0";  
              $this->nmgp_dados_form["fac_subtotal_excento"] = $this->fac_subtotal_excento;
              $this->fac_subtotal = "0";  
              $this->nmgp_dados_form["fac_subtotal"] = $this->fac_subtotal;
              $this->fac_total_descuento = "0";  
              $this->nmgp_dados_form["fac_total_descuento"] = $this->fac_total_descuento;
              $this->fac_valor_ice = "0";  
              $this->nmgp_dados_form["fac_valor_ice"] = $this->fac_valor_ice;
              $this->fac_valor_iva = "0";  
              $this->nmgp_dados_form["fac_valor_iva"] = $this->fac_valor_iva;
              $this->fac_valor_irbpnr = "0";  
              $this->nmgp_dados_form["fac_valor_irbpnr"] = $this->fac_valor_irbpnr;
              $this->fac_total = "0";  
              $this->nmgp_dados_form["fac_total"] = $this->fac_total;
              $this->fac_estado = "R";  
              $this->nmgp_dados_form["fac_estado"] = $this->fac_estado;
              $this->fac_usuario = "";  
              $this->nmgp_dados_form["fac_usuario"] = $this->fac_usuario;
              $this->fac_dias_vigencia = "";  
              $this->nmgp_dados_form["fac_dias_vigencia"] = $this->fac_dias_vigencia;
              $this->clientes = "";  
              $this->nmgp_dados_form["clientes"] = $this->clientes;
              $this->detalle = "";  
              $this->nmgp_dados_form["detalle"] = $this->detalle;
              $this->titulo = "";  
              $this->nmgp_dados_form["titulo"] = $this->titulo;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['foreign_key'] as $sFKName => $sFKValue)
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_escenario_cxc']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_cliente_escenario_cxc']['embutida_parms'] = "var_factura_multiple*scin" . $this->nmgp_dados_form['fac_numero'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
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
       $this->SC_log_arr['keys']['fac_numero'] =  $this->fac_numero;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dados_select'];
           $this->SC_log_arr['fields']['fac_tipo_cartera']['0'] =  $nmgp_dados_select['fac_tipo_cartera'];
           $this->SC_log_arr['fields']['fac_tipo_comprobante']['0'] =  $nmgp_dados_select['fac_tipo_comprobante'];
           $this->SC_log_arr['fields']['fac_empresa']['0'] =  $nmgp_dados_select['fac_empresa'];
           $this->SC_log_arr['fields']['fac_fecha']['0'] =  $nmgp_dados_select['fac_fecha'];
           $this->SC_log_arr['fields']['fac_comentario']['0'] =  $nmgp_dados_select['fac_comentario'];
           $this->SC_log_arr['fields']['fac_subtotal_iva']['0'] =  $nmgp_dados_select['fac_subtotal_iva'];
           $this->SC_log_arr['fields']['fac_subtotal_cero']['0'] =  $nmgp_dados_select['fac_subtotal_cero'];
           $this->SC_log_arr['fields']['fac_subtotal_no_objeto']['0'] =  $nmgp_dados_select['fac_subtotal_no_objeto'];
           $this->SC_log_arr['fields']['fac_subtotal_excento']['0'] =  $nmgp_dados_select['fac_subtotal_excento'];
           $this->SC_log_arr['fields']['fac_subtotal']['0'] =  $nmgp_dados_select['fac_subtotal'];
           $this->SC_log_arr['fields']['fac_total_descuento']['0'] =  $nmgp_dados_select['fac_total_descuento'];
           $this->SC_log_arr['fields']['fac_valor_ice']['0'] =  $nmgp_dados_select['fac_valor_ice'];
           $this->SC_log_arr['fields']['fac_valor_iva']['0'] =  $nmgp_dados_select['fac_valor_iva'];
           $this->SC_log_arr['fields']['fac_valor_irbpnr']['0'] =  $nmgp_dados_select['fac_valor_irbpnr'];
           $this->SC_log_arr['fields']['fac_total']['0'] =  $nmgp_dados_select['fac_total'];
           $this->SC_log_arr['fields']['fac_estado']['0'] =  $nmgp_dados_select['fac_estado'];
           $this->SC_log_arr['fields']['fac_usuario']['0'] =  $nmgp_dados_select['fac_usuario'];
           $this->SC_log_arr['fields']['fac_dias_vigencia']['0'] =  $nmgp_dados_select['fac_dias_vigencia'];
           $this->SC_log_arr['fields']['clientes']['0'] =  $nmgp_dados_select['clientes'];
           $this->SC_log_arr['fields']['detalle']['0'] =  $nmgp_dados_select['detalle'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['fac_tipo_cartera']['1'] =  $this->fac_tipo_cartera;
       $this->SC_log_arr['fields']['fac_tipo_comprobante']['1'] =  $this->fac_tipo_comprobante;
       $this->SC_log_arr['fields']['fac_empresa']['1'] =  $this->fac_empresa;
       $this->SC_log_arr['fields']['fac_fecha']['1'] =  $this->fac_fecha;
       $this->SC_log_arr['fields']['fac_comentario']['1'] =  $this->fac_comentario;
       $this->SC_log_arr['fields']['fac_subtotal_iva']['1'] =  $this->fac_subtotal_iva;
       $this->SC_log_arr['fields']['fac_subtotal_cero']['1'] =  $this->fac_subtotal_cero;
       $this->SC_log_arr['fields']['fac_subtotal_no_objeto']['1'] =  $this->fac_subtotal_no_objeto;
       $this->SC_log_arr['fields']['fac_subtotal_excento']['1'] =  $this->fac_subtotal_excento;
       $this->SC_log_arr['fields']['fac_subtotal']['1'] =  $this->fac_subtotal;
       $this->SC_log_arr['fields']['fac_total_descuento']['1'] =  $this->fac_total_descuento;
       $this->SC_log_arr['fields']['fac_valor_ice']['1'] =  $this->fac_valor_ice;
       $this->SC_log_arr['fields']['fac_valor_iva']['1'] =  $this->fac_valor_iva;
       $this->SC_log_arr['fields']['fac_valor_irbpnr']['1'] =  $this->fac_valor_irbpnr;
       $this->SC_log_arr['fields']['fac_total']['1'] =  $this->fac_total;
       $this->SC_log_arr['fields']['fac_estado']['1'] =  $this->fac_estado;
       $this->SC_log_arr['fields']['fac_usuario']['1'] =  $this->fac_usuario;
       $this->SC_log_arr['fields']['fac_dias_vigencia']['1'] =  $this->fac_dias_vigencia;
       $this->SC_log_arr['fields']['clientes']['1'] =  $this->clientes;
       $this->SC_log_arr['fields']['detalle']['1'] =  $this->detalle;
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
       $Log_labels['fac_tipo_cartera'] =  "{lang_tipo_cartera}";
       $Log_labels['fac_tipo_comprobante'] =  "{lang_tipo_comprobante}";
       $Log_labels['fac_empresa'] =  "{lang_empresa}";
       $Log_labels['fac_fecha'] =  "{lang_fecha}";
       $Log_labels['fac_comentario'] =  "{lang_comentario}";
       $Log_labels['fac_subtotal_iva'] =  "{lang_subtotal_iva}";
       $Log_labels['fac_subtotal_cero'] =  "{lang_subtotal_cero}";
       $Log_labels['fac_subtotal_no_objeto'] =  "{lang_subtotal_no_objeto}";
       $Log_labels['fac_subtotal_excento'] =  "{lang_subtotal_exento}";
       $Log_labels['fac_subtotal'] =  "{lang_subtotal_sin_impuesto}";
       $Log_labels['fac_total_descuento'] =  "{lang_descuento}";
       $Log_labels['fac_valor_ice'] =  "{lang_ice}";
       $Log_labels['fac_valor_iva'] =  "{lang_iva}";
       $Log_labels['fac_valor_irbpnr'] =  "{lang_irbpnr}";
       $Log_labels['fac_total'] =  "{lang_othr_chrt_totl}";
       $Log_labels['fac_estado'] =  "{lang_estado}";
       $Log_labels['fac_usuario'] =  "{lang_usuario}";
       $Log_labels['fac_dias_vigencia'] =  "Dias de Vigencia";
       $Log_labels['clientes'] =  "Clientes";
       $Log_labels['detalle'] =  "{lang_detalle}";
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function fac_valor_entrega_onBlur()
{
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
$original_fac_total = $this->fac_total;

if($this->fac_total <>''){
	if($fac_valor_entrega >=$this->fac_total ){
		$fac_cambio =$fac_valor_entrega -$this->fac_total ;	
	}else{
		$this->nm_mens_alert[] = "El valor de pago es menor al total de la factura"; $this->nm_params_alert[] = array(); if ($this->NM_ajax_flag) { $this->sc_ajax_alert("El valor de pago es menor al total de la factura"); }}
}	
	

$modificado_fac_total = $this->fac_total;
$this->nm_formatar_campos('fac_total');
if ($original_fac_total !== $modificado_fac_total || isset($this->nmgp_cmp_readonly['fac_total']) || (isset($bFlagRead_fac_total) && $bFlagRead_fac_total))
{
    $this->ajax_return_values_fac_total(true);
}
$this->NM_ajax_info['event_field'] = 'fac';
form_escenario_cxc_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function verificar_guia($serie_guia)
{
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
if($serie_guia<>''){
	if(strlen($serie_guia)==17){
		$porciones = explode("-", $serie_guia);
		if (count($porciones)==3){
			if (strlen($porciones[0])==3 and strlen($porciones[1])==3 and strlen($porciones[2])==9 ){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}	
	}else{
		return false;
	}
}else{
	return true;
}

$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function fac_aplica_propina_onChange()
{
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
$original_fac_numero = $this->fac_numero;
$original_fac_subtotal = $this->fac_subtotal;
$original_fac_subtotal_iva = $this->fac_subtotal_iva;
$original_fac_subtotal_cero = $this->fac_subtotal_cero;
$original_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
$original_fac_subtotal_excento = $this->fac_subtotal_excento;
$original_fac_total_descuento = $this->fac_total_descuento;
$original_fac_valor_ice = $this->fac_valor_ice;
$original_fac_valor_iva = $this->fac_valor_iva;
$original_fac_valor_irbpnr = $this->fac_valor_irbpnr;
$original_fac_total = $this->fac_total;

if(isset($this->fac_numero )){
	$update_sql = "UPDATE del_factura 
					SET fac_aplica_propina='".$fac_aplica_propina ."'  
					WHERE
					fac_numero=".$this->fac_numero ;
	
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
                form_escenario_cxc_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

	$update_sql = "SELECT sp_del_actualiza_factura(".$this->fac_numero .");";
	
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
                form_escenario_cxc_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      

	$check_sql = "SELECT fac_subtotal,
						fac_subtotal_iva,
						fac_subtotal_cero,
						fac_subtotal_no_objeto,
						fac_subtotal_excento,
						fac_total_descuento,
						fac_valor_ice,
						fac_valor_iva,
						fac_valor_irbpnr,
						fac_propina,
						fac_total 
					FROM del_factura
					WHERE fac_numero=".$this->fac_numero .";";
	 
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
		$this->fac_subtotal =$this->rs[0][0];
		$this->fac_subtotal_iva = $this->rs[0][1];
		$this->fac_subtotal_cero = $this->rs[0][2];
		$this->fac_subtotal_no_objeto = $this->rs[0][3];
		$this->fac_subtotal_excento = $this->rs[0][4];
		$this->fac_total_descuento = $this->rs[0][5];
		$this->fac_valor_ice = $this->rs[0][6];
		$this->fac_valor_iva = $this->rs[0][7];
		$this->fac_valor_irbpnr = $this->rs[0][8];
		$fac_propina = $this->rs[0][9];
		$this->fac_total = $this->rs[0][10];
	}
}else{
	$fac_propina =0;
}




$modificado_fac_numero = $this->fac_numero;
$modificado_fac_subtotal = $this->fac_subtotal;
$modificado_fac_subtotal_iva = $this->fac_subtotal_iva;
$modificado_fac_subtotal_cero = $this->fac_subtotal_cero;
$modificado_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
$modificado_fac_subtotal_excento = $this->fac_subtotal_excento;
$modificado_fac_total_descuento = $this->fac_total_descuento;
$modificado_fac_valor_ice = $this->fac_valor_ice;
$modificado_fac_valor_iva = $this->fac_valor_iva;
$modificado_fac_valor_irbpnr = $this->fac_valor_irbpnr;
$modificado_fac_total = $this->fac_total;
$this->nm_formatar_campos('fac_numero', 'fac_subtotal', 'fac_subtotal_iva', 'fac_subtotal_cero', 'fac_subtotal_no_objeto', 'fac_subtotal_excento', 'fac_total_descuento', 'fac_valor_ice', 'fac_valor_iva', 'fac_valor_irbpnr', 'fac_total');
if ($original_fac_numero !== $modificado_fac_numero || isset($this->nmgp_cmp_readonly['fac_numero']) || (isset($bFlagRead_fac_numero) && $bFlagRead_fac_numero))
{
    $this->ajax_return_values_fac_numero(true);
}
if ($original_fac_subtotal !== $modificado_fac_subtotal || isset($this->nmgp_cmp_readonly['fac_subtotal']) || (isset($bFlagRead_fac_subtotal) && $bFlagRead_fac_subtotal))
{
    $this->ajax_return_values_fac_subtotal(true);
}
if ($original_fac_subtotal_iva !== $modificado_fac_subtotal_iva || isset($this->nmgp_cmp_readonly['fac_subtotal_iva']) || (isset($bFlagRead_fac_subtotal_iva) && $bFlagRead_fac_subtotal_iva))
{
    $this->ajax_return_values_fac_subtotal_iva(true);
}
if ($original_fac_subtotal_cero !== $modificado_fac_subtotal_cero || isset($this->nmgp_cmp_readonly['fac_subtotal_cero']) || (isset($bFlagRead_fac_subtotal_cero) && $bFlagRead_fac_subtotal_cero))
{
    $this->ajax_return_values_fac_subtotal_cero(true);
}
if ($original_fac_subtotal_no_objeto !== $modificado_fac_subtotal_no_objeto || isset($this->nmgp_cmp_readonly['fac_subtotal_no_objeto']) || (isset($bFlagRead_fac_subtotal_no_objeto) && $bFlagRead_fac_subtotal_no_objeto))
{
    $this->ajax_return_values_fac_subtotal_no_objeto(true);
}
if ($original_fac_subtotal_excento !== $modificado_fac_subtotal_excento || isset($this->nmgp_cmp_readonly['fac_subtotal_excento']) || (isset($bFlagRead_fac_subtotal_excento) && $bFlagRead_fac_subtotal_excento))
{
    $this->ajax_return_values_fac_subtotal_excento(true);
}
if ($original_fac_total_descuento !== $modificado_fac_total_descuento || isset($this->nmgp_cmp_readonly['fac_total_descuento']) || (isset($bFlagRead_fac_total_descuento) && $bFlagRead_fac_total_descuento))
{
    $this->ajax_return_values_fac_total_descuento(true);
}
if ($original_fac_valor_ice !== $modificado_fac_valor_ice || isset($this->nmgp_cmp_readonly['fac_valor_ice']) || (isset($bFlagRead_fac_valor_ice) && $bFlagRead_fac_valor_ice))
{
    $this->ajax_return_values_fac_valor_ice(true);
}
if ($original_fac_valor_iva !== $modificado_fac_valor_iva || isset($this->nmgp_cmp_readonly['fac_valor_iva']) || (isset($bFlagRead_fac_valor_iva) && $bFlagRead_fac_valor_iva))
{
    $this->ajax_return_values_fac_valor_iva(true);
}
if ($original_fac_valor_irbpnr !== $modificado_fac_valor_irbpnr || isset($this->nmgp_cmp_readonly['fac_valor_irbpnr']) || (isset($bFlagRead_fac_valor_irbpnr) && $bFlagRead_fac_valor_irbpnr))
{
    $this->ajax_return_values_fac_valor_irbpnr(true);
}
if ($original_fac_total !== $modificado_fac_total || isset($this->nmgp_cmp_readonly['fac_total']) || (isset($bFlagRead_fac_total) && $bFlagRead_fac_total))
{
    $this->ajax_return_values_fac_total(true);
}
$this->NM_ajax_info['event_field'] = 'fac';
form_escenario_cxc_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function fac_libretin_onBlur()
{
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  

$check_sql = "SELECT est_id,
					 pem_id,
					 lib_secuencial,
					 emp_ambiente_sri,
					 lib_tipo_libretin,
					 est_codigo,
					 pen_serie,
					 right('000000000'||lib_secuencial,9),
					 ta_nombre,
					 tl_descripcion
			 FROM v_del_libretin
			 WHERE lib_id=".$fac_libretin ;
 
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
    $fac_establecimiento  = $this->rs[0][0];
    $fac_punto_emision  = $this->rs[0][1];
	
	$fac_ambiente =$this->rs[0][3];
	$fac_tipo_libretin =$this->rs[0][4];
	$establecimiento  = $this->rs[0][5];
    $punto_emision  = $this->rs[0][6];
	
	$ambiente =$this->rs[0][8];
	$tipo_libretin =$this->rs[0][9];
	
}


$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'fac';
form_escenario_cxc_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function fac_libretin_onChange()
{
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  

$check_sql = "SELECT est_id,
					 pem_id,
					 lib_secuencial,
					 emp_ambiente_sri,
					 lib_tipo_libretin,
					 est_codigo,
					 pen_serie,
					 right('000000000'||lib_secuencial,9),
					 ta_nombre,
					 tl_descripcion
			 FROM v_del_libretin
			 WHERE lib_id=".$fac_libretin ;
 
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
    $fac_establecimiento  = $this->rs[0][0];
    $fac_punto_emision  = $this->rs[0][1];
	
	$fac_ambiente =$this->rs[0][3];
	$fac_tipo_libretin =$this->rs[0][4];
	$establecimiento  = $this->rs[0][5];
    $punto_emision  = $this->rs[0][6];
	
	$ambiente =$this->rs[0][8];
	$tipo_libretin =$this->rs[0][9];
	
}


$this->nm_formatar_campos();
$this->NM_ajax_info['event_field'] = 'fac';
form_escenario_cxc_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function obtenerIdAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function registrarAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
                         
	
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function registrarDetalleAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function registrarNuevoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
            foreach($w_detalles as $this->detalle){
                $w_res_detalle= $this->registrarDetalleAsiento($this->detalle,$infoConection);
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
                         
	
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function validarDatosAsiento($i_data){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
    
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function cambiaEstadoAsiento($i_data,$infoConection){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function cambiaEstadoFactura($i_data,$infoConection){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function generaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
                form_escenario_cxc_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function anulaAsientoOperacion($i_operacion,$i_empresa){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
                form_escenario_cxc_pack_ajax_response();
             }
             exit;
         }
         $rf->Close();
      
		}
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function anularFactura($i_factura,$i_empresa){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function anularNotaCredito($i_notacredito,$i_empresa){
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
}
function ws_coneccion_bdd($infoConection) {
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'on';
  
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
	
$_SESSION['scriptcase']['form_escenario_cxc']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_escenario_cxc_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
        $this->initFormPages();
        include_once("form_escenario_cxc_form0.php");
        include_once("form_escenario_cxc_form1.php");
        $this->hideFormPages();
 }

        function initFormPages() {
                $this->Ini->nm_page_names = array(
                        'Pag1' => '0',
                        'Pag2' => '1',
                );

                $this->Ini->nm_page_blocks = array(
                        'Pag1' => array(
                                0 => 'on',
                                1 => 'on',
                                2 => 'on',
                                3 => 'on',
                                4 => 'on',
                        ),
                        'Pag2' => array(
                                5 => 'on',
                        ),
                );

                $this->Ini->nm_block_page = array(
                        0 => 'Pag1',
                        1 => 'Pag1',
                        2 => 'Pag1',
                        3 => 'Pag1',
                        4 => 'Pag1',
                        5 => 'Pag2',
                );

                if (!empty($this->Ini->nm_hidden_blocos)) {
                        foreach ($this->Ini->nm_hidden_blocos as $blockNo => $blockStatus) {
                                if ('off' == $blockStatus) {
                                        $this->Ini->nm_page_blocks[ $this->Ini->nm_block_page[$blockNo] ][$blockNo] = 'off';
                                }
                        }
                }

                foreach ($this->Ini->nm_page_blocks as $pageName => $pageBlocks) {
                        $hasDisplayedBlock = false;

                        foreach ($pageBlocks as $blockNo => $blockStatus) {
                                if ('on' == $blockStatus) {
                                        $hasDisplayedBlock = true;
                                }
                        }

                        if (!$hasDisplayedBlock) {
                                $this->Ini->nm_hidden_pages[$pageName] = 'off';
                        }
                }
        } // initFormPages

        function hideFormPages() {
                if (!empty($this->Ini->nm_hidden_pages)) {
?>
<script type="text/javascript">
$(function() {
        scResetPagesDisplay();
<?php
                        foreach ($this->Ini->nm_hidden_pages as $pageName => $pageStatus) {
                                if ('off' == $pageStatus) {
?>
        scHidePage("<?php echo $this->Ini->nm_page_names[$pageName]; ?>");
<?php
                                }
                        }
?>
        scCheckNoPageSelected();
});
</script>
<?php
                }
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("fac_numero", "fac_tipo_comprobante", "fac_empresa", "fac_establecimiento", "fac_punto_emision", "fac_secuencial", "fac_cliente", "fac_ambiente", "fac_tipo_libretin", "fac_subtotal_iva", "fac_subtotal_cero", "fac_subtotal_no_objeto", "fac_subtotal_excento", "fac_subtotal", "fac_total_descuento", "fac_valor_ice", "fac_valor_iva", "fac_valor_irbpnr", "fac_propina", "fac_total", "fac_estado", "fac_estado_sri", "fac_error_sri", "fac_autorizacion", "fac_usuario"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['table_refresh'])
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['csrf_token'];
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

   function Form_lookup_fac_tipo_cartera()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'] = array(); 
    }

   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_total = $this->fac_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_total = $this->fac_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_tipo_cartera  ORDER BY dec_nombre";

   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_dias_vigencia = $old_value_fac_dias_vigencia;
   $this->fac_numero = $old_value_fac_numero;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_total = $old_value_fac_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_cartera'][] = $rs->fields[0];
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
   function Form_lookup_fac_tipo_comprobante()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'] = array(); 
    }

   $old_value_fac_fecha = $this->fac_fecha;
   $old_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $old_value_fac_numero = $this->fac_numero;
   $old_value_fac_subtotal = $this->fac_subtotal;
   $old_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $old_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $old_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $old_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $old_value_fac_total_descuento = $this->fac_total_descuento;
   $old_value_fac_valor_ice = $this->fac_valor_ice;
   $old_value_fac_valor_iva = $this->fac_valor_iva;
   $old_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $old_value_fac_total = $this->fac_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fac_fecha = $this->fac_fecha;
   $unformatted_value_fac_dias_vigencia = $this->fac_dias_vigencia;
   $unformatted_value_fac_numero = $this->fac_numero;
   $unformatted_value_fac_subtotal = $this->fac_subtotal;
   $unformatted_value_fac_subtotal_iva = $this->fac_subtotal_iva;
   $unformatted_value_fac_subtotal_cero = $this->fac_subtotal_cero;
   $unformatted_value_fac_subtotal_no_objeto = $this->fac_subtotal_no_objeto;
   $unformatted_value_fac_subtotal_excento = $this->fac_subtotal_excento;
   $unformatted_value_fac_total_descuento = $this->fac_total_descuento;
   $unformatted_value_fac_valor_ice = $this->fac_valor_ice;
   $unformatted_value_fac_valor_iva = $this->fac_valor_iva;
   $unformatted_value_fac_valor_irbpnr = $this->fac_valor_irbpnr;
   $unformatted_value_fac_total = $this->fac_total;

   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  WHERE tc_codigo in ('01','99') ORDER BY tc_codigo";

   $this->fac_fecha = $old_value_fac_fecha;
   $this->fac_dias_vigencia = $old_value_fac_dias_vigencia;
   $this->fac_numero = $old_value_fac_numero;
   $this->fac_subtotal = $old_value_fac_subtotal;
   $this->fac_subtotal_iva = $old_value_fac_subtotal_iva;
   $this->fac_subtotal_cero = $old_value_fac_subtotal_cero;
   $this->fac_subtotal_no_objeto = $old_value_fac_subtotal_no_objeto;
   $this->fac_subtotal_excento = $old_value_fac_subtotal_excento;
   $this->fac_total_descuento = $old_value_fac_total_descuento;
   $this->fac_valor_ice = $old_value_fac_valor_ice;
   $this->fac_valor_iva = $old_value_fac_valor_iva;
   $this->fac_valor_irbpnr = $old_value_fac_valor_irbpnr;
   $this->fac_total = $old_value_fac_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['Lookup_fac_tipo_comprobante'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_escenario_cxc_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "fac_numero", $arg_search, str_replace(",", ".", $data_search), "INT4", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_fac_tipo_comprobante($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "fac_tipo_comprobante", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_empresa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_subtotal_iva", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_subtotal_cero", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_subtotal_no_objeto", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_subtotal_excento", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_subtotal", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_total_descuento", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_valor_ice", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_valor_iva", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_valor_irbpnr", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_total", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_estado", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "fac_usuario", $arg_search, $data_search, "VARCHAR", false);
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_escenario_cxc = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['total'] = $qt_geral_reg_form_escenario_cxc;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_escenario_cxc_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_escenario_cxc_pack_ajax_response();
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
      $nm_numeric[] = "fac_numero";$nm_numeric[] = "fac_tipo_cartera";$nm_numeric[] = "fac_subtotal_iva";$nm_numeric[] = "fac_subtotal_cero";$nm_numeric[] = "fac_subtotal_no_objeto";$nm_numeric[] = "fac_subtotal_excento";$nm_numeric[] = "fac_subtotal";$nm_numeric[] = "fac_total_descuento";$nm_numeric[] = "fac_valor_ice";$nm_numeric[] = "fac_valor_iva";$nm_numeric[] = "fac_valor_irbpnr";$nm_numeric[] = "fac_total";$nm_numeric[] = "fac_dias_vigencia";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['decimal_db'] == ".")
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
      $Nm_datas["fac_fecha"] = "date";
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
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date']))
              {
                  $nm_aspas  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date'];
                  $nm_aspas1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['SC_sep_date1'];
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
   function SC_lookup_fac_tipo_comprobante($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT tc_nombre, tc_codigo FROM sri_tipo_comprobante WHERE (#lowerI##cmp_itc_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos) AND (tc_codigo in ('01','99'))" ; 
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
       $nmgp_saida_form = "form_escenario_cxc_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_escenario_cxc_fim.php";
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
       form_escenario_cxc_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['masterValue']);
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
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_escenario_cxc']['reg_start'] = "";
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_detalle_escenario_cxc']['total']);
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
               $tmp_parms .= $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc'][substr($val, 1, -1)];
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
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opcao'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['opc_ant'] = "";
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['retorno_edit'] = "";
   }
   $nm_target_form = (empty($nm_target)) ? "_self" : $nm_target;
   if (strtolower(substr($nm_apl_dest, -4)) != ".php" && (strtolower(substr($nm_apl_dest, 0, 7)) == "http://" || strtolower(substr($nm_apl_dest, 0, 8)) == "https://" || strtolower(substr($nm_apl_dest, 0, 3)) == "../"))
   {
       if ($this->NM_ajax_flag)
       {
           $this->NM_ajax_info['redir']['metodo'] = 'location';
           $this->NM_ajax_info['redir']['action'] = $nm_apl_dest;
           $this->NM_ajax_info['redir']['target'] = $nm_target_form;
           form_escenario_cxc_pack_ajax_response();
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
       form_escenario_cxc_pack_ajax_response();
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
    function getButtonIds($buttonName) {
        switch ($buttonName) {
            case "help":
                return array("sc_b_hlp_b");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-1", "sc_b_sai_t.sc-unique-btn-3", "sc_b_sai_b.sc-unique-btn-8", "sc_b_sai_b.sc-unique-btn-10", "sc_b_sai_t.sc-unique-btn-2", "sc_b_sai_b.sc-unique-btn-9");
                break;
            case "0":
                return array("sys_separator.sc-unique-btn-4", "sys_separator.sc-unique-btn-11");
                break;
            case "new":
                return array("sc_b_new_t.sc-unique-btn-5");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-6");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-7", "sc_b_upd_b.sc-unique-btn-12");
                break;
            case "anular":
                return array("sc_Anular_top.");
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_escenario_cxc']['ordem_ord'] == " desc") {
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
            case "fac_dias_vigencia":
                return true;
            case "fac_numero":
                return true;
            case "fac_subtotal":
                return true;
            case "fac_subtotal_iva":
                return true;
            case "fac_subtotal_cero":
                return true;
            case "fac_subtotal_no_objeto":
                return true;
            case "fac_subtotal_excento":
                return true;
            case "fac_total_descuento":
                return true;
            case "fac_valor_ice":
                return true;
            case "fac_valor_iva":
                return true;
            case "fac_valor_irbpnr":
                return true;
            case "fac_total":
                return true;
            default:
                return false;
        }
        return false;
    }

    function scGetDefaultFieldOrder($fieldName)
    {
        switch ($fieldName) {
            case "fac_fecha":
                return 'desc';
            case "fac_tipo_cartera":
                return 'desc';
            case "fac_dias_vigencia":
                return 'desc';
            case "fac_numero":
                return 'desc';
            case "fac_subtotal":
                return 'desc';
            case "fac_subtotal_iva":
                return 'desc';
            case "fac_subtotal_cero":
                return 'desc';
            case "fac_subtotal_no_objeto":
                return 'desc';
            case "fac_subtotal_excento":
                return 'desc';
            case "fac_total_descuento":
                return 'desc';
            case "fac_valor_ice":
                return 'desc';
            case "fac_valor_iva":
                return 'desc';
            case "fac_valor_irbpnr":
                return 'desc';
            case "fac_total":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
