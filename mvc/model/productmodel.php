<?php
class ProductModel extends BaseModel{
    protected $table = DB_PREFIX.'product';

    // protected $key = 'productId';
    public function home($limit=LIMIT,$offset){
        //lay sp khmai, limit sp,  vi tri offset
        $sql="select* from $this->table where trash='0' and status='1'and salePrice<>''limit $offset, $limit";
        $data['products']=$this->queryAll($sql);
        //chuan bi du lieu de phan trang
        $sql="select* from $this->table where trash='0' and status='1'and salePrice<>0";
        $totalRecords=count($this->queryAll($sql));
        $data['paging']= new Paging('product/home/', $totalRecords,$limit,$offset);
        return $data;
    }

    public function productByCat($catalias, $limit, $offset){
        //nhóm sản phẩm có catAlias là $catAlias
        $catmodel=new CategoryModel;
        $cat=$catmodel->get(['alias'=>$catalias]);
        $data['cat']=$cat;
        //lay cac sp thuoc nhom co catId la $cat['catId']
        $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'catId'=>$cat['catId']],$limit, $offset);
        //chuan bi du lieu de phan trang
        $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'catId'=>$cat['catId']]));
        $data['paging']= new Paging('product/productByCat/'.$catalias.'/', $totalRecords,$limit,$offset);
        return $data;
    }

    public function productByBrand($brandalias, $limit, $offset){
        //nhóm sản phẩm có brandAlias là $brandAlias
        $brandmodel=new BrandModel;
        $brand=$brandmodel->get(['alias'=>$brandalias]);
        $data['brand']=$brand;
        //lay cac sp thuoc nhom co catId la $brand['brandId']
        $data['products']=$this->getAllLimit(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']],$limit, $offset);
        //chuan bi du lieu de phan trang
        $totalRecords=count($this->getAll(['trash'=>0,'status'=>1,'brandId'=>$brand['brandId']]));
        $data['paging']= new Paging('product/productByBrand/'.$brandalias.'/', $totalRecords,$limit,$offset);
        return $data;
    }

    public function productDetail($productalias){
        //lay 1 sp co alias nhu vay
        $data['currentproduct']=$this->get(['alias'=>$productalias]);
        //lay cac san pham cung nhom
        $data['sameProducts']=$this->getAll(['trash'=>0,'status'=>1,'catId'=>$data['currentproduct']['catId']]);
        return $data;
    }

    public function productSearch($searchKey,$limit, $offset){
        //lay ra cac san pham thoa yeu cau tim kiem , $limit,  $offset
        $sql="select * from $this->table where trash= '0'and status = '1' and productName like '%$searchKey%' limit $offset,$limit";
        //thuc thi cau lenh
        $data['products']=$this->queryAll($sql);
        $sql="select* from $this->table where trash = '0' and status = '1' and productName like '%$searchKey%' ";
        $totalRecords=count($this->queryAll($sql));
        $data['totalRecords']=$totalRecords;
        $data['paging']= new Paging('product/productsearch/', $totalRecords,$limit,$offset);
        return $data;
    }
}
?>