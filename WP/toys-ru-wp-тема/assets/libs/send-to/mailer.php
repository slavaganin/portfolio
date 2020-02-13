<?php
//    // My modifications to mailer script from:
//    // http://blog.teamtreehouse.com/create-ajax-contact-form
//    // Added input sanitizing to prevent injection
//
//    // Only process POST reqeusts.
//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        // Get the form fields and remove whitespace.
//        $name = $_POST["name"];
////        $name = str_replace(array("\r","\n"),array(" "," "),$name);
//        $phone = $_POST["phone"];
//        $email = $_POST["email"];
//
//        // Check that data was sent to the mailer.
////        if ( empty($name)) {
////            // Set a 400 (bad request).
////            http_response_code(400);
////            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
////        }
//
//        // Set the recipient email address.
//        $recipient = "ganinvyatcheslav@gmail.com";
//
//        // Set the email subject.
//        $subject = "Новое сообщение от $name с контакнтой формы";
//
//        // Build the email content.
//        $email_content = "Имя: $name\n";
//        $email_content .= "Имейл: $email\n\n";
//        $email_content .= "Телефон:\n$phone\n";
//
//        // Build the email headers.
//        $email_headers = "From: $name <$email>";
//
//        // Send the email.
//        mail($recipient, $subject, $email_content, $email_headers);
//
//    }
//
////    else {
////        // Not a POST request, set a 403 (forbidden) response code.
////        http_response_code(403);
////        echo "Что-то пошло не так, и мы не смогли отправить ваше сообщение.";
////    }




    // My modifications to mailer script from:
    // http://blog.teamtreehouse.com/create-ajax-contact-form
    // Added input sanitizing to prevent injection

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        // Check that data was sent to the mailer.
        if ( empty($name)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
//            exit;
        }

        // Set the recipient email address. (o.volodina.s@yandex.ru)
        $recipient = 'o.volodina.s@yandex.ru';

        // Set the email subject.
        $subject = "Новое сообщение от $name";

        // Build the email content.
        $email_content = "Имя: $name\n";
        $email_content .= "Телефон: $phone\n\n";
        $email_content .= "Имейл:\n$email\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Спасибо, Ваше сообщение было отослано";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Что-то пошло не так, и мы не смогли отправить ваше сообщение";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
