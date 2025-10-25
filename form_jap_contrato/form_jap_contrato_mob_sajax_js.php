
 <form name="form_ajax_redir_1" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_outra_jan">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>
 <form name="form_ajax_redir_2" method="post" style="display: none">
  <input type="hidden" name="nmgp_parms">
  <input type="hidden" name="nmgp_url_saida">
  <input type="hidden" name="script_case_init">
  <input type="hidden" name="script_case_session" value="<?php echo session_id() ?>">
 </form>

 <SCRIPT>
<?php
sajax_show_javascript();
?>

  function scCenterElement(oElem)
  {
    var $oElem    = $(oElem),
        $oWindow  = $(this),
        iElemTop  = Math.round(($oWindow.height() - $oElem.height()) / 2),
        iElemLeft = Math.round(($oWindow.width()  - $oElem.width())  / 2);

    $oElem.offset({top: iElemTop, left: iElemLeft});
  } // scCenterElement

  function scAjaxHideAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "none";
    }
  } // scAjaxHideAutocomp

  function scAjaxShowAutocomp(sFrameId)
  {
    if (document.getElementById("id_ac_frame_" + sFrameId))
    {
      document.getElementById("id_ac_frame_" + sFrameId).style.display = "";
      document.getElementById("id_ac_" + sFrameId).focus();
    }
  } // scAjaxShowAutocomp

  function scAjaxHideDebug()
  {
    if (document.getElementById("id_debug_window"))
    {
      document.getElementById("id_debug_window").style.display = "none";
      document.getElementById("id_debug_text").innerHTML = "";
    }
  } // scAjaxHideDebug

  function scAjaxShowDebug(oTemp)
  {
    if (!document.getElementById("id_debug_window"))
    {
      return;
    }
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["htmOutput"] && "" != oResp["htmOutput"])
    {
      document.getElementById("id_debug_window").style.display = "";
      document.getElementById("id_debug_text").innerHTML = scAjaxFormatDebug(oResp["htmOutput"]) + document.getElementById("id_debug_text").innerHTML;
      //scCenterElement(document.getElementById("id_debug_window"));
    }
  } // scAjaxShowDebug

  function scAjaxFormatDebug(sDebugMsg)
  {
    return "<table class=\"scFormMessageTable\" style=\"margin: 1px; width: 100%\"><tr><td class=\"scFormMessageMessage\">" + scAjaxSpecCharParser(sDebugMsg) + "</td></tr></table>";
  } // scAjaxFormatDebug

  function scAjaxHideErrorDisplay_default(sErrorId, bForce)
  {
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
        document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "none";
        document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = "";
        if (null == bForce)
        {
            bForce = true;
        }
        if (bForce)
        {
            var $oField = $('#id_sc_field_' + sErrorId);
            if (0 < $oField.length)
            {
                scAjax_removeFieldErrorStyle($oField);
            }
        }
    }
    if (document.getElementById("id_error_display_fixed"))
    {
        document.getElementById("id_error_display_fixed").style.display = "none";
    }
  } // scAjaxHideErrorDisplay_default

  function scAjaxShowErrorDisplay_default(sErrorId, sErrorMsg)
  {
    if (oResp && oResp['redirExitInfo'])
    {
      sErrorMsg += "<br /><input type=\"button\" onClick=\"window.location='" + oResp['redirExitInfo']['action'] + "'\" value=\"Ok\">";
    }
    sErrorMsg = scAjaxErrorSql(sErrorMsg);
    if (document.getElementById("id_error_display_" + sErrorId + "_frame"))
    {
      document.getElementById("id_error_display_" + sErrorId + "_frame").style.display = "";
      document.getElementById("id_error_display_" + sErrorId + "_text").innerHTML = sErrorMsg;
      if ("table" == sErrorId)
      {
        scCenterElement(document.getElementById("id_error_display_" + sErrorId + "_frame"));
      }
      var $oField = $('#id_sc_field_' + sErrorId);
      if (0 < $oField.length)
      {
        scAjax_applyFieldErrorStyle($oField);
      }
    }
    if (ajax_error_list && ajax_error_list[sErrorId] && ajax_error_list[sErrorId]["timeout"] && 0 < ajax_error_list[sErrorId]["timeout"])
    {
      setTimeout("scAjaxHideErrorDisplay('" + sErrorId + "', false)", ajax_error_list[sErrorId]["timeout"] * 1000);
    }
  } // scAjaxShowErrorDisplay_default

  var iErrorSqlId = 1;

  function scAjaxErrorSql(sErrorMsg)
  {
    var iTmpPos = sErrorMsg.indexOf("{SC_DB_ERROR_INI}"),
        sTmpId;
    while (-1 < iTmpPos)
    {
      sTmpId    = "sc_id_error_sql_" + iErrorSqlId;
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><span style=\"text-decoration: underline\" onClick=\"$('#" + sTmpId + "').show(); scCenterElement(document.getElementById('" + sTmpId + "'))\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_MID}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span><table class=\"scFormErrorTable\" id=\"" + sTmpId + "\" style=\"display: none; position: absolute\"><tr><td>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_CLS}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "<br /><br /><span onClick=\"$('#" + sTmpId + "').hide()\">" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_END}");
      sErrorMsg = sErrorMsg.substr(0, iTmpPos) + "</span></td></tr></table>" + sErrorMsg.substr(iTmpPos + 17);
      iTmpPos   = sErrorMsg.indexOf("{SC_DB_ERROR_INI}");
      iErrorSqlId++;
    }
    return sErrorMsg;
  } // scAjaxErrorSql

  function scAjaxHideMessage_default()
  {
    if (document.getElementById("id_message_display_frame"))
    {
      document.getElementById("id_message_display_frame").style.display = "none";
      document.getElementById("id_message_display_text").innerHTML = "";
    }
  } // scAjaxHideMessage

  function scAjaxShowMessage_default()
  {
    if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"])
    {
      return;
    }
    _scAjaxShowMessage_default({title: scMsgDefTitle, message: oResp["msgDisplay"]["msgText"], isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: false, toastPos: ""});
  } // scAjaxShowMessage

  var scMsgDefClose = "";

  function _scAjaxShowMessage_default(params) {
	var sTitle = params["title"],
		sMessage = params["message"],
		bModal = params["isModal"],
		iTimeout = params["timeout"],
		bButton = params["showButton"],
		sButton = params["buttonLabel"],
		iTop = params["topPos"],
		iLeft = params["leftPos"],
		iWidth = params["width"],
		iHeight = params["height"],
		sRedir = params["redirUrl"],
		sTarget = params["redirTarget"],
		sParam = params["redirParam"],
		bClose = params["showClose"],
		bBodyIcon = params["showBodyIcon"],
		bToast = params["isToast"],
		sToastPos = params["toastPos"];
    if ("" == sMessage) {
      if (bModal) {
        scMsgDefClick = "close_modal";
      }
      else {
        scMsgDefClick = "close";
      }
      _scAjaxMessageBtnClick();
      document.getElementById("id_message_display_title").innerHTML = scMsgDefTitle;
      document.getElementById("id_message_display_text").innerHTML = "";
      document.getElementById("id_message_display_buttone").value = scMsgDefButton;
      document.getElementById("id_message_display_buttond").style.display = "none";
    }
    else {
      document.getElementById("id_message_display_title").innerHTML = scAjaxSpecCharParser(sTitle);
      document.getElementById("id_message_display_text").innerHTML = scAjaxSpecCharParser(sMessage);
      document.getElementById("id_message_display_buttone").value = sButton;
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_buttond").style.display = bButton ? "" : "none";
      document.getElementById("id_message_display_title_line").style.display = (bClose || "" != sTitle) ? "" : "none";
      document.getElementById("id_message_display_close_icon").style.display = bClose ? "" : "none";
      if (document.getElementById("id_message_display_body_icon")) {
        document.getElementById("id_message_display_body_icon").style.display = bBodyIcon ? "" : "none";
      }
      $("#id_message_display_content").css('width', (0 < iWidth ? iWidth + 'px' : ''));
      $("#id_message_display_content").css('height', (0 < iHeight ? iHeight + 'px' : ''));
      if (bModal) {
        iWidth = iWidth || 250;
        iHeight = iHeight || 200;
        scMsgDefClose = "close_modal";
        tb_show('', '#TB_inline?height=' + (iHeight + 6) + '&width=' + (iWidth + 4) + '&inlineId=id_message_display_frame&modal=true', '');
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2_modal";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close_modal";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close_modal";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
      else
      {
        scMsgDefClose = "close";
        $("#id_message_display_frame").css('top', (0 < iTop ? iTop + 'px' : ''));
        $("#id_message_display_frame").css('left', (0 < iLeft ? iLeft + 'px' : ''));
        document.getElementById("id_message_display_frame").style.display = "";
        if (0 == iTop && 0 == iLeft) {
          scCenterElement(document.getElementById("id_message_display_frame"));
        }
        if (bButton) {
          if ("" != sRedir && "" != sTarget) {
            scMsgDefClick = "redir2";
            document.form_ajax_redir_2.action = sRedir;
            document.form_ajax_redir_2.target = sTarget;
            document.form_ajax_redir_2.nmgp_parms.value = sParam;
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
          }
          else if ("" != sRedir && "" == sTarget) {
            scMsgDefClick = "redir1";
            document.form_ajax_redir_1.action = sRedir;
            document.form_ajax_redir_1.nmgp_parms.value = sParam;
          }
          else {
            scMsgDefClick = "close";
          }
        }
        else if (null != iTimeout && 0 < iTimeout) {
          scMsgDefClick = "close";
          setTimeout("_scAjaxMessageBtnClick()", iTimeout * 1000);
        }
      }
    }
  } // _scAjaxShowMessage_default

  function _scAjaxMessageBtnClose() {
    switch (scMsgDefClose) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function _scAjaxMessageBtnClick() {
    switch (scMsgDefClick) {
      case "close":
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "close_modal":
        tb_remove();
        break;
      case "dismiss":
        scAjaxHideMessage();
        break;
      case "redir1":
        document.form_ajax_redir_1.submit();
        break;
      case "redir2":
        document.form_ajax_redir_2.submit();
        document.getElementById("id_message_display_frame").style.display = "none";
        break;
      case "redir2_modal":
        document.form_ajax_redir_2.submit();
        tb_remove();
        break;
    }
  } // _scAjaxMessageBtnClick

  function scAjaxHasError()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "ERROR" == oResp["result"];
  } // scAjaxHasError

  function scAjaxIsOk()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "OK" == oResp["result"] || "SET" == oResp["result"];
  } // scAjaxIsOk

  function scAjaxIsSet()
  {
    if (!oResp["result"])
    {
      return false;
    }
    return "SET" == oResp["result"];
  } // scAjaxIsSet

  function scAjaxCalendarReload()
  {
    if (oResp["calendarReload"] && "OK" == oResp["calendarReload"] && typeof self.parent.calendar_reload == "function")
    {
<?php
if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && isset($_SESSION['scriptcase']['display_mobile']) && $_SESSION['scriptcase']['display_mobile']) {
?>
      self.parent.calendar_reload();
      self.parent.tb_remove();
<?php
} else {
?>
      self.parent.calendar_reload();
      self.parent.tb_remove();
<?php
}
?>
      return true;
    }
    return false;
  } // scCalendarReload

  function scAjaxUpdateErrors(sType)
  {
    ajax_error_geral = "";
    oFieldErrors     = {};
    if (oResp["errList"])
    {
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if ("geral_form_jap_contrato_mob" == sTestField)
        {
          if (ajax_error_geral != '') { ajax_error_geral += '<br>';}
          ajax_error_geral += scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
        else
        {
          if (scFocusFirstErrorField && '' == scFocusFirstErrorName)
          {
            scFocusFirstErrorName = sTestField;
          }
          if (oResp["errList"][iFieldErrors]["numLinha"])
          {
            sTestField += oResp["errList"][iFieldErrors]["numLinha"];
          }
          if (!oFieldErrors[sTestField])
          {
            oFieldErrors[sTestField] = new Array();
          }
          oFieldErrors[sTestField][oFieldErrors[sTestField].length] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
        }
      }
    }
    for (iUpdateErrors = 0; iUpdateErrors < ajax_field_list.length; iUpdateErrors++)
    {
      sTestField = ajax_field_list[iUpdateErrors];
      if (oFieldErrors[sTestField])
      {
        ajax_error_list[sTestField][sType] = oFieldErrors[sTestField];
      }
    }
  } // scAjaxUpdateErrors

  function scAjaxUpdateFieldErrors(sField, sType)
  {
    aFieldErrors = new Array();
    if (oResp["errList"])
    {
      iErrorPos  = 0;
      for (iFieldErrors = 0; iFieldErrors < oResp["errList"].length; iFieldErrors++)
      {
        sTestField = oResp["errList"][iFieldErrors]["fldName"];
        if (oResp["errList"][iFieldErrors]["numLinha"])
        {
          sTestField += oResp["errList"][iFieldErrors]["numLinha"];
        }
        if (sField == sTestField)
        {
          aFieldErrors[iErrorPos] = scAjaxSpecCharParser(oResp["errList"][iFieldErrors]["msgText"]);
          iErrorPos++;
        }
      }
    }
        if (ajax_error_list[sField])
        {
        ajax_error_list[sField][sType] = aFieldErrors;
        }
  } // scAjaxUpdateFieldErrors

  function scAjaxListErrors(bLabel)
  {
    bFirst        = false;
    sAppErrorText = "";
    if ("" != ajax_error_geral)
    {
      bFirst         = true;
      sAppErrorText += ajax_error_geral;
    }
    for (iFieldList = 0; iFieldList < ajax_field_list.length; iFieldList++)
    {
      sFieldError = scAjaxListFieldErrors(ajax_field_list[iFieldList], bLabel);
      if ("" != sFieldError)
      {
        if (bFirst)
        {
          bFirst         = false
          sAppErrorText += "<hr size=\"1\" width=\"80%\" />";
        }
        sAppErrorText += sFieldError;
      }
    }
    return sAppErrorText;
  } // scAjaxListErrors

  function scAjaxListFieldErrors(sField, bLabel)
  {
    sErrorText = "";
    for (iErrorType = 0; iErrorType < ajax_error_type.length; iErrorType++)
    {
      if (ajax_error_list[sField])
      {
        for (iListErrors = 0; iListErrors < ajax_error_list[sField][ajax_error_type[iErrorType]].length; iListErrors++)
        {
          if (bLabel)
          {
            sErrorText += ajax_error_list[sField]["label"] + ": ";
          }
          sErrorText += ajax_error_list[sField][ajax_error_type[iErrorType]][iListErrors] + "<br />";
        }
      }
    }
    return sErrorText;
  } // scAjaxListFieldErrors

	function scAjaxClearErrors() {
		var fieldName;

		for (fieldName in ajax_error_list) {
            if (null != ajax_error_list[fieldName]) {
                ajax_error_list[fieldName]["valid"] = new Array();
                ajax_error_list[fieldName]["onblur"] = new Array();
                ajax_error_list[fieldName]["onchange"] = new Array();
                ajax_error_list[fieldName]["onclick"] = new Array();
                ajax_error_list[fieldName]["onfocus"] = new Array();
            }
		}
	} // scAjaxClearErrors

  function scAjaxSetVariables()
  {
    if (!oResp["varList"])
    {
      return true;
    }
    for (var iVarFields = 0; iVarFields < oResp["varList"].length; iVarFields++)
    {
      var sVarName  = oResp["varList"][iVarFields]["index"];
      var sVarValue = oResp["varList"][iVarFields]["value"];
	  eval(sVarName + " = \"" + sVarValue + "\";");
	}
  } // scAjaxSetVariables

  function scAjaxSetFields()
  {
    if (!oResp["fldList"])
    {
      return true;
    }
    for (iSetFields = 0; iSetFields < oResp["fldList"].length; iSetFields++)
    {
      var sFieldName = oResp["fldList"][iSetFields]["fldName"];
      var sFieldType = oResp["fldList"][iSetFields]["fldType"];

      if ("selectdd" == sFieldType)
      {
        var bSelectDD = true;
        sFieldType = "select";
      }
      else
      {
        var bSelectDD = false;
      }
      if ("select2_ac" == sFieldType)
      {
        var bSelect2AC = true;
        sFieldType = "select";
      }
      else
      {
        var bSelect2AC = false;
      }
      if (oResp["fldList"][iSetFields]["valList"])
      {
        var oFieldValues = oResp["fldList"][iSetFields]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (oResp["fldList"][iSetFields]["optList"])
      {
        var oFieldOptions = oResp["fldList"][iSetFields]["optList"];
      }
      else
      {
        var oFieldOptions = null;
      }
/*
      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)) &&
          oFieldValues[0]['value'])
      {
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = oFieldValues[0]['value'];
      }
*/

      if ("corhtml" == sFieldType)
      {
        sFieldType = 'text';

        /*sCor = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
        setaCorPaleta(sFieldName, sCor);*/
      }

      if ("_autocomp" == sFieldName.substr(sFieldName.length - 9) &&
          iSetFields > 0 &&
          sFieldName.substr(0, sFieldName.length - 9) == oResp["fldList"][iSetFields - 1]["fldName"] &&
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)))
      {
          sLabel_auto_Comp = (oFieldValues[0]['value']) ? oFieldValues[0]['value'] : "";
          document.getElementById("div_ac_lab_" + sFieldName.substr(0, sFieldName.length - 9)).innerHTML = sLabel_auto_Comp;
      }


      if (oResp["fldList"][iSetFields]["colNum"])
      {
        var iColNum = oResp["fldList"][iSetFields]["colNum"];
      }
      else
      {
        var iColNum = 1;
      }
      if (oResp["fldList"][iSetFields]["row"])
      {
        var iRow = oResp["fldList"][iSetFields]["row"];
		var thisRow = oResp["fldList"][iSetFields]["row"];
      }
      else
      {
        var iRow = 1;
		var thisRow = "";
      }
      if (oResp["fldList"][iSetFields]["htmComp"])
      {
        var sHtmComp = oResp["fldList"][iSetFields]["htmComp"];
        sHtmComp     = sHtmComp.replace(/__AD__/gi, '"');
        sHtmComp     = sHtmComp.replace(/__AS__/gi, "'");
      }
      else
      {
        var sHtmComp = null;
      }
      if (oResp["fldList"][iSetFields]["imgFile"])
      {
        var sImgFile = oResp["fldList"][iSetFields]["imgFile"];
      }
      else
      {
        var sImgFile = "";
      }
      if (oResp["fldList"][iSetFields]["imgOrig"])
      {
        var sImgOrig = oResp["fldList"][iSetFields]["imgOrig"];
      }
      else
      {
        var sImgOrig = "";
      }
      if (oResp["fldList"][iSetFields]["keepImg"])
      {
        var sKeepImg = oResp["fldList"][iSetFields]["keepImg"];
      }
      else
      {
        var sKeepImg = "N";
      }
      if (oResp["fldList"][iSetFields]["hideName"])
      {
        var sHideName = oResp["fldList"][iSetFields]["hideName"];
      }
      else
      {
        var sHideName = "N";
      }
      if (oResp["fldList"][iSetFields]["imgLink"])
      {
        var sImgLink = oResp["fldList"][iSetFields]["imgLink"];
      }
      else
      {
        var sImgLink = null;
      }
      if (oResp["fldList"][iSetFields]["docLink"])
      {
        var sDocLink = oResp["fldList"][iSetFields]["docLink"];
      }
      else
      {
        var sDocLink = "";
      }
      if (oResp["fldList"][iSetFields]["docIcon"])
      {
        var sDocIcon = oResp["fldList"][iSetFields]["docIcon"];
      }
      else
      {
        var sDocIcon = "";
      }

      if (oResp["fldList"][iSetFields]["docReadonly"])
      {
        var sDocReadonly = oResp["fldList"][iSetFields]["docReadonly"];
      }
      else
      {
        var sDocReadonly = "";
      }

      if (oResp["fldList"][iSetFields]["optComp"])
      {
        var sOptComp = oResp["fldList"][iSetFields]["optComp"];
      }
      else
      {
        var sOptComp = "";
      }
      if (oResp["fldList"][iSetFields]["optClass"])
      {
        var sOptClass = oResp["fldList"][iSetFields]["optClass"];
      }
      else
      {
        var sOptClass = "";
      }
      if (oResp["fldList"][iSetFields]["optMulti"])
      {
        var sOptMulti = oResp["fldList"][iSetFields]["optMulti"];
      }
      else
      {
        var sOptMulti = "";
      }
      if (oResp["fldList"][iSetFields]["imgHtml"])
      {
        var sImgHtml = oResp["fldList"][iSetFields]["imgHtml"];
      }
      else
      {
        var sImgHtml = "";
      }
      if (oResp["fldList"][iSetFields]["mulHtml"])
      {
        var sMULHtml = oResp["fldList"][iSetFields]["mulHtml"];
      }
      else
      {
        var sMULHtml = "";
      }
      if (oResp["fldList"][iSetFields]["updInnerHtml"])
      {
        var sInnerHtml = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["updInnerHtml"]);
      }
      else
      {
        var sInnerHtml = null;
      }
      if (oResp["fldList"][iSetFields]["lookupCons"])
      {
        var sLookupCons = scAjaxSpecCharParser(oResp["fldList"][iSetFields]["lookupCons"]);
      }
      else
      {
        var sLookupCons = "";
      }
      if (oResp["clearUpload"])
      {
        var sClearUpload = scAjaxSpecCharParser(oResp["clearUpload"]);
      }
      else
      {
        var sClearUpload = "N";
      }
      if (oResp["eventField"])
      {
        var sEventField = scAjaxSpecCharParser(oResp["eventField"]);
      }
      else
      {
        var sEventField = "__SC_NO_FIELD";
      }
      if (oResp["fldList"][iSetFields]["switch"])
      {
        var bSwitch = true == oResp["fldList"][iSetFields]["switch"];
      }
      else
      {
        var bSwitch = false;
      }
      if ("checkbox" == sFieldType)
      {
        scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti, bSwitch, sEventField);
      }
      else if ("duplosel" == sFieldType)
      {
        scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions);
      }
      else if ("imagem" == sFieldType)
      {
        scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName);
      }
      else if ("documento" == sFieldType)
      {
        scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload, sDocReadonly);
      }
      else if ("label" == sFieldType)
      {
        scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons);
      }
      else if ("radio" == sFieldType)
      {
        scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, bSwitch, sEventField);
      }
      else if ("select" == sFieldType)
      {
        scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, bSelect2AC, iRow, sEventField, thisRow);
      }
      else if ("text" == sFieldType)
      {
        scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons, thisRow, sEventField);
      }
      else if ("color_palette" == sFieldType)
      {
        scAjaxSetFieldColorPalette(sFieldName, oFieldValues);
      }
      else if ("editor_html" == sFieldType)
      {
        scAjaxSetFieldEditorHtml(sFieldName, oFieldValues);
      }
      else if ("imagehtml" == sFieldType)
      {
        scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml);
      }
      else if ("innerhtml" == sFieldType)
      {
        scAjaxSetFieldInnerHtml(sFieldName, oFieldValues);
      }
      else if ("multi_upload" == sFieldType)
      {
        scAjaxSetFieldMultiUpload(sFieldName, sMULHtml);
      }
      else if ("recur_info" == sFieldType)
      {
        scAjaxSetFieldRecurInfo(sFieldName, sMULHtml);
      }
      else if ("signature" == sFieldType)
      {
        scAjaxSetFieldSignature(sFieldName, oFieldValues);
      }
      else if ("rating" == sFieldType)
      {
        scAjaxSetFieldRating(sFieldName, oFieldValues, thisRow);
      }
      else if ("ratingstar" == sFieldType)
      {
        scAjaxSetFieldRatingStar(sFieldName, oFieldValues, thisRow);
      }
      else if ("ratingsmile" == sFieldType)
      {
        scAjaxSetFieldRatingSmile(sFieldName, oFieldValues, thisRow);
      }
      else if ("ratingthumb" == sFieldType)
      {
        scAjaxSetFieldRatingThumb(sFieldName, oFieldValues, thisRow);
      }
      scAjaxUpdateHeaderFooter(sFieldName, oFieldValues);
    }
  } // scAjaxSetFields

  function scAjaxUpdateHeaderFooter(sFieldName, oFieldValues)
  {
    if (self.updateHeaderFooter)
    {
      if (null == oFieldValues)
      {
        sNewValue = '';
      }
      else if (oFieldValues[0]["label"])
      {
        sNewValue = oFieldValues[0]["label"];
      }
      else
      {
        sNewValue = oFieldValues[0]["value"];
      }
      updateHeaderFooter(sFieldName, scAjaxSpecCharParser(sNewValue));
    }
  } // scAjaxUpdateHeaderFooter

  function scAjaxSetFieldText(sFieldName, oFieldValues, sLookupCons, thisRow, sEventField)
  {
    if (document.F1.elements[sFieldName])
    {
      var jqField = $("#id_sc_field_" + sFieldName),
          Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
      if (jqField.length)
      {
        jqField.val(Temp_text);
        if (sEventField != sFieldName && sEventField != "__SC_NO_FIELD" && sEventField != "")
        {
          //jqField.trigger("change");
        }
      }
      else
      {
        eval("document.F1." + sFieldName + ".value = Temp_text");
      }
      if (scEventControl_data[sFieldName]) {
        scEventControl_data[sFieldName]["calculated"] = Temp_text;
      }
    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
	scAjaxSetSliderValue(sFieldName, thisRow);
  } // scAjaxSetFieldText

  function scAjaxSetSliderValue(fieldName, thisRow)
  {
	  var sliderObject = $("#sc-ui-slide-" + fieldName);
	  if (!sliderObject.length) {
		  return;
	  }
	  scJQSlideValue(fieldName, thisRow);
  } // scAjaxSetSliderValue

  function scAjaxSetFieldColorPalette(sFieldName, oFieldValues)
  {
    if (document.F1.elements[sFieldName])
    {
        var Temp_text = scAjaxReturnBreakLine(scAjaxSpecCharParser(scAjaxProtectBreakLine(oFieldValues[0]['value'])));
        eval ("document.F1." + sFieldName + ".value = Temp_text");
    }
    if (oFieldValues[0]['label'])
    {
      scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues);
    }
    else
    {
      oFieldValues[0]['value'] = scAjaxBreakLine(oFieldValues[0]['value']);
	  setaCorPaleta(sFieldName, oFieldValues[0]['value']);
      scAjaxSetReadonlyValue(sFieldName, oFieldValues[0]['value']);
    }
  } // scAjaxSetFieldColorPalette

  function scAjaxSetFieldSelect(sFieldName, oFieldValues, oFieldOptions, bSelectDD, bSelect2AC, iRow, sEventField, thisRow)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if (bSelectDD)
    {
        $("#id_sc_field_" + sFieldName).dropdownchecklist("destroy");
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      scAjaxSetFieldText(sFieldNameHtml, oFieldValues, "", "", sEventField);
      return;
    }

    if (null != oFieldOptions)
    {
      $("#id_sc_field_" + sFieldName).children().remove()
      if ("<select" != oFieldOptions.substr(0, 7))
      {
        var $oField = $("#id_sc_field_" + sFieldName);
        if (0 < $oField.length)
        {
          $oField.html(oFieldOptions);
        }
        else
        {
          document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
        }
      }
      else
      {
        document.getElementById("idAjaxSelect_" + sFieldName).innerHTML = oFieldOptions;
      }
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    var oFormField = $("#id_sc_field_" + sFieldName);
    for (iFieldSelect = 0; iFieldSelect < oFormField[0].length; iFieldSelect++)
    {
      if (scAjaxInArray(oFormField[0].options[iFieldSelect].value, aValues))
      {
        oFormField[0].options[iFieldSelect].selected = true;
      }
      else
      {
        oFormField[0].options[iFieldSelect].selected = false;
      }
    }
	scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
    if (bSelectDD)
    {
        scJQDDCheckBoxAdd(thisRow, true);
    }
	if (bSelect2AC)
	{
		var newOption = new Option(oFieldValues[0]["label"], oFieldValues[0]["value"], true, true);
		$("#id_ac_" + sFieldName).append(newOption);
		$("#id_sc_field_" + sFieldName).val(oFieldValues[0]["value"]);
	}
	else if (oFormField.hasClass("select2-hidden-accessible"))
	{
        $("#id_sc_field_" + sFieldName).select2("destroy");
		var select2Field = sFieldName;
		if ("" != thisRow) {
			select2Field = select2Field.substr(0, select2Field.length - thisRow.toString().length);
		}
        scJQSelect2Add(thisRow, select2Field);
	}
  } // scAjaxSetFieldSelect

  function scAjaxSetFieldDuplosel(sFieldName, oFieldValues, oFieldOptions)
  {
    var sFieldNameOrig = sFieldName + "_orig";
    var sFieldNameDest = sFieldName + "_dest";
    var oFormFieldOrig = document.F1.elements[sFieldNameOrig];
    var oFormFieldDest = document.F1.elements[sFieldNameDest];

    if (null != oFieldOptions)
    {
      scAjaxClearSelect(sFieldNameOrig);
      for (iFieldSelect = 0; iFieldSelect < oFieldOptions.length; iFieldSelect++)
      {
        oFormFieldOrig.options[iFieldSelect] = new Option(scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["label"]), scAjaxSpecCharParser(oFieldOptions[iFieldSelect]["value"]));
      }
    }
    while (oFormFieldDest.length > 0)
    {
      oFormFieldDest.options[0] = null;
    }
    var aValues = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        sNewOptionLabel = oFieldValues[iFieldSelect]["label"] ? scAjaxSpecCharParser(oFieldValues[iFieldSelect]["label"]) : scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        sNewOptionValue = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
        if (sNewOptionValue.substr(0, 8) == "@NMorder")
        {
           sNewOptionValue                      = sNewOptionValue.substr(8);
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
           sNewOptionValue                      = sNewOptionValue.substr(1);
           aValues[iFieldSelect]                = sNewOptionValue;
        }
        else
        {
           aValues[iFieldSelect]                = sNewOptionValue;
           oFormFieldDest.options[iFieldSelect] = new Option(scAjaxSpecCharParser(sNewOptionLabel), sNewOptionValue);
        }
      }
    }
    for (iFieldSelect = 0; iFieldSelect < oFormFieldOrig.length; iFieldSelect++)
    {
      oFormFieldOrig.options[iFieldSelect].selected = false;
      if (scAjaxInArray(oFormFieldOrig.options[iFieldSelect].value, aValues))
      {
        oFormFieldOrig.options[iFieldSelect].disabled    = true;
        oFormFieldOrig.options[iFieldSelect].style.color = "#A0A0A0";
      }
      else
      {
        oFormFieldOrig.options[iFieldSelect].disabled = false;
      }
    }
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldDuplosel

  function scAjaxSetFieldCheckbox(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sInnerHtml, sOptComp, sOptClass, sOptMulti, bSwitch, sEventField)
  {
	if (null == bSwitch)
	{
	  bSwitch = false;
	}
    if (document.getElementById("idAjaxCheckbox_" + sFieldName) && null != sInnerHtml)
    {
      document.getElementById("idAjaxCheckbox_" + sFieldName).innerHTML = sInnerHtml;
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearCheckbox(sFieldName);
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues, "", "", sEventField);
      return;
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearCheckbox(sFieldName); */
      scAjaxRecreateOptions("Checkbox", "checkbox", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti, bSwitch);
    }
    else
    {
      scAjaxSetCheckboxOptions(sFieldName, oFieldValues);
    }
	scAjaxSetSwitchOptions(sFieldName, "checkbox");
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldCheckbox

  function scAjaxSetFieldRadio(sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, bSwitch, sEventField)
  {
	if (null == bSwitch)
	{
	  bSwitch = false;
	}
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      scAjaxSetFieldText(sFieldName, oFieldValues, "", "", sEventField);
      return;
    }
    if (null != oFieldOptions)
    {
        scAjaxClearRadio(sFieldName);
    }
    if (null != oFieldOptions && "" != oFieldOptions)
    {
/*      scAjaxClearRadio(sFieldName); */
      scAjaxRecreateOptions("Radio", "radio", sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, "", "", bSwitch);
    }
    else
    {
      scAjaxSetRadioOptions(sFieldName, oFieldValues);
    }
	scAjaxSetSwitchOptions(sFieldName, "radio");
    scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, "<br />");
  } // scAjaxSetFieldRadio

  function scAjaxSetSwitchOptions(fieldName, fieldType)
  {
	var fieldOptions = $(".sc-ui-" + fieldType + "-" + fieldName + ".lc-switch");
	if (!fieldOptions.length) {
		return;
	}
	for (var i = 0; i < fieldOptions.length; i++) {
		if ($(fieldOptions[i]).prop("checked")) {
			$(fieldOptions[i]).lcs_on();
		}
		else {
			$(fieldOptions[i]).lcs_off();
		}
	}
  }

  function scAjaxSetFieldLabel(sFieldName, oFieldValues, oFieldOptions, sLookupCons)
  {
    sFieldValue = oFieldValues[0]["value"];
    if ("undefined" == typeof oFieldValues[0]["label"]) {
      sFieldLabel = oFieldValues[0]["value"];
    } else {
      sFieldLabel = oFieldValues[0]["label"];
    }
    sFieldLabel = scAjaxBreakLine(sFieldLabel);
    if (null != oFieldOptions)
    {
      for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
      {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        if (sFieldValue == sOptText)
        {
          sFieldLabel = sOptValue;
        }
      }
    }
    if (document.getElementById("id_ajax_label_" + sFieldName))
    {
      document.getElementById("id_ajax_label_" + sFieldName).innerHTML = scAjaxSpecCharParser(sFieldLabel);
    }
    if (document.F1.elements[sFieldName])
    {
//      document.F1.elements[sFieldName].value = scAjaxSpecCharParser(sFieldValue);
        Temp_text = scAjaxProtectBreakLine(sFieldValue);
        Temp_text = scAjaxSpecCharParser(Temp_text);
        document.F1.elements[sFieldName].value = scAjaxReturnBreakLine(Temp_text);

    }
    if (document.getElementById("id_lookup_" + sFieldName))
    {
      document.getElementById("id_lookup_" + sFieldName).innerHTML = sLookupCons;
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(sFieldLabel));
  } // scAjaxSetFieldLabel

  function scAjaxSetFieldImage(sFieldName, oFieldValues, sImgFile, sImgOrig, sImgLink, sKeepImg, sHideName)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    if ("N" == sKeepImg && document.getElementById("id_ajax_img_"  + sFieldName))
    {
      document.getElementById("id_ajax_img_"  + sFieldName).src           = scAjaxSpecCharParser(sImgFile);
      document.getElementById("id_ajax_img_"  + sFieldName).style.display = ("" == sImgFile) ? "none" : "";
    }
    if (document.getElementById("id_ajax_link_" + sFieldName) && null != sImgLink)
    {
      document.getElementById("id_ajax_link_" + sFieldName).innerHTML = oFieldValues[0]["value"];
      document.getElementById("id_ajax_link_" + sFieldName).href      = scAjaxSpecCharParser(sImgLink);
    }
    if (document.getElementById("chk_ajax_img_" + sFieldName))
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"]) ? "none" : "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("N" == sKeepImg && document.getElementById("txt_ajax_img_" + sFieldName))
    {
      document.getElementById("txt_ajax_img_" + sFieldName).innerHTML     = oFieldValues[0]["value"];
      document.getElementById("txt_ajax_img_" + sFieldName).style.display = ("" == oFieldValues[0]["value"] || "S" == sHideName) ? "none" : "";
    }
    if ("" != sImgOrig)
    {
      eval("if (var_ajax_img_" + sFieldName + ") var_ajax_img_" + sFieldName + " = '" + sImgOrig + "';");
      if (document.F1.elements["temp_out1_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgFile;
        document.F1.elements["temp_out1_" + sFieldName].value = sImgOrig;
      }
      else if (document.F1.elements["temp_out_" + sFieldName])
      {
        document.F1.elements["temp_out_" + sFieldName].value = sImgOrig;
      }
    }
    if ("" != oFieldValues[0]["value"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = oFieldValues[0]["value"];
    }
    else if (oResp && oResp["ajaxRequest"] && "navigate_form" == oResp["ajaxRequest"])
    {
      if (document.F1.elements[sFieldName + "_salva"]) document.F1.elements[sFieldName + "_salva"].value = "";
    }
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldImage

  function scAjaxSetFieldDocument(sFieldName, oFieldValues, sDocLink, sDocIcon, sClearUpload, sDocReadonly)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    document.getElementById("id_ajax_doc_"  + sFieldName).innerHTML = scAjaxSpecCharParser(sDocLink);
    if (document.getElementById("id_ajax_doc_icon_"  + sFieldName))
    {
      document.getElementById("id_ajax_doc_icon_"  + sFieldName).src = scAjaxSpecCharParser(sDocIcon);
    }
    if ("" == oFieldValues[0]["value"])
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "none";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "none";
    }
    else
    {
      document.getElementById("chk_ajax_img_" + sFieldName).style.display = "";
      document.getElementById("id_ajax_doc_" + sFieldName).style.display = "";
    }
    if ("" == oFieldValues[0]["value"] && document.F1.elements[sFieldName + "_limpa"])
    {
      document.F1.elements[sFieldName + "_limpa"].checked = false;
    }
    if ("S" == sClearUpload && document.F1.elements[sFieldName + "_ul_name"])
    {
      document.F1.elements[sFieldName + "_ul_name"].value = "";
    }
    if ("" != sDocLink && sDocReadonly == "S")
    {
      scAjaxSetReadonlyValue(sFieldName, sDocLink);
    }
    else
    {
      scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
    }
  } // scAjaxSetFieldDocument

  function scAjaxSetFieldInnerHtml(sFieldName, oFieldValues)
  {
    if (document.getElementById(sFieldName))
    {
      document.getElementById(sFieldName).innerHTML = scAjaxSpecCharParser(oFieldValues[0]["value"]);
    }
  } // scAjaxSetFieldInnerHtml

  function scAjaxSetFieldMultiUpload(sFieldName, sMULHtml)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return;
    }
    $("#id_sc_loaded_" + sFieldName).html(scAjaxSpecCharParser(sMULHtml));
  } // scAjaxSetFieldMultiUpload

  function scAjaxExecFieldEditorHtml(strOption, bolUI, oField)
  {
	  	if(tinymce.majorVersion > 3)
		{
			if(strOption == 'mceAddControl')
			{
				tinymce.execCommand('mceAddEditor', bolUI, oField);
			}else
			if(strOption == 'mceRemoveControl')
			{
				tinymce.execCommand('mceRemoveEditor', bolUI, oField);
			}
		}
		else
		{
			tinyMCE.execCommand(strOption, bolUI, oField);
		}
  }

  function scAjaxSetFieldEditorHtml(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    oFormField.setContent(scAjaxSpecCharParser(oFieldValues[0]["value"]));
    scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldImageHtml(sFieldName, oFieldValues, sImgHtml)
  {
    if (document.getElementById("id_imghtml_" + sFieldName))
    {
      document.getElementById("id_imghtml_" + sFieldName).innerHTML = scAjaxSpecCharParser(sImgHtml);
    }
  } // scAjaxSetFieldEditorHtml

  function scAjaxSetFieldRecurInfo(sFieldName, oFieldValues)
  {
	  var jsonData = "" != oFieldValues[0]["value"]
	               ? JSON.parse(oFieldValues[0]["value"])
				   : { repeat: "1", endon: "E", endafter: "", endin: ""};
	  $("#id_rinf_repeat_" + sFieldName).val(jsonData.repeat);
	  $(".cl_rinf_endon_" + sFieldName).filter(function(index) {return $(this).val() == jsonData.endon}).prop("checked", true),
	  $("#id_rinf_endafter_" + sFieldName).val(jsonData.endafter);
	  $("#id_rinf_endin_" + sFieldName).val(jsonData.endin);
	  scAjaxSetReadonlyValue(sFieldName, scAjaxSpecCharParser(oFieldValues[0]["value"]));
  } // scAjaxSetFieldRecurInfo

  function scAjaxSetFieldSignature(sFieldName, oFieldValues)
  {
	var fieldValue = scAjaxSpecCharParser(oFieldValues[0]['value']);
	if ("data:image/png;base64," != fieldValue.substr(0, 22) && "data:image/jsignature;base30," != fieldValue.substr(0, 29))
	{
		scJQSignatureClear(sFieldName);
		return;
	}
	$("#id_sc_field_" + sFieldName).val(fieldValue);
	scJQSignatureRedraw(sFieldName);
         scFormHasChanged = false; // mantis 0020638
  } // scAjaxSetFieldSignature

  function scAjaxSetFieldRating(sFieldName, oFieldValues, thisRow)
  {
	$("#id_sc_field_" + sFieldName).val(oFieldValues[0]['value']);
	if ("" != thisRow) {
      sFieldName = sFieldName.substr(0, sFieldName.lastIndexOf("_") + 1);
	}
	scJQRatingRedraw(sFieldName, thisRow);
  } // scAjaxSetFieldRating

  function scAjaxSetFieldRatingStar(sFieldName, oFieldValues, thisRow)
  {
	$("#id_sc_field_" + sFieldName).val(oFieldValues[0]['value']);
	if ("" != thisRow) {
      sFieldName = sFieldName.substr(0, sFieldName.lastIndexOf("_") + 1);
	}
	scJQRatingStarRedraw(sFieldName, thisRow);
  } // scAjaxSetFieldRating

  function scAjaxSetFieldRatingSmile(sFieldName, oFieldValues, thisRow)
  {
	$("#id_sc_field_" + sFieldName).val(oFieldValues[0]['value']);
	if ("" != thisRow) {
      sFieldName = sFieldName.substr(0, sFieldName.lastIndexOf("_") + 1);
	}
	scJQRatingSmileRedraw(sFieldName, thisRow);
  } // scAjaxSetFieldRating

  function scAjaxSetFieldRatingThumb(sFieldName, oFieldValues, thisRow)
  {
	$("#id_sc_field_" + sFieldName).val(oFieldValues[0]['value']);
	if ("" != thisRow) {
      sFieldName = sFieldName.substr(0, sFieldName.lastIndexOf("_") + 1);
	}
	scJQRatingThumbRedraw(sFieldName, thisRow);
  } // scAjaxSetFieldRating

  function scAjaxSetCheckboxOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return;
    }
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheckbox = 0; iFieldCheckbox < oFormField.length; iFieldCheckbox++)
        {
          if (scAjaxInArray(oFormField[iFieldCheckbox].value, aValues))
          {
            oFormField[iFieldCheckbox].checked = true;
          }
          else
          {
            oFormField[iFieldCheckbox].checked = false;
          }
        }
      }
      else
      {
        if (scAjaxInArray(oFormField.value, aValues))
        {
          oFormField.checked = true;
        }
        else
        {
          oFormField.checked = false;
        }
      }
    }
    else if (document.F1.elements[sFieldName + "[0]"])
    {
      for (iFieldCheckbox = 0; iFieldCheckbox < document.F1.elements.length; iFieldCheckbox++)
      {
        oFormElement = document.F1.elements[iFieldCheckbox];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && scAjaxInArray(oFormElement.value, aValues))
        {
          oFormElement.checked = true;
        }
        else if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1))
        {
          oFormElement.checked = false;
        }
      }
    }
    else
    {
      oFormElement = document.F1.elements[sFieldName];
      if (scAjaxInArray(oFormElement.value, aValues))
      {
        oFormElement.checked = true;
      }
      else
      {
        oFormElement.checked = false;
      }
    }
  } // scAjaxSetCheckboxOptions

  function scAjaxSetRadioOptions(sFieldName, oFieldValues)
  {
    if (!document.F1.elements[sFieldName])
    {
      return;
    }
    var oFormField = document.F1.elements[sFieldName];
    var aValues    = new Array();
    if (null != oFieldValues)
    {
      for (iFieldSelect = 0; iFieldSelect < oFieldValues.length; iFieldSelect++)
      {
        aValues[iFieldSelect] = scAjaxSpecCharParser(oFieldValues[iFieldSelect]["value"]);
      }
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      oFormField[iFieldRadio].checked = false;
    }
    for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
    {
      if (scAjaxInArray(oFormField[iFieldRadio].value, aValues))
      {
        oFormField[iFieldRadio].checked = true;
      }
    }
  } // scAjaxSetRadioOptions

  function scAjaxSetReadonlyValue(sFieldName, sFieldValue)
  {
    if (document.getElementById("id_read_on_" + sFieldName))
    {
      document.getElementById("id_read_on_" + sFieldName).innerHTML = sFieldValue;
    }
  } // scAjaxSetReadonlyValue

  function scAjaxSetReadonlyArrayValue(sFieldName, oFieldValues, sDelim)
  {
    if (null == oFieldValues)
    {
      return;
    }
    if (null == sDelim)
    {
      sDelim = " ";
    }
    sReadLabel = "";
    for (iReadArray = 0; iReadArray < oFieldValues.length; iReadArray++)
    {
      if (oFieldValues[iReadArray]["label"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["label"];
      }
      else if (oFieldValues[iReadArray]["value"])
      {
        if ("" != sReadLabel)
        {
          sReadLabel += sDelim;
        }
        sReadLabel += oFieldValues[iReadArray]["value"];
      }
    }
    scAjaxSetReadonlyValue(sFieldName, sReadLabel);
  } // scAjaxSetReadonlyArrayValue

  function scAjaxGetFieldValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        if (1 == oFieldValues.length)
        {
          sValue = scAjaxSpecCharParser(oFieldValues[0]["value"]);
        }
        else
        {
          sValue = new Array();
          for (jFieldValue = 0; jFieldValue < oFieldValues.length; jFieldValue++)
          {
            sValue[jFieldValue] = scAjaxSpecCharParser(oFieldValues[jFieldValue]["value"]);
          }
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldValue

  function scAjaxGetKeyValue(sFieldGet)
  {
    sValue = "";
    if (!oResp["fldList"])
    {
      return sValue;
    }
    for (iKeyValue = 0; iKeyValue < oResp["fldList"].length; iKeyValue++)
    {
      var sFieldName = oResp["fldList"][iKeyValue]["fldName"];
      if (sFieldGet == sFieldName)
      {
        if (oResp["fldList"][iKeyValue]["keyVal"])
        {
          return scAjaxSpecCharParser(oResp["fldList"][iKeyValue]["keyVal"]);
        }
        else
        {
          return scAjaxGetFieldValue(sFieldGet);
        }
      }
    }
    return sValue;
  } // scAjaxGetKeyValue

  function scAjaxGetLineNumber()
  {
    sLineNumber = "";
    if (oResp["errList"])
    {
      for (iLineNumber = 0; iLineNumber < oResp["errList"].length; iLineNumber++)
      {
        if (oResp["errList"][iLineNumber]["numLinha"])
        {
          sLineNumber = oResp["errList"][iLineNumber]["numLinha"];
        }
      }
      return sLineNumber;
    }
    if (oResp["fldList"])
    {
      return oResp["fldList"][0]["numLinha"];
    }
    if (oResp["msgDisplay"])
    {
      return oResp["msgDisplay"]["numLinha"];
    }
    return sLineNumber;
  } // scAjaxGetLineNumber

  function scAjaxFieldExists(sFieldGet)
  {
    bExists = false;
    if (!oResp["fldList"])
    {
      return bExists;
    }
    for (iFieldValue = 0; iFieldValue < oResp["fldList"].length; iFieldValue++)
    {
      var sFieldName  = oResp["fldList"][iFieldValue]["fldName"];
      if (oResp["fldList"][iFieldValue]["valList"])
      {
        var oFieldValues = oResp["fldList"][iFieldValue]["valList"];
        if (0 == oFieldValues.length)
        {
          oFieldValues = null;
        }
      }
      else
      {
        var oFieldValues = null;
      }
      if (sFieldGet == sFieldName && null != oFieldValues)
      {
        bExists = true;
      }
    }
    return bExists;
  } // scAjaxFieldExists

  function scAjaxGetFieldText(sFieldName)
  {
    $oHidden = $("input[name='" + sFieldName + "']");
    if (!$oHidden.length)
    {
      $oHidden = $("input[name='" + sFieldName + "_']");
    }
    if ($oHidden.length)
    {
      for (var i = 0; i < $oHidden.length; i++)
      {
        if ("hidden" == $oHidden[i].type && $oHidden[i].form && $oHidden[i].form.name && "F1" == $oHidden[i].form.name)
        {
          return scAjaxSpecCharProtect($oHidden[i].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    $oField = $("#id_sc_field_" + sFieldName);
    if(!$oField.length)
    {
      $oField = $("#id_sc_field_" + sFieldName + "_");
    }
    if ($oField.length && "select" != $oField[0].type.substr(0, 6))
    {
      return scAjaxSpecCharProtect($oField.val());//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else if (document.F1.elements[sFieldName + '_'])
    {
      return scAjaxSpecCharProtect(document.F1.elements[sFieldName + '_'].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return '';
    }
  } // scAjaxGetFieldText

  function scAjaxGetFieldHidden(sFieldName)
  {
    for( i= 0; i < document.F1.elements.length; i++)
    {
       if (document.F1.elements[i].name == sFieldName)
       {
          return scAjaxSpecCharProtect(document.F1.elements[i].value);//.replace(/[+]/g, "__NM_PLUS__");
       }
    }
//    return document.F1.elements[sFieldName].value.replace(/[+]/g, "__NM_PLUS__");
  } // scAjaxGetFieldHidden

  function scAjaxGetFieldSelect(sFieldName)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"])
    {
      return "";
    }
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var iSelected  = oFormField.selectedIndex;
    if (-1 < iSelected)
    {
      return scAjaxSpecCharProtect(oFormField.options[iSelected].value);//.replace(/[+]/g, "__NM_PLUS__");
    }
    else
    {
      return "";
    }
  } // scAjaxGetFieldSelect

  function scAjaxGetFieldSelectMult(sFieldName, sFieldDelim)
  {
    sFieldNameHtml = sFieldName;
    if (!document.F1.elements[sFieldName] && document.F1.elements[sFieldName + "[]"])
    {
      sFieldNameHtml += "[]";
    }
    if ("hidden" == document.F1.elements[sFieldNameHtml].type)
    {
      return scAjaxGetFieldHidden(sFieldNameHtml);
    }
    var oFormField = document.F1.elements[sFieldNameHtml];
    var sFieldVals = "";
    for (iFieldSelect = 0; iFieldSelect < oFormField.length; iFieldSelect++)
    {
      if (oFormField[iFieldSelect].selected)
      {
        if ("" != sFieldVals)
        {
          sFieldVals += sFieldDelim;
        }
        sFieldVals += scAjaxSpecCharProtect(oFormField[iFieldSelect].value);//.replace(/[+]/g, "__NM_PLUS__");
      }
    }
    return sFieldVals;
  } // scAjaxGetFieldSelectMult

  function scAjaxGetFieldCheckbox(sFieldName, sDelim)
  {
    var aValues = new Array();
    var sValue  = "";
    if (!document.F1.elements[sFieldName] && !document.F1.elements[sFieldName + "[]"] && !document.F1.elements[sFieldName + "[0]"])
    {
      return sValue;
    }
    if (document.F1.elements[sFieldName + "[]"] && "hidden" == document.F1.elements[sFieldName + "[]"].type)
    {
      return scAjaxGetFieldHidden(sFieldName + "[]");
    }
    if (document.F1.elements[sFieldName] && "hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    if (document.F1.elements[sFieldName + "[]"])
    {
      var oFormField = document.F1.elements[sFieldName + "[]"];
      if (oFormField.length)
      {
        for (iFieldCheck = 0; iFieldCheck < oFormField.length; iFieldCheck++)
        {
          if (oFormField[iFieldCheck].checked)
          {
            aValues[aValues.length] = oFormField[iFieldCheck].value;
          }
        }
      }
      else
      {
        if (oFormField.checked)
        {
          aValues[aValues.length] = oFormField.value;
        }
      }
    }
    else
    {
      for (iFieldCheck = 0; iFieldCheck < document.F1.elements.length; iFieldCheck++)
      {
        oFormElement = document.F1.elements[iFieldCheck];
        if (sFieldName + "[" == oFormElement.name.substr(0, sFieldName.length + 1) && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
        else if (sFieldName == oFormElement.name && oFormElement.checked)
        {
          aValues[aValues.length] = oFormElement.value;
        }
      }
    }
    for (iFieldCheck = 0; iFieldCheck < aValues.length; iFieldCheck++)
    {
      sValue += scAjaxSpecCharProtect(aValues[iFieldCheck]);//.replace(/[+]/g, "__NM_PLUS__");
      if (iFieldCheck + 1 != aValues.length)
      {
        sValue += sDelim;
      }
    }
    return sValue;
  } // scAjaxGetFieldCheckbox

  function scAjaxGetFieldRadio(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }
    var oFormField = document.F1.elements[sFieldName];
    if (!oFormField.length)
    {
        var sc_cmp_radio = eval("document.F1." + sFieldName);
        if (sc_cmp_radio.checked)
        {
           sValue = scAjaxSpecCharProtect(sc_cmp_radio.value);//.replace(/[+]/g, "__NM_PLUS__");
        }
    }
    else
    {
      for (iFieldRadio = 0; iFieldRadio < oFormField.length; iFieldRadio++)
      {
        if (oFormField[iFieldRadio].checked)
        {
          sValue = scAjaxSpecCharProtect(oFormField[iFieldRadio].value);//.replace(/[+]/g, "__NM_PLUS__");
        }
      }
    }
    return sValue;
  } // scAjaxGetFieldRadio

  function scAjaxGetFieldEditorHtml(sFieldName)
  {
    if ("hidden" == document.F1.elements[sFieldName].type)
    {
      return scAjaxGetFieldHidden(sFieldName);
    }
    var sValue = "";
    if (!document.F1.elements[sFieldName])
    {
      return sValue;
    }

	if(tinymce.majorVersion > 3)
	{
		var oFormField = tinyMCE.get(sFieldName);
	}
	else
	{
		var oFormField = tinyMCE.getInstanceById(sFieldName);
	}
    return scAjaxSpecCharParser(scAjaxSpecCharProtect(oFormField.getContent()));//.replace(/[+]/g, "__NM_PLUS__"));
  } // scAjaxGetFieldEditorHtml

  function scAjaxGetFieldSignature(sFieldName)
  {
    var signatureData = $("#sc-id-sign-" + sFieldName).jSignature("getData", "base30");
	$("#id_sc_field_" + sFieldName).val("data:" + signatureData[0] + "," + signatureData[1]);
	return $("#id_sc_field_" + sFieldName).val();
  } // scAjaxGetFieldEditorHtml

  function scAjaxGetFieldRecurInfo(sFieldName)
  {
	  var repeatInList = $(".cl_rinf_repeatin_" + sFieldName).filter(":checked"), repeatInValues = [], jsonData, i;
	  for (i = 0; i < repeatInList.length; i++) {
		  repeatInValues.push($(repeatInList[i]).val());
	  }
	  jsonData = {
		  repeat: $("#id_rinf_repeat_" + sFieldName).val(),
		  repeatin: repeatInValues.join(";"),
		  endon: $(".cl_rinf_endon_" + sFieldName).filter(":checked").val(),
		  endafter: $("#id_rinf_endafter_" + sFieldName).val(),
		  endin: $("#id_rinf_endin_" + sFieldName).val()
	  };
	  return JSON.stringify(jsonData);
  } // scAjaxGetFieldRecurInfo

  function scAjaxDoNothing(e)
  {
  } // scAjaxDoNothing

  function scAjaxInArray(mVal, aList)
  {
    for (iInArray = 0; iInArray < aList.length; iInArray++)
    {
      if (aList[iInArray] == mVal)
      {
        return true;
      }
    }
    return false;
  } // scAjaxInArray

  function scAjaxSpecCharParser(sParseString)
  {
    if (null == sParseString) {
      return "";
    }
    var ta = document.createElement("textarea");
    ta.innerHTML = sParseString.replace(/</g, "&lt;").replace(/>/g, "&gt;");
    return ta.value;
  } // scAjaxSpecCharParser

  function scAjaxSpecCharProtect(sOriginal)
  {
        var sProtected;
        sProtected = sOriginal.replace(/[+]/g, "__NM_PLUS__");
        sProtected = sProtected.replace(/[%]/g, "__NM_PERC__");
        return sProtected;
  } // scAjaxSpecCharProtect

  function scAjaxRecreateOptions(sFieldType, sHtmlType, sFieldName, oFieldValues, oFieldOptions, iColNum, sHtmComp, sOptComp, sOptClass, sOptMulti, bSwitch)
  {
    var sSuffix  = ("checkbox" == sHtmlType) ? "[]" : "";
    var sDivName = "idAjax" + sFieldType + "_" + sFieldName;
    var sDivText = "";
    var iCntLine = 0;
    var aValues  = new Array();
    var sClass;
    var markChangedClass;
    if (null != oFieldValues)
    {
      for (iRecreate = 0; iRecreate < oFieldValues.length; iRecreate++)
      {
        aValues[iRecreate] = scAjaxSpecCharParser(oFieldValues[iRecreate]["value"]);
      }
    }
    sDivText += "<table border=0>";
    if ("checkbox" == sHtmlType)
    {
        markChangedClass = "sc-ui-checkbox-" + sFieldName;
    }
    if ("radio" == sHtmlType)
    {
        markChangedClass = "sc-ui-radio-" + sFieldName;
    }
    for (iRecreate = 0; iRecreate < oFieldOptions.length; iRecreate++)
    {
        sOptText  = scAjaxSpecCharParser(oFieldOptions[iRecreate]["label"]);
        sOptValue = scAjaxSpecCharParser(oFieldOptions[iRecreate]["value"]);
        if (0 == iCntLine)
        {
            sDivText += "<tr>";
        }
        iCntLine++;
        if ("" != sOptClass)
        {
            sClass = " class=\"" + sOptClass;
            if ("" != sOptMulti)
            {
                sClass += " " + sOptClass + sOptMulti;
            }
            if ("" != markChangedClass)
            {
                sClass += " " + markChangedClass;
            }
            sClass += "\"";
        }
        else
        {
            sClass = " class=\"";
            if ("" != markChangedClass)
            {
                sClass += " " + markChangedClass;
            }
            sClass += "\"";
        }
        if (sHtmComp == null)
        {
            sHtmComp = "";
        }
        sChecked  = (scAjaxInArray(sOptValue, aValues)) ? " checked" : "";
        sDivText += "<td class=\"scFormDataFontOdd\">";
		if (bSwitch)
		{
			sDivText += "<div class=\"sc ";
			if ("Checkbox" == sFieldType)
			{
				sDivText += "switch";
			}
			else
			{
				sDivText += "radio";
			}
			sDivText += "\">";
		}
        sDivText += "<input id=\"id-opt-" + sFieldName + "-"  + iRecreate + "\" type=\"" + sHtmlType + "\" name=\"" + sFieldName + sSuffix + "\" value=\"" + sOptValue + "\"" + sChecked + " " + sHtmComp + " " + sOptComp + sClass + ">";
		if (bSwitch)
		{
			sDivText += "<span></span>";
		}
        sDivText += "<label for=\"id-opt-" + sFieldName + "-"  + iRecreate + "\">" + sOptText + "</label>";
		if (bSwitch)
		{
			sDivText += "</div>";
		}
        sDivText += "</td>";
        if (iColNum == iCntLine)
        {
            sDivText += "</tr>";
            iCntLine  = 0;
        }
    }
    sDivText += "</table>";
    document.getElementById(sDivName).innerHTML = sDivText;
    if ("" != markChangedClass)
    {
      $("." + markChangedClass).on("click", function() { scMarkFormAsChanged(); });
    }
  } // scAjaxRecreateOptions

  function scAjaxProcOn(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.blockUI && !bForce)
      {
        $.blockUI({
          message: $("#id_div_process_block"),
          overlayCSS: { backgroundColor: sc_ajaxBg },
          css: {
            borderColor: sc_ajaxBordC,
            borderStyle: sc_ajaxBordS,
            borderWidth: sc_ajaxBordW
          }
        });
      }
      else
      {
        document.getElementById("id_div_process").style.display = "";
        document.getElementById("id_fatal_error").style.display = "none";
        if (null != scCenterElement)
        {
          scCenterElement(document.getElementById("id_div_process"));
        }
      }
    }
  } // scAjaxProcOn

  function scAjaxProcOff(bForce)
  {
    if (null == bForce)
    {
      bForce = false;
    }
    if (document.getElementById("id_div_process"))
    {
      if ($ && $.unblockUI && !bForce)
      {
        $.unblockUI();
      }
      else
      {
        document.getElementById("id_div_process").style.display = "none";
      }
    }
  } // scAjaxProcOff

  function scAjaxSetMaster()
  {
    if (!oResp["masterValue"])
    {
      return;
    }
	if (scMasterDetailParentIframe && "" != scMasterDetailParentIframe)
	{
      var dbParentFrame = $(parent.document).find("[name='" + scMasterDetailParentIframe + "']");
	  if (!dbParentFrame || !dbParentFrame[0] || !dbParentFrame[0].contentWindow.scAjaxDetailValue)
	  {
		return;
	  }
      for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
      {
        dbParentFrame[0].contentWindow.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
      }
	}
    if (!parent || !parent.scAjaxDetailValue)
    {
      return;
    }
    for (iMaster = 0; iMaster < oResp["masterValue"].length; iMaster++)
    {
      parent.scAjaxDetailValue(oResp["masterValue"][iMaster]["index"], oResp["masterValue"][iMaster]["value"]);
    }
  } // scAjaxSetMaster

  function scAjaxSetFocus()
  {
    if (!oResp["setFocus"] && '' == scFocusFirstErrorName)
    {
      return;
    }
    sFieldName = oResp["setFocus"];
    if (document.F1.elements[sFieldName])
    {
        scFocusField(sFieldName);
    }
    scAjaxFocusError();
  } // scAjaxSetFocus

  function scAjaxFocusError()
  {
    if ('' != scFocusFirstErrorName)
    {
      scFocusField(scFocusFirstErrorName);
      scFocusFirstErrorName = '';
    }
  } // scAjaxFocusError

  function scAjaxSetNavStatus(sBarPos)
  {
    if (!oResp["navStatus"])
    {
      return;
    }
    sNavRet = "S";
    sNavAva = "S";
    if (oResp["navStatus"]["ret"])
    {
      sNavRet = oResp["navStatus"]["ret"];
    }
    if (oResp["navStatus"]["ava"])
    {
      sNavAva = oResp["navStatus"]["ava"];
    }
    if ("S" != sNavRet && "N" != sNavRet)
    {
      sNavRet = "S";
    }
    if ("S" != sNavAva && "N" != sNavAva)
    {
      sNavAva = "S";
    }
    Nav_permite_ret = sNavRet;
    Nav_permite_ava = sNavAva;
    nav_atualiza(Nav_permite_ret, Nav_permite_ava, sBarPos);
  } // scAjaxSetNavStatus

  function scAjaxSetSummary()
  {
    if (!oResp["navSummary"])
    {
      return;
    }
    sreg_ini = oResp["navSummary"].reg_ini;
    sreg_qtd = oResp["navSummary"].reg_qtd;
    sreg_tot = oResp["navSummary"].reg_tot;
    summary_atualiza(sreg_ini, sreg_qtd, sreg_tot);
  } // scAjaxSetSummary

  function scAjaxSetNavpage()
  {
    navpage_atualiza(oResp["navPage"]);
  } // scAjaxSetNavpage


  function scAjaxRedir(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (!oResp["redirInfo"])
    {
      return;
    }
    sMetodo = oResp["redirInfo"]["metodo"];
    sAction = oResp["redirInfo"]["action"];
    if ("location" == sMetodo)
    {
      if ("parent.parent" == oResp["redirInfo"]["target"])
      {
        parent.parent.location = sAction;
      }
      else if ("parent" == oResp["redirInfo"]["target"])
      {
        parent.location = sAction;
      }
      else if ("_blank" == oResp["redirInfo"]["target"])
      {
        window.open(sAction, "_blank");
      }
      else
      {
        document.location = sAction;
      }
    }
    else if ("html" == sMetodo)
    {
        document.write(scAjaxSpecCharParser(oResp["redirInfo"]["action"]));
    }
    else
    {
      if (oResp["redirInfo"]["target"] == "modal")
      {
          tb_show('', sAction + '?script_case_init=' +  oResp["redirInfo"]["script_case_init"] + '&script_case_session=<?php echo session_id() ?>&nmgp_parms=' + oResp["redirInfo"]["nmgp_parms"] + '&nmgp_outra_jan=true&nmgp_url_saida=modal&NMSC_modal=ok&TB_iframe=true&modal=true&height=' +  oResp["redirInfo"]["h_modal"] + '&width=' + oResp["redirInfo"]["w_modal"], '');
          return;
      }
      sFormRedir = (oResp["redirInfo"]["nmgp_outra_jan"]) ? "form_ajax_redir_1" : "form_ajax_redir_2";
      document.forms[sFormRedir].action           = sAction;
      document.forms[sFormRedir].target           = oResp["redirInfo"]["target"];
      document.forms[sFormRedir].nmgp_parms.value = oResp["redirInfo"]["nmgp_parms"];
      if ("form_ajax_redir_1" == sFormRedir)
      {
        document.forms[sFormRedir].nmgp_outra_jan.value = oResp["redirInfo"]["nmgp_outra_jan"];
      }
      else
      {
        document.forms[sFormRedir].nmgp_url_saida.value   = oResp["redirInfo"]["nmgp_url_saida"];
        document.forms[sFormRedir].script_case_init.value = oResp["redirInfo"]["script_case_init"];
      }
      document.forms[sFormRedir].submit();
    }
  } // scAjaxRedir

  function scAjaxSetDisplay(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    var aDispData = new Array();
    var aDispCont = {};
    var vertButton;
    if (bReset)
    {
      for (iDisplay = 0; iDisplay < ajax_block_list.length; iDisplay++)
      {
        aDispCont[ajax_block_list[iDisplay]] = aDispData.length;
        aDispData[aDispData.length] = new Array(ajax_block_id[ajax_block_list[iDisplay]], "on");
      }
      for (iDisplay = 0; iDisplay < ajax_field_list.length; iDisplay++)
      {
        if (ajax_field_id[ajax_field_list[iDisplay]])
        {
          aFieldIds = ajax_field_id[ajax_field_list[iDisplay]];
          for (iDisplay2 = 0; iDisplay2 < aFieldIds.length; iDisplay2++)
          {
            aDispCont[aFieldIds[iDisplay2]] = aDispData.length;
            aDispData[aDispData.length] = new Array(aFieldIds[iDisplay2], "on");
          }
        }
      }
    }
	var blockDisplay = {};
    if (oResp["blockDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["blockDisplay"].length; iDisplay++)
      {
        if (bReset)
        {
          aDispData[ aDispCont[ oResp["blockDisplay"][iDisplay][0] ] ][1] = oResp["blockDisplay"][iDisplay][1];
        }
        else
        {
          aDispData[aDispData.length] = new Array(ajax_block_id[ oResp["blockDisplay"][iDisplay][0] ], oResp["blockDisplay"][iDisplay][1]);
        }
		blockDisplay[ oResp["blockDisplay"][iDisplay][0] ] = oResp["blockDisplay"][iDisplay][1];
      }
	  //scCheckPagesWithoutBlock();
    }
	var fieldDisplay = {}, controlHtmlHideField = [], controlHtmlShowField = [];
    if (oResp["fieldDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["fieldDisplay"].length; iDisplay++)
      {
        if (typeof scHideUserField === "function" && "off" == oResp["fieldDisplay"][iDisplay][1]) {
          controlHtmlHideField.push(oResp["fieldDisplay"][iDisplay][0]);
        }
        if (typeof scShowUserField === "function" && "on" == oResp["fieldDisplay"][iDisplay][1]) {
          controlHtmlShowField.push(oResp["fieldDisplay"][iDisplay][0]);
        }
        for (iDisplay2 = 1; iDisplay2 < ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ].length; iDisplay2++)
        {
          aFieldIds = ajax_field_id[ ajax_field_mult[ oResp["fieldDisplay"][iDisplay][0] ][iDisplay2] ];
          for (iDisplay3 = 0; iDisplay3 < aFieldIds.length; iDisplay3++)
          {
            if (bReset)
            {
              aDispData[ aDispCont[ aFieldIds[iDisplay3] ] ][1] = oResp["fieldDisplay"][iDisplay][1];
            }
            else
            {
              aDispData[aDispData.length] = new Array(aFieldIds[iDisplay3], oResp["fieldDisplay"][iDisplay][1]);
            }
			if ("hidden_field_data_" == aFieldIds[iDisplay3].substr(0, 18)) {
			  fieldDisplay[ aFieldIds[iDisplay3].substr(18) ] = oResp["fieldDisplay"][iDisplay][1];
			}
          }
        }
      }
    }
    if (oResp["buttonDisplay"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplay"].length; iDisplay++)
      {
        var sBtnName2 = "";
        var sBtnName3 = "";
        switch (oResp["buttonDisplay"][iDisplay][0])
        {
          case "first": var sBtnName = "sc_b_ini"; break;
          case "back": var sBtnName = "sc_b_ret"; break;
          case "forward": var sBtnName = "sc_b_avc"; break;
          case "last": var sBtnName = "sc_b_fim"; break;
          case "insert": var sBtnName = "sc_b_ins"; break;
          case "update": var sBtnName = "sc_b_upd"; break;
          case "delete": var sBtnName = "sc_b_del"; break;
          default: var sBtnName = "sc_b_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName2 = "sc_" + oResp["buttonDisplay"][iDisplay][0]; sBtnName3 = "gbl_sc_" + oResp["buttonDisplay"][iDisplay][0]; break;
        }
        aDispData[aDispData.length] = new Array(sBtnName, oResp["buttonDisplay"][iDisplay][1]);
        aDispData[aDispData.length] = new Array(sBtnName + "_t", oResp["buttonDisplay"][iDisplay][1]);
        aDispData[aDispData.length] = new Array(sBtnName + "_b", oResp["buttonDisplay"][iDisplay][1]);
        if ("" != sBtnName2)
        {
          aDispData[aDispData.length] = new Array(sBtnName2, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName2 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
        if ("" != sBtnName3)
        {
          aDispData[aDispData.length] = new Array(sBtnName3, oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName3 + "_top", oResp["buttonDisplay"][iDisplay][1]);
          aDispData[aDispData.length] = new Array(sBtnName3 + "_bot", oResp["buttonDisplay"][iDisplay][1]);
        }
      }
    }
    if (oResp["buttonDisplayVert"])
    {
      for (iDisplay = 0; iDisplay < oResp["buttonDisplayVert"].length; iDisplay++)
      {
        vertButton = oResp["buttonDisplayVert"][iDisplay];
        aDispData[aDispData.length] = new Array("sc_exc_line_" + vertButton.seq, vertButton.delete);
        if (vertButton.gridView)
        {
          aDispData[aDispData.length] = new Array("sc_open_line_" + vertButton.seq, vertButton.update);
        }
        else
        {
          aDispData[aDispData.length] = new Array("sc_upd_line_" + vertButton.seq, vertButton.update);
        }
      }
    }
    for (iDisplay = 0; iDisplay < aDispData.length; iDisplay++)
    {
      scAjaxElementDisplay(aDispData[iDisplay][0], aDispData[iDisplay][1]);
    }
	for (var blockId in blockDisplay) {
		displayChange_block(blockId, blockDisplay[blockId]);
	}
	for (var fieldId in fieldDisplay) {
		displayChange_field(fieldId, "", fieldDisplay[fieldId]);
	}
	if (controlHtmlHideField.length) {
	  for (iDisplay = 0; iDisplay < controlHtmlHideField.length; iDisplay++) {
	    scHideUserField(controlHtmlHideField[iDisplay]);
	  }
	}
	if (controlHtmlShowField.length) {
	  for (iDisplay = 0; iDisplay < controlHtmlShowField.length; iDisplay++) {
	    scShowUserField(controlHtmlShowField[iDisplay]);
	  }
	}
  } // scAjaxSetDisplay

  function scAjaxNavigateButtonDisplay(sButton, sStatus)
  {
    sButton2 = sButton + "_off";

    if ("off" == sStatus)
    {
      sStatus2 = "off";
    }
    else
    {
      if ("sc_b_ini" == sButton || "sc_b_ret" == sButton)
      {
        if ("S" == Nav_permite_ret)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
      else
      {
        if ("S" == Nav_permite_ava)
        {
          sStatus  = "on";
          sStatus2 = "off";
        }
        else
        {
          sStatus  = "off";
          sStatus2 = "on";
        }
      }
    }

    scAjaxElementDisplay(sButton        , sStatus);
    scAjaxElementDisplay(sButton + "_t" , sStatus);
    scAjaxElementDisplay(sButton + "_b" , sStatus);
    scAjaxElementDisplay(sButton2       , sStatus2);
    scAjaxElementDisplay(sButton2 + "_t", sStatus2);
    scAjaxElementDisplay(sButton2 + "_b", sStatus2);
  } // scAjaxNavigateButtonDisplay

  function scAjaxElementDisplay(sElement, sAction)
  {
    if (ajax_block_tab && ajax_block_tab[sElement] && "" != ajax_block_tab[sElement])
    {
      scAjaxElementDisplay(ajax_block_tab[sElement], sAction);
    }
    if (document.getElementById(sElement))
    {

      if("off" == sAction)
      {
        $('#' + sElement).hide();
      }
      else
      {
        $('#' + sElement).show();
      }
      if (document.getElementById(sElement + "_dumb"))
      {
        if("off" == sAction)
        {
          $('#' + sElement + "_dumb").show();
        }
        else
        {
          $('#' + sElement + "_dumb").hide();
        }
      }
    }
  } // scAjaxElementDisplay

  function scAjaxSetLabel(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iLabel = 0; iLabel < ajax_field_list.length; iLabel++)
      {
        if (ajax_field_list[iLabel] && ajax_error_list[ajax_field_list[iLabel]])
        {
          scAjaxFieldLabel(ajax_field_list[iLabel], ajax_error_list[ajax_field_list[iLabel]]["label"]);
        }
      }
    }
    if (oResp["fieldLabel"])
    {
      for (iLabel = 0; iLabel < oResp["fieldLabel"].length; iLabel++)
      {
        scAjaxFieldLabel(oResp["fieldLabel"][iLabel][0], scAjaxSpecCharParser(oResp["fieldLabel"][iLabel][1]));
      }
    }
  } // scAjaxSetLabel

  function scAjaxFieldLabel(sField, sLabel)
  {
    if (document.getElementById("id_label_" + sField))
    {
      if (document.getElementById("id_label_" + sField).innerHTML != sLabel)
      {
        document.getElementById("id_label_" + sField).innerHTML = sLabel;
      }
    }
    else if (document.getElementById("hidden_field_label_" + sField) && document.getElementById("hidden_field_label_" + sField).innerHTML != sLabel)
    {
      document.getElementById("hidden_field_label_" + sField).innerHTML = sLabel;
    }
  } // scAjaxFieldLabel

  function scAjaxSetReadonly(bReset)
  {
    if (null == bReset)
    {
      bReset = false;
    }
    if (bReset)
    {
      for (iRead = 0; iRead < ajax_field_list.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_list[iRead], ajax_read_only[ajax_field_list[iRead]]);
      }
      for (iRead = 0; iRead < ajax_field_Dt_Hr.length; iRead++)
      {
        scAjaxFieldRead(ajax_field_Dt_Hr[iRead], ajax_read_only[ajax_field_Dt_Hr[iRead]]);
      }
    }
    if (oResp["readOnly"])
    {
      for (iRead = 0; iRead < oResp["readOnly"].length; iRead++)
      {
        if (ajax_read_only[ oResp["readOnly"][iRead][0] ])
        {
          scAjaxFieldRead(oResp["readOnly"][iRead][0], oResp["readOnly"][iRead][1]);
        }
        else if (oResp["rsSize"])
        {
          for (var i = 0; i <= oResp["rsSize"]; i++)
          {
            if (ajax_read_only[ oResp["readOnly"][iRead][0] + i ])
            {
              scAjaxFieldRead(oResp["readOnly"][iRead][0] + i, oResp["readOnly"][iRead][1]);
            }
          }
        }
      }
    }
  } // scAjaxSetReadonly

  function scAjaxFieldRead(sField, sStatus)
  {
    if ("on" == sStatus)
    {
      var sDisplayOff = "none";
      var sDisplayOn  = "";
    }
    else
    {
      var sDisplayOff = "";
      var sDisplayOn  = "none";
    }
    if (document.getElementById("id_read_off_" + sField))
    {
      document.getElementById("id_read_off_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_sc_dragdrop_" + sField))
    {
      document.getElementById("id_sc_dragdrop_" + sField).style.display = sDisplayOff;
    }
    if (document.getElementById("id_read_on_" + sField))
    {
      document.getElementById("id_read_on_" + sField).style.display = sDisplayOn;
    }
  } // scAjaxFieldRead

  function scAjaxSetBtnVars()
  {
    if (oResp["btnVars"])
    {
      for (iBtn = 0; iBtn < oResp["btnVars"].length; iBtn++)
      {
        eval(oResp["btnVars"][iBtn][0] + " = scAjaxSpecCharParser('" + oResp["btnVars"][iBtn][1] + "');");
      }
    }
  } // scAjaxSetBtnVars

  function scAjaxClearText(sFormField)
  {
    document.F1.elements[sFormField].value = "";
  } // scAjaxClearText

  function scAjaxClearLabel(sFormField)
  {
    document.getElementById("id_ajax_label_" + sFormField).innerHTML = "";
  } // scAjaxClearLabel

  function scAjaxClearSelect(sFormField)
  {
    document.F1.elements[sFormField].length = 0;
  } // scAjaxClearSelect

  function scAjaxClearCheckbox(sFormField)
  {
    document.getElementById("idAjaxCheckbox_" + sFormField).innerHTML = "";
  } // scAjaxClearCheckbox

  function scAjaxClearRadio(sFormField)
  {
    document.getElementById("idAjaxRadio_" + sFormField).innerHTML = "";
  } // scAjaxClearRadio

  function scAjaxClearEditorHtml(sFormField)
  {
    if(tinymce.majorVersion > 3)
        {
                var oFormField = tinyMCE.get(sFieldName);
        }
        else
        {
                var oFormField = tinyMCE.getInstanceById(sFieldName);
        }
    oFormField.setContent("");
  } // scAjaxClearEditorHtml

  function scCheckPagesWithoutBlock()
  {
	var page_id, block_id, has_block_shown;
    for (page_id in ajax_page_blocks) {
	  has_block_shown = false;
      for (block_id in ajax_page_blocks[page_id]) {
		console.log(page_id + ' ' + ajax_page_blocks[page_id][block_id]);
		console.log($("#div_" + ajax_block_id[ajax_page_blocks[page_id][block_id]]).css('display'));
        //$("#div_" + ajax_block_id[block_id]);
      }
    }
  }

  function scAjaxJavascript()
  {
    if (oResp["ajaxJavascript"])
    {
      var sJsFunc = "";
      for (var i = 0; i < oResp["ajaxJavascript"].length; i++)
      {
        sJsFunc = scAjaxSpecCharParser(oResp["ajaxJavascript"][i][0]);
        if ("" != sJsFunc)
        {
          var aParam = new Array();
          if (oResp["ajaxJavascript"][i][1] && 0 < oResp["ajaxJavascript"][i][1].length)
          {
            for (var j = 0; j < oResp["ajaxJavascript"][i][1].length; j++)
            {
              aParam.push("'" + oResp["ajaxJavascript"][i][1][j] + "'");
            }
          }
          eval("if (" + sJsFunc + ") { " + sJsFunc + "(" + aParam.join(", ") + ") }");
        }
      }
    }
  } // scAjaxJavascript

  function scAjaxAlert(callbackOk)
  {
    if (oResp["ajaxAlert"] && oResp["ajaxAlert"]["message"] && "" != oResp["ajaxAlert"]["message"])
    {
      scJs_alert(oResp["ajaxAlert"]["message"], callbackOk, oResp["ajaxAlert"]["params"]);
    }
    else
    {
      callbackOk();
    }
  } // scAjaxAlert

	function scJs_alert_default(message, callbackOk) {
		alert(message);
		if (typeof callbackOk == "function") {
			callbackOk();
		}
	} // scJs_alert_default

	function scJs_confirm_default(message, callbackOk, callbackCancel) {
		if (confirm(message)) {
			callbackOk();
		}
		else {
			callbackCancel();
		}
	} // scJs_confirm_default

  function scAjaxMessage(oTemp)
  {
    if (oTemp && oTemp != null)
    {
        oResp = oTemp;
    }
    if (oResp["ajaxMessage"] && oResp["ajaxMessage"]["message"] && "" != oResp["ajaxMessage"]["message"])
    {
      var sTitle    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["title"])        ? oResp["ajaxMessage"]["title"]               : scMsgDefTitle,
          bModal    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["modal"])        ? ("Y" == oResp["ajaxMessage"]["modal"])      : false,
          iTimeout  = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["timeout"])      ? parseInt(oResp["ajaxMessage"]["timeout"])   : 0,
          bButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button"])       ? ("Y" == oResp["ajaxMessage"]["button"])     : false,
          sButton   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["button_label"]) ? oResp["ajaxMessage"]["button_label"]        : "Ok",
          iTop      = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["top"])          ? parseInt(oResp["ajaxMessage"]["top"])       : 0,
          iLeft     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["left"])         ? parseInt(oResp["ajaxMessage"]["left"])      : 0,
          iWidth    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["width"])        ? parseInt(oResp["ajaxMessage"]["width"])     : 0,
          iHeight   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["height"])       ? parseInt(oResp["ajaxMessage"]["height"])    : 0,
          bClose    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["show_close"])   ? ("Y" == oResp["ajaxMessage"]["show_close"]) : true,
          bBodyIcon = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["body_icon"])    ? ("Y" == oResp["ajaxMessage"]["body_icon"])  : true,
          sRedir    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir"])        ? oResp["ajaxMessage"]["redir"]               : "",
          sTarget   = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_target"]) ? oResp["ajaxMessage"]["redir_target"]        : "",
          sParam    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["redir_par"])    ? oResp["ajaxMessage"]["redir_par"]           : "",
          bToast    = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["toast"])        ? ("Y" == oResp["ajaxMessage"]["toast"])      : false,
          sToastPos = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["toast_pos"])    ? oResp["ajaxMessage"]["toast_pos"]           : "",
          sType     = (oResp["ajaxMessage"] && oResp["ajaxMessage"]["type"])         ? oResp["ajaxMessage"]["type"]                : "";
      if (typeof scDisplayUserMessage == "function") {
        scDisplayUserMessage(oResp["ajaxMessage"]["message"]);
      }
      else {
		  var params = {
			  title: sTitle,
			  message: oResp["ajaxMessage"]["message"],
			  isModal: bModal,
			  timeout: iTimeout,
			  showButton: bButton,
			  buttonLabel: sButton,
			  topPos: iTop,
			  leftPos: iLeft,
			  width: iWidth,
			  height: iHeight,
			  redirUrl: sRedir,
			  redirTarget: sTarget,
			  redirParam: sParam,
			  showClose: bClose,
			  showBodyIcon: bBodyIcon,
			  isToast: bToast,
			  toastPos: sToastPos,
			  type: sType
		  };
        _scAjaxShowMessage(params);
      }
    }
  } // scAjaxMessage

  function scAjaxResponse(sResp)
  {
    eval("var oResp = " + sResp);
    return oResp;
  } // scAjaxResponse

  function scAjaxBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      input += "";
      while (input.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input = input.replace(String.fromCharCode(10), '<br>');
      }
      return input;
  } // scAjaxBreakLine

  function scAjaxProtectBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      var input1 = input + "";
      while (input1.lastIndexOf(String.fromCharCode(10)) > -1)
      {
         input1 = input1.replace(String.fromCharCode(10), '#@NM#@');
      }
      return input1;
  } // scAjaxProtectBreakLine

  function scAjaxReturnBreakLine(input)
  {
      if (null == input)
      {
          return "";
      }
      while (input.lastIndexOf('#@NM#@') > -1)
      {
         input = input.replace('#@NM#@', String.fromCharCode(10));
      }
      return input;
  } // scAjaxReturnBreakLine

  function scOpenMasterDetail(widget, url)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe.attr("src", url);
  } // scOpenMasterDetail

  function scMoveMasterDetail(widget)
  {
	  var iframe = $(parent.document).find("[name='" +  widget+ "']");
	  iframe[0].contentWindow.nm_move("apl_detalhe", true);
  } // scMoveMasterDetail

	function scAjaxError_markList() {
	    if ('undefined' == typeof oResp.errList) {
	        return;
	    }
		var i, fieldName, fieldList = new Array();
		for (i = 0; i < oResp.errList.length; i++) {
			fieldName = oResp.errList[i]["fldName"];
			if (oResp.errList[i]["numLinha"]) {
				fieldName += oResp.errList[i]["numLinha"];
			}
            fieldList.push(fieldName);
		}
		scAjaxError_markFieldList(fieldList);
	} // scAjaxError_markList

	function scAjaxError_markFieldList(fieldList) {
		var i;
		for (i = 0; i < fieldList.length; i++) {
            scAjaxError_markField(fieldList[i]);
		}
	} // scAjaxError_markFieldList

	function scAjaxError_unmarkList() {
		var i;
		for (i = 0; i < ajax_field_list.length; i++) {
            scAjaxError_unmarkField(ajax_field_list[i]);
		}
	} // scAjaxError_unmarkList

	function scAjaxError_markField(fieldName) {
		var $oField = $("#id_sc_field_" + fieldName);
		if (0 < $oField.length) {
			scAjax_applyFieldErrorStyle($oField);
		}
	} // scAjaxError_markField

	function scAjaxError_unmarkField(fieldName) {
		var $oField = $("#id_sc_field_" + fieldName);
		if (0 < $oField.length) {
			scAjax_removeFieldErrorStyle($oField);
		}
	} // scAjaxError_unmarkField

	function scAjax_displayEmptyForm() {
        $("#sc-ui-empty-form").show();
        $(".sc-ui-page-tab-line").hide();
        $("#sc-id-required-row").hide();
        sc_hide_form_jap_contrato_mob_form();
	}

  function scAjax_applyFieldErrorStyle(fieldObj) {
    if (fieldObj.hasClass("sc-ui-pwd-toggle")) {
        fieldObj.addClass(sc_css_status_pwd_text);
        fieldObj.parent().addClass(sc_css_status_pwd_box);
      } else {
        fieldObj.addClass(sc_css_status);
      }
  }

  function scAjax_removeFieldErrorStyle(fieldObj) {
    if (fieldObj.hasClass("sc-ui-pwd-toggle")) {
        fieldObj.removeClass(sc_css_status_pwd_text);
        fieldObj.parent().removeClass(sc_css_status_pwd_box);
      } else {
        fieldObj.removeClass(sc_css_status);
      }
  }

  function scAjax_formReload() {
<?php
    if ($this->nmgp_opcao == 'novo') {
        echo "      nm_move('reload_novo');";
    } else {
        echo "      nm_move('igual');";
    }
?>
  }

  function scBtnDisabled()
  {
    var btnNameNav, hasNavButton = false;

    if (typeof oResp.btnDisabled != undefined) {
      for (var btnName in oResp.btnDisabled) {
        btnNameNav = btnName.substring(0, 9);

        if ("on" == oResp.btnDisabled[btnName]) {
          $("#" + btnName).addClass("disabled");

          if ("sc_b_ini_" == btnNameNav) {
            Nav_binicio_macro_disabled = "on";
            hasNavButton = true;
          } else if ("sc_b_ret_" == btnNameNav) {
            Nav_bretorna_macro_disabled = "on";
            hasNavButton = true;
          } else if ("sc_b_avc_" == btnNameNav) {
            Nav_bavanca_macro_disabled = "on";
            hasNavButton = true;
          } else if ("sc_b_fim_" == btnNameNav) {
            Nav_bfinal_macro_disabled = "on";
            hasNavButton = true;
          }
        } else {
          $("#" + btnName).removeClass("disabled");

          if ("sc_b_ini_" == btnNameNav) {
            Nav_binicio_macro_disabled = "off";
            hasNavButton = true;
          } else if ("sc_b_ret_" == btnNameNav) {
            Nav_bretorna_macro_disabled = "off";
            hasNavButton = true;
          } else if ("sc_b_avc_" == btnNameNav) {
            Nav_bavanca_macro_disabled = "off";
            hasNavButton = true;
          } else if ("sc_b_fim_" == btnNameNav) {
            Nav_bfinal_macro_disabled = "off";
            hasNavButton = true;
          }
        }
      }
    }

    if (hasNavButton) {
      nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');
      nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');
    }
  }

  function scBtnLabel()
  {
    if (typeof oResp.btnLabel != undefined) {
      for (var btnName in oResp.btnLabel) {
        $("#" + btnName).find(".btn-label").html(oResp.btnLabel[btnName]);
      }
    }
  }

  var scFormHasChanged = false;

  function scMarkFormAsChanged() {
    scFormHasChanged = true;
  }

  function scResetFormChanges() {
    scFormHasChanged = false;
  }

  var isRunning_scFormClose_F5 = false;
  function scFormClose_F5(exitUrl) {
    if (isRunning_scFormClose_F5) {
      return;
    }
    isRunning_scFormClose_F5 = true;
    setTimeout(function() { isRunning_scFormClose_F5 = false; }, 3000);

    document.F5.action = exitUrl;
    document.F5.submit();

  }

  var isRunning_scFormClose_F6 = false;
  function scFormClose_F6(exitUrl) {
    if (isRunning_scFormClose_F6) {
      return;
    }
    isRunning_scFormClose_F6 = true;
    setTimeout(function() { isRunning_scFormClose_F6 = false; }, 3000);

    document.F6.action = exitUrl;
    document.F6.submit();

  }

  // ---------- Validate con_motivo_anulacion
  function do_ajax_form_jap_contrato_mob_validate_con_motivo_anulacion()
  {
    var nomeCampo_con_motivo_anulacion = "con_motivo_anulacion";
    var var_con_motivo_anulacion = scAjaxGetFieldText(nomeCampo_con_motivo_anulacion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_motivo_anulacion(var_con_motivo_anulacion, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_motivo_anulacion_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_motivo_anulacion

  function do_ajax_form_jap_contrato_mob_validate_con_motivo_anulacion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_motivo_anulacion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_motivo_anulacion_cb

  // ---------- Validate con_fecha
  function do_ajax_form_jap_contrato_mob_validate_con_fecha()
  {
    var nomeCampo_con_fecha = "con_fecha";
    var var_con_fecha = scAjaxGetFieldHidden(nomeCampo_con_fecha);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_fecha(var_con_fecha, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_fecha_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_fecha

  function do_ajax_form_jap_contrato_mob_validate_con_fecha_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_fecha";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_fecha_cb

  // ---------- Validate con_sino
  function do_ajax_form_jap_contrato_mob_validate_con_sino()
  {
    var nomeCampo_con_sino = "con_sino";
    var var_con_sino = scAjaxGetFieldHidden(nomeCampo_con_sino);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_sino(var_con_sino, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_sino_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_sino

  function do_ajax_form_jap_contrato_mob_validate_con_sino_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_sino";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_sino_cb

  // ---------- Validate con_id
  function do_ajax_form_jap_contrato_mob_validate_con_id()
  {
    var nomeCampo_con_id = "con_id";
    var var_con_id = scAjaxGetFieldHidden(nomeCampo_con_id);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_id(var_con_id, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_id_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_id

  function do_ajax_form_jap_contrato_mob_validate_con_id_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_id";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_id_cb

  // ---------- Validate con_numero_contrato
  function do_ajax_form_jap_contrato_mob_validate_con_numero_contrato()
  {
    var nomeCampo_con_numero_contrato = "con_numero_contrato";
    var var_con_numero_contrato = scAjaxGetFieldHidden(nomeCampo_con_numero_contrato);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_numero_contrato(var_con_numero_contrato, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_numero_contrato_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_contrato

  function do_ajax_form_jap_contrato_mob_validate_con_numero_contrato_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_numero_contrato";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_contrato_cb

  // ---------- Validate con_tipo_contrato
  function do_ajax_form_jap_contrato_mob_validate_con_tipo_contrato()
  {
    var nomeCampo_con_tipo_contrato = "con_tipo_contrato";
    var var_con_tipo_contrato = scAjaxGetFieldSelect(nomeCampo_con_tipo_contrato);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_tipo_contrato(var_con_tipo_contrato, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_tipo_contrato_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_tipo_contrato

  function do_ajax_form_jap_contrato_mob_validate_con_tipo_contrato_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_tipo_contrato";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_tipo_contrato_cb

  // ---------- Validate con_propietario
  function do_ajax_form_jap_contrato_mob_validate_con_propietario()
  {
    var nomeCampo_con_propietario = "con_propietario";
    var var_con_propietario = scAjaxGetFieldSelect(nomeCampo_con_propietario);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_propietario(var_con_propietario, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_propietario_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_propietario

  function do_ajax_form_jap_contrato_mob_validate_con_propietario_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_propietario";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_propietario_cb

  // ---------- Validate con_nombre
  function do_ajax_form_jap_contrato_mob_validate_con_nombre()
  {
    var nomeCampo_con_nombre = "con_nombre";
    var var_con_nombre = scAjaxGetFieldHidden(nomeCampo_con_nombre);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_nombre(var_con_nombre, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_nombre_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_nombre

  function do_ajax_form_jap_contrato_mob_validate_con_nombre_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_nombre";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_nombre_cb

  // ---------- Validate con_cedula
  function do_ajax_form_jap_contrato_mob_validate_con_cedula()
  {
    var nomeCampo_con_cedula = "con_cedula";
    var var_con_cedula = scAjaxGetFieldHidden(nomeCampo_con_cedula);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_cedula(var_con_cedula, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_cedula_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_cedula

  function do_ajax_form_jap_contrato_mob_validate_con_cedula_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_cedula";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_cedula_cb

  // ---------- Validate con_telefono
  function do_ajax_form_jap_contrato_mob_validate_con_telefono()
  {
    var nomeCampo_con_telefono = "con_telefono";
    var var_con_telefono = scAjaxGetFieldHidden(nomeCampo_con_telefono);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_telefono(var_con_telefono, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_telefono_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_telefono

  function do_ajax_form_jap_contrato_mob_validate_con_telefono_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_telefono";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_telefono_cb

  // ---------- Validate con_celular
  function do_ajax_form_jap_contrato_mob_validate_con_celular()
  {
    var nomeCampo_con_celular = "con_celular";
    var var_con_celular = scAjaxGetFieldHidden(nomeCampo_con_celular);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_celular(var_con_celular, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_celular_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_celular

  function do_ajax_form_jap_contrato_mob_validate_con_celular_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_celular";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_celular_cb

  // ---------- Validate con_direccion_propietario
  function do_ajax_form_jap_contrato_mob_validate_con_direccion_propietario()
  {
    var nomeCampo_con_direccion_propietario = "con_direccion_propietario";
    var var_con_direccion_propietario = scAjaxGetFieldHidden(nomeCampo_con_direccion_propietario);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_direccion_propietario(var_con_direccion_propietario, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_direccion_propietario_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_direccion_propietario

  function do_ajax_form_jap_contrato_mob_validate_con_direccion_propietario_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_direccion_propietario";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_direccion_propietario_cb

  // ---------- Validate con_correo
  function do_ajax_form_jap_contrato_mob_validate_con_correo()
  {
    var nomeCampo_con_correo = "con_correo";
    var var_con_correo = scAjaxGetFieldHidden(nomeCampo_con_correo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_correo(var_con_correo, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_correo_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_correo

  function do_ajax_form_jap_contrato_mob_validate_con_correo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_correo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_correo_cb

  // ---------- Validate con_estado
  function do_ajax_form_jap_contrato_mob_validate_con_estado()
  {
    var nomeCampo_con_estado = "con_estado";
    var var_con_estado = scAjaxGetFieldHidden(nomeCampo_con_estado);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_estado(var_con_estado, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_estado_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_estado

  function do_ajax_form_jap_contrato_mob_validate_con_estado_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_estado";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_estado_cb

  // ---------- Validate con_pais
  function do_ajax_form_jap_contrato_mob_validate_con_pais()
  {
    var nomeCampo_con_pais = "con_pais";
    var var_con_pais = scAjaxGetFieldSelect(nomeCampo_con_pais);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_pais(var_con_pais, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_pais_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_pais

  function do_ajax_form_jap_contrato_mob_validate_con_pais_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_pais";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_pais_cb

  // ---------- Validate con_provincia
  function do_ajax_form_jap_contrato_mob_validate_con_provincia()
  {
    var nomeCampo_con_provincia = "con_provincia";
    var var_con_provincia = scAjaxGetFieldSelect(nomeCampo_con_provincia);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_provincia(var_con_provincia, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_provincia_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_provincia

  function do_ajax_form_jap_contrato_mob_validate_con_provincia_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_provincia";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_provincia_cb

  // ---------- Validate con_canton
  function do_ajax_form_jap_contrato_mob_validate_con_canton()
  {
    var nomeCampo_con_canton = "con_canton";
    var var_con_canton = scAjaxGetFieldSelect(nomeCampo_con_canton);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_canton(var_con_canton, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_canton_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_canton

  function do_ajax_form_jap_contrato_mob_validate_con_canton_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_canton";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_canton_cb

  // ---------- Validate con_parroquia
  function do_ajax_form_jap_contrato_mob_validate_con_parroquia()
  {
    var nomeCampo_con_parroquia = "con_parroquia";
    var var_con_parroquia = scAjaxGetFieldSelect(nomeCampo_con_parroquia);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_parroquia(var_con_parroquia, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_parroquia_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_parroquia

  function do_ajax_form_jap_contrato_mob_validate_con_parroquia_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_parroquia";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_parroquia_cb

  // ---------- Validate con_comunidad
  function do_ajax_form_jap_contrato_mob_validate_con_comunidad()
  {
    var nomeCampo_con_comunidad = "con_comunidad";
    var var_con_comunidad = scAjaxGetFieldSelect(nomeCampo_con_comunidad);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_comunidad(var_con_comunidad, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_comunidad_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_comunidad

  function do_ajax_form_jap_contrato_mob_validate_con_comunidad_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_comunidad";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_comunidad_cb

  // ---------- Validate con_sector
  function do_ajax_form_jap_contrato_mob_validate_con_sector()
  {
    var nomeCampo_con_sector = "con_sector";
    var var_con_sector = scAjaxGetFieldSelect(nomeCampo_con_sector);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_sector(var_con_sector, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_sector_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_sector

  function do_ajax_form_jap_contrato_mob_validate_con_sector_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_sector";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_sector_cb

  // ---------- Validate con_numero_censo
  function do_ajax_form_jap_contrato_mob_validate_con_numero_censo()
  {
    var nomeCampo_con_numero_censo = "con_numero_censo";
    var var_con_numero_censo = scAjaxGetFieldText(nomeCampo_con_numero_censo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_numero_censo(var_con_numero_censo, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_numero_censo_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_censo

  function do_ajax_form_jap_contrato_mob_validate_con_numero_censo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_numero_censo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_censo_cb

  // ---------- Validate con_direccion_predio
  function do_ajax_form_jap_contrato_mob_validate_con_direccion_predio()
  {
    var nomeCampo_con_direccion_predio = "con_direccion_predio";
    var var_con_direccion_predio = scAjaxGetFieldText(nomeCampo_con_direccion_predio);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_direccion_predio(var_con_direccion_predio, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_direccion_predio_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_direccion_predio

  function do_ajax_form_jap_contrato_mob_validate_con_direccion_predio_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_direccion_predio";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_direccion_predio_cb

  // ---------- Validate con_toma_administrativa
  function do_ajax_form_jap_contrato_mob_validate_con_toma_administrativa()
  {
    var nomeCampo_con_toma_administrativa = "con_toma_administrativa";
    var var_con_toma_administrativa = scAjaxGetFieldSelect(nomeCampo_con_toma_administrativa);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_toma_administrativa(var_con_toma_administrativa, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_toma_administrativa_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_toma_administrativa

  function do_ajax_form_jap_contrato_mob_validate_con_toma_administrativa_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_toma_administrativa";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_toma_administrativa_cb

  // ---------- Validate con_toma_operativa
  function do_ajax_form_jap_contrato_mob_validate_con_toma_operativa()
  {
    var nomeCampo_con_toma_operativa = "con_toma_operativa";
    var var_con_toma_operativa = scAjaxGetFieldSelect(nomeCampo_con_toma_operativa);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_toma_operativa(var_con_toma_operativa, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_toma_operativa_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_toma_operativa

  function do_ajax_form_jap_contrato_mob_validate_con_toma_operativa_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_toma_operativa";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_toma_operativa_cb

  // ---------- Validate con_tipo_servicio
  function do_ajax_form_jap_contrato_mob_validate_con_tipo_servicio()
  {
    var nomeCampo_con_tipo_servicio = "con_tipo_servicio";
    var var_con_tipo_servicio = scAjaxGetFieldSelect(nomeCampo_con_tipo_servicio);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_tipo_servicio(var_con_tipo_servicio, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_tipo_servicio_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_tipo_servicio

  function do_ajax_form_jap_contrato_mob_validate_con_tipo_servicio_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_tipo_servicio";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_tipo_servicio_cb

  // ---------- Validate con_condicion_contrato
  function do_ajax_form_jap_contrato_mob_validate_con_condicion_contrato()
  {
    var nomeCampo_con_condicion_contrato = "con_condicion_contrato";
    var var_con_condicion_contrato = scAjaxGetFieldSelect(nomeCampo_con_condicion_contrato);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_condicion_contrato(var_con_condicion_contrato, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_condicion_contrato_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_condicion_contrato

  function do_ajax_form_jap_contrato_mob_validate_con_condicion_contrato_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_condicion_contrato";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_condicion_contrato_cb

  // ---------- Validate con_ruta
  function do_ajax_form_jap_contrato_mob_validate_con_ruta()
  {
    var nomeCampo_con_ruta = "con_ruta";
    var var_con_ruta = scAjaxGetFieldSelect(nomeCampo_con_ruta);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_ruta(var_con_ruta, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_ruta_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_ruta

  function do_ajax_form_jap_contrato_mob_validate_con_ruta_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_ruta";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_ruta_cb

  // ---------- Validate con_orden_lecturas
  function do_ajax_form_jap_contrato_mob_validate_con_orden_lecturas()
  {
    var nomeCampo_con_orden_lecturas = "con_orden_lecturas";
    var var_con_orden_lecturas = scAjaxGetFieldText(nomeCampo_con_orden_lecturas);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_orden_lecturas(var_con_orden_lecturas, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_orden_lecturas_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_orden_lecturas

  function do_ajax_form_jap_contrato_mob_validate_con_orden_lecturas_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_orden_lecturas";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_orden_lecturas_cb

  // ---------- Validate con_fecha_instalacion
  function do_ajax_form_jap_contrato_mob_validate_con_fecha_instalacion()
  {
    var nomeCampo_con_fecha_instalacion = "con_fecha_instalacion";
    var var_con_fecha_instalacion = scAjaxGetFieldText(nomeCampo_con_fecha_instalacion);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_fecha_instalacion(var_con_fecha_instalacion, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_fecha_instalacion_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_fecha_instalacion

  function do_ajax_form_jap_contrato_mob_validate_con_fecha_instalacion_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_fecha_instalacion";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_fecha_instalacion_cb

  // ---------- Validate con_numero_medidor
  function do_ajax_form_jap_contrato_mob_validate_con_numero_medidor()
  {
    var nomeCampo_con_numero_medidor = "con_numero_medidor";
    var var_con_numero_medidor = scAjaxGetFieldText(nomeCampo_con_numero_medidor);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_numero_medidor(var_con_numero_medidor, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_numero_medidor_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_medidor

  function do_ajax_form_jap_contrato_mob_validate_con_numero_medidor_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_numero_medidor";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_medidor_cb

  // ---------- Validate con_maxima_lectura
  function do_ajax_form_jap_contrato_mob_validate_con_maxima_lectura()
  {
    var nomeCampo_con_maxima_lectura = "con_maxima_lectura";
    var var_con_maxima_lectura = scAjaxGetFieldText(nomeCampo_con_maxima_lectura);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_maxima_lectura(var_con_maxima_lectura, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_maxima_lectura_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_maxima_lectura

  function do_ajax_form_jap_contrato_mob_validate_con_maxima_lectura_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_maxima_lectura";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_maxima_lectura_cb

  // ---------- Validate con_lectura_actual
  function do_ajax_form_jap_contrato_mob_validate_con_lectura_actual()
  {
    var nomeCampo_con_lectura_actual = "con_lectura_actual";
    var var_con_lectura_actual = scAjaxGetFieldText(nomeCampo_con_lectura_actual);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_lectura_actual(var_con_lectura_actual, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_lectura_actual_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_lectura_actual

  function do_ajax_form_jap_contrato_mob_validate_con_lectura_actual_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_lectura_actual";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_lectura_actual_cb

  // ---------- Validate con_fecha_lectura
  function do_ajax_form_jap_contrato_mob_validate_con_fecha_lectura()
  {
    var nomeCampo_con_fecha_lectura = "con_fecha_lectura";
    var var_con_fecha_lectura = scAjaxGetFieldText(nomeCampo_con_fecha_lectura);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_fecha_lectura(var_con_fecha_lectura, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_fecha_lectura_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_fecha_lectura

  function do_ajax_form_jap_contrato_mob_validate_con_fecha_lectura_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_fecha_lectura";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_fecha_lectura_cb

  // ---------- Validate con_usuario_instala
  function do_ajax_form_jap_contrato_mob_validate_con_usuario_instala()
  {
    var nomeCampo_con_usuario_instala = "con_usuario_instala";
    var var_con_usuario_instala = scAjaxGetFieldHidden(nomeCampo_con_usuario_instala);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_usuario_instala(var_con_usuario_instala, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_usuario_instala_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_usuario_instala

  function do_ajax_form_jap_contrato_mob_validate_con_usuario_instala_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_usuario_instala";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_usuario_instala_cb

  // ---------- Validate con_observaciones
  function do_ajax_form_jap_contrato_mob_validate_con_observaciones()
  {
    var nomeCampo_con_observaciones = "con_observaciones";
    var var_con_observaciones = scAjaxGetFieldText(nomeCampo_con_observaciones);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_observaciones(var_con_observaciones, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_observaciones_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_observaciones

  function do_ajax_form_jap_contrato_mob_validate_con_observaciones_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_observaciones";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_observaciones_cb

  // ---------- Validate con_numero_corte
  function do_ajax_form_jap_contrato_mob_validate_con_numero_corte()
  {
    var nomeCampo_con_numero_corte = "con_numero_corte";
    var var_con_numero_corte = scAjaxGetFieldText(nomeCampo_con_numero_corte);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_numero_corte(var_con_numero_corte, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_numero_corte_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_corte

  function do_ajax_form_jap_contrato_mob_validate_con_numero_corte_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_numero_corte";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_numero_corte_cb

  // ---------- Validate materiales
  function do_ajax_form_jap_contrato_mob_validate_materiales()
  {
    var nomeCampo_materiales = "materiales";
    var var_materiales = scAjaxGetFieldText(nomeCampo_materiales);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_materiales(var_materiales, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_materiales_cb);
  } // do_ajax_form_jap_contrato_mob_validate_materiales

  function do_ajax_form_jap_contrato_mob_validate_materiales_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "materiales";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_materiales_cb

  // ---------- Validate rubros
  function do_ajax_form_jap_contrato_mob_validate_rubros()
  {
    var nomeCampo_rubros = "rubros";
    var var_rubros = scAjaxGetFieldText(nomeCampo_rubros);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_rubros(var_rubros, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_rubros_cb);
  } // do_ajax_form_jap_contrato_mob_validate_rubros

  function do_ajax_form_jap_contrato_mob_validate_rubros_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "rubros";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_rubros_cb

  // ---------- Validate con_total_a_pagar
  function do_ajax_form_jap_contrato_mob_validate_con_total_a_pagar()
  {
    var nomeCampo_con_total_a_pagar = "con_total_a_pagar";
    var var_con_total_a_pagar = scAjaxGetFieldHidden(nomeCampo_con_total_a_pagar);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_total_a_pagar(var_con_total_a_pagar, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_total_a_pagar_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_total_a_pagar

  function do_ajax_form_jap_contrato_mob_validate_con_total_a_pagar_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_total_a_pagar";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_total_a_pagar_cb

  // ---------- Validate con_abono
  function do_ajax_form_jap_contrato_mob_validate_con_abono()
  {
    var nomeCampo_con_abono = "con_abono";
    var var_con_abono = scAjaxGetFieldText(nomeCampo_con_abono);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_abono(var_con_abono, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_abono_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_abono

  function do_ajax_form_jap_contrato_mob_validate_con_abono_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_abono";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_abono_cb

  // ---------- Validate con_saldo_pagar
  function do_ajax_form_jap_contrato_mob_validate_con_saldo_pagar()
  {
    var nomeCampo_con_saldo_pagar = "con_saldo_pagar";
    var var_con_saldo_pagar = scAjaxGetFieldHidden(nomeCampo_con_saldo_pagar);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_saldo_pagar(var_con_saldo_pagar, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_saldo_pagar_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_saldo_pagar

  function do_ajax_form_jap_contrato_mob_validate_con_saldo_pagar_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_saldo_pagar";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_saldo_pagar_cb

  // ---------- Validate con_plazo
  function do_ajax_form_jap_contrato_mob_validate_con_plazo()
  {
    var nomeCampo_con_plazo = "con_plazo";
    var var_con_plazo = scAjaxGetFieldText(nomeCampo_con_plazo);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_plazo(var_con_plazo, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_plazo_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_plazo

  function do_ajax_form_jap_contrato_mob_validate_con_plazo_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_plazo";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_plazo_cb

  // ---------- Validate con_valor_cuota
  function do_ajax_form_jap_contrato_mob_validate_con_valor_cuota()
  {
    var nomeCampo_con_valor_cuota = "con_valor_cuota";
    var var_con_valor_cuota = scAjaxGetFieldHidden(nomeCampo_con_valor_cuota);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_valor_cuota(var_con_valor_cuota, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_valor_cuota_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_valor_cuota

  function do_ajax_form_jap_contrato_mob_validate_con_valor_cuota_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_valor_cuota";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_valor_cuota_cb

  // ---------- Validate cuotas
  function do_ajax_form_jap_contrato_mob_validate_cuotas()
  {
    var nomeCampo_cuotas = "cuotas";
    var var_cuotas = scAjaxGetFieldText(nomeCampo_cuotas);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_cuotas(var_cuotas, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_cuotas_cb);
  } // do_ajax_form_jap_contrato_mob_validate_cuotas

  function do_ajax_form_jap_contrato_mob_validate_cuotas_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "cuotas";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_cuotas_cb

  // ---------- Validate con_empresa
  function do_ajax_form_jap_contrato_mob_validate_con_empresa()
  {
    var nomeCampo_con_empresa = "con_empresa";
    var var_con_empresa = scAjaxGetFieldText(nomeCampo_con_empresa);
    var var_script_case_init = document.F1.script_case_init.value;
    x_ajax_form_jap_contrato_mob_validate_con_empresa(var_con_empresa, var_script_case_init, do_ajax_form_jap_contrato_mob_validate_con_empresa_cb);
  } // do_ajax_form_jap_contrato_mob_validate_con_empresa

  function do_ajax_form_jap_contrato_mob_validate_con_empresa_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    sFieldValid = "con_empresa";
    scEventControl_onBlur(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "valid");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      var sImgStatus = sc_img_status_ok;
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      var sImgStatus = sc_img_status_err;
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    var $oImg = $('#id_sc_status_' + sFieldValid);
    if (0 < $oImg.length)
    {
      $oImg.attr('src', sImgStatus).css('display', '');
    }
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_validate_con_empresa_cb

  // ---------- Refresh con_pais
  function do_ajax_form_jap_contrato_mob_refresh_con_pais()
  {
    var var_con_pais = scAjaxGetFieldSelect("con_pais");
    var var_nmgp_refresh_fields = "con_provincia";
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_refresh_con_pais(var_con_pais, var_nmgp_refresh_fields, var_script_case_init, do_ajax_form_jap_contrato_mob_refresh_con_pais_cb);
  } // do_ajax_form_jap_contrato_mob_refresh_con_pais

  function do_ajax_form_jap_contrato_mob_refresh_con_pais_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    scAjaxSetFields(false);
    scAjaxSetVariables();
    do_ajax_form_jap_contrato_mob_refresh_con_provincia();
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_refresh_con_pais_cb

  // ---------- Refresh con_provincia
  function do_ajax_form_jap_contrato_mob_refresh_con_provincia()
  {
    var var_con_provincia = scAjaxGetFieldSelect("con_provincia");
    var var_nmgp_refresh_fields = "con_canton";
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_refresh_con_provincia(var_con_provincia, var_nmgp_refresh_fields, var_script_case_init, do_ajax_form_jap_contrato_mob_refresh_con_provincia_cb);
  } // do_ajax_form_jap_contrato_mob_refresh_con_provincia

  function do_ajax_form_jap_contrato_mob_refresh_con_provincia_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    scAjaxSetFields(false);
    scAjaxSetVariables();
    do_ajax_form_jap_contrato_mob_refresh_con_canton();
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_refresh_con_provincia_cb

  // ---------- Refresh con_canton
  function do_ajax_form_jap_contrato_mob_refresh_con_canton()
  {
    var var_con_canton = scAjaxGetFieldSelect("con_canton");
    var var_nmgp_refresh_fields = "con_parroquia";
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_refresh_con_canton(var_con_canton, var_nmgp_refresh_fields, var_script_case_init, do_ajax_form_jap_contrato_mob_refresh_con_canton_cb);
  } // do_ajax_form_jap_contrato_mob_refresh_con_canton

  function do_ajax_form_jap_contrato_mob_refresh_con_canton_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    scAjaxSetFields(false);
    scAjaxSetVariables();
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_refresh_con_canton_cb

  // ---------- Refresh con_toma_administrativa
  function do_ajax_form_jap_contrato_mob_refresh_con_toma_administrativa()
  {
    var var_con_toma_administrativa = scAjaxGetFieldSelect("con_toma_administrativa");
    var var_nmgp_refresh_fields = "con_toma_operativa";
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_refresh_con_toma_administrativa(var_con_toma_administrativa, var_nmgp_refresh_fields, var_script_case_init, do_ajax_form_jap_contrato_mob_refresh_con_toma_administrativa_cb);
  } // do_ajax_form_jap_contrato_mob_refresh_con_toma_administrativa

  function do_ajax_form_jap_contrato_mob_refresh_con_toma_administrativa_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    scAjaxSetFields(false);
    scAjaxSetVariables();
    scAjaxShowDebug();
    scAjaxSetMaster();
    scAjaxSetFocus();
  } // do_ajax_form_jap_contrato_mob_refresh_con_toma_administrativa_cb

  // ---------- Event onchange con_abono
  function do_ajax_form_jap_contrato_mob_event_con_abono_onchange()
  {
    var var_con_abono = scAjaxGetFieldText("con_abono");
    var var_con_saldo_pagar = scAjaxGetFieldHidden("con_saldo_pagar");
    var var_con_total_a_pagar = scAjaxGetFieldHidden("con_total_a_pagar");
    var var_con_plazo = scAjaxGetFieldText("con_plazo");
    var var_con_valor_cuota = scAjaxGetFieldHidden("con_valor_cuota");
    var var_con_id = scAjaxGetFieldHidden("con_id");
    var var_con_fecha = scAjaxGetFieldHidden("con_fecha");
    var var_con_lectura_actual = scAjaxGetFieldText("con_lectura_actual");
    var var_con_maxima_lectura = scAjaxGetFieldText("con_maxima_lectura");
    var var_con_numero_contrato = scAjaxGetFieldHidden("con_numero_contrato");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_event_con_abono_onchange(var_con_abono, var_con_saldo_pagar, var_con_total_a_pagar, var_con_plazo, var_con_valor_cuota, var_con_id, var_con_fecha, var_con_lectura_actual, var_con_maxima_lectura, var_con_numero_contrato, var_script_case_init, do_ajax_form_jap_contrato_mob_event_con_abono_onchange_cb);
  } // do_ajax_form_jap_contrato_mob_event_con_abono_onchange

  function do_ajax_form_jap_contrato_mob_event_con_abono_onchange_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "con_abono";
    scEventControl_onChange(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "onchange");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scBtnDisabled();
    scBtnLabel();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_form_jap_contrato_mob_event_con_abono_onchange_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_event_con_abono_onchange_cb
  function do_ajax_form_jap_contrato_mob_event_con_abono_onchange_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_form_jap_contrato_mob_event_con_abono_onchange_cb_after_alert

  // ---------- Event onchange con_plazo
  function do_ajax_form_jap_contrato_mob_event_con_plazo_onchange()
  {
    var var_con_abono = scAjaxGetFieldText("con_abono");
    var var_con_saldo_pagar = scAjaxGetFieldHidden("con_saldo_pagar");
    var var_con_total_a_pagar = scAjaxGetFieldHidden("con_total_a_pagar");
    var var_con_plazo = scAjaxGetFieldText("con_plazo");
    var var_con_valor_cuota = scAjaxGetFieldHidden("con_valor_cuota");
    var var_con_id = scAjaxGetFieldHidden("con_id");
    var var_con_fecha = scAjaxGetFieldHidden("con_fecha");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_event_con_plazo_onchange(var_con_abono, var_con_saldo_pagar, var_con_total_a_pagar, var_con_plazo, var_con_valor_cuota, var_con_id, var_con_fecha, var_script_case_init, do_ajax_form_jap_contrato_mob_event_con_plazo_onchange_cb);
  } // do_ajax_form_jap_contrato_mob_event_con_plazo_onchange

  function do_ajax_form_jap_contrato_mob_event_con_plazo_onchange_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "con_plazo";
    scEventControl_onChange(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "onchange");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scBtnDisabled();
    scBtnLabel();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_form_jap_contrato_mob_event_con_plazo_onchange_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_event_con_plazo_onchange_cb
  function do_ajax_form_jap_contrato_mob_event_con_plazo_onchange_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_form_jap_contrato_mob_event_con_plazo_onchange_cb_after_alert

  // ---------- Event onchange con_propietario
  function do_ajax_form_jap_contrato_mob_event_con_propietario_onchange()
  {
    var var_con_propietario = scAjaxGetFieldSelect("con_propietario");
    var var_con_nombre = scAjaxGetFieldHidden("con_nombre");
    var var_con_cedula = scAjaxGetFieldHidden("con_cedula");
    var var_con_telefono = scAjaxGetFieldHidden("con_telefono");
    var var_con_celular = scAjaxGetFieldHidden("con_celular");
    var var_con_direccion_propietario = scAjaxGetFieldHidden("con_direccion_propietario");
    var var_con_correo = scAjaxGetFieldHidden("con_correo");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_event_con_propietario_onchange(var_con_propietario, var_con_nombre, var_con_cedula, var_con_telefono, var_con_celular, var_con_direccion_propietario, var_con_correo, var_script_case_init, do_ajax_form_jap_contrato_mob_event_con_propietario_onchange_cb);
  } // do_ajax_form_jap_contrato_mob_event_con_propietario_onchange

  function do_ajax_form_jap_contrato_mob_event_con_propietario_onchange_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "con_propietario";
    scEventControl_onChange(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "onchange");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scBtnDisabled();
    scBtnLabel();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_form_jap_contrato_mob_event_con_propietario_onchange_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_event_con_propietario_onchange_cb
  function do_ajax_form_jap_contrato_mob_event_con_propietario_onchange_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
    if (Window_cap)
    {
        x = setTimeout("Window_cap.close()" , 10);
    }
  } // do_ajax_form_jap_contrato_mob_event_con_propietario_onchange_cb_after_alert

  // ---------- Event onchange con_ruta
  function do_ajax_form_jap_contrato_mob_event_con_ruta_onchange()
  {
    var var_con_empresa = scAjaxGetFieldText("con_empresa");
    var var_con_propietario = scAjaxGetFieldSelect("con_propietario");
    var var_con_pais = scAjaxGetFieldSelect("con_pais");
    var var_con_provincia = scAjaxGetFieldSelect("con_provincia");
    var var_con_canton = scAjaxGetFieldSelect("con_canton");
    var var_con_parroquia = scAjaxGetFieldSelect("con_parroquia");
    var var_con_direccion_predio = scAjaxGetFieldText("con_direccion_predio");
    var var_con_toma_administrativa = scAjaxGetFieldSelect("con_toma_administrativa");
    var var_con_toma_operativa = scAjaxGetFieldSelect("con_toma_operativa");
    var var_con_tipo_servicio = scAjaxGetFieldSelect("con_tipo_servicio");
    var var_con_condicion_contrato = scAjaxGetFieldSelect("con_condicion_contrato");
    var var_con_numero_medidor = scAjaxGetFieldText("con_numero_medidor");
    var var_con_fecha = scAjaxGetFieldHidden("con_fecha");
    var var_con_estado = scAjaxGetFieldHidden("con_estado");
    var var_con_motivo_anulacion = scAjaxGetFieldText("con_motivo_anulacion");
    var var_con_tipo_contrato = scAjaxGetFieldSelect("con_tipo_contrato");
    var var_con_total_a_pagar = scAjaxGetFieldHidden("con_total_a_pagar");
    var var_con_abono = scAjaxGetFieldText("con_abono");
    var var_con_plazo = scAjaxGetFieldText("con_plazo");
    var var_con_fecha_instalacion = scAjaxGetFieldText("con_fecha_instalacion");
    var var_con_observaciones = scAjaxGetFieldText("con_observaciones");
    var var_con_usuario_instala = scAjaxGetFieldHidden("con_usuario_instala");
    var var_con_numero_contrato = scAjaxGetFieldHidden("con_numero_contrato");
    var var_con_maxima_lectura = scAjaxGetFieldText("con_maxima_lectura");
    var var_con_lectura_actual = scAjaxGetFieldText("con_lectura_actual");
    var var_con_fecha_lectura = scAjaxGetFieldText("con_fecha_lectura");
    var var_con_ruta = scAjaxGetFieldSelect("con_ruta");
    var var_con_id = scAjaxGetFieldHidden("con_id");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_event_con_ruta_onchange(var_con_empresa, var_con_propietario, var_con_pais, var_con_provincia, var_con_canton, var_con_parroquia, var_con_direccion_predio, var_con_toma_administrativa, var_con_toma_operativa, var_con_tipo_servicio, var_con_condicion_contrato, var_con_numero_medidor, var_con_fecha, var_con_estado, var_con_motivo_anulacion, var_con_tipo_contrato, var_con_total_a_pagar, var_con_abono, var_con_plazo, var_con_fecha_instalacion, var_con_observaciones, var_con_usuario_instala, var_con_numero_contrato, var_con_maxima_lectura, var_con_lectura_actual, var_con_fecha_lectura, var_con_ruta, var_con_id, var_script_case_init, do_ajax_form_jap_contrato_mob_event_con_ruta_onchange_cb);
  } // do_ajax_form_jap_contrato_mob_event_con_ruta_onchange

  function do_ajax_form_jap_contrato_mob_event_con_ruta_onchange_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "con_ruta";
    scEventControl_onChange(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "onchange");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scBtnDisabled();
    scBtnLabel();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_form_jap_contrato_mob_event_con_ruta_onchange_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_event_con_ruta_onchange_cb
  function do_ajax_form_jap_contrato_mob_event_con_ruta_onchange_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_form_jap_contrato_mob_event_con_ruta_onchange_cb_after_alert

  // ---------- Event onchange con_total_a_pagar
  function do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange()
  {
    var var_con_abono = scAjaxGetFieldText("con_abono");
    var var_con_saldo_pagar = scAjaxGetFieldHidden("con_saldo_pagar");
    var var_con_total_a_pagar = scAjaxGetFieldHidden("con_total_a_pagar");
    var var_con_plazo = scAjaxGetFieldText("con_plazo");
    var var_con_valor_cuota = scAjaxGetFieldHidden("con_valor_cuota");
    var var_con_id = scAjaxGetFieldHidden("con_id");
    var var_con_fecha = scAjaxGetFieldHidden("con_fecha");
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn(true);
    x_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange(var_con_abono, var_con_saldo_pagar, var_con_total_a_pagar, var_con_plazo, var_con_valor_cuota, var_con_id, var_con_fecha, var_script_case_init, do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange_cb);
  } // do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange

  function do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange_cb(sResp)
  {
    scAjaxProcOff(true);
    oResp = scAjaxResponse(sResp);
    sFieldValid = "con_total_a_pagar";
    scEventControl_onChange(sFieldValid);
    scAjaxUpdateFieldErrors(sFieldValid, "onchange");
    sFieldErrors = scAjaxListFieldErrors(sFieldValid, false);
    if ("" == sFieldErrors)
    {
      scAjaxHideErrorDisplay(sFieldValid);
    }
    else
    {
      scAjaxShowErrorDisplay(sFieldValid, sFieldErrors);
    }
    if (!scAjaxHasError())
    {
      scAjaxSetFields();
      scAjaxSetVariables();
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scBtnDisabled();
    scBtnLabel();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxSetMaster();
    scAjaxAlert(do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange_cb
  function do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
  } // do_ajax_form_jap_contrato_mob_event_con_total_a_pagar_onchange_cb_after_alert
function scAjaxShowErrorDisplay(sErrorId, sErrorMsg) {
	if ("table" != sErrorId && !$("id_error_display_" + sErrorId + "_frame").hasClass('scFormToastDivFixed')) {
		scAjaxShowErrorDisplay_default(sErrorId, sErrorMsg);
	}
	else {
		scAjaxShowErrorDisplay_toast(sErrorId, sErrorMsg);
	}
} // scAjaxShowErrorDisplay

function scAjaxHideErrorDisplay(sErrorId, sErrorMsg) {
	if ("table" != sErrorId && !$("id_error_display_" + sErrorId + "_frame").hasClass('scFormToastDivFixed')) {
		scAjaxHideErrorDisplay_default(sErrorId, sErrorMsg);
	}
	else {
		scAjaxHideErrorDisplay_toast(sErrorId, sErrorMsg);
	}
} // scAjaxHideErrorDisplay

function scAjaxShowErrorDisplay_toast(sErrorId, sErrorMsg) {
	params = {type: 'error'};
	scJs_alert_sweetalert(sErrorMsg, function() { scAjaxHideErrorDisplay(sErrorId, sErrorMsg); }, scJs_sweetalert_params(params));
} // scAjaxShowErrorDisplay_toast

function scAjaxHideErrorDisplay_toast(sErrorId, bForce) {
	if (document.getElementById("id_error_display_" + sErrorId + "_frame")) {
		if (null == bForce) {
			bForce = true;
		}
		if (bForce) {
			var $oField = $('#id_sc_field_' + sErrorId);
			if (0 < $oField.length) {
				$oField.removeClass(sc_css_status);
			}
		}
	}
} // scAjaxHideErrorDisplay_toast

function scAjaxShowMessage(messageType) {
	scAjaxShowMessage_toast(true, messageType);
} // scAjaxShowMessage_toast

function scAjaxHideMessage() {
} // scAjaxHideMessage_toast

function scAjaxShowMessage_toast(isToast, messageType) {
	if (!oResp["msgDisplay"] || !oResp["msgDisplay"]["msgText"]) {
		return;
	}

	if (oResp["msgDisplay"]["toast"] || isToast) {
		_scAjaxShowMessageToast({title: scMsgDefTitle, message: oResp["msgDisplay"]["msgText"], isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, toastPos: "", type: messageType});
	}
	else {
		scJs_alert(oResp["msgDisplay"]["msgText"], scForm_cancel, {});
	}
} // scAjaxShowMessage_toast

function _scAjaxShowMessageToast(params) {
	var sweetAlertParams = {toast: true, showConfirmButton: false};

	if ("" != params["type"]) {
		sweetAlertParams["type"] = params["type"];
	}

	if ("" != params["title"]) {
		sweetAlertParams["title"] = scAjaxSpecCharParser(params["title"]);
	}

	if ("" != params["toastPos"]) {
		sweetAlertParams["position"] = params["toastPos"];
	}

	if (null == sweetAlertParams["position"]) {
		sweetAlertParams["position"] = "center";
	}

	if (null == sweetAlertParams["timer"]) {
		sweetAlertParams["timer"] = 3000;
	}

	scJs_alert_sweetalert(scAjaxSpecCharParser(params["message"]), scForm_cancel, scJs_sweetalert_params(sweetAlertParams));
} // _scAjaxShowMessageToast

function _scAjaxShowMessage(params) {
	if (params["isToast"]) {
		_scAjaxShowMessageToast(params);
	}
	else {
		if ("" != params["redirUrl"] && "" != params["redirTarget"]) {
            document.form_ajax_redir_2.action = params["redirUrl"];
            document.form_ajax_redir_2.target = params["redirTarget"];
            document.form_ajax_redir_2.nmgp_parms.value = params["redirParams"];
            document.form_ajax_redir_2.script_case_init.value = scMsgDefScInit;
			callbackOk = function() { document.form_ajax_redir_2.submit(); };
		}
		else if ("" != params["redirUrl"] && "" == params["redirTarget"]) {
            document.form_ajax_redir_1.action = params["redirUrl"];
            document.form_ajax_redir_1.nmgp_parms.value = params["redirParams"];
			callbackOk = function() { document.form_ajax_redir_1.submit(); };
		}
		else {
			callbackOk = scForm_cancel;
		}

		var alertParams = {title: params["title"]};
		if (0 < params["width"]) {
			alertParams["width"] = params["width"];
		}
		if (0 < params["timeout"]) {
			alertParams["timer"] = params["timeout"] * 1000;
		}
		if (!params["showButton"]) {
			alertParams["showConfirmButton"] = false;
		}
		if ("" != params["buttonLabel"]) {
			alertParams["confirmButtonText"] = params["buttonLabel"];
		}
		if ("" != params["type"]) {
			alertParams["type"] = params["type"];
		}

		scJs_alert_sweetalert(params["message"], callbackOk, scJs_sweetalert_params(alertParams));
	}
} // _scAjaxShowMessage

<?php
$confirmButtonClass = '';
$cancelButtonClass  = '';
$confirmButtonFA    = '';
$cancelButtonFA     = '';
$confirmButtonFAPos = '';
$cancelButtonFAPos  = '';
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['style']) && '' != $this->arr_buttons['bsweetalert_ok']['style']) {
	$confirmButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_ok']['style'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['style']) && '' != $this->arr_buttons['bsweetalert_cancel']['style']) {
	$cancelButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_cancel']['style'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) {
	$confirmButtonFA = $this->arr_buttons['bsweetalert_ok']['fontawesomeicon'];
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) {
	$cancelButtonFA = $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon'];
}
if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_ok']['display_position']) {
	$confirmButtonFAPos = 'text_right';
}
if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_cancel']['display_position']) {
	$cancelButtonFAPos = 'text_right';
}
?>
function scJs_alert(message, callbackOk, params) {
    message = message.replace(/<!--SC_NL-->/gi, "<br />");
	scJs_alert_sweetalert(message, callbackOk, scJs_sweetalert_params(params));
} // scJs_alert

function scJs_confirm(message, callbackOk, callbackCancel) {
	scJs_confirm_sweetalert(message, callbackOk, callbackCancel);
} // scJs_confirm

function scJs_alert_sweetalert(message, callbackOk, params) {
	var sweetAlertConfig;

	if (null == params) {
		params = {};
	}

	params['html'] = message;

	sweetAlertConfig = params;

	Swal.fire(sweetAlertConfig).then(function (result) {
		if (result.value) {
			if (typeof callbackOk == "function") {
				callbackOk();
			}
		}
		else if (result.dismiss == Swal.DismissReason.timer || result.dismiss == Swal.DismissReason.close) {
			Swal.close();
            $(".swal2-container.swal2-shown").remove();
		}
        else {
            console.log(result.dismiss);
        }
	});
} // scJs_alert_sweetalert

function scJs_confirm_sweetalert(message, callbackOk, callbackCancel) {
	var sweetAlertConfig, params = {};

	params['html'] = message;
	params['type'] = 'question';
	params['showCancelButton'] = true;

	sweetAlertConfig = scJs_sweetalert_params(params);

	Swal.fire(sweetAlertConfig).then(function (result) {
		if (result.value) {
			callbackOk();
		}
		else if (result.dismiss === Swal.DismissReason.backdrop || result.dismiss === Swal.DismissReason.cancel || result.dismiss === Swal.DismissReason.esc) {
			callbackCancel();
		}
	});
} // scJs_confirm_sweetalert

function scJs_sweetalert_params(params) {
	var parName, confirmText, confirmFA, confirmPos, cancelText, cancelFA, cancelPos, sweetAlertConfig;

	sweetAlertConfig = {
		customClass: {
			popup: 'scSweetAlertPopup',
			header: 'scSweetAlertHeader',
			content: 'scSweetAlertMessage',
			confirmButton: '<?php echo $confirmButtonClass; ?>',
			cancelButton: '<?php echo $cancelButtonClass; ?>'
		}
	};

	confirmText = '<?php echo isset($this->arr_buttons['bsweetalert_ok']['value']) ? $this->arr_buttons['bsweetalert_ok']['value'] : $this->Ini->Nm_lang['lang_btns_cfrm'] ?>';
	confirmFA = '<?php echo $confirmButtonFA ?>';
	confirmPos = '<?php echo $confirmButtonFAPos ?>';
	cancelText = '<?php echo isset($this->arr_buttons['bsweetalert_cancel']['value']) ? $this->arr_buttons['bsweetalert_cancel']['value'] : $this->Ini->Nm_lang['lang_btns_cncl'] ?>';
	cancelFA = '<?php echo $cancelButtonFA ?>';
	cancelPos = '<?php echo $cancelButtonFAPos ?>';

	for (parName in params) {
		if ('confirmButtonText' == parName) {
			confirmText = params[parName];
		}
		else if ('confirmButtonFA' == parName) {
			confirmFA = params[parName];
		}
		else if ('confirmButtonFAPos' == parName) {
			confirmPos = params[parName];
		}
		else if ('cancelButtonText' == parName) {
			cancelText = params[parName];
		}
		else if ('cancelButtonFA' == parName) {
			cancelFA = params[parName];
		}
		else if ('cancelButtonFAPos' == parName) {
			cancelPos = params[parName];
		}
		else {
			sweetAlertConfig[parName] = params[parName];
		}
	}

	if ('' != confirmFA) {
		if ('text_right' == confirmPos) {
			confirmText = '<i class="fas ' + confirmFA + '"></i> ' + confirmText;
		}
		else {
			confirmText += ' <i class="fas ' + confirmFA + '"></i>';
		}
	}
	if ('' != cancelFA) {
		if ('text_right' == cancelPos) {
			cancelText = '<i class="fas ' + cancelFA + '"></i> ' + cancelText;
		}
		else {
			cancelText += ' <i class="fas ' + cancelFA + '"></i>';
		}
	}

	sweetAlertConfig['confirmButtonText'] = confirmText;
	sweetAlertConfig['cancelButtonText'] = cancelText;

	if (sweetAlertConfig['toast']) {
		sweetAlertConfig['showConfirmButton'] = false;
		sweetAlertConfig['showCancelButton'] = false;
		sweetAlertConfig['customClass']['popup'] = 'scToastPopup';
		sweetAlertConfig['customClass']['header'] = 'scToastHeader';
		sweetAlertConfig['customClass']['content'] = 'scToastMessage';
		if (null == sweetAlertConfig['timer']) {
			sweetAlertConfig['timer'] = 3000;
		}
		if (null == sweetAlertConfig["position"]) {
			sweetAlertConfig["position"] = "center";
		}
	}

	return sweetAlertConfig;
} // scJs_sweetalert_params

  // ---------- Form
  function do_ajax_form_jap_contrato_mob_submit_form()
  {
    if (scEventControl_active("")) {
      setTimeout(function() { do_ajax_form_jap_contrato_mob_submit_form(); }, 500);
      return;
    }
    scAjaxHideMessage();
    var var_con_motivo_anulacion = scAjaxGetFieldText("con_motivo_anulacion");
    var var_con_fecha = scAjaxGetFieldHidden("con_fecha");
    var var_con_sino = scAjaxGetFieldHidden("con_sino");
    var var_con_id = scAjaxGetFieldHidden("con_id");
    var var_con_numero_contrato = scAjaxGetFieldHidden("con_numero_contrato");
    var var_con_tipo_contrato = scAjaxGetFieldSelect("con_tipo_contrato");
    var var_con_propietario = scAjaxGetFieldSelect("con_propietario");
    var var_con_nombre = scAjaxGetFieldHidden("con_nombre");
    var var_con_cedula = scAjaxGetFieldHidden("con_cedula");
    var var_con_telefono = scAjaxGetFieldHidden("con_telefono");
    var var_con_celular = scAjaxGetFieldHidden("con_celular");
    var var_con_direccion_propietario = scAjaxGetFieldHidden("con_direccion_propietario");
    var var_con_correo = scAjaxGetFieldHidden("con_correo");
    var var_con_estado = scAjaxGetFieldHidden("con_estado");
    var var_con_pais = scAjaxGetFieldSelect("con_pais");
    var var_con_provincia = scAjaxGetFieldSelect("con_provincia");
    var var_con_canton = scAjaxGetFieldSelect("con_canton");
    var var_con_parroquia = scAjaxGetFieldSelect("con_parroquia");
    var var_con_comunidad = scAjaxGetFieldSelect("con_comunidad");
    var var_con_sector = scAjaxGetFieldSelect("con_sector");
    var var_con_numero_censo = scAjaxGetFieldText("con_numero_censo");
    var var_con_direccion_predio = scAjaxGetFieldText("con_direccion_predio");
    var var_con_toma_administrativa = scAjaxGetFieldSelect("con_toma_administrativa");
    var var_con_toma_operativa = scAjaxGetFieldSelect("con_toma_operativa");
    var var_con_tipo_servicio = scAjaxGetFieldSelect("con_tipo_servicio");
    var var_con_condicion_contrato = scAjaxGetFieldSelect("con_condicion_contrato");
    var var_con_ruta = scAjaxGetFieldSelect("con_ruta");
    var var_con_orden_lecturas = scAjaxGetFieldText("con_orden_lecturas");
    var var_con_fecha_instalacion = scAjaxGetFieldText("con_fecha_instalacion");
    var var_con_numero_medidor = scAjaxGetFieldText("con_numero_medidor");
    var var_con_maxima_lectura = scAjaxGetFieldText("con_maxima_lectura");
    var var_con_lectura_actual = scAjaxGetFieldText("con_lectura_actual");
    var var_con_fecha_lectura = scAjaxGetFieldText("con_fecha_lectura");
    var var_con_usuario_instala = scAjaxGetFieldHidden("con_usuario_instala");
    var var_con_observaciones = scAjaxGetFieldText("con_observaciones");
    var var_con_numero_corte = scAjaxGetFieldText("con_numero_corte");
    var var_con_total_a_pagar = scAjaxGetFieldHidden("con_total_a_pagar");
    var var_con_abono = scAjaxGetFieldText("con_abono");
    var var_con_saldo_pagar = scAjaxGetFieldHidden("con_saldo_pagar");
    var var_con_plazo = scAjaxGetFieldText("con_plazo");
    var var_con_valor_cuota = scAjaxGetFieldHidden("con_valor_cuota");
    var var_con_empresa = scAjaxGetFieldText("con_empresa");
    var var_nm_form_submit = document.F1.nm_form_submit.value;
    var var_nmgp_url_saida = document.F1.nmgp_url_saida.value;
    var var_nmgp_opcao = document.F1.nmgp_opcao.value;
    var var_nmgp_ancora = document.F1.nmgp_ancora.value;
    var var_nmgp_num_form = document.F1.nmgp_num_form.value;
    var var_nmgp_parms = document.F1.nmgp_parms.value;
    var var_script_case_init = document.F1.script_case_init.value;
    var var_csrf_token = scAjaxGetFieldText("csrf_token");
    scAjaxProcOn();
    x_ajax_form_jap_contrato_mob_submit_form(var_con_motivo_anulacion, var_con_fecha, var_con_sino, var_con_id, var_con_numero_contrato, var_con_tipo_contrato, var_con_propietario, var_con_nombre, var_con_cedula, var_con_telefono, var_con_celular, var_con_direccion_propietario, var_con_correo, var_con_estado, var_con_pais, var_con_provincia, var_con_canton, var_con_parroquia, var_con_comunidad, var_con_sector, var_con_numero_censo, var_con_direccion_predio, var_con_toma_administrativa, var_con_toma_operativa, var_con_tipo_servicio, var_con_condicion_contrato, var_con_ruta, var_con_orden_lecturas, var_con_fecha_instalacion, var_con_numero_medidor, var_con_maxima_lectura, var_con_lectura_actual, var_con_fecha_lectura, var_con_usuario_instala, var_con_observaciones, var_con_numero_corte, var_con_total_a_pagar, var_con_abono, var_con_saldo_pagar, var_con_plazo, var_con_valor_cuota, var_con_empresa, var_nm_form_submit, var_nmgp_url_saida, var_nmgp_opcao, var_nmgp_ancora, var_nmgp_num_form, var_nmgp_parms, var_script_case_init, var_csrf_token, do_ajax_form_jap_contrato_mob_submit_form_cb);
  } // do_ajax_form_jap_contrato_mob_submit_form

  function do_ajax_form_jap_contrato_mob_submit_form_cb(sResp)
  {
    scAjaxProcOff();
    oResp = scAjaxResponse(sResp);
    scAjaxUpdateErrors("valid");
    sAppErrors = scAjaxListErrors(true);
    if ("" == sAppErrors || "menu_link" == document.F1.nmgp_opcao.value)
    {
      $('.sc-js-ui-statusimg').css('display', 'none');
      scAjaxHideErrorDisplay("table");
    }
    else
    {
      scAjaxError_markList();
      scAjaxShowErrorDisplay("table", sAppErrors);
    }
    if (scAjaxIsOk())
    {
      scResetFormChanges();
      scAjaxShowMessage("success");
      scAjaxHideErrorDisplay("table");
      scAjaxHideErrorDisplay("con_motivo_anulacion");
      scAjaxHideErrorDisplay("con_fecha");
      scAjaxHideErrorDisplay("con_sino");
      scAjaxHideErrorDisplay("con_id");
      scAjaxHideErrorDisplay("con_numero_contrato");
      scAjaxHideErrorDisplay("con_tipo_contrato");
      scAjaxHideErrorDisplay("con_propietario");
      scAjaxHideErrorDisplay("con_nombre");
      scAjaxHideErrorDisplay("con_cedula");
      scAjaxHideErrorDisplay("con_telefono");
      scAjaxHideErrorDisplay("con_celular");
      scAjaxHideErrorDisplay("con_direccion_propietario");
      scAjaxHideErrorDisplay("con_correo");
      scAjaxHideErrorDisplay("con_estado");
      scAjaxHideErrorDisplay("con_pais");
      scAjaxHideErrorDisplay("con_provincia");
      scAjaxHideErrorDisplay("con_canton");
      scAjaxHideErrorDisplay("con_parroquia");
      scAjaxHideErrorDisplay("con_comunidad");
      scAjaxHideErrorDisplay("con_sector");
      scAjaxHideErrorDisplay("con_numero_censo");
      scAjaxHideErrorDisplay("con_direccion_predio");
      scAjaxHideErrorDisplay("con_toma_administrativa");
      scAjaxHideErrorDisplay("con_toma_operativa");
      scAjaxHideErrorDisplay("con_tipo_servicio");
      scAjaxHideErrorDisplay("con_condicion_contrato");
      scAjaxHideErrorDisplay("con_ruta");
      scAjaxHideErrorDisplay("con_orden_lecturas");
      scAjaxHideErrorDisplay("con_fecha_instalacion");
      scAjaxHideErrorDisplay("con_numero_medidor");
      scAjaxHideErrorDisplay("con_maxima_lectura");
      scAjaxHideErrorDisplay("con_lectura_actual");
      scAjaxHideErrorDisplay("con_fecha_lectura");
      scAjaxHideErrorDisplay("con_usuario_instala");
      scAjaxHideErrorDisplay("con_observaciones");
      scAjaxHideErrorDisplay("con_numero_corte");
      scAjaxHideErrorDisplay("materiales");
      scAjaxHideErrorDisplay("rubros");
      scAjaxHideErrorDisplay("con_total_a_pagar");
      scAjaxHideErrorDisplay("con_abono");
      scAjaxHideErrorDisplay("con_saldo_pagar");
      scAjaxHideErrorDisplay("con_plazo");
      scAjaxHideErrorDisplay("con_valor_cuota");
      scAjaxHideErrorDisplay("cuotas");
      scAjaxHideErrorDisplay("con_empresa");
      scLigEditLookupCall();
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_contrato_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_contrato_mob']['dashboard_info']['under_dashboard']) {
?>
      var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_contrato_mob']['dashboard_info']['parent_widget']; ?>']");
      if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.nm_gp_move) {
        dbParentFrame[0].contentWindow.nm_gp_move("igual");
      }
<?php
}
?>
    }
    Nm_Proc_Atualiz = false;
    if (!scAjaxHasError())
    {
      scAjaxSetFields(false);
      scAjaxSetVariables();
      scAjaxSetMaster();
      if (scInlineFormSend())
      {
        self.parent.tb_remove();
        return;
      }
    }
    scAjaxShowDebug();
    scAjaxSetDisplay();
    scBtnDisabled();
    scBtnLabel();
    scAjaxSetLabel();
    scAjaxSetReadonly();
    scAjaxAlert(do_ajax_form_jap_contrato_mob_submit_form_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_submit_form_cb
  function do_ajax_form_jap_contrato_mob_submit_form_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
    scAjaxRedir();
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
  } // do_ajax_form_jap_contrato_mob_submit_form_cb_after_alert

  var scStatusDetail = {};
  scStatusDetail["form_jap_materiales_contrato_mob"] = "off";
  scStatusDetail["form_jap_rubro_contrato_mob"] = "off";
  scStatusDetail["grid_jap_cuotas_contrato"] = "off";

  function do_ajax_form_jap_contrato_mob_navigate_form()
  {
    perform_ajax_form_jap_contrato_mob_navigate_form();
  }

  function perform_ajax_form_jap_contrato_mob_navigate_form()
  {
    if (scRefreshTable())
    {
      return;
    }
    scAjaxHideMessage();
    scAjaxHideErrorDisplay("table");
    scAjaxHideErrorDisplay("con_motivo_anulacion");
    scAjaxHideErrorDisplay("con_fecha");
    scAjaxHideErrorDisplay("con_sino");
    scAjaxHideErrorDisplay("con_id");
    scAjaxHideErrorDisplay("con_numero_contrato");
    scAjaxHideErrorDisplay("con_tipo_contrato");
    scAjaxHideErrorDisplay("con_propietario");
    scAjaxHideErrorDisplay("con_nombre");
    scAjaxHideErrorDisplay("con_cedula");
    scAjaxHideErrorDisplay("con_telefono");
    scAjaxHideErrorDisplay("con_celular");
    scAjaxHideErrorDisplay("con_direccion_propietario");
    scAjaxHideErrorDisplay("con_correo");
    scAjaxHideErrorDisplay("con_estado");
    scAjaxHideErrorDisplay("con_pais");
    scAjaxHideErrorDisplay("con_provincia");
    scAjaxHideErrorDisplay("con_canton");
    scAjaxHideErrorDisplay("con_parroquia");
    scAjaxHideErrorDisplay("con_comunidad");
    scAjaxHideErrorDisplay("con_sector");
    scAjaxHideErrorDisplay("con_numero_censo");
    scAjaxHideErrorDisplay("con_direccion_predio");
    scAjaxHideErrorDisplay("con_toma_administrativa");
    scAjaxHideErrorDisplay("con_toma_operativa");
    scAjaxHideErrorDisplay("con_tipo_servicio");
    scAjaxHideErrorDisplay("con_condicion_contrato");
    scAjaxHideErrorDisplay("con_ruta");
    scAjaxHideErrorDisplay("con_orden_lecturas");
    scAjaxHideErrorDisplay("con_fecha_instalacion");
    scAjaxHideErrorDisplay("con_numero_medidor");
    scAjaxHideErrorDisplay("con_maxima_lectura");
    scAjaxHideErrorDisplay("con_lectura_actual");
    scAjaxHideErrorDisplay("con_fecha_lectura");
    scAjaxHideErrorDisplay("con_usuario_instala");
    scAjaxHideErrorDisplay("con_observaciones");
    scAjaxHideErrorDisplay("con_numero_corte");
    scAjaxHideErrorDisplay("materiales");
    scAjaxHideErrorDisplay("rubros");
    scAjaxHideErrorDisplay("con_total_a_pagar");
    scAjaxHideErrorDisplay("con_abono");
    scAjaxHideErrorDisplay("con_saldo_pagar");
    scAjaxHideErrorDisplay("con_plazo");
    scAjaxHideErrorDisplay("con_valor_cuota");
    scAjaxHideErrorDisplay("cuotas");
    scAjaxHideErrorDisplay("con_empresa");
    var var_con_id = document.F2.con_id.value;
    var var_nm_form_submit = document.F2.nm_form_submit.value;
    var var_nmgp_opcao = document.F2.nmgp_opcao.value;
    var var_nmgp_ordem = document.F2.nmgp_ordem.value;
    var var_nmgp_arg_dyn_search = document.F2.nmgp_arg_dyn_search.value;
    var var_script_case_init = document.F2.script_case_init.value;
    scAjaxProcOn();
    scStatusDetail["form_jap_materiales_contrato_mob"] = "on";
    scStatusDetail["form_jap_rubro_contrato_mob"] = "on";
    scStatusDetail["grid_jap_cuotas_contrato"] = "on";
    x_ajax_form_jap_contrato_mob_navigate_form(var_con_id, var_nm_form_submit, var_nmgp_opcao, var_nmgp_ordem, var_nmgp_arg_dyn_search, var_script_case_init, do_ajax_form_jap_contrato_mob_navigate_form_cb);
  } // do_ajax_form_jap_contrato_mob_navigate_form

  var scMasterDetailParentIframe = "<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_jap_contrato_mob']['dashboard_info']['parent_widget'] ?>";
  var scMasterDetailIframe = {};
<?php
foreach ($this->Ini->sc_lig_iframe as $tmp_i => $tmp_v)
{
?>
  scMasterDetailIframe["<?php echo $tmp_i; ?>"] = "<?php echo $tmp_v; ?>";
<?php
}
?>
  function do_ajax_form_jap_contrato_mob_navigate_form_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    if (oResp['empty_filter'] && oResp['empty_filter'] == "ok")
    {
        document.F5.nmgp_opcao.value = "inicio";
        document.F5.nmgp_parms.value = "";
        document.F5.submit();
    }
    scAjaxClearErrors()
    scResetFormChanges()
    sc_mupload_ok = true;
    scAjaxSetFields(false);
    scAjaxSetVariables();
    document.F2.con_id.value = scAjaxGetKeyValue("con_id");
    scAjaxShowDebug();
    scAjaxSetLabel(true);
    scAjaxSetReadonly(true);
    scAjaxSetMaster();
    scAjaxSetNavStatus("t");
    scAjaxSetNavStatus("b");
    scAjaxSetDisplay(true);
    if (scMasterDetailIframe && scMasterDetailIframe["nmsc_iframe_liga_form_jap_materiales_contrato_mob"] && "nmsc_iframe_liga_form_jap_materiales_contrato_mob" != scMasterDetailIframe["nmsc_iframe_liga_form_jap_materiales_contrato_mob"]) {
        scMoveMasterDetail(scMasterDetailIframe["nmsc_iframe_liga_form_jap_materiales_contrato_mob"]);
    }
    else {
        document.getElementById('nmsc_iframe_liga_form_jap_materiales_contrato_mob').contentWindow.nm_move('apl_detalhe', true, '300');
        document.getElementById('nmsc_iframe_liga_form_jap_materiales_contrato_mob').style.height = "300";
        document.getElementById('nmsc_iframe_liga_form_jap_materiales_contrato_mob').style.display = "none";
    }
    if (scMasterDetailIframe && scMasterDetailIframe["nmsc_iframe_liga_form_jap_rubro_contrato_mob"] && "nmsc_iframe_liga_form_jap_rubro_contrato_mob" != scMasterDetailIframe["nmsc_iframe_liga_form_jap_rubro_contrato_mob"]) {
        scMoveMasterDetail(scMasterDetailIframe["nmsc_iframe_liga_form_jap_rubro_contrato_mob"]);
    }
    else {
        document.getElementById('nmsc_iframe_liga_form_jap_rubro_contrato_mob').contentWindow.nm_move('apl_detalhe', true, '300');
        document.getElementById('nmsc_iframe_liga_form_jap_rubro_contrato_mob').style.height = "300";
        document.getElementById('nmsc_iframe_liga_form_jap_rubro_contrato_mob').style.display = "none";
    }
    if (scMasterDetailIframe && scMasterDetailIframe["nmsc_iframe_liga_grid_jap_cuotas_contrato"] && "nmsc_iframe_liga_grid_jap_cuotas_contrato" != scMasterDetailIframe["nmsc_iframe_liga_grid_jap_cuotas_contrato"]) {
        scMoveMasterDetail(scMasterDetailIframe["nmsc_iframe_liga_grid_jap_cuotas_contrato"]);
    }
    else {
        if (oResp["navSummary"].reg_tot != 0) {
            document.getElementById('nmsc_iframe_liga_grid_jap_cuotas_contrato').contentWindow.nm_move('apl_detalhe', true, '300');
        }
    }
    scAjaxSetBtnVars();
    $('.sc-js-ui-statusimg').css('display', 'none');
    scAjaxAlert(do_ajax_form_jap_contrato_mob_navigate_form_cb_after_alert);
  } // do_ajax_form_jap_contrato_mob_navigate_form_cb
  function do_ajax_form_jap_contrato_mob_navigate_form_cb_after_alert() {
    scAjaxMessage();
    scAjaxJavascript();
    scAjaxSetFocus();
<?php
if ($this->Embutida_form)
{
?>
    do_ajax_form_jap_contrato_mob_restore_buttons();
<?php
}
?>
    if (hasJsFormOnload)
    {
      sc_form_onload();
    }
    scAjaxProcOff();
  } // do_ajax_form_jap_contrato_mob_navigate_form_cb_after_alert

  function sc_hide_form_jap_contrato_mob_form()
  {
    for (var block_id in ajax_block_id) {
      $("#div_" + ajax_block_id[block_id]).hide();
    }
  } // sc_hide_form_jap_contrato_mob_form


  function do_ajax_form_jap_contrato_mob_lkpedt_refresh_con_propietario()
  {
    var var_con_propietario = scAjaxGetFieldSelect("con_propietario");
    var var_script_case_init = document.F1.script_case_init.value;
    var nmgp_refresh_fields = "con_propietario";
    x_ajax_form_jap_contrato_mob_lkpedt_refresh_con_propietario(var_con_propietario, nmgp_refresh_fields, var_script_case_init, do_ajax_form_jap_contrato_mob_lkpedt_refresh_con_propietario_cb);
  } // do_ajax_form_jap_contrato_mob_lkpedt_refresh_con_propietario

  function do_ajax_form_jap_contrato_mob_lkpedt_refresh_con_propietario_cb(sResp)
  {
    oResp = scAjaxResponse(sResp);
    scAjaxRedir();
    scAjaxSetFields(false);
    scAjaxSetVariables();
  } // do_ajax_form_jap_contrato_mob_lkpedt_refresh_con_propietario_cb

  function scAjaxDetailStatus(sDetailApp)
  {
    if (scStatusDetail[sDetailApp])
    {
      scStatusDetail[sDetailApp] = "off";
      if (document.getElementById("nmsc_iframe_liga_" + sDetailApp)) {
        document.getElementById("nmsc_iframe_liga_" + sDetailApp).style.display = "";
      }
    }
    else
    {
      mobileSuffix = sDetailApp.slice(-4);
      if ("_mob" != mobileSuffix && scStatusDetail[sDetailApp + "_mob"])
      {
        scStatusDetail[sDetailApp + "_mob"] = "off";
        if (document.getElementById("nmsc_iframe_liga_" + sDetailApp + "_mob")) {
          document.getElementById("nmsc_iframe_liga_" + sDetailApp + "_mob").style.display = "";
        }
      }
    }
    if (scAjaxDetailProc())
    {
      scAjaxProcOff();
    }
  } // scAjaxDetailStatus

  function scAjaxDetailHeight(sDetailApp, iDetailHeight)
  {
    $("#nmsc_iframe_liga_" + sDetailApp).css("height", iDetailHeight + "px");
    $("#nmsc_iframe_liga_" + sDetailApp + "_mob").css("height", iDetailHeight + "px");
  } // scAjaxDetailHeight

  function scAjaxDetailProc()
  {
    if ("off" == scStatusDetail["form_jap_materiales_contrato_mob"] && "off" == scStatusDetail["form_jap_rubro_contrato_mob"] && "off" == scStatusDetail["grid_jap_cuotas_contrato"])
    {
      return true;
    }
    return false;
  } // scAjaxDetailProc


  var ajax_error_geral = "";

  var ajax_error_type = new Array("valid", "onblur", "onchange", "onclick", "onfocus");

  var ajax_field_list = new Array();
  var ajax_field_Dt_Hr = new Array();
  ajax_field_list[0] = "con_motivo_anulacion";
  ajax_field_list[1] = "con_fecha";
  ajax_field_list[2] = "con_sino";
  ajax_field_list[3] = "con_id";
  ajax_field_list[4] = "con_numero_contrato";
  ajax_field_list[5] = "con_tipo_contrato";
  ajax_field_list[6] = "con_propietario";
  ajax_field_list[7] = "con_nombre";
  ajax_field_list[8] = "con_cedula";
  ajax_field_list[9] = "con_telefono";
  ajax_field_list[10] = "con_celular";
  ajax_field_list[11] = "con_direccion_propietario";
  ajax_field_list[12] = "con_correo";
  ajax_field_list[13] = "con_estado";
  ajax_field_list[14] = "con_pais";
  ajax_field_list[15] = "con_provincia";
  ajax_field_list[16] = "con_canton";
  ajax_field_list[17] = "con_parroquia";
  ajax_field_list[18] = "con_comunidad";
  ajax_field_list[19] = "con_sector";
  ajax_field_list[20] = "con_numero_censo";
  ajax_field_list[21] = "con_direccion_predio";
  ajax_field_list[22] = "con_toma_administrativa";
  ajax_field_list[23] = "con_toma_operativa";
  ajax_field_list[24] = "con_tipo_servicio";
  ajax_field_list[25] = "con_condicion_contrato";
  ajax_field_list[26] = "con_ruta";
  ajax_field_list[27] = "con_orden_lecturas";
  ajax_field_list[28] = "con_fecha_instalacion";
  ajax_field_list[29] = "con_numero_medidor";
  ajax_field_list[30] = "con_maxima_lectura";
  ajax_field_list[31] = "con_lectura_actual";
  ajax_field_list[32] = "con_fecha_lectura";
  ajax_field_list[33] = "con_usuario_instala";
  ajax_field_list[34] = "con_observaciones";
  ajax_field_list[35] = "con_numero_corte";
  ajax_field_list[36] = "materiales";
  ajax_field_list[37] = "rubros";
  ajax_field_list[38] = "con_total_a_pagar";
  ajax_field_list[39] = "con_abono";
  ajax_field_list[40] = "con_saldo_pagar";
  ajax_field_list[41] = "con_plazo";
  ajax_field_list[42] = "con_valor_cuota";
  ajax_field_list[43] = "cuotas";
  ajax_field_list[44] = "con_empresa";

  var ajax_block_list = new Array();
  ajax_block_list[0] = "0";
  ajax_block_list[1] = "1";
  ajax_block_list[2] = "2";
  ajax_block_list[3] = "3";
  ajax_block_list[4] = "4";
  ajax_block_list[5] = "5";
  ajax_block_list[6] = "6";
  ajax_block_list[7] = "7";
  ajax_block_list[8] = "8";

  var ajax_error_list = {
    "con_motivo_anulacion": {"label": "<?php echo $this->Ini->Nm_lang['lang_motivo_rechazo'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_fecha": {"label": "<?php echo $this->Ini->Nm_lang['lang_fecha'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_sino": {"label": "Con Sino", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_id": {"label": "<?php echo $this->Ini->Nm_lang['lang_solicitud'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_numero_contrato": {"label": "<?php echo $this->Ini->Nm_lang['lang_numero_contrato'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_tipo_contrato": {"label": "<?php echo $this->Ini->Nm_lang['lang_tipo_contrato'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_propietario": {"label": "<?php echo $this->Ini->Nm_lang['lang_propietario'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_nombre": {"label": "<?php echo $this->Ini->Nm_lang['lang_lot_nombre_completo'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_cedula": {"label": "<?php echo $this->Ini->Nm_lang['lang_lot_identificacion'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_telefono": {"label": "<?php echo $this->Ini->Nm_lang['lang_lot_telefono'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_celular": {"label": "<?php echo $this->Ini->Nm_lang['lang_celular'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_direccion_propietario": {"label": "<?php echo $this->Ini->Nm_lang['lang_lot_direccion_propietario'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_correo": {"label": "<?php echo $this->Ini->Nm_lang['lang_email'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_estado": {"label": "<?php echo $this->Ini->Nm_lang['lang_estado'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_pais": {"label": "<?php echo $this->Ini->Nm_lang['lang_pais'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_provincia": {"label": "<?php echo $this->Ini->Nm_lang['lang_provincia'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_canton": {"label": "<?php echo $this->Ini->Nm_lang['lang_canton'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_parroquia": {"label": "<?php echo $this->Ini->Nm_lang['lang_parroquia'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_comunidad": {"label": "<?php echo $this->Ini->Nm_lang['lang_comunidad'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_sector": {"label": "<?php echo $this->Ini->Nm_lang['lang_sector'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_numero_censo": {"label": "<?php echo $this->Ini->Nm_lang['lang_numero_censo'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_direccion_predio": {"label": "<?php echo $this->Ini->Nm_lang['lang_direccion'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_toma_administrativa": {"label": "<?php echo $this->Ini->Nm_lang['lang_toma_administrativa'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_toma_operativa": {"label": "<?php echo $this->Ini->Nm_lang['lang_toma_operativa'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_tipo_servicio": {"label": "<?php echo $this->Ini->Nm_lang['lang_tipo_servicio'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_condicion_contrato": {"label": "<?php echo $this->Ini->Nm_lang['lang_condicion_contrato'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_ruta": {"label": "<?php echo $this->Ini->Nm_lang['lang_ruta'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_orden_lecturas": {"label": "<?php echo $this->Ini->Nm_lang['lang_orden_ingreso'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_fecha_instalacion": {"label": "<?php echo $this->Ini->Nm_lang['lang_fecha_instalacion'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_numero_medidor": {"label": "<?php echo $this->Ini->Nm_lang['lang_numero_medidor'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_maxima_lectura": {"label": "<?php echo $this->Ini->Nm_lang['lang_lectura_maxima'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_lectura_actual": {"label": "<?php echo $this->Ini->Nm_lang['lang_lectura_actual'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_fecha_lectura": {"label": "<?php echo $this->Ini->Nm_lang['lang_fecha_ultima_lectura'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_usuario_instala": {"label": "<?php echo $this->Ini->Nm_lang['lang_usuario_instala'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_observaciones": {"label": "<?php echo $this->Ini->Nm_lang['lang_observacion'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_numero_corte": {"label": "Con Numero Corte", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "materiales": {"label": "<?php echo $this->Ini->Nm_lang['lang_materiales'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "rubros": {"label": "<?php echo $this->Ini->Nm_lang['lang_rubros'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_total_a_pagar": {"label": "<?php echo $this->Ini->Nm_lang['lang_total_pagar'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_abono": {"label": "<?php echo $this->Ini->Nm_lang['lang_abono'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_saldo_pagar": {"label": "<?php echo $this->Ini->Nm_lang['lang_saldo_pagar'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_plazo": {"label": "Nro. <?php echo $this->Ini->Nm_lang['lang_cuotas'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_valor_cuota": {"label": "<?php echo $this->Ini->Nm_lang['lang_cuotas_de'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "cuotas": {"label": "<?php echo $this->Ini->Nm_lang['lang_cuotas'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5},
    "con_empresa": {"label": "<?php echo $this->Ini->Nm_lang['lang_empresa'] ?>", "valid": new Array(), "onblur": new Array(), "onchange": new Array(), "onclick": new Array(), "onfocus": new Array(), "timeout": 5}
  };
  var ajax_error_timeout = 5;

  var ajax_block_id = {
    "0": "hidden_bloco_0",
    "1": "hidden_bloco_1",
    "2": "hidden_bloco_2",
    "3": "hidden_bloco_3",
    "4": "hidden_bloco_4",
    "5": "hidden_bloco_5",
    "6": "hidden_bloco_6",
    "7": "hidden_bloco_7",
    "8": "hidden_bloco_8"
  };

  var ajax_block_tab = {
    "hidden_bloco_0": "",
    "hidden_bloco_1": "",
    "hidden_bloco_2": "",
    "hidden_bloco_3": "",
    "hidden_bloco_4": "",
    "hidden_bloco_5": "",
    "hidden_bloco_6": "",
    "hidden_bloco_7": "",
    "hidden_bloco_8": ""
  };

  var ajax_field_mult = {
    "con_motivo_anulacion": new Array(),
    "con_fecha": new Array(),
    "con_sino": new Array(),
    "con_id": new Array(),
    "con_numero_contrato": new Array(),
    "con_tipo_contrato": new Array(),
    "con_propietario": new Array(),
    "con_nombre": new Array(),
    "con_cedula": new Array(),
    "con_telefono": new Array(),
    "con_celular": new Array(),
    "con_direccion_propietario": new Array(),
    "con_correo": new Array(),
    "con_estado": new Array(),
    "con_pais": new Array(),
    "con_provincia": new Array(),
    "con_canton": new Array(),
    "con_parroquia": new Array(),
    "con_comunidad": new Array(),
    "con_sector": new Array(),
    "con_numero_censo": new Array(),
    "con_direccion_predio": new Array(),
    "con_toma_administrativa": new Array(),
    "con_toma_operativa": new Array(),
    "con_tipo_servicio": new Array(),
    "con_condicion_contrato": new Array(),
    "con_ruta": new Array(),
    "con_orden_lecturas": new Array(),
    "con_fecha_instalacion": new Array(),
    "con_numero_medidor": new Array(),
    "con_maxima_lectura": new Array(),
    "con_lectura_actual": new Array(),
    "con_fecha_lectura": new Array(),
    "con_usuario_instala": new Array(),
    "con_observaciones": new Array(),
    "con_numero_corte": new Array(),
    "materiales": new Array(),
    "rubros": new Array(),
    "con_total_a_pagar": new Array(),
    "con_abono": new Array(),
    "con_saldo_pagar": new Array(),
    "con_plazo": new Array(),
    "con_valor_cuota": new Array(),
    "cuotas": new Array(),
    "con_empresa": new Array()
  };
  ajax_field_mult["con_motivo_anulacion"][1] = "con_motivo_anulacion";
  ajax_field_mult["con_fecha"][1] = "con_fecha";
  ajax_field_mult["con_sino"][1] = "con_sino";
  ajax_field_mult["con_id"][1] = "con_id";
  ajax_field_mult["con_numero_contrato"][1] = "con_numero_contrato";
  ajax_field_mult["con_tipo_contrato"][1] = "con_tipo_contrato";
  ajax_field_mult["con_propietario"][1] = "con_propietario";
  ajax_field_mult["con_nombre"][1] = "con_nombre";
  ajax_field_mult["con_cedula"][1] = "con_cedula";
  ajax_field_mult["con_telefono"][1] = "con_telefono";
  ajax_field_mult["con_celular"][1] = "con_celular";
  ajax_field_mult["con_direccion_propietario"][1] = "con_direccion_propietario";
  ajax_field_mult["con_correo"][1] = "con_correo";
  ajax_field_mult["con_estado"][1] = "con_estado";
  ajax_field_mult["con_pais"][1] = "con_pais";
  ajax_field_mult["con_provincia"][1] = "con_provincia";
  ajax_field_mult["con_canton"][1] = "con_canton";
  ajax_field_mult["con_parroquia"][1] = "con_parroquia";
  ajax_field_mult["con_comunidad"][1] = "con_comunidad";
  ajax_field_mult["con_sector"][1] = "con_sector";
  ajax_field_mult["con_numero_censo"][1] = "con_numero_censo";
  ajax_field_mult["con_direccion_predio"][1] = "con_direccion_predio";
  ajax_field_mult["con_toma_administrativa"][1] = "con_toma_administrativa";
  ajax_field_mult["con_toma_operativa"][1] = "con_toma_operativa";
  ajax_field_mult["con_tipo_servicio"][1] = "con_tipo_servicio";
  ajax_field_mult["con_condicion_contrato"][1] = "con_condicion_contrato";
  ajax_field_mult["con_ruta"][1] = "con_ruta";
  ajax_field_mult["con_orden_lecturas"][1] = "con_orden_lecturas";
  ajax_field_mult["con_fecha_instalacion"][1] = "con_fecha_instalacion";
  ajax_field_mult["con_numero_medidor"][1] = "con_numero_medidor";
  ajax_field_mult["con_maxima_lectura"][1] = "con_maxima_lectura";
  ajax_field_mult["con_lectura_actual"][1] = "con_lectura_actual";
  ajax_field_mult["con_fecha_lectura"][1] = "con_fecha_lectura";
  ajax_field_mult["con_usuario_instala"][1] = "con_usuario_instala";
  ajax_field_mult["con_observaciones"][1] = "con_observaciones";
  ajax_field_mult["con_numero_corte"][1] = "con_numero_corte";
  ajax_field_mult["materiales"][1] = "materiales";
  ajax_field_mult["rubros"][1] = "rubros";
  ajax_field_mult["con_total_a_pagar"][1] = "con_total_a_pagar";
  ajax_field_mult["con_abono"][1] = "con_abono";
  ajax_field_mult["con_saldo_pagar"][1] = "con_saldo_pagar";
  ajax_field_mult["con_plazo"][1] = "con_plazo";
  ajax_field_mult["con_valor_cuota"][1] = "con_valor_cuota";
  ajax_field_mult["cuotas"][1] = "cuotas";
  ajax_field_mult["con_empresa"][1] = "con_empresa";

  var ajax_field_id = {
    "con_motivo_anulacion": new Array("hidden_field_label_con_motivo_anulacion", "hidden_field_data_con_motivo_anulacion"),
    "con_fecha": new Array("hidden_field_label_con_fecha", "hidden_field_data_con_fecha"),
    "con_id": new Array("hidden_field_label_con_id", "hidden_field_data_con_id"),
    "con_numero_contrato": new Array("hidden_field_label_con_numero_contrato", "hidden_field_data_con_numero_contrato"),
    "con_tipo_contrato": new Array("hidden_field_label_con_tipo_contrato", "hidden_field_data_con_tipo_contrato"),
    "con_propietario": new Array("hidden_field_label_con_propietario", "hidden_field_data_con_propietario"),
    "con_nombre": new Array("hidden_field_label_con_nombre", "hidden_field_data_con_nombre"),
    "con_cedula": new Array("hidden_field_label_con_cedula", "hidden_field_data_con_cedula"),
    "con_telefono": new Array("hidden_field_label_con_telefono", "hidden_field_data_con_telefono"),
    "con_celular": new Array("hidden_field_label_con_celular", "hidden_field_data_con_celular"),
    "con_direccion_propietario": new Array("hidden_field_label_con_direccion_propietario", "hidden_field_data_con_direccion_propietario"),
    "con_correo": new Array("hidden_field_label_con_correo", "hidden_field_data_con_correo"),
    "con_estado": new Array("hidden_field_label_con_estado", "hidden_field_data_con_estado"),
    "con_pais": new Array("hidden_field_label_con_pais", "hidden_field_data_con_pais"),
    "con_provincia": new Array("hidden_field_label_con_provincia", "hidden_field_data_con_provincia"),
    "con_canton": new Array("hidden_field_label_con_canton", "hidden_field_data_con_canton"),
    "con_parroquia": new Array("hidden_field_label_con_parroquia", "hidden_field_data_con_parroquia"),
    "con_comunidad": new Array("hidden_field_label_con_comunidad", "hidden_field_data_con_comunidad"),
    "con_sector": new Array("hidden_field_label_con_sector", "hidden_field_data_con_sector"),
    "con_numero_censo": new Array("hidden_field_label_con_numero_censo", "hidden_field_data_con_numero_censo"),
    "con_direccion_predio": new Array("hidden_field_label_con_direccion_predio", "hidden_field_data_con_direccion_predio"),
    "con_toma_administrativa": new Array("hidden_field_label_con_toma_administrativa", "hidden_field_data_con_toma_administrativa"),
    "con_toma_operativa": new Array("hidden_field_label_con_toma_operativa", "hidden_field_data_con_toma_operativa"),
    "con_tipo_servicio": new Array("hidden_field_label_con_tipo_servicio", "hidden_field_data_con_tipo_servicio"),
    "con_condicion_contrato": new Array("hidden_field_label_con_condicion_contrato", "hidden_field_data_con_condicion_contrato"),
    "con_ruta": new Array("hidden_field_label_con_ruta", "hidden_field_data_con_ruta"),
    "con_orden_lecturas": new Array("hidden_field_label_con_orden_lecturas", "hidden_field_data_con_orden_lecturas"),
    "con_fecha_instalacion": new Array("hidden_field_label_con_fecha_instalacion", "hidden_field_data_con_fecha_instalacion"),
    "con_numero_medidor": new Array("hidden_field_label_con_numero_medidor", "hidden_field_data_con_numero_medidor"),
    "con_maxima_lectura": new Array("hidden_field_label_con_maxima_lectura", "hidden_field_data_con_maxima_lectura"),
    "con_lectura_actual": new Array("hidden_field_label_con_lectura_actual", "hidden_field_data_con_lectura_actual"),
    "con_fecha_lectura": new Array("hidden_field_label_con_fecha_lectura", "hidden_field_data_con_fecha_lectura"),
    "con_usuario_instala": new Array("hidden_field_label_con_usuario_instala", "hidden_field_data_con_usuario_instala"),
    "con_observaciones": new Array("hidden_field_label_con_observaciones", "hidden_field_data_con_observaciones"),
    "materiales": new Array("hidden_field_label_materiales", "hidden_field_data_materiales"),
    "rubros": new Array("hidden_field_label_rubros", "hidden_field_data_rubros"),
    "con_total_a_pagar": new Array("hidden_field_label_con_total_a_pagar", "hidden_field_data_con_total_a_pagar"),
    "con_abono": new Array("hidden_field_label_con_abono", "hidden_field_data_con_abono"),
    "con_saldo_pagar": new Array("hidden_field_label_con_saldo_pagar", "hidden_field_data_con_saldo_pagar"),
    "con_plazo": new Array("hidden_field_label_con_plazo", "hidden_field_data_con_plazo"),
    "con_valor_cuota": new Array("hidden_field_label_con_valor_cuota", "hidden_field_data_con_valor_cuota"),
    "cuotas": new Array("hidden_field_label_cuotas", "hidden_field_data_cuotas")
  };

  var ajax_read_only = {
    "con_motivo_anulacion": "off",
    "con_fecha": "off",
    "con_sino": "off",
    "con_id": "on",
    "con_numero_contrato": "off",
    "con_tipo_contrato": "off",
    "con_propietario": "off",
    "con_nombre": "off",
    "con_cedula": "off",
    "con_telefono": "off",
    "con_celular": "off",
    "con_direccion_propietario": "off",
    "con_correo": "off",
    "con_estado": "off",
    "con_pais": "off",
    "con_provincia": "off",
    "con_canton": "off",
    "con_parroquia": "off",
    "con_comunidad": "off",
    "con_sector": "off",
    "con_numero_censo": "off",
    "con_direccion_predio": "off",
    "con_toma_administrativa": "off",
    "con_toma_operativa": "off",
    "con_tipo_servicio": "off",
    "con_condicion_contrato": "off",
    "con_ruta": "off",
    "con_orden_lecturas": "off",
    "con_fecha_instalacion": "off",
    "con_numero_medidor": "off",
    "con_maxima_lectura": "off",
    "con_lectura_actual": "off",
    "con_fecha_lectura": "off",
    "con_usuario_instala": "off",
    "con_observaciones": "off",
    "con_numero_corte": "off",
    "materiales": "off",
    "rubros": "off",
    "con_total_a_pagar": "off",
    "con_abono": "off",
    "con_saldo_pagar": "off",
    "con_plazo": "off",
    "con_valor_cuota": "off",
    "cuotas": "off",
    "con_empresa": "off"
  };
  var bRefreshTable = false;
  function scRefreshTable()
  {
    return false;
  }

  function scAjaxDetailValue(sIndex, sValue)
  {
    var aValue = new Array();
    aValue[0] = {"value" : sValue};
    if ("con_motivo_anulacion" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_fecha" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_sino" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_id" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_numero_contrato" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_tipo_contrato" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_propietario" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_nombre" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_cedula" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_telefono" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_celular" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_direccion_propietario" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_correo" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_estado" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_pais" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_provincia" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_canton" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_parroquia" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_comunidad" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_sector" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_numero_censo" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_direccion_predio" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_toma_administrativa" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_toma_operativa" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_tipo_servicio" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_condicion_contrato" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_ruta" == sIndex)
    {
      scAjaxSetFieldSelect(sIndex, aValue, null);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_orden_lecturas" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_fecha_instalacion" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_numero_medidor" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_maxima_lectura" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_lectura_actual" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_fecha_lectura" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_usuario_instala" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_observaciones" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_numero_corte" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("materiales" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("rubros" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_total_a_pagar" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_abono" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_saldo_pagar" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_plazo" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_valor_cuota" == sIndex)
    {
      scAjaxSetFieldLabel(sIndex, aValue);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("cuotas" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    if ("con_empresa" == sIndex)
    {
      scAjaxSetFieldText(sIndex, aValue, "", "", true);
      updateHeaderFooter(sIndex, aValue);

      if ($("#id_sc_field_" + sIndex).length) {
          $("#id_sc_field_" + sIndex).change();
      }
      else if (document.F1.elements[sIndex]) {
          $(document.F1.elements[sIndex]).change();
      }
      else if (document.F1.elements[sFieldName + "[]"]) {
          $(document.F1.elements[sFieldName + "[]"]).change();
      }

      return;
    }
    scAjaxSetFieldInnerHtml(sIndex, aValue);
  }
 </SCRIPT>
