<?php
$name = $email = $subject = $message = "";
$nameErr = $emailErr = $messageErr = "";
$formSuccess = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["name"]))) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty(trim($_POST["email"]))) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (!empty($_POST["subject"])) {
        $subject = test_input($_POST["subject"]);
    }

    if (empty(trim($_POST["message"]))) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
        if (strlen($message) < 10) {
            $messageErr = "Message must be at least 10 characters";
        }
    }

    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        $conn = new mysqli("localhost", "root", "", "portfolio");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $subject, $message);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        $formSuccess = true;
        $name = $email = $subject = $message = "";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>