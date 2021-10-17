<?php require_once PATH_TO_MODUL.'header.php';?>
<?php require_once PATH_TO_MODUL.'slide.php';?>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-3">
          <?php require_once PATH_TO_MODUL.'leftcategorymenu.php';?>
          <?php require_once PATH_TO_MODUL.'leftbrandmenu.php';?>
        </div>
        <div class="col-md-9">
          <?php include_once PATH_TO_VIEW.$viewname.'.php';?>
        </div>
      </div>
    </div>
    <div class="footer container-fluid bg-dark">
      <div class="row">
      <?php require_once PATH_TO_MODUL.'bottommenu1.php';?>
      <?php require_once PATH_TO_MODUL.'bottommenu2.php';?>
        <div class="col-md-2 p-5 text-end">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftiki.vn%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="400" height="140" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
          <a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
        </div>
      </div>
      <a class="btn-top" href="javascript:void(0);" title="Top" style="display: block;">TOP</a>
    </div>
    <?php require_once PATH_TO_MODUL.'cart.php';?>
</body>
</html>