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
/* Requested Username error checking */
$req_user = trim($_GET['user']);
if(!$req_user || strlen($req_user) == 0 ||
   !$database->usernameTaken($req_user)){
   echo "Няма такъв потребител";
}
else
{
/* Logged in user viewing own account */
if(strcmp($session->username,$req_user) == 0){
   echo "<h1><img src=\"images/user_info.png\" width=\"32\" height=\"32\">My Account</h1>";
}
/* Visitor not viewing own account */
else{
   echo "<h1>Данни за акаунта</h1>";
}

/* Display requested user information */
$req_user_info = $database->getUserInfo($req_user);

/* Username */
echo "<b>Име: ".$req_user_info['username']."</b><br>";

/* Email */
echo "<b>Email:</b> ".$req_user_info['email']."<br>";

/**
 * Note: when you add your own fields to the users table
 * to hold more information, like homepage, location, etc.
 * they can be easily accessed by the user info array.
 *
 * $session->user_info['location']; (for logged in users)
 *
 * ..and for this page,
 *
 * $req_user_info['location']; (for any user)
 */

/* If logged in user viewing own account, give link to edit */
if(strcmp($session->username,$req_user) == 0){
   echo "<br><a href=\"useredit.php\">Промяна на данните</a><br>";
}}
?>
              </div>
            </div>
<?php include "footer.php" ?>