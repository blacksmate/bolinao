<?php
$connect = mysqli_connect("localhost", "root", "", "bolinao");
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}

$columns = array('id_tagalog', 'word_tagalog', 'word_ilocano');
$query = "SELECT * FROM `tagalogilocano` WHERE ";


if(isset($_POST["search"]["value"]))
{

 $query .= '
  (word_tagalog LIKE "%' .$_POST["search"]["value"].'%"
  OR word_ilocano LIKE "%' .$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
 
}
else
{
 $query .= ' ORDER BY id_tagalog ASC ';
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
	$sub_array[] = $row['id_tagalog'];
	$sub_array[] = $row['word_tagalog'];
	$sub_array[] = $row['word_ilocano'];
	$sub_array[] = '



    <a href="javascript:void();" data-id="'.$row['id_tagalog'].'"  class="btn btn-success btn-sm edit" >
	<i class="fas fa-pencil-alt" aria-hidden = "true"> </i> Update</a> 

	<a href="javascript:void();" data-id="'.$row['id_tagalog'].'"  class="btn btn-danger btn-sm del" >
	<i class="fas fa-solid fa-trash" aria-hidden = "true"> </i> Delete</a> 
	';
	
    $data[] = $sub_array;
}



function get_all_data($connect)
{
	$query = "SELECT * FROM tagalogilocano ";

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
