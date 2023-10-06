<?php
require_once APP_ROOT.'/app/services/PatientService.php';
class HomeController{
    public function index(){
        // Goi du lieu tu PatientService 
        $patientService=new PatientService();
        $patients = $patientService-> getAllPatients();
        // Render du lieu ra homepage
        include APP_ROOT.'/app/views/home/index.php';
    }
    public function add()
    {
        include APP_ROOT . '/app/views/patient/add.php';
    }
    public function edit()
    {
        $id = $_GET['id'];
        $patientService=new PatientService();
        $patients = $patientService-> getAllPatients();
        include APP_ROOT . '/app/views/patient/edit.php';

    }

    public function update()
    {
        if (isset($_POST['id'])&& isset($_POST['tenBenhNhan']) && isset($_POST['ngayKham']) && isset($_POST['trieuChung'])&& isset($_POST['idBacSi'])) {
            $id = $_POST['id'];
            $tenBenhNhan = $_POST['tenBenhNhan'];
            $ngayKham = $_POST['ngayKham'];
            $trieuChung = $_POST['trieuChung'];
            $idBacSi = $_POST['idBacSi'];
            $patientService=new PatientService();
            $patients = $patientService-> getAllPatients();
            echo "Sua thanh cong";
        }
        else {
            echo "thieu du lieu";
        }
    }

    public function delete()
    {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $patientService=new PatientService();
            $patients = $patientService-> getAllPatients();
            echo "Xoa thanh cong";
        }
    }
}