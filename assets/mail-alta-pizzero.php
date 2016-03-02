<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $name = strip_tags(trim($_POST["name"]));
				$name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = $_POST["phone"];
        $surname = $_POST["surname"];
        $dni = $_POST["dni"];
        $address = $_POST["address"];
        $birthdate = $_POST["birthdate"];
        $nacionality = $_POST["nacionality"];
        $civilstatus = $_POST["civilstatus"];
        $mobile = $_POST["mobile"];

        // Set the recipient email address.
        $recipient = "info.wptenerife@gmail.com";

        // Set the email subject.
        $subject = "Nueva alta pizzero: $name $surname";

        // Build the email content.
        $email_content = "Nombre: $name\n";
        $email_content .= "Apellido: $surname\n";
        $email_content .= "DNI: $dni\n";
        $email_content .= "Dirección: $address\n";
        $email_content .= "Fecha de nacimiento: $birthdate\n";
        $email_content .= "Nacionalidad: $nacionality\n";
        $email_content .= "Estado Civil: $civilstatus\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Teléfono: $phone\n\n";
        $email_content .= "Móvil: $mobile\n";

        // Build the email headers.
        $email_headers = "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>