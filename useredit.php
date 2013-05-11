<?php 
include "head.php"
?>
      </div>
      <div id="content">
        <div class="tail-right">
          <div class="wrapper">
            <div class="col-1">
              <div class="indent">
                <?php
/**
 * User has submitted form without errors and user's
 * account has been edited successfully.
 */
if(isset($_SESSION['useredit'])){
   unset($_SESSION['useredit']);
   
   echo "<h1>User Account Edit Success!</h1>";
   echo "<p><b>$session->username</b>, your account has been successfully updated. "
       ."<a href=\"main.php\">Main</a>.</p>";
}
else{
?>
  
  <?php
/**
 * If user is not logged in, then do not display anything.
 * If user is logged in, then display the form to edit
 * account information, with the current email address
 * already in the field.
 */
if($session->logged_in){
?>
</p>
<h1><img src="images/user_edit.png" width="32" height="32" alt="Edit Account">Промяна на данните : <?php echo $session->username; ?></h1>
<?php
if($form->num_errors > 0){
   echo "<td><font size=\"2\" color=\"#ff0000\">".$form->num_errors." error(s) found</font></td>";
}
?>
<form action="process.php" method="POST">
<table align="left" border="0" cellspacing="0" cellpadding="3">
<tr>
<td><img src="images/key.png" width="32" height="32" alt="Current Password"></td>
<td>Парола:</td>
<td><input type="password" name="curpass" maxlength="30" value="
<?php echo $form->value("curpass"); ?>"></td>
<td><?php echo $form->error("curpass"); ?></td>
</tr>
<tr>
<td><img src="images/key_add.png" width="32" height="32" alt="New Password"></td>
<td>Нова парола:</td>
<td><input type="password" name="newpass" maxlength="30" value="
<?php echo $form->value("newpass"); ?>"></td>
<td><?php echo $form->error("newpass"); ?></td>
</tr>
<tr>
<td><img src="images/email_add.png" width="32" height="32" alt="New Email"></td>
<td>Email:</td>
<td><input type="text" name="email" maxlength="50" value="
<?php
if($form->value("email") == ""){
   echo $session->userinfo['email'];
}else{
   echo $form->value("email");
}
?>">
</td>
<td><?php echo $form->error("email"); ?></td>
</tr>
<tr><td colspan="2" align="right">
<input type="hidden" name="subedit" value="1">
<input type="submit" value="Промени"></td></tr>
<tr><td colspan="2" align="left"></td></tr>
</table>
</form>

<?php
}
}

?>
              </div>
            </div>
<?php include "footer.php" ?>


