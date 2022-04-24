<?PHP
function cartListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard">
        <img src="$o->img_hres" class="productImage" alt="Car Art">
        <h2>$o->name</h2>
        <h3>Format: $o->type</h3>
        <p class="productPrice">&dollar;$o->price</p>
        
        <hr>
        <button class="productButton"><a href="cart.php?id=$o->id">Remove</a></button>
    </div>



    HTML;
}
