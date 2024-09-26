<?php 
 	include "config_blood.php";

 	if (isset($_GET['ID'])) 
 	{
 	
 		$delete = mysqli_query($connect,"delete from donate where id='".$_GET['ID']."'");

		 

 		if ($delete) 				
		{
			echo "<script>;";
			echo "alert('Record Delete....!');";
			echo 'window.location.href = "donation_record.php";';
			echo "</script>;";
		}
		else
		{
			echo "<script>;";
			echo "alert('Data error....!');";
			echo 'window.location.href = "donation_record.php";';
			echo "</script>;";
		}
 	}

  ?>