<head>
<link rel="stylesheet" type="text/css" href="/webstyle.css" />
</head>
<?php
require(__DIR__ . "/nav.php");
##reset_session();
?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" required />
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description"  />
    </div>
    <div>
        <label for="stock">Stock</label>
        <input type="number" name="stock"  />
    </div>
    <div>
        <label for="cost">Cost: $</label>
        <input type="number" name="cost"  />
    </div>
    <div>
        <label for="catagory">Catagory</label>
        <input type="text" name="catagory"  />
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
if (isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["stock"] ) && isset($_POST["cost"] )   && isset($_POST["catagory"] )   ) {
    $name = se($_POST, "name", "", false);
    $description = se($_POST, "description", "", false);
    $stock = se($_POST, "stock", "", false);
    $cost = se($_POST, "cost", "", false);
    $catagory = se($_POST, "catagory", "", false);
    //$visibility = se($_POST, "visibility", "", false);
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
        $stmt = $db->prepare("INSERT INTO Product (name,description,stock,cost,catagory) VALUES(:name, :description, :stock, :cost, :catagory)");
        try {
            $stmt->execute([":name" => $name, ":description" => $description, ":stock" => $stock, ":cost" => $cost, ":catagory" => $catagory]);
            flash("Successfully registered!", "success");
        } catch (Exception $e) {
            echo "Error" ,  $name , $description, $stock, $cost, $catagory;
            
        }
    }
    
}
?>
<?php
require(__DIR__ . "/partials/flash.php");
?>