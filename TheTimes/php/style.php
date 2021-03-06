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
      <h1 class="title">Could this smog-eating tower solve China's pollution problem?</h1>
      <p class="author">By Marianna Cerini,  The Times</p>
      <p class="date"><img src="images/clock.jpg" class="clock">Updated 0809 GMT (1609 HKT) September 30, 2016</p>
<iframe width="750" height="190" src="https://www.youtube.com/embed/HcfOS2cNQEI" frameborder="0" allowfullscreen></iframe>
	   <h1><b>Video: Smog tower hoovers up pollution Dutch designer Daan Roosegarde created the Smog Free Tower with Bob Ursem of Delft Technology University, and Dutch green tech company European Nano Solutions.</b></h1>
      <p>
        <span class="location"> Beijing, China-- One of the 21st century's bleakest problems, air pollution leads to the premature death of 3 million people every year, according to a study published in the journal Nature last year. 
		That number is set to double by 2050.  <br></span>  
      </p>
      <p>
It's no surprise that the biggest polluters are also the most at risk: China, which boasts one of the world's fastest growing economies, also has the world's "deadliest" air, according to the World Health Organization.
      </p>
      <p>
      Pollution has become so ingrained in daily Chinese life that pollution masks featuring bold colors and flashy patterns have become must-have accessories for young urbanites concerned about breathing and looking good.Two years ago, Beijing-based designer Masha Ma paired her garbs with Swarovski crystal-studded masks on the catwalks of Paris, then went on to sell them online alongside Chloe bags and Chanel pumps.<br>At international schools around Beijing, students play inside million-dollar domes that act as air filters.   
	  It's into this environment that<b> award-winning Dutch designer Daan Roosegaarde unveiled his Smog Free Tower, a seven-meter (23 feet) tall structure that combines beautiful design and technological advancement, during Beijing Design Week. </b>
      </p>
      
      <p><b><h2>A smog vacuum</h2> </b></p>
	  <img src="images/smog.jpg" width="300"> 
      <p>
	    <b>The Smog Free Tower</b> is essentially a giant air purifier created through a <b>collaboration between Roosegaarde, Delft Technology University and European Nano Solutions, a green tech company</b> in the Netherlands.
       <br><br>Here's how it works: <b>Using ion technology, the tower attracts and sucks in small pollution particles by sending positive ions into the air. Once inside the tower, these particles attach themselves to a grounded, negatively charged surface -- what's called a counter electrode.Vents in the lower part of the tower then expel the clean air, creating a smog-free bubble around the structure. </b>
	   <br>"The tower cleans 30,000 cubic meters of air an hour," Roosegarde says, or roughly a football stadium per day.<br>	   
       The process improves surrounding air quality by 75 percent and, Roosegarde claims, and doesn't produce ozone, as the particles are charged with positive voltage rather than negative ("the safest way to handle high volumes of dirty air," he says). The tower runs on no more than 1,400 watts, or the equivalent of what it takes to power a water boiler.
	   <br><br>Roosegaarde and his team have also figured out  <b> how to compress the captured particles into tiny "gemstones" that are then sealed in a resin cube and mounted onto rings and cufflinks. (Each stone is the result of about 1,000 cubic meters of filtered air.)</b> 
      </p>
      <p>
Roosegaarde currently has the backing of <b>China's Ministry of Environmental Protection, </b> which has asked him to take his project across the country, with four more stops planned after Beijing. The support comes amid the government's reinforced efforts to tackle pollution, 
<b> an integral part of China's 13th Five-Year Plan released last March.</b> Throughout his tour, Roosegaarde will meet with universities, schools and environmental organizations.
      </p>
      <p>
	   <b>"The goal is not only to offer a local, tangible solution to create clean parks," </b> he says, "but also setting a new sense of beauty <b>-- a clean future -- through the sensory experience of clean air."</b>
      </p>
      <div id="comments">
		<?php include('php/initializeComments.php') ?>
		<?
		  $article = "style";
		  $sql = 'select count(*) as num from Comment where article="'.$article.'"';
          $result = mysqli_query($conn, $sql);
 	  $row = mysqli_fetch_assoc($result);
          echo '<p id="numComments" class="topBorderReq">' . $row["num"] . ' COMMENTS</p>';
		?>
        <div id="postComment">
          <form id="commentForm" name="commentForm" onsubmit="return formValidate('style')" action="http://localhost/TheTimes/php/insertComment.php" method="GET">
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