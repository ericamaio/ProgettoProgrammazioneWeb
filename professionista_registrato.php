<?php

require once "Categoria.php";
require once "Documento.php";
require once "Domanda.php";
require once "risposta.php";

class Prof_Reg {

    //ATTRIBUTI//
    private string $name;
    private string $surname;
    private date $birthdate;
    private string $cod_prof;
    private string $username;
    private password $password;
    private string $email;

    public function __construct(string $name, string $surname, date $birthdate, string $cod_prof, string $username, password $password, string $email) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->date = $_birthdate;
        $this->cod_prof = $_cod_prof;
        $this->username = $_username;
        $this->password = $_password;
        $this->email = $_email;
    }

    
    
    //METODI CLASSICI & BANALI//
    public function setName(string $nome) {$this->name = $nome;}
    public function getName() : string {return $this->name;}

    public function setSurname(string $sname) {$this->surname = $sname;}
    public function getSurname() :string {return $surname;}

    public function setBirth(date $bdate) {$this->birthdate = $bdate;}
    public function getBirth() : date {return $birthdate;}

    public function setCodProf(string $codprof) {$this->cod_prof = $codprof;}
    public function getCodProf() : string {return $cod_prof;}

    public function setPasswd(password $passwd) {$this->pasword = $passwd;}
    public function getPasswd() : password {return $password;}

    public function setEmail(string $mail) {$this->email = $mail;}
    public function getEmail() : string {return $email;}

    
    //METODI SPECIFICI//
    //public function login()
    //public function logout()
    public function accedi_a_doc(string $doc_name) : Documento {}
    //public function edit_doc() {}
    //public function delete_doc() {}
    //public function add_doc_comment() {}
    //public function open_forum() {}
    public function publish_q(string $question) : Domanda {}
    public function answer(string $question, string $answer) : risposta {}
    public function serch_q(string $keywords) : Domanda {}
    public function add_doc_fav(string $doc_name, string $username) {}
    public function delete_doc_fav(string $doc_name, string $username) {}
    //public function view_fav() {}
    public function select_cat(string $cat_name, bool $reg) : Categoria {}
    public function save_doc(string $doc_name, string $cat_name) {}
    public function crea_categoria(string $cat_name) : Categoria {}
    public function delete_doc(string $doc_name) {}
    public function select_cat(string $cat_name, bool $reg) : Categoria


}







?>
