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
