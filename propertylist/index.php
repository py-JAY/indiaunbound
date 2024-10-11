<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="images/India-Unbound-logo.png">
  <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
  <title>Property Listing Form</title>
  <link rel="stylesheet" href="../css/style_collection.css">
</head>
<body>
  <header>
    <?php
        require_once('../index header.php');
    ?>
  </header>
  <main>
    <div class="form-container">
      <h1 class="collection-heading">Property Listing Form</h1>
      <form action="index.php" method="POST">
        <fieldset>
          <legend>Property Details</legend>
          <div class="form-group">
            <label for="propertyType">Property Type</label>
            <select id="propertyType" name="propertyType"required>
              <option value="">Select Property Type</option>
              <option value="residential">Residential</option>
              <option value="commercial">Commercial</option>
            </select>
          </div>
          <div class="form-group">
            <label for="propertyLocation">City</label>
            <input class="input" type="text" name="city" placeholder="Enter Your City" required>
          </div>
         <div class="form-group">
            <label for="propertyArea">Area (sq. ft.)</label>
            <input class="input" type="number" name="area" placeholder="Area" required>
          </div> 
          <div class="form-group">
            <label for="propertyPrice">Price:</label>
            <input class="input" type="text" name="price" placeholder="Enter price" required>
          </div>
          <div class="form-group">
            <label for="propertyDescription">Full Address</label>
            <textarea id="propertyDescription" name="full_address"required></textarea>
          </div>
        </fieldset>

        <fieldset>
          <legend >Property Features</legend>
          <div class="form-group">
            <label for="bedroom">Bedrooms</label>
            <input class="input" type="number" name="bedroom" required>
          </div>
          <div class="form-group">
            <label for="hall">Hall</label>
            <input class="input" type="number" name="hall" required>
          </div>
          <div class="form-group">
            <label for="kitchen">Kitchen</label>
            <input class="input" type="number" name="kitchen" required>
          </div>
        </fieldset>

        <fieldset>
          <legend>Amenities</legend>
          <div class="form-group">
            <label for="amenities">Amenities</label>
            <div>
              <span for="amenity1">Pool</span>
              <input type="checkbox" id="amenity1" name="pool">
              <br>
              <span for="amenity2">Gym</span>
              <input type="checkbox" id="amenity2" name="gym">
              <br>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Images</legend>
          <div class="form-group">
            <label for="propertyImage1">Image 1</label>
            <input class="input" type="file" name="image1" required>
          </div>
          <div class="form-group">
            <label for="propertyImage2">Image 2</label>
            <input class="input" type="file" name="image2" required>
          </div>
        </fieldset>

        <button type="submit">Submit</button>
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
      $propertyType = $_POST["propertyType"];
      $city = $_POST["city"];
      $area = $_POST["area"];
      $price = $_POST["price"];
      $full_address = $_POST["full_address"];
      $bedroom = $_POST["bedroom"];
      $hall = $_POST["hall"];
      $kitchen = $_POST["kitchen"];
      $pool = isset($_POST['pool']) ? 1 : 0;
      $gym = isset($_POST['gym']) ? 1 : 0;  
      $image1 = $_POST["image1"];
      $image2 = $_POST["image2"];
  
      $stmt = $conn->prepare("INSERT INTO `property_list` (`property_Type`,`City`, `area`, `price`, `full_address`, `bedroom`, `hall`, `kitchen`, `pool`, `gym`, `image1`, `image2`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
      $stmt->bind_param("ssiisiiiiibb", $propertyType, $city, $area, $price, $full_address, $bedroom, $hall, $kitchen, $pool, $gym, $image1, $image2);

      if ($stmt->execute()) {
        echo '<script>alert("Registred Successful\nIndia Unbound will contact you shortly");</script>';
      } else {
          echo '<script>alert("Something went wrong !");</script>'. $stmt->error;
      }
      $stmt->close();
      $conn->close();
    }       
  ?>
  </main>
  <footer> 
    <?php
          require_once('../index footer.php');
      ?>
  </footer>
  
</body>
</html>