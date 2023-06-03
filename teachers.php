<!DOCTYPE html>
<html>
<head>
  <title>Teacher Registration</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:black;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      padding: 0;
    }
    .container {
      width: 40%;
      background-color:#d0dbd2;
      padding: 100px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
      text-align: center;
      margin-bottom: 30px;
      margin-top: 200px;
    }
    input[type="text"],
    input[type="email"],
    input[type="date"],
    input[type="password"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .required {
      color: red;
      margin-left: 5px;
    }
    .gender-group {
      margin-bottom: 20px;
    }
    .gender-group label {
      display: inline-block;
      margin-right: 10px;
    }
    .btn-container {
      text-align: center;
    }
    .btn-container button {
      padding: 10px 20px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
      margin: 10px;
    }
    .btn-container button:hover {
      background-color: #45a049;
    }
  </style>
  
  <script>
  
    function initialize() {
      var countryInput = document.getElementById('country');
      var stateInput = document.getElementById('state');

      var autocompleteCountry = new google.maps.places.Autocomplete(countryInput, {
        types: ['(regions)']
      });

      var autocompleteState = new google.maps.places.Autocomplete(stateInput, {
        types: ['(regions)']
      });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
</head>
<body>
  <div class="container">
    <h1>Teacher Registration</h1>
    <form action="teachers.php" method="post">
      <input id="name" name="name" type="text" placeholder="Name*" required>
      <input type="date" name="dob" placeholder="Date of Birth*" required>
      <input type="text" name="phone" placeholder="Phone*" required>

      <div class="gender-group">
        <label for="male">Male</label>
        <input type="radio" id="male" name="gender" required>
        <label for="female">Female</label>
        <input type="radio" id="female" name="gender" required>
      </div>

      <input type="email" name="email" placeholder="Email*" required>
      <input type="text" name="education" placeholder="Education*" required>
      <input type="text" name="subject" placeholder="Likely Subject">
      <input type="text" name="experience" placeholder="Experience">
      <input type="text" name="pre_workplace" placeholder="Previous Workplace">

      <input type="text" name="country" placeholder="Country*" required>
      <input type="text" name="state" placeholder="State*" required>

      <input type="text" name="city" placeholder="City">
      <input type="text" name="village" placeholder="Town/Village">
      <input type="password" name="password" placeholder="Your Password*" required>
      <input type="password" name="repassword" placeholder="Re-Enter your Password*" required>

      <div class="btn-container">
        <button type="submit">Register</button>
        <button type="reset">Reset</button>
      </div>
    </form>
  </div>
</body>
</html>
