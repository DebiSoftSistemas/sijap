
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
  scEventControl_data["fac_estado_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_error_sri" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_factura_socio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_moneda" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_serie_guia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["establecimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["punto_emision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["tipo_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ambiente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_establecimiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_punto_emision" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_secuencial" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_tipo_libretin" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_ambiente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_tipo_comprobante" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_socio_transportista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_transporte_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_correo_enviado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_asiento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["ruc" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_nombre_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_direccion_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_email_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_aplica_propina" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_diagnostico" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
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
  scEventControl_data["fac_propina" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_total" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_valor_entrega" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["fac_cambio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["forma_pago" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["titulo" + iSeqRow] && scEventControl_data["titulo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_estado_sri" + iSeqRow] && scEventControl_data["fac_estado_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_estado_sri" + iSeqRow] && scEventControl_data["fac_estado_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_error_sri" + iSeqRow] && scEventControl_data["fac_error_sri" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_error_sri" + iSeqRow] && scEventControl_data["fac_error_sri" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_factura_socio" + iSeqRow] && scEventControl_data["fac_factura_socio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_factura_socio" + iSeqRow] && scEventControl_data["fac_factura_socio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_fecha" + iSeqRow] && scEventControl_data["fac_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_fecha" + iSeqRow] && scEventControl_data["fac_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_libretin" + iSeqRow] && scEventControl_data["fac_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_libretin" + iSeqRow] && scEventControl_data["fac_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["secuencial" + iSeqRow] && scEventControl_data["secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["secuencial" + iSeqRow] && scEventControl_data["secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_moneda" + iSeqRow] && scEventControl_data["fac_moneda" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_moneda" + iSeqRow] && scEventControl_data["fac_moneda" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_serie_guia" + iSeqRow] && scEventControl_data["fac_serie_guia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_serie_guia" + iSeqRow] && scEventControl_data["fac_serie_guia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["establecimiento" + iSeqRow] && scEventControl_data["establecimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["establecimiento" + iSeqRow] && scEventControl_data["establecimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["punto_emision" + iSeqRow] && scEventControl_data["punto_emision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["punto_emision" + iSeqRow] && scEventControl_data["punto_emision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["tipo_libretin" + iSeqRow] && scEventControl_data["tipo_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["tipo_libretin" + iSeqRow] && scEventControl_data["tipo_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ambiente" + iSeqRow] && scEventControl_data["ambiente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ambiente" + iSeqRow] && scEventControl_data["ambiente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_establecimiento" + iSeqRow] && scEventControl_data["fac_establecimiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_establecimiento" + iSeqRow] && scEventControl_data["fac_establecimiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_punto_emision" + iSeqRow] && scEventControl_data["fac_punto_emision" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_punto_emision" + iSeqRow] && scEventControl_data["fac_punto_emision" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_secuencial" + iSeqRow] && scEventControl_data["fac_secuencial" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_secuencial" + iSeqRow] && scEventControl_data["fac_secuencial" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_libretin" + iSeqRow] && scEventControl_data["fac_tipo_libretin" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_libretin" + iSeqRow] && scEventControl_data["fac_tipo_libretin" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_ambiente" + iSeqRow] && scEventControl_data["fac_ambiente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_ambiente" + iSeqRow] && scEventControl_data["fac_ambiente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_comprobante" + iSeqRow] && scEventControl_data["fac_tipo_comprobante" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_tipo_comprobante" + iSeqRow] && scEventControl_data["fac_tipo_comprobante" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_socio_transportista" + iSeqRow] && scEventControl_data["fac_socio_transportista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_socio_transportista" + iSeqRow] && scEventControl_data["fac_socio_transportista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_transporte_usuario" + iSeqRow] && scEventControl_data["fac_transporte_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_transporte_usuario" + iSeqRow] && scEventControl_data["fac_transporte_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_correo_enviado" + iSeqRow] && scEventControl_data["fac_correo_enviado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_correo_enviado" + iSeqRow] && scEventControl_data["fac_correo_enviado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_asiento" + iSeqRow] && scEventControl_data["fac_asiento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_asiento" + iSeqRow] && scEventControl_data["fac_asiento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_cliente" + iSeqRow] && scEventControl_data["fac_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_cliente" + iSeqRow] && scEventControl_data["fac_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["ruc" + iSeqRow] && scEventControl_data["ruc" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["ruc" + iSeqRow] && scEventControl_data["ruc" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_nombre_cliente" + iSeqRow] && scEventControl_data["fac_nombre_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_nombre_cliente" + iSeqRow] && scEventControl_data["fac_nombre_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_direccion_cliente" + iSeqRow] && scEventControl_data["fac_direccion_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_direccion_cliente" + iSeqRow] && scEventControl_data["fac_direccion_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_email_cliente" + iSeqRow] && scEventControl_data["fac_email_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_email_cliente" + iSeqRow] && scEventControl_data["fac_email_cliente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_aplica_propina" + iSeqRow] && scEventControl_data["fac_aplica_propina" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_aplica_propina" + iSeqRow] && scEventControl_data["fac_aplica_propina" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_diagnostico" + iSeqRow] && scEventControl_data["fac_diagnostico" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_diagnostico" + iSeqRow] && scEventControl_data["fac_diagnostico" + iSeqRow]["change"]) {
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
  if (scEventControl_data["fac_propina" + iSeqRow] && scEventControl_data["fac_propina" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_propina" + iSeqRow] && scEventControl_data["fac_propina" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_total" + iSeqRow] && scEventControl_data["fac_total" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_total" + iSeqRow] && scEventControl_data["fac_total" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_entrega" + iSeqRow] && scEventControl_data["fac_valor_entrega" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_valor_entrega" + iSeqRow] && scEventControl_data["fac_valor_entrega" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["fac_cambio" + iSeqRow] && scEventControl_data["fac_cambio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["fac_cambio" + iSeqRow] && scEventControl_data["fac_cambio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["forma_pago" + iSeqRow] && scEventControl_data["forma_pago" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["forma_pago" + iSeqRow] && scEventControl_data["forma_pago" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("fac_libretin" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_moneda" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_socio_transportista" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_transporte_usuario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_aplica_propina" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_diagnostico" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("fac_cliente" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("fac_fecha" + iSeq == fieldName) {
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
  if ("fac_aplica_propina" + iSeq == fieldName) {
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
  $('#id_sc_field_fac_numero' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_numero_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_tipo_comprobante' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_tipo_comprobante_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_factura_fac_tipo_comprobante_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_factura_fac_tipo_comprobante_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_empresa' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_empresa_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_establecimiento' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_establecimiento_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_factura_fac_establecimiento_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_factura_fac_establecimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_punto_emision' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_punto_emision_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_factura_fac_punto_emision_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_factura_fac_punto_emision_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_secuencial_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_factura_fac_secuencial_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_factura_fac_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_cliente' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_cliente_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_factura_fac_cliente_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_factura_fac_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_fecha' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_fecha_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_factura_fac_fecha_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_factura_fac_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_ambiente' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_ambiente_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_factura_fac_ambiente_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_factura_fac_ambiente_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_tipo_libretin' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_tipo_libretin_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_factura_fac_tipo_libretin_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_factura_fac_tipo_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_iva' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_subtotal_iva_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_factura_fac_subtotal_iva_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_factura_fac_subtotal_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_cero' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_subtotal_cero_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_factura_fac_subtotal_cero_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_factura_fac_subtotal_cero_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_no_objeto' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_subtotal_no_objeto_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_del_factura_fac_subtotal_no_objeto_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_factura_fac_subtotal_no_objeto_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal_excento' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_subtotal_excento_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_del_factura_fac_subtotal_excento_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_del_factura_fac_subtotal_excento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_subtotal' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_subtotal_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_factura_fac_subtotal_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_factura_fac_subtotal_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_total_descuento' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_total_descuento_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_del_factura_fac_total_descuento_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_del_factura_fac_total_descuento_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_ice' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_valor_ice_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_factura_fac_valor_ice_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_factura_fac_valor_ice_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_iva' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_valor_iva_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_factura_fac_valor_iva_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_factura_fac_valor_iva_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_irbpnr' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_valor_irbpnr_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_del_factura_fac_valor_irbpnr_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_del_factura_fac_valor_irbpnr_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_propina' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_propina_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_factura_fac_propina_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_factura_fac_propina_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_total' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_total_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_del_factura_fac_total_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_del_factura_fac_total_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_estado' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_estado_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_estado_sri' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_estado_sri_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_factura_fac_estado_sri_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_factura_fac_estado_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_error_sri' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_error_sri_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_factura_fac_error_sri_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_factura_fac_error_sri_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_fecha_autorizacion' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_fecha_autorizacion_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_autorizacion' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_autorizacion_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_usuario' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_usuario_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_serie_guia' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_serie_guia_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_factura_fac_serie_guia_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_factura_fac_serie_guia_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_comentario' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_comentario_onblur(this, iSeqRow) })
                                            .bind('change', function() { sc_form_del_factura_fac_comentario_onchange(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_del_factura_fac_comentario_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_aplica_propina' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_aplica_propina_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_factura_fac_aplica_propina_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_factura_fac_aplica_propina_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_libretin' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_libretin_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_del_factura_fac_libretin_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_del_factura_fac_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_clave' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_clave_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_retencion' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_retencion_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_diagnostico' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_diagnostico_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_factura_fac_diagnostico_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_factura_fac_diagnostico_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_moneda' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_moneda_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_factura_fac_moneda_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_factura_fac_moneda_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_tomado' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_tomado_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_total_subsidio' + iSeqRow).bind('change', function() { sc_form_del_factura_fac_total_subsidio_onchange(this, iSeqRow) });
  $('#id_sc_field_fac_transporte_usuario' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_transporte_usuario_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_del_factura_fac_transporte_usuario_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_del_factura_fac_transporte_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_factura_socio' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_factura_socio_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_factura_fac_factura_socio_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_factura_fac_factura_socio_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_socio_transportista' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_socio_transportista_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_del_factura_fac_socio_transportista_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_del_factura_fac_socio_transportista_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_correo_enviado' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_correo_enviado_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_factura_fac_correo_enviado_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_factura_fac_correo_enviado_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_asiento' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_asiento_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_del_factura_fac_asiento_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_del_factura_fac_asiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_ambiente' + iSeqRow).bind('blur', function() { sc_form_del_factura_ambiente_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_del_factura_ambiente_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_del_factura_ambiente_onfocus(this, iSeqRow) });
  $('#id_sc_field_tipo_libretin' + iSeqRow).bind('blur', function() { sc_form_del_factura_tipo_libretin_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_factura_tipo_libretin_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_factura_tipo_libretin_onfocus(this, iSeqRow) });
  $('#id_sc_field_titulo' + iSeqRow).bind('blur', function() { sc_form_del_factura_titulo_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_del_factura_titulo_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_del_factura_titulo_onfocus(this, iSeqRow) });
  $('#id_sc_field_ruc' + iSeqRow).bind('blur', function() { sc_form_del_factura_ruc_onblur(this, iSeqRow) })
                                 .bind('change', function() { sc_form_del_factura_ruc_onchange(this, iSeqRow) })
                                 .bind('focus', function() { sc_form_del_factura_ruc_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_valor_entrega' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_valor_entrega_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_factura_fac_valor_entrega_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_factura_fac_valor_entrega_onfocus(this, iSeqRow) });
  $('#id_sc_field_secuencial' + iSeqRow).bind('blur', function() { sc_form_del_factura_secuencial_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_factura_secuencial_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_factura_secuencial_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_cambio' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_cambio_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_factura_fac_cambio_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_factura_fac_cambio_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_email_cliente' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_email_cliente_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_del_factura_fac_email_cliente_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_del_factura_fac_email_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_direccion_cliente' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_direccion_cliente_onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_del_factura_fac_direccion_cliente_onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_del_factura_fac_direccion_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_fac_nombre_cliente' + iSeqRow).bind('blur', function() { sc_form_del_factura_fac_nombre_cliente_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_del_factura_fac_nombre_cliente_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_del_factura_fac_nombre_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_forma_pago' + iSeqRow).bind('blur', function() { sc_form_del_factura_forma_pago_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_del_factura_forma_pago_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_del_factura_forma_pago_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalle' + iSeqRow).bind('blur', function() { sc_form_del_factura_detalle_onblur(this, iSeqRow) })
                                     .bind('change', function() { sc_form_del_factura_detalle_onchange(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_del_factura_detalle_onfocus(this, iSeqRow) });
  $('#id_sc_field_establecimiento' + iSeqRow).bind('blur', function() { sc_form_del_factura_establecimiento_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_del_factura_establecimiento_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_del_factura_establecimiento_onfocus(this, iSeqRow) });
  $('#id_sc_field_punto_emision' + iSeqRow).bind('blur', function() { sc_form_del_factura_punto_emision_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_del_factura_punto_emision_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_del_factura_punto_emision_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_del_factura_fac_numero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_tipo_comprobante_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_tipo_comprobante();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_tipo_comprobante_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_tipo_comprobante_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_establecimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_establecimiento();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_establecimiento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_establecimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_punto_emision_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_punto_emision();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_punto_emision_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_punto_emision_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_secuencial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_cliente();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_factura_event_fac_cliente_onchange();
}

function sc_form_del_factura_fac_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_fecha();
  scCssBlur(oThis);
  do_ajax_form_del_factura_event_fac_fecha_onblur();
}

function sc_form_del_factura_fac_fecha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_factura_event_fac_fecha_onchange();
}

function sc_form_del_factura_fac_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_ambiente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_ambiente();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_ambiente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_ambiente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_tipo_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_tipo_libretin();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_tipo_libretin_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_tipo_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_subtotal_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_subtotal_iva();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_subtotal_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_subtotal_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_subtotal_cero_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_subtotal_cero();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_subtotal_cero_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_subtotal_cero_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_subtotal_no_objeto_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_subtotal_no_objeto();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_subtotal_no_objeto_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_subtotal_no_objeto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_subtotal_excento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_subtotal_excento();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_subtotal_excento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_subtotal_excento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_subtotal_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_subtotal();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_subtotal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_subtotal_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_total_descuento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_total_descuento();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_total_descuento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_total_descuento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_valor_ice_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_valor_ice();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_valor_ice_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_valor_ice_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_valor_iva_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_valor_iva();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_valor_iva_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_valor_iva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_valor_irbpnr_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_valor_irbpnr();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_valor_irbpnr_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_valor_irbpnr_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_propina_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_propina();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_propina_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_propina_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_total_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_total();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_total_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_total_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_estado_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_estado_sri();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_estado_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_estado_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_error_sri_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_error_sri();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_error_sri_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_error_sri_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_fecha_autorizacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_autorizacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_serie_guia_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_serie_guia();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_serie_guia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_serie_guia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_comentario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_comentario();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_comentario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_comentario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_aplica_propina_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_aplica_propina();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_aplica_propina_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_factura_event_fac_aplica_propina_onchange();
}

function sc_form_del_factura_fac_aplica_propina_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_libretin();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_libretin_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_factura_event_fac_libretin_onchange();
}

function sc_form_del_factura_fac_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_clave_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_retencion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_diagnostico_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_diagnostico();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_diagnostico_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_diagnostico_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_moneda_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_moneda();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_moneda_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_moneda_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_tomado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_total_subsidio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_transporte_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_transporte_usuario();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_transporte_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_transporte_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_factura_socio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_factura_socio();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_factura_socio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_factura_socio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_socio_transportista_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_socio_transportista();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_socio_transportista_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_del_factura_refresh_fac_socio_transportista();
}

function sc_form_del_factura_fac_socio_transportista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_correo_enviado_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_correo_enviado();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_correo_enviado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_correo_enviado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_asiento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_asiento();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_asiento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_asiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_ambiente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_ambiente();
  scCssBlur(oThis);
}

function sc_form_del_factura_ambiente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_ambiente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_tipo_libretin_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_tipo_libretin();
  scCssBlur(oThis);
}

function sc_form_del_factura_tipo_libretin_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_tipo_libretin_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_titulo_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_titulo();
  scCssBlur(oThis);
}

function sc_form_del_factura_titulo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_titulo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_ruc_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_ruc();
  scCssBlur(oThis);
}

function sc_form_del_factura_ruc_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_ruc_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_valor_entrega_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_valor_entrega();
  scCssBlur(oThis);
  do_ajax_form_del_factura_event_fac_valor_entrega_onblur();
}

function sc_form_del_factura_fac_valor_entrega_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_valor_entrega_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_secuencial_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_secuencial();
  scCssBlur(oThis);
}

function sc_form_del_factura_secuencial_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_secuencial_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_cambio_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_cambio();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_cambio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_cambio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_email_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_email_cliente();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_email_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_email_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_direccion_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_direccion_cliente();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_direccion_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_direccion_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_fac_nombre_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_fac_nombre_cliente();
  scCssBlur(oThis);
}

function sc_form_del_factura_fac_nombre_cliente_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_fac_nombre_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_forma_pago_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_forma_pago();
  scCssBlur(oThis);
}

function sc_form_del_factura_forma_pago_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_forma_pago_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_detalle_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_detalle();
  scCssBlur(oThis);
}

function sc_form_del_factura_detalle_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_detalle_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_establecimiento_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_establecimiento();
  scCssBlur(oThis);
}

function sc_form_del_factura_establecimiento_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_establecimiento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_del_factura_punto_emision_onblur(oThis, iSeqRow) {
  do_ajax_form_del_factura_validate_punto_emision();
  scCssBlur(oThis);
}

function sc_form_del_factura_punto_emision_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_del_factura_punto_emision_onfocus(oThis, iSeqRow) {
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
	if ("5" == block) {
		displayChange_block_5(status);
	}
	if ("6" == block) {
		displayChange_block_6(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("titulo", "", status);
	displayChange_field("fac_estado_sri", "", status);
	displayChange_field("fac_error_sri", "", status);
	displayChange_field("fac_factura_socio", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("fac_fecha", "", status);
	displayChange_field("fac_libretin", "", status);
	displayChange_field("secuencial", "", status);
	displayChange_field("fac_moneda", "", status);
	displayChange_field("fac_serie_guia", "", status);
	displayChange_field("establecimiento", "", status);
	displayChange_field("punto_emision", "", status);
	displayChange_field("tipo_libretin", "", status);
	displayChange_field("ambiente", "", status);
	displayChange_field("fac_establecimiento", "", status);
	displayChange_field("fac_punto_emision", "", status);
	displayChange_field("fac_secuencial", "", status);
	displayChange_field("fac_tipo_libretin", "", status);
	displayChange_field("fac_ambiente", "", status);
	displayChange_field("fac_tipo_comprobante", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("fac_socio_transportista", "", status);
	displayChange_field("fac_transporte_usuario", "", status);
	displayChange_field("fac_correo_enviado", "", status);
	displayChange_field("fac_asiento", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("fac_cliente", "", status);
	displayChange_field("ruc", "", status);
	displayChange_field("fac_nombre_cliente", "", status);
	displayChange_field("fac_direccion_cliente", "", status);
	displayChange_field("fac_email_cliente", "", status);
	displayChange_field("fac_aplica_propina", "", status);
	displayChange_field("fac_diagnostico", "", status);
	displayChange_field("fac_comentario", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("detalle", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("fac_subtotal", "", status);
	displayChange_field("fac_subtotal_iva", "", status);
	displayChange_field("fac_subtotal_cero", "", status);
	displayChange_field("fac_subtotal_no_objeto", "", status);
	displayChange_field("fac_subtotal_excento", "", status);
	displayChange_field("fac_total_descuento", "", status);
	displayChange_field("fac_valor_ice", "", status);
	displayChange_field("fac_valor_iva", "", status);
	displayChange_field("fac_valor_irbpnr", "", status);
	displayChange_field("fac_propina", "", status);
	displayChange_field("fac_total", "", status);
	displayChange_field("fac_valor_entrega", "", status);
	displayChange_field("fac_cambio", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("forma_pago", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_titulo(row, status);
	displayChange_field_fac_estado_sri(row, status);
	displayChange_field_fac_error_sri(row, status);
	displayChange_field_fac_factura_socio(row, status);
	displayChange_field_fac_fecha(row, status);
	displayChange_field_fac_libretin(row, status);
	displayChange_field_secuencial(row, status);
	displayChange_field_fac_moneda(row, status);
	displayChange_field_fac_serie_guia(row, status);
	displayChange_field_establecimiento(row, status);
	displayChange_field_punto_emision(row, status);
	displayChange_field_tipo_libretin(row, status);
	displayChange_field_ambiente(row, status);
	displayChange_field_fac_establecimiento(row, status);
	displayChange_field_fac_punto_emision(row, status);
	displayChange_field_fac_secuencial(row, status);
	displayChange_field_fac_tipo_libretin(row, status);
	displayChange_field_fac_ambiente(row, status);
	displayChange_field_fac_tipo_comprobante(row, status);
	displayChange_field_fac_socio_transportista(row, status);
	displayChange_field_fac_transporte_usuario(row, status);
	displayChange_field_fac_correo_enviado(row, status);
	displayChange_field_fac_asiento(row, status);
	displayChange_field_fac_cliente(row, status);
	displayChange_field_ruc(row, status);
	displayChange_field_fac_nombre_cliente(row, status);
	displayChange_field_fac_direccion_cliente(row, status);
	displayChange_field_fac_email_cliente(row, status);
	displayChange_field_fac_aplica_propina(row, status);
	displayChange_field_fac_diagnostico(row, status);
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
	displayChange_field_fac_propina(row, status);
	displayChange_field_fac_total(row, status);
	displayChange_field_fac_valor_entrega(row, status);
	displayChange_field_fac_cambio(row, status);
	displayChange_field_forma_pago(row, status);
}

function displayChange_field(field, row, status) {
	if ("titulo" == field) {
		displayChange_field_titulo(row, status);
	}
	if ("fac_estado_sri" == field) {
		displayChange_field_fac_estado_sri(row, status);
	}
	if ("fac_error_sri" == field) {
		displayChange_field_fac_error_sri(row, status);
	}
	if ("fac_factura_socio" == field) {
		displayChange_field_fac_factura_socio(row, status);
	}
	if ("fac_fecha" == field) {
		displayChange_field_fac_fecha(row, status);
	}
	if ("fac_libretin" == field) {
		displayChange_field_fac_libretin(row, status);
	}
	if ("secuencial" == field) {
		displayChange_field_secuencial(row, status);
	}
	if ("fac_moneda" == field) {
		displayChange_field_fac_moneda(row, status);
	}
	if ("fac_serie_guia" == field) {
		displayChange_field_fac_serie_guia(row, status);
	}
	if ("establecimiento" == field) {
		displayChange_field_establecimiento(row, status);
	}
	if ("punto_emision" == field) {
		displayChange_field_punto_emision(row, status);
	}
	if ("tipo_libretin" == field) {
		displayChange_field_tipo_libretin(row, status);
	}
	if ("ambiente" == field) {
		displayChange_field_ambiente(row, status);
	}
	if ("fac_establecimiento" == field) {
		displayChange_field_fac_establecimiento(row, status);
	}
	if ("fac_punto_emision" == field) {
		displayChange_field_fac_punto_emision(row, status);
	}
	if ("fac_secuencial" == field) {
		displayChange_field_fac_secuencial(row, status);
	}
	if ("fac_tipo_libretin" == field) {
		displayChange_field_fac_tipo_libretin(row, status);
	}
	if ("fac_ambiente" == field) {
		displayChange_field_fac_ambiente(row, status);
	}
	if ("fac_tipo_comprobante" == field) {
		displayChange_field_fac_tipo_comprobante(row, status);
	}
	if ("fac_socio_transportista" == field) {
		displayChange_field_fac_socio_transportista(row, status);
	}
	if ("fac_transporte_usuario" == field) {
		displayChange_field_fac_transporte_usuario(row, status);
	}
	if ("fac_correo_enviado" == field) {
		displayChange_field_fac_correo_enviado(row, status);
	}
	if ("fac_asiento" == field) {
		displayChange_field_fac_asiento(row, status);
	}
	if ("fac_cliente" == field) {
		displayChange_field_fac_cliente(row, status);
	}
	if ("ruc" == field) {
		displayChange_field_ruc(row, status);
	}
	if ("fac_nombre_cliente" == field) {
		displayChange_field_fac_nombre_cliente(row, status);
	}
	if ("fac_direccion_cliente" == field) {
		displayChange_field_fac_direccion_cliente(row, status);
	}
	if ("fac_email_cliente" == field) {
		displayChange_field_fac_email_cliente(row, status);
	}
	if ("fac_aplica_propina" == field) {
		displayChange_field_fac_aplica_propina(row, status);
	}
	if ("fac_diagnostico" == field) {
		displayChange_field_fac_diagnostico(row, status);
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
	if ("fac_propina" == field) {
		displayChange_field_fac_propina(row, status);
	}
	if ("fac_total" == field) {
		displayChange_field_fac_total(row, status);
	}
	if ("fac_valor_entrega" == field) {
		displayChange_field_fac_valor_entrega(row, status);
	}
	if ("fac_cambio" == field) {
		displayChange_field_fac_cambio(row, status);
	}
	if ("forma_pago" == field) {
		displayChange_field_forma_pago(row, status);
	}
}

function displayChange_field_titulo(row, status) {
    var fieldId;
}

function displayChange_field_fac_estado_sri(row, status) {
    var fieldId;
}

function displayChange_field_fac_error_sri(row, status) {
    var fieldId;
}

function displayChange_field_fac_factura_socio(row, status) {
    var fieldId;
}

function displayChange_field_fac_fecha(row, status) {
    var fieldId;
}

function displayChange_field_fac_libretin(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_libretin__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_libretin" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_libretin");
	}
}

function displayChange_field_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_fac_moneda(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_moneda__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_moneda" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_moneda");
	}
}

function displayChange_field_fac_serie_guia(row, status) {
    var fieldId;
}

function displayChange_field_establecimiento(row, status) {
    var fieldId;
}

function displayChange_field_punto_emision(row, status) {
    var fieldId;
}

function displayChange_field_tipo_libretin(row, status) {
    var fieldId;
}

function displayChange_field_ambiente(row, status) {
    var fieldId;
}

function displayChange_field_fac_establecimiento(row, status) {
    var fieldId;
}

function displayChange_field_fac_punto_emision(row, status) {
    var fieldId;
}

function displayChange_field_fac_secuencial(row, status) {
    var fieldId;
}

function displayChange_field_fac_tipo_libretin(row, status) {
    var fieldId;
}

function displayChange_field_fac_ambiente(row, status) {
    var fieldId;
}

function displayChange_field_fac_tipo_comprobante(row, status) {
    var fieldId;
}

function displayChange_field_fac_socio_transportista(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_socio_transportista__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_socio_transportista" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_socio_transportista");
	}
}

function displayChange_field_fac_transporte_usuario(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_transporte_usuario__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_transporte_usuario" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_transporte_usuario");
	}
}

function displayChange_field_fac_correo_enviado(row, status) {
    var fieldId;
}

function displayChange_field_fac_asiento(row, status) {
    var fieldId;
}

function displayChange_field_fac_cliente(row, status) {
    var fieldId;
}

function displayChange_field_ruc(row, status) {
    var fieldId;
}

function displayChange_field_fac_nombre_cliente(row, status) {
    var fieldId;
}

function displayChange_field_fac_direccion_cliente(row, status) {
    var fieldId;
}

function displayChange_field_fac_email_cliente(row, status) {
    var fieldId;
}

function displayChange_field_fac_aplica_propina(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_aplica_propina__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_aplica_propina" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_aplica_propina");
	}
}

function displayChange_field_fac_diagnostico(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_fac_diagnostico__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_fac_diagnostico" + row).select2("destroy");
		}
		scJQSelect2Add(row, "fac_diagnostico");
	}
}

function displayChange_field_fac_comentario(row, status) {
    var fieldId;
}

function displayChange_field_detalle(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_detalle_factura")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_detalle_factura")[0].contentWindow.scRecreateSelect2();
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

function displayChange_field_fac_propina(row, status) {
    var fieldId;
}

function displayChange_field_fac_total(row, status) {
    var fieldId;
}

function displayChange_field_fac_valor_entrega(row, status) {
    var fieldId;
}

function displayChange_field_fac_cambio(row, status) {
    var fieldId;
}

function displayChange_field_forma_pago(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_del_forma_pago_factura")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_del_forma_pago_factura")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_fac_libretin("all", "on");
	displayChange_field_fac_moneda("all", "on");
	displayChange_field_fac_socio_transportista("all", "on");
	displayChange_field_fac_transporte_usuario("all", "on");
	displayChange_field_fac_aplica_propina("all", "on");
	displayChange_field_fac_diagnostico("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_del_factura_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(24);
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
      do_ajax_form_del_factura_validate_fac_fecha(iSeqRow);
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
  $("#id_sc_field_fac_fecha_autorizacion" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_fac_fecha_autorizacion" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_del_factura_validate_fac_fecha_autorizacion(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['fac_fecha_autorizacion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_del_factura')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "fac_libretin" == specificField) {
    scJQSelect2Add_fac_libretin(seqRow);
  }
  if (null == specificField || "fac_moneda" == specificField) {
    scJQSelect2Add_fac_moneda(seqRow);
  }
  if (null == specificField || "fac_socio_transportista" == specificField) {
    scJQSelect2Add_fac_socio_transportista(seqRow);
  }
  if (null == specificField || "fac_transporte_usuario" == specificField) {
    scJQSelect2Add_fac_transporte_usuario(seqRow);
  }
  if (null == specificField || "fac_aplica_propina" == specificField) {
    scJQSelect2Add_fac_aplica_propina(seqRow);
  }
  if (null == specificField || "fac_diagnostico" == specificField) {
    scJQSelect2Add_fac_diagnostico(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_fac_libretin(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_libretin_obj" : "#id_sc_field_fac_libretin" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fac_libretin_obj',
      dropdownCssClass: 'css_fac_libretin_obj',
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

function scJQSelect2Add_fac_moneda(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_moneda_obj" : "#id_sc_field_fac_moneda" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fac_moneda_obj',
      dropdownCssClass: 'css_fac_moneda_obj',
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

function scJQSelect2Add_fac_socio_transportista(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_socio_transportista_obj" : "#id_sc_field_fac_socio_transportista" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fac_socio_transportista_obj',
      dropdownCssClass: 'css_fac_socio_transportista_obj',
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

function scJQSelect2Add_fac_transporte_usuario(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_transporte_usuario_obj" : "#id_sc_field_fac_transporte_usuario" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fac_transporte_usuario_obj',
      dropdownCssClass: 'css_fac_transporte_usuario_obj',
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

function scJQSelect2Add_fac_aplica_propina(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_aplica_propina_obj" : "#id_sc_field_fac_aplica_propina" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_fac_aplica_propina_obj',
      dropdownCssClass: 'css_fac_aplica_propina_obj',
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

function scJQSelect2Add_fac_diagnostico(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_fac_diagnostico_obj" : "#id_sc_field_fac_diagnostico" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_fac_diagnostico_obj',
      dropdownCssClass: 'css_fac_diagnostico_obj',
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
  scJQPasswordToggleAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_libretin) { displayChange_field_fac_libretin(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_moneda) { displayChange_field_fac_moneda(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_socio_transportista) { displayChange_field_fac_socio_transportista(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_transporte_usuario) { displayChange_field_fac_transporte_usuario(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_aplica_propina) { displayChange_field_fac_aplica_propina(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_fac_diagnostico) { displayChange_field_fac_diagnostico(iLine, "on"); } }, 150);
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

var scBtnGrpStatus = {};
function scBtnGrpShow(sGroup) {
  if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };
  $('#sc_btgp_btn_' + sGroup).addClass('selected');
  var btnPos = $('#sc_btgp_btn_' + sGroup).offset();
  scBtnGrpStatus[sGroup] = 'open';
  $('#sc_btgp_btn_' + sGroup).mouseout(function() {
    scBtnGrpStatus[sGroup] = '';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  }).mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  });
  $('#sc_btgp_div_' + sGroup + ' span a').click(function() {
    scBtnGrpStatus[sGroup] = 'out';
    scBtnGrpHide(sGroup, false);
  });
  $('#sc_btgp_div_' + sGroup).css({
    'left': btnPos.left
  })
  .mouseover(function() {
    scBtnGrpStatus[sGroup] = 'over';
  })
  .mouseleave(function() {
    scBtnGrpStatus[sGroup] = 'out';
    setTimeout(function() {
      scBtnGrpHide(sGroup, false);
    }, 1000);
  })
  .show('fast');
}
function scBtnGrpHide(sGroup, bForce) {
  if (bForce || 'over' != scBtnGrpStatus[sGroup]) {
    $('#sc_btgp_div_' + sGroup).hide('fast');
    $('#sc_btgp_btn_' + sGroup).addClass('selected');
  }
}
