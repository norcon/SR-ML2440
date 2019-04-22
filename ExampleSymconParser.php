<? 

 //  Ausgabedatei auslesen und auswerten 

 $datei = 'C:\Program Files (x86)\Solar Station Monitor\Laderegler\1.csv';  //hier den Dateinamen anpassen 
  

      $array = file ( $datei );    // Datei einlesen 
      $daten = end ($array);       // letzen Satz übernehmen 
      $elemente = explode(",", $daten);  // letzen Satz in einzelne Elemente aufteilen 
        
		$battCurrent =  "$elemente[12],$elemente[13]";
		//echo $battCurrent;
		SetValueFloat(57487, $battCurrent);
				
		$battVolt =  "$elemente[9],$elemente[10]";
		//echo $battVolt;
		SetValueFloat(34322, $battVolt);
			
		$battTemp =  "$elemente[11]";
		//echo $battTemp;
		SetValueFloat(35436, $battTemp);
		
		$Modus =  "$elemente[8]";
		//echo $Modus;
		SetValueString(27620, $Modus);
		
		$SolarWatt =  "$elemente[7]";
		//echo $SolarWatt;
		SetValueFloat(55116, $SolarWatt);
		
		$SolarVolt =  "$elemente[5],$elemente[6]";
		//echo $SolarVolt;
		SetValueFloat(48487, $SolarVolt);
	  
	  	$SolarAmpere =  "$elemente[3],$elemente[4]";
		//echo $SolarAmpere;
		SetValueFloat(20902, $SolarAmpere);
		
		$BattSOC =  "$elemente[14]";
		//echo $BattSOC;
		SetValueInteger(32628, $BattSOC);
		
		$TempDevice =  "$elemente[20]";
		//echo $TempDevice;
		SetValueFloat(10435, $TempDevice);
		
		$BatterieStatus =  "$elemente[22]";
		//echo $BatterieStatus;
		SetValueString(50828, $BatterieStatus);
		
		$Arbeitsstatus =  "$elemente[23]";
		//echo $Arbeitsstatus;
		SetValueString(55648, $Arbeitsstatus);
		
		$unbekannt =  "$elemente[21]";
		//echo $unbekannt;
		SetValueString(33670, $unbekannt);
		
		
?>
