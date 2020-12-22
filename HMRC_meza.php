<?php

//Create if not exist users tables
//Note the device data table relies on this one. 
$mysqli ="CREATE TABLE IF NOT EXISTS `watumizi` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` int(20) NOT NULL,
  `baruapepe` int(50) NOT NULL,
  `nenosiri` int(20) NOT NULL,
   `time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
//confirm if table was created successfully. 
if ($conn->query($mysqli) === TRUE) {
  echo "Table watumizi created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

// //insert data into the table
// $sql = "INSERT INTO devices_list (unik_address, mada)
// VALUES ('$imei','$topic')";
// //confirm if data was saved successfully
// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>


