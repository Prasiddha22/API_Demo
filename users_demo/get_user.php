<?php
header('Access-Control-Allow-Origin: *');

include 'connection.php';

$query = 'Select * from users';
$result = mysqli_query($connect, $query);

$users = [];

while ($row = mysqli_fetch_array($result)) {
    $users[] = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'address' => $row['address'],
        'contact' => $row['contact']
    );
}
$response = ['success' => true, 'users' => $users];
echo json_encode($response);
