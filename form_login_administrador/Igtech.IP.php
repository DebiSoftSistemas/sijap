<?php
//__NM____NM__FUNCTION__NM__//
//__NM__Manejo de IP__NM__FUNCTION__NM__//
	
	class IgtechIP
    {
		
		var $Router;
		var $ServidorWEB;
		var $ClientePC;
		
		function IgtechIP()
			{
				$this->Router=$_SERVER['REMOTE_ADDR'];
				$this->ServidorWEB=$_SERVER['SERVER_ADDR'];
				$this->ClientePC=$this->getRealIP();
			}

		function validarIP($ip) 
		{ 
			$val_0_to_255 = "(25[01234]|2[01234]\d|[01]?\d\d?)"; 
			$reg = "#^($val_0_to_255\.$val_0_to_255\.$val_0_to_255\.$val_0_to_255)$#"; 
			return preg_match($reg, $ip, $matches); 
		} 
		
		function comparaIP($mascar,$ip)
		{
			list($IP1Oct, $IP2Oct, $IP3Oct, $IP4Oct) = explode(".", $ip);
			list($IP1Masc, $IP2Masc, $IP3Masc, $IP4Masc) = explode(":", $mascara);
			

			if($IP1Masc==$IP1Oct && $IP1Masc!="*")
				{
					return "Mascara de confirmacion Errada";
				}
			if($IP2Masc==$IP2Oct && $IP2Masc!="*")
				{
					return "Mascara de confirmacion Errada";
				}
			if($IP3Masc==$IP3Oct && $IP3Masc!="*")
				{
					return "Mascara de confirmacion Errada";
				}
			if($IP4Masc==$IP4Oct && $IP4Masc!="*")
				{
					return "Mascara de confirmacion Errada";
				}
		}
		
		function getRealIP()
		{
		 
		   if( $_SERVER['HTTP_X_FORWARDED_FOR'] != '' )
		   {
			  $client_ip = 
				 ( !empty($_SERVER['REMOTE_ADDR']) ) ? 
					$_SERVER['REMOTE_ADDR'] 
					: 
					( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
					   $_ENV['REMOTE_ADDR'] 
					   : 
					   "unknown" );
		 
			  // los proxys van añadiendo al final de esta cabecera
			  // las direcciones ip que van "ocultando". Para localizar la ip real
			  // del usuario se comienza a mirar por el principio hasta encontrar 
			  // una dirección ip que no sea del rango privado. En caso de no 
			  // encontrarse ninguna se toma como valor el REMOTE_ADDR
		 
			  $entries = preg_split('/[, ]/', $_SERVER['HTTP_X_FORWARDED_FOR']);
		 
			  reset($entries);
			  while (list(, $entry) = each($entries)) 
			  {
				 $entry = trim($entry);
				 if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
				 {
					// http://www.faqs.org/rfcs/rfc1918.html
					$private_ip = array(
						  '/^0\./', 
						  '/^127\.0\.0\.1/', 
						  '/^192\.168\..*/', 
						  '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/', 
						  '/^10\..*/');
		 
					$found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);
		 
					if ($client_ip != $found_ip)
					{
					   $client_ip = $found_ip;
					   break;
					}
				 }
			  }
		   }
		   else
		   {
			  $client_ip = 
				 ( !empty($_SERVER['REMOTE_ADDR']) ) ? 
					$_SERVER['REMOTE_ADDR'] 
					: 
					( ( !empty($_ENV['REMOTE_ADDR']) ) ? 
					   $_ENV['REMOTE_ADDR'] 
					   : 
					   "unknown" );
		   }
		 
		   return $client_ip;
		 
		}
}
?>