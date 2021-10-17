<?php
class Helper {
public function to_alias($str) {
        $str=trim(mb_strtolower($str));
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/[^a-z0-9-\s]/", '', $str);
        $str = preg_replace("/([\s]+)/", "-", $str);
        return $str;
    }
    public function doUpload($inputfileupload)
    {
        //Kiểm tra có dữ liệu fileupload trong $_FILES không
        //nếu không có thì dừng
        $_SESSION['msg']='';
        if ($_FILES[$inputfileupload]['error'] != 0)
        $_SESSION['msg'].= "Dữ liệu không đúng cấu trúc, Dữ liệu upload bị lỗi Hoặc chưa chọn file upload<br>";
        else{
            //Đã có dữ liệu upload, thực hiện xử lý file upload
            //Thư mục bạn sẽ lưu file upload
            $target_dir = "public/upload/";
            //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
            $target_file = $target_dir. basename($_FILES[$inputfileupload]["name"]);
            $allowUpload = true;
            //Lấy phần mở rộng của file(ipg,png,...)
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            //Cỡ lớn nhất được upload(bytes)
            $maxfilesize =800000;
            //Những loại Ele đuợc phép upload
            $allowtypes = array('jpg', 'png', 'jpeg', 'gif');
            if(isset($_POST["submit"])) {
            //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
            $check = getimagesize($_FILES[$inputfileupload]["tmp_name"]);
            if($check !== false){
            $_SESSION['msg'].="Đây là file ảnh-".$check["mime"].".<br>";
            $allowUpload = true;
            }
            else{
                $_SESSION['msg'].="Không phải file ảnh.<br>";
                $allowUpload=false;
            }
        }
        //Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
        //Bạn có thể phát triển code để lưu thành một tên file khác
        if(file_exists($target_file))
        {
            $_SESSION['msg'].="Tên file đã tồn tại trên server, không được ghi đè<br>";
            $allowUpload=false;
        }
        //Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
        if($_FILES[$inputfileupload]["size"]>$maxfilesize)
        {
            $_SESSION['msg'].="Không được upload ảnh lớn hơn $maxfilesize (bytes).<br>";
            $allowUpload=false;
        }

        //Kiểm tra kiểu file
        if(!in_array($imageFileType,$allowtypes))
        {
            $_SESSION['msg'].="Chỉ được upload các định dạng JPG,PNG,JPEG,GIF<br>";
            $allowUpload=false;
        }
        if ($allowUpload)
        {
            // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
            if (move_uploaded_file($_FILES[$inputfileupload]["tmp_name"], $target_file))
            {
                $_SESSION['msg'].="/public/upload/".basename ($_FILES[$inputfileupload]["name"])."Đã upload thành công.<br>";
                $_SESSION['msg'].="File luu tại" .$target_file.'<br>';
                return true;
            }
            else
            {
            $_SESSION['msg'].= "Có lỗi xảy ra khi upload file.<br>";
            return false;
            }
        }
        else
        {
            $_SESSION['msg'].="Không upload được file, có thể do file lớn, kiểu file không đúng...";
            return false;
        }
    }
}
}
?>