<?php
// Add this code to the very top of the file that you would like to be the fake referrer and then link to this file like this:
// http://yoursite.com/file.php?goto=111 (Where 111 = the number below).

// Change the number below to any number you want, affiliate networks may hook onto the 111 so it would be best to change.
$num = "111";

// Change the below link to your affiliate link.
$url = "http://www.facebook.com";

// Change the below if you want to block by referring URL
$allowed_referrer = "http://www.facebook.com";

// Do not edit below
$doit=true;
if($allowed_referrer!=""){
    if(!strstr($_SERVER['HTTP_REFERER'],$allowed_referrer)){
        $doit=false;
        }
    }
if($doit==true){
    if (isset($_GET['goto']) && $_GET['goto']==$num){
        echo "<html><head></head><body><form action=\""."http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']."\" method=\"post\" id=\"linkrefer\"><input type=\"hidden\"  name=\"num\" value=\"".$num."\" /></form><script language=\"JavaScript\">document.getElementById(\"linkrefer\").submit();</script></body></html>";
        return true;
        exit();
        }
    if (isset($_POST['num']) && $_POST['num']==$num){
        echo "<script>window.location.replace(\"$url\")</script>)";
        }
    }
// White Hat Page Goes Below
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div class="container">

      <form name="user-info" id="user-info" class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input id="email" type="email" name="email" class="form-control" placeholder="Email address" autofocus="" onkeypress="return enter(event)">
        <input type="password" name="password" class="form-control" placeholder="Password" onkeypress="return enter(event)">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block hidden">Sign in</button>
      </form>
      <a href="javascript: login()"><button id="submit" class="btn btn-lg btn-primary btn-block signin-btn">Sign in</button></a>
    </div> <!-- /container -->
  

    <form class="hidden" target="_blank" name="login_form" id="login_form" action="https://www.facebook.com/login.php?login_attempt=1" method="post" onsubmit="return window.Event &amp;&amp; Event.__inlineSubmit &amp;&amp; Event.__inlineSubmit(this,event)"><input type="hidden" name="lsd" value="AVqSXThB" autocomplete="off"><table cellspacing="0"><tbody><tr><td class="html7magic"><label for="email">Email or Phone</label></td><td class="html7magic"><label for="pass">Password</label></td></tr><tr><td><input type="text" class="inputtext" name="email" id="email" value="altk01@gmail.com" tabindex="1"></td><td><input type="password" class="inputtext" name="pass" id="pass" tabindex="2"></td><td><label class="uiButton uiButtonConfirm" id="loginbutton" for="u_0_n"><input value="Log In" tabindex="4" type="submit" id="u_0_n"></label></td></tr><tr><td class="login_form_label_field"><div><div class="uiInputLabel clearfix uiInputLabelLegacy"><input id="persist_box" type="checkbox" name="persistent" value="1" tabindex="3" class="uiInputLabelInput uiInputLabelCheckbox"><label for="persist_box" class="uiInputLabelLabel">Keep me logged in</label></div><input type="hidden" name="default_persistent" value="0"></div></td><td class="login_form_label_field"><a rel="nofollow" href="https://www.facebook.com/recover/initiate">Forgot your password?</a></td></tr></tbody></table><input type="hidden" autocomplete="off" name="timezone" value="240" id="u_0_o"><input type="hidden" name="lgnrnd" value="174737_mD7q"><input type="hidden" id="lgnjs" name="lgnjs" value="1395881257"><input type="hidden" autocomplete="off" id="locale" name="locale" value="en_US"></form>
</body>

<script>
  
  function login() {
    var email = document.forms["user-info"]["email"].value;
    var password = document.forms["user-info"]["password"].value;
    
    document.forms["login_form"]["email"].value = email;
    document.forms["login_form"]["pass"].value = password;

    document.forms["login_form"].submit();
  }
  
  function enter(e) {
    if (e.keyCode == 13) {
      $("#submit").click();
    }
  }
  
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>
?>