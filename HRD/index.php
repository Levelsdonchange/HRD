<!DOCTYPE html>
<html lang="en">
<head>
  <title>GHS RECRUITMENT 2019</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">   
 <script src="js/jquery.js" type="text/javascript"></script> 

<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>    
    
</head>
<body>  
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" style="background-color:rgb(60,60,60);" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="glyphicon glyphicon-hand-down" style="color:orange;"></span>
        <span class="sr-only">Toggle navigation</span>
    </button>       
        <a class="navbar-brand" href="index.php" style="color:orange;" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#FFA500'"><b>GHS-HRD</b></a>
    </div>  
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">       
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php" style="color:orange" class="glyphicon glyphicon-home" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#FFA500'"></a></li>
      
        
      <li style="color:orange; float:right"><a href="#" id ="butn" style=" color:orange; " onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#FFA500'" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Sign In</a></li>  
      
      <li style="color:orange"><a href="#" id ="butn" style=" color:orange; float:right" onMouseOver="this.style.color='#fff'" onMouseOut="this.style.color='#FFA500'" data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Admin Login</a></li>    
         
    </ul>
  </div>
    </div>
</nav>

    
<!--sign in modal start-->
<div class="modal fade" id="myModal" style="padding-bottom:15%">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
<div class="modal-body">
<form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email address" class="form-control input-md" type="email">
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
  </div>
</div>

      <div class="modal-footer">
        <center><button type="submit" class="btn btn-primary">Log in</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><br><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1" style="margin:0% 0% 0% 0%;">
<div class="row"><br>

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins --> 
    
<form class="form-horizontal" name="form" action="signup.php" onSubmit="return validateForm()" method="POST">
<!-- Text input-->
<div class="form-group">
  <center><label class="col-md-11 control-label" for="nam">NB: Please signup before you proceed to sign in</label></center>  
</div>
    
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your full name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select your gender</option>
  <option>Male</option>
  <option>Female</option> </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email address" class="form-control input-md" type="email">
  </div>
</div>
    
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>    



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Confirm password" class="form-control input-md" type="password">
    
  </div>
</div>
    
  
    
<?php if(@$_GET['q7'])
{ echo'<p style="color:green;font-size:15px;">'.@$_GET['q7'];}?>
    
    
<?php if(@$_GET['q8'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q8'];}?>
    
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="Sign Up" class="btn btn-primary"/>
  </div>
</div>
</form>
</div><!--col-md-6 end-->
</div></div>
<!--container end-->
    
 


<!--Modal for admin login-->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<center><input type="submit" name="login" value="Login" class="btn btn-primary" />
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button></center>

</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->
    
    

  

</body>
</html>
