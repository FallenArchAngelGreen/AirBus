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

$MSN=$_POST['MSN'];
$HarnessLength=$_POST['HarnessLength'];
$GrossWeight=$_POST['GrossWeight'];
$AtmoPressure=$_POST['AtmoPressure'];
$Airport=$_POST['Airport'];
$FuelCapL=$_POST['FuelCapL'];
$FuelCapR=$_POST['FuelCapR'];
$FuelQuantL=$_POST['FuelQuantL'];
$FuelQuantR=$_POST['FuelQuantR'];
$RoomTemp=$_POST['RoomTemp'];
$MaxAlti=$_POST['MaxAlti'];
$FlightNo=$_POST['FlightNo'];

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