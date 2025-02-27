<?php
namespace PHP\Modelo;


class Cliente {
    protected string $nome;
    protected string $email;
    protected string $senha;

    public function __construct(string $nome, string $email, string $senha)
    {
        $this->nome  = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function __get(string $variavel): mixed
    {
        return $this->$variavel;
    }

    public function __set(string $variavel, mixed $novoDado): void
    {
        $this->$variavel = $novoDado;
    }

    public function imprimir(): string
    {
        return  "<br>Nome:       "  . $this->nome .
                "<br>Email:      "  . $this->email .
                "<br>Senha:      "  . $this->Senha;
    }

}
?>
