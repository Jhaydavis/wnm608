<?PHP
function selectAmount($amount = 1, $total = 3)
{
    $output = "<select name='amount'>";
    for ($i = 1; $i <= $total; $i++) {
        $output .= "<option " . ($i == $amount ? "selected" : "") . ">$i</option>";
    }
    $output .= "</select>";
    return $output;
}


function cartListTemplate($r, $o)
{

    $totalfixed = number_format($o->total, 2, '.', '');
    $selectamount = selectAmount($o->amount, 3);

    return $r . <<<HTML
    <div class="productCard-hres">
        <h2>Added to Your Cart:</h2>
       
    
        <h3>$o->name </h3>
        <h4>Format: $o->type</h4>
        <p>$o->description</p>
        <h4>Price Ea: $o->price</h4>
        <h4>Qty: ($o->amount) </h4>

        <form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
        <input type="hidden" name="id" value="$o->id">
        <p>Update Qty: </p>$selectamount
        </form>
    
        <h3 class="productPrice">Total: &dollar;$totalfixed</h3>

        <form action="cart_actions.php?action=delete-cart-item" method="post">
            <input type="hidden" name="id" value="$o->id">
            <input type="submit" class="productButton" value="Remove Item"> 
        </form>
    
        
        
      
        <hr>

        
    </div>

   



    HTML;
}

function cartTotals()
{
    $cart = getCartItems();
    $cartprice = array_reduce($cart, function ($r, $o) {
        return $r + $o->total;
    }, 0);

    $pricefixed = number_format($cartprice, 2, '.', '');
    $taxfixed = number_format($cartprice * 0.0725, 2, '.', '');
    $taxedfixed = number_format($cartprice * 1.0725, 2, '.', '');

    return <<<HTML
    <div class="productDetail">
    <h2>Cart Total</h2>
    <div class="card">
    <h3>Sub Total</h3>
    <p>&dollar;$pricefixed</p>

    <h3>Taxes</h3>
    <p>&dollar;$taxfixed</p>

    <h3>Total</h3>
    <p>&dollar;$taxedfixed</p>
    </div>

    HTML;
}
