<php
class Documento
{
 private string $titolo;
 private string $autore;
 private string $username;
 private Categoria categoria_appartenenza;


 public function __construct(string $_titolo, string $_autore, string $_username, Categoria $_categoria_appartenenza)
 {
   $this->titolo = $_titolo;
   $this->autore = $_autore;
   $this->username = $_username;
   $this->categoria_appartenenza=$_categoria_appartenenza;
 }


  public function getTitolo()
  {
    return $this->titolo;
  }
  public function setTitolo(string $_settitolo)
  {
    $this->titolo = $_settitolo;
  }
 

  public function getautore()
  {
    return $this->autore;
  }
  public function setAutore(string $_autore)
  {
    $this->autore = $_setautore;
  }


  public function getUsername()
  {
    return $this->username;
  }
  public function setUsername(string $_setusername)
  {
    $this->username = $_setusername;
  }


  public function getCategoriaAppartenenza () {
    return $this->categoria_appartenenza; 
  }
  public function setCategoriaAppartenenza(string $_categoria_appartenenza)
  {
    $this->categoria_appartenenza = $_categoria_appartenenza;
  }


  pubic function associa_commento {

  }
}
