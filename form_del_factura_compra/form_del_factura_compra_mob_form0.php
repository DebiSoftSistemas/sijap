<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

header("X-XSS-Protection: 1; mode=block");
header("X-Frame-Options: SAMEORIGIN");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_factura_compra"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_factura_compra"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
            <meta name="viewport" content="minimal-ui, width=300, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
            <meta name="mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="apple-touch-icon"   sizes="57x57" href="">
            <link rel="apple-touch-icon"   sizes="60x60" href="">
            <link rel="apple-touch-icon"   sizes="72x72" href="">
            <link rel="apple-touch-icon"   sizes="76x76" href="">
            <link rel="apple-touch-icon" sizes="114x114" href="">
            <link rel="apple-touch-icon" sizes="120x120" href="">
            <link rel="apple-touch-icon" sizes="144x144" href="">
            <link rel="apple-touch-icon" sizes="152x152" href="">
            <link rel="apple-touch-icon" sizes="180x180" href="">
            <link rel="icon" type="image/png" sizes="192x192" href="">
            <link rel="icon" type="image/png"   sizes="32x32" href="">
            <link rel="icon" type="image/png"   sizes="96x96" href="">
            <link rel="icon" type="image/png"   sizes="16x16" href="">
            <meta name="msapplication-TileColor" content="___">
            <meta name="msapplication-TileImage" content="">
            <meta name="theme-color" content="___">
            <meta name="apple-mobile-web-app-status-bar-style" content="___">
            <link rel="shortcut icon" href=""> <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
  var sc_css_status_pwd_box = '<?php echo $this->Ini->Css_status_pwd_box; ?>';
  var sc_css_status_pwd_text = '<?php echo $this->Ini->Css_status_pwd_text; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_third; ?>jquery/js/jquery.js"></SCRIPT>
            <?php
               if ($_SESSION['scriptcase']['display_mobile'] && $_SESSION['scriptcase']['device_mobile']) {
                   $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
                   $sc_app_data   = json_encode([
                       'forceMobile' => $forced_mobile,
                       'appType' => 'form',
                       'improvements' => true,
                       'displayOptionsButton' => false,
                       'displayScrollUp' => true,
                       'scrollUpPosition' => 'R',
                       'toolbarOrientation' => 'H',
                       'mobilePanes' => 'true',
                       'navigationBarButtons' => unserialize('a:0:{}'),
                       'mobileSimpleToolbar' => false,
                       'bottomToolbarFixed' => true
                   ]); ?>
            <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
            <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
            <script type="text/javascript" src="../_lib/lib/js/nm_form_mobile.js"></script>
            <link rel='stylesheet' href='../_lib/lib/css/nm_form_mobile.css' type='text/css'/>
            <script>
                $(document).ready(function(){

                    bootstrapMobile();

                });
            </script>
            <?php } ?> <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
<style type="text/css">
.ui-datepicker { z-index: 6 !important }
</style>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_fc_fecha button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_liq_fecha_autorizacion button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_fc_fecha_caducidad button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
 <style type="text/css">
   .select2-container {
     width: auto !important;
     flex-grow: 1;
   }
   .select2-selection {
     width: 100% !important;
   }
 </style>
<style type="text/css">
	.sc.switch {
		position: relative;
		display: inline-flex;
	}

	.sc.switch span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.switch span {
		background: #DFDFDF;
		width: 22px;
		height: 14px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		padding: 0 3px;
		transition: all .2s linear;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.switch span:before {
		content: '\2713';
		display: inline-block;
		color: white;
		font-size: 10px;
		z-index: 0;
		position: absolute;
		top: 0;
		left: 4px;
	}

	.sc.switch span:after {
		content: '';
		background: white;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 1px;
		left: 1px;
		border-radius: 15px;
		transition: all .2s linear;
		z-index: 1;
	}

	.sc.switch input {
		margin-right: 10px;
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.switch input:disabled + span {
		opacity: 0.35;
	}

	.sc.switch input:checked + span {
		background: #66AFE9;
	}

	.sc.switch input:checked + span:after {
		left: calc(100% - 1px);
		transform: translateX(-100%);
	}

	.sc.radio {
		position: relative;
		display: inline-flex;
	}

	.sc.radio span {
		display: inline-block;
		margin-right: 5px;
	}

	.sc.radio span {
		background: #ffffff;
		border: 1px solid #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: relative;
		top: 0px;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		box-shadow: 0px 0px 2px rgba(164, 164, 164, 0.8) inset;
	}

	.sc.radio span:after {
		content: '';
		background: #66AFE9;
		width: 12px;
		height: 12px;
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		border-radius: 15px;
		transition: all .2s;
		z-index: 1;
		transform: scale(0);
	}

	.sc.radio input {
		cursor: pointer;
		z-index: 2;
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		margin: 0;
		padding: 0;
	}

	.sc.radio input:disabled + span {
		opacity: 0.35;
	}

	.sc.radio input:checked + span {
		background: #66AFE9;
	}

	.sc.radio input:checked + span:after {
		transform: translateX(-100%);
		transform: scale(1);
	}
</style>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_del_factura_compra/form_del_factura_compra_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_del_factura_compra_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['last'] : 'off'); ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       if ("off" == Nav_binicio_macro_disabled) { $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       if ("off" == Nav_bretorna_macro_disabled) { $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['first']) && $this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['back']) && $this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       if ("off" == Nav_bfinal_macro_disabled) { $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       if ("off" == Nav_bavanca_macro_disabled) { $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled"); }
<?php
    }
?>
 }
 else
 {
<?php
    if (isset($this->nmgp_botoes['last']) && $this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if (isset($this->nmgp_botoes['forward']) && $this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}

 function recargar_marco() {
  document.getElementById('nmsc_iframe_liga_form_del_detalle_factura_compra').contentDocument.location.reload(true);
  document.getElementById('nmsc_iframe_liga_form_del_forma_pago_factura_compra').contentDocument.location.reload(true);
 } // recargar_marco

 function nm_field_disabled(Fields, Opt) {
  opcao = "<?php if ($GLOBALS["erro_incl"] == 1) {echo "novo";} else {echo $this->nmgp_opcao;} ?>";
  if (opcao == "novo" && Opt == "U") {
      return;
  }
  if (opcao != "novo" && Opt == "I") {
      return;
  }
  Field = Fields.split(";");
  for (i=0; i < Field.length; i++)
  {
     F_temp = Field[i].split("=");
     F_name = F_temp[0];
     F_opc  = (F_temp[1] && ("disabled" == F_temp[1] || "true" == F_temp[1])) ? true : false;
     if (F_name == "liq_secuencial")
     {
        $('input[name="liq_secuencial"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="liq_secuencial"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="liq_secuencial"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "liq_desde")
     {
        $('input[name="liq_desde"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="liq_desde"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="liq_desde"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "liq_hasta")
     {
        $('input[name="liq_hasta"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="liq_hasta"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="liq_hasta"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "liq_tipo_libretin")
     {
        $('input[name="liq_tipo_libretin"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="liq_tipo_libretin"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="liq_tipo_libretin"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "ambiente")
     {
        $('input[name="ambiente"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="ambiente"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="ambiente"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_ruc_proveedor")
     {
        $('input[name="fc_ruc_proveedor"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_ruc_proveedor"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_ruc_proveedor"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_nombre_proveedor")
     {
        $('input[name="fc_nombre_proveedor"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_nombre_proveedor"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_nombre_proveedor"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_direccion_proveedor")
     {
        $('input[name="fc_direccion_proveedor"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_direccion_proveedor"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_direccion_proveedor"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_email_proveedor")
     {
        $('input[name="fc_email_proveedor"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_email_proveedor"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_email_proveedor"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_subtotal")
     {
        $('input[name="fc_subtotal"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_subtotal"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_subtotal"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_subtotal_iva")
     {
        $('input[name="fc_subtotal_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_subtotal_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_subtotal_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_subtotal_cero")
     {
        $('input[name="fc_subtotal_cero"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_subtotal_cero"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_subtotal_cero"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_subtotal_no_objeto")
     {
        $('input[name="fc_subtotal_no_objeto"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_subtotal_no_objeto"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_subtotal_no_objeto"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_subtotal_excento")
     {
        $('input[name="fc_subtotal_excento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_subtotal_excento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_subtotal_excento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_total_descuento")
     {
        $('input[name="fc_total_descuento"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_total_descuento"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_total_descuento"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_valor_ice")
     {
        $('input[name="fc_valor_ice"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_valor_ice"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_valor_ice"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_valor_iva")
     {
        $('input[name="fc_valor_iva"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_valor_iva"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_valor_iva"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_valor_irbpnr")
     {
        $('input[name="fc_valor_irbpnr"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_valor_irbpnr"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_valor_irbpnr"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_propina")
     {
        $('input[name="fc_propina"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_propina"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_propina"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "fc_total")
     {
        $('input[name="fc_total"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="fc_total"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="fc_total"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_del_factura_compra_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>

<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys.inc.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>hotkeys_setup.js"></script>
<script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
<script type="text/javascript">

function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var Dyn_Ini  = true;
function setLabelCellMaxWidth()
{
    var $labelList = $(".scUiLabelWidthFix"), $spanList, i, testWidth, maxLabelWidth = 0;
    for (i = 0; i < $labelList.length; i++) {
        $spanList = $($labelList[i]).find("span");

        if ($spanList.length) {
            testWidth  = $($spanList[0]).width();

            maxLabelWidth = Math.max(maxLabelWidth, testWidth);
        }
    }

    if (0 < maxLabelWidth) {
        maxLabelWidth += 20;
        $labelList.css("width", maxLabelWidth + "px");
    }
}

 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

<?php
if (!isset($this->scFormFocusErrorName) || '' == $this->scFormFocusErrorName)
{
?>
  scFocusField('fc_tipo_comprobante');

<?php
}
?>
  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

        setLabelCellMaxWidth();

<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
   });
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 2; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_del_factura_compra']['error_buffer']) && '' != $_SESSION['scriptcase']['form_del_factura_compra']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_del_factura_compra']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_del_factura_compra_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_del_factura_compra_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="fc_id" value="<?php  echo $this->form_encode_input($this->fc_id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_del_factura_compra_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_del_factura_compra_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php if (isset($this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'])) {echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl'];} ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->sc_page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0  width="98%">
 <tr>
  <td>
  <div class="scFormBorder" style="<?php echo (isset($remove_border) ? $remove_border : ''); ?>">
   <table width='100%' cellspacing=0 cellpadding=0>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_5";
        echo "<img id=\"NM_sep_5\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Nuevo'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['nuevo'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "nuevo", "scBtnFn_Nuevo()", "scBtnFn_Nuevo()", "sc_Nuevo_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_Anular()", "scBtnFn_Anular()", "sc_Anular_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_6";
        echo "<img id=\"NM_sep_6\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['enviar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['retencion'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['retencion']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['retencion']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['retencion']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['retencion']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['retencion'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "retencion", "scBtnFn_retencion()", "scBtnFn_retencion()", "sc_retencion_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['ride'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['ride']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['ride']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['ride']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['ride']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['ride'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "ride", "scBtnFn_ride()", "scBtnFn_ride()", "sc_ride_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['fc_estado']))
   {
       $this->nmgp_cmp_hidden['fc_estado'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_libretin']))
   {
       $this->nmgp_cmp_hidden['liq_libretin'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_estado_sri']))
   {
       $this->nmgp_cmp_hidden['liq_estado_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_error_sri']))
   {
       $this->nmgp_cmp_hidden['liq_error_sri'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_fecha_autorizacion']))
   {
       $this->nmgp_cmp_hidden['liq_fecha_autorizacion'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_clave']))
   {
       $this->nmgp_cmp_hidden['liq_clave'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_establecimiento']))
   {
       $this->nmgp_cmp_hidden['liq_establecimiento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_punto_emision']))
   {
       $this->nmgp_cmp_hidden['liq_punto_emision'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['liq_ambiente']))
   {
       $this->nmgp_cmp_hidden['liq_ambiente'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['vacio']))
   {
       $this->nmgp_cmp_hidden['vacio'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['titulo']))
    {
        $this->nm_new_label['titulo'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $titulo = $this->titulo;
   $sStyleHidden_titulo = '';
   if (isset($this->nmgp_cmp_hidden['titulo']) && $this->nmgp_cmp_hidden['titulo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['titulo']);
       $sStyleHidden_titulo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_titulo = 'display: none;';
   $sStyleReadInp_titulo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['titulo']) && $this->nmgp_cmp_readonly['titulo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['titulo']);
       $sStyleReadLab_titulo = '';
       $sStyleReadInp_titulo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['titulo']) && $this->nmgp_cmp_hidden['titulo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="titulo" value="<?php echo $this->form_encode_input($titulo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_titulo_line" id="hidden_field_data_titulo" style="<?php echo $sStyleHidden_titulo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_titulo_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="titulo" value="<?php echo $this->form_encode_input($titulo); ?>"><span id="id_ajax_label_titulo"><?php echo nl2br($titulo); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_titulo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_titulo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_titulo_dumb = ('' == $sStyleHidden_titulo) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_titulo_dumb" style="<?php echo $sStyleHidden_titulo_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fc_sustento_gasto']))
   {
       $this->nm_new_label['fc_sustento_gasto'] = "" . $this->Ini->Nm_lang['lang_sustento_tributario'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_sustento_gasto = $this->fc_sustento_gasto;
   $sStyleHidden_fc_sustento_gasto = '';
   if (isset($this->nmgp_cmp_hidden['fc_sustento_gasto']) && $this->nmgp_cmp_hidden['fc_sustento_gasto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_sustento_gasto']);
       $sStyleHidden_fc_sustento_gasto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_sustento_gasto = 'display: none;';
   $sStyleReadInp_fc_sustento_gasto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_sustento_gasto']) && $this->nmgp_cmp_readonly['fc_sustento_gasto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_sustento_gasto']);
       $sStyleReadLab_fc_sustento_gasto = '';
       $sStyleReadInp_fc_sustento_gasto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_sustento_gasto']) && $this->nmgp_cmp_hidden['fc_sustento_gasto'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fc_sustento_gasto" value="<?php echo $this->form_encode_input($this->fc_sustento_gasto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_sustento_gasto_line" id="hidden_field_data_fc_sustento_gasto" style="<?php echo $sStyleHidden_fc_sustento_gasto; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_sustento_gasto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_sustento_gasto_label" style=""><span id="id_label_fc_sustento_gasto"><?php echo $this->nm_new_label['fc_sustento_gasto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_sustento_gasto"]) &&  $this->nmgp_cmp_readonly["fc_sustento_gasto"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_libretin = $this->liq_libretin;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_libretin = $this->liq_libretin;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT stg_codigo, stg_descripcion  FROM sri_sustento_tributario_gasto  WHERE stg_estado='V' ORDER BY stg_codigo";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_libretin = $old_value_liq_libretin;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'][] = $rs->fields[0];
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
   $x = 0; 
   $fc_sustento_gasto_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_sustento_gasto_1))
          {
              foreach ($this->fc_sustento_gasto_1 as $tmp_fc_sustento_gasto)
              {
                  if (trim($tmp_fc_sustento_gasto) === trim($cadaselect[1])) {$fc_sustento_gasto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_sustento_gasto) && trim($this->fc_sustento_gasto) === trim($cadaselect[1])) {$fc_sustento_gasto_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fc_sustento_gasto" value="<?php echo $this->form_encode_input($fc_sustento_gasto) . "\">" . $fc_sustento_gasto_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fc_sustento_gasto();
   $x = 0 ; 
   $fc_sustento_gasto_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_sustento_gasto_1))
          {
              foreach ($this->fc_sustento_gasto_1 as $tmp_fc_sustento_gasto)
              {
                  if (trim($tmp_fc_sustento_gasto) === trim($cadaselect[1])) {$fc_sustento_gasto_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_sustento_gasto) && trim($this->fc_sustento_gasto) === trim($cadaselect[1])) { $fc_sustento_gasto_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fc_sustento_gasto_look))
          {
              $fc_sustento_gasto_look = $this->fc_sustento_gasto;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fc_sustento_gasto\" class=\"css_fc_sustento_gasto_line\" style=\"" .  $sStyleReadLab_fc_sustento_gasto . "\">" . $this->form_format_readonly("fc_sustento_gasto", $this->form_encode_input($fc_sustento_gasto_look)) . "</span><span id=\"id_read_off_fc_sustento_gasto\" class=\"css_read_off_fc_sustento_gasto" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fc_sustento_gasto . "\">";
   echo " <span id=\"idAjaxSelect_fc_sustento_gasto\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fc_sustento_gasto_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fc_sustento_gasto\" name=\"fc_sustento_gasto\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_sustento_gasto'][] = '00'; 
   echo "  <option value=\"00\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fc_sustento_gasto) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fc_sustento_gasto)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_sustento_gasto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_sustento_gasto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['vacio']))
    {
        $this->nm_new_label['vacio'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $vacio = $this->vacio;
   if (!isset($this->nmgp_cmp_hidden['vacio']))
   {
       $this->nmgp_cmp_hidden['vacio'] = 'off';
   }
   $sStyleHidden_vacio = '';
   if (isset($this->nmgp_cmp_hidden['vacio']) && $this->nmgp_cmp_hidden['vacio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['vacio']);
       $sStyleHidden_vacio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_vacio = 'display: none;';
   $sStyleReadInp_vacio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['vacio']) && $this->nmgp_cmp_readonly['vacio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['vacio']);
       $sStyleReadLab_vacio = '';
       $sStyleReadInp_vacio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['vacio']) && $this->nmgp_cmp_hidden['vacio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="vacio" value="<?php echo $this->form_encode_input($vacio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_vacio_line" id="hidden_field_data_vacio" style="<?php echo $sStyleHidden_vacio; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_vacio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_vacio_label" style=""><span id="id_label_vacio"><?php echo $this->nm_new_label['vacio']; ?></span></span><br><input type="hidden" name="vacio" value="<?php echo $this->form_encode_input($vacio); ?>"><span id="id_ajax_label_vacio"><?php echo nl2br($vacio); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_vacio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_vacio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fc_tipo_comprobante']))
   {
       $this->nm_new_label['fc_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_tipo_comprobante = $this->fc_tipo_comprobante;
   $sStyleHidden_fc_tipo_comprobante = '';
   if (isset($this->nmgp_cmp_hidden['fc_tipo_comprobante']) && $this->nmgp_cmp_hidden['fc_tipo_comprobante'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_tipo_comprobante']);
       $sStyleHidden_fc_tipo_comprobante = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_tipo_comprobante = 'display: none;';
   $sStyleReadInp_fc_tipo_comprobante = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_tipo_comprobante']) && $this->nmgp_cmp_readonly['fc_tipo_comprobante'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_tipo_comprobante']);
       $sStyleReadLab_fc_tipo_comprobante = '';
       $sStyleReadInp_fc_tipo_comprobante = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_tipo_comprobante']) && $this->nmgp_cmp_hidden['fc_tipo_comprobante'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fc_tipo_comprobante" value="<?php echo $this->form_encode_input($this->fc_tipo_comprobante) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_tipo_comprobante_line" id="hidden_field_data_fc_tipo_comprobante" style="<?php echo $sStyleHidden_fc_tipo_comprobante; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_tipo_comprobante_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_tipo_comprobante_label" style=""><span id="id_label_fc_tipo_comprobante"><?php echo $this->nm_new_label['fc_tipo_comprobante']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_tipo_comprobante"]) &&  $this->nmgp_cmp_readonly["fc_tipo_comprobante"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_libretin = $this->liq_libretin;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_libretin = $this->liq_libretin;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT tc_codigo,tc_nombre  FROM sri_comprobante_sustento  inner join sri_tipo_comprobante on cs_comprobante=tc_codigo WHERE cs_sustento='$this->fc_sustento_gasto' order by tc_codigo";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_libretin = $old_value_liq_libretin;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_tipo_comprobante'][] = $rs->fields[0];
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
   $x = 0; 
   $fc_tipo_comprobante_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_tipo_comprobante_1))
          {
              foreach ($this->fc_tipo_comprobante_1 as $tmp_fc_tipo_comprobante)
              {
                  if (trim($tmp_fc_tipo_comprobante) === trim($cadaselect[1])) {$fc_tipo_comprobante_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_tipo_comprobante) && trim($this->fc_tipo_comprobante) === trim($cadaselect[1])) {$fc_tipo_comprobante_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fc_tipo_comprobante" value="<?php echo $this->form_encode_input($fc_tipo_comprobante) . "\">" . $fc_tipo_comprobante_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fc_tipo_comprobante();
   $x = 0 ; 
   $fc_tipo_comprobante_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_tipo_comprobante_1))
          {
              foreach ($this->fc_tipo_comprobante_1 as $tmp_fc_tipo_comprobante)
              {
                  if (trim($tmp_fc_tipo_comprobante) === trim($cadaselect[1])) {$fc_tipo_comprobante_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_tipo_comprobante) && trim($this->fc_tipo_comprobante) === trim($cadaselect[1])) { $fc_tipo_comprobante_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fc_tipo_comprobante_look))
          {
              $fc_tipo_comprobante_look = $this->fc_tipo_comprobante;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fc_tipo_comprobante\" class=\"css_fc_tipo_comprobante_line\" style=\"" .  $sStyleReadLab_fc_tipo_comprobante . "\">" . $this->form_format_readonly("fc_tipo_comprobante", $this->form_encode_input($fc_tipo_comprobante_look)) . "</span><span id=\"id_read_off_fc_tipo_comprobante\" class=\"css_read_off_fc_tipo_comprobante" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fc_tipo_comprobante . "\">";
   echo " <span id=\"idAjaxSelect_fc_tipo_comprobante\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fc_tipo_comprobante_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fc_tipo_comprobante\" name=\"fc_tipo_comprobante\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fc_tipo_comprobante) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fc_tipo_comprobante)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_tipo_comprobante_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_tipo_comprobante_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_fecha']))
    {
        $this->nm_new_label['fc_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_fecha = $this->fc_fecha;
   $sStyleHidden_fc_fecha = '';
   if (isset($this->nmgp_cmp_hidden['fc_fecha']) && $this->nmgp_cmp_hidden['fc_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_fecha']);
       $sStyleHidden_fc_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_fecha = 'display: none;';
   $sStyleReadInp_fc_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_fecha']) && $this->nmgp_cmp_readonly['fc_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_fecha']);
       $sStyleReadLab_fc_fecha = '';
       $sStyleReadInp_fc_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_fecha']) && $this->nmgp_cmp_hidden['fc_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_fecha" value="<?php echo $this->form_encode_input($fc_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_fecha_line" id="hidden_field_data_fc_fecha" style="<?php echo $sStyleHidden_fc_fecha; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_fecha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_fecha_label" style=""><span id="id_label_fc_fecha"><?php echo $this->nm_new_label['fc_fecha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_fecha"]) &&  $this->nmgp_cmp_readonly["fc_fecha"] == "on") { 

 ?>
<input type="hidden" name="fc_fecha" value="<?php echo $this->form_encode_input($fc_fecha) . "\">" . $fc_fecha . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_fecha" class="sc-ui-readonly-fc_fecha css_fc_fecha_line" style="<?php echo $sStyleReadLab_fc_fecha; ?>"><?php echo $this->form_format_readonly("fc_fecha", $this->form_encode_input($fc_fecha)); ?></span><span id="id_read_off_fc_fecha" class="css_read_off_fc_fecha<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_fecha; ?>"><?php
$tmp_form_data = $this->field_config['fc_fecha']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_fc_fecha_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_fecha" type=text name="fc_fecha" value="<?php echo $this->form_encode_input($fc_fecha) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['fc_fecha']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['fc_fecha']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_fecha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fc_fecha_dumb = ('' == $sStyleHidden_fc_fecha) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fc_fecha_dumb" style="<?php echo $sStyleHidden_fc_fecha_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_liquidacion_compras'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['liq_serie']))
   {
       $this->nm_new_label['liq_serie'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_serie = $this->liq_serie;
   $sStyleHidden_liq_serie = '';
   if (isset($this->nmgp_cmp_hidden['liq_serie']) && $this->nmgp_cmp_hidden['liq_serie'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_serie']);
       $sStyleHidden_liq_serie = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_serie = 'display: none;';
   $sStyleReadInp_liq_serie = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_serie']) && $this->nmgp_cmp_readonly['liq_serie'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_serie']);
       $sStyleReadLab_liq_serie = '';
       $sStyleReadInp_liq_serie = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_serie']) && $this->nmgp_cmp_hidden['liq_serie'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="liq_serie" value="<?php echo $this->form_encode_input($this->liq_serie) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_serie_line" id="hidden_field_data_liq_serie" style="<?php echo $sStyleHidden_liq_serie; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_serie_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_serie_label" style=""><span id="id_label_liq_serie"><?php echo $this->nm_new_label['liq_serie']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_serie"]) &&  $this->nmgp_cmp_readonly["liq_serie"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_libretin = $this->liq_libretin;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_libretin = $this->liq_libretin;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='03'";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_libretin = $old_value_liq_libretin;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_liq_serie'][] = $rs->fields[0];
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
   $x = 0; 
   $liq_serie_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->liq_serie_1))
          {
              foreach ($this->liq_serie_1 as $tmp_liq_serie)
              {
                  if (trim($tmp_liq_serie) === trim($cadaselect[1])) {$liq_serie_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->liq_serie) && trim($this->liq_serie) === trim($cadaselect[1])) {$liq_serie_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="liq_serie" value="<?php echo $this->form_encode_input($liq_serie) . "\">" . $liq_serie_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_liq_serie();
   $x = 0 ; 
   $liq_serie_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->liq_serie_1))
          {
              foreach ($this->liq_serie_1 as $tmp_liq_serie)
              {
                  if (trim($tmp_liq_serie) === trim($cadaselect[1])) {$liq_serie_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->liq_serie) && trim($this->liq_serie) === trim($cadaselect[1])) { $liq_serie_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($liq_serie_look))
          {
              $liq_serie_look = $this->liq_serie;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_liq_serie\" class=\"css_liq_serie_line\" style=\"" .  $sStyleReadLab_liq_serie . "\">" . $this->form_format_readonly("liq_serie", $this->form_encode_input($liq_serie_look)) . "</span><span id=\"id_read_off_liq_serie\" class=\"css_read_off_liq_serie" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_liq_serie . "\">";
   echo " <span id=\"idAjaxSelect_liq_serie\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_liq_serie_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_liq_serie\" name=\"liq_serie\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->liq_serie) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->liq_serie)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_serie_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_serie_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_secuencial']))
    {
        $this->nm_new_label['liq_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_secuencial = $this->liq_secuencial;
   $sStyleHidden_liq_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['liq_secuencial']) && $this->nmgp_cmp_hidden['liq_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_secuencial']);
       $sStyleHidden_liq_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_secuencial = 'display: none;';
   $sStyleReadInp_liq_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_secuencial']) && $this->nmgp_cmp_readonly['liq_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_secuencial']);
       $sStyleReadLab_liq_secuencial = '';
       $sStyleReadInp_liq_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_secuencial']) && $this->nmgp_cmp_hidden['liq_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_secuencial" value="<?php echo $this->form_encode_input($liq_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_secuencial_line" id="hidden_field_data_liq_secuencial" style="<?php echo $sStyleHidden_liq_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_secuencial_label" style=""><span id="id_label_liq_secuencial"><?php echo $this->nm_new_label['liq_secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_secuencial"]) &&  $this->nmgp_cmp_readonly["liq_secuencial"] == "on") { 

 ?>
<input type="hidden" name="liq_secuencial" value="<?php echo $this->form_encode_input($liq_secuencial) . "\">" . $liq_secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_secuencial" class="sc-ui-readonly-liq_secuencial css_liq_secuencial_line" style="<?php echo $sStyleReadLab_liq_secuencial; ?>"><?php echo $this->form_format_readonly("liq_secuencial", $this->form_encode_input($this->liq_secuencial)); ?></span><span id="id_read_off_liq_secuencial" class="css_read_off_liq_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_secuencial" type=text name="liq_secuencial" value="<?php echo $this->form_encode_input($liq_secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_desde']))
    {
        $this->nm_new_label['liq_desde'] = "" . $this->Ini->Nm_lang['lang_desde'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_desde = $this->liq_desde;
   $sStyleHidden_liq_desde = '';
   if (isset($this->nmgp_cmp_hidden['liq_desde']) && $this->nmgp_cmp_hidden['liq_desde'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_desde']);
       $sStyleHidden_liq_desde = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_desde = 'display: none;';
   $sStyleReadInp_liq_desde = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_desde']) && $this->nmgp_cmp_readonly['liq_desde'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_desde']);
       $sStyleReadLab_liq_desde = '';
       $sStyleReadInp_liq_desde = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_desde']) && $this->nmgp_cmp_hidden['liq_desde'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_desde" value="<?php echo $this->form_encode_input($liq_desde) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_desde_line" id="hidden_field_data_liq_desde" style="<?php echo $sStyleHidden_liq_desde; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_desde_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_desde_label" style=""><span id="id_label_liq_desde"><?php echo $this->nm_new_label['liq_desde']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_desde"]) &&  $this->nmgp_cmp_readonly["liq_desde"] == "on") { 

 ?>
<input type="hidden" name="liq_desde" value="<?php echo $this->form_encode_input($liq_desde) . "\">" . $liq_desde . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_desde" class="sc-ui-readonly-liq_desde css_liq_desde_line" style="<?php echo $sStyleReadLab_liq_desde; ?>"><?php echo $this->form_format_readonly("liq_desde", $this->form_encode_input($this->liq_desde)); ?></span><span id="id_read_off_liq_desde" class="css_read_off_liq_desde<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_desde; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_desde_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_desde" type=text name="liq_desde" value="<?php echo $this->form_encode_input($liq_desde) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_desde_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_desde_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_hasta']))
    {
        $this->nm_new_label['liq_hasta'] = "" . $this->Ini->Nm_lang['lang_hasta'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_hasta = $this->liq_hasta;
   $sStyleHidden_liq_hasta = '';
   if (isset($this->nmgp_cmp_hidden['liq_hasta']) && $this->nmgp_cmp_hidden['liq_hasta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_hasta']);
       $sStyleHidden_liq_hasta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_hasta = 'display: none;';
   $sStyleReadInp_liq_hasta = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_hasta']) && $this->nmgp_cmp_readonly['liq_hasta'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_hasta']);
       $sStyleReadLab_liq_hasta = '';
       $sStyleReadInp_liq_hasta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_hasta']) && $this->nmgp_cmp_hidden['liq_hasta'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_hasta" value="<?php echo $this->form_encode_input($liq_hasta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_hasta_line" id="hidden_field_data_liq_hasta" style="<?php echo $sStyleHidden_liq_hasta; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_hasta_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_hasta_label" style=""><span id="id_label_liq_hasta"><?php echo $this->nm_new_label['liq_hasta']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_hasta"]) &&  $this->nmgp_cmp_readonly["liq_hasta"] == "on") { 

 ?>
<input type="hidden" name="liq_hasta" value="<?php echo $this->form_encode_input($liq_hasta) . "\">" . $liq_hasta . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_hasta" class="sc-ui-readonly-liq_hasta css_liq_hasta_line" style="<?php echo $sStyleReadLab_liq_hasta; ?>"><?php echo $this->form_format_readonly("liq_hasta", $this->form_encode_input($this->liq_hasta)); ?></span><span id="id_read_off_liq_hasta" class="css_read_off_liq_hasta<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_hasta; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_hasta_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_hasta" type=text name="liq_hasta" value="<?php echo $this->form_encode_input($liq_hasta) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_hasta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_hasta_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_tipo_libretin']))
    {
        $this->nm_new_label['liq_tipo_libretin'] = "" . $this->Ini->Nm_lang['lang_tipo_libretin'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_tipo_libretin = $this->liq_tipo_libretin;
   $sStyleHidden_liq_tipo_libretin = '';
   if (isset($this->nmgp_cmp_hidden['liq_tipo_libretin']) && $this->nmgp_cmp_hidden['liq_tipo_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_tipo_libretin']);
       $sStyleHidden_liq_tipo_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_tipo_libretin = 'display: none;';
   $sStyleReadInp_liq_tipo_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_tipo_libretin']) && $this->nmgp_cmp_readonly['liq_tipo_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_tipo_libretin']);
       $sStyleReadLab_liq_tipo_libretin = '';
       $sStyleReadInp_liq_tipo_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_tipo_libretin']) && $this->nmgp_cmp_hidden['liq_tipo_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_tipo_libretin" value="<?php echo $this->form_encode_input($liq_tipo_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_tipo_libretin_line" id="hidden_field_data_liq_tipo_libretin" style="<?php echo $sStyleHidden_liq_tipo_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_tipo_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_tipo_libretin_label" style=""><span id="id_label_liq_tipo_libretin"><?php echo $this->nm_new_label['liq_tipo_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_tipo_libretin"]) &&  $this->nmgp_cmp_readonly["liq_tipo_libretin"] == "on") { 

 ?>
<input type="hidden" name="liq_tipo_libretin" value="<?php echo $this->form_encode_input($liq_tipo_libretin) . "\">" . $liq_tipo_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_tipo_libretin" class="sc-ui-readonly-liq_tipo_libretin css_liq_tipo_libretin_line" style="<?php echo $sStyleReadLab_liq_tipo_libretin; ?>"><?php echo $this->form_format_readonly("liq_tipo_libretin", $this->form_encode_input($this->liq_tipo_libretin)); ?></span><span id="id_read_off_liq_tipo_libretin" class="css_read_off_liq_tipo_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_tipo_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_tipo_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_tipo_libretin" type=text name="liq_tipo_libretin" value="<?php echo $this->form_encode_input($liq_tipo_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_tipo_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_tipo_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ambiente']))
    {
        $this->nm_new_label['ambiente'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ambiente = $this->ambiente;
   $sStyleHidden_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['ambiente']) && $this->nmgp_cmp_hidden['ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ambiente']);
       $sStyleHidden_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ambiente = 'display: none;';
   $sStyleReadInp_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ambiente']) && $this->nmgp_cmp_readonly['ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ambiente']);
       $sStyleReadLab_ambiente = '';
       $sStyleReadInp_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ambiente']) && $this->nmgp_cmp_hidden['ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ambiente" value="<?php echo $this->form_encode_input($ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_ambiente_line" id="hidden_field_data_ambiente" style="<?php echo $sStyleHidden_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ambiente_label" style=""><span id="id_label_ambiente"><?php echo $this->nm_new_label['ambiente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ambiente"]) &&  $this->nmgp_cmp_readonly["ambiente"] == "on") { 

 ?>
<input type="hidden" name="ambiente" value="<?php echo $this->form_encode_input($ambiente) . "\">" . $ambiente . ""; ?>
<?php } else { ?>
<span id="id_read_on_ambiente" class="sc-ui-readonly-ambiente css_ambiente_line" style="<?php echo $sStyleReadLab_ambiente; ?>"><?php echo $this->form_format_readonly("ambiente", $this->form_encode_input($this->ambiente)); ?></span><span id="id_read_off_ambiente" class="css_read_off_ambiente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ambiente; ?>">
 <input class="sc-js-input scFormObjectOdd css_ambiente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ambiente" type=text name="ambiente" value="<?php echo $this->form_encode_input($ambiente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_libretin']))
    {
        $this->nm_new_label['liq_libretin'] = "Liq Libretin";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_libretin = $this->liq_libretin;
   if (!isset($this->nmgp_cmp_hidden['liq_libretin']))
   {
       $this->nmgp_cmp_hidden['liq_libretin'] = 'off';
   }
   $sStyleHidden_liq_libretin = '';
   if (isset($this->nmgp_cmp_hidden['liq_libretin']) && $this->nmgp_cmp_hidden['liq_libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_libretin']);
       $sStyleHidden_liq_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_libretin = 'display: none;';
   $sStyleReadInp_liq_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_libretin']) && $this->nmgp_cmp_readonly['liq_libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_libretin']);
       $sStyleReadLab_liq_libretin = '';
       $sStyleReadInp_liq_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_libretin']) && $this->nmgp_cmp_hidden['liq_libretin'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_libretin" value="<?php echo $this->form_encode_input($liq_libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_libretin_line" id="hidden_field_data_liq_libretin" style="<?php echo $sStyleHidden_liq_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_libretin_label" style=""><span id="id_label_liq_libretin"><?php echo $this->nm_new_label['liq_libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_libretin"]) &&  $this->nmgp_cmp_readonly["liq_libretin"] == "on") { 

 ?>
<input type="hidden" name="liq_libretin" value="<?php echo $this->form_encode_input($liq_libretin) . "\">" . $liq_libretin . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_libretin" class="sc-ui-readonly-liq_libretin css_liq_libretin_line" style="<?php echo $sStyleReadLab_liq_libretin; ?>"><?php echo $this->form_format_readonly("liq_libretin", $this->form_encode_input($this->liq_libretin)); ?></span><span id="id_read_off_liq_libretin" class="css_read_off_liq_libretin<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_libretin; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_libretin_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_libretin" type=text name="liq_libretin" value="<?php echo $this->form_encode_input($liq_libretin) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['liq_libretin']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['liq_libretin']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['liq_libretin']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_establecimiento']))
    {
        $this->nm_new_label['liq_establecimiento'] = "Liq Establecimiento";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_establecimiento = $this->liq_establecimiento;
   if (!isset($this->nmgp_cmp_hidden['liq_establecimiento']))
   {
       $this->nmgp_cmp_hidden['liq_establecimiento'] = 'off';
   }
   $sStyleHidden_liq_establecimiento = '';
   if (isset($this->nmgp_cmp_hidden['liq_establecimiento']) && $this->nmgp_cmp_hidden['liq_establecimiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_establecimiento']);
       $sStyleHidden_liq_establecimiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_establecimiento = 'display: none;';
   $sStyleReadInp_liq_establecimiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_establecimiento']) && $this->nmgp_cmp_readonly['liq_establecimiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_establecimiento']);
       $sStyleReadLab_liq_establecimiento = '';
       $sStyleReadInp_liq_establecimiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_establecimiento']) && $this->nmgp_cmp_hidden['liq_establecimiento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_establecimiento" value="<?php echo $this->form_encode_input($liq_establecimiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_establecimiento_line" id="hidden_field_data_liq_establecimiento" style="<?php echo $sStyleHidden_liq_establecimiento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_establecimiento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_establecimiento_label" style=""><span id="id_label_liq_establecimiento"><?php echo $this->nm_new_label['liq_establecimiento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_establecimiento"]) &&  $this->nmgp_cmp_readonly["liq_establecimiento"] == "on") { 

 ?>
<input type="hidden" name="liq_establecimiento" value="<?php echo $this->form_encode_input($liq_establecimiento) . "\">" . $liq_establecimiento . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_establecimiento" class="sc-ui-readonly-liq_establecimiento css_liq_establecimiento_line" style="<?php echo $sStyleReadLab_liq_establecimiento; ?>"><?php echo $this->form_format_readonly("liq_establecimiento", $this->form_encode_input($this->liq_establecimiento)); ?></span><span id="id_read_off_liq_establecimiento" class="css_read_off_liq_establecimiento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_establecimiento; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_establecimiento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_establecimiento" type=text name="liq_establecimiento" value="<?php echo $this->form_encode_input($liq_establecimiento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['liq_establecimiento']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['liq_establecimiento']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['liq_establecimiento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_establecimiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_establecimiento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_punto_emision']))
    {
        $this->nm_new_label['liq_punto_emision'] = "Liq Punto Emision";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_punto_emision = $this->liq_punto_emision;
   if (!isset($this->nmgp_cmp_hidden['liq_punto_emision']))
   {
       $this->nmgp_cmp_hidden['liq_punto_emision'] = 'off';
   }
   $sStyleHidden_liq_punto_emision = '';
   if (isset($this->nmgp_cmp_hidden['liq_punto_emision']) && $this->nmgp_cmp_hidden['liq_punto_emision'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_punto_emision']);
       $sStyleHidden_liq_punto_emision = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_punto_emision = 'display: none;';
   $sStyleReadInp_liq_punto_emision = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_punto_emision']) && $this->nmgp_cmp_readonly['liq_punto_emision'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_punto_emision']);
       $sStyleReadLab_liq_punto_emision = '';
       $sStyleReadInp_liq_punto_emision = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_punto_emision']) && $this->nmgp_cmp_hidden['liq_punto_emision'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_punto_emision" value="<?php echo $this->form_encode_input($liq_punto_emision) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_punto_emision_line" id="hidden_field_data_liq_punto_emision" style="<?php echo $sStyleHidden_liq_punto_emision; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_punto_emision_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_punto_emision_label" style=""><span id="id_label_liq_punto_emision"><?php echo $this->nm_new_label['liq_punto_emision']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_punto_emision"]) &&  $this->nmgp_cmp_readonly["liq_punto_emision"] == "on") { 

 ?>
<input type="hidden" name="liq_punto_emision" value="<?php echo $this->form_encode_input($liq_punto_emision) . "\">" . $liq_punto_emision . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_punto_emision" class="sc-ui-readonly-liq_punto_emision css_liq_punto_emision_line" style="<?php echo $sStyleReadLab_liq_punto_emision; ?>"><?php echo $this->form_format_readonly("liq_punto_emision", $this->form_encode_input($this->liq_punto_emision)); ?></span><span id="id_read_off_liq_punto_emision" class="css_read_off_liq_punto_emision<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_punto_emision; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_punto_emision_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_punto_emision" type=text name="liq_punto_emision" value="<?php echo $this->form_encode_input($liq_punto_emision) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['liq_punto_emision']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['liq_punto_emision']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['liq_punto_emision']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_punto_emision_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_punto_emision_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_ambiente']))
    {
        $this->nm_new_label['liq_ambiente'] = "Liq Ambiente";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_ambiente = $this->liq_ambiente;
   if (!isset($this->nmgp_cmp_hidden['liq_ambiente']))
   {
       $this->nmgp_cmp_hidden['liq_ambiente'] = 'off';
   }
   $sStyleHidden_liq_ambiente = '';
   if (isset($this->nmgp_cmp_hidden['liq_ambiente']) && $this->nmgp_cmp_hidden['liq_ambiente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_ambiente']);
       $sStyleHidden_liq_ambiente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_ambiente = 'display: none;';
   $sStyleReadInp_liq_ambiente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_ambiente']) && $this->nmgp_cmp_readonly['liq_ambiente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_ambiente']);
       $sStyleReadLab_liq_ambiente = '';
       $sStyleReadInp_liq_ambiente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_ambiente']) && $this->nmgp_cmp_hidden['liq_ambiente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_ambiente" value="<?php echo $this->form_encode_input($liq_ambiente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_ambiente_line" id="hidden_field_data_liq_ambiente" style="<?php echo $sStyleHidden_liq_ambiente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_ambiente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_ambiente_label" style=""><span id="id_label_liq_ambiente"><?php echo $this->nm_new_label['liq_ambiente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_ambiente"]) &&  $this->nmgp_cmp_readonly["liq_ambiente"] == "on") { 

 ?>
<input type="hidden" name="liq_ambiente" value="<?php echo $this->form_encode_input($liq_ambiente) . "\">" . $liq_ambiente . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_ambiente" class="sc-ui-readonly-liq_ambiente css_liq_ambiente_line" style="<?php echo $sStyleReadLab_liq_ambiente; ?>"><?php echo $this->form_format_readonly("liq_ambiente", $this->form_encode_input($this->liq_ambiente)); ?></span><span id="id_read_off_liq_ambiente" class="css_read_off_liq_ambiente<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_ambiente; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_ambiente_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_ambiente" type=text name="liq_ambiente" value="<?php echo $this->form_encode_input($liq_ambiente) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['liq_ambiente']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['liq_ambiente']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['liq_ambiente']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_ambiente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_ambiente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_estado_sri']))
    {
        $this->nm_new_label['liq_estado_sri'] = "Liq Estado Sri";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_estado_sri = $this->liq_estado_sri;
   if (!isset($this->nmgp_cmp_hidden['liq_estado_sri']))
   {
       $this->nmgp_cmp_hidden['liq_estado_sri'] = 'off';
   }
   $sStyleHidden_liq_estado_sri = '';
   if (isset($this->nmgp_cmp_hidden['liq_estado_sri']) && $this->nmgp_cmp_hidden['liq_estado_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_estado_sri']);
       $sStyleHidden_liq_estado_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_estado_sri = 'display: none;';
   $sStyleReadInp_liq_estado_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_estado_sri']) && $this->nmgp_cmp_readonly['liq_estado_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_estado_sri']);
       $sStyleReadLab_liq_estado_sri = '';
       $sStyleReadInp_liq_estado_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_estado_sri']) && $this->nmgp_cmp_hidden['liq_estado_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_estado_sri" value="<?php echo $this->form_encode_input($liq_estado_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_estado_sri_line" id="hidden_field_data_liq_estado_sri" style="<?php echo $sStyleHidden_liq_estado_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_estado_sri_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_estado_sri_label" style=""><span id="id_label_liq_estado_sri"><?php echo $this->nm_new_label['liq_estado_sri']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_estado_sri"]) &&  $this->nmgp_cmp_readonly["liq_estado_sri"] == "on") { 

 ?>
<input type="hidden" name="liq_estado_sri" value="<?php echo $this->form_encode_input($liq_estado_sri) . "\">" . $liq_estado_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_estado_sri" class="sc-ui-readonly-liq_estado_sri css_liq_estado_sri_line" style="<?php echo $sStyleReadLab_liq_estado_sri; ?>"><?php echo $this->form_format_readonly("liq_estado_sri", $this->form_encode_input($this->liq_estado_sri)); ?></span><span id="id_read_off_liq_estado_sri" class="css_read_off_liq_estado_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_estado_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_estado_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_estado_sri" type=text name="liq_estado_sri" value="<?php echo $this->form_encode_input($liq_estado_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_estado_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_estado_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_error_sri']))
    {
        $this->nm_new_label['liq_error_sri'] = "Liq Error Sri";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_error_sri = $this->liq_error_sri;
   if (!isset($this->nmgp_cmp_hidden['liq_error_sri']))
   {
       $this->nmgp_cmp_hidden['liq_error_sri'] = 'off';
   }
   $sStyleHidden_liq_error_sri = '';
   if (isset($this->nmgp_cmp_hidden['liq_error_sri']) && $this->nmgp_cmp_hidden['liq_error_sri'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_error_sri']);
       $sStyleHidden_liq_error_sri = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_error_sri = 'display: none;';
   $sStyleReadInp_liq_error_sri = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_error_sri']) && $this->nmgp_cmp_readonly['liq_error_sri'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_error_sri']);
       $sStyleReadLab_liq_error_sri = '';
       $sStyleReadInp_liq_error_sri = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_error_sri']) && $this->nmgp_cmp_hidden['liq_error_sri'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_error_sri" value="<?php echo $this->form_encode_input($liq_error_sri) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_error_sri_line" id="hidden_field_data_liq_error_sri" style="<?php echo $sStyleHidden_liq_error_sri; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_error_sri_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_error_sri_label" style=""><span id="id_label_liq_error_sri"><?php echo $this->nm_new_label['liq_error_sri']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_error_sri"]) &&  $this->nmgp_cmp_readonly["liq_error_sri"] == "on") { 

 ?>
<input type="hidden" name="liq_error_sri" value="<?php echo $this->form_encode_input($liq_error_sri) . "\">" . $liq_error_sri . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_error_sri" class="sc-ui-readonly-liq_error_sri css_liq_error_sri_line" style="<?php echo $sStyleReadLab_liq_error_sri; ?>"><?php echo $this->form_format_readonly("liq_error_sri", $this->form_encode_input($this->liq_error_sri)); ?></span><span id="id_read_off_liq_error_sri" class="css_read_off_liq_error_sri<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_error_sri; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_error_sri_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_error_sri" type=text name="liq_error_sri" value="<?php echo $this->form_encode_input($liq_error_sri) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=300"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_error_sri_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_error_sri_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_fecha_autorizacion']))
    {
        $this->nm_new_label['liq_fecha_autorizacion'] = "Liq Fecha Autorizacion";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   if (!isset($this->nmgp_cmp_hidden['liq_fecha_autorizacion']))
   {
       $this->nmgp_cmp_hidden['liq_fecha_autorizacion'] = 'off';
   }
   $sStyleHidden_liq_fecha_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['liq_fecha_autorizacion']) && $this->nmgp_cmp_hidden['liq_fecha_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_fecha_autorizacion']);
       $sStyleHidden_liq_fecha_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_fecha_autorizacion = 'display: none;';
   $sStyleReadInp_liq_fecha_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_fecha_autorizacion']) && $this->nmgp_cmp_readonly['liq_fecha_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_fecha_autorizacion']);
       $sStyleReadLab_liq_fecha_autorizacion = '';
       $sStyleReadInp_liq_fecha_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_fecha_autorizacion']) && $this->nmgp_cmp_hidden['liq_fecha_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_fecha_autorizacion" value="<?php echo $this->form_encode_input($liq_fecha_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_fecha_autorizacion_line" id="hidden_field_data_liq_fecha_autorizacion" style="<?php echo $sStyleHidden_liq_fecha_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_fecha_autorizacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_fecha_autorizacion_label" style=""><span id="id_label_liq_fecha_autorizacion"><?php echo $this->nm_new_label['liq_fecha_autorizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_fecha_autorizacion"]) &&  $this->nmgp_cmp_readonly["liq_fecha_autorizacion"] == "on") { 

 ?>
<input type="hidden" name="liq_fecha_autorizacion" value="<?php echo $this->form_encode_input($liq_fecha_autorizacion) . "\">" . $liq_fecha_autorizacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_fecha_autorizacion" class="sc-ui-readonly-liq_fecha_autorizacion css_liq_fecha_autorizacion_line" style="<?php echo $sStyleReadLab_liq_fecha_autorizacion; ?>"><?php echo $this->form_format_readonly("liq_fecha_autorizacion", $this->form_encode_input($liq_fecha_autorizacion)); ?></span><span id="id_read_off_liq_fecha_autorizacion" class="css_read_off_liq_fecha_autorizacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_fecha_autorizacion; ?>"><?php
$tmp_form_data = $this->field_config['liq_fecha_autorizacion']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
<?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>' style='display: inherit; width: 100%'>

 <input class="sc-js-input scFormObjectOdd css_liq_fecha_autorizacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_fecha_autorizacion" type=text name="liq_fecha_autorizacion" value="<?php echo $this->form_encode_input($liq_fecha_autorizacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['liq_fecha_autorizacion']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['liq_fecha_autorizacion']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_fecha_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_fecha_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['liq_clave']))
    {
        $this->nm_new_label['liq_clave'] = "Liq Clave";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $liq_clave = $this->liq_clave;
   if (!isset($this->nmgp_cmp_hidden['liq_clave']))
   {
       $this->nmgp_cmp_hidden['liq_clave'] = 'off';
   }
   $sStyleHidden_liq_clave = '';
   if (isset($this->nmgp_cmp_hidden['liq_clave']) && $this->nmgp_cmp_hidden['liq_clave'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['liq_clave']);
       $sStyleHidden_liq_clave = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_liq_clave = 'display: none;';
   $sStyleReadInp_liq_clave = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['liq_clave']) && $this->nmgp_cmp_readonly['liq_clave'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['liq_clave']);
       $sStyleReadLab_liq_clave = '';
       $sStyleReadInp_liq_clave = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['liq_clave']) && $this->nmgp_cmp_hidden['liq_clave'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="liq_clave" value="<?php echo $this->form_encode_input($liq_clave) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_liq_clave_line" id="hidden_field_data_liq_clave" style="<?php echo $sStyleHidden_liq_clave; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_liq_clave_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_liq_clave_label" style=""><span id="id_label_liq_clave"><?php echo $this->nm_new_label['liq_clave']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["liq_clave"]) &&  $this->nmgp_cmp_readonly["liq_clave"] == "on") { 

 ?>
<input type="hidden" name="liq_clave" value="<?php echo $this->form_encode_input($liq_clave) . "\">" . $liq_clave . ""; ?>
<?php } else { ?>
<span id="id_read_on_liq_clave" class="sc-ui-readonly-liq_clave css_liq_clave_line" style="<?php echo $sStyleReadLab_liq_clave; ?>"><?php echo $this->form_format_readonly("liq_clave", $this->form_encode_input($this->liq_clave)); ?></span><span id="id_read_off_liq_clave" class="css_read_off_liq_clave<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_liq_clave; ?>">
 <input class="sc-js-input scFormObjectOdd css_liq_clave_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_liq_clave" type=text name="liq_clave" value="<?php echo $this->form_encode_input($liq_clave) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_liq_clave_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_liq_clave_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_estado']))
    {
        $this->nm_new_label['fc_estado'] = "Fc Estado";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_estado = $this->fc_estado;
   if (!isset($this->nmgp_cmp_hidden['fc_estado']))
   {
       $this->nmgp_cmp_hidden['fc_estado'] = 'off';
   }
   $sStyleHidden_fc_estado = '';
   if (isset($this->nmgp_cmp_hidden['fc_estado']) && $this->nmgp_cmp_hidden['fc_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_estado']);
       $sStyleHidden_fc_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_estado = 'display: none;';
   $sStyleReadInp_fc_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_estado']) && $this->nmgp_cmp_readonly['fc_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_estado']);
       $sStyleReadLab_fc_estado = '';
       $sStyleReadInp_fc_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_estado']) && $this->nmgp_cmp_hidden['fc_estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_estado" value="<?php echo $this->form_encode_input($fc_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_estado_line" id="hidden_field_data_fc_estado" style="<?php echo $sStyleHidden_fc_estado; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_estado_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_estado_label" style=""><span id="id_label_fc_estado"><?php echo $this->nm_new_label['fc_estado']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_estado"]) &&  $this->nmgp_cmp_readonly["fc_estado"] == "on") { 

 ?>
<input type="hidden" name="fc_estado" value="<?php echo $this->form_encode_input($fc_estado) . "\">" . $fc_estado . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_estado" class="sc-ui-readonly-fc_estado css_fc_estado_line" style="<?php echo $sStyleReadLab_fc_estado; ?>"><?php echo $this->form_format_readonly("fc_estado", $this->form_encode_input($this->fc_estado)); ?></span><span id="id_read_off_fc_estado" class="css_read_off_fc_estado<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_estado; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_estado_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_estado" type=text name="fc_estado" value="<?php echo $this->form_encode_input($fc_estado) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_estado_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fc_estado_dumb = ('' == $sStyleHidden_fc_estado) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fc_estado_dumb" style="<?php echo $sStyleHidden_fc_estado_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_comprobante_compra'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_serie']))
    {
        $this->nm_new_label['fc_serie'] = "" . $this->Ini->Nm_lang['lang_serie_sri'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_serie = $this->fc_serie;
   $sStyleHidden_fc_serie = '';
   if (isset($this->nmgp_cmp_hidden['fc_serie']) && $this->nmgp_cmp_hidden['fc_serie'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_serie']);
       $sStyleHidden_fc_serie = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_serie = 'display: none;';
   $sStyleReadInp_fc_serie = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_serie']) && $this->nmgp_cmp_readonly['fc_serie'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_serie']);
       $sStyleReadLab_fc_serie = '';
       $sStyleReadInp_fc_serie = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_serie']) && $this->nmgp_cmp_hidden['fc_serie'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_serie" value="<?php echo $this->form_encode_input($fc_serie) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_serie_line" id="hidden_field_data_fc_serie" style="<?php echo $sStyleHidden_fc_serie; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_serie_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_serie_label" style=""><span id="id_label_fc_serie"><?php echo $this->nm_new_label['fc_serie']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_serie"]) &&  $this->nmgp_cmp_readonly["fc_serie"] == "on") { 

 ?>
<input type="hidden" name="fc_serie" value="<?php echo $this->form_encode_input($fc_serie) . "\">" . $fc_serie . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_serie" class="sc-ui-readonly-fc_serie css_fc_serie_line" style="<?php echo $sStyleReadLab_fc_serie; ?>"><?php echo $this->form_format_readonly("fc_serie", $this->form_encode_input($this->fc_serie)); ?></span><span id="id_read_off_fc_serie" class="css_read_off_fc_serie<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_serie; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_serie_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_serie" type=text name="fc_serie" value="<?php echo $this->form_encode_input($fc_serie) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=6"; } ?> maxlength=6 alt="{datatype: 'text', maxLength: 6, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_serie_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_serie_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_secuencial']))
    {
        $this->nm_new_label['fc_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_secuencial = $this->fc_secuencial;
   $sStyleHidden_fc_secuencial = '';
   if (isset($this->nmgp_cmp_hidden['fc_secuencial']) && $this->nmgp_cmp_hidden['fc_secuencial'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_secuencial']);
       $sStyleHidden_fc_secuencial = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_secuencial = 'display: none;';
   $sStyleReadInp_fc_secuencial = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_secuencial']) && $this->nmgp_cmp_readonly['fc_secuencial'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_secuencial']);
       $sStyleReadLab_fc_secuencial = '';
       $sStyleReadInp_fc_secuencial = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_secuencial']) && $this->nmgp_cmp_hidden['fc_secuencial'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_secuencial" value="<?php echo $this->form_encode_input($fc_secuencial) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_secuencial_line" id="hidden_field_data_fc_secuencial" style="<?php echo $sStyleHidden_fc_secuencial; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_secuencial_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_secuencial_label" style=""><span id="id_label_fc_secuencial"><?php echo $this->nm_new_label['fc_secuencial']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_secuencial"]) &&  $this->nmgp_cmp_readonly["fc_secuencial"] == "on") { 

 ?>
<input type="hidden" name="fc_secuencial" value="<?php echo $this->form_encode_input($fc_secuencial) . "\">" . $fc_secuencial . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_secuencial" class="sc-ui-readonly-fc_secuencial css_fc_secuencial_line" style="<?php echo $sStyleReadLab_fc_secuencial; ?>"><?php echo $this->form_format_readonly("fc_secuencial", $this->form_encode_input($this->fc_secuencial)); ?></span><span id="id_read_off_fc_secuencial" class="css_read_off_fc_secuencial<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_secuencial; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_secuencial_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_secuencial" type=text name="fc_secuencial" value="<?php echo $this->form_encode_input($fc_secuencial) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_secuencial']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_secuencial']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_secuencial_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_secuencial_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_autorizacion']))
    {
        $this->nm_new_label['fc_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_autorizacion = $this->fc_autorizacion;
   $sStyleHidden_fc_autorizacion = '';
   if (isset($this->nmgp_cmp_hidden['fc_autorizacion']) && $this->nmgp_cmp_hidden['fc_autorizacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_autorizacion']);
       $sStyleHidden_fc_autorizacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_autorizacion = 'display: none;';
   $sStyleReadInp_fc_autorizacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_autorizacion']) && $this->nmgp_cmp_readonly['fc_autorizacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_autorizacion']);
       $sStyleReadLab_fc_autorizacion = '';
       $sStyleReadInp_fc_autorizacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_autorizacion']) && $this->nmgp_cmp_hidden['fc_autorizacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_autorizacion" value="<?php echo $this->form_encode_input($fc_autorizacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_autorizacion_line" id="hidden_field_data_fc_autorizacion" style="<?php echo $sStyleHidden_fc_autorizacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_autorizacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_autorizacion_label" style=""><span id="id_label_fc_autorizacion"><?php echo $this->nm_new_label['fc_autorizacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_autorizacion"]) &&  $this->nmgp_cmp_readonly["fc_autorizacion"] == "on") { 

 ?>
<input type="hidden" name="fc_autorizacion" value="<?php echo $this->form_encode_input($fc_autorizacion) . "\">" . $fc_autorizacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_autorizacion" class="sc-ui-readonly-fc_autorizacion css_fc_autorizacion_line" style="<?php echo $sStyleReadLab_fc_autorizacion; ?>"><?php echo $this->form_format_readonly("fc_autorizacion", $this->form_encode_input($this->fc_autorizacion)); ?></span><span id="id_read_off_fc_autorizacion" class="css_read_off_fc_autorizacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_autorizacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_autorizacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_autorizacion" type=text name="fc_autorizacion" value="<?php echo $this->form_encode_input($fc_autorizacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=50 alt="{datatype: 'text', maxLength: 50, allowedChars: '<?php echo $this->allowedCharsCharset("0123456789") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_autorizacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_autorizacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fc_autorizacion_dumb = ('' == $sStyleHidden_fc_autorizacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fc_autorizacion_dumb" style="<?php echo $sStyleHidden_fc_autorizacion_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_proveedor'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_proveedor']))
    {
        $this->nm_new_label['fc_proveedor'] = "" . $this->Ini->Nm_lang['lang_proveedor'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_proveedor = $this->fc_proveedor;
   $sStyleHidden_fc_proveedor = '';
   if (isset($this->nmgp_cmp_hidden['fc_proveedor']) && $this->nmgp_cmp_hidden['fc_proveedor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_proveedor']);
       $sStyleHidden_fc_proveedor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_proveedor = 'display: none;';
   $sStyleReadInp_fc_proveedor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_proveedor']) && $this->nmgp_cmp_readonly['fc_proveedor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_proveedor']);
       $sStyleReadLab_fc_proveedor = '';
       $sStyleReadInp_fc_proveedor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_proveedor']) && $this->nmgp_cmp_hidden['fc_proveedor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_proveedor" value="<?php echo $this->form_encode_input($fc_proveedor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_proveedor_line" id="hidden_field_data_fc_proveedor" style="<?php echo $sStyleHidden_fc_proveedor; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_proveedor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_proveedor_label" style=""><span id="id_label_fc_proveedor"><?php echo $this->nm_new_label['fc_proveedor']; ?></span></span><br><input type="hidden" name="fc_proveedor" value="<?php echo $this->form_encode_input($fc_proveedor); ?>"><span id="id_ajax_label_fc_proveedor"><?php echo nl2br($fc_proveedor); ?></span>
<?php
   $Sc_iframe_master = ($this->Embutida_call) ? 'nmgp_iframe_ret*scinnmsc_iframe_liga_form_del_factura_compra_mob*scout' : '';
   if (isset($this->Ini->sc_lig_md5["busca_proveedor"]) && $this->Ini->sc_lig_md5["busca_proveedor"] == "S") {
       $Parms_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,fc_proveedor,pr_id*scoutnm_evt_ret_busca*scinsc_form_del_factura_compra_fc_proveedor_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_del_factura_compra_mob@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "nmgp_url_saida*scin*scoutnmgp_parms_ret*scinF1,fc_proveedor,pr_id*scoutnm_evt_ret_busca*scinsc_form_del_factura_compra_fc_proveedor_onchange(this)*scoutnmgp_perm_edit*scinN*scout" . $Sc_iframe_master;
   }
?>

<?php if (!$this->Ini->Export_img_zip) { ?><?php echo nmButtonOutput($this->arr_buttons, "bform_captura", "nm_submit_cap('" . $this->Ini->link_busca_proveedor_cons_psq. "', '" . $Md5_Lig . "')", "nm_submit_cap('" . $this->Ini->link_busca_proveedor_cons_psq. "', '" . $Md5_Lig . "')", "cap_fc_proveedor", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_proveedor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_proveedor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_ruc_proveedor']))
    {
        $this->nm_new_label['fc_ruc_proveedor'] = "" . $this->Ini->Nm_lang['lang_ruc'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_ruc_proveedor = $this->fc_ruc_proveedor;
   $sStyleHidden_fc_ruc_proveedor = '';
   if (isset($this->nmgp_cmp_hidden['fc_ruc_proveedor']) && $this->nmgp_cmp_hidden['fc_ruc_proveedor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_ruc_proveedor']);
       $sStyleHidden_fc_ruc_proveedor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_ruc_proveedor = 'display: none;';
   $sStyleReadInp_fc_ruc_proveedor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_ruc_proveedor']) && $this->nmgp_cmp_readonly['fc_ruc_proveedor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_ruc_proveedor']);
       $sStyleReadLab_fc_ruc_proveedor = '';
       $sStyleReadInp_fc_ruc_proveedor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_ruc_proveedor']) && $this->nmgp_cmp_hidden['fc_ruc_proveedor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_ruc_proveedor" value="<?php echo $this->form_encode_input($fc_ruc_proveedor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_ruc_proveedor_line" id="hidden_field_data_fc_ruc_proveedor" style="<?php echo $sStyleHidden_fc_ruc_proveedor; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_ruc_proveedor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_ruc_proveedor_label" style=""><span id="id_label_fc_ruc_proveedor"><?php echo $this->nm_new_label['fc_ruc_proveedor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_ruc_proveedor"]) &&  $this->nmgp_cmp_readonly["fc_ruc_proveedor"] == "on") { 

 ?>
<input type="hidden" name="fc_ruc_proveedor" value="<?php echo $this->form_encode_input($fc_ruc_proveedor) . "\">" . $fc_ruc_proveedor . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_ruc_proveedor" class="sc-ui-readonly-fc_ruc_proveedor css_fc_ruc_proveedor_line" style="<?php echo $sStyleReadLab_fc_ruc_proveedor; ?>"><?php echo $this->form_format_readonly("fc_ruc_proveedor", $this->form_encode_input($this->fc_ruc_proveedor)); ?></span><span id="id_read_off_fc_ruc_proveedor" class="css_read_off_fc_ruc_proveedor<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_ruc_proveedor; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_ruc_proveedor_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_ruc_proveedor" type=text name="fc_ruc_proveedor" value="<?php echo $this->form_encode_input($fc_ruc_proveedor) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_ruc_proveedor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_ruc_proveedor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_nombre_proveedor']))
    {
        $this->nm_new_label['fc_nombre_proveedor'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_nombre_proveedor = $this->fc_nombre_proveedor;
   $sStyleHidden_fc_nombre_proveedor = '';
   if (isset($this->nmgp_cmp_hidden['fc_nombre_proveedor']) && $this->nmgp_cmp_hidden['fc_nombre_proveedor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_nombre_proveedor']);
       $sStyleHidden_fc_nombre_proveedor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_nombre_proveedor = 'display: none;';
   $sStyleReadInp_fc_nombre_proveedor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_nombre_proveedor']) && $this->nmgp_cmp_readonly['fc_nombre_proveedor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_nombre_proveedor']);
       $sStyleReadLab_fc_nombre_proveedor = '';
       $sStyleReadInp_fc_nombre_proveedor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_nombre_proveedor']) && $this->nmgp_cmp_hidden['fc_nombre_proveedor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_nombre_proveedor" value="<?php echo $this->form_encode_input($fc_nombre_proveedor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_nombre_proveedor_line" id="hidden_field_data_fc_nombre_proveedor" style="<?php echo $sStyleHidden_fc_nombre_proveedor; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_nombre_proveedor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_nombre_proveedor_label" style=""><span id="id_label_fc_nombre_proveedor"><?php echo $this->nm_new_label['fc_nombre_proveedor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_nombre_proveedor"]) &&  $this->nmgp_cmp_readonly["fc_nombre_proveedor"] == "on") { 

 ?>
<input type="hidden" name="fc_nombre_proveedor" value="<?php echo $this->form_encode_input($fc_nombre_proveedor) . "\">" . $fc_nombre_proveedor . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_nombre_proveedor" class="sc-ui-readonly-fc_nombre_proveedor css_fc_nombre_proveedor_line" style="<?php echo $sStyleReadLab_fc_nombre_proveedor; ?>"><?php echo $this->form_format_readonly("fc_nombre_proveedor", $this->form_encode_input($this->fc_nombre_proveedor)); ?></span><span id="id_read_off_fc_nombre_proveedor" class="css_read_off_fc_nombre_proveedor<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_nombre_proveedor; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_nombre_proveedor_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_nombre_proveedor" type=text name="fc_nombre_proveedor" value="<?php echo $this->form_encode_input($fc_nombre_proveedor) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_nombre_proveedor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_nombre_proveedor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_direccion_proveedor']))
    {
        $this->nm_new_label['fc_direccion_proveedor'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_direccion_proveedor = $this->fc_direccion_proveedor;
   $sStyleHidden_fc_direccion_proveedor = '';
   if (isset($this->nmgp_cmp_hidden['fc_direccion_proveedor']) && $this->nmgp_cmp_hidden['fc_direccion_proveedor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_direccion_proveedor']);
       $sStyleHidden_fc_direccion_proveedor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_direccion_proveedor = 'display: none;';
   $sStyleReadInp_fc_direccion_proveedor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_direccion_proveedor']) && $this->nmgp_cmp_readonly['fc_direccion_proveedor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_direccion_proveedor']);
       $sStyleReadLab_fc_direccion_proveedor = '';
       $sStyleReadInp_fc_direccion_proveedor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_direccion_proveedor']) && $this->nmgp_cmp_hidden['fc_direccion_proveedor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_direccion_proveedor" value="<?php echo $this->form_encode_input($fc_direccion_proveedor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_direccion_proveedor_line" id="hidden_field_data_fc_direccion_proveedor" style="<?php echo $sStyleHidden_fc_direccion_proveedor; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_direccion_proveedor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_direccion_proveedor_label" style=""><span id="id_label_fc_direccion_proveedor"><?php echo $this->nm_new_label['fc_direccion_proveedor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_direccion_proveedor"]) &&  $this->nmgp_cmp_readonly["fc_direccion_proveedor"] == "on") { 

 ?>
<input type="hidden" name="fc_direccion_proveedor" value="<?php echo $this->form_encode_input($fc_direccion_proveedor) . "\">" . $fc_direccion_proveedor . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_direccion_proveedor" class="sc-ui-readonly-fc_direccion_proveedor css_fc_direccion_proveedor_line" style="<?php echo $sStyleReadLab_fc_direccion_proveedor; ?>"><?php echo $this->form_format_readonly("fc_direccion_proveedor", $this->form_encode_input($this->fc_direccion_proveedor)); ?></span><span id="id_read_off_fc_direccion_proveedor" class="css_read_off_fc_direccion_proveedor<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_direccion_proveedor; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_direccion_proveedor_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_direccion_proveedor" type=text name="fc_direccion_proveedor" value="<?php echo $this->form_encode_input($fc_direccion_proveedor) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_direccion_proveedor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_direccion_proveedor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_email_proveedor']))
    {
        $this->nm_new_label['fc_email_proveedor'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_email_proveedor = $this->fc_email_proveedor;
   $sStyleHidden_fc_email_proveedor = '';
   if (isset($this->nmgp_cmp_hidden['fc_email_proveedor']) && $this->nmgp_cmp_hidden['fc_email_proveedor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_email_proveedor']);
       $sStyleHidden_fc_email_proveedor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_email_proveedor = 'display: none;';
   $sStyleReadInp_fc_email_proveedor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_email_proveedor']) && $this->nmgp_cmp_readonly['fc_email_proveedor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_email_proveedor']);
       $sStyleReadLab_fc_email_proveedor = '';
       $sStyleReadInp_fc_email_proveedor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_email_proveedor']) && $this->nmgp_cmp_hidden['fc_email_proveedor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_email_proveedor" value="<?php echo $this->form_encode_input($fc_email_proveedor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_email_proveedor_line" id="hidden_field_data_fc_email_proveedor" style="<?php echo $sStyleHidden_fc_email_proveedor; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_email_proveedor_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_email_proveedor_label" style=""><span id="id_label_fc_email_proveedor"><?php echo $this->nm_new_label['fc_email_proveedor']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_email_proveedor"]) &&  $this->nmgp_cmp_readonly["fc_email_proveedor"] == "on") { 

 ?>
<input type="hidden" name="fc_email_proveedor" value="<?php echo $this->form_encode_input($fc_email_proveedor) . "\">" . $fc_email_proveedor . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_email_proveedor" class="sc-ui-readonly-fc_email_proveedor css_fc_email_proveedor_line" style="<?php echo $sStyleReadLab_fc_email_proveedor; ?>"><?php echo $this->form_format_readonly("fc_email_proveedor", $this->form_encode_input($this->fc_email_proveedor)); ?></span><span id="id_read_off_fc_email_proveedor" class="css_read_off_fc_email_proveedor<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_email_proveedor; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_email_proveedor_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_email_proveedor" type=text name="fc_email_proveedor" value="<?php echo $this->form_encode_input($fc_email_proveedor) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_email_proveedor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_email_proveedor_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fc_aplica_ret']))
   {
       $this->nm_new_label['fc_aplica_ret'] = "" . $this->Ini->Nm_lang['lang_aplica_retencion'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_aplica_ret = $this->fc_aplica_ret;
   $sStyleHidden_fc_aplica_ret = '';
   if (isset($this->nmgp_cmp_hidden['fc_aplica_ret']) && $this->nmgp_cmp_hidden['fc_aplica_ret'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_aplica_ret']);
       $sStyleHidden_fc_aplica_ret = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_aplica_ret = 'display: none;';
   $sStyleReadInp_fc_aplica_ret = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_aplica_ret']) && $this->nmgp_cmp_readonly['fc_aplica_ret'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_aplica_ret']);
       $sStyleReadLab_fc_aplica_ret = '';
       $sStyleReadInp_fc_aplica_ret = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_aplica_ret']) && $this->nmgp_cmp_hidden['fc_aplica_ret'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fc_aplica_ret" value="<?php echo $this->form_encode_input($this->fc_aplica_ret) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_aplica_ret_line" id="hidden_field_data_fc_aplica_ret" style="<?php echo $sStyleHidden_fc_aplica_ret; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_aplica_ret_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_aplica_ret_label" style=""><span id="id_label_fc_aplica_ret"><?php echo $this->nm_new_label['fc_aplica_ret']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_aplica_ret"]) &&  $this->nmgp_cmp_readonly["fc_aplica_ret"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_libretin = $this->liq_libretin;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_libretin = $this->liq_libretin;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_libretin = $old_value_liq_libretin;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_ret'][] = $rs->fields[0];
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
   $x = 0; 
   $fc_aplica_ret_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_aplica_ret_1))
          {
              foreach ($this->fc_aplica_ret_1 as $tmp_fc_aplica_ret)
              {
                  if (trim($tmp_fc_aplica_ret) === trim($cadaselect[1])) {$fc_aplica_ret_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_aplica_ret) && trim($this->fc_aplica_ret) === trim($cadaselect[1])) {$fc_aplica_ret_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fc_aplica_ret" value="<?php echo $this->form_encode_input($fc_aplica_ret) . "\">" . $fc_aplica_ret_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fc_aplica_ret();
   $x = 0 ; 
   $fc_aplica_ret_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_aplica_ret_1))
          {
              foreach ($this->fc_aplica_ret_1 as $tmp_fc_aplica_ret)
              {
                  if (trim($tmp_fc_aplica_ret) === trim($cadaselect[1])) {$fc_aplica_ret_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_aplica_ret) && trim($this->fc_aplica_ret) === trim($cadaselect[1])) { $fc_aplica_ret_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fc_aplica_ret_look))
          {
              $fc_aplica_ret_look = $this->fc_aplica_ret;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fc_aplica_ret\" class=\"css_fc_aplica_ret_line\" style=\"" .  $sStyleReadLab_fc_aplica_ret . "\">" . $this->form_format_readonly("fc_aplica_ret", $this->form_encode_input($fc_aplica_ret_look)) . "</span><span id=\"id_read_off_fc_aplica_ret\" class=\"css_read_off_fc_aplica_ret" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fc_aplica_ret . "\">";
   echo " <span id=\"idAjaxSelect_fc_aplica_ret\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fc_aplica_ret_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fc_aplica_ret\" name=\"fc_aplica_ret\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fc_aplica_ret) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fc_aplica_ret)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_aplica_ret_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_aplica_ret_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_comentario']))
    {
        $this->nm_new_label['fc_comentario'] = "" . $this->Ini->Nm_lang['lang_comentario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_comentario = $this->fc_comentario;
   $sStyleHidden_fc_comentario = '';
   if (isset($this->nmgp_cmp_hidden['fc_comentario']) && $this->nmgp_cmp_hidden['fc_comentario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_comentario']);
       $sStyleHidden_fc_comentario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_comentario = 'display: none;';
   $sStyleReadInp_fc_comentario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_comentario']) && $this->nmgp_cmp_readonly['fc_comentario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_comentario']);
       $sStyleReadLab_fc_comentario = '';
       $sStyleReadInp_fc_comentario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_comentario']) && $this->nmgp_cmp_hidden['fc_comentario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_comentario" value="<?php echo $this->form_encode_input($fc_comentario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_comentario_line" id="hidden_field_data_fc_comentario" style="<?php echo $sStyleHidden_fc_comentario; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_comentario_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_comentario_label" style=""><span id="id_label_fc_comentario"><?php echo $this->nm_new_label['fc_comentario']; ?></span></span><br>
<?php
$fc_comentario_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($fc_comentario));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_comentario"]) &&  $this->nmgp_cmp_readonly["fc_comentario"] == "on") { 

 ?>
<input type="hidden" name="fc_comentario" value="<?php echo $this->form_encode_input($fc_comentario) . "\">" . $fc_comentario_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_comentario" class="sc-ui-readonly-fc_comentario css_fc_comentario_line" style="<?php echo $sStyleReadLab_fc_comentario; ?>"><?php echo $this->form_format_readonly("fc_comentario", $this->form_encode_input($fc_comentario_val)); ?></span><span id="id_read_off_fc_comentario" class="css_read_off_fc_comentario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_comentario; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_fc_comentario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;resize: vertical;" name="fc_comentario" id="id_sc_field_fc_comentario" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $fc_comentario; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_comentario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_comentario_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['fc_aplica_propina']))
   {
       $this->nm_new_label['fc_aplica_propina'] = "" . $this->Ini->Nm_lang['lang_dar_propina'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_aplica_propina = $this->fc_aplica_propina;
   $sStyleHidden_fc_aplica_propina = '';
   if (isset($this->nmgp_cmp_hidden['fc_aplica_propina']) && $this->nmgp_cmp_hidden['fc_aplica_propina'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_aplica_propina']);
       $sStyleHidden_fc_aplica_propina = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_aplica_propina = 'display: none;';
   $sStyleReadInp_fc_aplica_propina = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_aplica_propina']) && $this->nmgp_cmp_readonly['fc_aplica_propina'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_aplica_propina']);
       $sStyleReadLab_fc_aplica_propina = '';
       $sStyleReadInp_fc_aplica_propina = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_aplica_propina']) && $this->nmgp_cmp_hidden['fc_aplica_propina'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="fc_aplica_propina" value="<?php echo $this->form_encode_input($this->fc_aplica_propina) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_aplica_propina_line" id="hidden_field_data_fc_aplica_propina" style="<?php echo $sStyleHidden_fc_aplica_propina; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_aplica_propina_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_aplica_propina_label" style=""><span id="id_label_fc_aplica_propina"><?php echo $this->nm_new_label['fc_aplica_propina']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_aplica_propina"]) &&  $this->nmgp_cmp_readonly["fc_aplica_propina"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'] = array(); 
    }

   $old_value_fc_fecha = $this->fc_fecha;
   $old_value_liq_libretin = $this->liq_libretin;
   $old_value_liq_establecimiento = $this->liq_establecimiento;
   $old_value_liq_punto_emision = $this->liq_punto_emision;
   $old_value_liq_ambiente = $this->liq_ambiente;
   $old_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $old_value_fc_secuencial = $this->fc_secuencial;
   $old_value_fc_proveedor = $this->fc_proveedor;
   $old_value_fc_subtotal = $this->fc_subtotal;
   $old_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $old_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $old_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $old_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $old_value_fc_total_descuento = $this->fc_total_descuento;
   $old_value_fc_valor_ice = $this->fc_valor_ice;
   $old_value_fc_valor_iva = $this->fc_valor_iva;
   $old_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $old_value_fc_propina = $this->fc_propina;
   $old_value_fc_total = $this->fc_total;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_fc_fecha = $this->fc_fecha;
   $unformatted_value_liq_libretin = $this->liq_libretin;
   $unformatted_value_liq_establecimiento = $this->liq_establecimiento;
   $unformatted_value_liq_punto_emision = $this->liq_punto_emision;
   $unformatted_value_liq_ambiente = $this->liq_ambiente;
   $unformatted_value_liq_fecha_autorizacion = $this->liq_fecha_autorizacion;
   $unformatted_value_fc_secuencial = $this->fc_secuencial;
   $unformatted_value_fc_proveedor = $this->fc_proveedor;
   $unformatted_value_fc_subtotal = $this->fc_subtotal;
   $unformatted_value_fc_subtotal_iva = $this->fc_subtotal_iva;
   $unformatted_value_fc_subtotal_cero = $this->fc_subtotal_cero;
   $unformatted_value_fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $unformatted_value_fc_subtotal_excento = $this->fc_subtotal_excento;
   $unformatted_value_fc_total_descuento = $this->fc_total_descuento;
   $unformatted_value_fc_valor_ice = $this->fc_valor_ice;
   $unformatted_value_fc_valor_iva = $this->fc_valor_iva;
   $unformatted_value_fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $unformatted_value_fc_propina = $this->fc_propina;
   $unformatted_value_fc_total = $this->fc_total;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_sino  ORDER BY dec_nombre";

   $this->fc_fecha = $old_value_fc_fecha;
   $this->liq_libretin = $old_value_liq_libretin;
   $this->liq_establecimiento = $old_value_liq_establecimiento;
   $this->liq_punto_emision = $old_value_liq_punto_emision;
   $this->liq_ambiente = $old_value_liq_ambiente;
   $this->liq_fecha_autorizacion = $old_value_liq_fecha_autorizacion;
   $this->fc_secuencial = $old_value_fc_secuencial;
   $this->fc_proveedor = $old_value_fc_proveedor;
   $this->fc_subtotal = $old_value_fc_subtotal;
   $this->fc_subtotal_iva = $old_value_fc_subtotal_iva;
   $this->fc_subtotal_cero = $old_value_fc_subtotal_cero;
   $this->fc_subtotal_no_objeto = $old_value_fc_subtotal_no_objeto;
   $this->fc_subtotal_excento = $old_value_fc_subtotal_excento;
   $this->fc_total_descuento = $old_value_fc_total_descuento;
   $this->fc_valor_ice = $old_value_fc_valor_ice;
   $this->fc_valor_iva = $old_value_fc_valor_iva;
   $this->fc_valor_irbpnr = $old_value_fc_valor_irbpnr;
   $this->fc_propina = $old_value_fc_propina;
   $this->fc_total = $old_value_fc_total;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['Lookup_fc_aplica_propina'][] = $rs->fields[0];
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
   $x = 0; 
   $fc_aplica_propina_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_aplica_propina_1))
          {
              foreach ($this->fc_aplica_propina_1 as $tmp_fc_aplica_propina)
              {
                  if (trim($tmp_fc_aplica_propina) === trim($cadaselect[1])) {$fc_aplica_propina_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_aplica_propina) && trim($this->fc_aplica_propina) === trim($cadaselect[1])) {$fc_aplica_propina_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="fc_aplica_propina" value="<?php echo $this->form_encode_input($fc_aplica_propina) . "\">" . $fc_aplica_propina_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_fc_aplica_propina();
   $x = 0 ; 
   $fc_aplica_propina_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->fc_aplica_propina_1))
          {
              foreach ($this->fc_aplica_propina_1 as $tmp_fc_aplica_propina)
              {
                  if (trim($tmp_fc_aplica_propina) === trim($cadaselect[1])) {$fc_aplica_propina_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->fc_aplica_propina) && trim($this->fc_aplica_propina) === trim($cadaselect[1])) { $fc_aplica_propina_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($fc_aplica_propina_look))
          {
              $fc_aplica_propina_look = $this->fc_aplica_propina;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_fc_aplica_propina\" class=\"css_fc_aplica_propina_line\" style=\"" .  $sStyleReadLab_fc_aplica_propina . "\">" . $this->form_format_readonly("fc_aplica_propina", $this->form_encode_input($fc_aplica_propina_look)) . "</span><span id=\"id_read_off_fc_aplica_propina\" class=\"css_read_off_fc_aplica_propina" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_fc_aplica_propina . "\">";
   echo " <span id=\"idAjaxSelect_fc_aplica_propina\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_fc_aplica_propina_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_fc_aplica_propina\" name=\"fc_aplica_propina\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->fc_aplica_propina) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->fc_aplica_propina)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">" . str_replace('<', '&lt;',$cadaselect[0]) . "</option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_aplica_propina_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_aplica_propina_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fc_aplica_propina_dumb = ('' == $sStyleHidden_fc_aplica_propina) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fc_aplica_propina_dumb" style="<?php echo $sStyleHidden_fc_aplica_propina_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_detalles'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['detalles']))
    {
        $this->nm_new_label['detalles'] = "detalles";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $detalles = $this->detalles;
   $sStyleHidden_detalles = '';
   if (isset($this->nmgp_cmp_hidden['detalles']) && $this->nmgp_cmp_hidden['detalles'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['detalles']);
       $sStyleHidden_detalles = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_detalles = 'display: none;';
   $sStyleReadInp_detalles = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['detalles']) && $this->nmgp_cmp_readonly['detalles'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['detalles']);
       $sStyleReadLab_detalles = '';
       $sStyleReadInp_detalles = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['detalles']) && $this->nmgp_cmp_hidden['detalles'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="detalles" value="<?php echo $this->form_encode_input($detalles) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_detalles_line" id="hidden_field_data_detalles" style="<?php echo $sStyleHidden_detalles; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_detalles_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_detalles'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_qtd_reg'] = '';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fc_id'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['foreign_key']['dfc_factura'] = $this->nmgp_dados_form['fc_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['where_filter'] = "dfc_factura = " . $this->nmgp_dados_form['fc_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['where_detal']  = "dfc_factura = " . $this->nmgp_dados_form['fc_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_factura_compra_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_factura_compra_mob_empty.htm' : $this->Ini->link_form_del_detalle_factura_compra_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=440';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init'] ]['form_del_detalle_factura_compra'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_detalles']) && 'nmsc_iframe_liga_form_del_detalle_factura_compra_mob' != $this->Ini->sc_lig_target['C_@scinf_detalles'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_detalles'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_detalle_factura_compra_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_detalles'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_detalle_factura_compra_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="440" width="100%" name="nmsc_iframe_liga_form_del_detalle_factura_compra_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_detalles_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_detalles_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_detalles_dumb = ('' == $sStyleHidden_detalles) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_detalles_dumb" style="<?php echo $sStyleHidden_detalles_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_totales'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_subtotal']))
    {
        $this->nm_new_label['fc_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal_sin_impuesto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_subtotal = $this->fc_subtotal;
   $sStyleHidden_fc_subtotal = '';
   if (isset($this->nmgp_cmp_hidden['fc_subtotal']) && $this->nmgp_cmp_hidden['fc_subtotal'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_subtotal']);
       $sStyleHidden_fc_subtotal = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_subtotal = 'display: none;';
   $sStyleReadInp_fc_subtotal = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_subtotal']) && $this->nmgp_cmp_readonly['fc_subtotal'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_subtotal']);
       $sStyleReadLab_fc_subtotal = '';
       $sStyleReadInp_fc_subtotal = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_subtotal']) && $this->nmgp_cmp_hidden['fc_subtotal'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_subtotal" value="<?php echo $this->form_encode_input($fc_subtotal) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_subtotal_line" id="hidden_field_data_fc_subtotal" style="<?php echo $sStyleHidden_fc_subtotal; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_subtotal_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_subtotal_label" style=""><span id="id_label_fc_subtotal"><?php echo $this->nm_new_label['fc_subtotal']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_subtotal"]) &&  $this->nmgp_cmp_readonly["fc_subtotal"] == "on") { 

 ?>
<input type="hidden" name="fc_subtotal" value="<?php echo $this->form_encode_input($fc_subtotal) . "\">" . $fc_subtotal . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_subtotal" class="sc-ui-readonly-fc_subtotal css_fc_subtotal_line" style="<?php echo $sStyleReadLab_fc_subtotal; ?>"><?php echo $this->form_format_readonly("fc_subtotal", $this->form_encode_input($this->fc_subtotal)); ?></span><span id="id_read_off_fc_subtotal" class="css_read_off_fc_subtotal<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_subtotal; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_subtotal_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_subtotal" type=text name="fc_subtotal" value="<?php echo $this->form_encode_input($fc_subtotal) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_subtotal']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_subtotal']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_subtotal']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_subtotal_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_subtotal_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_subtotal_iva']))
    {
        $this->nm_new_label['fc_subtotal_iva'] = "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_subtotal_iva = $this->fc_subtotal_iva;
   $sStyleHidden_fc_subtotal_iva = '';
   if (isset($this->nmgp_cmp_hidden['fc_subtotal_iva']) && $this->nmgp_cmp_hidden['fc_subtotal_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_subtotal_iva']);
       $sStyleHidden_fc_subtotal_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_subtotal_iva = 'display: none;';
   $sStyleReadInp_fc_subtotal_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_subtotal_iva']) && $this->nmgp_cmp_readonly['fc_subtotal_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_subtotal_iva']);
       $sStyleReadLab_fc_subtotal_iva = '';
       $sStyleReadInp_fc_subtotal_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_subtotal_iva']) && $this->nmgp_cmp_hidden['fc_subtotal_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_subtotal_iva" value="<?php echo $this->form_encode_input($fc_subtotal_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_subtotal_iva_line" id="hidden_field_data_fc_subtotal_iva" style="<?php echo $sStyleHidden_fc_subtotal_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_subtotal_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_subtotal_iva_label" style=""><span id="id_label_fc_subtotal_iva"><?php echo $this->nm_new_label['fc_subtotal_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_subtotal_iva"]) &&  $this->nmgp_cmp_readonly["fc_subtotal_iva"] == "on") { 

 ?>
<input type="hidden" name="fc_subtotal_iva" value="<?php echo $this->form_encode_input($fc_subtotal_iva) . "\">" . $fc_subtotal_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_subtotal_iva" class="sc-ui-readonly-fc_subtotal_iva css_fc_subtotal_iva_line" style="<?php echo $sStyleReadLab_fc_subtotal_iva; ?>"><?php echo $this->form_format_readonly("fc_subtotal_iva", $this->form_encode_input($this->fc_subtotal_iva)); ?></span><span id="id_read_off_fc_subtotal_iva" class="css_read_off_fc_subtotal_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_subtotal_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_subtotal_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_subtotal_iva" type=text name="fc_subtotal_iva" value="<?php echo $this->form_encode_input($fc_subtotal_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_subtotal_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_subtotal_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_subtotal_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_subtotal_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_subtotal_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_subtotal_cero']))
    {
        $this->nm_new_label['fc_subtotal_cero'] = "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_subtotal_cero = $this->fc_subtotal_cero;
   $sStyleHidden_fc_subtotal_cero = '';
   if (isset($this->nmgp_cmp_hidden['fc_subtotal_cero']) && $this->nmgp_cmp_hidden['fc_subtotal_cero'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_subtotal_cero']);
       $sStyleHidden_fc_subtotal_cero = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_subtotal_cero = 'display: none;';
   $sStyleReadInp_fc_subtotal_cero = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_subtotal_cero']) && $this->nmgp_cmp_readonly['fc_subtotal_cero'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_subtotal_cero']);
       $sStyleReadLab_fc_subtotal_cero = '';
       $sStyleReadInp_fc_subtotal_cero = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_subtotal_cero']) && $this->nmgp_cmp_hidden['fc_subtotal_cero'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_subtotal_cero" value="<?php echo $this->form_encode_input($fc_subtotal_cero) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_subtotal_cero_line" id="hidden_field_data_fc_subtotal_cero" style="<?php echo $sStyleHidden_fc_subtotal_cero; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_subtotal_cero_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_subtotal_cero_label" style=""><span id="id_label_fc_subtotal_cero"><?php echo $this->nm_new_label['fc_subtotal_cero']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_subtotal_cero"]) &&  $this->nmgp_cmp_readonly["fc_subtotal_cero"] == "on") { 

 ?>
<input type="hidden" name="fc_subtotal_cero" value="<?php echo $this->form_encode_input($fc_subtotal_cero) . "\">" . $fc_subtotal_cero . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_subtotal_cero" class="sc-ui-readonly-fc_subtotal_cero css_fc_subtotal_cero_line" style="<?php echo $sStyleReadLab_fc_subtotal_cero; ?>"><?php echo $this->form_format_readonly("fc_subtotal_cero", $this->form_encode_input($this->fc_subtotal_cero)); ?></span><span id="id_read_off_fc_subtotal_cero" class="css_read_off_fc_subtotal_cero<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_subtotal_cero; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_subtotal_cero_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_subtotal_cero" type=text name="fc_subtotal_cero" value="<?php echo $this->form_encode_input($fc_subtotal_cero) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_subtotal_cero']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_subtotal_cero']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_subtotal_cero']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_subtotal_cero_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_subtotal_cero_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_subtotal_no_objeto']))
    {
        $this->nm_new_label['fc_subtotal_no_objeto'] = "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_subtotal_no_objeto = $this->fc_subtotal_no_objeto;
   $sStyleHidden_fc_subtotal_no_objeto = '';
   if (isset($this->nmgp_cmp_hidden['fc_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['fc_subtotal_no_objeto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_subtotal_no_objeto']);
       $sStyleHidden_fc_subtotal_no_objeto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_subtotal_no_objeto = 'display: none;';
   $sStyleReadInp_fc_subtotal_no_objeto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_subtotal_no_objeto']) && $this->nmgp_cmp_readonly['fc_subtotal_no_objeto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_subtotal_no_objeto']);
       $sStyleReadLab_fc_subtotal_no_objeto = '';
       $sStyleReadInp_fc_subtotal_no_objeto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_subtotal_no_objeto']) && $this->nmgp_cmp_hidden['fc_subtotal_no_objeto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fc_subtotal_no_objeto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_subtotal_no_objeto_line" id="hidden_field_data_fc_subtotal_no_objeto" style="<?php echo $sStyleHidden_fc_subtotal_no_objeto; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_subtotal_no_objeto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_subtotal_no_objeto_label" style=""><span id="id_label_fc_subtotal_no_objeto"><?php echo $this->nm_new_label['fc_subtotal_no_objeto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_subtotal_no_objeto"]) &&  $this->nmgp_cmp_readonly["fc_subtotal_no_objeto"] == "on") { 

 ?>
<input type="hidden" name="fc_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fc_subtotal_no_objeto) . "\">" . $fc_subtotal_no_objeto . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_subtotal_no_objeto" class="sc-ui-readonly-fc_subtotal_no_objeto css_fc_subtotal_no_objeto_line" style="<?php echo $sStyleReadLab_fc_subtotal_no_objeto; ?>"><?php echo $this->form_format_readonly("fc_subtotal_no_objeto", $this->form_encode_input($this->fc_subtotal_no_objeto)); ?></span><span id="id_read_off_fc_subtotal_no_objeto" class="css_read_off_fc_subtotal_no_objeto<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_subtotal_no_objeto; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_subtotal_no_objeto_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_subtotal_no_objeto" type=text name="fc_subtotal_no_objeto" value="<?php echo $this->form_encode_input($fc_subtotal_no_objeto) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_subtotal_no_objeto']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_subtotal_no_objeto']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_subtotal_no_objeto']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_subtotal_no_objeto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_subtotal_no_objeto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_subtotal_excento']))
    {
        $this->nm_new_label['fc_subtotal_excento'] = "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_subtotal_excento = $this->fc_subtotal_excento;
   $sStyleHidden_fc_subtotal_excento = '';
   if (isset($this->nmgp_cmp_hidden['fc_subtotal_excento']) && $this->nmgp_cmp_hidden['fc_subtotal_excento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_subtotal_excento']);
       $sStyleHidden_fc_subtotal_excento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_subtotal_excento = 'display: none;';
   $sStyleReadInp_fc_subtotal_excento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_subtotal_excento']) && $this->nmgp_cmp_readonly['fc_subtotal_excento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_subtotal_excento']);
       $sStyleReadLab_fc_subtotal_excento = '';
       $sStyleReadInp_fc_subtotal_excento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_subtotal_excento']) && $this->nmgp_cmp_hidden['fc_subtotal_excento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_subtotal_excento" value="<?php echo $this->form_encode_input($fc_subtotal_excento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_subtotal_excento_line" id="hidden_field_data_fc_subtotal_excento" style="<?php echo $sStyleHidden_fc_subtotal_excento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_subtotal_excento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_subtotal_excento_label" style=""><span id="id_label_fc_subtotal_excento"><?php echo $this->nm_new_label['fc_subtotal_excento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_subtotal_excento"]) &&  $this->nmgp_cmp_readonly["fc_subtotal_excento"] == "on") { 

 ?>
<input type="hidden" name="fc_subtotal_excento" value="<?php echo $this->form_encode_input($fc_subtotal_excento) . "\">" . $fc_subtotal_excento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_subtotal_excento" class="sc-ui-readonly-fc_subtotal_excento css_fc_subtotal_excento_line" style="<?php echo $sStyleReadLab_fc_subtotal_excento; ?>"><?php echo $this->form_format_readonly("fc_subtotal_excento", $this->form_encode_input($this->fc_subtotal_excento)); ?></span><span id="id_read_off_fc_subtotal_excento" class="css_read_off_fc_subtotal_excento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_subtotal_excento; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_subtotal_excento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_subtotal_excento" type=text name="fc_subtotal_excento" value="<?php echo $this->form_encode_input($fc_subtotal_excento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_subtotal_excento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_subtotal_excento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_subtotal_excento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_subtotal_excento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_subtotal_excento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_total_descuento']))
    {
        $this->nm_new_label['fc_total_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_total_descuento = $this->fc_total_descuento;
   $sStyleHidden_fc_total_descuento = '';
   if (isset($this->nmgp_cmp_hidden['fc_total_descuento']) && $this->nmgp_cmp_hidden['fc_total_descuento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_total_descuento']);
       $sStyleHidden_fc_total_descuento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_total_descuento = 'display: none;';
   $sStyleReadInp_fc_total_descuento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_total_descuento']) && $this->nmgp_cmp_readonly['fc_total_descuento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_total_descuento']);
       $sStyleReadLab_fc_total_descuento = '';
       $sStyleReadInp_fc_total_descuento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_total_descuento']) && $this->nmgp_cmp_hidden['fc_total_descuento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_total_descuento" value="<?php echo $this->form_encode_input($fc_total_descuento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_total_descuento_line" id="hidden_field_data_fc_total_descuento" style="<?php echo $sStyleHidden_fc_total_descuento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_total_descuento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_total_descuento_label" style=""><span id="id_label_fc_total_descuento"><?php echo $this->nm_new_label['fc_total_descuento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_total_descuento"]) &&  $this->nmgp_cmp_readonly["fc_total_descuento"] == "on") { 

 ?>
<input type="hidden" name="fc_total_descuento" value="<?php echo $this->form_encode_input($fc_total_descuento) . "\">" . $fc_total_descuento . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_total_descuento" class="sc-ui-readonly-fc_total_descuento css_fc_total_descuento_line" style="<?php echo $sStyleReadLab_fc_total_descuento; ?>"><?php echo $this->form_format_readonly("fc_total_descuento", $this->form_encode_input($this->fc_total_descuento)); ?></span><span id="id_read_off_fc_total_descuento" class="css_read_off_fc_total_descuento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_total_descuento; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_total_descuento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_total_descuento" type=text name="fc_total_descuento" value="<?php echo $this->form_encode_input($fc_total_descuento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_total_descuento']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_total_descuento']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_total_descuento']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_total_descuento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_total_descuento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_valor_ice']))
    {
        $this->nm_new_label['fc_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_valor_ice = $this->fc_valor_ice;
   $sStyleHidden_fc_valor_ice = '';
   if (isset($this->nmgp_cmp_hidden['fc_valor_ice']) && $this->nmgp_cmp_hidden['fc_valor_ice'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_valor_ice']);
       $sStyleHidden_fc_valor_ice = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_valor_ice = 'display: none;';
   $sStyleReadInp_fc_valor_ice = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_valor_ice']) && $this->nmgp_cmp_readonly['fc_valor_ice'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_valor_ice']);
       $sStyleReadLab_fc_valor_ice = '';
       $sStyleReadInp_fc_valor_ice = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_valor_ice']) && $this->nmgp_cmp_hidden['fc_valor_ice'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_valor_ice" value="<?php echo $this->form_encode_input($fc_valor_ice) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_valor_ice_line" id="hidden_field_data_fc_valor_ice" style="<?php echo $sStyleHidden_fc_valor_ice; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_valor_ice_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_valor_ice_label" style=""><span id="id_label_fc_valor_ice"><?php echo $this->nm_new_label['fc_valor_ice']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_valor_ice"]) &&  $this->nmgp_cmp_readonly["fc_valor_ice"] == "on") { 

 ?>
<input type="hidden" name="fc_valor_ice" value="<?php echo $this->form_encode_input($fc_valor_ice) . "\">" . $fc_valor_ice . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_valor_ice" class="sc-ui-readonly-fc_valor_ice css_fc_valor_ice_line" style="<?php echo $sStyleReadLab_fc_valor_ice; ?>"><?php echo $this->form_format_readonly("fc_valor_ice", $this->form_encode_input($this->fc_valor_ice)); ?></span><span id="id_read_off_fc_valor_ice" class="css_read_off_fc_valor_ice<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_valor_ice; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_valor_ice_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_valor_ice" type=text name="fc_valor_ice" value="<?php echo $this->form_encode_input($fc_valor_ice) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_valor_ice']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_valor_ice']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_valor_ice']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_valor_ice_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_valor_ice_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_valor_iva']))
    {
        $this->nm_new_label['fc_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_valor_iva = $this->fc_valor_iva;
   $sStyleHidden_fc_valor_iva = '';
   if (isset($this->nmgp_cmp_hidden['fc_valor_iva']) && $this->nmgp_cmp_hidden['fc_valor_iva'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_valor_iva']);
       $sStyleHidden_fc_valor_iva = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_valor_iva = 'display: none;';
   $sStyleReadInp_fc_valor_iva = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_valor_iva']) && $this->nmgp_cmp_readonly['fc_valor_iva'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_valor_iva']);
       $sStyleReadLab_fc_valor_iva = '';
       $sStyleReadInp_fc_valor_iva = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_valor_iva']) && $this->nmgp_cmp_hidden['fc_valor_iva'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_valor_iva" value="<?php echo $this->form_encode_input($fc_valor_iva) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_valor_iva_line" id="hidden_field_data_fc_valor_iva" style="<?php echo $sStyleHidden_fc_valor_iva; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_valor_iva_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_valor_iva_label" style=""><span id="id_label_fc_valor_iva"><?php echo $this->nm_new_label['fc_valor_iva']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_valor_iva"]) &&  $this->nmgp_cmp_readonly["fc_valor_iva"] == "on") { 

 ?>
<input type="hidden" name="fc_valor_iva" value="<?php echo $this->form_encode_input($fc_valor_iva) . "\">" . $fc_valor_iva . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_valor_iva" class="sc-ui-readonly-fc_valor_iva css_fc_valor_iva_line" style="<?php echo $sStyleReadLab_fc_valor_iva; ?>"><?php echo $this->form_format_readonly("fc_valor_iva", $this->form_encode_input($this->fc_valor_iva)); ?></span><span id="id_read_off_fc_valor_iva" class="css_read_off_fc_valor_iva<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_valor_iva; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_valor_iva_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_valor_iva" type=text name="fc_valor_iva" value="<?php echo $this->form_encode_input($fc_valor_iva) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_valor_iva']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_valor_iva']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_valor_iva']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_valor_iva_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_valor_iva_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_valor_irbpnr']))
    {
        $this->nm_new_label['fc_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_valor_irbpnr = $this->fc_valor_irbpnr;
   $sStyleHidden_fc_valor_irbpnr = '';
   if (isset($this->nmgp_cmp_hidden['fc_valor_irbpnr']) && $this->nmgp_cmp_hidden['fc_valor_irbpnr'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_valor_irbpnr']);
       $sStyleHidden_fc_valor_irbpnr = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_valor_irbpnr = 'display: none;';
   $sStyleReadInp_fc_valor_irbpnr = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_valor_irbpnr']) && $this->nmgp_cmp_readonly['fc_valor_irbpnr'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_valor_irbpnr']);
       $sStyleReadLab_fc_valor_irbpnr = '';
       $sStyleReadInp_fc_valor_irbpnr = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_valor_irbpnr']) && $this->nmgp_cmp_hidden['fc_valor_irbpnr'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_valor_irbpnr" value="<?php echo $this->form_encode_input($fc_valor_irbpnr) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_valor_irbpnr_line" id="hidden_field_data_fc_valor_irbpnr" style="<?php echo $sStyleHidden_fc_valor_irbpnr; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_valor_irbpnr_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_valor_irbpnr_label" style=""><span id="id_label_fc_valor_irbpnr"><?php echo $this->nm_new_label['fc_valor_irbpnr']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_valor_irbpnr"]) &&  $this->nmgp_cmp_readonly["fc_valor_irbpnr"] == "on") { 

 ?>
<input type="hidden" name="fc_valor_irbpnr" value="<?php echo $this->form_encode_input($fc_valor_irbpnr) . "\">" . $fc_valor_irbpnr . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_valor_irbpnr" class="sc-ui-readonly-fc_valor_irbpnr css_fc_valor_irbpnr_line" style="<?php echo $sStyleReadLab_fc_valor_irbpnr; ?>"><?php echo $this->form_format_readonly("fc_valor_irbpnr", $this->form_encode_input($this->fc_valor_irbpnr)); ?></span><span id="id_read_off_fc_valor_irbpnr" class="css_read_off_fc_valor_irbpnr<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_valor_irbpnr; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_valor_irbpnr_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_valor_irbpnr" type=text name="fc_valor_irbpnr" value="<?php echo $this->form_encode_input($fc_valor_irbpnr) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_valor_irbpnr']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_valor_irbpnr']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_valor_irbpnr']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_valor_irbpnr_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_valor_irbpnr_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_propina']))
    {
        $this->nm_new_label['fc_propina'] = "" . $this->Ini->Nm_lang['lang_propina'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_propina = $this->fc_propina;
   $sStyleHidden_fc_propina = '';
   if (isset($this->nmgp_cmp_hidden['fc_propina']) && $this->nmgp_cmp_hidden['fc_propina'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_propina']);
       $sStyleHidden_fc_propina = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_propina = 'display: none;';
   $sStyleReadInp_fc_propina = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_propina']) && $this->nmgp_cmp_readonly['fc_propina'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_propina']);
       $sStyleReadLab_fc_propina = '';
       $sStyleReadInp_fc_propina = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_propina']) && $this->nmgp_cmp_hidden['fc_propina'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_propina" value="<?php echo $this->form_encode_input($fc_propina) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_propina_line" id="hidden_field_data_fc_propina" style="<?php echo $sStyleHidden_fc_propina; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_propina_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_propina_label" style=""><span id="id_label_fc_propina"><?php echo $this->nm_new_label['fc_propina']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_propina"]) &&  $this->nmgp_cmp_readonly["fc_propina"] == "on") { 

 ?>
<input type="hidden" name="fc_propina" value="<?php echo $this->form_encode_input($fc_propina) . "\">" . $fc_propina . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_propina" class="sc-ui-readonly-fc_propina css_fc_propina_line" style="<?php echo $sStyleReadLab_fc_propina; ?>"><?php echo $this->form_format_readonly("fc_propina", $this->form_encode_input($this->fc_propina)); ?></span><span id="id_read_off_fc_propina" class="css_read_off_fc_propina<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_propina; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_propina_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_propina" type=text name="fc_propina" value="<?php echo $this->form_encode_input($fc_propina) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_propina']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_propina']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_propina']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_propina_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_propina_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['fc_total']))
    {
        $this->nm_new_label['fc_total'] = "" . $this->Ini->Nm_lang['lang_total_pagar'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $fc_total = $this->fc_total;
   $sStyleHidden_fc_total = '';
   if (isset($this->nmgp_cmp_hidden['fc_total']) && $this->nmgp_cmp_hidden['fc_total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['fc_total']);
       $sStyleHidden_fc_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_fc_total = 'display: none;';
   $sStyleReadInp_fc_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['fc_total']) && $this->nmgp_cmp_readonly['fc_total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['fc_total']);
       $sStyleReadLab_fc_total = '';
       $sStyleReadInp_fc_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['fc_total']) && $this->nmgp_cmp_hidden['fc_total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="fc_total" value="<?php echo $this->form_encode_input($fc_total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_fc_total_line" id="hidden_field_data_fc_total" style="<?php echo $sStyleHidden_fc_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_fc_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_fc_total_label" style=""><span id="id_label_fc_total"><?php echo $this->nm_new_label['fc_total']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["fc_total"]) &&  $this->nmgp_cmp_readonly["fc_total"] == "on") { 

 ?>
<input type="hidden" name="fc_total" value="<?php echo $this->form_encode_input($fc_total) . "\">" . $fc_total . ""; ?>
<?php } else { ?>
<span id="id_read_on_fc_total" class="sc-ui-readonly-fc_total css_fc_total_line" style="<?php echo $sStyleReadLab_fc_total; ?>"><?php echo $this->form_format_readonly("fc_total", $this->form_encode_input($this->fc_total)); ?></span><span id="id_read_off_fc_total" class="css_read_off_fc_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_fc_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_fc_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_fc_total" type=text name="fc_total" value="<?php echo $this->form_encode_input($fc_total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['fc_total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['fc_total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['fc_total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ ', alignment: 'left'}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_fc_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_fc_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_fc_total_dumb = ('' == $sStyleHidden_fc_total) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_fc_total_dumb" style="<?php echo $sStyleHidden_fc_total_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_7"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_forma_pago'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['forma_pago']))
    {
        $this->nm_new_label['forma_pago'] = "forma_pago";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $forma_pago = $this->forma_pago;
   $sStyleHidden_forma_pago = '';
   if (isset($this->nmgp_cmp_hidden['forma_pago']) && $this->nmgp_cmp_hidden['forma_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['forma_pago']);
       $sStyleHidden_forma_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_forma_pago = 'display: none;';
   $sStyleReadInp_forma_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['forma_pago']) && $this->nmgp_cmp_readonly['forma_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['forma_pago']);
       $sStyleReadLab_forma_pago = '';
       $sStyleReadInp_forma_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['forma_pago']) && $this->nmgp_cmp_hidden['forma_pago'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="forma_pago" value="<?php echo $this->form_encode_input($forma_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_forma_pago_line" id="hidden_field_data_forma_pago" style="<?php echo $sStyleHidden_forma_pago; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_forma_pago_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_qtd_reg'] = '';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['embutida_parms'] = "var_factura*scin" . $this->nmgp_dados_form['fc_id'] . "*scoutNM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['foreign_key']['fp_factura'] = $this->nmgp_dados_form['fc_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['where_filter'] = "fp_factura = " . $this->nmgp_dados_form['fc_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['where_detal']  = "fp_factura = " . $this->nmgp_dados_form['fc_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_factura_compra_mob']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_del_factura_compra_mob_empty.htm' : $this->Ini->link_form_del_forma_pago_factura_compra_mob_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=200';
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra_mob'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init'] ]['form_del_forma_pago_factura_compra'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_forma_pago']) && 'nmsc_iframe_liga_form_del_forma_pago_factura_compra_mob' != $this->Ini->sc_lig_target['C_@scinf_forma_pago'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_forma_pago'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['form_del_forma_pago_factura_compra_mob_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_forma_pago'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_del_forma_pago_factura_compra_mob"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="200" width="100%" name="nmsc_iframe_liga_form_del_forma_pago_factura_compra_mob"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_forma_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_forma_pago_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-20';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-21';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-22';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_7";
        echo "<img id=\"NM_sep_7\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Nuevo'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['nuevo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['nuevo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['nuevo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['nuevo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['nuevo'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "nuevo", "scBtnFn_Nuevo()", "scBtnFn_Nuevo()", "sc_Nuevo_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-23';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['Anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_Anular()", "scBtnFn_Anular()", "sc_Anular_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-24';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_8";
        echo "<img id=\"NM_sep_8\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['enviar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['enviar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['enviar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['enviar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['enviar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['enviar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "enviar", "scBtnFn_enviar()", "scBtnFn_enviar()", "sc_enviar_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['retencion'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['retencion']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['retencion']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['retencion']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['retencion']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['retencion'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "retencion", "scBtnFn_retencion()", "scBtnFn_retencion()", "sc_retencion_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['ride'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['ride']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_disabled']['ride']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['ride']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['ride']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['btn_label']['ride'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "ride", "scBtnFn_ride()", "scBtnFn_ride()", "sc_ride_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none;" class='scDebugWindow'><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = 'hidden';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
$(window).bind("load", function() {
<?php
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.visibility = '';";
      }
  }
?>
});
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_del_factura_compra_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_del_factura_compra_mob");
 parent.scAjaxDetailHeight("form_del_factura_compra_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_del_factura_compra_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_del_factura_compra_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if (isset($this->scFormFocusErrorName) && '' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['sc_modal'])
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
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_b").length && $("#sc_b_hlp_b").is(":visible")) {
		    if ($("#sc_b_hlp_b").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-1").length && $("#sc_b_sai_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-7").length && $("#sc_b_sai_b.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-8").length && $("#sc_b_sai_b.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-9").length && $("#sc_b_sai_b.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-13").length && $("#sc_b_sai_t.sc-unique-btn-13").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-14").length && $("#sc_b_sai_t.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-15").length && $("#sc_b_sai_t.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-19").length && $("#sc_b_sai_b.sc-unique-btn-19").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-20").length && $("#sc_b_sai_b.sc-unique-btn-20").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-20").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_b.sc-unique-btn-21").length && $("#sc_b_sai_b.sc-unique-btn-21").is(":visible")) {
		    if ($("#sc_b_sai_b.sc-unique-btn-21").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-4").length && $("#sys_separator.sc-unique-btn-4").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-6").length && $("#sys_separator.sc-unique-btn-6").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-10").length && $("#sys_separator.sc-unique-btn-10").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-12").length && $("#sys_separator.sc-unique-btn-12").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-16").length && $("#sys_separator.sc-unique-btn-16").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-18").length && $("#sys_separator.sc-unique-btn-18").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-22").length && $("#sys_separator.sc-unique-btn-22").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-22").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-24").length && $("#sys_separator.sc-unique-btn-24").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-24").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_Nuevo() {
		if ($("#sc_Nuevo_top").length && $("#sc_Nuevo_top").is(":visible")) {
		    if ($("#sc_Nuevo_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Nuevo_bot").length && $("#sc_Nuevo_bot").is(":visible")) {
		    if ($("#sc_Nuevo_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Nuevo_top").length && $("#sc_Nuevo_top").is(":visible")) {
		    if ($("#sc_Nuevo_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Nuevo_bot").length && $("#sc_Nuevo_bot").is(":visible")) {
		    if ($("#sc_Nuevo_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Nuevo()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-11").length && $("#sc_b_upd_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-17").length && $("#sc_b_upd_t.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_upd_b.sc-unique-btn-23").length && $("#sc_b_upd_b.sc-unique-btn-23").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-23").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_Anular() {
		if ($("#sc_Anular_top").length && $("#sc_Anular_top").is(":visible")) {
		    if ($("#sc_Anular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Anular_bot").length && $("#sc_Anular_bot").is(":visible")) {
		    if ($("#sc_Anular_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Anular_top").length && $("#sc_Anular_top").is(":visible")) {
		    if ($("#sc_Anular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_Anular_bot").length && $("#sc_Anular_bot").is(":visible")) {
		    if ($("#sc_Anular_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_Anular()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_enviar() {
		if ($("#sc_enviar_top").length && $("#sc_enviar_top").is(":visible")) {
		    if ($("#sc_enviar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_enviar_bot").length && $("#sc_enviar_bot").is(":visible")) {
		    if ($("#sc_enviar_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_enviar_top").length && $("#sc_enviar_top").is(":visible")) {
		    if ($("#sc_enviar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_enviar_bot").length && $("#sc_enviar_bot").is(":visible")) {
		    if ($("#sc_enviar_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_enviar()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_retencion() {
		if ($("#sc_retencion_top").length && $("#sc_retencion_top").is(":visible")) {
		    if ($("#sc_retencion_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_retencion_bot").length && $("#sc_retencion_bot").is(":visible")) {
		    if ($("#sc_retencion_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_retencion_top").length && $("#sc_retencion_top").is(":visible")) {
		    if ($("#sc_retencion_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_retencion_bot").length && $("#sc_retencion_bot").is(":visible")) {
		    if ($("#sc_retencion_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_retencion()
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_ride() {
		if ($("#sc_ride_top").length && $("#sc_ride_top").is(":visible")) {
		    if ($("#sc_ride_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_ride_bot").length && $("#sc_ride_bot").is(":visible")) {
		    if ($("#sc_ride_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_ride_top").length && $("#sc_ride_top").is(":visible")) {
		    if ($("#sc_ride_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			toggleToolbar(event, true); return;
		}
		if ($("#sc_ride_bot").length && $("#sc_ride_bot").is(":visible")) {
		    if ($("#sc_ride_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_ride()
			toggleToolbar(event, true); return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_del_factura_compra_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
