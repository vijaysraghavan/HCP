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

function registeredStatus($title, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
		$queryString1 = "SELECT sfid FROM salesforce.event__c WHERE name='$title';";
		$eventSfid = pg_exec($dbconn, $queryString1);
		
        $queryString2 = "SELECT * FROM salesforce.registered_events__c WHERE event__c='$eventSfid' AND contact__c='$contact_sfid';";
        $resultStatus = pg_exec($dbconn, $queryString2);
        
	$numRowsResult = pg_fetch_array($resultStatus);
        if ($numRowsResult)
            return $numRowsResult;
        else
            return false;
    }
}


function registerEvent($title, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
	$eventSfid = pg_query($dbconn, "SELECT sfid FROM salesforce.event__c WHERE name='$title';");
	$resultRegisterEvent = pg_query($dbconn, "INSERT INTO salesforce.registered_events__c (event__c, contact__c) VALUES('$eventSfid', '$contact_sfid');");
		
        $numRowsResult = pg_affected_rows($resultRegisterEvent);
        if ($numRowsResult)
            return $numRowsResult;
        else
            return false;
    }
}

function cancelEvent($title, $contact_sfid)
{
    global $dbconn;
    if ($connect = dbConnect()) {
		$queryString1 = "SELECT sfid FROM salesforce.event__c WHERE name='$title';";
		$eventSfid = pg_exec($dbconn, $queryString1);
		
        $queryString2 = "DELETE FROM salesforce.registered_events__c WHERE event__c='$eventSfid' AND contact__c='$contact_sfid';";
        $resultDeleteEvent = pg_query($dbconn, $queryString2);
        
		$numRowsResult = pg_affected_rows($resultDeleteEvent);
        if ($numRowsResult)
            return $numRowsResult;
        else
            return false;
    }
}

/*function addEvents($name, $email, $phone, $event, $questions)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddEvents = pg_query($dbconn, "INSERT INTO salesforce.events__c(name, your_email__c, your_phone__c,select_event__c,your_questions__c)
                  VALUES('$name','$email','$phone','$event','$questions');");
        $numRowsEvents = pg_affected_rows($resultAddEvents);
        if ($numRowsEvents)
            return $numRowsEvents;
        else
            return false;
    }
}

function addSampleRequest($name, $email, $phone, $medicine)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddSampleRequest = pg_query($dbconn, "INSERT INTO salesforce.sample_request__c(name, your_email__c, your_phone__c,select_a_medicine__c)
                  VALUES('$name','$email','$phone','$medicine');");
        $numRowsSampleRequest = pg_affected_rows($resultAddSampleRequest);
        if ($numRowsSampleRequest)
            return $numRowsSampleRequest;
        else
            return false;
    }
}

function addLiteratureRequest($name, $email, $phone, $medicine, $additional_notes)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddLiteratureRequest = pg_query($dbconn, "INSERT INTO salesforce.literature_request__c(name, your_email__c, your_phone__c,select_a_medicine__c,additional_notes__c)
                  VALUES('$name','$email','$phone','$medicine','$additional_notes');");
        $numRowsLiteratureRequest = pg_affected_rows($resultAddLiteratureRequest);
        return $numRowsLiteratureRequest;
    }
}

function addNewsLetter($email)
{
    global $dbconn;
    if ($connect = dbConnect()) {
        $resultAddNewsLetter = pg_query($dbconn, "INSERT INTO hcp_news_letter(email)
                  VALUES('$email');");
        $numRowsNewsLetter = pg_affected_rows($resultAddNewsLetter);
        return $numRowsNewsLetter;
    }
}*/

?>
