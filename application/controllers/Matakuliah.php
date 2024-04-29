<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('View_form_matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode','kode Matakuliah',
            'required|min_length[3]',[
            'required'=>'kode Matakuliah harus diisi',
            'min_length'=>'kode terlalu pendek']);

        $this->form_validation->set_rules('nama','nama Matakuliah',
            'required|min_length[3]',[
            'required'=>'Nama Matakuliah harus diisi',
            'min_length'=>'Nama Matakuliah terlalu pendek']);

        $this->form_validation->set_rules('sks','SKS',
        'required', [
            'required'=>'SKS harus diisi'
        ]);

        // Jalankan validasi
        if ($this->form_validation->run() != true){
            $this->load->view('View_form_matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
            ];
    
            $this->load->view('View_data_matakuliah', $data);
        }     
    }
}
?>
