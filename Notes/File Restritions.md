To add restrictions to file uploads in PHP, you can limit the file types, file size, and even check if the file already exists. Here’s how you can add these simple restrictions to your upload process.

Updated upload.php with Restrictions
Here's an improved version of upload.php with restrictions for file type, file size, and duplicate file check.

php
Copy code
<?php
if (isset($_POST['upload'])) {
    // Set the target directory for uploads
    $targetDir = "uploads/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // File restrictions
    $allowedTypes = ["jpg", "jpeg", "png", "pdf"]; // Allowed file extensions
    $maxFileSize = 2 * 1024 * 1024; // 2 MB in bytes

    // Get file extension and size
    $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $fileSize = $_FILES["file"]["size"];

    // Check if the file type is allowed
    if (!in_array($fileType, $allowedTypes)) {
        echo "Only JPG, JPEG, PNG, and PDF files are allowed.";
    }
    // Check if the file size is within the limit
    elseif ($fileSize > $maxFileSize) {
        echo "File size should not exceed 2 MB.";
    }
    // Check if the file already exists
    elseif (file_exists($targetFilePath)) {
        echo "A file with the same name already exists.";
    }
    // Move the uploaded file if all checks pass
    else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            echo "File uploaded successfully!";
        } else {
            echo "Error uploading file.";
        }
    }
}
?>
Explanation of Each Restriction
Allowed File Types:

$allowedTypes defines the allowed file extensions (e.g., JPG, PNG, PDF).
pathinfo() is used to get the file extension, which is then compared against the allowed types.
If the file type doesn’t match, an error message is displayed.
Maximum File Size:

$maxFileSize is set to 2 MB.
The size of the uploaded file is checked using $_FILES["file"]["size"].
If the file is larger than the specified limit, an error message is shown.
Duplicate File Check:

file_exists() checks if a file with the same name already exists in the uploads directory.
If it exists, an error message is shown, prompting the user to rename their file.
Example Use Case
When a user tries to upload a file that is not allowed (e.g., a .exe file), they will see:
Only JPG, JPEG, PNG, and PDF files are allowed.
If the file is too large (e.g., a 5 MB file), they will see:
File size should not exceed 2 MB.
If a file with the same name already exists, they will see:
A file with the same name already exists.
If all restrictions are met, the file will be uploaded, and the user will see:
File uploaded successfully!
Additional Tips
Customize Allowed File Types: Add or remove file extensions in $allowedTypes as needed.
Adjust File Size: Change $maxFileSize to a different value if you want a larger or smaller limit.
File Renaming: To avoid duplicates, you could add a unique prefix to each file name using a function like uniqid().
By adding these simple checks, you help protect your server and control the types and sizes of files users can upload.