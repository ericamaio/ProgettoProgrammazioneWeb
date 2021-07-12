<?php

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



}







?>
