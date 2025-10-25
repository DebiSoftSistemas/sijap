<?php
class grid_jap_solicitud_procesada_usuario_lookup
{
//  
   function lookup_jap_solicitud_inspeccion_si_contrato(&$conteudo , $jap_solicitud_inspeccion_si_contrato) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $jap_solicitud_inspeccion_si_contrato; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($jap_solicitud_inspeccion_si_contrato) === "" || trim($jap_solicitud_inspeccion_si_contrato) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select con_nombre|| ' - Contrato Nro. ' || con_condicion_contrato || coalesce(' - Nro. Censo:'||con_numero_censo,'') from v_jap_contrato where con_id = $jap_solicitud_inspeccion_si_contrato order by con_nombre, con_condicion_contrato" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_jap_solicitud_inspeccion_si_tipo_inspeccion(&$conteudo , $jap_solicitud_inspeccion_si_tipo_inspeccion) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $jap_solicitud_inspeccion_si_tipo_inspeccion; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($jap_solicitud_inspeccion_si_tipo_inspeccion) === "" || trim($jap_solicitud_inspeccion_si_tipo_inspeccion) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select ti_descripcion from jap_tipo_inspeccion where ti_id = $jap_solicitud_inspeccion_si_tipo_inspeccion order by ti_descripcion" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
//  
   function lookup_contrato_jap_solicitud_inspeccion_si_contrato(&$conteudo , $jap_solicitud_inspeccion_si_contrato) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $jap_solicitud_inspeccion_si_contrato; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($jap_solicitud_inspeccion_si_contrato) === "" || trim($jap_solicitud_inspeccion_si_contrato) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select coalesce('Nro. Contrato:'|| con_numero_contrato,'') ||
       coalesce(' - Nro. Censo:'||con_numero_censo,'')|| 
       coalesce(' - Nro. Medidor:'||con_numero_medidor,'') || 
       coalesce(' - Tipo de Servicio:'|| ts_descripcion,'') || 
       coalesce(' - Condición del Contrato:'|| cc_descripcion,'') from jap_contrato
inner join jap_tipo_servicio on con_tipo_servicio = ts_id 
inner join jap_condicion_contrato on con_condicion_contrato=cc_id where con_id = $jap_solicitud_inspeccion_si_contrato order by con_numero_contrato, con_numero_medidor" ; 
      $conteudo = "" ; 
      $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando; 
      $_SESSION['scriptcase']['sc_sql_ult_conexao'] = ''; 
      if ($rx = $this->Db->Execute($nm_comando)) 
      { 
          if (isset($rx->fields[0]))  
          { 
              $conteudo = $rx->fields[0]; 
          } 
          $save_conteudo1 = $conteudo ; 
          $rx->Close(); 
      } 
      elseif ($GLOBALS["NM_ERRO_IBASE"] != 1)  
      { 
          $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
          exit; 
      } 
      if ($conteudo === "") 
      { 
          $conteudo = "&nbsp;";
          $save_conteudo1 = $conteudo ; 
      } 
   }  
}
?>
