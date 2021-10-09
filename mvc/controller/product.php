<?php
class Product extends UserController{
    public function home($limit=LIMIT, $offset=0)
    {
        $this->loadView('master2','product/home',[]);
    }
    public function productByCat($catalias,$limit=LIMIT,$offset=0)
    {
        $this->loadView('master1','product/productbycat',[]);
    }

    public function productByBrand($alias,$limit=LIMIT,$offset=0)
    {
        $this ->loadview('master1','product/productbybrand',[]);
    }
    public function productSearch($searchKey,$limit=LIMIT,$offset=0)
    {
        $this ->loadview('master2','product/productsearch',[]);
    }
    public function productDetail($alias)
    {
        $this ->loadview('master1','product/productdetail',[]);
    }
}
?>