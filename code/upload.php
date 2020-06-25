<?php 
$conn=mysqli_connect('8.209.73.211','root','123456','mydb');
session_start();

$qName  = isset($_POST['qName']) ? $_POST['qName'] : "";
$qAnswerC = isset($_POST['qAnswerC']) ? $_POST['qAnswerC'] : "";
$qAnswerW = isset($_POST['qAnswerW']) ? $_POST['qAnswerW'] : "";
$qTag = isset($_POST['qTag']) ? $_POST['qTag'] : "";
$qTent = isset($_POST['qTent']) ? $_POST['qTent'] : "";
$privacy = isset($_POST['privacy']) ? $_POST['privacy'] : "";

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      $user=$_SESSION['user'];
	  if ($qName!=''&&$qAnswerC!=''&&$qAnswerW!=''&&$qTag!=''&&$qTent!=''&&$privacy!=''){
		if ($privacy=='private'){
			$privacy=1;
		}else{
			$privacy=0;
		}
	  $t=time();
	  $time=date("Y-m-d",$t);
      $sql_insert="insert into selfuploadquestion(time,tag,name,content,rightAnswer,wrongAnswer,privacy,sqAdmin_ID,userID)
        values('$time','$qTag','$qName','$qTent','$qAnswerC' ,'$qAnswerW','$privacy','000000','$user')";
	  }
	  if (mysqli_query($conn, $sql_insert)) {
		 //echo 'success';
	} else {
    echo "Error";
	}
 }

      

 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>upload question</title>
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
                    height: 640px;
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
                font-family:Arial,Verdana,Sans-serif
            }
            .list i{
                position: absolute;
                right: 30px;
                height:1px;
                top: 35%;
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
                height: 0;
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
        
       <p style="position:absolute; left:305px; top:80px; font-size: x-large; width: 300px;" class="sansserif"><b>Upload question</b></p>
       <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:300px; top:112px;"></a>
       <div style="position:absolute; left:335px; top:125px;width:400px">
        <!-- wj -->
        <?php
           $user=$_SESSION['user'];
         echo" <p class='sansserif'>> ".$user." > Questions</p>";
        ?>
        </div>
       <img alt="h" src="1.png" width="30px" height="30px" style="position:absolute; left:1120px; top:120px; " onclick="msg4()" >
       <img alt="h" src="2.png" width="30px" height="30px" style="position:absolute; left:1155px; top:120px; " onclick="msg1()" > 
       <!-- navigation bar -->
       <div class="wrap1"></div>
       <p style="position:absolute; left:300px; top:20px; color:gray;" class="sansserif">Welcome to Drops!</p>
        <img alt="h" src="8.png" width="30px" height="30px" style="position:absolute; left:1100px; top:10px; " onclick="msg2()" ></a>
       <img alt="h" src="9.png" width="30px" height="30px" style="position:absolute; left:1140px; top:10px; " onclick="msg3()" ></a>
       <!-- url����hompage -->
       <a href="homepage.php"><img alt="h" src="10.png" width="48px" height="48px" style="position:absolute; left:1180px; top:4px; "></a>
       <div class="wrap">
        <!-- wj -->
       <?php
           $user=$_SESSION['user'];
         echo" <div class='header'>".$user."</div>";
        ?>
            <div class="nav">
                <ul>
                    <li class="list1"> 
                        <!-- url����hompage -->
                        <h2  class="sansserif"><i></i><a href="homepage.php"class="white">
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
                        <h2 class="sansserif"><i></i><a href="file.php"class="white">
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
        <!-- navigation bar end -->
        <div class="wrap2" >
        <div class="divForm">
            <!--wj ��action�� -->
        <form id='uoloadQuestion' action="upload.php" method="post" autocomplete="off" class="sansserif">
            Title of the question:<br><br><textarea name="qName" rows="2" cols="130" style="resize: none;" autofocus required maxlength=300 ></textarea><br><br>
            Content of the question:<br><br><textarea name="qTent" rows="3" cols="130" style="resize: none;" autofocus required maxlength=400></textarea><br><br>
            Correct answer of the question:<br><br><textarea name="qAnswerC" rows="3" cols="130" style="resize: none;" autofocus required maxlength=200></textarea><br><br>
            Wrong answer of the question:<br><br><textarea name="qAnswerW" rows="3" cols="130" style="resize: none;" autofocus required maxlength=200></textarea><br><br>
    
            Tag of the the question:<br><br><textarea name="qTag" rows="2" cols="20" style="resize: none;" autofocus required maxlength=10></textarea><br><br>
            Privacy of the question:<br><br>
            <input type="radio" name="privacy" value="Public"> Public<br>
            <input type="radio" name="privacy" value="Private" checked="checked"> Private<br><br>
            <input type="submit" class="button" value="SUBMIT" style="position:absolute; left:780px; top:auto;z-index: 1;"><br>
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