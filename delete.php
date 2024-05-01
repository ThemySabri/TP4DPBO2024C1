<?php
include "controller.php"; // Include controller file
include "connection.php"; // Include connection file

$controller = new Controller($conn);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $controller->deleteMember($id);
    if ($result) {
        echo "Member deleted successfully";
    } else {
        echo "Error deleting member: " . $conn->error;
    }
}

header('Refresh: 2; URL=/DPBO/TP4/index.php'); // Redirect back to index.php after 2 seconds
exit;
