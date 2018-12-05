<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = $confirm_password = "";
$firstname= $lastname= "";
$telephone= "";
$telephone_err= $first_err= $last_err= $email_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
   if(empty(trim($_POST["firstName"]))){
        $first_err = "Please enter first name.";
    } else{
        $firstname = trim($_POST["firstName"]);
    }
    
    if(empty(trim($_POST["lastName"]))){
        $last_err = "Please enter first name.";
    } else{
        $lastname = trim($_POST["lastName"]);
    }
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM Users WHERE email = :email";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = trim($_POST["email"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $email_err = "This email is already in use";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    // Validate telephone
    if(empty(trim($_POST["telephone"]))){
        $telephone_err = "Please enter a telephone No.";     
    } elseif(strlen(trim($_POST["telephone"])) < 11){
        $telephone_err = "Please enter Valid Telephone";
    } else{
        $telephone = trim($_POST["telephone"]);
    }
    
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO Users (firstname,lastname,password,email,telephone) VALUES (:firstname,:lastname,:password,:email,:telephone)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":firstname", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":lastname", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":telephone", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_email = $email;
            $param_password = password_hash($password,PASSWORD_BCRYPT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.html");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>