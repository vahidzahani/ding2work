<?php
#vahid.zahani@gmail.com - admin.projfa.ir
date_default_timezone_set('asia/tehran');

/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('sqlite.db');
    }
}
$db = new MyDB();

    if (isset($_REQUEST['save'])) {
        $_time=time();
        $_txt=$_REQUEST['save'];
        $q="INSERT INTO tbl_work (time_start,tozihat) VALUES ($_time,'$_txt')";
        $result = $db->query($q);
        echo($db->lastInsertRowID());
    }
    if (isset($_REQUEST['update'])) {
        $_time=time();
        $id=$_REQUEST['update'];
        $q="UPDATE tbl_work set time_end=$_time where id=".$id;
        $result = $db->query($q);
        //var_dump($result);
    }    
?>