<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "saiteja@brandstory.in";
    $subject = "New Contact Form Submission";

    $firstName = filter_var($_POST["firstName"], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST["lastName"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = nl2br(filter_var($_POST["message"], FILTER_SANITIZE_STRING)); // Preserve line breaks

    // Validate Name (Only Letters)
    if (!preg_match("/^[A-Za-z\s]+$/", $firstName) || !preg_match("/^[A-Za-z\s]+$/", $lastName)) {
        echo "Invalid name.";
        exit;
    }

    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email.";
        exit;
    }

    // Email Headers (Improved: Includes Name in "Reply-To")
    $headers = "From: Prismhue Contact <info@prismhue.in>\r\n"; // Your domain email
    $headers .= "Reply-To: $firstName $lastName <$email>\r\n"; // Sender's name & email
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Email Body (Fully Responsive, No Scrollbar)
    $body = "
    <html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #D9D9D9; }
            .email-container { max-width: 600px; margin: 20px auto; padding: 20px; background: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
            h2 { color: #0073e6; margin-bottom: 15px; text-align: center; }
            p { font-size: 16px; color: #333; margin: 10px 0; }
            .label { font-weight: bold; color: #555; }
            .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #777; }
            a { color: #0073e6; text-decoration: none; }
            .ii .gt { background-color: #D9D9D9; }
            @media (max-width: 600px) {
                .email-container { width: 95%; padding: 15px; }
                p { font-size: 14px; }
            }
        </style>
    </head>
    <body style='background-color: #D9D9D9; margin: 0; padding: 15px 0;'>
        <div class='email-container'>
            <h2>📩 New Contact Form Submission</h2>
            <p><span class='label'>Name:</span> $firstName $lastName</p>
            <p><span class='label'>Email:</span> <a href='mailto:$email'>$email</a></p>
            <p><span class='label'>Message:</span><br> $message</p>
            <hr>
            <p class='footer'>This email was sent from the Prismhue contact form.</p>
        </div>
    </body>
    </html>";

    // Send Email
    if (mail($to, $subject, $body, $headers)) {
        echo "Success";
    } else {
        echo "Error";
    }
}
?>
