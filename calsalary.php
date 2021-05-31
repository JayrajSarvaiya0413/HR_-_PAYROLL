<?php  

	$ename=$_POST['ename'];
    $dept=$_POST['dept'];
    $des=$_POST['des'];
    $bsal=$_POST['bsal'];
    $ta=$_POST['ta'];
    $j = $ta / 100;
    $ta2= $bsal* $j;
    $da=$_POST['da'];
    $k = $da / 100;
    $da2=$bsal*$k;
    // $g = ('echo $da2');
    $hra=$_POST['hra'];
    $x = $hra / 100;
    $hra2=$bsal*$x;
    $pf=$_POST['pf'];
    $y = $pf / 100;
    $pf2=$bsal*$y;
    $lic=$_POST['lic'];
    $m = $lic / 100;
    $lic2=$bsal*$m;

    $n = $bsal*$ta;
    $o = $n / 100;

    $p = $bsal*$da;
    $q = $p / 100;

    $r = $bsal*$hra;
    $s = $r / 100;


    $allowance = $o + $q + $s;

    $t = $bsal*$pf;
    $v = $t / 100;

    $u = $bsal*$lic;
    $w = $u / 100;

    $deduction = $v + $w;

    $gsal = $bsal + $allowance;
    $netsal = $gsal - $deduction;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<CENTER >

    <table border=10 bgcolor="white" height=600 width=400 >
    <caption><h2><font color="black" >HONESTY INFOTECH</font></h2></caption>
    <tr align=center><td>Employee Name</td><td colspan=2><?php echo $_POST["ename"]; ?></td></tr>
    <tr align=center><td>Department</td><td colspan=2><?php echo $_POST["dept"]; ?></td></tr>
    <tr align=center><td>Designation</td><td colspan=2><?php echo $_POST["des"]; ?></td></tr>
    <tr align=center><td>Basic Salary</td><td colspan=2><?php echo $_POST["bsal"]; ?></td></tr>
    <tr align=center><th>Allowances</th><th>Percentage</th><th>Amount</th></tr>
    <tr align=center ><td>TA</td><td><?php echo $_POST["ta"]; ?></td><td><?php echo $ta2 ?></td></tr>
    <tr align=center><td>DA</td><td><?php echo $_POST["da"]; ?></td><td><?php echo $da2 ?></td></tr>
    <tr align=center><td>HRA</td><td><?php echo $_POST["hra"]; ?></td><td><?php echo $hra2 ?></td></tr>
    <tr align=center><th>Total Allowance:</th><td colspan=2><?php echo $allowance ?></td><tr>
    <tr><th>Deductions</th><th>Percentage</th><th>Amount</th></tr>
    <tr align=center><td>PF</td><td><?php echo $_POST["pf"]; ?></td><td><?php echo $pf2 ?></td></tr>

    <tr align=center><td>LIC</td><td><?php echo $_POST["lic"]; ?></td><td><?php echo $lic2 ?></td></tr>
    <tr align=center><th>Total Deduction:</th><td colspan=2><?php echo $deduction ?></td><tr>
    <tr align=center><td>Gross Salary</td><td colspan=2><?php echo $gsal ?></td></tr>
   
    <tr align=center><td>Net Salary</td><td colspan=2><?php echo $netsal ?></td></tr>
    </table>
    </CENTER>
</body>
</html>