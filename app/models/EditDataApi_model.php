<?php
class EditDataApi_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function updateUser($nama, $foto, $noHp, $alamat, $jk, $tglLahir, $idUser)
    {
        $query = "UPDATE tb_user SET 
        nama_lengkap = :nama, 
        foto_user = :foto, 
        no_hp = :noHp, 
        alamat = :alamat, 
        jenis_kelamin = :jk, 
        tggl_lahir = :tglLahir 
        WHERE id_user = :idUser";
        
        $this->db->query($query);
        $this->db->bind(':nama', $nama);
        $this->db->bind(':noHp', $noHp);
        $this->db->bind(':foto', $foto);
        $this->db->bind(':alamat', $alamat);
        $this->db->bind(':jk', $jk);
        $this->db->bind(':tglLahir', $tglLahir);
        $this->db->bind(':idUser', $idUser);

        $this->db->execute(); 
        return true;
    }

    public function updatePassword($password, $idUser){
        // Lakukan hashing pada kata sandi
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "UPDATE tb_user SET password = :pass
        WHERE id_user = :idUser";
    
        $this->db->query($query);
        $this->db->bind(':pass', $hashedPassword); // Gunakan hasil hash sebagai nilai password
        $this->db->bind(':idUser', $idUser);
    
        $this->db->execute();
        return true;
    }

    public function getStoredPassword($idUser) {
        $query = "SELECT password FROM tb_user WHERE id_user = :idUser";
    
        $this->db->query($query);
        $this->db->bind(':idUser', $idUser);
        $storedPassword = $this->db->single();
    
        return $storedPassword['password'];
    }
    
    
}
