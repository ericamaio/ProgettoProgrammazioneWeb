<php

class risposta {

    private string $username;
    private string $testo;


    public function __construct(string $_username, string $_testo)
 {
   $this->username = $_username;
   $this->testo = $_testo;
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
   
 
 







 
 
 }
?>
