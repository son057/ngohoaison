<?php
class Product extends UserController{
    private $productmodel;
    function __construct()
    {
        $this->productmodel=new ProductModel;
    }
    public function home($limit=LIMIT, $offset=0)
    {
        $data=$this->productmodel->home($limit,$offset);
        $this->loadView('master2','product/home',$data);
    }
    public function productByCat($catalias,$limit=LIMIT,$offset=0)
    {
        $data=$this->productmodel->productByCat($catalias, $limit, $offset);
        $this->loadView('master1','product/productbycat',$data);
    }

    public function productByBrand($brandalias,$limit=LIMIT,$offset=0)
    {
        $data=$this->productmodel->productByBrand($brandalias, $limit, $offset);
        $this ->loadview('master1','product/productbybrand',$data);
    }
    public function productSearch($limit=LIMIT,$offset=0)
    {
        //xac dinh $searchKey
        if(isset($_POST['searchKey'])) $searchKey=$_POST['searchKey'];
        else
        $searchKey='';
        //chuan bi du lieu
        $data=$this->productmodel->productSearch($searchKey, $limit, $offset);
        $this ->loadview('master2','product/productsearch',$data);
    }
    public function productDetail($productalias)
    {
        $data=$this->productmodel->productDetail($productalias);
        $this ->loadview('master1','product/productdetail',$data);
    }
}
?>