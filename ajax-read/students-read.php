<?php 

$con = mysqli_connect('localhost', 'root', '', 'ajax') or die('Connection Failed:'. mysqli_connect_error());

$query = "SELECT * FROM student";

$result = mysqli_query($con, $query) or die('Query Failed: ' . mysqli_error($con));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $stu_id = $row['student_id'];
        $stu_name = $row['student_name'];
        $stu_class = $row['student_class'];
        $data = "<tr><td>$stu_id</td><td>$stu_name</td><td>$stu_class</td></tr>";
        echo $data;
    }
}
mysqli_close($con);



?>