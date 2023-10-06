<?php

class Patient{
    private $id;
    private $tenBenhNhan;
    private $ngayKham;
    private $trieuChung;
    private $idBacSi;

    // Methods
    public function __contruct($id,$tenBenhNhan,$ngayKham,$trieuChung,$idBacSi){
        $this->id=$id;
        $this->tenBenhNhan=$tenBenhNhan;
        $this->ngayKham=$ngayKham;
        $this->trieuChung=$trieuChung;
        $this->idBacSi=$idBacSi;
    }

    // Getters/setters
    public function getId(){
        return $this->id;
    }
    public function setId(){
        $this->id;
    }
    public function getTenBenhNhan(){
        return $this->tenBenhNhan;
    }
    public function setgetTenBenhNhan(){
        $this->tenBenhNhan;
    }
    public function getNgayKham(){
        return $this->ngayKham;
    }
    public function setNgayKham(){
        $this->ngayKham;
    }
    public function getTrieuChung(){
        return $this->trieuChung;
    }
    public function setTrieuChung(){
       $this->trieuChung;
    }
    public function getIdBacSi(){
        return $this->idBacSi;
    }
    public function setIdBacSi(){
        $this->idBacSi;
    }

}