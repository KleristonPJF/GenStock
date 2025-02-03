<?php
if (!defined('ACCESS_ALLOWED')) {
    exit('Acesso direto não permitido');
}
?>

<label for="usuario">Usuario:</label>
<input type="text" name="usuario" id="usuario" require>
<br>
<label for="senha">Senha:</label>
<input type="password" name="senha" id="senha" require>
<br>
<button type="submit">Enviar</button>