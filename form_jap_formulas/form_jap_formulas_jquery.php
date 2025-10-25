
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
  scEventControl_data["for_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_empresa_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_producto_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_toma_administrativa_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_toma_operativa_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_tipo_servicio_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_condicion_contrato_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_consumo_desde_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_consumo_hasta_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_formula_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_formula_cantidad_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["for_fijo_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["for_id_" + iSeqRow] && scEventControl_data["for_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_id_" + iSeqRow] && scEventControl_data["for_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_empresa_" + iSeqRow] && scEventControl_data["for_empresa_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_empresa_" + iSeqRow] && scEventControl_data["for_empresa_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_producto_" + iSeqRow] && scEventControl_data["for_producto_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_producto_" + iSeqRow] && scEventControl_data["for_producto_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_toma_administrativa_" + iSeqRow] && scEventControl_data["for_toma_administrativa_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_toma_administrativa_" + iSeqRow] && scEventControl_data["for_toma_administrativa_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_toma_operativa_" + iSeqRow] && scEventControl_data["for_toma_operativa_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_toma_operativa_" + iSeqRow] && scEventControl_data["for_toma_operativa_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_tipo_servicio_" + iSeqRow] && scEventControl_data["for_tipo_servicio_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_tipo_servicio_" + iSeqRow] && scEventControl_data["for_tipo_servicio_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_condicion_contrato_" + iSeqRow] && scEventControl_data["for_condicion_contrato_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_condicion_contrato_" + iSeqRow] && scEventControl_data["for_condicion_contrato_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_consumo_desde_" + iSeqRow] && scEventControl_data["for_consumo_desde_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_consumo_desde_" + iSeqRow] && scEventControl_data["for_consumo_desde_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_consumo_hasta_" + iSeqRow] && scEventControl_data["for_consumo_hasta_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_consumo_hasta_" + iSeqRow] && scEventControl_data["for_consumo_hasta_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_formula_" + iSeqRow] && scEventControl_data["for_formula_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_formula_" + iSeqRow] && scEventControl_data["for_formula_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_formula_cantidad_" + iSeqRow] && scEventControl_data["for_formula_cantidad_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_formula_cantidad_" + iSeqRow] && scEventControl_data["for_formula_cantidad_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["for_fijo_" + iSeqRow] && scEventControl_data["for_fijo_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["for_fijo_" + iSeqRow] && scEventControl_data["for_fijo_" + iSeqRow]["change"]) {
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
  scEventControl_data[fieldName]["blur"] = true;
  if ("for_toma_administrativa_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("for_toma_operativa_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("for_tipo_servicio_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("for_condicion_contrato_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("for_fijo_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
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

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_for_id_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_id__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_jap_formulas_for_id__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_jap_formulas_for_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_producto_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_producto__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_jap_formulas_for_producto__onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_jap_formulas_for_producto__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_toma_administrativa_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_toma_administrativa__onblur(this, iSeqRow) })
                                                      .bind('change', function() { sc_form_jap_formulas_for_toma_administrativa__onchange(this, iSeqRow) })
                                                      .bind('focus', function() { sc_form_jap_formulas_for_toma_administrativa__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_toma_operativa_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_toma_operativa__onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_jap_formulas_for_toma_operativa__onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_jap_formulas_for_toma_operativa__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_tipo_servicio_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_tipo_servicio__onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_formulas_for_tipo_servicio__onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_formulas_for_tipo_servicio__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_condicion_contrato_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_condicion_contrato__onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_jap_formulas_for_condicion_contrato__onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_jap_formulas_for_condicion_contrato__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_consumo_desde_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_consumo_desde__onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_formulas_for_consumo_desde__onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_formulas_for_consumo_desde__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_consumo_hasta_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_consumo_hasta__onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_formulas_for_consumo_hasta__onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_formulas_for_consumo_hasta__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_formula_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_formula__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_jap_formulas_for_formula__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_jap_formulas_for_formula__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_fijo_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_fijo__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_formulas_for_fijo__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_formulas_for_fijo__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_empresa_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_empresa__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_jap_formulas_for_empresa__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_jap_formulas_for_empresa__onfocus(this, iSeqRow) });
  $('#id_sc_field_for_formula_cantidad_' + iSeqRow).bind('blur', function() { sc_form_jap_formulas_for_formula_cantidad__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_jap_formulas_for_formula_cantidad__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_jap_formulas_for_formula_cantidad__onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_jap_formulas_for_id__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_id__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_producto__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_producto_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_producto__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_producto__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_toma_administrativa__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_toma_administrativa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_toma_administrativa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_formulas_refresh_for_toma_administrativa_(iSeqRow);
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_toma_administrativa__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_toma_operativa__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_toma_operativa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_toma_operativa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_toma_operativa__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_tipo_servicio__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_tipo_servicio_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_tipo_servicio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_tipo_servicio__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_condicion_contrato__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_condicion_contrato_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_condicion_contrato__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_condicion_contrato__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_consumo_desde__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_consumo_desde_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_consumo_desde__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_consumo_desde__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_consumo_hasta__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_consumo_hasta_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_consumo_hasta__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_consumo_hasta__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_formula__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_formula_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_formula__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_formula__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_fijo__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_fijo_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_fijo__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_fijo__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_empresa__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_empresa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_empresa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_empresa__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_formula_cantidad__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_formulas_validate_for_formula_cantidad_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_formulas_for_formula_cantidad__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_formulas_for_formula_cantidad__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("for_id_", "", status);
	displayChange_field("for_empresa_", "", status);
	displayChange_field("for_producto_", "", status);
	displayChange_field("for_toma_administrativa_", "", status);
	displayChange_field("for_toma_operativa_", "", status);
	displayChange_field("for_tipo_servicio_", "", status);
	displayChange_field("for_condicion_contrato_", "", status);
	displayChange_field("for_consumo_desde_", "", status);
	displayChange_field("for_consumo_hasta_", "", status);
	displayChange_field("for_formula_", "", status);
	displayChange_field("for_formula_cantidad_", "", status);
	displayChange_field("for_fijo_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_for_id_(row, status);
	displayChange_field_for_empresa_(row, status);
	displayChange_field_for_producto_(row, status);
	displayChange_field_for_toma_administrativa_(row, status);
	displayChange_field_for_toma_operativa_(row, status);
	displayChange_field_for_tipo_servicio_(row, status);
	displayChange_field_for_condicion_contrato_(row, status);
	displayChange_field_for_consumo_desde_(row, status);
	displayChange_field_for_consumo_hasta_(row, status);
	displayChange_field_for_formula_(row, status);
	displayChange_field_for_formula_cantidad_(row, status);
	displayChange_field_for_fijo_(row, status);
}

function displayChange_field(field, row, status) {
	if ("for_id_" == field) {
		displayChange_field_for_id_(row, status);
	}
	if ("for_empresa_" == field) {
		displayChange_field_for_empresa_(row, status);
	}
	if ("for_producto_" == field) {
		displayChange_field_for_producto_(row, status);
	}
	if ("for_toma_administrativa_" == field) {
		displayChange_field_for_toma_administrativa_(row, status);
	}
	if ("for_toma_operativa_" == field) {
		displayChange_field_for_toma_operativa_(row, status);
	}
	if ("for_tipo_servicio_" == field) {
		displayChange_field_for_tipo_servicio_(row, status);
	}
	if ("for_condicion_contrato_" == field) {
		displayChange_field_for_condicion_contrato_(row, status);
	}
	if ("for_consumo_desde_" == field) {
		displayChange_field_for_consumo_desde_(row, status);
	}
	if ("for_consumo_hasta_" == field) {
		displayChange_field_for_consumo_hasta_(row, status);
	}
	if ("for_formula_" == field) {
		displayChange_field_for_formula_(row, status);
	}
	if ("for_formula_cantidad_" == field) {
		displayChange_field_for_formula_cantidad_(row, status);
	}
	if ("for_fijo_" == field) {
		displayChange_field_for_fijo_(row, status);
	}
}

function displayChange_field_for_id_(row, status) {
    var fieldId;
}

function displayChange_field_for_empresa_(row, status) {
    var fieldId;
}

function displayChange_field_for_producto_(row, status) {
    var fieldId;
}

function displayChange_field_for_toma_administrativa_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_for_toma_administrativa___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_for_toma_administrativa_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "for_toma_administrativa_");
	}
}

function displayChange_field_for_toma_operativa_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_for_toma_operativa___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_for_toma_operativa_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "for_toma_operativa_");
	}
}

function displayChange_field_for_tipo_servicio_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_for_tipo_servicio___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_for_tipo_servicio_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "for_tipo_servicio_");
	}
}

function displayChange_field_for_condicion_contrato_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_for_condicion_contrato___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_for_condicion_contrato_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "for_condicion_contrato_");
	}
}

function displayChange_field_for_consumo_desde_(row, status) {
    var fieldId;
}

function displayChange_field_for_consumo_hasta_(row, status) {
    var fieldId;
}

function displayChange_field_for_formula_(row, status) {
    var fieldId;
}

function displayChange_field_for_formula_cantidad_(row, status) {
    var fieldId;
}

function displayChange_field_for_fijo_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_for_fijo___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_for_fijo_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "for_fijo_");
	}
}

function scRecreateSelect2() {
	displayChange_field_for_toma_administrativa_("all", "on");
	displayChange_field_for_toma_operativa_("all", "on");
	displayChange_field_for_tipo_servicio_("all", "on");
	displayChange_field_for_condicion_contrato_("all", "on");
	displayChange_field_for_fijo_("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_jap_formulas_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(25);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_jap_formulas')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "for_toma_administrativa_" == specificField) {
    scJQSelect2Add_for_toma_administrativa_(seqRow);
  }
  if (null == specificField || "for_toma_operativa_" == specificField) {
    scJQSelect2Add_for_toma_operativa_(seqRow);
  }
  if (null == specificField || "for_tipo_servicio_" == specificField) {
    scJQSelect2Add_for_tipo_servicio_(seqRow);
  }
  if (null == specificField || "for_condicion_contrato_" == specificField) {
    scJQSelect2Add_for_condicion_contrato_(seqRow);
  }
  if (null == specificField || "for_fijo_" == specificField) {
    scJQSelect2Add_for_fijo_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_for_toma_administrativa_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_for_toma_administrativa__obj" : "#id_sc_field_for_toma_administrativa_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_for_toma_administrativa__obj',
      dropdownCssClass: 'css_for_toma_administrativa__obj',
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

function scJQSelect2Add_for_toma_operativa_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_for_toma_operativa__obj" : "#id_sc_field_for_toma_operativa_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_for_toma_operativa__obj',
      dropdownCssClass: 'css_for_toma_operativa__obj',
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

function scJQSelect2Add_for_tipo_servicio_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_for_tipo_servicio__obj" : "#id_sc_field_for_tipo_servicio_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_for_tipo_servicio__obj',
      dropdownCssClass: 'css_for_tipo_servicio__obj',
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

function scJQSelect2Add_for_condicion_contrato_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_for_condicion_contrato__obj" : "#id_sc_field_for_condicion_contrato_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_for_condicion_contrato__obj',
      dropdownCssClass: 'css_for_condicion_contrato__obj',
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

function scJQSelect2Add_for_fijo_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_for_fijo__obj" : "#id_sc_field_for_fijo_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_for_fijo__obj',
      dropdownCssClass: 'css_for_fijo__obj',
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
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_for_toma_administrativa_) { displayChange_field_for_toma_administrativa_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_for_toma_operativa_) { displayChange_field_for_toma_operativa_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_for_tipo_servicio_) { displayChange_field_for_tipo_servicio_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_for_condicion_contrato_) { displayChange_field_for_condicion_contrato_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_for_fijo_) { displayChange_field_for_fijo_(iLine, "on"); } }, 150);
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

