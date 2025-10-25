<?php
class grid_fac_operacion_descuento_lookup
{
//  
   function lookup_contrato_op_contrato(&$conteudo , $op_contrato) 
   {   
      static $save_conteudo = "" ; 
      static $save_conteudo1 = "" ; 
      $tst_cache = $op_contrato; 
      if ($tst_cache === $save_conteudo && $conteudo != "&nbsp;") 
      { 
          $conteudo = $save_conteudo1 ; 
          return ; 
      } 
      $save_conteudo = $tst_cache ; 
      if (trim($op_contrato) === "" || trim($op_contrato) == "&nbsp;")
      { 
          $conteudo = "&nbsp;";
          $save_conteudo  = ""; 
          $save_conteudo1 = ""; 
          return ; 
      } 
      $nm_comando = "select 'Nro. Contrato:'|| con_numero_contrato || ' - Nro. Medidor:'||con_numero_medidor || ' - Tipo de Servicio:'|| ts_descripcion || ' - Condición del Contrato:'|| cc_descripcion from jap_contrato
inner join jap_tipo_servicio on con_tipo_servicio = ts_id 
inner join jap_condicion_contrato on con_condicion_contrato=cc_id where con_id = $op_contrato order by con_numero_contrato, con_numero_medidor" ; 
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
