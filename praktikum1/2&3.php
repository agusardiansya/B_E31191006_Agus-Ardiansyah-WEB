<?php 
class kendaraan {
        var $JenisKendaraan;
        var $JumlahRoda;
        var $Merk;
        var $BahanBakar;
        var $Harga;
        var $TahunPembuatan;
        
        function dapatSubsidi() {
            if ($this->bahanBakar = 'Premium') && ($this->tahunPembuatan < 2005) $subsidi = 'Dapat';
            else $subsidi = 'Tidak Dapat';
            return $subsidi;
        }
        
        function hargaSecond() {
            if ($this->tahunPembuatan > 2005)
                $second = $this->harga * 20/100;
            else if ($this->tahunPembuatan >= 2005)
                $second = $this->harga * 30/100;
            else ($this->tahunPembuatan <= 2000)
                $second = $this->harga * 40/100;
                return $second;        
        }
        
    }