<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dental_practice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $patient_id = $_POST["patient_id"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $service = $_POST["service"];

    $sql = "INSERT INTO Appointments (patient_id, appointment_date, appointment_time, service) VALUES ('$patient_id', '$date', '$time', '$service')";

    if ($conn->query($sql) === TRUE) {
        echo "New appointment booked successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
