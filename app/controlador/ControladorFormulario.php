<?php
class ControladorFormulario{
    private $datos;

    public function __construct($datos){
        $this->datos = $datos;
    }

    public function validar(){
        foreach($this->datos as $clave => $valor){
            if($clave == 'correo' && !$this->validarCorreo($valor)){
                $this->datos[$clave] = "El correo no es válido";
            }elseif (empty($valor)){
                $this->datos[$clave] = "El campo $clave no puede estar vacío";
            }
        }
        return $this->datos;
    }

    public function validarCorreo($correo){
        $correo = strtolower($correo);
        if(preg_match('/^[a-z0-9]+@[a-z0-9]+\.[a-z]{2,4}$/', $correo)){
            echo "<h1>Todo correcto</h1>";
        } else {
            return false;
        }
    }

    public function validarDatos(){
        if($_POST['nombre'] == $_POST['contrasenia']){
            //hay que hacer un hash de la contarseña y tenemos que ver si la contarseña y usuario es el mismo.
            //La cuenta de la base de datos de cineV2 las contraseñas son admin y serafina.
            // $_POST['contrasenia'] = $contrasenia;
            // password_hash($contrasenia);
        }
    }

    
}