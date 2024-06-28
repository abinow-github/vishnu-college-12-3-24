<?php
include("../root/db.php");

$id = $_GET['sa'];

// Fetch the image filename before deleting the record
$fetchImageQuery = "SELECT image FROM blog WHERE id = '$id'";
$result = $mysqli->query($fetchImageQuery);

if (!$result) {
    die("Error in query: " . $mysqli->error);
}

if ($result->num_rows > 0) {
    $imageFilenames = explode(',', $result->fetch_assoc()['image']);

    // Loop through and delete each image file
    foreach ($imageFilenames as $filename) {
        unlink("../blog-images/" . trim($filename));
    }

    // Delete the record from the database
    $deleteQuery = "DELETE FROM blog WHERE id = '$id'";

    if ($mysqli->query($deleteQuery)) {
        echo "Record deleted successfully";
        header('location: index.php');
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
} else {
    echo "Error fetching image filenames.";
}

// Redirect to the index page

?>
