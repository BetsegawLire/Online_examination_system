<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: login student.php");
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
$uid = $password = "";
$uid_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if uid is empty
    if(empty(trim($_POST["uid"]))){
        $uid_err = "Please enter uid.";
    } else{
        $uid = trim($_POST["uid"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($uid_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT students.Id, studentaccount.UID, studentaccount.password, students.branch FROM studentaccount, students WHERE students.Id = studentaccount.ID && studentaccount.UID = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_uid);
            
            // Set parameters
            $param_uid = $uid;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $stmt->store_result();
                
                // Check if uid exists, if yes then verify password
                if($stmt->num_rows == 1){                    
                    // Bind result variables
                    $stmt->bind_result($id, $uid, $hashed_password, $branch);
                    if($stmt->fetch()){
                        $password=md5($password);  
                        if($password === $hashed_password){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION['loggedinstudent'] = true;
                            $_SESSION['id'] = $id;
                            $_SESSION['uid'] = $uid;  
                            $_SESSION['branch'] = $branch;                          
                            
                            // Redirect user to welcome page
                            header("location: page student.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid password.";
                        }
                    }
                } else{
                    // uid doesn't exist, display a generic error message
                    $login_err = "Invalid uid.";
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
    <title>Student Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         body{ font: 14px;
             }
        .wrapper{ width: 400px; 
                 padding: 50px; 
                 border-style: outset;
                 border-width: 3px;
                 border-radius: 10px;
                font-family: "Segoe UI",Arial,sans-serif;
                 margin: auto;
               }
               h2,p{
                text-align: center;
               }
               label{
                font-weight: bold;
               }
    </style>
</head>
<body>
 <div class="container mt-5">   
    <div class="wrapper">
        <h2>Student Login</h2>
        <h6>Please fill in your credentials to login.</h6>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>UID</label>
                <input type="number" name="uid" placeholder="enter your UID"class="form-control <?php echo (!empty($uid_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $uid; ?>">
                <span class="invalid-feedback"><?php echo $uid_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password"  placeholder="enter your password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <a href="index.php">back to home</a>
        </form>
    </div>
</div>    
</body>
</html>