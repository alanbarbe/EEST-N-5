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
  public function calcularPerímetro()
  {
    return ($this->altura * 2) + ($this->ancho * 2);
  }
  public function calcularArea()
  {
    return $this->altura * $this->ancho;
  }
}
$rectangulo = new Rectangulo($_POST['h'], $_POST['a']);
echo "Altura: " . $rectangulo->getAltura() . "<br>";
echo "Ancho: " . $rectangulo->getAncho() . "<br>";
echo "Perímetro del rectángulo: " . $rectangulo->calcularPerímetro() . "<br>";
echo "Área del rectángulo: " . $rectangulo->calcularArea() . "<br>";
?>
</body>
</html>