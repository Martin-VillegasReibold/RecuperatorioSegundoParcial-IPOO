
<?php
/*
 
De los planes se almacena un código, canales, importe y si incluye MG de datos o no. Por defecto se asume que el plan incluye 50 MG. 
*/
class Plan {
    
    //ATRIBUTOS
    private $codigo;
    private $coleccionCanales;
    private $importe;
    private $incluyeMG;

 //CONSTRUCTOR
    public function __construct($codigo, $coleccionCanales, $importe){
    
       $this->codigo = $codigo;
       $this->coleccionCanales = $coleccionCanales;
       $this->importe = $importe;
       $this->incluyeMG = 0;
  

    }

        public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
         $this->codigo= $codigo;
    }


       public function getColeccionCanales(){
        return $this->coleccionCanales;
    }

    public function setColeccionCanales($coleccionCanales){
         $this->coleccionCanales= $coleccionCanales;
    }


      public function getImporte(){
        return $this->importe;
    }

    public function setImporte($importe){
         $this->importe= $importe;
    }


      public function getIncluyeMG(){
        return $this->incluyeMG;
    }

    public function setIncluyeMG($incluyeMG){
         $this->incluyeMG= $incluyeMG;
    }
 private function retornarCadenaDesdeColeccion($coleccion){
        $cadena = "\n Cant Equipos: ". count($coleccion)."\n";
        foreach ($coleccion as $unElementoCol) {
            $cadena = $cadena . " " . $unElementoCol . "\n";
        }
        return $cadena;
    }
public function __toString(){
        //string $cadena
        $cadena = "Codigo: ".$this->getCodigo()."\n";
        $cadena = $cadena. "Canales: ".$this->retornarCadenaDesdeColeccion($this->getColCanales())."\n";
        $cadena = $cadena. "Importe: ".$this->getImporte()."\n";
        $cadena = $cadena. "Incluye MG: ".$this->getIncluyeMG()."\n";
 
        return $cadena;
         }
     }