<?php 
class Page extends UserController{
    private $pagemodel;
    function __construct()
    {
        $this->pagemodel=new PageModel();
    }
    public function showPage($pageId){
        $data=$this->pagemodel->showPage($pageId);
        $this->loadview('master2','page/showpage',$data);
    }
}
?>