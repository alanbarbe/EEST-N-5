<html>
<head>
<title>TP71</title>
</head>
<body>
<?php
class Rectangulo {
  private $altura;
  private $ancho;
  function __construct($alt, $ancho){
    $this->altura = $alt;
    $this->ancho = $ancho;
  }
  public function getAltura()
  {
    return $this->altura;
  }
  public function getAncho()
  {
    return $this->ancho;
  }
  public function CalcularPerímetro()
  {
    return ($this->altura * 2) + ($this->ancho * 2);
  }
  public function CalcularArea()
  {
    return $this->altura * $this->ancho;
  }
  public function MostrarDatos()
  {
    echo "Altura: " . $this->getAltura() . "<br>";
    echo "Ancho: " . $this->getAncho() . "<br>";
    echo "Perímetro del rectángulo: " . $this->CalcularPerímetro() . "<br>";
    echo "Área del rectángulo: " . $this->CalcularArea() . "<br>";
  }
}
$rectangulo = new Rectangulo($_POST['h'], $_POST['a']);

$rectangulo->MostrarDatos();
?>
</body>
</html>