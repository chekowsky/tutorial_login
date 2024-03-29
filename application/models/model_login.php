<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class model_login extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    //FUNCION PARA VALIDAR EL LOGIN
    public function LoginBD($username, $password)
    {
        $this->db->where('EMAIL', $username);
        $this->db->where('PASSWORD', $password);
        $this->db->where('ESTATUS', 1);
        return $this->db->get('usuarios')->row();
    }
    //FUNCION QUE CARGA EL CATALOGO DEL MENU
    public function PermisosMenu($Id)
    {
        $data['Permisos'] = array();
        $this->db->select('m.ID as ID, m.DESCRIPCION as DESCRIPCION,m.IMAGEN as IMAGEN,m.URL as URL,p.ESTATUS as ESTATUS');
        $this->db->from('menu_sistema as m');
        $this->db->join('permisosmenu as p', 'm.ID=p.ID_MENU');
        $this->db->where('p.ID_USUARIO', $Id);
        $this->db->where('p.ESTATUS', 0);
        $this->db->order_by("m.ORDENAMIENTO", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data['Permisos'] = $query->result_array();
        }
        $query->free_result();
        //return the array to the controller
        return $data;
    }
}
