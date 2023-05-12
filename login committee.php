<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: login committee.php");
    exit;
}
 

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'final');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

 
// Define variables and initialize with empty values
$coursename = $password = "";
$coursename_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if coursename is empty
    if(empty(trim($_POST["coursename"]))){
        $coursename_err = "Please enter coursename.";
    } else{
        $coursename = trim($_POST["coursename"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($coursename_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, coursename, password FROM committeeacc WHERE coursename = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $coursename);
            
            // Set parameters
            $param_coursename = $coursename;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if coursename exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $coursename, $hashed_password);
                    if($stmt->fetch()){
                        $password=md5($password);
                        if($password === $hashed_password){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["coursename"] = $coursename;                            
                            
                            // Redirect user to welcome page
                            header("location: page committee.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid coursename or password.";
                        }
                    }
                } else{
                    // coursename doesn't exist, display a generic error message
                    $login_err = "Invalid coursename or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> committee Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
         .wrapper{ width: 380px; 
                 padding: 20px; 
                 border-style: outset;
                 border-width: 3px;
                 border-radius: 10px;
                 margin: auto;
               }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Committee Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Course name</label>
                <input type="text" name="coursename" placeholder="enter course name"class="form-control <?php echo (!empty($coursename_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $coursename; ?>">
                <span class="invalid-feedback"><?php echo $coursename_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"  placeholder="enter your password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>forgot your password? please contact with admin.</p>
        </form>
    </div>
</body>
</html>