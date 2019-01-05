<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SSQ || ADMIN </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

<script>
$(function () {
    $(document).on( 'scroll', function(){
        console.log('scroll top : ' + $(window).scrollTop());
        if($(window).scrollTop()>=$(".logo").height())
        {
             $(".navbar").addClass("navbar-fixed-top");
        }

        if($(window).scrollTop()<$(".logo").height())
        {
             $(".navbar").removeClass("navbar-fixed-top");
        }
    });
});</script>
</head>

<body  style="background:#eee;">
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Recruitment Admin</span></div>
<?php
 include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];
  if(!(isset($_SESSION['email']))){
header("location:index.php");

}
else
{
$name = $_SESSION['name'];;

include_once 'dbConnection.php';
echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
}?>

</div></div>
<!-- admin start-->

<!--navigation menu-->
<nav class="navbar navbar-default title1">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dash.php?q=0"><b>Dashboard</b></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dash.php?q=0">Registered Users</a></li><span class="sr-only">(current)</span>
		<li <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dash.php?q=1">Applications</a></li> 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--navigation menu closed-->
<div class="container"><!--container start-->
<div class="row">
<div class="col-md-12">
<!--home start-->



<!--home closed-->
<!--users start-->
<?php if(@$_GET['q']==0) {

$result = mysqli_query($con,"SELECT * FROM user") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>Email</b></td><td><b>Date Registered</b></td><td><b>Delete User</b></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$gender = $row['gender'];
    $email = $row['email'];
    $date_registered = $row['date_registered'];

	echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$email.'</td><td>'.$date_registered.'</td>
	<center><td><a title="Delete User" href="update.php?email='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true" style="margin-left:30%"></span></b></a></td></tr></center>';
}
$c=0;
echo '</table></div></div>';

}?>
<!--user end-->

<!--feedback start-->
<?php if(@$_GET['q']==1) {
$result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback`.`date` DESC") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$subject = $row['subject'];
	$name = $row['name'];
	$email = $row['email'];
	$id = $row['id'];
	 echo '<tr><td>'.$c++.'</td>';
	echo '<td><a title="Click to open feedback" href="dash.php?q=1&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
	<td><a title="Open Feedback" href="dash.php?q=1&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
	echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

	</tr>';
}
echo '</table></div></div>';
}
?>
<!--feedback closed-->

<!--feedback reading portion start-->
<?php if(@$_GET['fid']) {
echo '<br />';
$id=@$_GET['fid'];
$result = mysqli_query($con,"SELECT * FROM feedback WHERE id='$id' ") or die('Error');
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
	$subject = $row['subject'];
	$date = $row['date'];
	$date= date("d-m-Y",strtotime($date));
	$time = $row['time'];
	$feedback = $row['feedback'];
	
echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
 echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';}
}?>
<!--Feedback reading portion closed-->
    
    
    
    
<!--History of Winners Start-->   
<?php if(@$_GET['q']==2) {
$result = mysqli_query($con,"SELECT * FROM winners") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Email</b></td><td><b>Question Answered</b></td><td><b>Amount Won (GH₵)</b></td><td><b>Date</b></td><td><a title="Delete All Records" href="update.php?q=rmwinners"><b><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color:red"></span></b></a></td><td></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$name = $row['name'];
	$email = $row['email'];
    $question=$row['question']; 
    $amount_paid = $row['amount_paid'];
    echo '<tr><td>'.$c++.'</td>';
	echo '<td>'.$name.'<td>'.$email.'</td><td>'.$question.'</td><td>'.$amount_paid.'</td><td>'.$date.'</td><td><a title="Remove Record" href="update.php?q=rmwinner&question='.$question.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>';
}
echo '</table></div></div>';
}
?>    
<!--End History of Winners--> 
    
<!--History of Losers Start-->   
<?php if(@$_GET['q']==8) {
$result = mysqli_query($con,"SELECT * FROM losers") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Email</b></td><td><b>Question Answered</b></td><td><b>Amount Lost (GH₵)</b></td><td><b>Date</b></td><td><a title="Delete All Records" href="update.php?q=rmlosers"><b><span class="glyphicon glyphicon-trash" aria-hidden="true" style="color:red"></span></b></a></td><td></td><td></td></tr>';
$c=1;
while($row = mysqli_fetch_array($result)) {
	$date = $row['date'];
	$name = $row['name'];
	$email = $row['email'];
    $question=$row['question']; 
    $amount_paid = $row['amount_paid'];
    echo '<tr><td>'.$c++.'</td>';
	echo '<td>'.$name.'<td>'.$email.'</td><td>'.$question.'</td><td>'.$amount_paid.'</td><td>'.$date.'</td><td><a title="Remove Record" href="update.php?q=rmloser&question='.$question.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>';
}
echo '</table></div></div>';
}
?>    
<!--End History of Losers-->     
    
    
<!--ACN Delete Quiz Start-->   
<?php if(@$_GET['q']==3) {
$result = mysqli_query($con,"SELECT * FROM acn_questions") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>Question Number</b></td><td><b>Question</b></td><td><b><a href="update.php?q=rmallacn" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove All</b></span></a></b></td><td></td><td></td></tr>';
while($row = mysqli_fetch_array($result)) {
    $question_number=$row['question_number'];
    $question=$row['question'];
	echo '<tr><td>'.$question_number.'</td><td>'.$question.'</td><td><b><a href="update.php?q=rmquizacn&question_number='.$question_number.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
    
}
echo '</table></div></div>';
}
?>    
<!--End ACN Delete Quiz-->    
    
<!--EPL Delete Quiz Start-->   
<?php if(@$_GET['q']==4) {
$result = mysqli_query($con,"SELECT * FROM epl_questions") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>Question Number</b></td><td><b>Question</b></td><td><b><a href="update.php?q=rmallepl" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove All</b></span></a></b></td><td></td><td></td></tr>';
while($row = mysqli_fetch_array($result)) {
    $question_number=$row['question_number'];
    $question=$row['question'];
	echo '<tr><td>'.$question_number.'</td><td>'.$question.'</td><td><b><a href="update.php?q=rmquizepl&question_number='.$question_number.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
echo '</table></div></div>';
}
?>    
<!--End EPL Delete Quiz-->
    
<!--FWC Delete Quiz Start-->   
<?php if(@$_GET['q']==5) {
$result = mysqli_query($con,"SELECT * FROM fwc_questions") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>Question Number</b></td><td><b>Question</b></td><td><b><a href="update.php?q=rmallfwc" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove All</b></span></a></b></td><td></td><td></td></tr>';
while($row = mysqli_fetch_array($result)) {
    $question_number=$row['question_number'];
    $question=$row['question'];
	echo '<tr><td>'.$question_number.'</td><td>'.$question.'</td><td><b><a href="update.php?q=rmquizfwc&question_number='.$question_number.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
echo '</table></div></div>';
}
?>    
<!--End FWC Delete Quiz-->
    
<!--SLL Delete Quiz Start-->   
<?php if(@$_GET['q']==6) {
$result = mysqli_query($con,"SELECT * FROM sll_questions") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>Question Number</b></td><td><b>Question</b></td><td><b><a href="update.php?q=rmallsll" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove All</b></span></a></b></td><td></td><td></td></tr>';
while($row = mysqli_fetch_array($result)) {
    $question_number=$row['question_number'];
    $question=$row['question'];
	echo '<tr><td>'.$question_number.'</td><td>'.$question.'</td><td><b><a href="update.php?q=rmquizsll&question_number='.$question_number.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
echo '</table></div></div>';
}
?>    
<!--End SLL Delete Quiz-->
    
<!--UCL Delete Quiz Start-->   
<?php if(@$_GET['q']==7) {
$result = mysqli_query($con,"SELECT * FROM ucl_questions") or die('Error');
echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
<tr><td><b>Question Number</b></td><td><b>Question</b></td><td><b><a href="update.php?q=rmallucl" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove All</b></span></a></b></td><td></td><td></td></tr>';
while($row = mysqli_fetch_array($result)) {
    $question_number=$row['question_number'];
    $question=$row['question'];
	echo '<tr><td>'.$question_number.'</td><td>'.$question.'</td><td><b><a href="update.php?q=rmquizucl&question_number='.$question_number.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';
}
echo '</table></div></div>';
}
?>    
<!--End UCL Delete Quiz-->    
    

</div><!--container closed-->
</div></div>
</body>
</html>
