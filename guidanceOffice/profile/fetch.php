<?php
include('connect.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM student_profile ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE student_name LIKE "%'.$_POST["search"]["value"].'%" ';
 $query .= 'OR student_year LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $image = '';
 if($row["image"] != '')
 {
  $image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="200" height="200" />';
 }
 else
 {
  $image = '';
 }
 $sub_array = array();
 $sub_array[] = $image;
 $sub_array[] = $row["student_name"];
 $sub_array[] = $row["student_mobile"];
 $sub_array[] = $row["student_year"];
 $sub_array[] = $row["student_birth"];
 $sub_array[] = $row["student_birthPlace"];
 $sub_array[] = $row["student_address"];
 $sub_array[] = $row["student_fatherName"];
 $sub_array[] = $row["student_fatherMobile"];
 $sub_array[] = $row["student_motherName"];
 $sub_array[] = $row["student_motherMobile"];
 $sub_array[] = $row["student_parentRelation"];
 $sub_array[] = $row["student_guardianName"];
 $sub_array[] = $row["student_guardianMobile"];
 $sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update">Update</button>';
 $sub_array[] = '<button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete">Delete</button>';
 $data[] = $sub_array;
}
$output = array(
 "draw"    => intval($_POST["draw"]),
 "rowCount"      => 10,
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records(),
 "data"    => $data
);
echo json_encode($output);
?>