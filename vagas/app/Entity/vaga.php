<?php 

namespace App\Entity;

class Vaga {
    /**
     * Identificador único da vaga
     * @var integer 
     */
    public $id;

    /**
     * Titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * Descrição da vaga
     * @var string 
     */
    public $descricao;

    /**
     * Define se a vaga está ativa
     * @var string(s)(n)
     */
    public $ativo;

    /**
     * Data de publicação da vaga
     * @var string 
     */
    public $data; 

    /**
     * Responsável por cadastrar uma nova vaga no banco
     * @var boolean
     */
    public function cadastrar(): bool
    {
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s'); 

    //INSERIR A VAGA NO BANCO

    //ATRIBUIR O ID DA VAGA NA INSTÂNCIA

    //RETORNAR SUCESSO
    }
}