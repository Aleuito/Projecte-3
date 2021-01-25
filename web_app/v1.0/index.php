<?php include "logincheck.php"; ?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Inici - Fitness Center</title>
    <link rel="stylesheet" href="./css/styles3.css" type="text/css">
    <link rel="icon" href="./media/images/favicon.png" type="image/png" />
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
</head>
<body>
 <header>
            
</header>
<div id="center">
<div id="center-set">
<div id="signup">
<div id="signup-st">
<div align="center">
<?php
$remarks = isset($_GET['remarks']) ? $_GET['remarks'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Registreu-vos aqui</div> ';
}
if ($remarks=='success') {
echo ' <div id="reg-head" class="headrg">Registrat amb èxit</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Registre incorrecte, Aquest usuari ja existeix</div> ';
}
if ($remarks=='error') {
echo ' <div id="reg-head-fail" class="headrg">Registre erroni! <br> Error: '.$_GET['value'].' </div> ';
}
?>
</div>
<form name="reg" action="execute.php" onsubmit="return validateForm()" method="post" id="reg">
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr>
<td class="t-1">
<div align="left" id="tb-name">Nom:</div>
</td>
<td width="171">
<input type="text" name="fname" id="tb-box"/>
</td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Cognom:</div></td>
<td><input type="text" name="lname" id="tb-box"/></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Email:</div></td>
<td><input type="text" id="tb-box" name="address" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Usuari:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr>
<td class="t-1"><div align="left" id="tb-name">Contrasenya:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Registrar-me" id="st-btn"/></div>
</form>

</div>
</div>
<div id="login">
<div id="login-st">
<form action="" method="POST" id="signin" id="reg">
<?php
$remarks = isset($_GET['remark_login']) ? $_GET['remark_login'] : '';
if ($remarks==null and $remarks=="") {
echo ' <div id="reg-head" class="headrg">Accedeix aqui</div> ';
}
if ($remarks=='failed') {
echo ' <div id="reg-head-fail" class="headrg">Accés erroni!, Credencials invàlides</div> ';
}
?>
<table border="0" align="center" cellpadding="2" cellspacing="0">
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Usuari:</div></td>
<td><input type="text" id="tb-box" name="username" /></td>
</tr>
<tr id="lg-1">
<td class="tl-1"><div align="left" id="tb-name">Contrasenya:</div></td>
<td><input id="tb-box" type="password" name="password" /></td>
</tr>
</table>
<div id="st"><input name="submit" type="submit" value="Accedir" id="st-btn"/></div>
</form>

</div>
</div>
</div>
</div>
<div id="footer"><p> Copyright &copy; Fitness Center - Roger i Oriol </p></div>
</body>
</html>