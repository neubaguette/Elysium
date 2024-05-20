<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $car = $_POST["car"];

    $file = fopen("C:/OpenServer/domains/Elysium2/data/rentbook.txt", "a");

    if ($file) {
        $rentbook = "Name: $name\nSurname: $surname\nEmail: $email\nCar: $car\n\n";

        fwrite($file, $rentbook);
        fclose($file);

        echo "Your message has been sent successfully.";
    }
} else {
    echo "Form submission failed.";
}

?>