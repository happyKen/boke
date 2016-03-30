<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
$UploadPath = "./photo/";
$type=array("jpg","gif");//设置允许上传文件的类型
if (($_FILES['uploadfile']['tmp_name'] == "") || ($_FILES['uploadfile']['tmp_name'] == "none"))
{
    echo "没有选文件或文件太大";
}
else
{
    $dest_filename = $UploadPath . $_FILES["uploadfile"]["name"];
    if (!in_array(strtolower(substr(strrchr($_FILES["uploadfile"]["name"], '.'), 1)), $type)) {
        $text = implode(",", $type);
        echo "您只能上传以下类型文件: ", $text, "<br>";
    } else {
        if (file_exists($dest_filename)) {
            echo "<script>alert('文件", $_FILES["uploadfile"]["name"], "已经存在')</script>";
        } else {
            if (copy($_FILES['uploadfile']['tmp_name'], $dest_filename))
                echo "<script>alert('上传文件", $_FILES["uploadfile"]["name"], "成功！'); window.location.href=\"photo.php\";</script>";
            else
                echo "<script>alert('上传文件", $_FILES["uploadfile"]["name"], "失败'); window.location.href=\"photo.php\";</script>";
        }
    }
}
?>