<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign-up Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link  href="css/styles.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Roboto&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body onload="loadStates()" class="d-flex flex-column">
  <div id="page-content">
    <div class="container text-left">
      <div class="row justify-content-left">
        <div class="col-md-7">
          <h1 class="font-weight-light mt-4 text-dark" id="greets">Register</h1>
      <hr class="my-4">

      <!--Begin form-->
      <form id="signupForm" method="POST" action="welcome.php">
        <!--First Name-->
        <div class="form-group">
          <label for="fName">First Name:</label> 
          <input type="text" name="fName" id="fName"></div>
         <!--Last Name-->
        <div class="form-group">
          <label for="lName">Last Name:</label> 
          <input type="text" name="lName" id="lName"></div>
        
         <!--Gender-->
        <div class="form-group">
          <label for="gender">Gender:</label> 
          <div class="form-check-inline">
          <label class="form-check-label" for="male">
            <input type="radio" class="form-check-input" id="male" name="gender" value="m" >Male
            </label></div>
          <div class="form-check-inline">
          <label class="form-check-label" for="female">
            <input type="radio" class="form-check-input" id="female" name="gender" value="f" >Female
            </label></div>
         <div class="form-check-inline">
          <label class="form-check-label" for="non">
            <input type="radio" class="form-check-input" id="non" name="gender" value="n" >Non-Binary
            </label></div>
          </div>

         <!--Zipcode-->
          <div class="form-group">
          <label for="zip">Zipcode:</label> 
          <input type="text" name="zip" id="zip">
          <span id="zipStatus"></span></div>
        
         <!--City, Latitude, and Longitude (autofilled)-->
        <div class="form-group">
          City: <span id="city"></span><br></div>
        <div class="form-group">
          Latitude: <span id="latitude"></span></div>
        <div class="form-group">
          Longitude: <span id="longitude"></span></div>
        
        <!--State-->
        <div class="form-group">
        <label for="state">State:</label>
          <select id="state" name="state" id="state"></select><br></div>
        
        <!--County-->
        <div class="form-group">
          <label for="county">Select a County:</label>
          <select id="county"></select></div>
        
        <!--Username-->
        <div class="form-group">
         <label for="username">Desired Username:</label>
          <input type="text" id="username" name="username">
          <span id="usernameStatus"></span></div>
        
        <!--Password & Password Re-entry-->
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password"></div>
        <div class="form-group">
          <label for="passwordAgain">Re-enter password:</label>
          <input type="password" id="passwordAgain" name="passwordAgain">
          <span id="passwordAgainStatus"></span></div>
        
        <hr class="my-4">
        <input class="btn btn-dark btn-lg" type="submit" value="Sign up!">
      </form>
      <!--End form -->
    </div> <!--end column-->
  </div> <!--end row-->
 </div> <!--end main container-->
</div> <!--end page-content-->
  
  <!-- Footer -->
 <footer id="sticky-footer" class="py-4 bg-dark text-white font-small">
    <div class="container text-center">
      <img src="img/csumb-logo-white.png" alt="CSUMB logo"> 
      CST 336 Internet Programming 2019&copy; Kazemi 
    </div>
  </footer>
 <!-- End footer -->
  
<!--Javascript source files -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/form.js"></script>
   
</body>

</html>