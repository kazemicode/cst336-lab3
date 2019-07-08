
  // VARIABLES
  var usernameAvailable;
  var isValid;
  var zipFound = false;
    
  // LISTENERS  
  $("#zip").on("change", function(){
    //alert($("#zip").val());
     $.ajax({
      method: "GET",
      url: "https://cst336.herokuapp.com/projects/api/cityInfoAPI.php",
      dataType: "json",
      data:  {"zip" : $("#zip").val() },
      success: function(result, status){
         //alert(result);
        if(result){
          zipFound = true;
          $("#city").html(result.city);
          $("#latitude").html(result.latitude);
          $("#longitude").html(result.longitude);
        }
        else{
          // invalid zip
            $("#zipStatus").html("Invalid zip.");
            $("#zipStatus").css("color", "red");
            zipFound = false;
        }    
    }
    }); // ajax
  }); // zip
    
  $("#state").on("change", function(){
    $.ajax({
      method: "GET",
      url: "https://cst336.herokuapp.com/projects/api/countyListAPI.php",
      dataType: "json",
      data: {"state": $("#state").val() },
      success: function(result, status){
        //alert(result[0].county);
        $("#county").html("<option>Select One</option>")
        for(let i=0; i < result.length; i++)
          {
            $("#county").append("<option>" + result[i].county + "</option>");
          }
      }
           
    }); // ajax
  }); // state
    
    $("#username").on("change", function() {
      //alert($("#username").val());
      $.ajax({
        method: "GET",
        url: "https://cst336.herokuapp.com/projects/api/usernamesAPI.php",
        dataType: "json",
        data: {"username": $("#username").val() },
        success: function(result, status) {
          usernameAvailable = result.available;
          if(usernameAvailable){
            // username is available
            $("#usernameStatus").html("Username available.");
            $("#usernameStatus").css("color", "green");
          }
          else{
            // username is already taken
            $("#usernameStatus").html("Username already taken.");
            $("#usernameStatus").css("color", "red");
            
          }
        }
      }); // ajax
    }); // username 

$("#passwordAgain").on("change", function() {
      if($("#password").val() != $("#passwordAgain").val()){
          isValid = false;
        // console.log("passwords don't match");
          $("#passwordAgainStatus").html("Passwords do not match.");
          $("#passwordAgainStatus").css("color", "red");
       }
    }); // username 
    
    $("#signupForm").on("submit", function(event){
      console.log("hi");
      if(!isFormValid())
        {
          event.preventDefault();
        }
      console.log(isValid);
    });


    
    // FUNCTIONS
    function loadStates(){
    $.ajax({
       method: "GET",
      url: "https://cst336.herokuapp.com/projects/api/state_abbrAPI.php",
      dataType: "json",
      data:  {"usps" : $("#state").val() },
      success: function(result, status){
     //alert(result[0].usps);
        $("#state").html("<option>Select One</option>")
        for(let i=0; i < result.length; i++)
          {
            $("#state").append("<option>" + result[i].usps + "</option>");
          }
    }
    });
  }
    
    function isFormValid()
    {
      //console.log("checking validity");
      isValid = true;
      if(!usernameAvailable || !zipFound) // cannot register if username or zip is invalid
        {
          //console.log("unavailable");
          isValid = false;
        }
      if($("#username").val().length == 0) // username field can't be blank
        {
         // console.log("username required");
          isValid = false;
          $("#usernameStatus").html("Username is required.");
          $("#usernameStatus").css("color", "red");
        }
       if($("#password").val() != $("#passwordAgain").val()){ // passwords must match
          isValid = false;
        // console.log("passwords don't match");
          $("#passwordAgainStatus").html("Passwords do not match.");
          $("#passwordAgainStatus").css("color", "red");
       }
       if($("#password").val().length < 6) // username must be 6 chars or more
        {
          isValid = false;
          $("#passwordAgainStatus").html("Password must be at least 6 characters.");
          $("#passwordAgainStatus").css("color", "red");
        }
      return isValid;
    }
   