<?php
    $con;

    function connectdb() {
        $GLOBALS['con'] = mysqli_connect("localhost","root","","db_item_semeru");
    }

    function listItem() {
        $result = mysqli_query($GLOBALS['con'],"SELECT * FROM item_list");
    }
    connectdb()
?>