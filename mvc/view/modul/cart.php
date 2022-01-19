<?php
$cart=new Cart;
$cartItems=$cart->getItems();
?>
<form action='<?php echo BASE_URL ?>cart/update' method=post>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Giỏ hàng</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-1">STT</div>
            <div class="col-md-3">Tên hàng</div>
            <div class="col-md-2">Đơn giá</div>
            <div class="col-md-2">Số lượng</div>
            <div class="col-md-4">Thành Tiền</div>
        </div>
        <?php if(empty($cartItems)) echo "Giỏ hàng rỗng ";
        else
        {$i=1;
        foreach($cartItems as $productId=>$item){
        ?>
        <div class="row">
            <div class="col-md-1"><?php echo $i++;?></div>
            <div class="col-md-3"><?php echo $item['productName']?></div>
            <div class="col-md-2"><?php echo $item['price']?></div>
            <div class="col-md-2"><input name='<?php echo $productId;?>' type=number max=50 min=0 step=1 value='<?php echo $item['quantity']?>'></div>
            <div class="col-md-4"><?php echo $cart->getSubTotal($productId)?></div>
        </div>
       <?php }} ?>
        <div class="row">
        <marquee><div class="col-md-8">Tổng cộng</div></marquee>
            <div class="col-md-4"><?php echo $cart->getTotal();?></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value='Save changes'>
        <a href='<?php echo BASE_URL?>cart/checkout' class="btn btn-primary">Checkout</a>
      </div>
    </div>
  </div>
</div>
</form>
<?php
if(isset($_SESSION['update']))
{
  echo"<script>carticon.click()</script>";
  unset($_SESSION['update']);
}
?>