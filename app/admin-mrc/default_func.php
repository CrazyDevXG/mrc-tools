<?php
        require_once'../utility/admin_class.php';

        $admin = new Admin_use;	
        $admin->is_loggedin();

        $MyAdmin = $_SESSION['AdminID'];

        $getAdmin = $admin->getMyAdmin($MyAdmin);
        $fetcRow = $getAdmin->fetch(PDO::FETCH_ASSOC);


        

?>