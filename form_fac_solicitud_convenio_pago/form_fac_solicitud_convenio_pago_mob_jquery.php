
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
  scEventControl_data["scp_fecha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_secuencial_documento" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_propietario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_id" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_plazo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_monto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_taza" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_tipo_amortizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["scp_estado" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["detalles" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["amortizacion" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["scp_fecha" + iSeqRow] && scEventControl_data["scp_fecha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_fecha" + iSeqRow] && scEventControl_data["scp_fecha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_secuencial_documento" + iSeqRow] && scEventControl_data["scp_secuencial_documento" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_secuencial_documento" + iSeqRow] && scEventControl_data["scp_secuencial_documento" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_propietario" + iSeqRow] && scEventControl_data["scp_propietario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_propietario" + iSeqRow] && scEventControl_data["scp_propietario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_id" + iSeqRow] && scEventControl_data["scp_id" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_id" + iSeqRow] && scEventControl_data["scp_id" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_plazo" + iSeqRow] && scEventControl_data["scp_plazo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_plazo" + iSeqRow] && scEventControl_data["scp_plazo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_monto" + iSeqRow] && scEventControl_data["scp_monto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_monto" + iSeqRow] && scEventControl_data["scp_monto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_taza" + iSeqRow] && scEventControl_data["scp_taza" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_taza" + iSeqRow] && scEventControl_data["scp_taza" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_tipo_amortizacion" + iSeqRow] && scEventControl_data["scp_tipo_amortizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_tipo_amortizacion" + iSeqRow] && scEventControl_data["scp_tipo_amortizacion" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["scp_estado" + iSeqRow] && scEventControl_data["scp_estado" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["scp_estado" + iSeqRow] && scEventControl_data["scp_estado" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["detalles" + iSeqRow] && scEventControl_data["detalles" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["detalles" + iSeqRow] && scEventControl_data["detalles" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["amortizacion" + iSeqRow] && scEventControl_data["amortizacion" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["amortizacion" + iSeqRow] && scEventControl_data["amortizacion" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("scp_propietario" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("scp_tipo_amortizacion" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("scp_contrato" + iSeq == fieldName) {
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
  $('#id_sc_field_scp_id' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_id_onblur(this, iSeqRow) })
                                    .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_id_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_fecha' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_fecha_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_fecha_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_propietario' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_propietario_onblur(this, iSeqRow) })
                                             .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_propietario_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_monto' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_monto_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_monto_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_plazo' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_plazo_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_plazo_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_taza' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_taza_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_taza_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_tipo_amortizacion' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_tipo_amortizacion_onblur(this, iSeqRow) })
                                                   .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_tipo_amortizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_secuencial_documento' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_secuencial_documento_onblur(this, iSeqRow) })
                                                      .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_secuencial_documento_onfocus(this, iSeqRow) });
  $('#id_sc_field_scp_estado' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_scp_estado_onblur(this, iSeqRow) })
                                        .bind('change', function() { sc_form_fac_solicitud_convenio_pago_scp_estado_onchange(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_scp_estado_onfocus(this, iSeqRow) });
  $('#id_sc_field_amortizacion' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_amortizacion_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_amortizacion_onfocus(this, iSeqRow) });
  $('#id_sc_field_detalles' + iSeqRow).bind('blur', function() { sc_form_fac_solicitud_convenio_pago_detalles_onblur(this, iSeqRow) })
                                      .bind('focus', function() { sc_form_fac_solicitud_convenio_pago_detalles_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_fac_solicitud_convenio_pago_scp_id_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_id();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_id_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_fecha_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_fecha();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_fecha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_propietario_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_propietario();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_propietario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_monto_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_monto();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_monto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_plazo_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_plazo();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_plazo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_taza_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_taza();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_taza_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_tipo_amortizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_tipo_amortizacion();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_tipo_amortizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_secuencial_documento_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_secuencial_documento();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_secuencial_documento_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_estado_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_scp_estado();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_scp_estado_onchange(oThis, iSeqRow) {
  lookup_scp_estado();
}

function sc_form_fac_solicitud_convenio_pago_scp_estado_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_amortizacion_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_amortizacion();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_amortizacion_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_fac_solicitud_convenio_pago_detalles_onblur(oThis, iSeqRow) {
  do_ajax_form_fac_solicitud_convenio_pago_mob_validate_detalles();
  scCssBlur(oThis);
}

function sc_form_fac_solicitud_convenio_pago_detalles_onfocus(oThis, iSeqRow) {
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
}

function displayChange_block_0(status) {
	displayChange_field("scp_fecha", "", status);
	displayChange_field("scp_secuencial_documento", "", status);
	displayChange_field("scp_propietario", "", status);
	displayChange_field("scp_id", "", status);
	displayChange_field("scp_plazo", "", status);
	displayChange_field("scp_monto", "", status);
	displayChange_field("scp_taza", "", status);
	displayChange_field("scp_tipo_amortizacion", "", status);
	displayChange_field("scp_estado", "", status);
}

function displayChange_block_1(status) {
	displayChange_field("detalles", "", status);
}

function displayChange_block_2(status) {
	displayChange_field("amortizacion", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_scp_fecha(row, status);
	displayChange_field_scp_secuencial_documento(row, status);
	displayChange_field_scp_propietario(row, status);
	displayChange_field_scp_id(row, status);
	displayChange_field_scp_plazo(row, status);
	displayChange_field_scp_monto(row, status);
	displayChange_field_scp_taza(row, status);
	displayChange_field_scp_tipo_amortizacion(row, status);
	displayChange_field_scp_estado(row, status);
	displayChange_field_detalles(row, status);
	displayChange_field_amortizacion(row, status);
}

function displayChange_field(field, row, status) {
	if ("scp_fecha" == field) {
		displayChange_field_scp_fecha(row, status);
	}
	if ("scp_secuencial_documento" == field) {
		displayChange_field_scp_secuencial_documento(row, status);
	}
	if ("scp_propietario" == field) {
		displayChange_field_scp_propietario(row, status);
	}
	if ("scp_id" == field) {
		displayChange_field_scp_id(row, status);
	}
	if ("scp_plazo" == field) {
		displayChange_field_scp_plazo(row, status);
	}
	if ("scp_monto" == field) {
		displayChange_field_scp_monto(row, status);
	}
	if ("scp_taza" == field) {
		displayChange_field_scp_taza(row, status);
	}
	if ("scp_tipo_amortizacion" == field) {
		displayChange_field_scp_tipo_amortizacion(row, status);
	}
	if ("scp_estado" == field) {
		displayChange_field_scp_estado(row, status);
	}
	if ("detalles" == field) {
		displayChange_field_detalles(row, status);
	}
	if ("amortizacion" == field) {
		displayChange_field_amortizacion(row, status);
	}
}

function displayChange_field_scp_fecha(row, status) {
    var fieldId;
}

function displayChange_field_scp_secuencial_documento(row, status) {
    var fieldId;
}

function displayChange_field_scp_propietario(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_scp_propietario__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_scp_propietario" + row).select2("destroy");
		}
		scJQSelect2Add(row, "scp_propietario");
	}
}

function displayChange_field_scp_id(row, status) {
    var fieldId;
}

function displayChange_field_scp_plazo(row, status) {
    var fieldId;
}

function displayChange_field_scp_monto(row, status) {
    var fieldId;
}

function displayChange_field_scp_taza(row, status) {
    var fieldId;
}

function displayChange_field_scp_tipo_amortizacion(row, status) {
    var fieldId;
	if ("on" == status) {
		if ("all" == row) {
			var fieldList = $(".css_scp_tipo_amortizacion__obj");
			for (var i = 0; i < fieldList.length; i++) {
				$($(fieldList[i]).attr("id")).select2("destroy");
			}
		}
		else {
			$("#id_sc_field_scp_tipo_amortizacion" + row).select2("destroy");
		}
		scJQSelect2Add(row, "scp_tipo_amortizacion");
	}
}

function displayChange_field_scp_estado(row, status) {
    var fieldId;
}

function displayChange_field_detalles(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_form_fac_operaciones_convenio_mob")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_form_fac_operaciones_convenio_mob")[0].contentWindow.scRecreateSelect2();
	}
}

function displayChange_field_amortizacion(row, status) {
    var fieldId;
	if ("on" == status && typeof $("#nmsc_iframe_liga_grid_fac_cuotas_convenio")[0].contentWindow.scRecreateSelect2 === "function") {
		$("#nmsc_iframe_liga_grid_fac_cuotas_convenio")[0].contentWindow.scRecreateSelect2();
	}
}

function scRecreateSelect2() {
	displayChange_field_scp_propietario("all", "on");
	displayChange_field_scp_tipo_amortizacion("all", "on");
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_fac_solicitud_convenio_pago_mob_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(44);
		}
	}
}
function scJQSpinAdd(iSeqRow) {
  $("#id_sc_field_scp_plazo" + iSeqRow).spinner({
    max: 9999,
    min: 0,
    step: 1,
    page: 5,
    change: function(event, ui) {
      $(this).trigger("change");
    },
    stop: function(event, ui) {
      $(this).trigger("change");
    }
  });
} // scJQSpinAdd

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
                         $(t).html("<a href=\"javascript:nm_mostra_doc('0', '"+rs2+"', 'form_fac_solicitud_convenio_pago_mob')\">"+$('#id_read_on_'+field+iSeqRow).text()+"</a>");
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
  if (null == specificField || "scp_propietario" == specificField) {
    scJQSelect2Add_scp_propietario(seqRow);
  }
  if (null == specificField || "scp_tipo_amortizacion" == specificField) {
    scJQSelect2Add_scp_tipo_amortizacion(seqRow);
  }
} // scJQSelect2Add

function scJQSelect2Add_scp_propietario(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_scp_propietario_obj" : "#id_sc_field_scp_propietario" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_scp_propietario_obj',
      dropdownCssClass: 'css_scp_propietario_obj',
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

function scJQSelect2Add_scp_tipo_amortizacion(seqRow) {
  var elemSelector = "all" == seqRow ? ".css_scp_tipo_amortizacion_obj" : "#id_sc_field_scp_tipo_amortizacion" + seqRow;
  $(elemSelector).select2(
    {
      containerCssClass: 'css_scp_tipo_amortizacion_obj',
      dropdownCssClass: 'css_scp_tipo_amortizacion_obj',
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
  scJQSpinAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
  setTimeout(function () { if ('function' == typeof displayChange_field_scp_propietario) { displayChange_field_scp_propietario(iLine, "on"); } }, 150);
  setTimeout(function () { if ('function' == typeof displayChange_field_scp_tipo_amortizacion) { displayChange_field_scp_tipo_amortizacion(iLine, "on"); } }, 150);
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

