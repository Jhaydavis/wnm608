<?PHP
function productListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard-hres">
        <img src="$o->img_hres" class="productImage-hres" alt="Car Art">
        <h2>$o->name</h2>
        <h3>Format: $o->type</h3>
        <p>$o->description</p>
        
        <h3 class="productPrice">&dollar;$o->price</h3>
        
        <div>
            <p>Order Qty:</p>
        <select class="form-select">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        </select>
      
        </div>
        <hr>
        <button class="productButton"><a href="cart.php?id=$o->id">Add to Cart</a></button>
        <div><button class="productButton"><a href="index.php">Back to Store</a></button></div>
        
    </div>



    HTML;
}
