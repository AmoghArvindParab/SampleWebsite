<?php
          $servername = "localhost"; 
          $username = "root"; 
	  $password = ""; 
	  $dbname = "TheTimesDB"; 
	  $article = "world1";
	  $conn = mysqli_connect($servername, $username, $password);
	  if (!mysqli_select_db ($conn ,$dbname )) {
            $conn = mysqli_connect($servername, $username, $password);
	    // Check connection
	    if (!$conn) {
  	      die("Connection failed: " . mysqli_connect_error());
	    }
 	    // Create database
	    $sql = "CREATE DATABASE TheTimesDB";
	    if (!mysqli_query($conn, $sql)) {
    	      echo "Error creating database: " . mysqli_error($conn);
	    } 
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            $sql = "CREATE TABLE Comment (article text,name text,city text,commentText varchar(3000),time bigint(20))";
            if (!mysqli_query($conn, $sql)) {
   	      echo "Error creating table: " . mysqli_error($conn);
	    }
            $name = 'Stefan Barletta';
            $city = 'Las Vegas';
            $commentText = mysqli_real_escape_string($conn,"I wish that the establishment, instead of trying to stop Trump, you know, would look at why he's so popular and coalesce around him so that it's one team in November. Donald Trump is bringing a record amount of Democrats and independents...we should embrace that.");
            $time = '1458472136';
            $sql="INSERT INTO Comment VALUES('$article','$name','$city','$commentText','$time')";
            if(!mysqli_query($conn,$sql)){
              echo "Error Inserting1";
	    }
	    $name = 'Lou Dobbs';
            $city = 'New York';
            $commentText = mysqli_real_escape_string($conn,"Trump has proven to be remarkably prescient on a wide range of issues and challenges. Whether border security, illegal immigration, Chinese trade, or North Korean aggression. In his June campaign announcement, Trump warned about the release of criminal illegal immigrants. Just weeks before Kate Steinle was murdered by an illegal immigrant who'd re-entered the country numerous times, despite being a five time convicted felon. As Trump complained of unfair trade deficits with China, they rose ever higher.");
            $time = '1456744136';
            $sql="INSERT INTO Comment VALUES('$article','$name','$city','$commentText','$time')";
            if(!mysqli_query($conn,$sql)){
              echo "Error Inserting2";
	    }
	    $name = 'Joshua Feuerstein';
            $city = 'Fountain Hills';
            $commentText = mysqli_real_escape_string($conn,"People are tired of the status quo! Period.");
            $time = '1456312136';
            $sql="INSERT INTO Comment VALUES('$article','$name','$city','$commentText','$time')";
            if(!mysqli_query($conn,$sql)){
              echo "Error Inserting3";
	    }
	    $name = 'Richard Bricker';
            $city = 'Clairton';
            $commentText = mysqli_real_escape_string($conn,"My wife and I have been registered Democrats for 43 years. We went to change parties yesterday so we can vote for Donald Trump in the Pennsylvania primaries. He is America's hope.");
            $time = '1456225636';
            $sql="INSERT INTO Comment VALUES('$article','$name','$city','$commentText','$time')";
            if(!mysqli_query($conn,$sql)){
              echo "Error Inserting4";
	    }
	  }
        ?>