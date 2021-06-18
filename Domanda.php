<?php
class Domanda
{
 private string $username;
 private string $testo;
 private string $risposta; //risposta


 public function __construct(string $_username, string $_testo, string $_risposta)
 {
   $this->username = $_username;
   $this->testo = $_testo;
   $this->risposta = $_risposta;
 }

 public function getUsername()
  {
    return $this->username;
  }
  public function setUsername(string $_setname)
  {
    $this->username = $_setname;
  }
  public function getTesto()
  {
    return $this->testo;
  }
  public function setTesto(string $_settesto)
  {
    $this->testo = $_settesto;
  }
  public function getRisposta()
  {
    return $this->risposta;
  }
  public function setRisposta(string $_setrisposta)
  {
    $this->risposta = $_setrisposta;
  }
}

$demo=new Domanda('iremast', 'Vorrei sapere di più sulla schizzofrenia', '');
echo $demo->getUsername();
?>