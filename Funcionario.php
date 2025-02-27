<?php
namespace PHP\Modelo;

class Funcionario {
    protected int $id;         // ID único gerado pelo banco de dados
    protected string $codigo;  // Código único fornecido pelo sistema
    protected string $nome;
    protected string $email;
    protected string $senha;

    // Construtor ajustado para incluir o ID e o código único
    public function __construct(int $id, string $codigo, string $nome, string $email, string $senha)
    {
        $this->id      = $id;
        $this->codigo  = $codigo;
        $this->nome    = $nome;
        $this->email   = $email;
        $this->senha   = $senha;
    }

    // Métodos getter e setter
    public function __get(string $variavel): mixed
    {
        return $this->$variavel;
    }

    public function __set(string $variavel, mixed $novoDado): void
    {
        $this->$variavel = $novoDado;
    }

    // Método para imprimir os dados do funcionário
    public function imprimir(): string
    {
        return  "<br>ID:         "  . $this->id .
                "<br>Código:     "  . $this->codigo .
                "<br>Nome:       "  . $this->nome . 
                "<br>Email:      "  . $this->email .
                "<br>Senha:      "  . $this->senha;
    }
}
?>
