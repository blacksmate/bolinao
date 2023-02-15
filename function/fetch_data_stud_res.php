

<?php
//fetch.php
$condition = $_POST['condition'];


$connect = mysqli_connect("localhost", "root", "", "bolinao");
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}
$columns = array('uid','stud_name','date','score','total_points','subjectcategory','activity');
// $query = "SELECT *,CONCAT(lastname ,' , ', firstname,' ', middlename)as cname FROM tblclientinfo WHERE category LIKE '%Solo Parent%' AND";
$query = "SELECT * FROM submitted_students WHERE uid ='$condition' AND ";
if($_POST["is_date_search"] == "yes")
{
 
 $query .=' date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND  ';
}

if(isset($_POST["search"]["value"]))
{

 $query .= '
  (score LIKE "%' .$_POST["search"]["value"].'%"
  OR total_points LIKE "%' .$_POST["search"]["value"].'%"
  OR subjectcategory LIKE "%' .$_POST["search"]["value"].'%"
  OR activity LIKE "%' .$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
 
}
else
{
 $query .= ' ORDER BY score DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["uid"];
 $sub_array[] = $row["stud_name"];
 $sub_array[] = $row["date"]; 
 $sub_array[] = $row["score"];
 $sub_array[] = $row["total_points"];
 $sub_array[] = $row["subjectcategory"];
 $sub_array[] = $row["activity"];
 $data[] = $sub_array;
}



function get_all_data($connect)
{
$condition = $_POST['condition'];
$query = "SELECT * FROM submitted_students WHERE uid ='$condition'";
$result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);


?>
