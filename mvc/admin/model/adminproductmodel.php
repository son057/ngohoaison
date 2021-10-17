<?php 
class AdminProductModel extends AdminModel{
    protected $table=DB_PREFIX.'product';
    protected $field=['productName','alias','catId','brandId','image','trash','status','detail','price','salePrice'];
    protected $key='productId';
// Các function cần thiết
public function productList($limit,$offset){
    //Lấy danh sách sản phẩm
    $data['products']=$this->getAllLimit(['trash'=>0],$limit,$offset);
    //Tính tổng số sản phẩm
    $totalRecords=count($this->getAll(['trash'=>0]));
    //Chuẩn bị paging
    $data['paging']=new Paging('adminproduct/productList/',$totalRecords,$limit,$offset);
    return $data;
}
public function productListInTrash($limit,$offset){
    //Lấy danh sách sản phẩm
    $data['products']=$this->getAllLimit(['trash'=>1],$limit,$offset);
    //Tính tổng số sản phẩm
    $totalRecords=count($this->getAll(['trash'=>1]));
    //Chuẩn bị paging
    $data['paging']=new Paging('adminproduct/productListInTrash/',$totalRecords,$limit,$offset);
    return $data;
}
public function toggleTrash($productId)
{
    if($this->toggle('trash',$productId))
    $_SESSION['msg']="Thuc hien thanh cong";
    else
    $_SESSION['msg']="Thuc hien that bai";
    header("location:".BASE_URL."adminproduct/productlist/".LIMIT."/0");
}
public function toggleStatus($productId)
{
    if($this->toggle('status',$productId))
    $_SESSION['msg']="Thuc hien thanh cong";
    else
    $_SESSION['msg']="Thuc hien that bai";
    header("location:".BASE_URL."adminproduct/productlist/".LIMIT."/0");
}

public function productDelete($productId)
{
    if($this->delete($productId))
    $_SESSION['msg']="Thuc hien thanh cong";
    else
    $_SESSION['msg']="Thuc hien that bai";
    header("location:".BASE_URL."adminproduct/productlistInTrash/".LIMIT."/0");
}

public function productUnTrash($productId)
{
    if($this->toggleTrash($productId))
    $_SESSION['msg']="Thuc hien thanh cong";
    else
    $_SESSION['msg']="Thuc hien that bai";
    header("location:".BASE_URL."adminproduct/productlistInTrash/".LIMIT."/0");
}

}
?>