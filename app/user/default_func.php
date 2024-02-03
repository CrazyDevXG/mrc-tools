<?php
        require_once'../utility/user_class.php';

        $user = new Member_use;	
        $user->is_loggedin();

        $MyID = $_SESSION['MyID'];

        $getUser = $user->getMyUser($MyID);
        $fetcRow = $getUser->fetch(PDO::FETCH_ASSOC);


        

?>