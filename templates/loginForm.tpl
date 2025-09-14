<div class="up_wrapper">


<h1 id="log_text">Mi cuenta</h1>

<div id="wrapper">
<div id="log_forms">


<form action='checkLog' class='log' method='POST' enctype='multipart/form-data'>
<h3 class="log_action">Iniciar sesion</h3>

<label class="log_label" for='user'>Usuario </label>
<input class="log_input" required name='user' type='text'>

<label class="log_label" for='password'>Contraseña </label>
<input class="log_input" required name='password' type='password'>

<input class="log_button" type='submit'>
</form>


<form action='checkRegister' class='reg' method='POST' enctype='multipart/form-data'>
<h3 class="log_action">Crear cuenta</h3>

<label class="log_label" for='user'>Usuario </label>
<input class="log_input" required name='user' type='text'>

<label class="log_label" for='password'>Contraseña </label>
<input class="log_input" required name='password' type='password'>

<label class="log_label" for='confirmPassword'>Confirmar contraseña </label>
<input class="log_input" required name='confirmPassword' type='password'>

<input class="log_button" type='submit'>
</form>


</div>
</div>
</div>

<div class="spacer-big"></div>