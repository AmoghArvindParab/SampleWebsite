        <?php
          function timePassed($secs){
            $diff = time() - $secs;
      	    if($diff<60){
              echo "$diff second";
              $val = $diff;
            }
            else if(($diff/60)<60){
              $val = floor($diff/60);
              echo $val . " minute";
            }
            else if(($diff/3600)<24){
       	      $val = floor($diff/3600);
              echo $val . " hour";
            }
            else if(($diff/86400)<30){
 	      $val = floor($diff/86400);
              echo $val . " day";
            }
            else if(($diff/2592000)<12){
    	      $val = floor($diff/2592000);
 	      echo $val . " month";
 	    }
            else {
	      $val = floor($diff/31536000);
              echo $val . " year";
            }
            if($val>1){
              echo "s";
            }
	}
?>
          
	
       