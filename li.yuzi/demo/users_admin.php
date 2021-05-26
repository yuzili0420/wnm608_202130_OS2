<?php

include "../lib/php/functions.php";

$filename = "users.json";
$users = file_get_json($filename);

// pretty_dump($_SERVER);
// pretty_dump([$_GET,$_POST]);



$empty_object = (object) [
   "name"=>"",
   "type"=>"",
   "email"=>"",
   "classes"=>[]
];



switch(@$_GET['crud']) {
   case 'update':
      $users[$_GET['id']]->name = $_POST['user-name'];
      $users[$_GET['id']]->type = $_POST['user-type'];
      $users[$_GET['id']]->email = $_POST['user-email'];
      $users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}?id=".$_GET['id']);
      break;
   case 'create':
      $empty_object->name = $_POST['user-name'];
      $empty_object->type = $_POST['user-type'];
      $empty_object->email = $_POST['user-email'];
      $empty_object->classes = explode(", ",$_POST['user-classes']);

      $id = count($users);

      // array_push()
      $users[] = $empty_object;

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}?id=$id");
      break;
   case 'delete':
      array_splice($users,$_GET['id'],1);

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}");
      break;
}











?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>
   <?php include "../parts/meta.php" ?>
</head>
<body>
   <header class="navbar">
      <div class="container display-flex flex-align-center">
         <div class="flex-none">
            <h1>User Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <nav class="flex-none nav flex">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">

         <?php
         if(isset($_GET['id'])) {
            // ternary, conditional
            showUserPage(
               $_GET['id']=="new" ?
               $empty_object :
               $users[$_GET['id']]
            );
         } else {
         ?>

      <div class="card soft">
         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>
      </div>
         <?php
         }
         ?>
   </div>
</body>
</html>