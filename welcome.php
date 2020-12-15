<?php
 include('session.php');
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Inici - Fitness Center</title>
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
    <link rel="icon" href="./media/images/favicon.png" type="image/png" />
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <header>
            <span class="boto-menu" style="font-size:30px;cursor:pointer" onclick="openNav()"><i style="color: #fff; font-size: 1.5em;" class="fas fa-bars">&nbsp;</i>&nbsp;</span>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <br /><br />
                <a href="inicial.php"><i style="color: #fff; font-size: 1.2em;" class="fas fa-home">&nbsp;</i>INICI</a>
                <a href="welcome.php"><i style="color: #fff; font-size: 1.2em;" class="fas fa-id-card">&nbsp;</i>PERFIL</a>
                <a href="logout.php"><i style="color: #fff; font-size: 1.2em;" class="fas fa-sign-out-alt">&nbsp;</i>SORTIR</a>
            </div>
    </header>

<div id="center">
<div id="center-set"> 
<h1 align='center'></h1>

<div id="contentbox">
<?php
$sql="SELECT * FROM member where mem_id=$loggedin_id";
$result=mysqli_query($con,$sql);
?>
<?php
while($rows=mysqli_fetch_array($result)){
?>
<div id="signup">
<div id="signup-st">
<form action="" method="POST" id="signin" id="reg">
<div id="reg-head" class="headrg">El teu perfil</div>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"> <div align="left" id="tb-name">Num. soci:</div> </td>
<td class="tl-4"><?php echo $rows['mem_id']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Usuari:</div></td>
<td class="tl-4"><?php echo $rows['username']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Nom:</div></td>
<td class="tl-4"><?php echo $rows['fname']; ?> <?php echo $rows['lname']; ?></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Email:</div></td>
<td class="tl-4"><?php echo $rows['address']; ?></td>
</tr>
</table>
<div id="st"><a href="deleteac.php" id="st-btn">Eliminar perfil</a></div>
<div id="st"><a href="editar.php" id="st-btn">Editar perfil</a></div>
</form>
</div>
</div>
<?php 
// close while loop 
}
?>
</div>
</div>
</div>
<br />
<div id="footer"><p> Copyright &copy; Fitness Center - Roger i Oriol </p></div>
<script src="https://kit.fontawesome.com/0414f73769.js" crossorigin="anonymous">
</body>
</html>