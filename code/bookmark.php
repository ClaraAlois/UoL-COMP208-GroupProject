<?php 
    $conn=mysqli_connect('8.209.73.211','root','123456','mydb');
    session_start();
    $user=$_SESSION['user'];


 ?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="drops.png">
        <title>bookmarks page</title>
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
        <p style="position:absolute; left:310px; top:80px; font-size: x-large;" class="sansserif"><b>⭐️ Bookmarks</b></p>
        <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:305px; top:112px;"></a>
        <div style="position:absolute; left:335px; top:125px;width:400px">
        <?php
           $user=$_SESSION['user'];
         echo" <p class='sansserif'>> ".$user." > Bookmark Questions</p>";
        ?>
        </div>
        <img alt="h" src="1.png" width="30px" height="30px" style="position:absolute; left:1280px; top:120px; " onclick="msg()">
        <img alt="h" src="2.png" width="30px" height="30px" style="position:absolute; left:1230px; top:120px; " onclick="msg1()"> 
        <div class="wrap1"></div>
        <p style="position:absolute; left:300px; top:20px; color:gray;" class="sansserif">Welcome to Drops!</p>
        <img alt="h" src="8.png" width="30px" height="30px" style="position:absolute; left:1200px; top:10px; "  onclick="msg2()"></a>
        <img alt="h" src="9.png" width="30px" height="30px" style="position:absolute; left:1240px; top:10px; "  onclick="msg3()"></a>
        <a href="homepage.php"><img alt="h" src="10.png" width="48px" height="48px" style="position:absolute; left:1280px; top:4px; "></a>
        <!-- upper navigation bar-->
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
                        <h2 ><i></i><a href="contact.php"class="white">
                            <img alt="h" src="4.png" width="24px" height="24px"> CONTACTS</a></h2>
                    </li>
                    <li class="list1">
                        <h2 ><i></i><a href="file.php" class="white">
                            <img alt="h" src="5.png" width="24px" height="24px"> FILE MANAGER</a></h2>
                    </li>
                </ul>
            </div>
        </div>
        <!--end left navigation bar look-->
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
        <!-- end JS: navigation bar scroll-->
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
                </tr>
            </thead>
            <tbody>
                <?php

                  $query=mysqli_query($conn,"select * from bookmarks where bUserID='$user'");

                $count=mysqli_num_rows($query);

                if($count==0){
                    $output='There is no collected questions yet.';
                     echo "<td colspan='6' style='font-size:20px'><b>".$output."</b></td>";

                }
                else{
                    while($row=mysqli_fetch_array($query)){
                         $ID=$row['bQuestionID'];
                         $newquery=mysqli_query($conn,"select * from universityquestion where questionID='$ID'");
                         $newrow=mysqli_fetch_array($newquery);
                         $newID=$newrow['questionID'];
                         $newcontent=$newrow['content'];
                         $newtime=$newrow['time'];
                         $newaccuracy=$newrow['accuracy'];
                         $newmarks=$newrow['bookmarks'];
                         $ID2=(int)$newID+34241150;

                        echo "<tr>
                    <td style='text-align: center;' name='td0'><input type='checkbox' name='lookup' value='52' /></td>
                    <td style='color: grey;' name='td1'>#".$ID2."</td>
                    <td width='400' name='td2'><a href='rate.php?id=$newID' class='black'><b>".$newcontent."</b></a></td>
                    <td name='td3'>".$newaccuracy."</td>
                    <td width='200' style='color: grey;' name='td4'>".$newtime."</td>
                    </tr>";


                 //upload question from database
                    }
                }
           

                 ?>

            </tbody>
        </table>
        </div>
        <p style="position:absolute; left:1120px; top:200px;font-size: 11px;color: grey;" class="sansserif">Showing 1 to  <?php echo $count ?> Bookmark Questions</p>
        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something" style="position:absolute; left:900px; top:20px;width:150px;" ><button type="submit" style="position:absolute; left:1050px; top:20px;width:60px;">search</button></label></label><br><br>
        </form>
        <!-- sort question-->
        <p style="position:absolute; left:315px; top:170px;">Sort by 
            <select name="sort" onchange="mm(this.options[this.options.selectedIndex])">
                <option name="none">---</option>
                <option name="Date">Date</option>
                <option name="Accuracy">Accuracy</option>
            </select>
        </p>
    </body>
</html>
<script type="text/javascript"> 
    var tag=1;
    function mm(val){
        if(val.innerHTML=="Date"){
            SortTable("th4");
        }
        if(val.innerHTML=="Accuracy"){
            SortTable("th3");
        }
    }
    function sortNumberAS(a, b)
    {
        return a - b    
    }
    function SortTable(dd){
        var td4s=document.getElementsByName("td4");
        var td3s=document.getElementsByName("td3");
        var td2s=document.getElementsByName("td2");
        var td1s=document.getElementsByName("td1");
        var tdArray4=[];
        var tdArray3=[];
        var tdArray2=[];
        var tdArray1=[];
        if(dd=="th3"){
            for(var i=0;i<td4s.length;i++){
                tdArray4.push(td4s[i].innerHTML);
            }
            for(var i=0;i<td3s.length;i++){
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for(var i=0;i<td2s.length;i++){
                tdArray2.push(td2s[i].innerHTML);
            }
            for(var i=0;i<td1s.length;i++){
                tdArray1.push(td1s[i].innerHTML);
            }
            var tds=document.getElementsByName("td"+dd.substr(2,1));
            var columnArray=[];
            for(var i=0;i<tds.length;i++){
                columnArray.push(parseInt(tds[i].innerHTML));
            }
            var orginArray=[];
            for(var i=0;i<columnArray.length;i++){
                orginArray.push(columnArray[i]);
            }

            columnArray.sort(sortNumberAS);    
        
            for(var i=0;i<columnArray.length;i++){
                for(var j=0;j<orginArray.length;j++){
                    if(orginArray[j]==columnArray[i]){
                        document.getElementsByName("td4")[i].innerHTML=tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML=tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML=tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML=tdArray1[j];
                        orginArray[j]=null;
                        break;
                    }
                }
            }
        }
        if(dd=="th4")   {
            for(var i=0;i<td4s.length;i++){
                tdArray4.push(td4s[i].innerHTML);
            }
            for(var i=0;i<td3s.length;i++){
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for(var i=0;i<td2s.length;i++){
                tdArray2.push(td2s[i].innerHTML);
            }
            for(var i=0;i<td1s.length;i++){
                tdArray1.push(td1s[i].innerHTML);
            }

            var columnArray=[];
            var orginArray=[];
            var tds=document.getElementsByName("td"+dd.substr(2,1));
            
            for(var i=0;i<tds.length;i++){
                columnArray.push(parseInt(tds[i].innerHTML.substr(8,2)));
            }
            for(var i=0;i<columnArray.length;i++){
                orginArray.push(columnArray[i]);
            }
        
            columnArray.sort(sortNumberAS);   
            
            for(var i=0;i<columnArray.length;i++){
                for(var j=0;j<orginArray.length;j++){
                    if(orginArray[j]==columnArray[i]){
                        document.getElementsByName("td4")[i].innerHTML=tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML=tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML=tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML=tdArray1[j];
                        orginArray[j]=null;
                        break;
                    }
                }
            }
            var td4s=document.getElementsByName("td4");
            var td3s=document.getElementsByName("td3");
            var td2s=document.getElementsByName("td2");
            var td1s=document.getElementsByName("td1");
            var tdArray4=[];
            var tdArray3=[];
            var tdArray2=[];
            var tdArray1=[];
            for(var i=0;i<td4s.length;i++){
                tdArray4.push(td4s[i].innerHTML);
            }
            for(var i=0;i<td3s.length;i++){
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for(var i=0;i<td2s.length;i++){
                tdArray2.push(td2s[i].innerHTML);
            }
            for(var i=0;i<td1s.length;i++){
                tdArray1.push(td1s[i].innerHTML);
            }
            var columnArray=[];
            var orginArray=[];
            var tds=document.getElementsByName("td"+dd.substr(2,1));
            
            for(var i=0;i<tds.length;i++){
                columnArray.push(parseInt(tds[i].innerHTML.substr(5,2)));
            }
            for(var i=0;i<columnArray.length;i++){
                orginArray.push(columnArray[i]);
            }
            
            columnArray.sort(sortNumberAS);   
            
            for(var i=0;i<columnArray.length;i++){
                for(var j=0;j<orginArray.length;j++){
                    if(orginArray[j]==columnArray[i]){
                        document.getElementsByName("td4")[i].innerHTML=tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML=tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML=tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML=tdArray1[j];
                        orginArray[j]=null;
                        break;
                    }
                }
            }

            var td4s=document.getElementsByName("td4");
            var td3s=document.getElementsByName("td3");
            var td2s=document.getElementsByName("td2");
            var td1s=document.getElementsByName("td1");
            var tdArray4=[];
            var tdArray3=[];
            var tdArray2=[];
            var tdArray1=[];

            for(var i=0;i<td4s.length;i++){
                tdArray4.push(td4s[i].innerHTML);
            }
            for(var i=0;i<td3s.length;i++){
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for(var i=0;i<td2s.length;i++){
                tdArray2.push(td2s[i].innerHTML);
            }
            for(var i=0;i<td1s.length;i++){
                tdArray1.push(td1s[i].innerHTML);
            }
            var columnArray=[];
            var orginArray=[];
            var tds=document.getElementsByName("td"+dd.substr(2,1));
            
            for(var i=0;i<tds.length;i++){
                columnArray.push(parseInt(tds[i].innerHTML.substr(0,4)));
            }
            for(var i=0;i<columnArray.length;i++){
                orginArray.push(columnArray[i]);
            }
            
            columnArray.sort(sortNumberAS);   
            
            for(var i=0;i<columnArray.length;i++){
                for(var j=0;j<orginArray.length;j++){
                    if(orginArray[j]==columnArray[i]){
                        document.getElementsByName("td4")[i].innerHTML=tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML=tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML=tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML=tdArray1[j];
                        orginArray[j]=null;
                        break;
                    }
                }
            }
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