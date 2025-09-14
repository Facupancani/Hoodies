<div class="up_wrapper">

<h1>{$title}</h1>

Ingrese los datos del producto
<form action='{$action}' id='product_upload' method='POST' enctype='multipart/form-data'>

<div id="prod_wrapper">
    <label class="log_label" for='name'>Nombre</label>
    <input class="product_input" name='name' type='text' value='{$valName}'>
    
    <label class="log_label" for='price'>Precio</label>
    <input class="product_input" name='price' type='text' value='{$valPrice}'>
    
    <label class="log_label" for='categorie'>Categorias</label>
    <input class="product_input" name='categorie' type='text' value='{$valCat}'>

    <div>
    <label for="Hombre">Hombre</label>
    <input type="radio" id="Hombre" name="Type" value="hombre">
    
    <label for="Mujer">Mujer</label>
    <input type="radio" id="Mujer" name="Type" value="mujer">

    <label for="Niño">Niño</label>
    <input type="radio" id="Niño" name="Type" value="niño">
    </div>

    <label class="log_label" for='input_name' style='cursor: pointer;'>Upload Image</label>
    <input class="" type="file" name="input_name" id="imageToUpload" value='{$valImg}'>

    <input class="product_button" type='submit'>
</div>
</form>
</div>