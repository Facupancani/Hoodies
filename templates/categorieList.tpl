<div id="categorieList">
    {foreach from=$categories item=$cat}
        <div>
            <a href="store/{$cat->nombre}">{$cat->nombre}</a>
            <a href="editCategorie/{$cat->id_categoria}">editar</a>
            <a href="deleteCategorie/{$cat->id_categoria}">eliminar</a>
        </div>
    {/foreach}

   <a href='newCategorie'>Añadir categoria</a>
</div>