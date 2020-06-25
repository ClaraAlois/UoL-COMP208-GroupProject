<?php 
$conn=mysqli_connect('8.209.73.211','root','123456','mydb');
session_start();
$a=$_GET['id'];
$myresult=mysqli_query($conn,"select * from selfuploadquestion where questionID='{$a}';");
$row=mysqli_fetch_array($myresult);
$content=$row['content'];
$tag=$row['tag'];
$wrongAnswer=$row['wrongAnswer'];
$rightAnswer=$row['rightAnswer'];
 

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>question details</title>
        <link rel="icon" type="image/x-icon" href="drops.png">
        <style type="text/css">
            .divForm{
            position: relative;
            width: 400px;
            height: 200px;
            top: 30px;
            left: 40px;
            }
            </style>
            <style type="text/css">
                         *{
                padding: 0;
                margin: 0;
            }
            html,body{
                height: 100%;
            }
            .wrap{
                position:absolute;
                width: 260px;
                height:840px;
                background-color: #1F2935;
            }
            .wrap1{
                position:absolute;
                width:1480px; 
                height: 55px;
                background-color:white;
            }
            .wrap2{
                    position:absolute;
                    left: 310px;
                    top: 170px;
                    width: 1000px;
                    height: 570px;
                    background-color:white;
                }
            .header{
                width: 100%;
                height: 65px;
                background-color: #1F2935;
                font-weight:bolder;
                font-size: 30px;
                color: #3399ff;
                text-align: center;
                line-height: 65px;
                font-family:Arial,Verdana,Sans-serif;
                wordwrap:break-word;
            }
            .nav{
                width:250px;
                margin: 10px 5px 0;
            }
            .list{
                margin-bottom: 5px;
            }
            .list h2{
                position: relative;
                padding: 15px 0;
                background-color: #1F2935;
                margin-left: 20px;
                font-size: 16px;
                color: #fff;
                transition: .5s;
                font-family:Arial,Verdana,Sans-serif
            }
            .list1 h2{
                position: relative;
                padding: 20px 0;
                background-color: #1F2935;
                margin-left: 20px;
                font-size: 16px;
                color: #fff;
                transition: .5s;
                font-family:Arial,Verdana,Sans-serif
            }
            .list h2.on{
                background-color: #161D26;
                font-family:Arial,Verdana,Sans-serif;
            }
            .list i{
                position: absolute;
                right: 30px;
                top: 35%;
                height:1px;
                border: 8px solid transparent;
                border-left-color: #fff;/*triangle*/
                transform:rotate(0deg);
                transform-origin: 1px 8px;
                transition: .5s;
                font-family:Arial,Verdana,Sans-serif
            }
            .list i.on{
                transform:rotate(90deg);
                font-family:Arial,Verdana,Sans-serif
            }
            .hide{
                overflow: hidden;
                height:0;
                transition: .5s;
                font-family:Arial,Verdana,Sans-serif
            }
            .hide h5{
                padding: 4px 0;
                background-color: #161D26;
                margin-left: 25px;
                font-size:14px;
                color:#fff;
                border-bottom:#42495d;
                font-family:Arial,Verdana,Sans-serif
            }
            .white{
                text-decoration: none;
                color:white;
            }
            .black{
                text-decoration: none;
                color:black;
            }
            .grey{
                text-decoration: none;
                color:rgb(177, 174, 174);
            }
            </style>
             <style>
                body{background-color:#DBE7EE}
            </style>
            <style>
                .button {
                 width:80px;
                 text-align:center;
                 line-height:100%;
                 padding:0.3em;
                 font:16px;
                 font-style:normal;
                 text-decoration:none;
                 margin:2px;
                 vertical-align:text-bottom;
                 zoom:1;
                 outline:none;
                 font-size-adjust:none;
                 font-stretch:normal;
                 border-radius:50px;
                 box-shadow:0px 1px 2px rgba(0,0,0,0.2);
                 text-shadow:0px 1px 1px rgba(0,0,0,0.3);
                 color:rgb(82, 80, 80);
                 border:0.2px solid whitesmoke;
                 background-repeat:repeat;
                 background-size:auto;
                 background-origin:padding-box;
                 background-clip:padding-box;
                 background-color:whitesmoke;
                 background: linear-gradient(to bottom, #eeeff9 0%,#DBE7EE 100%);
            }  
            .button:hover {
                background:burlywood;
            }
            </style>
            <style>
            .sansserif{font-family:Arial,Verdana,Sans-serif}
            </style>
    </head>
    <body>
        
       <p style="position:absolute; left:305px; top:80px; font-size: x-large; width: 300px;" class="sansserif"><b>Question details</b></p>
       <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:300px; top:112px;"></a>
       <div style="position:absolute; left:335px; top:125px;width:400px">
        <?php
           $user=$_SESSION['user'];
         echo" <p class='sansserif'>> ".$user." > Questions</p>";
        ?>
        </div>
       <img alt="h" src="1.png" width="30px" height="30px" style="position:absolute; left:1120px; top:120px; " onclick="msg4()" >
       <img alt="h" src="2.png" width="30px" height="30px" style="position:absolute; left:1155px; top:120px; " onclick="msg1()" > 
       
       <div class="wrap1"></div>
       <p style="position:absolute; left:300px; top:20px; color:gray;" class="sansserif">Welcome to Drops!</p>
        <img alt="h" src="8.png" width="30px" height="30px" style="position:absolute; left:1100px; top:10px; " onclick="msg2()" ></a>
       <img alt="h" src="9.png" width="30px" height="30px" style="position:absolute; left:1140px; top:10px; " onclick="msg3()" ></a>
       <a href="homepage.php"><img alt="h" src="10.png" width="48px" height="48px" style="position:absolute; left:1180px; top:4px; "></a>
       
       <div class="wrap">
       <?php
           $user=$_SESSION['user'];
         echo" <div class='header'>".$user."</div>";
        ?>
            <div class="nav">
                <ul>
                    <li class="list1"> 
                        <h2  class="sansserif"><i></i><a href="homepage.php" class="white">
                            <img alt="h" src="6.png" width="24px" height="24px"> DASHBOARD</a></h2>
                    </li>
                    <li class="list">
                        <h2 class="sansserif"><i></i><img alt="h" src="11.png" width="24px" height="24px">  QUESTIONS</h2>
                        <div class="hide">
                        <h5 ><a href="mypage.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px"> SELF QUESTIONS</a></h5>
                            <h5 ><a href="schoolpage.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px">  UNIVERSITY QUESTIONS</a></h5>
                            <h5 ><a href="bookmark.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px">  BOOKMARK QUESTIONS</a></h5>
                            <h5 ><a href="upload.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px">  UPLOAD QUESTIONS</a></h5>
                        </div>
                    </li>
                    <li class="list1">
                        <h2 class="sansserif"><i></i><a href="calendar.php" class="white">
                            <img alt="h" src="3.png" width="25px" height="25px"> CALENDAR</a></h2>
                    </li>
                    <li class="list1">
                        <h2 class="sansserif"><i></i><a href="contact.php" class="white">
                            <img alt="h" src="4.png" width="24px" height="24px"> CONTACTS</a></h2>
                    </li>
                    <li class="list1">
                        <h2 class="sansserif"><i></i><a href="file.php"target="_blank" class="white">
                            <img alt="h" src="5.png" width="24px" height="24px"> FILE MANAGER</a></h2>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            (function () {
                var oList = document.querySelectorAll('.list h2'),
                    oHide = document.querySelectorAll('.hide'),
                    oIcon = document.querySelectorAll('.list i'),
                    lastIndex = 0;
                for(var i=0;i<oList.length;i++){
                    oList[i].index = i;
                    oList[i].isClick = false;
                    oList[i].initHeight = oHide[i].clientHeight;
                    oHide[i].style.height = '0';
                    oList[i].onclick = function () {
                        if(this.isClick){
                            oHide[this.index].style.height = '0';
                            oIcon[this.index].className = '';
                            oList[this.index].className = '';
                            oList[this.index].isClick = false;
                        }
                        else{
                            oHide[lastIndex].style.height = '0';
                            oIcon[lastIndex].className = '';
                            oList[lastIndex].className = '';
                            oHide[this.index].style.height = '110px';
                            oIcon[this.index].className = 'on';
                            oList[this.index].className = 'on';
                            oList[lastIndex].isClick = false;
                            oList[this.index].isClick = true;
                            lastIndex = this.index;
                        }
                    }
                }
            })();
        </script>
        <!--select from database and show details of each question -->
        <div class="wrap2" >
        <div class="divForm">
        <form autocomplete="off" class="sansserif">
            <b>Question：</b><br><textarea name="question" rows="3" cols="54" readonly style="border: dashed 1px #a59e9e;resize: none; width:860px;background-color:#F95555 ;padding:20px;font-size:x-large;font-weight:bolder;wordwrap:break-word;" ><?=$content;?></textarea><br>
            <b>Wrong Answer：</b><br><br><textarea name="wanswer" rows="4" cols="130" readonly style="border: dashed 1px #a59e9e;resize: none;  width:900px;padding:5px;"  ><?=$wrongAnswer;?></textarea><br>
            <b>Right Answer：</b><br><br><textarea name="ranswer" rows="4" cols="130" readonly style="border: dashed 1px #a59e9e;resize: none;width:900px; padding:5px;"><?=$rightAnswer;?></textarea><br>
            <b>Tag：</b><br><br><textarea name="tag" rows="1" cols="10" readonly style="border: dashed 1px #a59e9e;resize: none;padding:5px;width:900px;"><?=$tag;?></textarea><br><br>
            <a href="mypage.php"><input type="button" class="button" value="BACK" style="position:absolute; left:780px; top:auto;z-index: 1;"></a><br>
            
        </form>
        </div>
        </div>
        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something" style="position:absolute; left:850px; top:20px;width:150px;" ><button type="submit" style="position:absolute; left:1000px; top:20px;width:60px;">search</button></label></label><br><br>
        </form>
    </body>
</html>
<script>
    function msg4(){
        alert("Please wait for the printer.......");
    }
</script>
<script>
    function msg1(){
        alert("sharing .......");
    }
</script>
<script>
    function msg2(){
        alert("There is no message so far.......");
    }
</script>
<script>
    function msg3(){
        alert("There is no update so far.......");
    }
</script>