<?php 

    $conn=mysqli_connect('8.209.73.211','root','123456','mydb');
     session_start();

 ?>

 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="drops.png">
        <title>file manager</title>
        <style>
            .table{
                width:100%;
                border-collapse: collapse;
                text-align: left;
                font-size: 13px;
                line-height: 45px;
                    
            }
            .table>thead>tr{
                background-color:white;
                border: dashed 1px #a59e9e;
                border-left: none;
                border-right: none;
                text-align: left;
            }
            .table>thead>tr>th {
                white-space: nowrap;
                padding: 8px;
                line-height: 45px;
                text-align: left;
            }
            .table>tbody>tr:nth-child(odd){
                 background: #fff;
                 border: dashed 1px #a59e9e;
                border-left: none;
                border-right: none;
                
             }
            .table>tbody>tr:nth-child(even){
                background: #f7f7f7;
                border: dashed 1px #a59e9e;
                border-left: none;
                border-right: none;
            }
            .table>tbody>tr:hover{
                background: #e3ecfc;
            }
            .table-cont{
                overflow: auto;
                background:transparent;
                margin: 20px 10px;
                border:0.1px transparent;
                font-family:Arial,Verdana,Sans-serif;
                line-height: 40px;
                border-collapse: collapse;
                text-align: left;
                position:absolute; 
                width:1000px;
                left:310px;
                top:200px;
                height: 525px;
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
            .divright{float:right;}
        </style>
        <style>
            .sansserif{font-family:Arial,Verdana,Sans-serif}
        </style>        
    </head>
    <body>
    <p style="position:absolute; left:310px; top:80px; font-size: x-large;" class="sansserif"><b>Files</b></p>
        <p style="position:absolute; left:400px; top:80px; font-size: x-large;color: gray;" class="sansserif"><b>24</b></p>
        <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:305px; top:112px;"></a>
        <div style="position:absolute; left:335px; top:125px;width:400px">
        <?php
           $user=$_SESSION['user'];
         echo" <p class='sansserif'>> ".$user." > File manager</p>";
        ?>
        </div>
        <img alt="h" src="h1.png" width="30px" height="30px" style="position:absolute; left:1280px; top:120px; ">
        <img alt="h" src="h2.png" width="30px" height="30px" style="position:absolute; left:1230px; top:120px; "> 
        <div class="wrap1"></div>
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
                        <h2 ><i></i><a href="homepage.php"target="_blank" class="white">
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
                        <h2 ><i></i><a href="calendar.php"class="white">
                            <img alt="h" src="3.png" width="25px" height="25px"> CALENDAR</a></h2>
                    </li>
                    <li class="list1">
                        <h2 ><i></i><a href="contact.php" class="white">
                            <img alt="h" src="4.png" width="24px" height="24px"> CONTACTS</a></h2>
                    </li>
                    <li class="list1">
                        <h2 ><i></i><a href="file.php" class="white">
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
        <div class='table-cont' id='table1'>
        <table class="table table-striped">
            <thead>
                <colgroup >
                    <col width="5%"/>
                </colgroup>
                <tr>
                    <th id="th0" style="text-align: center;color:gray;"><input type="checkbox" onClick="toggle(this)"/></th>
                    <th id="th1">Name</th>
                    <th id="th2">Size</th>
                    <th id="th3">Type</th>
                    <th id="th4">Modified Date</th>
                </tr>
            </thead>
            <!-- file details-->
            <tbody>

                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP208 design</td>
                    <td  name="td2"><b>50MB</a></b></td>
                    <td name="td3"><b>Document</b></td>
                    <td  style="color: grey;" name="td4">05.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> school</td>
                    <td  name="td2"><b>109.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">04.09.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> robot</td>
                    <td  name="td2"><b>205.66KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">03.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP218 tutorial</td>
                    <td name="td2"><b>17MB</a></b></td>
                    <td name="td3"><b>Document</b></td>
                    <td  style="color: grey;" name="td4">24.03.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP219 python code</td>
                    <td  name="td2"><b>3.44MB</a></b></td>
                    <td name="td3"><b>Document</b></td>
                    <td  style="color: grey;" name="td4">20.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> my.png</td>
                    <td  name="td2"><b>300KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">17.10.2018</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> 21999.png</td>
                    <td  name="td2"><b>205.6KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">09.12.2017</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> a.jpeg</td>
                    <td  name="td2"><b>175KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.06.2016</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> 123.jpg</td>
                    <td  name="td2"><b>50.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">28.07.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> hahaha.png</td>
                    <td  name="td2"><b>440KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.12.2019</td>
                </tr>
                <tr>
                    <td width="150"style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td width="500" style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP222 tank</td>
                    <td width="200" name="td2"><b>2MB</a></b></td>
                    <td width="200"name="td3"><b>Document</b></td>
                    <td width="250" style="color: grey;" name="td4">25.03.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> school</td>
                    <td  name="td2"><b>109.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">04.09.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> robot</td>
                    <td  name="td2"><b>205.66KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">03.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> 219</td>
                    <td  name="td2"><b>245.6KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">09.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> decision tree</td>
                    <td  name="td2"><b>350MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">16.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> word template</td>
                    <td  name="td2"><b>440.08MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">05.05.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> demo</td>
                    <td  name="td2"><b>287.9KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">22.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> selfie</td>
                    <td  name="td2"><b>100.3KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.10.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> dna nfa</td>
                    <td  name="td2"><b>200KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.11.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> robot tank</td>
                    <td  name="td2"><b>200.1MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">20.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> ball controller</td>
                    <td  name="td2"><b>448MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">05.06.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> myproject</td>
                    <td  name="td2"><b>155.3KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> picture</td>
                    <td  name="td2"><b>186.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">21.09.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> scratch game</td>
                    <td  name="td2"><b>731.2MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">10.10.2019</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class='table-cont' id='table2' style="display:none">
        <table class="table table-striped" >
            <thead>
                <colgroup >
                    <col width="5%"/>
                </colgroup>
                <tr>
                    <th id="th0" style="text-align: center;color:gray;"><input type="checkbox" onClick="toggle(this)"/></th>
                    <th id="th1">Name</th>
                    <th id="th2">Size</th>
                    <th id="th3">Type</th>
                    <th id="th4">Modified Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="150"style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td width="500" style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP222 tank</td>
                    <td width="200" name="td2"><b>2MB</a></b></td>
                    <td width="200"name="td3"><b>Document</b></td>
                    <td width="250" style="color: grey;" name="td4">25.03.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP208 design</td>
                    <td  name="td2"><b>50MB</a></b></td>
                    <td name="td3"><b>Document</b></td>
                    <td  style="color: grey;" name="td4">05.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP218 tutorial</td>
                    <td name="td2"><b>17MB</a></b></td>
                    <td name="td3"><b>Document</b></td>
                    <td  style="color: grey;" name="td4">24.03.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="docu.png" width="16px" height="20px"> COMP219 python code</td>
                    <td  name="td2"><b>3.44MB</a></b></td>
                    <td name="td3"><b>Document</b></td>
                    <td  style="color: grey;" name="td4">20.12.2019</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class='table-cont' id='table3' style="display:none">
        <table class="table table-striped" >
            <thead>
                <colgroup >
                    <col width="5%"/>
                </colgroup>
                <tr>
                    <th id="th0" style="text-align: center;color:gray;"><input type="checkbox" onClick="toggle(this)"/></th>
                    <th id="th1">Name</th>
                    <th id="th2">Size</th>
                    <th id="th3">Type</th>
                    <th id="th4">Modified Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="150"style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td width="500" style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> my.png</td>
                    <td  width="200"name="td2"><b>300KB</a></b></td>
                    <td width="200"name="td3"><b>Image</b></td>
                    <td width="250" style="color: grey;" name="td4">17.10.2018</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> 21999.png</td>
                    <td  name="td2"><b>205.6KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">09.12.2017</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> a.jpeg</td>
                    <td  name="td2"><b>175KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.06.2016</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> 123.jpg</td>
                    <td  name="td2"><b>50.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">28.07.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> hahaha.png</td>
                    <td  name="td2"><b>440KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> school</td>
                    <td  name="td2"><b>109.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">04.09.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> robot</td>
                    <td  name="td2"><b>205.66KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">03.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> 219</td>
                    <td  name="td2"><b>245.6KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">09.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> demo</td>
                    <td  name="td2"><b>287.9KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">22.12.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> selfie</td>
                    <td  name="td2"><b>100.3KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.10.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> dna nfa</td>
                    <td  name="td2"><b>200KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.11.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> myproject</td>
                    <td  name="td2"><b>155.3KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">20.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="img.png" width="16px" height="20px"> picture</td>
                    <td  name="td2"><b>186.5KB</a></b></td>
                    <td name="td3"><b>Image</b></td>
                    <td  style="color: grey;" name="td4">21.09.2019</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class='table-cont' id='table4' style="display:none" >
        <table class="table table-striped">
            <thead>
                <colgroup >
                    <col width="5%"/>
                </colgroup>
                <tr>
                    <th id="th0" style="text-align: center;color:gray;"><input type="checkbox" onClick="toggle(this)"/></th>
                    <th id="th1">Name</th>
                    <th id="th2">Size</th>
                    <th id="th3">Type</th>
                    <th id="th4">Modified Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="150"style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td width="500" style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> robot tank</td>
                    <td width="200" name="td2"><b>200.1MB</a></b></td>
                    <td width="200" name="td3"><b>Project</b></td>
                    <td  width="250"style="color: grey;" name="td4">20.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> decision tree</td>
                    <td  name="td2"><b>350MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">16.04.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> word template</td>
                    <td  name="td2"><b>440.08MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">05.05.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> ball controller</td>
                    <td  name="td2"><b>448MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">05.06.2019</td>
                </tr>
                <tr>
                    <td style="text-align: center;" name="td0"><input type="checkbox" name="lookup" value="lookup" /></td>
                    <td  style="color: grey;" name="td1"><img alt="docu" src="pro.png" width="20px" height="16px"> scratch game</td>
                    <td  name="td2"><b>731.2MB</a></b></td>
                    <td name="td3"><b>Project</b></td>
                    <td  style="color: grey;" name="td4">10.10.2019</td>
                </tr>
            </tbody>
        </table>
        </div>
        <a href="homepage.php"><img alt="h" src="12.png" width="40px" height="40px" style="position:absolute; left:1275px; top:160px; "></a>

        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something" style="position:absolute; left:900px; top:20px;width:150px;" ><button type="submit" style="position:absolute; left:1050px; top:20px;width:60px;">search</button></label></label><br><br>
        </form>

        <p style="position:absolute; left:315px; top:170px;">
            <select name="sort" onchange="mm(this.options[this.options.selectedIndex])" style="width:100px;">
                <option name="---">---</option>
                <option name="Documents">Documents</option>
                <option name="Images">Images</option>
                <option name="Projects">Projects</option>
            </select>
        </p>
    </body>
</html>
<!-- js:show which kind of files to be shown-->
<script type="text/javascript"> 
    function mm(val){
        if(val.innerHTML=="Documents"){
            document.getElementById('table1').style.display="none";
            document.getElementById('table3').style.display="none";
            document.getElementById('table4').style.display="none";
            document.getElementById('table2').style.display='';
        }
        if(val.innerHTML=="Images"){
            document.getElementById('table1').style.display="none";
            document.getElementById('table2').style.display="none";
            document.getElementById('table4').style.display="none";
            document.getElementById('table3').style.display='';
        }
        if(val.innerHTML=="Projects"){
            document.getElementById('table1').style.display="none";
            document.getElementById('table3').style.display="none";
            document.getElementById('table2').style.display="none";
            document.getElementById('table4').style.display='';
        }
        if(val.innerHTML=="---"){
            document.getElementById('table2').style.display="none";
            document.getElementById('table3').style.display="none";
            document.getElementById('table4').style.display="none";
            document.getElementById('table1').style.display='';
        }
       
    }
    
</script>
<script language="JavaScript">
    function toggle(source) {   
        checkboxes = document.getElementsByName('lookup');   
        for(var i=0, n=checkboxes.length;i<n;i++) {     
            checkboxes[i].checked = source.checked;   
            }
    }
</script>
<script>
    window.onload = function(){
        var tableCont = document.querySelector('#table-cont');
        function scrollHandle (e){
            console.log(this);
            var scrollTop = this.scrollTop;
            this.querySelector('thead').style.transform = 'translateY(' + scrollTop + 'px)';
        }

        tableCont.addEventListener('scroll',scrollHandle);
    }
</script>
<script>
    function msg(){
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