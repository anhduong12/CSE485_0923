<?php
require_once APP_ROOT.'/app/models/Patient.php';
class PatientService {
    public function getAllPatients(){
        //   B1: ket noi DB
        try{
            $conn = new PDO('mysql:host=localhost;dbname=phongmach','root','123');
            // B2: tuy van du lieu
            $sql = "SELECT * FROM BenhNhan";
            $stmt = $conn ->query($sql);
            // B3: Xu ly kqua tra ve
            $patients = [];
            while ($row = $stmt->fetch()){
                    $patient = new Patient($row['id'],$row['tenBenhNhan'],$row['ngayKham'],$row['trieuChung'],$row['idBacSi']);
                    $patients[]=$patient;
                }
            return $patients;
        } catch (PDOException $e){
            return  $patients = [];
        }
    }



}