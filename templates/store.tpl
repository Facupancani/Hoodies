{if $admin == TRUE }
    <div>
        <a href='categorias'> Editar categorias</a>
    </div>
{/if}

<ul id='products_container'>

        {if $dispCat == TRUE}

            {if $dispType == TRUE}

                {foreach from=$products item=$product}
                    {if $product->id_categoria == $idCat and $product->tipo == $type}
                        <div class='product'>
                            <a href='show/{$product->id}'>
                            <img class='product_photo' src='{$product->imagen}'/></a>
                            <span> {$product->nombre} </span>
                            <span>${$product->precio}</span>
                        </div>
                    {/if}
                {/foreach} 

            {elseif $dispType == FALSE}
                {foreach from=$products item=$product}
                    {if $product->id_categoria == $idCat}
                        <div class='product'>
                            <img class='product_photo' src='{$product->imagen}'/>
                            <a href='show/{$product->id}'> {$product->nombre} </a>
                            <span>${$product->precio}</span>
                        </div>
                    {/if}
                {/foreach} 
            {/if}

        {elseif $dispCat == FALSE}
            {foreach from=$products item=$product}
                        <div class='product'>
                            <img class='product_photo' src='{$product->imagen}'/>
                            <a href='show/{$product->id}'> {$product->nombre} </a>
                            <span>${$product->precio}</span>
                        </div>
            {/foreach} 
        {/if}


        {if $admin == TRUE }
                <li class='add_product'>
                    <a href='getLoad'>AÑADIR PRODUCTO</a>
                    <p>+</p>
                </li>
        {/if}
        
</ul>