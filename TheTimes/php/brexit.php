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
    <script src="javascript/main.js"></script>
    <script src="javascript/comment.js"></script>
    <div id="header"><a href="main.html"><img src="images/header.jpg" style="height: 100px; width: 464px;"></a></div>
    <div id="navBar">
      <p><a href="main.html#topStories">Top Stories</a>&verbar;<a href="main.html#world">World</a>&verbar;
         <a href="main.html#tech">Tech</a>&verbar;<a href="main.html#business">Business</a>&verbar;
         <a href="main.html#travel">Travel</a>&verbar;<a href="election.html">2016 Election</a>
      </p>
    </div>
    <div id="container"> 
      <h1 class="title">G20: Brexit would be a 'shock'</h1>
      <p class="author">by Charles Riley, The Times</p>
      <p class="date"><img src="images/clock.jpg" class="clock">Uploaded 1905 GMT (0305 HKT) July 22, 2016</p>
     
	   <h1><b> The world economy will suffer a "shock" if Britain leaves the European Union, finance ministers and central bankers have warned.</b></h1>
      <iframe width="750" height="422" src="https://www.youtube.com/embed/m3_I2rfApYk" frameborder="0" allowfullscreen></iframe>
      <p>
        <span class="location"> "Downside risks and vulnerabilities have risen, against the backdrop of volatile capital flows, a large drop of commodity prices, escalated geopolitical tensions, the shock of a potential UK exit from the European Union and a large and increasing number of refugees in some regions," policymakers said in a joint communique at the end of a two-day G20 meeting in Shanghai. &#45; <br><br></span>  
      </p>
      <p>
      <b> 2006 </b>The U.K. will hold a referendum on membership in the EU on June 23, and markets are becoming increasingly concerned about the impact on trade, jobs and investment if voters choose to leave the bloc of 500 million people. <b>212 at St John's.</b>
      </p>
      <p>
       U.K. Chancellor George Osborne described the prospect of a UK exit as <b>"deadly serious." </b>
      </p>
      <p>
        "The financial leaders of the world's biggest countries have given their <b>unanimous verdict</b>. They say that a British exit from the EU would be a shock to the world economy," Osborne told the BBC in Shanghai. 
		  <b> "If it's a shock to the world economy, imagine what it would do to Britain."</b>	  
	  </p>
      <p>
       Some prominent politicians, <b>including London mayor Boris Johnson </b>, have backed the Brexit campaign. 
	    Opinion polls show voters in <b>Europe's second biggest economy </b>are deeply divided over the issue, and many remain undecided.
      </p>
	  <img src="images/brexit.png" width="690"> 
      <p>
       <b> Prime Minister David Cameron argues</b> that being part of the club is good for the British economy. 
	   But his opponents say EU membership is costly, creates regulatory red tape and allows unlimited immigration. 
      </p>
      <p>
	   G20 members also reiterated commitments to not devalue their currencies, and use fiscal tools to boost the global economy. 
	  
      </p>
      <p>
	  They noted that <b>monetary stimulus</b> alone would not lead to balanced growth.
      </p>
     
      
      <div id="comments">
	    <?php include('php/initializeComments.php') ?>
	 <?php
           $article = "brexit";
           $sql = 'select count(*) as num from Comment where article="'.$article.'"';
           $result = mysqli_query($conn, $sql);
 	   $row = mysqli_fetch_assoc($result);
           echo '<p id="numComments" class="topBorderReq">' . $row["num"] . ' COMMENTS</p>';
	 ?>
        <div id="postComment">
          <form id="commentForm" name="commentForm" onsubmit="return formValidate('brexit')" action="http://localhost/TheTimes/php/insertComment.php" method="GET">
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
	    echo '<a href="http://localhost/TheTimes/php/deleteComment.php?name='. $row["name"] . '&article=' . $row["article"] . '&city=' . $row["city"] . '&time=' . $row["time"] . '" class="button">Remove</a>';
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