<?PHP
function productListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard-hres">
    <form method="post" action="cart_actions.php?action=add-to-cart">
    
    <input type="hidden" name="product-id" value="$o->id">
    
        <img src="$o->img_hres" class="productImage-hres" alt="Car Art">
        <h2>$o->name</h2>
        <h3>Format: $o->type</h3>
        <p>$o->description</p>
        
        

        <h3 class="productPrice">&dollar;$o->price</h3>
        <p>Number in Stock: $o->inventory_qty</p>
        
        
            <p>Order Qty:</p>
        <select id="form-select" name="product-amount">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
        <input type="submit" class="productButton" value="Add to Cart">
        </form>
        <hr>

       <!-- <button class="productButton"><a href="cart.php?id=$o->id">Add to Cart</a></button> -->

      

        <div><button class="productButton"><a href="index.php">Back to Store</a></button></div>
        
    </div>



    HTML;
}
