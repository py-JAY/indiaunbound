<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="images/India-Unbound-logo.png">
  <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
  <title>Property Listing Form</title>
  <link rel="stylesheet" href="css/style_property.css">
</head>
<body>
  <header>
    <?php
        require_once('index header.php');
    ?>
  </header>
  <main class="main">
    <div class="form-container">
      <h1>Property Listing Form</h1>
      <form>
        <fieldset>
          <legend>Property Details</legend>
          <div class="form-group">
            <label for="propertyType">Property Type:</label>
            <select id="propertyType" required>
              <option value="">Select Property Type</option>
              <option value="residential">Residential</option>
              <option value="commercial">Commercial</option>
            </select>
          </div>
          <div class="form-group">
            <label for="propertyLocation">Location:</label>
            <input class="input" type="text" id="propertyLocation" placeholder="City, State, Country" required>
          </div>
          <div class="form-group">
            <label for="propertyArea">Area (sq. ft.):</label>
            <input class="input" type="number" id="propertyArea" required>
          </div>
          <div class="form-group">
            <label for="propertyPrice">Price:</label>
            <input class="input" type="text" id="propertyPrice" placeholder="Enter price" required>
          </div>
          <div class="form-group">
            <label for="propertyDescription">Full Address:</label>
            <textarea id="propertyDescription" required></textarea>
          </div>
        </fieldset>

        <fieldset>
          <legend>Property Features</legend>
          <div class="form-group">
            <label for="bedrooms">Bedrooms:</label>
            <input class="input" type="number" id="bedrooms" required>
          </div>
          <div class="form-group">
            <label for="bathrooms">Bathrooms:</label>
            <input class="input" type="number" id="bathrooms" required>
          </div>
          <div class="form-group">
            <label for="parkingSpaces">Parking Spaces:</label>
            <input class="input" type="number" id="parkingSpaces" required>
          </div>
        </fieldset>

        <fieldset>
          <legend>Amenities</legend>
          <div class="form-group">
            <label for="amenities">Amenities:</label>
            <div>
              <span for="amenity1">Pool</span>
              <input type="checkbox" id="amenity1" value="pool">
              <br>
              <span for="amenity2">Gym</span>
              <input type="checkbox" id="amenity2" value="gym">
              <br>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>Images</legend>
          <div class="form-group">
            <label for="propertyImage1">Image 1:</label>
            <input class="input" type="file" id="propertyImage1" required>
          </div>
          <div class="form-group">
            <label for="propertyImage2">Image 2:</label>
            <input class="input" type="file" id="propertyImage2" required>
          </div>
        </fieldset>

        <button type="submit">Submit</button>
      </form>
    </div>
  </main>
  <footer> 
    <?php
          require_once('index footer.php');
      ?>
  </footer>
</body>
</html>