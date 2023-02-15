

<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "bolinao");
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}
$condition=$_POST['condition'];


// $columns = array('qid','question','opt1','opt2','opt3','opt4','answer','subjectid');

// ito ung gamit mo nasa baba

// $columns = array('q.question_number','q.question_text','o.is_correct','o.coption');
$columns = array('qcid','question_number','question_text');
// $query = "SELECT * from questions WHERE subjectid = '$condition' AND";
// $query = "SELECT q.*, o.* FROM question q, options o WHERE q.question_number = o.question_number 
// AND subjectid = '$condition' AND";

// ito ung gamit mo na code

// $query = "SELECT q.*,o.*  FROM question q 
// INNER JOIN options o ON q.question_number = o.question_number
// AND q.subjectid = '$condition' AND";

//mag test k ng iba
$query = "SELECT * FROM question WHERE qcid ='$condition' AND"; 
if(isset($_POST["search"]["value"]))
{

 $query .= '
  (
	question_number LIKE "%' .$_POST["search"]["value"].'%"
  OR question_text LIKE "%' .$_POST["search"]["value"].'%"

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
 $query .= ' ORDER BY question_number ASC ';
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
$sub_array[] = $row['qcid'];
$sub_array[] = $row['question_number'];
$image_source = basename($row['question_text']);
if(strpos($row['question_text'],'.jpg')!== false||strpos($row['question_text'],'.png')!== false ||
	strpos($row['question_text'],'.jpeg')!== false){
	$sub_array[] = "<img src = '../image/$image_source' height = '60px' width = '80px' class ='rounded mx-auto d-block'/>";
}
else{
	$sub_array[] = $row['question_text'];

}


	$sub_array[] = '

	<a href="javascript:void();"
		data-id="'.$row['id'].'"  
		class="btn btn-success btn-sm edit" > 
		<i class="fas fa-eye" aria-hidden = "true"> </i> 
		Update
	</a>
	<a href="javascript:void();" data-id="'.$row['question_number'].'"  class="btn btn-danger btn-sm del" >
	<i class="fas fa-solid fa-trash" aria-hidden = "true"> </i> Delete</a> 
	';
	
    $data[] = $sub_array;
}



function get_all_data($connect)
{
	// $condition=$_POST['condition'];
    // $query = "SELECT * from questions WHERE subjectid = '$condition'";
	$query = "SELECT * FROM question";
	//SELECT q.*, o.* FROM question q, options o WHERE q.question_number = o.question_number and
	// subjectid = '$condition'";
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
