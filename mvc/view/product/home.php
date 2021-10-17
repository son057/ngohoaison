<?php 
$products=$data['products'];
$paging=$data['paging'];
?>
<div class="row">
<?php foreach ($products as $product){?>
  <div class='col-md-3'>
        <img src="<?php echo BASE_URL;?>public/upload/<?php echo $product['image']?>" class="card-img-top" alt="hinhsp">
        <div class="card-body text-center lert alert-primary">
              <a href="<?php echo BASE_URL.'product/productDetail/'. $product['alias'] ?>" <a class="text-decoration-none"><?php echo $product['productName']?></a>
              <div class="card-body text-center">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span></br>
              
              <span class="text-decoration-line-through"><?php echo number_format($product['price'],0)?>đ</span>|<span class="text-danger"><?php echo number_format($product['salePrice'],0)?></span></p>
              <a class="btn btn-primary text-center" href="<?php echo BASE_URL?>cart/add/<?php echo $product['productId']?>/<?php echo $product['productName']?>/<?php if($product['salePrice']<>0) echo $product['salePrice']; else echo $product['price']?>">Add to card</a></div>
        </div>
  </div>
<?php }?>
<div class="row">
    <?php $paging->createLinks();?>
</div>
</div>