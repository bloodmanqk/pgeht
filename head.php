<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>PGEHT-Pleven</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');</script>
<![endif]-->
</head>
<body id="page1">
<div class="tail-top">
  <div class="tail-bottom">
    <div class="body-bg">
      <!-- HEADER -->
      <div id="header">
        <div class="row-1">
		
          <div class="fleft"><a href="#"><img src="images/logo.png" alt="" /></a></div>
		  <div class="fleft"></div>
          <div class="fright">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<?php include("include/session.php");
if($session->logged_in){
   echo "Добре дошъл <b>$session->username</b>, ти си вписан. <br><br>"
       ."[<a href=\"userinfo.php?user=$session->username\">Моят акаунт</a>] &nbsp;&nbsp;"
       ."[<a href=\"useredit.php\">Промяна на данните</a>] &nbsp;&nbsp;"."[<a href=\"process.php\">Logout</a>]";
   if($session->isAdmin()){
      echo "[<a href=\"admin/admin.php\">Admin Center</a>] &nbsp;&nbsp;";
   }
}
else{ ?> <tr>
<form action="process.php" method="POST">
<td><td colspan="2" align="left"><br>Все още неси регистриран? <a href="register.php">Регистрирай се!</a></td>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan="3"><strong>Влез: </strong></td>
</tr>
<tr>
<td width="78">Име</td>
<td width="6">:</td>
<td width="294"><input name="user" type="text"></td>
</tr>
<tr>
<td>Парола</td>
<td>:</td>
<td><input name="pass" type="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="hidden" name="sublogin" value="1">
<input type="submit" value="Влез"></td>
</tr>
</table>
</td>
</form>
</tr><?php }
?>
</table>
		  </div>
		  <div class="fleft"></div>
        </div></br>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Начало</span></a></li>
   <li class='has-sub '><a href='spec.php'><span>Специалности</span></a>
      <ul>
         <li><a href='#'><span>Компютърна техника и технология</span></a></li>
		 <li><a href='#'><span>Компютърни мрежи</span></a></li>
		 <li><a href='#'><span>Компютъна графика</span></a></li>
		 <li><a href='#'><span>Технология на биогоривата</span></a></li>
         <li><a href='#'><span>Product</span></a></li>
		 <li><a href='#'><span>Product</span></a></li>
		 <li><a href='#'><span>Product</span></a></li>
		 <li><a href='#'><span>Product</span></a></li>
      </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Специалности</span></a>
   <ul>
         <li><a href='#'><span>Спец1</span></a></li>
		 <li><a href='#'><span>Спец2</span></a></li>
		 <li><a href='#'><span>Спец3</span></a></li>
		 <li><a href='#'><span>Спец4</span></a></li>
		 <li><a href='#'><span>Спец5</span></a></li>
		 <li><a href='#'><span>Спец6</span></a></li>
   </ul>
   </li>
   <li class='has-sub '><a href='#'><span>Администрация</span></a>
   <ul>
         <li><a href='#'><span>Администрация</span></a></li>
		 <li><a href='#'><span>Администрация</span></a></li>
		 <li><a href='#'><span>Администрация</span></a></li>
		 <li><a href='#'><span>Администрация</span></a></li>
		 <li><a href='#'><span>Администрация</span></a></li>
		 <li><a href='#'><span>Администрация</span></a></li>
   </ul>
   </li>
      <li class='has-sub '><a href='#'><span>Научна дейност</span></a>
   <ul>
         <li><a href='#'><span>Научна дейност</span></a></li>
		 <li><a href='#'><span>Научна дейност</span></a></li>
		 <li class='has-sub '><a href='#'><span>Научна дейност1</span></a>
		 <ul>
		 <li><a href='#'><span>Научна дейност2</span></a></li>
		 <li><a href='#'><span>Научна дейност3</span></a></li>
		 </ul></li>
		 <li class='has-sub '><a href='#'><span>Научна дейност6</span></a>
		 <ul>
		 <li><a href='#'><span>Научна дейност4</span></a></li>
		 <li><a href='#'><span>Научна дейност5</span></a></li>
		 </ul></li>
		 <li><a href='#'><span>Научна дейност</span></a></li>
		 <li><a href='#'><span>Научна дейност</span></a></li>
   </ul>
   </li>
   <li><a href='galerry.php'><span>Галерия</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
</div>