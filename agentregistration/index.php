

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Registration</title>
    <link rel="icon" type="image/x-icon" href="../images/India-Unbound-logo.png">
    <link href="https://fonts.cdnfonts.com/css/samsung-sans-4" rel="stylesheet">
    <link rel="stylesheet" href="../css/style_form.css">
    
</head>
<body>
    
        <?php
            require_once('../index header.php');
        ?>
   
    <div class="form-container">
        <h1>Property Registration Form</h1>
        <form >
            <h2>Owner Information</h2>
            <label for="owner_name" class="property_label">Owner Name:</label>
            <input type="text" id="owner_name" name="name" required>

            <label for="owner_email" class="property_label">Owner Email:</label>
            <input type="email" id="owner_email" name="email" required>

            <label for="owner_address" class="property_label">Owner Address:</label>
            <textarea id="owner_address" name="owner_address" required></textarea>

            <h2>Property Details</h2>
            <label for="property_address" class="property_label">Property Address:</label>
            <input type="text" id="property_address" name="property_address" required>

            <label for="property_type" class="property_label">Property Type:</label>
            <select id="property_type" name="property_type">
            <option value="residential">Residential</option>
            <option value="commercial">Commercial</option>
            </select>

            <h2>Document Upload</h2>
            <input type="file" name="title_deed" id="title_deed">
            <input type="file" name="property_tax" id="property_tax">

            <input type="submit" value="Submit">
        </form>
    </div>
    <div id="notification" class="notification hidden">
        <p id="notificationText"></p>
        <button onclick="hideNotification()">OK</button>
    </div>
    <div id="notification_pass" class="notification_pass hidden">
        <p id="notificationText_pass"></p>
        <button onclick="hideNotification_pass()" class="button_pass">OK</button>
    </div>

    <script>
        function submitForm() {
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const property_address = document.getElementById('property_address').value;
        const owner_address = document.getElementById('owner_address').value;
        const contact = document.getElementById('contact').value;
        const notification = document.getElementById('notification');
        const notification_pass = document.getElementById('notification_pass');
        const notificationText = document.getElementById('notificationText');
        const notificationText_pass = document.getElementById('notificationText_pass');

        if (name === '') {
            notificationText.textContent = 'Field cannot be empty!';
            notification.classList.remove('hidden');
        } 
        else if (owner_address === '') {
            notificationText.textContent = 'Field cannot be empty!';
            notification.classList.remove('hidden');
        } 
        else if (contact === '') {
            notificationText.textContent = 'Field cannot be empty!';
            notification.classList.remove('hidden');
        } 
        else if (email === '') {
            notificationText.textContent = 'Field cannot be empty!';
            notification.classList.remove('hidden');  
        }
        else if (property_address === '') {
            notificationText.textContent = 'Field cannot be empty!';
            notification.classList.remove('hidden');
        }
        else{
            notificationText_pass.textContent = 'Form submitted successfully!';
            notification_pass.classList.remove('hidden');
        }
        }

        function hideNotification() {
            const notification = document.getElementById('notification');
            notification.classList.add('hidden');
        }
        function hideNotification_pass() {
            const notification_pass = document.getElementById('notification_pass');
            notification_pass.classList.add('hidden');
        }
    </script>
    <footer> 
        <?php
             require_once('../index footer.php');
         ?>
    </footer>
</body>
</html>






<!-- 
<form id="agentRegistrationForm">
    <h2>Agent Registration</h2>
  
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" required>
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  
    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required>
  
    <label for="agency">Agency Name:</label>
    <input type="text" id="agency" name="agency">
  
    <label for="licenseNumber">Real Estate License Number:</label>
    <input type="text" id="licenseNumber" name="licenseNumber" required>
  
    <label for="licenseState">License State:</label>
    <select id="licenseState" name="licenseState">
      <option value="">Select State</option>
      </select>
  
    <label for="address">Street Address:</label>
    <input type="text" id="address" name="address" required>
  
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required>
  
    <label for="state">State:</label>
    <select id="state" name="state">
      <option value="">Select State</option>
      </select>
  
    <label for="zip">Zip Code:</label>
    <input type="text" id="zip" name="zip" required>
  
    <label for="experience">Years of Experience:</label>
    <input type="number" id="experience" name="experience">
  
    <label for="specialization">Specialization:</label>
    <input type="text" id="specialization" name="specialization">
  
    <input type="checkbox" id="terms" name="terms" required>
    <label for="terms">I agree to the terms and conditions.</label>
  
    <button type="submit">Register</button>
  </form>
   -->