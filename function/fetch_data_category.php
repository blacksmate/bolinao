

<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "bolinao");
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}

$columns = array('q.subjectid','q.subjectcategory','q.quizdesc','q.activity','g.grade');
// $query = "SELECT * from questionscategory WHERE ";
$query = "SELECT q.*,g.grade from questionscategory q, grade g where q.gradeid = g.gradeid AND";


if(isset($_POST["search"]["value"]))
{

 $query .= '
  (q.subjectid LIKE "%' .$_POST["search"]["value"].'%"
  OR q.subjectcategory LIKE "%' .$_POST["search"]["value"].'%"

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
 $query .= ' ORDER BY subjectid ASC ';
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
	$sub_array[] = $row['id'];
	$sub_array[] = $row['subjectcategory'];
	$sub_array[] = $row['quizdesc'];
	$sub_array[] = $row['activity'];
	$sub_array[] = $row['grade'];
	$sub_array[] = '

	<a href="javascript:void();"
		data-id="'.$row['id'].'"  
		class="btn btn-primary btn-sm add" > 
		<i class="fas fa-eye" aria-hidden = "true"> </i> 
		Select
	</a>
	<a href="javascript:void();" data-id="'.$row['id'].'"  class="btn btn-danger btn-sm del" >
	<i class="fas fa-solid fa-trash" aria-hidden = "true"> </i> Delete</a> 
	';
	
    $data[] = $sub_array;
}



function get_all_data($connect)
{
	$query = "SELECT * from questionscategory";

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
