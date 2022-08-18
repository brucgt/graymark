<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Rakit\Validation\Validator;

class ContactController
{

    public static function contactfunc()
    {

        // php validator

        $validator = new Validator;

        $validation = $validator->make($_POST, [
            'FirstName' => 'required|min:2',
            'LastName' => 'required|min:2',
            'E-Mail' => 'required|email',
            'Message' => 'required|min:5|max:255',
        ]);

        $validation->validate();

        

        if ($validation->fails()) {
            $errors = $validation->errors();
            $_SESSION['errors'] = $errors->all();
            redirect('/contact');
        }

        // php mailer

        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Port = 2525;
            $mail->Username = '467267a0ce6022';
            $mail->Password = 'b2258dd472a819';

            //Recipients
            $mail->setFrom('graymark@gmail.com', 'Graymark');
            $mail->addAddress('graymark@gmail.com', 'admin');

            //Content
            $mail->isHTML(true);
            $mail->Subject = 'Graymark - New Website Inquiries';
            $mail->Body    = '<center> Good Day!</br>You have a new inquiry from your website!</center></br></br> From:  ' . ucfirst($_POST['FirstName']) . ' ' . ucfirst($_POST['LastName']) . '</br></br> E-Mail:  ' .$_POST['E-Mail']. '</br></br> Message:  ' .$_POST['Message'];
            $mail->AltBody = 'Good Day! \n You have a new inquiry from your website \n\n From:  ' . ucfirst($_POST['FirstName']) . ' ' . ucfirst($_POST['LastName']) . '\n\n E-Mail:  ' .$_POST['E-Mail']. '\n\n Message:  ' .$_POST['Message'];

            $mail->send();
            $_SESSION['message'] = ('Message Sent');
            redirect('/contact');
        } catch (Exception $e) {
            $_SESSION['errors'] = ['Server Error.'];
            redirect('/contact');
        }
    }
}
