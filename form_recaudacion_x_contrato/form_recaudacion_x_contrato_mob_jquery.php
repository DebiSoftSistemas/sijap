
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
  scEventControl_data["titulo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mensaje" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["contrato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tesoreria" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["saldo_por_pagar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["usar_compensacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["forma_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["valor_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["documento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["operaciones2" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mensaje" + iSeqRow] && scEventControl_data["mensaje" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mensaje" + iSeqRow] && scEventControl_data["mensaje" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_identificacion" + iSeqRow] && scEventControl_data["cl_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_identificacion" + iSeqRow] && scEventControl_data["cl_identificacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_nombre" + iSeqRow] && scEventControl_data["cl_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_nombre" + iSeqRow] && scEventControl_data["cl_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_direccion" + iSeqRow] && scEventControl_data["cl_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_direccion" + iSeqRow] && scEventControl_data["cl_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_telefono" + iSeqRow] && scEventControl_data["cl_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_telefono" + iSeqRow] && scEventControl_data["cl_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_email" + iSeqRow] && scEventControl_data["cl_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_email" + iSeqRow] && scEventControl_data["cl_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["contrato" + iSeqRow] && scEventControl_data["contrato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["contrato" + iSeqRow] && scEventControl_data["contrato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tesoreria" + iSeqRow] && scEventControl_data["tesoreria" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tesoreria" + iSeqRow] && scEventControl_data["tesoreria" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["saldo_por_pagar" + iSeqRow] && scEventControl_data["saldo_por_pagar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["saldo_por_pagar" + iSeqRow] && scEventControl_data["saldo_por_pagar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["usar_compensacion" + iSeqRow] && scEventControl_data["usar_compensacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["usar_compensacion" + iSeqRow] && scEventControl_data["usar_compensacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["forma_pago" + iSeqRow] && scEventControl_data["forma_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["forma_pago" + iSeqRow] && scEventControl_data["forma_pago" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["valor_pago" + iSeqRow] && scEventControl_data["valor_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["valor_pago" + iSeqRow] && scEventControl_data["valor_pago" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["documento" + iSeqRow] && scEventControl_data["documento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["documento" + iSeqRow] && scEventControl_data["documento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["libretin" + iSeqRow] && scEventControl_data["libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["libretin" + iSeqRow] && scEventControl_data["libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["total" + iSeqRow] && scEventControl_data["total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["total" + iSeqRow] && scEventControl_data["total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["operaciones2" + iSeqRow] && scEventControl_data["operaciones2" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["operaciones2" + iSeqRow] && scEventControl_data["operaciones2" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("tesoreria" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("forma_pago" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("libretin" + iSeq == fieldName) {
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
  $('#id_sc_field_cl_nombre' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_cl_nombre_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_recaudacion_x_contrato_cl_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_identificacion' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_cl_identificacion_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_recaudacion_x_contrato_cl_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_direccion' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_cl_direccion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_recaudacion_x_contrato_cl_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_telefono' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_cl_telefono_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_recaudacion_x_contrato_cl_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_email' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_cl_email_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_recaudacion_x_contrato_cl_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_libretin' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_libretin_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_recaudacion_x_contrato_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_forma_pago' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_forma_pago_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_recaudacion_x_contrato_forma_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_documento' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_documento_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_recaudacion_x_contrato_documento_onfocus(this, iSeqRow) });
  $('#id_sc_field_total' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_total_onblur(this, iSeqRow) })
                                   .bind('focus', function() { sc_form_recaudacion_x_contrato_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_valor_pago' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_valor_pago_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_recaudacion_x_contrato_valor_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_titulo_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_recaudacion_x_contrato_titulo_onfocus(this, iSeqRow) });
  $('#id_sc_field_operaciones2' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_operaciones2_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_recaudacion_x_contrato_operaciones2_onfocus(this, iSeqRow) });
  $('#id_sc_field_mensaje' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_mensaje_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_recaudacion_x_contrato_mensaje_onfocus(this, iSeqRow) });
  $('#id_sc_field_tesoreria' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_tesoreria_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_recaudacion_x_contrato_tesoreria_onfocus(this, iSeqRow) });
  $('#id_sc_field_saldo_por_pagar' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_saldo_por_pagar_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_recaudacion_x_contrato_saldo_por_pagar_onfocus(this, iSeqRow) });
  $('#id_sc_field_usar_compensacion' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_usar_compensacion_onblur(this, iSeqRow) })
                                               .bind('click', function() { sc_form_recaudacion_x_contrato_usar_compensacion_onclick(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_recaudacion_x_contrato_usar_compensacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_contrato' + iSeqRow).bind('blur', function() { sc_form_recaudacion_x_contrato_contrato_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_recaudacion_x_contrato_contrato_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_recaudacion_x_contrato_contrato_onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-usar_compensacion' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_recaudacion_x_contrato_cl_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_cl_nombre();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_cl_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_cl_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_cl_identificacion();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_cl_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_cl_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_cl_direccion();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_cl_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_cl_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_cl_telefono();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_cl_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_cl_email_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_cl_email();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_cl_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_libretin();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_forma_pago_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_forma_pago();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_forma_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_documento_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_documento();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_documento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_total_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_total();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_valor_pago_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_valor_pago();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_valor_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_titulo_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_titulo();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_titulo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_operaciones2_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_operaciones2();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_operaciones2_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_mensaje_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_mensaje();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_mensaje_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_tesoreria_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_tesoreria();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_tesoreria_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_saldo_por_pagar_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_saldo_por_pagar();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_saldo_por_pagar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_usar_compensacion_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_usar_compensacion();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_usar_compensacion_onclick(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_event_usar_compensacion_onclick();
}

function sc_form_recaudacion_x_contrato_usar_compensacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_recaudacion_x_contrato_contrato_onblur(oThis, iSeqRow) {
  do_ajax_form_recaudacion_x_contrato_mob_validate_contrato();
  scCssBlur(oThis);
}

function sc_form_recaudacion_x_contrato_contrato_onchange(oThis, iSeqRow) {
  lookup_contrato();
}

function sc_form_recaudacion_x_contrato_contrato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
	if ("1" == block) {
		displayChange_block_1(status);
	}
	if ("2" == block) {
		displayChange_block_2(status);
	}
	if ("3" == block) {
		displayChange_block_3(status);
	}
	if ("4" == block) {
		displayChange_block_4(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("titulo", "", status);
	displayChange_field("mensaje", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("cl_identificacion", "", status);
	displayChange_field("cl_nombre", "", status);
	displayChange_field("cl_direccion", "", status);
	displayChange_field("cl_telefono", "", status);
	displayChange_field("cl_email", "", status);
	displayChange_field("contrato", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("tesoreria", "", status);
	displayChange_field("saldo_por_pagar", "", status);
	displayChange_field("usar_compensacion", "", status);
	displayChange_field("forma_pago", "", status);
	displayChange_field("valor_pago", "", status);
	displayChange_field("documento", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("libretin", "", status);
	displayChange_field("total", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("operaciones2", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_titulo(row, status);
	displayChange_field_mensaje(row, status);
	displayChange_field_cl_identificacion(row, status);
	displayChange_field_cl_nombre(row, status);
	displayChange_field_cl_direccion(row, status);
	displayChange_field_cl_telefono(row, status);
	displayChange_field_cl_email(row, status);
	displayChange_field_contrato(row, status);
	displayChange_field_tesoreria(row, status);
	displayChange_field_saldo_por_pagar(row, status);
	displayChange_field_usar_compensacion(row, status);
	displayChange_field_forma_pago(row, status);
	displayChange_field_valor_pago(row, status);
	displayChange_field_documento(row, status);
	displayChange_field_libretin(row, status);
	displayChange_field_total(row, status);
	displayChange_field_operaciones2(row, status);
}

function displayChange_field(field, row, status) {
	if ("titulo" == field) {
		displayChange_field_titulo(row, status);
	}
	if ("mensaje" == field) {
		displayChange_field_mensaje(row, status);
	}
	if ("cl_identificacion" == field) {
		displayChange_field_cl_identificacion(row, status);
	}
	if ("cl_nombre" == field) {
		displayChange_field_cl_nombre(row, status);
	}
	if ("cl_direccion" == field) {
		displayChange_field_cl_direccion(row, status);
	}
	if ("cl_telefono" == field) {
		displayChange_field_cl_telefono(row, status);
	}
	if ("cl_email" == field) {
		displayChange_field_cl_email(row, status);
	}
	if ("contrato" == field) {
		displayChange_field_contrato(row, status);
	}
	if ("tesoreria" == field) {
		displayChange_field_tesoreria(row, status);
	}
	if ("saldo_por_pagar" == field) {
		displayChange_field_saldo_por_pagar(row, status);
	}
	if ("usar_compensacion" == field) {
		displayChange_field_usar_compensacion(row, status);
	}
	if ("forma_pago" == field) {
		displayChange_field_forma_pago(row, status);
	}
	if ("valor_pago" == field) {
		displayChange_field_valor_pago(row, status);
	}
	if ("documento" == field) {
		displayChange_field_documento(row, status);
	}
	if ("libretin" == field) {
		displayChange_field_libretin(row, status);
	}
	if ("total" == field) {
		displayChange_field_total(row, status);
	}
	if ("operaciones2" == field) {
		displayChange_field_operaciones2(row, status);
	}
}

function displayChange_field_titulo(row, status) {
    var fieldId;
}

function displayChange_field_mensaje(row, status) {
    var fieldId;
}

function displayChange_field_cl_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_cl_nombre(row, status) {
    var fieldId;
}

function displayChange_field_cl_direccion(row, status) {
    var fieldId;
}

function displayChange_field_cl_telefono(row, status) {
    var fieldId;
}

function displayChange_field_cl_email(row, status) {
    var fieldId;
}

function displayChange_field_contrato(row, status) {
    var fieldId;
}

function displayChange_field_tesoreria(row, status) {
    var fieldId;
}

function displayChange_field_saldo_por_pagar(row, status) {
    var fieldId;
}

function displayChange_field_usar_compensacion(row, status) {
    var fieldId;
}

function displayChange_field_forma_pago(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_forma_pago__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_forma_pago" + row).select2("destroy");
		}
		scJQSelect2Add(row, "forma_pago");
	}
}

function displayChange_field_valor_pago(row, status) {
    var fieldId;
}

function displayChange_field_documento(row, status) {
    var fieldId;
}

function displayChange_field_libretin(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_libretin__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_libretin" + row).select2("destroy");
		}
		scJQSelect2Add(row, "libretin");
	}
}

function displayChange_field_total(row, status) {
    var fieldId;
}

function displayChange_field_operaciones2(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_fac_operacion_contrato")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_fac_operacion_contrato")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_forma_pago("all", "on");
	displayChange_field_libretin("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_recaudacion_x_contrato_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(39);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_recaudacion_x_contrato_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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

function scJQPasswordToggleAdd(seqRow) {
  $(".sc-ui-pwd-toggle-icon" + seqRow).on("click", function() {
    var fieldName = $(this).attr("id").substr(17), fieldObj = $("#id_sc_field_" + fieldName), fieldFA = $("#id_pwd_fa_" + fieldName);
    if ("text" == fieldObj.attr("type")) {
      fieldObj.attr("type", "password");
      fieldFA.attr("class", "fa fa-eye sc-ui-pwd-eye");
    } else {
      fieldObj.attr("type", "text");
      fieldFA.attr("class", "fa fa-eye-slash sc-ui-pwd-eye");
    }
  });
} // scJQPasswordToggleAdd

function scJQSelect2Add(seqRow, specificField) {
  if (null == specificField || "forma_pago" == specificField) {
    scJQSelect2Add_forma_pago(seqRow);
  }
  if (null == specificField || "libretin" == specificField) {
    scJQSelect2Add_libretin(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_forma_pago(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_forma_pago_obj" : "#id_sc_field_forma_pago" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_forma_pago_obj',
      dropdownCssClass: 'css_forma_pago_obj',
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

function scJQSelect2Add_libretin(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_libretin_obj" : "#id_sc_field_libretin" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_libretin_obj',
      dropdownCssClass: 'css_libretin_obj',
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
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_forma_pago) { displayChange_field_forma_pago(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_libretin) { displayChange_field_libretin(iLine, "on"); } }, 150);
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

