<html>
<head>
<title>PHP Class</title>
</head>
<body>
<?php
class cabecera{
    private $titulo;
    private $ubicacion;
    private $colorFuente;
    private $colorFondo;

    public function setCabecera($tit,$ubi,$colorFuen,$colorFon){
        $this->titulo=$tit;
        $this->ubicacion=$ubi;
        $this->colorFuente=$colorFuen;
        $this->colorFondo=$colorFon;
    } 
        
        public function graficar(){
        echo '<div style="font-size:40px;text-align:'.$this->ubicacion.';color:';
        echo $this->colorFuente.';background-color:'.$this->colorFondo.'">';
        echo $this->titulo;
        echo '</div>';
  }
        }

$cabecera = new cabecera();
$cabecera->setCabecera("El blog del programador",'center','red','orange');
$cabecera->graficar();
  ?>
</body>
</html>