<?php
include('connect.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	 $output = array();
	 $statement = $connection->prepare(
	  "SELECT * FROM student_profile 
	  WHERE id = '".$_POST["user_id"]."' 
	  LIMIT 1"
	 );
	 $statement->execute();
	 $result = $statement->fetchAll();
	 foreach($result as $row)
	 {

		  if($row["image"] != '')
		  {
		  $output['user_image'] = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="400" height="400" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		  }
		  else
		  {
		   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		  }

		  $output["studentName"] = $row["student_name"];
		  $output["studentMobile"] = $row["student_mobile"];
		  $output["studentYear"] = $row["student_year"];
		  $output["studentBirth"] = $row["student_birth"];
		  $output["studentbirthPlace"] = $row["student_birthPlace"];
		  $output["studentAddress"] = $row["student_address"];
		  $output["studentfatherName"] = $row["student_fatherName"];
		  $output["studentfatherMobile"] = $row["student_fatherMobile"];
		  $output["studentmotherName"] = $row["student_motherName"];
		  $output["studentmotherMobile"] = $row["student_motherMobile"];
		  $output["studentparentRelation"] = $row["student_parentRelation"];
		  $output["studentguardianName"] = $row["student_guardianName"];
		  $output["studentguardianMobile"] = $row["student_guardianMobile"];
  
	 }
	echo json_encode($output);
}
?>
   