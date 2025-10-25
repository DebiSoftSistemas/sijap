
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["rc_contrato_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rc_producto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rc_valor_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rc_por_iva_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rc_iva_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rc_total_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rc_estado_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["rc_contrato_" + iSeqRow] && scEventControl_data["rc_contrato_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_contrato_" + iSeqRow] && scEventControl_data["rc_contrato_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rc_producto_" + iSeqRow] && scEventControl_data["rc_producto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_producto_" + iSeqRow] && scEventControl_data["rc_producto_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rc_valor_" + iSeqRow] && scEventControl_data["rc_valor_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_valor_" + iSeqRow] && scEventControl_data["rc_valor_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rc_por_iva_" + iSeqRow] && scEventControl_data["rc_por_iva_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_por_iva_" + iSeqRow] && scEventControl_data["rc_por_iva_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rc_iva_" + iSeqRow] && scEventControl_data["rc_iva_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_iva_" + iSeqRow] && scEventControl_data["rc_iva_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rc_total_" + iSeqRow] && scEventControl_data["rc_total_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_total_" + iSeqRow] && scEventControl_data["rc_total_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rc_estado_" + iSeqRow] && scEventControl_data["rc_estado_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rc_estado_" + iSeqRow] && scEventControl_data["rc_estado_" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_active_all() {
  for (var i = 1; i < iAjaxNewLine; i++) {
    if (scEventControl_active(i)) {
      return true;
    }
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  if ("rc_valor_" + iSeq == fieldName) {
    _scCalculatorBlurOk[fieldId] = false;
  }
  scEventControl_data[fieldName]["blur"] = true;
  if ("rc_producto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("rc_producto_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

function scEventControl_onCalculator_rc_valor_() {
  if (!_scCalculatorControl["id_sc_field_rc_valor_"]) {
    _scCalculatorBlurOk["id_sc_field_rc_valor_"] = true;
    do_ajax_form_jap_rubro_contrato_event_rc_valor__onblur();
  }
} // scEventControl_onCalculator_rc_valor_

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_rc_contrato_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_contrato__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_jap_rubro_contrato_rc_contrato__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_jap_rubro_contrato_rc_contrato__onfocus(this, iSeqRow) });
  $('#id_sc_field_rc_producto_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_producto__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_jap_rubro_contrato_rc_producto__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_jap_rubro_contrato_rc_producto__onfocus(this, iSeqRow) });
  $('#id_sc_field_rc_valor_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_valor__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_rubro_contrato_rc_valor__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_rubro_contrato_rc_valor__onfocus(this, iSeqRow) });
  $('#id_sc_field_rc_estado_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_estado__onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_rubro_contrato_rc_estado__onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_rubro_contrato_rc_estado__onfocus(this, iSeqRow) });
  $('#id_sc_field_rc_por_iva_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_por_iva__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_jap_rubro_contrato_rc_por_iva__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_jap_rubro_contrato_rc_por_iva__onfocus(this, iSeqRow) });
  $('#id_sc_field_rc_iva_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_iva__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_jap_rubro_contrato_rc_iva__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_jap_rubro_contrato_rc_iva__onfocus(this, iSeqRow) });
  $('#id_sc_field_rc_total_' + iSeqRow).bind('blur', function() { sc_form_jap_rubro_contrato_rc_total__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_rubro_contrato_rc_total__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_rubro_contrato_rc_total__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_jap_rubro_contrato_rc_contrato__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_contrato_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_contrato__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_contrato__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_producto__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_producto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
  do_ajax_form_jap_rubro_contrato_event_rc_producto__onblur(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_producto__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_rubro_contrato_event_rc_producto__onchange(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_producto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_valor__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_valor_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
  do_ajax_form_jap_rubro_contrato_event_rc_valor__onblur(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_valor__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_valor__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_estado__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_estado_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_estado__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  lookup_rc_estado_(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_estado__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_por_iva__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_por_iva_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_por_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_por_iva__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_iva__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_iva_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_iva__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_total__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_rubro_contrato_validate_rc_total_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_total__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_rubro_contrato_rc_total__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("rc_contrato_", "", status);
	displayChange_field("rc_producto_", "", status);
	displayChange_field("rc_valor_", "", status);
	displayChange_field("rc_por_iva_", "", status);
	displayChange_field("rc_iva_", "", status);
	displayChange_field("rc_total_", "", status);
	displayChange_field("rc_estado_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_rc_contrato_(row, status);
	displayChange_field_rc_producto_(row, status);
	displayChange_field_rc_valor_(row, status);
	displayChange_field_rc_por_iva_(row, status);
	displayChange_field_rc_iva_(row, status);
	displayChange_field_rc_total_(row, status);
	displayChange_field_rc_estado_(row, status);
}

function displayChange_field(field, row, status) {
	if ("rc_contrato_" == field) {
		displayChange_field_rc_contrato_(row, status);
	}
	if ("rc_producto_" == field) {
		displayChange_field_rc_producto_(row, status);
	}
	if ("rc_valor_" == field) {
		displayChange_field_rc_valor_(row, status);
	}
	if ("rc_por_iva_" == field) {
		displayChange_field_rc_por_iva_(row, status);
	}
	if ("rc_iva_" == field) {
		displayChange_field_rc_iva_(row, status);
	}
	if ("rc_total_" == field) {
		displayChange_field_rc_total_(row, status);
	}
	if ("rc_estado_" == field) {
		displayChange_field_rc_estado_(row, status);
	}
}

function displayChange_field_rc_contrato_(row, status) {
    var fieldId;
}

function displayChange_field_rc_producto_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_rc_producto___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_rc_producto_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "rc_producto_");
	}
}

function displayChange_field_rc_valor_(row, status) {
    var fieldId;
}

function displayChange_field_rc_por_iva_(row, status) {
    var fieldId;
}

function displayChange_field_rc_iva_(row, status) {
    var fieldId;
}

function displayChange_field_rc_total_(row, status) {
    var fieldId;
}

function displayChange_field_rc_estado_(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_rc_producto_("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_jap_rubro_contrato_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(31);
		}
	}
}
<?php

$formWidthCorrection = '';
if (false !== strpos($this->Ini->form_table_width, 'calc')) {
	$formWidthCalc = substr($this->Ini->form_table_width, strpos($this->Ini->form_table_width, '(') + 1);
	$formWidthCalc = substr($formWidthCalc, 0, strpos($formWidthCalc, ')'));
	$formWidthParts = explode(' ', $formWidthCalc);
	if (3 == count($formWidthParts) && 'px' == substr($formWidthParts[2], -2)) {
		$formWidthParts[2] = substr($formWidthParts[2], 0, -2) / 2;
		$formWidthCorrection = $formWidthParts[1] . ' ' . $formWidthParts[2];
	}
}

?>

function scSetFixedHeadersCss(baseTop)
{
    let rows, cols, i, j, thisTop;

    rows = $(".sc-ui-header-row");
    thisTop = baseTop;

    for (i = 0; i < rows.length; i++) {
        cols = $(rows[i]).find("td").filter(".sc-col-title");
        for (j = 0; j < cols.length; j++) {
            $(cols[j]).css({
                "position": "sticky",
                "top": thisTop + "px",
                "z-index": 4
            }).addClass("sc-header-fixed");
        }
        thisTop += $(rows[i]).height();
    }

    rows = $(".sc-ui-header-row");

    rows.filter(".sc-col-is-fixed").css("z-index", 5);
    rows.filter(".sc-col-is-fixed").filter(".sc-col-actions").css("z-index", 6);
}

$(function() {
    scSetFixedHeadersCss(0);
});

$(window).scroll(function() {
	scSetFixedHeaders();
});

var rerunHeaderDisplay = 1;

function scSetFixedHeaders(forceDisplay) {
    return;
	if (null == forceDisplay) {
		forceDisplay = false;
	}
	var divScroll, formHeaders, headerPlaceholder;
	formHeaders = scGetHeaderRow();
	headerPlaceholder = $("#sc-id-fixedheaders-placeholder");
	if (!formHeaders) {
		headerPlaceholder.hide();
	}
	else {
		if (scIsHeaderVisible(formHeaders)) {
			headerPlaceholder.hide();
		}
		else {
			if (!headerPlaceholder.filter(":visible").length || forceDisplay) {
				scSetFixedHeadersContents(formHeaders, headerPlaceholder);
				scSetFixedHeadersSize(formHeaders);
				headerPlaceholder.show();
			}
			scSetFixedHeadersPosition(formHeaders, headerPlaceholder);
			if (0 < rerunHeaderDisplay) {
				rerunHeaderDisplay--;
				setTimeout(function() {
					scSetFixedHeadersContents(formHeaders, headerPlaceholder);
					scSetFixedHeadersSize(formHeaders);
					headerPlaceholder.show();
					scSetFixedHeadersPosition(formHeaders, headerPlaceholder);
				}, 5);
			}
		}
	}
}

function scSetFixedHeadersPosition(formHeaders, headerPlaceholder) {
	if (formHeaders) {
		headerPlaceholder.css({"top": 0<?php echo $formWidthCorrection ?>, "left": (Math.floor(formHeaders.offset().left) - $(document).scrollLeft()<?php echo $formWidthCorrection ?>) + "px"});
	}
}

function scIsHeaderVisible(formHeaders) {
	if (typeof(scIsHeaderVisibleMobile) === typeof(function(){})) { return scIsHeaderVisibleMobile(formHeaders); }
	return formHeaders.offset().top > $(document).scrollTop();
}

function scGetHeaderRow() {
	var formHeaders = $(".sc-ui-header-row").filter(":visible");
	if (!formHeaders.length) {
		formHeaders = false;
	}
	return formHeaders;
}

function scSetFixedHeadersContents(formHeaders, headerPlaceholder) {
	var i, htmlContent;
	htmlContent = "<table id=\"sc-id-fixed-headers\" class=\"scFormTable\">";
	for (i = 0; i < formHeaders.length; i++) {
		htmlContent += "<tr class=\"scFormLabelOddMult\" id=\"sc-id-headers-row-" + i + "\">" + $(formHeaders[i]).html() + "</tr>";
	}
	htmlContent += "</table>";
	headerPlaceholder.html(htmlContent);
}

function scSetFixedHeadersSize(formHeaders) {
	var i, j, headerColumns, formColumns, cellHeight, cellWidth, tableOriginal, tableHeaders;
	tableOriginal = $("#hidden_bloco_0");
	tableHeaders = document.getElementById("sc-id-fixed-headers");
	$(tableHeaders).css("width", $(tableOriginal).outerWidth());
	for (i = 0; i < formHeaders.length; i++) {
		headerColumns = $("#sc-id-fixed-headers-row-" + i).find("td");
		formColumns = $(formHeaders[i]).find("td");
		for (j = 0; j < formColumns.length; j++) {
			if (window.getComputedStyle(formColumns[j])) {
				cellWidth = window.getComputedStyle(formColumns[j]).width;
				cellHeight = window.getComputedStyle(formColumns[j]).height;
			}
			else {
				cellWidth = $(formColumns[j]).width() + "px";
				cellHeight = $(formColumns[j]).height() + "px";
			}
			$(headerColumns[j]).css({
				"width": cellWidth,
				"height": cellHeight
			});
		}
	}
}
var jqCalcMonetPos = {};
var _scCalculatorBlurOk = {};

function scJQCalculatorAdd(iSeqRow) {
  _scCalculatorBlurOk["id_sc_field_rc_total_" + iSeqRow] = true;
  $("#id_sc_field_rc_valor_" + iSeqRow).calculator({
    onOpen: function(value, inst) {
      if (typeof _scCalculatorControl !== "undefined") {
        if (!_scCalculatorControl["id_sc_field_rc_valor_" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_rc_valor_" + iSeqRow] = true;
        }
      }
      value = scJQCalculatorUnformat(value, "#id_sc_field_rc_valor_" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['rc_valor_']['symbol_grp']); ?>', <?php echo $this->field_config['rc_valor_']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['rc_valor_']['symbol_dec']); ?>', '');
      $(this).val(value);
    },
    onClose: function(value, inst) {
      var oldValue = $(this.val);
      if (typeof _scCalculatorControl !== "undefined") {
        if (_scCalculatorControl["id_sc_field_rc_valor_" + iSeqRow]) {
          _scCalculatorControl["id_sc_field_rc_valor_" + iSeqRow] = null;
        }
      }
      value = scJQCalculatorFormat(value, "#id_sc_field_rc_valor_" + iSeqRow, '<?php echo str_replace("'", "\'", $this->field_config['rc_valor_']['symbol_grp']); ?>', <?php echo $this->field_config['rc_valor_']['symbol_fmt']; ?>, '<?php echo str_replace("'", "\'", $this->field_config['rc_valor_']['symbol_dec']); ?>', 2, '');
      $(this).val(value);
      if (oldValue != value) {
        $(this).trigger('change');
      }
    },
    precision: 2,
    showOn: "button",
<?php
$miniCalculatorIcon = $this->jqueryIconFile('calculator');
$miniCalculatorFA   = $this->jqueryFAFile('calculator');
if ('' != $miniCalculatorIcon) {
?>
    buttonImage: "<?php echo $miniCalculatorIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalculatorFA) {
?>
    buttonText: "",
<?php
}
?>
  })
<?php
if ('' != $miniCalculatorFA) {
?>
    .next('button').append("<?php echo $miniCalculatorFA; ?>")
<?php
}
?>
;

} // scJQCalculatorAdd

function scJQCalculatorUnformat(fValue, sField, sThousands, sFormat, sDecimals, sMonetary) {
  fValue = scJQCalculatorCurrency(fValue, sField, sMonetary);
  if ("" != sThousands) {
    if ("." == sThousands) {
      sThousands = "\\.";
    }
    sRegEx = eval("/" + sThousands + "/g");
    fValue = fValue.replace(sRegEx, "");
  }
  if ("." != sDecimals) {
    sRegEx = eval("/" + sDecimals + "/g");
    fValue = fValue.replace(sRegEx, ".");
  }
  if ("." == fValue.substr(0, 1) || "," == fValue.substr(0, 1)) {
    fValue = "0" + fValue;
  }
  return fValue;
} // scJQCalculatorUnformat

function scJQCalculatorFormat(fValue, sField, sThousands, sFormat, sDecimals, iPrecision, sMonetary) {
  fValue = scJQCalculatorCurrency(fValue.toString(), sField, sMonetary);
  if (-1 < fValue.indexOf('.')) {
    var parts = fValue.split('.'),
        pref = parts[0],
        suf = parts[1];
  }
  else {
    var pref = fValue,
        suf = '';
  }
  if ('' != sThousands) {
    if (3 == sFormat) {
      if (4 <= pref.length) {
        pref_rest = pref.substr(0, pref.length - 3);
        pref = sThousands + pref.substr(pref.length - 3);
        while (2 < pref_rest.length) {
          pref = sThousands + pref_rest.substr(pref_rest.length - 2) + pref;
          pref_rest = pref_rest.substr(0, pref_rest.length - 2);
        }
        if ('' != pref_rest) {
          pref = pref_rest + pref;
        }
      }
    }
    else if (2 == sFormat) {
      if (4 <= pref.length) {
        pref = pref.substr(0, pref.length - 3) + sThousands + pref.substr(pref.length - 3);
      }
    }
    else {
      pref_rest = pref;
      pref = '';
      while (3 < pref_rest.length) {
        pref = sThousands + pref_rest.substr(pref_rest.length - 3) + pref;
        pref_rest = pref_rest.substr(0, pref_rest.length - 3);
      }
      if ('' != pref_rest) {
        pref = pref_rest + pref;
      }
    }
  }
  if ('' != iPrecision) {
    if (suf.length > iPrecision) {
      suf = '1' + suf.substr(0, iPrecision) + '.' + suf.substr(iPrecision);
      suf = Math.round(parseFloat(suf)).toString().substr(1);
    }
    else {
      while (suf.length < iPrecision) {
        suf += '0';
      }
    }
  }
  if ('' != sDecimals && '' != suf) {
    fValue = pref + sDecimals + suf;
  }
  else {
    fValue = pref;
  }
  if ('' != sMonetary) {
    fValue = 'left' == jqCalcMonetPos[sField] ? sMonetary + ' ' + fValue : fValue + ' ' + sMonetary;
  }
  return fValue;
} // scJQCalculatorFormat

function scJQCalculatorCurrency(fValue, sField, sMonetary) {
  if ("" != sMonetary) {
    if (sMonetary + ' ' == fValue.substr(0, sMonetary.length + 1)) {
        fValue = fValue.substr(sMonetary.length + 1);
        jqCalcMonetPos[sField] = 'left';
    }
    else if (sMonetary == fValue.substr(0, sMonetary.length)) {
        fValue = fValue.substr(sMonetary.length + 1);
        jqCalcMonetPos[sField] = 'left';
    }
    else if (' ' + sMonetary == fValue.substr(fValue.length - sMonetary.length - 1)) {
        fValue = fValue.substr(0, fValue.length - sMonetary.length - 1);
        jqCalcMonetPos[sField] = 'right';
    }
    else if (sMonetary == fValue.substr(fValue.length - sMonetary.length)) {
        fValue = fValue.substr(0, fValue.length - sMonetary.length);
        jqCalcMonetPos[sField] = 'right';
    }
  }
  if ("" == fValue) {
    fValue = "0";
  }
  return fValue;
} // scJQCalculatorCurrency

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

var api_cache_requests = [];
function ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, hasRun, img_before){
    setTimeout(function(){
        if(img_name == '') return;
        iSeqRow= iSeqRow !== undefined && iSeqRow !== null ? iSeqRow : '';
        var hasVar = p.indexOf('_@NM@_') > -1 || p_cache.indexOf('_@NM@_') > -1 ? true : false;

        p = p.split('_@NM@_');
        $.each(p, function(i,v){
            try{
                p[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p[i] = v;
            }
        });
        p = p.join('');

        p_cache = p_cache.split('_@NM@_');
        $.each(p_cache, function(i,v){
            try{
                p_cache[i] = $('[name='+v+iSeqRow+']').val();
            }
            catch(err){
                p_cache[i] = v;
            }
        });
        p_cache = p_cache.join('');

        img_before = img_before !== undefined ? img_before : $(t).attr('src');
        var str_key_cache = '<?php echo $this->Ini->sc_page; ?>' + img_name+field+p+p_cache;
        if(api_cache_requests[ str_key_cache ] !== undefined && api_cache_requests[ str_key_cache ] !== null){
            if(api_cache_requests[ str_key_cache ] != false){
                do_ajax_check_file(api_cache_requests[ str_key_cache ], field  ,t, iSeqRow);
            }
            return;
        }
        //scAjaxProcOn();
        $(t).attr('src', '<?php echo $this->Ini->path_icones ?>/scriptcase__NM__ajax_load.gif');
        api_cache_requests[ str_key_cache ] = false;
        var rs =$.ajax({
                    type: "POST",
                    url: 'index.php?script_case_init=<?php echo $this->Ini->sc_page; ?>',
                    async: true,
                    data:'nmgp_opcao=ajax_check_file&AjaxCheckImg=' + encodeURI(img_name) +'&rsargs='+ field + '&p=' + p + '&p_cache=' + p_cache,
                    success: function (rs) {
                        if(rs.indexOf('</span>') != -1){
                            rs = rs.substr(rs.indexOf('</span>') + 7);
                        }
                        if(rs.indexOf('/') != -1 && rs.indexOf('/') != 0){
                            rs = rs.substr(rs.indexOf('/'));
                        }
                        rs = sc_trim(rs);

                        // if(rs == 0 && hasVar && hasRun === undefined){
                        //     delete window.api_cache_requests[ str_key_cache ];
                        //     ajax_check_file(img_name, field  ,t, p, p_cache, iSeqRow, 1, img_before);
                        //     return;
                        // }
                        window.api_cache_requests[ str_key_cache ] = rs;
                        do_ajax_check_file(rs, field  ,t, iSeqRow)
                        if(rs == 0){
                            delete window.api_cache_requests[ str_key_cache ];

                           // $(t).attr('src',img_before);
                            do_ajax_check_file(img_before+'_@@NM@@_' + img_before, field  ,t, iSeqRow)

                        }


                    }
        });
    },100);
}

function do_ajax_check_file(rs, field  ,t, iSeqRow){
    if (rs != 0) {
        rs_split = rs.split('_@@NM@@_');
        rs_orig = rs_split[0];
        rs2 = rs_split[1];
        try{
            if(!$(t).is('img')){

                if($('#id_read_on_'+field+iSeqRow).length > 0 ){
                                    var usa_read_only = false;

                switch(field){

                }
                     if(usa_read_only && $('a',$('#id_read_on_'+field+iSeqRow)).length == 0){
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_jap_rubro_contrato')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
                     }
                }
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href', target.join(','));
                }else{
                    var target = $(t).attr('href').split(',');
                     target[1] = "'"+rs2+"'";
                     $(t).attr('href', target.join(','));
                }
            }else{
                $(t).attr('src', rs2);
                $(t).css('display', '');
                if($('#id_ajax_doc_'+field+iSeqRow+' a').length > 0){
                    var target = $('#id_ajax_doc_'+field+iSeqRow+' a').attr('href').split(',');
                    target[1] = "'"+rs2+"'";
                    $(t).attr('href', target.join(','));
                }else{
                     var t_link = $(t).parent('a');
                     var target = $(t_link).attr('href').split(',');
                     target[0] = "javascript:nm_mostra_img('"+rs_orig+"'";
                     $(t_link).attr('href', target.join(','));
                }

            }
            eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        } catch(err){
                        eval("window.var_ajax_img_"+field+iSeqRow+" = '"+rs_orig+"';");

        }
    }
   /* hasFalseCacheRequest = false;
    $.each(api_cache_requests, function(i,v){
        if(v == false){
            hasFalseCacheRequest = true;
        }
    });
    if(hasFalseCacheRequest == false){
        scAjaxProcOff();
    }*/
}

$(document).ready(function(){
});

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "rc_producto_" == specificField) {
    scJQSelect2Add_rc_producto_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_rc_producto_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_rc_producto__obj" : "#id_sc_field_rc_producto_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_rc_producto__obj',
      dropdownCssClass: 'css_rc_producto__obj',
      language: {
        noResults: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_notfound'] ?>";
        },
        searching: function() {
          return "<?php echo $this->Ini->Nm_lang['lang_autocomp_searching'] ?>";
        }
      }
    }
  );
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalculatorAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_rc_producto_) { displayChange_field_rc_producto_(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scGetFileExtension(fileName)
{
    fileNameParts = fileName.split(".");

    if (1 === fileNameParts.length || (2 === fileNameParts.length && "" == fileNameParts[0])) {
        return "";
    }

    return fileNameParts.pop().toLowerCase();
}

function scFormatExtensionSizeErrorMsg(errorMsg)
{
    var msgInfo = errorMsg.split("||"), returnMsg = "";

    if ("err_size" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_size'] ?>. <?php echo $this->Ini->Nm_lang['lang_errm_file_size_extension'] ?>".replace("{SC_EXTENSION}", msgInfo[1]).replace("{SC_LIMIT}", msgInfo[2]);
    } else if ("err_extension" == msgInfo[0]) {
        returnMsg = "<?php echo $this->Ini->Nm_lang['lang_errm_file_invl'] ?>";
    }

    return returnMsg;
}

