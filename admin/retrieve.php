<?php
$sql ="SELECT count(id) As total FROM farmers ";
      $result=mysqli_query($db,$sql);
      $values=mysqli_fetch_assoc($result);
      $jeckton=$values['total'];
$sql1 ="SELECT count(id) As total1 FROM agri_tips  ";
      $result1=mysqli_query($db,$sql1);
      $values1=mysqli_fetch_assoc($result1);
      $jeckton1=$values1['total1'];

$sql2 ="SELECT count(id) As total2 FROM forecasting  ";
      $result2=mysqli_query($db,$sql2);
      $values2=mysqli_fetch_assoc($result2);
      $jeckton2=$values2['total2'];

$sql3 ="SELECT count(id) As total3 FROM farm_inputs  ";
      $result3=mysqli_query($db,$sql3);
      $values3=mysqli_fetch_assoc($result3);
      $jeckton3=$values3['total3'];

$sql4 ="SELECT count(id) As total4 FROM users  ";
      $result4=mysqli_query($db,$sql4);
      $values4=mysqli_fetch_assoc($result4);
      $jeckton4=$values4['total4'];

?>