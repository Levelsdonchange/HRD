
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">    
<meta charset="utf-8" />
<title>GHS RECRUITMENT 2019</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<script src="js/bootstrap.min.js"  type="text/javascript"></script>
<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link  rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>    
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>    
</head>
<body>
<header>
<div class="container">
    <center><h1>Results</h1></center>
</div>

    
</header>
	<main>
        
             

<?php 
include_once 'dbConnection.php'; 
ob_start();
$grade = $_POST['grade'];
$grade = stripslashes($grade);
$grade = addslashes($grade);     
$institution = $_POST['institution'];
$institution = stripslashes($institution);
$institution = addslashes($institution);   
$location = $_POST['location'];
$location = stripslashes($location);
$location= addslashes($location);    
$surname = $_POST['surname'];    
$surname = stripslashes($surname);
$surname = addslashes($surname);    
$othername = $_POST['othername'];
$othername = stripslashes($othername);
$othername= addslashes($othername);    
$previousname = $_POST['previousname'];
$previousname = stripslashes($previousname);
$previousname= addslashes($previousname);    
$DOB = $_POST['DOB']; 
$DOB = stripslashes($DOB);
$DOB= addslashes($DOB);    
$postal = $_POST['postal'];
$postal = stripslashes($postal);
$postal= addslashes($postal);    
$gender = $_POST['gender'];
$gender = stripslashes($gender);
$gender = addslashes($gender);    
$email = $_POST['email'];
$email = stripslashes($email);
$email = addslashes($email);    
$mob = $_POST['mob']; 
$mob = stripslashes($mob);
$mob = addslashes($mob);    
$dadname = $_POST['dadname'];
$dadname = stripslashes($dadname);
$dadname = addslashes($dadname);    
$dadoccupation = $_POST['dadoccupation'];
$dadoccupation = stripslashes($dadoccupation);
$dadoccupation = addslashes($dadoccupation);    
$momname = $_POST['momname'];
$momname = stripslashes($momname);
$momname = addslashes($momname);    
$momoccupation = $_POST['momoccupation'];
$momoccupation = stripslashes($momoccupation);
$momoccupation = addslashes($momoccupation);    
$marital = $_POST['marital'];
$marital = stripslashes($marital);
$marital = addslashes($marital);    
$nok = $_POST['nok'];
$nok = stripslashes($nok);
$nok = addslashes($nok);    
$renok = $_POST['renok'];
$renok = stripslashes($renok);
$renok = addslashes($renok);    
$econtact = $_POST['econtact'];
$econtact = stripslashes($econtact);
$econtact = addslashes($econtact);    
$relcontact = $_POST['relcontact'];
$relcontact = stripslashes($relcontact);
$relcontact = addslashes($relcontact);    
$conaddress = $_POST['conaddress'];
$conaddress = stripslashes($conaddress);
$conaddress = addslashes($conaddress);    
$level = $_POST['level'];
$level = stripslashes($level);
$level = addslashes($level);    
$nos = $_POST['nos'];
$nos = stripslashes($nos);
$nos = addslashes($nos);    
$DOE = $_POST['DOE'];
$DOE  = stripslashes($DOE);
$DOE = addslashes($DOE);    
$DOC = $_POST['DOC'];
$DOC = stripslashes($DOC);
$DOC = addslashes($DOC);    
$regbody = $_POST['regbody']; 
$regbody = stripslashes($regbody);
$regbody = addslashes($regbody);    
$regpin = $_POST['regpin'];
$regpin = stripslashes($regpin);
$regpin = addslashes($regpin);    
$regdate = $_POST['regdate'];
$regdate = stripslashes($regdate);
$regdate = addslashes($regdate);
$region = $_POST['region'];
$region = stripslashes($region);
$region = addslashes($region);
$district = $_POST['district'];
$district = stripslashes($district);
$district = addslashes($district);
$facility = $_POST['facility'];
$facility = stripslashes($facility);
$facility = addslashes($facility);        
$disability = $_POST['disability'];
$disability = stripslashes($disability);
$disability = addslashes($disability);    
$medcon = $_POST['medcon'];
$medcon= stripslashes($medcon);
$medcon = addslashes($medcon);    
$spemedcon = $_POST['spemedcon'];
$spemedcon = stripslashes($spemedcon);
$spemedcon = addslashes($spemedcon);

$q3= "INSERT INTO ghsdata  (grade,  institution, location, surname, othername, previousname, DOB, postal, gender, email, mob, dadname, dadoccupation, momname, momoccupation, marital, nok, renok, econtact, relcontact, conaddress, level, nos, DOE,
DOC, regbody, regpin, regdate, region, district, facility, disability, medcon, spemedcon, timestamp) VALUES ('$grade','$institution','$location' ,'$surname', '$othername','$previousname','$DOB','$postal','$gender','$email','$mob','$dadname','$dadoccupation','$momname',
'$momoccupation','$marital','$nok','$renok','$econtact','$relcontact','$conaddress','$level','$nos','$DOE',
'$DOC','$regbody','$regpin','$regdate','$region','$district','$facility','$disability','$medcon','$spemedcon', NOW())";       
    
if($q3)
{
echo "<center><h2>Congratulations, Application Successful</h2></center><br>";
}
else
{
echo "Error: " . $q3 . "<br>" . mysqli_error($con);
}
ob_end_flush();
    
    
    
?>    
    
    
<?php
    /*
	//Check to see if score is set_error_handler
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
    //if user does not select an option
    if (!isset($_POST['choice'])){
    echo "<center><h2>Sorry you lost: You failed to select an option</h2></center><br>";
    $email=$_SESSION['email'];
    $name=$_SESSION['name'];
    $message = 'User tried to refresh or failed to select an option';    
    mysqli_query($con,"INSERT INTO losers VALUES('$name','$email','$message','0.00',NOW())")or die('Error');    
    echo '<center><a href="categorytab.php" class="btn btn-default" style="text-decoration:none; color:black;"><b>Play Again<b></a></center><br>'; 
    echo '<center><a href="logout.php" class="btn btn-default" style="text-decoration:none; color:black;"><b>Log Out<b></a></center>';    
    return;
    }
  
*/    
?>
           

    <center><a href="logout.php" class="btn btn-default btn-lg" style="text-decoration:none; color:black;"><b>Log Out</b></a></center>

	</main>

</body>
</html>
