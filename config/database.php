<?php
/**
 * Configuração da conexão com o banco de dados MySQL
 * Arquivo: config/database.php
 */

// Credenciais do banco de dados
define('DB_HOST', 'localhost');      // Servidor MySQL
define('DB_USER', 'root');           // Usuário MySQL
define('DB_PASS', '');               // Senha MySQL (deixe vazio se for padrão)
define('DB_NAME', 'achei_ou_perdi'); // Nome do banco

// Configurações de caracteres
define('DB_CHARSET', 'utf8mb4');

// Criar conexão
$conexao = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Definir charset UTF-8
$conexao->set_charset(DB_CHARSET);

// Retornar a conexão para usar em outros arquivos
?>
