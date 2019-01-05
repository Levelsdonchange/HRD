<!DOCTYPE html>
<?php  session_start(); ?>
<html lang="en">
<head>
  <title>GHS RECRUITMENT 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main1.css">    
  <style>
    
      .navbar {
       min-height: 40px;
      }
    
  </style>    
<script type="text/javascript"> 
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
</script>
   <script>
       window.load=$( document ).ready(function() {
	
	 $.ajax({
                type:'POST',
                url:'countryAjaxData.php',
                success:function(html){
                    $('#region').html(html);
                
                                      }
                   }); 
				   
				    });  
					
					
				   $( document ).ready(function() {
					   
					   $('#region').on('change',function(){//change function on country to display all state 
        var regionID = $(this).val();
        if(regionID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'region_id='+regionID,
                success:function(html){
                    $('#district').html(html);
                    
                                      }
                   }); 
                      }else{
                           $('#district').html('<option value="">Select region first</option>');
                    
                           }
    });
    
    $('#district').on('change',function(){//change state to display all city
        var districtID = $(this).val();
        if(districtID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'district_id='+districtID,
                success:function(html){
                   $('#facility').html(html);
                                      }
                   }); 
                    }else{
                           $('#facility').html('<option value="">Select district first</option>');
                    
                           }
    });
                       
     $('#facility').on('change',function(){//change state to display all facility
        var facilityID = $(this).val();
        if(facilityID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'facility_id='+facilityID,
                success:function(html){
                   
                                      }
                   }); 
                    }
    });
	
	});
	 
</script>    
</head> 
<body>
  

 
      
      

  
<div class="container">
    <div class="panel" style="margin:1% 5% 5% 5%">
    <span class="login100-form-avatar">
        <center><a href="index.php"><img src="image/ghslogo.jpg" alt="GHS" style="width: 10%;"></a></center>
        <center><h3 style="font-size: 27px; color: green;">APPLICATION FOR PERMANENT APPOINTMENT IN THE GHANA HEALTH SERVICE</h3></center>
    </span>

     <?php
        include_once 'dbConnection.php';
          if(!(isset($_SESSION['email']))){
        header("location:home.php");

        }
        else
        {
        $name = $_SESSION['name'];
        $email=$_SESSION['email'];

        include_once 'dbConnection.php';
        
        echo '<center><b><h3 style="font-size: 20px;"> Hello '.$name.', Welcome to GHS Recruitment Portal for 2019<br></h3></b></center><br><br>';    
        }?> 
    <form method="POST" id = "form" class="form-horizontal" action="process.php">
<div class="form-group">
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="grade">Grade:</label>
    <select id="grade" name="grade" placeholder="Enter your grade" class="form-control input-md" >
    <option>Select your grade</option>
    <option>Medical Officer (General Practitioner)</option>
    <option>Medical Officer (Dental Surgeon)</option>
    <option>Technical Officer Community Health (Nutrition)</option>
    <option>Technical Officer Community Health (Disease Control)</option>
    <option>Technical Officer (Health Information)</option>
    <option>Technical Officer (Health Promotion)</option>
    <option>Technical Officer (Medical Laboratory Technology)</option>
    <option>Technical Officer (Dental Surgery)</option>
    <option>Technical Officer (Dental Technology)</option>    
    </select>
  </div>
</div>  
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="institution">Institution Attended:</label>
    <input id="institution" name="institution" placeholder="Enter name of institution attended" class="form-control input-md" type="text">
  </div>
</div>   
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="location">Location of Institution:</label>
    <select id="location" name="location" placeholder="Enter the location of institution" class="form-control input-md" >
    <option>Select location</option>
    <option>Ashanti</option>
    <option>Brong Ahafo</option>
    <option>Central</option>
    <option>Eastern</option>
    <option>Greater Accra</option>
    <option>Northern</option>
    <option>Upper East</option>
    <option>Upper West</option>
    <option>Volta</option> 
    <option>Western</option>     
    </select>
  </div>
</div><br><br>      
<center><h3 style="font-size: 24px; color: green;">Section A – Personal data</h3></center><br>
        
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 5% 1% 22%">
    <label for="surname">Surname:</label>
    <input id="surname" name="surname" placeholder="Enter your surname" class="form-control input-md" type="text">    
  </div>
      
</div> 
       
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="othername">Othernames:</label>
    <input id="othername" name="othername" placeholder="Enter your othernames" class="form-control input-md" type="text">    
  </div>  
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="previousname">Previous name(s) if changed: </label>
    <input id="previousname" name="previousname" placeholder="Enter previous name if you changed name" class="form-control input-md" type="text"> 
  </div>   
</div>  
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="DOB">Date of Birth:</label>      
      <input type="date" id="DOB" placeholder="Date of Birth" name="DOB" class="form-control input-md">
     </div>
</div>
<div class="form-group">
    <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="postal">Permanent Postal Address:</label>
      <textarea class="form-control input-md" rows="3" id="postal" name="postal"></textarea>
    </div>    
</div>     
<div class="form-group">
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="gender">Gender:</label>  
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option>Select your gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option> </select>
  </div>
</div>        
<div class="form-group">
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
   <label for="email">Email:</label>      
    <input id="email" name="email" placeholder="Enter your email address" class="form-control input-md" type="email">
  </div>
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="mob">Contact number:</label>
    <input id="mob" name="mob" placeholder="Enter your contact number" class="form-control input-md" type="number">    
  </div>  
</div>         
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="dadname">Father's name:</label>
    <input id="dadname" name="dadname" placeholder="Enter your father's name" class="form-control input-md" type="text">    
  </div>  
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="dadoccupation">Father's occupation:</label>
    <input id="dadoccupation" name="dadoccupation" placeholder="Enter your father's occupation" class="form-control input-md" type="text">    
  </div>  
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="momname">Mother's name:</label>
    <input id="momname" name="momname" placeholder="Enter your mother's name" class="form-control input-md" type="text">    
  </div>  
</div>         
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="momoccupation">Mother's Occupation:</label>
    <input id="momoccupation" name="momoccupation" placeholder="Enter your mother's occupation" class="form-control input-md" type="text">    
  </div>  
</div>  
<div class="form-group">
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="marital">Marital Status:</label>  
    <select id="marital" name="marital" placeholder="Enter your marital status" class="form-control input-md" >
   <option>Select your marital status</option>
  <option value="Never married">Never married</option>
  <option value="married">Married</option> 
  <option value="Divorced">Divorced</option>         
  <option value="Separated">Separated</option>       
  </select>
  </div>
</div>
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="nok">Next of Kin:</label>
    <input id="nok" name="nok" placeholder="Enter name of next of kin" class="form-control input-md" type="text">    
  </div>  
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="renok">Relationship to next of Kin:</label>
    <input id="renok" name="renok" placeholder="Enter your relationship to next of Kin" class="form-control input-md" type="text">    
  </div>  
</div>
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="econtact">Emergency contact:</label>
    <input id="econtact" name="econtact" placeholder="Enter name of person to contact in case of emergency" class="form-control input-md" type="text">    
  </div>  
</div>  
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="relcontact">Relationship to contact person:</label>
    <input id="relcontact" name="relcontact" placeholder="Enter your relationship to contact person" class="form-control input-md" type="text">   
  </div>  
</div> 
<div class="form-group">
    <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="conaddress">Contact Address:</label>
      <textarea rows="3" id="conaddress" name="conaddress" class="form-control input-md"></textarea>
    </div>    
</div>         
<center><h3 style="font-size: 24px; color: green;">Section B – Educational Background</h3></center>
<center><b><h3 style="font-size: 15px; color: black;">Kindly indicate your educational history by starting from your last place of study.</h3></b></center>
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="level">Level:</label>
    <input id="level" name="level" placeholder="Enter Level" class="form-control input-md" type="text">    
  </div>  
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="nos">Name of school:</label>
    <input id="nos" name="nos" placeholder="Enter name of school" class="form-control input-md" type="text">    
  </div>  
</div> 
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="DOE">Date of entry:</label>      
      <input type="date" class="form-control input-md" id="DOE" name="DOE" placeholder="Date of entry">
     </div>
</div>
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="DOC">Date of completion:</label>      
      <input type="date" class="form-control input-md" id="DOC" name="DOC" placeholder="Date of completion">
     </div>
</div><br>  
        
<center><h3 style="font-size: 24px; color: green;">Section C – Evidence of Registration with Relevant Regulatory Body</h3></center>
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="regbody">Regulatory Body:</label>
    <select id="regbody" name="regbody" placeholder="Select Regulatory Body" class="form-control input-md" >
    <option>Select Regulatory Body</option>
    <option>Medical and Dental Council</option>    
    </select>
  </div>
</div> 
<div class="form-group" >
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="regpin">Registration pin:</label>
    <input id="regpin" name="regpin" placeholder="Enter registration pin" class="form-control input-md" type="text">    
  </div>  
</div>         
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="regdate">Date Registered:</label>      
      <input type="date" class="form-control input-md" id="regdate" name="regdate" placeholder="Date registered">
     </div>
</div>
        
<center><h3 style="font-size: 24px; color: green;">Section D – Choice of Placement</h3></center>
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="region">Region of Choice:</label>      
      <select name="region" id="region" data-live-search="true" class="chosen selectpicker form-control" required>
      <option value="">Select Region</option>
      </select>
     </div>
</div>    
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="district">District of Choice:</label>      
      <select class="selectpicker form-control" name="district" id="district" standard title="Select an Option" autofocus="autofocus" required>
      <option value="">Select District</option>
      </select>
     </div>
</div>
<div class="form-group">
      <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="facility">Facility of Choice:</label>      
      <select class="selectpicker form-control" name="facility" id="facility" standard title="Select an Option" autofocus="autofocus" required>
      <option value="">Select facility</option>
      </select>
     </div>
</div>        
        
        
<center><h3 style="font-size: 24px; color: green;">Section E – Medical History</h3></center>
<div class="form-group">
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="disability">Do you have any disability?</label>  
    <select id="disability" name="disability" placeholder="Do you have any disability?" class="form-control input-md" >
   <option>--select--</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>       
  </select>
  </div>
</div>        
<div class="form-group">
  <div class="col-md-6" style="margin: 1% 1% 1% 22%">
    <label for="medcon">Do you have any medical condition that requires special management?</label>  
    <select id="medcon" name="medcon" placeholder="Do you have any disability?" class="form-control input-md" >
   <option>--select--</option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>       
  </select>
  </div>
</div>   
<div class="form-group">
    <div class="col-md-6" style="margin: 1% 1% 1% 22%">
      <label for="spemedcon">If yes specify:</label>
      <textarea class="form-control input-md" rows="2" id="spemedcon" name="spemedcon"></textarea>
    </div>    
</div>  
<center><h3 style="font-size: 24px; color: green;">Declaration and endorsement by applicant</h3></center> 
<div class="col-md-10" style="margin: 1% 1% 1% 6%">
<b><h3 style="font-size: 15px; color: black;">I declare that the information I have provided in this application form is accurate and I hereby willingly offer myself to be considered for permanent appointment and posting to wherever my services will be needed.</h3></b> 
<div class="checkbox">
  <label><input type="checkbox" value=""> I Agree</label>
</div>    
</div>
<div class="col-md-6" style="margin: 0% 0% 0% 41%">
<p>............................</p>
        </div>   
<div class="col-md-6" style="margin: 1% 1% 1% 39%">        
<b><h3 style="font-size: 15px; color: black;">Signature of applicant</h3></b>
</div>
 
<div class="col-md-6" style="margin: 1% 1% 1% 41%">        
<p>............................</p>
</div>
<div class="col-md-6" style="margin: 1% 1% 3% 45%">         
<b><h3 style="font-size: 15px; color: black;">Date</h3></b> 
    
</div><br><br>    
            
<input type="submit" style="margin-left:45%; margin-bottom:2%" value="Submit" class="btn btn-success" />   
    </form>
      
    
    </div>
      
</div>
    

    
    

</body>
</html>
