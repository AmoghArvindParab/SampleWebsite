<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>The  Times</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" href="main.css" type="text/css">
	<link rel="stylesheet" href="datepadding.css" type="text/css">
    <link rel="stylesheet" href="world.css" type="text/css">
	<style>
	#container {
  height: auto;
}

#container h1.title {
  font-size: 350%;
  margin-bottom: 0px;
  margin-top: 5px;
}

#container p {
  font-size: 120%;
}
#container p.author {
  color: #3333cc;
  font-weight: bold;
  margin: 3px;
}

#container p.date {
  color: #555555;
  font-size: 115%;
  margin-top: 0px;
}
  
img.clock {
  padding-right: 5px;
  position: relative;
  top: 5px;
}

span.location {
  font-weight: bold;
}

iframe {
  margin-top: 5px;
  margin-bottom: 5px;
}

.topBorderReq {
  border-top: thin solid #BBBBBB;
}

#submitComment {
  position: relative;
  left: 680px;
}

#city {
  margin-left: 20px;
}

form textarea {
  font-size: 130%;
  color: #777;
}

form input {
  font-size: 105%;
  margin-top: 15px;
  color: #777;
}

#errors {
  color: red;
}

#container #comments .locTime {
  font-size: 105%;
  color: #AAAAAA;
}

#comments {
  width: 750px;
}

a.button {
  margin-left: 685px;
  background-color: #FFF;
  border: none;
  text-decoration: underline;
  cursor: pointer;
  color: red;
}	
</style>
  </head>
  <body>
    <p id = "topPara" ><span id="date"></span> <span id="login"><a href="login.html" class="loginlink">Login</a> &verbar; <a href="register.html" class="loginlink">Register</a></span> </p>
    <script src="main.js"></script>
    <script src="comment.js"></script>
    <div id="header"><a href="main.html"><img src="images/header.jpg" style="height: 100px; width: 464px;"></a></div>
    <div id="navBar">
      <p><a href="main.html#topStories">Top Stories</a>&verbar;<a href="main.html#world">World</a>&verbar;
         <a href="main.html#tech">Tech</a>&verbar;<a href="main.html#business">Business</a>&verbar;
         <a href="main.html#travel">Travel</a>&verbar;<a href="election.html">2016 Election</a>
      </p>
    </div>
    <div id="container"> 
      <h1 class="title">China's weapons sales to other countries are soaring</h1>
      <p class="author">by Jethro Mullen, The Times</p>
      <p class="date"><img src="images/clock.jpg" class="clock">September 22, 2016: 5:25 AM ET</p>
     
	   <h1><b> China is selling more and more weapons to the rest of the world, a new study says.</b></h1>
      <iframe width="750" height="290" src="https://www.youtube.com/embed/GxuKQrgoamQ" frameborder="0" allowfullscreen></iframe>
      <p>
        <span class="location"> Its exports of major arms soared 88% between the 2006-2010 period and 2011-2015, according to a report published Monday by the Stockholm International Peace Research Institute (SIPRI). <br></span>  
      </p>
      <p>
      The country has been securing a bigger slice of an expanding pie. 
      </p>
      <p>
      Other nations -- including the U.S., Russia and Britain -- also saw their arms exports increase over the same period, SIPRI said, although nowhere near as rapidly as China's. The biggest declines were suffered by  <b>Germany, the Netherlands and France. </b>
      </p>
      <p>
        China's largest customers for its weapons are in the Asia-Pacific region: <b>Pakistan, Bangladesh and Myanmar.</b>"All three states are neighbors of India, the leading importer of arms in the region," the report noted.
		  <b> The Chinese military, meanwhile, is buying fewer and fewer weapons from abroad as the country's homegrown programs progress.</b>	  
	  </p>
      <p>
       It has fallen from <b>"by far the largest importer" </b>at the start of the century to third place behind <b>India and Saudi Arabia</b> in the most recent period, according to the study.
      </p>
	  <img src="images/flame-thrower-duo.png" width="700"> 
      <p>
       <b>"China is increasingly capable of producing its own advanced weapons </b> and has become less dependent on arms imports," it said, noting that Beijing still needs to shop 
	   overseas for certain key items, like large transport aircraft and engines.The heavy spending on arms in Asia-Pacific is expected to continue in the coming years, according to a separate report 
	   by the <b>defense research firm IHS Jane's</b> that was published Sunday. 
      </p>
      <p>
The region "is forecast to account for one in <b>three dollars spent on defense by the early 2020s</b> compared with just one in five in 2010," the report said. 
<b>"The Philippines, Indonesia, Japan and Vietnam</b> are all following China's lead and we see no sign of this trend coming to an end."
      </p>
      <p>
	   <b>Territorial disputes,</b> often involving China, have ratcheted up tensions in the region in recent years.
      </p>
 
      <div id="comments">
		<?php include('php/initializeComments.php') ?>
		<?
		  $article = "business";
		  $sql = 'select count(*) as num from Comment where article="'.$article.'"';
          $result = mysqli_query($conn, $sql);
 	  $row = mysqli_fetch_assoc($result);
          echo '<p id="numComments" class="topBorderReq">' . $row["num"] . ' COMMENTS</p>';
		?>
        <div id="postComment">
          <form id="commentForm" name="commentForm" onsubmit="return formValidate('business')" action="http://localhost/TheTimes/php/insertComment.php" method="GET">
            <p>
              <textarea rows="5" cols="80" name="commentBox" onfocus="commentFocus()" onblur="commentBlur()" onkeyup="commentChange()" id="commentBox">Add your comment here</textarea>
            </p>
          </form>
        </div>
        <div id="errors"></div>
       <?php include('php/timePassed.php') ?>
       <?php
          $sql = 'select * from Comment where article="'.$article.'" order by time desc';
   	  $result = mysqli_query($conn, $sql);
	  while($row = mysqli_fetch_assoc($result)) {
	    echo '<h2 class="topBorderReq">' . $row["name"] . '</h2>';
            echo '<p class="locTime">'.$row["city"].' - ';
            timePassed($row["time"]);
            echo ' ago</p><p>'.$row["commentText"].'</p>';
	    echo '<a href="http://localhost/TheTimes/deleteComment.php?name='. $row["name"] . '&article=' . $row["article"] . '&city=' . $row["city"] . '&time=' . $row["time"] . '" class="button">Remove</a>';
	  }
         ?>	
      </div>
    </div>
    <div id="footer" style="background: rgb(54,53,53); margin: 0px; margin-top: 10px; text-align: center; color: white;">
        <p style="margin: 0px; font-size: 150%; border: thin solid gray;">FOLLOW US ON<br>
          <a href="https://www.facebook.com/"><img src="images/facebook.jpg"></a>
          <a href="https://twitter.com/"><img src="images/twitter.jpg"></a>
          <a href="https://plus.google.com/"><img src="images/google.jpg"></a>
        </p>
        <p style="font-size: 90%; border: thin solid gray; margin: 0px;">&copy; 2016, The Times
          <br>
          All trademarks and registered trademarks appearing on 
          this site are the property of their respective owners.
        </p>
    </div>
  </body>
</html>