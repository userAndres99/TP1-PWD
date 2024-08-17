<?php

class Datos {

    public function mostrarDatos($array){

        $mensaje = "Hola, yo soy " . 
        $array['nombre'] .
         " " . $array['apellido'] . 
         ", tengo " . $array['edad'] . 
         " años y vivo en " . 
         $array['direccion'] . ".";

        return $mensaje;
    }
}

?>