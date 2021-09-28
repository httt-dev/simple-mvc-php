NEWS
<!-- Detail page -->
<?php
  //read param 
  //$arr = $data["Arr"];
  //echo $arr[0];

  
    while($row = mysqli_fetch_array($data["SV"])){
        echo $row["name"] ."<br>";
    }


?>