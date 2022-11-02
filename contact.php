<?php

include('./templates/header.php');

?>

    <div class="w3-container w3-content w3-padding-24">
        <div class="w3-content w3-padding">
            <h2>Formulario de contacto</h2>
        </div>
        <form action="login.php" name="contacto" id="contacto" class="w3-content w3-text-dark-gray"
            onsubmit="return valida_envia();">
        
            <div class="w3-row w3-section w3-margin-bottom">
                <div class="w3-padding">
                    <label for="usuario">Nombre de usuario</label>
                    <input class="w3-input w3-border w3-round" name="usuario" id="usuario" type="text"
                        placeholder="Escribe tu nombre de usuario" onkeyup="pasaValor('usuario');">
                </div>
            </div>

            <div class="w3-row w3-section w3-margin-bottom">
                <div class="w3-padding">
                    <label for="email">Correo electrónico</label>
                    <input class="w3-input w3-border w3-round" name="email" id="email" type="text" placeholder="nombre@dominio.ext" onkeyup="pasaValor('email');">
                </div>
            </div>
            
            <div class="w3-row w3-section w3-margin-bottom">
                <div class="w3-padding">
                    <label for="telefono">Teléfono</label>
                    <input class="w3-input w3-border w3-round" name="telefono" id="telefono" type="text" placeholder="123456789"
                        onkeyup="pasaValor('telefono');">
                </div>
            </div>
        
            <div class="w3-row w3-section w3-margin-bottom">
                <div class=" w3-padding">
                    <label for="fecha_dia">Fecha de nacimiento</label>
                    <input class="w3-input w3-border w3-round" name="fecha_dia" id="fecha_dia" type="date" placeholder="1-31"
                        onkeyup="pasaValor('fecha_dia');">
                </div>
            </div>

            <div class="w3-row w3-section w3-margin-bottom">
                <div class="w3-padding">
                    <label for="dni">D.N.I.</label>
                    <input class="w3-input w3-border w3-round" name="dni" id="dni" type="text" placeholder="DNI - NIE"
                        onkeyup="pasaValor('dni');">
                </div>
            </div>
        
            <div class="w3-row w3-section w3-margin-bottom">
                <div class="w3-padding">
                    <label for="mostra">Mensaje:</label>
                    <textarea class="w3-input w3-border w3-round" name="mostra" id="mostra"></textarea>
                </div>
            </div>
        
            <p class="w3-center">
                <button type="button" class="w3-button w3-section w3-red w3-round" onclick="avisoReset();"> Borrar datos
                </button>
                <button type="button" class="w3-button w3-section w3-lime w3-round" onclick="guardarDatos();"> Guardar datos
                </button>
                <button class="w3-button w3-section w3-blue w3-round" onclick="obtenerDatos();"> Recuperar datos </button>
                <button type="submit" class="w3-button w3-section w3-green w3-round"> Enviar datos </button>
            </p>
        </form>
    </div>

<?php

include('./templates/footer.php');

?>