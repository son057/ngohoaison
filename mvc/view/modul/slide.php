<?php
$imagemodel=new ImageModel;
$images=$imagemodel->getAll(['trash'=>0,'status'=>1,'position'=>1])
?>


<div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="<?php echo BASE_URL.'public/img/'.$images[0]['image'] ?>" class="d-block w-100" alt="...">
          </div>
          <?php unset($images[0])?>
        <?php foreach($images as $image){?>
          <div class="carousel-item">
            <img src="<?php echo BASE_URL.'public/img/'.$image['image'] ?>" class="d-block w-100" alt="...">
          </div>
        <?php }?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>