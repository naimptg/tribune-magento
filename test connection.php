<?php
    ini_set('display_errors', 1);
    ini_set("default_socket_timeout", 6000);


    $wsdl_path = 'http://store.baltimoresun.com/api/v2_soap/?wsdl';
    $username = '<user name here>';
    $userpassword = '<password here>';

   echo $wsdl_path . "\n";

	try {
		//Now to set the SoapClient using the wsdl path. 
    	$proxy = new SoapClient($wsdl_path); 
    	
    
        echo $sessioinId= $proxy->login($apiUser, $apiKey) . "\n"; 
        
        // if the Wsdl, username, and passwords are correct, you should see the following
        // line of text. Otherwise, the exception will catch the error and display the error 
        // messages.
        echo "Success\n";
      
    die;

        print_r($prixy->call($sessionId, $action));
        }
        catch (Exception $e) { //while an error has occured
            echo "==> Error: ".$e->getMessage() . "\n"; //we print this
               exit();
        }
            
?>