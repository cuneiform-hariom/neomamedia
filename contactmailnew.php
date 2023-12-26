<?php

include("connection.php");

// Sanitize input data
$name = trim(stripslashes($_POST['name']));
$companyname = trim(stripslashes($_POST['c_name']));
$reachby = trim(stripslashes($_POST['reachby']));
$email = filter_var(trim(stripslashes($_POST['email'])), FILTER_VALIDATE_EMAIL);
$message = trim(stripslashes($_POST['message']));

// Check if email is valid
if (!$email) {
    echo "Invalid email address";
    exit;
}

// Checkbox values for sources of contact
$contactSources = isset($_POST["checkbox_values"]) ? $_POST["checkbox_values"] : [];
$helpRequired = isset($_POST["helpwant"]) ? $_POST["helpwant"] : [];

// Filter out unchecked checkboxes
$contactSources = array_filter($contactSources);
$helpRequired = array_filter($helpRequired);

// Email configuration
$email_from = $name;
$email_to = 'hariomcuneiform@gmail.com';
$subject = "Neoma contact form";

// HTML body of the email
$body = '<html>
            <body>
                <table border="2px">
                    <tr align="center">
                        <td colspan="2"><b>' . $subject . '</b></td>
                    </tr>
                    <tr>
                        <td><b>Name :</b></td><td>' . $name . '</td>
                    </tr>
                    <tr>
                        <td><b>Email :</b></td><td>' . $email . '</td>
                    </tr>
                    <tr>
                        <td><b> Company Name :</b></td><td>' . $companyname . '</td>
                    </tr>
                    <tr>
                        <td><b>Reached By :</b></td><td>' . $reachby . '</td>
                    </tr>
                    <tr>
                        <td><b>Contact Sources :</b></td><td>' . implode(", ", $contactSources) . '</td>
                    </tr>
                    <tr>
                        <td><b>Help Wanted :</b></td><td>' . implode(", ", $helpRequired) . '</td>
                    </tr>
                    <td><b>Message :</b></td><td>' . $message . '</td>
                </table>
            </body>
        </html>';

// Email headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <' . $email_from . '>' . "\r\n";
$headers .= 'Bcc: hariom.karn@thecuneiform.com' . "\r\n";

// Send email
if (mail($email_to, $subject, $body, $headers)) {
    // Insert data into the database
    $qu = "INSERT INTO `contactform` (`name`, `company`, `reachby`, `email`, `message`)
           VALUES ('" . $name . "', '" . $companyname . "', '" . $reachby . "', '" . $email . "','" . $message . "')";

    if ($conn->query($qu) === TRUE) {
        // Redirect to a thank-you page or the homepage
        header("Location: thank_you.php");
        exit;
    } else {
        echo "Insert Failed " . $conn->error;
    }
} else {
    echo "Email sending failed";
}

// Close database connection
$conn->close();
?>
