<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Database connection details
define('DB_HOST', 'localhost');
define('DB_USER', 'u886092289_admin');
define('DB_PASS', ':Rg0;fb#');
define('DB_NAME', 'u886092289_amazonkdpexper'); // Replace with your actual database name

// Connect to the database
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? 'Unknown';
    $email = $_POST['email'] ?? 'Unknown';
    $number = $_POST['phone'] ?? 'Unknown';
    $service = $_POST['ser-select'];
    $msg = $_POST['brief'] ?? 'No message provided';

    // Get the user's IP address
    $ip = $_SERVER['REMOTE_ADDR'];

    // Initialize location variables
    $country = $state = $city = $code = $longitude = $latitude = "Unknown";

    // Get location data from IP
    $locationData = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));

    if ($locationData && $locationData->status === 'success') {
        $country = ucfirst(strtolower($locationData->country));
        $state = ucfirst(strtolower($locationData->regionName));
        $city = ucfirst(strtolower($locationData->city));
        $code = $locationData->countryCode;
        $longitude = $locationData->lon;
        $latitude = $locationData->lat;
    }

    // Capture additional fields
    $lb_source = $_POST['lb_source'] ?? 'Organic';

    // Get the referring page URL
    $referring_url = $_SERVER['HTTP_REFERER'] ?? 'Direct Access';

    // Insert form data into the database, including the service field
$stmt = $conn->prepare("INSERT INTO form_submission (full_name, email_address, contact_number, comment, service, ip_address, city, region, country, current_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $name, $email, $number, $msg, $service, $ip, $city, $state, $country, $referring_url);


    if ($stmt->execute()) {
        // Record added successfully, send email notification
        $mail = new PHPMailer(true);

        try {
            // SMTP settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.hostinger.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'info@amazonkdpexpert.com';
            $mail->Password   = 'KlevrM@321@123';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            // Recipients
            $mail->setFrom('info@amazonkdpexpert.com', 'Amazon KDP Expert');
            $mail->addAddress('info@amazonkdpexpert.com');

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'New Lead';
            $mail->Body    = "<h1>New Form Submission</h1>
                              <p><strong>Name:</strong> $name</p>
                              <p><strong>Email:</strong> $email</p>
                              <p><strong>Phone:</strong> $number</p>
                              <p><strong>Message:</strong><br> $msg</p>
                              <p><strong>Service:</strong> $service</p>
                              <p><strong>Lead Source:</strong> $lb_source</p>
                              <p><strong>Country Code:</strong> $code</p>
                              <p><strong>Country:</strong> $country</p>
                              <p><strong>State:</strong> $state</p>
                              <p><strong>City:</strong> $city</p>
                              <p><strong>Longitude:</strong> $longitude</p>
                              <p><strong>Latitude:</strong> $latitude</p>
                              <p><strong>Referring URL:</strong> $referring_url</p>";

            // Send the email
            $mail->send();

            // Redirect to thank you page
            header('Location: /thank-you/');
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Failed to save data: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
