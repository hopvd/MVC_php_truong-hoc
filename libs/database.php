<?php
    $conn = null;

    // connect database
    function db_connect()
    {
        global $conn;
        if (!$conn) {
            $conn = mysqli_connect('localhost', 'mysql', '', 'quan_li_truong_hop')
            or die("Khong the ket noi database");
        }
    }

    // disconnect
    function db_close()
    {
        global $conn;
        if ($conn){
            mysqli_close($conn);
        }
    }

    // lay du lieu
    function db_get_list($sql)
    {
        global $conn;
        db_connect();
        $data = array();
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

    function db_get_row($sql)
    {
        db_connect();
        global $conn;
        $result = mysqli_query($conn, $sql);
//        $row = array();
//        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
//        }
        return $row;
    }

    function db_execute($sql)
    {
        db_connect();
        global $conn;
        $result = mysqli_query($conn, $sql);

        return $result;
    }

//    print_r(db_get_list("select * from infor_hoc_sinh;"));


