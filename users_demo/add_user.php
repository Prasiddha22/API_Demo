<?php
header('Access-Control-Allow-Origin: *');
include 'connection.php';

if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contact'])) {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $query = "INSERT into users (name, address, contact) values('$name','$address','$contact')";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $response = ['success' => true, 'message' => 'User added successfully'];
    } else {

        $response = ['success' => false, 'message' => 'Somethig went wrong'];
    }
} else {
    $response = ['success' => false, 'message' => 'Please fill all the fields'];
}
echo json_encode($response);
