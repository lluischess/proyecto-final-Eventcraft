<!-- Aqui creem la clase amb els atributs que guardarem del formulari -->
<?php 
 class ContanctForm
         {
            private $mensaje;
            private $nombre;
            private $mail;
            private $tema;
         
               
            public function __construct()
            {
               $this->mensaje=$mensaje;
               $this->nombre=$nombre;
               $this->mail=$mail;
               $this->tema=$tema;
            }
            // getters
            public function getmensaje()
            {
               return $this->mensaje;
            }
            public function getnombre()
            {
               return $this->nombre;
            }
            public function getmail()
            {
               return $this->mail;
            }
            public function gettema()
            {
               return $this->tema;
            }
            // setters
            public function  setmensaje($mensaje)
            {
               $this->mensaje = $mensaje;
            }
            public function  setnombre($nombre)
            {
               $this->nombre = $nombre;
            }
            public function  setmail($mail)
            {
               $this->mail = $mail;
            }
            public function  settema($tema)
            {
               $this->tema = $tema;
            }
      }

?>