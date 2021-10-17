<?php
$currentproduct=$data['currentproduct'];
$sameProducts=$data['sameProducts'];
?>


<div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?php echo BASE_URL; ?>public/upload/<?php echo $currentproduct['image']?>" class= img-fluid alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $currentproduct['productName']?></h5>
                    <div><?php echo $currentproduct['detail']?></div>
                    <?php
                        if($currentproduct['salePrice']!=''){?>
                        <p class="card-text"><span class="text-decoration-line-through"><?php echo number_format($currentproduct['price'],2)?></span>|<span class="text-danger"><?php echo number_format($currentproduct['salePrice'],2)?></span></p>
                        <?php }
                        else {
                        ?>
                        <span class="text-danger"><?php echo number_format($currentproduct['price'],2)?></span></p>
                        <?php }?>
                    <a href="#" class="btn btn-primary">Add to card</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col alert-danger">Sản phẩm tương tự</div>
          </div>
          <div class="row">
            <?php foreach($sameProducts as $sameProduct) {?>
              <div class="col-md-4">
                <div class="card">
                  <img src="<?php echo BASE_URL; ?>public/upload/<?php echo $sameProduct['image']?>" class="card-img-top" alt="hinhsp">
                  <div class="card-body text-center lert">
                    <a href="<?php echo BASE_URL.'product/productDetail/'. $sameProduct['alias'] ?>"  <a class='text-decoration-none'><h5 class="card-title"><?php echo $sameProduct['productName']?></h5></a>
                    <div class="card-body text-center lert alert-primary">
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star checked"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span></br></div>
                    <?php
                    if($sameProduct['salePrice']!=''){?>
                    <p class="card-text"><span class="text-decoration-line-through"><?php echo number_format($sameProduct['price'],2)?></span>|<span class="text-danger"><?php echo number_format($sameProduct['salePrice'],2)?></span></p>
                    <?php }
                    else {
                    ?>
                    <span class="text-danger"><?php echo number_format($sameProduct['price'],2)?></span></p>
                    <?php }?>
                    <a class="btn btn-primary text-center" href="<?php echo BASE_URL?>cart/add/<?php echo $sameProduct['productId']?>/<?php echo $sameProduct['productName']?>/<?php if($sameProduct['salePrice']<>0) echo $sameProduct['salePrice']; else echo $sameProduct['price']?>">Add to card</a>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
</div>