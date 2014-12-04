<?php

class Tramites_m extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	function traerEstatusTramites(){
		$result=$this->db->query('select count(*) as total,a.id_cat_estatus as estatus,b.descripcion as nombre
				from tramite_servicio  a, cat_estatus b
				where a.id_cat_estatus=b.id_cat_estatus and a.id_cat_estatus in(1,2,3,4,5,10,12,14,16) 
				group by a.id_cat_estatus,b.descripcion');
		if ( $result->num_rows() > 0 ){
			$m=1;	
			foreach ( $result->result() as $row ){
				    $datos['estatus'][$m]['estatus']= $row->nombre;	
					$datos['estatus'][$m]['total']= $row->total;	
					$datos['estatus'][$m]['id']= $row->estatus;	
					$m++;
			}
		}
		
		$query= "select count(*) as todos from tramite_servicio where id_cat_estatus in(1,2,3,4,5,10,12,16)";	
		
		$this->db->trans_start();	
		$result=$this->db->query($query);
			if ( $result->num_rows() > 0 ){
				foreach ( $result->result() as $row ){
					$datos['todos']=$row->todos;	
				}
			}	
		
		return $datos;
	}
	
}?>