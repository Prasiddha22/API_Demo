<?php

include 'connection.php';

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contact'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];

    $query = "UPDATE users SET name='$name', address='$address', contact='$contact' WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $response = ['success' => true, 'message' => 'User updated successfully'];
    } else {

        $response = ['success' => false, 'message' => 'Somethig went wrong'];
    }
} else {
    $response = ['success' => false, 'message' => 'Please fill all the fields'];
}
echo json_encode($response);
