<?php 
include 'inc/header.php';
 ?>


 <?php 
  
//print_r($_GET);

//?ecoin=web&nom=php&version=8  // Query String

 //isset empty

$page = (isset($_GET['page']))?$_GET['page']:null;
/* if (!empty($page)) {
	include $page.'.php';
}
 
*/
switch ($page) {
	
	case 'service':
		include 'service.php';
		break;
	case 'product':
		include 'product.php';
		break;
	case 'contact':
		include 'contact.php';
		break;
	
	default:
		echo "<h1>This Index Page</h1>";
		break;
}

  ?>

  <div class="container">
   <div class="row">
     <div class="col">
     	
     	<form action="rev.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="page">Page</label>
      <input type="text" name="page" class="form-control" id="page" >
    </div>

    <div class="form-group col-md-6">
      <label for="category">Category</label>
      <input type="text" name="category" class="form-control" id="category" >
    </div>

  </div>

  <button type="submit" class="btn btn-primary">Get Page</button>
</form>
     </div>
     
   </div>
  </div>




<?php 
include 'inc/footer.php';
 ?>
