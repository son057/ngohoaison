<?php
class Page extends UserController{
    public function showPage($pageId){
        $data=$this->pagemodel->showPage($pageId);
        $this->loadview('master2','page/showpage',$data);
    }
}