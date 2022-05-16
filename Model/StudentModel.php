<?php
require_once $dir."/libs/database.php";

class StudentModel {

    public function getList() {
        $data = db_get_list("select * from infor_hoc_sinh;");
        return $data;
    }

    public function add($data = array()) {
        $sql = 'INSERT INTO `quan_li_truong_hop`.`infor_hoc_sinh` (`ho_ten`, `ngay_sinh`, `gioi_tinh`, `sdt`, `dia_chi`)
                    VALUES ('.'"'. $data['name'] .'","'. $data['birthday'] .'","'. $data['gender'] .'","'. $data['phone'] .'","'. $data['address'] .'");';
        $add = db_execute($sql);
        return $add;
    }

    public function update($id, $dataUpdate = array()) {
        $sql = "UPDATE `infor_hoc_sinh` 
                SET `ho_ten` ='" . $dataUpdate['name'] . "', `ngay_sinh` = '" . $dataUpdate['birthday'] ."', `gioi_tinh` = '" . $dataUpdate['gender'] . "', 
                    `sdt` = '" . $dataUpdate['phone'] . "', `dia_chi` = '" . $dataUpdate['address'] . "' WHERE (`id` = ". $id .")";
        $update = db_execute($sql);
        return $update;
    }

    public function get_row($id) {
        $student = array();
        $student = db_get_row("select * from infor_hoc_sinh where id = $id");
        return $student;
    }

    public function delete($name) {
        $sql = "DELETE FROM `infor_hoc_sinh` WHERE (`ho_ten` = '". $name ."');";
        $delete = db_execute($sql);
        return $delete;
    }
}