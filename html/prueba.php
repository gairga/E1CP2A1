<?php

function SeparaMayusculas($str){

	$expresion=preg_match_all('/[\A-Z\.]/', $str, $matches, PREG_OFFSET_CAPTURE);

	$replacement=" ";
	$switch=1;
	 $i=0;
	foreach ($matches as $key => $positions	) {
		foreach ($positions as $key => $value) {
			if($value[1]!=0){			
				if($switch==1){	
					$posicion=$value[1];
				}else{
					$i=$i+1;
					$posicion=$value[1]+$i;
				}
				$text=substr_replace($str, ' ',$posicion, 0) . "<br />\n";
				$str=$text;
	            $switch=$switch+1;
			}
		}
	}

	return $text;
}


$str="ElSoftwareLibreConstruyeUnaSociedadMejor”";
echo SeparaMayusculas($str);
?>