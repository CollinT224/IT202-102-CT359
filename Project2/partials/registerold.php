<?php
require(__DIR__ . "/nav.php");
?>
<?php
//require(__DIR__ . "/lib/functions.php");
?>
<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
/*
$hasError=true;
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])) {
    echo "Submitted";
    echo $_POST['email'];
    if($_POST['password']==$_POST['confirm']) //added check for password
    $email = $_POST['email'];
    echo $_POST['email'];
    $password = $_POST['password'];
    echo $_POST['password'];
    $confirm = $_POST['confirm'];
    echo $_POST['confirm'];
    echo $email . ' ' . $password;
    $hasError=false;
    //TODO 3
    if(!$hasError){
        $hash=password_hash($password, PASSWORD_BCRYPT);
        $db=getDB();
        //extra stuff
        $stmt = $db->prepare("INSERT INTO Users(email, password) VALUES(:email, :password)");
        try
        {
            $r= $stmt->execute([":email" => $email, "password" => $hash]);
            echo "succesfully registered!";
        }
        catch (Exception $e){
            echo "There was an unexpected error registering<br>";
            echo "<pre>" . var_export($e,true) . "</pre>";
            
        }

    }
}
    //sanitize
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = sanitize_email($email);
    //validate
    /*if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        $hasError = true;*/
    if(!is_valid_email($email)){
        echo"invalid email address";
        $hasError = true;
    }

    if (empty($password)) {
        echo "password must not be empty";
        $hasError = true;
    }
    if (empty($confirm)) {
        echo "Confirm password must not be empty";
        $hasError = true;
    }
    if (strlen($password) < 8) {
        echo "Password too short";
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        echo "Passwords must match";
        $hasError = true;
    }
    if (!$hasError) {
        echo "Welcome, $email";
        //TODO 4
    }
//session_start();
?>