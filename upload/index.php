<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Send</button>

</form>

<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 18/12/2019
 * Time: 15:13
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"];

    if ($file["error"]) {

        throw new Exception("Erro: " . $file["error"]);

    }

    $dirUpload = "uploads";

    if (!is_dir($dirUpload)) {

        mkdir($dirUpload);

    }

    if (move_uploaded_file($file["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $file["name"])) {

        echo "Upload realizado com sucesso!";

    } else {

        throw new Exception("Não foi possível realizar o upload!");

    }

}

