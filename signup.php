<!-- <?php
// Database configuration
$host = 'localhost';
$db = 'signup_db';
$user = 'root';
$pass = '';
$port = 3306;

// Create connection to MySQL
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $username = htmlspecialchars(trim($_POST['username']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $number = htmlspecialchars(trim($_POST['number']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Check if all fields are filled
    if ($username && $email && $number && $message) {
        // Prepare SQL query to insert data
        $sql = "INSERT INTO users (username, email, number, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("ssss", $username, $email, $number, $message);

            // Execute the query
            if ($stmt->execute()) {
                echo "<p class='success'>Your form has been successfully submitted. We appreciate your interest and will get back to you shortly. $username</p>";
            } else {
                echo "<p class='error'>Error: " . $stmt->error . "</p>";
            }

            // Close the statement
            $stmt->close();
        } else {
            echo "<p class='error'>Error preparing statement: " . $conn->error . "</p>";
        }
    } else {
        echo "<p class='error'>Please fill out all required fields correctly.</p>";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
    
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
            text-align: center;
        }

        .thank-you-container {
            
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .thank-you-container h1 {
            font-size: 2.5em;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .thank-you-container p {
            font-size: 1.1em;
            color: #666;
            margin-bottom: 30px;
        }
        
        /* Styling for the success message */
.success {
    color: #28a745; /* Green color */
    font-size: 1.2rem; /* Font size */
    font-weight: 600; /* Bold text */
    background-color: #d4edda; /* Light green background */
    border: 1px solid #c3e6cb; /* Green border */
    padding: 10px 15px; /* Padding inside the message */
    border-radius: 5px; /* Rounded corners */
    margin: 20px 0; /* Space around the message */
    text-align: center; /* Center the text */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}


        .thank-you-container .button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1em;
            color: #fff;
            background-color: #4CAF50;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .thank-you-container .button:hover {
            background-color: #43a047;
        }

    </style>
</head>
<body>

<div class="thank-you-container">
    <h1>Thank You!</h1>
    <p >Your form has been successfully submitted. We appreciate your interest and will get back to you shortly.</p>
    <a href="index.html" class="button">Go Back to Home</a>
</div>

</body>
</html>

 -->



 <?php
// Database configuration
$host = 'localhost';
$db = 'signup_db';
$user = 'root';
$pass = '';
$port = 3306;

// Create connection to MySQL
$conn = new mysqli($host, $user, $pass, $db, $port);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $username = htmlspecialchars(trim($_POST['username'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $number = htmlspecialchars(trim($_POST['number'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Check if all fields are filled
    if ($username && $email && $number && $message) {
        // Prepare SQL query to insert data
        $sql = "INSERT INTO users (username, email, number, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        
        if ($stmt) {
            // Bind parameters
            $stmt->bind_param("ssss", $username, $email, $number, $message);

            // Execute the query
            if ($stmt->execute()) {
                $success_message = "Message sent! Thank you, $username.";
            } else {
                $error_message = "Error: " . $stmt->error;
            }

            // Close the statement
            $stmt->close();
        } else {
            $error_message = "Error preparing statement: " . $conn->error;
        }
    } else {
        $error_message = "Please fill out all required fields correctly.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f7f7;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #333;
            text-align: center;
            padding: 20px;
        }

        .thank-you-container {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .thank-you-container h1 {
            font-size: 2.5em;
            color: #050505;
            margin-bottom: 20px;
        }

        .thank-you-container p {
            font-size: 1.1em;
            color: #212121;
            margin-bottom: 30px;
        }

        .success{
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            background-color: #daa520;
            border: 1px solid #c3e6cb;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .error {
            color: #d9534f;
            font-size: 1.2rem;
            font-weight: 600;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .thank-you-container .button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 1em;
            color: #fff;
            background-color:#212121;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .thank-you-container .button:hover {
            background-color: #444;
        }

    </style>
</head>
<body>
<div class="thank-you-container">
    <?php if (!empty($success_message)) { ?>
        <p class="success"><?php echo $success_message; ?></p>
    <?php } elseif (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } ?>
    <h1>Thank You!</h1>
    <p class="para">Your form has been successfully submitted. We appreciate your interest and will get back to you shortly.</p>
    <a href="index.html" class="button">Go Back to Home</a>
</div>
</body>
</html>

