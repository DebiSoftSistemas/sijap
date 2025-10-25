
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
  scEventControl_data["con_motivo_anulacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_sino" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_numero_contrato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_tipo_contrato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_propietario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_cedula" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_direccion_propietario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_correo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_canton" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_parroquia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_comunidad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_sector" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_numero_censo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_direccion_predio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_toma_administrativa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_toma_operativa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_tipo_servicio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_condicion_contrato" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_ruta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_orden_lecturas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_fecha_instalacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_numero_medidor" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_maxima_lectura" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_lectura_actual" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_fecha_lectura" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_usuario_instala" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_observaciones" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_numero_corte" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["materiales" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["rubros" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_total_a_pagar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_abono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_saldo_pagar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_plazo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_valor_cuota" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cuotas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["con_empresa" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["con_motivo_anulacion" + iSeqRow] && scEventControl_data["con_motivo_anulacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_motivo_anulacion" + iSeqRow] && scEventControl_data["con_motivo_anulacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_fecha" + iSeqRow] && scEventControl_data["con_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_fecha" + iSeqRow] && scEventControl_data["con_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_sino" + iSeqRow] && scEventControl_data["con_sino" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_sino" + iSeqRow] && scEventControl_data["con_sino" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_id" + iSeqRow] && scEventControl_data["con_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_id" + iSeqRow] && scEventControl_data["con_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_numero_contrato" + iSeqRow] && scEventControl_data["con_numero_contrato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_numero_contrato" + iSeqRow] && scEventControl_data["con_numero_contrato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_tipo_contrato" + iSeqRow] && scEventControl_data["con_tipo_contrato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_tipo_contrato" + iSeqRow] && scEventControl_data["con_tipo_contrato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_propietario" + iSeqRow] && scEventControl_data["con_propietario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_propietario" + iSeqRow] && scEventControl_data["con_propietario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_nombre" + iSeqRow] && scEventControl_data["con_nombre" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_nombre" + iSeqRow] && scEventControl_data["con_nombre" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_cedula" + iSeqRow] && scEventControl_data["con_cedula" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_cedula" + iSeqRow] && scEventControl_data["con_cedula" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_telefono" + iSeqRow] && scEventControl_data["con_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_telefono" + iSeqRow] && scEventControl_data["con_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_celular" + iSeqRow] && scEventControl_data["con_celular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_celular" + iSeqRow] && scEventControl_data["con_celular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_direccion_propietario" + iSeqRow] && scEventControl_data["con_direccion_propietario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_direccion_propietario" + iSeqRow] && scEventControl_data["con_direccion_propietario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_correo" + iSeqRow] && scEventControl_data["con_correo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_correo" + iSeqRow] && scEventControl_data["con_correo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_estado" + iSeqRow] && scEventControl_data["con_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_estado" + iSeqRow] && scEventControl_data["con_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_pais" + iSeqRow] && scEventControl_data["con_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_pais" + iSeqRow] && scEventControl_data["con_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_provincia" + iSeqRow] && scEventControl_data["con_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_provincia" + iSeqRow] && scEventControl_data["con_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_canton" + iSeqRow] && scEventControl_data["con_canton" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_canton" + iSeqRow] && scEventControl_data["con_canton" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_parroquia" + iSeqRow] && scEventControl_data["con_parroquia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_parroquia" + iSeqRow] && scEventControl_data["con_parroquia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_comunidad" + iSeqRow] && scEventControl_data["con_comunidad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_comunidad" + iSeqRow] && scEventControl_data["con_comunidad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_sector" + iSeqRow] && scEventControl_data["con_sector" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_sector" + iSeqRow] && scEventControl_data["con_sector" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_numero_censo" + iSeqRow] && scEventControl_data["con_numero_censo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_numero_censo" + iSeqRow] && scEventControl_data["con_numero_censo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_direccion_predio" + iSeqRow] && scEventControl_data["con_direccion_predio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_direccion_predio" + iSeqRow] && scEventControl_data["con_direccion_predio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_toma_administrativa" + iSeqRow] && scEventControl_data["con_toma_administrativa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_toma_administrativa" + iSeqRow] && scEventControl_data["con_toma_administrativa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_toma_operativa" + iSeqRow] && scEventControl_data["con_toma_operativa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_toma_operativa" + iSeqRow] && scEventControl_data["con_toma_operativa" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_tipo_servicio" + iSeqRow] && scEventControl_data["con_tipo_servicio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_tipo_servicio" + iSeqRow] && scEventControl_data["con_tipo_servicio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_condicion_contrato" + iSeqRow] && scEventControl_data["con_condicion_contrato" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_condicion_contrato" + iSeqRow] && scEventControl_data["con_condicion_contrato" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_ruta" + iSeqRow] && scEventControl_data["con_ruta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_ruta" + iSeqRow] && scEventControl_data["con_ruta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_orden_lecturas" + iSeqRow] && scEventControl_data["con_orden_lecturas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_orden_lecturas" + iSeqRow] && scEventControl_data["con_orden_lecturas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_fecha_instalacion" + iSeqRow] && scEventControl_data["con_fecha_instalacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_fecha_instalacion" + iSeqRow] && scEventControl_data["con_fecha_instalacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_numero_medidor" + iSeqRow] && scEventControl_data["con_numero_medidor" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_numero_medidor" + iSeqRow] && scEventControl_data["con_numero_medidor" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_maxima_lectura" + iSeqRow] && scEventControl_data["con_maxima_lectura" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_maxima_lectura" + iSeqRow] && scEventControl_data["con_maxima_lectura" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_lectura_actual" + iSeqRow] && scEventControl_data["con_lectura_actual" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_lectura_actual" + iSeqRow] && scEventControl_data["con_lectura_actual" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_fecha_lectura" + iSeqRow] && scEventControl_data["con_fecha_lectura" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_fecha_lectura" + iSeqRow] && scEventControl_data["con_fecha_lectura" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_usuario_instala" + iSeqRow] && scEventControl_data["con_usuario_instala" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_usuario_instala" + iSeqRow] && scEventControl_data["con_usuario_instala" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_observaciones" + iSeqRow] && scEventControl_data["con_observaciones" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_observaciones" + iSeqRow] && scEventControl_data["con_observaciones" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_numero_corte" + iSeqRow] && scEventControl_data["con_numero_corte" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_numero_corte" + iSeqRow] && scEventControl_data["con_numero_corte" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["materiales" + iSeqRow] && scEventControl_data["materiales" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["materiales" + iSeqRow] && scEventControl_data["materiales" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["rubros" + iSeqRow] && scEventControl_data["rubros" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["rubros" + iSeqRow] && scEventControl_data["rubros" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_total_a_pagar" + iSeqRow] && scEventControl_data["con_total_a_pagar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_total_a_pagar" + iSeqRow] && scEventControl_data["con_total_a_pagar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_abono" + iSeqRow] && scEventControl_data["con_abono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_abono" + iSeqRow] && scEventControl_data["con_abono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_saldo_pagar" + iSeqRow] && scEventControl_data["con_saldo_pagar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_saldo_pagar" + iSeqRow] && scEventControl_data["con_saldo_pagar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_plazo" + iSeqRow] && scEventControl_data["con_plazo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_plazo" + iSeqRow] && scEventControl_data["con_plazo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_valor_cuota" + iSeqRow] && scEventControl_data["con_valor_cuota" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_valor_cuota" + iSeqRow] && scEventControl_data["con_valor_cuota" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cuotas" + iSeqRow] && scEventControl_data["cuotas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cuotas" + iSeqRow] && scEventControl_data["cuotas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["con_empresa" + iSeqRow] && scEventControl_data["con_empresa" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["con_empresa" + iSeqRow] && scEventControl_data["con_empresa" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("con_tipo_contrato" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_propietario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_canton" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_parroquia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_comunidad" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_sector" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_toma_administrativa" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_toma_operativa" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_tipo_servicio" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_condicion_contrato" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_ruta" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("con_abono" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("con_plazo" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("con_propietario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("con_ruta" + iSeq == fieldName) {
    scEventControl_data[fieldName]["change"]   = true;
    scEventControl_data[fieldName]["original"] = $(oField).val();
    scEventControl_data[fieldName]["calculated"] = $(oField).val();
    return;
  }
  if ("con_total_a_pagar" + iSeq == fieldName) {
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
  $('#id_sc_field_con_id' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_id_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_jap_contrato_con_id_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_jap_contrato_con_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_empresa' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_empresa_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_jap_contrato_con_empresa_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_jap_contrato_con_empresa_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_propietario' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_propietario_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_jap_contrato_con_propietario_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_jap_contrato_con_propietario_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_pais' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_pais_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_jap_contrato_con_pais_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_jap_contrato_con_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_provincia' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_provincia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_jap_contrato_con_provincia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_jap_contrato_con_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_canton' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_canton_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_con_canton_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_con_canton_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_parroquia' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_parroquia_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_jap_contrato_con_parroquia_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_jap_contrato_con_parroquia_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_direccion_predio' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_direccion_predio_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_jap_contrato_con_direccion_predio_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_jap_contrato_con_direccion_predio_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_toma_administrativa' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_toma_administrativa_onblur(this, iSeqRow) })
                                                     .bind('change', function() { sc_form_jap_contrato_con_toma_administrativa_onchange(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_jap_contrato_con_toma_administrativa_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_toma_operativa' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_toma_operativa_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_contrato_con_toma_operativa_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_contrato_con_toma_operativa_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_tipo_servicio' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_tipo_servicio_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_jap_contrato_con_tipo_servicio_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_jap_contrato_con_tipo_servicio_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_condicion_contrato' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_condicion_contrato_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_jap_contrato_con_condicion_contrato_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_jap_contrato_con_condicion_contrato_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_numero_medidor' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_numero_medidor_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_contrato_con_numero_medidor_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_contrato_con_numero_medidor_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_usuario' + iSeqRow).bind('change', function() { sc_form_jap_contrato_con_usuario_onchange(this, iSeqRow) });
  $('#id_sc_field_con_fecha' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_fecha_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_contrato_con_fecha_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_contrato_con_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_terminal' + iSeqRow).bind('change', function() { sc_form_jap_contrato_con_terminal_onchange(this, iSeqRow) });
  $('#id_sc_field_con_estado' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_con_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_con_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_motivo_anulacion' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_motivo_anulacion_onblur(this, iSeqRow) })
                                                  .bind('change', function() { sc_form_jap_contrato_con_motivo_anulacion_onchange(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_jap_contrato_con_motivo_anulacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_tipo_contrato' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_tipo_contrato_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_jap_contrato_con_tipo_contrato_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_jap_contrato_con_tipo_contrato_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_total_a_pagar' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_total_a_pagar_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_jap_contrato_con_total_a_pagar_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_jap_contrato_con_total_a_pagar_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_abono' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_abono_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_contrato_con_abono_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_contrato_con_abono_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_plazo' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_plazo_onblur(this, iSeqRow) })
                                       .bind('change', function() { sc_form_jap_contrato_con_plazo_onchange(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_jap_contrato_con_plazo_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_fecha_instalacion' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_fecha_instalacion_onblur(this, iSeqRow) })
                                                   .bind('change', function() { sc_form_jap_contrato_con_fecha_instalacion_onchange(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_jap_contrato_con_fecha_instalacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_observaciones' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_observaciones_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_jap_contrato_con_observaciones_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_jap_contrato_con_observaciones_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_usuario_instala' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_usuario_instala_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_jap_contrato_con_usuario_instala_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_jap_contrato_con_usuario_instala_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_numero_contrato' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_numero_contrato_onblur(this, iSeqRow) })
                                                 .bind('change', function() { sc_form_jap_contrato_con_numero_contrato_onchange(this, iSeqRow) })
                                                 .bind('focus', function() { sc_form_jap_contrato_con_numero_contrato_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_maxima_lectura' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_maxima_lectura_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_contrato_con_maxima_lectura_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_contrato_con_maxima_lectura_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_lectura_actual' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_lectura_actual_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_contrato_con_lectura_actual_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_contrato_con_lectura_actual_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_fecha_lectura' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_fecha_lectura_onblur(this, iSeqRow) })
                                               .bind('change', function() { sc_form_jap_contrato_con_fecha_lectura_onchange(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_jap_contrato_con_fecha_lectura_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_ruta' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_ruta_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_jap_contrato_con_ruta_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_jap_contrato_con_ruta_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_sino' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_sino_onblur(this, iSeqRow) })
                                      .bind('change', function() { sc_form_jap_contrato_con_sino_onchange(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_jap_contrato_con_sino_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_orden_lecturas' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_orden_lecturas_onblur(this, iSeqRow) })
                                                .bind('change', function() { sc_form_jap_contrato_con_orden_lecturas_onchange(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_jap_contrato_con_orden_lecturas_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_numero_corte' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_numero_corte_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_jap_contrato_con_numero_corte_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_jap_contrato_con_numero_corte_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_comunidad' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_comunidad_onblur(this, iSeqRow) })
                                           .bind('change', function() { sc_form_jap_contrato_con_comunidad_onchange(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_jap_contrato_con_comunidad_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_sector' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_sector_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_con_sector_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_con_sector_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_numero_censo' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_numero_censo_onblur(this, iSeqRow) })
                                              .bind('change', function() { sc_form_jap_contrato_con_numero_censo_onchange(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_jap_contrato_con_numero_censo_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_saldo_pagar' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_saldo_pagar_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_jap_contrato_con_saldo_pagar_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_jap_contrato_con_saldo_pagar_onfocus(this, iSeqRow) });
  $('#id_sc_field_rubros' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_rubros_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_jap_contrato_rubros_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_jap_contrato_rubros_onfocus(this, iSeqRow) });
  $('#id_sc_field_cuotas' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_cuotas_onblur(this, iSeqRow) })
                                    .bind('change', function() { sc_form_jap_contrato_cuotas_onchange(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_jap_contrato_cuotas_onfocus(this, iSeqRow) });
  $('#id_sc_field_materiales' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_materiales_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_materiales_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_materiales_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_direccion_propietario' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_direccion_propietario_onblur(this, iSeqRow) })
                                                       .bind('change', function() { sc_form_jap_contrato_con_direccion_propietario_onchange(this, iSeqRow) })
                                                       .bind('focus', function() { sc_form_jap_contrato_con_direccion_propietario_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_valor_cuota' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_valor_cuota_onblur(this, iSeqRow) })
                                             .bind('change', function() { sc_form_jap_contrato_con_valor_cuota_onchange(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_jap_contrato_con_valor_cuota_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_nombre' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_nombre_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_con_nombre_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_con_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_cedula' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_cedula_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_con_cedula_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_con_cedula_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_telefono' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_telefono_onblur(this, iSeqRow) })
                                          .bind('change', function() { sc_form_jap_contrato_con_telefono_onchange(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_jap_contrato_con_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_celular' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_celular_onblur(this, iSeqRow) })
                                         .bind('change', function() { sc_form_jap_contrato_con_celular_onchange(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_jap_contrato_con_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_con_correo' + iSeqRow).bind('blur', function() { sc_form_jap_contrato_con_correo_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_jap_contrato_con_correo_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_jap_contrato_con_correo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_jap_contrato_con_id_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_id();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_id_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_empresa_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_empresa();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_empresa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_empresa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_propietario_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_propietario();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_propietario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_event_con_propietario_onchange();
}

function sc_form_jap_contrato_con_propietario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_pais();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_pais_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_refresh_con_pais();
}

function sc_form_jap_contrato_con_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_provincia();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_provincia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_refresh_con_provincia();
}

function sc_form_jap_contrato_con_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_canton_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_canton();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_canton_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_refresh_con_canton();
}

function sc_form_jap_contrato_con_canton_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_parroquia_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_parroquia();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_parroquia_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_parroquia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_direccion_predio_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_direccion_predio();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_direccion_predio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_direccion_predio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_toma_administrativa_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_toma_administrativa();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_toma_administrativa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_refresh_con_toma_administrativa();
}

function sc_form_jap_contrato_con_toma_administrativa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_toma_operativa_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_toma_operativa();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_toma_operativa_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_toma_operativa_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_tipo_servicio_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_tipo_servicio();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_tipo_servicio_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_tipo_servicio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_condicion_contrato_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_condicion_contrato();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_condicion_contrato_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_condicion_contrato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_numero_medidor_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_numero_medidor();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_numero_medidor_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_numero_medidor_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_usuario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_fecha();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_fecha_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_terminal_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_estado();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_estado_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  lookup_con_estado();
}

function sc_form_jap_contrato_con_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_motivo_anulacion_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_motivo_anulacion();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_motivo_anulacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_motivo_anulacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_tipo_contrato_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_tipo_contrato();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_tipo_contrato_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_tipo_contrato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_total_a_pagar_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_total_a_pagar();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_total_a_pagar_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_event_con_total_a_pagar_onchange();
}

function sc_form_jap_contrato_con_total_a_pagar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_abono_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_abono();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_abono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_event_con_abono_onchange();
}

function sc_form_jap_contrato_con_abono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_plazo_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_plazo();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_plazo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  do_ajax_form_jap_contrato_event_con_plazo_onchange();
}

function sc_form_jap_contrato_con_plazo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_fecha_instalacion_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_fecha_instalacion();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_fecha_instalacion_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_fecha_instalacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_observaciones_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_observaciones();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_observaciones_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_observaciones_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_usuario_instala_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_usuario_instala();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_usuario_instala_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  lookup_con_usuario_instala();
}

function sc_form_jap_contrato_con_usuario_instala_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_numero_contrato_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_numero_contrato();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_numero_contrato_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_numero_contrato_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_maxima_lectura_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_maxima_lectura();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_maxima_lectura_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_maxima_lectura_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_lectura_actual_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_lectura_actual();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_lectura_actual_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_lectura_actual_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_fecha_lectura_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_fecha_lectura();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_fecha_lectura_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_fecha_lectura_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_ruta_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_ruta();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_ruta_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
  nm_recarga_form('bloco_3', 0);
  do_ajax_form_jap_contrato_event_con_ruta_onchange();
}

function sc_form_jap_contrato_con_ruta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_sino_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_sino();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_sino_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_sino_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_orden_lecturas_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_orden_lecturas();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_orden_lecturas_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_orden_lecturas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_numero_corte_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_numero_corte();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_numero_corte_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_numero_corte_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_comunidad_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_comunidad();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_comunidad_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_comunidad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_sector_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_sector();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_sector_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_sector_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_numero_censo_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_numero_censo();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_numero_censo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_numero_censo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_saldo_pagar_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_saldo_pagar();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_saldo_pagar_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_saldo_pagar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_rubros_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_rubros();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_rubros_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_rubros_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_cuotas_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_cuotas();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_cuotas_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_cuotas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_materiales_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_materiales();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_materiales_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_materiales_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_direccion_propietario_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_direccion_propietario();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_direccion_propietario_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_direccion_propietario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_valor_cuota_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_valor_cuota();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_valor_cuota_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_valor_cuota_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_nombre();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_nombre_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_cedula_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_cedula();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_cedula_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_cedula_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_telefono();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_telefono_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_celular();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_celular_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_jap_contrato_con_correo_onblur(oThis, iSeqRow) {
  do_ajax_form_jap_contrato_validate_con_correo();
  scCssBlur(oThis);
}

function sc_form_jap_contrato_con_correo_onchange(oThis, iSeqRow) {
  scMarkFormAsChanged();
}

function sc_form_jap_contrato_con_correo_onfocus(oThis, iSeqRow) {
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
	if ("7" == block) {
		displayChange_block_7(status);
	}
	if ("8" == block) {
		displayChange_block_8(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("con_motivo_anulacion", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("con_fecha", "", status);
	displayChange_field("con_sino", "", status);
	displayChange_field("con_id", "", status);
	displayChange_field("con_numero_contrato", "", status);
	displayChange_field("con_tipo_contrato", "", status);
	displayChange_field("con_propietario", "", status);
	displayChange_field("con_nombre", "", status);
	displayChange_field("con_cedula", "", status);
	displayChange_field("con_telefono", "", status);
	displayChange_field("con_celular", "", status);
	displayChange_field("con_direccion_propietario", "", status);
	displayChange_field("con_correo", "", status);
	displayChange_field("con_estado", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("con_pais", "", status);
	displayChange_field("con_provincia", "", status);
	displayChange_field("con_canton", "", status);
	displayChange_field("con_parroquia", "", status);
	displayChange_field("con_comunidad", "", status);
	displayChange_field("con_sector", "", status);
	displayChange_field("con_numero_censo", "", status);
	displayChange_field("con_direccion_predio", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("con_toma_administrativa", "", status);
	displayChange_field("con_toma_operativa", "", status);
	displayChange_field("con_tipo_servicio", "", status);
	displayChange_field("con_condicion_contrato", "", status);
	displayChange_field("con_ruta", "", status);
	displayChange_field("con_orden_lecturas", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("con_fecha_instalacion", "", status);
	displayChange_field("con_numero_medidor", "", status);
	displayChange_field("con_maxima_lectura", "", status);
	displayChange_field("con_lectura_actual", "", status);
	displayChange_field("con_fecha_lectura", "", status);
	displayChange_field("con_usuario_instala", "", status);
	displayChange_field("con_observaciones", "", status);
	displayChange_field("con_numero_corte", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("materiales", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("rubros", "", status);
}

function displayChange_block_7(status) {
	displayChange_field("con_total_a_pagar", "", status);
	displayChange_field("con_abono", "", status);
	displayChange_field("con_saldo_pagar", "", status);
	displayChange_field("con_plazo", "", status);
	displayChange_field("con_valor_cuota", "", status);
}

function displayChange_block_8(status) {
	displayChange_field("cuotas", "", status);
	displayChange_field("con_empresa", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_con_motivo_anulacion(row, status);
	displayChange_field_con_fecha(row, status);
	displayChange_field_con_sino(row, status);
	displayChange_field_con_id(row, status);
	displayChange_field_con_numero_contrato(row, status);
	displayChange_field_con_tipo_contrato(row, status);
	displayChange_field_con_propietario(row, status);
	displayChange_field_con_nombre(row, status);
	displayChange_field_con_cedula(row, status);
	displayChange_field_con_telefono(row, status);
	displayChange_field_con_celular(row, status);
	displayChange_field_con_direccion_propietario(row, status);
	displayChange_field_con_correo(row, status);
	displayChange_field_con_estado(row, status);
	displayChange_field_con_pais(row, status);
	displayChange_field_con_provincia(row, status);
	displayChange_field_con_canton(row, status);
	displayChange_field_con_parroquia(row, status);
	displayChange_field_con_comunidad(row, status);
	displayChange_field_con_sector(row, status);
	displayChange_field_con_numero_censo(row, status);
	displayChange_field_con_direccion_predio(row, status);
	displayChange_field_con_toma_administrativa(row, status);
	displayChange_field_con_toma_operativa(row, status);
	displayChange_field_con_tipo_servicio(row, status);
	displayChange_field_con_condicion_contrato(row, status);
	displayChange_field_con_ruta(row, status);
	displayChange_field_con_orden_lecturas(row, status);
	displayChange_field_con_fecha_instalacion(row, status);
	displayChange_field_con_numero_medidor(row, status);
	displayChange_field_con_maxima_lectura(row, status);
	displayChange_field_con_lectura_actual(row, status);
	displayChange_field_con_fecha_lectura(row, status);
	displayChange_field_con_usuario_instala(row, status);
	displayChange_field_con_observaciones(row, status);
	displayChange_field_con_numero_corte(row, status);
	displayChange_field_materiales(row, status);
	displayChange_field_rubros(row, status);
	displayChange_field_con_total_a_pagar(row, status);
	displayChange_field_con_abono(row, status);
	displayChange_field_con_saldo_pagar(row, status);
	displayChange_field_con_plazo(row, status);
	displayChange_field_con_valor_cuota(row, status);
	displayChange_field_cuotas(row, status);
	displayChange_field_con_empresa(row, status);
}

function displayChange_field(field, row, status) {
	if ("con_motivo_anulacion" == field) {
		displayChange_field_con_motivo_anulacion(row, status);
	}
	if ("con_fecha" == field) {
		displayChange_field_con_fecha(row, status);
	}
	if ("con_sino" == field) {
		displayChange_field_con_sino(row, status);
	}
	if ("con_id" == field) {
		displayChange_field_con_id(row, status);
	}
	if ("con_numero_contrato" == field) {
		displayChange_field_con_numero_contrato(row, status);
	}
	if ("con_tipo_contrato" == field) {
		displayChange_field_con_tipo_contrato(row, status);
	}
	if ("con_propietario" == field) {
		displayChange_field_con_propietario(row, status);
	}
	if ("con_nombre" == field) {
		displayChange_field_con_nombre(row, status);
	}
	if ("con_cedula" == field) {
		displayChange_field_con_cedula(row, status);
	}
	if ("con_telefono" == field) {
		displayChange_field_con_telefono(row, status);
	}
	if ("con_celular" == field) {
		displayChange_field_con_celular(row, status);
	}
	if ("con_direccion_propietario" == field) {
		displayChange_field_con_direccion_propietario(row, status);
	}
	if ("con_correo" == field) {
		displayChange_field_con_correo(row, status);
	}
	if ("con_estado" == field) {
		displayChange_field_con_estado(row, status);
	}
	if ("con_pais" == field) {
		displayChange_field_con_pais(row, status);
	}
	if ("con_provincia" == field) {
		displayChange_field_con_provincia(row, status);
	}
	if ("con_canton" == field) {
		displayChange_field_con_canton(row, status);
	}
	if ("con_parroquia" == field) {
		displayChange_field_con_parroquia(row, status);
	}
	if ("con_comunidad" == field) {
		displayChange_field_con_comunidad(row, status);
	}
	if ("con_sector" == field) {
		displayChange_field_con_sector(row, status);
	}
	if ("con_numero_censo" == field) {
		displayChange_field_con_numero_censo(row, status);
	}
	if ("con_direccion_predio" == field) {
		displayChange_field_con_direccion_predio(row, status);
	}
	if ("con_toma_administrativa" == field) {
		displayChange_field_con_toma_administrativa(row, status);
	}
	if ("con_toma_operativa" == field) {
		displayChange_field_con_toma_operativa(row, status);
	}
	if ("con_tipo_servicio" == field) {
		displayChange_field_con_tipo_servicio(row, status);
	}
	if ("con_condicion_contrato" == field) {
		displayChange_field_con_condicion_contrato(row, status);
	}
	if ("con_ruta" == field) {
		displayChange_field_con_ruta(row, status);
	}
	if ("con_orden_lecturas" == field) {
		displayChange_field_con_orden_lecturas(row, status);
	}
	if ("con_fecha_instalacion" == field) {
		displayChange_field_con_fecha_instalacion(row, status);
	}
	if ("con_numero_medidor" == field) {
		displayChange_field_con_numero_medidor(row, status);
	}
	if ("con_maxima_lectura" == field) {
		displayChange_field_con_maxima_lectura(row, status);
	}
	if ("con_lectura_actual" == field) {
		displayChange_field_con_lectura_actual(row, status);
	}
	if ("con_fecha_lectura" == field) {
		displayChange_field_con_fecha_lectura(row, status);
	}
	if ("con_usuario_instala" == field) {
		displayChange_field_con_usuario_instala(row, status);
	}
	if ("con_observaciones" == field) {
		displayChange_field_con_observaciones(row, status);
	}
	if ("con_numero_corte" == field) {
		displayChange_field_con_numero_corte(row, status);
	}
	if ("materiales" == field) {
		displayChange_field_materiales(row, status);
	}
	if ("rubros" == field) {
		displayChange_field_rubros(row, status);
	}
	if ("con_total_a_pagar" == field) {
		displayChange_field_con_total_a_pagar(row, status);
	}
	if ("con_abono" == field) {
		displayChange_field_con_abono(row, status);
	}
	if ("con_saldo_pagar" == field) {
		displayChange_field_con_saldo_pagar(row, status);
	}
	if ("con_plazo" == field) {
		displayChange_field_con_plazo(row, status);
	}
	if ("con_valor_cuota" == field) {
		displayChange_field_con_valor_cuota(row, status);
	}
	if ("cuotas" == field) {
		displayChange_field_cuotas(row, status);
	}
	if ("con_empresa" == field) {
		displayChange_field_con_empresa(row, status);
	}
}

function displayChange_field_con_motivo_anulacion(row, status) {
    var fieldId;
}

function displayChange_field_con_fecha(row, status) {
    var fieldId;
}

function displayChange_field_con_sino(row, status) {
    var fieldId;
}

function displayChange_field_con_id(row, status) {
    var fieldId;
}

function displayChange_field_con_numero_contrato(row, status) {
    var fieldId;
}

function displayChange_field_con_tipo_contrato(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_tipo_contrato__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_tipo_contrato" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_tipo_contrato");
	}
}

function displayChange_field_con_propietario(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_propietario__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_propietario" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_propietario");
	}
}

function displayChange_field_con_nombre(row, status) {
    var fieldId;
}

function displayChange_field_con_cedula(row, status) {
    var fieldId;
}

function displayChange_field_con_telefono(row, status) {
    var fieldId;
}

function displayChange_field_con_celular(row, status) {
    var fieldId;
}

function displayChange_field_con_direccion_propietario(row, status) {
    var fieldId;
}

function displayChange_field_con_correo(row, status) {
    var fieldId;
}

function displayChange_field_con_estado(row, status) {
    var fieldId;
}

function displayChange_field_con_pais(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_pais__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_pais" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_pais");
	}
}

function displayChange_field_con_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_provincia");
	}
}

function displayChange_field_con_canton(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_canton__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_canton" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_canton");
	}
}

function displayChange_field_con_parroquia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_parroquia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_parroquia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_parroquia");
	}
}

function displayChange_field_con_comunidad(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_comunidad__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_comunidad" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_comunidad");
	}
}

function displayChange_field_con_sector(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_sector__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_sector" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_sector");
	}
}

function displayChange_field_con_numero_censo(row, status) {
    var fieldId;
}

function displayChange_field_con_direccion_predio(row, status) {
    var fieldId;
}

function displayChange_field_con_toma_administrativa(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_toma_administrativa__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_toma_administrativa" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_toma_administrativa");
	}
}

function displayChange_field_con_toma_operativa(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_toma_operativa__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_toma_operativa" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_toma_operativa");
	}
}

function displayChange_field_con_tipo_servicio(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_tipo_servicio__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_tipo_servicio" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_tipo_servicio");
	}
}

function displayChange_field_con_condicion_contrato(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_condicion_contrato__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_condicion_contrato" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_condicion_contrato");
	}
}

function displayChange_field_con_ruta(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_con_ruta__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_con_ruta" + row).select2("destroy");
		}
		scJQSelect2Add(row, "con_ruta");
	}
}

function displayChange_field_con_orden_lecturas(row, status) {
    var fieldId;
}

function displayChange_field_con_fecha_instalacion(row, status) {
    var fieldId;
}

function displayChange_field_con_numero_medidor(row, status) {
    var fieldId;
}

function displayChange_field_con_maxima_lectura(row, status) {
    var fieldId;
}

function displayChange_field_con_lectura_actual(row, status) {
    var fieldId;
}

function displayChange_field_con_fecha_lectura(row, status) {
    var fieldId;
}

function displayChange_field_con_usuario_instala(row, status) {
    var fieldId;
}

function displayChange_field_con_observaciones(row, status) {
    var fieldId;
}

function displayChange_field_con_numero_corte(row, status) {
    var fieldId;
}

function displayChange_field_materiales(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_jap_materiales_contrato")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_jap_materiales_contrato")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_rubros(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_jap_rubro_contrato")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_jap_rubro_contrato")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_con_total_a_pagar(row, status) {
    var fieldId;
}

function displayChange_field_con_abono(row, status) {
    var fieldId;
}

function displayChange_field_con_saldo_pagar(row, status) {
    var fieldId;
}

function displayChange_field_con_plazo(row, status) {
    var fieldId;
}

function displayChange_field_con_valor_cuota(row, status) {
    var fieldId;
}

function displayChange_field_cuotas(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_jap_cuotas_contrato")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_jap_cuotas_contrato")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_con_empresa(row, status) {
    var fieldId;
}

function scRecreateSelect2() {
	displayChange_field_con_tipo_contrato("all", "on");
	displayChange_field_con_propietario("all", "on");
	displayChange_field_con_pais("all", "on");
	displayChange_field_con_provincia("all", "on");
	displayChange_field_con_canton("all", "on");
	displayChange_field_con_parroquia("all", "on");
	displayChange_field_con_comunidad("all", "on");
	displayChange_field_con_sector("all", "on");
	displayChange_field_con_toma_administrativa("all", "on");
	displayChange_field_con_toma_operativa("all", "on");
	displayChange_field_con_tipo_servicio("all", "on");
	displayChange_field_con_condicion_contrato("all", "on");
	displayChange_field_con_ruta("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_jap_contrato_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(25);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_con_fecha_instalacion" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_con_fecha_instalacion" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_jap_contrato_validate_con_fecha_instalacion(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['con_fecha_instalacion']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
  $("#id_sc_field_con_fecha_lectura" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_con_fecha_lectura" + iSeqRow] = $oField.val();
    },
    onClose: function(dateText, inst) {
      do_ajax_form_jap_contrato_validate_con_fecha_lectura(iSeqRow);
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
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', $_SESSION['scriptcase']['reg_conf']['date_sep']), array('', 'yyyy', ''), $this->field_config['con_fecha_lectura']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_jap_contrato')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "con_tipo_contrato" == specificField) {
    scJQSelect2Add_con_tipo_contrato(seqRow);
  }
  if (null == specificField || "con_propietario" == specificField) {
    scJQSelect2Add_con_propietario(seqRow);
  }
  if (null == specificField || "con_pais" == specificField) {
    scJQSelect2Add_con_pais(seqRow);
  }
  if (null == specificField || "con_provincia" == specificField) {
    scJQSelect2Add_con_provincia(seqRow);
  }
  if (null == specificField || "con_canton" == specificField) {
    scJQSelect2Add_con_canton(seqRow);
  }
  if (null == specificField || "con_parroquia" == specificField) {
    scJQSelect2Add_con_parroquia(seqRow);
  }
  if (null == specificField || "con_comunidad" == specificField) {
    scJQSelect2Add_con_comunidad(seqRow);
  }
  if (null == specificField || "con_sector" == specificField) {
    scJQSelect2Add_con_sector(seqRow);
  }
  if (null == specificField || "con_toma_administrativa" == specificField) {
    scJQSelect2Add_con_toma_administrativa(seqRow);
  }
  if (null == specificField || "con_toma_operativa" == specificField) {
    scJQSelect2Add_con_toma_operativa(seqRow);
  }
  if (null == specificField || "con_tipo_servicio" == specificField) {
    scJQSelect2Add_con_tipo_servicio(seqRow);
  }
  if (null == specificField || "con_condicion_contrato" == specificField) {
    scJQSelect2Add_con_condicion_contrato(seqRow);
  }
  if (null == specificField || "con_ruta" == specificField) {
    scJQSelect2Add_con_ruta(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_con_tipo_contrato(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_tipo_contrato_obj" : "#id_sc_field_con_tipo_contrato" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_tipo_contrato_obj',
      dropdownCssClass: 'css_con_tipo_contrato_obj',
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

function scJQSelect2Add_con_propietario(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_propietario_obj" : "#id_sc_field_con_propietario" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_propietario_obj',
      dropdownCssClass: 'css_con_propietario_obj',
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

function scJQSelect2Add_con_pais(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_pais_obj" : "#id_sc_field_con_pais" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_pais_obj',
      dropdownCssClass: 'css_con_pais_obj',
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

function scJQSelect2Add_con_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_provincia_obj" : "#id_sc_field_con_provincia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_provincia_obj',
      dropdownCssClass: 'css_con_provincia_obj',
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

function scJQSelect2Add_con_canton(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_canton_obj" : "#id_sc_field_con_canton" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_canton_obj',
      dropdownCssClass: 'css_con_canton_obj',
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

function scJQSelect2Add_con_parroquia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_parroquia_obj" : "#id_sc_field_con_parroquia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_parroquia_obj',
      dropdownCssClass: 'css_con_parroquia_obj',
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

function scJQSelect2Add_con_comunidad(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_comunidad_obj" : "#id_sc_field_con_comunidad" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_comunidad_obj',
      dropdownCssClass: 'css_con_comunidad_obj',
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

function scJQSelect2Add_con_sector(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_sector_obj" : "#id_sc_field_con_sector" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_con_sector_obj',
      dropdownCssClass: 'css_con_sector_obj',
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

function scJQSelect2Add_con_toma_administrativa(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_toma_administrativa_obj" : "#id_sc_field_con_toma_administrativa" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_toma_administrativa_obj',
      dropdownCssClass: 'css_con_toma_administrativa_obj',
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

function scJQSelect2Add_con_toma_operativa(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_toma_operativa_obj" : "#id_sc_field_con_toma_operativa" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_toma_operativa_obj',
      dropdownCssClass: 'css_con_toma_operativa_obj',
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

function scJQSelect2Add_con_tipo_servicio(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_tipo_servicio_obj" : "#id_sc_field_con_tipo_servicio" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_tipo_servicio_obj',
      dropdownCssClass: 'css_con_tipo_servicio_obj',
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

function scJQSelect2Add_con_condicion_contrato(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_condicion_contrato_obj" : "#id_sc_field_con_condicion_contrato" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_condicion_contrato_obj',
      dropdownCssClass: 'css_con_condicion_contrato_obj',
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

function scJQSelect2Add_con_ruta(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_con_ruta_obj" : "#id_sc_field_con_ruta" + seqRow;
  $(elemSelector).select2(
    {
      minimumResultsForSearch: Infinity,
      containerCssClass: 'css_con_ruta_obj',
      dropdownCssClass: 'css_con_ruta_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_con_tipo_contrato) { displayChange_field_con_tipo_contrato(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_propietario) { displayChange_field_con_propietario(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_pais) { displayChange_field_con_pais(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_provincia) { displayChange_field_con_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_canton) { displayChange_field_con_canton(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_parroquia) { displayChange_field_con_parroquia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_comunidad) { displayChange_field_con_comunidad(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_sector) { displayChange_field_con_sector(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_toma_administrativa) { displayChange_field_con_toma_administrativa(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_toma_operativa) { displayChange_field_con_toma_operativa(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_tipo_servicio) { displayChange_field_con_tipo_servicio(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_condicion_contrato) { displayChange_field_con_condicion_contrato(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_con_ruta) { displayChange_field_con_ruta(iLine, "on"); } }, 150);
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

