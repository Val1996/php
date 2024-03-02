
<?php

//Clase Partida
class Partida {
    private int $Dia;
    private enEtapa $Etapa;
    private array $Carta; //Atributo extra para almacenar varias cartas en la partida (array) 

    //Constructor del array para su uso en los métodos. 
    public function __construct(Carta $carta){
        $this -> Carta = $carta;
    }

    //Getter y setter para acceder y modificar el día y la etapa.
    public function getDia(){
        return $this -> Dia;
    }
    public function getEtapa(){
        return $this -> Etapa;
    }
    public function setDia($dia){
        $this -> Dia=$dia;
    }
    public function setEtapa($etapa){
        $this -> Etapa=$etapa;
    }
    
    //Métodos de tipo void.
    public function ArmarCartel(): void{} 

    public function Comprar(): void{}

    public function Jugar(): void{}

    //Métodos que nos permiten acceder al valor de $Carta.
    public function VerCartas(){
        return $this -> Carta;
    }
    public function VerCartasRival(){
        return $this -> Carta;
    }
    public function VerCartasTienda(){
        return $this -> Carta;
    }

}  

//Clase abstracta Jugador, que hereda de Partida.
abstract class Jugador extends Partida{
    //He omitido el método Jugar ya que lo hereda directamente de partida, y no podía ser abstracto ya que ya estaba como concreto en Partida.
    //En su lugar he añadido el método abstracto abandonar.
    public abstract function abandonar();
}
/*ENUMS:
Los enum estan adaptados a versiones posteriores de PHP 8.1.
En el diagrama aparece el simbolo "-" justo al lado de los atributos de los enum, pero las enumeraciones en PHP 8.1 deben ser publicas, por lo que no le vi sentido ponerlas privadas.
Los enum no pueden heredar, por lo que son valores fijos que se podrán utilizar desde otras clases sin problema.*/
 Enum enEtapa: int {
    case Compra = 0;
    case Armado = 1;
    case Resultado = 2;
    case Fin = 3;
   
 }

Enum enTipoCarta: int {
    case Borde = 0;
    case Color = 1;
    case Efecto = 2;
    case Mensaje = 3;
    case Marco = 4;

}

//Clase Cartel, hereda de Carta.
class Cartel extends Carta{
    private Carta $Borde;
    private Carta $Color;
    private Carta $Efecto;
    private Carta $Mensaje;

    //He añadido el constructor por si en un futuro se requiera iniciar alguna propiedad o realizar cualquier configuración.
    public function __construct(){}

    //Getters y Setters para acceder a los atributos privados. 
    public function getBorde(){
        return $this -> Borde;
    }
    public function getColor(){
        return $this -> Color;
    }
    public function getEfecto(){
        return $this -> Efecto;
    }
    public function getMensaje(){
        return $this -> Mensaje;
    }
    public function setBorde($borde){
        $this -> Borde=$borde;
    }
    public function setColor($color){
        $this -> Color = $color;
    }
    public function setEfecto($efecto){
        $this -> Efecto = $efecto;
    }
    public function setMensaje($mensaje){
        $this -> Mensaje =$mensaje;
    }
    public function ObtenerPuntos(): int{}

}
//Clase Carta.
class Carta {
    private string $Tipo;
    private int $Puntos;
    
    //He añadido el constructor por si en un futuro se requiera iniciar alguna propiedad o realizar cualquier configuración.
    public function __construct(){}

    //Métodos para acceder a los atributos privados.
    public function getTipo() {
        return $this -> Tipo;
    }
    public function getPuntos(){
        return $this -> Puntos;
    }
    public function setTipo($tipo){
        $this -> Tipo = $tipo;
    }
    public function setPuntos($puntos){
        $this -> Puntos = $puntos;
    }
    
}
?>
