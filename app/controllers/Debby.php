<?php 
    class Debby extends Controller{
        public function index()
        {
            $data['judul'] = 'Debby';
            $data['debby'] =$this ->model('debby_model') ->getAllPenghuni();
            $this->view('templates/header', $data);
            $this->view('debby/index', $data);
            $this->view('templates/footer');
        }
        
        public function addDebby(){
            $data = $_POST;
            $foto = $_FILES['foto'];

            // Handle file upload
            $fotoName = $this->uploadFoto($foto);

            // Add data to the model
            $data['foto'] = $fotoName;
            if ($this->model('Penghuni_model')->addPenghuni($data) > 0) {
                Flasher::setFlash('berhasil', 'ditambahkan', 'success');
                header('Location: http://localhost/PHP-MVC/public/debby');
            } else {
                Flasher::setFlash('gagal', 'ditambahkan', 'danger');
                header('Location: http://localhost/PHP-MVC/public/debby');
                exit;
        }
    }
    private function uploadFoto($file)
        {
            $namaFile = $file['name'];
            $ukuranFile = $file['size'];
            $error = $file['error'];
            $tmpName = $file['tmp_name'];

            // Check if there is a file uploaded
            if ($error === 4) {
                // No file uploaded
                return "";
            }

            // Generate a unique name for the file
            $namaFileBaru = uniqid() . '-' . $namaFile;

            // Move the uploaded file to the desired folder
            move_uploaded_file($tmpName, 'path/to/your/upload/folder/' . $namaFileBaru);

            return $namaFileBaru;
        }

        public function editDebby($id_Penghuni)
        {
            $data['judul'] = "Edit Penghuni";
            $data['penghuni'] = $this->model('debby_model')->getPenghuniById($id_Penghuni);
            $this->view('templates/header', $data);
            $this->view('debby/edit', $data);
            $this->view('templates/footer');
        }
}