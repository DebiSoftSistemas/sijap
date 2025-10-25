
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
  scEventControl_data["op_operacion_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_fecha_ini_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_comentario_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_subtotal_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_subtotal_iva_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_total_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_seleccion_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["op_propietario_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["op_operacion_" + iSeqRow] && scEventControl_data["op_operacion_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_operacion_" + iSeqRow] && scEventControl_data["op_operacion_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_fecha_ini_" + iSeqRow] && scEventControl_data["op_fecha_ini_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_fecha_ini_" + iSeqRow] && scEventControl_data["op_fecha_ini_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_comentario_" + iSeqRow] && scEventControl_data["op_comentario_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_comentario_" + iSeqRow] && scEventControl_data["op_comentario_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_subtotal_" + iSeqRow] && scEventControl_data["op_subtotal_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_subtotal_" + iSeqRow] && scEventControl_data["op_subtotal_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_subtotal_iva_" + iSeqRow] && scEventControl_data["op_subtotal_iva_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_subtotal_iva_" + iSeqRow] && scEventControl_data["op_subtotal_iva_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_total_" + iSeqRow] && scEventControl_data["op_total_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_total_" + iSeqRow] && scEventControl_data["op_total_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_seleccion_" + iSeqRow] && scEventControl_data["op_seleccion_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_seleccion_" + iSeqRow] && scEventControl_data["op_seleccion_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["op_propietario_" + iSeqRow] && scEventControl_data["op_propietario_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["op_propietario_" + iSeqRow] && scEventControl_data["op_propietario_" + iSeqRow]["change"]) {
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
  if ("op_seleccion_" + iSeq == fieldName) {
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

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_op_operacion_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_operacion__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_fac_operacion_op_operacion__onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_fac_operacion_op_operacion__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_empresa_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_empresa__onchange(this, iSeqRow) });
  $('#id_sc_field_op_fecha_emision_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_fecha_emision__onchange(this, iSeqRow) });
  $('#id_sc_field_op_fecha_ini_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_fecha_ini__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_fac_operacion_op_fecha_ini__onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_fac_operacion_op_fecha_ini__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_fecha_fin_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_fecha_fin__onchange(this, iSeqRow) });
  $('#id_sc_field_op_modulo_genera_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_modulo_genera__onchange(this, iSeqRow) });
  $('#id_sc_field_op_tipo_cartera_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_tipo_cartera__onchange(this, iSeqRow) });
  $('#id_sc_field_op_propietario_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_propietario__onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_fac_operacion_op_propietario__onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_fac_operacion_op_propietario__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_comentario_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_comentario__onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_fac_operacion_op_comentario__onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_fac_operacion_op_comentario__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_subtotal_cero_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_subtotal_cero__onchange(this, iSeqRow) });
  $('#id_sc_field_op_iva_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_iva__onchange(this, iSeqRow) });
  $('#id_sc_field_op_escenario_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_escenario__onchange(this, iSeqRow) });
  $('#id_sc_field_op_usuario_emite_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_usuario_emite__onchange(this, iSeqRow) });
  $('#id_sc_field_op_convenio_pago_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_convenio_pago__onchange(this, iSeqRow) });
  $('#id_sc_field_op_dias_vencido_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_dias_vencido__onchange(this, iSeqRow) });
  $('#id_sc_field_op_motivo_baja_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_motivo_baja__onchange(this, iSeqRow) });
  $('#id_sc_field_op_fecha_baja_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_fecha_baja__onchange(this, iSeqRow) });
  $('#id_sc_field_op_fecha_baja__hora' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_fecha_baja__hora_onchange(this, iSeqRow) });
  $('#id_sc_field_op_usuario_baja_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_usuario_baja__onchange(this, iSeqRow) });
  $('#id_sc_field_op_terminal_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_terminal__onchange(this, iSeqRow) });
  $('#id_sc_field_op_asiento_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_asiento__onchange(this, iSeqRow) });
  $('#id_sc_field_op_tipo_comprobante_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_tipo_comprobante__onchange(this, iSeqRow) });
  $('#id_sc_field_op_estado_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_estado__onchange(this, iSeqRow) });
  $('#id_sc_field_op_contrato_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_contrato__onchange(this, iSeqRow) });
  $('#id_sc_field_op_seleccion_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_seleccion__onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_fac_operacion_op_seleccion__onchange(this, iSeqRow) })
                                           .bind('click', function() { sc_form_fac_operacion_op_seleccion__onclick(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_fac_operacion_op_seleccion__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_usuario_selecciona_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_usuario_selecciona__onchange(this, iSeqRow) });
  $('#id_sc_field_op_factura_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_factura__onchange(this, iSeqRow) });
  $('#id_sc_field_op_asiento_anula_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_asiento_anula__onchange(this, iSeqRow) });
  $('#id_sc_field_op_subtotal_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_subtotal__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_fac_operacion_op_subtotal__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_fac_operacion_op_subtotal__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_total_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_total__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_fac_operacion_op_total__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_operacion_op_total__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_subtotal_iva_' + iSeqRow).bind('blur', function() { sc_form_fac_operacion_op_subtotal_iva__onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_fac_operacion_op_subtotal_iva__onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_fac_operacion_op_subtotal_iva__onfocus(this, iSeqRow) });
  $('#id_sc_field_op_total_descuento_' + iSeqRow).bind('change', function() { sc_form_fac_operacion_op_total_descuento__onchange(this, iSeqRow) });
  $('.sc-ui-checkbox-op_seleccion_' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_fac_operacion_op_operacion__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_operacion_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_operacion__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_operacion__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_empresa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_fecha_emision__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_fecha_ini__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_fecha_ini_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_fecha_ini__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_fecha_ini__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_fecha_fin__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_modulo_genera__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_tipo_cartera__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_propietario__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_propietario_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_propietario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_propietario__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_comentario__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_comentario_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_comentario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_comentario__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_subtotal_cero__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_escenario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_usuario_emite__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_convenio_pago__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_dias_vencido__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_motivo_baja__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_fecha_baja__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_fecha_baja__hora_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_usuario_baja__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_terminal__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_asiento__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_tipo_comprobante__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_estado__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_contrato__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_seleccion__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_seleccion_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_seleccion__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_fac_operacion_event_op_seleccion__onchange(iSeqRow);
}

function sc_form_fac_operacion_op_seleccion__onclick(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_event_op_seleccion__onclick(iSeqRow);
}

function sc_form_fac_operacion_op_seleccion__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_usuario_selecciona__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_factura__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_asiento_anula__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_subtotal__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_subtotal_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_subtotal__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_subtotal__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_total__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_total_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_total__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_total__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_subtotal_iva__onblur(oThis, iSeqRow) {
  do_ajax_form_fac_operacion_validate_op_subtotal_iva_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_subtotal_iva__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_fac_operacion_op_subtotal_iva__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_fac_operacion_op_total_descuento__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("op_operacion_", "", status);
	displayChange_field("op_fecha_ini_", "", status);
	displayChange_field("op_comentario_", "", status);
	displayChange_field("op_subtotal_", "", status);
	displayChange_field("op_subtotal_iva_", "", status);
	displayChange_field("op_total_", "", status);
	displayChange_field("op_seleccion_", "", status);
	displayChange_field("op_propietario_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_op_operacion_(row, status);
	displayChange_field_op_fecha_ini_(row, status);
	displayChange_field_op_comentario_(row, status);
	displayChange_field_op_subtotal_(row, status);
	displayChange_field_op_subtotal_iva_(row, status);
	displayChange_field_op_total_(row, status);
	displayChange_field_op_seleccion_(row, status);
	displayChange_field_op_propietario_(row, status);
}

function displayChange_field(field, row, status) {
	if ("op_operacion_" == field) {
		displayChange_field_op_operacion_(row, status);
	}
	if ("op_fecha_ini_" == field) {
		displayChange_field_op_fecha_ini_(row, status);
	}
	if ("op_comentario_" == field) {
		displayChange_field_op_comentario_(row, status);
	}
	if ("op_subtotal_" == field) {
		displayChange_field_op_subtotal_(row, status);
	}
	if ("op_subtotal_iva_" == field) {
		displayChange_field_op_subtotal_iva_(row, status);
	}
	if ("op_total_" == field) {
		displayChange_field_op_total_(row, status);
	}
	if ("op_seleccion_" == field) {
		displayChange_field_op_seleccion_(row, status);
	}
	if ("op_propietario_" == field) {
		displayChange_field_op_propietario_(row, status);
	}
}

function displayChange_field_op_operacion_(row, status) {
    var fieldId;
}

function displayChange_field_op_fecha_ini_(row, status) {
    var fieldId;
}

function displayChange_field_op_comentario_(row, status) {
    var fieldId;
}

function displayChange_field_op_subtotal_(row, status) {
    var fieldId;
}

function displayChange_field_op_subtotal_iva_(row, status) {
    var fieldId;
}

function displayChange_field_op_total_(row, status) {
    var fieldId;
}

function displayChange_field_op_seleccion_(row, status) {
    var fieldId;
}

function displayChange_field_op_propietario_(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_fac_operacion_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(26);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_op_fecha_baja_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_op_fecha_baja_" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['op_fecha_baja_']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['op_fecha_baja_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime)
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
    },
    onClose: function(dateText, inst) {
      do_ajax_form_fac_operacion_validate_op_fecha_baja_(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['op_fecha_baja_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  })
<?php
if ('' != $miniCalendarFA) {
?>
    .next('button').append("<?php echo $miniCalendarFA; ?>")
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    .next('button').append("<?php echo $miniCalendarButton[0]; ?>")
<?php
}
?>
} // scJQCalendarAdd

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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_fac_operacion')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
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

