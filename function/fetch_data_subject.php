<?php
$connect = mysqli_connect("localhost", "root", "", "bolinao");
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}

$columns = array('s.subjectid','s.subjdesc','s.gradeid' ,'g.grade');
$query = "SELECT g.*, s.* FROM
		subjects s , grade g WHERE g.gradeid = s.gradeid  AND";


if(isset($_POST["search"]["value"]))
{

 $query .= '
  (s.subjdesc LIKE "%' .$_POST["search"]["value"].'%"
  OR g.grade LIKE "%' .$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
 
}
else
{
 $query .= ' ORDER BY s.subjectid ASC ';
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
	$sub_array[] = $row['subjectid'];
	$sub_array[] = $row['subjdesc'];
	$sub_array[] = $row['grade'];
	$sub_array[] = '



    <a href="javascript:void();" data-id="'.$row['subjectid'].'"  class="btn btn-success btn-sm edit" >
	<i class="fas fa-pencil-alt" aria-hidden = "true"> </i> Update</a> 

	<a href="javascript:void();" data-id="'.$row['subjectid'].'"  class="btn btn-danger btn-sm del" >
	<i class="fas fa-solid fa-trash" aria-hidden = "true"> </i> Delete</a> 
	';
	
    $data[] = $sub_array;
}



function get_all_data($connect)
{
	$query = "SELECT s.*, g.* FROM
	subjects s , grade g WHERE s.gradeid = g.gradeid";

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
