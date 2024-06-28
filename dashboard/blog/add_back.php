<?php
session_start();

// Include the file with the database connection
include("../root/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get other form data
    $title = mysqli_real_escape_string($mysqli, $_POST["title"]);
    $author = mysqli_real_escape_string($mysqli, $_POST["author"]);
    $date = mysqli_real_escape_string($mysqli, $_POST["date"]);
    $content = mysqli_real_escape_string($mysqli, $_POST["content"]);

    $url = mysqli_real_escape_string($mysqli, $_POST["url"]);
    $meta_title = mysqli_real_escape_string($mysqli, $_POST["meta_title"]);
    $meta_description = mysqli_real_escape_string($mysqli, $_POST["meta_description"]);

    $uploadDirectory = "../blog-images/";
    // Handle multiple file uploads
    $uploadedFiles = [];

    foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
        $fileName = $_FILES["images"]["name"][$key];
        $fileSize = $_FILES["images"]["size"][$key];
        $fileType = $_FILES["images"]["type"][$key];
        $fileTmpName = $_FILES["images"]["tmp_name"][$key];

        // Check file size (1MB limit)
        $maxFileSize = 1 * 1024 * 1024; // 1MB in bytes
        if ($fileSize > $maxFileSize) { 
            $_SESSION['upload_error'] = " File '{$fileName}'  exceeds the maximum allowed size (1MB).";
            header("Location: index.php"); // Redirect back to index page
            exit();
        }

        // Generate a unique name for the file
        $uniqueFileName = generateUniqueFileName($uploadDirectory, $fileName);

        $targetFilePath = $uploadDirectory . $uniqueFileName;

        // Move the file to the upload directory
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            $uploadedFiles[] = $uniqueFileName;
        } else {
            echo "Error uploading file {$fileName}. Please try again.";
        }
    }

    // Combine the image paths into a comma-separated string
    $imagePaths = implode(',', $uploadedFiles);

    // Insert data into the news table
    $insertQuery = "INSERT INTO blog (image, title,author, date, txt,url,meta_title,meta_description) VALUES ('$imagePaths', '$title','$author', '$date', '$content','$url','$meta_title','$meta_description')";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        // Redirect or display success message
        header("Location: index.php");
        exit();
    } else {
        echo "Error inserting data into the news table: " . $mysqli->error;
    }
}

// Function to generate a unique file name
function generateUniqueFileName($directory, $originalFileName) {
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $uniqueFileName = md5(uniqid()) . '.' . $extension;
    return $uniqueFileName;
}
?>
