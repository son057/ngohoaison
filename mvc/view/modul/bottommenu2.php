<?php
$db= new PageModel;
$pages=$db->getAll(['trash'=>0,'status'=>1,'position'=>1]);
?>

<div class="col-md-4 p-5">
<?php foreach($pages as $page){?>
            <a href="<?php echo BASE_URL;?>page/showpage/<?php echo $page['pageId'];?>" class="text-decoration-none"><?php echo $page['title'];?></a><br>
         <?php }?>
        </div>