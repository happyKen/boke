<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>KEN</title>
    <meta name="keywords" content="ken" />
    <meta name="description" content="ken" /><link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />

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
                    <li><a href="index.php" >主页</a></li>
                    <li><a href="photo.php">相册</a></li>
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
    
   		<h2>文章天地</h2>
        <p></p>
   
    </div>
</div>

<div id="templatemo_middle_wrapper">

	<div id="content_wrapper">
    	
        <div class="content_box_top"></div>
        <div class="content_box">

            <div class="post_section">
<?php
include("db_connect.php");
$id = $_GET['id'];
$select = mysql_query("select * from article where id='$id'");
$result=mysql_fetch_array($select);
?>
                <h2><?php echo $result['title']?></h2>

                <div class="post_meta"><strong>日期:</strong> 15 January 2015 | <strong>作者:</strong> <a href="#">王泽铿</a></div>
                <p><?php echo $result['content']?></p>

                <div class="cleaner"></div>
                <div class="cleaner"></div>

            </div>
       </div><div class="content_box_bottom"></div>
       
       <div class="content_box_top"></div><div class="content_box">
       
        	<div class="comment_tab">
            	评论
            </div>
            
            <div id="comment_section">
                <ol class="comments first_level">
                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author" />
                                </div>
                                
                                <div class="comment_text">
                                    <div class="comment_author">聪聪<span class="date">November 28, 2048</span><span class="time">8:48 AM</span></div>
                                    <p>我一开始就是看海贼王一直到现在。丫的 那么老娘看到娜美那段哭的稀里哗啦是怎么回事啊.</p>
                                  <div class="btn_more float_r"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>                        
                            
                        </li>
                        
                        <li>
                        
                        
                            	<ol class="comments">
                            
                                    <li>
                                        <div class="comment_box commentbox2">
                                        
                                        <div class="gravatar">
                                        <img src="images/avator.png" alt="author" />
                                        </div>
                                        <div class="comment_text">
                                        <div class="comment_author">南神 <span class="date">November 29, 2048</span><span class="time">11:45 AM</span></div>
                                        <p>我一开始就是看海贼王一直到现在。丫的 那么老娘看到娜美那段哭的稀里哗啦是怎么回事啊. </p>
                                       <div class="btn_more float_r"><a href="#">Reply</a></div>
                                        </div>
                                        
                                        <div class="cleaner"></div>
                                        </div>                        
                                    
                                    
                                    </li>
                                    
                                    <li>
                                    
                            
                                        <ol class="comments">
                                    
                                            <li>
                                                <div class="comment_box commentbox1">
                                                
                                                    <div class="gravatar">
                                                        <img src="images/avator.png" alt="author" />
                                                    </div>
                                                    <div class="comment_text">
                                                        <div class="comment_author">国际段子手 <span class="date">November 30, 2048</span><span class="time">11:55 PM</span></div>
                                                        <p>海贼王是一部伟大的动漫，海贼王也是我所看过的动漫之中最好的。</p>
                                                      <div class="btn_more float_r"><a href="#">Reply</a></div>
                                                    </div>
                                                    
                                                    <div class="cleaner"></div>
                                                </div>                        
                                                
                                                
                                            </li>
                                    
                                        </ol>
                        
                        			</li>
                                </ol>
                                
						</li>
                        

                        
                        <li>
                            <div class="comment_box commentbox1">
                                    
                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">南神 <span class="date">November 30, 2048</span><span class="time">12:34 PM</span></div>
                                    <p> 我是男神我是男神我是男神我是男神我是男神我是男神我是男神</p>
                                  <div class="btn_more float_r"><a href="#">Reply</a></div>
                                </div>
                                
                                <div class="cleaner"></div>
                            </div>                        
                            
                            
                        </li>
                        
                    </ol>
                </div>
                
                <div id="comment_form">
                    <h3>留言</h3>
                    
                    <form action="#" method="get">
                        <div class="form_row">
                            <label>昵称</label><br />
                            <input type="text" name="name" />
                        </div>
                        <div class="form_row">
                            <label>邮箱</label><br />
                            <input type="text" name="name" />
                        </div>
                        <div class="form_row">
                            <label>你的评论</label><br />
                            <textarea  name="comment" rows="" cols=""></textarea>
                        </div>
                        

                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />
                    </form>
                    
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

</body>
</html>