<?php
$servername = "127.0.0.1";
$username="root";



$con = mysqli_connect ($servername,$username);

if(!$con)
{
    echo 'Not Connect to server';
}

if (!mysqli_select_db($con,'obrtniki'))
{
    echo 'Database not selected';
}
    
?>
 

<?php
    $query =$_GET['query']; 
    // gets value sent over search form
     
  
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
         
        $raw_results = mysql_query("SELECT * FROM obrtniki
            WHERE (`naziv` LIKE '%".$query."%') OR (`text` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><h3>".$results['query']."</h3>".$results['text']."</p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
?>


