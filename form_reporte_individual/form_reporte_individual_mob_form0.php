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
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_cartera_por_deudor'] . ""); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_cartera_por_deudor'] . ""); } ?></TITLE>
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
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_pdf']))
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
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_reporte_individual/form_reporte_individual_mob_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = true;
var scFocusFirstErrorName  = "<?php if (isset($this->scFormFocusErrorName)) {echo $this->scFormFocusErrorName;} ?>";
</script>

<?php
include_once("form_reporte_individual_mob_sajax_js.php");
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
var Nav_binicio_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['first']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['first'] : 'off'); ?>";
var Nav_bavanca_macro_disabled  = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['forward']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['forward'] : 'off'); ?>";
var Nav_bretorna_macro_disabled = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['back']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['back'] : 'off'); ?>";
var Nav_bfinal_macro_disabled   = "<?php echo (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['last']) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['last'] : 'off'); ?>";
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
     if (F_name == "cl_tipo_identificacion")
     {
        $('select[name="cl_tipo_identificacion"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="cl_tipo_identificacion"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cl_tipo_identificacion"]').removeClass("scFormInputDisabled");
        }
     }
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
     if (F_name == "cl_celular")
     {
        $('input[name="cl_celular"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('input[name="cl_celular"]').addClass("scFormInputDisabled");
        }
        else {
            $('input[name="cl_celular"]').removeClass("scFormInputDisabled");
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
     if (F_name == "cl_pais")
     {
        $('select[name="cl_pais"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="cl_pais"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cl_pais"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cl_provincia")
     {
        $('select[name="cl_provincia"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="cl_provincia"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cl_provincia"]').removeClass("scFormInputDisabled");
        }
     }
     if (F_name == "cl_ciudad")
     {
        $('select[name="cl_ciudad"]').prop("disabled", F_opc);
        if (F_opc == "disabled" || F_opc == true) {
            $('select[name="cl_ciudad"]').addClass("scFormInputDisabled");
        }
        else {
            $('select[name="cl_ciudad"]').removeClass("scFormInputDisabled");
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
  }
 } // nm_field_disabled
<?php

include_once('form_reporte_individual_mob_jquery.php');

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
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
    $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['remove_border'] ? 'border-width: 0; ' : '';
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['link_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['link_info']['remove_margin']) {
        $remove_margin = 'margin: 0; ';
    }
    if ('' != $remove_margin && isset($str_iframe_body) && '' != $str_iframe_body) {
        $str_iframe_body = '';
    }
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['link_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['link_info']['remove_border']) {
        $remove_border = 'border-width: 0; ';
    }
    $vertical_center = '';
?>
<body class="scFormPage sc-app-form" style="<?php echo $remove_margin . $str_iframe_body . $vertical_center; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_reporte_individual']['error_buffer']) && '' != $_SESSION['scriptcase']['form_reporte_individual']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_reporte_individual']['error_buffer'];
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
 include_once("form_reporte_individual_mob_js0.php");
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
               action="form_reporte_individual_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['insert_validation']; ?>">
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
<input type="hidden" name="cl_id" value="<?php  echo $this->form_encode_input($this->cl_id) ?>">
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_reporte_individual_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_reporte_individual_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-top" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R")
{
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = '';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['help']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['help']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['help']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['help']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['help'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call || $this->form_3versions_single) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-10';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-11';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ((!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-12';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['exit']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['exit']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['exit'];
        }
?>
<?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "" . $buttonMacroLabel . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "" . $buttonMacroDisabled . "", "", "");?>
 
<?php
        $NM_btn = true;
    }
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R")
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
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;">   <tr>
   <td style="border:0;padding:0;height:0" class="scUiLabelWidthFix"></td>
   </tr>
   <tr>


    <TD colspan="1" height="20" class="scFormBlock">
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
   if (!isset($this->nm_new_label['cl_tipo_identificacion']))
   {
       $this->nm_new_label['cl_tipo_identificacion'] = "" . $this->Ini->Nm_lang['lang_tipo_identificacion'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_tipo_identificacion = $this->cl_tipo_identificacion;
   $sStyleHidden_cl_tipo_identificacion = '';
   if (isset($this->nmgp_cmp_hidden['cl_tipo_identificacion']) && $this->nmgp_cmp_hidden['cl_tipo_identificacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_tipo_identificacion']);
       $sStyleHidden_cl_tipo_identificacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_tipo_identificacion = 'display: none;';
   $sStyleReadInp_cl_tipo_identificacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_tipo_identificacion']) && $this->nmgp_cmp_readonly['cl_tipo_identificacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_tipo_identificacion']);
       $sStyleReadLab_cl_tipo_identificacion = '';
       $sStyleReadInp_cl_tipo_identificacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_tipo_identificacion']) && $this->nmgp_cmp_hidden['cl_tipo_identificacion'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cl_tipo_identificacion" value="<?php echo $this->form_encode_input($this->cl_tipo_identificacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cl_tipo_identificacion_line" id="hidden_field_data_cl_tipo_identificacion" style="<?php echo $sStyleHidden_cl_tipo_identificacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_tipo_identificacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_tipo_identificacion_label" style=""><span id="id_label_cl_tipo_identificacion"><?php echo $this->nm_new_label['cl_tipo_identificacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_tipo_identificacion"]) &&  $this->nmgp_cmp_readonly["cl_tipo_identificacion"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion'] = array(); 
    }
   $nm_comando = "SELECT ti_codigo, ti_nombre  FROM sri_tipo_identificacion  ORDER BY ti_nombre";
   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_tipo_identificacion'][] = $rs->fields[0];
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
   $cl_tipo_identificacion_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_tipo_identificacion_1))
          {
              foreach ($this->cl_tipo_identificacion_1 as $tmp_cl_tipo_identificacion)
              {
                  if (trim($tmp_cl_tipo_identificacion) === trim($cadaselect[1])) {$cl_tipo_identificacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_tipo_identificacion) && trim($this->cl_tipo_identificacion) === trim($cadaselect[1])) {$cl_tipo_identificacion_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="cl_tipo_identificacion" value="<?php echo $this->form_encode_input($cl_tipo_identificacion) . "\">" . $cl_tipo_identificacion_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_cl_tipo_identificacion();
   $x = 0 ; 
   $cl_tipo_identificacion_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_tipo_identificacion_1))
          {
              foreach ($this->cl_tipo_identificacion_1 as $tmp_cl_tipo_identificacion)
              {
                  if (trim($tmp_cl_tipo_identificacion) === trim($cadaselect[1])) {$cl_tipo_identificacion_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_tipo_identificacion) && trim($this->cl_tipo_identificacion) === trim($cadaselect[1])) { $cl_tipo_identificacion_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($cl_tipo_identificacion_look))
          {
              $cl_tipo_identificacion_look = $this->cl_tipo_identificacion;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_cl_tipo_identificacion\" class=\"css_cl_tipo_identificacion_line\" style=\"" .  $sStyleReadLab_cl_tipo_identificacion . "\">" . $this->form_format_readonly("cl_tipo_identificacion", $this->form_encode_input($cl_tipo_identificacion_look)) . "</span><span id=\"id_read_off_cl_tipo_identificacion\" class=\"css_read_off_cl_tipo_identificacion" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_cl_tipo_identificacion . "\">";
   echo " <span id=\"idAjaxSelect_cl_tipo_identificacion\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_cl_tipo_identificacion_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_cl_tipo_identificacion\" name=\"cl_tipo_identificacion\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cl_tipo_identificacion) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cl_tipo_identificacion)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_tipo_identificacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_tipo_identificacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
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

    <TD class="scFormDataOdd css_cl_identificacion_line" id="hidden_field_data_cl_identificacion" style="<?php echo $sStyleHidden_cl_identificacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_identificacion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_identificacion_label" style=""><span id="id_label_cl_identificacion"><?php echo $this->nm_new_label['cl_identificacion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_identificacion"]) &&  $this->nmgp_cmp_readonly["cl_identificacion"] == "on") { 

 ?>
<input type="hidden" name="cl_identificacion" value="<?php echo $this->form_encode_input($cl_identificacion) . "\">" . $cl_identificacion . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_identificacion" class="sc-ui-readonly-cl_identificacion css_cl_identificacion_line" style="<?php echo $sStyleReadLab_cl_identificacion; ?>"><?php echo $this->form_format_readonly("cl_identificacion", $this->form_encode_input($this->cl_identificacion)); ?></span><span id="id_read_off_cl_identificacion" class="css_read_off_cl_identificacion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_identificacion; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_identificacion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_identificacion" type=text name="cl_identificacion" value="<?php echo $this->form_encode_input($cl_identificacion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_identificacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_identificacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_cl_nombre_line" id="hidden_field_data_cl_nombre" style="<?php echo $sStyleHidden_cl_nombre; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_nombre_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_nombre_label" style=""><span id="id_label_cl_nombre"><?php echo $this->nm_new_label['cl_nombre']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_nombre"]) &&  $this->nmgp_cmp_readonly["cl_nombre"] == "on") { 

 ?>
<input type="hidden" name="cl_nombre" value="<?php echo $this->form_encode_input($cl_nombre) . "\">" . $cl_nombre . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_nombre" class="sc-ui-readonly-cl_nombre css_cl_nombre_line" style="<?php echo $sStyleReadLab_cl_nombre; ?>"><?php echo $this->form_format_readonly("cl_nombre", $this->form_encode_input($this->cl_nombre)); ?></span><span id="id_read_off_cl_nombre" class="css_read_off_cl_nombre<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_nombre; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_nombre_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_nombre" type=text name="cl_nombre" value="<?php echo $this->form_encode_input($cl_nombre) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_nombre_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_nombre_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


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

    <TD class="scFormDataOdd css_cl_telefono_line" id="hidden_field_data_cl_telefono" style="<?php echo $sStyleHidden_cl_telefono; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_telefono_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_telefono_label" style=""><span id="id_label_cl_telefono"><?php echo $this->nm_new_label['cl_telefono']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_telefono"]) &&  $this->nmgp_cmp_readonly["cl_telefono"] == "on") { 

 ?>
<input type="hidden" name="cl_telefono" value="<?php echo $this->form_encode_input($cl_telefono) . "\">" . $cl_telefono . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_telefono" class="sc-ui-readonly-cl_telefono css_cl_telefono_line" style="<?php echo $sStyleReadLab_cl_telefono; ?>"><?php echo $this->form_format_readonly("cl_telefono", $this->form_encode_input($this->cl_telefono)); ?></span><span id="id_read_off_cl_telefono" class="css_read_off_cl_telefono<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_telefono; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_telefono_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_telefono" type=text name="cl_telefono" value="<?php echo $this->form_encode_input($cl_telefono) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_telefono_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_telefono_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cl_celular']))
    {
        $this->nm_new_label['cl_celular'] = "" . $this->Ini->Nm_lang['lang_celular'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_celular = $this->cl_celular;
   $sStyleHidden_cl_celular = '';
   if (isset($this->nmgp_cmp_hidden['cl_celular']) && $this->nmgp_cmp_hidden['cl_celular'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_celular']);
       $sStyleHidden_cl_celular = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_celular = 'display: none;';
   $sStyleReadInp_cl_celular = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_celular']) && $this->nmgp_cmp_readonly['cl_celular'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_celular']);
       $sStyleReadLab_cl_celular = '';
       $sStyleReadInp_cl_celular = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_celular']) && $this->nmgp_cmp_hidden['cl_celular'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cl_celular" value="<?php echo $this->form_encode_input($cl_celular) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cl_celular_line" id="hidden_field_data_cl_celular" style="<?php echo $sStyleHidden_cl_celular; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_celular_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_celular_label" style=""><span id="id_label_cl_celular"><?php echo $this->nm_new_label['cl_celular']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_celular"]) &&  $this->nmgp_cmp_readonly["cl_celular"] == "on") { 

 ?>
<input type="hidden" name="cl_celular" value="<?php echo $this->form_encode_input($cl_celular) . "\">" . $cl_celular . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_celular" class="sc-ui-readonly-cl_celular css_cl_celular_line" style="<?php echo $sStyleReadLab_cl_celular; ?>"><?php echo $this->form_format_readonly("cl_celular", $this->form_encode_input($this->cl_celular)); ?></span><span id="id_read_off_cl_celular" class="css_read_off_cl_celular<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_celular; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_celular_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_celular" type=text name="cl_celular" value="<?php echo $this->form_encode_input($cl_celular) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=20"; } ?> maxlength=20 alt="{datatype: 'text', maxLength: 20, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_celular_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_celular_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_cl_email_line" id="hidden_field_data_cl_email" style="<?php echo $sStyleHidden_cl_email; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_email_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_email_label" style=""><span id="id_label_cl_email"><?php echo $this->nm_new_label['cl_email']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_email"]) &&  $this->nmgp_cmp_readonly["cl_email"] == "on") { 

 ?>
<input type="hidden" name="cl_email" value="<?php echo $this->form_encode_input($cl_email) . "\">" . $cl_email . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_email" class="sc-ui-readonly-cl_email css_cl_email_line" style="<?php echo $sStyleReadLab_cl_email; ?>"><?php echo $this->form_format_readonly("cl_email", $this->form_encode_input($this->cl_email)); ?></span><span id="id_read_off_cl_email" class="css_read_off_cl_email<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_email; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_email_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_email" type=text name="cl_email" value="<?php echo $this->form_encode_input($cl_email) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=200 alt="{datatype: 'text', maxLength: 200, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_email_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_email_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_cl_email_dumb = ('' == $sStyleHidden_cl_email) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cl_email_dumb" style="<?php echo $sStyleHidden_cl_email_dumb; ?>"></TD>
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
       <TD align="" valign="" class="scFormBlockFont"><?php echo $this->Ini->Nm_lang['lang_direccion'] ?></TD>
       
      </TR>
     </TABLE>
    </TD>




   </tr>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cl_pais']))
   {
       $this->nm_new_label['cl_pais'] = "" . $this->Ini->Nm_lang['lang_pais'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_pais = $this->cl_pais;
   $sStyleHidden_cl_pais = '';
   if (isset($this->nmgp_cmp_hidden['cl_pais']) && $this->nmgp_cmp_hidden['cl_pais'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_pais']);
       $sStyleHidden_cl_pais = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_pais = 'display: none;';
   $sStyleReadInp_cl_pais = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_pais']) && $this->nmgp_cmp_readonly['cl_pais'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_pais']);
       $sStyleReadLab_cl_pais = '';
       $sStyleReadInp_cl_pais = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_pais']) && $this->nmgp_cmp_hidden['cl_pais'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cl_pais" value="<?php echo $this->form_encode_input($this->cl_pais) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cl_pais_line" id="hidden_field_data_cl_pais" style="<?php echo $sStyleHidden_cl_pais; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_pais_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_pais_label" style=""><span id="id_label_cl_pais"><?php echo $this->nm_new_label['cl_pais']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_pais"]) &&  $this->nmgp_cmp_readonly["cl_pais"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais'] = array(); 
    }
   $nm_comando = "SELECT pai_id, pai_nombre  FROM sis_pais  ORDER BY pai_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_pais'][] = $rs->fields[0];
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
   $cl_pais_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_pais_1))
          {
              foreach ($this->cl_pais_1 as $tmp_cl_pais)
              {
                  if (trim($tmp_cl_pais) === trim($cadaselect[1])) {$cl_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_pais) && trim($this->cl_pais) === trim($cadaselect[1])) {$cl_pais_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="cl_pais" value="<?php echo $this->form_encode_input($cl_pais) . "\">" . $cl_pais_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_cl_pais();
   $x = 0 ; 
   $cl_pais_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_pais_1))
          {
              foreach ($this->cl_pais_1 as $tmp_cl_pais)
              {
                  if (trim($tmp_cl_pais) === trim($cadaselect[1])) {$cl_pais_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_pais) && trim($this->cl_pais) === trim($cadaselect[1])) { $cl_pais_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($cl_pais_look))
          {
              $cl_pais_look = $this->cl_pais;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_cl_pais\" class=\"css_cl_pais_line\" style=\"" .  $sStyleReadLab_cl_pais . "\">" . $this->form_format_readonly("cl_pais", $this->form_encode_input($cl_pais_look)) . "</span><span id=\"id_read_off_cl_pais\" class=\"css_read_off_cl_pais" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_cl_pais . "\">";
   echo " <span id=\"idAjaxSelect_cl_pais\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_cl_pais_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_cl_pais\" name=\"cl_pais\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cl_pais) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cl_pais)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_pais_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_pais_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cl_provincia']))
   {
       $this->nm_new_label['cl_provincia'] = "" . $this->Ini->Nm_lang['lang_provincia'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_provincia = $this->cl_provincia;
   $sStyleHidden_cl_provincia = '';
   if (isset($this->nmgp_cmp_hidden['cl_provincia']) && $this->nmgp_cmp_hidden['cl_provincia'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_provincia']);
       $sStyleHidden_cl_provincia = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_provincia = 'display: none;';
   $sStyleReadInp_cl_provincia = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_provincia']) && $this->nmgp_cmp_readonly['cl_provincia'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_provincia']);
       $sStyleReadLab_cl_provincia = '';
       $sStyleReadInp_cl_provincia = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_provincia']) && $this->nmgp_cmp_hidden['cl_provincia'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cl_provincia" value="<?php echo $this->form_encode_input($this->cl_provincia) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cl_provincia_line" id="hidden_field_data_cl_provincia" style="<?php echo $sStyleHidden_cl_provincia; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_provincia_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_provincia_label" style=""><span id="id_label_cl_provincia"><?php echo $this->nm_new_label['cl_provincia']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_provincia"]) &&  $this->nmgp_cmp_readonly["cl_provincia"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia'] = array(); 
    }
   $nm_comando = "SELECT pro_id, pro_nombre  FROM sis_provincia  ORDER BY pro_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_provincia'][] = $rs->fields[0];
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
   $cl_provincia_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_provincia_1))
          {
              foreach ($this->cl_provincia_1 as $tmp_cl_provincia)
              {
                  if (trim($tmp_cl_provincia) === trim($cadaselect[1])) {$cl_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_provincia) && trim($this->cl_provincia) === trim($cadaselect[1])) {$cl_provincia_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="cl_provincia" value="<?php echo $this->form_encode_input($cl_provincia) . "\">" . $cl_provincia_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_cl_provincia();
   $x = 0 ; 
   $cl_provincia_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_provincia_1))
          {
              foreach ($this->cl_provincia_1 as $tmp_cl_provincia)
              {
                  if (trim($tmp_cl_provincia) === trim($cadaselect[1])) {$cl_provincia_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_provincia) && trim($this->cl_provincia) === trim($cadaselect[1])) { $cl_provincia_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($cl_provincia_look))
          {
              $cl_provincia_look = $this->cl_provincia;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_cl_provincia\" class=\"css_cl_provincia_line\" style=\"" .  $sStyleReadLab_cl_provincia . "\">" . $this->form_format_readonly("cl_provincia", $this->form_encode_input($cl_provincia_look)) . "</span><span id=\"id_read_off_cl_provincia\" class=\"css_read_off_cl_provincia" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_cl_provincia . "\">";
   echo " <span id=\"idAjaxSelect_cl_provincia\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_cl_provincia_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_cl_provincia\" name=\"cl_provincia\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cl_provincia) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cl_provincia)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_provincia_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_provincia_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['cl_ciudad']))
   {
       $this->nm_new_label['cl_ciudad'] = "" . $this->Ini->Nm_lang['lang_ciudad'] . "";
   }
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cl_ciudad = $this->cl_ciudad;
   $sStyleHidden_cl_ciudad = '';
   if (isset($this->nmgp_cmp_hidden['cl_ciudad']) && $this->nmgp_cmp_hidden['cl_ciudad'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cl_ciudad']);
       $sStyleHidden_cl_ciudad = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cl_ciudad = 'display: none;';
   $sStyleReadInp_cl_ciudad = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cl_ciudad']) && $this->nmgp_cmp_readonly['cl_ciudad'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cl_ciudad']);
       $sStyleReadLab_cl_ciudad = '';
       $sStyleReadInp_cl_ciudad = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cl_ciudad']) && $this->nmgp_cmp_hidden['cl_ciudad'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="cl_ciudad" value="<?php echo $this->form_encode_input($this->cl_ciudad) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cl_ciudad_line" id="hidden_field_data_cl_ciudad" style="<?php echo $sStyleHidden_cl_ciudad; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_ciudad_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_ciudad_label" style=""><span id="id_label_cl_ciudad"><?php echo $this->nm_new_label['cl_ciudad']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_ciudad"]) &&  $this->nmgp_cmp_readonly["cl_ciudad"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad'] = array(); 
}
   if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
   { 
       $GLOBALS["NM_ERRO_IBASE"] = 1;  
   } 
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad'] = array(); 
    }
   $nm_comando = "SELECT can_id, can_nombre  FROM sis_canton  ORDER BY can_nombre";
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
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lookup_cl_ciudad'][] = $rs->fields[0];
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
   $cl_ciudad_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_ciudad_1))
          {
              foreach ($this->cl_ciudad_1 as $tmp_cl_ciudad)
              {
                  if (trim($tmp_cl_ciudad) === trim($cadaselect[1])) {$cl_ciudad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_ciudad) && trim($this->cl_ciudad) === trim($cadaselect[1])) {$cl_ciudad_look .= $cadaselect[0];} 
          $x++; 
   }

?>
<input type="hidden" name="cl_ciudad" value="<?php echo $this->form_encode_input($cl_ciudad) . "\">" . $cl_ciudad_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_cl_ciudad();
   $x = 0 ; 
   $cl_ciudad_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->cl_ciudad_1))
          {
              foreach ($this->cl_ciudad_1 as $tmp_cl_ciudad)
              {
                  if (trim($tmp_cl_ciudad) === trim($cadaselect[1])) {$cl_ciudad_look .= $cadaselect[0] . '__SC_BREAK_LINE__';}
              }
          }
          elseif (isset($cadaselect[1]) && is_string($this->cl_ciudad) && trim($this->cl_ciudad) === trim($cadaselect[1])) { $cl_ciudad_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($cl_ciudad_look))
          {
              $cl_ciudad_look = $this->cl_ciudad;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_cl_ciudad\" class=\"css_cl_ciudad_line\" style=\"" .  $sStyleReadLab_cl_ciudad . "\">" . $this->form_format_readonly("cl_ciudad", $this->form_encode_input($cl_ciudad_look)) . "</span><span id=\"id_read_off_cl_ciudad\" class=\"css_read_off_cl_ciudad" . $this->classes_100perc_fields['span_input'] . "\" style=\"white-space: nowrap; " . $sStyleReadInp_cl_ciudad . "\">";
   echo " <span id=\"idAjaxSelect_cl_ciudad\" class=\"" . $this->classes_100perc_fields['span_select'] . "\"><select class=\"sc-js-input scFormObjectOdd css_cl_ciudad_obj" . $this->classes_100perc_fields['input'] . "\" style=\"\" id=\"id_sc_field_cl_ciudad\" name=\"cl_ciudad\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->cl_ciudad) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->cl_ciudad)) 
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
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_ciudad_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_ciudad_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




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

    <TD class="scFormDataOdd css_cl_direccion_line" id="hidden_field_data_cl_direccion" style="<?php echo $sStyleHidden_cl_direccion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_cl_direccion_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_cl_direccion_label" style=""><span id="id_label_cl_direccion"><?php echo $this->nm_new_label['cl_direccion']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["cl_direccion"]) &&  $this->nmgp_cmp_readonly["cl_direccion"] == "on") { 

 ?>
<input type="hidden" name="cl_direccion" value="<?php echo $this->form_encode_input($cl_direccion) . "\">" . $cl_direccion . ""; ?>
<?php } else { ?>
<span id="id_read_on_cl_direccion" class="sc-ui-readonly-cl_direccion css_cl_direccion_line" style="<?php echo $sStyleReadLab_cl_direccion; ?>"><?php echo $this->form_format_readonly("cl_direccion", $this->form_encode_input($this->cl_direccion)); ?></span><span id="id_read_off_cl_direccion" class="css_read_off_cl_direccion<?php echo $this->classes_100perc_fields['span_input'] ?>" style="white-space: nowrap;<?php echo $sStyleReadInp_cl_direccion; ?>">
 <input class="sc-js-input scFormObjectOdd css_cl_direccion_obj<?php echo $this->classes_100perc_fields['input'] ?>" style="" id="id_sc_field_cl_direccion" type=text name="cl_direccion" value="<?php echo $this->form_encode_input($cl_direccion) ?>"
 <?php if ($this->classes_100perc_fields['keep_field_size']) { echo "size=50"; } ?> maxlength=300 alt="{datatype: 'text', maxLength: 300, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: true, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cl_direccion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cl_direccion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_cl_direccion_dumb = ('' == $sStyleHidden_cl_direccion) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cl_direccion_dumb" style="<?php echo $sStyleHidden_cl_direccion_dumb; ?>"></TD>
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
    if (!isset($this->nm_new_label['contratos']))
    {
        $this->nm_new_label['contratos'] = "" . $this->Ini->Nm_lang['lang_contratos'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $contratos = $this->contratos;
   $sStyleHidden_contratos = '';
   if (isset($this->nmgp_cmp_hidden['contratos']) && $this->nmgp_cmp_hidden['contratos'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['contratos']);
       $sStyleHidden_contratos = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_contratos = 'display: none;';
   $sStyleReadInp_contratos = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['contratos']) && $this->nmgp_cmp_readonly['contratos'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['contratos']);
       $sStyleReadLab_contratos = '';
       $sStyleReadInp_contratos = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['contratos']) && $this->nmgp_cmp_hidden['contratos'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="contratos" value="<?php echo $this->form_encode_input($contratos) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_contratos_line" id="hidden_field_data_contratos" style="<?php echo $sStyleHidden_contratos; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_contratos_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_contratos'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_contratos'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_contratos'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] ]['grid_jap_contratos_cliente_cartera']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] ]['grid_jap_contratos_cliente_cartera']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] ]['grid_jap_contratos_cliente_cartera']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] ]['grid_jap_contratos_cliente_cartera']['embutida_form_parms'] = "igtech_rucempresa*scin" . $this->nmgp_dados_form['cl_empresa'] . "*scoutvar_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_jap_contratos_cliente_cartera"]) && $this->Ini->sc_lig_md5["grid_jap_contratos_cliente_cartera"] == "S") {
     $Parms_Lig  = "igtech_rucempresa*scin" . $this->nmgp_dados_form['cl_empresa'] . "*scoutvar_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "igtech_rucempresa*scin" . $this->nmgp_dados_form['cl_empresa'] . "*scoutvar_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_jap_contratos_cliente_cartera_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] ]['grid_jap_contratos_cliente_cartera'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init'] ]['grid_jap_contratos_cliente_cartera'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_contratos']) && 'nmsc_iframe_liga_grid_jap_contratos_cliente_cartera' != $this->Ini->sc_lig_target['C_@scinf_contratos'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_contratos'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_contratos_cliente_cartera_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_contratos'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_jap_contratos_cliente_cartera"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_jap_contratos_cliente_cartera"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_contratos_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_contratos_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_contratos_dumb = ('' == $sStyleHidden_contratos) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_contratos_dumb" style="<?php echo $sStyleHidden_contratos_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_3"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_3"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_3" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['deudas_instalacion']))
    {
        $this->nm_new_label['deudas_instalacion'] = "deudas_instalacion";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $deudas_instalacion = $this->deudas_instalacion;
   $sStyleHidden_deudas_instalacion = '';
   if (isset($this->nmgp_cmp_hidden['deudas_instalacion']) && $this->nmgp_cmp_hidden['deudas_instalacion'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['deudas_instalacion']);
       $sStyleHidden_deudas_instalacion = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_deudas_instalacion = 'display: none;';
   $sStyleReadInp_deudas_instalacion = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['deudas_instalacion']) && $this->nmgp_cmp_readonly['deudas_instalacion'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['deudas_instalacion']);
       $sStyleReadLab_deudas_instalacion = '';
       $sStyleReadInp_deudas_instalacion = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['deudas_instalacion']) && $this->nmgp_cmp_hidden['deudas_instalacion'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="deudas_instalacion" value="<?php echo $this->form_encode_input($deudas_instalacion) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_deudas_instalacion_line" id="hidden_field_data_deudas_instalacion" style="<?php echo $sStyleHidden_deudas_instalacion; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_deudas_instalacion_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_deudas_instalacion'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_deudas_instalacion'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_deudas_instalacion'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] ]['grid_v_jap_instalacion_contratos_ind']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] ]['grid_v_jap_instalacion_contratos_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] ]['grid_v_jap_instalacion_contratos_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] ]['grid_v_jap_instalacion_contratos_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_jap_instalacion_contratos_ind"]) && $this->Ini->sc_lig_md5["grid_v_jap_instalacion_contratos_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_jap_instalacion_contratos_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] ]['grid_v_jap_instalacion_contratos_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init'] ]['grid_v_jap_instalacion_contratos_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_deudas_instalacion']) && 'nmsc_iframe_liga_grid_v_jap_instalacion_contratos_ind' != $this->Ini->sc_lig_target['C_@scinf_deudas_instalacion'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_deudas_instalacion'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_instalacion_contratos_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_deudas_instalacion'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_jap_instalacion_contratos_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_jap_instalacion_contratos_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_deudas_instalacion_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_deudas_instalacion_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['deudas_consumo']))
    {
        $this->nm_new_label['deudas_consumo'] = "deudas_consumo";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $deudas_consumo = $this->deudas_consumo;
   $sStyleHidden_deudas_consumo = '';
   if (isset($this->nmgp_cmp_hidden['deudas_consumo']) && $this->nmgp_cmp_hidden['deudas_consumo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['deudas_consumo']);
       $sStyleHidden_deudas_consumo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_deudas_consumo = 'display: none;';
   $sStyleReadInp_deudas_consumo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['deudas_consumo']) && $this->nmgp_cmp_readonly['deudas_consumo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['deudas_consumo']);
       $sStyleReadLab_deudas_consumo = '';
       $sStyleReadInp_deudas_consumo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['deudas_consumo']) && $this->nmgp_cmp_hidden['deudas_consumo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="deudas_consumo" value="<?php echo $this->form_encode_input($deudas_consumo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_deudas_consumo_line" id="hidden_field_data_deudas_consumo" style="<?php echo $sStyleHidden_deudas_consumo; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_deudas_consumo_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_deudas_consumo'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_deudas_consumo'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_deudas_consumo'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] ]['grid_v_jap_emisiones_consumo_ind']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] ]['grid_v_jap_emisiones_consumo_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] ]['grid_v_jap_emisiones_consumo_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] ]['grid_v_jap_emisiones_consumo_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_jap_emisiones_consumo_ind"]) && $this->Ini->sc_lig_md5["grid_v_jap_emisiones_consumo_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_jap_emisiones_consumo_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] ]['grid_v_jap_emisiones_consumo_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init'] ]['grid_v_jap_emisiones_consumo_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_deudas_consumo']) && 'nmsc_iframe_liga_grid_v_jap_emisiones_consumo_ind' != $this->Ini->sc_lig_target['C_@scinf_deudas_consumo'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_deudas_consumo'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_emisiones_consumo_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_deudas_consumo'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_jap_emisiones_consumo_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_jap_emisiones_consumo_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_deudas_consumo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_deudas_consumo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['otras_deudas']))
    {
        $this->nm_new_label['otras_deudas'] = "otras_deudas";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $otras_deudas = $this->otras_deudas;
   $sStyleHidden_otras_deudas = '';
   if (isset($this->nmgp_cmp_hidden['otras_deudas']) && $this->nmgp_cmp_hidden['otras_deudas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['otras_deudas']);
       $sStyleHidden_otras_deudas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_otras_deudas = 'display: none;';
   $sStyleReadInp_otras_deudas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['otras_deudas']) && $this->nmgp_cmp_readonly['otras_deudas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['otras_deudas']);
       $sStyleReadLab_otras_deudas = '';
       $sStyleReadInp_otras_deudas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['otras_deudas']) && $this->nmgp_cmp_hidden['otras_deudas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="otras_deudas" value="<?php echo $this->form_encode_input($otras_deudas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_otras_deudas_line" id="hidden_field_data_otras_deudas" style="<?php echo $sStyleHidden_otras_deudas; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_otras_deudas_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_otras_deudas'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_otras_deudas'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_otras_deudas'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] ]['grid_v_jap_otras_emisiones_ind']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] ]['grid_v_jap_otras_emisiones_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] ]['grid_v_jap_otras_emisiones_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] ]['grid_v_jap_otras_emisiones_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_jap_otras_emisiones_ind"]) && $this->Ini->sc_lig_md5["grid_v_jap_otras_emisiones_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_jap_otras_emisiones_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] ]['grid_v_jap_otras_emisiones_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init'] ]['grid_v_jap_otras_emisiones_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_otras_deudas']) && 'nmsc_iframe_liga_grid_v_jap_otras_emisiones_ind' != $this->Ini->sc_lig_target['C_@scinf_otras_deudas'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_otras_deudas'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_jap_otras_emisiones_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_otras_deudas'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_jap_otras_emisiones_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_jap_otras_emisiones_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_otras_deudas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_otras_deudas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_otras_deudas_dumb = ('' == $sStyleHidden_otras_deudas) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_otras_deudas_dumb" style="<?php echo $sStyleHidden_otras_deudas_dumb; ?>"></TD>
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
    if (!isset($this->nm_new_label['inspecciones']))
    {
        $this->nm_new_label['inspecciones'] = "" . $this->Ini->Nm_lang['lang_inspecciones'] . "";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $inspecciones = $this->inspecciones;
   $sStyleHidden_inspecciones = '';
   if (isset($this->nmgp_cmp_hidden['inspecciones']) && $this->nmgp_cmp_hidden['inspecciones'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['inspecciones']);
       $sStyleHidden_inspecciones = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_inspecciones = 'display: none;';
   $sStyleReadInp_inspecciones = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['inspecciones']) && $this->nmgp_cmp_readonly['inspecciones'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['inspecciones']);
       $sStyleReadLab_inspecciones = '';
       $sStyleReadInp_inspecciones = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['inspecciones']) && $this->nmgp_cmp_hidden['inspecciones'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="inspecciones" value="<?php echo $this->form_encode_input($inspecciones) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_inspecciones_line" id="hidden_field_data_inspecciones" style="<?php echo $sStyleHidden_inspecciones; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_inspecciones_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_inspecciones'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_inspecciones'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_inspecciones'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] ]['grid_jap_solicitud_procesada_usuario']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] ]['grid_jap_solicitud_procesada_usuario']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] ]['grid_jap_solicitud_procesada_usuario']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] ]['grid_jap_solicitud_procesada_usuario']['embutida_form_parms'] = "var_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_jap_solicitud_procesada_usuario"]) && $this->Ini->sc_lig_md5["grid_jap_solicitud_procesada_usuario"] == "S") {
     $Parms_Lig  = "var_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_jap_solicitud_procesada_usuario_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] ]['grid_jap_solicitud_procesada_usuario'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init'] ]['grid_jap_solicitud_procesada_usuario'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_inspecciones']) && 'nmsc_iframe_liga_grid_jap_solicitud_procesada_usuario' != $this->Ini->sc_lig_target['C_@scinf_inspecciones'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_inspecciones'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_jap_solicitud_procesada_usuario_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_inspecciones'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_jap_solicitud_procesada_usuario"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_jap_solicitud_procesada_usuario"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_inspecciones_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_inspecciones_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_inspecciones_dumb = ('' == $sStyleHidden_inspecciones) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_inspecciones_dumb" style="<?php echo $sStyleHidden_inspecciones_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_5"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_5"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_5" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cartera_recuperar']))
    {
        $this->nm_new_label['cartera_recuperar'] = "cartera_recuperar";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cartera_recuperar = $this->cartera_recuperar;
   $sStyleHidden_cartera_recuperar = '';
   if (isset($this->nmgp_cmp_hidden['cartera_recuperar']) && $this->nmgp_cmp_hidden['cartera_recuperar'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cartera_recuperar']);
       $sStyleHidden_cartera_recuperar = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cartera_recuperar = 'display: none;';
   $sStyleReadInp_cartera_recuperar = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cartera_recuperar']) && $this->nmgp_cmp_readonly['cartera_recuperar'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cartera_recuperar']);
       $sStyleReadLab_cartera_recuperar = '';
       $sStyleReadInp_cartera_recuperar = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cartera_recuperar']) && $this->nmgp_cmp_hidden['cartera_recuperar'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cartera_recuperar" value="<?php echo $this->form_encode_input($cartera_recuperar) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cartera_recuperar_line" id="hidden_field_data_cartera_recuperar" style="<?php echo $sStyleHidden_cartera_recuperar; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_cartera_recuperar_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_recuperar'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_recuperar'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_recuperar'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] ]['grid_v_cartera_por_recuperar_ind']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] ]['grid_v_cartera_por_recuperar_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] ]['grid_v_cartera_por_recuperar_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] ]['grid_v_cartera_por_recuperar_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_cartera_por_recuperar_ind"]) && $this->Ini->sc_lig_md5["grid_v_cartera_por_recuperar_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_cartera_por_recuperar_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] ]['grid_v_cartera_por_recuperar_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init'] ]['grid_v_cartera_por_recuperar_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_cartera_recuperar']) && 'nmsc_iframe_liga_grid_v_cartera_por_recuperar_ind' != $this->Ini->sc_lig_target['C_@scinf_cartera_recuperar'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_cartera_recuperar'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_por_recuperar_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_cartera_recuperar'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_cartera_por_recuperar_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_cartera_por_recuperar_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cartera_recuperar_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cartera_recuperar_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_cartera_recuperar_dumb = ('' == $sStyleHidden_cartera_recuperar) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cartera_recuperar_dumb" style="<?php echo $sStyleHidden_cartera_recuperar_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_6"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_6"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_6" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cartera_recuperada']))
    {
        $this->nm_new_label['cartera_recuperada'] = "cartera_recuperada";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cartera_recuperada = $this->cartera_recuperada;
   $sStyleHidden_cartera_recuperada = '';
   if (isset($this->nmgp_cmp_hidden['cartera_recuperada']) && $this->nmgp_cmp_hidden['cartera_recuperada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cartera_recuperada']);
       $sStyleHidden_cartera_recuperada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cartera_recuperada = 'display: none;';
   $sStyleReadInp_cartera_recuperada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cartera_recuperada']) && $this->nmgp_cmp_readonly['cartera_recuperada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cartera_recuperada']);
       $sStyleReadLab_cartera_recuperada = '';
       $sStyleReadInp_cartera_recuperada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cartera_recuperada']) && $this->nmgp_cmp_hidden['cartera_recuperada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cartera_recuperada" value="<?php echo $this->form_encode_input($cartera_recuperada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cartera_recuperada_line" id="hidden_field_data_cartera_recuperada" style="<?php echo $sStyleHidden_cartera_recuperada; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_cartera_recuperada_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_recuperada'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_recuperada'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_recuperada'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] ]['grid_v_cartera_recuperada_ind']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] ]['grid_v_cartera_recuperada_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] ]['grid_v_cartera_recuperada_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] ]['grid_v_cartera_recuperada_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_cartera_recuperada_ind"]) && $this->Ini->sc_lig_md5["grid_v_cartera_recuperada_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_cartera_recuperada_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] ]['grid_v_cartera_recuperada_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init'] ]['grid_v_cartera_recuperada_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_cartera_recuperada']) && 'nmsc_iframe_liga_grid_v_cartera_recuperada_ind' != $this->Ini->sc_lig_target['C_@scinf_cartera_recuperada'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_cartera_recuperada'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_recuperada_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_cartera_recuperada'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_cartera_recuperada_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_cartera_recuperada_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cartera_recuperada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cartera_recuperada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_cartera_recuperada_dumb = ('' == $sStyleHidden_cartera_recuperada) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cartera_recuperada_dumb" style="<?php echo $sStyleHidden_cartera_recuperada_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_7"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_7"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_7" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cartera_anulada']))
    {
        $this->nm_new_label['cartera_anulada'] = "cartera_anulada";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cartera_anulada = $this->cartera_anulada;
   $sStyleHidden_cartera_anulada = '';
   if (isset($this->nmgp_cmp_hidden['cartera_anulada']) && $this->nmgp_cmp_hidden['cartera_anulada'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cartera_anulada']);
       $sStyleHidden_cartera_anulada = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cartera_anulada = 'display: none;';
   $sStyleReadInp_cartera_anulada = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cartera_anulada']) && $this->nmgp_cmp_readonly['cartera_anulada'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cartera_anulada']);
       $sStyleReadLab_cartera_anulada = '';
       $sStyleReadInp_cartera_anulada = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cartera_anulada']) && $this->nmgp_cmp_hidden['cartera_anulada'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cartera_anulada" value="<?php echo $this->form_encode_input($cartera_anulada) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cartera_anulada_line" id="hidden_field_data_cartera_anulada" style="<?php echo $sStyleHidden_cartera_anulada; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_cartera_anulada_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_anulada'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_anulada'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cartera_anulada'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] ]['grid_v_cartera_anulada_ind']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] ]['grid_v_cartera_anulada_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] ]['grid_v_cartera_anulada_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] ]['grid_v_cartera_anulada_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_cartera_anulada_ind"]) && $this->Ini->sc_lig_md5["grid_v_cartera_anulada_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinPARCIAL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_cartera_anulada_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] ]['grid_v_cartera_anulada_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init'] ]['grid_v_cartera_anulada_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_cartera_anulada']) && 'nmsc_iframe_liga_grid_v_cartera_anulada_ind' != $this->Ini->sc_lig_target['C_@scinf_cartera_anulada'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_cartera_anulada'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_cartera_anulada_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_cartera_anulada'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_cartera_anulada_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_cartera_anulada_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cartera_anulada_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cartera_anulada_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_cartera_anulada_dumb = ('' == $sStyleHidden_cartera_anulada) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_cartera_anulada_dumb" style="<?php echo $sStyleHidden_cartera_anulada_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_8"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_8"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_8" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['facturas']))
    {
        $this->nm_new_label['facturas'] = "" . $this->Ini->Nm_lang['lang_factura'] . "s";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $facturas = $this->facturas;
   $sStyleHidden_facturas = '';
   if (isset($this->nmgp_cmp_hidden['facturas']) && $this->nmgp_cmp_hidden['facturas'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['facturas']);
       $sStyleHidden_facturas = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_facturas = 'display: none;';
   $sStyleReadInp_facturas = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['facturas']) && $this->nmgp_cmp_readonly['facturas'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['facturas']);
       $sStyleReadLab_facturas = '';
       $sStyleReadInp_facturas = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['facturas']) && $this->nmgp_cmp_hidden['facturas'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="facturas" value="<?php echo $this->form_encode_input($facturas) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_facturas_line" id="hidden_field_data_facturas" style="<?php echo $sStyleHidden_facturas; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_facturas_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_facturas'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_facturas'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_facturas'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] ]['grid_del_factura_cliente']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] ]['grid_del_factura_cliente']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] ]['grid_del_factura_cliente']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] ]['grid_del_factura_cliente']['embutida_form_parms'] = "igtech_rucempresa*scin" . $this->nmgp_dados_form['cl_empresa'] . "*scoutvar_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_del_factura_cliente"]) && $this->Ini->sc_lig_md5["grid_del_factura_cliente"] == "S") {
     $Parms_Lig  = "igtech_rucempresa*scin" . $this->nmgp_dados_form['cl_empresa'] . "*scoutvar_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "igtech_rucempresa*scin" . $this->nmgp_dados_form['cl_empresa'] . "*scoutvar_cliente*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_rows*scin20*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_del_factura_cliente_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] ]['grid_del_factura_cliente'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init'] ]['grid_del_factura_cliente'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_facturas']) && 'nmsc_iframe_liga_grid_del_factura_cliente' != $this->Ini->sc_lig_target['C_@scinf_facturas'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_facturas'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_factura_cliente_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_facturas'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_del_factura_cliente"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_del_factura_cliente"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_facturas_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_facturas_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_facturas_dumb = ('' == $sStyleHidden_facturas) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_facturas_dumb" style="<?php echo $sStyleHidden_facturas_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_9"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_9"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_9" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['factura_credito']))
    {
        $this->nm_new_label['factura_credito'] = "factura_credito";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $factura_credito = $this->factura_credito;
   $sStyleHidden_factura_credito = '';
   if (isset($this->nmgp_cmp_hidden['factura_credito']) && $this->nmgp_cmp_hidden['factura_credito'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['factura_credito']);
       $sStyleHidden_factura_credito = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_factura_credito = 'display: none;';
   $sStyleReadInp_factura_credito = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['factura_credito']) && $this->nmgp_cmp_readonly['factura_credito'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['factura_credito']);
       $sStyleReadLab_factura_credito = '';
       $sStyleReadInp_factura_credito = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['factura_credito']) && $this->nmgp_cmp_hidden['factura_credito'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="factura_credito" value="<?php echo $this->form_encode_input($factura_credito) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_factura_credito_line" id="hidden_field_data_factura_credito" style="<?php echo $sStyleHidden_factura_credito; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_factura_credito_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_factura_credito'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_factura_credito'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_factura_credito'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] ]['grid_facturas_credito_ind']['embutida_form_full']  = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] ]['grid_facturas_credito_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] ]['grid_facturas_credito_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] ]['grid_facturas_credito_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_facturas_credito_ind"]) && $this->Ini->sc_lig_md5["grid_facturas_credito_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_facturas_credito_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] ]['grid_facturas_credito_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init'] ]['grid_facturas_credito_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_factura_credito']) && 'nmsc_iframe_liga_grid_facturas_credito_ind' != $this->Ini->sc_lig_target['C_@scinf_factura_credito'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_factura_credito'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_facturas_credito_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_factura_credito'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_facturas_credito_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_facturas_credito_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_factura_credito_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_factura_credito_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_factura_credito_dumb = ('' == $sStyleHidden_factura_credito) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_factura_credito_dumb" style="<?php echo $sStyleHidden_factura_credito_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_10"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_10"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_10" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['notas_credito']))
    {
        $this->nm_new_label['notas_credito'] = "notas_credito";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $notas_credito = $this->notas_credito;
   $sStyleHidden_notas_credito = '';
   if (isset($this->nmgp_cmp_hidden['notas_credito']) && $this->nmgp_cmp_hidden['notas_credito'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['notas_credito']);
       $sStyleHidden_notas_credito = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_notas_credito = 'display: none;';
   $sStyleReadInp_notas_credito = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['notas_credito']) && $this->nmgp_cmp_readonly['notas_credito'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['notas_credito']);
       $sStyleReadLab_notas_credito = '';
       $sStyleReadInp_notas_credito = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['notas_credito']) && $this->nmgp_cmp_hidden['notas_credito'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="notas_credito" value="<?php echo $this->form_encode_input($notas_credito) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_notas_credito_line" id="hidden_field_data_notas_credito" style="<?php echo $sStyleHidden_notas_credito; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_notas_credito_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_notas_credito'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_notas_credito'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_notas_credito'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] ]['grid_del_nota_credito_ind']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] ]['grid_del_nota_credito_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] ]['grid_del_nota_credito_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] ]['grid_del_nota_credito_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_del_nota_credito_ind"]) && $this->Ini->sc_lig_md5["grid_del_nota_credito_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_del_nota_credito_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] ]['grid_del_nota_credito_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init'] ]['grid_del_nota_credito_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_notas_credito']) && 'nmsc_iframe_liga_grid_del_nota_credito_ind' != $this->Ini->sc_lig_target['C_@scinf_notas_credito'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_notas_credito'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_del_nota_credito_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_notas_credito'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_del_nota_credito_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_del_nota_credito_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_notas_credito_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_notas_credito_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 






<?php $sStyleHidden_notas_credito_dumb = ('' == $sStyleHidden_notas_credito) ? 'display: none' : ''; ?>
    <TD class="scFormDataOdd" id="hidden_field_data_notas_credito_dumb" style="<?php echo $sStyleHidden_notas_credito_dumb; ?>"></TD>
   </tr>
<?php $sc_hidden_no = 1; ?>
</TABLE></div><!-- bloco_f -->
   </td>
   </tr></table>
   <a name="bloco_11"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_11"><!-- bloco_c -->
<TABLE align="center" id="hidden_bloco_11" class="scFormTable<?php echo $this->classes_100perc_fields['table'] ?>" width="100%" style="height: 100%;"><?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['cxp_cliente']))
    {
        $this->nm_new_label['cxp_cliente'] = "cxp_cliente";
    }
?>
<?php
   $nm_cor_fun_cel  = (isset($nm_cor_fun_cel) && $nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = (isset($nm_img_fun_cel) && $nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $cxp_cliente = $this->cxp_cliente;
   $sStyleHidden_cxp_cliente = '';
   if (isset($this->nmgp_cmp_hidden['cxp_cliente']) && $this->nmgp_cmp_hidden['cxp_cliente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['cxp_cliente']);
       $sStyleHidden_cxp_cliente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_cxp_cliente = 'display: none;';
   $sStyleReadInp_cxp_cliente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['cxp_cliente']) && $this->nmgp_cmp_readonly['cxp_cliente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['cxp_cliente']);
       $sStyleReadLab_cxp_cliente = '';
       $sStyleReadInp_cxp_cliente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['cxp_cliente']) && $this->nmgp_cmp_hidden['cxp_cliente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="cxp_cliente" value="<?php echo $this->form_encode_input($cxp_cliente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_cxp_cliente_line" id="hidden_field_data_cxp_cliente" style="<?php echo $sStyleHidden_cxp_cliente; ?>vertical-align: top;"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td width="100%" class="scFormDataFontOdd css_cxp_cliente_line" style="vertical-align: top;padding: 0px">
<?php
 if (isset($_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cxp_cliente'] ]) && '' != $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cxp_cliente'] ]) {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] = $_SESSION['scriptcase']['dashboard_scinit'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] ][ $this->Ini->sc_lig_target['C_@scinf_cxp_cliente'] ];
 }
 else {
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] = $this->Ini->sc_page;
 }
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] ]['grid_v_del_cuentas_por_pagar_cliente_ind']['embutida_form_full']  = false;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] ]['grid_v_del_cuentas_por_pagar_cliente_ind']['embutida_form']       = true;
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] ]['grid_v_del_cuentas_por_pagar_cliente_ind']['embutida_pai']        = "form_reporte_individual_mob";
 $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] ]['grid_v_del_cuentas_por_pagar_cliente_ind']['embutida_form_parms'] = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 if (isset($this->Ini->sc_lig_md5["grid_v_del_cuentas_por_pagar_cliente_ind"]) && $this->Ini->sc_lig_md5["grid_v_del_cuentas_por_pagar_cliente_ind"] == "S") {
     $Parms_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
     $Md5_Lig    = "@SC_par@" . $this->form_encode_input($this->Ini->sc_page) . "@SC_par@form_reporte_individual_mob@SC_par@" . md5($Parms_Lig);
     $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['Lig_Md5'][md5($Parms_Lig)] = $Parms_Lig;
 } else {
     $Md5_Lig  = "var_propietario*scin" . $this->nmgp_dados_form['cl_id'] . "*scoutNMSC_inicial*scininicio*scoutNMSC_paginacao*scinFULL*scout";
 }
 $parms_lig_cons = "&nmgp_parms=" . $Md5_Lig;
 $sDetailSrc = ('novo' == $this->nmgp_opcao) ? 'form_reporte_individual_mob_empty.htm' : $this->Ini->link_grid_v_del_cuentas_por_pagar_cliente_ind_cons . '?script_case_init=' . $this->form_encode_input($this->Ini->sc_page) . '&script_case_detail=Y' . $parms_lig_cons;
 foreach ($_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] ]['grid_v_del_cuentas_por_pagar_cliente_ind'] as $i => $v)
 {
     $_SESSION['sc_session'][ $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init'] ]['grid_v_del_cuentas_por_pagar_cliente_ind'][$i] = $v;
 }
if (isset($this->Ini->sc_lig_target['C_@scinf_cxp_cliente']) && 'nmsc_iframe_liga_grid_v_del_cuentas_por_pagar_cliente_ind' != $this->Ini->sc_lig_target['C_@scinf_cxp_cliente'])
{
    if ('novo' != $this->nmgp_opcao)
    {
        $sDetailSrc .= '&under_dashboard=1&dashboard_app=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['dashboard_app'] . '&own_widget=' . $this->Ini->sc_lig_target['C_@scinf_cxp_cliente'] . '&parent_widget=' . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['own_widget'];
        $sDetailSrc  = $this->addUrlParam($sDetailSrc, 'script_case_init', $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['grid_v_del_cuentas_por_pagar_cliente_ind_script_case_init']);
    }
?>
<script type="text/javascript">
$(function() {
    scOpenMasterDetail("<?php echo $this->Ini->sc_lig_target['C_@scinf_cxp_cliente'] ?>", "<?php echo $sDetailSrc; ?>");
});
</script>
<?php
}
else
{
?>
<iframe border="0" id="nmsc_iframe_liga_grid_v_del_cuentas_por_pagar_cliente_ind"  marginWidth="0" marginHeight="0" frameborder="0" valign="top" height="100" width="100%" name="nmsc_iframe_liga_grid_v_del_cuentas_por_pagar_cliente_ind"  scrolling="auto" src="<?php echo $sDetailSrc; ?>"></iframe>
<?php
}
?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_cxp_cliente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_cxp_cliente_text"></span></td></tr></table></td></tr></table> </TD>
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
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar sc-toolbar-bottom" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
    $NM_btn = false;
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R")
{
        $sCondStyle = '';
?>
<?php
        $buttonMacroDisabled = 'sc-unique-btn-13';
        $buttonMacroLabel = "";

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label'][''];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['first']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['first']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['first']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['first']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['first'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['back']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['back']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['back']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['back']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['back'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['forward']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['forward']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['forward']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['forward']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['forward'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['last']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['last']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['last']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['last']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['last'];
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

        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['']) && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_disabled']['']) {
            $buttonMacroDisabled .= ' disabled';
        }
        if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['']) && '' != $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label']['']) {
            $buttonMacroLabel = $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['btn_label'][''];
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
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R")
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
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['run_iframe'] != "F") { ?><script>navpage_atualiza('<?php echo $this->SC_nav_page ?>');</script><?php } ?>
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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7,8,9,10,11);

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
  $nm_sc_blocos_da_pag = array(0,1,2,3,4,5,6,7,8,9,10,11);

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
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['masterValue']);
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
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_reporte_individual_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_reporte_individual_mob");
 parent.scAjaxDetailHeight("form_reporte_individual_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_reporte_individual_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_reporte_individual_mob", <?php echo $sTamanhoIframe; ?>);
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
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['sc_modal'])
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
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-10").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-11").length && $("#sc_b_sai_t.sc-unique-btn-11").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-11").hasClass("disabled")) {
		        return;
		    }
			scFormClose_F6('<?php echo $nm_url_saida; ?>'); return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-12").length && $("#sc_b_sai_t.sc-unique-btn-12").is(":visible")) {
		    if ($("#sc_b_sai_t.sc-unique-btn-12").hasClass("disabled")) {
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
		if ($("#sys_separator.sc-unique-btn-9").length && $("#sys_separator.sc-unique-btn-9").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-9").hasClass("disabled")) {
		        return;
		    }
			return false;
			toggleToolbar(event, true); return;
		}
		if ($("#sys_separator.sc-unique-btn-13").length && $("#sys_separator.sc-unique-btn-13").is(":visible")) {
		    if ($("#sys_separator.sc-unique-btn-13").hasClass("disabled")) {
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
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-5").length && $("#sc_b_ini_b.sc-unique-btn-5").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-5").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-14").length && $("#sc_b_ini_b.sc-unique-btn-14").is(":visible")) {
		    if ($("#sc_b_ini_b.sc-unique-btn-14").hasClass("disabled")) {
		        return;
		    }
			nm_move ('inicio');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-6").length && $("#sc_b_ret_b.sc-unique-btn-6").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-6").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-15").length && $("#sc_b_ret_b.sc-unique-btn-15").is(":visible")) {
		    if ($("#sc_b_ret_b.sc-unique-btn-15").hasClass("disabled")) {
		        return;
		    }
			nm_move ('retorna');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-7").length && $("#sc_b_avc_b.sc-unique-btn-7").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-7").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-16").length && $("#sc_b_avc_b.sc-unique-btn-16").is(":visible")) {
		    if ($("#sc_b_avc_b.sc-unique-btn-16").hasClass("disabled")) {
		        return;
		    }
			nm_move ('avanca');
			toggleToolbar(event, true); return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-8").length && $("#sc_b_fim_b.sc-unique-btn-8").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-8").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
			toggleToolbar(event, true); return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-17").length && $("#sc_b_fim_b.sc-unique-btn-17").is(":visible")) {
		    if ($("#sc_b_fim_b.sc-unique-btn-17").hasClass("disabled")) {
		        return;
		    }
			nm_move ('final');
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
$_SESSION['sc_session'][$this->Ini->sc_page]['form_reporte_individual_mob']['buttonStatus'] = $this->nmgp_botoes;
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
