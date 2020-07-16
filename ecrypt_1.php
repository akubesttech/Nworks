<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
$key = "yabba dabba doo";
$input = "my name is akuchukwu";
$td = mcrypt_module_open('blowfish','','ecb','');$iv=mcrypt_create_iv(mcrypt_enc_get_iv_size($td),MCRYPT_RAND);
mcrypt_generic_init($td,$key,$iv);
$encrypted_data= mcrypt_generic($td,$input);
$decrypt_data = mdecrypt_generic($td,$encrypted_data);
mcrypt_generic_deinit($td);
mcrypt_module_close($td);
echo "INPUT: ".$input;;
echo $encrypted_data;
echo "<br/>";
echo $decrypt_data; 

/*$key = "HaiHello";
$enc = base64_encode ($key);
$dec = base64_decode ($enc);
echo 'Encrypted : '.$enc.'<br>';
echo 'Decrypted : '.$dec.'<br>';*/

$password = "akubest";
$salt = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 14);
$hash = $salt . md5($salt . $password);
echo $hash;" <br>";
$dbSalt = substr($user['password'],0,14);
$dbPass = substr($user['password'],14);
if (md5($dbSalt . $password) == $dbPass) { /* CORRECT PASSWORD */ }




function encrypt_url($string) {
  $key = "MAL_979805"; //key to encrypt and decrypts.
  $result = '';
  $test = "";
   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)+ord($keychar));

     $test[$char]= ord($char)+ord($keychar);
     $result.=$char;
   }

   return urlencode(base64_encode($result));
}

function decrypt_url($string) {
    $key = "MAL_979805"; //key to encrypt and decrypts.
    $result = '';
    $string = base64_decode(urldecode($string));
   for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)-ord($keychar));
     $result.=$char;
   }
   return $result;
}
$urigo ="https://edu.smartdelta.com.ng/Userloging.php";
//echo    $uril = encrypt_url($urigo)." <br>";
//echo  decrypt_url($uril);

$input = "SmackFactory";

$encrypted = encryptIt( $input );
$decrypted = decryptIt( $encrypted );

echo $encrypted . '<br />' . $decrypted;

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

?>