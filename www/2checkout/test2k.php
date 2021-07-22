<?php
 
	// echo $_GET['refno'];
	$host   = "https://api.2checkout.com";
	$client = new SoapClient($host . "/soap/3.0/?wsdl", array(
	    'location' => $host . "/soap/3.0/",
	    "stream_context" => stream_context_create(array(
	        'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false
	        )
	    ))
	));

	function hmac($key, $data)
	{
	    $b = 64; // byte length for md5
	    if (strlen($key) > $b) {
	        $key = pack("H*", md5($key));
	    }
	    
	    $key    = str_pad($key, $b, chr(0x00));
	    $ipad   = str_pad('', $b, chr(0x36));
	    $opad   = str_pad('', $b, chr(0x5c));
	    $k_ipad = $key ^ $ipad;
	    $k_opad = $key ^ $opad;
	    return md5($k_opad . pack("H*", md5($k_ipad . $data)));
	}
	$merchantCode = "251079116805";// your account's merchant code available in the 'System settings' area of the cPanel: https://secure.2checkout.com/cpanel/account_settings.php
	$key = "~B#[0)+XLh(xKg8C?UN%";// your account's secret key available in the 'System settings' area of the cPanel: https://secure.2checkout.com/cpanel/account_settings.php
	$now          = gmdate('Y-m-d H:i:s'); //date_default_timezone_set('UTC')
	$string = strlen($merchantCode) . $merchantCode . strlen($now) . $now;
	$hash   = hmac($key, $string);

	try {
		// echo "Ashiii";
	    $sessionID = $client->login($merchantCode, $now, $hash);
	}
	catch (SoapFault $e) {
		echo "Asha";

	    echo "Authentication: " . $e->getMessage();
	    exit;
	}
	// $SubscriptionReferenceTest = 'J6ZSBMXYW4';
	// try {
	//     $retrievedSubscription = $client->getSubscription($sessionID, $SubscriptionReferenceTest);
	// }
	// catch (SoapFault $e) {
	//     echo "retrievedSubscription: " . $e->getMessage();
	//     exit;
	// }
	// var_dump("retrievedSubscription", $retrievedSubscription);
	// var_dump ($retrievedSubscription);
	// $retrievedSubscription->RecurringEnabled = false;
	// $retrievedSubscription->SuscriptionEnabled = false;
	// $retrievedSubscription->ExpirationDate = '202-06-10';
	// try {
	//     $updatedSubscription = $client->updateSubscription($sessionID, $retrievedSubscription);
	// }
	// catch (SoapFault $e) {
	//     echo "updatedSubscription: " . $e->getMessage();
	//     exit;
	// }

	try {
	    $getOrder = $client->getOrder($sessionID, $_GET['refno']);
	    $age = (array)$getOrder;
		$items=$age['Items'][0];
		// echo "string";
	    $subscriptionInfo = $client->getSubscription($sessionID, $items->ProductDetails->Subscriptions[0]->SubscriptionReference);
	} catch (SoapFault $e) {
	    echo "getOrder: " . $e->getMessage() ;
	}
	// print_r($items->ProductDetails->Subscriptions[0]);
	// $role=array('gallery','artist','curator','user')
	// $user=array('role'=>'gallery');
	// echo $subscriptionInfo->SubscriptionEnabled;
	if($_GET['type']=='gallery' && $subscriptionInfo->SubscriptionEnabled==true)
		echo "Dear ".$_GET['name'].", you are Allowed to view Gallery!!";
	elseif($_GET['type']=='artist' && $subscriptionInfo->SubscriptionEnabled==true)
		echo $_GET['name'].", Allowed for Artist";
	elseif($_GET['type']=='curator' && $subscriptionInfo->SubscriptionEnabled==true)
		echo $_GET['name']." Allowed for Curator";
	else
		echo "Not Allowed for Gallery";

	Redirect('http://3.108.99.134/2checkout/pricing.html', true);
	header("Location: http://3.108.99.134/2checkout/pricing.html");
	exit();
	// var_dump("accountSubscriptions", $accountSubscriptions);
?>
























<!-- ithla check pananum athkutha diff scenario podanum   bt athu montly cycle la tha iruku we cant pay beefore  purila bby intha concept ea      ipo AMAZON PRIME nu oru product crate panirekn  athuku subsription vchruken     maaasam 200 katra maatri     so 1st payment ipo panidrom  ----so nxt billing nxt month thaan open aagum  purila  ok apo one person ku one sub thana?aama montnly paid na update aagikum ok apo 3 diff prod ku subscrition create pani conditions apply panunga
ok  ipo venam naliku panlm
one ku paniten seri atha solnga athu check panitu clos panirlm inonu naliku patuklm ref code or prod id venum  
Product ID:	36151956  order id bb  pay pani venuma? aamaok   expire panunga
seri bb venam naliku patuklmmmmmmmmmmmmm

Set a grace period for your products and enable customers to renew expired subscriptions for a specific number of days after the expiration deadline. For example, for a 7 day grace period, 2Checkout will still accept payments and customers can still renew their subscriptions for up to a week after their subscriptions have expired. The expiration date of a recurring subscription is calculated based on a 'last day of the month' principle. For a subscription that is recurring on a monthly basis, and starts on January 31st, the subscription will expire as follows: in February, this subscription will expire on February 28th (or 29th for leap years). In March, the subscription will expire on the 31st. 

disable panna mudiumaaa    suddena pannamuidathu apo epdi check panrathu  seri naliku papommmmmm  go upp byyyyyyyyyyyy    wait     disable directa panamudiathu ma
seri naliku papommmmmm  ok apo role mattum diff ah vetchu check pani mudchrlm ellame avingale panirraanga  hmmm   ipo ena doubt na      oru maasam pay panama vituta?? athkutha na status ketkure 2cheout chat fun la ketpom naliku try panitu varlana wait    oiiiiiiiiiii pothum bbyyyyyyyyyy ok will chk tmrw
go eat haaaaaam lu vuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu 2222222222222222222222222222222222222222222222222222222222222222222222222222222222checkouta?? ha ha to3ckut   tooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo   seekrm saptu txt
okokokookokokokokookokokokokokokokokokokokokokokokokokokokokokokokokokokokokokokok na seekrm thoonga pore 15 mins pestu pove saptu solnga okbb  luvv uuuuu too tata  -->
