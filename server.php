<?php 
$con=new mysqli("localhost","root","","admin01");
$sql="select * from user02";
$values=$con->query($sql);
$num=mysqli_num_rows($values);
$val=ceil($num/'2');
for($i=1; $i<=$val; $i++){
    echo "<a href='index.php?page=".$i."'>$i</a>";
}
if(isset($_GET['page'])){
    $ro=$_GET['page'];
}
else{
    $ro="1";
}
$totalRecord=2;
$startRecord=($ro-1)*2;
$record=$con->query("select * from user02 limit $startRecord,$totalRecord");

?>