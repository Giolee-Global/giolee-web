<?php
// Connect database
include "./config/db.php";

//Contact Form Query
if (isset($_POST['new_enquiry_btn'])) {

    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $request = $conn->real_escape_string($_POST['request']);
    $status = $conn->real_escape_string($_POST['status']);


    $query = "INSERT INTO support (firstName, lastName, email, phone, subject, request, status) 
            VALUES('$firstName', '$lastName', '$email', '$phone', '$subject', '$request', 'Open')";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION['success_message'] = "Contact enquiries sent";
        }else {
            $_SESSION['error_message'] = "Error sending enquiries".mysqli_error($conn);
        }
}
