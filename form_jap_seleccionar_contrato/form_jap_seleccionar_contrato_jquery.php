
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

  scJQCheckboxControl_general('')
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
  scEventControl_data["con_seleccionar_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_id_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_empresa_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_ruta_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_propietario_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_tipo_servicio_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_numero_contrato_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_numero_medidor_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_direccion_predio_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_estado_" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["con_seleccionar_" + iSeqRow] && scEventControl_data["con_seleccionar_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_seleccionar_" + iSeqRow] && scEventControl_data["con_seleccionar_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_id_" + iSeqRow] && scEventControl_data["con_id_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_id_" + iSeqRow] && scEventControl_data["con_id_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_empresa_" + iSeqRow] && scEventControl_data["con_empresa_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_empresa_" + iSeqRow] && scEventControl_data["con_empresa_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_ruta_" + iSeqRow] && scEventControl_data["con_ruta_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_ruta_" + iSeqRow] && scEventControl_data["con_ruta_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_propietario_" + iSeqRow] && scEventControl_data["con_propietario_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_propietario_" + iSeqRow] && scEventControl_data["con_propietario_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_tipo_servicio_" + iSeqRow] && scEventControl_data["con_tipo_servicio_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_tipo_servicio_" + iSeqRow] && scEventControl_data["con_tipo_servicio_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_numero_contrato_" + iSeqRow] && scEventControl_data["con_numero_contrato_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_numero_contrato_" + iSeqRow] && scEventControl_data["con_numero_contrato_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_numero_medidor_" + iSeqRow] && scEventControl_data["con_numero_medidor_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_numero_medidor_" + iSeqRow] && scEventControl_data["con_numero_medidor_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_direccion_predio_" + iSeqRow] && scEventControl_data["con_direccion_predio_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_direccion_predio_" + iSeqRow] && scEventControl_data["con_direccion_predio_" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_estado_" + iSeqRow] && scEventControl_data["con_estado_" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_estado_" + iSeqRow] && scEventControl_data["con_estado_" + iSeqRow]["change"]) {
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
  if ("con_ruta_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_propietario_" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_estado_" + iSeq == fieldName) {
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
  $('#id_sc_field_con_id_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_id__onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_jap_seleccionar_contrato_con_id__onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_id__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_empresa_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_empresa__onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_jap_seleccionar_contrato_con_empresa__onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_empresa__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_propietario_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_propietario__onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_jap_seleccionar_contrato_con_propietario__onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_propietario__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_pais_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_pais__onchange(this, iSeqRow) });
  $('#id_sc_field_con_provincia_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_provincia__onchange(this, iSeqRow) });
  $('#id_sc_field_con_canton_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_canton__onchange(this, iSeqRow) });
  $('#id_sc_field_con_parroquia_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_parroquia__onchange(this, iSeqRow) });
  $('#id_sc_field_con_direccion_predio_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_direccion_predio__onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_jap_seleccionar_contrato_con_direccion_predio__onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_direccion_predio__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_toma_administrativa_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_toma_administrativa__onchange(this, iSeqRow) });
  $('#id_sc_field_con_toma_operativa_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_toma_operativa__onchange(this, iSeqRow) });
  $('#id_sc_field_con_tipo_servicio_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_tipo_servicio__onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_seleccionar_contrato_con_tipo_servicio__onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_tipo_servicio__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_condicion_contrato_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_condicion_contrato__onchange(this, iSeqRow) });
  $('#id_sc_field_con_numero_medidor_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_numero_medidor__onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_jap_seleccionar_contrato_con_numero_medidor__onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_numero_medidor__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_usuario_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_usuario__onchange(this, iSeqRow) });
  $('#id_sc_field_con_fecha_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_fecha__onchange(this, iSeqRow) });
  $('#id_sc_field_con_terminal_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_terminal__onchange(this, iSeqRow) });
  $('#id_sc_field_con_estado_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_estado__onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_jap_seleccionar_contrato_con_estado__onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_estado__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_motivo_anulacion_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_motivo_anulacion__onchange(this, iSeqRow) });
  $('#id_sc_field_con_tipo_contrato_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_tipo_contrato__onchange(this, iSeqRow) });
  $('#id_sc_field_con_total_a_pagar_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_total_a_pagar__onchange(this, iSeqRow) });
  $('#id_sc_field_con_abono_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_abono__onchange(this, iSeqRow) });
  $('#id_sc_field_con_plazo_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_plazo__onchange(this, iSeqRow) });
  $('#id_sc_field_con_fecha_instalacion_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_fecha_instalacion__onchange(this, iSeqRow) });
  $('#id_sc_field_con_observaciones_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_observaciones__onchange(this, iSeqRow) });
  $('#id_sc_field_con_usuario_instala_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_usuario_instala__onchange(this, iSeqRow) });
  $('#id_sc_field_con_numero_contrato_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_numero_contrato__onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_jap_seleccionar_contrato_con_numero_contrato__onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_numero_contrato__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_maxima_lectura_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_maxima_lectura__onchange(this, iSeqRow) });
  $('#id_sc_field_con_lectura_actual_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_lectura_actual__onchange(this, iSeqRow) });
  $('#id_sc_field_con_fecha_lectura_' + iSeqRow).bind('change', function() { sc_form_jap_seleccionar_contrato_con_fecha_lectura__onchange(this, iSeqRow) });
  $('#id_sc_field_con_ruta_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_ruta__onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_seleccionar_contrato_con_ruta__onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_ruta__onfocus(this, iSeqRow) });
  $('#id_sc_field_con_seleccionar_' + iSeqRow).bind('blur', function() { sc_form_jap_seleccionar_contrato_con_seleccionar__onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_jap_seleccionar_contrato_con_seleccionar__onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_jap_seleccionar_contrato_con_seleccionar__onfocus(this, iSeqRow) });
  $('.sc-ui-checkbox-con_seleccionar_' + iSeqRow).on('click', function() { scMarkFormAsChanged(); });
} // scJQEventsAdd

function sc_form_jap_seleccionar_contrato_con_id__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_id_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_id__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_id__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_empresa__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_empresa_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_empresa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_empresa__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_propietario__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_propietario_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_propietario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_propietario__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_pais__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_provincia__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_canton__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_parroquia__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_direccion_predio__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_direccion_predio_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_direccion_predio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_direccion_predio__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_toma_administrativa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_toma_operativa__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_tipo_servicio__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_tipo_servicio_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_tipo_servicio__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_tipo_servicio__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_condicion_contrato__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_numero_medidor__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_numero_medidor_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_numero_medidor__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_numero_medidor__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_usuario__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_fecha__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_terminal__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_estado__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_estado_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_estado__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_estado__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_motivo_anulacion__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_tipo_contrato__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_total_a_pagar__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_abono__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_plazo__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_fecha_instalacion__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_observaciones__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_usuario_instala__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_numero_contrato__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_numero_contrato_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_numero_contrato__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_numero_contrato__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_maxima_lectura__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_lectura_actual__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_fecha_lectura__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_seleccionar_contrato_con_ruta__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_ruta_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_ruta__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_ruta__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_seleccionar__onblur(oThis, iSeqRow) {
  do_ajax_form_jap_seleccionar_contrato_validate_con_seleccionar_(iSeqRow);
  scCssBlur(oThis, iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_seleccionar__onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_check_insert(iSeqRow);
}

function sc_form_jap_seleccionar_contrato_con_seleccionar__onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis, iSeqRow);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("con_seleccionar_", "", status);
	displayChange_field("con_id_", "", status);
	displayChange_field("con_empresa_", "", status);
	displayChange_field("con_ruta_", "", status);
	displayChange_field("con_propietario_", "", status);
	displayChange_field("con_tipo_servicio_", "", status);
	displayChange_field("con_numero_contrato_", "", status);
	displayChange_field("con_numero_medidor_", "", status);
	displayChange_field("con_direccion_predio_", "", status);
	displayChange_field("con_estado_", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_con_seleccionar_(row, status);
	displayChange_field_con_id_(row, status);
	displayChange_field_con_empresa_(row, status);
	displayChange_field_con_ruta_(row, status);
	displayChange_field_con_propietario_(row, status);
	displayChange_field_con_tipo_servicio_(row, status);
	displayChange_field_con_numero_contrato_(row, status);
	displayChange_field_con_numero_medidor_(row, status);
	displayChange_field_con_direccion_predio_(row, status);
	displayChange_field_con_estado_(row, status);
}

function displayChange_field(field, row, status) {
	if ("con_seleccionar_" == field) {
		displayChange_field_con_seleccionar_(row, status);
	}
	if ("con_id_" == field) {
		displayChange_field_con_id_(row, status);
	}
	if ("con_empresa_" == field) {
		displayChange_field_con_empresa_(row, status);
	}
	if ("con_ruta_" == field) {
		displayChange_field_con_ruta_(row, status);
	}
	if ("con_propietario_" == field) {
		displayChange_field_con_propietario_(row, status);
	}
	if ("con_tipo_servicio_" == field) {
		displayChange_field_con_tipo_servicio_(row, status);
	}
	if ("con_numero_contrato_" == field) {
		displayChange_field_con_numero_contrato_(row, status);
	}
	if ("con_numero_medidor_" == field) {
		displayChange_field_con_numero_medidor_(row, status);
	}
	if ("con_direccion_predio_" == field) {
		displayChange_field_con_direccion_predio_(row, status);
	}
	if ("con_estado_" == field) {
		displayChange_field_con_estado_(row, status);
	}
}

function displayChange_field_con_seleccionar_(row, status) {
    var fieldId;
}

function displayChange_field_con_id_(row, status) {
    var fieldId;
}

function displayChange_field_con_empresa_(row, status) {
    var fieldId;
}

function displayChange_field_con_ruta_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_ruta___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_ruta_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_ruta_");
	}
}

function displayChange_field_con_propietario_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_propietario___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_propietario_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_propietario_");
	}
}

function displayChange_field_con_tipo_servicio_(row, status) {
    var fieldId;
}

function displayChange_field_con_numero_contrato_(row, status) {
    var fieldId;
}

function displayChange_field_con_numero_medidor_(row, status) {
    var fieldId;
}

function displayChange_field_con_direccion_predio_(row, status) {
    var fieldId;
}

function displayChange_field_con_estado_(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_estado___obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_estado_" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_estado_");
	}
}

function scRecreateSelect2() {
	displayChange_field_con_ruta_("all", "on");
	displayChange_field_con_propietario_("all", "on");
	displayChange_field_con_estado_("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_jap_seleccionar_contrato_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(37);
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
        if (headerPlaceholder.filter(":visible").length) {
            scJQCheckboxControl_updateHide();
        }
		headerPlaceholder.hide();
	}
	else {
		if (scIsHeaderVisible(formHeaders)) {
            if (headerPlaceholder.filter(":visible").length) {
                scJQCheckboxControl_updateHide();
            }
			headerPlaceholder.hide();
		}
		else {
			if (!headerPlaceholder.filter(":visible").length || forceDisplay) {
				scSetFixedHeadersContents(formHeaders, headerPlaceholder);
				scSetFixedHeadersSize(formHeaders);
				scJQCheckboxControl_updateShow();
				headerPlaceholder.show();
			}
			scSetFixedHeadersPosition(formHeaders, headerPlaceholder);
			if (0 < rerunHeaderDisplay) {
				rerunHeaderDisplay--;
				setTimeout(function() {
					scSetFixedHeadersContents(formHeaders, headerPlaceholder);
					scSetFixedHeadersSize(formHeaders);
					scJQCheckboxControl_updateShow();
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
	scJQCheckboxControl_general("#sc-id-fixedheaders-placeholder ");
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
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_con_fecha_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_con_fecha_" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_jap_seleccionar_contrato_validate_con_fecha_(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['con_fecha_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_con_fecha_instalacion_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_con_fecha_instalacion_" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_jap_seleccionar_contrato_validate_con_fecha_instalacion_(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['con_fecha_instalacion_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_con_fecha_lectura_" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_con_fecha_lectura_" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_jap_seleccionar_contrato_validate_con_fecha_lectura_(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['con_fecha_lectura_']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_jap_seleccionar_contrato')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "con_ruta_" == specificField) {
    scJQSelect2Add_con_ruta_(seqRow);
  }
  if (null == specificField || "con_propietario_" == specificField) {
    scJQSelect2Add_con_propietario_(seqRow);
  }
  if (null == specificField || "con_estado_" == specificField) {
    scJQSelect2Add_con_estado_(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_con_ruta_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_ruta__obj" : "#id_sc_field_con_ruta_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_ruta__obj',
      dropdownCssClass: 'css_con_ruta__obj',
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

function scJQSelect2Add_con_propietario_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_propietario__obj" : "#id_sc_field_con_propietario_" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_propietario__obj',
      dropdownCssClass: 'css_con_propietario__obj',
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

function scJQSelect2Add_con_estado_(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_estado__obj" : "#id_sc_field_con_estado_" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_estado__obj',
      dropdownCssClass: 'css_con_estado__obj',
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
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_ruta_) { displayChange_field_con_ruta_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_propietario_) { displayChange_field_con_propietario_(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_estado_) { displayChange_field_con_estado_(iLine, "on"); } }, 150);
} // scJQElementsAdd

function scJQCheckboxControl_general(mainContainer) {
    $(mainContainer + '.sc-ui-checkbox-con_seleccionar_-control').click(function() { scJQCheckboxControl('con_seleccionar_', '__ALL__', this); });
}

function scJQCheckboxControl_updateShow() {
    $('#sc-id-fixedheaders-placeholder .sc-ui-checkbox-con_seleccionar_-control').prop("checked", $('#div_hidden_bloco_0 .sc-ui-checkbox-con_seleccionar_-control').prop("checked"));
}

function scJQCheckboxControl_updateHide() {
    $('#div_hidden_bloco_0 .sc-ui-checkbox-con_seleccionar_-control').prop("checked", $('#sc-id-fixedheaders-placeholder .sc-ui-checkbox-con_seleccionar_-control').prop("checked"));
}

function scJQCheckboxControl(sColumn, sSeqRow, oCheckbox) {
  var iSeqRow = '';

  if ('__ALL__' == sColumn || 'con_seleccionar_' == sColumn) {
    iSeqRow = ('__REC__' == sSeqRow) ? $(oCheckbox).attr('alt') : '';
    scJQCheckboxControl_con_seleccionar_(iSeqRow, oCheckbox.checked);
    if ('__REC__' == sSeqRow) {
      nm_check_insert(iSeqRow);
    }
    else {
      if ('__ALL__' == sColumn || 'con_seleccionar_' == sColumn) {
         for (var i = 1; i <= iAjaxNewLine; i++) {
           nm_check_insert(i);
         }
      }
    }
    if ('__ALL__' == sColumn && '__ALL__' == sSeqRow) {
      var $oCheckbox = $(".sc-ui-checkbox-record-all");
      for (var i = 0; i < $oCheckbox.length; i++) {
        if (oCheckbox.checked != $oCheckbox[i].checked) {
          $oCheckbox[i].checked = oCheckbox.checked;
        }
      }
    }
  }

} // scJQCheckboxControl

function scJQCheckboxControl_con_seleccionar_(iSeqRow, bChecked) {
  if ('__ALL__' == iSeqRow) {
    var $oCheckbox = $(".sc-ui-checkbox-con_seleccionar_");
  }
  else {
    var $oCheckbox = $(".sc-ui-checkbox-con_seleccionar_" + iSeqRow);
  }

  var bChanged = false, lcsObjects;
  for (var i = 0; i < $oCheckbox.length; i++) {
    if (bChecked != $oCheckbox[i].checked && !$oCheckbox[i].disabled) {
      $oCheckbox[i].checked = bChecked;
      nm_check_insert(iSeqRow);
      lcsObjects = $($oCheckbox[i]).parent().find(".lcs_switch");
      if (lcsObjects.length) {
        if (bChecked) {
          lcsObjects.lcs_on();
        }
        else {
          lcsObjects.lcs_off();
        }
      }
      bChanged = true;
    }
  }
} // scJQCheckboxControl_con_seleccionar_

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

