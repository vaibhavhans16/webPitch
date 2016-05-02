
<?php

    require_once 'db.inc.php';
    error_reporting(0);
        $cxo=array();
        $name = $_REQUEST['cname'];
        $ceo = $_REQUEST['cxo'];
        $equity = $_REQUEST['equity'];
        $position = $_REQUEST['position'];
        $oc = $_REQUEST['oc'];
        $debt = $_REQUEST['debt'];
        $sales = $_REQUEST['sales'];
        $aequ = $_REQUEST['aequ'];
        $pastmoney = $_REQUEST['pastmoney'];
        $dateofest = $_REQUEST['dateofest'];
        $textintro = $_REQUEST['textintro'];
$cxoname=explode(',',$ceo);
$equitylist=explode(',',$equity);
$positionlist=explode(',',$position);

for($i=0;$i<sizeof($cxoname);$i++){

$cxo[$i]=$cxoname[$i].":".$equitylist[$i].":".$positionlist[$i];


}
$cxoText=implode(",",$cxo);


$sql= "INSERT INTO startupdetails values('','.$name.','.$cxoText.','.$oc.','.$debt.','$sales','$aequ','$pastmoney','$dateofest','$textintro','') ";
$retval = mysql_query($sql,$conn)or die(mysql_error());
?>
<html>
<a href="profile.php" class="button">Go To Profile</a>
</html>
