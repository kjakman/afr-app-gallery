<?php 
/* 
-------------------------------------------------------------------------------- 
| @author Tauseef Ahmed
| Last Upate: 31-OCT-2020 05:25 PM
| 
| Facebook: www.facebook.com/ahmadlogs
| Twitter: www.twitter.com/ahmadlogs
| YouTube: https://www.youtube.com/channel/UCOXYfOHgu-C-UfGyDcu5sYw/
| Blog: https://ahmadlogs.wordpress.com/
 -------------------------------------------------------------------------------- 
 */
 
 
 /* 
||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
| 2checkout configuration 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */

define('TWOCHECKOUT_SELLER_ID', 'ENTER_SELLER_ID');
define('TWOCHECKOUT_PUBLISHABLE_KEY', 'ENTER_PUBLISHABLE_KEY');
define('TWOCHECKOUT_PRIVATE_KEY', 'ENTER_PRIVATE_KEY');
define('CURRENCY_CODE', 'usd');


/* 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
| Database configuration 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */ 
 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'jovee123'); 
define('DB_NAME', '2ckout');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}

/* 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
| Site configuration 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
 */ 
define('BASE_URL', 'http://localhost/2checkout/');

define('TITLE', '2checkout through API call');