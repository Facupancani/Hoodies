<div class='prodct_solo_container'>

            <img class='product_photo_solo' src='{$imagen}'/>
            
            <div class='product_info'>
            <p> {$nombre} </p>
            <p>{$precio} </p>
            <p> Talles: </p>
            <div class='talles'>
                <div class='talle'>XS</div>
                <div class='talle'>S</div>
                <div class='talle'>M</div>
                <div class='talle'>L</div>
                <div class='talle'>XL</div>
            </div>
            <input class='log_button' value="Comprar" type='submit'>
            
            {if $admin == true}
                    <a href='getEdit/{$id}'><img class='config' src='images/icons/edit.png'/>Editar</a>
                    <a href='delete/{$id}'><img class='config' src='images/icons/bin.png'/>Eliminar</a>
            {/if}
            </div>
</div>
</div>
        