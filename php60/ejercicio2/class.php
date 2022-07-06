<html>
<head>
<title>PHP Class</title>
</head>
<body>
<?php
class Menu{
private $enlaces = array();
private $titulos = array();

public function setOpcion($en, $tit){
    $this->enlaces[] = $en;
    $this->titulos[] = $tit;
}

    public function mostrarVertical(){
        for($i=0; $i<count($this->enlaces); $i++){
            echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a><br>';
            echo "-";
        }
    } 

    public function mostrarHorizontal(){
        for($i=0; $i<count($this->enlaces); $i++){
            echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
            echo "-";
        }
    }    
}

$menu = new Menu();
$menu->setOpcion('http://www.google.es', 'Google');
$menu->setOpcion('http://www.yahoo.es', 'Yahoo');
$menu->setOpcion('http://www.msn.es', 'MSN');
$menu->mostrarHorizontal();
  ?>
</body>
</html>