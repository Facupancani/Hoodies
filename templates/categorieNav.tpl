<subnav id="subnav">
    {foreach from=$categories item=$cat}
        <a href="store/{$cat->nombre}">{$cat->nombre}</a>
    {/foreach}
</subnav>