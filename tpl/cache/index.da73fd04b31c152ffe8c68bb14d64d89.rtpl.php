<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Bem-vindo ao <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de template usando RainTPL</p>
<p>Versão do meu PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>