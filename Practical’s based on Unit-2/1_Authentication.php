<form method="post">
  Username : <input type="text" name="username"><br><br>
  Password : <input type="password" name="password"><br><br>
  <input type="submit" value="Login">
</form>

<?php

function authentication($username, $password) 
{
    $User = "admin";
    $Pass = "123";
    return ($username === $User && $password === $Pass);
}
function login() 
{
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if (authentication($user, $pass)) {
        echo "✅ Login successful!";
    } else {
        echo "❌ Invalid.";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    login();
}
?>
