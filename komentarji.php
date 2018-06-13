<?php 

include 'connect.php';
?>

<?php



function setComments(){
	
	
	if(isset($_POST['commentSubmit'])){
       
       $uid = $_POST['uid'];
	   $date = $_POST['date'];
	   $besedilo = $_POST['besedilo'];
	   
	   $sql = "INSERT INTO komentarji (uid, date , besedilo) VALUES ('$uid','$date','$besedilo')";
	   
	
	
}
}

?>