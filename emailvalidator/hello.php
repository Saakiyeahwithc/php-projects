<html>

<body>
    Hello! <?php echo $_POST["name"]; ?>
    <br>
    <?php
    $email = ($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
    } else {
        echo "Your email address is: " . $email;
    }
    ?>
</body>

</html>




<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Page</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['name']) && isset($_POST['email'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            echo "<h1>Hello, $name!</h1>";
            echo "<p>Your email address is: $email</p>";
        } else {
            echo "<p>Please fill out the form.</p>";
        }
    } else {
        echo "<p>Invalid request method.</p>";
    }
    ?>
</body>

</html> -->