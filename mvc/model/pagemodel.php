<?php
class PageModel extends BaseModel{
    protected $table=DB_PREFIX."page";
    public function showPage($pageId)
    {
        $data['pages']=$this->getAll(['pageId'=>$pageId]);
        return $data;
    }
}
?>