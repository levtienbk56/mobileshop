<?php

class Pages extends CI_Controller {

    function index() {
        
    }

    function mailbox() {
        $data['title'] = "Mail Box";
        $data['data'] = "Dữ liệu quản trị";
        $data['template'] = "mailbox";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function widgets() {
        $data['title'] = "Widgets";
        $data['data'] = "";
        $data['template'] = "widgets";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    // <editor-fold defaultstate="collapsed" desc="Form">
    function form_general() {
        $data['title'] = "general form";
        $data['data'] = "";
        $data['template'] = "forms/general";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function form_advanced() {
        $data['title'] = "advanced form";
        $data['data'] = "";
        $data['template'] = "forms/advanced";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function form_editors() {
        $data['title'] = "editor form";
        $data['data'] = "";
        $data['template'] = "forms/editors";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

// </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="tables">
    function tables_simple() {
        $data['title'] = "simple table";
        $data['data'] = "";
        $data['template'] = "tables/simple";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function tables_data() {
        $data['title'] = "data table";
        $data['data'] = "";
        $data['template'] = "tables/data";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

// </editor-fold>

    // <editor-fold defaultstate="collapsed" desc="Examples">
    function examples_login() {
        $data['title'] = "examples_login";
        $data['data'] = "";
        $data['template'] = "examples/login";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout3_admin", $data);
        }
    }

    function examples_register() {
                $data['title'] = "examples_login";
        $data['data'] = "";
        $data['template'] = "examples/login";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout3_admin", $data);
        }
    }

    function examples_lockscreen() {
            $this->load->view("examples/lockscreen");        
//        $data['title'] = "examples_lockscreen";
//        $data['data'] = "";
//        $data['template'] = "examples/lockscreen";
//        if (!$this->session->userdata('validated')) {
//            redirect('admin/index.php/login');
//        } else {
//            $this->load->view("layout3_admin", $data);
//        }
    }

    function examples_404() {
        $data['title'] = "examples_lockscreen";
        $data['data'] = "";
        $data['template'] = "examples/lockscreen";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

// </editor-fold>
    // <editor-fold defaultstate="collapsed" desc="UI">
    function UI_general() {
        $data['title'] = "UI general";
        $data['data'] = "";
        $data['template'] = "UI/general";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function UI_icons() {
        $data['title'] = "UI icons";
        $data['data'] = "";
        $data['template'] = "UI/icons";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function UI_buttons() {
        $data['title'] = "UI buttons";
        $data['data'] = "";
        $data['template'] = "UI/buttons";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function UI_sliders() {
        $data['title'] = "UI sliders";
        $data['data'] = "";
        $data['template'] = "UI/sliders";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

    function UI_timeline() {
        $data['title'] = "UI timeline";
        $data['data'] = "";
        $data['template'] = "UI/timeline";
        if (!$this->session->userdata('validated')) {
            redirect('admin/index.php/login');
        } else {
            $this->load->view("layout2_admin", $data);
        }
    }

// </editor-fold>
}
