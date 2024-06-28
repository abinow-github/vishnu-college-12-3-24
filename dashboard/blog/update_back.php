<?php
include("../root/db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageId = mysqli_real_escape_string($mysqli, $_POST['image_id']);

    // Update other fields (title, author, date, text, etc.)
    $title = mysqli_real_escape_string($mysqli, $_POST['title']);
    $author = mysqli_real_escape_string($mysqli, $_POST['author']);
    $date = mysqli_real_escape_string($mysqli, $_POST['date']);
    $text = mysqli_real_escape_string($mysqli, $_POST['txt']);
    $url = mysqli_real_escape_string($mysqli, $_POST['url']);
    $meta_title = mysqli_real_escape_string($mysqli, $_POST['meta_title']);
    $meta_description = mysqli_real_escape_string($mysqli, $_POST['meta_description']);

    $updateCaptionQuery = "UPDATE blog SET title = '$title', author = '$author', date = '$date', txt = '$text', url = '$url', meta_title = '$meta_title', meta_description = '$meta_description' WHERE id = '$imageId'";
    if (!mysqli_query($mysqli, $updateCaptionQuery)) {
        die('Error updating caption: ' . mysqli_error($mysqli));
    }

    // Check if new images are provided
    if (!empty($_FILES['new_images']['tmp_name'][0])) {
        // Fetch old image filenames from the database
        $fetchImageQuery = "SELECT image FROM blog WHERE id = '$imageId'";
        $result = $mysqli->query($fetchImageQuery);

        if ($result && $result->num_rows > 0) {
            $oldImageFilenames = explode(',', $result->fetch_assoc()['image']);

            // Delete old image files
            foreach ($oldImageFilenames as $oldImage) {
                unlink("../blog-images/" . trim($oldImage));
            }

            // Clear the array of old filenames
            $oldImageFilenames = array();

            // Loop through each file
            foreach ($_FILES['new_images']['tmp_name'] as $key => $tmp_name) {
                // Example:
                $maxFileSize = 1 * 1024 * 1024; // 1MB in bytes
                $fileSize = $_FILES['new_images']['size'][$key];

                if ($fileSize > $maxFileSize) {
                    $_SESSION['upload_error'] = "Error: File size exceeds the maximum allowed size (1MB).";
                    header("Location: index.php");
                    exit();
                }

                $temp1 = explode(".", $_FILES["new_images"]["name"][$key]);
                $newfilename1 = rand() . "_" . date('m-d-Y_hia') . '.' . end($temp1);
                if (!move_uploaded_file($_FILES['new_images']['tmp_name'][$key], "../blog-images/" . $newfilename1)) {
                    die("Error uploading file: " . $_FILES['new_images']['name'][$key]);
                }

                // Add the new filename to the array of old filenames
                $oldImageFilenames[] = $newfilename1;
            }

            // Update images in the database
            $newImageFilenames = implode(',', $oldImageFilenames);
            $updateImageQuery = "UPDATE blog SET image = '$newImageFilenames' WHERE id = '$imageId'";
            if (!mysqli_query($mysqli, $updateImageQuery)) {
                die('Error updating images: ' . mysqli_error($mysqli));
            }
        }
    }

    // Redirect back to the edit page
    header("Location: index.php");
    exit();
}

// If form is not submitted, redirect to the index page or any other desired location
header("Location: index.php");
exit();
?>
