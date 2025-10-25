<?php

class grid_corte_inventario_total
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
      if (isset($_SESSION['sc_session'][$this->sc_page]['grid_corte_inventario']['campos_busca']) && !empty($_SESSION['sc_session'][$this->sc_page]['grid_corte_inventario']['campos_busca']))
      { 
          $Busca_temp = $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['campos_busca'];
          if ($_SESSION['scriptcase']['charset'] != "UTF-8")
          {
              $Busca_temp = NM_conv_charset($Busca_temp, $_SESSION['scriptcase']['charset'], "UTF-8");
          }
          $this->kar_bodega = (isset($Busca_temp['kar_bodega'])) ? $Busca_temp['kar_bodega'] : ""; 
          $tmp_pos = (is_string($this->kar_bodega)) ? strpos($this->kar_bodega, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->kar_bodega))
          {
              $this->kar_bodega = substr($this->kar_bodega, 0, $tmp_pos);
          }
          $this->pro_codigo = (isset($Busca_temp['pro_codigo'])) ? $Busca_temp['pro_codigo'] : ""; 
          $tmp_pos = (is_string($this->pro_codigo)) ? strpos($this->pro_codigo, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pro_codigo))
          {
              $this->pro_codigo = substr($this->pro_codigo, 0, $tmp_pos);
          }
          $this->pro_descripcion = (isset($Busca_temp['pro_descripcion'])) ? $Busca_temp['pro_descripcion'] : ""; 
          $tmp_pos = (is_string($this->pro_descripcion)) ? strpos($this->pro_descripcion, "##@@") : false;
          if ($tmp_pos !== false && !is_array($this->pro_descripcion))
          {
              $this->pro_descripcion = substr($this->pro_descripcion, 0, $tmp_pos);
          }
      } 
   }

   //---- 
   function quebra_geral_kar_bodega($res_limit=false, $res_export=false)
   {
      global $nada, $nm_lang , $kar_unidad, $kar_bodega;
      if ($_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['contr_total_geral'] == "OK") 
      { 
          return; 
      } 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'] = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(cant_inicial), sum(valor_inicial), sum(total_ingreso), sum(valor_ingreso), sum(total_salida), sum(valor_salida), sum(cant_existencia), sum(valor_existencia) from (SELECT          kar_bodega,          pro_codigo,         pro_descripcion,         coalesce((SELECT sum(kar_cantidad_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_ingreso,         coalesce((SELECT sum(kar_cantidad_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_salida,         coalesce((SELECT sum(kar_total_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_ingreso,         coalesce((SELECT sum(kar_total_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_salida,          kar_unidad,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_inicial,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_inicial,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_existencia,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_existencia      FROM inv_inventario left join v_del_movimientos_kardex m on inv_producto=kar_producto and inv_bodega = kar_bodega  WHERE  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'  group by m.kar_bodega, m.pro_codigo,m.pro_descripcion,m.kar_unidad) nm_sel_esp " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(cant_inicial), sum(valor_inicial), sum(total_ingreso), sum(valor_ingreso), sum(total_salida), sum(valor_salida), sum(cant_existencia), sum(valor_existencia) from (SELECT          kar_bodega,          pro_codigo,         pro_descripcion,         coalesce((SELECT sum(kar_cantidad_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_ingreso,         coalesce((SELECT sum(kar_cantidad_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_salida,         coalesce((SELECT sum(kar_total_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_ingreso,         coalesce((SELECT sum(kar_total_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_salida,          kar_unidad,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_inicial,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_inicial,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_existencia,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_existencia      FROM inv_inventario left join v_del_movimientos_kardex m on inv_producto=kar_producto and inv_bodega = kar_bodega  WHERE  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'  group by m.kar_bodega, m.pro_codigo,m.pro_descripcion,m.kar_unidad) nm_sel_esp " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['where_pesq']; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][0] = "" . $this->Ini->Nm_lang['lang_msgs_totl'] . ""; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $rt->fields[1] = (string)$rt->fields[1]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][2] = $rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $rt->fields[2] = (string)$rt->fields[2]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][3] = $rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $rt->fields[3] = (string)$rt->fields[3]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][4] = $rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $rt->fields[4] = (string)$rt->fields[4]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][5] = $rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $rt->fields[5] = (string)$rt->fields[5]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][6] = $rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $rt->fields[6] = (string)$rt->fields[6]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][7] = $rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $rt->fields[7] = (string)$rt->fields[7]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][8] = $rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $rt->fields[8] = (string)$rt->fields[8]; 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['tot_geral'][9] = $rt->fields[8]; 
      $rt->Close(); 
      $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['contr_total_geral'] = "OK";
   } 

   //-----  kar_bodega
   function quebra_kar_bodega_kar_bodega($kar_bodega, $arg_sum_kar_bodega) 
   {
      global $tot_kar_bodega, $kar_unidad, $kar_bodega;
      $tot_kar_bodega = array() ;  
      if (in_array(strtolower($this->Ini->nm_tpbanco), $this->Ini->nm_bases_mssql))
      { 
          $nm_comando = "select count(*), sum(cant_inicial), sum(valor_inicial), sum(total_ingreso), sum(valor_ingreso), sum(total_salida), sum(valor_salida), sum(cant_existencia), sum(valor_existencia) from (SELECT          kar_bodega,          pro_codigo,         pro_descripcion,         coalesce((SELECT sum(kar_cantidad_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_ingreso,         coalesce((SELECT sum(kar_cantidad_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_salida,         coalesce((SELECT sum(kar_total_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_ingreso,         coalesce((SELECT sum(kar_total_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_salida,          kar_unidad,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_inicial,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_inicial,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_existencia,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_existencia      FROM inv_inventario left join v_del_movimientos_kardex m on inv_producto=kar_producto and inv_bodega = kar_bodega  WHERE  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'  group by m.kar_bodega, m.pro_codigo,m.pro_descripcion,m.kar_unidad) nm_sel_esp " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['where_pesq']; 
      } 
      else 
      { 
          $nm_comando = "select count(*), sum(cant_inicial), sum(valor_inicial), sum(total_ingreso), sum(valor_ingreso), sum(total_salida), sum(valor_salida), sum(cant_existencia), sum(valor_existencia) from (SELECT          kar_bodega,          pro_codigo,         pro_descripcion,         coalesce((SELECT sum(kar_cantidad_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_ingreso,         coalesce((SELECT sum(kar_cantidad_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as total_salida,         coalesce((SELECT sum(kar_total_ingreso) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_ingreso,         coalesce((SELECT sum(kar_total_salida) from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha between '" . $_SESSION['var_fecha_desde'] . "' and '" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo),0) as valor_salida,          kar_unidad,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_inicial,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "' and           kar_fecha<'" . $_SESSION['var_fecha_desde'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_inicial,         (select coalesce(sum(kar_cantidad_ingreso-kar_cantidad_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as cant_existencia,         (select coalesce(sum(kar_total_ingreso-kar_total_salida),0)           from v_del_movimientos_kardex a where kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'           and kar_fecha<='" . $_SESSION['var_fecha_hasta'] . "' and a.pro_codigo=m.pro_codigo group by a.pro_codigo) as valor_existencia      FROM inv_inventario left join v_del_movimientos_kardex m on inv_producto=kar_producto and inv_bodega = kar_bodega  WHERE  kar_empresa = '" . $_SESSION['Igtech_RucEmpresa'] . "'  group by m.kar_bodega, m.pro_codigo,m.pro_descripcion,m.kar_unidad) nm_sel_esp " . $_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['where_pesq']; 
      } 
      if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['grid_corte_inventario']['where_pesq'])) 
      { 
         $nm_comando .= " where kar_bodega" . $arg_sum_kar_bodega ; 
      } 
      else 
      { 
         $nm_comando .= " and kar_bodega" . $arg_sum_kar_bodega ; 
      } 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
      if (!$rt = $this->Db->Execute($nm_comando)) 
      { 
         $this->Erro->mensagem (__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
         exit ; 
      }  
      $tot_kar_bodega[0] = NM_encode_input(sc_strip_script($kar_bodega)) ; 
      $tot_kar_bodega[1] = $rt->fields[0] ; 
      $rt->fields[1] = str_replace(",", ".", $rt->fields[1]);
      $tot_kar_bodega[2] = (string)$rt->fields[1]; 
      $rt->fields[2] = str_replace(",", ".", $rt->fields[2]);
      $tot_kar_bodega[3] = (string)$rt->fields[2]; 
      $rt->fields[3] = str_replace(",", ".", $rt->fields[3]);
      $tot_kar_bodega[4] = (string)$rt->fields[3]; 
      $rt->fields[4] = str_replace(",", ".", $rt->fields[4]);
      $tot_kar_bodega[5] = (string)$rt->fields[4]; 
      $rt->fields[5] = str_replace(",", ".", $rt->fields[5]);
      $tot_kar_bodega[6] = (string)$rt->fields[5]; 
      $rt->fields[6] = str_replace(",", ".", $rt->fields[6]);
      $tot_kar_bodega[7] = (string)$rt->fields[6]; 
      $rt->fields[7] = str_replace(",", ".", $rt->fields[7]);
      $tot_kar_bodega[8] = (string)$rt->fields[7]; 
      $rt->fields[8] = str_replace(",", ".", $rt->fields[8]);
      $tot_kar_bodega[9] = (string)$rt->fields[8]; 
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
