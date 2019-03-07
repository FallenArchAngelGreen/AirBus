<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12282093";
$password = "6QQXBYTgSM";
$dbname = "sql12282093";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
      echo "connected";
   }

$MSN=$_GET['MSN'];
$HarnessLength=$_GET['HarnessLength'];
$GrossWeight=$_GET['GrossWeight'];     
$AtmoPressure=$_GET['AtmoPressure'];
$Airport=$_GET['Airport'];
$FuelCapL=$_GET['FuelCapL'];
$FuelCapR=$_GET['FuelCapR'];
$FuelQuantL=$_GET['FuelQuantL'];
$FuelQuantR=$_GET['FuelQuantR'];
$RoomTemp=$_GET['RoomTemp'];
$MaxAlti=$_GET['MaxAlti'];
$FlightNo=$_GET['FlightNo'];

$sql = "INSERT INTO A320 (MSN,HarnessLength,GrossWeight,AtmoPressure,Airport,FuelCapL,FuelCapR,FuelQuantL,FuelQuantR,RoomTemp,MaxAlti,FlightNo) 
VALUES ('$MSN',$HarnessLength,$GrossWeight,$AtmoPressure,'$Airport',$FuelCapL,$FuelCapR,'$FuelQuantL','$FuelCapR','$RoomTemp','$MaxAlti','$FlightNo')";
mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo "Flight Details Submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>