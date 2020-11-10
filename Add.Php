<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit']))
{
     $topic = mysqli_real_escape_string($mysqli, $_POST['topic']);
    // $Topic = mysqli_real_escape_string($mysqli, $_POST['Topic']);
	$NumberOfWords = mysqli_real_escape_string($mysqli, $_POST['NumberOfWords']);
	$Instructions = mysqli_real_escape_string($mysqli, $_POST['Instructions']);
    $ScheduledDeliveryDate=mysqli_real_escape_string($mysqli, $_POST['ScheduledDeliveryDate']);    
    // for($NumberOfWords=0;$NumberOfWords<=1000;$NumberOfWords++)
    // {   
    //     echo count($NumberOfWords);
    //     if($NumberOfWords<=1000){
    //     echo $ScheduledDeliveryDate;
    //     }
    //     else
    //     {
    //         echo (new DateTime($ScheduledDeliveryDate))->add(new DateInterval("P1D"))
    //                           ->format('Y-m-d');

    //     }
    // }
   
    if($NumberOfWords<=0)
     {
        
         echo count($NumberOfWords);
         echo $ScheduledDeliveryDate;
     }
     elseif($NumberOfWords>1000) {
       
        echo (new DateTime($ScheduledDeliveryDate))->add(new DateInterval("P1D"))
                                 ->format('Y-m-d');
     }
     $result = mysqli_query($mysqli, "INSERT INTO clientInfo(topic,NumberOfWords,Instructions,ScheduledDeliveryDate) VALUES('$topic','$NumberOfWords','$Instructions','$ScheduledDeliveryDate')");
     
        //display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
}?>
</body>
</html>