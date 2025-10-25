<?php

class grid_v_del_resumen_facturacion_diaria_total
{
   var $Db;
   var $Erro;
   var $Ini;
   var $Lookup;

   var $nm_data;

   //----- 
   function __construct($sc_page)
   {
      $this->sc_page = $sc_page;
      $this->nm_data = new nm_data("es");
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_v_del_resumen_facturacion_diaria']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_v_del_resumen_facturacion_diaria']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['campos_busca'];
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
          $this->fac_tipo_comprobante = (isset($Busca_temp['fac_tipo_comprobante'])) ? $Busca_temp['fac_tipo_comprobante'] : ""; 
          $tmp_pos = (is_string($this->fac_tipo_comprobante)) ? strpos($this->fac_tipo_comprobante, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_tipo_comprobante))
          {
              $this->fac_tipo_comprobante = substr($this->fac_tipo_comprobante, 0, $tmp_pos);
          }
          $this->fac_serie = (isset($Busca_temp['fac_serie'])) ? $Busca_temp['fac_serie'] : ""; 
          $tmp_pos = (is_string($this->fac_serie)) ? strpos($this->fac_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_serie))
          {
              $this->fac_serie = substr($this->fac_serie, 0, $tmp_pos);
          }
      } 
   }


   //----- 
   function Calc_resumo_Inicial($destino_resumo, $res_export=false)
   {
      global $nm_lang;
      $this->nm_data = new nm_data("es");
      unset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['sql_tot_res']);
      if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['campos_busca']) && !empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['campos_busca'];
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
          $this->fac_fecha_2 = (isset($Busca_temp['fac_fecha_input_2'])) ? $Busca_temp['fac_fecha_input_2'] : ""; 
          $this->fac_tipo_comprobante = (isset($Busca_temp['fac_tipo_comprobante'])) ? $Busca_temp['fac_tipo_comprobante'] : ""; 
          $tmp_pos = (is_string($this->fac_tipo_comprobante)) ? strpos($this->fac_tipo_comprobante, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_tipo_comprobante))
          {
              $this->fac_tipo_comprobante = substr($this->fac_tipo_comprobante, 0, $tmp_pos);
          }
          $this->fac_serie = (isset($Busca_temp['fac_serie'])) ? $Busca_temp['fac_serie'] : ""; 
          $tmp_pos = (is_string($this->fac_serie)) ? strpos($this->fac_serie, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->fac_serie))
          {
              $this->fac_serie = substr($this->fac_serie, 0, $tmp_pos);
          }
      } 
      $this->sc_where_atual  = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq'];
      $ind_qb                = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['SC_Ind_Groupby'];
      $cmp_sql_def   = array('pro_descripcion' => "pro_descripcion",'fac_tipo_comprobante' => "fac_tipo_comprobante",'fac_serie' => "fac_serie",'concepto_factura' => "concepto_factura");
      $cmps_quebra_atual = array("pro_descripcion","fac_tipo_comprobante","fac_serie","concepto_factura");
      $ult_cmp_quebra_atual = $cmps_quebra_atual[(count($cmps_quebra_atual) - 1)];
      $arr_tots = "";
      $join     = "";
      $group    = "";
      $i_group  = 1;
      $cmps_gb  = "";
      $cmps_gb1 = "";
      $cmps_gb2 = "";
      $cmps_gbS = array();
      $ind_cmps = 5;
      $ind_alias = "1";
      $cmp_dim   = array();
      $all_group = array();
      foreach ($cmps_quebra_atual as $cmp_gb)
      {
          $Format_tst = $this->Ini->Get_Gb_date_format($ind_qb, $cmp_gb);
          if (!empty($Format_tst))
          {
              $Str_arg_sum = $this->Ini->Get_date_arg_sum($cmp_gb, $Format_tst, $cmp_sql_def[$cmp_gb], false, true);
              $Str_arg_sql = ($Str_arg_sum == " is null") ? $cmp_sql_def[$cmp_gb] : $this->Ini->Get_sql_date_groupby($cmp_sql_def[$cmp_gb], $Format_tst);
          }
          else
          {
              $Str_arg_sql = "";
              $Str_arg_sum = $cmp_sql_def[$cmp_gb] . " *sc# SC." . $cmp_sql_def[$cmp_gb];
          }
          $cmp_dim[$cmp_gb] = $ind_cmps;
          $temp = explode(" and ", $Str_arg_sum);
          foreach ($temp as $cada_parte)
          {
              $temp1 = explode("*sc#", $cada_parte);
              if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
              {
                  $group .= (empty($group)) ? $i_group : "," . $i_group;
              }
              elseif (!in_array($Str_arg_sql . trim($temp1[0]), $all_group))
              {
                  $group .= (empty($group)) ? $Str_arg_sql . trim($temp1[0]) : "," . $Str_arg_sql . trim($temp1[0]);
                  $all_group[] = $Str_arg_sql . trim($temp1[0]);
              }
              $cmps_gb1 .= (empty($cmps_gb1)) ? $Str_arg_sql . trim($temp1[0]) : "," . $Str_arg_sql . trim($temp1[0]);
              $cmps_gb1 .= " as a_cmp_" .  $ind_alias;
              $cmps_gb2 .= (empty($cmps_gb2)) ? $Str_arg_sql . trim($temp1[0]) : "," . $Str_arg_sql . trim($temp1[0]);
              $cmps_gb2 .= " as b_cmp_" .  $ind_alias;
              $join     .= empty($join) ? "" : " and ";
              $join     .= " SC_sel1.a_cmp_" .  $ind_alias . " =  SC_sel2.b_cmp_" .  $ind_alias;
              $ind_cmps++;
              $ind_alias++;
              $i_group++;
          }
      }
      $ind_cmps  = 5;
      $ind_alias = "1";
      $cmp_dim   = array();
      foreach ($cmps_quebra_atual as $cmp_gb)
      {
          $arr_tots .= "[\$" . $cmp_gb . "_orig]";
          $Format_tst = $this->Ini->Get_Gb_date_format($ind_qb, $cmp_gb);
          if (!empty($Format_tst))
          {
              $Str_arg_sum = $this->Ini->Get_date_arg_sum($cmp_gb, $Format_tst, $cmp_sql_def[$cmp_gb], false, true);
              $Str_arg_sql = ($Str_arg_sum == " is null") ? $cmp_sql_def[$cmp_gb] : $this->Ini->Get_sql_date_groupby($cmp_sql_def[$cmp_gb], $Format_tst);
          }
          else
          {
              $Str_arg_sql = "";
              $Str_arg_sum = $cmp_sql_def[$cmp_gb] . " *sc# SC." . $cmp_sql_def[$cmp_gb];
          }
          $cmp_dim[$cmp_gb] = $ind_cmps;
          $temp = explode(" and ", $Str_arg_sum);
          foreach ($temp as $cada_parte)
          {
              $temp1 = explode("*sc#", $cada_parte);
              $cmps_gb  .= (empty($cmps_gb)) ? "a_cmp_" .  $ind_alias : "," . "a_cmp_" .  $ind_alias;
              $cmps_gbS['a_cmp_' . $ind_alias] = $Str_arg_sql . trim($temp1[0]);
              $ind_cmps++;
              $ind_alias++;
          }
          $this->Res_Totaliza_Inicial($ind_qb, $cmp_gb, $arr_tots, $group, $join, $cmps_gb, $cmps_gb1, $cmps_gb2, $cmps_gbS, $cmp_dim, $cmps_quebra_atual, $cmp_sql_def, $res_export);
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['arr_total'] = array();
      foreach ($cmps_quebra_atual as $cmp_gb)
      {
          $Arr_tot_name = "array_total_" . $cmp_gb;
          $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['arr_total'][$cmp_gb] = $this->$Arr_tot_name;
      }
   }

   function Res_Totaliza_Inicial($ind_qb, $cmp_tot, $arr_tots, $group, $join, $cmps_quebras, $cmps_quebras1, $cmps_quebras2, $cmps_quebrasS, $Cmp_dim, $cmps_quebra_atual, $cmp_sql_def, $res_export)
   {
      $sc_having = ((isset($parms_sub_sel['having']))) ? "  having " . $parms_sub_sel['having'] : "";
      $Tem_estat_manual = false;
      $where_ok = $this->sc_where_atual;
      $cmp_sql_tp_num = array('fac_numero' => 'N','fac_cliente' => 'N','df_cantidad' => 'N','df_precio_unitario' => 'N','df_subtotal' => 'N','df_descuento' => 'N','df_base_iva' => 'N','df_valor_ice' => 'N','df_valor_iva' => 'N','df_valor_irbpnr' => 'N','df_total' => 'N');
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
         $cmd_simp = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4)#@#cmps_quebras#@# from (";
         $comando .= "select df_subtotal as SC_metric1,df_descuento as SC_metric2,df_valor_iva as SC_metric3,df_total as SC_metric4, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
      { 
         $cmd_simp = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4)#@#cmps_quebras#@# from (";
         $comando .= "select df_subtotal as SC_metric1,df_descuento as SC_metric2,df_valor_iva as SC_metric3,df_total as SC_metric4, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
         $cmd_simp = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4)#@#cmps_quebras#@# from (";
         $comando .= "select df_subtotal as SC_metric1,df_descuento as SC_metric2,df_valor_iva as SC_metric3,df_total as SC_metric4, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
      { 
         $cmd_simp = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4)#@#cmps_quebras#@# from (";
         $comando .= "select df_subtotal as SC_metric1,df_descuento as SC_metric2,df_valor_iva as SC_metric3,df_total as SC_metric4, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
      { 
         $cmd_simp = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4)#@#cmps_quebras#@# from (";
         $comando .= "select df_subtotal as SC_metric1,df_descuento as SC_metric2,df_valor_iva as SC_metric3,df_total as SC_metric4, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      else 
      { 
         $cmd_simp = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total)#@#cmps_quebras#@# from " . $this->Ini->nm_tabela . " " . $where_ok;
         $comando  = "select count(*), sum(SC_metric1), sum(SC_metric2), sum(SC_metric3), sum(SC_metric4)#@#cmps_quebras#@# from (";
         $comando .= "select df_subtotal as SC_metric1,df_descuento as SC_metric2,df_valor_iva as SC_metric3,df_total as SC_metric4, " . $cmps_quebras1 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . ") SC_sel1 INNER JOIN (";
         $comando .= "select " . $cmps_quebras2 . " from " . $this->Ini->nm_tabela . " " .  $where_ok . " group by " . $group . $sc_having . ") SC_sel2 ";
         $comando .= " ON " . $join;
      } 
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['sql_tot_res']))
      {
         $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['sql_tot_res'] = str_replace("#@#cmps_quebras#@#", "", $comando);
      }
      $comando  = str_replace("#@#cmps_quebras#@#", "," . $cmps_quebras, $comando);
      $comando .= " group by " . $cmps_quebras . " order by " .  $cmps_quebras;
      if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['Res_search_metric_use']) || empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['Res_search_metric_use']))
      {
          $comando = $cmd_simp;
          $cmps_S  = "";
          foreach ($cmps_quebrasS as $alias => $sql)
          {
              $cmps_S .= empty($cmps_S) ? $sql : ", " . $sql;
          }
          $comando = str_replace("#@#cmps_quebras#@#", "," . $cmps_S, $comando);
          $order_group = "";
          foreach ($cmps_quebrasS as $alias => $cada_tst)
          {
              $cada_tst = trim($cada_tst);
              $pos = strpos(" " . $order_group, " " . $cada_tst);
              if ($pos === false)
              {
                  $order_group .= (!empty($order_group)) ? ", " . $cada_tst : $cada_tst;
              }
          }
          $comando .= " group by " . $order_group . " order by " .  $order_group;
      }
      $comando  = $this->Ajust_statistic($comando);
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($comando))
      {
         $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit;
      }
      $format_dimensions = array();
      $format_dimensions['pro_descripcion']['reg'] = "S";
      $format_dimensions['pro_descripcion']['msk'] = "";
      $format_dimensions['fac_tipo_comprobante']['reg'] = "S";
      $format_dimensions['fac_tipo_comprobante']['msk'] = "";
      $format_dimensions['fac_serie']['reg'] = "S";
      $format_dimensions['fac_serie']['msk'] = "";
      $format_dimensions['concepto_factura']['reg'] = "S";
      $format_dimensions['concepto_factura']['msk'] = "";
      while (!$rt->EOF)
      {
          $sql_where = "";
          foreach ($Cmp_dim as $Cada_dim => $Ind_sql)
          {
              $prep_look  = $Cada_dim . "_SC_look";
              $$prep_look = $rt->fields[$Ind_sql];
              $SC_prep = $this->Ini->Get_format_dimension($Ind_sql, 'Inicial', $Cada_dim, $rt, $format_dimensions[$Cada_dim]['reg'], $format_dimensions[$Cada_dim]['msk']);
              $SC_orig = $Cada_dim . "_orig";
              $SC_graf = "val_grafico_" . $Cada_dim;
              $$Cada_dim = $SC_prep['fmt'];
              $$SC_orig = $SC_prep['orig'];
              if ($Cada_dim == "pro_descripcion") {
              }
              if ($Cada_dim == "fac_tipo_comprobante") {
                  $this->Lookup->lookup_Inicial_fac_tipo_comprobante($$Cada_dim,  $fac_tipo_comprobante);
              }
              if ($Cada_dim == "fac_serie") {
              }
              if ($Cada_dim == "concepto_factura") {
              }
              if (null === $$Cada_dim)
              {
                  $$Cada_dim = '';
              }
              if (null === $$SC_orig)
              {
                  $$SC_orig = '__SCNULL__';
              }
              $$SC_graf = $$Cada_dim;
              if ($Tem_estat_manual)
              {
                  $Format_tst = $this->Ini->Get_Gb_date_format($ind_qb, $Cada_dim);
                  if (!empty($Format_tst))
                  {
                      $val_sql  = $rt->fields[$Ind_sql];
                      if ($Format_tst == 'YYYYMMDDHHII')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1] . "-" . $rt->fields[$Ind_sql + 2] . " " . $rt->fields[$Ind_sql + 3] . ":" . $rt->fields[$Ind_sql + 4];
                      }
                      if ($Format_tst == 'YYYYMMDDHH')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1] . "-" . $rt->fields[$Ind_sql + 2] . " " . $rt->fields[$Ind_sql + 3];
                      }
                      if ($Format_tst == 'YYYYMMDD2')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1] . "-" . $rt->fields[$Ind_sql + 2];
                      }
                      if ($Format_tst == 'YYYYMM')
                      {
                          $val_sql .= "-" . $rt->fields[$Ind_sql + 1];
                      }
                      if ($Format_tst == 'YYYYHH' || $Format_tst == 'YYYYDD' || $Format_tst == 'YYYYDAYNAME' || $Format_tst == 'YYYYWEEK' || $Format_tst == 'YYYYBIMONTHLY' || $Format_tst == 'YYYYQUARTER' || $Format_tst == 'YYYYFOURMONTHS' || $Format_tst == 'YYYYSEMIANNUAL')
                      {
                          $val_sql .= $rt->fields[$Ind_sql + 1];
                      }
                      if ($Format_tst == 'HHIISS')
                      {
                          $val_sql  = $rt->fields[$Ind_sql] . ":" . $rt->fields[$Ind_sql + 1] . ":" . $rt->fields[$Ind_sql + 2];
                      }
                      if ($Format_tst == 'HHII')
                      {
                          $val_sql  = $rt->fields[$Ind_sql] . ":" . $rt->fields[$Ind_sql + 1];
                      }
                      $Str_arg_sum = $this->Ini->Get_date_arg_sum($val_sql, $Format_tst, $cmp_sql_def[$Cada_dim], true);
                      $Str_arg_sql = ($Str_arg_sum == " is null") ? $cmp_sql_def[$Cada_dim] : $this->Ini->Get_sql_date_groupby($cmp_sql_def[$Cada_dim], $Format_tst);
                  }
                  elseif (isset($cmp_sql_tp_num[$Cada_dim]))
                  {
                      $Str_arg_sql = $cmp_sql_def[$Cada_dim];
                      $Str_arg_sum = " = " . $rt->fields[$Ind_sql];
                  }
                  else
                  {
                      $Str_arg_sql = $cmp_sql_def[$Cada_dim];
                      $Str_arg_sum = " = " . $this->Db->qstr($rt->fields[$Ind_sql]);
                  }
                  $sql_where .= (!empty($sql_where)) ? " and " : "";
                  $sql_where .= $Str_arg_sql . $Str_arg_sum;
              }
          }
          if ($Tem_estat_manual)
          {
              $where_ok = (empty($this->sc_where_atual)) ? " where " . $sql_where : $this->sc_where_atual . " and " . $sql_where;
              $vl_statistic = $this->Calc_statist_manual_Inicial($where_ok);
              foreach ($vl_statistic as $ind => $val)
              {
                  $rt->fields[$ind] = $val;
              }
          }
          $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
          $rt->fields[1] = (strpos(strtolower($rt->fields[1]), "e")) ? (float)$rt->fields[1] : $rt->fields[1]; 
          $rt->fields[1] = (string)$rt->fields[1];
          if ($rt->fields[1] == "") 
          {
              $rt->fields[1] = 0;
          }
          if (substr($rt->fields[1], 0, 1) == ".") 
          {
              $rt->fields[1] = "0" . $rt->fields[1];
          }
          if (substr($rt->fields[1], 0, 2) == "-.") 
          {
              $rt->fields[1] = "-0" . substr($rt->fields[1], 1);
          }
          nmgp_Trunc_Num($rt->fields[1], 0);
          $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
          $rt->fields[2] = (strpos(strtolower($rt->fields[2]), "e")) ? (float)$rt->fields[2] : $rt->fields[2]; 
          $rt->fields[2] = (string)$rt->fields[2];
          if ($rt->fields[2] == "") 
          {
              $rt->fields[2] = 0;
          }
          if (substr($rt->fields[2], 0, 1) == ".") 
          {
              $rt->fields[2] = "0" . $rt->fields[2];
          }
          if (substr($rt->fields[2], 0, 2) == "-.") 
          {
              $rt->fields[2] = "-0" . substr($rt->fields[2], 1);
          }
          nmgp_Trunc_Num($rt->fields[2], 0);
          $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
          $rt->fields[3] = (strpos(strtolower($rt->fields[3]), "e")) ? (float)$rt->fields[3] : $rt->fields[3]; 
          $rt->fields[3] = (string)$rt->fields[3];
          if ($rt->fields[3] == "") 
          {
              $rt->fields[3] = 0;
          }
          if (substr($rt->fields[3], 0, 1) == ".") 
          {
              $rt->fields[3] = "0" . $rt->fields[3];
          }
          if (substr($rt->fields[3], 0, 2) == "-.") 
          {
              $rt->fields[3] = "-0" . substr($rt->fields[3], 1);
          }
          nmgp_Trunc_Num($rt->fields[3], 0);
          $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
          $rt->fields[4] = (strpos(strtolower($rt->fields[4]), "e")) ? (float)$rt->fields[4] : $rt->fields[4]; 
          $rt->fields[4] = (string)$rt->fields[4];
          if ($rt->fields[4] == "") 
          {
              $rt->fields[4] = 0;
          }
          if (substr($rt->fields[4], 0, 1) == ".") 
          {
              $rt->fields[4] = "0" . $rt->fields[4];
          }
          if (substr($rt->fields[4], 0, 2) == "-.") 
          {
              $rt->fields[4] = "-0" . substr($rt->fields[4], 1);
          }
          nmgp_Trunc_Num($rt->fields[4], 2);
          $str_tot = "array_total_" . $cmp_tot;
          if (!isset($this->$str_tot))
          {
              $this->$str_tot = array();
          }
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[0]";
          eval ('$this->' . $str_tot . ' = ' . $rt->fields[0] . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[1]";
          eval('$this->' . $str_tot . ' = ' . $rt->fields[4] . ';');
          $str_grf = "val_grafico_" . $cmp_tot;
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[5]";
          eval ('$this->' . $str_tot . ' = $' . $str_grf . ';');
          $str_tot = "array_total_" . $cmp_tot . $arr_tots . "[6]";
          $str_org = $cmp_tot . "_orig";
          eval ('$this->' . $str_tot . ' = $' . $str_org . ';');
          eval ('ksort($this->array_total_' . $cmp_tot . $arr_tots . ');');
          $rt->MoveNext();
      }
      $rt->Close();
   }
   //---- 
   function quebra_geral_Inicial($res_limit=false, $res_export=false)
   {
      global $nada, $nm_lang , $fac_tipo_comprobante;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'] = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $rt->fields[1] = (string)$rt->fields[1]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'][2] = $rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $rt->fields[2] = (string)$rt->fields[2]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'][3] = $rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $rt->fields[3] = (string)$rt->fields[3]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'][4] = $rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $rt->fields[4] = (string)$rt->fields[4]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['tot_geral'][5] = $rt->fields[4]; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['contr_total_geral'] = "OK";
   } 

   //-----  pro_descripcion
   function quebra_pro_descripcion_Inicial($pro_descripcion, $arg_sum_pro_descripcion) 
   {
      global $tot_pro_descripcion, $fac_tipo_comprobante;
      $tot_pro_descripcion = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq'])) 
      { 
         $nm_comando .= " where pro_descripcion" . $arg_sum_pro_descripcion ; 
      } 
      else 
      { 
         $nm_comando .= " and pro_descripcion" . $arg_sum_pro_descripcion ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_pro_descripcion[0] = NM_encode_input(sc_strip_script($pro_descripcion));
      }
      else {
          $tot_pro_descripcion[0] = sc_strip_script($pro_descripcion) ; 
      }
      $tot_pro_descripcion[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_pro_descripcion[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_pro_descripcion[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_pro_descripcion[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_pro_descripcion[5] = (string)$rt->fields[4]; 
      $rt->Close(); 
   } 

   //-----  fac_tipo_comprobante
   function quebra_fac_tipo_comprobante_Inicial($pro_descripcion, $fac_tipo_comprobante, $arg_sum_pro_descripcion, $arg_sum_fac_tipo_comprobante) 
   {
      global $tot_fac_tipo_comprobante, $fac_tipo_comprobante;
      $tot_fac_tipo_comprobante = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq'])) 
      { 
         $nm_comando .= " where pro_descripcion" . $arg_sum_pro_descripcion . " and fac_tipo_comprobante" . $arg_sum_fac_tipo_comprobante ; 
      } 
      else 
      { 
         $nm_comando .= " and pro_descripcion" . $arg_sum_pro_descripcion . " and fac_tipo_comprobante" . $arg_sum_fac_tipo_comprobante ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_fac_tipo_comprobante[0] = NM_encode_input(sc_strip_script($fac_tipo_comprobante));
      }
      else {
          $tot_fac_tipo_comprobante[0] = sc_strip_script($fac_tipo_comprobante) ; 
      }
      $tot_fac_tipo_comprobante[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_fac_tipo_comprobante[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_fac_tipo_comprobante[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_fac_tipo_comprobante[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_fac_tipo_comprobante[5] = (string)$rt->fields[4]; 
      $rt->Close(); 
   } 

   //-----  fac_serie
   function quebra_fac_serie_Inicial($pro_descripcion, $fac_tipo_comprobante, $fac_serie, $arg_sum_pro_descripcion, $arg_sum_fac_tipo_comprobante, $arg_sum_fac_serie) 
   {
      global $tot_fac_serie, $fac_tipo_comprobante;
      $tot_fac_serie = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq'])) 
      { 
         $nm_comando .= " where pro_descripcion" . $arg_sum_pro_descripcion . " and fac_tipo_comprobante" . $arg_sum_fac_tipo_comprobante . " and fac_serie" . $arg_sum_fac_serie ; 
      } 
      else 
      { 
         $nm_comando .= " and pro_descripcion" . $arg_sum_pro_descripcion . " and fac_tipo_comprobante" . $arg_sum_fac_tipo_comprobante . " and fac_serie" . $arg_sum_fac_serie ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_fac_serie[0] = NM_encode_input(sc_strip_script($fac_serie));
      }
      else {
          $tot_fac_serie[0] = sc_strip_script($fac_serie) ; 
      }
      $tot_fac_serie[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_fac_serie[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_fac_serie[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_fac_serie[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_fac_serie[5] = (string)$rt->fields[4]; 
      $rt->Close(); 
   } 

   //-----  concepto_factura
   function quebra_concepto_factura_Inicial($pro_descripcion, $fac_tipo_comprobante, $fac_serie, $concepto_factura, $arg_sum_pro_descripcion, $arg_sum_fac_tipo_comprobante, $arg_sum_fac_serie, $arg_sum_concepto_factura) 
   {
      global $tot_concepto_factura, $fac_tipo_comprobante;
      $tot_concepto_factura = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(df_subtotal), sum(df_descuento), sum(df_valor_iva), sum(df_total) from " . $this->Ini->nm_tabela . " " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['where_pesq'])) 
      { 
         $nm_comando .= " where pro_descripcion" . $arg_sum_pro_descripcion . " and fac_tipo_comprobante" . $arg_sum_fac_tipo_comprobante . " and fac_serie" . $arg_sum_fac_serie . " and concepto_factura" . $arg_sum_concepto_factura ; 
      } 
      else 
      { 
         $nm_comando .= " and pro_descripcion" . $arg_sum_pro_descripcion . " and fac_tipo_comprobante" . $arg_sum_fac_tipo_comprobante . " and fac_serie" . $arg_sum_fac_serie . " and concepto_factura" . $arg_sum_concepto_factura ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_v_del_resumen_facturacion_diaria']['opcao'] == "pdf" && isset($_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content']) && $_SESSION['nm_session']['sys_wkhtmltopdf_show_html_content'] == 'Y') {
          $tot_concepto_factura[0] = NM_encode_input(sc_strip_script($concepto_factura));
      }
      else {
          $tot_concepto_factura[0] = sc_strip_script($concepto_factura) ; 
      }
      $tot_concepto_factura[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_concepto_factura[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_concepto_factura[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_concepto_factura[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_concepto_factura[5] = (string)$rt->fields[4]; 
      $rt->Close(); 
   } 

   function Ajust_statistic($comando)
   {
      if ((isset($this->Ini->nm_bases_vfp) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_vfp)) || (isset($this->Ini->nm_bases_odbc) && in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_odbc)))
      {
          $comando = str_replace(array('count(distinct ','varp(','stdevp(','variance(','stddev('), array('sum(','sum(','sum(','sum(','sum('), $comando);
      }
      if ($this->Ini->nm_tp_variance == "P")
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $comando = str_replace(array('count(distinct ','varp(','stdevp('), array('count(','var(','stdev('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite) && $this->Ini->sqlite_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) && $this->Ini->Ibase_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          {
                  $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_pop(','stddev_pop('), $comando);
          }
      }
      if ($this->Ini->nm_tp_variance == "A")
      {
          if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_access))
          { 
              $comando = str_replace(array('count(distinct ','varp(','stdevp('), array('count(','var(','stdev('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sqlite) && $this->Ini->sqlite_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mysql))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_postgres))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase) && $this->Ini->Ibase_version == "old")
          {
              $comando = str_replace(array('variance(','stddev('), array('sum(','sum('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_ibase))
          {
                  $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_oracle))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
          { 
              $comando = str_replace(array('varp(','stdevp('), array('var(','stdev('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_informix))
          {
              $comando = str_replace('stddev(', 'stdev(', $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_db2))
          {
              $comando = str_replace(array('variance(','stddev('), array('variance_samp(','stddev_samp('), $comando);
          }
          elseif (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_sybase))
          {
              $comando = str_replace(array('variance(','stddev('), array('var_samp(','stddev_samp('), $comando);
          }
      }
      return $comando;
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
}

?>
