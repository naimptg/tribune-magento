<?php
        $host = "store.baltimoresun.com"; //our online shop url
        $client = new SoapClient("http://".$host."/api/v2_soap/?wsdl=1", array('cache_wsdl' => WSDL_CACHE_NONE)); //soap handle
        $apiuser= '<user name here>'; //webservice user login
        $apikey = '<password here>'; //webservice user pass
       
        try { 

        echo  $session= $client->login($apiuser, $apikey); //we do login
		
            //Add your vendor ID of magento store to get your orders only 
            $vendorids='<vendorID>' ;
			
			$params = array(array(
            'filter' => array(
                array(
                    'key' => 'status',
                    'value' => 'pending'
                )
                
            ),

        ));

				$orderList = $client->salesOrderList($session,$filter);
        }
        catch (Exception $e) { //while an error has occured
            echo "==> Error: ".$e->getMessage(); //we print this
               exit();
        }
?>
