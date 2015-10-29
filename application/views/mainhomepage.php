
<!DOCTYPE>
<html>
    
    <body>
   <?php $this->load->view('includes/staff_navbar2'); ?>

        
        <?php
        
        $location = $this->Staff_model->get_location_by_username($this->session->userdata('username'));
        if($location === 'UK')
        {
        
         $this->load->view('ukviewworkorder'); 
        }
        else 
        {
            $this->load->view('viewworkorder'); 
        }
    ?>
             
            
 
<?php $this->load->view('includes/footer'); ?>
</body>
</html>