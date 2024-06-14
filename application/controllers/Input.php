<?php
class Input extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_form_input');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|min_length[3]', [
            'required' => 'Nama Mahasiswa Harus Diisi',
            'min_length' => 'Kode terlalu pendek'
        ]);
        
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama Matakuliah Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);
        
        if ($this->form_validation->run() != true) {
            $this->load->view('v_form_input');
        } else {
            // Lakukan sesuatu ketika validasi berhasil
        }
        
        $data = [
            'nama' => $this->input->post('nama'),
            'kode' => $this->input->post('kode'),
            'nis'=> $this ->input-> post('nis'),
            'kls'=> $this ->input-> post('kls'),
            'sks' => $this->input->post('sks'),
        ];
        $this->load->view('v_data_input', $data);
    }
}
