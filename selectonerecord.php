<?php
require 'config.php';
$i = 0;
 
//mysql select query
$sql = "SELECT * FROM 'TABLENAME' WHERE CONDITION1 AND CONDITION2";
if($result = mysqli_query($mysqli, $sql)){
    if(mysqli_num_rows($result) > 0){        
        while($row = mysqli_fetch_array($result)  and $i < 1){
                $phone = $row['phone'];
                echo $phone;
            $i++; //increment i
        //table results end here
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR:Not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysqli);
?>
