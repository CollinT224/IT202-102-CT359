<?php
require(__DIR__ . "/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, cost, stock, catagory FROM Product WHERE stock > 0 LIMIT 50");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
?>
<style>
#cart-list {
    display: flex;
    flex-direction: column;
}
</style>
<script>
    function purchase(itemName, itemCost) {
        console.log("TODO purchase item", itemName);
        let cartList = document.getElementById("cart-list");
        let li = document.createElement("li");
        li.appendChild(document.createTextNode(itemName + " - $" + itemCost));
        cartList.appendChild(li);
        alert("Item added to cart");
        //TODO create JS helper to update all show-balance elements
    }

    function clearCart() {
        let cartList = document.getElementById("cart-list");
        cartList.innerHTML = "";
    }

    
</script>

<div class="container-fluid">
    <h1>Shop</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        Item
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                    </div>
                    <div class="card-footer">
                        Cost: <?php se($item, "cost"); ?>
                        <button onclick="purchase('<?php se($item, 'name'); ?>', '<?php se($item, 'cost'); ?>')" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <hr>
    <h2>Cart</h2>
    <ul id="cart-list"></ul>
    <button onclick="clearCart()">Empty Cart</button>
</div>
<?php
require(__DIR__ . "/partials/footer.php");
?>