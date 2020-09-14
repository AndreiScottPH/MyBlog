<?php
require_once 'database_connection.php';

$image_id=$_GET['image_id'];
$image_query=sprintf("SELECT image_id, filename, file_size, image_data, mime_type FROM images WHERE image_id=%s", $image_id);
$image_result=$mysqli->query($image_query);
$image_result=$image_result->fetch_array();


header("Content-size: {$image_result['file_size']}");
header("Content-type: {$image_result['file_type']}");
echo $image_result['image_data'];