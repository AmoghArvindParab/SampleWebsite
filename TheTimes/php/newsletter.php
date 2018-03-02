<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <title>The  Times</title>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="newsletter.css" type="text/css">
  </head>
  <body>
    <script src="subscription.js"></script>
    <div id="header"><a href="main.html"><img src="images/header.jpg" style="height: 100px; width: 464px;"></a></div>
    <div id="navBar">
      <p><a href="main.html#topStories">Top Stories</a>&verbar;<a href="main.html#world">World</a>&verbar;
         <a href="main.html#tech">Tech</a>&verbar;<a href="main.html#business">Business</a>&verbar;
         <a href="main.html#travel">Travel</a>&verbar;<a href="election.html">2016 Election</a>
      </p>
    </div>
    <div id="container"> 
      <h2>Newsletter</h2>
      <form method="POST" id="subscriptionForm" name="subscriptionForm" onsubmit="return formValidate()" action="http://localhost/TheTimes/newsletter.php">
      <div id="sectionsSelector">
      <fieldset id="sections">
        <legend>&#42; Choose your sections</legend>
        <table>
          <tr>
            <td><input type="checkbox" name="section">TOP NEWS</td>
            <td><input type="checkbox" name="section">TECH NEWS</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="section">ENTERTAINMENT</td>
            <td><input type="checkbox" name="section">LIFE &amp; STYLE</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="section">MOVIE REVIEW</td>
            <td><input type="checkbox" name="section">TV</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="section">DAILY BRIEF</td>
            <td><input type="checkbox" name="section">BREAKING NEWS</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="section">BUSINESS</td>
            <td><input type="checkbox" name="section">SPORTS</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="section">EDUCATION</td>
            <td><input type="checkbox" name="section">ENVIRONMENT</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="section">INDIA</td>
            <td><input type="checkbox" name="section">WORLD</td>
          </tr>
        </table>
      </fieldset>
      <div id="sectionsError" class="error"></div>
      </div>
      <table id="details">
        <tr>
          <th>&#42; FREQUENCY:</th>
          <td><input type="radio" name="freq" checked="checked">DAILY<input type="radio" name="freq">WEEKLY</td>
        </tr>
        <tr>
          <th>&#42; TIMING:</th>
          <td>
            <select name="timing">
              <option value="morning">MORNING</option>
              <option value="evening">EVENING</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>First name:</th>
          <td><input type="text" name="fname"></td>
        </tr>
        <tr>
          <th>Last name:</th>
          <td><input type="text" name="lname"></td>
        </tr>
        <tr>
          <th>&#42; Email:</th>
          <td><input type="text" name="email"><span id="emailError" class="error"></span></td>
        </tr>
        <tr>
          <th>Comments:</th>
          <td><textarea rows="7" cols="40" name="cmt"></textarea></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" name="subscribe" value="SUBSCRIBE"></td>
        </tr>
      </table>
      </form>
      <p id="reqFields">&#42; Required fields</p>
      <?php
	$fname = $lname = $email = $cmt = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
          $fname = $_POST["fname"];
     	  $lname = $_POST["lname"];
          $email = $_POST["email"];
          $cmt = $_POST["cmt"];
 	  echo '<p class="successMsg">Thankyou for subscribing ' . $fname . ' ' . $lname . '.';
          echo '<br>A verification email has been sent to ' . $email . ' .';
          if($cmt!=""){
            echo '<br>Your comments are appreciated';
	  }
          echo '</p>';
        }
      ?>
    </div>
    <div id="footer" style="background: rgb(54,53,53); margin: 0px; text-align: center; color: white;">
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