<?php
//whatever we echo in this file gets reflected in data of delete.php
$conn = new mysqli('localhost', 'root', '', 'userdata');

if(isset($_POST['id']) && $_POST['id']!="" ){
    $id = $_POST['id'];
    
    $delete_query = "DELETE FROM person WHERE id='".$id."' ;";
    //delete is for deleting the record if it exists
    if($result=mysqli_query($conn, $delete_query)){
            if( mysqli_affected_rows($conn) ){
                echo "You have succesfully deleted ".$id." from the card system ";
            }
            else{
                echo "No record found";
            }
    }
    
}
else
{
    echo "No id passed";
}
?>