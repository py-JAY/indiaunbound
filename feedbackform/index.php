

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback Form</title>
    <link rel="icon" type="image/x-icon" href="../images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_feedback.css">
    
</head>
<body>
    <header>
        <?php
            require_once('../index header.php');
        ?>
   </header>
    <main>
    <div class="form-container">
        <h1>Share Your Feedback</h1>
        <form id="myForm" method="post">
        <!-- <form action="https://api.web3forms.com/submit" method="POST"> -->
            <!-- <input type="hidden" name="access_key" value="21fea862-5a44-4d57-bd8e-2953e7e5a7dc"> -->

            <!-- <label for="myInput">Enter something:</label>
            <input type="text" id="myInput" name="myInput"> -->
            <label for="name">Name:</label>
            <input type="text"  name="name" required>

            <label for="email">Email:</label>
            <input type="email"  name="email" required>

            <label for="contact">Phone no:</label>
            <input type="number" maxlength="10"  name="contact" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <!-- <button type="submit">Submit</button> -->
            <!-- <button type="button" class="button_pass">Submit</button>
             0 -->
             <button class="button_pass">submit</button>
        </form>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "india_unbound";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            $message = $_POST["message"];
            
        
            $stmt = $conn->prepare("INSERT INTO `feedback_form` (`name`, `email`, `contact_no`, `messege`) VALUES (?,?,?,?)");
            $stmt->bind_param("ssis", $name, $email, $contact, $message);                      
                if ($stmt->execute()) {
                    // echo "Booking Successful";
                    echo'<script src="formSuccess.js"></script>';
                } else {
                    echo'<script src="formError.js"></script>';
                }
            $stmt->close();
        }
        $conn->close();
    ?>
    </main>
    <footer> 
        <?php
             require_once('../index footer.php');
         ?>
    </footer>
</body>
</html>
