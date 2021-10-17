<?php
class AdminCategoryModel extends AdminModel{
    protected $table=DB_PREFIX.'category';
    protected $field=['catName','alias','parentId','trash','status'];
    protected $key='catId';
    public function categoryList($limit,$offset){
        //Lấy nhóm sản phẩm
        $data['cats']=$this->getAllLimit(['trash'=>0],$limit,$offset);
        //Tính tổng số nhóm sản phẩm
        $totalRecords=count($this->getAll(['trash'=>0]));
        //Chuẩn bị paging
        $data['paging']=new Paging('admincategory/categoryList/',$totalRecords,$limit,$offset);
        return $data;
    }
}
?>