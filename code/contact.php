<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    
    
    $file = fopen("C:/OpenServer/domains/Elysium2/data/data.txt", "a");
    
    
    if ($file) {
        $data = "Name: $name\nEmail: $email\nSubject: $subject\n\n";
        fwrite($file, $data);
        fclose($file);
        echo "Your message has been sent successfully.";
    } else {
        echo "Failed to open file.";
    }
} else {
    echo "Form submission failed.";
}
?>