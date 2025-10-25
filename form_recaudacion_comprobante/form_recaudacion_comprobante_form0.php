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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " del_cliente"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " del_cliente"); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['embutida_pdf']))
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
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_recaudacion_comprobante/form_recaudacion_comprobante_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_recaudacion_comprobante_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['last'] : 'off'); ?>";
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
     if (F_name == "cl_identificacion")
     {
        $('input[name="cl_identificacion"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cl_identificacion"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cl_identificacion"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cl_nombre")
     {
        $('input[name="cl_nombre"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cl_nombre"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cl_nombre"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cl_direccion")
     {
        $('input[name="cl_direccion"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cl_direccion"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cl_direccion"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cl_telefono")
     {
        $('input[name="cl_telefono"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cl_telefono"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cl_telefono"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cl_email")
     {
        $('input[name="cl_email"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cl_email"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cl_email"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "tesoreria")
     {
        $('select[name="tesoreria"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="tesoreria"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="tesoreria"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "total")
     {
        $('input[name="total"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="total"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="total"]').removeClass("scFormInputDisabled");
        }
     }
  }
 } // nm_field_disabled
<?php

include_once('form_recaudacion_comprobante_jquery.php');

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
 $(function() {

  scJQElementsAdd('');

  scJQGeneralAdd();

  $("#hidden_bloco_1").each(function() {
   $(this.rows[0]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
  });

  sc_form_onload();

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
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
    "hidden_bloco_1": true
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

  for (var i = 1; i < block.rows.length; i++) {
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
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
 include_once("form_recaudacion_comprobante_js0.php");
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
               action="./" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['insert_validation']; ?>">
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
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_recaudacion_comprobante'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_recaudacion_comprobante'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['actualizar_cliente'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['actualizar_cliente']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['actualizar_cliente']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['actualizar_cliente']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['actualizar_cliente']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['actualizar_cliente'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "actualizar_cliente", "scBtnFn_actualizar_cliente()", "scBtnFn_actualizar_cliente()", "sc_actualizar_cliente_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['facturar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['facturar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['facturar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['facturar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['facturar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['facturar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "facturar", "scBtnFn_facturar()", "scBtnFn_facturar()", "sc_facturar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['seleccionar_todo'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['seleccionar_todo']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_disabled']['seleccionar_todo']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['seleccionar_todo']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['seleccionar_todo']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['btn_label']['seleccionar_todo'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "seleccionar_todo", "scBtnFn_seleccionar_todo()", "scBtnFn_seleccionar_todo()", "sc_seleccionar_todo_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
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
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mensaje']))
    {
        $this->nm_new_label['mensaje'] = "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mensaje = $this->mensaje;
   $sStyleHidden_mensaje = '';
   if (isset($this->nmgp_cmp_hidden['mensaje']) && $this->nmgp_cmp_hidden['mensaje'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mensaje']);
       $sStyleHidden_mensaje = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mensaje = 'display: none;';
   $sStyleReadInp_mensaje = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mensaje']) && $this->nmgp_cmp_readonly['mensaje'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mensaje']);
       $sStyleReadLab_mensaje = '';
       $sStyleReadInp_mensaje = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mensaje']) && $this->nmgp_cmp_hidden['mensaje'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mensaje" value="<?php echo $this->form_encode_input($mensaje) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mensaje_line" id="hidden_field_data_mensaje" style="<?php echo $sStyleHidden_mensaje; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mensaje_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="mensaje" value="<?php echo $this->form_encode_input($mensaje); ?>"><span id="id_ajax_label_mensaje"><?php echo nl2br($mensaje); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mensaje_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mensaje_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_mensaje_dumb = ('' == $sStyleHidden_mensaje) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_mensaje_dumb" style="<?php echo $sStyleHidden_mensaje_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_datos_cliente'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cl_identificacion']))
    {
        $this->nm_new_label['cl_identificacion'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_identificacion = $this->cl_identificacion;
   $sStyleHidden_cl_identificacion = '';
   if (isset($this->nmgp_cmp_hidden['cl_identificacion']) && $this->nmgp_cmp_hidden['cl_identificacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_identificacion']);
       $sStyleHidden_cl_identificacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_identificacion = 'display: none;';
   $sStyleReadInp_cl_identificacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_identificacion']) && $this->nmgp_cmp_readonly['cl_identificacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_identificacion']);
       $sStyleReadLab_cl_identificacion = '';
       $sStyleReadInp_cl_identificacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_identificacion']) && $this->nmgp_cmp_hidden['cl_identificacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cl_identificacion" value="<?php echo $this->form_encode_input($cl_identificacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cl_identificacion_label" id="hidden_field_label_cl_identificacion" style="<?php echo $sStyleHidden_cl_identificacion; ?>"><span id="id_label_cl_identificacion"><?php echo $this->nm_new_label['cl_identificacion']; ?></span></TD>
    <TD class="scFormDataOdd css_cl_identificacion_line" id="hidden_field_data_cl_identificacion" style="<?php echo $sStyleHidden_cl_identificacion; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_identificacion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_identificacion"]) &&  $this->nmgp_cmp_readonly["cl_identificacion"] == "on") { 

 ?>
<input type="hidden" name="cl_identificacion" value="<?php echo $this->form_encode_input($cl_identificacion) . "\">" . $cl_identificacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_identificacion" class="sc-ui-readonly-cl_identificacion css_cl_identificacion_line" style="<?php echo $sStyleReadLab_cl_identificacion; ?>"><?php echo $this->form_format_readonly("cl_identificacion", $this->form_encode_input($this->cl_identificacion)); ?></span><span id="id_read_off_cl_identificacion" class="css_read_off_cl_identificacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_identificacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_identificacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_identificacion" type=text name="cl_identificacion" value="<?php echo $this->form_encode_input($cl_identificacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_identificacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_identificacion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['cl_nombre']))
    {
        $this->nm_new_label['cl_nombre'] = "" . $this->Ini->Nm_lang['lang_nombre'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_nombre = $this->cl_nombre;
   $sStyleHidden_cl_nombre = '';
   if (isset($this->nmgp_cmp_hidden['cl_nombre']) && $this->nmgp_cmp_hidden['cl_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_nombre']);
       $sStyleHidden_cl_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_nombre = 'display: none;';
   $sStyleReadInp_cl_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_nombre']) && $this->nmgp_cmp_readonly['cl_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_nombre']);
       $sStyleReadLab_cl_nombre = '';
       $sStyleReadInp_cl_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_nombre']) && $this->nmgp_cmp_hidden['cl_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cl_nombre" value="<?php echo $this->form_encode_input($cl_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cl_nombre_label" id="hidden_field_label_cl_nombre" style="<?php echo $sStyleHidden_cl_nombre; ?>"><span id="id_label_cl_nombre"><?php echo $this->nm_new_label['cl_nombre']; ?></span></TD>
    <TD class="scFormDataOdd css_cl_nombre_line" id="hidden_field_data_cl_nombre" style="<?php echo $sStyleHidden_cl_nombre; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_nombre_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_nombre"]) &&  $this->nmgp_cmp_readonly["cl_nombre"] == "on") { 

 ?>
<input type="hidden" name="cl_nombre" value="<?php echo $this->form_encode_input($cl_nombre) . "\">" . $cl_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_nombre" class="sc-ui-readonly-cl_nombre css_cl_nombre_line" style="<?php echo $sStyleReadLab_cl_nombre; ?>"><?php echo $this->form_format_readonly("cl_nombre", $this->form_encode_input($this->cl_nombre)); ?></span><span id="id_read_off_cl_nombre" class="css_read_off_cl_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_nombre" type=text name="cl_nombre" value="<?php echo $this->form_encode_input($cl_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_nombre_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cl_direccion']))
    {
        $this->nm_new_label['cl_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_direccion = $this->cl_direccion;
   $sStyleHidden_cl_direccion = '';
   if (isset($this->nmgp_cmp_hidden['cl_direccion']) && $this->nmgp_cmp_hidden['cl_direccion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_direccion']);
       $sStyleHidden_cl_direccion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_direccion = 'display: none;';
   $sStyleReadInp_cl_direccion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_direccion']) && $this->nmgp_cmp_readonly['cl_direccion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_direccion']);
       $sStyleReadLab_cl_direccion = '';
       $sStyleReadInp_cl_direccion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_direccion']) && $this->nmgp_cmp_hidden['cl_direccion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cl_direccion" value="<?php echo $this->form_encode_input($cl_direccion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cl_direccion_label" id="hidden_field_label_cl_direccion" style="<?php echo $sStyleHidden_cl_direccion; ?>"><span id="id_label_cl_direccion"><?php echo $this->nm_new_label['cl_direccion']; ?></span></TD>
    <TD class="scFormDataOdd css_cl_direccion_line" id="hidden_field_data_cl_direccion" style="<?php echo $sStyleHidden_cl_direccion; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_direccion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_direccion"]) &&  $this->nmgp_cmp_readonly["cl_direccion"] == "on") { 

 ?>
<input type="hidden" name="cl_direccion" value="<?php echo $this->form_encode_input($cl_direccion) . "\">" . $cl_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_direccion" class="sc-ui-readonly-cl_direccion css_cl_direccion_line" style="<?php echo $sStyleReadLab_cl_direccion; ?>"><?php echo $this->form_format_readonly("cl_direccion", $this->form_encode_input($this->cl_direccion)); ?></span><span id="id_read_off_cl_direccion" class="css_read_off_cl_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_direccion" type=text name="cl_direccion" value="<?php echo $this->form_encode_input($cl_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_direccion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['cl_telefono']))
    {
        $this->nm_new_label['cl_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_telefono = $this->cl_telefono;
   $sStyleHidden_cl_telefono = '';
   if (isset($this->nmgp_cmp_hidden['cl_telefono']) && $this->nmgp_cmp_hidden['cl_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_telefono']);
       $sStyleHidden_cl_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_telefono = 'display: none;';
   $sStyleReadInp_cl_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_telefono']) && $this->nmgp_cmp_readonly['cl_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_telefono']);
       $sStyleReadLab_cl_telefono = '';
       $sStyleReadInp_cl_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_telefono']) && $this->nmgp_cmp_hidden['cl_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cl_telefono" value="<?php echo $this->form_encode_input($cl_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cl_telefono_label" id="hidden_field_label_cl_telefono" style="<?php echo $sStyleHidden_cl_telefono; ?>"><span id="id_label_cl_telefono"><?php echo $this->nm_new_label['cl_telefono']; ?></span></TD>
    <TD class="scFormDataOdd css_cl_telefono_line" id="hidden_field_data_cl_telefono" style="<?php echo $sStyleHidden_cl_telefono; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_telefono_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_telefono"]) &&  $this->nmgp_cmp_readonly["cl_telefono"] == "on") { 

 ?>
<input type="hidden" name="cl_telefono" value="<?php echo $this->form_encode_input($cl_telefono) . "\">" . $cl_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_telefono" class="sc-ui-readonly-cl_telefono css_cl_telefono_line" style="<?php echo $sStyleReadLab_cl_telefono; ?>"><?php echo $this->form_format_readonly("cl_telefono", $this->form_encode_input($this->cl_telefono)); ?></span><span id="id_read_off_cl_telefono" class="css_read_off_cl_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_telefono" type=text name="cl_telefono" value="<?php echo $this->form_encode_input($cl_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_telefono_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cl_email']))
    {
        $this->nm_new_label['cl_email'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_email = $this->cl_email;
   $sStyleHidden_cl_email = '';
   if (isset($this->nmgp_cmp_hidden['cl_email']) && $this->nmgp_cmp_hidden['cl_email'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_email']);
       $sStyleHidden_cl_email = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_email = 'display: none;';
   $sStyleReadInp_cl_email = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_email']) && $this->nmgp_cmp_readonly['cl_email'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_email']);
       $sStyleReadLab_cl_email = '';
       $sStyleReadInp_cl_email = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_email']) && $this->nmgp_cmp_hidden['cl_email'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cl_email" value="<?php echo $this->form_encode_input($cl_email) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_cl_email_label" id="hidden_field_label_cl_email" style="<?php echo $sStyleHidden_cl_email; ?>"><span id="id_label_cl_email"><?php echo $this->nm_new_label['cl_email']; ?></span></TD>
    <TD class="scFormDataOdd css_cl_email_line" id="hidden_field_data_cl_email" style="<?php echo $sStyleHidden_cl_email; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_email_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_email"]) &&  $this->nmgp_cmp_readonly["cl_email"] == "on") { 

 ?>
<input type="hidden" name="cl_email" value="<?php echo $this->form_encode_input($cl_email) . "\">" . $cl_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_email" class="sc-ui-readonly-cl_email css_cl_email_line" style="<?php echo $sStyleReadLab_cl_email; ?>"><?php echo $this->form_format_readonly("cl_email", $this->form_encode_input($this->cl_email)); ?></span><span id="id_read_off_cl_email" class="css_read_off_cl_email<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_email_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_email" type=text name="cl_email" value="<?php echo $this->form_encode_input($cl_email) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_email_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>
<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="70%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="3" height="20" class="scFormBlock">
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
   if (!isset($this->nm_new_label['tesoreria']))
   {
       $this->nm_new_label['tesoreria'] = "" . $this->Ini->Nm_lang['lang_tesoreria'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $tesoreria = $this->tesoreria;
   $sStyleHidden_tesoreria = '';
   if (isset($this->nmgp_cmp_hidden['tesoreria']) && $this->nmgp_cmp_hidden['tesoreria'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['tesoreria']);
       $sStyleHidden_tesoreria = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_tesoreria = 'display: none;';
   $sStyleReadInp_tesoreria = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['tesoreria']) && $this->nmgp_cmp_readonly['tesoreria'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['tesoreria']);
       $sStyleReadLab_tesoreria = '';
       $sStyleReadInp_tesoreria = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['tesoreria']) && $this->nmgp_cmp_hidden['tesoreria'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="tesoreria" value="<?php echo $this->form_encode_input($this->tesoreria) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_tesoreria_line" id="hidden_field_data_tesoreria" style="<?php echo $sStyleHidden_tesoreria; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_tesoreria_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_tesoreria_label" style=""><span id="id_label_tesoreria"><?php echo $this->nm_new_label['tesoreria']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["tesoreria"]) &&  $this->nmgp_cmp_readonly["tesoreria"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria'] = array(); 
    }

   $old_value_saldo_por_pagar = $this->saldo_por_pagar;
   $old_value_valor_pago = $this->valor_pago;
   $old_value_total = $this->total;
   $this->nm_tira_formatacao();


   $unformatted_value_saldo_por_pagar = $this->saldo_por_pagar;
   $unformatted_value_valor_pago = $this->valor_pago;
   $unformatted_value_total = $this->total;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  WHERE fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and fp_compra_venta='NC' ORDER BY fp_descripcion";

   $this->saldo_por_pagar = $old_value_saldo_por_pagar;
   $this->valor_pago = $old_value_valor_pago;
   $this->total = $old_value_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_tesoreria'][] = $rs->fields[0];
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
   $tesoreria_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tesoreria_1))
          {
              foreach ($this->tesoreria_1 as $tmp_tesoreria)
              {
                  if (trim($tmp_tesoreria) === trim($cadaselect[1])) {$tesoreria_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->tesoreria) && trim($this->tesoreria) === trim($cadaselect[1])) {$tesoreria_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="tesoreria" value="<?php echo $this->form_encode_input($tesoreria) . "\">" . $tesoreria_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_tesoreria();
   $x = 0 ; 
   $tesoreria_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->tesoreria_1))
          {
              foreach ($this->tesoreria_1 as $tmp_tesoreria)
              {
                  if (trim($tmp_tesoreria) === trim($cadaselect[1])) {$tesoreria_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->tesoreria) && trim($this->tesoreria) === trim($cadaselect[1])) { $tesoreria_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($tesoreria_look))
          {
              $tesoreria_look = $this->tesoreria;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_tesoreria\" class=\"css_tesoreria_line\" style=\"" .  $sStyleReadLab_tesoreria . "\">" . $this->form_format_readonly("tesoreria", $this->form_encode_input($tesoreria_look)) . "</span><span id=\"id_read_off_tesoreria\" class=\"css_read_off_tesoreria" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_tesoreria . "\">";
   echo " <span id=\"idAjaxSelect_tesoreria\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_tesoreria_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_tesoreria\" name=\"tesoreria\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->tesoreria) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->tesoreria)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_tesoreria_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_tesoreria_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['saldo_por_pagar']))
    {
        $this->nm_new_label['saldo_por_pagar'] = "" . $this->Ini->Nm_lang['lang_saldo_por_pagar'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $saldo_por_pagar = $this->saldo_por_pagar;
   $sStyleHidden_saldo_por_pagar = '';
   if (isset($this->nmgp_cmp_hidden['saldo_por_pagar']) && $this->nmgp_cmp_hidden['saldo_por_pagar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['saldo_por_pagar']);
       $sStyleHidden_saldo_por_pagar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_saldo_por_pagar = 'display: none;';
   $sStyleReadInp_saldo_por_pagar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['saldo_por_pagar']) && $this->nmgp_cmp_readonly['saldo_por_pagar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['saldo_por_pagar']);
       $sStyleReadLab_saldo_por_pagar = '';
       $sStyleReadInp_saldo_por_pagar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['saldo_por_pagar']) && $this->nmgp_cmp_hidden['saldo_por_pagar'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="saldo_por_pagar" value="<?php echo $this->form_encode_input($saldo_por_pagar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_saldo_por_pagar_line" id="hidden_field_data_saldo_por_pagar" style="<?php echo $sStyleHidden_saldo_por_pagar; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_saldo_por_pagar_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_saldo_por_pagar_label" style=""><span id="id_label_saldo_por_pagar"><?php echo $this->nm_new_label['saldo_por_pagar']; ?></span></span><br><input type="hidden" name="saldo_por_pagar" value="<?php echo $this->form_encode_input($saldo_por_pagar); ?>"><span id="id_ajax_label_saldo_por_pagar"><?php echo nl2br($saldo_por_pagar); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_saldo_por_pagar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_saldo_por_pagar_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['usar_compensacion']))
   {
       $this->nm_new_label['usar_compensacion'] = "Usar Comprensación";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $usar_compensacion = $this->usar_compensacion;
   $sStyleHidden_usar_compensacion = '';
   if (isset($this->nmgp_cmp_hidden['usar_compensacion']) && $this->nmgp_cmp_hidden['usar_compensacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['usar_compensacion']);
       $sStyleHidden_usar_compensacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_usar_compensacion = 'display: none;';
   $sStyleReadInp_usar_compensacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['usar_compensacion']) && $this->nmgp_cmp_readonly['usar_compensacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['usar_compensacion']);
       $sStyleReadLab_usar_compensacion = '';
       $sStyleReadInp_usar_compensacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['usar_compensacion']) && $this->nmgp_cmp_hidden['usar_compensacion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="usar_compensacion" value="<?php echo $this->form_encode_input($this->usar_compensacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->usar_compensacion_1 = explode(";", trim($this->usar_compensacion));
  } 
  else
  {
      if (empty($this->usar_compensacion))
      {
          $this->usar_compensacion_1= array(); 
          $this->usar_compensacion= "N";
      } 
      else
      {
          $this->usar_compensacion_1= $this->usar_compensacion; 
          $this->usar_compensacion= ""; 
          foreach ($this->usar_compensacion_1 as $cada_usar_compensacion)
          {
             if (!empty($usar_compensacion))
             {
                 $this->usar_compensacion.= ";"; 
             } 
             $this->usar_compensacion.= $cada_usar_compensacion; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_usar_compensacion_line" id="hidden_field_data_usar_compensacion" style="<?php echo $sStyleHidden_usar_compensacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_usar_compensacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_usar_compensacion_label" style=""><span id="id_label_usar_compensacion"><?php echo $this->nm_new_label['usar_compensacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["usar_compensacion"]) &&  $this->nmgp_cmp_readonly["usar_compensacion"] == "on") { 

$usar_compensacion_look = "";
 if ($this->usar_compensacion == "S") { $usar_compensacion_look .= "" ;} 
 if (empty($usar_compensacion_look)) { $usar_compensacion_look = $this->usar_compensacion; }
?>
<input type="hidden" name="usar_compensacion" value="<?php echo $this->form_encode_input($usar_compensacion) . "\">" . $usar_compensacion_look . ""; ?>
<?php } else { ?>

<?php

$usar_compensacion_look = "";
 if ($this->usar_compensacion == "S") { $usar_compensacion_look .= "" ;} 
 if (empty($usar_compensacion_look)) { $usar_compensacion_look = $this->usar_compensacion; }
?>
<span id="id_read_on_usar_compensacion" class="css_usar_compensacion_line" style="<?php echo $sStyleReadLab_usar_compensacion; ?>"><?php echo $this->form_format_readonly("usar_compensacion", $this->form_encode_input($usar_compensacion_look)); ?></span><span id="id_read_off_usar_compensacion" class="css_read_off_usar_compensacion css_usar_compensacion_line" style="<?php echo $sStyleReadInp_usar_compensacion; ?>"><?php echo "<div id=\"idAjaxCheckbox_usar_compensacion\" style=\"display: inline-block\" class=\"css_usar_compensacion_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_usar_compensacion_line"><?php $tempOptionId = "id-opt-usar_compensacion" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-usar_compensacion sc-ui-checkbox-usar_compensacion" name="usar_compensacion[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_usar_compensacion'][] = 'S'; ?>
<?php  if (in_array("S", $this->usar_compensacion_1))  { echo " checked" ;} ?> onClick="do_ajax_form_recaudacion_comprobante_event_usar_compensacion_onclick();" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_usar_compensacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_usar_compensacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php $sStyleHidden_tesoreria_dumb = ('' == $sStyleHidden_tesoreria) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_tesoreria_dumb" style="<?php echo $sStyleHidden_tesoreria_dumb; ?>"></TD>
<?php $sStyleHidden_saldo_por_pagar_dumb = ('' == $sStyleHidden_saldo_por_pagar) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_saldo_por_pagar_dumb" style="<?php echo $sStyleHidden_saldo_por_pagar_dumb; ?>"></TD>
<?php $sStyleHidden_usar_compensacion_dumb = ('' == $sStyleHidden_usar_compensacion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_usar_compensacion_dumb" style="<?php echo $sStyleHidden_usar_compensacion_dumb; ?>"></TD>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['forma_pago']))
   {
       $this->nm_new_label['forma_pago'] = "" . $this->Ini->Nm_lang['lang_forma_pago'] . "";
   }
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
<?php if (isset($this->nmgp_cmp_hidden['forma_pago']) && $this->nmgp_cmp_hidden['forma_pago'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="forma_pago" value="<?php echo $this->form_encode_input($this->forma_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_forma_pago_line" id="hidden_field_data_forma_pago" style="<?php echo $sStyleHidden_forma_pago; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_forma_pago_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_forma_pago_label" style=""><span id="id_label_forma_pago"><?php echo $this->nm_new_label['forma_pago']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["forma_pago"]) &&  $this->nmgp_cmp_readonly["forma_pago"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago'] = array(); 
    }

   $old_value_saldo_por_pagar = $this->saldo_por_pagar;
   $old_value_valor_pago = $this->valor_pago;
   $old_value_total = $this->total;
   $this->nm_tira_formatacao();


   $unformatted_value_saldo_por_pagar = $this->saldo_por_pagar;
   $unformatted_value_valor_pago = $this->valor_pago;
   $unformatted_value_total = $this->total;

   $nm_comando = "SELECT fp_id, fp_descripcion  FROM del_forma_pago  WHERE fp_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY fp_descripcion";

   $this->saldo_por_pagar = $old_value_saldo_por_pagar;
   $this->valor_pago = $old_value_valor_pago;
   $this->total = $old_value_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_forma_pago'][] = $rs->fields[0];
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
   $forma_pago_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->forma_pago_1))
          {
              foreach ($this->forma_pago_1 as $tmp_forma_pago)
              {
                  if (trim($tmp_forma_pago) === trim($cadaselect[1])) {$forma_pago_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->forma_pago) && trim($this->forma_pago) === trim($cadaselect[1])) {$forma_pago_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="forma_pago" value="<?php echo $this->form_encode_input($forma_pago) . "\">" . $forma_pago_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_forma_pago();
   $x = 0 ; 
   $forma_pago_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->forma_pago_1))
          {
              foreach ($this->forma_pago_1 as $tmp_forma_pago)
              {
                  if (trim($tmp_forma_pago) === trim($cadaselect[1])) {$forma_pago_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->forma_pago) && trim($this->forma_pago) === trim($cadaselect[1])) { $forma_pago_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($forma_pago_look))
          {
              $forma_pago_look = $this->forma_pago;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_forma_pago\" class=\"css_forma_pago_line\" style=\"" .  $sStyleReadLab_forma_pago . "\">" . $this->form_format_readonly("forma_pago", $this->form_encode_input($forma_pago_look)) . "</span><span id=\"id_read_off_forma_pago\" class=\"css_read_off_forma_pago" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_forma_pago . "\">";
   echo " <span id=\"idAjaxSelect_forma_pago\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_forma_pago_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_forma_pago\" name=\"forma_pago\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->forma_pago) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->forma_pago)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_forma_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_forma_pago_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['valor_pago']))
    {
        $this->nm_new_label['valor_pago'] = "" . $this->Ini->Nm_lang['lang_valor_pago'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $valor_pago = $this->valor_pago;
   $sStyleHidden_valor_pago = '';
   if (isset($this->nmgp_cmp_hidden['valor_pago']) && $this->nmgp_cmp_hidden['valor_pago'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['valor_pago']);
       $sStyleHidden_valor_pago = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_valor_pago = 'display: none;';
   $sStyleReadInp_valor_pago = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['valor_pago']) && $this->nmgp_cmp_readonly['valor_pago'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['valor_pago']);
       $sStyleReadLab_valor_pago = '';
       $sStyleReadInp_valor_pago = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['valor_pago']) && $this->nmgp_cmp_hidden['valor_pago'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="valor_pago" value="<?php echo $this->form_encode_input($valor_pago) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_valor_pago_line" id="hidden_field_data_valor_pago" style="<?php echo $sStyleHidden_valor_pago; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_valor_pago_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_valor_pago_label" style=""><span id="id_label_valor_pago"><?php echo $this->nm_new_label['valor_pago']; ?></span></span><br><input type="hidden" name="valor_pago" value="<?php echo $this->form_encode_input($valor_pago); ?>"><span id="id_ajax_label_valor_pago"><?php echo nl2br($valor_pago); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_valor_pago_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_valor_pago_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['documento']))
    {
        $this->nm_new_label['documento'] = "" . $this->Ini->Nm_lang['lang_documento'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $documento = $this->documento;
   $sStyleHidden_documento = '';
   if (isset($this->nmgp_cmp_hidden['documento']) && $this->nmgp_cmp_hidden['documento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['documento']);
       $sStyleHidden_documento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_documento = 'display: none;';
   $sStyleReadInp_documento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['documento']) && $this->nmgp_cmp_readonly['documento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['documento']);
       $sStyleReadLab_documento = '';
       $sStyleReadInp_documento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['documento']) && $this->nmgp_cmp_hidden['documento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="documento" value="<?php echo $this->form_encode_input($documento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_documento_line" id="hidden_field_data_documento" style="<?php echo $sStyleHidden_documento; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_documento_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_documento_label" style=""><span id="id_label_documento"><?php echo $this->nm_new_label['documento']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["documento"]) &&  $this->nmgp_cmp_readonly["documento"] == "on") { 

 ?>
<input type="hidden" name="documento" value="<?php echo $this->form_encode_input($documento) . "\">" . $documento . ""; ?>
<?php } else { ?>
<span id="id_read_on_documento" class="sc-ui-readonly-documento css_documento_line" style="<?php echo $sStyleReadLab_documento; ?>"><?php echo $this->form_format_readonly("documento", $this->form_encode_input($this->documento)); ?></span><span id="id_read_off_documento" class="css_read_off_documento<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_documento; ?>">
 <input class="sc-js-input scFormObjectOdd css_documento_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_documento" type=text name="documento" value="<?php echo $this->form_encode_input($documento) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_documento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_documento_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_forma_pago_dumb = ('' == $sStyleHidden_forma_pago) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_forma_pago_dumb" style="<?php echo $sStyleHidden_forma_pago_dumb; ?>"></TD>
<?php $sStyleHidden_valor_pago_dumb = ('' == $sStyleHidden_valor_pago) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_valor_pago_dumb" style="<?php echo $sStyleHidden_valor_pago_dumb; ?>"></TD>
<?php $sStyleHidden_documento_dumb = ('' == $sStyleHidden_documento) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_documento_dumb" style="<?php echo $sStyleHidden_documento_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   <td width="30%" height="">
   <a name="bloco_3"></a>
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>


    <TD colspan="2" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['libretin']))
   {
       $this->nm_new_label['libretin'] = "" . $this->Ini->Nm_lang['lang_libretin'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $libretin = $this->libretin;
   $sStyleHidden_libretin = '';
   if (isset($this->nmgp_cmp_hidden['libretin']) && $this->nmgp_cmp_hidden['libretin'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['libretin']);
       $sStyleHidden_libretin = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_libretin = 'display: none;';
   $sStyleReadInp_libretin = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['libretin']) && $this->nmgp_cmp_readonly['libretin'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['libretin']);
       $sStyleReadLab_libretin = '';
       $sStyleReadInp_libretin = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['libretin']) && $this->nmgp_cmp_hidden['libretin'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="libretin" value="<?php echo $this->form_encode_input($this->libretin) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_libretin_line" id="hidden_field_data_libretin" style="<?php echo $sStyleHidden_libretin; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_libretin_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_libretin_label" style=""><span id="id_label_libretin"><?php echo $this->nm_new_label['libretin']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["libretin"]) &&  $this->nmgp_cmp_readonly["libretin"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin'] = array(); 
    }

   $old_value_saldo_por_pagar = $this->saldo_por_pagar;
   $old_value_valor_pago = $this->valor_pago;
   $old_value_total = $this->total;
   $this->nm_tira_formatacao();


   $unformatted_value_saldo_por_pagar = $this->saldo_por_pagar;
   $unformatted_value_valor_pago = $this->valor_pago;
   $unformatted_value_total = $this->total;

   $nm_comando = "SELECT lib_id,est_codigo||' - '||pen_serie FROM v_del_libretin where lib_estado='A' and est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and pem_usuario='" . $_SESSION['Igtech_SesionLogin'] . "' AND lib_tipo_comprobante='99'";

   $this->saldo_por_pagar = $old_value_saldo_por_pagar;
   $this->valor_pago = $old_value_valor_pago;
   $this->total = $old_value_total;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lookup_libretin'][] = $rs->fields[0];
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
   $libretin_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->libretin_1))
          {
              foreach ($this->libretin_1 as $tmp_libretin)
              {
                  if (trim($tmp_libretin) === trim($cadaselect[1])) {$libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->libretin) && trim($this->libretin) === trim($cadaselect[1])) {$libretin_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="libretin" value="<?php echo $this->form_encode_input($libretin) . "\">" . $libretin_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_libretin();
   $x = 0 ; 
   $libretin_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->libretin_1))
          {
              foreach ($this->libretin_1 as $tmp_libretin)
              {
                  if (trim($tmp_libretin) === trim($cadaselect[1])) {$libretin_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->libretin) && trim($this->libretin) === trim($cadaselect[1])) { $libretin_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($libretin_look))
          {
              $libretin_look = $this->libretin;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_libretin\" class=\"css_libretin_line\" style=\"" .  $sStyleReadLab_libretin . "\">" . $this->form_format_readonly("libretin", $this->form_encode_input($libretin_look)) . "</span><span id=\"id_read_off_libretin\" class=\"css_read_off_libretin" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_libretin . "\">";
   echo " <span id=\"idAjaxSelect_libretin\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_libretin_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_libretin\" name=\"libretin\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->libretin) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->libretin)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_libretin_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_libretin_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['total']))
    {
        $this->nm_new_label['total'] = "" . $this->Ini->Nm_lang['lang_total'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $total = $this->total;
   $sStyleHidden_total = '';
   if (isset($this->nmgp_cmp_hidden['total']) && $this->nmgp_cmp_hidden['total'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['total']);
       $sStyleHidden_total = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_total = 'display: none;';
   $sStyleReadInp_total = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['total']) && $this->nmgp_cmp_readonly['total'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['total']);
       $sStyleReadLab_total = '';
       $sStyleReadInp_total = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['total']) && $this->nmgp_cmp_hidden['total'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="total" value="<?php echo $this->form_encode_input($total) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_total_line" id="hidden_field_data_total" style="<?php echo $sStyleHidden_total; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_total_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_total_label" style=""><span id="id_label_total"><?php echo $this->nm_new_label['total']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["total"]) &&  $this->nmgp_cmp_readonly["total"] == "on") { 

 ?>
<input type="hidden" name="total" value="<?php echo $this->form_encode_input($total) . "\">" . $total . ""; ?>
<?php } else { ?>
<span id="id_read_on_total" class="sc-ui-readonly-total css_total_line" style="<?php echo $sStyleReadLab_total; ?>"><?php echo $this->form_format_readonly("total", $this->form_encode_input($this->total)); ?></span><span id="id_read_off_total" class="css_read_off_total<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_total; ?>">
 <input class="sc-js-input scFormObjectOdd css_total_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_total" type=text name="total" value="<?php echo $this->form_encode_input($total) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'decimal', maxLength: 20, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['total']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['total']['symbol_fmt']; ?>, manualDecimals: false, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['total']['format_neg'] ? "'suffix'" : "'prefix'") ?>, enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_total_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_total_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_libretin_dumb = ('' == $sStyleHidden_libretin) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_libretin_dumb" style="<?php echo $sStyleHidden_libretin_dumb; ?>"></TD>
<?php $sStyleHidden_total_dumb = ('' == $sStyleHidden_total) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_total_dumb" style="<?php echo $sStyleHidden_total_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operaciones']))
    {
        $this->nm_new_label['operaciones'] = "operaciones";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $operaciones = $this->operaciones;
   $sStyleHidden_operaciones = '';
   if (isset($this->nmgp_cmp_hidden['operaciones']) && $this->nmgp_cmp_hidden['operaciones'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['operaciones']);
       $sStyleHidden_operaciones = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_operaciones = 'display: none;';
   $sStyleReadInp_operaciones = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['operaciones']) && $this->nmgp_cmp_readonly['operaciones'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['operaciones']);
       $sStyleReadLab_operaciones = '';
       $sStyleReadInp_operaciones = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['operaciones']) && $this->nmgp_cmp_hidden['operaciones'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="operaciones" value="<?php echo $this->form_encode_input($operaciones) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_operaciones_line" id="hidden_field_data_operaciones" style="<?php echo $sStyleHidden_operaciones; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_operaciones_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_operaciones'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_operaciones'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_operaciones'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init'] ]['grid_fac_operacion_comp']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init'] ]['grid_fac_operacion_comp']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init'] ]['grid_fac_operacion_comp']['embutida_pai']        = "form_recaudacion_comprobante";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init'] ]['grid_fac_operacion_comp']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_fac_operacion_comp"]) && $this->Ini->sc_lig_md5["grid_fac_operacion_comp"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_recaudacion_comprobante@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_recaudacion_comprobante_empty.htm' : $this->Ini->link_grid_fac_operacion_comp_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
if (isset($this->Ini->sc_lig_target['C_@scinf_operaciones']) && 'nmsc_iframe_liga_grid_fac_operacion_comp' != $this->Ini->sc_lig_target['C_@scinf_operaciones'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_operaciones'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['grid_fac_operacion_comp_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_operaciones'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_fac_operacion_comp"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_fac_operacion_comp"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operaciones_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operaciones_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_recaudacion_comprobante");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_recaudacion_comprobante");
 parent.scAjaxDetailHeight("form_recaudacion_comprobante", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_recaudacion_comprobante", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_recaudacion_comprobante", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['sc_modal'])
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
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
		    if ($("#sc_b_hlp_t").hasClass("disabled")) {
		        return;
		    }
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-1").length && $("#sc_b_sai_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-2").length && $("#sc_b_sai_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_actualizar_cliente() {
		if ($("#sc_actualizar_cliente_top").length && $("#sc_actualizar_cliente_top").is(":visible")) {
		    if ($("#sc_actualizar_cliente_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_actualizar_cliente()
			 return;
		}
	}
	function scBtnFn_facturar() {
		if ($("#sc_facturar_top").length && $("#sc_facturar_top").is(":visible")) {
		    if ($("#sc_facturar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_facturar()
			 return;
		}
	}
	function scBtnFn_seleccionar_todo() {
		if ($("#sc_seleccionar_todo_top").length && $("#sc_seleccionar_todo_top").is(":visible")) {
		    if ($("#sc_seleccionar_todo_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_seleccionar_todo()
			 return;
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
<span id="sc-id-mobile-in"><?php echo $this->Ini->Nm_lang['lang_version_mobile']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_recaudacion_comprobante']['buttonStatus'] = $this->nmgp_botoes;
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
