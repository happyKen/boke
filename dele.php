<?php
if(unlink($_GET['file1'])){
    $response="删除成功";
}else{
    $response="删除失败";
}
echo $response;

?>
