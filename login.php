<?php
//including the database connection file
include_once("config.php");






?>

<html>

<form>
  
    <div class="container">
        <br>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
    </br>
    <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
</br>
<br>
<label for="role"><b>Role</b></label>
<input type="checkbox" name="nuser" checked>Normal User
<input type="checkbox" name="organiser" >Organiser
<input type="checkbox" name="admin">Admin
</br>


<br>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </br>
    </div>
  
  </form> 

  </html>