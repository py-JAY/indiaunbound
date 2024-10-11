<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_ticket.css">
    <title>Book Tickets</title>
</head>

<body>
    <header>
        <?php
            require_once('../index header.php');
        ?>
    </header>
    <main>
        <h2 class="heading">Travel Booking Form</h2>
        <div class="background">
            
            <div class="booking-form">
                <form action="index.php" method="POST">
                    <label for="name">Name :</label>
                    <input type="text" name="name" id="name" required>

                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" required>

                    <!-- <label for="destination">Destination :</label>
                    <input type="text" name="destination" id="destination" required> -->
                    <label for="From">From :</label>
                    <select name="cities_list_departure" id="" class="form_selector" required>
                        <option value="">-Select City-</option>
                        <option value="Mumbai">Mumbai (Greater Mumbai)</option>
                        <option value="Delhi">Delhi (National Capital Territory)</option>
                        <option value="Bengaluru">Bengaluru (Bangalore)</option>
                        <option value="Chennai">Chennai (Madras)</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Kolkata">Kolkata (Calcutta)</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Pune">Pune</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Surat">Surat</option>
                        <option value="Indore">Indore</option>
                        <option value="Patna">Patna</option>
                        <option value="Kochi">Kochi</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="Thane">Thane</option>
                    </select>

                    <label for="To" id="cities_list_arrival_tohide">To :</label>
                    <select name="cities_list_arrival" id="cities_list_arrival_tohide" class="form_selector" required>
                        <option value="">-Select City-</option>
                        <option value="Mumbai">Mumbai (Greater Mumbai)</option>
                        <option value="Delhi">Delhi (National Capital Territory)</option>
                        <option value="Bengaluru">Bengaluru (Bangalore)</option>
                        <option value="Chennai">Chennai (Madras)</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Kolkata">Kolkata (Calcutta)</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Pune">Pune</option>
                        <option value="Jaipur">Jaipur</option>
                        <option value="Lucknow">Lucknow</option>
                        <option value="Kanpur">Kanpur</option>
                        <option value="Nagpur">Nagpur</option>
                        <option value="Surat">Surat</option>
                        <option value="Indore">Indore</option>
                        <option value="Patna">Patna</option>
                        <option value="Kochi">Kochi</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Coimbatore">Coimbatore</option>
                        <option value="Jodhpur">Jodhpur</option>
                        <option value="Thane">Thane</option>
                    </select>

                     <label for="tripType">Trip Type:</label>
                        <select id="tripType" name="tripType" class="form_selector">
                        <option value="one_way">One-Way</option>
                        <option value="round_trip">Round Trip</option>
                    </select>

                    <label for="departure_date">Departure Date :</label>
                    <input type="date" name="departure-date" id="departure-date" required>

                    <div id="returnDateContainer" style="display: none;">
                        <label for="return_date">Return Date :</label><br>
                        <input type="date" name="return-date" id="return-date" >
                    </div>

                    <button type="submit">Book Now</button>
                </form>
            </div>
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
            
            if ($_SERVER['REQUEST_METHOD']== 'POST' && $_POST["tripType"]=="round_trip") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                // $destination = $_POST["destination"];
                $departure_date = $_POST["departure-date"];
                $return_date = $_POST["return-date"];
                $city_departure = $_POST["cities_list_departure"];
                $city_arival = $_POST["cities_list_arrival"];
            
                $stmt = $conn->prepare("INSERT INTO `bookings_round_trip` (`name`, `email`, `departure_date`, `return_date`,`city_departure`,`city_arival`) VALUES (?,?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $name, $email, $departure_date, $return_date, $city_departure, $city_arival);
            
                if ($stmt->execute()) {
                    // echo "Booking Successful";
                    // echo '<script>alert("Booking Successful");</script>';
                    echo'<script src="tripSuccess.js"></script>';
                } else {
                    echo'<script src="tripError.js"></script>';
                }
            
                $stmt->close();
            }
            if ($_SERVER['REQUEST_METHOD']== 'POST' && $_POST["tripType"]=="one_way") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                // $destination = $_POST["destination"];
                $departure_date = $_POST["departure-date"];
                // $return_date = $_POST["return-date"];
                $city_departure = $_POST["cities_list_departure"];
                $city_arival = $_POST["cities_list_arrival"];
            
                $stmt = $conn->prepare("INSERT INTO `bookings_one_way` (`name`, `email`, `departure_date`,`city_departure`,`city_arival`) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $name, $email, $departure_date, $city_departure, $city_arival);
            
                if ($stmt->execute()) {
                    // echo "Booking Successful";
                    echo'<script src="tripSuccess.js"></script>';
                } else {
                    echo'<script src="tripError.js"></script>';
                }
            
                $stmt->close();
            }
            
            $conn->close();
        ?>
    </main>
    <script>
    const tripTypeSelect = document.getElementById('tripType');
    const returnDateContainer = document.getElementById('returnDateContainer');

    tripTypeSelect.addEventListener('change', () => {
      if (tripTypeSelect.value === 'round_trip') {
        returnDateContainer.style.display = 'block';
      } else {
        returnDateContainer.style.display = 'none';
      }
    });
    </script>
    <footer>
        <?php
            require_once('../index footer.php');
        ?>
    </footer>
</body>

</html>