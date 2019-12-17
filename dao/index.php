<?php
/**
 * Created by PhpStorm.
 * User: Alex Botelho
 * Date: 16/12/2019
 * Time: 16:11
 */

require_once ("config.php");


/**
 *  Busca todos os usuarios sem a class Usuario
 */
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);


/**
 * Busca um usuário pela class Usuario
 */
//$usuario = new Usuario();
//$usuario->searchId(20);
//echo $usuario;


/**
 * Busca todos os usuario pela class Usuario
 */
//$searchUsers = Usuario::searchAll();
//echo json_encode($searchUsers);


/**
 * Busca um usuario determinado pela nome usando a class Usuario
 */
//$searchUser = Usuario::searchLogin("root");
//echo json_encode($searchUser);


/**
 * Busca um usuario com Login e Senha usando a class Usuario (Autenticação)
 */
//$loginSenha = new Usuario();
//$loginSenha->searchLoginPassword("alexbotelhoo","12345");
//echo $loginSenha;


/**
 * Inserção de usuário no banco com INSERT via procedure
 */
//$usuario = new Usuario();
//$usuario->setDeslogin("Marcel");
//$usuario->setDessenha("987654");
//$usuario->insert();
/**
 * OU com o construtor
 */
//$usuario = new Usuario("Marcel 2", "456123");
//$usuario->insert();
//echo $usuario;


/**
 * Alteração de usuario no banco com UPDATE sem procedure
 */
$usuario = new Usuario();
$usuario->searchId(30);
$usuario->update("Italo", "852456");
echo $usuario;
