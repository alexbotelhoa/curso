<!- Ataque XSS ->

<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 20/12/2019
 * Time: 17:17
 */

$_POST["busca"] = "<a href='#'><strong>Teste</strong></a><script>alert('Testarei')</script>";

if (isset($_POST["busca"])) {

    //Testa com isso
    echo $_POST["busca"];

    //Comenta a linha anterior e corrigi o problema com essa linha que retira as TAGs
    echo strip_tags($_POST["busca"], "<strong><a>");

    //Ou isso para virar tudo string
    echo htmlentities($_POST["busca"]);


}
