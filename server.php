<?php
include __DIR__ . '/database.php';
$response=[];

if(isset($_GET['genre'])){
    foreach($albums as $album){
        if($album['genre'] == $_GET['genre']){
            $response[]= $album;
        }
    } 
}else{
    $response = $albums;
}
header('Content-Type: application/json');
echo json_encode($response);
?>