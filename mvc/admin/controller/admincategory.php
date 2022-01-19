<?php
class AdminCategory extends AdminController{
    public function categoryList($limit=LIMIT,$offset=0){
        // Yêu cầu model thực hiện
        $admincategorymodel=new AdminCategoryModel;
        $data=$admincategorymodel->categoryList($limit,$offset);
        //Gửi dữ liệu cho view
        $this->loadAdminView('adminmaster1','admincategory/categorylist',$data);
    }
    public function categoryListInTrash($limit=LIMIT,$offset=0){
        // Yêu cầu model thực hiện
        $admincategorymodel=new AdminCategoryModel;
        $data=$admincategorymodel->categoryListIntrash($limit,$offset);
        //Gửi dữ liệu cho view
        $this->loadAdminView('adminmaster1','admincategory/categorylistintrash',$data);
    }
    public function categorytoggleTrash($catId)
    {
        //Yêu cầu model thực hiện
        $admincategorymodel=new AdminCategoryModel;
        $data=$admincategorymodel->toggleTrash($catId);
    }

    public function categoryToggleStatus($catId)
    {
        //Yêu cầu model thực hiện
        $admincategorymodel=new AdminCategoryModel;
        $data=$admincategorymodel->toggleStatus($catId);
    }

    public function categoryDelete($catId)
    {
        //Yêu cầu model thực hiện
        $admincategorymodel=new AdminCategoryModel;
        $admincategorymodel->categoryDelete($catId);
    }

    public function categoryUnTrash($catId)
    {
        //Yêu cầu model thực hiện
        $admincategorymodel=new AdminCategoryModel;
        $admincategorymodel->categoryUnTrash($catId);
    }


    public function addcategory($limit=LIMIT,$offset=0)
     {
         //Xử lý dữ liệu nhận được
        if(isset($_POST['submit']))
        {
            $admincategorymodel=new AdminCategoryModel;
            $admincategorymodel->doAddCategory();
        }
        // //Hiển thị form Add
        $catmodel=new AdminCategoryModel;
        $data['cats']=$catmodel->getAll(['trash'=>0,'status'=>1]);
        $brandmodel=new AdminBrandModel;
        $data['brands']=$brandmodel->getAll(['trash'=>0,'status'=>1]);
        $this->loadAdminView('adminmaster1','admincategory/addcategory',$data);
     }

     public function UpdateCategory($catId)
     {
        //Xử lý dữ liệu nhận được
        $admincategorymodel=new AdminCategoryModel;
        if(isset($_POST['submit']))
        {
            $admincategorymodel->doUpdateCategory($catId);
        }
        
        //Hiển thị form Update
        $catmodel=new AdminCategoryModel;
        $data['cats']=$catmodel->getAll(['trash'=>0,'status'=>1]);
        $brandmodel=new AdminBrandModel;
        $data['brands']=$brandmodel->getAll(['trash'=>0,'status'=>1]);
        $data['oldproduct']=$admincategorymodel->get(['catId'=>$catId]);
        $this->loadAdminView('adminmaster1','admincategory/updatecategory',$data);
     }

}
?>