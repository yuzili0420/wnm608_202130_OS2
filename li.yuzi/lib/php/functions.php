<?php

function pretty_dump($data) {
	echo "<pre>",var_dump($data),"</pre>";
}


function file_get_json($filename) {
	$data_string = file_get_contents($filename);
	return json_decode($data_string);
}

function showUserPage($user) {

$id = $_GET['id'];
$classes = implode(", ", $user->classes);
$addoredit = $id=="new" ? 'Add' : 'Edit';
$createorupdate = $id=="new" ? 'create' : 'update';


// heredoc
echo <<<HTML
<div class="grid gap">
<div class="col-xs-12">
<div class="card soft">
<nav class="nav pills display-flex">
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}"><img src="img/icon/arrow-left.svg" class="icon" style="font-size:1.5em"></a></div>
   <div class="flex-stretch"></div>
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete"><img src="img/icon/trash.svg" class="icon" style="font-size:1.5em"></a></div>
</nav>
</div>
</div>
<div class="col-xs-12 col-md-4">
   <div class="card soft">
      <h2>$user->name</h2>
      <div>
         <strong>Type</strong>
         <span>$user->type</span>
      </div>
      <div>
         <strong>Email</strong>
         <span>$user->email</span>
      </div>
      <div>
         <strong>Classes</strong>
         <span>$classes</span>
      </div>
   </div>
</div>
<form class="col-xs-12 col-md-8" method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
   <div class="card soft">
      <h2>$addoredit User</h2>
      <input type="hidden" name="id" value="$id">
      <div class="form-control">
         <label class="form-label" for="user-name">Name</label>
         <input class="form-input"type="text" id="user-name" name="user-name" value="$user->name">
      </div>
      <div class="form-control">
         <label class="form-label" for="user-type">Type</label>
         <input class="form-input"type="text" id="user-type" name="user-type" value="$user->type">
      </div>
      <div class="form-control">
         <label class="form-label" for="user-email">Email</label>
         <input class="form-input"type="email" id="user-email" name="user-email" value="$user->email">
      </div>
      <div class="form-control">
         <label class="form-label" for="user-classes">Classes</label>
         <input class="form-input"type="text" id="user-classes" name="user-classes" value="$classes">
      </div>
      <div class="form-control">
         <input class="form-button" type="submit" value="Submit">
      </div>
   </div>
</form>
</div>
HTML;
}