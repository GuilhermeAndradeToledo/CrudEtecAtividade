<?php 
include '../../setup/connect.php';
$post = filter_input_array(INPUT_POST);
$stmt = $pdo->prepare("UPDATE books SET title = :title, subtitle = :subtitle, description = :description, slug = :slug, status = :status WHERE id = :id");
$stmt->execute([
    'title'=> $post['title'],
    'subtitle'=>$post['subtitle'],
    'description'=>$post['description'],
    'slug'=>$post['slug'],
    'status'=>$post['status'],
    'id'=>$post['id']
]);
header('location: ./select.php');
exit();
?>