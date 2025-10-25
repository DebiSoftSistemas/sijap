<?php
//
class form_del_producto_apl
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
   var $pro_codigo;
   var $pro_codigo_aux;
   var $pro_empresa;
   var $pro_descripcion;
   var $pro_iva;
   var $pro_por_iva;
   var $pro_por_iva_1;
   var $pro_ice;
   var $pro_por_ice;
   var $pro_por_ice_1;
   var $pro_irbpnr;
   var $pro_por_irbpnr;
   var $pro_por_irbpnr_1;
   var $pro_precio;
   var $pro_descuento;
   var $pro_estado;
   var $pro_estado_1;
   var $pro_familia_producto;
   var $pro_familia_producto_1;
   var $pro_grupo_compras;
   var $pro_grupo_compras_1;
   var $pro_grupo_ventas;
   var $pro_grupo_ventas_1;
   var $pro_categoria_producto;
   var $pro_categoria_producto_1;
   var $pro_cantidad_inventario;
   var $pro_costo_promedio;
   var $pro_total_inventario;
   var $pro_imagen;
   var $pro_imagen_scfile_name;
   var $pro_imagen_ul_name;
   var $pro_imagen_scfile_type;
   var $pro_imagen_ul_type;
   var $pro_imagen_limpa;
   var $pro_imagen_salva;
   var $out_pro_imagen;
   var $out1_pro_imagen;
   var $pro_base_ice;
   var $pro_base_irbpnr;
   var $pro_compra;
   var $pro_compra_1;
   var $pro_venta;
   var $pro_venta_1;
   var $pro_stock;
   var $pro_stock_1;
   var $pro_aplica_subsidio;
   var $pro_aplica_subsidio_1;
   var $pro_precio_sin_subsidio;
   var $pro_cta_ingreso;
   var $pro_cta_ingreso_1;
   var $pro_cta_cobrar;
   var $pro_cta_cobrar_1;
   var $pro_cta_puente;
   var $pro_cta_puente_1;
   var $pro_cta_cartera_vencida;
   var $pro_producto_debi;
   var $pro_producto_debi_1;
   var $pro_unidad;
   var $pro_unidad_1;
   var $base_iva;
   var $precio_con_impuesto;
   var $pro_valor_subsidio;
   var $tarifa_ice;
   var $tarifa_irbpnr;
   var $tarifa_iva;
   var $total_ice;
   var $total_irbpnr;
   var $total_iva;
   var $valor_ice;
   var $valor_irbpnr;
   var $valor_iva;
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
          if (isset($this->NM_ajax_info['param']['base_iva']))
          {
              $this->base_iva = $this->NM_ajax_info['param']['base_iva'];
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
          if (isset($this->NM_ajax_info['param']['nmgp_refresh_fields']))
          {
              $this->nmgp_refresh_fields = $this->NM_ajax_info['param']['nmgp_refresh_fields'];
          }
          if (isset($this->NM_ajax_info['param']['nmgp_url_saida']))
          {
              $this->nmgp_url_saida = $this->NM_ajax_info['param']['nmgp_url_saida'];
          }
          if (isset($this->NM_ajax_info['param']['precio_con_impuesto']))
          {
              $this->precio_con_impuesto = $this->NM_ajax_info['param']['precio_con_impuesto'];
          }
          if (isset($this->NM_ajax_info['param']['pro_aplica_subsidio']))
          {
              $this->pro_aplica_subsidio = $this->NM_ajax_info['param']['pro_aplica_subsidio'];
          }
          if (isset($this->NM_ajax_info['param']['pro_base_ice']))
          {
              $this->pro_base_ice = $this->NM_ajax_info['param']['pro_base_ice'];
          }
          if (isset($this->NM_ajax_info['param']['pro_base_irbpnr']))
          {
              $this->pro_base_irbpnr = $this->NM_ajax_info['param']['pro_base_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['pro_cantidad_inventario']))
          {
              $this->pro_cantidad_inventario = $this->NM_ajax_info['param']['pro_cantidad_inventario'];
          }
          if (isset($this->NM_ajax_info['param']['pro_categoria_producto']))
          {
              $this->pro_categoria_producto = $this->NM_ajax_info['param']['pro_categoria_producto'];
          }
          if (isset($this->NM_ajax_info['param']['pro_codigo']))
          {
              $this->pro_codigo = $this->NM_ajax_info['param']['pro_codigo'];
          }
          if (isset($this->NM_ajax_info['param']['pro_codigo_aux']))
          {
              $this->pro_codigo_aux = $this->NM_ajax_info['param']['pro_codigo_aux'];
          }
          if (isset($this->NM_ajax_info['param']['pro_compra']))
          {
              $this->pro_compra = $this->NM_ajax_info['param']['pro_compra'];
          }
          if (isset($this->NM_ajax_info['param']['pro_costo_promedio']))
          {
              $this->pro_costo_promedio = $this->NM_ajax_info['param']['pro_costo_promedio'];
          }
          if (isset($this->NM_ajax_info['param']['pro_cta_cartera_vencida']))
          {
              $this->pro_cta_cartera_vencida = $this->NM_ajax_info['param']['pro_cta_cartera_vencida'];
          }
          if (isset($this->NM_ajax_info['param']['pro_cta_cobrar']))
          {
              $this->pro_cta_cobrar = $this->NM_ajax_info['param']['pro_cta_cobrar'];
          }
          if (isset($this->NM_ajax_info['param']['pro_cta_ingreso']))
          {
              $this->pro_cta_ingreso = $this->NM_ajax_info['param']['pro_cta_ingreso'];
          }
          if (isset($this->NM_ajax_info['param']['pro_cta_puente']))
          {
              $this->pro_cta_puente = $this->NM_ajax_info['param']['pro_cta_puente'];
          }
          if (isset($this->NM_ajax_info['param']['pro_descripcion']))
          {
              $this->pro_descripcion = $this->NM_ajax_info['param']['pro_descripcion'];
          }
          if (isset($this->NM_ajax_info['param']['pro_empresa']))
          {
              $this->pro_empresa = $this->NM_ajax_info['param']['pro_empresa'];
          }
          if (isset($this->NM_ajax_info['param']['pro_estado']))
          {
              $this->pro_estado = $this->NM_ajax_info['param']['pro_estado'];
          }
          if (isset($this->NM_ajax_info['param']['pro_familia_producto']))
          {
              $this->pro_familia_producto = $this->NM_ajax_info['param']['pro_familia_producto'];
          }
          if (isset($this->NM_ajax_info['param']['pro_grupo_compras']))
          {
              $this->pro_grupo_compras = $this->NM_ajax_info['param']['pro_grupo_compras'];
          }
          if (isset($this->NM_ajax_info['param']['pro_grupo_ventas']))
          {
              $this->pro_grupo_ventas = $this->NM_ajax_info['param']['pro_grupo_ventas'];
          }
          if (isset($this->NM_ajax_info['param']['pro_ice']))
          {
              $this->pro_ice = $this->NM_ajax_info['param']['pro_ice'];
          }
          if (isset($this->NM_ajax_info['param']['pro_imagen']))
          {
              $this->pro_imagen = $this->NM_ajax_info['param']['pro_imagen'];
          }
          if (isset($this->NM_ajax_info['param']['pro_imagen_limpa']))
          {
              $this->pro_imagen_limpa = $this->NM_ajax_info['param']['pro_imagen_limpa'];
          }
          if (isset($this->NM_ajax_info['param']['pro_imagen_salva']))
          {
              $this->pro_imagen_salva = $this->NM_ajax_info['param']['pro_imagen_salva'];
          }
          if (isset($this->NM_ajax_info['param']['pro_imagen_ul_name']))
          {
              $this->pro_imagen_ul_name = $this->NM_ajax_info['param']['pro_imagen_ul_name'];
          }
          if (isset($this->NM_ajax_info['param']['pro_imagen_ul_type']))
          {
              $this->pro_imagen_ul_type = $this->NM_ajax_info['param']['pro_imagen_ul_type'];
          }
          if (isset($this->NM_ajax_info['param']['pro_irbpnr']))
          {
              $this->pro_irbpnr = $this->NM_ajax_info['param']['pro_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['pro_iva']))
          {
              $this->pro_iva = $this->NM_ajax_info['param']['pro_iva'];
          }
          if (isset($this->NM_ajax_info['param']['pro_por_ice']))
          {
              $this->pro_por_ice = $this->NM_ajax_info['param']['pro_por_ice'];
          }
          if (isset($this->NM_ajax_info['param']['pro_por_irbpnr']))
          {
              $this->pro_por_irbpnr = $this->NM_ajax_info['param']['pro_por_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['pro_por_iva']))
          {
              $this->pro_por_iva = $this->NM_ajax_info['param']['pro_por_iva'];
          }
          if (isset($this->NM_ajax_info['param']['pro_precio']))
          {
              $this->pro_precio = $this->NM_ajax_info['param']['pro_precio'];
          }
          if (isset($this->NM_ajax_info['param']['pro_precio_sin_subsidio']))
          {
              $this->pro_precio_sin_subsidio = $this->NM_ajax_info['param']['pro_precio_sin_subsidio'];
          }
          if (isset($this->NM_ajax_info['param']['pro_producto_debi']))
          {
              $this->pro_producto_debi = $this->NM_ajax_info['param']['pro_producto_debi'];
          }
          if (isset($this->NM_ajax_info['param']['pro_stock']))
          {
              $this->pro_stock = $this->NM_ajax_info['param']['pro_stock'];
          }
          if (isset($this->NM_ajax_info['param']['pro_total_inventario']))
          {
              $this->pro_total_inventario = $this->NM_ajax_info['param']['pro_total_inventario'];
          }
          if (isset($this->NM_ajax_info['param']['pro_unidad']))
          {
              $this->pro_unidad = $this->NM_ajax_info['param']['pro_unidad'];
          }
          if (isset($this->NM_ajax_info['param']['pro_valor_subsidio']))
          {
              $this->pro_valor_subsidio = $this->NM_ajax_info['param']['pro_valor_subsidio'];
          }
          if (isset($this->NM_ajax_info['param']['pro_venta']))
          {
              $this->pro_venta = $this->NM_ajax_info['param']['pro_venta'];
          }
          if (isset($this->NM_ajax_info['param']['script_case_init']))
          {
              $this->script_case_init = $this->NM_ajax_info['param']['script_case_init'];
          }
          if (isset($this->NM_ajax_info['param']['tarifa_ice']))
          {
              $this->tarifa_ice = $this->NM_ajax_info['param']['tarifa_ice'];
          }
          if (isset($this->NM_ajax_info['param']['tarifa_irbpnr']))
          {
              $this->tarifa_irbpnr = $this->NM_ajax_info['param']['tarifa_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['tarifa_iva']))
          {
              $this->tarifa_iva = $this->NM_ajax_info['param']['tarifa_iva'];
          }
          if (isset($this->NM_ajax_info['param']['total_ice']))
          {
              $this->total_ice = $this->NM_ajax_info['param']['total_ice'];
          }
          if (isset($this->NM_ajax_info['param']['total_irbpnr']))
          {
              $this->total_irbpnr = $this->NM_ajax_info['param']['total_irbpnr'];
          }
          if (isset($this->NM_ajax_info['param']['total_iva']))
          {
              $this->total_iva = $this->NM_ajax_info['param']['total_iva'];
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
      if (isset($this->Igtech_CodigoEmpDebi) && isset($this->NM_contr_var_session) && $this->NM_contr_var_session == "Yes") 
      {
          $_SESSION['Igtech_CodigoEmpDebi'] = $this->Igtech_CodigoEmpDebi;
      }
      if (isset($_POST["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_POST["Igtech_RucEmpresa"]) && isset($_POST["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_POST["igtech_rucempresa"];
      }
      if (isset($_POST["Igtech_CodigoEmpDebi"]) && isset($this->Igtech_CodigoEmpDebi)) 
      {
          $_SESSION['Igtech_CodigoEmpDebi'] = $this->Igtech_CodigoEmpDebi;
      }
      if (!isset($_POST["Igtech_CodigoEmpDebi"]) && isset($_POST["igtech_codigoempdebi"])) 
      {
          $_SESSION['Igtech_CodigoEmpDebi'] = $_POST["igtech_codigoempdebi"];
      }
      if (isset($_GET["Igtech_RucEmpresa"]) && isset($this->Igtech_RucEmpresa)) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
      }
      if (!isset($_GET["Igtech_RucEmpresa"]) && isset($_GET["igtech_rucempresa"])) 
      {
          $_SESSION['Igtech_RucEmpresa'] = $_GET["igtech_rucempresa"];
      }
      if (isset($_GET["Igtech_CodigoEmpDebi"]) && isset($this->Igtech_CodigoEmpDebi)) 
      {
          $_SESSION['Igtech_CodigoEmpDebi'] = $this->Igtech_CodigoEmpDebi;
      }
      if (!isset($_GET["Igtech_CodigoEmpDebi"]) && isset($_GET["igtech_codigoempdebi"])) 
      {
          $_SESSION['Igtech_CodigoEmpDebi'] = $_GET["igtech_codigoempdebi"];
      }
      if (isset($this->nmgp_opcao) && $this->nmgp_opcao == "reload_novo") {
          $_POST['nmgp_opcao'] = "novo";
          $this->nmgp_opcao    = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_producto']['opcao']   = "novo";
          $_SESSION['sc_session'][$script_case_init]['form_del_producto']['opc_ant'] = "inicio";
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_producto']['embutida_parms']))
      { 
          $this->nmgp_parms = $_SESSION['sc_session'][$script_case_init]['form_del_producto']['embutida_parms'];
          unset($_SESSION['sc_session'][$script_case_init]['form_del_producto']['embutida_parms']);
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
                 nm_limpa_str_form_del_producto($cadapar[1]);
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
          if (!isset($this->Igtech_CodigoEmpDebi) && isset($this->igtech_codigoempdebi)) 
          {
              $this->Igtech_CodigoEmpDebi = $this->igtech_codigoempdebi;
          }
          if (isset($this->Igtech_CodigoEmpDebi)) 
          {
              $_SESSION['Igtech_CodigoEmpDebi'] = $this->Igtech_CodigoEmpDebi;
          }
          if (isset($this->NM_where_filter_form))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_producto']['where_filter_form'] = $this->NM_where_filter_form;
              unset($_SESSION['sc_session'][$script_case_init]['form_del_producto']['total']);
          }
          if (isset($this->sc_redir_atualiz))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_producto']['sc_redir_atualiz'] = $this->sc_redir_atualiz;
          }
          if (isset($this->sc_redir_insert))
          {
              $_SESSION['sc_session'][$script_case_init]['form_del_producto']['sc_redir_insert'] = $this->sc_redir_insert;
          }
          if (!isset($this->Igtech_RucEmpresa) && isset($this->igtech_rucempresa)) 
          {
              $this->Igtech_RucEmpresa = $this->igtech_rucempresa;
          }
          if (isset($this->Igtech_RucEmpresa)) 
          {
              $_SESSION['Igtech_RucEmpresa'] = $this->Igtech_RucEmpresa;
          }
          if (!isset($this->Igtech_CodigoEmpDebi) && isset($this->igtech_codigoempdebi)) 
          {
              $this->Igtech_CodigoEmpDebi = $this->igtech_codigoempdebi;
          }
          if (isset($this->Igtech_CodigoEmpDebi)) 
          {
              $_SESSION['Igtech_CodigoEmpDebi'] = $this->Igtech_CodigoEmpDebi;
          }
      } 
      elseif (isset($script_case_init) && !empty($script_case_init) && isset($_SESSION['sc_session'][$script_case_init]['form_del_producto']['parms']))
      {
          if ((!isset($this->nmgp_opcao) || ($this->nmgp_opcao != "incluir" && $this->nmgp_opcao != "alterar" && $this->nmgp_opcao != "excluir" && $this->nmgp_opcao != "novo" && $this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")) && (!isset($this->NM_ajax_opcao) || $this->NM_ajax_opcao == ""))
          {
              $todox = str_replace("?#?@?@?", "?#?@ ?@?", $_SESSION['sc_session'][$script_case_init]['form_del_producto']['parms']);
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
          $_SESSION['sc_session'][$script_case_init]['form_del_producto']['nm_run_menu'] = 1;
      } 
      if (!$this->NM_ajax_flag && 'autocomp_' == substr($this->NM_ajax_opcao, 0, 9))
      {
          $this->NM_ajax_flag = true;
      }

      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      if (isset($this->nm_evt_ret_edit) && '' != $this->nm_evt_ret_edit)
      {
          $_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup']     = true;
          $_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup_cb']  = $this->nm_evt_ret_edit;
          $_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup_row'] = isset($this->nm_evt_ret_row) ? $this->nm_evt_ret_row : '';
      }
      if (isset($_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup']) && $_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup'])
      {
          $this->lig_edit_lookup     = true;
          $this->lig_edit_lookup_cb  = $_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup_cb'];
          $this->lig_edit_lookup_row = $_SESSION['sc_session'][$script_case_init]['form_del_producto']['lig_edit_lookup_row'];
      }
      if (!$this->Ini)
      { 
          $this->Ini = new form_del_producto_ini(); 
          $this->Ini->init();
          $this->nm_data = new nm_data("es");
          $this->app_is_initializing = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['initialize'];
      } 
      else 
      { 
         $this->nm_data = new nm_data("es");
      } 
      $_SESSION['sc_session'][$script_case_init]['form_del_producto']['upload_field_info'] = array();

      $_SESSION['sc_session'][$script_case_init]['form_del_producto']['upload_field_info']['pro_imagen'] = array(
          'app_dir'            => $this->Ini->path_aplicacao,
          'app_name'           => 'form_del_producto',
          'upload_dir'         => $this->Ini->root . $this->Ini->path_imag_temp . '/',
          'upload_url'         => $this->Ini->path_imag_temp . '/',
          'upload_type'        => 'single',
          'upload_allowed_type'  => '/\.(png|jpeg|jpg)$/i',
          'upload_max_size'  => null,
          'upload_file_height' => '200',
          'upload_file_width'  => '200',
          'upload_file_aspect' => 'S',
          'upload_file_type'   => 'I',
      );

      unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['masterValue']);
      $this->Change_Menu = false;
      $run_iframe = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe']) && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "R")) ? true : false;
      if (!$run_iframe && isset($_SESSION['scriptcase']['menu_atual']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_call'] && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_outra_jan']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_outra_jan']))
      {
          $this->sc_init_menu = "x";
          if (isset($_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_producto']))
          {
              $this->sc_init_menu = $_SESSION['scriptcase'][$_SESSION['scriptcase']['menu_atual']]['sc_init']['form_del_producto'];
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
          if ($this->Ini->sc_page == $this->sc_init_menu && !isset($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_producto']))
          {
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_producto']['link'] = $this->Ini->sc_protocolo . $this->Ini->server . $this->Ini->path_link . "" . SC_dir_app_name('form_del_producto') . "/";
               $_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu]['form_del_producto']['label'] = "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_producto";
               $this->Change_Menu = true;
          }
          elseif ($this->Ini->sc_page == $this->sc_init_menu)
          {
              $achou = false;
              foreach ($_SESSION['scriptcase']['menu_apls'][$_SESSION['scriptcase']['menu_atual']][$this->sc_init_menu] as $apl => $parms)
              {
                  if ($apl == "form_del_producto")
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
      $this->nm_new_label['pro_codigo'] = '' . $this->Ini->Nm_lang['lang_codigo'] . '';
      $this->nm_new_label['pro_codigo_aux'] = '' . $this->Ini->Nm_lang['lang_codigo_secundario'] . '';
      $this->nm_new_label['pro_empresa'] = '' . $this->Ini->Nm_lang['lang_empresa'] . '';
      $this->nm_new_label['pro_descripcion'] = '' . $this->Ini->Nm_lang['lang_descripcion'] . '';
      $this->nm_new_label['pro_iva'] = '' . $this->Ini->Nm_lang['lang_impuesto'] . '';
      $this->nm_new_label['pro_por_iva'] = '' . $this->Ini->Nm_lang['lang_tarifa_iva'] . '';
      $this->nm_new_label['pro_ice'] = '' . $this->Ini->Nm_lang['lang_impuesto'] . '';
      $this->nm_new_label['pro_por_ice'] = '' . $this->Ini->Nm_lang['lang_tarifa_ice'] . '';
      $this->nm_new_label['pro_irbpnr'] = '' . $this->Ini->Nm_lang['lang_impuesto'] . '';
      $this->nm_new_label['pro_por_irbpnr'] = '' . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . '';
      $this->nm_new_label['pro_precio'] = '' . $this->Ini->Nm_lang['lang_precio_unitario'] . '';
      $this->nm_new_label['pro_estado'] = '' . $this->Ini->Nm_lang['lang_estado'] . '';
      $this->nm_new_label['pro_familia_producto'] = '' . $this->Ini->Nm_lang['lang_familias_producto'] . '';
      $this->nm_new_label['pro_grupo_compras'] = '' . $this->Ini->Nm_lang['lang_grupo_compras'] . '';
      $this->nm_new_label['pro_grupo_ventas'] = '' . $this->Ini->Nm_lang['lang_grupo_ventas'] . '';
      $this->nm_new_label['pro_categoria_producto'] = '' . $this->Ini->Nm_lang['lang_categoria'] . '';
      $this->nm_new_label['pro_cantidad_inventario'] = '' . $this->Ini->Nm_lang['lang_cantidad_inicial'] . '';
      $this->nm_new_label['pro_costo_promedio'] = '' . $this->Ini->Nm_lang['lang_costo_promedio'] . '';
      $this->nm_new_label['pro_total_inventario'] = '' . $this->Ini->Nm_lang['lang_total_inventario'] . '';
      $this->nm_new_label['pro_imagen'] = '' . $this->Ini->Nm_lang['lang_btns_img'] . '';
      $this->nm_new_label['pro_base_ice'] = '' . $this->Ini->Nm_lang['lang_base_ice'] . '';
      $this->nm_new_label['pro_base_irbpnr'] = '' . $this->Ini->Nm_lang['lang_base_irbpnr'] . '';
      $this->nm_new_label['pro_compra'] = '' . $this->Ini->Nm_lang['lang_producto_compra'] . '';
      $this->nm_new_label['pro_venta'] = '' . $this->Ini->Nm_lang['lang_producto_venta'] . '';
      $this->nm_new_label['pro_stock'] = '' . $this->Ini->Nm_lang['lang_mueve_inventario'] . '';
      $this->nm_new_label['pro_aplica_subsidio'] = '' . $this->Ini->Nm_lang['lang_aplica_subsidio'] . '';
      $this->nm_new_label['pro_precio_sin_subsidio'] = '' . $this->Ini->Nm_lang['lang_precio_sin_subsidio'] . '';
      $this->nm_new_label['pro_cta_ingreso'] = '' . $this->Ini->Nm_lang['lang_cuenta_ingreso'] . '';
      $this->nm_new_label['pro_cta_cobrar'] = '' . $this->Ini->Nm_lang['lang_cuenta_x_cobrar'] . '';
      $this->nm_new_label['pro_cta_puente'] = '' . $this->Ini->Nm_lang['lang_cuenta_puente'] . '';
      $this->nm_new_label['pro_cta_cartera_vencida'] = '' . $this->Ini->Nm_lang['lang_cuenta_cartera_vencida'] . '';
      $this->nm_new_label['pro_producto_debi'] = '' . $this->Ini->Nm_lang['lang_producto_debi'] . '';
      $this->nm_new_label['pro_unidad'] = '' . $this->Ini->Nm_lang['lang_unidad'] . '';
      $this->nm_new_label['base_iva'] = '' . $this->Ini->Nm_lang['lang_base_iva'] . '';
      $this->nm_new_label['precio_con_impuesto'] = '' . $this->Ini->Nm_lang['lang_total'] . '';
      $this->nm_new_label['pro_valor_subsidio'] = '' . $this->Ini->Nm_lang['lang_pro_valor_subsidio'] . '';
      $this->nm_new_label['tarifa_ice'] = '' . $this->Ini->Nm_lang['lang_tarifa_ice'] . '';
      $this->nm_new_label['tarifa_irbpnr'] = '' . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . '';
      $this->nm_new_label['tarifa_iva'] = '' . $this->Ini->Nm_lang['lang_tarifa_iva'] . '';
      $this->nm_new_label['total_ice'] = '' . $this->Ini->Nm_lang['lang_total'] . ' ' . $this->Ini->Nm_lang['lang_ice'] . '';
      $this->nm_new_label['total_irbpnr'] = '' . $this->Ini->Nm_lang['lang_total'] . ' ' . $this->Ini->Nm_lang['lang_irbpnr'] . '';
      $this->nm_new_label['total_iva'] = '' . $this->Ini->Nm_lang['lang_total'] . ' ' . $this->Ini->Nm_lang['lang_iva'] . '';

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



      $_SESSION['scriptcase']['error_icon']['form_del_producto']  = "<img src=\"" . $this->Ini->path_icones . "/scriptcase__NM__icnMensagemAlerta.png\" style=\"border-width: 0px\" align=\"top\">&nbsp;";
      $_SESSION['scriptcase']['error_close']['form_del_producto'] = "<td>" . nmButtonOutput($this->arr_buttons, "berrm_clse", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "document.getElementById('id_error_display_fixed').style.display = 'none'; document.getElementById('id_error_message_fixed').innerHTML = ''; return false", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "") . "</td>";

      $this->Embutida_proc = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_proc']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_proc'] : $this->Embutida_proc;
      $this->Embutida_form = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_form']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_form'] : $this->Embutida_form;
      $this->Embutida_call = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_call']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_call'] : $this->Embutida_call;

      $this->form_3versions_single = false;

       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['table_refresh'] = false;

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit'])
      {
          $this->Grid_editavel = ('on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit']) ? true : false;
      }
      if (isset($this->Grid_editavel) && $this->Grid_editavel)
      {
          $this->Embutida_form  = true;
          $this->Embutida_ronly = true;
      }
      $this->Embutida_multi = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_multi']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_multi'])
      {
          $this->Grid_editavel  = false;
          $this->Embutida_form  = false;
          $this->Embutida_ronly = false;
          $this->Embutida_multi = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_tp_pag']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_tp_pag'])
      {
          $this->form_paginacao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_tp_pag'];
      }

      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_form']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_form'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_form'] = $this->Embutida_form;
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit'] = $this->Grid_editavel ? 'on' : 'off';
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit']) || '' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit'])
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_grid_edit'] = $this->Embutida_call;
      }

      $this->Ini->cor_grid_par = $this->Ini->cor_grid_impar;
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $this->nmgp_url_saida  = $nm_url_saida;
      $this->nmgp_form_show  = "on";
      $this->nmgp_form_empty = false;
      $this->Ini->sc_Include($this->Ini->path_lib_php . "/nm_valida.php", "C", "NM_Valida") ; 
      $teste_validade = new NM_Valida ;

      if (isset($this->NM_ajax_info['param']['pro_imagen_ul_name']) && '' != $this->NM_ajax_info['param']['pro_imagen_ul_name'])
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_field_ul_name'][$this->pro_imagen_ul_name]))
          {
              $this->NM_ajax_info['param']['pro_imagen_ul_name'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_field_ul_name'][$this->pro_imagen_ul_name];
          }
          $this->pro_imagen = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->NM_ajax_info['param']['pro_imagen_ul_name'];
          $this->pro_imagen_scfile_name = substr($this->NM_ajax_info['param']['pro_imagen_ul_name'], 12);
          $this->pro_imagen_scfile_type = $this->NM_ajax_info['param']['pro_imagen_ul_type'];
          $this->pro_imagen_ul_name = $this->NM_ajax_info['param']['pro_imagen_ul_name'];
          $this->pro_imagen_ul_type = $this->NM_ajax_info['param']['pro_imagen_ul_type'];
      }
      elseif (isset($this->pro_imagen_ul_name) && '' != $this->pro_imagen_ul_name)
      {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_field_ul_name'][$this->pro_imagen_ul_name]))
          {
              $this->pro_imagen_ul_name = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_field_ul_name'][$this->pro_imagen_ul_name];
          }
          $this->pro_imagen = $this->Ini->root . $this->Ini->path_imag_temp . '/' . $this->pro_imagen_ul_name;
          $this->pro_imagen_scfile_name = substr($this->pro_imagen_ul_name, 12);
          $this->pro_imagen_scfile_type = $this->pro_imagen_ul_type;
      }

      $this->loadFieldConfig();

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['first_time'])
      {
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['new']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['update']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['delete']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['first']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['back']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['forward']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['last']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['qsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['dynsearch']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['summary']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['navpage']);
          unset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['goto']);
      }
      $this->NM_cancel_return_new = (isset($this->NM_cancel_return_new) && $this->NM_cancel_return_new == 1) ? "1" : "";
      $this->NM_cancel_insert_new = ((isset($this->NM_cancel_insert_new) && $this->NM_cancel_insert_new == 1) || $this->NM_cancel_return_new == 1) ? "document.F5.action='" . $nm_url_saida . "';" : "";
      if (isset($this->NM_btn_insert) && '' != $this->NM_btn_insert && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['insert']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['insert']))
      {
          if ('N' == $this->NM_btn_insert)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert'] = 'on';
          }
      }
      if (isset($this->NM_btn_new) && 'N' == $this->NM_btn_new)
      {
          $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['new'] = 'off';
      }
      if (isset($this->NM_btn_update) && '' != $this->NM_btn_update && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['update']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['update']))
      {
          if ('N' == $this->NM_btn_update)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['update'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['update'] = 'on';
          }
      }
      if (isset($this->NM_btn_delete) && '' != $this->NM_btn_delete && (!isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['delete']) || '' == $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['delete']))
      {
          if ('N' == $this->NM_btn_delete)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['delete'] = 'off';
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['delete'] = 'on';
          }
      }
      if (isset($this->NM_btn_navega) && '' != $this->NM_btn_navega)
      {
          if ('N' == $this->NM_btn_navega)
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['first']     = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['back']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['forward']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['last']      = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['qsearch']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['dynsearch'] = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['summary']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['navpage']   = 'off';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['goto']      = 'off';
              $this->Nav_permite_ava = false;
              $this->Nav_permite_ret = false;
          }
          else
          {
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['first']     = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['back']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['forward']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['last']      = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['qsearch']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['dynsearch'] = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['summary']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['navpage']   = 'on';
              $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['goto']      = 'on';
          }
      }

      $this->nmgp_botoes['cancel'] = "on";
      $this->nmgp_botoes['exit'] = "on";
      $this->nmgp_botoes['qsearch'] = "on";
      $this->nmgp_botoes['new'] = "on";
      $this->nmgp_botoes['insert'] = "on";
      $this->nmgp_botoes['copy'] = "off";
      $this->nmgp_botoes['update'] = "on";
      $this->nmgp_botoes['delete'] = "off";
      $this->nmgp_botoes['first'] = "on";
      $this->nmgp_botoes['back'] = "on";
      $this->nmgp_botoes['forward'] = "on";
      $this->nmgp_botoes['last'] = "on";
      $this->nmgp_botoes['summary'] = "on";
      $this->nmgp_botoes['navpage'] = "on";
      $this->nmgp_botoes['goto'] = "on";
      $this->nmgp_botoes['qtline'] = "off";
      $this->nmgp_botoes['reload'] = "off";
      if (isset($this->NM_btn_cancel) && 'N' == $this->NM_btn_cancel)
      {
          $this->nmgp_botoes['cancel'] = "off";
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_orig'] = "";
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_pesq']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_pesq'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_pesq_filtro'] = "";
      }
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_pesq_filtro'];
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6)) {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['buttonStatus'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['iframe_filtro']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['iframe_filtro'] == "S")
      {
          $this->nmgp_botoes['exit'] = "off";
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['new']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['new'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['new'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['update']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['delete']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['delete'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['first']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['first'] != '')
      {
          $this->nmgp_botoes['first'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['first'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['back']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['back'] != '')
      {
          $this->nmgp_botoes['back'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['back'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['forward']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['forward'] != '')
      {
          $this->nmgp_botoes['forward'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['forward'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['last']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['last'] != '')
      {
          $this->nmgp_botoes['last'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['last'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['qsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['qsearch'] != '')
      {
          $this->nmgp_botoes['qsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['qsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['dynsearch']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['dynsearch'] != '')
      {
          $this->nmgp_botoes['dynsearch'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['dynsearch'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['summary']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['summary'] != '')
      {
          $this->nmgp_botoes['summary'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['summary'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['navpage']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['navpage'] != '')
      {
          $this->nmgp_botoes['navpage'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['navpage'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['goto']) && $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['goto'] != '')
      {
          $this->nmgp_botoes['goto'] = $_SESSION['scriptcase']['sc_apl_conf_lig']['form_del_producto']['goto'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_insert'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_update']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_update'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_delete']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_delete'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav'] != '')
      {
          $this->nmgp_botoes['first']   = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['back']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['forward'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav'];
          $this->nmgp_botoes['last']    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav'];
      }

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_producto'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['form_del_producto'];

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

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['insert']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['insert'] != '')
      {
          $this->nmgp_botoes['new']    = $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['insert'];
          $this->nmgp_botoes['insert'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['insert'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['update']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['update'] != '')
      {
          $this->nmgp_botoes['update'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['update'];
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['delete']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['delete'] != '')
      {
          $this->nmgp_botoes['delete'] = $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['delete'];
      }

      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['field_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['field_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['field_display'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_hidden[$NM_cada_field] = $NM_cada_opc;
              $this->NM_ajax_info['fieldDisplay'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['field_readonly']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['field_readonly']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['field_readonly'] as $NM_cada_field => $NM_cada_opc)
          {
              $this->nmgp_cmp_readonly[$NM_cada_field] = "on";
              $this->NM_ajax_info['readOnly'][$NM_cada_field] = $NM_cada_opc;
          }
      }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['exit']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['exit'] != '')
      {
          $_SESSION['scriptcase']['sc_url_saida'][$this->Ini->sc_page]       = $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['exit'];
          $_SESSION['scriptcase']['sc_force_url_saida'][$this->Ini->sc_page] = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_form']))
      {
          $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_form'];
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['pro_iva'] != "null"){$this->pro_iva = $this->nmgp_dados_form['pro_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['pro_ice'] != "null"){$this->pro_ice = $this->nmgp_dados_form['pro_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['pro_irbpnr'] != "null"){$this->pro_irbpnr = $this->nmgp_dados_form['pro_irbpnr'];} 
          if (!isset($this->pro_descuento)){$this->pro_descuento = $this->nmgp_dados_form['pro_descuento'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['base_iva'] != "null"){$this->base_iva = $this->nmgp_dados_form['base_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['precio_con_impuesto'] != "null"){$this->precio_con_impuesto = $this->nmgp_dados_form['precio_con_impuesto'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['pro_valor_subsidio'] != "null"){$this->pro_valor_subsidio = $this->nmgp_dados_form['pro_valor_subsidio'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tarifa_ice'] != "null"){$this->tarifa_ice = $this->nmgp_dados_form['tarifa_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tarifa_irbpnr'] != "null"){$this->tarifa_irbpnr = $this->nmgp_dados_form['tarifa_irbpnr'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['tarifa_iva'] != "null"){$this->tarifa_iva = $this->nmgp_dados_form['tarifa_iva'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['total_ice'] != "null"){$this->total_ice = $this->nmgp_dados_form['total_ice'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['total_irbpnr'] != "null"){$this->total_irbpnr = $this->nmgp_dados_form['total_irbpnr'];} 
          if ($this->nmgp_opcao == "incluir" && $this->nmgp_dados_form['total_iva'] != "null"){$this->total_iva = $this->nmgp_dados_form['total_iva'];} 
          if (!isset($this->valor_ice)){$this->valor_ice = $this->nmgp_dados_form['valor_ice'];} 
          if (!isset($this->valor_irbpnr)){$this->valor_irbpnr = $this->nmgp_dados_form['valor_irbpnr'];} 
          if (!isset($this->valor_iva)){$this->valor_iva = $this->nmgp_dados_form['valor_iva'];} 
      }
      $glo_senha_protect = (isset($_SESSION['scriptcase']['glo_senha_protect'])) ? $_SESSION['scriptcase']['glo_senha_protect'] : "S";
      $this->aba_iframe = false;
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']))
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("form_del_producto", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['iframe_menu'] && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
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

      if (is_file($this->Ini->path_aplicacao . 'form_del_producto_help.txt'))
      {
          $arr_link_webhelp = file($this->Ini->path_aplicacao . 'form_del_producto_help.txt');
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
          require_once($this->Ini->path_embutida . 'form_del_producto/form_del_producto_erro.class.php');
      }
      else
      { 
          require_once($this->Ini->path_aplicacao . "form_del_producto_erro.class.php"); 
      }
      $this->Erro      = new form_del_producto_erro();
      $this->Erro->Ini = $this->Ini;
      $this->proc_fast_search = false;
      if ($this->nmgp_opcao == "fast_search")  
      {
          $this->SC_fast_search($this->nmgp_fast_search, $this->nmgp_cond_fast_search, $this->nmgp_arg_fast_search);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao'] = "inicio";
          $this->nmgp_opcao = "inicio";
          $this->proc_fast_search = true;
      } 
      if ((!isset($nm_opc_lookup) || $nm_opc_lookup != "lookup") && (!isset($nm_opc_php) || $nm_opc_php != "formphp"))
      { 
         if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao']))
         { 
             if ($this->pro_codigo != "" || $this->pro_empresa != "")   
             { 
                 $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao'] = "igual" ;  
             }   
         }   
      } 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao']) && empty($this->nmgp_refresh_fields))
      {
          $this->nmgp_opcao = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao'];  
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao'] = "" ;  
          if ($this->nmgp_opcao == "edit_novo")  
          {
             $this->nmgp_opcao = "novo";
             $this->nm_flag_saida_novo = "S";
          }
      } 
      $this->nm_Start_new = false;
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['start']) && $_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['start'] == 'new')
      {
          $this->nmgp_opcao = "novo";
          $this->nm_Start_new = true;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao'] = "novo";
          unset($_SESSION['scriptcase']['sc_apl_conf']['form_del_producto']['start']);
      }
      if ($this->nmgp_opcao == "igual")  
      {
          $this->nmgp_opc_ant = $this->nmgp_opcao;
      } 
      else
      {
          $this->nmgp_opc_ant = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opc_ant'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opc_ant'] : "";
      } 
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "muda_form")  
      {
          $this->nmgp_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['botoes'];
          $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['inicio'];
          $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total'] != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['final'];
      }
      else
      {
      }
      $this->nm_flag_iframe = false;
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_form'])) 
      {
         $this->nmgp_dados_form = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_form'];
      }
      if ($this->nmgp_opcao == "edit_novo")  
      {
          $this->nmgp_opcao = "novo";
          $this->nm_flag_saida_novo = "S";
      }
//
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

            $out1_img_cache = $_SESSION['scriptcase']['form_del_producto']['glo_nm_path_imag_temp'] . $file_name;
            $orig_img = $_SESSION['scriptcase']['form_del_producto']['glo_nm_path_imag_temp']. '/sc_'.md5(date('YmdHis').basename($_POST['AjaxCheckImg'])).'.gif';
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
      if (isset($this->pro_codigo)) { $this->nm_limpa_alfa($this->pro_codigo); }
      if (isset($this->pro_codigo_aux)) { $this->nm_limpa_alfa($this->pro_codigo_aux); }
      if (isset($this->pro_empresa)) { $this->nm_limpa_alfa($this->pro_empresa); }
      if (isset($this->pro_descripcion)) { $this->nm_limpa_alfa($this->pro_descripcion); }
      if (isset($this->pro_iva)) { $this->nm_limpa_alfa($this->pro_iva); }
      if (isset($this->pro_por_iva)) { $this->nm_limpa_alfa($this->pro_por_iva); }
      if (isset($this->pro_ice)) { $this->nm_limpa_alfa($this->pro_ice); }
      if (isset($this->pro_por_ice)) { $this->nm_limpa_alfa($this->pro_por_ice); }
      if (isset($this->pro_irbpnr)) { $this->nm_limpa_alfa($this->pro_irbpnr); }
      if (isset($this->pro_por_irbpnr)) { $this->nm_limpa_alfa($this->pro_por_irbpnr); }
      if (isset($this->pro_precio)) { $this->nm_limpa_alfa($this->pro_precio); }
      if (isset($this->pro_estado)) { $this->nm_limpa_alfa($this->pro_estado); }
      if (isset($this->pro_familia_producto)) { $this->nm_limpa_alfa($this->pro_familia_producto); }
      if (isset($this->pro_grupo_compras)) { $this->nm_limpa_alfa($this->pro_grupo_compras); }
      if (isset($this->pro_grupo_ventas)) { $this->nm_limpa_alfa($this->pro_grupo_ventas); }
      if (isset($this->pro_categoria_producto)) { $this->nm_limpa_alfa($this->pro_categoria_producto); }
      if (isset($this->pro_cantidad_inventario)) { $this->nm_limpa_alfa($this->pro_cantidad_inventario); }
      if (isset($this->pro_costo_promedio)) { $this->nm_limpa_alfa($this->pro_costo_promedio); }
      if (isset($this->pro_total_inventario)) { $this->nm_limpa_alfa($this->pro_total_inventario); }
      if (isset($this->pro_base_ice)) { $this->nm_limpa_alfa($this->pro_base_ice); }
      if (isset($this->pro_base_irbpnr)) { $this->nm_limpa_alfa($this->pro_base_irbpnr); }
      if (isset($this->pro_compra)) { $this->nm_limpa_alfa($this->pro_compra); }
      if (isset($this->pro_venta)) { $this->nm_limpa_alfa($this->pro_venta); }
      if (isset($this->pro_stock)) { $this->nm_limpa_alfa($this->pro_stock); }
      if (isset($this->pro_aplica_subsidio)) { $this->nm_limpa_alfa($this->pro_aplica_subsidio); }
      if (isset($this->pro_precio_sin_subsidio)) { $this->nm_limpa_alfa($this->pro_precio_sin_subsidio); }
      if (isset($this->pro_cta_ingreso)) { $this->nm_limpa_alfa($this->pro_cta_ingreso); }
      if (isset($this->pro_cta_cobrar)) { $this->nm_limpa_alfa($this->pro_cta_cobrar); }
      if (isset($this->pro_cta_puente)) { $this->nm_limpa_alfa($this->pro_cta_puente); }
      if (isset($this->pro_cta_cartera_vencida)) { $this->nm_limpa_alfa($this->pro_cta_cartera_vencida); }
      if (isset($this->pro_producto_debi)) { $this->nm_limpa_alfa($this->pro_producto_debi); }
      if (isset($this->pro_unidad)) { $this->nm_limpa_alfa($this->pro_unidad); }
      if (isset($nm_opc_lookup) && $nm_opc_lookup == "lookup")
      { 
          if ($GLOBALS['F'] == "pro_iva")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->pro_iva = $array_vars[0];
              $pro_iva       = $this->pro_iva;
              $this->pro_iva       = $pro_iva;
              $this->lookup_pro_iva($conteudo);
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
          if ($GLOBALS['F'] == "pro_ice")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->pro_ice = $array_vars[0];
              $pro_ice       = $this->pro_ice;
              $this->pro_ice       = $pro_ice;
              $this->lookup_pro_ice($conteudo);
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
          if ($GLOBALS['F'] == "pro_irbpnr")
          { 
              $nm_parms   = substr($GLOBALS['P0'], 1, strlen($GLOBALS['P0']) - 2);
              $array_vars = explode(",", $nm_parms);
              $this->pro_irbpnr = $array_vars[0];
              $pro_irbpnr       = $this->pro_irbpnr;
              $this->pro_irbpnr       = $pro_irbpnr;
              $this->lookup_pro_irbpnr($conteudo);
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
      $Campos_Crit       = "";
      $Campos_erro       = "";
      $Campos_Falta      = array();
      $Campos_Erros      = array();
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          =  substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->Field_no_validate = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Field_no_validate'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Field_no_validate'] : array();
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opc_edit'] = true;  
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select'])) 
     {
        $this->nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select'];
     }
   }

   function loadFieldConfig()
   {
      $this->field_config = array();
      //-- pro_precio_sin_subsidio
      $this->field_config['pro_precio_sin_subsidio']               = array();
      $this->field_config['pro_precio_sin_subsidio']['symbol_grp'] = '';
      $this->field_config['pro_precio_sin_subsidio']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_precio_sin_subsidio']['symbol_dec'] = '.';
      $this->field_config['pro_precio_sin_subsidio']['symbol_neg'] = '-';
      $this->field_config['pro_precio_sin_subsidio']['format_neg'] = '2';
      //-- pro_valor_subsidio
      $this->field_config['pro_valor_subsidio']               = array();
      $this->field_config['pro_valor_subsidio']['symbol_grp'] = '';
      $this->field_config['pro_valor_subsidio']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_valor_subsidio']['symbol_dec'] = '.';
      $this->field_config['pro_valor_subsidio']['symbol_neg'] = '-';
      $this->field_config['pro_valor_subsidio']['format_neg'] = '2';
      //-- pro_precio
      $this->field_config['pro_precio']               = array();
      $this->field_config['pro_precio']['symbol_grp'] = '';
      $this->field_config['pro_precio']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_precio']['symbol_dec'] = '.';
      $this->field_config['pro_precio']['symbol_neg'] = '-';
      $this->field_config['pro_precio']['format_neg'] = '2';
      //-- tarifa_ice
      $this->field_config['tarifa_ice']               = array();
      $this->field_config['tarifa_ice']['symbol_grp'] = '';
      $this->field_config['tarifa_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['tarifa_ice']['symbol_dec'] = '.';
      $this->field_config['tarifa_ice']['symbol_neg'] = '-';
      $this->field_config['tarifa_ice']['format_neg'] = '2';
      //-- pro_base_ice
      $this->field_config['pro_base_ice']               = array();
      $this->field_config['pro_base_ice']['symbol_grp'] = '';
      $this->field_config['pro_base_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_base_ice']['symbol_dec'] = '.';
      $this->field_config['pro_base_ice']['symbol_neg'] = '-';
      $this->field_config['pro_base_ice']['format_neg'] = '2';
      //-- total_ice
      $this->field_config['total_ice']               = array();
      $this->field_config['total_ice']['symbol_grp'] = '';
      $this->field_config['total_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['total_ice']['symbol_dec'] = '.';
      $this->field_config['total_ice']['symbol_neg'] = '-';
      $this->field_config['total_ice']['format_neg'] = '2';
      //-- tarifa_iva
      $this->field_config['tarifa_iva']               = array();
      $this->field_config['tarifa_iva']['symbol_grp'] = '';
      $this->field_config['tarifa_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['tarifa_iva']['symbol_dec'] = '.';
      $this->field_config['tarifa_iva']['symbol_neg'] = '-';
      $this->field_config['tarifa_iva']['format_neg'] = '2';
      //-- base_iva
      $this->field_config['base_iva']               = array();
      $this->field_config['base_iva']['symbol_grp'] = '';
      $this->field_config['base_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['base_iva']['symbol_dec'] = '.';
      $this->field_config['base_iva']['symbol_neg'] = '-';
      $this->field_config['base_iva']['format_neg'] = '2';
      //-- total_iva
      $this->field_config['total_iva']               = array();
      $this->field_config['total_iva']['symbol_grp'] = '';
      $this->field_config['total_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['total_iva']['symbol_dec'] = '.';
      $this->field_config['total_iva']['symbol_neg'] = '-';
      $this->field_config['total_iva']['format_neg'] = '2';
      //-- tarifa_irbpnr
      $this->field_config['tarifa_irbpnr']               = array();
      $this->field_config['tarifa_irbpnr']['symbol_grp'] = '';
      $this->field_config['tarifa_irbpnr']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['tarifa_irbpnr']['symbol_dec'] = '.';
      $this->field_config['tarifa_irbpnr']['symbol_neg'] = '-';
      $this->field_config['tarifa_irbpnr']['format_neg'] = '2';
      //-- pro_base_irbpnr
      $this->field_config['pro_base_irbpnr']               = array();
      $this->field_config['pro_base_irbpnr']['symbol_grp'] = '';
      $this->field_config['pro_base_irbpnr']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_base_irbpnr']['symbol_dec'] = '.';
      $this->field_config['pro_base_irbpnr']['symbol_neg'] = '-';
      $this->field_config['pro_base_irbpnr']['format_neg'] = '2';
      //-- total_irbpnr
      $this->field_config['total_irbpnr']               = array();
      $this->field_config['total_irbpnr']['symbol_grp'] = '';
      $this->field_config['total_irbpnr']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['total_irbpnr']['symbol_dec'] = '.';
      $this->field_config['total_irbpnr']['symbol_neg'] = '-';
      $this->field_config['total_irbpnr']['format_neg'] = '2';
      //-- precio_con_impuesto
      $this->field_config['precio_con_impuesto']               = array();
      $this->field_config['precio_con_impuesto']['symbol_grp'] = '';
      $this->field_config['precio_con_impuesto']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['precio_con_impuesto']['symbol_dec'] = '.';
      $this->field_config['precio_con_impuesto']['symbol_neg'] = '-';
      $this->field_config['precio_con_impuesto']['format_neg'] = '2';
      //-- pro_cta_cartera_vencida
      $this->field_config['pro_cta_cartera_vencida']               = array();
      $this->field_config['pro_cta_cartera_vencida']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['pro_cta_cartera_vencida']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_cta_cartera_vencida']['symbol_dec'] = '';
      $this->field_config['pro_cta_cartera_vencida']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['pro_cta_cartera_vencida']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- pro_cantidad_inventario
      $this->field_config['pro_cantidad_inventario']               = array();
      $this->field_config['pro_cantidad_inventario']['symbol_grp'] = '';
      $this->field_config['pro_cantidad_inventario']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_cantidad_inventario']['symbol_dec'] = '.';
      $this->field_config['pro_cantidad_inventario']['symbol_neg'] = '-';
      $this->field_config['pro_cantidad_inventario']['format_neg'] = '2';
      //-- pro_costo_promedio
      $this->field_config['pro_costo_promedio']               = array();
      $this->field_config['pro_costo_promedio']['symbol_grp'] = '';
      $this->field_config['pro_costo_promedio']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_costo_promedio']['symbol_dec'] = '.';
      $this->field_config['pro_costo_promedio']['symbol_neg'] = '-';
      $this->field_config['pro_costo_promedio']['format_neg'] = '2';
      //-- pro_total_inventario
      $this->field_config['pro_total_inventario']               = array();
      $this->field_config['pro_total_inventario']['symbol_grp'] = '';
      $this->field_config['pro_total_inventario']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_total_inventario']['symbol_dec'] = '.';
      $this->field_config['pro_total_inventario']['symbol_neg'] = '-';
      $this->field_config['pro_total_inventario']['format_neg'] = '2';
      //-- pro_descuento
      $this->field_config['pro_descuento']               = array();
      $this->field_config['pro_descuento']['symbol_grp'] = $_SESSION['scriptcase']['reg_conf']['grup_num'];
      $this->field_config['pro_descuento']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['pro_descuento']['symbol_dec'] = $_SESSION['scriptcase']['reg_conf']['dec_num'];
      $this->field_config['pro_descuento']['symbol_neg'] = $_SESSION['scriptcase']['reg_conf']['simb_neg'];
      $this->field_config['pro_descuento']['format_neg'] = $_SESSION['scriptcase']['reg_conf']['neg_num'];
      //-- valor_ice
      $this->field_config['valor_ice']               = array();
      $this->field_config['valor_ice']['symbol_grp'] = '';
      $this->field_config['valor_ice']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['valor_ice']['symbol_dec'] = '.';
      $this->field_config['valor_ice']['symbol_neg'] = '-';
      $this->field_config['valor_ice']['format_neg'] = '2';
      //-- valor_irbpnr
      $this->field_config['valor_irbpnr']               = array();
      $this->field_config['valor_irbpnr']['symbol_grp'] = '';
      $this->field_config['valor_irbpnr']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['valor_irbpnr']['symbol_dec'] = '.';
      $this->field_config['valor_irbpnr']['symbol_neg'] = '-';
      $this->field_config['valor_irbpnr']['format_neg'] = '2';
      //-- valor_iva
      $this->field_config['valor_iva']               = array();
      $this->field_config['valor_iva']['symbol_grp'] = '';
      $this->field_config['valor_iva']['symbol_fmt'] = $_SESSION['scriptcase']['reg_conf']['num_group_digit'];
      $this->field_config['valor_iva']['symbol_dec'] = '.';
      $this->field_config['valor_iva']['symbol_neg'] = '-';
      $this->field_config['valor_iva']['format_neg'] = '2';
   }

   function controle()
   {
        global $nm_url_saida, $teste_validade, 
               $glo_senha_protect, $nm_apl_dependente, $nm_form_submit, $sc_check_excl, $nm_opc_form_php, $nm_call_php, $nm_opc_lookup;


      $this->ini_controle();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Gera_log_access'])
      {
          $this->NM_gera_log_insert("Scriptcase", "access");
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Gera_log_access'] = false;
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
          if ('validate_pro_imagen' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_imagen');
          }
          if ('validate_pro_empresa' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_empresa');
          }
          if ('validate_pro_codigo' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_codigo');
          }
          if ('validate_pro_codigo_aux' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_codigo_aux');
          }
          if ('validate_pro_descripcion' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_descripcion');
          }
          if ('validate_pro_categoria_producto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_categoria_producto');
          }
          if ('validate_pro_familia_producto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_familia_producto');
          }
          if ('validate_pro_grupo_compras' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_grupo_compras');
          }
          if ('validate_pro_grupo_ventas' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_grupo_ventas');
          }
          if ('validate_pro_estado' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_estado');
          }
          if ('validate_pro_aplica_subsidio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_aplica_subsidio');
          }
          if ('validate_pro_precio_sin_subsidio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_precio_sin_subsidio');
          }
          if ('validate_pro_valor_subsidio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_valor_subsidio');
          }
          if ('validate_pro_precio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_precio');
          }
          if ('validate_pro_por_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_por_ice');
          }
          if ('validate_tarifa_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tarifa_ice');
          }
          if ('validate_pro_base_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_base_ice');
          }
          if ('validate_total_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'total_ice');
          }
          if ('validate_pro_por_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_por_iva');
          }
          if ('validate_tarifa_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tarifa_iva');
          }
          if ('validate_base_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'base_iva');
          }
          if ('validate_total_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'total_iva');
          }
          if ('validate_pro_por_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_por_irbpnr');
          }
          if ('validate_tarifa_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'tarifa_irbpnr');
          }
          if ('validate_pro_base_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_base_irbpnr');
          }
          if ('validate_total_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'total_irbpnr');
          }
          if ('validate_pro_iva' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_iva');
          }
          if ('validate_precio_con_impuesto' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'precio_con_impuesto');
          }
          if ('validate_pro_ice' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_ice');
          }
          if ('validate_pro_irbpnr' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_irbpnr');
          }
          if ('validate_pro_compra' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_compra');
          }
          if ('validate_pro_venta' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_venta');
          }
          if ('validate_pro_stock' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_stock');
          }
          if ('validate_pro_unidad' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_unidad');
          }
          if ('validate_pro_producto_debi' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_producto_debi');
          }
          if ('validate_pro_cta_cobrar' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_cta_cobrar');
          }
          if ('validate_pro_cta_puente' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_cta_puente');
          }
          if ('validate_pro_cta_ingreso' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_cta_ingreso');
          }
          if ('validate_pro_cta_cartera_vencida' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_cta_cartera_vencida');
          }
          if ('validate_pro_cantidad_inventario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_cantidad_inventario');
          }
          if ('validate_pro_costo_promedio' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_costo_promedio');
          }
          if ('validate_pro_total_inventario' == $this->NM_ajax_opcao)
          {
              $this->Valida_campos($Campos_Crit, $Campos_Falta, $Campos_Erros, 'pro_total_inventario');
          }
          form_del_producto_pack_ajax_response();
          exit;
      }
      if ($this->NM_ajax_flag && 'event_' == substr($this->NM_ajax_opcao, 0, 6))
      {
          $this->nm_tira_formatacao();
          if ('event_pro_precio_sin_subsidio_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_precio_sin_subsidio_onChange();
          }
          if ('event_pro_aplica_subsidio_onclick' == $this->NM_ajax_opcao)
          {
              $this->pro_aplica_subsidio_onClick();
          }
          if ('event_pro_precio_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_precio_onBlur();
          }
          if ('event_pro_por_iva_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_por_iva_onBlur();
          }
          if ('event_pro_cantidad_inventario_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_cantidad_inventario_onChange();
          }
          if ('event_pro_por_ice_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_por_ice_onBlur();
          }
          if ('event_pro_por_iva_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_por_iva_onChange();
          }
          if ('event_pro_por_ice_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_por_ice_onChange();
          }
          if ('event_pro_por_irbpnr_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_por_irbpnr_onChange();
          }
          if ('event_pro_base_ice_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_base_ice_onBlur();
          }
          if ('event_pro_por_irbpnr_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_por_irbpnr_onBlur();
          }
          if ('event_pro_base_irbpnr_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_base_irbpnr_onBlur();
          }
          if ('event_pro_costo_promedio_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_costo_promedio_onChange();
          }
          if ('event_pro_familia_producto_onblur' == $this->NM_ajax_opcao)
          {
              $this->pro_familia_producto_onBlur();
          }
          if ('event_pro_familia_producto_onchange' == $this->NM_ajax_opcao)
          {
              $this->pro_familia_producto_onChange();
          }
          form_del_producto_pack_ajax_response();
          exit;
      }
      if (isset($this->sc_inline_call) && 'Y' == $this->sc_inline_call)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['inline_form_seq'] = $this->sc_seq_row;
          $this->nm_tira_formatacao();
      }
      if ($this->nmgp_opcao == "recarga" || $this->nmgp_opcao == "recarga_mobile" || $this->nmgp_opcao == "muda_form") 
      {
          if (is_array($this->pro_compra))
          {
              $x = 0; 
              $this->pro_compra_1 = $this->pro_compra;
              $this->pro_compra = ""; 
              if ($this->pro_compra_1 != "") 
              { 
                  foreach ($this->pro_compra_1 as $dados_pro_compra_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->pro_compra .= ";";
                      } 
                      $this->pro_compra .= $dados_pro_compra_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->pro_venta))
          {
              $x = 0; 
              $this->pro_venta_1 = $this->pro_venta;
              $this->pro_venta = ""; 
              if ($this->pro_venta_1 != "") 
              { 
                  foreach ($this->pro_venta_1 as $dados_pro_venta_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->pro_venta .= ";";
                      } 
                      $this->pro_venta .= $dados_pro_venta_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->pro_stock))
          {
              $x = 0; 
              $this->pro_stock_1 = $this->pro_stock;
              $this->pro_stock = ""; 
              if ($this->pro_stock_1 != "") 
              { 
                  foreach ($this->pro_stock_1 as $dados_pro_stock_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->pro_stock .= ";";
                      } 
                      $this->pro_stock .= $dados_pro_stock_1;
                      $x++ ; 
                  } 
              } 
          } 
          if (is_array($this->pro_aplica_subsidio))
          {
              $x = 0; 
              $this->pro_aplica_subsidio_1 = $this->pro_aplica_subsidio;
              $this->pro_aplica_subsidio = ""; 
              if ($this->pro_aplica_subsidio_1 != "") 
              { 
                  foreach ($this->pro_aplica_subsidio_1 as $dados_pro_aplica_subsidio_1 ) 
                  { 
                      if ($x != 0)
                      { 
                          $this->pro_aplica_subsidio .= ";";
                      } 
                      $this->pro_aplica_subsidio .= $dados_pro_aplica_subsidio_1;
                      $x++ ; 
                  } 
              } 
          } 
          $this->upload_img_doc($Campos_Crit, $Campos_Falta, $Campos_Erros) ; 
          $this->nm_tira_formatacao();
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_valor_subsidio']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->pro_valor_subsidio = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_valor_subsidio'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['tarifa_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tarifa_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['tarifa_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['total_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->total_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['total_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['tarifa_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tarifa_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['tarifa_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['base_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->base_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['base_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['total_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->total_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['total_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['tarifa_irbpnr']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->tarifa_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['tarifa_irbpnr'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['total_irbpnr']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->total_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['total_irbpnr'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_iva']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->pro_iva = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_iva'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['precio_con_impuesto']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->precio_con_impuesto = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['precio_con_impuesto'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_ice']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->pro_ice = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_ice'];
          } 
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_irbpnr']) && !isset($this->nmgp_refresh_fields))
          { 
              $this->pro_irbpnr = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']['pro_irbpnr'];
          } 
          $nm_sc_sv_opcao = $this->nmgp_opcao; 
          $this->nmgp_opcao = "nada"; 
          $this->nm_acessa_banco();
          if ($this->NM_ajax_flag)
          {
              $this->ajax_return_values();
              form_del_producto_pack_ajax_response();
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
          $_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
          if ($Campos_Crit != "") 
          {
              $Campos_Crit = $this->Ini->Nm_lang['lang_errm_flds'] . ' ' . $Campos_Crit ; 
          }
          if ($Campos_Crit != "" || !empty($Campos_Falta) || $this->Campos_Mens_erro != "")
          {
              if ($this->NM_ajax_flag)
              {
                  form_del_producto_pack_ajax_response();
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['recarga'] = $this->nmgp_opcao;
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_redir_insert']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_redir_insert'] == "ok")
          {
              if ($this->sc_evento == "insert" || ($this->nmgp_opc_ant == "novo" && $this->nmgp_opcao == "novo" && $this->sc_evento == "novo"))
              {
                  $this->NM_close_db(); 
                  $this->nmgp_redireciona(2); 
              }
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_redir_atualiz']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_redir_atualiz'] == "ok")
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
          form_del_producto_pack_ajax_response();
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
          form_del_producto_pack_ajax_response();
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
          $Zip_name = "sc_prt_" . date("YmdHis") . "_" . rand(0, 1000) . "form_del_producto.zip";
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto'][$path_doc_md5][0] = $Arq_htm;
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto'][$path_doc_md5][1] = $Zip_name;
?>
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_producto") ?></TITLE>
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
<form name="Fdown" method="get" action="form_del_producto_download.php" target="_self" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo $this->form_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="form_del_producto"> 
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
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['SC_sep_date']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['SC_sep_date']))
       {
           $delim  = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['SC_sep_date'];
           $delim1 = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['SC_sep_date1'];
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
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, `action`, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_producto', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       elseif (in_array(strtolower($_SESSION['scriptcase']['glo_tpbanco']), $this->Ini->nm_bases_sqlite))
       { 
           $comando = "INSERT INTO sis_log (id, inserted_date, username, application, creator, ip_user, action, description) VALUES (NULL, $dt, " . $this->Db->qstr($usr) . ", 'form_del_producto', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       else
       { 
           $comando = "INSERT INTO sis_log (inserted_date, username, application, creator, ip_user, action, description) VALUES ($dt, " . $this->Db->qstr($usr) . ", 'form_del_producto', '$orig', '" . $_SERVER['REMOTE_ADDR'] . "', '$evento', " . $this->Db->qstr($texto) . ")"; 
       } 
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando; 
       $rlog = $this->Db->Execute($comando); 
       if ($rlog === false)  
       { 
           $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_inst'], $this->Db->ErrorMsg()); 
           if ($this->NM_ajax_flag)
           {
               form_del_producto_pack_ajax_response();
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
   function lookup_pro_iva(&$conteudo)
   {
      global  $pro_iva;
      $guarda_formatado = $this->formatado;
      $this->nm_tira_formatacao();
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      $nm_comando = "SELECT imp_descripcion 
FROM sri_impuesto 
WHERE imp_codigo = '$this->pro_iva' 
ORDER BY imp_descripcion"; 
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
   function lookup_pro_ice(&$conteudo)
   {
      global  $pro_ice;
      $guarda_formatado = $this->formatado;
      $this->nm_tira_formatacao();
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      $nm_comando = "SELECT imp_descripcion 
FROM sri_impuesto 
WHERE imp_codigo = '$this->pro_ice' 
ORDER BY imp_descripcion"; 
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
   function lookup_pro_irbpnr(&$conteudo)
   {
      global  $pro_irbpnr;
      $guarda_formatado = $this->formatado;
      $this->nm_tira_formatacao();
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      $nm_comando = "SELECT imp_descripcion 
FROM sri_impuesto 
WHERE imp_codigo = '$this->pro_irbpnr' 
ORDER BY imp_descripcion"; 
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
           case 'pro_imagen':
               return "" . $this->Ini->Nm_lang['lang_btns_img'] . "";
               break;
           case 'pro_empresa':
               return "" . $this->Ini->Nm_lang['lang_empresa'] . "";
               break;
           case 'pro_codigo':
               return "" . $this->Ini->Nm_lang['lang_codigo'] . "";
               break;
           case 'pro_codigo_aux':
               return "" . $this->Ini->Nm_lang['lang_codigo_secundario'] . "";
               break;
           case 'pro_descripcion':
               return "" . $this->Ini->Nm_lang['lang_descripcion'] . "";
               break;
           case 'pro_categoria_producto':
               return "" . $this->Ini->Nm_lang['lang_categoria'] . "";
               break;
           case 'pro_familia_producto':
               return "" . $this->Ini->Nm_lang['lang_familias_producto'] . "";
               break;
           case 'pro_grupo_compras':
               return "" . $this->Ini->Nm_lang['lang_grupo_compras'] . "";
               break;
           case 'pro_grupo_ventas':
               return "" . $this->Ini->Nm_lang['lang_grupo_ventas'] . "";
               break;
           case 'pro_estado':
               return "" . $this->Ini->Nm_lang['lang_estado'] . "";
               break;
           case 'pro_aplica_subsidio':
               return "" . $this->Ini->Nm_lang['lang_aplica_subsidio'] . "";
               break;
           case 'pro_precio_sin_subsidio':
               return "" . $this->Ini->Nm_lang['lang_precio_sin_subsidio'] . "";
               break;
           case 'pro_valor_subsidio':
               return "" . $this->Ini->Nm_lang['lang_pro_valor_subsidio'] . "";
               break;
           case 'pro_precio':
               return "" . $this->Ini->Nm_lang['lang_precio_unitario'] . "";
               break;
           case 'pro_por_ice':
               return "" . $this->Ini->Nm_lang['lang_tarifa_ice'] . "";
               break;
           case 'tarifa_ice':
               return "" . $this->Ini->Nm_lang['lang_tarifa_ice'] . "";
               break;
           case 'pro_base_ice':
               return "" . $this->Ini->Nm_lang['lang_base_ice'] . "";
               break;
           case 'total_ice':
               return "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_ice'] . "";
               break;
           case 'pro_por_iva':
               return "" . $this->Ini->Nm_lang['lang_tarifa_iva'] . "";
               break;
           case 'tarifa_iva':
               return "" . $this->Ini->Nm_lang['lang_tarifa_iva'] . "";
               break;
           case 'base_iva':
               return "" . $this->Ini->Nm_lang['lang_base_iva'] . "";
               break;
           case 'total_iva':
               return "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_iva'] . "";
               break;
           case 'pro_por_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . "";
               break;
           case 'tarifa_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . "";
               break;
           case 'pro_base_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . "";
               break;
           case 'total_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_irbpnr'] . "";
               break;
           case 'pro_iva':
               return "" . $this->Ini->Nm_lang['lang_impuesto'] . "";
               break;
           case 'precio_con_impuesto':
               return "" . $this->Ini->Nm_lang['lang_total'] . "";
               break;
           case 'pro_ice':
               return "" . $this->Ini->Nm_lang['lang_impuesto'] . "";
               break;
           case 'pro_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_impuesto'] . "";
               break;
           case 'pro_compra':
               return "" . $this->Ini->Nm_lang['lang_producto_compra'] . "";
               break;
           case 'pro_venta':
               return "" . $this->Ini->Nm_lang['lang_producto_venta'] . "";
               break;
           case 'pro_stock':
               return "" . $this->Ini->Nm_lang['lang_mueve_inventario'] . "";
               break;
           case 'pro_unidad':
               return "" . $this->Ini->Nm_lang['lang_unidad'] . "";
               break;
           case 'pro_producto_debi':
               return "" . $this->Ini->Nm_lang['lang_producto_debi'] . "";
               break;
           case 'pro_cta_cobrar':
               return "" . $this->Ini->Nm_lang['lang_cuenta_x_cobrar'] . "";
               break;
           case 'pro_cta_puente':
               return "" . $this->Ini->Nm_lang['lang_cuenta_puente'] . "";
               break;
           case 'pro_cta_ingreso':
               return "" . $this->Ini->Nm_lang['lang_cuenta_ingreso'] . "";
               break;
           case 'pro_cta_cartera_vencida':
               return "" . $this->Ini->Nm_lang['lang_cuenta_cartera_vencida'] . "";
               break;
           case 'pro_cantidad_inventario':
               return "" . $this->Ini->Nm_lang['lang_cantidad_inicial'] . "";
               break;
           case 'pro_costo_promedio':
               return "" . $this->Ini->Nm_lang['lang_costo_promedio'] . "";
               break;
           case 'pro_total_inventario':
               return "" . $this->Ini->Nm_lang['lang_total_inventario'] . "";
               break;
           case 'pro_descuento':
               return "" . $this->Ini->Nm_lang['lang_descuento'] . "";
               break;
           case 'valor_ice':
               return "" . $this->Ini->Nm_lang['lang_ice'] . "";
               break;
           case 'valor_irbpnr':
               return "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
               break;
           case 'valor_iva':
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
     $this->scFormFocusErrorName = '';
     $this->sc_force_zero = array();

     if (!is_array($filtro) && '' == $filtro && isset($this->nm_form_submit) && '1' == $this->nm_form_submit && $this->scCsrfGetToken() != $this->csrf_token)
     {
          $this->Campos_Mens_erro .= (empty($this->Campos_Mens_erro)) ? "" : "<br />";
          $this->Campos_Mens_erro .= "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          if ($this->NM_ajax_flag)
          {
              if (!isset($this->NM_ajax_info['errList']['geral_form_del_producto']) || !is_array($this->NM_ajax_info['errList']['geral_form_del_producto']))
              {
                  $this->NM_ajax_info['errList']['geral_form_del_producto'] = array();
              }
              $this->NM_ajax_info['errList']['geral_form_del_producto'][] = "CSRF: " . $this->Ini->Nm_lang['lang_errm_ajax_csrf'];
          }
     }
      if ((!is_array($filtro) && ('' == $filtro || 'pro_imagen' == $filtro)) || (is_array($filtro) && in_array('pro_imagen', $filtro)))
        $this->ValidateField_pro_imagen($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_imagen";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_empresa' == $filtro)) || (is_array($filtro) && in_array('pro_empresa', $filtro)))
        $this->ValidateField_pro_empresa($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_empresa";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_codigo' == $filtro)) || (is_array($filtro) && in_array('pro_codigo', $filtro)))
        $this->ValidateField_pro_codigo($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_codigo";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_codigo_aux' == $filtro)) || (is_array($filtro) && in_array('pro_codigo_aux', $filtro)))
        $this->ValidateField_pro_codigo_aux($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_codigo_aux";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_descripcion' == $filtro)) || (is_array($filtro) && in_array('pro_descripcion', $filtro)))
        $this->ValidateField_pro_descripcion($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_descripcion";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_categoria_producto' == $filtro)) || (is_array($filtro) && in_array('pro_categoria_producto', $filtro)))
        $this->ValidateField_pro_categoria_producto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_categoria_producto";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_familia_producto' == $filtro)) || (is_array($filtro) && in_array('pro_familia_producto', $filtro)))
        $this->ValidateField_pro_familia_producto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_familia_producto";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_grupo_compras' == $filtro)) || (is_array($filtro) && in_array('pro_grupo_compras', $filtro)))
        $this->ValidateField_pro_grupo_compras($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_grupo_compras";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_grupo_ventas' == $filtro)) || (is_array($filtro) && in_array('pro_grupo_ventas', $filtro)))
        $this->ValidateField_pro_grupo_ventas($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_grupo_ventas";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_estado' == $filtro)) || (is_array($filtro) && in_array('pro_estado', $filtro)))
        $this->ValidateField_pro_estado($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_estado";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_aplica_subsidio' == $filtro)) || (is_array($filtro) && in_array('pro_aplica_subsidio', $filtro)))
        $this->ValidateField_pro_aplica_subsidio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_aplica_subsidio";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_precio_sin_subsidio' == $filtro)) || (is_array($filtro) && in_array('pro_precio_sin_subsidio', $filtro)))
        $this->ValidateField_pro_precio_sin_subsidio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_precio_sin_subsidio";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_valor_subsidio' == $filtro)) || (is_array($filtro) && in_array('pro_valor_subsidio', $filtro)))
        $this->ValidateField_pro_valor_subsidio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_valor_subsidio";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_precio' == $filtro)) || (is_array($filtro) && in_array('pro_precio', $filtro)))
        $this->ValidateField_pro_precio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_precio";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_por_ice' == $filtro)) || (is_array($filtro) && in_array('pro_por_ice', $filtro)))
        $this->ValidateField_pro_por_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_por_ice";

      if ((!is_array($filtro) && ('' == $filtro || 'tarifa_ice' == $filtro)) || (is_array($filtro) && in_array('tarifa_ice', $filtro)))
        $this->ValidateField_tarifa_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "tarifa_ice";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_base_ice' == $filtro)) || (is_array($filtro) && in_array('pro_base_ice', $filtro)))
        $this->ValidateField_pro_base_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_base_ice";

      if ((!is_array($filtro) && ('' == $filtro || 'total_ice' == $filtro)) || (is_array($filtro) && in_array('total_ice', $filtro)))
        $this->ValidateField_total_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "total_ice";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_por_iva' == $filtro)) || (is_array($filtro) && in_array('pro_por_iva', $filtro)))
        $this->ValidateField_pro_por_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_por_iva";

      if ((!is_array($filtro) && ('' == $filtro || 'tarifa_iva' == $filtro)) || (is_array($filtro) && in_array('tarifa_iva', $filtro)))
        $this->ValidateField_tarifa_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "tarifa_iva";

      if ((!is_array($filtro) && ('' == $filtro || 'base_iva' == $filtro)) || (is_array($filtro) && in_array('base_iva', $filtro)))
        $this->ValidateField_base_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "base_iva";

      if ((!is_array($filtro) && ('' == $filtro || 'total_iva' == $filtro)) || (is_array($filtro) && in_array('total_iva', $filtro)))
        $this->ValidateField_total_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "total_iva";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_por_irbpnr' == $filtro)) || (is_array($filtro) && in_array('pro_por_irbpnr', $filtro)))
        $this->ValidateField_pro_por_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_por_irbpnr";

      if ((!is_array($filtro) && ('' == $filtro || 'tarifa_irbpnr' == $filtro)) || (is_array($filtro) && in_array('tarifa_irbpnr', $filtro)))
        $this->ValidateField_tarifa_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "tarifa_irbpnr";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_base_irbpnr' == $filtro)) || (is_array($filtro) && in_array('pro_base_irbpnr', $filtro)))
        $this->ValidateField_pro_base_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_base_irbpnr";

      if ((!is_array($filtro) && ('' == $filtro || 'total_irbpnr' == $filtro)) || (is_array($filtro) && in_array('total_irbpnr', $filtro)))
        $this->ValidateField_total_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "total_irbpnr";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_iva' == $filtro)) || (is_array($filtro) && in_array('pro_iva', $filtro)))
        $this->ValidateField_pro_iva($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_iva";

      if ((!is_array($filtro) && ('' == $filtro || 'precio_con_impuesto' == $filtro)) || (is_array($filtro) && in_array('precio_con_impuesto', $filtro)))
        $this->ValidateField_precio_con_impuesto($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "precio_con_impuesto";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_ice' == $filtro)) || (is_array($filtro) && in_array('pro_ice', $filtro)))
        $this->ValidateField_pro_ice($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_ice";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_irbpnr' == $filtro)) || (is_array($filtro) && in_array('pro_irbpnr', $filtro)))
        $this->ValidateField_pro_irbpnr($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_irbpnr";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_compra' == $filtro)) || (is_array($filtro) && in_array('pro_compra', $filtro)))
        $this->ValidateField_pro_compra($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_compra";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_venta' == $filtro)) || (is_array($filtro) && in_array('pro_venta', $filtro)))
        $this->ValidateField_pro_venta($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_venta";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_stock' == $filtro)) || (is_array($filtro) && in_array('pro_stock', $filtro)))
        $this->ValidateField_pro_stock($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_stock";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_unidad' == $filtro)) || (is_array($filtro) && in_array('pro_unidad', $filtro)))
        $this->ValidateField_pro_unidad($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_unidad";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_producto_debi' == $filtro)) || (is_array($filtro) && in_array('pro_producto_debi', $filtro)))
        $this->ValidateField_pro_producto_debi($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_producto_debi";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_cta_cobrar' == $filtro)) || (is_array($filtro) && in_array('pro_cta_cobrar', $filtro)))
        $this->ValidateField_pro_cta_cobrar($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_cta_cobrar";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_cta_puente' == $filtro)) || (is_array($filtro) && in_array('pro_cta_puente', $filtro)))
        $this->ValidateField_pro_cta_puente($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_cta_puente";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_cta_ingreso' == $filtro)) || (is_array($filtro) && in_array('pro_cta_ingreso', $filtro)))
        $this->ValidateField_pro_cta_ingreso($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_cta_ingreso";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_cta_cartera_vencida' == $filtro)) || (is_array($filtro) && in_array('pro_cta_cartera_vencida', $filtro)))
        $this->ValidateField_pro_cta_cartera_vencida($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_cta_cartera_vencida";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_cantidad_inventario' == $filtro)) || (is_array($filtro) && in_array('pro_cantidad_inventario', $filtro)))
        $this->ValidateField_pro_cantidad_inventario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_cantidad_inventario";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_costo_promedio' == $filtro)) || (is_array($filtro) && in_array('pro_costo_promedio', $filtro)))
        $this->ValidateField_pro_costo_promedio($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_costo_promedio";

      if ((!is_array($filtro) && ('' == $filtro || 'pro_total_inventario' == $filtro)) || (is_array($filtro) && in_array('pro_total_inventario', $filtro)))
        $this->ValidateField_pro_total_inventario($Campos_Crit, $Campos_Falta, $Campos_Erros);
      if ((!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName) && ( !empty($Campos_Crit) || !empty($Campos_Falta) ))
          $this->scFormFocusErrorName = "pro_total_inventario";

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

    function ValidateField_pro_imagen(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_imagen'])) {
          return;
      }
        if ($this->nmgp_opcao != "excluir")
        {
            $sTestFile = $this->pro_imagen;
            if ("" != $this->pro_imagen && "S" != $this->pro_imagen_limpa && !$teste_validade->ArqExtensao($this->pro_imagen, array('png', 'jpeg', 'jpg')))
            {
                $hasError = true;
                $Campos_Crit .= "{lang_btns_img}: " . $this->Ini->Nm_lang['lang_errm_file_invl']; 
                if (!isset($Campos_Erros['pro_imagen']))
                {
                    $Campos_Erros['pro_imagen'] = array();
                }
                $Campos_Erros['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
                if (!isset($this->NM_ajax_info['errList']['pro_imagen']) || !is_array($this->NM_ajax_info['errList']['pro_imagen']))
                {
                    $this->NM_ajax_info['errList']['pro_imagen'] = array();
                }
                $this->NM_ajax_info['errList']['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_file_invl'];
            }
            if (!$hasError && "" != $this->pro_imagen && "S" != $this->pro_imagen_limpa) {
                if (!function_exists('sc_upload_unprotect_chars')) {
                    include_once 'form_del_producto_doc_name.php';
                }
                $pathParts = pathinfo(sc_upload_unprotect_chars($sTestFile));
                $fileSize = filesize(sc_upload_unprotect_chars($sTestFile));
                $sizeErrorSuffix = '';
                if ($hasError) {
                    $Campos_Crit .= "{lang_btns_img}: " . $this->Ini->Nm_lang['lang_errm_file_size'] . $sizeErrorSuffix;
                    if (!isset($Campos_Erros['pro_imagen']))
                    {
                        $Campos_Erros['pro_imagen'] = array();
                    }
                    $Campos_Erros['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_file_size'] . $sizeErrorSuffix;
                    if (!isset($this->NM_ajax_info['errList']['pro_imagen']) || !is_array($this->NM_ajax_info['errList']['pro_imagen']))
                    {
                        $this->NM_ajax_info['errList']['pro_imagen'] = array();
                    }
                    $this->NM_ajax_info['errList']['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_file_size'] . $sizeErrorSuffix;
                }
            }
        }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_imagen';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_imagen

    function ValidateField_pro_empresa(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_empresa'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_empresa']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_empresa'] == "on")) 
      { 
          if ($this->pro_empresa == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_empresa'] . "" ; 
              if (!isset($Campos_Erros['pro_empresa']))
              {
                  $Campos_Erros['pro_empresa'] = array();
              }
              $Campos_Erros['pro_empresa'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pro_empresa']) || !is_array($this->NM_ajax_info['errList']['pro_empresa']))
                  {
                      $this->NM_ajax_info['errList']['pro_empresa'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_empresa'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->pro_empresa) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_empresa'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_empresa']))
              {
                  $Campos_Erros['pro_empresa'] = array();
              }
              $Campos_Erros['pro_empresa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_empresa']) || !is_array($this->NM_ajax_info['errList']['pro_empresa']))
              {
                  $this->NM_ajax_info['errList']['pro_empresa'] = array();
              }
              $this->NM_ajax_info['errList']['pro_empresa'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_empresa';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_empresa

    function ValidateField_pro_codigo(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_codigo'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_codigo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_codigo'] == "on")) 
      { 
          if ($this->pro_codigo == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_codigo'] . "" ; 
              if (!isset($Campos_Erros['pro_codigo']))
              {
                  $Campos_Erros['pro_codigo'] = array();
              }
              $Campos_Erros['pro_codigo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pro_codigo']) || !is_array($this->NM_ajax_info['errList']['pro_codigo']))
                  {
                      $this->NM_ajax_info['errList']['pro_codigo'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_codigo'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao == "incluir")
      { 
          if (NM_utf8_strlen($this->pro_codigo) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_codigo'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_codigo']))
              {
                  $Campos_Erros['pro_codigo'] = array();
              }
              $Campos_Erros['pro_codigo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_codigo']) || !is_array($this->NM_ajax_info['errList']['pro_codigo']))
              {
                  $this->NM_ajax_info['errList']['pro_codigo'] = array();
              }
              $this->NM_ajax_info['errList']['pro_codigo'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_codigo';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_codigo

    function ValidateField_pro_codigo_aux(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_codigo_aux'])) {
          return;
      }
      $this->pro_codigo_aux = sc_strtoupper($this->pro_codigo_aux); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_codigo_aux']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_codigo_aux'] == "on")) 
      { 
          if ($this->pro_codigo_aux == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_codigo_secundario'] . "" ; 
              if (!isset($Campos_Erros['pro_codigo_aux']))
              {
                  $Campos_Erros['pro_codigo_aux'] = array();
              }
              $Campos_Erros['pro_codigo_aux'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pro_codigo_aux']) || !is_array($this->NM_ajax_info['errList']['pro_codigo_aux']))
                  {
                      $this->NM_ajax_info['errList']['pro_codigo_aux'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_codigo_aux'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pro_codigo_aux) > 25) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_codigo_secundario'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_codigo_aux']))
              {
                  $Campos_Erros['pro_codigo_aux'] = array();
              }
              $Campos_Erros['pro_codigo_aux'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_codigo_aux']) || !is_array($this->NM_ajax_info['errList']['pro_codigo_aux']))
              {
                  $this->NM_ajax_info['errList']['pro_codigo_aux'] = array();
              }
              $this->NM_ajax_info['errList']['pro_codigo_aux'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 25 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_codigo_aux';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_codigo_aux

    function ValidateField_pro_descripcion(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_descripcion'])) {
          return;
      }
      $this->pro_descripcion = sc_strtoupper($this->pro_descripcion); 
      if ($this->nmgp_opcao != "excluir" && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_descripcion']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['php_cmp_required']['pro_descripcion'] == "on")) 
      { 
          if ($this->pro_descripcion == "")  
          { 
              $hasError = true;
              $Campos_Falta[] =  "" . $this->Ini->Nm_lang['lang_descripcion'] . "" ; 
              if (!isset($Campos_Erros['pro_descripcion']))
              {
                  $Campos_Erros['pro_descripcion'] = array();
              }
              $Campos_Erros['pro_descripcion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
                  if (!isset($this->NM_ajax_info['errList']['pro_descripcion']) || !is_array($this->NM_ajax_info['errList']['pro_descripcion']))
                  {
                      $this->NM_ajax_info['errList']['pro_descripcion'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_descripcion'][] = $this->Ini->Nm_lang['lang_errm_ajax_rqrd'];
          } 
      } 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pro_descripcion) > 300) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_descripcion'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_descripcion']))
              {
                  $Campos_Erros['pro_descripcion'] = array();
              }
              $Campos_Erros['pro_descripcion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_descripcion']) || !is_array($this->NM_ajax_info['errList']['pro_descripcion']))
              {
                  $this->NM_ajax_info['errList']['pro_descripcion'] = array();
              }
              $this->NM_ajax_info['errList']['pro_descripcion'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 300 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_descripcion';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_descripcion

    function ValidateField_pro_categoria_producto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_categoria_producto'])) {
       return;
   }
               if (!empty($this->pro_categoria_producto) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']) && !in_array($this->pro_categoria_producto, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_categoria_producto']))
                   {
                       $Campos_Erros['pro_categoria_producto'] = array();
                   }
                   $Campos_Erros['pro_categoria_producto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_categoria_producto']) || !is_array($this->NM_ajax_info['errList']['pro_categoria_producto']))
                   {
                       $this->NM_ajax_info['errList']['pro_categoria_producto'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_categoria_producto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_categoria_producto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_categoria_producto

    function ValidateField_pro_familia_producto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_familia_producto'])) {
       return;
   }
               if (!empty($this->pro_familia_producto) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']) && !in_array($this->pro_familia_producto, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_familia_producto']))
                   {
                       $Campos_Erros['pro_familia_producto'] = array();
                   }
                   $Campos_Erros['pro_familia_producto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_familia_producto']) || !is_array($this->NM_ajax_info['errList']['pro_familia_producto']))
                   {
                       $this->NM_ajax_info['errList']['pro_familia_producto'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_familia_producto'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_familia_producto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_familia_producto

    function ValidateField_pro_grupo_compras(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_grupo_compras'])) {
       return;
   }
               if (!empty($this->pro_grupo_compras) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']) && !in_array($this->pro_grupo_compras, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_grupo_compras']))
                   {
                       $Campos_Erros['pro_grupo_compras'] = array();
                   }
                   $Campos_Erros['pro_grupo_compras'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_grupo_compras']) || !is_array($this->NM_ajax_info['errList']['pro_grupo_compras']))
                   {
                       $this->NM_ajax_info['errList']['pro_grupo_compras'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_grupo_compras'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_grupo_compras';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_grupo_compras

    function ValidateField_pro_grupo_ventas(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_grupo_ventas'])) {
       return;
   }
               if (!empty($this->pro_grupo_ventas) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']) && !in_array($this->pro_grupo_ventas, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_grupo_ventas']))
                   {
                       $Campos_Erros['pro_grupo_ventas'] = array();
                   }
                   $Campos_Erros['pro_grupo_ventas'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_grupo_ventas']) || !is_array($this->NM_ajax_info['errList']['pro_grupo_ventas']))
                   {
                       $this->NM_ajax_info['errList']['pro_grupo_ventas'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_grupo_ventas'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_grupo_ventas';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_grupo_ventas

    function ValidateField_pro_estado(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_estado'])) {
       return;
   }
               if (!empty($this->pro_estado) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']) && !in_array($this->pro_estado, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_estado']))
                   {
                       $Campos_Erros['pro_estado'] = array();
                   }
                   $Campos_Erros['pro_estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_estado']) || !is_array($this->NM_ajax_info['errList']['pro_estado']))
                   {
                       $this->NM_ajax_info['errList']['pro_estado'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_estado'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_estado';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_estado

    function ValidateField_pro_aplica_subsidio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_aplica_subsidio'])) {
       return;
   }
      if ($this->pro_aplica_subsidio == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->pro_aplica_subsidio = "N";
      } 
      else 
      { 
          if (is_array($this->pro_aplica_subsidio))
          {
              $x = 0; 
              $this->pro_aplica_subsidio_1 = array(); 
              foreach ($this->pro_aplica_subsidio as $ind => $dados_pro_aplica_subsidio_1 ) 
              {
                  if ($dados_pro_aplica_subsidio_1 != "") 
                  {
                      $this->pro_aplica_subsidio_1[] = $dados_pro_aplica_subsidio_1;
                  } 
              } 
              $this->pro_aplica_subsidio = ""; 
              foreach ($this->pro_aplica_subsidio_1 as $dados_pro_aplica_subsidio_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->pro_aplica_subsidio .= ";";
                   } 
                   $this->pro_aplica_subsidio .= $dados_pro_aplica_subsidio_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_aplica_subsidio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_aplica_subsidio

    function ValidateField_pro_precio_sin_subsidio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_precio_sin_subsidio'])) {
          if (!empty($this->field_config['pro_precio_sin_subsidio']['symbol_dec'])) {
              nm_limpa_valor($this->pro_precio_sin_subsidio, $this->field_config['pro_precio_sin_subsidio']['symbol_dec'], $this->field_config['pro_precio_sin_subsidio']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_precio_sin_subsidio === "" || is_null($this->pro_precio_sin_subsidio))  
      { 
          $this->pro_precio_sin_subsidio = 0;
          $this->sc_force_zero[] = 'pro_precio_sin_subsidio';
      } 
      if (!empty($this->field_config['pro_precio_sin_subsidio']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_precio_sin_subsidio, $this->field_config['pro_precio_sin_subsidio']['symbol_dec'], $this->field_config['pro_precio_sin_subsidio']['symbol_grp']) ; 
          if ('.' == substr($this->pro_precio_sin_subsidio, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_precio_sin_subsidio, 1)))
              {
                  $this->pro_precio_sin_subsidio = '';
              }
              else
              {
                  $this->pro_precio_sin_subsidio = '0' . $this->pro_precio_sin_subsidio;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_precio_sin_subsidio != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->pro_precio_sin_subsidio) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_precio_sin_subsidio'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_precio_sin_subsidio']))
                  {
                      $Campos_Erros['pro_precio_sin_subsidio'] = array();
                  }
                  $Campos_Erros['pro_precio_sin_subsidio'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_precio_sin_subsidio']) || !is_array($this->NM_ajax_info['errList']['pro_precio_sin_subsidio']))
                  {
                      $this->NM_ajax_info['errList']['pro_precio_sin_subsidio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_precio_sin_subsidio'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_precio_sin_subsidio, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_precio_sin_subsidio'] . "; " ; 
                  if (!isset($Campos_Erros['pro_precio_sin_subsidio']))
                  {
                      $Campos_Erros['pro_precio_sin_subsidio'] = array();
                  }
                  $Campos_Erros['pro_precio_sin_subsidio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_precio_sin_subsidio']) || !is_array($this->NM_ajax_info['errList']['pro_precio_sin_subsidio']))
                  {
                      $this->NM_ajax_info['errList']['pro_precio_sin_subsidio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_precio_sin_subsidio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_precio_sin_subsidio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_precio_sin_subsidio

    function ValidateField_pro_valor_subsidio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_valor_subsidio'])) {
          if (!empty($this->field_config['pro_valor_subsidio']['symbol_dec'])) {
              nm_limpa_valor($this->pro_valor_subsidio, $this->field_config['pro_valor_subsidio']['symbol_dec'], $this->field_config['pro_valor_subsidio']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_valor_subsidio === "" || is_null($this->pro_valor_subsidio))  
      { 
          $this->pro_valor_subsidio = 0;
          $this->sc_force_zero[] = 'pro_valor_subsidio';
      } 
      if (!empty($this->field_config['pro_valor_subsidio']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_valor_subsidio, $this->field_config['pro_valor_subsidio']['symbol_dec'], $this->field_config['pro_valor_subsidio']['symbol_grp']) ; 
          if ('.' == substr($this->pro_valor_subsidio, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_valor_subsidio, 1)))
              {
                  $this->pro_valor_subsidio = '';
              }
              else
              {
                  $this->pro_valor_subsidio = '0' . $this->pro_valor_subsidio;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_valor_subsidio != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->pro_valor_subsidio, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->pro_valor_subsidio, -1))
              {
                  $iTestSize++;
                  $this->pro_valor_subsidio = '-' . substr($this->pro_valor_subsidio, 0, -1);
              }
              if (strlen($this->pro_valor_subsidio) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_pro_valor_subsidio'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_valor_subsidio']))
                  {
                      $Campos_Erros['pro_valor_subsidio'] = array();
                  }
                  $Campos_Erros['pro_valor_subsidio'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_valor_subsidio']) || !is_array($this->NM_ajax_info['errList']['pro_valor_subsidio']))
                  {
                      $this->NM_ajax_info['errList']['pro_valor_subsidio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_valor_subsidio'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_valor_subsidio, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_pro_valor_subsidio'] . "; " ; 
                  if (!isset($Campos_Erros['pro_valor_subsidio']))
                  {
                      $Campos_Erros['pro_valor_subsidio'] = array();
                  }
                  $Campos_Erros['pro_valor_subsidio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_valor_subsidio']) || !is_array($this->NM_ajax_info['errList']['pro_valor_subsidio']))
                  {
                      $this->NM_ajax_info['errList']['pro_valor_subsidio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_valor_subsidio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_valor_subsidio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_valor_subsidio

    function ValidateField_pro_precio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_precio'])) {
          if (!empty($this->field_config['pro_precio']['symbol_dec'])) {
              nm_limpa_valor($this->pro_precio, $this->field_config['pro_precio']['symbol_dec'], $this->field_config['pro_precio']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_precio === "" || is_null($this->pro_precio))  
      { 
          $this->pro_precio = 0;
          $this->sc_force_zero[] = 'pro_precio';
      } 
      if (!empty($this->field_config['pro_precio']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_precio, $this->field_config['pro_precio']['symbol_dec'], $this->field_config['pro_precio']['symbol_grp']) ; 
          if ('.' == substr($this->pro_precio, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_precio, 1)))
              {
                  $this->pro_precio = '';
              }
              else
              {
                  $this->pro_precio = '0' . $this->pro_precio;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_precio != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->pro_precio) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_precio_unitario'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_precio']))
                  {
                      $Campos_Erros['pro_precio'] = array();
                  }
                  $Campos_Erros['pro_precio'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_precio']) || !is_array($this->NM_ajax_info['errList']['pro_precio']))
                  {
                      $this->NM_ajax_info['errList']['pro_precio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_precio'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_precio, 9, 6, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_precio_unitario'] . "; " ; 
                  if (!isset($Campos_Erros['pro_precio']))
                  {
                      $Campos_Erros['pro_precio'] = array();
                  }
                  $Campos_Erros['pro_precio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_precio']) || !is_array($this->NM_ajax_info['errList']['pro_precio']))
                  {
                      $this->NM_ajax_info['errList']['pro_precio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_precio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_precio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_precio

    function ValidateField_pro_por_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_por_ice'])) {
       return;
   }
               if (!empty($this->pro_por_ice) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']) && !in_array($this->pro_por_ice, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_por_ice']))
                   {
                       $Campos_Erros['pro_por_ice'] = array();
                   }
                   $Campos_Erros['pro_por_ice'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_por_ice']) || !is_array($this->NM_ajax_info['errList']['pro_por_ice']))
                   {
                       $this->NM_ajax_info['errList']['pro_por_ice'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_por_ice'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_por_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_por_ice

    function ValidateField_tarifa_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['tarifa_ice'])) {
          if (!empty($this->field_config['tarifa_ice']['symbol_dec'])) {
              nm_limpa_valor($this->tarifa_ice, $this->field_config['tarifa_ice']['symbol_dec'], $this->field_config['tarifa_ice']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->tarifa_ice === "" || is_null($this->tarifa_ice))  
      { 
          $this->tarifa_ice = 0;
          $this->sc_force_zero[] = 'tarifa_ice';
      } 
      if (!empty($this->field_config['tarifa_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->tarifa_ice, $this->field_config['tarifa_ice']['symbol_dec'], $this->field_config['tarifa_ice']['symbol_grp']) ; 
          if ('.' == substr($this->tarifa_ice, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->tarifa_ice, 1)))
              {
                  $this->tarifa_ice = '';
              }
              else
              {
                  $this->tarifa_ice = '0' . $this->tarifa_ice;
              }
          }
      }
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->tarifa_ice != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->tarifa_ice, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->tarifa_ice, -1))
              {
                  $iTestSize++;
                  $this->tarifa_ice = '-' . substr($this->tarifa_ice, 0, -1);
              }
              if (strlen($this->tarifa_ice) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tarifa_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['tarifa_ice']))
                  {
                      $Campos_Erros['tarifa_ice'] = array();
                  }
                  $Campos_Erros['tarifa_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['tarifa_ice']) || !is_array($this->NM_ajax_info['errList']['tarifa_ice']))
                  {
                      $this->NM_ajax_info['errList']['tarifa_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['tarifa_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->tarifa_ice, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tarifa_ice'] . "; " ; 
                  if (!isset($Campos_Erros['tarifa_ice']))
                  {
                      $Campos_Erros['tarifa_ice'] = array();
                  }
                  $Campos_Erros['tarifa_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tarifa_ice']) || !is_array($this->NM_ajax_info['errList']['tarifa_ice']))
                  {
                      $this->NM_ajax_info['errList']['tarifa_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['tarifa_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tarifa_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tarifa_ice

    function ValidateField_pro_base_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_base_ice'])) {
          if (!empty($this->field_config['pro_base_ice']['symbol_dec'])) {
              nm_limpa_valor($this->pro_base_ice, $this->field_config['pro_base_ice']['symbol_dec'], $this->field_config['pro_base_ice']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_base_ice === "" || is_null($this->pro_base_ice))  
      { 
          $this->pro_base_ice = 0;
          $this->sc_force_zero[] = 'pro_base_ice';
      } 
      if (!empty($this->field_config['pro_base_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_base_ice, $this->field_config['pro_base_ice']['symbol_dec'], $this->field_config['pro_base_ice']['symbol_grp']) ; 
          if ('.' == substr($this->pro_base_ice, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_base_ice, 1)))
              {
                  $this->pro_base_ice = '';
              }
              else
              {
                  $this->pro_base_ice = '0' . $this->pro_base_ice;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_base_ice != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->pro_base_ice) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_base_ice']))
                  {
                      $Campos_Erros['pro_base_ice'] = array();
                  }
                  $Campos_Erros['pro_base_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_base_ice']) || !is_array($this->NM_ajax_info['errList']['pro_base_ice']))
                  {
                      $this->NM_ajax_info['errList']['pro_base_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_base_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_base_ice, 9, 6, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_ice'] . "; " ; 
                  if (!isset($Campos_Erros['pro_base_ice']))
                  {
                      $Campos_Erros['pro_base_ice'] = array();
                  }
                  $Campos_Erros['pro_base_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_base_ice']) || !is_array($this->NM_ajax_info['errList']['pro_base_ice']))
                  {
                      $this->NM_ajax_info['errList']['pro_base_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_base_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_base_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_base_ice

    function ValidateField_total_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['total_ice'])) {
          if (!empty($this->field_config['total_ice']['symbol_dec'])) {
              nm_limpa_valor($this->total_ice, $this->field_config['total_ice']['symbol_dec'], $this->field_config['total_ice']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->total_ice === "" || is_null($this->total_ice))  
      { 
          $this->total_ice = 0;
          $this->sc_force_zero[] = 'total_ice';
      } 
      if (!empty($this->field_config['total_ice']['symbol_dec']))
      {
          nm_limpa_valor($this->total_ice, $this->field_config['total_ice']['symbol_dec'], $this->field_config['total_ice']['symbol_grp']) ; 
          if ('.' == substr($this->total_ice, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->total_ice, 1)))
              {
                  $this->total_ice = '';
              }
              else
              {
                  $this->total_ice = '0' . $this->total_ice;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->total_ice != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->total_ice, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->total_ice, -1))
              {
                  $iTestSize++;
                  $this->total_ice = '-' . substr($this->total_ice, 0, -1);
              }
              if (strlen($this->total_ice) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_ice'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['total_ice']))
                  {
                      $Campos_Erros['total_ice'] = array();
                  }
                  $Campos_Erros['total_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['total_ice']) || !is_array($this->NM_ajax_info['errList']['total_ice']))
                  {
                      $this->NM_ajax_info['errList']['total_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_ice'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->total_ice, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_ice'] . "; " ; 
                  if (!isset($Campos_Erros['total_ice']))
                  {
                      $Campos_Erros['total_ice'] = array();
                  }
                  $Campos_Erros['total_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['total_ice']) || !is_array($this->NM_ajax_info['errList']['total_ice']))
                  {
                      $this->NM_ajax_info['errList']['total_ice'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_ice'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'total_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_total_ice

    function ValidateField_pro_por_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_por_iva'])) {
       return;
   }
               if (!empty($this->pro_por_iva) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']) && !in_array($this->pro_por_iva, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_por_iva']))
                   {
                       $Campos_Erros['pro_por_iva'] = array();
                   }
                   $Campos_Erros['pro_por_iva'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_por_iva']) || !is_array($this->NM_ajax_info['errList']['pro_por_iva']))
                   {
                       $this->NM_ajax_info['errList']['pro_por_iva'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_por_iva'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_por_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_por_iva

    function ValidateField_tarifa_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['tarifa_iva'])) {
          if (!empty($this->field_config['tarifa_iva']['symbol_dec'])) {
              nm_limpa_valor($this->tarifa_iva, $this->field_config['tarifa_iva']['symbol_dec'], $this->field_config['tarifa_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->tarifa_iva === "" || is_null($this->tarifa_iva))  
      { 
          $this->tarifa_iva = 0;
          $this->sc_force_zero[] = 'tarifa_iva';
      } 
      if (!empty($this->field_config['tarifa_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->tarifa_iva, $this->field_config['tarifa_iva']['symbol_dec'], $this->field_config['tarifa_iva']['symbol_grp']) ; 
          if ('.' == substr($this->tarifa_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->tarifa_iva, 1)))
              {
                  $this->tarifa_iva = '';
              }
              else
              {
                  $this->tarifa_iva = '0' . $this->tarifa_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->tarifa_iva != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->tarifa_iva, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->tarifa_iva, -1))
              {
                  $iTestSize++;
                  $this->tarifa_iva = '-' . substr($this->tarifa_iva, 0, -1);
              }
              if (strlen($this->tarifa_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tarifa_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['tarifa_iva']))
                  {
                      $Campos_Erros['tarifa_iva'] = array();
                  }
                  $Campos_Erros['tarifa_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['tarifa_iva']) || !is_array($this->NM_ajax_info['errList']['tarifa_iva']))
                  {
                      $this->NM_ajax_info['errList']['tarifa_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['tarifa_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->tarifa_iva, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tarifa_iva'] . "; " ; 
                  if (!isset($Campos_Erros['tarifa_iva']))
                  {
                      $Campos_Erros['tarifa_iva'] = array();
                  }
                  $Campos_Erros['tarifa_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tarifa_iva']) || !is_array($this->NM_ajax_info['errList']['tarifa_iva']))
                  {
                      $this->NM_ajax_info['errList']['tarifa_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['tarifa_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tarifa_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tarifa_iva

    function ValidateField_base_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['base_iva'])) {
          if (!empty($this->field_config['base_iva']['symbol_dec'])) {
              nm_limpa_valor($this->base_iva, $this->field_config['base_iva']['symbol_dec'], $this->field_config['base_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->base_iva === "" || is_null($this->base_iva))  
      { 
          $this->base_iva = 0;
          $this->sc_force_zero[] = 'base_iva';
      } 
      if (!empty($this->field_config['base_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->base_iva, $this->field_config['base_iva']['symbol_dec'], $this->field_config['base_iva']['symbol_grp']) ; 
          if ('.' == substr($this->base_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->base_iva, 1)))
              {
                  $this->base_iva = '';
              }
              else
              {
                  $this->base_iva = '0' . $this->base_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->base_iva != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->base_iva, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->base_iva, -1))
              {
                  $iTestSize++;
                  $this->base_iva = '-' . substr($this->base_iva, 0, -1);
              }
              if (strlen($this->base_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['base_iva']))
                  {
                      $Campos_Erros['base_iva'] = array();
                  }
                  $Campos_Erros['base_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['base_iva']) || !is_array($this->NM_ajax_info['errList']['base_iva']))
                  {
                      $this->NM_ajax_info['errList']['base_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['base_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->base_iva, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_iva'] . "; " ; 
                  if (!isset($Campos_Erros['base_iva']))
                  {
                      $Campos_Erros['base_iva'] = array();
                  }
                  $Campos_Erros['base_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['base_iva']) || !is_array($this->NM_ajax_info['errList']['base_iva']))
                  {
                      $this->NM_ajax_info['errList']['base_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['base_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'base_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_base_iva

    function ValidateField_total_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['total_iva'])) {
          if (!empty($this->field_config['total_iva']['symbol_dec'])) {
              nm_limpa_valor($this->total_iva, $this->field_config['total_iva']['symbol_dec'], $this->field_config['total_iva']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->total_iva === "" || is_null($this->total_iva))  
      { 
          $this->total_iva = 0;
          $this->sc_force_zero[] = 'total_iva';
      } 
      if (!empty($this->field_config['total_iva']['symbol_dec']))
      {
          nm_limpa_valor($this->total_iva, $this->field_config['total_iva']['symbol_dec'], $this->field_config['total_iva']['symbol_grp']) ; 
          if ('.' == substr($this->total_iva, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->total_iva, 1)))
              {
                  $this->total_iva = '';
              }
              else
              {
                  $this->total_iva = '0' . $this->total_iva;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->total_iva != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->total_iva, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->total_iva, -1))
              {
                  $iTestSize++;
                  $this->total_iva = '-' . substr($this->total_iva, 0, -1);
              }
              if (strlen($this->total_iva) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_iva'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['total_iva']))
                  {
                      $Campos_Erros['total_iva'] = array();
                  }
                  $Campos_Erros['total_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['total_iva']) || !is_array($this->NM_ajax_info['errList']['total_iva']))
                  {
                      $this->NM_ajax_info['errList']['total_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_iva'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->total_iva, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_iva'] . "; " ; 
                  if (!isset($Campos_Erros['total_iva']))
                  {
                      $Campos_Erros['total_iva'] = array();
                  }
                  $Campos_Erros['total_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['total_iva']) || !is_array($this->NM_ajax_info['errList']['total_iva']))
                  {
                      $this->NM_ajax_info['errList']['total_iva'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_iva'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'total_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_total_iva

    function ValidateField_pro_por_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_por_irbpnr'])) {
       return;
   }
               if (!empty($this->pro_por_irbpnr) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']) && !in_array($this->pro_por_irbpnr, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_por_irbpnr']))
                   {
                       $Campos_Erros['pro_por_irbpnr'] = array();
                   }
                   $Campos_Erros['pro_por_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_por_irbpnr']) || !is_array($this->NM_ajax_info['errList']['pro_por_irbpnr']))
                   {
                       $this->NM_ajax_info['errList']['pro_por_irbpnr'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_por_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_por_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_por_irbpnr

    function ValidateField_tarifa_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['tarifa_irbpnr'])) {
          if (!empty($this->field_config['tarifa_irbpnr']['symbol_dec'])) {
              nm_limpa_valor($this->tarifa_irbpnr, $this->field_config['tarifa_irbpnr']['symbol_dec'], $this->field_config['tarifa_irbpnr']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->tarifa_irbpnr === "" || is_null($this->tarifa_irbpnr))  
      { 
          $this->tarifa_irbpnr = 0;
          $this->sc_force_zero[] = 'tarifa_irbpnr';
      } 
      if (!empty($this->field_config['tarifa_irbpnr']['symbol_dec']))
      {
          nm_limpa_valor($this->tarifa_irbpnr, $this->field_config['tarifa_irbpnr']['symbol_dec'], $this->field_config['tarifa_irbpnr']['symbol_grp']) ; 
          if ('.' == substr($this->tarifa_irbpnr, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->tarifa_irbpnr, 1)))
              {
                  $this->tarifa_irbpnr = '';
              }
              else
              {
                  $this->tarifa_irbpnr = '0' . $this->tarifa_irbpnr;
              }
          }
      }
      if ($this->nmgp_opcao == "incluir")
      { 
          if ($this->tarifa_irbpnr != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->tarifa_irbpnr, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->tarifa_irbpnr, -1))
              {
                  $iTestSize++;
                  $this->tarifa_irbpnr = '-' . substr($this->tarifa_irbpnr, 0, -1);
              }
              if (strlen($this->tarifa_irbpnr) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['tarifa_irbpnr']))
                  {
                      $Campos_Erros['tarifa_irbpnr'] = array();
                  }
                  $Campos_Erros['tarifa_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['tarifa_irbpnr']) || !is_array($this->NM_ajax_info['errList']['tarifa_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['tarifa_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['tarifa_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->tarifa_irbpnr, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_tarifa_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['tarifa_irbpnr']))
                  {
                      $Campos_Erros['tarifa_irbpnr'] = array();
                  }
                  $Campos_Erros['tarifa_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['tarifa_irbpnr']) || !is_array($this->NM_ajax_info['errList']['tarifa_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['tarifa_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['tarifa_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'tarifa_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_tarifa_irbpnr

    function ValidateField_pro_base_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_base_irbpnr'])) {
          if (!empty($this->field_config['pro_base_irbpnr']['symbol_dec'])) {
              nm_limpa_valor($this->pro_base_irbpnr, $this->field_config['pro_base_irbpnr']['symbol_dec'], $this->field_config['pro_base_irbpnr']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_base_irbpnr === "" || is_null($this->pro_base_irbpnr))  
      { 
          $this->pro_base_irbpnr = 0;
          $this->sc_force_zero[] = 'pro_base_irbpnr';
      } 
      if (!empty($this->field_config['pro_base_irbpnr']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_base_irbpnr, $this->field_config['pro_base_irbpnr']['symbol_dec'], $this->field_config['pro_base_irbpnr']['symbol_grp']) ; 
          if ('.' == substr($this->pro_base_irbpnr, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_base_irbpnr, 1)))
              {
                  $this->pro_base_irbpnr = '';
              }
              else
              {
                  $this->pro_base_irbpnr = '0' . $this->pro_base_irbpnr;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_base_irbpnr != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->pro_base_irbpnr) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_base_irbpnr']))
                  {
                      $Campos_Erros['pro_base_irbpnr'] = array();
                  }
                  $Campos_Erros['pro_base_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_base_irbpnr']) || !is_array($this->NM_ajax_info['errList']['pro_base_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['pro_base_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_base_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_base_irbpnr, 10, 5, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_base_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['pro_base_irbpnr']))
                  {
                      $Campos_Erros['pro_base_irbpnr'] = array();
                  }
                  $Campos_Erros['pro_base_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_base_irbpnr']) || !is_array($this->NM_ajax_info['errList']['pro_base_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['pro_base_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_base_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_base_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_base_irbpnr

    function ValidateField_total_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['total_irbpnr'])) {
          if (!empty($this->field_config['total_irbpnr']['symbol_dec'])) {
              nm_limpa_valor($this->total_irbpnr, $this->field_config['total_irbpnr']['symbol_dec'], $this->field_config['total_irbpnr']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->total_irbpnr === "" || is_null($this->total_irbpnr))  
      { 
          $this->total_irbpnr = 0;
          $this->sc_force_zero[] = 'total_irbpnr';
      } 
      if (!empty($this->field_config['total_irbpnr']['symbol_dec']))
      {
          nm_limpa_valor($this->total_irbpnr, $this->field_config['total_irbpnr']['symbol_dec'], $this->field_config['total_irbpnr']['symbol_grp']) ; 
          if ('.' == substr($this->total_irbpnr, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->total_irbpnr, 1)))
              {
                  $this->total_irbpnr = '';
              }
              else
              {
                  $this->total_irbpnr = '0' . $this->total_irbpnr;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->total_irbpnr != '')  
          { 
              $iTestSize = 21;
              if ('-' == substr($this->total_irbpnr, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->total_irbpnr, -1))
              {
                  $iTestSize++;
                  $this->total_irbpnr = '-' . substr($this->total_irbpnr, 0, -1);
              }
              if (strlen($this->total_irbpnr) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_irbpnr'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['total_irbpnr']))
                  {
                      $Campos_Erros['total_irbpnr'] = array();
                  }
                  $Campos_Erros['total_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['total_irbpnr']) || !is_array($this->NM_ajax_info['errList']['total_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['total_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->total_irbpnr, 18, 2, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . " " . $this->Ini->Nm_lang['lang_irbpnr'] . "; " ; 
                  if (!isset($Campos_Erros['total_irbpnr']))
                  {
                      $Campos_Erros['total_irbpnr'] = array();
                  }
                  $Campos_Erros['total_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['total_irbpnr']) || !is_array($this->NM_ajax_info['errList']['total_irbpnr']))
                  {
                      $this->NM_ajax_info['errList']['total_irbpnr'] = array();
                  }
                  $this->NM_ajax_info['errList']['total_irbpnr'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'total_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_total_irbpnr

    function ValidateField_pro_iva(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_iva'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pro_iva) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_impuesto'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_iva']))
              {
                  $Campos_Erros['pro_iva'] = array();
              }
              $Campos_Erros['pro_iva'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_iva']) || !is_array($this->NM_ajax_info['errList']['pro_iva']))
              {
                  $this->NM_ajax_info['errList']['pro_iva'] = array();
              }
              $this->NM_ajax_info['errList']['pro_iva'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_iva';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_iva

    function ValidateField_precio_con_impuesto(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['precio_con_impuesto'])) {
          if (!empty($this->field_config['precio_con_impuesto']['symbol_dec'])) {
              nm_limpa_valor($this->precio_con_impuesto, $this->field_config['precio_con_impuesto']['symbol_dec'], $this->field_config['precio_con_impuesto']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->precio_con_impuesto === "" || is_null($this->precio_con_impuesto))  
      { 
          $this->precio_con_impuesto = 0;
          $this->sc_force_zero[] = 'precio_con_impuesto';
      } 
      if (!empty($this->field_config['precio_con_impuesto']['symbol_dec']))
      {
          nm_limpa_valor($this->precio_con_impuesto, $this->field_config['precio_con_impuesto']['symbol_dec'], $this->field_config['precio_con_impuesto']['symbol_grp']) ; 
          if ('.' == substr($this->precio_con_impuesto, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->precio_con_impuesto, 1)))
              {
                  $this->precio_con_impuesto = '';
              }
              else
              {
                  $this->precio_con_impuesto = '0' . $this->precio_con_impuesto;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->precio_con_impuesto != '')  
          { 
              $iTestSize = 21;
              if (strlen($this->precio_con_impuesto) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['precio_con_impuesto']))
                  {
                      $Campos_Erros['precio_con_impuesto'] = array();
                  }
                  $Campos_Erros['precio_con_impuesto'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['precio_con_impuesto']) || !is_array($this->NM_ajax_info['errList']['precio_con_impuesto']))
                  {
                      $this->NM_ajax_info['errList']['precio_con_impuesto'] = array();
                  }
                  $this->NM_ajax_info['errList']['precio_con_impuesto'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->precio_con_impuesto, 18, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total'] . "; " ; 
                  if (!isset($Campos_Erros['precio_con_impuesto']))
                  {
                      $Campos_Erros['precio_con_impuesto'] = array();
                  }
                  $Campos_Erros['precio_con_impuesto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['precio_con_impuesto']) || !is_array($this->NM_ajax_info['errList']['precio_con_impuesto']))
                  {
                      $this->NM_ajax_info['errList']['precio_con_impuesto'] = array();
                  }
                  $this->NM_ajax_info['errList']['precio_con_impuesto'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'precio_con_impuesto';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_precio_con_impuesto

    function ValidateField_pro_ice(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_ice'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pro_ice) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_impuesto'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_ice']))
              {
                  $Campos_Erros['pro_ice'] = array();
              }
              $Campos_Erros['pro_ice'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_ice']) || !is_array($this->NM_ajax_info['errList']['pro_ice']))
              {
                  $this->NM_ajax_info['errList']['pro_ice'] = array();
              }
              $this->NM_ajax_info['errList']['pro_ice'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_ice';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_ice

    function ValidateField_pro_irbpnr(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_irbpnr'])) {
          return;
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if (NM_utf8_strlen($this->pro_irbpnr) > 1) 
          { 
              $hasError = true;
              $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_impuesto'] . " " . $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr']; 
              if (!isset($Campos_Erros['pro_irbpnr']))
              {
                  $Campos_Erros['pro_irbpnr'] = array();
              }
              $Campos_Erros['pro_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
              if (!isset($this->NM_ajax_info['errList']['pro_irbpnr']) || !is_array($this->NM_ajax_info['errList']['pro_irbpnr']))
              {
                  $this->NM_ajax_info['errList']['pro_irbpnr'] = array();
              }
              $this->NM_ajax_info['errList']['pro_irbpnr'][] = $this->Ini->Nm_lang['lang_errm_mxch'] . " 1 " . $this->Ini->Nm_lang['lang_errm_nchr'];
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_irbpnr';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_irbpnr

    function ValidateField_pro_compra(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_compra'])) {
       return;
   }
      if ($this->pro_compra == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->pro_compra = "N";
      } 
      else 
      { 
          if (is_array($this->pro_compra))
          {
              $x = 0; 
              $this->pro_compra_1 = array(); 
              foreach ($this->pro_compra as $ind => $dados_pro_compra_1 ) 
              {
                  if ($dados_pro_compra_1 != "") 
                  {
                      $this->pro_compra_1[] = $dados_pro_compra_1;
                  } 
              } 
              $this->pro_compra = ""; 
              foreach ($this->pro_compra_1 as $dados_pro_compra_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->pro_compra .= ";";
                   } 
                   $this->pro_compra .= $dados_pro_compra_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_compra';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_compra

    function ValidateField_pro_venta(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_venta'])) {
       return;
   }
      if ($this->pro_venta == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->pro_venta = "N";
      } 
      else 
      { 
          if (is_array($this->pro_venta))
          {
              $x = 0; 
              $this->pro_venta_1 = array(); 
              foreach ($this->pro_venta as $ind => $dados_pro_venta_1 ) 
              {
                  if ($dados_pro_venta_1 != "") 
                  {
                      $this->pro_venta_1[] = $dados_pro_venta_1;
                  } 
              } 
              $this->pro_venta = ""; 
              foreach ($this->pro_venta_1 as $dados_pro_venta_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->pro_venta .= ";";
                   } 
                   $this->pro_venta .= $dados_pro_venta_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_venta';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_venta

    function ValidateField_pro_stock(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_stock'])) {
       return;
   }
      if ($this->pro_stock == "" && $this->nmgp_opcao != "excluir")
      { 
          $this->pro_stock = "N";
      } 
      else 
      { 
          if (is_array($this->pro_stock))
          {
              $x = 0; 
              $this->pro_stock_1 = array(); 
              foreach ($this->pro_stock as $ind => $dados_pro_stock_1 ) 
              {
                  if ($dados_pro_stock_1 != "") 
                  {
                      $this->pro_stock_1[] = $dados_pro_stock_1;
                  } 
              } 
              $this->pro_stock = ""; 
              foreach ($this->pro_stock_1 as $dados_pro_stock_1 ) 
              { 
                   if ($x != 0)
                   { 
                       $this->pro_stock .= ";";
                   } 
                   $this->pro_stock .= $dados_pro_stock_1;
                   $x++ ; 
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_stock';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_stock

    function ValidateField_pro_unidad(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_unidad'])) {
       return;
   }
               if (!empty($this->pro_unidad) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']) && !in_array($this->pro_unidad, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_unidad']))
                   {
                       $Campos_Erros['pro_unidad'] = array();
                   }
                   $Campos_Erros['pro_unidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_unidad']) || !is_array($this->NM_ajax_info['errList']['pro_unidad']))
                   {
                       $this->NM_ajax_info['errList']['pro_unidad'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_unidad'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_unidad';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_unidad

    function ValidateField_pro_producto_debi(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_producto_debi'])) {
       return;
   }
               if (!empty($this->pro_producto_debi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']) && !in_array($this->pro_producto_debi, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_producto_debi']))
                   {
                       $Campos_Erros['pro_producto_debi'] = array();
                   }
                   $Campos_Erros['pro_producto_debi'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_producto_debi']) || !is_array($this->NM_ajax_info['errList']['pro_producto_debi']))
                   {
                       $this->NM_ajax_info['errList']['pro_producto_debi'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_producto_debi'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_producto_debi';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_producto_debi

    function ValidateField_pro_cta_cobrar(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_cta_cobrar'])) {
       return;
   }
               if (!empty($this->pro_cta_cobrar) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']) && !in_array($this->pro_cta_cobrar, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_cta_cobrar']))
                   {
                       $Campos_Erros['pro_cta_cobrar'] = array();
                   }
                   $Campos_Erros['pro_cta_cobrar'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_cta_cobrar']) || !is_array($this->NM_ajax_info['errList']['pro_cta_cobrar']))
                   {
                       $this->NM_ajax_info['errList']['pro_cta_cobrar'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_cta_cobrar'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_cta_cobrar';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_cta_cobrar

    function ValidateField_pro_cta_puente(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_cta_puente'])) {
       return;
   }
               if (!empty($this->pro_cta_puente) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']) && !in_array($this->pro_cta_puente, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_cta_puente']))
                   {
                       $Campos_Erros['pro_cta_puente'] = array();
                   }
                   $Campos_Erros['pro_cta_puente'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_cta_puente']) || !is_array($this->NM_ajax_info['errList']['pro_cta_puente']))
                   {
                       $this->NM_ajax_info['errList']['pro_cta_puente'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_cta_puente'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_cta_puente';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_cta_puente

    function ValidateField_pro_cta_ingreso(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
   if (isset($this->Field_no_validate['pro_cta_ingreso'])) {
       return;
   }
               if (!empty($this->pro_cta_ingreso) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']) && !in_array($this->pro_cta_ingreso, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']))
               {
                   $hasError = true;
                   $Campos_Crit .= $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($Campos_Erros['pro_cta_ingreso']))
                   {
                       $Campos_Erros['pro_cta_ingreso'] = array();
                   }
                   $Campos_Erros['pro_cta_ingreso'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
                   if (!isset($this->NM_ajax_info['errList']['pro_cta_ingreso']) || !is_array($this->NM_ajax_info['errList']['pro_cta_ingreso']))
                   {
                       $this->NM_ajax_info['errList']['pro_cta_ingreso'] = array();
                   }
                   $this->NM_ajax_info['errList']['pro_cta_ingreso'][] = $this->Ini->Nm_lang['lang_errm_ajax_data'];
               }
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_cta_ingreso';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_cta_ingreso

    function ValidateField_pro_cta_cartera_vencida(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_cta_cartera_vencida'])) {
          nm_limpa_numero($this->pro_cta_cartera_vencida, $this->field_config['pro_cta_cartera_vencida']['symbol_grp']) ; 
          return;
      }
      if ($this->pro_cta_cartera_vencida === "" || is_null($this->pro_cta_cartera_vencida))  
      { 
          $this->pro_cta_cartera_vencida = 0;
          $this->sc_force_zero[] = 'pro_cta_cartera_vencida';
      } 
      nm_limpa_numero($this->pro_cta_cartera_vencida, $this->field_config['pro_cta_cartera_vencida']['symbol_grp']) ; 
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_cta_cartera_vencida != '')  
          { 
              $iTestSize = 9;
              if (strlen($this->pro_cta_cartera_vencida) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cuenta_cartera_vencida'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_cta_cartera_vencida']))
                  {
                      $Campos_Erros['pro_cta_cartera_vencida'] = array();
                  }
                  $Campos_Erros['pro_cta_cartera_vencida'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_cta_cartera_vencida']) || !is_array($this->NM_ajax_info['errList']['pro_cta_cartera_vencida']))
                  {
                      $this->NM_ajax_info['errList']['pro_cta_cartera_vencida'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_cta_cartera_vencida'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_cta_cartera_vencida, 9, 0, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cuenta_cartera_vencida'] . "; " ; 
                  if (!isset($Campos_Erros['pro_cta_cartera_vencida']))
                  {
                      $Campos_Erros['pro_cta_cartera_vencida'] = array();
                  }
                  $Campos_Erros['pro_cta_cartera_vencida'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_cta_cartera_vencida']) || !is_array($this->NM_ajax_info['errList']['pro_cta_cartera_vencida']))
                  {
                      $this->NM_ajax_info['errList']['pro_cta_cartera_vencida'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_cta_cartera_vencida'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_cta_cartera_vencida';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_cta_cartera_vencida

    function ValidateField_pro_cantidad_inventario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_cantidad_inventario'])) {
          if (!empty($this->field_config['pro_cantidad_inventario']['symbol_dec'])) {
              nm_limpa_valor($this->pro_cantidad_inventario, $this->field_config['pro_cantidad_inventario']['symbol_dec'], $this->field_config['pro_cantidad_inventario']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_cantidad_inventario === "" || is_null($this->pro_cantidad_inventario))  
      { 
          $this->pro_cantidad_inventario = 0;
          $this->sc_force_zero[] = 'pro_cantidad_inventario';
      } 
      if (!empty($this->field_config['pro_cantidad_inventario']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_cantidad_inventario, $this->field_config['pro_cantidad_inventario']['symbol_dec'], $this->field_config['pro_cantidad_inventario']['symbol_grp']) ; 
          if ('.' == substr($this->pro_cantidad_inventario, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_cantidad_inventario, 1)))
              {
                  $this->pro_cantidad_inventario = '';
              }
              else
              {
                  $this->pro_cantidad_inventario = '0' . $this->pro_cantidad_inventario;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_cantidad_inventario != '')  
          { 
              $iTestSize = 16;
              if ('-' == substr($this->pro_cantidad_inventario, 0, 1))
              {
                  $iTestSize++;
              }
              elseif ('-' == substr($this->pro_cantidad_inventario, -1))
              {
                  $iTestSize++;
                  $this->pro_cantidad_inventario = '-' . substr($this->pro_cantidad_inventario, 0, -1);
              }
              if (strlen($this->pro_cantidad_inventario) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cantidad_inicial'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_cantidad_inventario']))
                  {
                      $Campos_Erros['pro_cantidad_inventario'] = array();
                  }
                  $Campos_Erros['pro_cantidad_inventario'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_cantidad_inventario']) || !is_array($this->NM_ajax_info['errList']['pro_cantidad_inventario']))
                  {
                      $this->NM_ajax_info['errList']['pro_cantidad_inventario'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_cantidad_inventario'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_cantidad_inventario, 10, 5, 0, 0, "S") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_cantidad_inicial'] . "; " ; 
                  if (!isset($Campos_Erros['pro_cantidad_inventario']))
                  {
                      $Campos_Erros['pro_cantidad_inventario'] = array();
                  }
                  $Campos_Erros['pro_cantidad_inventario'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_cantidad_inventario']) || !is_array($this->NM_ajax_info['errList']['pro_cantidad_inventario']))
                  {
                      $this->NM_ajax_info['errList']['pro_cantidad_inventario'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_cantidad_inventario'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_cantidad_inventario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_cantidad_inventario

    function ValidateField_pro_costo_promedio(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_costo_promedio'])) {
          if (!empty($this->field_config['pro_costo_promedio']['symbol_dec'])) {
              nm_limpa_valor($this->pro_costo_promedio, $this->field_config['pro_costo_promedio']['symbol_dec'], $this->field_config['pro_costo_promedio']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_costo_promedio === "" || is_null($this->pro_costo_promedio))  
      { 
          $this->pro_costo_promedio = 0;
          $this->sc_force_zero[] = 'pro_costo_promedio';
      } 
      if (!empty($this->field_config['pro_costo_promedio']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_costo_promedio, $this->field_config['pro_costo_promedio']['symbol_dec'], $this->field_config['pro_costo_promedio']['symbol_grp']) ; 
          if ('.' == substr($this->pro_costo_promedio, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_costo_promedio, 1)))
              {
                  $this->pro_costo_promedio = '';
              }
              else
              {
                  $this->pro_costo_promedio = '0' . $this->pro_costo_promedio;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_costo_promedio != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->pro_costo_promedio) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_costo_promedio'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_costo_promedio']))
                  {
                      $Campos_Erros['pro_costo_promedio'] = array();
                  }
                  $Campos_Erros['pro_costo_promedio'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_costo_promedio']) || !is_array($this->NM_ajax_info['errList']['pro_costo_promedio']))
                  {
                      $this->NM_ajax_info['errList']['pro_costo_promedio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_costo_promedio'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_costo_promedio, 11, 4, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_costo_promedio'] . "; " ; 
                  if (!isset($Campos_Erros['pro_costo_promedio']))
                  {
                      $Campos_Erros['pro_costo_promedio'] = array();
                  }
                  $Campos_Erros['pro_costo_promedio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_costo_promedio']) || !is_array($this->NM_ajax_info['errList']['pro_costo_promedio']))
                  {
                      $this->NM_ajax_info['errList']['pro_costo_promedio'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_costo_promedio'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_costo_promedio';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_costo_promedio

    function ValidateField_pro_total_inventario(&$Campos_Crit, &$Campos_Falta, &$Campos_Erros)
    {
        global $teste_validade;
        $hasError = false;
      if (isset($this->Field_no_validate['pro_total_inventario'])) {
          if (!empty($this->field_config['pro_total_inventario']['symbol_dec'])) {
              nm_limpa_valor($this->pro_total_inventario, $this->field_config['pro_total_inventario']['symbol_dec'], $this->field_config['pro_total_inventario']['symbol_grp']) ; 
          }
          return;
      }
      if ($this->pro_total_inventario === "" || is_null($this->pro_total_inventario))  
      { 
          $this->pro_total_inventario = 0;
          $this->sc_force_zero[] = 'pro_total_inventario';
      } 
      if (!empty($this->field_config['pro_total_inventario']['symbol_dec']))
      {
          nm_limpa_valor($this->pro_total_inventario, $this->field_config['pro_total_inventario']['symbol_dec'], $this->field_config['pro_total_inventario']['symbol_grp']) ; 
          if ('.' == substr($this->pro_total_inventario, 0, 1))
          {
              if ('' == str_replace('0', '', substr($this->pro_total_inventario, 1)))
              {
                  $this->pro_total_inventario = '';
              }
              else
              {
                  $this->pro_total_inventario = '0' . $this->pro_total_inventario;
              }
          }
      }
      if ($this->nmgp_opcao != "excluir") 
      { 
          if ($this->pro_total_inventario != '')  
          { 
              $iTestSize = 16;
              if (strlen($this->pro_total_inventario) > $iTestSize)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total_inventario'] . ": " . $this->Ini->Nm_lang['lang_errm_size']; 
                  if (!isset($Campos_Erros['pro_total_inventario']))
                  {
                      $Campos_Erros['pro_total_inventario'] = array();
                  }
                  $Campos_Erros['pro_total_inventario'][] = $this->Ini->Nm_lang['lang_errm_size'];
                  if (!isset($this->NM_ajax_info['errList']['pro_total_inventario']) || !is_array($this->NM_ajax_info['errList']['pro_total_inventario']))
                  {
                      $this->NM_ajax_info['errList']['pro_total_inventario'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_total_inventario'][] = $this->Ini->Nm_lang['lang_errm_size'];
              } 
              if ($teste_validade->Valor($this->pro_total_inventario, 13, 2, 0, 0, "N") == false)  
              { 
                  $hasError = true;
                  $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_total_inventario'] . "; " ; 
                  if (!isset($Campos_Erros['pro_total_inventario']))
                  {
                      $Campos_Erros['pro_total_inventario'] = array();
                  }
                  $Campos_Erros['pro_total_inventario'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
                  if (!isset($this->NM_ajax_info['errList']['pro_total_inventario']) || !is_array($this->NM_ajax_info['errList']['pro_total_inventario']))
                  {
                      $this->NM_ajax_info['errList']['pro_total_inventario'] = array();
                  }
                  $this->NM_ajax_info['errList']['pro_total_inventario'][] = "" . $this->Ini->Nm_lang['lang_errm_ajax_data'] . "";
              } 
          } 
      } 
        if ($hasError) {
            global $sc_seq_vert;
            $fieldName = 'pro_total_inventario';
            if (isset($sc_seq_vert) && '' != $sc_seq_vert) {
                $fieldName .= $sc_seq_vert;
            }
            $this->NM_ajax_info['fieldsWithErrors'][] = $fieldName;
        }
    } // ValidateField_pro_total_inventario
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
          if ($this->pro_imagen == "none") 
          { 
              $this->pro_imagen = ""; 
          } 
          if ($this->pro_imagen != "") 
          { 
              if (!function_exists('sc_upload_unprotect_chars'))
              {
                  include_once 'form_del_producto_doc_name.php';
              }
              $this->pro_imagen = sc_upload_unprotect_chars($this->pro_imagen, true);
              $this->pro_imagen_scfile_name = sc_upload_unprotect_chars($this->pro_imagen_scfile_name, true);
              if ($nm_browser == "Opera")  
              { 
                  $this->pro_imagen_scfile_type = substr($this->pro_imagen_scfile_type, 0, strpos($this->pro_imagen_scfile_type, ";")) ; 
              } 
              if ($this->pro_imagen_scfile_type == "image/pjpeg" || $this->pro_imagen_scfile_type == "image/jpeg" || $this->pro_imagen_scfile_type == "image/gif" ||  
                  $this->pro_imagen_scfile_type == "image/png" || $this->pro_imagen_scfile_type == "image/x-png" || $this->pro_imagen_scfile_type == "image/bmp")  
              { 
                  if (!is_file($this->pro_imagen) && isset($_SESSION['scriptcase']['charset']) && $_SESSION['scriptcase']['charset'] != 'UTF-8') {
                      $mbConvertFileName = mb_convert_encoding($this->pro_imagen, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      $mbConvertScFileName = mb_convert_encoding($this->pro_imagen_scfile_name, $_SESSION['scriptcase']['charset'], 'UTF-8');
                      if (is_file($mbConvertFileName)) {
                          $this->pro_imagen = $mbConvertFileName;
                          $this->pro_imagen_scfile_name = $mbConvertScFileName;
                      }
                  }
                  if (is_file($this->pro_imagen))  
                  { 
                      $this->NM_size_docs[$this->pro_imagen_scfile_name] = $this->sc_file_size($this->pro_imagen);
                      if ($this->nmgp_opcao == "incluir")
                      { 
                          $this->SC_IMG_pro_imagen = $this->pro_imagen;
                      } 
                      else 
                      { 
                          $arq_pro_imagen = fopen($this->pro_imagen, "r") ; 
                          $reg_pro_imagen = fread($arq_pro_imagen, filesize($this->pro_imagen)) ; 
                          fclose($arq_pro_imagen) ;  
                      } 
                      $this->pro_imagen =  trim($this->pro_imagen_scfile_name) ;  
                      $dir_img = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/"; 
                     if ($this->nmgp_opcao != "incluir")
                     { 
                      if (nm_mkdir($dir_img))  
                      { 
                          $_test_file = $this->fetchUniqueUploadName($this->pro_imagen_scfile_name, $dir_img, "pro_imagen");
                          if (trim($this->pro_imagen_scfile_name) != $_test_file)
                          {
                              $this->pro_imagen_scfile_name = $_test_file;
                              $this->pro_imagen = $_test_file;
                          }
                          $arq_pro_imagen = fopen($dir_img . trim($this->pro_imagen_scfile_name), "w") ; 
                          fwrite($arq_pro_imagen, $reg_pro_imagen) ;  
                          fclose($arq_pro_imagen) ;  
                      } 
                      else 
                      { 
                          $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_btns_img'] . ": " . $this->Ini->Nm_lang['lang_errm_ivdr']; 
                          $this->pro_imagen = "";
                          if (!isset($Campos_Erros['pro_imagen']))
                          {
                              $Campos_Erros['pro_imagen'] = array();
                          }
                          $Campos_Erros['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                          if (!isset($this->NM_ajax_info['errList']['pro_imagen']) || !is_array($this->NM_ajax_info['errList']['pro_imagen']))
                          {
                              $this->NM_ajax_info['errList']['pro_imagen'] = array();
                          }
                          $this->NM_ajax_info['errList']['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_ivdr'];
                      } 
                     } 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_btns_img'] . " " . $this->Ini->Nm_lang['lang_errm_upld']; 
                      $this->pro_imagen = "";
                      if (!isset($Campos_Erros['pro_imagen']))
                      {
                          $Campos_Erros['pro_imagen'] = array();
                      }
                      $Campos_Erros['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                      if (!isset($this->NM_ajax_info['errList']['pro_imagen']) || !is_array($this->NM_ajax_info['errList']['pro_imagen']))
                      {
                          $this->NM_ajax_info['errList']['pro_imagen'] = array();
                      }
                      $this->NM_ajax_info['errList']['pro_imagen'][] = $this->Ini->Nm_lang['lang_errm_upld'];
                  } 
              } 
              else 
              { 
                  if ($nm_browser == "Konqueror")  
                  { 
                      $this->pro_imagen = "" ; 
                  } 
                  else 
                  { 
                      $Campos_Crit .= "" . $this->Ini->Nm_lang['lang_btns_img'] . " " . $this->Ini->Nm_lang['lang_errm_ivtp']; 
                      if (!isset($Campos_Erros['pro_imagen']))
                      {
                          $Campos_Erros['pro_imagen'] = array();
                      }
                      $Campos_Erros['pro_imagen'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                      if (!isset($this->NM_ajax_info['errList']['pro_imagen']) || !is_array($this->NM_ajax_info['errList']['pro_imagen']))
                      {
                          $this->NM_ajax_info['errList']['pro_imagen'] = array();
                      }
                      $this->NM_ajax_info['errList']['pro_imagen'][] = $this->Ini->Nm_lang['geracao_tp_inval'];
                  } 
              } 
          } 
          elseif (!empty($this->pro_imagen_salva) && $this->pro_imagen_limpa != "S")
          {
              $this->pro_imagen = $this->pro_imagen_salva;
          }
      } 
      elseif (!empty($this->pro_imagen_salva) && $this->pro_imagen_limpa != "S")
      {
          $this->pro_imagen = $this->pro_imagen_salva;
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
    if (empty($this->pro_imagen))
    {
        $this->pro_imagen = $this->nmgp_dados_form['pro_imagen'];
    }
    $this->nmgp_dados_form['pro_imagen'] = $this->pro_imagen;
    $this->nmgp_dados_form['pro_imagen_limpa'] = $this->pro_imagen_limpa;
    $this->nmgp_dados_form['pro_empresa'] = $this->pro_empresa;
    $this->nmgp_dados_form['pro_codigo'] = $this->pro_codigo;
    $this->nmgp_dados_form['pro_codigo_aux'] = $this->pro_codigo_aux;
    $this->nmgp_dados_form['pro_descripcion'] = $this->pro_descripcion;
    $this->nmgp_dados_form['pro_categoria_producto'] = $this->pro_categoria_producto;
    $this->nmgp_dados_form['pro_familia_producto'] = $this->pro_familia_producto;
    $this->nmgp_dados_form['pro_grupo_compras'] = $this->pro_grupo_compras;
    $this->nmgp_dados_form['pro_grupo_ventas'] = $this->pro_grupo_ventas;
    $this->nmgp_dados_form['pro_estado'] = $this->pro_estado;
    $this->nmgp_dados_form['pro_aplica_subsidio'] = $this->pro_aplica_subsidio;
    $this->nmgp_dados_form['pro_precio_sin_subsidio'] = $this->pro_precio_sin_subsidio;
    $this->nmgp_dados_form['pro_valor_subsidio'] = $this->pro_valor_subsidio;
    $this->nmgp_dados_form['pro_precio'] = $this->pro_precio;
    $this->nmgp_dados_form['pro_por_ice'] = $this->pro_por_ice;
    $this->nmgp_dados_form['tarifa_ice'] = $this->tarifa_ice;
    $this->nmgp_dados_form['pro_base_ice'] = $this->pro_base_ice;
    $this->nmgp_dados_form['total_ice'] = $this->total_ice;
    $this->nmgp_dados_form['pro_por_iva'] = $this->pro_por_iva;
    $this->nmgp_dados_form['tarifa_iva'] = $this->tarifa_iva;
    $this->nmgp_dados_form['base_iva'] = $this->base_iva;
    $this->nmgp_dados_form['total_iva'] = $this->total_iva;
    $this->nmgp_dados_form['pro_por_irbpnr'] = $this->pro_por_irbpnr;
    $this->nmgp_dados_form['tarifa_irbpnr'] = $this->tarifa_irbpnr;
    $this->nmgp_dados_form['pro_base_irbpnr'] = $this->pro_base_irbpnr;
    $this->nmgp_dados_form['total_irbpnr'] = $this->total_irbpnr;
    $this->nmgp_dados_form['pro_iva'] = $this->pro_iva;
    $this->nmgp_dados_form['precio_con_impuesto'] = $this->precio_con_impuesto;
    $this->nmgp_dados_form['pro_ice'] = $this->pro_ice;
    $this->nmgp_dados_form['pro_irbpnr'] = $this->pro_irbpnr;
    $this->nmgp_dados_form['pro_compra'] = $this->pro_compra;
    $this->nmgp_dados_form['pro_venta'] = $this->pro_venta;
    $this->nmgp_dados_form['pro_stock'] = $this->pro_stock;
    $this->nmgp_dados_form['pro_unidad'] = $this->pro_unidad;
    $this->nmgp_dados_form['pro_producto_debi'] = $this->pro_producto_debi;
    $this->nmgp_dados_form['pro_cta_cobrar'] = $this->pro_cta_cobrar;
    $this->nmgp_dados_form['pro_cta_puente'] = $this->pro_cta_puente;
    $this->nmgp_dados_form['pro_cta_ingreso'] = $this->pro_cta_ingreso;
    $this->nmgp_dados_form['pro_cta_cartera_vencida'] = $this->pro_cta_cartera_vencida;
    $this->nmgp_dados_form['pro_cantidad_inventario'] = $this->pro_cantidad_inventario;
    $this->nmgp_dados_form['pro_costo_promedio'] = $this->pro_costo_promedio;
    $this->nmgp_dados_form['pro_total_inventario'] = $this->pro_total_inventario;
    $this->nmgp_dados_form['pro_descuento'] = $this->pro_descuento;
    $this->nmgp_dados_form['valor_ice'] = $this->valor_ice;
    $this->nmgp_dados_form['valor_irbpnr'] = $this->valor_irbpnr;
    $this->nmgp_dados_form['valor_iva'] = $this->valor_iva;
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_form'] = $this->nmgp_dados_form;
   }
   function nm_tira_formatacao()
   {
      global $nm_form_submit;
         $this->Before_unformat = array();
         $this->formatado = false;
      $this->Before_unformat['pro_precio_sin_subsidio'] = $this->pro_precio_sin_subsidio;
      if (!empty($this->field_config['pro_precio_sin_subsidio']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_precio_sin_subsidio, $this->field_config['pro_precio_sin_subsidio']['symbol_dec'], $this->field_config['pro_precio_sin_subsidio']['symbol_grp']);
      }
      $this->Before_unformat['pro_valor_subsidio'] = $this->pro_valor_subsidio;
      if (!empty($this->field_config['pro_valor_subsidio']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_valor_subsidio, $this->field_config['pro_valor_subsidio']['symbol_dec'], $this->field_config['pro_valor_subsidio']['symbol_grp']);
      }
      $this->Before_unformat['pro_precio'] = $this->pro_precio;
      if (!empty($this->field_config['pro_precio']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_precio, $this->field_config['pro_precio']['symbol_dec'], $this->field_config['pro_precio']['symbol_grp']);
      }
      $this->Before_unformat['tarifa_ice'] = $this->tarifa_ice;
      if (!empty($this->field_config['tarifa_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->tarifa_ice, $this->field_config['tarifa_ice']['symbol_dec'], $this->field_config['tarifa_ice']['symbol_grp']);
      }
      $this->Before_unformat['pro_base_ice'] = $this->pro_base_ice;
      if (!empty($this->field_config['pro_base_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_base_ice, $this->field_config['pro_base_ice']['symbol_dec'], $this->field_config['pro_base_ice']['symbol_grp']);
      }
      $this->Before_unformat['total_ice'] = $this->total_ice;
      if (!empty($this->field_config['total_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->total_ice, $this->field_config['total_ice']['symbol_dec'], $this->field_config['total_ice']['symbol_grp']);
      }
      $this->Before_unformat['tarifa_iva'] = $this->tarifa_iva;
      if (!empty($this->field_config['tarifa_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->tarifa_iva, $this->field_config['tarifa_iva']['symbol_dec'], $this->field_config['tarifa_iva']['symbol_grp']);
      }
      $this->Before_unformat['base_iva'] = $this->base_iva;
      if (!empty($this->field_config['base_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->base_iva, $this->field_config['base_iva']['symbol_dec'], $this->field_config['base_iva']['symbol_grp']);
      }
      $this->Before_unformat['total_iva'] = $this->total_iva;
      if (!empty($this->field_config['total_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->total_iva, $this->field_config['total_iva']['symbol_dec'], $this->field_config['total_iva']['symbol_grp']);
      }
      $this->Before_unformat['tarifa_irbpnr'] = $this->tarifa_irbpnr;
      if (!empty($this->field_config['tarifa_irbpnr']['symbol_dec']))
      {
         nm_limpa_valor($this->tarifa_irbpnr, $this->field_config['tarifa_irbpnr']['symbol_dec'], $this->field_config['tarifa_irbpnr']['symbol_grp']);
      }
      $this->Before_unformat['pro_base_irbpnr'] = $this->pro_base_irbpnr;
      if (!empty($this->field_config['pro_base_irbpnr']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_base_irbpnr, $this->field_config['pro_base_irbpnr']['symbol_dec'], $this->field_config['pro_base_irbpnr']['symbol_grp']);
      }
      $this->Before_unformat['total_irbpnr'] = $this->total_irbpnr;
      if (!empty($this->field_config['total_irbpnr']['symbol_dec']))
      {
         nm_limpa_valor($this->total_irbpnr, $this->field_config['total_irbpnr']['symbol_dec'], $this->field_config['total_irbpnr']['symbol_grp']);
      }
      $this->Before_unformat['precio_con_impuesto'] = $this->precio_con_impuesto;
      if (!empty($this->field_config['precio_con_impuesto']['symbol_dec']))
      {
         nm_limpa_valor($this->precio_con_impuesto, $this->field_config['precio_con_impuesto']['symbol_dec'], $this->field_config['precio_con_impuesto']['symbol_grp']);
      }
      $this->Before_unformat['pro_cta_cartera_vencida'] = $this->pro_cta_cartera_vencida;
      nm_limpa_numero($this->pro_cta_cartera_vencida, $this->field_config['pro_cta_cartera_vencida']['symbol_grp']) ; 
      $this->Before_unformat['pro_cantidad_inventario'] = $this->pro_cantidad_inventario;
      if (!empty($this->field_config['pro_cantidad_inventario']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_cantidad_inventario, $this->field_config['pro_cantidad_inventario']['symbol_dec'], $this->field_config['pro_cantidad_inventario']['symbol_grp']);
      }
      $this->Before_unformat['pro_costo_promedio'] = $this->pro_costo_promedio;
      if (!empty($this->field_config['pro_costo_promedio']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_costo_promedio, $this->field_config['pro_costo_promedio']['symbol_dec'], $this->field_config['pro_costo_promedio']['symbol_grp']);
      }
      $this->Before_unformat['pro_total_inventario'] = $this->pro_total_inventario;
      if (!empty($this->field_config['pro_total_inventario']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_total_inventario, $this->field_config['pro_total_inventario']['symbol_dec'], $this->field_config['pro_total_inventario']['symbol_grp']);
      }
      $this->Before_unformat['pro_descuento'] = $this->pro_descuento;
      if (!empty($this->field_config['pro_descuento']['symbol_dec']))
      {
         nm_limpa_valor($this->pro_descuento, $this->field_config['pro_descuento']['symbol_dec'], $this->field_config['pro_descuento']['symbol_grp']);
      }
      $this->Before_unformat['valor_ice'] = $this->valor_ice;
      if (!empty($this->field_config['valor_ice']['symbol_dec']))
      {
         nm_limpa_valor($this->valor_ice, $this->field_config['valor_ice']['symbol_dec'], $this->field_config['valor_ice']['symbol_grp']);
      }
      $this->Before_unformat['valor_irbpnr'] = $this->valor_irbpnr;
      if (!empty($this->field_config['valor_irbpnr']['symbol_dec']))
      {
         nm_limpa_valor($this->valor_irbpnr, $this->field_config['valor_irbpnr']['symbol_dec'], $this->field_config['valor_irbpnr']['symbol_grp']);
      }
      $this->Before_unformat['valor_iva'] = $this->valor_iva;
      if (!empty($this->field_config['valor_iva']['symbol_dec']))
      {
         nm_limpa_valor($this->valor_iva, $this->field_config['valor_iva']['symbol_dec'], $this->field_config['valor_iva']['symbol_grp']);
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
      if ($Nome_Campo == "pro_precio_sin_subsidio")
      {
          if (!empty($this->field_config['pro_precio_sin_subsidio']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_precio_sin_subsidio, $this->field_config['pro_precio_sin_subsidio']['symbol_dec'], $this->field_config['pro_precio_sin_subsidio']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_valor_subsidio")
      {
          if (!empty($this->field_config['pro_valor_subsidio']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_valor_subsidio, $this->field_config['pro_valor_subsidio']['symbol_dec'], $this->field_config['pro_valor_subsidio']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_precio")
      {
          if (!empty($this->field_config['pro_precio']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_precio, $this->field_config['pro_precio']['symbol_dec'], $this->field_config['pro_precio']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "tarifa_ice")
      {
          if (!empty($this->field_config['tarifa_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->tarifa_ice, $this->field_config['tarifa_ice']['symbol_dec'], $this->field_config['tarifa_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_base_ice")
      {
          if (!empty($this->field_config['pro_base_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_base_ice, $this->field_config['pro_base_ice']['symbol_dec'], $this->field_config['pro_base_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "total_ice")
      {
          if (!empty($this->field_config['total_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->total_ice, $this->field_config['total_ice']['symbol_dec'], $this->field_config['total_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "tarifa_iva")
      {
          if (!empty($this->field_config['tarifa_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->tarifa_iva, $this->field_config['tarifa_iva']['symbol_dec'], $this->field_config['tarifa_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "base_iva")
      {
          if (!empty($this->field_config['base_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->base_iva, $this->field_config['base_iva']['symbol_dec'], $this->field_config['base_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "total_iva")
      {
          if (!empty($this->field_config['total_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->total_iva, $this->field_config['total_iva']['symbol_dec'], $this->field_config['total_iva']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "tarifa_irbpnr")
      {
          if (!empty($this->field_config['tarifa_irbpnr']['symbol_dec']))
          {
             nm_limpa_valor($this->tarifa_irbpnr, $this->field_config['tarifa_irbpnr']['symbol_dec'], $this->field_config['tarifa_irbpnr']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_base_irbpnr")
      {
          if (!empty($this->field_config['pro_base_irbpnr']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_base_irbpnr, $this->field_config['pro_base_irbpnr']['symbol_dec'], $this->field_config['pro_base_irbpnr']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "total_irbpnr")
      {
          if (!empty($this->field_config['total_irbpnr']['symbol_dec']))
          {
             nm_limpa_valor($this->total_irbpnr, $this->field_config['total_irbpnr']['symbol_dec'], $this->field_config['total_irbpnr']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "precio_con_impuesto")
      {
          if (!empty($this->field_config['precio_con_impuesto']['symbol_dec']))
          {
             nm_limpa_valor($this->precio_con_impuesto, $this->field_config['precio_con_impuesto']['symbol_dec'], $this->field_config['precio_con_impuesto']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_cta_cartera_vencida")
      {
          nm_limpa_numero($this->pro_cta_cartera_vencida, $this->field_config['pro_cta_cartera_vencida']['symbol_grp']) ; 
      }
      if ($Nome_Campo == "pro_cantidad_inventario")
      {
          if (!empty($this->field_config['pro_cantidad_inventario']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_cantidad_inventario, $this->field_config['pro_cantidad_inventario']['symbol_dec'], $this->field_config['pro_cantidad_inventario']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_costo_promedio")
      {
          if (!empty($this->field_config['pro_costo_promedio']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_costo_promedio, $this->field_config['pro_costo_promedio']['symbol_dec'], $this->field_config['pro_costo_promedio']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_total_inventario")
      {
          if (!empty($this->field_config['pro_total_inventario']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_total_inventario, $this->field_config['pro_total_inventario']['symbol_dec'], $this->field_config['pro_total_inventario']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "pro_descuento")
      {
          if (!empty($this->field_config['pro_descuento']['symbol_dec']))
          {
             nm_limpa_valor($this->pro_descuento, $this->field_config['pro_descuento']['symbol_dec'], $this->field_config['pro_descuento']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "valor_ice")
      {
          if (!empty($this->field_config['valor_ice']['symbol_dec']))
          {
             nm_limpa_valor($this->valor_ice, $this->field_config['valor_ice']['symbol_dec'], $this->field_config['valor_ice']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "valor_irbpnr")
      {
          if (!empty($this->field_config['valor_irbpnr']['symbol_dec']))
          {
             nm_limpa_valor($this->valor_irbpnr, $this->field_config['valor_irbpnr']['symbol_dec'], $this->field_config['valor_irbpnr']['symbol_grp']);
          }
      }
      if ($Nome_Campo == "valor_iva")
      {
          if (!empty($this->field_config['valor_iva']['symbol_dec']))
          {
             nm_limpa_valor($this->valor_iva, $this->field_config['valor_iva']['symbol_dec'], $this->field_config['valor_iva']['symbol_grp']);
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
      if ('' !== $this->pro_precio_sin_subsidio || (!empty($format_fields) && isset($format_fields['pro_precio_sin_subsidio'])))
      {
          nmgp_Form_Num_Val($this->pro_precio_sin_subsidio, $this->field_config['pro_precio_sin_subsidio']['symbol_grp'], $this->field_config['pro_precio_sin_subsidio']['symbol_dec'], "2", "S", $this->field_config['pro_precio_sin_subsidio']['format_neg'], "", "", "-", $this->field_config['pro_precio_sin_subsidio']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_valor_subsidio || (!empty($format_fields) && isset($format_fields['pro_valor_subsidio'])))
      {
          nmgp_Form_Num_Val($this->pro_valor_subsidio, $this->field_config['pro_valor_subsidio']['symbol_grp'], $this->field_config['pro_valor_subsidio']['symbol_dec'], "2", "S", $this->field_config['pro_valor_subsidio']['format_neg'], "", "", "-", $this->field_config['pro_valor_subsidio']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_precio || (!empty($format_fields) && isset($format_fields['pro_precio'])))
      {
          nmgp_Form_Num_Val($this->pro_precio, $this->field_config['pro_precio']['symbol_grp'], $this->field_config['pro_precio']['symbol_dec'], "6", "S", $this->field_config['pro_precio']['format_neg'], "", "", "-", $this->field_config['pro_precio']['symbol_fmt']) ; 
      }
      if ('' !== $this->tarifa_ice || (!empty($format_fields) && isset($format_fields['tarifa_ice'])))
      {
          nmgp_Form_Num_Val($this->tarifa_ice, $this->field_config['tarifa_ice']['symbol_grp'], $this->field_config['tarifa_ice']['symbol_dec'], "2", "S", $this->field_config['tarifa_ice']['format_neg'], "", "", "-", $this->field_config['tarifa_ice']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_base_ice || (!empty($format_fields) && isset($format_fields['pro_base_ice'])))
      {
          nmgp_Form_Num_Val($this->pro_base_ice, $this->field_config['pro_base_ice']['symbol_grp'], $this->field_config['pro_base_ice']['symbol_dec'], "6", "S", $this->field_config['pro_base_ice']['format_neg'], "", "", "-", $this->field_config['pro_base_ice']['symbol_fmt']) ; 
      }
      if ('' !== $this->total_ice || (!empty($format_fields) && isset($format_fields['total_ice'])))
      {
          nmgp_Form_Num_Val($this->total_ice, $this->field_config['total_ice']['symbol_grp'], $this->field_config['total_ice']['symbol_dec'], "2", "S", $this->field_config['total_ice']['format_neg'], "", "", "-", $this->field_config['total_ice']['symbol_fmt']) ; 
      }
      if ('' !== $this->tarifa_iva || (!empty($format_fields) && isset($format_fields['tarifa_iva'])))
      {
          nmgp_Form_Num_Val($this->tarifa_iva, $this->field_config['tarifa_iva']['symbol_grp'], $this->field_config['tarifa_iva']['symbol_dec'], "2", "S", $this->field_config['tarifa_iva']['format_neg'], "", "", "-", $this->field_config['tarifa_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->base_iva || (!empty($format_fields) && isset($format_fields['base_iva'])))
      {
          nmgp_Form_Num_Val($this->base_iva, $this->field_config['base_iva']['symbol_grp'], $this->field_config['base_iva']['symbol_dec'], "2", "S", $this->field_config['base_iva']['format_neg'], "", "", "-", $this->field_config['base_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->total_iva || (!empty($format_fields) && isset($format_fields['total_iva'])))
      {
          nmgp_Form_Num_Val($this->total_iva, $this->field_config['total_iva']['symbol_grp'], $this->field_config['total_iva']['symbol_dec'], "2", "S", $this->field_config['total_iva']['format_neg'], "", "", "-", $this->field_config['total_iva']['symbol_fmt']) ; 
      }
      if ('' !== $this->tarifa_irbpnr || (!empty($format_fields) && isset($format_fields['tarifa_irbpnr'])))
      {
          nmgp_Form_Num_Val($this->tarifa_irbpnr, $this->field_config['tarifa_irbpnr']['symbol_grp'], $this->field_config['tarifa_irbpnr']['symbol_dec'], "2", "S", $this->field_config['tarifa_irbpnr']['format_neg'], "", "", "-", $this->field_config['tarifa_irbpnr']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_base_irbpnr || (!empty($format_fields) && isset($format_fields['pro_base_irbpnr'])))
      {
          nmgp_Form_Num_Val($this->pro_base_irbpnr, $this->field_config['pro_base_irbpnr']['symbol_grp'], $this->field_config['pro_base_irbpnr']['symbol_dec'], "5", "S", $this->field_config['pro_base_irbpnr']['format_neg'], "", "", "-", $this->field_config['pro_base_irbpnr']['symbol_fmt']) ; 
      }
      if ('' !== $this->total_irbpnr || (!empty($format_fields) && isset($format_fields['total_irbpnr'])))
      {
          nmgp_Form_Num_Val($this->total_irbpnr, $this->field_config['total_irbpnr']['symbol_grp'], $this->field_config['total_irbpnr']['symbol_dec'], "2", "S", $this->field_config['total_irbpnr']['format_neg'], "", "", "-", $this->field_config['total_irbpnr']['symbol_fmt']) ; 
      }
      if ('' !== $this->precio_con_impuesto || (!empty($format_fields) && isset($format_fields['precio_con_impuesto'])))
      {
          nmgp_Form_Num_Val($this->precio_con_impuesto, $this->field_config['precio_con_impuesto']['symbol_grp'], $this->field_config['precio_con_impuesto']['symbol_dec'], "2", "S", $this->field_config['precio_con_impuesto']['format_neg'], "", "", "-", $this->field_config['precio_con_impuesto']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_cta_cartera_vencida || (!empty($format_fields) && isset($format_fields['pro_cta_cartera_vencida'])))
      {
          nmgp_Form_Num_Val($this->pro_cta_cartera_vencida, $this->field_config['pro_cta_cartera_vencida']['symbol_grp'], $this->field_config['pro_cta_cartera_vencida']['symbol_dec'], "0", "S", $this->field_config['pro_cta_cartera_vencida']['format_neg'], "", "", "-", $this->field_config['pro_cta_cartera_vencida']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_cantidad_inventario || (!empty($format_fields) && isset($format_fields['pro_cantidad_inventario'])))
      {
          nmgp_Form_Num_Val($this->pro_cantidad_inventario, $this->field_config['pro_cantidad_inventario']['symbol_grp'], $this->field_config['pro_cantidad_inventario']['symbol_dec'], "5", "S", $this->field_config['pro_cantidad_inventario']['format_neg'], "", "", "-", $this->field_config['pro_cantidad_inventario']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_costo_promedio || (!empty($format_fields) && isset($format_fields['pro_costo_promedio'])))
      {
          nmgp_Form_Num_Val($this->pro_costo_promedio, $this->field_config['pro_costo_promedio']['symbol_grp'], $this->field_config['pro_costo_promedio']['symbol_dec'], "4", "S", $this->field_config['pro_costo_promedio']['format_neg'], "", "", "-", $this->field_config['pro_costo_promedio']['symbol_fmt']) ; 
      }
      if ('' !== $this->pro_total_inventario || (!empty($format_fields) && isset($format_fields['pro_total_inventario'])))
      {
          nmgp_Form_Num_Val($this->pro_total_inventario, $this->field_config['pro_total_inventario']['symbol_grp'], $this->field_config['pro_total_inventario']['symbol_dec'], "2", "S", $this->field_config['pro_total_inventario']['format_neg'], "", "", "-", $this->field_config['pro_total_inventario']['symbol_fmt']) ; 
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
          $this->ajax_return_values_pro_imagen();
          $this->ajax_return_values_pro_empresa();
          $this->ajax_return_values_pro_codigo();
          $this->ajax_return_values_pro_codigo_aux();
          $this->ajax_return_values_pro_descripcion();
          $this->ajax_return_values_pro_categoria_producto();
          $this->ajax_return_values_pro_familia_producto();
          $this->ajax_return_values_pro_grupo_compras();
          $this->ajax_return_values_pro_grupo_ventas();
          $this->ajax_return_values_pro_estado();
          $this->ajax_return_values_pro_aplica_subsidio();
          $this->ajax_return_values_pro_precio_sin_subsidio();
          $this->ajax_return_values_pro_valor_subsidio();
          $this->ajax_return_values_pro_precio();
          $this->ajax_return_values_pro_por_ice();
          $this->ajax_return_values_tarifa_ice();
          $this->ajax_return_values_pro_base_ice();
          $this->ajax_return_values_total_ice();
          $this->ajax_return_values_pro_por_iva();
          $this->ajax_return_values_tarifa_iva();
          $this->ajax_return_values_base_iva();
          $this->ajax_return_values_total_iva();
          $this->ajax_return_values_pro_por_irbpnr();
          $this->ajax_return_values_tarifa_irbpnr();
          $this->ajax_return_values_pro_base_irbpnr();
          $this->ajax_return_values_total_irbpnr();
          $this->ajax_return_values_pro_iva();
          $this->ajax_return_values_precio_con_impuesto();
          $this->ajax_return_values_pro_ice();
          $this->ajax_return_values_pro_irbpnr();
          $this->ajax_return_values_pro_compra();
          $this->ajax_return_values_pro_venta();
          $this->ajax_return_values_pro_stock();
          $this->ajax_return_values_pro_unidad();
          $this->ajax_return_values_pro_producto_debi();
          $this->ajax_return_values_pro_cta_cobrar();
          $this->ajax_return_values_pro_cta_puente();
          $this->ajax_return_values_pro_cta_ingreso();
          $this->ajax_return_values_pro_cta_cartera_vencida();
          $this->ajax_return_values_pro_cantidad_inventario();
          $this->ajax_return_values_pro_costo_promedio();
          $this->ajax_return_values_pro_total_inventario();
          if ('navigate_form' == $this->NM_ajax_opcao)
          {
              $this->NM_ajax_info['clearUpload']      = 'S';
              $this->NM_ajax_info['navStatus']['ret'] = $this->Nav_permite_ret ? 'S' : 'N';
              $this->NM_ajax_info['navStatus']['ava'] = $this->Nav_permite_ava ? 'S' : 'N';
              $this->NM_ajax_info['fldList']['pro_codigo']['keyVal'] = form_del_producto_pack_protect_string($this->nmgp_dados_form['pro_codigo']);
              $this->NM_ajax_info['fldList']['pro_empresa']['keyVal'] = form_del_producto_pack_protect_string($this->nmgp_dados_form['pro_empresa']);
          }
   } // ajax_return_values

          //----- pro_imagen
   function ajax_return_values_pro_imagen($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_imagen", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_imagen);
              $aLookup = array();
   $out_pro_imagen = '';
   $out1_pro_imagen = '';
   if ($this->pro_imagen != "" && $this->pro_imagen != "none")   
   { 
       $path_pro_imagen = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->pro_imagen;
       $md5_pro_imagen  = md5("/" . $_SESSION['Igtech_RucEmpresa'] . $this->pro_imagen);
       nm_fix_SubDirUpload($this->pro_imagen,$this->Ini->root . $this->Ini->path_imagens,"/" . $_SESSION['Igtech_RucEmpresa']);
        if (is_file($path_pro_imagen))  
       { 
           $NM_ler_img = true;
           $out_pro_imagen = $this->Ini->path_imag_temp . "/sc_pro_imagen_" . $md5_pro_imagen . ".gif" ;  
           $out1_pro_imagen = $out_pro_imagen; 
           if (is_file($this->Ini->root . $out_pro_imagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_pro_imagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_pro_imagen = fopen($path_pro_imagen, "r") ; 
               $reg_pro_imagen = fread($tmp_pro_imagen, filesize($path_pro_imagen)) ; 
               fclose($tmp_pro_imagen) ;  
               $arq_pro_imagen = fopen($this->Ini->root . $out_pro_imagen, "w") ;  
               fwrite($arq_pro_imagen, $reg_pro_imagen) ;  
               fclose($arq_pro_imagen) ;  
           } 
           $NM_redim_img = true;
           $md5_pro_imagen  = md5($this->pro_imagen);
           $out_pro_imagen = $this->Ini->path_imag_temp . "/sc_pro_imagen_200200" . $md5_pro_imagen . ".gif" ;  
           if (is_file($this->Ini->root . $out_pro_imagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_pro_imagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_pro_imagen, true);
                   $sc_obj_img->setWidth(200);
                   $sc_obj_img->setHeight(200);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_pro_imagen);
               } 
               else 
               { 
                   $out_pro_imagen = $out1_pro_imagen;
               } 
           } 
       } 
   } 
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_imagen'] = array(
                       'row'    => '',
               'type'    => 'imagem',
               'valList' => array($sTmpValue),
               'imgFile' => $out_pro_imagen,
               'imgOrig' => $out1_pro_imagen,
               'keepImg' => $sKeepImage,
               'hideName' => 'S',
              );
          }
   }

          //----- pro_empresa
   function ajax_return_values_pro_empresa($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_empresa", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_empresa);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_empresa'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($this->form_encode_input($sTmpValue)),
               'labList' => array($this->form_format_readonly("pro_empresa", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- pro_codigo
   function ajax_return_values_pro_codigo($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_codigo", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_codigo);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_codigo'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($this->form_encode_input($sTmpValue)),
               'labList' => array($this->form_format_readonly("pro_codigo", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- pro_codigo_aux
   function ajax_return_values_pro_codigo_aux($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_codigo_aux", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_codigo_aux);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_codigo_aux'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pro_descripcion
   function ajax_return_values_pro_descripcion($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_descripcion", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_descripcion);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_descripcion'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
          }
   }

          //----- pro_categoria_producto
   function ajax_return_values_pro_categoria_producto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_categoria_producto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_categoria_producto);
              $aLookup = array();
              $this->_tmp_lookup_pro_categoria_producto = $this->pro_categoria_producto;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT cat_id, cat_descripcion  FROM del_categoria_producto  WHERE cat_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cat_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_categoria_producto\"";
          if (isset($this->NM_ajax_info['select_html']['pro_categoria_producto']) && !empty($this->NM_ajax_info['select_html']['pro_categoria_producto']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_categoria_producto']);
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

                  if ($this->pro_categoria_producto == $sValue)
                  {
                      $this->_tmp_lookup_pro_categoria_producto = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_categoria_producto'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_categoria_producto']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_categoria_producto']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_categoria_producto']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_categoria_producto']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_categoria_producto']['labList'] = $aLabel;
          }
   }

          //----- pro_familia_producto
   function ajax_return_values_pro_familia_producto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_familia_producto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_familia_producto);
              $aLookup = array();
              $this->_tmp_lookup_pro_familia_producto = $this->pro_familia_producto;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_familia_productos  ORDER BY fp_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_familia_producto\"";
          if (isset($this->NM_ajax_info['select_html']['pro_familia_producto']) && !empty($this->NM_ajax_info['select_html']['pro_familia_producto']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_familia_producto']);
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

                  if ($this->pro_familia_producto == $sValue)
                  {
                      $this->_tmp_lookup_pro_familia_producto = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_familia_producto'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_familia_producto']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_familia_producto']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_familia_producto']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_familia_producto']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_familia_producto']['labList'] = $aLabel;
          }
   }

          //----- pro_grupo_compras
   function ajax_return_values_pro_grupo_compras($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_grupo_compras", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_grupo_compras);
              $aLookup = array();
              $this->_tmp_lookup_pro_grupo_compras = $this->pro_grupo_compras;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT gpc_id, gpc_descripcion  FROM v_del_grupo_productos_compras  where gpc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY gpc_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_grupo_compras\"";
          if (isset($this->NM_ajax_info['select_html']['pro_grupo_compras']) && !empty($this->NM_ajax_info['select_html']['pro_grupo_compras']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_grupo_compras']);
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

                  if ($this->pro_grupo_compras == $sValue)
                  {
                      $this->_tmp_lookup_pro_grupo_compras = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_grupo_compras'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_grupo_compras']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_grupo_compras']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_grupo_compras']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_grupo_compras']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_grupo_compras']['labList'] = $aLabel;
          }
   }

          //----- pro_grupo_ventas
   function ajax_return_values_pro_grupo_ventas($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_grupo_ventas", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_grupo_ventas);
              $aLookup = array();
              $this->_tmp_lookup_pro_grupo_ventas = $this->pro_grupo_ventas;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT gpv_id, gpv_descripcion  FROM v_del_grupo_productos_ventas  where gpv_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY gpv_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_grupo_ventas\"";
          if (isset($this->NM_ajax_info['select_html']['pro_grupo_ventas']) && !empty($this->NM_ajax_info['select_html']['pro_grupo_ventas']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_grupo_ventas']);
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

                  if ($this->pro_grupo_ventas == $sValue)
                  {
                      $this->_tmp_lookup_pro_grupo_ventas = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_grupo_ventas'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_grupo_ventas']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_grupo_ventas']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_grupo_ventas']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_grupo_ventas']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_grupo_ventas']['labList'] = $aLabel;
          }
   }

          //----- pro_estado
   function ajax_return_values_pro_estado($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_estado", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_estado);
              $aLookup = array();
              $this->_tmp_lookup_pro_estado = $this->pro_estado;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_fac_estado_producto  ORDER BY dec_nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_estado\"";
          if (isset($this->NM_ajax_info['select_html']['pro_estado']) && !empty($this->NM_ajax_info['select_html']['pro_estado']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_estado']);
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

                  if ($this->pro_estado == $sValue)
                  {
                      $this->_tmp_lookup_pro_estado = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_estado'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_estado']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_estado']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_estado']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_estado']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_estado']['labList'] = $aLabel;
          }
   }

          //----- pro_aplica_subsidio
   function ajax_return_values_pro_aplica_subsidio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_aplica_subsidio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_aplica_subsidio);
              $aLookup = array();
              $this->_tmp_lookup_pro_aplica_subsidio = $this->pro_aplica_subsidio;

$aLookup[] = array(form_del_producto_pack_protect_string('S') => str_replace('<', '&lt;',form_del_producto_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_aplica_subsidio'][] = 'S';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['pro_aplica_subsidio']) && !empty($this->NM_ajax_info['select_html']['pro_aplica_subsidio']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_aplica_subsidio']);
          }
          $this->NM_ajax_info['fldList']['pro_aplica_subsidio'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => true,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-pro_aplica_subsidio',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_aplica_subsidio']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_aplica_subsidio']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_aplica_subsidio']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_aplica_subsidio']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_aplica_subsidio']['labList'] = $aLabel;
          }
   }

          //----- pro_precio_sin_subsidio
   function ajax_return_values_pro_precio_sin_subsidio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_precio_sin_subsidio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_precio_sin_subsidio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_precio_sin_subsidio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_valor_subsidio
   function ajax_return_values_pro_valor_subsidio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_valor_subsidio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_valor_subsidio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_valor_subsidio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_precio
   function ajax_return_values_pro_precio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_precio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_precio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_precio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_por_ice
   function ajax_return_values_pro_por_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_por_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_por_ice);
              $aLookup = array();
              $this->_tmp_lookup_pro_por_ice = $this->pro_por_ice;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('0') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'][] = '0';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT ice_id,ice_codigo||'-'|| ice_descripcion  FROM sri_tarifa_ice WHERE ice_estado='V'  ORDER BY ice_codigo,ice_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_por_ice\"";
          if (isset($this->NM_ajax_info['select_html']['pro_por_ice']) && !empty($this->NM_ajax_info['select_html']['pro_por_ice']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_por_ice']);
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

                  if ($this->pro_por_ice == $sValue)
                  {
                      $this->_tmp_lookup_pro_por_ice = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_por_ice'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_por_ice']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_por_ice']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_por_ice']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_por_ice']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_por_ice']['labList'] = $aLabel;
          }
   }

          //----- tarifa_ice
   function ajax_return_values_tarifa_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tarifa_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tarifa_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tarifa_ice'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("tarifa_ice", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- pro_base_ice
   function ajax_return_values_pro_base_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_base_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_base_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_base_ice'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- total_ice
   function ajax_return_values_total_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("total_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->total_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['total_ice'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_por_iva
   function ajax_return_values_pro_por_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_por_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_por_iva);
              $aLookup = array();
              $this->_tmp_lookup_pro_por_iva = $this->pro_por_iva;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT iva_codigo, iva_descripcion  FROM sri_tarifa_iva  WHERE iva_estado='V' ORDER BY iva_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_por_iva\"";
          if (isset($this->NM_ajax_info['select_html']['pro_por_iva']) && !empty($this->NM_ajax_info['select_html']['pro_por_iva']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_por_iva']);
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

                  if ($this->pro_por_iva == $sValue)
                  {
                      $this->_tmp_lookup_pro_por_iva = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_por_iva'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_por_iva']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_por_iva']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_por_iva']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_por_iva']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_por_iva']['labList'] = $aLabel;
          }
   }

          //----- tarifa_iva
   function ajax_return_values_tarifa_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tarifa_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tarifa_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tarifa_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- base_iva
   function ajax_return_values_base_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("base_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->base_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['base_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- total_iva
   function ajax_return_values_total_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("total_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->total_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['total_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_por_irbpnr
   function ajax_return_values_pro_por_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_por_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_por_irbpnr);
              $aLookup = array();
              $this->_tmp_lookup_pro_por_irbpnr = $this->pro_por_irbpnr;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('0') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'][] = '0';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT irbpnr_codigo, irbpnr_descripcion  FROM sri_tarifa_irbpnr  ORDER BY irbpnr_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_por_irbpnr\"";
          if (isset($this->NM_ajax_info['select_html']['pro_por_irbpnr']) && !empty($this->NM_ajax_info['select_html']['pro_por_irbpnr']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_por_irbpnr']);
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

                  if ($this->pro_por_irbpnr == $sValue)
                  {
                      $this->_tmp_lookup_pro_por_irbpnr = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_por_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_por_irbpnr']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_por_irbpnr']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_por_irbpnr']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_por_irbpnr']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_por_irbpnr']['labList'] = $aLabel;
          }
   }

          //----- tarifa_irbpnr
   function ajax_return_values_tarifa_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("tarifa_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->tarifa_irbpnr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['tarifa_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'label',
               'valList' => array($sTmpValue),
               'labList' => array($this->form_format_readonly("tarifa_irbpnr", $this->form_encode_input($sTmpValue))),
              );
          }
   }

          //----- pro_base_irbpnr
   function ajax_return_values_pro_base_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_base_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_base_irbpnr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_base_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- total_irbpnr
   function ajax_return_values_total_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("total_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->total_irbpnr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['total_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_iva
   function ajax_return_values_pro_iva($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_iva", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_iva);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_iva'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
              $orig_pro_iva = $this->pro_iva;
              $pro_iva      = $this->pro_iva;
              $this->pro_iva = $pro_iva;
              $this->lookup_pro_iva($conteudo);
              $this->pro_iva = $orig_pro_iva;
              $this->NM_ajax_info['fldList']['pro_iva']['lookupCons'] = form_del_producto_pack_protect_string(NM_charset_to_utf8($conteudo));
          }
   }

          //----- precio_con_impuesto
   function ajax_return_values_precio_con_impuesto($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("precio_con_impuesto", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->precio_con_impuesto);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['precio_con_impuesto'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_ice
   function ajax_return_values_pro_ice($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_ice", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_ice);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_ice'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
              $orig_pro_ice = $this->pro_ice;
              $pro_ice      = $this->pro_ice;
              $this->pro_ice = $pro_ice;
              $this->lookup_pro_ice($conteudo);
              $this->pro_ice = $orig_pro_ice;
              $this->NM_ajax_info['fldList']['pro_ice']['lookupCons'] = form_del_producto_pack_protect_string(NM_charset_to_utf8($conteudo));
          }
   }

          //----- pro_irbpnr
   function ajax_return_values_pro_irbpnr($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_irbpnr", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_irbpnr);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_irbpnr'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($this->form_encode_input($sTmpValue)),
              );
              $orig_pro_irbpnr = $this->pro_irbpnr;
              $pro_irbpnr      = $this->pro_irbpnr;
              $this->pro_irbpnr = $pro_irbpnr;
              $this->lookup_pro_irbpnr($conteudo);
              $this->pro_irbpnr = $orig_pro_irbpnr;
              $this->NM_ajax_info['fldList']['pro_irbpnr']['lookupCons'] = form_del_producto_pack_protect_string(NM_charset_to_utf8($conteudo));
          }
   }

          //----- pro_compra
   function ajax_return_values_pro_compra($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_compra", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_compra);
              $aLookup = array();
              $this->_tmp_lookup_pro_compra = $this->pro_compra;

$aLookup[] = array(form_del_producto_pack_protect_string('S') => str_replace('<', '&lt;',form_del_producto_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_compra'][] = 'S';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['pro_compra']) && !empty($this->NM_ajax_info['select_html']['pro_compra']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_compra']);
          }
          $this->NM_ajax_info['fldList']['pro_compra'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => true,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-pro_compra',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_compra']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_compra']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_compra']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_compra']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_compra']['labList'] = $aLabel;
          }
   }

          //----- pro_venta
   function ajax_return_values_pro_venta($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_venta", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_venta);
              $aLookup = array();
              $this->_tmp_lookup_pro_venta = $this->pro_venta;

$aLookup[] = array(form_del_producto_pack_protect_string('S') => str_replace('<', '&lt;',form_del_producto_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_venta'][] = 'S';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['pro_venta']) && !empty($this->NM_ajax_info['select_html']['pro_venta']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_venta']);
          }
          $this->NM_ajax_info['fldList']['pro_venta'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => true,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-pro_venta',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_venta']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_venta']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_venta']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_venta']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_venta']['labList'] = $aLabel;
          }
   }

          //----- pro_stock
   function ajax_return_values_pro_stock($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_stock", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_stock);
              $aLookup = array();
              $this->_tmp_lookup_pro_stock = $this->pro_stock;

$aLookup[] = array(form_del_producto_pack_protect_string('S') => str_replace('<', '&lt;',form_del_producto_pack_protect_string("")));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_stock'][] = 'S';
          $aLookupOrig = $aLookup;
          $sOptComp = "";
          if (isset($this->NM_ajax_info['select_html']['pro_stock']) && !empty($this->NM_ajax_info['select_html']['pro_stock']))
          {
              $sOptComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_stock']);
          }
          $this->NM_ajax_info['fldList']['pro_stock'] = array(
                       'row'    => '',
               'type'    => 'checkbox',
               'switch'  => true,
               'valList' => explode(';', $sTmpValue),
               'colNum'  => 1,
               'optComp'  => $sOptComp,
               'optClass' => 'sc-ui-checkbox-pro_stock',
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_stock']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_stock']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_stock']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_stock']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_stock']['labList'] = $aLabel;
          }
   }

          //----- pro_unidad
   function ajax_return_values_pro_unidad($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_unidad", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_unidad);
              $aLookup = array();
              $this->_tmp_lookup_pro_unidad = $this->pro_unidad;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT uni_id, uni_nombre  FROM inv_unidad  WHERE uni_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY uni_nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_unidad\"";
          if (isset($this->NM_ajax_info['select_html']['pro_unidad']) && !empty($this->NM_ajax_info['select_html']['pro_unidad']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_unidad']);
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

                  if ($this->pro_unidad == $sValue)
                  {
                      $this->_tmp_lookup_pro_unidad = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_unidad'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_unidad']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_unidad']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_unidad']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_unidad']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_unidad']['labList'] = $aLabel;
          }
   }

          //----- pro_producto_debi
   function ajax_return_values_pro_producto_debi($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_producto_debi", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_producto_debi);
              $aLookup = array();
              $this->_tmp_lookup_pro_producto_debi = $this->pro_producto_debi;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_grupos_productos_ventas, nombre  FROM grupo_producto_venta  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " ORDER BY nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_producto_debi\"";
          if (isset($this->NM_ajax_info['select_html']['pro_producto_debi']) && !empty($this->NM_ajax_info['select_html']['pro_producto_debi']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_producto_debi']);
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

                  if ($this->pro_producto_debi == $sValue)
                  {
                      $this->_tmp_lookup_pro_producto_debi = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_producto_debi'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_producto_debi']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_producto_debi']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_producto_debi']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_producto_debi']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_producto_debi']['labList'] = $aLabel;
          }
   }

          //----- pro_cta_cobrar
   function ajax_return_values_pro_cta_cobrar($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_cta_cobrar", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_cta_cobrar);
              $aLookup = array();
              $this->_tmp_lookup_pro_cta_cobrar = $this->pro_cta_cobrar;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_plan_cuentas, codigo||' - '|| nombre  FROM plan_cuentas  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " and empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY codigo, nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_cta_cobrar\"";
          if (isset($this->NM_ajax_info['select_html']['pro_cta_cobrar']) && !empty($this->NM_ajax_info['select_html']['pro_cta_cobrar']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_cta_cobrar']);
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

                  if ($this->pro_cta_cobrar == $sValue)
                  {
                      $this->_tmp_lookup_pro_cta_cobrar = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_cta_cobrar'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_cta_cobrar']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_cta_cobrar']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_cta_cobrar']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_cta_cobrar']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_cta_cobrar']['labList'] = $aLabel;
          }
   }

          //----- pro_cta_puente
   function ajax_return_values_pro_cta_puente($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_cta_puente", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_cta_puente);
              $aLookup = array();
              $this->_tmp_lookup_pro_cta_puente = $this->pro_cta_puente;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_plan_cuentas, codigo||' - '|| nombre  FROM plan_cuentas  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " and empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY codigo, nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_cta_puente\"";
          if (isset($this->NM_ajax_info['select_html']['pro_cta_puente']) && !empty($this->NM_ajax_info['select_html']['pro_cta_puente']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_cta_puente']);
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

                  if ($this->pro_cta_puente == $sValue)
                  {
                      $this->_tmp_lookup_pro_cta_puente = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_cta_puente'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_cta_puente']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_cta_puente']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_cta_puente']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_cta_puente']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_cta_puente']['labList'] = $aLabel;
          }
   }

          //----- pro_cta_ingreso
   function ajax_return_values_pro_cta_ingreso($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_cta_ingreso", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_cta_ingreso);
              $aLookup = array();
              $this->_tmp_lookup_pro_cta_ingreso = $this->pro_cta_ingreso;

 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'] = array(); 
}
$aLookup[] = array(form_del_producto_pack_protect_string('') => str_replace('<', '&lt;',form_del_producto_pack_protect_string('' . $this->Ini->Nm_lang['lang_seleccione'] . '')));
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'][] = '';
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_plan_cuentas, codigo||' - '|| nombre  FROM plan_cuentas  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " and empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY codigo, nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $aLookup[] = array(form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[0])) => str_replace('<', '&lt;', form_del_producto_pack_protect_string(NM_charset_to_utf8($rs->fields[1]))));
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'][] = $rs->fields[0];
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
          $sSelComp = "name=\"pro_cta_ingreso\"";
          if (isset($this->NM_ajax_info['select_html']['pro_cta_ingreso']) && !empty($this->NM_ajax_info['select_html']['pro_cta_ingreso']))
          {
              $sSelComp = str_replace('{SC_100PERC_CLASS_INPUT}', $this->classes_100perc_fields['input'], $this->NM_ajax_info['select_html']['pro_cta_ingreso']);
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

                  if ($this->pro_cta_ingreso == $sValue)
                  {
                      $this->_tmp_lookup_pro_cta_ingreso = $sLabel;
                  }

                  $sOpt     = ($sValue !== $sLabel) ? $sValue : $sLabel;
                  $sLookup .= "<option value=\"" . $sOpt . "\">" . $sLabel . "</option>";
              }
          }
          $aLookup  = $sLookup;
          $this->NM_ajax_info['fldList']['pro_cta_ingreso'] = array(
                       'row'    => '',
               'type'    => 'select',
               'valList' => array($sTmpValue),
               'optList' => $aLookup,
              );
          $aLabel     = array();
          $aLabelTemp = array();
          foreach ($this->NM_ajax_info['fldList']['pro_cta_ingreso']['valList'] as $i => $v)
          {
              $this->NM_ajax_info['fldList']['pro_cta_ingreso']['valList'][$i] = form_del_producto_pack_protect_string($v);
          }
          foreach ($aLookupOrig as $aValData)
          {
              if (in_array(key($aValData), $this->NM_ajax_info['fldList']['pro_cta_ingreso']['valList']))
              {
                  $aLabelTemp[key($aValData)] = current($aValData);
              }
          }
          foreach ($this->NM_ajax_info['fldList']['pro_cta_ingreso']['valList'] as $iIndex => $sValue)
          {
              $aLabel[$iIndex] = (isset($aLabelTemp[$sValue])) ? $aLabelTemp[$sValue] : $sValue;
          }
          $this->NM_ajax_info['fldList']['pro_cta_ingreso']['labList'] = $aLabel;
          }
   }

          //----- pro_cta_cartera_vencida
   function ajax_return_values_pro_cta_cartera_vencida($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_cta_cartera_vencida", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_cta_cartera_vencida);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_cta_cartera_vencida'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_cantidad_inventario
   function ajax_return_values_pro_cantidad_inventario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_cantidad_inventario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_cantidad_inventario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_cantidad_inventario'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_costo_promedio
   function ajax_return_values_pro_costo_promedio($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_costo_promedio", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_costo_promedio);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_costo_promedio'] = array(
                       'row'    => '',
               'type'    => 'text',
               'valList' => array($sTmpValue),
              );
          }
   }

          //----- pro_total_inventario
   function ajax_return_values_pro_total_inventario($bForce = false)
   {
          if ('navigate_form' == $this->NM_ajax_opcao || 'backup_line' == $this->NM_ajax_opcao || (isset($this->nmgp_refresh_fields) && in_array("pro_total_inventario", $this->nmgp_refresh_fields)) || $bForce)
          {
              $sTmpValue = NM_charset_to_utf8($this->pro_total_inventario);
              $aLookup = array();
          $aLookupOrig = $aLookup;
          $this->NM_ajax_info['fldList']['pro_total_inventario'] = array(
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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName] = array();
            $resDir = @opendir($uploadDir);
            if (!$resDir)
            {
                return $originalName;
            }
            while (false !== ($fileName = @readdir($resDir)))
            {
                if (@is_file($uploadDir . $fileName))
                {
                    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName][] = $fileName;
                }
            }
            @closedir($resDir);
        }
        if (!in_array($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName]))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName][] = $originalName;
            return $originalName;
        }
        else
        {
            $newName = $this->fetchFileNextName($originalName, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName]);
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['upload_dir'][$fieldName][] = $newName;
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
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Field_no_validate'] = array();
      if (!$this->NM_ajax_flag || !isset($this->nmgp_refresh_fields)) {
      $_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    $original_base_iva = $this->base_iva;
    $original_precio_con_impuesto = $this->precio_con_impuesto;
    $original_pro_aplica_subsidio = $this->pro_aplica_subsidio;
    $original_pro_base_ice = $this->pro_base_ice;
    $original_pro_base_irbpnr = $this->pro_base_irbpnr;
    $original_pro_cantidad_inventario = $this->pro_cantidad_inventario;
    $original_pro_codigo = $this->pro_codigo;
    $original_pro_costo_promedio = $this->pro_costo_promedio;
    $original_pro_familia_producto = $this->pro_familia_producto;
    $original_pro_por_ice = $this->pro_por_ice;
    $original_pro_por_irbpnr = $this->pro_por_irbpnr;
    $original_pro_por_iva = $this->pro_por_iva;
    $original_pro_precio = $this->pro_precio;
    $original_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
    $original_pro_total_inventario = $this->pro_total_inventario;
    $original_pro_valor_subsidio = $this->pro_valor_subsidio;
    $original_tarifa_ice = $this->tarifa_ice;
    $original_tarifa_irbpnr = $this->tarifa_irbpnr;
    $original_tarifa_iva = $this->tarifa_iva;
    $original_total_ice = $this->total_ice;
    $original_total_irbpnr = $this->total_irbpnr;
    $original_total_iva = $this->total_iva;
}
if (!isset($this->sc_temp_Igtech_RucEmpresa)) {$this->sc_temp_Igtech_RucEmpresa = (isset($_SESSION['Igtech_RucEmpresa'])) ? $_SESSION['Igtech_RucEmpresa'] : "";}
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
    $this->Ini->nm_hidden_blocos[5] = 'on'; $this->NM_ajax_info['blockDisplay']['5'] = 'on';
}else{
	$this->Ini->nm_hidden_blocos[5] = 'off'; $this->NM_ajax_info['blockDisplay']['5'] = 'off';
}

if($this->pro_familia_producto ==3){
	$this->Ini->nm_hidden_blocos[4] = 'on'; $this->NM_ajax_info['blockDisplay']['4'] = 'on';
}else{
	$this->Ini->nm_hidden_blocos[4] = 'off'; $this->NM_ajax_info['blockDisplay']['4'] = 'off';
}

if($this->pro_codigo ==''){
	$this->sc_field_readonly("pro_cantidad_inventario", 'off');
	$this->sc_field_readonly("pro_costo_promedio", 'off');
	$this->sc_field_readonly("pro_total_inventario", 'on');
}else{
	$this->sc_field_readonly("pro_cantidad_inventario", 'on');
	$this->sc_field_readonly("pro_costo_promedio", 'on');
	$this->sc_field_readonly("pro_total_inventario", 'on');
}
if($this->pro_precio <>''){
	$this->calculo_impuestos();
}else{
	$this->precio_con_impuesto =0.00;
}
if($this->pro_aplica_subsidio =='S'){
	if($this->pro_precio_sin_subsidio <>'' and $this->pro_precio <>''){
		if($this->pro_precio_sin_subsidio >$this->pro_precio ){
			$this->pro_valor_subsidio =$this->pro_precio_sin_subsidio -$this->pro_precio ;
		}else{
			
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "El precio sin subsidio debe ser mayor al precio";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_producto';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_producto';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "El precio sin subsidio debe ser mayor al precio";
 }
;
		}
	}
}else{
	$this->sc_field_readonly("pro_precio_sin_subsidio", 'on');
}
if (isset($this->sc_temp_Igtech_RucEmpresa)) { $_SESSION['Igtech_RucEmpresa'] = $this->sc_temp_Igtech_RucEmpresa;}
if (isset($this->NM_ajax_flag) && $this->NM_ajax_flag)
{
    if (($original_base_iva != $this->base_iva || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva)))
    {
        $this->ajax_return_values_base_iva(true);
    }
    if (($original_precio_con_impuesto != $this->precio_con_impuesto || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto)))
    {
        $this->ajax_return_values_precio_con_impuesto(true);
    }
    if (($original_pro_aplica_subsidio != $this->pro_aplica_subsidio || (isset($bFlagRead_pro_aplica_subsidio) && $bFlagRead_pro_aplica_subsidio)))
    {
        $this->ajax_return_values_pro_aplica_subsidio(true);
    }
    if (($original_pro_base_ice != $this->pro_base_ice || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice)))
    {
        $this->ajax_return_values_pro_base_ice(true);
    }
    if (($original_pro_base_irbpnr != $this->pro_base_irbpnr || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr)))
    {
        $this->ajax_return_values_pro_base_irbpnr(true);
    }
    if (($original_pro_cantidad_inventario != $this->pro_cantidad_inventario || (isset($bFlagRead_pro_cantidad_inventario) && $bFlagRead_pro_cantidad_inventario)))
    {
        $this->ajax_return_values_pro_cantidad_inventario(true);
    }
    if (($original_pro_codigo != $this->pro_codigo || (isset($bFlagRead_pro_codigo) && $bFlagRead_pro_codigo)))
    {
        $this->ajax_return_values_pro_codigo(true);
    }
    if (($original_pro_costo_promedio != $this->pro_costo_promedio || (isset($bFlagRead_pro_costo_promedio) && $bFlagRead_pro_costo_promedio)))
    {
        $this->ajax_return_values_pro_costo_promedio(true);
    }
    if (($original_pro_familia_producto != $this->pro_familia_producto || (isset($bFlagRead_pro_familia_producto) && $bFlagRead_pro_familia_producto)))
    {
        $this->ajax_return_values_pro_familia_producto(true);
    }
    if (($original_pro_por_ice != $this->pro_por_ice || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice)))
    {
        $this->ajax_return_values_pro_por_ice(true);
    }
    if (($original_pro_por_irbpnr != $this->pro_por_irbpnr || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr)))
    {
        $this->ajax_return_values_pro_por_irbpnr(true);
    }
    if (($original_pro_por_iva != $this->pro_por_iva || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva)))
    {
        $this->ajax_return_values_pro_por_iva(true);
    }
    if (($original_pro_precio != $this->pro_precio || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio)))
    {
        $this->ajax_return_values_pro_precio(true);
    }
    if (($original_pro_precio_sin_subsidio != $this->pro_precio_sin_subsidio || (isset($bFlagRead_pro_precio_sin_subsidio) && $bFlagRead_pro_precio_sin_subsidio)))
    {
        $this->ajax_return_values_pro_precio_sin_subsidio(true);
    }
    if (($original_pro_total_inventario != $this->pro_total_inventario || (isset($bFlagRead_pro_total_inventario) && $bFlagRead_pro_total_inventario)))
    {
        $this->ajax_return_values_pro_total_inventario(true);
    }
    if (($original_pro_valor_subsidio != $this->pro_valor_subsidio || (isset($bFlagRead_pro_valor_subsidio) && $bFlagRead_pro_valor_subsidio)))
    {
        $this->ajax_return_values_pro_valor_subsidio(true);
    }
    if (($original_tarifa_ice != $this->tarifa_ice || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice)))
    {
        $this->ajax_return_values_tarifa_ice(true);
    }
    if (($original_tarifa_irbpnr != $this->tarifa_irbpnr || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr)))
    {
        $this->ajax_return_values_tarifa_irbpnr(true);
    }
    if (($original_tarifa_iva != $this->tarifa_iva || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva)))
    {
        $this->ajax_return_values_tarifa_iva(true);
    }
    if (($original_total_ice != $this->total_ice || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice)))
    {
        $this->ajax_return_values_total_ice(true);
    }
    if (($original_total_irbpnr != $this->total_irbpnr || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr)))
    {
        $this->ajax_return_values_total_irbpnr(true);
    }
    if (($original_total_iva != $this->total_iva || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva)))
    {
        $this->ajax_return_values_total_iva(true);
    }
}
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off'; 
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
      $this->pro_precio_sin_subsidio = str_replace($sc_parm1, $sc_parm2, $this->pro_precio_sin_subsidio); 
      $this->pro_valor_subsidio = str_replace($sc_parm1, $sc_parm2, $this->pro_valor_subsidio); 
      $this->pro_precio = str_replace($sc_parm1, $sc_parm2, $this->pro_precio); 
      $this->tarifa_ice = str_replace($sc_parm1, $sc_parm2, $this->tarifa_ice); 
      $this->pro_base_ice = str_replace($sc_parm1, $sc_parm2, $this->pro_base_ice); 
      $this->total_ice = str_replace($sc_parm1, $sc_parm2, $this->total_ice); 
      $this->tarifa_iva = str_replace($sc_parm1, $sc_parm2, $this->tarifa_iva); 
      $this->base_iva = str_replace($sc_parm1, $sc_parm2, $this->base_iva); 
      $this->total_iva = str_replace($sc_parm1, $sc_parm2, $this->total_iva); 
      $this->tarifa_irbpnr = str_replace($sc_parm1, $sc_parm2, $this->tarifa_irbpnr); 
      $this->pro_base_irbpnr = str_replace($sc_parm1, $sc_parm2, $this->pro_base_irbpnr); 
      $this->total_irbpnr = str_replace($sc_parm1, $sc_parm2, $this->total_irbpnr); 
      $this->precio_con_impuesto = str_replace($sc_parm1, $sc_parm2, $this->precio_con_impuesto); 
      $this->pro_cantidad_inventario = str_replace($sc_parm1, $sc_parm2, $this->pro_cantidad_inventario); 
      $this->pro_costo_promedio = str_replace($sc_parm1, $sc_parm2, $this->pro_costo_promedio); 
      $this->pro_total_inventario = str_replace($sc_parm1, $sc_parm2, $this->pro_total_inventario); 
      $this->pro_descuento = str_replace($sc_parm1, $sc_parm2, $this->pro_descuento); 
      $this->valor_ice = str_replace($sc_parm1, $sc_parm2, $this->valor_ice); 
      $this->valor_irbpnr = str_replace($sc_parm1, $sc_parm2, $this->valor_irbpnr); 
      $this->valor_iva = str_replace($sc_parm1, $sc_parm2, $this->valor_iva); 
   } 
   function nm_poe_aspas_decimal() 
   { 
      $this->pro_precio_sin_subsidio = "'" . $this->pro_precio_sin_subsidio . "'";
      $this->pro_valor_subsidio = "'" . $this->pro_valor_subsidio . "'";
      $this->pro_precio = "'" . $this->pro_precio . "'";
      $this->tarifa_ice = "'" . $this->tarifa_ice . "'";
      $this->pro_base_ice = "'" . $this->pro_base_ice . "'";
      $this->total_ice = "'" . $this->total_ice . "'";
      $this->tarifa_iva = "'" . $this->tarifa_iva . "'";
      $this->base_iva = "'" . $this->base_iva . "'";
      $this->total_iva = "'" . $this->total_iva . "'";
      $this->tarifa_irbpnr = "'" . $this->tarifa_irbpnr . "'";
      $this->pro_base_irbpnr = "'" . $this->pro_base_irbpnr . "'";
      $this->total_irbpnr = "'" . $this->total_irbpnr . "'";
      $this->precio_con_impuesto = "'" . $this->precio_con_impuesto . "'";
      $this->pro_cantidad_inventario = "'" . $this->pro_cantidad_inventario . "'";
      $this->pro_costo_promedio = "'" . $this->pro_costo_promedio . "'";
      $this->pro_total_inventario = "'" . $this->pro_total_inventario . "'";
      $this->pro_descuento = "'" . $this->pro_descuento . "'";
      $this->valor_ice = "'" . $this->valor_ice . "'";
      $this->valor_irbpnr = "'" . $this->valor_irbpnr . "'";
      $this->valor_iva = "'" . $this->valor_iva . "'";
   } 
   function nm_tira_aspas_decimal() 
   { 
      $this->pro_precio_sin_subsidio = str_replace("'", "", $this->pro_precio_sin_subsidio); 
      $this->pro_valor_subsidio = str_replace("'", "", $this->pro_valor_subsidio); 
      $this->pro_precio = str_replace("'", "", $this->pro_precio); 
      $this->tarifa_ice = str_replace("'", "", $this->tarifa_ice); 
      $this->pro_base_ice = str_replace("'", "", $this->pro_base_ice); 
      $this->total_ice = str_replace("'", "", $this->total_ice); 
      $this->tarifa_iva = str_replace("'", "", $this->tarifa_iva); 
      $this->base_iva = str_replace("'", "", $this->base_iva); 
      $this->total_iva = str_replace("'", "", $this->total_iva); 
      $this->tarifa_irbpnr = str_replace("'", "", $this->tarifa_irbpnr); 
      $this->pro_base_irbpnr = str_replace("'", "", $this->pro_base_irbpnr); 
      $this->total_irbpnr = str_replace("'", "", $this->total_irbpnr); 
      $this->precio_con_impuesto = str_replace("'", "", $this->precio_con_impuesto); 
      $this->pro_cantidad_inventario = str_replace("'", "", $this->pro_cantidad_inventario); 
      $this->pro_costo_promedio = str_replace("'", "", $this->pro_costo_promedio); 
      $this->pro_total_inventario = str_replace("'", "", $this->pro_total_inventario); 
      $this->pro_descuento = str_replace("'", "", $this->pro_descuento); 
      $this->valor_ice = str_replace("'", "", $this->valor_ice); 
      $this->valor_irbpnr = str_replace("'", "", $this->valor_irbpnr); 
      $this->valor_iva = str_replace("'", "", $this->valor_iva); 
   } 
//----------- 

   function return_after_insert()
   {
      global $sc_where;
      $sc_where_pos = " WHERE ((pro_codigo < '" . substr($this->Db->qstr($this->pro_codigo), 1, -1) . "') OR (pro_codigo = '" . substr($this->Db->qstr($this->pro_codigo), 1, -1) . "' AND pro_empresa < '" . substr($this->Db->qstr($this->pro_empresa), 1, -1) . "'))";
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
      $nmgp_sel_count = 'SELECT COUNT(*) AS countTest FROM ' . $this->Ini->nm_tabela . $sc_where_pos;
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_sel_count;
      $rsc = $this->Db->Execute($nmgp_sel_count);
      if ($rsc === false && !$rsc->EOF)
      {
          $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg());
          exit;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = $rsc->fields[0];
      $rsc->Close();
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
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_empresa)) {$this->pro_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . ""; $NM_val_null[] = "pro_empresa";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_iva)) {$this->pro_iva = "2"; $NM_val_null[] = "pro_iva";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_ice)) {$this->pro_ice = "3"; $NM_val_null[] = "pro_ice";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_irbpnr)) {$this->pro_irbpnr = "5"; $NM_val_null[] = "pro_irbpnr";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_descuento)) {$this->pro_descuento = "0"; $this->sc_force_zero[] = "pro_descuento";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_cantidad_inventario)) {$this->pro_cantidad_inventario = "0"; $this->sc_force_zero[] = "pro_cantidad_inventario";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_costo_promedio)) {$this->pro_costo_promedio = "0"; $this->sc_force_zero[] = "pro_costo_promedio";}  
      if ('incluir' == $this->nmgp_opcao && empty($this->pro_total_inventario)) {$this->pro_total_inventario = "0"; $this->sc_force_zero[] = "pro_total_inventario";}  
      $NM_val_form['pro_imagen'] = $this->pro_imagen;
      $NM_val_form['pro_empresa'] = $this->pro_empresa;
      $NM_val_form['pro_codigo'] = $this->pro_codigo;
      $NM_val_form['pro_codigo_aux'] = $this->pro_codigo_aux;
      $NM_val_form['pro_descripcion'] = $this->pro_descripcion;
      $NM_val_form['pro_categoria_producto'] = $this->pro_categoria_producto;
      $NM_val_form['pro_familia_producto'] = $this->pro_familia_producto;
      $NM_val_form['pro_grupo_compras'] = $this->pro_grupo_compras;
      $NM_val_form['pro_grupo_ventas'] = $this->pro_grupo_ventas;
      $NM_val_form['pro_estado'] = $this->pro_estado;
      $NM_val_form['pro_aplica_subsidio'] = $this->pro_aplica_subsidio;
      $NM_val_form['pro_precio_sin_subsidio'] = $this->pro_precio_sin_subsidio;
      $NM_val_form['pro_valor_subsidio'] = $this->pro_valor_subsidio;
      $NM_val_form['pro_precio'] = $this->pro_precio;
      $NM_val_form['pro_por_ice'] = $this->pro_por_ice;
      $NM_val_form['tarifa_ice'] = $this->tarifa_ice;
      $NM_val_form['pro_base_ice'] = $this->pro_base_ice;
      $NM_val_form['total_ice'] = $this->total_ice;
      $NM_val_form['pro_por_iva'] = $this->pro_por_iva;
      $NM_val_form['tarifa_iva'] = $this->tarifa_iva;
      $NM_val_form['base_iva'] = $this->base_iva;
      $NM_val_form['total_iva'] = $this->total_iva;
      $NM_val_form['pro_por_irbpnr'] = $this->pro_por_irbpnr;
      $NM_val_form['tarifa_irbpnr'] = $this->tarifa_irbpnr;
      $NM_val_form['pro_base_irbpnr'] = $this->pro_base_irbpnr;
      $NM_val_form['total_irbpnr'] = $this->total_irbpnr;
      $NM_val_form['pro_iva'] = $this->pro_iva;
      $NM_val_form['precio_con_impuesto'] = $this->precio_con_impuesto;
      $NM_val_form['pro_ice'] = $this->pro_ice;
      $NM_val_form['pro_irbpnr'] = $this->pro_irbpnr;
      $NM_val_form['pro_compra'] = $this->pro_compra;
      $NM_val_form['pro_venta'] = $this->pro_venta;
      $NM_val_form['pro_stock'] = $this->pro_stock;
      $NM_val_form['pro_unidad'] = $this->pro_unidad;
      $NM_val_form['pro_producto_debi'] = $this->pro_producto_debi;
      $NM_val_form['pro_cta_cobrar'] = $this->pro_cta_cobrar;
      $NM_val_form['pro_cta_puente'] = $this->pro_cta_puente;
      $NM_val_form['pro_cta_ingreso'] = $this->pro_cta_ingreso;
      $NM_val_form['pro_cta_cartera_vencida'] = $this->pro_cta_cartera_vencida;
      $NM_val_form['pro_cantidad_inventario'] = $this->pro_cantidad_inventario;
      $NM_val_form['pro_costo_promedio'] = $this->pro_costo_promedio;
      $NM_val_form['pro_total_inventario'] = $this->pro_total_inventario;
      $NM_val_form['pro_descuento'] = $this->pro_descuento;
      $NM_val_form['valor_ice'] = $this->valor_ice;
      $NM_val_form['valor_irbpnr'] = $this->valor_irbpnr;
      $NM_val_form['valor_iva'] = $this->valor_iva;
      if ($this->pro_por_iva === "" || is_null($this->pro_por_iva))  
      { 
          $this->pro_por_iva = 0;
          $this->sc_force_zero[] = 'pro_por_iva';
      } 
      if ($this->pro_por_ice === "" || is_null($this->pro_por_ice))  
      { 
          $this->pro_por_ice = 0;
          $this->sc_force_zero[] = 'pro_por_ice';
      } 
      if ($this->pro_precio === "" || is_null($this->pro_precio))  
      { 
          $this->pro_precio = 0;
          $this->sc_force_zero[] = 'pro_precio';
      } 
      if ($this->pro_descuento === "" || is_null($this->pro_descuento))  
      { 
          $this->pro_descuento = 0;
          $this->sc_force_zero[] = 'pro_descuento';
      } 
      if ($this->pro_familia_producto === "" || is_null($this->pro_familia_producto))  
      { 
          $this->pro_familia_producto = 0;
          $this->sc_force_zero[] = 'pro_familia_producto';
      } 
      if ($this->pro_grupo_compras === "" || is_null($this->pro_grupo_compras))  
      { 
          $this->pro_grupo_compras = 0;
          $this->sc_force_zero[] = 'pro_grupo_compras';
      } 
      if ($this->pro_grupo_ventas === "" || is_null($this->pro_grupo_ventas))  
      { 
          $this->pro_grupo_ventas = 0;
          $this->sc_force_zero[] = 'pro_grupo_ventas';
      } 
      if ($this->pro_cantidad_inventario === "" || is_null($this->pro_cantidad_inventario))  
      { 
          $this->pro_cantidad_inventario = 0;
          $this->sc_force_zero[] = 'pro_cantidad_inventario';
      } 
      if ($this->pro_costo_promedio === "" || is_null($this->pro_costo_promedio))  
      { 
          $this->pro_costo_promedio = 0;
          $this->sc_force_zero[] = 'pro_costo_promedio';
      } 
      if ($this->pro_total_inventario === "" || is_null($this->pro_total_inventario))  
      { 
          $this->pro_total_inventario = 0;
          $this->sc_force_zero[] = 'pro_total_inventario';
      } 
      if ($this->pro_base_ice === "" || is_null($this->pro_base_ice))  
      { 
          $this->pro_base_ice = 0;
          $this->sc_force_zero[] = 'pro_base_ice';
      } 
      if ($this->pro_base_irbpnr === "" || is_null($this->pro_base_irbpnr))  
      { 
          $this->pro_base_irbpnr = 0;
          $this->sc_force_zero[] = 'pro_base_irbpnr';
      } 
      if ($this->pro_precio_sin_subsidio === "" || is_null($this->pro_precio_sin_subsidio))  
      { 
          $this->pro_precio_sin_subsidio = 0;
          $this->sc_force_zero[] = 'pro_precio_sin_subsidio';
      } 
      if ($this->pro_cta_ingreso === "" || is_null($this->pro_cta_ingreso))  
      { 
          $this->pro_cta_ingreso = 0;
          $this->sc_force_zero[] = 'pro_cta_ingreso';
      } 
      if ($this->pro_cta_cobrar === "" || is_null($this->pro_cta_cobrar))  
      { 
          $this->pro_cta_cobrar = 0;
          $this->sc_force_zero[] = 'pro_cta_cobrar';
      } 
      if ($this->pro_cta_puente === "" || is_null($this->pro_cta_puente))  
      { 
          $this->pro_cta_puente = 0;
          $this->sc_force_zero[] = 'pro_cta_puente';
      } 
      if ($this->pro_cta_cartera_vencida === "" || is_null($this->pro_cta_cartera_vencida))  
      { 
          $this->pro_cta_cartera_vencida = 0;
          $this->sc_force_zero[] = 'pro_cta_cartera_vencida';
      } 
      if ($this->pro_producto_debi === "" || is_null($this->pro_producto_debi))  
      { 
          $this->pro_producto_debi = 0;
          $this->sc_force_zero[] = 'pro_producto_debi';
      } 
      if ($this->pro_unidad === "" || is_null($this->pro_unidad))  
      { 
          $this->pro_unidad = 0;
          $this->sc_force_zero[] = 'pro_unidad';
      } 
      $nm_bases_lob_geral = array_merge($this->Ini->nm_bases_oracle, $this->Ini->nm_bases_ibase, $this->Ini->nm_bases_informix, $this->Ini->nm_bases_mysql, $this->Ini->nm_bases_access, $this->Ini->nm_bases_sqlite, array('pdo_ibm'), array('pdo_sqlsrv'));
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['decimal_db'] == ",") 
      {
          $this->nm_troca_decimal(".", ",");
      }
      if ($this->nmgp_opcao == "alterar" || $this->nmgp_opcao == "incluir") 
      {
          $this->pro_codigo_before_qstr = $this->pro_codigo;
          $this->pro_codigo = substr($this->Db->qstr($this->pro_codigo), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_codigo = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_codigo);
          }
          if ($this->pro_codigo == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_codigo = "null"; 
              $NM_val_null[] = "pro_codigo";
          } 
          $this->pro_codigo_aux_before_qstr = $this->pro_codigo_aux;
          $this->pro_codigo_aux = substr($this->Db->qstr($this->pro_codigo_aux), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_codigo_aux = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_codigo_aux);
          }
          if ($this->pro_codigo_aux == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_codigo_aux = "null"; 
              $NM_val_null[] = "pro_codigo_aux";
          } 
          $this->pro_empresa_before_qstr = $this->pro_empresa;
          $this->pro_empresa = substr($this->Db->qstr($this->pro_empresa), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_empresa = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_empresa);
          }
          if ($this->pro_empresa == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_empresa = "null"; 
              $NM_val_null[] = "pro_empresa";
          } 
          $this->pro_descripcion_before_qstr = $this->pro_descripcion;
          $this->pro_descripcion = substr($this->Db->qstr($this->pro_descripcion), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_descripcion = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_descripcion);
          }
          if ($this->pro_descripcion == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_descripcion = "null"; 
              $NM_val_null[] = "pro_descripcion";
          } 
          $this->pro_iva_before_qstr = $this->pro_iva;
          $this->pro_iva = substr($this->Db->qstr($this->pro_iva), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_iva = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_iva);
          }
          if ($this->pro_iva == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_iva = "null"; 
              $NM_val_null[] = "pro_iva";
          } 
          $this->pro_ice_before_qstr = $this->pro_ice;
          $this->pro_ice = substr($this->Db->qstr($this->pro_ice), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_ice = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_ice);
          }
          if ($this->pro_ice == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_ice = "null"; 
              $NM_val_null[] = "pro_ice";
          } 
          $this->pro_irbpnr_before_qstr = $this->pro_irbpnr;
          $this->pro_irbpnr = substr($this->Db->qstr($this->pro_irbpnr), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_irbpnr = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_irbpnr);
          }
          if ($this->pro_irbpnr == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_irbpnr = "null"; 
              $NM_val_null[] = "pro_irbpnr";
          } 
          $this->pro_por_irbpnr_before_qstr = $this->pro_por_irbpnr;
          $this->pro_por_irbpnr = substr($this->Db->qstr($this->pro_por_irbpnr), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_por_irbpnr = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_por_irbpnr);
          }
          if ($this->pro_por_irbpnr == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_por_irbpnr = "null"; 
              $NM_val_null[] = "pro_por_irbpnr";
          } 
          $this->pro_estado_before_qstr = $this->pro_estado;
          $this->pro_estado = substr($this->Db->qstr($this->pro_estado), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_estado = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_estado);
          }
          if ($this->pro_estado == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_estado = "null"; 
              $NM_val_null[] = "pro_estado";
          } 
          $this->pro_categoria_producto_before_qstr = $this->pro_categoria_producto;
          $this->pro_categoria_producto = substr($this->Db->qstr($this->pro_categoria_producto), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_categoria_producto = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_categoria_producto);
          }
          if ($this->pro_categoria_producto == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_categoria_producto = "null"; 
              $NM_val_null[] = "pro_categoria_producto";
          } 
          $this->pro_imagen_before_qstr = $this->pro_imagen;
          $this->pro_imagen = substr($this->Db->qstr($this->pro_imagen), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_imagen = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_imagen);
          }
          if ($this->pro_imagen == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_imagen = "null"; 
              $NM_val_null[] = "pro_imagen";
          } 
          $this->pro_compra_before_qstr = $this->pro_compra;
          $this->pro_compra = substr($this->Db->qstr($this->pro_compra), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_compra = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_compra);
          }
          if ($this->pro_compra == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_compra = "null"; 
              $NM_val_null[] = "pro_compra";
          } 
          $this->pro_venta_before_qstr = $this->pro_venta;
          $this->pro_venta = substr($this->Db->qstr($this->pro_venta), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_venta = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_venta);
          }
          if ($this->pro_venta == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_venta = "null"; 
              $NM_val_null[] = "pro_venta";
          } 
          $this->pro_stock_before_qstr = $this->pro_stock;
          $this->pro_stock = substr($this->Db->qstr($this->pro_stock), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_stock = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_stock);
          }
          if ($this->pro_stock == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_stock = "null"; 
              $NM_val_null[] = "pro_stock";
          } 
          $this->pro_aplica_subsidio_before_qstr = $this->pro_aplica_subsidio;
          $this->pro_aplica_subsidio = substr($this->Db->qstr($this->pro_aplica_subsidio), 1, -1); 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $this->pro_aplica_subsidio = str_replace(array("\\r\\n", "\\n", "\r\n"), array("\r\n", "\n", "\n"), $this->pro_aplica_subsidio);
          }
          if ($this->pro_aplica_subsidio == "" && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))  
          { 
              $this->pro_aplica_subsidio = "null"; 
              $NM_val_null[] = "pro_aplica_subsidio";
          } 
      }
      if ($this->nmgp_opcao == "alterar") 
      {
          $SC_fields_update = array(); 
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          if ($rs1 === false)  
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dbas'], $this->Db->ErrorMsg()); 
              if ($this->NM_ajax_flag)
              {
                 form_del_producto_pack_ajax_response();
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
              $Cmd_Unique = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where (pro_codigo = '" . $this->pro_codigo . "' AND pro_empresa = '" . $this->pro_empresa . "') AND (pro_codigo <> '$this->pro_codigo' and pro_empresa <> '$this->pro_empresa')";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (false === $rsUni)
              {
                  $dbErrorMessage = $this->Db->ErrorMsg();
                  $dbErrorCode = $this->Db->ErrorNo();
                  $this->handleDbErrorMessage($dbErrorMessage, $dbErrorCode);
                  $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_updt'], $dbErrorMessage, true);
                  if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler']) {
                      $this->sc_erro_update = $dbErrorMessage;
                      $this->NM_rollback_db();
                      if ($this->NM_ajax_flag) {
                          form_del_producto_pack_ajax_response();
                      }
                      exit;
                  }
              }
              elseif (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_ukey'] . " " . $this->Ini->Nm_lang['lang_codigo'] . ", " . $this->Ini->Nm_lang['lang_empresa'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $aUpdateOk[] = 'pro_codigo+pro_empresa';
                  $rsUni->Close();
              }
              else
              {
                  $rsUni->Close();
              }
          $bUpdateOk = $bUpdateOk && empty($aUpdateOk);
          if ($bUpdateOk)
          { 
              $rs1->Close(); 
              $aDoNotUpdate = array();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              else 
              { 
                  $comando = "UPDATE " . $this->Ini->nm_tabela . " SET ";  
                  $SC_fields_update[] = "pro_codigo_aux = '$this->pro_codigo_aux', pro_descripcion = '$this->pro_descripcion', pro_iva = '$this->pro_iva', pro_por_iva = $this->pro_por_iva, pro_ice = '$this->pro_ice', pro_por_ice = $this->pro_por_ice, pro_irbpnr = '$this->pro_irbpnr', pro_por_irbpnr = '$this->pro_por_irbpnr', pro_precio = $this->pro_precio, pro_estado = '$this->pro_estado', pro_familia_producto = $this->pro_familia_producto, pro_grupo_compras = $this->pro_grupo_compras, pro_grupo_ventas = $this->pro_grupo_ventas, pro_categoria_producto = '$this->pro_categoria_producto', pro_cantidad_inventario = $this->pro_cantidad_inventario, pro_costo_promedio = $this->pro_costo_promedio, pro_total_inventario = $this->pro_total_inventario, pro_base_ice = $this->pro_base_ice, pro_base_irbpnr = $this->pro_base_irbpnr, pro_compra = '$this->pro_compra', pro_venta = '$this->pro_venta', pro_stock = '$this->pro_stock', pro_aplica_subsidio = '$this->pro_aplica_subsidio', pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio, pro_cta_ingreso = $this->pro_cta_ingreso, pro_cta_cobrar = $this->pro_cta_cobrar, pro_cta_puente = $this->pro_cta_puente, pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida, pro_producto_debi = $this->pro_producto_debi, pro_unidad = $this->pro_unidad"; 
              } 
              if (isset($NM_val_form['pro_descuento']) && $NM_val_form['pro_descuento'] != $this->nmgp_dados_select['pro_descuento']) 
              { 
                  $SC_fields_update[] = "pro_descuento = $this->pro_descuento"; 
              } 
              $temp_cmd_sql = "";
              if ($this->pro_imagen_limpa == "S")
              {
                  if ($this->pro_imagen != "null")
                  {
                      $this->pro_imagen = '';
                  }
                  if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                  {
                      $temp_cmd_sql = "pro_imagen = '" . $this->pro_imagen . "'";
                  }
                  else
                  {
                      $temp_cmd_sql = "pro_imagen = '" . $this->pro_imagen . "'";
                  }
                  $this->pro_imagen = "";
              }
              else
              {
                  if ($this->pro_imagen != "none" && $this->pro_imagen != "")
                  {
                      $NM_conteudo =  $this->pro_imagen;
                      if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
                      {
                      $temp_cmd_sql .= " pro_imagen = '$NM_conteudo'";
                      }
                      else
                      {
                          $temp_cmd_sql .= " pro_imagen = '$NM_conteudo'";
                      }
                  }
                  else
                  {
                      $aDoNotUpdate[] = "pro_imagen";
                  }
              }
              if (!empty($temp_cmd_sql))
              {
                  $SC_fields_update[] = $temp_cmd_sql;
              }
              $comando .= implode(",", $SC_fields_update);  
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $comando .= " WHERE pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $comando .= " WHERE pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando .= " WHERE pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";  
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando .= " WHERE pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";  
              }  
              else  
              {
                  $comando .= " WHERE pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' ";  
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
                                  form_del_producto_pack_ajax_response();
                              }
                              exit;  
                          }   
                      }   
                  }   
              }   
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              $this->pro_codigo = $this->pro_codigo_before_qstr;
              $this->pro_codigo_aux = $this->pro_codigo_aux_before_qstr;
              $this->pro_empresa = $this->pro_empresa_before_qstr;
              $this->pro_descripcion = $this->pro_descripcion_before_qstr;
              $this->pro_iva = $this->pro_iva_before_qstr;
              $this->pro_ice = $this->pro_ice_before_qstr;
              $this->pro_irbpnr = $this->pro_irbpnr_before_qstr;
              $this->pro_por_irbpnr = $this->pro_por_irbpnr_before_qstr;
              $this->pro_estado = $this->pro_estado_before_qstr;
              $this->pro_categoria_producto = $this->pro_categoria_producto_before_qstr;
              $this->pro_imagen = $this->pro_imagen_before_qstr;
              $this->pro_compra = $this->pro_compra_before_qstr;
              $this->pro_venta = $this->pro_venta_before_qstr;
              $this->pro_stock = $this->pro_stock_before_qstr;
              $this->pro_aplica_subsidio = $this->pro_aplica_subsidio_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $nm_bases_lob_geral))
              { 
              }   
              if ($this->pro_imagen_limpa == "S")
              {
                  $this->NM_ajax_info['fldList']['pro_imagen_salva'] = array(
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

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['db_changed'] = true;
              if ($this->NM_ajax_flag) {
                  $this->NM_ajax_info['clearUpload'] = 'S';
                  $this->NM_ajax_info['fldList']['pro_imagen_salva'] = array(
                      'row'     => '',
                      'type'    => 'text',
                      'valList' => array(''),
                  );
              }


              if     (isset($NM_val_form) && isset($NM_val_form['pro_codigo'])) { $this->pro_codigo = $NM_val_form['pro_codigo']; }
              elseif (isset($this->pro_codigo)) { $this->nm_limpa_alfa($this->pro_codigo); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_codigo_aux'])) { $this->pro_codigo_aux = $NM_val_form['pro_codigo_aux']; }
              elseif (isset($this->pro_codigo_aux)) { $this->nm_limpa_alfa($this->pro_codigo_aux); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_empresa'])) { $this->pro_empresa = $NM_val_form['pro_empresa']; }
              elseif (isset($this->pro_empresa)) { $this->nm_limpa_alfa($this->pro_empresa); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_descripcion'])) { $this->pro_descripcion = $NM_val_form['pro_descripcion']; }
              elseif (isset($this->pro_descripcion)) { $this->nm_limpa_alfa($this->pro_descripcion); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_iva'])) { $this->pro_iva = $NM_val_form['pro_iva']; }
              elseif (isset($this->pro_iva)) { $this->nm_limpa_alfa($this->pro_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_por_iva'])) { $this->pro_por_iva = $NM_val_form['pro_por_iva']; }
              elseif (isset($this->pro_por_iva)) { $this->nm_limpa_alfa($this->pro_por_iva); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_ice'])) { $this->pro_ice = $NM_val_form['pro_ice']; }
              elseif (isset($this->pro_ice)) { $this->nm_limpa_alfa($this->pro_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_por_ice'])) { $this->pro_por_ice = $NM_val_form['pro_por_ice']; }
              elseif (isset($this->pro_por_ice)) { $this->nm_limpa_alfa($this->pro_por_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_irbpnr'])) { $this->pro_irbpnr = $NM_val_form['pro_irbpnr']; }
              elseif (isset($this->pro_irbpnr)) { $this->nm_limpa_alfa($this->pro_irbpnr); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_por_irbpnr'])) { $this->pro_por_irbpnr = $NM_val_form['pro_por_irbpnr']; }
              elseif (isset($this->pro_por_irbpnr)) { $this->nm_limpa_alfa($this->pro_por_irbpnr); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_precio'])) { $this->pro_precio = $NM_val_form['pro_precio']; }
              elseif (isset($this->pro_precio)) { $this->nm_limpa_alfa($this->pro_precio); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_estado'])) { $this->pro_estado = $NM_val_form['pro_estado']; }
              elseif (isset($this->pro_estado)) { $this->nm_limpa_alfa($this->pro_estado); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_familia_producto'])) { $this->pro_familia_producto = $NM_val_form['pro_familia_producto']; }
              elseif (isset($this->pro_familia_producto)) { $this->nm_limpa_alfa($this->pro_familia_producto); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_grupo_compras'])) { $this->pro_grupo_compras = $NM_val_form['pro_grupo_compras']; }
              elseif (isset($this->pro_grupo_compras)) { $this->nm_limpa_alfa($this->pro_grupo_compras); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_grupo_ventas'])) { $this->pro_grupo_ventas = $NM_val_form['pro_grupo_ventas']; }
              elseif (isset($this->pro_grupo_ventas)) { $this->nm_limpa_alfa($this->pro_grupo_ventas); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_categoria_producto'])) { $this->pro_categoria_producto = $NM_val_form['pro_categoria_producto']; }
              elseif (isset($this->pro_categoria_producto)) { $this->nm_limpa_alfa($this->pro_categoria_producto); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_cantidad_inventario'])) { $this->pro_cantidad_inventario = $NM_val_form['pro_cantidad_inventario']; }
              elseif (isset($this->pro_cantidad_inventario)) { $this->nm_limpa_alfa($this->pro_cantidad_inventario); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_costo_promedio'])) { $this->pro_costo_promedio = $NM_val_form['pro_costo_promedio']; }
              elseif (isset($this->pro_costo_promedio)) { $this->nm_limpa_alfa($this->pro_costo_promedio); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_total_inventario'])) { $this->pro_total_inventario = $NM_val_form['pro_total_inventario']; }
              elseif (isset($this->pro_total_inventario)) { $this->nm_limpa_alfa($this->pro_total_inventario); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_base_ice'])) { $this->pro_base_ice = $NM_val_form['pro_base_ice']; }
              elseif (isset($this->pro_base_ice)) { $this->nm_limpa_alfa($this->pro_base_ice); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_base_irbpnr'])) { $this->pro_base_irbpnr = $NM_val_form['pro_base_irbpnr']; }
              elseif (isset($this->pro_base_irbpnr)) { $this->nm_limpa_alfa($this->pro_base_irbpnr); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_compra'])) { $this->pro_compra = $NM_val_form['pro_compra']; }
              elseif (isset($this->pro_compra)) { $this->nm_limpa_alfa($this->pro_compra); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_venta'])) { $this->pro_venta = $NM_val_form['pro_venta']; }
              elseif (isset($this->pro_venta)) { $this->nm_limpa_alfa($this->pro_venta); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_stock'])) { $this->pro_stock = $NM_val_form['pro_stock']; }
              elseif (isset($this->pro_stock)) { $this->nm_limpa_alfa($this->pro_stock); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_aplica_subsidio'])) { $this->pro_aplica_subsidio = $NM_val_form['pro_aplica_subsidio']; }
              elseif (isset($this->pro_aplica_subsidio)) { $this->nm_limpa_alfa($this->pro_aplica_subsidio); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_precio_sin_subsidio'])) { $this->pro_precio_sin_subsidio = $NM_val_form['pro_precio_sin_subsidio']; }
              elseif (isset($this->pro_precio_sin_subsidio)) { $this->nm_limpa_alfa($this->pro_precio_sin_subsidio); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_cta_ingreso'])) { $this->pro_cta_ingreso = $NM_val_form['pro_cta_ingreso']; }
              elseif (isset($this->pro_cta_ingreso)) { $this->nm_limpa_alfa($this->pro_cta_ingreso); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_cta_cobrar'])) { $this->pro_cta_cobrar = $NM_val_form['pro_cta_cobrar']; }
              elseif (isset($this->pro_cta_cobrar)) { $this->nm_limpa_alfa($this->pro_cta_cobrar); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_cta_puente'])) { $this->pro_cta_puente = $NM_val_form['pro_cta_puente']; }
              elseif (isset($this->pro_cta_puente)) { $this->nm_limpa_alfa($this->pro_cta_puente); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_cta_cartera_vencida'])) { $this->pro_cta_cartera_vencida = $NM_val_form['pro_cta_cartera_vencida']; }
              elseif (isset($this->pro_cta_cartera_vencida)) { $this->nm_limpa_alfa($this->pro_cta_cartera_vencida); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_producto_debi'])) { $this->pro_producto_debi = $NM_val_form['pro_producto_debi']; }
              elseif (isset($this->pro_producto_debi)) { $this->nm_limpa_alfa($this->pro_producto_debi); }
              if     (isset($NM_val_form) && isset($NM_val_form['pro_unidad'])) { $this->pro_unidad = $NM_val_form['pro_unidad']; }
              elseif (isset($this->pro_unidad)) { $this->nm_limpa_alfa($this->pro_unidad); }

              $this->nm_formatar_campos();
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
              }

              $aOldRefresh               = $this->nmgp_refresh_fields;
              $this->nmgp_refresh_fields = array_diff(array('pro_empresa', 'pro_codigo', 'pro_codigo_aux', 'pro_descripcion', 'pro_categoria_producto', 'pro_familia_producto', 'pro_grupo_compras', 'pro_grupo_ventas', 'pro_estado', 'pro_aplica_subsidio', 'pro_precio_sin_subsidio', 'pro_valor_subsidio', 'pro_precio', 'pro_por_ice', 'tarifa_ice', 'pro_base_ice', 'total_ice', 'pro_por_iva', 'tarifa_iva', 'base_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'pro_base_irbpnr', 'total_irbpnr', 'pro_iva', 'precio_con_impuesto', 'pro_ice', 'pro_irbpnr', 'pro_compra', 'pro_venta', 'pro_stock', 'pro_unidad', 'pro_producto_debi', 'pro_cta_cobrar', 'pro_cta_puente', 'pro_cta_ingreso', 'pro_cta_cartera_vencida', 'pro_cantidad_inventario', 'pro_costo_promedio', 'pro_total_inventario'), $aDoNotUpdate);
              $this->ajax_return_values();
              $this->nmgp_refresh_fields = $aOldRefresh;

              $this->nm_tira_formatacao();
          }  
      }  
      if ($this->nmgp_opcao == "incluir") 
      { 
          $NM_cmp_auto = "";
          $NM_seq_auto = "";
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key'] as $sFKName => $sFKValue)
              {
                   if (isset($this->sc_conv_var[$sFKName]))
                   {
                       $sFKName = $this->sc_conv_var[$sFKName];
                   }
                  eval("\$this->" . $sFKName . " = \"" . $sFKValue . "\";");
              }
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['decimal_db'] == ",") 
          {
              $this->nm_poe_aspas_decimal();
          }
          $bInsertOk = true;
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
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
              $Cmd_Unique = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '" . $this->pro_codigo . "' AND pro_empresa = '" . $this->pro_empresa . "'";
              $Cmd_Unique = str_replace("'null'", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace("#null#", "null", $Cmd_Unique) ; 
              $Cmd_Unique = str_replace($this->Ini->date_delim . "null" . $this->Ini->date_delim1, "null", $Cmd_Unique) ; 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $Cmd_Unique;
              $rsUni = $this->Db->Execute($Cmd_Unique);
              if (false === $rsUni)
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
                          form_del_producto_pack_ajax_response();
                          exit;
                      }
                  }
              }
              elseif (0 < $rsUni->fields[0])
              {
                  $this->Erro->mensagem (__FILE__, __LINE__, "critica", $this->Ini->Nm_lang['lang_errm_inst_uniq'] . " " . $this->Ini->Nm_lang['lang_codigo'] . ", " . $this->Ini->Nm_lang['lang_empresa'] . ""); 
                  $this->nmgp_opcao = "nada"; 
                  $GLOBALS["erro_incl"] = 1; 
                  $aInsertOk[] = 'pro_codigo+pro_empresa';
                  $rsUni->Close();
              }
              else
              {
                  $rsUni->Close();
              }
          $bInsertOk = $bInsertOk && empty($aInsertOk);
          if (!isset($_POST['nmgp_ins_valid']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['insert_validation'] != $_POST['nmgp_ins_valid'])
          {
              $bInsertOk = false;
              $this->Erro->mensagem(__FILE__, __LINE__, 'security', $this->Ini->Nm_lang['lang_errm_inst_vald']);
              if (isset($_SESSION['scriptcase']['erro_handler']) && $_SESSION['scriptcase']['erro_handler'])
              {
                  $this->nmgp_opcao = 'refresh_insert';
                  if ($this->NM_ajax_flag)
                  {
                      form_del_producto_pack_ajax_response();
                      exit;
                  }
              }
          }
          if ($bInsertOk)
          { 
              $dir_file = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/"; 
              $_test_file = $this->fetchUniqueUploadName($this->pro_imagen_scfile_name, $dir_file, "pro_imagen");
              if (trim($this->pro_imagen_scfile_name) != $_test_file)
              {
                  $this->pro_imagen_scfile_name = $_test_file;
                  $this->pro_imagen = $_test_file;
              }
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES ('$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
              { 
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite))
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              elseif ($this->Ini->nm_tpbanco == 'pdo_ibm')
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
              }
              else
              {
                  $comando = "INSERT INTO " . $this->Ini->nm_tabela . " (" . $NM_cmp_auto . "pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad) VALUES (" . $NM_seq_auto . "'$this->pro_codigo', '$this->pro_codigo_aux', '$this->pro_empresa', '$this->pro_descripcion', '$this->pro_iva', $this->pro_por_iva, '$this->pro_ice', $this->pro_por_ice, '$this->pro_irbpnr', '$this->pro_por_irbpnr', $this->pro_precio, $this->pro_descuento, '$this->pro_estado', $this->pro_familia_producto, $this->pro_grupo_compras, $this->pro_grupo_ventas, '$this->pro_categoria_producto', $this->pro_cantidad_inventario, $this->pro_costo_promedio, $this->pro_total_inventario, '$this->pro_imagen', $this->pro_base_ice, $this->pro_base_irbpnr, '$this->pro_compra', '$this->pro_venta', '$this->pro_stock', '$this->pro_aplica_subsidio', $this->pro_precio_sin_subsidio, $this->pro_cta_ingreso, $this->pro_cta_cobrar, $this->pro_cta_puente, $this->pro_cta_cartera_vencida, $this->pro_producto_debi, $this->pro_unidad)"; 
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
                              form_del_producto_pack_ajax_response();
                              exit; 
                          }
                      }  
                  }  
              }  
              if ('refresh_insert' != $this->nmgp_opcao)
              {
              $this->pro_codigo = $this->pro_codigo_before_qstr;
              $this->pro_codigo_aux = $this->pro_codigo_aux_before_qstr;
              $this->pro_empresa = $this->pro_empresa_before_qstr;
              $this->pro_descripcion = $this->pro_descripcion_before_qstr;
              $this->pro_iva = $this->pro_iva_before_qstr;
              $this->pro_ice = $this->pro_ice_before_qstr;
              $this->pro_irbpnr = $this->pro_irbpnr_before_qstr;
              $this->pro_por_irbpnr = $this->pro_por_irbpnr_before_qstr;
              $this->pro_estado = $this->pro_estado_before_qstr;
              $this->pro_categoria_producto = $this->pro_categoria_producto_before_qstr;
              $this->pro_imagen = $this->pro_imagen_before_qstr;
              $this->pro_compra = $this->pro_compra_before_qstr;
              $this->pro_venta = $this->pro_venta_before_qstr;
              $this->pro_stock = $this->pro_stock_before_qstr;
              $this->pro_aplica_subsidio = $this->pro_aplica_subsidio_before_qstr;
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql)) 
              { 
              }   
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']);
              }

              $dir_img = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/"; 
              if (nm_mkdir($dir_img))  
              { 
                  $reg_pro_imagen = ""; 
                  if (is_file($this->SC_IMG_pro_imagen)) { 
                      $arq_pro_imagen = fopen($this->SC_IMG_pro_imagen, "r") ; 
                      $reg_pro_imagen = fread($arq_pro_imagen, filesize($this->SC_IMG_pro_imagen)) ; 
                      fclose($arq_pro_imagen) ;  
                      $arq_pro_imagen = fopen($dir_img . trim($this->pro_imagen_scfile_name), "w") ; 
                      fwrite($arq_pro_imagen, $reg_pro_imagen) ;  
                      fclose($arq_pro_imagen) ;  
                  }
              } 
              $this->sc_evento = "insert"; 
              $this->pro_codigo = $this->pro_codigo_before_qstr;
              $this->pro_codigo_aux = $this->pro_codigo_aux_before_qstr;
              $this->pro_empresa = $this->pro_empresa_before_qstr;
              $this->pro_descripcion = $this->pro_descripcion_before_qstr;
              $this->pro_iva = $this->pro_iva_before_qstr;
              $this->pro_ice = $this->pro_ice_before_qstr;
              $this->pro_irbpnr = $this->pro_irbpnr_before_qstr;
              $this->pro_por_irbpnr = $this->pro_por_irbpnr_before_qstr;
              $this->pro_estado = $this->pro_estado_before_qstr;
              $this->pro_categoria_producto = $this->pro_categoria_producto_before_qstr;
              $this->pro_imagen = $this->pro_imagen_before_qstr;
              $this->pro_compra = $this->pro_compra_before_qstr;
              $this->pro_venta = $this->pro_venta_before_qstr;
              $this->pro_stock = $this->pro_stock_before_qstr;
              $this->pro_aplica_subsidio = $this->pro_aplica_subsidio_before_qstr;
              $this->sc_insert_on = true; 
              if (empty($this->sc_erro_insert)) {
                  $this->record_insert_ok = true;
              } 
              $this->NM_gera_log_key("incluir");
              $this->NM_gera_log_new();
              if ('refresh_insert' != $this->nmgp_opcao && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_redir_insert']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_redir_insert'] != "S"))
              {
              $this->nmgp_opcao   = "igual"; 
              $this->nmgp_opc_ant = "igual"; 
              $this->return_after_insert();
              }
              $this->nm_flag_iframe = true;
          } 
          if ($this->lig_edit_lookup)
          {
              $this->lig_edit_lookup_call = true;
          }
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['decimal_db'] == ",") 
      {
          $this->nm_tira_aspas_decimal();
      }
      if ($this->nmgp_opcao == "excluir") 
      { 
          $this->pro_codigo = substr($this->Db->qstr($this->pro_codigo), 1, -1); 
          $this->pro_empresa = substr($this->Db->qstr($this->pro_empresa), 1, -1); 

          $bDelecaoOk = true;
          $sMsgErro   = '';

          if ($bDelecaoOk)
          {

          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
          }  
          else  
          {
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              $rs1 = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
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
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
              }  
              else  
              {
                  $_SESSION['scriptcase']['sc_sql_ult_comando'] = "DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "; 
                  $rs = $this->Db->Execute("DELETE FROM " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa' "); 
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
                          form_del_producto_pack_ajax_response();
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']--; 
              if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] < 0)
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = 0; 
              }

              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['db_changed'] = true;

              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']))
              {
                  unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']);
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
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['parms'] = "pro_codigo?#?$this->pro_codigo?@?pro_empresa?#?$this->pro_empresa?@?"; 
      }
      $this->nmgp_dados_form['pro_imagen'] = ""; 
      $this->pro_imagen_limpa = ""; 
      $this->pro_imagen_salva = ""; 
      $this->NM_commit_db(); 
      if ($this->sc_evento != "insert" && $this->sc_evento != "update" && $this->sc_evento != "delete")
      { 
          $this->pro_codigo = null === $this->pro_codigo ? null : substr($this->Db->qstr($this->pro_codigo), 1, -1); 
          $this->pro_empresa = null === $this->pro_empresa ? null : substr($this->Db->qstr($this->pro_empresa), 1, -1); 
      } 
      if (isset($this->NM_where_filter))
      {
          $this->NM_where_filter = str_replace("@percent@", "%", $this->NM_where_filter);
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'] = trim($this->NM_where_filter);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']))
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']);
          }
      }
      $sc_where_filter = '';
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter_form'])
      {
          $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter_form'];
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'] && $sc_where_filter != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'])
      {
          if (empty($sc_where_filter))
          {
              $sc_where_filter = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'];
          }
          else
          {
              $sc_where_filter .= " and (" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'] . ")";
          }
      }
//------------ 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "R")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['iframe_evento'] = $this->sc_evento; 
      } 
      if (!isset($this->nmgp_opcao) || empty($this->nmgp_opcao)) 
      { 
          if (empty($this->pro_codigo) && empty($this->pro_empresa)) 
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
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
          $GLOBALS["NM_ERRO_IBASE"] = 1;  
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" && $this->sc_evento == "insert")
      {
          $this->nmgp_opcao = "final";
      }
      $sc_where = trim("");
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
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']))
      { 
          $nmgp_select = "SELECT count(*) AS countTest from " . $this->Ini->nm_tabela . $sc_where; 
          $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
          $rt = $this->Db->Execute($nmgp_select) ; 
          if ($rt === false && !$rt->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
          { 
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit ; 
          }  
          $qt_geral_reg_form_del_producto = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total'] = $qt_geral_reg_form_del_producto;
          $rt->Close(); 
          if ($this->nmgp_opcao == "igual" && isset($this->NM_btn_navega) && 'S' == $this->NM_btn_navega && !empty($this->pro_codigo) && !empty($this->pro_empresa))
          {
              $Reg_OK      = false;
              $Count_start = -1;
              $sc_order_by = "";
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $Sel_Chave = "pro_codigo, pro_empresa"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $Sel_Chave = "pro_codigo, pro_empresa"; 
              }
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $Sel_Chave = "pro_codigo, pro_empresa"; 
              }
              else  
              {
                  $Sel_Chave = "pro_codigo, pro_empresa"; 
              }
              $nmgp_select = "SELECT " . $Sel_Chave . " from " . $this->Ini->nm_tabela . $sc_where; 
              $sc_order_by = "pro_codigo, pro_empresa";
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
                  if ($rt->fields[0] == $this->pro_codigo && $rt->fields[1] == $this->pro_empresa)
                  { 
                      $Reg_OK = true;
                  }  
                  $Count_start++;
                  $rt->MoveNext();
              }  
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = $Count_start;
              $rt->Close(); 
          }
      } 
      else 
      { 
          $qt_geral_reg_form_del_producto = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total'];
      } 
      if ($this->nmgp_opcao == "inicio") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = 0; 
      } 
      if ($this->nmgp_opcao == "avanca")  
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']++; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] > $qt_geral_reg_form_del_producto)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = $qt_geral_reg_form_del_producto; 
          }
      } 
      if ($this->nmgp_opcao == "retorna") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']--; 
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] < 0)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = 0; 
          }
      } 
      if ($this->nmgp_opcao == "final") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = $qt_geral_reg_form_del_producto; 
      } 
      if ($this->nmgp_opcao == "navpage" && ($this->nmgp_ordem - 1) <= $qt_geral_reg_form_del_producto) 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = $this->nmgp_ordem - 1; 
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] = 0;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] + 1;
      $this->NM_ajax_info['navSummary']['reg_ini'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] + 1; 
      $this->NM_ajax_info['navSummary']['reg_qtd'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_qtd']; 
      $this->NM_ajax_info['navSummary']['reg_tot'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total'] + 1; 
      $this->NM_gera_nav_page(); 
      $this->NM_ajax_info['navPage'] = $this->SC_nav_page; 
      $GLOBALS["NM_ERRO_IBASE"] = 0;  
//---------- 
      if ($this->nmgp_opcao != "novo" && $this->nmgp_opcao != "nada" && $this->nmgp_opcao != "refresh_insert") 
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['parms'] = ""; 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          { 
              $GLOBALS["NM_ERRO_IBASE"] = 1;  
          } 
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          { 
              $nmgp_select = "SELECT pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $nmgp_select = "SELECT pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          { 
              $nmgp_select = "SELECT pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad from " . $this->Ini->nm_tabela ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $nmgp_select = "SELECT pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad from " . $this->Ini->nm_tabela ; 
          } 
          else 
          { 
              $nmgp_select = "SELECT pro_codigo, pro_codigo_aux, pro_empresa, pro_descripcion, pro_iva, pro_por_iva, pro_ice, pro_por_ice, pro_irbpnr, pro_por_irbpnr, pro_precio, pro_descuento, pro_estado, pro_familia_producto, pro_grupo_compras, pro_grupo_ventas, pro_categoria_producto, pro_cantidad_inventario, pro_costo_promedio, pro_total_inventario, pro_imagen, pro_base_ice, pro_base_irbpnr, pro_compra, pro_venta, pro_stock, pro_aplica_subsidio, pro_precio_sin_subsidio, pro_cta_ingreso, pro_cta_cobrar, pro_cta_puente, pro_cta_cartera_vencida, pro_producto_debi, pro_unidad from " . $this->Ini->nm_tabela ; 
          } 
          $aWhere = array();
          $aWhere[] = $sc_where_filter;
          if ($this->nmgp_opcao == "igual" || (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "R") && ($this->sc_evento == "insert" || $this->sc_evento == "update")) )
          { 
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
              {
                  $aWhere[] = "pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
              {
                  $aWhere[] = "pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
              {
                  $aWhere[] = "pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              }  
              elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $aWhere[] = "pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
              }  
              else  
              {
                  $aWhere[] = "pro_codigo = '$this->pro_codigo' and pro_empresa = '$this->pro_empresa'"; 
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
          $sc_order_by = "pro_codigo, pro_empresa";
          $sc_order_by = str_replace("order by ", "", $sc_order_by);
          $sc_order_by = str_replace("ORDER BY ", "", trim($sc_order_by));
          if (!empty($sc_order_by))
          {
              $nmgp_select .= " order by $sc_order_by "; 
          }
          if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "R")
          {
              if ($this->sc_evento == "insert" || $this->sc_evento == "update")
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['select'] = $nmgp_select;
                  $this->nm_gera_html();
              } 
              elseif (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['select']))
              { 
                  $nmgp_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['select'];
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['select'] = ""; 
              } 
          } 
          if ($this->nmgp_opcao == "igual") 
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) || in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']) ; 
          } 
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = "SelectLimit($nmgp_select, 1, " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] . ")" ; 
              $rs = $this->Db->SelectLimit($nmgp_select, 1, $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']) ; 
          } 
          else  
          { 
              $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
              $rs = $this->Db->Execute($nmgp_select) ; 
              if (!$rs === false && !$rs->EOF) 
              { 
                  $rs->Move($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start']) ;  
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
              if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter']))
              {
                  $this->nmgp_form_empty        = true;
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['first']   = "off";
                  $this->NM_ajax_info['buttonDisplay']['back']    = $this->nmgp_botoes['back']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['forward'] = $this->nmgp_botoes['forward'] = "off";
                  $this->NM_ajax_info['buttonDisplay']['last']    = $this->nmgp_botoes['last']    = "off";
                  $this->NM_ajax_info['buttonDisplay']['update']  = $this->nmgp_botoes['update']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['delete']  = $this->nmgp_botoes['delete']  = "off";
                  $this->NM_ajax_info['buttonDisplay']['first']   = $this->nmgp_botoes['insert']  = "off";
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter'] = true;
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
              $this->pro_codigo = $rs->fields[0] ; 
              $this->nmgp_dados_select['pro_codigo'] = $this->pro_codigo;
              $this->pro_codigo_aux = $rs->fields[1] ; 
              $this->nmgp_dados_select['pro_codigo_aux'] = $this->pro_codigo_aux;
              $this->pro_empresa = $rs->fields[2] ; 
              $this->nmgp_dados_select['pro_empresa'] = $this->pro_empresa;
              $this->pro_descripcion = $rs->fields[3] ; 
              $this->nmgp_dados_select['pro_descripcion'] = $this->pro_descripcion;
              $this->pro_iva = $rs->fields[4] ; 
              $this->nmgp_dados_select['pro_iva'] = $this->pro_iva;
              $this->pro_por_iva = $rs->fields[5] ; 
              $this->nmgp_dados_select['pro_por_iva'] = $this->pro_por_iva;
              $this->pro_ice = $rs->fields[6] ; 
              $this->nmgp_dados_select['pro_ice'] = $this->pro_ice;
              $this->pro_por_ice = $rs->fields[7] ; 
              $this->nmgp_dados_select['pro_por_ice'] = $this->pro_por_ice;
              $this->pro_irbpnr = $rs->fields[8] ; 
              $this->nmgp_dados_select['pro_irbpnr'] = $this->pro_irbpnr;
              $this->pro_por_irbpnr = $rs->fields[9] ; 
              $this->nmgp_dados_select['pro_por_irbpnr'] = $this->pro_por_irbpnr;
              $this->pro_precio = $rs->fields[10] ; 
              $this->nmgp_dados_select['pro_precio'] = $this->pro_precio;
              $this->pro_descuento = $rs->fields[11] ; 
              $this->nmgp_dados_select['pro_descuento'] = $this->pro_descuento;
              $this->pro_estado = $rs->fields[12] ; 
              $this->nmgp_dados_select['pro_estado'] = $this->pro_estado;
              $this->pro_familia_producto = $rs->fields[13] ; 
              $this->nmgp_dados_select['pro_familia_producto'] = $this->pro_familia_producto;
              $this->pro_grupo_compras = $rs->fields[14] ; 
              $this->nmgp_dados_select['pro_grupo_compras'] = $this->pro_grupo_compras;
              $this->pro_grupo_ventas = $rs->fields[15] ; 
              $this->nmgp_dados_select['pro_grupo_ventas'] = $this->pro_grupo_ventas;
              $this->pro_categoria_producto = $rs->fields[16] ; 
              $this->nmgp_dados_select['pro_categoria_producto'] = $this->pro_categoria_producto;
              $this->pro_cantidad_inventario = $rs->fields[17] ; 
              $this->nmgp_dados_select['pro_cantidad_inventario'] = $this->pro_cantidad_inventario;
              $this->pro_costo_promedio = $rs->fields[18] ; 
              $this->nmgp_dados_select['pro_costo_promedio'] = $this->pro_costo_promedio;
              $this->pro_total_inventario = $rs->fields[19] ; 
              $this->nmgp_dados_select['pro_total_inventario'] = $this->pro_total_inventario;
              $this->pro_imagen = $rs->fields[20] ; 
              $this->nmgp_dados_select['pro_imagen'] = $this->pro_imagen;
              $this->pro_base_ice = $rs->fields[21] ; 
              $this->nmgp_dados_select['pro_base_ice'] = $this->pro_base_ice;
              $this->pro_base_irbpnr = $rs->fields[22] ; 
              $this->nmgp_dados_select['pro_base_irbpnr'] = $this->pro_base_irbpnr;
              $this->pro_compra = $rs->fields[23] ; 
              $this->nmgp_dados_select['pro_compra'] = $this->pro_compra;
              $this->pro_venta = $rs->fields[24] ; 
              $this->nmgp_dados_select['pro_venta'] = $this->pro_venta;
              $this->pro_stock = $rs->fields[25] ; 
              $this->nmgp_dados_select['pro_stock'] = $this->pro_stock;
              $this->pro_aplica_subsidio = $rs->fields[26] ; 
              $this->nmgp_dados_select['pro_aplica_subsidio'] = $this->pro_aplica_subsidio;
              $this->pro_precio_sin_subsidio = $rs->fields[27] ; 
              $this->nmgp_dados_select['pro_precio_sin_subsidio'] = $this->pro_precio_sin_subsidio;
              $this->pro_cta_ingreso = $rs->fields[28] ; 
              $this->nmgp_dados_select['pro_cta_ingreso'] = $this->pro_cta_ingreso;
              $this->pro_cta_cobrar = $rs->fields[29] ; 
              $this->nmgp_dados_select['pro_cta_cobrar'] = $this->pro_cta_cobrar;
              $this->pro_cta_puente = $rs->fields[30] ; 
              $this->nmgp_dados_select['pro_cta_puente'] = $this->pro_cta_puente;
              $this->pro_cta_cartera_vencida = $rs->fields[31] ; 
              $this->nmgp_dados_select['pro_cta_cartera_vencida'] = $this->pro_cta_cartera_vencida;
              $this->pro_producto_debi = $rs->fields[32] ; 
              $this->nmgp_dados_select['pro_producto_debi'] = $this->pro_producto_debi;
              $this->pro_unidad = $rs->fields[33] ; 
              $this->nmgp_dados_select['pro_unidad'] = $this->pro_unidad;
          $GLOBALS["NM_ERRO_IBASE"] = 0; 
              $this->nm_troca_decimal(",", ".");
              $this->pro_por_iva = (string)$this->pro_por_iva; 
              $this->pro_por_ice = (string)$this->pro_por_ice; 
              $this->pro_precio = (string)$this->pro_precio; 
              $this->pro_descuento = (string)$this->pro_descuento; 
              $this->pro_familia_producto = (string)$this->pro_familia_producto; 
              $this->pro_grupo_compras = (string)$this->pro_grupo_compras; 
              $this->pro_grupo_ventas = (string)$this->pro_grupo_ventas; 
              $this->pro_cantidad_inventario = (string)$this->pro_cantidad_inventario; 
              $this->pro_costo_promedio = (string)$this->pro_costo_promedio; 
              $this->pro_total_inventario = (string)$this->pro_total_inventario; 
              $this->pro_base_ice = (string)$this->pro_base_ice; 
              $this->pro_base_irbpnr = (string)$this->pro_base_irbpnr; 
              $this->pro_precio_sin_subsidio = (string)$this->pro_precio_sin_subsidio; 
              $this->pro_cta_ingreso = (string)$this->pro_cta_ingreso; 
              $this->pro_cta_cobrar = (string)$this->pro_cta_cobrar; 
              $this->pro_cta_puente = (string)$this->pro_cta_puente; 
              $this->pro_cta_cartera_vencida = (string)$this->pro_cta_cartera_vencida; 
              $this->pro_producto_debi = (string)$this->pro_producto_debi; 
              $this->pro_unidad = (string)$this->pro_unidad; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['parms'] = "pro_codigo?#?$this->pro_codigo?@?pro_empresa?#?$this->pro_empresa?@?";
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sub_dir'][0]  = "/" . $_SESSION['Igtech_RucEmpresa'];
          } 
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select'] = $this->nmgp_dados_select;
          if (!$this->NM_ajax_flag || 'backup_line' != $this->NM_ajax_opcao)
          {
              $this->Nav_permite_ret = 0 != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'];
              $this->Nav_permite_ava = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] < $qt_geral_reg_form_del_producto;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opcao']   = '';
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
              $this->pro_codigo = "";  
              $this->nmgp_dados_form["pro_codigo"] = $this->pro_codigo;
              $this->pro_codigo_aux = "";  
              $this->nmgp_dados_form["pro_codigo_aux"] = $this->pro_codigo_aux;
              $this->pro_empresa = "" . $_SESSION['Igtech_RucEmpresa'] . "";  
              $this->nmgp_dados_form["pro_empresa"] = $this->pro_empresa;
              $this->pro_descripcion = "";  
              $this->nmgp_dados_form["pro_descripcion"] = $this->pro_descripcion;
              $this->pro_iva = "2";  
              $this->nmgp_dados_form["pro_iva"] = $this->pro_iva;
              $this->pro_por_iva = "";  
              $this->nmgp_dados_form["pro_por_iva"] = $this->pro_por_iva;
              $this->pro_ice = "3";  
              $this->nmgp_dados_form["pro_ice"] = $this->pro_ice;
              $this->pro_por_ice = "";  
              $this->nmgp_dados_form["pro_por_ice"] = $this->pro_por_ice;
              $this->pro_irbpnr = "5";  
              $this->nmgp_dados_form["pro_irbpnr"] = $this->pro_irbpnr;
              $this->pro_por_irbpnr = "";  
              $this->nmgp_dados_form["pro_por_irbpnr"] = $this->pro_por_irbpnr;
              $this->pro_precio = "";  
              $this->nmgp_dados_form["pro_precio"] = $this->pro_precio;
              $this->pro_descuento = "";  
              $this->nmgp_dados_form["pro_descuento"] = $this->pro_descuento;
              $this->pro_estado = "V";  
              $this->nmgp_dados_form["pro_estado"] = $this->pro_estado;
              $this->pro_familia_producto = "";  
              $this->nmgp_dados_form["pro_familia_producto"] = $this->pro_familia_producto;
              $this->pro_grupo_compras = "";  
              $this->nmgp_dados_form["pro_grupo_compras"] = $this->pro_grupo_compras;
              $this->pro_grupo_ventas = "";  
              $this->nmgp_dados_form["pro_grupo_ventas"] = $this->pro_grupo_ventas;
              $this->pro_categoria_producto = "";  
              $this->nmgp_dados_form["pro_categoria_producto"] = $this->pro_categoria_producto;
              $this->pro_cantidad_inventario = "0";  
              $this->nmgp_dados_form["pro_cantidad_inventario"] = $this->pro_cantidad_inventario;
              $this->pro_costo_promedio = "0";  
              $this->nmgp_dados_form["pro_costo_promedio"] = $this->pro_costo_promedio;
              $this->pro_total_inventario = "0";  
              $this->nmgp_dados_form["pro_total_inventario"] = $this->pro_total_inventario;
              $this->pro_imagen = "";  
              $this->pro_imagen_ul_name = "" ;  
              $this->pro_imagen_ul_type = "" ;  
              $this->nmgp_dados_form["pro_imagen"] = $this->pro_imagen;
              $this->pro_base_ice = "";  
              $this->nmgp_dados_form["pro_base_ice"] = $this->pro_base_ice;
              $this->pro_base_irbpnr = "";  
              $this->nmgp_dados_form["pro_base_irbpnr"] = $this->pro_base_irbpnr;
              $this->pro_compra = "";  
              $this->nmgp_dados_form["pro_compra"] = $this->pro_compra;
              $this->pro_venta = "";  
              $this->nmgp_dados_form["pro_venta"] = $this->pro_venta;
              $this->pro_stock = "";  
              $this->nmgp_dados_form["pro_stock"] = $this->pro_stock;
              $this->pro_aplica_subsidio = "";  
              $this->nmgp_dados_form["pro_aplica_subsidio"] = $this->pro_aplica_subsidio;
              $this->pro_precio_sin_subsidio = "";  
              $this->nmgp_dados_form["pro_precio_sin_subsidio"] = $this->pro_precio_sin_subsidio;
              $this->pro_cta_ingreso = "";  
              $this->nmgp_dados_form["pro_cta_ingreso"] = $this->pro_cta_ingreso;
              $this->pro_cta_cobrar = "";  
              $this->nmgp_dados_form["pro_cta_cobrar"] = $this->pro_cta_cobrar;
              $this->pro_cta_puente = "";  
              $this->nmgp_dados_form["pro_cta_puente"] = $this->pro_cta_puente;
              $this->pro_cta_cartera_vencida = "";  
              $this->nmgp_dados_form["pro_cta_cartera_vencida"] = $this->pro_cta_cartera_vencida;
              $this->pro_producto_debi = "";  
              $this->nmgp_dados_form["pro_producto_debi"] = $this->pro_producto_debi;
              $this->pro_unidad = "";  
              $this->nmgp_dados_form["pro_unidad"] = $this->pro_unidad;
              $this->base_iva = "";  
              $this->nmgp_dados_form["base_iva"] = $this->base_iva;
              $this->precio_con_impuesto = "";  
              $this->nmgp_dados_form["precio_con_impuesto"] = $this->precio_con_impuesto;
              $this->pro_valor_subsidio = "";  
              $this->nmgp_dados_form["pro_valor_subsidio"] = $this->pro_valor_subsidio;
              $this->tarifa_ice = "";  
              $this->nmgp_dados_form["tarifa_ice"] = $this->tarifa_ice;
              $this->tarifa_irbpnr = "";  
              $this->nmgp_dados_form["tarifa_irbpnr"] = $this->tarifa_irbpnr;
              $this->tarifa_iva = "";  
              $this->nmgp_dados_form["tarifa_iva"] = $this->tarifa_iva;
              $this->total_ice = "";  
              $this->nmgp_dados_form["total_ice"] = $this->total_ice;
              $this->total_irbpnr = "";  
              $this->nmgp_dados_form["total_irbpnr"] = $this->total_irbpnr;
              $this->total_iva = "";  
              $this->nmgp_dados_form["total_iva"] = $this->total_iva;
              $this->valor_ice = "";  
              $this->nmgp_dados_form["valor_ice"] = $this->valor_ice;
              $this->valor_irbpnr = "";  
              $this->nmgp_dados_form["valor_irbpnr"] = $this->valor_irbpnr;
              $this->valor_iva = "";  
              $this->nmgp_dados_form["valor_iva"] = $this->valor_iva;
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_form'] = $this->nmgp_dados_form;
              $this->formatado = false;
          }
          if (($this->Embutida_form || $this->Embutida_multi) && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key']))
          {
              foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['foreign_key'] as $sFKName => $sFKValue)
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
//-- 
   function nm_db_retorna($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa < '$this->pro_empresa'" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->pro_empresa = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo < '$this->pro_codigo'" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->pro_codigo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
     } 
     else 
     { 
        $this->nmgp_opcao = "inicio";  
        $rs->Close();  
        return ; 
     } 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     $this->pro_empresa = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_avanca($str_where_param = '') 
   {  
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo' and pro_empresa > '$this->pro_empresa'" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->pro_empresa = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
         $this->nmgp_opcao = "igual";  
         return ;  
     } 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " where pro_codigo > '$this->pro_codigo'" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (isset($rs->fields[0]) && $rs->fields[0] != "") 
     { 
         $this->pro_codigo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
         $rs->Close();  
     } 
     else 
     { 
        $this->nmgp_opcao = "final";  
        $rs->Close();  
        return ; 
     } 
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . " where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     $this->pro_empresa = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_inicio($str_where_param = '') 
   {   
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select count(*) AS countTest from " . $this->Ini->nm_tabela; 
     $rs = $this->Db->Execute("select count(*) AS countTest from " . $this->Ini->nm_tabela);
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if ($rs->fields[0] == 0) 
     { 
         $this->nmgp_opcao = "novo"; 
         $this->nm_flag_saida_novo = "S"; 
         $rs->Close(); 
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return;
     }
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter']))
         { 
             $rs->Close();  
             return ; 
         } 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->pro_codigo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select min(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     $this->pro_empresa = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
   } 
// 
//-- 
   function nm_db_final($str_where_param = '') 
   { 
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
     $str_where_filter = ('' != $str_where_param) ? ' where ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_codigo) from " . $this->Ini->nm_tabela . " " . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     if (!isset($rs->fields[0]) || $rs->EOF) 
     { 
         $this->nm_flag_saida_novo = "S"; 
         $this->nmgp_opcao = "novo";  
         $rs->Close();  
         if ($this->aba_iframe)
         {
             $this->nmgp_botoes['exit'] = 'off';
         }
         return ; 
     } 
     $this->pro_codigo = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $str_where_filter = ('' != $str_where_param) ? ' and ' . $str_where_param : '';
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     else  
     {
         $_SESSION['scriptcase']['sc_sql_ult_comando'] = "select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter; 
         $rs = $this->Db->Execute("select max(pro_empresa) from " . $this->Ini->nm_tabela . "  where pro_codigo = '$this->pro_codigo'" . $str_where_filter); 
     }  
     if ($rs === false && !$rs->EOF && $GLOBALS["NM_ERRO_IBASE"] != 1) 
     { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
     $this->pro_empresa = substr($this->Db->qstr($rs->fields[0]), 1, -1); 
     $rs->Close();  
     $this->nmgp_opcao = "igual";  
     return ;  
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
       $this->SC_log_arr['keys']['pro_codigo'] =  $this->pro_codigo;
       $this->SC_log_arr['keys']['pro_empresa'] =  $this->pro_empresa;
   }
// 
   function NM_gera_log_old() 
   {
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select']))
       {
           $nmgp_dados_select = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dados_select'];
           $this->SC_log_arr['fields']['pro_codigo_aux']['0'] =  $nmgp_dados_select['pro_codigo_aux'];
           $this->SC_log_arr['fields']['pro_descripcion']['0'] =  $nmgp_dados_select['pro_descripcion'];
           $this->SC_log_arr['fields']['pro_iva']['0'] =  $nmgp_dados_select['pro_iva'];
           $this->SC_log_arr['fields']['pro_por_iva']['0'] =  $nmgp_dados_select['pro_por_iva'];
           $this->SC_log_arr['fields']['pro_ice']['0'] =  $nmgp_dados_select['pro_ice'];
           $this->SC_log_arr['fields']['pro_por_ice']['0'] =  $nmgp_dados_select['pro_por_ice'];
           $this->SC_log_arr['fields']['pro_irbpnr']['0'] =  $nmgp_dados_select['pro_irbpnr'];
           $this->SC_log_arr['fields']['pro_por_irbpnr']['0'] =  $nmgp_dados_select['pro_por_irbpnr'];
           $this->SC_log_arr['fields']['pro_precio']['0'] =  $nmgp_dados_select['pro_precio'];
           $this->SC_log_arr['fields']['pro_descuento']['0'] =  $nmgp_dados_select['pro_descuento'];
           $this->SC_log_arr['fields']['pro_estado']['0'] =  $nmgp_dados_select['pro_estado'];
           $this->SC_log_arr['fields']['pro_familia_producto']['0'] =  $nmgp_dados_select['pro_familia_producto'];
           $this->SC_log_arr['fields']['pro_grupo_compras']['0'] =  $nmgp_dados_select['pro_grupo_compras'];
           $this->SC_log_arr['fields']['pro_grupo_ventas']['0'] =  $nmgp_dados_select['pro_grupo_ventas'];
           $this->SC_log_arr['fields']['pro_categoria_producto']['0'] =  $nmgp_dados_select['pro_categoria_producto'];
           $this->SC_log_arr['fields']['pro_cantidad_inventario']['0'] =  $nmgp_dados_select['pro_cantidad_inventario'];
           $this->SC_log_arr['fields']['pro_costo_promedio']['0'] =  $nmgp_dados_select['pro_costo_promedio'];
           $this->SC_log_arr['fields']['pro_total_inventario']['0'] =  $nmgp_dados_select['pro_total_inventario'];
           $this->SC_log_arr['fields']['pro_imagen']['0'] =  $nmgp_dados_select['pro_imagen'];
           $this->SC_log_arr['fields']['pro_base_ice']['0'] =  $nmgp_dados_select['pro_base_ice'];
           $this->SC_log_arr['fields']['pro_base_irbpnr']['0'] =  $nmgp_dados_select['pro_base_irbpnr'];
           $this->SC_log_arr['fields']['pro_compra']['0'] =  $nmgp_dados_select['pro_compra'];
           $this->SC_log_arr['fields']['pro_venta']['0'] =  $nmgp_dados_select['pro_venta'];
           $this->SC_log_arr['fields']['pro_stock']['0'] =  $nmgp_dados_select['pro_stock'];
           $this->SC_log_arr['fields']['pro_aplica_subsidio']['0'] =  $nmgp_dados_select['pro_aplica_subsidio'];
           $this->SC_log_arr['fields']['pro_precio_sin_subsidio']['0'] =  $nmgp_dados_select['pro_precio_sin_subsidio'];
           $this->SC_log_arr['fields']['pro_cta_ingreso']['0'] =  $nmgp_dados_select['pro_cta_ingreso'];
           $this->SC_log_arr['fields']['pro_cta_cobrar']['0'] =  $nmgp_dados_select['pro_cta_cobrar'];
           $this->SC_log_arr['fields']['pro_cta_puente']['0'] =  $nmgp_dados_select['pro_cta_puente'];
           $this->SC_log_arr['fields']['pro_cta_cartera_vencida']['0'] =  $nmgp_dados_select['pro_cta_cartera_vencida'];
           $this->SC_log_arr['fields']['pro_producto_debi']['0'] =  $nmgp_dados_select['pro_producto_debi'];
           $this->SC_log_arr['fields']['pro_unidad']['0'] =  $nmgp_dados_select['pro_unidad'];
       }
   }
// 
   function NM_gera_log_new() 
   {
       $this->SC_log_arr['fields']['pro_codigo_aux']['1'] =  $this->pro_codigo_aux;
       $this->SC_log_arr['fields']['pro_descripcion']['1'] =  $this->pro_descripcion;
       $this->SC_log_arr['fields']['pro_iva']['1'] =  $this->pro_iva;
       $this->SC_log_arr['fields']['pro_por_iva']['1'] =  $this->pro_por_iva;
       $this->SC_log_arr['fields']['pro_ice']['1'] =  $this->pro_ice;
       $this->SC_log_arr['fields']['pro_por_ice']['1'] =  $this->pro_por_ice;
       $this->SC_log_arr['fields']['pro_irbpnr']['1'] =  $this->pro_irbpnr;
       $this->SC_log_arr['fields']['pro_por_irbpnr']['1'] =  $this->pro_por_irbpnr;
       $this->SC_log_arr['fields']['pro_precio']['1'] =  $this->pro_precio;
       $this->SC_log_arr['fields']['pro_descuento']['1'] =  $this->pro_descuento;
       $this->SC_log_arr['fields']['pro_estado']['1'] =  $this->pro_estado;
       $this->SC_log_arr['fields']['pro_familia_producto']['1'] =  $this->pro_familia_producto;
       $this->SC_log_arr['fields']['pro_grupo_compras']['1'] =  $this->pro_grupo_compras;
       $this->SC_log_arr['fields']['pro_grupo_ventas']['1'] =  $this->pro_grupo_ventas;
       $this->SC_log_arr['fields']['pro_categoria_producto']['1'] =  $this->pro_categoria_producto;
       $this->SC_log_arr['fields']['pro_cantidad_inventario']['1'] =  $this->pro_cantidad_inventario;
       $this->SC_log_arr['fields']['pro_costo_promedio']['1'] =  $this->pro_costo_promedio;
       $this->SC_log_arr['fields']['pro_total_inventario']['1'] =  $this->pro_total_inventario;
       $this->SC_log_arr['fields']['pro_imagen']['1'] =  $this->pro_imagen;
       $this->SC_log_arr['fields']['pro_base_ice']['1'] =  $this->pro_base_ice;
       $this->SC_log_arr['fields']['pro_base_irbpnr']['1'] =  $this->pro_base_irbpnr;
       $this->SC_log_arr['fields']['pro_compra']['1'] =  $this->pro_compra;
       $this->SC_log_arr['fields']['pro_venta']['1'] =  $this->pro_venta;
       $this->SC_log_arr['fields']['pro_stock']['1'] =  $this->pro_stock;
       $this->SC_log_arr['fields']['pro_aplica_subsidio']['1'] =  $this->pro_aplica_subsidio;
       $this->SC_log_arr['fields']['pro_precio_sin_subsidio']['1'] =  $this->pro_precio_sin_subsidio;
       $this->SC_log_arr['fields']['pro_cta_ingreso']['1'] =  $this->pro_cta_ingreso;
       $this->SC_log_arr['fields']['pro_cta_cobrar']['1'] =  $this->pro_cta_cobrar;
       $this->SC_log_arr['fields']['pro_cta_puente']['1'] =  $this->pro_cta_puente;
       $this->SC_log_arr['fields']['pro_cta_cartera_vencida']['1'] =  $this->pro_cta_cartera_vencida;
       $this->SC_log_arr['fields']['pro_producto_debi']['1'] =  $this->pro_producto_debi;
       $this->SC_log_arr['fields']['pro_unidad']['1'] =  $this->pro_unidad;
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
       $Log_labels['pro_codigo_aux'] =  "{lang_codigo_secundario}";
       $Log_labels['pro_descripcion'] =  "{lang_descripcion}";
       $Log_labels['pro_iva'] =  "{lang_impuesto}";
       $Log_labels['pro_por_iva'] =  "{lang_tarifa_iva}";
       $Log_labels['pro_ice'] =  "{lang_impuesto}";
       $Log_labels['pro_por_ice'] =  "{lang_tarifa_ice}";
       $Log_labels['pro_irbpnr'] =  "{lang_impuesto}";
       $Log_labels['pro_por_irbpnr'] =  "{lang_tarifa_irbpnr}";
       $Log_labels['pro_precio'] =  "{lang_precio_unitario}";
       $Log_labels['pro_descuento'] =  "{lang_descuento}";
       $Log_labels['pro_estado'] =  "{lang_estado}";
       $Log_labels['pro_familia_producto'] =  "{lang_familias_producto}";
       $Log_labels['pro_grupo_compras'] =  "{lang_grupo_compras}";
       $Log_labels['pro_grupo_ventas'] =  "{lang_grupo_ventas}";
       $Log_labels['pro_categoria_producto'] =  "{lang_categoria}";
       $Log_labels['pro_cantidad_inventario'] =  "{lang_cantidad_inicial}";
       $Log_labels['pro_costo_promedio'] =  "{lang_costo_promedio}";
       $Log_labels['pro_total_inventario'] =  "{lang_total_inventario}";
       $Log_labels['pro_imagen'] =  "{lang_btns_img}";
       $Log_labels['pro_base_ice'] =  "{lang_base_ice}";
       $Log_labels['pro_base_irbpnr'] =  "{lang_base_irbpnr}";
       $Log_labels['pro_compra'] =  "{lang_producto_compra}";
       $Log_labels['pro_venta'] =  "{lang_producto_venta}";
       $Log_labels['pro_stock'] =  "{lang_mueve_inventario}";
       $Log_labels['pro_aplica_subsidio'] =  "{lang_aplica_subsidio}";
       $Log_labels['pro_precio_sin_subsidio'] =  "{lang_precio_sin_subsidio}";
       $Log_labels['pro_cta_ingreso'] =  "{lang_cuenta_ingreso}";
       $Log_labels['pro_cta_cobrar'] =  "{lang_cuenta_x_cobrar}";
       $Log_labels['pro_cta_puente'] =  "{lang_cuenta_puente}";
       $Log_labels['pro_cta_cartera_vencida'] =  "{lang_cuenta_cartera_vencida}";
       $Log_labels['pro_producto_debi'] =  "{lang_producto_debi}";
       $Log_labels['pro_unidad'] =  "{lang_unidad}";
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
       $rec_tot    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total'] + 1;
       $rec_fim    = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['reg_start'] + 1;
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
                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'] = array();
        }

        function storeRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'])) {
                        $this->initializeRecordState();
                }
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert])) {
                        $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert] = array();
                }

                $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert]['buttons'] = array(
                        'delete' => $this->nmgp_botoes['delete'],
                        'update' => $this->nmgp_botoes['update']
                );
        }

        function loadRecordState($sc_seq_vert = 0) {
                if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state']) || !isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert])) {
                        return;
                }

                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert]['buttons']['delete'])) {
                        $this->nmgp_botoes['delete'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert]['buttons']['delete'];
                }
                if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert]['buttons']['update'])) {
                        $this->nmgp_botoes['update'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['record_state'][$sc_seq_vert]['buttons']['update'];
                }
        }

//
function pro_precio_sin_subsidio_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_aplica_subsidio = $this->pro_aplica_subsidio;
$original_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
$original_pro_precio = $this->pro_precio;
$original_pro_valor_subsidio = $this->pro_valor_subsidio;

if($this->pro_aplica_subsidio =='S'){
	if($this->pro_precio_sin_subsidio <>'' and $this->pro_precio <>''){
		if($this->pro_precio_sin_subsidio >$this->pro_precio ){
			$this->pro_valor_subsidio =$this->pro_precio_sin_subsidio -$this->pro_precio ;
		}else{
			
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "El precio sin subsidio debe ser mayor al precio";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_producto';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_producto';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "El precio sin subsidio debe ser mayor al precio";
 }
;
		}
	}
}

$modificado_pro_aplica_subsidio = $this->pro_aplica_subsidio;
$modificado_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_valor_subsidio = $this->pro_valor_subsidio;
$this->nm_formatar_campos('pro_aplica_subsidio', 'pro_precio_sin_subsidio', 'pro_precio', 'pro_valor_subsidio');
if ($original_pro_aplica_subsidio !== $modificado_pro_aplica_subsidio || isset($this->nmgp_cmp_readonly['pro_aplica_subsidio']) || (isset($bFlagRead_pro_aplica_subsidio) && $bFlagRead_pro_aplica_subsidio))
{
    $this->ajax_return_values_pro_aplica_subsidio(true);
}
if ($original_pro_precio_sin_subsidio !== $modificado_pro_precio_sin_subsidio || isset($this->nmgp_cmp_readonly['pro_precio_sin_subsidio']) || (isset($bFlagRead_pro_precio_sin_subsidio) && $bFlagRead_pro_precio_sin_subsidio))
{
    $this->ajax_return_values_pro_precio_sin_subsidio(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_valor_subsidio !== $modificado_pro_valor_subsidio || isset($this->nmgp_cmp_readonly['pro_valor_subsidio']) || (isset($bFlagRead_pro_valor_subsidio) && $bFlagRead_pro_valor_subsidio))
{
    $this->ajax_return_values_pro_valor_subsidio(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_aplica_subsidio_onClick()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_aplica_subsidio = $this->pro_aplica_subsidio;
$original_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
$original_pro_valor_subsidio = $this->pro_valor_subsidio;

if ( $this->pro_aplica_subsidio =='S') {
	$this->sc_field_readonly("pro_precio_sin_subsidio", 'off');
}else{
	$this->sc_field_readonly("pro_precio_sin_subsidio", 'on');
	$this->pro_precio_sin_subsidio =0;
	$this->pro_valor_subsidio =0;
}


$modificado_pro_aplica_subsidio = $this->pro_aplica_subsidio;
$modificado_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
$modificado_pro_valor_subsidio = $this->pro_valor_subsidio;
$this->nm_formatar_campos('pro_aplica_subsidio', 'pro_precio_sin_subsidio', 'pro_valor_subsidio');
if ($original_pro_aplica_subsidio !== $modificado_pro_aplica_subsidio || isset($this->nmgp_cmp_readonly['pro_aplica_subsidio']) || (isset($bFlagRead_pro_aplica_subsidio) && $bFlagRead_pro_aplica_subsidio))
{
    $this->ajax_return_values_pro_aplica_subsidio(true);
}
if ($original_pro_precio_sin_subsidio !== $modificado_pro_precio_sin_subsidio || isset($this->nmgp_cmp_readonly['pro_precio_sin_subsidio']) || (isset($bFlagRead_pro_precio_sin_subsidio) && $bFlagRead_pro_precio_sin_subsidio))
{
    $this->ajax_return_values_pro_precio_sin_subsidio(true);
}
if ($original_pro_valor_subsidio !== $modificado_pro_valor_subsidio || isset($this->nmgp_cmp_readonly['pro_valor_subsidio']) || (isset($bFlagRead_pro_valor_subsidio) && $bFlagRead_pro_valor_subsidio))
{
    $this->ajax_return_values_pro_valor_subsidio(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_precio_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_aplica_subsidio = $this->pro_aplica_subsidio;
$original_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
$original_pro_precio = $this->pro_precio;
$original_pro_valor_subsidio = $this->pro_valor_subsidio;
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

if($this->pro_aplica_subsidio =='S'){
	if($this->pro_precio_sin_subsidio <>'' and $this->pro_precio <>''){
		if($this->pro_precio_sin_subsidio >$this->pro_precio ){
			$this->pro_valor_subsidio =$this->pro_precio_sin_subsidio -$this->pro_precio ;
		}else{
			
 if (!isset($this->Campos_Mens_erro)){$this->Campos_Mens_erro = "";}
 if (!empty($this->Campos_Mens_erro)){$this->Campos_Mens_erro .= "<br>";}$this->Campos_Mens_erro .= "El precio sin subsidio debe ser mayor al precio";
 if ('submit_form' == $this->NM_ajax_opcao || 'event_' == substr($this->NM_ajax_opcao, 0, 6) || (isset($this->wizard_action) && 'change_step' == $this->wizard_action))
 {
  if (isset($this->wizard_action) && 'change_step' == $this->wizard_action) {
   $sErrorIndex = 'geral_form_del_producto';
  } elseif ('submit_form' == $this->NM_ajax_opcao) {
   $sErrorIndex = 'geral_form_del_producto';
  } else {
   $sErrorIndex = substr(substr($this->NM_ajax_opcao, 0, strrpos($this->NM_ajax_opcao, '_')), 6);
  }
  $this->NM_ajax_info['errList'][$sErrorIndex][] = "El precio sin subsidio debe ser mayor al precio";
 }
;
		}
	}
}	
$this->calculo_impuestos();


$modificado_pro_aplica_subsidio = $this->pro_aplica_subsidio;
$modificado_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_valor_subsidio = $this->pro_valor_subsidio;
$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_aplica_subsidio', 'pro_precio_sin_subsidio', 'pro_precio', 'pro_valor_subsidio', 'pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_aplica_subsidio !== $modificado_pro_aplica_subsidio || isset($this->nmgp_cmp_readonly['pro_aplica_subsidio']) || (isset($bFlagRead_pro_aplica_subsidio) && $bFlagRead_pro_aplica_subsidio))
{
    $this->ajax_return_values_pro_aplica_subsidio(true);
}
if ($original_pro_precio_sin_subsidio !== $modificado_pro_precio_sin_subsidio || isset($this->nmgp_cmp_readonly['pro_precio_sin_subsidio']) || (isset($bFlagRead_pro_precio_sin_subsidio) && $bFlagRead_pro_precio_sin_subsidio))
{
    $this->ajax_return_values_pro_precio_sin_subsidio(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_valor_subsidio !== $modificado_pro_valor_subsidio || isset($this->nmgp_cmp_readonly['pro_valor_subsidio']) || (isset($bFlagRead_pro_valor_subsidio) && $bFlagRead_pro_valor_subsidio))
{
    $this->ajax_return_values_pro_valor_subsidio(true);
}
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_por_iva_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_precio_con_impuesto = $this->precio_con_impuesto;

if($this->pro_precio <>''){
	$check_sql = "SELECT iva_porcentaje
				FROM sri_tarifa_iva 
				WHERE iva_codigo=".$this->pro_por_iva ." 
				and iva_estado='V'
				ORDER BY iva_descripcion";
	 
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
	   $this->tarifa_iva =$this->rs[0][0];
	}else{
		$this->tarifa_iva =0;
	}
	
}else{
	$this->precio_con_impuesto =0.00;
}


$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_precio', 'pro_por_iva', 'tarifa_iva', 'precio_con_impuesto');
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_cantidad_inventario_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_cantidad_inventario = $this->pro_cantidad_inventario;
$original_pro_costo_promedio = $this->pro_costo_promedio;
$original_pro_total_inventario = $this->pro_total_inventario;

if($this->pro_cantidad_inventario <>0 and $this->pro_costo_promedio <>0){
	$this->pro_total_inventario =round($this->pro_cantidad_inventario *$this->pro_costo_promedio ,2);
}	


$modificado_pro_cantidad_inventario = $this->pro_cantidad_inventario;
$modificado_pro_costo_promedio = $this->pro_costo_promedio;
$modificado_pro_total_inventario = $this->pro_total_inventario;
$this->nm_formatar_campos('pro_cantidad_inventario', 'pro_costo_promedio', 'pro_total_inventario');
if ($original_pro_cantidad_inventario !== $modificado_pro_cantidad_inventario || isset($this->nmgp_cmp_readonly['pro_cantidad_inventario']) || (isset($bFlagRead_pro_cantidad_inventario) && $bFlagRead_pro_cantidad_inventario))
{
    $this->ajax_return_values_pro_cantidad_inventario(true);
}
if ($original_pro_costo_promedio !== $modificado_pro_costo_promedio || isset($this->nmgp_cmp_readonly['pro_costo_promedio']) || (isset($bFlagRead_pro_costo_promedio) && $bFlagRead_pro_costo_promedio))
{
    $this->ajax_return_values_pro_costo_promedio(true);
}
if ($original_pro_total_inventario !== $modificado_pro_total_inventario || isset($this->nmgp_cmp_readonly['pro_total_inventario']) || (isset($bFlagRead_pro_total_inventario) && $bFlagRead_pro_total_inventario))
{
    $this->ajax_return_values_pro_total_inventario(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_por_ice_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_por_iva_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_por_ice_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_por_irbpnr_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_base_ice_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_por_irbpnr_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_base_irbpnr_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_base_ice = $this->pro_base_ice;
$original_pro_base_irbpnr = $this->pro_base_irbpnr;
$original_pro_por_ice = $this->pro_por_ice;
$original_tarifa_ice = $this->tarifa_ice;
$original_total_ice = $this->total_ice;
$original_base_iva = $this->base_iva;
$original_pro_precio = $this->pro_precio;
$original_pro_por_iva = $this->pro_por_iva;
$original_tarifa_iva = $this->tarifa_iva;
$original_total_iva = $this->total_iva;
$original_pro_por_irbpnr = $this->pro_por_irbpnr;
$original_tarifa_irbpnr = $this->tarifa_irbpnr;
$original_total_irbpnr = $this->total_irbpnr;
$original_precio_con_impuesto = $this->precio_con_impuesto;

$this->calculo_impuestos();

$modificado_pro_base_ice = $this->pro_base_ice;
$modificado_pro_base_irbpnr = $this->pro_base_irbpnr;
$modificado_pro_por_ice = $this->pro_por_ice;
$modificado_tarifa_ice = $this->tarifa_ice;
$modificado_total_ice = $this->total_ice;
$modificado_base_iva = $this->base_iva;
$modificado_pro_precio = $this->pro_precio;
$modificado_pro_por_iva = $this->pro_por_iva;
$modificado_tarifa_iva = $this->tarifa_iva;
$modificado_total_iva = $this->total_iva;
$modificado_pro_por_irbpnr = $this->pro_por_irbpnr;
$modificado_tarifa_irbpnr = $this->tarifa_irbpnr;
$modificado_total_irbpnr = $this->total_irbpnr;
$modificado_precio_con_impuesto = $this->precio_con_impuesto;
$this->nm_formatar_campos('pro_base_ice', 'pro_base_irbpnr', 'pro_por_ice', 'tarifa_ice', 'total_ice', 'base_iva', 'pro_precio', 'pro_por_iva', 'tarifa_iva', 'total_iva', 'pro_por_irbpnr', 'tarifa_irbpnr', 'total_irbpnr', 'precio_con_impuesto');
if ($original_pro_base_ice !== $modificado_pro_base_ice || isset($this->nmgp_cmp_readonly['pro_base_ice']) || (isset($bFlagRead_pro_base_ice) && $bFlagRead_pro_base_ice))
{
    $this->ajax_return_values_pro_base_ice(true);
}
if ($original_pro_base_irbpnr !== $modificado_pro_base_irbpnr || isset($this->nmgp_cmp_readonly['pro_base_irbpnr']) || (isset($bFlagRead_pro_base_irbpnr) && $bFlagRead_pro_base_irbpnr))
{
    $this->ajax_return_values_pro_base_irbpnr(true);
}
if ($original_pro_por_ice !== $modificado_pro_por_ice || isset($this->nmgp_cmp_readonly['pro_por_ice']) || (isset($bFlagRead_pro_por_ice) && $bFlagRead_pro_por_ice))
{
    $this->ajax_return_values_pro_por_ice(true);
}
if ($original_tarifa_ice !== $modificado_tarifa_ice || isset($this->nmgp_cmp_readonly['tarifa_ice']) || (isset($bFlagRead_tarifa_ice) && $bFlagRead_tarifa_ice))
{
    $this->ajax_return_values_tarifa_ice(true);
}
if ($original_total_ice !== $modificado_total_ice || isset($this->nmgp_cmp_readonly['total_ice']) || (isset($bFlagRead_total_ice) && $bFlagRead_total_ice))
{
    $this->ajax_return_values_total_ice(true);
}
if ($original_base_iva !== $modificado_base_iva || isset($this->nmgp_cmp_readonly['base_iva']) || (isset($bFlagRead_base_iva) && $bFlagRead_base_iva))
{
    $this->ajax_return_values_base_iva(true);
}
if ($original_pro_precio !== $modificado_pro_precio || isset($this->nmgp_cmp_readonly['pro_precio']) || (isset($bFlagRead_pro_precio) && $bFlagRead_pro_precio))
{
    $this->ajax_return_values_pro_precio(true);
}
if ($original_pro_por_iva !== $modificado_pro_por_iva || isset($this->nmgp_cmp_readonly['pro_por_iva']) || (isset($bFlagRead_pro_por_iva) && $bFlagRead_pro_por_iva))
{
    $this->ajax_return_values_pro_por_iva(true);
}
if ($original_tarifa_iva !== $modificado_tarifa_iva || isset($this->nmgp_cmp_readonly['tarifa_iva']) || (isset($bFlagRead_tarifa_iva) && $bFlagRead_tarifa_iva))
{
    $this->ajax_return_values_tarifa_iva(true);
}
if ($original_total_iva !== $modificado_total_iva || isset($this->nmgp_cmp_readonly['total_iva']) || (isset($bFlagRead_total_iva) && $bFlagRead_total_iva))
{
    $this->ajax_return_values_total_iva(true);
}
if ($original_pro_por_irbpnr !== $modificado_pro_por_irbpnr || isset($this->nmgp_cmp_readonly['pro_por_irbpnr']) || (isset($bFlagRead_pro_por_irbpnr) && $bFlagRead_pro_por_irbpnr))
{
    $this->ajax_return_values_pro_por_irbpnr(true);
}
if ($original_tarifa_irbpnr !== $modificado_tarifa_irbpnr || isset($this->nmgp_cmp_readonly['tarifa_irbpnr']) || (isset($bFlagRead_tarifa_irbpnr) && $bFlagRead_tarifa_irbpnr))
{
    $this->ajax_return_values_tarifa_irbpnr(true);
}
if ($original_total_irbpnr !== $modificado_total_irbpnr || isset($this->nmgp_cmp_readonly['total_irbpnr']) || (isset($bFlagRead_total_irbpnr) && $bFlagRead_total_irbpnr))
{
    $this->ajax_return_values_total_irbpnr(true);
}
if ($original_precio_con_impuesto !== $modificado_precio_con_impuesto || isset($this->nmgp_cmp_readonly['precio_con_impuesto']) || (isset($bFlagRead_precio_con_impuesto) && $bFlagRead_precio_con_impuesto))
{
    $this->ajax_return_values_precio_con_impuesto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_costo_promedio_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_cantidad_inventario = $this->pro_cantidad_inventario;
$original_pro_costo_promedio = $this->pro_costo_promedio;
$original_pro_total_inventario = $this->pro_total_inventario;

if($this->pro_cantidad_inventario <>0 and $this->pro_costo_promedio <>0){
	$this->pro_total_inventario =round($this->pro_cantidad_inventario *$this->pro_costo_promedio ,2);
}	


$modificado_pro_cantidad_inventario = $this->pro_cantidad_inventario;
$modificado_pro_costo_promedio = $this->pro_costo_promedio;
$modificado_pro_total_inventario = $this->pro_total_inventario;
$this->nm_formatar_campos('pro_cantidad_inventario', 'pro_costo_promedio', 'pro_total_inventario');
if ($original_pro_cantidad_inventario !== $modificado_pro_cantidad_inventario || isset($this->nmgp_cmp_readonly['pro_cantidad_inventario']) || (isset($bFlagRead_pro_cantidad_inventario) && $bFlagRead_pro_cantidad_inventario))
{
    $this->ajax_return_values_pro_cantidad_inventario(true);
}
if ($original_pro_costo_promedio !== $modificado_pro_costo_promedio || isset($this->nmgp_cmp_readonly['pro_costo_promedio']) || (isset($bFlagRead_pro_costo_promedio) && $bFlagRead_pro_costo_promedio))
{
    $this->ajax_return_values_pro_costo_promedio(true);
}
if ($original_pro_total_inventario !== $modificado_pro_total_inventario || isset($this->nmgp_cmp_readonly['pro_total_inventario']) || (isset($bFlagRead_pro_total_inventario) && $bFlagRead_pro_total_inventario))
{
    $this->ajax_return_values_pro_total_inventario(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;


$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function calculo_impuestos()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
if($this->pro_base_ice ==''){
	$this->pro_base_ice =0;
}
if($this->pro_base_irbpnr ==''){
	$this->pro_base_irbpnr =0;
}
$check_sql = "SELECT ice_tarifa_especifica 
				FROM sri_tarifa_ice 
				WHERE ice_id=".$this->pro_por_ice ." 
				and ice_estado='V'
				ORDER BY ice_descripcion";
 
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
   $this->tarifa_ice =$this->rs[0][0];
}else{
	$this->tarifa_ice =0;
}

if($this->pro_base_ice <>''){
	$this->total_ice =round($this->pro_base_ice *$this->tarifa_ice ,2);
}else{
	$this->total_ice =0.00;
}
$this->valor_ice =$this->total_ice ;
$this->base_iva =$this->pro_precio +$this->valor_ice ;
$check_sql = "SELECT iva_porcentaje 
			  FROM sri_tarifa_iva 
			  WHERE iva_codigo=".$this->pro_por_iva ." 
				and iva_estado='V'
				ORDER BY iva_descripcion";
 
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
   $this->tarifa_iva =$this->rs[0][0];
}else{
	$this->tarifa_iva =0;
}

if($this->pro_base_ice <>''){
	$this->total_iva =round($this->base_iva *$this->tarifa_iva /100,2);
}else{
	$this->total_iva =0.00;
}
$this->valor_iva =$this->total_iva ;

$check_sql = "SELECT irbpnr_tarifa_especifica
				FROM sri_tarifa_irbpnr 
				WHERE irbpnr_codigo='".$this->pro_por_irbpnr ."'
				and irbpnr_estado='V'";
 
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
   $this->tarifa_irbpnr =$this->rs[0][0];
}else{
	$this->tarifa_irbpnr =0;
}

if($this->pro_base_irbpnr <>''){
	$this->total_irbpnr =round($this->pro_base_irbpnr *$this->tarifa_irbpnr ,2);
}else{
	$this->total_irbpnr =0.00;
}
$this->valor_irbpnr =$this->total_irbpnr ;

$this->precio_con_impuesto =$this->pro_precio +$this->valor_ice +$this->valor_iva +$this->valor_irbpnr ;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_familia_producto_onBlur()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_familia_producto = $this->pro_familia_producto;

if($this->pro_familia_producto ==3){
	$this->Ini->nm_hidden_blocos[4] = 'on'; $this->NM_ajax_info['blockDisplay']['4'] = 'on';
}else{
	$this->Ini->nm_hidden_blocos[4] = 'off'; $this->NM_ajax_info['blockDisplay']['4'] = 'off';
}

$modificado_pro_familia_producto = $this->pro_familia_producto;
$this->nm_formatar_campos('pro_familia_producto');
if ($original_pro_familia_producto !== $modificado_pro_familia_producto || isset($this->nmgp_cmp_readonly['pro_familia_producto']) || (isset($bFlagRead_pro_familia_producto) && $bFlagRead_pro_familia_producto))
{
    $this->ajax_return_values_pro_familia_producto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
}
function pro_familia_producto_onChange()
{
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'on';
  
$original_pro_familia_producto = $this->pro_familia_producto;

if($this->pro_familia_producto ==3){
	$this->Ini->nm_hidden_blocos[4] = 'on'; $this->NM_ajax_info['blockDisplay']['4'] = 'on';
}else{
	$this->Ini->nm_hidden_blocos[4] = 'off'; $this->NM_ajax_info['blockDisplay']['4'] = 'off';
}

$modificado_pro_familia_producto = $this->pro_familia_producto;
$this->nm_formatar_campos('pro_familia_producto');
if ($original_pro_familia_producto !== $modificado_pro_familia_producto || isset($this->nmgp_cmp_readonly['pro_familia_producto']) || (isset($bFlagRead_pro_familia_producto) && $bFlagRead_pro_familia_producto))
{
    $this->ajax_return_values_pro_familia_producto(true);
}
$this->NM_ajax_info['event_field'] = 'pro';
form_del_producto_pack_ajax_response();
exit;
$_SESSION['scriptcase']['form_del_producto']['contr_erro'] = 'off';
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
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['botoes'] = $this->nmgp_botoes;
     if ($this->nmgp_opcao != "recarga" && $this->nmgp_opcao != "muda_form")
     {
         $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opc_ant'] = $this->nmgp_opcao;
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
     if (($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "R") && $this->nm_flag_iframe && empty($this->nm_todas_criticas))
     {
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe_ajax']))
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit'] = array("edit", "");
          }
          else
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit'] .= "&nmgp_opcao=edit";
          }
          if ($this->sc_evento == "insert" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F")
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe_ajax']))
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit'] = array("edit", "fim");
              }
              else
              {
                  $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit'] .= "&rec=fim";
              }
          }
          $this->NM_close_db(); 
          $sJsParent = '';
          if ($this->NM_ajax_flag && isset($this->NM_ajax_info['param']['buffer_output']) && $this->NM_ajax_info['param']['buffer_output'])
          {
              if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe_ajax']))
              {
                  $this->NM_ajax_info['ajaxJavascript'][] = array("parent.ajax_navigate", $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit']);
              }
              else
              {
                  $sJsParent .= 'parent';
                  $this->NM_ajax_info['redir']['metodo'] = 'location';
                  $this->NM_ajax_info['redir']['action'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit'];
                  $this->NM_ajax_info['redir']['target'] = $sJsParent;
              }
              form_del_producto_pack_ajax_response();
              exit;
          }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

         <html><body>
         <script type="text/javascript">
<?php
    
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe_ajax']))
    {
        $opc = ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] == "F" && $this->sc_evento == "insert") ? "fim" : "";
        echo "parent.ajax_navigate('edit', '" .$opc . "');";
    }
    else
    {
        echo $sJsParent . "parent.location = '" . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['retorno_edit'] . "';";
    }
?>
         </script>
         </body></html>
<?php
         exit;
     }
//-- 
   if ($this->nmgp_opcao == "novo")
   { 
       $out_pro_imagen = "";  
   } 
   else 
   { 
       $out_pro_imagen = $this->pro_imagen;  
   } 
   if ($this->pro_imagen != "" && $this->pro_imagen != "none")   
   { 
       $path_pro_imagen = $this->Ini->root . $this->Ini->path_imagens . "/" . $_SESSION['Igtech_RucEmpresa'] . "/" . $this->pro_imagen;
       $md5_pro_imagen  = md5("/" . $_SESSION['Igtech_RucEmpresa'] . $this->pro_imagen);
       nm_fix_SubDirUpload($this->pro_imagen,$this->Ini->root . $this->Ini->path_imagens,"/" . $_SESSION['Igtech_RucEmpresa']);
        if (is_file($path_pro_imagen))  
       { 
           $NM_ler_img = true;
           $out_pro_imagen = $this->Ini->path_imag_temp . "/sc_pro_imagen_" . $md5_pro_imagen . ".gif" ;  
           if (is_file($this->Ini->root . $out_pro_imagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_pro_imagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_ler_img = false;
               } 
           } 
           if ($NM_ler_img) 
           { 
               $tmp_pro_imagen = fopen($path_pro_imagen, "r") ; 
               $reg_pro_imagen = fread($tmp_pro_imagen, filesize($path_pro_imagen)) ; 
               fclose($tmp_pro_imagen) ;  
               $arq_pro_imagen = fopen($this->Ini->root . $out_pro_imagen, "w") ;  
               fwrite($arq_pro_imagen, $reg_pro_imagen) ;  
               fclose($arq_pro_imagen) ;  
           } 
           $NM_redim_img = true;
           $out1_pro_imagen = $out_pro_imagen; 
           $md5_pro_imagen  = md5("/" . $_SESSION['Igtech_RucEmpresa'] . $this->pro_imagen);
           $out_pro_imagen = $this->Ini->path_imag_temp . "/sc_pro_imagen_200200" . $md5_pro_imagen . ".gif" ;  
           if (is_file($this->Ini->root . $out_pro_imagen))  
           { 
               $NM_img_time = filemtime($this->Ini->root . $out_pro_imagen) + 0; 
               if ($this->Ini->nm_timestamp < $NM_img_time)  
               { 
                   $NM_redim_img = false;
               } 
           } 
           if ($NM_redim_img) 
           { 
               if (!$this->Ini->Gd_missing)
               { 
                   $sc_obj_img = new nm_trata_img($this->Ini->root . $out1_pro_imagen, true);
                   $sc_obj_img->setWidth(200);
                   $sc_obj_img->setHeight(200);
                   $sc_obj_img->setManterAspecto(true);
                   $sc_obj_img->createImg($this->Ini->root . $out_pro_imagen);
               } 
               else 
               { 
                   $out_pro_imagen = $out1_pro_imagen;
               } 
           } 
       if ($this->Ini->Export_img_zip) {
           $this->Ini->Img_export_zip[] = $this->Ini->root . $out_pro_imagen;
           $out_pro_imagen = str_replace($this->Ini->path_imag_temp . "/", "", $out_pro_imagen);
       } 
       } 
   } 
   if (isset($_POST['nmgp_opcao']) && 'excluir' == $_POST['nmgp_opcao'] && $this->sc_evento != "delete" && (!isset($this->sc_evento_old) || 'delete' != $this->sc_evento_old))
   {
       global $temp_out_pro_imagen;
       if (isset($temp_out_pro_imagen))
       {
           $out_pro_imagen = $temp_out_pro_imagen;
       }
       global $temp_out1_pro_imagen;
       if (isset($temp_out1_pro_imagen))
       {
           $out1_pro_imagen = $temp_out1_pro_imagen;
       }
   }
        $this->initFormPages();
    include_once("form_del_producto_form0.php");
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
        if ('SC_all_Cmp' == $this->nmgp_fast_search && in_array($field, array("pro_codigo", "pro_codigo_aux", "pro_empresa", "pro_descripcion", "pro_iva", "pro_por_iva", "pro_ice", "pro_por_ice", "pro_irbpnr", "pro_por_irbpnr", "pro_precio", "pro_descuento", "pro_estado", "pro_familia_producto"))) {
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
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['table_refresh']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['table_refresh'])
        {
            return NM_encode_input(NM_encode_input($string));
        }
        else
        {
            return NM_encode_input($string);
        }
    } // form_encode_input

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
        if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['csrf_token']))
        {
            $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['csrf_token'] = $this->scCsrfGenerateToken();
        }

        return $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['csrf_token'];
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

   function Form_lookup_pro_categoria_producto()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT cat_id, cat_descripcion  FROM del_categoria_producto  WHERE cat_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cat_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_categoria_producto'][] = $rs->fields[0];
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
   function Form_lookup_pro_familia_producto()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_familia_productos  ORDER BY fp_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_familia_producto'][] = $rs->fields[0];
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
   function Form_lookup_pro_grupo_compras()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT gpc_id, gpc_descripcion  FROM v_del_grupo_productos_compras  where gpc_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY gpc_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_compras'][] = $rs->fields[0];
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
   function Form_lookup_pro_grupo_ventas()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT gpv_id, gpv_descripcion  FROM v_del_grupo_productos_ventas  where gpv_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY gpv_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_grupo_ventas'][] = $rs->fields[0];
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
   function Form_lookup_pro_estado()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_fac_estado_producto  ORDER BY dec_nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_estado'][] = $rs->fields[0];
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
   function Form_lookup_pro_aplica_subsidio()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?S?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pro_por_ice()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT ice_id,ice_codigo||'-'|| ice_descripcion  FROM sri_tarifa_ice WHERE ice_estado='V'  ORDER BY ice_codigo,ice_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_ice'][] = $rs->fields[0];
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
   function Form_lookup_pro_por_iva()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT iva_codigo, iva_descripcion  FROM sri_tarifa_iva  WHERE iva_estado='V' ORDER BY iva_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_iva'][] = $rs->fields[0];
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
   function Form_lookup_pro_por_irbpnr()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $pro_compra_val_str = "''";
   if (!empty($this->pro_compra))
   {
       if (is_array($this->pro_compra))
       {
           $Tmp_array = $this->pro_compra;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_compra);
       }
       $pro_compra_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_compra_val_str)
          {
             $pro_compra_val_str .= ", ";
          }
          $pro_compra_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_venta_val_str = "''";
   if (!empty($this->pro_venta))
   {
       if (is_array($this->pro_venta))
       {
           $Tmp_array = $this->pro_venta;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_venta);
       }
       $pro_venta_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_venta_val_str)
          {
             $pro_venta_val_str .= ", ";
          }
          $pro_venta_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_stock_val_str = "''";
   if (!empty($this->pro_stock))
   {
       if (is_array($this->pro_stock))
       {
           $Tmp_array = $this->pro_stock;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_stock);
       }
       $pro_stock_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_stock_val_str)
          {
             $pro_stock_val_str .= ", ";
          }
          $pro_stock_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $pro_aplica_subsidio_val_str = "''";
   if (!empty($this->pro_aplica_subsidio))
   {
       if (is_array($this->pro_aplica_subsidio))
       {
           $Tmp_array = $this->pro_aplica_subsidio;
       }
       else
       {
           $Tmp_array = explode(";", $this->pro_aplica_subsidio);
       }
       $pro_aplica_subsidio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $pro_aplica_subsidio_val_str)
          {
             $pro_aplica_subsidio_val_str .= ", ";
          }
          $pro_aplica_subsidio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT irbpnr_codigo, irbpnr_descripcion  FROM sri_tarifa_irbpnr  ORDER BY irbpnr_descripcion";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_por_irbpnr'][] = $rs->fields[0];
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
   function Form_lookup_pro_compra()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?S?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pro_venta()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?S?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pro_stock()
   {
       $nmgp_def_dados  = "";
       $nmgp_def_dados .= "?#?S?#?N?@?";
       $todo = explode("?@?", $nmgp_def_dados);
       return $todo;

   }
   function Form_lookup_pro_unidad()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT uni_id, uni_nombre  FROM inv_unidad  WHERE uni_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY uni_nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_unidad'][] = $rs->fields[0];
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
   function Form_lookup_pro_producto_debi()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_grupos_productos_ventas, nombre  FROM grupo_producto_venta  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " ORDER BY nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_producto_debi'][] = $rs->fields[0];
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
   function Form_lookup_pro_cta_cobrar()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_plan_cuentas, codigo||' - '|| nombre  FROM plan_cuentas  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " and empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY codigo, nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_cobrar'][] = $rs->fields[0];
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
   function Form_lookup_pro_cta_puente()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_plan_cuentas, codigo||' - '|| nombre  FROM plan_cuentas  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " and empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY codigo, nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_puente'][] = $rs->fields[0];
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
   function Form_lookup_pro_cta_ingreso()
   {
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'] = array(); 
    }

   $old_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $old_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $old_value_pro_precio = $this->pro_precio;
   $old_value_tarifa_ice = $this->tarifa_ice;
   $old_value_pro_base_ice = $this->pro_base_ice;
   $old_value_total_ice = $this->total_ice;
   $old_value_tarifa_iva = $this->tarifa_iva;
   $old_value_base_iva = $this->base_iva;
   $old_value_total_iva = $this->total_iva;
   $old_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $old_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $old_value_total_irbpnr = $this->total_irbpnr;
   $old_value_precio_con_impuesto = $this->precio_con_impuesto;
   $old_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $old_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $old_value_pro_costo_promedio = $this->pro_costo_promedio;
   $old_value_pro_total_inventario = $this->pro_total_inventario;
   $this->nm_tira_formatacao();


   $unformatted_value_pro_precio_sin_subsidio = $this->pro_precio_sin_subsidio;
   $unformatted_value_pro_valor_subsidio = $this->pro_valor_subsidio;
   $unformatted_value_pro_precio = $this->pro_precio;
   $unformatted_value_tarifa_ice = $this->tarifa_ice;
   $unformatted_value_pro_base_ice = $this->pro_base_ice;
   $unformatted_value_total_ice = $this->total_ice;
   $unformatted_value_tarifa_iva = $this->tarifa_iva;
   $unformatted_value_base_iva = $this->base_iva;
   $unformatted_value_total_iva = $this->total_iva;
   $unformatted_value_tarifa_irbpnr = $this->tarifa_irbpnr;
   $unformatted_value_pro_base_irbpnr = $this->pro_base_irbpnr;
   $unformatted_value_total_irbpnr = $this->total_irbpnr;
   $unformatted_value_precio_con_impuesto = $this->precio_con_impuesto;
   $unformatted_value_pro_cta_cartera_vencida = $this->pro_cta_cartera_vencida;
   $unformatted_value_pro_cantidad_inventario = $this->pro_cantidad_inventario;
   $unformatted_value_pro_costo_promedio = $this->pro_costo_promedio;
   $unformatted_value_pro_total_inventario = $this->pro_total_inventario;

   $nm_comando = "SELECT id_plan_cuentas, codigo||' - '|| nombre  FROM plan_cuentas  where cod_empresa=" . $_SESSION['Igtech_CodigoEmpDebi'] . " and empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY codigo, nombre";

   $this->pro_precio_sin_subsidio = $old_value_pro_precio_sin_subsidio;
   $this->pro_valor_subsidio = $old_value_pro_valor_subsidio;
   $this->pro_precio = $old_value_pro_precio;
   $this->tarifa_ice = $old_value_tarifa_ice;
   $this->pro_base_ice = $old_value_pro_base_ice;
   $this->total_ice = $old_value_total_ice;
   $this->tarifa_iva = $old_value_tarifa_iva;
   $this->base_iva = $old_value_base_iva;
   $this->total_iva = $old_value_total_iva;
   $this->tarifa_irbpnr = $old_value_tarifa_irbpnr;
   $this->pro_base_irbpnr = $old_value_pro_base_irbpnr;
   $this->total_irbpnr = $old_value_total_irbpnr;
   $this->precio_con_impuesto = $old_value_precio_con_impuesto;
   $this->pro_cta_cartera_vencida = $old_value_pro_cta_cartera_vencida;
   $this->pro_cantidad_inventario = $old_value_pro_cantidad_inventario;
   $this->pro_costo_promedio = $old_value_pro_costo_promedio;
   $this->pro_total_inventario = $old_value_pro_total_inventario;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['Lookup_pro_cta_ingreso'][] = $rs->fields[0];
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
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total']);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['fast_search']);
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_detal'])) 
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'] = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_detal'];
          }
          if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter'])
          {
              unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter']);
              $this->NM_ajax_info['empty_filter'] = 'ok';
              form_del_producto_pack_ajax_response();
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
              $this->SC_monta_condicao($comando, "pro_codigo", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_codigo_aux", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_empresa", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_descripcion", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_iva", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_pro_por_iva($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pro_por_iva", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_ice", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_pro_por_ice($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pro_por_ice", $arg_search, $data_lookup, "INT4", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_irbpnr", $arg_search, $data_search, "VARCHAR", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_pro_por_irbpnr($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pro_por_irbpnr", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_precio", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $this->SC_monta_condicao($comando, "pro_descuento", $arg_search, str_replace(",", ".", $data_search), "NUMERIC", false);
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_pro_estado($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pro_estado", $arg_search, $data_lookup, "VARCHAR", false);
              }
          }
          if ($field == "SC_all_Cmp") 
          {
              $data_lookup = $this->SC_lookup_pro_familia_producto($arg_search, $data_search);
              if (is_array($data_lookup) && !empty($data_lookup)) 
              {
                  $this->SC_monta_condicao($comando, "pro_familia_producto", $arg_search, $data_lookup, "INT4", false);
              }
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
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_detal']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_detal']) && !empty($comando)) 
      {
          $comando = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_detal'] . " and (" .  $comando . ")";
      }
      if (empty($comando)) 
      {
          $comando = " 1 <> 1 "; 
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter_form']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter_form'])
      {
          $sc_where = " where " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter_form'] . " and (" . $comando . ")";
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
      $qt_geral_reg_form_del_producto = isset($rt->fields[0]) ? $rt->fields[0] - 1 : 0; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['total'] = $qt_geral_reg_form_del_producto;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['where_filter'] = $comando;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['fast_search'][0] = $field;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['fast_search'][1] = $arg_search;
      $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['fast_search'][2] = $sv_data;
      $rt->Close(); 
      if (isset($rt->fields[0]) && $rt->fields[0] > 0 &&  isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter'])
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter']);
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_producto_pack_ajax_response();
          exit;
      }
      elseif (!isset($rt->fields[0]) || $rt->fields[0] == 0)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['empty_filter'] = true;
          $this->NM_ajax_info['empty_filter'] = 'ok';
          form_del_producto_pack_ajax_response();
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
      $nm_numeric[] = "pro_por_iva";$nm_numeric[] = "pro_por_ice";$nm_numeric[] = "pro_precio";$nm_numeric[] = "pro_descuento";$nm_numeric[] = "pro_familia_producto";$nm_numeric[] = "pro_grupo_compras";$nm_numeric[] = "pro_grupo_ventas";$nm_numeric[] = "pro_cantidad_inventario";$nm_numeric[] = "pro_costo_promedio";$nm_numeric[] = "pro_total_inventario";$nm_numeric[] = "pro_base_ice";$nm_numeric[] = "pro_base_irbpnr";$nm_numeric[] = "pro_precio_sin_subsidio";$nm_numeric[] = "pro_cta_ingreso";$nm_numeric[] = "pro_cta_cobrar";$nm_numeric[] = "pro_cta_puente";$nm_numeric[] = "pro_cta_cartera_vencida";$nm_numeric[] = "pro_producto_debi";$nm_numeric[] = "pro_unidad";$nm_numeric[] = "";
      if (in_array($campo_join, $nm_numeric))
      {
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['decimal_db'] == ".")
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
   function SC_lookup_pro_por_iva($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (isset($this->Ini->nm_bases_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT iva_descripcion, iva_codigo FROM sri_tarifa_iva WHERE (CAST (iva_codigo AS TEXT) LIKE '%$campo%') AND (iva_estado='V')" ; 
       }
       else
       {
           $nm_comando = "SELECT iva_descripcion, iva_codigo FROM sri_tarifa_iva WHERE (#cmp_iiva_descripcion#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos) AND (iva_estado='V')" ; 
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
   function SC_lookup_pro_por_ice($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       if (isset($this->Ini->nm_bases_postgres) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres) && ($condicao == "eq" || $condicao == "qp" || $condicao == "np" || $condicao == "ii" || $condicao == "df"))
       {
           $nm_comando = "SELECT ice_codigo||'-'|| ice_descripcion, ice_id FROM sri_tarifa_ice WHERE (CAST (ice_id AS TEXT) LIKE '%$campo%') AND (ice_estado='V')" ; 
       }
       else
       {
           $nm_comando = "SELECT ice_codigo||'-'|| ice_descripcion, ice_id FROM sri_tarifa_ice WHERE (#cmp_iice_codigo||'-'|| ice_descripcion#cmp_f#cmp_apos LIKE '%#arg_i" . $campo . "#arg_f%'#arg_apos) AND (ice_estado='V')" ; 
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
   function SC_lookup_pro_por_irbpnr($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT irbpnr_descripcion, irbpnr_codigo FROM sri_tarifa_irbpnr WHERE (#lowerI##cmp_iirbpnr_descripcion#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
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
   function SC_lookup_pro_estado($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT dec_nombre, dec_id FROM v_fac_estado_producto WHERE (#lowerI##cmp_idec_nombre#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
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
   function SC_lookup_pro_familia_producto($condicao, $campo)
   {
       $result = array();
       $campo_orig = $campo;
       $campo  = substr($this->Db->qstr($campo), 1, -1);
       $nm_comando = "SELECT fp_descripcion, fp_id FROM del_familia_productos WHERE (#lowerI##cmp_ifp_descripcion#cmp_f)#cmp_apos LIKE #lowerI#'%#arg_i" . $campo . "#arg_f%')#arg_apos)" ; 
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
       $nmgp_saida_form = "form_del_producto_fim.php";
   }
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['redir']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['redir'] == 'redir')
   {
       unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']);
   }
   unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['opc_ant']);
   if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['nm_run_menu']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['nm_run_menu'] == 1)
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['nm_run_menu'] = 2;
       $nmgp_saida_form = "form_del_producto_fim.php";
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
       form_del_producto_pack_ajax_response();
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
   if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['sc_modal'])
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
if ($tipo == 2 && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['masterValue']);
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
                return array("sys_separator.sc-unique-btn-1", "sys_separator.sc-unique-btn-6", "sys_separator.sc-unique-btn-12", "sys_separator.sc-unique-btn-17");
                break;
            case "new":
                return array("sc_b_new_t.sc-unique-btn-2");
                break;
            case "insert":
                return array("sc_b_ins_t.sc-unique-btn-3");
                break;
            case "bcancelar":
                return array("sc_b_sai_t.sc-unique-btn-4");
                break;
            case "update":
                return array("sc_b_upd_t.sc-unique-btn-5");
                break;
            case "help":
                return array("sc_b_hlp_t");
                break;
            case "exit":
                return array("sc_b_sai_t.sc-unique-btn-7", "sc_b_sai_t.sc-unique-btn-8", "sc_b_sai_t.sc-unique-btn-10", "sc_b_sai_t.sc-unique-btn-9", "sc_b_sai_t.sc-unique-btn-11");
                break;
            case "birpara":
                return array("brec_b");
                break;
            case "first":
                return array("sc_b_ini_b.sc-unique-btn-13");
                break;
            case "back":
                return array("sc_b_ret_b.sc-unique-btn-14");
                break;
            case "forward":
                return array("sc_b_avc_b.sc-unique-btn-15");
                break;
            case "last":
                return array("sc_b_fim_b.sc-unique-btn-16");
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
        if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['run_iframe'] != "R") {
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
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['ordem_cmp'] == $fieldName) {
            $orderColName = $fieldName;
            if ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_producto']['ordem_ord'] == " desc") {
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
            case "pro_precio_sin_subsidio":
                return true;
            case "":
                return true;
            case "pro_precio":
                return true;
            case "":
                return true;
            case "pro_base_ice":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "pro_base_irbpnr":
                return true;
            case "":
                return true;
            case "":
                return true;
            case "pro_cta_cartera_vencida":
                return true;
            case "pro_cantidad_inventario":
                return true;
            case "pro_costo_promedio":
                return true;
            case "pro_total_inventario":
                return true;
            case "pro_descuento":
                return true;
            case "":
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
            case "pro_grupo_compras":
                return 'desc';
            case "pro_grupo_ventas":
                return 'desc';
            case "pro_precio_sin_subsidio":
                return 'desc';
            case "pro_precio":
                return 'desc';
            case "pro_base_ice":
                return 'desc';
            case "pro_base_irbpnr":
                return 'desc';
            case "pro_unidad":
                return 'desc';
            case "pro_producto_debi":
                return 'desc';
            case "pro_cta_cobrar":
                return 'desc';
            case "pro_cta_puente":
                return 'desc';
            case "pro_cta_ingreso":
                return 'desc';
            case "pro_cta_cartera_vencida":
                return 'desc';
            case "pro_cantidad_inventario":
                return 'desc';
            case "pro_costo_promedio":
                return 'desc';
            case "pro_total_inventario":
                return 'desc';
            case "pro_descuento":
                return 'desc';
            default:
                return 'asc';
        }
        return 'asc';
    }
}
?>
