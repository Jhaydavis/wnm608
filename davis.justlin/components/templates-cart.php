<?PHP

include_once "components/functions.php";
include_once "components/templates-hr.php";
include_once "components/cartList.php";


function cartListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard">
        <img src="$o->img_hres" class="productImage" alt="Image of Vehicle Art">
        <h2>$o->name ($o->amount)</h2>
        <h3>Formating: $o->type</h3>
        <p class="productPrice">&dollar;$o->total</p>
    
        
        <hr>
        <button class="productButton"><a href="cart.php?id=$o->id">Remove</a></button>
    </div>



    HTML;
}
