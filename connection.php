<!-- database connectivity by php -->

<?php

$conn = new mysqli('localhost', 'root', '', 'school_management_system');

if ($conn->connect_error) {

    die('Connection Failed: ' . $conn->connect_error);

}

function insertIntoTable($conn, $table, $fields, $values) {

    $types = str_repeat("s", count($values));
    $stmt = $conn->prepare("insert into $table ($fields) values (" . implode(",", array_fill(0, count($values), "?")) . ")");
    $stmt->bind_param(str_repeat("s", count($values)), ...$values);

    if (!$stmt->execute()) {

        echo "Error: " . $stmt->error;

    }

    $stmt->close();

}

if (isset($_POST['name'], $_POST['email'], $_POST['number'], $_POST['date'], $_POST['gender'], $_POST['address'])) {

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);
    $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);

    $values = array($name, $email, $number, $date, $gender, $address);
    insertIntoTable($conn, 'admission', 'name, email, number, date_of_birth, gender, address', $values);

}

if (isset($_POST['name2'], $_POST['email2'], $_POST['number2'], $_POST['message2'])) {

    $name2 = filter_var($_POST['name2'], FILTER_SANITIZE_STRING);
    $email2 = filter_var($_POST['email2'], FILTER_SANITIZE_EMAIL);
    $number2 = filter_var($_POST['number2'], FILTER_SANITIZE_NUMBER_INT);
    $message2 = filter_var($_POST['message2'], FILTER_SANITIZE_STRING);

    $values = array($name2, $email2, $number2, $message2);
    insertIntoTable($conn, 'principalmessage', 'name, email, number, message', $values);

}

if (isset($_POST['name3'], $_POST['email3'], $_POST['number3'], $_POST['message3'])) {

    $name3 = filter_var($_POST['name3'], FILTER_SANITIZE_STRING);
    $email3 = filter_var($_POST['email3'], FILTER_SANITIZE_EMAIL);
    $number3 = filter_var($_POST['number3'], FILTER_SANITIZE_NUMBER_INT);
    $message3 = filter_var($_POST['message3'], FILTER_SANITIZE_STRING);

    $values = array($name3, $email3, $number3, $message3);
    insertIntoTable($conn, 'viceprincipalmessage', 'name, email, number, message', $values);

}

$conn->close();

?>


<!-- after form submission file -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edgewater High School</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
            align-items: center;
            text-align: center;
            padding: 0 15px;
        }

        a{
            color: #00a099;
            transition: transform 0.3s ease-in-out;

            &:hover{
                transform: translateY(10px);
            }
        }

    </style>

</head>
<body>
    <h1>YOUR FORM WAS SUBMITTED...!</h1>
    <br><br>
    <h3>OUR TEAM WILL CONTACT YOU SOON.</h3>
    <br><br>
    <a href="http://127.0.0.1:5500/index.html">Go Back</a>
</body>
</html>