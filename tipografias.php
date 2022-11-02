<?php

include('./templates/header.php');

?>

<div class="w3-container w3-content w3-padding-48">
	<h1>Tipografías</h1>
	<p>Estas son las fuentes disponibles. Selecciona la fuente para ver el efecto.</p>
</div>

<div class="w3-container w3-content w3-padding">
	<div id="uno" class="w3-container w3-padding-24 w3-quarter">
		<select name="fuentes" id="fuentes" onchange="cambioFuente();">
			<option value="amarat-bold">Amaranth bold</option>
			<option value="arima-madurai">Arima madurai</option>
			<option value="catamaran">Catamaran</option>
			<option value="conforta">Comvortaa regular</option>
			<option value="conforta-bold">Confortaa bold</option>
			<option value="de-valencia">De Valencia</option>
			<option value="densia">Densia</option>
			<option value="emblem">Emblema</option>
			<option value="fat-wandals">Fat Wandals</option>
			<option value="haetten-schweiler">Haettenscheweiler</option>
			<option value="lemonada">Lemonada</option>
			<option value="lobster">Lobster</option>
			<option value="manrope">Manrope extralight</option>
			<option value="monoton">Monoton</option>
			<option value="montserrat">Montserrat</option>
			<option value="nunito">Nunito</option>
			<option value="oswald">Oswald</option>
			<option value="permanent-maker">Permanent Maker</option>
			<option value="pompiere">Pompiere regular</option>
			<option value="restu">Restu</option>
			<option value="robofan">Robofan Symbols</option>
			<option value="roboto">Roboto</option>
			<option value="spoken">Spoken</option>
			<option value="transformer">Transformers</option>
			<option value="varela">Varela</option>
			<option value="zanzabar">Zanzabar</option>
		</select>
	</div>
	<div class="w3-container w3-padding w3-threequarter">
		<div id="muestra">
			<h1 id="fuente" style="text-align: center;padding: 10px;" class="w3-green"></h1>
			<p class="w3-xxlarge">h1 Título o cabecera</p>
			<p style="font-size: 30px;">h2 Título o cabecera</p>
			<p class="w3-xlarge">h3 Título o cabecera</p>
			<p style="font-size: 20px;">h4 Título o cabecera</p>
			<p class="fh2ge">h5 Título o cabecera</p>
			<p style="font-size: 16px;">h6 Título o cabecera</p>
			<p>Ejemplo de párrafo: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolor optio fuga animi commodi eos aspernatur! Reprehenderit corrupti, tempora quam ducimus beatae ipsum libero doloremque nostrum, sint laudantium corporis laboriosam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, explicabo esse? Deserunt quis quaerat molestias, ratione, magni consequuntur itaque officiis iusto aperiam, sunt voluptatum odio quas reprehenderit error suscipit nam.</p>
		</div>
	</div>
</div>

<?php

include('./templates/footer.php');

?>