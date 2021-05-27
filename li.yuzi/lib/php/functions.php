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
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pjxzdmcgdmlld0JveD0iMCAwIDMyIDMyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDpub25lO308L3N0eWxlPjwvZGVmcz48dGl0bGUvPjxnIGRhdGEtbmFtZT0iTGF5ZXIgMiIgaWQ9IkxheWVyXzIiPjxwYXRoIGQ9Ik0xMywyNmExLDEsMCwwLDEtLjcxLS4yOWwtOS05YTEsMSwwLDAsMSwwLTEuNDJsOS05YTEsMSwwLDEsMSwxLjQyLDEuNDJMNS40MSwxNmw4LjMsOC4yOWExLDEsMCwwLDEsMCwxLjQyQTEsMSwwLDAsMSwxMywyNloiLz48cGF0aCBkPSJNMjgsMTdINGExLDEsMCwwLDEsMC0ySDI4YTEsMSwwLDAsMSwwLDJaIi8+PC9nPjxnIGlkPSJmcmFtZSI+PHJlY3QgY2xhc3M9ImNscy0xIiBoZWlnaHQ9IjMyIiB3aWR0aD0iMzIiLz48L2c+PC9zdmc+" class="icon" style="font-size:1.5em"></a></div>
   <div class="flex-stretch"></div>
   <div class="flex-none"><a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMzIgMzIiIGlkPSJFZGl0YWJsZS1saW5lIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+PHBhdGggZD0iICBNMjUsMTBIN3YxN2MwLDEuMTA1LDAuODk1LDIsMiwyaDE0YzEuMTA1LDAsMi0wLjg5NSwyLTJWMTB6IiBmaWxsPSJub25lIiBpZD0iWE1MSURfMTI5XyIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIi8+PHBhdGggZD0iICBNMjAsN2gtOFY1YzAtMS4xMDUsMC44OTUtMiwyLTJoNGMxLjEwNSwwLDIsMC44OTUsMiwyVjd6IiBmaWxsPSJub25lIiBpZD0iWE1MSURfMTQ1XyIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIi8+PHBhdGggZD0iICBNMjgsMTBINFY4YzAtMC41NTIsMC40NDgtMSwxLTFoMjJjMC41NTIsMCwxLDAuNDQ4LDEsMVYxMHoiIGZpbGw9Im5vbmUiIGlkPSJYTUxJRF8xNDZfIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiLz48bGluZSBmaWxsPSJub25lIiBpZD0iWE1MSURfMTQ4XyIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiB4MT0iMTYiIHgyPSIxNiIgeTE9IjE1IiB5Mj0iMjQiLz48bGluZSBmaWxsPSJub25lIiBpZD0iWE1MSURfMTQ3XyIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiB4MT0iMTIiIHgyPSIxMiIgeTE9IjE1IiB5Mj0iMjQiLz48bGluZSBmaWxsPSJub25lIiBpZD0iWE1MSURfMTQ5XyIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgc3Ryb2tlLXdpZHRoPSIyIiB4MT0iMjAiIHgyPSIyMCIgeTE9IjE1IiB5Mj0iMjQiLz48L3N2Zz4=" class="icon" style="font-size:1.5em"></a></div>
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


/* DATABASE CONNECTION */
function MYSQLIConn() {
   @include_once "data/auth.php";
   if (!function_exists('MYSQLIAuth')) {
      @include_once "../data/auth.php";
   }

   @$conn = new mysqli(...MYSQLIAuth());

   if($conn->connect_errno)
      die($conn->connect_error);

   $conn->set_charset('utf8');

   return $conn;
}

/* DATABASE CALL */
function MYSQLIQuery($sql) {
   $conn = MYSQLIConn();

   $a =[];

   $result = $conn->query($sql);

   if($conn->errno)
      die($conn->error);

   while($row = $result->fetch_object()) {
      $a[] = $row;
   }

   return $a;
}



// CART FUNCTIONS

function getItemById($a,$id) {
   return array_find($a,function($o)use($id){ return $o->id==$id; });
}
function array_find($array,$fn) {
   foreach($array as $o) if($fn($o)) return $o;
   return false;
}

function getCart() {
   return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function setCart($a) {
   $_SESSION['cart'] = $a;
}

function resetCart() { setCart([]); }

function cartItemById($id) {
   return getItemById(getCart(),$id);
}

function addToCart($id,$amount) {
   $cart = getCart();

   $p = cartItemById($id);

   if($p) $p->amount = $amount;
   else {
      $cart[] = (object) [
         "id"=>$id,
         "amount"=>$amount
      ];
   }

   setCart($cart);
}


function getCartItems() {
   $cart = getCart();

   if(!count($cart)) {
      return [];
   }

   $ids = implode(",",array_map(function($o){return $o->id;},$cart));

   $products = MYSQLIQuery("
      SELECT *
      FROM `products`
      WHERE `id` IN ($ids)
   ");

   return array_map(function($db_product)use($cart) {
      $cart_product = cartItemById($db_product->id);
      $db_product->amount = $cart_product->amount;
      $db_product->total = $cart_product->amount * $db_product->price;
      return $db_product;
   },$products);
}



function makeCartBadge() {
   $cart = getCart();
   return count($cart)==0 ? "" :
      array_reduce($cart,function($r,$o){return $r+$o->amount;},0);
}






function setDefault($k,$v){
   if(!isset($_GET[$k])) $_GET[$k] = $v;
}
