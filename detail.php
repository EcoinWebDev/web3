<?php 
include 'inc/header.php';

$cid = (isset($_GET['id']))?$_GET['id']:null;

$products = [
  ['img/001.jpg','Product1','4554DZD','description 1'],
  ['img/002.jpg','Product2','7777DZD','description 2'],
  ['img/003.jpg','Product3','1522DZD','description 3'],
  ['img/004.jpg','Product4','95544DZD','description 4'],
  ['img/005.jpg','Product5','10225DZD','description 5'],
  ['img/006.jpg','Product6','99999999DZD','description 6'],
];

 ?>
<div class="container mt-5">
 <div class="row ">
<div class="card" >
  <img src="<?= $products[$cid][0] ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">
      <?= $products[$cid][1] ?>
    </p>

    <p>
      <?= $products[$cid][3] ?>
    </p>

    <h1><?= $products[$cid][2] ?></h1>
  </div>
</div>
 
</div>

</div>





 <?php 
include 'inc/footer.php';

 ?>