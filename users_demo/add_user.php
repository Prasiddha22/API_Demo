<?php
// allowing the cross origin header
header('Access-Control-Allow-Origin: *');
include 'connection.php';

// check if all the required params are received
if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contact'])) {

    // storing the data into the variables
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    // query to insert user
    $query = "INSERT into users (name, address, contact) values('$name','$address','$contact')";

    // execute the query
    $result = mysqli_query($connect, $query);

    // check if the query is executed successfully
    if ($result) {
        // if the query is executed successfully, return the message
        $response = ['success' => true, 'message' => 'User added successfully'];
    } else {
        // if the query is not executed successfully, return the message
        $response = ['success' => false, 'message' => 'Somethig went wrong'];
    }
} else {
    // if the required params are not received, return the message
    $response = ['success' => false, 'message' => 'Please fill all the fields'];
}
echo json_encode($response);
