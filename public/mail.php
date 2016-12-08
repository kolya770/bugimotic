<?php
/**
 * Created by Svyatoslav Svitlychnyi.
 * Email: <kiev.devel@gmail.com>
 * Date: 28.09.2014
 */

if ($_POST) {

    $subject = '';
    $subject .= trim(htmlspecialchars($_POST['tel']));

    $message = '';
    $message .= " Message: ";
    $message .= trim(htmlspecialchars($_POST['message']))." ; From: ";
    $message .= trim(htmlspecialchars($_POST['email']));

    $headers= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    $to1 = 'kiev.devel@gmail.com';
    $to2 = 'kiev.devel@gmail.com';



    if (mail($to1, $subject, $message, $headers) && mail($to2, $subject, $message, $headers)) {
        echo json_encode(array('success'=>'ok'));
    }
} else {
    echo json_encode(array('success'=>'ne_ok'));
}