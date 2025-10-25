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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " inv_inventario"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " inv_inventario"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT" />
 <META http-equiv="Last-Modified" content="<?php echo gmdate('D, d M Y H:i:s') ?> GMT" />
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate" />
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0" />
 <META http-equiv="Pragma" content="no-cache" />
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
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
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="<?php echo $this->Ini->url_lib_js ?>frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <link rel='stylesheet' href='<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/multiple-select/multiple-select.css' type='text/css'/>
 <script type='text/javascript' src='<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/multiple-select/jquery.multiple.select.js'></script>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_grid.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_grid<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_filter.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_filter<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_inv_inventario/form_inv_inventario_inline_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_inv_inventario_inline_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['last'] : 'off'); ?>";
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
}
function navpage_atualiza(str_navpage)
{
}
<?php

include_once('form_inv_inventario_inline_jquery.php');

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
<?php
  if (is_file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js"))
  {
      $Tb_err_js = file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js");
      foreach ($Tb_err_js as $Lines)
      {
          if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Lines = sc_convert_encoding($Lines, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          echo " " . $Lines;
      }
  }
  if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
  {
      $Msg_Inval = sc_convert_encoding("Invalido", $_SESSION['scriptcase']['charset'], "UTF-8");
  }
  echo " var SC_crit_inv = \"" . $Msg_Inval . "\";\r\n";
?>
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
     $(".scBtnGrpClick").mouseup(function(){
          event.preventDefault();
          if(event.target !== event.currentTarget) return;
          if($(this).find("a").prop('href') != '')
          {
              $(this).find("a").click();
          }
          else
          {
              eval($(this).find("a").prop('onclick'));
          }
  });
  setTimeout(function() {
  scJQElementsAdd('');

  scJQGeneralAdd();

  }, 50);
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
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_inv_inventario']['error_buffer']) && '' != $_SESSION['scriptcase']['form_inv_inventario']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_inv_inventario']['error_buffer'];
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
 include_once("form_inv_inventario_inline_js0.php");
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
<form  id= "id_Fdyn_search" name="F1" method="post" 
               action="form_inv_inventario_inline.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['insert_validation']; ?>">
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
<?php
$_SESSION['scriptcase']['error_span_title']['form_inv_inventario_inline'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_inv_inventario_inline'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R")
{
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label'][''];
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
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-14';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label'][''];
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
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-16';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['exit'];
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
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['inv_bodega_']))
   {
       $this->nmgp_cmp_hidden['inv_bodega_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['inv_empresa_']))
   {
       $this->nmgp_cmp_hidden['inv_empresa_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['inv_id_']))
   {
       $this->nmgp_cmp_hidden['inv_id_'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['inv_estado_']))
   {
       $this->nmgp_cmp_hidden['inv_estado_'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_id_']))
           {
               $this->nmgp_cmp_readonly['inv_id_'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_bodega_']))
           {
               $this->nmgp_cmp_readonly['inv_bodega_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['inv_id_']))
    {
        $this->nm_new_label['inv_id_'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_id_ = $this->inv_id_;
   if (!isset($this->nmgp_cmp_hidden['inv_id_']))
   {
       $this->nmgp_cmp_hidden['inv_id_'] = 'off';
   }
   $sStyleHidden_inv_id_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_id_']) && $this->nmgp_cmp_hidden['inv_id_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_id_']);
       $sStyleHidden_inv_id_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_id_ = 'display: none;';
   $sStyleReadInp_inv_id_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_id_"]) &&  $this->nmgp_cmp_readonly["inv_id_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_id_']);
       $sStyleReadLab_inv_id_ = '';
       $sStyleReadInp_inv_id_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_id_']) && $this->nmgp_cmp_hidden['inv_id_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_id_" value="<?php echo $this->form_encode_input($inv_id_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_id__label" id="hidden_field_label_inv_id_" style="<?php echo $sStyleHidden_inv_id_; ?>"><span id="id_label_inv_id_"><?php echo $this->nm_new_label['inv_id_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_id__line" id="hidden_field_data_inv_id_" style="<?php echo $sStyleHidden_inv_id_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_id__line" style="vertical-align: top;padding: 0px"><span id="id_read_on_inv_id_" class="css_inv_id__line" style="<?php echo $sStyleReadLab_inv_id_; ?>"><?php echo $this->form_format_readonly("inv_id_", $this->form_encode_input($this->inv_id_)); ?></span><span id="id_read_off_inv_id_" class="css_read_off_inv_id_" style="<?php echo $sStyleReadInp_inv_id_; ?>"><input type="hidden" name="inv_id_" value="<?php echo $this->form_encode_input($inv_id_) . "\">"?><span id="id_ajax_label_inv_id_"><?php echo nl2br($inv_id_); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_id__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_id__text"></span></td></tr></table></td></tr></table></TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_producto_']))
           {
               $this->nmgp_cmp_readonly['inv_producto_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['inv_bodega_']))
    {
        $this->nm_new_label['inv_bodega_'] = "" . $this->Ini->Nm_lang['lang_bodega'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_bodega_ = $this->inv_bodega_;
   if (!isset($this->nmgp_cmp_hidden['inv_bodega_']))
   {
       $this->nmgp_cmp_hidden['inv_bodega_'] = 'off';
   }
   $sStyleHidden_inv_bodega_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_bodega_']) && $this->nmgp_cmp_hidden['inv_bodega_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_bodega_']);
       $sStyleHidden_inv_bodega_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_bodega_ = 'display: none;';
   $sStyleReadInp_inv_bodega_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_bodega_"]) &&  $this->nmgp_cmp_readonly["inv_bodega_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_bodega_']);
       $sStyleReadLab_inv_bodega_ = '';
       $sStyleReadInp_inv_bodega_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_bodega_']) && $this->nmgp_cmp_hidden['inv_bodega_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_bodega_" value="<?php echo $this->form_encode_input($inv_bodega_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_bodega__label" id="hidden_field_label_inv_bodega_" style="<?php echo $sStyleHidden_inv_bodega_; ?>"><span id="id_label_inv_bodega_"><?php echo $this->nm_new_label['inv_bodega_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_bodega__line" id="hidden_field_data_inv_bodega_" style="<?php echo $sStyleHidden_inv_bodega_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_bodega__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["inv_bodega_"]) &&  $this->nmgp_cmp_readonly["inv_bodega_"] == "on")) { 

 ?>
<input type="hidden" name="inv_bodega_" value="<?php echo $this->form_encode_input($inv_bodega_) . "\"><span id=\"id_ajax_label_inv_bodega_\">" . $inv_bodega_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_inv_bodega_" class="sc-ui-readonly-inv_bodega_ css_inv_bodega__line" style="<?php echo $sStyleReadLab_inv_bodega_; ?>"><?php echo $this->form_format_readonly("inv_bodega_", $this->form_encode_input($this->inv_bodega_)); ?></span><span id="id_read_off_inv_bodega_" class="css_read_off_inv_bodega_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_bodega_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_bodega__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_bodega_" type=text name="inv_bodega_" value="<?php echo $this->form_encode_input($inv_bodega_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> alt="{datatype: 'integer', maxLength: 9, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_bodega_']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['inv_bodega_']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_bodega_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_bodega__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_bodega__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_cantidad_']))
           {
               $this->nmgp_cmp_readonly['inv_cantidad_'] = 'on';
           }
?>


   <?php
   if (!isset($this->nm_new_label['inv_producto_']))
   {
       $this->nm_new_label['inv_producto_'] = "" . $this->Ini->Nm_lang['lang_producto'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_producto_ = $this->inv_producto_;
   $sStyleHidden_inv_producto_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_producto_']) && $this->nmgp_cmp_hidden['inv_producto_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_producto_']);
       $sStyleHidden_inv_producto_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_producto_ = 'display: none;';
   $sStyleReadInp_inv_producto_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_producto_"]) &&  $this->nmgp_cmp_readonly["inv_producto_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_producto_']);
       $sStyleReadLab_inv_producto_ = '';
       $sStyleReadInp_inv_producto_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_producto_']) && $this->nmgp_cmp_hidden['inv_producto_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="inv_producto_" value="<?php echo $this->form_encode_input($this->inv_producto_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_producto__label" id="hidden_field_label_inv_producto_" style="<?php echo $sStyleHidden_inv_producto_; ?>"><span id="id_label_inv_producto_"><?php echo $this->nm_new_label['inv_producto_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_producto__line" id="hidden_field_data_inv_producto_" style="<?php echo $sStyleHidden_inv_producto_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_producto__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["inv_producto_"]) &&  $this->nmgp_cmp_readonly["inv_producto_"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_'] = array(); 
    }

   $old_value_inv_id_ = $this->inv_id_;
   $old_value_inv_bodega_ = $this->inv_bodega_;
   $old_value_inv_cantidad_ = $this->inv_cantidad_;
   $old_value_inv_costo_promedio_ = $this->inv_costo_promedio_;
   $old_value_inv_total_inventario_ = $this->inv_total_inventario_;
   $old_value_inv_punto_reposicion_ = $this->inv_punto_reposicion_;
   $old_value_inv_stock_maximo_ = $this->inv_stock_maximo_;
   $old_value_inv_stock_minimo_ = $this->inv_stock_minimo_;
   $this->nm_tira_formatacao();


   $unformatted_value_inv_id_ = $this->inv_id_;
   $unformatted_value_inv_bodega_ = $this->inv_bodega_;
   $unformatted_value_inv_cantidad_ = $this->inv_cantidad_;
   $unformatted_value_inv_costo_promedio_ = $this->inv_costo_promedio_;
   $unformatted_value_inv_total_inventario_ = $this->inv_total_inventario_;
   $unformatted_value_inv_punto_reposicion_ = $this->inv_punto_reposicion_;
   $unformatted_value_inv_stock_maximo_ = $this->inv_stock_maximo_;
   $unformatted_value_inv_stock_minimo_ = $this->inv_stock_minimo_;

   $nm_comando = "SELECT pro_codigo, pro_descripcion  FROM del_producto  WHERE pro_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY pro_descripcion";

   $this->inv_id_ = $old_value_inv_id_;
   $this->inv_bodega_ = $old_value_inv_bodega_;
   $this->inv_cantidad_ = $old_value_inv_cantidad_;
   $this->inv_costo_promedio_ = $old_value_inv_costo_promedio_;
   $this->inv_total_inventario_ = $old_value_inv_total_inventario_;
   $this->inv_punto_reposicion_ = $old_value_inv_punto_reposicion_;
   $this->inv_stock_maximo_ = $old_value_inv_stock_maximo_;
   $this->inv_stock_minimo_ = $old_value_inv_stock_minimo_;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[0] . " - " . $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_producto_'][] = $rs->fields[0];
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
   $inv_producto__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->inv_producto__1))
          {
              foreach ($this->inv_producto__1 as $tmp_inv_producto_)
              {
                  if (trim($tmp_inv_producto_) === trim($cadaselect[1])) {$inv_producto__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->inv_producto_) && trim($this->inv_producto_) === trim($cadaselect[1])) {$inv_producto__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="inv_producto_" value="<?php echo $this->form_encode_input($inv_producto_) . "\"><span id=\"id_ajax_label_inv_producto_\">" . $inv_producto__look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_inv_producto_();
   $x = 0 ; 
   $inv_producto__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->inv_producto__1))
          {
              foreach ($this->inv_producto__1 as $tmp_inv_producto_)
              {
                  if (trim($tmp_inv_producto_) === trim($cadaselect[1])) {$inv_producto__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->inv_producto_) && trim($this->inv_producto_) === trim($cadaselect[1])) { $inv_producto__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($inv_producto__look))
          {
              $inv_producto__look = $this->inv_producto_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_inv_producto_\" class=\"css_inv_producto__line\" style=\"" .  $sStyleReadLab_inv_producto_ . "\">" . $this->form_format_readonly("inv_producto_", $this->form_encode_input($inv_producto__look)) . "</span><span id=\"id_read_off_inv_producto_\" class=\"css_read_off_inv_producto_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_inv_producto_ . "\">";
   echo " <span id=\"idAjaxSelect_inv_producto_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_inv_producto__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_inv_producto_\" name=\"inv_producto_\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->inv_producto_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->inv_producto_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_producto__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_producto__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_costo_promedio_']))
           {
               $this->nmgp_cmp_readonly['inv_costo_promedio_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['inv_cantidad_']))
    {
        $this->nm_new_label['inv_cantidad_'] = "" . $this->Ini->Nm_lang['lang_existencia'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_cantidad_ = $this->inv_cantidad_;
   $sStyleHidden_inv_cantidad_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_cantidad_']) && $this->nmgp_cmp_hidden['inv_cantidad_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_cantidad_']);
       $sStyleHidden_inv_cantidad_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_cantidad_ = 'display: none;';
   $sStyleReadInp_inv_cantidad_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_cantidad_"]) &&  $this->nmgp_cmp_readonly["inv_cantidad_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_cantidad_']);
       $sStyleReadLab_inv_cantidad_ = '';
       $sStyleReadInp_inv_cantidad_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_cantidad_']) && $this->nmgp_cmp_hidden['inv_cantidad_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_cantidad_" value="<?php echo $this->form_encode_input($inv_cantidad_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_cantidad__label" id="hidden_field_label_inv_cantidad_" style="<?php echo $sStyleHidden_inv_cantidad_; ?>"><span id="id_label_inv_cantidad_"><?php echo $this->nm_new_label['inv_cantidad_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_cantidad__line" id="hidden_field_data_inv_cantidad_" style="<?php echo $sStyleHidden_inv_cantidad_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_cantidad__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["inv_cantidad_"]) &&  $this->nmgp_cmp_readonly["inv_cantidad_"] == "on")) { 

 ?>
<input type="hidden" name="inv_cantidad_" value="<?php echo $this->form_encode_input($inv_cantidad_) . "\"><span id=\"id_ajax_label_inv_cantidad_\">" . $inv_cantidad_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_inv_cantidad_" class="sc-ui-readonly-inv_cantidad_ css_inv_cantidad__line" style="<?php echo $sStyleReadLab_inv_cantidad_; ?>"><?php echo $this->form_format_readonly("inv_cantidad_", $this->form_encode_input($this->inv_cantidad_)); ?></span><span id="id_read_off_inv_cantidad_" class="css_read_off_inv_cantidad_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_cantidad_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_cantidad__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_cantidad_" type=text name="inv_cantidad_" value="<?php echo $this->form_encode_input($inv_cantidad_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_cantidad_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['inv_cantidad_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_cantidad_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_cantidad__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_cantidad__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_total_inventario_']))
           {
               $this->nmgp_cmp_readonly['inv_total_inventario_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['inv_costo_promedio_']))
    {
        $this->nm_new_label['inv_costo_promedio_'] = "" . $this->Ini->Nm_lang['lang_costo_promedio'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_costo_promedio_ = $this->inv_costo_promedio_;
   $sStyleHidden_inv_costo_promedio_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_costo_promedio_']) && $this->nmgp_cmp_hidden['inv_costo_promedio_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_costo_promedio_']);
       $sStyleHidden_inv_costo_promedio_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_costo_promedio_ = 'display: none;';
   $sStyleReadInp_inv_costo_promedio_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_costo_promedio_"]) &&  $this->nmgp_cmp_readonly["inv_costo_promedio_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_costo_promedio_']);
       $sStyleReadLab_inv_costo_promedio_ = '';
       $sStyleReadInp_inv_costo_promedio_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_costo_promedio_']) && $this->nmgp_cmp_hidden['inv_costo_promedio_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_costo_promedio_" value="<?php echo $this->form_encode_input($inv_costo_promedio_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_costo_promedio__label" id="hidden_field_label_inv_costo_promedio_" style="<?php echo $sStyleHidden_inv_costo_promedio_; ?>"><span id="id_label_inv_costo_promedio_"><?php echo $this->nm_new_label['inv_costo_promedio_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_costo_promedio__line" id="hidden_field_data_inv_costo_promedio_" style="<?php echo $sStyleHidden_inv_costo_promedio_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_costo_promedio__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["inv_costo_promedio_"]) &&  $this->nmgp_cmp_readonly["inv_costo_promedio_"] == "on")) { 

 ?>
<input type="hidden" name="inv_costo_promedio_" value="<?php echo $this->form_encode_input($inv_costo_promedio_) . "\"><span id=\"id_ajax_label_inv_costo_promedio_\">" . $inv_costo_promedio_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_inv_costo_promedio_" class="sc-ui-readonly-inv_costo_promedio_ css_inv_costo_promedio__line" style="<?php echo $sStyleReadLab_inv_costo_promedio_; ?>"><?php echo $this->form_format_readonly("inv_costo_promedio_", $this->form_encode_input($this->inv_costo_promedio_)); ?></span><span id="id_read_off_inv_costo_promedio_" class="css_read_off_inv_costo_promedio_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_costo_promedio_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_costo_promedio__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_costo_promedio_" type=text name="inv_costo_promedio_" value="<?php echo $this->form_encode_input($inv_costo_promedio_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 4, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_costo_promedio_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['inv_costo_promedio_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_costo_promedio_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_costo_promedio__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_costo_promedio__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['inv_total_inventario_']))
    {
        $this->nm_new_label['inv_total_inventario_'] = "" . $this->Ini->Nm_lang['lang_total_inventario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_total_inventario_ = $this->inv_total_inventario_;
   $sStyleHidden_inv_total_inventario_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_total_inventario_']) && $this->nmgp_cmp_hidden['inv_total_inventario_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_total_inventario_']);
       $sStyleHidden_inv_total_inventario_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_total_inventario_ = 'display: none;';
   $sStyleReadInp_inv_total_inventario_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_total_inventario_"]) &&  $this->nmgp_cmp_readonly["inv_total_inventario_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_total_inventario_']);
       $sStyleReadLab_inv_total_inventario_ = '';
       $sStyleReadInp_inv_total_inventario_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_total_inventario_']) && $this->nmgp_cmp_hidden['inv_total_inventario_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_total_inventario_" value="<?php echo $this->form_encode_input($inv_total_inventario_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_total_inventario__label" id="hidden_field_label_inv_total_inventario_" style="<?php echo $sStyleHidden_inv_total_inventario_; ?>"><span id="id_label_inv_total_inventario_"><?php echo $this->nm_new_label['inv_total_inventario_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_total_inventario__line" id="hidden_field_data_inv_total_inventario_" style="<?php echo $sStyleHidden_inv_total_inventario_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_total_inventario__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["inv_total_inventario_"]) &&  $this->nmgp_cmp_readonly["inv_total_inventario_"] == "on")) { 

 ?>
<input type="hidden" name="inv_total_inventario_" value="<?php echo $this->form_encode_input($inv_total_inventario_) . "\"><span id=\"id_ajax_label_inv_total_inventario_\">" . $inv_total_inventario_ . "</span>"; ?>
<?php } else { ?>
<span id="id_read_on_inv_total_inventario_" class="sc-ui-readonly-inv_total_inventario_ css_inv_total_inventario__line" style="<?php echo $sStyleReadLab_inv_total_inventario_; ?>"><?php echo $this->form_format_readonly("inv_total_inventario_", $this->form_encode_input($this->inv_total_inventario_)); ?></span><span id="id_read_off_inv_total_inventario_" class="css_read_off_inv_total_inventario_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_total_inventario_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_total_inventario__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_total_inventario_" type=text name="inv_total_inventario_" value="<?php echo $this->form_encode_input($inv_total_inventario_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 2, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_total_inventario_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['inv_total_inventario_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_total_inventario_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_total_inventario__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_total_inventario__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['inv_punto_reposicion_']))
    {
        $this->nm_new_label['inv_punto_reposicion_'] = "" . $this->Ini->Nm_lang['lang_punto_reposicion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_punto_reposicion_ = $this->inv_punto_reposicion_;
   $sStyleHidden_inv_punto_reposicion_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_punto_reposicion_']) && $this->nmgp_cmp_hidden['inv_punto_reposicion_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_punto_reposicion_']);
       $sStyleHidden_inv_punto_reposicion_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_punto_reposicion_ = 'display: none;';
   $sStyleReadInp_inv_punto_reposicion_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inv_punto_reposicion_']) && $this->nmgp_cmp_readonly['inv_punto_reposicion_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_punto_reposicion_']);
       $sStyleReadLab_inv_punto_reposicion_ = '';
       $sStyleReadInp_inv_punto_reposicion_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_punto_reposicion_']) && $this->nmgp_cmp_hidden['inv_punto_reposicion_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_punto_reposicion_" value="<?php echo $this->form_encode_input($inv_punto_reposicion_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_punto_reposicion__label" id="hidden_field_label_inv_punto_reposicion_" style="<?php echo $sStyleHidden_inv_punto_reposicion_; ?>"><span id="id_label_inv_punto_reposicion_"><?php echo $this->nm_new_label['inv_punto_reposicion_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_punto_reposicion__line" id="hidden_field_data_inv_punto_reposicion_" style="<?php echo $sStyleHidden_inv_punto_reposicion_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_punto_reposicion__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["inv_punto_reposicion_"]) &&  $this->nmgp_cmp_readonly["inv_punto_reposicion_"] == "on") { 

 ?>
<input type="hidden" name="inv_punto_reposicion_" value="<?php echo $this->form_encode_input($inv_punto_reposicion_) . "\">" . $inv_punto_reposicion_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_inv_punto_reposicion_" class="sc-ui-readonly-inv_punto_reposicion_ css_inv_punto_reposicion__line" style="<?php echo $sStyleReadLab_inv_punto_reposicion_; ?>"><?php echo $this->form_format_readonly("inv_punto_reposicion_", $this->form_encode_input($this->inv_punto_reposicion_)); ?></span><span id="id_read_off_inv_punto_reposicion_" class="css_read_off_inv_punto_reposicion_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_punto_reposicion_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_punto_reposicion__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_punto_reposicion_" type=text name="inv_punto_reposicion_" value="<?php echo $this->form_encode_input($inv_punto_reposicion_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_punto_reposicion_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['inv_punto_reposicion_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_punto_reposicion_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_punto_reposicion__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_punto_reposicion__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['inv_stock_maximo_']))
    {
        $this->nm_new_label['inv_stock_maximo_'] = "" . $this->Ini->Nm_lang['lang_existencia_maxima'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_stock_maximo_ = $this->inv_stock_maximo_;
   $sStyleHidden_inv_stock_maximo_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_stock_maximo_']) && $this->nmgp_cmp_hidden['inv_stock_maximo_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_stock_maximo_']);
       $sStyleHidden_inv_stock_maximo_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_stock_maximo_ = 'display: none;';
   $sStyleReadInp_inv_stock_maximo_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inv_stock_maximo_']) && $this->nmgp_cmp_readonly['inv_stock_maximo_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_stock_maximo_']);
       $sStyleReadLab_inv_stock_maximo_ = '';
       $sStyleReadInp_inv_stock_maximo_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_stock_maximo_']) && $this->nmgp_cmp_hidden['inv_stock_maximo_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_stock_maximo_" value="<?php echo $this->form_encode_input($inv_stock_maximo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_stock_maximo__label" id="hidden_field_label_inv_stock_maximo_" style="<?php echo $sStyleHidden_inv_stock_maximo_; ?>"><span id="id_label_inv_stock_maximo_"><?php echo $this->nm_new_label['inv_stock_maximo_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_stock_maximo__line" id="hidden_field_data_inv_stock_maximo_" style="<?php echo $sStyleHidden_inv_stock_maximo_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_stock_maximo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["inv_stock_maximo_"]) &&  $this->nmgp_cmp_readonly["inv_stock_maximo_"] == "on") { 

 ?>
<input type="hidden" name="inv_stock_maximo_" value="<?php echo $this->form_encode_input($inv_stock_maximo_) . "\">" . $inv_stock_maximo_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_inv_stock_maximo_" class="sc-ui-readonly-inv_stock_maximo_ css_inv_stock_maximo__line" style="<?php echo $sStyleReadLab_inv_stock_maximo_; ?>"><?php echo $this->form_format_readonly("inv_stock_maximo_", $this->form_encode_input($this->inv_stock_maximo_)); ?></span><span id="id_read_off_inv_stock_maximo_" class="css_read_off_inv_stock_maximo_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_stock_maximo_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_stock_maximo__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_stock_maximo_" type=text name="inv_stock_maximo_" value="<?php echo $this->form_encode_input($inv_stock_maximo_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_stock_maximo_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['inv_stock_maximo_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_stock_maximo_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_stock_maximo__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_stock_maximo__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>
<?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['inv_unidad_']))
           {
               $this->nmgp_cmp_readonly['inv_unidad_'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['inv_stock_minimo_']))
    {
        $this->nm_new_label['inv_stock_minimo_'] = "" . $this->Ini->Nm_lang['lang_existencia_minima'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_stock_minimo_ = $this->inv_stock_minimo_;
   $sStyleHidden_inv_stock_minimo_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_stock_minimo_']) && $this->nmgp_cmp_hidden['inv_stock_minimo_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_stock_minimo_']);
       $sStyleHidden_inv_stock_minimo_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_stock_minimo_ = 'display: none;';
   $sStyleReadInp_inv_stock_minimo_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inv_stock_minimo_']) && $this->nmgp_cmp_readonly['inv_stock_minimo_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_stock_minimo_']);
       $sStyleReadLab_inv_stock_minimo_ = '';
       $sStyleReadInp_inv_stock_minimo_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_stock_minimo_']) && $this->nmgp_cmp_hidden['inv_stock_minimo_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_stock_minimo_" value="<?php echo $this->form_encode_input($inv_stock_minimo_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_stock_minimo__label" id="hidden_field_label_inv_stock_minimo_" style="<?php echo $sStyleHidden_inv_stock_minimo_; ?>"><span id="id_label_inv_stock_minimo_"><?php echo $this->nm_new_label['inv_stock_minimo_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_stock_minimo__line" id="hidden_field_data_inv_stock_minimo_" style="<?php echo $sStyleHidden_inv_stock_minimo_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_stock_minimo__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["inv_stock_minimo_"]) &&  $this->nmgp_cmp_readonly["inv_stock_minimo_"] == "on") { 

 ?>
<input type="hidden" name="inv_stock_minimo_" value="<?php echo $this->form_encode_input($inv_stock_minimo_) . "\">" . $inv_stock_minimo_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_inv_stock_minimo_" class="sc-ui-readonly-inv_stock_minimo_ css_inv_stock_minimo__line" style="<?php echo $sStyleReadLab_inv_stock_minimo_; ?>"><?php echo $this->form_format_readonly("inv_stock_minimo_", $this->form_encode_input($this->inv_stock_minimo_)); ?></span><span id="id_read_off_inv_stock_minimo_" class="css_read_off_inv_stock_minimo_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_stock_minimo_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_stock_minimo__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_stock_minimo_" type=text name="inv_stock_minimo_" value="<?php echo $this->form_encode_input($inv_stock_minimo_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> alt="{datatype: 'decimal', maxLength: 15, precision: 6, decimalSep: '<?php echo str_replace("'", "\'", $this->field_config['inv_stock_minimo_']['symbol_dec']); ?>', thousandsSep: '', thousandsFormat: <?php echo $this->field_config['inv_stock_minimo_']['symbol_fmt']; ?>, manualDecimals: true, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['inv_stock_minimo_']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_stock_minimo__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_stock_minimo__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['inv_unidad_']))
   {
       $this->nm_new_label['inv_unidad_'] = "" . $this->Ini->Nm_lang['lang_unidad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_unidad_ = $this->inv_unidad_;
   $sStyleHidden_inv_unidad_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_unidad_']) && $this->nmgp_cmp_hidden['inv_unidad_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_unidad_']);
       $sStyleHidden_inv_unidad_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_unidad_ = 'display: none;';
   $sStyleReadInp_inv_unidad_ = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["inv_unidad_"]) &&  $this->nmgp_cmp_readonly["inv_unidad_"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_unidad_']);
       $sStyleReadLab_inv_unidad_ = '';
       $sStyleReadInp_inv_unidad_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_unidad_']) && $this->nmgp_cmp_hidden['inv_unidad_'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="inv_unidad_" value="<?php echo $this->form_encode_input($this->inv_unidad_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_unidad__label" id="hidden_field_label_inv_unidad_" style="<?php echo $sStyleHidden_inv_unidad_; ?>"><span id="id_label_inv_unidad_"><?php echo $this->nm_new_label['inv_unidad_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_unidad__line" id="hidden_field_data_inv_unidad_" style="<?php echo $sStyleHidden_inv_unidad_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_unidad__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || (isset($this->nmgp_cmp_readonly["inv_unidad_"]) &&  $this->nmgp_cmp_readonly["inv_unidad_"] == "on")) { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_'] = array(); 
    }

   $old_value_inv_id_ = $this->inv_id_;
   $old_value_inv_bodega_ = $this->inv_bodega_;
   $old_value_inv_cantidad_ = $this->inv_cantidad_;
   $old_value_inv_costo_promedio_ = $this->inv_costo_promedio_;
   $old_value_inv_total_inventario_ = $this->inv_total_inventario_;
   $old_value_inv_punto_reposicion_ = $this->inv_punto_reposicion_;
   $old_value_inv_stock_maximo_ = $this->inv_stock_maximo_;
   $old_value_inv_stock_minimo_ = $this->inv_stock_minimo_;
   $this->nm_tira_formatacao();


   $unformatted_value_inv_id_ = $this->inv_id_;
   $unformatted_value_inv_bodega_ = $this->inv_bodega_;
   $unformatted_value_inv_cantidad_ = $this->inv_cantidad_;
   $unformatted_value_inv_costo_promedio_ = $this->inv_costo_promedio_;
   $unformatted_value_inv_total_inventario_ = $this->inv_total_inventario_;
   $unformatted_value_inv_punto_reposicion_ = $this->inv_punto_reposicion_;
   $unformatted_value_inv_stock_maximo_ = $this->inv_stock_maximo_;
   $unformatted_value_inv_stock_minimo_ = $this->inv_stock_minimo_;

   $nm_comando = "SELECT uni_id, uni_nombre  FROM inv_unidad  where uni_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY uni_nombre";

   $this->inv_id_ = $old_value_inv_id_;
   $this->inv_bodega_ = $old_value_inv_bodega_;
   $this->inv_cantidad_ = $old_value_inv_cantidad_;
   $this->inv_costo_promedio_ = $old_value_inv_costo_promedio_;
   $this->inv_total_inventario_ = $old_value_inv_total_inventario_;
   $this->inv_punto_reposicion_ = $old_value_inv_punto_reposicion_;
   $this->inv_stock_maximo_ = $old_value_inv_stock_maximo_;
   $this->inv_stock_minimo_ = $old_value_inv_stock_minimo_;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['Lookup_inv_unidad_'][] = $rs->fields[0];
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
   $inv_unidad__look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->inv_unidad__1))
          {
              foreach ($this->inv_unidad__1 as $tmp_inv_unidad_)
              {
                  if (trim($tmp_inv_unidad_) === trim($cadaselect[1])) {$inv_unidad__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->inv_unidad_) && trim($this->inv_unidad_) === trim($cadaselect[1])) {$inv_unidad__look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="inv_unidad_" value="<?php echo $this->form_encode_input($inv_unidad_) . "\"><span id=\"id_ajax_label_inv_unidad_\">" . $inv_unidad__look . "</span>"; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_inv_unidad_();
   $x = 0 ; 
   $inv_unidad__look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->inv_unidad__1))
          {
              foreach ($this->inv_unidad__1 as $tmp_inv_unidad_)
              {
                  if (trim($tmp_inv_unidad_) === trim($cadaselect[1])) {$inv_unidad__look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->inv_unidad_) && trim($this->inv_unidad_) === trim($cadaselect[1])) { $inv_unidad__look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($inv_unidad__look))
          {
              $inv_unidad__look = $this->inv_unidad_;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_inv_unidad_\" class=\"css_inv_unidad__line\" style=\"" .  $sStyleReadLab_inv_unidad_ . "\">" . $this->form_format_readonly("inv_unidad_", $this->form_encode_input($inv_unidad__look)) . "</span><span id=\"id_read_off_inv_unidad_\" class=\"css_read_off_inv_unidad_" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_inv_unidad_ . "\">";
   echo " <span id=\"idAjaxSelect_inv_unidad_\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_inv_unidad__obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_inv_unidad_\" name=\"inv_unidad_\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->inv_unidad_) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->inv_unidad_)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_unidad__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_unidad__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['inv_empresa_']))
    {
        $this->nm_new_label['inv_empresa_'] = "Inv Empresa";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_empresa_ = $this->inv_empresa_;
   if (!isset($this->nmgp_cmp_hidden['inv_empresa_']))
   {
       $this->nmgp_cmp_hidden['inv_empresa_'] = 'off';
   }
   $sStyleHidden_inv_empresa_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_empresa_']) && $this->nmgp_cmp_hidden['inv_empresa_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_empresa_']);
       $sStyleHidden_inv_empresa_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_empresa_ = 'display: none;';
   $sStyleReadInp_inv_empresa_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inv_empresa_']) && $this->nmgp_cmp_readonly['inv_empresa_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_empresa_']);
       $sStyleReadLab_inv_empresa_ = '';
       $sStyleReadInp_inv_empresa_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_empresa_']) && $this->nmgp_cmp_hidden['inv_empresa_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_empresa_" value="<?php echo $this->form_encode_input($inv_empresa_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_empresa__label" id="hidden_field_label_inv_empresa_" style="<?php echo $sStyleHidden_inv_empresa_; ?>"><span id="id_label_inv_empresa_"><?php echo $this->nm_new_label['inv_empresa_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_empresa__line" id="hidden_field_data_inv_empresa_" style="<?php echo $sStyleHidden_inv_empresa_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_empresa__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["inv_empresa_"]) &&  $this->nmgp_cmp_readonly["inv_empresa_"] == "on") { 

 ?>
<input type="hidden" name="inv_empresa_" value="<?php echo $this->form_encode_input($inv_empresa_) . "\">" . $inv_empresa_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_inv_empresa_" class="sc-ui-readonly-inv_empresa_ css_inv_empresa__line" style="<?php echo $sStyleReadLab_inv_empresa_; ?>"><?php echo $this->form_format_readonly("inv_empresa_", $this->form_encode_input($this->inv_empresa_)); ?></span><span id="id_read_off_inv_empresa_" class="css_read_off_inv_empresa_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_empresa_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_empresa__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_empresa_" type=text name="inv_empresa_" value="<?php echo $this->form_encode_input($inv_empresa_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_empresa__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_empresa__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['inv_estado_']))
    {
        $this->nm_new_label['inv_estado_'] = "Inv Estado";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inv_estado_ = $this->inv_estado_;
   if (!isset($this->nmgp_cmp_hidden['inv_estado_']))
   {
       $this->nmgp_cmp_hidden['inv_estado_'] = 'off';
   }
   $sStyleHidden_inv_estado_ = '';
   if (isset($this->nmgp_cmp_hidden['inv_estado_']) && $this->nmgp_cmp_hidden['inv_estado_'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inv_estado_']);
       $sStyleHidden_inv_estado_ = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inv_estado_ = 'display: none;';
   $sStyleReadInp_inv_estado_ = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inv_estado_']) && $this->nmgp_cmp_readonly['inv_estado_'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inv_estado_']);
       $sStyleReadLab_inv_estado_ = '';
       $sStyleReadInp_inv_estado_ = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inv_estado_']) && $this->nmgp_cmp_hidden['inv_estado_'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inv_estado_" value="<?php echo $this->form_encode_input($inv_estado_) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_inv_estado__label" id="hidden_field_label_inv_estado_" style="<?php echo $sStyleHidden_inv_estado_; ?>"><span id="id_label_inv_estado_"><?php echo $this->nm_new_label['inv_estado_']; ?></span></TD>
    <TD class="scFormDataOdd css_inv_estado__line" id="hidden_field_data_inv_estado_" style="<?php echo $sStyleHidden_inv_estado_; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_inv_estado__line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["inv_estado_"]) &&  $this->nmgp_cmp_readonly["inv_estado_"] == "on") { 

 ?>
<input type="hidden" name="inv_estado_" value="<?php echo $this->form_encode_input($inv_estado_) . "\">" . $inv_estado_ . ""; ?>
<?php } else { ?>
<span id="id_read_on_inv_estado_" class="sc-ui-readonly-inv_estado_ css_inv_estado__line" style="<?php echo $sStyleReadLab_inv_estado_; ?>"><?php echo $this->form_format_readonly("inv_estado_", $this->form_encode_input($this->inv_estado_)); ?></span><span id="id_read_off_inv_estado_" class="css_read_off_inv_estado_<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_inv_estado_; ?>">
 <input class="sc-js-input scFormObjectOdd css_inv_estado__obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_inv_estado_" type=text name="inv_estado_" value="<?php echo $this->form_encode_input($inv_estado_) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> maxlength=2 alt="{datatype: 'text', maxLength: 2, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inv_estado__frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inv_estado__text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R")
{
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-19';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['btn_label'][''];
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
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_inv_inventario_inline");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_inv_inventario_inline");
 parent.scAjaxDetailHeight("form_inv_inventario_inline", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_inv_inventario_inline", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_inv_inventario_inline", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['sc_modal'])
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
	function scBtnFn_sys_format_dynamicsearch() {
		if ($("#dynamic_search_t.sc-unique-btn-1").length && $("#dynamic_search_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#dynamic_search_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			if($('#id_dyn_search_cmd_str').html() != ''){ $('#id_dyn_search_cmd_string').toggle(); } $('#div_dyn_search').toggle(); if($( '#div_dyn_search' ).css( 'display')=='none'){ buttonunselectedDS(); }else{ buttonSelectedDS(); }
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-2").length && $("#sys_separator.sc-unique-btn-2").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-4").length && $("#sys_separator.sc-unique-btn-4").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-8").length && $("#sys_separator.sc-unique-btn-8").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-8").hasClass("disabled")) {
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
		if ($("#sys_separator.sc-unique-btn-15").length && $("#sys_separator.sc-unique-btn-15").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-19").length && $("#sys_separator.sc-unique-btn-19").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-19").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-3").length && $("#sc_b_upd_t.sc-unique-btn-3").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-3").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-14").length && $("#sc_b_upd_t.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_upd_t.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
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
		if ($("#sc_b_sai_t.sc-unique-btn-5").length && $("#sc_b_sai_t.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-16").length && $("#sc_b_sai_t.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-18").length && $("#sc_b_sai_t.sc-unique-btn-18").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-18").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq(btnPos) {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
		    if ($("#brec_b").hasClass("disabled")) {
		        return;
		    }
			if (document.F1['nmgp_rec_' + btnPos].value != '') {nm_navpage(document.F1['nmgp_rec_' + btnPos].value, 'P');} document.F1['nmgp_rec_' + btnPos].value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-9").length && $("#sc_b_ini_b.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-10").length && $("#sc_b_ret_b.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-11").length && $("#sc_b_avc_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-12").length && $("#sc_b_fim_b.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			 return;
		}
	}
</script>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_inv_inventario_inline']['buttonStatus'] = $this->nmgp_botoes;
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
