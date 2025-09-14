
<div id='rute'>
            <img id='back' src='images/icons/arrowBack.png'/>
            <a href='#'>Atras</a>
            <a href='home' class='selectionable'>Inicio</a>
            <span>/</span>
            <a href='store/' class='selectionable'>Productos</a>
            <span>/</span>
            

        {if $dispCat == TRUE}
            
            <a href='store/{$nombre}' class='selectionable'>{$nombre}</a>
            
            {if $dispType == TRUE}
                <span>/</span>
                <span>{$type}</span>
            {/if}
            
            </div>
        {else}
                <a href='' class='selectionable'>Todos los productos</a>
                </div>
        {/if}