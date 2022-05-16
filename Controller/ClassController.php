<?php
require_once $dir."/Model/ClassModel.php";
require_once $dir."/Model/StudentModel.php";

$dir_root = $dir;

class ClassController {
    protected $classModel;
    protected $studentModel;
    protected $dir;

    public function __construct() {
        $this->classModel = new ClassModel();
        $this->studentModel = new StudentModel();
        $this->dir = $dir_root;
    }

    public function listClass() {
        global $dir_root;
        require_once $dir_root."/View/admin/class/listClass.php";
    }

    public function listClassView() {
        global $dir_root;
        $list = $this->classModel->getList();
        require_once $dir_root."/View/admin/class/tableClass.php";
    }

    public function getDetailClass() {
        $id = $_POST['id'];
        if (!$id) {
            echo 'Vui long chon record de update'; die;
        }
        $class = $this->classModel->get_row($id);

        $result = [];
        if(!empty($class)) {
            $result = [
                'status' => true,
                'data' => $class
            ];
        } else {
            $result = [
                'status' => false,
                'data' => []
            ];
        }
        die(json_encode($result));

    }

    public function addClass() {
        if($_POST) {
            $request = $_POST;
            if(empty($request['name'])) {
                echo 'Tên lop ko đc để trống';
                die;
            }
            if(empty($request['total_student'])) {
                echo 'So hoc sinh ko đc để trống';
                die;
            }

            $dataInsert = [
                'name' => $request['name'],
                'total_student' => $request['total_student']
            ];
            $add = $this->classModel->add($dataInsert);
        }
        global $dir_root;

        require_once $dir_root."/View/admin/class/add.php";
    }

    public function addClassAjax() {
        $data = $_POST;
        $add = $this->classModel->add($data);
        if(!empty($add)) {
            $status = true;
        } else {
            $status = false;
        }
        die(json_encode($status));
    }

    public function updateClass() {
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
            if(empty($request['total_student'])) {
                echo 'số học sinh ko đc để trống';
                die;
            }

            $dataUpdate = [
                'name' => $request['name'],
                'total_student' => $request['total_student']
            ];
            $update = $this->classModel->update($id, $dataUpdate);
        }

        global $dir_root;
        $class = $this->classModel->get_row($id);
        require_once $dir_root."/View/admin/class/edit.php";
    }

    public function listStudent() {
        $classId = $_GET["id"];
        $listStudentInClass = $this->classModel->getListStudent($classId);
        $listStudentAll = $this->studentModel->getList();
        if($_POST) {
            $request = $_POST;
            if(empty($request['id'])) {
                echo 'Vui long chon id hoc sinh';
                die;
            }

            $studentId = $request['id'];

            $add = $this->classModel->addStudentInClass($classId, $studentId);
        }

        global $dir_root;
        require_once $dir_root."/View/admin/class/listStudent.php";
    }

    public function editClass()
    {
        $dataUpdate = $_POST;
        $update = $this->classModel->update($dataUpdate["id"], $dataUpdate);
    }

    public function deleteClass()
    {
        $name = $_POST["name_class_delete"];
//        var_dump($name); die;
        $delete = $this->classModel->deleteClass($name);
    }

}