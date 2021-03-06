<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_main extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->output->set_header(CHARSET_ISO_8859_1);
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        $this->load->helper('cookie');
        if (! isset($_COOKIE[__getCookieName()])) {
            header("Location: ".RUTA_KOPLAN, true, 301);
            //redirect(RUTA_VEHIKMANT, 'location');
        }
    }
    
    public function index()
    {
        $data['nombre_completo'] = _getSesion("nombre_abvr");
        if(_getSesion("usuario") == null && _getSesion("password") == null) {
            header("Location: ".RUTA_KOPLAN, true, 301);
        }
        $this->load->view('v_main', $data);
    }
}

