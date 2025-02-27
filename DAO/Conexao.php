<?php
namespace PHP\Modelo\DAO;

class Conexao {
    function conectar() {
        try {
            $conn = mysqli_connect('localhost', 'root', '', 'Snack');
            if ($conn) {
                return $conn;
            }
        } catch (Exception $erro) {
            return "Algo deu errado!<br><br>" . $erro;
        }
    } 
} 

