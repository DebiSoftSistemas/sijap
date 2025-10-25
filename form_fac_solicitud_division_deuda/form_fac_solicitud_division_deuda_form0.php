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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_subdivision_deuda'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_subdivision_deuda'] . ""); } ?></TITLE>
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
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_fac_solicitud_division_deuda/form_fac_solicitud_division_deuda_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_fac_solicitud_division_deuda_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['last'] : 'off'); ?>";
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

 function recargar_marco() {
  document.getElementById('nmsc_iframe_liga_form_fac_operaciones_dividir').contentDocument.location.reload(true);
 } // recargar_marco
<?php

include_once('form_fac_solicitud_division_deuda_jquery.php');

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

  $("#hidden_bloco_0,#hidden_bloco_1,#hidden_bloco_2").each(function() {
   $(this.rows[1]).bind("click", {block: this}, toggleBlock)
                  .mouseover(function() { $(this).css("cursor", "pointer"); })
                  .mouseout(function() { $(this).css("cursor", ""); });
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
    "hidden_bloco_0": true,
    "hidden_bloco_1": true,
    "hidden_bloco_2": true
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
    if ("hidden_bloco_1" == block_id) {
      scAjaxDetailHeight("form_fac_operaciones_dividir", $($("#nmsc_iframe_liga_form_fac_operaciones_dividir")[0].contentWindow.document).innerHeight());
    }
    if ("hidden_bloco_2" == block_id) {
      scAjaxDetailHeight("grid_fac_cuotas_division", $($("#nmsc_iframe_liga_grid_fac_cuotas_division")[0].contentWindow.document).innerHeight());
    }
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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['recarga'];
}
if ('' != $this->sdd_estado)
{
    $this->lookup_sdd_estado($look_rpc_sdd_estado);
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['link_info']['remove_border']) {
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
 include_once("form_fac_solicitud_division_deuda_js0.php");
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
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['insert_validation']; ?>">
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
$_SESSION['scriptcase']['error_span_title']['form_fac_solicitud_division_deuda'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_fac_solicitud_division_deuda'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R")
{
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['fast_search'][2] : "";
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['new']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['new']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['new']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['new']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['new'];
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
        $buttonMacroDisabled = 'sc-unique-btn-3';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['insert']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['insert']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['insert']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['insert']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['insert'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-4';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['bcancelar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['bcancelar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['bcancelar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['bcancelar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['bcancelar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Escape)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-5';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['update']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['update']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['update']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['update']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['update'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-6';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['delete']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['delete']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['delete']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['delete']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['delete'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-7';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-8';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-9';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['exit'];
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
    if (($opcao_botoes != "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['agregar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['agregar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['agregar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['agregar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['agregar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['agregar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "agregar", "scBtnFn_agregar()", "scBtnFn_agregar()", "sc_agregar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['agregar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['agregar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['agregar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['agregar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['agregar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['agregar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "agregar", "scBtnFn_agregar()", "scBtnFn_agregar()", "sc_agregar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['simular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['simular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['simular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['simular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['simular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['simular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "simular", "scBtnFn_simular()", "scBtnFn_simular()", "sc_simular_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['simular'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['simular']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['simular']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['simular']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['simular']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['simular'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "simular", "scBtnFn_simular()", "scBtnFn_simular()", "sc_simular_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['procesar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['procesar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['procesar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['procesar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['procesar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['procesar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "procesar", "scBtnFn_procesar()", "scBtnFn_procesar()", "sc_procesar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['procesar'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['procesar']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['procesar']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['procesar']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['procesar']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['procesar'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "procesar", "scBtnFn_procesar()", "scBtnFn_procesar()", "sc_procesar_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['imprimir'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['imprimir']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['imprimir']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['imprimir']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['imprimir']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['imprimir'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "imprimir", "scBtnFn_imprimir()", "scBtnFn_imprimir()", "sc_imprimir_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && ($opcao_botoes != "novo")) {
        $sCondStyle = ($this->nmgp_botoes['imprimir'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['imprimir']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['imprimir']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['imprimir']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['imprimir']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['imprimir'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "imprimir", "scBtnFn_imprimir()", "scBtnFn_imprimir()", "sc_imprimir_top", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
   if (!isset($this->nmgp_cmp_hidden['sdd_id']))
   {
       $this->nmgp_cmp_hidden['sdd_id'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sdd_ip']))
   {
       $this->nmgp_cmp_hidden['sdd_ip'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sdd_usuario']))
   {
       $this->nmgp_cmp_hidden['sdd_usuario'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sdd_secuencial_documento']))
   {
       $this->nmgp_cmp_hidden['sdd_secuencial_documento'] = 'off';
   }
   if (!isset($this->nmgp_cmp_hidden['sdd_empresa']))
   {
       $this->nmgp_cmp_hidden['sdd_empresa'] = 'off';
   }
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['sdd_id']))
           {
               $this->nmgp_cmp_readonly['sdd_id'] = 'on';
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf0\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_datos_generales'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>
   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sdd_id']))
    {
        $this->nm_new_label['sdd_id'] = "" . $this->Ini->Nm_lang['lang_id'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_id = $this->sdd_id;
   if (!isset($this->nmgp_cmp_hidden['sdd_id']))
   {
       $this->nmgp_cmp_hidden['sdd_id'] = 'off';
   }
   $sStyleHidden_sdd_id = '';
   if (isset($this->nmgp_cmp_hidden['sdd_id']) && $this->nmgp_cmp_hidden['sdd_id'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_id']);
       $sStyleHidden_sdd_id = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_id = 'display: none;';
   $sStyleReadInp_sdd_id = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["sdd_id"]) &&  $this->nmgp_cmp_readonly["sdd_id"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_id']);
       $sStyleReadLab_sdd_id = '';
       $sStyleReadInp_sdd_id = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_id']) && $this->nmgp_cmp_hidden['sdd_id'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_id" value="<?php echo $this->form_encode_input($sdd_id) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_id_label" id="hidden_field_label_sdd_id" style="<?php echo $sStyleHidden_sdd_id; ?>"><span id="id_label_sdd_id"><?php echo $this->nm_new_label['sdd_id']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_id_line" id="hidden_field_data_sdd_id" style="<?php echo $sStyleHidden_sdd_id; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_id_line" style="vertical-align: top;padding: 0px">
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { 
 ?>
<span id="id_read_on_sdd_id" css_sdd_id_line" style="<?php echo $sStyleReadLab_sdd_id; ?>"><?php echo $this->form_format_readonly("sdd_id", $this->form_encode_input($this->sdd_id)); ?></span><span id="id_read_off_sdd_id" class="css_read_off_sdd_id" style="<?php echo $sStyleReadInp_sdd_id; ?>"><input type="hidden" name="sdd_id" value="<?php echo $this->form_encode_input($sdd_id) . "\">"?><span id="id_ajax_label_sdd_id"><?php echo nl2br($sdd_id); ?></span>
</span><?php } else { ?>
&nbsp;
<?php } ?>
</span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_id_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_id_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sdd_fecha']))
    {
        $this->nm_new_label['sdd_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_fecha = $this->sdd_fecha;
   $sStyleHidden_sdd_fecha = '';
   if (isset($this->nmgp_cmp_hidden['sdd_fecha']) && $this->nmgp_cmp_hidden['sdd_fecha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_fecha']);
       $sStyleHidden_sdd_fecha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_fecha = 'display: none;';
   $sStyleReadInp_sdd_fecha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_fecha']) && $this->nmgp_cmp_readonly['sdd_fecha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_fecha']);
       $sStyleReadLab_sdd_fecha = '';
       $sStyleReadInp_sdd_fecha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_fecha']) && $this->nmgp_cmp_hidden['sdd_fecha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_fecha" value="<?php echo $this->form_encode_input($sdd_fecha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_fecha_label" id="hidden_field_label_sdd_fecha" style="<?php echo $sStyleHidden_sdd_fecha; ?>"><span id="id_label_sdd_fecha"><?php echo $this->nm_new_label['sdd_fecha']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_fecha_line" id="hidden_field_data_sdd_fecha" style="<?php echo $sStyleHidden_sdd_fecha; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_fecha_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="sdd_fecha" value="<?php echo $this->form_encode_input($sdd_fecha); ?>"><span id="id_ajax_label_sdd_fecha"><?php echo nl2br($sdd_fecha); ?></span>
<?php
$tmp_form_data = $this->field_config['sdd_fecha']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_fecha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_fecha_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['sdd_propietario']))
   {
       $this->nm_new_label['sdd_propietario'] = "" . $this->Ini->Nm_lang['lang_propietario'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_propietario = $this->sdd_propietario;
   $sStyleHidden_sdd_propietario = '';
   if (isset($this->nmgp_cmp_hidden['sdd_propietario']) && $this->nmgp_cmp_hidden['sdd_propietario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_propietario']);
       $sStyleHidden_sdd_propietario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_propietario = 'display: none;';
   $sStyleReadInp_sdd_propietario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_propietario']) && $this->nmgp_cmp_readonly['sdd_propietario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_propietario']);
       $sStyleReadLab_sdd_propietario = '';
       $sStyleReadInp_sdd_propietario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_propietario']) && $this->nmgp_cmp_hidden['sdd_propietario'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="sdd_propietario" value="<?php echo $this->form_encode_input($this->sdd_propietario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_propietario_label" id="hidden_field_label_sdd_propietario" style="<?php echo $sStyleHidden_sdd_propietario; ?>"><span id="id_label_sdd_propietario"><?php echo $this->nm_new_label['sdd_propietario']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['php_cmp_required']['sdd_propietario']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['php_cmp_required']['sdd_propietario'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_sdd_propietario_line" id="hidden_field_data_sdd_propietario" style="<?php echo $sStyleHidden_sdd_propietario; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_propietario_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sdd_propietario"]) &&  $this->nmgp_cmp_readonly["sdd_propietario"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario'] = array(); 
    }

   $old_value_sdd_id = $this->sdd_id;
   $old_value_sdd_fecha = $this->sdd_fecha;
   $old_value_sdd_monto = $this->sdd_monto;
   $old_value_sdd_plazo = $this->sdd_plazo;
   $old_value_sdd_secuencial_documento = $this->sdd_secuencial_documento;
   $this->nm_tira_formatacao();
   if ($this->nmgp_opcao != "nada") {
       $this->nm_converte_datas(false);
   }


   $unformatted_value_sdd_id = $this->sdd_id;
   $unformatted_value_sdd_fecha = $this->sdd_fecha;
   $unformatted_value_sdd_monto = $this->sdd_monto;
   $unformatted_value_sdd_plazo = $this->sdd_plazo;
   $unformatted_value_sdd_secuencial_documento = $this->sdd_secuencial_documento;

   $nm_comando = "SELECT cl_id, 'Propietario:' || cl_nombre || ' - CI:' || cl_identificacion || ' - Nro. Contrato:' ||  coalesce(con_numero_contrato,'') ||' - Nro. Medidior:'|| coalesce(con_numero_medidor,'')  FROM del_cliente left join jap_contrato on cl_id=con_propietario   WHERE con_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY cl_nombre , con_numero_contrato, con_numero_medidor";

   $this->sdd_id = $old_value_sdd_id;
   $this->sdd_fecha = $old_value_sdd_fecha;
   $this->sdd_monto = $old_value_sdd_monto;
   $this->sdd_plazo = $old_value_sdd_plazo;
   $this->sdd_secuencial_documento = $old_value_sdd_secuencial_documento;

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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lookup_sdd_propietario'][] = $rs->fields[0];
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
   $sdd_propietario_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sdd_propietario_1))
          {
              foreach ($this->sdd_propietario_1 as $tmp_sdd_propietario)
              {
                  if (trim($tmp_sdd_propietario) === trim($cadaselect[1])) {$sdd_propietario_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sdd_propietario) && trim($this->sdd_propietario) === trim($cadaselect[1])) {$sdd_propietario_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="sdd_propietario" value="<?php echo $this->form_encode_input($sdd_propietario) . "\">" . $sdd_propietario_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_sdd_propietario();
   $x = 0 ; 
   $sdd_propietario_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->sdd_propietario_1))
          {
              foreach ($this->sdd_propietario_1 as $tmp_sdd_propietario)
              {
                  if (trim($tmp_sdd_propietario) === trim($cadaselect[1])) {$sdd_propietario_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->sdd_propietario) && trim($this->sdd_propietario) === trim($cadaselect[1])) { $sdd_propietario_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($sdd_propietario_look))
          {
              $sdd_propietario_look = $this->sdd_propietario;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_sdd_propietario\" class=\"css_sdd_propietario_line\" style=\"" .  $sStyleReadLab_sdd_propietario . "\">" . $this->form_format_readonly("sdd_propietario", $this->form_encode_input($sdd_propietario_look)) . "</span><span id=\"id_read_off_sdd_propietario\" class=\"css_read_off_sdd_propietario" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_sdd_propietario . "\">";
   echo " <span id=\"idAjaxSelect_sdd_propietario\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_sdd_propietario_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_sdd_propietario\" name=\"sdd_propietario\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->sdd_propietario) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->sdd_propietario)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_propietario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_propietario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sdd_monto']))
    {
        $this->nm_new_label['sdd_monto'] = "" . $this->Ini->Nm_lang['lang_monto_inicial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_monto = $this->sdd_monto;
   $sStyleHidden_sdd_monto = '';
   if (isset($this->nmgp_cmp_hidden['sdd_monto']) && $this->nmgp_cmp_hidden['sdd_monto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_monto']);
       $sStyleHidden_sdd_monto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_monto = 'display: none;';
   $sStyleReadInp_sdd_monto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_monto']) && $this->nmgp_cmp_readonly['sdd_monto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_monto']);
       $sStyleReadLab_sdd_monto = '';
       $sStyleReadInp_sdd_monto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_monto']) && $this->nmgp_cmp_hidden['sdd_monto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_monto" value="<?php echo $this->form_encode_input($sdd_monto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_monto_label" id="hidden_field_label_sdd_monto" style="<?php echo $sStyleHidden_sdd_monto; ?>"><span id="id_label_sdd_monto"><?php echo $this->nm_new_label['sdd_monto']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_monto_line" id="hidden_field_data_sdd_monto" style="<?php echo $sStyleHidden_sdd_monto; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_monto_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="sdd_monto" value="<?php echo $this->form_encode_input($sdd_monto); ?>"><span id="id_ajax_label_sdd_monto"><?php echo nl2br($sdd_monto); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_monto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_monto_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sdd_plazo']))
    {
        $this->nm_new_label['sdd_plazo'] = "" . $this->Ini->Nm_lang['lang_plazo'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_plazo = $this->sdd_plazo;
   $sStyleHidden_sdd_plazo = '';
   if (isset($this->nmgp_cmp_hidden['sdd_plazo']) && $this->nmgp_cmp_hidden['sdd_plazo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_plazo']);
       $sStyleHidden_sdd_plazo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_plazo = 'display: none;';
   $sStyleReadInp_sdd_plazo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_plazo']) && $this->nmgp_cmp_readonly['sdd_plazo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_plazo']);
       $sStyleReadLab_sdd_plazo = '';
       $sStyleReadInp_sdd_plazo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_plazo']) && $this->nmgp_cmp_hidden['sdd_plazo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_plazo" value="<?php echo $this->form_encode_input($sdd_plazo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_plazo_label" id="hidden_field_label_sdd_plazo" style="<?php echo $sStyleHidden_sdd_plazo; ?>"><span id="id_label_sdd_plazo"><?php echo $this->nm_new_label['sdd_plazo']; ?></span><?php if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['php_cmp_required']['sdd_plazo']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['php_cmp_required']['sdd_plazo'] == "on") { ?> <span class="scFormRequiredOdd">*</span> <?php }?></TD>
    <TD class="scFormDataOdd css_sdd_plazo_line" id="hidden_field_data_sdd_plazo" style="<?php echo $sStyleHidden_sdd_plazo; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_plazo_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sdd_plazo"]) &&  $this->nmgp_cmp_readonly["sdd_plazo"] == "on") { 

 ?>
<input type="hidden" name="sdd_plazo" value="<?php echo $this->form_encode_input($sdd_plazo) . "\">" . $sdd_plazo . ""; ?>
<?php } else { ?>
<span id="id_read_on_sdd_plazo" class="sc-ui-readonly-sdd_plazo css_sdd_plazo_line" style="<?php echo $sStyleReadLab_sdd_plazo; ?>"><?php echo $this->form_format_readonly("sdd_plazo", $this->form_encode_input($this->sdd_plazo)); ?></span><span id="id_read_off_sdd_plazo" class="css_read_off_sdd_plazo<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sdd_plazo; ?>">
 <input class="sc-js-input scFormObjectOdd css_sdd_plazo_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sdd_plazo" type=text name="sdd_plazo" value="<?php echo $this->form_encode_input($sdd_plazo) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=2"; } ?> alt="{datatype: 'integer', maxLength: 4, thousandsSep: '<?php echo str_replace("'", "\'", $this->field_config['sdd_plazo']['symbol_grp']); ?>', thousandsFormat: <?php echo $this->field_config['sdd_plazo']['symbol_fmt']; ?>, allowNegative: false, onlyNegative: false, negativePos: <?php echo (4 == $this->field_config['sdd_plazo']['format_neg'] ? "'suffix'" : "'prefix'") ?>, alignment: 'left', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_plazo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_plazo_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sdd_estado']))
    {
        $this->nm_new_label['sdd_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_estado = $this->sdd_estado;
   $sStyleHidden_sdd_estado = '';
   if (isset($this->nmgp_cmp_hidden['sdd_estado']) && $this->nmgp_cmp_hidden['sdd_estado'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_estado']);
       $sStyleHidden_sdd_estado = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_estado = 'display: none;';
   $sStyleReadInp_sdd_estado = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_estado']) && $this->nmgp_cmp_readonly['sdd_estado'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_estado']);
       $sStyleReadLab_sdd_estado = '';
       $sStyleReadInp_sdd_estado = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_estado']) && $this->nmgp_cmp_hidden['sdd_estado'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_estado" value="<?php echo $this->form_encode_input($sdd_estado) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_estado_label" id="hidden_field_label_sdd_estado" style="<?php echo $sStyleHidden_sdd_estado; ?>"><span id="id_label_sdd_estado"><?php echo $this->nm_new_label['sdd_estado']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_estado_line" id="hidden_field_data_sdd_estado" style="<?php echo $sStyleHidden_sdd_estado; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_estado_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="sdd_estado" value="<?php echo $this->form_encode_input($sdd_estado); ?>"><span id="id_ajax_label_sdd_estado"><?php echo nl2br($sdd_estado); ?></span>
 <SPAN id="id_lookup_sdd_estado"><?php echo $look_rpc_sdd_estado; ?></SPAN></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_estado_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_estado_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sdd_secuencial_documento']))
    {
        $this->nm_new_label['sdd_secuencial_documento'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_secuencial_documento = $this->sdd_secuencial_documento;
   if (!isset($this->nmgp_cmp_hidden['sdd_secuencial_documento']))
   {
       $this->nmgp_cmp_hidden['sdd_secuencial_documento'] = 'off';
   }
   $sStyleHidden_sdd_secuencial_documento = '';
   if (isset($this->nmgp_cmp_hidden['sdd_secuencial_documento']) && $this->nmgp_cmp_hidden['sdd_secuencial_documento'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_secuencial_documento']);
       $sStyleHidden_sdd_secuencial_documento = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_secuencial_documento = 'display: none;';
   $sStyleReadInp_sdd_secuencial_documento = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_secuencial_documento']) && $this->nmgp_cmp_readonly['sdd_secuencial_documento'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_secuencial_documento']);
       $sStyleReadLab_sdd_secuencial_documento = '';
       $sStyleReadInp_sdd_secuencial_documento = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_secuencial_documento']) && $this->nmgp_cmp_hidden['sdd_secuencial_documento'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_secuencial_documento" value="<?php echo $this->form_encode_input($sdd_secuencial_documento) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_secuencial_documento_label" id="hidden_field_label_sdd_secuencial_documento" style="<?php echo $sStyleHidden_sdd_secuencial_documento; ?>"><span id="id_label_sdd_secuencial_documento"><?php echo $this->nm_new_label['sdd_secuencial_documento']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_secuencial_documento_line" id="hidden_field_data_sdd_secuencial_documento" style="<?php echo $sStyleHidden_sdd_secuencial_documento; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_secuencial_documento_line" style="vertical-align: top;padding: 0px"><input type="hidden" name="sdd_secuencial_documento" value="<?php echo $this->form_encode_input($sdd_secuencial_documento); ?>"><span id="id_ajax_label_sdd_secuencial_documento"><?php echo nl2br($sdd_secuencial_documento); ?></span>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_secuencial_documento_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_secuencial_documento_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sdd_usuario']))
    {
        $this->nm_new_label['sdd_usuario'] = "" . $this->Ini->Nm_lang['lang_usuario'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_usuario = $this->sdd_usuario;
   if (!isset($this->nmgp_cmp_hidden['sdd_usuario']))
   {
       $this->nmgp_cmp_hidden['sdd_usuario'] = 'off';
   }
   $sStyleHidden_sdd_usuario = '';
   if (isset($this->nmgp_cmp_hidden['sdd_usuario']) && $this->nmgp_cmp_hidden['sdd_usuario'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_usuario']);
       $sStyleHidden_sdd_usuario = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_usuario = 'display: none;';
   $sStyleReadInp_sdd_usuario = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_usuario']) && $this->nmgp_cmp_readonly['sdd_usuario'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_usuario']);
       $sStyleReadLab_sdd_usuario = '';
       $sStyleReadInp_sdd_usuario = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_usuario']) && $this->nmgp_cmp_hidden['sdd_usuario'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_usuario" value="<?php echo $this->form_encode_input($sdd_usuario) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_usuario_label" id="hidden_field_label_sdd_usuario" style="<?php echo $sStyleHidden_sdd_usuario; ?>"><span id="id_label_sdd_usuario"><?php echo $this->nm_new_label['sdd_usuario']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_usuario_line" id="hidden_field_data_sdd_usuario" style="<?php echo $sStyleHidden_sdd_usuario; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_usuario_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sdd_usuario"]) &&  $this->nmgp_cmp_readonly["sdd_usuario"] == "on") { 

 ?>
<input type="hidden" name="sdd_usuario" value="<?php echo $this->form_encode_input($sdd_usuario) . "\">" . $sdd_usuario . ""; ?>
<?php } else { ?>
<span id="id_read_on_sdd_usuario" class="sc-ui-readonly-sdd_usuario css_sdd_usuario_line" style="<?php echo $sStyleReadLab_sdd_usuario; ?>"><?php echo $this->form_format_readonly("sdd_usuario", $this->form_encode_input($this->sdd_usuario)); ?></span><span id="id_read_off_sdd_usuario" class="css_read_off_sdd_usuario<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sdd_usuario; ?>">
 <input class="sc-js-input scFormObjectOdd css_sdd_usuario_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sdd_usuario" type=text name="sdd_usuario" value="<?php echo $this->form_encode_input($sdd_usuario) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=35"; } ?> maxlength=35 alt="{datatype: 'text', maxLength: 35, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_usuario_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_usuario_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 2; ?>" >&nbsp;</TD>
<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['sdd_ip']))
    {
        $this->nm_new_label['sdd_ip'] = "" . $this->Ini->Nm_lang['lang_ip'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_ip = $this->sdd_ip;
   if (!isset($this->nmgp_cmp_hidden['sdd_ip']))
   {
       $this->nmgp_cmp_hidden['sdd_ip'] = 'off';
   }
   $sStyleHidden_sdd_ip = '';
   if (isset($this->nmgp_cmp_hidden['sdd_ip']) && $this->nmgp_cmp_hidden['sdd_ip'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_ip']);
       $sStyleHidden_sdd_ip = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_ip = 'display: none;';
   $sStyleReadInp_sdd_ip = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_ip']) && $this->nmgp_cmp_readonly['sdd_ip'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_ip']);
       $sStyleReadLab_sdd_ip = '';
       $sStyleReadInp_sdd_ip = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_ip']) && $this->nmgp_cmp_hidden['sdd_ip'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_ip" value="<?php echo $this->form_encode_input($sdd_ip) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_ip_label" id="hidden_field_label_sdd_ip" style="<?php echo $sStyleHidden_sdd_ip; ?>"><span id="id_label_sdd_ip"><?php echo $this->nm_new_label['sdd_ip']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_ip_line" id="hidden_field_data_sdd_ip" style="<?php echo $sStyleHidden_sdd_ip; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_ip_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sdd_ip"]) &&  $this->nmgp_cmp_readonly["sdd_ip"] == "on") { 

 ?>
<input type="hidden" name="sdd_ip" value="<?php echo $this->form_encode_input($sdd_ip) . "\">" . $sdd_ip . ""; ?>
<?php } else { ?>
<span id="id_read_on_sdd_ip" class="sc-ui-readonly-sdd_ip css_sdd_ip_line" style="<?php echo $sStyleReadLab_sdd_ip; ?>"><?php echo $this->form_format_readonly("sdd_ip", $this->form_encode_input($this->sdd_ip)); ?></span><span id="id_read_off_sdd_ip" class="css_read_off_sdd_ip<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sdd_ip; ?>">
 <input class="sc-js-input scFormObjectOdd css_sdd_ip_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sdd_ip" type=text name="sdd_ip" value="<?php echo $this->form_encode_input($sdd_ip) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_ip_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_ip_text"></span></td></tr></table></td></tr></table></TD>
   <?php }?>

   <?php
    if (!isset($this->nm_new_label['sdd_empresa']))
    {
        $this->nm_new_label['sdd_empresa'] = "Sdd Empresa";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $sdd_empresa = $this->sdd_empresa;
   if (!isset($this->nmgp_cmp_hidden['sdd_empresa']))
   {
       $this->nmgp_cmp_hidden['sdd_empresa'] = 'off';
   }
   $sStyleHidden_sdd_empresa = '';
   if (isset($this->nmgp_cmp_hidden['sdd_empresa']) && $this->nmgp_cmp_hidden['sdd_empresa'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['sdd_empresa']);
       $sStyleHidden_sdd_empresa = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_sdd_empresa = 'display: none;';
   $sStyleReadInp_sdd_empresa = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['sdd_empresa']) && $this->nmgp_cmp_readonly['sdd_empresa'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['sdd_empresa']);
       $sStyleReadLab_sdd_empresa = '';
       $sStyleReadInp_sdd_empresa = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['sdd_empresa']) && $this->nmgp_cmp_hidden['sdd_empresa'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="sdd_empresa" value="<?php echo $this->form_encode_input($sdd_empresa) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormLabelOdd scUiLabelWidthFix css_sdd_empresa_label" id="hidden_field_label_sdd_empresa" style="<?php echo $sStyleHidden_sdd_empresa; ?>"><span id="id_label_sdd_empresa"><?php echo $this->nm_new_label['sdd_empresa']; ?></span></TD>
    <TD class="scFormDataOdd css_sdd_empresa_line" id="hidden_field_data_sdd_empresa" style="<?php echo $sStyleHidden_sdd_empresa; ?>vertical-align: top;"><table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_sdd_empresa_line" style="vertical-align: top;padding: 0px">
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["sdd_empresa"]) &&  $this->nmgp_cmp_readonly["sdd_empresa"] == "on") { 

 ?>
<input type="hidden" name="sdd_empresa" value="<?php echo $this->form_encode_input($sdd_empresa) . "\">" . $sdd_empresa . ""; ?>
<?php } else { ?>
<span id="id_read_on_sdd_empresa" class="sc-ui-readonly-sdd_empresa css_sdd_empresa_line" style="<?php echo $sStyleReadLab_sdd_empresa; ?>"><?php echo $this->form_format_readonly("sdd_empresa", $this->form_encode_input($this->sdd_empresa)); ?></span><span id="id_read_off_sdd_empresa" class="css_read_off_sdd_empresa<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_sdd_empresa; ?>">
 <input class="sc-js-input scFormObjectOdd css_sdd_empresa_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_sdd_empresa" type=text name="sdd_empresa" value="<?php echo $this->form_encode_input($sdd_empresa) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=13"; } ?> maxlength=13 alt="{datatype: 'text', maxLength: 13, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_sdd_empresa_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_sdd_empresa_text"></span></td></tr></table></td></tr></table></TD>
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
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
     <TABLE style="padding: 0px; spacing: 0px; border-width: 0px;" width="100%" height="100%">
      <TR>
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf1\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_operaciones'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['operaciones']))
    {
        $this->nm_new_label['operaciones'] = "" . $this->Ini->Nm_lang['lang_operaciones'] . "";
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
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_operaciones'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_operaciones'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_operaciones'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_proc']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_form']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_call']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_multi'] = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_form_insert'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_form_update'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_form_delete'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_form_btn_nav'] = 'off';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_grid_edit'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_grid_edit_link'] = 'on';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_qtd_reg'] = '10';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_liga_tp_pag'] = 'parcial';
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['embutida_parms'] = "NM_btn_insert*scinN*scoutNM_btn_update*scinN*scoutNM_btn_delete*scinS*scoutNM_btn_navega*scinN*scout";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['foreign_key']['od_solicitud'] = $this->nmgp_dados_form['sdd_id'];
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['where_filter'] = "od_solicitud = " . $this->nmgp_dados_form['sdd_id'] . "";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['where_detal']  = "od_solicitud = " . $this->nmgp_dados_form['sdd_id'] . "";
 if ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_solicitud_division_deuda']['total'] < 0)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init'] ]['form_fac_operaciones_dividir']['where_filter'] = "1 <> 1";
 }
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_fac_solicitud_division_deuda_empty.htm' : $this->Ini->link_form_fac_operaciones_dividir_edit . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y';
if (isset($this->Ini->sc_lig_target['C_@scinf_operaciones']) && 'nmsc_iframe_liga_form_fac_operaciones_dividir' != $this->Ini->sc_lig_target['C_@scinf_operaciones'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_operaciones'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['form_fac_operaciones_dividir_script_case_init']);
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
<iframe border="0" id="nmsc_iframe_liga_form_fac_operaciones_dividir"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_form_fac_operaciones_dividir"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_operaciones_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_operaciones_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_operaciones_dumb = ('' == $sStyleHidden_operaciones) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_operaciones_dumb" style="<?php echo $sStyleHidden_operaciones_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "<table style=\"border-collapse: collapse; height: 100%; width: 100%\"><tr><td style=\"vertical-align: middle; border-width: 0px; padding: 0px 2px 0px 0px\"><img id=\"SC_blk_pdf2\" src=\"" . $this->Ini->path_icones . "/" . $this->Ini->Block_img_col . "\" style=\"border: 0px; float: left\" class=\"sc-ui-block-control\"></td><td style=\"border-width: 0px; padding: 0px; width: 100%;\" class=\"scFormBlockAlign\">"; } ?><?php echo $this->Ini->Nm_lang['lang_cuotas'] ?><?php if ('' != $this->Ini->Block_img_exp && '' != $this->Ini->Block_img_col && !$this->Ini->Export_img_zip) { echo "</td></tr></table>"; } ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cuotas']))
    {
        $this->nm_new_label['cuotas'] = "" . $this->Ini->Nm_lang['lang_cuotas'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cuotas = $this->cuotas;
   $sStyleHidden_cuotas = '';
   if (isset($this->nmgp_cmp_hidden['cuotas']) && $this->nmgp_cmp_hidden['cuotas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cuotas']);
       $sStyleHidden_cuotas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cuotas = 'display: none;';
   $sStyleReadInp_cuotas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cuotas']) && $this->nmgp_cmp_readonly['cuotas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cuotas']);
       $sStyleReadLab_cuotas = '';
       $sStyleReadInp_cuotas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cuotas']) && $this->nmgp_cmp_hidden['cuotas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cuotas" value="<?php echo $this->form_encode_input($cuotas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cuotas_line" id="hidden_field_data_cuotas" style="<?php echo $sStyleHidden_cuotas; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_cuotas_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cuotas'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cuotas'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cuotas'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init'] ]['grid_fac_cuotas_division']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init'] ]['grid_fac_cuotas_division']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init'] ]['grid_fac_cuotas_division']['embutida_pai']        = "form_fac_solicitud_division_deuda";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init'] ]['grid_fac_cuotas_division']['embutida_form_parms'] = "var_solicitud*scin" . $this->nmgp_dados_form['sdd_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
 if (isset($this->Ini->sc_lig_md5["grid_fac_cuotas_division"]) && $this->Ini->sc_lig_md5["grid_fac_cuotas_division"] == "S") {
     $Parms_Lig  = "var_solicitud*scin" . $this->nmgp_dados_form['sdd_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_fac_solicitud_division_deuda@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_solicitud*scin" . $this->nmgp_dados_form['sdd_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scoutNMSC_cab*scinN*scoutNMSC_nav*scinN*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_fac_solicitud_division_deuda_empty.htm' : $this->Ini->link_grid_fac_cuotas_division_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
if (isset($this->Ini->sc_lig_target['C_@scinf_cuotas']) && 'nmsc_iframe_liga_grid_fac_cuotas_division' != $this->Ini->sc_lig_target['C_@scinf_cuotas'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_cuotas'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['grid_fac_cuotas_division_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_cuotas'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_fac_cuotas_division"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_fac_cuotas_division"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cuotas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cuotas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R")
{
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['first'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-15';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['back'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "" . $buttonMacroDisabled . "", "", "");?>
 
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['forward'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-17';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['last'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-18';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['btn_label'][''];
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_fac_solicitud_division_deuda");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_fac_solicitud_division_deuda");
 parent.scAjaxDetailHeight("form_fac_solicitud_division_deuda", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_fac_solicitud_division_deuda", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_fac_solicitud_division_deuda", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['sc_modal'])
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
	function scBtnFn_agregar() {
		if ($("#sc_agregar_top").length && $("#sc_agregar_top").is(":visible")) {
		    if ($("#sc_agregar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_agregar()
			 return;
		}
		if ($("#sc_agregar_top").length && $("#sc_agregar_top").is(":visible")) {
		    if ($("#sc_agregar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_agregar()
			 return;
		}
	}
	function scBtnFn_simular() {
		if ($("#sc_simular_top").length && $("#sc_simular_top").is(":visible")) {
		    if ($("#sc_simular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_simular()
			 return;
		}
		if ($("#sc_simular_top").length && $("#sc_simular_top").is(":visible")) {
		    if ($("#sc_simular_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_simular()
			 return;
		}
	}
	function scBtnFn_procesar() {
		if ($("#sc_procesar_top").length && $("#sc_procesar_top").is(":visible")) {
		    if ($("#sc_procesar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_procesar()
			 return;
		}
		if ($("#sc_procesar_top").length && $("#sc_procesar_top").is(":visible")) {
		    if ($("#sc_procesar_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_procesar()
			 return;
		}
	}
	function scBtnFn_imprimir() {
		if ($("#sc_imprimir_top").length && $("#sc_imprimir_top").is(":visible")) {
		    if ($("#sc_imprimir_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_imprimir()
			 return;
		}
		if ($("#sc_imprimir_top").length && $("#sc_imprimir_top").is(":visible")) {
		    if ($("#sc_imprimir_top").hasClass("disabled")) {
		        return;
		    }
			sc_btn_imprimir()
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_fac_solicitud_division_deuda']['buttonStatus'] = $this->nmgp_botoes;
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
