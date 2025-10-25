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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_config_deudas'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_config_deudas'] . ""); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_jap_aportaciones/form_jap_aportaciones_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_jap_aportaciones_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['last'] : 'off'); ?>";
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
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
function navpage_atualiza(str_navpage)
{
    if (document.getElementById("sc_b_navpage_b")) document.getElementById("sc_b_navpage_b").innerHTML = str_navpage;
}
<?php

include_once('form_jap_aportaciones_jquery.php');

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

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

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
     if ($('#t').length>0) {
         scQuickSearchKeyUp('t', null);
     }
   });
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchKeyUp(sPos, e) {
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
       else
       {
           $('#SC_fast_search_submit_'+sPos).show();
       }
     }
   }
   function nm_gp_submit_qsearch(pos)
   {
        nm_move('fast_search', pos);
   }
   function nm_gp_open_qsearch_div(pos)
   {
        if (typeof nm_gp_open_qsearch_div_mobile == 'function') {
            return nm_gp_open_qsearch_div_mobile(pos);
        }
        if($('#SC_fast_search_dropdown_' + pos).hasClass('fa-caret-down'))
        {
            if(($('#quicksearchph_' + pos).offset().top+$('#id_qs_div_' + pos).height()+10) >= $(document).height())
            {
                $('#id_qs_div_' + pos).offset({top:($('#quicksearchph_' + pos).offset().top-($('#quicksearchph_' + pos).height()/2)-$('#id_qs_div_' + pos).height()-4)});
            }

            nm_gp_open_qsearch_div_store_temp(pos);
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-down').addClass('fa-caret-up');
        }
        else
        {
            $('#SC_fast_search_dropdown_' + pos).removeClass('fa-caret-up').addClass('fa-caret-down');
        }
        $('#id_qs_div_' + pos).toggle();
   }

   var tmp_qs_arr_fields = [], tmp_qs_arr_cond = "";
   function nm_gp_open_qsearch_div_store_temp(pos)
   {
        tmp_qs_arr_fields = [], tmp_qs_str_cond = "";

        if($('#fast_search_f0_' + pos).prop('type') == 'select-multiple')
        {
            tmp_qs_arr_fields = $('#fast_search_f0_' + pos).val();
        }
        else
        {
            tmp_qs_arr_fields.push($('#fast_search_f0_' + pos).val());
        }

        tmp_qs_str_cond = $('#cond_fast_search_f0_' + pos).val();
   }

   function nm_gp_cancel_qsearch_div_store_temp(pos)
   {
        $('#fast_search_f0_' + pos).val('');
        $("#fast_search_f0_" + pos + " option").prop('selected', false);
        for(it=0; it<tmp_qs_arr_fields.length; it++)
        {
            $("#fast_search_f0_" + pos + " option[value='"+ tmp_qs_arr_fields[it] +"']").prop('selected', true);
        }
        $("#fast_search_f0_" + pos).change();
        tmp_qs_arr_fields = [];

        $('#cond_fast_search_f0_' + pos).val(tmp_qs_str_cond);
        $('#cond_fast_search_f0_' + pos).change();
        tmp_qs_str_cond = "";

        nm_gp_open_qsearch_div(pos);
   } if($(".sc-ui-block-control").length) {
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['link_info']['remove_border']) {
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
 include_once("form_jap_aportaciones_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_jap_aportaciones'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_jap_aportaciones'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
<?php
$this->displayAppHeader();
?>
<tr><td>
<?php
$this->displayTopToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R")
{
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['fast_search'][2] : "";
          $stateSearchIconClose  = 'none';
          $stateSearchIconSearch = '';
          if(!empty($OPC_dat))
          {
              $stateSearchIconClose  = '';
              $stateSearchIconSearch = 'none';
          }
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input id='fast_search_f0_t' type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <select id='cond_fast_search_f0_t' class="scFormToolbarInput" style="vertical-align: middle;display:none;" name="nmgp_cond_fast_search_t" onChange="change_fast_t = 'CH';">
<?php 
          $OPC_sel = ("qp" == $OPC_arg) ? " selected" : "";
           echo "           <option value='qp'" . $OPC_sel . ">" . $this->Ini->Nm_lang['lang_srch_like'] . "</option>";
?> 
          </select>
          <span id="quicksearchph_t" class="scFormToolbarInput" style='display: inline-block; vertical-align: inherit'>
              <span>
                  <input type="text" id="SC_fast_search_t" class="scFormToolbarInputText" style="border-width: 0px;;" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">&nbsp;
                  <img style="display: <?php echo $stateSearchIconSearch ?>; "  id="SC_fast_search_submit_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
                  <img style="display: <?php echo $stateSearchIconClose ?>; " id="SC_fast_search_close_t" class='css_toolbar_obj_qs_search_img' src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
              </span>
          </span>  </div>
  <?php
      }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_1";
        echo "<img id=\"NM_sep_1\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_2";
        echo "<img id=\"NM_sep_2\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['ap_id']))
           {
               $this->nmgp_cmp_readonly['ap_id'] = 'on';
           }
?>
   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   </tr>
   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_generales'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['ap_id']))
    {
        $this->nm_new_label['ap_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_id = $this->ap_id;
   $sStyleHidden_ap_id = '';
   if (isset($this->nmgp_cmp_hidden['ap_id']) && $this->nmgp_cmp_hidden['ap_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_id']);
       $sStyleHidden_ap_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_id = 'display: none;';
   $sStyleReadInp_ap_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["ap_id"]) &&  $this->nmgp_cmp_readonly["ap_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_id']);
       $sStyleReadLab_ap_id = '';
       $sStyleReadInp_ap_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_id']) && $this->nmgp_cmp_hidden['ap_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ap_id" value="<?php echo $this->form_encode_input($ap_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_id_label" id="hidden_field_label_ap_id" style="<?php echo $sStyleHidden_ap_id; ?>"><span id="id_label_ap_id"><?php echo $this->nm_new_label['ap_id']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_id_line" id="hidden_field_data_ap_id" style="<?php echo $sStyleHidden_ap_id; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_id_line" style="vertical-align: top;padding: 0px">
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { 
 ?>
<span id="id_read_on_ap_id" css_ap_id_line" style="<?php echo $sStyleReadLab_ap_id; ?>"><?php echo $this->form_format_readonly("ap_id", $this->form_encode_input($this->ap_id)); ?></span><span id="id_read_off_ap_id" class="css_read_off_ap_id" style="<?php echo $sStyleReadInp_ap_id; ?>"><input type="hidden" name="ap_id" value="<?php echo $this->form_encode_input($ap_id) . "\">"?><span id="id_ajax_label_ap_id"><?php echo nl2br($ap_id); ?></span>
</span><?php } else { ?>
&nbsp;
<?php } ?>
</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_id_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ap_descripcion']))
    {
        $this->nm_new_label['ap_descripcion'] = "" . $this->Ini->Nm_lang['lang_descripcion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_descripcion = $this->ap_descripcion;
   $sStyleHidden_ap_descripcion = '';
   if (isset($this->nmgp_cmp_hidden['ap_descripcion']) && $this->nmgp_cmp_hidden['ap_descripcion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_descripcion']);
       $sStyleHidden_ap_descripcion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_descripcion = 'display: none;';
   $sStyleReadInp_ap_descripcion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_descripcion']) && $this->nmgp_cmp_readonly['ap_descripcion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_descripcion']);
       $sStyleReadLab_ap_descripcion = '';
       $sStyleReadInp_ap_descripcion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_descripcion']) && $this->nmgp_cmp_hidden['ap_descripcion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ap_descripcion" value="<?php echo $this->form_encode_input($ap_descripcion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_descripcion_label" id="hidden_field_label_ap_descripcion" style="<?php echo $sStyleHidden_ap_descripcion; ?>"><span id="id_label_ap_descripcion"><?php echo $this->nm_new_label['ap_descripcion']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_descripcion_line" id="hidden_field_data_ap_descripcion" style="<?php echo $sStyleHidden_ap_descripcion; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_descripcion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_descripcion"]) &&  $this->nmgp_cmp_readonly["ap_descripcion"] == "on") { 

 ?>
<input type="hidden" name="ap_descripcion" value="<?php echo $this->form_encode_input($ap_descripcion) . "\">" . $ap_descripcion . ""; ?>
<?php } else { ?>
<span id="id_read_on_ap_descripcion" class="sc-ui-readonly-ap_descripcion css_ap_descripcion_line" style="<?php echo $sStyleReadLab_ap_descripcion; ?>"><?php echo $this->form_format_readonly("ap_descripcion", $this->form_encode_input($this->ap_descripcion)); ?></span><span id="id_read_off_ap_descripcion" class="css_read_off_ap_descripcion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ap_descripcion; ?>">
 <input class="sc-js-input scFormObjectOdd css_ap_descripcion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ap_descripcion" type=text name="ap_descripcion" value="<?php echo $this->form_encode_input($ap_descripcion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_descripcion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_descripcion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ap_tipo_cartera']))
   {
       $this->nm_new_label['ap_tipo_cartera'] = "" . $this->Ini->Nm_lang['lang_tipo_cartera'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_tipo_cartera = $this->ap_tipo_cartera;
   $sStyleHidden_ap_tipo_cartera = '';
   if (isset($this->nmgp_cmp_hidden['ap_tipo_cartera']) && $this->nmgp_cmp_hidden['ap_tipo_cartera'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_tipo_cartera']);
       $sStyleHidden_ap_tipo_cartera = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_tipo_cartera = 'display: none;';
   $sStyleReadInp_ap_tipo_cartera = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_tipo_cartera']) && $this->nmgp_cmp_readonly['ap_tipo_cartera'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_tipo_cartera']);
       $sStyleReadLab_ap_tipo_cartera = '';
       $sStyleReadInp_ap_tipo_cartera = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_tipo_cartera']) && $this->nmgp_cmp_hidden['ap_tipo_cartera'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_tipo_cartera" value="<?php echo $this->form_encode_input($this->ap_tipo_cartera) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_tipo_cartera_label" id="hidden_field_label_ap_tipo_cartera" style="<?php echo $sStyleHidden_ap_tipo_cartera; ?>"><span id="id_label_ap_tipo_cartera"><?php echo $this->nm_new_label['ap_tipo_cartera']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_tipo_cartera_line" id="hidden_field_data_ap_tipo_cartera" style="<?php echo $sStyleHidden_ap_tipo_cartera; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_tipo_cartera_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_tipo_cartera"]) &&  $this->nmgp_cmp_readonly["ap_tipo_cartera"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera'] = array(); 
    }

   $old_value_ap_dias_vigencia = $this->ap_dias_vigencia;
   $this->nm_tira_formatacao();


   $unformatted_value_ap_dias_vigencia = $this->ap_dias_vigencia;

   $ap_contrato_val_str = "''";
   if (!empty($this->ap_contrato))
   {
       if (is_array($this->ap_contrato))
       {
           $Tmp_array = $this->ap_contrato;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_contrato);
       }
       $ap_contrato_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_contrato_val_str)
          {
             $ap_contrato_val_str .= ", ";
          }
          $ap_contrato_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_personalizada_val_str = "''";
   if (!empty($this->ap_personalizada))
   {
       if (is_array($this->ap_personalizada))
       {
           $Tmp_array = $this->ap_personalizada;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_personalizada);
       }
       $ap_personalizada_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_personalizada_val_str)
          {
             $ap_personalizada_val_str .= ", ";
          }
          $ap_personalizada_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_libre_val_str = "''";
   if (!empty($this->ap_libre))
   {
       if (is_array($this->ap_libre))
       {
           $Tmp_array = $this->ap_libre;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_libre);
       }
       $ap_libre_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_libre_val_str)
          {
             $ap_libre_val_str .= ", ";
          }
          $ap_libre_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_servicio_val_str = "''";
   if (!empty($this->ap_servicio))
   {
       if (is_array($this->ap_servicio))
       {
           $Tmp_array = $this->ap_servicio;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_servicio);
       }
       $ap_servicio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_servicio_val_str)
          {
             $ap_servicio_val_str .= ", ";
          }
          $ap_servicio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_emite_asiento_val_str = "''";
   if (!empty($this->ap_emite_asiento))
   {
       if (is_array($this->ap_emite_asiento))
       {
           $Tmp_array = $this->ap_emite_asiento;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_emite_asiento);
       }
       $ap_emite_asiento_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_emite_asiento_val_str)
          {
             $ap_emite_asiento_val_str .= ", ";
          }
          $ap_emite_asiento_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_reconexion_val_str = "''";
   if (!empty($this->ap_reconexion))
   {
       if (is_array($this->ap_reconexion))
       {
           $Tmp_array = $this->ap_reconexion;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_reconexion);
       }
       $ap_reconexion_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_reconexion_val_str)
          {
             $ap_reconexion_val_str .= ", ";
          }
          $ap_reconexion_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_materiales_val_str = "''";
   if (!empty($this->ap_materiales))
   {
       if (is_array($this->ap_materiales))
       {
           $Tmp_array = $this->ap_materiales;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_materiales);
       }
       $ap_materiales_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_materiales_val_str)
          {
             $ap_materiales_val_str .= ", ";
          }
          $ap_materiales_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_tipo_cartera  ORDER BY dec_nombre";

   $this->ap_dias_vigencia = $old_value_ap_dias_vigencia;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_cartera'][] = $rs->fields[0];
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
   $ap_tipo_cartera_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_tipo_cartera_1))
          {
              foreach ($this->ap_tipo_cartera_1 as $tmp_ap_tipo_cartera)
              {
                  if (trim($tmp_ap_tipo_cartera) === trim($cadaselect[1])) {$ap_tipo_cartera_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_tipo_cartera) && trim($this->ap_tipo_cartera) === trim($cadaselect[1])) {$ap_tipo_cartera_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ap_tipo_cartera" value="<?php echo $this->form_encode_input($ap_tipo_cartera) . "\">" . $ap_tipo_cartera_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ap_tipo_cartera();
   $x = 0 ; 
   $ap_tipo_cartera_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_tipo_cartera_1))
          {
              foreach ($this->ap_tipo_cartera_1 as $tmp_ap_tipo_cartera)
              {
                  if (trim($tmp_ap_tipo_cartera) === trim($cadaselect[1])) {$ap_tipo_cartera_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_tipo_cartera) && trim($this->ap_tipo_cartera) === trim($cadaselect[1])) { $ap_tipo_cartera_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ap_tipo_cartera_look))
          {
              $ap_tipo_cartera_look = $this->ap_tipo_cartera;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ap_tipo_cartera\" class=\"css_ap_tipo_cartera_line\" style=\"" .  $sStyleReadLab_ap_tipo_cartera . "\">" . $this->form_format_readonly("ap_tipo_cartera", $this->form_encode_input($ap_tipo_cartera_look)) . "</span><span id=\"id_read_off_ap_tipo_cartera\" class=\"css_read_off_ap_tipo_cartera" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ap_tipo_cartera . "\">";
   echo " <span id=\"idAjaxSelect_ap_tipo_cartera\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ap_tipo_cartera_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ap_tipo_cartera\" name=\"ap_tipo_cartera\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ap_tipo_cartera) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ap_tipo_cartera)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_tipo_cartera_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_tipo_cartera_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_tipo_comprobante']))
   {
       $this->nm_new_label['ap_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_tipo_comprobante = $this->ap_tipo_comprobante;
   $sStyleHidden_ap_tipo_comprobante = '';
   if (isset($this->nmgp_cmp_hidden['ap_tipo_comprobante']) && $this->nmgp_cmp_hidden['ap_tipo_comprobante'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_tipo_comprobante']);
       $sStyleHidden_ap_tipo_comprobante = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_tipo_comprobante = 'display: none;';
   $sStyleReadInp_ap_tipo_comprobante = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_tipo_comprobante']) && $this->nmgp_cmp_readonly['ap_tipo_comprobante'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_tipo_comprobante']);
       $sStyleReadLab_ap_tipo_comprobante = '';
       $sStyleReadInp_ap_tipo_comprobante = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_tipo_comprobante']) && $this->nmgp_cmp_hidden['ap_tipo_comprobante'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_tipo_comprobante" value="<?php echo $this->form_encode_input($this->ap_tipo_comprobante) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_tipo_comprobante_label" id="hidden_field_label_ap_tipo_comprobante" style="<?php echo $sStyleHidden_ap_tipo_comprobante; ?>"><span id="id_label_ap_tipo_comprobante"><?php echo $this->nm_new_label['ap_tipo_comprobante']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_tipo_comprobante_line" id="hidden_field_data_ap_tipo_comprobante" style="<?php echo $sStyleHidden_ap_tipo_comprobante; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_tipo_comprobante_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_tipo_comprobante"]) &&  $this->nmgp_cmp_readonly["ap_tipo_comprobante"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante'] = array(); 
    }

   $old_value_ap_dias_vigencia = $this->ap_dias_vigencia;
   $this->nm_tira_formatacao();


   $unformatted_value_ap_dias_vigencia = $this->ap_dias_vigencia;

   $ap_contrato_val_str = "''";
   if (!empty($this->ap_contrato))
   {
       if (is_array($this->ap_contrato))
       {
           $Tmp_array = $this->ap_contrato;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_contrato);
       }
       $ap_contrato_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_contrato_val_str)
          {
             $ap_contrato_val_str .= ", ";
          }
          $ap_contrato_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_personalizada_val_str = "''";
   if (!empty($this->ap_personalizada))
   {
       if (is_array($this->ap_personalizada))
       {
           $Tmp_array = $this->ap_personalizada;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_personalizada);
       }
       $ap_personalizada_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_personalizada_val_str)
          {
             $ap_personalizada_val_str .= ", ";
          }
          $ap_personalizada_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_libre_val_str = "''";
   if (!empty($this->ap_libre))
   {
       if (is_array($this->ap_libre))
       {
           $Tmp_array = $this->ap_libre;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_libre);
       }
       $ap_libre_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_libre_val_str)
          {
             $ap_libre_val_str .= ", ";
          }
          $ap_libre_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_servicio_val_str = "''";
   if (!empty($this->ap_servicio))
   {
       if (is_array($this->ap_servicio))
       {
           $Tmp_array = $this->ap_servicio;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_servicio);
       }
       $ap_servicio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_servicio_val_str)
          {
             $ap_servicio_val_str .= ", ";
          }
          $ap_servicio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_emite_asiento_val_str = "''";
   if (!empty($this->ap_emite_asiento))
   {
       if (is_array($this->ap_emite_asiento))
       {
           $Tmp_array = $this->ap_emite_asiento;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_emite_asiento);
       }
       $ap_emite_asiento_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_emite_asiento_val_str)
          {
             $ap_emite_asiento_val_str .= ", ";
          }
          $ap_emite_asiento_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_reconexion_val_str = "''";
   if (!empty($this->ap_reconexion))
   {
       if (is_array($this->ap_reconexion))
       {
           $Tmp_array = $this->ap_reconexion;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_reconexion);
       }
       $ap_reconexion_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_reconexion_val_str)
          {
             $ap_reconexion_val_str .= ", ";
          }
          $ap_reconexion_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_materiales_val_str = "''";
   if (!empty($this->ap_materiales))
   {
       if (is_array($this->ap_materiales))
       {
           $Tmp_array = $this->ap_materiales;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_materiales);
       }
       $ap_materiales_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_materiales_val_str)
          {
             $ap_materiales_val_str .= ", ";
          }
          $ap_materiales_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT tc_codigo, tc_nombre  FROM sri_tipo_comprobante  where tc_codigo in ('01','99') ORDER BY tc_nombre";

   $this->ap_dias_vigencia = $old_value_ap_dias_vigencia;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_tipo_comprobante'][] = $rs->fields[0];
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
   $ap_tipo_comprobante_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_tipo_comprobante_1))
          {
              foreach ($this->ap_tipo_comprobante_1 as $tmp_ap_tipo_comprobante)
              {
                  if (trim($tmp_ap_tipo_comprobante) === trim($cadaselect[1])) {$ap_tipo_comprobante_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_tipo_comprobante) && trim($this->ap_tipo_comprobante) === trim($cadaselect[1])) {$ap_tipo_comprobante_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ap_tipo_comprobante" value="<?php echo $this->form_encode_input($ap_tipo_comprobante) . "\">" . $ap_tipo_comprobante_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ap_tipo_comprobante();
   $x = 0 ; 
   $ap_tipo_comprobante_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_tipo_comprobante_1))
          {
              foreach ($this->ap_tipo_comprobante_1 as $tmp_ap_tipo_comprobante)
              {
                  if (trim($tmp_ap_tipo_comprobante) === trim($cadaselect[1])) {$ap_tipo_comprobante_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_tipo_comprobante) && trim($this->ap_tipo_comprobante) === trim($cadaselect[1])) { $ap_tipo_comprobante_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ap_tipo_comprobante_look))
          {
              $ap_tipo_comprobante_look = $this->ap_tipo_comprobante;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ap_tipo_comprobante\" class=\"css_ap_tipo_comprobante_line\" style=\"" .  $sStyleReadLab_ap_tipo_comprobante . "\">" . $this->form_format_readonly("ap_tipo_comprobante", $this->form_encode_input($ap_tipo_comprobante_look)) . "</span><span id=\"id_read_off_ap_tipo_comprobante\" class=\"css_read_off_ap_tipo_comprobante" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ap_tipo_comprobante . "\">";
   echo " <span id=\"idAjaxSelect_ap_tipo_comprobante\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ap_tipo_comprobante_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ap_tipo_comprobante\" name=\"ap_tipo_comprobante\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ap_tipo_comprobante) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ap_tipo_comprobante)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_tipo_comprobante_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_tipo_comprobante_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ap_periodicidad']))
   {
       $this->nm_new_label['ap_periodicidad'] = "" . $this->Ini->Nm_lang['lang_periodicidad_aportes'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_periodicidad = $this->ap_periodicidad;
   $sStyleHidden_ap_periodicidad = '';
   if (isset($this->nmgp_cmp_hidden['ap_periodicidad']) && $this->nmgp_cmp_hidden['ap_periodicidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_periodicidad']);
       $sStyleHidden_ap_periodicidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_periodicidad = 'display: none;';
   $sStyleReadInp_ap_periodicidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_periodicidad']) && $this->nmgp_cmp_readonly['ap_periodicidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_periodicidad']);
       $sStyleReadLab_ap_periodicidad = '';
       $sStyleReadInp_ap_periodicidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_periodicidad']) && $this->nmgp_cmp_hidden['ap_periodicidad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_periodicidad" value="<?php echo $this->form_encode_input($this->ap_periodicidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_periodicidad_label" id="hidden_field_label_ap_periodicidad" style="<?php echo $sStyleHidden_ap_periodicidad; ?>"><span id="id_label_ap_periodicidad"><?php echo $this->nm_new_label['ap_periodicidad']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_periodicidad_line" id="hidden_field_data_ap_periodicidad" style="<?php echo $sStyleHidden_ap_periodicidad; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_periodicidad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_periodicidad"]) &&  $this->nmgp_cmp_readonly["ap_periodicidad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad'] = array(); 
    }

   $old_value_ap_dias_vigencia = $this->ap_dias_vigencia;
   $this->nm_tira_formatacao();


   $unformatted_value_ap_dias_vigencia = $this->ap_dias_vigencia;

   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_lot_periodicidad_aportes  WHERE dec_estado='V' ORDER BY dec_nombre";

   $this->ap_dias_vigencia = $old_value_ap_dias_vigencia;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_periodicidad'][] = $rs->fields[0];
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
   $ap_periodicidad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_periodicidad_1))
          {
              foreach ($this->ap_periodicidad_1 as $tmp_ap_periodicidad)
              {
                  if (trim($tmp_ap_periodicidad) === trim($cadaselect[1])) {$ap_periodicidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_periodicidad) && trim($this->ap_periodicidad) === trim($cadaselect[1])) {$ap_periodicidad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ap_periodicidad" value="<?php echo $this->form_encode_input($ap_periodicidad) . "\">" . $ap_periodicidad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ap_periodicidad();
   $x = 0 ; 
   $ap_periodicidad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_periodicidad_1))
          {
              foreach ($this->ap_periodicidad_1 as $tmp_ap_periodicidad)
              {
                  if (trim($tmp_ap_periodicidad) === trim($cadaselect[1])) {$ap_periodicidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_periodicidad) && trim($this->ap_periodicidad) === trim($cadaselect[1])) { $ap_periodicidad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ap_periodicidad_look))
          {
              $ap_periodicidad_look = $this->ap_periodicidad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ap_periodicidad\" class=\"css_ap_periodicidad_line\" style=\"" .  $sStyleReadLab_ap_periodicidad . "\">" . $this->form_format_readonly("ap_periodicidad", $this->form_encode_input($ap_periodicidad_look)) . "</span><span id=\"id_read_off_ap_periodicidad\" class=\"css_read_off_ap_periodicidad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ap_periodicidad . "\">";
   echo " <span id=\"idAjaxSelect_ap_periodicidad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ap_periodicidad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ap_periodicidad\" name=\"ap_periodicidad\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ap_periodicidad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ap_periodicidad)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_periodicidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_periodicidad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['ap_dias_vigencia']))
    {
        $this->nm_new_label['ap_dias_vigencia'] = "" . $this->Ini->Nm_lang['lang_dias_vigencia'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_dias_vigencia = $this->ap_dias_vigencia;
   $sStyleHidden_ap_dias_vigencia = '';
   if (isset($this->nmgp_cmp_hidden['ap_dias_vigencia']) && $this->nmgp_cmp_hidden['ap_dias_vigencia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_dias_vigencia']);
       $sStyleHidden_ap_dias_vigencia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_dias_vigencia = 'display: none;';
   $sStyleReadInp_ap_dias_vigencia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_dias_vigencia']) && $this->nmgp_cmp_readonly['ap_dias_vigencia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_dias_vigencia']);
       $sStyleReadLab_ap_dias_vigencia = '';
       $sStyleReadInp_ap_dias_vigencia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_dias_vigencia']) && $this->nmgp_cmp_hidden['ap_dias_vigencia'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="ap_dias_vigencia" value="<?php echo $this->form_encode_input($ap_dias_vigencia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_dias_vigencia_label" id="hidden_field_label_ap_dias_vigencia" style="<?php echo $sStyleHidden_ap_dias_vigencia; ?>"><span id="id_label_ap_dias_vigencia"><?php echo $this->nm_new_label['ap_dias_vigencia']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_dias_vigencia_line" id="hidden_field_data_ap_dias_vigencia" style="<?php echo $sStyleHidden_ap_dias_vigencia; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_dias_vigencia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_dias_vigencia"]) &&  $this->nmgp_cmp_readonly["ap_dias_vigencia"] == "on") { 

 ?>
<input type="hidden" name="ap_dias_vigencia" value="<?php echo $this->form_encode_input($ap_dias_vigencia) . "\">" . $ap_dias_vigencia . ""; ?>
<?php } else { ?>
<span id="id_read_on_ap_dias_vigencia" class="sc-ui-readonly-ap_dias_vigencia css_ap_dias_vigencia_line" style="<?php echo $sStyleReadLab_ap_dias_vigencia; ?>"><?php echo $this->form_format_readonly("ap_dias_vigencia", $this->form_encode_input($this->ap_dias_vigencia)); ?></span><span id="id_read_off_ap_dias_vigencia" class="css_read_off_ap_dias_vigencia<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_ap_dias_vigencia; ?>">
 <input class="sc-js-input scFormObjectOdd css_ap_dias_vigencia_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_ap_dias_vigencia" type=text name="ap_dias_vigencia" value="<?php echo $this->form_encode_input($ap_dias_vigencia) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['ap_dias_vigencia']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['ap_dias_vigencia']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_dias_vigencia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_dias_vigencia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ap_emite_asiento']))
   {
       $this->nm_new_label['ap_emite_asiento'] = "" . $this->Ini->Nm_lang['lang_emite_asiento'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_emite_asiento = $this->ap_emite_asiento;
   $sStyleHidden_ap_emite_asiento = '';
   if (isset($this->nmgp_cmp_hidden['ap_emite_asiento']) && $this->nmgp_cmp_hidden['ap_emite_asiento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_emite_asiento']);
       $sStyleHidden_ap_emite_asiento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_emite_asiento = 'display: none;';
   $sStyleReadInp_ap_emite_asiento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_emite_asiento']) && $this->nmgp_cmp_readonly['ap_emite_asiento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_emite_asiento']);
       $sStyleReadLab_ap_emite_asiento = '';
       $sStyleReadInp_ap_emite_asiento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_emite_asiento']) && $this->nmgp_cmp_hidden['ap_emite_asiento'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_emite_asiento" value="<?php echo $this->form_encode_input($this->ap_emite_asiento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_emite_asiento_1 = explode(";", trim($this->ap_emite_asiento));
  } 
  else
  {
      if (empty($this->ap_emite_asiento))
      {
          $this->ap_emite_asiento_1= array(); 
          $this->ap_emite_asiento= "N";
      } 
      else
      {
          $this->ap_emite_asiento_1= $this->ap_emite_asiento; 
          $this->ap_emite_asiento= ""; 
          foreach ($this->ap_emite_asiento_1 as $cada_ap_emite_asiento)
          {
             if (!empty($ap_emite_asiento))
             {
                 $this->ap_emite_asiento.= ";"; 
             } 
             $this->ap_emite_asiento.= $cada_ap_emite_asiento; 
          } 
      } 
  } 
?> 

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_emite_asiento_label" id="hidden_field_label_ap_emite_asiento" style="<?php echo $sStyleHidden_ap_emite_asiento; ?>"><span id="id_label_ap_emite_asiento"><?php echo $this->nm_new_label['ap_emite_asiento']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_emite_asiento_line" id="hidden_field_data_ap_emite_asiento" style="<?php echo $sStyleHidden_ap_emite_asiento; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_emite_asiento_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_emite_asiento"]) &&  $this->nmgp_cmp_readonly["ap_emite_asiento"] == "on") { 

$ap_emite_asiento_look = "";
 if ($this->ap_emite_asiento == "S") { $ap_emite_asiento_look .= "" ;} 
 if (empty($ap_emite_asiento_look)) { $ap_emite_asiento_look = $this->ap_emite_asiento; }
?>
<input type="hidden" name="ap_emite_asiento" value="<?php echo $this->form_encode_input($ap_emite_asiento) . "\">" . $ap_emite_asiento_look . ""; ?>
<?php } else { ?>

<?php

$ap_emite_asiento_look = "";
 if ($this->ap_emite_asiento == "S") { $ap_emite_asiento_look .= "" ;} 
 if (empty($ap_emite_asiento_look)) { $ap_emite_asiento_look = $this->ap_emite_asiento; }
?>
<span id="id_read_on_ap_emite_asiento" class="css_ap_emite_asiento_line" style="<?php echo $sStyleReadLab_ap_emite_asiento; ?>"><?php echo $this->form_format_readonly("ap_emite_asiento", $this->form_encode_input($ap_emite_asiento_look)); ?></span><span id="id_read_off_ap_emite_asiento" class="css_read_off_ap_emite_asiento css_ap_emite_asiento_line" style="<?php echo $sStyleReadInp_ap_emite_asiento; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_emite_asiento\" style=\"display: inline-block\" class=\"css_ap_emite_asiento_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_emite_asiento_line"><?php $tempOptionId = "id-opt-ap_emite_asiento" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_emite_asiento sc-ui-checkbox-ap_emite_asiento" name="ap_emite_asiento[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_emite_asiento'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_emite_asiento_1))  { echo " checked" ;} ?><?php  if (empty($this->ap_emite_asiento)) { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_emite_asiento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_emite_asiento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_estado']))
   {
       $this->nm_new_label['ap_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_estado = $this->ap_estado;
   $sStyleHidden_ap_estado = '';
   if (isset($this->nmgp_cmp_hidden['ap_estado']) && $this->nmgp_cmp_hidden['ap_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_estado']);
       $sStyleHidden_ap_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_estado = 'display: none;';
   $sStyleReadInp_ap_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_estado']) && $this->nmgp_cmp_readonly['ap_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_estado']);
       $sStyleReadLab_ap_estado = '';
       $sStyleReadInp_ap_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_estado']) && $this->nmgp_cmp_hidden['ap_estado'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_estado" value="<?php echo $this->form_encode_input($this->ap_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_ap_estado_label" id="hidden_field_label_ap_estado" style="<?php echo $sStyleHidden_ap_estado; ?>"><span id="id_label_ap_estado"><?php echo $this->nm_new_label['ap_estado']; ?></span></TD>
    <TD class="scFormDataOdd css_ap_estado_line" id="hidden_field_data_ap_estado" style="<?php echo $sStyleHidden_ap_estado; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_estado_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_estado"]) &&  $this->nmgp_cmp_readonly["ap_estado"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado'] = array(); 
    }

   $old_value_ap_dias_vigencia = $this->ap_dias_vigencia;
   $this->nm_tira_formatacao();


   $unformatted_value_ap_dias_vigencia = $this->ap_dias_vigencia;

   $ap_contrato_val_str = "''";
   if (!empty($this->ap_contrato))
   {
       if (is_array($this->ap_contrato))
       {
           $Tmp_array = $this->ap_contrato;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_contrato);
       }
       $ap_contrato_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_contrato_val_str)
          {
             $ap_contrato_val_str .= ", ";
          }
          $ap_contrato_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_personalizada_val_str = "''";
   if (!empty($this->ap_personalizada))
   {
       if (is_array($this->ap_personalizada))
       {
           $Tmp_array = $this->ap_personalizada;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_personalizada);
       }
       $ap_personalizada_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_personalizada_val_str)
          {
             $ap_personalizada_val_str .= ", ";
          }
          $ap_personalizada_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_libre_val_str = "''";
   if (!empty($this->ap_libre))
   {
       if (is_array($this->ap_libre))
       {
           $Tmp_array = $this->ap_libre;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_libre);
       }
       $ap_libre_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_libre_val_str)
          {
             $ap_libre_val_str .= ", ";
          }
          $ap_libre_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_servicio_val_str = "''";
   if (!empty($this->ap_servicio))
   {
       if (is_array($this->ap_servicio))
       {
           $Tmp_array = $this->ap_servicio;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_servicio);
       }
       $ap_servicio_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_servicio_val_str)
          {
             $ap_servicio_val_str .= ", ";
          }
          $ap_servicio_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_emite_asiento_val_str = "''";
   if (!empty($this->ap_emite_asiento))
   {
       if (is_array($this->ap_emite_asiento))
       {
           $Tmp_array = $this->ap_emite_asiento;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_emite_asiento);
       }
       $ap_emite_asiento_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_emite_asiento_val_str)
          {
             $ap_emite_asiento_val_str .= ", ";
          }
          $ap_emite_asiento_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_reconexion_val_str = "''";
   if (!empty($this->ap_reconexion))
   {
       if (is_array($this->ap_reconexion))
       {
           $Tmp_array = $this->ap_reconexion;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_reconexion);
       }
       $ap_reconexion_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_reconexion_val_str)
          {
             $ap_reconexion_val_str .= ", ";
          }
          $ap_reconexion_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $ap_materiales_val_str = "''";
   if (!empty($this->ap_materiales))
   {
       if (is_array($this->ap_materiales))
       {
           $Tmp_array = $this->ap_materiales;
       }
       else
       {
           $Tmp_array = explode(";", $this->ap_materiales);
       }
       $ap_materiales_val_str = "";
       foreach ($Tmp_array as $Tmp_val_cmp)
       {
          if ("" != $ap_materiales_val_str)
          {
             $ap_materiales_val_str .= ", ";
          }
          $ap_materiales_val_str .= "'$Tmp_val_cmp'";
       }
   }
   $nm_comando = "SELECT dec_id, dec_nombre  FROM v_sis_estado  ORDER BY dec_nombre";

   $this->ap_dias_vigencia = $old_value_ap_dias_vigencia;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_estado'][] = $rs->fields[0];
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
   $ap_estado_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_estado_1))
          {
              foreach ($this->ap_estado_1 as $tmp_ap_estado)
              {
                  if (trim($tmp_ap_estado) === trim($cadaselect[1])) {$ap_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_estado) && trim($this->ap_estado) === trim($cadaselect[1])) {$ap_estado_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="ap_estado" value="<?php echo $this->form_encode_input($ap_estado) . "\">" . $ap_estado_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_ap_estado();
   $x = 0 ; 
   $ap_estado_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->ap_estado_1))
          {
              foreach ($this->ap_estado_1 as $tmp_ap_estado)
              {
                  if (trim($tmp_ap_estado) === trim($cadaselect[1])) {$ap_estado_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->ap_estado) && trim($this->ap_estado) === trim($cadaselect[1])) { $ap_estado_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($ap_estado_look))
          {
              $ap_estado_look = $this->ap_estado;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_ap_estado\" class=\"css_ap_estado_line\" style=\"" .  $sStyleReadLab_ap_estado . "\">" . $this->form_format_readonly("ap_estado", $this->form_encode_input($ap_estado_look)) . "</span><span id=\"id_read_off_ap_estado\" class=\"css_read_off_ap_estado" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_ap_estado . "\">";
   echo " <span id=\"idAjaxSelect_ap_estado\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_ap_estado_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_ap_estado\" name=\"ap_estado\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->ap_estado) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->ap_estado)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_estado_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 


   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_1"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_1"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_1" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="6" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_tipo_emision'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['ap_contrato']))
   {
       $this->nm_new_label['ap_contrato'] = "" . $this->Ini->Nm_lang['lang_contrato'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_contrato = $this->ap_contrato;
   $sStyleHidden_ap_contrato = '';
   if (isset($this->nmgp_cmp_hidden['ap_contrato']) && $this->nmgp_cmp_hidden['ap_contrato'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_contrato']);
       $sStyleHidden_ap_contrato = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_contrato = 'display: none;';
   $sStyleReadInp_ap_contrato = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_contrato']) && $this->nmgp_cmp_readonly['ap_contrato'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_contrato']);
       $sStyleReadLab_ap_contrato = '';
       $sStyleReadInp_ap_contrato = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_contrato']) && $this->nmgp_cmp_hidden['ap_contrato'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_contrato" value="<?php echo $this->form_encode_input($this->ap_contrato) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_contrato_1 = explode(";", trim($this->ap_contrato));
  } 
  else
  {
      if (empty($this->ap_contrato))
      {
          $this->ap_contrato_1= array(); 
          $this->ap_contrato= "N";
      } 
      else
      {
          $this->ap_contrato_1= $this->ap_contrato; 
          $this->ap_contrato= ""; 
          foreach ($this->ap_contrato_1 as $cada_ap_contrato)
          {
             if (!empty($ap_contrato))
             {
                 $this->ap_contrato.= ";"; 
             } 
             $this->ap_contrato.= $cada_ap_contrato; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_ap_contrato_line" id="hidden_field_data_ap_contrato" style="<?php echo $sStyleHidden_ap_contrato; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_contrato_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ap_contrato_label" style=""><span id="id_label_ap_contrato"><?php echo $this->nm_new_label['ap_contrato']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_contrato"]) &&  $this->nmgp_cmp_readonly["ap_contrato"] == "on") { 

$ap_contrato_look = "";
 if ($this->ap_contrato == "S") { $ap_contrato_look .= "" ;} 
 if (empty($ap_contrato_look)) { $ap_contrato_look = $this->ap_contrato; }
?>
<input type="hidden" name="ap_contrato" value="<?php echo $this->form_encode_input($ap_contrato) . "\">" . $ap_contrato_look . ""; ?>
<?php } else { ?>

<?php

$ap_contrato_look = "";
 if ($this->ap_contrato == "S") { $ap_contrato_look .= "" ;} 
 if (empty($ap_contrato_look)) { $ap_contrato_look = $this->ap_contrato; }
?>
<span id="id_read_on_ap_contrato" class="css_ap_contrato_line" style="<?php echo $sStyleReadLab_ap_contrato; ?>"><?php echo $this->form_format_readonly("ap_contrato", $this->form_encode_input($ap_contrato_look)); ?></span><span id="id_read_off_ap_contrato" class="css_read_off_ap_contrato css_ap_contrato_line" style="<?php echo $sStyleReadInp_ap_contrato; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_contrato\" style=\"display: inline-block\" class=\"css_ap_contrato_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_contrato_line"><?php $tempOptionId = "id-opt-ap_contrato" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_contrato sc-ui-checkbox-ap_contrato" name="ap_contrato[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_contrato'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_contrato_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_contrato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_contrato_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_servicio']))
   {
       $this->nm_new_label['ap_servicio'] = "" . $this->Ini->Nm_lang['lang_servicio_mensual'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_servicio = $this->ap_servicio;
   $sStyleHidden_ap_servicio = '';
   if (isset($this->nmgp_cmp_hidden['ap_servicio']) && $this->nmgp_cmp_hidden['ap_servicio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_servicio']);
       $sStyleHidden_ap_servicio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_servicio = 'display: none;';
   $sStyleReadInp_ap_servicio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_servicio']) && $this->nmgp_cmp_readonly['ap_servicio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_servicio']);
       $sStyleReadLab_ap_servicio = '';
       $sStyleReadInp_ap_servicio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_servicio']) && $this->nmgp_cmp_hidden['ap_servicio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_servicio" value="<?php echo $this->form_encode_input($this->ap_servicio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_servicio_1 = explode(";", trim($this->ap_servicio));
  } 
  else
  {
      if (empty($this->ap_servicio))
      {
          $this->ap_servicio_1= array(); 
          $this->ap_servicio= "N";
      } 
      else
      {
          $this->ap_servicio_1= $this->ap_servicio; 
          $this->ap_servicio= ""; 
          foreach ($this->ap_servicio_1 as $cada_ap_servicio)
          {
             if (!empty($ap_servicio))
             {
                 $this->ap_servicio.= ";"; 
             } 
             $this->ap_servicio.= $cada_ap_servicio; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_ap_servicio_line" id="hidden_field_data_ap_servicio" style="<?php echo $sStyleHidden_ap_servicio; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_servicio_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ap_servicio_label" style=""><span id="id_label_ap_servicio"><?php echo $this->nm_new_label['ap_servicio']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_servicio"]) &&  $this->nmgp_cmp_readonly["ap_servicio"] == "on") { 

$ap_servicio_look = "";
 if ($this->ap_servicio == "S") { $ap_servicio_look .= "" ;} 
 if (empty($ap_servicio_look)) { $ap_servicio_look = $this->ap_servicio; }
?>
<input type="hidden" name="ap_servicio" value="<?php echo $this->form_encode_input($ap_servicio) . "\">" . $ap_servicio_look . ""; ?>
<?php } else { ?>

<?php

$ap_servicio_look = "";
 if ($this->ap_servicio == "S") { $ap_servicio_look .= "" ;} 
 if (empty($ap_servicio_look)) { $ap_servicio_look = $this->ap_servicio; }
?>
<span id="id_read_on_ap_servicio" class="css_ap_servicio_line" style="<?php echo $sStyleReadLab_ap_servicio; ?>"><?php echo $this->form_format_readonly("ap_servicio", $this->form_encode_input($ap_servicio_look)); ?></span><span id="id_read_off_ap_servicio" class="css_read_off_ap_servicio css_ap_servicio_line" style="<?php echo $sStyleReadInp_ap_servicio; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_servicio\" style=\"display: inline-block\" class=\"css_ap_servicio_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_servicio_line"><?php $tempOptionId = "id-opt-ap_servicio" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_servicio sc-ui-checkbox-ap_servicio" name="ap_servicio[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_servicio'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_servicio_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_servicio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_servicio_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_personalizada']))
   {
       $this->nm_new_label['ap_personalizada'] = "" . $this->Ini->Nm_lang['lang_otras_emisiones'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_personalizada = $this->ap_personalizada;
   $sStyleHidden_ap_personalizada = '';
   if (isset($this->nmgp_cmp_hidden['ap_personalizada']) && $this->nmgp_cmp_hidden['ap_personalizada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_personalizada']);
       $sStyleHidden_ap_personalizada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_personalizada = 'display: none;';
   $sStyleReadInp_ap_personalizada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_personalizada']) && $this->nmgp_cmp_readonly['ap_personalizada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_personalizada']);
       $sStyleReadLab_ap_personalizada = '';
       $sStyleReadInp_ap_personalizada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_personalizada']) && $this->nmgp_cmp_hidden['ap_personalizada'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_personalizada" value="<?php echo $this->form_encode_input($this->ap_personalizada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_personalizada_1 = explode(";", trim($this->ap_personalizada));
  } 
  else
  {
      if (empty($this->ap_personalizada))
      {
          $this->ap_personalizada_1= array(); 
          $this->ap_personalizada= "N";
      } 
      else
      {
          $this->ap_personalizada_1= $this->ap_personalizada; 
          $this->ap_personalizada= ""; 
          foreach ($this->ap_personalizada_1 as $cada_ap_personalizada)
          {
             if (!empty($ap_personalizada))
             {
                 $this->ap_personalizada.= ";"; 
             } 
             $this->ap_personalizada.= $cada_ap_personalizada; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_ap_personalizada_line" id="hidden_field_data_ap_personalizada" style="<?php echo $sStyleHidden_ap_personalizada; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_personalizada_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ap_personalizada_label" style=""><span id="id_label_ap_personalizada"><?php echo $this->nm_new_label['ap_personalizada']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_personalizada"]) &&  $this->nmgp_cmp_readonly["ap_personalizada"] == "on") { 

$ap_personalizada_look = "";
 if ($this->ap_personalizada == "S") { $ap_personalizada_look .= "" ;} 
 if (empty($ap_personalizada_look)) { $ap_personalizada_look = $this->ap_personalizada; }
?>
<input type="hidden" name="ap_personalizada" value="<?php echo $this->form_encode_input($ap_personalizada) . "\">" . $ap_personalizada_look . ""; ?>
<?php } else { ?>

<?php

$ap_personalizada_look = "";
 if ($this->ap_personalizada == "S") { $ap_personalizada_look .= "" ;} 
 if (empty($ap_personalizada_look)) { $ap_personalizada_look = $this->ap_personalizada; }
?>
<span id="id_read_on_ap_personalizada" class="css_ap_personalizada_line" style="<?php echo $sStyleReadLab_ap_personalizada; ?>"><?php echo $this->form_format_readonly("ap_personalizada", $this->form_encode_input($ap_personalizada_look)); ?></span><span id="id_read_off_ap_personalizada" class="css_read_off_ap_personalizada css_ap_personalizada_line" style="<?php echo $sStyleReadInp_ap_personalizada; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_personalizada\" style=\"display: inline-block\" class=\"css_ap_personalizada_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_personalizada_line"><?php $tempOptionId = "id-opt-ap_personalizada" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_personalizada sc-ui-checkbox-ap_personalizada" name="ap_personalizada[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_personalizada'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_personalizada_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_personalizada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_personalizada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_libre']))
   {
       $this->nm_new_label['ap_libre'] = "" . $this->Ini->Nm_lang['lang_personalizada'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_libre = $this->ap_libre;
   $sStyleHidden_ap_libre = '';
   if (isset($this->nmgp_cmp_hidden['ap_libre']) && $this->nmgp_cmp_hidden['ap_libre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_libre']);
       $sStyleHidden_ap_libre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_libre = 'display: none;';
   $sStyleReadInp_ap_libre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_libre']) && $this->nmgp_cmp_readonly['ap_libre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_libre']);
       $sStyleReadLab_ap_libre = '';
       $sStyleReadInp_ap_libre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_libre']) && $this->nmgp_cmp_hidden['ap_libre'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_libre" value="<?php echo $this->form_encode_input($this->ap_libre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_libre_1 = explode(";", trim($this->ap_libre));
  } 
  else
  {
      if (empty($this->ap_libre))
      {
          $this->ap_libre_1= array(); 
          $this->ap_libre= "N";
      } 
      else
      {
          $this->ap_libre_1= $this->ap_libre; 
          $this->ap_libre= ""; 
          foreach ($this->ap_libre_1 as $cada_ap_libre)
          {
             if (!empty($ap_libre))
             {
                 $this->ap_libre.= ";"; 
             } 
             $this->ap_libre.= $cada_ap_libre; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_ap_libre_line" id="hidden_field_data_ap_libre" style="<?php echo $sStyleHidden_ap_libre; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_libre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ap_libre_label" style=""><span id="id_label_ap_libre"><?php echo $this->nm_new_label['ap_libre']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_libre"]) &&  $this->nmgp_cmp_readonly["ap_libre"] == "on") { 

$ap_libre_look = "";
 if ($this->ap_libre == "S") { $ap_libre_look .= "" ;} 
 if (empty($ap_libre_look)) { $ap_libre_look = $this->ap_libre; }
?>
<input type="hidden" name="ap_libre" value="<?php echo $this->form_encode_input($ap_libre) . "\">" . $ap_libre_look . ""; ?>
<?php } else { ?>

<?php

$ap_libre_look = "";
 if ($this->ap_libre == "S") { $ap_libre_look .= "" ;} 
 if (empty($ap_libre_look)) { $ap_libre_look = $this->ap_libre; }
?>
<span id="id_read_on_ap_libre" class="css_ap_libre_line" style="<?php echo $sStyleReadLab_ap_libre; ?>"><?php echo $this->form_format_readonly("ap_libre", $this->form_encode_input($ap_libre_look)); ?></span><span id="id_read_off_ap_libre" class="css_read_off_ap_libre css_ap_libre_line" style="<?php echo $sStyleReadInp_ap_libre; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_libre\" style=\"display: inline-block\" class=\"css_ap_libre_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_libre_line"><?php $tempOptionId = "id-opt-ap_libre" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_libre sc-ui-checkbox-ap_libre" name="ap_libre[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_libre'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_libre_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_libre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_libre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_reconexion']))
   {
       $this->nm_new_label['ap_reconexion'] = "" . $this->Ini->Nm_lang['lang_reconexion'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_reconexion = $this->ap_reconexion;
   $sStyleHidden_ap_reconexion = '';
   if (isset($this->nmgp_cmp_hidden['ap_reconexion']) && $this->nmgp_cmp_hidden['ap_reconexion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_reconexion']);
       $sStyleHidden_ap_reconexion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_reconexion = 'display: none;';
   $sStyleReadInp_ap_reconexion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_reconexion']) && $this->nmgp_cmp_readonly['ap_reconexion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_reconexion']);
       $sStyleReadLab_ap_reconexion = '';
       $sStyleReadInp_ap_reconexion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_reconexion']) && $this->nmgp_cmp_hidden['ap_reconexion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_reconexion" value="<?php echo $this->form_encode_input($this->ap_reconexion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_reconexion_1 = explode(";", trim($this->ap_reconexion));
  } 
  else
  {
      if (empty($this->ap_reconexion))
      {
          $this->ap_reconexion_1= array(); 
          $this->ap_reconexion= "N";
      } 
      else
      {
          $this->ap_reconexion_1= $this->ap_reconexion; 
          $this->ap_reconexion= ""; 
          foreach ($this->ap_reconexion_1 as $cada_ap_reconexion)
          {
             if (!empty($ap_reconexion))
             {
                 $this->ap_reconexion.= ";"; 
             } 
             $this->ap_reconexion.= $cada_ap_reconexion; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_ap_reconexion_line" id="hidden_field_data_ap_reconexion" style="<?php echo $sStyleHidden_ap_reconexion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_reconexion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ap_reconexion_label" style=""><span id="id_label_ap_reconexion"><?php echo $this->nm_new_label['ap_reconexion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_reconexion"]) &&  $this->nmgp_cmp_readonly["ap_reconexion"] == "on") { 

$ap_reconexion_look = "";
 if ($this->ap_reconexion == "S") { $ap_reconexion_look .= "" ;} 
 if (empty($ap_reconexion_look)) { $ap_reconexion_look = $this->ap_reconexion; }
?>
<input type="hidden" name="ap_reconexion" value="<?php echo $this->form_encode_input($ap_reconexion) . "\">" . $ap_reconexion_look . ""; ?>
<?php } else { ?>

<?php

$ap_reconexion_look = "";
 if ($this->ap_reconexion == "S") { $ap_reconexion_look .= "" ;} 
 if (empty($ap_reconexion_look)) { $ap_reconexion_look = $this->ap_reconexion; }
?>
<span id="id_read_on_ap_reconexion" class="css_ap_reconexion_line" style="<?php echo $sStyleReadLab_ap_reconexion; ?>"><?php echo $this->form_format_readonly("ap_reconexion", $this->form_encode_input($ap_reconexion_look)); ?></span><span id="id_read_off_ap_reconexion" class="css_read_off_ap_reconexion css_ap_reconexion_line" style="<?php echo $sStyleReadInp_ap_reconexion; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_reconexion\" style=\"display: inline-block\" class=\"css_ap_reconexion_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_reconexion_line"><?php $tempOptionId = "id-opt-ap_reconexion" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_reconexion sc-ui-checkbox-ap_reconexion" name="ap_reconexion[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_reconexion'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_reconexion_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_reconexion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_reconexion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['ap_materiales']))
   {
       $this->nm_new_label['ap_materiales'] = "" . $this->Ini->Nm_lang['lang_materiales'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $ap_materiales = $this->ap_materiales;
   $sStyleHidden_ap_materiales = '';
   if (isset($this->nmgp_cmp_hidden['ap_materiales']) && $this->nmgp_cmp_hidden['ap_materiales'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['ap_materiales']);
       $sStyleHidden_ap_materiales = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_ap_materiales = 'display: none;';
   $sStyleReadInp_ap_materiales = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['ap_materiales']) && $this->nmgp_cmp_readonly['ap_materiales'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['ap_materiales']);
       $sStyleReadLab_ap_materiales = '';
       $sStyleReadInp_ap_materiales = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['ap_materiales']) && $this->nmgp_cmp_hidden['ap_materiales'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="ap_materiales" value="<?php echo $this->form_encode_input($this->ap_materiales) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php 
  if ($this->nmgp_opcao != "recarga") 
  {
      $this->ap_materiales_1 = explode(";", trim($this->ap_materiales));
  } 
  else
  {
      if (empty($this->ap_materiales))
      {
          $this->ap_materiales_1= array(); 
          $this->ap_materiales= "N";
      } 
      else
      {
          $this->ap_materiales_1= $this->ap_materiales; 
          $this->ap_materiales= ""; 
          foreach ($this->ap_materiales_1 as $cada_ap_materiales)
          {
             if (!empty($ap_materiales))
             {
                 $this->ap_materiales.= ";"; 
             } 
             $this->ap_materiales.= $cada_ap_materiales; 
          } 
      } 
  } 
?> 

    <TD class="scFormDataOdd css_ap_materiales_line" id="hidden_field_data_ap_materiales" style="<?php echo $sStyleHidden_ap_materiales; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_ap_materiales_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_ap_materiales_label" style=""><span id="id_label_ap_materiales"><?php echo $this->nm_new_label['ap_materiales']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["ap_materiales"]) &&  $this->nmgp_cmp_readonly["ap_materiales"] == "on") { 

$ap_materiales_look = "";
 if ($this->ap_materiales == "S") { $ap_materiales_look .= "" ;} 
 if (empty($ap_materiales_look)) { $ap_materiales_look = $this->ap_materiales; }
?>
<input type="hidden" name="ap_materiales" value="<?php echo $this->form_encode_input($ap_materiales) . "\">" . $ap_materiales_look . ""; ?>
<?php } else { ?>

<?php

$ap_materiales_look = "";
 if ($this->ap_materiales == "S") { $ap_materiales_look .= "" ;} 
 if (empty($ap_materiales_look)) { $ap_materiales_look = $this->ap_materiales; }
?>
<span id="id_read_on_ap_materiales" class="css_ap_materiales_line" style="<?php echo $sStyleReadLab_ap_materiales; ?>"><?php echo $this->form_format_readonly("ap_materiales", $this->form_encode_input($ap_materiales_look)); ?></span><span id="id_read_off_ap_materiales" class="css_read_off_ap_materiales css_ap_materiales_line" style="<?php echo $sStyleReadInp_ap_materiales; ?>"><?php echo "<div id=\"idAjaxCheckbox_ap_materiales\" style=\"display: inline-block\" class=\"css_ap_materiales_line\">\r\n"; ?><TABLE cellspacing=0 cellpadding=0 border=0><TR>
  <TD class="scFormDataFontOdd css_ap_materiales_line"><?php $tempOptionId = "id-opt-ap_materiales" . $sc_seq_vert . "-1"; ?>
 <div class="sc switch">
 <input type=checkbox id="<?php echo $tempOptionId ?>" class="sc-ui-checkbox-ap_materiales sc-ui-checkbox-ap_materiales" name="ap_materiales[]" value="S"
<?php $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['Lookup_ap_materiales'][] = 'S'; ?>
<?php  if (in_array("S", $this->ap_materiales_1))  { echo " checked" ;} ?> onClick="" ><span></span>
<label for="<?php echo $tempOptionId ?>"></label> </div>
</TD>
</TR></TABLE>
<?php echo "</div>\r\n"; ?></span><?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_ap_materiales_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_ap_materiales_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_ap_contrato_dumb = ('' == $sStyleHidden_ap_contrato) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ap_contrato_dumb" style="<?php echo $sStyleHidden_ap_contrato_dumb; ?>"></TD>
<?php $sStyleHidden_ap_servicio_dumb = ('' == $sStyleHidden_ap_servicio) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ap_servicio_dumb" style="<?php echo $sStyleHidden_ap_servicio_dumb; ?>"></TD>
<?php $sStyleHidden_ap_personalizada_dumb = ('' == $sStyleHidden_ap_personalizada) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ap_personalizada_dumb" style="<?php echo $sStyleHidden_ap_personalizada_dumb; ?>"></TD>
<?php $sStyleHidden_ap_libre_dumb = ('' == $sStyleHidden_ap_libre) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ap_libre_dumb" style="<?php echo $sStyleHidden_ap_libre_dumb; ?>"></TD>
<?php $sStyleHidden_ap_reconexion_dumb = ('' == $sStyleHidden_ap_reconexion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ap_reconexion_dumb" style="<?php echo $sStyleHidden_ap_reconexion_dumb; ?>"></TD>
<?php $sStyleHidden_ap_materiales_dumb = ('' == $sStyleHidden_ap_materiales) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_ap_materiales_dumb" style="<?php echo $sStyleHidden_ap_materiales_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_2"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['productos']))
    {
        $this->nm_new_label['productos'] = "" . $this->Ini->Nm_lang['lang_productos'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $productos = $this->productos;
   $sStyleHidden_productos = '';
   if (isset($this->nmgp_cmp_hidden['productos']) && $this->nmgp_cmp_hidden['productos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['productos']);
       $sStyleHidden_productos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_productos = 'display: none;';
   $sStyleReadInp_productos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['productos']) && $this->nmgp_cmp_readonly['productos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['productos']);
       $sStyleReadLab_productos = '';
       $sStyleReadInp_productos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['productos']) && $this->nmgp_cmp_hidden['productos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="productos" value="<?php echo $this->form_encode_input($productos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_productos_line" id="hidden_field_data_productos" style="<?php echo $sStyleHidden_productos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_productos_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_productos_label" style=""><span id="id_label_productos"><?php echo $this->nm_new_label['productos']; ?></span></span><br>
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_productos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_form_insert'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_form_update'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_liga_tp_pag'] = 'total';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['embutida_parms'] = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['foreign_key']['pap_aportacion'] = $this->nmgp_dados_form['ap_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['where_filter'] = "pap_aportacion = " . $this->nmgp_dados_form['ap_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['where_detal']  = "pap_aportacion = " . $this->nmgp_dados_form['ap_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_aportaciones']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init'] ]['form_jap_productos_aportacion']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_jap_aportaciones_empty.htm' : $this->Ini->link_form_jap_productos_aportacion_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y&sc_ifr_height=400';
if (isset($this->Ini->sc_lig_target['C_@scinf_productos']) && 'nmsc_iframe_liga_form_jap_productos_aportacion' != $this->Ini->sc_lig_target['C_@scinf_productos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_productos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['form_jap_productos_aportacion_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_productos'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_form_jap_productos_aportacion"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="400" width="100%" name="nmsc_iframe_liga_form_jap_productos_aportacion"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_productos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_productos_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R")
{
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_3";
        echo "<img id=\"NM_sep_3\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['navpage'] == "on")
{
?> 
     <span nowrap id="sc_b_navpage_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['btn_label'][''];
        }
?>
<?php
if (is_file($this->Ini->root . $this->Ini->path_img_global . $this->Ini->Img_sep_form))
{
    if (isset($NM_btn) && $NM_btn)
    {
        $NM_btn = false;
        $NM_ult_sep = "NM_sep_4";
        echo "<img id=\"NM_sep_4\" class=\"NM_toolbar_sep\" style=\"vertical-align: middle\" src=\"" . $this->Ini->path_botoes . $this->Ini->Img_sep_form . "\" />";
    }
}
?>
 
<?php
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
  $nm_sc_blocos_da_pag = array(0,1,2);

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
  $nm_sc_blocos_da_pag = array(0,1,2);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_jap_aportaciones");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_jap_aportaciones");
 parent.scAjaxDetailHeight("form_jap_aportaciones", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_jap_aportaciones", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_jap_aportaciones", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['sc_modal'])
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
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-1").length && $("#sys_separator.sc-unique-btn-1").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-7").length && $("#sys_separator.sc-unique-btn-7").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-13").length && $("#sys_separator.sc-unique-btn-13").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-13").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-18").length && $("#sys_separator.sc-unique-btn-18").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-2").length && $("#sc_b_new_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-3").length && $("#sc_b_ins_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-4").length && $("#sc_b_sai_t.sc-unique-btn-4").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-5").length && $("#sc_b_upd_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-6").length && $("#sc_b_del_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_del_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('excluir');
			 return;
		}
	}
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
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F5('<?php echo $nm_url_saida; ?>');
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-11").length && $("#sc_b_sai_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-12").length && $("#sc_b_sai_t.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-14").length && $("#sc_b_ini_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-15").length && $("#sc_b_ret_b.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-16").length && $("#sc_b_avc_b.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-17").length && $("#sc_b_fim_b.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_aportaciones']['buttonStatus'] = $this->nmgp_botoes;
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
