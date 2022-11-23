<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_persona extends CI_Controller {



	function __construct()
    {
        parent ::__construct();
		$this->load->model('Mdl_persona');
    }   	
	

	public function index()
	{	
		$this->load->view('View_crear_persona');

	}
	
	public function guardarPersona()
	{
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');
		$ci=$this->input->post('vci');
		$fechanacimiento=$this->input->post('vfechanacimiento');
        $direccion=$this->input->post('vdireccion');
        $genero=$this->input->post('vgenero');
        $lugarnacimiento=$this->input->post('vlugarnacimiento');
        $departamento=$this->input->post('vdepartamento');
        $ciudad=$this->input->post('vciudad');
        $numcelular=$this->input->post('vnumcelular');
        $telfijo=$this->input->post('vtelfijo');
        $email =$this->input->post('vemail');

		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;
		$parametros['cci']=$ci;
		$parametros['cfechanacimiento']=$fechanacimiento;
		$parametros['cdireccion']=$direccion;
		$parametros['cgenero']=$genero;
		$parametros['clugarnacimiento']=$lugarnacimiento;
		$parametros['cdepartamento']=$departamento;
		$parametros['cciudad']=$ciudad;
		$parametros['cnumcelular']=$numcelular;
		$parametros['ctelfijo']=$telfijo;
		$parametros['cemail']=$email;		


		$this->Mdl_persona->insertar_persona($parametros);
	}
	public function modificar()
	{
		$id=$this->input->post('vid');
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');

		$parametros['cid']=$id;	
		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;	


		$this->Mdl_bienvenida->modificar_persona($parametros);
	}





	public function eliminar()
	{

		$id=$this->input->post('vid');
		$this->Mdl_bienvenida->eliminar_persona($id);
	}

	public function obtener_todas_las_personas()
	{
		echo json_encode($this->Mdl_bienvenida->obtener_persona_all());		
	}

	public function obtener_todas_las_personas_by()
	{
		$nombre=$this->input->post('vnombre');
		$apellidop=$this->input->post('vapellidop');
		$apellidom=$this->input->post('vapellidom');
	
		$parametros['cnombre']=$nombre;
		$parametros['capellidop']=$apellidop;
		$parametros['capellidom']=$apellidom;

		$this -> Mdl_bienvenida -> obtener_persona_by($parametros);
		echo json_encode($this->Mdl_bienvenida->obtener_persona_by($parametros));		
	}
}
