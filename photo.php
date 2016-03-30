<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>KEN</title>
    <meta name="keywords" content="ken" />
    <meta name="description" content="ken" />
    <link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->
    <script type="text/javascript">
        var xmlHttp

        function image_delete(str)
        {
            xmlHttp=GetXmlHttpObject()
            if (xmlHttp==null)
            {
                alert ("Browser does not support HTTP Request")
                return
            }
            var url="dele.php"
            url=url+"?file1="+str
            url=url+"&sid="+Math.random()
            xmlHttp.onreadystatechange=stateChanged
            xmlHttp.open("GET",url,true)
            xmlHttp.send(null)
        }

        function stateChanged() {
            if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
                var ch = xmlHttp.responseText
                alert(ch)
                history.go(0);

            }
        }

        function GetXmlHttpObject()
        {
            var xmlHttp=null;
            try
            {
                // Firefox, Opera 8.0+, Safari
                xmlHttp=new XMLHttpRequest();
            }
            catch (e)
            {
                // Internet Explorer
                try
                {
                    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
                }
                catch (e)
                {
                    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
            }
            return xmlHttp;
        }
    </script>
</head>
<body> 

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">
    
        <div id="header_left">
            
            <div id="site_title">
                
                <!--<a href="http://www.templatemo.com"><img src="images/templatemo_logo.png" alt="logo" /><span>Free XHTML CSS Templates</span></a>-->
            </div> <!-- end of site_title -->
    
        </div>
        
        <div id="header_right">
        
            <div id="templatemo_menu">
                
                <ul>
                    <li><a href="index.php">主页</a></li>
                    <li><a href="photo.php" class="current">相册</a></li>
                    <li><a href="person.php">个人档案</a></li>
                    <li class="last"><a href="friend.php">好友</a></li>
                </ul>    	
            
            </div> 
            <!-- end of templatemo_menu -->
            
        </div>
    
        <div class="cleaner"></div>
        
    </div>
</div>

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    
   		<h2>相册</h2>
        <p> 全球顶尖的摄影照片，只有你想不到，没有你找不到</p>
   
    </div>
</div>

<div id="templatemo_middle_wrapper">

	<div id="content_wrapper">
    	
        <div class="content_box_top"></div>
        <div class="content_box">
        
        
        	<div id="gallery">
            <ul>
                <?php
                $basedir = './photo/';
                $handle = opendir($basedir);
                while ($file = readdir($handle)) {
                if ($file != "." && $file != "..") {
                    $imagePath = $basedir . $file;
                ?>

                <li>
                    <div class="left">
                        <a href="<?php echo $imagePath ?>" class="pirobox" title="Project 1"><img
                                src="<?php echo $imagePath ?>"  alt=""/></a>
                    </div>
                    <div class="right">


                        <div class="button"><?php echo "<INPUT TYPE='button' value='删除' onclick=\"image_delete('" . urlencode($basedir . $file) . "')\">" ?> </div>
                    </div>
                    <div class="cleaner"></div>
                </li>
                <?php

                }
                }
                closedir($handle);
                ?>
            </ul>
        </div>
            <div id="comment_form">
                <h3>上传图片</h3>

                <FORM enctype="multipart/form-data"  METHOD="post" ACTION="">

                    <INPUT TYPE="hidden" name="MAX_FILE_SIZE" value=1000000>

                    请输入要上传的图片名:<BR>
                    <input type="file" name="uploadfile" size=50 >	<BR>
                    <INPUT TYPE="submit"  value="上传图片" name="submitup" class="submit_btn">
                </FORM>




            </div>
        </div><div class="content_box_bottom"></div>

	</div>

    <div id="sidebar_wrapper">

        <div class="sidebar_top"></div>

        <!--<div class="sidebar">-->
        <!--<a href="http://www.templatemo.com" target="_parent"><img src="images/banner_240x120.jpg" alt="banner" width="240" height="120" /></a>-->
        <!--</div>-->
        <!---->
        <!--<div class="sidebar_bottom"></div>-->
        <!---->
        <!--<div class="sidebar_top"></div>-->

        <div class="sidebar">

            <h4>日记</h4>
            <ul class="sidebar_menu">
                <li><a href="index.php"> 1:我是路飞,未来的海贼王.</a></li>
                <li><a href="index.php">2:大剑客现身.海贼猎人_罗罗亚索隆.  </a></li>
                <li><a href="#">3:蒙卡VS路飞,神秘的美少年是谁?  </a></li>
                <li><a href="index.php"> 4:路飞的过去。红发登场!  </a></li>
                <li><a href="index.php"> 5:恐怖.神奇的力量,海贼小丑巴基船长.  </a></li>
                <li><a href="#"> 6:史上最厉害的怪人.催眠师杰克斯.  </a></li>
            </ul>

        </div>

        <div class="sidebar_bottom"></div>

        <div class="sidebar_top"></div>
        <div class="sidebar">

            <h4>最新评论</h4>
            <div class="recent_comment_box">
                <a href="#">聪聪</a>
                <p>我一开始就是看海贼王一直到现在。丫的 那么老娘看到娜美那段哭的稀里哗啦是怎么回事啊.</p>
            </div>

            <div class="recent_comment_box">
                <a href="#">南神</a>
                <p> 我以前也觉得火影很好看啦，后来同学告诉我你看了海贼就不觉得火影好看了。</p>
            </div>

            <div class="recent_comment_box">
                <a href="#">国际段子手</a>
                <p>海贼王是一部伟大的动漫，海贼王也是我所看过的动漫之中最好的。</p>
            </div>

        </div><div class="sidebar_bottom"></div>

    </div>

    <div class="cleaner"></div>

</div>
<div id="templatemo_copyright_wrapper">
    <div id="templatemo_copyright">
        Copyright © 2015 <a href="#">铿铿铿</a> | 电话：82088088820</a>
    </div>
</div>
<?php
if(isset($_POST['submitup'])) {
    $UploadPath = "./photo/";
    $type = array("jpg", "gif");//设置允许上传文件的类型
    if (($_FILES['uploadfile']['tmp_name'] == "") || ($_FILES['uploadfile']['tmp_name'] == "none")) {
        echo "没有选文件或文件太大";
    } else {
        $dest_filename = $UploadPath . $_FILES["uploadfile"]["name"];
        $oldname = $_FILES["uploadfile"]["name"];
        $fiearr=explode(".",$oldname);       //将原文件名分成数组
        $key=count($fiearr)-1;                //计算出最后一个扩展名的主键
        $fie_extend=$fiearr[$key];             //列出上传文件的扩展名
        $fie_extend=strtolower($fie_extend);  //将扩展名统一为小写
        if($fie_extend=="jpg"||$fie_extend=="gif"){    //限制上传为图片格式的文件
            if (file_exists($dest_filename)) {
                echo "<script>alert('文件", $_FILES["uploadfile"]["name"], "已经存在'); window.location.href=\"photo.php\";</script>";
            } else {
                if (copy($_FILES['uploadfile']['tmp_name'], $dest_filename))
                    echo "<script>alert('上传文件", $_FILES["uploadfile"]["name"], "成功！'); window.location.href=\"photo.php\";</script>";
                else
                    echo "<script>alert('上传文件", $_FILES["uploadfile"]["name"], "失败'); window.location.href=\"photo.php\";</script>";
            }
        }
        else{
            echo "<script>alert('你只能上传jpg或者gif文件'); window.location.href=\"photo.php\";</script>";
        }
    }
}
?>
</body>
</html>