<?php  

	# Incluindo os arquivos necessários
	include_once dirname(__DIR__)."/models/config.php";
	include_once $project_path."/models/connect.php";
	include_once $project_path."/models/manager.php";
	
	# Recebendo os dados do Formulário
	$email = $_POST['email'];
	$password = $_POST['password'];

	# Realizando a busca no Banco de Dados
	$filter['user_email'] = $email;
	$log = select("tb_users", NULL, $filter, " LIMIT 1");
	
	# Testando o login
	if(!$log){
		header("location: $project_index?error=user_not_found");
	}elseif(!password_verify($password, $log[0]['user_password'])){
		header("location: $project_index?error=password_incorrect");
	}else{
	    
	    if(getenv('HTTP_CLIENT_IP')){
	        $ip = getenv('HTTP_CLIENT_IP');
	    }elseif(getenv('HTTP_X_FORWARDED_FOR')){
	        $ip = getenv('HTTP_X_FORWARDED_FOR');
	    }elseif(getenv('HTTP_X_FORWARDED')){
	        $ip = getenv('HTTP_X_FORWARDED');
	    }elseif(getenv('HTTP_FORWARDED_FOR')){
	        $ip = getenv('HTTP_FORWARDED_FOR');
	    }elseif(getenv('HTTP_FORWARDED')){
	        $ip = getenv('HTTP_FORWARDED');
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    # Recebendo os dados do formulário
	    $data[] = $ip;
	    
	    
	    /*
        This file is free software: you can redistribute it and/or modify
        the code under the terms of the GNU General Public License as published by
        the Free Software Foundation, either version 3 of the License, or
        (at your option) any later version. 
        
        However, the license header, copyright and author credits 
        must not be modified in any form and always be displayed.
        
        This class is distributed in the hope that it will be useful,
        but WITHOUT ANY WARRANTY; without even the implied warranty of
        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
        GNU General Public License for more details.
        
        @author geoPlugin (gp_support@geoplugin.com)
        @copyright Copyright geoPlugin (gp_support@geoplugin.com)
        
        This file is an example PHP file of the geoplugin class
        to geolocate IP addresses using the free PHP Webservices of
        http://www.geoplugin.com/
        
        */
        
        require_once $project_path."/geoplugin.class/geoplugin.class.php";
        
        $geoplugin = new geoPlugin();
        
        /* 
        Notes:
        
        The default base currency is USD (see http://www.geoplugin.com/webservices:currency ).
        You can change this before the call to geoPlugin::locate with eg:
        $geoplugin->currency = 'EUR';
        
        The default IP to lookup is $_SERVER['REMOTE_ADDR']
        You can lookup a specific IP address, by entering the IP in the call to geoPlugin::locate
        eg
        $geoplugin->locate('209.85.171.100');
        
        The default language is English 'en'
        supported languages:
        de (German)
        en (English - default)
        es (Spanish)
        fr (French)
        ja (Japanese)
        pt-BR (Portugese, Brazil)
        ru (Russian)
        zh-CN (Chinese, Zn)
        
        To change the language to e.g. Japanese, use:
        $geoplugin->lang = 'ja';
        */
      
        
        //locate the IP
        $geoplugin->locate();
        
        $data[] = "Geolocation results for {$geoplugin->ip}: <br />\n".
        	"City: {$geoplugin->city} <br />\n".
        	"Region: {$geoplugin->region} <br />\n".
        	"Region Code: {$geoplugin->regionCode} <br />\n".
        	"Region Name: {$geoplugin->regionName} <br />\n".
        	"DMA Code: {$geoplugin->dmaCode} <br />\n".
        	"Country Name: {$geoplugin->countryName} <br />\n".
        	"Country Code: {$geoplugin->countryCode} <br />\n".
        	"In the EU?: {$geoplugin->inEU} <br />\n".
        	"EU VAT Rate: {$geoplugin->euVATrate} <br />\n".
        	"Latitude: {$geoplugin->latitude} <br />\n".
        	"Longitude: {$geoplugin->longitude} <br />\n".
        	"Radius of Accuracy (Miles): {$geoplugin->locationAccuracyRadius} <br />\n".
        	"Timezone: {$geoplugin->timezone} <br />\n".
        	"Currency Code: {$geoplugin->currencyCode} <br />\n".
        	"Currency Symbol: {$geoplugin->currencySymbol} <br />\n".
        	"Exchange Rate: {$geoplugin->currencyConverter} <br />\n";
        
        /*
        How to use the in-built currency converter
        geoPlugin::convert accepts 3 parameters
        $amount - amount to convert (required)
        $float - the number of decimal places to round to (default: 2)
        $symbol - whether to display the geolocated currency symbol in the output (default: true)
        */
        if ( $geoplugin->currency != $geoplugin->currencyCode ) {
        	//our visitor is not using the same currency as the base currency
        	$data[] = "<p>At todays rate, US$100 will cost you " . $geoplugin->convert(100) ." </p>\n";
        }
        
        /* Finding places nearby 
        nearby($radius, $maxresults)
        $radius (optional: default 10)
        $maxresults (optional: default 5)
        */
        $nearby = $geoplugin->nearby();
        
        if ( isset($nearby[0]['geoplugin_place']) ) {
        
        	$data[] = "<pre><p>Some places you may wish to visit near " . $geoplugin->city . ": </p>\n";
        
        	foreach ( $nearby as $key => $array ) {
        		
        		$data[] = ($key + 1) .":<br />";
        		$data[] = "\t Place: " . $array['geoplugin_place'] . "<br />";
        		$data[] = "\t Region: " . $array['geoplugin_region'] . "<br />";
        		$data[] = "\t Latitude: " . $array['geoplugin_latitude'] . "<br />";
        		$data[] = "\t Longitude: " . $array['geoplugin_longitude'] . "<br />";
        	}
        	$data[] = "</pre>\n";
        }

	    

		# Como está tudo ok, então faça...
		session_start();
		$profile = select("tb_profiles", NULL, array("id_profile"=>$log[0]['profile_id']), NULL);

		# Unificar os array de dados de perfil com o de user
		$log = array_merge($log[0], $profile[0]);

		$_SESSION[md5('user_data')] = $log;
		
		# Gravando os dados no banco
	    insertlocation("ingresos_usuario", $data);

		header("location: $project_index");

	}


?>