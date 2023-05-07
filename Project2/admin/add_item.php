<head>
<link rel="stylesheet" type="text/css" href="/../webstyle.css" />
</head>
<?php
require(__DIR__ . "/../nav.php");
reset_session();
?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="name" name="name" required />
    </div>
    <div>
        <label for="description">Description</label>
        <input type="description" name="description"  />
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="number" name="stock"  />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success //copy register.php straight and just build it from scratch start there and work way through

        return true;
    }
</script>
<?php
//TODO 2: add PHP Code //copy from this one and create a form 
//first step is add the form data for the fields to enter items
//to read it look at login.php to read the table first step is to submit the entries
if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["stock"])) {
    $name = se($_POST, "name", "", false);
    $description = se($_POST, "description", "", false);
    $stock = se($_POST, "stock", "", false);
    //TODO 3
    $hasError = false;
    //sanitize
    //validate
    if (empty($name)) {
        flash("name must not be empty", "danger");
        $hasError = true;
    }
    if (empty($description)) {
        flash("Description must not be empty", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4 //
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO RM_Items (name,description,stock) VALUES(:name, :description, :stock)");
        try {
            $stmt->execute([":name" => $name, ":description" => $description, ":stock" => $stock]);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            echo "Error";
            
        }
    }
    
}
?>
<?php
require(__DIR__ . "/../partials/flash.php");
?>