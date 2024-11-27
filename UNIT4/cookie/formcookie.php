<html>

<body>
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <input type="text" name="user">
          <input type="submit" name="set" value="set">
          <input type="submit" name="del" value="del">
     </form>
</body>

</html>


<?php

global $cookie1;

if (isset($_POST['set'])) {
     $cookie1 = $_POST['user'];
     setcookie('u1', $cookie1, time() + 20);
     $_COOKIE['u1'] = $cookie1;
}

// sleep(3);

if (isset($_COOKIE['u1'])) {
     echo "Cookie '" . $cookie1 . "' has been set<br>";
     echo "Value is: " . $_COOKIE['u1'];
} else {
     echo "Cookie '" . $cookie1 . "' is not set";
}


?>


<?php
if (isset($_POST['del'])) {
     $cookie1 = $_POST['user'];
     setcookie('u1', "", time() - 10);
     echo $_COOKIE['u1'] . " has been deleted";
}
?>