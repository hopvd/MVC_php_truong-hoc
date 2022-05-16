<?php
require_once $dir."/Model/StudentModel.php";
$dir_root = $dir;

class StudentController {

    protected $studentModel;
    protected $dir;

    public function __construct() {
        $this->studentModel = new StudentModel();
        $this->dir = $dir_root;
    }

    public function listStudent() {
        if($_POST) {
            $request = $_POST;
            if(empty($request['name'])) {
                echo 'Tên ko đc để trống';
                die;
            }
            if(empty($request['birthday'])) {
                echo 'Ngày sinh ko đc để trống';
                die;
            }
            if(empty($request['gender'])) {
                echo 'Giới tinh ko đc để trống';
                die;
            }
            if(empty($request['phone'])) {
                echo 'Số điện thoại ko đc để trống';
                die;
            }
            if(empty($request['address'])) {
                echo 'Địa chỉ ko đc để trống';
                die;
            }
            $dataInsert = [
                'name' => $request['name'],
                'birthday' => $request['birthday'],
                'gender' => $request['gender'],
                'phone' => $request['phone'],
                'address' => $request['address']
            ];
//            $update = $this->studentModel->update($id, $dataUpdate);
            $add = $this->studentModel->add($dataInsert);
        }
         global $dir_root;
         $list = $this->studentModel->getList();
         require_once $dir_root."/View/admin/student/list.php";
    }

    public function listStudentView() {
        global $dir_root;
        $list = $this->studentModel->getList();
        require_once $dir_root."/View/admin/student/table.php";
    }

    public function addStudent() {
        if($_POST) {
            $request = $_POST;
            if(empty($request['name'])) {
                echo 'Tên ko đc để trống';
                die;
            }
            if(empty($request['birthday'])) {
                echo 'Ngày sinh ko đc để trống';
                die;
            }
            if(empty($request['gender'])) {
                echo 'Giới tinh ko đc để trống';
                die;
            }
            if(empty($request['phone'])) {
                echo 'Số điện thoại ko đc để trống';
                die;
            }
            if(empty($request['address'])) {
                echo 'Địa chỉ ko đc để trống';
                die;
            }
            $dataInsert = [
                'name' => $request['name'],
                'birthday' => $request['birthday'],
                'gender' => $request['gender'],
                'phone' => $request['phone'],
                'address' => $request['address']
            ];
            $add = $this->studentModel->add($dataInsert);
        }
        global $dir_root;
        require_once $dir_root."/View/admin/student/add.php";
    }

    public function addStudentAjax() {
        $data = $_POST;
        $add = $this->studentModel->add($data);

        $result = [];
        if(!empty($add)) {
            $result['status'] = true;
        } else {
            $result['status'] = false;
        }
        die(json_encode($result));
    }

    public function getDetailStudent() {
        $id = $_GET["id"] ? $_GET["id"] : $_POST["id"];
        if(!$id) {
            echo 'Vui long chon record de update'; die;
        }
        $student = $this->studentModel->get_row($id);

        $result = [];
        if(!empty($student)) {
            $result = [
                'status' => true,
                'data' => $student
            ];
        } else {
            $result = [
                'status' => false,
                'data' => []
            ];
        }
        die(json_encode($result));
    }

    public function updateStudent() {
        $id = $_GET["id"];
        if(!$id) {
            echo 'Vui long chon record de update'; die;
        }
        if($_POST) {
            $request = $_POST;
            if(empty($request['name'])) {
                echo 'Tên ko đc để trống';
                die;
            }
            if(empty($request['birthday'])) {
                echo 'Ngày sinh ko đc để trống';
                die;
            }
            if(empty($request['gender'])) {
                echo 'Giới tinh ko đc để trống';
                die;
            }
            if(empty($request['phone'])) {
                echo 'Số điện thoại ko đc để trống';
                die;
            }
            if(empty($request['address'])) {
                echo 'Địa chỉ ko đc để trống';
                die;
            }
            $dataUpdate = [
                'name' => $request['name'],
                'birthday' => $request['birthday'],
                'gender' => $request['gender'],
                'phone' => $request['phone'],
                'address' => $request['address']
            ];
            $update = $this->studentModel->update($id, $dataUpdate);
        }

        global $dir_root;
        $student = $this->studentModel->get_row($id);
        require_once $dir_root."/View/admin/student/edit.php";
    }

    public function edit() {
        $dataUpdate = $_POST;
        $update = $this->studentModel->update($dataUpdate["id"], $dataUpdate);
    }

    public function deleteStudentAjax() {
        $name = $_POST["name_del"];
        $delete = $this->studentModel->delete($name);
    }
}