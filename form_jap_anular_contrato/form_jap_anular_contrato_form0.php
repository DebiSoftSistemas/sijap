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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_jap_contrato'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_jap_contrato'] . ""); } ?></TITLE>
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
.css_read_off_con_fecha_instalacion button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_con_fecha_lectura button {
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
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_jap_anular_contrato/form_jap_anular_contrato_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_jap_anular_contrato_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['last'] : 'off'); ?>";
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
  document.getElementById('nmsc_iframe_liga_grid_jap_cuotas_contrato').contentDocument.location.reload(true);
 } // recargar_marco
<?php

include_once('form_jap_anular_contrato_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['recarga'];
}
if ('' != $this->con_estado)
{
    $this->lookup_con_estado($look_rpc_con_estado);
}
if ('' != $this->con_usuario_instala)
{
    $this->lookup_con_usuario_instala($look_rpc_con_usuario_instala);
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['link_info']['remove_border']) {
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
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
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
 include_once("form_jap_anular_contrato_js0.php");
?>
<script type="text/javascript" src="<?php  echo $this->Ini->path_js . "/jsrsClient.js" ?>"> 
</script> 
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_jap_anular_contrato'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_jap_anular_contrato'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-1';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-2';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_anular()", "scBtnFn_anular()", "sc_anular_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['exit'];
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="50%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['con_empresa']))
   {
       $this->nmgp_cmp_hidden['con_empresa'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['con_propietario']))
   {
       $this->nmgp_cmp_hidden['con_propietario'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['con_fecha']))
   {
       $this->nmgp_cmp_hidden['con_fecha'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['con_sino']))
   {
       $this->nmgp_cmp_hidden['con_sino'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   </tr>
   <tr>


    <TD colspan="2" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_anulacion'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_motivo_anulacion']))
    {
        $this->nm_new_label['con_motivo_anulacion'] = "" . $this->Ini->Nm_lang['lang_motivo_anulacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_motivo_anulacion = $this->con_motivo_anulacion;
   $sStyleHidden_con_motivo_anulacion = '';
   if (isset($this->nmgp_cmp_hidden['con_motivo_anulacion']) && $this->nmgp_cmp_hidden['con_motivo_anulacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_motivo_anulacion']);
       $sStyleHidden_con_motivo_anulacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_motivo_anulacion = 'display: none;';
   $sStyleReadInp_con_motivo_anulacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_motivo_anulacion']) && $this->nmgp_cmp_readonly['con_motivo_anulacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_motivo_anulacion']);
       $sStyleReadLab_con_motivo_anulacion = '';
       $sStyleReadInp_con_motivo_anulacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_motivo_anulacion']) && $this->nmgp_cmp_hidden['con_motivo_anulacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_motivo_anulacion" value="<?php echo $this->form_encode_input($con_motivo_anulacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_motivo_anulacion_label" id="hidden_field_label_con_motivo_anulacion" style="<?php echo $sStyleHidden_con_motivo_anulacion; ?>"><span id="id_label_con_motivo_anulacion"><?php echo $this->nm_new_label['con_motivo_anulacion']; ?></span></TD>
    <TD class="scFormDataOdd css_con_motivo_anulacion_line" id="hidden_field_data_con_motivo_anulacion" style="<?php echo $sStyleHidden_con_motivo_anulacion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_motivo_anulacion_line" style="vertical-align: top;padding: 0px">
<?php
$con_motivo_anulacion_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($con_motivo_anulacion));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_motivo_anulacion"]) &&  $this->nmgp_cmp_readonly["con_motivo_anulacion"] == "on") { 

 ?>
<input type="hidden" name="con_motivo_anulacion" value="<?php echo $this->form_encode_input($con_motivo_anulacion) . "\">" . $con_motivo_anulacion_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_motivo_anulacion" class="sc-ui-readonly-con_motivo_anulacion css_con_motivo_anulacion_line" style="<?php echo $sStyleReadLab_con_motivo_anulacion; ?>"><?php echo $this->form_format_readonly("con_motivo_anulacion", $this->form_encode_input($con_motivo_anulacion_val)); ?></span><span id="id_read_off_con_motivo_anulacion" class="css_read_off_con_motivo_anulacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_motivo_anulacion; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_con_motivo_anulacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;resize: vertical;" name="con_motivo_anulacion" id="id_sc_field_con_motivo_anulacion" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $con_motivo_anulacion; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_motivo_anulacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_motivo_anulacion_text"></span></td></tr></table></td></tr></table></TD>
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
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['con_id']))
           {
               $this->nmgp_cmp_readonly['con_id'] = 'on';
           }
?>


   <?php
    if (!isset($this->nm_new_label['con_fecha']))
    {
        $this->nm_new_label['con_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_fecha = $this->con_fecha;
   if (!isset($this->nmgp_cmp_hidden['con_fecha']))
   {
       $this->nmgp_cmp_hidden['con_fecha'] = 'off';
   }
   $sStyleHidden_con_fecha = '';
   if (isset($this->nmgp_cmp_hidden['con_fecha']) && $this->nmgp_cmp_hidden['con_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_fecha']);
       $sStyleHidden_con_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_fecha = 'display: none;';
   $sStyleReadInp_con_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_fecha']) && $this->nmgp_cmp_readonly['con_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_fecha']);
       $sStyleReadLab_con_fecha = '';
       $sStyleReadInp_con_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_fecha']) && $this->nmgp_cmp_hidden['con_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_fecha" value="<?php echo $this->form_encode_input($con_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_fecha_label" id="hidden_field_label_con_fecha" style="<?php echo $sStyleHidden_con_fecha; ?>"><span id="id_label_con_fecha"><?php echo $this->nm_new_label['con_fecha']; ?></span></TD>
    <TD class="scFormDataOdd css_con_fecha_line" id="hidden_field_data_con_fecha" style="<?php echo $sStyleHidden_con_fecha; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_fecha_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_fecha" value="<?php echo $this->form_encode_input($con_fecha); ?>"><span id="id_ajax_label_con_fecha"><?php echo nl2br($con_fecha); ?></span>
<?php
$tmp_form_data = $this->field_config['con_fecha']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_fecha_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_sino']))
    {
        $this->nm_new_label['con_sino'] = "Con Sino";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_sino = $this->con_sino;
   if (!isset($this->nmgp_cmp_hidden['con_sino']))
   {
       $this->nmgp_cmp_hidden['con_sino'] = 'off';
   }
   $sStyleHidden_con_sino = '';
   if (isset($this->nmgp_cmp_hidden['con_sino']) && $this->nmgp_cmp_hidden['con_sino'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_sino']);
       $sStyleHidden_con_sino = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_sino = 'display: none;';
   $sStyleReadInp_con_sino = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_sino']) && $this->nmgp_cmp_readonly['con_sino'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_sino']);
       $sStyleReadLab_con_sino = '';
       $sStyleReadInp_con_sino = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_sino']) && $this->nmgp_cmp_hidden['con_sino'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_sino" value="<?php echo $this->form_encode_input($con_sino) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_sino_label" id="hidden_field_label_con_sino" style="<?php echo $sStyleHidden_con_sino; ?>"><span id="id_label_con_sino"><?php echo $this->nm_new_label['con_sino']; ?></span></TD>
    <TD class="scFormDataOdd css_con_sino_line" id="hidden_field_data_con_sino" style="<?php echo $sStyleHidden_con_sino; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_sino_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_sino"]) &&  $this->nmgp_cmp_readonly["con_sino"] == "on") { 

 ?>
<input type="hidden" name="con_sino" value="<?php echo $this->form_encode_input($con_sino) . "\">" . $con_sino . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_sino" class="sc-ui-readonly-con_sino css_con_sino_line" style="<?php echo $sStyleReadLab_con_sino; ?>"><?php echo $this->form_format_readonly("con_sino", $this->form_encode_input($this->con_sino)); ?></span><span id="id_read_off_con_sino" class="css_read_off_con_sino<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_sino; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_sino_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_sino" type=text name="con_sino" value="<?php echo $this->form_encode_input($con_sino) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=1"; } ?> maxlength=1 alt="{datatype: 'text', maxLength: 1, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_sino_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_sino_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_id']))
    {
        $this->nm_new_label['con_id'] = "" . $this->Ini->Nm_lang['lang_solicitud'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_id = $this->con_id;
   $sStyleHidden_con_id = '';
   if (isset($this->nmgp_cmp_hidden['con_id']) && $this->nmgp_cmp_hidden['con_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_id']);
       $sStyleHidden_con_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_id = 'display: none;';
   $sStyleReadInp_con_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["con_id"]) &&  $this->nmgp_cmp_readonly["con_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_id']);
       $sStyleReadLab_con_id = '';
       $sStyleReadInp_con_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_id']) && $this->nmgp_cmp_hidden['con_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_id" value="<?php echo $this->form_encode_input($con_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_id_label" id="hidden_field_label_con_id" style="<?php echo $sStyleHidden_con_id; ?>"><span id="id_label_con_id"><?php echo $this->nm_new_label['con_id']; ?></span></TD>
    <TD class="scFormDataOdd css_con_id_line" id="hidden_field_data_con_id" style="<?php echo $sStyleHidden_con_id; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_id_line" style="vertical-align: top;padding: 0px">
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { 
 ?>
<span id="id_read_on_con_id" css_con_id_line" style="<?php echo $sStyleReadLab_con_id; ?>"><?php echo $this->form_format_readonly("con_id", $this->form_encode_input($this->con_id)); ?></span><span id="id_read_off_con_id" class="css_read_off_con_id" style="<?php echo $sStyleReadInp_con_id; ?>"><input type="hidden" name="con_id" value="<?php echo $this->form_encode_input($con_id) . "\">"?><span id="id_ajax_label_con_id"><?php echo nl2br($con_id); ?></span>
</span><?php } else { ?>
&nbsp;
<?php } ?>
</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_id_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_numero_contrato']))
    {
        $this->nm_new_label['con_numero_contrato'] = "" . $this->Ini->Nm_lang['lang_contrato'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_numero_contrato = $this->con_numero_contrato;
   $sStyleHidden_con_numero_contrato = '';
   if (isset($this->nmgp_cmp_hidden['con_numero_contrato']) && $this->nmgp_cmp_hidden['con_numero_contrato'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_numero_contrato']);
       $sStyleHidden_con_numero_contrato = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_numero_contrato = 'display: none;';
   $sStyleReadInp_con_numero_contrato = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_numero_contrato']) && $this->nmgp_cmp_readonly['con_numero_contrato'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_numero_contrato']);
       $sStyleReadLab_con_numero_contrato = '';
       $sStyleReadInp_con_numero_contrato = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_numero_contrato']) && $this->nmgp_cmp_hidden['con_numero_contrato'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_numero_contrato" value="<?php echo $this->form_encode_input($con_numero_contrato) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_numero_contrato_label" id="hidden_field_label_con_numero_contrato" style="<?php echo $sStyleHidden_con_numero_contrato; ?>"><span id="id_label_con_numero_contrato"><?php echo $this->nm_new_label['con_numero_contrato']; ?></span></TD>
    <TD class="scFormDataOdd css_con_numero_contrato_line" id="hidden_field_data_con_numero_contrato" style="<?php echo $sStyleHidden_con_numero_contrato; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_numero_contrato_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_numero_contrato" value="<?php echo $this->form_encode_input($con_numero_contrato); ?>"><span id="id_ajax_label_con_numero_contrato"><?php echo nl2br($con_numero_contrato); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_numero_contrato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_numero_contrato_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_tipo_contrato']))
   {
       $this->nm_new_label['con_tipo_contrato'] = "" . $this->Ini->Nm_lang['lang_tipo_contrato'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_tipo_contrato = $this->con_tipo_contrato;
   $sStyleHidden_con_tipo_contrato = '';
   if (isset($this->nmgp_cmp_hidden['con_tipo_contrato']) && $this->nmgp_cmp_hidden['con_tipo_contrato'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_tipo_contrato']);
       $sStyleHidden_con_tipo_contrato = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_tipo_contrato = 'display: none;';
   $sStyleReadInp_con_tipo_contrato = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_tipo_contrato']) && $this->nmgp_cmp_readonly['con_tipo_contrato'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_tipo_contrato']);
       $sStyleReadLab_con_tipo_contrato = '';
       $sStyleReadInp_con_tipo_contrato = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_tipo_contrato']) && $this->nmgp_cmp_hidden['con_tipo_contrato'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_tipo_contrato" value="<?php echo $this->form_encode_input($this->con_tipo_contrato) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_tipo_contrato_label" id="hidden_field_label_con_tipo_contrato" style="<?php echo $sStyleHidden_con_tipo_contrato; ?>"><span id="id_label_con_tipo_contrato"><?php echo $this->nm_new_label['con_tipo_contrato']; ?></span></TD>
    <TD class="scFormDataOdd css_con_tipo_contrato_line" id="hidden_field_data_con_tipo_contrato" style="<?php echo $sStyleHidden_con_tipo_contrato; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_tipo_contrato_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_tipo_contrato"]) &&  $this->nmgp_cmp_readonly["con_tipo_contrato"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_contrato'][] = $rs->fields[0];
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
   $con_tipo_contrato_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_tipo_contrato_1))
          {
              foreach ($this->con_tipo_contrato_1 as $tmp_con_tipo_contrato)
              {
                  if (trim($tmp_con_tipo_contrato) === trim($cadaselect[1])) {$con_tipo_contrato_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_tipo_contrato) && trim($this->con_tipo_contrato) === trim($cadaselect[1])) {$con_tipo_contrato_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_tipo_contrato" value="<?php echo $this->form_encode_input($con_tipo_contrato) . "\">" . $con_tipo_contrato_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_tipo_contrato();
   $x = 0 ; 
   $con_tipo_contrato_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_tipo_contrato_1))
          {
              foreach ($this->con_tipo_contrato_1 as $tmp_con_tipo_contrato)
              {
                  if (trim($tmp_con_tipo_contrato) === trim($cadaselect[1])) {$con_tipo_contrato_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_tipo_contrato) && trim($this->con_tipo_contrato) === trim($cadaselect[1])) { $con_tipo_contrato_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_tipo_contrato_look))
          {
              $con_tipo_contrato_look = $this->con_tipo_contrato;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_tipo_contrato\" class=\"css_con_tipo_contrato_line\" style=\"" .  $sStyleReadLab_con_tipo_contrato . "\">" . $this->form_format_readonly("con_tipo_contrato", $this->form_encode_input($con_tipo_contrato_look)) . "</span><span id=\"id_read_off_con_tipo_contrato\" class=\"css_read_off_con_tipo_contrato" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_tipo_contrato . "\">";
   echo " <span id=\"idAjaxSelect_con_tipo_contrato\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_tipo_contrato_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_tipo_contrato\" name=\"con_tipo_contrato\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_tipo_contrato) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_tipo_contrato)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_tipo_contrato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_tipo_contrato_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_propietario']))
    {
        $this->nm_new_label['con_propietario'] = "" . $this->Ini->Nm_lang['lang_propietario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_propietario = $this->con_propietario;
   if (!isset($this->nmgp_cmp_hidden['con_propietario']))
   {
       $this->nmgp_cmp_hidden['con_propietario'] = 'off';
   }
   $sStyleHidden_con_propietario = '';
   if (isset($this->nmgp_cmp_hidden['con_propietario']) && $this->nmgp_cmp_hidden['con_propietario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_propietario']);
       $sStyleHidden_con_propietario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_propietario = 'display: none;';
   $sStyleReadInp_con_propietario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_propietario']) && $this->nmgp_cmp_readonly['con_propietario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_propietario']);
       $sStyleReadLab_con_propietario = '';
       $sStyleReadInp_con_propietario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_propietario']) && $this->nmgp_cmp_hidden['con_propietario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_propietario" value="<?php echo $this->form_encode_input($con_propietario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_propietario_label" id="hidden_field_label_con_propietario" style="<?php echo $sStyleHidden_con_propietario; ?>"><span id="id_label_con_propietario"><?php echo $this->nm_new_label['con_propietario']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['php_cmp_required']['con_propietario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['php_cmp_required']['con_propietario'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_con_propietario_line" id="hidden_field_data_con_propietario" style="<?php echo $sStyleHidden_con_propietario; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_propietario_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_propietario" value="<?php echo $this->form_encode_input($con_propietario); ?>"><span id="id_ajax_label_con_propietario"><?php echo nl2br($con_propietario); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_propietario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_propietario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_nombre']))
    {
        $this->nm_new_label['con_nombre'] = "" . $this->Ini->Nm_lang['lang_lot_nombre_completo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_nombre = $this->con_nombre;
   $sStyleHidden_con_nombre = '';
   if (isset($this->nmgp_cmp_hidden['con_nombre']) && $this->nmgp_cmp_hidden['con_nombre'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_nombre']);
       $sStyleHidden_con_nombre = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_nombre = 'display: none;';
   $sStyleReadInp_con_nombre = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_nombre']) && $this->nmgp_cmp_readonly['con_nombre'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_nombre']);
       $sStyleReadLab_con_nombre = '';
       $sStyleReadInp_con_nombre = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_nombre']) && $this->nmgp_cmp_hidden['con_nombre'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_nombre" value="<?php echo $this->form_encode_input($con_nombre) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_nombre_label" id="hidden_field_label_con_nombre" style="<?php echo $sStyleHidden_con_nombre; ?>"><span id="id_label_con_nombre"><?php echo $this->nm_new_label['con_nombre']; ?></span></TD>
    <TD class="scFormDataOdd css_con_nombre_line" id="hidden_field_data_con_nombre" style="<?php echo $sStyleHidden_con_nombre; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_nombre_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_nombre" value="<?php echo $this->form_encode_input($con_nombre); ?>"><span id="id_ajax_label_con_nombre"><?php echo nl2br($con_nombre); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_nombre_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_cedula']))
    {
        $this->nm_new_label['con_cedula'] = "" . $this->Ini->Nm_lang['lang_cedula'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_cedula = $this->con_cedula;
   $sStyleHidden_con_cedula = '';
   if (isset($this->nmgp_cmp_hidden['con_cedula']) && $this->nmgp_cmp_hidden['con_cedula'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_cedula']);
       $sStyleHidden_con_cedula = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_cedula = 'display: none;';
   $sStyleReadInp_con_cedula = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_cedula']) && $this->nmgp_cmp_readonly['con_cedula'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_cedula']);
       $sStyleReadLab_con_cedula = '';
       $sStyleReadInp_con_cedula = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_cedula']) && $this->nmgp_cmp_hidden['con_cedula'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_cedula" value="<?php echo $this->form_encode_input($con_cedula) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_cedula_label" id="hidden_field_label_con_cedula" style="<?php echo $sStyleHidden_con_cedula; ?>"><span id="id_label_con_cedula"><?php echo $this->nm_new_label['con_cedula']; ?></span></TD>
    <TD class="scFormDataOdd css_con_cedula_line" id="hidden_field_data_con_cedula" style="<?php echo $sStyleHidden_con_cedula; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_cedula_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_cedula" value="<?php echo $this->form_encode_input($con_cedula); ?>"><span id="id_ajax_label_con_cedula"><?php echo nl2br($con_cedula); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_cedula_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_cedula_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_telefono']))
    {
        $this->nm_new_label['con_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_telefono = $this->con_telefono;
   $sStyleHidden_con_telefono = '';
   if (isset($this->nmgp_cmp_hidden['con_telefono']) && $this->nmgp_cmp_hidden['con_telefono'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_telefono']);
       $sStyleHidden_con_telefono = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_telefono = 'display: none;';
   $sStyleReadInp_con_telefono = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_telefono']) && $this->nmgp_cmp_readonly['con_telefono'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_telefono']);
       $sStyleReadLab_con_telefono = '';
       $sStyleReadInp_con_telefono = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_telefono']) && $this->nmgp_cmp_hidden['con_telefono'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_telefono" value="<?php echo $this->form_encode_input($con_telefono) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_telefono_label" id="hidden_field_label_con_telefono" style="<?php echo $sStyleHidden_con_telefono; ?>"><span id="id_label_con_telefono"><?php echo $this->nm_new_label['con_telefono']; ?></span></TD>
    <TD class="scFormDataOdd css_con_telefono_line" id="hidden_field_data_con_telefono" style="<?php echo $sStyleHidden_con_telefono; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_telefono_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_telefono" value="<?php echo $this->form_encode_input($con_telefono); ?>"><span id="id_ajax_label_con_telefono"><?php echo nl2br($con_telefono); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_telefono_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_celular']))
    {
        $this->nm_new_label['con_celular'] = "" . $this->Ini->Nm_lang['lang_celular'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_celular = $this->con_celular;
   $sStyleHidden_con_celular = '';
   if (isset($this->nmgp_cmp_hidden['con_celular']) && $this->nmgp_cmp_hidden['con_celular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_celular']);
       $sStyleHidden_con_celular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_celular = 'display: none;';
   $sStyleReadInp_con_celular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_celular']) && $this->nmgp_cmp_readonly['con_celular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_celular']);
       $sStyleReadLab_con_celular = '';
       $sStyleReadInp_con_celular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_celular']) && $this->nmgp_cmp_hidden['con_celular'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_celular" value="<?php echo $this->form_encode_input($con_celular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_celular_label" id="hidden_field_label_con_celular" style="<?php echo $sStyleHidden_con_celular; ?>"><span id="id_label_con_celular"><?php echo $this->nm_new_label['con_celular']; ?></span></TD>
    <TD class="scFormDataOdd css_con_celular_line" id="hidden_field_data_con_celular" style="<?php echo $sStyleHidden_con_celular; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_celular_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_celular" value="<?php echo $this->form_encode_input($con_celular); ?>"><span id="id_ajax_label_con_celular"><?php echo nl2br($con_celular); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_celular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_celular_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_direccion_propietario']))
    {
        $this->nm_new_label['con_direccion_propietario'] = "" . $this->Ini->Nm_lang['lang_direccion_propietario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_direccion_propietario = $this->con_direccion_propietario;
   $sStyleHidden_con_direccion_propietario = '';
   if (isset($this->nmgp_cmp_hidden['con_direccion_propietario']) && $this->nmgp_cmp_hidden['con_direccion_propietario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_direccion_propietario']);
       $sStyleHidden_con_direccion_propietario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_direccion_propietario = 'display: none;';
   $sStyleReadInp_con_direccion_propietario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_direccion_propietario']) && $this->nmgp_cmp_readonly['con_direccion_propietario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_direccion_propietario']);
       $sStyleReadLab_con_direccion_propietario = '';
       $sStyleReadInp_con_direccion_propietario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_direccion_propietario']) && $this->nmgp_cmp_hidden['con_direccion_propietario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_direccion_propietario" value="<?php echo $this->form_encode_input($con_direccion_propietario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_direccion_propietario_label" id="hidden_field_label_con_direccion_propietario" style="<?php echo $sStyleHidden_con_direccion_propietario; ?>"><span id="id_label_con_direccion_propietario"><?php echo $this->nm_new_label['con_direccion_propietario']; ?></span></TD>
    <TD class="scFormDataOdd css_con_direccion_propietario_line" id="hidden_field_data_con_direccion_propietario" style="<?php echo $sStyleHidden_con_direccion_propietario; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_direccion_propietario_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_direccion_propietario" value="<?php echo $this->form_encode_input($con_direccion_propietario); ?>"><span id="id_ajax_label_con_direccion_propietario"><?php echo nl2br($con_direccion_propietario); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_direccion_propietario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_direccion_propietario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_correo']))
    {
        $this->nm_new_label['con_correo'] = "" . $this->Ini->Nm_lang['lang_email'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_correo = $this->con_correo;
   $sStyleHidden_con_correo = '';
   if (isset($this->nmgp_cmp_hidden['con_correo']) && $this->nmgp_cmp_hidden['con_correo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_correo']);
       $sStyleHidden_con_correo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_correo = 'display: none;';
   $sStyleReadInp_con_correo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_correo']) && $this->nmgp_cmp_readonly['con_correo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_correo']);
       $sStyleReadLab_con_correo = '';
       $sStyleReadInp_con_correo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_correo']) && $this->nmgp_cmp_hidden['con_correo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_correo" value="<?php echo $this->form_encode_input($con_correo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_correo_label" id="hidden_field_label_con_correo" style="<?php echo $sStyleHidden_con_correo; ?>"><span id="id_label_con_correo"><?php echo $this->nm_new_label['con_correo']; ?></span></TD>
    <TD class="scFormDataOdd css_con_correo_line" id="hidden_field_data_con_correo" style="<?php echo $sStyleHidden_con_correo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_correo_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_correo" value="<?php echo $this->form_encode_input($con_correo); ?>"><span id="id_ajax_label_con_correo"><?php echo nl2br($con_correo); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_correo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_correo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_estado']))
    {
        $this->nm_new_label['con_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_estado = $this->con_estado;
   $sStyleHidden_con_estado = '';
   if (isset($this->nmgp_cmp_hidden['con_estado']) && $this->nmgp_cmp_hidden['con_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_estado']);
       $sStyleHidden_con_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_estado = 'display: none;';
   $sStyleReadInp_con_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_estado']) && $this->nmgp_cmp_readonly['con_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_estado']);
       $sStyleReadLab_con_estado = '';
       $sStyleReadInp_con_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_estado']) && $this->nmgp_cmp_hidden['con_estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_estado" value="<?php echo $this->form_encode_input($con_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_estado_label" id="hidden_field_label_con_estado" style="<?php echo $sStyleHidden_con_estado; ?>"><span id="id_label_con_estado"><?php echo $this->nm_new_label['con_estado']; ?></span></TD>
    <TD class="scFormDataOdd css_con_estado_line" id="hidden_field_data_con_estado" style="<?php echo $sStyleHidden_con_estado; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_estado_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_estado" value="<?php echo $this->form_encode_input($con_estado); ?>"><span id="id_ajax_label_con_estado"><?php echo nl2br($con_estado); ?></span>
 <SPAN id="id_lookup_con_estado"><?php echo $look_rpc_con_estado; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_estado_text"></span></td></tr></table></td></tr></table></TD>
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
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_2"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_2" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   </tr>
   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_propiedad'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_pais']))
   {
       $this->nm_new_label['con_pais'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_pais = $this->con_pais;
   $sStyleHidden_con_pais = '';
   if (isset($this->nmgp_cmp_hidden['con_pais']) && $this->nmgp_cmp_hidden['con_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_pais']);
       $sStyleHidden_con_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_pais = 'display: none;';
   $sStyleReadInp_con_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_pais']) && $this->nmgp_cmp_readonly['con_pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_pais']);
       $sStyleReadLab_con_pais = '';
       $sStyleReadInp_con_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_pais']) && $this->nmgp_cmp_hidden['con_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_pais" value="<?php echo $this->form_encode_input($this->con_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_pais_label" id="hidden_field_label_con_pais" style="<?php echo $sStyleHidden_con_pais; ?>"><span id="id_label_con_pais"><?php echo $this->nm_new_label['con_pais']; ?></span></TD>
    <TD class="scFormDataOdd css_con_pais_line" id="hidden_field_data_con_pais" style="<?php echo $sStyleHidden_con_pais; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_pais_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_pais"]) &&  $this->nmgp_cmp_readonly["con_pais"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_pais'][] = $rs->fields[0];
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
   $con_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_pais_1))
          {
              foreach ($this->con_pais_1 as $tmp_con_pais)
              {
                  if (trim($tmp_con_pais) === trim($cadaselect[1])) {$con_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_pais) && trim($this->con_pais) === trim($cadaselect[1])) {$con_pais_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_pais" value="<?php echo $this->form_encode_input($con_pais) . "\">" . $con_pais_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_pais();
   $x = 0 ; 
   $con_pais_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_pais_1))
          {
              foreach ($this->con_pais_1 as $tmp_con_pais)
              {
                  if (trim($tmp_con_pais) === trim($cadaselect[1])) {$con_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_pais) && trim($this->con_pais) === trim($cadaselect[1])) { $con_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_pais_look))
          {
              $con_pais_look = $this->con_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_pais\" class=\"css_con_pais_line\" style=\"" .  $sStyleReadLab_con_pais . "\">" . $this->form_format_readonly("con_pais", $this->form_encode_input($con_pais_look)) . "</span><span id=\"id_read_off_con_pais\" class=\"css_read_off_con_pais" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_pais . "\">";
   echo " <span id=\"idAjaxSelect_con_pais\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_pais_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_pais\" name=\"con_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_pais)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_pais"]) && $this->Ini->sc_lig_md5["form_sis_pais"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_pais*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_jap_anular_contrato@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_pais*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_con_pais", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_pais_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_jap_anular_contrato&KeepThis=true&TB_iframe=true&height=460&width=800&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_pais_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['con_provincia']))
   {
       $this->nm_new_label['con_provincia'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_provincia = $this->con_provincia;
   $sStyleHidden_con_provincia = '';
   if (isset($this->nmgp_cmp_hidden['con_provincia']) && $this->nmgp_cmp_hidden['con_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_provincia']);
       $sStyleHidden_con_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_provincia = 'display: none;';
   $sStyleReadInp_con_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_provincia']) && $this->nmgp_cmp_readonly['con_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_provincia']);
       $sStyleReadLab_con_provincia = '';
       $sStyleReadInp_con_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_provincia']) && $this->nmgp_cmp_hidden['con_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_provincia" value="<?php echo $this->form_encode_input($this->con_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_provincia_label" id="hidden_field_label_con_provincia" style="<?php echo $sStyleHidden_con_provincia; ?>"><span id="id_label_con_provincia"><?php echo $this->nm_new_label['con_provincia']; ?></span></TD>
    <TD class="scFormDataOdd css_con_provincia_line" id="hidden_field_data_con_provincia" style="<?php echo $sStyleHidden_con_provincia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_provincia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_provincia"]) &&  $this->nmgp_cmp_readonly["con_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia'] = array(); 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_provincia'][] = $rs->fields[0];
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
   $x = 0; 
   $con_provincia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_provincia_1))
          {
              foreach ($this->con_provincia_1 as $tmp_con_provincia)
              {
                  if (trim($tmp_con_provincia) === trim($cadaselect[1])) {$con_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_provincia) && trim($this->con_provincia) === trim($cadaselect[1])) {$con_provincia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_provincia" value="<?php echo $this->form_encode_input($con_provincia) . "\">" . $con_provincia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_provincia();
   $x = 0 ; 
   $con_provincia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_provincia_1))
          {
              foreach ($this->con_provincia_1 as $tmp_con_provincia)
              {
                  if (trim($tmp_con_provincia) === trim($cadaselect[1])) {$con_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_provincia) && trim($this->con_provincia) === trim($cadaselect[1])) { $con_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_provincia_look))
          {
              $con_provincia_look = $this->con_provincia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_provincia\" class=\"css_con_provincia_line\" style=\"" .  $sStyleReadLab_con_provincia . "\">" . $this->form_format_readonly("con_provincia", $this->form_encode_input($con_provincia_look)) . "</span><span id=\"id_read_off_con_provincia\" class=\"css_read_off_con_provincia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_provincia . "\">";
   echo " <span id=\"idAjaxSelect_con_provincia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_provincia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_provincia\" name=\"con_provincia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_provincia)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_provincia"]) && $this->Ini->sc_lig_md5["form_sis_provincia"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_provincia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_jap_anular_contrato@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_provincia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_con_provincia", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_provincia_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_jap_anular_contrato&KeepThis=true&TB_iframe=true&height=460&width=800&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_provincia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_provincia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_canton']))
   {
       $this->nm_new_label['con_canton'] = "" . $this->Ini->Nm_lang['lang_canton'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_canton = $this->con_canton;
   $sStyleHidden_con_canton = '';
   if (isset($this->nmgp_cmp_hidden['con_canton']) && $this->nmgp_cmp_hidden['con_canton'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_canton']);
       $sStyleHidden_con_canton = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_canton = 'display: none;';
   $sStyleReadInp_con_canton = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_canton']) && $this->nmgp_cmp_readonly['con_canton'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_canton']);
       $sStyleReadLab_con_canton = '';
       $sStyleReadInp_con_canton = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_canton']) && $this->nmgp_cmp_hidden['con_canton'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_canton" value="<?php echo $this->form_encode_input($this->con_canton) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_canton_label" id="hidden_field_label_con_canton" style="<?php echo $sStyleHidden_con_canton; ?>"><span id="id_label_con_canton"><?php echo $this->nm_new_label['con_canton']; ?></span></TD>
    <TD class="scFormDataOdd css_con_canton_line" id="hidden_field_data_con_canton" style="<?php echo $sStyleHidden_con_canton; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_canton_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_canton"]) &&  $this->nmgp_cmp_readonly["con_canton"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton'] = array(); 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_canton'][] = $rs->fields[0];
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
   $x = 0; 
   $con_canton_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_canton_1))
          {
              foreach ($this->con_canton_1 as $tmp_con_canton)
              {
                  if (trim($tmp_con_canton) === trim($cadaselect[1])) {$con_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_canton) && trim($this->con_canton) === trim($cadaselect[1])) {$con_canton_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_canton" value="<?php echo $this->form_encode_input($con_canton) . "\">" . $con_canton_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_canton();
   $x = 0 ; 
   $con_canton_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_canton_1))
          {
              foreach ($this->con_canton_1 as $tmp_con_canton)
              {
                  if (trim($tmp_con_canton) === trim($cadaselect[1])) {$con_canton_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_canton) && trim($this->con_canton) === trim($cadaselect[1])) { $con_canton_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_canton_look))
          {
              $con_canton_look = $this->con_canton;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_canton\" class=\"css_con_canton_line\" style=\"" .  $sStyleReadLab_con_canton . "\">" . $this->form_format_readonly("con_canton", $this->form_encode_input($con_canton_look)) . "</span><span id=\"id_read_off_con_canton\" class=\"css_read_off_con_canton" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_canton . "\">";
   echo " <span id=\"idAjaxSelect_con_canton\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_canton_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_canton\" name=\"con_canton\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_canton) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_canton)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_canton"]) && $this->Ini->sc_lig_md5["form_sis_canton"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_canton*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_jap_anular_contrato@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_canton*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_con_canton", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_canton_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_jap_anular_contrato&KeepThis=true&TB_iframe=true&height=460&width=800&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_canton_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_canton_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['con_parroquia']))
   {
       $this->nm_new_label['con_parroquia'] = "" . $this->Ini->Nm_lang['lang_parroquia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_parroquia = $this->con_parroquia;
   $sStyleHidden_con_parroquia = '';
   if (isset($this->nmgp_cmp_hidden['con_parroquia']) && $this->nmgp_cmp_hidden['con_parroquia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_parroquia']);
       $sStyleHidden_con_parroquia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_parroquia = 'display: none;';
   $sStyleReadInp_con_parroquia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_parroquia']) && $this->nmgp_cmp_readonly['con_parroquia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_parroquia']);
       $sStyleReadLab_con_parroquia = '';
       $sStyleReadInp_con_parroquia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_parroquia']) && $this->nmgp_cmp_hidden['con_parroquia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_parroquia" value="<?php echo $this->form_encode_input($this->con_parroquia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_parroquia_label" id="hidden_field_label_con_parroquia" style="<?php echo $sStyleHidden_con_parroquia; ?>"><span id="id_label_con_parroquia"><?php echo $this->nm_new_label['con_parroquia']; ?></span></TD>
    <TD class="scFormDataOdd css_con_parroquia_line" id="hidden_field_data_con_parroquia" style="<?php echo $sStyleHidden_con_parroquia; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_parroquia_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_parroquia"]) &&  $this->nmgp_cmp_readonly["con_parroquia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia'] = array(); 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia'][] = $rs->fields[0];
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
   $x = 0; 
   $con_parroquia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_parroquia_1))
          {
              foreach ($this->con_parroquia_1 as $tmp_con_parroquia)
              {
                  if (trim($tmp_con_parroquia) === trim($cadaselect[1])) {$con_parroquia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_parroquia) && trim($this->con_parroquia) === trim($cadaselect[1])) {$con_parroquia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_parroquia" value="<?php echo $this->form_encode_input($con_parroquia) . "\">" . $con_parroquia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_parroquia();
   $x = 0 ; 
   $con_parroquia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_parroquia_1))
          {
              foreach ($this->con_parroquia_1 as $tmp_con_parroquia)
              {
                  if (trim($tmp_con_parroquia) === trim($cadaselect[1])) {$con_parroquia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_parroquia) && trim($this->con_parroquia) === trim($cadaselect[1])) { $con_parroquia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_parroquia_look))
          {
              $con_parroquia_look = $this->con_parroquia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_parroquia\" class=\"css_con_parroquia_line\" style=\"" .  $sStyleReadLab_con_parroquia . "\">" . $this->form_format_readonly("con_parroquia", $this->form_encode_input($con_parroquia_look)) . "</span><span id=\"id_read_off_con_parroquia\" class=\"css_read_off_con_parroquia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_parroquia . "\">";
   echo " <span id=\"idAjaxSelect_con_parroquia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_parroquia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_parroquia\" name=\"con_parroquia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_parroquia'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_parroquia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_parroquia)) 
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
   if (isset($this->Ini->sc_lig_md5["form_sis_parroquia"]) && $this->Ini->sc_lig_md5["form_sis_parroquia"] == "S") {
       $Parms_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_parroquia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
       $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_jap_anular_contrato@SC_par@" . md5($Parms_Lig);
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
   } else {
       $Md5_Lig  = "NM_btn_insert*scinS*scoutNM_btn_update*scinS*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scoutnm_evt_ret_edit*scindo_ajax_form_jap_anular_contrato_lkpedt_refresh_con_parroquia*scoutnmgp_url_saida*scinmodal*scoutnmgp_outra_jan*scintrue*scoutsc_redir_atualiz*scinok*scout";
   }
 ?><?php echo nmButtonOutput($this->arr_buttons, "bform_lookuplink", "", "", "fldedt_con_parroquia", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "thickbox", "" . $this->Ini->link_form_sis_parroquia_edit . "?script_case_init=" . $this->Ini->sc_page . "&nmgp_parms=" . $Md5_Lig . "&SC_lig_apl_orig=form_jap_anular_contrato&KeepThis=true&TB_iframe=true&height=460&width=800&modal=true", "");?>
<?php    echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_parroquia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_parroquia_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_comunidad']))
   {
       $this->nm_new_label['con_comunidad'] = "" . $this->Ini->Nm_lang['lang_comunidad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_comunidad = $this->con_comunidad;
   $sStyleHidden_con_comunidad = '';
   if (isset($this->nmgp_cmp_hidden['con_comunidad']) && $this->nmgp_cmp_hidden['con_comunidad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_comunidad']);
       $sStyleHidden_con_comunidad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_comunidad = 'display: none;';
   $sStyleReadInp_con_comunidad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_comunidad']) && $this->nmgp_cmp_readonly['con_comunidad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_comunidad']);
       $sStyleReadLab_con_comunidad = '';
       $sStyleReadInp_con_comunidad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_comunidad']) && $this->nmgp_cmp_hidden['con_comunidad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_comunidad" value="<?php echo $this->form_encode_input($this->con_comunidad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_comunidad_label" id="hidden_field_label_con_comunidad" style="<?php echo $sStyleHidden_con_comunidad; ?>"><span id="id_label_con_comunidad"><?php echo $this->nm_new_label['con_comunidad']; ?></span></TD>
    <TD class="scFormDataOdd css_con_comunidad_line" id="hidden_field_data_con_comunidad" style="<?php echo $sStyleHidden_con_comunidad; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_comunidad_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_comunidad"]) &&  $this->nmgp_cmp_readonly["con_comunidad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad'][] = $rs->fields[0];
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
   $con_comunidad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_comunidad_1))
          {
              foreach ($this->con_comunidad_1 as $tmp_con_comunidad)
              {
                  if (trim($tmp_con_comunidad) === trim($cadaselect[1])) {$con_comunidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_comunidad) && trim($this->con_comunidad) === trim($cadaselect[1])) {$con_comunidad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_comunidad" value="<?php echo $this->form_encode_input($con_comunidad) . "\">" . $con_comunidad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_comunidad();
   $x = 0 ; 
   $con_comunidad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_comunidad_1))
          {
              foreach ($this->con_comunidad_1 as $tmp_con_comunidad)
              {
                  if (trim($tmp_con_comunidad) === trim($cadaselect[1])) {$con_comunidad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_comunidad) && trim($this->con_comunidad) === trim($cadaselect[1])) { $con_comunidad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_comunidad_look))
          {
              $con_comunidad_look = $this->con_comunidad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_comunidad\" class=\"css_con_comunidad_line\" style=\"" .  $sStyleReadLab_con_comunidad . "\">" . $this->form_format_readonly("con_comunidad", $this->form_encode_input($con_comunidad_look)) . "</span><span id=\"id_read_off_con_comunidad\" class=\"css_read_off_con_comunidad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_comunidad . "\">";
   echo " <span id=\"idAjaxSelect_con_comunidad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_comunidad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_comunidad\" name=\"con_comunidad\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_comunidad'][] = '0'; 
   echo "  <option value=\"0\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_comunidad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_comunidad)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_comunidad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_comunidad_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['con_sector']))
   {
       $this->nm_new_label['con_sector'] = "" . $this->Ini->Nm_lang['lang_sector'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_sector = $this->con_sector;
   $sStyleHidden_con_sector = '';
   if (isset($this->nmgp_cmp_hidden['con_sector']) && $this->nmgp_cmp_hidden['con_sector'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_sector']);
       $sStyleHidden_con_sector = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_sector = 'display: none;';
   $sStyleReadInp_con_sector = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_sector']) && $this->nmgp_cmp_readonly['con_sector'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_sector']);
       $sStyleReadLab_con_sector = '';
       $sStyleReadInp_con_sector = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_sector']) && $this->nmgp_cmp_hidden['con_sector'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_sector" value="<?php echo $this->form_encode_input($this->con_sector) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_sector_label" id="hidden_field_label_con_sector" style="<?php echo $sStyleHidden_con_sector; ?>"><span id="id_label_con_sector"><?php echo $this->nm_new_label['con_sector']; ?></span></TD>
    <TD class="scFormDataOdd css_con_sector_line" id="hidden_field_data_con_sector" style="<?php echo $sStyleHidden_con_sector; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_sector_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_sector"]) &&  $this->nmgp_cmp_readonly["con_sector"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector'][] = $rs->fields[0];
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
   $con_sector_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_sector_1))
          {
              foreach ($this->con_sector_1 as $tmp_con_sector)
              {
                  if (trim($tmp_con_sector) === trim($cadaselect[1])) {$con_sector_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_sector) && trim($this->con_sector) === trim($cadaselect[1])) {$con_sector_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_sector" value="<?php echo $this->form_encode_input($con_sector) . "\">" . $con_sector_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_sector();
   $x = 0 ; 
   $con_sector_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_sector_1))
          {
              foreach ($this->con_sector_1 as $tmp_con_sector)
              {
                  if (trim($tmp_con_sector) === trim($cadaselect[1])) {$con_sector_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_sector) && trim($this->con_sector) === trim($cadaselect[1])) { $con_sector_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_sector_look))
          {
              $con_sector_look = $this->con_sector;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_sector\" class=\"css_con_sector_line\" style=\"" .  $sStyleReadLab_con_sector . "\">" . $this->form_format_readonly("con_sector", $this->form_encode_input($con_sector_look)) . "</span><span id=\"id_read_off_con_sector\" class=\"css_read_off_con_sector" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_sector . "\">";
   echo " <span id=\"idAjaxSelect_con_sector\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_sector_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_sector\" name=\"con_sector\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_sector'][] = '0'; 
   echo "  <option value=\"0\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_sector) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_sector)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_sector_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_sector_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_numero_censo']))
    {
        $this->nm_new_label['con_numero_censo'] = "" . $this->Ini->Nm_lang['lang_numero_censo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_numero_censo = $this->con_numero_censo;
   $sStyleHidden_con_numero_censo = '';
   if (isset($this->nmgp_cmp_hidden['con_numero_censo']) && $this->nmgp_cmp_hidden['con_numero_censo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_numero_censo']);
       $sStyleHidden_con_numero_censo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_numero_censo = 'display: none;';
   $sStyleReadInp_con_numero_censo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_numero_censo']) && $this->nmgp_cmp_readonly['con_numero_censo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_numero_censo']);
       $sStyleReadLab_con_numero_censo = '';
       $sStyleReadInp_con_numero_censo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_numero_censo']) && $this->nmgp_cmp_hidden['con_numero_censo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_numero_censo" value="<?php echo $this->form_encode_input($con_numero_censo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_numero_censo_label" id="hidden_field_label_con_numero_censo" style="<?php echo $sStyleHidden_con_numero_censo; ?>"><span id="id_label_con_numero_censo"><?php echo $this->nm_new_label['con_numero_censo']; ?></span></TD>
    <TD class="scFormDataOdd css_con_numero_censo_line" id="hidden_field_data_con_numero_censo" style="<?php echo $sStyleHidden_con_numero_censo; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_numero_censo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_numero_censo"]) &&  $this->nmgp_cmp_readonly["con_numero_censo"] == "on") { 

 ?>
<input type="hidden" name="con_numero_censo" value="<?php echo $this->form_encode_input($con_numero_censo) . "\">" . $con_numero_censo . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_numero_censo" class="sc-ui-readonly-con_numero_censo css_con_numero_censo_line" style="<?php echo $sStyleReadLab_con_numero_censo; ?>"><?php echo $this->form_format_readonly("con_numero_censo", $this->form_encode_input($this->con_numero_censo)); ?></span><span id="id_read_off_con_numero_censo" class="css_read_off_con_numero_censo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_numero_censo; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_numero_censo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_numero_censo" type=text name="con_numero_censo" value="<?php echo $this->form_encode_input($con_numero_censo) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=25"; } ?> maxlength=25 alt="{datatype: 'text', maxLength: 25, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_numero_censo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_numero_censo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_direccion_predio']))
    {
        $this->nm_new_label['con_direccion_predio'] = "" . $this->Ini->Nm_lang['lang_direccion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_direccion_predio = $this->con_direccion_predio;
   $sStyleHidden_con_direccion_predio = '';
   if (isset($this->nmgp_cmp_hidden['con_direccion_predio']) && $this->nmgp_cmp_hidden['con_direccion_predio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_direccion_predio']);
       $sStyleHidden_con_direccion_predio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_direccion_predio = 'display: none;';
   $sStyleReadInp_con_direccion_predio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_direccion_predio']) && $this->nmgp_cmp_readonly['con_direccion_predio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_direccion_predio']);
       $sStyleReadLab_con_direccion_predio = '';
       $sStyleReadInp_con_direccion_predio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_direccion_predio']) && $this->nmgp_cmp_hidden['con_direccion_predio'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_direccion_predio" value="<?php echo $this->form_encode_input($con_direccion_predio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_direccion_predio_label" id="hidden_field_label_con_direccion_predio" style="<?php echo $sStyleHidden_con_direccion_predio; ?>"><span id="id_label_con_direccion_predio"><?php echo $this->nm_new_label['con_direccion_predio']; ?></span></TD>
    <TD class="scFormDataOdd css_con_direccion_predio_line" id="hidden_field_data_con_direccion_predio" style="<?php echo $sStyleHidden_con_direccion_predio; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_direccion_predio_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_direccion_predio"]) &&  $this->nmgp_cmp_readonly["con_direccion_predio"] == "on") { 

 ?>
<input type="hidden" name="con_direccion_predio" value="<?php echo $this->form_encode_input($con_direccion_predio) . "\">" . $con_direccion_predio . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_direccion_predio" class="sc-ui-readonly-con_direccion_predio css_con_direccion_predio_line" style="<?php echo $sStyleReadLab_con_direccion_predio; ?>"><?php echo $this->form_format_readonly("con_direccion_predio", $this->form_encode_input($this->con_direccion_predio)); ?></span><span id="id_read_off_con_direccion_predio" class="css_read_off_con_direccion_predio<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_direccion_predio; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_direccion_predio_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_direccion_predio" type=text name="con_direccion_predio" value="<?php echo $this->form_encode_input($con_direccion_predio) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_direccion_predio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_direccion_predio_text"></span></td></tr></table></td></tr></table></TD>
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
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   </tr>
   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_datos_sis_riego'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_toma_administrativa']))
   {
       $this->nm_new_label['con_toma_administrativa'] = "" . $this->Ini->Nm_lang['lang_toma_administrativa'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_toma_administrativa = $this->con_toma_administrativa;
   $sStyleHidden_con_toma_administrativa = '';
   if (isset($this->nmgp_cmp_hidden['con_toma_administrativa']) && $this->nmgp_cmp_hidden['con_toma_administrativa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_toma_administrativa']);
       $sStyleHidden_con_toma_administrativa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_toma_administrativa = 'display: none;';
   $sStyleReadInp_con_toma_administrativa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_toma_administrativa']) && $this->nmgp_cmp_readonly['con_toma_administrativa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_toma_administrativa']);
       $sStyleReadLab_con_toma_administrativa = '';
       $sStyleReadInp_con_toma_administrativa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_toma_administrativa']) && $this->nmgp_cmp_hidden['con_toma_administrativa'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_toma_administrativa" value="<?php echo $this->form_encode_input($this->con_toma_administrativa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_toma_administrativa_label" id="hidden_field_label_con_toma_administrativa" style="<?php echo $sStyleHidden_con_toma_administrativa; ?>"><span id="id_label_con_toma_administrativa"><?php echo $this->nm_new_label['con_toma_administrativa']; ?></span></TD>
    <TD class="scFormDataOdd css_con_toma_administrativa_line" id="hidden_field_data_con_toma_administrativa" style="<?php echo $sStyleHidden_con_toma_administrativa; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_toma_administrativa_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_toma_administrativa"]) &&  $this->nmgp_cmp_readonly["con_toma_administrativa"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_administrativa'][] = $rs->fields[0];
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
   $con_toma_administrativa_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_toma_administrativa_1))
          {
              foreach ($this->con_toma_administrativa_1 as $tmp_con_toma_administrativa)
              {
                  if (trim($tmp_con_toma_administrativa) === trim($cadaselect[1])) {$con_toma_administrativa_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_toma_administrativa) && trim($this->con_toma_administrativa) === trim($cadaselect[1])) {$con_toma_administrativa_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_toma_administrativa" value="<?php echo $this->form_encode_input($con_toma_administrativa) . "\">" . $con_toma_administrativa_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_toma_administrativa();
   $x = 0 ; 
   $con_toma_administrativa_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_toma_administrativa_1))
          {
              foreach ($this->con_toma_administrativa_1 as $tmp_con_toma_administrativa)
              {
                  if (trim($tmp_con_toma_administrativa) === trim($cadaselect[1])) {$con_toma_administrativa_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_toma_administrativa) && trim($this->con_toma_administrativa) === trim($cadaselect[1])) { $con_toma_administrativa_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_toma_administrativa_look))
          {
              $con_toma_administrativa_look = $this->con_toma_administrativa;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_toma_administrativa\" class=\"css_con_toma_administrativa_line\" style=\"" .  $sStyleReadLab_con_toma_administrativa . "\">" . $this->form_format_readonly("con_toma_administrativa", $this->form_encode_input($con_toma_administrativa_look)) . "</span><span id=\"id_read_off_con_toma_administrativa\" class=\"css_read_off_con_toma_administrativa" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_toma_administrativa . "\">";
   echo " <span id=\"idAjaxSelect_con_toma_administrativa\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_toma_administrativa_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_toma_administrativa\" name=\"con_toma_administrativa\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_toma_administrativa) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_toma_administrativa)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_toma_administrativa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_toma_administrativa_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['con_toma_operativa']))
   {
       $this->nm_new_label['con_toma_operativa'] = "" . $this->Ini->Nm_lang['lang_toma_operativa'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_toma_operativa = $this->con_toma_operativa;
   $sStyleHidden_con_toma_operativa = '';
   if (isset($this->nmgp_cmp_hidden['con_toma_operativa']) && $this->nmgp_cmp_hidden['con_toma_operativa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_toma_operativa']);
       $sStyleHidden_con_toma_operativa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_toma_operativa = 'display: none;';
   $sStyleReadInp_con_toma_operativa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_toma_operativa']) && $this->nmgp_cmp_readonly['con_toma_operativa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_toma_operativa']);
       $sStyleReadLab_con_toma_operativa = '';
       $sStyleReadInp_con_toma_operativa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_toma_operativa']) && $this->nmgp_cmp_hidden['con_toma_operativa'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_toma_operativa" value="<?php echo $this->form_encode_input($this->con_toma_operativa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_toma_operativa_label" id="hidden_field_label_con_toma_operativa" style="<?php echo $sStyleHidden_con_toma_operativa; ?>"><span id="id_label_con_toma_operativa"><?php echo $this->nm_new_label['con_toma_operativa']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['php_cmp_required']['con_toma_operativa']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['php_cmp_required']['con_toma_operativa'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_con_toma_operativa_line" id="hidden_field_data_con_toma_operativa" style="<?php echo $sStyleHidden_con_toma_operativa; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_toma_operativa_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_toma_operativa"]) &&  $this->nmgp_cmp_readonly["con_toma_operativa"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa'] = array(); 
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
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa'][] = $rs->fields[0];
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
   $x = 0; 
   $con_toma_operativa_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_toma_operativa_1))
          {
              foreach ($this->con_toma_operativa_1 as $tmp_con_toma_operativa)
              {
                  if (trim($tmp_con_toma_operativa) === trim($cadaselect[1])) {$con_toma_operativa_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_toma_operativa) && trim($this->con_toma_operativa) === trim($cadaselect[1])) {$con_toma_operativa_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_toma_operativa" value="<?php echo $this->form_encode_input($con_toma_operativa) . "\">" . $con_toma_operativa_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_toma_operativa();
   $x = 0 ; 
   $con_toma_operativa_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_toma_operativa_1))
          {
              foreach ($this->con_toma_operativa_1 as $tmp_con_toma_operativa)
              {
                  if (trim($tmp_con_toma_operativa) === trim($cadaselect[1])) {$con_toma_operativa_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_toma_operativa) && trim($this->con_toma_operativa) === trim($cadaselect[1])) { $con_toma_operativa_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_toma_operativa_look))
          {
              $con_toma_operativa_look = $this->con_toma_operativa;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_toma_operativa\" class=\"css_con_toma_operativa_line\" style=\"" .  $sStyleReadLab_con_toma_operativa . "\">" . $this->form_format_readonly("con_toma_operativa", $this->form_encode_input($con_toma_operativa_look)) . "</span><span id=\"id_read_off_con_toma_operativa\" class=\"css_read_off_con_toma_operativa" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_toma_operativa . "\">";
   echo " <span id=\"idAjaxSelect_con_toma_operativa\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_toma_operativa_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_toma_operativa\" name=\"con_toma_operativa\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_toma_operativa'][] = ''; 
   echo "  <option value=\"\">" . str_replace("<", "&lt;","" . $this->Ini->Nm_lang['lang_seleccione'] . "") . "</option>" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_toma_operativa) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_toma_operativa)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_toma_operativa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_toma_operativa_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_condicion_contrato']))
   {
       $this->nm_new_label['con_condicion_contrato'] = "" . $this->Ini->Nm_lang['lang_condicion_contrato'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_condicion_contrato = $this->con_condicion_contrato;
   $sStyleHidden_con_condicion_contrato = '';
   if (isset($this->nmgp_cmp_hidden['con_condicion_contrato']) && $this->nmgp_cmp_hidden['con_condicion_contrato'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_condicion_contrato']);
       $sStyleHidden_con_condicion_contrato = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_condicion_contrato = 'display: none;';
   $sStyleReadInp_con_condicion_contrato = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_condicion_contrato']) && $this->nmgp_cmp_readonly['con_condicion_contrato'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_condicion_contrato']);
       $sStyleReadLab_con_condicion_contrato = '';
       $sStyleReadInp_con_condicion_contrato = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_condicion_contrato']) && $this->nmgp_cmp_hidden['con_condicion_contrato'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_condicion_contrato" value="<?php echo $this->form_encode_input($this->con_condicion_contrato) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_condicion_contrato_label" id="hidden_field_label_con_condicion_contrato" style="<?php echo $sStyleHidden_con_condicion_contrato; ?>"><span id="id_label_con_condicion_contrato"><?php echo $this->nm_new_label['con_condicion_contrato']; ?></span></TD>
    <TD class="scFormDataOdd css_con_condicion_contrato_line" id="hidden_field_data_con_condicion_contrato" style="<?php echo $sStyleHidden_con_condicion_contrato; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_condicion_contrato_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_condicion_contrato"]) &&  $this->nmgp_cmp_readonly["con_condicion_contrato"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_condicion_contrato'][] = $rs->fields[0];
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
   $con_condicion_contrato_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_condicion_contrato_1))
          {
              foreach ($this->con_condicion_contrato_1 as $tmp_con_condicion_contrato)
              {
                  if (trim($tmp_con_condicion_contrato) === trim($cadaselect[1])) {$con_condicion_contrato_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_condicion_contrato) && trim($this->con_condicion_contrato) === trim($cadaselect[1])) {$con_condicion_contrato_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_condicion_contrato" value="<?php echo $this->form_encode_input($con_condicion_contrato) . "\">" . $con_condicion_contrato_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_condicion_contrato();
   $x = 0 ; 
   $con_condicion_contrato_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_condicion_contrato_1))
          {
              foreach ($this->con_condicion_contrato_1 as $tmp_con_condicion_contrato)
              {
                  if (trim($tmp_con_condicion_contrato) === trim($cadaselect[1])) {$con_condicion_contrato_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_condicion_contrato) && trim($this->con_condicion_contrato) === trim($cadaselect[1])) { $con_condicion_contrato_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_condicion_contrato_look))
          {
              $con_condicion_contrato_look = $this->con_condicion_contrato;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_condicion_contrato\" class=\"css_con_condicion_contrato_line\" style=\"" .  $sStyleReadLab_con_condicion_contrato . "\">" . $this->form_format_readonly("con_condicion_contrato", $this->form_encode_input($con_condicion_contrato_look)) . "</span><span id=\"id_read_off_con_condicion_contrato\" class=\"css_read_off_con_condicion_contrato" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_condicion_contrato . "\">";
   echo " <span id=\"idAjaxSelect_con_condicion_contrato\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_condicion_contrato_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_condicion_contrato\" name=\"con_condicion_contrato\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_condicion_contrato) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_condicion_contrato)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_condicion_contrato_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_condicion_contrato_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
   if (!isset($this->nm_new_label['con_tipo_servicio']))
   {
       $this->nm_new_label['con_tipo_servicio'] = "" . $this->Ini->Nm_lang['lang_tipo_servicio'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_tipo_servicio = $this->con_tipo_servicio;
   $sStyleHidden_con_tipo_servicio = '';
   if (isset($this->nmgp_cmp_hidden['con_tipo_servicio']) && $this->nmgp_cmp_hidden['con_tipo_servicio'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_tipo_servicio']);
       $sStyleHidden_con_tipo_servicio = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_tipo_servicio = 'display: none;';
   $sStyleReadInp_con_tipo_servicio = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_tipo_servicio']) && $this->nmgp_cmp_readonly['con_tipo_servicio'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_tipo_servicio']);
       $sStyleReadLab_con_tipo_servicio = '';
       $sStyleReadInp_con_tipo_servicio = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_tipo_servicio']) && $this->nmgp_cmp_hidden['con_tipo_servicio'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_tipo_servicio" value="<?php echo $this->form_encode_input($this->con_tipo_servicio) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_tipo_servicio_label" id="hidden_field_label_con_tipo_servicio" style="<?php echo $sStyleHidden_con_tipo_servicio; ?>"><span id="id_label_con_tipo_servicio"><?php echo $this->nm_new_label['con_tipo_servicio']; ?></span></TD>
    <TD class="scFormDataOdd css_con_tipo_servicio_line" id="hidden_field_data_con_tipo_servicio" style="<?php echo $sStyleHidden_con_tipo_servicio; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_tipo_servicio_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_tipo_servicio"]) &&  $this->nmgp_cmp_readonly["con_tipo_servicio"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_tipo_servicio'][] = $rs->fields[0];
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
   $con_tipo_servicio_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_tipo_servicio_1))
          {
              foreach ($this->con_tipo_servicio_1 as $tmp_con_tipo_servicio)
              {
                  if (trim($tmp_con_tipo_servicio) === trim($cadaselect[1])) {$con_tipo_servicio_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_tipo_servicio) && trim($this->con_tipo_servicio) === trim($cadaselect[1])) {$con_tipo_servicio_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_tipo_servicio" value="<?php echo $this->form_encode_input($con_tipo_servicio) . "\">" . $con_tipo_servicio_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_tipo_servicio();
   $x = 0 ; 
   $con_tipo_servicio_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_tipo_servicio_1))
          {
              foreach ($this->con_tipo_servicio_1 as $tmp_con_tipo_servicio)
              {
                  if (trim($tmp_con_tipo_servicio) === trim($cadaselect[1])) {$con_tipo_servicio_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_tipo_servicio) && trim($this->con_tipo_servicio) === trim($cadaselect[1])) { $con_tipo_servicio_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_tipo_servicio_look))
          {
              $con_tipo_servicio_look = $this->con_tipo_servicio;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_tipo_servicio\" class=\"css_con_tipo_servicio_line\" style=\"" .  $sStyleReadLab_con_tipo_servicio . "\">" . $this->form_format_readonly("con_tipo_servicio", $this->form_encode_input($con_tipo_servicio_look)) . "</span><span id=\"id_read_off_con_tipo_servicio\" class=\"css_read_off_con_tipo_servicio" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_tipo_servicio . "\">";
   echo " <span id=\"idAjaxSelect_con_tipo_servicio\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_tipo_servicio_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_tipo_servicio\" name=\"con_tipo_servicio\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_tipo_servicio) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_tipo_servicio)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_tipo_servicio_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_tipo_servicio_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['con_ruta']))
   {
       $this->nm_new_label['con_ruta'] = "" . $this->Ini->Nm_lang['lang_ruta'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_ruta = $this->con_ruta;
   $sStyleHidden_con_ruta = '';
   if (isset($this->nmgp_cmp_hidden['con_ruta']) && $this->nmgp_cmp_hidden['con_ruta'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_ruta']);
       $sStyleHidden_con_ruta = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_ruta = 'display: none;';
   $sStyleReadInp_con_ruta = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_ruta']) && $this->nmgp_cmp_readonly['con_ruta'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_ruta']);
       $sStyleReadLab_con_ruta = '';
       $sStyleReadInp_con_ruta = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_ruta']) && $this->nmgp_cmp_hidden['con_ruta'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="con_ruta" value="<?php echo $this->form_encode_input($this->con_ruta) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_ruta_label" id="hidden_field_label_con_ruta" style="<?php echo $sStyleHidden_con_ruta; ?>"><span id="id_label_con_ruta"><?php echo $this->nm_new_label['con_ruta']; ?></span></TD>
    <TD class="scFormDataOdd css_con_ruta_line" id="hidden_field_data_con_ruta" style="<?php echo $sStyleHidden_con_ruta; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_ruta_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_ruta"]) &&  $this->nmgp_cmp_readonly["con_ruta"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta'] = array(); 
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['Lookup_con_ruta'][] = $rs->fields[0];
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
   $con_ruta_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_ruta_1))
          {
              foreach ($this->con_ruta_1 as $tmp_con_ruta)
              {
                  if (trim($tmp_con_ruta) === trim($cadaselect[1])) {$con_ruta_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_ruta) && trim($this->con_ruta) === trim($cadaselect[1])) {$con_ruta_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="con_ruta" value="<?php echo $this->form_encode_input($con_ruta) . "\">" . $con_ruta_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_con_ruta();
   $x = 0 ; 
   $con_ruta_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->con_ruta_1))
          {
              foreach ($this->con_ruta_1 as $tmp_con_ruta)
              {
                  if (trim($tmp_con_ruta) === trim($cadaselect[1])) {$con_ruta_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->con_ruta) && trim($this->con_ruta) === trim($cadaselect[1])) { $con_ruta_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($con_ruta_look))
          {
              $con_ruta_look = $this->con_ruta;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_con_ruta\" class=\"css_con_ruta_line\" style=\"" .  $sStyleReadLab_con_ruta . "\">" . $this->form_format_readonly("con_ruta", $this->form_encode_input($con_ruta_look)) . "</span><span id=\"id_read_off_con_ruta\" class=\"css_read_off_con_ruta" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_con_ruta . "\">";
   echo " <span id=\"idAjaxSelect_con_ruta\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_con_ruta_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_con_ruta\" name=\"con_ruta\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->con_ruta) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->con_ruta)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_ruta_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_ruta_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_orden_lecturas']))
    {
        $this->nm_new_label['con_orden_lecturas'] = "" . $this->Ini->Nm_lang['lang_orden_ingreso'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_orden_lecturas = $this->con_orden_lecturas;
   $sStyleHidden_con_orden_lecturas = '';
   if (isset($this->nmgp_cmp_hidden['con_orden_lecturas']) && $this->nmgp_cmp_hidden['con_orden_lecturas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_orden_lecturas']);
       $sStyleHidden_con_orden_lecturas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_orden_lecturas = 'display: none;';
   $sStyleReadInp_con_orden_lecturas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_orden_lecturas']) && $this->nmgp_cmp_readonly['con_orden_lecturas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_orden_lecturas']);
       $sStyleReadLab_con_orden_lecturas = '';
       $sStyleReadInp_con_orden_lecturas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_orden_lecturas']) && $this->nmgp_cmp_hidden['con_orden_lecturas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_orden_lecturas" value="<?php echo $this->form_encode_input($con_orden_lecturas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_orden_lecturas_label" id="hidden_field_label_con_orden_lecturas" style="<?php echo $sStyleHidden_con_orden_lecturas; ?>"><span id="id_label_con_orden_lecturas"><?php echo $this->nm_new_label['con_orden_lecturas']; ?></span></TD>
    <TD class="scFormDataOdd css_con_orden_lecturas_line" id="hidden_field_data_con_orden_lecturas" style="<?php echo $sStyleHidden_con_orden_lecturas; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_orden_lecturas_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_orden_lecturas" value="<?php echo $this->form_encode_input($con_orden_lecturas); ?>"><span id="id_ajax_label_con_orden_lecturas"><?php echo nl2br($con_orden_lecturas); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_orden_lecturas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_orden_lecturas_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_numero_corte']))
    {
        $this->nm_new_label['con_numero_corte'] = "" . $this->Ini->Nm_lang['lang_nro_corte'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_numero_corte = $this->con_numero_corte;
   $sStyleHidden_con_numero_corte = '';
   if (isset($this->nmgp_cmp_hidden['con_numero_corte']) && $this->nmgp_cmp_hidden['con_numero_corte'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_numero_corte']);
       $sStyleHidden_con_numero_corte = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_numero_corte = 'display: none;';
   $sStyleReadInp_con_numero_corte = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_numero_corte']) && $this->nmgp_cmp_readonly['con_numero_corte'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_numero_corte']);
       $sStyleReadLab_con_numero_corte = '';
       $sStyleReadInp_con_numero_corte = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_numero_corte']) && $this->nmgp_cmp_hidden['con_numero_corte'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_numero_corte" value="<?php echo $this->form_encode_input($con_numero_corte) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_numero_corte_label" id="hidden_field_label_con_numero_corte" style="<?php echo $sStyleHidden_con_numero_corte; ?>"><span id="id_label_con_numero_corte"><?php echo $this->nm_new_label['con_numero_corte']; ?></span></TD>
    <TD class="scFormDataOdd css_con_numero_corte_line" id="hidden_field_data_con_numero_corte" style="<?php echo $sStyleHidden_con_numero_corte; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_numero_corte_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_numero_corte"]) &&  $this->nmgp_cmp_readonly["con_numero_corte"] == "on") { 

 ?>
<input type="hidden" name="con_numero_corte" value="<?php echo $this->form_encode_input($con_numero_corte) . "\">" . $con_numero_corte . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_numero_corte" class="sc-ui-readonly-con_numero_corte css_con_numero_corte_line" style="<?php echo $sStyleReadLab_con_numero_corte; ?>"><?php echo $this->form_format_readonly("con_numero_corte", $this->form_encode_input($this->con_numero_corte)); ?></span><span id="id_read_off_con_numero_corte" class="css_read_off_con_numero_corte<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_numero_corte; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_numero_corte_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_numero_corte" type=text name="con_numero_corte" value="<?php echo $this->form_encode_input($con_numero_corte) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['con_numero_corte']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['con_numero_corte']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_numero_corte_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_numero_corte_text"></span></td></tr></table></td></tr></table></TD>
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
   <a name="bloco_4"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_4"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_4" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   <td style="border:0;padding:0;height:0"></td>
   </tr>
   <tr>


    <TD colspan="4" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_inspeccion'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_fecha_instalacion']))
    {
        $this->nm_new_label['con_fecha_instalacion'] = "" . $this->Ini->Nm_lang['lang_fecha_instalacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_fecha_instalacion = $this->con_fecha_instalacion;
   $sStyleHidden_con_fecha_instalacion = '';
   if (isset($this->nmgp_cmp_hidden['con_fecha_instalacion']) && $this->nmgp_cmp_hidden['con_fecha_instalacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_fecha_instalacion']);
       $sStyleHidden_con_fecha_instalacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_fecha_instalacion = 'display: none;';
   $sStyleReadInp_con_fecha_instalacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_fecha_instalacion']) && $this->nmgp_cmp_readonly['con_fecha_instalacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_fecha_instalacion']);
       $sStyleReadLab_con_fecha_instalacion = '';
       $sStyleReadInp_con_fecha_instalacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_fecha_instalacion']) && $this->nmgp_cmp_hidden['con_fecha_instalacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_fecha_instalacion" value="<?php echo $this->form_encode_input($con_fecha_instalacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_fecha_instalacion_label" id="hidden_field_label_con_fecha_instalacion" style="<?php echo $sStyleHidden_con_fecha_instalacion; ?>"><span id="id_label_con_fecha_instalacion"><?php echo $this->nm_new_label['con_fecha_instalacion']; ?></span></TD>
    <TD class="scFormDataOdd css_con_fecha_instalacion_line" id="hidden_field_data_con_fecha_instalacion" style="<?php echo $sStyleHidden_con_fecha_instalacion; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_fecha_instalacion_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_fecha_instalacion"]) &&  $this->nmgp_cmp_readonly["con_fecha_instalacion"] == "on") { 

 ?>
<input type="hidden" name="con_fecha_instalacion" value="<?php echo $this->form_encode_input($con_fecha_instalacion) . "\">" . $con_fecha_instalacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_fecha_instalacion" class="sc-ui-readonly-con_fecha_instalacion css_con_fecha_instalacion_line" style="<?php echo $sStyleReadLab_con_fecha_instalacion; ?>"><?php echo $this->form_format_readonly("con_fecha_instalacion", $this->form_encode_input($con_fecha_instalacion)); ?></span><span id="id_read_off_con_fecha_instalacion" class="css_read_off_con_fecha_instalacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_fecha_instalacion; ?>"><?php
$tmp_form_data = $this->field_config['con_fecha_instalacion']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_con_fecha_instalacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_fecha_instalacion" type=text name="con_fecha_instalacion" value="<?php echo $this->form_encode_input($con_fecha_instalacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=18"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['con_fecha_instalacion']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['con_fecha_instalacion']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_fecha_instalacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_fecha_instalacion_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_numero_medidor']))
    {
        $this->nm_new_label['con_numero_medidor'] = "" . $this->Ini->Nm_lang['lang_numero_medidor'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_numero_medidor = $this->con_numero_medidor;
   $sStyleHidden_con_numero_medidor = '';
   if (isset($this->nmgp_cmp_hidden['con_numero_medidor']) && $this->nmgp_cmp_hidden['con_numero_medidor'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_numero_medidor']);
       $sStyleHidden_con_numero_medidor = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_numero_medidor = 'display: none;';
   $sStyleReadInp_con_numero_medidor = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_numero_medidor']) && $this->nmgp_cmp_readonly['con_numero_medidor'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_numero_medidor']);
       $sStyleReadLab_con_numero_medidor = '';
       $sStyleReadInp_con_numero_medidor = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_numero_medidor']) && $this->nmgp_cmp_hidden['con_numero_medidor'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_numero_medidor" value="<?php echo $this->form_encode_input($con_numero_medidor) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_numero_medidor_label" id="hidden_field_label_con_numero_medidor" style="<?php echo $sStyleHidden_con_numero_medidor; ?>"><span id="id_label_con_numero_medidor"><?php echo $this->nm_new_label['con_numero_medidor']; ?></span></TD>
    <TD class="scFormDataOdd css_con_numero_medidor_line" id="hidden_field_data_con_numero_medidor" style="<?php echo $sStyleHidden_con_numero_medidor; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_numero_medidor_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_numero_medidor"]) &&  $this->nmgp_cmp_readonly["con_numero_medidor"] == "on") { 

 ?>
<input type="hidden" name="con_numero_medidor" value="<?php echo $this->form_encode_input($con_numero_medidor) . "\">" . $con_numero_medidor . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_numero_medidor" class="sc-ui-readonly-con_numero_medidor css_con_numero_medidor_line" style="<?php echo $sStyleReadLab_con_numero_medidor; ?>"><?php echo $this->form_format_readonly("con_numero_medidor", $this->form_encode_input($this->con_numero_medidor)); ?></span><span id="id_read_off_con_numero_medidor" class="css_read_off_con_numero_medidor<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_numero_medidor; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_numero_medidor_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_numero_medidor" type=text name="con_numero_medidor" value="<?php echo $this->form_encode_input($con_numero_medidor) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=15"; } ?> maxlength=15 alt="{datatype: 'text', maxLength: 15, allowedChars: '<?php echo $this->allowedCharsCharset("abcdefghijklmnopqrstuvwxyz0123456789") ?>', lettersCase: 'upper', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_numero_medidor_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_numero_medidor_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_maxima_lectura']))
    {
        $this->nm_new_label['con_maxima_lectura'] = "" . $this->Ini->Nm_lang['lang_lectura_maxima'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_maxima_lectura = $this->con_maxima_lectura;
   $sStyleHidden_con_maxima_lectura = '';
   if (isset($this->nmgp_cmp_hidden['con_maxima_lectura']) && $this->nmgp_cmp_hidden['con_maxima_lectura'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_maxima_lectura']);
       $sStyleHidden_con_maxima_lectura = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_maxima_lectura = 'display: none;';
   $sStyleReadInp_con_maxima_lectura = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_maxima_lectura']) && $this->nmgp_cmp_readonly['con_maxima_lectura'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_maxima_lectura']);
       $sStyleReadLab_con_maxima_lectura = '';
       $sStyleReadInp_con_maxima_lectura = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_maxima_lectura']) && $this->nmgp_cmp_hidden['con_maxima_lectura'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_maxima_lectura" value="<?php echo $this->form_encode_input($con_maxima_lectura) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_maxima_lectura_label" id="hidden_field_label_con_maxima_lectura" style="<?php echo $sStyleHidden_con_maxima_lectura; ?>"><span id="id_label_con_maxima_lectura"><?php echo $this->nm_new_label['con_maxima_lectura']; ?></span></TD>
    <TD class="scFormDataOdd css_con_maxima_lectura_line" id="hidden_field_data_con_maxima_lectura" style="<?php echo $sStyleHidden_con_maxima_lectura; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_maxima_lectura_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_maxima_lectura"]) &&  $this->nmgp_cmp_readonly["con_maxima_lectura"] == "on") { 

 ?>
<input type="hidden" name="con_maxima_lectura" value="<?php echo $this->form_encode_input($con_maxima_lectura) . "\">" . $con_maxima_lectura . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_maxima_lectura" class="sc-ui-readonly-con_maxima_lectura css_con_maxima_lectura_line" style="<?php echo $sStyleReadLab_con_maxima_lectura; ?>"><?php echo $this->form_format_readonly("con_maxima_lectura", $this->form_encode_input($this->con_maxima_lectura)); ?></span><span id="id_read_off_con_maxima_lectura" class="css_read_off_con_maxima_lectura<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_maxima_lectura; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_maxima_lectura_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_maxima_lectura" type=text name="con_maxima_lectura" value="<?php echo $this->form_encode_input($con_maxima_lectura) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['con_maxima_lectura']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['con_maxima_lectura']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_maxima_lectura_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_maxima_lectura_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_lectura_actual']))
    {
        $this->nm_new_label['con_lectura_actual'] = "" . $this->Ini->Nm_lang['lang_lectura_actual'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_lectura_actual = $this->con_lectura_actual;
   $sStyleHidden_con_lectura_actual = '';
   if (isset($this->nmgp_cmp_hidden['con_lectura_actual']) && $this->nmgp_cmp_hidden['con_lectura_actual'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_lectura_actual']);
       $sStyleHidden_con_lectura_actual = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_lectura_actual = 'display: none;';
   $sStyleReadInp_con_lectura_actual = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_lectura_actual']) && $this->nmgp_cmp_readonly['con_lectura_actual'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_lectura_actual']);
       $sStyleReadLab_con_lectura_actual = '';
       $sStyleReadInp_con_lectura_actual = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_lectura_actual']) && $this->nmgp_cmp_hidden['con_lectura_actual'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_lectura_actual" value="<?php echo $this->form_encode_input($con_lectura_actual) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_lectura_actual_label" id="hidden_field_label_con_lectura_actual" style="<?php echo $sStyleHidden_con_lectura_actual; ?>"><span id="id_label_con_lectura_actual"><?php echo $this->nm_new_label['con_lectura_actual']; ?></span></TD>
    <TD class="scFormDataOdd css_con_lectura_actual_line" id="hidden_field_data_con_lectura_actual" style="<?php echo $sStyleHidden_con_lectura_actual; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_lectura_actual_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_lectura_actual"]) &&  $this->nmgp_cmp_readonly["con_lectura_actual"] == "on") { 

 ?>
<input type="hidden" name="con_lectura_actual" value="<?php echo $this->form_encode_input($con_lectura_actual) . "\">" . $con_lectura_actual . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_lectura_actual" class="sc-ui-readonly-con_lectura_actual css_con_lectura_actual_line" style="<?php echo $sStyleReadLab_con_lectura_actual; ?>"><?php echo $this->form_format_readonly("con_lectura_actual", $this->form_encode_input($this->con_lectura_actual)); ?></span><span id="id_read_off_con_lectura_actual" class="css_read_off_con_lectura_actual<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_lectura_actual; ?>">
 <input class="sc-js-input scFormObjectOdd css_con_lectura_actual_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_lectura_actual" type=text name="con_lectura_actual" value="<?php echo $this->form_encode_input($con_lectura_actual) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=9"; } ?> maxlength=9 alt="{datatype: 'integer', maxLength: 9, thousandsSep: '', thousandsFormat: <?php echo $this->field_config['con_lectura_actual']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['con_lectura_actual']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_lectura_actual_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_lectura_actual_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_fecha_lectura']))
    {
        $this->nm_new_label['con_fecha_lectura'] = "" . $this->Ini->Nm_lang['lang_fecha_ultima_lectura'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_fecha_lectura = $this->con_fecha_lectura;
   $sStyleHidden_con_fecha_lectura = '';
   if (isset($this->nmgp_cmp_hidden['con_fecha_lectura']) && $this->nmgp_cmp_hidden['con_fecha_lectura'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_fecha_lectura']);
       $sStyleHidden_con_fecha_lectura = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_fecha_lectura = 'display: none;';
   $sStyleReadInp_con_fecha_lectura = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_fecha_lectura']) && $this->nmgp_cmp_readonly['con_fecha_lectura'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_fecha_lectura']);
       $sStyleReadLab_con_fecha_lectura = '';
       $sStyleReadInp_con_fecha_lectura = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_fecha_lectura']) && $this->nmgp_cmp_hidden['con_fecha_lectura'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_fecha_lectura" value="<?php echo $this->form_encode_input($con_fecha_lectura) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_fecha_lectura_label" id="hidden_field_label_con_fecha_lectura" style="<?php echo $sStyleHidden_con_fecha_lectura; ?>"><span id="id_label_con_fecha_lectura"><?php echo $this->nm_new_label['con_fecha_lectura']; ?></span></TD>
    <TD class="scFormDataOdd css_con_fecha_lectura_line" id="hidden_field_data_con_fecha_lectura" style="<?php echo $sStyleHidden_con_fecha_lectura; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_fecha_lectura_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_fecha_lectura"]) &&  $this->nmgp_cmp_readonly["con_fecha_lectura"] == "on") { 

 ?>
<input type="hidden" name="con_fecha_lectura" value="<?php echo $this->form_encode_input($con_fecha_lectura) . "\">" . $con_fecha_lectura . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_fecha_lectura" class="sc-ui-readonly-con_fecha_lectura css_con_fecha_lectura_line" style="<?php echo $sStyleReadLab_con_fecha_lectura; ?>"><?php echo $this->form_format_readonly("con_fecha_lectura", $this->form_encode_input($con_fecha_lectura)); ?></span><span id="id_read_off_con_fecha_lectura" class="css_read_off_con_fecha_lectura<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_fecha_lectura; ?>"><?php
$tmp_form_data = $this->field_config['con_fecha_lectura']['date_format'];
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

 <input class="sc-js-input scFormObjectOdd css_con_fecha_lectura_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_con_fecha_lectura" type=text name="con_fecha_lectura" value="<?php echo $this->form_encode_input($con_fecha_lectura) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=10"; } ?> alt="{datatype: 'date', dateSep: '<?php echo $this->field_config['con_fecha_lectura']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['con_fecha_lectura']['date_format']; ?>', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_fecha_lectura_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_fecha_lectura_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['con_observaciones']))
    {
        $this->nm_new_label['con_observaciones'] = "" . $this->Ini->Nm_lang['lang_observacion'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_observaciones = $this->con_observaciones;
   $sStyleHidden_con_observaciones = '';
   if (isset($this->nmgp_cmp_hidden['con_observaciones']) && $this->nmgp_cmp_hidden['con_observaciones'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_observaciones']);
       $sStyleHidden_con_observaciones = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_observaciones = 'display: none;';
   $sStyleReadInp_con_observaciones = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_observaciones']) && $this->nmgp_cmp_readonly['con_observaciones'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_observaciones']);
       $sStyleReadLab_con_observaciones = '';
       $sStyleReadInp_con_observaciones = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_observaciones']) && $this->nmgp_cmp_hidden['con_observaciones'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_observaciones" value="<?php echo $this->form_encode_input($con_observaciones) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_observaciones_label" id="hidden_field_label_con_observaciones" style="<?php echo $sStyleHidden_con_observaciones; ?>"><span id="id_label_con_observaciones"><?php echo $this->nm_new_label['con_observaciones']; ?></span></TD>
    <TD class="scFormDataOdd css_con_observaciones_line" id="hidden_field_data_con_observaciones" style="<?php echo $sStyleHidden_con_observaciones; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_observaciones_line" style="vertical-align: top;padding: 0px">
<?php
$con_observaciones_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($con_observaciones));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["con_observaciones"]) &&  $this->nmgp_cmp_readonly["con_observaciones"] == "on") { 

 ?>
<input type="hidden" name="con_observaciones" value="<?php echo $this->form_encode_input($con_observaciones) . "\">" . $con_observaciones_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_con_observaciones" class="sc-ui-readonly-con_observaciones css_con_observaciones_line" style="<?php echo $sStyleReadLab_con_observaciones; ?>"><?php echo $this->form_format_readonly("con_observaciones", $this->form_encode_input($con_observaciones_val)); ?></span><span id="id_read_off_con_observaciones" class="css_read_off_con_observaciones<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_con_observaciones; ?>">
 <textarea class="sc-js-input scFormObjectOdd css_con_observaciones_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="white-space: pre-wrap;resize: vertical;" name="con_observaciones" id="id_sc_field_con_observaciones" rows="2" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $con_observaciones; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_observaciones_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_observaciones_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['con_usuario_instala']))
    {
        $this->nm_new_label['con_usuario_instala'] = "" . $this->Ini->Nm_lang['lang_usuario_instala'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $con_usuario_instala = $this->con_usuario_instala;
   $sStyleHidden_con_usuario_instala = '';
   if (isset($this->nmgp_cmp_hidden['con_usuario_instala']) && $this->nmgp_cmp_hidden['con_usuario_instala'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['con_usuario_instala']);
       $sStyleHidden_con_usuario_instala = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_con_usuario_instala = 'display: none;';
   $sStyleReadInp_con_usuario_instala = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['con_usuario_instala']) && $this->nmgp_cmp_readonly['con_usuario_instala'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['con_usuario_instala']);
       $sStyleReadLab_con_usuario_instala = '';
       $sStyleReadInp_con_usuario_instala = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['con_usuario_instala']) && $this->nmgp_cmp_hidden['con_usuario_instala'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="con_usuario_instala" value="<?php echo $this->form_encode_input($con_usuario_instala) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_con_usuario_instala_label" id="hidden_field_label_con_usuario_instala" style="<?php echo $sStyleHidden_con_usuario_instala; ?>"><span id="id_label_con_usuario_instala"><?php echo $this->nm_new_label['con_usuario_instala']; ?></span></TD>
    <TD class="scFormDataOdd css_con_usuario_instala_line" id="hidden_field_data_con_usuario_instala" style="<?php echo $sStyleHidden_con_usuario_instala; ?>"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_con_usuario_instala_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="con_usuario_instala" value="<?php echo $this->form_encode_input($con_usuario_instala); ?>"><span id="id_ajax_label_con_usuario_instala"><?php echo nl2br($con_usuario_instala); ?></span>
 <SPAN id="id_lookup_con_usuario_instala"><?php echo $look_rpc_con_usuario_instala; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_con_usuario_instala_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_con_usuario_instala_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

    <TD class="scFormDataOdd" colspan="2" >&nbsp;</TD>
<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr>
<tr id="sc-id-required-row"><td class="scFormPageText">
<span class="scFormRequiredOddColor">* <?php echo $this->Ini->Nm_lang['lang_othr_reqr']; ?></span>
</td></tr> 
<tr><td>
<?php
$this->displayBottomToolbar();
?>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R")
{
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['new'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label'][''];
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
        $sCondStyle = ($this->nmgp_botoes['anular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['anular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_disabled']['anular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['anular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['anular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['btn_label']['anular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "anular", "scBtnFn_anular()", "scBtnFn_anular()", "sc_anular_bot", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['run_iframe'] != "R")
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_jap_anular_contrato");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_jap_anular_contrato");
 parent.scAjaxDetailHeight("form_jap_anular_contrato", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_jap_anular_contrato", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_jap_anular_contrato", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['sc_modal'])
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
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
		    if ($("#sc_b_new_t.sc-unique-btn-1").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
		    if ($("#sc_b_ins_t.sc-unique-btn-2").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_b.sc-unique-btn-9").length && $("#sc_b_new_b.sc-unique-btn-9").is(":visible")) {
		    if ($("#sc_b_new_b.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_b.sc-unique-btn-10").length && $("#sc_b_ins_b.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_ins_b.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('incluir');
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
		if ($("#sc_b_upd_b.sc-unique-btn-11").length && $("#sc_b_upd_b.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_upd_b.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-4").length && $("#sys_separator.sc-unique-btn-4").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-4").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-5").length && $("#sys_separator.sc-unique-btn-5").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
		if ($("#sys_separator.sc-unique-btn-12").length && $("#sys_separator.sc-unique-btn-12").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-12").hasClass("disabled")) {
		        return;
		    }
			return false;
			 return;
		}
	}
	function scBtnFn_anular() {
		if ($("#sc_anular_top").length && $("#sc_anular_top").is(":visible")) {
		    if ($("#sc_anular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_anular()
			 return;
		}
		if ($("#sc_anular_bot").length && $("#sc_anular_bot").is(":visible")) {
		    if ($("#sc_anular_bot").hasClass("disabled")) {
		        return;
		    }
			sc_btn_anular()
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
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_anular_contrato']['buttonStatus'] = $this->nmgp_botoes;
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
