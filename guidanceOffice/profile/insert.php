  <?php
include('connect.php');
include('function.php');

if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
	  $image = '';
	  if($_FILES["user_image"]["name"]  != '')
	  {
	   $image = upload_image();
	  }
	  $statement = $connection->prepare("
	   INSERT INTO student_profile (student_name, student_mobile, student_year, student_birth, student_birthPlace, student_address, student_fatherName, student_fatherMobile, student_motherName, student_motherMobile, student_parentRelation, student_guardianName, student_guardianMobile, image) 
	   VALUES (:student_name, :student_mobile, :student_year, :student_birth, :student_birthPlace, :student_address, :student_fatherName, :student_fatherMobile, :student_motherName, :student_motherMobile, :student_parentRelation, :student_guardianName, :student_guardianMobile, :image)
	  ");
	  $result = $statement->execute(
	   array(
		':student_name' => $_POST["student_name"],
		':student_mobile' => $_POST["student_mobile"],
		':student_year' => $_POST["student_year"],    
		':student_birth' => $_POST["student_birth"],
		':student_birthPlace' => $_POST["student_birthPlace"],
		':student_address' => $_POST["student_address"],
		':student_fatherName' => $_POST["student_fatherName"],
		':student_fatherMobile' => $_POST["student_fatherMobile"],
		':student_motherName' => $_POST["student_motherName"],
		':student_motherMobile' => $_POST["student_motherMobile"],
		':student_parentRelation' => $_POST["student_parentRelation"],
		':student_guardianName' => $_POST["student_guardianName"],
		':student_guardianMobile' => $_POST["student_guardianMobile"],
		':image'  => $image
	   )
  );

  if(!empty($result))
  {
   echo 'Data Inserted';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $image = '';
  if($_FILES["user_image"]["name"] != '')
  {
   $image = upload_image();
  }
  else
  {
   $image = $_POST["hidden_user_image"];
  }
  $statement = $connection->prepare(
   "UPDATE student_profile 
   SET student_name = :student_name, student_mobile = :student_mobile, student_year = :student_year, student_birth = :student_birth, student_birthPlace = :student_birthPlace, student_address = :student_address, student_fatherName = :student_fatherName, student_fatherMobile = :student_fatherMobile, student_motherName = :student_motherName, student_motherMobile = :student_motherMobile, student_parentRelation = :student_parentRelation, student_guardianName = :student_guardianName, student_guardianMobile = :student_guardianMobile, image = :image 
   WHERE id = :id
   "
  );
  $result = $statement->execute(
   array(
    ':student_name' => $_POST["student_name"],
    ':student_mobile' => $_POST["student_mobile"],
    ':student_year' => $_POST["student_year"],
    ':student_birth' => $_POST["student_birth"],
    ':student_birthPlace' => $_POST["student_birthPlace"],
    ':student_address' => $_POST["student_address"],
    ':student_fatherName' => $_POST["student_fatherName"],
    ':student_fatherMobile' => $_POST["student_fatherMobile"],
    ':student_motherName' => $_POST["student_motherName"],
    ':student_motherMobile' => $_POST["student_motherMobile"],
    ':student_parentRelation' => $_POST["student_parentRelation"],
    ':student_guardianName' => $_POST["student_guardianName"],
    ':student_guardianMobile' => $_POST["student_guardianMobile"],
    ':image'  => $image,
    ':id'   => $_POST["user_id"]
   )
  );
  if(!empty($result))
  {
   echo 'Data Updated';
  }
 }
}

?>
   