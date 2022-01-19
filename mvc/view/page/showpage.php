<?php 
$pages=$data['pages'];
?>

<div class="card">
        <div class="card-body">
        <?php foreach($pages as $page){?>
          <h2 class="card-title"><?php echo $page['title'];?></h2>
          <div class="card-text">
          <?php echo nl2br($page['content']);?>
          </div>
          <?php }?>
        </div>
      </div>