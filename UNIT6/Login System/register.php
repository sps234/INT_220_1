<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate username
    if (empty($_POST["username"])) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $_POST["username"];

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = $_POST["username"];
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $password_err = "Please enter a password.";
    } elseif (strlen($_POST["password"]) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = $_POST["password"];
    }

    // Validate confirm password
    if (empty($_POST["confirm_password"])) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = $_POST["confirm_password"];
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            // Set parameters
            $param_username = $username;
            $param_password = $password;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        Username
        <input type="text" name="username" value="<?php echo $username; ?>"><span><?php echo $username_err; ?></span>
        <br>

        Password
        <input type="password" name="password"
            value="<?php echo $password; ?>"><span><?php echo $password_err; ?></span>
        <br>

        Confirm Password
        <input type="password" name="confirm_password"
            value="<?php echo $confirm_password; ?>"><span><?php echo $confirm_password_err; ?></span>
        <br>

        <input type="submit">
        <input type="reset">

        <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </form>
    </div>
</body>

</html>