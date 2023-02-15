<?php

//process_data.php

$connect = new PDO("mysql:host=localhost;dbname=bolinao", "root", "");

if(isset($_POST["query"]))
{	

	$data = array();

	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

	$query = "
	SELECT word_tagalog FROM tagalogilocano 
		WHERE word_tagalog LIKE '%".$condition."%' 
		ORDER BY id_tagalog DESC 
		LIMIT 3
	";

	$result = $connect->query($query);

	$replace_string = '<b>'.$condition.'</b>';

	foreach($result as $row)
	{
		$data[] = array(
			'word_tagalog'		=>	str_ireplace($condition, $replace_string, $row["word_tagalog"])
		);
	}

	echo json_encode($data);
}

$post_data = json_decode(file_get_contents('php://input'), true);
