<?php
//fetch all country data from database
//Include database configuration file
include('include/db_connect.php');

    $query = $mysqli->query("SELECT * FROM region WHERE status = 1 ORDER BY region_name ASC");// select all region from database 

    //Count total number of rows
    $rowCount = $query->num_rows;

    //Display states list
    if($rowCount > 0)
		
		{
	echo '<option value="">Select Region</option>';// initial message display{  
	//echo '<input type="text" >';// initial message display
        
        while($row = $query->fetch_assoc())
		{
            echo '<option value="'.$row['region_id'].'">'.$row['region_name'].'</option>';// select country id & name from country table
        }
    }
	else
	{
        echo '<option value="">Region Not Available</option>'; //display when no data!
	}



?>
