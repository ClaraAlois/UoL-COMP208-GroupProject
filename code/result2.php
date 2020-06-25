<?php 
 $conn=mysqli_connect('8.209.73.211','root','123456','mydb');
    session_start();

    if($_GET){
        $array=$_GET['checkbox'];
        $arrlength=count($array);
 
     for($x=0;$x<$arrlength;$x++)
     {

        $ID=(int)$array[$x]-34241150;
        $query=mysqli_query($conn,"select * from universityquestion where questionID=$ID");
        $row=mysqli_fetch_array($query);
        $ID=$row['questionID'];
        $user=$_SESSION['user'];
        $result=mysqli_query($conn,"insert into bookmarks(bQuestionID,bUserID)
        values('$ID','$user')");
        $bookmarks=(int)$row['bookmarks']+1;
    }
    header("Location: bookmark.php");
        }  
 ?>

 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="drops.png">
        <title>univeristy forum</title>
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
                font-family:Arial,Verdana,Sans-serif;
            }
            .list1 h2{
                position: relative;
                padding: 20px 0;
                background-color: #1F2935;
                margin-left: 20px;
                font-size: 16px;
                color: #fff;
                transition: .5s;
                font-family:Arial,Verdana,Sans-serif;
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
                font-family:Arial,Verdana,Sans-serif;
            }
            .list i.on{
                transform:rotate(90deg);
                font-family:Arial,Verdana,Sans-serif;
            }
            .hide{
                overflow: hidden;
                height:0;
                transition: .5s;
                font-family:Arial,Verdana,Sans-serif;
            }
            .hide h5{
                padding: 4px 0;
                background-color: #161D26;
                margin-left: 25px;
                font-size:14px;
                color:#fff;
                border-bottom:#42495d;
                font-family:Arial,Verdana,Sans-serif;
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
            .page{
                text-align: center;
                font-size: 10px;
                font-family:Arial,Verdana,Sans-serif;
                position:absolute; 
                left:1100px; 
                width:300px;
                top:800px;
            }
            .page a{
                display:inline-block;
                padding:4px 6px;
                border:1px solid rgb(85, 83, 83);
                border-radius: 1px;
                color: gray;
                text-decoration: none;
                margin-right: 8px;}
            .page a:hover, .page.on{
                background-color: rgb(78, 74, 74);
                color:honeydew;
                border:1px solid  rgb(78, 74, 74);
            }
            .page span{
                margin-right: 8px;
            }
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
                 color:rgb(245, 240, 240);
                 border:0.2px transparent;
                 background-repeat:repeat;
                 background-size:auto;
                 background-origin:padding-box;
                 background-clip:padding-box;
                 background-color:rgb(108, 118, 168);
                 background: linear-gradient(to bottom, #dfe0e2 0%,rgb(163, 164, 167) 100%);}
                 .button:hover {
                background:rgb(145, 138, 138);
            }
        </style>
    </head>
    <body>
        <p style="position:absolute; left:310px; top:80px; font-size: x-large;" class="sansserif"><b>Questions</b></p>
        <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:305px; top:112px;"></a>
        <div style="position:absolute; left:335px; top:125px;width:400px">
        <?php
           $user=$_SESSION['user'];
         echo" <p class='sansserif'>> ".$user." > University Questions</p>";
        ?>
        </div>
        <img alt="h" src="1.png" width="30px" height="30px" style="position:absolute; left:1280px; top:120px; " onclick="msg()" >
        <img alt="h" src="2.png" width="30px" height="30px" style="position:absolute; left:1230px; top:120px; " onclick="msg1()" > 
        <div class="wrap1"></div>
        <img alt="h" src="drops.png" width="45px" height="45px" style="position:absolute; left:290px; top:5px; ">
        <p style="position:absolute; left:340px; top:15px; font-size:x-large;" class="sansserif"><b>UNIVERSITY FORUM</b></p>
        <p style="position:absolute; left:600px; top:20px; color:gray;" class="sansserif">Welcome to Drops!</p>
        <img alt="h" src="8.png" width="30px" height="30px" style="position:absolute; left:1200px; top:10px; " onclick="msg2()" ></a>
        <img alt="h" src="9.png" width="30px" height="30px" style="position:absolute; left:1240px; top:10px; " onclick="msg3()" ></a>
        <a href="homepage.php"><img alt="h" src="10.png" width="48px" height="48px" style="position:absolute; left:1280px; top:4px; "></a>
        
        <div class="wrap">
        <?php
           $user=$_SESSION['user'];
         echo" <div class='header'>".$user."</div>";
        ?>
            <div class="nav">
                <ul>
                    <li class="list1"> 
                        <h2 ><i></i><a href="homepage.php"class="white">
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
                    oList[i].index = i;//自定义属性
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
        <div class='table-cont' id='table-cont'>
        <table class="table table-striped">
            <thead>
                <colgroup >
                    <col width="5%"/>
                </colgroup>
                <tr>
                    <th id="th0" style="text-align: center;color:gray;"><input type="checkbox" onClick="toggle(this)"/></th>
                    <th id="th1">Question ID</th>
                    <th id="th2">Questions</th>
                    <th id="th3">Accuracy (%)</th>
                    <th id="th4">Date</th>
                    <th id="th5">Bookmarks</th>
                </tr>
            </thead>
            <tbody>
            <!--select from database and show results from the search box -->
            	<form action = "result2.php" name="check" method="GET" id="loginForm">
                <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST") {

                $search1=$_POST['keyword1'];
                $search1=preg_replace("#[^0-9a-z]#i","",$search1);
                $query=mysqli_query($conn,"select * from universityquestion where tag like '%$search1%' or 
                    name like '%$search1%' or content like '%$search1%'");

                $count=mysqli_num_rows($query);

                if($count==0){
                    $output='There is no search results!';
                    echo "<td colspan='6' style='font-size:20px'><b>".$output."</b></td>";

                }
                else{
                    while($row=mysqli_fetch_array($query)){
                        $accuracy=$row['accuracy'];
                        $ID=$row['questionID'];
                        $content=$row['content'];
                        $time=$row['time'];
                        $bookmark=$row['bookmarks'];

                        $ID2=(int)$ID+34241150;
                       

                     echo" <tr>
                    <td width='60'style='text-align: center;' name='td0'><input type='checkbox' name='checkbox[]' value=".$ID2."/></td>
                    <td width='120' style='color: grey;' name='td1'>#".$ID2."</td>
                    <td width='420' name='td2'><a href='rate.php?id=$ID' class='black'><b>".$content."</b></a></td>
                    <td width='100'name='td3'>".$accuracy."</td>
                    <td width='150' style='color: grey;' name='td4'>".$time."</td>
                    <td name='td5' style='color: grey;'><img alt='h' src='20.png' width='10px' height='10px'> ".$bookmark."</td>
                    </tr>";

                
                    }
                }

            }
            ?>
              </form>
            </tbody>
        </table>
        </div>
        <div>
        <input type="button" value="add bookmark" class="button"style="position:absolute; left:315px; top:170px;z-index: 1;width:95px" onclick="tijiao()">
        </div>
        <script>
            function tijiao(){
               var formObj=document.getElementById("loginForm");
        formObj.action="result2.php";
        formObj.method="GET";
        formObj.submit();}
        </script>
        <img alt="h" src="12.png" width="40px" height="40px" style="position:absolute; left:1275px; top:160px; ">
        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search questions" style="position:absolute; left:1050px; top:170px;width:150px;" onkeydown="entersearch()"><button type="submit" style="position:absolute; left:1200px; top:170px;width:60px;">search</button></label><br><br>
        </form>

        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something" style="position:absolute; left:900px; top:20px;width:150px;" onkeydown="entersearch()"><button type="submit" style="position:absolute; left:1050px; top:20px;width:60px;">search</button></label></label><br><br>
        </form>
   
    </body>
</html>
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