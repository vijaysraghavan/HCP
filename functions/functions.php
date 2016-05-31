<?php
/**
 * Created by PhpStorm.
 * User: Rajiv
 * Date: 18/5/16
 * Time: 5:10 PM
 */
function dbConnect()
{
    global $dbconn;
    $dbconn = pg_Connect("host=ec2-54-83-5-43.compute-1.amazonaws.com dbname=d2ktmglq845met user=hvsrxhplqduvfs password=jOukVt9w7sHyoVal8zdI5cRqcZ");
    if (!$dbconn) {
        die("Postgres DB Connection Error" . pg_last_error());
        return false;
    } else {
        return $dbconn;
    }
}

function addUser($firstname, $lastname, $email, $password, $phone, $dob, $mail_street, $mail_city, $mail_city, $mail_state, $mail_post_code, $mailing_country, $title, $department)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $queryString = "INSERT INTO salesforce.Contact(firstname, lastname, email, password__c, phone, birthdate, mailingstreet, mailingcity, mailingstate, mailingpostalcode, mailingcountry, title, department)
                  VALUES('$firstname','$lastname', '$email', '$password', '$phone', '$dob','$mail_street','$mail_city','$mail_state','$mail_post_code','$mailing_country','$title','$department');";
        $resultAddUser = pg_query($dbconn, $queryString);
        $numRowsUser = pg_affected_rows($resultAddUser);
        if ($numRowsUser)
            return $numRowsUser;
        else
            return false;
    }
}

function loginUser($email, $password)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultLoginUser = pg_exec($dbconn, "SELECT * FROM salesforce.contact WHERE email='$email' AND password__c='$password'");
        if ($resultLoginUser) {
            $resultRows = pg_fetch_array($resultLoginUser);
            return $resultRows;
        } else {
            return false;
        }
    }
}

/*function getPassword($email)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultGetPassword = pg_query($dbconn, "SELECT password__c FROM salesforce.contact WHERE email='$email';");
        $resultGetPasswordFetched = pg_fetch_result($resultGetPassword, 0, 0);
        
        if($resultGetPasswordFetched)
        	return $resultGetPasswordFetched;
	else
		return false;
    }
}

function registeredStatus($title, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
	$eventSfid = pg_query($dbconn, "SELECT sfid FROM salesforce.event__c WHERE name='$title';");
	$eventSfidFetched = pg_fetch_result($eventSfid, 0, 0);
		
	$query = "SELECT * FROM salesforce.registered_events__c WHERE event__c='$eventSfidFetched' AND 
        	contact__c='$contact_sfid';";	
        $resultStatus = pg_query($dbconn, $query);
        $numRowsResult = pg_fetch_array($resultStatus);
        return $query;
        	
        if($numRowsResult) {
        	return $numRowsResult;
        } else {
        	return false;
        }
    }
}*/

function registerEvent($title, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
	$eventSfid = pg_query($dbconn, "SELECT sfid FROM salesforce.event__c WHERE name='$title';");
	$eventSfidFetched = pg_fetch_result($eventSfid, 0, 0);
	
	$resultStatus = pg_query($dbconn, "SELECT * FROM salesforce.registered_events__c WHERE event__c='$eventSfidFetched' AND 
        	contact__c='$contact_sfid';");
        $numRowsResult = pg_fetch_array($resultStatus);
        	
        if($numRowsResult) {	
		return false;
	} else {
		$resultRegisterEvent = pg_query($dbconn, "INSERT INTO salesforce.registered_events__c (event__c, contact__c) 
			VALUES('$eventSfidFetched', '$contact_sfid');");
		
		$numRowsResult = pg_affected_rows($resultRegisterEvent);
	        if ($numRowsResult)
	            return $numRowsResult;
	        else
	            return false;
	}
    }
}

function addSamplesRequest($medicine, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
    	$productSfid = pg_query($dbconn, "SELECT sfid FROM salesforce.product2 WHERE family='Medical' AND name='$medicine';");
	$productSfidFetched = pg_fetch_result($productSfid, 0, 0);
	
	$resultSamplesRequest = pg_query($dbconn, "INSERT INTO salesforce.samples_request__c (product__c, contact__c) 
		VALUES('$productSfidFetched', '$contact_sfid');");
        
        $numRowsSamplesRequest = pg_affected_rows($resultSamplesRequest);
        if ($numRowsSamplesRequest)
            return $numRowsSamplesRequest;
        else
            return false;
    }
}

function addLiteratureRequest($medicine, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
    	$productSfid = pg_query($dbconn, "SELECT sfid FROM salesforce.product2 WHERE family='Medical' AND name='$medicine';");
	$productSfidFetched = pg_fetch_result($productSfid, 0, 0);
	
	$resultLiteratureRequest = pg_query($dbconn, "INSERT INTO salesforce.literature_request__c (product__c, contact__c) 
		VALUES('$productSfidFetched', '$contact_sfid');");
		
        $numRowsLiteratureRequest = pg_affected_rows($resultLiteratureRequest);
        if ($numRowsLiteratureRequest)
            return $numRowsLiteratureRequest;
        else
            return false;
    }
}

function getCaseDetails($sfid){
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultDetails = pg_query($dbconn, "SELECT * FROM salesforce.case WHERE contactid='$sfid';");
        if ($resultDetails) {
            while($resultRows = pg_fetch_array($resultDetails)){
                $rows[]=$resultRows;
            }
            if($rows)
                return $rows;
            else {
                return false;
            }
        }
    }
}

function resetPassword($id, $key)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultForgetPassword = pg_query($dbconn, "UPDATE salesforce.contact set password__c='$key' WHERE sfid='$id'");
        $resForgetPassword = pg_affected_rows($resultForgetPassword);
        if ($resForgetPassword)
            return $resForgetPassword;
        else
            return false;
    }
}

function getDetails($email)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultDetails = pg_exec($dbconn, "SELECT * FROM salesforce.contact WHERE email='$email'");
        if ($resultDetails) {
            $resultRows = pg_fetch_array($resultDetails);
            return $resultRows;
        } else {
            return false;
        }
    }
}

function getDetailsPassword($code)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultCode = pg_exec($dbconn, "SELECT * FROM salesforce.contact WHERE password__c='$code'");
        if ($resultCode) {
            $resultCodeRows = pg_fetch_array($resultCode);
            return $resultCodeRows;
        } else {
            return false;
        }
    }
}

function sendLinkResetPassword($email, $subject, $message)
{
    $config = array();
    $config['api_key'] = "key-198352edc5a59b6a37e5b3f8c7c7a805";
    $config['api_url'] = "https://api.mailgun.net/v3/sandboxa61134189e6e4bf2b385e0fbbf1cfa86.mailgun.org";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_USERPWD, 'api:' . $config['api_key']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, 'https://api.mailgun.net/v3/sandboxa61134189e6e4bf2b385e0fbbf1cfa86.mailgun.org/messages');
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        array('from' => 'info@phiz.co',
            'to' => $email,
            'subject' => $subject,
            'html' => $message));
    $result = curl_exec($ch);
    curl_close($ch);
    if ($result)
        return $result;
}
?>
