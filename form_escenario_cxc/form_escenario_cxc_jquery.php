
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

  if ($oField.length > 0) {
    switch ($oField[0].name) {
      case 'titulo':
      case 'fac_fecha':
      case 'fac_tipo_cartera':
      case 'fac_tipo_comprobante':
      case 'fac_dias_vigencia':
      case 'fac_numero':
      case 'fac_comentario':
      case 'detalle':
      case 'fac_subtotal':
      case 'fac_subtotal_iva':
      case 'fac_subtotal_cero':
      case 'fac_subtotal_no_objeto':
      case 'fac_subtotal_excento':
      case 'fac_total_descuento':
      case 'fac_valor_ice':
      case 'fac_valor_iva':
      case 'fac_valor_irbpnr':
      case 'fac_total':
      case 'fac_estado':
        sc_exib_ocult_pag('form_escenario_cxc_form0');
        break;
      case 'clientes':
        sc_exib_ocult_pag('form_escenario_cxc_form1');
        break;
    }
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
  scEventControl_data["fac_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_tipo_cartera" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_tipo_comprobante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_dias_vigencia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_numero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_comentario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detalle" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_cero" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_no_objeto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_subtotal_excento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_total_descuento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_ice" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_iva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_irbpnr" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["clientes" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_fecha" + iSeqRow] && scEventControl_data["fac_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_fecha" + iSeqRow] && scEventControl_data["fac_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_cartera" + iSeqRow] && scEventControl_data["fac_tipo_cartera" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_cartera" + iSeqRow] && scEventControl_data["fac_tipo_cartera" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_comprobante" + iSeqRow] && scEventControl_data["fac_tipo_comprobante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_comprobante" + iSeqRow] && scEventControl_data["fac_tipo_comprobante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_dias_vigencia" + iSeqRow] && scEventControl_data["fac_dias_vigencia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_dias_vigencia" + iSeqRow] && scEventControl_data["fac_dias_vigencia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_numero" + iSeqRow] && scEventControl_data["fac_numero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_numero" + iSeqRow] && scEventControl_data["fac_numero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_comentario" + iSeqRow] && scEventControl_data["fac_comentario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_comentario" + iSeqRow] && scEventControl_data["fac_comentario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow] && scEventControl_data["detalle" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detalle" + iSeqRow] && scEventControl_data["detalle" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal" + iSeqRow] && scEventControl_data["fac_subtotal" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal" + iSeqRow] && scEventControl_data["fac_subtotal" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_iva" + iSeqRow] && scEventControl_data["fac_subtotal_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_iva" + iSeqRow] && scEventControl_data["fac_subtotal_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_cero" + iSeqRow] && scEventControl_data["fac_subtotal_cero" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_cero" + iSeqRow] && scEventControl_data["fac_subtotal_cero" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_no_objeto" + iSeqRow] && scEventControl_data["fac_subtotal_no_objeto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_no_objeto" + iSeqRow] && scEventControl_data["fac_subtotal_no_objeto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_excento" + iSeqRow] && scEventControl_data["fac_subtotal_excento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_subtotal_excento" + iSeqRow] && scEventControl_data["fac_subtotal_excento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_total_descuento" + iSeqRow] && scEventControl_data["fac_total_descuento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_total_descuento" + iSeqRow] && scEventControl_data["fac_total_descuento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_ice" + iSeqRow] && scEventControl_data["fac_valor_ice" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_ice" + iSeqRow] && scEventControl_data["fac_valor_ice" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_iva" + iSeqRow] && scEventControl_data["fac_valor_iva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_iva" + iSeqRow] && scEventControl_data["fac_valor_iva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_irbpnr" + iSeqRow] && scEventControl_data["fac_valor_irbpnr" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_irbpnr" + iSeqRow] && scEventControl_data["fac_valor_irbpnr" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_total" + iSeqRow] && scEventControl_data["fac_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_total" + iSeqRow] && scEventControl_data["fac_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_estado" + iSeqRow] && scEventControl_data["fac_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_estado" + iSeqRow] && scEventControl_data["fac_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["clientes" + iSeqRow] && scEventControl_data["clientes" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["clientes" + iSeqRow] && scEventControl_data["clientes" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("fac_tipo_cartera" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_tipo_comprobante" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_aplica_propina" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("fac_libretin" + iSeq == fieldName) {
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
  $('#id_sc_field_fac_numero' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_numero_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_escenario_cxc_fac_numero_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_escenario_cxc_fac_numero_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_tipo_cartera' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_tipo_cartera_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_escenario_cxc_fac_tipo_cartera_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_escenario_cxc_fac_tipo_cartera_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_tipo_comprobante' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_tipo_comprobante_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_escenario_cxc_fac_tipo_comprobante_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_escenario_cxc_fac_tipo_comprobante_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_empresa' + iSeqRow).bind('change', function() { sc_form_escenario_cxc_fac_empresa_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_fecha' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_fecha_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_escenario_cxc_fac_fecha_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_escenario_cxc_fac_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_comentario' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_comentario_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_escenario_cxc_fac_comentario_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_escenario_cxc_fac_comentario_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_iva' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_subtotal_iva_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_escenario_cxc_fac_subtotal_iva_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_escenario_cxc_fac_subtotal_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_cero' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_subtotal_cero_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_escenario_cxc_fac_subtotal_cero_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_escenario_cxc_fac_subtotal_cero_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_no_objeto' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_subtotal_no_objeto_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_escenario_cxc_fac_subtotal_no_objeto_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_escenario_cxc_fac_subtotal_no_objeto_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_excento' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_subtotal_excento_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_escenario_cxc_fac_subtotal_excento_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_escenario_cxc_fac_subtotal_excento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_subtotal_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_escenario_cxc_fac_subtotal_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_escenario_cxc_fac_subtotal_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_total_descuento' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_total_descuento_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_escenario_cxc_fac_total_descuento_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_escenario_cxc_fac_total_descuento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_ice' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_valor_ice_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_escenario_cxc_fac_valor_ice_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_escenario_cxc_fac_valor_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_iva' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_valor_iva_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_escenario_cxc_fac_valor_iva_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_escenario_cxc_fac_valor_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_irbpnr' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_valor_irbpnr_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_escenario_cxc_fac_valor_irbpnr_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_escenario_cxc_fac_valor_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_total' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_total_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_escenario_cxc_fac_total_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_escenario_cxc_fac_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_estado' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_escenario_cxc_fac_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_escenario_cxc_fac_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_usuario' + iSeqRow).bind('change', function() { sc_form_escenario_cxc_fac_usuario_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_dias_vigencia' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_fac_dias_vigencia_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_escenario_cxc_fac_dias_vigencia_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_escenario_cxc_fac_dias_vigencia_onfocus(this, iSeqRow) });
  $('#id_sc_field_clientes' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_clientes_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_escenario_cxc_clientes_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_escenario_cxc_clientes_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalle' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_detalle_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_escenario_cxc_detalle_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_escenario_cxc_detalle_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo' + iSeqRow).bind('blur', function() { sc_form_escenario_cxc_titulo_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_escenario_cxc_titulo_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_escenario_cxc_titulo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_escenario_cxc_fac_numero_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_numero();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_numero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_numero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_tipo_cartera_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_tipo_cartera();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_tipo_cartera_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_tipo_cartera_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_tipo_comprobante_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_tipo_comprobante();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_tipo_comprobante_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_tipo_comprobante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_fecha();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_fecha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_comentario_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_comentario();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_comentario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_comentario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_subtotal_iva();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_subtotal_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_cero_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_subtotal_cero();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_cero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_subtotal_cero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_no_objeto_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_subtotal_no_objeto();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_no_objeto_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_subtotal_no_objeto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_excento_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_subtotal_excento();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_excento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_subtotal_excento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_subtotal();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_subtotal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_subtotal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_total_descuento_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_total_descuento();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_total_descuento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_total_descuento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_valor_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_valor_ice();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_valor_ice_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_valor_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_valor_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_valor_iva();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_valor_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_valor_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_valor_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_valor_irbpnr();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_valor_irbpnr_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_valor_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_total_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_total();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_total_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_estado();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_fac_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_dias_vigencia_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_fac_dias_vigencia();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_fac_dias_vigencia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_fac_dias_vigencia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_clientes_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_clientes();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_clientes_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_clientes_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_detalle_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_detalle();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_detalle_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_detalle_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_escenario_cxc_titulo_onblur(oThis, iSeqRow) {
  do_ajax_form_escenario_cxc_validate_titulo();
  scCssBlur(oThis);
}

function sc_form_escenario_cxc_titulo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_escenario_cxc_titulo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_page(page, status) {
	if ("0" == page) {
		displayChange_page_0(status);
	}
	if ("1" == page) {
		displayChange_page_1(status);
	}
}

function displayChange_page_0(status) {
	displayChange_block("0", status);
	displayChange_block("1", status);
	displayChange_block("2", status);
	displayChange_block("3", status);
	displayChange_block("4", status);
}

function displayChange_page_1(status) {
	displayChange_block("5", status);
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
	if ("5" == block) {
		displayChange_block_5(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("titulo", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("fac_fecha", "", status);
	displayChange_field("fac_tipo_cartera", "", status);
	displayChange_field("fac_tipo_comprobante", "", status);
	displayChange_field("fac_dias_vigencia", "", status);
	displayChange_field("fac_numero", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("fac_comentario", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("detalle", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("fac_subtotal", "", status);
	displayChange_field("fac_subtotal_iva", "", status);
	displayChange_field("fac_subtotal_cero", "", status);
	displayChange_field("fac_subtotal_no_objeto", "", status);
	displayChange_field("fac_subtotal_excento", "", status);
	displayChange_field("fac_total_descuento", "", status);
	displayChange_field("fac_valor_ice", "", status);
	displayChange_field("fac_valor_iva", "", status);
	displayChange_field("fac_valor_irbpnr", "", status);
	displayChange_field("fac_total", "", status);
	displayChange_field("fac_estado", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("clientes", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_titulo(row, status);
	displayChange_field_fac_fecha(row, status);
	displayChange_field_fac_tipo_cartera(row, status);
	displayChange_field_fac_tipo_comprobante(row, status);
	displayChange_field_fac_dias_vigencia(row, status);
	displayChange_field_fac_numero(row, status);
	displayChange_field_fac_comentario(row, status);
	displayChange_field_detalle(row, status);
	displayChange_field_fac_subtotal(row, status);
	displayChange_field_fac_subtotal_iva(row, status);
	displayChange_field_fac_subtotal_cero(row, status);
	displayChange_field_fac_subtotal_no_objeto(row, status);
	displayChange_field_fac_subtotal_excento(row, status);
	displayChange_field_fac_total_descuento(row, status);
	displayChange_field_fac_valor_ice(row, status);
	displayChange_field_fac_valor_iva(row, status);
	displayChange_field_fac_valor_irbpnr(row, status);
	displayChange_field_fac_total(row, status);
	displayChange_field_fac_estado(row, status);
	displayChange_field_clientes(row, status);
}

function displayChange_field(field, row, status) {
	if ("titulo" == field) {
		displayChange_field_titulo(row, status);
	}
	if ("fac_fecha" == field) {
		displayChange_field_fac_fecha(row, status);
	}
	if ("fac_tipo_cartera" == field) {
		displayChange_field_fac_tipo_cartera(row, status);
	}
	if ("fac_tipo_comprobante" == field) {
		displayChange_field_fac_tipo_comprobante(row, status);
	}
	if ("fac_dias_vigencia" == field) {
		displayChange_field_fac_dias_vigencia(row, status);
	}
	if ("fac_numero" == field) {
		displayChange_field_fac_numero(row, status);
	}
	if ("fac_comentario" == field) {
		displayChange_field_fac_comentario(row, status);
	}
	if ("detalle" == field) {
		displayChange_field_detalle(row, status);
	}
	if ("fac_subtotal" == field) {
		displayChange_field_fac_subtotal(row, status);
	}
	if ("fac_subtotal_iva" == field) {
		displayChange_field_fac_subtotal_iva(row, status);
	}
	if ("fac_subtotal_cero" == field) {
		displayChange_field_fac_subtotal_cero(row, status);
	}
	if ("fac_subtotal_no_objeto" == field) {
		displayChange_field_fac_subtotal_no_objeto(row, status);
	}
	if ("fac_subtotal_excento" == field) {
		displayChange_field_fac_subtotal_excento(row, status);
	}
	if ("fac_total_descuento" == field) {
		displayChange_field_fac_total_descuento(row, status);
	}
	if ("fac_valor_ice" == field) {
		displayChange_field_fac_valor_ice(row, status);
	}
	if ("fac_valor_iva" == field) {
		displayChange_field_fac_valor_iva(row, status);
	}
	if ("fac_valor_irbpnr" == field) {
		displayChange_field_fac_valor_irbpnr(row, status);
	}
	if ("fac_total" == field) {
		displayChange_field_fac_total(row, status);
	}
	if ("fac_estado" == field) {
		displayChange_field_fac_estado(row, status);
	}
	if ("clientes" == field) {
		displayChange_field_clientes(row, status);
	}
}

function displayChange_field_titulo(row, status) {
    var fieldId;
}

function displayChange_field_fac_fecha(row, status) {
    var fieldId;
}

function displayChange_field_fac_tipo_cartera(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_tipo_cartera__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_tipo_cartera" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_tipo_cartera");
	}
}

function displayChange_field_fac_tipo_comprobante(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_tipo_comprobante__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_tipo_comprobante" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_tipo_comprobante");
	}
}

function displayChange_field_fac_dias_vigencia(row, status) {
    var fieldId;
}

function displayChange_field_fac_numero(row, status) {
    var fieldId;
}

function displayChange_field_fac_comentario(row, status) {
    var fieldId;
}

function displayChange_field_detalle(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_detalle_escenario_cxc")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_detalle_escenario_cxc")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_fac_subtotal(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_iva(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_cero(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_no_objeto(row, status) {
    var fieldId;
}

function displayChange_field_fac_subtotal_excento(row, status) {
    var fieldId;
}

function displayChange_field_fac_total_descuento(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_ice(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_iva(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_irbpnr(row, status) {
    var fieldId;
}

function displayChange_field_fac_total(row, status) {
    var fieldId;
}

function displayChange_field_fac_estado(row, status) {
    var fieldId;
}

function displayChange_field_clientes(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_cliente_escenario_cxc")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_cliente_escenario_cxc")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_fac_tipo_cartera("all", "on");
	displayChange_field_fac_tipo_comprobante("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_escenario_cxc_form" + pageNo).hide();
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
  $("#id_sc_field_fac_fecha" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fac_fecha" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      setTimeout(function() { do_ajax_form_escenario_cxc_validate_fac_fecha(iSeqRow); }, 200);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fac_fecha']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_escenario_cxc')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "fac_tipo_cartera" == specificField) {
    scJQSelect2Add_fac_tipo_cartera(seqRow);
  }
  if (null == specificField || "fac_tipo_comprobante" == specificField) {
    scJQSelect2Add_fac_tipo_comprobante(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_fac_tipo_cartera(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_tipo_cartera_obj" : "#id_sc_field_fac_tipo_cartera" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fac_tipo_cartera_obj',
      dropdownCssClass: 'css_fac_tipo_cartera_obj',
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

function scJQSelect2Add_fac_tipo_comprobante(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_tipo_comprobante_obj" : "#id_sc_field_fac_tipo_comprobante" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fac_tipo_comprobante_obj',
      dropdownCssClass: 'css_fac_tipo_comprobante_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_tipo_cartera) { displayChange_field_fac_tipo_cartera(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_tipo_comprobante) { displayChange_field_fac_tipo_comprobante(iLine, "on"); } }, 150);
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

