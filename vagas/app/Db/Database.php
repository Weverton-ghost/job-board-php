<?php

namespace App\Db;

use \PDO; //Definido como uma depêndencia da nossa class. 

//Definido credenciais de acesso ao BD e informações váriaveis dentro da classe. 
class Database 
{   
    /**
     * Host de conexão com o banco de dados 
     * @var string
     */
    const HOST = 'localhost';

    /**
     * Nome do banco de dados
     * @var string
     */
    const NAME = 'wdev vagas';

    /**
     * Usuário do banco de dados
     * @var string
     */
    const USER = 'root';

    /**
     * Senha de acesso ao banco de dados
     * @var string
     */
    const PASS = 'toor';

    /**
     * Nome da tabela a ser manipulado
     * @var string
     */
    private $table;
    
    /**
     * Instância/criação de PDO - instãncia de conexão com o banco de dados
     * PDO é um grupo de classe que ajuda na conexão com o banco de dados.
     * @var PDO
     */
    private $connection;

    //Melhor momento para dedfinirmos qual table será manipulado é na instânciação da classe.
    /**
     * Define a tabela e instânceia a conexão
     * @param string $table
     */
    public function __construct($table = null)
    {
        $this->table = $table;
    }
}