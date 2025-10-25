<?php

class grid_resumen_ventas_resumo
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $total;
   var $tipo;
   var $nm_data;
   var $NM_res_sem_reg;
   var $NM_export;
   var $prim_linha;
   var $que_linha;
   var $css_line_back; 
   var $css_line_fonf; 
   var $comando_grafico;
   var $resumo_campos;
   var $nm_location;
   var $Print_All;
   var $NM_raiz_img; 
   var $NM_tit_val; 
   var $NM_totaliz_hrz; 
   var $link_graph_tot; 
   var $Tot_ger; 
   var $nmgp_botoes     = array();
   var $nm_btn_exist    = array();
   var $nm_btn_label    = array(); 
   var $nm_btn_disabled = array();
   var $array_total_fac_fecha;
   var $array_total_fac_tipo_comprobante;
   var $array_total_est_codigo;
   var $array_total_pen_serie;
   var $array_total_cl_identificacion;
   var $array_total_cl_nombre;
   var $array_total_fac_usuario;
   var $array_total_fac_socio_transportista;
   var $array_total_geral;
   var $array_tot_lin;
   var $array_final;
   var $array_links;
   var $array_links_tit;
   var $array_export;
   var $quant_colunas;
   var $conv_col;
   var $count_ger;
   var $sum_fac_subtotal;
   var $sum_fac_total_descuento;
   var $sum_fac_valor_iva;
   var $sum_fac_propina;
   var $sum_fac_total;
   var $sum_fac_subtotal_iva;
   var $sum_fac_subtotal_cero;
   var $sum_fac_subtotal_no_objeto;
   var $sum_fac_subtotal_excento;
   var $sum_fac_valor_ice;
   var $sum_fac_valor_irbpnr;
   var $sc_proc_quebra_fac_fecha;
   var $count_fac_fecha;
   var $sum_fac_fecha_fac_subtotal;
   var $sum_fac_fecha_fac_total_descuento;
   var $sum_fac_fecha_fac_valor_iva;
   var $sum_fac_fecha_fac_propina;
   var $sum_fac_fecha_fac_total;
   var $sum_fac_fecha_fac_subtotal_iva;
   var $sum_fac_fecha_fac_subtotal_cero;
   var $sum_fac_fecha_fac_subtotal_no_objeto;
   var $sum_fac_fecha_fac_subtotal_excento;
   var $sum_fac_fecha_fac_valor_ice;
   var $sum_fac_fecha_fac_valor_irbpnr;
   var $sc_proc_quebra_fac_tipo_comprobante;
   var $count_fac_tipo_comprobante;
   var $sum_fac_tipo_comprobante_fac_subtotal;
   var $sum_fac_tipo_comprobante_fac_total_descuento;
   var $sum_fac_tipo_comprobante_fac_valor_iva;
   var $sum_fac_tipo_comprobante_fac_propina;
   var $sum_fac_tipo_comprobante_fac_total;
   var $sum_fac_tipo_comprobante_fac_subtotal_iva;
   var $sum_fac_tipo_comprobante_fac_subtotal_cero;
   var $sum_fac_tipo_comprobante_fac_subtotal_no_objeto;
   var $sum_fac_tipo_comprobante_fac_subtotal_excento;
   var $sum_fac_tipo_comprobante_fac_valor_ice;
   var $sum_fac_tipo_comprobante_fac_valor_irbpnr;
   var $sc_proc_quebra_est_codigo;
   var $count_est_codigo;
   var $sum_est_codigo_fac_subtotal;
   var $sum_est_codigo_fac_total_descuento;
   var $sum_est_codigo_fac_valor_iva;
   var $sum_est_codigo_fac_propina;
   var $sum_est_codigo_fac_total;
   var $sum_est_codigo_fac_subtotal_iva;
   var $sum_est_codigo_fac_subtotal_cero;
   var $sum_est_codigo_fac_subtotal_no_objeto;
   var $sum_est_codigo_fac_subtotal_excento;
   var $sum_est_codigo_fac_valor_ice;
   var $sum_est_codigo_fac_valor_irbpnr;
   var $sc_proc_quebra_pen_serie;
   var $count_pen_serie;
   var $sum_pen_serie_fac_subtotal;
   var $sum_pen_serie_fac_total_descuento;
   var $sum_pen_serie_fac_valor_iva;
   var $sum_pen_serie_fac_propina;
   var $sum_pen_serie_fac_total;
   var $sum_pen_serie_fac_subtotal_iva;
   var $sum_pen_serie_fac_subtotal_cero;
   var $sum_pen_serie_fac_subtotal_no_objeto;
   var $sum_pen_serie_fac_subtotal_excento;
   var $sum_pen_serie_fac_valor_ice;
   var $sum_pen_serie_fac_valor_irbpnr;
   var $sc_proc_quebra_cl_identificacion;
   var $count_cl_identificacion;
   var $sum_cl_identificacion_fac_subtotal;
   var $sum_cl_identificacion_fac_total_descuento;
   var $sum_cl_identificacion_fac_valor_iva;
   var $sum_cl_identificacion_fac_propina;
   var $sum_cl_identificacion_fac_total;
   var $sum_cl_identificacion_fac_subtotal_iva;
   var $sum_cl_identificacion_fac_subtotal_cero;
   var $sum_cl_identificacion_fac_subtotal_no_objeto;
   var $sum_cl_identificacion_fac_subtotal_excento;
   var $sum_cl_identificacion_fac_valor_ice;
   var $sum_cl_identificacion_fac_valor_irbpnr;
   var $sc_proc_quebra_cl_nombre;
   var $count_cl_nombre;
   var $sum_cl_nombre_fac_subtotal;
   var $sum_cl_nombre_fac_total_descuento;
   var $sum_cl_nombre_fac_valor_iva;
   var $sum_cl_nombre_fac_propina;
   var $sum_cl_nombre_fac_total;
   var $sum_cl_nombre_fac_subtotal_iva;
   var $sum_cl_nombre_fac_subtotal_cero;
   var $sum_cl_nombre_fac_subtotal_no_objeto;
   var $sum_cl_nombre_fac_subtotal_excento;
   var $sum_cl_nombre_fac_valor_ice;
   var $sum_cl_nombre_fac_valor_irbpnr;
   var $sc_proc_quebra_fac_usuario;
   var $count_fac_usuario;
   var $sum_fac_usuario_fac_subtotal;
   var $sum_fac_usuario_fac_total_descuento;
   var $sum_fac_usuario_fac_valor_iva;
   var $sum_fac_usuario_fac_propina;
   var $sum_fac_usuario_fac_total;
   var $sum_fac_usuario_fac_subtotal_iva;
   var $sum_fac_usuario_fac_subtotal_cero;
   var $sum_fac_usuario_fac_subtotal_no_objeto;
   var $sum_fac_usuario_fac_subtotal_excento;
   var $sum_fac_usuario_fac_valor_ice;
   var $sum_fac_usuario_fac_valor_irbpnr;
   var $sc_proc_quebra_fac_socio_transportista;
   var $count_fac_socio_transportista;
   var $sum_fac_socio_transportista_fac_subtotal;
   var $sum_fac_socio_transportista_fac_total_descuento;
   var $sum_fac_socio_transportista_fac_valor_iva;
   var $sum_fac_socio_transportista_fac_propina;
   var $sum_fac_socio_transportista_fac_total;
   var $sum_fac_socio_transportista_fac_subtotal_iva;
   var $sum_fac_socio_transportista_fac_subtotal_cero;
   var $sum_fac_socio_transportista_fac_subtotal_no_objeto;
   var $sum_fac_socio_transportista_fac_subtotal_excento;
   var $sum_fac_socio_transportista_fac_valor_ice;
   var $sum_fac_socio_transportista_fac_valor_irbpnr;

   //---- 
   function __construct($tipo = "")
   {
      $this->Graf_left_dat   = true;
      $this->Graf_left_tot   = true;
      $this->NM_export       = false;
      $this->NM_totaliz_hrz  = false;
      $this->link_graph_tot  = array();
      $this->proc_res_grid   = false;
      $this->array_final     = array();
      $this->array_links     = array();
      $this->array_links_tit = array();
      $this->array_export    = array();
      $this->resumo_campos                       = array();
      $this->comando_grafico                     = array();
      $this->array_total_fac_fecha               = array();
      $this->array_total_fac_tipo_comprobante    = array();
      $this->array_total_est_codigo              = array();
      $this->array_total_pen_serie               = array();
      $this->array_total_cl_identificacion       = array();
      $this->array_total_cl_nombre               = array();
      $this->array_total_fac_usuario             = array();
      $this->array_total_fac_socio_transportista = array();
      $this->array_general_total = array();
      $this->nm_data = new nm_data("es");
      if ("" != $tipo && "out" == strtolower($tipo))
      {
         $this->NM_tipo = "out";
      }
      else
      {
         $this->NM_tipo = "pag";
      }
   }

   //---- 
   function initializeButtons()
   {
      $this->nmgp_botoes['group_1'] = "on";
      $this->nmgp_botoes['group_2'] = "on";
      $this->nmgp_botoes['group_1'] = "on";
      $this->nmgp_botoes['group_2'] = "on";
      $this->nmgp_botoes['pdf'] = "on";
      $this->nmgp_botoes['word'] = "on";
      $this->nmgp_botoes['xls'] = "on";
      $this->nmgp_botoes['xml'] = "on";
      $this->nmgp_botoes['csv'] = "on";
      $this->nmgp_botoes['rtf'] = "on";
      $this->nmgp_botoes['imp'] = "on";
      $this->nmgp_botoes['email_pdf'] = "on";
      $this->nmgp_botoes['email_doc'] = "on";
      $this->nmgp_botoes['email_xls'] = "on";
      $this->nmgp_botoes['email_xml'] = "on";
      $this->nmgp_botoes['email_csv'] = "on";
      $this->nmgp_botoes['email_rtf'] = "on";
      $this->nmgp_botoes['pdf'] = "on";
      $this->nmgp_botoes['word'] = "on";
      $this->nmgp_botoes['doc'] = "on";
      $this->nmgp_botoes['xls'] = "on";
      $this->nmgp_botoes['xml'] = "on";
      $this->nmgp_botoes['csv'] = "on";
      $this->nmgp_botoes['rtf'] = "on";
      $this->nmgp_botoes['print'] = "on";
      $this->nmgp_botoes['html'] = "on";
      $this->nmgp_botoes['pdf'] = "on";
      $this->nmgp_botoes['word'] = "on";
      $this->nmgp_botoes['doc'] = "on";
      $this->nmgp_botoes['xls'] = "on";
      $this->nmgp_botoes['xml'] = "on";
      $this->nmgp_botoes['csv'] = "on";
      $this->nmgp_botoes['rtf'] = "on";
      $this->nmgp_botoes['chart_conf'] = "on";
      $this->nmgp_botoes['chart_settings'] = "on";
      $this->nmgp_botoes['groupby'] = "on";
      $this->nmgp_botoes['chart_detail'] = "on";
      $this->nmgp_botoes['chart_exit'] = "on";

      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['under_dashboard'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['maximized']) {
          $tmpDashboardApp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['dashboard_app'];
          if (isset($_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['grid_resumen_ventas'])) {
              $tmpDashboardButtons = $_SESSION['scriptcase']['dashboard_toolbar'][$tmpDashboardApp]['grid_resumen_ventas'];

              $this->nmgp_botoes['first']          = $tmpDashboardButtons['grid_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['back']           = $tmpDashboardButtons['grid_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['last']           = $tmpDashboardButtons['grid_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['forward']        = $tmpDashboardButtons['grid_navigate']  ? 'on' : 'off';
              $this->nmgp_botoes['summary']        = $tmpDashboardButtons['grid_summary']   ? 'on' : 'off';
              $this->nmgp_botoes['qsearch']        = $tmpDashboardButtons['grid_qsearch']   ? 'on' : 'off';
              $this->nmgp_botoes['dynsearch']      = $tmpDashboardButtons['grid_dynsearch'] ? 'on' : 'off';
              $this->nmgp_botoes['filter']         = $tmpDashboardButtons['grid_filter']    ? 'on' : 'off';
              $this->nmgp_botoes['sel_col']        = $tmpDashboardButtons['grid_sel_col']   ? 'on' : 'off';
              $this->nmgp_botoes['sort_col']       = $tmpDashboardButtons['grid_sort_col']  ? 'on' : 'off';
              $this->nmgp_botoes['goto']           = $tmpDashboardButtons['grid_goto']      ? 'on' : 'off';
              $this->nmgp_botoes['qtline']         = $tmpDashboardButtons['grid_lineqty']   ? 'on' : 'off';
              $this->nmgp_botoes['navpage']        = $tmpDashboardButtons['grid_navpage']   ? 'on' : 'off';
              $this->nmgp_botoes['pdf']            = $tmpDashboardButtons['grid_pdf']       ? 'on' : 'off';
              $this->nmgp_botoes['xls']            = $tmpDashboardButtons['grid_xls']       ? 'on' : 'off';
              $this->nmgp_botoes['xml']            = $tmpDashboardButtons['grid_xml']       ? 'on' : 'off';
              $this->nmgp_botoes['json']           = $tmpDashboardButtons['grid_json']      ? 'on' : 'off';
              $this->nmgp_botoes['csv']            = $tmpDashboardButtons['grid_csv']       ? 'on' : 'off';
              $this->nmgp_botoes['rtf']            = $tmpDashboardButtons['grid_rtf']       ? 'on' : 'off';
              $this->nmgp_botoes['word']           = $tmpDashboardButtons['grid_word']      ? 'on' : 'off';
              $this->nmgp_botoes['print']          = $tmpDashboardButtons['grid_print']     ? 'on' : 'off';
              $this->nmgp_botoes['chart_conf']     = $tmpDashboardButtons['chart_conf']     ? 'on' : 'off';
              $this->nmgp_botoes['chart_settings'] = $tmpDashboardButtons['chart_settings'] ? 'on' : 'off';
              $this->nmgp_botoes['groupby']        = $tmpDashboardButtons['sel_groupby']    ? 'on' : 'off';
              $this->nmgp_botoes['chart_detail']   = $tmpDashboardButtons['chart_detail']   ? 'on' : 'off';
              $this->nmgp_botoes['new']            = $tmpDashboardButtons['grid_new']       ? 'on' : 'off';
              $this->nmgp_botoes['reload']         = $tmpDashboardButtons['grid_reload']    ? 'on' : 'off';
          }
      }

   if ($this->Ini->Embutida_iframe) {
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['sub_cons_iframe_btns'] as $BTN => $BTN_opc) {
           $this->nmgp_botoes[$BTN] = $BTN_opc;
       }
   }
      if (isset($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_ventas']['btn_display']) && !empty($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_ventas']['btn_display']))
      {
          foreach ($_SESSION['scriptcase']['sc_apl_conf']['grid_resumen_ventas']['btn_display'] as $NM_cada_btn => $NM_cada_opc)
          {
              $this->nmgp_botoes[$NM_cada_btn] = $NM_cada_opc;
          }
      }
   }

   //---- 
   function resumo_export()
   { 
      $this->NM_export = true;
      $this->monta_resumo();
   } 

    function generateRatingSummarizationJsCss()
    {
        $html = $this->generateRatingSummarizationBreakdownJs();
        $html .= $this->generateRatingSummarizationBarCss();
        return $html;
    }

    function generateRatingSummarizationBreakdownJs()
    {
        $html = <<<SCEOT
<script>
$(function() {
    ratingBreakdownDisplay();
});
function ratingBreakdownDisplay()
{
    $('.sc-rating-breakdown-trigger').on('mouseover', function() {
        let thisId = $(this).data('breakdownId');
        sc_position($(this), $('#sc-breakdown-' + thisId));
    }).on('mouseout', function() {
        let thisId = \$(this).data('breakdownId');
        $('#sc-breakdown-' + thisId).hide();
    });
}
</script>

SCEOT;
        return $html;
    }

    function generateRatingSummarizationBarCss()
    {
        $html = <<<SCEOT
<style>
</style>

SCEOT;
        return $html;
    }

	function generateChartImages() {
		require_once $this->Ini->path_aplicacao . $this->Ini->Apl_grafico;
		$this->Graf         = new grid_resumen_ventas_grafico();
		$this->Graf->Db     = $this->Db;
		$this->Graf->Erro   = $this->Erro;
		$this->Graf->Ini    = $this->Ini;
		$this->Graf->Lookup = $this->Lookup;

		$chartList  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_charts'];
		$chartFiles = array();

		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['phantomjs_export_process'] = true;
		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_step']     = 'image';
		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_count']    = 0;
		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_total']    = 0;

		foreach ($chartList as $chartKey => $chartData) {
			if ('C|' != substr($chartKey, 0, 2)) {
				continue;
			}

			$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_total']++;
		}

		foreach ($chartList as $chartKey => $chartData) {
			if ('C|' != substr($chartKey, 0, 2)) {
				continue;
			}

			$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['phantomjs_export_file'] = '';
			$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_count']++;

			$this->writeProgressFile();

			$this->Graf->generateChartImage($chartKey);

			if ('' != $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['phantomjs_export_file']) {
				$chartFiles[] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['phantomjs_export_file'];
			}
		}

		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['phantomjs_export_process'] = false;

		return $chartFiles;
	} // generateChartImages

	function zipChartImages($password = '') {
		$chartImages = $this->generateChartImages();

		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_step'] = 'zip';

		$this->writeProgressFile();

		$zipFile = $this->zipFileList($chartImages, $password);

		$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_step'] = 'end';

		$this->writeProgressFile();

		return $zipFile;
	}

	function zipFileList($fileList, $password = '') {
		$tempDir     = $this->Ini->root . $_SESSION['scriptcase']['grid_resumen_ventas']['glo_nm_path_imag_temp'] . '/';
		$zipFile     = 'sc_zip_' . md5(microtime() . rand(1, 1000) . session_id()) . '.zip';
		$zipFileFull = $this->zipProtectFileName($tempDir . $zipFile);

		if ('' != $password) {
			if (@is_file($tempDir . $zipFile)) {
				@unlink($tempDir . $zipFile);
			}

			$filename     = array_shift($fileList);
			$filenameFull = $this->zipProtectFileName($tempDir . $filename);

			if (FALSE !== strpos(strtolower(php_uname()), 'windows')) {
				chdir("{$this->Ini->path_third}/zip/windows");
				$zipCommand = "zip.exe -P -j {$password} {$zipFileFull} {$filenameFull}";
			}
			elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) {
				if (FALSE !== strpos(strtolower(php_uname()), 'i686')) {
					chdir("{$this->Ini->path_third}/zip/linux-i386/bin");
				}
				else {
					chdir("{$this->Ini->path_third}/zip/linux-amd64/bin");
				}
				$zipCommand = "./7za -p{$password} a {$zipFileFull} {$filenameFull}";
			}
			elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin')) {
				chdir("{$this->Ini->path_third}/zip/mac/bin");
				$zipCommand = "./7za -p{$password} a {$zipFileFull} {$filenameFull}";
			}

			if (!empty($zipCommand)) {
				exec($zipCommand);
			}

			while (!empty($fileList)) {
				$filename     = array_shift($fileList);
				$filenameFull = $this->zipProtectFileName($tempDir . $filename);

				if (FALSE !== strpos(strtolower(php_uname()), 'windows')) {
					chdir("{$this->Ini->path_third}/zip/windows");
					$zipCommand = "zip.exe -P -j -u {$password} {$zipFileFull} {$filenameFull}";
				}
				elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) {
					if (FALSE !== strpos(strtolower(php_uname()), 'i686')) {
						chdir("{$this->Ini->path_third}/zip/linux-i386/bin");
					}
					else {
						chdir("{$this->Ini->path_third}/zip/linux-amd64/bin");
					}
					$zipCommand = "./7za -p{$password} a {$zipFileFull} {$filenameFull}";
				}
				elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin')) {
					chdir("{$this->Ini->path_third}/zip/mac/bin");
					$zipCommand = "./7za -p{$password} a {$zipFileFull} {$filenameFull}";
				}

				if (!empty($zipCommand)) {
					exec($zipCommand);
				}
			}
		}
		else {
			require_once $this->Ini->path_third . '/zipfile/zipfile.php';

			$tempDir = $this->Ini->root . $_SESSION['scriptcase']['grid_resumen_ventas']['glo_nm_path_imag_temp'] . '/';
			$zipFile = 'sc_zip_' . md5(microtime() . rand(1, 1000) . session_id()) . '.zip';

			$zipHandler = new zipfile();
			$zipHandler->set_file($tempDir . $zipFile);

			foreach ($fileList as $chartImageName) {
				$chartImageFile = $tempDir . $chartImageName;

				$zipHandler->sc_zip_all($chartImageFile);
			}

			$zipHandler->file();
		}

		return $zipFile;
	}

	function zipProtectFileName($filename) {
		return false !== strpos($filename, ' ') ? "\"{$filename}\"" : $filename;
	}

	function writeProgressFile() {
		if ('image' == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_step']) {
			$progress = floor($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_count'] * 100 / ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_total'] + 1));
			$content  = $this->Ini->Nm_lang['lang_pdff_pcht'] . ": {$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_count']}/{$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_total']}###$progress";

			$content  = $_SESSION['scriptcase']['charset'] != 'UTF-8' ? sc_convert_encoding($content, 'UTF-8', $_SESSION['scriptcase']['charset']) : $content;
		}
		elseif ('zip' == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_step']) {
			$progress = floor($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_count'] * 100 / ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_total'] + 1));
			$content  = $this->Ini->Nm_lang['lang_chrt_zip_img'] . "###$progress";

			$content  = $_SESSION['scriptcase']['charset'] != 'UTF-8' ? sc_convert_encoding($content, 'UTF-8', $_SESSION['scriptcase']['charset']) : $content;
		}
		elseif ('end' == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_step']) {
			$content = "ok###100";
		}
		else {
			$content = "init###0";
		}

		$f = @fopen("{$this->Ini->root}{$_SESSION['scriptcase']['grid_resumen_ventas']['glo_nm_path_imag_temp']}/{$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['export_progress_file']}", 'w');
		fwrite($f, $content);
		fclose($f);
	}

   function monta_resumo($b_export = false)
   {
       global $nm_saida;

       $this->initializeButtons();

      $this->NM_res_sem_reg = false;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['orig_pesq'] = "resumo";
      $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_orig'];
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_pesq'];
      $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_pesq_filtro'];
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']))
     { 
         $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca'];
         if ($_SESSION['scriptcase']['charset'] != "UTF-8")
         {
             $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
       $this->fac_fecha = (isset($Busca_temp['fac_fecha'])) ? $Busca_temp['fac_fecha'] : ""; 
       $tmp_pos = (is_string($this->fac_fecha)) ? strpos($this->fac_fecha, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->fac_fecha))
       {
           $this->fac_fecha = substr($this->fac_fecha, 0, $tmp_pos);
       }
       $fac_fecha_2 = (isset($Busca_temp['fac_fecha_input_2'])) ? $Busca_temp['fac_fecha_input_2'] : ""; 
       $this->fac_fecha_2 = $fac_fecha_2; 
       $this->est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
       $tmp_pos = (is_string($this->est_codigo)) ? strpos($this->est_codigo, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->est_codigo))
       {
           $this->est_codigo = substr($this->est_codigo, 0, $tmp_pos);
       }
       $this->pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
       $tmp_pos = (is_string($this->pen_serie)) ? strpos($this->pen_serie, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->pen_serie))
       {
           $this->pen_serie = substr($this->pen_serie, 0, $tmp_pos);
       }
       $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
       $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->cl_identificacion))
       {
           $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
       }
       $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
       $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->cl_nombre))
       {
           $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
       }
       $this->fac_usuario = (isset($Busca_temp['fac_usuario'])) ? $Busca_temp['fac_usuario'] : ""; 
       $tmp_pos = (is_string($this->fac_usuario)) ? strpos($this->fac_usuario, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->fac_usuario))
       {
           $this->fac_usuario = substr($this->fac_usuario, 0, $tmp_pos);
       }
       $this->fac_socio_transportista = (isset($Busca_temp['fac_socio_transportista'])) ? $Busca_temp['fac_socio_transportista'] : ""; 
       $tmp_pos = (is_string($this->fac_socio_transportista)) ? strpos($this->fac_socio_transportista, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->fac_socio_transportista))
       {
           $this->fac_socio_transportista = substr($this->fac_socio_transportista, 0, $tmp_pos);
       }
     } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] = "";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "fac_fecha?#?" . "" . $this->Ini->Nm_lang['lang_fecha'] . "" . "?@?";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "est_codigo?#?" . "" . $this->Ini->Nm_lang['lang_establecimiento'] . "" . "?@?";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "pen_serie?#?" . "" . $this->Ini->Nm_lang['lang_punto_emision'] . "" . "?@?";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "cl_identificacion?#?" . "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "" . "?@?";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "cl_nombre?#?" . "" . $this->Ini->Nm_lang['lang_cliente'] . "" . "?@?";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "fac_usuario?#?" . "" . $this->Ini->Nm_lang['lang_usuario'] . " Factura" . "?@?";
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'] .= "fac_socio_transportista?#?" . "" . $this->Ini->Nm_lang['lang_socio'] . "" . "?@?";
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_search_add']))
      {
          $this->monta_css();
          $nmgp_tab_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'];
          if (!empty($nmgp_tab_label))
          {
             $nm_tab_campos = explode("?@?", $nmgp_tab_label);
             $nmgp_tab_label = array();
             foreach ($nm_tab_campos as $cada_campo)
             {
                 $parte_campo = explode("?#?", $cada_campo);
                 $nmgp_tab_label[$parte_campo[0]] = $parte_campo[1];
             }
          }
          $Seq_grid      = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_search_add']['seq'];
          $Cmp_grid      = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_search_add']['cmp'];
          $Def_grid      = array('descr' => $nmgp_tab_label[$Cmp_grid], 'hint' => $nmgp_tab_label[$Cmp_grid]);
          $Lin_grid_add  = $this->grid_search_tag_ini($Cmp_grid, $Def_grid, $Seq_grid);
          $NM_func_grid_add = "grid_search_" . $Cmp_grid;
          $Lin_grid_add .= $this->$NM_func_grid_add($Seq_grid, 'S', '', array(), $nmgp_tab_label[$Cmp_grid]);
          $Lin_grid_add .= $this->grid_search_tag_end();
          $this->Arr_result = array();
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $this->Arr_result['grid_add'][] = NM_charset_to_utf8($Lin_grid_add);
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_search_add']);
          exit;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dyn_search_aut_comp']))
      {
          $Cmp_select2 = array("cl_identificacion","cl_nombre");
          ob_start();
          $NM_func_aut_comp = "lookup_ajax_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dyn_search_aut_comp']['cmp'];
          $parm = ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($_GET['q'])) ? sc_convert_encoding($_GET['q'], $_SESSION['scriptcase']['charset'], "UTF-8") : $_GET['q'];
          $nmgp_def_dados = $this->$NM_func_aut_comp($parm);
          ob_end_clean();
          $count_aut_comp = 0;
          $resp_aut_comp  = array();
          foreach ($nmgp_def_dados as $Ind => $Lista)
          {
             if (is_array($Lista))
             {
                 foreach ($Lista as $Cod => $Valor)
                 {
                     if ($_GET['cod_desc'] == "S")
                     {
                         $Valor = $Cod . " - " . $Valor;
                     }
                     if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dyn_search_aut_comp']['cmp'], $Cmp_select2))
                     {
                         $resp_aut_comp[] = array('text' => $Valor , 'id' => $Cod);
                     }
                     else
                     {
                         $resp_aut_comp[] = array('label' => $Valor , 'value' => $Cod);
                     }
                     $count_aut_comp++;
                 }
             }
             if ($count_aut_comp == $_GET['max_itens'])
             {
                 break;
             }
          }
          $oJson = new Services_JSON();
          if (in_array($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dyn_search_aut_comp']['cmp'], $Cmp_select2))
          {
              echo $oJson->encode(array('results' => $resp_aut_comp));
          }
          else
          {
              echo $oJson->encode($resp_aut_comp);
          }
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dyn_search_aut_comp']);
          exit;
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf")
      {
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_resumo']);
      }
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['res_hrz']))
      { 
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['res_hrz'] = $this->NM_totaliz_hrz;
      } 
      $this->NM_totaliz_hrz = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['res_hrz'];
      if (isset($_SESSION['scriptcase']['sc_aba_iframe']) && !$this->NM_export)
      {
          foreach ($_SESSION['scriptcase']['sc_aba_iframe'] as $aba => $apls_aba)
          {
              if (in_array("grid_resumen_ventas", $apls_aba))
              {
                  $this->aba_iframe = true;
                  break;
              }
          }
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['iframe_menu'] && !$this->NM_export && (!isset($_SESSION['scriptcase']['menu_mobile']) || empty($_SESSION['scriptcase']['menu_mobile'])))
      {
          $this->aba_iframe = true;
      }
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['array_graf_pdf'] = array();
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf")
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_resumo'] = "";
      }
      $this->inicializa_vars();
      $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Ind_Groupby'];
      $this->Total->$Gb_geral(false, $this->NM_export);
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['contr_array_resumo'] == "OK" && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['contr_total_geral'] == "OK")
      {
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
          {
              $Arr_tot_name = "array_total_" . $cmp_gb;
              $this->$Arr_tot_name = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total'][$cmp_gb];
          }
      }
      else
      {
          $this->array_total_fac_fecha = array();
          $this->array_total_fac_tipo_comprobante = array();
          $this->array_total_est_codigo = array();
          $this->array_total_pen_serie = array();
          $this->array_total_cl_identificacion = array();
          $this->array_total_cl_nombre = array();
          $this->array_total_fac_usuario = array();
          $this->array_total_fac_socio_transportista = array();
          $this->totaliza();
          $this->finaliza_arrays();
      }
      $this->array_total_geral = array();
      $this->array_total_geral[0] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][2];
      $this->array_total_geral[1] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][7];
      $this->array_total_geral[2] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][8];
      $this->array_total_geral[3] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][9];
      $this->array_total_geral[4] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][10];
      $this->array_total_geral[5] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][3];
      $this->array_total_geral[6] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][11];
      $this->array_total_geral[7] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][4];
      $this->array_total_geral[8] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][12];
      $this->array_total_geral[9] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][5];
      $this->array_total_geral[10] = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][6];
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][1]) || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['tot_geral'][1] == 0)
      {
          $this->NM_res_sem_reg = true;
      }
      $this->resumo_init();
      if ($this->NM_res_sem_reg)
      {
          $this->resumo_sem_reg();
          $this->resumo_final();
          return;
      }
      $this->completeMatrix();
      $this->buildMatrix();
      if ($b_export)
      {
          return;
      }
      if (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == 'print' || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == 'pdf') && strpos(" " . $this->Ini->SC_module_export, "resume") === false)
      { }
      else
      {
          $this->drawMatrix();
      }
      $this->resumo_final();
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['contr_label_graf'] = array();
      if (isset($this->nmgp_label_quebras) && !empty($this->nmgp_label_quebras))
      {
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['contr_label_graf'] = $this->nmgp_label_quebras;
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['fac_fecha'] = $this->array_total_fac_fecha;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['fac_tipo_comprobante'] = $this->array_total_fac_tipo_comprobante;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['est_codigo'] = $this->array_total_est_codigo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['pen_serie'] = $this->array_total_pen_serie;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['cl_identificacion'] = $this->array_total_cl_identificacion;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['cl_nombre'] = $this->array_total_cl_nombre;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['fac_usuario'] = $this->array_total_fac_usuario;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total']['fac_socio_transportista'] = $this->array_total_fac_socio_transportista;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['contr_array_resumo'] = "OK";
   }

   function completeMatrix()
   {
       $this->comp_align       = array();
       $this->comp_display     = array();
       $this->comp_field       = array();
       $this->comp_field_nm    = array();
       $this->comp_field_nm_rv = array();
       $this->comp_fill        = array();
       $this->comp_group       = array();
       $this->comp_index       = array();
       $this->comp_label       = array();
       $this->comp_links_fl    = array();
       $this->comp_links_gr    = array();
       $this->comp_order       = array();
       $this->comp_order_start = array();
       $this->comp_order_col   = '';
       $this->comp_order_level = '';
       $this->comp_order_sort  = '';
       $this->comp_sum         = array();
       $this->comp_sum_order   = array();
       $this->comp_sum_display = array();
       $this->comp_sum_dummy   = array();
       $this->comp_sum_fn      = array();
       $this->comp_sum_lnk     = array();
       $this->comp_sum_css     = array();
       $this->comp_sum_nm      = array();
       $this->comp_sum_fill_0  = false;
       $this->comp_tabular     = true;
       $this->comp_tab_hover   = false;
       $this->comp_tab_seq     = false ;
       $this->comp_tab_extend  = true;
       $this->comp_tab_label   = true;
       $this->comp_totals_a    = array();
       $this->comp_totals_al   = array();
       $this->comp_totals_g    = array();
       $this->comp_totals_x    = array();
       $this->comp_totals_y    = array();
       $this->comp_x_axys      = array();
       $this->comp_y_axys      = array();

       $this->build_total_row  = array();
       $this->build_col_count  = 0;

       $this->show_totals_x    = true;
       $this->show_totals_y    = true;
       //-----
       if ($this->NM_export && isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['json_use_label']) && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['json_use_label'])
       {
          $Lab_fac_fecha = "fac_fecha";
          $Lab_fac_tipo_comprobante = "fac_tipo_comprobante";
          $Lab_est_codigo = "est_codigo";
          $Lab_pen_serie = "pen_serie";
          $Lab_cl_identificacion = "cl_identificacion";
          $Lab_cl_nombre = "cl_nombre";
          $Lab_fac_usuario = "fac_usuario";
          $Lab_fac_socio_transportista = "fac_socio_transportista";
       }
       else
       {
       $Lab_fac_fecha = "" . $this->Ini->Nm_lang['lang_fecha'] . "";
       $Lab_fac_tipo_comprobante = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . "";
       $Lab_est_codigo = "" . $this->Ini->Nm_lang['lang_establecimiento'] . "";
       $Lab_pen_serie = "" . $this->Ini->Nm_lang['lang_punto_emision'] . "";
       $Lab_cl_identificacion = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . "";
       $Lab_cl_nombre = "" . $this->Ini->Nm_lang['lang_cliente'] . "";
       $Lab_fac_usuario = "" . $this->Ini->Nm_lang['lang_usuario'] . "";
       $Lab_fac_socio_transportista = "" . $this->Ini->Nm_lang['lang_socio'] . "";
       }
       $prep_field = array();
       $prep_field['fac_fecha'] = $Lab_fac_fecha;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_fecha'] = $Lab_fac_fecha; 
       $prep_field['fac_tipo_comprobante'] = $Lab_fac_tipo_comprobante;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_tipo_comprobante'] = $Lab_fac_tipo_comprobante; 
       $prep_field['est_codigo'] = $Lab_est_codigo;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['est_codigo'] = $Lab_est_codigo; 
       $prep_field['pen_serie'] = $Lab_pen_serie;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['pen_serie'] = $Lab_pen_serie; 
       $prep_field['cl_identificacion'] = $Lab_cl_identificacion;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_identificacion'] = $Lab_cl_identificacion; 
       $prep_field['cl_nombre'] = $Lab_cl_nombre;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_nombre'] = $Lab_cl_nombre; 
       $prep_field['fac_usuario'] = $Lab_fac_usuario;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_usuario'] = $Lab_fac_usuario; 
       $prep_field['fac_socio_transportista'] = $Lab_fac_socio_transportista;
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_socio_transportista'] = $Lab_fac_socio_transportista; 
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb .= ($Str_gb == "") ? "" : ",";
          $Str_gb .= '"' . $prep_field[$cmp_gb] . '"';
       }
       eval ("\$this->comp_field = array(" . $Str_gb . ");");;

       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_fecha']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_tipo_comprobante']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_tipo_comprobante'] = "" . $this->Ini->Nm_lang['lang_tipo_comprobante'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_identificacion']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_identificacion'] = "" . $this->Ini->Nm_lang['lang_lot_identificacion'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_nombre']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_nombre'] = "" . $this->Ini->Nm_lang['lang_cliente'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['est_codigo']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['est_codigo'] = "" . $this->Ini->Nm_lang['lang_establecimiento'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['pen_serie']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['pen_serie'] = "" . $this->Ini->Nm_lang['lang_punto_emision'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_secuencial']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_secuencial'] = "" . $this->Ini->Nm_lang['lang_secuencial'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal'] = "" . $this->Ini->Nm_lang['lang_subtotal'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_total_descuento']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_total_descuento'] = "" . $this->Ini->Nm_lang['lang_descuento'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_valor_iva']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_valor_iva'] = "" . $this->Ini->Nm_lang['lang_iva'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_propina']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_propina'] = "" . $this->Ini->Nm_lang['lang_propina'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_total']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_total'] = "" . $this->Ini->Nm_lang['lang_othr_chrt_totl'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_iva']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_iva'] = "" . $this->Ini->Nm_lang['lang_subtotal_iva'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_cero']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_cero'] = "" . $this->Ini->Nm_lang['lang_subtotal_cero'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_no_objeto']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_no_objeto'] = "" . $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_excento']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_subtotal_excento'] = "" . $this->Ini->Nm_lang['lang_subtotal_exento'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_valor_ice']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_valor_ice'] = "" . $this->Ini->Nm_lang['lang_ice'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_valor_irbpnr']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_valor_irbpnr'] = "" . $this->Ini->Nm_lang['lang_irbpnr'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_comentario']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_comentario'] = "" . $this->Ini->Nm_lang['lang_comentario'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_usuario']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_usuario'] = "" . $this->Ini->Nm_lang['lang_usuario'] . " Factura"; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_autorizacion']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_autorizacion'] = "" . $this->Ini->Nm_lang['lang_autorizacion'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_socio_transportista']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_socio_transportista'] = "" . $this->Ini->Nm_lang['lang_socio'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_numero']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_numero'] = "" . $this->Ini->Nm_lang['lang_id'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_ambiente']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_ambiente'] = "" . $this->Ini->Nm_lang['lang_tipo_ambiente'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fecha']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fecha'] = "" . $this->Ini->Nm_lang['lang_fecha'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['est_direccion']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['est_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_tipo_identificacion']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_tipo_identificacion'] = "" . $this->Ini->Nm_lang['lang_tipo_identificacion'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_direccion']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_direccion'] = "" . $this->Ini->Nm_lang['lang_direccion'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_telefono']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_telefono'] = "" . $this->Ini->Nm_lang['lang_lot_telefono'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_email']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_email'] = "" . $this->Ini->Nm_lang['lang_email'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_guia_remision']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_guia_remision'] = "" . $this->Ini->Nm_lang['lang_guia_remision'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_estado_sri']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_estado_sri'] = "" . $this->Ini->Nm_lang['lang_estado_sri'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_empresa']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_empresa'] = "" . $this->Ini->Nm_lang['lang_empresa'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_error_sri']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_error_sri'] = "" . $this->Ini->Nm_lang['lang_error'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_id']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['cl_id'] = "" . $this->Ini->Nm_lang['lang_cliente'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_estado']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_estado'] = "" . $this->Ini->Nm_lang['lang_estado'] . ""; 
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_asiento']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['labels']['fac_asiento'] = "Fac Asiento"; 
       }
       //-----
       $ix = 0;
       $this->comp_field_nm = array();
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
           $this->comp_field_nm[$cmp_gb] = $ix;
           $ix++;
       }

       $this->comp_field_nm_rv = array_flip($this->comp_field_nm);

       //-----
       $this->comp_sum = array(
           2 => "Subtotal (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           3 => "" .  $this->Ini->Nm_lang['lang_subtotal_iva'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           4 => "" .  $this->Ini->Nm_lang['lang_subtotal_cero'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           5 => "" .  $this->Ini->Nm_lang['lang_subtotal_no_objeto'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           6 => "" .  $this->Ini->Nm_lang['lang_subtotal_exento'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           7 => "Descuento (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           8 => "" .  $this->Ini->Nm_lang['lang_ice'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           9 => "Iva (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           10 => "" .  $this->Ini->Nm_lang['lang_irbpnr'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           11 => "" .  $this->Ini->Nm_lang['lang_propina'] . " (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
           12 => "Total (" .  $this->Ini->Nm_lang['lang_btns_smry_msge_sum'] . ")",
       );

       //-----
       $this->comp_sum_order = array(
           2,
           3,
           4,
           5,
           6,
           7,
           8,
           9,
           10,
           11,
           12,
       );

       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_order']['sc_free_group_by']))
       {
           foreach ($this->comp_sum as $i_sum => $l_sum)
           {
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_order']['sc_free_group_by'][] = $i_sum;
           }
       }
       else
       {
           $this->comp_sum_order = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_order']['sc_free_group_by'];
       }

       //-----
       $this->comp_sum_display = array(
           2 => true,
           3 => false,
           4 => false,
           5 => false,
           6 => false,
           7 => true,
           8 => false,
           9 => true,
           10 => false,
           11 => false,
           12 => true,
       );

           foreach ($this->comp_sum as $i_sum => $l_sum)
           {
               if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'][$i_sum]))
               {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'][$i_sum] = array('label' => $l_sum, 'display' => $this->comp_sum_display[$i_sum]);
               }
               else
               {
                   if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'][$i_sum]['label']))
                   {
                       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'][$i_sum]['label'] = $l_sum;
                   }
                   if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'][$i_sum]['display']))
                   {
                       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'][$i_sum]['display'] = $this->comp_sum_display[$i_sum];
                   }
               }
           }
           foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['summarizing_fields_display']['sc_free_group_by'] as $i_sum => $d_sum)
           {
               $this->comp_sum_display[$i_sum] = $d_sum['display'];
           }

       //-----
       $this->comp_sum_dummy = array(
           0,
           0,
           0,
           0,
           0,
           0,
           0,
           0,
           0,
           0,
           0,
           0,
       );

       //-----
       $this->comp_sum_fn = array(
           2 => "S",
           3 => "S",
           4 => "S",
           5 => "S",
           6 => "S",
           7 => "S",
           8 => "S",
           9 => "S",
           10 => "S",
           11 => "S",
           12 => "S",
       );

       //-----
       $this->comp_sum_lnk = array(
           2 => array('field' => "fac_subtotal", 'show' => true),
           3 => array('field' => "fac_subtotal_iva", 'show' => true),
           4 => array('field' => "fac_subtotal_cero", 'show' => true),
           5 => array('field' => "fac_subtotal_no_objeto", 'show' => true),
           6 => array('field' => "fac_subtotal_excento", 'show' => true),
           7 => array('field' => "fac_total_descuento", 'show' => true),
           8 => array('field' => "fac_valor_ice", 'show' => true),
           9 => array('field' => "fac_valor_iva", 'show' => true),
           10 => array('field' => "fac_valor_irbpnr", 'show' => true),
           11 => array('field' => "fac_propina", 'show' => true),
           12 => array('field' => "fac_total", 'show' => true),
       );

       //-----
       $this->comp_sum_css = array(
           2 => "css_fac_subtotal_sum",
           3 => "css_fac_subtotal_iva_sum",
           4 => "css_fac_subtotal_cero_sum",
           5 => "css_fac_subtotal_no_objeto_sum",
           6 => "css_fac_subtotal_excento_sum",
           7 => "css_fac_total_descuento_sum",
           8 => "css_fac_valor_ice_sum",
           9 => "css_fac_valor_iva_sum",
           10 => "css_fac_valor_irbpnr_sum",
           11 => "css_fac_propina_sum",
           12 => "css_fac_total_sum",
       );

       //-----
       $this->comp_sum_nm = array(
           2 => "fac_subtotal_sum",
           3 => "fac_subtotal_iva_sum",
           4 => "fac_subtotal_cero_sum",
           5 => "fac_subtotal_no_objeto_sum",
           6 => "fac_subtotal_excento_sum",
           7 => "fac_total_descuento_sum",
           8 => "fac_valor_ice_sum",
           9 => "fac_valor_iva_sum",
           10 => "fac_valor_irbpnr_sum",
           11 => "fac_propina_sum",
           12 => "fac_total_sum",
       );

       //-----
      $Str_gb   = "";
      $Arr_gb   = array();
      $Arr_name = array();
      $Arr_lab  = array();
      $Control  = "";
      $Ctr_lab  = "";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
      {
          $Arr_gb[]   = $cmp_gb;
          $Arr_name[] = "array_total_" . $cmp_gb . $Control;
          $Arr_lab[]  = $Ctr_lab;
          $Control   .= "[\$campo_" . $cmp_gb . "]";
          $Ctr_lab   .= "[\$dados_" . $cmp_gb . "[13]]";
      }
      for ($ix = 0; $ix < sizeof($Arr_gb); $ix++)
      {
          $Str_gb .= "foreach (\$this->" . $Arr_name[$ix] . " as \$campo_" . $Arr_gb[$ix] . " => \$dados_" . $Arr_gb[$ix] . ")";
          $Str_gb .= "{";
          $Str_gb .= "    if (!isset(\$this->comp_label[" . $ix . "]" . $Arr_lab[$ix] . ") || !in_array(\$campo_" . $Arr_gb[$ix] . ", \$this->comp_label[" . $ix . "]" . $Arr_lab[$ix] . ", true)) {";
          $Str_gb .= "         \$this->comp_index[" . $ix . "][\$dados_" . $Arr_gb[$ix] . "[13] ] = \$dados_" . $Arr_gb[$ix] . "[12];";
          $Str_gb .= "         \$this->comp_label[" . $ix . "]" . $Arr_lab[$ix] . "[ \$dados_" . $Arr_gb[$ix] . "[13] ] = \$dados_" . $Arr_gb[$ix] . "[12];";
          $Str_gb .= "    }";
      }
      for ($ix = 0; $ix < sizeof($Arr_gb); $ix++)
      {
          $Str_gb .= "}";
      }
      eval ($Str_gb);

       //-----
       $x = 0;
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb .= ($x == 0) ? $x : ", " . $x;
          $x++;
       }
       eval ("\$this->comp_y_axys = array(" . $Str_gb . ");");;
       $this->comp_x_axys = array();

       $Arr_parms = array();
       $Arr_parms['fac_fecha']['alin'] = "''";
       $Arr_parms['fac_fecha']['link'] = "S";
       $Arr_parms['fac_tipo_comprobante']['alin'] = "''";
       $Arr_parms['fac_tipo_comprobante']['link'] = "S";
       $Arr_parms['est_codigo']['alin'] = "''";
       $Arr_parms['est_codigo']['link'] = "S";
       $Arr_parms['pen_serie']['alin'] = "''";
       $Arr_parms['pen_serie']['link'] = "S";
       $Arr_parms['cl_identificacion']['alin'] = "''";
       $Arr_parms['cl_identificacion']['link'] = "S";
       $Arr_parms['cl_nombre']['alin'] = "''";
       $Arr_parms['cl_nombre']['link'] = "S";
       $Arr_parms['fac_usuario']['alin'] = "''";
       $Arr_parms['fac_usuario']['link'] = "S";
       $Arr_parms['fac_socio_transportista']['alin'] = "''";
       $Arr_parms['fac_socio_transportista']['link'] = "S";
       $Arr_parms['fac_fecha']['fill'] = "true";
       $Arr_parms['fac_fecha']['order'] = "value";
       $Arr_parms['fac_fecha']['order_start'] = 'asc';
       $Arr_parms['fac_fecha']['order_invert'] = 'false';
       $Arr_parms['fac_fecha']['order_enabled'] = 'true';
       $Arr_parms['fac_fecha']['order_datatype'] = 'date';
       $Arr_parms['fac_fecha']['rating_function'] = '';
       $Arr_parms['fac_tipo_comprobante']['fill'] = "true";
       $Arr_parms['fac_tipo_comprobante']['order'] = "label";
       $Arr_parms['fac_tipo_comprobante']['order_start'] = 'asc';
       $Arr_parms['fac_tipo_comprobante']['order_invert'] = 'false';
       $Arr_parms['fac_tipo_comprobante']['order_enabled'] = 'true';
       $Arr_parms['fac_tipo_comprobante']['order_datatype'] = 'varchar';
       $Arr_parms['fac_tipo_comprobante']['rating_function'] = '';
       $Arr_parms['est_codigo']['fill'] = "true";
       $Arr_parms['est_codigo']['order'] = "label";
       $Arr_parms['est_codigo']['order_start'] = 'asc';
       $Arr_parms['est_codigo']['order_invert'] = 'false';
       $Arr_parms['est_codigo']['order_enabled'] = 'true';
       $Arr_parms['est_codigo']['order_datatype'] = 'varchar';
       $Arr_parms['est_codigo']['rating_function'] = '';
       $Arr_parms['pen_serie']['fill'] = "true";
       $Arr_parms['pen_serie']['order'] = "label";
       $Arr_parms['pen_serie']['order_start'] = 'asc';
       $Arr_parms['pen_serie']['order_invert'] = 'false';
       $Arr_parms['pen_serie']['order_enabled'] = 'true';
       $Arr_parms['pen_serie']['order_datatype'] = 'varchar';
       $Arr_parms['pen_serie']['rating_function'] = '';
       $Arr_parms['cl_identificacion']['fill'] = "true";
       $Arr_parms['cl_identificacion']['order'] = "label";
       $Arr_parms['cl_identificacion']['order_start'] = 'asc';
       $Arr_parms['cl_identificacion']['order_invert'] = 'false';
       $Arr_parms['cl_identificacion']['order_enabled'] = 'true';
       $Arr_parms['cl_identificacion']['order_datatype'] = 'varchar';
       $Arr_parms['cl_identificacion']['rating_function'] = '';
       $Arr_parms['cl_nombre']['fill'] = "true";
       $Arr_parms['cl_nombre']['order'] = "label";
       $Arr_parms['cl_nombre']['order_start'] = 'asc';
       $Arr_parms['cl_nombre']['order_invert'] = 'false';
       $Arr_parms['cl_nombre']['order_enabled'] = 'true';
       $Arr_parms['cl_nombre']['order_datatype'] = 'varchar';
       $Arr_parms['cl_nombre']['rating_function'] = '';
       $Arr_parms['fac_usuario']['fill'] = "true";
       $Arr_parms['fac_usuario']['order'] = "label";
       $Arr_parms['fac_usuario']['order_start'] = 'asc';
       $Arr_parms['fac_usuario']['order_invert'] = 'false';
       $Arr_parms['fac_usuario']['order_enabled'] = 'true';
       $Arr_parms['fac_usuario']['order_datatype'] = 'varchar';
       $Arr_parms['fac_usuario']['rating_function'] = '';
       $Arr_parms['fac_socio_transportista']['fill'] = "true";
       $Arr_parms['fac_socio_transportista']['order'] = "label";
       $Arr_parms['fac_socio_transportista']['order_start'] = 'asc';
       $Arr_parms['fac_socio_transportista']['order_invert'] = 'false';
       $Arr_parms['fac_socio_transportista']['order_enabled'] = 'true';
       $Arr_parms['fac_socio_transportista']['order_datatype'] = 'varchar';
       $Arr_parms['fac_socio_transportista']['rating_function'] = '';
       //-----
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb .= ($Str_gb == "") ? "" : ", ";
          $Str_gb .= $Arr_parms[$cmp_gb]['alin'];
       }
       eval ("\$this->comp_align = array(" . $Str_gb . ");");;

       //-----
       $x = 0;
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
           if ($Arr_parms[$cmp_gb]['link'] == "S")
           {
              $Str_gb .= ($Str_gb == "") ? $x : ", " . $x;
           }
          $x++;
       }
       eval ("\$this->comp_links_gr = array(" . $Str_gb . ");");;

       //-----
       $prep_links_fl = array();
       $prep_links_fl['fac_fecha'] = array(0 => 'fac_fecha', 1 => '@aspass@');
       $prep_links_fl['fac_tipo_comprobante'] = array(0 => 'fac_tipo_comprobante', 1 => '@aspass@');
       $prep_links_fl['est_codigo'] = array(0 => 'est_codigo', 1 => '@aspass@');
       $prep_links_fl['pen_serie'] = array(0 => 'pen_serie', 1 => '@aspass@');
       $prep_links_fl['cl_identificacion'] = array(0 => 'cl_identificacion', 1 => '@aspass@');
       $prep_links_fl['cl_nombre'] = array(0 => 'cl_nombre', 1 => '@aspass@');
       $prep_links_fl['fac_usuario'] = array(0 => 'fac_usuario', 1 => '@aspass@');
       $prep_links_fl['fac_socio_transportista'] = array(0 => 'fac_socio_transportista', 1 => '@aspass@');
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $col_sql)
       {
           if (isset($prep_links_fl[$cmp_gb]))
           {
              $Str_gb .= "array('name' => '" . $prep_links_fl[$cmp_gb][0] . "', 'prot' => '" . $prep_links_fl[$cmp_gb][1] . "'),";
           }
       }
       eval ("\$this->comp_links_fl = array(" . $Str_gb . ");");;

       //-----
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb .= ($Str_gb == "") ? "" : ", ";
          $Str_gb .= "\"" . $Arr_parms[$cmp_gb]['rating_function'] . "\"";
       }
       eval("\$this->comp_rating_gby = array(" . $Str_gb . ");");

       //-----
       $this->comp_rating_sum = array(
           1 => "",
           2 => "",
           3 => "",
           4 => "",
           5 => "",
           6 => "",
           7 => "",
           8 => "",
           9 => "",
           10 => "",
           11 => "",
       );

       //-----
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb .= ($Str_gb == "") ? "" : ", ";
          $Str_gb .= $Arr_parms[$cmp_gb]['fill'];
       }
       eval ("\$this->comp_fill = array(" . $Str_gb . ");");;

       //-----
       $x = 0;
       $Str_gb = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb .= ($Str_gb == "") ? $x : ", " . $x;
          $Str_gb .= " => 'label'";
          $x++;
       }
       eval ("\$this->comp_display = array(" . $Str_gb . ");");;

       //-----
       $Str_gb  = "";
       $Str_gbs = "";
       $Str_gbi = "";
       $Str_gbe = "";
       $Str_gbdt = "";
       foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
       {
          $Str_gb  .= ($Str_gb == "") ? "" : ", ";
          $Str_gb  .= '"' . $Arr_parms[$cmp_gb]['order'] . '"';
          $Str_gbs .= ($Str_gbs == "") ? "" : ", ";
          $Str_gbs .= '"' . $Arr_parms[$cmp_gb]['order_start'] . '"';
          $Str_gbi .= ($Str_gbi == "") ? "" : ", ";
          $Str_gbi .= $Arr_parms[$cmp_gb]['order_invert'];
          $Str_gbe .= ($Str_gbe == "") ? "" : ", ";
          $Str_gbe .= $Arr_parms[$cmp_gb]['order_enabled'];
          $Str_gbdt .= ($Str_gbdt == "") ? "" : ", ";
          $Str_gbdt .= "'" . $Arr_parms[$cmp_gb]['order_datatype'] . "'";
       }
       eval ("\$this->comp_order = array(" . $Str_gb . ");");;
       eval ("\$this->comp_order_start = array(" . $Str_gbs . ");");;
       eval ("\$this->comp_order_invert = array(" . $Str_gbi . ");");;
       eval ("\$this->comp_order_enabled = array(" . $Str_gbe . ");");;
       eval ("\$this->comp_order_datatype = array(" . $Str_gbdt . ");");;

       //-----
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_group_by'] = $this->comp_field;
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_x_axys']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_x_axys'] = $this->comp_x_axys;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_y_axys']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_y_axys'] = $this->comp_y_axys;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_fill']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_fill'] = $this->comp_fill;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order'] = $this->comp_order;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_start']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_start'] = $this->comp_order_start;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular'] = $this->comp_tabular;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_hover']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_hover'] = $this->comp_tabular && $this->comp_tab_hover;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_seq']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_seq'] = $this->comp_tabular && $this->comp_tab_seq;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_label']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_label'] = $this->comp_tabular && $this->comp_tab_label;
       }

       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_col']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_col'] = 0;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_level']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_level'] = 0;
       }
       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_sort']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_sort'] = '';
       }
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'] && isset($_POST['parm']))
       { 
           $todo  = explode("*scout", $_POST['parm']);
           foreach ($todo as $param)
           {
               $cadapar = explode("*scin", $param);
               if (isset($cadapar[1])) {
                   $_POST[$cadapar[0]] = $cadapar[1];
               }
           }
        } 
       if (isset($_POST['change_sort']) && 'Y' == $_POST['change_sort'])
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_sort'] = $_POST['sort_ord'];
           if ('' == $_POST['sort_ord'])
           {
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_col']  = 0;
           }
           else
           {
               $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_col']  = $_POST['sort_col'];
           }
       }
       if (isset($_POST['change_sort']) && 'NEW' == $_POST['change_sort']) {
           for ($i = 0; $i < sizeof($this->comp_label); $i++) {
               if ($i == $_POST['sort_col']) {
                   $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_start'][$i] = $_POST['sort_ord'];
               }
           }
       }

       $this->comp_x_axys      = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_x_axys'];
       $this->comp_y_axys      = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_y_axys'];
       $this->comp_fill        = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_fill'];
       $this->comp_order       = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order'];
       $this->comp_order_start = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_start'];
       $this->comp_order_col   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_col'];
       $this->comp_order_level = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_level'];
       $this->comp_order_sort  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_sort'];
       $this->comp_tabular     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular'];
       $this->comp_tab_hover   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_hover'];
       $this->comp_tab_seq     = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_seq'];
       $this->comp_tab_label   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_tabular_label'];

       //-----
       for ($i = 0; $i < sizeof($this->comp_label); $i++) {
           if ('label' == $this->comp_order[$i]) {
               if (('desc' == $this->comp_order_start[$i] && !$this->comp_order_invert[$i]) || ('asc' == $this->comp_order_start[$i] && $this->comp_order_invert[$i]))
               {
                   $sortFn = 'arsort';
                   arsort($this->comp_index[$i]);
               }
               else
               {
                   $sortFn = 'asort';
                   asort($this->comp_index[$i]);
               }
               $this->comp_label[$i] = $this->arrangeLabelList($this->comp_label[$i], $i, $sortFn);
           }
           else {
               if (('desc' == $this->comp_order_start[$i] && !$this->comp_order_invert[$i]) || ('asc' == $this->comp_order_start[$i] && $this->comp_order_invert[$i]))
               {
                   $sortFn = 'krsort';
                   krsort($this->comp_index[$i]);
               }
               else
               {
                   $sortFn = 'ksort';
                   ksort($this->comp_index[$i]);
               }
               $this->comp_label[$i] = $this->arrangeLabelList($this->comp_label[$i], $i, $sortFn);
           }
       }

       //-----
      $Str_gb   = "";
      $Arr_gb   = array();
      $Arr_name = array();
      $Arr_lab  = array();
      $Arr_grp  = array();
      $Control  = "";
      $Ctr_grp  = "";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
      {
          $Ctr_grp   .= "[\$campo_" . $cmp_gb . "]";
          $Arr_gb[]   = $cmp_gb;
          $Arr_name[] = "array_total_" . $cmp_gb;
          $Arr_lab[]  = $Control;
          $Arr_grp[]  = $Ctr_grp;
          $Control   .= "[\$campo_" . $cmp_gb . "]";
      }
      for ($ix = 0; $ix < sizeof($Arr_gb); $ix++)
      {
          $Str_gb .= "foreach (\$this->comp_label[" . $ix . "]" . $Arr_lab[$ix] . " as \$campo_" . $Arr_gb[$ix] . " => \$dados_" . $Arr_gb[$ix] . ") {";
          $Str_gb .= "    if (isset(\$this->" . $Arr_name[$ix] . $Arr_grp[$ix] . ")) {";
          $Str_gb .= "        \$this->comp_group" . $Arr_grp[$ix] . " = array();";
          $Str_gb .= "    }";
      }
      for ($ix = 0; $ix < sizeof($Arr_gb); $ix++)
      {
          $Str_gb .= "}";
      }
      eval ($Str_gb);

   }

   function arrangeLabelList($label, $level, $method) {
       $new_label = $label;

       if (0 == $level) {
           if ('reverse' == $method) {
               $new_label = array_reverse($new_label, true);
           }
           elseif ('asort' == $method) {
               asort($new_label);
           }
           else {
               ksort($new_label);
           }
       }
       else {
           foreach ($label as $i => $sub_label) {
               $new_label[$i] = $this->arrangeLabelList($sub_label, $level - 1, $method);
           }
       }

       return $new_label;
   }

   function getCompData($level, $params = array()) {
      $Str_gb   = "";
      $Arr_name = array();
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
      {
          $Arr_name[] = "array_total_" . $cmp_gb;
      }
      for ($ix = 0; $ix < sizeof($Arr_name); $ix++)
      {
          $Str_gb .= "    if (\$level == " . $ix . ") {";
          $Str_gb .= "        \$return = \$this->" . $Arr_name[$ix] . ";";
          $Str_gb .= "    }";
      }
      eval ($Str_gb);

       if (array() == $params) {
           return $return;
       }

       foreach ($params as $i_param => $param) {
           if (!isset($return[$param])) {
               return 0;
           }

           $return = $return[$param];
       }

       return $return;
   }   

   function buildMatrix()
   {
       $this->build_labels = $this->getXAxys();
       $this->build_data   = $this->getYAxys();
   }

   function getXAxys()
   {
       $a_axys = array();

       if (0 == sizeof($this->comp_x_axys))
       {
           if (0 < sizeof($this->comp_sum))
           {
               foreach ($this->comp_sum_order as $i_sum)
               {
                   if ($this->comp_sum_display[$i_sum])
                   {
                       $l_sum = $this->comp_sum[$i_sum];
                       $chart    = '0|' . ($i_sum - 1) . '|';
                       $a_axys[] = array(
                           'group'      => 1,
                           'value'      => $i_sum,
                           'label'      => $l_sum,
                           'field_name' => $this->comp_sum_nm[$i_sum],
                           'function'   => $this->comp_sum_fn[$i_sum],
                           'params'     => array($i_sum - 1),
                           'children'   => array(),
                           'chart'      => '',
                           'css'        => isset($this->comp_sum_css[$i_sum]) ? $this->comp_sum_css[$i_sum] : '',
                       );
                   }
               }
           }
           else
           {
               $a_axys = array();
           }
           $a_labels[] = $a_axys;

           $this->build_col_count = count($a_labels[0]);
       }
       else
       {
           foreach ($this->comp_index[0] as $i_group => $l_group)
           {
               $a_params = array($i_group);
               $a_axys[] = array(
                   'group'    => 0,
                   'value'    => $i_group,
                   'label'    => $this->getRatingGroupBy($l_group, $i_group, 0),//$l_group,
                   'params'   => $a_params,
                   'children' => $this->addChildren(1, $this->comp_fill[1], $this->comp_group[$i_group], $a_params),
               );
           }

           $a_labels = array();
           $this->addChildrenLabel($a_axys, $a_labels);

           $this->build_col_count = 0;
           if (isset($a_labels[0])) {
               foreach ($a_labels[0] as $labelInfo) {
                   if (isset($labelInfo['colspan'])) {
                       $this->build_col_count += $labelInfo['colspan'];
                   }
               }
           }
       }

       if ($this->show_totals_x && 0 < sizeof($this->comp_x_axys))
       {
           $a_labels[0][] = array(
               'group'   => -1,
               'value'   => $this->Ini->Nm_lang['lang_othr_chrt_totl'],
               'label'   => $this->Ini->Nm_lang['lang_othr_chrt_totl'],
               'params'  => array(),
               'colspan' => sizeof($this->comp_sum),
               'rowspan' => sizeof($this->comp_x_axys),
           );
           foreach ($this->comp_sum_order as $i_sum)
           {
               if ($this->comp_sum_display[$i_sum])
               {
                   $s_label = $this->comp_sum[$i_sum];
                   $a_labels[sizeof($this->comp_x_axys)][] = array(
                       'group'    => -1,
                       'value'    => $s_label,
                       'label'    => $s_label,
                       'function' => $this->comp_sum_fn[$i_sum],
                       'params'   => array(),
                       'chart'    => '',
                           'css'      => isset($this->comp_sum_css[$i_sum]) ? $this->comp_sum_css[$i_sum] : '',
                   );
               }
           }
       }

       return $a_labels;
   }

   function addChildren($group, $fill, $children, $params)
   {
       if (!isset($this->comp_x_axys[$group]))
       {
           if (0 < sizeof($this->comp_sum))
           {
               $a_sum = array();
               foreach ($this->comp_sum_order as $i_sum)
               {
                   if ($this->comp_sum_display[$i_sum])
                   {
                       $l_sum = $this->comp_sum[$i_sum];
                       $chart    = $group . '|' . ($i_sum - 1) . '|' . implode('|', $params);
                       $params_n = array_merge($params, array($i_sum - 1));
                       $a_sum[] = array(
                           'group'    => $group,
                           'value'    => $i_sum,
                           'label'    => $l_sum,
                           'function' => $this->comp_sum_fn[$i_sum],
                           'params'   => $params_n,
                           'children' => array(),
                           'chart'    => '',
                           'css'      => isset($this->comp_sum_css[$i_sum]) ? $this->comp_sum_css[$i_sum] : '',
                       );
                   }
               }
               return $a_sum;
           }
           else
           {
               return array();
           }
       }

       $a_axys = array();

       if ($fill)
       {
           foreach ($this->comp_index[$group] as $i_group => $l_group)
           {
               $params_n = array_merge($params, array($i_group));
               $a_axys[] = array(
                   'group'    => $group,
                   'value'    => $i_group,
                   'label'    => $this->getRatingGroupBy($l_group, $i_group, $group),//$l_group,
                   'params'   => $params_n,
                   'children' => $this->addChildren($group + 1, $this->comp_fill[$group + 1], $children[$i_group], $params_n),
               );
           }
       }
       else
       {
           foreach ($children as $i_group => $a_group)
           {
               $params_n = array_merge($params, array($i_group));
               $a_axys[] = array(
                   'group'    => $group,
                   'value'    => $i_group,
                   'label'    => $this->getRatingGroupBy($this->comp_index[$group][$i_group], $i_group, $group),//$this->comp_index[$group][$i_group],
                   'params'   => $params_n,
                   'children' => $this->addChildren($group + 1, $this->comp_fill[$group + 1], $children[$i_group], $params_n),
               );
           }
       }

       return $a_axys;
   }

   function countChildren($children)
   {
       if (empty($children))
       {
           return 1;
       }

       $i = 0;
       foreach ($children as $data)
       {
           $i += $this->countChildren($data['children']);
       }
       return $i;
   }

   function addChildrenLabel($children, &$a_labels)
   {
       foreach ($children as $a_cols)
       {
           $a_labels[$a_cols['group']][] = array(
               'group'    => $a_cols['group'],
               'value'    => $a_cols['value'],
               'label'    => $a_cols['label'],
               'function' => isset($a_cols['function']) ? $a_cols['function'] : '',
               'params'   => $a_cols['params'],
               'colspan'  => $this->countChildren($a_cols['children']),
               'chart'    => '',
               'css'      => isset($a_cols['css'])   ? $a_cols['css']   : '',
           );
           if (!empty($a_cols['children']))
           {
               $this->addChildrenLabel($a_cols['children'], $a_labels);
           }
       }
   }

   function getYAxys()
   {
       $a_axys = array();

       $this->addYChildren(0, $this->comp_group, $a_axys, array());
       $this->fixOrder($a_axys);
       $this->orderBy($a_axys, $this->comp_order_sort, $this->comp_order_col - 1, 0, array());
       $this->comp_chart_axys = $a_axys;

       $a_data              = array();
       $i_row               = 0;
       $this->subtotal_data = array();
       $this->addYChildrenData($a_axys, $a_data, $i_row, 0, array(), array());

       if (!empty($this->subtotal_data))
       {
           end($this->subtotal_data);
           $i_max = key($this->subtotal_data);
           for ($i = $i_max; $i >= 0; $i--)
           {
               $this->build_total_row[] = true;
               $a_data[] = $this->subtotal_data[$i];
           }
       }

       $this->makeTabular($a_data);

       $this->buildTotalsY($a_data);

       return $a_data;
   }

   function addYChildren($group, $tree, &$axys, $param)
   {
       $comp_label = (isset($this->comp_label[$group])) ? $this->comp_label[$group] : array();
       $tmp_param  = $param;
       while (!empty($tmp_param))
       {
           $tmp_index  = array_shift($tmp_param);
           $comp_label = (isset($comp_label[$tmp_index])) ? $comp_label[$tmp_index] : array();
       }
       foreach ($comp_label as $i_group => $l_group)
       {
           if (isset($tree[$i_group]))
           {
               $new_param = array_merge($param, array($i_group));
               if (in_array($group, $this->comp_y_axys))
               {
                   if (!isset($axys[$i_group]))
                   {
                       $axys[$i_group] = array(
                           'group'    => $group,
                           'value'    => $i_group,
                           'label'    => $l_group,
                           'children' => array(),
                       );
                   }
                   $this->addYChildren($group + 1, $tree[$i_group], $axys[$i_group]['children'], $new_param);
               }
               else
               {
                   $this->addYChildren($group + 1, $tree[$i_group], $axys, $new_param);
               }
           }
       }
   }

   function fixOrder(&$axys)
   {
       $n_axys = array();
       $key    = key($axys);
     if (isset($axys[$key]['group'])) 
     {
       $group  = $axys[$key]['group'];

       foreach ($this->comp_index[$group] as $i_group => $l_group)
       {
           if (isset($axys[$i_group]))
           {
               $n_axys[$i_group] = $axys[$i_group];
           }
           if (!empty($n_axys[$i_group]['children']))
           {
               $this->fixOrder($n_axys[$i_group]['children']);
           }
       }

       $axys = $n_axys;
     }
   }

   function orderBy(&$axys, $ord, $col, $level, $keys)
   {
       if (-1 == $col || '' == $ord)
       {
           return;
       }

       if ($this->comp_order_level <= $level)
       {
           $n_axys = array();
           $o_axys = array();

           foreach ($axys as $i_group => $d_group)
           {
               $o_axys[$i_group] = 0;
           }

           $a_order = $this->getOrderArray($this->getCompData($level), $ord, $col, $keys, $o_axys);

           foreach ($a_order as $i_group => $v_group)
           {
               $n_axys[$i_group] = $axys[$i_group];
           }

           $axys = $n_axys;
       }

       foreach ($axys as $i_group => $d_group)
       {
           if (!empty($d_group['children']))
           {
               $n_keys = array_merge($keys, array($i_group));
               $this->orderBy($axys[$i_group]['children'], $ord, $col, $level + 1, $n_keys);
           }
       }
   }

   function getOrderArray($data, $ord, $col, $keys, $elem)
   {
       while (!empty($keys))
       {
           $key = key($keys);

           if (isset($data[ $keys[$key] ]))
           {
               $data = $data[ $keys[$key] ];
           }

           unset($keys[$key]);
       }

       foreach ($elem as $i_group => $v_group)
       {
           if (isset($data[$i_group]) && isset($data[$i_group][$col]))
           {
               $elem[$i_group] = $data[$i_group][$col];
           }
       }

       if ('a' == $ord)
       {
           asort($elem);
       }
       else
       {
           arsort($elem);
       }

       return $elem;
   }

   function getRatingGroupBy($originalLabel, $value, $groupByField)
   {
       if (isset($this->comp_rating_gby[$groupByField]) && '' != $this->comp_rating_gby[$groupByField] && method_exists($this, $this->comp_rating_gby[$groupByField])) {
           $fnName = $this->comp_rating_gby[$groupByField];
           return $this->$fnName($value);
       }
       return $originalLabel;
   }

   function getRatingSummarization($value, $summarizationField, $alreadyArray = false)
   {
       if (isset($this->comp_rating_sum[$summarizationField]) && '' != $this->comp_rating_sum[$summarizationField] && method_exists($this, $this->comp_rating_sum[$summarizationField])) {
           $fnName = $this->comp_rating_sum[$summarizationField];
           return $this->$fnName($value, $alreadyArray);
       }
       return '';
   }

   function addYChildrenData($axys, &$data, &$row, $level, $params, $tab_col)
   {
       foreach ($axys as $i_data)
       {
           $params_n = array_merge($params, array($i_data['value']));
           if (sizeof($this->comp_y_axys) > $level + 1)
           {
               $tab_col[$level]['label'] = $i_data['label'];
               $tab_col[$level]['group'] = $i_data['group'];
               $tab_col[$level]['value'] = $i_data['value'];
           }
           $b_subtotal = !(!$this->comp_tabular || ($this->comp_tabular && sizeof($this->comp_y_axys) == $level + 1));
           if (1)
           {
               $new_data = array();
               if ($this->comp_tabular)
               {
                   foreach ($tab_col as $i_tab_col => $a_col_data)
                   {
                       $new_data[] = array(
                           'level'  => $level,
                           'label'  => $this->getRatingGroupBy($a_col_data['label'], $a_col_data['value'], $a_col_data['group']),
                           'link'   => in_array($a_col_data['group'], $this->comp_links_gr) ? $this->getLabelLink($params, $i_tab_col, false) : '',
                       );
                   }
               }
               if (!$b_subtotal)
               {
                   $new_data[] = array(
                       'level'  => $level,
                       'group'  => $i_data['group'],
                       'value'  => $i_data['value'],
                       'label'  => $this->getRatingGroupBy($i_data['label'], $i_data['value'], $i_data['group']),
                       'params' => $params_n,
                       'link'   => in_array($i_data['group'], $this->comp_links_gr) ? $this->getLabelLink($params_n, -1, false) : '',
                   );
               }
               elseif ($this->comp_tab_extend && $this->comp_tab_hover)
               {
                   $last_item                           = count($new_data) - 1;
                   $new_data[$last_item]['colspan']    = sizeof($this->comp_y_axys) - sizeof($params_n) + 1;
                   $new_data[$last_item]['display_as'] = 'subtotal';
                   if (!$this->comp_tab_label)
                   {
                       $new_data[$last_item]['label'] = $this->Ini->Nm_lang['lang_othr_chrt_totl'];
                   }
                   $new_data[$last_item]['link'] = $this->getLabelLink($params_n, -1, false);
               }
               else
               {
                   $last_item = count($new_data) - 1;
                   $new_data[] = array(
                       'level'      => $level,
                       'group'      => $i_data['group'],
                       'value'      => $this->Ini->Nm_lang['lang_othr_chrt_totl'],
                       'label'      => $this->comp_tab_label ? $new_data[$last_item]['label'] : $this->Ini->Nm_lang['lang_othr_chrt_totl'],
                       'params'     => $params_n,
                       'link'       => '',
                       'colspan'    => sizeof($this->comp_y_axys) - sizeof($params_n),
                       'display_as' => 'subtotal'
                   );
               }
               $a_columns = 1 == sizeof($this->build_labels)
                          ? current($this->build_labels)
                          : $this->build_labels[sizeof($this->build_labels) - 1];
               if (0 < sizeof($this->comp_x_axys))
               {
                   $this->initTotalsX();
               }
               $i = 0;
               foreach ($a_columns as $a_col_data)
               {
                   if (-1 < $a_col_data['group'])
                   {
                       $val = $this->getCellValue($a_col_data['params'], $params_n);
                       $rat = $this->getCellRating($a_col_data['params'], $params_n);
                       $cnt = $this->getCellCount($a_col_data['params'], $params_n);
                       $fmt = isset($a_col_data['params']) ? $a_col_data['params'][sizeof($a_col_data['params']) - 1] : 0;
                       $key = '';
                       $lnk = $this->getDataLinkParams($params_n, $a_col_data['params']);
                       if (1 == sizeof($this->comp_x_axys))
                       {
                           $key = $this->addTotalsG($i_data, $a_col_data, $params, $val);
                       }
                       unset($a_col_data['chart']);
                       if (sizeof($this->comp_y_axys) - 1 > $level)
                       {
                           $a_chart_params = $a_col_data['params'];
                           unset($a_chart_params[sizeof($a_col_data['params']) - 1]);
                           if (0 < sizeof($params_n))
                           {
                               for ($j = 0; $j < sizeof($params_n); $j++)
                               {
                                   $a_chart_params[] = $params_n[$j];
                               }
                           }
                           $a_col_data['chart'] = ($i_data['group'] + 1). '|' . $fmt . '|' . implode('|', $a_chart_params);
                       }
                       $new_data[] = array(
                           'level'     => -1,
                           'value'     => $val,
                           'rating'    => $rat,
                           'format'    => $fmt,
                           'link_fld'  => (is_numeric($fmt)) ? $fmt + 1 : 0,
                           'link_data' => $lnk,
                           'chart'     => '',
                           'css'       => isset($a_col_data['css'])   ? $a_col_data['css']   : '',
                           'subtotal'  => $b_subtotal,
                       );
                       $aCellColP = $a_col_data['params'];
                       if (0 < sizeof($this->comp_x_axys))
                       {
                           $i_col_x = array_pop($a_col_data['params']);
                           $this->addTotalsX($i_col_x, $val, $key, $cnt);
                           if (0 == $level && 0 < sizeof($this->comp_x_axys))
                           {
                               $this->addTotalsA ('anal', $i_col_x, $val, $a_col_data['params'][0]);
                               $this->addTotalsAL('anal', $i_col_x, $val, $i_data['value']);
                           }
                       }
                       if (($this->comp_tabular || 0 == $level) && !$b_subtotal)
                       {
                           $iTotalP   = array_pop($aCellColP);
                           $aCellParams = array(
                               'col' => $aCellColP,
                               'row' => array(),
                               'fnc' => $iTotalP
                           );
                           $this->addTotalsY($i, $val, $a_col_data['function'], $fmt, $aCellParams);
                       }
                       $i++;
                   }
               }
               if (0 < sizeof($this->comp_x_axys))
               {
                   $this->buildTotalsX($new_data, $i, $level, $i_data['label'], $b_subtotal);
               }
               if (!$b_subtotal)
               {
                   $this->build_total_row[$row] = false;
                   $data[$row] = $new_data;
                   $row++;
               }
               elseif ($this->show_totals_y && !empty($this->comp_sum))
               {
                   if (!isset($this->subtotal_data[$level]))
                   {
                       $this->subtotal_data[$level] = $new_data;
                   }
                   else
                   {
                       end($this->subtotal_data);
                       $i_max = key($this->subtotal_data);
                       for ($i = $i_max; $i >= $level; $i--)
                       {
                           $this->build_total_row[$row] = true;
                           $data[$row] = $this->subtotal_data[$i];
                           $row++;
                           if ($i != $level)
                           {
                               unset($this->subtotal_data[$i]);
                           }
                       }
                       $this->subtotal_data[$level] = $new_data;
                   }
               }
           }
           $this->addYChildrenData($i_data['children'], $data, $row, $level + 1, $params_n, $tab_col);
       }
   }

   function getDataLinkParams($param, $col)
   {
       $a_par = array();

       if (1 < sizeof($col))
       {
           for ($i = 0; $i < sizeof($col) - 1; $i++)
           {
               $a_par[] = $col[$i];
           }
       }

       return implode('|', array_merge($a_par, $param));
   }

   function getDataLink($field, $data, $value)
   {
       if (!isset($this->comp_sum_lnk[$field]) || !$this->comp_sum_lnk[$field]['show'])
       {
           return $value;
       }

       $s_link_field = $this->comp_sum_lnk[$field]['field'];

       $a_link = array(
       );

       if (!isset($a_link[$s_link_field]))
       {
           return $value;
       }

       $a_data = explode('|', $data);
       $a_par  = array();
       $b_ok   = true;

       foreach ($a_link[$s_link_field]['param'] as $s_param => $a_param)
       {
           if ('C' == $a_param['type'])
           {
               if (!isset($a_data[ $this->comp_field_nm[ $a_param['value'] ] ]))
               {
                   $b_ok = false;
               }
               else
               {
                   $a_par[$s_param] = $a_data[ $this->comp_field_nm[ $a_param['value'] ] ];
               }
           }
           else
           {
               $a_par[$s_param] = $a_param['value'];
           }
       }

       if (!$b_ok)
       {
           return $value;
       }

       $b_modal = false;
       if (false !== strpos($a_link[$s_link_field]['html'], '__NM_FLD_PAR_M__'))
       {
           $b_modal                       = true;
           $a_link[$s_link_field]['html'] = str_replace('__NM_FLD_PAR_M__', '__NM_FLD_PAR__', $a_link[$s_link_field]['html']);
       }

       $return = str_replace('__NM_FLD_PAR__', $this->getDataLinkValue($a_par), $a_link[$s_link_field]['html']) . $value . '</a>';

       return $b_modal ? $this->getModalLink($return) :  $return;
   }

   function getDataLinkValue($param)
   {
       $a_links = array();

       foreach ($param as $i => $v)
       {
           $a_links[] = $i . '?#?' . $v;
       }

       return implode('?@?', $a_links);
   }

   function getModalLink($param)
   {
       return str_replace(array('?#?', '?@?'), array('*scin', '*scout'), $param);
   }

   function getLabelLink($param, $i_tmp = -1, $bProtect = true)
   {
       $a_links = array();

       if (-1 == $i_tmp)
       {
           foreach ($param as $i => $v)
           {
               $i_fld     = $i + sizeof($this->comp_x_axys);
               $a_links[] = $this->comp_links_fl[$i_fld]['name'] . '?#?' . $this->comp_links_fl[$i_fld]['prot'] . addslashes($this->getChartText($v, $bProtect)) . $this->comp_links_fl[$i_fld]['prot'];
           }
       }
       else
       {
           for ($i = 0; $i <= $i_tmp; $i++)
           {
               $v         = (isset($param[$i])) ? $param[$i] : "";
               $i_fld     = $i + sizeof($this->comp_x_axys);
               $a_links[] = $this->comp_links_fl[$i_fld]['name'] . '?#?' . $this->comp_links_fl[$i_fld]['prot'] . addslashes($this->getChartText($v, $bProtect)) . $this->comp_links_fl[$i_fld]['prot'];
           }
       }

       $Parms_Res  = implode('?@?', $a_links);
       $Md5_Res    = "@SC_par@" . NM_encode_input($this->Ini->sc_page) . "@SC_par@grid_resumen_ventas@SC_par@" . md5($Parms_Res);
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['LigR_Md5'][md5($Parms_Res)] = $Parms_Res;
       return $Md5_Res;
   }

   function getChartLink($param, $bProtect = true)
   {
       $a_links = array();

       foreach ($param as $i => $v)
       {
           $a_links[] = $this->comp_links_fl[$i]['name'] . '?#?' . $this->comp_links_fl[$i]['prot'] . $this->getChartText($v, $bProtect) . $this->comp_links_fl[$i]['prot'];
       }

       return implode('?@?', $a_links);
   }

   function getCellCount($aColPar, $aRowPar)
   {
       array_pop($aColPar);
       $i_tot = 0;
       $a_val = (0 == sizeof($this->comp_x_axys))
              ? array_merge($aRowPar, array($i_tot))
              : array_merge($aColPar, $aRowPar, array($i_tot));
       return $this->getCompDataCell($a_val, $this->getCompData(sizeof($aColPar) + sizeof($aRowPar) - 1));
   }

   function getCellRating($aColPar, $aRowPar)
   {
       $i_tot = array_pop($aColPar);
       $a_val = (0 == sizeof($this->comp_x_axys))
              ? array_merge($aRowPar, array($i_tot))
              : array_merge($aColPar, $aRowPar, array($i_tot));
       return $this->getRatingSummarization($this->getCompDataCell($a_val, $this->getCompData(sizeof($aColPar) + sizeof($aRowPar) - 1)), $i_tot);
   }

   function getCellValue($aColPar, $aRowPar)
   {
       $i_tot = array_pop($aColPar);
       $a_val = (0 == sizeof($this->comp_x_axys))
              ? array_merge($aRowPar, array($i_tot))
              : array_merge($aColPar, $aRowPar, array($i_tot));
       return $this->getCompDataCell($a_val, $this->getCompData(sizeof($aColPar) + sizeof($aRowPar) - 1));
   }

   function getCompDataCell($par, $data)
   {
       $key = key($par);
       $cur = $par[$key];
       if (is_array($data[$cur]))
       {
           unset($par[$key]);
           return $this->getCompDataCell($par, $data[$cur]);
       }
       elseif (isset($data[$cur]))
       {
           return $data[$cur];
       }
       elseif (!$this->comp_sum_fill_0)
       {
           return '';
       }
       else
       {
           return 0;
       }
   }

   function makeTabular(&$a_data)
   {
       if ($this->comp_tabular)
       {
           $a_labels = array();
   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert'])
   {
     $this->comp_tab_hover = true;
   }
           if ($this->comp_tab_hover)
           {
               foreach ($a_data as $row => $columns)
               {
                   for ($i = 0; $i < sizeof($this->comp_y_axys) - 1; $i++)
                   {
                      if (!isset($a_labels[$i]))
                      {
                          $a_labels[$i] = '';
                      }
                      if (isset($a_data[$row][$i]) && !isset($a_data[$row][$i]['display_as']))
                      {
                          if (isset($columns[$i]['label']) && $a_labels[$i] == $columns[$i]['label'])
                          {
                              $a_data[$row][$i]['display_as'] = 'none';
                          }
                          else
                          {
                              $a_data[$row][$i]['display_as'] = 'auto';
                          }
                      }
                      $a_labels[$i] = (isset($columns[$i]['label'])) ? $columns[$i]['label'] : "";
                   }
               }
           }
           else
           {
               foreach ($a_data as $row => $columns)
               {
                   for ($i = 0; $i < sizeof($this->comp_y_axys) - 1; $i++)
                   {
                       if (!isset($a_labels[$i]))
                       {
                           $a_labels[$i] = array(
                               'old'  => $columns[$i]['label'],
                               'row'  => $row,
                               'span' => 1,
                           );
                       }
                       elseif ($a_labels[$i]['old'] == $columns[$i]['label'])
                       {
                           unset($a_data[$row][$i]);
                           $a_labels[$i]['span']++;
                       }
                       else
                       {
                           $a_data[ $a_labels[$i]['row'] ][$i]['rowspan'] = $a_labels[$i]['span'];
                           $a_labels[$i]['old']  = $columns[$i]['label'];
                           $a_labels[$i]['row']  = $row;
                           $a_labels[$i]['span'] = 1;
                       }
                   }
               }
               foreach ($a_labels as $i_col => $a_col_data)
               {
                   $a_data[ $a_col_data['row'] ][$i_col]['rowspan'] = $a_col_data['span'];
               }
           }
       }
   }

   function initTotalsX()
   {
       $this->comp_totals_x = array();

       if (!$this->show_totals_x)
       {
           return;
       }

       foreach ($this->comp_sum_order as $i_sum)
       {
           if ($this->comp_sum_display[$i_sum])
           {
               $l_sum = $this->comp_sum[$i_sum];
               $this->comp_totals_x[$i_sum - 1] = array('values' => array(), 'count' => array(), 'chart' => '');
           }
       }
   }

   function addTotalsX($col, $val, $chart, $count)
   {
       if (!$this->show_totals_x)
       {
           return;
       }

       $this->comp_totals_x[$col]['chart'] = $chart;
       $this->comp_totals_x[$col]['count'][] = $count;
       if (isset($this->comp_rating_sum[$col]) && '' != $this->comp_rating_sum[$col] && method_exists($this, $this->comp_rating_sum[$col])) {
           $this->comp_totals_x[$col]['values'][] = json_decode($val, true);
       } else {
           $this->comp_totals_x[$col]['values'][] = $val;
       }
   }

   function buildTotalsX(&$row, $col, $level, $label, $sub)
   {
       if (!$this->show_totals_x)
       {
           return;
       }

       foreach ($this->comp_sum_order as $i_sum)
       {
           if ($this->comp_sum_display[$i_sum])
           {
               $l_sum = $this->comp_sum[$i_sum];
               if (isset($this->comp_rating_sum[$i_sum - 1]) && '' != $this->comp_rating_sum[$i_sum - 1] && method_exists($this, $this->comp_rating_sum[$i_sum - 1])) {
                   $i_temp[$i_sum - 1] = array();
               } else {
                   $i_temp[$i_sum - 1] = '';
               }
               $i_count[$i_sum - 1] = 0;
           }
       }

       $key = key($this->comp_totals_x);

       for ($i = 0; $i < sizeof($this->comp_totals_x[$key]['values']); $i++)
       {
           foreach ($this->comp_sum_order as $i_sum)
           {
               if ($this->comp_sum_display[$i_sum])
               {
                   if (isset($this->comp_rating_sum[$i_sum - 1]) && '' != $this->comp_rating_sum[$i_sum - 1] && method_exists($this, $this->comp_rating_sum[$i_sum - 1])) {
                       foreach ($this->comp_totals_x[$i_sum - 1]['values'][$i]['vls'] as $ratingValue => $ratingCount) {
                           if (!isset($i_temp[$i_sum - 1][$ratingValue])) {
                               $i_temp[$i_sum - 1][$ratingValue] = 0;
                           }
                           $i_temp[$i_sum - 1][$ratingValue] += $ratingCount;
                       }
                       continue;
                   }
                   if ('' == $this->comp_totals_x[$i_sum - 1]['values'][$i])
                   {
                       $this->comp_totals_x[$i_sum - 1]['values'][$i] = 0;
                   }
                   $l_sum = $this->comp_sum[$i_sum];
                   $this_count = (int) $this->comp_totals_x[$i_sum - 1]['count'][$i];
                   if ('' == $i_temp[$i_sum - 1])
                   {
                       if ('A' == $this->comp_sum_fn[$i_sum])
                       {
                           $i_temp[$i_sum - 1] = $this->comp_totals_x[$i_sum - 1]['values'][$i] * $this_count;
                       } else {
                           $i_temp[$i_sum - 1] = $this->comp_totals_x[$i_sum - 1]['values'][$i];
                       }
                   }
                   elseif ('M' == $this->comp_sum_fn[$i_sum] && '' !== $this->comp_totals_x[$i_sum - 1]['values'][$i])
                   {
                       $i_temp[$i_sum - 1] = min($i_temp[$i_sum - 1], $this->comp_totals_x[$i_sum - 1]['values'][$i]);
                   }
                   elseif ('X' == $this->comp_sum_fn[$i_sum])
                   {
                       $i_temp[$i_sum - 1] = max($i_temp[$i_sum - 1], $this->comp_totals_x[$i_sum - 1]['values'][$i]);
                   }
                   else
                   {
                       if ('A' == $this->comp_sum_fn[$i_sum])
                       {
                           $i_temp[$i_sum - 1] += ($this->comp_totals_x[$i_sum - 1]['values'][$i] * $this_count);
                       } else {
                           $i_temp[$i_sum - 1] += $this->comp_totals_x[$i_sum - 1]['values'][$i];
                       }
                   }
                   $i_count[$i_sum - 1] += $this_count;
               }
           }
       }
       foreach ($this->comp_sum as $i_sum => $l_sum)
       {
           if (isset($this->comp_rating_sum[$i_sum - 1]) && '' != $this->comp_rating_sum[$i_sum - 1] && method_exists($this, $this->comp_rating_sum[$i_sum - 1])) {
               continue;
           }
           if ('A' == $this->comp_sum_fn[$i_sum] && isset($this->comp_totals_x[$i_sum - 1]['values']) && is_numeric($i_count[$i_sum - 1]))
           {
               $i_temp[$i_sum - 1] /= $i_count[$i_sum - 1];
           }
           if ('%' == $this->comp_sum_fn[$i_sum])
           {
               $i_temp[$i_sum - 1] = 100.00;
           }
       }
       foreach ($this->comp_sum_order as $i_sum)
       {
           if ($this->comp_sum_display[$i_sum])
           {
               $l_sum = $this->comp_sum[$i_sum];
               $row[] = array(
                   'total'  => true,
                   'level'  => -1,
                   'value'  => $i_temp[$i_sum - 1],
                   'rating' => $this->getRatingSummarization($i_temp[$i_sum - 1], $i_sum - 1, true),
                   'format' => $i_sum - 1,
                   'chart'  => '',
               );
               if (0 == $level && 0 < sizeof($this->comp_x_axys))
               {
                   $this->addTotalsA('sint', $i_sum - 1, $i_temp[$i_sum - 1], $label);
               }
               if (($this->comp_tabular || 0 == $level) && !$sub)
               {
                   $aCellParams = array(
                       'col' => false,
                       'row' => array(),
                       'fnc' => $i_sum - 1
                   );
                   $this->addTotalsY($col + ($i_sum - 1), $i_temp[$i_sum - 1], $this->comp_sum_fn[$i_sum], $i_sum - 1, $aCellParams);
               }
           }
       }
   }

   function addTotalsA($mode, $col, $val, $label)
   {
       if (!isset($this->comp_totals_a[$col]))
       {
           $this->comp_totals_a[$col] = array(
               'labels' => array(),
               'values' => array(
                   'anal' => array(),
                   'sint' => array(),
               ),
           );
       }
       if ('sint' == $mode)
       {
           $this->comp_totals_a[$col]['labels'][]         = $label;
           $this->comp_totals_a[$col]['values']['sint'][] = $val;
       }
       elseif ('anal' == $mode)
       {
           if (isset($this->comp_index[ $this->comp_x_axys[0] ][$label]))
           {
               $label = $this->comp_index[ $this->comp_x_axys[0] ][$label];
           }
           $this->comp_totals_a[$col]['values']['anal'][$label][] = $val;
       }
   }

   function addTotalsAL($mode, $col, $val, $label)
   {
       if (!isset($this->comp_totals_al[$col]))
       {
           $this->comp_totals_al[$col] = array(
               'labels' => array(),
               'values' => array(
                   'anal' => array(),
                   'sint' => array(),
               ),
           );
       }
       if ('sint' == $mode)
       {
           $this->comp_totals_al[$col]['labels'][]         = $label;
           $this->comp_totals_al[$col]['values']['sint'][] = $val;
       }
       elseif ('anal' == $mode)
       {
           if (isset($this->comp_index[ $this->comp_y_axys[0] ][$label]))
           {
               $label = $this->comp_index[ $this->comp_y_axys[0] ][$label];
           }
           $this->comp_totals_al[$col]['values']['anal'][$label][] = $val;
       }
   }

   function addTotalsY($col, $val, $fun, $fmt, $par = array())
   {
       if (!$this->show_totals_y)
       {
           return;
       }

       if (!isset($this->comp_totals_y[$col]))
       {
           $this->comp_totals_y[$col] = array(
               'format'   => $fmt,
               'function' => $fun,
               'param_c'  => empty($par) ? false : $par['col'],
               'param_r'  => empty($par) ? false : $par['row'],
               'param_f'  => empty($par) ? ''    : $par['fnc'],
               'values'   => array(),
           );
       }
       $this->comp_totals_y[$col]['values'][] = $val;
   }

   function buildTotalsY(&$matrix)
   {
       if (!$this->show_totals_y)
       {
           return;
       }

       $row = sizeof($matrix);

       $this->build_total_row[$row] = true;

       $matrix[$row][] = array(
           'group'      => -1,
           'value'      => $this->Ini->Nm_lang['lang_msgs_totl'],
           'label'      => $this->Ini->Nm_lang['lang_msgs_totl'],
           'params'     => array(),
           'colspan'    => $this->comp_tabular ? sizeof($this->comp_y_axys) : 1,
           'display_as' => $this->comp_tab_hover ? 'total' : 'total'
       );

       $aTotals = array();
       foreach ($this->comp_totals_y as $cols)
       {
           $iSum           = empty($cols['param_c']) ? $this->getColumnTotal(false, $cols['param_f']) : $this->getColumnTotal($cols['param_c'], $cols['param_f']);
           if ($cols['function'] == "%") {
               $iSum = 100.00;
           }
           $aTotals[]      = $iSum;
           $matrix[$row][] = array(
               'total'  => true,
               'level'  => -1,
               'value'  => $iSum,
               'format' => $cols['format'],
           );
           $this->array_general_total[] = $iSum;
       }

       if (1 == sizeof($this->comp_x_axys))
       {
           $i_count = 0;
           $aLabels = array();
           foreach ($this->comp_index[0] as $group_label)
           {
               $aLabels[] = $group_label;
               foreach ($this->comp_sum as $i_sum => $l_sum)
               {
                   $this->comp_totals_al[$i_sum - 1]['values']['sint'][] = $aTotals[$i_count];
                   $i_count++;
               }
           }
           foreach ($this->comp_sum as $i_sum => $l_sum)
           {
               $this->comp_totals_al[$i_sum - 1]['labels'] = $aLabels;
           }
       }
   }

   function addTotalsG($line, $column, $param, $value)
   {
       $s_item  = $column['params'][0];
       $i_total = $column['params'][1];
       $param[] = $line['value'];
       $s_key   = 'G|' . $i_total . '|' . implode('|', $param);

       if (!isset($this->comp_totals_g[$s_key]))
       {
           $this->comp_totals_g[$s_key] = array(
               'title'    => $this->getChartText($this->comp_sum[$i_total + 1]),
               'show_sub' => true,
               'subtitle' => $this->getChartText($this->getChartSubtitle($param, 1)),
               'field_x'  => $this->getCompFieldName(0),
               'field_y'  => $this->comp_sum_nm[$i_total + 1],
               'label_x'  => $this->getChartText($this->comp_field[0]),
               'label_y'  => $this->getChartText($this->comp_sum[$i_total + 1]),
               'labels'   => array(),
               'values'   => array(
               'sint'     => array(0 => array()),
               ),
           );
       }

       $this->comp_totals_g[$s_key]['labels'][]            = isset($this->comp_index[0][$s_item]) ? $this->comp_index[0][$s_item] : $s_item;
       $this->comp_totals_g[$s_key]['values']['sint'][0][] = $value;

       return $s_key;
   }

   function getCompFieldName($index)
   {
       foreach ($this->comp_field_nm as $fieldName => $fieldIndex) {
           if ($index == $fieldIndex) {
               return $fieldName;
           }
       }
       return '';
   }

   function getColumnTotal($param_c, $param_f)
   {
       $paramCompRatingSum = $param_f;
       if (false == $param_c)
       {
           $final_data = $this->array_total_geral;
           if (empty($final_data)) {
               return "";
           }
           $param_f   -= 1;
       }
       else
       {
          $Str_gb   = "";
          $Arr_name = array();
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
          {
              $Arr_name[] = "array_total_" . $cmp_gb;
          }
          for ($ix = 0; $ix < sizeof($Arr_name); $ix++)
          {
              $Str_gb .= "    if (count(\$this->comp_x_axys) == " . ($ix + 1) . ") {";
              $Str_gb .= "        \$return = \$this->" . $Arr_name[$ix] . ";";
              $Str_gb .= "    }";
          }
          eval ($Str_gb);
           $final_data = $this->getColumnTotalData($param_c, $return);
       }
       if (isset($this->comp_rating_sum[$paramCompRatingSum]) && '' != $this->comp_rating_sum[$paramCompRatingSum] && method_exists($this, $this->comp_rating_sum[$paramCompRatingSum])) {
           $fnName = $this->comp_rating_sum[$paramCompRatingSum];
           return $this->$fnName($final_data[$param_f]);
       } else {
           return $final_data[$param_f];
       }
   }

   function getColumnTotalData($param_c, $data)
   {
       $elem = array_shift($param_c);

       if (empty($param_c))
       {
            return $data[$elem];
       }
       else
       {
           return $this->getColumnTotalData($param_c, $data[$elem]);
       }
   }

   function buildColumnTotal($fun, $rows)
   {
       $total = '';

       foreach ($rows as $val)
       {
           if ('' == $total)
           {
               $total = $val;
           }
           elseif ('M' == $fun && '' !== $val)
           {
               $total = min($total, $val);
           }
           elseif ('X' == $fun)
           {
               $total = max($total, $val);
           }
           else
           {
               $total += $val;
           }
       }

       if ('A' == $fun)
       {
           $total /= sizeof($rows);
       }
       if ('%' == $fun)
       {
           $total = 100.00;
       }
       if ('W' == $fun || 'V' == $fun || 'P' == $fun)
       {
           $total = "";
       }

       return $total;
   }

   function getFusionLink($originalLink)
   {
       $linkParts = explode('!!!', $originalLink);

       if (1 == count($linkParts)) {
           return $originalLink;
       }

       $linkParts[1] = md5($linkParts[1]);

       return implode('', $linkParts);
   }

   function getKeysTotals(&$a_keys, &$a_totals, $data, $param)
   {
       for ($i = 0; $i < sizeof($this->comp_x_axys); $i++)
       {
           $key_param = key($param);
           unset($param[$key_param]);
       }
       $list_data = $this->comp_chart_axys;
       foreach ($param as $now_param)
       {
           $list_data = $list_data[$now_param]['children'];
       }
       $list_data = (is_array($list_data)) ? array_keys($list_data) : array();
       $size = sizeof($this->comp_sum_dummy);
       foreach ($list_data as $k_group)
       {
           if (isset($data[$k_group])) {
               $totals = $data[$k_group];
           }
           else {
               $totals = $this->comp_sum_dummy;
           }
           $a_keys[] = $k_group;
           $count    = 0;
           foreach ($totals as $i_total => $v_total)
           {
               if ($count == $size)
               {
                   break;
               }
               $a_totals[$i_total][] = $v_total;
               $count++;
           }
       }
       if (!empty($param))
       {
           $a_indexes = $this->getRealIndexes($this->comp_chart_axys, $param);
           foreach ($a_keys as $i => $v)
           {
               if (!in_array($v, $a_indexes))
               {
                   unset($a_keys[$i]);
                   foreach ($a_totals as $t => $l)
                   {
                       unset($a_totals[$t][$i]);
                   }
               }
           }
           $a_keys = array_values($a_keys);
           foreach ($a_totals as $t => $l)
           {
               $a_totals[$t] = array_values($a_totals[$t]);
           }
       }
   }

   function getRealIndexes($data, $param)
   {
       if (empty($param))
       {
           $a_indexes = array();
           foreach ($data as $i => $v)
           {
               $a_indexes[] = $i;
           }
           return $a_indexes;
       }
       else
       {
           $key = key($param);
           $val = $param[$key];
           unset($param[$key]);
           return $this->getRealIndexes($data[$val]['children'], $param);
       }
   }

   function getGroupLabels($group, $keys)
   {
       $a_labels = array();
       foreach ($keys as $key)
       {
           $a_labels[] = isset($this->comp_index[$group][$key]) ? $this->comp_index[$group][$key] : $key;
       }
       return $a_labels;
   }

   function getChartSubtitle($param, $s = 0)
   {
       $a_links = array();

       foreach ($param as $i => $v)
       {
           $a_links[] = $this->comp_field[$i + $s] . ' = ' . $this->comp_index[$i + $s][$v];
       }

       return implode(' :: ', $a_links);
   }

   function getAnaliticCharts($total, &$chart_data)
   {
       $chart_data['labels_anal']           = array();
       $chart_data['legend']                = (isset($this->comp_field[1])) ? $this->comp_field[1] : "";
       $chart_data['values']['anal']        = array();
       $chart_data['values']['anal_values'] = array();
       $chart_data['values']['anal_links']  = array();

       foreach ($this->comp_index[0] as $i_0 => $v_0)
       {
           $chart_data['labels_anal'][] = $v_0;
       }
      if (isset($this->comp_index[1])) {
       foreach ($this->comp_index[1] as $i_1 => $v_1)
       {
           $chart_data['values']['anal'][$v_1] = array();
           foreach ($this->comp_index[0] as $i_0 => $v_0)
           {
               $vCompData                                  = $this->getCompData(1, array($i_0, $i_1, $total));
               $chart_data['values']['anal'][$v_1][]       = isset($vCompData) ? $vCompData : 0;
               $chart_data['values']['anal_values'][$v_1]  = $i_1;
               $chart_data['values']['anal_links'][$i_1][] = $this->getChartLink(array($i_0, $i_1), -1);
           }
       }
      }
   }

   function getChartText($s, $bProtect = true)
   {
       if (!$bProtect)
       {
           return $s;
       }
       if ('UTF-8' != $_SESSION['scriptcase']['charset'])
       {
           $s = sc_convert_encoding($s, 'UTF-8', $_SESSION['scriptcase']['charset']);
       }
       return function_exists('html_entity_decode') ? html_entity_decode($s, ENT_COMPAT | ENT_HTML401, 'UTF-8') : $s;
   }

   function drawMatrix()
   {
       global $nm_saida;

       if ($this->NM_export)
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_export']['label'] = $this->build_labels;
           $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_export']['data']  = $this->build_data;
           return;
       }

       $nm_saida->saida("<tr id=\"summary_body\" class='sc-mobile-inner-control'>\r\n");
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
       { 
           $_SESSION['scriptcase']['saida_html'] = "";
       } 
      $TD_padding = (!$this->Print_All && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == "pdf") ? " style=\"padding: 0px !important;\"" : "";
       $nm_saida->saida("<td class=\"" . $this->css_scGridTabelaTd . " sc-mobile-inner-control\"" . $TD_padding . ">\r\n");
       $nm_saida->saida("<table class=\"scGridTabela\" id=\"sc-ui-summary-body\" style=\"padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top; width: 100%;\">\r\n");

       $this->drawMatrixLabels();
      if ($this->comp_tab_hover)
      {
          $nm_saida->saida("    <script type=\"text/javascript\">\r\n");
          $nm_saida->saida("        $(function() {\r\n");
          $nm_saida->saida("            $(\".scGridSummaryLine\").click(function() {\r\n");
          $nm_saida->saida("              var bHasClicked = $(this).find(\".scGridSummaryLineOdd\").hasClass(\"scGridSummaryClickedLine\") || $(this).find(\".scGridSummaryLineEven\").hasClass(\"scGridSummaryClickedLine\") || $(this).find(\".scGridSummarySubtotal\").hasClass(\"scGridSummaryClickedSubtotal\") || $(this).find(\".scGridSummaryTotal\").hasClass(\"scGridSummaryClickedTotal\");\r\n");
          $nm_saida->saida("              $(\".scGridSummaryLineOdd\").removeClass(\"scGridSummaryClickedLine\");\r\n");
          $nm_saida->saida("              $(\".scGridSummaryLineEven\").removeClass(\"scGridSummaryClickedLine\");\r\n");
          $nm_saida->saida("              $(\".scGridSummaryGroupbyVisible\").removeClass(\"scGridSummaryClickedGroupbyVisible\");\r\n");
          $nm_saida->saida("              $(\".scGridSummaryGroupbyInvisible\").removeClass(\"scGridSummaryClickedGroupbyInvisible\");\r\n");
          $nm_saida->saida("              $(\".scGridSummaryGroupbyInvisibleDisplay\").removeClass(\"scGridSummaryClickedGroupbyInvisibleDisplay\");\r\n");
          $nm_saida->saida("              $(\".scGridSummarySubtotal\").removeClass(\"scGridSummaryClickedSubtotal\");\r\n");
          $nm_saida->saida("              $(\".scGridSummaryTotal\").removeClass(\"scGridSummaryClickedTotal\");\r\n");
          $nm_saida->saida("              if (!bHasClicked) {\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummaryLineOdd\").addClass(\"scGridSummaryClickedLine\");\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummaryLineEven\").addClass(\"scGridSummaryClickedLine\");\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummaryGroupbyVisible\").addClass(\"scGridSummaryClickedGroupbyVisible\");\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummaryGroupbyInvisible\").addClass(\"scGridSummaryClickedGroupbyInvisible\");\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummaryGroupbyInvisibleDisplay\").addClass(\"scGridSummaryClickedGroupbyInvisibleDisplay\");\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummarySubtotal\").addClass(\"scGridSummaryClickedSubtotal\");\r\n");
          $nm_saida->saida("                $(this).find(\".scGridSummaryTotal\").addClass(\"scGridSummaryClickedTotal\");\r\n");
          $nm_saida->saida("              }\r\n");
          $nm_saida->saida("            });\r\n");
          $nm_saida->saida("        });\r\n");
          $nm_saida->saida("    </script>\r\n");
      }

       $s_class   = 'scGridSummaryLineOdd';
       $s_class_v = 'scGridSummaryGroupbyVisible';
        $iSeqCount = 0;
       foreach ($this->build_data as $row_i => $lines)
       {
           $fixedColumnCount = 0;
           $this->prim_linha = false;
           $sTrClass         = $this->comp_tab_hover ? ' class="scGridSummaryLine"' : '';
           $nm_saida->saida(" <tr $sTrClass>\r\n");
           if ($this->comp_tab_seq)
           {
               if ($this->build_total_row[$row_i])
               {
                   $sSeqDisplay = '&nbsp;';
               }
               else
               {
                   $iSeqCount++;
                   $sSeqDisplay = $iSeqCount;
               }
               $nm_saida->saida(" <td class=\"scGridSummaryGroupbyVisible scGridSummaryGroupbySeq sc-col-op sc-col-op-seq\">$sSeqDisplay</td>\r\n");
           }
           foreach ($lines as $col_i => $columns)
           {
               $this->NM_graf_left = $this->Graf_left_dat;
               if (isset($columns['level']) && 0 <= $columns['level'])
               {
                   if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
                   {
                       $columns['label'] = ($columns['label'] == "") ? "&nbsp;" : $columns['label'];
                       $s_label   = (isset($columns['link']) && '' != $columns['link']) ? "<a href=\"javascript: nm_link_cons('" . $columns['link'] . "')\" class=\"" . (isset($columns['display_as']) && 'none' == $columns['display_as'] ? 'scGridSummaryGroupbyInvisibleLink' : 'scGridSummaryGroupbyVisibleLink') . "\">" . $columns['label'] . '</a>' : $columns['label'];
                   }
                   else
                   {
                       $s_label   = $columns['label'];
                   }
                   $s_style   = '';
                   $s_text    = $this->comp_tabular ? $s_label : str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', $columns['level']) . $s_label;
                   $s_class_v = 'scGridSummaryGroupbyVisible';
                   if (isset($columns['display_as']) && 'none' == $columns['display_as'])
                   {
                       $s_text    = '<span class="scGridSummaryGroupbyInvisibleDisplay">' . $s_text . '</span>';
                       $s_class_v = 'scGridSummaryGroupbyInvisible';
                   }
                   elseif (isset($columns['display_as']) && 'subtotal' == $columns['display_as'])
                   {
                       $s_class_v = 'scGridSummarySubtotal';
                   }
                   elseif (isset($columns['display_as']) && 'total' == $columns['display_as'])
                   {
                       $s_class_v = 'scGridSummaryTotal';
                   }
                   $s_class_fix_fld = ' sc-col-fld sc-col-fld-';
                   $s_class_fix_fld_idx = $fixedColumnCount;
                   $fixedColumnCount++;
               }
               else
               {
                   $s_style = '';
                   $columnValue = isset($columns['rating']) && '' != $columns['rating'] ? $columns['rating'] : $this->formatValue($columns['format'], $columns['value']);
                   if (isset($columns['total']) && $columns['total'])
                   {
                       $s_style   = ' style="text-align: right"';
                       $s_text    = $columnValue;
                       $s_class_v = 'scGridSummaryTotal';
                       $this->NM_graf_left = $this->Graf_left_tot;
                   }
                   elseif (isset($columns['subtotal']) && $columns['subtotal'])
                   {
                       $s_text    = $columnValue;
                       $s_class_v = 'scGridSummarySubtotal';
                   }
                   else
                   {
                       if (!isset($columns['link_fld']))  { $columns['link_fld']  = "";}
                       if (!isset($columns['link_data'])) { $columns['link_data'] = "";}
                       if (!isset($columns['format']))    { $columns['format']    = "";}
                       $s_text    = $this->getDataLink($columns['link_fld'], $columns['link_data'], $columnValue);
                       $s_class_v = $s_class;
                   }
                   $s_class_fix_fld = '';
                   $s_class_fix_fld_idx = '';
               }
               $css     = (isset($columns['css']) && '' != $columns['css']) ? ' ' . $columns['css'] . '_field' : '';
               $colspan = (isset($columns['colspan']) && 1 < $columns['colspan']) ? ' colspan="' . $columns['colspan'] . '"' : '';
               $rowspan = (isset($columns['rowspan']) && 1 < $columns['rowspan']) ? ' rowspan="' . $columns['rowspan'] . '"' : '';
               $chart   = (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida']) && isset($columns['chart']) && '' != $columns['chart'] && isset($this->comp_chart_data[ $columns['chart'] ]))
                        ? nmButtonOutput($this->arr_buttons, "bgraf", "nm_graf_submit_2('" . $columns['chart'] . "')", "nm_graf_submit_2('" . $columns['chart'] . "')", "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "" . $this->comp_chart_data[ $columns['chart'] ]['label_x'] . " X " . $this->comp_chart_data[ $columns['chart'] ]['label_y'] . "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "") : '';
               if ($this->NM_graf_left)
               {
                   $nm_saida->saida("  <td" . $s_style . " class=\"" . $s_class_v . $s_class_fix_fld . $s_class_fix_fld_idx . $css . "\"" . $colspan . "" . $rowspan . ">" . $chart . "" . $s_text . "</td>\r\n");
               }
               else
               {
                   $nm_saida->saida("  <td" . $s_style . " class=\"" . $s_class_v . $s_class_fix_fld . $s_class_fix_fld_idx . $css . "\"" . $colspan . "" . $rowspan . ">" . $s_text . "" . $chart . "</td>\r\n");
               }
           }
           $nm_saida->saida(" </tr>\r\n");
           if ('scGridSummaryLineOdd' == $s_class)
           {
               $s_class                   = 'scGridSummaryLineEven';
               $this->Ini->cor_link_dados = 'scGridFieldEvenLink';
           }
           else
           {
               $s_class                   = 'scGridSummaryLineOdd';
               $this->Ini->cor_link_dados = 'scGridFieldOddLink';
           }
       }

       $nm_saida->saida("</table>\r\n");
       $nm_saida->saida("</td>\r\n");
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
       { 
           $nm_saida->saida("<script>\r\n");
           $nm_saida->saida("if (typeof ratingBreakdownDisplay == \"function\") {\r\n");
           $nm_saida->saida("    setTimeout(function() { ratingBreakdownDisplay() }, 500);\r\n");
           $nm_saida->saida("}\r\n");
           $nm_saida->saida("</script>\r\n");
           if ($this->proc_res_grid)
           { 
               $this->Ini->Arr_result['setValue'][] = array('field' => 'sc_res_grid', 'value' => NM_charset_to_utf8($_SESSION['scriptcase']['saida_html']));
           } 
           else 
           { 
               $this->Ini->Arr_result['setValue'][] = array('field' => 'summary_body', 'value' => NM_charset_to_utf8($_SESSION['scriptcase']['saida_html']));
           } 
           $_SESSION['scriptcase']['saida_html'] = "";
       } 
       $nm_saida->saida("</tr>\r\n");
   }

   function drawMatrixLabels()
   {
       global $nm_saida;

       $this->prim_linha = true;

       $nm_saida->saida("    <script type=\"text/javascript\">\r\n");
       if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
       { 
           $nm_saida->saida("        function sc_session_redir(url_redir)\r\n");
           $nm_saida->saida("        {\r\n");
           $nm_saida->saida("            if (typeof(sc_session_redir_mobile) === typeof(function(){})) { sc_session_redir_mobile(url_redir); }\r\n");
           $nm_saida->saida("            if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')\r\n");
           $nm_saida->saida("            {\r\n");
           $nm_saida->saida("                window.parent.sc_session_redir(url_redir);\r\n");
           $nm_saida->saida("            }\r\n");
           $nm_saida->saida("            else\r\n");
           $nm_saida->saida("            {\r\n");
           $nm_saida->saida("                if (window.opener && typeof window.opener.sc_session_redir === 'function')\r\n");
           $nm_saida->saida("                {\r\n");
           $nm_saida->saida("                    window.close();\r\n");
           $nm_saida->saida("                    window.opener.sc_session_redir(url_redir);\r\n");
           $nm_saida->saida("                }\r\n");
           $nm_saida->saida("                else\r\n");
           $nm_saida->saida("                {\r\n");
           $nm_saida->saida("                    window.location = url_redir;\r\n");
           $nm_saida->saida("                }\r\n");
           $nm_saida->saida("            }\r\n");
           $nm_saida->saida("        }\r\n");
       }
       $nm_saida->saida("        $(function() {\r\n");
       $nm_saida->saida("            $(\".sc-ui-sort\").mouseover(function() {\r\n");
       $nm_saida->saida("                $(this).css(\"cursor\", \"pointer\");\r\n");
       $nm_saida->saida("            }).click(function() {\r\n");
       $nm_saida->saida("                var newOrder, colOrder;\r\n");
       $nm_saida->saida("                if ($(this).hasClass(\"sc-ui-sort-desc\")) {\r\n");
       $nm_saida->saida("                    $(this).removeClass(\"sc-ui-sort-desc\").addClass(\"sc-ui-sort-asc\");\r\n");
       $nm_saida->saida("                    newOrder = \"asc\";\r\n");
       $nm_saida->saida("                }\r\n");
       $nm_saida->saida("                else {\r\n");
       $nm_saida->saida("                    $(this).removeClass(\"sc-ui-sort-asc\").addClass(\"sc-ui-sort-desc\");\r\n");
       $nm_saida->saida("                    newOrder = \"desc\";\r\n");
       $nm_saida->saida("                }\r\n");
       $nm_saida->saida("                colOrder = $(this).attr(\"id\").substr(11);\r\n");
       $nm_saida->saida("                changeSort(colOrder, newOrder, false);\r\n");
       $nm_saida->saida("            });\r\n");
       $nm_saida->saida("        });\r\n");
       $nm_saida->saida("    </script>\r\n");
if($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) { 
           $nm_saida->saida("   <thead>\r\n");
       $this->monta_cabecalho();
 }

       $apl_cab_resumo = $this->Ini->Nm_lang['lang_othr_smry_msge'];

       $b_display     = false;
       $b_display_seq = false;
       foreach ($this->build_labels as $lines)
       {
           $nm_saida->saida(" <tr class=\"sc-ui-summary-header-row\">\r\n");
           if ($this->comp_tab_seq && !$b_display_seq) {
               $nm_saida->saida("  <td class=\"scGridSummaryLabel sc-col-title sc-col-op sc-col-op-seq\" rowspan=\"" . sizeof($this->build_labels) . "\">&nbsp;</td>\r\n");
               $b_display_seq = true;
           }

           if (!$b_display)
           {
               if ($this->comp_tabular)
               {
                   $fixedColumnCount = 0;
                   foreach ($this->comp_y_axys as $iYAxysIndex)
                   {
                       $hasOrder = !isset($this->comp_order_enabled[$iYAxysIndex]) || $this->comp_order_enabled[$iYAxysIndex];
                       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
                           $hasOrder = false;
                       }
                       if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_start'][$iYAxysIndex]))
                       {
                           $sInitialOrder   = '';
                           $sInitialDisplay = '; display: none';
                           $sInitialSrc     = '';
                       }
                       elseif ('asc' == $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pivot_order_start'][$iYAxysIndex])
                       {
                           $sInitialOrder   = ' sc-ui-sort-asc';
                           $sInitialDisplay = '';
                           $sInitialSrc     = $this->Ini->Label_summary_sort_asc;
                       }
                       else
                       {
                           $sInitialOrder   = ' sc-ui-sort-desc';
                           $sInitialDisplay = '';
                           $sInitialSrc     = $this->Ini->Label_summary_sort_desc;
                       }
                       $nm_saida->saida("  <td class=\"scGridSummaryLabel sc-col-title sc-col-fld sc-col-fld-{$fixedColumnCount}\" rowspan=\"" . sizeof($this->build_labels) . "\">\r\n");
                       if ($hasOrder) {
                           $nm_saida->saida("    <span class=\"sc-ui-sort" . $sInitialOrder . "\" id=\"sc-id-sort-" . $iYAxysIndex . "\">\r\n");
                       }
                       $nm_saida->saida("   " . $this->comp_field[$iYAxysIndex] . "\r\n");
                       if ($hasOrder) {
                           if (!$this->Ini->Export_html_zip) {
                               $nm_saida->saida("     <img style=\"vertical-align: middle" . $sInitialDisplay . "\" src=\"" . $this->Ini->path_img_global . "/" . $sInitialSrc . "\" border=\"0\"/>\r\n");
                           }
                           else {
                               $nm_saida->saida("     <img style=\"vertical-align: middle" . $sInitialDisplay . "\" src=\"" . $sInitialSrc . "\" border=\"0\"/>\r\n");
                           }
                           $nm_saida->saida("    </span>\r\n");
                       }
                       $nm_saida->saida("  </td>\r\n");
                       $fixedColumnCount++;
                   }
               }
               else
               {
                   $nm_saida->saida("  <td class=\"scGridSummaryLabel sc-col-title sc-col-fld sc-col-fld-0\" rowspan=\"" . sizeof($this->build_labels) . "\">\r\n");
                       if (0 < $this->comp_order_col)
                       {
                       $nm_saida->saida("    <a href=\"javascript: changeSort('0', '0', true)\" class=\"scGridLabelLink \">\r\n");
                       }
                   $nm_saida->saida("   " . $apl_cab_resumo . "\r\n");
                       if (0 < $this->comp_order_col)
                       {
                           if (!$this->Ini->Export_html_zip) {
                           $nm_saida->saida("    <IMG style=\"vertical-align: middle\" SRC=\"" . $this->Ini->path_img_global . "/" . $this->Ini->Label_summary_sort_asc . "\" BORDER=\"0\"/>\r\n");
                       }
                       else {
                           $nm_saida->saida("    <IMG style=\"vertical-align: middle\" SRC=\"" . $this->Ini->Label_summary_sort_asc . "\" BORDER=\"0\"/>\r\n");
                       }
                       $nm_saida->saida("    </a>\r\n");
                       }
               $nm_saida->saida("  </td>\r\n");
               }
               $b_display = true;
           }
           foreach ($lines as $columns) {
               $tdStyleTags = array();
               $this->NM_graf_left = $this->Graf_left_dat;
               if (isset($columns['group']) && $columns['group'] == -1) {
                   $this->NM_graf_left = $this->Graf_left_tot;
               }
               if ('' == $columns['function'] && '' != $this->comp_align[ $columns['group'] ]) {
                   $tdStyleTags[] = 'text-align: ' . $this->comp_align[ $columns['group'] ];
               }
               $css       = ('' != $columns['css']) ? ' ' . $columns['css'] . '_label' : '';
               $colspan   = (isset($columns['colspan']) && 1 < $columns['colspan']) ? ' colspan="' . $columns['colspan'] . '"' : '';
               $rowspan   = (isset($columns['rowspan']) && 1 < $columns['rowspan']) ? ' rowspan="' . $columns['rowspan'] . '"' : '';
               $chart     = (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida']) && isset($columns['chart']) && '' != $columns['chart'] && isset($this->comp_chart_data[ $columns['chart'] ]))
                          ? nmButtonOutput($this->arr_buttons, "bgraf", "nm_graf_submit_2('" . $columns['chart'] . "')", "nm_graf_submit_2('" . $columns['chart'] . "')", "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "" . $this->comp_chart_data[ $columns['chart'] ]['label_x'] . " X " . $this->comp_chart_data[ $columns['chart'] ]['label_y'] . "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "") : '';
               $col_label = $this->getColumnLabel($columns['label'], $columns['params'][0], $css, $chart, $tdStyleTags, $this->NM_graf_left);
               $tdStyle   = empty($tdStyleTags) ? '' : ' style="' . implode(';', $tdStyleTags) . '"';
                   $nm_saida->saida("  <td class=\"scGridSummaryLabel" . $css . "\"" . $colspan . "" . $rowspan . "><span class='scGridSummaryLabelContainerSpan' " . $tdStyle . ">" . $col_label . "</span></td>\r\n");
           }
           $nm_saida->saida(" </tr>\r\n");
       }
if($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']){ 
           $nm_saida->saida("   </thead>\r\n");
 }
   }

   function getColumnLabel($label, $col, $css, $chartValue, &$tdStyleTags, $chartLeft, $labelLeft = true)
   {
       $tdStyleTags[] = 'display: flex';
       $tdStyleTags[] = 'flex-direction: row';
       $tdStyleTags[] = 'align-items: center';
       if (0 != sizeof($this->comp_x_axys)) {
           $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
           return $chartLeft ? $chartValue . $label : $label . $chartValue;
       }

       if (1 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (2 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (3 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (4 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (5 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (6 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (7 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (8 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (9 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (10 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       if (11 == $col) {
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
               return nl2br($label);
           }
           $sortIconValue = $this->Ini->Label_summary_sort;
           $spanLabelAlign = '; justify-content: flex-end;';
           $sortOrder = 'a';
           if (isset($this->comp_order_col) && $this->comp_order_col == $col + 1) {
               if ($this->comp_order_sort == 'd') {
                   $sortIconValue = $this->Ini->Label_summary_sort_desc;
                   $sInitialOrderFA = 'desc';
                   $sortOrder = '';
               } else {
                   $sortIconValue = $this->Ini->Label_summary_sort_asc;
                   $sInitialOrderFA = 'asc';
                   $sortOrder = 'd';
               }
           }
           $linkIni = "<a href=\"javascript: changeSort(" . ($col + 1) . ", '" . $sortOrder . "', true)\" class=\"scGridLabelLink" . $css . "\">";
           $linkEnd = "</a>";
           $labelValue = nl2br($label);
           $labelLink = $linkIni . $labelValue . $linkEnd;
           $labelChart = $chartLeft ? $chartValue . $labelLink : $labelLink . $chartValue;
           if (!$this->Ini->Export_html_zip) {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $this->Ini->path_img_global . "/" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           } else {
               $sortIconLink = $linkIni . "<IMG SRC=\"" . $sortIconValue . "\" BORDER=\"0\"/>" . $linkEnd;
           }
           if (empty($this->Ini->Label_summary_sort_pos) || $this->Ini->Label_summary_sort_pos == "right") {
               $this->Ini->Label_summary_sort_pos = "right_field";
           }
           if (empty($sortIconValue)) {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return $labelChart;
           } elseif ($this->Ini->Label_summary_sort_pos == "right_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . $sortIconLink . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "left_field") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $sortIconLink . $labelChart . '</span>';
           } elseif ($this->Ini->Label_summary_sort_pos == "right_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: space-between' : 'justify-content: right';
               return '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>' . $sortIconLink;
           } elseif ($this->Ini->Label_summary_sort_pos == "left_cell") {
               $tdStyleTags[] = $labelLeft ? 'justify-content: left' : 'justify-content: space-between';
               return $sortIconLink . '<span style="flex-grow: 1' . $spanLabelAlign . '">' . $labelChart . '</span>';
           }
       }

       $spanLabelAlign = $labelLeft ? 'justify-content: left' : 'justify-content: right';
       if (1 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (2 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (3 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (4 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (5 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (6 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (7 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (8 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (9 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (10 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       if (11 == $col) {
           $spanLabelAlign = 'justify-content: flex-end';
       }
       $tdStyleTags[] = $spanLabelAlign;
       return $chartLeft ? $chartValue . $label : $label . $chartValue;
   }

   public static function formatValue($total, $valor_campo)
   {
       $isNegative = 0 > $valor_campo;
       if ($total == 1)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "12", "", "N:12", "-");
       }
       if ($total == 2)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 3)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 4)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 5)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 6)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "12", "", "N:12", "-");
       }
       if ($total == 7)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 8)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "12", "", "N:12", "-");
       }
       if ($total == 9)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 10)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "1", "", "N:1", "-");
       }
       if ($total == 11)
       {
           nmgp_Form_Num_Val($valor_campo, "", ".", "2", "S", "12", "", "N:12", "-");
       }
       return $valor_campo;
   }

   //---- 
   function resumo_init()
   {
      $this->arr_buttons['group_group_1']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_expt'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_expt'] . "",
          'type'             => "button",
          'display'          => "text_fontawesomeicon",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__export.png",
          'fontawesomeicon'  => "fas fa-download",
          'has_fa'           => true,
          'content_icons'    => false,
          'style'            => "default",
      );

      $this->arr_buttons['group_group_2']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_expt_email_title'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_expt_email'] . "",
          'type'             => "button",
          'display'          => "text_fontawesomeicon",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__envelope.png",
          'fontawesomeicon'  => "fas fa-envelope",
          'has_fa'           => true,
          'content_icons'    => false,
          'style'            => "default",
      );

      $this->arr_buttons['group_group_1']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_expt'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_expt'] . "",
          'type'             => "button",
          'display'          => "text_fontawesomeicon",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__export.png",
          'fontawesomeicon'  => "fas fa-download",
          'has_fa'           => true,
          'content_icons'    => false,
          'style'            => "default",
      );

      $this->arr_buttons['group_group_2']= array(
          'value'            => "" . $this->Ini->Nm_lang['lang_btns_expt_email_title'] . "",
          'hint'             => "" . $this->Ini->Nm_lang['lang_btns_expt_email'] . "",
          'type'             => "button",
          'display'          => "text_fontawesomeicon",
          'display_position' => "text_right",
          'image'            => "scriptcase__NM__envelope.png",
          'fontawesomeicon'  => "fas fa-envelope",
          'has_fa'           => true,
          'content_icons'    => false,
          'style'            => "default",
      );

      if ($this->NM_export)
      {
          return;
      }
      if ("out" == $this->NM_tipo)
      {
         $this->monta_html_ini();
         $this->monta_cabecalho();
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && !$_SESSION['scriptcase']['proc_mobile'])
         {
             $this->monta_barra_top();
             $this->monta_embbed_placeholder_top();
         }
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && $_SESSION['scriptcase']['proc_mobile'])
         {
             $this->monta_barra_top();
             $this->monta_embbed_placeholder_mobile_top();
         }
         if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
         { 
            if ($this->Ini->grid_search_change_fil)
            { 
                $seq_search = 1;
                foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq'] as $cmp => $def)
                {
                   $Seq_grid      = $seq_search;
                   $Cmp_grid      = $cmp;
                   $Def_grid      = array('descr' => $def['descr'], 'hint' => $def['hint']);
                   $Lin_grid_add  = $this->grid_search_tag_ini($Cmp_grid, $Def_grid, $Seq_grid);
                   $NM_func_grid_add = "grid_search_" . $Cmp_grid;
                   $Lin_grid_add .= $this->$NM_func_grid_add($Seq_grid, 'S', $def['opc'], $def['val'], $nmgp_tab_label[$Cmp_grid]);
                   $Lin_grid_add .= $this->grid_search_tag_end();
                   $this->Ini->Arr_result['grid_search_add'][] = array ('field' => $cmp, 'tag' => NM_charset_to_utf8($Lin_grid_add));
                   $seq_search++;
                } 
            } 
            else 
            { 
                $this->html_grid_search();
            } 
         } 
      }
      elseif ($this->Print_All)
      {
          $this->monta_cabecalho();
      }
   }

   function monta_css()
   {
      global $nm_saida, $nmgp_tipo_pdf, $nmgp_cor_print;
       $compl_css = "";
       if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
       {
           include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
       }
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
       {
          if (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == "print" && strtoupper($nmgp_cor_print) == "PB") || $nmgp_tipo_pdf == "pb")
           { 
               if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['SC_sub_css_bw']['grid_resumen_ventas']))
               {
                   $compl_css = str_replace(".", "_", $_SESSION['sc_session'][$this->Ini->sc_page]['SC_sub_css_bw']['grid_resumen_ventas']) . "_";
               } 
           } 
           else 
           { 
               if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['SC_sub_css']['grid_resumen_ventas']))
               {
                   $compl_css = str_replace(".", "_", $_SESSION['sc_session'][$this->Ini->sc_page]['SC_sub_css']['grid_resumen_ventas']) . "_";
               } 
           }
       }
       $temp_css  = explode("/", $compl_css);
       if (isset($temp_css[1])) { $compl_css = $temp_css[1];}
       $this->css_scGridPage          = $compl_css . "scGridPage";
       $this->css_scGridToolbar       = $compl_css . "scGridToolbar";
       $this->css_scGridToolbarPadd   = $compl_css . "scGridToolbarPadding";
       $this->css_css_toolbar_obj     = $compl_css . "css_toolbar_obj";
       $this->css_scGridHeader        = $compl_css . "scGridHeader";
       $this->css_scGridHeaderFont    = $compl_css . "scGridHeaderFont";
       $this->css_scGridFooter        = $compl_css . "scGridFooter";
       $this->css_scGridFooterFont    = $compl_css . "scGridFooterFont";
       $this->css_scGridTotal         = $compl_css . "scGridTotal";
       $this->css_scGridTotalFont     = $compl_css . "scGridTotalFont";
       $this->css_scGridFieldEven     = $compl_css . "scGridFieldEven";
       $this->css_scGridFieldEvenFont = $compl_css . "scGridFieldEvenFont";
       $this->css_scGridFieldEvenVert = $compl_css . "scGridFieldEvenVert";
       $this->css_scGridFieldEvenLink = $compl_css . "scGridFieldEvenLink";
       $this->css_scGridFieldOdd      = $compl_css . "scGridFieldOdd";
       $this->css_scGridFieldOddFont  = $compl_css . "scGridFieldOddFont";
       $this->css_scGridFieldOddVert  = $compl_css . "scGridFieldOddVert";
       $this->css_scGridFieldOddLink  = $compl_css . "scGridFieldOddLink";
       $this->css_scGridLabel         = $compl_css . "scGridLabel";
       $this->css_scGridLabelFont     = $compl_css . "scGridLabelFont";
       $this->css_scGridLabelLink     = $compl_css . "scGridLabelLink";
       $this->css_scGridTabela        = $compl_css . "scGridTabela";
       $this->css_scGridTabelaTd      = $compl_css . "scGridTabelaTd";
       $this->css_scAppDivMoldura     = $compl_css . "scAppDivMoldura";
       $this->css_scAppDivHeader      = $compl_css . "scAppDivHeader";
       $this->css_scAppDivHeaderText  = $compl_css . "scAppDivHeaderText";
       $this->css_scAppDivContent     = $compl_css . "scAppDivContent";
       $this->css_scAppDivContentText = $compl_css . "scAppDivContentText";
       $this->css_scAppDivToolbar     = $compl_css . "scAppDivToolbar";
       $this->css_scAppDivToolbarInput= $compl_css . "scAppDivToolbarInput";
   }

   function resumo_sem_reg()
   {
      global $nm_saida;
      $res_sem_reg = $this->Ini->Nm_lang['lang_errm_empt']; 
      $nm_saida->saida("  <TR id=\"summary_body\">\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
      { 
          $_SESSION['scriptcase']['saida_html'] = "";
      } 
      $nm_saida->saida("   <TD class=\"scGridFieldOdd scGridFieldOddFont\" align=\"center\" style=\"vertical-align: top;font-size:12px;\">\r\n");
      $nm_saida->saida("     " . $res_sem_reg . "\r\n");
      $nm_saida->saida("   </TD>\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
      { 
          $this->Ini->Arr_result['setValue'][] = array('field' => 'summary_body', 'value' => NM_charset_to_utf8($_SESSION['scriptcase']['saida_html']));
          $_SESSION['scriptcase']['saida_html'] = "";
      } 
      $nm_saida->saida("  </TR>\r\n");
   }

   function resumo_sem_reg_chart()
   {
      global $nm_saida;
      $res_sem_reg = $this->Ini->Nm_lang['lang_errm_empt']; 
      $displayMessage = $this->NM_res_sem_reg ? '' : ' style="display: none"';
      $nm_saida->saida("  <TR id=\"rec_not_found_chart\"" . $displayMessage . ">\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
      { 
          $_SESSION['scriptcase']['saida_html'] = "";
      } 
      $nm_saida->saida("   <TD class=\"scGridFieldOdd scGridFieldOddFont\" align=\"center\" style=\"vertical-align: top;font-size:12px;\">\r\n");
      $nm_saida->saida("     " . $res_sem_reg . "\r\n");
      $nm_saida->saida("   </TD>\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
      { 
         if ($this->NM_res_sem_reg)
         {
              $this->Ini->Arr_result['setDisplay'][] = array('field' => 'rec_not_found_chart', 'value' => '');
              $this->Ini->Arr_result['setVisibility'][] = array('field' => 'res_chart_table', 'value' => 'hidden');
         }
         else
         {
              $this->Ini->Arr_result['setDisplay'][] = array('field' => 'rec_not_found_chart', 'value' => 'none');
              $this->Ini->Arr_result['setDisplay'][] = array('field' => 'res_chart_table', 'value' => '');
              $this->Ini->Arr_result['setVisibility'][] = array('field' => 'res_chart_table', 'value' => 'visible');
         }
          $_SESSION['scriptcase']['saida_html'] = "";
      } 
      $nm_saida->saida("  </TR>\r\n");
   }

   //---- 
   function resumo_final()
   {
       global $nm_saida;
      if ($this->NM_export)
      {
          return;
      }
      if ("out" == $this->NM_tipo)
      {
         $this->monta_html_fim();
      }
   }

   //---- 
   function inicializa_vars()
   {
      $this->Tot_ger = false;
      if ("out" == $this->NM_tipo)
      {
         require_once($this->Ini->path_aplicacao . "grid_resumen_ventas_total.class.php"); 
      }
      $this->Print_All = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['print_all'];
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'] || $this->Ini->sc_export_ajax_img)
      { 
          $this->NM_raiz_img = $this->Ini->root; 
      } 
      else 
      { 
          $this->NM_raiz_img = ""; 
      } 
      if ($this->Print_All)
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] = "print";
          $this->Ini->nm_limite_lin = $this->Ini->nm_limite_lin_res_prt; 
      }
      else
      {
          $this->Ini->nm_limite_lin = $this->Ini->nm_limite_lin_res; 
      }
      $this->Total   = new grid_resumen_ventas_total($this->Ini->sc_page);
      $this->prep_modulos("Total");
      if ($this->NM_export)
      {
          return;
      }
      $this->monta_css();
      $this->que_linha = "impar";
      $this->css_line_back = $this->css_scGridFieldOdd;
      $this->css_line_fonf = $this->css_scGridFieldOddFont;
      $this->Ini->cor_link_dados = $this->css_scGridFieldOddLink;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['LigR_Md5'] = array();
   }

   //---- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }

   //---- 
   function totaliza()
   {
      $this->Total->Calc_resumo_sc_free_group_by("res", $this->NM_export);
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total'] as $cmp_gb => $resto)
      {
          $Arr_tot_name = "array_total_" . $cmp_gb;
          $this->$Arr_tot_name = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['arr_total'][$cmp_gb];
      }
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
      {
          $Arr_tot_name = "array_total_" . $cmp_gb;
          if (is_array($this->$Arr_tot_name)) {
              ksort($this->$Arr_tot_name);
          }
      }
      if ("out" == $this->NM_tipo)
      {
         $Gb_geral = "quebra_geral_" . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Ind_Groupby'];
         $this->Total->$Gb_geral(false, $this->NM_export);
      }
   }

   //----- 
   function monta_html_ini($first_table = true)
   {
      global $nm_saida, $nmgp_tipo_pdf, $nmgp_cor_print;

      if ($first_table)
      {

      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
      { 
          $nm_saida->saida("<TABLE style=\"padding: 0px; border-spacing: 0px; border-width: 0px; width: 100%;\">\r\n");
          return;
      } 
       header("X-XSS-Protection: 1; mode=block");
       header("X-Frame-Options: SAMEORIGIN");
if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
{
       $nm_saida->saida("<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:word\" xmlns=\"http://www.w3.org/TR/REC-html40\">\r\n");
}
if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['responsive_chart']['active']) {
$nm_saida->saida("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"\r\n");
$nm_saida->saida("            \"http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd\">\r\n");
}
$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_refresh_after_chart'] = 'resumo';
      $nm_saida->saida("<HTML" . $_SESSION['scriptcase']['reg_conf']['html_dir'] . ">\r\n");
      $nm_saida->saida("<HEAD>\r\n");
      $nm_saida->saida(" <TITLE>" . $this->Ini->Nm_lang['lang_resumen_ventas'] . "</TITLE>\r\n");
      $nm_saida->saida(" <META http-equiv=\"Content-Type\" content=\"text/html; charset=" . $_SESSION['scriptcase']['charset_html'] . "\" />\r\n");
if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
{
      $nm_saida->saida(" <META http-equiv=\"Expires\" content=\"Fri, Jan 01 1900 00:00:00 GMT\"/>\r\n");
      $nm_saida->saida(" <META http-equiv=\"Last-Modified\" content=\"" . gmdate('D, d M Y H:i:s') . " GMT\"/>\r\n");
      $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"no-store, no-cache, must-revalidate\"/>\r\n");
      $nm_saida->saida(" <META http-equiv=\"Cache-Control\" content=\"post-check=0, pre-check=0\"/>\r\n");
      $nm_saida->saida(" <META http-equiv=\"Pragma\" content=\"no-cache\"/>\r\n");
}
      $nm_saida->saida(" <link rel=\"shortcut icon\" href=\"../_lib/img/usr__NM__img__NM__favicon.png\">\r\n");
       $css_body = "";
      $nm_saida->saida(" <style type=\"text/css\">\r\n");
      $nm_saida->saida("  BODY { " . $css_body . " }\r\n");
      $nm_saida->saida(" </style>\r\n");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
      { 
           $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_form.css\" /> \r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_form" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" /> \r\n");
           $nm_saida->saida("   <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("     var applicationKeys = '';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+q';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'ctrl+s';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'ctrl+f';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+p';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+w';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+x';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+m';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+c';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+r';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'ctrl+p';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+shift+p';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+shift+w';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+shift+x';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+shift+m';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+shift+c';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+shift+r';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'alt+enter';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'f1';\r\n");
           $nm_saida->saida("     applicationKeys += ',';\r\n");
           $nm_saida->saida("     applicationKeys += 'ctrl+g';\r\n");
           $nm_saida->saida("     var hotkeyList = '';\r\n");
           $nm_saida->saida("     function execHotKey(e, h) {\r\n");
           $nm_saida->saida("         var hotkey_fired = false\r\n");
           $nm_saida->saida("         switch (true) {\r\n");
           $nm_saida->saida("             case (['alt+q'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_sai');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['ctrl+s'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_savegrid');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['ctrl+f'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_fil');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+p'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_pdf');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+w'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_word');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+x'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_xls');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+m'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_xml');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+c'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_csv');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+r'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_rtf');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['ctrl+p'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_imp');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+shift+p'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_email_pdf');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+shift+w'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_email_word');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+shift+x'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_email_xls');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+shift+m'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_email_xml');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+shift+c'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_email_csv');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+shift+r'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_email_rtf');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['alt+enter'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_cons');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['f1'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_webh');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("             case (['ctrl+g'].indexOf(h.key) > -1):\r\n");
           $nm_saida->saida("                 hotkey_fired = process_hotkeys('sys_format_gbrl');\r\n");
           $nm_saida->saida("                 break;\r\n");
           $nm_saida->saida("         }\r\n");
           $nm_saida->saida("         if (hotkey_fired) {\r\n");
           $nm_saida->saida("             e.preventDefault();\r\n");
           $nm_saida->saida("             return false;\r\n");
           $nm_saida->saida("         } else {\r\n");
           $nm_saida->saida("             return true;\r\n");
           $nm_saida->saida("         }\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("   </script>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\" src=\"../_lib/lib/js/hotkeys.inc.js\"></script>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\" src=\"../_lib/lib/js/hotkeys_setup.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery/js/jquery.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery/js/jquery-ui.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/scInput.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/jquery.scInput.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/jquery.scInput2.js\"></script>\r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery/css/smoothness/jquery-ui.css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/font-awesome/6.2/css/all.min.css\" type=\"text/css\" media=\"screen,print\" />\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/touch_punch/jquery.ui.touch-punch.min.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/malsup-blockui/jquery.blockUI.js\"></script>\r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery_plugin/select2/css/select2.min.css\" type=\"text/css\" />\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/select2/js/select2.full.min.js\"></script>\r\n");
           if ($_SESSION['scriptcase']['proc_mobile'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav']) {  
               $forced_mobile = (isset($_SESSION['scriptcase']['force_mobile']) && $_SESSION['scriptcase']['force_mobile']) ? 'true' : 'false';
               $sc_app_data   = json_encode([ 
                   'forceMobile' => $forced_mobile, 
                   'appType' => 'summary', 
                   'improvements' => true, 
                   'displayOptionsButton' => false, 
                   'displayScrollUp' => true, 
                   'bottomToolbarFixed' => true, 
                   'mobileSimpleToolbar' => false, 
                   'scrollUpPosition' => 'R', 
                   'toolbarOrientation' => 'H', 
                   'mobilePanes' => 'true', 
                   'navigationBarButtons' => unserialize('a:0:{}'), 
                   'langs' => [ 
                       'lang_refined_search' => html_entity_decode($this->Ini->Nm_lang['lang_refined_search'], ENT_COMPAT, $_SESSION['scriptcase']['charset']), 
                       'lang_summary_search_button' => html_entity_decode($this->Ini->Nm_lang['lang_summary_search_button'], ENT_COMPAT, $_SESSION['scriptcase']['charset']), 
                       'lang_details_button' => html_entity_decode($this->Ini->Nm_lang['lang_details_button'], ENT_COMPAT, $_SESSION['scriptcase']['charset']), 
                   ], 
               ]); ?> 
        <input type="hidden" id="sc-mobile-app-data" value='<?php echo $sc_app_data; ?>' />
        <script type="text/javascript" src="../_lib/lib/js/nm_modal_panes.jquery.js"></script>
        <script type="text/javascript" src="../_lib/lib/js/nm_mobile.js"></script>
        <link rel='stylesheet' href='../_lib/lib/css/nm_mobile.css' type='text/css'/>
                    <script>
                        $(document).ready(function(){
                            bootstrapMobile();
                        });
                    </script>           <?php }
           $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery/css/smoothness/jquery-ui.css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/font-awesome/6.2/css/all.min.css\" type=\"text/css\" media=\"screen,print\" />\r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->Ini->str_schema_filter . "_calendar.css\" />\r\n");
           $nm_saida->saida(" <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->Ini->str_schema_filter . "_calendar" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" />\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"grid_resumen_ventas_ajax.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("   var sc_ajaxBg = '" . $this->Ini->Color_bg_ajax . "';\r\n");
           $nm_saida->saida("   var sc_ajaxBordC = '" . $this->Ini->Border_c_ajax . "';\r\n");
           $nm_saida->saida("   var sc_ajaxBordS = '" . $this->Ini->Border_s_ajax . "';\r\n");
           $nm_saida->saida("   var sc_ajaxBordW = '" . $this->Ini->Border_w_ajax . "';\r\n");
           $nm_saida->saida(" </script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"grid_resumen_ventas_jquery_2436.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"grid_resumen_ventas_message.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/scInput.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/jquery.scInput.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/jquery.scInput2.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/bluebird.min.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/nm_position.js\"></script>\r\n");
           $nm_saida->saida("        <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("          var sc_pathToTB = '" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/';\r\n");
           $nm_saida->saida("          var sc_tbLangClose = \"" . html_entity_decode($this->Ini->Nm_lang['lang_tb_close'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\";\r\n");
           $nm_saida->saida("          var sc_tbLangEsc = \"" . html_entity_decode($this->Ini->Nm_lang['lang_tb_esc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\";\r\n");
           $nm_saida->saida("        </script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox-compressed.js\"></script>\r\n");
           $nm_saida->saida(" <script type=\"text/javascript\" src=\"../_lib/lib/js/nm_position.js\"></script>\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_tab.css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_tab" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_appdiv.css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_appdiv" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_grid.css\"  type=\"text/css\"/> \r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\"  type=\"text/css\"/> \r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_filter.css\" /> \r\n");
           if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
           { 
               $nm_saida->saida("   <link rel=\"stylesheet\" href=\"" . $this->Ini->str_google_fonts . "\"  type=\"text/css\"/> \r\n");
           } 
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_btngrp.css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_btngrp" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/jquery_plugin/thickbox/thickbox.css\" type=\"text/css\" media=\"screen\" />\r\n");
           $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/buttons/" . $this->Ini->Str_btn_css . "\" /> \r\n");
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css'] = rand(0, 1000);
      }
      $NM_css = @fopen($this->Ini->root . $this->Ini->path_imag_temp . '/sc_css_grid_resumen_ventas_sum_' . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css'] . '.css', 'w');
      if (($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == "print" && strtoupper($nmgp_cor_print) == "PB") || $nmgp_tipo_pdf == "pb")
      {
          $NM_css_file = $this->Ini->str_schema_all . "_grid_bw.css";
          $NM_css_dir  = $this->Ini->str_schema_all . "_grid_bw" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      }
      else
      {
          $NM_css_file = $this->Ini->str_schema_all . "_grid.css";
          $NM_css_dir  = $this->Ini->str_schema_all . "_grid" . $_SESSION['scriptcase']['reg_conf']['css_dir'] . ".css";
      }
      if (is_file($this->Ini->path_css . $NM_css_file))
      {
          $NM_css_attr = file($this->Ini->path_css . $NM_css_file);
          foreach ($NM_css_attr as $NM_line_css)
          {
              $NM_line_css = str_replace("../../img", $this->Ini->path_imag_cab  , $NM_line_css);
              @fwrite($NM_css, "    " .  $NM_line_css . "\r\n");
          }
      }
      if (is_file($this->Ini->path_css . $NM_css_dir))
      {
          $NM_css_attr = file($this->Ini->path_css . $NM_css_dir);
          foreach ($NM_css_attr as $NM_line_css)
          {
              $NM_line_css = str_replace("../../img", $this->Ini->path_imag_cab  , $NM_line_css);
              @fwrite($NM_css, "    " .  $NM_line_css . "\r\n");
          }
      }
      @fclose($NM_css);
     $this->Ini->summary_css = $this->Ini->path_imag_temp . '/sc_css_grid_resumen_ventas_sum_' . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css'] . '.css';
     if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == "print")
     {
         $nm_saida->saida("  <style type=\"text/css\">\r\n");
         $NM_css = file($this->Ini->root . $this->Ini->path_imag_temp . '/sc_css_grid_resumen_ventas_sum_' . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css'] . '.css');
         foreach ($NM_css as $cada_css)
         {
              $nm_saida->saida("  " . str_replace("\r\n", "", $cada_css) . "\r\n");
         }
         $nm_saida->saida("  </style>\r\n");
     }
     else
     {
         $nm_saida->saida("   <link rel=\"stylesheet\" href=\"" . $this->Ini->summary_css . "\" type=\"text/css\" media=\"screen\" />\r\n");
     }
     $nm_saida->saida("   <link rel=\"stylesheet\" type=\"text/css\" href=\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_res_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) . ".css\" />\r\n");
     $nm_saida->saida(" <style type=\"text/css\">\r\n");
     if (!$this->Ini->Export_html_zip)     {
           $nm_saida->saida(" .scGridSummaryLabel a img[src\$='" . $this->Ini->Label_sort_desc . "'], \r\n");
           $nm_saida->saida(" .scGridSummaryLabel a img[src\$='" . $this->Ini->Label_sort_asc . "'], \r\n");
           $nm_saida->saida(" .scGridSummaryLabel a img[src\$='" . $this->arr_buttons['bgraf']['image'] . "']{opacity:1!important;} \r\n");
           $nm_saida->saida(" .scGridSummaryLabel a img{opacity:0;transition:all .2s;} \r\n");
           $nm_saida->saida(" .scGridSummaryLabel:HOVER a img{opacity:1;transition:all .2s;} \r\n");
           $nm_saida->saida(" .scGridSummaryLabel span > img[src\$='" . $this->Ini->Label_sort_desc . "'], \r\n");
           $nm_saida->saida(" .scGridSummaryLabel span > img[src\$='" . $this->Ini->Label_sort_asc . "']{opacity:1!important;} \r\n");
           $nm_saida->saida(" .scGridSummaryLabel span > img{opacity:0;transition:all .2s;} \r\n");
           $nm_saida->saida(" .scGridSummaryLabel:HOVER span > img{opacity:1;transition:all .2s;} \r\n");
     }
      $nm_saida->saida(" .scGridTabela TD { white-space: nowrap }\r\n");
      $nm_saida->saida(" </style>\r\n");
           $nm_saida->saida("   <script type=\"text/javascript\"> \r\n");
           $nm_saida->saida("   var scBtnGrpStatus = {};\r\n");
           $nm_saida->saida("   \$(function(){ \r\n");
           $nm_saida->saida("     $(\".scBtnGrpText\").mouseover(function() { $(this).addClass(\"scBtnGrpTextOver\"); }).mouseout(function() { $(this).removeClass(\"scBtnGrpTextOver\"); });\r\n");
           $nm_saida->saida("     $(\".scBtnGrpClick\").mouseup(function(event){\r\n");
           $nm_saida->saida("          event.preventDefault();\r\n");
           $nm_saida->saida("          if(event.target !== event.currentTarget) return;\r\n");
           $nm_saida->saida("          if($(this).find(\"a\").prop('href') != '')\r\n");
           $nm_saida->saida("          {\r\n");
           $nm_saida->saida("              $(this).find(\"a\").click();\r\n");
           $nm_saida->saida("          }\r\n");
           $nm_saida->saida("          else\r\n");
           $nm_saida->saida("          {\r\n");
           $nm_saida->saida("              eval($(this).find(\"a\").prop('onclick'));\r\n");
           $nm_saida->saida("          }\r\n");
           $nm_saida->saida("     });\r\n");
           $nm_saida->saida("   }); \r\n");
           $nm_saida->saida("   function scBtnGrpShow(sGroup) {\r\n");
           $nm_saida->saida("     if (typeof(scBtnGrpShowMobile) === typeof(function(){})) { return scBtnGrpShowMobile(sGroup); };\r\n");
           $nm_saida->saida("     $('#sc_btgp_btn_' + sGroup).addClass('selected');\r\n");
           $nm_saida->saida("     var btnPos = $('#sc_btgp_btn_' + sGroup).offset();\r\n");
           $nm_saida->saida("     scBtnGrpStatus[sGroup] = 'open';\r\n");
           $nm_saida->saida("     $('#sc_btgp_btn_' + sGroup).mouseout(function() {\r\n");
           $nm_saida->saida("       scBtnGrpStatus[sGroup] = '';\r\n");
           $nm_saida->saida("       setTimeout(function() {\r\n");
           $nm_saida->saida("         scBtnGrpHide(sGroup, false);\r\n");
           $nm_saida->saida("       }, 1000);\r\n");
           $nm_saida->saida("     }).mouseover(function() {\r\n");
           $nm_saida->saida("       scBtnGrpStatus[sGroup] = 'over';\r\n");
           $nm_saida->saida("     });\r\n");
           $nm_saida->saida("     $('#sc_btgp_div_' + sGroup + ' span a').click(function() {\r\n");
           $nm_saida->saida("       scBtnGrpStatus[sGroup] = 'out';\r\n");
           $nm_saida->saida("       scBtnGrpHide(sGroup, false);\r\n");
           $nm_saida->saida("     });\r\n");
           $nm_saida->saida("     $('#sc_btgp_div_' + sGroup).css({\r\n");
           $nm_saida->saida("       'left': btnPos.left\r\n");
           $nm_saida->saida("     })\r\n");
           $nm_saida->saida("     .mouseover(function() {\r\n");
           $nm_saida->saida("       scBtnGrpStatus[sGroup] = 'over';\r\n");
           $nm_saida->saida("     })\r\n");
           $nm_saida->saida("     .mouseleave(function() {\r\n");
           $nm_saida->saida("       scBtnGrpStatus[sGroup] = 'out';\r\n");
           $nm_saida->saida("       setTimeout(function() {\r\n");
           $nm_saida->saida("         scBtnGrpHide(sGroup, false);\r\n");
           $nm_saida->saida("       }, 1000);\r\n");
           $nm_saida->saida("     })\r\n");
           $nm_saida->saida("     .show('fast');\r\n");
           $nm_saida->saida("   }\r\n");
           $nm_saida->saida("   function scBtnGrpHide(sGroup, bForce) {\r\n");
           $nm_saida->saida("     if (bForce || 'over' != scBtnGrpStatus[sGroup]) {\r\n");
           $nm_saida->saida("       $('#sc_btgp_div_' + sGroup).hide('fast');\r\n");
           $nm_saida->saida("       $('#sc_btgp_btn_' + sGroup).removeClass('selected');\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("   }\r\n");
           $nm_saida->saida("   </script> \r\n");
           $nm_saida->saida("   <script type=\"text/javascript\">\r\n");
           $nm_saida->saida("     function scBtnGroupByShow(sUrl, sPos) {\r\n");
           $nm_saida->saida("       $.ajax({\r\n");
           $nm_saida->saida("         type: \"GET\",\r\n");
           $nm_saida->saida("         dataType: \"html\",\r\n");
           $nm_saida->saida("         url: sUrl\r\n");
           $nm_saida->saida("       }).done(function(data) {\r\n");
           $nm_saida->saida("         $(\"#sc_id_groupby_placeholder_\" + sPos).find(\"td\").html(\"\");\r\n");
           $nm_saida->saida("         $(\"#sc_id_groupby_placeholder_\" + sPos).find(\"td\").html(data);\r\n");
           $nm_saida->saida("         $(\"#sc_id_groupby_placeholder_\" + sPos).show();\r\n");
           $nm_saida->saida("       });\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("     function scBtnGroupByHide(sPos) {\r\n");
           $nm_saida->saida("       $(\"#sc_id_groupby_placeholder_\" + sPos).hide();\r\n");
           $nm_saida->saida("       $(\"#sc_id_groupby_placeholder_\" + sPos).find(\"td\").html(\"\");\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("     function scBtnSelCamposShow(sUrl, sPos) {\r\n");
           $nm_saida->saida("       $.ajax({\r\n");
           $nm_saida->saida("         type: \"GET\",\r\n");
           $nm_saida->saida("         dataType: \"html\",\r\n");
           $nm_saida->saida("         url: sUrl\r\n");
           $nm_saida->saida("       }).done(function(data) {\r\n");
           $nm_saida->saida("         $(\"#sc_id_sel_campos_placeholder_\" + sPos).find(\"td\").html(\"\");\r\n");
           $nm_saida->saida("         $(\"#sc_id_sel_campos_placeholder_\" + sPos).find(\"td\").html(data);\r\n");
           $nm_saida->saida("         $(\"#sc_id_sel_campos_placeholder_\" + sPos).show();\r\n");
           $nm_saida->saida("       });\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("     function scBtnSelCamposHide(sPos) {\r\n");
           $nm_saida->saida("       $(\"#sc_id_sel_campos_placeholder_\" + sPos).hide();\r\n");
           $nm_saida->saida("       $(\"#sc_id_sel_campos_placeholder_\" + sPos).find(\"td\").html(\"\");\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("     function scBtnOrderCamposShow(sUrl, sPos) {\r\n");
           $nm_saida->saida("       $.ajax({\r\n");
           $nm_saida->saida("         type: \"GET\",\r\n");
           $nm_saida->saida("         dataType: \"html\",\r\n");
           $nm_saida->saida("         url: sUrl\r\n");
           $nm_saida->saida("       }).done(function(data) {\r\n");
           $nm_saida->saida("         $(\"#sc_id_order_campos_placeholder_\" + sPos).find(\"td\").html(\"\");\r\n");
           $nm_saida->saida("         $(\"#sc_id_order_campos_placeholder_\" + sPos).find(\"td\").html(data);\r\n");
           $nm_saida->saida("         $(\"#sc_id_order_campos_placeholder_\" + sPos).show();\r\n");
           $nm_saida->saida("       });\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("     function scBtnOrderCamposHide(sPos) {\r\n");
           $nm_saida->saida("       $(\"#sc_id_order_campos_placeholder_\" + sPos).hide();\r\n");
           $nm_saida->saida("       $(\"#sc_id_order_campos_placeholder_\" + sPos).find(\"td\").html(\"\");\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("   </script>\r\n");
      if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'] && !$this->Ini->sc_export_ajax && !$this->Ini->Export_html_zip && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
      {
           $nm_saida->saida("   <script type=\"text/javascript\"> \r\n");
           $nm_saida->saida("   var Dyn_Ini   = true;\r\n");
           $nm_saida->saida("   var nmdg_Form = \"Fdyn_search\";\r\n");
           if (is_file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js"))
           {
               $Tb_err_js = file($this->Ini->root . $this->Ini->path_link . "_lib/js/tab_erro_" . $this->Ini->str_lang . ".js");
               foreach ($Tb_err_js as $Lines)
               {
                   if (NM_is_utf8($Lines) && $_SESSION['scriptcase']['charset'] != "UTF-8")
                   {
                       $Lines = sc_convert_encoding($Lines, $_SESSION['scriptcase']['charset'], "UTF-8");
                   }
                   echo $Lines;
               }
           }
           $Msg_Inval = "Invalido";
           if ($_SESSION['scriptcase']['charset'] != "UTF-8")
           {
               $Msg_Inval = sc_convert_encoding($Msg_Inval, $_SESSION['scriptcase']['charset'], "UTF-8");
           }
           $nm_saida->saida("  var SC_crit_inv = \"" . $Msg_Inval . "\";\r\n");
           $nm_saida->saida("  function SC_init_jquery(){ \r\n");
           $nm_saida->saida("     $(function(){ \r\n");
           $nm_saida->saida("     if (Dyn_Ini)\r\n");
           $nm_saida->saida("     {\r\n");
           $nm_saida->saida("         Dyn_Ini = false;\r\n");
          if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']))
          { 
           $nm_saida->saida("         SC_carga_evt_jquery_grid('all');\r\n");
          } 
           $nm_saida->saida("         scLoadScInput('input:text.sc-js-input');\r\n");
           $nm_saida->saida("     }\r\n");
           $nm_saida->saida("   }); \r\n");
           $nm_saida->saida("  }\r\n");
           $nm_saida->saida("  SC_init_jquery();\r\n");
           $nm_saida->saida("   </script>\r\n");
      }
           $nm_saida->saida("<link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/tippyjs/light.css\"></script>\r\n");
           $nm_saida->saida("<link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/tippyjs/light-border.css\"></script>\r\n");
           $nm_saida->saida("<link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/tippyjs/material.css\"></script>\r\n");
           $nm_saida->saida("<link rel=\"stylesheet\" href=\"" . $this->Ini->path_prod . "/third/tippyjs/translucent.css\"></script>\r\n");
           $nm_saida->saida("<script src=\"" . $this->Ini->path_prod . "/third/tippyjs/popper.min.js\"></script>\r\n");
           $nm_saida->saida("<script src=\"" . $this->Ini->path_prod . "/third/tippyjs/tippy-bundle.umd.min.js\"></script>\r\n");
           $cssJsContent = $this->generateRatingSummarizationJsCss();
           $nm_saida->saida("$cssJsContent\r\n");
           $nm_saida->saida("<style type=\"text/css\">\r\n");
           $nm_saida->saida("</style>\r\n");
           $nm_saida->saida("<script>\r\n");
           $nm_saida->saida("</script>\r\n");

if ($_SESSION['scriptcase']['proc_mobile'])
{
       $nm_saida->saida("   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />\r\n");
}

      $nm_saida->saida("</HEAD>\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['responsive_chart']['active']) {
          $summary_width = "width=\"100%\"";
          $chart_height = " style=\"height: 100%\"";
          $border_height = "height: 100%;";
      }
      else {
          $chart_height = '';
          $border_height = '';
          if ($_SESSION['scriptcase']['proc_mobile'])
          {
              $summary_width = "width=\"100%\"";
          }
          else
          {
              $summary_width = "width=\"\"";
          }
      }
      if (!$this->Ini->Export_html_zip && $this->Print_All && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word']) 
      {
          $nm_saida->saida(" <BODY id=\"grid_summary\" class=\"" . $this->css_scGridPage . " sc-app-grid\" style=\"-webkit-print-color-adjust: exact;\">\r\n");
          $nm_saida->saida("   <TABLE id=\"sc_table_print\" cellspacing=0 cellpadding=0 align=\"center\" valign=\"top\" " . $summary_width . ">\r\n");
          $nm_saida->saida("     <TR>\r\n");
          $nm_saida->saida("       <TD align=\"center\">\r\n");
          $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "prit_web_page()", "prit_web_page()", "Bprint_print", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + P)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
          $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("       </TD>\r\n");
          $nm_saida->saida("     </TR>\r\n");
          $nm_saida->saida("   </TABLE>\r\n");
          $nm_saida->saida("  <script type=\"text/javascript\">\r\n");
          $nm_saida->saida("     function prit_web_page()\r\n");
          $nm_saida->saida("     {\r\n");
          $nm_saida->saida("        document.getElementById('sc_table_print').style.display = 'none';\r\n");
          $nm_saida->saida("        var is_safari = navigator.userAgent.indexOf(\"Safari\") > -1;\r\n");
          $nm_saida->saida("        var is_chrome = navigator.userAgent.indexOf('Chrome') > -1\r\n");
          $nm_saida->saida("        if ((is_chrome) && (is_safari)) {is_safari=false;}\r\n");
          $nm_saida->saida("        window.print();\r\n");
          $nm_saida->saida("        if (is_safari) {setTimeout(\"window.close()\", 1000);} else {window.close();}\r\n");
          $nm_saida->saida("     }\r\n");
          $nm_saida->saida("  </script>\r\n");
      }
      else
      {
          $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['remove_margin'] ? 'margin: 0;' : '';
          $remove_border = isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['remove_border']) && $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['remove_border'] ? 'border-width: 0;' : '';
          $vertical_center = '';
          $nm_saida->saida(" <BODY id=\"grid_summary\" class=\"" . $this->css_scGridPage . " sc-app-grid\" style=\"" . $remove_margin . $vertical_center . "\">\r\n");
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
      {
           $Cod_Btn = nmButtonOutput($this->arr_buttons, "berrm_clse", "nmAjaxHideDebug()", "nmAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
           $nm_saida->saida("<div id=\"id_debug_window\" style=\"display: none;\" class='scDebugWindow'><table class=\"scFormMessageTable\">\r\n");
           $nm_saida->saida("<tr><td class=\"scFormMessageTitle\">" . $Cod_Btn . "&nbsp;&nbsp;Output</td></tr>\r\n");
           $nm_saida->saida("<tr><td class=\"scFormMessageMessage\" style=\"padding: 0px; vertical-align: top\"><div style=\"padding: 2px; height: 200px; width: 350px; overflow: auto\" id=\"id_debug_text\"></div></td></tr>\r\n");
           $nm_saida->saida("</table></div>\r\n");
      }
      $nm_saida->saida("  " . $this->Ini->Ajax_result_set . "\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] == "pdf")
      { 
              $nm_saida->saida("  <div style=\"height:1px;overflow:hidden\"><H1 style=\"font-size:0;padding:1px\">" . $this->Ini->Nm_lang['lang_othr_smry_msge'] . "</H1></div>\r\n");
      }
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "pdf" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'] && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
      { 
          $nm_saida->saida("      <STYLE>\r\n");
          $nm_saida->saida("       .ttip {border:1px solid black;font-size:12px;layer-background-color:lightyellow;background-color:lightyellow;color:black;}\r\n");
          $nm_saida->saida("      </STYLE>\r\n");
          $nm_saida->saida("      <div id=\"tooltip\" style=\"position:absolute;visibility:hidden;border:1px solid black;font-size:12px;layer-background-color:lightyellow;background-color:lightyellow;padding:1px;color:black;\"></div>\r\n");
      } 

      }

      $nm_saida->saida("<TABLE id=\"main_table_res\" cellspacing=0 cellpadding=0 align=\"center\" valign=\"top\" " . $summary_width . $chart_height . ">\r\n");
      $nm_saida->saida(" <TR class='sc-mobile-inner-control'>\r\n");
      $nm_saida->saida("  <TD class='sc-mobile-inner-control' " . $chart_height . ">\r\n");
      $nm_saida->saida("  <div class=\"scGridBorder\" style=\"" . $border_height . (isset($remove_border) ? $remove_border : '') . "\">\r\n");
       if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
       { 
           $nm_saida->saida("  <div id=\"id_div_process\" style=\"display: none; margin: 10px; whitespace: nowrap\" class=\"scFormProcessFixed\"><span class=\"scFormProcess\"><img border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" />&nbsp;" . $this->Ini->Nm_lang['lang_othr_prcs'] . "...</span></div>\r\n");
           $nm_saida->saida("  <div id=\"id_div_process_block\" style=\"display: none; margin: 10px; whitespace: nowrap\"><span class=\"scFormProcess\"><img border=\"0\" src=\"" . $this->Ini->path_icones . "/scriptcase__NM__ajax_load.gif\" align=\"absmiddle\" />&nbsp;" . $this->Ini->Nm_lang['lang_othr_prcs'] . "...</span></div>\r\n");
           $nm_saida->saida("  <div id=\"id_fatal_error\" class=\"scGridLabel\" style=\"display: none; position: absolute\"></div>\r\n");
       } 
      $nm_saida->saida("  <table width='100%' cellspacing=0 cellpadding=0" . $chart_height . " class='sc-mobile-inner-control'>\r\n");
      $nm_saida->saida("<TR class='sc-mobile-inner-control'>\r\n");
      $nm_saida->saida("<TD style=\"padding: 0px; vertical-align: initial\" class='sc-mobile-inner-control'>\r\n");
      $nm_saida->saida("<TABLE style=\"padding: 0px; border-spacing: 0px; border-width: 0px; border-collapse: collapse;  vertical-align: top; width: 100%;\" class='sc-mobile-inner-control'>\r\n");
   }

   //-----  top
   function monta_barra_top_normal()
   {
      global $nm_url_saida, $nm_apl_dependente, $nm_saida;
      $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
      {
         $nm_saida->saida(" <TR align=\"center\" id=\"obj_barra_top\">\r\n");
         $nm_saida->saida("  <TD class=\"" . $this->css_scGridTabelaTd . "\">\r\n");
         $nm_saida->saida("   <TABLE class=\"" . $this->css_scGridToolbar . "\" style=\"padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top; width: 100%;\">\r\n");
         $nm_saida->saida("    <TR class=\"" . $this->css_scGridToolbarPadd . "_tr\">\r\n");
         $nm_saida->saida("     <TD class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"left\">\r\n");
         $NM_btn  = false;
         $NM_Gbtn = false;
      if (!$this->grid_emb_form && $this->nmgp_botoes['group_1'] == "on")
      {
          $nm_saida->saida("           <script type=\"text/javascript\">var sc_itens_btgp_group_1_top = false;</script>\r\n");
          $Cod_Btn = nmButtonOutput($this->arr_buttons, "group_group_1", "scBtnGrpShow('group_1_top')", "scBtnGrpShow('group_1_top')", "sc_btgp_btn_group_1_top", "", "" . $this->Ini->Nm_lang['lang_btns_expt'] . "", "", "absmiddle", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_expt'] . "", "", "", "__sc_grp__", "text_fontawesomeicon", "text_right", "", "", "", "", "", "", "");
          $nm_saida->saida("           $Cod_Btn\r\n");
          $NM_btn  = true;
          $NM_Gbtn = false;
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 'top', 'list', 'ini');
          $nm_saida->saida("           $Cod_Btn\r\n");
      if (!$this->grid_emb_form && $this->nmgp_botoes['pdf'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rpdf_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['pdf'][] = "Rpdf_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bpdf", "", "", "Rpdf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + P)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_pdf.php?nm_opc=pdf_res&nm_target=1&nm_cor=cor&papel=8&orientacao=1&bookmarks=1&largura=1200&conf_larg=S&conf_fonte=10&grafico=XX&sc_ver_93=s&nm_tem_gb=s&nm_res_cons=s&nm_ini_pdf_res=grid,resume&nm_all_modules=grid,resume&password=n&summary_export_columns=S&nm_label_group=N&nm_all_cab=S&nm_all_label=S&pdf_zip=N&nm_orient_grid=2&origem=res&language=es&conf_socor=N&script_case_init=" . $this->Ini->sc_page . "&app_name=grid_resumen_ventas&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
         if ($NM_Gbtn)
         {
                  $nm_saida->saida("           </td></tr><tr><td class=\"scBtnGrpBackground\">\r\n");
            $NM_Gbtn = false;
         }
      if (!$this->grid_emb_form && $this->nmgp_botoes['word'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rword_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['word'][] = "Rword_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bword", "", "", "Rword_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + W)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_word.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&nm_cor=CO&nm_res_cons=s&nm_ini_word_res=grid,resume&nm_all_modules=grid,resume&password=n&origem=res&language=es&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['xls'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rxls_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['xls'][] = "Rxls_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bexcel", "", "", "Rxls_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + X)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_xls.php?script_case_init=" . $this->Ini->sc_page . "&app_name=grid_resumen_ventas&nm_tp_xls=xlsx&nm_tot_xls=S&nm_tot_xls=S&nm_res_cons=s&nm_ini_xls_res=grid,resume&nm_all_modules=grid,resume&password=n&summary_export_columns=S&origem=res&language=es&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
         if ($NM_Gbtn)
         {
                  $nm_saida->saida("           </td></tr><tr><td class=\"scBtnGrpBackground\">\r\n");
            $NM_Gbtn = false;
         }
      if (!$this->grid_emb_form && $this->nmgp_botoes['xml'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rxml_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['xml'][] = "Rxml_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bxml", "", "", "Rxml_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + M)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_xml.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&password=n&nm_res_cons=s&nm_ini_xml_res=grid,resume&nm_all_modules=grid,resume&nm_xml_tag=tag&nm_xml_label=S&language=es&origem=res&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['csv'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rcsv_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['csv'][] = "Rcsv_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bcsv", "", "", "Rcsv_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + C)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_csv.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&nm_res_cons=s&nm_ini_csv_res=grid,resume&nm_all_modules=grid,resume&password=n&nm_delim_line=1&nm_delim_col=1&nm_delim_dados=1&nm_label_csv=N&language=es&origem=res&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['rtf'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rrtf_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['rtf'][] = "Rrtf_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "brtf", "nm_gp_move('rtf_res', '1');", "nm_gp_move('rtf_res', '1');", "Rrtf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + R)", "", "", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
         if ($NM_Gbtn)
         {
                  $nm_saida->saida("           </td></tr><tr><td class=\"scBtnGrpBackground\">\r\n");
            $NM_Gbtn = false;
         }
      if (!$this->grid_emb_form && $this->nmgp_botoes['print'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rprinttop\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['print'][] = "Rprint_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "", "", "Rprint_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + P)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_print.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&nm_opc=resumo&nm_cor=CO&nm_res_cons=s&nm_ini_prt_res=grid,resume&nm_all_modules=grid,resume&password=n&origem=res&language=es&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 'top', 'list', 'fim');
          $nm_saida->saida("           $Cod_Btn\r\n");
          $nm_saida->saida("           <script type=\"text/javascript\">\r\n");
          $nm_saida->saida("             if (!sc_itens_btgp_group_1_top) {\r\n");
          $nm_saida->saida("                 document.getElementById('sc_btgp_btn_group_1_top').style.display='none'; }\r\n");
          $nm_saida->saida("           </script>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['group_2'] == "on")
      {
          $nm_saida->saida("           <script type=\"text/javascript\">var sc_itens_btgp_group_2_top = false;</script>\r\n");
          $Cod_Btn = nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_top')", "scBtnGrpShow('group_2_top')", "sc_btgp_btn_group_2_top", "", "" . $this->Ini->Nm_lang['lang_btns_expt_email_title'] . "", "", "absmiddle", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_expt_email'] . "", "", "", "__sc_grp__", "text_fontawesomeicon", "text_right", "", "", "", "", "", "", "");
          $nm_saida->saida("           $Cod_Btn\r\n");
          $NM_btn  = true;
          $NM_Gbtn = false;
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 'top', 'list', 'ini');
          $nm_saida->saida("           $Cod_Btn\r\n");
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 'top', 'list', 'fim');
          $nm_saida->saida("           $Cod_Btn\r\n");
          $nm_saida->saida("           <script type=\"text/javascript\">\r\n");
          $nm_saida->saida("             if (!sc_itens_btgp_group_2_top) {\r\n");
          $nm_saida->saida("                 document.getElementById('sc_btgp_btn_group_2_top').style.display='none'; }\r\n");
          $nm_saida->saida("           </script>\r\n");
      }
      if ($this->nmgp_botoes['chart_settings'] == 'on' && !$this->grid_emb_form && !$this->NM_res_sem_reg)
      {
         $this->nm_btn_exist['chart_settings'][] = "Rconfig_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "smry_conf", "summaryConfig();", "summaryConfig();", "Rconfig_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
      }
      if ($this->nmgp_botoes['groupby'] == "on" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opc_psq'] && !$this->grid_emb_form && !$this->NM_res_sem_reg)
      {
          $Q_free  = false;
          $Q_count = 0;
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_All_Groupby'] as $QB => $Tp)
          {
              if (!in_array($QB, $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Groupby_hide']) && $Tp == "all")
              {
                  $Q_count++;
                  if ($QB == "sc_free_group_by")
                  {
                      $Q_free = true;
                  }
              }
          }
          if ($Q_count > 1 || $Q_free)
          {
             $this->nm_btn_exist['groupby'][] = "sel_groupby_top";
              $Cod_Btn = nmButtonOutput($this->arr_buttons, "bgroupby", "scBtnGroupByShow('" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_sel_groupby.php?opc_ret=resumo&path_img=" . $this->Ini->path_img_global . "&path_btn=" . $this->Ini->path_botoes . "&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&embbed_groupby=Y&toolbar_pos=top', 'top');", "scBtnGroupByShow('" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_sel_groupby.php?opc_ret=resumo&path_img=" . $this->Ini->path_img_global . "&path_btn=" . $this->Ini->path_botoes . "&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&embbed_groupby=Y&toolbar_pos=top', 'top');", "sel_groupby_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + G)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
              $nm_saida->saida("           $Cod_Btn \r\n");
          }
              $NM_btn = true;
      }
      if ($this->nmgp_botoes['chart_detail'] == 'on' && !$this->grid_emb_form && !$this->NM_res_sem_reg)
      {
         $this->nm_btn_exist['chart_detail'][] = "Rrotac_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "blink_resumogrid", "nm_gp_move('inicio', '0');", "nm_gp_move('inicio', '0');", "Rrotac_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Enter)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
      }
         if (is_file("grid_resumen_ventas_help.txt") && !$this->grid_emb_form && !$this->NM_res_sem_reg)
         {
            $Arq_WebHelp = file("grid_resumen_ventas_help.txt"); 
            if (isset($Arq_WebHelp[0]) && !empty($Arq_WebHelp[0]))
            {
                $Arq_WebHelp[0] = str_replace("\r\n" , "", trim($Arq_WebHelp[0]));
                $Tmp = explode(";", $Arq_WebHelp[0]); 
                foreach ($Tmp as $Cada_help)
                {
                    $Tmp1 = explode(":", $Cada_help); 
                    if (!empty($Tmp1[0]) && isset($Tmp1[1]) && !empty($Tmp1[1]) && $Tmp1[0] == "res" && is_file($this->Ini->root . $this->Ini->path_help . $Tmp1[1]))
                    {
                        $Cod_Btn = nmButtonOutput($this->arr_buttons, "bhelp", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "Rhelp_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
                        $nm_saida->saida("           $Cod_Btn \r\n");
                    }
                }
            }
         }
      if ($this->nmgp_botoes['chart_exit'] == 'on' && !$this->grid_emb_form)
      {
          $this->nm_btn_exist['exit'][] = "Rsai_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bvoltar", "nm_gp_move('igual', '0');", "nm_gp_move('igual', '0');", "Rsai_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
      }
         $nm_saida->saida("     </TD> \r\n");
         $nm_saida->saida("     <TD class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"center\">\r\n");
         $NM_btn = false;
         $NM_Gbtn = false;
         $nm_saida->saida("     </TD> \r\n");
         $nm_saida->saida("     <TD class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"right\">\r\n");
         $NM_btn = false;
         $NM_Gbtn = false;
         $nm_saida->saida("     </TD>\r\n");
         $nm_saida->saida("    </TR>\r\n");
         $nm_saida->saida("   </TABLE>\r\n");
         $nm_saida->saida("  </TD>\r\n");
         $nm_saida->saida(" </TR>\r\n");
      }
   }

   //-----  top
   function monta_barra_top_mobile()
   {
      global $nm_url_saida, $nm_apl_dependente, $nm_saida;
      $HTTP_REFERER = (isset($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : ""; 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opcao'] != "print" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
      {
         $nm_saida->saida(" <TR align=\"center\" id=\"obj_barra_top\">\r\n");
         $nm_saida->saida("  <TD class=\"" . $this->css_scGridTabelaTd . "\">\r\n");
         $nm_saida->saida("   <TABLE class=\"" . $this->css_scGridToolbar . "\" style=\"padding: 0px; border-spacing: 0px; border-width: 0px; vertical-align: top; width: 100%;\">\r\n");
         $nm_saida->saida("    <TR class=\"" . $this->css_scGridToolbarPadd . "_tr\">\r\n");
         $nm_saida->saida("     <TD class=\"" . $this->css_scGridToolbarPadd . "\" nowrap valign=\"middle\" align=\"left\">\r\n");
         $NM_btn  = false;
         $NM_Gbtn = false;
      if (!$this->grid_emb_form && $this->nmgp_botoes['group_1'] == "on")
      {
          $nm_saida->saida("           <script type=\"text/javascript\">var sc_itens_btgp_group_1_top = false;</script>\r\n");
          $Cod_Btn = nmButtonOutput($this->arr_buttons, "group_group_1", "scBtnGrpShow('group_1_top')", "scBtnGrpShow('group_1_top')", "sc_btgp_btn_group_1_top", "", "" . $this->Ini->Nm_lang['lang_btns_expt'] . "", "", "absmiddle", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_expt'] . "", "", "", "__sc_grp__", "text_fontawesomeicon", "text_right", "", "", "", "", "", "", "");
          $nm_saida->saida("           $Cod_Btn\r\n");
          $NM_btn  = true;
          $NM_Gbtn = false;
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 'top', 'list', 'ini');
          $nm_saida->saida("           $Cod_Btn\r\n");
      if (!$this->grid_emb_form && $this->nmgp_botoes['pdf'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rpdf_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['pdf'][] = "Rpdf_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bpdf", "", "", "Rpdf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + P)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_pdf.php?nm_opc=pdf_res&nm_target=1&nm_cor=cor&papel=8&orientacao=1&bookmarks=1&largura=1200&conf_larg=S&conf_fonte=10&grafico=XX&sc_ver_93=s&nm_tem_gb=s&nm_res_cons=s&nm_ini_pdf_res=grid,resume&nm_all_modules=grid,resume&password=n&summary_export_columns=S&nm_label_group=N&nm_all_cab=S&nm_all_label=S&pdf_zip=N&nm_orient_grid=2&origem=res&language=es&conf_socor=N&script_case_init=" . $this->Ini->sc_page . "&app_name=grid_resumen_ventas&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
         if ($NM_Gbtn)
         {
                  $nm_saida->saida("           </td></tr><tr><td class=\"scBtnGrpBackground\">\r\n");
            $NM_Gbtn = false;
         }
      if (!$this->grid_emb_form && $this->nmgp_botoes['word'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rword_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['word'][] = "Rword_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bword", "", "", "Rword_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + W)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_word.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&nm_cor=CO&nm_res_cons=s&nm_ini_word_res=grid,resume&nm_all_modules=grid,resume&password=n&origem=res&language=es&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['xls'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rxls_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['xls'][] = "Rxls_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bexcel", "", "", "Rxls_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + X)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_xls.php?script_case_init=" . $this->Ini->sc_page . "&app_name=grid_resumen_ventas&nm_tp_xls=xlsx&nm_tot_xls=S&nm_tot_xls=S&nm_res_cons=s&nm_ini_xls_res=grid,resume&nm_all_modules=grid,resume&password=n&summary_export_columns=S&origem=res&language=es&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
         if ($NM_Gbtn)
         {
                  $nm_saida->saida("           </td></tr><tr><td class=\"scBtnGrpBackground\">\r\n");
            $NM_Gbtn = false;
         }
      if (!$this->grid_emb_form && $this->nmgp_botoes['xml'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rxml_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['xml'][] = "Rxml_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bxml", "", "", "Rxml_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + M)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_xml.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&password=n&nm_res_cons=s&nm_ini_xml_res=grid,resume&nm_all_modules=grid,resume&nm_xml_tag=tag&nm_xml_label=S&language=es&origem=res&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['csv'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rcsv_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['csv'][] = "Rcsv_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bcsv", "", "", "Rcsv_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + C)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_csv.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&nm_res_cons=s&nm_ini_csv_res=grid,resume&nm_all_modules=grid,resume&password=n&nm_delim_line=1&nm_delim_col=1&nm_delim_dados=1&nm_label_csv=N&language=es&origem=res&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['rtf'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rrtf_top\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['rtf'][] = "Rrtf_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "brtf", "nm_gp_move('rtf_res', '1');", "nm_gp_move('rtf_res', '1');", "Rrtf_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + R)", "", "", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
         if ($NM_Gbtn)
         {
                  $nm_saida->saida("           </td></tr><tr><td class=\"scBtnGrpBackground\">\r\n");
            $NM_Gbtn = false;
         }
      if (!$this->grid_emb_form && $this->nmgp_botoes['print'] == "on" && !$this->NM_res_sem_reg)
      {
          $nm_saida->saida("           <script type=\"text/javascript\">sc_itens_btgp_group_1_top = true;</script>\r\n");
          $nm_saida->saida("            <div id=\"div_Rprinttop\" class=\"scBtnGrpText scBtnGrpClick\">\r\n");
         $this->nm_btn_exist['print'][] = "Rprint_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bprint", "", "", "Rprint_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + P)", "thickbox", "" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_config_print.php?script_case_init=" . $this->Ini->sc_page . "&summary_export_columns=S&nm_opc=resumo&nm_cor=CO&nm_res_cons=s&nm_ini_prt_res=grid,resume&nm_all_modules=grid,resume&password=n&origem=res&language=es&KeepThis=true&TB_iframe=true&modal=true", "group_1", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
          $nm_saida->saida("            </div>\r\n");
      }
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_1", 'group_1', 'top', 'list', 'fim');
          $nm_saida->saida("           $Cod_Btn\r\n");
          $nm_saida->saida("           <script type=\"text/javascript\">\r\n");
          $nm_saida->saida("             if (!sc_itens_btgp_group_1_top) {\r\n");
          $nm_saida->saida("                 document.getElementById('sc_btgp_btn_group_1_top').style.display='none'; }\r\n");
          $nm_saida->saida("           </script>\r\n");
      }
      if (!$this->grid_emb_form && $this->nmgp_botoes['group_2'] == "on")
      {
          $nm_saida->saida("           <script type=\"text/javascript\">var sc_itens_btgp_group_2_top = false;</script>\r\n");
          $Cod_Btn = nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_top')", "scBtnGrpShow('group_2_top')", "sc_btgp_btn_group_2_top", "", "" . $this->Ini->Nm_lang['lang_btns_expt_email_title'] . "", "", "absmiddle", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_expt_email'] . "", "", "", "__sc_grp__", "text_fontawesomeicon", "text_right", "", "", "", "", "", "", "");
          $nm_saida->saida("           $Cod_Btn\r\n");
          $NM_btn  = true;
          $NM_Gbtn = false;
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 'top', 'list', 'ini');
          $nm_saida->saida("           $Cod_Btn\r\n");
          $Cod_Btn = nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 'top', 'list', 'fim');
          $nm_saida->saida("           $Cod_Btn\r\n");
          $nm_saida->saida("           <script type=\"text/javascript\">\r\n");
          $nm_saida->saida("             if (!sc_itens_btgp_group_2_top) {\r\n");
          $nm_saida->saida("                 document.getElementById('sc_btgp_btn_group_2_top').style.display='none'; }\r\n");
          $nm_saida->saida("           </script>\r\n");
      }
      if ($this->nmgp_botoes['chart_settings'] == 'on' && !$this->grid_emb_form && !$this->NM_res_sem_reg)
      {
         $this->nm_btn_exist['chart_settings'][] = "Rconfig_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "smry_conf", "summaryConfig();", "summaryConfig();", "Rconfig_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
      }
      if ($this->nmgp_botoes['groupby'] == "on" && !$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['opc_psq'] && !$this->grid_emb_form && !$this->NM_res_sem_reg)
      {
          $Q_free  = false;
          $Q_count = 0;
          foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_All_Groupby'] as $QB => $Tp)
          {
              if (!in_array($QB, $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Groupby_hide']) && $Tp == "all")
              {
                  $Q_count++;
                  if ($QB == "sc_free_group_by")
                  {
                      $Q_free = true;
                  }
              }
          }
          if ($Q_count > 1 || $Q_free)
          {
             $this->nm_btn_exist['groupby'][] = "sel_groupby_top";
              $Cod_Btn = nmButtonOutput($this->arr_buttons, "bgroupby", "scBtnGroupByShow('" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_sel_groupby.php?opc_ret=resumo&path_img=" . $this->Ini->path_img_global . "&path_btn=" . $this->Ini->path_botoes . "&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&embbed_groupby=Y&toolbar_pos=top', 'top');", "scBtnGroupByShow('" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_sel_groupby.php?opc_ret=resumo&path_img=" . $this->Ini->path_img_global . "&path_btn=" . $this->Ini->path_botoes . "&script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&embbed_groupby=Y&toolbar_pos=top', 'top');", "sel_groupby_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + G)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
              $nm_saida->saida("           $Cod_Btn \r\n");
          }
              $NM_btn = true;
      }
      if ($this->nmgp_botoes['chart_detail'] == 'on' && !$this->grid_emb_form && !$this->NM_res_sem_reg)
      {
         $this->nm_btn_exist['chart_detail'][] = "Rrotac_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "blink_resumogrid", "nm_gp_move('inicio', '0');", "nm_gp_move('inicio', '0');", "Rrotac_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Enter)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
      }
         if (is_file("grid_resumen_ventas_help.txt") && !$this->grid_emb_form && !$this->NM_res_sem_reg)
         {
            $Arq_WebHelp = file("grid_resumen_ventas_help.txt"); 
            if (isset($Arq_WebHelp[0]) && !empty($Arq_WebHelp[0]))
            {
                $Arq_WebHelp[0] = str_replace("\r\n" , "", trim($Arq_WebHelp[0]));
                $Tmp = explode(";", $Arq_WebHelp[0]); 
                foreach ($Tmp as $Cada_help)
                {
                    $Tmp1 = explode(":", $Cada_help); 
                    if (!empty($Tmp1[0]) && isset($Tmp1[1]) && !empty($Tmp1[1]) && $Tmp1[0] == "res" && is_file($this->Ini->root . $this->Ini->path_help . $Tmp1[1]))
                    {
                        $Cod_Btn = nmButtonOutput($this->arr_buttons, "bhelp", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "nm_open_popup('" . $this->Ini->path_help . $Tmp1[1] . "');", "Rhelp_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
                        $nm_saida->saida("           $Cod_Btn \r\n");
                    }
                }
            }
         }
      if ($this->nmgp_botoes['chart_exit'] == 'on' && !$this->grid_emb_form)
      {
          $this->nm_btn_exist['exit'][] = "Rsai_top";
         $Cod_Btn = nmButtonOutput($this->arr_buttons, "bvoltar", "nm_gp_move('igual', '0');", "nm_gp_move('igual', '0');", "Rsai_top", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
         $nm_saida->saida("           $Cod_Btn \r\n");
      }
         $nm_saida->saida("     </TD>\r\n");
         $nm_saida->saida("    </TR>\r\n");
         $nm_saida->saida("   </TABLE>\r\n");
         $nm_saida->saida("  </TD>\r\n");
         $nm_saida->saida(" </TR>\r\n");
      }
   }

   function monta_barra_top()
   {
       $this->grid_emb_form = false;
       if(isset($_SESSION['scriptcase']['proc_mobile']) && $_SESSION['scriptcase']['proc_mobile'])
       {
           $this->monta_barra_top_mobile();
       }
       else
       {
           $this->monta_barra_top_normal();
       }
   }
   function monta_barra_bot()
   {
       $this->grid_emb_form = false;
       if(isset($_SESSION['scriptcase']['proc_mobile']) && $_SESSION['scriptcase']['proc_mobile'])
       {
           $this->monta_barra_bot_mobile();
       }
       else
       {
           $this->monta_barra_bot_normal();
       }
   }
   function monta_embbed_placeholder_top()
   {
      global $nm_saida;
      $nm_saida->saida("     <tr id=\"sc_id_save_grid_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
      $nm_saida->saida("     <tr id=\"sc_id_groupby_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
      $nm_saida->saida("     <tr id=\"sc_id_sel_campos_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
      $nm_saida->saida("     <tr id=\"sc_id_order_campos_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
   }
   function monta_embbed_placeholder_mobile_top()
   {
      global $nm_saida;
      $nm_saida->saida("     <tr id=\"sc_id_save_grid_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
      $nm_saida->saida("     <tr id=\"sc_id_groupby_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
      $nm_saida->saida("     <tr id=\"sc_id_sel_campos_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
      $nm_saida->saida("     <tr id=\"sc_id_order_campos_placeholder_top\" style=\"display: none\">\r\n");
      $nm_saida->saida("      <td>\r\n");
      $nm_saida->saida("      </td>\r\n");
      $nm_saida->saida("     </tr>\r\n");
   }
   //----- 
   function monta_html_fim()
   {
      global $nm_saida;
      $str_pbfile = $this->Ini->root . $this->Ini->path_imag_temp . '/sc_pb_' . session_id() . '.tmp';
      $nm_saida->saida("</TABLE>\r\n");
      $nm_saida->saida("<link rel=\"stylesheet\" type=\"text/css\" href=\"../_lib/css/" . $this->Ini->str_schema_all . "_sweetalert.css\" />\r\n");
      $nm_saida->saida("<script type=\"text/javascript\" src=\"" . $_SESSION['scriptcase']['grid_resumen_ventas']['glo_nm_path_prod'] . "/third/sweetalert/sweetalert2.all.min.js\"></script>\r\n");
      $nm_saida->saida("<script type=\"text/javascript\" src=\"" . $_SESSION['scriptcase']['grid_resumen_ventas']['glo_nm_path_prod'] . "/third/sweetalert/polyfill.min.js\"></script>\r\n");
      $nm_saida->saida("<script type=\"text/javascript\" src=\"../_lib/lib/js/frameControl.js\"></script>\r\n");
      $confirmButtonClass = '';
      $cancelButtonClass  = '';
      $confirmButtonText  = $this->Ini->Nm_lang['lang_btns_cfrm'];
      $cancelButtonText   = $this->Ini->Nm_lang['lang_btns_cncl'];
      $confirmButtonFA    = '';
      $cancelButtonFA     = '';
      $confirmButtonFAPos = '';
      $cancelButtonFAPos  = '';
      if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['style']) && '' != $this->arr_buttons['bsweetalert_ok']['style']) {
          $confirmButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_ok']['style'];
      }
      if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['style']) && '' != $this->arr_buttons['bsweetalert_cancel']['style']) {
          $cancelButtonClass = 'scButton_' . $this->arr_buttons['bsweetalert_cancel']['style'];
      }
      if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['value']) && '' != $this->arr_buttons['bsweetalert_ok']['value']) {
          $confirmButtonText = $this->arr_buttons['bsweetalert_ok']['value'];
      }
      if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['value']) && '' != $this->arr_buttons['bsweetalert_cancel']['value']) {
          $cancelButtonText = $this->arr_buttons['bsweetalert_cancel']['value'];
      }
      if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_ok']['fontawesomeicon']) {
          $confirmButtonFA = $this->arr_buttons['bsweetalert_ok']['fontawesomeicon'];
      }
      if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) && '' != $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon']) {
          $cancelButtonFA = $this->arr_buttons['bsweetalert_cancel']['fontawesomeicon'];
      }
      if (isset($this->arr_buttons['bsweetalert_ok']) && isset($this->arr_buttons['bsweetalert_ok']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_ok']['display_position']) {
          $confirmButtonFAPos = 'text_right';
      }
      if (isset($this->arr_buttons['bsweetalert_cancel']) && isset($this->arr_buttons['bsweetalert_cancel']['display_position']) && 'img_right' != $this->arr_buttons['bsweetalert_cancel']['display_position']) {
          $cancelButtonFAPos = 'text_right';
      }
      $nm_saida->saida("<script type=\"text/javascript\">\r\n");
      $nm_saida->saida("  var scSweetAlertConfirmButton = \"" . $confirmButtonClass . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertCancelButton = \"" . $cancelButtonClass . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertConfirmButtonText = \"" . $confirmButtonText . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertCancelButtonText = \"" . $cancelButtonText . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertConfirmButtonFA = \"" . $confirmButtonFA . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertCancelButtonFA = \"" . $cancelButtonFA . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertConfirmButtonFAPos = \"" . $confirmButtonFAPos . "\";\r\n");
      $nm_saida->saida("  var scSweetAlertCancelButtonFAPos = \"" . $cancelButtonFAPos . "\";\r\n");
      $nm_saida->saida("</script>\r\n");
      $nm_saida->saida("<script type=\"text/javascript\">\r\n");
      $nm_saida->saida("$(function() {\r\n");
      if ((isset($this->nm_mens_alert) && count($this->nm_mens_alert)) || (isset($this->Ini->nm_mens_alert) && count($this->Ini->nm_mens_alert))) {
   if (isset($this->Ini->nm_mens_alert) && !empty($this->Ini->nm_mens_alert))
   {
       if (isset($this->nm_mens_alert) && !empty($this->nm_mens_alert))
       {
           $this->nm_mens_alert   = array_merge($this->Ini->nm_mens_alert, $this->nm_mens_alert);
           $this->nm_params_alert = array_merge($this->Ini->nm_params_alert, $this->nm_params_alert);
       }
       else
       {
           $this->nm_mens_alert   = $this->Ini->nm_mens_alert;
           $this->nm_params_alert = $this->Ini->nm_params_alert;
       }
   }
   if (isset($this->nm_mens_alert) && !empty($this->nm_mens_alert))
   {
       foreach ($this->nm_mens_alert as $i_alert => $mensagem)
       {
           $alertParams = array();
           if (isset($this->nm_params_alert[$i_alert]))
           {
               foreach ($this->nm_params_alert[$i_alert] as $paramName => $paramValue)
               {
                   if (in_array($paramName, array('title', 'timer', 'confirmButtonText', 'confirmButtonFA', 'confirmButtonFAPos', 'cancelButtonText', 'cancelButtonFA', 'cancelButtonFAPos', 'footer', 'width', 'padding')))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif (in_array($paramName, array('showConfirmButton', 'showCancelButton', 'toast')) && in_array($paramValue, array(true, false)))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif ('position' == $paramName && in_array($paramValue, array('top', 'top-start', 'top-end', 'center', 'center-start', 'center-end', 'bottom', 'bottom-start', 'bottom-end')))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif ('type' == $paramName && in_array($paramValue, array('warning', 'error', 'success', 'info', 'question')))
                   {
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
                   elseif ('background' == $paramName)
                   {
                       $image_param = $paramValue;
                       preg_match_all('/url\(([\s])?(["|\'])?(.*?)(["|\'])?([\s])?\)/i', $paramValue, $matches, PREG_PATTERN_ORDER);
                       if (isset($matches[3])) {
                           foreach ($matches[3] as $match) {
                               if ('http:' != substr($match, 0, 5) && 'https:' != substr($match, 0, 6) && '/' != substr($match, 0, 1)) {
                                   $image_param = str_replace($match, "{$this->Ini->path_img_global}/{$match}", $image_param);
                               }
                           }
                       }
                       $paramValue = $image_param;
                       $alertParams[$paramName] = NM_charset_to_utf8($paramValue);
                   }
               }
           }
           $jsonParams = json_encode($alertParams);
           if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
           { 
               $this->Ini->Arr_result['AlertJS'][] = NM_charset_to_utf8($mensagem);
               $this->Ini->Arr_result['AlertJSParam'][] = $alertParams;
           } 
           else 
           { 
$nm_saida->saida("       scJs_alert('" . $mensagem . "', $jsonParams);\r\n");
           } 
       }
   }
      }
      $nm_saida->saida("});\r\n");
      $nm_saida->saida("</script>\r\n");
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'])
      { 
          return;
      } 
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
      { 
      $nm_saida->saida("</BODY>\r\n");
      $nm_saida->saida("</HTML>\r\n");
          return;
      } 
if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['doc_word'])
{ 
      $nm_saida->saida("</TABLE>\r\n");
      $nm_saida->saida("</div>\r\n");
      $nm_saida->saida("</TD>\r\n");
      $nm_saida->saida("</TR>\r\n");
      $nm_saida->saida("</TABLE>\r\n");
       $nm_saida->saida("<script type=\"text/javascript\">\r\n");
       $nm_saida->saida("function summaryConfig() {\r\n");
       $nm_saida->saida("  tb_show('', 'grid_resumen_ventas_config_pivot.php?nome_apl=grid_resumen_ventas&sc_page=" . NM_encode_input($this->Ini->sc_page) . "&language=es&TB_iframe=true&modal=true&height=300&width=500', '');\r\n");
       $nm_saida->saida("}\r\n");
       $nm_saida->saida("function changeSort(col, ord, oldSort) {\r\n");
       $nm_saida->saida("  Parm_change  = 'change_sort*scin';\r\n");
       $nm_saida->saida("  Parm_change += oldSort ? 'Y' : 'NEW';\r\n");
       $nm_saida->saida("  Parm_change += '*scoutsort_col*scin';\r\n");
       $nm_saida->saida("  Parm_change +=  col;\r\n");
       $nm_saida->saida("  Parm_change += '*scoutsort_ord*scin';\r\n");
       $nm_saida->saida("  Parm_change +=  ord;\r\n");
       $nm_saida->saida("  nm_gp_submit_ajax('resumo', Parm_change);\r\n");
       $nm_saida->saida("}\r\n");
       $nm_saida->saida("</script>\r\n");
       $nm_saida->saida("<form name=\"refresh_config\" method=\"post\" action=\"./\" style=\"display: none\">\r\n");
       $nm_saida->saida("<input type=\"hidden\" name=\"nmgp_opcao\" value=\"resumo\" />\r\n");
       $nm_saida->saida("<input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\" />\r\n");
       $nm_saida->saida("<input type=\"hidden\" name=\"change_sort\" value=\"N\" />\r\n");
       $nm_saida->saida("<input type=\"hidden\" name=\"sort_col\" />\r\n");
       $nm_saida->saida("<input type=\"hidden\" name=\"sort_ord\" />\r\n");
       $nm_saida->saida("</form>\r\n");
}
      $nm_saida->saida("<FORM name=\"F3\" method=\"post\" action=\"./\"\r\n");
      $nm_saida->saida("                                  target = \"_self\" style=\"display: none\"> \r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_chave\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_opcao\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_tipo_pdf\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_ordem\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_chave_det\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_quant_linhas\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_url_saida\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_parms\" value=\"\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_outra_jan\" value=\"\"/>\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_orig_pesq\" value=\"\"/>\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"SC_module_export\" value=\"\"/>\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\" />\r\n");
      $nm_saida->saida("</FORM>\r\n");
      $nm_saida->saida("<form name=\"FRES\" method=\"post\" \r\n");
      $nm_saida->saida("                    action=\"\" \r\n");
      $nm_saida->saida("                    target=\"_self\" style=\"display: none\"> \r\n");
      $nm_saida->saida("<input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
      $nm_saida->saida("</form> \r\n");
      $nm_saida->saida("<form name=\"FRES_chart_export_view\" method=\"get\" target=\"_blank\" style=\"display: none\"></form>\r\n");
      $nm_saida->saida("<form name=\"FCONS\" method=\"post\" \r\n");
      $nm_saida->saida("                    action=\"./\" \r\n");
      $nm_saida->saida("                    target=\"_self\" style=\"display: none\"> \r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_opcao\" value=\"link_res\" />\r\n");
      $nm_saida->saida("<INPUT type=\"hidden\" name=\"nmgp_parms_where\" value=\"\" />\r\n");
      $nm_saida->saida("<input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
      $nm_saida->saida("</form> \r\n");
   $nm_saida->saida("   <form name=\"F4\" method=\"post\" \r\n");
   $nm_saida->saida("                     action=\"./\" \r\n");
   $nm_saida->saida("                     target=\"_self\" style=\"display: none\"> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_opcao\" value=\"rec\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"rec\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_call_php\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida("   </form> \r\n");
      $nm_saida->saida("<form name=\"Fgraf\" method=\"post\" \r\n");
      $nm_saida->saida("                   action=\"./\" \r\n");
      $nm_saida->saida("                   target=\"_self\" style=\"display: none\"> \r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"nmgp_opcao\" value=\"grafico\"/>\r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"campo\" value=\"\"/>\r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"nivel_quebra\" value=\"\"/>\r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"campo_val\" value=\"\"/>\r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"nmgp_parms\" value=\"\" />\r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
      $nm_saida->saida("  <input type=\"hidden\" name=\"summary_css\" value=\"" . NM_encode_input($this->Ini->summary_css) . "\"/> \r\n");
      $nm_saida->saida("</form> \r\n");
   $nm_saida->saida("<form name=\"Fprint\" id=\"sc-id-form-print\" method=\"post\" \r\n");
   $nm_saida->saida("                  action=\"grid_resumen_ventas_iframe_prt.php\" \r\n");
   $nm_saida->saida("                  target=\"jan_print\" style=\"display: none\"> \r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"path_botoes\" value=\"" . $this->Ini->path_botoes . "\"/> \r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"opcao\" value=\"res_print\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"tp_print\" value=\"RC\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"cor_print\" value=\"CO\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"nmgp_opcao\" value=\"res_print\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"nmgp_tipo_print\" value=\"RC\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"nmgp_cor_print\" value=\"CO\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"SC_module_export\" value=\"\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"nmgp_password\" value=\"\"/>\r\n");
   $nm_saida->saida("  <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida("</form> \r\n");
   $nm_saida->saida("   <form name=\"Fexport\" id=\"sc-id-form-export\" method=\"post\" \r\n");
   $nm_saida->saida("                     action=\"./\" \r\n");
   $nm_saida->saida("                     target=\"_self\" style=\"display: none\"> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_opcao\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_tp_xls\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_tot_xls\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"SC_module_export\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_delim_line\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_delim_col\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_delim_dados\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_label_csv\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_xml_tag\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_xml_label\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_json_format\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nm_json_label\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_password\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida("   </form> \r\n");
   $nm_saida->saida("  <form name=\"Fdoc_word\" id=\"sc-id-form-word-export\" method=\"post\" style=\"display: none\" \r\n");
   $nm_saida->saida("      action=\"./\" \r\n");
   $nm_saida->saida("      target=\"_blank\"> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_opcao\" value=\"doc_word_res\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_cor_word\" value=\"CO\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"SC_module_export\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_password\" value=\"\"/>\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_navegator_print\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida("  </form> \r\n");
   $nm_saida->saida("  <form name=\"Fres_pdf\" method=\"post\" target=\"_self\">\r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_opcao\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_parms\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"sc_tp_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_tipo_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"sc_parms_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_parms_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"chart_level\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"sc_create_charts\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"sc_graf_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"nmgp_graf_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"SC_module_export\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"use_pass_pdf\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"pdf_all_cab\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"pdf_all_label\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"pdf_label_group\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"pdf_zip\" value=\"\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
   $nm_saida->saida("    <input type=\"hidden\" name=\"script_case_session\" value=\"" . session_id() . "\"/> \r\n");
   $nm_saida->saida("  </form> \r\n");
   $nm_saida->saida("<SCRIPT language=\"Javascript\">\r\n");
   $nm_saida->saida("   $(function(){ \r\n");
   $nm_saida->saida("       NM_btn_disable();\r\n");
   $nm_saida->saida("   }); \r\n");
   $nm_saida->saida("   function NM_btn_disable()\r\n");
   $nm_saida->saida("   {\r\n");
   foreach ($this->nm_btn_disabled as $cod_btn => $st_btn) {
      if (isset($this->nm_btn_exist[$cod_btn]) && $st_btn == 'on') {
         foreach ($this->nm_btn_exist[$cod_btn] as $cada_id) {
           $nm_saida->saida("     $('#" . $cada_id . "').prop('onclick', null).off('click').addClass('disabled').removeAttr('href');\r\n");
           $nm_saida->saida("     $('#div_" . $cada_id . "').addClass('disabled');\r\n");
         }
      }
   }
   $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_gp_word_conf(cor, SC_module_export, password, ajax, str_type, bol_param)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (\"R\" == ajax)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           $('#TB_window').remove();\r\n");
      $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
      $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\"+ str_type +\"&sAdd=__E__nmgp_cor_word=\" + cor + \"__E__SC_module_export=\" + SC_module_export + \"__E__nmgp_password=\" + password + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.Fdoc_word.nmgp_cor_word.value = cor;\r\n");
      $nm_saida->saida("           document.Fdoc_word.nmgp_password.value = password;\r\n");
      $nm_saida->saida("           document.Fdoc_word.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("           document.Fdoc_word.target = \"_blank\"; \r\n");
      $nm_saida->saida("           document.Fdoc_word.submit();\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida(" function nm_link_cons(x) \r\n");
      $nm_saida->saida(" {\r\n");
      $nm_saida->saida("     document.FCONS.nmgp_parms_where.value = x;\r\n");
      $nm_saida->saida("     document.FCONS.submit();\r\n");
      $nm_saida->saida(" }\r\n");
      $nm_saida->saida("   function nm_gp_print_conf(tp, cor, SC_module_export, password, ajax, str_type, bol_param)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (\"R\" == ajax)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           $('#TB_window').remove();\r\n");
      $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
      $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\"+ str_type +\"&sAdd=__E__cor_print=\" + cor + \"__E__SC_module_export=\" + SC_module_export + \"__E__nmgp_password=\" + password + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.Fprint.tp_print.value = tp;\r\n");
      $nm_saida->saida("           document.Fprint.cor_print.value = cor;\r\n");
      $nm_saida->saida("           document.Fprint.nmgp_tipo_print.value = tp;\r\n");
      $nm_saida->saida("           document.Fprint.nmgp_cor_print.value = cor;\r\n");
      $nm_saida->saida("           document.Fprint.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("           document.Fprint.nmgp_password.value = password;\r\n");
      $nm_saida->saida("           if (password != \"\")\r\n");
      $nm_saida->saida("           {\r\n");
      $nm_saida->saida("               document.Fprint.target = '_self';\r\n");
      $nm_saida->saida("               document.Fprint.action = \"grid_resumen_ventas_export_ctrl.php\";\r\n");
      $nm_saida->saida("           }\r\n");
      $nm_saida->saida("           else\r\n");
      $nm_saida->saida("           {\r\n");
      $nm_saida->saida("               window.open('','jan_print','location=no,menubar=no,resizable,scrollbars,status=no,toolbar=no');\r\n");
      $nm_saida->saida("           }\r\n");
      $nm_saida->saida("           document.Fprint.submit() ;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_gp_xls_conf(tp_xls, SC_module_export, password, tot_xls, ajax, str_type, bol_param)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (\"R\" == ajax)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           $('#TB_window').remove();\r\n");
      $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
      $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\" + str_type +\"&sAdd=__E__SC_module_export=\" + SC_module_export + \"__E__nmgp_tp_xls=\" + tp_xls + \"__E__nmgp_tot_xls=\" + tot_xls + \"__E__nmgp_password=\" + password + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_opcao.value = 'xls_res';\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_tp_xls.value = tp_xls;\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_tot_xls.value = tot_xls;\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_password.value = password;\r\n");
      $nm_saida->saida("           document.Fexport.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("           document.Fexport.target = \"_blank\"; \r\n");
      $nm_saida->saida("           document.Fexport.submit() ;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_gp_csv_conf(delim_line, delim_col, delim_dados, label_csv, SC_module_export, password, ajax, str_type, bol_param)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (\"R\" == ajax)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           $('#TB_window').remove();\r\n");
      $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
      $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\" + str_type +\"&sAdd=__E__nm_delim_line=\" + delim_line + \"__E__nm_delim_col=\" + delim_col + \"__E__nm_delim_dados=\" + delim_dados + \"__E__nm_label_csv=\" + label_csv + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_opcao.value = \"csv_res\";\r\n");
      $nm_saida->saida("           document.Fexport.nm_delim_line.value = delim_line;\r\n");
      $nm_saida->saida("           document.Fexport.nm_delim_col.value = delim_col;\r\n");
      $nm_saida->saida("           document.Fexport.nm_delim_dados.value = delim_dados;\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_password.value = password;\r\n");
      $nm_saida->saida("           document.Fexport.nm_label_csv.value = label_csv;\r\n");
      $nm_saida->saida("           document.Fexport.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("           document.Fexport.target = \"_blank\"; \r\n");
      $nm_saida->saida("           document.Fexport.submit() ;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_gp_xml_conf(xml_tag, xml_label, SC_module_export, password, ajax, str_type, bol_param)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (\"R\" == ajax)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           $('#TB_window').remove();\r\n");
      $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
      $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\" + str_type +\"&sAdd=__E__nm_xml_tag=\" + xml_tag + \"__E__nm_xml_label=\" + xml_label + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_opcao.value = \"xml_res\";\r\n");
      $nm_saida->saida("           document.Fexport.nm_xml_tag.value   = xml_tag;\r\n");
      $nm_saida->saida("           document.Fexport.nm_xml_label.value = xml_label;\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_password.value = password;\r\n");
      $nm_saida->saida("           document.Fexport.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("           document.Fexport.target = \"_blank\"; \r\n");
      $nm_saida->saida("           document.Fexport.submit() ;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_gp_json_conf(json_format, json_label, SC_module_export, password, ajax, str_type, bol_param)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (\"R\" == ajax)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           $('#TB_window').remove();\r\n");
      $nm_saida->saida("           $('body').append(\"<div id='TB_window'></div>\");\r\n");
      $nm_saida->saida("               nm_submit_modal(\"" . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_export_email.php?script_case_init={$this->Ini->sc_page}&path_img={$this->Ini->path_img_global}&path_btn={$this->Ini->path_botoes}&sType=\" + str_type +\"&sAdd=__E__nm_json_format=\" + json_format + \"__E__nm_json_label=\" + json_label + \"&KeepThis=true&TB_iframe=true&modal=true\", bol_param);\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_opcao.value    = \"json_res\";\r\n");
      $nm_saida->saida("           document.Fexport.nm_json_format.value   = json_format;\r\n");
      $nm_saida->saida("           document.Fexport.nm_json_label.value = json_label;\r\n");
      $nm_saida->saida("           document.Fexport.nmgp_password.value = password;\r\n");
      $nm_saida->saida("           document.Fexport.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("               document.Fexport.action = \"grid_resumen_ventas_export_ctrl.php\";\r\n");
      $nm_saida->saida("           document.Fexport.submit() ;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_gp_rtf_conf()\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       document.Fexport.nmgp_opcao.value = \"rtf_res\";\r\n");
      $nm_saida->saida("       document.Fexport.action = \"grid_resumen_ventas_export_ctrl.php\";\r\n");
      $nm_saida->saida("       document.Fexport.submit() ;\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida(" function nm_open_export(arq_export) \r\n");
      $nm_saida->saida(" { \r\n");
      $nm_saida->saida("    window.location = arq_export;\r\n");
      $nm_saida->saida(" } \r\n");
      $nm_saida->saida(" function nm_gp_submit_ajax(opc, parm) \r\n");
      $nm_saida->saida(" { \r\n");
      $nm_saida->saida("    return ajax_navigate_res(opc, parm); \r\n");
      $nm_saida->saida(" } \r\n");
      $nm_saida->saida("   function nm_submit_modal(parms, t_parent) \r\n");
      $nm_saida->saida("   { \r\n");
      $nm_saida->saida("      if (t_parent == 'S' && typeof parent.tb_show == 'function')\r\n");
      $nm_saida->saida("      { \r\n");
      $nm_saida->saida("           parent.tb_show('', parms, '');\r\n");
      $nm_saida->saida("      } \r\n");
      $nm_saida->saida("      else\r\n");
      $nm_saida->saida("      { \r\n");
      $nm_saida->saida("         tb_show('', parms, '');\r\n");
      $nm_saida->saida("      } \r\n");
      $nm_saida->saida("   } \r\n");
      $nm_saida->saida("   function nm_move() \r\n");
      $nm_saida->saida("   { \r\n");
      $nm_saida->saida("      document.F3.target = \"_self\"; \r\n");
      $nm_saida->saida("      document.F3.submit();\r\n");
      $nm_saida->saida("   } \r\n");
      $nm_saida->saida(" function nm_gp_move(x, y, z, p, g, crt, ajax, chart_level, page_break_pdf, SC_module_export, use_pass_pdf, pdf_all_cab, pdf_all_label, pdf_label_group, pdf_zip) \r\n");
      $nm_saida->saida(" {\r\n");
      $nm_saida->saida("  document.F3.nmgp_opcao.value = x;\r\n");
      $nm_saida->saida("  document.F3.target = \"_self\"; \r\n");
      $nm_saida->saida("  if (y == 1) \r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("      document.F3.target = \"_blank\"; \r\n");
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida("  if (\"busca\" == x)\r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("      document.F3.nmgp_orig_pesq.value = z; \r\n");
      $nm_saida->saida("      z = '';\r\n");
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida("  if (z != null && z != '') \r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("     document.F3.nmgp_tipo_pdf.value = z;\r\n");
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida("  document.F3.script_case_init.value = \"" . NM_encode_input($this->Ini->sc_page) . "\" ;\r\n");
      $nm_saida->saida("  if (\"xls_res\" == x)\r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("       document.F3.SC_module_export.value = z;\r\n");
      $nm_saida->saida("       str_type = (z == \"s\") ? \"xls\" : \"xls_res\"\r\n");
      $nm_saida->saida("       document.F3.nmgp_opcao.value = str_type;\r\n");
      if (!extension_loaded("zip"))
      {
      $nm_saida->saida("      alert (\"" . html_entity_decode($this->Ini->Nm_lang['lang_othr_prod_xtzp'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\");\r\n");
      $nm_saida->saida("      return false;\r\n");
      } 
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida("  if (\"xml_res\" == x)\r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("       document.F3.SC_module_export.value = z;\r\n");
      $nm_saida->saida("  }\r\n");
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_resumen_ventas_iframe_params'] = array(
          'str_tmp'          => $this->Ini->path_imag_temp,
          'str_prod'         => $this->Ini->path_prod,
          'str_btn'          => $this->Ini->Str_btn_css,
          'str_lang'         => $this->Ini->str_lang,
          'str_schema'       => $this->Ini->str_schema_all,
          'str_google_fonts' => $this->Ini->str_google_fonts,
      );
      $prep_parm_pdf = "nmgp_opcao?#?pdf_res?@?scsess?#?" . session_id() . "?@?str_tmp?#?" . $this->Ini->path_imag_temp . "?@?str_prod?#?" . $this->Ini->path_prod . "?@?str_btn?#?" . $this->Ini->Str_btn_css . "?@?str_lang?#?" . $this->Ini->str_lang . "?@?str_schema?#?"  . $this->Ini->str_schema_all . "?@?script_case_init?#?" . $this->Ini->sc_page . "?@?jspath?#?" . $this->Ini->path_js . "?#?";
      $Md5_pdf    = "@SC_par@" . NM_encode_input($this->Ini->sc_page) . "@SC_par@grid_resumen_ventas@SC_par@" . md5($prep_parm_pdf);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['Md5_pdf'][md5($prep_parm_pdf)] = $prep_parm_pdf;
      $nm_saida->saida("      document.Fres_pdf.sc_tp_pdf.value = z;\r\n");
      $nm_saida->saida("      document.Fres_pdf.nmgp_tipo_pdf.value = z;\r\n");
      $nm_saida->saida("      document.Fres_pdf.sc_parms_pdf.value = p;\r\n");
      $nm_saida->saida("      document.Fres_pdf.nmgp_parms_pdf.value = p;\r\n");
      $nm_saida->saida("      document.Fres_pdf.chart_level.value = chart_level;\r\n");
      $nm_saida->saida("      document.Fres_pdf.sc_create_charts.value = crt;\r\n");
      $nm_saida->saida("      document.Fres_pdf.sc_graf_pdf.value = g;\r\n");
      $nm_saida->saida("      document.Fres_pdf.nmgp_graf_pdf.value = g;\r\n");
      $nm_saida->saida("      document.Fres_pdf.SC_module_export.value = SC_module_export;\r\n");
      $nm_saida->saida("      document.Fres_pdf.use_pass_pdf.value = use_pass_pdf;\r\n");
      $nm_saida->saida("      document.Fres_pdf.pdf_all_cab.value = pdf_all_cab;\r\n");
      $nm_saida->saida("      document.Fres_pdf.pdf_all_label.value = pdf_all_label;\r\n");
      $nm_saida->saida("      document.Fres_pdf.pdf_label_group.value = pdf_label_group;\r\n");
      $nm_saida->saida("      document.Fres_pdf.pdf_zip.value = pdf_zip;\r\n");
      $nm_saida->saida("  if (\"pdf_res\" == x)\r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("      if (\"R\" == ajax)\r\n");
      $nm_saida->saida("      {\r\n");
      $nm_saida->saida("          ajax_export('pdf_res','&nmgp_tipo_pdf=' + z + '&nmgp_parms_pdf=' + p + '&sc_create_charts=' + crt + '&nmgp_graf_pdf=' + g + '&chart_level=' + chart_level + '&SC_module_export=' + SC_module_export + '&use_pass_pdf=' + use_pass_pdf + '&pdf_all_cab=' + pdf_all_cab + '&pdf_all_label=' +  pdf_all_label + '&pdf_label_group=' +  pdf_label_group + '&pdf_zip=' +  pdf_zip, false);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      else\r\n");
      $nm_saida->saida("      {\r\n");
      $nm_saida->saida("          document.Fres_pdf.nmgp_opcao.value = \"pdf\" ;\r\n");
      $nm_saida->saida("          document.Fres_pdf.nmgp_parms.value = \"\";\r\n");
      $nm_saida->saida("          document.Fres_pdf.action = \"index.php\";\r\n");
      $nm_saida->saida("          document.Fres_pdf.target = \"_blank\"; \r\n");
      $nm_saida->saida("          document.Fres_pdf.submit();\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida("  else\r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("      document.F3.submit();\r\n");
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida(" }\r\n");
      $nm_saida->saida(" function nm_gp_submit5(apl_lig, apl_saida, parms, target, opc, modal_h, modal_w) \r\n");
      $nm_saida->saida(" { \r\n");
      $nm_saida->saida("    if (apl_lig.substr(0, 7) == \"http://\" || apl_lig.substr(0, 8) == \"https://\")\r\n");
      $nm_saida->saida("    {\r\n");
      $nm_saida->saida("        if (target == '_blank') \r\n");
      $nm_saida->saida("        {\r\n");
      $nm_saida->saida("            window.open (apl_lig);\r\n");
      $nm_saida->saida("        }\r\n");
      $nm_saida->saida("        else\r\n");
      $nm_saida->saida("        {\r\n");
      $nm_saida->saida("            window.location = apl_lig;\r\n");
      $nm_saida->saida("        }\r\n");
      $nm_saida->saida("        return;\r\n");
      $nm_saida->saida("    }\r\n");
      $nm_saida->saida("    if (target == 'modal') \r\n");
      $nm_saida->saida("    {\r\n");
      $nm_saida->saida("        par_modal = '?script_case_init=" . NM_encode_input($this->Ini->sc_page) . "&nmgp_outra_jan=true&nmgp_url_saida=modal';\r\n");
      $nm_saida->saida("        if (opc != null && opc != '') \r\n");
      $nm_saida->saida("        {\r\n");
      $nm_saida->saida("            par_modal += '&nmgp_opcao=grid';\r\n");
      $nm_saida->saida("        }\r\n");
      $nm_saida->saida("        if (parms != null && parms != '') \r\n");
      $nm_saida->saida("        {\r\n");
      $nm_saida->saida("            par_modal += '&nmgp_parms=' + parms;\r\n");
      $nm_saida->saida("        }\r\n");
      $nm_saida->saida("        tb_show('', apl_lig + par_modal + '&TB_iframe=true&modal=true&height=' + modal_h + '&width=' + modal_w, '');\r\n");
      $nm_saida->saida("        return;\r\n");
      $nm_saida->saida("    }\r\n");
      $nm_saida->saida("    document.F3.target               = target; \r\n");
      $nm_saida->saida("    if (target == '_blank') \r\n");
      $nm_saida->saida("    {\r\n");
      $nm_saida->saida("        document.F3.nmgp_outra_jan.value = \"true\" ;\r\n");
      $nm_saida->saida("    }\r\n");
      $nm_saida->saida("    document.F3.action               = apl_lig  ;\r\n");
      $nm_saida->saida("    if (opc != null && opc != '') \r\n");
      $nm_saida->saida("    {\r\n");
      $nm_saida->saida("        document.F3.nmgp_opcao.value = \"grid\" ;\r\n");
      $nm_saida->saida("    }\r\n");
      $nm_saida->saida("    else\r\n");
      $nm_saida->saida("    {\r\n");
      $nm_saida->saida("        document.F3.nmgp_opcao.value = \"\" ;\r\n");
      $nm_saida->saida("    }\r\n");
      $nm_saida->saida("    document.F3.nmgp_url_saida.value = apl_saida ;\r\n");
      $nm_saida->saida("    document.F3.nmgp_parms.value = parms ;\r\n");
      $nm_saida->saida("    document.F3.submit() ;\r\n");
      $nm_saida->saida("    document.F3.nmgp_outra_jan.value = \"\";\r\n");
      $nm_saida->saida("    document.F3.nmgp_parms.value = \"\";\r\n");
      $nm_saida->saida("    document.F3.action = \"./\";\r\n");
      $nm_saida->saida(" } \r\n");
      $nm_saida->saida("   var tem_hint;\r\n");
      $nm_saida->saida("   function nm_mostra_hint(nm_obj, nm_evt, nm_mens)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (nm_mens == \"\")\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           return;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       tem_hint = true;\r\n");
      $nm_saida->saida("       if (document.layers)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           theString=\"<DIV CLASS='ttip'>\" + nm_mens + \"</DIV>\";\r\n");
      $nm_saida->saida("           document.tooltip.document.write(theString);\r\n");
      $nm_saida->saida("           document.tooltip.document.close();\r\n");
      $nm_saida->saida("           document.tooltip.left = nm_evt.pageX + 14;\r\n");
      $nm_saida->saida("           document.tooltip.top = nm_evt.pageY + 2;\r\n");
      $nm_saida->saida("           document.tooltip.visibility = \"show\";\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           if(document.getElementById)\r\n");
      $nm_saida->saida("           {\r\n");
      $nm_saida->saida("              nmdg_nav = navigator.appName;\r\n");
      $nm_saida->saida("              elm = document.getElementById(\"tooltip\");\r\n");
      $nm_saida->saida("              elml = nm_obj;\r\n");
      $nm_saida->saida("              elm.innerHTML = nm_mens;\r\n");
      $nm_saida->saida("              if (nmdg_nav == \"Netscape\")\r\n");
      $nm_saida->saida("              {\r\n");
      $nm_saida->saida("                  elm.style.height = elml.style.height;\r\n");
      $nm_saida->saida("                  elm.style.top = nm_evt.pageY + 2;\r\n");
      $nm_saida->saida("                  elm.style.left = nm_evt.pageX + 14;\r\n");
      $nm_saida->saida("              }\r\n");
      $nm_saida->saida("              else\r\n");
      $nm_saida->saida("              {\r\n");
      $nm_saida->saida("                  elm.style.top = nm_evt.y + document.body.scrollTop + 10;\r\n");
      $nm_saida->saida("                  elm.style.left = nm_evt.x + document.body.scrollLeft + 10;\r\n");
      $nm_saida->saida("              }\r\n");
      $nm_saida->saida("              elm.style.visibility = \"visible\";\r\n");
      $nm_saida->saida("           }\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("   function nm_apaga_hint()\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("       if (!tem_hint)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           return;\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       tem_hint = false;\r\n");
      $nm_saida->saida("       if (document.layers)\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           document.tooltip.visibility = \"hidden\";\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("       else\r\n");
      $nm_saida->saida("       {\r\n");
      $nm_saida->saida("           if(document.getElementById)\r\n");
      $nm_saida->saida("           {\r\n");
      $nm_saida->saida("              elm.style.visibility = \"hidden\";\r\n");
      $nm_saida->saida("           }\r\n");
      $nm_saida->saida("       }\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida(" function nm_graf_submit(campo, nivel, campo_val, parms, target) \r\n");
      $nm_saida->saida(" { \r\n");
      $nm_saida->saida("    document.Fgraf.campo.value = campo ;\r\n");
      $nm_saida->saida("    document.Fgraf.nivel_quebra.value = nivel ;\r\n");
      $nm_saida->saida("    document.Fgraf.campo_val.value = campo_val ;\r\n");
      $nm_saida->saida("    document.Fgraf.nmgp_parms.value   = parms ;\r\n");
      $nm_saida->saida("    if (target != null) \r\n");
      $nm_saida->saida("    {\r\n");
      $nm_saida->saida("        document.Fgraf.target = target; \r\n");
      $nm_saida->saida("    }\r\n");
      $nm_saida->saida("    document.Fgraf.submit() ;\r\n");
      $nm_saida->saida(" } \r\n");
      $nm_saida->saida(" function nm_graf_submit_2(chart)\r\n");
      $nm_saida->saida(" {\r\n");
      $nm_saida->saida("    var oldAction = document.Fgraf.action;\r\n");
      $nm_saida->saida("    document.Fgraf.action = nm_url_rand(document.Fgraf.action);\r\n");
      $nm_saida->saida("    document.Fgraf.nmgp_parms.value = chart;\r\n");
      $nm_saida->saida("    document.Fgraf.target = \"_blank\";\r\n");
      $nm_saida->saida("    document.Fgraf.submit();\r\n");
      $nm_saida->saida("    document.Fgraf.action = oldAction;\r\n");
      $nm_saida->saida(" } \r\n");
      $nm_saida->saida(" function Refresh_Chart()\r\n");
      $nm_saida->saida(" {\r\n");
      $nm_saida->saida("     document.FRES.action = \"./\";\r\n");
      $nm_saida->saida("     document.FRES.submit();\r\n");
      $nm_saida->saida(" }\r\n");
      $nm_saida->saida(" function nm_open_popup(parms)\r\n");
      $nm_saida->saida(" {\r\n");
      $nm_saida->saida("     NovaJanela = window.open (parms, '', 'resizable, scrollbars');\r\n");
      $nm_saida->saida(" }\r\n");
      $nm_saida->saida(" function nm_url_rand(v_str_url)\r\n");
      $nm_saida->saida(" {\r\n");
      $nm_saida->saida("  str_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';\r\n");
      $nm_saida->saida("  str_rand  = v_str_url;\r\n");
      $nm_saida->saida("  str_rand += (-1 == v_str_url.indexOf('?')) ? '?' : '&';\r\n");
      $nm_saida->saida("  str_rand += 'r=';\r\n");
      $nm_saida->saida("  for (i = 0; i < 8; i++)\r\n");
      $nm_saida->saida("  {\r\n");
      $nm_saida->saida("   str_rand += str_chars.charAt(Math.round(str_chars.length * Math.random()));\r\n");
      $nm_saida->saida("  }\r\n");
      $nm_saida->saida("  return str_rand;\r\n");
      $nm_saida->saida(" }\r\n");
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp']))
      {
        $nm_saida->saida("     $(document).ready(function(){\r\n");
          $nm_saida->saida("     document.getElementById('sel_groupby_top').click();\r\n");
        $nm_saida->saida("     });\r\n");
      }
      $nm_saida->saida("   function process_hotkeys(hotkey)\r\n");
      $nm_saida->saida("   {\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_pdf') { \r\n");
      $nm_saida->saida("         var output =  $('#Rpdf_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_word') { \r\n");
      $nm_saida->saida("         var output =  $('#Rword_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_xls') { \r\n");
      $nm_saida->saida("         var output =  $('#Rxls_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_xml') { \r\n");
      $nm_saida->saida("         var output =  $('#Rxml_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_csv') { \r\n");
      $nm_saida->saida("         var output =  $('#Rcsv_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_rtf') { \r\n");
      $nm_saida->saida("         var output =  $('#Rrtf_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_imp') { \r\n");
      $nm_saida->saida("         var output =  $('#Rprint_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_gbrl') { \r\n");
      $nm_saida->saida("         var output =  $('#sel_groupby_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_cons') { \r\n");
      $nm_saida->saida("         var output =  $('#Rrotac_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_webh') { \r\n");
      $nm_saida->saida("         var output =  $('#Rhelp_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("      if (hotkey == 'sys_format_sai') { \r\n");
      $nm_saida->saida("         var output =  $('#Rsai_top').click();\r\n");
      $nm_saida->saida("         return (0 < output.length);\r\n");
      $nm_saida->saida("      }\r\n");
      $nm_saida->saida("   return false;\r\n");
      $nm_saida->saida("   }\r\n");
      $nm_saida->saida("</SCRIPT>\r\n");
      $nm_saida->saida("</BODY>\r\n");
      $nm_saida->saida("</HTML>\r\n");
   }

   function monta_html_ini_pdf()
   {
      global $nm_saida;
       $tp_quebra = "";
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css']))
       {
           $NM_css = @fopen($this->Ini->root . $this->Ini->path_imag_temp . '/sc_css_grid_resumen_ventas_grid_' . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['num_css'] . '.css', 'a');
           $NM_css_file = $this->Ini->root . $this->Ini->path_link . "grid_resumen_ventas/grid_resumen_ventas_res_" . strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']). ".css";
           if (is_file($NM_css_file))
           {
               $NM_css_attr = file($NM_css_file);
               foreach ($NM_css_attr as $NM_line_css)
               {
                   @fwrite($NM_css, "    " . $NM_line_css . "\r\n");
               }
           }
           @fclose($NM_css);
       }
       $this->Print_All = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['print_all'];
       if (!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pdf_res'])
       {
           $nm_saida->saida("<TR>\r\n");
           $nm_saida->saida("<TD style=\"padding: 0px\">\r\n");
       $tp_quebra = "<div style=\"page-break-after: always;\"><span style=\"display: none;\">&nbsp;</span></div>";
           $tp_quebra .= "<div style=\"height:1px;overflow:hidden\"><H1 style=\"font-size:0;padding:1px\">" .$this->Ini->Nm_lang['lang_othr_smry_msge'] . "</H1></div>";
       }
       if ($this->Print_All || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['print_all'])
       {
       $tp_quebra = "<div style=\"page-break-after: always;\"><span style=\"display: none;\">&nbsp;</span></div>";
       }
       $nm_saida->saida("" . $tp_quebra . "\r\n");
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['responsive_chart']['active']) {
           $summary_width = "width=\"100%\"";
       }
       else {
           if ($_SESSION['scriptcase']['proc_mobile'])
           {
               $summary_width = "width=\"100%\"";
           }
           else
           {
               $summary_width = "width=\"100%\"";
           }
       }
       $nm_saida->saida("<TABLE style=\"padding: 0px; border-spacing: 0px; border-width: 0px;\" align=\"center\" valign=\"top\" " . $summary_width . ">\r\n");
       $nm_saida->saida("<TR>\r\n");
       $nm_saida->saida("<TD style=\"padding: 0px\">\r\n");
       $nm_saida->saida("<TABLE style=\"padding: 0px; border-spacing: 0px; border-width: 0px; width: 100%;\">\r\n");
   }
   function monta_html_fim_pdf()
   {
      global $nm_saida;
      $nm_saida->saida("</TABLE>\r\n");
      $nm_saida->saida("</TD>\r\n");
      $nm_saida->saida("</TR>\r\n");
      $nm_saida->saida("</TABLE>\r\n");
   }
	function getHeaderColspan() {
		return $this->getHeaderColspan_index() + $this->getHeaderColspan_labels() + $this->getHeaderColspan_summarizing() + $this->getHeaderColspan_lineTotal();
	} // getHeaderColspan

	function getHeaderColspan_index() {
		return $this->comp_tab_seq ? 1 : 0;
	} // getHeaderColspan_index

	function getHeaderColspan_labels() {
		return $this->comp_tabular ? count($this->comp_y_axys) : 1;
	} // getHeaderColspan_labels

	function getHeaderColspan_summarizing() {
		return $this->build_col_count;
	} // getHeaderColspan_summarizing

	function getHeaderColspan_summarizing_fields() {
		$total = 0;

		foreach ($this->comp_sum_display as $displayFlag) {
			if ($displayFlag) {
				$total++;
			}
		}

		return $total;
	} // getHeaderColspan_summarizing_fields

	function getHeaderColspan_lineTotal() {
             if (substr($this->Ini->PHP_ver, 0, 2) > 72) {
		return (isset($this->comp_x_axys) && is_countable($this->comp_x_axys) && count($this->comp_x_axys)) ? $this->getHeaderColspan_summarizing_fields() : 0;
             }
             else {
		return (isset($this->comp_x_axys) && is_array($this->comp_x_axys) && count($this->comp_x_axys)) ? $this->getHeaderColspan_summarizing_fields() : 0;
             }
	} // getHeaderColspan_lineTotal

   //----- 
   function monta_cabecalho()
   {
      global $nm_saida;
      if ($this->Ini->Embutida_iframe || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['embutida'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['dashboard_info']['compact_mode'])
      { 
          return;
      } 
      $this->nm_data->SetaData(date("Y/m/d H:i:s"), "YYYY/MM/DD HH:II:SS");
      $nm_cab_filtro   = ""; 
      $nm_cab_filtrobr = ""; 
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']))
      { 
        $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca'];
        if ($_SESSION['scriptcase']['charset'] != "UTF-8")
        {
            $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
        }
          $fac_fecha = (isset($Busca_temp['fac_fecha'])) ? $Busca_temp['fac_fecha'] : ""; 
          $tmp_pos = (is_string($fac_fecha)) ? strpos($fac_fecha, "##@@") : false;
          if ($tmp_pos !== false && !is_array($fac_fecha))
          {
              $fac_fecha = substr($fac_fecha, 0, $tmp_pos);
          }
          $fac_fecha_2 = (isset($Busca_temp['fac_fecha_input_2'])) ? $Busca_temp['fac_fecha_input_2'] : ""; 
          $est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
          $tmp_pos = (is_string($est_codigo)) ? strpos($est_codigo, "##@@") : false;
          if ($tmp_pos !== false && !is_array($est_codigo))
          {
              $est_codigo = substr($est_codigo, 0, $tmp_pos);
          }
          $pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
          $tmp_pos = (is_string($pen_serie)) ? strpos($pen_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($pen_serie))
          {
              $pen_serie = substr($pen_serie, 0, $tmp_pos);
          }
          $cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
          $tmp_pos = (is_string($cl_identificacion)) ? strpos($cl_identificacion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($cl_identificacion))
          {
              $cl_identificacion = substr($cl_identificacion, 0, $tmp_pos);
          }
          $cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
          $tmp_pos = (is_string($cl_nombre)) ? strpos($cl_nombre, "##@@") : false;
          if ($tmp_pos !== false && !is_array($cl_nombre))
          {
              $cl_nombre = substr($cl_nombre, 0, $tmp_pos);
          }
          $fac_usuario = (isset($Busca_temp['fac_usuario'])) ? $Busca_temp['fac_usuario'] : ""; 
          $tmp_pos = (is_string($fac_usuario)) ? strpos($fac_usuario, "##@@") : false;
          if ($tmp_pos !== false && !is_array($fac_usuario))
          {
              $fac_usuario = substr($fac_usuario, 0, $tmp_pos);
          }
          $fac_socio_transportista = (isset($Busca_temp['fac_socio_transportista'])) ? $Busca_temp['fac_socio_transportista'] : ""; 
          $tmp_pos = (is_string($fac_socio_transportista)) ? strpos($fac_socio_transportista, "##@@") : false;
          if ($tmp_pos !== false && !is_array($fac_socio_transportista))
          {
              $fac_socio_transportista = substr($fac_socio_transportista, 0, $tmp_pos);
          }
      } 
      if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['cond_pesq']))
      {  
          $pos       = 0;
          $trab_pos  = false;
          $pos_tmp   = true; 
          $tmp       = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['cond_pesq'];
          while ($pos_tmp)
          {
             $pos = strpos($tmp, "##*@@", $pos);
             if ($pos !== false)
             {
                 $trab_pos = $pos;
                 $pos += 4;
             }
             else
             {
                 $pos_tmp = false;
             }
          }
          $nm_cond_filtro_or  = (substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['cond_pesq'], $trab_pos + 5) == "or")  ? " " . trim($this->Ini->Nm_lang['lang_srch_orr_cond']) . " " : "";
          $nm_cond_filtro_and = (substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['cond_pesq'], $trab_pos + 5) == "and") ? " " . trim($this->Ini->Nm_lang['lang_srch_and_cond']) . " " : "";
          $nm_cab_filtro   = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['cond_pesq'], 0, $trab_pos);
          $nm_cab_filtrobr = str_replace("##*@@", ", " . $nm_cond_filtro_or . "<br />", $nm_cab_filtro);
          $pos       = 0;
          $trab_pos  = false;
          $pos_tmp   = true; 
          $tmp       = $nm_cab_filtro;
          while ($pos_tmp)
          {
             $pos = strpos($tmp, "##*@@", $pos);
             if ($pos !== false)
             {
                 $trab_pos = $pos;
                 $pos += 4;
             }
             else
             {
                 $pos_tmp = false;
             }
          }
          if ($trab_pos === false)
          {
          }
          else  
          {  
             $nm_cab_filtro = substr($nm_cab_filtro, 0, $trab_pos) . " " .  $nm_cond_filtro_or . $nm_cond_filtro_and . substr($nm_cab_filtro, $trab_pos + 5);
             $nm_cab_filtro = str_replace("##*@@", ", " . $nm_cond_filtro_or, $nm_cab_filtro);
          }   
      }   
      $nm_saida->saida(" <TR align=\"center\">\r\n");
     if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf'] || $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['proc_pdf_vert']) {
          $header_colspan = $this->getHeaderColspan();
          $nm_saida->saida("  <TD colspan=\"" . $header_colspan . "\" class=\"" . $this->css_scGridTabelaTd . " " . $this->css_scGridPage . "\">\r\n");
     }
     else {
          $nm_saida->saida("  <TD class=\"" . $this->css_scGridTabelaTd . " " . $this->css_scGridPage . "\">\r\n");
     }
   $this->nm_data->SetaData(date("Y/m/d H:i:s"), "YYYY/MM/DD HH:II:SS");
   $sc_data_cab1 = $this->nm_data->FormataSaida("l, d @?#?@de F @?#?@de Y");
      $nm_saida->saida("   <TABLE width=\"100%\" class=\"" . $this->css_scGridHeader . "\">\r\n");
      $nm_saida->saida("    <TR align=\"center\">\r\n");
      $nm_saida->saida("     <TD style=\"padding: 0px\">\r\n");
      $nm_saida->saida("      <TABLE style=\"padding: 0px; border-spacing: 0px; border-width: 0px;\" width=\"100%\">\r\n");
      $nm_saida->saida("       <TR valign=\"middle\">\r\n");
      $nm_saida->saida("        <TD align=\"left\" rowspan=\"3\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          " . "" . $_SESSION['var_RutaLogo'] . "" . "\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"left\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          " . "" . $_SESSION['Igtech_NombreEmpresa'] . "" . "\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
      $nm_saida->saida("          &nbsp; &nbsp;\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"center\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          \r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
      $nm_saida->saida("          &nbsp; &nbsp;\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"right\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          \r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("       </TR>\r\n");
      $nm_saida->saida("       <TR valign=\"middle\">\r\n");
      $nm_saida->saida("        <TD align=\"left\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          " . $this->Ini->Nm_lang['lang_resumen_ventas'] . "\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
      $nm_saida->saida("          &nbsp; &nbsp;\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"center\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          \r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
      $nm_saida->saida("          &nbsp; &nbsp;\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"right\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          \r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("       </TR>\r\n");
      $nm_saida->saida("       <TR valign=\"middle\">\r\n");
      $nm_saida->saida("        <TD align=\"left\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          " . $nm_cab_filtrobr . "\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
      $nm_saida->saida("          &nbsp; &nbsp;\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"center\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          \r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD style=\"font-size: 5px\">\r\n");
      $nm_saida->saida("          &nbsp; &nbsp;\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("        <TD align=\"right\" class=\"" . $this->css_scGridHeaderFont . "\">\r\n");
      $nm_saida->saida("          " . $sc_data_cab1 . "\r\n");
      $nm_saida->saida("        </TD>\r\n");
      $nm_saida->saida("       </TR>\r\n");
      $nm_saida->saida("      </TABLE>\r\n");
      $nm_saida->saida("     </TD>\r\n");
      $nm_saida->saida("    </TR>\r\n");
      $nm_saida->saida("   </TABLE>\r\n");
      $nm_saida->saida("  </TD>\r\n");
      $nm_saida->saida(" </TR>\r\n");
   }


   //---- 
   function inicializa_arrays()
   {
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
      {
          $Arr_tot_name = "array_total_" . $cmp_gb;
          $this->$Arr_tot_name = array();
      }
   }

   //---- 
   function adiciona_registro($sum_fac_subtotal, $sum_fac_total_descuento, $sum_fac_valor_iva, $sum_fac_propina, $sum_fac_total, $sum_fac_subtotal_iva, $sum_fac_subtotal_cero, $sum_fac_subtotal_no_objeto, $sum_fac_subtotal_excento, $sum_fac_valor_ice, $sum_fac_valor_irbpnr, $quebra_fac_fecha, $quebra_fac_tipo_comprobante, $quebra_est_codigo, $quebra_pen_serie, $quebra_cl_identificacion, $quebra_cl_nombre, $quebra_fac_usuario, $quebra_fac_socio_transportista, $quebra_fac_fecha_orig, $quebra_fac_tipo_comprobante_orig, $quebra_est_codigo_orig, $quebra_pen_serie_orig, $quebra_cl_identificacion_orig, $quebra_cl_nombre_orig, $quebra_fac_usuario_orig, $quebra_fac_socio_transportista_orig)
   {
      $contr_arr = "";
      foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_cmp'] as $cmp_gb => $resto)
      {
          $Name_orig  = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_orig'][$cmp_gb])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_orig'][$cmp_gb] : $cmp_gb;
          $Cmp_temp   = "quebra_" . $Name_orig . "_orig";
          $Cmp_format = "quebra_" . $Name_orig;
          $Format_tst = $this->Ini->Get_Gb_date_format('sc_free_group_by', $cmp_gb);
          $Prefix_dat = $this->Ini->Get_Gb_prefix_date_format('sc_free_group_by', $cmp_gb);
           $TP_Time    = (in_array($Cmp_temp, $this->Ini->Cmp_Sql_Time)) ? "0000-00-00 " : "";
          $Cmp_arg    = $this->Ini->Get_arg_groupby($TP_Time . $$Cmp_temp, $Format_tst);
          $TP_Time    = (in_array($cmp_gb, $this->Ini->Cmp_Sql_Time)) ? "0000-00-00 " : "";
          $Cmp_formt  = $this->Ini->GB_date_format($TP_Time . $$Cmp_format, $Format_tst, $Prefix_dat);
          $contr_arr .= "['" . $Cmp_arg . "']";
          $arr_name   = "array_total_" . $cmp_gb . $contr_arr;
          $cmp_look   = "Cmp_formt";
          $cmp_orig   = "Cmp_arg";
          if (empty($sum_fac_subtotal)) {$sum_fac_subtotal = '0';}
          if (empty($sum_fac_total_descuento)) {$sum_fac_total_descuento = '0';}
          if (empty($sum_fac_valor_iva)) {$sum_fac_valor_iva = '0';}
          if (empty($sum_fac_propina)) {$sum_fac_propina = '0';}
          if (empty($sum_fac_total)) {$sum_fac_total = '0';}
          if (empty($sum_fac_subtotal_iva)) {$sum_fac_subtotal_iva = '0';}
          if (empty($sum_fac_subtotal_cero)) {$sum_fac_subtotal_cero = '0';}
          if (empty($sum_fac_subtotal_no_objeto)) {$sum_fac_subtotal_no_objeto = '0';}
          if (empty($sum_fac_subtotal_excento)) {$sum_fac_subtotal_excento = '0';}
          if (empty($sum_fac_valor_ice)) {$sum_fac_valor_ice = '0';}
          if (empty($sum_fac_valor_irbpnr)) {$sum_fac_valor_irbpnr = '0';}
          eval ('
          if (!isset($this->' . $arr_name . '))
          {
              $this->' . $arr_name . '[0] = 1;
              $this->' . $arr_name . '[1] = ' . $sum_fac_subtotal . ';
              $this->' . $arr_name . '[2] = ' . $sum_fac_total_descuento . ';
              $this->' . $arr_name . '[3] = ' . $sum_fac_valor_iva . ';
              $this->' . $arr_name . '[4] = ' . $sum_fac_propina . ';
              $this->' . $arr_name . '[5] = ' . $sum_fac_total . ';
              $this->' . $arr_name . '[6] = ' . $sum_fac_subtotal_iva . ';
              $this->' . $arr_name . '[7] = ' . $sum_fac_subtotal_cero . ';
              $this->' . $arr_name . '[8] = ' . $sum_fac_subtotal_no_objeto . ';
              $this->' . $arr_name . '[9] = ' . $sum_fac_subtotal_excento . ';
              $this->' . $arr_name . '[10] = ' . $sum_fac_valor_ice . ';
              $this->' . $arr_name . '[11] = ' . $sum_fac_valor_irbpnr . ';
              $this->' . $arr_name . '[12] = "' . addslashes($$cmp_look) . '";
              $this->' . $arr_name . '[13] = "' . $$cmp_orig . '";
          }
          else
          {
              $this->' . $arr_name . '[0]++;
              $this->' . $arr_name . '[1] = bcadd($this->' . $arr_name . '[1], ' . $sum_fac_subtotal . ', 10);
              $this->' . $arr_name . '[2] = bcadd($this->' . $arr_name . '[2], ' . $sum_fac_total_descuento . ', 10);
              $this->' . $arr_name . '[3] = bcadd($this->' . $arr_name . '[3], ' . $sum_fac_valor_iva . ', 10);
              $this->' . $arr_name . '[4] = bcadd($this->' . $arr_name . '[4], ' . $sum_fac_propina . ', 10);
              $this->' . $arr_name . '[5] = bcadd($this->' . $arr_name . '[5], ' . $sum_fac_total . ', 10);
              $this->' . $arr_name . '[6] = bcadd($this->' . $arr_name . '[6], ' . $sum_fac_subtotal_iva . ', 10);
              $this->' . $arr_name . '[7] = bcadd($this->' . $arr_name . '[7], ' . $sum_fac_subtotal_cero . ', 10);
              $this->' . $arr_name . '[8] = bcadd($this->' . $arr_name . '[8], ' . $sum_fac_subtotal_no_objeto . ', 10);
              $this->' . $arr_name . '[9] = bcadd($this->' . $arr_name . '[9], ' . $sum_fac_subtotal_excento . ', 10);
              $this->' . $arr_name . '[10] = bcadd($this->' . $arr_name . '[10], ' . $sum_fac_valor_ice . ', 10);
              $this->' . $arr_name . '[11] = bcadd($this->' . $arr_name . '[11], ' . $sum_fac_valor_irbpnr . ', 10);
          }
          ');
      }
   }

   //---- 
   function finaliza_arrays()
   {
   }

   function prepara_resumo()
   {
      $this->inicializa_vars();
      $this->resumo_init();
      $this->inicializa_arrays();
   }

   function finaliza_resumo()
   {
      $this->finaliza_arrays();
   }

//
   function nm_acumula_resumo($nm_tipo="resumo")
   {
     global $nm_lang;
     if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']))
     { 
         $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca'];
         if ($_SESSION['scriptcase']['charset'] != "UTF-8")
         {
             $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
         }
       $this->fac_fecha = $Busca_temp['fac_fecha']; 
       $this->fac_fecha = (isset($Busca_temp['fac_fecha'])) ? $Busca_temp['fac_fecha'] : ""; 
       $tmp_pos = (is_string($this->fac_fecha)) ? strpos($this->fac_fecha, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->fac_fecha))
       {
           $this->fac_fecha = substr($this->fac_fecha, 0, $tmp_pos);
       }
       $fac_fecha_2 = (isset($Busca_temp['fac_fecha_input_2'])) ? $Busca_temp['fac_fecha_input_2'] : ""; 
       $this->fac_fecha_2 = $fac_fecha_2; 
       $this->est_codigo = $Busca_temp['est_codigo']; 
       $this->est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
       $tmp_pos = (is_string($this->est_codigo)) ? strpos($this->est_codigo, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->est_codigo))
       {
           $this->est_codigo = substr($this->est_codigo, 0, $tmp_pos);
       }
       $this->pen_serie = $Busca_temp['pen_serie']; 
       $this->pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
       $tmp_pos = (is_string($this->pen_serie)) ? strpos($this->pen_serie, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->pen_serie))
       {
           $this->pen_serie = substr($this->pen_serie, 0, $tmp_pos);
       }
       $this->cl_identificacion = $Busca_temp['cl_identificacion']; 
       $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
       $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->cl_identificacion))
       {
           $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
       }
       $this->cl_nombre = $Busca_temp['cl_nombre']; 
       $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
       $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->cl_nombre))
       {
           $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
       }
       $this->fac_usuario = $Busca_temp['fac_usuario']; 
       $this->fac_usuario = (isset($Busca_temp['fac_usuario'])) ? $Busca_temp['fac_usuario'] : ""; 
       $tmp_pos = (is_string($this->fac_usuario)) ? strpos($this->fac_usuario, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->fac_usuario))
       {
           $this->fac_usuario = substr($this->fac_usuario, 0, $tmp_pos);
       }
       $this->fac_socio_transportista = $Busca_temp['fac_socio_transportista']; 
       $this->fac_socio_transportista = (isset($Busca_temp['fac_socio_transportista'])) ? $Busca_temp['fac_socio_transportista'] : ""; 
       $tmp_pos = (is_string($this->fac_socio_transportista)) ? strpos($this->fac_socio_transportista, "##@@") : false;
       if ($tmp_pos !== false && !is_array($this->fac_socio_transportista))
       {
           $this->fac_socio_transportista = substr($this->fac_socio_transportista, 0, $tmp_pos);
       }
     } 
     $this->sc_where_orig   = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_orig'];
     $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_pesq'];
     $this->sc_where_filtro = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_pesq_filtro'];
     $this->nm_field_dinamico = array();
     $this->nm_order_dinamico = array();
     $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ""; 
     if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
     { 
         $nmgp_select = "SELECT str_replace (convert(char(10),fac_fecha,102), '.', '-') + ' ' + convert(char(8),fac_fecha,20), fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_estado_sri, fac_numero from " . $this->Ini->nm_tabela; 
     } 
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
     { 
         $nmgp_select = "SELECT fac_fecha, fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_estado_sri, fac_numero from " . $this->Ini->nm_tabela; 
     } 
     elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
     { 
         $nmgp_select = "SELECT convert(char(23),fac_fecha,121), fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_estado_sri, fac_numero from " . $this->Ini->nm_tabela; 
     } 
     else 
     { 
         $nmgp_select = "SELECT fac_fecha, fac_tipo_comprobante, cl_identificacion, cl_nombre, est_codigo, pen_serie, fac_secuencial, fac_subtotal, fac_total_descuento, fac_valor_iva, fac_propina, fac_total, fac_subtotal_iva, fac_subtotal_cero, fac_subtotal_no_objeto, fac_subtotal_excento, fac_valor_ice, fac_valor_irbpnr, fac_comentario, fac_usuario, fac_autorizacion, fac_socio_transportista, fac_estado_sri, fac_numero from " . $this->Ini->nm_tabela; 
     } 
     $nmgp_select .= " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['where_pesq']; 
     $campos_order = "";
     foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['SC_Gb_Free_sql'] as $cmp_var => $resto)
     {
         foreach ($resto as $SC_Sql_col => $SC_Sql_order)
         {
             $format       = $this->Ini->Get_Gb_date_format('sc_free_group_by', $cmp_var);
             $campos_order = $this->Ini->Get_date_order_groupby($SC_Sql_col, $SC_Sql_order, $format, $campos_order);
         }
     }
     $nmgp_order_by = " order by " . $campos_order;
     $nmgp_select .= $nmgp_order_by; 
     $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nmgp_select; 
     $rs_res = $this->Db->Execute($nmgp_select) ; 
     if ($rs_res === false && !$rs_graf->EOF) 
     { 
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
     }  
// 
     if ($nm_tipo != "resumo") 
     {  
          $this->nm_acum_res_unit($rs_res, $nm_tipo);
     }  
     else  
     {  
         while (!$rs_res->EOF) 
         {  
                $this->nm_acum_res_unit($rs_res, "resumo");
                $rs_res->MoveNext();
         }  
     }  
     $rs_res->Close();
   }
// 
   function nm_acum_res_unit($rs_res, $nm_tipo="resumo")
   {
            if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']))
            { 
                $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca'];
                if ($_SESSION['scriptcase']['charset'] != "UTF-8")
                {
                    $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
                }
                $this->est_codigo = (isset($Busca_temp['est_codigo'])) ? $Busca_temp['est_codigo'] : ""; 
                $tmp_pos = (is_string($this->est_codigo)) ? strpos($this->est_codigo, "##@@") : false;
                if ($tmp_pos !== false && !is_array($this->est_codigo))
                {
                   $this->est_codigo = substr($this->est_codigo, 0, $tmp_pos);
                }
                $this->pen_serie = (isset($Busca_temp['pen_serie'])) ? $Busca_temp['pen_serie'] : ""; 
                $tmp_pos = (is_string($this->pen_serie)) ? strpos($this->pen_serie, "##@@") : false;
                if ($tmp_pos !== false && !is_array($this->pen_serie))
                {
                   $this->pen_serie = substr($this->pen_serie, 0, $tmp_pos);
                }
                $this->cl_identificacion = (isset($Busca_temp['cl_identificacion'])) ? $Busca_temp['cl_identificacion'] : ""; 
                $tmp_pos = (is_string($this->cl_identificacion)) ? strpos($this->cl_identificacion, "##@@") : false;
                if ($tmp_pos !== false && !is_array($this->cl_identificacion))
                {
                   $this->cl_identificacion = substr($this->cl_identificacion, 0, $tmp_pos);
                }
                $this->cl_nombre = (isset($Busca_temp['cl_nombre'])) ? $Busca_temp['cl_nombre'] : ""; 
                $tmp_pos = (is_string($this->cl_nombre)) ? strpos($this->cl_nombre, "##@@") : false;
                if ($tmp_pos !== false && !is_array($this->cl_nombre))
                {
                   $this->cl_nombre = substr($this->cl_nombre, 0, $tmp_pos);
                }
                $this->fac_usuario = (isset($Busca_temp['fac_usuario'])) ? $Busca_temp['fac_usuario'] : ""; 
                $tmp_pos = (is_string($this->fac_usuario)) ? strpos($this->fac_usuario, "##@@") : false;
                if ($tmp_pos !== false && !is_array($this->fac_usuario))
                {
                   $this->fac_usuario = substr($this->fac_usuario, 0, $tmp_pos);
                }
                $this->fac_socio_transportista = (isset($Busca_temp['fac_socio_transportista'])) ? $Busca_temp['fac_socio_transportista'] : ""; 
                $tmp_pos = (is_string($this->fac_socio_transportista)) ? strpos($this->fac_socio_transportista, "##@@") : false;
                if ($tmp_pos !== false && !is_array($this->fac_socio_transportista))
                {
                   $this->fac_socio_transportista = substr($this->fac_socio_transportista, 0, $tmp_pos);
                }
            } 
            $this->fac_fecha = $rs_res->fields[0] ;  
            $this->fac_tipo_comprobante = $rs_res->fields[1] ;  
            $this->cl_identificacion = $rs_res->fields[2] ;  
            $this->cl_nombre = $rs_res->fields[3] ;  
            $this->est_codigo = $rs_res->fields[4] ;  
            $this->pen_serie = $rs_res->fields[5] ;  
            $this->fac_secuencial = $rs_res->fields[6] ;  
            $this->fac_subtotal = $rs_res->fields[7] ;  
            $this->fac_total_descuento = $rs_res->fields[8] ;  
            $this->fac_valor_iva = $rs_res->fields[9] ;  
            $this->fac_propina = $rs_res->fields[10] ;  
            $this->fac_total = $rs_res->fields[11] ;  
            $this->fac_subtotal_iva = $rs_res->fields[12] ;  
            $this->fac_subtotal_cero = $rs_res->fields[13] ;  
            $this->fac_subtotal_no_objeto = $rs_res->fields[14] ;  
            $this->fac_subtotal_excento = $rs_res->fields[15] ;  
            $this->fac_valor_ice = $rs_res->fields[16] ;  
            $this->fac_valor_irbpnr = $rs_res->fields[17] ;  
            $this->fac_comentario = $rs_res->fields[18] ;  
            $this->fac_usuario = $rs_res->fields[19] ;  
            $this->fac_autorizacion = $rs_res->fields[20] ;  
            $this->fac_socio_transportista = $rs_res->fields[21] ;  
            $this->fac_estado_sri = $rs_res->fields[22] ;  
            $this->fac_numero = $rs_res->fields[23] ;  
            $this->fac_fecha_orig = $this->fac_fecha;
            $this->fac_tipo_comprobante_orig = $this->fac_tipo_comprobante;
            $this->est_codigo_orig = $this->est_codigo;
            $this->pen_serie_orig = $this->pen_serie;
            $this->cl_identificacion_orig = $this->cl_identificacion;
            $this->cl_nombre_orig = $this->cl_nombre;
            $this->fac_usuario_orig = $this->fac_usuario;
            $this->fac_socio_transportista_orig = $this->fac_socio_transportista;
            if ($nm_tipo == "resumo")
            {
                $this->adiciona_registro($this->fac_subtotal, $this->fac_total_descuento, $this->fac_valor_iva, $this->fac_propina, $this->fac_total, $this->fac_subtotal_iva, $this->fac_subtotal_cero, $this->fac_subtotal_no_objeto, $this->fac_subtotal_excento, $this->fac_valor_ice, $this->fac_valor_irbpnr, $this->fac_fecha, $this->fac_tipo_comprobante, $this->est_codigo, $this->pen_serie, $this->cl_identificacion, $this->cl_nombre, $this->fac_usuario, $this->fac_socio_transportista, $this->fac_fecha_orig,  $this->fac_tipo_comprobante_orig,  $this->est_codigo_orig,  $this->pen_serie_orig,  $this->cl_identificacion_orig,  $this->cl_nombre_orig,  $this->fac_usuario_orig,  $this->fac_socio_transportista_orig);
            }
   }
//
   function nm_gera_mask(&$nm_campo, $nm_mask)
   { 
      $trab_campo = $nm_campo;
      $trab_mask  = $nm_mask;
      $tam_campo  = strlen($nm_campo);
      $trab_saida = "";
      $str_highlight_ini = "";
      $str_highlight_fim = "";
      if(substr($nm_campo, 0, 23) == '<div class="highlight">' && substr($nm_campo, -6) == '</div>')
      {
           $str_highlight_ini = substr($nm_campo, 0, 23);
           $str_highlight_fim = substr($nm_campo, -6);

           $trab_campo = substr($nm_campo, 23, -6);
           $tam_campo  = strlen($trab_campo);
      }      $mask_num = false;
      for ($x=0; $x < strlen($trab_mask); $x++)
      {
          if (substr($trab_mask, $x, 1) == "#")
          {
              $mask_num = true;
              break;
          }
      }
      if ($mask_num )
      {
          $ver_duas = explode(";", $trab_mask);
          if (isset($ver_duas[1]) && !empty($ver_duas[1]))
          {
              $cont1 = count(explode("#", $ver_duas[0])) - 1;
              $cont2 = count(explode("#", $ver_duas[1])) - 1;
              if ($tam_campo >= $cont2)
              {
                  $trab_mask = $ver_duas[1];
              }
              else
              {
                  $trab_mask = $ver_duas[0];
              }
          }
          $tam_mask = strlen($trab_mask);
          $xdados = 0;
          for ($x=0; $x < $tam_mask; $x++)
          {
              if (substr($trab_mask, $x, 1) == "#" && $xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_campo, $xdados, 1);
                  $xdados++;
              }
              elseif ($xdados < $tam_campo)
              {
                  $trab_saida .= substr($trab_mask, $x, 1);
              }
          }
          if ($xdados < $tam_campo)
          {
              $trab_saida .= substr($trab_campo, $xdados);
          }
          $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
          return;
      }
      for ($ix = strlen($trab_mask); $ix > 0; $ix--)
      {
           $char_mask = substr($trab_mask, $ix - 1, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               $trab_saida = $char_mask . $trab_saida;
           }
           else
           {
               if ($tam_campo != 0)
               {
                   $trab_saida = substr($trab_campo, $tam_campo - 1, 1) . $trab_saida;
                   $tam_campo--;
               }
               else
               {
                   $trab_saida = "0" . $trab_saida;
               }
           }
      }
      if ($tam_campo != 0)
      {
          $trab_saida = substr($trab_campo, 0, $tam_campo) . $trab_saida;
          $trab_mask  = str_repeat("z", $tam_campo) . $trab_mask;
      }
   
      $iz = 0; 
      for ($ix = 0; $ix < strlen($trab_mask); $ix++)
      {
           $char_mask = substr($trab_mask, $ix, 1);
           if ($char_mask != "x" && $char_mask != "z")
           {
               if ($char_mask == "." || $char_mask == ",")
               {
                   $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
               }
               else
               {
                   $iz++;
               }
           }
           elseif ($char_mask == "x" || substr($trab_saida, $iz, 1) != "0")
           {
               $ix = strlen($trab_mask) + 1;
           }
           else
           {
               $trab_saida = substr($trab_saida, 0, $iz) . substr($trab_saida, $iz + 1);
           }
      }
      $nm_campo = $str_highlight_ini . $trab_saida . $str_highlight_ini;
   } 
   function nm_conv_data_db($dt_in, $form_in, $form_out)
   {
       $dt_out = $dt_in;
       if (strtoupper($form_in) == "DB_FORMAT") {
           if ($dt_out == "null" || $dt_out == "")
           {
               $dt_out = "";
               return $dt_out;
           }
           $form_in = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "DB_FORMAT") {
           if (empty($dt_out))
           {
               $dt_out = "null";
               return $dt_out;
           }
           $form_out = "AAAA-MM-DD";
       }
       if (strtoupper($form_out) == "SC_FORMAT_REGION") {
           $this->nm_data->SetaData($dt_in, strtoupper($form_in));
           $prep_out  = (strpos(strtolower($form_in), "dd") !== false) ? "dd" : "";
           $prep_out .= (strpos(strtolower($form_in), "mm") !== false) ? "mm" : "";
           $prep_out .= (strpos(strtolower($form_in), "aa") !== false) ? "aaaa" : "";
           $prep_out .= (strpos(strtolower($form_in), "yy") !== false) ? "aaaa" : "";
           return $this->nm_data->FormataSaida($this->nm_data->FormatRegion("DT", $prep_out));
       }
       else {
           nm_conv_form_data($dt_out, $form_in, $form_out);
           return $dt_out;
       }
   }
   function html_grid_search()
   {
       global $nm_saida;
       $this->grid_search_seq = 0;
       $this->grid_search_str = "";
       $this->grid_search_dat = array();
       $this->grid_search_str = "";
        if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
        { 
           $_SESSION['scriptcase']['saida_html'] = "";
        } 
       $this->NM_case_insensitive = true;
       $tmp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['cond_pesq'];
       $pos = strrpos($tmp, "##*@@");
       if ($pos !== false)
       {
           $and_or = (substr($tmp, ($pos + 5)) == "and") ? $this->Ini->Nm_lang['lang_srch_and_cond'] : $this->Ini->Nm_lang['lang_srch_orr_cond'];
           $tmp    = substr($tmp, 0, $pos);
           $this->grid_search_str = str_replace("##*@@", ", " . $and_or . " ", $tmp);
       }
       $str_display = empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq'])?'none':'';
       if(!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
       {
          $nm_saida->saida("   <tr id=\"NM_Grid_Search\" ajax='' style='display:" . $str_display . "'>\r\n");
       }
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'] && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']))
       { 
           $_SESSION['scriptcase']['saida_html'] = "";
           foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq'] as $cmp => $def)
           {
               $this->Ini->Arr_result['setValue'][] = array('field' => 'grid_search_label_' . $cmp, 'value' => NM_charset_to_utf8(trim($def['descr'])));
               $this->Ini->Arr_result['setTitle'][] = array('field' => 'grid_search_label_' . $cmp, 'value' => NM_charset_to_utf8(trim($def['hint'])));
           }
           $lin_obj = $this->grid_search_add_tag();
           $this->Ini->Arr_result['setValue'][] = array('field' => 'id_grid_search_add_tag', 'value' => NM_charset_to_utf8($lin_obj));
           $this->Ini->Arr_result['setValue'][] = array('field' => 'id_grid_search_cmd_str', 'value' => NM_charset_to_utf8($this->grid_search_str));
           if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['save_grid']))
           {
               return;
           }
           else
           {
               $this->Ini->Arr_result['setDisplay'][] = array('field' => 'NM_Grid_Search', 'value' => '');
           }
       } 
           if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['save_grid']))
           {
               $str_display = empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']) ? 'none' : '';
               $this->Ini->Arr_result['setDisplay'][] = array('field' => 'NM_Grid_Search', 'value' => $str_display);
           }
       $nm_saida->saida("   <td  valign=\"top\"> \r\n");
       $nm_saida->saida("   <div id='id_grid_search_cmd_string' class=\"" . $this->css_scAppDivMoldura . "\" style='cursor:pointer; display:none;' onclick=\"$('#id_grid_search_cmd_string').hide();$('#div_grid_search').show();\"> \r\n");
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_exp))
             {
       $nm_saida->saida("                             <img id='id_app_div_tree_img_exp' src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->App_div_tree_img_exp . "\" border=0 align='absmiddle' class='scGridFilterTagIconExp'>\r\n");
             }
       $nm_saida->saida("     <span class=\"" . $this->css_scAppDivHeaderText . "\">\r\n");
       $nm_saida->saida("             " . $this->Ini->Nm_lang['lang_othr_dynamicsearch_title_outside'] . "\r\n");
       $nm_saida->saida("     </span>\r\n");
       $nm_saida->saida("     <span id='id_grid_search_cmd_str' class=\"" . $this->css_scAppDivContentText . "\">" . NM_encode_input(trim($this->grid_search_str)) . "</span>\r\n");
       $nm_saida->saida("   </div> \r\n");
       $nm_saida->saida("   <div id=\"div_grid_search\" class=\"" . $this->css_scAppDivMoldura . " scGridFilterTag\" style='display:;'> \r\n");
             if (is_file($this->Ini->root . $this->Ini->path_img_global . '/' . $this->Ini->App_div_tree_img_col))
             {
       $nm_saida->saida("                             <a href=\"#\" onclick=\"$('#id_grid_search_cmd_string').show();$('#div_grid_search').hide();\" class='scGridFilterTagIconCol'><img id='id_app_div_tree_img_col' src=\"" . $this->Ini->path_img_global . "/" . $this->Ini->App_div_tree_img_col . "\" border=0 align='absmiddle' style='vertical-align: middle; margin-right:4px;'></a>\r\n");
             }
       $nm_saida->saida("    <div id='icon_grid_search' class='scGridFilterTagIcon'><svg height='1792' viewBox='0 0 1792 1792' width='1792' xmlns='http://www.w3.org/2000/svg'><path d='M1595 295q17 41-14 70l-493 493v742q0 42-39 59-13 5-25 5-27 0-45-19l-256-256q-19-19-19-45v-486l-493-493q-31-29-14-70 17-39 59-39h1280q42 0 59 39z'/></svg></div> \r\n");
       $nm_saida->saida("    <div id=\"tags_grid_search\" class='scGridFilterTagList'> \r\n");
       $nm_saida->saida("        <form id= \"id_Fgrid_search\" name=\"Fgrid_search\" method=\"post\" action=\"./\" target=\"_self\"> \r\n");
       $nm_saida->saida("            <input type=\"hidden\" name=\"script_case_init\" value=\"" . NM_encode_input($this->Ini->sc_page) . "\"/> \r\n");
       $nm_saida->saida("            <input type=\"hidden\" name=\"nmgp_opcao\" value=\"grid_search_res\"/> \r\n");
       $nm_saida->saida("            <input type=\"hidden\" name=\"parm\" value=\"\"/> \r\n");
            if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']))
            {
                foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq'] as $cmp => $def)
                {
                    if (isset($def['label'])) {
                        $this->grid_search_seq++;
                        $lin_obj = $this->grid_search_tag_ini($cmp, $def, $this->grid_search_seq);
                        $nm_saida->saida("" . $lin_obj . "\r\n");
                        if ($cmp == "fac_fecha")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "fac_fecha";
                           $lin_obj = $this->grid_search_fac_fecha($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        if ($cmp == "est_codigo")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "est_codigo";
                           $lin_obj = $this->grid_search_est_codigo($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        if ($cmp == "pen_serie")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "pen_serie";
                           $lin_obj = $this->grid_search_pen_serie($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        if ($cmp == "cl_identificacion")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "cl_identificacion";
                           $lin_obj = $this->grid_search_cl_identificacion($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        if ($cmp == "cl_nombre")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "cl_nombre";
                           $lin_obj = $this->grid_search_cl_nombre($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        if ($cmp == "fac_usuario")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "fac_usuario";
                           $lin_obj = $this->grid_search_fac_usuario($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        if ($cmp == "fac_socio_transportista")
                        {
                           $this->grid_search_dat[$this->grid_search_seq] = "fac_socio_transportista";
                           $lin_obj = $this->grid_search_fac_socio_transportista($this->grid_search_seq, 'N', $def['opc'], $def['val'], $def['label']);
                           $nm_saida->saida("" . $lin_obj . "\r\n");
                        }
                        $lin_obj = $this->grid_search_tag_end();
                        $nm_saida->saida("" . $lin_obj . "\r\n");
                    }
                }
            }
       $nm_saida->saida("            <div id='add_grid_search' class='scGridFilterTagAdd' onclick=\"nm_show_advancedsearch_fields();\" >\r\n");
       $nm_saida->saida("                " . $this->Ini->Nm_lang['lang_srch_addfields'] . "\r\n");
       $nm_saida->saida("                <div id='id_grid_search_add_tag' class='SC_SubMenuApp' style='position: absolute; border-collapse: collapse; z-index: 1000; display:none;'>\r\n");
       $nm_saida->saida("                    <div>\r\n");
           $lin_obj = $this->grid_search_add_tag();
       $nm_saida->saida("" . $lin_obj . "\r\n");
       $nm_saida->saida("                    </div>\r\n");
       $nm_saida->saida("                </div>\r\n");
       $nm_saida->saida("            </div>\r\n");
       $nm_saida->saida("        </form>\r\n");
       $nm_saida->saida("    </div>\r\n");
       $this->NM_fil_ant = $this->gera_array_filtros();
       $strDisplayFilter = (empty($this->NM_fil_ant))?'none':'';
       $nm_saida->saida("   <div id='save_grid_search' class='scGridFilterTagSave'>\r\n");
       $nm_saida->saida("    <form name='Fgrid_search_save'>\r\n");
       $nm_saida->saida("     <span id=\"id_NM_filters_save\" style=\"display: " . $strDisplayFilter . "\">\r\n");
       $nm_saida->saida("       <SELECT class=\"scFilterToolbar_obj\" id=\"id_sel_recup_filters\" name=\"sel_recup_filters\" onChange=\"nm_change_grid_search(this)\" size=\"1\">\r\n");
       $nm_saida->saida("           <option value=\"\"></option>\r\n");
       $Nome_filter = "";
       foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
       {
           $Select      = "";
           $Cada_filter = $Tipo_filter[2];
           if (isset($this->NM_curr_fil) && $Cada_filter == $this->NM_curr_fil)
           {
               $Select = "selected";
           }
           if (NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] != "UTF-8")
           {
               $Cada_filter    = sc_convert_encoding($Cada_filter, $_SESSION['scriptcase']['charset'], "UTF-8");
               $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], $_SESSION['scriptcase']['charset'], "UTF-8");
           }
           elseif (!NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] == "UTF-8")
           {
               $Cada_filter    = sc_convert_encoding($Cada_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
               $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], "UTF-8", $_SESSION['scriptcase']['charset']);
           }
           if ($Tipo_filter[1] != $Nome_filter)
           {
               $Nome_filter = $Tipo_filter[1];
                   $nm_saida->saida("       <option value=''>" . NM_encode_input($Nome_filter) . "</option>\r\n");
           }
              $nm_saida->saida("        <option value='" . NM_encode_input($Tipo_filter[0]) . "' " . $Select . ">.." . $Cada_filter . "</option>\r\n");
       }
       $nm_saida->saida("       </SELECT>\r\n");
       $nm_saida->saida("     </span>\r\n");
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bedit_filter_appdiv", "document.getElementById('Salvar_filters').style.display = ''; document.Fgrid_search_save.nmgp_save_name.focus()", "document.getElementById('Salvar_filters').style.display = ''; document.Fgrid_search_save.nmgp_save_name.focus()", "Ativa_save", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("       $Cod_Btn \r\n");
       $nm_saida->saida("    <DIV id=\"Salvar_filters\" style=\"display:none;z-index:9999;position: absolute;\">\r\n");
       $nm_saida->saida("     <TABLE align=\"center\" class=\"scFilterTable\">\r\n");
       $nm_saida->saida("      <TR>\r\n");
       $nm_saida->saida("       <TD class=\"scFilterBlock\">\r\n");
       $nm_saida->saida("        <table style=\"border-width: 0px; border-collapse: collapse\" width=\"100%\">\r\n");
       $nm_saida->saida("         <tr>\r\n");
       $nm_saida->saida("          <td style=\"padding: 0px\" valign=\"top\" class=\"scFilterBlockFont\">" . $this->Ini->Nm_lang['lang_othr_srch_head'] . "</td>\r\n");
       $nm_saida->saida("          <td style=\"padding: 0px\" align=\"right\" valign=\"top\">\r\n");
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bcancelar_appdiv", "document.getElementById('Salvar_filters').style.display = 'none'", "document.getElementById('Salvar_filters').style.display = 'none'", "Cancel_frm", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("       $Cod_Btn \r\n");
       $nm_saida->saida("          </td>\r\n");
       $nm_saida->saida("         </tr>\r\n");
       $nm_saida->saida("        </table>\r\n");
       $nm_saida->saida("       </TD>\r\n");
       $nm_saida->saida("      </TR>\r\n");
       $nm_saida->saida("      <TR>\r\n");
       $nm_saida->saida("       <TD class=\"scFilterFieldOdd\">\r\n");
       $nm_saida->saida("        <table style=\"border-width: 0px; border-collapse: collapse\" width=\"100%\">\r\n");
       $nm_saida->saida("         <tr>\r\n");
       $nm_saida->saida("          <td style=\"padding: 0px\" valign=\"top\">\r\n");
       $nm_saida->saida("           <input class=\"scFilterObjectOdd\" type=\"text\" id=\"SC_nmgp_save_name\" name=\"nmgp_save_name\" value=\"\">\r\n");
       $nm_saida->saida("          </td>\r\n");
       $nm_saida->saida("          <td style=\"padding: 0px\" align=\"right\" valign=\"top\">\r\n");
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bsalvar_appdiv", "nm_save_grid_search()", "nm_save_grid_search()", "Save_frm", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("       $Cod_Btn \r\n");
       $nm_saida->saida("          </td>\r\n");
       $nm_saida->saida("         </tr>\r\n");
       $nm_saida->saida("        </table>\r\n");
       $nm_saida->saida("       </TD>\r\n");
       $nm_saida->saida("      </TR>\r\n");
       $style_del_filter = (!empty($this->NM_fil_ant)) ? '' : 'none';
       $nm_saida->saida("      <TR>\r\n");
       $nm_saida->saida("       <TD class=\"scFilterFieldEven\">\r\n");
       $nm_saida->saida("       <DIV id=\"Apaga_filters\" style=\"display: " . $style_del_filter . "\">\r\n");
       $nm_saida->saida("        <table style=\"border-width: 0px; border-collapse: collapse\" width=\"100%\">\r\n");
       $nm_saida->saida("         <tr>\r\n");
       $nm_saida->saida("          <td style=\"padding: 0px\" valign=\"top\">\r\n");
       $nm_saida->saida("          <div id=\"id_sel_filters_del\">\r\n");
       $nm_saida->saida("           <SELECT class=\"scFilterObjectOdd\" id=\"sel_filters_del\" name=\"NM_filters_del\" size=\"1\">\r\n");
       $nm_saida->saida("            <option value=\"\"></option>\r\n");
       $Nome_filter = "";
       foreach ($this->NM_fil_ant as $Cada_filter => $Tipo_filter)
       {
           $Select = "";
           if ($Cada_filter == $this->NM_curr_fil)
           {
               $Select = "selected";
           }
           if (NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] != "UTF-8")
           {
               $Cada_filter    = sc_convert_encoding($Cada_filter, $_SESSION['scriptcase']['charset'], "UTF-8");
               $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], $_SESSION['scriptcase']['charset'], "UTF-8");
           }
           elseif (!NM_is_utf8($Cada_filter) && $_SESSION['scriptcase']['charset'] == "UTF-8")
           {
               $Cada_filter    = sc_convert_encoding($Cada_filter, "UTF-8", $_SESSION['scriptcase']['charset']);
               $Tipo_filter[0] = sc_convert_encoding($Tipo_filter[0], "UTF-8", $_SESSION['scriptcase']['charset']);
           }
           if ($Tipo_filter[1] != $Nome_filter)
           {
               $Nome_filter = $Tipo_filter[1];
               $nm_saida->saida("           <option value=''>" . NM_encode_input($Nome_filter) . "</option>\r\n");
           }
          $nm_saida->saida("           <option value='" . NM_encode_input($Tipo_filter[0]) . "' " . $Select . ">.." . $Cada_filter . "</option>\r\n");
       }
       $nm_saida->saida("           </SELECT>\r\n");
       $nm_saida->saida("          </div>\r\n");
       $nm_saida->saida("          </td>\r\n");
       $nm_saida->saida("          <td style=\"padding: 0px\" align=\"right\" valign=\"top\">\r\n");
       $Cod_Btn = nmButtonOutput($this->arr_buttons, "bexcluir", "nm_del_grid_search()", "nm_del_grid_search()", "Exc_filtro", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $nm_saida->saida("       $Cod_Btn \r\n");
       $nm_saida->saida("          </td>\r\n");
       $nm_saida->saida("         </tr>\r\n");
       $nm_saida->saida("        </table>\r\n");
       $nm_saida->saida("       </DIV>\r\n");
       $nm_saida->saida("       </TD>\r\n");
       $nm_saida->saida("      </TR>\r\n");
       $nm_saida->saida("     </TABLE>\r\n");
       $nm_saida->saida("    </DIV> \r\n");
       $nm_saida->saida("   </form>\r\n");
       $nm_saida->saida("  </div> \r\n");
       $nm_saida->saida("    <div id='close_grid_search' class='scGridFilterTagClose' onclick=\"checkLastTag(true);setTimeout(function() {nm_proc_grid_search(0, 'del_grid_search_all', 'grid_search_res')}, 200);\"></div>\r\n");
       $nm_saida->saida("   </div>\r\n");
       $nm_saida->saida("   </td>\r\n");
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
       { 
           $this->Ini->Arr_result['setValue'][] = array('field' => 'NM_Grid_Search', 'value' => NM_charset_to_utf8($_SESSION['scriptcase']['saida_html']));
           $_SESSION['scriptcase']['saida_html'] = "";
           if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['save_grid']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']))
           { 
               $this->Ini->Arr_result['exec_JS'][] = array('function' => 'SC_carga_evt_jquery_grid', 'parm' => 'all');
           } 
       } 
       if(!$_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
       {
           $nm_saida->saida("   </tr>\r\n");
       }
       $this->JS_grid_search();
   }
   function grid_search_tag_ini($cmp, $def, $seq)
   {
       global $nm_saida;
       $this->Cmps_select2_grid = array();
       $lin_obj  = "";
       $lin_obj .= "<div class='scGridFilterTagListItem' id='grid_search_" . $cmp . "'>";
       if (in_array($cmp, $this->Cmps_select2_grid))
       {
           $lin_obj .= "<span class='scGridFilterTagListItemLabel' id='grid_search_label_" . $cmp . "' title='" . NM_encode_input($def['hint']) . "' style='cursor:pointer;' onclick=\"closeAllTags();$('#grid_search_" . $cmp . " .scGridFilterTagListFilter').toggle(); Sc_carga_select2_grid_" . $cmp . "(" . $seq . "); \">" . NM_encode_input($def['descr']) . "</span>";
       }
       else
       {
           $lin_obj .= "<span class='scGridFilterTagListItemLabel' id='grid_search_label_" . $cmp . "' title='" . NM_encode_input($def['hint']) . "' style='cursor:pointer;' onclick=\"closeAllTags();$('#grid_search_" . $cmp . " .scGridFilterTagListFilter').toggle();\">" . NM_encode_input($def['descr']) . "</span>";
       }
       $lin_obj .= "<span class='scGridFilterTagListItemClose' onclick=\"$(this).parent().remove();checkLastTag(false);setTimeout(function() {nm_proc_grid_search('" . $seq . "', 'del_grid_search', 'grid_search_res'); return false;}, 200); return false;
    \"></span>";
       return $lin_obj;
   }
   function grid_search_tag_end()
   {
       global $nm_saida;
       $lin_obj  = "</div>";
       return $lin_obj;
   }
   function grid_search_add_tag()
   {
       $lin_obj  = "";
       $All_cmp_search = array('fac_fecha','est_codigo','pen_serie','cl_identificacion','cl_nombre','fac_usuario','fac_socio_transportista');
       $nmgp_tab_label = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['pesq_tab_label'];
       if (!empty($nmgp_tab_label))
       {
          $nm_tab_campos = explode("?@?", $nmgp_tab_label);
          $nmgp_tab_label = array();
          foreach ($nm_tab_campos as $cada_campo)
          {
              $parte_campo = explode("?#?", $cada_campo);
              $nmgp_tab_label[$parte_campo[0]] = $parte_campo[1];
          }
       }
       if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']) && count($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq']) < 7)
       {
           $lin_obj .= "<table id='id_grid_search_all_cmp' cellpadding=0 cellspacing=0>";
           foreach ($All_cmp_search as $cada_cmp)
           {
               if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['grid_pesq'][$cada_cmp]))
               {
                   $lin_obj .= "  <tr>";
                   $lin_obj .= "    <td class='scBtnGrpBackground'>";
                   $lin_obj .= "        <div class='scBtnGrpText' style='cursor:pointer; right:80px;' onClick=\"ajax_add_grid_search(this, 'resumo', '" . $cada_cmp . "'); return false;\">";
                   $lin_obj .= "            " . $nmgp_tab_label[$cada_cmp] . "";
                   $lin_obj .= "        </div>";
                   $lin_obj .= "    </td>";
                   $lin_obj .= "  </tr>";
               }
           }
           $lin_obj .= "</table>";
       }
       return $lin_obj;
   }
   function grid_search_fac_fecha($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_fac_fecha_" . $ind . "' style='display:none; z-index: 7'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_fac_fecha_cond_" . $ind . "' name='cond_grid_search_fac_fecha_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle;' onChange='grid_search_change_bw(\"fac_fecha\", $ind)'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $selected = ($opc == "bw") ? " selected" : "";
       $lin_obj .= "        <option value='bw'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_betw'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_fac_fecha_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $Form_base          = "ddmmyyyy";
       $date_format_show   = "";
       $Str_date = str_replace("a", "y", strtolower($_SESSION['scriptcase']['reg_conf']['date_format']));
       $Lim   = strlen($Str_date);
       $Str   = "";
       $Ult   = "";
       $Arr_D = array();
       for ($I = 0; $I < $Lim; $I++)
       {
           $Char = substr($Str_date, $I, 1);
           if ($Char != $Ult && "" != $Str)
           {
               $Arr_D[] = $Str;
               $Str     = $Char;
           }
           else
           {
              $Str    .= $Char;
           }
           $Ult = $Char;
       }
       $Arr_D[] = $Str;
       $Prim = true;
       foreach ($Arr_D as $Cada_d)
       {
           if (strpos($Form_base, $Cada_d) !== false)
           {
               $date_format_show .= (!$Prim) ? $_SESSION['scriptcase']['reg_conf']['date_sep'] : "";
               $date_format_show .= $Cada_d;
               $Prim = false;
           }
       }
       $Tmp_date = $Arr_D;
       $date_format_show = str_replace("dd",   $this->Ini->Nm_lang['lang_othr_date_days'], $date_format_show);
       $date_format_show = str_replace("mm",   $this->Ini->Nm_lang['lang_othr_date_mnth'], $date_format_show);
       $date_format_show = str_replace("yyyy", $this->Ini->Nm_lang['lang_othr_date_year'], $date_format_show);
       $date_format_show = str_replace("aaaa", $this->Ini->Nm_lang['lang_othr_date_year'], $date_format_show);
       $date_format_show = str_replace("hh",   $this->Ini->Nm_lang['lang_othr_date_hour'], $date_format_show);
       $date_format_show = str_replace("ii",   $this->Ini->Nm_lang['lang_othr_date_mint'], $date_format_show);
       $date_format_show = str_replace("ss",   $this->Ini->Nm_lang['lang_othr_date_scnd'], $date_format_show);
       $val_r = $this->Ini->dyn_convert_date($val[0]);
       foreach ($Tmp_date as $Ind => $Part_date)
       {
            $AutoTab = (($Ind + 1) < count($Tmp_date)) ? "autoTab: true" : "autoTab: false";
           if (substr($Part_date, 0,1) == "y")
           {
               $val_cmp = (isset($val_r['ano'])) ? $val_r['ano'] : "";
               $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_fac_fecha_ano_val_" . $ind . "' name='val_grid_search_fac_fecha_ano_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=4 alt=\"{datatype: 'mask', maskList: '9999', alignRight: true, maxLength: 4, " . $AutoTab . ", enterTab: false}\">";
           }
           if (substr($Part_date, 0,1) == "m")
           {
               $val_cmp = (isset($val_r['mes'])) ? $val_r['mes'] : "";
               $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_fac_fecha_mes_val_" . $ind . "' name='val_grid_search_fac_fecha_mes_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=2 alt=\"{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, " . $AutoTab . ", enterTab: false}\">";
           }
           if (substr($Part_date, 0,1) == "d")
           {
               $val_cmp = (isset($val_r['dia'])) ? $val_r['dia'] : "";
               $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_fac_fecha_dia_val_" . $ind . "' name='val_grid_search_fac_fecha_dia_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=2 alt=\"{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, " . $AutoTab . ", enterTab: false}\">";
           }
       }
       $lin_obj .= "     <input type=\"hidden\" id=\"sc_grid_fac_fecha_jq_" . $ind . "\">";
       $lin_obj .= "&nbsp;";
       $lin_obj .= "" . $date_format_show . "";
       $lin_obj .= "       </span>";
       if ($opc == "bw")
       {
           $display_in_2 = "''";
       }
       else
       {
           $display_in_2 = "none";
       }
       $lin_obj .= "       <span id=\"grid_fac_fecha_in_2_" . $ind . "\" style=\"display:" . $display_in_2 . "\">";
       $date_sep_bw = " " . $this->Ini->Nm_lang['lang_srch_between_values'] . " ";
       if ($_SESSION['scriptcase']['charset'] != "UTF-8" && NM_is_utf8($date_sep_bw))
       {
           $date_sep_bw = sc_convert_encoding($date_sep_bw, $_SESSION['scriptcase']['charset'], "UTF-8");
       }
       $lin_obj .= "       <br>" . $date_sep_bw . "<br>";
       $val_r = isset($val[1]) ? $this->Ini->dyn_convert_date($val[1]) : array();
       foreach ($Tmp_date as $Ind => $Part_date)
       {
            $AutoTab = (($Ind + 1) < count($Tmp_date)) ? "autoTab: true" : "autoTab: false";
           if (substr($Part_date, 0,1) == "y")
           {
               $val_cmp = (isset($val_r['ano'])) ? $val_r['ano'] : "";
               $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_fac_fecha_v2__ano_val_" . $ind . "' name='val_grid_search_fac_fecha_v2__ano_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=4 alt=\"{datatype: 'mask', maskList: '9999', alignRight: true, maxLength: 4, " . $AutoTab . ", enterTab: false}\">";
           }
           if (substr($Part_date, 0,1) == "m")
           {
               $val_cmp = (isset($val_r['mes'])) ? $val_r['mes'] : "";
               $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_fac_fecha_v2__mes_val_" . $ind . "' name='val_grid_search_fac_fecha_v2__mes_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=2 alt=\"{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, " . $AutoTab . ", enterTab: false}\">";
           }
           if (substr($Part_date, 0,1) == "d")
           {
               $val_cmp = (isset($val_r['dia'])) ? $val_r['dia'] : "";
               $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_fac_fecha_v2__dia_val_" . $ind . "' name='val_grid_search_fac_fecha_v2__dia_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=2 alt=\"{datatype: 'mask', maskList: '99', alignRight: true, maxLength: 2, " . $AutoTab . ", enterTab: false}\">";
           }
       }
       $lin_obj .= "     <input type=\"hidden\" id=\"sc_grid_fac_fecha_v2__jq_" . $ind . "\">";
       $lin_obj .= "&nbsp;";
       $lin_obj .= "" . $date_format_show . "";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function grid_search_est_codigo($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_est_codigo_" . $ind . "' style='display:none; z-index: 10'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_est_codigo_cond_" . $ind . "' name='cond_grid_search_est_codigo_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_est_codigo_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['est_codigo'] = array();
       $est_codigo_look = (is_string($est_codigo) ? substr($this->Db->qstr($est_codigo), 1, -1) : $est_codigo); 
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT est_codigo, est_codigo  FROM del_establecimiento WHERE est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "'  ORDER BY est_codigo"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['est_codigo'][] = trim($rs->fields[0]);
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "   <table style=\"padding: 0px; spacing: 0px; border-width: 0px;\"><tr><td>";
       $lin_obj .= "    <input id='grid_search_est_codigo_val_" . $ind . "' name='val_grid_search_est_codigo_" . $ind . "' type='hidden' value=''>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_est_codigo_val_" . $ind . "_orig\" name=\"val_grid_search_est_codigo_" . $ind . "_orig\" size=7 multiple onDblClick=\"nm_add_sel_Grid('grid_search_est_codigo_val_" . $ind . "_orig', 'grid_search_est_codigo_val_" . $ind . "_dest', 'N')\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $est_codigo_sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $est_codigo_sel = " disabled =\"disabled\" style=\"color: #A0A0A0\"";
                        break;
                    }
                }
             }
             else
             {
                $est_codigo_sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . NM_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $est_codigo_sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td align=\"center\">";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_rightall", "nm_add_all_Grid('grid_search_est_codigo_val_" . $ind . "_orig', 'grid_search_est_codigo_val_" . $ind . "_dest', 'N');", "nm_add_all_Grid('grid_search_est_codigo_val_" . $ind . "_orig', 'grid_search_est_codigo_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_rightall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_right", "nm_add_sel_Grid('grid_search_est_codigo_val_" . $ind . "_orig', 'grid_search_est_codigo_val_" . $ind . "_dest', 'N');", "nm_add_sel_Grid('grid_search_est_codigo_val_" . $ind . "_orig', 'grid_search_est_codigo_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_righ", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_left", "nm_del_sel_Grid('grid_search_est_codigo_val_" . $ind . "_dest', 'grid_search_est_codigo_val_" . $ind . "_orig', 'N');", "nm_del_sel_Grid('grid_search_est_codigo_val_" . $ind . "_dest', 'grid_search_est_codigo_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_left", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_leftall", "nm_del_all_Grid('grid_search_est_codigo_val_" . $ind . "_dest', 'grid_search_est_codigo_val_" . $ind . "_orig', 'N');", "nm_del_all_Grid('grid_search_est_codigo_val_" . $ind . "_dest', 'grid_search_est_codigo_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_leftall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_est_codigo_val_" . $ind . "_dest\" name=\"val_grid_search_est_codigo_" . $ind . "_dest\" size=7 multiple onDblClick=\"nm_del_sel_Grid('grid_search_est_codigo_val_" . $ind . "_dest', 'grid_search_est_codigo_val_" . $ind . "_orig', 'N')\">";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $lin_obj .= "       <OPTION value=\"" . $nm_opc_cod . $delimitador . $nm_opc_val . "\">" . $nm_opc_val . "</OPTION>";
                    }
                }
             }
          }
       }
       $lin_obj .= "    </select>";
       $lin_obj .= "   </td></tr></table>";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function grid_search_pen_serie($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_pen_serie_" . $ind . "' style='display:none; z-index: 10'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_pen_serie_cond_" . $ind . "' name='cond_grid_search_pen_serie_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_pen_serie_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['pen_serie'] = array();
       $pen_serie_look = (is_string($pen_serie) ? substr($this->Db->qstr($pen_serie), 1, -1) : $pen_serie); 
       $nmgp_def_dados  = ""; 
       $est_codigo = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']['est_codigo'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['campos_busca']['est_codigo'] : "";
       $est_codigo_val_str = "''";
       if (is_array($est_codigo) && !empty($est_codigo))
       {
          $tmp_array = array();
          $est_codigo_val_str = "";
          foreach ($est_codigo as $tmp_val_cmp)
          {
             if ("" != $est_codigo_val_str)
             {
                $est_codigo_val_str .= ",";
             }
             $tmp_pos = (is_string($tmp_val_cmp)) ? strpos($tmp_val_cmp, "##@@") : false;
             if ($tmp_pos === false)
             {
                 $tmp_array[] = $tmp_val_cmp;
             }
             else
             {
                 $tmp_val_cmp = substr($tmp_val_cmp, 0, $tmp_pos);
                 $tmp_array[] = $tmp_val_cmp;
             }
             $est_codigo_val_str .= "'$tmp_val_cmp'";
          }
       }
       $nm_comando = "SELECT pen_serie,pen_serie  FROM del_punto_emision inner join del_establecimiento on pem_establecimiento=est_id where est_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and est_codigo  IN ($est_codigo_val_str)"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['pen_serie'][] = trim($rs->fields[0]);
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "   <table style=\"padding: 0px; spacing: 0px; border-width: 0px;\"><tr><td>";
       $lin_obj .= "    <input id='grid_search_pen_serie_val_" . $ind . "' name='val_grid_search_pen_serie_" . $ind . "' type='hidden' value=''>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_pen_serie_val_" . $ind . "_orig\" name=\"val_grid_search_pen_serie_" . $ind . "_orig\" size=7 multiple onDblClick=\"nm_add_sel_Grid('grid_search_pen_serie_val_" . $ind . "_orig', 'grid_search_pen_serie_val_" . $ind . "_dest', 'N')\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $pen_serie_sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $pen_serie_sel = " disabled =\"disabled\" style=\"color: #A0A0A0\"";
                        break;
                    }
                }
             }
             else
             {
                $pen_serie_sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . NM_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $pen_serie_sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td align=\"center\">";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_rightall", "nm_add_all_Grid('grid_search_pen_serie_val_" . $ind . "_orig', 'grid_search_pen_serie_val_" . $ind . "_dest', 'N');", "nm_add_all_Grid('grid_search_pen_serie_val_" . $ind . "_orig', 'grid_search_pen_serie_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_rightall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_right", "nm_add_sel_Grid('grid_search_pen_serie_val_" . $ind . "_orig', 'grid_search_pen_serie_val_" . $ind . "_dest', 'N');", "nm_add_sel_Grid('grid_search_pen_serie_val_" . $ind . "_orig', 'grid_search_pen_serie_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_righ", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_left", "nm_del_sel_Grid('grid_search_pen_serie_val_" . $ind . "_dest', 'grid_search_pen_serie_val_" . $ind . "_orig', 'N');", "nm_del_sel_Grid('grid_search_pen_serie_val_" . $ind . "_dest', 'grid_search_pen_serie_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_left", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_leftall", "nm_del_all_Grid('grid_search_pen_serie_val_" . $ind . "_dest', 'grid_search_pen_serie_val_" . $ind . "_orig', 'N');", "nm_del_all_Grid('grid_search_pen_serie_val_" . $ind . "_dest', 'grid_search_pen_serie_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_leftall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_pen_serie_val_" . $ind . "_dest\" name=\"val_grid_search_pen_serie_" . $ind . "_dest\" size=7 multiple onDblClick=\"nm_del_sel_Grid('grid_search_pen_serie_val_" . $ind . "_dest', 'grid_search_pen_serie_val_" . $ind . "_orig', 'N')\">";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $lin_obj .= "       <OPTION value=\"" . $nm_opc_cod . $delimitador . $nm_opc_val . "\">" . $nm_opc_val . "</OPTION>";
                    }
                }
             }
          }
       }
       $lin_obj .= "    </select>";
       $lin_obj .= "   </td></tr></table>";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function grid_search_cl_identificacion($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_cl_identificacion_" . $ind . "' style='display:none; z-index: 10'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_cl_identificacion_cond_" . $ind . "' name='cond_grid_search_cl_identificacion_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_cl_identificacion_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $cl_identificacion = $val_cmp;
       if ($cl_identificacion != "")
       {
       $cl_identificacion_look = (is_string($cl_identificacion) ? substr($this->Db->qstr($cl_identificacion), 1, -1) : $cl_identificacion); 
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct cl_identificacion from " . $this->Ini->nm_tabela . " where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and fac_estado='V') and #lowerI#cl_identificacion#lowerF# = #lowerI#'$cl_identificacion_look'#lowerF# order by cl_identificacion"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       }
       if (isset($nmgp_def_dados[0][$cl_identificacion]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$cl_identificacion];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_cl_identificacion_val_" . $ind . "' name='val_grid_search_cl_identificacion_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=20 alt=\"{datatype: 'text', maxLength: 20, allowedChars: '', lettersCase: '', autoTab: false, enterTab: false}\" style='display: none'>";
       $tmp_pos = (is_string($val_cmp)) ? strpos($val_cmp, "##@@") : false;
       if ($tmp_pos !== false) {
           $val_cmp = substr($val_cmp, ($tmp_pos + 4));
           $sAutocompValue = substr($sAutocompValue, ($tmp_pos + 4));
       }
       $lin_obj .= "     <select class='sc-ui-autocomp-cl_identificacion " . $this->css_scAppDivToolbarInput . "' id='id_ac_grid_cl_identificacion" . $ind . "' name='val_grid_search_cl_identificacion_autocomp" . $ind . "'>";
       if ('' !=  $cl_identificacion) {
           $lin_obj .= "     <option value='" . $cl_identificacion . "'  selected>" . $sAutocompValue . "</option>";
       }
       $lin_obj .= "     </select>";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function grid_search_cl_nombre($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_cl_nombre_" . $ind . "' style='display:none; z-index: 10'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_cl_nombre_cond_" . $ind . "' name='cond_grid_search_cl_nombre_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_cl_nombre_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $cl_nombre = $val_cmp;
       if ($cl_nombre != "")
       {
       $cl_nombre_look = (is_string($cl_nombre) ? substr($this->Db->qstr($cl_nombre), 1, -1) : $cl_nombre); 
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct cl_nombre from " . $this->Ini->nm_tabela . " where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and fac_estado='V') and #lowerI#cl_nombre#lowerF# = #lowerI#'$cl_nombre_look'#lowerF# order by cl_nombre"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = trim($rs->fields[0]);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       }
       if (isset($nmgp_def_dados[0][$cl_nombre]))
       {
           $sAutocompValue = $nmgp_def_dados[0][$cl_nombre];
       }
       else
       {
           $sAutocompValue = $val_cmp;
           $val[0][0]      = $val_cmp;
       }
       $val_cmp = (isset($val[0][0])) ? $val[0][0] : "";
       $lin_obj .= "     <input  type=\"text\" class='sc-js-input " . $this->css_scAppDivToolbarInput . "' id='grid_search_cl_nombre_val_" . $ind . "' name='val_grid_search_cl_nombre_" . $ind . "' value=\"" . NM_encode_input($val_cmp) . "\" size=50 alt=\"{datatype: 'text', maxLength: 300, allowedChars: '', lettersCase: '', autoTab: false, enterTab: false}\" style='display: none'>";
       $tmp_pos = (is_string($val_cmp)) ? strpos($val_cmp, "##@@") : false;
       if ($tmp_pos !== false) {
           $val_cmp = substr($val_cmp, ($tmp_pos + 4));
           $sAutocompValue = substr($sAutocompValue, ($tmp_pos + 4));
       }
       $lin_obj .= "     <select class='sc-ui-autocomp-cl_nombre " . $this->css_scAppDivToolbarInput . "' id='id_ac_grid_cl_nombre" . $ind . "' name='val_grid_search_cl_nombre_autocomp" . $ind . "'>";
       if ('' !=  $cl_nombre) {
           $lin_obj .= "     <option value='" . $cl_nombre . "'  selected>" . $sAutocompValue . "</option>";
       }
       $lin_obj .= "     </select>";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function grid_search_fac_usuario($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_fac_usuario_" . $ind . "' style='display:none; z-index: 10'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_fac_usuario_cond_" . $ind . "' name='cond_grid_search_fac_usuario_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_fac_usuario_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['fac_usuario'] = array();
       $fac_usuario_look = (is_string($fac_usuario) ? substr($this->Db->qstr($fac_usuario), 1, -1) : $fac_usuario); 
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT usu_usuario, usu_nombre  FROM del_usuario  where usu_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY usu_nombre"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['fac_usuario'][] = trim($rs->fields[0]);
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "   <table style=\"padding: 0px; spacing: 0px; border-width: 0px;\"><tr><td>";
       $lin_obj .= "    <input id='grid_search_fac_usuario_val_" . $ind . "' name='val_grid_search_fac_usuario_" . $ind . "' type='hidden' value=''>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_fac_usuario_val_" . $ind . "_orig\" name=\"val_grid_search_fac_usuario_" . $ind . "_orig\" size=7 multiple onDblClick=\"nm_add_sel_Grid('grid_search_fac_usuario_val_" . $ind . "_orig', 'grid_search_fac_usuario_val_" . $ind . "_dest', 'N')\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $fac_usuario_sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $fac_usuario_sel = " disabled =\"disabled\" style=\"color: #A0A0A0\"";
                        break;
                    }
                }
             }
             else
             {
                $fac_usuario_sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . NM_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $fac_usuario_sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td align=\"center\">";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_rightall", "nm_add_all_Grid('grid_search_fac_usuario_val_" . $ind . "_orig', 'grid_search_fac_usuario_val_" . $ind . "_dest', 'N');", "nm_add_all_Grid('grid_search_fac_usuario_val_" . $ind . "_orig', 'grid_search_fac_usuario_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_rightall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_right", "nm_add_sel_Grid('grid_search_fac_usuario_val_" . $ind . "_orig', 'grid_search_fac_usuario_val_" . $ind . "_dest', 'N');", "nm_add_sel_Grid('grid_search_fac_usuario_val_" . $ind . "_orig', 'grid_search_fac_usuario_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_righ", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_left", "nm_del_sel_Grid('grid_search_fac_usuario_val_" . $ind . "_dest', 'grid_search_fac_usuario_val_" . $ind . "_orig', 'N');", "nm_del_sel_Grid('grid_search_fac_usuario_val_" . $ind . "_dest', 'grid_search_fac_usuario_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_left", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_leftall", "nm_del_all_Grid('grid_search_fac_usuario_val_" . $ind . "_dest', 'grid_search_fac_usuario_val_" . $ind . "_orig', 'N');", "nm_del_all_Grid('grid_search_fac_usuario_val_" . $ind . "_dest', 'grid_search_fac_usuario_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_leftall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_fac_usuario_val_" . $ind . "_dest\" name=\"val_grid_search_fac_usuario_" . $ind . "_dest\" size=7 multiple onDblClick=\"nm_del_sel_Grid('grid_search_fac_usuario_val_" . $ind . "_dest', 'grid_search_fac_usuario_val_" . $ind . "_orig', 'N')\">";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $lin_obj .= "       <OPTION value=\"" . $nm_opc_cod . $delimitador . $nm_opc_val . "\">" . $nm_opc_val . "</OPTION>";
                    }
                }
             }
          }
       }
       $lin_obj .= "    </select>";
       $lin_obj .= "   </td></tr></table>";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function grid_search_fac_socio_transportista($ind, $ajax, $opc="", $val=array(), $label='')
   {
       $lin_obj  = "";
       $lin_obj .= "     <div class='scGridFilterTagListFilter' id='grid_search_fac_socio_transportista_" . $ind . "' style='display:none; z-index: 10'>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterLabel'>". NM_encode_input($label) ." <span class='scGridFilterTagListFilterLabelClose' onclick='closeAllTags(this);'></span></div>";
       $lin_obj .= "         <div class='scGridFilterTagListFilterInputs'>";
       if (empty($opc))
       {
           $opc = "eq";
       }
       $lin_obj .= "       <select id='grid_search_fac_socio_transportista_cond_" . $ind . "' name='cond_grid_search_fac_socio_transportista_" . $ind . "' class='" . $this->css_scAppDivToolbarInput . "' style='vertical-align: middle; display: none'>";
       $selected = ($opc == "eq") ? " selected" : "";
       $lin_obj .= "        <option value='eq'" . $selected . ">" . $this->Ini->Nm_lang['lang_srch_exac'] . "</option>";
       $lin_obj .= "       </select>";
       if ($opc == "nu" || $opc == "nn" || $opc == "ep" || $opc == "ne")
       {
           $display_in_1 = "none";
       }
       else
       {
           $display_in_1 = "''";
       }
       $lin_obj .= "       <span id=\"grid_fac_socio_transportista_" . $ind . "\" style=\"display:" . $display_in_1 . "\">";
       $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['fac_socio_transportista'] = array();
       $fac_socio_transportista_look = (is_string($fac_socio_transportista) ? substr($this->Db->qstr($fac_socio_transportista), 1, -1) : $fac_socio_transportista); 
       $nmgp_def_dados  = ""; 
       $nm_comando = "SELECT usu_usuario, usu_nombre  FROM del_usuario  where usu_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' ORDER BY usu_nombre"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->Execute($nm_comando)) 
       { 
          while (!$rs->EOF) 
          { 
             $_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['psq_check_ret']['fac_socio_transportista'][] = trim($rs->fields[0]);
             $nmgp_def_dados .= trim($rs->fields[1]) . "?#?"; 
             $nmgp_def_dados .= trim($rs->fields[0]) . "?#?N?@?"; 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
       } 
       else  
       {  
           if  ($ajax == 'N')
           {  
              $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
              exit; 
           } 
           else
           {  
              echo $this->Db->ErrorMsg(); 
           } 
       } 
       $lin_obj .= "   <table style=\"padding: 0px; spacing: 0px; border-width: 0px;\"><tr><td>";
       $lin_obj .= "    <input id='grid_search_fac_socio_transportista_val_" . $ind . "' name='val_grid_search_fac_socio_transportista_" . $ind . "' type='hidden' value=''>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_fac_socio_transportista_val_" . $ind . "_orig\" name=\"val_grid_search_fac_socio_transportista_" . $ind . "_orig\" size=7 multiple onDblClick=\"nm_add_sel_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'N')\">";
       $delimitador = "##@@";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       $val = isset($val[0]) ? $val[0] : array();
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                $fac_socio_transportista_sel = "";
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $fac_socio_transportista_sel = " disabled =\"disabled\" style=\"color: #A0A0A0\"";
                        break;
                    }
                }
             }
             else
             {
                $fac_socio_transportista_sel = ("S" == $nm_opc_sel) ? " selected" : "";
             }
             $lin_obj .= "       <OPTION value=\"" . NM_encode_input($nm_opc_cod . $delimitador . $nm_opc_val) . "\"" . $fac_socio_transportista_sel . ">" . $nm_opc_val . "</OPTION>";
          }
       }
       $lin_obj .= "    </SELECT>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td align=\"center\">";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_rightall", "nm_add_all_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'N');", "nm_add_all_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_rightall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_right", "nm_add_sel_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'N');", "nm_add_sel_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'N');", "G_Bbpassfld_righ", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_left", "nm_del_sel_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'N');", "nm_del_sel_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_left", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   <div class='scBtnPassField'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bpassfld_leftall", "nm_del_all_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'N');", "nm_del_all_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'N');", "G_Bbpassfld_leftall", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");

       $lin_obj .= "   </div>";
       $lin_obj .= "   </td>";
       $lin_obj .= "   <td>";
       $lin_obj .= "    <SELECT class='" . $this->css_scAppDivToolbarInput . "' style='height : auto;' id=\"grid_search_fac_socio_transportista_val_" . $ind . "_dest\" name=\"val_grid_search_fac_socio_transportista_" . $ind . "_dest\" size=7 multiple onDblClick=\"nm_del_sel_Grid('grid_search_fac_socio_transportista_val_" . $ind . "_dest', 'grid_search_fac_socio_transportista_val_" . $ind . "_orig', 'N')\">";
       $nm_opcoesx = str_replace("?#?@?#?", "?#?@ ?#?", $nmgp_def_dados);
       $nm_opcoes  = explode("?@?", $nm_opcoesx);
       foreach ($nm_opcoes as $nm_opcao)
       {
          if (!empty($nm_opcao))
          {
             $temp_bug_list = explode("?#?", $nm_opcao);
             list($nm_opc_val, $nm_opc_cod, $nm_opc_sel) = $temp_bug_list;
             if ($nm_opc_cod == "@ ") {$nm_opc_cod = trim($nm_opc_cod); }
             if (is_array($val) && !empty($val))
             {
                foreach ($val as $Dados)
                {
                    $tmp_pos = (is_string($Dados)) ? strpos($Dados, "##@@") : false;
                    if ($tmp_pos !== false)
                    {
                        $Dados = substr($Dados, 0, $tmp_pos);
                    }
                    if ($Dados === $nm_opc_cod)
                    {
                        $lin_obj .= "       <OPTION value=\"" . $nm_opc_cod . $delimitador . $nm_opc_val . "\">" . $nm_opc_val . "</OPTION>";
                    }
                }
             }
          }
       }
       $lin_obj .= "    </select>";
       $lin_obj .= "   </td></tr></table>";
       $lin_obj .= "       </span>";
       $lin_obj .= "          </div>";
       $lin_obj .= "          <div class='scGridFilterTagListFilterBar'>";
       $lin_obj .= nmButtonOutput($this->arr_buttons, "bapply_appdiv", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "closeAllTags();setTimeout(function() {nm_proc_grid_search($ind, 'proc_grid_search', 'grid_search_res')}, 200);", "grid_search_apply_" . $ind . "", "", "", "", "absmiddle", "", "0px", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
       $lin_obj .= "          </div>";
       $lin_obj .= "      </div>";
       return $lin_obj;
   }
   function lookup_ajax_cl_identificacion($cl_identificacion)
   {
       $cl_identificacion = substr($this->Db->qstr($cl_identificacion), 1, -1);
       $this->NM_case_insensitive = true;
       $cl_identificacion_look = (is_string($cl_identificacion) ? substr($this->Db->qstr($cl_identificacion), 1, -1) : $cl_identificacion); 
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct cl_identificacion from " . $this->Ini->nm_tabela . " where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and fac_estado='V') and  #lowerI#cl_identificacion#lowerF# like #lowerI#'%" . $cl_identificacion . "%'#lowerF# order by cl_identificacion"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = grid_resumen_ventas_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function lookup_ajax_cl_nombre($cl_nombre)
   {
       $cl_nombre = substr($this->Db->qstr($cl_nombre), 1, -1);
       $this->NM_case_insensitive = true;
       $cl_nombre_look = (is_string($cl_nombre) ? substr($this->Db->qstr($cl_nombre), 1, -1) : $cl_nombre); 
       $nmgp_def_dados = array(); 
       $nm_comando = "select distinct cl_nombre from " . $this->Ini->nm_tabela . " where (fac_empresa='" . $_SESSION['Igtech_RucEmpresa'] . "' and fac_estado='V') and  #lowerI#cl_nombre#lowerF# like #lowerI#'%" . $cl_nombre . "%'#lowerF# order by cl_nombre"; 
       if ($this->NM_case_insensitive)
       {
           if (isset($this->Ini->nm_bases_access) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
           {
               $nm_comando = str_replace("#lowerI#", "UCase(", $nm_comando);
           }
           else
           {
               $nm_comando = str_replace("#lowerI#", "Upper(", $nm_comando);
           }
           $nm_comando = str_replace("#lowerF#", ")", $nm_comando);
       }
       else
       {
           $nm_comando = str_replace("#lowerI#", "", $nm_comando);
           $nm_comando = str_replace("#lowerF#", "", $nm_comando);
       }
       $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
       $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rs = $this->Db->SelectLimit($nm_comando, 10, 0)) 
       { 
          while (!$rs->EOF) 
          { 
            $cmp1 = NM_charset_to_utf8(trim($rs->fields[0]));
            $cmp1 = grid_resumen_ventas_pack_protect_string($cmp1);
            $nmgp_def_dados[] = array($cmp1 => $cmp1); 
             $rs->MoveNext(); 
          } 
          $rs->Close(); 
          return $nmgp_def_dados; 
       } 
       else  
       {  
          echo $this->Db->ErrorMsg(); 
       } 
   }
   function jqueryCalendarDtFormat($sFormat, $sSep)
   {
       $sFormat = chunk_split(str_replace('yyyy', 'yy', $sFormat), 2, $sSep);

       if ($sSep == substr($sFormat, -1))
       {
           $sFormat = substr($sFormat, 0, -1);
       }

       return $sFormat;
   } // jqueryCalendarDtFormat

   function jqueryCalendarWeekInit($sDay)
   {
       switch ($sDay) {
           case 'MO': return 1; break;
           case 'TU': return 2; break;
           case 'WE': return 3; break;
           case 'TH': return 4; break;
           case 'FR': return 5; break;
           case 'SA': return 6; break;
           default  : return 7; break;
       }
   } // jqueryCalendarWeekInit

   function gera_array_filtros()
   {
       $this->NM_fil_ant = array();
       $pos_path = strrpos($this->Ini->path_prod, "/");
       $this->NM_path_filter = $this->Ini->root . substr($this->Ini->path_prod, 0, $pos_path) . "/conf/filters/";
       $NM_patch   = "debi_doc_electronicos/grid_resumen_ventas";
       if (is_dir($this->NM_path_filter . $NM_patch))
       {
           $NM_dir = @opendir($this->NM_path_filter . $NM_patch);
           while (FALSE !== ($NM_arq = @readdir($NM_dir)))
           {
             if (@is_file($this->NM_path_filter . $NM_patch . "/" . $NM_arq))
             {
                 $Sc_v6 = false;
                 $NMcmp_filter = file($this->NM_path_filter . $NM_patch . "/" . $NM_arq);
                 $NMcmp_filter = explode("@NMF@", $NMcmp_filter[0]);
                 if (substr($NMcmp_filter[0], 0, 6) == "SC_V6_" || substr($NMcmp_filter[0], 0, 6) == "SC_V8_")
                 {
                     $Name_filter = substr($NMcmp_filter[0], 6);
                     if (!empty($Name_filter))
                     {
                         $this->NM_fil_ant[$NM_arq][0] = $NM_patch . "/" . $NM_arq;
                         $this->NM_fil_ant[$NM_arq][1] = "" . $this->Ini->Nm_lang['lang_srch_public']  . "";
                         $Sc_v6 = true;
                     }
                 }
                 if (!$Sc_v6)
                 {
                     $this->NM_fil_ant[$NM_arq][0] = $NM_arq;
                     $this->NM_fil_ant[$NM_arq][1] = "" . $this->Ini->Nm_lang['lang_srch_public']  . "";
                 }
                 $this->NM_fil_ant[$NM_arq][2] = $Name_filter;
             }
           }
       }
       return $this->NM_fil_ant;
   }
   function JS_grid_search()
   {
       global $nm_saida;
       $nm_saida->saida("   <script type=\"text/javascript\">\r\n");
       $nm_saida->saida("     var Tot_obj_grid_search = " . $this->grid_search_seq . ";\r\n");
       $nm_saida->saida("     Tab_obj_grid_search = new Array();\r\n");
       $nm_saida->saida("     Tab_evt_grid_search = new Array();\r\n");
       foreach ($this->grid_search_dat as $seq => $cmp)
       {
           $nm_saida->saida("     Tab_obj_grid_search[" . $seq . "] = '" . $cmp . "';\r\n");
       }
       $nm_saida->saida(" function sc_grid_resumen_ventas_valida_mes(obj)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("     if (obj.value != \"\" && (obj.value < 1 || obj.value > 12))\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         if (confirm (Nm_erro['lang_jscr_ivdt'] +  \" \" + Nm_erro['lang_jscr_mnth'] +  \" \" + Nm_erro['lang_jscr_wfix']))\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("            Xfocus = setTimeout(function() { obj.focus(); }, 10);\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida(" function sc_grid_resumen_ventas_valida_dia(obj)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("     if (obj.value != \"\" && (obj.value < 1 || obj.value > 31))\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         if (confirm (Nm_erro['lang_jscr_ivdt'] +  \" \" + Nm_erro['lang_jscr_iday'] +  \" \" + Nm_erro['lang_jscr_wfix']))\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("            Xfocus = setTimeout(function() { obj.focus(); }, 10);\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida("     Tab_evt_grid_search['fac_fecha_mes'] =  'sc_grid_resumen_ventas_valida_mes(this)';\r\n");
       $nm_saida->saida("     Tab_evt_grid_search['fac_fecha_dia'] =  'sc_grid_resumen_ventas_valida_dia(this)';\r\n");
       $nm_saida->saida("     Tab_evt_grid_search['fac_fecha_v2__mes'] =  'sc_grid_resumen_ventas_valida_mes(this)';\r\n");
       $nm_saida->saida("     Tab_evt_grid_search['fac_fecha_v2__dia'] =  'sc_grid_resumen_ventas_valida_dia(this)';\r\n");
       if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_resumen_ventas']['ajax_nav'])
       { 
           $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_obj_grid_search', 'value' => '');
           $this->Ini->Arr_result['setArr'][] = array('var' => 'Tab_evt_grid_search', 'value' => '');
           $this->Ini->Arr_result['setVar'][] = array('var' => 'Tot_obj_grid_search', 'value' => $this->grid_search_seq);
           foreach ($this->grid_search_dat as $seq => $cmp)
           {
               $this->Ini->Arr_result['setVar'][] = array('var' => 'Tab_obj_grid_search[' . $seq . ']', 'value' => $cmp);
           }
           $this->Ini->Arr_result['setVar'][] = array('var' => "Tab_evt_grid_search['fac_fecha_mes']", 'value' => 'sc_grid_resumen_ventas_valida_mes(this)');
           $this->Ini->Arr_result['setVar'][] = array('var' => "Tab_evt_grid_search['fac_fecha_dia']", 'value' => 'sc_grid_resumen_ventas_valida_dia(this)');
           $this->Ini->Arr_result['setVar'][] = array('var' => "Tab_evt_grid_search['fac_fecha_v2__mes']", 'value' => 'sc_grid_resumen_ventas_valida_mes(this)');
           $this->Ini->Arr_result['setVar'][] = array('var' => "Tab_evt_grid_search['fac_fecha_v2__dia']", 'value' => 'sc_grid_resumen_ventas_valida_dia(this)');
       } 
       $nm_saida->saida("     function SC_carga_evt_jquery_grid(tp_carga)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         for (i = 1; i <= Tot_obj_grid_search; i++)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null' && (tp_carga == 'all' || tp_carga == i))\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 x   = 0;\r\n");
       $nm_saida->saida("                 tmp = Tab_obj_grid_search[i];\r\n");
       $nm_saida->saida("                 cps = new Array();\r\n");
       $nm_saida->saida("                 cps[x] = tmp;\r\n");
       $nm_saida->saida("                 if (tmp == 'fac_fecha')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     cps[x] = 'fac_fecha_dia';\r\n");
       $nm_saida->saida("                     x++;\r\n");
       $nm_saida->saida("                     cps[x] = 'fac_fecha_mes';\r\n");
       $nm_saida->saida("                     x++;\r\n");
       $nm_saida->saida("                     cps[x] = 'fac_fecha_v2__dia';\r\n");
       $nm_saida->saida("                     x++;\r\n");
       $nm_saida->saida("                     cps[x] = 'fac_fecha_v2__mes';\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 for (x = 0; x < cps.length ; x++)\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     cmp = cps[x];\r\n");
       $nm_saida->saida("                     if (Tab_evt_grid_search[cmp])\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         eval (\"$('#grid_search_\" + cmp + \"_val_\" + i + \"').bind('change', function() {\" + Tab_evt_grid_search[cmp] + \"})\");\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         for (i = 1; i <= Tot_obj_grid_search; i++)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null' && (tp_carga == 'all' || tp_carga == i))\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 tmp = Tab_obj_grid_search[i];\r\n");
       $nm_saida->saida("                 if (tmp == 'fac_fecha')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     var i_calendar = i;\r\n");
       $nm_saida->saida("                     $('#sc_grid_fac_fecha_jq_' + i).datepicker({\r\n");
       $nm_saida->saida("                        beforeShow: function(input, inst) {\r\n");
       $nm_saida->saida("                          var_dt_ini  = document.getElementById('grid_search_fac_fecha_dia_val_' + i_calendar).value + '/';\r\n");
       $nm_saida->saida("                          var_dt_ini += document.getElementById('grid_search_fac_fecha_mes_val_' + i_calendar).value + '/';\r\n");
       $nm_saida->saida("                          var_dt_ini += document.getElementById('grid_search_fac_fecha_ano_val_' + i_calendar).value;\r\n");
       $nm_saida->saida("                          document.getElementById('sc_grid_fac_fecha_jq_' + i_calendar).value = var_dt_ini;\r\n");
       $nm_saida->saida("                        },\r\n");
       $nm_saida->saida("                        onClose: function(dateText, inst) {\r\n");
       $nm_saida->saida("                          aParts  = dateText.split(\"/\");\r\n");
       $nm_saida->saida("                          document.getElementById('grid_search_fac_fecha_dia_val_' + i_calendar).value = aParts[0];\r\n");
       $nm_saida->saida("                          document.getElementById('grid_search_fac_fecha_mes_val_' + i_calendar).value = aParts[1];\r\n");
       $nm_saida->saida("                          document.getElementById('grid_search_fac_fecha_ano_val_' + i_calendar).value = aParts[2];\r\n");
       $nm_saida->saida("                        },\r\n");
       $nm_saida->saida("                        showWeek: true,\r\n");
       $nm_saida->saida("                        numberOfMonths: 1,\r\n");
       $nm_saida->saida("                        changeMonth: true,\r\n");
       $nm_saida->saida("                        changeYear: true,\r\n");
       $nm_saida->saida("                        yearRange: 'c-5:c+5',\r\n");
       $nm_saida->saida("                        dayNames: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        dayNamesMin: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        monthNames: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        monthNamesShort: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        weekHeader: \"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\r\n");
       $nm_saida->saida("                        firstDay: " . $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . "") . ",\r\n");
       $nm_saida->saida("                        dateFormat: \"" . $this->jqueryCalendarDtFormat("ddmmyyyy", "/") . "\",\r\n");
       $nm_saida->saida("                        showOtherMonths: true,\r\n");
       $nm_saida->saida("                        showOn: \"button\",\r\n");
       $nm_saida->saida("                        buttonImage: \"" . $this->Ini->path_botoes . "/" . $this->arr_buttons['bcalendario']['image'] . "\",\r\n");
       $nm_saida->saida("                        buttonImageOnly: true,\r\n");
       $nm_saida->saida("                        currentText: \"" . html_entity_decode($this->Ini->Nm_lang['lang_per_today'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\r\n");
       $nm_saida->saida("                        closeText: \"" . html_entity_decode($this->Ini->Nm_lang['lang_btns_mess_clse'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"\r\n");
       $nm_saida->saida("                     });\r\n");
       $nm_saida->saida("                     var i_calendar = i;\r\n");
       $nm_saida->saida("                     $('#sc_grid_fac_fecha_v2__jq_' + i).datepicker({\r\n");
       $nm_saida->saida("                        beforeShow: function(input, inst) {\r\n");
       $nm_saida->saida("                          var_dt_ini  = document.getElementById('grid_search_fac_fecha_v2__dia_val_' + i_calendar).value + '/';\r\n");
       $nm_saida->saida("                          var_dt_ini += document.getElementById('grid_search_fac_fecha_v2__mes_val_' + i_calendar).value + '/';\r\n");
       $nm_saida->saida("                          var_dt_ini += document.getElementById('grid_search_fac_fecha_v2__ano_val_' + i_calendar).value;\r\n");
       $nm_saida->saida("                          document.getElementById('sc_grid_fac_fecha_v2__jq_' + i_calendar).value = var_dt_ini;\r\n");
       $nm_saida->saida("                        },\r\n");
       $nm_saida->saida("                        onClose: function(dateText, inst) {\r\n");
       $nm_saida->saida("                          aParts  = dateText.split(\"/\");\r\n");
       $nm_saida->saida("                          document.getElementById('grid_search_fac_fecha_v2__dia_val_' + i_calendar).value = aParts[0];\r\n");
       $nm_saida->saida("                          document.getElementById('grid_search_fac_fecha_v2__mes_val_' + i_calendar).value = aParts[1];\r\n");
       $nm_saida->saida("                          document.getElementById('grid_search_fac_fecha_v2__ano_val_' + i_calendar).value = aParts[2];\r\n");
       $nm_saida->saida("                        },\r\n");
       $nm_saida->saida("                        showWeek: true,\r\n");
       $nm_saida->saida("                        numberOfMonths: 1,\r\n");
       $nm_saida->saida("                        changeMonth: true,\r\n");
       $nm_saida->saida("                        changeYear: true,\r\n");
       $nm_saida->saida("                        yearRange: 'c-5:c+5',\r\n");
       $nm_saida->saida("                        dayNames: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        dayNamesMin: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        monthNames: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        monthNamesShort: [\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"],\r\n");
       $nm_saida->saida("                        weekHeader: \"" . html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\r\n");
       $nm_saida->saida("                        firstDay: " . $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . "") . ",\r\n");
       $nm_saida->saida("                        dateFormat: \"" . $this->jqueryCalendarDtFormat("ddmmyyyy", "/") . "\",\r\n");
       $nm_saida->saida("                        showOtherMonths: true,\r\n");
       $nm_saida->saida("                        showOn: \"button\",\r\n");
       $nm_saida->saida("                        buttonImage: \"" . $this->Ini->path_botoes . "/" . $this->arr_buttons['bcalendario']['image'] . "\",\r\n");
       $nm_saida->saida("                        buttonImageOnly: true,\r\n");
       $nm_saida->saida("                        currentText: \"" . html_entity_decode($this->Ini->Nm_lang['lang_per_today'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\",\r\n");
       $nm_saida->saida("                        closeText: \"" . html_entity_decode($this->Ini->Nm_lang['lang_btns_mess_clse'], ENT_COMPAT, $_SESSION['scriptcase']['charset']) . "\"\r\n");
       $nm_saida->saida("                     });\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         for (i = 1; i <= Tot_obj_grid_search; i++)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null' && (tp_carga == 'all' || tp_carga == i))\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 tmp = Tab_obj_grid_search[i];\r\n");
       $nm_saida->saida("                 if (tmp == 'cl_identificacion')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                      var x_cl_identificacion = i;\r\n");
       $nm_saida->saida("                        $(\".sc-ui-autocomp-cl_identificacion\").on(\"focus\", function() {\r\n");
       $nm_saida->saida("                        }).on(\"blur\", function() {\r\n");
       $nm_saida->saida("                        }).on(\"keydown\", function(e) {\r\n");
       $nm_saida->saida("                         if(e.keyCode == $.ui.keyCode.TAB && $(\".ui-autocomplete\").filter(\":visible\").length) {\r\n");
       $nm_saida->saida("                          e.keyCode = $.ui.keyCode.DOWN;\r\n");
       $nm_saida->saida("                          $(this).trigger(e);\r\n");
       $nm_saida->saida("                          e.keyCode = $.ui.keyCode.ENTER;\r\n");
       $nm_saida->saida("                          $(this).trigger(e);\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                        }).select2({\r\n");
       $nm_saida->saida("                         minimumInputLength: 1,\r\n");
       $nm_saida->saida("                         language: {\r\n");
       $nm_saida->saida("                          inputTooShort: function() {\r\n");
       $nm_saida->saida("                           return \"" . sprintf($this->Ini->Nm_lang['lang_autocomp_tooshort'], 1) . "\";\r\n");
       $nm_saida->saida("                          },\r\n");
       $nm_saida->saida("                          noResults: function() {\r\n");
       $nm_saida->saida("                           return \"" . $this->Ini->Nm_lang['lang_autocomp_notfound'] . "\";\r\n");
       $nm_saida->saida("                          },\r\n");
       $nm_saida->saida("                          searching: function() {\r\n");
       $nm_saida->saida("                           return \"" . $this->Ini->Nm_lang['lang_autocomp_searching'] . "\";\r\n");
       $nm_saida->saida("                          }\r\n");
       $nm_saida->saida("                        },\r\n");
       $nm_saida->saida("                         width: \"300px\",\r\n");
       $nm_saida->saida("                         ajax: {\r\n");
       $nm_saida->saida("                          url: \"index.php\",\r\n");
       $nm_saida->saida("                          dataType: \"json\",\r\n");
       $nm_saida->saida("                          processResults: function (data) {\r\n");
       $nm_saida->saida("                            if (data == \"ss_time_out\") {\r\n");
       $nm_saida->saida("                                nm_move();\r\n");
       $nm_saida->saida("                            }\r\n");
       $nm_saida->saida("                            return data;\r\n");
       $nm_saida->saida("                          },\r\n");
       $nm_saida->saida("                          data: function (params) {\r\n");
       $nm_saida->saida("                           var query = {\r\n");
       $nm_saida->saida("                            q: params.term,\r\n");
       $nm_saida->saida("                            nmgp_opcao: \"ajax_aut_comp_dyn_search\",\r\n");
       $nm_saida->saida("                            origem: \"resumo\",\r\n");
       $nm_saida->saida("                            field: \"cl_identificacion\",\r\n");
       $nm_saida->saida("                            max_itens: \"10\",\r\n");
       $nm_saida->saida("                            cod_desc: \"N\",\r\n");
       $nm_saida->saida("                            script_case_init: " . $this->Ini->sc_page . "\r\n");
       $nm_saida->saida("                           }\r\n");
       $nm_saida->saida("                           return query;\r\n");
       $nm_saida->saida("                          }\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                        }).on(\"select2:select\", function(e) {;\r\n");
       $nm_saida->saida("                         $(\"#grid_search_cl_identificacion_val_\" + x_cl_identificacion).val(e.params.data.id);\r\n");
       $nm_saida->saida("                        });\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (tmp == 'cl_nombre')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                      var x_cl_nombre = i;\r\n");
       $nm_saida->saida("                        $(\".sc-ui-autocomp-cl_nombre\").on(\"focus\", function() {\r\n");
       $nm_saida->saida("                        }).on(\"blur\", function() {\r\n");
       $nm_saida->saida("                        }).on(\"keydown\", function(e) {\r\n");
       $nm_saida->saida("                         if(e.keyCode == $.ui.keyCode.TAB && $(\".ui-autocomplete\").filter(\":visible\").length) {\r\n");
       $nm_saida->saida("                          e.keyCode = $.ui.keyCode.DOWN;\r\n");
       $nm_saida->saida("                          $(this).trigger(e);\r\n");
       $nm_saida->saida("                          e.keyCode = $.ui.keyCode.ENTER;\r\n");
       $nm_saida->saida("                          $(this).trigger(e);\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                        }).select2({\r\n");
       $nm_saida->saida("                         minimumInputLength: 1,\r\n");
       $nm_saida->saida("                         language: {\r\n");
       $nm_saida->saida("                          inputTooShort: function() {\r\n");
       $nm_saida->saida("                           return \"" . sprintf($this->Ini->Nm_lang['lang_autocomp_tooshort'], 1) . "\";\r\n");
       $nm_saida->saida("                          },\r\n");
       $nm_saida->saida("                          noResults: function() {\r\n");
       $nm_saida->saida("                           return \"" . $this->Ini->Nm_lang['lang_autocomp_notfound'] . "\";\r\n");
       $nm_saida->saida("                          },\r\n");
       $nm_saida->saida("                          searching: function() {\r\n");
       $nm_saida->saida("                           return \"" . $this->Ini->Nm_lang['lang_autocomp_searching'] . "\";\r\n");
       $nm_saida->saida("                          }\r\n");
       $nm_saida->saida("                        },\r\n");
       $nm_saida->saida("                         width: \"300px\",\r\n");
       $nm_saida->saida("                         ajax: {\r\n");
       $nm_saida->saida("                          url: \"index.php\",\r\n");
       $nm_saida->saida("                          dataType: \"json\",\r\n");
       $nm_saida->saida("                          processResults: function (data) {\r\n");
       $nm_saida->saida("                            if (data == \"ss_time_out\") {\r\n");
       $nm_saida->saida("                                nm_move();\r\n");
       $nm_saida->saida("                            }\r\n");
       $nm_saida->saida("                            return data;\r\n");
       $nm_saida->saida("                          },\r\n");
       $nm_saida->saida("                          data: function (params) {\r\n");
       $nm_saida->saida("                           var query = {\r\n");
       $nm_saida->saida("                            q: params.term,\r\n");
       $nm_saida->saida("                            nmgp_opcao: \"ajax_aut_comp_dyn_search\",\r\n");
       $nm_saida->saida("                            origem: \"resumo\",\r\n");
       $nm_saida->saida("                            field: \"cl_nombre\",\r\n");
       $nm_saida->saida("                            max_itens: \"10\",\r\n");
       $nm_saida->saida("                            cod_desc: \"N\",\r\n");
       $nm_saida->saida("                            script_case_init: " . $this->Ini->sc_page . "\r\n");
       $nm_saida->saida("                           }\r\n");
       $nm_saida->saida("                           return query;\r\n");
       $nm_saida->saida("                          }\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                        }).on(\"select2:select\", function(e) {;\r\n");
       $nm_saida->saida("                         $(\"#grid_search_cl_nombre_val_\" + x_cl_nombre).val(e.params.data.id);\r\n");
       $nm_saida->saida("                        });\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_change_bw(field, ind)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var index = document.getElementById('grid_search_' + field + '_cond_' + ind).selectedIndex;\r\n");
       $nm_saida->saida("        var parm  = document.getElementById('grid_search_' + field + '_cond_' + ind).options[index].value;\r\n");
       $nm_saida->saida("        if (parm == \"bw\")\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            $('#grid_' + field + '_' + ind).css('display','');\r\n");
       $nm_saida->saida("            $('#grid_' + field + '_in_2_' + ind).css('display','');\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        else\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            $('#grid_' + field + '_in_2_' + ind).css('display','none');\r\n");
       $nm_saida->saida("            if (parm == \"nu\" || parm == \"nn\" || parm == \"ep\" || parm == \"ne\")\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                $('#grid_' + field + '_' + ind).css('display','none');\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            else\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                $('#grid_' + field + '_' + ind).css('display','');\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_hide_input(field, ind)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var index = document.getElementById('grid_search_' + field + '_cond_' + ind).selectedIndex;\r\n");
       $nm_saida->saida("        var parm  = document.getElementById('grid_search_' + field + '_cond_' + ind).options[index].value;\r\n");
       $nm_saida->saida("        if (parm == \"nu\" || parm == \"nn\" || parm == \"ep\" || parm == \"ne\")\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            $('#grid_' + field + '_' + ind).css('display','none');\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        else\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            $('#grid_' + field + '_' + ind).css('display','');\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     var addfilter_status = 'out';\r\n");
       $nm_saida->saida("     function nm_show_advancedsearch_fields()\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("       var btn_id = 'add_grid_search';\r\n");
       $nm_saida->saida("       var obj_id = 'id_grid_search_add_tag';\r\n");
       $nm_saida->saida("       if($('#' + btn_id).offset().left + $('#' + obj_id).width() > $(document).width())\r\n");
       $nm_saida->saida("       {\r\n");
       $nm_saida->saida("            $('#' + obj_id).css('margin-left', ( $(document).width() - $('#' + btn_id).offset().left - $('#' + obj_id).width() - 10 ));\r\n");
       $nm_saida->saida("       }\r\n");
       $nm_saida->saida("       addfilter_status = 'open';\r\n");
       $nm_saida->saida("       $('#' + btn_id).mouseout(function() {\r\n");
       $nm_saida->saida("         setTimeout(function() {\r\n");
       $nm_saida->saida("           nm_hide_advancedsearch_fields(obj_id);\r\n");
       $nm_saida->saida("         }, 1000);\r\n");
       $nm_saida->saida("       });\r\n");
       $nm_saida->saida("       $('#' + obj_id + ' div').click(function() {\r\n");
       $nm_saida->saida("         addfilter_status = 'out';\r\n");
       $nm_saida->saida("         nm_hide_advancedsearch_fields(obj_id);\r\n");
       $nm_saida->saida("       });\r\n");
       $nm_saida->saida("       $('#' + obj_id).css({\r\n");
       $nm_saida->saida("         'left': $('#' + btn_id).left\r\n");
       $nm_saida->saida("       })\r\n");
       $nm_saida->saida("       .mouseover(function() {\r\n");
       $nm_saida->saida("         addfilter_status = 'over';\r\n");
       $nm_saida->saida("       })\r\n");
       $nm_saida->saida("       .mouseleave(function() {\r\n");
       $nm_saida->saida("         addfilter_status = 'out';\r\n");
       $nm_saida->saida("         setTimeout(function() {\r\n");
       $nm_saida->saida("           nm_hide_advancedsearch_fields(obj_id);\r\n");
       $nm_saida->saida("         }, 1000);\r\n");
       $nm_saida->saida("       })\r\n");
       $nm_saida->saida("       .show('fast');\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function nm_hide_advancedsearch_fields(obj_id) {\r\n");
       $nm_saida->saida("      if ('over' != addfilter_status) {\r\n");
       $nm_saida->saida("        $('#' + obj_id).hide('fast');\r\n");
       $nm_saida->saida("      }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function closeAllTags(obj)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         if (obj !== undefined)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             if($(obj).parent().parent().parent().attr('new') == 'new')\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 $(obj).parent().parent().parent().find('.scGridFilterTagListItemClose').click();\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         $('.scGridFilterTagListFilter').hide();\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function checkLastTag(bol_force)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         if(bol_force || $('.scGridFilterTagListItem').length == 0)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             $('#NM_Grid_Search').remove();\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     var nm_empty_data_cond = ['ep','ne','nu','nn'];\r\n");
       $nm_saida->saida("     function nm_proc_grid_search(Seq, Tp_Proc, Origem)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         var out_dyn = \"\";\r\n");
       $nm_saida->saida("         var i       = Seq;\r\n");
       $nm_saida->saida("         if (Tp_Proc == 'del_grid_search' || Tp_Proc == 'del_grid_search_all')\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             $('#add_grid_search').removeClass('scGridFilterTagAddDisabled');\r\n");
       $nm_saida->saida("             out_dyn += Tab_obj_grid_search[i] + \"_DYN_\" + Tp_Proc;\r\n");
       $nm_saida->saida("             if (Tp_Proc == 'del_grid_search_all')\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 Tab_obj_grid_search = new Array();\r\n");
       $nm_saida->saida("                 checkLastTag(true);\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("             else\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 Tab_obj_grid_search[i] = 'NMSC_Grid_Null';\r\n");
       $nm_saida->saida("                 eval('Dropdownchecklist_'+ Tab_obj_grid_search[i] +'=false;');\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         else\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             $('#grid_search_' + Tab_obj_grid_search[i]).attr('new', '');\r\n");
       $nm_saida->saida("             if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null')\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 out_dyn += Tab_obj_grid_search[i];\r\n");
       $nm_saida->saida("                 obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_cond_' + i;\r\n");
       $nm_saida->saida("                 out_cond = grid_search_get_sel_cond(obj_dyn);\r\n");
       $nm_saida->saida("                 out_dyn += \"_DYN_\" + out_cond;\r\n");
       $nm_saida->saida("                 obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_val_';\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'fac_fecha')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     obj_dyn = 'grid_search_' + Tab_obj_grid_search[i];\r\n");
       $nm_saida->saida("                     result  = grid_search_get_dt_h(obj_dyn, i, 'DT');\r\n");
       $nm_saida->saida("                     result += \"_VLS2_\" + grid_search_get_dt_h(obj_dyn + \"_v2_\", i, 'DT');\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'est_codigo')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'pen_serie')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'cl_identificacion')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;\r\n");
       $nm_saida->saida("                     result  = grid_search_get_text(obj_dyn + i, obj_ac);\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'cl_nombre')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;\r\n");
       $nm_saida->saida("                     result  = grid_search_get_text(obj_dyn + i, obj_ac);\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'fac_usuario')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'fac_socio_transportista')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if((result == '' || result == '_VLS2_' || result == 'Y:_VLS_M:_VLS_D:_VLS2_Y:_VLS_M:_VLS_D:' || result == 'Y:_VLS_M:_VLS_D:_VLS_H:_VLS_I:_VLS_S:_VLS2_Y:_VLS_M:_VLS_D:_VLS_H:_VLS_I:_VLS_S:') && nm_empty_data_cond.indexOf(out_cond) == -1 && out_cond.substring(0, 3) != 'bi_')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     alert(\"" . $this->Ini->Nm_lang['lang_srch_req_field'] . "\");\r\n");
       $nm_saida->saida("                     return false;\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 out_dyn += \"_DYN_\" + result;\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         ajax_navigate_res(Origem, out_dyn);\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function nm_save_grid_search()\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("         if (document.Fgrid_search_save.nmgp_save_name.value == '')\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             alert(\"" . $this->Ini->Nm_lang['lang_srch_req_field'] . "\");\r\n");
       $nm_saida->saida("             document.Fgrid_search_save.nmgp_save_name.focus();\r\n");
       $nm_saida->saida("             return false;\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         save_name = document.Fgrid_search_save.nmgp_save_name.value;\r\n");
       $nm_saida->saida("         save_opt  = \"\"\r\n");
       $nm_saida->saida("         str_out = \"\";\r\n");
       $nm_saida->saida("         for (i = 1; i <= Tot_obj_grid_search; i++)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             if (Tab_obj_grid_search[i] != 'NMSC_Grid_Null')\r\n");
       $nm_saida->saida("             {\r\n");
       $nm_saida->saida("                 obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_cond_' + i;\r\n");
       $nm_saida->saida("                 out_cond = grid_search_get_sel_cond(obj_dyn);\r\n");
       $nm_saida->saida("                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_cond#NMF#\" + out_cond + \"@NMF@\";\r\n");
       $nm_saida->saida("                 obj_dyn  = 'grid_search_' + Tab_obj_grid_search[i] + '_val_';\r\n");
       $nm_saida->saida("                 obj_dyn2 = 'grid_search_' + Tab_obj_grid_search[i] + '_v2__val_';\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'fac_fecha')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     obj_dyn = 'grid_search_' + Tab_obj_grid_search[i];\r\n");
       $nm_saida->saida("                     result  = grid_search_get_dt_h(obj_dyn, i, 'DT');\r\n");
       $nm_saida->saida("                     result += \"_VLS2_\" + grid_search_get_dt_h(obj_dyn + \"_v2_\", i, 'DT');\r\n");
       $nm_saida->saida("                     tvals  = result.split(\"_VLS2_\");\r\n");
       $nm_saida->saida("                     vals  = tvals[0].split(\"_VLS_\");\r\n");
       $nm_saida->saida("                     for (x = 0; x < vals.length; x++)\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         if (vals[x].substring(0, 2) == \"Y:\")\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_ano#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         if (vals[x].substring(0, 2) == \"M:\")\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_mes#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         if (vals[x].substring(0, 2) == \"D:\")\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_dia#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         if (vals[x].substring(0, 2) == \"H:\")\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_hor#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         if (vals[x].substring(0, 2) == \"I:\")\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_min#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         if (vals[x].substring(0, 2) == \"S:\")\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_seg#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                     if (tvals[1])\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         vals  = tvals[1].split(\"_VLS_\");\r\n");
       $nm_saida->saida("                         for (x = 0; x < vals.length; x++)\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             if (vals[x].substring(0, 2) == \"Y:\")\r\n");
       $nm_saida->saida("                             {\r\n");
       $nm_saida->saida("                                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_input_2_ano#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                             }\r\n");
       $nm_saida->saida("                             if (vals[x].substring(0, 2) == \"M:\")\r\n");
       $nm_saida->saida("                             {\r\n");
       $nm_saida->saida("                                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_input_2_mes#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                             }\r\n");
       $nm_saida->saida("                             if (vals[x].substring(0, 2) == \"D:\")\r\n");
       $nm_saida->saida("                             {\r\n");
       $nm_saida->saida("                                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_input_2_dia#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                             }\r\n");
       $nm_saida->saida("                             if (vals[x].substring(0, 2) == \"H:\")\r\n");
       $nm_saida->saida("                             {\r\n");
       $nm_saida->saida("                                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_input_2_hor#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                             }\r\n");
       $nm_saida->saida("                             if (vals[x].substring(0, 2) == \"I:\")\r\n");
       $nm_saida->saida("                             {\r\n");
       $nm_saida->saida("                                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_input_2_min#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                             }\r\n");
       $nm_saida->saida("                             if (vals[x].substring(0, 2) == \"S:\")\r\n");
       $nm_saida->saida("                             {\r\n");
       $nm_saida->saida("                                 str_out += \"SC_\" + Tab_obj_grid_search[i] + \"_input_2_seg#NMF#\" + vals[x].substring(2) + \"@NMF@\";\r\n");
       $nm_saida->saida("                             }\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'est_codigo')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                     tvals  = result.split(\"_VLS_\");\r\n");
       $nm_saida->saida("                     if (tvals[1])\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#_NM_array_\";\r\n");
       $nm_saida->saida("                         for (x = 0; x < tvals.length; x++)\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"#NMARR#\" + tvals[x];\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         str_out += \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                     else\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'pen_serie')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                     tvals  = result.split(\"_VLS_\");\r\n");
       $nm_saida->saida("                     if (tvals[1])\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#_NM_array_\";\r\n");
       $nm_saida->saida("                         for (x = 0; x < tvals.length; x++)\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"#NMARR#\" + tvals[x];\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         str_out += \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                     else\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'cl_identificacion')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_text(obj_dyn + i, '');\r\n");
       $nm_saida->saida("                     str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                     obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;\r\n");
       $nm_saida->saida("                     result  = grid_search_get_text(obj_dyn + i, obj_ac);\r\n");
       $nm_saida->saida("                     str_out += \"id_ac_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'cl_nombre')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_text(obj_dyn + i, '');\r\n");
       $nm_saida->saida("                     str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                     obj_ac  = 'id_ac_grid_' + Tab_obj_grid_search[i] + i;\r\n");
       $nm_saida->saida("                     result  = grid_search_get_text(obj_dyn + i, obj_ac);\r\n");
       $nm_saida->saida("                     str_out += \"id_ac_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'fac_usuario')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                     tvals  = result.split(\"_VLS_\");\r\n");
       $nm_saida->saida("                     if (tvals[1])\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#_NM_array_\";\r\n");
       $nm_saida->saida("                         for (x = 0; x < tvals.length; x++)\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"#NMARR#\" + tvals[x];\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         str_out += \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                     else\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("                 if (Tab_obj_grid_search[i] == 'fac_socio_transportista')\r\n");
       $nm_saida->saida("                 {\r\n");
       $nm_saida->saida("                     result  = grid_search_get_Dselelect(obj_dyn + i + '_dest');\r\n");
       $nm_saida->saida("                     tvals  = result.split(\"_VLS_\");\r\n");
       $nm_saida->saida("                     if (tvals[1])\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#_NM_array_\";\r\n");
       $nm_saida->saida("                         for (x = 0; x < tvals.length; x++)\r\n");
       $nm_saida->saida("                         {\r\n");
       $nm_saida->saida("                             str_out += \"#NMARR#\" + tvals[x];\r\n");
       $nm_saida->saida("                         }\r\n");
       $nm_saida->saida("                         str_out += \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                     else\r\n");
       $nm_saida->saida("                     {\r\n");
       $nm_saida->saida("                         str_out += \"SC_\" + Tab_obj_grid_search[i] + \"#NMF#\" + result + \"@NMF@\";\r\n");
       $nm_saida->saida("                     }\r\n");
       $nm_saida->saida("                 }\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         nmAjaxProcOn();\r\n");
       $nm_saida->saida("         $.ajax({\r\n");
       $nm_saida->saida("           type: \"POST\",\r\n");
       $nm_saida->saida("           url: \"index.php\",\r\n");
       $nm_saida->saida("           data: \"nmgp_opcao=ajax_filter_save&script_case_init=\" + document.Fgrid_search.script_case_init.value + \"&nmgp_save_name=\" + save_name + \"&nmgp_save_option=\" + save_opt + \"&NM_filters_save=\" + str_out + \"&nmgp_save_origem=grid\"\r\n");
       $nm_saida->saida("          })\r\n");
       $nm_saida->saida("          .done(function(json_save_fil) {\r\n");
       $nm_saida->saida("             var i, oResp;\r\n");
       $nm_saida->saida("             Tst_integrid = json_save_fil.trim();\r\n");
       $nm_saida->saida("             if (\"{\" != Tst_integrid.substr(0, 1)) {\r\n");
       $nm_saida->saida("                 nmAjaxProcOff();\r\n");
       $nm_saida->saida("                 alert (json_save_fil);\r\n");
       $nm_saida->saida("                 return;\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("             eval(\"oResp = \" + json_save_fil);\r\n");
       $nm_saida->saida("             if (oResp[\"ss_time_out\"]) {\r\n");
       $nm_saida->saida("                 nmAjaxProcOff();\r\n");
       $nm_saida->saida("                 nm_move();\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("             if (oResp[\"setValue\"]) {\r\n");
       $nm_saida->saida("               for (i = 0; i < oResp[\"setValue\"].length; i++) {\r\n");
       $nm_saida->saida("                    $(\"#\" + oResp[\"setValue\"][i][\"field\"]).html(oResp[\"setValue\"][i][\"value\"]);\r\n");
       $nm_saida->saida("               }\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("             if (oResp[\"htmOutput\"]) {\r\n");
       $nm_saida->saida("                 nmAjaxShowDebug(oResp);\r\n");
       $nm_saida->saida("              }\r\n");
       $nm_saida->saida("             document.getElementById('SC_nmgp_save_name').value = '';\r\n");
       $nm_saida->saida("             document.getElementById('Apaga_filters').style.display = '';\r\n");
       $nm_saida->saida("             document.getElementById('id_sel_recup_filters').style.display = '';\r\n");
       $nm_saida->saida("             document.getElementById('Salvar_filters').style.display = 'none';\r\n");
       $nm_saida->saida("             document.getElementById('id_sel_recup_filters').selectedIndex = -1;\r\n");
       $nm_saida->saida("             document.getElementById('sel_filters_del').selectedIndex = -1;\r\n");
       $nm_saida->saida("             nmAjaxProcOff();\r\n");
       $nm_saida->saida("         });\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function nm_del_grid_search()\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        obj_sel = document.Fgrid_search_save.elements['NM_filters_del'];\r\n");
       $nm_saida->saida("        index   = obj_sel.selectedIndex;\r\n");
       $nm_saida->saida("        if (index == -1 || obj_sel.options[index].value == \"\") \r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            return false;\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        parm = obj_sel.options[index].value;\r\n");
       $nm_saida->saida("        nmAjaxProcOn();\r\n");
       $nm_saida->saida("        $.ajax({\r\n");
       $nm_saida->saida("          type: \"POST\",\r\n");
       $nm_saida->saida("          url: \"index.php\",\r\n");
       $nm_saida->saida("          data: \"nmgp_opcao=ajax_filter_delete&script_case_init=\" + document.Fgrid_search.script_case_init.value + \"&NM_filters_del=\" + parm + \"&nmgp_save_origem=grid\"\r\n");
       $nm_saida->saida("         })\r\n");
       $nm_saida->saida("         .done(function(json_del_fil) {\r\n");
       $nm_saida->saida("            var i, oResp;\r\n");
       $nm_saida->saida("            Tst_integrid = json_del_fil.trim();\r\n");
       $nm_saida->saida("            if (\"{\" != Tst_integrid.substr(0, 1)) {\r\n");
       $nm_saida->saida("                nmAjaxProcOff();\r\n");
       $nm_saida->saida("                alert (json_del_fil);\r\n");
       $nm_saida->saida("                return;\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            eval(\"oResp = \" + json_del_fil);\r\n");
       $nm_saida->saida("             if (oResp[\"ss_time_out\"]) {\r\n");
       $nm_saida->saida("                 nmAjaxProcOff();\r\n");
       $nm_saida->saida("                 nm_move();\r\n");
       $nm_saida->saida("             }\r\n");
       $nm_saida->saida("            if (oResp[\"setValue\"]) {\r\n");
       $nm_saida->saida("              for (i = 0; i < oResp[\"setValue\"].length; i++) {\r\n");
       $nm_saida->saida("                   $(\"#\" + oResp[\"setValue\"][i][\"field\"]).html(oResp[\"setValue\"][i][\"value\"]);\r\n");
       $nm_saida->saida("              }\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            if (oResp[\"htmOutput\"]) {\r\n");
       $nm_saida->saida("                nmAjaxShowDebug(oResp);\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            nmAjaxProcOff();\r\n");
       $nm_saida->saida("        });\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function nm_change_grid_search(obj_sel)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        index = obj_sel.selectedIndex;\r\n");
       $nm_saida->saida("        if (index == -1 || obj_sel.options[index].value == \"\") \r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            return false;\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        for (i = 1; i <= Tot_obj_grid_search; i++)\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            $('#grid_search_' + Tab_obj_grid_search[i]).remove();\r\n");
       $nm_saida->saida("             eval('Dropdownchecklist_'+ Tab_obj_grid_search[i] +'=false;');\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        Tot_obj_grid_search = 0;\r\n");
       $nm_saida->saida("        Tab_obj_grid_search = new Array();\r\n");
       $nm_saida->saida("        ajax_navigate_res('grid_search_change_fil_res', obj_sel.options[index].value);;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida(" var nm_quant_pack;\r\n");
       $nm_saida->saida(" // Adiciona um elemento\r\n");
       $nm_saida->saida(" //----------------------\r\n");
       $nm_saida->saida(" function nm_add_sel_Grid(sOrig, sDest, Saida)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("  // Recupera objetos\r\n");
       $nm_saida->saida("  oOrig = document.getElementById(sOrig);\r\n");
       $nm_saida->saida("  oDest = document.getElementById(sDest);\r\n");
       $nm_saida->saida("  // Varre itens do destino\r\n");
       $nm_saida->saida("  Psel  = false;\r\n");
       $nm_saida->saida("  iDest = 0;\r\n");
       $nm_saida->saida("  iInit = oDest.length;\r\n");
       $nm_saida->saida("  arr_sel = new Array();\r\n");
       $nm_saida->saida("  for (i = 0; i < oDest.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (oDest.options[i].selected && !Psel)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("       Psel  = true;\r\n");
       $nm_saida->saida("       iInit = i + 1;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("   else\r\n");
       $nm_saida->saida("   if (Psel)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("     arr_sel[iDest] = new Array(oDest.options[i].value, oDest.options[i].text);\r\n");
       $nm_saida->saida("     iDest++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Varre itens da origem\r\n");
       $nm_saida->saida("  for (i = 0; i < oOrig.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   // Item na origem selecionado e valido\r\n");
       $nm_saida->saida("   if (oOrig.options[i].selected && !oOrig.options[i].disabled)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    // Recupera valores da origem\r\n");
       $nm_saida->saida("    sText  = oOrig.options[i].text;\r\n");
       $nm_saida->saida("    sValue = oOrig.options[i].value;\r\n");
       $nm_saida->saida("    // Cria item no destino\r\n");
       $nm_saida->saida("    oDest.options[iInit] = new Option(sText, sValue);\r\n");
       $nm_saida->saida("    // Desabilita item na origem\r\n");
       $nm_saida->saida("    oOrig.options[i].style.color = \"#A0A0A0\";\r\n");
       $nm_saida->saida("    oOrig.options[i].disabled    = true;\r\n");
       $nm_saida->saida("    oOrig.options[i].selected    = false;\r\n");
       $nm_saida->saida("    iInit++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Completa itens do destino\r\n");
       $nm_saida->saida("  if (iDest > 0)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   for (i = 0; i < iDest; i++)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("     oDest.options[iInit] = new Option();\r\n");
       $nm_saida->saida("     oDest.options[iInit].value = arr_sel[i][0];\r\n");
       $nm_saida->saida("     oDest.options[iInit].text  = arr_sel[i][1];\r\n");
       $nm_saida->saida("     iInit++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Reset combos\r\n");
       $nm_saida->saida("  oOrig.selectedIndex = -1;\r\n");
       $nm_saida->saida("  oDest.selectedIndex = -1;\r\n");
       $nm_saida->saida("  if (Saida == \"S\")\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("      document.Fgrid_search.submit();\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida(" // Adiciona todos os elementos\r\n");
       $nm_saida->saida(" //-----------------------------\r\n");
       $nm_saida->saida(" function nm_add_all_Grid(sOrig, sDest, Saida)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("  // Recupera objetos\r\n");
       $nm_saida->saida("  oOrig = document.getElementById(sOrig);\r\n");
       $nm_saida->saida("  oDest = document.getElementById(sDest);\r\n");
       $nm_saida->saida("  // Varre itens do destino\r\n");
       $nm_saida->saida("  Psel  = false;\r\n");
       $nm_saida->saida("  iDest = 0;\r\n");
       $nm_saida->saida("  iInit = oDest.length;\r\n");
       $nm_saida->saida("  arr_sel = new Array();\r\n");
       $nm_saida->saida("  for (i = 0; i < oDest.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (oDest.options[i].selected && !Psel)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("       Psel  = true;\r\n");
       $nm_saida->saida("       iInit = i + 1;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("   else\r\n");
       $nm_saida->saida("   if (Psel)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("     arr_sel[iDest] = new Array(oDest.options[i].value, oDest.options[i].text);\r\n");
       $nm_saida->saida("     iDest++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Varre itens da origem\r\n");
       $nm_saida->saida("  for (i = 0; i < oOrig.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   // Item na origem valido\r\n");
       $nm_saida->saida("   if (!oOrig.options[i].disabled)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    // Recupera valores da origem\r\n");
       $nm_saida->saida("    sText  = oOrig.options[i].text;\r\n");
       $nm_saida->saida("    sValue = oOrig.options[i].value;\r\n");
       $nm_saida->saida("    // Cria item no destino\r\n");
       $nm_saida->saida("    oDest.options[iInit] = new Option(sText, sValue);\r\n");
       $nm_saida->saida("    // Desabilita item na origem\r\n");
       $nm_saida->saida("    oOrig.options[i].style.color = \"#A0A0A0\";\r\n");
       $nm_saida->saida("    oOrig.options[i].disabled    = true;\r\n");
       $nm_saida->saida("    oOrig.options[i].selected    = false;\r\n");
       $nm_saida->saida("    iInit++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Completa itens do destino\r\n");
       $nm_saida->saida("  if (iDest > 0)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   for (i = 0; i < iDest; i++)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("     oDest.options[iInit] = new Option();\r\n");
       $nm_saida->saida("     oDest.options[iInit].value = arr_sel[i][0];\r\n");
       $nm_saida->saida("     oDest.options[iInit].text  = arr_sel[i][1];\r\n");
       $nm_saida->saida("     iInit++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Reset combos\r\n");
       $nm_saida->saida("  oOrig.selectedIndex = -1;\r\n");
       $nm_saida->saida("  oDest.selectedIndex = -1;\r\n");
       $nm_saida->saida("  if (Saida == \"S\")\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("      document.Fgrid_search.submit();\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida(" // Remove um elemento\r\n");
       $nm_saida->saida(" //--------------------\r\n");
       $nm_saida->saida(" function nm_del_sel_Grid(sOrig, sDest, Saida)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("  // Recupera objetos\r\n");
       $nm_saida->saida("  oOrig = document.getElementById(sOrig);\r\n");
       $nm_saida->saida("  oDest = document.getElementById(sDest);\r\n");
       $nm_saida->saida("  aSel  = new Array();\r\n");
       $nm_saida->saida("  atxt  = new Array();\r\n");
       $nm_saida->saida("  solt  = new Array();\r\n");
       $nm_saida->saida("  j     = 0;\r\n");
       $nm_saida->saida("  z     = 0;\r\n");
       $nm_saida->saida("  // Remove itens selecionados na origem\r\n");
       $nm_saida->saida("  for (i = oOrig.length - 1; i >= 0; i--)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   // Item na origem selecionado\r\n");
       $nm_saida->saida("   if (oOrig.options[i].selected)\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    aSel[j] = oOrig.options[i].value;\r\n");
       $nm_saida->saida("    atxt[j] = oOrig.options[i].text;\r\n");
       $nm_saida->saida("    j++;\r\n");
       $nm_saida->saida("    oOrig.options[i] = null;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Habilita itens no destino\r\n");
       $nm_saida->saida("  for (i = 0; i < oDest.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (oDest.options[i].disabled && in_array_Grid(aSel, oDest.options[i].value))\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    oDest.options[i].disabled    = false;\r\n");
       $nm_saida->saida("    oDest.options[i].style.color = \"\";\r\n");
       $nm_saida->saida("    solt[z] = oDest.options[i].value;\r\n");
       $nm_saida->saida("    z++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  for (i = 0; i < aSel.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (!in_array_Grid(solt, aSel[i]))\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    oDest.options[oDest.length] = new Option(atxt[i], aSel[i]);\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Reset combos\r\n");
       $nm_saida->saida("  oOrig.selectedIndex = -1;\r\n");
       $nm_saida->saida("  oDest.selectedIndex = -1;\r\n");
       $nm_saida->saida("  if (Saida == \"S\")\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("      document.Fgrid_search.submit();\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida(" // Remove todos os elementos\r\n");
       $nm_saida->saida(" //---------------------------\r\n");
       $nm_saida->saida(" function nm_del_all_Grid(sOrig, sDest, Saida)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("  // Recupera objetos\r\n");
       $nm_saida->saida("  oOrig = document.getElementById(sOrig);\r\n");
       $nm_saida->saida("  oDest = document.getElementById(sDest);\r\n");
       $nm_saida->saida("  aSel  = new Array();\r\n");
       $nm_saida->saida("  atxt  = new Array();\r\n");
       $nm_saida->saida("  solt  = new Array();\r\n");
       $nm_saida->saida("  j     = 0;\r\n");
       $nm_saida->saida("  z     = 0;\r\n");
       $nm_saida->saida("  // Remove todos os itens na origem\r\n");
       $nm_saida->saida("  while (0 < oOrig.length)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   i       = oOrig.length - 1;\r\n");
       $nm_saida->saida("   aSel[j] = oOrig.options[i].value;\r\n");
       $nm_saida->saida("   atxt[j] = oOrig.options[i].text;\r\n");
       $nm_saida->saida("   j++;\r\n");
       $nm_saida->saida("   oOrig.options[i] = null;\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Habilita itens no destino\r\n");
       $nm_saida->saida("  for (i = 0; i < oDest.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (oDest.options[i].disabled && in_array_Grid(aSel, oDest.options[i].value))\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    oDest.options[i].disabled    = false;\r\n");
       $nm_saida->saida("    oDest.options[i].style.color = \"\";\r\n");
       $nm_saida->saida("    solt[z] = oDest.options[i].value;\r\n");
       $nm_saida->saida("    z++;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  for (i = 0; i < aSel.length; i++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (!in_array_Grid(solt, aSel[i]))\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    oDest.options[oDest.length] = new Option(atxt[i], aSel[i]);\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  // Reset combos\r\n");
       $nm_saida->saida("  oOrig.selectedIndex = -1;\r\n");
       $nm_saida->saida("  oDest.selectedIndex = -1;\r\n");
       $nm_saida->saida("  if (Saida == \"S\")\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("      document.Fgrid_search.submit();\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida(" // empacota elementos selecionados\r\n");
       $nm_saida->saida(" //--------------------------------\r\n");
       $nm_saida->saida(" function nm_pack_Grid(sOrig, sDest)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("    obj_sel = document.getElementById(sOrig);\r\n");
       $nm_saida->saida("    str_val = \"\";\r\n");
       $nm_saida->saida("    nm_quant_pack = 0;\r\n");
       $nm_saida->saida("    for (i = 0; i < obj_sel.length; i++)\r\n");
       $nm_saida->saida("    {\r\n");
       $nm_saida->saida("         if (\"\" != str_val)\r\n");
       $nm_saida->saida("         {\r\n");
       $nm_saida->saida("             str_val += \"@?@\";\r\n");
       $nm_saida->saida("             nm_quant_pack++;\r\n");
       $nm_saida->saida("         }\r\n");
       $nm_saida->saida("         str_val += obj_sel.options[i].value;\r\n");
       $nm_saida->saida("    }\r\n");
       $nm_saida->saida("    document.getElementById(sDest).value = str_val;\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida(" // Teste se elemento pertence ao array\r\n");
       $nm_saida->saida(" //-------------------------------------\r\n");
       $nm_saida->saida(" function in_array_Grid(aArray, sElem)\r\n");
       $nm_saida->saida(" {\r\n");
       $nm_saida->saida("  for (iCount = 0; iCount < aArray.length; iCount++)\r\n");
       $nm_saida->saida("  {\r\n");
       $nm_saida->saida("   if (sElem == aArray[iCount])\r\n");
       $nm_saida->saida("   {\r\n");
       $nm_saida->saida("    return true;\r\n");
       $nm_saida->saida("   }\r\n");
       $nm_saida->saida("  }\r\n");
       $nm_saida->saida("  return false;\r\n");
       $nm_saida->saida(" }\r\n");
       $nm_saida->saida("     function grid_search_get_sel_cond(obj_id)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var index = document.getElementById(obj_id).selectedIndex;\r\n");
       $nm_saida->saida("        return document.getElementById(obj_id).options[index].value;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_get_select(obj_id, str_type)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        if(str_type == '')\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            var obj = document.getElementById(obj_id);\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        else\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            var obj = $('#' + obj_id).multipleSelect('getSelects');\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        var val = \"\";\r\n");
       $nm_saida->saida("        for (iSelect = 0; iSelect < obj.length; iSelect++)\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            if ((str_type == '' && obj[iSelect].selected) || (str_type=='RADIO' || str_type=='CHECKBOX'))\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                if(str_type == '' && obj[iSelect].selected)\r\n");
       $nm_saida->saida("                {\r\n");
       $nm_saida->saida("                    new_val = obj[iSelect].value;\r\n");
       $nm_saida->saida("                }\r\n");
       $nm_saida->saida("                else\r\n");
       $nm_saida->saida("                {\r\n");
       $nm_saida->saida("                    new_val = obj[iSelect];\r\n");
       $nm_saida->saida("                }\r\n");
       $nm_saida->saida("                val += (val != \"\") ? \"_VLS_\" : \"\";\r\n");
       $nm_saida->saida("                val += new_val;\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        return val;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_get_Dselelect(obj_id)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var obj = document.getElementById(obj_id);\r\n");
       $nm_saida->saida("        var val = \"\";\r\n");
       $nm_saida->saida("        for (iSelect = 0; iSelect < obj.length; iSelect++)\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            val += (val != \"\") ? \"_VLS_\" : \"\";\r\n");
       $nm_saida->saida("            val += obj[iSelect].value;\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        return val;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_get_radio(obj_id)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var Nobj = document.getElementById(obj_id).name;\r\n");
       $nm_saida->saida("        var obj  = document.getElementsByName(Nobj);\r\n");
       $nm_saida->saida("        var val  = \"\";\r\n");
       $nm_saida->saida("        for (iRadio = 0; iRadio < obj.length; iRadio++)\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            if (obj[iRadio].checked)\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                val += (val != \"\") ? \"_VLS_\" : \"\";\r\n");
       $nm_saida->saida("                val += obj[iRadio].value;\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        return val;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_get_checkbox(obj_id)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var Nobj = document.getElementById(obj_id).name;\r\n");
       $nm_saida->saida("        var obj  = document.getElementsByName(Nobj);\r\n");
       $nm_saida->saida("        var val  = \"\";\r\n");
       $nm_saida->saida("        if (!obj.length)\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            if (obj.checked)\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                val = obj.value;\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            return val;\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        else\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            for (iCheck = 0; iCheck < obj.length; iCheck++)\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                if (obj[iCheck].checked)\r\n");
       $nm_saida->saida("                {\r\n");
       $nm_saida->saida("                    val += (val != \"\") ? \"_VLS_\" : \"\";\r\n");
       $nm_saida->saida("                    val += obj[iCheck].value;\r\n");
       $nm_saida->saida("                }\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        return val;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_get_text(obj_id, obj_ac)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var obj = document.getElementById(obj_id);\r\n");
       $nm_saida->saida("        var val = \"\";\r\n");
       $nm_saida->saida("        if (obj)\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            val = obj.value;\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        if (obj_ac != '' && val == '')\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            obj = document.getElementById(obj_ac);\r\n");
       $nm_saida->saida("            if (obj)\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                val = obj.value;\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        return val;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("     function grid_search_get_dt_h(obj_id, ind, TP)\r\n");
       $nm_saida->saida("     {\r\n");
       $nm_saida->saida("        var val = new Array();\r\n");
       $nm_saida->saida("        if (TP == 'DT' || TP == 'DH')\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            obj_part  = document.getElementById(obj_id + '_ano_val_' + ind);\r\n");
       $nm_saida->saida("            val      += \"Y:\";\r\n");
       $nm_saida->saida("            if (obj_part && obj_part.type.substr(0, 6) == 'select')\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                Tval = grid_search_get_sel_cond(obj_id + '_ano_val_' + ind);\r\n");
       $nm_saida->saida("                val += (Tval != -1) ? Tval : '';\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            else\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                val += (obj_part) ? obj_part.value : '';\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            obj_part  = document.getElementById(obj_id + '_mes_val_' + ind);\r\n");
       $nm_saida->saida("            val      += \"_VLS_M:\";\r\n");
       $nm_saida->saida("            if (obj_part && obj_part.type.substr(0, 6) == 'select')\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                Tval = grid_search_get_sel_cond(obj_id + '_mes_val_' + ind);\r\n");
       $nm_saida->saida("                val += (Tval != -1) ? Tval : '';\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            else\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                val += (obj_part) ? obj_part.value : '';\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            obj_part  = document.getElementById(obj_id + '_dia_val_' + ind);\r\n");
       $nm_saida->saida("            val      += \"_VLS_D:\";\r\n");
       $nm_saida->saida("            if (obj_part && obj_part.type.substr(0, 6) == 'select')\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                Tval = grid_search_get_sel_cond(obj_id + '_dia_val_' + ind);\r\n");
       $nm_saida->saida("                val += (Tval != -1) ? Tval : '';\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("            else\r\n");
       $nm_saida->saida("            {\r\n");
       $nm_saida->saida("                val += (obj_part) ? obj_part.value : '';\r\n");
       $nm_saida->saida("            }\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        if (TP == 'HH' || TP == 'DH')\r\n");
       $nm_saida->saida("        {\r\n");
       $nm_saida->saida("            val            += (val != \"\") ? \"_VLS_\" : \"\";\r\n");
       $nm_saida->saida("            obj_part        = document.getElementById(obj_id + '_hor_val_' + ind);\r\n");
       $nm_saida->saida("            val            += \"H:\";\r\n");
       $nm_saida->saida("            val            += (obj_part) ? obj_part.value : '';\r\n");
       $nm_saida->saida("            obj_part        = document.getElementById(obj_id + '_min_val_' + ind);\r\n");
       $nm_saida->saida("            val            += \"_VLS_I:\";\r\n");
       $nm_saida->saida("            val            += (obj_part) ? obj_part.value : '';\r\n");
       $nm_saida->saida("            obj_part        = document.getElementById(obj_id + '_seg_val_' + ind);\r\n");
       $nm_saida->saida("            val            += \"_VLS_S:\";\r\n");
       $nm_saida->saida("            val            += (obj_part) ? obj_part.value : '';\r\n");
       $nm_saida->saida("        }\r\n");
       $nm_saida->saida("        return val;\r\n");
       $nm_saida->saida("     }\r\n");
       $nm_saida->saida("   </script>\r\n");
   }
}
?>
