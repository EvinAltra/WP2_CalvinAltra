<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view_form_matakuliah');
    }

    public function cetak()
    {
        // $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
        //     'required' => 'Kode Matakuliah Harus diisi',
        //     'min_length' => 'Kode terlalu pendek'
        // ]);
        
        // $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
        //     'required' => 'Nama Matakuliah Harus diisi',
        //     'min_length' => 'Nama terlalu pendek'
        // ]);
        
        // if ($this->form_validation->run() != true) {
        //     $this->load->view('view-form-matakuliah');
        // } else {
        //     // Lakukan sesuatu ketika validasi berhasil
        // }
        
        $data = [
            'tanggal' => $this->input->post('tanggal'),
            'kls' => $this->input->post('kls'),
            'tmpt' => $this->input->post('tmpt'),
            'nama' => $this->input->post('nama'),
            'kelamin' => $this->input->post('kelamin'),
            'alamat' => $this->input->post('alamat'),
            'agama' => $this->input->post('agama'),
            'nim' => $this->input->post('nim')
        ];
        $this->load->view('view_data_matakuliah', $data);
    }
}
