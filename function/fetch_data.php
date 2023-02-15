<?php
$connect  = mysqli_connect("localhost","root","","bolinao");
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}

$columns = array('u.uid','u.fullname','u.email' ,'u.password', 'u.address','u.mobileno','g.grade');
$query = "SELECT u.*, g.* FROM userinfo u, grade g WHERE u.gradeid = g.gradeid AND";




if(isset($_POST["search"]["value"]))
{

 $query .= '
  (u.fullname LIKE "%' .$_POST["search"]["value"].'%"
  OR u.email LIKE "%' .$_POST["search"]["value"].'%"
  OR u.password LIKE "%' .$_POST["search"]["value"].'%"
  OR u.address LIKE "%' .$_POST["search"]["value"].'%"
  OR u.mobileno LIKE "%' .$_POST["search"]["value"].'%"
  OR g.grade LIKE "%' .$_POST["search"]["value"].'%"
  )
 ';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
 
}
else
{
 $query .= ' ORDER BY u.uid ASC ';
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
	$sub_array[] = $row['uid'];
	$sub_array[] = $row['fullname'];
	$sub_array[] = $row['email'];
	$sub_array[] = $row['password'];
    $sub_array[] = $row['address'];
    $sub_array[] = $row['mobileno'];
	$sub_array[] = $row['grade'];
	$sub_array[] = '

	<a href="javascript:void();" data-id="'.$row['uid'].'"  class="btn btn-primary btn-sm view" > 
	<i class="fas fa-eye" aria-hidden = "true"> </i> View</a>

    <a href="javascript:void();" data-id="'.$row['uid'].'"  class="btn btn-success btn-sm edit" >
	<i class="fas fa-pencil-alt" aria-hidden = "true"> </i> Update</a> 

	<a href="javascript:void();" data-id="'.$row['uid'].'"  class="btn btn-danger btn-sm del" >
	<i class="fas fa-solid fa-trash" aria-hidden = "true"> </i> Delete</a> 
	<a href="javascript:void();" data-id="'.$row['uid'].'"  class="btn btn-warning btn-sm rep" >
	<i class=" fa-solid fa-print" aria-hidden = "true"> </i> Print</a> 
	';
	
    $data[] = $sub_array;
}



function get_all_data($connect)
{
	$query = "SELECT u.*, g.gradeid FROM userinfo u, grade g WHERE u.gradeid = g.gradeid";

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
