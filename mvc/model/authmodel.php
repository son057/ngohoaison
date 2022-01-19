<?php 
class Authmodel  extends BaseModel {
    protected $table=DB_PREFIX.'admin';
    public function adminLogin(){
        //hứng dữ liệu
        $username=$_POST['inputUsername'];
        $password=md5(md5($_POST['inputPassword']));
        //lấy user từ bảng admin
        $u=$this->get(['username'=>$username,'trash'=>0]);
        //
        
        if(isset($u)&&($u['pass']==$password))
        {
            $_SESSION['username']=$username;
            $_SESSION['level']=$u['level'];
            header('Location:'.BASE_URL.'dashboard/home');
            exit;
        }
        else
        {
            $_SESSION['msg']='Dang nhap that bai';
            header('Location:'.BASE_URL.'auth/adminlogin');
            exit;
        }
    }
}
?>