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



function recListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard">
        <img src="$o->img_tb" class="productImage" alt="Car Art">
        <h3><a href="detail.php?id=$o->id">$o->name</a></h3>
       
    </div>



    HTML;
}



function recommendedProducts($a)
{

    $products = array_reduce($a, 'recListTemplate');
    echo <<<HTML
    <div class = "adminItemFlex">$products</div>
    HTML;
}
