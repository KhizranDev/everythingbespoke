<?php

ob_start();
require_once SITE_ROOT.'/PHPMailer/PHPMailerAutoload.php';

function strip_zeros_from_date( $marked_string="" ) {
  // first remove the marked zeros
  $no_zeros = str_replace('*0', '', $marked_string);
  // then remove any remaining marks
  $cleaned_string = str_replace('*', '', $no_zeros);
  return $cleaned_string;
}

function redirect_to( $location = NULL ) {
  if ($location != NULL) {
    header("Location: {$location}");
    exit;
  }
}

function output_message($message="") {
  if (!empty($message)) { 
    return "<p class=\"message\">{$message}</p>";
  } else {
    return "";
  }
}

function __autoload($class_name) {
	$class_name = strtolower($class_name);
  $path = LIB_PATH.DS."{$class_name}.php";
  if(file_exists($path)) {
    require_once($path);
  } else {
		die("The file {$class_name}.php could not be found.");
	}
}

function include_layout_template($template="") {
	include(SITE_ROOT.DS.'public'.DS.'layouts'.DS.$template);
}

function log_action($action, $message="") {

	$logfile = SITE_ROOT.DS.'logs'.DS.'log.txt';
	$new = file_exists($logfile) ? false : true;
  if($handle = fopen($logfile, 'a')) { // append

        $timestamp = strftime("%Y-%m-%d %H:%M:%S", time());
		$content = "{$timestamp} | {$action}: {$message}\n";
        fwrite($handle, $content);
        fclose($handle);

    if($new) { chmod($logfile, 0755); }
  } else {
    echo "Could not open log file for writing.";
  }
}

function datetime_to_text($datetime="")
{
	$unixdatetime = strtotime($datetime);
	return strftime("%B %d, %Y at %I:%M %p", $unixdatetime);
}

function createThumbs($pathToImages, $pathToThumbs, $thumbWidth, $file_type)
{
	$info = pathinfo($pathToImages);

	$img;
	
	if ($file_type == "png") {
		$img = imagecreatefrompng( "{$pathToImages}" );
	}
	else {
	
		$img = imagecreatefromjpeg( "{$pathToImages}" );
	}
		
    $width = imagesx( $img );
    $height = imagesy( $img );
	
	// calculate thumbnail size
	$new_width = $thumbWidth;
	$new_height = floor( $height * ( $thumbWidth / $width ) );

	// create a new temporary image
	$tmp_img = imagecreatetruecolor( $new_width, $new_height );

	imagecopyresampled($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
	//imagejpeg($tmp_img, "{$pathToThumbs}");
	
	// copy and resize old image into new image 
	//imagecopyresized($tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

	//echo "Before creating Thumbnail";
	
	// save thumbnail into a file
	if ($file_type == "png")
		imagepng($tmp_img, "{$pathToThumbs}");
	else
		imagejpeg($tmp_img, "{$pathToThumbs}");
	
	
	  
}


function createThumbs11 ($pathToImages, $pathToThumbs, $thumbWidth) 
{
  // open the directory
  $dir = opendir( $pathToImages );

  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
    // continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' ) 
    {
      echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_width = $thumbWidth;
      $new_height = floor( $height * ( $thumbWidth / $width ) );

      // create a new temporary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image 
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
      imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
    }
  }
  // close the directory
  closedir( $dir );
}

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = '!@#$%^&*';
    $secret_iv = '&*#$%!&#';
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    //$qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    $qEncoded = $q;
    return( $qEncoded );
}

function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

function search_array($needle, $haystack) {

    if(in_array($needle, $haystack))
        return true;

    foreach($haystack as $element) {

        if (is_array($element) && search_array($needle, $element)) {
            return true;
        }
    }
    return false;
}

function csv_delete_rows($filename=NULL, $startrow=0, $endrow=0, $inner=true) {
    $status = 0;
//check if file exists
    if (file_exists($filename)) {
        //end execution for invalid startrow or endrow
        if ($startrow < 0 || $endrow < 0 || $startrow > 0 && $endrow > 0 && $startrow > $endrow) {
            die('Invalid startrow or endrow value');
        }
        $updatedcsv = array();
        $count = 0;
        //open file to read contents
        $fp = fopen($filename, "r");
        //loop to read through csv contents
        while ($csvcontents = fgetcsv($fp)) {
            $count++;
            if ($startrow > 0 && $endrow > 0) {
                //delete rows inside startrow and endrow
                if ($inner) {
                    $status = 1;
                    if ($count >= $startrow && $count <= $endrow)
                        continue;
                    array_push($updatedcsv, implode(',', $csvcontents));
                }
                //delete rows outside startrow and endrow
                else {
                    $status = 2;
                    if ($count < $startrow || $count > $endrow)
                        continue;
                    array_push($updatedcsv, implode(',', $csvcontents));
                }
            }
            else if ($startrow == 0 && $endrow > 0) {
                $status = 3;
                if ($count <= $endrow)
                    continue;
                array_push($updatedcsv, implode(',', $csvcontents));
            }
            else if ($endrow == 0 && $startrow > 0) {
                $status = 4;
                if ($count >= $startrow)
                    continue;
                array_push($updatedcsv, implode(',', $csvcontents));
            }
            else if ($startrow == 0 && $endrow == 0) {
                $status = 5;
            } else {
                $status = 6;
            }
        }//end while
        if ($status < 5) {
            $finalcsvfile = implode("\n", $updatedcsv);
            fclose($fp);
            $fp = fopen($filename, "w");
            fwrite($fp, $finalcsvfile);
        }
        fclose($fp);
        return $status;
    } else {
        die('File does not exist');
    }
}

function query_array($array, $keys = array(), $values = array()){
    $match = array();
    for($i = 0; $i < count($array); $i++){
        for($x = 0; $x < count($keys); $x++){
            if($array[$i][$keys[$x]] == $values[$x]){
                $match[$i][] = 'increment';
                if(count($match[$i]) == count($keys)){
                    unset ($array[$i]);
                }
            }
        }
    }
    return $array;
}

function convert_number_to_words($number) {

    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'one',
        2                   => 'two',
        3                   => 'three',
        4                   => 'four',
        5                   => 'five',
        6                   => 'six',
        7                   => 'seven',
        8                   => 'eight',
        9                   => 'nine',
        10                  => 'ten',
        11                  => 'eleven',
        12                  => 'twelve',
        13                  => 'thirteen',
        14                  => 'fourteen',
        15                  => 'fifteen',
        16                  => 'sixteen',
        17                  => 'seventeen',
        18                  => 'eighteen',
        19                  => 'nineteen',
        20                  => 'twenty',
        30                  => 'thirty',
        40                  => 'fourty',
        50                  => 'fifty',
        60                  => 'sixty',
        70                  => 'seventy',
        80                  => 'eighty',
        90                  => 'ninety',
        100                 => 'hundred',
        1000                => 'thousand',
        1000000             => 'million',
        1000000000          => 'billion',
        1000000000000       => 'trillion',
        1000000000000000    => 'quadrillion',
        1000000000000000000 => 'quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}

function getMax( $array ){
    $max = 1;
    foreach( $array as $k => $v )
    {
        $max = max( array( $max, $v['Sno'] ) ) + 1;
    }
    return $max;
}

function SendEmail($to_email,$cc_email='',$subject,$content){

    $email_host = "mail.everythingbespoke.pk";
    $smtp_user = "noreply@everythingbespoke.pk";
    $smtp_pass = "HPMh%3OEXNye";

    try{

        //PHPMailer Object
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;
        $mail->isSMTP(true);
        $mail->Host = $email_host;
        $mail->SMTPAuth = true;
        $mail->Username = $smtp_user;
        $mail->Password = $smtp_pass;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($smtp_user, 'Everything Bespoke - ' . $subject);
        $mail->addAddress($to_email, $subject);

        if($cc_email != ''){
            $mail->addCC($cc_email);
            //$mail->addBCC("noman.khan330@gmail.com");
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $content;

        $return_message = "";
        if($mail->send()) {
            $return_message = "000";
        }
        else{
            $return_message = "Mailer Error: " . $mail->ErrorInfo;
        }

        return $return_message;

    }
    catch (phpmailerException $e) {
        return $e->errorMessage();
    }
    catch (Exception $e) {
        return $e->getMessage();
    }
}

function RandomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function RandomPasswordNumber() {
    return mt_rand(10000000,99999999);
}

function MakeDir($dirname,$is_sub_dir=false){
    if (!is_dir($dirname)) {
        @mkdir($dirname, 0777,$is_sub_dir);
    }
}


?>