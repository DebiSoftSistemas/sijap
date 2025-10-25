<?php

class grid_fac_recargos_aplicados_res_xml
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;
   var $nm_data;
   var $array_titulos;
   var $array_linhas;
   var $campo_titulo;

   var $Arquivo;
   var $Arquivo_view;
   var $Tit_doc;
   var $sc_proc_grid; 

   //---- 
   function __construct()
   {
      $this->nm_data   = new nm_data("es");
   }

   //---- 
   function monta_xml()
   {
      $this->inicializa_vars();
      $this->grava_arquivo();
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_grid']))
      {
          return;
      }
      if ($this->Ini->sc_export_ajax)
      {
          $this->Arr_result['file_export']  = NM_charset_to_utf8($this->Xml_f);
          $this->Arr_result['title_export'] = NM_charset_to_utf8($this->Tit_doc);
          $Temp = ob_get_clean();
          if ($Temp !== false && trim($Temp) != "")
          {
              $this->Arr_result['htmOutput'] = NM_charset_to_utf8($Temp);
          }
          $oJson = new Services_JSON();
          echo $oJson->encode($this->Arr_result);
          exit;
      }
      else
      {
          $this->progress_bar_end();
      }
   }

   //----- 
   function inicializa_vars()
   {
      $dir_raiz          = strrpos($_SERVER['PHP_SELF'],"/") ;  
      $dir_raiz          = substr($_SERVER['PHP_SELF'], 0, $dir_raiz + 1) ;  
      $this->New_Format  = true;
      $this->Xml_password  = "";
      if (isset($_REQUEST['nm_xml_tag']) && !empty($_REQUEST['nm_xml_tag']))
      {
          $this->New_Format = ($_REQUEST['nm_xml_tag'] == "tag") ? true : false;
      }
      $this->nm_location = $this->Ini->sc_protocolo . $this->Ini->server . $dir_raiz; 
      require_once($this->Ini->path_aplicacao . $this->Ini->Apl_resumo); 
      $this->array_titulos = array();
      $this->array_linhas  = array();
      $this->campo_titulo  = array();
      $this->nm_data       = new nm_data("es");
      $this->Arquivo       = "sc_xml";
      $this->Arquivo      .= "_" . date('YmdHis') . "_" . rand(0, 1000);
      $this->Arq_zip       = $this->Arquivo . "_grid_fac_recargos_aplicados.zip";
      $this->Arquivo      .= "_grid_fac_recargos_aplicados";
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_grid']))
      {
          $this->Arquivo      .= "_" . $this->Ini->Nm_lang['lang_othr_smry_titl'];
      }
      $this->Arquivo_view  = $this->Arquivo . "_view.xml";
      $this->Arquivo      .= ".xml";
      $this->Tit_doc       = "grid_fac_recargos_aplicados.xml";
      $this->Tit_zip       = "grid_fac_recargos_aplicados.zip";
      $this->Grava_view   = false;
      if (strtolower($_SESSION['scriptcase']['charset']) != strtolower($_SESSION['scriptcase']['charset_html']))
      {
          $this->Grava_view = true;
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name']))
      {
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'], ".");
          if ($Pos === false) {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'] .= ".xml";
          }
          $this->Arquivo = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'];
          $this->Arq_zip = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'];
          $this->Tit_doc = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'];
          $Pos = strrpos($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'], ".");
          if ($Pos !== false) {
              $this->Arq_zip = substr($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name'], 0, $Pos);
          }
          $this->Arq_zip .= ".zip";
          $this->Tit_zip  = $this->Arq_zip;
          unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_name']);
      }
      if (!$this->Grava_view)
      {
          $this->Arquivo_view = $this->Arquivo;
      }
      $this->Res       = new grid_fac_recargos_aplicados_resumo("out");
      $this->prep_modulos("Res");
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_grid']) && !$this->Ini->sc_export_ajax) {
          require_once($this->Ini->path_lib_php . "/sc_progress_bar.php");
          $this->pb = new scProgressBar();
          $this->pb->setRoot($this->Ini->root);
          $this->pb->setDir($_SESSION['scriptcase']['grid_fac_recargos_aplicados']['glo_nm_path_imag_temp'] . "/");
          $this->pb->setProgressbarMd5($_GET['pbmd5']);
          $this->pb->initialize();
          $this->pb->setReturnUrl("./");
          $this->pb->setReturnOption($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_return']);
          $this->pb->setTotalSteps(100);
          $Mens_bar  = $this->Ini->Nm_lang['lang_othr_prcs'];
          $Mens_smry = $this->Ini->Nm_lang['lang_othr_smry_titl'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
              $Mens_bar  = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
              $Mens_smry = sc_convert_encoding($Mens_smry, "UTF-8", $_SESSION['scriptcase']['charset']);
          }
          $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
          $this->pb->addSteps(50);
      }
   }

   //---- 
   function prep_modulos($modulo)
   {
      $this->$modulo->Ini    = $this->Ini;
      $this->$modulo->Db     = $this->Db;
      $this->$modulo->Erro   = $this->Erro;
      $this->$modulo->Lookup = $this->Lookup;
   }

   //----- 
   function grava_arquivo()
   {
      $xml_charset = $_SESSION['scriptcase']['charset'];
      $this->Xml_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $this->Zip_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arq_zip;
      $xml_f       = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo, "w");
      fwrite($xml_f, "<?xml version=\"1.0\" encoding=\"$xml_charset\" ?>\r\n");
      fwrite($xml_f, "<root>\r\n");
      if ($this->New_Format)
      {
          fwrite($xml_f, "<grid_fac_recargos_aplicados>\r\n");
      }
      if ($this->Grava_view)
      {
          $xml_charset_v = $_SESSION['scriptcase']['charset_html'];
          $xml_v         = fopen($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo_view, "w");
          fwrite($xml_v, "<?xml version=\"1.0\" encoding=\"$xml_charset_v\" ?>\r\n");
          fwrite($xml_v, "<root>\r\n");
          if ($this->New_Format)
          {
              fwrite($xml_v, "<grid_fac_recargos_aplicados>\r\n");
          }
      }
      $this->Res->resumo_export();
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_grid']) && !$this->Ini->sc_export_ajax) {
          $Mens_bar  = $this->Ini->Nm_lang['lang_othr_prcs'];
          $Mens_smry = $this->Ini->Nm_lang['lang_othr_smry_titl'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
              $Mens_bar  = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
              $Mens_smry = sc_convert_encoding($Mens_smry, "UTF-8", $_SESSION['scriptcase']['charset']);
          }
          $this->pb->setProgressbarMessage($Mens_bar . ": " . $Mens_smry);
          $this->pb->addSteps(30);
      }
      $label_index = 'label';
      if (isset($_REQUEST['nm_xml_label']) && 'N' == $_REQUEST['nm_xml_label']) {
          $label_index = 'field_name';
      }
      $this->array_titulos = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['arr_export']['label'];
      $this->array_linhas  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['arr_export']['data'];
      $contr_rowspan = array();
      $tit_rowspan   = array();
      foreach ($this->array_titulos as $lines)
      {
           $col = 0;
           foreach ($lines as $columns)
           {
               $col_ok = false;
               $colspan = (isset($columns['colspan']) && 1 < $columns['colspan']) ? $columns['colspan'] : 1;
               while (!$col_ok)
               {
                   if (isset($contr_rowspan[$col]) && 1 < $contr_rowspan[$col])
                   {
                       if (isset($this->campo_titulo[$col]))   
                       {
                          $this->campo_titulo[$col] .= "_";
                       }
                       $this->campo_titulo[$col] .= $tit_rowspan[$col];
                       $contr_rowspan[$col]--;
                       $col++;
                   }
                   else
                   {
                       $col_ok = true;
                   }
               }
               $col_t = $col;
               if (isset($columns['rowspan']) && 1 < $columns['rowspan'])
               {
                   $contr_rowspan[$col] = $columns['rowspan'];
                   for ($x = 0; $x < $colspan; $x++)
                   {
                        if (isset($tit_rowspan[$col_t]))   
                        {
                            $tit_rowspan[$col_t] .= "_";
                        }
                        $tit_rowspan[$col_t] .= $columns[$label_index];
                       $col_t++;
                   }
               }
               for ($x = 0; $x < $colspan; $x++)
               {
                    if (isset($this->campo_titulo[$col]))   
                    {
                       $this->campo_titulo[$col] .= "_";
                    }
                    $this->campo_titulo[$col] .= $columns[$label_index];
                   $col++;
               }
           }
           foreach ($contr_rowspan as $col_t => $row)
           {
               if ($col_t >= $col && $row > 1)
               {
                   $contr_rowspan[$col]--;
               }
           }
      }
      foreach ($this->campo_titulo as $col => $titulo)
      {
          if ($_SESSION['scriptcase']['charset'] == "UTF-8" && !NM_is_utf8($this->campo_titulo[$col]))
          {
              $this->campo_titulo[$col] = sc_convert_encoding($this->campo_titulo[$col], "UTF-8", $_SESSION['scriptcase']['charset']);
          }
      }
      $this->grava_linha($xml_f);
      if ($this->New_Format)
      {
          fwrite($xml_f, "</grid_fac_recargos_aplicados>\r\n");
      }
      fwrite($xml_f, "</root>");
      fclose($xml_f);
      if ($this->Grava_view)
      {
          $this->grava_linha($xml_v);
          if ($this->New_Format)
          {
              fwrite($xml_v, "</grid_fac_recargos_aplicados>\r\n");
          }
          fwrite($xml_v, "</root>");
          fclose($xml_v);
      }
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_grid']))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_file']['xml'] = $this->Xml_f;
          if ($this->Grava_view)
          {
              $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_res_file']['view'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo_view;
          }
      }
      elseif ($this->Xml_password != "")
      { 
          $str_zip = "";
          $Zip_f = (FALSE !== strpos($this->Zip_f, ' ')) ? " \"" . $this->Zip_f . "\"" :  $this->Zip_f;
          $Arq_input  = (FALSE !== strpos($this->Xml_f, ' ')) ? " \"" . $this->Xml_f . "\"" :  $this->Xml_f;
          if (is_file($Zip_f)) {
              unlink($Zip_f);
          }
          if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
          {
              chdir($this->Ini->path_third . "/zip/windows");
              $str_zip = "zip.exe -P -j " . $this->Xml_password . " " . $Zip_f . " " . $Arq_input;
          }
          elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
          {
                if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                {
                    chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                }
                else
                {
                    chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                }
              $str_zip = "./7za -p" . $this->Xml_password . " a " . $Zip_f . " " . $Arq_input;
          }
          elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
          {
              chdir($this->Ini->path_third . "/zip/mac/bin");
              $str_zip = "./7za -p" . $this->Xml_password . " a " . $Zip_f . " " . $Arq_input;
          }
          if (!empty($str_zip)) {
              exec($str_zip);
          }
          // ----- ZIP log
          $fp = @fopen(trim(str_replace(array(".zip",'"'), array(".log",""), $Zip_f)), 'w');
          if ($fp)
          {
              @fwrite($fp, $str_zip . "\r\n\r\n");
              @fclose($fp);
          }
          unlink($Arq_input);
          $this->Arquivo = $this->Arq_zip;
          $this->Xml_f   = $this->Zip_f;
          $this->Tit_doc = $this->Tit_zip;
          if ($this->Grava_view)
          {
              $str_zip = "";
              $xml_view_f = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo_view;
              $zip_view_f = str_replace(".zip", "_view.zip", $this->Zip_f);
              $zip_arq_v  = str_replace(".zip", "_view.zip", $this->Arq_zip);
              $Zip_f      = (FALSE !== strpos(\zip_view_f, ' ')) ? " \"" . \zip_view_f . "\"" :  \zip_view_f;
              $Arq_input  = (FALSE !== strpos($xml_view_f, ' ')) ? " \"" . $xml_view_f . "\"" :  $xml_view_f;
              if (is_file($Zip_f)) {
                  unlink($Zip_f);
              }
              if (FALSE !== strpos(strtolower(php_uname()), 'windows')) 
              {
                  chdir($this->Ini->path_third . "/zip/windows");
                  $str_zip = "zip.exe -P -j " . $this->Xml_password . " " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'linux')) 
              {
                 if (FALSE !== strpos(strtolower(php_uname()), 'i686')) 
                 {
                     chdir($this->Ini->path_third . "/zip/linux-i386/bin");
                 }
                 else
                 {
                     chdir($this->Ini->path_third . "/zip/linux-amd64/bin");
                 }
                 $str_zip = "./7za -p" . $this->Xml_password . " a " . $Zip_f . " " . $Arq_input;
              }
              elseif (FALSE !== strpos(strtolower(php_uname()), 'darwin'))
              {
                  chdir($this->Ini->path_third . "/zip/mac/bin");
                 $str_zip = "./7za -p" . $this->Xml_password . " a " . $Zip_f . " " . $Arq_input;
              }
              if (!empty($str_zip)) {
                  exec($str_zip);
              }
              unlink($Arq_input);
              $this->Arquivo_view = $zip_arq_v;
              // ----- ZIP log
              $fp = @fopen(str_replace(".zip", ".log", $Zip_f), 'a');
              if ($fp)
              {
                  @fwrite($fp, $str_zip . "\r\n\r\n");
                  @fclose($fp);
              }
          } 
          else 
          {
              $this->Arquivo_view = $this->Arq_zip;
          } 
      } 
   }

   //----- 
   function grava_linha($xml_f)
   {
      $contr_rowspan = "";
      $tit_rowspan   = "";
      foreach ($this->array_linhas as $lines)
      {
          $col           = 0;
          $lab           = "";
          $cmp           = false;
          $xml_registro  = "";
          if (!$this->New_Format)
          {
              $xml_registro = "<grid_fac_recargos_aplicados";
          }
          foreach ($lines as $columns)
          {
              if (0 <= $columns['level'])
              {
                  $cada_dado = $columns['label'];
                  $cada_dado = str_replace("&nbsp;", "", $cada_dado);
                  if ($_SESSION['scriptcase']['charset'] == "UTF-8" && !NM_is_utf8($cada_dado))
                  {
                      $cada_dado = sc_convert_encoding($cada_dado, "UTF-8", $_SESSION['scriptcase']['charset']);
                  }
                  if (isset($columns['rowspan']) && $columns['rowspan'] > 1)
                  {
                      $contr_rowspan = $columns['rowspan'];
                      $tit_rowspan   = (!empty($tit_rowspan)) ? "_" . $cada_dado : $cada_dado;
                  }
                  else
                  {
                     $lab .= (empty($lab)) ? $cada_dado : "_" . $cada_dado;
                  }
              }
              else
              {
                  if (!$cmp)
                  {
                      if (!empty($contr_rowspan) && $contr_rowspan > 0)
                      {
                          $lab = $tit_rowspan . "_" . $lab;
                          $contr_rowspan--;
                      }
                      $this->clear_tag($lab);
                      if ($this->New_Format)
                      {
                          $xml_registro .= "<" . $lab . ">\r\n";
                      }
                      else
                      {
                          $xml_registro .= " Campo=\"" . $lab . "\"";
                      }
                      $cmp = true;
                  }
                  $cada_dado = $columns['value'];
                  if (is_array($cada_dado)) {
                      $cada_dado = "";
                  }
                  $cada_tit  = $this->trata_dados($this->campo_titulo[$col]);
                  $this->clear_tag($cada_tit);
                  if ($this->New_Format)
                  {
                      $xml_registro .= " <" . $cada_tit . ">" . $cada_dado . "</" . $cada_tit . ">\r\n";
                  }
                  else
                  {
                      $xml_registro .= " " . $cada_tit . "=\"" . $cada_dado . "\"";
                  }
                  $col++;
              }
          }
          if ($this->New_Format && $cmp)
          {
              $xml_registro .= "</" . $lab . ">\r\n";
          }
          if (!$this->New_Format)
          {
              $xml_registro .= " />\r\n";
          }
          fwrite($xml_f, $xml_registro);
      }
   }

   //----- 
   function trata_dados($conteudo)
   {
      $str_temp = $conteudo;
      $str_temp = str_replace("<br />", "",  $str_temp);
      $str_temp = str_replace("&", "&amp;",  $str_temp);
      $str_temp = str_replace("<", "&lt;",   $str_temp);
      $str_temp = str_replace(">", "&gt;",   $str_temp);
      $str_temp = str_replace("'", "&apos;", $str_temp);
      $str_temp = str_replace('"', "&quot;",  $str_temp);
      $str_temp = str_replace('(', "_",  $str_temp);
      $str_temp = str_replace(')', "",  $str_temp);
      return ($str_temp);
   }

   function clear_tag(&$conteudo)
   {
      $out = (is_numeric(substr($conteudo, 0, 1)) || substr($conteudo, 0, 1) == "") ? "_" : "";
      $str_temp = "abcdefghijklmnopqrstuvwxyz0123456789";
      for ($i = 0; $i < strlen($conteudo); $i++)
      {
          $char = substr($conteudo, $i, 1);
          $ok = false;
          for ($z = 0; $z < strlen($str_temp); $z++)
          {
              if (strtolower($char) == substr($str_temp, $z, 1))
              {
                  $ok = true;
                  break;
              }
          }
          $out .= ($ok) ? $char : "_";
      }
      $conteudo = $out;
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
   function progress_bar_end()
   {
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][1] = $this->Tit_doc;
      $Mens_bar = $this->Ini->Nm_lang['lang_othr_file_msge'];
      if ($_SESSION['scriptcase']['charset'] != "UTF-8") {
          $Mens_bar = sc_convert_encoding($Mens_bar, "UTF-8", $_SESSION['scriptcase']['charset']);
      }
      $this->pb->setProgressbarMessage($Mens_bar);
      $this->pb->setDownloadLink($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $this->pb->setDownloadMd5($path_doc_md5);
      $this->pb->completed();
   }
   //---- 
   function monta_html()
   {
      global $nm_url_saida;
      include($this->Ini->path_btn . $this->Ini->Str_btn_grid);
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_file']);
      if (is_file($this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo))
      {
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_file'] = $this->Ini->root . $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      }
      $path_doc_md5 = md5($this->Ini->path_imag_temp . "/" . $this->Arquivo);
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][0] = $this->Ini->path_imag_temp . "/" . $this->Arquivo;
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados'][$path_doc_md5][1] = $this->Tit_doc;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE>RECARGOS APLICADOS :: XML</TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
<?php
if ($_SESSION['scriptcase']['proc_mobile'])
{
?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}
?>
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__img__NM__favicon.png">
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export.css" /> 
  <link rel="stylesheet" type="text/css" href="../_lib/css/<?php echo $this->Ini->str_schema_all ?>_export<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <?php
 if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts))
 {
 ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->str_google_fonts ?>" />
 <?php
 }
 ?>
  <link rel="stylesheet" type="text/css" href="../_lib/buttons/<?php echo $this->Ini->Str_btn_css ?>" /> 
</HEAD>
<BODY class="scExportPage">
<?php echo $this->Ini->Ajax_result_set ?>
<table style="border-collapse: collapse; border-width: 0; height: 100%; width: 100%"><tr><td style="padding: 0; text-align: center; vertical-align: middle">
 <table class="scExportTable" align="center">
  <tr>
   <td class="scExportTitle" style="height: 25px">XML</td>
  </tr>
  <tr>
   <td class="scExportLine" style="width: 100%">
    <table style="border-collapse: collapse; border-width: 0; width: 100%"><tr><td class="scExportLineFont" style="padding: 3px 0 0 0" id="idMessage">
    <?php echo $this->Ini->Nm_lang['lang_othr_file_msge'] ?>
    </td><td class="scExportLineFont" style="text-align:right; padding: 3px 0 0 0">
     <?php echo nmButtonOutput($this->arr_buttons, "bexportview", "document.Fview.submit()", "document.Fview.submit()", "idBtnView", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bdownload", "document.Fdown.submit()", "document.Fdown.submit()", "idBtnDown", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
     <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "document.F0.submit()", "document.F0.submit()", "idBtnBack", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "", "only_text", "text_right", "", "", "", "", "", "", "");
 ?>
    </td></tr></table>
   </td>
  </tr>
 </table>
</td></tr></table>
<form name="Fview" method="get" action="<?php echo $this->Ini->path_imag_temp . "/" . $this->Arquivo_view ?>" target="_blank" style="display: none"> 
</form>
<form name="Fdown" method="get" action="grid_fac_recargos_aplicados_download.php" target="_blank" style="display: none"> 
<input type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<input type="hidden" name="nm_tit_doc" value="grid_fac_recargos_aplicados"> 
<input type="hidden" name="nm_name_doc" value="<?php echo $path_doc_md5 ?>"> 
</form>
<FORM name="F0" method=post action="./"> 
<INPUT type="hidden" name="script_case_init" value="<?php echo NM_encode_input($this->Ini->sc_page); ?>"> 
<INPUT type="hidden" name="nmgp_opcao" value="<?php echo NM_encode_input($_SESSION['sc_session'][$this->Ini->sc_page]['grid_fac_recargos_aplicados']['xml_return']); ?>"> 
</FORM> 
</td></tr></table>
</BODY>
</HTML>
<?php
   }
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
function mes($numero) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	switch ($numero) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
		default: 
		  $month = "Parametro incorrecto";
			break;
	}
	return $month;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function FormatoFecha($fecha) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	
	list ( $month, $day, $year ) = split ( '[/.-]', $fecha );
	return $month . '/' . $day . '/' . $year;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function Hoy() {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mes = sprintf ( "%02s", $today ['mon'] );
	$dia = sprintf ( "%02s", $today ['mday'] );
	$anio = $today ['year'];
	return $anio . '/' . $mes . '/' . $dia;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function fecha_actual() {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$today = getdate ();
	$mon = $today ['mon'];
	$mday = $today ['mday'];
	$hora = $today ['hours'];
	$minutos = $today ['minutes'];
	$segundos = $today ['seconds'];
	$fecha_actual = $mday . " de ";
	switch ($mon) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
	}
	$fecha_actual .= $month . " de ";
	$mday = $today ['mday'];
	$year = $today ['year'];
	$fecha_actual .= $year;
	return $fecha_actual;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function fecha_larga($dia,$mes,$anio) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	switch ($mes) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
	}
	return $dia . ' de ' . $month . ' del ' . $anio;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function fecha_larga_dia($fecha) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$fechats = strtotime($fecha);
	
	switch (date('w', $fechats)){ 
		case 0: $nom_dia= "Domingo"; break; 
		case 1: $nom_dia= "Lunes"; break; 
		case 2: $nom_dia= "Martes"; break; 
		case 3: $nom_dia= "Miércoles"; break; 
		case 4: $nom_dia= "Jueves"; break; 
		case 5: $nom_dia= "Viernes"; break; 
		case 6: $nom_dia= "Sábado"; break; 
	}
	
	$day = substr ( $fecha, 8, 2 ) . " de ";
	switch (intval ( substr ( $fecha, 5, 2 ) )) {
		case 1 :
			$month = "Enero";
			break;
		case 2 :
			$month = "Febrero";
			break;
		case 3 :
			$month = "Marzo";
			break;
		case 4 :
			$month = "Abril";
			break;
		case 5 :
			$month = "Mayo";
			break;
		case 6 :
			$month = "Junio";
			break;
		case 7 :
			$month = "Julio";
			break;
		case 8 :
			$month = "Agosto";
			break;
		case 9 :
			$month = "Septiembre";
			break;
		case 10 :
			$month = "Octubre";
			break;
		case 11 :
			$month = "Noviembre";
			break;
		case 12 :
			$month = "Diciembre";
			break;
	}
	return $nom_dia . ' ' .$day . ' ' . $month . ' de ' . substr ( $fecha, 0, 4 );

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function grado($numero) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	switch ($numero) {
		case 1 :
			return "PRIMER";
			break;
		case 2 :
			return "SEGUNDO";
			break;
		case 3 :
			return "TERCER";
			break;
		case 4 :
			return "CUARTO";
			break;
		case 5 :
			return "QUINTO";
			break;
		case 6 :
			return "SEXTO";
			break;
		case 7 :
			return "SEPTIMO";
			break;
		case 8 :
			return "OCTAVO";
			break;
		case 9 :
			return "NOVENO";
			break;
		case 10 :
			return "DECIMO";
			break;
	}

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function llenaizq($a, $Tamanio, $car) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $b . $a;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function llenader($a, $Tamanio, $car) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$b = "";
	if (strlen ( $a ) < $Tamanio)
		for($i = strlen ( $a ); $i < $Tamanio; $i ++)
			$b = $b . $car;
	return $a . $b;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function cifrado($cadena) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$strcifrado = '';
	$cadena = trim($cadena);
	for($i = 1; $i <= strlen($cadena); $i ++) {
		$strcifrado = $strcifrado.$this->llenaizq( strval( 1 + ord( substr($cadena, $i - 1, 1 ) ) ), 3, '0' );
	}
	return $strcifrado;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function descifrado($cadena) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$cifrado = '';
	for($i = 1; $i <= strlen( $cadena ); $i += 3) {
		$cifrado = $cifrado . chr( substr( $cadena, $i - 1, 3 ) - 1 );
	}
	
	return $cifrado;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function IgtechEliminaInyeccion($cadena) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$cadena=str_replace("=","",$cadena);
    $cadena=str_replace("'","",$cadena);
	$cadena=str_replace('"',"",$cadena);
	$cadena=str_replace('or',"",$cadena);
	$cadena=str_replace('OR',"",$cadena);
	return $cadena;
	
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function diasHabiles($dia,$mes,$anio,$numDias,$fer){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
 
$fechaInicial	= mktime(0,0,0,$mes ,$dia ,$anio);
$lapso			= $numDias; 
$diasTrans		= 0; 
$diasHabiles	= 1;
$feriados		= $fer;
while($diasHabiles<=($lapso))
{	$fecha		= $fechaInicial+($diasTrans*86400);	
	$diaSemana	= getdate($fecha);
	if($diaSemana["wday"]!=0 && $diaSemana["wday"]!=6)
	{	$feriado	= $diaSemana['mday']."-".$diaSemana['mon']."-".$diaSemana['year'];
		if(!in_array($feriado,$feriados))
		{	$diasHabiles++;}
	}
	$diasTrans++;
}
$diasTrans=$diasTrans-1;
$fechaFinal	= $fechaInicial+($diasTrans*86400);	

return date("d-m-Y",$fechaFinal);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function diaMesAnio(){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
   
	$fecha=date("j-n-Y");
	$meses=array("Mes 	Nulo","Enero","Febrero","Marzo","Abril","Mayo",
				 "Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$fecha_array=explode("-",$fecha);
	$dia=$fecha_array[0];
	$mes=$meses[$fecha_array[1]];
	$anio=$fecha_array[2];
	return array($dia,$mes,$anio);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function separar($dato){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
   
     $fecha_array=explode("-",$dato);
     return $fecha_array;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function mesNum($numero) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
      switch ($numero) {
          case "Enero" :
              $month = 1;
              break;
          case "Febrero" :
              $month = 2;
              break;
          case "Marzo" :
              $month = 3;
              break;
          case "Abril" :
              $month = 4;
              break;
          case "Mayo" :
              $month = 5;
              break;
          case "Junio" :
              $month = 6;
              break;
          case "Julio" :
              $month = 7;
              break;
          case "Agosto" :
              $month = 8;
              break;
          case "Septiembre" :
              $month = 9;
              break;
          case "Octubre" :
              $month = 10;
              break;
          case "Noviembre" :
              $month = 11;
              break;
          case "Diciembre" :
          $month = 12;
          break;
          default: 
          $month = "Parametro incorrecto";
          break;
    }
    return $month;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function leerxml($array, $dir){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
		$xml=simplexml_load_file($dir);
		$contador=count($xml->detalle->campo);
		$nro=$array;
		$cont=0;
		$campo;
		for($i=0; $i<$contador;$i++){
			$atrib=$xml->detalle->campo[$i]->attributes();
			$valor=$atrib['numero'];
			$contador_array=count($nro);
			for($j=0; $j<$contador_array; $j++){
				if($valor==$nro[$j][0]){
					$campo[$cont][0]=$nro[$j][1];		
					$campo[$cont][1]=$xml->detalle->campo[$i];
					$cont=$cont+1;
				}
			}
		}
		return $campo;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function getMonto($money){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

    return (float) str_replace(',', '.', $removedThousendSeparator);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function secuencialCartera($numero, $fecha){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  	
	$timestamp = strtotime($fecha); 
    $anio_actual = date('Y', $timestamp);
	$num = '';
	$longitud = strlen($numero);
	for($i=0;$i<(4-$longitud); $i++){
		$num .='0';
	}	
	$num = $num.$numero.'-'.$anio_actual; 
	return $num;	

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function inicialesUsuario($usuario){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$array2 = explode(".", $usuario);
	$apellido = substr($array2[0], 0, 1);
	$nombre = substr($array2[1], 0, 1);
	$resultado = strtolower ($nombre.$apellido);
	return $resultado;		

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function obtenerArray($cadena){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  		
	$array = split(',' , $cadena);
	$newarray=array_values(array_diff($array, array('')));	
	return $newarray;	

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function dias_transcurridos($fecha_i,$fecha_f){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;
	$dias 	= abs($dias); 
	$dias = floor($dias);		
	return $dias;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function trasformar_money($numero){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
	setlocale(LC_MONETARY, 'en_US');
	$money=money_format('%i', $numero) . "\n";			
	return str_replace('USD', '', $money);

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function calculaedad($fechanacimiento){
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
  
  list($ano,$mes,$dia) = explode("-",$fechanacimiento);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($mes_diferencia < 0 || ($mes_diferencia == 0 && $dia_diferencia < 0 ))
    $ano_diferencia--;
  return $ano_diferencia;

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
function num2letras($num, $moneda, $denominacion, $fem = false, $dec = true) {
$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'on';
   
   $matuni[2]  = "dos"; 
   $matuni[3]  = "tres"; 
   $matuni[4]  = "cuatro"; 
   $matuni[5]  = "cinco"; 
   $matuni[6]  = "seis"; 
   $matuni[7]  = "siete"; 
   $matuni[8]  = "ocho"; 
   $matuni[9]  = "nueve"; 
   $matuni[10] = "diez"; 
   $matuni[11] = "once"; 
   $matuni[12] = "doce"; 
   $matuni[13] = "trece"; 
   $matuni[14] = "catorce"; 
   $matuni[15] = "quince"; 
   $matuni[16] = "dieciseis"; 
   $matuni[17] = "diecisiete"; 
   $matuni[18] = "dieciocho"; 
   $matuni[19] = "diecinueve"; 
   $matuni[20] = "veinte"; 
   $matunisub[2] = "dos"; 
   $matunisub[3] = "tres"; 
   $matunisub[4] = "cuatro"; 
   $matunisub[5] = "quin"; 
   $matunisub[6] = "seis"; 
   $matunisub[7] = "sete"; 
   $matunisub[8] = "ocho"; 
   $matunisub[9] = "nove"; 

   $matdec[2] = "veint"; 
   $matdec[3] = "treinta"; 
   $matdec[4] = "cuarenta"; 
   $matdec[5] = "cincuenta"; 
   $matdec[6] = "sesenta"; 
   $matdec[7] = "setenta"; 
   $matdec[8] = "ochenta"; 
   $matdec[9] = "noventa"; 
   $matsub[3]  = 'mill'; 
   $matsub[5]  = 'bill'; 
   $matsub[7]  = 'mill'; 
   $matsub[9]  = 'trill'; 
   $matsub[11] = 'mill'; 
   $matsub[13] = 'bill'; 
   $matsub[15] = 'mill'; 
   $matmil[4]  = 'millones'; 
   $matmil[6]  = 'billones'; 
   $matmil[7]  = 'de billones'; 
   $matmil[8]  = 'millones de billones'; 
   $matmil[10] = 'trillones'; 
   $matmil[11] = 'de trillones'; 
   $matmil[12] = 'millones de trillones'; 
   $matmil[13] = 'de trillones'; 
   $matmil[14] = 'billones de trillones'; 
   $matmil[15] = 'de billones de trillones'; 
   $matmil[16] = 'millones de billones de trillones'; 
   $neg='';
	$zeros = true;
   $float=explode('.',$num);
   $num=$float[0];
	if($float[1]==''){
	$float[1]='00';	
	}

   $num = trim((string)@$num); 
   if ($num[0] == '-') { 
      $neg = 'menos '; 
      $num = substr($num, 1); 
   }else 
      $neg = ''; 
   while ($num[0] == '0') $num = substr($num, 1); 
   if ($num[0] < '1' or $num[0] > 9) $num = '0' . $num; 
   $zeros = true; 
   $punt = false; 
   $ent = ''; 
   $fra = ''; 
   for ($c = 0; $c < strlen($num); $c++) { 
      $n = $num[$c]; 
      if (! (strpos(".,'''", $n) === false)) { 
         if ($punt) break; 
         else{ 
            $punt = true; 
            continue; 
         } 

      }elseif (! (strpos('0123456789', $n) === false)) { 
         if ($punt) { 
            if ($n != '0') $zeros = false; 
            $fra .= $n; 
         }else 

            $ent .= $n; 
      }else 

         break; 

   } 
   $ent = '     ' . $ent; 
   if ($dec and $fra and ! $zeros) { 
      $fin = ' coma'; 
      for ($n = 0; $n < strlen($fra); $n++) { 
         if (($s = $fra[$n]) == '0') 
            $fin .= ' cero'; 
         elseif ($s == '1') 
            $fin .= $fem ? ' una' : ' un'; 
         else 
            $fin .= ' ' . $matuni[$s]; 
      } 
   }else 
      $fin = ''; 
   if ((int)$ent === 0) return 'Cero ' . $fin; 
   $tex = ''; 
   $sub = 0; 
   $mils = 0; 
   $neutro = false; 
   while ( ($num = substr($ent, -3)) != '   ') { 
      $ent = substr($ent, 0, -3); 
      if (++$sub < 3 and $fem) { 
         $matuni[1] = 'una'; 
         $subcent = 'as'; 
      }else{ 
         $matuni[1] = $neutro ? 'un' : 'uno'; 
         $subcent = 'os'; 
      } 
      $t = ''; 
      $n2 = substr($num, 1); 
      if ($n2 == '00') { 
      }elseif ($n2 < 21) 
         $t = ' ' . $matuni[(int)$n2]; 
      elseif ($n2 < 30) { 
         $n3 = $num[2]; 
         if ($n3 != 0) $t = 'i' . $matuni[$n3]; 
         $n2 = $num[1]; 
         $t = ' ' . $matdec[$n2] . $t; 
      }else{ 
         $n3 = $num[2]; 
         if ($n3 != 0) $t = ' y ' . $matuni[$n3]; 
         $n2 = $num[1]; 
         $t = ' ' . $matdec[$n2] . $t; 
      } 
      $n = $num[0]; 
      if ($n == 1) { 
         $t = ' ciento' . $t; 
      }elseif ($n == 5){ 
         $t = ' ' . $matunisub[$n] . 'ient' . $subcent . $t; 
      }elseif ($n != 0){ 
         $t = ' ' . $matunisub[$n] . 'cient' . $subcent . $t; 
      } 
      if ($sub == 1) { 
      }elseif (! isset($matsub[$sub])) { 
         if ($num == 1) { 
            $t = ' mil'; 
         }elseif ($num > 1){ 
            $t .= ' mil'; 
         } 
      }elseif ($num == 1) { 
         $t .= ' ' . $matsub[$sub] . '?n'; 
      }elseif ($num > 1){ 
         $t .= ' ' . $matsub[$sub] . 'ones'; 
      }   
      if ($num == '000') $mils ++; 
      elseif ($mils != 0) { 
         if (isset($matmil[$sub])) $t .= ' ' . $matmil[$sub]; 
         $mils = 0; 
      } 
      $neutro = true; 
      $tex = $t . $tex; 
   } 
   $tex = $neg . substr($tex, 1) . $fin; 

	
   $end_num=ucfirst($tex).' '.$denominacion.' '.$float[1].'/100 '.$moneda;
   return $end_num; 

$_SESSION['scriptcase']['grid_fac_recargos_aplicados']['contr_erro'] = 'off';
}
}

?>
