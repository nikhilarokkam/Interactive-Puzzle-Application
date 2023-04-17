<?php
session_start();
?>
<html>
<body>
    <table border="2" align="center">
        <br>
        <br>
        <center><h2>User Records</h2></center>
        <br>
        <tr>
            <th>email</th>
            <th>userid</th>
            <th>username</th>
            <th>password</th>
            <th>contact</th>
        </tr>
<?php
$con=mysqli_connect("localhost","root","","escroom");
error_reporting(0);
$query="select * from users";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['email']."</td>
        <td>".$result['userid']."</td>
        <td>".$result['username']."</td>
        <td>".$result['password']."</td>
        <td>".$result['contact']."</td>
        ";
    }
}
else
{
    echo "No records found";
}
?>
</table>
</body>
</html>