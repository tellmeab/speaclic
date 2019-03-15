<?php


session_start();
require_once '';
include_once '';


?>

<!DOCTYPE html><html lang="en"style="height:100%"><head><meta charset="utf-8"><meta name="viewport"content="width=device-width, initial-scale=1"><title>SpeacliC</title>


    <link rel="stylesheet" type="text/css" href="1.css">
    <link rel="stylesheet" type="text/css" href="2.css">
    <link rel="stylesheet" type="text/css" href="6.css">

    <script src="3.js"></script>
    <script src="4.js"></script>
    <script src="5.js"></script>
    <script src="7.js"></script>

    <link rel="short cut icon" href="logor.gif" type="image/x-icon">

<style media="screen">::selection{background:#1C59BB;color:black;}::-moz-selection{background:#1C59BB;color: black;}</style>
</head><body id="cvet"style="height:100%"><div id="load"></div><div class="row"><div class="col-sm-12" style="">
  <h2 id="error"align="center"class="anu"><span>S</span><span>p</span>ea<span>c</span>l<span>i</span>C</h2><br>
  <h4 id="errorr" align="center"class="nnn">anonimity freedom amusement</h4><br>

<div class="row">
  <div class="col-sm-4">

  </div>
  <div class="col-sm-4">
    <div align="center">
    <a href="#box"class="unga"data-toggle="collapse"><span class="glyphicon glyphicon-chevron-down"></span></a>
    </div>
  </div>
  <div class="col-sm-4">

  </div>
</div>

</div></div>
    <div id="box"class="collapse"style="margin-top:0px;margin-bottom:0px;background:transparent;background-size:cover">
      <div class="row" style="background-size:cover"><div class="col-sm-2"style="padding:0px;margin:0px;background-size:cover"></div>
      <div class="col-sm-8"><div style="margin-top:20px"><p align="center"><a align="center"class="nno"id="nnno"style="color:#1957BB;background-color:black;">18+</a></p></div>
      <br><div style="border:2px solid black;background-color:black;border-radius:8px;margin-bottom:10px;"><h3 style="padding-left:14px;padding-right:8px;padding-top:10px;margin-top:0px;color:#bababa"class="nnon">
<span class="glyphicon glyphicon-warning-sign"  style="color:#1957BB;">
              </span>&nbsp;speaclic.com website is exclusively for persons over 18 years old
              <span class="glyphicon glyphicon-exclamation-sign" style="color:#1957BB; padding-left:0px; margin-left:-5px;">
              </span>
            </h3>
          </div>
          <div style=" border: 2px solid black; background-color: black; border-radius:8px; margin-bottom:10px; padding-top:10px;padding-bottom:10px;">
            <p style="padding-left: 10px; padding-right: 10px; border-bottom:0px; margin-bottom:0px; color:#bababa" align="center" class="nnor">
            SpeacliC was developed with the idea of ​​anonymous communication divided on countries, where people can create groups, publish various topics with ability to insert images, audio, video, comment and respond to comments, or conduct online chat in groups.
            </p>
          </div>
          <div style=" border: 2px solid black; background-color: black; border-radius:8px; margin-bottom:10px; padding-top:5px;padding-bottom:5px;">
            <p style="padding-left: 10px; padding-right: 10px;border-bottom:0px; margin-bottom:0px; color:#bababa" align="center" class="nnor">The site has no restrictions on the publish material, except for advertising!
              <br> For advertising please text to email
              <a style="background-color:#1957BB; color: black; padding-left:5px; padding-right:5px; padding-bottom:2px;">speaclic@gmail.com
              </a>
            </p>
          </div>
          <div style=" border: 2px solid black; background-color: black; border-radius:8px;margin-bottom:10px; padding-top:5px;padding-bottom:5px">
            <p style="padding-left: 10px; padding-right: 10px;  border-bottom:0px; margin-bottom:0px; color:#bababa" align="center" class="nnor">By clicking the "Continue" button located below, you agree that you are responsible for the material that you publish, including the headlines, texts, images, audios, videos, comments, responses to comments, links, chat messages, in addition, you yourself are responsible for what you will see, listen, read, click, follow the links on the website, as well as you confirm that your age at least is 18 years or you are older!
            </p>
          </div>
<form name="f2" method="post" action="visits">

          <p align="center" >
              <button name="visit" type="submit" class="unga" style="border-radius:4px; background-color:transparent">Continue
              </button>
          </p>

</form>
        </div>
        <div class="col-sm-2" style="padding:0px; margin:0px;background-size:cover">

        </div>
        </div>
      </div>
<br>
      <div class="row"><div class="col-sm-3">
        <div  align="center"><span class="ungg">Visits</span>
        <?php

        $conn12=mysqli_connect("");
        $total_comment12 = "SELECT COUNT(*) FROM ";
        $rees12 = mysqli_query($conn12,$total_comment12);
        $tota_row12 = mysqli_fetch_array($rees12)[0];
        echo '<br><span class="glyphicon glyphicon-user unge"></span>&nbsp;<span class="unger">'.$tota_row12.'</span>';

         ?>
       </div></div>


      <div class="col-sm-3">
       <div  align="center"><span class="ungg">Groups</span>
         <?php
         $conn1=mysqli_connect("");
         $total_comment1 = "SELECT COUNT(*) FROM ";
         $rees1 = mysqli_query($conn1,$total_comment1);
         $tota_row1 = mysqli_fetch_array($rees1)[0];
         echo '<br><span class="glyphicon glyphicon-th unge"></span>&nbsp;<span class="unger">'.$tota_row1.'</span>';

          ?>
       </div>
     </div>

     <div class="col-sm-3">
      <div  align="center"><span class="ungg">Posts</span>
        <?php
        $conn1=mysqli_connect("");
        $total_comment1 = "SELECT COUNT(*) FROM ";
        $rees1 = mysqli_query($conn1,$total_comment1);
        $tota_row1 = mysqli_fetch_array($rees1)[0];
        echo '<br><span class=" glyphicon glyphicon-list-alt unge"></span>&nbsp;<span class="unger">'.$tota_row1.'</span>';

         ?>
      </div>
    </div>

    <div class="col-sm-3">
     <div  align="center"><span class="ungg">Comments</span>
       <?php
       $conn1=mysqli_connect("");
       $total_comment1 = "SELECT COUNT(*) FROM ";
       $rees1 = mysqli_query($conn1,$total_comment1);
       $tota_row1 = mysqli_fetch_array($rees1)[0];
       echo '<br><span class=" glyphicon glyphicon-comment unge"></span>&nbsp;<span class="unger">'.$tota_row1.'</span>';

        ?>
     </div>
   </div>

 </div><br>
<!--<div class="row"><div class="col-sm-12"><p align="center" style="color:#1c59bb">Made by&nbsp;<a class="imagetip" style="background-color:transparent">KN<span><img class="mememe" src="KN.jpg" /></span></a></p></div></div>-->



<script>function random(minim, maxim){var raino=minim+Math.random()*(maxim+1-minim);raino=Math.floor(raino);return raino;}
for(var i=0;i<200;i++){document.getElementsByTagName('body')[0].innerHTML +='<i class="rain"style="left:'+random(-2000, 2000)+'px;transform:translate3d(0,0,0);animation-delay:'+(0.01*i)+'s"></i>';}

</script>
  </body>
</html>
