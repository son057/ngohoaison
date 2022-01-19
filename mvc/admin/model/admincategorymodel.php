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


    public function categoryListInTrash($limit,$offset){
        //Lấy danh sách sản phẩm
        $data['cats']=$this->getAllLimit(['trash'=>1],$limit,$offset);
        //Tính tổng số sản phẩm
        $totalRecords=count($this->getAll(['trash'=>1]));
        //Chuẩn bị paging
        $data['paging']=new Paging('admincategory/categoryListInTrash/',$totalRecords,$limit,$offset);
        return $data;
    }
    public function toggleTrash($catId)
    {
        if($this->toggle('trash',$catId))
        $_SESSION['msg']="Thuc hien thanh cong";
        else
        $_SESSION['msg']="Thuc hien that bai";
        header("location:".BASE_URL."admincategory/categorylist/".LIMIT."/0");
    }
    public function toggleStatus($catId)
    {
        if($this->toggle('status',$catId))
        $_SESSION['msg']="Thuc hien thanh cong";
        else
        $_SESSION['msg']="Thuc hien that bai";
        header("location:".BASE_URL."admincategory/categorylist/".LIMIT."/0");
    }

    public function categoryDelete($catId)
    {
        if($this->delete($catId))
        $_SESSION['msg']="Thuc hien thanh cong";
        else
        $_SESSION['msg']="Thuc hien that bai";
        header("location:".BASE_URL."admincategory/categorylistInTrash/".LIMIT."/0");
    }


    public function categoryUnTrash($catId)
    {
        if($this->toggleTrash($catId))
        $_SESSION['msg']="Thuc hien thanh cong";
        else
        $_SESSION['msg']="Thuc hien that bai";
        header("location:".BASE_URL."admincategory/categorylistInTrash/".LIMIT."/0");
    }

    public function doAddCategory()
    {
        // Lấy dữ liệu sp mới.
        $newpro['catName']=$_POST['inputCategoryName'];
        $newpro['alias']=$_POST['inputAlias'];
        $newpro['parentId']=0;
        $newpro['trash']=0;
        $newpro['status']=$_POST['inputStatus'];
        // Tạo chuỗi alias
        $helper=new Helper;
        if($newpro['alias']=='')$newpro['alias']=$helper->to_alias($newpro['catName']);
        $_SESSION['msg']='';
        if($this->insert($newpro)) $_SESSION['msg'].='Thêm loại sản phẩm thành công';
        else
        {
            $_SESSION['msg'].='Thêm loại sản phẩm thất bại';
        }
    }



    public function doUpdateCategory($catId)
    {
        // Lấy dữ liệu sp mới.
        $newpro['catName']=$_POST['inputCategoryName'];
        $newpro['alias']=$_POST['inputAlias'];
        $newpro['status']=$_POST['inputStatus'];
        $newpro['trash']=$_POST['inputTrash'];
        // Tạo chuỗi alias
        $helper=new Helper;
        if($newpro['alias']=='')$newpro['alias']=$helper->to_alias($newpro['catName']);
        {
            if($this->update($newpro,$catId)) $_SESSION['msg'].='Cập nhật sản phẩm thành công';
            else
            {
                $_SESSION['msg'].='Cập nhật sản phẩm thất bại';
            }
            header("Location:".BASE_URL."adminCategory/categoryList");
            exit;
        }
            
    }
}
?>