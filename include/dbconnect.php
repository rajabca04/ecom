<?php 
    $connect = mysqli_connect('localhost','root','','ecom');

    function count_data($query){
        global $connect;

        $q = mysqli_query($connect,$query);
        $count = mysqli_num_rows($q);

        return $count; 

    }


?>
