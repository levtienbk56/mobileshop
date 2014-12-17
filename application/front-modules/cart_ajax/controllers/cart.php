<?php

class cart extends CI_Controller {

    function add_cart_item() {
        if ($this->product_model->validate_add_cart_item() == TRUE) {
            // Check if user has javascript enabled
            if ($this->input->post('ajax') != '1') {
                // you can comment the next line, because we are no longer redirecting.
                // redirect('cart'); // If javascript is not enabled, reload the page with new data
            } else {
                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
            }
        }
    }
    
    
    function show_cart(){
        $this->load->view('cart/view-cart');
    }
    
    function update_cart(){
        $this->product_model->validate_update_cart();
    } 

}
