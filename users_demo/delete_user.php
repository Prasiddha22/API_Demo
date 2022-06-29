<?php

include 'connection.php';

if (isset($_POST['id'])) {

    $id = $_POST['id'];

    $query = "DELETE from users WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $response = ['success' => true, 'message' => 'User deleted successfully'];
    } else {

        $response = ['success' => false, 'message' => 'Somethig went wrong'];
    }
} else {
    $response = ['success' => false, 'message' => 'Please fill all the fields'];
}
echo json_encode($response);
