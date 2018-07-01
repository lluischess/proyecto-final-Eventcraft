<?php 

$file = dirname(dirname((__FILE__)));
include_once($file.'/clases/Conexion.php');

class Evento
         {
            private $Nom_Evento;
            private $Aficion_Evento;
            private $Descripcion_Evento;
            private $Participantes_Evento;
            private $FechaInicio_Evento;
            private $FechaFin_Evento;
            private $Direccion_Evento;
            private $Ciudad_Evento;
            private $Provincia_Evento;

            // Objeto + atributos
            
            // array del objeto
            
             
            public function __construct()
            {
               
            }

            public function getlista_Eventos()
            {
               return $this->lista_Eventos;
            }
            // Getters
            public function getNom_Evento()
            {
               return $this->Nom_Evento;
            }
            public function getAficion_Evento()
            {
               return $this->Aficion_Evento;
            }
            public function getDescripcion_Evento()
            {
               return $this->Descripcion_Evento;
            }

             public function getParticipantes_Evento()
            {
               return $this->Participantes_Evento;
            }
            public function getFechaInicio_Evento()
            {
               return $this->FechaInicio_Evento;
            }
            public function getFechaFin_Evento()
            {
               return $this->FechaFin_Evento;
            }

              public function getDireccion_Evento()
            {
               return $this->Direccion_Evento;
            }
            public function getCiudad_Evento()
            {
               return $this->Ciudad_Evento;
            }
            public function getProvincia_Evento()
            {
               return $this->Provincia_Evento;
            }



            public function  setlista_Eventos($lista_Eventos)
            {
               $this->lista_Eventos = $lista_Eventos;
            }

            public function  setNom_Evento($Nom_Evento)
            {
               $this->Nom_Evento = $Nom_Evento;
            }
            public function  setAficion_Evento($Aficion_Evento)
            {
               $this->Aficion_Evento = $Aficion_Evento;
            }
            public function  setDescripcion_Evento($Descripcion_Evento)
            {
               $this->Descripcion_Evento = $Descripcion_Evento;
            }

            public function  setParticipantes_Evento($Participantes_Evento)
            {
               $this->Participantes_Evento = $Participantes_Evento;
            }
            public function  setFechaInicio_Evento($FechaInicio_Evento)
            {
               $this->FechaInicio_Evento = $FechaInicio_Evento;
            }
            public function  setFechaFin_Evento($FechaFin_Evento)
            {
               $this->FechaFin_Evento = $FechaFin_Evento;
            }

            public function  setDireccion_Evento($Direccion_Evento)
            {
               $this->Direccion_Evento = $Direccion_Evento;
            }
            public function  setCiudad_Evento($Ciudad_Evento)
            {
               $this->Ciudad_Evento = $Ciudad_Evento;
            }
            public function  setProvincia_Evento($Provincia_Evento)
            {
               $this->Provincia_Evento = $Provincia_Evento;
            }



            public function fill($post){
                 $Evento = new Evento();
             


               if (empty($post['Name_event'])){
                 $Name_event = "";
                 $this->setNom_Evento($Name_event);
               }else{
                    $Evento->Nom_Evento = $post['Name_event'];
                 $this->setNom_Evento($post['Name_event']);
              }
              if (empty($post['aficion'])){
                 $aficion = "";
                 $this->setAficion_Evento($aficion);
                 }
                 else{
                    $Evento->Aficion_Evento = $post['aficion'];
                    $this->setAficion_Evento($post['aficion']);
                 }
             if (empty($post['Desc_event'])){
                 $Desc_event = "";
                 $this->setDescripcion_Evento($Desc_event);
                 }
                 else{
                    $Evento->Descripcion_Evento = $post['Desc_event'];
                    $this->setDescripcion_Evento($post['Desc_event']);
                 }
             if (empty($post['Max_personas_event'])){
                 $Max_personas_event = "";
                 $this->setParticipantes_Evento($Max_personas_event);
                 }
                 else{
                    $Evento->Participantes_Evento = $post['Max_personas_event'];
                    $this->setParticipantes_Evento($post['Max_personas_event']);
                 }
             if (empty($post['fechainicio'])){
                 $fechainicio = "";
                 $this->setFechaInicio_Evento($fechainicio);
                 }
                 else{
                    $Evento->FechaInicio_Evento = $post['fechainicio'];
                    $this->setFechaInicio_Evento($post['fechainicio']);
                 }
             if (empty($post['fechafin'])){
                 $fechafin = "";
                 $this->setFechaFin_Evento($fechafin);
                 }
                 else{
                    $Evento->FechaFin_Evento = $post['fechafin'];
                    $this->setFechaFin_Evento($post['fechafin']);
                 }
             if (empty($post['Adresse'])){
                 $Adresse = "";
                 $this->setDireccion_Evento($Adresse);
                 }
                 else{
                    $Evento->Direccion_Evento = $post['Adresse'];
                    $this->setDireccion_Evento($post['Adresse']);
                 }
             if (empty($post['Citye'])){
                 $Citye = "";
                 $this->setCiudad_Evento($Citye);
                 }
                 else{
                    $Evento->Ciudad_Evento = $post['Citye'];
                    $this->setCiudad_Evento($post['Citye']);
                 }
             if (empty($post['Provinciae'])){
                 $Provinciae = "";
                 $this->setProvincia_Evento($Provinciae);
                 }
                 else{
                    $Evento->Provincia_Evento = $post['Provinciae'];
                    $this->setProvincia_Evento($post['Provinciae']);
                 }
               $lista_Eventos = array($Evento);
              //array_push($lista_Eventos);
                

               if (isset($post['Name_event'])) {
                    $db = new Conexion();
                    $nom = $this->getNom_Evento();
                    $aficion = $this->getAficion_Evento();
                    $descripcion = $this->getDescripcion_Evento();
                    $participantes = $this->getParticipantes_Evento();
                    $fechaini = $this->getFechaInicio_Evento();
                    $fechafin = $this->getFechaFin_Evento();
                    $direccion = $this->getDireccion_Evento();
                    $ciudad = $this->getCiudad_Evento();
                    $provincia = $this->getProvincia_Evento();



                    if (isset($post['accionCrear'])) {
                   
                        $sql = $db->query("INSERT INTO eventos (nom_event ,aficion,desc_event,max_personas,fec_ini,fec_fin,dire_event,ciudad,provincia) VALUES ('".$nom."','".$aficion."','".$descripcion."','".$participantes."','".$fechaini."','".$fechafin."','".$direccion."','".$ciudad."','".$provincia."');");

                       // $db->liberar($sql);
                        $db->close();
                    }
               }

       

            }
            public  function UpdateEvent($id){

                $db = new Conexion();
                $nom = $this->getNom_Evento();
                $aficion = $this->getAficion_Evento();
                $descripcion = $this->getDescripcion_Evento();
                $participantes = $this->getParticipantes_Evento();
                $fechaini = $this->getFechaInicio_Evento();
                $fechafin = $this->getFechaFin_Evento();
                $direccion = $this->getDireccion_Evento();
                $ciudad = $this->getCiudad_Evento();
                $provincia = $this->getProvincia_Evento();


                $sql = $db->query("UPDATE eventos SET nom_event = '$nom' , aficion ='$aficion' ,desc_event = '$descripcion', max_personas = '$participantes' , fec_ini = '$fechaini', fec_fin = '$fechafin', dire_event = '$direccion' , ciudad = '$ciudad', provincia ='$provincia' WHERE id = $id ;");

                if (!$sql) {
                    echo "Error no se pudo guardar el evento";
                }else{
                    echo "1";
                }
            }
            public function Selectfull(){
                $db = new Conexion();
                $sql = $db->query("SELECT * FROM eventos; ");
                if ($db->rows($sql) > 0) {
                    while ($t = $db->recorrer($sql)) {
                        $datos[] =  array(
                            'id' => $t['id'],
                            'nombre' =>$t['nom_event'],
                            'aficion' => $t['aficion'],
                            'descripcion' => $t['desc_event'],
                            'direccion' => $t['dire_event']
                        );
                    }
                    return $datos;
                }
            }
            public function Selectbyid($id){
                $db = new Conexion();
                $sql = $db->query("SELECT * FROM eventos  WHERE id = $id; ");
                if ($db->rows($sql) > 0) {
                    while ($t = $db->recorrer($sql)) {
                        $datos[] =  array(
                            'id' => $t['id'],
                            'nombre' =>$t['nom_event'],
                            'aficion' => $t['aficion'],
                            'descripcion' => $t['desc_event'],
                            'direccion' => $t['dire_event'],
                            'ciudad' => $t['ciudad'],
                            'provincia' => $t['provincia'],
                            'max' => $t['max_personas'],
                            'fecha_ini' => $t['fec_ini'],
                            'fec_fin' => $t['fec_fin']
                        );
                    }
                    return $datos;
                }
           

            }


            public function Selectbyusers($id){
                $db = new Conexion();
                $sql = $db->query("SELECT * FROM users  WHERE id_evento = $id; ");
                if ($db->rows($sql) > 0) {
                    while ($t = $db->recorrer($sql)) {
                        $datos[] =  array(
                            'id' => $t['id'],
                            'nombre' =>$t['nombre'],

                        );
                    }
                    return $datos;
                }
           

            }
            public  function deletebyid($id){
                $db = new Conexion();

                $sql = $db->query("DELETE FROM eventos WHERE id = $id ;");

                if (!$sql) {
                    echo "Error no se pudo borrar el evento";
                }else{

                    $sql = $db->query("DELETE FROM users WHERE id_evento = $id ;");

                    echo "1";
                }
            }

            public  function busqueda($dato,$tipo){
                $db = new Conexion();
                $filtro = $db->real_escape_string($dato);

                if ($tipo == 1) {

                     $sql = $db->query("SELECT * FROM eventos WHERE ciudad LIKE '%$filtro%' ; ");
                }else{

                     $sql = $db->query("SELECT * FROM eventos WHERE aficion LIKE '%$filtro%' ; ");

                }
                if ($db->rows($sql)> 0) {
                        echo "<h2 class='text-center'>Resultados encontrados: </h2>";
                        while ($total = $db->recorrer($sql)) {
                            echo "<li class='list-group-item'>
                                <a href='Detallesevento.php?id=".$total['id']."' class='list-group-item'>
                                <h2>".$total['nom_event']."</h2>
                                <dl class='dl-horizontal'>
                          
                              <dt>Afición:</dt>
                              <dd>".$total['aficion']."</dd>
                              <dt>Descripción</dt>
                              <dd>".$total['desc_event']."</dd>
                              <dt>Ubicación</dt>
                              <dd>".$total['dire_event']."</dd>
                            </dl>
                                </a>
                            </li>";
                        }
                    }else{
                        echo 'No se han encontrado resultados';
                    }



            }

            public  function ParticiparEvent($nom,$id){

                $db = new Conexion();
                $nombre = $db->real_escape_string($nom);
                $id = $db->real_escape_string($id);
                

                $sql1 = $db->query("SELECT * FROM users WHERE nombre = '".$nombre."'  AND id_evento = $id ; ");
                if ($db->rows($sql1) > 0) {
                    echo "2";
                }else{
                    $sql = $db->query("INSERT INTO users (nombre,id_evento) VALUES('".$nombre."','".$id."') ;");

                    if (!$sql) {
                        echo "Error no se pudo participar en el evento ";
                    }else{
                        echo "1";
                    }
                }
            }

            public  function UserEvent($nom,$id){

                $db = new Conexion();
                $nombre = $db->real_escape_string($nom);

                $sql1 = $db->query("SELECT * FROM users WHERE nombre = '".$nombre."' AND id_evento = $id ; ");
                if ($db->rows($sql1) > 0) {
                    return 1;
                }else{
                    return 2;
                }
            }
      }




 ?>