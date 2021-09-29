<?php
include "../controller/conf.php";
if(!empty($_GET['stateid'])) {
        $stateid = $_GET["stateid"];     
		
        $sql_query = "select lga from location where state = '$stateid' ORDER BY lga ASC " ;
        $result = mysqli_query($con,$sql_query);
        if (mysqli_num_rows($result) > 0) {
          // output data of each row

?>
 <option value="">Select LGA </option>
<?php
          while($row = mysqli_fetch_assoc($result)) {
           
?>
<option value="<?php echo $row["lga"] ?>"><?php echo $row["lga"]?></option>
<?php

}
}
}
?>