<?php

    Class Mahasiswa{
        public $nim;
        public $nama;
        public $kuliah;
        public $matkul;
        public $nilai;

    public function __construct($nim, $nama, $kuliah, $matkul, $nilai){
        $this-> nim = $nim;
        $this-> nama = $nama;
        $this-> kuliah = $kuliah;
        $this-> matkul = $matkul;
        $this-> nilai = $nilai;
    }

    // mendapatkan grade
    public function getGrade(){
        if ($this-> nilai >= 85)
            return 'A';
        elseif ($this-> nilai >= 75)
            return 'B';
        elseif ($this-> nilai >= 65)
            return 'C';
        elseif ($this-> nilai >= 55)
            return 'D';
        else
            return 'E';
    }

    // mendapatkan predikat
    public function getPredikat(){
        switch (true){
            case ($this-> nilai >= 85):
                return 'Sangat Memuaskan';
            case ($this-> nilai >= 75):
                return 'Memuaskan';
            case ($this-> nilai >= 65):
                return 'Cukup';
            case ($this-> nilai >= 55):
                return 'Kurang';
            default:
                return 'Sangat Kurang';
        }
    }

    // mendapatkan status
    public function getStatus(){
        return ($this-> nilai >=65 ) ? 'Lulus' : 'Tidak Lulus';
    }
    }

?>