<?PHP
function productListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard">
        <img src="$o->img_tb" class="productImage" alt="Car Art">
        <h2>$o->name</h2>
        <p>Format: $o->type</p>
        <p class="productPrice">&dollar;$o->price</p>
        
        <hr>
        <button class="productButton"><a href="detail.php?id=$o->id">Details</a></button>
    </div>



    HTML;
}
