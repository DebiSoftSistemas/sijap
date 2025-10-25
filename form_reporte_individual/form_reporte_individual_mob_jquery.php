
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
  scEventControl_data["cl_tipo_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_identificacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_nombre" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_telefono" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_celular" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_email" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_pais" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_provincia" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_ciudad" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cl_direccion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["contratos" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["deudas_instalacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["deudas_consumo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["otras_deudas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["inspecciones" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cartera_recuperar" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cartera_recuperada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cartera_anulada" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["facturas" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["factura_credito" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["notas_credito" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["cxp_cliente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["cl_tipo_identificacion" + iSeqRow] && scEventControl_data["cl_tipo_identificacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_tipo_identificacion" + iSeqRow] && scEventControl_data["cl_tipo_identificacion" + iSeqRow]["change"]) {
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
  if (scEventControl_data["cl_telefono" + iSeqRow] && scEventControl_data["cl_telefono" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_telefono" + iSeqRow] && scEventControl_data["cl_telefono" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_celular" + iSeqRow] && scEventControl_data["cl_celular" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_celular" + iSeqRow] && scEventControl_data["cl_celular" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_email" + iSeqRow] && scEventControl_data["cl_email" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_email" + iSeqRow] && scEventControl_data["cl_email" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_pais" + iSeqRow] && scEventControl_data["cl_pais" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_pais" + iSeqRow] && scEventControl_data["cl_pais" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_provincia" + iSeqRow] && scEventControl_data["cl_provincia" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_provincia" + iSeqRow] && scEventControl_data["cl_provincia" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_ciudad" + iSeqRow] && scEventControl_data["cl_ciudad" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_ciudad" + iSeqRow] && scEventControl_data["cl_ciudad" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cl_direccion" + iSeqRow] && scEventControl_data["cl_direccion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cl_direccion" + iSeqRow] && scEventControl_data["cl_direccion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["contratos" + iSeqRow] && scEventControl_data["contratos" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["contratos" + iSeqRow] && scEventControl_data["contratos" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["deudas_instalacion" + iSeqRow] && scEventControl_data["deudas_instalacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["deudas_instalacion" + iSeqRow] && scEventControl_data["deudas_instalacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["deudas_consumo" + iSeqRow] && scEventControl_data["deudas_consumo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["deudas_consumo" + iSeqRow] && scEventControl_data["deudas_consumo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["otras_deudas" + iSeqRow] && scEventControl_data["otras_deudas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["otras_deudas" + iSeqRow] && scEventControl_data["otras_deudas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["inspecciones" + iSeqRow] && scEventControl_data["inspecciones" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["inspecciones" + iSeqRow] && scEventControl_data["inspecciones" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cartera_recuperar" + iSeqRow] && scEventControl_data["cartera_recuperar" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cartera_recuperar" + iSeqRow] && scEventControl_data["cartera_recuperar" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cartera_recuperada" + iSeqRow] && scEventControl_data["cartera_recuperada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cartera_recuperada" + iSeqRow] && scEventControl_data["cartera_recuperada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cartera_anulada" + iSeqRow] && scEventControl_data["cartera_anulada" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cartera_anulada" + iSeqRow] && scEventControl_data["cartera_anulada" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["facturas" + iSeqRow] && scEventControl_data["facturas" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["facturas" + iSeqRow] && scEventControl_data["facturas" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["factura_credito" + iSeqRow] && scEventControl_data["factura_credito" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["factura_credito" + iSeqRow] && scEventControl_data["factura_credito" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["notas_credito" + iSeqRow] && scEventControl_data["notas_credito" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["notas_credito" + iSeqRow] && scEventControl_data["notas_credito" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["cxp_cliente" + iSeqRow] && scEventControl_data["cxp_cliente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["cxp_cliente" + iSeqRow] && scEventControl_data["cxp_cliente" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("cl_tipo_identificacion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cl_pais" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cl_provincia" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("cl_ciudad" + iSeq == fieldName) {
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
  $('#id_sc_field_cl_nombre' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_nombre_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_reporte_individual_cl_nombre_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_tipo_identificacion' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_tipo_identificacion_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_reporte_individual_cl_tipo_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_identificacion' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_identificacion_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_reporte_individual_cl_identificacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_pais' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_pais_onblur(this, iSeqRow) })
                                     .bind('focus', function() { sc_form_reporte_individual_cl_pais_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_provincia' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_provincia_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_reporte_individual_cl_provincia_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_ciudad' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_ciudad_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_reporte_individual_cl_ciudad_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_direccion' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_direccion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_reporte_individual_cl_direccion_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_telefono' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_telefono_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_reporte_individual_cl_telefono_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_celular' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_celular_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_reporte_individual_cl_celular_onfocus(this, iSeqRow) });
  $('#id_sc_field_cl_email' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cl_email_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_reporte_individual_cl_email_onfocus(this, iSeqRow) });
  $('#id_sc_field_cartera_anulada' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cartera_anulada_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_reporte_individual_cartera_anulada_onfocus(this, iSeqRow) });
  $('#id_sc_field_cartera_recuperada' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cartera_recuperada_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_reporte_individual_cartera_recuperada_onfocus(this, iSeqRow) });
  $('#id_sc_field_cartera_recuperar' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cartera_recuperar_onblur(this, iSeqRow) })
                                               .bind('focus', function() { sc_form_reporte_individual_cartera_recuperar_onfocus(this, iSeqRow) });
  $('#id_sc_field_contratos' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_contratos_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_reporte_individual_contratos_onfocus(this, iSeqRow) });
  $('#id_sc_field_facturas' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_facturas_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_reporte_individual_facturas_onfocus(this, iSeqRow) });
  $('#id_sc_field_factura_credito' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_factura_credito_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_reporte_individual_factura_credito_onfocus(this, iSeqRow) });
  $('#id_sc_field_inspecciones' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_inspecciones_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_reporte_individual_inspecciones_onfocus(this, iSeqRow) });
  $('#id_sc_field_deudas_instalacion' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_deudas_instalacion_onblur(this, iSeqRow) })
                                                .bind('focus', function() { sc_form_reporte_individual_deudas_instalacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_deudas_consumo' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_deudas_consumo_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_reporte_individual_deudas_consumo_onfocus(this, iSeqRow) });
  $('#id_sc_field_otras_deudas' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_otras_deudas_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_reporte_individual_otras_deudas_onfocus(this, iSeqRow) });
  $('#id_sc_field_cxp_cliente' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_cxp_cliente_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_reporte_individual_cxp_cliente_onfocus(this, iSeqRow) });
  $('#id_sc_field_notas_credito' + iSeqRow).bind('blur', function() { sc_form_reporte_individual_notas_credito_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_reporte_individual_notas_credito_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_reporte_individual_cl_nombre_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_nombre();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_nombre_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_tipo_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_tipo_identificacion();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_tipo_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_identificacion_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_identificacion();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_identificacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_pais_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_pais();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_pais_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_provincia_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_provincia();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_provincia_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_ciudad_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_ciudad();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_ciudad_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_direccion_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_direccion();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_direccion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_telefono_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_telefono();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_telefono_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_celular_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_celular();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_celular_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cl_email_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cl_email();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cl_email_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cartera_anulada_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cartera_anulada();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cartera_anulada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cartera_recuperada_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cartera_recuperada();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cartera_recuperada_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cartera_recuperar_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cartera_recuperar();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cartera_recuperar_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_contratos_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_contratos();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_contratos_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_facturas_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_facturas();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_facturas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_factura_credito_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_factura_credito();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_factura_credito_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_inspecciones_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_inspecciones();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_inspecciones_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_deudas_instalacion_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_deudas_instalacion();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_deudas_instalacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_deudas_consumo_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_deudas_consumo();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_deudas_consumo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_otras_deudas_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_otras_deudas();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_otras_deudas_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_cxp_cliente_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_cxp_cliente();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_cxp_cliente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_reporte_individual_notas_credito_onblur(oThis, iSeqRow) {
  do_ajax_form_reporte_individual_mob_validate_notas_credito();
  scCssBlur(oThis);
}

function sc_form_reporte_individual_notas_credito_onfocus(oThis, iSeqRow) {
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
	if ("9" == block) {
		displayChange_block_9(status);
	}
	if ("10" == block) {
		displayChange_block_10(status);
	}
	if ("11" == block) {
		displayChange_block_11(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("cl_tipo_identificacion", "", status);
	displayChange_field("cl_identificacion", "", status);
	displayChange_field("cl_nombre", "", status);
	displayChange_field("cl_telefono", "", status);
	displayChange_field("cl_celular", "", status);
	displayChange_field("cl_email", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("cl_pais", "", status);
	displayChange_field("cl_provincia", "", status);
	displayChange_field("cl_ciudad", "", status);
	displayChange_field("cl_direccion", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("contratos", "", status);
}

function displayChange_block_3(status) {
	displayChange_field("deudas_instalacion", "", status);
	displayChange_field("deudas_consumo", "", status);
	displayChange_field("otras_deudas", "", status);
}

function displayChange_block_4(status) {
	displayChange_field("inspecciones", "", status);
}

function displayChange_block_5(status) {
	displayChange_field("cartera_recuperar", "", status);
}

function displayChange_block_6(status) {
	displayChange_field("cartera_recuperada", "", status);
}

function displayChange_block_7(status) {
	displayChange_field("cartera_anulada", "", status);
}

function displayChange_block_8(status) {
	displayChange_field("facturas", "", status);
}

function displayChange_block_9(status) {
	displayChange_field("factura_credito", "", status);
}

function displayChange_block_10(status) {
	displayChange_field("notas_credito", "", status);
}

function displayChange_block_11(status) {
	displayChange_field("cxp_cliente", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_cl_tipo_identificacion(row, status);
	displayChange_field_cl_identificacion(row, status);
	displayChange_field_cl_nombre(row, status);
	displayChange_field_cl_telefono(row, status);
	displayChange_field_cl_celular(row, status);
	displayChange_field_cl_email(row, status);
	displayChange_field_cl_pais(row, status);
	displayChange_field_cl_provincia(row, status);
	displayChange_field_cl_ciudad(row, status);
	displayChange_field_cl_direccion(row, status);
	displayChange_field_contratos(row, status);
	displayChange_field_deudas_instalacion(row, status);
	displayChange_field_deudas_consumo(row, status);
	displayChange_field_otras_deudas(row, status);
	displayChange_field_inspecciones(row, status);
	displayChange_field_cartera_recuperar(row, status);
	displayChange_field_cartera_recuperada(row, status);
	displayChange_field_cartera_anulada(row, status);
	displayChange_field_facturas(row, status);
	displayChange_field_factura_credito(row, status);
	displayChange_field_notas_credito(row, status);
	displayChange_field_cxp_cliente(row, status);
}

function displayChange_field(field, row, status) {
	if ("cl_tipo_identificacion" == field) {
		displayChange_field_cl_tipo_identificacion(row, status);
	}
	if ("cl_identificacion" == field) {
		displayChange_field_cl_identificacion(row, status);
	}
	if ("cl_nombre" == field) {
		displayChange_field_cl_nombre(row, status);
	}
	if ("cl_telefono" == field) {
		displayChange_field_cl_telefono(row, status);
	}
	if ("cl_celular" == field) {
		displayChange_field_cl_celular(row, status);
	}
	if ("cl_email" == field) {
		displayChange_field_cl_email(row, status);
	}
	if ("cl_pais" == field) {
		displayChange_field_cl_pais(row, status);
	}
	if ("cl_provincia" == field) {
		displayChange_field_cl_provincia(row, status);
	}
	if ("cl_ciudad" == field) {
		displayChange_field_cl_ciudad(row, status);
	}
	if ("cl_direccion" == field) {
		displayChange_field_cl_direccion(row, status);
	}
	if ("contratos" == field) {
		displayChange_field_contratos(row, status);
	}
	if ("deudas_instalacion" == field) {
		displayChange_field_deudas_instalacion(row, status);
	}
	if ("deudas_consumo" == field) {
		displayChange_field_deudas_consumo(row, status);
	}
	if ("otras_deudas" == field) {
		displayChange_field_otras_deudas(row, status);
	}
	if ("inspecciones" == field) {
		displayChange_field_inspecciones(row, status);
	}
	if ("cartera_recuperar" == field) {
		displayChange_field_cartera_recuperar(row, status);
	}
	if ("cartera_recuperada" == field) {
		displayChange_field_cartera_recuperada(row, status);
	}
	if ("cartera_anulada" == field) {
		displayChange_field_cartera_anulada(row, status);
	}
	if ("facturas" == field) {
		displayChange_field_facturas(row, status);
	}
	if ("factura_credito" == field) {
		displayChange_field_factura_credito(row, status);
	}
	if ("notas_credito" == field) {
		displayChange_field_notas_credito(row, status);
	}
	if ("cxp_cliente" == field) {
		displayChange_field_cxp_cliente(row, status);
	}
}

function displayChange_field_cl_tipo_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_cl_identificacion(row, status) {
    var fieldId;
}

function displayChange_field_cl_nombre(row, status) {
    var fieldId;
}

function displayChange_field_cl_telefono(row, status) {
    var fieldId;
}

function displayChange_field_cl_celular(row, status) {
    var fieldId;
}

function displayChange_field_cl_email(row, status) {
    var fieldId;
}

function displayChange_field_cl_pais(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cl_pais__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cl_pais" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cl_pais");
	}
}

function displayChange_field_cl_provincia(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cl_provincia__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cl_provincia" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cl_provincia");
	}
}

function displayChange_field_cl_ciudad(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_cl_ciudad__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_cl_ciudad" + row).select2("destroy");
		}
		scJQSelect2Add(row, "cl_ciudad");
	}
}

function displayChange_field_cl_direccion(row, status) {
    var fieldId;
}

function displayChange_field_contratos(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_jap_contratos_cliente_cartera")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_jap_contratos_cliente_cartera")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_deudas_instalacion(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_jap_instalacion_contratos_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_jap_instalacion_contratos_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_deudas_consumo(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_jap_emisiones_consumo_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_jap_emisiones_consumo_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_otras_deudas(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_jap_otras_emisiones_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_jap_otras_emisiones_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_inspecciones(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_jap_solicitud_procesada_usuario")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_jap_solicitud_procesada_usuario")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_cartera_recuperar(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_cartera_por_recuperar_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_cartera_por_recuperar_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_cartera_recuperada(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_cartera_recuperada_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_cartera_recuperada_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_cartera_anulada(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_cartera_anulada_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_cartera_anulada_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_facturas(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_del_factura_cliente")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_del_factura_cliente")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_factura_credito(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_facturas_credito_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_facturas_credito_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_notas_credito(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_del_nota_credito_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_del_nota_credito_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_cxp_cliente(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_v_del_cuentas_por_pagar_cliente_ind")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_v_del_cuentas_por_pagar_cliente_ind")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_cl_pais("all", "on");
	displayChange_field_cl_provincia("all", "on");
	displayChange_field_cl_ciudad("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_reporte_individual_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(35);
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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_reporte_individual_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "cl_pais" == specificField) {
    scJQSelect2Add_cl_pais(seqRow);
  }
  if (null == specificField || "cl_provincia" == specificField) {
    scJQSelect2Add_cl_provincia(seqRow);
  }
  if (null == specificField || "cl_ciudad" == specificField) {
    scJQSelect2Add_cl_ciudad(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_cl_pais(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cl_pais_obj" : "#id_sc_field_cl_pais" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cl_pais_obj',
      dropdownCssClass: 'css_cl_pais_obj',
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

function scJQSelect2Add_cl_provincia(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cl_provincia_obj" : "#id_sc_field_cl_provincia" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cl_provincia_obj',
      dropdownCssClass: 'css_cl_provincia_obj',
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

function scJQSelect2Add_cl_ciudad(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_cl_ciudad_obj" : "#id_sc_field_cl_ciudad" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_cl_ciudad_obj',
      dropdownCssClass: 'css_cl_ciudad_obj',
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
  setTimeout(function () { if ('function' == typeof displayChange_field_cl_pais) { displayChange_field_cl_pais(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_cl_provincia) { displayChange_field_cl_provincia(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_cl_ciudad) { displayChange_field_cl_ciudad(iLine, "on"); } }, 150);
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

