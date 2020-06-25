<?php 
$conn=mysqli_connect('8.209.73.211','root','123456','mydb');
session_start();


 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calendar page</title>
        <link rel="icon" type="image/x-icon" href="drops.png">
        <style>
            table{
                position:absolute;
                border-collapse:collapse;
                left: 310px;
                    top: 180px;
                    width: 1000px;
                    height: 570px;
                    font-family:Arial,Verdana,Sans-serif;
                    background:white;
            }
            th{
                border:0.5px solid rgb(201, 195, 195);
                height:30px;
                font-family:Arial,Verdana,Sans-serif;
                white-space: nowrap;
                padding: 8px;
                color:grey;
            }
            td{
                border:0.5px solid rgb(201, 195, 195);
                text-align:left;
                font-size:12px;
                font-weight:bold;
                color:grey;
                font-family:Arial,Verdana,Sans-serif;
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
            </style>
            <style>
            .sansserif{font-family:Arial,Verdana,Sans-serif}
            .button {
                 width:50px;
                 text-align:center;
                 line-height:100%;
                 padding:0.3em;
                 height:40px;
                 font:30px;
                 font-style:normal;
                 text-decoration:none;
                 margin:2px;
                 vertical-align:text-bottom;
                 zoom:1;
                 outline:none;
                 font-size-adjust:none;
                 font-stretch:normal;
                 border-radius:1px;
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
    </head>
    <body>
        
       <p style="position:absolute; left:305px; top:80px; font-size: x-large; width: 300px;" class="sansserif"><b>Calendar</b></p>
       <a href="schoolpage.php"><img alt="h" src="house1.png" width="30px" height="30px" style="position:absolute; left:300px; top:112px;"></a>
       <div style="position:absolute; left:335px; top:125px;width:400px">
        <?php
           $user=$_SESSION['user'];
         echo" <p class='sansserif'>> ".$user." > Calendar</p>";
        ?>
        </div>
       
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
                        <h2 class="sansserif"><i></i><a href="file.php" class="white">
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
            <table id="tbl" >
            <thead>
                <tr>
                    <th id="th1">Monday</th>
                    <th id="th2">Tuesday</th>
                    <th id="th3">Wednesday</th>
                    <th id="th3">Thursday</th>
                    <th id="th3">Friday</th>
                    <th id="th3">saturday</th>
                    <th id="th3">Sunday</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td width="142" valign="top"contenteditable='true'>01</td>
                <td width="142" valign="top"contenteditable='true'>02</td>
                <td width="142" valign="top"contenteditable='true'>03</td>
                <td width="142" valign="top"contenteditable='true'>04</td>
                <td width="142" valign="top"contenteditable='true'>05</td>
                <td width="142" valign="top"contenteditable='true'>06</td>
                <td width="142" valign="top"contenteditable='true'>07</td>
            </tr>
            <tr>
                <td valign="top"contenteditable='true'>08</td>
                <td valign="top"contenteditable='true'>09</td>
                <td valign="top"contenteditable='true'>10</td>
                <td valign="top"contenteditable='true'>11</td>
                <td valign="top" contenteditable='true'>12</td>
                <td valign="top"contenteditable='true'>13</td>
                <td valign="top"contenteditable='true'>14</td>
            </tr>
            <tr>
                <td valign="top"contenteditable='true'>15</td>
                <td valign="top"contenteditable='true'>16</td>
                <td valign="top"contenteditable='true'>17</td>
                <td valign="top"contenteditable='true'>18</td>
                <td valign="top"contenteditable='true'>19</td>
                <td valign="top"contenteditable='true'>20</td>
                <td valign="top"contenteditable='true'>21</td>
            </tr>
            <tr>
                <td valign="top" contenteditable='true'>22</td>
                <td valign="top" contenteditable='true'>23</td>
                <td valign="top" contenteditable='true'>24</td>
                <td valign="top" contenteditable='true'>25</td>
                <td valign="top" contenteditable='true'>26</td>
                <td valign="top" contenteditable='true'>27</td>
                <td valign="top" contenteditable='true'>28</td>
            </tr>
            <tr>
                <td valign="top" contenteditable='true'>29</td>
                <td valign="top" contenteditable='true'>30</td>
                <td valign="top" style="background:#e9e8e8" contenteditable='true'>01</td>
                <td valign="top" style="background:#e9e8e8" contenteditable='true'>02</td>
                <td valign="top" style="background:#e9e8e8" contenteditable='true'>03</td>
                <td valign="top" style="background:#e9e8e8" contenteditable='true'>04</td>
                <td valign="top" style="background:#e9e8e8" contenteditable='true'>05</td>
            </tr>
            </tbody>
        </table>
        <!-- month calendar-->
        <table id="tbl1" style="display:none">
            <thead>
                <tr>
                    <th id="th1">Week 1</th>
                    <th id="th2">Week 2</th>
                    <th id="th3">Week 3</th>
                    <th id="th3">Week 4</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td width="142" valign="top" contenteditable='true'></td>
                <td width="142" valign="top" contenteditable='true'></td>
                <td width="142" valign="top" contenteditable='true'></td>
                <td width="142" valign="top" contenteditable='true'></td>
            </tr>
            </tbody>
        </table>
        <!-- week calendar-->
        <table id="tbl2" style="display:none">
            <thead>
                <tr>
                    <th id="th1">Morning</th>
                    <th id="th2">Afternoon</th>
                    <th id="th3">Evening</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td width="142" valign="top" contenteditable='true'></td>
                <td width="142" valign="top" contenteditable='true'></td>
                <td width="142" valign="top" contenteditable='true'></td>
            </tr>
            </tbody>
        </table>
        <!-- daily calendar-->
        <input type="button" id="showTable1" value="Month" class="button" style="position:absolute;left:1150px;top:120px" onclick="kk()"/>
        <input type="button" id="showTable1" value="Week" class="button" style="position:absolute;left:1200px;top:120px" onclick="kk1()"/>
        <input type="button" id="showTable1" value="Day" class="button" style="position:absolute;left:1250px;top:120px" onclick="kk2()"/>
        <form action = "result2.php" method = "post">
        <label><input id="keyword1" type="search" name="keyword1" placeholder="search for something" style="position:absolute; left:850px; top:20px;width:150px;" ><button type="submit" style="position:absolute; left:1000px; top:20px;width:60px;">search</button></label></label><br><br>
        </form>
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
<script type="text/javascript">
 function kk() {
        document.getElementById('tbl1').style.display="none";
        document.getElementById('tbl2').style.display="none";
        document.getElementById('tbl').style.display='';
}
</script>
<!-- show month calendar-->
</script>
<script type="text/javascript">
 function kk1() {
        document.getElementById('tbl').style.display="none";
        document.getElementById('tbl2').style.display="none";
        document.getElementById('tbl1').style.display='';
}
</script>
<!--show week calendar-->
<script type="text/javascript">
 function kk2() {
        document.getElementById('tbl').style.display="none";
        document.getElementById('tbl1').style.display="none";
        document.getElementById('tbl2').style.display='';
}
</script>
<!-- show daily calendar-->