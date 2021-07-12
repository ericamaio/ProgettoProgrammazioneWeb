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
    public function setName(string $nome) {$name = $nome;}
    public function getName() {return $name;}

    public function setSurname(string $sname) {$surname = $sname;}
    public function getSurname() {return $surname;}

    public function setBirth(date $bdate) {$birthdate = $bdate;}
    public function getBirth() {return $birthdate;}

    public function setCodProf(string $codprof) {$cod_prof = $codprof;}
    public function getCodProf() {return $cod_prof;}

    public function setPasswd(password $passwd) {$pasword = $passwd;}
    public function getPasswd() {return $password;}

    public function setEmail(string $mail) {$email = $mail;}
    public function getEmail() {return $email;}



}







?>
