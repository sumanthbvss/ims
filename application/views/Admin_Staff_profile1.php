<?php
//new project
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 //$CI =& get_instance();
//$this->load->model('Staff_model');
//$row = $this->db->get_where('staff', array('staffid' => $id))->row();
////$row = $this->Staff_model->get_by_id($id); 
//   if ($row->num_rows>=1 ) {
//       $row->staffid=$id;
//       $row->firstname='firstname';
//       $row->lastname='lastsssname';
//       $row->email='email';
//       $row->mobileno='mobileno';
//       $row->role='admin';
//   }
//$row=$this->db->select('max(staffid) as maxid')
//              ->get('staff')
//              ->result_array();
//$max=$row->maxid;
//$max=$max+1;
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMS</title>
        <meta name="description" content="EKG data management in the cloud">
        <meta name="author" content="Team Cirrus">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le styles -->
        <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
        <link href="<?php echo base_url('css/ico/favicon.ico'); ?>" rel="shortcut icon">
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script>
        <div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="<?php echo site_url()?>" name="top">ADD Staff</a>
            
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </div>
    <!--/.navbar-inner -->
</div>
    </head>


<body>
<form id="tab" action="<?php echo site_url('Staffmem/AddStaff') ?>" method="POST">
                <!--<input type="text" name="id" value=" " />-->
            &nbsp;&nbsp;&nbsp;<label>StaffId</label>
             &nbsp;&nbsp;&nbsp;<input type="text" name ="id" value=""><br>
                <label>First Name</label>
                <input type="text" name ="firstname" value="" ><br>
                <label>Last Name</label>
                <input type="text" name ="lastname" value="" ><br>
                <label>Email</label>
                <input type="text" name ="email" value="" ><br>
                <label>MobileNo</label>
                <input type="text" name ="mobileno" value="" ><br>
                <!-- Select Role -->
                <div>
                    <label>Role</label>
                    <div>
                        <select id="role" name="role">
                            <option text ="admin" Value="admin">admin</option>
                            <option text="staff" value="staff">staff</option>

                        </select>
                    </div>
                </div>
              <!-- added by team -->  
                <div>
                    <label>Location</label>
                    <div>
                        <select id="location" name="location">
                            <option text ="US" Value="US">US</option>
                            <option text="UK" value="UK">UK</option>

                        </select>
                    </div>
                </div>
               <!-- added by team -->
                <br>
                <br>
                
                                 

                <div>
                    <button type ="submit" style="background-color: red"> ADD</button>
 
                </div>

                
            </form>
</body>
</html>
        
