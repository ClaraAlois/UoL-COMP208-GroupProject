<?php 
 $conn=mysqli_connect('8.209.73.211','root','123456','mydb');
    session_start();

    if($_POST){
        $array=$_POST['checkbox'];
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
        }  
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="drops.png">
    <title>univeristy forum</title>
    <style>
        .table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 13px;
            line-height: 45px;

        }

        .table>thead>tr {
            background-color: white;
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

        .table>tbody>tr:nth-child(odd) {
            background: #fff;
            border: dashed 1px #a59e9e;
            border-left: none;
            border-right: none;

        }

        .table>tbody>tr:nth-child(even) {
            background: #f7f7f7;
            border: dashed 1px #a59e9e;
            border-left: none;
            border-right: none;
        }

        .table>tbody>tr:hover {
            background: #e3ecfc;
        }

        .table-cont {
            background: transparent;
            margin: 20px 10px;
            border: 0.1px transparent;
            font-family: Arial, Verdana, Sans-serif;
            line-height: 40px;
            border-collapse: collapse;
            text-align: left;
            position: absolute;
            width: 1000px;
            left: 310px;
            top: 200px;
            height: 525px;
        }
    </style>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
        }

        html,
        body {
            height: 100%;
        }

        .wrap {
            position: absolute;
            width: 260px;
            height: 840px;
            background-color: #1F2935;
        }

        .wrap1 {
            position: absolute;
            width: 1450px;
            height: 55px;
            background-color: white;
        }

        .header {
            width: 100%;
            height: 65px;
            background-color: #1F2935;
            font-weight: bolder;
            font-size: 24px;
            color: #3399ff;
            text-align: center;
            line-height: 65px;
            font-family: Arial, Verdana, Sans-serif
        }

        .nav {
            width: 250px;
            margin: 10px 5px 0;
        }

        .list {
            margin-bottom: 5px;
        }

        .list h2 {
            position: relative;
            padding: 15px 0;
            background-color: #1F2935;
            margin-left: 20px;
            font-size: 16px;
            color: #fff;
            transition: .5s;
            font-family: Arial, Verdana, Sans-serif
        }

        .list1 h2 {
            position: relative;
            padding: 15px 0;
            background-color: #1F2935;
            margin-left: 20px;
            font-size: 16px;
            color: #fff;
            transition: .5s;
            font-family: Arial, Verdana, Sans-serif
        }

        .list h2.on {
            background-color: #161D26;
            font-family: Arial, Verdana, Sans-serif
        }

        .list i {
            position: absolute;
            right: 30px;
            top: 40%;
            height: 1px;
            border: 8px solid transparent;
            border-left-color: #fff;
            /*triangle*/
            transform: rotate(0deg);
            transform-origin: 1px 8px;
            transition: .5s;
            font-family: Arial, Verdana, Sans-serif
        }

        .list i.on {
            transform: rotate(90deg);
            font-family: Arial, Verdana, Sans-serif
        }

        .hide {
            overflow: hidden;
            height: 0;
            transition: .5s;
            font-family: Arial, Verdana, Sans-serif
        }

        .hide h5 {
            padding: 10px 0;
            background-color: #161D26;
            margin-left: 20px;
            color: #fff;
            border-bottom: #42495d;
            font-family: Arial, Verdana, Sans-serif
        }

        .white {
            text-decoration: none;
            color: white;
        }

        .black {
            text-decoration: none;
            color: black;
        }
    </style>

    <style>
        .black {
            text-decoration: none;
            color: black;
        }
    </style>
    <style>
        body {
            background-color: #DBE7EE
        }

        .divright {
            float: right;
        }
    </style>
    <style>
        .sansserif {
            font-family: Arial, Verdana, Sans-serif
        }

        .page {
            text-align: center;
            font-size: 10px;
            font-family: Arial, Verdana, Sans-serif;
            position: absolute;
            left: 1100px;
            width: 300px;
            top: 800px;
        }

        .page a {
            display: inline-block;
            padding: 4px 6px;
            border: 1px solid rgb(85, 83, 83);
            border-radius: 1px;
            color: gray;
            text-decoration: none;
            margin-right: 8px;
        }

        .page a:hover,
        .page.on {
            background-color: rgb(78, 74, 74);
            color: honeydew;
            border: 1px solid rgb(78, 74, 74);
        }

        .page span {
            margin-right: 8px;
        }
    </style>
    <style>
        .button {
            width: 80px;
            text-align: center;
            line-height: 100%;
            padding: 0.3em;
            font: 16px;
            font-style: normal;
            text-decoration: none;
            margin: 2px;
            vertical-align: text-bottom;
            zoom: 1;
            outline: none;
            font-size-adjust: none;
            font-stretch: normal;
            border-radius: 50px;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
            text-shadow: 0px 1px 1px rgba(0, 0, 0, 0.3);
            color: rgb(245, 240, 240);
            border: 0.2px transparent;
            background-repeat: repeat;
            background-size: auto;
            background-origin: padding-box;
            background-clip: padding-box;
            background-color: rgb(108, 118, 168);
            background: linear-gradient(to bottom, #dfe0e2 0%, rgb(163, 164, 167) 100%);
        }

        .button:hover {
            background: rgb(145, 138, 138);
        }
    </style>
</head>

<body>
    <p style="position:absolute; left:320px; top:800px;font-size: 11px;color: grey;" class="sansserif">Showing 1 to 10
        of 70 Questions</p>
    <p style="position:absolute; left:310px; top:80px; font-size: x-large;" class="sansserif"><b>Questions</b></p>
    <a href="https://www.bilibili.com/video/BV1QW411N762?p=3"><img alt="h" src="house1.png" width="30px" height="30px"
            style="position:absolute; left:305px; top:112px;"></a>
    <a href="https://www.bilibili.com/video/BV1QW411N762?p=3" class="black">
        <p style="position:absolute; left:335px; top:125px; " class="sansserif">> Haoran Xu</p>
    </a>
    <a href="https://www.bilibili.com/video/BV1QW411N762?p=3" class="black">
        <p style="position:absolute; left:430px; top:125px; width:100px" class="sansserif"> > Questions</p>
    </a>
    <img alt="h" src="1.png" width="30px" height="30px" style="position:absolute; left:1280px; top:120px; ">
    <img alt="h" src="2.png" width="30px" height="30px" style="position:absolute; left:1230px; top:120px; ">
    <img alt="h" src="20.png" width="16px" height="16px" style="position:absolute; left:1150px; top:235px; z-index:1">
    <div class="wrap1"></div>
    <img alt="h" src="drops.png" width="45px" height="45px" style="position:absolute; left:290px; top:5px; ">
    <p style="position:absolute; left:340px; top:15px; font-size:x-large;" class="sansserif"><b>UNIVERSITY FORUM</b></p>
    <p style="position:absolute; left:600px; top:20px; color:gray;" class="sansserif">Welcome to Drops!</p>
    <a href="https://www.bilibili.com/video/BV1QW411N762?p=3"><img alt="h" src="8.png" width="30px" height="30px"
            style="position:absolute; left:1200px; top:10px; "></a>
    <a href="https://www.bilibili.com/video/BV1QW411N762?p=3"><img alt="h" src="9.png" width="30px" height="30px"
            style="position:absolute; left:1240px; top:10px; "></a>
    <a href="https://www.bilibili.com/video/BV1QW411N762?p=3"><img alt="h" src="10.png" width="48px" height="48px"
            style="position:absolute; left:1280px; top:4px; "></a>

    <div class="wrap">
        <div class="header">Haoran Xu</div>
        <div class="nav">
            <ul>
                <li class="list1">
                    <h2><i></i><a href="https://www.bilibili.com/video/BV1QW411N762?p=3" target="_blank" class="white">
                            <img alt="h" src="6.png" width="24px" height="24px"> DASHBOARD</a></h2>
                </li>
                <li class="list">
                    <h2><i></i><img alt="h" src="11.png" width="24px" height="24px"> QUESTIONS</h2>
                    <div class="hide">
                        <h5><a href="https://www.bilibili.com/video/BV1QW411N762?p=3" target="_blank" class="white"><img
                                    alt="h" src="14.png" width="16px" height="16px"> UPLOAD QUESTIONS</a></h5>
                        <h5><a href="file:///Users/caroline/Desktop/web/web2.html" target="_blank" class="white"><img
                                    alt="h" src="14.png" width="16px" height="16px"> QUESTIONS</a></h5>
                        <h5><a href="https://www.bilibili.com/video/BV1QW411N762?p=3" target="_blank" class="white"><img
                                    alt="h" src="14.png" width="16px" height="16px"> BOOKMARK QUESTIONS</a></h5>
                    </div>
                </li>
                <li class="list1">
                    <h2><i></i><a href="https://www.bilibili.com/video/BV1QW411N762?p=3" target="_blank" class="white">
                            <img alt="h" src="3.png" width="25px" height="25px"> CALENDAR</a></h2>
                </li>
                <li class="list1">
                    <h2><i></i><a href="https://www.bilibili.com/video/BV1QW411N762?p=3" target="_blank" class="white">
                            <img alt="h" src="4.png" width="24px" height="24px"> CONTACTS</a></h2>
                </li>
                <li class="list1">
                    <h2><i></i><a href="https://www.bilibili.com/video/BV1QW411N762?p=3" target="_blank" class="white">
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
            for (var i = 0; i < oList.length; i++) {
                oList[i].index = i; //自定义属性
                oList[i].isClick = false;
                oList[i].initHeight = oHide[i].clientHeight;
                oHide[i].style.height = '0';
                oList[i].onclick = function () {
                    if (this.isClick) {
                        oHide[this.index].style.height = '0';
                        oIcon[this.index].className = '';
                        oList[this.index].className = '';
                        oList[this.index].isClick = false;
                    } else {
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
                <colgroup>
                    <col width="5%" />
                </colgroup>
                <tr>
                    <th id="th0" style="text-align: center;color:gray;"><input type="checkbox" onClick="toggle(this)" />
                    </th>
                    <th id="th1">Question ID</th>
                    <th id="th2">Questions</th>
                    <th id="th3">Accuracy (%)</th>
                    <th id="th4">Date</th>
                    <th id="th5">Bookmarks</th>
                </tr>
            </thead>
            <tbody>
                <form action="check.php" name="check" method="POST">
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
                        ?>

                    <tr>
                        <td style='text-align: center;' name='td0'><input type='checkbox' name='checkbox[]'
                                value=<?=$ID2;?> /></td>
                        <td width='120' style='color: grey;' name='td1'><?=$ID2;?></td>
                        <td width='400' name='td2'><?=$content;?></td>
                        <td width='100' name='td3'><?=$accuracy;?></td>
                        <td width='150' style='color: grey;' name='td4'><?=$time;?></td>
                        <td name='td5' style='color: grey;'><?=$bookmark;?></td>
                    </tr>

                    <?php
                    }
                }

            }
            ?>
                    <input type="submit" value="add bookmark" class="button"
                        style="position:absolute; left:-10px; top:-53px;z-index: 1;">
                </form>
            </tbody>
        </table>
    </div>
    <div class="page">
        <a href="file:///Users/caroline/Desktop/web/web6.html">1</a>
        <a href="file:///Users/caroline/Desktop/web/web6.html">2</a>
        <a href="file:///Users/caroline/Desktop/web/web6.html">3</a>
        <span>...</span>
        <a href="file:///Users/caroline/Desktop/web/web6.html">9</a>
        <a href="file:///Users/caroline/Desktop/web/web6.html">10</a>
        <a href="file:///Users/caroline/Desktop/web/web6.html">Next</a>
    </div>
    <img alt="h" src="12.png" width="40px" height="40px" style="position:absolute; left:1275px; top:160px; ">
    <label><input id="keyword" type="search" name="keyword" placeholder="search questions"
            style="position:absolute; left:1050px; top:170px;width:180px;" onkeydown="entersearch()"></label><br><br>
    <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something"
            style="position:absolute; left:900px; top:20px;width:180px;" onkeydown="entersearch()"></label><br><br>
    <p style="position:absolute; left:420px; top:170px;">Sort by
        <select name="sort" onchange="mm(this.options[this.options.selectedIndex])">
            <option name="none">---</option>
            <option name="Date">Date</option>
            <option name="Accuracy">Accuracy</option>
            <option name="Bookmarks">Bookmarks</option>
        </select>
    </p>
</body>

</html>
<script>
    function search() {
        window.location.href = "https://www.iteye.com/blog/huangliangbao-1987465";
    }

    function entersearch() {
        var event = window.event || arguments.callee.caller.arguments[0];
        if (event.keyCode == 13) {
            search();
        }
    }
</script>
<script type="text/javascript">
    var tag = 1;

    function mm(val) {
        if (val.innerHTML == "Bookmarks") {
            SortTable("th5");
        }
        if (val.innerHTML == "Date") {
            SortTable("th4");
        }
        if (val.innerHTML == "Accuracy") {
            SortTable("th3");
        }
    }

    function sortNumberAS(a, b) {
        return a - b
    }

    function SortTable(dd) {
        var td5s = document.getElementsByName("td5");
        var td4s = document.getElementsByName("td4");
        var td3s = document.getElementsByName("td3");
        var td2s = document.getElementsByName("td2");
        var td1s = document.getElementsByName("td1");
        var tdArray5 = [];
        var tdArray4 = [];
        var tdArray3 = [];
        var tdArray2 = [];
        var tdArray1 = [];
        if (dd == "th3") {
            for (var i = 0; i < td5s.length; i++) {
                tdArray5.push(td5s[i].innerHTML);
            }
            for (var i = 0; i < td4s.length; i++) {
                tdArray4.push(td4s[i].innerHTML);
            }
            for (var i = 0; i < td3s.length; i++) {
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for (var i = 0; i < td2s.length; i++) {
                tdArray2.push(td2s[i].innerHTML);
            }
            for (var i = 0; i < td1s.length; i++) {
                tdArray1.push(td1s[i].innerHTML);
            }
            var tds = document.getElementsByName("td" + dd.substr(2, 1));
            var columnArray = [];
            for (var i = 0; i < tds.length; i++) {
                columnArray.push(parseInt(tds[i].innerHTML));
            }
            var orginArray = [];
            for (var i = 0; i < columnArray.length; i++) {
                orginArray.push(columnArray[i]);
            }

            columnArray.sort(sortNumberAS);

            for (var i = 0; i < columnArray.length; i++) {
                for (var j = 0; j < orginArray.length; j++) {
                    if (orginArray[j] == columnArray[i]) {
                        document.getElementsByName("td5")[i].innerHTML = tdArray5[j];
                        document.getElementsByName("td4")[i].innerHTML = tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML = tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML = tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML = tdArray1[j];
                        orginArray[j] = null;
                        break;
                    }
                }
            }
        }
        if (dd == "th4") {
            for (var i = 0; i < td5s.length; i++) {
                tdArray5.push(td5s[i].innerHTML);
            }
            for (var i = 0; i < td4s.length; i++) {
                tdArray4.push(td4s[i].innerHTML);
            }
            for (var i = 0; i < td3s.length; i++) {
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for (var i = 0; i < td2s.length; i++) {
                tdArray2.push(td2s[i].innerHTML);
            }
            for (var i = 0; i < td1s.length; i++) {
                tdArray1.push(td1s[i].innerHTML);
            }

            var columnArray = [];
            var orginArray = [];
            var tds = document.getElementsByName("td" + dd.substr(2, 1));

            for (var i = 0; i < tds.length; i++) {
                columnArray.push(parseInt(tds[i].innerHTML.substr(0, 2)));
            }
            for (var i = 0; i < columnArray.length; i++) {
                orginArray.push(columnArray[i]);
            }

            columnArray.sort(sortNumberAS);

            for (var i = 0; i < columnArray.length; i++) {
                for (var j = 0; j < orginArray.length; j++) {
                    if (orginArray[j] == columnArray[i]) {
                        document.getElementsByName("td5")[i].innerHTML = tdArray5[j];
                        document.getElementsByName("td4")[i].innerHTML = tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML = tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML = tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML = tdArray1[j];
                        orginArray[j] = null;
                        break;
                    }
                }
            }
            var td5s = document.getElementsByName("td5");
            var td4s = document.getElementsByName("td4");
            var td3s = document.getElementsByName("td3");
            var td2s = document.getElementsByName("td2");
            var td1s = document.getElementsByName("td1");
            var tdArray5 = [];
            var tdArray4 = [];
            var tdArray3 = [];
            var tdArray2 = [];
            var tdArray1 = [];
            for (var i = 0; i < td5s.length; i++) {
                tdArray5.push(td5s[i].innerHTML);
            }
            for (var i = 0; i < td4s.length; i++) {
                tdArray4.push(td4s[i].innerHTML);
            }
            for (var i = 0; i < td3s.length; i++) {
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for (var i = 0; i < td2s.length; i++) {
                tdArray2.push(td2s[i].innerHTML);
            }
            for (var i = 0; i < td1s.length; i++) {
                tdArray1.push(td1s[i].innerHTML);
            }
            var columnArray = [];
            var orginArray = [];
            var tds = document.getElementsByName("td" + dd.substr(2, 1));

            for (var i = 0; i < tds.length; i++) {
                columnArray.push(parseInt(tds[i].innerHTML.substr(3, 2)));
            }
            for (var i = 0; i < columnArray.length; i++) {
                orginArray.push(columnArray[i]);
            }

            columnArray.sort(sortNumberAS);

            for (var i = 0; i < columnArray.length; i++) {
                for (var j = 0; j < orginArray.length; j++) {
                    if (orginArray[j] == columnArray[i]) {
                        document.getElementsByName("td5")[i].innerHTML = tdArray5[j];
                        document.getElementsByName("td4")[i].innerHTML = tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML = tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML = tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML = tdArray1[j];
                        orginArray[j] = null;
                        break;
                    }
                }
            }
            var td5s = document.getElementsByName("td5");
            var td4s = document.getElementsByName("td4");
            var td3s = document.getElementsByName("td3");
            var td2s = document.getElementsByName("td2");
            var td1s = document.getElementsByName("td1");
            var tdArray5 = [];
            var tdArray4 = [];
            var tdArray3 = [];
            var tdArray2 = [];
            var tdArray1 = [];
            for (var i = 0; i < td5s.length; i++) {
                tdArray5.push(td5s[i].innerHTML);
            }
            for (var i = 0; i < td4s.length; i++) {
                tdArray4.push(td4s[i].innerHTML);
            }
            for (var i = 0; i < td3s.length; i++) {
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for (var i = 0; i < td2s.length; i++) {
                tdArray2.push(td2s[i].innerHTML);
            }
            for (var i = 0; i < td1s.length; i++) {
                tdArray1.push(td1s[i].innerHTML);
            }
            var columnArray = [];
            var orginArray = [];
            var tds = document.getElementsByName("td" + dd.substr(2, 1));

            for (var i = 0; i < tds.length; i++) {
                columnArray.push(parseInt(tds[i].innerHTML.substr(6, 4)));
            }
            for (var i = 0; i < columnArray.length; i++) {
                orginArray.push(columnArray[i]);
            }

            columnArray.sort(sortNumberAS);

            for (var i = 0; i < columnArray.length; i++) {
                for (var j = 0; j < orginArray.length; j++) {
                    if (orginArray[j] == columnArray[i]) {
                        document.getElementsByName("td5")[i].innerHTML = tdArray5[j];
                        document.getElementsByName("td4")[i].innerHTML = tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML = tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML = tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML = tdArray1[j];
                        orginArray[j] = null;
                        break;
                    }
                }
            }
        }
        if (dd == "th5") {
            for (var i = 0; i < td5s.length; i++) {
                tdArray5.push(td5s[i].innerHTML);
            }
            for (var i = 0; i < td4s.length; i++) {
                tdArray4.push(td4s[i].innerHTML);
            }
            for (var i = 0; i < td3s.length; i++) {
                tdArray3.push(parseInt(td3s[i].innerHTML));
            }
            for (var i = 0; i < td2s.length; i++) {
                tdArray2.push(td2s[i].innerHTML);
            }
            for (var i = 0; i < td1s.length; i++) {
                tdArray1.push(td1s[i].innerHTML);
            }
            var tds = document.getElementsByName("td" + dd.substr(2, 1));
            var columnArray = [];
            for (var i = 0; i < tds.length; i++) {
                columnArray.push(parseInt(tds[i].innerHTML));
            }
            var orginArray = [];
            for (var i = 0; i < columnArray.length; i++) {
                orginArray.push(columnArray[i]);
            }


            columnArray.sort(sortNumberAS);

            for (var i = 0; i < columnArray.length; i++) {
                for (var j = 0; j < orginArray.length; j++) {
                    if (orginArray[j] == columnArray[i]) {
                        document.getElementsByName("td5")[i].innerHTML = tdArray5[j];
                        document.getElementsByName("td4")[i].innerHTML = tdArray4[j];
                        document.getElementsByName("td3")[i].innerHTML = tdArray3[j];
                        document.getElementsByName("td2")[i].innerHTML = tdArray2[j];
                        document.getElementsByName("td1")[i].innerHTML = tdArray1[j];
                        orginArray[j] = null;
                        break;
                    }
                }
            }
        }
    }
</script>
<script language="JavaScript">
    function toggle(source) {
        checkboxes = document.getElementsByName('lookup');
        for (var i = 0, n = checkboxes.length; i < n; i++) {
            checkboxes[i].checked = source.checked;
        }
    }
</script>