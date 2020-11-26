<?php 
include 'inc/header.php';

$products = [
	['img/001.jpg','Product1'],
	['img/002.jpg','Product2'],
	['img/003.jpg','Product3'],
	['img/004.jpg','Product4'],
	['img/005.jpg','Product5'],
	['img/006.jpg','Product6'],
];

 ?>
<div class="container mt-5">
 <div class="row">

 	<?php 
   foreach ($products as $key => $data) :
   	# code...
  
 	 ?>
      <div class="card  text-info text-center mr-5 col-3">
        <img src="<?= $data[0] ?>" class="card-img-top img-thumbnail" alt="...">
        <div class="card-body">
          <h3 class="card-text"><?= $data[1] ?></h3>
          <a href="detail.php?id=<?= $key ?>" class="btn btn-primary btn-block">Buy</a>
        </div>
      </div>
    <?php 
     endforeach;
     ?>
</div>

</div>





 <?php 
include 'inc/footer.php';

 ?>