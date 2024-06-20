<?php
include("conn.php");
session_start();
function getCartItem($user_id,$product_id){
    include("conn.php");
    $query = "SELECT * FROM cart WHERE uid = $user_id AND pid = $product_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the cart item as an associative array
        $cartItem = mysqli_fetch_assoc($result);

        return $cartItem;
    } else {
        // Item not found in the user's cart
        return null;
    }
}

function updateCartItemQuantity($cart_item_id, $new_quantity) {
    include("conn.php");

    $qer="select quantity from cart where oid=$cart_item_id";
    $res=mysqli_query($conn,"$qer");
    $x=mysqli_fetch_assoc($res);
    $n=$x['quantity'];
    // Sanitize the new quantity to prevent SQL injection (you should use prepared statements for better security)
    $new_quantity = $n+$new_quantity;

    // Prepare and execute a SQL query to update the cart item's quantity
    $query = "UPDATE cart SET quantity = $new_quantity WHERE oid = $cart_item_id";
    $result = mysqli_query($conn, $query);

    if ($result ) {
        return true;
    } else {
        return false;
    }

}

function addCartItem($user_id, $product_id, $quantity) {
    include("conn.php");
    // Sanitize the input values to prevent SQL injection (you should use prepared statements for better security)
    $user_id = mysqli_real_escape_string($conn, $user_id);
    $product_id = mysqli_real_escape_string($conn, $product_id);
    $quantity = mysqli_real_escape_string($conn, $quantity);

    // Prepare and execute a SQL query to insert a new cart item
    $query = "INSERT INTO cart (uid, pid, quantity) VALUES ($user_id, $product_id, $quantity)";
    $result = mysqli_query($conn, $query);

    if ($result ) {
        return true;
    } else {
        return false;
    }

}


if (isset($_POST['st'])) {
    $user_id=$_SESSION['uid'];
    $product_id = $_POST['h'];
    $quantity = $_POST['q'];
    // Check if the product is already in the cart
    $existing_item = getCartItem($user_id, $product_id); // You need to implement this function
    if ($existing_item) {
        echo "He";
        // Update the quantity if the product is already in the cart
        updateCartItemQuantity($existing_item['oid'], $quantity); // You need to implement this function
    } else {
        // Add the product to the cart
        addCartItem($user_id, $product_id, $quantity);
        echo "added";
         // You need to implement this function
    }
    header('Location: menu.php');
}

// Redirect the user back to the product page or the cart page

?>
