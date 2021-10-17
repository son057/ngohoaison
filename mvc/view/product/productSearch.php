<?php 
$products=$data['products'];
$paging=$data['paging'];
$totalRecords=$data['totalRecords'];
?>


<div class="row">
<?php echo "Tổng số sản phẩm tìm thấy: ". $totalRecords. " sản phẩm";?>
<div class="row">
<?php foreach ($products as $product){?>
  <div class='col-md-3'>
        <img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['image']?>" class="card-img-top" alt="hinhsp">
        <div class="card-body text-center lert alert-primary">
              <center><a href="<?php echo BASE_URL.'product/productDetail/'. $product['alias'] ?>"?></h5>
              <div class="card-body text-center lert alert-primary">
                  <div class="card-body text-center lert alert-primary">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></br></h5>
                  </div>
                  <a href="<?php echo BASE_URL.'product/productDetail/'. $product['alias'] ?>" class='text-decoration-none'><h5 class="card-title"><?php echo $product['productName']?>
                  <?php
                  if($product['salePrice']!=''){?>
                  <p class="card-text"><span class="text-decoration-line-through"><?php echo number_format($product['price'],2)?></span>|<span class="text-danger"><?php echo number_format($product['salePrice'],2)?></span></p>
                  <?php }
                  else {
                  ?>
                  <span class="text-danger"><?php echo number_format($product['price'],2)?></span></p>
                  <?php }?>
                  <a class="btn btn-primary text-center" href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId']?>/<?php echo $product['productName']?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['price']?>">Add to card</a>
                </div>
        </div>
  </div>
<?php }?>
<div class="row">
    <?php $paging->createLinks();?>
</div>
</div>
</div>