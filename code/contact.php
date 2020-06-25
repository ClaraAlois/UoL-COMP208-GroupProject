<?php 

    $conn=mysqli_connect('8.209.73.211','root','123456','mydb');
     session_start();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="drops.png">
        <title>contacts page</title>
        <style>
            .wrapp{
                position:absolute;
                width:1480px;
                height: 55px;
                background-color:white;
            }
            .wrap1{
                    position:absolute;
                    left: 310px;
                    top: 210px;
                    width: 1000px;
                    height: 570px;
                    background-color:transparent;
            }
            .wrap2{
                    position:absolute;
                    left: 0px;
                    top: 0px;
                    width: 280px;
                    height: 150px;
                    background-color:white;
            }
            .wrap3{
                    position:absolute;
                    left: 0px;
                    top: 150px;
                    width: 280px;
                    height: 100px;
                    background-color:#EDF4FB;
            }
            .wrap4{
                    position:absolute;
                    left: 360px;
                    top: 0px;
                    width: 280px;
                    height: 150px;
                    background-color:white;
            }
            .wrap5{
                    position:absolute;
                    left: 720px;
                    top: 0px;
                    width: 280px;
                    height: 150px;
                    background-color:white;
            }
            .wrap6{
                    position:absolute;
                    left: 0px;
                    top: 320px;
                    width: 280px;
                    height: 150px;
                    background-color:white;
            }
            .wrap7{
                    position:absolute;
                    left: 360px;
                    top: 320px;
                    width: 280px;
                    height: 150px;
                    background-color:white;
            }
            .wrap8{
                    position:absolute;
                    left: 720px;
                    top: 320px;
                    width: 280px;
                    height: 150px;
                    background-color:white;
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
            .wrapp{
                position:absolute;
                width:1480px; 
                height: 55px;
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
            .black{
                text-decoration: none;
                color:black;
            }
        </style>
        <style>
            body{background-color:#DBE7EE}
            .divright{float:right;}
        </style>
        <style>
            .sansserif{font-family:Arial,Verdana,Sans-serif}
        </style>        
    </head>
    <body>
        <p style="position:absolute; left:320px; top:800px;font-size: 11px;color: grey;" class="sansserif">Showing 1 to 6 contacts</p>
        <p style="position:absolute; left:310px; top:80px; font-size: x-large;" class="sansserif"><b>Contacts</b></p>
        <p style="position:absolute; left:420px; top:80px; font-size: x-large;color: gray;" class="sansserif"><b>6</b></p>
        <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:305px; top:112px;"></a>
        <p style="position:absolute; left:350px; top:125px; width:100px" class="sansserif"> > Contacts</p></a>
        <img alt="h" src="h1.png" width="30px" height="30px" style="position:absolute; left:1280px; top:120px; ">
        <img alt="h" src="h2.png" width="30px" height="30px" style="position:absolute; left:1230px; top:120px; "> 
        <div class="wrapp"></div>
        <p style="position:absolute; left:300px; top:20px; color:gray;" class="sansserif">Welcome to Drops!</p>
        <img alt="h" src="8.png" width="30px" height="30px" style="position:absolute; left:1200px; top:10px; " onclick="msg2()"></a>
        <img alt="h" src="9.png" width="30px" height="30px" style="position:absolute; left:1240px; top:10px; " onclick="msg3()"></a>
        <a href="homepage.php"><img alt="h" src="10.png" width="48px" height="48px" style="position:absolute; left:1280px; top:4px; "></a>
        
        <div class="wrap">
        <?php
           $user=$_SESSION['user'];
         echo" <div class='header'>".$user."</div>";
        ?>
            <div class="nav">
                <ul>
                    <li class="list1"> 
                        <h2 ><i></i><a href="homepage.php" class="white">
                            <img alt="h" src="6.png" width="24px" height="24px"> DASHBOARD</a></h2>
                    </li>
                    <li class="list">
                        <h2 ><i></i><img alt="h" src="11.png" width="24px" height="24px">  QUESTIONS</h2>
                        <div class="hide">
                        <h5 ><a href="mypage.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px"> SELF QUESTIONS</a></h5>
                            <h5 ><a href="schoolpage.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px">  UNIVERSITY QUESTIONS</a></h5>
                            <h5 ><a href="bookmark.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px">  BOOKMARK QUESTIONS</a></h5>
                            <h5 ><a href="upload.php" class="grey"><img alt="h" src="14.png" width="16px" height="16px">  UPLOAD QUESTIONS</a></h5>
                        </div>
                    </li>
                    <li class="list1">
                        <h2 ><i></i><a href="calendar.php" class="white">
                            <img alt="h" src="3.png" width="25px" height="25px"> CALENDAR</a></h2>
                    </li>
                    <li class="list1">
                        <h2 ><i></i><a href="contact.php"class="white">
                            <img alt="h" src="4.png" width="24px" height="24px"> CONTACTS</a></h2>
                    </li>
                    <li class="list1">
                        <h2 ><i></i><a href="file.php"class="white">
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
        <div class="wrap1">
            <div class="wrap2">
                <img alt="h" src="qq5.png" width="60px" height="60px" style="position: relative;left: 115px;top:30px" > 
                <p class="sansserif" style="position: relative;left: 110px;top:30px;font-size: medium;"><b>Chen Lyu</b></p>
                <p class="sansserif" style="position: relative;left: 80px;top:40px;color: gray;font-size: small;">Year2 Computer Science</p>
                <div class="wrap3">
                    <img alt="h" src="c3.png" width="16px" height="16px" style="position: relative;left: 90px;top:20px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:0px;font-size: small;">Liverpool, UK</p>
                    <img alt="h" src="c2.png" width="16px" height="16px" style="position: relative;left: 90px;top:10px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-10px;font-size: small;">111@gmail.com</p>
                    <img alt="h" src="c1.png" width="16px" height="16px" style="position: relative;left: 90px;top:0px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-20px;font-size: small;">+44 7570000000</p>
                </div>
            </div>
            <div class="wrap4">
                <img alt="h" src="qq1.png" width="60px" height="60px" style="position: relative;left: 115px;top:30px" > 
                <p class="sansserif" style="position: relative;left: 100px;top:30px;font-size: medium;"><b>Xueyi Cheng</b></p>
                <p class="sansserif" style="position: relative;left: 80px;top:40px;color: gray;font-size: small;">Year2 Computer Science</p>
                <div class="wrap3">
                    <img alt="h" src="c3.png" width="16px" height="16px" style="position: relative;left: 90px;top:20px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:0px;font-size: small;">Liverpool, UK</p>
                    <img alt="h" src="c2.png" width="16px" height="16px" style="position: relative;left: 90px;top:10px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-10px;font-size: small;">111@gmail.com</p>
                    <img alt="h" src="c1.png" width="16px" height="16px" style="position: relative;left: 90px;top:0px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-20px;font-size: small;">+44 7570000000</p>
                </div>
            </div>
            <div class="wrap5">
                <img alt="h" src="qq3.png" width="60px" height="60px" style="position: relative;left: 115px;top:30px" > 
                <p class="sansserif" style="position: relative;left: 100px;top:30px;font-size: medium;"><b>Wenjia Wang</b></p>
                <p class="sansserif" style="position: relative;left: 80px;top:40px;color: gray;font-size: small;">Year2 Computer Science</p>
                <div class="wrap3">
                    <img alt="h" src="c3.png" width="16px" height="16px" style="position: relative;left: 90px;top:20px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:0px;font-size: small;">Liverpool, UK</p>
                    <img alt="h" src="c2.png" width="16px" height="16px" style="position: relative;left: 90px;top:10px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-10px;font-size: small;">111@gmail.com</p>
                    <img alt="h" src="c1.png" width="16px" height="16px" style="position: relative;left: 90px;top:0px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-20px;font-size: small;">+44 7570000000</p>
                </div>
            </div>
            <div class="wrap6">
                <img alt="h" src="qq2.png" width="60px" height="60px" style="position: relative;left: 115px;top:30px" > 
                <p class="sansserif" style="position: relative;left: 100px;top:30px;font-size: medium;"><b>Yuxuan Zhang</b></p>
                <p class="sansserif" style="position: relative;left: 80px;top:40px;color: gray;font-size: small;">Year2 Computer Science</p>
                <div class="wrap3">
                    <img alt="h" src="c3.png" width="16px" height="16px" style="position: relative;left: 90px;top:20px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:0px;font-size: small;">Liverpool, UK</p>
                    <img alt="h" src="c2.png" width="16px" height="16px" style="position: relative;left: 90px;top:10px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-10px;font-size: small;">111@gmail.com</p>
                    <img alt="h" src="c1.png" width="16px" height="16px" style="position: relative;left: 90px;top:0px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-20px;font-size: small;">+44 7570000000</p>
                </div>
            </div>
            <div class="wrap7">
                <img alt="h" src="qq4.png" width="60px" height="60px" style="position: relative;left: 115px;top:30px" > 
                <p class="sansserif" style="position: relative;left: 120px;top:30px;font-size: medium;"><b>Yiyi Pu</b></p>
                <p class="sansserif" style="position: relative;left: 80px;top:40px;color: gray;font-size: small;">Year2 Computer Science</p>
                <div class="wrap3">
                    <img alt="h" src="c3.png" width="16px" height="16px" style="position: relative;left: 90px;top:20px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:0px;font-size: small;">Liverpool, UK</p>
                    <img alt="h" src="c2.png" width="16px" height="16px" style="position: relative;left: 90px;top:10px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-10px;font-size: small;">111@gmail.com</p>
                    <img alt="h" src="c1.png" width="16px" height="16px" style="position: relative;left: 90px;top:0px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-20px;font-size: small;">+44 7570000000</p>
                </div>
            </div>
            <div class="wrap8">
                <img alt="h" src="qq6.png" width="60px" height="60px" style="position: relative;left: 115px;top:30px" > 
                <p class="sansserif" style="position: relative;left: 110px;top:30px;font-size: medium;"><b>Haoran Xu</b></p>
                <p class="sansserif" style="position: relative;left: 80px;top:40px;color: gray;font-size: small;">Year2 Computer Science</p>
                <div class="wrap3">
                    <img alt="h" src="c3.png" width="16px" height="16px" style="position: relative;left: 90px;top:20px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:0px;font-size: small;">Liverpool, UK</p>
                    <img alt="h" src="c2.png" width="16px" height="16px" style="position: relative;left: 90px;top:10px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-10px;font-size: small;">111@gmail.com</p>
                    <img alt="h" src="c1.png" width="16px" height="16px" style="position: relative;left: 90px;top:0px" > 
                    <p class="sansserif" style="position: relative;left: 110px;top:-20px;font-size: small;">+44 7570000000</p>
                </div>
            </div>
        </div>
        <!-- show contact details-->
        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something" style="position:absolute; left:900px; top:20px;width:150px;" ><button type="submit" style="position:absolute; left:1050px; top:20px;width:60px;">search</button></label><br><br>
        </form>
        <p style="position:absolute; left:315px; top:170px;">Show
            <select name="sort" onchange="mm(this.options[this.options.selectedIndex])">
                <option name="Date">Hot</option>
            </select>
        </p>
    </body>
</html>
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