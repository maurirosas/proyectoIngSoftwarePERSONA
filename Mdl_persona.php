<?php

class Mdl_persona extends CI_MODEL
{
    function __construct()
    {
        parent ::__construct();
    }    

    function insertar_persona($parametros)
    {
        $now = date("Y-m-d H:i:s"); 
        $campos= array(
            'nombre'=> $parametros['cnombre'],
            'apellidop'=> $parametros['capellidop'],
            'apellidom'=> $parametros['capellidom'],
            'fecha_nac'=> $parametros['cfechanacimiento'],
            'direccion'=> $parametros['capellidop'],
            'carnet'=> $parametros['capellidom'],
            'genero'=> $parametros['cnombre'],
            'lugar_nac'=> $parametros['capellidop'],
            'departamento'=> $parametros['capellidom'],
            'ciudad'=> $parametros['cnombre'],
            'celular'=> $parametros['capellidop'],
            'telefono_fijo'=> $parametros['capellidom'],
            'email'=> $parametros['cnombre'],
            #'id_usuario'=> $parametros['capellidop']
            #'id_usuario_reg'=> $parametros['capellidom'],
            'fecha_reg'=> $now
            #'borrado'=> $parametros['capellidop'],
        );
        echo $parametros['cnombre'];
        $this->db->insert('p_persona',$campos);     
    }

    function modificar_persona($parametros)
    {
        $id =$parametros['cid'];
        $campos= array(
            'nombres'=> $parametros['cnombre'],
            'apellidop'=> $parametros['capellidop'],
            'apellidom'=> $parametros['capellidom']
        );
        
        $this->db->where('id', $id);
        $this->db->update('persona', $campos);

    }


    function obtener_persona_all()
    {
        $consulta="Select * from persona;";
        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }

    function obtener_persona_by($parametros)
    {
                            
        if($parametros['cnombre']==''){
            if($parametros['capellidop']==''){
                $consulta="Select * from persona where apellidom like '%" .$parametros['capellidom']. "%';";
            }else{
                $consulta="Select * from persona where apellidop like '%" .$parametros['capellidop']. "%';";
            }    
        }else{
            $consulta="Select * from persona where nombres like '%" .$parametros['cnombre']. "%';";
        }
        
        if($parametros['cnombre']==''){
            $consulta="Select * from persona where apellidop like '%" .$parametros['capellidop']. "%' AND apellidom like '%" .$parametros['capellidom']. "%';";
            
        }else{
            if($parametros['capellidop']==''){
                $consulta="Select * from persona where nombres like '%" .$parametros['cnombre']. "%' AND apellidom like '%" .$parametros['capellidom']. "%';";
            }else{
                $consulta="Select * from persona where nombres like '%" .$parametros['cnombre']. "%' AND apellidop like '%" .$parametros['capellidop']. "%';";
            }
        }
        
        
        $consulta="Select * from persona where nombres like '%" .$parametros['cnombre']. "%' AND apellidom like '%" .$parametros['capellidom']. "%' AND apellidop like '%" .$parametros['capellidop']. "%';";

        $resultado= $this->db->query($consulta);
        return $resultado->result_array();
    }


    function eliminar_persona($id)
    {
        
        $consulta="Delete from persona where id= '".$id."';" ;
        $this->db->query($consulta);
        
    }



}
